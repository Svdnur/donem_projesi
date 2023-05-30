<fieldset>
    <div class="form-group">
        <label for="author">Author *</label>
        <input type="text" name="author" value="<?php echo htmlspecialchars($edit ? $book['author'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Author" class="form-control"
               required="required" id="author">
    </div>
    <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($edit ? $book['name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Book Name" class="form-control"
               required="required" id="name">
    </div>
    <div class="form-group">
        <label for="type">Type *</label>
        <input type="text" name="type" value="<?php echo htmlspecialchars($edit ? $book['type'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Book Type" class="form-control"
               required="required" id="type">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" placeholder="Description" class="form-control"
                  id="description"><?php echo htmlspecialchars(($edit) ? $book['description'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">Save <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>
