<!DOCTYPE html>
<html>
  <head>
    <title>New Surabaya</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="title" class="box">
        <h2>
          <img src="images/logo.png" id="logo" alt="Logo" width="45px" height="45px">
          NEW SURABAYA
        </h2>
    </div>

    <div id="lapor-box">
      <a href="tambahdata.php">
        <button class="lapor-btn">Lapor Masalah</button>
      </a>
    </div>

    <div id="checkbox">
        <button class="collapsible">Laporan Masyarakat</button>
        <div class="content">
            <br>
            <label class="container">Kemacetan
                <input type="checkbox" value="kemacetan">
                <span class="checkmark"></span>
            </label>
            <label class="container">Lampu Jalan Rusak
                <input type="checkbox" value="lampu_jalan_rusak">
                <span class="checkmark"></span>
            </label>
            <label class="container">Sampah
                <input type="checkbox" value="sampah">
                <span class="checkmark"></span>
            </label>
            <label class="container">Jalan Rusak
                <input type="checkbox" value="jalan_rusak">
                <span class="checkmark"></span>
            </label>
            <label class="container">Parkir Liar
                <input type="checkbox" value="parkir_liar">
                <span class="checkmark"></span>
            </label>
            <label class="container">Pengemis
                <input type="checkbox" value="pengemis">
                <span class="checkmark"></span>
            </label>
            <label class="container">Kaki Lima Liar
                <input type="checkbox" value="kaki_lima_liar">
                <span class="checkmark"></span>
            </label>
            <label class="container">Kriminal
                <input type="checkbox" value="kriminal">
                <span class="checkmark"></span>
            </label>
            <label class="container">Banjir
                <input type="checkbox" value="banjir">
                <span class="checkmark"></span>
            </label>
            <label class="container">Pohon Tumbang
                <input type="checkbox" value="pohon_tumbang">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>

    <div id="map"></div>

    <script src="jquery-3.3.1.min.js"></script>
    <script>
    <?php 
			# Membuat koneksi database ke MySQL
			include "koneksidb.php";
		?>

    // Laporan Masyrakat Drop Down
    var coll = $('.collapsible');

    for (var i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        } 
      });
    }

    /*** Codingan Gmaps ***/

    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
      for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
      }
    }

    // Shows any markers currently in the array.
    // function showMarkers() {
    //   setMapOnAll(map);
    // }

    // Removes the markers from the map, but keeps them in the array.
    // function clearMarkers() {
    //   setMapOnAll(null);
    // }

    // Deletes all markers in the array by removing references to them.
    // function deleteMarkers() {
    //   clearMarkers();
    //   markers = [];
    // }
    
    var map, markers = [];
  
    function initMap() {
      // Styles a map in night mode.
      map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-7.265225, 112.750291),
          zoom: 12.8,
          mapTypeControl: false,
          fullscreenControl: false,
          styles: [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#1d2c4d"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#8ec3b9"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#1a3646"
                }
              ]
            },
            {
              "featureType": "administrative.country",
              "elementType": "geometry.stroke",
              "stylers": [
                {
                  "color": "#4b6878"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#64779e"
                }
              ]
            },
            {
              "featureType": "administrative.province",
              "elementType": "geometry.stroke",
              "stylers": [
                {
                  "color": "#4b6878"
                }
              ]
            },
            {
              "featureType": "landscape.man_made",
              "elementType": "geometry.stroke",
              "stylers": [
                {
                  "color": "#334e87"
                }
              ]
            },
            {
              "featureType": "landscape.natural",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#023e58"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#283d6a"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#6f9ba5"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#1d2c4d"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#023e58"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#3C7680"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#304a7d"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#98a5be"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#1d2c4d"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#2c6675"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry.stroke",
              "stylers": [
                {
                  "color": "#255763"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#b0d5ce"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#023e58"
                }
              ]
            },
            {
              "featureType": "transit",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#98a5be"
                }
              ]
            },
            {
              "featureType": "transit",
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#1d2c4d"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#283d6a"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#3a4762"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#0e1626"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#4e6d70"
                }
              ]
            }
          ]
      });
  }

    var icons = {
      lampuJalanRusak: {
        icon: 'markers/lampu_jalan_rusak.png'
      },
      sampah: {
        icon: 'markers/sampah.png'
      },
      jalanRusak: {
        icon: 'markers/jalan_rusak.png'
      },
      parkirLiar: {
        icon: 'markers/parkir_liar.png'
      },
      pengemis: {
        icon: 'markers/pengemis.png'
      },
      kakiLimaLiar: {
        icon: 'markers/kaki_lima_liar.png'
      },
      kriminal: {
        icon: 'markers/kriminal.png'
      },
      banjir: {
        icon: 'markers/banjir.png'
      },
      pohonTumbang: {
        icon: 'markers/pohon_tumbang.png'
      }
    };

    var trafficLayer = '';

    $("input[type=checkbox]").change(function() {
      if(this.checked) {
        if(this.value == "kemacetan") {
          trafficLayer = new google.maps.TrafficLayer();
          trafficLayer.setMap(map);
        }
        else if(this.value == "lampu_jalan_rusak") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM lampu_jalan_rusak";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Lampu Jalan Rusak',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'lampu_jalan_rusak', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['lampuJalanRusak'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading" style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/lampu_jalan_rusak' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
        else if(this.value == "sampah") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM sampah";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Sampah',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'sampah', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['sampah'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading" style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/sampah/' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
        else if(this.value == "jalan_rusak") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM jalan_rusak";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Jalan Rusak',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'jalan_rusak', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['jalanRusak'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/jalan_rusak/' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
        else if(this.value == "parkir_liar") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM parkir_liar";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Parkir Liar',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'parkir_liar', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['parkirLiar'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/parkir_liar/' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
        else if(this.value == "pengemis") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM pengemis";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Pengemis',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'pengemis', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['pengemis'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/pengemis/' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
        else if(this.value == "kaki_lima_liar") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM kaki_lima_liar";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Kaki Lima Liar',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'kaki_lima_liar', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['kakiLimaLiar'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/kaki_lima_liar/' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
        else if(this.value == "kriminal") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM kriminal";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Kriminal',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'kriminal', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['kriminal'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/kriminal/' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
        else if(this.value == "banjir") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM banjir";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Banjir',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'banjir', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['banjir'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/banjir/' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
        else if(this.value == "pohon_tumbang") {
          <?php
            # Melakukan query ke database
            $sql = "SELECT * FROM pohon_tumbang";
            $result = mysqli_query($conn, $sql);

            $jumData = mysqli_num_rows($result);
            if($jumData > 0) {
              $datas = mysqli_fetch_all($result);
            } 
          ?>

          var features = [
            <?php foreach ($datas as $d) { ?>
              {
                  name: 'Pohon Tumbang',
                  position: new google.maps.LatLng(<?php echo $d[2] ?>, <?php echo $d[3] ?>),
                  x: <?php echo json_encode($d[2]) ?>,
                  y: <?php echo json_encode($d[3]) ?>,
                  alamat: <?php echo json_encode($d[1]) ?>,
                  deskripsi: <?php echo json_encode($d[4]) ?>,
                  foto: <?php echo json_encode($d[5]) ?>
              },
            <?php } ?>
          ];

          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              label: {text: 'pohon_tumbang', color: "white"},
              position: feature.position,
              animation: google.maps.Animation.DROP,
              icon: icons['pohonTumbang'].icon
            });

            markers.push(marker);

            setMapOnAll(map);

            var contentString =
                  '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading style="text-align: center;">' + feature.name + '</h1>'+
                      '<div id="bodyContent">'+
                          '<h3>' + feature.alamat + '</h3>' + 
                          '<p><i>Lat: ' + feature.x + ', Lng: ' + feature.y + '</i></p>' +
                          '<p><i>' + feature.deskripsi + '</i></p>' +
                          '<p><img src="images/pohon_tumbang/' + feature.foto + '" width="350px" height="350px" />' + '<br>' + 
                      '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var isOpen = false;
              google.maps.event.addListener(marker, 'click', function () {
                  // Bounce clicked marker
                  if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                  } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                  }

                  if(isOpen) {
                      infowindow.close();
                      isOpen = false;
                  }
                  else {                  
                      infowindow.open(map, marker);
                      isOpen = true;
                  }
              });
          });
    
        }
      }
      else {
        // clearMarkers();
        // deleteMarkers();

        if(this.value == "kemacetan") { // Khusus data kemacetan, menggunakan traffic layer
          trafficLayer.setMap(null);
        }
        else {
          for(var i = markers.length - 1; i >= 0; i--) {
            if(markers[i].label.text == this.value) {
              markers[i].setMap(null);
              markers.splice(i, 1);
            }
          }
        } 
      }
    });

    <?php 
      # Tutup Koneksi
      mysqli_close($conn);
    ?>
    </script>    
    <script src="https://maps.googleapis.com/maps/api/js?key=[ GMAP API KEY ]&callback=initMap"
    async defer></script>
  </body>
</html>