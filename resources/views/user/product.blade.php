@extends('user.layout')
@section('body')
@section('pageTitle', 'Sản Phẩm')

<div class="carousel">
	<img src="{{asset('images/banner-2.png')}}">
</div>

<div class="nav_url">
	<ul>
		<li><a href="">Trang chủ</a></li><i class="fas fa-arrow-right"></i>
	</ul>
	<ul>
		<li><a href="/allitem">Cửa Hàng</a></li><i class="fas fa-arrow-right"></i>
	</ul>
	<ul>
		<li><a><?php echo $data->Shoes_name ?></a></li>
	</ul>
</div>

<div class="bound">
	<div class="bound_product">
		<div class="row">
			<div class="col-lg-5 col-sm-12">
				<div class="product_item">
					<div class="image">
						<!-- <img src="<?php echo $data->Shoes_image; ?>"> -->
						<img src="{{asset($data->Shoes_image)}}">
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-sm-12">
				<div class="product_item">
					<div class="title_product_item">
						<?php echo $data->Shoes_name ?>
					</div>
					<div class="cost_product_item">
						<?php echo $data->Shoes_prices ?>
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
							<a href="/checkout/<?php echo $data->Shoes_id; ?>">Đặt Hàng</a>
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
		<?php foreach ($thesame as $key => $value): ?>
			<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
				<div class="item">
					<div class="offer">
						<?php if ($value->Format == 1): ?>
							<div class="offer_title new">
								<?php echo "Mới" ?>
							</div>
						<?php elseif ($value->Format == 2): ?>
							<div class="offer_title sale">
								<?php echo 'Giảm Giá' ?>
							</div>
						<?php elseif ($value->Format == 3): ?>
							<div class="offer_title hot">
								<?php echo 'Bán Chạy' ?>
							</div>
						<?php endif ?>
					</div>

					<div class="image">
						<img src="{{asset($value->Shoes_image)}}">
						<!-- <img src="public/<?php echo $value->Shoes_image; ?>"> -->
					</div>

					<div class="title">
						<a href="/product/<?php echo $value->Shoes_id; ?>"><?php echo $value->Shoes_name; ?></a>
					</div>

					<div class="cost">

						<?php if ($value->Format != 2): ?>
							<div class="buy">
								<?php echo $value->Shoes_prices; ?>
							</div>
						<?php elseif ($value->Format == 2): ?>
							<div class="sell">
								<?php echo $value->Shoes_sale; ?>
							</div>
							<div class="buy">
								<?php echo $value->Shoes_prices; ?>
							</div>
						<?php endif ?>
					</div>
					<div class="more">
						<div class="view">
							<a href="/product/<?php echo $value->Shoes_id; ?>"><i class="fas fa-search"></i></a>
						</div>
						<div class="add">
							<a href=""><i class="fas fa-shopping-cart"></i></a>
						</div>
					</div>

				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
@endsection()