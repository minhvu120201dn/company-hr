<script type="text/javascript">
  document.title = 'Categories';
</script> 
<div class="col-lg-12">
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Categories</h1>
          <a href="/" class="btn btn-success">Create</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Status</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th class="no-sort"></th>
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
      </div>
    </section>
  </div>
</div>
</div>
</div>
