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
        <div class="w-[22%] min-h-screen bg-[#0E1428]">
            <?php require("./Shared/Sidebar.php") ?>
        </div>

        <div class=" w-full mx-4 py-5">
            <div class="w-3/6 mx-auto">
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


                                <input name="image" value="<?php echo $row["image"] ?>" type="text" id="product-image" class="input-field"><br>
                                <label for="product-name">Product Name</label><br>


                                <input value="<?php echo $row["name"] ?>" name="name" type="text" id="product-name" class="input-field"><br>
                                <label for="previous-price">Previous Price</label><br>


                                <input value="<?php echo $row["previous_price"] ?>" name="previous_price" type="text" id="previous-price" class="input-field"><br>
                                <label for="discount">Discount</label><br>

                                <input value="<?php echo $row["discount"] ?>" name="discount" type="text" id="discount" class="input-field"><br>
                                <label for="present-price">Present Price</label><br>

                                <input value="<?php echo $row["present_price"] ?>" name="present_price" type="text" id="present-price" class="input-field"><br>

                                <div class="flex gap-4">
                                    <div>
                                        <label for="brand">Brand</label><br>
                                        <select name="brand" id="brand" class="select-field w-full">
                                            <option value="samsung">Samsung</option>
                                            <option value="philips">Philips</option>
                                            <option value="walton">Walton</option>
                                        </select><br>
                                    </div>

                                    <div> <label for="category">Category</label><br>
                                        <select name="category" id="category" class="select-field w-full">
                                            <option value="Men">Men</option>
                                            <option value="Women">Women</option>
                                            <option value="Kids">Kids</option>
                                        </select><br>
                                    </div>
                                    <div>
                                        <label for="sub-category">Sub-Category</label><br>
                                        <select name="sub_category" id="sub-category" class="select-field">
                                            <option value="shirt">Shirt</option>
                                            <option value="watch">Watch</option>
                                            <option value="electronics">Electronics</option>
                                        </select><br>
                                    </div>
                                    <div>


                                    </div>

                                </div>





                                <label for="coupon">Coupon</label><br>
                                <input value="<?php echo $row["coupon"] ?>" name="coupon" type="text" id="coupon" class="input-field"><br>

                                <div class="modal-action modal_btn">
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
    </div>

</body>

<script src="index.js"></script>

</html>