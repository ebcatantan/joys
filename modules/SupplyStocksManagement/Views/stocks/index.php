 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('supply_stocks', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Supply Name</th>
        <th>Brand Name</th>
        <th>Description</th>
        <th>Date Purchased</th>

        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($stocks as $stock): ?>
      <tr style="text-align: center;" id="<?php echo $stock['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?=ucwords($stock["supply_name"])?></td>
        <td><?=ucwords($stock["brand_name"])?></td>
        <td><?=ucwords($stock["description"])?></td>
        <td><?=ucwords($stock["date_purchased"])?></td>
        <td class="text-center">
          <?php
            users_action('supply_stocks', $_SESSION['userPermmissions'], $stock['id']);
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
    <?php paginater('supply-stocks', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
