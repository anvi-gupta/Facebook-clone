<?php
    $con = mysqli_connect('localhost','root','','facebook');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check=mysqli_query($con,"UPDATE userdata SET password ='$passowrd' WHERE phoneoremail='$phoneoremail'")

    if($check>0){
        header('Location:http://localhost/facebookcloneboilerplate/')
    }
    ?>