<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '商品のお届けについて'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'content' => '商品の交換について'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'content' => '商品トラブル'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'content' => 'ショップへのお問いわせ'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'content' => 'その他'
        ];
        DB::table('categories')->insert($param);

        Contact::factory()->count(35)->create();
    }
}
