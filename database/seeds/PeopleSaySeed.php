<?php

use Illuminate\Database\Seeder;

class PeopleSaySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'alaa', 'jobtitle' => 'alaa', 'say' => 'alaa', 'image' => null, 'created_at' => '2016-10-17 12:54:51', 'updated_at' => '2016-10-17 12:54:51', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\PeopleSay();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
