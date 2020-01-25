 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('dentists', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Name</th>
        <th>Birthdate</th>
        <th>Licence Number</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Contact Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($dentists as $dentist): ?>
      <tr id="<?php echo $dentist['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($dentist['last_name'].", ".$dentist['first_name']." ".$dentist['middle_name']." ".$dentist['ext_name']) ?></td>
        <td><?= ucwords($dentist['birthdate']) ?></td>
        <td><?= ucwords($dentist['licence_number']) ?></td>
        <td><?= ucwords($dentist['address']) ?></td>
        <td><?= ucwords($dentist['gender']) ?></td>
        <td><?= ucwords($dentist['contact_number']) ?></td>
        <td class="text-center">
          <?php
            users_action('dentists', $_SESSION['userPermmissions'], $dentist['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>

<div class="row">
  <div class="col-md-6 offset-md-6">
    <?php paginater('dentists', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
