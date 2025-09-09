@extends('layouts.app')

@section('content')

<section>
    <div class="relative bg-cover bg-center h-96 flex items-center" style="background-image: url('https://digitaliz.net/images/creative-content-management-banner.png');">
        <div class="absolute inset-0 bg-black opacity-30"></div>
            <div class="container mx-auto px-6 relative z-10 text-white">
                <h1 class="text-5xl font-bold mb-4">Creative Content</h1>
                <p class="text-2xl max-w-lg">Pembuatan website dan aplikasi mobile yang inovatif dan sesuai dengan kebutuhan bisnis Anda.</p>
            </div>
        </div>

    </div>

</section>

<section class="my-20">
  <div class="hero min-h-screen">
    <div class="hero-content flex-col lg:flex-row items-start bg-gray-100 rounded-2xl">
      <img src="https://digitaliz.net/images/peoples-3.png" class="w-full max-w-lg lg:max-w-xl rounded-lg shadow-2xl" data-aos="fade-up"/>
      <div class="lg:ml-10">
        <h1 class="text-4xl font-bold text-indigo-900" data-aos="fade-up">Percayakan pembuatan Creative Content anda pada kami</h1>
        <p class="py-6 text-xl font-sans text-gray-500" data-aos="fade-up"  data-aos-duration="500">
          Digital Platform Development adalah jasa yang kami tawarkan untuk membantu bisnis Anda membangun keberadaan online mereka melalui pembuatan website dan aplikasi mobile yang inovatif dan sesuai dengan kebutuhan bisnis Anda. Kami menggabungkan desain yang menarik
          dengan fungsionalitas yang optimal untuk memberikan pengalaman pengguna yang terbaik dan meningkatkan interaksi dengan pelanggan Anda.
        </p>
        <button class="btn btn-vio font-bold px-8 rounded-lg" data-aos="fade-up">Hubungi Kami</button>
      </div>
    </div>
  </div>
</section>

<section class="my-20 max-h-min">
    <div class="text-center">
        <h1 class="font-bold text-3xl sm:text-4xl text-gray-800" data-aos="fade-up">Jasa Yang Kami Sediakan</h1>
        <p class="text-violet-400 pb-10 text-2xl" data-aos="fade-up" data-aos-delay="100">
            Temukan Jasa Kebutuhan Anda
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 place-items-center">

            <div class="flex items-center gap-2 bg-gray-100 rounded-2xl p-5"
                 data-aos="zoom-in" data-aos-delay="200">
                <img src="https://digitaliz.net/icons/icon-14.png" alt="">
                <h1>Profesional Fotografi</h1>
            </div>

            <div class="flex items-center gap-2 bg-gray-100 rounded-2xl p-5"
                 data-aos="zoom-in" data-aos-delay="400">
                <img src="https://digitaliz.net/icons/icon-14.png" alt="">
                <h1>Profesional Vidiografi</h1>
            </div>

            <div class="flex items-center gap-2 bg-gray-100 rounded-2xl p-5"
                 data-aos="zoom-in" data-aos-delay="600">
                <img src="https://digitaliz.net/icons/icon-14.png" alt="">
                <h1>Profesional Desain Grafis</h1>
            </div>

        </div>
    </div>
</section>


