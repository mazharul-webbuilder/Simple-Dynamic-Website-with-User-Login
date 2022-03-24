<?php
    require_once "vendor/autoload.php";
    use App\classes\Calculator;
    use App\classes\Series;
    use App\classes\Auth;


    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'login')
        {
            include "pages/login.php";
        }

        elseif ($_GET['page'] == 'home')
        {
            $calResult = '';
            include 'pages/home.php';
        }
        elseif ($_GET['page'] == 'series')
        {
            $myArray = [];
            include 'pages/series.php';
        }
        elseif ($_GET['page'] == 'logout')
        {
            $logout =  new Auth();
            $logout->logout();
        }
    }
    elseif (isset($_POST['logBtn']))
    {
        $auth = new Auth($_POST);
        $msg = $auth-> loginCheck();
        include "pages/login.php";
    }
    elseif (isset($_POST['calBtn']))
    {
        $calOb     = new Calculator($_POST);
        $calResult = $calOb-> myCalculator();
        include "pages/home.php";
    }

    elseif (isset($_POST['seriesBtn']))
    {
        $seriesOb      = new Series($_POST);
        $myArray = $seriesOb->mySeries();

        include "pages/series.php";
    }


?>