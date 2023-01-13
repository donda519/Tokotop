<?php
include_once 'config.php';

$produk = mysqli_query($db,"SELECT * FROM produk");
$data_produk = [];
if(mysqli_num_rows($produk))
{
	$data_produk = mysqli_fetch_all($produk,MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Toko Online Ku</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="bg-white border-bottom sticky-top">
			<nav class="container navbar navbar-expand-lg">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Toko Online Ku</a>
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div
						class="collapse navbar-collapse"
						id="navbarSupportedContent"
					>
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#"
									>Home</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-catalog"
									>Product</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about-us"
									>About Us</a
								>
							</li>
						</ul>
						<a
							class="btn btn-primary"
							href="#contact-us"
							role="button"
							>Contact Us</a
						>
					</div>
				</div>
			</nav>
		</div>
		<div class="px-4 py-5 my-5 text-center">
			<h1 class="display-5 fw-bold">Welcome to Toko Online Ku</h1>
			<div class="col-lg-6 mx-auto">
				<p class="lead mb-4">
				Selamat Datang Di Toko Online. Kepuasan anda Kebanggan kami. Enjoy
				</p>
				<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
					<a
						href="#about-us"
						type="button"
						class="btn btn-primary btn-lg px-4 gap-3"
					>
						About Us
					</a>
					<a
						href="#contact-us"
						type="button"
						class="btn btn-outline-secondary btn-lg px-4"
					>
						Contact Us
					</a>
				</div>
			</div>
		</div>
		<div id="product-catalog" class="container">
			<h3 class="mb-4">Product Catalog</h3>
			<div class="row">
				<?php
				foreach($data_produk as $item):
				?>
				<div class="col-md-3">
					<div class="card mb-3">
						<img
							src="<?= $item['gambar'] ?>"
							class="card-img-top"
							alt=""
						/>
						<div class="card-body">
							<h5 class="card-title"><?= $item['nama'] ?></h5>
							<p class="card-text"><?= $item['deskripsi'] ?></p>
							<a href="#!" class="btn btn-primary">Buy Now!</a>
						</div>
					</div>
				</div>
				<?php
				endforeach
				?>
			</div>
		</div>
		<div id="about-us" class="bg-primary">
			<div class="container py-5">
				<div class="header-section mb-5">
					<p class="text-uppercase text-light">Our Short Story</p>
					<h3 class="font-weight-bold text-white mb-4">About Us</h3>
				</div>
				<div class="row justify-content-center align-items-center">
					<div class="col-md-6">
						<div class="py-4">
							<img
								class="w-100 rounded-lg"
								src="images/team.jpg"
								alt="team"
							/>
						</div>
					</div>
					<div class="col-md-6">
						<p class="text-light font-weight-lighter text-justify">
						Toko Online Ku berdiri sejak tahun ini. mencoba untuk menjadi yang terbaik dalam hal penanganan pelanggan dan terus meningkatkan kualitas produk. Serta terus berinovasi menjual barang dengan kebutuhan anda.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id="contact-us" class="container py-5">
			<div class="header-section mb-5">
				<p class="text-uppercase">Can We Help You?</p>
				<h3 class="font-weight-bold mb-4">Contact Us</h3>
			</div>
			<div class="row">
				<div class="col-md-6 align-self-center">
					<div class="py-4">
						<img
							class="w-100"
							src="images/delivery-address.svg"
							alt="people"
						/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="bg-white p-5 shadow rounded-3">
						<form action="#" method="POST">
							<div class="form-group form-custom">
								<label class="font-weight-bold" for="name"
									>Name</label
								>
								<input
									type="text"
									class="form-control"
									name="name"
									required
								/>
							</div>
							<div class="form-group form-custom">
								<label class="font-weight-bold" for="email"
									>Email</label
								>
								<input
									type="email"
									class="form-control"
									name="email"
									required
								/>
							</div>
							<div class="form-group form-custom">
								<label
									class="font-weight-bold"
									for="whatsapp_number"
									>Whatsapp Number</label
								>
								<input
									type="text"
									class="form-control"
									name="whatsapp_number"
									required
								/>
							</div>
							<div class="form-group form-custom">
								<label class="font-weight-bold" for="message"
									>Message</label
								>
								<textarea
									class="form-control"
									name="message"
									rows="3"
									required
								></textarea>
							</div>
							<div
								class="form-group d-flex justify-content-center mt-4"
							>
								<button
									type="submit"
									class="btn btn-primary rounded-pill btn-hovered font-weight-bold px-4"
									name="submit"
								>
									Sent
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="border-top">
			<footer class="container py-2">
				<p class="text-center text-muted">© 2022 Toko Online Ku</p>
			</footer>
		</div>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
			crossorigin="anonymous"
		></script>
	</body>
</html>
