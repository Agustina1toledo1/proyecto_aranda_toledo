<!--<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url('plantilla');?>"> Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('contactos');?>"> Contactos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('terminosYUsos');?>"> Terminos y Usos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"> Disabled</a>
      </li>
    </ul>
  </div>
</nav>-->
<div id="carouselExampleCaptions" class="carousel slide">
  

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    
    <div class="carousel-item active text-center">
        <h5>3 y 6 cuotas sin interes</h5>
      
    </div>
    <div class="carousel-item  text-center">
      <h5>Envio gratis en la compra de mas de 10000</h5>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary" > 
  <div class="container-fluid">
    <a class="navbar-brand " href="#"><img src="assets/img/voces.jpg" alt="logo-voces_de_papel" width="100"  ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url('plantilla');?>"> Inicio</a>
      </li>
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
            <li><a class="dropdown-item" href="#">Clásicos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex " role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>