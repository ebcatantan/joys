<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Name</span>
        <span class="field-value"><?= ucfirst($medicals[0]['last_name'].", ".$medicals[0]['first_name']." ".$medicals[0]['middle_name']." ".$medicals[0]['ext_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Health Condition</span>
        <span class="field-value"><?=$medicals[0]['is_healthy'] == 1 ? 'Healthy' : 'Unhealthy' ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Taking Medicine</span>
        <span class="field-value"><?=$medicals[0]['is_taking_medicine_now'] == 1 ? 'Yes' : 'No' ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">List of Medicines</span>
        <span class="field-value"><?= ucfirst($medicals[0]['med_taken_now']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Had Serious Illness</span>
        <span class="field-value"><?=$medicals[0]['Had Illness Operation'] == 1 ? 'Serious Illness' : 'Medical Operation' ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Illness Operation</span>
        <span class="field-value"><?= ucfirst($medicals[0]['illness_operation']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Hospitalized</span>
        <span class="field-value"><?=$medicals[0]['is_hospitalized'] == 1 ? 'Yes' : 'No' ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Hospitalized Details</span>
        <span class="field-value"><?= ucfirst($medicals[0]['hospitalized_details']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Taking Prescription</span>
        <span class="field-value"><?=$medicals[0]['is_taking_sprescription'] == 1 ? 'Yes' : 'No' ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Prescription Details</span>
        <span class="field-value"><?= ucfirst($medicals[0]['nprescription_details']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Pregnant</span>
        <span class="field-value"><?=$medicals[0]['is_pregnant'] == 1 ? 'Yes' : 'No' ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Patient Allergies</span>
        <span class="field-value"><?= ucfirst($medicals[0]['patient_alergies']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Patient Medical Diseases</span>
        <span class="field-value"><?= ucfirst($medicals[0]['patient_medical_diseases']) ?></span>
      </div>
    </div>


    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('medical_history','edit-medical', $permissions, $medicals[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
