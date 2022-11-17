<?php
echo '<h1 style="text-align:center; padding:20px 10px; background-color:green; color:white; margin-bottom: 20px;">Action page</h1>';
?>
<?php
$fullname = $email = $phone = $comment = "";
$success;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = test_input($_POST["fullname"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $comment = test_input($_POST["comment"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo $fullname . "<br>" . $email . "<br>" . $phone . "<br>" . $comment;
?>
<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_dbname = "mydb";

// Create connection
$conn = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<br><hr>successfully cunnected to the database!<br>";

$sql = "INSERT INTO contact_form (FullName, Email, Phone, Comment)
VALUES ('$fullname', '$email', '$phone', '$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    $success = 1;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo '<script type="text/javascript">
           setTimeout(function(){ window.location = "../pages/contact_copy.php"; }, 3000);
      </script>';
?> 