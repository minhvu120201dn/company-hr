<body>
    <div class="panel-body">
        <form action="backend/test.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="text" name="email" placeholder="Enter your email..."><br><br>
        </div>
        <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" placeholder="Enter your password...">
            <i class="far fa-eye" onclick="togglePassword()" style="margin-left: -30px; cursor: pointer;"></i><br><br>
        </div>
            <button type="submit" class="btn btn-secondary btn-md btn-block" name="login"> Log in </button>
        </form>
    </div>
</body>

<script>
function togglePassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>