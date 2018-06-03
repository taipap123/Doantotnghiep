<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="tabbable-panel" style="margin: 10px">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#tab_default_1" data-toggle="tab">
              Tạo đợt đăng ký</a>
            </li>
            <li>
              <a href="#tab_default_2" data-toggle="tab">
              Yêu cầu tạo đề </a>
            </li>
            <li>
              <a href="#tab_default_3" data-toggle="tab">
              Phân công hội đồng phản biện </a>
            </li>
            <li>
              <a href="#tab_default_4" data-toggle="tab">
              Thành lập hội đồng</a>
            </li>
            <li>
              <a href="#tab_default_5" data-toggle="tab">
              Kiểm duyệt đề tài</a>
            </li>
             <li>
              <a href="#tab_default_6" data-toggle="tab">
              Thông tin đăng ký đề tài</a>
            </li>
            <li>
              <a href="#tab_default_7" data-toggle="tab">
              Cập Nhật điểm SV</a>
            </li>
          </ul>
          <div class="tab-content">
            <!-- tab1 -->
            
            <div class="tab-pane active" id="tab_default_1">
               <form action="<?php echo base_url() ?>index.php/xuly_ad/insert_madotdk" method="post" class="form-horizontal" role="form"> 
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Loại đợt đăng ký</strong> </label>
                  <div class="col-sm-9">
                     <select id="simple-colorpicker-1" class="" style="width: 250px;"  onchange="testcombo(this)">
                      <option value="" disabled="true" selected="true"">--Chọn loại đăng ký--</option>
                    <option value="KLTN">Khóa Luận Tốt Nghiệp</option>
                    <option value="DATN">Đồ Án Tốt Nghiệp</option>
                     <option value="DAMH">Đồ Án Môn Học</option>
                     <option value="NCKH">Nghiên Cứu Khoa Học</option>
                  </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Mã đợt đăng ký </strong></label>

                  <div class="col-sm-9">
                    <input type="text" id="form-field-1" name="madk" placeholder="Nhập mã đợt đăng ký" class="madkk col-xs-12 col-sm-12" readonly="true" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Nội dung</strong></label>
                  <div class="col-sm-9">
                    <textarea class="col-xs-12 col-sm-12" name="nddk" rows="6"  id="form-field-8" placeholder="Nhập nội dung"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Thời gian ra đề</strong> </label>
                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" name="tgrade" class="col-xs-12 col-sm-12" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Thời gian bắt đầu </strong></label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" name="tgbatdau" class="col-xs-12 col-sm-12" />
                  </div>
                </div>
                  </div>
                  <div class="col-md-6">
                             
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Thời gian bảo vệ </strong></label>
                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" name="tgbaove" class="col-xs-12 col-sm-10" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Thời gian phúc khảo </strong></label>
                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" name="tgphuckhao" class="col-xs-12 col-sm-10" />
                  </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Số lượng thành viên nhóm </strong></label>
                  <div class="col-sm-9">
                    <input type="number" id="form-field-1" name="sltv" class="col-xs-12 col-sm-10" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Số lượng đề tài </strong></label>

                  <div class="col-sm-9">
                    <?php foreach ($ds_bomon as  $value) {
                    ?>

                        <input type="number" id="form-field-1" name="<?php echo $value['MABM'] ?>" placeholder="<?php echo $value['TENBM'] ?>" class="col-xs-12 col-sm-10" style="margin-bottom: 5px"/>

                    <?php } ?>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong>Chấm hội đồng </strong></label>
                  <div class="radio col-sm-9">
                    <label>
                      <input name="hd" value="1" type="radio" class="ace" />
                      <span class="lbl">Có chấm hội đồng</span>
                    </label>
                  </div>
                  <div class="radio col-sm-9">
                    <label>
                      <input name="hd" value="0" type="radio" class="ace" />
                      <span class="lbl"> Không chấm hội đồng</span>
                    </label>
                  </div>
                </div>              
              
                  </div>
                </div>
              <div class="clearfix form-actions">
                  <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-primary" type="submit" style="border-radius: 5px">
                      <i class="ace-icon fa fa-check bigger-110"></i>
                      Submit
                    </button>
                    &nbsp; &nbsp; &nbsp;
                    <button class="btn test" type="reset" style="border-radius: 5px">
                      <i class="ace-icon fa fa-undo bigger-110"></i>
                      Reset
                    </button>
                  </div>
                </div>
            </form>
            </div>
            <!-- hết tab 1 -->
            <!-- tab2 -->
            <div class="tab-pane" id="tab_default_2">
             <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>
                <div class="col-sm-7">
                  <select id="simple-colorpicker-1" class="" style="width: 200px;" onchange="filter_data(this)">

                    <?php foreach ($madotdk as $row): ?>
                    
                     <option value="<?php echo $row['MADOT'] ?>"><?php echo $row['NOIDUNGDT'] ?></option>

                    <?php endforeach; ?>

                  </select>
                </div>
              </div>
            </form>
            <div class="row">
              
              <div class="col-sm-12 dataTables_wrapper form-inline no-footer" style="margin-top: 10px">
               <h5><b>Danh sách giảng viên</b></h5>


               <form action="<?php echo base_url() ?>index.php/xuly_ad/phanCongGiangVien" method="POST">             
                  <table id="datatable" class="table table-striped table-bordered table-hover dataTable no-footer">
                    <thead>
                      <tr>
                        <th class="color" scope="col">Mã giảng viên</th>
                        <th class="color" scope="col">Tên Giảng viên</th>
                        <th class="color" scope="col">Bộ môn</th>
                        <th class="color" scope="col">Số Lượng Đề Tài</th>
                         <th class="color" scope="col">Ngày nộp</th>
                        <th class="color" scope="col"><input type="checkbox" id="checkAll" >Ra đề</th>
                         <th class="color" scope="col">Xử Lý</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($allgv as $item) { ?>
                      <tr>
                        <th scope="row"><?php echo $item['MAGV'] ?></th>
                        <td><?php echo $item['TENGV'] ?></td>

                        <td><input type="text" id="form-field-1" class="col-xs-12 col-sm-10" value="<?php echo $item['MABM'] ?>" name="txtbm<?php echo $item['MAGV'] ?>" readonly></td>

                        <td><input type="number" id="form-field-1" placeholder="Số lượng đề tài" class="col-xs-12 col-sm-10" name="txt<?php echo $item['MAGV'] ?>"></td>

                        <td><input type="date" id="form-field-1" placeholder="" class="col-xs-12 col-sm-12"
                          name="date<?php echo $item['MAGV'] ?>"></td>

                        <td><input type="checkbox" class="check" name="ckbgiangvien[]" value="<?php echo $item['MAGV'] ?>"></td>
                        <td>
                          <div class="hidden-sm hidden-xs action-buttons">
                            <a class="edit" data-target="#myModal" data-id="1" data-name="" data-description="" data-toggle="modal" href="#">
                              <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>
                            <a class="red" href="#" onclick="delete_hangxe('1','1')">
                              <i class="ace-icon fa fa-trash-o bigger-130"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                       <?php  } ?>
                    </tbody>
                  </table>
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
            </div>
        </div>        
        <h5><b>Số lượng đề tài</b></h5>
        <table class="table table-bordered" >
          <thead>
            <tr>
              <th class="color" scope="col">Mã bộ môn</th>
              <th class="color" scope="col">Tên bộ môn</th>
              <th class="color" scope="col">Số lượng đề tài</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php echo $ds_yeucaude[0]['mabm'] ?></th>
              <td><?php echo $ds_yeucaude[0]['tenbm']?></td>
              <td><?php echo $slde_cnpm ?></td>
            </tr>
            <tr>
              <th scope="row"><?php echo $ds_yeucaude[1]['mabm'] ?></th>
              <td><?php echo $ds_yeucaude[1]['tenbm']?></td>
              <td><?php echo $slde_mmt ?></td>
            </tr>
            <tr>
              <th scope="row"><?php echo $ds_yeucaude[2]['mabm'] ?></th>
              <td><?php echo $ds_yeucaude[2]['tenbm']?></td>
              <td><?php echo $slde_httt ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- tab3 -->
      <div class="tab-pane" id="tab_default_3">
         <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>
                <div class="col-sm-5">
                  <select id="simple-colorpicker-1" class="" style="width: 150px;">
                    <?php foreach ($madotdk as $row): ?>
                     <option value="<?php echo $row['MADOT'] ?>"><?php echo $row['NOIDUNGDT'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách đề tài</b></h5>
               <form action="<?php echo base_url() ?>index.php/xuly_ad/add_HoiDong_Detai" method="POST">
                  <table class="table table-bordered" id="dttb_dsdt">
                    <thead>
                      <tr>
                        <th class="color" scope="col">Mã đề tài</th>
                        <th class="color" scope="col">Tên đề tài</th>
                        <th class="color" scope="col">Hội đồng phản Biện</th>
                        <th class="color" scope="col">Giảng viên phản biện</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($ds_detai as $row) {
                      ?>
                      <tr>
                        <th scope="row"><?php echo $row['madetai'] ?></th>
                        <td><?php echo $row['ten_dt'] ?></td>
                        <td>
                            <input type="checkbox" name="ckbhoidong_detai[]" value="<?php echo $row['madetai'] ?>">
                        </td>
                        <td>
                          <select id="simple-colorpicker-1" class="" style="width: 150px;">
                            <?php foreach ($allgv as $value): ?>                           
                              <option value="<?php echo $value['MAGV'] ?>" <?php if($row['magv']==$value['MAGV']) echo 'selected' ?>><?php echo $value['TENGV'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                <button class="btn btn-success" data-toggle="modal" data-target="#phanconghd" type="button" style="border-radius: 5px;margin-left: 40%">
                      <i class="ace-icon fa fa-check bigger-110"></i>
                     Phân công hội đồng
                    </button>
                    </div>
                  </div>
                </div>
        <!-- Button trigger modal -->

        <!-- Modal -->
            <div class="modal fade" id="phanconghd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Hội Đồng Phản Biện</h4>
                  </div>
                  <div class="modal-body">
                      <select class="form-control" name="mahd">
                        <option disabled="true" selected>--Chọn Hội Đồng--</option>
                        <?php foreach ($ds_hoidong as $value) {  
                        ?>
                            <option value="<?php echo $value['MAHD'] ?>"><?php echo $value['NoiDung']; ?></option>
                        <?php } ?>
                      </select>
                      </br>Ngày phản biện: <input type="date" id="form-field-1"  class="col-xs-12 col-sm-12" name="tgcham">
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                  </div>
              </form>

            </div>
          </div>
        </div>

       <!-- het tag 3 -->
       <!-- tab4 -->
       <div class="tab-pane" id="tab_default_4">
         <form class="form-horizontal" role="form">
              <div class="form-group">
                <div>
                  <button class="btn btn-warning dropdown-toggle" data-target="#myModal" data-toggle="modal" type="button" style="border-radius: 5px;margin-left: 87%; margin-top: -2px">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  Tạo hội đồng
                </button>
                </div>
              </div>
            </form>
            <div class="row">
            <form action="<?php echo base_url() ?>index.php/xuly_ad/add_thanhvienHD" method="POST">
              <div class="col-sm-5">
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách hội đồng</b></h5>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="color" scope="col">Mã Hội Đồng</th>
                        <th class="color" scope="col">Tên Hội Đồng</th>
                        <th class="color" scope="col">Số lượng tv</th>
                        <th class="color" scope="col">Xử lý</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($ds_hoidong as $value) {
                        
                       ?>
                      <tr>
                        <th scope="row"><input type="radio" name="rdbmahd" value="<?php echo $value['MAHD'] ?>"><?php echo $value['MAHD'] ?></th>
                        <td><?php echo $value['NoiDung'] ?></td>
                        <td><?php echo $value['SLTHANHVIEN'] ?></td>
                        <td>
                          <div class="hidden-sm hidden-xs action-buttons">
                            <a class="edit" data-target="#myModal" data-id="1" data-name="" data-description="" data-toggle="modal" href="#">
                              <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>
                            <a class="red" href="#" onclick="">
                              <i class="ace-icon fa fa-trash-o bigger-130"></i>
                            </a>
                          </div>
                        </td>
                      </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                  <button class="btn btn-primary" data-toggle="modal" data-target="" type="button" style="border-radius: 5px;margin-left: 40%">
                      <i class=" glyphicon glyphicon-paste"></i>
                     Xuất danh sách 
                    </button>
                </div>
            </div>
            <div class="col-sm-7">
                  <div class="col-sm-12" style="margin-top: 10px">
                   <h5><b>Danh sách Giảng viên</b></h5>
                  <table class="table table-bordered"  id="dttb_dsgv">
                    <thead>
                      <tr>
                        <th class="color" scope="col">Mã giảng viên</th>
                        <th class="color" scope="col">Tên Giảng viên</th>
                        <th class="color" scope="col"> Mã Bộ môn</th>
                        <th class="color" scope="col">Tham gia</th>
                        <th class="color" scope="col">Chức vụ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($allgv as $item) { ?>
                          <tr>
                            <th scope="row"><?php echo $item['MAGV'] ?></th>
                            <td><?php echo $item['TENGV'] ?></td>
                            <td><?php echo $item['MABM'] ?></td>
                            <td><input type="checkbox" name="ckbthamgia[]" value="<?php echo $item['MAGV']?>"></td>
                            <td><select name="chucvu<?php echo $item['MAGV']?>">
                                  <option>
                                    Trưởng nhóm
                                  </option>
                                  <option selected>
                                    Thành viên
                                  </option>
                                </select>
                          </td>
                          </tr>
                      <?php }?>
                    </tbody>
                  </table>
                  <div>
                    <button class="btn btn-success" type="submit" style="border-radius: 5px;margin-left: 40%">
                      <i class="ace-icon fa fa-check bigger-110"></i>
                      Lưu
                    </button>
                  </div>
                </div>
            </div>
        </form>
            </div>
            <div class="row">
              <div class="col-sm-12">
              
              <div class="col-sm-12" style="margin-top: 10px">
                <?php
                  for($i = 0; $i < count($ds_gv_hd); $i++)
                  {
                 ?>
              <table class="table table-bordered" width="100%">
                <thead>
                  <tr>
                    <th class="color" scope="col" colspan="5">Mã Hội Đồng: <?php echo $ds_gv_hd[$i][0] ?> Tên: <?php echo $ds_gv_hd[$i][1] ?></th>
                  </tr>
                  <tr>
                    <th class="color" scope="col">Mã Giảng Viên</th>
                    <th class="color" scope="col">Tên Giảng Viên</th>
                    <th class="color" scope="col">Mã Bộ Môn</th>
                    <th class="color" scope="col">Chức vụ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($j = 0; $j < count($ds_gv_hd[$i][2]); $j++)
                    {
                   ?>
                      <tr>
                        <th scope="row"><?php echo $ds_gv_hd[$i][2][$j]['MAGV'] ?></th>
                        <td><?php echo $ds_gv_hd[$i][2][$j]['TENGV'] ?></td>
                        <td><?php echo $ds_gv_hd[$i][2][$j]['MABM'] ?></td>
                        <td><?php echo $ds_gv_hd[$i][2][$j]['CHUCVU'] ?></td>
                      </tr>
                  <?php } ?>
                </tbody>
              </table>
              <?php } ?>
            </div>
        </div>
      </div>

      </div>
        <!-- hết tab 4 -->  
      <div class="tab-pane" id="tab_default_5">
         <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>
                <div class="col-sm-5">
                  <select id="simple-colorpicker-1" class="" style="width: 150px;">

                    <?php foreach ($madotdk as $row): ?>
                    
                      <option value="<?php echo $row['MADOT'] ?>"><?php echo $row['NOIDUNGDT'] ?></option>

                    <?php endforeach; ?>
                  </select>

                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách đề tài</b></h5>
               <form action="<?php echo base_url() ?>index.php/xuly_ad/update_kiemduyet" method="POST">
                  <table class="table table-bordered" id="dttb_dsdt">
                    <thead>
                      <tr>
                        <th class="color" scope="col">Mã đề tài</th>
                        <th class="color" scope="col">Tên đề tài</th>
                        <th class="color" scope="col">Giáo Viên ra đề</th>
                        <th class="color" scope="col">Giáo Viên hướng dẫn</th>
                        <th class="color" scope="col">Bộ môn</th>
                        <th class="color" scope="col">Kiểm duyệt</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($ds_detai as $row) {
                       ?>

                        <tr>
                          <th scope="row"><?php echo $row['madetai'] ?></th>
                          <td><?php echo $row['ten_dt'] ?></td>
                          <td><?php echo $row['tengv'] ?></td>
                          <td><?php echo $row['tenbm'] ?></td>
                          <td><input type="checkbox" name="kiemduyet[]" value="<?php echo $row['madetai'] ?>"
                           <?php if($row['kiemduyet']=='1') echo 'checked="checked"' ?> > </td>
                        </tr>

                      <?php } ?>

                    </tbody>
                  </table>
            
            <button class="btn btn-success" type="submit" style="border-radius: 5px;margin-left: 40%">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Lưu
                </button>
            </form>

            </div>
          </div>
        </div>

        <!-- hết tab 5 -->

        <div class="tab-pane" id="tab_default_6">
              <table id="datatable" class="table table-bordered">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã đề tài</th>
                    <th class="color" scope="col">Tên đề tài</th>
                    <th class="color" scope="col">Thông tin nhóm</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  for($i = 0 ; $i < count($ds_svdangky) ; $i++) 
                  {
                   ?>

                    <tr>
                      <td scope="row"><?php echo $ds_svdangky[$i][0]?></td>
                      <td scope="row"><?php echo $ds_svdangky[$i][1]?></td>
                     
                      <td scope="row">
                        <table width=100% height = 100%>
                          <?php for ($j=0; $j < count($ds_svdangky[$i][2]); $j++) 
                              {  ?>
                          <tr>
                            <td>
                                <?php echo $ds_svdangky[$i][2][$j]['masv'] ?>
                            </td>
                            <td>
                                <?php echo $ds_svdangky[$i][2][$j]['hoten'] ?>
                            </td>
                          </tr>
                           <?php } ?>
                          
                        </table>
        
                        </td>
                    </tr>
                   
                  <?php } ?>

                </tbody>
              </table>
        </div>
        <!-- hết tab 6 -->
             <div class="tab-pane" id="tab_default_7">
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
            <!-- hết tab7 -->
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tạo Hội Đồng</h4>
      </div>
      <div class="modal-body">

         <form action="<?php echo base_url() ?>index.php/xuly_ad/taoHoiDong" method="POST">
            <div class="row">
             
                     <div class="form-group" >
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Tên hội đồng:</strong></label>

                      <div class="col-sm-9">
                        <input type="text" id="form-field-1" style="margin-bottom: 10px;" placeholder="Nhập tên hội đồng" class="col-xs-12 col-sm-12" name="tenhoidong">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Mã đợt đăng ký</strong> </label>

                      <div class="col-sm-9">
                        <select class="form-control" style="margin-bottom: 10px;" name="madot">

                          <?php foreach ($madotdk as $row): ?>
                        
                         <option value="<?php echo $row['MADOT'] ?>"><?php echo $row['NOIDUNGDT'] ?></option>

                        <?php endforeach; ?>

                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Số lượng thành viên</strong></label>

                      <div class="col-sm-9">
                        <input type="number" id="form-field-1" style="margin-bottom: 10px;" placeholder="Số lượng thành viên" class="col-xs-12 col-sm-10" name="slthanhvien">
                      </div>
                    </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Làm Lại</button>
            <button type="submit" class="btn btn-primary">Tạo</button>
          </div>
      </form>

    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready( function () {
    $('#datatable').DataTable({
       "bSort": false
    });
} );
</script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#dttb_dsdt').DataTable({
       "bSort": false
    });
} );
</script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#dttb_dspc').DataTable({
       "bSort": false
    });
} );
</script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#dttb_dsgv').DataTable({
       "bSort": false
    });
} );
</script>

<script type="text/javascript">
  $("#checkAll").click(function () {
    $(".check").prop('checked', $(this).prop('checked'));
});
</script>

<script type="text/javascript">
 function testcombo(obj){
    var id = obj.value;
      $.ajax({
        url: '<?php echo base_url()?>index.php/xuly_ad/create_madot',
        type: 'POST',
        dataType: 'JSON',
        data: {madk : id},
      })
      .done(function(data) {
                 $(".madkk").val(data);
              })
      .fail(function() {
        alert('thatbai');
        console.log("error");
      });
    }

 function filter_data(obj)
 {
  var id = obj.value;
      $.ajax({
        url: '<?php echo base_url()?>index.php/xuly_ad/filter_data',
        type: 'POST',
        dataType: 'JSON',
        data: {madot : id},
      })
 }
</script>