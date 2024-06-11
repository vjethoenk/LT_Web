<div class="banner"></div>
<div class="contentt-">
    <div class="content-left">
        <div class="content-left-picture">
            <?php
                    require 'frontend/connect.php';
                    if (isset($_GET['MaSP'])) {
                        $MaSP = $_GET['MaSP'];
                        $sql = "SELECT * FROM tbl_sanpham WHERE MaSP = '$MaSP'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            ?>
            <?php  
             $img = $img_load .$row["imgSP"]; 
            echo '<img src="'.$img.'"  alt="" /> ;' ?>
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
            <button class="content-right-function-btnMinus">-</button><input type="text" value="1" readonly /><button
                class="content-right-function-btnPlus">
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