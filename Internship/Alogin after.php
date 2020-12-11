<?php
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Alogin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body
{
  background:linear-gradient(#047289,#ffa2fd);
  font-family: sans-serif;
  color:white;
  background-size:cover;
  background-attachment: fixed;
  height:auto;
}

h1
{
   color:white;
   font-size: 70px;
   margin-top: 20%;
}          
nav 
{ 
	width:100%;
    height:80px;
    
    line-height: 50px;
   
}
nav ul
{
    float: left;
    margin-right:30px
}
nav ul li
{
    list-style-type: none;
    display:inline-block;
    transition: 0.2s all;
                
}
nav ul li a
{
    text-decoration: none;
    color: #fff;
    padding: 40px;
    font-size: 15px;
    font-family: verdana;
}
nav ul li:hover
{
    background-color: green;
}

            #b1{
              padding-left: 20px;
              color: black;
              }
            #b2{
              padding-left: 20px;
              color: black;
              }
              #b3{
              padding-left: 20px;
              color: black;
              
              }


              h2{
                text-align: center;
                color: black;
                font-size: 30px;
                font-family: verdana;

              }


              #m1
              {
                text-align: center;
                color: white;
                font-family: verdana;
                font-size: 30px;
              }


              #n1{
                color: white;
                font-family: verdana;
                font-size: 20px;
              }
              #d1
              {
                color: black;
                font-size: 40px;
                font-family: verdana; 
              }





              #s1
              {
                    margin-left: 27%;
                    list-style-type: none;
                    display:inline-block;
                    color: white;
                    font-size: 30px;
                    font-family: verdana;
                    text-decoration: none;
 

              }

              #s2
              {
                    margin-left: 18%;
                    list-style-type: none;
                    display:inline-block;
                    color: white;
                    font-size: 30px;
                    font-family: verdana;
                    text-decoration: none;
              }
              #s3
              {
                    margin-left: 15%;
                    list-style-type: none;
                    display:inline-block;
                    color: white;
                    font-size: 30px;
                    font-family: verdana;
                    text-decoration: none;
              }
              #c1
              {
                width:25%;
                margin:40px auto;
                padding: 10px;
                background:rgba(0,0,0,0.3)
              }
              #c2
              {
                width:25%;
                margin:40px auto;
                padding: 10px;
                background:rgba(0,0,0,0.3)
              }
              #c3
              {
                width:25%;
                margin:40px auto;
                padding: 10px;
                background:rgba(0,0,0,0.3)
              }

              
</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
         
            <li><a href="#">Dashboard</a></li>
            <li><a href=logout.php>Logout</a></li>
            </ul>
    </nav>
</div>

<!--<h3 id="m1">Welcome</h3>
<h2><?php  echo $_SESSION['Name'];  ?></h2>
-->
    <h2 id="d1"><b><?php  echo $_SESSION['Name'];  ?></b></h2>
<div id = "boxes"> 
          
<fieldset id="c1">
<a href="studentdetails.php">
<h3 id="s1">Student</h3>
</a>
</fieldset>
<fieldset id="c2">
<a href="update company details.php">
<h3 id="s2">Add Company</h3>
</a>
</fieldset>
<fieldset id="c3">
<a href="deleteyear.php">
<h3 id="s3">Delete Student</h3>
</a>
</fieldset>
             


</body>
</html>