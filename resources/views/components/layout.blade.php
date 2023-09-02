<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="E-Robot is a team that comes with a pure heart of cambodia youths.">
    <meta name="keywords" content="E-Robot,Technology,Robotics, Website , Mobile, Charity">
    <meta name="author" content="E_Robot_Development_Team">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="{{asset('../styles/style.css')}}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <link rel="stylesheet" href="{{ URL:: asset('css/homePage.css')}}">
    <link rel="stylesheet" href="{{ URL:: asset('../css/homePage.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@300;400;700;900&display=swap" rel="stylesheet">
    
    <link rel="icon" href="/images/logo_erobot-removebg.png">
    
    <title>E-robot</title>
</head>
<body>
    @include('./partials/_nav-bar')
   <main>
    {{$slot}}
   </main>
   @include('./partials/_footer')
</body>
</html>