<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\Roles;
use App\Models\Clinic;
use App\Models\User;
use Illuminate\Database\Seeder;

class DoctorsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $DoctorsAndClinicsas = [
            [
                'doctor' => [
                    'name' => 'جلال كنعان',
                    'email' => 'jalal_kn87@doctor.com',
                    'phone' => '٠٧٨٣٢٩٥٩٥٣١',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 3,
                    'certificate' => 'تخصص الانف دكتوراه جامعة بغداد',
                ],
                'clinic' => [
                    'name' => 'الدكتور جلال كنعان',
                    'address' => 'شارع المستودع',
                    'phones' => ['٠٧٨٣٢٩٥٩٥٣١'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عامر فرحان سليمان',
                    'email' => 'amer_frh85@doctor.com',
                    'phone' => '07811894104',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 3,
                    'certificate' => 'تخصص الانف دكتوراه جامعة بغداد',
                ],
                'clinic' => [
                    'name' => 'الدكتور عامر فرحان سليمان',
                    'address' => 'شارع المستودع',
                    'phones' => ['07811894104'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'محمد شاكر شكر',
                    'email' => 'mhmd_shkr@doctor.com',
                    'phone' => '07802522565',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 3,
                    'certificate' => 'تخصص الانف دكتوراه جامعة بغداد',
                ],
                'clinic' => [
                    'name' => 'الدكتور محمد شاكر شكر',
                    'address' => 'شارع المستودع',
                    'phones' => ['07802522565'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رائد محمد العاني',
                    'email' => 'raad_mhmd81@doctor.com',
                    'phone' => '07830748931',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 3,
                    'certificate' => 'تخصص الانف دكتوراه جامعة الموصل',
                ],
                'clinic' => [
                    'name' => 'الدكتور رائد محمد العاني',
                    'address' => 'شارع الاطباء',
                    'phones' => ['07830748931'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عمر مالك الراوي',
                    'email' => 'omar_malik71@doctor.com',
                    'phone' => '07825950098',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 3,
                    'certificate' => 'تخصص الانف دكتوراه جامعة صلاح الدين',
                ],
                'clinic' => [
                    'name' => 'الدكتور عمر مالك الراوي',
                    'address' => 'شارع المستودع',
                    'phones' => ['07825950098'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'علي حسين علي سعيد',
                    'email' => '@doctor.com',
                    'phone' => '07818225111',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 3,
                    'certificate' => 'تخصص الانف دكتوراه جامعة الانبار',
                ],
                'clinic' => [
                    'name' => 'الدكتور علي حسين علي سعيد',
                    'address' => 'شارع الاطباء',
                    'phones' => ['07818225111'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'شيماء دحام',
                    'email' => 'shimaa_dh@doctor.com',
                    'phone' => '07829131711',
                    'password' => '123456',
                    'gender' => 'Female',
                    'role' => Roles::Doctor->name,
                    'category_id' => 14,
                    'certificate' => 'تخصص سونار ماستر من الجامعة الامريكية',
                ],
                'clinic' => [
                    'name' => 'السونار شيماء دحام',
                    'address' => 'شارع المستودع',
                    'phones' => ['07829131711'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'غالب خليل',
                    'email' => 'galeb_khalel@doctor.com',
                    'phone' => '07801756845',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 4,
                    'certificate' => 'تخصص الكلى والمجاري البولية الجامعة الكندية',
                ],
                'clinic' => [
                    'name' => 'الدكتور غالب خليل',
                    'address' => 'شارع المستودع',
                    'phones' => ['07801756845'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'محسن فرحان',
                    'email' => 'mhsn_frhan@doctor.com',
                    'phone' => '07802521104',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'تخصص الاطفال دكتوراه الجامعة الفلندية',
                ],
                'clinic' => [
                    'name' => 'الدكتور محسن فرحان',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07802521104'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'لطيف أحمد',
                    'email' => 'latef_ahmed@doctor.com',
                    'phone' => '07802521104',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'تخصص الجلدية الجامعة السورية الدولية',
                ],
                'clinic' => [
                    'name' => 'الدكتور لطيف أحمد',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07802521104'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'أسماء سامي',
                    'email' => 'asmaa_sami90@doctor.com',
                    'phone' => '07809897433',
                    'password' => '123456',
                    'gender' => 'Female',
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'تخصص الجلدية بورد المعهد الكندي',
                ],
                'clinic' => [
                    'name' => 'الدكتورة أسماء سامي',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07809897433'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'أركان اللهيبي',
                    'email' => 'arkan_lh65@doctor.com',
                    'phone' => '07812776575',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'تخصص الاطفال بورد محلي',
                ],
                'clinic' => [
                    'name' => 'الدكتور أركان اللهيبي',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07812776575'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'خالد مسير',
                    'email' => 'khalid_msr63@doctor.com',
                    'phone' => '07811221089',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 10,
                    'certificate' => 'تخصص القلبية الباطنية الجامعة الاسترالية',
                ],
                'clinic' => [
                    'name' => 'الدكتور خالد مسير',
                    'address' => 'شارع المستودع',
                    'phones' => ['07811221089'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ابتسام',
                    'email' => 'abtsam89@doctor.com',
                    'phone' => '07905144802',
                    'password' => '123456',
                    'gender' => 'Female',
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'تخصص نسائية الجامعة التركية',
                ],
                'clinic' => [
                    'name' => 'الدكتورة ابتسام',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07905144802'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'حيمد حردان',
                    'email' => 'hameed_hrd75@doctor.com',
                    'phone' => '07817726194',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 17,
                    'certificate' => 'تخصص الكسور معهد لانسر في الجامعة الكندية',
                ],
                'clinic' => [
                    'name' => 'الدكتور حيمد حردان',
                    'address' => 'شارع المستودع',
                    'phones' => ['07817726194'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رائد حيمد',
                    'email' => 'raaed_had87@doctor.com',
                    'phone' => '07801737837',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 7,
                    'certificate' => 'تخصص القرنية بورد جامعة طهران',
                ],
                'clinic' => [
                    'name' => 'الدكتور رائد حيمد',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07801737837'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'سيف الدين',
                    'email' => '@doctor.com',
                    'phone' => '07811989651',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'تخصص زراعة الاسنان الجامعة الكندية',
                ],
                'clinic' => [
                    'name' => 'الدكتور سيف الدين',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07811989651'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'سيف محمد',
                    'email' => 'saif_mhmd74@doctor.com',
                    'phone' => '07821311001',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'تخصص جلدية الجامعة المصرية',
                ],
                'clinic' => [
                    'name' => 'الدكتور سيف محمد',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07821311001'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'طه جزاع',
                    'email' => 'taha_jza72@doctor.com',
                    'phone' => '07831468931',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 4,
                    'certificate' => 'تخصص  مجاري بولية أطفال المعهد الهولندي',
                ],
                'clinic' => [
                    'name' => 'الدكتور ',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07831468931'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'فخري الدلة',
                    'email' => 'fakri_dla77@doctor.com',
                    'phone' => '07822576230',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'تخصص أطفال الجامعة العراقية',
                ],
                'clinic' => [
                    'name' => 'الدكتور فخري الدلة',
                    'address' => 'شارع المستودع',
                    'phones' => ['07822576230'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'سامي العبيدي',
                    'email' => 'sami@doctor.com',
                    'phone' => '07825578380',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 10,
                    'certificate' => 'تخصص قلبية باطنية الجامعة المستنصرية',
                ],
                'clinic' => [
                    'name' => 'الدكتور سامي العبيدي',
                    'address' => 'شارع الاورزدي',
                    'phones' => ['07825578380'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'الدكتورة آسيا',
                    'email' => 'asia@doctor.com',
                    'phone' => '07813096440',
                    'password' => '123456',
                    'gender' => 'Female',
                    'role' => Roles::Doctor->name,
                    'category_id' => 14,
                    'certificate' => 'تخصص سونار مجهري',
                ],
                'clinic' => [
                    'name' => 'الدكتورة آسيا',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07813096440'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رغد فاضل',
                    'email' => 'ragad_fdl@doctor.com',
                    'phone' => '07809493963',
                    'password' => '123456',
                    'gender' => 'Female',
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'تخصص طب النساء جامعة العين',
                ],
                'clinic' => [
                    'name' => 'الدكتورة رغد فاضل',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07809493963'],
                ]
            ],
        ];

        // **************************************************
        // Seed Of Categories
        // **************************************************

        $specialties = [
            ['id' => 1, 'name' => 'الباطنية'],
            ['id' => 2, 'name' => 'طب الأطفال'],
            ['id' => 3, 'name' => 'انف اذن وحنجره'],
            ['id' => 4, 'name' => 'الكلى والمجاري البولية'],
            ['id' => 5, 'name' => 'الأمراض العصبية'],
            ['id' => 6, 'name' => 'جراحة العظام'],
            ['id' => 7, 'name' => 'طب العيون'],
            ['id' => 8, 'name' => 'التوليد والنساء'],
            ['id' => 9, 'name' => 'الباطنة التطبيقية'],
            ['id' => 10, 'name' => 'جراحة القلب والأوعية الدموية'],
            ['id' => 11, 'name' => 'الطب الطبيعي وإعادة التأهيل'],
            ['id' => 12, 'name' => 'طب الأسنان'],
            ['id' => 13, 'name' => 'الجلدية والتناسلية'],
            ['id' => 14, 'name' => 'سونار'],
            ['id' => 15, 'name' => 'علم الأمراض'],
            ['id' => 16, 'name' => 'طب الطوارئ'],
            ['id' => 17, 'name' => 'مفاصل وكسور'],
            ['id' => 18, 'name' => 'جراحة التجميل'],
            ['id' => 19, 'name' => 'الأمراض المعدية'],
            ['id' => 20, 'name' => 'الأورام السرطانية'],
        ];


        foreach($DoctorsAndClinicsas as  $doctorAndClinic){
            $doctor = $doctorAndClinic['doctor'];
            $clinic = $doctorAndClinic['clinic'];

            $doctorCreated = User::query()->where('email',$doctor['email'])->exists() ?
                User::query()->where('email',$doctor['email'])->first() : User::query()->create($doctor);

            $clinicCreated = Clinic::query()->where('name', $clinic['name'])->exists() ?
                Clinic::query()->where('name', $clinic['name'])->first() : Clinic::query()->create($clinic);

            if(!$clinicCreated->users()->wherePivot('user_id', $doctorCreated->id)->exists())
            {
                $clinicCreated->users()->attach($doctorCreated, ['role' => $doctor['role']]);
            }

            if(!$clinicCreated->categories()->wherePivot('category_id', $doctorCreated->category_id)->exists())
            {
                $clinicCreated->categories()->attach($doctorCreated->category);
            }
        }
    }
}
