<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$9nJQpsWzVB7qXEiZbS2hje4.68/w8jO/lAVME60..OH.XdOGeAXvm', 'role_id' => 1, 'remember_token' => '', 'created_at' => '2016-10-16 09:08:23', 'updated_at' => '2016-10-16 09:08:23', 'deleted_at' => null],
            ['id' => 2, 'name' => 'ALaa Sami', 'email' => 'alaasamy1990@gmail.com', 'password' => '$2y$10$Eb36VUKsB/mSL/tlLUtiDu4lw5ZqwPR.TKkpyAomDFlifO0bCZBPy', 'role_id' => 2, 'remember_token' => null, 'created_at' => '2016-10-17 13:00:33', 'updated_at' => '2016-10-17 13:00:33', 'deleted_at' => null],
            ['id' => 3, 'name' => 'SUBOPP', 'email' => 'info@subopp.com', 'password' => '$2y$10$qhFuVdmNPiMLcsBXOhAYgemL/0nfoylWshDcgDjjlyYCjGgkduBCy', 'role_id' => 1, 'remember_token' => null, 'created_at' => '2016-10-17 22:06:41', 'updated_at' => '2016-10-17 22:06:41', 'deleted_at' => null],

        ];

        foreach ($items as $item) {
            $model = new \App\User();

            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }

            $model->save();
        }
    }
}
