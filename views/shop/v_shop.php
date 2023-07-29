<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="product.php">Shop</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Shop Page Start -->
<div class="main-shop-page pt-100 pb-100 ptb-sm-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <!-- Sidebar Shopping Option Start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="sidebar">


                    <!-- Sidebar Categorie Start -->
                    <div class="sidebar-categorie mb-40">
                        <h3 class="sidebar-title">categories</h3>
                        <?php
                        if ($showcate) {
                            while ($name_cate = $showcate->fetch_assoc()) {
                                ?>
                                <ul class="sidbar-style">
                                    <li class="form-check">

                                        <label class="form-check-label"><a class="bg-light text-dark" href="?catId=<?php
                                        echo $name_cate['catId'] ?>"><?php
                                        echo $name_cate['catName'] ?></a></label>  
                                    </li>

                                </ul>
                                <?php
                            }
                        } ?>
                    </div>

                    <div class="col-img">
                        <a href="shop.html"><img src="public/layout/img/banner/banner-sidebar.jpg" alt="slider-banner"></a>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
            <!-- Sidebar Shopping Option End -->
            <!-- Product Categorie List Start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Grid & List View Start -->
                <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                    <div class="grid-list-view  mb-sm-15">
                        <ul class="nav tabs-area d-flex align-items-center">
                            <li><a class="active" data-bs-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a>
                            </li>

                        </ul>
                    </div>
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Sort By:</label>
                            <select class="sorter wide">
                                <option value="Position">Relevance</option>
                                <option value="Product Name">Neme, A to Z</option>
                                <option value="Product Name">Neme, Z to A</option>
                                <option value="Price">Price low to heigh</option>
                                <option value="Price" selected>Price heigh to low</option>
                            </select>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Show:</label>
                            <select class="sorter wide">
                                <option value="12">12</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                </div>
                <!-- Grid & List Main Area End -->
                <div class="tab-content fix">
                    <div id="grid-view" class="tab-pane fade show active">
                        <div class="row">
                            <!-- Single Product Start -->
                            <?php
                            if ($productbyshop){
                                while ($result = $productbyshop->fetch_assoc()){
                                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php?proid=<?php
                                                echo $result['productId'] ?>">
                                                <img class="primary-img" src="admin/uploads/<?php
                                                echo trim($result['image']) ?>" alt="single-product">
                                                <!--                                            <img class="secondary-img" src="public/layout/img/products/2.jpg" alt="single-product">-->
                                            </a>
                                            <a href="#" class="quick_view" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price"><?php
                                                echo $result['price'] . "" . " VNĐ ";?></span><del class="prev-price">$400.50</del></p>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                </div>
                                <?php
                            } 
                        }else{
                            echo "COMING SOON"; 
                        }
                        ?>
                        <!-- Single Product End -->

                    </div>
                    <!-- Row End -->
                </div>
                <!-- #grid view End -->
                <div id="list-view" class="tab-pane fade">
                    <!-- Single Product Start -->

                </div>
                <!-- #list view End -->
                <div class="pro-pagination">
                    <ul class="blog-pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <div class="product-pagination">
                        <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                    </div>
                </div>
                <!-- Product Pagination Info -->
            </div>
            <!-- Grid & List Main Area End -->
        </div>
    </div>
    <!-- product Categorie List End -->
</div>
<!-- Row End -->
</div>
<!-- Container End -->
</div>
<!-- Shop Page End -->
<!-- Support Area Start Here -->
<div class="support-area bdr-top">
    <div class="container">
        <div class="d-flex flex-wrap text-center">
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-gift"></i>
                </div>
                <div class="support-desc">
                    <h6>Great Value</h6>
                    <span>Nunc id ante quis tellus faucibus dictum in eget.</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-rocket"></i>
                </div>
                <div class="support-desc">
                    <h6>Worlwide Delivery</h6>
                    <span>Quisque posuere enim augue, in rhoncus diam dictum non</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-lock"></i>
                </div>
                <div class="support-desc">
                    <h6>Safe Payment</h6>
                    <span>Duis suscipit elit sem, sed mattis tellus accumsan.</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-enter-down"></i>
                </div>
                <div class="support-desc">
                    <h6>Shop Confidence</h6>
                    <span>Faucibus dictum suscipit eget metus. Duis  elit sem, sed.</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-users"></i>
                </div>
                <div class="support-desc">
                    <h6>24/7 Help Center</h6>
                    <span>Quisque posuere enim augue, in rhoncus diam dictum non.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Support Area End Here -->