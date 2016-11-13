<?php

use Illuminate\Database\Seeder;

class CitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Gaza', 'country_id' => 1, 'created_at' => '2016-10-16 19:59:05', 'updated_at' => '2016-10-16 19:59:05', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\City();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
