<div>
    <div class="grid grid-cols-4 gap-4">
        @foreach ($kucoin as $coin)
            <div>
                <livewire:stat-coin :coin="$coin" :wire:key="$coin->id" />
            </div>
        @endforeach
    </div>
</div>
