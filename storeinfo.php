<?php
$user=$_POST['username'];
$dname=$_POST['destinationname'];
$sname=$_POST['statename'];
$jsd=$_POST['jsdate'];
$jed=$_POST['jedate'];
$tn=$_POST['tno'];

if(!empty($user)||!empty($dname)||!empty($sname)||!empty($jsd)||!empty($jed)||empty($tn)){
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
         $sql = "insert into traveldata(User_name,Destination_name,State_name,Journey_start_date,Journey_end_date,No_of_travellers) values('$user','$dname','$sname','$jsd','$jed','$tn')";
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

