<!DOCTYPE html>
<html lang="en">
<div class="modal-body no-padding">
									<div class="row-fluid">
										
										<form class="form-horizontal" method="post" action="{{route('login')}}" enctype="multipart/form-data">
											@csrf
										<div class="control-group">
									<label class="control-label" for="">USERNAME</label>

									<div class="controls">
										<input type="text" name="username" placeholder="Nhập tên loại sản phẩm" />
									</div>
                                    div class="control-group">
									<label class="control-label" for="">Password</label>

									<div class="controls">
										<input type="password" name="password" placeholder="Nhập tên loại sản phẩm" />
									</div>
                                    <div class="form-actions">
									<button class="btn btn-info" type="submit">
										<i class="icon-ok bigger-110"></i>
										Submit
									</button>
                                    </div>
</form>
								</div>
</html>