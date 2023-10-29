<!DOCTYPE html>
<html>

<head>
    <title>IKONIC TEST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
    </style>
</head>

<body>

    <div class="container-fluid d-flex justify-content-center">
        <div class="col-12 col-md-6">
          
            <h1 class="text-center text-nowrap mt-2 text-success">Login</h1>
            <div class="content-wrapper container-xxl p-0">
                {{ view('app.layouts.alerts') }}
            </div>
            @yield('content')
        </div>
    </div>


</body>

</html>
