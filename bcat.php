<?php
session_start();
echo"Welcome ".$_SESSION['username'];
$userprofile=$_SESSION['username'];
if($userprofile==true)
{
    
}
else
{
    header('location:login.html');
}
?>
<a  align="right" href="logout.php">Logout</a>
<html>
<head>
    <title>
       Book categories   
    </title>
    
    <style>
    body
        {
            background-color: dimgray;
           background-image: url(b15.jpg);
    background-repeat: no-repeat;
    margin: 0px;
    padding: opx;
    background-size: cover; 

        }
        #p
        {
            font-size: 35px;
            font-weight: bolder;
            text-decoration-color: bisque;
            color: aqua;
        }
    #h
        {
            text-align: center;
            width: 100%;
            height: 50px;
            font-family: monospace;
            font-size: 30;
            font-weight: bolder;
            color:yellow;
        }
        h2:hover
        {
            background-color: brown;
        }
        #h1
        {
            background-color: coral;
        }
        #header
{
  background-color: coral;
    width: 100%;
    align-content: center;
    height: 50px;
}
        #footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:55px;
   width:100%;
   background-color: lightseagreen;
}
    
    </style>
    </head>
    <body>
        <header id="header">
        
    <h1 align="center">
        BUY AND SELL OLD BOOKS
        </h1 >
        </header><br>
        
        <P id="p" align="right" ><a href="sellyourbook.html">SELL YOUR BOOK</a></P>
        <P id="p" align="left" ><a href="requestcancel.html">CANCEL REQUEST</a></P>
       <br>
        <a href="sciencefiction.html"><h2 id="h">SCIENCE FICTION</h2></a><br>
        <a href="drama.html" ><h2 id="h">DRAMA</h2></a><br>
        <a href="actionadventure.html"><h2 id="h">ACTION AND ADVENTURE</h2></a><br>
        <a href="mystery.html"><h2 id="h">MYSTERY</h2></a><br>
        <a href="horror.html"><h2 id="h">HORROR</h2></a><br>
        <a href="novel.html"><h2 id="h">NOVEL</h2></a><br>
        <a href="autobiography.html"><h2 id="h">AUTOBIOGRAPHIES</h2></a><br><br>

        <footer id="footer">
    
        &copy;2019 All rights reserved (Buy and sell old books)<br>
    <center>
    Connect: <span style="background-color: deeppink;font-weight: bolder">Instagram </span>
    <span style="background-color: mediumslateblue;font-weight: bolder">Facebook </span>
    <span style="background-color: skyblue;font-weight: bolder">Twitter </span>
    <span style="background-color: greenyellow;font-weight: bolder">Whatsapp </span><br>
    </center>

    Contact:8839191625,7024505763
        
        </footer>  
    </body>
</html>