<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrator (can create other users)', 'created_at' => '2016-10-16 09:08:22', 'updated_at' => '2016-10-16 09:08:22', 'deleted_at' => null],
            ['id' => 2, 'title' => 'Simple user', 'created_at' => '2016-10-16 09:08:22', 'updated_at' => '2016-10-16 09:08:22', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Role();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
