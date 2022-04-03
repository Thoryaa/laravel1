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


    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 col-sm-12">
                <button id="btn-download-cv" class="btn"
                    style=" background:#f4931e;border: 1px solid #f4931e; color: white;"> download</button>
                <div class="card" id="cv">

                    <div class="card-body">
                        <h5 class="card-title">personal information</h5>
                        <div class="card-text row d-md-flex justify-content-lg-between  ">
                        <img src="{{ asset('assest/images/r.jpg') }}" alt=""
                                class="img-fluid w=25 col-3 rounded-pill d-none d-sm-flex">
                            <div class="col-8">
                                <p>full name: Ruqaiah Abdo Saif</p>
                                <p>Email: ruqaiah@gmail.com</p>
                                <p>Phone:+967 (770695605)</p>
                                <p>Address: AL Rodh_ Taiz –Yemen</p>
                                <p>Gender:Female </p>
                            </div>

                        </div>

                        <hr>
                        <h5 class="card-title mt-3">EXPERIENCE</h5>
                        <div class="card-text mx-5">
                            <p> job title: Volunteer WFP Project Alqahira and Almoudhaffar District.</p>
                            <p>Experince years: 2 </p>
                        </div>
                        <hr>
                        <h5 class="card-title mt-3">Educational</h5>
                        <div class="card-text mx-5">
                            <p> Level of Education : University Bachelors
                                .</p>
                            <p>Name: Taiz university </p>
                            <p>Degree: Software Engineering </p>
                        </div>
                        <hr>
                        <h5 class="card-title mt-3">SKILLS</h5>
                        <div class="card-text mx-5">
                            <p> programming skills</p>
                            <p>Speaking and writing English languages </p>

                        </div>
                        <hr>
                        <h5 class="card-title mt-3">Courses</h5>
                        <div class="card-text mx-5">
                            <p> Diploma in English Language from British Center</p>


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
    <!-- <script type="text/javascript"
                    src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

    <script src="{{ URL::asset('assest/js/jquery.min.js') }}"></script>
    <script>

        $(document).on('click', '#btn-download-cv', function () {

            let pdf = new jsPDF();
            let section = $('#cv');
            let page = function () {
                pdf.save('pagename.pdf');
            };
            pdf.addHTML(section, page);
        });
    </script>

</body>

</html>