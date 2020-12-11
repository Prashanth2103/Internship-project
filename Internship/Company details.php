<?php
include 'app/connect.php';
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Studentlogin.php");

}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assests/login.css">
    
</head>
<style>

  body{

background:linear-gradient(#047289,#ffa2fd);
  font-family: sans-serif;
  color:white;
  background-size:cover;
  background-attachment: fixed;
  height:auto;
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

     table {
  border-collapse: collapse;
  width: 50%;
 
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  color: black;
}

tr:hover 
{
     background-color:orange;
     
}

table.center {
  margin-left: auto; 
  margin-right: auto;
  margin-top: 5%;
}



h3
{
  text-align: center;
  color: black;
  font-family: verdana;
  font-size: 20px;: 
  }
  #n1{
     color: white;
     font-family: verdana;
     font-size: 20px;
    }

  </style>

<body>


  <div id="main">
    <nav>  
      <ul>
             
            <li><a href="Student afterlogin.php">Dashboard</a></li>
            <li><a href=logout1.php>Logout</a></li>
            </ul>
    </nav>
</div>
<h3><u>Company Details</u></h3>

   <table class="center">
   	<tr>
      <th>COMPANY ID</th>
   		<th>NAME</th>
   		<th>EMAIL</th>
   		<th>PHONE</th>
   		
   	</tr>
   	<?php 
      $sql = "SELECT * FROM company";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {
        ?> 
        <tr>
        	<td> <?php echo $row['COMPANYID']; ?> </td>
        	<td> <?php echo $row['CNAME']; ?> </td>
        	<td> <?php echo $row['EMAIL']; ?> </td>
        	<td> <?php echo $row['PHONE']; ?> </td>
        	
        </tr>  
        <?php     	
            }
     	?>  	
   </table>   


</body>
</html>