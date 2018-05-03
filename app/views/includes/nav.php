<?php 
session_start(); 
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="img/Logo-ITM-01.png" width="80px;" alt="Responsive image">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/ITM/login">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <div class="form-inline  mx-auto">
      <?php
      if(isset($_SESSION['user'])){
        ?>
        <div class="dropdown">
          <button class="btn  btn-info  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo (!empty($_SESSION['user']) ? $_SESSION['user'] : "Usuario");?>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="/ITM/LOGIN/cerrarSeccion">Cerrar session</a>
          </div>
        </div>
        <?php
      }else{
        ?>
        <a href="/ITM/LOGIN"  class="btn btn-success"> 
        iniciar seccion
        <i class="fas fa-sign-out-alt"></i>
        </a>
        <?php
      }
      ?>
    </div>
  </div>
</nav>
