<div class="page-wrapper">
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
                        <h5 class="card-title m-b-0">Danh sách danh muc</h5>
                    </div>
                    <table  class="table">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $show_brand = $brand->show_brand();
                        if ($show_brand) {
                            $i = 0;
                            while ($result = $show_brand->fetch_assoc()) {
                                $i++;
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $result['brandName'] ?></td>
                                    <td>
                                        <a href="brand.php?action=brandedit&brandid=<?php echo $result['brandId'] ?>">Edit</a> ||
                                        <a onclick="return confirm('Bạn có muốn xóa?')" href="brand.php?action=branddel&delid=<?php echo $result['brandId']; ?>">Delete</a>

                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
