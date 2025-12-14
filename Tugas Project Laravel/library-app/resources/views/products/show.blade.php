<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detail Product</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">

                <div class="mb-4">
                    <div class="text-gray-600">Category</div>
                    <div class="font-semibold">{{ $product->category?->name }}</div>
                </div>

                <div class="mb-4">
                    <div class="text-gray-600">Judul</div>
                    <div class="font-semibold">{{ $product->title }}</div>
                </div>

                <div class="mb-4">
                    <div class="text-gray-600">Deskripsi</div>
                    <div>{{ $product->description }}</div>
                </div>

                <div class="mb-4">
                    <div class="text-gray-600">Stock</div>
                    <div>{{ $product->stock }}</div>
                </div>

                <div class="mb-4">
                    <div class="text-gray-600">Price</div>
                    <div>{{ number_format($product->price, 2) }}</div>
                </div>

                <div class="mb-4">
                    <div class="text-gray-600">Gambar</div>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="max-w-xs rounded" />
                    @else
                        <div class="text-gray-500">Tidak ada</div>
                    @endif
                </div>

                <a href="{{ route('products.index') }}" class="underline">← Kembali</a>

            </div>
        </div>
    </div>
</x-app-layout>