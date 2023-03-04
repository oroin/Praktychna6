<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <title>GuestBook</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
</head>

<body class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="index.php" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">GuestBook</span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="index.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Головна</a>
                    </li>
                    <li>
                        <a href="list.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Всі гості</a>
                    </li>
                    <li>
                        <script>
                            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
                            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

                            // Change the icons inside the button based on previous settings
                            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                                themeToggleLightIcon.classList.remove('hidden');
                            } else {
                                themeToggleDarkIcon.classList.remove('hidden');
                            }

                            var themeToggleBtn = document.getElementById('theme-toggle');

                            themeToggleBtn.addEventListener('click', function() {

                                // toggle icons inside button
                                themeToggleDarkIcon.classList.toggle('hidden');
                                themeToggleLightIcon.classList.toggle('hidden');

                                // if set via local storage previously
                                if (localStorage.getItem('color-theme')) {
                                    if (localStorage.getItem('color-theme') === 'light') {
                                        document.documentElement.classList.add('dark');
                                        localStorage.setItem('color-theme', 'dark');
                                    } else {
                                        document.documentElement.classList.remove('dark');
                                        localStorage.setItem('color-theme', 'light');
                                    }

                                    // if NOT set via local storage previously
                                } else {
                                    if (document.documentElement.classList.contains('dark')) {
                                        document.documentElement.classList.remove('dark');
                                        localStorage.setItem('color-theme', 'light');
                                    } else {
                                        document.documentElement.classList.add('dark');
                                        localStorage.setItem('color-theme', 'dark');
                                    }
                                }

                            });
                        </script>
                    </li>
                </ul>
            </div>
        </div>
    </nav>