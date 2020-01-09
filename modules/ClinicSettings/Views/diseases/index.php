 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('diseases', $_SESSION['userPermmissions']) ?>
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
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($diseases as $disease): ?>
      <tr id="<?php echo $disease['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($disease['dn_name']) ?></td>
        <td><?= ucwords($disease['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('diseases', $_SESSION['userPermmissions'], $disease['id']);
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
    <?php paginater('diseases', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
