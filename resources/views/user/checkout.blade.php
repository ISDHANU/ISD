@extends('user.layout')
@section('body')
@section('pageTitle', 'Đặt Hàng')
<div class="carousel">
	<!-- <img src="images/banner-2.png"> -->
</div>
<div class="bound">
	<div class="table_cart">
		<table class="table">
		  	<thead>
			    <tr>
			      	<th scope="col">Giày</th>
			      	<th scope="col">Kích Cỡ</th>
			      	<th scope="col">Giá Tiền</th>
			      	<th scope="col">Số Lượng</th>
			      	<th scope="col">Tổng</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>
			      	<th scope="row" class="table_cart_image">
			      		husago2
						<img src="images/husago2.jpg">
			      	</th>
			      	<td>37</td>
			      	<td>2.000.000đ</td>
			      	<td>1</td>
			      	<td>2.000.000đ</td>
			    </tr>
			    <tr>
			      	<th scope="row" class="table_cart_image">
			      		husago2
						<img src="images/husago5.jpg">
			      	</th>
			      	<td>37</td>
			      	<td>2.000.000đ</td>
			      	<td>1</td>
			      	<td>2.000.000đ</td>
			    </tr>
			    <tr>
			      	<th scope="row" class="table_cart_image">
			      		husago2
						<img src="images/husago4.jpg">
			      	</th>
			      	<td>37</td>
			      	<td>2.000.000đ</td>
			      	<td>1</td>
			      	<td>2.000.000đ</td>
			    </tr>
		  	</tbody>
		</table>
	</div>
	<!-- <div class="_note">
		Giúp chúng tôi hiểu bạn hơn !!
	</div> -->
	<div class="sum_">
		6.000.000đ
	</div>
	<div class="title_sum">
		Tổng: 
	</div>
	<div class="form_submit_customer">
		<input type="" name="" placeholder="Họ Và Tên" style="width: 25%;">
		<input type="" name="" placeholder="Số Điện Thoại" style="width: 25%;">
		<input type="" name="" placeholder="Tuổi" style="width: 15%;">
		<input type="" name="" placeholder="Email" style="width: 50%;">
		<input type="" name="" placeholder="Địa Chỉ" style="width: 50%;">
	</div>
	<div class="voucher">
		<input type="" name="" placeholder="Mã Giảm Giá" style="width: 50%;">
	</div>
	<div class="submit_customer">
		<button type="button" class="btn btn-success" style="width: 50%;">Đặt Hàng</button>
	</div>

</div>
@endsection()
