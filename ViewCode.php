<?php
$conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
if (isset($_POST['add_product'])) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $previous_price = $_POST['previous_price'];
    $discount = $_POST['discount'];
    $present_price = $_POST['present_price'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $unit = $_POST['unit'];
    $coupon = $_POST['coupon'];
    $sql = "INSERT INTO product ( image, name, previous_price, discount, present_price, brand, category, sub_category, unit, coupon)
    VALUES ( '$image', '$name',' $previous_price','$discount', '$present_price', '$brand', '$category', '$sub_category', '$unit', '$coupon')";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        header('Location:index.php?page=viewproduct');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
if (isset($_POST['update'])) {
    $id = $_POST["id"];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $previous_price = $_POST['previous_price'];
    $discount = $_POST['discount'];
    $present_price = $_POST['present_price'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $unit = $_POST['unit'];
    $coupon = $_POST['coupon'];

    $sql = "UPDATE product SET image='$image' ,name='$name' , previous_price='$previous_price' ,discount='$discount' ,present_price='$present_price' ,brand='$brand' ,category='$category' ,sub_category='$sub_category' ,unit='$unit' ,coupon='$coupon' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        header('Location:index.php?page=viewproduct');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
if (isset($_POST["delete"])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM product WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {

        header('Location:index.php?page=viewproduct');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
