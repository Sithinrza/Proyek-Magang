@extends('users.layouts.app')

@section('content')

<section class="my-20">
  <div class="hero min-h-screen">
    <div class="hero-content flex-col lg:flex-row items-start bg-gray-100 rounded-2xl">
      <img src="https://digitaliz.net/images/object-1.png" class="w-full max-w-lg lg:max-w-xl rounded-lg shadow-2xl" data-aos="fade-up"/>
      <div class="lg:ml-10">
        <h1 class="text-4xl font-bold text-indigo-900" data-aos="fade-up">Ups.. Saat ini jasa digital marketing sedang overload :(</h1>
        <p class="py-6 text-xl font-sans text-gray-500" data-aos="fade-up"  data-aos-duration="500">
            Kami memohon maaf kepada pelanggan kami yang terhormat, saat ini kami sedang mengalami overload pada layanan digital marketing kami. Kami mengalami lonjakan
            permintaan yang sangat tinggi dan sangat mengapresiasi kepercayaan dan dukungan yang diberikan oleh pelanggan kami.
        </p>
        <button class="btn btn-vio font-bold px-8 rounded-lg" data-aos="fade-up">Hubungi Kami</button>
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
