<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Prod</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for black-themed design */
        body {
            background-color: #000;
            color: #fff;
        
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        
        }

        .custom-form {
        background-color: #333;
        padding: 80px; /* Increase the padding to make the form larger */
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        max-width: 500px; /* Limit the maximum width of the form */
        margin: 0 auto; /* Center the form horizontally within the container */;
        }

        .form-group label {
            color: #fff;
        }

        .form-control {
            background-color: #444;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary,
        .btn-danger {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="center-container">
        <div class="custom-form small-form">
            <h1 class="text-center">Add Product</h1>
            <form action="/products/store" method="post">
                <div class="form-group">
                    <label for="UPC">UPC:</label>
                    <input type="text" class="form-control" name="UPC" id="UPC" required>
                </div>

                <div class="form-group">
                    <label for="ProductName">Product Name:</label>
                    <input type="text" class="form-control" name="ProductName" id="ProductName" required>
                </div>

                <div class="form-group">
                    <label for="Price">Price:</label>
                    <input type="text" class="form-control" name="Price" id="Price" required>
                </div>

                <div class="form-group">
                    <label for="Quantity">Quantity:</label>
                    <input type="text" class="form-control" name="Quantity" id="Quantity" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Create Product</button>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
