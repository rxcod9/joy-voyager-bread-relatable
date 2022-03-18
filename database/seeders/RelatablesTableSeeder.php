<?php

namespace Joy\VoyagerBreadRelatable\Database\Seeders;

use Joy\VoyagerBreadRelatable\Models\Relatable;
use Illuminate\Database\Seeder;

class RelatablesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Relatable::query()->count() > 0) {
            return false;
        }

        $count = 100;
        Relatable::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Relatable ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Relatable Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
