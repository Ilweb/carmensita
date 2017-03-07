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

							<li data-slide="2"><a>home</a></li>
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
				<?php
				$page = get_page_by_path('menu/spanish');
				?>
				<a  class=" activator button2 fa-input2" id="activator" ><?php echo $page->post_title; ?>   &#xf0f5;</a>
				 <div class="overlay" id="overlay" style="display:none;"></div>
        <div class="box" id="box">
            <a class="boxclose" id="boxclose"><i class="fa-close fa-2x"></i></a>
            	<img class="welcomePop" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png" alt="">
            <h2><?php echo $page->post_title; ?></h2>
		<div id="listMenu" >
		<?php echo apply_filters('the_content', $page->post_content); ?>
        </div>
        </div>
		<?php
		$page = get_page_by_path('menu/english');
		?>
				<a  class="activator button2 fa-input2" id="activator2" ><?php echo $page->post_title; ?>   &#xf0f5;</a>
				<div class="overlay" id="overlay2" style="display:none;"></div>
        <div class="box" id="box2">
            <a class="boxclose" id="boxclose2"><i class="fa-close fa-2x"></i></a>
            	<img class="welcomePop" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png">
            <h2><?php echo $page->post_title; ?></h2>
		<div id="listMenu" >
		<?php echo apply_filters('the_content', $page->post_content); ?>
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
		<img id="plant" src="<?php bloginfo('template_directory'); ?>/images/plant.png" data-stellar-ratio="2" data-stellar-vertical-offset="12" alt=""/>
			<div class="content" id="content2"><!--content-->
				<header>
			
					<div class="menu other">
						
						<img class="welcome" src="<?php bloginfo('template_directory'); ?>/images/logo_blue.png" alt=""/>
					</div><!--end menu other-->	
					 <?php
					$page = get_page_by_path('gallery');
					?>
					<h2><?php echo $page->post_title; ?></h2>
				</header>
				<div class="welcomee left-menu"><!--welcome menu-->
					<ul id="menulist">
					<?php
					$pages = get_pages( array( 'child_of' => $page->ID) );
					foreach ($pages as $p)
					{
						?>
						<li id="g<?php echo $p->ID ?>" class="menuitem"><?php echo $p->post_title; ?> <i class="fa-opened">&#xf07b;</i></li>
						<?php
					}
					?>
					</ul>
				</div><!--end welcome-->
				<?php
				foreach ($pages as $p)
				{
					$gallery = get_post_gallery( $p->ID, false );
					$images = explode(',', $gallery['ids']);
					?>
					<div class="gallery g<?php echo $p->ID ?>"><!--gallery-->
					<?php
					foreach ($images as $key => $id)
					{
						$img = wp_get_attachment_image_url( $id, 'gallery-size' );
						$large = wp_get_attachment_image_url( $id, 'large');
						?>
						<a href="<?php echo $large;; ?>" data-lightbox="g-<?php echo $p->ID ?>"><img class ="item w2 h2"src="<?php echo $img; ?>" alt=""/></a>
						<?php
					}
					?>
					</div><!--end gallery-->
					<?php
				}
				?>
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
					<?php
					$page = get_page_by_path('contacts-schedule');
					?>
					<h2><?php echo $page->post_title; ?></h2>
				</header>
				 <?php echo apply_filters('the_content', $page->post_content); ?>
			</div><!--end contwnt-->
		</div><!--end back6-->
		
	</div>
			
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/js.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/waypoints.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lightbox.min.js"></script>
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
                	$('#box2').toggle('show');
                    $('#overlay2').fadeIn('fast',function(){
                        $('#box2').animate({'top':'0'},500);
                    });
                });
                $('#boxclose2').click(function(){
                	$('#box2').hide();
                    $('#box2').animate({'top':'-200px'},500,function(){
                        $('#overlay2').fadeOut('fast');
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
	$(document).ready(function(){
      $(window).scroll(function() { 
        if ($(document).scrollTop() > 600)
         {  
         	$(".mobile_menu").css("color","#18567f").css("border","3px solid #18567f");
         }
         else{
         	$(".mobile_menu").css("color","#fff").css("border","3px solid #fff");
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


<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#menulist .menuitem').click(function() {        
		jQuery('#menulist .menuitem.active').removeClass("active");
		jQuery(this).addClass("active");
		jQuery(".gallery").hide();
		jQuery('.gallery.'+jQuery(this).attr("id")).toggle('show');
	});
	jQuery('#menulist .menuitem').first().click();
});
</script>

<script type="text/javascript">
	$(document).ready(function(){
	$("#phone").click(function(){
		$("#panel").show();
		
	});
});
</script>
<script type="text/javascript">
		$( function() {

			$('.gallery').masonry({
			itemSelector: '.item',
			columnWidth: 70
			});

			});
		</script>

<!-- <script type="text/javascript">
$('.gallery').masonry({
	itemSelector: '.item',
	columnWidth: 160
});
var elem = document.querySelector('.gallery');
var msnry = new Masonry(elem, {
     itemSelector: '.item',
     columnWidth: 200
});
var msnry = new Masonry('.gallery', {
});
</script> -->
<?php
get_footer();
?>