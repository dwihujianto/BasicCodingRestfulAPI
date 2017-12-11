<?php

use Illuminate\Database\Seeder;

class UserReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_reviews')->insert([
        	[ 'order_id' => 2123,'product_id' => 2378,'user_id' => 12,'rating' => 4.0,'review' => 'Bagus sekali'],
        	[ 'order_id' => 3127,'product_id' => 1178,'user_id' => 9,'rating' => 2.0,'review' => 'Sangat memuaskan'],
        	[ 'order_id' => 9183,'product_id' => 978,'user_id' => 7,'rating' => 5.0,'review' => 'Barangnya asli lhoh...'],
        ]);
    }
}
