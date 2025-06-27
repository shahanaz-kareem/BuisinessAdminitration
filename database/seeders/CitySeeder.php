<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = DB::table('states')->pluck('id', 'name'); // ['State Name' => id]

        $districts = [
            ['state' => 'Andhra Pradesh', 'name' => 'Visakhapatnam'],
            ['state' => 'Andhra Pradesh', 'name' => 'Vijayawada'],
            ['state' => 'Andhra Pradesh', 'name' => 'Guntur'],
            ['state' => 'Tamil Nadu', 'name' => 'Chennai'],
            ['state' => 'Tamil Nadu', 'name' => 'Coimbatore'],
            ['state' => 'Tamil Nadu', 'name' => 'Madurai'],
            ['state' => 'Kerala', 'name' => 'Kochi'],
            ['state' => 'Kerala', 'name' => 'Thiruvananthapuram'],
            ['state' => 'Kerala', 'name' => 'Kozhikode'],
            ['state' => 'Maharashtra', 'name' => 'Mumbai'],
            ['state' => 'Maharashtra', 'name' => 'Pune'],
            ['state' => 'Maharashtra', 'name' => 'Nagpur'],
            ['state' => 'Uttar Pradesh', 'name' => 'Lucknow'],
            ['state' => 'Uttar Pradesh', 'name' => 'Kanpur'],
            ['state' => 'Uttar Pradesh', 'name' => 'Varanasi'],
            ['state' => 'Karnataka', 'name' => 'Bengaluru'],
            ['state' => 'Karnataka', 'name' => 'Mysuru'],
            ['state' => 'Karnataka', 'name' => 'Mangalore'],
            ['state' => 'Rajasthan', 'name' => 'Jaipur'],
            ['state' => 'Rajasthan', 'name' => 'Udaipur'],
            ['state' => 'Rajasthan', 'name' => 'Jodhpur'],
            ['state' => 'West Bengal', 'name' => 'Kolkata'],
            ['state' => 'West Bengal', 'name' => 'Howrah'],
            ['state' => 'West Bengal', 'name' => 'Darjeeling'],
            ['state' => 'Punjab', 'name' => 'Amritsar'],
            ['state' => 'Punjab', 'name' => 'Ludhiana'],
            ['state' => 'Punjab', 'name' => 'Jalandhar'],
            ['state' => 'Haryana', 'name' => 'Gurugram'],
            ['state' => 'Haryana', 'name' => 'Faridabad'],
            ['state' => 'Haryana', 'name' => 'Ambala'],
            ['state' => 'Delhi', 'name' => 'New Delhi'],
            ['state' => 'Jammu and Kashmir', 'name' => 'Srinagar'],
            ['state' => 'Ladakh', 'name' => 'Leh'],
            ['state' => 'Gujarat', 'name' => 'Ahmedabad'],
            ['state' => 'Gujarat', 'name' => 'Surat'],
            ['state' => 'Gujarat', 'name' => 'Vadodara'],
            ['state' => 'Bihar', 'name' => 'Patna'],
            ['state' => 'Bihar', 'name' => 'Gaya'],
            ['state' => 'Odisha', 'name' => 'Bhubaneswar'],
            ['state' => 'Odisha', 'name' => 'Cuttack'],
            ['state' => 'Assam', 'name' => 'Guwahati'],
            ['state' => 'Assam', 'name' => 'Dibrugarh'],
            ['state' => 'Jharkhand', 'name' => 'Ranchi'],
            ['state' => 'Jharkhand', 'name' => 'Jamshedpur'],
            ['state' => 'Chhattisgarh', 'name' => 'Raipur'],
            ['state' => 'Chhattisgarh', 'name' => 'Bilaspur'],
            ['state' => 'Goa', 'name' => 'Panaji'],
        ];

        foreach ($districts as $district) {
            $stateId = $states[$district['state']] ?? null;
            if ($stateId) {
                DB::table('cities')->insert([
                    'state_id' => $stateId,
                    'name' => $district['name'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
