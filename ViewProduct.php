<!-- Modals -->
<!-- Add products modal -->
<dialog id="my_modal_1" class="modal ">
    <div class="modal-box " style="max-width:800px;">
        <form method="post" action="ViewCode.php">

            <!-- Image -->
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
                <button class="btn" type="submit" name="add_product">ADD</button>
            </div>

        </form>
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
    </div>
</dialog>
<!-- Add products modal end-->
<!-- View Details Modal start -->
<dialog id="my_modal_2" class="modal">
    <div class="modal-box" style="max-width:800px;">
        <form action="">
            <label for="product-image">Product Image</label><br>
            <label for="product-id">Product ID</label><br>
            <label for="product-name">Product Name</label><br>
            <label for="previous-price">Previous Price</label><br>
            <label for="discount">Discount</label><br>

            <label for="present-price">Present Price</label><br>

            <label for="brand">Brand</label><br>

            <label for="category">Category</label><br>


            <label for="sub-category">Sub-Category</label><br>

            <label for="unit">Unit</label><br>

            <label for="coupon">Coupon</label><br>

        </form>


        <div class="modal-action modal_btn">
            <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn">EDIT</button>
                <button class="btn">Close</button>
            </form>
        </div>
    </div>
</dialog>
<!-- View Details Modal End -->
<!-- Edit Product Modal start-->
<dialog id="my_modal_3" class="modal">
    <div class="modal-box" style="max-width:800px;">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>

        <form action="">

            <label for="product-id">Product ID</label><br>
            <input type="text" id="product-id" class="input-field"><br>

            <label for="product-image">Product Image</label><br>
            <input type="file" id="product-image" class="input-field"><br>

            <label for="product-name">Product Name</label><br>
            <input type="text" id="product-name" class="input-field"><br>

            <label for="previous-price">Previous Price</label><br>
            <input type="text" id="previous-price" class="input-field"><br>

            <label for="discount">Discount</label><br>
            <input type="text" id="discount" class="input-field"><br>

            <label for="present-price">Present Price</label><br>
            <input type="text" id="present-price" class="input-field"><br>

            <label for="brand">Brand</label><br>
            <select id="brand" class="select-field">
                <option value="">Samsung</option>
                <option value="">Philips</option>
                <option value="">Walton</option>
            </select><br>

            <label for="category">Category</label><br>
            <select id="category" class="select-field">
                <option value="">Men</option>
                <option value="">Women</option>
                <option value="">Kids</option>
            </select><br>

            <label for="sub-category">Sub-Category</label><br>
            <select id="sub-category" class="select-field">
                <option value="">Shirt</option>
                <option value="">Watch</option>
                <option value="">Electronics</option>
            </select><br>

            <label for="unit">Unit</label><br>
            <input type="text" id="unit" class="input-field" style="width:50px">
            <select id="unit-type" class="select-field">
                <option value="">KG</option>
                <option value="">Pound</option>
                <option value="">Piece</option>
            </select><br>

            <label for="coupon">Coupon</label><br>
            <input type="text" id="coupon" class="input-field"><br>

        </form>


        <div class="modal-action modal_btn">
            <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn">EDIT</button>
                <button class="btn">Close</button>
            </form>
        </div>
    </div>
</dialog>
<!-- Edit modal end -->
<!-- Modals End-->
<!-- -------------------------------------Content start form here---------------------------------------------- -->
<!-- Products table header -->
<div class="flex gap-3 items-center justify-center my-5">
    <div class="border-t flex-grow "></div>
    <h1 class="text-center font-bold text-2xl">Products Table</h1>
    <div class="border-t flex-grow "></div>
</div>
<!-- Add Product -->
<div class="flex justify-end my-4">
    <button class="btn btn-md view-details " onclick="my_modal_1.showModal()">
        <i class="fa-regular fa-square-plus"></i> Add Product
    </button>
</div>
<!-- Products Table -->
<div class="">
    <table class="custom-table">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Catagory</th>
                <th>Buying price</th>
                <th>Selling Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $query = "SELECT * FROM product";
            $query_run = mysqli_query($conn,  $query);
            if (mysqli_num_rows($query_run) > 0) {


                foreach ($query_run as $row) {
            ?>
                    <tr>
                        <th><?php echo $row["id"] ?></th>
                        <td><?php echo $row["image"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["category"] ?></td>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["id"] ?></td>
                        <td>
                            <!-- You can open the modal using ID.showModal() method -->
                            <div class="tooltip" data-tip="Edit">

                                <a href="ProductEdit.php?id=<?php echo $row["id"] ?>"><i style="color:green; font-size:20px;" class="fa-regular fa-pen-to-square"></i></a>

                            </div>
                            <!-- Delete Button -->
                            <div class="tooltip" data-tip="Delete">
                                <form action="ViewCode.php" method="post">
                                    <button type="submit" name="delete" value="<?php echo $row['id'] ?>"><i style="color:red; font-size:20px; margin-left: 10px" class="fa-regular fa-trash-can"></i></button>
                                </form>
                            </div>
                            <!-- View details button -->
                            <div class="tooltip" data-tip="Details">
                                <button onclick="my_modal_2.showModal()">
                                    <i style="color:#007bff; font-size:20px; margin-left:10px;" class="fa-regular fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

            <?php
                }
            } else {

                echo "<h1>No records found</h1>";
            }
            ?>

        </tbody>
    </table>
</div>