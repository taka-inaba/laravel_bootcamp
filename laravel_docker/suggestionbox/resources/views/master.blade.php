<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
    <div class="containers">
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <div class="card-body">
                        @yield('sidebar_left')
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>

            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body">
                        @yield('sidebar_right')
                    </div>
                </div>

            </div>
        </div>
    </div>



</body>
</html>

