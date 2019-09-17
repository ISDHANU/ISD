@extends('user.layout')
@section('body')
@section('pageTitle', 'Trang chủ')

<div class="carousel">
	<img src="images/banner-2.png">
</div>
<div class="bound title_list">
	Giày Da Cao Cấp
</div>
<div class="bound h2">
	<h2>Sản Phẩm Mới</h2>
</div>
<div class="bound" style="text-align: center;">
	(tính năng đang cập nhật)
</div>
<div class="bound nav_picker">
	<ul>
		<li class="">
			<a href="/allitem">Tất Cả</a>
		</li>
		<li>
			<a href="">Mới</a>
		</li>
		<li class="active">
			<a href="">Nổi Bật</a>
		</li>
		<li>
			<a href="">Bán Chạy</a>
		</li>
		<li>
			<a href="">Giảm Giá</a>
		</li>
	</ul>
</div>
<div class="bound list_item">
	<div class="background_"> </div>
	<div class="row bound_list">

		<?php foreach ($data as $key => $value): ?>
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
						<img src="<?php echo $value->Shoes_image; ?>">
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
							<a href=""><i class="fas fa-search"></i></a>
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