{{-- Skema Kerjasama --}}
<section class="py-16 px-4 pt-20">
    <div class="max-w-7xl mx-auto">
        <h1 class="font-bold text-3xl sm:text-4xl text-gray-800 text-center" data-aos="fade-up">Skema Kerjasama</h1>
            <p class="text-violet-400 pb-10 text-2xl text-center" data-aos="fade-up" >Sesuaikan dengan Kebutuhan Perusahaan Anda</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">
            <!-- Card 1 -->
            <div class="group w-96 shadow-none flex flex-col h-full bg-gray-50 rounded-2xl hover:bg-gray-100" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="card ">
                    <figure class="px-10 pt-10">
                    <img
                        src="https://digitaliz.net/icons/icon-8.png" alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="mt-6 text-2xl font-bold text-indigo-900">Project Based</h3>
                        <p class="mt-4 text-gray-800 font-sans py-3 px-2">
                            Skema kerjasama Project Based adalah pilihan yang tepat jika Anda memiliki proyek yang spesifik dan membutuhkan jasa pengembangan solusi untuk proyek tersebut.
                        </p>
                        <p class="text-xs px-2 text-gray-600">
                            Dalam skema kerjasama Project Based, tim pengembang kami akan bekerja secara khusus pada proyek Anda, dari analisis kebutuhan hingga pengembangan dan implementasi.
                        </p>

                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group w-96 shadow-none flex flex-col h-full bg-gray-50 rounded-2xl hover:bg-gray-100"  data-aos="zoom-in-up" data-aos-delay="400">
                <div class="card ">
                    <figure class="px-10 pt-10">
                    <img
                        src="https://digitaliz.net/icons/icon-9.png"
                        alt="Shoes"
                        class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="mt-6 text-2xl font-bold text-indigo-900">Dedicated Team</h3>
                        <p class="mt-4 text-gray-800 font-sans py-3 px-2">
                            Skema kerjasama Dedicated Team adalah pilihan yang tepat bagi bisnis yang membutuhkan tim pengembang yang fokus dan terlibat penuh dalam proyek Anda.
                        </p>
                        <p class="text-xs px-2 text-gray-600">
                            Dalam Dedicated Team, tim pengembang kami akan bekerja eksklusif untuk Anda, dan Anda dapat memilih tim sesuai dengan kebutuhan proyek Anda.
                        </p>

                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group w-96 shadow-none flex flex-col h-full bg-gray-50 rounded-2xl hover:bg-gray-100"  data-aos="zoom-in-up" data-aos-delay="600">
                <div class="card ">
                    <figure class="px-10 pt-10">
                    <img
                        src="https://digitaliz.net/icons/icon-10.png"
                        alt="Shoes"
                        class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="mt-6 text-2xl font-bold text-indigo-900">Custom</h3>
                        <p class="mt-4 text-gray-800 font-sans py-3 px-2">
                            Pilih skema kerjasama sesuai dengan kebuthan perusahaan Anda.
                        </p>
                        <button class=" btn btn-vio">
                        Hubungi Kami
                        </button>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="px-10 pt-10">
    <div class="rounded-2xl overflow-hidden min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-2 p-20 gap-6">
            <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
                <div class="p-8 lg:p-16 flex flex-col justify-center">
                <div class="order-1 lg:order-2 pb-6">
                    <h1 class="text-3xl font-bold text-gray-800" data-aos="fade-up">Kami Hadir dengan Inovasi Maksimal</h1>
                    <p class="mt-6 text-gray-600 leading-relaxed" data-aos="fade-up">
                        Kami memahami betapa pentingnya sebuah website atau aplikasi mobile yang efektif dalam dunia digital saat ini. Oleh karena itu, tim kami terdiri dari para ahli pengembang dan desainer yang terampil dan berpengalaman dalam membangun website dan aplikasi mobile yang unik dan kreatif untuk setiap klien kami.
                    </p>
                </div>
                <button class="btn btn-vio order-2 w-35" data-aos="fade-up">
                    Hubungi Kami
                </button>

                </div>
            <div class="p-8 lg:p-12 order-1 lg:order-2 flex items-center">
                <img src="https://digitaliz.net/images/picture-1.png" data-aos="fade-up" alt="Project">
            </div>
        </div>
    </div>
</section>

<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <h1 class="font-bold text-3xl sm:text-4xl text-gray-800 text-center" data-aos="fade-up">Mengapa Harus Digitaliz</h1>
            <p class="text-violet-400 pb-10 text-2xl text-center" data-aos="fade-up" data-aos-delay="400">Karena Sesuai dengan Kebutuhan Anda</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">
            <!-- Card 1 -->
            <div class="group w-96 shadow-none flex flex-col h-full bg-gray-50 rounded-2xl card hover:bg-gray-100" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="card hover:bg-gray-100">
                    <figure class="px-10 pt-10">
                    <img src="https://digitaliz.net/icons/icon-11.png" alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="mt-6 text-2xl font-bold text-indigo-900">Pengalaman dan Keahlian</h2>
                        <h4 class="mt-4 text-gray-800 font-sans py-3 px-2">
                            Kami memiliki pengalaman dan keahlian yang luas dalam bidang Digital Platform Developmen
                        </h4>

                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group w-96 shadow-none flex flex-col h-full bg-gray-50 rounded-2xl hover:bg-gray-100" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="card ">
                    <figure class="px-10 pt-10">
                    <img
                        src="https://digitaliz.net/icons/icon-12.png"
                        alt="Shoes"
                        class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="mt-6 text-2xl font-bold text-indigo-900">Kualitas Pelayanan Terbaik</h2>
                        <h4 class="mt-4 text-gray-800 font-sans py-3 px-2">
                            Kami selalu berkomitmen untuk memberikan kualitas pelayanan terbaik kepada pelanggan kami.
                        </h4>

                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group w-96 shadow-none flex flex-col h-full bg-gray-50 rounded-2xl hover:bg-gray-100" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="card ">
                    <figure class="px-10 pt-10">
                    <img
                        src="https://digitaliz.net/icons/icon-13.png"
                        alt="Shoes"
                        class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="mt-6 text-2xl font-bold text-indigo-900">Solusi yang Tepat dan Inovatif</h2>
                        <h4 class="mt-4 text-gray-800 font-sans py-3 px-2">
                            Kami selalu berusaha untuk memberikan solusi yang tepat dan inovatif untuk bisnis Anda.
                        </h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

   <!-- home our client -->
    <section class=" p-10 ">

        <div class="bg-white rounded-2xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 p-10 " data-aos="fade-up">
                <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
                <div class="p-8 lg:p-16 flex flex-col order-1 lg:order-1" data-aos="fade-up">
                   <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">Our Clients Speak</h1>
                   <h3 class="mt-4 w-90 text-2xl text-gray-600 leading-relaxed font-semibold text-purple-500">
                        <span class="font-bold">Digitaliz</span> have been trusted by many people and companies
                    </h3>

                </div>

                <div class="order-1 lg:order-2" data-aos="fade-up">
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

                    <div class="bg-white rounded-2xl overflow-hidden shadow-xl "data-aos="fade-up">
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

