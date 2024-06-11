<div class="banner"></div>
<div class="content-">
    <div class="content-menu">
        <div class="content-menu-title">Danh mục</div>
        <div class="content-menu-category">
            <div class="item">
                <a href="#"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAHZJREFUSEtjZBggwDhA9jKMWky3kB8NanBQi4iINVAzzN+8eYVhHtagFhEW/U9Vi9++xrBncFlMTd/iMms0VUNTtYgDNYP7zZs3B9DNG1yJa+Cyk8gABTU143c0O8FCYDRVD2y1OJqqaRECo9UiLUIVq5kDFtQAFU4oHwhyud0AAAAASUVORK5CYII=" />
                    <div>Tất cả sản phẩm</div>
                </a>
            </div>
            <?php 
                            require 'frontend/connect.php';
                            
                            $sql = "SELECT * FROM danh_muc"; 
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                   $img = $img_load .$row["imgDM"]; 
                                    echo ' <div class="item">
                                        <a href="#"> <img src="'.$img.'"/>
                                    <div>'.$row["tenDM"].'</div>
                                </a>
                            </div>';
                                }
                            }
                        ?>

        </div>
    </div>
    <div class="content-procduct">
        <div class="content-procduct-box">
            <img src="https://bizweb.dktcdn.net/100/415/697/products/ss052-1.jpg?v=1701332113873" alt="" />
            <div class="content-procduct-box-info">
                <div class="content-procduct-box-info-img">
                    <img src="https://bizweb.dktcdn.net/100/415/697/products/ss049.png?v=1701404400853" alt="" />
                </div>
                <div class="content-procduct-box-info-title">
                    <h3>
                        <a href="">Áo sơ mi Teelab Local Brand Unisex " Áo Suy Sad "
                            TS252</a>
                    </h3>
                </div>
                <div class="content-procduct-box-info-price">
                    <h3>
                        <a href="">185.000đ</a>
                    </h3>
                </div>
            </div>
        </div>

        <?php 
                            require 'frontend/connect.php';
                            $sql = "SELECT * FROM tbl_sanpham"; 
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $img = $img_load .$row["imgSP"]; 
                                    echo '<a href="view.php?art=ChiTiet&MaSP=' . $row["MaSP"] . '">
                                    <div class="content-procduct-box">
                                        <img src="'. $img .'"  alt="" /> 
                                            <div class="content-procduct-box-info">
                                                <div class="content-procduct-box-info-img">
                                                    <img src="'.$img.'" alt="" />
                                                </div>
                                                <div class="content-procduct-box-info-title">
                                                    <h3>
                                                        <a href="">'.$row["TenSP"].'
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div class="content-procduct-box-info-price">
                                                    <h3>
                                                    <a href="">'.$row["Gia"].'đ</a>
                                                    </h3>
                                                 </div>
                                            </div>
                                        </div>
                                    </a>';
                                }
                            }
                            ?>

    </div>
</div>
</div>