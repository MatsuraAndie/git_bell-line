<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {


    User::create([
      'id' => 1,
      'name' => 'テスト管理者',
      'email' => 'test@test',
      "email_verified_at" => "2025-09-01 00:00:00",
      'password' => '$2y$10$1TNf3mwX/IkeQ695NBg/ge3KySRJKk6OUHVNnB8zNPZ6s1f67kWx6', //12345678をhash化
      "created_at" => "2025-09-01 00:00:00",
      "updated_at" => "2025-09-01 00:00:00",
    ]);
  }
}
