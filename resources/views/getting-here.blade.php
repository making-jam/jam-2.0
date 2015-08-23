@extends('master')

@section('content')
    <header class="text">
        <div class="hero">
            <div class="container-narrow">
                <h1>Getting Here</h1>
            </div>
        </div>
    </header>

    <main class="static">
        <section class="container-narrow">
            <p>JAM is hosted at Oval Space, 29-32 The Oval, London E2 9DT. It's a 5 minute walk from Bethnal Green or
                Cambridge Heath stations.</p>

            <div id="gMaps" style="height: 300px"></div>

            <p>Tel: <strong>020 7183 4422</strong> </br>
                Email: <a href="mailto:hello@jam2015.london"><strong>hello@jam2015.london</strong></a></p>
        </section>
    </main>

    <script type="text/javascript">


        function initMap() {
            var latLng = {lat: 51.533252, lng: -0.059180};

            var map = new google.maps.Map(document.getElementById('gMaps'), {
                center: latLng,
                zoom: 15,
                scrollwheel: false
            });

            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                title: 'Oval Space'
            });
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgfgtaZO7k8_wmKssi7JKKX1EhAn9K9qs&callback=initMap">
    </script>
@endsection