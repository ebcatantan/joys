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
   <form action="<?= base_url() ?>dentists/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="last_name">Last Name</label>
           <input name="last_name" type="text" value="<?= isset($rec['last_name']) ? $rec['last_name'] : set_value('last_name') ?>" class="form-control <?= $errors['last_name'] ? 'is-invalid':'is-valid' ?>" id="last_name" placeholder="Last Name">
             <?php if($errors['last_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['last_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="first_name">First Name</label>
           <input name="first_name" type="text" value="<?= isset($rec['first_name']) ? $rec['first_name'] : set_value('first_name') ?>" class="form-control <?= $errors['first_name'] ? 'is-invalid':'is-valid' ?>" id="first_name" placeholder="First Name">
             <?php if($errors['first_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['first_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="middle_name">Middle Name</label>
           <input name="middle_name" type="text" value="<?= isset($rec['middle_name']) ? $rec['middle_name'] : set_value('middle_name') ?>" class="form-control <?= $errors['middle_name'] ? 'is-invalid':'is-valid' ?>" id="middle_name" placeholder="Middle Name">
             <?php if($errors['middle_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['middle_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="ext_name">Extension Name</label>
           <input name="ext_name" type="text" value="<?= isset($rec['ext_name']) ? $rec['ext_name'] : set_value('ext_name') ?>" class="form-control <?= $errors['ext_name'] ? 'is-invalid':'is-valid' ?>" id="ext_name" placeholder="Extension Name">
             <?php if($errors['ext_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['ext_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="birthdate">Birthdate</label>
             <input name="birthdate" type="date" value="<?= isset($rec['birthdate']) ? $rec['birthdate'] : set_value('birthdate') ?>" class="form-control <?= $errors['birthdate'] ? 'is-invalid':'is-valid' ?>" id="birthdate">
               <?php if($errors['birthdate']): ?>
                 <div class="invalid-feedback">
                   <?= $errors['birthdate'] ?>
                 </div>
               <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="licence_number">Licence Number</label>
           <input name="licence_number" type="text" value="<?= isset($rec['licence_number']) ? $rec['licence_number'] : set_value('licence_number') ?>" class="form-control <?= $errors['licence_number'] ? 'is-invalid':'is-valid' ?>" id="licence_number" placeholder="Licence Number">
             <?php if($errors['licence_number']): ?>
               <div class="invalid-feedback">
                 <?= $errors['licence_number'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="address">Address</label>
           <input name="address" type="text" value="<?= isset($rec['address']) ? $rec['address'] : set_value('address') ?>" class="form-control <?= $errors['address'] ? 'is-invalid':'is-valid' ?>" id="address" placeholder="Address">
             <?php if($errors['address']): ?>
               <div class="invalid-feedback">
                 <?= $errors['address'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="gender">Gender</label>
            <!-- <input name="gender" type="text" value="<?= isset($rec['gender']) ? $rec['gender'] : set_value('gender') ?>" class="form-control <?= $errors['gender'] ? 'is-invalid':'is-valid' ?>" id="gender" placeholder="Gender"> -->
            <select class="form-control" name="gender" value="<?= isset($rec['gender']) ? $rec['gender'] : set_value('gender') ?>" class="form-control <?= $errors['gender'] ? 'is-invalid':'is-valid' ?>" id="gender">
              <option value="M">Male</option>
              <option value="F">Female</option>
              </select>
             <?php if($errors['gender']): ?>
               <div class="invalid-feedback">
                 <?= $errors['gender'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="contact_number">Contact Number</label>
           <input name="contact_number" type="text" value="<?= isset($rec['contact_number']) ? $rec['contact_number'] : set_value('contact_number') ?>" class="form-control <?= $errors['contact_number'] ? 'is-invalid':'is-valid' ?>" id="contact_number" placeholder="Contact Number">
             <?php if($errors['contact_number']): ?>
               <div class="invalid-feedback">
                 <?= $errors['contact_number'] ?>
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
