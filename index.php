<?php
require_once "./db.php";
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
                <form class="form" action="add.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="input" type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input class="input" type="number" name="quantity" id="quantity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price">Total Price</label>
                        <input class="input" type="number" name="price" id="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="input" name="category" id="category" class="form-control">
                            <option value="">Select Category</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Clothes">Clothes</option>
                            <option value="Food">Food</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn" type="submit" value="Click to Add" class="btn btn-primary">
                    </div>
                </form>
                <!-- show available stocks from database -->
                <!-- bordered table -->
                <table class="table table-bordered">
                    <thead class="table-heading">
                        <tr>
                            <th class="th">Name</th>
                            <th class="th">Quantity</th>
                            <th class="th">Price</th>
                            <th class="th">Category</th>
                            <th class="th">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <?php
                        $result = $conn->query("SELECT * FROM `stocks`");
                        foreach ($result as $row) :
                        ?>
                            <tr>
                                <td class="td"><?php echo $row['name']; ?> </td>
                                <td class="td"><?php echo $row['qty']; ?> </td>
                                <td class="td"><?php echo $row['price']; ?> </td>
                                <td class="td"><?php echo $row['category']; ?> </td>
                                <td class="td">
                                    <a class="btn-update" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                                    <a class="btn-delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </nav>

</body>

</html>