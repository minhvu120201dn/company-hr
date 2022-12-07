<?php


    include "./header.php";
    include "../utils.php";
    if (!isset($_SESSION['loggedin'])){
        header("Location: ../login/login.php");
    }
    ?>
<script type="text/javascript">
  document.title = 'Tasks';
</script> 
<div class="col-lg-12">
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Tasks</h1>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >Create</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document" >
              <div class="modal-content">
              <div class="modal-header" style="display: flex;justify-content: space-between;position: relative;align-items: center;">
                  <h4 class="modal-title" id="exampleModalLabel1" style="font-weight:700;font-size:20px;width:120px;"> Add Task</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-left:75%;">
                    <span aria-hidden="true">&times;</span></button>
              </div>
              
              <form method="post" action="./create_tasks.php" id="btnSubmit" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="row">  
      
                      <div class="form-group">
                        <label class="control-label">Department Name</label>
                          <input type="text" name="protitle" class="form-control" id="recipient-name1" minlength="8" maxlength="250" placeholder="" required oninvalid="this.setCustomValidity('Please enter project title')" oninput="this.setCustomValidity('')">
                      </div>
                   
                        <div class="form-group">
                      <label class="control-label">Manager</label>
                        <select class="select2 form-control custom-select col-md-4"  multiple="multiple" tabindex="1" name="proid[]" id="inputState1">
                        <?php
                        $conn = connect_to_database();
                         if ($conn->connect_error) {
                             die("Connection failed: " . $conn->connect_error);
                         }
                           $sql1 = "SELECT * FROM employees WHERE role ='Manager'";
                           $result1 = $conn->query($sql1);
          foreach ($result1 as $a) { 
              ?>
                          <option value="<?php echo $a['email'] ?>"><?php echo $a['first_name'] ?></option>          
                          <?php }?> 
                        </select>
                  </div>
                  <div class="form-group">
                      <label class="control-label">Employee</label>
                        <select class="select2 form-control custom-select col-md-4"  multiple="multiple" tabindex="1" name="proid[]" id="inputState2">
                        <?php
                        $conn = connect_to_database();
                         if ($conn->connect_error) {
                             die("Connection failed: " . $conn->connect_error);
                         }
                           $sql1 = "SELECT * FROM employees";
                           $result1 = $conn->query($sql1);
          foreach ($result1 as $a) { 
              ?>
                          <option value="<?php echo $a['email'] ?>"><?php echo $a['first_name'] ?></option>          
                          <?php }?> 
                        </select>
                  </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
             
              </div>
            </div>
          </div>
          <a href="http://localhost/Webpr/projects" class="btn btn-success">Projects</a>
      </header>
      <div class="panel-body">
        <table id="service_table" class="display">
          <thead>
            <tr>
              <th>Project Title</th>
              <th>Task Title</th>
              <th>Status</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Assigned Employee</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
          $conn = connect_to_database();
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM tasks";
          $result = $conn->query($sql); 
          foreach ($result as $a) {
            $id = $a['project_id'];
            $sql1 = "SELECT * FROM projects WHERE project_id='$id' ";
            $result1 = $conn->query($sql1); 
            foreach ($result1 as $b) {
            ?>
              <tr>
                <td><?php echo $b['project_title'] ?></td>
                <td><?php echo $a['task_title'] ?></td>
                <td><?php echo $a['task_status'] ?></td>
                <td><?php echo $a['task_start'] ?></td>
                <td><?php echo $a['task_end'] ?></td>
                <td><?php echo $a['assign_user'] ?></td>
                <td>
                  <a class="fa fa-eye btn btn-info btn-sm" href="details_tasks.php?id=<?php echo $a['task_id'] ?>"></a>
                  <a class="fa fa-pencil btn btn-warning btn-sm" href="edit_tasks.php?id=<?php echo $a['task_id'] ?>"></a>
                  <a class="fa fa-trash btn btn-danger btn-sm" href="delete_tasks.php?id=<?php echo $a['task_id'] ?>"></a>
                </td>
          
              </tr>
            <?php 
            }
              }
            $conn->close();
            ?>
          </tbody>
        </table>
        <script type="text/javascript">
      $(document).ready(
        function() {
          $('#service_table').DataTable(
            {
    "order": [],
    "aoColumnDefs": [
      { "bSortable": false, "aTargets": [ 6 ] ,
         "sWidth": "111px", "aTargets": [6] 
      }
    ]
            }
          );
        });
        $( document ).ready(function(){
     $('#inputState').on('change', function(){
           $('#recipient-name').val($('#inputState').find(':selected').data('start')),
           $('#recipient-name1').val($('#inputState').find(':selected').data('end'))
          
     }),
     $('#inputState1').select2({
      width: '100%'
}),
$('#inputState2').select2({
      width: '100%'
});


})
    </script>
      </div>
    </section>
  </div>
</div>
</div>
