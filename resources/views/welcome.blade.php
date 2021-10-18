<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .menu {
                width: 150px;
                box-shadow: 3px 3px 5px #888888;
                border-style: solid;
                border-width: 1px;
                border-color: grey;
                border-radius: 2px;
                position: fixed;
                display: none;
            }

            .menu-item {
                height: 20px;
                background-color: white;
            }

            .menu-item:hover {
                background-color: #6CB5FF;
                cursor: pointer;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="flex">
            <div class="w-2/12 px-2 py-1">
                <form id="addPinForm">
                    <div class="block">
                        <label for="latitude">Latitude:</label>
                        <input type="text" id="lat" class="border border-gray-300 w-full">
                    </div>
                    <div class="block">
                        <label for="longitude">Longitude:</label>
                        <input type="text" id="long" class="border border-gray-300 w-full">
                    </div>
                    <div class="block mt-2">
                        <button type="submit" class="w-full border border-gray-300 hover:text-white hover:bg-green-400 hover:border-transparent">Add Pin</button>
                        <button type="button" class="w-full border border-gray-300 hover:text-white hover:bg-green-400 hover:border-transparent mt-1" id="sharePinBtn">Add & Share Pin</button>
                    </div>
                </form>

                <div class="mt-5">
                    <h3 class="text-center uppercase">Shared Pins</h3>
                    <ul id="sharedPinWrapper">
                        @foreach ($pins as $pin)
                        <li class="even:bg-gray-100 py-1">
                            <div class="block w-full">
                                <p class="text-xs">{{ $pin->coordinates }}</p>
                                <div class="flex justify-center space-x-1">
                                    <button class="border border-border-yellow-300 text-xs hover:text-white px-2 hover:bg-yellow-500 hover:border-transparent showPin" data-id="{{ $pin->marker_id }}" data-lat="{{ $pin->lat }}" data-long="{{ $pin->long }}">Show</button>
                                    @if (Session::getId() == $pin->owner)
                                    <button class="border border-border-red-300 text-xs hover:text-white px-2 hover:bg-red-500 hover:border-transparent remove-pin" data-id="{{ $pin->marker_id }}">Remove</button>
                                    @endif
                                    </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-span-1 w-10/12 h-screen bg-green-500">
                <div id="map" class="h-full"></div>
                <div class="menu" id="menu">
                <div class="menu-item share-pin"><i class="glyphicon glyphicon-file"></i>Share this pin</div>
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        var map, infoWindow, selectedMarker = {}, markers = {};

        var uniqueId = function() {
            return Date.now();
        }

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 12
            });
            infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent('Current Location');
                console.log(infoWindow.position);
                infoWindow.open(map);
                map.setCenter(pos);
                }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                                    'Error: The Geolocation service failed.' :
                                    'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }

        $(document).ready(function() {
            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
            });
        })

        $("#addPinForm").on('submit', function(e) {
            e.preventDefault();

            addPin();
        })

        function addPin() {
            var lat = $("#lat").val();
            var long = $("#long").val();

            if (lat.length == 0 || long.length == 0 || isNaN(lat) || isNaN(long)) {
                alert('Please enter a valid coordinate.');
            } else {
                return placeMarker(new google.maps.LatLng(lat,long))
            }
        }

        function placeMarker(location) {
            var id = uniqueId();

            var marker = new google.maps.Marker({
                id: id,
                draggable: true,
                position: location,
                map: map,
            });

            // map.setCenter(location);

            marker.metadata = { type: 'point', id: id };

            markers[id] = marker;

            marker.addListener('click', () => {
                removeMarker(id);
            })

            marker.addListener("rightclick", function(e) {
                selectedMarker.lat = this.getPosition().lat();
                selectedMarker.long = this.getPosition().lng();

                for (prop in e) {
                    if (e[prop] instanceof MouseEvent) {
                    mouseEvt = e[prop];
                    var left = mouseEvt.clientX;
                    var top = mouseEvt.clientY;

                    menuBox = document.getElementById("menu");
                    menuBox.style.left = left + "px";
                    menuBox.style.top = top + "px";
                    menuBox.style.display = "block";

                    mouseEvt.preventDefault();

                    menuDisplayed = true;
                    }
                }
            });

            return id;
        }

        function saveSharedPin(lat, long, id) {
            $.ajax({
                type: "post",
                url: '/share-pin',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    marker_id: id,
                    lat: lat,
                    long: long
                },
                success: function() {
                    alert('Pin shared publicly. Please refresh to see changes.');
                }
            })
        }

        function removeMarker(id) {
            markers[id].setMap(null);
        }

        $(".showPin").on("click", function (e) {
            placeMarker(new google.maps.LatLng(e.currentTarget.dataset.lat,e.currentTarget.dataset.long))
        });

        $("#sharePinBtn").on('click', function(e) {
            var id = addPin();
            saveSharedPin($("#lat").val(),$("#long").val(), id);
        });

        $(".share-pin").on("click", function (e) {
            saveSharedPin(selectedMarker.lat, selectedMarker.long, uniqueId());

            menuBox = document.getElementById("menu");
            menuBox.style.display = "";
        });

        $(".remove-pin").on("click", function (e) {
            $.ajax({
                type: 'delete',
                url: '/share-pin',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    "_method": 'DELETE',
                    marker_id: e.currentTarget.dataset.id
                },
                success: function() {
                    alert('Pin sharing removed. Please refresh to see changes.')
                }
            });
        })
    </script>
    <!-- Replace the value of the key parameter with your own API key. -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCaKa_QxiW5rRxwmVLZJ5WWOrc14oiwZ0&callback=initMap">
    </script>
</html>
