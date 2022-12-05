<?php
    include "./header.php";
    include "../utils.php";
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
            <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header" style="display: flex;justify-content: space-between;position: relative;align-items: center;">
                  <h4 class="modal-title" id="exampleModalLabel1" style="font-weight:700;font-size:20px;"> Add Project</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-left:75%;">
                    <span aria-hidden="true">&times;</span></button>
              </div>
              <form method="post" action="./projects_processing.php" id="btnSubmit" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Project Title</label>
                          <input type="text" name="protitle" class="form-control" id="recipient-name1" minlength="8" maxlength="250" placeholder="">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Project Start Date</label>
                          <input type="text" name="startdate" class="form-control datepicker" id="recipient-name1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Project End Date</label>
                          <input type="text" name="enddate" class="form-control datepicker" id="recipient-name1" required="" placeholder="">
                        </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">Summery</label>
                          <textarea class="form-control" name="summery" id="message-text1" placeholder="" style="resize: none;"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="message-text" class="control-label">Details</label>
                          <textarea class="form-control" name="details" id="message-text1" minlength="10" maxlength="1300" rows="8" placeholder="" style="resize: none;"> </textarea>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Status</label>
                          <select class="form-control custom-select valid" data-placeholder="Choose a Category" tabindex="1" name="prostatus" required="">
                            <option value="upcoming">Upcoming</option>
                            <option value="complete">Complete</option>
                            <option value="running">Running</option>
                          </select>
                      </div>
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
          <a href="?page=projects" class="btn btn-success">Projects</a>
          <a href="?page=fields" class="btn btn-success">Fields</a>
      </header>
      <div class="panel-body">
        <table id="service_table" class="display">
          <thead>
            <tr>
              <th>Title</th>
              <th>Status</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
          $conn = connect_to_database();
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM projects";
          $result = $conn->query($sql); 
          $conn->close();
          foreach ($result as $a) {
            ?>
              <tr>
                <td><?php echo $a['project_title'] ?></td>
                <td><?php echo $a['project_status'] ?></td>
                <td><?php echo $a['project_start'] ?></td>
                <td><?php echo $a['project_end'] ?></td>
                <td>
                  <a class="fa fa-eye btn btn-info btn-sm" href=""></a>
                  <a class="fa fa-pencil btn btn-warning btn-sm" href=""></a>
                  <a class="fa fa-trash btn btn-danger btn-sm" href="projects_processing.php?id=<?php echo $a['project_id'] ?>"></a>
                </td>
          
              </tr>
            <?php 
              }
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
      { "bSortable": false, "aTargets": [ 4 ] }
    ]
            }
          );
        });

    </script>
      </div>
    </section>
  </div>
</div>
</div>
