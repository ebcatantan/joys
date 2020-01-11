<div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>consultation-schedules/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="patient_id">Patient ID</label>
            <input name="patient_id" type="text" value="<?= isset($rec['patient_id']) ? $rec['patient_id'] : set_value('patient_id') ?>" class="form-control <?= $errors['patient_id'] ? 'is-invalid':'is-valid' ?>" id="patient_id" placeholder="Patient ID">
              <?php if($errors['patient_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['patient_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="target_date_start">Date Start</label>
            <input name="target_date_start" type="date" value="<?= isset($rec['target_date_start']) ? $rec['target_date_start'] : set_value('target_date_start') ?>" class="form-control <?= $errors['target_date_start'] ? 'is-invalid':'is-valid'  ?>" id="target_date_start" placeholder="Date Start">
            <?php if($errors['target_date_start']): ?>
                <div class="invalid-feedback">
                  <?= $errors['target_date_start'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="target_date_end">Target Date End</label>
            <input name="target_date_end" type="date" value="<?= isset($rec['target_date_end']) ? $rec['target_date_end'] : set_value('target_date_end') ?>" class="form-control <?= $errors['target_date_end'] ? 'is-invalid':'is-valid'  ?>" id="target_date_end" placeholder="Target Date End" rows="5">
            <?php if($errors['target_date_end']): ?>
                <div class="invalid-feedback">
                  <?= $errors['target_date_end'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="venue">Venue</label>
            <input name="venue" type="text" value="<?= isset($rec['venue']) ? $rec['venue'] : set_value('venue') ?>" class="form-control <?= $errors['venue'] ? 'is-invalid':'is-valid'  ?>" id="venue" placeholder="Venue" rows="5">
            <?php if($errors['venue']): ?>
                <div class="invalid-feedback">
                  <?= $errors['venue'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="dentist_id">Dentist ID</label>
            <input name="dentist_id" type="text" value="<?= isset($rec['dentist_id']) ? $rec['dentist_id'] : set_value('dentist_id') ?>" class="form-control <?= $errors['dentist_id'] ? 'is-invalid':'is-valid'  ?>" id="dentist_id" placeholder="Dentist ID" rows="5">
            <?php if($errors['dentist_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['dentist_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="consultation_sched">Consultation Schedule</label>
            <input name="consultation_sched" type="date" value="<?= isset($rec['consultation_sched']) ? $rec['consultation_sched'] : set_value('consultation_sched') ?>" class="form-control <?= $errors['consultation_sched'] ? 'is-invalid':'is-valid'  ?>" id="consultation_sched" placeholder="Consultation Schedule" rows="5">
            <?php if($errors['consultation_sched']): ?>
                <div class="invalid-feedback">
                  <?= $errors['consultation_sched'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="is_approved">Approved by</label>
            <input name="is_approved" type="text" value="<?= isset($rec['is_approved']) ? $rec['is_approved'] : set_value('is_approved') ?>" class="form-control <?= $errors['is_approved'] ? 'is-invalid':'is-valid'  ?>" id="is_approved" placeholder="Approved by">
            <?php if($errors['is_approved']): ?>
                <div class="invalid-feedback">
                  <?= $errors['is_approved'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </br>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
