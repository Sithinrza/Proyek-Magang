@extends('users.layouts.app')

@section('content')
    <section>
        <div class="relative bg-cover bg-center h-96 flex items-center" style="background-image: url('https://digitaliz.net/images/digital-platform-development-banner.png');">
            <div class="absolute inset-0 bg-black opacity-30"></div>
                <div class="container mx-auto px-6 relative z-10 text-white">
                    <h1 class="text-5xl font-bold mb-4">Digital Platform Development</h1>
                    <p class="text-2xl max-w-lg">Pembuatan website dan aplikasi mobile yang inovatif dan sesuai dengan kebutuhan bisnis Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-5">
        <div class="container mx-auto max-w-5xl" data-aos="fade-up">
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
                    <div>
                        <img
                            src="https://digitaliz.net/images/peoples-1.png"
                            class="w-full h-auto rounded-lg"
                            alt="Tim Digitaliz sedang bekerja"
                        />
                    </div>
                    <div>
                        <h1 class= "text-5xl lg:text-4xl font-bold text-indigo-900 leading-tight" data-aos="fade-up">
                            Percayakan pembuatan Platform Digital anda pada kami
                        </h1>
                        <p class="mt-6 mb-18 text-gray-600" data-aos="fade-up">
                            Digital Platform Development adalah jasa yang kami tawarkan untuk membantu bisnis Anda membangun keberadaan online
                            mereka melalui pembuatan website dan aplikasi mobile yang inovatif dan sesuai dengan kebutuhan bisnis Anda.
                            Kami menggabungkan desain yang menarik dengan fungsionalitas yang optimal untuk memberikan pengalaman pengguna yang terbaik
                            dan meningkatkan interaksi dengan pelanggan Anda.
                        </p>
                        <button class="btn-vio text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors">
                            Hubungi Kami
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-16 px-4 bg-gray-50">
        <div class="container mx-auto max-w-6xl" data-aos="fade-up-down">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-indigo-900" data-aos="fade-up">Jasa Yang Kami Sediakan</h2>
                <p class="mt-2 text-lg text-violet-800" data-aos="fade-up">Temukan jasa yang tepat untuk kebutuhan anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                <div class="bg-white p-6 rounded-2xl shadow-md flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                    <img src="https://digitaliz.net/icons/icon-4.png" alt="Icon Website Profile" class="w-16 h-16">
                    <span class="font-semibold text-gray-700 text-lg">Pembuatan Website Profile</span>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-md flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                    <img src="https://digitaliz.net/icons/icon-5.png" alt="Icon Aplikasi Mobile" class="w-16 h-16">
                    <span class="font-semibold text-gray-700 text-lg">Pembuatan Aplikasi Mobile</span>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-md flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                    <img src="https://digitaliz.net/icons/icon-6.png" alt="Icon Sistem Informasi" class="w-16 h-16">
                    <span class="font-semibold text-gray-700 text-lg">Pembuatan Sistem Informasi</span>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-md flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300 md:col-span-2 lg:col-span-1 lg:col-start-2">
                    <img src="https://digitaliz.net/icons/icon-7.png" alt="Icon Desain UI/UX" class="w-16 h-16">
                    <span class="font-semibold text-gray-700 text-lg">Pembuatan Desain UI / UX</span>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 px-4">
        <div class="container mx-auto max-w-6xl">

            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-indigo-950">Skema Kerjasama</h2>
                <p class="mt-2 text-lg text-violet-800">Sesuaikan dengan kebutuhan perusahaan Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-down">
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 text-center flex flex-col" data-aos="fade-down">
                    <img src="https://digitaliz.net/icons/icon-8.png" alt="Icon Project Based" class="w-24 h-24 mx-auto mb-6">
                    <h3 class="text-2xl font-bold text-indigo-950 mb-4">Project Based</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Skema kerjasama Project Based adalah pilihan yang tepat jika Anda memiliki proyek yang spesifik dan membutuhkan jasa pengembangan solusi untuk proyek tersebut.
                    </p>
                    <p class="text-gray-500 text-xs">
                        Dalam skema kerjasama Project Based, tim pengembang kami akan bekerja secara khusus pada proyek Anda, dari analisis kebutuhan hingga pengembangan dan implementasi.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 text-center flex flex-col" data-aos="fade-down">
                    <img src="https://digitaliz.net/icons/icon-9.png" alt="Icon Dedicated Team" class="w-24 h-24 mx-auto mb-6">
                    <h3 class="text-2xl font-bold text-indigo-950 mb-4">Dedicated Team</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Skema kerjasama Dedicated Team adalah pilihan yang tepat bagi bisnis yang membutuhkan tim pengembang yang fokus dan terlibat penuh dalam proyek Anda.
                    </p>
                    <p class="text-gray-500 text-xs">
                        Dalam Dedicated Team, tim pengembang kami akan bekerja eksklusif untuk Anda, dan Anda dapat memilih tim sesuai dengan kebutuhan proyek Anda.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 text-center flex flex-col justify-between">
                    <div>
                        <img src="https://digitaliz.net/icons/icon-10.png" alt="Icon custom" class="w-24 h-24 mx-auto mb-6">
                        <h3 class="text-2xl font-bold text-indigo-950 mb-4">Custom</h3>
                        <p class="text-gray-600 text-sm mb-8">
                            Pilih skema kerjasama sesuai dengan kebutuhan perusahaan Anda.
                        </p>
                    </div>
                    <button class="btn-vio text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors w-full">
                        Hubungi Kami
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 px-5 bg-gray-50">
        <div class="container mx-auto max-w-5xl" data-aos="zoom-in-up">
            <div class="bg-white p-8 lg:p-12 rounded-2xl shadow-lg">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div data-aos="zoom-in-up">
                        <h1 class="text-4xl lg:text-3xl font-bold text-indigo-900 leading-tight">
                            Kami Hadir dengan Inovasi Maksimal
                        </h1>
                        <p class="mt-6 mb-6 text-gray-600">
                            Kami memahami betapa pentingnya sebuah website atau aplikasi mobile yang efektif dalam dunia digital saat ini.
                            Oleh karena itu, tim kami terdiri dari para ahli pengembang dan desainer yang terampil dan berpengalaman dalam membangun
                            website dan aplikasi mobile yang unik dan kreatif untuk setiap klien kami.
                        </p>
                        <button class="btn-vio text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors" data-aos="zoom-in-up">
                            Hubungi Kami
                        </button>
                    </div>
                    <div>
                        <img
                            src="https://digitaliz.net/images/peoples-2.png"
                            class="w-full h-auto rounded-lg"
                            alt="Tim profesional sedang berdiskusi"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-8">
        <div class="container mx-auto max-w-6xl" data-aos="fade-up">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-indigo-900">Mengapa Harus Digitaliz</h2>
                <p class="mt-2 text-lg text-violet-800" data-aos="fade-up">Karena sesuai dengan kebutuhan Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                <div class="bg-gray-50 p-8 rounded-2xl text-center flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <img src="https://digitaliz.net/icons/icon-11.png" alt="Icon Pengalaman dan Keahlian" class="w-24 h-24 mb-6">
                    <h3 class="text-2xl font-bold text-indigo-950 mb-4">Pengalaman dan Keahlian</h3>
                    <p class="text-gray-600 text-base">
                        Kami memiliki pengalaman dan keahlian yang luas dalam bidang Digital Platform Developmen
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl text-center flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <img src="https://digitaliz.net/icons/icon-12.png" alt="Icon Kualitas Pelayanan" class="w-24 h-24 mb-6">
                    <h3 class="text-2xl font-bold text-indigo-950 mb-4">Kualitas Pelayanan Terbaik</h3>
                    <p class="text-gray-600 text-base">
                        Kami selalu berkomitmen untuk memberikan kualitas pelayanan terbaik kepada pelanggan kami.
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl text-center flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <img src="https://digitaliz.net/icons/icon-13.png" alt="Icon Solusi Inovatif" class="w-24 h-24 mb-6">
                    <h3 class="text-2xl font-bold text-indigo-950 mb-4">Solusi yang Tepat dan Inovatif</h3>
                    <p class="text-gray-600 text-base">
                        Kami selalu berusaha untuk memberikan solusi yang tepat dan inovatif untuk bisnis Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-4 bg-gray-95">
        <div class="container mx-auto max-w-6xl" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="grid grid-cols-4 gap-x-4 gap-y-8">
                    <div class="text-center">
                        <img src="https://digitaliz.net/images/nodejs.png" alt="Logo Node.js" class="h-20 w-20 mx-auto mb-2">
                        <p class="text-sm font-bold text-gray-500">Node.js</p>
                    </div>
                    <div class="text-center">
                        <img src="https://digitaliz.net/images/laravel.png" alt="Logo Laravel" class="h-20 w-20 mx-auto mb-2">
                        <p class="text-sm font-bold text-gray-500">Laravel</p>
                    </div>
                    <div class="text-center">
                        <img src="https://digitaliz.net/images/react.png" alt="Logo React.js" class="h-20 w-20 mx-auto mb-2">
                        <p class="text-sm font-bold text-gray-500">React.js</p>
                    </div>
                    <div class="text-center">
                        <img src="https://digitaliz.net/images/vuejs.png" alt="Logo Vue.js" class="h-20 w-20 mx-auto mb-2">
                        <p class="text-sm font-bold text-gray-500">Vue.js</p>
                    </div>
                    <div class="text-center">
                        <img src="https://digitaliz.net/images/wordpress.png" alt="Logo Wordpress" class="h-20 w-20 mx-auto mb-2">
                        <p class="text-sm font-bold text-gray-500">Wordpress</p>
                    </div>
                    <div class="text-center">
                        <img src="https://digitaliz.net/images/flutter.png" alt="Logo Flutter" class="h-20 w-20 mx-auto mb-2">
                        <p class="text-sm font-bold text-gray-500">Flutter</p>
                    </div>
                    <div class="text-center">
                        <img src="https://digitaliz.net/images/aws.png" alt="Logo AWS" class="h-20 w-20 mx-auto mb-2">
                        <p class="text-sm font-bold text-gray-500">AWS</p>
                    </div>
                    <div class="text-center">
                        <img src="https://digitaliz.net/images/tailwind.png" alt="Logo Tailwind CSS" class="h-20 w-20 mx-auto mb-2">
                        <p class="text-sm font-bold text-gray-500">Tailwind CSS</p>
                    </div>
                </div>
                <div class="text-center lg:text-left" data-aos="fade-up">
                    <h2 class="text-4xl font-bold text-indigo-950 leading-tight">
                        Selalu dengan <br> Teknologi Terbaru
                    </h2>
                    <p class="mt-4 text-gray-600">
                        Dalam proses pengembangan platform digital, kami mengedepankan aspek keamanan dan kecepatan dalam pengembangan dan pengujian platform Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 ">
        <div class="container mx-auto max-w-6xl" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="lg:text-left ">
                    <h2 class="text-3xl lg:text-4xl font-bold text-indigo-900 leading-tight">
                        Our Clients Speak
                    </h2>
                    <p class="mt-4 text-xl text-violet-800">
                        <span class="font-bold">Digitaliz</span> have been trusted <br> by many people and <br> companies
                    </p>
                </div>
                <div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg relative mb-8" data-aos="fade-up">
                        {{-- <img src="https://digitaliz.net/images/quote.png" alt="Quote Icon" class="absolute top-[-20px] left-8 w-16"> --}}

                        <div class="flex items-start gap-6 pt-8">
                            <p class="text-gray-600 italic flex-grow">
                                "Website yang dibuat dan dikembangkan oleh tim digitaliz sangat membantu kami dalam memberikan informasi terkait program-program Wetland Square terhadap masyarakat melalui sarana internet. Desainnya sangat unik dan eyecatchy dimana letak-letak menunya sudah sangat sesuai. Website ini juga mudah untuk di sunting, sehingga para admin website tidak mendapati kesulitan. Terima kasih kepada tim Digitaliz."
                            </p>
                            <img src="https://digitaliz.net/images/dita-amalia-mahmudah.png" alt="Foto Galih Ariffansyah" class="w-24 h-24 rounded-full flex-shrink-0">
                        </div>

                        <div class="mt-4">
                            <p class="font-bold text-indigo-950">Galih Ariffansyah</p>
                            <p class="text-sm text-gray-500">Head of Creative & Media</p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-lg relative" data-aos="fade-up">
                        {{-- <img src="https://digitaliz.net/images/quote.png" alt="Quote Icon" class="absolute top-[-20px] left-8 w-16"> --}}

                        <div class="flex items-start gap-6 pt-8">
                            <p class="text-gray-600 italic flex-grow">
                                "Setelah diupdate tampilan website telihat sangat fresh dan cukup menjual untuk sebuah lembaga training, disisi lain fitur yang disediakan oleh tim Digitaliz bisa memenuhi kebutuhan dari unit BCTI. Bisa mengerti kemauan costumer sesuai dengan permintaan serta respon dan pembuatan cepat."
                            </p>
                            <img src="https://digitaliz.net/images/galih.png" alt="Foto Dita Amalia Mahmudah" class="w-24 h-24 rounded-full flex-shrink-0">
                        </div>

                        <div class="mt-4">
                            <p class="font-bold text-indigo-950">Dita Amalia Mahmudah</p>
                            <p class="text-sm text-gray-500">Partnership & Program Development</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 px-4 pb-50 bg-gray-50">
        <div class="container mx-auto max-w-6xl" data-aos="fade-up">
            <div class="bg-white p-8 lg:p-12 rounded-2xl shadow-lg">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                    <div class="lg:pr-8">
                        <h2 class="text-4xl lg:text-5xl font-bold text-indigo-900 leading-tight">
                            Contact Us
                        </h2>
                        <div class="mt-4 text-xl text-violet-700">
                           <p> Write us a few words about your project</p> <p class="text-violet-400">and we’ll prepare a proposal for you within 24 hours.</p>
                        </div>
                    </div>
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div data-aos="fade-up">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                <input type="text" name="first-name" id="first-name" placeholder="First name" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 placeholder:text-gray-400 text-gray-900">
                            </div>
                            <div data-aos="fade-up">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input type="text" name="last-name" id="last-name" placeholder="Last name" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 placeholder:text-gray-400 text-gray-900">
                            </div>
                        </div>
                        <div data-aos="fade-up">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" placeholder="your@company.com" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 placeholder:text-gray-400 text-gray-900">
                        </div>
                        <div data-aos="fade-up">
                            <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel" name="phone-number" id="phone-number" placeholder="+62 1234 5678 910" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 placeholder:text-gray-400 text-gray-900">
                        </div>

                        <div data-aos="fade-up">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Choose a cooperation model</label>
                            <div class="grid grid-cols-3 gap-4">
                               <div tabindex="0" class="cooperation-card cursor-pointer border-2 bg-gray-50 border-gray-200 rounded-lg p-4 text-center transition">
                                    <img src="https://digitaliz.net/icons/icon-8.png" alt="Project Based Icon" class="mx-auto h-16 w-16 mb-2">
                                    <p class="font-semibold text-gray-800">Project Based</p>
                                </div>
                                <div tabindex="0" class="cooperation-card cursor-pointer border-2 bg-gray-50 border-gray-200 rounded-lg p-4 text-center transition">
                                    <img src="https://digitaliz.net/icons/icon-9.png" alt="Dedicated Team Icon" class="mx-auto h-16 w-16 mb-2">
                                    <p class="font-semibold text-gray-800">Dedicated Team</p>
                                </div>
                               <div tabindex="0" class="cooperation-card cursor-pointer border-2 bg-gray-50 border-gray-200 rounded-lg p-4 text-center transition">
                                    <img src="https://digitaliz.net/icons/icon-10.png" alt="Custom Icon" class="mx-auto h-16 w-16 mb-2">
                                    <p class="font-semibold text-gray-800">Custom</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up">
                            <label for="message" class="block text-sm font-medium text-gray-700">How can we help?</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us a little about the project..." class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 placeholder:text-gray-400 text-gray-900"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white btn-vio hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500 transition-colors">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
