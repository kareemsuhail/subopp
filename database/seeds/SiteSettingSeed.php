<?php

use Illuminate\Database\Seeder;

class SiteSettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'SUBOPP', 'language_id' => 1, 'meta_tag' => 'subopp', 'url' => 'SUb', 'created_at' => '2016-10-16 12:09:47', 'updated_at' => '2016-10-16 12:09:47', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\SiteSetting();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
