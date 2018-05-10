<!-- services -->
<div class="w3-agile-services">
		<div class="container">
			<h3 class="title-txt"><span>Đăng ký đề tài</span></h3>
				<div class="thongtinhsv">
					<div class="panel panel-primary">
					  	<div class="panel-heading">Thông tin tài khoản</div>
						  <div class="panel-body">
						    <table>
									<tr class="masthead">
										<td>Mã số sinh viên: </td>
										<td><?php echo $this->session->userdata('maso') ?></td>
									</tr>
									<tr class="masthead">
										<td>Họ và tên: </td>
										<td colspan="2"><?php echo $this->session->userdata('login') ?></td>
									</tr>
							</table>

						  </div>
					</div>			
				</div>

				<div class="dropdown_locdulieu">
					<div class="panel panel-primary">
					  	<div class="panel-heading">Thông tin tùy chọn</div>
						  <div class="panel-body">
								<table>
								<tr>
									<td>Đợt đăng ký&nbsp&nbsp</td>
									<td>
										<select id="simple-colorpicker-1" class="" style="width: 150px;">
											<?php foreach ($dotdangky as $row): 
                 								?>
						                    <option value="123"> <?php echo $row['NOIDUNGDT'] ?> </option>
						                    <?php endforeach;?>
					                  	</select>
									</td>
									<td>&nbsp&nbspBộ môn&nbsp&nbsp</td>
									<td>
										<select id="simple-colorpicker-1" class="" style="width: 150px;">
						                    <option value="#ac725e">Công nghệ phần mềm</option>
						                    <option value="#d06b64">Mạng máy tính</option>
						                    <option value="#d06b64">Hệ thống thông tin</option>
					                  	</select>
									</td>
									<td>&nbsp&nbsp<button class="btn btn-primary" type="button" style="border-radius: 5px">Lọc dữ liệu
						                </button>
						            </td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			<table class="table table-bordered">
				<div class="radio">
					<tr class="bg-primary">
				    	<th colspan="5"><font color="FFFFFF" size="4">Danh sách đề tài</font></th>
				    	
				    </tr>
				    <tr class="table_background">
				    	<th>Tìm kiếm</th>
				    	<th>Mã đề</th>
				    	<th>Nội dung đề tài</th>
				    	<th>Yêu cầu đề tài
				    	<th>Số lượng thành viên</th>
				    </tr>
				    <?php foreach ($detai as $row): 
                 	?>
				     <tr>
				    	<td><label>
				    			<input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
				    		</label>
				    	</td>
				    	<td><?php echo $row['MADETAI'] ?></td>
				    	<td><?php echo $row['TEN_DT'] ?></td>
				    	<td><?php echo $row['YEUCAU'] ?></td>
				    	<td><?php echo $row['SLTVNHOM'] ?></td>
				    </tr>
				    <?php endforeach;?>
				</div>
			</table>
			<center>
				 <button class="btn btn-primary" type="button" style="border-radius: 5px">
                      <i class="ace-icon fa fa-check bigger-110"></i>
                      Đăng ký
                 </button>
             </center>
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
				    	<th colspan="5"><center><font color="FFFFFF" size="4">Tên đề tài: </font></center></th>
				    </tr>
				    <tr class="table_background">
		
				    	<th>Mã thành viên</th>
				    	<th>Tên thành viên</th>
				    	<th>Ngày đăng ký</th>
				    	<th>Số điện thoại</th>
				    	<th>Email</th>
				    </tr>

				     <tr>
				    	<td>Table cell</td>
				    	<td>Table cell</td>
				    	<td>Table cell</td>
				    	<td>Table cell</td>
				    	<td>Table cell</td>

				    </tr>

				</div>
			</table>
		</div>
	</div>
	<!-- //services -->
	
