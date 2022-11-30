<script type="text/javascript">
  document.title = 'Fields';
</script> 
<div class="col-lg-12">
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Fields</h1>
          <a href="/" class="btn btn-success">Create</a>
          <a href="?page=projects" class="btn btn-success">Projects</a>
          <a href="?page=tasks" class="btn btn-success">Tasks</a>
      </header>
      <div class="panel-body">
        <table id="service_table" class="display">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Status</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = 'webpr1';
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM projects";
          $result = $conn->query($sql); 
          $conn->close();
          foreach ($result as $a) {
            ?>
              <tr>
                <td><?php echo $a['project_id'] ?></td>
                <td><?php echo $a['project_title'] ?></td>
                <td><?php echo $a['project_status'] ?></td>
                <td><?php echo $a['project_start'] ?></td>
                <td><?php echo $a['project_end'] ?></td>
                <td>
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
      { "bSortable": false, "aTargets": [ 0,5 ] }
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
</div>
