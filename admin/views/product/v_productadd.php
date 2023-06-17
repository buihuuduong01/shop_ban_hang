
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm sản phẩm</h4>
                <?php
                if (isset($insertProduct)){
                    echo $insertProduct;
                }
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
                                           placeholder="Nhập tên sản phẩm">
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
                                                <option value="<?php echo $result['catId'] ?>"><?php echo $result['catName'] ?></option>
                                                <?php
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

                                        <option value="<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>
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
                                    <textarea id="myEditor" name="description" class="tinymce"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" name="price" class="form-control"
                                           placeholder="Nhập giá sản phẩm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Upload image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile"
                                               name="image" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Product type</label>
                                <div class="col-sm-9">
                                    <select name="type" class="select2 form-control custom-select"
                                            style="width: 100%; height:36px;">
                                        <option>Select Type</option>
                                        <option value="1">Featured</option>
                                        <option value="0">Non-Featured</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                    </form>
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

