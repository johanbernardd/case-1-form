<?php
session_start();
$isLoggedIn;
$buttonAction;

if (isset($_SESSION['username'])) {
    $buttonText = "Logout";
    $buttonAction = "index.php?c=LandingpageController&m=logout";
} else {
    $buttonText = "Get started";
    $buttonAction = "index.php?c=LandingpageController&m=login";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sehat</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <!-- NAVBAR-->
    <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-500">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="w-full max-w-screen-xl mx-auto md:py-4">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <!-- LOGO -->
                    <a href="index.php?c=LandingpageController&m=index" class="flex items-center sm:mb-0 space-x-3 rtl:space-x-reverse" style="color: black; text-decoration: none;">
                        <img class="h-8" alt="Klinik Logo" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/logo.png?raw=true" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Klinik Sehat</span>
                    </a>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="index.php?c=LandingpageController&m=index" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                            Home</a>
                        </li>
                        <li>
                            <a href="#About" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                            About</a>
                        </li>
                        <li>
                            <a href="#Team" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                            Team</a>
                        </li>
                        <li>
                            <a href="index.php?c=LandingpageController&m=dashboard" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                            Dashboard</a>
                        </li>
                        <li>
                            <button type="button" 
                                class="text-white font-medium rounded-lg text-sm px-4 py-2 text-center focus:outline-none" 
                                style="background-color: #008080; text-decoration: none;" 
                                onmouseover="this.style.backgroundColor='#006666'"
                                onmouseout="this.style.backgroundColor='#008080'"
                                onfocus="this.style.boxShadow='0 0 0 4px #004c4c'"
                                onclick="window.location.href='<?php echo $buttonAction ?>'">
                                <?php echo $buttonText; ?>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>    
    </nav>
    <main>
        <!--CAROUSEL-->
        <section id="carousel" >
            <div id="default-carousel" class="relative w-full" data-carousel="slide" style="padding: 1rem"> 
                <!-- Carousel wrapper -->
                <div class="relative h-1/2 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://www.lukman.co.id/wp-content/uploads/2024/03/klinik-dolaplari-tasarim-ve-imalat-hizmeti.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://blog.assist.id/content/images/size/w2000/2018/12/Buka-bisnis-klinik-5-Ruangan-Klinik-Ini-Wajib-Ada-di-Klinik-Anda.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://www.eclinic.id/wp-content/uploads/2023/02/syarat-akreditasi-klinik-pratama.webp"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://klinikdrindrajana.com/wp-content/uploads/2020/10/Ruang-Tunggu-Farmasi-Klinik-Utama-DR-Indrajana.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://www.kimiafarma.co.id/files/foto/klinik/IMG_9653%20(1).jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>
        <!--ABOUT-->
        <section id="About" class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <img alt="Descriptive Alt Text" class="mx-auto mb-4 h-48 w-48 object-cover" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/logo.png?raw=true" >
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Selamat Datang di Klinik Sehat</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                Di Klinik Sehat, kami berkomitmen untuk memberikan pelayanan kesehatan terbaik dengan teknologi terkini dan tenaga medis profesional untuk kesejahteraan Anda dan keluarga.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="index.php?c=LandingpageController&m=login" 
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-900"
                        style="text-decoration: none;">
                        Get started
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#Team"
                        class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-70"
                        style="color: black; text-decoration: none;"
                        onmouseover="this.style.color='#008080'"
                        onmouseout="this.style.color='black'"
                        onfocus="this.style.boxShadow='0 0 0 4px #008080'"
                    >
                        Our team
                    </a>
                </div>
            </div>
        </section>
        <!--Team-->
        <section id="Team" class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Tim Kami
                </h1>
                <div class="grid sm:grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 justify-center">
                    <!--Aye-->
                    <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700" style="text-decoration: none;">
                        <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/Achmad_Firdaus_Attalea_Yessa.jpeg?raw=true" alt="Achmad Firdaus Attalea">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Achmad Firdaus Attalea Yessa</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">225150407111086</p>
                        </div>
                    </a>
                    <!--Dicky-->
                    <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700" style="text-decoration: none;">
                        <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/Dicky_Surya_Darmawan.jpg?raw=true" alt="Dicky Surya Darmawan">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dicky Surya Darmawan</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">225150407111063</p>
                        </div>
                    </a>
                    <!--Johanes-->
                    <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700" style="text-decoration: none;">
                        <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/Johanes_Paulus_Bernard_Purek.png?raw=true" alt="Johanes Paulus Bernard Purek">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Johanes Paulus Bernard Purek</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">225150407111090</p>
                        </div>
                    </a>
                    <!--Choliq-->
                    <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700" style="text-decoration: none;">
                        <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/Muhammad_Choliq_Alraf.jpg?raw=true" alt="Muhammad Choliq Al-Raffi">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Muhammad Choliq Al-Raffi</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">225150407111065</p>
                        </div>
                    </a>
                </div>
                <div class="flex justify-center mt-6">
                    <!--Syafiq-->
                    <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700" style="text-decoration: none;">
                        <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/Syafiq.jpg?raw=true" alt="Muhammad Syafiq Irzaky">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Muhammad Syafiq Irzaky</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">225150400111048</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!--FOOTER-->
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="index.php?c=LandingpageController&m=index" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse" style="color: black; text-decoration: none;">
                    <img class="h-8" alt="Klinik Logo" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/logo.png?raw=true" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Klinik Sehat</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                        About</a>
                    </li>
                    <li>
                        <a href="#" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                        Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                            Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                            Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="Landingpage.php">Klinik Sehat</a>. All Rights Reserved.</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</html>