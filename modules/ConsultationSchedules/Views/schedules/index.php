 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('consultation_schedules', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Patient</th>
        <th>Target Date Start</th>
        <th>Target Date End</th>
        <th>Venue</th>
        <th>Dentist</th>
        <th>Consultation Schedule</th>
        <th>Approved by</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($schedules as $schedule): ?>
      <tr id="<?php echo $schedule['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($schedule['patient_id']) ?></td>
        <td><?= ucwords($schedule['target_date_start']) ?></td>
        <td><?= ucwords($schedule['target_date_end']) ?></td>
        <td><?= ucwords($schedule['venue']) ?></td>
        <td><?= ucwords($schedule['dentist_id']) ?></td>
        <td><?= ucwords($schedule['consultation_sched']) ?></td>
        <td><?= ucwords($schedule['is_approved']) ?></td>
        <td class="text-center">
          <?php
            users_action('consultation_schedules', $_SESSION['userPermmissions'], $schedule['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>

  </table>
 </div>
<hr>

<div class="row">
  <div class="col-md-6 offset-md-6">
    <?php paginater('consultation-schedules', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
