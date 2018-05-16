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
                    <option value="KLTNK">Khóa Luận Tốt Nghiệp</option>
                    <option value="DATNK">Đồ Án Tốt Nghiệp</option>
                     <option value="DAMH">Đồ Án Môn Học</option>
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
                    <input type="number" id="form-field-1" name="pm" placeholder="Công nghệ phần mềm" class="col-xs-12 col-sm-10" style="margin-bottom: 5px"/>
                    <input type="number" id="form-field-1" name="httt" placeholder="Hệ thống thông tin" class="col-xs-12 col-sm-10" style="margin-bottom: 5px" />
                    <input type="number" id="form-field-1" name="mtt" placeholder="Mạng máy tính" class="col-xs-12 col-sm-10" />
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
                    <button class="btn" type="reset"  style="border-radius: 5px">
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
                  <select id="simple-colorpicker-1" class="" style="width: 150px;">
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                </div>
              </div>
            </form>
            <div class="row">
              
              <div class="col-sm-12 dataTables_wrapper form-inline no-footer" style="margin-top: 10px">
               <h5><b>Danh sách giảng viên</b></h5>              
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
                    <td><?php echo $item['MABM'] ?></td>
                    <td><input type="number" id="form-field-1" placeholder="Số lượng đề tài" class="col-xs-12 col-sm-10"></td>
                    <td><input type="date" id="form-field-1" placeholder="Nhập mã đợt dăng ký" class="col-xs-12 col-sm-12"></td>
                    <td><input type="checkbox" class="check" name=""></td>
                    <td>
        <div class="hidden-sm hidden-xs action-buttons">
          <a class="edit" data-target="#myModal" data-id="1" data-name="Honda" data-description="Xe Nhật" data-toggle="modal" href="#">
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
                <button class="btn btn-primary" type="button" style="border-radius: 5px">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                &nbsp; &nbsp; &nbsp;
                <button class="btn" type="reset"  style="border-radius: 5px">
                  <i class="ace-icon fa fa-undo bigger-110"></i>
                  Reset
                </button>
              </div>
            </div>
        </div>
        
        <h5><b>Số lượng đề tài</b></h5>
        <table class="table table-bordered" id="datatb">
          <thead>
            <tr>
              <th class="color" scope="col">Mã bộ môn</th>
              <th class="color" scope="col">Tên bộ môn</th>
              <th class="color" scope="col">Số lượng đề tài</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">MMT</th>
              <td>Mạng máy tính</td>
              <td>5</td>
            </tr>
            <tr>
              <th scope="row">CNPM</th>
              <td>Công nghệ phần mềm</td>
              <td>5</td>
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
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách đề tài</b></h5>
              <table class="table table-bordered" id="dttb_dsdt">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã đề tài</th>
                    <th class="color" scope="col">Tên đề tài</th>
                    <th class="color" scope="col">Hội đồng phản Biện</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">DA0001</th>
                    <td>Phân tích hệ thống đăng ký khóa luận cho sinh viên khoa CNTT</td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">HDK05</option>
                          <option value="#d06b64">HDK06</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">DA0004</th>
                    <td>Xây dựng phần mềm quản lý nhà hàng</td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">HDK05</option>
                          <option value="#d06b64">HDK06</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">DA0008</th>
                    <td>Quản lý siêu thị Điện Máy Xanh</td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">HDK05</option>
                          <option value="#d06b64">HDK06</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">DA0009</th>
                    <td>Xây dựng website bán đồ  dùng trẻ em</td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">HDK05</option>
                          <option value="#d06b64">HDK06</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">DA0010</th>
                    <td>Tìm hiểu ReactJS.NET viết ứng dụng minh họa.</td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">HDK05</option>
                          <option value="#d06b64">HDK06</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
            <button class="btn btn-primary" type="button" style="border-radius: 5px;margin-left: 40%">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Lưu
                </button>
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
            <div class="col-sm-5">
              
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách hội đồng</b></h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã Hội Đồng</th>
                    <th class="color" scope="col">Tên Hội Đồng</th>
                    <th class="color" scope="col">Số lượng tv</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">HDK05</th>
                    <td>Phản biện khóa 05</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <th scope="row">HDK06</th>
                    <td>Phản biện khóa 06</td>
                    <td>3</td>
                  </tr>
                </tbody>
              </table>
            
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
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">GV0001</th>
                    <td>Nguyễn Văn Hoàng</td>
                    <td>CNPM</td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                  <tr>
                    <th scope="row">GV0005</th>
                    <td>Nguyễn Thị Thúy</td>
                    <td>MMT</td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                </tbody>
              </table>
              <div>
                <button class="btn btn-success" type="button" style="border-radius: 5px;margin-left: 40%">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Lưu
                </button>
              </div>
            </div>
        </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
              
              <div class="col-sm-12" style="margin-top: 10px">
              <table class="table table-bordered" id="dttbtb">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã Hội Đồng</th>
                    <th class="color" scope="col">Mã Giảng Viên</th>
                    <th class="color" scope="col">Tên Giảng Viên</th>
                    <th class="color" scope="col">Mã Bộ Môn</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">HDK05</th>
                    <th scope="row">GV0005</th>
                    <td>Nguyễn Thị Thúy</td>
                    <td>MMT</td>
                  </tr>
                  <tr>
                    <th scope="row">HDK06</th>
                    <th scope="row">GV0001</th>
                    <td>Nguyễn Văn Hoàng</td>
                    <td>CNPM</td>
                  </tr>
                </tbody>
              </table>
            
            </div>
        </div>
            </div>

            
      </div>
      <div class="tab-pane" id="tab_default_5">
         <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>
                <div class="col-sm-5">
                  <select id="simple-colorpicker-1" class="" style="width: 150px;">
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách đề tài</b></h5>
              <table class="table table-bordered" id="dttb_dsdt">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã đề tài</th>
                    <th class="color" scope="col">Tên đề tài</th>
                    <th class="color" scope="col">Giáo Viên ra đề</th>
                    <th class="color" scope="col">Bộ môn</th>
                    <th class="color" scope="col">Kiểm duyệt</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">DA0001</th>
                    <td>Phân tích hệ thống đăng ký khóa luận cho sinh viên khoa CNTT</td>
                    <td>Nguyễn Thị Thùy Ngân</td>
                    <td>CNPM</td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                  <tr>
                    <th scope="row">DA0004</th>
                    <td>Xây dựng phần mềm quản lý nhà hàng</td>
                    <td>Nguyễn Thị Thùy Trang</td>
                    <td>HTTT</td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                  <tr>
                    <th scope="row">DA0008</th>
                    <td>Quản lý siêu thị Điện Máy Xanh</td>
                    <td>Tô Văn Nhật Phi</td>
                    <td>MMT</td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                  <tr>
                    <th scope="row">DA0009</th>
                    <td>Xây dựng website bán đồ  dùng trẻ em</td>
                    <td>Lê Thanh Hưng</td>
                    <td>CNPM</td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                </tbody>
              </table>
            <button class="btn btn-primary" type="button" style="border-radius: 5px;margin-left: 40%">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Lưu
                </button>
            </div>
          </div>
        </div>
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
        <div class="row">
                 <div class="form-group" >
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Mã Hội Đồng:</strong> </label>

                  <div class="col-sm-9">
                    <input type="text" id="form-field-1" style="margin-bottom: 10px;" placeholder="Nhập mã hội đồng" class="col-xs-12 col-sm-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Mã đợt đăng ký</strong> </label>

                  <div class="col-sm-9">
                    <select class="form-control" style="margin-bottom: 10px;">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Số lượng thành viên</strong></label>

                  <div class="col-sm-9">
                    <input type="number" id="form-field-1" style="margin-bottom: 10px;" placeholder="Số lượng thành viên" class="col-xs-12 col-sm-10">
                  </div>
                </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Làm Lại</button>
        <button type="button" class="btn btn-primary">Tạo</button>
      </div>
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
    $('#datatb').DataTable({
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
  $(document).ready( function () {
    $('#dttbtb').DataTable({
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
</script>