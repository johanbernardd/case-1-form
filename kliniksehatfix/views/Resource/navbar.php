<?php
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
<nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-500">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="w-full max-w-screen-xl mx-auto md:py-4">
            <div class="sm:flex sm:items-center sm:justify-between">
                <!-- LOGO -->
                <a href="index.php?c=LandingpageController&m=index" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse" style="color: black; text-decoration: none;">
                    <img class="h-8" alt="Klinik Logo" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/logo.png?raw=true" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Klinik Sehat</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                        Home</a>
                    </li>
                    <li>
                        <a href="#" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                        About</a>
                    </li>
                    <li>
                        <a href="#" class="me-4 md:me-6" style="color: black; text-decoration: none;" onmouseover="this.style.color='#008080'" onmouseout="this.style.color='black'" onfocus="this.style.boxShadow='0 0 0 4px #008080'">
                            Team</a>
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