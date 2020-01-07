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
    <form action="<?= base_url() ?>patients/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="last_name">Lastname</label>
            <input name="last_name" type="text" value="<?= isset($rec['last_name']) ? $rec['last_name'] : set_value('last_name') ?>" class="form-control <?= $errors['last_name'] ? 'is-invalid':'is-valid' ?>" id="last_name" placeholder="Lastname">
              <?php if($errors['last_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['last_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="form-group">
                  <label for="first_name">Firstname</label>
                  <input name="first_name" type="text" value="<?= isset($rec['first_name']) ? $rec['first_name'] : set_value('first_name') ?>" class="form-control <?= $errors['first_name'] ? 'is-invalid':'is-valid' ?>" id="first_name" placeholder="Firstname">
                    <?php if($errors['first_name']): ?>
                      <div class="invalid-feedback">
                        <?= $errors['first_name'] ?>
                      </div>
                    <?php endif; ?>
                </div>
              </div>
            </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                      <label for="middle_name">Middlename</label>
                      <input name="middle_name" type="text" value="<?= isset($rec['middle_name']) ? $rec['middle_name'] : set_value('middle_name') ?>" class="form-control <?= $errors['middle_name'] ? 'is-invalid':'is-valid' ?>" id="middle_name" placeholder="Middlename">
                          <?php if($errors['middle_name']): ?>
                          <div class="invalid-feedback">
                              <?= $errors['middle_name'] ?>
                          </div>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>

        <div class="row">
          <div class="col-md-12">
              <div class="row">
                <div class="col-md-6 offset-md-3">
                  <div class="form-group">
                    <label for="ext_name">Extname</label>
                    <input name="ext_name" type="text" value="<?= isset($rec['ext_name']) ? $rec['ext_name'] : set_value('ext_name') ?>" class="form-control <?= $errors['ext_name'] ? 'is-invalid':'is-valid' ?>" id="ext_name" placeholder="Extension Name">
                      <?php if($errors['ext_name']): ?>
                        <div class="invalid-feedback">
                          <?= $errors['ext_name'] ?>
                        </div>
                      <?php endif; ?>
                  </div>
                </div>
              </div>

        <div class="row">
          <div class="col-md-12">
              <div class="row">
                <div class="col-md-6 offset-md-3">
                  <div class="form-group">
                    <label for="nickname">Nickname</label>
                    <input name="nickname" type="text" value="<?= isset($rec['nickname']) ? $rec['nickname'] : set_value('nickname') ?>" class="form-control <?= $errors['nickname'] ? 'is-invalid':'is-valid' ?>" id="nickname" placeholder="Nickname">
                    <?php if($errors['nickname']): ?>
                      <div class="invalid-feedback">
                        <?= $errors['nickname'] ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

          <div class="row">
            <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                      <label for="birthdate">Birthdate</label>
                      <input name="birthdate" type="date" value="<?= isset($rec['nickname']) ? $rec['birthdate'] : set_value('birthdate') ?>" class="form-control <?= $errors['birthdate'] ? 'is-invalid':'is-valid' ?>" id="birthdate">
                        <?php if($errors['birthdate']): ?>
                          <div class="invalid-feedback">
                            <?= $errors['birthdate'] ?>
                          </div>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>

            <div class="row">
              <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 offset-md-3">
                      <div class="form-group">
                        <label for="gender">Gender</label>
                        <!-- <input name="gender" type="text" value="<?= isset($rec['gender']) ? $rec['gender'] : set_value('gender') ?>" class="form-control <?= $errors['gender'] ? 'is-invalid':'is-valid' ?>" id="gender" placeholder="Gender"> -->
                        <select class="form-control <?= $errors['gender'] ? 'is-invalid':'is-valid' ?>" name="gender" id="gender">
                          <option value="">-- Please Select a Gender --</option>
                          <option value='M' <?= $rec['gender'] == 'M'?'selected':'';?>>Male</option>
                          <option value='F' <?= $rec['gender'] == 'F'?'selected':'';?>>Female</option>
                        </select>
                          <?php if($errors['gender']): ?>
                          <div class="invalid-feedback">
                          <?= $errors['gender'] ?>
                            </div>
                          <?php endif; ?>
                      </div>
                    </div>
                  </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                          <label for="occupation">Occupation</label>
                          <input name="occupation" type="text" value="<?= isset($rec['occupation']) ? $rec['occupation'] : set_value('occupation') ?>" class="form-control <?= $errors['occupation'] ? 'is-invalid':'is-valid' ?>" id="occupation" placeholder="Occupation">
                            <?php if($errors['occupation']): ?>
                              <div class="invalid-feedback">
                                <?= $errors['occupation'] ?>
                              </div>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>

                <div class="row">
                  <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6 offset-md-3">
                          <div class="form-group">
                            <label for="religion">Religion</label>
                            <input name="religion" type="text" value="<?= isset($rec['religion']) ? $rec['religion'] : set_value('religion') ?>" class="form-control <?= $errors['religion'] ? 'is-invalid':'is-valid' ?>" id="religion" placeholder="Religion">
                              <?php if($errors['religion']): ?>
                                                                      <div class="invalid-feedback">
                                  <?= $errors['religion'] ?>
                                </div>
                              <?php endif; ?>
                          </div>
                        </div>
                      </div>

                  <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6 offset-md-3">
                            <div class="form-group">
                              <label for="nationality">Nationality</label>
                              <input name="nationality" type="text" value="<?= isset($rec['nationality']) ? $rec['nationality'] : set_value('nationality') ?>" class="form-control <?= $errors['nationality'] ? 'is-invalid':'is-valid' ?>" id="nationality" placeholder="Nationality">
                                <?php if($errors['nationality']): ?>
                                  <div class="invalid-feedback">
                                    <?= $errors['nationality'] ?>
                                  </div>
                                <?php endif; ?>
                            </div>
                          </div>
                        </div>

                    <div class="row">
                      <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-6 offset-md-3">
                              <div class="form-group">
                                <label for="contact_number">Contact Number</label>
                                <input name="contact_number" type="text" value="<?= isset($rec['contact_number']) ? $rec['contact_number'] : set_value('contact_number') ?>" class="form-control <?= $errors['contact_number'] ? 'is-invalid':'is-valid' ?>" id="contact_number" placeholder="Contact Number">
                                  <?php if($errors['contact_number']): ?>
                                    <div class="invalid-feedback">
                                      <?= $errors['contact_number'] ?>
                                    </div>
                                  <?php endif; ?>
                              </div>
                            </div>
                          </div>

                      <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-6 offset-md-3">
                                <div class="form-group">
                                  <label for="address">Address</label>
                                  <input name="address" type="text" value="<?= isset($rec['address']) ? $rec['address'] : set_value('address') ?>" class="form-control <?= $errors['address'] ? 'is-invalid':'is-valid' ?>" id="address" placeholder="Address">
                                    <?php if($errors['address']): ?>
                                      <div class="invalid-feedback">
                                        <?= $errors['address'] ?>
                                      </div>
                                    <?php endif; ?>
                                </div>
                              </div>
                            </div>

                        <div class="row">
                          <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-6 offset-md-3">
                                  <div class="form-group">
                                    <label for="email">E-mail Address</label>
                                    <input name="email" type="text" value="<?= isset($rec['email']) ? $rec['email'] : set_value('email') ?>" class="form-control <?= $errors['email'] ? 'is-invalid':'is-valid' ?>" id="email" placeholder="E-mail Address">
                                      <?php if($errors['email']): ?>
                                        <div class="invalid-feedback">
                                          <?= $errors['email'] ?>
                                        </div>
                                      <?php endif; ?>
                                  </div>
                                </div>
                              </div>

                          <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-6 offset-md-3">
                                    <div class="form-group">
                                      <label for="dental_insurance">Dental Insurance</label>
                                      <input name="dental_insurance" type="text" value="<?= isset($rec['dental_insurance']) ? $rec['dental_insurance'] : set_value('dental_insurance') ?>" class="form-control <?= $errors['dental_insurance'] ? 'is-invalid':'is-valid' ?>" id="dental_insurance" placeholder="Dental Insurance">
                                        <?php if($errors['dental_insurance']): ?>
                                          <div class="invalid-feedback">
                                            <?= $errors['dental_insurance'] ?>
                                          </div>
                                        <?php endif; ?>
                                    </div>
                                  </div>
                                </div>

                            <div class="row">
                              <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                      <div class="form-group">
                                        <label for="guardian_name">Guardian Name</label>
                                        <input name="guardian_name" type="text" value="<?= isset($rec['guardian_name']) ? $rec['guardian_name'] : set_value('guardian_name') ?>" class="form-control <?= $errors['guardian_name'] ? 'is-invalid':'is-valid' ?>" id="guardian_name" placeholder="Guardian Name">
                                          <?php if($errors['guardian_name']): ?>
                                            <div class="invalid-feedback">
                                              <?= $errors['guardian_name'] ?>
                                            </div>
                                          <?php endif; ?>
                                      </div>
                                    </div>
                                  </div>

                              <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-6 offset-md-3">
                                        <div class="form-group">
                                          <label for="guardian_relation">Guardian Relation</label>
                                          <input name="guardian_relation" type="text" value="<?= isset($rec['guardian_relation']) ? $rec['guardian_relation'] : set_value('guardian_relation') ?>" class="form-control <?= $errors['guardian_relation'] ? 'is-invalid':'is-valid' ?>" id="guardian_relation" placeholder="Guardian Relation">
                                            <?php if($errors['guardian_relation']): ?>
                                              <div class="invalid-feedback">
                                                <?= $errors['guardian_relation'] ?>
                                              </div>
                                            <?php endif; ?>
                                        </div>
                                      </div>
                                    </div>

                              <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-6 offset-md-3">
                                        <div class="form-group">
                                          <label for="previous_dentist">Previous Dentist</label>
                                          <input name="previous_dentist" type="text" value="<?= isset($rec['previous_dentist']) ? $rec['previous_dentist'] : set_value('previous_dentist') ?>" class="form-control <?= $errors['previous_dentist'] ? 'is-invalid':'is-valid' ?>" id="previous_dentist" placeholder="Previous Dentist">
                                            <?php if($errors['previous_dentist']): ?>
                                              <div class="invalid-feedback">
                                                <?= $errors['previous_dentist'] ?>
                                              </div>
                                            <?php endif; ?>
                                        </div>
                                      </div>
                                    </div>

                              <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-6 offset-md-3">
                                        <div class="form-group">
                                          <label for="last_dental_visit">Last Dental Visit</label>
                                          <input name="last_dental_visit" type="date" value="<?= isset($rec['last_dental_visit']) ? $rec['last_dental_visit'] : set_value('last_dental_visit') ?>" class="form-control <?= $errors['last_dental_visit'] ? 'is-invalid':'is-valid' ?>" id="last_dental_visit">
                                            <?php if($errors['last_dental_visit']): ?>
                                              <div class="invalid-feedback">
                                                <?= $errors['last_dental_visit'] ?>
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
