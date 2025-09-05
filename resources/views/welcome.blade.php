<!doctype html>
<html data-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  <body>
            <button
        class="inline-block cursor-pointer rounded-md bg-violet-800 px-4 py-3 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900">
        Button
        </button>

        <div class="p-6 space-y-4">
        <h1 class="text-2xl font-bold">Coba DaisyUI</h1>

        <!-- Button -->
        <button class="btn btn-primary">Button Primary</button>
        <button class="btn btn-secondary">Button Secondary</button>

        <!-- Card -->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Example" /></figure>
            <div class="card-body">
            <h2 class="card-title">Card Title</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
            </div>
            </div>
        </div>

        <!-- Alert -->
        <div class="alert alert-success">
            <span>Data berhasil disimpan!</span>
        </div>
        </div>

  </body>
</html>
