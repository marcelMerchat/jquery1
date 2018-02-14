<?php
// map.php
require_once "pdo.php";
require_once "util.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marcel Merchat's Resume Registry</title>
    <?php
      require_once 'head3.php';
    ?>
<script>
/*
    Multi-line comment
    Purpose: Illustrate basic JavaScript commands
    Date: January 30, 2018
    Version 1.0.0
*/
//function print(message){
//    document.write('<p>' + message + '</p>');
//}
//function printToday(){
//    var today = new Date();
//    document.write('<h2>' + today.toDateString() + '</h2><br>');
//}
//function calculateTotal(quantity, price){
  //  var tax = 0.08;
//var total = quantity * price * (1 + tax);
  //  var formattedTotal = total.toFixed(2);
    //return formattedTotal;
//}
</script>
<script type="text/javascript"src="http://www.google.com/jsapi?key=AIzaSyATB2C726oPKkTfJd9MAnlEhglyvKe9Oaw">
<script type="text/javascript"charset="utf-8">google.load("maps","2.x"); google.load("jquery","1.3.1");</script>
<!--<meta name="viewport" content="initial-scale=1.0", user-scalable=no>-->
</head>
<body>
<div id="one">
All you need in this life is ignorance and confidence,
and then success is sure. - Mark Twain
</div>

<div id="four">
Great minds discuss ideas; average minds discuss events;
small minds discuss people. - Eleanor Roosevelt
</div>
<div id="two" class="center">
  <h1>Chicago, Illinois</h1>
  <input class="name-box-small" type="text" name="headline" value="" id="input1" /
  <p>Click in the box to test the color.</p>

  <script>
  //printToday();
  var months = ['January','February','March','April','May','June',
                'July','August','September','October','November','December'];
  var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
                              'Saturday','Sunday'];
  //var dateobj = new Date();
  //document.write('<p>bla <span class="h2 clock" id="time_span"></span> bla</p>');
  //var el = document.getElementById('time_span');
  // setInterval(function(){
  //   var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
  //                               'Saturday','Sunday'];
  //  var currentTime = new Date();
  //    var hours = currentTime.getHours();
  //    var minutes = currentTime.getMinutes();
  //    var seconds = currentTime.getSeconds();
  //    var ampm = hours > 11 ? 'PM' : 'AM';
  //    hours = hours > 12 ? hours - 12 : hours;
  //    hours = hours === 0 ? 12 : hours;
  //    hours = hours < 10 ? '0' + hours : hours;
  //    minutes = minutes < 10 ? '0' + minutes : minutes;
  //    seconds = seconds < 10 ? '0' + seconds : seconds;
  // el.innerHTML =  hours + ' : ' + minutes + ' : ' + seconds + ' ' + ampm}, 1000);
