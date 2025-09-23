<x-admin-layout>
    <section class="p-10 md:p-20">
        <div class="container mx-auto p-10">
            <h1 class="text-3xl font-bold mb-6">Add New Admin</h1>

            <div class="bg-white p-8 rounded-xl shadow-md">
                <form method="POST" action="{{ route('admin.users.store') }}">
                    @csrf

                    <div class="form-control mb-4">
                        <label class="label"><span class="label-text">Name</span></label>
                        <input type="text" name="name" class="input input-bordered w-full" required>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label"><span class="label-text">Email</span></label>
                        <input type="email" name="email" class="input input-bordered w-full" required>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label"><span class="label-text">Password</span></label>
                        <input type="password" name="password" class="input input-bordered w-full" required>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label"><span class="label-text">Confirm Password</span></label>
                        <input type="password" name="password_confirmation" class="input input-bordered w-full" required>
                    </div>

                    <div class="mt-6 flex justify-end space-x-4">
                        <a href="{{ url()->previous() }}" class="btn btn-ghost">Batal</a>
                        <button type="submit" class="btn btn-primary">Save Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
