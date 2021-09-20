<div>
    <h2 class="text-xl font-semibold mt-4 px-4">Todos to do</h2>
    <div class="flex flex-col px-4 py-4 space-y-4">
        @foreach ($todos as $todo)
            <div class="flex justify-between">
                <div>
                    <div class="cursor-pointer">
                        {{ $todo->item }}
                    </div>
                </div>

                <div>
                    <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-600 transition">
                        Complete
                    </button>

                    <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 transition">
                        Delete
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
