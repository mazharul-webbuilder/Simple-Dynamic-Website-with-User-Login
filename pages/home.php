<?php include 'pages/header.php';?>
<?php
    if (!isset($_SESSION['userId']))
    {
        header('Location: action.php?page=login');
    }
?>

<section class="bg-black s-height">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h1 class="text-center text-danger">CALCULATOR</h1>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="starting_number" class="form-label text-dark">Starting Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control text-dark" id="starting_number" name="starting_number">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="ending_number" class="form-label text-dark">Ending Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control text-dark" id="ending_number" name="ending_number">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="result" class="form-label text-dark">Result</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control bg-white" disabled id="result" value="<?php echo $calResult;?>">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label class="form-label text-dark">Select Action</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-label px-1"><input type="radio" name="action" value="+"> Addition </label>
                                        <label class="form-label px-1"><input type="radio" name="action" value="-"> Subtraction </label>
                                        <label class="form-label px-1"><input type="radio" name="action" value="*"> Multiplication </label>
                                        <label class="form-label px-1"><input type="radio" name="action" value="/"> Division </label>
                                        <label class="form-label px-1"><input type="radio" name="action" value="%"> Reminder </label>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="calBtn" class="btn btn-danger">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'pages/footer.php';?>
