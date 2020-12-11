
<?php 
include 'app/connect.php';
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
    color: white;
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
  text-align: center;
}

h3{
  color: black;
  text-align: center;
}




  #n1{
    color: white;
     font-family: verdana;
    font-size: 20px;
     }


</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>  
            <li><a href="Alogin after.php">Dashboard</a></li>
            <li><a href="logout.php">logout</a></li>
            
        </ul>
    </nav>
</div>





<body>
 
    <form method="post" action="studentdetails.php">
     <h3><u>Student details</u></h3>        

<!--<table class="center">
    <tr>
      <th>USN</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DEPARTMENT</th>
      <th>GRADUATION YEAR</th>
      <th>COMPANY NAME</th>
      
    
    </tr>
    <?php
      $sql = "SELECT S.USN,S.NAME,S.EMAIL,S.DEPARTMENT,S.GRAD,C.CNAME FROM student S, company C, placements P WHERE P.COMPANYID=C.COMPANYID AND P.USN=S.USN";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_assoc()){
    ?>
    <tr>
       <td> <?php echo $row['USN']; ?> </td>
      <td> <?php echo $row['NAME']; ?> </td>
      <td> <?php echo $row['EMAIL']; ?> </td>
      <td> <?php echo $row['DEPARTMENT']; ?> </td>
      <td> <?php echo $row['GRAD']; ?> </td>
       <td> <?php echo $row['CNAME']; ?> </td>
        
    </tr>
    <?php
      }
    ?>
  </table>
-->



<table class="center">
    <tr>
      <th>USN</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DEPARTMENT</th>
      <th>PHONE</th>
      <th>GRADUATION YEAR</th>
      
      
    
    </tr>
    <?php
      $sql = "SELECT S.USN,S.NAME,S.EMAIL,S.DEPARTMENT,S.GRAD,S.PHONE FROM student S";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_assoc()){
    ?>
    <tr>
       <td> <?php echo $row['USN']; ?> </td>
      <td> <?php echo $row['NAME']; ?> </td>
      <td> <?php echo $row['EMAIL']; ?> </td>
      <td> <?php echo $row['DEPARTMENT']; ?> </td>
      <td><?php echo $row['PHONE']; ?></td>
      <td> <?php echo $row['GRAD']; ?> </td>
      
        
    </tr>
    <?php
      }
    ?>
  </table>
</form>
</body>
</html>