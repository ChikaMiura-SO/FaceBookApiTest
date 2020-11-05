<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('products')->truncate();
        DB::table('products')->insert([
            'id' => '1',
            'name' => '星形のキャンドル',
            'detail' => '動画をもとに作ったキャンドル。燃やすとオレンジっぽくなります',
            'fee' => '1',
            'imgpath' => '/test_images/IMG_8111.JPEG',
        ]);
        DB::table('products')->insert([
            'id' => '2',
            'name' => '庭で作った薫製',
            'detail' => 'ニジマスとベーコンの薫製。田舎の母の温かみが詰まってます',
            'fee' => '1',
            'imgpath' => '/test_images/IMG_2533.JPEG',
        ]);
        DB::table('products')->insert([
            'id' => '3',
            'name' => '木材のウサギ人形',
            'detail' => 'DIY好きな父とのコラボ作品。手乗りサイズの可愛いウサギです',
            'fee' => '1',
            'imgpath' => '/test_images/IMG_0050.JPEG',
        ]);
        DB::table('products')->insert([
            'id' => '4',
            'name' => '仙台駅のステンドグラス',
            'detail' => '市民の集合場所のステンドグラス。合言葉は「○○時にステグラ前で」',
            'fee' => '1',
            'imgpath' => '/test_images/IMG_0023.JPEG',
        ]);
        DB::table('products')->insert([
            'id' => '5',
            'name' => 'ずんだシェイク',
            'detail' => '仙台駅で買ったずんだシェイク。彼女とずんだシェイクなう」にも使えます',
            'fee' => '1',
            'imgpath' => '/test_images/IMG_0024.JPEG',
        ]);
    }
}
