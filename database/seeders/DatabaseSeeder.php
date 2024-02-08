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
            ['name' => 'الباطنية', 'description' => 'تخصص يعنى بدراسة الأعضاء الداخلية في الجسم ومشاكلها.'],
            ['name' => 'طب الأطفال', 'description' => 'تخصص يعنى برعاية صحة الأطفال من الولادة حتى سن البلوغ.'],
            ['name' => 'التشريح', 'description' => 'تخصص يدرس هيكل الجسم البشري وتركيبه.'],
            ['name' => 'طب الأسرة', 'description' => 'تخصص يركز على الرعاية الصحية الشاملة لأفراد الأسرة.'],
            ['name' => 'الأمراض العصبية', 'description' => 'تخصص يعنى بدراسة الأمراض والاضطرابات التي تؤثر على الجهاز العصبي.'],
            ['name' => 'جراحة العظام', 'description' => 'تخصص يعنى بتشخيص ومعالجة الكسور والأمراض التي تؤثر على العظام.'],
            ['name' => 'طب العيون', 'description' => 'تخصص يعنى بتشخيص وعلاج الأمراض والاضطرابات المرتبطة بالعين والرؤية.'],
            ['name' => 'التوليد والنساء', 'description' => 'تخصص يهتم بصحة المرأة والعناية بالحمل والولادة والرعاية النسائية بشكل عام.'],
            ['name' => 'الباطنة التطبيقية', 'description' => 'تخصص يركز على تشخيص وعلاج الأمراض الباطنية المعقدة والحالات الحرجة.'],
            ['name' => 'جراحة القلب والأوعية الدموية', 'description' => 'تخصص يختص بتشخيص ومعالجة الأمراض التي تؤثر على القلب والأوعية الدموية.'],
            ['name' => 'الطب الطبيعي وإعادة التأهيل', 'description' => 'تخصص يهتم بتقييم وعلاج الإصابات والاضطرابات الحركية والوظيفية.'],
            ['name' => 'طب الأسنان', 'description' => 'تخصص يركز على الوقاية من الأمراض الفموية وعلاج المشاكل الصحية المرتبطة بالفم والأسنان.'],
            ['name' => 'الجلدية والتناسلية', 'description' => 'تخصص يعنى بدراسة وعلاج الأمراض التي تؤثر على الجلد والتناسلية.'],
            ['name' => 'التشخيص الطبي', 'description' => 'تخصص يركز على استخدام الفحوصات والاختبارات الطبية لتشخيص الأمراض والحالات الصحية.'],
            ['name' => 'علم الأمراض', 'description' => 'تخصص يدرس الأمراض والمسببات المرضية وآليات تطورها وعلاجها.'],
            ['name' => 'طب الطوارئ', 'description' => 'تخصص يعنى بتقديم الرعاية الطبية الفورية للمرضى في حالات الطوارئ والحوادث.'],
            ['name' => 'التغذية السريرية', 'description' => 'تخصص يعنى بتقديم التغذية المناسبة والمخصصة لمرضى الأمراض المزمنة والحالات الصحية الخاصة.'],
            ['name' => 'جراحة التجميل', 'description' => 'تخصص يركز على تحسين المظهر الجسدي للأفراد من خلال إجراء عمليات جراحية تجميلية.'],
            ['name' => 'الأمراض المعدية', 'description' => 'تخصص يدرس الأمراض التي تسببها الكائنات الحية الدقيقة مثل البكتيريا والفيروسات والفطريات.'],
            ['name' => 'الأورام السرطانية', 'description' => 'تخصص يعنى بتشخيص وعلاج الأورام السرطانية وتقديم الرعاية للمرضى المصابين بالسرطان.'],
        ];


        foreach ($specialties as $specialty) {
            Category::query()->firstOrCreate($specialty);
        }
    }
}