<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <title></title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div id='map' style='width: 50%; height: 50%; margin-top:30px; margin-left:25%;'></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibmVsam9zaHVhIiwiYSI6ImNrZmJ6am1qZzAwaXIyem5zaTM4YzRmdGoifQ.ZGjS9aLrLQddVUAmxgYj_w';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
        center: [-79.5, 40], // starting position [lng, lat]
        zoom: 9 // starting zoom
        });
    </script>
  </body>
</html>