
<?php
if($filters > 1){
  $filters = 0;
}
 echo 'filter '.$filters;
?>
<?php echo $__env->make(Session::get('main'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<hr class="featurette-divider border-0 bg-white">
<section id="aboutme">
<div class="col-12 col-md-7 order-md-2">
        <form action="<?php echo e(url('/sort' )); ?>" method = "get">
            <div class="mb-3">
              <label for="reg_nama" class="form-label">Nama Rak</label>
              <input type="text" class="form-control" id="sort" name="sort" value = "<?php echo e($filters); ?>" required>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
</div>        
</section>
</body>
</html>

