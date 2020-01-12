 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('dental_conditions', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Legend</th>
        <th>Condition Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($dental_conditions as $dental_condition): ?>
      <tr id="<?php echo $dental_condition['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($dental_condition['legend']) ?></td>
        <td><?= ucwords($dental_condition['condition_name']) ?></td>
        <td><?= ucwords($dental_condition['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('dental_conditions', $_SESSION['userPermmissions'], $dental_condition['id']);
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
    <?php paginater('dental_conditions', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
