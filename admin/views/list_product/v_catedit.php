<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh Mục</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <?php
                    if (isset($updateCat)) {
                        echo $updateCat;
                    }
                    ?>
                    <?php
                    $get_cat_name = $cat->getCategoryById($id);
                    if ($get_cat_name) {
                        $result = $get_cat_name->fetch_assoc();
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <input type="hidden" name="catid" value="<?php echo $id; ?>">
                            <div class="card-body">
                                <h4 class="card-title">Sửa danh mục</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên danh mục</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?php echo $result['catName'] ?>" id="fname" name="catName" placeholder="Sửa danh mục...">
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
