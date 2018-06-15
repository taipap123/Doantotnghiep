   <a class="btn btn-success" data-target="#myModal3"  data-toggle="modal" href="#" style="float: right; margin: 20px">Thêm</a>
 <table id="datatable" class="table table-striped table-bordered table-hover dataTable no-footer">
                    <thead>
                      <tr>
                        <th class="color" scope="col">Mã User</th>
                        <th class="color" scope="col">Mật Khẩu</th>
                        <th class="color" scope="col">Quyền Sử Dụng</th>
                        <th class="color" scope="col">Ngày Đăng Ký</th>
                        <th class="color" scope="col">Xử Lý</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($user as $item) { ?>
                      <tr>
                        <th scope="row"><?php echo $item['IDUser'] ?></th>
                        <td><?php echo $item['MatKhau'] ?></td>
                        <td><?php echo $item['IDQuyenSuDung'] ?></td>
                        <td><?php echo $item['NgayDangKy'] ?></td>
                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                              <a class="edit" data-target="#myModal" data-id="<?php echo $item['IDUser']?>" data-mk="<?php echo $item['MatKhau']?>" data-quyen="<?php echo $item['IDQuyenSuDung']?>" data-toggle="modal" href="#">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                              </a>
                              <a class="red delete" data-target="#myModal2" data-id="<?php echo $item['IDUser']?>"  data-toggle="modal" href="#">
                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                              </a>
                            </div>
                        </td>

                      </tr>
                       <?php  } ?>
                    </tbody>
                  </table>

  <!-- Modal -->
  <form method="post" action="<?php echo base_url() ?>index.php/xuly_ad/editUser">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sửa User</h4>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">User</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="idUser" name="idUser" placeholder="User">
       <input type="hidden" class="form-control" id="idUser1" name="idUser1" placeholder="User">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Mật Khẩu</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Mật Khẩu">
    </div>
      </div>
       <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Quyền Sử Dụng</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="quyensd" name="quyensd" placeholder="Quyền Sử Dụng">
    </div>
      </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

<form method="post" action="<?php echo base_url() ?>index.php/xuly_ad/deleteUser">
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Xóa User</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">Bạn Có Muốn Xóa Không??</div>
        <input type="hidden" name="idUser" id="idUser2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-danger">Xóa</button>
      </div>
    </div>
  </div>
</div>
</form>

<form method="post" action="<?php echo base_url() ?>index.php/xuly_ad/insertUser">
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm User</h4>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">User</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="idUser" name="idUser" placeholder="User">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Mật Khẩu</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Mật Khẩu">
    </div>
      </div>
       <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Quyền Sử Dụng</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="quyensd" name="quyensd" placeholder="Quyền Sử Dụng">
    </div>
      </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript">
  $('.edit').click(function(event) {
    var id = $(this).data('id');
    $('#idUser').val(id);
     $('#idUser1').val(id);
     var mk = $(this).data('mk');
    $('#matkhau').val(mk);
    var quyen = $(this).data('quyen');
    $('#quyensd').val(quyen);
  });
   $('.delete').click(function(event) {
    var id = $(this).data('id');
    $('#idUser2').val(id);
  });
</script>