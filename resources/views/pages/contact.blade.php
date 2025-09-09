@extends('layouts.app')

@section('content')

 <div class="relative bg-cover bg-center h-96 flex items-center" style="background-image: url('https://digitaliz.net/images/contact-us-banner.png');">
    <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="container mx-auto px-6 relative z-10 text-white">
            <h1 class="text-5xl font-bold mb-4">Contact</h1>
            <p class="text-2xl max-w-lg">Write us a few words about your project and we'll prepare a proposal for you within 24 hours.</p>
        </div>
    </div>
    <div class="bg-white form-section-wrapper">
        <div class="container mx-auto px-6 py-16">
            <div class="grid lg:grid-cols-3 gap-8 animate-on-scroll">
                <div class="lg:col-span-2 p-8 bg-white rounded-lg shadow-2xl">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Isi Form</h2>
                    <p class="text-gray-600 mb-8">Isi formulir di bawah ini untuk melanjutkan</p>
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First name</label>
                                <input type="text" id="first-name" placeholder="First name" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last name</label>
                                <input type="text" id="last-name" placeholder="Last name" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" placeholder="your@company.com" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" id="phone" placeholder="+62 123 4567 8910" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Choose a cooperation model</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div tabindex="0" class="cooperation-card cursor-pointer border-2 bg-gray-50 border-gray-200 rounded-lg p-4 text-center transition">
                                    <img src="https://img.icons8.com/nolan/64/project.png" alt="Project Based Icon" class="mx-auto h-16 w-16 mb-2">
                                    <p class="font-semibold text-gray-800">Project Based</p>
                                </div>
                                <div tabindex="0" class="cooperation-card cursor-pointer border-2 bg-gray-50 border-gray-200 rounded-lg p-4 text-center transition">
                                    <img src="https://img.icons8.com/nolan/64/briefcase.png" alt="Dedicated Team Icon" class="mx-auto h-16 w-16 mb-2">
                                    <p class="font-semibold text-gray-800">Dedicated Team</p>
                                </div>
                                <div tabindex="0" class="cooperation-card cursor-pointer border-2 bg-gray-50 border-gray-200 rounded-lg p-4 text-center transition">
                                    <img src="https://img.icons8.com/nolan/64/target.png" alt="Custom Icon" class="mx-auto h-16 w-16 mb-2">
                                    <p class="font-semibold text-gray-800">Custom</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">How can we help?</label>
                            <textarea id="message" rows="4" placeholder="Tell us a little about the project..." class="w-full p-3 bg-gray-50 border border-gray-200 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-transparent"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
                <div class="bg-indigo-700 p-8 rounded-lg shadow-md flex flex-col justify-center items-center text-center text-white">
                    <svg class="w-8 h-8 mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l-3 3m6 0l-3 3m-3 10l3 3m-6 0l3 3"></path></svg>
                    <h3 class="text-3xl font-bold leading-tight">We are ready to bring your business to <br> <span class="text-indigo-300">The Next Level</span></h3>
                    <svg class="w-8 h-8 mt-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l-3 3m6 0l-3 3m-3 10l3 3m-6 0l3 3"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container mx-auto px-6 py-16 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">What will be next step?</h2>
            <p class="text-gray-600 mb-12">You are one step closer to build your perfect product</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
                <div class="bg-slate-100 p-8 rounded-lg">
                    <div class="flex items-center space-x-4 mb-4">
                        <span class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 001 1h4a1 1 0 001-1V4a1 1 0 00-1-1H3zm10 0a1 1 0 00-1 1v12a1 1 0 001 1h4a1 1 0 001-1V4a1 1 0 00-1-1h-4z" clip-rule="evenodd"></path></svg></span>
                        <span class="text-3xl font-bold text-gray-700">01</span>
                    </div>
                    <h3 class="text-xl font-bold text-indigo-600 mb-2">We'll prepare a proposal</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="bg-slate-100 p-8 rounded-lg">
                     <div class="flex items-center space-x-4 mb-4">
                        <span class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 001 1h4a1 1 0 001-1V4a1 1 0 00-1-1H3zm10 0a1 1 0 00-1 1v12a1 1 0 001 1h4a1 1 0 001-1V4a1 1 0 00-1-1h-4z" clip-rule="evenodd"></path></svg></span>
                        <span class="text-3xl font-bold text-gray-700">02</span>
                    </div>
                    <h3 class="text-xl font-bold text-indigo-600 mb-2">Together we discuss it</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="bg-slate-100 p-8 rounded-lg">
                     <div class="flex items-center space-x-4 mb-4">
                        <span class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 001 1h4a1 1 0 001-1V4a1 1 0 00-1-1H3zm10 0a1 1 0 00-1 1v12a1 1 0 001 1h4a1 1 0 001-1V4a1 1 0 00-1-1h-4z" clip-rule="evenodd"></path></svg></span>
                        <span class="text-3xl font-bold text-gray-700">03</span>
                    </div>
                    <h3 class="text-xl font-bold text-indigo-600 mb-2">Let's start building</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-16 pb-48">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Our Customers</h2>
            <p class="text-lg text-indigo-600 mb-12">Trusted by many clients and companies</p>
            <div class="flex flex-wrap justify-center items-center gap-x-12 md:gap-x-16 gap-y-8">
                <img src="https://digitaliz.net/images/pemprov.png" alt="Logo Pemprov Kalsel" class="h-16">
                <img src="https://digitaliz.net/images/hasnur-centre.png" alt="Logo Hasnur Centre" class="h-16">
                <img src="https://digitaliz.net/images/hafecs.png" alt="Logo Hafecs" class="h-16">
                <img src="https://digitaliz.net/images/hrp.png" alt="Logo HRP" class="h-16">
                <img src="https://digitaliz.net/images/polihasnur.png" alt="Logo Polihasnur" class="h-16">
            </div>
        </div>
    </div>
</div>

@endsection
