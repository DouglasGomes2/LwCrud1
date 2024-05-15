<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1 class="text-center text-5xl">Pagina</h1>
    <br/>
    <div  x-data="{ open: false }">
        <button x-on:click="open = ! open" class="bg-blue-700">Toggle</button>
    <p class="bold text-sm" x-show="open" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur iste nihil error cumque nisi minus aut eos,
        assumenda delectus dolorem. Unde sequi consequatur minima necessitatibus repellendus cupiditate ipsa fugiat
        incidunt!s</p>
    </div>
    <div>
        <button></button>
    </div>
</body>

</html>
