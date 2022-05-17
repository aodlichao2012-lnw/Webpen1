<div class="container mt-4">
    <h2>Update Product</h2>
    <hr>
    <div class="mt-3">
        <form action="<?= site_url('/update'); ?>" method="post" name="update" enctype="multipart/form-data">
            <input type="text" name="product_id" class="form-control" value="<?php echo $product_obj['product_id'] ?>" hidden>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="product_name" class="form-control" value="<?php echo $product_obj['product_name'] ?>">
            </div>
            <div class="form-group">
                <label for="name">Product Detail</label>
                <!-- <input name="product_detail" class="form-control" value=""></input> -->
                <textarea name="product_detail" class="form-control" id="editor" cols="30" rows="10"><?php echo $product_obj['product_detail'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="name">Product Image</label>
                <!-- <input type="file" name="product_image" class="form-control" value="<?php echo $product_obj['product_image'] ?>"> -->
                <input type="file" name="product_image" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success mt-2" value="Update Data">
                <a href="<?php echo site_url('/Product')?>" class="btn btn-danger mt-2">Backward</a>
            </div>
        </form>            
    </div>
</div>
