<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DUT Lideres en diseño y acabados, Barrisol, May Mosaic, Stoneflex Ddiseño y acabo de interiores, Distribuidor Oficial México, CDMX">
    <meta property="og:description" content="DUT Lideres en diseño y acabados, Barrisol, May Mosaic, Stoneflex Ddiseño y acabo de interiores, Distribuidor Oficial México, CDMX" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/logos/default-favicon.ico'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title><?php echo isset($_title) ? $_title."-" : ""; ?>DUT - Diseño & Acabados</title>
</head>
<header>
	
</header>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="font:small-caption;background-color:rgba(0, 0, 0, 0.3); ">
	  	<a class="navbar-brand" href="<?php echo site_url('paginas/index');?>">
	  		<img style="width:130px;height:55px" src="<?php echo base_url('assets/img/logos/20180112 - DUT - LOGO-06-07 (003).png'); ?>">
	  	</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yomero" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="yomero" style="position: absolute;right:0;">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      	<li class="nav-item">
		        	<a class="nav-link" href="<?php echo site_url('paginas/about');?>">Nosotros 
		        		<span class="sr-only">(current)</span>
		        	</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="<?php echo site_url('paginas/estudio');?>">Estudio</a>
		      	</li>
		      	<li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="#" id="down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          		+ Barrisol
		        	</a>
		        	<div class="dropdown-menu" aria-labelledby="down" style="font:small-caption;">
		          		<a class="dropdown-item" href="<?php echo site_url('paginas/barrisolabout');?>">¿QUE ES BARRISOL?</a>
		          		<a class="dropdown-item" href="<?php echo site_url('paginas/caracteristicasgenerales');?>">Caracteristicas Generales</a>
		          		<div class="dropdown-divider"></div>
		          		<a class="dropdown-item" href="<?php echo site_url('paginas/caracteristicastecnicas');?>">Caracteristicas Técnicas</a>
		          		<a class="dropdown-item" href="<?php echo site_url('paginas/acustico');?>">Acústico</a>
		          		<a class="dropdown-item" href="<?php echo site_url('paginas/traslucido');?>">Traslúcido</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/arcolis');?>">Arcolis</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/artolis');?>">Artolis</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/clim');?>">Clim</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/ELT3D');?>">Elt 3d</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/formas3d');?>">Formas 3D</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/mirror');?>">Mirror</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/reciclados');?>">Reciclados</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/creadesign');?>">Creadesign</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/materiales');?>">Materiales</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/mantenimiento');?>">MANTENIMIENTO</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/preguntas_frecuentes');?>">Preguntas Frecuentes</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/catalogos');?>">CATÁLOGOS</a>
						<a class="dropdown-item" href="<?php echo site_url('paginas/videos');?>">VIDEOS</a>
		        	</div>
		      	</li>
			    <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('paginas/mymosaic');?>">My Mosaic</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('paginas/stoneflex');?>">Stoneflex</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('paginas/iluminacion');?>">Iluminación</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('paginas/arquitectura');?>">Arquitectura</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('paginas/blog');?>">Blog</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('paginas/contacto');?>">Contacto</a>
			    </li>
		    </ul>
	  	</div>
</nav>
<body>
	<?php                    
        if(isset($_view) && $_view)
            $this->load->view($_view);
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</body>
</html>