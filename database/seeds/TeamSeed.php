<?php

use Illuminate\Database\Seeder;

class TeamSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'SUBOPP', 'logo' => '1476709204-img2.png', 'description' => 'SUBOPP', 'spical_id' => 1, 'user_id' => 1, 'created_at' => '2016-10-17 13:00:04', 'updated_at' => '2016-10-17 13:00:04', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Team();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
