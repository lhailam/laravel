<h1>Them chuyen muc</h1>

<form method = "POST" action ="<?php echo route('categories.add'); ?>">
  <div>
    <input type= "text" name = "category_name" preg_replace="Ten chuyen muc" value="<?php echo old('category_name'); ?>">
  </div>
  <input type="hidden" name= "_token" value="<?php echo csrf_token(); ?>">
  <button type ="submit">Them</button>
</form>