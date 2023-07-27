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
        $numberCollection = collect([1, 2, 3, 4, 5, 6, 7]);
        $numberCollection2 = collect([5, 6, 7, 8, 9, 10]);

        $anotherNumberCollection = collect([10, 20, 30, 324, 50, 45]);

        $collection = collect([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ]);

        $assocWorkerCollection = collect([
            [
                'name' => 'Boris',
                'age' => 20
            ],
            [
                'name' => 'Ivan',
                'age' => 25
            ],
            [
                'name' => 'Elena',
                'age' => 18
            ]
        ]);
        $assocWorkerCollection1 = collect([
            [
                'Boris',
                20
            ],
            [
                'Ivan',
                25
            ],
            [
                'Elena',
                18
            ],
            [
                'Ivan',
                19
            ]
        ]);

        $nameCollection = collect(['Ivan', 'Boris', 'Kate', 'Kate', 'Kate']);

        //$nameCollection2 = collect([20, 21, 18]);

        $anotherNameCollection = collect(['Ann' => 'Boss', 'John' => 'Developer']);
        $anotherNameCollection2 = collect(['Ann' => 'Designer', 'John' => 'Developer']);

        $users = User::all();
        // 19.76 потратил памяти в мегабайт
        // 21.9 потратил памяти в мегабайт после доп операций
        // 22.14 после этих же операций для преобразования в лези
        // 22.14 после этих же операций после лези

        $users->lazy()
        ->filter(function ($value) {
            return $value->name = strtoupper($value->name);
        })->filter
            (function ($value) {
            return $value->age = $value->age + 15;
        });



        dd(memory_get_usage() / 1024 / 1024);


        $result = $anotherNameCollection->lazy(); // преобразует коллекцию в lazy
        dd($result);
    }
}
