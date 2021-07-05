                    @extends('parts.main.master')
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
                                                        <div id="map" style="height: 500px; width: 1000px"></div>
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
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="{{asset('assets/kalisat.js')}}"></script>
                    <script>
                        $(document).ready(function() {
                            var stunting = L.layerGroup();

                            L.marker([-8.133347613059657, 113.80648288324299]).addTo(stunting).bindPopup("Kantor Kecamatan Kalisat").openPopup();


                            var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

                            var streets = L.tileLayer(mbUrl, {
                                    id: 'mapbox/streets-v11',
                                    tileSize: 512,
                                    zoomOffset: -1,
                                    attribution: mbAttr
                                });

                            var map = L.map('map', {
                                center: [-8.133347613059657, 113.80648288324299],
                                zoom: 13,
                                layers: [streets, stunting]
                            });

                            var baseLayers = {
                                "Streets": streets
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
                                this._div.innerHTML = '<b>KECAMATAN KALISAT</b><br/>' + (props ?
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
                                    d > 10 ? '#FED976' :
                                    '#FFEDA0';
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

                            function resetHighlight(e) {
                                geojson.resetStyle(e.target);
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
                            console.log(statesData);
                            geojson = L.geoJson(statesData, {
                                style: style,
                                onEachFeature: onEachFeature
                            }).addTo(map);

                            map.attributionControl.addAttribution('Data Stunting</a>');


                            var legend = L.control({
                                position: 'bottomright'
                            });

                            var arcgisOnline = L.esri.Geocoding.arcgisOnlineProvider();

                            L.esri.Geocoding.geosearch({
                                providers: [
                                    arcgisOnline,
                                    L.esri.Geocoding.mapServiceProvider({
                                        label: 'States and Counties',
                                        url: 'https://sampleserver6.arcgisonline.com/arcgis/rest/services/Census/MapServer',
                                        layers: [2, 3],
                                        searchFields: ['NAME', 'STATE_NAME']
                                    })
                                ]
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