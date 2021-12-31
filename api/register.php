<?php
include("connect.php");

$uname=$_POST['uname'];
$collegename=$_POST['collegename'];
$city=$_POST['city'];
$student=$_POST['student'];
$username=$_POST['username'];
$password=$_POST['password'];
$comform=$_POST['comform'];

if($password==$comform){
    $insert=mysqli_query($connect,"INSERT INTO user (uname, collegename, city, student, username, password, status, votes) VALUES ('$uname', '$collegename', '$city', '$student', '$username', '$password', 0, 0)");
    if($insert){
    echo'
    <script>
             alert("Registration Successfull!");
             window.location="http://localhost/vaccination/index.html";
    </script>
    ';
    }
    else{
        echo'
        <script>
        alert("Some Error occured!");
        window.location="http://localhost/vaccination/Register.html";
        </script>';
    }
}
else{
    echo'
    <script>
    alert("Password and Comform Password does not match!");
    window.location="http://localhost/vaccination/Register.html";
    </script>';
}


?>