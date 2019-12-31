 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('patients', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Contact#</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($patients as $patient): ?>
      <tr id="<?php echo $patient['id']; ?>" class="text-center">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($patient['last_name'].", ".$patient['first_name']." ".$patient['middle_name']." ".$patient['ext_name']) ?></td>
        <td><?= ucwords($patient['gender']) ?></td>
        <td><?= ucwords($patient['contact_number']) ?></td>
        <td><?= ucwords($patient['address']) ?></td>
        <td class="text-center">
          <?php
            users_action('patients', $_SESSION['userPermmissions'], $patient['id']);
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
    <?php paginater('patients', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
