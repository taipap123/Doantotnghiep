<div class="content">
 <form action="<?php echo base_url()?>index.php/xuly/updatechitietsp" method="post" enctype="multipart/form-data">
   <table width="100%" border="1">
    <tbody>
      <tr>
        <td colspan="2" align="center" style="color: #FF0004;font-size: 20px; font-weight: bold;">Thêm chi tiết sp</td>
      </tr>
      <tr>
        <td width="69">Id sp</td>
        <td width="163"><input type="text" readonly name="idsp" width="162" value="<?php echo $product[0]['image']; ?>"></td>
      </tr>
      <tr>
        <td width="165">Tên sp</td>
        <td width="565"><input type="text" name="tensp" value="<?php echo $chitietsp['tensp']; ?>"></td>
      </tr>
      <tr>
        <td>Giá tính tiền</td>
        <td><input type="text" name ="giatt" value="<?php echo $chitietsp['giasp']; ?>"></td>
      </tr>
      <tr>
        <td>Giá Trên WebSite</td>
        <td><input type="text" name="gia" value="<?php echo $chitietsp['gia']; ?>"></td>
      </tr>
      <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh1"><img src="<?php echo base_url() ?>images/<?php echo $chitietsp['hinhanh'] ?>"></td>
      </tr>
      <tr>
        <td>Phân khúc</td>
        <td><input type="text" name="thutu" value="<?php echo $chitietsp['thutu']; ?>">
        </td>
      </tr>
      <tr>
        <td>Ghi chú</td>
        <td><textarea name="ghichu" cols="30" rows ="15" ><?php echo $chitietsp['ghichu']; ?></textarea></td>
      </tr>
      <tr>
        <td>Khuyến mãi</td>
        <td><textarea name="khuyenmai" cols="30" rows ="15" value="<?php echo $chitietsp['khuyenmai']; ?>"></textarea></td>
        <!-- <td><input type="text" name="khuyenmai" value="<?php echo $chitietsp['khuyenmai']; ?>"> -->
        </tr>
        <tr>
          <td>Thông tin sản phẩm</td>
          <td><textarea name="ttsp" cols="30" rows ="15" value="<?php echo $chitietsp['ttsp']; ?>"></textarea></td>
        </tr>
        <tr>
          <td>Thông số kỹ thuật</td>
          <td>
            <textarea name="motasp" cols="30" rows ="15" value="<?php echo $chitietsp['mota']; ?>"></textarea>
          </td>
          <script type="text/javascript">
            CKEDITOR.replace('motasp');
            CKEDITOR.replace('khuyenmai');
            CKEDITOR.replace('ghichu');
            CKEDITOR.replace('ttsp');
          </script>
        </tr>
        <tr>
          <td>Loại sp</td>
          <td><input type="text" name="id_loaisp" value="<?php echo $chitietsp['id_loaisp']; ?>">

          </select></td>
        </tr>
        <tr>
          <td>Sản Phẩm loại</td>
          <td><input type="text" name="sploai" value="<?php echo $chitietsp['thuocloai']; ?>"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="sua" value="Sửa"></td>
        </tr>
      </tbody>
    </table>
    <table width="100%" border="1">
      <tbody>
       <tr>
        <td colspan="8" align="center" style="font-size: 30px; color: #E00003; font-weight: bold;">Quản lý chi tiết sản phẩm</td>
      </tr>
      <tr>
        <td>ID</td>
        <td>Tên sp</td>
        <td>Hình ảnh</td>
        <td>Giá</td>
        <td>Loại sp</td>
        <td>Loại</td>
        <td colspan="2">Quản lý</td>
      </tr>
      <?php
      $i = 1;
      foreach ($dienthoai as $list) {
        ?>
        <tr>
          <td><?php echo $i;?></td>
          <td><?php echo $list['tensp'];?></td>
          <td><p><img src="<?php echo base_url() ?>images/<?php echo $list['hinhanh'] ?>" width="150" height="100"></p>
            <p><a href="index.php?quanly=gallery&ac=them&id=<?php echo $list['id_sp'] ?>">Gallery</a></p></td>
            <td><?php echo $list['gia'];?></td>
            <td><?php echo $list['id_loaisp'];?></td>
            <td><?php echo $list['thuocloai'];?></td>
            <td><a href="<?php echo base_url()?>index.php/xuly/suachitietsp/<?= $list['id_sp'];?>">Sửa</a></td>
            <td><a href="<?php echo base_url()?>index.php/xuly/deletechitietsp/<?= $list['id_sp']?>">Xóa</a></td>
          </tr>
          <?php
          $i++;
        }
        ?>
      </tbody>
    </table>
  </div>
</form>
</div>