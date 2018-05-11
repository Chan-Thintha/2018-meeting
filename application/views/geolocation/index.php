<?php
echo '
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- Bootstrap stuff -->
    <!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src="../dist/locationpicker.jquery.min.js"></script>
    <title>Simple example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .pac-container {
            z-index: 99999;
        }
    </style>
</head>

<body>
    <button data-target="#us6-dialog" data-toggle="modal">Click hear to open dialog</button>
    <div id="us6-dialog" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Location:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="us3-address" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Radius:</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="us3-radius" />
                            </div>
                        </div>
                        <div id="us3" style="width: 100%; height: 400px;"></div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="m-t-small">
                            <label class="p-r-small col-sm-1 control-label">Lat.:</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" style="width: 110px" id="us3-lat" />
                            </div>
                            <label class="p-r-small col-sm-2 control-label">Long.:</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" style="width: 110px" id="us3-lon" />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <script>
                            $('#us3').locationpicker({
                                location: {
                                    latitude: 46.15242437752303,
                                    longitude: 2.7470703125
                                },
                                radius: 300,
                                inputBinding: {
                                    latitudeInput: $('#us3-lat'),
                                    longitudeInput: $('#us3-lon'),
                                    radiusInput: $('#us3-radius'),
                                    locationNameInput: $('#us3-address')
                                },
                                enableAutocomplete: true,
                                markerIcon: 'http://www.iconsdb.com/icons/preview/tropical-blue/map-marker-2-xl.png'
                            });
                            $('#us6-dialog').on('shown.bs.modal', function () {
                                $('#us3').locationpicker('autosize');
                            });
                        </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</body>

</html>';