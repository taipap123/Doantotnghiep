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
              <a href="#tab_default_3" data-toggle="tab">
              Thành lập hội đồng</a>
            </li>
            <li>
              <a href="#tab_default_3" data-toggle="tab">
              Kiểm duyệt đề tài</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1">

              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Mã đợt đăng ký</strong> </label>

                  <div class="col-sm-9">
                    <input type="text" id="form-field-1" placeholder="Nhập mã đợt dăng ký" class="col-xs-12 col-sm-7" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Nội dung</strong></label>
                  <div class="col-sm-9">
                    <textarea class="col-xs-12 col-sm-7"  id="form-field-8" placeholder="Nhập nội dung"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Thời gian ra đề</strong> </label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" placeholder="Nhập mã đợt dăng ký" class="col-xs-12 col-sm-7" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Thời gian bắt đầu </strong></label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" placeholder="Nhập mã đợt đăng ký" class="col-xs-12 col-sm-7" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Thời gian bảo vệ </strong></label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" placeholder="Nhập mã đợt đăng ký" class="col-xs-12 col-sm-7" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Thời gian phúc khảo </strong></label>

                  <div class="col-sm-9">
                    <input type="date" id="form-field-1" placeholder="Nhập mã đợt đăng ký" class="col-xs-12 col-sm-7" />
                  </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Số lượng thành viên nhóm </strong></label>

                  <div class="col-sm-9">
                    <input type="number" id="form-field-1" placeholder="Số lượng thành viên nhóm" class="col-xs-12 col-sm-7" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Số lượng đề tài </strong></label>

                  <div class="col-sm-9">
                    <input type="number" id="form-field-1" placeholder="Số lượng đề tài" class="col-xs-12 col-sm-7" />
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
              </form>
            </div>
            <div class="tab-pane" id="tab_default_2">
             <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>

                <div class="col-sm-5">
                  <select id="simple-colorpicker-1" class="">
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-7" style="margin-top: 10px">
               <p>Danh sách giảng viên</p>
               
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Mã giảng viên</th>
                    <th scope="col">Tên Giảng viên</th>
                    <th scope="col">Bộ môn</th>
                    <th scope="col">Ra đề</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nguyễn Văn A</td>
                    <td>Mạng máy tính</td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Nguyễn Thị B</td>
                    <td>Công nghệ phần mềm</td>
                    <td><input type="checkbox" name=""></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm-5" style="margin-top: 10px">
             <p>Yêu cầu tạo đề</p>
             <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Mã giảng viên</strong> </label>

                <div class="col-sm-9">
                  <input type="text" id="form-field-1" placeholder="Nhập mã giảng viên" class="col-xs-12 col-sm-7" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Tên Giảng viên</strong> </label>

                <div class="col-sm-9">
                  <input type="text" id="form-field-1" placeholder="Nhập Tên Giảng viên" class="col-xs-12 col-sm-7" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Mã bộ môn</strong></label>

                <div class="col-sm-9">
                  <input type="text" id="form-field-1" placeholder="Nhập Mã bộ môn" class="col-xs-12 col-sm-7" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>Tên bộ môn </strong></label>

                <div class="col-sm-9">
                  <input type="text" id="form-field-1" placeholder="Nhập tên bộ môn" class="col-xs-12 col-sm-7" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Mã đề bắt đầu </strong></label>

                <div class="col-sm-9">
                  <input type="text" id="form-field-1" placeholder="Mã đề bắt đầu" class="col-xs-12 col-sm-7" />
                </div>
              </div>
              <div class="space-4"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Mã đề kết thúc </strong></label>

                <div class="col-sm-9">
                  <input type="text" id="form-field-1" placeholder=" Nhập Mã đề kết thúc" class="col-xs-12 col-sm-7" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><strong> Ngày nộp</strong></label>

                <div class="col-sm-9">
                  <input type="date" id="form-field-1" placeholder="" class="col-xs-12 col-sm-7" />
                </div>
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
        <p>Thông tin yêu cầu</p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Tên bộ môn</th>
              <th scope="col">Mã bộ môn</th>
              <th scope="col">Mã đề bắt đầu</th>
              <th scope="col">Mã đề kết thúc</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">MMT</th>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">CNPM</th>
              <td></td>
              <td></td>
              <td>@</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="tab-pane" id="tab_default_3">
         <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã đợt đăng ký </label>
                <div class="col-sm-5">
                  <select id="simple-colorpicker-1" class="">
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-7" style="margin-top: 10px">
               <p>Danh sách đề tài</p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Mã đề tài</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Giáo viên ra đề</th>
                    <th scope="col">Giáo viên hướng dẫn</th>
                    <th scope="col">Giáo viên Phản biện</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td>Nguyễn Văn A</td>
                    <td>Nguyễn Thị C</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td>Công nghệ phần mềm</td>
                    <td>>Nguyễn Văn A</td>
                    <td>Nguyễn Thị C</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm-5" style="margin-top: 10px">
             <p>Yêu cầu tạo đề</p>
             <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>GV Hướng dẫn</strong> </label>
                <div class="col-sm-9">
                  <select id="simple-colorpicker-1" class="">
                    <option value="#ac725e">Tô văn Nhật Phi</option>
                    <option value="#d06b64">Phan Thành Nhân</option>
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <strong>GV Phản biện</strong> </label>
                <div class="col-sm-9">
                  <select id="simple-colorpicker-1" class="">
                    <option value="#ac725e">Tô văn Nhật Phi</option>
                    <option value="#d06b64">Phan Thành Nhân</option>
                  </select>
                </div>
              </div>
              <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-primary" type="button" style="border-radius: 5px">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Lưu
                </button>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- het tag 3 -->
    </div>
  </div>
</div>
</div>
</div>
</div>