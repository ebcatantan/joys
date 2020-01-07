 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('medical_history', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Patient Name</th>
        <th>Patient Condition</th>
        <th>Illness Operation</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($medicals as $medical): ?>
      <tr id="<?php echo $medical['id']; ?>" class="text-center">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($medical['last_name'].", ".$medical['first_name']." ".$medical['middle_name']." ".$medical['ext_name']) ?></td>
        <td><?= ucwords($medical['is_healthy'] == 1 ? 'Healthy' : 'Unhealthy') ?></td>
        <td><?= ucwords($medical['had_illness_operation'] == 1 ? 'Serious Illness' : 'Medical Operation' )?></td>
        <!-- <td><?= $medical['is_healthy'] == 1 ? 'Yes' : 'No'?></td> -->
        <td class="text-center">
          <?php
            users_action('medical_history', $_SESSION['userPermmissions'], $medical['id']);
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
    <?php paginater('medical-history', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
