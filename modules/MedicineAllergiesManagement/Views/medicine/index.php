 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('medicine_allergies', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Medicine Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($allergies as $allergy): ?>
      <tr id="<?php echo $allergy['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($allergy['med_name']) ?></td>
        <td><?= ucwords($allergy['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('medicine_allergies', $_SESSION['userPermmissions'], $allergy['id']);
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
    <?php paginater('medicine-allergies', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
