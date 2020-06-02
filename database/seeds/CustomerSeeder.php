<?php

use Illuminate\Database\Seeder;
use App\customers;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <100000; $i++) {
            $CustomerData[] = [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com'
            ];
        }

        $chunks = array_chunk($CustomerData, 5000);
        
        foreach ($chunks as $chunk) {
            customers::insert($chunk);
        }
    
    }
}
