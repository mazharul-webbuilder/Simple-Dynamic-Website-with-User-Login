<?php include "pages/header.php";?>
<?php
    if (!isset($_SESSION['userId']))
    {
        header('Location: action.php?page=login');
    }
?>

    <section class="py-5 bg-black s-height">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h1 class="text-center text-danger">SERIES CREATOR</h1>
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
                                        <label for="series" class="form-label text-dark">Your Series</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea  id="series" class="bg-white form-control" disabled><?php foreach ($myArray as $value)
                                            {
                                                echo $value. ' ';
                                            }
                                        ?>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-danger" name="seriesBtn">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "pages/footer.php";?>