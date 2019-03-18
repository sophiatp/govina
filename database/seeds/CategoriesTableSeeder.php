<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Cổng từ an ninh',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Tem từ an ninh',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Thiết bị gỡ tem từ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Tủ sắt',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Kệ kho hàng',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Thiết bị siêu thị',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
