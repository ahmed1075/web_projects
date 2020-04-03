<?php
include 'core/header.html';
?>
<div class="col-md-8">
<div class="offset-md-10">
  <a href="login.php"><button class="btn btn-success top">Log in</button> <a>
</div></div></div>
<div class="row">
 <div class="offset-md-5 offset-lg-5 offset-sm-5 col-md-6 dump">
<form method="post" action="data.php">
<fieldset class="size">
    <h2> <legend class="head" style="color:black" > Register </legend></h2>
  <!-- First Name -->
<div class="form-group">
    <input name="first_name" type="name" class="form-control" placeholder="First Name" required>
  </div>
    <!-- Last Name -->
  <div class="form-group">
    <input name="last_name" type="name" class="form-control" placeholder="Last Name" required>
  </div>
        <!-- Email -->
  <div class="form-group">
    <input name="email" type="email" class="form-control" placeholder="Enter email" required>
  </div>
  <!-- Password -->
  <div class="form-group">
    <input name="password" type="password" class="form-control" placeholder="Password" required>
  </div>
  <!-- Confirm Password -->
  <div class="form-group">
    <input name="cpassword" type="password" class="form-control" placeholder="Confirm Password" required>
  </div>
   <!-- Contact no -->
  <div class="form-group">
    <input name="contact_no" type="tel" class="form-control" placeholder="Contact no" required>
  </div>
  <!-- Company -->
  <div class="form-group">
    <input name="company" type="text" class="form-control" placeholder="Company Name" required>
  </div>
  <!-- Country -->
  <div class="form-group">
    <input name="country" type="text" class="form-control" placeholder="Country" required>
  </div>
  
  <button name="submit" type="submit" value="submit" class="btn btn-primary merge">Register</button>
  </fieldset>
</form>
</div>

</div>

</body>

</html>