<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('assets/css/components/template.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/components/menu.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/components/pagination.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/components/table-main.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/components/bar-main.css') }}">
</head>

<body>


    <x-header></x-header>
    
     <div class="container-fluid">
        <div class="row full-screen">
            <div class="col-md-2" style="padding: 0; background-color: #414956;">
                <x-menu></x-menu>
            </div>
            <div class="col-md-10 border">
                @yield('content')
            </div>
        </div>
    </div>

    <x-modal-confirmation></x-modal-confirmation>

    <script type='text/javascript' src="{{url('assets/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
    <script type='text/javascript' src="{{url('assets/js/components/modal-confirmation.js')}}"></script>
</body>

</html>