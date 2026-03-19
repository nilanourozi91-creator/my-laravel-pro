<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body style="background-color:#4a5565; color:green; font-size:40px;">

    <livewire:test/>
    <livewire:book-list/>

    @livewireScripts
</body>
</html>