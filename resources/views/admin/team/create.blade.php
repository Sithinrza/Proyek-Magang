<x-admin-layout>
    <section class="p-10 md:p-20">
        <div class="container mx-auto p-10">
            <h1 class="text-3xl font-bold mb-6">Add New Team Member</h1>

            <div class="bg-white p-8 rounded-xl shadow-md">
                <form method="POST" action="{{ route('admin.team.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control mb-4">
                        <label class="label"><span class="label-text">Name</span></label>
                        <input type="text" name="name" class="input input-bordered w-full" required>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label"><span class="label-text">Position</span></label>
                        <input type="text" name="position" class="input input-bordered w-full" required>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label"><span class="label-text">Photo</span></label>
                        <input type="file" name="photo" class="file-input file-input-bordered w-full">
                    </div>

                    <div class="mt-6 flex justify-end space-x-4">
                        <button type="submit" class="btn btn-primary">Save Member</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-admin-layout>

