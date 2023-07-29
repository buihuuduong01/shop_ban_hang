
<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="cart.html">Cart</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Cart Main Area Start -->
<div class="cart-main-area ptb-100 ptb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <!-- hiển thị thông báo update -->
                <?php
                if (isset($UpdateQuantityCart)) {
                    echo $UpdateQuantityCart;
                }
                ?>
                <!-- hiển thị thông báo delete -->
                 <?php
                if (isset($cartdel)) {
                    echo $cartdel;
                }
                ?>

                <form action="" method="post">
                    <!-- Table Content Start -->


                    <div class="table-content table-responsive mb-45">

                        <table>
                            <thead>
                            <tr>
                                <th class="product-thumbnail"width="10%">Hình ảnh</th>
                                <th class="product-name"width="10%">Sản phẩm</th>
                                <th class="product-price"width="15%">Giá</th>
                                <th class="product-quantity" width="20%">Số lượng</th> 
                    
                                <th class="product-subtotal"width="10%">Thành tiền</th>
                                <th class="product-remove"width="10%">Action</th>
                            </tr>
                            </thead>
                            <?php
                            $get_product_cart = $ct->get_product_cart();
                            if ($get_product_cart) {
                                $subtotal = 0;
                                $qty = 0;
                                while ($result = $get_product_cart->fetch_assoc()) {
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href=""><img src="admin/uploads/<?php
                                                echo trim($result['image']) ?>" alt="cart-image"/></a>
                                        </td>
                                        <td class="product-name"><a href="product.php?proid=<?php
                                            echo $result['productId'] ?>"><?php
                                                echo $result['productName'] ?></a></td>
                                        <td class="product-price"><span class="amount"><?php
                                                echo $result['price'] . " " . "VNĐ" ?></span></td>
                                       <td>
                                           <form action="" method="post">
                                              <input type="hidden" name="cartId" value="<?php
                                              echo $result['cartId'] ?>"/>
                                              <input type="number" name="quantity" min="0" 
                                              value="<?php
                                              echo $result['quantity'] ?>"/>
                                               <input type="submit" name="submit" value="Update"/>
                                           </form>
                                       </td>
                                        <td class="product-subtotal">
                                            <?php
                                            $total = $result['price'] * $result['quantity'];
                                            echo $total . " " . "VNĐ";
                                            ?>

                                        </td>
                                        <td class="product-remove"><a href="?cartid=<?php
                                              echo $result['cartId'] ?>"><i class="fa fa-times"
                                                                                  aria-hidden="true"></i></a></td>
                                    </tr>
                                    </tbody>
                                    <?php
                                    $subtotal += $total;
                                    $qty =$qty+$result['quantity'];
                                }
                            }
                            ?>
                        </table>
                    </div>
  <?php
                                    $check_cart = $ct->check_cart();
                                    if ($check_cart) {
                                    
                                

                                ?>
                    <!-- Table Content Start -->
                    <div class="row">
                        <!-- Cart Button Start -->
                        <div class="col-md-8 col-sm-12">
                            <div class="buttons-cart">
                               
                                <a href="index.php">tiếp tục mua hàng</a>
                            </div>
                        </div>
                        <!-- Cart Button Start -->
                        <!-- Cart Totals Start -->
                        <div class="col-md-4 col-sm-12">
                            <div class="cart_totals float-md-right text-md-right">
                                <h2>Cart Totals</h2>
                                <br/>
                                <table class="float-md-right">
                                    <tbody>

                                    <tr class="order-total">
                                        <th>Tổng Giá:</th>
                                        <td>
                                            <strong><span class="amount"> 
                                             <?php

                                                    echo $subtotal."" ." VNĐ";
                                                 //   Session::set('qty',$quantity);
                                                    ?>
                                                        
                                                    </span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- Cart Totals End -->
                    </div>
                    <?php
                        }else{
                            echo "<div class=\"buttons-cart\">
                               
                                <a href=\"index.php\">Quay lại mua hàng</a>
                            </div>";
                        }
                    ?>
                    <!-- Row End -->
                </form>
                <!-- Form End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
</div> 