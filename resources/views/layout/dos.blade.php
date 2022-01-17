<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('tailwind.css') }}"></link>


    <style>
        @yield('estilo');
    </style>

    <title>
        @yield("titulo")
    </title>
</head>

<body class="font-roboto bg-blue-900 text-white">
   
    <div class="text-center mt-4 text-2xl text-gray-200">


        <div class="max-w-7xl mx-auto px-2 m-auto">
            @yield("main")
        </div>

    </div>


</body>

</html>
