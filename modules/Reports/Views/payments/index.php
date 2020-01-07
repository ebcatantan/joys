 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('payments', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Consulatation ID</th>
        <th>Payment Date</th>
        <th>Paid Amount</th>
        <th>Recieved By</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($payments as $payment): ?>
      <tr id="<?php echo $payment['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($payment['consultation_id']) ?></td>
        <td><?= ucwords($payment['payment_date']) ?></td>
        <td><?= ucwords($payment['paid_amount']) ?></td>
        <td><?= ucwords($payment['recieved_by']) ?></td>
        <td class="text-center">
          <?php
            users_action('payments', $_SESSION['userPermmissions'], $payment['id']);
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
    <?php paginater('payments', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
