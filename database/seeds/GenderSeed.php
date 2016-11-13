<?php

use Illuminate\Database\Seeder;

class GenderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'ذكر', 'created_at' => '2016-10-17 12:57:40', 'updated_at' => '2016-10-17 12:57:40', 'deleted_at' => null],
            ['id' => 2, 'name' => 'أنثى', 'created_at' => '2016-10-17 12:57:46', 'updated_at' => '2016-10-17 12:57:46', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Gender();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
