<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('Articles')->truncate();
		DB::table('Articles')->insert([
			[
				'name' => 'AAA',
				'created_at' => '2015-03-10 12:00:00',
				'updated_at'  => '2016-10-07 10:40:00',
				'email'  => 'aaa@nifty.co.jp',
				'sex' => '女',
				'address' => '東京都千代田区',
				'birthday' => '1990-01-23',
			],
			[
				'name' => 'BBB',
				'created_at' => '2016-02-10 02:15:00',
				'updated_at'  => '2016-10-03 22:30:00',
				'email'  => 'bbb@nifty.co.jp',
				'sex' => '男',
				'address' => '東京都世田谷区',
				'birthday' => '1983-05-12',
			],
		]);
    }
}
