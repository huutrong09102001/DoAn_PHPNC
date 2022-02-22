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
							<a href="#">Forms</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Hóa đơn</li>
					</ul><!-- .breadcrumb -->

					
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Hóa đơn
							<small>
								<i class="icon-double-angle-right"></i>
								Chỉnh sửa hóa đơn
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row-fluid">
						<div class="span12">
							<!-- PAGE CONTENT BEGINS -->

							<form class="form-horizontal" method="post" action="{{route('invoice.update' , ['invoice' => $invoice])}}" enctype="multipart/form-data">
                            @csrf
							@method('patch')
										<div class="control-group">
									<label class="control-label">Mã tài khoản</label>

									<div class="controls">
										<input type="text" name="matk" value="{{$invoice->accountId}}" />
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" >Ngày</label>

									<div class="controls">
										<input class="text" type="text" name="ngay" value="{{$invoice->date}}" />
										
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"  for="tongtien">Tổng tiền</label>

									<div class="controls">
										<input  type="text" name="tongtien" value="{{$invoice->subtotal}}" />
										&nbsp; &nbsp;
										
									</div>
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