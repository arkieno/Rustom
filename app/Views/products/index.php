<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prod List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for black-themed design */
        body {
            background-color: #000;
            color: #fff;
        }

        .container {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* This makes the container take up the entire viewport height */
        }

        .btn-primary {
            background-color: #007bff;
        }

        .list-group-item {
            background-color: #333;
            color: #fff;
            border-color: #555;
        }

        .list-group-item a {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Product Listing</h1>

        <a href="/products/create" class="btn btn-primary mb-3">Add New Product</a>

        <ul class="list-group">
            <?php foreach ($products as $product): ?>
            <li class="list-group-item">
                <a href="/products/edit/<?= $product['id'] ?>"><?= $product['UPC'] ?></a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
