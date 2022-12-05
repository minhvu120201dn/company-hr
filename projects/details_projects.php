<?php
    include "../index.php";
    include "./header.php";
    ?>
<script type="text/javascript">
  document.title = 'Project Detail';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Project Detail</h1>
        <a href="index.php" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
        <?php
$conn = connect_to_database();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $id = $_GET['id'];
    $sql = "SELECT * FROM projects WHERE project_id='$id'";
    $result = $conn->query($sql); 
          $conn->close();
          foreach ($result as $a) {
            ?>
      <dt>ID</dt><dd><?php echo $a['project_id'] ?></dd>
          <dt>Name</dt><dd><?php echo $a['project_title'] ?></dd>
        </dl>
      </div>
    </section>
  </div>
</div>
<?php
          }
?>