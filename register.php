<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

      </div>

      <div class="row">
        <div class="col-md-5 col-md-offset-3">
        	<?php //echo form_open(base_url().'login/')?>
        	<form action="<?php echo base_url?>php_action.php" method="post" >
        	<?php //echo validation_errors(); ?>
<span class="error"><b><?php //echo $login_failed; ?></b></span>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="fullname" class="form-control" id="inputEmail3" placeholder="Enter full Name">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="username" class="form-control" id="inputEmail3" placeholder="Enter Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Enter Password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit_register" value="submit_register" class="btn btn-success">Sign Up</button>
    </div>
  </div>

<?php //echo form_close()?>
</form>
        </div>
        
      </div>

    </div> <!-- /container -->