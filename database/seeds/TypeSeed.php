<?php

use Illuminate\Database\Seeder;

class TypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'شخص', 'created_at' => '2016-10-17 12:45:03', 'updated_at' => '2016-10-17 12:45:03', 'deleted_at' => null],
            ['id' => 2, 'name' => 'فريق', 'created_at' => '2016-10-17 12:45:09', 'updated_at' => '2016-10-17 12:45:09', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Type();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
