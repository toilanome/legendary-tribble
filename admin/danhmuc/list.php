<div class="row">
            <div class="row formtitle"><h1>Danh sách loại hàng hóa </h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formlist" >
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                        include "../modal/danhmuc.php";
                          $listdm = pdo_query($sql);

                        foreach ($listdm as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=" . $id;
                            $xoadm = "index.php?act=xoadm&id=" . $id;

                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>
                            <a href="'.$suadm.'">
                            <input type="button" value="Sửa">
                            </a>
                            
                            <a href="'.$xoadm.'">
                            <input type="button" value="Xóa"></td>
                            </a>
                            
                        </tr>';
                        }
                        ?>
                        
                        <!-- <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>0001</td>
                            <td>Laptop1</td>
                            <td><input type="button" value="Sửa">
                            <input type="button" value="Xóa"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>0001</td>
                            <td>Laptop1</td>
                            <td><input type="button" value="Sửa">
                            <input type="button" value="Xóa"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>0001</td>
                            <td>Laptop1</td>
                            <td><input type="button" value="Sửa">
                            <input type="button" value="Xóa"></td>
                        </tr> -->
                    </table>
                </div>
                <div class="row mb10" >
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="admin.html">
                        <input type="button" value="Nhập thêm">
                    </a>
                    
                </div>
            </div>
        </div>