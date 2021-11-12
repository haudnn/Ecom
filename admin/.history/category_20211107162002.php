<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="product">
    <?php if (isset($_SESSION['message'])) { ?>
      <div style="font-size:1.5rem; font-weight: 500;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
        <div class="product_header">
            <h3 class="product__title">Categories List</h3>
            <button type="button" class="btn btn-primary btnAdd">Add Category</button>            
        </div>
        <div class="table-responsive">
            <table class=" myFormat table table-striped table-sm">
            <thead>
                <tr>
                <th style="font-size:1.5rem">#</th>
                <th style="font-size:1.5rem">Name</th>
                <th style="font-size:1.5rem">Quantity</th>
                <th style="font-size:1.5rem">Description</th>
                <th style="font-size:1.5rem">Image</th>
                <th style="font-size:1.5rem">Action</th>
                </tr>
            </thead>
            <tbody id="product_list">
                <?php
                    $query = "SELECT * FROM category";
                    $result_tasks = mysqli_query($conn, $query);    
                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                    <td style="font-size:1.5rem"><?php echo $row['category_id']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['category_name']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['category_quantity']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['category_description']; ?></td>
                    <td>
                        <img src="<?php echo "./upload/" .$row['category_image'];?>" width="100px" height="100px" alt="" />
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a href="delete_brand.php?id=<?php echo $row['brand_id']?>" class="btn btn-sm btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
          <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
    <!-- Add -->
    <div class="modal modal__add-product js-modal">
        <div class="modal__container js-modal-container">
            <div class="modal-content">
                <div class="modal-close js-modal-close">
                    <i class="modal-close-icon fas fa-times"></i>
                </div>
                <div class="box-content">
                    <div class="form-wrapper active" >
                        <div class="modal-heading">
                            <h2 class="modal-heading__text">ADD CATEGORY</h2>
                        </div>
                        <form action="add_category.php" class="form-add-product" method="POST" enctype="multipart/form-data"> 
                            <div class="form-content">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>