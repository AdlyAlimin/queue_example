<?php

namespace App\Http\Livewire;

use App\Models\Market\KuCoin;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class StatCoin extends Component
{
    public $coin;

    public function render()
    {
        $data = KuCoin::find($this->coin->id);

        return view('livewire.stat-coin', [
            'data' => $data
        ]);
    }
}
