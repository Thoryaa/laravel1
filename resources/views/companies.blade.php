<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
       <link rel="stylesheet" href="{{ URL::asset('assest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assest/css/style.css') }}">
    <title>jobs</title>
</head>

<body>
    <!--nav-->
     @include('includes/header')
    <!--  -->
    <!-- compenise -->
    <div class="container my-5">
        <div class="d-flex justify-content-between border-top">
            <h4>Companice</h4>
        </div>
        <div class="row mt-2 ">
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3">
                     <img src="{{ URL::asset('assest/images/Capture.png') }}" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">CRYSTEL</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i> <small class="ml-1">Location - Amman,
                                Jordan</small> </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Company Website
                                http://www.crystel.co</small>
                            <a href="jobdetails.html"> <button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">More
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3"> 
                    <img src="{{ URL::asset('assest/images/logo-GTFS.png') }}" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">CGTFS</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">Location
                                Dubai,
                                UAE</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Company Website
                                http://www.crystel.co</small>
                            <a href="jobdetails.html"> <button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">More
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3"> 
                    <img src="{{ URL::asset('assest/images/Injaz_Logo.png') }}" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">INJAZ</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">Location
                                Amman, Jorden</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Company Website
                                http://www.injaz.org.jo</small>
                            <a href="jobdetails.html"> <button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">More
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3">
                     <img src="{{ URL::asset('assest/images/telcom.jpg') }}"alt="" class="img-fluid"> <span
                            class="d-block fw-bold">Teleperformance</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">Cairo, Egypt</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Company Website
                                http://www.injaz.org.jo</small>
                            <a href="jobdetails.html"> <button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">More
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
      <!-- Footer -->
        @include('includes/footer')
    <!-- Footer -->
    <script src="{{ URL::asset('assest/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>