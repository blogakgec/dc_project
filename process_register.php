<?php

    session_start();
    require('includes/connection.php');
    $st_no=$_SESSION['student_no'];
    $time= time();
    $query= "INSERT INTO entry 
            VALUES('{$st_no}','{$time}')";
    if($query_select= mysqli_query($con,$query))
    {
        echo "sucessful";
        header("location: index.php");
    }

?>