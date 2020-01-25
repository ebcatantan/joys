<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Procedure Name</span>
        <span class="field-value"><?= ucfirst($procedure[0]['procedure_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($procedure[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Price</span>
        <span class="field-value"><?= ucfirst($procedure[0]['price']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('dental-procedures','edit-procedure', $permissions, $procedure[0]['id']); 
        ?>
      </div>
    </div>
  </div>
</div>
<br>