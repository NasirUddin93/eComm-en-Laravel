<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'OPPo Mobile',
                'price'=>'25000',
                'category'=>'mobile',
                'description'=>'A Smartphone with 4GB ram and much more features',
                'gallery'=>'https://www.pexels.com/photo/close-up-photo-of-mobile-phone-1786433/'
            ],            
            [
                'name'=>'Panasonic tv',
                'price'=>'250000',
                'category'=>'tv',
                'description'=>'A Smartphone with 4GB ram and much more features',
                'gallery'=>'https://www.pexels.com/photo/close-up-photo-of-mobile-phone-1786433/'
            ],
            [
                'name'=>'Soni TV',
                'price'=>'25000',
                'category'=>'mobile',
                'description'=>'A Smartphone with 4GB ram and much more features',
                'gallery'=>'https://www.pexels.com/photo/close-up-photo-of-mobile-phone-1786433/'

            ],            
            [
                'name'=>'LG Mobile',
                'price'=>'25000',
                'category'=>'mobile',
                'description'=>'A Smartphone with 4GB ram and much more features',
                'gallery'=>'https://www.pexels.com/photo/close-up-photo-of-mobile-phone-1786433/'
            ],
            [
                'name'=>'LG Fridge',
                'price'=>'50000',
                'category'=>'mobile',
                'description'=>'A Smartphone with 4GB ram and much more features',
                'gallery'=>'https://www.bestelectronicsltd.com/wp-content/uploads/2017/06/5WRS22FDBF-Water-Dispenser.jpg'
            ],            
            [
                'name'=>'Iphone Mobile',
                'price'=>'350000',
                'category'=>'mobile',
                'description'=>'A Smartphone with 4GB ram and much more features',
                'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/05/iphone-12-pro-max-family-hero-all-600x600.jpg'
            ],



        ]);
    }
}
