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
		<div class="navbar" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							 Admin
						</small>
					</a><!-- /.brand -->

					<ul class="nav ace-nav pull-right">
						
						

						

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.container-fluid -->
			</div><!-- /.navbar-inner -->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- #sidebar-shortcuts -->
				

				<ul class="nav nav-list">
					

					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="icon-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li >
								<a href="{{route('account.index')}}">
									<i class="icon-double-angle-right"></i>
									Sản phẩm &amp; Chi tiết sản phẩm
								</a>
							</li>

							<li>
								<a href="{{route('provider.index')}}">
									<i class="icon-double-angle-right"></i>
									Nhà sản xuất
								</a>
								<li>
									<a href="{{route('invoice.index')}}">
										<i class="icon-double-angle-right"></i>
										Hóa đơn &amp; Chi tiết hóa đơn
									</a>
								</li>
								
									<li class="active">
									<a href="{{route('account.index')}}">
										<i class="icon-double-angle-right"></i>
										Tài khoản
									</a>
								</li>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> Forms </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="form-elements.html">
									<i class="icon-double-angle-right"></i>
									Form Elements
								</a>
							</li>

							<li>
								<a href="form-wizard.html">
									<i class="icon-double-angle-right"></i>
									Wizard &amp; Validation
								</a>
							</li>

							<li>
								<a href="wysiwyg.html">
									<i class="icon-double-angle-right"></i>
									Wysiwyg &amp; Markdown
								</a>
							</li>

							<li>
								<a href="dropzone.html">
									<i class="icon-double-angle-right"></i>
									Dropzone File Upload
								</a>
							</li>
						</ul>
					</li>

					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-tag"></i>
							<span class="menu-text"> More Pages </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="profile.html">
									<i class="icon-double-angle-right"></i>
									User Profile
								</a>
							</li>

							<li>
								<a href="inbox.html">
									<i class="icon-double-angle-right"></i>
									Inbox
								</a>
							</li>

							<li>
								<a href="pricing.html">
									<i class="icon-double-angle-right"></i>
									Pricing Tables
								</a>
							</li>

							<li>
								<a href="invoice.html">
									<i class="icon-double-angle-right"></i>
									Invoice
								</a>
							</li>

							<li>
								<a href="timeline.html">
									<i class="icon-double-angle-right"></i>
									Timeline
								</a>
							</li>

							<li>
								<a href="login.html">
									<i class="icon-double-angle-right"></i>
									Login &amp; Register
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-file-alt"></i>

							<span class="menu-text">
								Other Pages
								<span class="badge badge-primary ">5</span>
							</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="faq.html">
									<i class="icon-double-angle-right"></i>
									FAQ
								</a>
							</li>

							<li>
								<a href="error-404.html">
									<i class="icon-double-angle-right"></i>
									Error 404
								</a>
							</li>

							<li>
								<a href="error-500.html">
									<i class="icon-double-angle-right"></i>
									Error 500
								</a>
							</li>

							<li>
								<a href="grid.html">
									<i class="icon-double-angle-right"></i>
									Grid
								</a>
							</li>

							<li>
								<a href="blank.html">
									<i class="icon-double-angle-right"></i>
									Blank Page
								</a>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

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
						<li class="active">Sản phẩm &amp; Chi tiết sản phẩm</li>
					</ul><!-- .breadcrumb -->

					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- #nav-search -->
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Tables
							<small>
								<i class="icon-double-angle-right"></i>
								Sản Phẩm &amp; Chi tiết sản phẩm
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row-fluid">
						<div class="span12">
							<!-- PAGE CONTENT BEGINS -->

							<div class="row-fluid">
								<div class="span12">
									
								</div><!-- /span -->
							</div><!-- /row -->

							<div class="hr hr-18 dotted hr-double"></div>

							<h4 class="pink">
								<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
								<a href="#modal-table" role="button" class="green" data-toggle="modal"> + Thêm 1 tài khoản mới  </a>
							</h4>

							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid">
								<h3 class="header smaller lighter blue"> Danh sách Tài Khoản</h3>
								<div class="table-header">
									Danh sách sản phẩm
								</div>

								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
												<label>
													<input type="checkbox" class="ace" />
													<span class="lbl"></span>
												</label>
											</th>
											<th>Ảnh đại diện</th>
											<th>Id</th>
											<th>Tài khoản</th>
											<th>Mật khẩu</th>
											<th>Họ tên</th>
											<th>Địa chỉ</th>
											<th>Số ĐT</th>
											<th>Email</th>
											<th>Giới tính</th>
											<th class="hidden-480">Hành động</th>
					
											<th class="hidden-480">Trạng thái</th>

											<th></th>
										</tr>
									</thead>

									<tbody>
										@foreach ($lstaccount as $model)
										<tr>
											<td class="center">
												<label>
													<input type="checkbox" class="ace" />
													<span class="lbl"></span>
												</label>
											</td>
											<td>
											<img src="{{$model->avt}}" width="500px" height="500px">
											</td>

											
											<td>{{$model->id}}</td>
											<td class="hidden-480">{{$model->username}}</td>
											<td class="hidden-phone">{{$model->password}}</td>
											<td class="hidden-480">
											<span class="label label-warning">{{$model->fullname}}</span>
											</td>

											<td class="hidden-480">
												<span class="label label-warning">{{$model->address}}</span>
											</td>
											<td class="hidden-480">
												<span class="label label-warning">{{$model->phone}}</span>
											</td>
											<td class="hidden-480">
												<span class="label label-warning">{{$model->email}}</span>
											</td>
											<td class="hidden-480">
												<span class="label label-warning">{{$model->sex}}</span>
											</td>

											<td>
												<div class="hidden-phone visible-desktop action-buttons">
												<form method="post" action="{{route('account.block' ,['account' => $model])}}">
													@csrf
													@method('PUT')
													<button type="submit">
											
													
													<i class="">Khóa</i>
													
											</button>
													</form>
												<br>

													<button type="button">
													<a class="green" href="{{route('account.edit' ,['account' => $model])}}">
														<i class="icon-pencil bigger-130">Sửa</i>
													</a>
													</button>
													
													<form method="post" action="{{route('account.destroy',['account' => $model])}}">
													@csrf
													@method('DELETE')
														<button type="submit"><i class="icon-trash bigger-130">Xóa</i></button>
													</form>
													
												</div>

												<div class="hidden-desktop visible-phone">
													<div class="inline position-relative">
														<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
															<i class="icon-caret-down icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
															<li>
																<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="icon-zoom-in bigger-120"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="icon-edit bigger-120"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="icon-trash bigger-120"></i>
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</td>
											<td>
												@if($model->status == 0)
												<a href="#">Còn hoạt động</a>
												@else 
												<a href="#">Đã khóa</a>
												@endif

											</td>
										</tr>
									@endforeach
										
									</tbody>
								</table>
							</div>

							<div id="modal-table" class="modal hide fade" tabindex="-1">
								<div class="modal-header no-padding">
									<div class="table-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										Thêm một tài khoản mới
									</div>
								</div>

								<div class="modal-body no-padding">
									<div class="row-fluid">
										
										<form class="form-horizontal" method="post" action="{{route('account.store')}}" enctype="multipart/form-data">
											@csrf
										<div class="control-group">
									<label class="control-label" for="ursename">Tài khoản</label>

									<div class="controls">
										<input type="text" name="tendangnhap" placeholder="Nhập tài khoản" />
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="mota">Mật khẩu</label>

									<div class="controls">
										<input type="text" name="matkhau" placeholder="Nhập mật khẩu" />
										
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"  for="">Tên đầy đủ</label>

									<div class="controls">
										<input  type="text" name="hovaten" placeholder="Nhập họ và tên" />
										&nbsp; &nbsp;
										
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" >Địa chỉ</label>

									<div class="controls">
										<input  type="text" name="diachi" placeholder="Nhập địa chỉ" />
										<div class="help-block" name="soluong"></div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="">Số điện thoại</label>

									<div class="controls">
										
										<input  type="text" name="sodienthoai" placeholder="Nhập số điện thoại" />
										<div class="help-block" id="input-span-slider"></div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="">Email</label>

									<div class="controls">
										
										<input class="text" type="text" name="email" placeholder="Nhập emial" />
										<div class="help-block" id="input-span-slider"></div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="">Giới tính</label>

									<div class="controls">
										
										<input class="text" type="text" name="gioitinh" placeholder=" Nhập giới tính" />
										<div class="help-block" id="input-span-slider"></div>
									</div>
								</div>

								<div class="space-4"></div>

								
								
                                <div class="control-group">
                                <label class="control-label" for="manhinh">Hình ảnh</label>
                                
                                <input type="file" accept="images/*" name="hinh"><br>

                                </div>

								<div class="form-actions">
									<button class="btn btn-info" type="submit">
										<i class="icon-ok bigger-110"></i>
										Submit
									</button>

									&nbsp; &nbsp; &nbsp;
									<button class="btn" type="reset">
										<i class="icon-undo bigger-110"></i>
										Reset
									</button>
								</div>
										</form>
									</div>
								</div>

								<div class="modal-footer">
									<button class="btn btn-small btn-danger pull-left" data-dismiss="modal">
										<i class="icon-remove"></i>
										Close
									</button>

									
								</div>
							</div><!-- PAGE CONTENT ENDS -->
						</div><!-- /.span -->
					</div><!-- /.row-fluid -->
				</div><!-- /.page-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{asset('frontend/js/jquery-2.0.3.min.js')}}'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='{{asset('frontend/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
		</script>
		<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<script src="{{asset('frontend/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.dataTables.bootstrap.js')}}"></script>

		<!-- ace scripts -->

		<script src="{{asset('frontend/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('frontend/js/ace.min.js')}}"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
	</body>
</html>
