<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm Danh Mục</h4>
                <?php
                if (isset($insertCat)) {
                    echo $insertCat;
                }
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="catName" placeholder="Nhập danh mục...">
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
