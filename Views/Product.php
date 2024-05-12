<?php include "includes/header.php"; ?>

<body>
    <div class="container">
        <h1>Product List</h1>
        <div>
            <Label>Select Product</Label>
            <?php foreach ($products as $product) {?>
                <div>
                    <img src="<?php echo $product['image'] ?>" alt="">
                    <div>
                        <p1><?php echo $product['id'] ?></p1>
                        <h1> <?php echo $product['name'] ?></h1>
                        <p1><?php echo $product['description'] ?></p1>
                        <p1><?php echo $product['category_id'] ?></p1>

                    </div>
                    <a href="#">More...</a>
                </div>
                <hr>
            <?php } ?>

        </div>

        <table border="1">
            <thead>
                <th>Id</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Image</th>
                <th>Category</th>
            </thead>
            <?php foreach ($products as $product) { ?>

            <tr>
                <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['description'] ?></td>
                <td><img src="<?php echo $product['image'] ?>" alt=""></td>
                <td><?php echo $product['category_id'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>
