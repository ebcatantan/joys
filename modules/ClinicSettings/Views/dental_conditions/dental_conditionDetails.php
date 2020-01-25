<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Legend</span>
        <span class="field-value"><?= ucfirst($dental_condition[0]['legend']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Condition Name</span>
        <span class="field-value"><?= ucfirst($dental_condition[0]['condition_name']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($dental_condition[0]['description']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('dental_conditions','edit-dentalcondition', $permissions, $dental_condition[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
