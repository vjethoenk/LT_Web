<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Web.css" />
    <title>Teelab</title>
</head>

<body>
    <form action="">
        <div class="main">
            <div class="header">
                <div class="header-logo">
                    <a href="#"><img
                            src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo.png?1710226595388" /></a>
                </div>
                <div class="header-menu">
                    <ul>
                        <li><a href="Web.html" class="header-menu-item">TRANG CHỦ</a></li>
                        <li>
                            <a href="#" class="header-menu-item">SẢN PHẨM</a>
                            <div class="header-menu-procduct">
                                <div class="header-menu-procduct-type">
                                    <ul>
                                        <li>
                                            <a href="">ÁO</a>
                                            <ul class="header-menu-procduct-type-item">
                                                <li><a href="">Áo sơ mi</a></li>
                                                <li><a href="">Áo phông</a></li>
                                                <li><a href="">Áo polo</a></li>
                                                <li><a href="">Áo hoodie</a></li>
                                                <li><a href="">Áo sweater</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">QUẦN</a>
                                            <ul class="header-menu-procduct-type-item">
                                                <li><a href="">Quần jogger</a></li>
                                                <li><a href="">Quần jean</a></li>
                                                <li><a href="">Quần short</a></li>
                                                <li><a href="">Quần cargo</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">ÁO KHOÁC</a>
                                            <ul class="header-menu-procduct-type-item">
                                                <li><a href="">Áo phao</a></li>
                                                <li><a href="">Áo cadigan</a></li>
                                                <li><a href="">Áo bomber</a></li>
                                                <li><a href="">Áo gió</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">PHỤ KIỆN</a>
                                            <ul class="header-menu-procduct-type-item">
                                                <li><a href="">Túi hộp</a></li>
                                                <li><a href="">Khẩu trang</a></li>
                                                <li><a href="">Balo</a></li>
                                                <li><a href="">Mũ</a></li>
                                                <li><a href="">Tất</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-menu-procduct-img">
                                    <div class="header-menu-procduct-img-bar"></div>
                                    <img
                                        src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/365453628_832764981752126_6364933266422488966_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFkAiIl97rpwvRN0jtwAaCdK1IBT97ZrtErUgFP3tmu0fckDJoWxNOQOPLFIGOGc7h2oRnNLrgxNBpfwIhdLV16&_nc_ohc=EBcn4ogFnNcQ7kNvgH0GvKq&_nc_ht=scontent.fhan14-1.fna&oh=00_AYAi9tZ_5jOIuvpB6zTZdq-oLf765vNS11JlOb9Xv2cJtQ&oe=66570453" />
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="header-menu-item">ĐỔI TRẢ</a></li>
                        <li><a href="#" class="header-menu-item">BẢNG SIZE</a></li>
                    </ul>
                </div>
                <div class="header-tool">
                    <div class="header-tool-search">
                        <input type="text" placeholder="Tìm kiếm" />
                        <a href="#"><img
                                src="https://file.hstatic.net/200000642007/file/icon-search_f3577f42c6314038a0636c20100bd8d9.svg" /></a>
                    </div>
                    <div class="header-tool-cart">
                        <a href="#"><img
                                src="https://file.hstatic.net/200000642007/file/icon-cart_d075fce117f74a07ae7f149d8943fc33.svg" /></a>
                    </div>
                    <div class="header-tool-acc">
                        <a href="#"><img
                                src="https://file.hstatic.net/200000642007/file/icon-account_5d386c88832c4872b857c0da62a81bbc.svg" /></a>
                    </div>
                </div>
            </div>
            <div class="banner"></div>
            <div class="contentt-">
                <div class="content-left">
                    <div class="content-left-picture">
                        <?php
                    require "connect.php";
                    if (isset($_GET['MaSP'])) {
                        $MaSP = $_GET['MaSP'];
                        $sql = "SELECT * FROM tbl_sanpham WHERE MaSP = '$MaSP'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            ?>
                        <?php  echo '<img src="'.$row["imgSP"].'"  alt="" /> ;' ?>
                        <hr />
                        <!-- <div class="content-left-picture-demo">
                            <img src="https://bizweb.dktcdn.net/100/415/697/products/ss052-1.jpg?v=1701332113873"
                                alt="" />
                            <img src="https://bizweb.dktcdn.net/100/415/697/products/1-43f68bee-ffe3-4d5f-bcbe-725ff90cd875.jpg?v=1701332113873"
                                alt="" />
                            <img src="https://bizweb.dktcdn.net/100/415/697/products/3-01a34632-204f-4880-adcb-cb69cf8b078f.jpg?v=1701332113873"
                                alt="" />
                            <img src="https://bizweb.dktcdn.net/100/415/697/products/xam.jpg?v=1701332113873" alt="" />
                            <img src="https://bizweb.dktcdn.net/100/415/697/products/2-56431c6a-8a22-4163-80e5-1cbd27dc19dd.jpg?v=1701404403387"
                                alt="" />
                            <img src="https://bizweb.dktcdn.net/100/415/697/products/361918470-2539754196205168-3171274540736338324-n.jpg?v=1701404403387"
                                alt="" />
                        </div> -->
                    </div>
                </div>

                <div class="content-right">
                    <h1><?php echo $row["TenSP"]; ?></h1>
                    <hr />
                    <div class="content-right-star">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAtRJREFUSEvFls9rE1EQx7+TpFSs9SD+yCaNZpNW7M2Tt2oVFbMtFcEWT0IDInizevE/EPx5E0Rb9CBoxUNpNm0pKP44eBO8tJpmq0l2E9GDRJTC5o1soSVNN8nu0tJ3WXbezHxm3pv33hC2aNAWceEZvJgIJqygo+li2kvwnsDZPqmHGG8toBDUE5/S37uFewJriqQCWM6YQamYqvdvOnhBCR/0QcxXgZgFdcem9GpZ0zhcZ6wp0hMAF9d65jFZLSab0qoUXIG/D0RCpml+IyBQDWHAFKYId86UfjiFuwJn+0K3iflaHec3ZdW4seHguYHd7a1mSwFAex3n5UCbf19kPP/PCXxNxpoSPgziQyREWBCFCBwGKASgA4D1bW3idAmADiAHsMGggg8oMFMBRPOyWvi0Yr8KzirBIQI9dxKtVx1mHoyliy8t+1WwpkhnAHi6hRwGwkw4FksZ79aArR+tL3QBzM+qA3LotJnakoA4H1dLk+uWekWwCfCyjylxIK1/qI7O9jhtGJzxS5A4HldLn2uXpO453gB4rlLxn+iczmfs9qHhBeIVTsQZmObR6PRPo97mNwS/7kUgul0qA9jWrHpq5u/JqjHSyKYhONsfPEKCPrqEWupzsmp0ewYvKtIIA3c8gGGyL9KVLuQ9LbWWkF6BcM4LGMxX5HTxgTewIpUA7LWtSsIfS86MHbbOmSfkdPGsa/BCf0eXT1S+2DvFm0qFlpsBv5+fgtBro/fX5LZdXemM9XCsG3WLazERSjLx4xqLMhOux1LGw2q5pkiXAdyqfTIF0al4Sp91BdaU4ChAw1V366xpUrJzRs/ZOcqcDkUCAR5l4OTKPAN3Y6ph2zjUz1iRXjAwCNBvAFdlVR9zUmSaEhoG+D6AnQSMR1VjyGXGe4LM/kst/sBoZDJvdR6Ox9dEuCPgqyT9/pZH+ydyVmPgfI8dUzwqumr2PDJszf4D5NMALnL21kIAAAAASUVORK5CYII=" />
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAtRJREFUSEvFls9rE1EQx7+TpFSs9SD+yCaNZpNW7M2Tt2oVFbMtFcEWT0IDInizevE/EPx5E0Rb9CBoxUNpNm0pKP44eBO8tJpmq0l2E9GDRJTC5o1soSVNN8nu0tJ3WXbezHxm3pv33hC2aNAWceEZvJgIJqygo+li2kvwnsDZPqmHGG8toBDUE5/S37uFewJriqQCWM6YQamYqvdvOnhBCR/0QcxXgZgFdcem9GpZ0zhcZ6wp0hMAF9d65jFZLSab0qoUXIG/D0RCpml+IyBQDWHAFKYId86UfjiFuwJn+0K3iflaHec3ZdW4seHguYHd7a1mSwFAex3n5UCbf19kPP/PCXxNxpoSPgziQyREWBCFCBwGKASgA4D1bW3idAmADiAHsMGggg8oMFMBRPOyWvi0Yr8KzirBIQI9dxKtVx1mHoyliy8t+1WwpkhnAHi6hRwGwkw4FksZ79aArR+tL3QBzM+qA3LotJnakoA4H1dLk+uWekWwCfCyjylxIK1/qI7O9jhtGJzxS5A4HldLn2uXpO453gB4rlLxn+iczmfs9qHhBeIVTsQZmObR6PRPo97mNwS/7kUgul0qA9jWrHpq5u/JqjHSyKYhONsfPEKCPrqEWupzsmp0ewYvKtIIA3c8gGGyL9KVLuQ9LbWWkF6BcM4LGMxX5HTxgTewIpUA7LWtSsIfS86MHbbOmSfkdPGsa/BCf0eXT1S+2DvFm0qFlpsBv5+fgtBro/fX5LZdXemM9XCsG3WLazERSjLx4xqLMhOux1LGw2q5pkiXAdyqfTIF0al4Sp91BdaU4ChAw1V366xpUrJzRs/ZOcqcDkUCAR5l4OTKPAN3Y6ph2zjUz1iRXjAwCNBvAFdlVR9zUmSaEhoG+D6AnQSMR1VjyGXGe4LM/kst/sBoZDJvdR6Ox9dEuCPgqyT9/pZH+ydyVmPgfI8dUzwqumr2PDJszf4D5NMALnL21kIAAAAASUVORK5CYII=" />
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAtRJREFUSEvFls9rE1EQx7+TpFSs9SD+yCaNZpNW7M2Tt2oVFbMtFcEWT0IDInizevE/EPx5E0Rb9CBoxUNpNm0pKP44eBO8tJpmq0l2E9GDRJTC5o1soSVNN8nu0tJ3WXbezHxm3pv33hC2aNAWceEZvJgIJqygo+li2kvwnsDZPqmHGG8toBDUE5/S37uFewJriqQCWM6YQamYqvdvOnhBCR/0QcxXgZgFdcem9GpZ0zhcZ6wp0hMAF9d65jFZLSab0qoUXIG/D0RCpml+IyBQDWHAFKYId86UfjiFuwJn+0K3iflaHec3ZdW4seHguYHd7a1mSwFAex3n5UCbf19kPP/PCXxNxpoSPgziQyREWBCFCBwGKASgA4D1bW3idAmADiAHsMGggg8oMFMBRPOyWvi0Yr8KzirBIQI9dxKtVx1mHoyliy8t+1WwpkhnAHi6hRwGwkw4FksZ79aArR+tL3QBzM+qA3LotJnakoA4H1dLk+uWekWwCfCyjylxIK1/qI7O9jhtGJzxS5A4HldLn2uXpO453gB4rlLxn+iczmfs9qHhBeIVTsQZmObR6PRPo97mNwS/7kUgul0qA9jWrHpq5u/JqjHSyKYhONsfPEKCPrqEWupzsmp0ewYvKtIIA3c8gGGyL9KVLuQ9LbWWkF6BcM4LGMxX5HTxgTewIpUA7LWtSsIfS86MHbbOmSfkdPGsa/BCf0eXT1S+2DvFm0qFlpsBv5+fgtBro/fX5LZdXemM9XCsG3WLazERSjLx4xqLMhOux1LGw2q5pkiXAdyqfTIF0al4Sp91BdaU4ChAw1V366xpUrJzRs/ZOcqcDkUCAR5l4OTKPAN3Y6ph2zjUz1iRXjAwCNBvAFdlVR9zUmSaEhoG+D6AnQSMR1VjyGXGe4LM/kst/sBoZDJvdR6Ox9dEuCPgqyT9/pZH+ydyVmPgfI8dUzwqumr2PDJszf4D5NMALnL21kIAAAAASUVORK5CYII=" />
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAtRJREFUSEvFls9rE1EQx7+TpFSs9SD+yCaNZpNW7M2Tt2oVFbMtFcEWT0IDInizevE/EPx5E0Rb9CBoxUNpNm0pKP44eBO8tJpmq0l2E9GDRJTC5o1soSVNN8nu0tJ3WXbezHxm3pv33hC2aNAWceEZvJgIJqygo+li2kvwnsDZPqmHGG8toBDUE5/S37uFewJriqQCWM6YQamYqvdvOnhBCR/0QcxXgZgFdcem9GpZ0zhcZ6wp0hMAF9d65jFZLSab0qoUXIG/D0RCpml+IyBQDWHAFKYId86UfjiFuwJn+0K3iflaHec3ZdW4seHguYHd7a1mSwFAex3n5UCbf19kPP/PCXxNxpoSPgziQyREWBCFCBwGKASgA4D1bW3idAmADiAHsMGggg8oMFMBRPOyWvi0Yr8KzirBIQI9dxKtVx1mHoyliy8t+1WwpkhnAHi6hRwGwkw4FksZ79aArR+tL3QBzM+qA3LotJnakoA4H1dLk+uWekWwCfCyjylxIK1/qI7O9jhtGJzxS5A4HldLn2uXpO453gB4rlLxn+iczmfs9qHhBeIVTsQZmObR6PRPo97mNwS/7kUgul0qA9jWrHpq5u/JqjHSyKYhONsfPEKCPrqEWupzsmp0ewYvKtIIA3c8gGGyL9KVLuQ9LbWWkF6BcM4LGMxX5HTxgTewIpUA7LWtSsIfS86MHbbOmSfkdPGsa/BCf0eXT1S+2DvFm0qFlpsBv5+fgtBro/fX5LZdXemM9XCsG3WLazERSjLx4xqLMhOux1LGw2q5pkiXAdyqfTIF0al4Sp91BdaU4ChAw1V366xpUrJzRs/ZOcqcDkUCAR5l4OTKPAN3Y6ph2zjUz1iRXjAwCNBvAFdlVR9zUmSaEhoG+D6AnQSMR1VjyGXGe4LM/kst/sBoZDJvdR6Ox9dEuCPgqyT9/pZH+ydyVmPgfI8dUzwqumr2PDJszf4D5NMALnL21kIAAAAASUVORK5CYII=" />
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAtRJREFUSEvFls9rE1EQx7+TpFSs9SD+yCaNZpNW7M2Tt2oVFbMtFcEWT0IDInizevE/EPx5E0Rb9CBoxUNpNm0pKP44eBO8tJpmq0l2E9GDRJTC5o1soSVNN8nu0tJ3WXbezHxm3pv33hC2aNAWceEZvJgIJqygo+li2kvwnsDZPqmHGG8toBDUE5/S37uFewJriqQCWM6YQamYqvdvOnhBCR/0QcxXgZgFdcem9GpZ0zhcZ6wp0hMAF9d65jFZLSab0qoUXIG/D0RCpml+IyBQDWHAFKYId86UfjiFuwJn+0K3iflaHec3ZdW4seHguYHd7a1mSwFAex3n5UCbf19kPP/PCXxNxpoSPgziQyREWBCFCBwGKASgA4D1bW3idAmADiAHsMGggg8oMFMBRPOyWvi0Yr8KzirBIQI9dxKtVx1mHoyliy8t+1WwpkhnAHi6hRwGwkw4FksZ79aArR+tL3QBzM+qA3LotJnakoA4H1dLk+uWekWwCfCyjylxIK1/qI7O9jhtGJzxS5A4HldLn2uXpO453gB4rlLxn+iczmfs9qHhBeIVTsQZmObR6PRPo97mNwS/7kUgul0qA9jWrHpq5u/JqjHSyKYhONsfPEKCPrqEWupzsmp0ewYvKtIIA3c8gGGyL9KVLuQ9LbWWkF6BcM4LGMxX5HTxgTewIpUA7LWtSsIfS86MHbbOmSfkdPGsa/BCf0eXT1S+2DvFm0qFlpsBv5+fgtBro/fX5LZdXemM9XCsG3WLazERSjLx4xqLMhOux1LGw2q5pkiXAdyqfTIF0al4Sp91BdaU4ChAw1V366xpUrJzRs/ZOcqcDkUCAR5l4OTKPAN3Y6ph2zjUz1iRXjAwCNBvAFdlVR9zUmSaEhoG+D6AnQSMR1VjyGXGe4LM/kst/sBoZDJvdR6Ox9dEuCPgqyT9/pZH+ydyVmPgfI8dUzwqumr2PDJszf4D5NMALnL21kIAAAAASUVORK5CYII=" />
                    </div>
                    <div class="content-right-price">
                        <span><?php echo $row["Gia"]; ?>đ</span>
                    </div>
                    <div class="content-right-policy">
                        <div class="content-right-policy-item">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/product_poli_1.png?1710226595388"
                                alt="" />Đổi trả dễ dàng
                        </div>
                        <div class="content-right-policy-item">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/product_poli_1.png?1710226595388"
                                alt="" />Chính hãng 100%
                        </div>
                        <div class="content-right-policy-item">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/product_poli_3.png?1710226595388"
                                alt="" />Giao hàng toàn quốc
                        </div>
                    </div>
                    <div class="content-right-title">
                        <p>
                            Thông tin sản phẩm: <br />
                            + Chất liệu: Cotton <br />
                            + Form: Oversize <br />
                            + Màu sắc: Xanh, hồng, xám <br />
                            + Thiết kế: In lụa
                        </p>
                    </div>
                    <div class="content-right-options">
                        <div class="content-right-options-title">
                            Màu sắc: <span>Đen</span>
                        </div>
                        <div class="content-right-options-color">
                            <label></label>
                        </div>
                    </div>
                    <div class="content-right-size">
                        <div class="content-right-size-title">
                            Kích thước: <span>M</span>
                            <a href="">Hướng dẫn chọn kích thước</a>
                        </div>
                        <div class="content-right-size-box">
                            <div class="content-right-size-item">
                                <label><span>M</span></label>
                            </div>
                            <div class="content-right-size-item">
                                <label><span>L</span></label>
                            </div>
                            <div class="content-right-size-item">
                                <label><span>XL</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="content-right-function">
                        <div class="content-right-function-title">Số lượng:</div>
                        <button class="content-right-function-btnMinus">-</button><input type="text" value="1"
                            readonly /><button class="content-right-function-btnPlus">
                            +
                        </button>
                    </div>
                    <div class="content-right-action">
                        <button class="content-right-action-add">Thêm vào giỏ</button>
                        <button class="content-right-action-buy">Mua ngay</button>
                    </div>
                </div>
                <?php
                        }
                    }
                    ?>

            </div>
            <div class="footer">
                <div class="footer-title">
                    <a href=""><img
                            src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_footer.png?1710226595388"
                            data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_footer.png?1710226595388" /></a>
                    <div class="footer-title-name">
                        <b>HKD Vũ Thị Quỳnh Anh</b>
                        <p>
                            Giấy chứng nhận đăng ký HKD số 17A80041952 do Phòng Tài chính -
                            Kế hoạch, Uỷ ban nhân dân thành phố Thái Nguyên cấp ngày
                            30/5/2019 <br />Địa chỉ: Số 235, Đường Quang Trung, Tổ 7, Phường
                            Tân Thịnh, Thành phố Thái Nguyên, Tỉnh Thái Nguyên, Việt Nam
                            <br />
                            Email: teelabvn@gmail.com <br />
                            Điện thoại: 0865539083
                        </p>
                        <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_bct.png?1710226595388"
                            alt="" />
                    </div>
                </div>
                <div class="footer-box">
                    <h4>ĐĂNG KÝ</h4>
                    <input type="text" placeholder="Nhập địa chỉ email" />
                    <button>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAlxJREFUSEvtlk+ITmEUxn+PvxPJRiFJKGrC1tQI
                GylEZKFILLDA5M/EkNAkC02Nf2WpUcparCVRysJGLEg2WFggTKIe99W90/1m7v3uez9fzcbdfud9f+c573PO+cQ4fRonLv/Bbau87TlAL3AAeAWslfQ9A7S91LYXAn3AHmB
                KTkmXpKdtB9teDpwBtgMTCkrXKell28C21wCngPUV7zRX0sd/BtvenAK7Io3RIelnS2DbE4GdwEmgMxIYwoYlTcvHR5nLdgewDzgOLKgBzELfS5oXDbY9EzgEHAFmRQDflS
                T2QtKySrDt2bkenBEBDH16ATgBrCiIfyRpdSk47cHg0N3A1AjghyTmfKLyJnAfWFdy5q6kLYVg26uAB0nmkyKA34BLwICkYdtXgJ4m54YkhYEy8o2Yy3Z4y2sV0N/AjWRA9
                Ev6FGJtH0ze/3rFuUFJx8rAk5OZuiOdPksKLroDnJb0NvvN9gbgHlRuuXOS+mPMtTE1SjDEw+BqSc/zB20HEz0Bpkc8TY+khmo27WPbiyW9GX1xunmeAQ292SSBXZJuVypu
                psB2UBiUFrVN2dFNkoLrx5orolx/Q2wvTdbdRWBb7BmgW1JItnVwzliLgKPA3oh3bliJ4Y6oWZ0qfZz2bhgGziUQxup+4DAwv6QKDSuxLjiDhfE4ANyS9CuXQNhc4U9AqML
                KUQk0rMRWwdmdYan3SRoqcH03EAbGVuC1pDFzoU6pR8qbqPqSqr6aTKSvZSazHXzwI//PI4utC/4MDAKXmwFj3F4HfLYdwNqKY1TUiYlWXOfSmNg/96C5HwBulRsAAAAASU
                VORK5CYII=" />
                    </button>
                    <p>Theo dõi Teelab từ các nền tảng khác nhau nhé!</p>
                    <div class="footer-box-logo">
                        <a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/facebook.svg?1710226595388"
                                alt="" /></a><a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/instagram.svg?1710226595388"
                                alt="" /></a><a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/tiktok.svg?1710226595388"
                                alt="" /></a><a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/shopeeico.png?1710226595388"
                                alt="" /></a>
                        <a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/lazadaico.png?1710226595388"
                                alt="" /></a>
                    </div>
                </div>
                <div class="footer-about">
                    <h4>ABOUT US</h4>
                    <ul>
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Tất cả sản phẩm</a></li>
                        <li><a href="">Bảng Size</a></li>
                        <li><a href="">Kiểm tra đơn hàng</a></li>
                        <li><a href="">Hệ Thống Cửa Hàng</a></li>
                    </ul>
                </div>
                <div class="footer-policy">
                    <h4>CHÍNH SÁCH</h4>
                    <ul>
                        <li><a href="">Chính sách mua hàng</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Phương thức thanh toán</a></li>
                        <li>
                            <a href="">Chính sách giao nhận, vận chuyển, kiểm hàng</a>
                        </li>
                        <li><a href="">Chính sách đổi trả</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    <script src="">
    document.addEventListener("DOMContentLoaded", () => {
        const iptSL = document.querySelector(".content-right-function input");
        const btnPlus = document.querySelector(".content-right-function-btnPlus");
        const btnMinus = document.querySelector(".content-right-function-btnMinus");
        let cout = parseInt(iptSL.value);

        btnPlus.addEventListener("click", () => {
            event.preventDefault();
            cout++;
            iptSL.value = cout;
        });

        btnMinus.addEventListener("click", () => {
            event.preventDefault();
            cout--;
            iptSL.value = cout;
        });
    });
    </script>
</body>

</html>