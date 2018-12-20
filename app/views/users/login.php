<?php require APPROOT . '/views/inc/lgnheader.php'; ?>
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Joolz</b>Herbal</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo URLROOT; ?>/users/login" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control         
            <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" placeholder="Email" value="<?php echo $data['email']; ?>">
        <span class="fa fa-envelope form-control-feedback"></span><span class="invalid-feedback "><?php echo $data['email_err']; ?></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control         
            <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" placeholder="Password" value="<?php echo $data['password']; ?>">
        <span class="fa fa-envelope form-control-feedback"></span><span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
      </div>
      
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <!-- <label>
              <input type="checkbox"> Remember Me
            </label> -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <!-- <a href="#">I forgot my password</a><br> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php require APPROOT . '/views/inc/lgnfooter.php'; ?>
