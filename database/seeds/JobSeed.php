<?php

use Illuminate\Database\Seeder;

class JobSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'تصميم شعار ', 'user_id' => 2, 'price' => 20, 'length' => 10, 'description' => 'تصميم شعار لشركة', 'specialty' => 'it,multemidea', 'skills' => 'photoshop,illestrator', 'file' => null, 'end_date' => '', 'created_at' => '2016-10-17 13:38:30', 'updated_at' => '2016-10-17 13:38:30', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Job();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
