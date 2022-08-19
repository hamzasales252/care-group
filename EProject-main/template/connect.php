<?php
    $username="root";
    $host="localhost";
    $password="";
    $db="care";
    $connect=mysqli_connect($host,$username,$password);
    if(!$connect){
        die("issue in the connection");
    }
    $sql="insert into login(first_name,last_name,email,password) value('abdul rehman','xyz','abdulrehman@abx.com','aptech123')";
    mysqli_select_db($connect,$db);
    $result=mysqli_query($connect,$sql);
    if(!$result){
        die("could not insert data");
    }
    echo "Data Added Succesfully";
    mysqli_close($connect);
    ?>