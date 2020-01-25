<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Medicine Name</span>
        <span class="field-value"><?= ucfirst($allergies[0]['med_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Medicine Description</span>
        <span class="field-value"><?= ucfirst($allergies[0]['description']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('medicine_allergies','edit-medicine-allergies', $permissions, $allergies[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
