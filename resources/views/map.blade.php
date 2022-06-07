<style>
    .link {
        text-align:center;text-decoration:none;font-weight:bold;color:#0563bb;font-size:16px;
    }

    
</style>
<div id="map_canvas" style="width: 100%x; height: 100%"></div>
</div>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script>
    window.addEventListener('load', () => {
  
    var locations = [
        ['<h5><a href="https://mict-monitoring.macantech.asia/d/Y-dqrWU7k/monitoring-lampung?orgId=1" target="_blank" class="link">Lampung</a></h5>', -5.471474887701556, 105.24508394209235],
        // ['<h5><a href="https://mict-monitoring.macantech.asia/d/tGIJ0iY7k/monitoring-ancol?orgId=1" target="_blank" class="link">Ancol</a></h5>', -6.126016922594333, 106.82364842384374],
        ['<h5><a href="https://mict-monitoring.macantech.asia/d/fOHzfiYnz/monitoring-gondol?orgId=1" target="_blank" class="link">Gondol</a></h5>', -8.155774986629838, 114.71413999032998],
        // ['<h5><a href="https://mict-monitoring.macantech.asia/d/z9wdfiL7z/monitoring-muncar?orgId=1" target="_blank" class="link">Muncar</a></h5>', -8.430983409458328, 114.33264402436762],
        ['<h5><a href="https://mict-monitoring.macantech.asia/d/NFne9Z8nz/monitoring-lombok?orgId=1" target="_blank" class="link">Lombok</a></h5>', -8.904701218192406, 116.32926776831484]
    
    ];
    var infowindow = new google.maps.InfoWindow();
    
    var options = {
        zoom: 6, 
        center: new google.maps.LatLng(-4.019641194411262, 110.04889681919992),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
        // Pembuatan petanya
    var map = new google.maps.Map(document.getElementById('map_canvas'), options);
    
        var marker, i;
    // proses penambahan marker pada masing-masing lokasi yang berbeda
        for (i = 0; i < locations.length; i++) {  
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
    
        });
    
    // Menampilkan informasi pada masing-masing marker yang diklik 
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
            }
        })(marker, i));
        }
    
    

    });
</script>