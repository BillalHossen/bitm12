<?php //print_r($products);?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <div>
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
</body>
</html>
