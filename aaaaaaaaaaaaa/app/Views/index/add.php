<div class="container mt-4">
    <h1>Add Product</h1>
    <hr>
    <div class="mt-3">
        <form action="<?= site_url('/insert'); ?>" method="post" name="add" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="product_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Product Detail</label>
                <textarea name="product_detail" class="form-control" id="editor" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Product Image</label>
                <input type="file" name="product_image" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success mt-2" value="Add Data">
                <a href="<?php echo site_url('/Product')?>" class="btn btn-danger mt-2">Backward</a>
            </div>
        </form>         
    </div>
</div>

