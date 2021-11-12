<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="product">
        <div class="product_header">
            <h3 class="product__title">Product List</h3>
            <button type="button" class="btn btn-primary btnAdd">Add Product</button>            
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody id="product_list">
                <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>eLECTRONCS</td>
                <td>aPPLE</td>
                <td>aPPLE</td>
                <td>
                    <a class="btn btn-sm btn-info btnEdit">Edit</a>
                    <a class="btn btn-sm btn-danger">Delete</a>
                </td>
                </tr> -->
            </tbody>
            </table>
        </div>
    </div>

    <!-- Add -->
    <div class="modal modal__add-product js-modal">
    <div class="modal__container js-modal-container">
        <div class="modal-content">
            <div class="modal-close js-modal-close">
              <i class=" modal-close-icon fas fa-times"></i>
            </div>
         <div class="box-content">
            <div class="form-login active" >
                <div class="modal-heading">
                  <h2 class="modal-heading__text">ADD PRODUCT</h2>
                </div>
              <form action="" class="login">
                <div class="form-content">
                  <div class="product__name">
                        <span class="product__header">Product Name</span>
                        <input type="text" class="product_name__input" required placeholder="Enter Product Name">
                  </div>
                  <div class="brand__name">
                        <span class="product__header">Product Name</span>
                        <input type="text" class="product_name__input" required placeholder="Enter Product Name">
                  </div>
                  <div class="remember-lost">
                    <div class="remember">
                      <input type="checkbox" value="" checked="checked" id="rememberme" name="rememberme">
                      <label for="rememberme" class="remember__text">Remember me</label>
                    </div>
                    <div class="lost-password">
                      <a href="" class="lost-password__link">Lost your password?</a>
                    </div>
                  </div>
                  <div class="button-login">
                    <input type="submit" name="btnLogin" class="btn-login" value="LOGIN">
                  </div>
                  <div class="button-create">
                    <h3 class="button-create__text">CREATE AN ACCOUNT</h3>
                  </div>
                </div>
              </form>
            </div>
    </div>
<?php include('includes/footer.php'); ?>