<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{ route('rainfall') }}" method="post" class="mb-4 flex flex-row justify-left">
            @csrf
            <div class="mb-4 mx-4">
                <label for="rainfall" class="sr-only">Hoeveelheid neerslag</label>
                <input type="text" name="rainfall" id="rainfall"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                 @error('rainfall')
                           border-red-500
@enderror"
                       placeholder="Voeg neerslag toe"
                />
                @error('rainfall')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4 mx-4">
                <label for="date" class="sr-only">Datum</label>
                <input type="date" name="date" id="date"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg
                              @error('date')
                           border-red-500
@enderror"
                >
                @error('date')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mx-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Post
                </button>
            </div>
        </form>
    </div>
</div>
