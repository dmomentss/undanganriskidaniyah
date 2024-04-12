<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title> Muhammad Riski Anwari & Aina Syamsiah</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <style>
        @font-face {
            font-family: "gyahegi";
            src: url(font/gyahegi/Gyahegi.otf) format('truetype');
        }

        @font-face {
            font-family: "classy";
            src: url(font/classy_vogue/Classyvogueregular.ttf) format('truetype');
        }

        @font-face {
            font-family: "soage";
            src: url(font/soage/Soage.otf) format('truetype');
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- countdown -->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
    <script src="countdown/simplyCountdown.min.js"></script>
</head>

<body>
    <!-- hero -->
    <section id="home" class="bg-cover bg-center h-screen flex items-center justify-center text-white"
        style="background-image:url(img/atas.JPG) ;">
        <div class="container max-w-md md:max-w-5xl">
            <div class="flex flex-wrap">
                <div class="w-full text-center md:pt-32 pt-64 ">
                    <h1 class="font-classy text-xs pb-4 md:text-sm drop-shadow-lg shadow-black">WE ARE GETTING
                        MARRIED</h1>
                    <h2 class="font-gyahegi text-base pb-4 md:text-2xl drop-shadow-lg shadow-black">
                        Muhammad Riski
                        Anwari
                        & Aina
                        Syamsiah</h2>
                    <div class="flex justify-center">
                        <p>__________</p>
                        <p class="px-2 py-3 font-classy text-xss md:text-xs">SAVE THE DATE</p>
                        <p>__________</p>
                    </div>
                    <h3 class="font-classy text-sm md:text-base pb-8 md:pb-10">28 April 2024</h3>
                    <a href="#promise"
                        class="border font-poppins px-6 py-2 text-xs md:text-base hover:bg-slate-100 hover:text-black transition duration-300 ease-in-out"
                        onclick="enableScroll()">SEE
                        INVITATION</a>
                    <p class="font-gyahegi text-xs pt-16 md:text-sm">Countdown</p>
                    <div class="simply-countdown font-classy pt-4 text-xs md:text-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->
    <!-- header -->
    <header class="bg-transparent top-0 sticky left-0 w-full flex items-center">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home"
                        class="font-bold font-classy text-xs md:text-xl block py-4 dark:text-white">Muhammad Riski
                        Anwari
                        & Aina Syamsiah</a>
                </div>
                <div class="flex items-center  px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 md:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-2 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-0 top-full md:block md:static md:bg-transparent md:max-w-full md:shadow-none md:rounded-none">
                        <ul class="block md:flex font-poppins">
                            <li class="group">
                                <a href="#home"
                                    class="text-xs md:text-base text-black md:dark:text-white py-2 mx-5 flex group-hover:text-cyan-500">Home</a>
                            </li>
                            <li class="group">
                                <a href="#promise"
                                    class="text-xs md:text-base text-black md:dark:text-white py-2 mx-5 flex group-hover:text-cyan-500">Promise</a>
                            </li>
                            <li class="group">
                                <a href="#wedding"
                                    class="text-xs md:text-base text-black md:dark:text-white py-2 mx-5 flex
                                    group-hover:text-cyan-500">Wedding
                                    Event</a>
                            </li>
                            <li class="group">
                                <a href="#rsvp"
                                    class="text-xs md:text-base text-black md:dark:text-white py-2 mx-5 flex
                                    group-hover:text-cyan-500">RSVP</a>
                            </li>
                            <li class="group">
                                <a href="#gift"
                                    class="text-xs md:text-base text-black md:dark:text-white py-2 mx-5 flex
                                    group-hover:text-cyan-500">Gift</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- header end -->

    <!-- our story -->
    <section id="promise" class="flex justify-center pt-10">
        <div class="container max-w-md md:max-w-7xl pb-20">
            <div class="flex flex-wrap">
                <div class="w-full pt-10">
                    <h1 class="text-center text-lg font-semibold pb-4 font-classy md:text-4xl md:font-bold">Our Promise
                    </h1>
                    <h2
                        class="text-center max-w-md md:max-w-lg mx-auto text-xss font-poppins pb-10 md:pb-20 md:text-sm md:pt-4">
                        "Dalam kebersamaan yang akan digeluti, kita adalah dua pena yang siap menari di atas lembaran
                        putih
                        hidup. Pada setiap sapuan tinta, kita menyusun puisi cinta yang abadi"</h2>
                </div>
            </div>
            <div class=" md:flex justify-center">
                <div class="flex flex-wrap items-center">
                    <div class="w-1/2  md:px-4">
                        <img src="img/pria.JPG" alt="" class="rounded-full">
                    </div>
                    <div class="w-1/2  md:px-4 pl-2">
                        <h1 class="font-classy text-sm pb-4 md:text-xl">Muhammad Riski Anwari</h1>
                        <h2 class="font-poppins text-xss text-justify md:text-sm">Putra Ketiga Dari Bapak Kursani-Alm
                            Dan
                            Ibu Halimah </h2>
                    </div>
                </div>
                <div class="flex flex-wrap pt-10 text-justify md:pt-0 items-center">
                    <div class="w-1/2  md:px-4 pr-2 text-right">
                        <h1 class="font-classy text-sm pb-4  md:text-xl">Aina Syamsiah</h1>
                        <h2 class="font-poppins text-xss md:text-sm">"Putri Kedua Dari Bapak Hamdi Dan Ibu Ade Hariyani
                        </h2>
                    </div>
                    <div class="w-1/2  md:px-4">
                        <img src="img/wanita.JPG" alt="" class="rounded-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our story end -->

    <!-- wedding event -->
    <section id="wedding" class="flex  justify-center">
        <div class="container max-w-md md:max-w-7xl pt-10 px-0">
            <div class="flex flex-wrap">
                <div class="w-full pt-10 text-center pb-2">
                    <h1 class=" text-lg font-semibold pb-4 font-classy md:text-4xl md:font-bold md:pb-8">Wedding Event
                    </h1>

                    <h2 class="px-1 max-w-md md:max-w-xl mx-auto text-xss font-poppins pb-4 md:pb-8 md:text-sm md:pt-4">
                        Dengan doa dan harapan yang terpanjatkan, kami akan melangkah bersama dalam ikatan suci yang
                        telah
                        Allah tetapkan. Sejauh mata memandang, sejauh langit membentang, kami akan menjalani perjalanan
                        ini
                        dengan kebahagiaan, cinta, dan ketulusan.</h2>
                </div>
                <div class="w-1/3 px-1 md:px-4">
                    <img src="img/kiri.JPG" class="rounded-t-full" alt="">
                </div>
                <div class="w-1/3 px-1  md:px-4">
                    <img src="img/tengah.JPG" class="rounded-t-full" alt="">
                </div>
                <div class="w-1/3 px-1  md:px-4">
                    <img src="img/kanan.JPG" class="rounded-t-full" alt="">
                </div>
                <div class="w-full px-1 pt-4 md:pt-8 text-center pb-4">
                    <p class="text-xss font-poppins mx-auto max-w-md md:max-w-xl md:text-base">Dengan hormat dan rasa
                        sukacita,
                        kami
                        mengundang
                        Bapak/Ibu/Saudara/Saudari untuk turut hadir dalam
                        acara pernikahan kami.</p>
                </div>
                <div class="w-full px-1 justify-center pb-10">
                    <div class="px-8 py-4  border border-black">
                        <div class="w-full flex flex-wrap">
                            <div class="w-full  text-center  font-poppins pb-2 border-b">
                                <h1 class="text-xs md:text-sm">Resepsi</h1>
                            </div>
                            <div class="w-1/3 text-center pt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="mx-auto w-6 md:w-10">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h1 class="font-poppins text-xss md:text-sm pt-4">09.00 - selesai</h1>
                            </div>
                            <div class="w-1/3 text-center pt-2">
                                <a href="https://maps.app.goo.gl/UJ1MyfWojXegw3kD9?g_st=iw" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="mx-auto w-6 md:w-10">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <h1 class="font-poppins text-xss md:text-sm pt-4">Location</h1>
                                </a>
                            </div>
                            <div class="w-1/3 text-center pt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="mx-auto w-6  md:w-10">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>
                                <h1 class="font-poppins text-xss pt-4 md:text-sm">28 April 2024</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wedding event end-->

    <!-- rsvp -->
    <section id="rsvp" class=" pt-10 pb-5 md:py-32 bg-cover bg-center  text-white"
        style="background-image: url(img/atas.JPG)">
        <div class="container mx-auto text-center font-poppins">
            <h2 class="font-classy text-3xl font-bold md:text-4xl mb-8">RSVP</h2>
            <p class=" mb-8 text-xss md:text-sm">Isi form di bawah ini untuk melakukan konfirmasi
                kehadiran
            </p>
            @if (session('success'))
                <div class="mt-4 notif bg-transparent text-white p-3 rounded">
                    <span>{{ session('success') }}</span>
                    <button type="button" onclick="closeMessage()"
                        class="ml-2 text-sm font-medium text-green-800 focus:outline-none">X</button>
                </div>
            @endif

            <script>
                function closeMessage() {
                    const successMessage = document.querySelector('.notif');
                    successMessage.style.display = 'none';
                }
            </script>
            <div class=" mt-5">
                <h1 class="text-3xl font-bold font-classy mb-6">Buku Tamu</h1>
                <form action="{{ route('bukutamu.store') }}" method="POST"
                    class="max-w-md md:max-w-7xl font-poppins mx-auto">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block   text-xs md:text-sm text-start mb-2">Nama:</label>
                        <input type="text" name="nama" id="nama"
                            class="w-full p-2 border rounded bg-transparent">
                    </div>
                    <div class="mb-4">
                        <label for="kehadiran" class="block  text-xss md:text-sm text-start mb-2">Kehadiran</label>
                        <select id="kehadiran" name="kehadiran"
                            class="w-full p-2 border rounded bg-transparent font-poppins text-xs text-black">
                            <option value="hadir" class="font-poppins">Ya, saya akan hadir</option>
                            <option value="tidakhadir">Maaf, saya tidak bisa hadir</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="pesan" class="block   text-xs md:text-sm text-start mb-2">Pesan:</label>
                        <textarea name="pesan" id="pesan" class="w-full  border rounded bg-transparent "></textarea>
                    </div>
                    <button type="submit"
                        class="border text-xs md:text-sm border-white p-2 rounded hover:bg-black hover:text-white">Kirim
                        Pesan</button>
                </form>

                <hr class="my-6">


                <h1 class="text-xl font-bold  font-classy mb-3">Daftar Pesan</h1>

                <div class="overflow-y-auto h-52">
                    <ul class="divide-y divide-gray-200">
                        @foreach ($bukutamu as $bt)
                            <li class="py-2 font-poppins">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <span
                                            class="font-bold text-xs text-start">{{ $bt->nama }}({{ $bt->kehadiran }})</span>
                                        <span class=" text-start text-xss">{{ $bt->pesan }}</span>
                                    </div>
                                    <p class="text-xss">{{ $bt->created_at->diffForHumans() }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('login') }}" target="_blank"
                    class="bottom-6 right-6 border bg-transparent text-xss text-white px-3 py-1 rounded shadow-lg hover:bg-black">
                    Login
                </a>
            </div>
        </div>
    </section>
    <!-- gift -->
    <section id="gift" class=" py-20 md:py-32">
        <div class="container mx-auto text-center">
            <h2 class="font-classy text-3xl font-bold md:text-4xl mb-8">Gift</h2>
            <div class="w-full flex justify-center">
                <p class="text-gray-600 mb-8 text-xss md:text-sm max-w-lg">Kehadiran dan doa restu Anda sudah menjadi
                    hadiah
                    terindah
                    bagi kami. Namun, jika Anda ingin memberikan hadiah, berikut beberapa opsi yang dapat
                    dipertimbangkan:
                </p>
            </div>
            <div class="w-full flex flex-wrap">
                <div class="w-full md:w-1/2  px-2 py-2">
                    <div class="border border-black py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="mx-auto w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                        </svg>

                        <h1 class="font-poppins text-xs md:text-lg font-bold">BRI</h1>
                        <p class="font-poppins text-xss md:text-sm">003101010222536 - Muhammad Riski Anuari</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gift end-->

    <!-- footer -->
    <footer>
        <div class="flex flex-wrap text-xss text-center py-10 bg-black text-slate-400">
            <h1 class="w-full font-poppins ">PoweredBy</h1>
            <p class="w-full text-2xl font-classy pb-16">D'Moment</p>
            <p class="text-xss border-t w-full text-slate-400">copyright@dmoment</p>
        </div>
    </footer>
    <!-- footer -->


    <!-- audio -->
    <div class="audio-container">
        <audio id="song" autoplay loop>
            <source src="musik/Christina Perri - A Thousand Years [Official Music Video] (1).mp3" type="audio/mp3">
        </audio>
        <div class="audio-icon fixed bottom-2 right-2
       cursor-pointer opacity-70" style="display: none;">
            <i class="bi-disc animate-spin-slow " style="font-size: 30px; line-height: 0;"></i>
        </div>
    </div>
    <!-- audio end -->

    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 3, // required
            day: 7, // required
            hours: 8, // Default is 0 [0-23] integer
            words: { //words displayed into the countdown
                days: {
                    singular: 'Hari',
                    plural: 'Hari'
                },
                hours: {
                    singular: 'Jam',
                    plural: 'Jam'
                },
                minutes: {
                    singular: 'Menit',
                    plural: 'Menit'
                },
                seconds: {
                    singular: 'Detik',
                    plural: 'Detik'
                }
            },
        })
    </script>


    <script>
        const audioicon = document.querySelector('.audio-icon');
        const song = document.querySelector('#song');
        const icon = document.querySelector('.audio-icon i');
        let isPlaying = false;

        function disableScroll() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;


            window.onscroll = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }
            document.documentElement.style.scrollBehavior = 'auto';
        }

        function enableScroll() {
            window.onscroll = function() {}
            document.documentElement.style.scrollBehavior = 'smooth';
            localStorage.setItem('opened', 'true');
            playAudio();
        }

        function playAudio() {

            audioicon.style.display = 'flex'
            song.play();
            isPlaying = true;
        }
        audioicon.onclick = function() {
            if (isPlaying) {
                song.pause();
                icon.classList.remove('bi-disc');
                icon.classList.add('bi-pause-circle');
            } else {
                song.play();
                icon.classList.add('bi-disc');
                icon.classList.remove('bi-pause-circle');
            }

            isPlaying = !isPlaying;
        }
        if (!localStorage.getItem('opened')) {

            disableScroll();
        }
        if (localStorage.getItem('opened')) {

            enableScroll();
        }
    </script>

    <script>
        const hamburger = document.querySelector('#hamburger');
        const navMenu = document.querySelector('#nav-menu');
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('hamburger-active');
            navMenu.classList.toggle('hidden');
        })

        // navbar fix

        const header = document.querySelector('header');
        const headerHeight = header.clientHeight;

        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY || window.pageYOffset;

            if (scrollPosition > headerHeight) {
                header.classList.add('navbar-fixed');
            } else {
                header.classList.remove('navbar-fixed');
            }
        });
    </script>
</body>

</html>
