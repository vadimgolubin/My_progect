<?php

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AboutUs::class,1)->create();
    }
}
