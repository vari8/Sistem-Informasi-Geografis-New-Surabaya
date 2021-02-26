<?php
  session_start();

  if (isset($_SESSION['user'])) {
?>

<html>
<head>
<title> New Surabaya</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
  <br>
  <p style="margin-left: 10px;">
		<a href="index.php"> << Kembali ke halaman utama</a>
	</p>
  <?php 
		$ket = $_GET['keterangan'];

		if($ket == 'sukses') {
			echo '<h2 style="text-align: center">Sukses Menambah Data.</h2>';
		}
		if($ket == 'gagal') {
			echo '<h2 style="text-align: center">Gagal Menambah Data.</h2>';
    }
    if($ket == 'bukan_gambar') {
			echo '<h2 style="text-align: center">Foto Bukan Gambar.</h2>';
    }
    if($ket == 'gambar_besar') {
			echo '<h2 style="text-align: center">File Gambar Terlalu Besar.</h2>';
    }
    if($ket == 'gagal_upload_foto') {
			echo '<h2 style="text-align: center">Gagal mengupload foto.</h2>';
    }
	?>
  <table class="styletable">
    <tr>
      <th style="text-align: center;">
        PENDATAAN
      </th>
    </tr>
    <tr>
      <td>
        <form method="post" action="inputdata.php" enctype="multipart/form-data">
          <!-- <label>Nama Tempat</label>
            <input type="textbox" name="nama"><br> -->
          <label>Lokasi Kejadian</label>
          <div class="pac-card" id="pac-card">
            <div id="pac-container">
              <input id="pac-input" type="text"
                placeholder="Cari Lokasi ..." name="lokasi">
            </div>
            <div id="infowindow-content">
              <img src="" width="16" height="16" id="place-icon">
              <span id="place-name"  class="title"></span><br>
              <span id="place-address"></span>
            </div>
          </div>
          <div id="laporan-map"></div>
          <br>

          <!-- Input buat koordinat lokasi masalah -->
          <input type="hidden" id="lat" name="lat">
          <input type="hidden" id="lng" name="lng">

          <label>Jenis Laporan</label><br>
          <select id="masalah" name="masalah">
            <option value="banjir" selected>banjir</option>
            <option value="jalan_rusak">jalan_rusak</option>
            <option value="kaki_lima_liar">kaki_lima_liar</option>
            <option value="kemacetan">kemacetan</option>
            <option value="kriminal">Kriminal</option>
            <option value="lampu_jalan_rusak">lampu_jalan_rusak</option>
            <option value="parkir_liar">parkir_liar</option>
            <option value="pengemis">pengemis</option>
            <option value="pohon_tumbang">pohon_tumbang</option>
            <option value="sampah">sampah</option>
          </select>
          <br><br>

          <label>Bukti Foto</label><br>
            <input type="file" id="foto" name="foto" accept="image/jpeg, image/jpg, image/png"><br><br>

          <label>Deskripsi</label>
            <br>
              <textarea rows="4" cols="50" name="deskripsi">
Isi Detail Kejadian
              </textarea>
            <br><br>

          <input id="submit" type="submit" value="Submit" >
        </form>
      </td>
    </tr> 
  </table>

  <p style="text-align: center; margin-top: -15px; margin-bottom: 15px;">
    <a href="#" id="logout">Log Out</a>
  </p>

<script src="jquery-3.3.1.min.js"></script>
<script>
  function initMap() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('laporan-map'), {
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

      var card = document.getElementById('pac-card');
      var input = document.getElementById('pac-input');
      var countries = document.getElementById('country-selector');

      var autocomplete = new google.maps.places.Autocomplete(input);

      // Set initial restrict to Indonesia region only
      autocomplete.setComponentRestrictions({'country': ['id']});

      // Specify only the data fields that are needed.
      autocomplete.setFields(['address_components', 'geometry', 'icon', 'name']);

      var infowindow = new google.maps.InfoWindow();
      var infowindowContent = document.getElementById('infowindow-content');
      infowindow.setContent(infowindowContent);
      var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
      });

      autocomplete.addListener('place_changed', function() {    
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
          address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
          ].join(' ');
        }

        infowindowContent.children['place-icon'].src = place.icon;
        infowindowContent.children['place-name'].textContent = place.name;
        infowindowContent.children['place-address'].textContent = address;
        // infowindow.open(map, marker);


        // Data lat lng
        var place = autocomplete.getPlace().geometry.location,
            lat = autocomplete.getPlace().geometry.location.lat(),
            lng = autocomplete.getPlace().geometry.location.lng();

        $('#lat').val(lat);
        $('#lng').val(lng);
    });
  }

  $("#logout").click(function(){
      $.post("logout.php",function(data){
        alert('Log Out berhasil. Silahkan refresh page.');
    });
  });
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=[ GMAP API KEY ]&libraries=places&&callback=initMap">
</script>

</body>
</html>

 <?php

 } else {
   header("location:../project-sig/login.php");
  // header("./login.php");
 }

 ?>
