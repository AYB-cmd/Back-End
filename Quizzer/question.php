<?php

    session_start();
    $counter = $_SESSION['count'];
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

<main class="text-light" style="padding-top: 10%">
    <div class="container mx-auto" style="max-width: 580px;background: #02001ba6;border-radius: 5%;
             height: 450px;text-align: center;">
        <div class="pt-5">
            <h2 class="display-1 pb-4 current">Question <?php echo $counter ?> of 5</h2>
            <p class="question"><strong>
                    <?php
                    include "database.php";
                    $sql = "SELECT * FROM questions where question_id = {$counter};";
                    $result = mysqli_query($conn,$sql);
                    $resultCheck = mysqli_num_rows($result);
                    $row = mysqli_fetch_assoc($result);
                    echo $row['Text']; ?>
                </strong></p>



            <form method="post" action="process.php">
            <ul class="text-left" style="list-style: none;padding-left: 30%" class="choices">

                <?php
                include "database.php";
                $sql = "SELECT * FROM choice where question_id ={$counter};";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result)){

                        echo '<li class="pb-2"><input required class="mr-3" name="choice" type="radio" value="'.$row['is_correct'].'" />'. $row['text'] .
                        '</li>';
                    };
                };?>

            </ul>
                <input type="submit"  name="submit" class=" btn btn-outline-light start" value="Submit" />
            </form>
        </div
    </div>
</main>
<footer class="page-footer font-small pt-2" style="color:#ffffff8c; ">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 ">Copyright &copy; YOUCODE, PHP Quizzer  <br>
        <a href="https://youcode.ma/" style="text-decoration: none;color:#ffffff8c; "> Youcode.ma</a>
    </div>
    <!-- Copyright -->

</footer>

</body>













</html>