<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript">
        function initialize() {
            var bryantPark = new google.maps.LatLng(38.4717301, -77.4114607);
            var panoramaOptions = {
                position: bryantPark,
                pov: {
                    heading: 180,
                    pitch: 0
                },
                zoom: 1
            };
            var myPano = new google.maps.StreetViewPanorama(
      document.getElementById('map-canvas'),
      panoramaOptions);
            myPano.setVisible(true);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<div class="groupcontent">
    <div class="content">
        <h2>Location</h2>
        <div class="groupcontact">
            <strong>Adress:</strong> 1425 Stafford Market Place Stafford, VA 22556 
            <br/>
            <strong>Phone:</strong> (540) 659 - 3707
            <br/>
            <strong>Fax:</strong> (540) 659 - 4170
            <br/>
            <strong>E-mail:</strong> <a href="mailto:imperialsds@gmail.com">imperialsds@gmail.com</a>
        </div>
        <div class="maps">
            <div class="streetviewtitle">Location:</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12494.786383424671!2d-77.4115543!3d38.4715653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc011f3d3af3b3f8!2sImperial+Salon+and+Day+Spa+Stafford!5e0!3m2!1svi!2s!4v1523934794960" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div> 
        <div class="streetview">
            <div class="streetviewtitle">Street View:</div>
            <div id="map-canvas" style="height: 600px; width: 100%"></div>
        </div>

    </div>
</div>