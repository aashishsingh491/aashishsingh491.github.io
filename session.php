<?php
    if(isset($_POST['submit'])){
 
        session_start();
    $host ="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="registervalues";
    $name=$_POST['name'];
    $email=$_POST['email'];
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
 
    
 $query="SELECT * from signup where firstname='$name' and email='$email'";
        $result=mysqli_query($conn,$query);
 
        if (mysqli_num_rows($result) == 0){
            $_SESSION['message']="Login Failed. User not Found!";
            header('location:login.html');
        }
        else{
 
            if (isset($_POST['remember'])){
                //set up cookie
                setcookie("name", $name, time() + (86400 * 30)); 
                setcookie("email", $email, time() + (86400 * 30)); 
            }
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            header('location:xxx.php');
        }
    }
    else{
        header('location:login.html');
        $_SESSION['message']="Please Login!";
    }
?>