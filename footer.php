	<footer class="container">
		<div class="row">
	      	<div class="twelve columns h-centred">
	      		<h3 class="">
	      			<a href="<?php echo site_url(); ?>/about">
		            <span>Hello lovely!</span> 
		            <span>I’m Aimee. I’m on a journey to</span>
		            <span>share my gifts,</span> 
		            <span>be <i>braver</i>, more <i>creative</i> and</span> 
		            <span>enjoy every moment...</span><!-- <br>  -->
		            <span>Oh hey, you too? :)</span>
		            </a>
	          	</h3>
	      		<!-- <h2>Oh hey, you too?    :)</h2>
	      		 <img src="<?php theActiveThemeDirectory(); ?>images/AimeeTodayOhHey.svg">  -->
	      	</div>
	    </div>
	</footer>

	<script src="<?php theActiveThemeDirectory(); ?>js/jquery-3.2.0.slim.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
			if (jQuery) 
			{  
	          	// jQuery is loaded  
	          	console.log("jQuery yas")
	        
				$(window).scroll( function()
				{
					console.log('scrolling')
					var scrollTop = $(this).scrollTop()
					var opacity = '1'
					if (scrollTop < 20) opacity = '0' 
					$('#home-link').css({'opacity': opacity})
				})
	        } 
	        else 
	        {
	          	// jQuery is not loaded
	          	console.log("jQuery nope")
	        }
		})
	</script>
</body>
</html>