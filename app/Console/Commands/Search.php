<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PatientMealPlanning;

class Search extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:search';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        DB::enableQueryLog();
        $dateS = new Carbon('2022-08-11');
        $dateE = new Carbon('2023-08-24');
        $result = PatientMealPlanning::whereBetween('created_at', [$dateS->format('Y-m-d'), $dateE->format('Y-m-d')])->get();
        var_dump($result, DB::getQueryLog());
    }
}
