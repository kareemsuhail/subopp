<?php

use Illuminate\Database\Seeder;

class TeamMemberSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'team_id' => 1, 'user_id' => 2, 'created_at' => '2016-10-17 13:24:42', 'updated_at' => '2016-10-17 13:24:42', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\TeamMember();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
