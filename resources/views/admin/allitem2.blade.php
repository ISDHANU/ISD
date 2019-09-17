@extends('admin.layout')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      <h1>
		        Kho Giày
		        <!-- <small>Control panel</small> -->
		      </h1>
		      <ol class="breadcrumb">
		        <li><a href="/adminadditem"><i class="fa fa-dashboard"></i> Thêm Giày</a></li>
		      </ol>
		    </section>
	  		<div class="content">	
				<div class="row">
			        <div class="col-xs-12">
			          <div class="box">
			            <div class="box-header">
			              <!-- <h3 class="box-title">Tất Cả Sản Phẩm</h3> -->
			              <form class="search" action="{{route('admin_search_item')}}" method="post">
								{{ csrf_field() }}
								<div class="col-lg-4">
									<div class="form-group">
										<input type="" name="" class="form-input" style="width: 100%;height: 34px;border-color: #d2d6de">
									</div> 
								</div>
								<div class="col-lg-2">
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
									    	<option>Thuộc Tính (tính năng đang cập nhật)</option>
									    	<option>Trơn</option>
									    	<option>Vân</option>
									    	<option>Dây</option>
									  	</select>
									</div> 
								</div>
								<div class="col-lg-2">
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
								<div class="col-lg-1">
									<button type="submit" class="btn btn-success search_button">Search</button>
								</div>
							</form>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body">
			            	<div class="row">
			            		<?php foreach ($data as $key => $value): ?>
				            		<div class="col-md-3" style="height: 300px;background-color: rgba(0, 0, 0, .3);border: 1px solid black">
				            			
				            		</div>
				            	<?php endforeach ?>
			            	</div>
			            	
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->

			        <!-- /.col -->
			      </div>
	  		</div>
	  		{!! $data->links() !!}
	  	</div>
	  	
@endsection()