//document.write('<p>Now <span class="h2 clock" id="time_span"></span> inside script</p>');
//document.write('Inside script');
var uluru =  {lat: 41.8892, lng: -87.618};
//var uluru = {lat: -25.363, lng: 131.044};
var locations = [
                    ['V', 41.8892, -87.618, 2],
                    ['Navy Pier', 41.8915, -87.606 , 1],
                    ['Gramps', 41.9945, -87.6551 , 1]
];
var locations = [
                    ['Navy Pier', 41.8915, -87.606 , 1]
];
document.write('</div>');
document.write('<div id="map" class="map_canvas"></div>');
function initMap(){
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru,
          scaleControl: true,
          mapTypeControl: true,
          mapTypeControlOptions: {
          position: google.maps.ControlPosition.TOP_CENTER,
          style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
          },
          zoomControl: true,
          zoomControlOptions: {
          position: google.maps.ControlPosition.LEFT_CENTER,
          style: google.maps.ZoomControlStyle.DEFAULT
          }
    });
    loc = locations;

    for (var i = 0; i < locations.length; i++) {
              //placeMarker(i, locations[i]);
              // var contentString = '<div id="content' + i + '">' +
              // ' <div id="siteNotice"></div><h1 id="firstHeading" class = \
              // "firstHeading">Uluru</h1>' + '<div id="bodyContent">' +
              // '<p>Uluru, also referred to as Ayers Rock</p>'+
              // loc[i][0] + '</div></div>';
              var contentString = '<div id="content">' + loc[i][0] + '</div>';
              var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
            'sandstone rock formation in the southern part of the '+
            'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
            'south west of the nearest large town, Alice Springs; 450&#160;km '+
            '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
            'features of the Uluru - Kata Tjuta National Park. Uluru is '+
            'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
            'Aboriginal people of the area. It has many springs, waterholes, '+
            'rock caves and ancient paintings. Uluru is listed as a World '+
            'Heritage Site.</p>'+
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
            '(last visited June 22, 2009).</p>'+
            '</div>'+
            '</div>';

              var infowindow = new google.maps.InfoWindow({
                content : contentString,
                maxWidth: 200
              });
              var latLng = {lat : loc[i][1], lng : loc[i][2]};
              var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    title : loc[i][0]
              });
              //marker.data  = loc[i];
              marker.addListener('click', function(){
                   //infowindow.close();
                   //infowindow.setContent('<div id="infowindow">' + marker.data[0] + '</div>');
                   infowindow.open(map, marker);
              });
              // google.maps.event.addListener( marker, 'click', function(e){
              //       infowindow.setContent( this.title );
              //       infowindow.open( map, this );
              //   }.bind( marker ) );
              google.maps.event.addDomListener(window, 'load', initMap);
    }

}
//label:  loc[0],
// function placeMarker(i, loc){
//          var contentString = '<div id="content">' + loc[0] + '</div>';
//          var infowindow = new google.maps.InfoWindow({});
//             //content: contentString
//          //});
//          var latLng = {lat : loc[1], lng : loc[2]};
//          var marker = new google.maps.Marker({
//                position: latLng,
//                map: map,
//                contentString: contentString,
//                title : loc[0]
//          });
//          marker.addListener('click', function(){
//               //infowindow.close();
//               infowindow.setContent(this.contentString);
//               infowindow.open(map, this);
//          });
// }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIdZ1N_gJxdRMudEwSbK6Dd4qrG6zgS3o&callback=initMap">
</script>
</div>
<script>
$(document).ready(function() {
      window.console && console.log('Document ready called');

      //$(function() {
      //    $('body').hide().fadeIn(3000);
      //});
      //$('#map').remove();
      //$('body').append('<div id="map"></div>');
   //$("#1").on('click', function ()
    //$('#map').on('click', function(){
    //$('#two').click(function(event) {
          //$('#position2').remove();
          //$('body').append('<div id="position2"></div>');

      //$('#two').append('<p>The text entered so far is ');
    //});

});
          //var markers = [  //41.8892, lng: -87.618
          //  {
          //      latitude : 41.88,
          //      longitude : -87.6
                //title : 'Marker 2',
                //html : {
                  //content : '<p>Navy Pier</p>',
                  //popup : true
                //}
          //  },
          //  {
          //    latitude : 41.88,
          //    longitude : -87.65
              //title : 'Marker 3',
              //html : {
                //content : '<p>Downtown</p>',
                //popup : true
              //}
          //  }
          //];
          //$('#map').remove();
          //$('#map').googleMap();
          //$('#map').addMarker({
          //  coords: [41.98, -87.6],
          //  id: 'marker2'
          //});
          //var latlng = new google.maps.LatLng([41.98, -87.6);
          //var map = new google.maps.Map(document.getElementById("#map"));
          //google.maps.event.addListener(map, 'click', function(event) {
          //document.getElementById("latitude").value = 41.88;
          //document.getElementById("longitude").value = -87.65;
          //place_Marker(map, event.latLng);
          //});

          //var latlng = new google.maps.LatLng(41.98, -87.6);

          //$('#two').on('click', function() {
              //addmarker(latlng);
            //  $('#map').addmarker(latlng);
          //});
          //$.each(markers, function(i, marker)) {
              //$('#map').createMarker(marker);
              //drawingManager.setDrawingMode(google.maps.drawing.OverlayType.MARKER);
            //$('#map').addMarker(marker);
          //});
</script>
</body>
</html>
