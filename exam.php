<?php

$uname=$_post['name'];

if(!empty($uname))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="aaa";


$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error())
{
	die();
}
else
{
	$sql="insert into hello (name) values ('$uname')";


if($conn->query($sql))
{
	echo "successfull";

}

else
{
echo "error";
}
}
else
{
	echo "all req";
}

}
?>