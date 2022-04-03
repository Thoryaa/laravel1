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
    <!-- Wrapper container -->
    <section id="hero" class="bg-light text-dark text-center text-sm-start  py-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('assest/images/undraw_connected_re_lmq2.svg') }}" alt="" class="d-none d-sm-block img-fluid w-50">
                <form id="contactForm" class="row g-3">

                    <!-- Name input -->
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Name"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>

                    <!-- Email address input -->
                    <div class="mb-3">
                        <label class="form-label" for="emailAddress">Email Address</label>
                        <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
                            data-sb-validations="required, email" />
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is
                            required.</div>
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not
                            valid.</div>
                    </div>

                    <!-- Message input -->
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" type="text" placeholder="Message"
                            style="height: 10rem;" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                    </div>

                    <!-- Form submissions success message -->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">Form submission successful!</div>
                    </div>

                    <!-- Form submissions error message -->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>

                    <!-- Form submit button -->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit" style=" background:#f4931e;border: 1px solid #f4931e;">Submit</button>
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