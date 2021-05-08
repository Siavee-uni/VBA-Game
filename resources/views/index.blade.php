<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VBA Game</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <livewire:styles />
</head>

<body class="container mx-auto my-auto ">

<!-- component -->
<div class="justify-center	">
    <x-menu-button name="Profile" buttonSize="1,3rem"/>
    <livewire:tutorial-menu-button name="Tutorial" buttonSize="1,3rem"/>
    <x-menu-button name="Herausforderung"  buttonSize="1,3rem"/>
    <x-menu-button name="Rangliste" buttonSize="1,3rem"/>
    <x-menu-button name="Logout" buttonSize="1,1m"/>
</div>

<livewire:scripts />
</body>

</html>
