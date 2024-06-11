    <div class="right">
        <div class="right-box">
            <h1>Thêm Danh Mục</h1>
            <form id="" class="right-box-form" method="post" enctype="multipart/form-data">
                <label for="">Tên danh mục:</label>
                <input type="text" id="tenDM" name="tenDM" required />
                <label for="">Loại danh mục:</label>
                <select id="loaiDM" name="loaiDM" required>
                    <option value="ao">Áo</option>
                    <option value="quan">Quần</option>
                    <option value="ao_khoac">Áo khoác</option>
                    <option value="phu_kien">Phụ kiện</option>
                </select>
                <label for="">Ảnh danh mục:</label>
                <input type="file" id="imgDM" name="imgDM" style="border: none" />
                <button type="submit">Thêm</button>
            </form>
        </div>

        <?php
                require "connect.php";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $tenDM = $_POST['tenDM'];
                    $loaiDM = $_POST['loaiDM'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES['imgDM']["name"]);

                    if (move_uploaded_file($_FILES["imgDM"]["tmp_name"], $target_file)) {
                        $imgDM = $target_file;
                        $sql = "INSERT INTO danh_muc (tenDM, loaiDM, imgDM) VALUES ('$tenDM', '$loaiDM', '$imgDM')";

                        if ($conn->query($sql) === TRUE) {
                            echo '<script>
                            alert("Luu thanh cong");
                            </script>';
                        } else {
                            echo "Lỗi: " . $sql . "<br>" . $conn->error;
                        }
                    } else {
                        echo "Có lỗi xảy ra khi upload file.";
                    }
                }
                $conn->close();
            ?>
    </div>
    </div>
    </div>