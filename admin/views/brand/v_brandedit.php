<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thương hiệu</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <?php
                    if (isset($updateBrand)) {
                        echo $updateBrand;
                    }
                    ?>
                    <?php
                    $get_brand_name = $brand->getBrandById($id);
                    if ($get_brand_name) {
                        $result = $get_brand_name->fetch_assoc();
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <input type="hidden" name="brandid" value="<?php echo $id; ?>">
                            <div class="card-body">
                                <h4 class="card-title">Sửa thương hiệu</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên thương hiệu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?php echo $result['brandName'] ?>" id="fname" name="brandName" placeholder="Sửa thương hiệu...">
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
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
