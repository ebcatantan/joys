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
    <form action="<?= base_url() ?>supplies/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="supply_name">Supply name</label>
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
            <label for="description">Supply Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Supply Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
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
              <label for="unit_of_measure">Unit of Measure</label>
              <input name="unit_of_measure" type="text" value="<?= isset($rec['unit_of_measure']) ? $rec['unit_of_measure'] : set_value('unit_of_measure') ?>" class="form-control <?= $errors['unit_of_measure'] ? 'is-invalid':'is-valid' ?>" id="unit_of_measure" placeholder="Unit of Measure">
            <?php if($errors['unit_of_measure']): ?>
                  <div class="invalid-feedback">
                    <?= $errors['unit_of_measure'] ?>
                  </div>
                <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="form-group">
              <label for="item_per_unit">Item per Unit</label>
              <input name="item_per_unit" type="number" value="<?= isset($rec['item_per_unit']) ? $rec['item_per_unit'] : set_value('item_per_unit') ?>" class="form-control <?= $errors['item_per_unit'] ? 'is-invalid':'is-valid' ?>" id="item_per_unit" placeholder="Item per Unit">
              <?php if($errors['item_per_unit']): ?>
                  <div class="invalid-feedback">
                    <?= $errors['item_per_unit'] ?>
                  </div>
                <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="form-group">
              <label for="unit_on_stocks">Unit on Stocks</label>
              <input name="unit_on_stocks" type="number" value="<?= isset($rec['unit_on_stocks']) ? $rec['unit_on_stocks'] : set_value('unit_on_stocks') ?>" class="form-control <?= $errors['unit_on_stocks'] ? 'is-invalid':'is-valid' ?>" id="unit_on_stocks" placeholder="Unit on Stocks">
              <?php if($errors['unit_on_stocks']): ?>
                  <div class="invalid-feedback">
                    <?= $errors['unit_on_stocks'] ?>
                  </div>
                <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="form-group">
              <label for="reorder_level">Reorder Level</label>
              <input name="reorder_level" type="number" value="<?= isset($rec['reorder_level']) ? $rec['reorder_level'] : set_value('reorder_level') ?>" class="form-control <?= $errors['reorder_level'] ? 'is-invalid':'is-valid' ?>" id="reorder_level" placeholder="Reorder Level">
              <?php if($errors['reorder_level']): ?>
                  <div class="invalid-feedback">
                    <?= $errors['reorder_level'] ?>
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
