<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Brand Name</span>
        <span class="field-value"><?= ucfirst($medicine_stocks[0]['brand_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Purchased</span>
        <span class="field-value"><?= ucfirst($medicine_stocks[0]['date_purchased']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Total Unit Purchased</span>
        <span class="field-value"><?= ucfirst($medicine_stocks[0]['total_unit_purchased']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Total Item Used</span>
        <span class="field-value"><?= ucfirst($medicine_stocks[0]['total_item_used']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Unit on Stock</span>
        <span class="field-value"><?= ucfirst($medicine_stocks[0]['unit_on_stock']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Expiration</span>
        <span class="field-value"><?= ucfirst($medicine_stocks[0]['expiration_date']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('medicine-stocks','edit_medicine_stock', $permissions, $medicine_stocks[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
