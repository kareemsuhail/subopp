<?php

use Illuminate\Database\Seeder;

class JobStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'منتهية', 'created_at' => '2016-10-17 12:58:07', 'updated_at' => '2016-10-17 12:58:07', 'deleted_at' => null],
            ['id' => 2, 'name' => 'مرحلة تلقي العروض', 'created_at' => '2016-10-17 12:58:15', 'updated_at' => '2016-10-17 12:58:15', 'deleted_at' => null],
            ['id' => 3, 'name' => 'قيد العمل ', 'created_at' => '2016-10-17 12:58:22', 'updated_at' => '2016-10-17 12:58:22', 'deleted_at' => null],
            ['id' => 4, 'name' => 'مقفلة', 'created_at' => '2016-10-17 12:58:33', 'updated_at' => '2016-10-17 12:58:33', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\JobStatus();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
