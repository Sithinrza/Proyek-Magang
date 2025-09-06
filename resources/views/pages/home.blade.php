@extends('layouts.app')

@section('content')


       <!-- home our project -->

        <div class=" flex-1 rounded-2xl shadow-lg relative pb-24 bg-cover bg-center" style="background-image: url('https://digitaliz.net/images/hero-1.png');">
            <div class="p-8 md:p-12 min-h-[400px] flex items-center">
                <div class="grid md:grid-cols-2 gap-8 items-center w-full">
                    <div class="text-center md:text-left">
                        <h1 class="text-4xl md:text-5xl font-bold text-violet-950 leading-tight">
                            Accelerate Your Business
                        </h1>
                        <p class="mt-4 text-gray-500 text-lg">
                            Digitalisasi bisnis Anda dengan cepat dan mudah bersama kami
                        </p>
                        <a href="#" class="mt-8 inline-block bg-violet-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-violet-700 transition duration-300 transform hover:scale-105">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="absolute -bottom-12 left-1/2 -translate-x-1/2 w-full max-w-3xl px-4">
            <div class="bg-violet-600 text-white p-8 rounded-3xl shadow-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="flex flex-col items-center">
                        <span class="text-4xl font-bold">100+</span>
                        <span class="mt-2 text-violet-200 flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-briefcase"></i>
                            Projects Finished
                        </span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-4xl font-bold">32+</span>
                        <span class="mt-2 text-violet-200 flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-users"></i>
                            Loyal Clients
                        </span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-4xl font-bold">28</span>
                        <span class="mt-2 text-violet-200 flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-user-tie"></i>
                            Talented Members
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <section class="mt-40 pt-16 pb-16 px-8 md:px-12 bg-white rounded-3xl shadow-lg">
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <div class="text-center md:text-left">
                    <h2 class="text-4xl font-bold text-violet-950">About Us</h2>
                    <p class="mt-2 text-lg text-violet-600">Trusted by many company in various fields</p>
                    <p class="mt-8 text-gray-500 leading-relaxed">
                        Digitaliz adalah sebuah agensi kreatif yang berfokus pada layanan pembuatan website, desain grafis, fotografi, dan videografi untuk berbagai kebutuhan bisnis dan organisasi.
                    </p>
                    <p class="mt-4 text-gray-500 leading-relaxed">
                        Digitaliz mengedepankan inovasi dan kreativitas dalam setiap proyek yang dikerjakan, serta menggunakan teknologi dan tren desain terbaru untuk menghasilkan karya berkualitas tinggi yang dapat memenuhi kebutuhan dan tujuan klien. Dengan tim profesional yang berpengalaman dan layanan konsultasi yang ramah, Digitaliz siap memberikan solusi terbaik bagi Anda.
                    </p>
                </div>
                <div class="relative w-full h-64 md:h-80 bg-gray-200 rounded-2xl overflow-hidden shadow-xl flex items-center justify-center">
                    <img src="https://digitaliz.net/images/video-thumbnail.png" alt="Video Placeholder" class="absolute inset-0 w-full h-full object-cover">
                    <button class="absolute bg-white/80 backdrop-blur-sm text-violet-600 rounded-full w-16 h-16 flex items-center justify-center text-3xl shadow-lg hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-play"></i>
                    </button>
                </div>
            </div>
        </section>

    <section class="mt-24 py-16">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold text-gray-900">Our Services</h2>
                 <p class="mt-2 text-xl text-indigo-600">Find our services that suit your company's needs</p>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group bg-white p-8 rounded-2xl shadow-lg flex flex-col items-center text-center hover:bg-violet-600 hover:shadow-2xl hover:-translate-y-1 hover:scale-110  transition-all duration-300">
                <div class="bg-indigo-100 text-indigo-600 rounded-xl p-4 inline-block transition-colors duration-300 group-hover:bg-white group-hover:text-indigo-600">
                    <i class="fa-solid fa-layer-group text-3xl"></i>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Digital Platform Development</h3>
                <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-indigo-200">
                    Layanan pengembangan digital platform untuk membantu bisnis dan organisasi dapat eksis secara online dengan cara yang efektif.
                </p>
                <a href="3" class="mt-8 inline-flex items-center gap-2 text-violet-600 font-semibold border-2 border-violet-200 rounded-lg py-2 px-5 bg-white transition-all duration-300 group-hover:bg-violet-700 group-hover:border-white group-hover:text-white">
                    Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="group bg-white p-8 rounded-2xl shadow-lg flex flex-col items-center text-center hover:bg-violet-600 hover:shadow-2xl hover:-translate-y-1 hover:scale-110 transition duration-300 ease-in-out">
                <div class="bg-pink-100 text-pink-600 rounded-xl p-4 inline-block transition-colors duration-300 group-hover:bg-white group-hover:text-pink-600">
                    <i class="fa-solid fa-mobile-screen-button text-3xl"></i>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Creative Content Management</h3>
                <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-indigo-200">
                    Layanan kreatif untuk memenuhi kebutuhan konten klien, termasuk pembuatan video promosi, fotografi dan desain grafis.
                </p>
                <a href="#" class="mt-8 inline-flex items-center gap-2 text-violet-600 font-semibold border-2 border-violet-200 rounded-lg py-2 px-5 bg-white transition-all duration-300 group-hover:bg-violet-700 group-hover:border-white group-hover:text-white">
                    Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="group bg-white p-8 rounded-2xl shadow-lg flex flex-col items-center text-center hover:bg-violet-600 hover:shadow-2xl hover:-translate-y-1 hover:scale-110 transition-all duration-300">
                <div class="bg-fuchsia-100 text-fuchsia-600 rounded-xl p-4 inline-block transition-colors duration-300 group-hover:bg-white group-hover:text-fuchsia-600">
                    <i class="fa-solid fa-bullhorn text-3xl"></i>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Digital Marketing Strategy</h3>
                <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-indigo-200">
                    Layanan digital marketing untuk membantu bisnis dan organisasi dalam mempromosikan dan memasarkan merk mereka secara online.
                </p>
                <a href="#" class="mt-8 inline-flex items-center gap-2 text-violet-600 font-semibold border-2 border-violet-200 rounded-lg py-2 px-5 bg-white transition-all duration-300 group-hover:bg-violet-700 group-hover:border-white group-hover:text-white">
                    Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            </div>
    </section>

    <section class="px-10 pt-10 ">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">OUR PROJECT</h1>
            <p class="text-purple-500 font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui provident earum repudiandae fugit unde ex rem similique adipisci aut</p>
        </div>
        <div class="bg-white rounded-2xl overflow-hidden ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
                 <div class="p-8 lg:p-16 flex flex-col justify-center">
                    <div class="order-1 lg:order-2 pb-6">
                        <h1 class="text-3xl font-bold text-gray-800">Futuca</h1>
                        <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                        <p class="mt-6 text-gray-600 leading-relaxed">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, in sit mollitia reiciendis praesentium ratione est, veritatis tempora doloribus dolores fugit impedit necessitatibus saepe dolor unde rerum reprehenderit similique. Consequuntur?
                        </p>
                    </div>
                    <button class=" bg-transparent p-2 text-violet-800 hover:bg-violet-100 focus:outline-2 focus:outline-offset-2 focus:outline-violet-500 order-2 w-30 rounded border border-collapse">
                        Detail ->
                    </button>

                 </div>
                <div class="p-8 lg:p-12 order-1 lg:order-2 flex items-center">
                    <img src="https://digitaliz.net/images/picture-1.png" alt="Project">
                </div>
            </div>
        </div>
    </section>

     {{-- CARD --}}
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">

                <!-- Card 1 -->
                <div class="group w-96 shadow-none flex flex-col h-full">
                    <div class="card-bg">
                        <figure class="px-10 pt-10">
                        <img
                            src="https://digitaliz.net/icons/icon-1.png"
                            alt="Shoes"
                            class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center text-black">
                            <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Creative Content Management</h3>
                            <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-white">
                                Layanan kreatif untuk memenuhi kebutuhan konten klien, termasuk pembuatan video promosi, fotografi dan desain grafis.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group w-96 shadow-none flex flex-col h-full">
                    <div class="card-bg">
                        <figure class="px-10 pt-10">
                        <img
                            src="https://digitaliz.net/icons/icon-2.png"
                            alt="Shoes"
                            class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center text-black">
                            <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Web Development</h3>
                            <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-white">
                                Pengembangan website modern dan responsif untuk profil perusahaan, e-commerce, atau sistem informasi internal.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group w-96 shadow-none flex flex-col h-full">
                    <div class="card-bg ">
                        <figure class="px-10 pt-10">
                        <img
                            src="https://digitaliz.net/icons/icon-3.png"
                            alt="Shoes"
                            class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Digital Marketing</h3>
                            <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-white">
                                Strategi pemasaran digital untuk meningkatkan visibilitas brand Anda melalui SEO, SEM, dan manajemen media sosial.
                            </p>
                        <div class="card-actions">
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


        <!-- home our customer -->
    <section class="">
        <div class="container">
            <div class="text-center mb-10">
                <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">OUR COSTUMERS</h1>
                <p class="text-purple-500 font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui provident earum repudiandae fugit unde ex rem similique adipisci aut</p>
            </div>

        <!-- BARIS ATAS (bergerak ke KANAN) -->
            <div class="relative w-full overflow-hidden py-4">
                <!--
                    Class animasi ditempatkan di pembungkus luar ini, yang berisi DUA set logo.
                -->
                <div class="whitespace-nowrap animate-scroll-right">
                    <div class="inline-block">
                        <div class="flex items-center justify-center space-x-16 px-8">
                            <img src="https://digitaliz.net/images/pemprov.png" alt="Pemprov Kalsel" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hasnur-centre.png" alt="Yayasan Hasnur Centre" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hafecs.png" alt="HAFECS" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hrp.png" alt="HRP" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/polihasnur.png" alt="Politeknik Hasnur" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/pip.png" alt="Pengembangan Inovasi Pengajaran" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/wetland-box.png" alt="Wetland Box" class="h-16 w-auto">
                        </div>
                    </div>
                    <!--
                        logo duplikat diatas supaya animasinya terlihat tak terbatas. (bisa j disambat looping)
                    -->
                    <div class="inline-block">
                        <div class="flex items-center justify-center space-x-16 px-8">
                            <img src="https://digitaliz.net/images/pemprov.png" alt="Pemprov Kalsel" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hasnur-centre.png" alt="Yayasan Hasnur Centre" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hafecs.png" alt="HAFECS" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hrp.png" alt="HRP" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/polihasnur.png" alt="Politeknik Hasnur" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/pip.png" alt="Pengembangan Inovasi Pengajaran" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/wetland-box.png" alt="Wetland Box" class="h-16 w-auto">
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative w-full overflow-hidden py-4 mt-8">
                <div class="whitespace-nowrap animate-scroll-left">
                    <!-- KUMPULAN LOGO PERTAMA -->
                    <div class="inline-block">
                        <div class="flex items-center justify-center space-x-16 px-8">
                            <img src="https://digitaliz.net/images/pemprov.png" alt="Pemprov Kalsel" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hasnur-centre.png" alt="Yayasan Hasnur Centre" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hafecs.png" alt="HAFECS" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hrp.png" alt="HRP" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/polihasnur.png" alt="Politeknik Hasnur" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/pip.png" alt="Pengembangan Inovasi Pengajaran" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/wetland-box.png" alt="Wetland Box" class="h-16 w-auto">
                        </div>
                    </div>
                    <div class="inline-block">
                        <div class="flex items-center justify-center space-x-16 px-8">
                            <img src="https://digitaliz.net/images/pemprov.png" alt="Pemprov Kalsel" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hasnur-centre.png" alt="Yayasan Hasnur Centre" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hafecs.png" alt="HAFECS" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/hrp.png" alt="HRP" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/polihasnur.png" alt="Politeknik Hasnur" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/pip.png" alt="Pengembangan Inovasi Pengajaran" class="h-16 w-auto">
                            <img src="https://digitaliz.net/images/wetland-box.png" alt="Wetland Box" class="h-16 w-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

     <!-- home our client -->
    <section class=" p-10 pb-50">

        <div class="bg-white rounded-2xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 p-10 ">
                <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
                <div class="p-8 lg:p-16 flex flex-col order-1 lg:order-1">
                   <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">Our Clients Speak</h1>
                   <h3 class="mt-4 w-90 text-2xl text-gray-600 leading-relaxed font-semibold text-purple-500">
                        <span class="font-bold">Digitaliz</span> have been trusted by many people and companies
                    </h3>

                </div>

                <div class="order-1 lg:order-2">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-xl mb-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 ">
                            <div class="p-8 flex flex-col justify-center order-2 md:order-1">
                                <p class="text-black font-sans">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem repellendus totam fugiat ex! Praesentium enim illum, facere odit officiis excepturi minima magni adipisci nulla minus recusandae necessitatibus nobis numquam repellat consectetur, ab harum reprehenderit dignissimos eaque architecto ratione ad dolore.</p>
                                <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                                <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                            </div>
                            <div class="p-4 flex items-center justify-center order-1 md:order-2">
                                <img src="https://shanibacreative.com/wp-content/uploads/2020/06/membuat-foto-profil-yang-bagus.jpg" alt="HRP" class="h-50 w-50 mx-auto rounded-full">
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl overflow-hidden shadow-xl ">
                        <div class="grid grid-cols-1 md:grid-cols-2 ">
                            <div class="p-8 flex flex-col justify-center order-2 md:order-1">
                                <p class="text-black font-sans">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem repellendus totam fugiat ex! Praesentium enim illum, facere odit officiis excepturi minima magni adipisci nulla minus recusandae necessitatibus nobis numquam repellat consectetur, ab harum reprehenderit dignissimos eaque architecto ratione ad dolore.</p>
                                <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                                <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                            </div>
                            <div class="p-4 flex items-center justify-center order-1 md:order-2">
                                <img src="https://shanibacreative.com/wp-content/uploads/2020/06/membuat-foto-profil-yang-bagus.jpg" alt="HRP" class="h-50 w-50 mx-auto rounded-full">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
            // 1. Temukan semua elemen dengan class 'nav-link'
            const navLinks = document.querySelectorAll('.nav-link');

            // 2. Buat fungsi untuk menangani apa yang terjadi saat link diklik
            function handleNavClick(event) {

                // Pertama, reset semua link: hapus warna ungu, tambahkan warna abu-abu
                navLinks.forEach(link => {
                    link.classList.remove('text-indigo-600');
                    link.classList.add('text-gray-700');
                });

                // Kemudian, beri warna ungu HANYA pada link yang diklik
                const clickedLink = event.currentTarget;
                clickedLink.classList.add('text-indigo-600');
                clickedLink.classList.remove('text-gray-700');
            }

            // 3. Pasang "pendengar" di setiap link
            navLinks.forEach(link => {
                link.addEventListener('click', handleNavClick);
            });
    </script>

@endsection
