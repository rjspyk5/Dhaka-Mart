<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dhaka-Mart</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php require("./Shared/Navbar.php"); ?>
    <div class="flex">
        <?php require("./Shared/Sidebar.php") ?>
        <div class="w-full">
            <?php
            if (isset($_GET["page"])) {
                if ($_GET["page"] === "dashboard") {
                    require("./Pages/Dashboard.php");
                } elseif ($_GET["page"] === "viewproduct") {
                    require("./Pages/ViewProduct.php");
                }
            } else {
                require("./Pages/Dashboard.php");
            }
            ?>
        </div>
    </div>

</body>

</html>