
<header>
  <div class="default-header">
     <div class="container">
       <div class="row">
           <!-- Change logo values -->
           <div > <p>Car rental system </div>
       </div>
     </div>
  </div>
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">

<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{ ?>
    <div class="navbar-header">
      <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
        <span class="icon-bar"></span> <span class="icon-bar"></span>
      </button>
    </div>
    <div class="header_wrap">
    <div class="user_login">
      <ul>
        <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
        <?php
	 echo htmlentities($result->FullName); }}?>
           <?php if($_SESSION['login']){?>
   <i class="fa fa-angle-down" aria-hidden="true"></i></a>
               <ul class="dropdown-menu">
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } ?>

          </ul>
        </li>
      </ul>
        </div>
      </div>

        <?php   if(strlen($_SESSION['login'])==0)
            {
          ?>
          <div class="header_wrap">
          <div class="user_login">
          <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a>
        </div>
          </div>
          <?php } ?>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a>    </li>

          <li><a href="page.php?type=aboutus">About Us</a></li>
          <li><a href="car-listing.php">Car Listing</a>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>
