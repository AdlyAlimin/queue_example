<div>
    <div wire:poll.10000ms class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg shadow-lg border border border-gray-500 hover:outline outline-gray-200 py-4 px-4">
        <h1 class="font-bold leading-relaxed underline antialiased mb-2">{{ $data->symbol }}</h1>
        <div class="flex justify-evenly">
            <div class="flex justify-start">
                <div class="font-bold antialiased">Buy -</div>
                <div class="italic antialiased pl-2">{{ $data->buy }}</div>
            </div>
            <div class="flex justify-start">
                <div class="font-bold antialiased">Sell -</div>
                <div class="italic antialiased pl-2">{{ $data->sell }}</div>
            </div>
        </div>
        <small>{{ $data->updated_at->diffForHumans() }}</small>
    </div>
</div>
