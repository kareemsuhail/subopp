<?php

use Illuminate\Database\Seeder;

class LanguageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Arabic', 'created_at' => '2016-10-16 12:08:57', 'updated_at' => '2016-10-16 12:08:57', 'deleted_at' => null],
            ['id' => 2, 'name' => 'English', 'created_at' => '2016-10-16 12:09:10', 'updated_at' => '2016-10-16 12:09:10', 'deleted_at' => null],
            ['id' => 3, 'name' => 'France', 'created_at' => '2016-10-17 12:54:17', 'updated_at' => '2016-10-17 12:54:17', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Language();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
