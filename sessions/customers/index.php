<?php require('../config_header.php') ?>
<body>
    <?php require('../sidebar.php') ?>

    <?php
        $customers = $mysql->query("select customers.*, customer_types.name as customer_type_name from customers join customer_types on customer_types.id = customers.customer_type_id");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Hello Customer Page</h2>
                    </div>
                    <div class="card-body">
                        <p>List of Customers</p>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>type</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Money</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; $total = 0;?>
                                        <?php while ($customer = $customers->fetch_object()) { ?>
                                            <tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $customer->customer_type_name; ?></td>
                                                <td><?php echo $customer->name; ?></td>
                                                <td><?php echo $customer->phone; ?></td>
                                                <td>$<?php echo number_format($customer->money,2) ?></td>
                                            </tr>
                                            <?php
                                                $total += $customer->money;
                                            ?>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="4" class="text-end">Total Money</td>
                                            <td>$<?php echo number_format($total,2); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require('../config_footer.php') ?>
</body>
</html>
