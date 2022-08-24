<?php

namespace App\Http\Livewire\Market;

use Livewire\Component;
use App\Models\Market\KuCoin as KuCoinModel;

class KuCoin extends Component
{
    public $data;

    public function mount()
    {
        $this->data = KuCoinModel::all();
    }

    public function render()
    {
        // $kucoin = KuCoinModel::all();

        return view('livewire.market.ku-coin', [
            'kucoin' => $this->data
        ]);
    }
}
