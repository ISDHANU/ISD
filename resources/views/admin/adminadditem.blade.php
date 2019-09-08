@extends('admin.layout')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      <h1>
		        Thêm Giày
		        <!-- <small>Control panel</small> -->
		      </h1>
		      <ol class="breadcrumb">
		        <li><a href="#"><i class="fa fa-bar"></i></a></li>
		      </ol>
		    </section>
	  		<div class="content">	

		      <div class="row">
		        <!-- left column -->
		        <div class="col-md-6">
		          <!-- general form elements -->
		          <div class="box box-primary">
		            <div class="box-header with-border">
		              <h3 class="box-title">Thêm Giày Mới</h3>
		            </div>
		            <!-- /.box-header -->
		            <!-- form start -->
		            <form role="form" action="{{route('themgiay')}}" method="post">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">  
		              <div class="box-body">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Mã Giày</label>
		                  <input type="text" class="form-control" name="ma" placeholder="Nhập Mã Giày">
		                </div>
		                <div class="form-group">
		                  <label for="exampleInputPassword1">Tên Giày</label>
		                  <input type="text" class="form-control" name="ten" placeholder="Nhập Tên Giày">
		                </div>
		                <div class="form-group">
		                  <label for="exampleInputPassword1">Giá Tiền</label>
		                  <input type="text" class="form-control" name="giatien" placeholder="Nhập Giá Tiền">
		                </div>
		                <div class="form-group">
		                  <label for="exampleInputFile">Chọn Hình Ảnh</label>
		                  <input type="file" id="exampleInputFile">
		                </div>
		              </div>
		              <!-- /.box-body -->

		              <div class="box-footer">
		                <button type="submit" class="btn btn-primary">Thêm</button>
		              </div>
		            </form>
		          </div>
		          <!-- /.box -->

		          
		        <!--/.col (left) -->
		      </div>
	  		</div>
	  	</div>
	  	
@endsection()