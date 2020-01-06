<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Name</span>
        <span class="field-value"><?= ucfirst($dentist[0]['last_name'].", ".$dentist[0]['first_name']." ".$dentist[0]['middle_name']." ".$dentist[0]['ext_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Birthdate</span>
        <!-- <span class="field-value"><?= ucfirst($dentist[0]['birthdate']) ?></span> -->
        <span class="field-value"><?= $dentist[0]['birthdate'] ?> (<?= floor((time() - strtotime($dentist[0]['birthdate'])) / 31556926) ?> yrs old) </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Licence#</span>
        <span class="field-value"><?= ucfirst($dentist[0]['licence_number']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Address</span>
        <span class="field-value"><?= ucfirst($dentist[0]['address']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?= ucfirst($dentist[0]['gender']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Contact#</span>
        <span class="field-value"><?= ucfirst($dentist[0]['contact_number']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('dentists','edit-dentist', $permissions, $dentist[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
