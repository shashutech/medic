		/*************************************************************
						google map js activation
		**************************************************************/
		google.maps.event.addDomListener(window, 'load', init);

		function init() {
			var mapOptions = {
				zoom: 12,
				scrollwheel: false,


				// The latitude and longitude to center the map (always required)					
				center: new google.maps.LatLng(28.5456, 77.1954),

				styles: [{
						"featureType": "administrative",
						"elementType": "labels.text.fill",
						"stylers": [{
							"color": "#444444"
						}]
					},
					{
						"featureType": "landscape",
						"elementType": "all",
						"stylers": [{
							"color": "#eff1f5"
						}]
					},
					{
						"featureType": "poi",
						"elementType": "all",
						"stylers": [{
							"visibility": "off"
						}]
					},
					{
						"featureType": "road",
						"elementType": "all",
						"stylers": [{
								"saturation": -100
							},
							{
								"lightness": 45
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "all",
						"stylers": [{
							"visibility": "simplified"
						}]
					},
					{
						"featureType": "road.arterial",
						"elementType": "labels.icon",
						"stylers": [{
							"visibility": "off"
						}]
					},
					{
						"featureType": "transit",
						"elementType": "all",
						"stylers": [{
							"visibility": "off"
						}]
					},
					{
						"featureType": "water",
						"elementType": "all",
						"stylers": [{
								"color": "#ddd" /* Map body color */
							},
							{
								"visibility": "on"
							}
						]
					}
				]
			};

			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(28.5475, 77.1860),
				map: map,
				title: 'Edufair!',
				animation: google.maps.Animation.BOUNCE,
				icon: 'images/map-marker.png'
			});
		}




		/*
		Author: Kumar Shashwat
		Author URI: http://github.com/shashutech/
		Subject to copyright
		*/