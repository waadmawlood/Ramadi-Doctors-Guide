<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\Roles;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::query()->firstOrCreate(
            [
                'email' => 'admin@admin.com',
            ],
            [
                'name' => 'Admin',
                'phone' => '0780000000000',
                'password' => '123456',
                'birthday' => '2000-01-01',
                'role' => Roles::Admin->name,
            ]
        );

        // **************************************************
        // Seed Of Categories
        // **************************************************

        $specialties = [
            ['name' => 'الباطنية'],
            ['name' => 'طب الأطفال وحديثي الولادة'],
            ['name' => 'الانف والاذن والحنجرة'],
            ['name' => 'الكلى والمسالك البولية'],
            ['name' => 'الجملة العصبية'],
            ['name' => 'جراحة العظام والمفاصل'],
            ['name' => 'طب العيون'],
            ['name' => ' النسائية والتوليد'],
            ['name' => 'باطنية وقلبية وصدرية'],
            ['name' => 'القلبية والأوعية الدموية'],
            ['name' => 'المفاصل والطب الطبيعي والتأهيل'],
            ['name' => 'الفم وتجميل الأسنان'],
            ['name' => 'الجلدية والتناسلية'],
            ['name' => 'الاشعة التشخيصية والسونار'],
            ['name' => 'الطب النفسي والامراض العقلية'],
            ['name' => 'المفاصل والروماتزم والفقرات'],
            ['name' => 'الكسور والمفاصل'],
            ['name' => 'الصدرية والربو والحساسية'],
            ['name' => 'العقم واطفال الانابيب'],
            ['name' => 'الأورام السرطانية'],
            ['name' => 'الجهاز الهضمي والكبد'],
            ['name' => 'جراحة عامة'],
        ];


        foreach ($specialties as $specialty) {
            Category::query()->firstOrCreate($specialty);
        }

        $this->call(DoctorsSeeder::class);
    }
}
