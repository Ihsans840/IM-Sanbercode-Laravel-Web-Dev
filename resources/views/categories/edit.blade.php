<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">

                @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('categories.update', $category) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block mb-1">Nama</label>
                        <input type="text"
                               name="name"
                               class="w-full border rounded p-2"
                               value="{{ old('name', $category->name) }}"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Deskripsi</label>
                        <textarea name="description"
                                  class="w-full border rounded p-2">{{ old('description', $category->description) }}</textarea>
                    </div>

                    <button class="px-4 py-2 bg-black text-white rounded">
                        Update
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>