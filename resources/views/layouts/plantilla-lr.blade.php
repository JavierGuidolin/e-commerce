<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Merriweather:700,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="/css/app.css"> 
    <link rel="stylesheet" href="/css/partials/form-controls.css">

    @yield('styles')
      
    <link rel="shortcut icon" type="image/png" href="../img/bs-favicon.png" />
    <title> BookStore | @yield('titulo')</title>

</head>
<body>

    <main>
        @yield('content')
    </main>
    
</body>
</html>