<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * テーブル名（明示的に指定する場合）
     */
    protected $table = 'employees';

    /**
     * 複数代入を許可するカラム
     */
    protected $fillable = [
        'name',                 // 氏名
        'kana',                 // フリガナ
        'address1',             // 住所1
        'address2',             // 住所2
        'birthday',             // 生年月日
        'email',                // メールアドレス
        'gender',               // 性別
        'employment_type',      // 雇用区分
        'department',           // 所属部署
        'position',             // 役職
        'emergency_contact',    // 緊急連絡先
        'insurance_number',     // 保険証番号
        'blood_type',           // 血液型
        'joined_at',            // 入社日
        'retired_at',           // 退職日
        'note',                 // 備考
    ];

    /**
     * 日付として扱う属性
     */
    protected $dates = [
        'birthday',
        'joined_at',
        'retired_at',
        'created_at',
        'updated_at',
    ];

    /**
     * デフォルト値（必要なら）
     */
    protected $attributes = [
        'gender' => '未設定',
        'employment_type' => '未設定',
    ];
}
