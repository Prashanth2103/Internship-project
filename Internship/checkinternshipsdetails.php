<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/login.css">

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
   color:black;
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
    float: right;
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
}
nav ul li:hover
{
    background-color: green;
}


#d1
{
  text-align: center;
  font-family: verdana;
}
</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="logout.php">logout</a></li>
            
        </ul>
    </nav>
</div>



<form>
    <fieldset>
      <label id="d1">Enter the WorkshopID</label>
      <input type="text" name="search" autocomplete="off">
    <button type="submit" name="submit">Search</button>
    </fieldset>
  </form>




</body>
</html>