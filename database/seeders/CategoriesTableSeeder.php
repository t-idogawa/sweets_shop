<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            'スイーツ', 'アイテム', 'ギフト'
        ];

        $sweet_categories = [
            'チーズケーキ', 'マフィン', 'パウンドケーキ', 'その他'
        ];

        $item_categories = [
            '調理器具', '焼き型', 'ラッピング', 'その他'
        ];

        $gift_categories = [
            'スイーツセット', 'コーヒーセット', '紅茶セット'
        ];

        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == 'スイーツ') {
                foreach ($sweet_categories as $sweet_category) {
                    Category::create([
                        'name' => $sweet_category,
                        'description' => $sweet_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'アイテム') {
                foreach ($item_categories as $item_category) {
                    Category::create([
                        'name' => $item_category,
                        'description' => $item_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'ギフト') {
                foreach ($gift_categories as $gift_category) {
                    Category::create([
                        'name' => $gift_category,
                        'description' => $gift_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
        }
    }
}
