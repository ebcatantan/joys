<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Patient ID</span>
        <span class="field-value"><?= ucfirst($schedules[0]['patient_id']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Start</span>
        <span class="field-value"><?= ucfirst($schedules[0]['target_date_start']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Date End</span>
        <span class="field-value"><?= ucfirst($schedules[0]['target_date_end']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Venue</span>
        <span class="field-value"><?= ucfirst($schedules[0]['venue']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Dentist</span>
        <span class="field-value"><?= ucfirst($schedules[0]['dentist_id']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Consultation Schedule</span>
        <span class="field-value"><?= ucfirst($schedules[0]['consultation_sched']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Approved by</span>
        <span class="field-value"><?= ucfirst($schedules[0]['is_approved']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('consultation-schedules','edit-consultation-schedules', $permissions, $schedules[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
