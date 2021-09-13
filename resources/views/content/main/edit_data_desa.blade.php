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
                                                        <h5>Edit Data Desa</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <hr>
                                                        <form method="POST" action="{{ url('data-desa/'.$data->id_desa)}}"accept-charset="UTF-8">
                                                            {{ csrf_field() }}
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama desa</label>
                                                                <div class="col-sm-4">
                                                                    <input type="hidden" name="_method" id="_method"
                                                                        class="form-control" value="PATCH"
                                                                        required>
                                                                    <input type="text" name="nama_desa" id="nama_desa"
                                                                        class="form-control" placeholder="Contoh : Nama Desa" value="{{$data->nama_desa}}"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4"></div>
                                                                <div class="col-md-8">
                                                                    <div id="map"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Koordinat</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="longtd" id="longtd"
                                                                        class="form-control" placeholder="Contoh : -8.100635" value="{{$data->longtd}}"
                                                                        required >
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="latd" id="latd"
                                                                        class="form-control" value="{{$data->latd}}" placeholder="Contoh : 113.701378"
                                                                        required >
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group">
                                                                <div class="col-sm-2">
                                                                    <button type="submit" class="btn btn-primary" name="simpan"
                                                                    id="simpan">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-1"></div>
                                            <!--  sale analytics end -->
                                        </div>
                                    </div>
                                </div>
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

                            var umkm = L.layerGroup();

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
                                zoom: 17,
                                layers: [googleHybrid, umkm]
                            });

                            var baseLayers = {
                                "Streets": streets,
                                "Google Streets" : googlestreets, 
                                "Google Satelite" :googleSat, 
                                "Google Hybrid" : googleHybrid,
                                "Google Terrain" : googleTerrain
                            };

                            var overlays = { 
                                "UMKM": umkm
                            };

                            var popup = L.popup();
                            L.control.scale().addTo(map);

                            map.panTo([{{$data->longtd}}, {{$data->latd}}]);
                            var markerGroup = L.layerGroup().addTo(umkm);
                            L.marker([{{$data->longtd}}, {{$data->latd}}]).addTo(markerGroup);
                            function onMapClick(e) {
                                markerGroup.clearLayers();
                                var koordinat   = e.latlng.toString();
                                koordinat       = koordinat.replace("LatLng(", "");
                                koordinat       = koordinat.replace(")", "");
                                koordinat       = koordinat.replace(", ", ",");
                                var kdt         = koordinat.split(",");
                                var longtd      = kdt[0];
                                var latd        = kdt[1];
                                L.marker([longtd, latd]).addTo(markerGroup).bindPopup(koordinat).openPopup();
                                document.getElementById('longtd').value = longtd;
                                document.getElementById('latd').value   = latd;
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
                            
                        });
                    </script>
                    @endsection