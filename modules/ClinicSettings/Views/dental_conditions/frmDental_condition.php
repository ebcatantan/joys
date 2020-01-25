 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>

<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>dental-conditions/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="legend">Legend</label>
            <input name="legend" type="text" value="<?= isset($rec['legend']) ? $rec['legend'] : set_value('legend')
            ?>" class="form-control <?= $errors['legend'] ? 'is-invalid':'is-valid' ?>" id="legend" placeholder="Legend">
              <?php if($errors['legend']): ?>
                <div class="invalid-feedback">
                  <?= $errors['legend'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="condition_name">Condition Name</label>
            <input name="condition_name" type="text" value="<?= isset($rec['condition_name']) ? $rec['condition_name'] : set_value('condition_name')
            ?>" class="form-control <?= $errors['condition_name'] ? 'is-invalid':'is-valid' ?>" id="condition_name" placeholder="Condition Name">
              <?php if($errors['condition_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['condition_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description']
            ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Description" rows="5"><?= isset($rec['description'])
            ? $rec['description'] : set_value('description') ?></textarea>
            <?php if($errors['description']): ?>
                <div class="invalid-feedback">
                  <?= $errors['description'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
