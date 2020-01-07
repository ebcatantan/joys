<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Name</span>
        <span class="field-value"><?= ucfirst($patients[0]['last_name'].", ".$patients[0]['first_name']." ".$patients[0]['middle_name']." ".$patients[0]['ext_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Nickname</span>
        <span class="field-value"><?= ucfirst($patients[0]['nickname']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Birthdate</span>
        <!-- <span class="field-value"><?= ucfirst($patients[0]['birthdate']) ?></span> -->
        <span class="field-value"><?= $patients[0]['birthdate'] ?> (<?= floor((time() - strtotime($patients[0]['birthdate'])) / 31556926) ?> yrs old) </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?= ucfirst($patients[0]['gender']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Occupation</span>
        <span class="field-value"><?= ucfirst($patients[0]['occupation']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Religion</span>
        <span class="field-value"><?= ucfirst($patients[0]['religion']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Nationality</span>
        <span class="field-value"><?= ucfirst($patients[0]['nationality']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Contact#</span>
        <span class="field-value"><?= ucfirst($patients[0]['contact_number']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Address</span>
        <span class="field-value"><?= ucfirst($patients[0]['address']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">E-mail Address</span>
        <span class="field-value"><?=$patients[0]['email']?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Dental Insurance</span>
        <span class="field-value"><?= ucfirst($patients[0]['dental_insurance']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Guardian Name</span>
        <span class="field-value"><?= ucfirst($patients[0]['guardian_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Guardian Relation</span>
        <span class="field-value"><?= ucfirst($patients[0]['guardian_relation']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Previous Dentist</span>
        <span class="field-value"><?= ucfirst($patients[0]['previous_dentist']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Last Dental Visit</span>
        <span class="field-value"><?= ucfirst($patients[0]['last_dental_visit']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('patients','edit-patient', $permissions, $patients[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
