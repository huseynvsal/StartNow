<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class emr extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vusal:emr';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Vusal emr etdi';

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
     * @return mixed
     */
    public function handle()
    {
        $tarix = date('Y-m-d');
        $tarix = explode('-',$tarix);
        $ay = $tarix[1];
        if($ay == 1)
            $ay = 12;
        else $ay = $ay-1;
        $tarix = $tarix[0].'-'.$ay.'-'.$tarix[2];
       DB::select("SELECT ");
        DB::table('messages')->where('id',1)->update([
            'seen'=>1
        ]);
    }
}
