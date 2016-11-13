<?php

use Illuminate\Database\Seeder;

class SpicalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'It', 'created_at' => '2016-10-17 12:59:00', 'updated_at' => '2016-10-17 12:59:00', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Spical();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
