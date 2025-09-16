@extends('layouts.app')

@section('content')
<div class="container mx-auto p-10">
    <h1 class="text-3xl font-bold mb-6">Edit Team Member</h1>

    <div class="bg-white p-8 rounded-xl shadow-md">
        <form method="POST" action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-control mb-4">
                <label class="label"><span class="label-text">Name</span></label>
                <input type="text" name="name" value="{{ $team->name }}" class="input input-bordered w-full" required>
            </div>

            <div class="form-control mb-4">
                <label class="label"><span class="label-text">Position</span></label>
                <input type="text" name="position" value="{{ $team->position }}" class="input input-bordered w-full" required>
            </div>

            <div class="form-control mb-4">
                <label class="label"><span class="label-text">New Photo (Optional)</span></label>
                <div class="my-2">
                    <img src="{{ $team->getImage() }}" alt="{{ $team->name }}" class="w-24 h-24 object-cover">
                </div>
                <input type="file" name="photo" class="file-input file-input-bordered w-full">
            </div>

            <div class="mt-6 flex justify-end space-x-4">
                <button type="submit" class="btn btn-primary">Update Member</button>
            </div>
        </form>
    </div>
</div>
@endsection
