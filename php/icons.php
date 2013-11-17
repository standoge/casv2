<?php 
	include("sesion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<script>
	    !window.jQuery && document.write("<script src='../js/jquery.min.js'><\/script>");
	</script>
	<title>C.A.S | </title>
</head>

<body>
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<a href="home.php" class="navbar-brand">Computerized Accountancy System &#0153;</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">

					<li><a href="home.php">Inicio</a></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Asientos <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="asiento-general.php">Generales</a></li>
							<li><a href="#">Simples</a></li>
							<li><a href="#">Facturas Recibidas</a></li>
							<li><a href="#">Facturas Emitidas</a></li>
							<li><a href="#">Diario</a></li>
							<li><a href="#">Descuadros</a></li>
							<li><a href="#">Buscar / Editar</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuentas <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Nueva cuenta</a></li>
							<li><a href="#">Extracto de Subcuenta</a></li>
							<li><a href="#">Extracto de Cuenta</a></li>
							<li><a href="#">Extracto de Subgrupo</a></li>
							<li><a href="#">Listado de Subcuentas</a></li>
							<li><a href="#">Listado de Cuentas</a></li>
							<li><a href="#">Listado de Subgrupos</a></li>
							<li><a href="#">Editar</a></li>
							<li><a href="#">Borrar cuenta</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Otros <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Balances</a></li>
							<li><a href="#">Otros Listados</a></li>
							<li><a href="#">Procesos Periódicos</a></li>
							<li><a href="#">Control de tablas</a></li>
							<li><a href="#">Búsquedas</a></li>
							<li><a href="#">Listados</a></li>
							<li><a href="#">Otros</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#acerca" data-toggle="modal">Acerca de C.A.S</a></li>
							<li><a href="#creditos" data-toggle="modal">Sobre los programadores</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform:capitalize">
							<?php echo $_SESSION['usuario']; ?> 
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="cambio-pw.php">Cambiar Contraseña</a></li>
							<li><a href="salir.php">Cerrar sesión</a></li>
							<li><a href="ayuda.php">Ayuda</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container" id="contenido">
		<div class="row row-offcanvas row-offcanvas-right">
			<div class="col-xs-12 col-sm-9">
				<div class="page-header">
        			<h3>Título de la página</h3>
        		</div>
        		<div class="row">
        			<div class="col-md-12">
        				<li><span class="glyphicon glyphicon-adjust"></span> .glyphicon .glyphicon-adjust</li>
      <li><span class="glyphicon glyphicon-align-center"></span> .glyphicon .glyphicon-align-center</li>
      <li><span class="glyphicon glyphicon-align-justify"></span> .glyphicon .glyphicon-align-justify</li>
      <li><span class="glyphicon glyphicon-align-left"></span> .glyphicon .glyphicon-align-left</li>
      <li><span class="glyphicon glyphicon-align-right"></span> .glyphicon .glyphicon-align-right</li>
      <li><span class="glyphicon glyphicon-arrow-down"></span> .glyphicon .glyphicon-arrow-down</li>
      <li><span class="glyphicon glyphicon-arrow-left"></span> .glyphicon .glyphicon-arrow-left</li>
      <li><span class="glyphicon glyphicon-arrow-right"></span> .glyphicon .glyphicon-arrow-right</li>
      <li><span class="glyphicon glyphicon-arrow-up"></span> .glyphicon .glyphicon-arrow-up</li>
      <li><span class="glyphicon glyphicon-asterisk"></span> .glyphicon .glyphicon-asterisk</li>
      <li><span class="glyphicon glyphicon-backward"></span> .glyphicon .glyphicon-backward</li>
      <li><span class="glyphicon glyphicon-ban-circle"></span> .glyphicon .glyphicon-ban-circle</li>
      <li><span class="glyphicon glyphicon-barcode"></span> .glyphicon .glyphicon-barcode</li>
      <li><span class="glyphicon glyphicon-bell"></span> .glyphicon .glyphicon-bell</li>
      <li><span class="glyphicon glyphicon-bold"></span> .glyphicon .glyphicon-bold</li>
      <li><span class="glyphicon glyphicon-book"></span> .glyphicon .glyphicon-book</li>
      <li><span class="glyphicon glyphicon-bookmark"></span> .glyphicon .glyphicon-bookmark</li>
      <li><span class="glyphicon glyphicon-briefcase"></span> .glyphicon .glyphicon-briefcase</li>
      <li><span class="glyphicon glyphicon-bullhorn"></span> .glyphicon .glyphicon-bullhorn</li>
      <li><span class="glyphicon glyphicon-calendar"></span> .glyphicon .glyphicon-calendar</li>
      <li><span class="glyphicon glyphicon-camera"></span> .glyphicon .glyphicon-camera</li>
      <li><span class="glyphicon glyphicon-certificate"></span> .glyphicon .glyphicon-certificate</li>
      <li><span class="glyphicon glyphicon-check"></span> .glyphicon .glyphicon-check</li>
      <li><span class="glyphicon glyphicon-chevron-down"></span> .glyphicon .glyphicon-chevron-down</li>
      <li><span class="glyphicon glyphicon-chevron-left"></span> .glyphicon .glyphicon-chevron-left</li>
      <li><span class="glyphicon glyphicon-chevron-right"></span> .glyphicon .glyphicon-chevron-right</li>
      <li><span class="glyphicon glyphicon-chevron-up"></span> .glyphicon .glyphicon-chevron-up</li>
      <li><span class="glyphicon glyphicon-circle-arrow-down"></span> .glyphicon .glyphicon-circle-arrow-down</li>
      <li><span class="glyphicon glyphicon-circle-arrow-left"></span> .glyphicon .glyphicon-circle-arrow-left</li>
      <li><span class="glyphicon glyphicon-circle-arrow-right"></span> .glyphicon .glyphicon-circle-arrow-right</li>
      <li><span class="glyphicon glyphicon-circle-arrow-up"></span> .glyphicon .glyphicon-circle-arrow-up</li>
      <li><span class="glyphicon glyphicon-cloud"></span> .glyphicon .glyphicon-cloud</li>
      <li><span class="glyphicon glyphicon-cloud-download"></span> .glyphicon .glyphicon-cloud-download</li>
      <li><span class="glyphicon glyphicon-cloud-upload"></span> .glyphicon .glyphicon-cloud-upload</li>
      <li><span class="glyphicon glyphicon-cog"></span> .glyphicon .glyphicon-cog</li>
      <li><span class="glyphicon glyphicon-collapse-down"></span> .glyphicon .glyphicon-collapse-down</li>
      <li><span class="glyphicon glyphicon-collapse-up"></span> .glyphicon .glyphicon-collapse-up</li>
      <li><span class="glyphicon glyphicon-comment"></span> .glyphicon .glyphicon-comment</li>
      <li><span class="glyphicon glyphicon-compressed"></span> .glyphicon .glyphicon-compressed</li>
      <li><span class="glyphicon glyphicon-copyright-mark"></span> .glyphicon .glyphicon-copyright-mark</li>
      <li><span class="glyphicon glyphicon-credit-card"></span> .glyphicon .glyphicon-credit-card</li>
      <li><span class="glyphicon glyphicon-cutlery"></span> .glyphicon .glyphicon-cutlery</li>
      <li><span class="glyphicon glyphicon-dashboard"></span> .glyphicon .glyphicon-dashboard</li>
      <li><span class="glyphicon glyphicon-download"></span> .glyphicon .glyphicon-download</li>
      <li><span class="glyphicon glyphicon-download-alt"></span> .glyphicon .glyphicon-download-alt</li>
      <li><span class="glyphicon glyphicon-earphone"></span> .glyphicon .glyphicon-earphone</li>
      <li><span class="glyphicon glyphicon-edit"></span> .glyphicon .glyphicon-edit</li>
      <li><span class="glyphicon glyphicon-eject"></span> .glyphicon .glyphicon-eject</li>
      <li><span class="glyphicon glyphicon-envelope"></span> .glyphicon .glyphicon-envelope</li>
      <li><span class="glyphicon glyphicon-euro"></span> .glyphicon .glyphicon-euro</li>
      <li><span class="glyphicon glyphicon-exclamation-sign"></span> .glyphicon .glyphicon-exclamation-sign</li>
      <li><span class="glyphicon glyphicon-expand"></span> .glyphicon .glyphicon-expand</li>
      <li><span class="glyphicon glyphicon-export"></span> .glyphicon .glyphicon-export</li>
      <li><span class="glyphicon glyphicon-eye-close"></span> .glyphicon .glyphicon-eye-close</li>
      <li><span class="glyphicon glyphicon-eye-open"></span> .glyphicon .glyphicon-eye-open</li>
      <li><span class="glyphicon glyphicon-facetime-video"></span> .glyphicon .glyphicon-facetime-video</li>
      <li><span class="glyphicon glyphicon-fast-backward"></span> .glyphicon .glyphicon-fast-backward</li>
      <li><span class="glyphicon glyphicon-fast-forward"></span> .glyphicon .glyphicon-fast-forward</li>
      <li><span class="glyphicon glyphicon-file"></span> .glyphicon .glyphicon-file</li>
      <li><span class="glyphicon glyphicon-film"></span> .glyphicon .glyphicon-film</li>
      <li><span class="glyphicon glyphicon-filter"></span> .glyphicon .glyphicon-filter</li>
      <li><span class="glyphicon glyphicon-fire"></span> .glyphicon .glyphicon-fire</li>
      <li><span class="glyphicon glyphicon-flag"></span> .glyphicon .glyphicon-flag</li>
      <li><span class="glyphicon glyphicon-flash"></span> .glyphicon .glyphicon-flash</li>
      <li><span class="glyphicon glyphicon-floppy-disk"></span> .glyphicon .glyphicon-floppy-disk</li>
      <li><span class="glyphicon glyphicon-floppy-open"></span> .glyphicon .glyphicon-floppy-open</li>
      <li><span class="glyphicon glyphicon-floppy-remove"></span> .glyphicon .glyphicon-floppy-remove</li>
      <li><span class="glyphicon glyphicon-floppy-save"></span> .glyphicon .glyphicon-floppy-save</li>
      <li><span class="glyphicon glyphicon-floppy-saved"></span> .glyphicon .glyphicon-floppy-saved</li>
      <li><span class="glyphicon glyphicon-folder-close"></span> .glyphicon .glyphicon-folder-close</li>
      <li><span class="glyphicon glyphicon-folder-open"></span> .glyphicon .glyphicon-folder-open</li>
      <li><span class="glyphicon glyphicon-font"></span> .glyphicon .glyphicon-font</li>
      <li><span class="glyphicon glyphicon-forward"></span> .glyphicon .glyphicon-forward</li>
      <li><span class="glyphicon glyphicon-fullscreen"></span> .glyphicon .glyphicon-fullscreen</li>
      <li><span class="glyphicon glyphicon-gbp"></span> .glyphicon .glyphicon-gbp</li>
      <li><span class="glyphicon glyphicon-gift"></span> .glyphicon .glyphicon-gift</li>
      <li><span class="glyphicon glyphicon-glass"></span> .glyphicon .glyphicon-glass</li>
      <li><span class="glyphicon glyphicon-globe"></span> .glyphicon .glyphicon-globe</li>
      <li><span class="glyphicon glyphicon-hand-down"></span> .glyphicon .glyphicon-hand-down</li>
      <li><span class="glyphicon glyphicon-hand-left"></span> .glyphicon .glyphicon-hand-left</li>
      <li><span class="glyphicon glyphicon-hand-right"></span> .glyphicon .glyphicon-hand-right</li>
      <li><span class="glyphicon glyphicon-hand-up"></span> .glyphicon .glyphicon-hand-up</li>
      <li><span class="glyphicon glyphicon-hd-video"></span> .glyphicon .glyphicon-hd-video</li>
      <li><span class="glyphicon glyphicon-hdd"></span> .glyphicon .glyphicon-hdd</li>
      <li><span class="glyphicon glyphicon-header"></span> .glyphicon .glyphicon-header</li>
      <li><span class="glyphicon glyphicon-headphones"></span> .glyphicon .glyphicon-headphones</li>
      <li><span class="glyphicon glyphicon-heart"></span> .glyphicon .glyphicon-heart</li>
      <li><span class="glyphicon glyphicon-heart-empty"></span> .glyphicon .glyphicon-heart-empty</li>
      <li><span class="glyphicon glyphicon-home"></span> .glyphicon .glyphicon-home</li>
      <li><span class="glyphicon glyphicon-import"></span> .glyphicon .glyphicon-import</li>
      <li><span class="glyphicon glyphicon-inbox"></span> .glyphicon .glyphicon-inbox</li>
      <li><span class="glyphicon glyphicon-indent-left"></span> .glyphicon .glyphicon-indent-left</li>
      <li><span class="glyphicon glyphicon-indent-right"></span> .glyphicon .glyphicon-indent-right</li>
      <li><span class="glyphicon glyphicon-info-sign"></span> .glyphicon .glyphicon-info-sign</li>
      <li><span class="glyphicon glyphicon-italic"></span> .glyphicon .glyphicon-italic</li>
      <li><span class="glyphicon glyphicon-leaf"></span> .glyphicon .glyphicon-leaf</li>
      <li><span class="glyphicon glyphicon-link"></span> .glyphicon .glyphicon-link</li>
      <li><span class="glyphicon glyphicon-list"></span> .glyphicon .glyphicon-list</li>
      <li><span class="glyphicon glyphicon-list-alt"></span> .glyphicon .glyphicon-list-alt</li>
      <li><span class="glyphicon glyphicon-lock"></span> .glyphicon .glyphicon-lock</li>
      <li><span class="glyphicon glyphicon-log-in"></span> .glyphicon .glyphicon-log-in</li>
      <li><span class="glyphicon glyphicon-log-out"></span> .glyphicon .glyphicon-log-out</li>
      <li><span class="glyphicon glyphicon-magnet"></span> .glyphicon .glyphicon-magnet</li>
      <li><span class="glyphicon glyphicon-map-marker"></span> .glyphicon .glyphicon-map-marker</li>
      <li><span class="glyphicon glyphicon-minus"></span> .glyphicon .glyphicon-minus</li>
      <li><span class="glyphicon glyphicon-minus-sign"></span> .glyphicon .glyphicon-minus-sign</li>
      <li><span class="glyphicon glyphicon-move"></span> .glyphicon .glyphicon-move</li>
      <li><span class="glyphicon glyphicon-music"></span> .glyphicon .glyphicon-music</li>
      <li><span class="glyphicon glyphicon-new-window"></span> .glyphicon .glyphicon-new-window</li>
      <li><span class="glyphicon glyphicon-off"></span> .glyphicon .glyphicon-off</li>
      <li><span class="glyphicon glyphicon-ok"></span> .glyphicon .glyphicon-ok</li>
      <li><span class="glyphicon glyphicon-ok-circle"></span> .glyphicon .glyphicon-ok-circle</li>
      <li><span class="glyphicon glyphicon-ok-sign"></span> .glyphicon .glyphicon-ok-sign</li>
      <li><span class="glyphicon glyphicon-open"></span> .glyphicon .glyphicon-open</li>
      <li><span class="glyphicon glyphicon-paperclip"></span> .glyphicon .glyphicon-paperclip</li>
      <li><span class="glyphicon glyphicon-pause"></span> .glyphicon .glyphicon-pause</li>
      <li><span class="glyphicon glyphicon-pencil"></span> .glyphicon .glyphicon-pencil</li>
      <li><span class="glyphicon glyphicon-phone"></span> .glyphicon .glyphicon-phone</li>
      <li><span class="glyphicon glyphicon-phone-alt"></span> .glyphicon .glyphicon-phone-alt</li>
      <li><span class="glyphicon glyphicon-picture"></span> .glyphicon .glyphicon-picture</li>
      <li><span class="glyphicon glyphicon-plane"></span> .glyphicon .glyphicon-plane</li>
      <li><span class="glyphicon glyphicon-play"></span> .glyphicon .glyphicon-play</li>
      <li><span class="glyphicon glyphicon-play-circle"></span> .glyphicon .glyphicon-play-circle</li>
      <li><span class="glyphicon glyphicon-plus"></span> .glyphicon .glyphicon-plus</li>
      <li><span class="glyphicon glyphicon-plus-sign"></span> .glyphicon .glyphicon-plus-sign</li>
      <li><span class="glyphicon glyphicon-print"></span> .glyphicon .glyphicon-print</li>
      <li><span class="glyphicon glyphicon-pushpin"></span> .glyphicon .glyphicon-pushpin</li>
      <li><span class="glyphicon glyphicon-qrcode"></span> .glyphicon .glyphicon-qrcode</li>
      <li><span class="glyphicon glyphicon-question-sign"></span> .glyphicon .glyphicon-question-sign</li>
      <li><span class="glyphicon glyphicon-random"></span> .glyphicon .glyphicon-random</li>
      <li><span class="glyphicon glyphicon-record"></span> .glyphicon .glyphicon-record</li>
      <li><span class="glyphicon glyphicon-refresh"></span> .glyphicon .glyphicon-refresh</li>
      <li><span class="glyphicon glyphicon-registration-mark"></span> .glyphicon .glyphicon-registration-mark</li>
      <li><span class="glyphicon glyphicon-remove"></span> .glyphicon .glyphicon-remove</li>
      <li><span class="glyphicon glyphicon-remove-circle"></span> .glyphicon .glyphicon-remove-circle</li>
      <li><span class="glyphicon glyphicon-remove-sign"></span> .glyphicon .glyphicon-remove-sign</li>
      <li><span class="glyphicon glyphicon-repeat"></span> .glyphicon .glyphicon-repeat</li>
      <li><span class="glyphicon glyphicon-resize-full"></span> .glyphicon .glyphicon-resize-full</li>
      <li><span class="glyphicon glyphicon-resize-horizontal"></span> .glyphicon .glyphicon-resize-horizontal</li>
      <li><span class="glyphicon glyphicon-resize-small"></span> .glyphicon .glyphicon-resize-small</li>
      <li><span class="glyphicon glyphicon-resize-vertical"></span> .glyphicon .glyphicon-resize-vertical</li>
      <li><span class="glyphicon glyphicon-retweet"></span> .glyphicon .glyphicon-retweet</li>
      <li><span class="glyphicon glyphicon-road"></span> .glyphicon .glyphicon-road</li>
      <li><span class="glyphicon glyphicon-save"></span> .glyphicon .glyphicon-save</li>
      <li><span class="glyphicon glyphicon-saved"></span> .glyphicon .glyphicon-saved</li>
      <li><span class="glyphicon glyphicon-screenshot"></span> .glyphicon .glyphicon-screenshot</li>
      <li><span class="glyphicon glyphicon-sd-video"></span> .glyphicon .glyphicon-sd-video</li>
      <li><span class="glyphicon glyphicon-search"></span> .glyphicon .glyphicon-search</li>
      <li><span class="glyphicon glyphicon-send"></span> .glyphicon .glyphicon-send</li>
      <li><span class="glyphicon glyphicon-share"></span> .glyphicon .glyphicon-share</li>
      <li><span class="glyphicon glyphicon-share-alt"></span> .glyphicon .glyphicon-share-alt</li>
      <li><span class="glyphicon glyphicon-shopping-cart"></span> .glyphicon .glyphicon-shopping-cart</li>
      <li><span class="glyphicon glyphicon-signal"></span> .glyphicon .glyphicon-signal</li>
      <li><span class="glyphicon glyphicon-sort"></span> .glyphicon .glyphicon-sort</li>
      <li><span class="glyphicon glyphicon-sort-by-alphabet"></span> .glyphicon .glyphicon-sort-by-alphabet</li>
      <li><span class="glyphicon glyphicon-sort-by-alphabet-alt"></span> .glyphicon .glyphicon-sort-by-alphabet-alt</li>
      <li><span class="glyphicon glyphicon-sort-by-attributes"></span> .glyphicon .glyphicon-sort-by-attributes</li>
      <li><span class="glyphicon glyphicon-sort-by-attributes-alt"></span> .glyphicon .glyphicon-sort-by-attributes-alt</li>
      <li><span class="glyphicon glyphicon-sort-by-order"></span> .glyphicon .glyphicon-sort-by-order</li>
      <li><span class="glyphicon glyphicon-sort-by-order-alt"></span> .glyphicon .glyphicon-sort-by-order-alt</li>
      <li><span class="glyphicon glyphicon-sound-5-1"></span> .glyphicon .glyphicon-sound-5-1</li>
      <li><span class="glyphicon glyphicon-sound-6-1"></span> .glyphicon .glyphicon-sound-6-1</li>
      <li><span class="glyphicon glyphicon-sound-7-1"></span> .glyphicon .glyphicon-sound-7-1</li>
      <li><span class="glyphicon glyphicon-sound-dolby"></span> .glyphicon .glyphicon-sound-dolby</li>
      <li><span class="glyphicon glyphicon-sound-stereo"></span> .glyphicon .glyphicon-sound-stereo</li>
      <li><span class="glyphicon glyphicon-star"></span> .glyphicon .glyphicon-star</li>
      <li><span class="glyphicon glyphicon-star-empty"></span> .glyphicon .glyphicon-star-empty</li>
      <li><span class="glyphicon glyphicon-stats"></span> .glyphicon .glyphicon-stats</li>
      <li><span class="glyphicon glyphicon-step-backward"></span> .glyphicon .glyphicon-step-backward</li>
      <li><span class="glyphicon glyphicon-step-forward"></span> .glyphicon .glyphicon-step-forward</li>
      <li><span class="glyphicon glyphicon-stop"></span> .glyphicon .glyphicon-stop</li>
      <li><span class="glyphicon glyphicon-subtitles"></span> .glyphicon .glyphicon-subtitles</li>
      <li><span class="glyphicon glyphicon-tag"></span> .glyphicon .glyphicon-tag</li>
      <li><span class="glyphicon glyphicon-tags"></span> .glyphicon .glyphicon-tags</li>
      <li><span class="glyphicon glyphicon-tasks"></span> .glyphicon .glyphicon-tasks</li>
      <li><span class="glyphicon glyphicon-text-height"></span> .glyphicon .glyphicon-text-height</li>
      <li><span class="glyphicon glyphicon-text-width"></span> .glyphicon .glyphicon-text-width</li>
      <li><span class="glyphicon glyphicon-th"></span> .glyphicon .glyphicon-th</li>
      <li><span class="glyphicon glyphicon-th-large"></span> .glyphicon .glyphicon-th-large</li>
      <li><span class="glyphicon glyphicon-th-list"></span> .glyphicon .glyphicon-th-list</li>
      <li><span class="glyphicon glyphicon-thumbs-down"></span> .glyphicon .glyphicon-thumbs-down</li>
      <li><span class="glyphicon glyphicon-thumbs-up"></span> .glyphicon .glyphicon-thumbs-up</li>
      <li><span class="glyphicon glyphicon-time"></span> .glyphicon .glyphicon-time</li>
      <li><span class="glyphicon glyphicon-tint"></span> .glyphicon .glyphicon-tint</li>
      <li><span class="glyphicon glyphicon-tower"></span> .glyphicon .glyphicon-tower</li>
      <li><span class="glyphicon glyphicon-transfer"></span> .glyphicon .glyphicon-transfer</li>
      <li><span class="glyphicon glyphicon-trash"></span> .glyphicon .glyphicon-trash</li>
      <li><span class="glyphicon glyphicon-tree-conifer"></span> .glyphicon .glyphicon-tree-conifer</li>
      <li><span class="glyphicon glyphicon-tree-deciduous"></span> .glyphicon .glyphicon-tree-deciduous</li>
      <li><span class="glyphicon glyphicon-unchecked"></span> .glyphicon .glyphicon-unchecked</li>
      <li><span class="glyphicon glyphicon-upload"></span> .glyphicon .glyphicon-upload</li>
      <li><span class="glyphicon glyphicon-usd"></span> .glyphicon .glyphicon-usd</li>
      <li><span class="glyphicon glyphicon-user"></span> .glyphicon .glyphicon-user</li>
      <li><span class="glyphicon glyphicon-volume-down"></span> .glyphicon .glyphicon-volume-down</li>
      <li><span class="glyphicon glyphicon-volume-off"></span> .glyphicon .glyphicon-volume-off</li>
      <li><span class="glyphicon glyphicon-volume-up"></span> .glyphicon .glyphicon-volume-up</li>
      <li><span class="glyphicon glyphicon-warning-sign"></span> .glyphicon .glyphicon-warning-sign</li>
      <li><span class="glyphicon glyphicon-wrench"></span> .glyphicon .glyphicon-wrench</li>
      <li><span class="glyphicon glyphicon-zoom-in"></span> .glyphicon .glyphicon-zoom-in</li>
      <li><span class="glyphicon glyphicon-zoom-out"></span> .glyphicon .glyphicon-zoom-out</li>
    </ul>
        			</div>
        		</div>
        	</div><!--/span-->

        	<div class="row">
        		<div class="col-sm-3">
        			<div class="panel panel-info">
        				<div class="panel-heading">
        					<h3 class="panel-title text-center">Asientos</h3>
        				</div>

        				<div class="panel-body" id="sb">
        					<div class="list-group text-right">
					            <a href="asiento-general.php" class="list-group-item">&#0171; Generales</a>
					            <a href="#" class="list-group-item">&#0171; Simples</a>
					            <a href="#" class="list-group-item">&#0171; Facturas Recibidas</a>
					            <a href="#" class="list-group-item">&#0171; Facturas Emitidas</a>
					            <a href="#" class="list-group-item">&#0171; Diario</a>
					            <a href="#" class="list-group-item">&#0171; Descuadros</a>
					            <a href="#" class="list-group-item">&#0171; Buscar/Editar</a>
	        				</div>
        				</div>
        			</div>
        			
        			<div class="panel panel-info">
	        			<div class="panel-heading">
	        				<h3 class="panel-title text-center">Cuentas</h3>
	        			</div>

	        			<div class="panel-body" id="sb">
	        				<div class="list-group text-right">
	        					<a href="#" class="list-group-item">&#0171; Nueva cuenta</a>
					            <a href="#" class="list-group-item">&#0171; Extracto de Subcuenta</a>
					            <a href="#" class="list-group-item">&#0171; Extracto de Cuenta</a>
					            <a href="#" class="list-group-item">&#0171; Extracto de Subgrupo</a>
					            <a href="#" class="list-group-item">&#0171; Listado de Subcuentas</a>
					            <a href="#" class="list-group-item">&#0171; Listado de Cuentas</a>
					            <a href="#" class="list-group-item">&#0171; Listado de Subgrupos</a>
					            <a href="#" class="list-group-item">&#0171; Editar</a>
					            <a href="#" class="list-group-item">&#0171; Borrar cuenta</a>
	        				</div>
	        			</div>
        			</div>

	        		<div class="panel panel-info">
	        			<div class="panel-heading">
	        				<h3 class="panel-title text-center">Otros</h3>
	        			</div>

	        			<div class="panel-body" id="sb">
	        				<div class="list-group text-right">
	        					<a href="#" class="list-group-item">&#0171; Balances</a>
					            <a href="#" class="list-group-item">&#0171; Otros Listados</a>
					            <a href="#" class="list-group-item">&#0171; Procesos Periódicos</a>
					            <a href="#" class="list-group-item">&#0171; Control de tablas</a>
					            <a href="#" class="list-group-item">&#0171; Búsquedas</a>
					            <a href="#" class="list-group-item">&#0171; Listados</a>
					            <a href="#" class="list-group-item">&#0171; Otros</a>
	        				</div>
	        			</div>
	        		</div>

	        		<div class="panel panel-info">
		        		<div class="panel-heading">
		        			<h3 class="panel-title text-center">Gestión Comercial</h3>
		        		</div>

		        		<div class="panel-body" id="sb">
		        			<div class="list-group text-right">
		        				<a href="#" class="list-group-item">&#0171; Proveedores</a>
		        				<a href="#" class="list-group-item">&#0171; Clientes</a>
		        				<a href="#" class="list-group-item">&#0171; Inventario</a>
		        				<a href="#" class="list-group-item">&#0171; Facturas Recibidas</a>
		        				<a href="#" class="list-group-item">&#0171; Pedidos</a>
		        				<a href="#" class="list-group-item">&#0171; Pedidos por Cliente</a>
		        				<a href="#" class="list-group-item">&#0171; Asignar Facturas a Pedidos</a>
		        				<a href="#" class="list-group-item">&#0171; Facturas Emitidas</a>
		        				<a href="#" class="list-group-item">&#0171; Listados</a>
		        			</div>
	        			</div>
	        		</div>

	        		<div class="panel panel-info">
	        			<div class="panel-heading">
	        				<h3 class="panel-title text-center">Administrar Usuarios</h3>
	        			</div>

	        			<div class="panel-body" id="sb">
	        				<div class="list-group text-right">
	        					<a href="usuarios.php" class="list-group-item">&#0171; Listado de usuarios</a>
	        					<a href="#" class="list-group-item">&#0171; Crear un nuevo usuario</a>
	        					<a href="#" class="list-group-item">&#0171; Eliminar usuario</a>
	        				</div>
	        			</div>
	        		</div>
        		</div>
        	</div> <!--/row-->
        </div>
    </div>

	<div class="navbar navbar-inverse navbar-fixed-bottom" id="footer">
			<div class="container">
				<p class="navbar-text pull-left">
					Computerized Accountancy System | Todos los derechos reservados &copy; 2013.
				</p>
				<p class="navbar-text pull-right">
					<a href="#">Volver arriba</a>
				</p>
			</div>
	</div>

	<div class="modal fade" id="acerca" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Acerca de C.A.S</h4>
				</div>

				<div class="modal-body">
					<p>
						C.A.S son las siglas de <em>"Computerized Accountancy System"</em> que traducido al español significa <em>"Sistema Contable Computarizado"</em>. Este sistema está diseñado en ambiente web, escrito en PHP y programado por los alumnos de la cátedra de Sistemas Contables de la Facultad de Ingeniería y Arquitectura de la Universidad de El Salvador. Este sistema es fácil de usar, tiene una interfaz amigable con el usuario y además es seguro, debido a que posee un nivel de seguridad orientado a usuarios, los cuales tienen su nombre de usuario y contraseña. Si una persona no está logueada en el sistema, no podrá acceder a ninguna de las funciones del mismo, ni podrá consultar ningún tipo de información contenida dentro del sistema.
					</p>

					<div class="modal-footer">
						<a href="info.php" class="btn btn-success">Más información</a>
						<a href="#" class="btn btn-primary" data-dismiss="modal">Aceptar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="creditos" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Sobre los programadores</h4>
				</div>

				<div class="modal-body">
					<p>
						Este sistema ha sido desarrollado por un equipo de 4 programadores. A continuación se detallan sus nombres:
						<br><br>
					</p>
					<ol>
						<li><b>Ingrid Elizabeth Aguilar Gonzalez</b></li>
						<li><b>Vanessa Elena Campos Garciaguirre</b></li>
						<li><b>Jhosseline Alicia Rodriguez Campos</b></li>
						<li><b>Ricardo Alexander Vigil Contreras</b></li>
					</ol>

					<div class="modal-footer">
						<a href="#" class="btn btn-primary" data-dismiss="modal">Aceptar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>