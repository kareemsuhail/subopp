<?php

use Illuminate\Database\Seeder;

class SkillSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'php', 'spical_id' => 1, 'created_at' => '2016-10-17 12:59:10', 'updated_at' => '2016-10-17 12:59:10', 'deleted_at' => null],
            ['id' => 2, 'name' => 'laravel', 'spical_id' => 1, 'created_at' => '2016-10-17 12:59:21', 'updated_at' => '2016-10-17 12:59:21', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Skill();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
