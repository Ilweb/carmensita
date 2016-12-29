<?php
get_header();
?>
	<div class="slide " id="slide1" data-slide="1" >
		<div class="back"><!--back-->
			<div class="content"><!--content-->
				<header>
				<img id="first_frame" src="<?php bloginfo('template_directory'); ?>/images/decor_1.png" alt=""/>
					<div class="mobile_menu">MENU</div>
					<div id="navigation2">
					<div class="menu first-menu">
				
						<ul class="navigation">

							<li data-slide="3"><a>menu</a></li>
							<li data-slide="4"><a>gallery</a></li>
							<li data-slide="5"><a>la carmencita</a></li>
							<li data-slide="6"><a>contacts & schedule</a></li>
						</ul>
						</div>
					</div>	
					</div>

				</header>
				<div class="row"><!--row-->
					<div class="begin first col-sm-4">Welcome to</div>
					<div class="begin" id="logo-stuff"><!--begin-->
						<div  id="logo" class="col-sm-4"><img  src="<?php bloginfo('template_directory'); ?>/images/center_logo.png"></div>
						<div class="begin second">Vino & comidas</div>
						<div class="begin third">Desde 2016</div>
					</div><!--end begin-->
					<div class="firstt"><input type="button" class="btn fa-input" value="What is Going tapas&#xf103"></div>
				</div>
			</div><!--end content-->
			<div class="star"  data-stellar-ratio="3" data-stellar-vertical-offset="-5" >
				<img src="<?php bloginfo('template_directory'); ?>/images/star.png"    alt="">
			</div>
			<div class="madeby">website<a href="http://www.bydanish.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/website.png" alt="" /></a></div>
			<img class="second_decor" src="<?php bloginfo('template_directory'); ?>/images/decor_2.png">
			<footer class="footerCentered">
				<p class="footerLinks">
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/fb.png"></a>
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/owl.png"></a>
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png"></a>
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/owl.png"></a>
				</p>
			</footer>
		</div><!--end back-->
		<!--<a class="button" data-slide="2" title=""></a>-->
	</div><!--End Slide 1-->
	<div class="slide" id="slide2" data-slide="2" >
		<div class="back2"><!--back2-->
			<div class="content" id="content2"><!--content, id=content2-->
				<header>
			
					<div class="menu other"><!--menu other-->
						<img class="welcome"  src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png">
						<div id="fixedLogo"><img src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png" alt=""/></div>
					</div>	<!--end menu other-->

					<?php
					$page = get_page_by_path('what-is-going-tapas');
					?>
					<h2><?php echo $page->post_title; ?></h2>
				</header>
				<div class="welcome">
					<span>Wellcome!!!</span><br/><span>¡¡¡Bienvenido!!!</span>
				</div>
				<div class="newspaper"><!--welcome-->
					<?php echo apply_filters('the_content', $page->post_content); ?>
				</div><!--end welcome-->
				
				<?php
				$page = get_page_by_path('what-is-going-tapas/and');
				?>
				<h3><?php echo $page->post_title; ?></h3>
				<div class="newspaper1"><!--another <welcome-->
					<?php echo apply_filters('the_content', $page->post_content); ?>
	 			</div><!--end another welcome-->

	 			<div class="welcome1">
	 			
	 			<img id="leaf" src="<?php bloginfo('template_directory'); ?>/images/leaf.png" data-stellar-ratio="3" data-stellar-vertical-offset="-5" alt=""/>
	 			<img class="leafHidden" src="<?php bloginfo('template_directory'); ?>/images/leaf.png">
					
					<img id="sea" src="<?php bloginfo('template_directory'); ?>/images/sea.png"  data-stellar-ratio="3" data-stellar-vertical-offset="-5"  alt="">

				</div>

			</div><!--end contwnt-->
		</div><!--end back2-->
		<a class="button" data-slide="3" title=""><p>menu</p></a>
	</div><!--End Slide 2-->
	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="back3"><!--back3-->
		<img id="salad" src="<?php bloginfo('template_directory'); ?>/images/salad.png"  alt=""/>
		<img id="salad2" src="<?php bloginfo('template_directory'); ?>/images/salad2.png"   alt=""/>
			<div class="content" id="content2"><!--content2-->
				<header>
				
					<div class="menu other"><!--anotehr menu-->
						
						<img class="welcome" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png" alt=""/>
					</div>	<!--end menu other-->
					<?php
					$page = get_page_by_path('menu');
					?>
					<h2><?php echo $page->post_title; ?></h2>
				</header>
				<div class="text">
					<?php echo apply_filters('the_content', $page->post_content); ?>
				</div>
				<a  class=" activator button2 fa-input2" id="activator" >Menu in English   &#xf0f5</a>
				 <div class="overlay" id="overlay" style="display:none;"></div>
        <div class="box" id="box">
            <a class="boxclose" id="boxclose"><i class="fa-close fa-2x"></i></a>
            	<img class="welcomePop" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png" alt="">
            <h2>Menu</h2>
