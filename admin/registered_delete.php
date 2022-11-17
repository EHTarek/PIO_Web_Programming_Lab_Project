<?php
session_start();
$_SESSION['current_page'] = "registered";
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Delete - Registered users</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Delete - Registered users</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Delete - Registered users</h3>
            <a href="registered.php" class="btn btn-danger btn-sm float-right">Back</a>

        </div>
        <div class="card-body col-8 mx-auto">

            <form action="code.php" method="POST">
                <div class="modal-body">
                    <?php
                    if (isset($_GET['user_id'])) {
                        $user_id = $_GET['user_id'];
                        $query = "SELECT * FROM users WHERE id='$user_id' LIMIT 1";
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                    ?>

                                <input type="hidden" name="user_id" value="<?php echo $row['id']; ?> " />
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $row['name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $row['phone']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $row['password']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Re - Password" name="password" value="<?php echo $row['password']; ?>">
                                </div>
                    <?php
                            }
                        } else {
                            echo "<h4>No Record Found.!</h4>";
                        }
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- /.content-wrapper -->

<?php
include('includes/footer.php');
unset($_SESSION['current_page']);
?>