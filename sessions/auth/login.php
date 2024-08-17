<?php include('../config_header.php') ?>
<body>

<?php

session_start();

if(isset($_SESSION['auth']) && $_SESSION['auth'] == 1){
    header("Location: ../home/index.php");
}

?>

    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-lg-6 col-12">
                <?php if(isset($_SESSION['sms'])){ ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['sms']; ?>
                    </div>
                <?php } ?>
                <form action="action_login.php" method="POST">
                    <div class="card">
                        <div class="card-header text-center">Login Page</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control form-control-sm" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm" id="password">
                            </div>
                            <button class="btn btn-primary btn-sm float-end">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>







    <?php
        unset($_SESSION['sms']);
    ?>
</body>
</html>
