
<?php include"include1/header.php" ?>
<?php session_start();
unset($_SESSION['email']);
session_destroy();
?>
<!--- header-->
<header id= "main-header">
    <div class ="container">
       
        <div class="row end-sm end-md end-lg  center-xs middle-sm middle-md middle-lg">
            <div class="col-xs-12 col-sm-12 col-md-12" "col-lg-12">
                <h1>
                    <span class="primary-text" style="font-size:150%;">ICICI BANK</span>
                </h1>
            </div>
            
                <nav id="navbar">
                    <ul>
                        <li class="current"><a href="index.php">Home</a></li>
                       
                         <li><a href="form.php">New Admin-account</a></li>
                        <li><a href="login.php">Admin Login</a></li>
                         
                        <li><a href="about.php">About</a></li>
                        
                        <li><a href="services.php">Services</a></li>
                        
                        
                       
                        
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--showcase-->
<section id="showcase">
    <div class="container">
        <div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-7  showcase-content">
                <h1>Welcome to <span class="primary-text">ICICI BANK</span></h1>
                
            </div>
        </div>
    </div>
</section>
<!--features-->
<section id="features">
    <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>Core features</h2>
                <p>what's Included</p>
                <!--icon_row-->
                <div class="row center-xs center-sm center-md center-lg">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><i class="fa fa-dashboard"></i><br>
                        <h4>Fully Optimised</h4>
                        <p>this is me</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                       <i class="fa fa-question-circle-o"></i><br>
                        <h4>Free Support</h4>
                        <p>this isme</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><i class="fa fa-rocket"></i><br>
                        <h4>Free Upgrade</h4>
                        <p>this isme</p>
                    </div>
                </div>
                                <!--icon_row 2-->
                <div class="row center-xs center-sm center-md center-lg">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><i class="fa fa-line-chart"></i><br>
                        <h4>Uptime Gurantee</h4>
                        <p>this isme</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><i class="fa fa-users"></i><br>
                        <h4>Security</h4>
                        <p>this isme</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><i class="fa fa-plug"></i><br>
                        <h4>Interest-Rate</h4>
                        <p>this isme</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--info-->
<section id="info">
    <div class="container">
        <div class="row center-xs center-sm center-md center-lg middle-xs middle-md middle-lg">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <img src="css/images/visa.jpg" alt=" image not found">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h2>Core Features</h2>
                <ul>
                    <li><i class="fa fa-check"></i>Fully Optimised</li>
                    <li><i class="fa fa-check"></i>Free Support</li>
                    <li><i class="fa fa-check"></i>Free Upgrade</li>
                    <li><i class="fa fa-check"></i>Uptime Gurantee</li>
                    <li><i class="fa fa-check"></i>Security </li>
                
                <li><i class="fa fa-check"></i>Interest-rate</li></ul>
            </div>
        </div>
    </div>
</section>
<!--company-->
<section id="company">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h4>Contact Us</h4>
              <ul>
                  <li><i class="fa fa-phone"></i>(617) 555-5555</li>
                  <li><i class="fa fa-envelope"></i>support@SNbank.co.in</li>
                  <li><i class="fa fa-map"></i>Main st,Mumbai India</li>
              </ul>
            </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h4>About Us</h4>
              <p> WE THE BEST OF THE BEST<BR>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THANK YOU!</p>
            </div>

                   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h4>Newletter</h4>
              <p>Ranked In Top 3 Private Banks In India</p>
              <form>
                  <input type="text" name="email" placeholder="Enter Email">
                  <button type="submit" name="buttom">Submit</button>
              </form>
            </div>

        </div>
    </div>
</section>
<!--footer-->

<?php include"include1/footer.php" ?>

