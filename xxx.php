<?php
session_start();

echo "Cookie saved ";
echo "<br>";
echo "User name: ".$_SESSION['name'];
echo "<br>";
echo "email: ".$_SESSION['email'];
echo "<br>";
echo "<a href='logout.php'>logout</a>";
?>



<html>
<head>
    <title>
       INDIAN TOURISM   
    </title>
    
    <style>
    body
        {
            background-color: dimgray;
           background-image: url(image123.png);
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
            color:red;
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

    <P id="p" align="right" ><a href="storeinfo.html">Plan Your Journey!!!</a></P>
    <body>
        <header id="header">
        
    <h1 align="center">
        INDIAN TOURISM
        </h1 >

        </header>

        <a href="bihar.html"><h2 id="h">BIHAR</h2></a><br>
        <a href="delhi.html"><h2 id="h">DELHI</h2></a><br>
        <a href="mumbai.html" ><h2 id="h">MUMBAI</h2></a><br>
        <a href="karnatka.html"><h2 id="h">KARNATKA</h2></a><br>
        <a href="tamilnadu.html"><h2 id="h">TAMILNADU</h2></a><br>
        <a href="up.html"><h2 id="h">UTTAR PRADESH</h2></a><br>
        <a href="wbengal.html"><h2 id="h">WEST BENGAL</h2></a><br><br>

        <footer id="footer">
    
        &copy;2019 All rights reserved (Indian Tourism)<br>
    <center>
    Connect: <span style="background-color: mediumslateblue;font-weight: bolder"><a href="https://www.facebook.com/incredibleindia/">Facebook</a> </span>
    <span style="background-color: skyblue;font-weight: bolder"><a href="https://twitter.com/incredibleindia?lang=en">Twitter</a> </span>
    </center>

    Contact:9430515021, 8005965459
        
        </footer>    
    </body>
</html>