<div class="w3-agile-services">
	<div class="container">
		<h3 class="title-txt"><span>Báo cáo tiến độ đề tài</span></h3>
		<div class="thongtindetai">
			<div class="panel panel-primary" style="margin-top: -59px">
				<div class="panel-heading">Thông tin nhóm- đề tài</div>
				<div class="panel-body">
					<table>
						<tr>
							<td width="300">
								Đợt đăng ký&nbsp&nbsp
							</td>
							<td>
								<select id="simple-colorpicker-1" class="" style="width: 216px; height: 28px">
									<option value="#ac725e">Đồ án phân tích thiết kế</option>
									<option value="#d06b64">Đồ án môn học</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="300">
								Mã nhóm&nbsp&nbsp
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td width="300">
								Tên thành viên&nbsp&nbsp
							</td>
							<td>
								<?php foreach ($sinhvien_detai as $sv) {
									echo $sv['HOTEN'] .'<br>' ;
								} ?>
							</td>
						</tr>
						<tr>
							<td width="300">
								Tên đề tài&nbsp&nbsp
							</td>
							<td><?php 
							if(count($sinhvien_detai)>0)
							{
							echo $sinhvien_detai[0]["TEN_DT"] ;
							}
							?></td>
						</tr>
						<tr>
							<td width="300">
								Thời gian thực hiện&nbsp&nbsp
							</td>
							<td>
								<?php
								$datetgbatdau = new DateTime($sinhvien_detai[0]['TGBATDAU']);
								$datetgbaove = new DateTime($sinhvien_detai[0]['TGBAOVE']);
								echo $datetgbatdau->format('d/m/Y').' - '.$datetgbaove->format('d/m/Y') ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="panel panel-primary" style="margin-top: 65px">
			<div class="panel-heading">Thông tin báo cáo</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<div class="radio">
						<tr class="table_background">
							<th>Tuần</th>
							<th>Nội dung- Yêu cầu</th>
							<?php if (substr(string, start)){ ?>
								<th>Nhận file</th>
							<?php }else{ ?>
								<th>Nộp file</th>
							<?php } ?>
							
							<th>Nhận xét đánh giá</th>
							</tr>
							<?php
								$date1=date_create($sinhvien_detai[0]['TGBAOVE']);
								$date2=date_create($sinhvien_detai[0]['TGBATDAU']);
								$diff=date_diff($date2,$date1);
								$datetemp = $diff->format('%a');
								$day = (int)$datetemp;
								for ($i=0; $i < $day/7 ; $i++) { ?>
							<tr>
								<td><?php echo $i+1 ?>
							</td>
							<td><textarea rows="1" style="resize: none; height: auto;"></textarea></td>
							<td><input type="file" name="">
								<a type="button" class="btn btn-primary" style="float: right;" >Nộp bài</a>
							</td>
							<td><textarea rows="1" style="resize: none; height: auto;"></textarea></td>
							
						</tr>
						<?php } ?>
				</div>
			</table>
		</div>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">Thảo luận - Trao đổi</div>
		<div class="panel-body">
			<?php foreach ($messenger as $key) { ?>
			<ul class="media-list" style="margin-bottom: 5px">
				<li class="media">
					<div class="media-left">
						<a href="#">
							<?php 
							if(count($messenger)>0)
							{
							if($key['GIOITINH'] == 1){?> 
							<img class="media-object" src="<?php echo base_url() ?>public/images/avatars/avatar4.png" alt="...">
							<?php } ?>
							<?php if($key['GIOITINH'] == 0){?> 
							<img class="media-object" src="<?php echo base_url() ?>public/images/avatars/avatar3.png" alt="...">
							<?php }} ?>
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading"><?php echo $key['HOTEN'] ?></h4>
						<?php echo $key['NOIDUNG'] ?>
					</div>
				</li>
			</ul>
			<?php } ?>
		</div>
		<form action="<?php echo base_url() ?>index.php/xuly/messenger" method="post">
		<div class="comment_baocao">
			<div class="row">
				<div class="col-lg-6">
					<div class="input-group">
						<input type="hidden" name="MADETAI" value="<?php 
						if(count($sinhvien_detai)>0)
						{
						echo $sinhvien_detai[0]["MADETAI"] ;
						}
						?>">
						<input type="text" name="comment" class="form-control" placeholder="Comment...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">Gửi</button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
			</div>
		</div>
		</form>
	</div>
</div>
</div>

</div>