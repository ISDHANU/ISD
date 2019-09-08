@extends('user.layout')
@section('body')
@section('pageTitle', 'Sản Phẩm')

<div class="carousel">
	<img src="images/banner-2.png">
</div>

<div class="nav_url">
	<ul>
		<li><a href="">Trang chủ</a></li><i class="fas fa-arrow-right"></i>
	</ul>
	<ul>
		<li><a href="">Cửa Hàng</a></li><i class="fas fa-arrow-right"></i>
	</ul>
	<ul>
		<li><a href="">husago1975</a></li>
	</ul>
</div>

<div class="bound">
	<div class="bound_product">
		<div class="row">
			<div class="col-lg-5 col-sm-12">
				<div class="product_item">
					<div class="image">
						<img src="images/husago4.jpg">
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-sm-12">
				<div class="product_item">
					<div class="title_product_item">
						husago1975
					</div>
					<div class="cost_product_item">
						2.000.000đ
					</div>
					<div class="describe_product_item">
						Husago đem đến sự lựa chọn đa phong cách_ ĐẲNG CẤP_THỜI THƯỢNG_LỊCH LÃM <br>
						✅ Hàng làm tay thủ công tỉ mỉ từ đường kim đế đến mũi giày <br>
						✅ Cam kết 100% DA NHẬP KHẨU <br>
						✅ Bảo hành 12 tháng về da <br>
						✅ Đổi 1 trả 1 nếu  là hàng kém chất lượng, đền gấp 10 nếu k phải da nhập <br>
						✅ Ship COD trên toàn quốc <br>
					</div>
					<div class="info_product_item">
						<div class="category_bound">
							<div class="category">
								Thuộc Tính: 
							</div>
							<div class="category_text">
								Đục Lỗ
							</div>
						</div>
						<div class="category_bound">
							<div class="category">
								Loại: 
							</div>
							<div class="category_text">
								Trơn
							</div>
						</div>
						<div class="category_bound">
							<div class="category">
								Màu: 
							</div>
							<div class="category_text">
								Da Bò
							</div>
						</div>
					</div>
					<div class="add_cart">
						<div class="count">
							1
						</div>
						<div class="change_count">
							<div class="up">
								+
							</div>
							<div class="down">
								-
							</div>
						</div>
						<div class="add_to_cart">
							<a href="/checkout">Đặt Hàng</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="title_item">
	Sản Phẩm Có Liên Quan
</div>
<div class="bound list_item">
	<div class="background_"> </div>
	<div class="row bound_list">
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title new">
						Mới
					</div>
				</div>

				<div class="image">
					<img src="images/husago2.jpg">
				</div>

				<div class="title">
					<a href="">HUSAGO 1</a>
				</div>

				<div class="cost">
					<div class="sell">
						
						$1.650.000
					</div>
					<div class="buy">
						$1.250.000
					</div>
				</div>

				<div class="more">
					<div class="view">
						<a href=""><i class="fas fa-search"></i></a>
					</div>
					<div class="add">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>

			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title sale">
						Giảm Giá
					</div>
				</div>

				<div class="image">
					<img src="images/husago4.jpg">
				</div>

				<div class="title">
					<a href="">HUSAGO 1</a>
				</div>

				<div class="cost">
					<div class="sell">
						$30.00
					</div>
					<div class="buy">
						$25.00
					</div>
				</div>

				<div class="more">
					<div class="view">
						<a href=""><i class="fas fa-search"></i></a>
					</div>
					<div class="add">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title none">
						
					</div>
				</div>
				
				<div class="image">
					<img src="images/husago5.jpg">
				</div>

				<div class="title">
					<a href="">HUSAGO 1</a>
				</div>

				<div class="cost">
					<div class="sell">
						
					</div>
					<div class="buy">
						$25.00
					</div>
				</div>

				<div class="more">
					<div class="view">
						<a href=""><i class="fas fa-search"></i></a>
					</div>
					<div class="add">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title hot">
						Bán Chạy
					</div>
				</div>

				<div class="image">
					<img src="images/husago2.jpg">
				</div>

				<div class="title">
					<a href="">HUSAGO 1</a>
				</div>

				<div class="cost">
					<div class="sell">
						$30.00
					</div>
					<div class="buy">
						$25.00
					</div>
				</div>

				<div class="more">
					<div class="view">
						<a href=""><i class="fas fa-search"></i></a>
					</div>
					<div class="add">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title new">
						Mới
					</div>
				</div>

				<div class="image">
					<img src="images/husago2.jpg">
				</div>

				<div class="title">
					<a href="">HUSAGO 1</a>
				</div>

				<div class="cost">
					<div class="sell">
						
						$1.650.000
					</div>
					<div class="buy">
						$1.250.000
					</div>
				</div>

				<div class="more">
					<div class="view">
						<a href=""><i class="fas fa-search"></i></a>
					</div>
					<div class="add">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>

			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title sale">
						Giảm Giá
					</div>
				</div>

				<div class="image">
					<img src="images/husago4.jpg">
				</div>

				<div class="title">
					<a href="">HUSAGO 1</a>
				</div>

				<div class="cost">
					<div class="sell">
						$30.00
					</div>
					<div class="buy">
						$25.00
					</div>
				</div>

				<div class="more">
					<div class="view">
						<a href=""><i class="fas fa-search"></i></a>
					</div>
					<div class="add">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title none">
						
					</div>
				</div>
				
				<div class="image">
					<img src="images/husago5.jpg">
				</div>

				<div class="title">
					<a href="">HUSAGO 1</a>
				</div>

				<div class="cost">
					<div class="sell">
						
					</div>
					<div class="buy">
						$25.00
					</div>
				</div>

				<div class="more">
					<div class="view">
						<a href=""><i class="fas fa-search"></i></a>
					</div>
					<div class="add">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title hot">
						Bán Chạy
					</div>
				</div>

				<div class="image">
					<img src="images/husago2.jpg">
				</div>

				<div class="title">
					<a href="">HUSAGO 1</a>
				</div>

				<div class="cost">
					<div class="sell">
						$30.00
					</div>
					<div class="buy">
						$25.00
					</div>
				</div>

				<div class="more">
					<div class="view">
						<a href=""><i class="fas fa-search"></i></a>
					</div>
					<div class="add">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection()