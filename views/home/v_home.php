<div class="header-bottom  header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
                <span class="categorie-title">Shop by Categories </span>
            </div>
        </div>
    </div>
</div>
<!-- Categorie Menu & Slider Area Start Here -->
<div class="main-page-banner pb-50 off-white-bg">
    <div class="container">
        <div class="row">
            <!-- Vertical Menu Start Here -->
            <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                <div class="vertical-menu mb-all-30">
                    <nav>
                        <ul class="vertical-menu-list ">
                            <?php
                                if ($getall_category) {
                                    while($result_allcate = $getall_category->fetch_assoc()){
                                
                            ?> 
                            <li>
                                <a  href="shop.php?catId=<?php echo $result_allcate['catId'] ?>">
                                   <?php echo $result_allcate['catName'] ?>
                                </a>
                            </li>

                            <?php 
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Vertical Menu End Here -->
            <!-- Slider Area Start Here -->
            <div class="col-xl-9 col-lg-8 slider_box">
                <div class="slider-wrapper theme-default">
                    <!-- Slider Background  Image Start-->
                    <div id="slider" class="nivoSlider">
                        <a href="shop.html"><img src="public/layout/img/slider/1.jpg"
                                                 data-thumb="public/layout/img/slider/1.jpg" alt=""
                                                 data-bs-toggle="tooltip" data-bs-placement="top" title="#htmlcaption"/></a>
                        <a href="shop.html"><img src="public/layout/img/slider/2.jpg"
                                                 data-thumb="public/layout/img/slider/2.jpg" alt=""
                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                 title="#htmlcaption2"/></a>
                    </div>
                    <!-- Slider Background  Image Start-->
                </div>
            </div>
            <!-- Slider Area End Here -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Categorie Menu & Slider Area End Here -->
<!-- Brand Banner Area Start Here -->
<div class="image-banner pb-50 off-white-bg">
    <div class="container">
        <div class="col-img">
            <a href="#"><img src="public/layout/img/banner/h1-banner.jpg" alt="image banner"></a>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Brand Banner Area End Here -->
<!-- Hot Deal Products Start Here -->
<div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
    <div class="container">
        <!-- Product Title Start -->
        <div class="post-title pb-30">
            <h2>hot deals</h2>
        </div>
        <!-- Product Title End -->
        <!-- Hot Deal Product Activation Start -->

        <div class="hot-deal-active owl-carousel">
            <?php
            if ($product_hot && $product_hot->num_rows > 0) { ?>
                <?php
                while ($product_HotDeals = $product_hot->fetch_assoc()) { ?>
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php?proid=<?php
                            echo $product_HotDeals['productId'] ?>">
                                <img class="primary-img" src="admin/uploads/<?php
                                echo trim($product_HotDeals['image']) ?>" alt="single-product" height="221px">

                            </a>
                            <div class="countdown" data-countdown="2024/03/01"></div>
                            <a href="#" class="quick_view" data-bs-toggle="modal" data-bs-target="#myModal"
                               data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View"><i
                                        class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php"><?php
                                        echo $product_HotDeals['productName']; ?></a></h4>
                                <p><span class="price"><?php
                                        echo $product_HotDeals['price']."". " VNĐ"; ?></span> 

                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="Add to Cart"> + Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <?php
                } ?>
                <?php
            } else { ?>
                <p>Không có sản phẩm nổi bật</p>
                <?php
            } ?>
        </div>
        <!-- Hot Deal Product Activation End -->


    </div>
    <!-- Container End -->
</div>
<!-- Hot Deal Products End Here -->
<!-- Hot Deal Products End Here -->


<!-- Big Banner End Here -->
<!-- Arrivals Products Area Start Here -->
<div class="arrivals-product pb-85 pb-sm-45">
    <div class="container">
        <div class="main-product-tab-area">
            <div class="tab-menu mb-25">
                <div class="section-ttitle">
                    <h2>New Product</h2>
                </div>


            </div>

            <!-- Tab Contetn Start -->
            <div class="tab-content">
                <!-- KIDS -->
                <div id="kids" class="tab-pane fade show active">
                    <!-- Arrivals Product Activation Start Here -->
                    <div class="electronics-pro-active owl-carousel">

                        <?php
                        if ($product_new && $product_new->num_rows > 0) {
                            while ($product = $product_new->fetch_assoc()) { ?>

                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php?proid=<?php
                                        echo $product['productId'] ?>">
                                            <img class="primary-img" src="admin/uploads/<?php
                                            echo trim($product['image']) ?>" alt="single-product" height="221px">

                                        </a>
                                        <a href="#" class="quick_view" data-bs-toggle="modal"
                                           data-bs-target="#myModal" data-bs-toggle="tooltip"
                                           data-bs-placement="top" title="Quick View"><i
                                                    class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php"><?php
                                                    echo $product['productName']; ?></a></h4>
                                            <p><span class="price"><?php
                                                    echo $product['price'] . "" . "VNĐ"; ?></span>
                                                <del class="prev-price">$105.50</del>
                                            </p>
                                            <div class="label-product l_sale">20<span class="symbol-percent">%</span>
                                            </div>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                   title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Compare"><i
                                                            class="lnr lnr-sync"></i>
                                                    <span>Add To Compare</span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="WishList"><i
                                                            class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                    <span class="sticker-new">new</span>
                                </div>


                                <?php
                            }
                        }

                        ?>
                        <!-- Single Product End -->
                    </div>
                </div>
                <!-- END KIDS -->
            </div>
            <!-- Tab Content End -->
        </div>
        <!-- main-product-tab-area-->
    </div>
    <!-- Container End -->
</div>

<div class="like-product ptb-95 off-white-bg pt-sm-50 pb-sm-55 ">
    <div class="container">
        <div class="like-product-area">
            <h2 class="section-ttitle2 mb-30">Ưa thích </h2>
            <!-- Arrivals Product Activation Start Here -->
            <div class="like-pro-active owl-carousel">
                <?php
                if ($product_like && $product_like->num_rows > 0) {
                    while ($product_YouMayLike = $product_like->fetch_assoc()) { ?>
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="product.php?proid=<?php
                                echo $product_YouMayLike['productId'] ?>">
                                    <img class="primary-img" src="admin/uploads/<?php
                                    echo trim($product_YouMayLike['image']) ?>" alt="single-product" height="221px">
                                </a>
                                <a href="#" class="quick_view" data-bs-toggle="modal" data-bs-target="#myModal"
                                   data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View"><i
                                            class="lnr lnr-magnifier"></i></a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href="product.php"><?php
                                            echo $product_YouMayLike['productName']; ?></a></h4>
                                    <p><span class="price"><?php
                                            echo $product_YouMayLike['price'] . "" . "VNĐ"; ?></span>
                                        <del class="prev-price">$105.50</del>
                                    </p>
                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                </div>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                           title="Add to Cart"> + Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                           title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                           title="WishList"><i class="lnr lnr-heart"></i>
                                            <span>Add to WishList</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Product End -->
                        <?php
                    }
                }
                ?>

            </div>
            <!-- Arrivals Product Activation End Here -->
        </div>
        <!-- main-product-tab-area-->
    </div>
    <!-- Container End -->
</div>