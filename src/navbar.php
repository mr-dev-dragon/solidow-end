
 
  <nav class="navbar  container navbar-expand-lg navbar-dark bg-primary" fixed-top" >
    <button  style="z-index: 100;color:#fff; " class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end "  tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-primary">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          <?php include "src/logos/logo.php" ?>
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a style="  color: black;"   class="nav-link active" aria-current="page" href="#">
              Features
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="  color: black;"   href="#">pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a style="  color: black;"   class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              about us
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">the <?php include "src/logos/group-icon.php" ?>group</a></li>
              <li><a class="dropdown-item" href="">about solidow</a></li>
              <li><a class="dropdown-item" href="https://github.com/Ahmed-Aoulad-Amar">About Ahmed</a></li>
              <li><a class="dropdown-item" href="https://github.com/blq200">About Ranya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link"  style="  color: #fff;"   aria-current="page" href="#"><?php include "src/logos/logo.php" ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  style="  color: #fff;" href="src/features.html">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="  color: #fff;" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a   style="  color: #fff;" class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              about us
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">AiRover group</a></li>
              <li><a class="dropdown-item" href="">about solidow</a></li>
              <li><a class="dropdown-item" href="https://github.com/Ahmed-Aoulad-Amar">About  Ahmed</a></li>
              <li><a class="dropdown-item" href="https://github.com/blq200">About Ranya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
    <?php include "header.php" ?>
