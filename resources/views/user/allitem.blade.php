@extends('user.layout')
@section('body')
@section('pageTitle', 'Cửa Hàng')

<div class="carousel">
	<!-- <img src="images/banner-2.png"> -->
</div>

<form class="search" action="{{route('user_search_item')}}" method="post">
	{{ csrf_field() }}
	<div class="col-lg-3">
		<div class="form-group">
		  	<select class="form-control" id="sel1">
		    	<option>Kích Thước (tính năng đang cập nhật)</option>
		    	<option>37</option>
		    	<option>38</option>
		    	<option>39</option>
		    	<option>40</option>
		    	<option>41</option>
		    	<option>42</option>
		  	</select>
		</div> 
	</div>
	<div class="col-lg-3">
		<div class="form-group">
		  	<select class="form-control" id="sel1">
		    	<option>Thuộc Tính (tính năng đang cập nhật)</option>
		    	<option>Trơn</option>
		    	<option>Vân</option>
		    	<option>Dây</option>
		  	</select>
		</div> 
	</div>
	<div class="col-lg-3">
		<div class="form-group">
		  	<select class="form-control" id="sel1" name="format">
		    	<option value="0">Tất Cả</option>
		    	<option value="1">Mới</option>
		    	<option value="2">Giảm Giá</option>
		    	<option value="3">Bán Chạy</option>
		    	<!-- <option value="4">Nổi Bật</option> -->
		  	</select>
		</div> 
	</div>
	<div class="col-lg-3">
		<button type="submit" class="btn btn-success search_button">Search</button>
	</div>
</form>

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
	{!! $data->links() !!}
</div>
@endsection()
