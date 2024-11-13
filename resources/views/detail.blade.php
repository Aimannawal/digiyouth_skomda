<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
     <link href="css/font.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <script src="js/navbar.js"></script>
     <script src="//unpkg.com/alpinejs" defer></script>

    <title>Cloud Computing</title>
</head>
<body class="text-dark relative ">
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

<div class="w-full h-[400vh] sm:mt-[10vw] mt-[35vw]">
    <section class="sm:px-[4.271vw] px-[8.372vw] sm:mt-[4vw] mt-[10vw]">
        <div class="w-full">
            <div id="detail" class="relative px-[5vw] rounded-[3.488vw]">
                <div class=" flex flex-col  items-center sm:pt-[4vw] pt-[20vw] relative sm:h-[20.833vw] h-[110.698vw] sm:space-y-[2vw] space-y-[3vw]">
                    <div class="flex flex-col items-center justify-center sm:space-y-0 space-y-[2vw]">
                        <div class="bg-main sm:w-[5.208vw] sm:h-[0.521vw] w-[11.628vw] h-[1.163vw]"></div>
                        <h1 class="font-semibold sm:text-[2.865vw] text-[5.581vw] text-center text-white">UB Business Case - Held by FEB UB</h1>
                    </div>
                    <div class="flex items-center sm:space-x-[1vw] space-x-[3vw]">
                        <p class="sm:px-[1.563vw] sm:py-[0.781vw] px-[6.977vw] py-[2.8vw] bg-white sm:text-[1.042vw] text-[2.791vw] font-bold text-main rounded-full">Hustler</p>
                        <p class="sm:text-[0.938vw] text-[2.791vw] font-medium text-white">10 September 2024</p>
                    </div>
                    <div class="flex sm:flex-row flex-col sm:justify-between justify-center items-center absolute w-full text-white sm:top-[12vw] bottom-[25vw] sm:space-y-0 space-y-[6vw] px-[3.7vw]">
                        <div class="sm:text-[0.938vw] text-[3.256vw] sm:text-start text-center">
                            <p>Leader : Indayani Pratama</p>
                            <p>Team   : Zoro Adam, Madelleine Putri, Sanji Zuckberg</p>
                        </div>
                        <div class="flex sm:space-x-[1.042vw] space-x-[2.326vw] mt-[0.9vw]">
                            <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                                <svg class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.75 12.4375C28.75 11.7778 28.4866 11.1451 28.0178 10.6786C27.5489 10.2121 26.913 9.94999 26.25 9.94999H18.35L19.55 4.26606C19.575 4.14168 19.5875 4.00487 19.5875 3.86806C19.5875 3.35812 19.375 2.88549 19.0375 2.54968L17.7125 1.24374L9.4875 9.42762C9.025 9.8878 8.75 10.5097 8.75 11.1937V23.6312C8.75 24.291 9.01339 24.9237 9.48223 25.3902C9.95107 25.8567 10.587 26.1187 11.25 26.1187H22.5C23.5375 26.1187 24.425 25.4969 24.8 24.6014L28.575 15.8329C28.6875 15.5469 28.75 15.2484 28.75 14.925V12.4375ZM1.25 26.1187H6.25V11.1937H1.25V26.1187Z" fill="#FFFFFF" fill-opacity="1"/>
                                </svg>
                                <p class="sm:text-[0.938vw] text-[3.256vw] font-semibold">200</p>
                            </div>
                            <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                                <svg class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 11.1937C14.0054 11.1937 13.0516 11.5868 12.3483 12.2866C11.6451 12.9863 11.25 13.9354 11.25 14.925C11.25 15.9146 11.6451 16.8636 12.3483 17.5634C13.0516 18.2631 14.0054 18.6562 15 18.6562C15.9946 18.6562 16.9484 18.2631 17.6517 17.5634C18.3549 16.8636 18.75 15.9146 18.75 14.925C18.75 13.9354 18.3549 12.9863 17.6517 12.2866C16.9484 11.5868 15.9946 11.1937 15 11.1937ZM15 21.1437C13.3424 21.1437 11.7527 20.4885 10.5806 19.3223C9.40848 18.1561 8.75 16.5743 8.75 14.925C8.75 13.2757 9.40848 11.6939 10.5806 10.5277C11.7527 9.36143 13.3424 8.70624 15 8.70624C16.6576 8.70624 18.2473 9.36143 19.4194 10.5277C20.5915 11.6939 21.25 13.2757 21.25 14.925C21.25 16.5743 20.5915 18.1561 19.4194 19.3223C18.2473 20.4885 16.6576 21.1437 15 21.1437ZM15 5.59686C8.75 5.59686 3.4125 9.46493 1.25 14.925C3.4125 20.385 8.75 24.2531 15 24.2531C21.25 24.2531 26.5875 20.385 28.75 14.925C26.5875 9.46493 21.25 5.59686 15 5.59686Z" fill="#FFFFFF" fill-opacity="1"/>
                                </svg>
                                <p class="sm:text-[0.938vw] text-[3.256vw] font-semibold">1.100</p>
                            </div>
                            <div class="flex items-center sm:space-x-[0.6vw] space-x-[2.326vw]">
                                <svg class="sm:w-[1.302vw] sm:h-[1.14vw] w-[4.651vw] h-[4.07vw]"  viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25 11.8625L15 0.924988V6.39374C10 6.39374 0 9.67499 0 22.8C0 20.9766 3 17.3312 15 17.3312V22.8L25 11.8625Z" fill="#FFFFFF" fill-opacity="1"/>
                                </svg>
                                <p class="sm:text-[0.938vw] text-[3.256vw] font-semibold">1.100</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="absolute sm:top-0 sm:left-[3vw] left-0 top-[2vw] flex items-center justify-center sm:w-[3.646vw] sm:h-[3.646vw] w-[11.628vw] h-[11.628vw] page-inactive rounded-full">
                        <img src="assets/arrow.svg" alt="" class="sm:w-[1vw] sm:h-[1vw] w-[3vw] h-[3vw]">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flex justify-center items-center relative">
        <div class="absolute sm:w-[76.042vw] w-[75.116vw] h-auto shadow sm:top-[-3.3vw] top-[-15vw] bg-white p-[5vw] rounded-[1.563vw] flex flex-col items-center justify-center">
            <div class="sm:space-y-[2.5vw] space-y-[4vw]">
                <div class="flex justify-center items-center">
                    <img src="assets/detail.png" alt="" class="sm:w-[70.75vw] sm:h-[27.344vw] w-[63.256vw] h-[37.442vw] object-cover rounded-[1.563vw]">
                </div>
                <h3 class="sm:text-[2.083vw] text-[4.651vw] font-semibold">UB Business Case - Held by FEB UI</h3>
                
                <div class="sm:space-y-[1.5vw] space-y-[6vw]">
                    <h3 class="sm:text-[1.25vw] text-[4.186vw] font-medium">Exciting UD Business Case Competition at Jakarta Expo</h3>
                    <p class="sm:text-[0.938vw] text-[3.256vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris libero, tincidunt id iaculis et, porttitor in magna. Morbi vitae ipsum egestas, molestie ligula nec, elementum velit. Pellentesque ut eros eu erat fringilla maximus luctus eget ex. In eget risus faucibus, fringilla tellus nec, mollis augue. Aenean lobortis interdum nisl eget ultrices.</p>
                </div>

                <div class="sm:space-y-[1.5vw] space-y-[6vw]">
                    <h3 class="sm:text-[1.25vw] text-[4.186vw] font-medium">About Competition</h3>
                    <p class="sm:text-[0.938vw] text-[3.256vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris libero, tincidunt id iaculis et, porttitor in magna. Morbi vitae ipsum egestas, molestie ligula nec, elementum velit. Pellentesque ut eros eu erat fringilla maximus luctus eget ex. In eget risus faucibus, fringilla tellus nec, mollis augue. Aenean lobortis interdum nisl eget ultrices. Pellentesque quis venenatis purus, non suscipit massa. Proin at lobortis mi. Vestibulum eu ultrices nulla. Duis congue est sed tortor ultrices finibus. Quisque feugiat nunc sit amet mi pharetra ullamcorper. Curabitur nec elit ac magna ornare imperdiet sit amet vitae neque. Donec luctus metus vel facilisis malesuada. Aliquam erat volutpat. Etiam vestibulum leo blandit felis porta, in pretium erat vulputate. Vestibulum et risus sed lorem feugiat vulputate vel ut risus.</p>
                </div>

                <div class="sm:space-y-[1.5vw] space-y-[6vw]">
                    <h3 class="sm:text-[1.25vw] text-[4.186vw] font-medium">Successful Business Case Competition</h3>
                    <p class="sm:text-[0.938vw] text-[3.256vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris libero, tincidunt id iaculis et, porttitor in magna. Morbi vitae ipsum egestas, molestie ligula nec, elementum velit. Pellentesque ut eros eu erat fringilla maximus luctus eget ex. In eget risus faucibus, fringilla tellus nec, mollis augue. Aenean lobortis interdum nisl eget ultrices.</p>
                </div>
                
                <p class="sm:text-[0.938vw] text-[3.256vw]"><span class="font-semibold">See full project here</span> : <a href="">https://github.com/username/repository</a></p>

                <div class="sm:space-y-[0.938vw] space-y-[2vw]">
                    <div class="">
                        <h3 class="sm:text-[0.938vw] text-[3.256vw] font-semibold">Project Tools</h3>
                    </div>
                    <div class="flex items-center sm:space-x-[1vw] space-x-[3vw]">
                        <img src="assets/tools-1.svg" alt="" class="sm:w-[4vw] sm:h-[4vw] w-[8vw] h-[9vw] p-[0.5vw] border-[0.1vw] rounded-[1vw]">
                        <img src="assets/tools-2.svg" alt="" class="sm:w-[4vw] sm:h-[4vw] w-[8vw] h-[9vw] p-[0.5vw] border-[0.1vw] rounded-[1vw]">
                        <img src="assets/tools-3.svg" alt="" class="sm:w-[4vw] sm:h-[4vw] w-[8vw] h-[9vw] p-[0.5vw] border-[0.1vw] rounded-[1vw]">
                        <img src="assets/tools-4.svg" alt="" class="sm:w-[4vw] sm:h-[4vw] w-[8vw] h-[9vw] p-[0.5vw] border-[0.1vw] rounded-[1vw]">
                    </div>
                </div>

                <div class="sm:space-y-[0.7vw] space-y-[2vw]">
                    <p class="sm:text-[0.938vw] text-[3.256vw] font-semibold">Suka dengan project ini?</p>
                    <div class="flex items-center sm:space-x-[1.5vw] space-x-[4vw]">
                        <div class="flex sm:space-x-[0.6vw] space-x-[2vw] items-center">
                            <img src="assets/thumb.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                            <p class="sm:text-[0.938vw] text-[3.256vw] font-semibold text-gray-400">200</p>
                        </div>
                        <div class="flex sm:space-x-[0.6vw] space-x-[2vw] items-center">
                            <img src="assets/share.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                            <p class="sm:text-[0.938vw] text-[3.256vw] font-semibold text-gray-400">Share</p>
                        </div>
                    </div>
                </div>

                <div class="sm:space-y-[1.5vw] space-y-[3vw]">
                    <h3 class="sm:text-[1.25vw] text-[4.651vw] font-semibold ">Sneak Peak</h3>
                    <div class="sm:flex block gap-[0.625vw] sm:space-y-0 space-y-[4vw] sm:justify-start justify-center">
                        <div class="flex justify-center">
                            <img src="assets/sneak.png" alt="" class="sm:w-[11.667vw] sm:h-[7.813vw] w-[63.256vw] h-[47.442vw] rounded-[0.781vw] ">
                        </div>
                        <div class="flex justify-center">
                            <img src="assets/sneak.png" alt="" class="sm:w-[11.667vw] sm:h-[7.813vw] w-[63.256vw] h-[47.442vw] rounded-[0.781vw] ">
                        </div>
                        <div class="flex justify-center">
                            <img src="assets/sneak-2.png" alt="" class="sm:w-[11.667vw] sm:h-[7.813vw] w-[63.256vw] h-[47.442vw] rounded-[0.781vw] ">
                        </div>
                        <div class="flex justify-center">
                            <img src="assets/sneak-3.png" alt="" class="sm:w-[11.667vw] sm:h-[7.813vw] w-[63.256vw] h-[47.442vw] rounded-[0.781vw] ">
                        </div>
                        <div class="flex justify-center">
                            <img src="assets/sneak-4.png" alt="" class="sm:w-[11.667vw] sm:h-[7.813vw] w-[63.256vw] h-[47.442vw] rounded-[0.781vw] ">
                        </div>
                    </div>
                </div>
            </div>
            <div id="comment-section" class="sm:mt-[5vw] mt-[8vw]">
                <div>
                    <div class="flex items-center sm:space-x-[1vw] space-x-[3vw]">
                        <img src="assets/profile-picture.png" alt="" class="sm:w-[4.271vw] sm:h-[4.271vw] w-[11.628vw] h-[11.628vw] rounded-full object-cover">
                        <div class="space-y-[0.2vw]">
                            <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Arka Jenar Ma'arif</h3>
                            <p class="sm:text-[0.938vw] text-[3.256vw] font-medium text-gray-400">XII SIJA 1</p>
                        </div>
                    </div>
                    <div class="sm:ps-[5.271vw] ps-0 relative sm:mt-0 mt-[3vw]">
                        <textarea name="" id="" placeholder="Berikan dukungan dan Saranmu di sini..." class="sm:placeholder:text-[0.938vw] placeholder:text-[3.256vw] sm:w-[54.948vw] w-[63.023vw] sm:h-[9.688vw] h-[43.256vw] border-[0.2vw] sm:rounded-[0.781vw] rounded-[3.488vw] sm:p-[1vw] p-[5vw] focus:outline-main sm:text-[0.938vw] text-[3.256vw]"></textarea> 
                        <button class="absolute sm:right-[7.5vw] sm:bottom-[2vw] bottom-[5vw] right-[5vw] sm:py-[1.042vw] sm:px-[2.604vw] py-[2.326vw] px-[6.977vw] bg-main sm:rounded-[0.521vw] sm:text-[1.042vw] rounded-[2.326vw] text-[3.256vw] font-semibold text-white ">Kirim</button>
                    </div>
                </div>
                <div id="other-comments" class="mt-[3vw] sm:space-y-[2vw] space-y-[12vw]">
                    <div class="flex sm:flex-row flex-col sm:justify-between justify-start sm:items-center items-start">
                        <div class="">
                            <h3 class="sm:text-[1.25vw] text-[4.651vw] font-semibold">Komentar Lainnya</h3>
                            <p class="sm:text-[0.938vw] text-[3.256vw]">3 Komentar</p>
                        </div>
                        <div class="sm:w-auto sm:block w-full flex items-center justify-center sm:mt-0 mt-[6vw]">
                            <div class="flex sm:space-x-[1.042vw] space-x-[4.651vw] sm:px-[1.302vw] sm:py-[0.781vw] px-[5.814vw] py-[3.488vw] bg-[#F9F9F9] sm:rounded-[0.521vw] rounded-[2.326vw] mt-[2vw] items-center justify-center">
                                <img src="assets/filter.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.563vw] w-[4.651vw] h-[4.651vw]">
                                <h1 class="sm:text-[0.938vw] text-[4.186vw]">Yang Terbaru</h1>
                                <svg  viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="sm:w-[0.625vw] sm:h-[1.25vw] fill-dark w-[2.326vw] h-[4.651vw]">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.20324 7.15694L0.539454 1.49994L1.95515 0.0859375L6.91109 5.03594L11.867 0.0859375L13.2827 1.49994L7.61893 7.15694C7.43118 7.34441 7.17657 7.44972 6.91109 7.44972C6.6456 7.44972 6.39099 7.34441 6.20324 7.15694Z" fill-opacity="1"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-[3vw]">
                        <div x-data="{ replyOpen: false }" class="sm:space-y-[1.2vw] space-y-[3vw]">
                            <div class="flex items-center sm:space-x-[1vw] space-x-[3vw]">
                                <img src="assets/profile-picture.png" alt="" class="sm:w-[4.271vw] sm:h-[4.271vw] w-[11.628vw] h-[11.628vw] rounded-full object-cover">
                                <div class="space-y-[0.2vw]">
                                    <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Ezar Fausta Rafi <span class="font-normal">- 1 Hari yang lalu</span></h3>
                                    <p class="sm:text-[0.938vw] text-[3.256vw] font-medium text-gray-400">XII SIJA 1</p>
                                </div>
                            </div>
                            <p class="sm:text-[0.938vw] text-[3.256vw]">Desain web-nya sangat menarik dan profesional. Kombinasi warna dan tipografinya sangat pas. Layout web-nya sangat user-friendly dan mudah dinavigasi. Pengunjung pasti akan betah berlama-lama di sini. Konsep desain web-nya sangat kreatif dan unik. Saya belum pernah melihat yang seperti ini sebelumnya.</p>
                        
                            <!-- Tombol Like dan Balas -->
                            <div class="flex items-center space-x-[1.5vw]">
                                <div class="flex sm:space-x-[0.6vw] space-x-[2vw] items-center">
                                    <img src="assets/thumb.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                                    <p class="sm:text-[0.938vw] text-[3.256vw] font-semibold text-gray-400">200</p>
                                </div>
                                <div class="flex sm:space-x-[0.6vw] space-x-[2vw] items-center cursor-pointer" @click="replyOpen = !replyOpen">
                                    <img src="assets/comment.svg" alt="" class="sm:w-[1.563vw] sm:h-[1.555vw] w-[4.651vw] h-[4.651vw]">
                                    <p class="sm:text-[0.938vw] text-[3.256vw] font-semibold text-gray-400">Balas</p>
                                    <img src="assets/arrow-filter.svg" alt="" :class="{'rotate-180': replyOpen}" class="sm:w-[0.8vw] sm:h-[0.9vw] w-[2.5vw] h-[2.6vw] transition-transform duration-300">
                                </div>
                                
                                
                                
                            </div>
                        
                            <!-- Balasan -->
                            <div x-show="replyOpen" class="sm:ps-[2.5vw] ps-0 sm:space-y-[2vw] space-y-[4vw]" x-transition>
                                <div class="space-y-[1.5vw] sm:mt-[2.5vw] mt-[8vw]">
                                    <div class="flex items-center sm:space-x-[1vw] space-x-[3vw]">
                                        <img src="assets/profile-picture.png" alt="" class="sm:w-[4.271vw] sm:h-[4.271vw] w-[11.628vw] h-[11.628vw] rounded-full object-cover">
                                        <div class="space-y-[0.2vw]">
                                            <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Arka Jenar Ma'arif <span class="font-normal">ke <span class="font-semibold text-main">Ezar Fausta Rafi</span></span></h3>
                                            <p class="sm:text-[0.938vw] text-[3.256vw] font-medium text-gray-400">XII SIJA 1</p>
                                        </div>
                                    </div>
                                    <p class="sm:text-[0.938vw] text-[3.256vw]">Desain web-nya sangat menarik dan profesional. Kombinasi warna dan tipografinya sangat pas. Layout web-nya sangat user-friendly dan mudah dinavigasi. Pengunjung pasti akan betah berlama-lama di sini. Konsep desain web-nya sangat kreatif dan unik. Saya belum pernah melihat yang seperti ini sebelumnya.</p>
                                </div>
                                
                                
                                <!-- Form Balas Komentar -->
                                 <div>
                                    <div class="flex items-center sm:space-x-[1vw] space-x-[3vw]">
                                        <img src="assets/profile-picture.png" alt="" class="sm:w-[4.271vw] sm:h-[4.271vw] w-[11.628vw] h-[11.628vw] rounded-full object-cover">
                                        <div class="space-y-[0.2vw]">
                                            <h3 class="sm:text-[1.042vw] text-[3.721vw] font-semibold">Arka Jenar Ma'arif</h3>
                                            <p class="sm:text-[0.938vw] text-[3.256vw] font-medium text-gray-400">XII SIJA 1</p>
                                        </div>
                                    </div>
                                    <div class="sm:ps-[5.271vw] ps-0 relative sm:mt-0 mt-[3vw]">
                                        <textarea name="" id="" placeholder="Berikan dukungan dan Saranmu di sini..." class="sm:placeholder:text-[0.938vw] placeholder:text-[3.256vw] sm:w-[54.948vw] w-[63.023vw] sm:h-[9.688vw] h-[43.256vw] border-[0.2vw] sm:rounded-[0.781vw] rounded-[3.488vw] sm:text-[0.938vw] text-[3.256vw] sm:p-[1vw] p-[5vw] focus:outline-main"></textarea> 
                                        <button class="absolute sm:right-[4vw] sm:bottom-[2vw] bottom-[5vw] right-[5vw] sm:py-[1.042vw] sm:px-[2.604vw] py-[2.326vw] px-[6.977vw] bg-main sm:rounded-[0.521vw] sm:text-[1.042vw]  rounded-[2.326vw] text-[3.256vw] font-semibold text-white ">Kirim</button>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <footer class="sm:mt-[20vw] mt-[120vw]">
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