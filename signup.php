<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['password'];
$dob=$_POST['dob'];
$num=$_POST['num'];
$address=$_POST['address'];

if(!empty($fname)||!empty($lname)||!empty($gender)||!empty($email)||!empty($pass)||!empty($cpass)||!empty($dob)||!empty($num)||!empty($address)){
    $host ="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="registervalues";
    
    //create connection
    $conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error()){
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
    }
    else{
         $sql = "insert into signup(firstname,lastname,gender,email,password,confirmpass,dob,phone,address) values('$fname','$lname','$gender','$email','$pass','$cpass','$dob','$num','$address')";
if ($conn->query($sql)){
echo "Data Registered successfully!!!";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
    
} else{
    echo "All field are required";
    die();
}
?> 