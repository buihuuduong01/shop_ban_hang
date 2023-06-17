
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm Thương Hiệu</h4>
                <?php
                if (isset( $insertBrand)){
                    echo  $insertBrand;
                }
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <form class="form-horizontal" method="post">
                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="brandName" placeholder="nhập tên thương hiệu...">
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