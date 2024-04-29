<ul class="menu bg-[#0F172A]  p-0 ml-0 *:text-[white] *:border-b w-56 min-h-screen">

    <li <?php echo ((($_GET['page'] ?? '')  === 'dashboard') || (!isset($_GET['page'])) ? 'class="bg-[#7f8fa6]"' : ''); ?>><a href="index.php?page=dashboard"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Dashboard</a></li>
    <li <?php echo ((($_GET['page'] ?? '')  === 'user') ? 'class="bg-[#7f8fa6]"' : ''); ?>><a href="index.php?page=user"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
            User</a></li>

    <li <?php echo ($_GET['page'] ?? '') === 'viewproduct' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=viewproduct"><i class="fa-brands fa-shopify fa-xl"></i> Product</a></li>
    <li>


        <details>
            <summary class="py-2">Order Management</summary>
            <ul>
                <li <?php echo ($_GET['page'] ?? '') === 'neworder' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=neworder">New Order</a></li>
                <li>
                <li <?php echo ($_GET['page'] ?? '') === 'processing' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=processing">On processing</a></li>
                <li>
                <li <?php echo ($_GET['page'] ?? '') === 'delivered' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=delivered">Delivered</a></li>
                <li>

            </ul>
        </details>

        <details>
            <summary class="py-2">Sales Report</summary>
            <ul>
                <li <?php echo ($_GET['page'] ?? '') === 'sales' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=sales">Total Sales</a></li>
                <li>
                <li <?php echo ($_GET['page'] ?? '') === 'revenue' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=revenue">Total Revenue</a></li>
                <li>

            </ul>
        </details>


</ul>