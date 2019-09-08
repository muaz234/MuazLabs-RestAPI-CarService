<?php

use Illuminate\Database\Seeder;

class CarServiceCheckListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = factory(App\CarServiceCheckList::class, 50)->create();
        return $data;
    }
}