<div id="listMenu" >
   <ul style="list-style-type: none; display: inline-block;  ">
   	<h4>Raciones da La Carmencita</h4>
		<li><p>JAMON IBÉRICO de CEBO de CAMPO con tomate y albahaca</p><span class="price">6.98</span></li>
		<li><p>LOMO IBÉRICO de CEBO de CAMPO con tomate y aceite</p><span class="price">6.98</span></li>
		<li><p> CECINA de LEÓN con almendras tostadas, pimienta negra y 
		mermelada de tomate</p><span class="price">6.98</span></li>
		<li><p> MOJAMA de ATÚN con aceite ahumado y almendras tostadas</p><span class="price">6.98</span></li>
		<li><p> SALMON AHUMADO de UGA con queso para untar y alcaparras</p><span class="price">6.98</span></li>
		<li><p> BACALAO AHUMADO en aceite y alioli</p><span class="price">6.98</span></li>
	<h4>Tostas</h4>
		<li><p>JAMON IBÉRICO de CEBO de CAMPO con tomate y albahaca</p><span class="price">6.98</span></li>
		<li><p>LOMO IBÉRICO de CEBO de CAMPO con tomate y aceite</p><span class="price">6.98</span></li>
   </ul>

   <ul style="list-style-type: none; display: inline-block;">
   <h4>Comidas da La casa</h4>
      <li><p>VITELLO TONNATTO a La Carmencita</p><span class="price">6.98</span></li>
      <li><p>CHORICITO ASTURIANO a la sidra</p><span class="price">6.98</span></li>
      <li><p>CARRILLERAS de CERDO con pasas y PX, acompañado de 
puré de patatas</p><span class="price">6.98</span></li>
      <li><p>VERDURAS al horno</p></li>
      <li><p>BACALAO en cama de pisto de verduras</p><span class="price">6.98</span></li>
      <li><p>BACALAO en cama de pisto de verduras
VINAGRETA con MEJILLONES</p><span class="price">6.98</span></li>
      <li><p>SALMOREJO con virutas de jamón y huevo duro</p><span class="price">6.98</span></li>
<h4>Ensaladas</h4>
		<li><p>VITELLO TONNATTO a La Carmencita</p><span class="price">6.98</span></li>
		<li><p>CHORICITO ASTURIANO a la sidra</p><span class="price">6.98</span></li>
   </ul>
  


           
        </div>
        <div id="listMenu">
   <ul style="list-style-type: none; display: inline-block;  ">
   	<h4>Raciones da La Carmencita</h4>
		<li><p>JAMON IBÉRICO de CEBO de CAMPO con tomate y albahaca</p><span class="price">6.98</span></li>
		<li><p>LOMO IBÉRICO de CEBO de CAMPO con tomate y aceite</p><span class="price">6.98</span></li>
		<li><p> CECINA de LEÓN con almendras tostadas, pimienta negra y 
		mermelada de tomate</p><span class="price">6.98</span></li>
		<li><p> MOJAMA de ATÚN con aceite ahumado y almendras tostadas</p><span class="price">6.98</span></li>
		<li><p> SALMON AHUMADO de UGA con queso para untar y alcaparras</p><span class="price">6.98</span></li>
		<li><p> BACALAO AHUMADO en aceite y alioli</p><span class="price">6.98</span></li>
	<h4>Tostas</h4>
		<li><p>JAMON IBÉRICO de CEBO de CAMPO con tomate y albahaca</p><span class="price">6.98</span></li>
		<li><p>LOMO IBÉRICO de CEBO de CAMPO con tomate y aceite</p><span class="price">6.98</span></li>
   </ul>

   <ul style="list-style-type: none; display: inline-block;">
   <h4>Comidas da La casa</h4>
      <li><p>VITELLO TONNATTO a La Carmencita</p><span class="price">6.98</span></li>
      <li><p>CHORICITO ASTURIANO a la sidra</p><span class="price">6.98</span></li>
      <li><p>CARRILLERAS de CERDO con pasas y PX, acompañado de 
