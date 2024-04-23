<?php
  $showerror="false";
  if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $username=$_POST['loginusername'];
    $pass=$_POST['loginpassword'];

    $sql="Select * from users where user_name='$username'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
        $row=mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['user_pass'])){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['SrNo']=$row['SrNo'];
            $_SESSION['username']=$username;
            echo "logged in";
            header("location:../index.php");
        }
        else
        {
            echo "unable to login";
        }
    }
  }  
?>