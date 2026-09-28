<!DOCTYPE html>

<html lang="id" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ITS Academic Profile')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Libre+Baskerville:wght@400;700&display=swap"
        rel="stylesheet"
    >

    @stack('styles')

    <style>
        .nav-link {
            text-decoration: none;
            transition: all 0.7s;
            display: inline-block;
        }

        .nav-link:hover {
            letter-spacing: 1px;
        }
    </style>

    <!-- Theme initialization -->
    <script>
        const savedTheme = localStorage.getItem('theme');

        if (savedTheme === 'light') {
            document.documentElement.classList.remove('dark');
        } else {
            document.documentElement.classList.add('dark');
        }
    </script>

</head>

<body
    class="bg-[#0b3b66] text-black
           dark:bg-black dark:text-white
           font-sans
           transition-colors duration-300"
>

    <!-- Global background image + light/dark overlay -->
    <img src="{{ asset('images/bg-campus.png') }}" class="fixed inset-0 w-full h-full object-cover -z-10">
    <div class="fixed inset-0 bg-white/70 dark:bg-black/70 -z-10"></div>

    <!-- Navbar -->
    <header
        id="site-header"
        class="fixed top-0 left-0 right-0 z-20
               transition-colors duration-300
               bg-transparent"
    >

        <nav
            class="max-w-7xl mx-auto
                   flex items-center justify-between
                   px-4 sm:px-8 py-4 sm:py-6"
        >

            <!-- Logo -->
            <a
                href="{{ route('home') }}"
                class="font-serif text-base sm:text-xl font-semibold
                       text-[#0b3b66] dark:text-white
                       transition-colors duration-300"
            >
                ITS Academic Profile
            </a>


            <div class="flex items-center gap-3 sm:gap-10 text-xs sm:text-sm">

                <!-- Home -->
                <a
                    href="{{ route('home') }}"
                    class="nav-link
                           hover:text-gray-300
                           transition
                           {{ request()->routeIs('home')
                               ? 'text-blackk dark:text-white'
                               : 'text-[#6b6b6b]'}}"
                >
                    Home
                </a>


                <!-- About -->
                <a
                    href="{{ route('about') }}"
                    class="nav-link
                           hover:text-gray-300
                           transition
                           {{ request()->routeIs('about')
                               ? 'text-blackk dark:text-white'
                               : 'text-[#6b6b6b]'}}"
                >
                    About
                </a>


                <!-- Calculator -->
                <a
                    href="{{ route('calculator') }}"
                    class="nav-link
                           hover:text-gray-300
                           transition
                           {{ request()->routeIs('calculator') || request()->routeIs('hitung.ipk')
                               ? 'text-blackk dark:text-white'
                               : 'text-[#6b6b6b]'}}"
                >
                    Calculator
                </a>


                <!-- Agent -->
                <a
                    href="{{ route('agent') }}"
                    class="nav-link
                           hover:text-gray-300
                           transition
                           {{ request()->routeIs('agent')
                               ? 'text-blackk dark:text-white'
                               : 'text-[#6b6b6b]'}}"
                >
                    Agent
                </a>


                <!-- Dark / Light Mode Button -->
                <button
                    id="theme-toggle"
                    type="button"
                    class="w-9 h-9
                           flex items-center justify-center
                           rounded-full
                           hover:bg-white/10
                           transition-all duration-300"
                    aria-label="Toggle dark mode"
                >
                    <span id="theme-icon" class="text-base">
                        ☀️
                    </span>
                </button>

            </div>

        </nav>

    </header>


    <!-- Page Content -->
    <main class="relative min-h-screen">

        @yield('content')

    </main>


    <!-- Footer -->
    <footer
        class="relative z-20
               bg-white
               dark:bg-black
               px-8 py-6
               transition-colors duration-300"
    >

        <div
            class="max-w-7xl mx-auto
                   flex flex-col sm:flex-row
                   justify-between
                   items-start sm:items-center
                   gap-2
                   text-sm
                   text-gray-400
                   dark:text-gray-400"
        >

            <p>
                &copy; ITS Academic Profile &mdash; PBKK A
            </p>


            <div class="text-left sm:text-right">

                <a
                    href="https://github.com/artificialangel/PBKK-B-5025241204"
                    target="_blank"
                    class="text-gray-400 font-bold
                           hover:underline
                           transition-colors duration-300"
                >
                    Github
                </a>

                <p>
                    5025241204@student.its.ac.id
                </p>

            </div>

        </div>

    </footer>


    <!-- Theme Toggle Script -->
    <script>

        const html = document.documentElement;
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');

        function updateThemeIcon() {
            if (html.classList.contains('dark')) {
                themeIcon.textContent = '🌙';
            } else {
                themeIcon.textContent = '☀️';
            }
        }
        updateThemeIcon();


        // Toggle theme
        themeToggle.addEventListener('click', () => {

            if (html.classList.contains('dark')) {

                // DARK → LIGHT
                html.classList.remove('dark');

                localStorage.setItem('theme', 'light');

            } else {

                // LIGHT → DARK
                html.classList.add('dark');

                localStorage.setItem('theme', 'dark');

            }

            updateThemeIcon();

        });

    </script>


    <!-- Navbar Scroll Effect -->
    <script>

        const header = document.getElementById('site-header');

        window.addEventListener('scroll', () => {

            if (window.scrollY > 20) {

                header.classList.remove('bg-transparent');

                if (html.classList.contains('dark')) {
                    header.classList.add(
                        'bg-black',
                        'shadow-md'
                    );
                } else {
                    header.classList.add(
                        'bg-white',
                        'shadow-md'
                    );

                }

            } else {

                header.classList.remove(
                    'bg-black',
                    'bg-white',
                    'shadow-md'
                );
                header.classList.add('bg-transparent');
            }

        });

    </script>

</body>

</html>