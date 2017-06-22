<!DOCTYPE html >
  <head>	
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
	
    <title>SpacesMap</title>
	
	
	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
	

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

	
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        border: 1px solid black;
        height: 80%;
        width: 99.8%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    
    <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/SM logo1.png" height="50%" width="50%" alt="SpacesMap">
        </div>

        <h1>Welcome to SpacesMap</h1>
        <h2>We serve <span class="rotating">beautiful offices, booking services, office renting</span></h2>

        <div class="actions">
          <a href="#map" class="btn-get-started">Get Started</a>
        </div>


        </section>

    <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/SM logo.png" alt="SpacesMap" title="" /></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>
        
      <nav id="nav-menu-container">
        <ul class="nav-menu">
  
      <li><a href="#map">Home</a></li>
			<li><a href="#contact">About</a></li>
      <li class="menu-has-children"><a href="#">Services</a>
        <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
        </ul>
      </li>

      <li class="menu-has-children"><a href="#">Offices</a>
        <ul>
              <li><a href="#">Office Category 1</a></li>
              <li><a href="#">Office Category 2</a></li>
              <li><a href="#">Office Category 3</a></li>
              <li><a href="#">Office Category 4</a></li>
              <li><a href="#">Office Category 5</a></li>
        </ul>
      </li>


          <li><a href="login.html">Login</a></li>
             <li><a href="signup.html">Sign up</a></li>
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


   <div id="map"></div>



    <script>
      var customLabel = {
        office: {
          label: 'O'
        },
        bar: {
          label: 'B'
        }
      };

      var el = $('#map');
      var map;

      function enableScrollingWithMouseWheel() {
       map.setOptions({ scrollwheel: true });
      } 

      function disableScrollingWithMouseWheel() {
          map.setOptions({ scrollwheel: false });
      }

        function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(22.2783151, 114.17469499999993),
          zoom: 12,
          scrollwheel:  false,
          styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#523735"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#c9b2a6"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#dcd2be"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ae9e90"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#93817c"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#a5b076"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#447530"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fdfcf8"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f8c967"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#e9bc62"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e98d58"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#db8555"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#806b63"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8f7d77"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#b9d3c2"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#92998d"
      }
    ]
  }
]
        });

google.maps.event.addListener(map, 'mousedown', function(){
        enableScrollingWithMouseWheel()
    });

google.maps.event.addDomListener(window, 'load', initMap);

$('body').on('mousedown', function(event) {
    var clickedInsideMap = $(event.target).parents('#map').length > 0;

    if(!clickedInsideMap) {
        disableScrollingWithMouseWheel();
    }
});

$(window).scroll(function() {
    disableScrollingWithMouseWheel();
});



        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('phpsqlajax_genxml.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('tbsmaps');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));


              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label,
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }






      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}



    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4ncU-xCQhO3x53WFmhHbqsDTeMvelCyQ&callback=initMap">
    </script>
	
	
	
	
	
	<section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">About</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>
      
		<div class=row>
			<div class="col-md-6">
				<h2>What is Spacesmap?</h2>
				<p>
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
				
				</p>
			</div>
			
			<div class="col-md-6">
				<h2>How does it work?</h2>
				<p>
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
				
				</p>
			</div>
			
			
		</div>
        
      </div>
    </div>
  </section>
	
	
	
	
	
	<footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              &copy; Copyright <strong>SpacesMap</strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
              -->
             
            </div>
          </div>
        </div>
      </div>
  </footer><!-- #footer -->
  
  
  
  
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  
  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  
  <script src="contactform/contactform.js"></script>
  
  
  
  </body>
</html>