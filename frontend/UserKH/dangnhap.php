<div class="banner"></div>
<div class="connectd">
    <div class="connect-dangky">
        <h3>Đăng nhập</h3>
        <label for="">Email:</label>
        <input type="text" id="Email" name="Email" />
        <label for="">Mật khẩu:</label>
        <input type="text" id="MatKhau" name="MatKhau" />
        <button name="btnDN">Đăng nhập</button>
        <a href="view.php?art=dk">Đăng ký</a>
    </div>
    <?php 
                require 'frontend/connect.php';
                if(isset($_POST['btnDN'])){
                    $Email =$_POST['Email'];
                    $MatKhau =$_POST['MatKhau'];
                    if(!$conn){
                    echo 'Ket loi khong thanh cong';
                    }
                    else{
                        $query = $conn->prepare("SELECT * FROM tbl_khachhang WHERE Email = ? AND MatKhau = ?");
                        $query->bind_param("ss", $Email, $MatKhau);
                        $query->execute();
                        $result = $query->get_result();
                
                        if($result->num_rows > 0){
                            echo '<script>
                            alert("Đăng nhập thành công");
                            window.location.href = ""; 
                            </script>';
                        } else {
                            echo 'Thất bại';
                        }
                    }
                }
                 ?>
</div>