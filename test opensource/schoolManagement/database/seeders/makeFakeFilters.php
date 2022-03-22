<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Filter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class makeFakeFilters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::whereNotNull('parent_id')->get();

        foreach ($categories as $category) {
            foreach (range(1, 4) as $index) {
                DB::table('filters')->insert([
                    'category_id' => $category->id,
                    'title' => Str::random(5) . ' ' . Str::random(6)
                ]);
            }
        }

        $filters = Filter::get();
        foreach ($filters as $filter) {
            foreach (range(1, random_int(3, 6)) as $index) {
                DB::table('filter_options')->insert([
                    'filter_id' => $filter->id,
                    'title' => Str::random(3) . ' ' . Str::random(4)
                ]);
            }
        }
    }
}
