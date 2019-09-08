@extends('user.layout')
@section('body')
@section('pageTitle', 'Cửa Hàng')

<div class="carousel">
	<!-- <img src="images/banner-2.png"> -->
</div>

<div class="search">
	<div class="col-lg-3">
		<div class="form-group">
		  	<select class="form-control" id="sel1">
		    	<option>Kích Thước</option>
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
		    	<option>Thuộc Tính</option>
		    	<option>Trơn</option>
		    	<option>Vân</option>
		    	<option>Dây</option>
		  	</select>
		</div> 
	</div>
	<div class="col-lg-3">
		<div class="form-group">
		  	<select class="form-control" id="sel1">
		    	<option>Tất Cả</option>
		    	<option>Mới</option>
		    	<option>Nổi Bật</option>
		    	<option>Bán Chạy</option>
		    	<option>Giảm Giá</option>
		  	</select>
		</div> 
	</div>
	<div class="col-lg-3">
		<button type="button" class="btn btn-success search_button">Search</button>
	</div>
	
</div>
<div class="bound list_item">
	<div class="background_"> </div>
	<div class="row bound_list">
		<div class="col-lg-3 col-md-6 col-sm-12 bound_item">
			<div class="item">
				<div class="offer">
					<div class="offer_title new">
						NEW
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
						SALE
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
					<div class="offer_title sale">
						SALE
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
						NEW
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
						SALE
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
					<div class="offer_title sale">
						SALE
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
						NEW
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
						SALE
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
					<div class="offer_title sale">
						SALE
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
