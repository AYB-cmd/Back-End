<?php



    session_start();

   include 'database.php';



if (isset($_POST['submitName'])) {
    $_SESSION['count'] = 1;
    $_SESSION['score'] = 0;

    $_SESSION['name'] = $_POST['Name'];
    $user = mysqli_real_escape_string($conn, $_POST['Name']);
    $sql=" INSERT INTO `result` (name) VALUES ('$user');";
    mysqli_query($conn,$sql);
    header("Location: ./question.php?n=1");

}





if (isset($_POST['submit'])) {

    $_SESSION['count'] = $_SESSION['count'] + 1;
    $counter = $_SESSION['count'];
    $current = $_POST['choice'];
    $sql = "SELECT * FROM choice where question_id ={$counter};";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result) + 1;

    if ($counter <= $resultCheck){
        $_SESSION['score'] = $_SESSION['score'] + $current;
        header("Location: ./question.php?n={$counter}");
    }
    else{
        $_SESSION['score'] = $_SESSION['score'] + $current;
        $score = $_SESSION['score'];
        $name = $_SESSION['name'];
        $sql=" UPDATE `result` SET score = '{$score}' where name = '{$name}' ORDER BY  `id_result` DESC LIMIT 1;";
        $conn->query($sql);

        header("Location: ./final.php");

        }


}
if (isset($_POST['reset'])) {

    $_SESSION['count'] = 1;
    $_SESSION['score'] = 0;

    header("Location: ./question.php?n=1");
}


