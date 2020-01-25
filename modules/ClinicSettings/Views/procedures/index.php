 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2"> 
    <?php user_add_link('dental-procedures', $_SESSION['userPermmissions']) ?>
   </div> 
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Procedure Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($procedures as $procedure): ?>
      <tr id="<?php echo $procedure['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($procedure['procedure_name']) ?></td>
        <td><?= ucwords($procedure['description']) ?></td>
        <td><?= ucwords($procedure['price']) ?></td>
        <td class="text-center">
          <?php 
            users_action('dental-procedures', $_SESSION['userPermmissions'], $procedure['id']);
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
    <?php paginater('dental-procedures', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>