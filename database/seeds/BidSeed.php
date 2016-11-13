<?php

use Illuminate\Database\Seeder;

class BidSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'job_id' => 1, 'price' => 20, 'length' => '2', 'type_id' => 1, 'user_id' => 2, 'team_id' => null, 'status_id' => 1, 'bid_type_id' => null, 'created_at' => '2016-10-17 14:14:06', 'updated_at' => '2016-10-17 14:14:06', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\Bid();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
