 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>medicines/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
           <div class="col-md-6 offset-md-3">
             <div class="form-group">
               <label for="medicine_name">Medicine Name</label>
               <input type="text" name="medicine_name" value="<?= isset($rec['medicine_name']) ? $rec['medicine_name'] : '' ?>" class="form-control">
               <?php if ($errors['medicine_name']): ?>
                    <div class="text-danger">
                         <?= $errors['medicine_name']?>
                    </div>
               <?php endif; ?>
             </div>
           </div>
      </div>
      <div class="row">
           <div class="col-md-6 offset-md-3">
             <div class="form-group">
               <label for="generic_name">Generic Name</label>
               <input type="text" name="generic_name" value="<?= isset($rec['generic_name']) ? $rec['generic_name'] : '' ?>" class="form-control">
               <?php if ($errors['generic_name']): ?>
                    <div class="text-danger">
                         <?= $errors['generic_name']?>
                    </div>
               <?php endif; ?>
             </div>
           </div>
      </div>
      <div class="row">
           <div class="col-md-6 offset-md-3">
             <div class="form-group">
               <label for="description">Description</label>
               <input type="text" name="description" value="<?= isset($rec['description']) ? $rec['description'] : '' ?>" class="form-control">
               <?php if ($errors['description']): ?>
                    <div class="text-danger">
                         <?= $errors['description']?>
                    </div>
               <?php endif; ?>
             </div>
           </div>
      </div>
      <div class="row">
           <div class="col-md-6 offset-md-3">
             <div class="form-group">
               <label for="unit_of_measure">Unit of measure</label>
               <input type="text" name="unit_of_measure" value="<?= isset($rec['unit_of_measure']) ? $rec['unit_of_measure'] : '' ?>" class="form-control">
               <?php if ($errors['unit_of_measure']): ?>
                    <div class="text-danger">
                         <?= $errors['unit_of_measure']?>
                    </div>
               <?php endif; ?>
             </div>
           </div>
      </div>
      <div class="row">
           <div class="col-md-6 offset-md-3">
             <div class="form-group">
               <label for="item_per_unit">Item per unit</label>
               <input type="text" name="item_per_unit" value="<?= isset($rec['item_per_unit']) ? $rec['item_per_unit'] : '' ?>" class="form-control">
               <?php if ($errors['item_per_unit']): ?>
                    <div class="text-danger">
                         <?= $errors['item_per_unit']?>
                    </div>
               <?php endif; ?>
             </div>
           </div>
      </div>
      <div class="row">
           <div class="col-md-6 offset-md-3">
             <div class="form-group">
               <label for="unit_on_stocks">Unit on stocks</label>
               <input type="text" name="unit_on_stocks" value="<?= isset($rec['unit_on_stocks']) ? $rec['unit_on_stocks'] : '' ?>" class="form-control">
               <?php if ($errors['unit_on_stocks']): ?>
                    <div class="text-danger">
                         <?= $errors['unit_on_stocks']?>
                    </div>
               <?php endif; ?>
             </div>
           </div>
      </div>
      <div class="row">
           <div class="col-md-6 offset-md-3">
             <div class="form-group">
               <label for="reorder_level">Reorder level</label>
               <input type="text" name="reorder_level" value="<?= isset($rec['reorder_level']) ? $rec['reorder_level'] : '' ?>" class="form-control">
               <?php if ($errors['reorder_level']): ?>
                    <div class="text-danger">
                         <?= $errors['reorder_level']?>
                    </div>
               <?php endif; ?>
             </div>
           </div>
      </div>


     </div>
</div>
      <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
