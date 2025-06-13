<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_id'])) {
    $removeId = $_POST['remove_id'];
    if (isset($_SESSION['cart'][$removeId])) {
        unset($_SESSION['cart'][$removeId]);
    }
    header("Location: cart.php");
    exit;
}
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<html>
<head>
    <title>Your Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>
	
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6">
    <a href="index.php" title="Big Rock Hard Mineral Co." class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="assets/images/logo.png" class="h-12" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Big Rock Hard Mineral Co.</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
	<form class="w-full md:w-1/3" method="get">
		<div class="flex">
			<label for="search-dropdown" title="Filter Search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
			<button id="dropdown-button" data-dropdown-toggle="dropdown" class="shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Sort By<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
			<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
	  		</svg></button>
			<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
				<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
				<li>
					<a href="?sort=price_desc" title="Price: High to Low" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Price: High to Low</a>
				</li>
				<li>
					<a href="?sort=price_asc" title="Price: Low to High" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Price: Low to High</a>
				</li>
				<li>
					<a href="?sort=hardness_desc" title="Hardness: High to Low" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hardness: High to Low</a>
				</li>
				<li>
					<a href="?sort=hardness_asc" title="Hardness: Low to High" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hardness: Low to High</a>
				</li>
				<li aria-labelledby="dropdownNavbarLink">
                    <button id="doubleDropdownButton" title="Colors" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Colors<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  					</svg></button>
                    <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
							<li>
								<a href="?color=white" title="White" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">White</a>
							</li>
							<li>
								<a href="?color=black" title="Black" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Black</a>
							</li>
							<li>
								<a href="?color=yellow" title="Yellow" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Yellow</a>
							</li>
							<li>
								<a href="?color=brown" title="Brown" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Brown</a>
							</li>
							<li>
								<a href="?color=green" title="Green" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Green</a>
							</li>
							<li>
								<a href="?color=blue" title="Blue" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Blue</a>
							</li>
							<li>
								<a href="?color=orange" title="Orange" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Orange</a>
							</li>
							<li>
								<a href="?color=pink" title="Pink" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Pink</a>
							</li>
							<li>
								<a href="?color=purple" title="Purple" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Purple</a>
							</li>
							<li>
								<a href="?color=gold" title="Gold" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Gold</a>
							</li>
							<li>
								<a href="?color=silver" title="Silver" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Silver</a>
							</li>
							<li>
								<a href="?color=Multi-Color" title="Multi-Color" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Multi-Color</a>
							</li>
						</ul>
                    </div>
                </li>
				</ul>
			</div>
			<div class="relative w-full">
				<input type="search" id="search-dropdown" title="Search" name="search" value="<?php echo htmlspecialchars($search); ?>" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Minerals..." required />
				<button type="submit" title="Submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
					<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
					</svg>
					<span class="sr-only">Search</span>
				</button>
			</div>
			
		</div>
	</form>
    <div class="hidden w-full md:block md:w-1/4" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="index.php" title="Home" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
        </li>
        
        <li>
          <a href="contact.php" title="Contact" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
        <li>
          <a href="about.php" title="About" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
		<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
          <a href="logout.php" title="Log Out" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log Out</a>
		<?php else: ?>
		  <a href="login.php" title="Log In" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log In</a>
		<?php endif; ?>
        </li>
      </ul>
    </div>
	<a href="cart.php" title="View Cart" class="relative me-4 flex items-center justify-center text-blue-700 dark:text-blue-500">
		<svg class="w-6 h-6 md:w-9 md:h-9" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
			<path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.3 5.2A1 1 0 007 20h10a1 1 0 001-1.2L17 13M7 13H5.4M17 13l1.3 5.2M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z"></path>
		</svg>
		<?php if ($cartCount > 0): ?>
		<span class="absolute -top-2 -right-2 inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full">
			<?php echo $cartCount; ?>
		</span>
		<?php endif; ?>
	</a>
  </div>
</nav>
	<div class="py-4">
	
	</div>
<body class="bg-gray-300">
    <div class="max-w-4xl mx-auto mt-10 bg-white rounded-lg shadow p-6">
        <h1 class="text-3xl font-bold mb-4">Your Cart</h1>

        <?php if (empty($cart)): ?>
            <p class="text-gray-600">Your cart is empty.</p>
        <?php else: ?>
            <table class="w-full table-auto mb-4">
                <thead>
                    <tr class="text-left border-b">
                        <th class="py-2">Item</th>
                        <th class="py-2">Price</th>
                        <th class="py-2">Quantity</th>
                        <th class="py-2">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $grandTotal = 0; ?>
                    <?php foreach ($cart as $id => $item): ?>
                        <?php $total = $item['price'] * $item['quantity']; ?>
			<?php $grandTotal += $total; ?>
<td class="py-2 flex items-start gap-4">
        <!-- 👇 ADDED remove button -->
        <form action="cart.php" method="post" class="mt-1">
            <input type="hidden" name="remove_id" value="<?php echo $id; ?>">
            <button type="submit" title="Remove" class="text-red-500 text-sm hover:underline" onclick="return confirm('Remove this item?')">Remove</button>
        </form>
    </div>
</td>

                        <tr class="border-b">
                            <td class="py-2 flex items-center gap-4">
                                <img src="assets/images/<?php echo htmlspecialchars($item['photo']); ?>" alt="" class="w-12 h-12 object-cover rounded">
				<?php echo htmlspecialchars($item['title']); ?>
			</td>
			    <td class="py-2">$<?php echo number_format($item['price'], 2); ?></td>
                            <td class="py-2"><?php echo $item['quantity']; ?></td>
			    <td class="py-2">$<?php echo number_format($total, 2); ?></td>                       
			 </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <p class="text-right text-xl font-semibold">Grand Total: $<?php echo number_format($grandTotal, 2); ?></p>
			<form action="checkout.php" method="post" class="mt-4">
			<button type="Order" title="Order"  class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
				Order
			</button>
			</form>
        <?php endif; ?>

        <div class="mt-6">
            <a href="index.php" title="Continue Shopping" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Continue Shopping</a>
        </div>
    </div>
</body>
</html>

