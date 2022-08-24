<?php

namespace App\Console\Commands\Market;

use App\Jobs\KuCoin\AVAX_USDT;
use App\Jobs\KuCoin\BNB_USDT;
use App\Jobs\KuCoin\BTC_USDT;
use App\Jobs\KuCoin\SOL_USDT;
use Illuminate\Console\Command;

class KuCoin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:kucoin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        for ($i = 1; $i <= 6; $i++) {
            BTC_USDT::dispatch();
            sleep(5);
            SOL_USDT::dispatch();
            sleep(5);
            AVAX_USDT::dispatch();
            sleep(5);
            BNB_USDT::dispatch();
            sleep(10);
        }
    }
}
