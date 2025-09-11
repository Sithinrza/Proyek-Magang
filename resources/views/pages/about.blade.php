@extends('layouts.app')

@section('content')

<section class="pt-10 md:pt-10">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl sm:text-4xl text-gray-800"><span class="text-violet-500">ABOUT </span>US</h1>
        </div>
      </section>

      <section class="p-10 md:p-10">

        <div class="bg-white rounded-2xl overflow-hidden ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
                <div class="p-8 lg:p-16 flex flex-col justify-center order-2 lg:order-2">
                    <h1 class="text-3xl font-bold text-indigo-950">We are IT specialist</h1>
                    <p class="mt-6 text-1xl text-gray-600 leading-relaxed">
                      Digitaliz adalah Konsultan, Pengembangan Sistem, dan Agen Pemasaran Digital dengan pemahaman tentang pasar Indonesia yang memiliki banyak pengalaman proyek-proyek Nasional.
                      Digitaliz memberikan solusi terhadap kebutuhan klien dalam membangun departemen informasi dan teknologi dalam menjalankan bisnis klien. Bersama tim yang berpengalaman, Kami menjamin solusi IT terbaik.
                    </p>
                </div>

                <div class="p-8 lg:p-12 order-1 lg:order-2 flex justify-center items-center">
                    <img src="https://digitaliz.net/images/object-2.png" alt="Project">
                </div>
            </div>
        </div>
      </section>

      <section class="p-10 md:p-20">
        <div class="text-center mb-12">
            <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">Mengapa Harus Digitaliz</h1>
            <p class="mt-1 text-purple-500 text-2xl">Karena Sesuai dengan Kebutuhan Anda</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center items-center">
                <img src="https://i.pinimg.com/736x/a8/b2/fc/a8b2fcdc1abb5f2b0484db8f9d81f3e7.jpg" alt="Project" class="max-w-full h-auto">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-10">

                <div class="flex items-start">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Unique Design</h3>
                        <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Service Innovation</h3>
                        <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Digital Strategy</h3>
                        <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Brand Identity</h3>
                        <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Transparency</h3>
                        <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Control</h3>
                        <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <section class="p-10 md:p-20">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">Meet Our Expert Team</h1>
            <p class="mt-1 text-purple-500 text-2xl">Karena Sesuai dengan Kebutuhan Anda</p>
        </div>
        <div class="bg-white rounded-2xl overflow-hidden ">
          <div class="grid grid-cols-1 md:grid-cols-3 ">
                <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
                <div class="p-8 lg:p-12 order-1 lg:order-2 flex justify-center items-center flex-col">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKc1JH9urbeue52sfRFksOJTJiVWohRCgH0etjWApkPzZSa2SlXx6CnslnsFlDEHwN1bs&usqp=CAU" alt="Project" class="h-50 w-90">
                    <h2 class="text-2xl font-bold text-gray-800 pt-5">Hoshi</h2>
                    <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                </div>
                <div class="p-8 lg:p-12 order-1 lg:order-2 flex justify-center items-center flex-col">
                    <img src="https://shanibacreative.com/wp-content/uploads/2020/06/membuat-foto-profil-yang-bagus.jpg" alt="Project" class="h-50 w-90">
                    <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                    <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                  </div>
                <div class="p-8 lg:p-12 order-1 lg:order-2 flex justify-center items-center flex-col">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoEKMxP8rTB6aCoSWX2OMpcHiz7IJcRiNuEGUAwf_7gTtU0nRpwbLO2uESDBKvxl-aczA&usqp=CAU" alt="Project" class="h-50 w-90">
                    <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                    <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                </div>
                <div class="p-8 lg:p-12 order-1 lg:order-2 flex justify-center items-center flex-col">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtzkSAhR5xecyUecurKV5KTZbj9neFiJwBX8-b-3RYN7KZhPwld3IiQxxU1xPmvRuBmI4&usqp=CAU" alt="Project" class="h-50 w-90">
                  <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                  <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                </div>
                <div class="p-8 lg:p-12 order-1 lg:order-2 flex justify-center items-center flex-col">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrwMvUgClCnBNDMfiBcopM8BgT74epXtu0g&s" alt="Project" class="h-50 w-90">
                  <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                  <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                </div>
                <div class="p-8 lg:p-12 order-1 lg:order-2 flex justify-center items-center flex-col">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbR4WztpgqX-e2DDoLRD2IaeIozVSJ87LaLQo4z807Vnz1gNMjYk6y-ixLXGYqM06QhYI&usqp=CAU" alt="Project" class="h-50 w-90">
                  <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                  <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                </div>
          </div>
        </div>
      </section>

      <section class="py-16">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">OUR COSTUMERS</h1>
            <p class="text-purple-500 font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui provident earum repudiandae fugit unde ex rem similique adipisci aut</p>
        </div>

        <div class="relative w-full overflow-hidden py-4">
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
            </div>
        </div>
      </section>

@endsection
