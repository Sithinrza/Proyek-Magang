<x-admin-layout>
    <x-slot:title>
        Manajemen Tim
    </x-slot:title>
    <section class="p-10 md:p-20">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Manajemen Anggota Tim</h1>
            <a href="{{ route('admin.team.create') }}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Tambah Anggota
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-x-auto">
            <table class="table table-zebra w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th class="text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teams as $team)
                        <tr class="hover">
                            <td>{{ $team->id }}</td>
                            <td>
                                <div class="avatar">
                                    <div class="w-12 h-12 rounded-full">
                                        <img src="{{ $team->getImage() }}" alt="{{ $team->name }}" />
                                    </div>
                                </div>
                            </td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->position }}</td>
                            <td class="text-right">
                                <div class="flex justify-end space-x-2">
                                    <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-sm btn-outline btn-warning">Edit</a>
                                    <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline btn-error">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center p-4">Belum ada data anggota tim.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

</x-admin-layout>
