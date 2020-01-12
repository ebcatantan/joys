<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Consulatation ID</span>
        <span class="field-value"><?= ucfirst($payments[0]['consultation_id']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Payment Date</span>
        <!-- <span class="field-value"><?= ucfirst($payments[0]['payment_date']) ?></span> -->
        <span class="field-value"><?= $payments[0]['payment_date'] ?> (<?= floor((time() - strtotime($payments[0]['payment_date'])) / 31556926) ?> yrs old) </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Paid Amount</span>
        <span class="field-value"><?= ucfirst($payments[0]['paid_amount']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Recieved By</span>
        <span class="field-value"><?= ucfirst($payments[0]['recieved_by']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('payments','edit-payment', $permissions, $payments[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
