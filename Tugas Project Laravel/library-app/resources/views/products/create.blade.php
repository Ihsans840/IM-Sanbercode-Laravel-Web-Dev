<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Product</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">

                @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block mb-1">Category</label>
                        <select name="category_id" class="w-full border rounded p-2" required>
                            <option value="">-- pilih --</option>
                            @foreach ($categories as $c)
                                <option value="{{ $c->id }}" @selected(old('category_id') == $c->id)>{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Judul</label>
                        <input name="title" class="w-full border rounded p-2" value="{{ old('title') }}" required />
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Deskripsi</label>
                        <textarea name="description" class="w-full border rounded p-2">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Stock</label>
                        <input type="number" name="stock" min="0" class="w-full border rounded p-2"
                               value="{{ old('stock', 0) }}" required />
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Price</label>
                        <input type="number" name="price" min="0" step="0.01" class="w-full border rounded p-2"
                               value="{{ old('price', 0) }}" required />
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Image (jpg/png/webp)</label>
                        <input type="file" name="image" class="w-full" />
                    </div>

                    <button class="px-4 py-2 bg-black text-white rounded">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>