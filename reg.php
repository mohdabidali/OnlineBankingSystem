<?php include"includes/header.php" ?>
<?php

 global $connection;
	if(isset($_POST['submit']))
	{
   
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mnum=$_POST['ph'].$_POST['mnum'];
        $pass=$_POST['pass'];  
        $email=$_POST['email'];  
        $gender=$_POST['gender'];  
        
        $query="insert into registration(fname,lname,pnumber,email,password,gender)";
        $query.=" values('{$fname}','{$lname}','{$mnum}','{$email}','{$pass}','{$gender}') ";
     
        	
	    $result=mysqli_query($connection,$query);
	
         confirm($result);
	    header('location:index.php');
        
        
    }
    

?>
