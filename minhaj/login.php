<?php
include 'core/header.html';
?>
<div class="col-md-6">
<div class="offset-md-8">
  <a href="register.php"><button class="btn btn-success ca">Create Account</button> <a>
</div></div>
<div class="row">
 <div class="col-md-12 mid">
    <form method="post" action="data.php">
  <fieldset class="size">
  <h2> <legend class="log"> Log in </legend></h2>
      <!-- Email -->
    <div class="form-group">
      <input name="email" type="email" class="form-control" placeholder="Enter email">
    </div>
    <!-- Password -->
    <div class="form-group">
      <input name="password" type="password" class="form-control" placeholder="Password">
    </div>
    <button name="log_in" type="submit" class="btn btn-primary merge">Log in</button>
    </fieldset>
  </form>
</div></div>
</body>
</html>