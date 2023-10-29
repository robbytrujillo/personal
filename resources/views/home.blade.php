<html>
    <head>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        
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
                    I'm <span class="font-bold">Robby Ilhamkusuma</span>  - 35 years old professional Fullstack Developer in Jakarta
                </div>

                <div class="mt-3 text-xs font-light text-black">
                    Through 3+ years of my experience. I have been working for over <span class="font-bold">10+ projects</span> with different for programming languages and frameworks such a PHP, Java, Javascript, Dart, Codeigniter, Laravel, Spring, Flutter, HTML-CSS, NodeJs, NuxtJs, VueJs, ReactJs. Don't hesitate to contact me, if you want to collaborate with me. Growth Learning..   
                </div>

                <div class="flex flex-row px-2 py-1 mt-10 text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-light">My</div>
                    <div class="font-bold">Services</div>
                </div>

                <div class="flex flex-row w-full mt-6 gap-x-4">
                        <div class="w-[60px] h-[60px] min-w-[60px] min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full">
                            <span class="material-symbols-outlined">
                                brush
                                </span>
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="text-base font-bold tracking-wider uppercase ">User Interface Design</div>
                            <div class="text-xs italic font-light">Deliver UI (User Interface) using Figma for your website and/or application</div>
                        </div>
                </div>

                <div class="flex flex-row w-full mt-6 gap-x-4">
                        <div class="w-[60px] h-[60px] min-w-[60px] min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full">
                            <span class="material-symbols-outlined">
                                smartphone
                                </span>
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="text-base font-bold tracking-wider uppercase ">Mobile Application</div>
                            <div class="text-xs italic font-light">Deliver awesome mobile application for your needs</div>
                        </div>
                </div>
                
                <div class="flex flex-row w-full mt-6 gap-x-4">
                        <div class="w-[60px] h-[60px] min-w-[60px] min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full">
                            <span class="material-symbols-outlined">
                                computer
                                </span>
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="text-base font-bold tracking-wider uppercase ">Web Aplication</div>
                            <div class="text-xs italic font-light">Deliver awesome website application for your needs</div>
                        </div>
                </div>
            </div>

            <div class="bg-green-500">Child component 3</div>
            <div class="bg-yellow-500">Child component 4</div>
        </div>
    </body>
</html>