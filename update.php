<?php
require_once "./db.php";
// get id passed by url
$id = $_GET['id'];

// get data from database using id  
$result = $conn->query("SELECT * FROM `stocks` WHERE `id` = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="heading">
            <h1>Stock Management - Mini Project</h1>
        </div>
        <main>
            <div class="container">
                <!-- simple stock add form -->
                <form class="form" action="./update.inc.php?id=<?php echo $id; ?>" method="post">
                    <?php foreach ($result as $key) : ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="<?php echo $key['name'] ?>" class="input" type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input value="<?php echo $key['qty'] ?>" class="input" type="number" name="quantity" id="quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Total Price</label>
                            <input value="<?php echo $key['price'] ?>" class="input" type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="input" name="category" id="category" class="form-control">
                                <option value="<?php echo $key['category'] ?>"><?php echo $key['category'] ?></option>
                                <option value="Food">Food</option>
                                <option value="Drink">Drink</option>
                                <option value="Clothes">Clothes</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="btn" type="submit" value="Click to Update" class="btn btn-primary">
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </main>
    </nav>

</body>

</html>