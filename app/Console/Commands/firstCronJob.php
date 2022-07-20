<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\wpMigration;

class firstCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:getWpApiGet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get wp api data after every 5 minute till all data get completed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        (new wpMigration)->get_api_data();
        (new wpMigration)->wpToBlog();
    }
}
