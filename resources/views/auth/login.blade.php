<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100"> 
    <section>
        <div class=" pt-20 flex justify-center items-center min-h-screen bg-gray-100">
            <div class="w-full max-w-md p-8 space-y-6 bg-white border rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-center text-gray-900">Login</h2> 
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md mb-4" role="alert">
                        <span>{{ $errors->first() }}</span>
                    </div>
                @endif
                <form class="space-y-6" method="POST" action="{{ route('login.store') }}">
                    @csrf 
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="name@example.com" required>
                    </div>
                    <div x-data="{ show: false }">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label> 
                        <div class="relative">
                            <input :type="show ? 'text' : 'password'" 
                                id="password" 
                                name="password" 
                                placeholder="••••••••" 
                                required 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <button type="button" x-on:click="show = !show" class="focus:outline-none">
                                    
                                    <svg x-show="show" style="display: none;" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a9.97 9.97 0 01-1.563 3.029m0 0l-2.122 2.122"></path></svg>
                                    
                                    <svg x-show="!show" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z"></path></svg>
                                
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
                </form>
            </div> 
        </div>
    </section>

</body>
</html>