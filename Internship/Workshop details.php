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
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  #n1{
     color: white;
     font-family: verdana;
     font-size: 20px;
    }
body
{
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
  width: 80%;
 
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
}


  h3
  {
    color: black;
    text-align: center;
    font-family: verdana;
    font-size: 30px;
    color: black;
  }
  #d1
              {
                color: black;
                font-size: 40px;
                font-family: verdana; 
              }
              h2{
                text-align: center;
                color: black;
                font-size: 30px;
                font-family: verdana;

              } 
</style>
</head>
<body>
<div id="main">
    <nav>  
      <ul>
            
            <li><a href="Student afterlogin.php">Dashboard</a></li>
            <li><a href="logout1.php">logout</a></li>
        </ul>
    </nav>
</div>

<h3><u>Workshop details</u></h3>



<table class="center">
    <tr>
      <th>WORKSHOP ID</th>
      <th>COMPANY NAME</th>
      <th>DESCRIPTION</th>
      <th>SKILLS</th>
    
    </tr>
    <?php
      $sql = "SELECT W.WORKSHOP_ID,W.DESCRIPTION,W.SKILLS,C.CNAME FROM workshop W, company C WHERE W.COMPANYID=C.COMPANYID";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_assoc()){
    ?>
    <tr>
       <td> <?php echo $row['WORKSHOP_ID']; ?> </td>
      <td> <?php echo $row['CNAME']; ?> </td>
      <td> <?php echo $row['DESCRIPTION']; ?> </td>
        <td> <?php echo $row['SKILLS']; ?> </td>
    </tr>
    <?php
      }
    ?>
  </table>
</body>
</html>