                    @extends('parts.main.admin.master')
                    @section('content')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body m-t-50">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->

                                            <!-- task, page, download counter  end -->
                                            <div class="col-xl-1"></div>
                                            <!--  sale analytics start -->
                                            <div class="col-xl-10 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Peta Sebaran</h5>
                                                        <span class="text-muted">Kasus Stunting di Kecamatan Kalisat</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="map"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-1"></div>
                                            <!--  sale analytics end -->
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- <div id="styleSelector">
                                    
                                </div> --}}
                                @php
                                    foreach ($desa as $key => $value) {
                                        # code...
                                        echo $value->nama_desa;
                                    }
                                @endphp
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="{{asset('assets/kalisat.js')}}"></script>
                    <script>
                        $(document).ready(function() {

                            var mapmargin = 50;
                            $('#map').css("height", ($(window).height() - mapmargin));
                            $(window).on("resize", resize);
                            resize();

                            function resize() {

                                if ($(window).width() >= 980) {
                                    $('#map').css("height", ($(window).height() - mapmargin));
                                    $('#map').css("margin-top", 50);
                                } else {
                                    $('#map').css("height", ($(window).height() - (mapmargin + 12)));
                                    $('#map').css("margin-top", -21);
                                }

                            }
                            // // Your web app's Firebase configuration
                            // // For Firebase JS SDK v7.20.0 and later, measurementId is optional
                            // var firebaseConfig = {
                            //     apiKey: "AIzaSyAfh--fPWoeCb7yUw-okdJ92-zVpR_1MiA",
                            //     authDomain: "sigenting-672bd.firebaseapp.com",
                            //     databaseURL: "https://sigenting-672bd-default-rtdb.asia-southeast1.firebasedatabase.app",
                            //     projectId: "sigenting-672bd",
                            //     storageBucket: "sigenting-672bd.appspot.com",
                            //     messagingSenderId: "746282474380",
                            //     appId: "1:746282474380:web:2aed03ce2394602904d4a9",
                            //     measurementId: "G-GYYF3J079B"
                            // };
                            // // Initialize Firebase
                            // firebase.initializeApp(firebaseConfig);
                            // firebase.analytics();
                            // var longitude;
                            // var latitude;
                            var stunting = L.layerGroup();
                            var umkm = L.layerGroup();

                            var data_desa = @json($desa);
                            $.each(data_desa,function(index, value){
                                console.log('My array has at position ' + index + ', this value: ' + value.nama_desa + ', koordinat : ' + value.koordinat);
                                L.marker([value.longtd, value.latd])
                                    .addTo(stunting)
                                    .bindPopup("<center>Desa : " + value.nama_desa + "</center><hr>" 
                                    + "<table>"
                                            +"<tbody>"
                                            +"<tr>"
                                                    +"<td colspan='4'><center>BB/U<center></td>"
                                                    +"<td></td>"
                                                    +"<td colspan='4'><center>TB/U</center></td>"
                                                +"</tr>"
                                            +"<tr>"
                                                +"<td>BB Sangat Kurang</td>"
                                                +"<td> :</td>"
                                                +"<td>"+ value.bb_sangat_kurang+"</td>"
                                                +"<td>anak</td>"
                                                +"<td></td>"
                                                +"<td>Sangat Pendek</td>"
                                                +"<td> :</td>"
                                                +"<td>"+ value.tb_sangat_pendek+"</td>"
                                                +"<td>anak</td>"
                                            +"</tr>"
                                            +"<tr>"
                                                +"<td>BB Kurang</td>"
                                                +"<td> :</td>"
                                                +"<td>"+ value.bb_kurang+"</td>"
                                                +"<td>anak</td>"
                                                +"<td></td>"
                                                +"<td>Pendek</td>"
                                                +"<td> :</td>"
                                                +"<td>"+ value.tb_pendek+"</td>"
                                                +"<td>anak</td>"
                                            +"</tr>"
                                            +"<tr>"
                                                +"<td>BB Normal</td>"
                                                +"<td> :</td>"
                                                +"<td>"+ value.bb_normal+"</td>"
                                                +"<td>anak</td>"
                                                +"<td></td>"
                                                +"<td>Normal</td>"
                                                +"<td> :</td>"
                                                +"<td>"+ value.tb_normal+"</td>"
                                                +"<td>anak</td>"
                                            +"</tr>"
                                            +"<tr>"
                                                +"<td>Risiko BB Lebih</td>"
                                                +"<td> :</td>"
                                                +"<td>"+ value.bb_lebih+"</td>"
                                                +"<td>anak</td>"
                                                +"<td></td>"
                                                +"<td>Tinggi</td>"
                                                +"<td> :</td>"
                                                +"<td>"+ value.tb_tinggi+"</td>"
                                                +"<td>anak</td>"
                                            +"</tr>"
                                            +"</tbody>"
                                            +"</table>"
                                            +"<hr>"
                                            +"<table>"
                                                +"<tbody>"
                                                +"<tr>"
                                                    +"<td colspan='4'><center>BB/TB<center></td>"
                                                    +"<td></td>"
                                                    +"<td colspan='4'><center>IMT/U</center></td>"
                                                +"</tr>"
                                                +"<tr>"
                                                    +"<td>Gizi Buruk</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.bbtb_gizi_buruk+"</td>"
                                                    +"<td>anak</td>"
                                                    +"<td></td>"
                                                    +"<td>Gizi Buruk</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.imtu_gizi_buruk+"</td>"
                                                    +"<td>anak</td>"
                                                +"</tr>"
                                                +"<tr>"
                                                    +"<td>Gizi Kurang</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.bbtb_gizi_kurang+"</td>"
                                                    +"<td>anak</td>"
                                                    +"<td></td>"
                                                    +"<td>Gizi Kurang</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.imtu_gizi_kurang+"</td>"
                                                    +"<td>anak</td>"
                                                +"</tr>"
                                                +"<tr>"
                                                    +"<td>Gizi Baik / Normal</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.bbtb_gizi_baik+"</td>"
                                                    +"<td>anak</td>"
                                                    +"<td></td>"
                                                    +"<td>Gizi Normal</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.imtu_gizi_baik+"</td>"
                                                    +"<td>anak</td>"
                                                +"</tr>"
                                                +"<tr>"
                                                    +"<td>Berisiko Gizi Lebih</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.bbtb_risiko_gizi_lebih+"</td>"
                                                    +"<td>anak</td>"
                                                    +"<td></td>"
                                                    +"<td>Berisiko Gizi Lebih</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.imtu_risiko_gizi_lebih+"</td>"
                                                    +"<td>anak</td>"
                                                +"</tr>"
                                                +"<tr>"
                                                    +"<td>Obesitas</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.bbtb_obesitas+"</td>"
                                                    +"<td>anak</td>"
                                                    +"<td></td>"
                                                    +"<td>Obesitas</td>"
                                                    +"<td> :</td>"
                                                    +"<td>"+ value.imtu_obesitas+"</td>"
                                                    +"<td>anak</td>"
                                                +"</tr>"
                                                +"</tbody>"
                                                +"</table>"+"<hr>")
                                            .openPopup();
                            });



                            // L.marker([-8.125503434883228, 113.80904096228058]).addTo(stunting).bindPopup("Desa Kalisat").openPopup();
                            // L.marker([-8.132476275692488, 113.82167901703589]).addTo(stunting).bindPopup("Desa Ajung").openPopup();
                            // L.marker([-8.154649283611384, 113.81099439928921]).addTo(stunting).bindPopup("Desa Gambiran").openPopup();
                            // L.marker([-8.140062, 113.805404]).addTo(stunting).bindPopup("Desa Glagahwero").openPopup();
                            // L.marker([-8.122859810723222, 113.78100150785717]).addTo(stunting).bindPopup("Desa Gumuksari").openPopup();
                            // L.marker([-8.116063, 113.796753]).addTo(stunting).bindPopup("Desa Patempuran").openPopup();
                            // L.marker([-8.141124159209618, 113.82727512557274]).addTo(stunting).bindPopup("Desa Plalangan").openPopup();
                            // L.marker([-8.098947704220556, 113.82152334856546]).addTo(stunting).bindPopup("Desa Sebanen").openPopup();
                            // L.marker([-8.103997, 113.787054]).addTo(stunting).bindPopup("Desa Sukoreno").openPopup();
                            // L.marker([-8.131348732809496, 113.7961014636392]).addTo(stunting).bindPopup("Desa Sumber Jeruk").openPopup();
                            // L.marker([-8.086019328665126, 113.79139447897944]).addTo(stunting).bindPopup("Desa Sumber Kalong").openPopup();
                            // L.marker([-8.117572574122546, 113.82618268324286]).addTo(stunting).bindPopup("Desa Sumber Ketempa").openPopup();

                            // firebase.database().ref('longitude').on('value', (snap) => {
                            //     longitude = snap.val();
                            //     firebase.database().ref('latitude').on('value', (snap) => {
                            //         latitude = snap.val();
                            //         L.marker([latitude, longitude]).addTo(stunting).bindPopup("Lokasi Saat ini");
                            //     });
                            // });



                            var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

                            var streets = L.tileLayer(mbUrl, {
                                id: 'mapbox/streets-v11',
                                tileSize: 512,
                                zoomOffset: -1,
                                attribution: mbAttr
                            });
                            
                            var googlestreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                                maxZoom: 20,
                                tileSize: 512,
                                zoomOffset: -1,
                                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                            });

                            var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                                maxZoom: 20,
                                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                            });
                            var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                                maxZoom: 20,
                                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                            });
                            var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
                                maxZoom: 20,
                                subdomains:['mt0','mt1','mt2','mt3']
                            });

                            var map = L.map('map', {
                                center: [-8.264071128904432, 113.44838799673902],
                                zoom: 12,
                                layers: [googleHybrid, stunting]
                            });

                            var baseLayers = {
                                "Streets": streets,
                                "Google Streets" : googlestreets, 
                                "Google Satelite" :googleSat, 
                                "Google Hybrid" : googleHybrid,
                                "Google Terrain" : googleTerrain
                            };

                            var overlays = {
                                "Stunting": stunting
                            };

                            

                            var popup = L.popup();
                            L.control.scale().addTo(map);


                            function onMapClick(e) {
                                popup
                                    .setLatLng(e.latlng)
                                    .setContent("Mark " + e.latlng.toString())
                                    .openOn(map);
                            }

                            // control that shows state info on hover
                            map.on('click', onMapClick);
                            
                            var info = L.control();

                            info.onAdd = function (map) {
                                this._div = L.DomUtil.create('div', 'info');
                                this.update();
                                return this._div;
                            };

                            info.update = function (props) {
                                this._div.innerHTML = '' + (props ?
                                    '<b>DESA ' + props.name + '</b><br />' :
                                    '');
                            };

                            info.addTo(map);


                            // get color depending on population density value
                            function getColor(d) {
                                return d > 1000 ? '#800026' :
                                    d > 500 ? '#BD0026' :
                                    d > 200 ? '#E31A1C' :
                                    d > 100 ? '#FC4E2A' :
                                    d > 50 ? '#FD8D3C' :
                                    d > 20 ? '#FEB24C' :
                                    d > 10 ? '#009000' :
                                    '#008000';
                            }

                            function style(feature) {
                                return {
                                    weight: 2,
                                    opacity: 1,
                                    color: 'white',
                                    dashArray: '3',
                                    fillOpacity: 0.7,
                                    fillColor: getColor(feature.properties.density)
                                };
                            }

                            function highlightFeature(e) {
                                var layer = e.target;

                                layer.setStyle({
                                    weight: 5,
                                    color: '#666',
                                    dashArray: '',
                                    fillOpacity: 0.7
                                });

                                if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                                    layer.bringToFront();
                                }

                                info.update(layer.feature.properties);
                            }

                            var geojson;
                            var geoJson1;

                            function resetHighlight(e) {
                                geojson.resetStyle(e.target);
                                geojson1.resetStyle(e.target);
                                info.update();
                            }

                            function zoomToFeature(e) {
                                map.fitBounds(e.target.getBounds());
                            }

                            function onEachFeature(feature, layer) {
                                layer.on({
                                    mouseover: highlightFeature,
                                    mouseout: resetHighlight,
                                    click: zoomToFeature
                                });
                            }
                            // console.log(statesData);
                            geojson = L.geoJson(statesData, {
                                style: style,
                                onEachFeature: onEachFeature
                            }).addTo(stunting);

                            geojson1 = L.geoJson(kemuningData, {
                                style: style,
                                onEachFeature: onEachFeature
                            }).addTo(umkm);

                            map.attributionControl.addAttribution('Data Stunting dan UMKM</a>');


                            var legend = L.control({
                                position: 'bottomright'
                            });

                            var arcgisOnlineProvider = L.esri.Geocoding.arcgisOnlineProvider({
                                apikey: "https://developers.arcgis.com" // replace with your api key - https://developers.arcgis.com
                            });

                            var gisDayProvider = L.esri.Geocoding.featureLayerProvider({
                                url: 'https://services.arcgis.com/BG6nSlhZSAWtExvp/ArcGIS/rest/services/GIS_Day_Registration_Form_2019_Hosted_View_Layer/FeatureServer/0',
                                searchFields: ['event_name', 'host_organization'],
                                label: 'GIS Day Events 2019',
                                bufferRadius: 5000,
                                formatSuggestion: function (feature) {
                                    return feature.properties.event_name + ' - ' + feature.properties.host_organization;
                                }
                            });

                            L.esri.Geocoding.geosearch({
                                providers: [arcgisOnlineProvider, gisDayProvider]
                            }).addTo(map);

                            L.control.layers(baseLayers, overlays).addTo(map);
                            // legend.onAdd = function (map) {

                            //     var div = L.DomUtil.create('div', 'info legend'),
                            //         grades = [0, 10, 20, 50, 100, 200, 500, 1000],
                            //         labels = [],
                            //         from, to;

                            //     for (var i = 0; i < grades.length; i++) {
                            //         from = grades[i];
                            //         to = grades[i + 1];

                            //         labels.push(
                            //             '<i style="background:' + getColor(from + 1) + '"></i> ' +
                            //             from + (to ? '&ndash;' + to : '+'));
                            //     }

                            //     div.innerHTML = labels.join('<br>');
                            //     return div;
                            // };

                            // legend.addTo(map);
                        });
                    </script>
                    @endsection