<?php

namespace App\Jobs\KuCoin;

use App\Models\Market\KuCoin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BTC_USDT implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of seconds after which the job's unique lock will be released.
     *
     * @var int
     */
    public $uniqueFor = 5;

    /**
     * The unique ID of the job.
     *
     * @return string
     */
    public function uniqueId()
    {
        return 'KUCOIN-BTC-USDT';
    }

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $btc_usdt = Http::get('https://api.kucoin.com/api/v1/market/stats?symbol=BTC-USDT');

        $response = json_decode($btc_usdt);

        KuCoin::updateOrCreate(
            [
                'symbol' => $response->data->symbol
            ],
            [
                'time' => $response->data->time,
                'buy' => $response->data->buy,
                'sell' => $response->data->sell,
                'change_rate' => $response->data->changeRate,
                'change_price' => $response->data->changePrice,
                'high' => $response->data->high,
                'low' => $response->data->low
            ]
        );
    }
}