puré de patatas</p><span class="price">6.98</span></li>
      <li><p>VERDURAS al horno</p></li>
      <li><p>BACALAO en cama de pisto de verduras</p><span class="price">6.98</span></li>
      <li><p>BACALAO en cama de pisto de verduras
VINAGRETA con MEJILLONES</p><span class="price">6.98</span></li>
      <li><p>SALMOREJO con virutas de jamón y huevo duro</p><span class="price">6.98</span></li>
<h4>Ensaladas</h4>
		<li><p>VITELLO TONNATTO a La Carmencita</p><span class="price">6.98</span></li>
		<li><p>CHORICITO ASTURIANO a la sidra</p><span class="price">6.98</span></li>
   </ul>
  


           
        </div>
        </div>

				<a  class="activator button2 fa-input2" id="activator2" >Lista de platos   &#xf0f5</a>
				<div class="overlay" id="overlay" style="display:none;"></div>
        <div class="box" id="box">
            <a class="boxclose" id="boxclose"><i class="fa-close fa-2x"></i></a>
            	<img class="welcomePop" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png">
            <h2>Menu</h2>
<div id="listMenu" >
   <ul style="list-style-type: none; display: inline-block;  ">
   	<h4>Raciones da La Carmencita</h4>
		<li><p>JAMON IBÉRICO de CEBO de CAMPO con tomate y albahaca</p><span class="price">6.98</span></li>
		<li><p>LOMO IBÉRICO de CEBO de CAMPO con tomate y aceite</p><span class="price">6.98</span></li>
		<li><p> CECINA de LEÓN con almendras tostadas, pimienta negra y 
		mermelada de tomate</p><span class="price">6.98</span></li>
		<li><p> MOJAMA de ATÚN con aceite ahumado y almendras tostadas</p><span class="price">6.98</span></li>
		<li><p> SALMON AHUMADO de UGA con queso para untar y alcaparras</p><span class="price">6.98</span></li>
		<li><p> BACALAO AHUMADO en aceite y alioli</p><span class="price">6.98</span></li>
	<h4>Tostas</h4>
		<li><p>JAMON IBÉRICO de CEBO de CAMPO con tomate y albahaca</p><span class="price">6.98</span></li>
		<li><p>LOMO IBÉRICO de CEBO de CAMPO con tomate y aceite</p><span class="price">6.98</span></li>
   </ul>

   <ul style="list-style-type: none; display: inline-block;">
   <h4>Comidas da La casa</h4>
      <li><p>VITELLO TONNATTO a La Carmencita</p><span class="price">6.98</span></li>
      <li><p>CHORICITO ASTURIANO a la sidra</p><span class="price">6.98</span></li>
      <li><p>CARRILLERAS de CERDO con pasas y PX, acompañado de 
puré de patatas</p><span class="price">6.98</span></li>
      <li><p>VERDURAS al horno</p></li>
      <li><p>BACALAO en cama de pisto de verduras</p><span class="price">6.98</span></li>
      <li><p>BACALAO en cama de pisto de verduras
VINAGRETA con MEJILLONES</p><span class="price">6.98</span></li>
      <li><p>SALMOREJO con virutas de jamón y huevo duro</p><span class="price">6.98</span></li>
