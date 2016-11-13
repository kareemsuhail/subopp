<?php

use Illuminate\Database\Seeder;

class BidTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'قيد الانتظار', 'created_at' => '2016-10-17 12:57:02', 'updated_at' => '2016-10-17 12:57:02', 'deleted_at' => null],
            ['id' => 2, 'name' => 'منتهية', 'created_at' => '2016-10-17 12:57:17', 'updated_at' => '2016-10-17 12:57:17', 'deleted_at' => null],
            ['id' => 3, 'name' => 'قيد العمل', 'created_at' => '2016-10-17 12:57:23', 'updated_at' => '2016-10-17 12:57:23', 'deleted_at' => null],
            ['id' => 4, 'name' => 'مستبعدة', 'created_at' => '2016-10-17 12:57:30', 'updated_at' => '2016-10-17 12:57:30', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\BidType();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
