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
    <form action="<?= base_url() ?>supply-stocks/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="supply_name">Supply Name</label>
            <input name="supply_name" type="text" value="<?= isset($rec['supply_name']) ? $rec['supply_name'] : set_value('supply_name') ?>" class="form-control <?= $errors['supply_name'] ? 'is-invalid':'is-valid' ?>" id="supply_name" placeholder="Supply Name">
              <?php if($errors['supply_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['supply_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <textarea name="brand_name" type="text" class="form-control <?= $errors['brand_name'] ? 'is-invalid':'is-valid'  ?>" id="brand_name" placeholder="Brand Name" rows="1"><?= isset($rec['brand_name']) ? $rec['brand_name'] : set_value('brand_name') ?></textarea>
            <?php if($errors['brand_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['brand_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Description" rows="3"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
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
          <div class="form-group">
            <label for="date_purchased">Date Purchased</label>
            <input name="date_purchased" type="date" class="form-control <?= $errors['date_purchased'] ? 'is-invalid':'is-valid'  ?>" id="date_purchased" value="<?= isset($rec['date_purchased']) ? $rec['date_purchased'] : set_value('date_purchased') ?>" placeholder="Date Purchased" rows="1">
            <?php if($errors['date_purchased']): ?>
                <div class="invalid-feedback">
                  <?= $errors['date_purchased'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="total_unit_purchased">Total Unit Purchased</label>
            <input name="total_unit_purchased" type="number" class="form-control <?= $errors['total_unit_purchased'] ? 'is-invalid':'is-valid'  ?>" id="total_unit_purchased" value="<?= isset($rec['total_unit_purchased']) ? $rec['total_unit_purchased'] : set_value('total_unit_purchased') ?>" placeholder="Total Unit Purchased" rows="1">
            <?php if($errors['total_unit_purchased']): ?>
                <div class="invalid-feedback">
                  <?= $errors['total_unit_purchased'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="total_item_used">Total Item Used</label>
            <input name="total_item_used" type="number" class="form-control <?= $errors['total_item_used'] ? 'is-invalid':'is-valid'  ?>" id="total_item_used" value="<?= isset($rec['total_item_used']) ? $rec['description'] : set_value('total_item_used') ?>" placeholder="Total Item Used" rows="1">
            <?php if($errors['total_item_used']): ?>
                <div class="invalid-feedback">
                  <?= $errors['total_item_used'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="unit_on_stocks">Unit on Stocks</label>
            <textarea name="unit_on_stocks" type="text" class="form-control <?= $errors['unit_on_stocks'] ? 'is-invalid':'is-valid'  ?>" id="unit_on_stocks" placeholder="Unit on Stocks" rows="3"><?= isset($rec['unit_on_stocks']) ? $rec['unit_on_stocks'] : set_value('unit_on_stocks') ?></textarea>
            <?php if($errors['unit_on_stocks']): ?>
                <div class="invalid-feedback">
                  <?= $errors['unit_on_stocks '] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="expiration_date">Expiration Date</label>
            <input name="expiration_date" type="date" class="form-control <?= $errors['expiration_date'] ? 'is-invalid':'is-valid'  ?>" id="expiration_date" value="<?= isset($rec['expiration_date']) ? $rec['expiration_date'] : set_value('expiration_date') ?>" placeholder="Expiration Date" rows="1">
            <?php if($errors['expiration_date']): ?>
                <div class="invalid-feedback">
                  <?= $errors['expiration_date'] ?>
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
