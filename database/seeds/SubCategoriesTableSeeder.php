<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            'id' => 1,
            'category_id' => 1,
            'name' => 'Cổng từ an ninh shop thời trang',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 2,
            'category_id' => 1,
            'name' => 'Cổng từ an ninh siêu thị',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 3,
            'category_id' => 1,
            'name' => 'Cổng từ thư viện',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 4,
            'category_id' => 2,
            'name' => 'Tem từ cứng',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 5,
            'category_id' => 2,
            'name' => 'Tem từ mềm',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 6,
            'category_id' => 3,
            'name' => 'Bộ gỡ tem từ cứng',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 7,
            'category_id' => 3,
            'name' => 'Bộ khử tem từ mềm',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 8,
            'category_id' => 4,
            'name' => 'Tủ sắt locker',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 9,
            'category_id' => 4,
            'name' => 'Tủ sắt văn phòng',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 10,
            'category_id' => 4,
            'name' => 'Tủ sắt giày dép',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 11,
            'category_id' => 4,
            'name' => 'Tủ sắt đựng đồ công nhân, nhân viên',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 12,
            'category_id' => 5,
            'name' => 'Kệ trung tải',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 13,
            'category_id' => 5,
            'name' => 'Kệ kho hàng V lỗ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 14,
            'category_id' => 5,
            'name' => 'Kệ lưu trữ tài liệu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 15,
            'category_id' => 6,
            'name' => 'Móc treo đồ siêu thị',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 16,
            'category_id' => 6,
            'name' => 'Xe đẩy siêu thị',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 17,
            'category_id' => 6,
            'name' => 'Ngăn kéo đựng tiền siêu thị',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 18,
            'category_id' => 6,
            'name' => 'Giỏ hàng xách tay',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 19,
            'category_id' => 6,
            'name' => 'Giấy in hóa đơn',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);





    }
}
