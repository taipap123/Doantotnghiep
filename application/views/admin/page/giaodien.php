<script type="text/javascript">
    $(document).ready(function() {
        $('#tb').dataTable();  
    });
</script>
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
                <div class="row">
                  <div class="col-md-6">
                     <form class="form-horizontal" role="form">
                    <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Mã đợt đăng ký</strong> </label>

                  <div class="col-sm-9">
                    <input type="text" id="form-field-1" placeholder="Nhập mã đợt dăng ký" class="col-xs-12 col-sm-12" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Nội dung</strong></label>
                  <div class="col-sm-9">
                    <textarea class="col-xs-12 col-sm-12"  rows="6"  id="form-field-8" placeholder="Nhập nội dung"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Thời gian ra đề</strong> </label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" placeholder="Nhập mã đợt dăng ký" class="col-xs-12 col-sm-12" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Thời gian bắt đầu </strong></label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" placeholder="Nhập mã đợt đăng ký" class="col-xs-12 col-sm-12" />
                  </div>
                </div>

              </form>
                  </div>
                  <div class="col-md-6">
                        <form class="form-horizontal" role="form">

                
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Thời gian bảo vệ </strong></label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" placeholder="Nhập mã đợt đăng ký" class="col-xs-12 col-sm-10" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Thời gian phúc khảo </strong></label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" placeholder="Nhập mã đợt đăng ký" class="col-xs-12 col-sm-10" />
                  </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Số lượng thành viên nhóm </strong></label>

                  <div class="col-sm-9">
                    <input type="number" id="form-field-1" placeholder="Số lượng thành viên nhóm" class="col-xs-12 col-sm-10" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Số lượng đề tài </strong></label>

                  <div class="col-sm-9">
                    <input type="number" id="form-field-1" placeholder="Số lượng đề tài" class="col-xs-12 col-sm-10" />
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong>Chấm hội đồng </strong></label>
                  <div class="radio col-sm-9">

                    <label>
                      <input name="form-field-radio" type="radio" class="ace" />
                      <span class="lbl">Có chấm hội đồng</span>
                    </label>
                  </div>

                  <div class="radio col-sm-9">
                    <label>
                      <input name="form-field-radio" type="radio" class="ace" />
                      <span class="lbl"> Không chấm hội đồng</span>
                    </label>
                  </div>
                </div>
                
              </form>
                  </div>
                </div>
              <div class="clearfix form-actions">
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
            <!-- hết tab 1 -->
            <!-- tab2 -->

            <div class="tab-pane" id="tab_default_2">
             <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>

                <div class="col-sm-7">
                  <select id="simple-colorpicker-1" class="" style="width: 150px;>
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách giảng viên</b></h5>
               
              <table id="tb" class="table table-bordered">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã giảng viên</th>
                    <th class="color" scope="col">Tên Giảng viên</th>
                    <th class="color" scope="col">Bộ môn</th>
                    <th class="color" scope="col">Số Lượng Đề Tài</th>
                     <th class="color" scope="col">Ngày nộp</th>
                    <th class="color" scope="col">Ra đề</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nguyễn Văn A</td>
                    <td>Mạng máy tính</td>
                    <td><input type="number" id="form-field-1" placeholder="Số lượng đề tài" class="col-xs-12 col-sm-10"></td>
                    <td><input type="date" id="form-field-1" placeholder="Nhập mã đợt dăng ký" class="col-xs-12 col-sm-12"></td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Nguyễn Thị B</td>
                    <td>Công nghệ phần mềm</td>
                    <td><input type="number" id="form-field-1" placeholder="Số lượng đề tài" class="col-xs-12 col-sm-10"></td>
                    <td><input type="date" id="form-field-1" placeholder="Nhập mã đợt dăng ký" class="col-xs-12 col-sm-12"></td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
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
        <h5><b>Thông tin yêu cầu</b></h5>
        <table class="table table-bordered">
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
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã đề tài</th>
                    <th class="color" scope="col">Tên đề tài</th>
                    <th class="color" scope="col">Giáo viên ra đề</th>
                    <th class="color" scope="col">Giáo viên hướng dẫn</th>
                    <th class="color" scope="col">Giáo viên Phản biện</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td>Công nghệ phần mềm</td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">Tô văn Nhật Phi</option>
                          <option value="#d06b64">Phan Thành Nhân</option>
                      </select>
                    </td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">Tô văn Nhật Phi</option>
                          <option value="#d06b64">Phan Thành Nhân</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td>Công nghệ phần mềm</td>
                    <td>
                      <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">Tô văn Nhật Phi</option>
                          <option value="#d06b64">Phan Thành Nhân</option>
                      </select>
                   </td>
                    <td>
                      <select id="simple-colorpicker-1" class="" style="width: 100%">
                        <option value="#ac725e">Tô văn Nhật Phi</option>
                        <option value="#d06b64">Phan Thành Nhân</option>
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

      <div class="row">
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách phân công</b></h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã đề tài</th>
                    <th class="color" scope="col">Tên đề tài</th>
                    <th class="color" scope="col">Giáo viên ra đề</th>
                    <th class="color" scope="col">Giáo viên hướng dẫn</th>
                    <th class="color" scope="col">Giáo viên phản biện</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td>Công nghệ phần mềm</td>
                    <td> Phan Thành Nhân</td>
                    <td>Tô văn Nhật Phi</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td>Công nghệ phần mềm</td>
                    <td>Tô văn Nhật Phi</td>
                    <td>Phan Thành Nhân</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>

      </div>
       <!-- het tag 3 -->
       <!-- tab4 -->
       <div class="tab-pane" id="tab_default_4">
         <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>
                <div class="col-sm-5">
                  <select id="simple-colorpicker-1" class="" style="width: 150px;">
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                </div>
                <div>
                  <button class="btn btn-warning dropdown-toggle" data-target="#myModal" data-toggle="modal" type="button" style="border-radius: 5px;margin-left: 62%; margin-top: -38px">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  Tạo hội đồng
                </button>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-12" style="margin-top: 10px">
               <h5><b>Danh sách Giảng viên</b></h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã Giảng viên</th>
                    <th class="color" scope="col">Tên Giảng viên</th>
                    <th class="color" scope="col">Mã bộ môn</th>
                    <th class="color" scope="col">Bộ môn</th>
                    <th class="color" scope="col">Mã Hội Đồng</th>
                    <th class="color" scope="col">Chức vụ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">GV0001</th>
                    <td>Vũ Hoàng Long</td>
                    <td>CNPM</td>
                    <td>Công nghệ phần mềm</td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">HDK05</option>
                          <option value="#d06b64">HDK06</option>
                      </select>
                    </td>
                    <td>
                        <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">trưởng</option>
                          <option value="#d06b64">Phó</option>
                          <option value="#d06b64">Thành viên</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">GV0002</th>
                    <td>Vũ Ái VY</td>
                    <td>CNPM</td>
                    <td>Công nghệ phần mềm</td>
                    <td>
                      <select id="simple-colorpicker-1" class="" style="width: 100%">
                          <option value="#ac725e">HDK05</option>
                          <option value="#d06b64">HDK05</option>
                      </select>
                   </td>
                    <td>
                      <select id="simple-colorpicker-1" class="" style="width: 100%">
                        <option value="#ac725e">Trưởng</option>
                        <option value="#d06b64"> Phó</option>
                        <option value="#d06b64">Thành viên</option>
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