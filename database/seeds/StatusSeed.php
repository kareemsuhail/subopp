<?php

use Illuminate\Database\Seeder;

class StatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'فعال', 'created_at' => '2016-10-17 00:53:15', 'updated_at' => '2016-10-17 00:53:15', 'deleted_at' => null],
            ['id' => 2, 'name' => 'غير فعال', 'created_at' => '2016-10-17 12:58:42', 'updated_at' => '2016-10-17 12:58:42', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Status();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
