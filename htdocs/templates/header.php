<?php if ($loginHeader) { ?>
  <form class="login-form" action="<?php echo $file_root; ?>login/" method="post"> <?php } ?>
    <div class="main-header">
      <div class="header-logo">
        <a href="<?php echo $file_root; ?>">
          <img src="<?php echo $file_root; ?>assets/youclan_v2.png" alt="<?php echo $main_strings['logo_caption']; ?>" class="main-logo">
        </a>
      </div>
    <?php if ($loginHeader) { ?>
      <div class="header-login">
        <div class="header-username">
          <h4><?php echo $main_strings['login_user']; ?></h4>
          <input type="text" name="username" class="header-input" value="" placeholder="">
        </div>
        <div class="header-password">
          <h4><?php echo $main_strings['login_pass']; ?></h4>
          <input type="password" name="password" class="header-input" value="" placeholder="" >
        </div>
        <input type="submit" class="header-submit" name="" value="Log In">
      </div>
    <?php } else if ($registerHeader) { ?>
      <a href="<?php echo $file_root; ?>account/registration.php" class="header-registration-link">
        <div class="header-registration">
          Create an account
        </div>
      </a>
    <?php } ?>
    </div>
<?php if ($loginHeader) { ?>
  </form>
<?php } else { ?>
<?php } ?>
