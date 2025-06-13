<?php
session_start();
?>

<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>

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
          <a href="about.php" title="About" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">About</a>
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
	<a href="cart.php" title="View Cart" class="relative me-4 flex items-center justify-center text-gray-700 hover:text-blue-700 dark:text-white dark:hover:text-blue-500">
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
<body class="bg-gray-300">
	<div class="py-8 p-8">
		<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-center text-gray-900 md:text-5xl lg:text-6xl">We specialize in providing <span class="text-blue-600 dark:text-blue-500">high-quality</span> bulk minerals.</h1>	
	</div>
		<div class="mx-auto w-1/2 bg-gray-700 p-6 rounded-lg shadow-sm">
	  <p class="text-lg tracking-wide mb-3 text-left text-white">
		At BigRockHard, we specialize in providing high-quality bulk minerals for industries, businesses, and individual enthusiasts. Whether you're sourcing raw materials for manufacturing, landscaping, agriculture, or personal projects, we offer a wide selection of minerals, including quartz, feldspar, gypsum, bentonite, and more. Our mission is to make bulk mineral sourcing easy, affordable, and efficient by offering competitive pricing, seamless logistics, and exceptional customer service.
	  </p>
	</div>
</body>
</html>
