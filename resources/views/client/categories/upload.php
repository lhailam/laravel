<h1>Them chuyen muc</h1>

<form method = "POST" action ="<?php echo route('categories.upload');?>" enctype="multipart/form-data">
  <div>
    <input type="file" name="photo" id="">
  </div>
  <input type="hidden" name= "_token" value="<?php echo csrf_token(); ?>">
  <button type ="Upload">Them</button>
</form>