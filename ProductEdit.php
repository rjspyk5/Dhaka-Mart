<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mart-Dhaka</title>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <!-- custom css file -->
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <?php require("./Shared/Navbar.php"); ?>
    <div class="flex">
        <?php require("./Shared/Sidebar.php") ?>
        <div class="w-full mx-4 py-5">
            <?php
            if (isset($_GET['id'])) {
                $pID = $_GET['id'];
                $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
                $query = "SELECT * FROM product WHERE id= '$pID' LIMIT 1";
                $query_run = mysqli_query($conn,  $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {
            ?>
                        <form action="ViewCode.php" method="post">
                            <input name="id" value="<?php echo $row["id"] ?>" type="hidden" class="input-field"><br>
                            <label for="product-image">Product Image</label><br>
                            <input name="image" type="text" id="product-image" class="input-field"><br>
                            <label for="product-name">Product Name</label><br>
                            <input name="name" type="text" id="product-name" class="input-field"><br>
                            <label for="previous-price">Previous Price</label><br>
                            <input name="previous_price" type="text" id="previous-price" class="input-field"><br>
                            <label for="discount">Discount</label><br>
                            <input name="discount" type="text" id="discount" class="input-field"><br>
                            <label for="present-price">Present Price</label><br>
                            <input name="present_price" type="text" id="present-price" class="input-field"><br>
                            <label for="brand">Brand</label><br>
                            <select name="brand" id="brand" class="select-field">
                                <option value="samsung">Samsung</option>
                                <option value="philips">Philips</option>
                                <option value="walton">Walton</option>
                            </select><br>
                            <label for="category">Category</label><br>
                            <select name="category" id="category" class="select-field">
                                <option value="">Men</option>
                                <option value="">Women</option>
                                <option value="">Kids</option>
                            </select><br>
                            <label for="sub-category">Sub-Category</label><br>
                            <select name="sub_category" id="sub-category" class="select-field">
                                <option value="">Shirt</option>
                                <option value="">Watch</option>
                                <option value="">Electronics</option>
                            </select><br>
                            <label for="unit">Unit</label><br>
                            <input name="unit" type="text" id="unit" class="input-field" style="width:50px">
                            <select name="" id="unit-type" class="select-field">
                                <option value="">KG</option>
                                <option value="">Pound</option>
                                <option value="">Piece</option>
                            </select><br>
                            <label for="coupon">Coupon</label><br>
                            <input name="coupon" type="text" id="coupon" class="input-field"><br>

                            <div class="modal-action modal_btn">
                                <input type="text" name="test">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn" type="submit" name="update">Update</button>
                            </div>

                        </form>
            <?php
                    }
                }
            }
            ?>

        </div>
    </div>

</body>

<script src="index.js"></script>

</html>