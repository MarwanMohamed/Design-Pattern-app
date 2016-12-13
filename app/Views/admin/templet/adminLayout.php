<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="GeeksLabs">

  <title>Admin</title>

  <link href="public/admin/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

 
  <aside>
  <div id="sidebar"  class="nav-collapse ">
    <ul class="sidebar-menu">                
      <li class="active">
          <a class="" href="{{ Url('/admin') }}">
              <i class="icon_house_alt"></i>
              <span>Dashboard</span>
          </a>
      </li>               
                                                    
      <li class="sub-menu">
        <a href="javascript:;">
          <span>Slider</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/slider') }}">Slider</a></li>
          <li><a class="" href="{{ Url('/admin/slider/add') }}">Add Slider</a></li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="javascript:;">
          <span>Features</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/features') }}">Features</a></li>
          <li><a class="" href="{{ Url('/admin/features/add') }}">Add Features</a></li>
        </ul>
      </li>
        
      <li class="sub-menu">
        <a href="javascript:;">
          <span>Projects</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/projects') }}">Projects</a></li>
          <li><a class="" href="{{ Url('/admin/projects/add') }}">Add Projects</a></li>
        </ul>
      </li> 

      <li class="sub-menu">
        <a href="javascript:;">
          <span>Pricing</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/plans') }}">Pricing</a></li>
          <li><a class="" href="{{ Url('/admin/plan/add') }}">Add Plan</a></li>
        </ul>
      </li> 

      <li class="sub-menu">
        <a href="javascript:;">
          <span>Footer</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/aboutUs') }}">About Us</a></li>
          <li><a class="" href="{{ Url('/admin/services') }}">Our Services</a></li>
          <li><a class="" href="{{ Url('/admin/social') }}">Follow Us</a></li>
        </ul>
      </li> 

      <li class="sub-menu">
        <a href="javascript:;">
          <span>About</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/about') }}">Edit About</a></li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="javascript:;">
          <span>Pleasure</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/pleasure') }}">Pleasure</a></li>
        </ul>
      </li>


      <li class="sub-menu">
        <a href="javascript:;">
          <span>Team</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/team') }}">Team</a></li>
          <li><a class="" href="{{ Url('/admin/team/add') }}">Add Employee</a></li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="javascript:;">
          <span>Partenrs</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/partners') }}">Partenrs</a></li>
          <li><a class="" href="{{ Url('/admin/partners/add') }}">Add Partenrs</a></li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="javascript:;">
          <span>Contact</span>
          <span class="menu-arrow arrow_carrot-right"></span>

        </a>
        <ul class="sub">                          
          <li><a class="" href="{{ Url('/admin/contact') }}">Contact</a></li>
        </ul>
      </li>

    </ul>
  </div>
</aside>

  @yield('content')

    <script src="{{ asset('dashboard/js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <!-- nice scroll -->
    <script src="{{ asset('dashboard/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="{{ asset('dashboard/js/jquery.sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/js/owl.carousel.js') }}" ></script>
    <!-- jQuery full calendar -->
    <script src="{{ asset('dashboard/js/fullcalendar.min.js') }}"></script> <!-- Full Google Calendar - Calendar -->
    <!--script for this page only-->
    <script src="{{ asset('dashboard/js/calendar-custom.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('dashboard/js/jquery.customSelect.min.js') }}" ></script>
   
    <!--custome script for all page-->
  <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
  <script src="{{ asset('dashboard/js/sparkline-chart.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('dashboard/js/xcharts.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery.autosize.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery.placeholder.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/gdp-data.js') }}"></script> 
  <script src="{{ asset('dashboard/js/morris.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/sparklines.js') }}"></script> 
  <script src="{{ asset('dashboard/js/charts.js') }}"></script>
  <script src="{{ asset('dashboard/js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/iconset-glyphicon.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/bootstrap-iconpicker.min.js') }}"></script>
  <script src="{{ asset('dashboard/assets/ckeditor/ckeditor.js') }}"></script>
  <script>

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

</body>
</html>