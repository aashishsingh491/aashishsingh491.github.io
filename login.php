<?php
if($_POST)
{
    $host ="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="registervalues";
    $user=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
$query="SELECT * from signup where firstname='$user' and email='$email'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
    session_start();
    $_SESSION['store']='true';
    header('location:xxx.html');
}
    else
    {
        echo "wrong username or email or password";
    }
    
}
?>