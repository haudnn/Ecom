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
                    <i class="modal-close-icon fas fa-times"></i>
                </div>
                <div class="box-content">
                    <div class="form-wrapper active" >
                        <div class="modal-heading">
                            <h2 class="modal-heading__text">ADD PRODUCT</h2>
                        </div>
                        <form action="" class="form-add-product">
                            <div class="form-content">
                                <div class="modal-product__name">
                                    <label for="product__name-input" class="product__header">Product Name</label>
                                    <input type="text" class="product__name-input" name="productName" required placeholder="Enter Product Name" id="product__name-input">
                                </div>
                                <div class="modal-brand__name">
                                        <label class="product__header">Brand Name</label>
                                        <select id="brand-select" name="sltBrand">
                                            <option value="blast" selected>Blast</option>
                                            <option value="minimal">Minimal</option>
                                            <option value="money">Money</option>
                                            <option value="bestsound" >Best Sound</option>
                                            <option value="redbox">RedBox</option>
                                        </select>
                                </div>
                                <div class="modal-category__name">
                                        <label class="product__header">Category Name</label>
                                        <select id="category-select" name="sltCategory"> 
                                            <option value="armchairs">Armchairs</option>
                                            <option value="bath_room">Bath Room</option>
                                            <option value="dining_chairs">Dining Chairs</option>
                                            <option value="dining_tables" selected>Dining Tables</option>
                                            <option value="lighting">Lightings</option>
                                            <option value="living_room">Living Room</option>
                                            <option value="office">Office</option>
                                            <option value="seating" selected>Seating</option>
                                            <option value="bath_room">Bath Room</option>
                                            <option value="dining_chairs">Dining Chairs</option>
                                            <option value="dining_tables" selected>Dining Tables</option>
                                        </select>
                                </div>
                                <div class="modal-product__description">
                                        <label class="product__header">Product Description</label>
                                        <input type="text" class="product_name__input" name="productName" required placeholder="Enter Product Price">
                                </div>
                                <div class="modal-product__price">
                                        <label class="product__header">Product Price</label>
                                        <input type="text" class="product_name__input" name="productName" required placeholder="Enter Product Price">
                                </div>
                                <div class="modal-product__image">
                                        <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                                        <input type="file" name="product_image" class="form-control">
                                </div>
                                <div class="modal-product__quantity">
                                        <label class="product__header">Product Quantity</label>
                                        <input type="number" class="product_name__input" name="productName" required placeholder="Enter Product Price">
                                </div>
                                <div class="modal-product__date">
                                        <label class="product__header">Product Date</label>
                                        <input type="number" class="product_name__input" name="productName" required placeholder="Enter Product Price">
                                </div>
                                <div class="modal-product__sale">
                                        <label class="product__header">Product Sale</label>
                                        <input type="number" class="product_name__input" name="productName" required placeholder="Enter Product Price">
                                </div>       
                                <div class="button-create">
                                    <input type="submit" name="btncreate" class="btn-create" value="ADD PRODUCT">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>