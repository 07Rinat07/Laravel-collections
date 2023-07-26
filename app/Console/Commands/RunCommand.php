<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RunCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run';

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
      //  $numberCollection = collect([1,2,3,4,5,6,7,8,9,10]);
//        $anotherNumberCollection = collect([10,20,30,40,50]);
//
//        $assocWorkerCollection = collect([
//            [
//                'name' => 'Boris',
//                'age' => 20
//            ],
//            [
//                'name' => 'Ivan',
//                'age' => 25
//            ],
//            [
//                'name' => 'Elena',
//                'age' => 18
//            ]
//        ]);
//
//        $nameCollection = collect(['Ivan', 'Boris', 'Kate']);
//        $anotherNameCollection = collect(['Ann', 'John']);

       // $users = User::all();
    }
}
