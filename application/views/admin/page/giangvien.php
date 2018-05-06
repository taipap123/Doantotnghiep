<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="tabbable-panel" style="margin: 10px">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#tab_default_1" data-toggle="tab">
              Cập nhật đề tài</a>
            </li>
            <li>
              <a href="#tab_default_2" data-toggle="tab">
              Đề tài hướng dẫn- Phản biện </a>
            </li>
            <li>
              <a href="#tab_default_3" data-toggle="tab">
              Điểm của sinh viên</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1">
              <div>
                <h3><strong>Yêu cầu tạo đề tài</strong></h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="color" scope="col">Bộ môn</th>
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
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Mã đề tài</strong></label>
                  <select id="simple-colorpicker-1" class="col-xs-12 col-sm-7" style="margin-left: 10px; width: 479px;">
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Nội dung</strong></label>
                  <div class="col-sm-9">
                    <textarea class="col-xs-12 col-sm-7"  id="form-field-8" placeholder="Nhập nội dung"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Yêu cầu</strong></label>
                  <div class="col-sm-9">
                    <textarea class="col-xs-12 col-sm-7"  id="form-field-8" placeholder="Nhập yêu cầu"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Bộ môn</strong></label>
                  <select id="simple-colorpicker-1" class="col-xs-12 col-sm-7" style="margin-left: 10px; width: 479px;">
                    <option value="#ac725e">Công nghệ phần mềm</option>
                    <option value="#d06b64">Mạng máy tính</option>
                    <option value="#d06b64">Hệ thống thông tin</option>
                  </select>
                </div>
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
              </form>
            </div>
          </div>
            <div class="tab-pane" id="tab_default_2">
              <h3><strong>Danh sách đề tài</strong></h3>
              <table class="table table-bordered">
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
                 <div class="tab-pane" id="tab_default_3">
              <h3><strong>Danh sách đề tài</strong></h3>
              <table class="table table-bordered">
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