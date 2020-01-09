 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('medicine-stocks', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Brand Name</th>
        <th>Date Purchased</th>
        <th>Unit Purchased</th>
        <th>Item Used</th>
        <th>Unit on Stock</th>
        <th>Expiration Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($medicine_stocks as $medicine_stock): ?>
      <tr id="<?php echo $medicine_stock['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($medicine_stock['brand_name']) ?></td>
        <td><?= ucwords($medicine_stock['date_purchased']) ?></td>
        <td><?= ucwords($medicine_stock['total_unit_purchased']) ?></td>
        <td><?= ucwords($medicine_stock['total_item_used']) ?></td>
        <td><?= ucwords($medicine_stock['unit_on_stock']) ?></td>
        <td><?= ucwords($medicine_stock['expiration_date']) ?></td>
        <td><?= ucwords($medicine_stock['status']) ?></td>



        <td class="text-center">
          <?php
            users_action('medicine-stocks', $_SESSION['userPermmissions'], $medicine_stock['id']);
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
    <?php paginater('medicine-stocks', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
