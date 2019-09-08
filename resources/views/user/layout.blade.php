<!DOCTYPE html>
<html>
<head>
	<title>@yield('pageTitle')</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap3.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>
<body>
	<div class="Header" id="header">
		<div class="bound h_header">
			<div class="responsive_nav">
				<div class="bar_menu" id="button_nav">
					<span class="s_change_icon"></span>
					<span class="e_change_icon"></span>
					<span class="s_change_icon"></span>
				</div>
			</div>
			<div class="logo">
				<img src="images/logo-default.png">
			</div>
			<div class="menu">
				<div class="bar_menu" id="open_contact">
					<span class="s_change_icon"></span>
					<span class="w100"></span>
					<span class="w100"></span>
					<span class="e_change_icon"></span>
				</div>
			</div>
			<div class="nav" id="nav">
				<div class="nav_header"> 
					<div class="button_close" id="button_close_nav">
						<span class="left button_close_Nav"></span>
						<span class="right button_close_Nav"></span>
				 	</div> 
				</div>
				<ul>
					<li><a href="/">Trang chủ</a></li>
					<li><a href="/allitem">Cửa Hàng</a></li>
					<li><a href="">Chính Sách</a></li>
					<li><a href="">Giới Thiệu</a></li>
					<li><a href="">Liên Hệ</a></li>
				</ul>
			</div>
			
		</div>
	</div>
	<div class="Body">

		<div class="bound_open" id="bound_open"></div>
		<div class="Contact_us" id="contact_us">
			<div class="header">
				<div class="title">
					Liên Hệ Với Chúng Tôi
				</div>
				<div class="Contact_close" id="close_contact">
					<span class="left button_close_Contact"></span>
					<span class="right button_close_Contact"></span>
				</div>
			</div>
			<div class="body">
				<div class="contact">
					Địa chỉ: 19 Hạ Đình, Thanh Xuân, Hà Nội
				</div>
				<div class="contact">
					Liên Hệ: 0934.509.792 
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14900.024708910836!2d105.8054799!3d20.9923895!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55bd990b913c857a!2sHusago!5e0!3m2!1svi!2s!4v1567876318967!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
		
		
        @yield('body')

	</div>

	<div class="footer">
		
	</div>
</body>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap3.js"></script>
<script type="text/javascript" src="js/effect_custom.js"></script>

</html>