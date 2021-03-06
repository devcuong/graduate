<?php require_once 'web/core/Config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Trang review đánh giá của khách hàng về các sản phẩm, dịch vụ tại
	các công ty tại Việt Nam</title>
<link href="/web/public/css/bulma.min.css" rel="stylesheet">
<link href="/web/public/css/owl.carousel.min.css" rel="stylesheet">
<link href="/web/public/css/owl.theme.default.min.css" rel="stylesheet">
<link rel="preload stylesheet" as="style"
	href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
	crossorigin="anonymous">
<script src="/web/public/js/jquery.min.js"></script>
<script src="/web/public/js/owl.carousel.min.js"></script>
<script src="/web/public/js/main.js"></script>
<style type="text/css">
#header-top {
	background-color: #016938;
}

.mr-auto {
	margin-right: auto !important;
}

#header-top .page-link-out {
	margin-bottom: 0px;
	padding: 0px;
	list-style: none;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	font-size: 90%;
	color: #fff;
	line-height: 25px;
}

#header-top .page-link-out a {
	position: relative;
	display: block;
	line-height: 25px;
	padding: 0px 10px;
	color: #fff;
}

.d-flex {
	display: -ms-flexbox !important;
	display: -webkit-box !important;
	display: flex !important;
}

.header-logo, .header-banner, .header-search {
	width: 33%;
}

.logo {
	padding: 0.3rem 0 0;
	display: flex;
	align-items: center;
}

.logo .logo__img {
	width: 4rem;
}

.logo .logo__header {
	margin-left: 0.5rem;
}

.wrap {
	margin-top: 10px;
	margin-left: 10px;
	padding: 1rem 1rem 1rem 1rem;
}

.search {
	position: relative;
	display: flex;
}

.searchTerm {
	width: 100%;
	border: 3px solid #e86b1f;
	border-right: none;
	padding: 5px;
	height: 36px;
	border-radius: 5px 0 0 5px;
	outline: none;
	color: #9DBFAF;
}

.searchButton {
	width: 40px;
	height: 36px;
	border: 1px solid #e86b1f;
	background: #e86b1f;
	text-align: center;
	color: #fff;
	border-radius: 0 5px 5px 0;
	cursor: pointer;
	font-size: 20px;
}

.header-nav {
	background-color: #008b32;
}

/*nav*/
.navbar {
	width: 100%;
	background-color: #008b32;
}

.navbar-item, .navbar-link {
	background-color: #008b32;
	color: #fff;
}

.navbar-link.is-active, .navbar-link:hover, a.navbar-item.is-active, a.navbar-item:hover
	{
	background-color: #016938;
	color: #fff;
}

.navbar-item.has-dropdown.is-active .navbar-link, .navbar-item.has-dropdown:hover .navbar-link
	{
	background-color: #016938;
}

.navbar-dropdown {
	background-color: #008b32;
}

.navbar-dropdown a.navbar-item:hover {
	background-color: #016938;
	color: #fff;
}

/*slide nav*/
@media ( min-width : 1200px) {
	#slide-product .owl-prev, #big.owl-theme .owl-prev, #product-uytin .owl-prev
		{
		left: -5px;
	}
	#big.owl-theme .owl-next, #big.owl-theme .owl-prev {
		background: rgb(0, 0, 0, 0.5);
		width: 40px;
		line-height: 50px;
		height: 50px;
		margin-top: -20px;
		position: absolute;
		text-align: center;
		top: 40%;
	}
	#slide-product .owl-next, #big.owl-theme .owl-next, #product-uytin .owl-next
		{
		right: -5px;
	}
	.owl-theme .owl-dots {
		text-align: right;
		bottom: 2%;
		right: 0;
		max-width: 95%;
		margin-left: auto;
		margin-right: auto;
		position: absolute;
		z-index: 3;
		pointer-events: none;
	}
	#big .item {
		background: #ec6e46;
		color: #FFF;
		text-align: center;
	}
}

@media screen and (min-width: 1280px) {
	.container {
		max-width: 1152px;
		width: 1152px;
	}
}

.box-header {
	color: #fff;
	background-color: #008b32;
	font-family: 'Anton', sans-serif;
	font-size: 100%;
	padding-top: 0.5rem;
	padding-bottom: 0.25rem;
	padding-left: 1.25rem;
}

.box-content {
	border: 1px solid #008b32;
}

.box-item {
	padding: 10px;
	border-bottom: 1px solid #cecece;
}

.product-image{
	min-height: 220px;
	max-height:220px;
	overflow: hidden;
}

.product-name{
	text-align: center;
}

.product-name h3{
    font-size: 16px;
    font-weight: bold;
    display: block;
    margin-bottom: 0px;
    margin-top: 0px;
}

