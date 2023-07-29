<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Sửa sản phẩm</h4>
                <?php
                if (isset($updateProduct)) {
                    echo $updateProduct;
                }
                ?>
                <?php
                $get_product_by_id = $product->getProductById($id);
                if ($get_product_by_id) {
                    foreach ($get_product_by_id

                        as $result_product) {
                            ?>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="productName" class="form-control"
                                                value="<?php
                                                echo $result_product['productName']

                                            ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                        class="col-sm-3 text-right control-label col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="category"
                                            style="width: 100%; height:36px;">
                                            <option>Chọn danh mục</option>
                                            <?php

                                            $catlist = $cat->show_Category();
                                            if ($catlist) {
                                                foreach ($catlist as $result) {
                                                    ?>
                                                    <option
                                                    <?php
                                                    if($result['catId']==$result_product['catId']){

                                                        echo 'selected';}

                                                        ?>



                                                        value="<?php
                                                        echo $result['catId'] ?>"><?php
                                                        echo $result['catName'] ?></option>
                                                        <?php
                                                    }
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Brand</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" name="brand"
                                        style="width: 100%; height:36px;">
                                        <option>Chọn thương hiệu</option>
                                        <?php
                                        $brandlist = $brand->show_Brand();
                                        if ($brandlist) {
                                            foreach ($brandlist as $result) {
                                                ?>

                                                <option
                                                <?php
                                                if($result['brandId']==$result_product['brandId']){

                                                    echo 'selected';}

                                                    ?>

                                                    value="<?php
                                                    echo $result['brandId'] ?>"><?php
                                                    echo $result['brandName'] ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="myEditor" name="description" class="tinymce"><?php
                                        echo $result_product['description']
                                    ?> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" name="price" class="form-control"
                                    value="<?php
                                    echo $result_product['price']. "" . "VNĐ";

                                ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Upload image</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile"
                                    name="image" >
                                    <img src="uploads/<?php echo trim($result_product['image'])?>" width="90">
                                    <label class="custom-file-label" for="validatedCustomFile"> </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Product type</label>
                            <div class="col-sm-9">
                                <select name="type" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                    <option>Select Type</option>
                                    <?php
                                    if ($result_product['type'] == 3) {
                                        ?>
                                        <option selected value="3">You May Like</option>
                                        <option value="2">Best Seller</option>
                                        <option value="1">Hot Deals</option>
                                        <option value="0">New Product</option>
                                        <?php
                                    } elseif ($result_product['type'] == 2) {
                                        ?>
                                        <option value="3">You May Like</option>
                                        <option selected value="2">Best Seller</option>
                                        <option value="1">Hot Deals</option>
                                        <option value="0">New Product</option>
                                        <?php
                                    } elseif ($result_product['type'] == 1) {
                                        ?>
                                        <option value="3">You May Like</option>
                                        <option value="2">Best Seller</option>
                                        <option selected value="1">Hot Deals</option>
                                        <option value="0">New Product</option>
                                        <?php
                                    } else {
                                        ?>
                                        <option value="3">You May Like</option>
                                        <option value="2">Best Seller</option>
                                        <option value="1">Hot Deals</option>
                                        <option selected value="0">New Product</option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <input type="submit" name="submit" value="update" class="btn btn-primary"/>
                        </div>
                    </div>
                </form>
                <?php
            }
            
            ?>
        </div>
    </div>
</div>
</div>
</div>


<script>
    tinymce.init({
        selector: '.tinymce'
    });
</script>

