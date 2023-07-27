<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

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




       // $users = User::all();



        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
               return Str::upper($value);
            });
        });

        $result = $nameCollection->toUpper(); // метод этот и все это обычно прописывают в appServiceProvider
        dd($result);
    }
}
