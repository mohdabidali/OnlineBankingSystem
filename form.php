
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
	
        
        
    }
    

?>


<!--
<h1>Registration form</h1>
<h2>Register Here</h2>
-->
<div class ="register">
<!--<div class="col-sm-12">-->
<form method="post" id="register" action="reg.php">

<div class="form-group">
<label>First Name:</label>
<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter U R first Name" required>
</div>

<div class="form-group">
<label>Last Name:</label>
<input type="text"  class="form-control"  name="lname" id="lname" placeholder ="Enter U R Last Name" required>
</div>

<div class="form-group">
<label>Mobile Number:</label>

<select id="ph" name="ph">
<option value="">select</option>
<option value="91">+91</option>
<option value="92">+92</option>
<option value="93">+93</option>
<option value="94">+94</option>
</select>



<input type="number" class="form-control"  name="mnum" id="mnum" placeholder ="Enter U R Mobile Number" required>
</div>

<div class="form-group">
    <label>Email:</label>
<input type="email" class="form-control"  name="email" id="email" placeholder ="Enter U R Email" required>
</div>


<div class="form-group">
<label>Password:</label>
<input type="password"  class="form-control" name="pass" id="pass" placeholder ="Enter U R Password" required>
</div>

<div class="form-group">
<label>Re-Enter U R Password:</label>
<input type="password"  class="form-control" name="rpass" id="rpass" placeholder ="Enter U R Last Password" required>
</div>

<div class="form-group">
           <input type="radio"   name="gender" id ="male" value="male" checked>
            <span>&nbsp;Male</span>&nbsp;&nbsp;
<input type="radio"   name="gender" id ="female" value="female">      
              <span>&nbsp;Female</span>&nbsp;&nbsp;
 
  <input type="radio" name="gender"   id="other" value="other">
   <span > &nbsp;other</span>&nbsp;&nbsp;

</div>
    
   
   
   
<input class="btn btn-success btn-lg" type="submit" name="submit" value="Submit">
    </form>
    </div>
<!--    </div>-->




<?php include"includes/footer.php" ?>