<h4>Ensaladas</h4>
		<li><p>VITELLO TONNATTO a La Carmencita</p><span class="price">6.98</span></li>
		<li><p>CHORICITO ASTURIANO a la sidra</p><span class="price">6.98</span></li>
   </ul>
  


           
        </div>
        <div id="listMenu">
   <ul style="list-style-type: none; display: inline-block;  ">
   	<h4>Raciones da La Carmencita</h4>
		<li><p>JAMON IBÉRICO de CEBO de CAMPO con tomate y albahaca</p><span class="price">6.98</span></li>
		<li><p>LOMO IBÉRICO de CEBO de CAMPO con tomate y aceite</p><span class="price">6.98</span></li>
		<li><p> CECINA de LEÓN con almendras tostadas, pimienta negra y 
		mermelada de tomate</p><span class="price">6.98</span></li>
		<li><p> MOJAMA de ATÚN con aceite ahumado y almendras tostadas</p><span class="price">6.98</span></li>
		<li><p> SALMON AHUMADO de UGA con queso para untar y alcaparras</p><span class="price">6.98</span></li>
		<li><p> BACALAO AHUMADO en aceite y alioli</p><span class="price">6.98</span></li>
	<h4>Tostas</h4>
		<li><p>JAMON IBÉRICO de CEBO de CAMPO con tomate y albahaca</p><span class="price">6.98</span></li>
		<li><p>LOMO IBÉRICO de CEBO de CAMPO con tomate y aceite</p><span class="price">6.98</span></li>
   </ul>

   <ul style="list-style-type: none; display: inline-block;">
   <h4>Comidas da La casa</h4>
      <li><p>VITELLO TONNATTO a La Carmencita</p><span class="price">6.98</span></li>
      <li><p>CHORICITO ASTURIANO a la sidra</p><span class="price">6.98</span></li>
      <li><p>CARRILLERAS de CERDO con pasas y PX, acompañado de 
puré de patatas</p><span class="price">6.98</span></li>
      <li><p>VERDURAS al horno</p></li>
      <li><p>BACALAO en cama de pisto de verduras</p><span class="price">6.98</span></li>
      <li><p>BACALAO en cama de pisto de verduras
VINAGRETA con MEJILLONES</p><span class="price">6.98</span></li>
      <li><p>SALMOREJO con virutas de jamón y huevo duro</p><span class="price">6.98</span></li>
