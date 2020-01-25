 <div class="row">
   <div class="col-md-10">
      Search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('supplies', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Supplies Name</th>
        <th>Description</th>
        <!-- <th>Unit of Measure</th> -->
        <th>Item per Unit</th>
        <!-- <th>Unit on Stocks</th> -->
        <!-- <th>Reorder Level</th> -->
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
    <?php foreach($supplies as $supply): ?>
      <tr id="<?php echo $supply['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>

        <td><?=$supply['supply_name']?></td>
        <td><?=$supply['description'] ?></td>
        <!-- <td><?=$supply['unit_of_measure'] ?></td> -->
        <td><?=$supply['item_per_unit'] ?></td>
        <!-- <td><?=$supply['unit_on_stocks'] ?></td> -->
        <!-- <td><?=$supply['reorder_level'] ?></td> -->

        <td class="text-center">
          <?php
            users_action('supplies', $_SESSION['userPermmissions'], $supply['id']);
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
    <?php paginater('supplies', count($all_items), PERPAGE, $offset)?>
  </div>
</div>
