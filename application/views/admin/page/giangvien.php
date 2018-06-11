<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="tabbable-panel" style="margin: 10px">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="<?php echo isset($loadpage1)? $loadpage1 : ''?>">
              <a href="#tab_default_1" data-toggle="tab">
              Cập nhật đề tài</a>
            </li>
            <li class="<?php echo isset($loadpage2)? $loadpage2 : ''?>">
              <a href="#tab_default_2" data-toggle="tab">
              Đề tài hướng dẫn- Phản biện </a>
            </li>
            <li class="<?php echo isset($loadpage3)? $loadpage3 : ''?>">
              <a href="#tab_default_3" data-toggle="tab">
              Điểm của sinh viên</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane <?php echo isset($loadpage1)? $loadpage1 : ''?>" id="tab_default_1">
              <form method="post" action="<?php echo base_url() ?>index.php/xuly_ad/setMaDotDK_gv_1" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>
                  <div class="col-sm-7">

                        <select id="simple-colorpicker-1" class="" style="width: 200px;" name="maDotDK">

                          <?php foreach ($madotdk as $row): ?>
                          
                           <option value="<?php echo $row['MADOT'] ?>" <?php if($row['MADOT'] == $this->session->userdata('madotdk')) echo 'selected' ?>><?php echo $row['NOIDUNGDT'] ?></option>

                          <?php endforeach; ?>

                        </select>
                        <button class="btn btn-primary" type="submit" style="border-radius: 5px">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Submit
                      </button>

                  </div>
                </div>
              </form>
             <div class="row">
              <div class="col-sm-12" style="margin-top: 10px">
                <h3><strong>Yêu cầu tạo đề tài</strong></h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="color" scope="col" >Bộ môn</th>
                      <th class="color" scope="col">Số lần tạo đề tài</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Mạng máy tính</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Công nghệ phần mềm</td>
                      <td>1</td>
                    </tr>
                     <tr>
                      <td>Hệ Thống Thông Tin</td>
                      <td>1</td>
                    </tr>
                  </tbody>
                </table>

              <h3><strong>Cập nhật đề tài</strong></h3>
             
              <form class="form-horizontal" role="form" action="<?php echo base_url() ?>index.php/xuly_ad/taoDeTai_ThuCong" method="POST">
                
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Nội dung</strong></label>
                  <div class="col-sm-9">
                    <textarea class="col-xs-12 col-sm-7"  id="form-field-8" placeholder="Nhập nội dung" name="noidungdt" ></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Yêu cầu</strong></label>
                  <div class="col-sm-9">
                    <textarea class="col-xs-12 col-sm-7"  id="form-field-8" placeholder="Nhập yêu cầu" name="yeucaudt"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Bộ môn</strong></label>
                  <select name="mabomon" id="simple-colorpicker-1" class="col-xs-12 col-sm-7" style="margin-left: 10px; width: 479px;">
                    <?php foreach ($ds_bomon as $value) {
                     
                     ?>
                      <option value="<?php echo $value['MABM'] ?>"><?php echo $value['TENBM'] ?></option>
                      
                    <?php  } ?>
                  </select>
                </div>
                <div class="col-md-offset-3 col-md-9">
                  <button class="btn btn-primary" type="submit" style="border-radius: 5px">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Submit
                  </button>

                  &nbsp; &nbsp; &nbsp;
                  <button class="btn" type="reset"  style="border-radius: 5px">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                  </button>
                </div>
              </form>

              <form action="<?php echo base_url() ?>index.php/xuly_ad/taoDeTai_file" method="POST" enctype="multipart/form-data">
                <div class="col-md-offset-3 col-md-9">
                  </br>
                  <h3><strong>Nhập dữ liệu từ file</strong></h3></br>
                  <p><font size="5"><i><a href="<?php echo base_url() ?>index.php/xuly_ad/xuatFileMau">File nhập liệu mẫu</a></i></font></p></br>

                  <input name="filepath" type="file">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Chọn file
                 
                  &nbsp; &nbsp; &nbsp;
                  <button class="btn btn-primary" type="submit"  style="border-radius: 5px">
                    Cập nhật
                  </button>
                </div>
              </form>

              </div>
            </div>
          </div>

          <!---tab 2 -->
            <div class="tab-pane <?php echo isset($loadpage1)? $loadpage1 : ''?>" id="tab_default_2">
              <h3><strong>Danh sách đề tài</strong></h3>
              <table class="table table-bordered" id="datatable">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã đề tài</th>
                    <th class="color" scope="col">Tên đề tài</th>
                    <th class="color" scope="col">Bộ môn</th>
                    <th class="color" scope="col">GV hướng dẫn</th>
                    <th class="color" scope="col">GV phản biện</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nguyễn Văn A</td>
                    <td>Mạng máy tính</td>
                    <td><input type="checkbox" name=""></td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Nguyễn Thị B</td>
                    <td>Công nghệ phần mềm</td>
                    <td><input type="checkbox" name=""></td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!--tab 3-->
            <div class="tab-pane <?php echo isset($loadpage1)? $loadpage1 : ''?>" id="tab_default_3">
              <h3><strong>Danh sách đề tài</strong></h3>
              <table class="table table-bordered" id="datatable_diem">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã đề tài</th>
                    <th class="color" scope="col">Tên đề tài</th>
                    <th class="color" scope="col">Mã Nhóm</th>
                    <th class="color" scope="col">Mã sinh viên</th>
                    <th class="color" scope="col">Tên sinh viên</th>
                    <th class="color" scope="col">Điểm GV-HD</th>
                    <th class="color" scope="col">Điểm GVPB</th>
                    <th class="color" scope="col">Điểm PK</th>
                    <th class="color" scope="col">Tổng điểm</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">DA0001</th>
                    <td>Phân tích hệ thống đăng ký khóa luận cho sinh viên...</td>
                    <td>N0001</td>
                    <td>2001140096</td>
                    <td>Nguyễn Văn A</td>
                    <td>8</td>
                    <td>8</td>
                    <td>0</td>
                    <td>8</td>
                  </tr>
                  <tr>
                    <th scope="row">DA0001</th>
                    <td>Phân tích hệ thống đăng ký khóa luận cho sinh viên...</td>
                    <td>N0001</td>
                    <td>2001140096</td>
                    <td>Nguyễn Văn b</td>
                    <td>8</td>
                    <td>9</td>
                    <td>0</td>
                    <td>8.5</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $(document).ready( function () {
    $('#datatable_diem').DataTable({
       "bSort": false
    });
} );
</script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#datatable').DataTable({
       "bSort": false
    });
} );
</script>

