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
    <section id="hero" class="bg-light text-dark text-center text-sm-start  py-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-center">
                <img src="{{ asset('assest/images/undraw_login_re_4vu2.svg ')}}" alt="" class="d-none d-sm-block img-fluid w-50">
                <form class="row g-3">

                    <div class="col-md-12">
                        <h5>Log in</h5>
                        <label for="validationDefaultUsername" class="form-label fw-bold">Username or Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" id="validationDefaultUsername"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label fw-bold">password</label>
                        <input type="password" class="form-control" id="validationDefault03" required>
                    </div>


                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Remember me
                            </label>

                        </div>
                    </div>
                    <div class="col-12">
                        <a href="dashboard.html" class="btn w-100"
                            style=" background:#f4931e;border: 1px solid #f4931e;">Log in</a>
                        <p>Don't have an account yet?<a href="signup.html">Sign Up Now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


  
         <!-- Footer -->
  @include('includes/footer')
    <!-- Footer -->
    <script src="{{ URL::asset('assest/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>