<?php
include 'core/header.html';
?>
<div class="col-md-8">
<div class="offset-md-10">
 
</div>
</div>
</div>
<div class="row">
 <div class="offset-md-5 offset-lg-5 offset-sm-5 col-md-6 dump">
<form method="post" action="show.php">
<fieldset class="size">
<h2> <legend class="head"> IThenticate </legend></h2>
  <!-- User Name -->
<div class="form-group">
    <input name="first_name" type="name" class="form-control" placeholder="User Name" required>
  </div>
    
  <!-- Password -->
  <div class="form-group">
    <input name="password" type="password" class="form-control" placeholder="Password" required>
  </div>
  
   <!-- I Turn It -->
   <div class="form-group">
            
            <input type="file" name="file" value="file" class="btn btn-success" required>
</div>
  <button name="submit" type="submit" value="submit" class="btn btn-primary merge">Register</button>
  </fieldset>
</form>
</div>

</div>

</body>

</html>