<?php

use Illuminate\Database\Seeder;

class RecruitSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'job_id' => 1, 'user_id' => 2, 'end_date' => '', 'created_at' => '2016-10-17 14:20:45', 'updated_at' => '2016-10-17 14:20:45', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Recruit();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
