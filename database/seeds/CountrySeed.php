<?php

use Illuminate\Database\Seeder;

class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Palestine', 'created_at' => '2016-10-16 19:58:39', 'updated_at' => '2016-10-16 19:58:39', 'deleted_at' => null],
            ['id' => 2, 'name' => 'Eygpt', 'created_at' => '2016-10-16 19:58:50', 'updated_at' => '2016-10-16 19:58:50', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Country();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
