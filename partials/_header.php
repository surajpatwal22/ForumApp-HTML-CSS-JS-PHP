<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand  px-2 text-white" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link px-2 text-white active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-2 text-white" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link px-2 text-white" aria-disabled="true">Contact</a>
        </li>
      </ul>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
          aria-label="Search">
      </form>

      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal"
          data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn btn-warning " data-bs-toggle="modal"
          data-bs-target="#signupModal">Sign-up</button>
      </div>
    </div>
  </div>
</nav>

<?php
require 'partials/_loginModal.php';
require 'partials/_signupModal.php';
?>