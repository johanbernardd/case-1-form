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
    header("Location: index.php?c=LandingpageController&m=login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="fixed w-full z-20 top-0 start-0 border-b border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-500">
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
                            <a href="index.php?c=LandingpageController&m=index" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                            About</a>
                        </li>
                        <li>
                            <a href="index.php?c=LandingpageController&m=index" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
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
    <aside style="padding-top: 5rem" id="sidebar-multi-level-sidebar" class="fixed top-40 start-40 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-8 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="index.php?c=LandingpageController&m=dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ms-3" style="color: black; text-decoration: none;">Dashboard</span>
                    </a>
                </li>
                <!-- Obat -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-obat" data-collapse-toggle="dropdown-obat">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Obat</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-obat" class="hidden py-2 space-y-2">
                        <li>
                            <a href="index.php?c=ObatController&m=index" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4"
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Lihat daftar Obat</a>
                        </li>
                        <li>
                            <a href="index.php?c=ObatController&m=create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Tambah Obat</a>
                        </li>
                    </ul>
                </li>
                <!-- Dokter -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-dokter" data-collapse-toggle="dropdown-dokter">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Dokter</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-dokter" class="hidden py-2 space-y-2">
                        <li>
                            <a href="index.php?c=DokterController&m=index" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Lihat daftar Dokter</a>
                        </li>
                        <li>
                            <a href="index.php?c=DokterController&m=create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Tambah Dokter</a>
                        </li>
                    </ul>
                </li>
                <!-- Jadwal -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-jadwal" data-collapse-toggle="dropdown-jadwal">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Jadwal</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-jadwal" class="hidden py-2 space-y-2">
                        <li>
                            <a href="index.php?c=JadwalController&m=index" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Lihat daftar Jadwal</a>
                        </li>
                        <li>
                            <a href="index.php?c=JadwalController&m=create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Tambah Jadwal</a>
                        </li>
                    </ul>
                </li>
                <!-- Resep -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-resep" data-collapse-toggle="dropdown-resep">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Resep</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-resep" class="hidden py-2 space-y-2">
                        <li>
                            <a href="index.php?c=ResepController&m=index" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Lihat daftar Resep</a>
                        </li>
                        <li>
                            <a href="index.php?c=ResepController&m=create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Tambah Resep</a>
                        </li>
                    </ul>
                </li>
                <!-- Rekam Medis -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-rekam-medis" data-collapse-toggle="dropdown-rekam-medis">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Rekam Medis</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-rekam-medis" class="hidden py-2 space-y-2">
                        <li>
                            <a href="index.php?c=RekamMedisController&m=index" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Lihat daftar Rekam Medis</a>
                        </li>
                        <li>
                            <a href="index.php?c=RekamMedisController&m=create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Tambah Rekam Medis</a>
                        </li>
                    </ul>
                </li>
                <!-- Pembayaran -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-pembayaran" data-collapse-toggle="dropdown-pembayaran">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Pembayaran</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-pembayaran" class="hidden py-2 space-y-2">
                        <li>
                            <a href="index.php?c=PembayaranController&m=index" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Lihat daftar Pembayaran</a>
                        </li>
                        <li>
                            <a href="index.php?c=PembayaranController&m=create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4te
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Tambah Pembayaran</a>
                        </li>
                    </ul>
                </li>
                <!-- pasien -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-pembayaran" data-collapse-toggle="dropdown-pasien">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Pasien</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-pasien" class="hidden py-2 space-y-2">
                        <li>
                            <a href="index.php?c=PasienController&m=index" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Lihat daftar Pasien</a>
                        </li>
                        <li>
                            <a href="index.php?c=PasienController&m=create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-teal-600 hover:text-teal-500 mr-4" 
                            style="color: #008080; text-decoration: none;" onmouseover="this.style.color='#004c4c'" onmouseout="this.style.color='#008080'">
                                Tambah Pasien</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <div class="sm:ml-64" style="padding-top: 5rem">
        <div class="relative m-4 overflow-x-auto shadow-md sm:rounded-lg">
            <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <form class="space-y-6" action="index.php?c=ResepController&m=create" method="POST">
                    <h5 class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" style="text-align:center">Tambah Resep</h5>
                    <div>
                        <label for="obat_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat</label>
                        <select name="obat_id" id="obat_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" onchange="setNamaObat()">
                            <option value="">Pilih Obat</option>
                            <?php foreach ($obats as $obat) : ?>
                                <option value="<?php echo $obat['id']; ?>"><?php echo $obat['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="nama_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
                        <input type="text" id="nama_obat" name="nama_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" readonly>
                    </div>
                    <div>
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        style="background-color: #008080; text-decoration: none;" 
                        onmouseover="this.style.backgroundColor='#006666'"
                        onmouseout="this.style.backgroundColor='#008080'"
                        onfocus="this.style.boxShadow='0 0 0 4px #004c4c'"
                    >Simpan</button>
                </form>
                <script>
                    function setNamaObat() {
                        const obat_id = document.getElementById('obat_id');
                        const nama_obat = obat_id.options[obat_id.selectedIndex].text;
                        document.getElementById('nama_obat').value = nama_obat;
                    }
                </script>
            </div>
        </div>
        <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4"">
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
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>