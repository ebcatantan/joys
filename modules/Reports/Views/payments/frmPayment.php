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
   <form action="<?= base_url() ?>payments/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="consultation_id">Consultation ID</label>
           <input name="consultation_id" type="text" value="<?= isset($rec['consultation_id']) ? $rec['consultation_id'] : set_value('consultation_id') ?>" class="form-control <?= $errors['consultation_id'] ? 'is-invalid':'is-valid' ?>" id="consultation_id" placeholder="Consultation ID">
             <?php if($errors['consultation_id']): ?>
               <div class="invalid-feedback">
                 <?= $errors['consultation_id'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="payment_date">Payment Date</label>
             <input name="payment_date" type="date" value="<?= isset($rec['payment_date']) ? $rec['payment_date'] : set_value('payment_date') ?>" class="form-control <?= $errors['payment_date'] ? 'is-invalid':'is-valid' ?>" id="payment_date">
               <?php if($errors['payment_date']): ?>
                 <div class="invalid-feedback">
                   <?= $errors['payment_date'] ?>
                 </div>
               <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="paid_amount">Paid Amount</label>
           <input name="paid_amount" type="text" value="<?= isset($rec['paid_amount']) ? $rec['paid_amount'] : set_value('paid_amount') ?>" class="form-control <?= $errors['paid_amount'] ? 'is-invalid':'is-valid' ?>" id="paid_amount" placeholder="Paid Amount">
             <?php if($errors['paid_amount']): ?>
               <div class="invalid-feedback">
                 <?= $errors['paid_amount'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="recieved_by">Recieved By</label>
           <input name="recieved_by" type="text" value="<?= isset($rec['recieved_by']) ? $rec['recieved_by'] : set_value('recieved_by') ?>" class="form-control <?= $errors['recieved_by'] ? 'is-invalid':'is-valid' ?>" id="recieved_by" placeholder="Recieved By">
             <?php if($errors['recieved_by']): ?>
               <div class="invalid-feedback">
                 <?= $errors['recieved_by'] ?>
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
