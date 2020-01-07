 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
   </div>
 </div>
<br>

<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>medical-history/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="patient_id">Patient Name</label>
            <select class="form-control <?= $errors['patient_id'] ? 'is-invalid':'is-valid' ?>" name="patient_id" id="patient_id">
              <?php if(isset($rec['patient_id'])): ?>
                <option value="<?= $rec['patient_id'] ?>"><?= ucwords(name_on_system($rec['patient_id'], $patients, 'patients')) ?></option>
              <?php else: ?>
                <option value="">Select Patient Name</option>
              <?php endif; ?>
              <?php foreach ($patients as $patient): ?>
                <option value="<?= $patient['id']?>"><?=$patient['last_name'].", ".$patient['first_name']." ".$patient['middle_name']." ".$patient['ext_name']?></option>
              <?php endforeach; ?>
            </select>
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
            <label for="is_healthy">Are you healthy?</label>
            <select class="form-control <?= $errors['is_healthy'] ? 'is-invalid':'is-valid' ?>" name="is_healthy" id="is_healthy">
              <option value="">Please Select Your Answer</option>
              <option value='1'<?= $rec['is_healthy'] == '1'?'selected':'';?>>Healthy</option>
              <option value='0'<?= $rec['is_healthy'] == '0'?'selected':'';?>>Unhealthy</option>

            </select>
              <?php if($errors['is_healthy']): ?>
              <div class="invalid-feedback">
              <?= $errors['is_healthy'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="is_taking_medicine_now">Are you taking medicines?</label>
            <select class="form-control <?= $errors['is_taking_medicine_now'] ? 'is-invalid':'is-valid' ?>" name="is_taking_medicine_now" id="is_taking_medicine_now">
              <option value="">Please Select Your Answer</option>
              <option value='1'<?= $rec['is_taking_medicine_now'] == '1'?'selected':'';?>>Yes</option>
              <option value='0'<?= $rec['is_taking_medicine_now'] == '0'?'selected':'';?>>No</option>
            </select>
              <?php if($errors['is_taking_medicine_now']): ?>
              <div class="invalid-feedback">
              <?= $errors['is_taking_medicine_now'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="med_taken_now">List of Medicine taken.</label>
            <textarea name="med_taken_now" type="text" class="form-control <?= $errors['med_taken_now'] ? 'is-invalid':'is-valid'  ?>" id="med_taken_now" placeholder="Type here..." rows="5"><?= isset($rec['med_taken_now']) ? $rec['med_taken_now'] : set_value('med_taken_now') ?></textarea>
            <?php if($errors['med_taken_now']): ?>
                <div class="invalid-feedback">
                  <?= $errors['med_taken_now'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="had_illness_operation">Do you have serious illness or medical operation?</label>
            <select class="form-control <?= $errors['had_illness_operation'] ? 'is-invalid':'is-valid' ?>" name="had_illness_operation" id="had_illness_operation">
              <option value="">Please Select Your Answer</option>
              <option value='1'<?= $rec['had_illness_operation'] == '1'?'selected':'';?>>Serious Illness</option>
              <option value='0'<?= $rec['had_illness_operation'] == '0'?'selected':'';?>>Medical Operation</option>
            </select>
              <?php if($errors['had_illness_operation']): ?>
              <div class="invalid-feedback">
              <?= $errors['had_illness_operation'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="illness_operation">Name of Illness Operation.</label>
            <textarea name="illness_operation" type="text" class="form-control <?= $errors['illness_operation'] ? 'is-invalid':'is-valid'  ?>" id="illness_operation" placeholder="Type here..." rows="5"><?= isset($rec['illness_operation']) ? $rec['illness_operation'] : set_value('illness_operation') ?></textarea>
            <?php if($errors['illness_operation']): ?>
                <div class="invalid-feedback">
                  <?= $errors['illness_operation'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="is_hospitalized">Are you having hospitalized?</label>
            <select class="form-control <?= $errors['is_hospitalized'] ? 'is-invalid':'is-valid' ?>" name="is_hospitalized" id="is_hospitalized">
              <option value="">Please Select Your Answer</option>
              <option value='1'<?= $rec['is_hospitalized'] == '1'?'selected':'';?>>Yes</option>
              <option value='0'<?= $rec['is_hospitalized'] == '0'?'selected':'';?>>No</option>
            </select>
              <?php if($errors['is_hospitalized']): ?>
              <div class="invalid-feedback">
              <?= $errors['is_hospitlaized'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="hospitalized_details">Hopitalized Details</label>
            <textarea name="hospitalized_details" type="text" class="form-control <?= $errors['hospitalized_details'] ? 'is-invalid':'is-valid'  ?>" id="hospitalized_details" placeholder="Type here..." rows="5"><?= isset($rec['hospitalized_details']) ? $rec['hospitalized_details'] : set_value('hospitalized_details') ?></textarea>
            <?php if($errors['hospitalized_details']): ?>
                <div class="invalid-feedback">
                  <?= $errors['hospitalized_details'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="is_taking_sprescription">Are you taking any prescription?</label>
            <select class="form-control <?= $errors['is_taking_sprescription'] ? 'is-invalid':'is-valid' ?>" name="is_taking_sprescription" id="is_taking_sprescription">
              <option value="">Please Select Your Answer</option>
              <option value='1'<?= $rec['is_taking_sprescription'] == '1'?'selected':'';?>>Yes</option>
              <option value='0'<?= $rec['is_taking_sprescription'] == '0'?'selected':'';?>>No</option>
            </select>
              <?php if($errors['is_taking_sprescription']): ?>
              <div class="invalid-feedback">
              <?= $errors['is_taking_sprescription'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="nprescription_details">Prescription Details</label>
            <textarea name="nprescription_details" type="text" class="form-control <?= $errors['nprescription_details'] ? 'is-invalid':'is-valid'  ?>" id="nprescription_details" placeholder="Type here..." rows="5"><?= isset($rec['nprescription_details']) ? $rec['nprescription_details'] : set_value('nprescription_details') ?></textarea>
            <?php if($errors['nprescription_details']): ?>
                <div class="invalid-feedback">
                  <?= $errors['nprescription_details'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="is_pregnant">Are you pregnant?</label>
            <select class="form-control <?= $errors['is_pregnant'] ? 'is-invalid':'is-valid' ?>" name="is_pregnant" id="is_pregnant">
              <option value="">Please Select Your Answer</option>
              <option value='1'<?= $rec['is_pregnant'] == '1'?'selected':'';?>>Yes</option>
              <option value='0'<?= $rec['is_pregnant'] == '0'?'selected':'';?>>No</option>
            </select>
              <?php if($errors['is_pregnant']): ?>
              <div class="invalid-feedback">
              <?= $errors['is_pregnant'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="patient_alergies">Patient Allergy</label>
            <textarea name="patient_alergies" type="text" class="form-control <?= $errors['patient_alergies'] ? 'is-invalid':'is-valid'  ?>" id="patient_alergies" placeholder="Type here..." rows="5"><?= isset($rec['patient_alergies']) ? $rec['patient_alergies'] : set_value('patient_alergies') ?></textarea>
            <?php if($errors['nprescription_details']): ?>
                <div class="invalid-feedback">
                  <?= $errors['patient_alergies'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="patient_medical_diseases">Patient Medical Diseases</label>
            <textarea name="patient_medical_diseases" type="text" class="form-control <?= $errors['patient_medical_diseases'] ? 'is-invalid':'is-valid'  ?>" id="patient_medical_diseases" placeholder="Type here..." rows="5"><?= isset($rec['patient_medical_diseases']) ? $rec['patient_medical_diseases'] : set_value('patient_medical_diseases') ?></textarea>
            <?php if($errors['patient_medical_diseases']): ?>
                <div class="invalid-feedback">
                  <?= $errors['patient_medical_diseases'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
