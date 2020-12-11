<?php 
include 'app/connect.php';
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Alogin.php");

}

if(isset($_POST['submit'])){

    $CID = $_POST['CID'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
       
    $cid_check = "SELECT * FROM company WHERE COMPANYID = ?";
    $cid_stmt = $conn->prepare($cid_check);
    $cid_stmt->bind_param("i",$CID);
    $cid_stmt->execute();

    $cid_stmt->store_result();
    if($cid_stmt->num_rows()>0){
        ?> 
        <script> alert(" Company Already Registered!"); </script>
        <?php
    }
    else{


    //template for the sql query
    $sql = "INSERT INTO company(COMPANYID,CNAME,EMAIL,PHONE) VALUES(?,?,?,?)";

    //preparing the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issi",$CID,$Name,$Email,$Phone);
    $result = $stmt->execute();

    if($result)
    {
      ?>
       <script> alert("Company Registeration Successfull");</script>
    <?php
       //header("location:Alogin after.php");
    }
  }
}
/*
    $expectedData = 1;
    $spoiledData = "1; DROP TABLE student";
    $query = "select * from student where USN = $spoiledData";
    select * from student where USN=1; 
    Drop table student;
*/

?>
<style>

   h2{
                text-align: center;
                color: white;
              }
  #n1{
       color: white;
       font-family: verdana;
       font-size: 20px;
    }
</style>


<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="assests/registration.css">
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


  h3
  {
    color: black;
    text-align: center;
    font-family: verdana;
    font-size: 25px;
  }
  #d1
              {
                color: black;
                font-size: 40px;
                font-family: verdana; 
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

<h3><u>Company details</u></h3>


<form action="update company details.php" method="post">
<fieldset>
            
            <label  id="a" for="CID">Company ID</label><br>
            <input type="number" name="CID" maxlength="10"  placeholder="Enter  Company id" required autocomplete="off">
            <br> 
             <label id="c" for="Name">Name</label><br>
            <input type="text" name="Name" placeholder="Enter Name" required autocomplete="off" >
            <br> 
            <label id="c" for="Email">Email</label><br>
            <input type="email" name="Email" placeholder="Enter Email" required autocomplete="off" >
            <br> 
            <label id="c" for="Phone">Phone</label><br>
            <input type="tel" name="Phone" placeholder="Enter Phone" required autocomplete="off" >
            <br> 


            <button type="submit" name="submit"><b>Submit</b></button>
            
             <br>
           </fieldset>
         </form>




</body>
</html>