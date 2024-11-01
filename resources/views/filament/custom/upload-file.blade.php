    <div>
        <x-filament::breadcrumbs :breadcrumbs="[
            '/admin/users' => 'Users',
            '' => 'List',
        ]" />
        <div class="flex justify-between mt-1">
            <div class="font-bold text-3xl">Users</div>
            <div>
                {{ $data }}
            </div>
        </div>
        <div>
            <form action="{{ route('upload.save') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-sm flex mt-2">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fileInput">
                        Pilih File CSV
                    </label>
                    <input type="file" name="file" id="fileInput" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('file')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between mt-3">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
