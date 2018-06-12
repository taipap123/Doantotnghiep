
<!-- <div class="header"> -->
		<!-- <div class="top">
					<div class="container" style="background: transparent;">
							<div class="col-md-12 top-middle">
								<ul>
									<li><a href="#"><i>Chào bạn! <?php echo $this->session->userdata('login') ?></i></a></li>
								</ul>
							</div>
					</div>
				</div>
			-->
			<!--top-bar-w3layouts-->
			<div class="container">
				<div class="top-bar-w3layouts">
					<div class="container_header">
						<nav class="navbar navbar-default">
							<div class="navbar-header" style="width: 100%;">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h2><a href="index.html"><img style="padding-top: 10px" src="<?php echo base_url() ?>image/logo.png"></a></h2>
								<h5><a href="#" style="color: red; float: right;
								margin-top: -25px"><i>Chào bạn! <?php echo $this->session->userdata('login') ?></i></a></h5>
							</div>
							<!-- navbar-header -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

								<ul class="nav navbar-nav navbar-right">
							<!-- <li><a href="<?php echo base_url()?>index.php/xuly/ThongBao" class="active">Thông báo</a></li>
							<li><a href="<?php echo base_url()?>index.php/xuly/DangKyDeTai">Đăng ký đề tài</a></li>
							<li><a href="<?php echo base_url()?>index.php/xuly/Baocaotiendo">Báo cáo-tiến độ</a></li>
							<li><a href="<?php echo base_url()?>index.php/xuly/Taikhoan">Tài khoản</a></li>
							
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Liên kết<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="codes.html">Thông tin giảng viên</a></li>
											<li><a href="icons.html">Sinhvien.hufi.edu.vn</a></li>
											<li><a href="codes.html">Fit.hufi.edu.vn</a></li>
											<li><a href="codes.html">Đăng xuất</a></li>
										</ul>
									</li>  -->
									<li></li>
								</ul>
							</div>
						</nav>
					</div>

				</div>
				<!--//top-bar-w3layouts-->
				<!--Slider-->
				<center>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 100%">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="<?php echo base_url() ?>public/images/chucmungnammoi.png" alt="...">
							</div>
							<div class="item">
								<img src="<?php echo base_url() ?>public/images/traobangtotnghiep.png" alt="...">
							</div>
							<div class="item">
								<img style="width: 100%" src="<?php echo base_url() ?>public/images/kyniem35nam.jpg" alt="...">
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="btn-group btn-group-justified" role="group" aria-label="..." style="margin-bottom: 5px; margin-top: 5px">
						<div class="btn-group" role="group">
							<a type="button" class="btn btn-primary active" href="<?php echo base_url()?>index.php/xuly/ThongBao">Thông báo</a>
						</div>
						<div class="btn-group" role="group">
							<a type="button" class="btn btn-primary " href="<?php echo base_url()?>index.php/xuly/DangKyDeTai">Đăng ký đề tài</a>
						</div>
						<div class="btn-group" role="group">
							<a type="button" class="btn btn-primary " href="<?php echo base_url()?>index.php/xuly/Baocaotiendo">Báo cáo-tiến độ</a>
						</div>
						<div class="btn-group" role="group">
							<a href="#" type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Liên kết<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="http://sinhvien.hufi.edu.vn/">Trang web sinh viên</a></li>
								<li><a href="http://fit.hufi.edu.vn/">Website khoa CNTT</a></li>
							</ul>
						</div>
						<div class="btn-group" role="group">
							<a href="#" type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a data-toggle="modal" data-target="#doipass">Đổi mật khẩu</a></li>
								<li><a href="icons.html">Xem Thông Tin Tài Khoản</a></li>
								<li><a  href="<?php echo base_url() ?>index.php/xuly/logout">Đăng xuất</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</center>
				<!-- //Modal1 -->
				<!--//Slider-->
			</div>
		</div>
		<div id="doipass" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Đổi mật khẩu</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger hide"></div>
						<form class="form" role="form" autocomplete="off" action="<?php echo base_url() ?>index.php/xuly/doimatkhau" method="post" id="ttpass">
							<div class="form-group">
								<label for="inputPasswordOld">Mật khẩu cũ</label>
								<input name="pass_old" type="password" class="form-control" id="pass_old" required="">
							</div>
							<div class="form-group">
								<label for="inputPasswordNew">Mật khẩu mới</label>
								<input name="pass_new" type="password" class="form-control" id="pass_new" required="">
								<span class="form-text small text-muted">
									The password must be 8-20 characters, and must <em>not</em> contain spaces.
								</span>
							</div>
							<div class="form-group">
								<label for="inputPasswordNewVerify">Nhập lại mật khẩu mới</label>
								<input name="pass_again" type="password" class="form-control" id="pass_again" required="">
								<span class="form-text small text-muted">
									To confirm, type the new password again.
								</span>
							</div>

						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success btn-lg float-right" id="luu" style="font-size: 12px">Lưu</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$('#luu').click(function(event) {
				var  pass_old = $("#pass_old").val();
				var  pass_new = $("#pass_new").val();
				var  pass_again = $("#pass_again").val();
				$.ajax({
					url: '<?php echo base_url() ?>index.php/xuly/checkpass',
					type: 'POST',
					data: {pass_old: pass_old},
				})
				.done(function(data) {
					$(".alert-danger").empty();
					if (data == "1") {
						if (pass_new == pass_again) {
							$("#ttpass").submit();
						}
						else{
							$(".alert-danger").removeClass('hide');
							$(".alert-danger").text('Mật khẩu không trùng khớp');
						}

					}else{
						$(".alert-danger").removeClass('hide');
						$(".alert-danger").text('Nhập sai mật khẩu');
					}
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
			});
		</script>