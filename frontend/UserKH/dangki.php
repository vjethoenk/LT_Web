<div class="banner"></div>
<div class="connectd">
    <form action="" method="post">
        <div class="connect-dangky">
            <h3>Đăng ký tài khoản</h3>
            <label for="">Họ và tên:</label>
            <input type="text" id="TenKH" name="TenKH" />
            <label for="">Email:</label>
            <input type="text" id="Email" name="Email" />
            <label for="">Mật khẩu:</label>
            <input type="text" id="MatKhau" name="MatKhau" />
            <label for="">Nhập lại mật khẩu:</label>
            <input type="text" id="ConfirmMatKhau" />
            <label for="">Số điện thoại:</label>
            <input type="text" id="Sdt" name="Sdt" />
            <label for="">Địa chỉ:</label>
            <input type="text" id="DiaChi" name="DiaChi" />
            <button name="btnDK">Đăng ký</button>
        </div>
    </form>
</div>
<?php
                require 'frontend/connect.php';
                if(isset($_POST['btnDK'])){
                    $TenKH =$_POST['TenKH'];
                    $Email =$_POST['Email'];
                    $MatKhau =$_POST['MatKhau'];
                    $Sdt =$_POST['Sdt'];
                    $DiaChi =$_POST['DiaChi'];

                    if(!$conn){
                    echo 'Ket loi khong thanh cong';
                    }
                    else{
                    $query ="INSERT INTO `tbl_khachhang` (`TenKH`,`Email`,`MatKhau`,`Sdt`,`DiaChi`) VALUE (' $TenKH','$Email','$MatKhau','$Sdt','$DiaChi')";
                    $result= mysqli_query($conn, $query);
                    if($result>0){
                        
                        echo '<script>
                        alert("Luu thanh cong");
                        window.location.href ="";
                        </script>';
                    }
                    else{
                        echo 'that bai';
                    }
                    }
                }
                ?>