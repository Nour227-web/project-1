<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - See The Best World</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="login.css" />
  </head>
  <body class="d-flex justify-content-center align-items-center min-vh-100 m-0">
    <div class="login-card ">
      <!-- Header Section -->
      <div class="card-header-custom text-center">
        <h2>Login here to see the best world</h2>
      </div>

      <!-- Banner Image -->
      <div class="image-wrapper">
        <img
          src="images/d7d79b63-5631-4460-8382-19a56091e839.jpg"
          alt="Predator Laptop"
          class="img-fluid"
        />
      </div>

      <!-- Form Section -->
      <form action="home.php" method="post" class="login-form">
        <div class="mb-3">
          <label for="username" class="form-label">Your Email:</label>
          <input
            type="email"
            id="username"
            name="username"
            class="form-control"
            placeholder="enter your email..."
            required
          />
        </div>

        <div class="mb-3">
          <label for="pass" class="form-label">Your Password:</label>
          <input
            type="password"
            id="pass"
            name="pass"
            class="form-control"
            placeholder="••••••••"
            required
          />
        </div>

        <button type="submit" class="btn btn-submit w-100 mt-2">Submit</button>
      </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>