<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Supply Name</span>
        <span class="field-value"><?= ucfirst($supplies[0]['supply_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($supplies[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Unit of measure</span>
        <span class="field-value"><?= ucfirst($supplies[0]['unit_of_measure']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Item per Unit</span>
        <span class="field-value"><?= ucfirst($supplies[0]['item_per_unit']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Unit on Stocks</span>
        <span class="field-value"><?= ucfirst($supplies[0]['unit_on_stocks']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Reorder Level</span>
        <span class="field-value"><?= ucfirst($supplies[0]['reorder_level']) ?></span>
      </div>
    </div>
    
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('supplies','edit-supplies', $permissions, $supplies[0]['id']); 
        ?>
      </div>
    </div>
  </div>
</div>
</br>