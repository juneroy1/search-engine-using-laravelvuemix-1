<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body id="app">
        <ul>
            <li><router-link to="/">Users</router-link></li>
            <li><router-link to="/animals">Animals</router-link></li>
            <li><router-link to="/colors">Colors</router-link></li>
        </ul>
        <router-view></router-view>
    </body>
</html>