.mt-20{
	margin-top: 20px;
}
</style>
</head>
<body>
<?php
echo "this is template 1";
require_once "./web/views/" . $data["Page"] . ".php"?>
<section id="header">
		<div id="header-top">
			<div class="container d-flex">
				<ul class="page-link-out mr-auto">
					<li class="active"><a href="#" title="website bán hàng"><i
							class="fa fa-phone" aria-hidden="true"></i> </a></li>&nbsp
					0902.401.601
				</ul>
				<div class="page-link-out is-hidden-touch">
					<a href="#" title="#"> <i class="fa fa-shopping-cart"
						aria-hidden="true"></i> Giỏ hàng
					</a>
				</div>
			</div>
		</div>
		<div id="header-banner-logo">
			<div class="container">
				<div class="d-flex">
					<div class="header-logo navbar-brand">
						<div class="logo" data-no-instant="">
							<a href="#"> <img class="logo__img"
								src="/web/public/images/logo.png" alt="">
							</a>
							<h1 class="logo__header has-text-white is-size-5">
								<a href="#"> <b>CÔNG TY TOP</b></a>
							</h1>
						</div>
					</div>
					<div class="header-banner">
						<div class="banner">
							<img alt="" src="/web/public/images/banner-top.jpg">
						</div>
					</div>
					<div class="header-search">
						<div class="wrap  is-hidden-touch">
							<form action="//congtytop.com/tim-kiem/news" method="post">
								<div class="search">
									<input type="text" name="search" class="searchTerm"
										placeholder="Tìm tin tức hoặc videos gì bạn muốn tìm">
									<button type="submit" class="searchButton">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-nav">
			<div class="container d-flex">
				<nav class="navbar" role="navigation" aria-label="main navigation">
					<div class="navbar-brand">
						<a role="button" class="navbar-burger burger" aria-label="menu"
							aria-expanded="false" data-target="navbarBasicExample"> <span
							aria-hidden="true"></span> <span aria-hidden="true"></span> <span
							aria-hidden="true"></span>
						</a>
					</div>

					<div id="navbarBasicExample" class="navbar-menu">
						<div class="navbar-start">
							<a class="navbar-item"> Home </a> <a class="navbar-item">
								Documentation </a>

							<div class="navbar-item has-dropdown is-hoverable">
								<a class="navbar-link"> More </a>

								<div class="navbar-dropdown">
									<a class="navbar-item"> About </a> <a class="navbar-item"> Jobs
									</a> <a class="navbar-item"> Contact </a> <a
										class="navbar-item"> Report an issue </a>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="owl-banner">
			<div class="owl-carousel owl-theme" id="big">
				<div class="item">
					<img src="/web/public/images/Homepage-banner-t9-2019.jpg"
						style="width: 100%;">

				</div>
				<div class="item">
					<img src="/web/public/images/Home-Banner-5.png"
						style="width: 100%;">

				</div>
				<div class="item">
					<img src="/web/public/images/Homepage-banner-t9-2019.jpg"
						style="width: 100%;">

				</div>
			</div>
		</div>
	</section>
	<section id="main">
		<div class="container">
			<div class="columns">
				<div class="column is-3">
					<div class="category-block">
						<h3 class="box-header">Danh mục sản phẩm</h3>
						<div class="box-content">
							<div class="box-item">
								<i class="fa fa-caret-right" aria-hidden="true"></i> Asus
							</div>
							<div class="box-item">
								<i class="fa fa-caret-right" aria-hidden="true"></i> Apple
							</div>
							<div class="box-item">
								<i class="fa fa-caret-right" aria-hidden="true"></i> HP
							</div>
							<div class="box-item">
								<i class="fa fa-caret-right" aria-hidden="true"></i> Apple
							</div>
						</div>
					</div>
					<div class="mt-20"></div>
					<div class="best-product-block">
						<h3 class="box-header">Sản phẩm tiêu biểu</h3>
						<div class="box-content">
							<div class="product-item">
								<div class="product-image">
									<img alt="" src="web/public/images/product-image-1.jpg">
								</div>
								<div class="product-name"><h3>Macbook Pro 16 inch MVVK2 16GB/1TB 2019</h3></div>
							</div>
						</div>
					</div>
				</div>
				<div class="column"></div>
			</div>
		</div>
	</section>
	<section id="footer"></section>
</body>
<script type="text/javascript">
		(function(){
			var burger = document.querySelector('.burger');
			var nav = document.querySelector('#'+burger.dataset.target);

			burger.addEventListener('click', function(){
				//alert(burger.length);
				burger.classList.toggle('is-active');
				nav.classList.toggle('is-active');
			})
		})();
	</script>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
