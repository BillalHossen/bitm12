<?php //print_r($categories); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
<div>
    <h1>Category List</h1>


    <div

        <label for="category">Select Category:</label>
        <ul>
            <?php foreach ($categories as $category) {?>
                <?php echo '<li><a href="#">'. $category['categoryName'].'</a></li>';?>
            <?php } ?>
        </ul>
    </div>
    <hr>
    <div>
        <label for="category">Select Category:</label>
        <select name="category" id="category">
            <?php foreach ($categories as $category) {?>
            <option value="<?php echo $category['category_id']; ?>"><?php echo $category['categoryName']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>
</body>
</html>