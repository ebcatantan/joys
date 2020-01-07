<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Supply Name</span>
        <span class="field-value"><?= ucfirst($stock[0]['supply_name'])?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Brand Name</span>
        <span class="field-value"><?= ucfirst($stock[0]['brand_name'])?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Descriptions</span>
        <span class="field-value"><?= ucfirst($stock[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Purchased</span>
        <span class="field-value"><?= ucfirst($stock[0]['date_purchased'])?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Total Unit Purchased</span>
        <span class="field-value"><?= ucfirst($stock[0]['total_unit_purchased'])?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Total Item Used</span>
        <span class="field-value"><?= ucfirst($stock[0]['total_item_used'])?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Unit on Stocks</span>
        <span class="field-value"><?= ucfirst($stock[0]['unit_on_stocks'])?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Expiration Date</span>
        <span class="field-value"><?= ucfirst($stock[0]['expiration_date'])?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('supply_stocks','edit-supply-stocks', $permissions, $stock[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
