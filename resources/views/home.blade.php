<html>
    <head>
        @vite('resources/css/app.css')
    </head>
    <body >
        <div class="grid w-full h-screen grid-cols-4 bg-gray-500">
            <div class="flex flex-col items-center justify-center bg-white">
                <img class="w-[200px] h-[290px] bg-gray-500 rounded-full" src="{{ asset('images/profile.jpg') }}"/>
                
                <div class="flex flex-row justify-center w-full mt-5 text-lg tracking-wider uppercase gap-x-2">
                    <div class="font-bold">Robby</div>
                    <div class="font-light">Ilhamkusuma</div>
                </div>

                <a href="{{ asset('files/CV.pdf') }}" class="p-2 mt-2 text-xs font-light text-black uppercase duration-200 bg-white border-2 border-blue-400 hover:text-white hover:bg-blue-400 " target="_blank" download>Download CV</a>
            </div>
            
            <div class="flex flex-col px-5 pt-10 bg-white ">
                <div class="flex flex-row px-2 py-1 text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-bold">About</div>
                    <div class="font-light">Me</div>
                </div>

                <div class="mt-3 text-xl font-light tracking-wider text-black">
                    I'm Robby Ilhamkusuma - 35 years old professional Fullstack Developer in Jakarta
                </div>
            </div>

            <div class="bg-green-500">Child component 3</div>
            <div class="bg-yellow-500">Child component 4</div>
        </div>
    </body>
</html>