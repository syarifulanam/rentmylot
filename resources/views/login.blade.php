<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login / Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <style>
    body {
      background-color: #1f2029;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: Arial, sans-serif;
    }

    .flip-container {
      width: 350px;
      perspective: 1000px;
    }

    .card-flip {
      position: relative;
      width: 100%;
      height: 420px;
      transform-style: preserve-3d;
      transition: transform 0.8s ease-in-out;
    }

    #toggleForm:checked ~ .card-flip {
      transform: rotateY(180deg);
    }

    .card-front,
    .card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      background: #2a2b38;
      padding: 30px;
      border-radius: 10px;
      color: #fff;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .card-back {
      transform: rotateY(180deg);
    }

    .form-control {
      background-color: #323345;
      color: #fff;
      border: none;
    }

    .form-control::placeholder {
      color: #ccc;
    }

    .form-control:focus {
      background-color: #3a3b4d;
      color: #fff;
    }

    .btn-yellow {
      background-color: #ffeba7;
      color: #0d1e56;
      font-weight: bold;
      transition: background-color 0.3s ease, color 0.3s ease;

    }

    .btn-yellow:hover {
    background-color: #e0cb78;
     color: #0e1d4f; 
    }

    .toggle-text {
      margin-top: 15px;
      text-align: center;
      color: #ffeba7;
      cursor: pointer;
    }

    .toggle-text:hover {
      text-decoration: underline;
    }

    input[type="checkbox"] {
      display: none;
    }

    /* Icon inside input styling */
    .input-icon {
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
      color: #ffeba7;
      font-size: 18px;
      pointer-events: none;
    }

    .input-with-icon {
      padding-left: 45px;
    }
    
  .logo-text {
  color: #ffeba7;
  font-size: 2.2rem;
  font-weight: bold;
  letter-spacing: 1px;
  }

   .logo-container {
   position: absolute;
   top: 30px;
   width: 100%;
 }

 .form-wrapper {
  max-width: 100%;
}
  </style>
  </head>
<body>
    <div class="mb-4 text-center logo-container">
    <h1 class="logo-text">RentMyLot</h1>
    </div>
    <div class="flip-container">
    <input type="checkbox" id="toggleForm" />
    <div class="card-flip">

      <!-- Login -->
      <div class="card-front">
        <h4 class="mb-4 text-center">Login</h4>
        <form action="login" method="POST">
        @csrf
        @if (session('error'))
        <div class="py-2 text-center alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
          <div class="mb-3 position-relative">
            <i class="input-icon uil uil-at"></i>
        <input type="email" name="email" class="form-control ps-5" placeholder="Email" required>
          </div>
          <div class="mb-3 position-relative">
            <i class="input-icon uil uil-lock-alt"></i>
        <input type="password" name="password" class="form-control ps-5" placeholder="Password" required>
          </div>
          <br>
          <div class="d-grid">
            <button type="submit" class="btn btn-yellow">Login</button>
          </div>
          <br>
        </form>
        <label for="toggleForm" class="toggle-text">Don't have an account? Sign Up</label>
      </div>

      <!-- Sign Up -->
           <div class="card-back">
        <h4 class="mb-4 text-center">Sign Up</h4>
        <form action="register" method="POST">
  @csrf
  <div class="mb-3 position-relative">
    <i class="input-icon uil uil-user"></i>
    <input
      type="text"
      name="name"
      class="form-control input-with-icon"
      placeholder="Full Name"
      required
    />
  </div>
  <div class="mb-3 position-relative">
    <i class="input-icon uil uil-at"></i>
    <input
      type="email"
      name="email"
      class="form-control input-with-icon"
      placeholder="Email"
      required
    />
  </div>
  <div class="mb-3 position-relative">
    <i class="input-icon uil uil-lock-alt"></i>
    <input
      type="password"
      name="password"
      class="form-control input-with-icon"
      placeholder="Password"
      required
    />
  </div>
  <br>
  <div class="d-grid">
    <button type="submit" class="btn btn-yellow">Register</button>
  </div>
</form>
        <label for="toggleForm" class="toggle-text"
          >Already have an account? Login</label>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>