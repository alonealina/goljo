<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 4; $i <= 60; $i++) {
            DB::table('news')->insert([
                'title' => 'タイトルテスト' . $i,
                'content' => '内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト
                内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト内容テスト' . $i,
                'genre' => '1',
                'notice_date' => '2022-03-01',
                'release_flg' => '1',
            ]);
        }
    }
}
