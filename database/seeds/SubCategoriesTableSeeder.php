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
            'slug' => str_slug('Cổng từ an ninh shop thời trang') . '-' . 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 2,
            'category_id' => 1,
            'name' => 'Cổng từ an ninh siêu thị',
            'slug' => str_slug('Cổng từ an ninh siêu thị') . '-' . 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 3,
            'category_id' => 1,
            'name' => 'Cổng từ thư viện',
            'slug' => str_slug('Cổng từ thư viện') . '-' . 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 4,
            'category_id' => 2,
            'name' => 'Tem từ cứng',
            'slug' => str_slug('Tem từ cứng') . '-' . 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 5,
            'category_id' => 2,
            'name' => 'Tem từ mềm',
            'slug' => str_slug('Tem từ mềm') . '-' . 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 6,
            'category_id' => 3,
            'name' => 'Bộ gỡ tem từ cứng',
            'slug' => str_slug('Bộ gỡ tem từ cứng') . '-' . 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 7,
            'category_id' => 3,
            'name' => 'Bộ khử tem từ mềm',
            'slug' => str_slug('Bộ khử tem từ mềm') . '-' . 7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 8,
            'category_id' => 4,
            'name' => 'Tủ sắt locker',
            'slug' => str_slug('Tủ sắt locker') . '-' . 8,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 9,
            'category_id' => 4,
            'name' => 'Tủ sắt văn phòng',
            'slug' => str_slug('Tủ sắt văn phòng') . '-' . 9,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 10,
            'category_id' => 4,
            'name' => 'Tủ sắt giày dép',
            'slug' => str_slug('Tủ sắt giày dép') . '-' . 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 11,
            'category_id' => 4,
            'name' => 'Tủ sắt đựng đồ công nhân, nhân viên',
            'slug' => str_slug('Tủ sắt đựng đồ công nhân, nhân viên') . '-' . 11,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 12,
            'category_id' => 5,
            'name' => 'Kệ trung tải',
            'slug' => str_slug('Kệ trung tải') . '-' . 12,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 13,
            'category_id' => 5,
            'name' => 'Kệ kho hàng V lỗ',
            'slug' => str_slug('Kệ kho hàng V lỗ') . '-' . 13,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 14,
            'category_id' => 5,
            'name' => 'Kệ lưu trữ tài liệu',
            'slug' => str_slug('Kệ lưu trữ tài liệu') . '-' . 14,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 15,
            'category_id' => 6,
            'name' => 'Móc treo đồ siêu thị',
            'slug' => str_slug('Móc treo đồ siêu thị') . '-' . 15,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 16,
            'category_id' => 6,
            'name' => 'Xe đẩy siêu thị',
            'slug' => str_slug('Xe đẩy siêu thị') . '-' . 16,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 17,
            'category_id' => 6,
            'name' => 'Ngăn kéo đựng tiền siêu thị',
            'slug' => str_slug('Ngăn kéo đựng tiền siêu thị') . '-' . 17,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 18,
            'category_id' => 6,
            'name' => 'Giỏ hàng xách tay',
            'slug' => str_slug('Giỏ hàng xách tay') . '-' . 18,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sub_categories')->insert([
            'id' => 19,
            'category_id' => 6,
            'name' => 'Giấy in hóa đơn',
            'slug' => str_slug('Giấy in hóa đơn') . '-' . 19,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
