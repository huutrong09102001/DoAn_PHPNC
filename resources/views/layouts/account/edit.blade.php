<!DOCTYPE html>
<html lang="en">
	<head>
		
<meta charset="utf-8" />
		<title>Tables - Ace Admin</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
		<link href="{{asset('frontend/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
		<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="{{asset('frontend/css/ace-fonts.css')}}" />

		<!-- ace styles -->

		<link rel="stylesheet" href="{{asset('frontend/css/ace.min.css')}}" />
		<link rel="stylesheet" href="{{asset('frontend/css/ace-responsive.min.css')}}" />
		<link rel="stylesheet" href="{{asset('frontend/css/ace-skins.min.css')}}" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="{{asset('frontend/js/ace-extra.min.js')}}"></script>
    
	</head>
    <body>
<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>

						<li>
							<a href="#">Tables</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Tài khoản</li>
					</ul><!-- .breadcrumb -->

					
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Tài khoản
							<small>
								<i class="icon-double-angle-right"></i>
								Chỉnh sửa thông tin
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row-fluid">
						<div class="span12">
							<!-- PAGE CONTENT BEGINS -->

							<form class="form-horizontal" method="post" action="{{route('account.update' , ['account' => $account])}}" enctype="multipart/form-data">
                            @csrf
							@method('patch')
										<div class="control-group">
									<label class="control-label">Tên Tài khoản</label>

									<div class="controls">
										<input type="text" name="tendangnhap" value="{{$account->username}}" />
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" >Mật khẩu</label>

									<div class="controls">
										<input class="text" type="text" name="matkhau" value="{{$account->password}}" />
										
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"  for="fullname">Tên đầy đủ</label>

									<div class="controls">
										<input  type="text" name="hovaten" value="{{$account->fullname}}" />
										&nbsp; &nbsp;
										
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" >Địa chỉ</label>

									<div class="controls">
										<input  type="text" name="diachi" value="{{$account->address}}" />
										<div class="help-block" name="diachi"></div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="dienthoai">Số điện thoại</label>

									<div class="controls">
										
										<input  type="text" name="sodienthoai" value="{{$account->phone}}" />
										<div class="help-block" id="input-span-slider"></div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="email">Email</label>

									<div class="controls">
										
										<input  type="text" name="email" value="{{$account->email}}" />
										<div class="help-block" id="input-span-slider"></div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="gioitinh">Giới tính</label>

									<div class="controls">
										
										<input  type="text" name="gioitinh" value="{{$account->sex}}" />
										<div class="help-block" id="input-span-slider"></div>
									</div>
								</div>

								

                                </div >
                                <div class="control-group">
                                <label class="control-label" for="manhinh">Hình ảnh</label>
                                <img style="width:100px; max-height:100px; object-fit:contain" src="{{$account->avt}}">
                                <input type="file" accept="images/*" name="hinh"><br>

                                </div>

								<div class="form-actions">
									<button class="btn btn-info" type="submit">
										<i class="icon-ok bigger-110"></i>
										Submit
									</button>

									&nbsp; &nbsp; &nbsp;
									
								</div>
										</form>
</body>
</html>