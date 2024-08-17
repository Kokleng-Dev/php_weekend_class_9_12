<?php require('../config_header.php') ?>
<body>
    <?php require('../sidebar.php') ?>


    <?php
    $customers = $mysql->query("select name as customer_name from customers");

    // for($i=0;$i < $data->num_rows; $i++){
    //     $d = $data->fetch_object();

    //     echo $d->customer_name . "<br>";
    // }

    // while ($d = $data->fetch_object()) {
    //    print_r($d->customer_name);
    //    echo "<br>";
    // }



    ?>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Hello Home Page</h2>
                    </div>
                    <div class="card-body">
                        <p>hello world</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('../config_footer.php') ?>
</body>
</html>
