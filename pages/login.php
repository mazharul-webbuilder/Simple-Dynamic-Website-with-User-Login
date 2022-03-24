<?php include "header.php";?>
<?php
    if (isset($_SESSION['userId']))
    {
        header('Location: action.php?page=home');
    }
?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Login</h4>
                        </div>
                        <div class="card-body">
<!--                           login form start here-->
                            <p class="text-center text-danger"><?php echo isset($msg)? $msg : ''?></p>
                            <form action="action.php" method="POST">
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="logBtn" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php";?>