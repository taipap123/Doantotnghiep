
<!-- services -->
<div class="w3-agile-services">
		<div class="container">
			<h3 class="title-txt"><span>Đăng ký đề tài</span></h3>
				<div class="row">
				  <div class="col-md-5">
						<div class="thongtinhsv">
					<div class="panel panel-primary" style="min-height: 151px">
					  	<div class="panel-heading">Thông tin tài khoản</div>
						  <div class="panel-body">
						    <div class="row" style="margin-bottom: 10px">
								<div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Mã số SV: </label>
								    <div class="col-sm-8">
								     <?php echo $this->session->userdata('maso') ?>
								    </div>
								  </div>
							</div>
							<div class="row" style="margin-bottom: 10px">
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">Họ và tên: </label>
								    <div class="col-sm-8">
								      <?php echo $this->session->userdata('login') ?>

								    </div>
								  </div>
							</div>

						  </div>
					</div>			
				</div>
				  </div>
				  <div class="col-md-7">
					<div class="dropdown_locdulieu">
					<div class="panel panel-primary">
					  	<div class="panel-heading">Thông tin tùy chọn</div>
						  <div class="panel-body">
						  	<div class="row" style="margin-bottom: 10px">
								<div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Đợt đăng ký</label>
								    <div class="col-sm-9">
								      <select id="simple-colorpicker-1" class="" style="width: 260px;">
											<?php foreach ($dotdangky as $row): 
                 								?>
						                    <option value="<?php echo $row['MADOT']?>"> <?php echo $row['NOIDUNGDT'] ?> </option>
						                    <?php endforeach;?>
					                  	</select>
					                  	<button class="btn btn-primary" style="margin-left: 5%" type="submit">Lọc</button>
								    </div>
								  </div>
							</div>
							<div class="row" style="margin-bottom: 10px">
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">Bộ môn</label>
								    <div class="col-sm-9">
								      <select id="simple-colorpicker-1" class="" style="width: 260px;">
						                    <option value="#ac725e">Công nghệ phần mềm</option>
						                    <option value="#d06b64">Mạng máy tính</option>
						                    <option value="#d06b64">Hệ thống thông tin</option>
					                  	</select>

								    </div>
								  </div>
							</div>
						</div>
					</div>
				</div>
				  </div>
				</div>

				

				

				<form action="" method="POST">
					<table id="tb_detai" class="table table-bordered">
						<div class="radio">
							<tr class="bg-primary">
						    	<th colspan="5"><font color="FFFFFF" size="4">Danh sách đề tài</font></th>
						    	
						    </tr>
						    <tr class="table_background">
						    	<th style="width: 5%">Tìm kiếm</th>
						    	<th style="width: 10%">Mã đề</th>
						    	<th style="width: 35%">Nội dung đề tài</th>
						    	<th style="width: 40%">Yêu cầu đề tài</th>
						    	<th style="width: 10%">Số lượng thành viên</th>
						    </tr>
						    <?php foreach ($detai as $row): 
		                 	?>
						     <tr>
						    	<td><label>
						    			<input type="radio" name="rdb_detai" id="rdb_detai" value="<?php echo $row['MADETAI']?>">
						    		</label>
						    	</td>
						    	<td><?php echo $row['MADETAI'] ?></td>
						    	<td><?php echo $row['TEN_DT'] ?></td>
						    	<td><?php echo $row['YEUCAU'] ?></td>
						    	<td><?php echo $row['SLTV'] ?></td>
						    </tr>
						    <?php endforeach;?>
						</div>
					</table>
					<center>
						 <button class="btn btn-primary" type="submit" name="sub_dangky" style="border-radius: 5px">
		                      <i class="ace-icon fa fa-check bigger-110"></i>
		                      Đăng ký
		                 </button>
		             </center>
             </form>
			 <!-- phân trang -->
			<center>
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>
			</center>

			<table class="table table-bordered">
				<div class="radio">
					<tr class="bg-primary">
				    	<th colspan="5"><font color="FFFFFF" size="4">Thông tin đề tài đăng ký</font></th>
				    	
				    </tr>
				    <tr class="bg-primary">
				    	<th colspan="5"><center><font color="FFFFFF" size="4">Tên đề tài: 
				    		<?php if( (int)$tt_dangky != 0) echo $tt_dangky[0]['ten_dt'] ?>
				    	</font></center></th>
				    </tr>
				    <tr class="table_background">
		
				    	<th>Mã thành viên</th>
				    	<th>Tên thành viên</th>
				    	<th>Ngày đăng ký</th>
				    	<th>Số điện thoại</th>
				    	<th>Email</th>
				    </tr>
				    <?php if( (int)$tt_dangky != 0) 
				    	{
				    		foreach ($tt_dangky as $row): ?>
                 								
					     <tr>
					    	<td><?php echo $row['masv'] ?></td>
					    	<td><?php echo $row['hoten'] ?></td>
					    	<td><?php echo $row['ngaydangky'] ?></td>
					    	<td><?php echo $row['sdt'] ?></td>
					    	<td><?php echo $row['email'] ?></td>

					    </tr>
					<?php endforeach; }?>
				</div>
			</table>
		</div>
	</div>
	<!-- //services -->
	
