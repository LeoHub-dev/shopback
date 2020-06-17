<?php

use App\Models\Product;
use App\Models\Status;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(Product::class, 20)->create();
        factory(Status::class)->create(array(
            'name' => 'pending'
        ));
        factory(Status::class)->create(array(
            'name' => 'completed'
        ));
        Artisan::call('passport:install');
    }
}
