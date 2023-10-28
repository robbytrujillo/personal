<html>
    <head>
        @vite('resources/css/app.css')
    </head>
    <body >
        <div class="w-full h-screen grid grid-cols-4 bg-gray-500">
            <div class="bg-white flex flex-col justify-center items-center">
                <img class="w-[200px] h-[290px] bg-gray-500 rounded-full" src="{{ asset('images/profile.jpg') }}"/>
                
                <div class="w-full uppercase flex flex-row justify-center mt-5 text-lg gap-x-2 tracking-wider">
                    <div class="font-bold">Robby</div>
                    <div class="font-light">Ilhamkusuma</div>
                </div>

                <a href="{{ asset('files/CV.pdf') }}" class="p-2 mt-2 uppercase font-light text-xs text-black hover:text-white bg-white border-2 hover:bg-blue-400 border-blue-400 duration-200 " target="_blank" download>Download CV</a>
            </div>
            
            <div class="bg-blue-500">Child component 2</div>
            <div class="bg-green-500">Child component 3</div>
            <div class="bg-yellow-500">Child component 4</div>
        </div>
    </body>
</html>