<?php
include 'app/connect.php';
?>
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
   margin-top:15%;
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


</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
            <li><a href="#">Home</a></li><br>
            <li><a href="Alogin.php">Admin </a></li><br>
            <li><a href="Studentlogin.php">User</a></li>
        </ul>
    </nav>
</div>


<h1 align=center>Workshop and Placement Training</h1>


</body>
</html>