<h4>Ensaladas</h4>
		<li><p>VITELLO TONNATTO a La Carmencita</p><span class="price">6.98</span></li>
		<li><p>CHORICITO ASTURIANO a la sidra</p><span class="price">6.98</span></li>
   </ul>
  


           
        </div>
        </div>
				<footer class="fixed">
					<div class="brand">
						<div class="begin second footer_part">Vino &amp; comidas</div>
						<div class="begin third footer_part">Desde 2016</div>
						<div class="begin third footer_part">LA CARMENCITA DEL PUERTO</div>
					</div>	
					<div class="social">
					
						 <a class="list-group-item" href="#"><span class="fa-facebook " aria-hidden="true"></span></a>
						 <a class="list-group-item" href="#"><span class="fa-tripadvisor  " aria-hidden="true"></span></a>
						 <a class="list-group-item" href="#"><span class=" fa-instagram " aria-hidden="true"></span></a>
						 <a class="list-group-item" href="#"><span class=" fa-twitter 	" aria-hidden="true"></span></a>
						
					</div>
						<div class="madeby"> website <a href="http://www.bydanish.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/website.png"/></a></div>
				</footer>
			</div><!--end contwnt-->
		</div><!--end back3-->
		
		<a class="button"  data-slide="4" title=""><p>gallery</p></a>
	</div><!--End Slide 3-->
	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0">

	<div class="back4"><!--back3-->
		
		<img id="paprika" src="<?php bloginfo('template_directory'); ?>/images/paprika.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-102" alt=""/>
		<img id="plant" src="<?php bloginfo('template_directory'); ?>/images/plant.png" data-stellar-ratio="2" data-stellar-vertical-offset="-10" alt=""/>
			<div class="content" id="content2"><!--content-->
				<header>
			
					<div class="menu other">
						
						<img class="welcome" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png" alt=""/>
					</div><!--end menu other-->	
					<h2>Gallery</h2>
				</header>
				<div class="welcomee left-menu"><!--welcome menu-->
					<ul id="menulist"> 
						<li class=" menuitem clients active">OUR CLIENTS AND FRIENDS <i class="fa-opened">&#xf07b;</i></li>

						<li class="menuitem tapas">TAPAS <i class="fa-opened">&#xf07b;</i></li>
						<li class="menuitem restourant">THE RESTAURANT <i class="fa-opened">&#xf07b;</i> </li>
						<li class="menuitem spain">SPAIN <i class="fa-opened">&#xf07b;</i> </li>
					</ul>
				</div><!--end welcome-->
				<div id="gallery" ><!--gallery-->
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="pngimages/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/second.png" alt=""/></a>


					
				</div><!--end gallery-->
				<div class=" gallery2" ><!--gallery-->
					
				
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/i14.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/i14.jpg" alt=""/></a>
					
					


					
				</div><!--end gallery-->
		
				<div class=" gallery3" ><!--gallery-->
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					<a href="<?php bloginfo('template_directory'); ?>/images/img1.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt=""/></a>
					
				</div>
					<div class=" gallery4" ><!--gallery-->
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						<a href="<?php bloginfo('template_directory'); ?>/images/img2.jpg" data-lightbox="example-1"><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt=""/></a>
						
				</div>
			</div><!--end contwnt-->
		</div><!--ens back4-->
		

		<a class="button" data-slide="5" title=""><p>carmrncita</p></a>
	</div><!--End Slide 4-->
	<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0">
		<div class="back5"><!--back4-->
			<img class="flower" src="<?php bloginfo('template_directory'); ?>/images/flower.png" data-stellar-ratio="1.4" data-stellar-vertical-offset="-102" alt=""/>
			<img id="mufin" src="<?php bloginfo('template_directory'); ?>/images/mufin.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-53" alt=""/>
			<img id="milkshake" src="<?php bloginfo('template_directory'); ?>/images/milkshake.png" data-stellar-ratio="2.7" data-stellar-vertical-offset="-56" alt=""/>
			<div class="content" id="content2"><!--content2-->
				<header>
		
					<div class="menu other">
						
						<img class="welcome" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png" alt=""/>
					</div><!--end manu other-->	
					<?php
					$page = get_page_by_path('la-carmencita');
					?>
					<h2><?php echo $page->post_title; ?></h2>
				</header>
				<div class="city">
					<?php echo apply_filters('the_content', $page->post_content); ?>
				</div>
			</div><!--end contwnt-->
		</div><!--end back5-->	
	
		<a class="button" data-slide="6" value=""> <p>Contacts</p> </a>
	</div>
	<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="back6">
		<img id="mohito" src="<?php bloginfo('template_directory'); ?>/images/mohitoDown.png" data-stellar-ratio="3" data-stellar-vertical-offset="0"   alt=""/>
		<img id="mohito2" src="<?php bloginfo('template_directory'); ?>/images/mohitoUp.png" data-stellar-ratio="3" data-stellar-vertical-offset="-10"  alt=""/>
			<div class="content" id="content2">
				<header>
				
					<div class="menu other">
						
							<img class="welcome" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png" alt=""/>
						</div><!--end main-->	
					
					<h2>Contacts & schedule</h2>
				</header>
				 <div class="monday">
					<p>Tuesday-Saturday13-15h</p>
					<p>Sunday, Monday  Day off</p>
				</div>
					<aside>
					<table>
						<th><span class="fa fa-clock-o" aria-hidden="true"></span><p>HORARIO</p></th>
						  <tr>
						    <td>Monady</td>
						    <td>dayoff</td>
						  </tr>
						   <tr>
						    <td>Tuesday</td>
						    <td>5pm-1am</td>
						  </tr>
						   <tr>
						    <td>Wednesday</td>
						    <td>5pm-1am</td>
						  </tr>
						   <tr>
						    <td>Thursday</td>
						   <td>5pm-1am</td>
						  </tr>
						   <tr>
						    <td>Friday</td>
						    <td>5pm-1am</td>
						  </tr>
						   <tr>
						    <td>Saturday</td>
						    <td>dayoff</td>
						  </tr>
						   <tr>
						    <td>Sunday</td>
						    <td>dayoff</td>
						  </tr>
					</table>
				</aside>	

				<div class="containerf">
         		   <div class="location">
              		 
               		<i class="fa fa-map-marker fa-2x"></i><p>Avda. de las Playas 55, CC Marítimo<br> local 21; Puerto del Carmen<br>
						35510 Tías, Lanzarote</p>
					</div>
					<div class="block">
                  		<li><i class="fa fa-mobile fa-2x" aria-hidden="true"></i>  <a class="pn">+34 928 51 23 18</a></li>
	          		 	<li><i class="fa fa-envelope " aria-hidden="true"></i><a class="txt">carmencitadelpuerto@gmail.com</a></li>
		            </div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3492.25557691535!2d-13.650132049845428!3d28.920461677655926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc4625ef57c82b95%3A0x8889046f693c1797!2zQXYuIGRlIGxhcyBQbGF5YXMsIDU1LCAzNTUxMCBUw61hcywgTGFzIFBhbG1hcywg0JjRgdC_0LDQvdC40Y8!5e0!3m2!1sbg!2sbg!4v1476629593249" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div><!--end containerf-->
		 		<div id="phone"><a href="tel:+34 928 51 23 18"><span>&nbsp;</span></div>
		        <div id="panel"><a href="tel:+34 928 51 23 18"><p>+34 928 51 23 18</p></a></div>	
			</div><!--end contwnt-->
		</div><!--end back6-->
		
	</div>
			
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script src="js/lightbox.min.js"></script>
<script type="text/javascript">
	 
            $(function() {
                $('#activator').click(function(){
                	$('#box').toggle('show');
                    $('#overlay').fadeIn('fast',function(){
                        $('#box').animate({'top':'0'},500);
                    });
                });
                $('#boxclose').click(function(){
                	$('#box').hide();
                    $('#box').animate({'top':'-200px'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });


            });
        </script>
        <script type="text/javascript">
	 
            $(function() {
                $('#activator2').click(function(){
                	$('#box').toggle('show');
                    $('#overlay').fadeIn('fast',function(){
                        $('#box').animate({'top':'0'},500);
                    });
                });
                $('#boxclose').click(function(){
                	$('#box').hide();
                    $('#box').animate({'top':'-200px'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });


            });
        </script>

<script>
var slides = 6;
var currentslide = 1;
	if (document.location.hash)
	{ 
	 currentslide = parseInt(document.location.hash.replace('#', ''));
	  }



var nextslide = currentslide + 1; if (nextslide > slides) {nextslide = slides;}
var prevslide = currentslide - 1; if (prevslide < 1) { prevslide = 1; }
var animatingup = false;
var animatingdown = false;
	
$(document).ready(function() {
	if($(window).width() < 500){
	return;
}
	resizeDiv();

});

window.onresize = function(event) {
	if($(window).width() < 500){
	return;
}
	resizeDiv();
	scrolltocurrent();
}

$(window).bind('mousewheel DOMMouseScroll', function(event) {
	
if($(window).width() < 500){
	return;
}
	if (animatingup==true) { 
	 return;
	  }
	if (animatingdown==true) {
	  return; 
	}

	
	nextslide = currentslide + 1; if (nextslide > slides) { nextslide = slides; }
	prevslide = currentslide - 1; if (prevslide < 1) { prevslide = 1; }
		
	
	
	if (animatingup == false) {
		if ($(window).scrollTop()+$(window).height()>=$("#slide"+(nextslide)).offset().top+1) {
			if (nextslide > currentslide) {
				var p2 = $( "#slide"+(nextslide) );
				var slideheight = p2.position().top;
				animatingdown = true;
				$('html, body').animate({ scrollTop: slideheight }, 600, function() { currentslide = nextslide; animatingdown = false; document.location.hash = currentslide;
				});
				return;
			}
		}
	}


	if (animatingdown == false) {
		if ($(window).scrollTop()<=$("#slide"+(currentslide)).offset().top-1) {
			if (prevslide < currentslide) {
				var p2 = $( "#slide"+(currentslide) );
				var slideheight = p2.position().top-$(window).height();
				animatingup = true;
				$('html, body').animate({ scrollTop: slideheight }, 600, function() { currentslide = prevslide; animatingup = false; document.location.hash = currentslide;
				});
				return;
			}
		}
	}
});
function scrolltocurrent() {
	var p2 = $( "#slide"+(currentslide) );
	var slideheight = p2.position().top;
	$('html, body').animate({ scrollTop: slideheight }, 200);
}

function resizeDiv() {
	if($(window).width() < 500){
	return;
}
	vpw = $(window).width();
	vph = $(window).height();
	$('.slide').css({'min-height': vph + 'px'});
}


</script>
<script>
$(function () {
   $(window).stellar({
        horizontalScrolling: false,
        verticalOffset: 40,
        responsive: true,
        hideDistantElements: true
    });
});
</script>
<script type="text/javascript">

</script>
	
<!--<script>
		$(document).ready(function(){
		$(window).load(function() {
		  $(".star").animate({right: '50px'}).css("visibility","visible");
		})
		});
	</script>-->
	<!--<script>
		$(document).ready(function(){
		$(".left-menu a").click(function() {
		  $(".star").animate({right: ''}).css("visibility","visible");
		})
		});
	</script>-->
	
<script>
	$(document).ready(function(){


		($(window).width() < 680)&&$( ".mobile_menu" ).click(function() { 
			 
		  if($(this).data('clicked') == true)
		  {

			  $(".first-menu").toggle();
			  $(".mobile_menu").data('clicked', false);

			  
			

		  }
		  else 
		  {
					$(".first-menu").fadeToggle();

				$(".first-menu ").css("display","block");
				menuVisible = true;
				$(".mobile_menu").data('clicked', true);
			
				
		  
		}
 			 // Hide menu after click 
		  	  $('.first-menu').click(function() {
    			$(this).hide();
  				});	
		  			
		  	
		});
	});
</script>
<script type="text/javascript">
	// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var mainbottom = $('.back').offset().top + $('.back').height();

// on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    var stop = Math.round($(window).scrollTop());

    if (stop > mainbottom) {
        $('.navigation').addClass('past-main');
    } else {
        $('.navigation').removeClass('past-main');
    }

});
</script>


<!--<script>
    $(document).ready(function(){
      $(window).scroll(function() { 
        if ($(document).scrollTop() > 600)
         {  
			$(".navigation").css("width","70%");
			$(".navigation").css("left","22%");
			$(".navigation > li").css("padding", "0 54px");

			$(".navigation > li").css("color", "#23597b");
			$(".navigation > li").css("margin-right","0" );
			$(".navigation > li > a").css("font-size","18px");
        } 
        else{
        	$(".navigation").css("visibility","visible");
        }
      
      });
    });
</script>-->
<!--<script type="text/javascript">
	$(document).ready(function(){
      $(window).scroll(function() { 
        if ($(document).scrollTop() > 600)
         {  
			$(".navigation2").css("visibility","visible");
			
        } 
        else{
        	$(".navigation2").css("visibility","hidden");
        }
      
      });
    });
</script>-->
<script type="text/javascript">
	$(document).ready(function(){
      $(window).scroll(function() { 
        if ($(document).scrollTop() > 600)
         {  
         	$(".fixed").css("visibility","visible");
         }
         else{
         	$(".fixed").css("visibility","hidden");
         }
         });

          });
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			if($(document).scrollTop() > 500)
			{
				$("#fixedLogo").css("visibility","visible");
			}
			else{
				$("#fixedLogo").css("visibility","hidden");
			}
		});
	});
