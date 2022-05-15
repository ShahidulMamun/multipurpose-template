  <div class="footersection">
	  	 <div class="container">
	  	 	<div class="row text-center">
	  	 	    <div class="col-md-3">
	  	 	       <h4 class="text-center">CONTACT WITH4US</h4>
	  	 	       <div class="socialicone">
	  	 	       	 <img src="images/social/etap-fb.png" alt="Facebook">
	  	 	       	 <img src="images/social/etap-tw.png" alt="Twitter">
	  	 	       	 <img src="images/social/etap-google.png" alt="Google">
	  	 	       </div>
	  	 	    </div>	
	  	 	    <div class="col-md-3">
	  	 	       <h4 class="text-center">USEFUL LINK</h4>
	  	 	        <div class="usefullink">
		  	 	       <ul>
		  	 	       	  <li><a href="">Power Division</a></li>
		  	 	       	  <li><a href="">Power Cell</a></li>
		  	 	       	  <li><a href="">BPDB</a></li>
		  	 	       	  <li><a href="">CPTU</a></li>
		  	 	       	  <li><a href="">BCPCL</a></li>
		  	 	       </ul>
	  	 	        </div>
	  	 	    </div>	
	  	 	    <div class="col-md-3">
		  	 	    <div class="download">
		  	 	    	   <h4 class="text-center ">DOWNLOAD</h4>
			  	 	       <ul>
			  	 	       	  <li>
			  	 	       	 	 <a href="Filefoldername/filename" download>Annual Report</a>
			  	 	       	   </li>
			  	 	       	   <li>
			  	 	       	   	  <a href="Filefoldername/filename" download>EIA Report</a>
			  	 	       	   </li>
			  	 	       </ul> 
			  	 	       <h4 class="text-center ">PRESS RELEASE</h4> 
			  	 	    	<ul>
			  	 	       	  <li>
			  	 	       	 	  <a href="Filefoldername/filename" download>9th Annual General Meeting</a>
			  	 	       	   </li>
			  	 	        </ul> 
			  	 	</div>
	  	 	    </div>	
	  	 	    <div class="col-md-3">
		  	 	    <div class="footer-contact">
		  	 	    	<h4 class="text-center">CONTACT US</h4>
		  	 	        <div class="row text-center">
							<p class="text-center">Bangladesh-China Power
							Company (Pvt.) Limited
							(BCPCL)
							Bidyut Bhaban (Level 14)
							1, Abdul Gani Road
							Dhaka-1000, Bangladesh

							Phone: +88029557518
							Fax: +88029513530
							e-mail : info@bcpcl.org.bd</p>
		  	 	        </div>
		  	 	    </div>    
	  	 	    </div>	
	  	 	</div>
	  	 	 <h4 class="text-center">This site is developed by Debugbd
             Copyright &copy; 2018 Debugbd</h4>

	  	 </div>
  </div>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--SCRIPTS FOR NEWS TRICKER-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="js/jquery.easy-ticker.js"></script>

  <script>
$(function(){
	$('.demo1').easyTicker({
		direction: 'up',
		easing: 'swing'
	});
	
	
	
	$('.demo3').easyTicker({
		visible: 1,
		interval: 4000
	});
	
	
	$('.demo5').easyTicker({
		direction: 'up',
		visible: 3,
		interval: 2500,
		controls: {
			up: '.btnUp',
			down: '.btnDown',
			toggle: '.btnToggle'
		}
	});
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--SCRIPTS FOR NEWS TRICKER-->

<!--SCRIPTS FOR GOOGLE MAP-->
<script type="text/javascript">

    var map;
    $(document).ready(function(){
      var map = new GMaps({
        el: '#map',
        lat: 23.7794448,
        lng: 90.3695779
      });

      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error){
          alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        },
        always: function(){
          alert("Done!");
        }
      });
    });
  </script>
  <!--SCRIPTS FOR GOOGLE MAP-->
</body>

</html>