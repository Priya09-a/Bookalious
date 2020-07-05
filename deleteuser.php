<?php

$link = mysqli_connect('localhost','root','','bookalious');


if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $delete_user = "delete from user where user_id = '$user_id'";

    $run_delete = mysqli_query($link,$delete_user);

    if($run_delete){
        echo "<script>alert('User Removed')</script>";
        echo "<script>window.open('viewcustomers.php','self')</script>";
    }
}

?>