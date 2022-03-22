<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GirlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 2; $i <= 60; $i++) {
            DB::table('girls')->insert([
                'name' => '名前テスト' . $i,
                'name_r' => 'name_test' . $i,
                'foot_size' => '23',
                'flying_yard' => 100 + $i,
                'height' => 140 + $i,
                'best_score' => 200 + $i,
                'area' => '近畿',
                'club' => '近畿',
                'dr' => 'PING',
                'ir' => 'PING',
                'pt' => 'PING',
                'brand1' => 'ブランドテスト1',
                'brand2' => 'ブランドテスト2',
                'brand3' => 'ブランドテスト3',
                'shoes1' => 'シューズテスト1',
                'shoes2' => 'シューズテスト2',
                'shoes3' => 'シューズテスト3',
                'kyaba_name' => 'キャバクラ店テスト' . $i,
                'pref' => '大阪府',
                'fav_count' => $i,
            ]);
        }
    }
}
