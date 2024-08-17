<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/sunday_weekend/project/config.php');
    $title = __('Home');

    require(folder("layouts/header.php"));
    require(folder("layouts/sidebar.php"));
?>


<?php if(isset($_SESSION['sms'])){ ?>
    <div class="alert  <?php echo $_SESSION['sms']['background']; ?>">
        <?php echo $_SESSION['sms']['data']; ?>
    </div>
<?php } ?>

<h2><?php echo __('Create'); ?></h2>





<?php require(folder("layouts/footer.php")); ?>
