<ul class="menu bg-[#0F172A]  p-0 ml-0 *:text-[white] *:border-b w-56 min-h-screen">

    <li <?php echo ((($_GET['page'] ?? '')  === 'dashboard') || (!isset($_GET['page'])) ? 'class="bg-[#f70576]"' : ''); ?>><a href="index.php?page=dashboard">Dashboard</a></li>
    <details>
        <summary class="py-2">Product</summary>
        <ul>
            <li <?php echo ($_GET['page'] ?? '') === 'viewproduct' ? 'class="bg-[#f70576]"' : ''; ?>><a href="index.php?page=viewproduct">View Product</a></li>
            <li>
            <li><a>Submenu 2</a></li>
        </ul>
    </details>
    <details>
        <summary class="py-2">Order Management</summary>
        <ul>
            <li <?php echo ($_GET['page'] ?? '') === 'neworder' ? 'class="bg-[#f70576]"' : ''; ?>><a href="index.php?page=neworder">New Order</a></li>
            <li>
            <li <?php echo ($_GET['page'] ?? '') === 'processing' ? 'class="bg-[#f70576]"' : ''; ?>><a href="index.php?page=processing">On processing</a></li>
            <li>
            <li <?php echo ($_GET['page'] ?? '') === 'delivered' ? 'class="bg-[#f70576]"' : ''; ?>><a href="index.php?page=delivered">Delivered</a></li>
            <li>

        </ul>
    </details>
    <li <?php echo ((($_GET['page'] ?? '')  === 'user') ? 'class="bg-[#f70576]"' : ''); ?>><a href="index.php?page=user">User</a></li>
    <details>
        <summary class="py-2">Sales Report</summary>
        <ul>
            <li <?php echo ($_GET['page'] ?? '') === 'sales' ? 'class="bg-[#f70576]"' : ''; ?>><a href="index.php?page=sales">Total Sales</a></li>
            <li>
            <li <?php echo ($_GET['page'] ?? '') === 'revenue' ? 'class="bg-[#f70576]"' : ''; ?>><a href="index.php?page=revenue">Total Revenue</a></li>
            <li>

        </ul>
    </details>


</ul>