<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
     <link href="css/font.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <script src="js/navbar.js"></script>
    <title>Cloud Computing</title>
</head>
<body class="text-dark relative">
    <nav class="w-full fixed sm:px-[4.271vw] sm:pt-[0.7vw] sm:pb-[1.8vw] px-[8.372vw] pt-[5vw] pb-[6vw] bg-white z-40 sm:shadow shadow-none flex justify-between items-center top-0">
        <div class="flex items-center space-x-[4vw]">
            <img src="assets/logo.png" alt="" class="sm:w-[10.417vw] sm:h-[3.935vw] w-[34.884vw] h-[13.151vw] object-contain">
            <ul class="text-[1vw] sm:flex sm:items-center hidden pt-[1vw] space-x-[2vw]">
                <li class="hover:text-main transition-all duration-300 ease-in-out"><a href="index.html">Beranda</a></li>
                <!-- Menambahkan class group pada kategori-button -->
                <li id="kategori-button" class="cursor-pointer group relative"><p class="hover:text-main transition-all duration-300 ease-in-out">Kategori</p>
                    <!-- Div kategori dengan peer-hover untuk muncul saat kategori-button di-hover -->
                    <div id="kategori" class="absolute hidden group-hover:flex left-0 top-[1vw] mt-2 p-[2vw] bg-white shadow rounded-[0.781vw] w-[35vw]">
                        <div class="grid grid-cols-3 gap-[1vw] text-[0.938vw]">
                            <ul class="space-y-[1vw]">
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="">Hacker</a></li>
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="">IoT Engineer</a></li>
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="">Network Engineer</a></li>
                            </ul>
                            <ul class="space-y-[1vw]">
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="">Hipster</a></li>
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="category.html">Cloud Engineer</a></li>
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="">Fiber Optic Engineer</a></li>
                            </ul>
                            <ul class="space-y-[1vw]">
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="">Hustler</a></li>
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="">Graphic Designer</a></li>
                                <li class="hover:text-main ease-in-out duration-300 transition-all"><a href="">System Administrator</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="hover:text-main transition-all duration-300 ease-in-out"><a href="">Event</a></li>
            </ul>
        </div>
        <div class="pt-[1vw] sm:flex sm:items-center hidden space-x-[0.781vw]">
            <input type="text" name="" id="" class="w-[23.75vw] h-[3.385vw] border-[0.1vw] border-gray-300 rounded-[0.521vw] text-[0.938vw] placeholder:text-[0.938vw] px-[1vw] outline-none" placeholder="Cari proyek, kategori, atau nama siswa">
            <button class="py-[0.95vw] px-[2.604vw] bg-main rounded-[0.521vw] text-[1.042vw] font-semibold text-white">Masuk</button>
        </div>
        <div id="hamburger" class="sm:hidden pt-[3vw]">
            <img src="assets/hamburger.svg" alt="" class=" w-[6.047vw] h-[4.535vw]">
        </div>
    </nav>

    <div id="sidebar" class="absolute  z-30 w-[100vw] h-[216.744vw] px-[8.372vw] py-[6vw] bg-white top-0  rounded-[0.781vw]">
        <div class="flex relative flex-col items-center justify-center">
            <img src="assets/logo.png" alt="" class="w-[34.884vw] h-[13.151vw]">
            <img id="close" src="assets/close.svg" alt="" class="w-[4.186vw] h-[4.186vw] absolute right-[4vw] top-[6vw]">
            <ul class="flex flex-col justify-center items-center text-[4.186vw] font-medium mt-[5vw] space-y-[3vw]">
                <li class="w-[83.256vw] h-[13.023vw] flex justify-center items-center rounded-[2vw]"><a href="index.html">Beranda</a></li>
                <li>
                    <!-- ID untuk toggle -->
                    <p id="toggleKategori" class="w-[83.256vw] h-[13.023vw] flex justify-center items-center rounded-[2vw] nav-active border">
                        Kategori
                    </p>
                    <!-- Div yang akan ditampilkan dengan animasi -->
                    <div id="kategoriList" class="kategori-list w-full flex flex-col items-center justify-center bg-[#f9f9f9] overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                        <ul class="space-y-[6.977vw] flex flex-col items-center justify-center">
                            <li><a href="">Hacker</a></li>
                            <li><a href="">IoT Engineer</a></li>
                            <li><a href="">Network Engineer</a></li>
                            <li><a href="">Hipster</a></li>
                            <li><a href="category.html">Cloud Engineer</a></li>
                            <li><a href="">Fiber Optic Engineer</a></li>
                            <li><a href="">Hustler</a></li>
                            <li><a href="">Graphic Design</a></li>
                            <li><a href="">System Administrator</a></li>
                        </ul>
                    </div>
                </li>
                <li class=" w-[83.256vw] h-[13.023vw] flex justify-center items-center rounded-[2vw]">Event</li>
            </ul>
        </div>
    </div>

    
    <section class="sm:mt-[10vw] mt-[30vw] sm:px-[11.667vw] ">
        <div class="w-full flex flex-col justify-center items-center sm:space-y-[1.5vw] space-y-[7vw]">
            <div class=" flex flex-col justify-center items-center">
                <div class="bg-main sm:w-[5.208vw] sm:h-[0.521vw] w-[11.628vw] h-[1.163vw]"></div>
                <div class="space-y-[0.5vw] flex flex-col items-center">
                    <h1 class="font-semibold sm:text-[2.865vw] text-[7.907vw]">Cloud Engineer</h1>
                    <p class="sm:text-[1.042vw] text-[3.256vw] text-center sm:max-w-full max-w-[74.651vw]">Berbagai projek menarik dari Digital Talent Program Cloud Engineer</p>
                </div>
            </div>
            <div class="sm:w-auto w-full flex items-center sm:space-x-[2vw] space-x-[6.977vw] sm:px-[14.708vw] px-0 sm:ps-0 sm:pe-0 ps-[8.372vw] pe-[8.372vw] mt-[2vw] sm:overflow-hidden overflow-x-auto whitespace-nowrap scrollbar-hidden">
                <div class="sm:p-[0.521vw] p-[2.326vw] bg-[#F9F9F9] sm:rounded-[0.521vw] rounded-[2.326vw] flex items-center justify-center">
                    <h1 class="font-medium sm:text-[1.146vw] text-[4.186vw]">Cloud Engineer</h1>
                </div>
                <div class="flex justify-center">
                    <h1 class="font-medium sm:text-[1.146vw] text-[4.186vw]">Fiber Optic</h1>
                </div>
                <div class="flex justify-center">
                    <h1 class="font-medium sm:text-[1.146vw] text-[4.186vw]">Hacker</h1>
                </div>
                <div class="flex justify-center">
                    <h1 class="font-medium sm:text-[1.146vw] text-[4.186vw]">Hustler</h1>
                </div>
                <div class="flex justify-center">
                    <h1 class="font-medium sm:text-[1.146vw] text-[4.186vw]">IoT Engineer</h1>
                </div>
                <div class="flex justify-center">
                    <h1 class="font-medium sm:text-[1.146vw] text-[4.186vw]">Network Engineer</h1>
                </div>
                <div class="flex justify-center">
                    <h1 class="font-medium sm:text-[1.146vw] text-[4.186vw]">System Administrator</h1>
                </div>
            </div>
            <div class="flex sm:space-x-[1.042vw] space-x-[4.651vw] sm:px-[1.302vw] sm:py-[0.781vw] px-[5.814vw] py-[3.488vw] bg-[#F9F9F9] sm:rounded-[0.521vw] rounded-[2.326vw] items-center">
                <img src="assets/filter.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.563vw] w-[4.651vw] h-[4.651vw]">
                <h1 class="sm:text-[0.938vw] text-[4.186vw]">Filter</h1>
                <svg  viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="sm:w-[0.625vw] sm:h-[1.25vw] fill-dark w-[2.326vw] h-[4.651vw]">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.20324 7.15694L0.539454 1.49994L1.95515 0.0859375L6.91109 5.03594L11.867 0.0859375L13.2827 1.49994L7.61893 7.15694C7.43118 7.34441 7.17657 7.44972 6.91109 7.44972C6.6456 7.44972 6.39099 7.34441 6.20324 7.15694Z" fill-opacity="1"/>
                </svg>
            </div>
        </div>
    </section>

    <section class="sm:px-[4.375vw] sm:mt-[3vw] mt-[7vw] px-[1.875vw]">
        <div class="w-full sm:grid sm:grid-cols-4 grid-cols-1 flex flex-col justify-center items-center sm:gap-x-[1.042vw] sm:gap-y-[3vw] gap-y-[8vw]">
            <div class="relative group">
                <img src="assets/karya.png" alt="" class="sm:w-[22.083vw] sm:h-[14.063vw] w-[83.256vw] h-[55.542vw] object-cover rounded-[1.563vw]">
                
                <!-- Overlay dan informasi profile yang muncul saat hover -->
                <div class="sm:w-[21.7vw] sm:h-[7.0315vw] w-[83.256vw] h-[31.207vw] absolute sm:bottom-[5.3vw] bottom-[17.3vw] rounded-[1.563vw] bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="flex items-center absolute sm:bottom-[7vw] bottom-[22vw] sm:left-[3vw] left-[6vw] sm:space-x-[1vw] space-x-[2vw] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <img src="assets/profile-picture.png" alt="" class="sm:w-[1.656vw] sm:h-[1.656vw] w-[5.814vw] h-[5.814vw]">
                    <p class="sm:text-[0.938vw] text-[3.256vw] text-white font-semibold">Indayani Pratama</p>
                </div>
                
                <div class="flex justify-between sm:mt-[1vw] mt-[3vw] items-center">
                    <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Cloud Security Hackathon</h3>
                    <p class="sm:text-[0.833vw] text-[2.791vw] sm:p-[0.521vw] p-[2.326vw] bg-opacity-5 bg-main rounded-full text-main font-bold">Cloud Engineer</p>
                </div>
                <div class="flex sm:space-x-[1.042vw] space-x-[2.326vw] mt-[0.5vw]">
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/thumb.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">200</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/view.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">1.100</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/share.svg" alt="" class="sm:w-[1.302vw] sm:h-[1.14vw] w-[4.651vw] h-[4.07vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">Share</p>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <img src="assets/karya.png" alt="" class="sm:w-[22.083vw] sm:h-[14.063vw] w-[83.256vw] h-[55.542vw] object-cover rounded-[1.563vw]">
                
                <!-- Overlay dan informasi profile yang muncul saat hover -->
                <div class="sm:w-[21.7vw] sm:h-[7.0315vw] w-[83.256vw] h-[31.207vw] absolute sm:bottom-[5.3vw] bottom-[17.3vw] rounded-[1.563vw] bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="flex items-center absolute sm:bottom-[7vw] bottom-[22vw] sm:left-[3vw] left-[6vw] sm:space-x-[1vw] space-x-[2vw] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <img src="assets/profile-picture.png" alt="" class="sm:w-[1.656vw] sm:h-[1.656vw] w-[5.814vw] h-[5.814vw]">
                    <p class="sm:text-[0.938vw] text-[3.256vw] text-white font-semibold">Indayani Pratama</p>
                </div>
                
                <div class="flex justify-between sm:mt-[1vw] mt-[3vw] items-center">
                    <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Cloud Security Hackathon</h3>
                    <p class="sm:text-[0.833vw] text-[2.791vw] sm:p-[0.521vw] p-[2.326vw] bg-opacity-5 bg-main rounded-full text-main font-bold">Cloud Engineer</p>
                </div>
                <div class="flex sm:space-x-[1.042vw] space-x-[2.326vw] mt-[0.5vw]">
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/thumb.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">200</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/view.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">1.100</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/share.svg" alt="" class="sm:w-[1.302vw] sm:h-[1.14vw] w-[4.651vw] h-[4.07vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">Share</p>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <img src="assets/karya.png" alt="" class="sm:w-[22.083vw] sm:h-[14.063vw] w-[83.256vw] h-[55.542vw] object-cover rounded-[1.563vw]">
                
                <!-- Overlay dan informasi profile yang muncul saat hover -->
                <div class="sm:w-[21.7vw] sm:h-[7.0315vw] w-[83.256vw] h-[31.207vw] absolute sm:bottom-[5.3vw] bottom-[17.3vw] rounded-[1.563vw] bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="flex items-center absolute sm:bottom-[7vw] bottom-[22vw] sm:left-[3vw] left-[6vw] sm:space-x-[1vw] space-x-[2vw] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <img src="assets/profile-picture.png" alt="" class="sm:w-[1.656vw] sm:h-[1.656vw] w-[5.814vw] h-[5.814vw]">
                    <p class="sm:text-[0.938vw] text-[3.256vw] text-white font-semibold">Indayani Pratama</p>
                </div>
                
                <div class="flex justify-between sm:mt-[1vw] mt-[3vw] items-center">
                    <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Cloud Security Hackathon</h3>
                    <p class="sm:text-[0.833vw] text-[2.791vw] sm:p-[0.521vw] p-[2.326vw] bg-opacity-5 bg-main rounded-full text-main font-bold">Cloud Engineer</p>
                </div>
                <div class="flex sm:space-x-[1.042vw] space-x-[2.326vw] mt-[0.5vw]">
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/thumb.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">200</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/view.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">1.100</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/share.svg" alt="" class="sm:w-[1.302vw] sm:h-[1.14vw] w-[4.651vw] h-[4.07vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">Share</p>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <img src="assets/karya.png" alt="" class="sm:w-[22.083vw] sm:h-[14.063vw] w-[83.256vw] h-[55.542vw] object-cover rounded-[1.563vw]">
                
                <!-- Overlay dan informasi profile yang muncul saat hover -->
                <div class="sm:w-[21.7vw] sm:h-[7.0315vw] w-[83.256vw] h-[31.207vw] absolute sm:bottom-[5.3vw] bottom-[17.3vw] rounded-[1.563vw] bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="flex items-center absolute sm:bottom-[7vw] bottom-[22vw] sm:left-[3vw] left-[6vw] sm:space-x-[1vw] space-x-[2vw] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <img src="assets/profile-picture.png" alt="" class="sm:w-[1.656vw] sm:h-[1.656vw] w-[5.814vw] h-[5.814vw]">
                    <p class="sm:text-[0.938vw] text-[3.256vw] text-white font-semibold">Indayani Pratama</p>
                </div>
                
                <div class="flex justify-between sm:mt-[1vw] mt-[3vw] items-center">
                    <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Cloud Security Hackathon</h3>
                    <p class="sm:text-[0.833vw] text-[2.791vw] sm:p-[0.521vw] p-[2.326vw] bg-opacity-5 bg-main rounded-full text-main font-bold">Cloud Engineer</p>
                </div>
                <div class="flex sm:space-x-[1.042vw] space-x-[2.326vw] mt-[0.5vw]">
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/thumb.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">200</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/view.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">1.100</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/share.svg" alt="" class="sm:w-[1.302vw] sm:h-[1.14vw] w-[4.651vw] h-[4.07vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">Share</p>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <img src="assets/karya.png" alt="" class="sm:w-[22.083vw] sm:h-[14.063vw] w-[83.256vw] h-[55.542vw] object-cover rounded-[1.563vw]">
                
                <!-- Overlay dan informasi profile yang muncul saat hover -->
                <div class="sm:w-[21.7vw] sm:h-[7.0315vw] w-[83.256vw] h-[31.207vw] absolute sm:bottom-[5.3vw] bottom-[17.3vw] rounded-[1.563vw] bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="flex items-center absolute sm:bottom-[7vw] bottom-[22vw] sm:left-[3vw] left-[6vw] sm:space-x-[1vw] space-x-[2vw] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <img src="assets/profile-picture.png" alt="" class="sm:w-[1.656vw] sm:h-[1.656vw] w-[5.814vw] h-[5.814vw]">
                    <p class="sm:text-[0.938vw] text-[3.256vw] text-white font-semibold">Indayani Pratama</p>
                </div>
                
                <div class="flex justify-between sm:mt-[1vw] mt-[3vw] items-center">
                    <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Cloud Security Hackathon</h3>
                    <p class="sm:text-[0.833vw] text-[2.791vw] sm:p-[0.521vw] p-[2.326vw] bg-opacity-5 bg-main rounded-full text-main font-bold">Cloud Engineer</p>
                </div>
                <div class="flex sm:space-x-[1.042vw] space-x-[2.326vw] mt-[0.5vw]">
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/thumb.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">200</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/view.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">1.100</p>
                    </div>
                    <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                        <img src="assets/share.svg" alt="" class="sm:w-[1.302vw] sm:h-[1.14vw] w-[4.651vw] h-[4.07vw]">
                        <p class="sm:text-[0.938vw] text-[3.256vw] text-gray-400 font-semibold">Share</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="sm:mt-[5vw] mt-[15vw]">
            <div class="grid grid-cols-7 sm:gap-x-[0.521vw] gap-x-[12vw] sm:px-[32vw] px-[8.372vw] sm:text-[0.938vw] text-[3.256vw] font-semibold">

                <div class="flex justify-center items-center">
                    <a href="">
                        <div class="flex items-center justify-center sm:w-[3.125vw] sm:h-[3.125vw] w-[11.628vw] h-[11.628vw] page-inactive sm:rounded-[0.26vw] rounded-[1.163vw]">
                            <img src="assets/arrow.svg" alt="" class="sm:w-[0.821vw] sm:h-[0.908vw] w-[3vw] h-[3vw]">
                        </div>
                    </a>
                </div>

                <div class="flex justify-center items-center">
                    <a href="">
                        <div class="flex items-center justify-center sm:w-[3.125vw] sm:h-[3.125vw] w-[11.628vw] h-[11.628vw] page-active sm:rounded-[0.26vw] rounded-[1.163vw]">
                            <p class="">1</p>
                        </div>
                    </a>
                </div>

                <div class="flex justify-center items-center">
                    <a href="">
                        <div class="flex items-center justify-center sm:w-[3.125vw] sm:h-[3.125vw] w-[11.628vw] h-[11.628vw] page-inactive sm:rounded-[0.26vw] rounded-[1.163vw]">
                            <p class="">2</p>
                        </div>
                    </a>
                </div>

                <div class="flex justify-center items-center">
                    <a href="">
                        <div class="flex items-center justify-center sm:w-[3.125vw] sm:h-[3.125vw] w-[11.628vw] h-[11.628vw] page-inactive sm:rounded-[0.26vw] rounded-[1.163vw]">
                            <p class="">3</p>
                        </div>
                    </a>
                </div>

                <div class="flex justify-center items-center">
                    <a href="">
                        <div class="flex items-center justify-center sm:w-[3.125vw] sm:h-[3.125vw] w-[11.628vw] h-[11.628vw] page-inactive sm:rounded-[0.26vw] rounded-[1.163vw]">
                            <p class="">...</p>
                        </div>
                    </a>
                </div>

                <div class="flex justify-center items-center">
                    <a href="">
                        <div class="flex items-center justify-center sm:w-[3.125vw] sm:h-[3.125vw] w-[11.628vw] h-[11.628vw] page-inactive sm:rounded-[0.26vw] rounded-[1.163vw]">
                            <p class="">10</p>
                        </div>
                    </a>
                </div>

                <div class="flex justify-center items-center">
                    <a href="">
                        <div class="flex items-center justify-center sm:w-[3.125vw] sm:h-[3.125vw] w-[11.628vw] h-[11.628vw] page-inactive sm:rounded-[0.26vw] rounded-[1.163vw]">
                            <img src="assets/arrow.svg" alt="" class="sm:w-[0.821vw] sm:h-[0.908vw] w-[3vw] h-[3vw] rotate-180">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <footer class="sm:mt-[5vw] mt-[15vw]">
        <div class="bg-white py-[2vw] px-[3vw]">
            <div class="grid sm:grid-cols-5 grid-cols-1 gap-x-[2vw] sm:gap-y-0 gap-y-[6.977vw] sm:px-0 px-[8.372vw]">
                <div class="space-y-[1.5vw] sm:inline hidden">
                    <img src="assets/logo.png" alt="" class="w-[11.406vw] h-[4.115vw]">
                    <p class="text-[1.042vw]">Ready to take the next step? Submit your project and let your skills shine.</p>
                    <div class="flex space-x-[1vw]">
                        <img src="assets/website.svg" alt="" class="w-[1.563vw] h-[1.563vw]">
                        <img src="assets/instagram.svg" alt="" class="w-[1.563vw] h-[1.563vw]">
                        <img src="assets/facebook.svg" alt="" class="w-[1.563vw] h-[1.563vw]">
                    </div>
                    <p class="text-[1.042vw]">Copyright © 2024 All right reserved | Skomda</p>
                </div>
                <div class="mt-[2vw] flex justify-center ">
                    <ul class="sm:text-[1.25vw] text-[4.186vw] sm:space-y-[1.563vw] space-y-[4.651vw] sm:block flex flex-col items-center justify-center">
                        <li class="font-semibold sm:mb-[0.313vw] mb-[2,326]">Menu Utama</li>
                        <li><a href="index.html">Beranda</a></li>
                        <li>Kategori</li>
                        <li>Event</li>
                    </ul>
                </div>
                <div class="mt-[2vw] flex justify-center">
                    <ul class="sm:text-[1.25vw] text-[4.186vw] sm:space-y-[1.563vw] space-y-[4.651vw] sm:block flex flex-col items-center justify-center">
                        <li class="font-semibold sm:mb-[0.313vw] mb-[2,326]">Explore</li>
                        <li><a href="">Hacker</a></li>
                        <li><a href="">Hipster</a></li>
                        <li><a href="">Hustler</a></li>
                        <li><a href="">IoT Engineer</a></li>
                        <li><a href="">Cloud Engineer</a></li>
                        <li><a href="">Graphic Designer</a></li>
                        <li><a href="">Network Engineer</a></li>
                        <li><a href="">Fiber Optic Engineer</a></li>
                    </ul>
                </div>
                <div class="mt-[2vw] flex justify-center">
                    <ul class="sm:text-[1.25vw] text-[4.186vw] sm:space-y-[1.563vw] space-y-[4.651vw] sm:block flex flex-col items-center justify-center">
                        <li class="font-semibold sm:mb-[0.313vw] mb-[2,326]">Aplikasi Siswa</li>
                        <li>Digiyouth Showcase</li>
                        <li>MyLMS</li>
                        <li>Siakad</li>
                    </ul>
                </div>
                <div class="mt-[2vw] flex justify-center">
                    <ul class="sm:text-[1.25vw] text-[4.186vw] sm:space-y-[1.563vw] space-y-[4.651vw] sm:block flex flex-col items-center justify-center">
                        <li class="font-semibold sm:mb-[0.313vw] mb-[2,326]">Hubungi Kami</li>
                        <li>+123456789</li>
                        <li>skomda@gmail.com</li>
                    </ul>
                </div>
                <div class="space-y-[6vw] sm:hidden flex flex-col items-center justify-center">
                    <a href="index.html"><img src="assets/logo.png" alt="" class="w-[46.512vw] h-[16.779vw]"></a>
                    <p class="text-[3.256vw] text-center">Ready to take the next step? Submit your project and let your skills shine.</p>
                    <div class="flex space-x-[5vw]">
                        <img src="assets/website.svg" alt="" class="w-[5.5vw] h-[5.5vw]">
                        <img src="assets/instagram.svg" alt="" class="w-[5.5vw] h-[5.5vw]">
                        <img src="assets/facebook.svg" alt="" class="w-[5.5vw] h-[5.5vw]">
                    </div>
                    <p class="text-[3.256vw]">Copyright © 2024 All right reserved | Skomda</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('kategori-button').addEventListener('click', function() {
            var kategoriDiv = document.getElementById('kategori');
            if (kategoriDiv.classList.contains('hidden')) {
                kategoriDiv.classList.remove('hidden');
            } else {
                kategoriDiv.classList.add('hidden');
            }
        });
    </script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const hamburgerBtn = document.getElementById('hamburger');
        const closeBtn = document.getElementById('close');
        const nav = document.querySelector('nav'); // Ambil elemen nav
        
        // Fungsi untuk membuka sidebar
        function openSidebar() {
            sidebar.classList.add('open');
            document.body.classList.add('no-scroll');
            
            // Menghapus class 'fixed' pada nav saat sidebar dibuka
            nav.classList.remove('fixed');
            section.getElementById('fixed');
            
            // Optional: Tambahkan overlay
            const overlay = document.createElement('div');
            overlay.classList.add('sidebar-overlay');
            document.body.appendChild(overlay);
            
            // Trigger reflow untuk animasi
            overlay.offsetHeight;
            overlay.classList.add('active');
        }
        
        // Fungsi untuk menutup sidebar
        function closeSidebar() {
            sidebar.classList.remove('open');
            document.body.classList.remove('no-scroll');
            
            // Menambahkan kembali class 'fixed' pada nav saat sidebar ditutup
            nav.classList.add('fixed');
            
            // Optional: Hapus overlay dengan animasi
            const overlay = document.querySelector('.sidebar-overlay');
            if (overlay) {
                overlay.classList.remove('active');
                overlay.addEventListener('transitionend', () => {
                    overlay.remove();
                });
            }
        }
        
        // Event listeners untuk hamburger button dan close button
        hamburgerBtn.addEventListener('click', openSidebar);
        closeBtn.addEventListener('click', closeSidebar);
    </script>
    
    <script>
        const toggleKategori = document.getElementById('toggleKategori');
        const kategoriList = document.getElementById('kategoriList');
    
        toggleKategori.addEventListener('click', function() {
            kategoriList.classList.toggle('active');  // Toggle kelas active
            toggleKategori.classList.toggle('border-main');  // Toggle border utama
        });
    </script>
</body>
</html>