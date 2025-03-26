<?php

namespace App\Console\Commands;

use App\Models\Product;
/* use App\Notifications\LowStockAlert; */
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;


class LowStockAlert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:low-stock-alert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate alerts for low stock levels';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = Product::where('quantity', '<=', 'low_stock_threshold')->get();
        foreach ($products as $product) {
            Notification::send($this->getAdmin(), new LowStockAlert($product));
        }
    }
    protected function getAdmin()
    {
        // Return the administrator user instance
        // For example:
        return \App\Models\User::where('email', 'admin@example.com')->first();
    }
}
