<html>
    <head>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <title>Home | Robby Ilhamkusuma Personal Website</title>
    </head>
    <body >
        <div class="grid w-full h-screen grid grid-cols-1  lg:grid-cols-4 bg-gray-500">
            <div class="flex flex-col items-center justify-center bg-white pt-10 lg:pt-0">
                <img class="w-[270px] lg:w-[200px] h-[400px] lg:h-[290px] bg-gray-500 rounded-full" src="{{ asset('images/profile.jpg') }}"/>
                
                <div class="flex flex-row justify-center w-full mt-5 text-5xl lg:text-lg tracking-wider uppercase gap-x-2">
                    <div class="font-bold">Robby</div>
                    <div class="font-light">Ilhamkusuma</div>
                </div>

                <a href="{{ asset('files/CV.pdf') }}" class="p-4 lg:p-2 mt-4 lg:mt-2 text-3xl lg:text-xs font-light text-black uppercase duration-200 bg-white border-2 border-blue-400 hover:text-white hover:bg-blue-400 " target="_blank" download>Download CV</a>
            </div>
            
            <div class="flex flex-col px-10 lg:px-5 pt-10 bg-white ">
                <div class="flex flex-row px-2 py-1 text-3xl lg:text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-bold">About</div>
                    <div class="font-light">Me</div>
                </div>

                <div class="mt-3 text-4xl lg:text-xl font-light tracking-wider text-black">
                    I'm <span class="font-bold">Robby Ilhamkusuma</span>  - 35 years old professional Fullstack Developer in Jakarta
                </div>

                <div class="mt-3 text-3xl lg:text-xs font-light text-black">
                    Through 3+ years of my experience. I have been working for over <span class="font-bold">10+ projects</span> with different for programming languages and frameworks such a PHP, Java, Javascript, Dart, Codeigniter, Laravel, Spring, Flutter, HTML-CSS, NodeJs, NuxtJs, VueJs, ReactJs. Don't hesitate to contact me, if you want to collaborate with me. Growth Learning..   
                </div>

                <div class="flex flex-row px-2 py-1 mt-20 lg:mt-10 text-3xl lg:text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-light">My</div>
                    <div class="font-bold">Services</div>
                </div>

                <div class="flex flex-row w-full mt-6 gap-x-4">
                        <div class="w-[90px] lg:w-[60px] h-[90px] lg:h-[60px] min-w-[90px] lg:min-w-[60px] min-h-[90px] lg:min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full">
                            <span class="material-symbols-outlined">
                                brush
                                </span>
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="text-3xl lg:text-base font-bold tracking-wider uppercase ">User Interface Design</div>
                            <div class="text-2xl lg:text-xs italic font-light">Deliver UI (User Interface) using Figma for your website and/or application</div>
                        </div>
                </div>

                <div class="flex flex-row w-full mt-6 gap-x-4">
                    <div class="w-[90px] lg:w-[60px] h-[90px] lg:h-[60px] min-w-[90px] lg:min-w-[60px] min-h-[90px] lg:min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full">
                            <span class="material-symbols-outlined">
                                smartphone
                                </span>
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="text-3xl lg:text-base font-bold tracking-wider uppercase ">Mobile Application</div>
                            <div class="text-2xl lg:text-xs italic font-light">Deliver awesome mobile application for your needs</div>
                        </div>
                </div>
                
                <div class="flex flex-row w-full mt-6 gap-x-4">
                    <div class="w-[90px] lg:w-[60px] h-[90px] lg:h-[60px] min-w-[90px] lg:min-w-[60px] min-h-[90px] lg:min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full">
                            <span class="material-symbols-outlined">
                                computer
                                </span>
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="text-3xl lg:text-base font-bold tracking-wider uppercase ">Web Aplication</div>
                            <div class="text-2xl lg:text-xs italic font-light">Deliver awesome website application for your needs</div>
                        </div>
                </div>
            </div>

            <div class="flex flex-col px-10 lg:px-5 pt-20 lg:pt-10 bg-white">
                <div class="flex flex-row px-2 py-1 text-3xl lg:text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-bold">Skills</div>
                    <div class="font-light">&</div>
                    <div class="font-light">Abilities</div>
                </div>
                
                <div class="flex justify-end w-full mt-3 text-2xl lg:text-xs font-light">
                    85%
                </div>
                <div class="w-full h-[10px] lg:h-[2px] bg-gray-300 mt-1">
                    <div class="w-10/12 h-[10px] lg:h-[2px] bg-gray-900 "></div>
                </div>
                <div class="text-2xl lg:text-xs font-light uppercase">UI Design</div>

                <div class="flex justify-end w-full mt-3 text-2xl lg:text-xs font-light">
                    90%
                </div>
                <div class="w-full h-[10px] lg:h-[2px] bg-gray-300 mt-1">
                    <div class="w-11/12 h-[10px] lg:h-[2px] bg-gray-900 "></div>
                </div>
                <div class="text-2xl lg:text-xs font-light uppercase">Mobile Programming</div>
                
                <div class="flex justify-end w-full mt-3 text-2xl lg:text-xs font-light">
                    85%
                </div>
                <div class="w-full h-[10px] lg:h-[2px] bg-gray-300 mt-1">
                    <div class="w-10/12 h-[10px] lg:h-[2px] bg-gray-900 "></div>
                </div>
                <div class="text-2xl lg:text-xs font-light uppercase">Web Programming</div>

                <div class="flex flex-row px-2 py-1 mt-20 lg:mt-5 text-3xl lg:text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-bold">Education</div>
                    <div class="font-light">&</div>
                    <div class="font-light">Jobs</div>
                </div>

                <div class="mt-4 text-2xl lg:text-xs font-light">
                    Jun 2020 - Present
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    FREELANCE <span class="font-light">WEB DEVELOPER</span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">Laksana Web Solution</div>
                
                <div class="mt-4 text-2xl lg:text-xs font-light">
                    November 2017 - Present
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    IT, TEACHER, & <span class="font-light"> PROGRAMMER</span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">Ibnu Hajar Boarding School Jakarta</div>

                <div class="mt-4 text-2xl lg:text-xs font-light">
                    Des 2014 - Des 2016
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    AO &<span class="font-light"> CREDIT ANALYST</span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">PT Bank Sinarmas</div>

                <div class="mt-4 text-2xl lg:text-xs font-light">
                    Des 2012 - Des 2014
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    ACCOUNT <span class="font-light">OFFICER</span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">PT Bank Victoria Syariah</div>

                <div class="mt-4 text-2xl lg:text-xs font-light">
                    Juli 2012 - Des 2012
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    MERCHAN<span class="font-light">DISER</span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">Danone Nutricia Research</div>

                <div class="mt-4 text-2xl lg:text-xs font-light">
                    Jan 2012 - Jun 2012
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    
                RELATIONSHIP <span class="font-light">OFFICER</span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">PT Bank BTPN</div>
            </div>
            
            <div class="flex flex-col px-10 lg:px-5 pt-20 lg:pt-10 bg-white">
                <div class="flex flex-row px-2 py-1 text-3xl lg:text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-bold">Certificates</div>
                </div>
                <div class="mt-4 text-2xl lg:text-xs font-light">
                    Jul 2023 - Jun 2026
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    
                    CLOUD PRACTITIONER ESSENTIALS <span class="font-light"></span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">Dicoding Indonesia</div>
                
                <div class="mt-4 text-2xl lg:text-xs font-light">
                    Okt 2022
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    
                    SERTIFIKAT <span class="font-bold">NODEJS</span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">Progate</div>
                
                <div class="mt-4 text-2xl lg:text-xs font-light">
                    Apr - Jun 2022
                </div>
                <div class="text-4xl lg:text-base font-bold tracking-[.15em]">
                    
                    BOOTCAMP <span class="font-bold">FLUTTER</span>
                </div>
                <div class="text-2xl lg:text-xs italic font-light">Edspert</div>
                
                <div class="flex flex-row px-2 py-1 mt-10 text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-bold">Language Skills</div>
                </div>
                <div class="flex justify-end w-full mt-3 text-xs font-light">
                    NATIVE SPEAKER
                </div>
                <div class="w-full h-[2px] bg-gray-300 mt-1">
                    <div class="w-full h-[2px] bg-gray-900 "></div>
                </div>
                <div class="text-xs font-light uppercase">Bahasa Indonesia</div>
                
                <div class="flex justify-end w-full mt-3 text-xs font-light">
                    INTERMEDIATE LEVEL
                </div>
                <div class="w-full h-[2px] bg-gray-300 mt-1">
                    <div class="w-8/12 h-[2px] bg-gray-900 "></div>
                </div>
                <div class="text-xs font-light uppercase">English</div>
                
                <div class="flex flex-row px-2 py-1 mt-10 text-sm tracking-wider uppercase border-2 border-black gap-x-1 w-fit">
                    <div class="font-bold">HOBBIES</div>
                    <div class="font-light">&</div>
                    <div class="font-light">INTERESTS</div>
                </div>
                
                <div class="flex flex-row gap-x-2 uppercase mt-4">
                <div class="flex flex-col gap-y-2 items-center">
                    <div class="w-[60px] h-[60px] min-w-[60px] min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full"><span class="material-symbols-outlined">
                        code
                        </span></div>

                    <div class="font-light uppercase tracking-wider text-xs">Coding</div>
                </div>
                
                <div class="flex flex-col gap-y-2 items-center">
                    <div class="w-[60px] h-[60px] min-w-[60px] min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full"><span class="material-symbols-outlined">
                        menu_book
                        </span></div>

                    <div class="font-light uppercase tracking-wider text-xs">Reading</div>
                </div>
                
                <div class="flex flex-col gap-y-2 items-center">
                    <div class="w-[60px] h-[60px] min-w-[60px] min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full"><span class="material-symbols-outlined">
                        hiking
                        </span></div>

                    <div class="font-light uppercase tracking-wider text-xs">Hiking</div>
                </div>
                
                <div class="flex flex-col gap-y-2 items-center">
                    <div class="w-[60px] h-[60px] min-w-[60px] min-h-[60px] bg-gray-100 flex justify-center items-center rounded-full"><span class="material-symbols-outlined">
                        sports_soccer
                        </span></div>

                    <div class="font-light uppercase tracking-wider text-xs">Futsal</div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>