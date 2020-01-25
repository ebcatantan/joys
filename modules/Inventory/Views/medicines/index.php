 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('medicines', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr align="center">
        <th>#</th>
        <th>Medicine Name</th>
        <th>Generic Name</th>
       - <th>Description</th>
        <!-- <th>Unit of measurement</th>
        <th>Item per unit</th>
        <th>Unit on stocks</th>
        <th>Reorder level</th> -->
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($medicines as $medicine): ?>
      <tr class="text-center"id="<?php echo $medicine['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td ><?= $medicine['medicine_name']?></td>
        <td><?= $medicine['generic_name'] ?></td>
        <td><?= $medicine['description'] ?></td>
        <!-- <td><?= $medicine['unit_of_measure'] ?></td>
        <td><?= $medicine['item_per_unit'] ?></td>
        <td><?= $medicine['unit_on_stocks'] ?></td>
        <td><?= $medicine['reorder_level'] ?></td> -->

        <td class="text-center">
         <?php
            users_action('medicines', $_SESSION['userPermmissions'], $medicine['id']);
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
    <?php paginater('medicines', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
