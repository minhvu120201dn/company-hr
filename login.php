<!-- <body>
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
</body> -->
  <!--Section: Section #5-->
  <section id="section-5">
    <!--Section: Demo-->
    <section class="pb-4">
  <div class="bg-white border rounded-5">
    
    <section class="w-100">
      <style>
        .bg-image-vertical {
          position: relative;
          overflow: hidden;
          background-repeat: no-repeat;
          background-position: right center;
          background-size: auto 100%;
        }

        @media (min-width: 1025px) {
          .h-custom-2 {
            height: 100%;
          }
        }
      </style>
      <div class="row">
        <div class="col-sm-4 text-black">

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Logo</span>
          </div>

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form style="width: 23rem;" action="backend/test.php" method="post">

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

              <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email..."/>
                <label class="form-label" for="email">Email address:</label><br>
              </div>

              <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter your password..."/>
                <i class="far fa-eye" onclick="togglePassword()" style="margin-left: -30px; cursor: pointer;"></i>
                <label class="form-label" for="password">Password:</label>
              </div>

              <div class="pt-1 mb-4">
                <button type="submit" class="btn btn-info btn-lg btn-block" type="button" name="login">Login</button>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
              <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

            </form>

          </div>

        </div>
        <div class="col-sm-8 px-0 d-none d-sm-block">
          <img src="login-img.png" alt="Login image"
            class="img-fluid" style="object-fit: cover; object-position: right;">
        </div>
      </div>
    </section>
    
  </div>
</section>

    <!--Section: Demo-->

    <!--Section: Code-->
    <section>
      <section class="collapse" id="example5">
        <div class="pb-4">

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