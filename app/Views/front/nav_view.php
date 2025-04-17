
<!--carrousel de promociones-->
<div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner carousel-promo">
    <div class="carousel-item active text-center">
        <h5>3 y 6 cuotas sin interes</h5>
    </div>
    <div class="carousel-item  text-center">
      <h5>Envio gratis en la compra de mas de $10000</h5>
    </div>
  </div>
</div>
<!--logo-->
<!--menu de navegacion-->
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-flex-column ">
  <!--logo-->
  <div class="navbar-flex centrado navbar-logo-busqueda" >
    <a  href="<?php echo base_url('inicio');?>">
      <img class="navbar-logo" src="assets/img/logo.png" alt="logo-voces-de-papel" width="100" height="100">
    </a>
  <div class="navbar-form" >
    <form class="d-flex " role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
    
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Mi cuenta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Carrito</a>
        </li>
      </ul>
    
  </div>

 <!--opciones en el menu-->
  <div class="centrado navbar-menu " >
    <hr>
   <button class="navbar-toggler navbar-hamb" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-items " id="navbarNavDropdown">
      <ul class="navbar-nav  navbar-ul">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Términos y Usos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>





<!--
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('contactos');?>"> Contactos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('terminosYUsos');?>"> Terminos y Usos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genero
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ciencia Ficción</a></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Clásicos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-disabled="true" href="<?php echo base_url('comercializacion');?>">Comercializacion</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('inicio');?>">Mi cuenta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url('contactos');?>"> Carrito</a>
        </li>
      </ul>
  </div>
  
</nav>
-->