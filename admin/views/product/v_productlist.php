
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tables</h4>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Datatable</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá </th>

                                        <th>Hinh ảnh</th>
                                        <th>Loại</th>
                                        <th>Thương hiệu</th>
                                        <th>Mô tả</th>
                                        <th>Kiểu</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $productlist = $product->show_product();
                                    if ($productlist){
                                        $i=0;
                                        foreach ($productlist as $result) {
                                            $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i?></td>
                                                <td><?php echo $result['productName']?></td>
                                                <td><?php echo $result['price']?></td>
                                                <td><img src="uploads/<?php echo trim($result['image'])?>" width="80"></td> 

                                                <td><?php echo $result['catName']?></td>
                                                <th><?php echo $result['brandName']?></th>
                                                <th><?php
                                                $fm = new Format();
                                                echo  $fm->textShorten ($result['description'],70)?></th>
                                                <th>
                                                    <?php
                                                    if ($result['type'] == 1) {
                                                        echo 'Hot Deals';
                                                    } elseif ($result['type'] == 2) {
                                                        echo 'Best Seller';
                                                    } elseif ($result['type'] == 3) {
                                                        echo 'You May Like';
                                                    } else {
                                                        echo 'New Product';
                                                    }
                                                    ?>
                                                </th>

                                                <td>
                                                    <a href="product.php?action=productedit&productid=<?php echo $result['productId'] ?>">Edit</a> ||
                                                    <a onclick="return confirm('Bạn có muốn xóa?')" href="product.php?action=productdel&delid=<?php echo $result['productId']; ?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá </th>
                                        <th>Hinh ảnh</th>
                                        <th>Loại</th>
                                        <th>Thương hiệu</th>
                                        <th>Mô tả</th>
                                        <th>Kiểu</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>

</div>

</div>

<!-- this page js -->

<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>
