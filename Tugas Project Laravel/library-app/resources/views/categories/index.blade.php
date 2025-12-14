<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-4">
                <a href="{{ route('categories.create') }}"
                   class="px-4 py-2 bg-black text-white rounded">
                    + Tambah Category
                </a>
            </div>

            <div class="bg-white shadow rounded">
                <table class="w-full border">
                    <thead>
                        <tr class="border-b">
                            <th class="p-2 text-left">Nama</th>
                            <th class="p-2 text-left">Deskripsi</th>
                            <th class="p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr class="border-b">
                                <td class="p-2">{{ $category->name }}</td>
                                <td class="p-2">{{ $category->description }}</td>
                                <td class="p-2 text-center">
                                    <a href="{{ route('categories.edit', $category) }}"
                                       class="underline mr-2">Edit</a>

                                    <form method="POST"
                                          action="{{ route('categories.destroy', $category) }}"
                                          class="inline"
                                          onsubmit="return confirm('Yakin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="underline text-red-600">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="p-4 text-center text-gray-500">
                                    Belum ada category
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>