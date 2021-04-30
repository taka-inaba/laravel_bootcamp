<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlogPlatform</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style type="text/css">
        h1 {
            font-family: cursive;
            /* font-family: "fantasy"; */
        }
    </style>

</head>
<body>
    <div class="containers">
        <div class="row">
            <div class="col-12">
                    <h1 align='center' style="color: red">Blog Platform</h1>
            </div>
            <div class="col-2">
            {{-- <div class="col-2 sticky-top vh-100 side" > --}}
                <div class="card" style="background-color: rgba(204, 204, 255, 0.55)" >
                    <div class="card-body">
                        @yield('sidebar_left')
                        <a href=" {{ route('list') }} ">User List</a>
                    </div>
                </div>
            </div>
            <div class="col-10">
                    @yield('content')
            </div>
        </div>
    </div>

    {{-- <div class="containers">
        @yield('content')
    </div> --}}


</body>
</html>

