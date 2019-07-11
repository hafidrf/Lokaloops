<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Lokaloops. All Rights Reserved | Design by  <a href="http://hafidrf.com/" target="_blank">hafidrf</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="<?= base_url().'home' ?>"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <!-- <li><a href="#"><i class="fa fa-cogs"></i><span>Components</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="grids.html">Grids</a></li>
		            <li><a href="portlet.html">Portlets</a></li>		            
		          </ul>
		        </li> -->
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Transaction</span></a>
		          <!-- <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="#">Items</a></li>
		            <li id="menu-arquivos" ><a href="#">Modifier</a></li>
		          </ul> -->
		        </li>
		        <!-- <li><a href="maps.html"><i class="fa fa-user"></i><span>Customers</span></a></li> -->
		        <li id="menu-academico" ><a href="#"><i class="fa fa fa-user-plus"></i><span>User Management</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="#">Create Kitchen Staff</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="#">Create Owner</a></li>		           
		          </ul>
		        </li>
		        <!-- <li><a href="#"><i class="fa fa-shopping-basket"></i><span>Outlets</span></a></li> -->
		         <li><a href="#"><i class="fa fa-database"></i><span>Master Data</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="<?= base_url().'items' ?>">Items</a></li>
			            <!-- <li id="menu-academico-boletim" ><a href="#">Price</a></li> -->
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-bar-chart"></i><span>Report</span></a></li>
		         <!-- <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
		             </ul>
		         </li> -->
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"> </script>
<script>
	$(document).ready( function () {
    	$('#table_id').DataTable();
	} );
</script>
<!-- mother grid end here-->
</body>
</html>                     