<?php
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Studentlogin.php");

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

              h2{
                text-align: center;
                color: black;
                font-size: 30px;
                font-family: verdana;

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

         

              
              
              #d1
              {
                color: black;
                font-size: 40px;
                font-family: verdana; 
              }

              #s1
              {
                    margin-left: 32%;
                    list-style-type: none;
                    display:inline-block;
                    color: white;
                    font-size: 30px;
                    font-family: verdana;
                    text-decoration: none;
 

              }

              #s2
              {
                    margin-left: 31%;
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
                width:35%;
                margin: 40px auto;
              
                padding: 10px;
                background:rgba(0,0,0,0.3)
              }
              #c2
              {
                width:35%;
                margin:40px auto;
              
                padding: 10px;
                background:rgba(0,0,0,0.3)
              }
              #c3
              {
                width:35%;
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
            <li><a href="logout1.php">Logout</a></li>
            </ul>
    </nav>
</div>
<h2 id="d1"><b><?php  echo $_SESSION['Name'];  ?></b></h2>

  <fieldset id="c1">
<a href="Company details.php">
<h3 id="s1">Company</h3>
</a>

</fieldset>

<fieldset id="c2">
<a href="Workshop details.php">
<h3 id="s2">Workshop</h3>
</a>
</fieldset>
<fieldset id="c3">
<a href="Placements.php">
<h3 id="s3">Student Participated</h3>
</a>
</fieldset>

           
      
</body>
</html>