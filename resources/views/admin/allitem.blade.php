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
			              <h3 class="box-title">Hover Data Table</h3>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body">
			              <table id="example2" class="table table-bordered table-hover">
			                <thead>
			                	<tr>
			                  		<th>Mã Giày</th>
			                  		<th>Tên Giày</th>
			                  		<th>Giá Tiền</th>
			                  		<th>Giảm Giá</th>
			                  		<th>Hình Ảnh</th>
			                  		<th>Kiểu</th>
			                	</tr>
			                </thead>
			                <tbody>

			         <?php foreach ($data as $value): ?>
		         		<tr>
			        		<td><?php echo $value->ma; ?></td>
				            <td><?php echo $value->ten; ?></td>
				            <td><?php echo $value->giatien; ?></td>
				            <td><?php echo $value->giamgia; ?></td>
				            <td><?php echo $value->hinhanh; ?></td>
				            <td><?php echo $value->kieu; ?></td>
			        	</tr>
			        <?php endforeach ?>
			                </tbody>
			                <tfoot>
			              </table>
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->

			        <!-- /.col -->
			      </div>
	  		</div>
	  	</div>
	  	
@endsection()