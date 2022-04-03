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
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-md-4 shadow-lg">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <i class="bi bi-file-person"></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">Ruqaiah</h6>
                            </div>
                        </div>

                    </div>
                    <div class="mt-5">
                        <h3 class="heading">Software Engineering</h3>
                        <div class="mt-5">

                            <div class="mt-3"> <a href="profile.html"><button class="btn bthover"
                                        style="border:1px solid #f4931e"> CV</button></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 shadow-lg">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <i class="bi bi-file-person"></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">Amany</h6>
                            </div>
                        </div>

                    </div>
                    <div class="mt-5">
                        <h3 class="heading">Software Engineering</h3>
                        <div class="mt-5">

                            <div class="mt-3"> <a href="profile.html"><button class="btn bthover"
                                        style="border:1px solid #f4931e">
                                        CV</button></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-4 shadow-lg">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bi bi-file-person"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">Thorya</h6>
                        </div>
                    </div>
        
                </div>
                <div class="mt-5">
                    <h3 class="heading"> Computer Science</h3>
                    <div class="mt-5">
        
                        <div class="mt-3"> <a href="profile.html"><button class="btn bthover" style="border:1px solid #f4931e">
                                    CV</button></a> </div>
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