<section class="flex justify-center items-center min-h-screen p-4 mb-35 sm:p-10">

    <form class="flex flex-col lg:flex-row gap-8 lg:gap-16 max-w-6xl mx-auto p-6 md:p-10 bg-white rounded-2xl shadow-xl" data-aos="fade-up">

        <!-- Kolom Kiri: Teks Baru Anda -->
        <div class="w-full lg:w-1/3" data-aos="fade-up">
            <h1 class="text-4xl text-indigo-950 font-bold" data-aos="fade-up">Contact Us</h1>
            <h2 class="mt-4 text-gray-600 font-semibold text-xl" data-aos="fade-up">
                Write us a few words about your project
                <span class="text-violet-500">and we’ll prepare a proposal for you within 24 hours.</span>
            </h2>
        </div>

        <!-- Kolom Kanan: Form yang Diperbaiki -->
        <div class="w-full lg:w-2/3" data-aos="fade-up">
            <!-- Input Nama Depan & Belakang dibuat responsif -->
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="w-full" data-aos="fade-up">
                    <label for="first-name" class="font-semibold text-gray-700">First Name</label>
                    <input id="first-name" type="text" placeholder="First Name" class="mt-2 w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </div>
                <div class="w-full" data-aos="fade-up">
                    <label for="last-name" class="font-semibold text-gray-700">Last Name</label>
                    <input id="last-name" type="text" placeholder="Last Name" class="mt-2 w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </div>
            </div>

            <div class="mt-6" data-aos="fade-up">
                <label for="email" class="font-semibold text-gray-700">Email</label>
                <div class="relative mt-2">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                    </div>
                    <input id="email" type="email" placeholder="mail@site.com" required class="w-full p-3 pl-10 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </div>
            </div>

            <div class="mt-6"data-aos="fade-up">
                <label for="phone" class="font-semibold text-gray-700">Phone Number</label>
                <div class="relative mt-2">
                     <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"><path d="M7.25 11.5a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5h-1.5Z"></path><path fill-rule="evenodd" d="M6 1a2.5 2.5 0 0 0-2.5 2.5v9A2.5 2.5 0 0 0 6 15h4a2.5 2.5 0 0 0 2.5-2.5v-9A2.5 2.5 0 0 0 10 1H6ZM5 3.5A1.5 1.5 0 0 1 6.5 2h3A1.5 1.5 0 0 1 11 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 5 12.5v-9Z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input id="phone" type="tel" placeholder="Phone Number" required class="w-full p-3 pl-10 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </div>
            </div>

            <div class="mt-6" data-aos="fade-up">
                <h3 class="font-semibold text-gray-700">Choose a cooperation model</h3>
                <div class="flex flex-col sm:flex-row gap-4 mt-2">
                    <label class="flex flex-col text-center items-center gap-2 cursor-pointer border-2 border-gray-200 rounded-2xl p-4 w-full has-[:checked]:border-indigo-500 has-[:checked]:ring-2 has-[:checked]:ring-indigo-200" data-aos="zoom-in-up" data-aos-delay="200">
                        <input type="radio" name="pilihan" class="hidden peer" value="1" />
                        <img src="https://digitaliz.net/icons/icon-8.png" alt="Pilihan 1" class="h-16 w-16 object-contain" />
                        <h6 class="font-semibold text-gray-700">Project Based</h6>
                    </label>

                    <label class="flex flex-col text-center items-center gap-2 cursor-pointer border-2 border-gray-200 rounded-2xl p-4 w-full has-[:checked]:border-indigo-500 has-[:checked]:ring-2 has-[:checked]:ring-indigo-200" data-aos="zoom-in-up" data-aos-delay="400">
                        <input type="radio" name="pilihan" class="hidden peer" value="2" />
                        <img src="https://digitaliz.net/icons/icon-9.png" alt="Pilihan 2" class="h-16 w-16 object-contain" />
                        <h6 class="font-semibold text-gray-700">Dedicated Team</h6>
                    </label>

                    <label class="flex flex-col text-center items-center gap-2 cursor-pointer border-2 border-gray-200 rounded-2xl p-4 w-full has-[:checked]:border-indigo-500 has-[:checked]:ring-2 has-[:checked]:ring-indigo-200" data-aos="zoom-in-up" data-aos-delay="600">
                        <input type="radio" name="pilihan" class="hidden peer" value="3" />
                        <img src="https://digitaliz.net/icons/icon-10.png" alt="Pilihan 3" class="h-16 w-16 object-contain" />
                        <h6 class="font-semibold text-gray-700">Custom</h6>
                    </label>
                </div>
            </div>

            <div class="mt-6" data-aos="fade-up">
                <label for="message" class="font-semibold text-gray-700">How can we help?</label>
                <textarea id="message" class="mt-2 w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" rows="4" placeholder="Tell us a little about the project..." data-aos="fade-up"></textarea>
            </div>
            <button class="btn btn-vio w-full" data-aos="fade-up">Send</button>
        </div>
    </form>
</section>




@endsection
