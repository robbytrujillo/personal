<html>
    <head>
        @vite('resources/css/app.css')
    </head>
    <body >
        <div class="w-full h-screen grid grid-cols-4 bg-gray-500">
            <div class="bg-white flex flex-col justify-center items-center">
                <img class="w-[200px] h-[200px] bg-gray-500 rounded-full" />
            </div>
            <div class="bg-blue-500">Child component 2</div>
            <div class="bg-green-500">Child component 3</div>
            <div class="bg-yellow-500">Child component 4</div>
        </div>
    </body>
</html>