<?php

use Illuminate\Database\Seeder;

class SliderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'alaa', 'short_info' => 'aaaa', 'Description' => 'aaaa', 'image' => '1476624722-تصميم-موقع-شخصي (1).png', 'video_url' => '', 'created_at' => '2016-10-16 13:32:02', 'updated_at' => '2016-10-16 13:32:02', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Slider();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
