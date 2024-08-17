<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/sunday_weekend/sessions/home/index.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/sunday_weekend/sessions/home/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/sunday_weekend/sessions/customers/index.php">Customer</a>
        </li>
      </ul>
      <a href="http://localhost/sunday_weekend/sessions/auth/action_logout.php" class="nav-link">Logout</a>
    </div>
  </div>
</nav>

<?php
    session_start();

    if(!isset($_SESSION['auth']) && $_SESSION['auth'] != 1){
        header("Location: ../auth/login.php");
    }
?>


<?php if(isset($_SESSION['sms'])){ ?>
    <div class="alert alert-success"><?php echo $_SESSION['sms']; ?></div>
<?php } ?>


<?php
    unset($_SESSION['sms']);
?>
