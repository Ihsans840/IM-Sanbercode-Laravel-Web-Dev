<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Products</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-4">
                <a href="{{ route('products.create') }}" class="px-4 py-2 bg-black text-white rounded">
                    + Tambah Product
                </a>
            </div>

            <div class="bg-white shadow rounded overflow-x-auto">
                <table class="w-full border">
                    <thead>
                        <tr class="border-b">
                            <th class="p-2 text-left">Gambar</th>
                            <th class="p-2 text-left">Judul</th>
                            <th class="p-2 text-left">Category</th>
                            <th class="p-2 text-left">Stock</th>
                            <th class="p-2 text-left">Price</th>
                            <th class="p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $p)
                            <tr class="border-b">
                                <td class="p-2">
                                    @if ($p->image)
                                        <img src="{{ asset('storage/' . $p->image) }}" class="h-12 w-12 object-cover rounded" />
                                    @else
                                        <span class="text-gray-500">-</span>
                                    @endif
                                </td>
                                <td class="p-2">
                                    <a class="underline" href="{{ route('products.show', $p) }}">
                                        {{ $p->title }}
                                    </a>
                                </td>
                                <td class="p-2">{{ $p->category?->name }}</td>
                                <td class="p-2">{{ $p->stock }}</td>
                                <td class="p-2">{{ number_format($p->price, 2) }}</td>
                                <td class="p-2 text-center">
                                    <a class="underline mr-2" href="{{ route('products.edit', $p) }}">Edit</a>

                                    <form class="inline" method="POST" action="{{ route('products.destroy', $p) }}"
                                          onsubmit="return confirm('Yakin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="underline text-red-600">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="6" class="p-4 text-center text-gray-500">Belum ada product</td></tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="p-4">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>