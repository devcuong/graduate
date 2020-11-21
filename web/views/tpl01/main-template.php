<?php require_once 'web/core/Config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Trang review đánh giá của khách hàng về các sản phẩm, dịch vụ tại
	các công ty tại Việt Nam</title>
<link href="/web/public/css/bulma.min.css" rel="stylesheet">
<link rel="preload stylesheet" as="style"
	href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
	crossorigin="anonymous">
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
					<li class="active"><a href="//congtytop.com"
						title="website bán hàng"><i class="fa fa-phone" aria-hidden="true"></i>
					</a></li>&nbsp 0902.401.601
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
		<div class="header-nav">abc</div>
	</section>
	<section id="main"></section>
	<section id="footer"></section>
</body>
</html>

