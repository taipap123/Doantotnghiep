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
              Báo cáo tiến độ</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1">
              <div>
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
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                  <!--
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-8"><strong>Mã đề tài</strong></label>
                  <select id="simple-colorpicker-1" class="col-xs-12 col-sm-7" style="margin-left: 10px; width: 479px;">
                    <option value="#ac725e">#ac725e</option>
                    <option value="#d06b64">#d06b64</option>
                  </select>
                -->
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
                  <?php foreach ($ds_bomon as $value) {

                   ?>
                   <option value="<?php echo $value['MABM'] ?>"><?php echo $value['TENBM'] ?></option>

                 <?php  } ?>
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
      <div class="tab-pane" id="tab_default_3">
        <select class="form-control" style="width: auto" onchange="changeSelectbox(this)">
           <option disabled selected value="--Chọn Đề Tài--">--Chọn Đề Tài--</option>
          <?php foreach ($ds_detai as $ds) { ?>
            <option id="<?php echo $ds['MADOT'] ?>" value="<?php echo $ds['MADETAI'] ?>"><?php echo $ds['TEN_DT'] ?></option>
          <?php } ?>
        </select>
        <div class="panel panel-primary" style="margin-top: 65px">
          <div class="panel-heading">Thông tin báo cáo</div>
          <div class="panel-body">
            <table class="table table-bordered addTable">
              <div class="radio">
                <tr class="table_background">
                  <th>Tuần</th>
                  <th>Nội dung- Yêu cầu</th>
                    <th>Nhận file</th>                                 
                  <th>Nhận xét đánh giá</th>
                </tr>
                <tr class="gicungduoc">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
               <!--  <?php
                if(count($sinhvien_detai)<= 0)
                {
                  echo "<td></td><td></td><td></td><td></td>";
                }else{
                  $date1=date_create($sinhvien_detai[0]['TGBAOVE']);
                  $date2=date_create($sinhvien_detai[0]['TGBATDAU']);
                  $diff=date_diff($date2,$date1);
                  $datetemp = $diff->format('%a');
                  $day = (int)$datetemp;
                  for ($i=0; $i < $day/7 ; $i++) { ?> -->
                    <tr></tr>>
                      <td><!-- <?php echo $i+1 ?> --></td>
                      <td><textarea rows="1" style="resize: none; height: auto;"></textarea></td>
                      <td><input type="file" name="">
                        <a type="button" class="btn btn-primary" style="float: right;" >Nộp bài</a>
                      </td>
                      <td><textarea rows="1" style="resize: none; height: auto;"></textarea></td>
                    </tr>
                  <!-- <?php }} ?> -->
                </div>
              </table>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">Thảo luận - Trao đổi</div>
            <div class="panel-body">
              <div class="addComment">
              <!-- <?php foreach ($messenger as $key) { ?>
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
                <?php } ?> -->
                </div>
              </div>
              <form action="<?php echo base_url() ?>index.php/xuly_ad/messenger" method="post">
              <input type="hidden" name="MADETAI" id="madetai">
                <div class="comment_baocao">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <!-- <input type="hidden" name="MADETAI" value="<?php 
                        if(count($sinhvien_detai)>0)
                        {
                          echo $sinhvien_detai[0]["MADETAI"] ;
                        }
                        ?>"> -->
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
<script type="text/javascript">
    function changeSelectbox(obj){
    var $madetai = obj.value;
    var $madot = obj.options[obj.selectedIndex].id;
    $('#madetai').val($madetai);
    $('.gicungduoc').remove();
    $('.media-list').remove();
      $.ajax({
        url: '<?php echo base_url()?>index.php/xuly_ad/getTimeSpan',
        type: 'POST',
        dataType: 'JSON',
        data: {madetai : $madetai},
      })
      .done(function(data) {
                if(data.detail.LINKNOPFILE !=null)
                {
                 $.ajax({
                  url: '<?php echo base_url()?>index.php/xuly_ad/getLinknop',
                  type: 'POST',
                  dataType: 'JSON',
                  data: {madetai : $madetai},
                })
                .done(function(data1) {
                    for(var i= 0; i<data.day/7; i++)
                 {
                  var j = i+1;
                  if(i < data1.length)
                  {
                  $('.addTable').append('<tr class="gicungduoc">\
                      <td>'+ j +'</td> \
                      <td><textarea id="noidungbaocao'+i+'" rows="1" style="resize: none; height: auto;">'+data1[i].NOIDUNGBAOCAO+'</textarea>\
                      <button onclick="sendData('+j+',`'+$madetai+'`,'+i+')" type="submit" class="btn btn-default" style="margin-left:33px;margin-top:-26px">Lưu</button>\
                      </td>\
                      <td>'+ data1[i].LINKNOPFILE+'</td>\
                      <td>\
                        <textarea rows="1" style="resize: none; height: auto;"></textarea>\
                      </td>\
                    </tr>');
                  }
                  else{
                    $('.addTable').append('<tr class="gicungduoc">\
                      <td>'+ j +'</td> \
                      <td><textarea id="noidungbaocao'+i+'" rows="1" style="resize: none; height: auto;"></textarea>\
                      <button onclick="sendData('+j+',`'+$madetai+'`,'+i+')" type="submit" class="btn btn-default" style="margin-left:33px;margin-top:-26px">Lưu</button>\
                      </td>\
                      <td></td>\
                      <td>\
                        <textarea rows="1" style="resize: none; height: auto;"></textarea>\
                      </td>\
                    </tr>');
                  }
                }

                  })
                .fail(function() {
                  alert('ahihi');
                })
                }
                else{
                  for(var i= 0; i<data.day/7; i++)
                 {
                  var j = i+1;
                  $('.addTable').append('<tr class="gicungduoc">\
                      <td>'+ j +'</td> \
                      <td><textarea id="noidungbaocao'+i+'" rows="1" style="resize: none; height: auto;"></textarea>\
                      <button onclick="sendData('+j+',`'+$madetai+'`,'+i+')" type="submit" class="btn btn-default" style="margin-left:33px;margin-top:-26px">Lưu</button>\
                      </td>\
                      <td></td>\
                      <td>\
                        <textarea rows="1" style="resize: none; height: auto;"></textarea>\
                      </td>\
                    </tr>');
                }
                }
              })
      .fail(function() {
        alert('thatbai');
        console.log("error");
      })

      $.ajax({
                  url: '<?php echo base_url()?>index.php/xuly_ad/getMessenger',
                  type: 'POST',
                  dataType: 'JSON',
                  data: {madetai : $madetai},
                })
                .done(function(data) {
                    for(var i= 0; i<data.length; i++)
                 {
                  var j = i+1, a = data[i].TENGV,b ='avatar3.png';
                  if(data[i].TENGV == null)
                  {
                    a = data[i].HOTEN;
                  }
                  if(data[i].gtgv == 1 || data[i].gtsv == 1)
                  {
                    b = 'avatar4.png';
                  }
                  $('.addComment').after('<ul class="media-list" style="margin-bottom: 5px"><li class="media"><div class="media-left"><a href="#"><img class="media-object" src="<?php echo base_url() ?>public/images/avatars/'+b+'" alt="..."></a></div><div class="media-body"><h4 class="media-heading">'+a+'</h4>'+data[i].NOIDUNG+'</div></li></ul>');

                }
                  })
                .fail(function() {
                  alert('ahihi');
                })
  }

  function sendData(tuan,madetai,songay) {
    var noidung = $('#noidungbaocao'+songay).val();
     $.ajax({
                  url: '<?php echo base_url()?>index.php/xuly_ad/insert_noidungbaocao',
                  type: 'POST',
                  dataType: 'JSON',
                  data: {noidungbc : noidung, madetaii: madetai, tuann : tuan},
                })
                .done(function(data) {
                  alert('hehe');
                   location.reload();  
                  })
                .fail(function() {
                  alert('ahihi');
                })
  }
</script>

