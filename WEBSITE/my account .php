<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Account - GM Store</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		.account-container{max-width:1000px;margin:32px auto;padding:0 20px}
		.account-grid{display:grid;grid-template-columns:260px 1fr;gap:20px}
		.sidebar{background:#fff;padding:16px;border-radius:8px;box-shadow:0 6px 18px rgba(0,0,0,.04)}
		.main{background:#fff;padding:18px;border-radius:8px;box-shadow:0 6px 18px rgba(0,0,0,.04)}
		.nav-list{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px}
		.nav-list a{color:#333;text-decoration:none}
		.account-hero{display:flex;align-items:center;gap:12px}
		.badge{display:inline-block;padding:6px 10px;background:#27ae60;color:#fff;border-radius:6px;font-size:.85rem}
		.stat-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin-top:12px}
		.stat{background:#f8fafc;padding:12px;border-radius:8px;text-align:center}
		.orders-list{list-style:none;padding:0;margin:0}
		.orders-list li{padding:12px;border-bottom:1px solid #eee}
	</style>
</head>
<body>
	<header style="background:#f7f7f7;padding:12px 20px;margin-bottom:12px">
		<nav style="max-width:1100px;margin:0 auto;display:flex;gap:12px;align-items:center">
			<a href="index.php" style="font-weight:700;color:#333;text-decoration:none">GM Store</a>
			<div style="margin-left:24px;display:flex;gap:12px">
				<a href="index.php">Home</a>
				<a href="categories.php">Categories</a>
				<a href="products.php">Products</a>
				<a href="deals.php">Deals</a>
				<a href="faq.php">FAQ</a>
				<a href="about.php">About</a>
			</div>
			<div style="margin-left:auto"><a href="login.php">Login</a></div>
		</nav>
	</header>

	<main class="account-container">
		<div style="display:flex;justify-content:space-between;align-items:center">
			<h1>My Account</h1>
			<div style="color:#666">Switch role:
				<a href="My Account .php?role=customer">Customer</a> |
				<a href="My Account .php?role=admin">Admin</a>
			</div>
		</div>

		<?php
		// Simple role toggle via GET param for demo purposes
		$role = isset($_GET['role']) && $_GET['role']==='admin' ? 'admin' : 'customer';
		?>

		<div class="account-grid">
			<aside class="sidebar">
				<h3>Account</h3>
				<ul class="nav-list">
					<li><a href="#">Profile</a></li>
					<li><a href="#">Orders</a></li>
					<li><a href="#">Addresses</a></li>
					<li><a href="#">Payment methods</a></li>
					<?php if($role==='admin'): ?>
						<li><a href="#">Admin: Manage Products</a></li>
						<li><a href="#">Admin: Manage Users</a></li>
						<li><a href="#">Admin: Site Settings</a></li>
					<?php endif; ?>
				</ul>
			</aside>

			<section class="main">
				<?php if($role==='admin'): ?>
					<div class="account-hero">
						<div>
							<h2>Admin Dashboard <span class="badge">Administrator</span></h2>
							<div style="color:#666">Welcome back, Admin.</div>
						</div>
					</div>

					<div class="stat-grid">
						<div class="stat"><div style="font-weight:700">156</div><div style="color:#666">Total Products</div></div>
						<div class="stat"><div style="font-weight:700">1,240</div><div style="color:#666">Total Orders</div></div>
						<div class="stat"><div style="font-weight:700">3</div><div style="color:#666">Pending Issues</div></div>
						<div class="stat"><div style="font-weight:700">24</div><div style="color:#666">Registered Users</div></div>
					</div>

					<h3 style="margin-top:18px">Quick Actions</h3>
					<div style="display:flex;gap:8px;flex-wrap:wrap">
						<a class="btn" href="#" style="padding:10px 12px;background:#3498db;color:#fff;border-radius:6px;text-decoration:none">Add Product</a>
						<a class="btn" href="#" style="padding:10px 12px;background:#2ecc71;color:#fff;border-radius:6px;text-decoration:none">View Orders</a>
						<a class="btn" href="#" style="padding:10px 12px;background:#e67e22;color:#fff;border-radius:6px;text-decoration:none">User Management</a>
					</div>

				<?php else: ?>
					<div class="account-hero">
						<div>
							<h2>Welcome, Jane Doe</h2>
							<div style="color:#666">Member since 2024</div>
						</div>
						<div style="margin-left:auto;text-align:right">
							<div style="font-weight:700">Reward Points</div>
							<div style="color:#27ae60">1,250 pts</div>
						</div>
					</div>

					<h3 style="margin-top:16px">Recent Orders</h3>
					<ul class="orders-list">
						<li>
							<div style="display:flex;justify-content:space-between;align-items:center">
								<div>
									<strong>Order #1024</strong>
									<div style="color:#666;font-size:.95rem">Placed: 2026-01-22 — Items: 3</div>
								</div>
								<div style="text-align:right;color:#3498db">Delivered</div>
							</div>
						</li>
						<li>
							<div style="display:flex;justify-content:space-between;align-items:center">
								<div>
									<strong>Order #1010</strong>
									<div style="color:#666;font-size:.95rem">Placed: 2025-12-05 — Items: 1</div>
								</div>
								<div style="text-align:right;color:#e67e22">Shipped</div>
							</div>
						</li>
					</ul>

					<h3 style="margin-top:16px">Account Settings</h3>
					<form style="max-width:560px">
						<label>Full name</label>
						<input type="text" value="Jane Doe" style="width:100%;padding:8px;margin:6px 0 12px;border:1px solid #ddd;border-radius:6px">
						<label>Email</label>
						<input type="email" value="jane@example.com" style="width:100%;padding:8px;margin:6px 0 12px;border:1px solid #ddd;border-radius:6px">
						<label>Phone</label>
						<input type="tel" value="+255 763 537 102" style="width:100%;padding:8px;margin:6px 0 12px;border:1px solid #ddd;border-radius:6px">
						<button type="button" style="padding:10px 14px;background:#3498db;color:#fff;border-radius:6px;border:none">Save changes</button>
					</form>
				<?php endif; ?>
			</section>
		</div>
	</main>

	<footer style="text-align:center;padding:28px;color:#777;margin-top:18px">&copy; 2026 GM Store</footer>
</body>
</html>
