<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="tabbable-panel" style="margin: 10px">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#tab_default_1" data-toggle="tab">
              Thêm thông báo</a>
            </li>
            <li>
              <a href="#tab_default_2" data-toggle="tab">
             Danh sách thông báo </a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1">
              
          </div>
            <div class="tab-pane" id="tab_default_2">
              <h3><strong>Danh sách đề tài</strong></h3>
              <table class="table table-bordered" id="dsdt">
                <thead>
                  <tr>
                    <th class="color" scope="col">Mã đề</th>
                    <th class="color" scope="col">Nội dung</th>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $(document).ready( function () {
    $('#dsdt').DataTable({
       "bSort": false
    });
} );
</script>