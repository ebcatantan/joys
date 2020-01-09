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
   <form action="<?= base_url() ?>medicine-stocks/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="brand_name">Brand Name</label>
           <input placeholder="Brand Name" name="brand_name" type="text" class="form-control" value="<?= isset($rec['brand_name']) ? $rec['brand_name'] : '' ?>">
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
           <label for="date_purchased">Date Purchased</label>
           <input placeholder="Date Purchased" name="date_purchased" type="date" class="form-control" value="<?= isset($rec['date_purchased']) ? $rec['date_purchased'] : '' ?>">
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
           <input placeholder="Total Unit Purchased" name="total_unit_purchased" type="number" class="form-control" value="<?= isset($rec['total_unit_purchased']) ? $rec['total_unit_purchased'] : '' ?>">
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
           <input placeholder="Total Item Used" name="total_item_used" type="number" class="form-control" value="<?= isset($rec['total_item_used']) ? $rec['total_item_used'] : '' ?>">
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
           <label for="unit_on_stock">Unit on Stock</label>
           <input placeholder="Unit on Stock" name="unit_on_stock" type="number" class="form-control" value="<?= isset($rec['unit_on_stock']) ? $rec['unit_on_stock'] : '' ?>">
             <?php if($errors['unit_on_stock']): ?>
               <div class="invalid-feedback">
                 <?= $errors['unit_on_stock'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="expiration_date">Expiration Date</label>
           <input placeholder="Expiration Date" name="expiration_date" type="date" class="form-control" value="<?= isset($rec['expiration_date']) ? $rec['expiration_date'] : '' ?>">
             <?php if($errors['expiration_date']): ?>
               <div class="invalid-feedback">
                 <?= $errors['expiration_date'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <br>
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <button type="submit" class="btn btn-primary float-right">Submit</button>
       </div>
     </div>
   </form>
   <p style="clear: both"></p>
 </div>
</div>
