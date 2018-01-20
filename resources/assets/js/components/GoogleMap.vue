<template>
    <div class="google-map" :id="mapName"></div>
</template>
<script>
    export default {
      name: 'google-map',
      props: ['name', 'latitude', 'longitude','place','zoom'],
      data: function () {
        return {
            mapName: this.name + "-map",

            markerCoordinates: [{
              latitude: this.latitude,
              longitude: this.longitude
            }],

            map: null
        };
      },

      mounted: function () {
            const element = document.getElementById( this.mapName );
            const coordLatLng = this.markerCoordinates[0];
            const googleMapLatLng = new google.maps.LatLng(coordLatLng.latitude, coordLatLng.longitude);

            this.map = new google.maps.Map(element,
                {
                    zoom: this.zoom || 17,
                    center: googleMapLatLng
                }
            );

            const marker = new google.maps.Marker({
                  position: googleMapLatLng,
                  map: this.map,
                  title: this.place || ''
            });

        }
    };
</script>
<style scoped>
    .google-map {
      width: 100%;
      height: 100%;
      margin: 0 auto;
      background: gray;
    }
</style>