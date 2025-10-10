<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyCompanyInfo;


class MyCompanyInfoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    MyCompanyInfo::create([
      'id' => 1,
      'name' => '株式会社ベルライン',
      "created_at" => "2025-10-01 00:00:00",
      "updated_at" => "2025-10-01 00:00:00",
    ]);
  }
}
