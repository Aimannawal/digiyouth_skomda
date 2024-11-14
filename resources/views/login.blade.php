<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/output.css" rel="stylesheet">
         <link href="css/font.css" rel="stylesheet">
         <link href="css/style.css" rel="stylesheet">
         <script src="js/navbar.js"></script>
         @vite('resources/css/app.css')
        <title>Digiyouth | Login</title>
    </head>
<body class="text-dark relative ">
    
    <section>
        <div class=" flex justify-center items-center h-[100vh]">
            <div class="flex flex-col sm:space-y-[2vw] space-y-[6vw]">
                <div>
                    <h1 class="sm:text-[2.083vw] text-[7.442vw] font-semibold">Masuk</h1>
                    <p class="opacity-50 sm:text-[1.042vw] text-[3.721vw] font-medium">Masuk ke akun anda</p>
                </div>
                <form action="" class="sm:w-[30vw] w-[83.256vw] sm:space-y-[1vw] space-y-[4vw]">
                    <div class="sm:space-y-0 space-y-[2vw]">
                        <label for="nisn" class="block sm:text-[1.25vw] text-[4.186vw] font-medium text-gray-700 mb-[0.833vw]">Email</label>
                        <input type="nisn" id="nisn" name="nisn" class="w-full p-[4vw] sm:p-[1vw]  border focus:outline-none focus:ring-2 focus:ring-main sm:rounded-[0.781vw] rounded-[2.326vw] sm:placeholder:text-[0.938vw] placeholder:text-[3.721vw] text-[3.721vw] sm:text-[1.25vw]" placeholder="Email Anda" autocomplete="off" required>
                    </div>
                    <div class="sm:space-y-0 space-y-[2vw]">
                        <label for="password" class="block sm:text-[1.25vw] text-[4.186vw] font-medium text-gray-700 mb-[0.833vw]">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-[4vw] sm:p-[1vw]  border focus:outline-none focus:ring-2 focus:ring-main sm:rounded-[0.781vw] rounded-[2.326vw] sm:placeholder:text-[0.938vw] placeholder:text-[3.721vw] text-[3.721vw] sm:text-[1.25vw]" placeholder="Password" autocomplete="off" required>
                    </div>

                    <div class="pt-[1vw]">
                        <button class="w-full sm:py-[1.042vw] sm:px-[2.604vw] py-[4.651vw] px-[11.628vw] bg-main sm:rounded-[0.521vw] sm:text-[1.042vw]  rounded-[2.326vw] text-[4.3vw] font-semibold text-white">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>