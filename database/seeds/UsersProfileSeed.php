<?php

use Illuminate\Database\Seeder;

class UsersProfileSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'user_id' => 2, 'jobtitle' => 'alaa', 'description' => 'll', 'image' => '1476715104-img2.png', 'birthday' => '18-10-2016', 'created_at' => '2016-10-17 14:38:24', 'updated_at' => '2016-10-17 14:38:24', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\UsersProfile();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