</script>




<script type="text/javascript"> 

	    	$(".firstt").click(function(){
	        $("html,body").animate( 
	        {
	        	scrollTop: $(".back2").offset().top
	        } , 'slow' );
	    });
	</script>
	<script type="text/javascript">

	    	$("	#fixedLogo").click(function(){
	        $("html,body").animate( 
	        {
	        	scrollTop: $(".slide").offset().top
	        } , 'slow' );
	    });
	</script>

	

</script>

	<script type="text/javascript">
		$(document).ready(function(){
	    $("#phone").click(function(){
	        $("#panel").toggle();
	    });
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
    $('.nav li').click(function(event){
       
        $('.active').removeClass('active');

  
        $(this).addClass('active');  

        event.preventDefault();
    });
});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
    $('.menuitem ').click(function(event){
       
        $('.active').removeClass('active');

  
        $(this).addClass('active');  

        event.preventDefault();
    });
});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
    jQuery('.clients').live('click', function(event) {        
         jQuery('#gallery').toggle('show');
         jQuery('.gallery2').hide();
         jQuery('.gallery3').hide();
         jQuery('.gallery4').hide();
    });
});
</script>
<script type="text/javascript">
	jQuery(document).ready(function(){
    jQuery('.tapas').live('click', function(event) {        
         jQuery('.gallery2').toggle('show');
         jQuery('#gallery').hide();
          jQuery('.gallery3').hide();
          jQuery('.gallery4').hide();
    });
});
</script>-->
<script type="text/javascript">
	jQuery(document).ready(function(){
    jQuery('.restourant').live('click', function(event) {        
         jQuery('.gallery3').toggle('show');
         jQuery('#gallery').hide();
          jQuery('.gallery2').hide();
          jQuery('.gallery4').hide();
    });
});
</script>-->
<script type="text/javascript">
	jQuery(document).ready(function(){
    jQuery('.spain').live('click', function(event) {        
         jQuery('.gallery4').toggle('show');
         jQuery('#gallery').hide();
          jQuery('.gallery2').hide();
          jQuery('.gallery3').hide();
    });
});
</script>

<?php
get_footer();
?>