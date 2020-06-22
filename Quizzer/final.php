<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score']
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css.css" type="text/css" />
</head>

<body style="background: #719ecb">


<header>
    <div class="container pt-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 10px">
            <a class="navbar-brand pl-3" href="#">PHP Quizzer</a>
        </nav>
    </div>
</header>

<main class="text-light" style="padding-top: 10%">
    <div class="container mx-auto" style="max-width: 580px;background: #02001ba6;border-radius: 5%;
             height: 450px;text-align: center;">
        <div>
            <h2 class="display-1 ">You're Done!</h2>
            <p>Congrats! <br> <strong class="display-4"><?php echo $name ?>
                </strong>
            </p><br> You have completed the test</p>
            <p>Final Score: <br> <strong class="display-4"><?php echo $score ?></strong></p>

        </div>
        <form action="process.php" method="POST">
            <button type="submit" name="reset" class="btn btn-outline-light mt-3 start">Take Again</button>
        </form>

    </div>
</main>


<footer class="page-footer font-small pt-2" style="color:#ffffff8c; ">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 ">Copyright &copy; YOUCODE, PHP Quizzer  <br>
        <a href="https://youcode.ma/" style="text-decoration: none;color:#ffffff8c; "> Youcode.ma</a>
    </div>
    <!-- Copyright -->

</footer>

</html>