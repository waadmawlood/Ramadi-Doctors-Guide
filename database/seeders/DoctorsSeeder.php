<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\Roles;
use App\Models\Clinic;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

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
                    'address' => 'شارع المستودع - مجمع التاج الطبي',
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
                    'name' => 'طه جزاع علي رميزان',
                    'email' => null,
                    'phone' => '07840281400',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'بكالوريوس طب وجراحة عامة كلية طب بغداد',
                ],
                'clinic' => [
                    'name' => null,
                    'category_ids' => [13, 22],
                    'address' => 'شارع الأطباء',
                    'phones' => ['07840281400'],
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
                    'name' => 'اسيا خليل الكبيسي',
                    'email' => null,
                    'phone' => '07813096440',
                    'password' => '123456',
                    'gender' => 'Female',
                    'role' => Roles::Doctor->name,
                    'category_id' => 14,
                    'certificate' => 'دبلوم سونار / ودوبلر ملون /  سونار رباعي الابعاد، فحص الغدة الدرقية والثدي فحص الحوض والبطن',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع',
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
            [
                'doctor' => [
                    'name' => 'صلاح احمد الكبيسي',
                    'email' => 'salah_ahmdkbs@doctor.com',
                    'phone' => '07812962913',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'تخصص الاطفال والخدج جامعة الانبار',
                ],
                'clinic' => [
                    'name' => 'الدكتور صلاح احمد الكبيسي',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07812962913'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'حسين علي العكيدي',
                    'email' => 'hsainAli61@doctor.com',
                    'phone' => '07804659152',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'دكتوراه بورد بطب الاطفال والخدج',
                ],
                'clinic' => [
                    'name' => 'الدكتور حسين علي العكيدي',
                    'address' => 'شارع الأطباء - مجمع سعد بن ابي وقاص',
                    'phones' => ['07804659152'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ثامر عبد المجيد الكبيسي',
                    'email' => 'thamer_abdkbs@doctor.com',
                    'phone' => '07802132660',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => "بورد دكتوراه بالامراض الجلدية والتناسلية وجراحة الجلد والعلاج بالليزر",
                ],
                'clinic' => [
                    'name' => 'الدكتور ثامر عبد المجيد الكبيسي',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07802132660', '07811442389'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'دريد طه الحديثي',
                    'email' => 'doraid@doctor.com',
                    'phone' => '07818955616',
                    'password' => '123456',
                    'gender' => 'Male',
                    'role' => Roles::Doctor->name,
                    'category_id' => 4,
                    'certificate' => 'دكتوراه جراحة الكلى والمسالك البولية والتناسلية والبروستات والعقم',
                ],
                'clinic' => [
                    'name' => 'الدكتور دريد طه الحديثي',
                    'address' => 'شارع المستودع - مجمع الزهراوي الطبي',
                    'phones' => ['07818955616'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'يوسف عبدالله العاني',
                    'email' => null,
                    'phone' => '07829388938',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 15,
                    'certificate' => 'دكتوراه الامراض النفسية والعقلية والعصبية',
                ],
                'clinic' => [
                    'name' => 'الدكتور يوسف عبدالله العاني',
                    'address' => 'شارع المستودع - مجمع محمد طارق',
                    'phones' => ['07829388938'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'مصطفى نوري العاني',
                    'email' => null,
                    'phone' => '07906976232',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 9,
                    'certificate' => 'دكتوراه (بورد) امراض الدماغ والعمود الفقري',
                ],
                'clinic' => [
                    'name' => 'الدكتور مصطفى نوري العاني',
                    'address' => 'الخمسة كيلو / مقابل جامع التقوى',
                    'phones' => ['07906976232'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ماهر علي التاله',
                    'email' => null,
                    'phone' => '07818273139',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 9,
                    'certificate' => 'دكتوراه (بورد) الامراض الباطنيه والصدرية والقلبية وداء السكري',
                ],
                'clinic' => [
                    'name' => 'الدكتور ماهر علي التاله',
                    'address' => 'شارع الأطباء - مجمع قتيبة الطبي',
                    'phones' => ['07818273139'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'علياء كامل الحديثي',
                    'email' => null,
                    'phone' => '07825483067',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'ماجستير طب النسائية والتوليد والسونار',
                ],
                'clinic' => [
                    'name' => 'الدكتورة علياء كامل الحديثي',
                    'address' => 'شارع الأطباء - مجمع الكندي الطبي',
                    'phones' => ['07825483067'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'احمد عبد الجبار صالح',
                    'email' => null,
                    'phone' => '07829079343',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'البورد العربي ( دكتوراه) بامراض الجلدية والتناسلية',
                ],
                'clinic' => [
                    'name' => 'الدكتور احمد عبد الجبار صالح ',
                    'address' => 'شارع الأطباء',
                    'phones' => ['07829079343'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عمر عبدالجبار رفيعي',
                    'email' => null,
                    'phone' => '07804875848',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 5,
                    'certificate' => 'ماجستير جراحة الدماغ والاعصاب والعمود الفقري جامعة عين شمس',
                ],
                'clinic' => [
                    'name' => 'الدكتور عمر عبدالجبار رفيعي',
                    'address' => 'شارع الأطباء - مجمع المنارة الطبي',
                    'phones' => ['07804875848'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'صلاح الدين نور الدين',
                    'email' => null,
                    'phone' => '07819463440',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 5,
                    'certificate' => 'بورد دكتوراه جراحة الدماغ والعمود الفقري',
                ],
                'clinic' => [
                    'name' => 'الدكتور صلاح الدين نور الدين',
                    'address' => 'شارع المستودع - مجمع جنان الطبي',
                    'phones' => ['07819463440'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'هشام مداح الالوسي',
                    'email' => null,
                    'phone' => '07821671237',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 5,
                    'certificate' => 'دكتوراه بورد جراحة الدماغ والعمود الفقري',
                ],
                'clinic' => [
                    'name' => 'الدكتور هشام مداح الالوسي',
                    'address' => 'قرب دائرة الضريبة',
                    'phones' => ['07821671237'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'وائل وجيه الراوي',
                    'email' => null,
                    'phone' => '٠٧٨٢٦٣٣٠٨٥١',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'بورد عربي دكتوراه بغداد',
                ],
                'clinic' => [
                    'name' => 'الدكتور وائل وجيه الراوي',
                    'address' => ' الشارع العام - مقابل مبنى الضريبة',
                    'phones' => ['٠٧٨٢٦٣٣٠٨٥١'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عمار فاضل عساف المحمدي',
                    'email' => null,
                    'phone' => '07841444114',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 18,
                    'certificate' => 'دكتوراه بورد امراض صدرية وربو وحساسية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الأطباء - مجمع السعادة الطبي',
                    'phones' => ['07841444114'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ياسر مهدي',
                    'email' => null,
                    'phone' => '07828428684',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'تخصص طب الاسنان وتبيض اسنان وحشوات تجميلية ',
                ],
                'clinic' => [
                    'name' => 'الدكتور ياسر مهدي',
                    'address' => 'شارع الاطباء - مجمع السعادة الطبي',
                    'phones' => ['07828428684'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'حذيفة حسين',
                    'email' => null,
                    'phone' => '07828428685',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'تخصص طب الاسنان وتبيض اسنان وحشوات تجميلية ',
                ],
                'clinic' => [
                    'name' => 'الدكتور حذيفة حسين',
                    'address' => 'شارع الاطباء - مجمع السعادة الطبي',
                    'phones' => ['07828428685'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رافع خليل العاني',
                    'email' => null,
                    'phone' => '07854641981',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'دكتوراه (بورد) طب الاطفال وحديثي الولادة',
                ],
                'clinic' => [
                    'name' => 'الدكتور رافع خليل العاني',
                    'address' => 'التأميم - مقابل معمل الزجاج فرع جامع الشافعي - مجمع الخليل الطبي',
                    'phones' => ['٠٧٨٥٤٦٤١٩٨١', '07854641981'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'محمد ماهر مشرف',
                    'email' => null,
                    'phone' => '07801420500',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'دكتوراه (بورد) طب الاطفال وحديثي الولادة',
                ],
                'clinic' => [
                    'name' => 'الدكتور محمد ماهر مشرف',
                    'address' => 'شارع المستودع - مجمع القمة الطبي',
                    'phones' => ['07801420500'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'يوسف احمد الشاهر',
                    'email' => null,
                    'phone' => '07801755497',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 16,
                    'certificate' => 'دبلوم عالي امراض المفاصل والتأهيل الطبي جامعة الموصل',
                ],
                'clinic' => [
                    'name' => 'الدكتور يوسف احمد الشاهر',
                    'address' => 'الشارع العام - مجمع المروج الطبي',
                    'phones' => ['07801755497', '07806747426'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عمر عبد الرحيم',
                    'email' => null,
                    'phone' => '07810777004',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 5,
                    'certificate' => '',
                ],
                'clinic' => [
                    'name' => 'الدكتور عمر عبد الرحيم',
                    'address' => 'شارع الأطباء - مجمع ميديكا الطبي',
                    'phones' => ['07810777004'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'مجاهد عبد محل',
                    'email' => null,
                    'phone' => '07800396535',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 21,
                    'certificate' => 'اخصائي امراض الجهاز الهضمي والكبد  الزماله المصريه (بورد)',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'الشارع العام - مجمع صيدلة المروج',
                    'phones' => ['07800396535'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عمر علي الجنابي',
                    'email' => null,
                    'phone' => '07700522740',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 18,
                    'certificate' => 'اختصاص الربو و الحساسية و المناعة السريرية',
                ],
                'clinic' => [
                    'name' => 'الدكتور عمر علي الجنابي',
                    'address' => 'شارع المستودع - مجمع القمة الطبي',
                    'phones' => ['07700522740'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'حماد خلف سعيد',
                    'email' => null,
                    'phone' => '07807900438',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 22,
                    'certificate' => 'اختصاص الجراحة العامة ',
                ],
                'clinic' => [
                    'name' => 'الدكتور حماد خلف سعيد',
                    'address' => 'شارع المستودع - مجمع التاج الطبي',
                    'phones' => ['07807900438'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'علي حسين علي سعيد الفهداوي',
                    'email' => null,
                    'phone' => '07818225111',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 3,
                    'certificate' => 'إختصاص أنف وأذن وحنجرة وتجميل الأنف',
                ],
                'clinic' => [
                    'name' => 'الدكتور علي حسين علي سعيد الفهداوي',
                    'address' => 'شارع الأطباء - صيدلية سعد بن أبي وقاص',
                    'phones' => ['07818225111'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'علي الشملون',
                    'email' => null,
                    'phone' => '07843159959',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 10,
                    'certificate' => 'دكتوراه بورد عربي اختصاص دقيق قسطرة القلب والشرايين',
                ],
                'clinic' => [
                    'name' => 'الدكتور علي الشملون',
                    'address' => 'شارع المحافظة القديم - مجمع النخبة الطبي',
                    'phones' => ['07843159959'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'منذر صبحي الخالدي',
                    'email' => null,
                    'phone' => '07739124601',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 10,
                    'certificate' => 'اختصاص امراض القلب وقسطرة الشرايين',
                ],
                'clinic' => [
                    'name' => 'الدكتور منذر صبحي الخالدي',
                    'address' => 'شارع المستودع - مجمع ابن البيطار الطبي',
                    'phones' => ['07739124601'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'سنان اسماعيل الخطيب',
                    'email' => null,
                    'phone' => '07816363675',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 11,
                    'certificate' => 'اخصائي المفاصل والتأهيل والطب الطبيعي',
                ],
                'clinic' => [
                    'name' => 'الدكتور سنان اسماعيل الخطيب',
                    'address' => 'شارع المستودع - مجمع القمة الطبي',
                    'phones' => ['07816363675'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'اسراء زيدان علوبي',
                    'email' => null,
                    'phone' => '07830687555',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'بكالوريوس طب وجراحة عامة',
                ],
                'clinic' => [
                    'name' => 'الدكتورة اسراء زيدان علوبي',
                    'address' => 'شارع المستودع - مجمع ابن النفيس الطبي',
                    'phones' => ['07830687555'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رؤى احسان البياتي',
                    'email' => null,
                    'phone' => '07843430800',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 22,
                    'certificate' => 'دكتوراه بورد عربي جراحة الاورام والثدي والغدة الدرقية',
                ],
                'clinic' => [
                    'name' => 'الدكتورة رؤى احسان البياتي',
                    'address' => 'شارع المحافظة القديم - مجمع ليان الطبي',
                    'phones' => ['07843430800'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'فؤاد حسن علي',
                    'email' => null,
                    'phone' => '07823399338',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 6,
                    'certificate' => 'بكالوريوس طب وجراحة العظام ودكتوراه بورد عربي ودكتوراه بورد عراقي',
                ],
                'clinic' => [
                    'name' => 'الدكتور فؤاد حسن علي',
                    'category_ids' => [6, 17],
                    'address' => 'شارع الأطباء - صيدلية النبأ',
                    'phones' => ['07823399338'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'شيماء خلف المحمدي',
                    'email' => null,
                    'phone' => '07840282724',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 16,
                    'certificate' => 'بكالوريوس طب وجراحة عامة',
                ],
                'clinic' => [
                    'name' => 'الدكتورة شيماء خلف المحمدي',
                    'address' => 'شارع المحافظة القديم - مجمع المدينة الطبي',
                    'phones' => ['07840282724'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'قتيبة محمد سلمان الدليمي',
                    'email' => null,
                    'phone' => '07850118778',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 9,
                    'certificate' => 'اختصاص الامراض الباطنية والصدرية والقلبية',
                ],
                'clinic' => [
                    'name' => 'الدكتور قتيبة محمد سلمان الدليمي',
                    'address' => 'الشارع العام - مقابل مطعم ابو عبدالله',
                    'phones' => ['07850118778'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'خالد العاني',
                    'email' => null,
                    'phone' => '07836848190',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 1,
                    'certificate' => 'بكالوريوس بورد اوربي طب عام وجراحة عامة',
                ],
                'clinic' => [
                    'name' => 'الدكتور خالد العاني',
                    'address' => 'شارع المستودع - مجمع جواهر الطبي',
                    'phones' => ['07836848190'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'محمد محسن',
                    'email' => null,
                    'phone' => '٠٧٨٤٧٧٨٨٦٨٤',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'دكتوراه(بورد عربي) اختصاص جراحة وتجميل الجلد والليزر',
                ],
                'clinic' => [
                    'name' => 'الدكتور محمد محسن',
                    'address' => 'شارع الاطباء-مجاور صيدلية ابن سيناء',
                    'phones' => ['٠٧٨٤٧٧٨٨٦٨٤'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'وليد محمد العاني',
                    'email' => null,
                    'phone' => '07803414345',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 5,
                    'certificate' => 'اختصاص دقيق  بورد في امراض الدماغ والاعصاب زميل المجلس العراقي',
                ],
                'clinic' => [
                    'name' => 'الدكتور وليد محمد العاني',
                    'address' => 'الشارع العام - مجمع الكندي الطبي',
                    'phones' => ['07803414345'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'وجدي عبد الكريم الحديثي',
                    'email' => null,
                    'phone' => '07825405538',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 2,
                    'certificate' => 'بكالوريوس طب وجراحة عامة',
                ],
                'clinic' => [
                    'name' => 'الدكتور وجدي عبد الكريم الحديثي',
                    'address' => 'شارع النخيل - مجاور صيدلية الجامعة',
                    'phones' => ['07825405538'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'لؤي اسعد الكبيسي',
                    'email' => null,
                    'phone' => '07828295449',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 6,
                    'certificate' => 'دكتوراه بورد لجراحة العظام والكسور',
                ],
                'clinic' => [
                    'name' => 'الدكتور لؤي اسعد الكبيسي',
                    'category_ids' => [6, 17],
                    'address' => 'شارع المستودع - مجمع الزهاوي',
                    'phones' => ['07828295449'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'اياد العواد',
                    'email' => null,
                    'phone' => '07804044677',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 6,
                    'certificate' => 'دكتوراه بورد عربي لجراحة العظام والكسور',
                ],
                'clinic' => [
                    'name' => 'الدكتور اياد العواد',
                    'address' => 'شارع الاطباء - مجمع الكندي الطبي',
                    'phones' => ['07804044677'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'صلاح حردان العزي',
                    'email' => null,
                    'phone' => '07831044070',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 16,
                    'certificate' => 'دكتوراه بورد امراض المفاصل والروماتزم والعمود الفقري',
                ],
                'clinic' => [
                    'name' => 'الدكتور صلاح حردان العزي',
                    'address' => 'شارع المستودع - مقابل صيدلية محمد طارق',
                    'phones' => ['07831044070'],
                ]
            ],

            [
                'doctor' => [
                    'name' => 'ناظم عيدان عبد الفهداوي',
                    'email' => null,
                    'phone' => '07821815939',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 16,
                    'certificate' => 'دكتوراه بورد امراض المفاصل والروماتزم والعمود الفقري',
                ],
                'clinic' => [
                    'name' => 'الدكتور ناظم عيدان عبد الفهداوي',
                    'address' => 'شارع المستودع - قرب مستشفى المصطفى',
                    'phones' => ['07821815939'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'فرحان حسين علي',
                    'email' => null,
                    'phone' => '07809870445',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 6,
                    'certificate' => 'دبلوم عالي جراحة العظام والمفاصل',
                ],
                'clinic' => [
                    'name' => 'الدكتور فرحان حسين علي',
                    'address' => 'شارع الاطباء',
                    'phones' => ['07809870445'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'محمد سمير عبداللطيف',
                    'email' => null,
                    'phone' => '07712226748',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 6,
                    'certificate' => 'بورد عربي (دكتوراه) جراحة العظام والمفاصل والكسور والعناية بالقدم السكري والتشوهات الولادية',
                ],
                'clinic' => [
                    'name' => 'الدكتور محمد سمير عبداللطيف',
                    'address' => 'شارع المستودع - مجاور كراج التأميم',
                    'phones' => ['07712226748'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'احمد مكي عبدالرزاق الويسي',
                    'email' => null,
                    'phone' => '07815888263',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'دكتوراه جامعة كارف المملكة المتحدة',
                ],
                'clinic' => [
                    'name' => 'الدكتور احمد مكي عبدالرزاق الويسي',
                    'address' => 'شارع الاطباء - مجمع البنفسج',
                    'phones' => ['07815888263'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'قصي رجب الكحلي',
                    'email' => null,
                    'phone' => '07800600842',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'دكتوراه تخصص تجميل الاسنان',
                ],
                'clinic' => [
                    'name' => 'الدكتور قصي رجب الكحلي',
                    'address' => 'بداية شارع الاورزدي',
                    'phones' => ['07800600842', '07730600842'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'مروة حازم عبد الكريم منصور',
                    'email' => null,
                    'phone' => '07818658095',
                    'password' => '123456',
                    'gender' => 2,
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'بكالوريوس طب وجراحة الفم والاسنان',
                ],
                'clinic' => [
                    'name' => 'الدكتورة مروة حازم عبد الكريم منصور',
                    'address' => 'شارع المستودع - مجمع الدكتور لبيب',
                    'phones' => ['07818658095'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'معتصم محمد خليل',
                    'email' => null,
                    'phone' => '07830735262',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'بكالوريوس طب وجراحة الفم والاسنان',
                ],
                'clinic' => [
                    'name' => 'الدكتور ',
                    'address' => 'شارع المحافظة القديم - صيدلية قتيبة غازي',
                    'phones' => ['07830735262'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'مهيب علي العبيدي',
                    'email' => null,
                    'phone' => '07811002777',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'بكالوريوس طب وجراحة الفم والاسنان',
                ],
                'clinic' => [
                    'name' => 'الدكتور مهيب علي العبيدي',
                    'address' => 'شارع المستودع',
                    'phones' => ['07811002777'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'نعيم ناصر الحياني',
                    'email' => null,
                    'phone' => '07817266690',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'اختصاص التجميل وجراحة الجلد والعلاج بالليزر',
                ],
                'clinic' => [
                    'name' => 'الدكتور نعيم ناصر الحياني',
                    'address' => 'الشارع العام - مقابل دائرة الضريبة',
                    'phones' => ['07817266690'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رؤى لطيف حسن',
                    'email' => null,
                    'phone' => '07827711540',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'بكالوريوس طب وجراحة عامة المجلس العربي',
                ],
                'clinic' => [
                    'name' => 'الدكتورة رؤى لطيف حسن',
                    'address' => 'شارع المستودع',
                    'phones' => ['07827711540'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'بان عبد ابراهيم العزاوي',
                    'email' => null,
                    'phone' => '07811356390',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'بكالوريوس طب وجراحة عامة',
                ],
                'clinic' => [
                    'name' => 'الدكتورة بان عبد ابراهيم العزاوي',
                    'address' => 'شارع الاطباء - مجمع الماس الطبي',
                    'phones' => ['07811356390'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'سيف محمد رشيد',
                    'email' => null,
                    'phone' => '07814991236',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 13,
                    'certificate' => 'دكتوراه بورد عربي الامراض الجلدية والتناسلية والليزر',
                ],
                'clinic' => [
                    'name' => 'الدكتور سيف محمد رشيد',
                    'address' => 'شارع الاطباء',
                    'phones' => ['07814991236', '07821311001'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ضي عبد العزيز رشيد',
                    'email' => null,
                    'phone' => '07818272129',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'اختصاص جراحة وامراض النسائية والتوليد والعقم',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء - مجمع الحكمة الطبي',
                    'phones' => ['07818272129'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'زمزم نوري ياسين',
                    'email' => null,
                    'phone' => '07800659109',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'اخصائية الامراض النسائية والتوليد والعقم',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء - مجمع المعتصم',
                    'phones' => ['07800659109'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'بسمة ياسين الحديثي',
                    'email' => null,
                    'phone' => '07804998403',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'اختصاص جراحة وامراض النسائية والتوليد والعقم',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع',
                    'phones' => ['07804998403', '07715155431'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رفل مصطفى العاني',
                    'email' => null,
                    'phone' => '07816737914',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'دكتوراه بورد جراحة الامراض النسائية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مجمع الوسام الطبي',
                    'phones' => ['07816737914'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'تماضر مداح الالوسي',
                    'email' => null,
                    'phone' => '07816606113',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'اخصائية الامراض النسائية والتوليد',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - قرب دائرة الضريبة',
                    'phones' => ['07816606113'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'الاء شلال فرحان الفهداوي',
                    'email' => null,
                    'phone' => '07803675778',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 8,
                    'certificate' => 'بورد عربي وعراقي اختصاص النسائية والتوليد والليزر',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مجمع محمد طارق',
                    'phones' => ['07803675778'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'هيثم ضاري عبد الدليمي',
                    'email' => null,
                    'phone' => '7807722836',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 1,
                    'certificate' => '',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['7807722836'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'محمد عبدالله محمد الدليمي',
                    'email' => null,
                    'phone' => '07800185719',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 1,
                    'certificate' => 'دبلوم عالي في الجراحة العامة والناظورية',
                ],
                'clinic' => [
                    'name' => null,
                    'category_ids' => [1, 22],
                    'address' => 'شارع المستودع',
                    'phones' => ['07800185719'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'محمد طارق محمد الفهداوي',
                    'email' => null,
                    'phone' => '07819959472',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 1,
                    'certificate' => 'دكتوراه (البورد العربي) في الجراحة العامة والجراحة الناظورية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع',
                    'phones' => ['07819959472'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رعد حفظي الهيتي',
                    'email' => null,
                    'phone' => '07826100382',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 1,
                    'certificate' => 'استشاري الجراحة العامة وجراحة المجاري البولية والمنظارية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07826100382'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عبد الله محمد ملحم',
                    'email' => null,
                    'phone' => '07809553196',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 7,
                    'certificate' => 'دكتوراه بورد طب وجراحة العيون',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07809553196'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'يونس اسماعيل خلف',
                    'email' => null,
                    'phone' => '07812964699',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 7,
                    'certificate' => 'بورد دكتوراه اختصاص طب وجراحة العيون',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء - مجمع البلسم الطبي',
                    'phones' => ['07812964699'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'وسن عبدالعزيز رشيد',
                    'email' => null,
                    'phone' => '07808877969',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 7,
                    'certificate' =>  'دكتوراه اختصاص طب وجراحة العيون',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مجمع الزهراوي الطبي',
                    'phones' => ['07808877969'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'صهيب علي حماد العبيدي',
                    'email' => null,
                    'phone' => '07822270190',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 12,
                    'certificate' => 'بكالوريوس طب وجراحة الفم والاسنان B.D.S',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع',
                    'phones' => ['07822270190', '07829056525'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'بسام مداح حسن',
                    'email' => null,
                    'phone' => '07806616100',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 10,
                    'certificate' => 'اخصائي(بورد) جراحة القلب والصدر والاوعية الدموية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'مجمع النهرين لطب العيون',
                    'phones' => ['07806616100'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'طه حسين المعضادي',
                    'email' => null,
                    'phone' => '07700299123',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 18,
                    'certificate' => 'دبلوم بطب مجتمع - ممارس بالأمراض الصدرية والتنفسية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07700299123'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'قيس عبدالرحمن ثامر العاني',
                    'email' => null,
                    'phone' => '07810846600',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 4,
                    'certificate' => 'استشاري جراحة الكلى والمسالك البولية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07810846600'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'زياد حماد عبد',
                    'email' => null,
                    'phone' => '07815788015',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 4,
                    'certificate' => 'حاصل على شهادة زميل المجلس العراقي للاختصاصات الطبية (للجراحة البولية)',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'مدخل شارع الاورزدي',
                    'phones' => ['07815788015'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'سندس حاتم العاني',
                    'email' => null,
                    'phone' => '07800959669',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 9,
                    'certificate' => 'اختصاص بالامراض الباطنية والقلبية والصدرية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء - مجمع ابتهال العاني',
                    'phones' => ['07800959669'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'امجد شيت الجغيفي',
                    'email' => null,
                    'phone' => '07801870335',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 9,
                    'certificate' => 'دكتوراة بالامراض الباطنية والقلبية والصدرية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07801870335'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'امجد شيتي الجغيفي',
                    'email' => null,
                    'phone' => '07801870335',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 10,
                    'certificate' => 'دكتوراة بالامراض الباطنية والقلبية والصدرية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07801870335'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عماد تحسين الحديثي',
                    'email' => null,
                    'phone' => '07822862705',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 10,
                    'certificate' => 'ماجستير باطنية - قلبية - صدرية - والجهاز الهضمي',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء - مجمع بورسعيد الطبي',
                    'phones' => ['07822862705'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عماد تحسين الحديثي',
                    'email' => null,
                    'phone' => '07822862705',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 21,
                    'certificate' => 'ماجستير باطنية - قلبية - صدرية - والجهاز الهضمي',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء - مجمع بورسعيد الطبي',
                    'phones' => ['07822862705'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'رياض عدنان عويد العطار',
                    'email' => null,
                    'phone' => '07823040779',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 21,
                    'certificate' => ' تخصص جراحة الجهاز الهضمي والكبد والمرارة والغدد',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مقابل أسواق الطائف',
                    'phones' => ['07823040779'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ياسين حمد مجيد',
                    'email' => null,
                    'phone' => '07829958377',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 21,
                    'certificate' => 'استشاري أمراض الجهاز الهضمي والكبد',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مجمع الخضراء الطبي',
                    'phones' => ['07829958377'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'علاء احمد الكطاع',
                    'email' => null,
                    'phone' => '07830222057',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 22,
                    'certificate' => 'دكتوراه جراحة عامة (جراحة عامة و جراحة امراض الجهاز الهضمي - جراحة الغدد و الاورام - جراحة و أمراض الثدي جراحة و رتق الفتوق بأنواعها - البواسير و الناسور و الفطر الشرجي شفق الشحوم - علاج السمنة و تجميل البطن رفع المرارة والزائدة الدودية)',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => ' الشارع العام - مجمع الحياة الطبي',
                    'phones' => ['07830222057'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'محمد حازم البياتي',
                    'email' => null,
                    'phone' => '07839944422',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 22,
                    'certificate' => 'طبيب اختصاص جراحه عامة ومعالج وجراح في الغدة الدرقية - امراض الثدي النساء و الرجال -  قص المعدة- نحت وتجميل البطن- السمنه- البواسير والفطر الشرجي- رفع الزائده الدوديه والمراره بالناظور- و الفتوق بأنواعها',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'مجمع الحياة - شارع العام - قرب مستشفى الصفوة',
                    'phones' => ['07839944422', '07723743053'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'خليل مضعن',
                    'email' => null,
                    'phone' => '07822559338',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 18,
                    'certificate' => 'أخصائي الأمراض الصدرية- باطنية- قلبية- الربو- الحساسية- تدرن وأمراض الحمى- التيفونيد- حمى مالطا',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء - مجمع الماس الطبي',
                    'phones' => ['07822559338', '07736739995'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'مهند دحام العاني',
                    'email' => null,
                    'phone' => '07843311449',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 18,
                    'certificate' => 'متخصص بالامراض الصدرية والتنفسية وأمراض الربو القصبي والحساسية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مجمع المسار الطبي',
                    'phones' => ['07843311449'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'باسل عبد الغني سعيد',
                    'email' => null,
                    'phone' => '07904260259',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 18,
                    'certificate' => 'إختصاصي أمراض الأطفال ( بريطانيا ) وحديثي الولادة والخدج أمراض الربو والحساسية والجملة العصبية لدى الأطفال',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'التأميم- شارع جامع الشافعي قرب صيدلية مشتاق طالب',
                    'phones' => ['07904260259'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'احمد حازم السامرائي',
                    'email' => null,
                    'phone' => '07811314800',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 20,
                    'certificate' => 'بورد دكتوراة جراحة الأورام وامراض الثدي',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع ركن اول فرع يميناً - مجاور صيدلية الامتياز',
                    'phones' => ['07811314800'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'هاله ساطع العاني',
                    'email' => null,
                    'phone' => '07829309111',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 20,
                    'certificate' => 'اختصاص الغدد والاورام والكشف المبكر للسرطان',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'كراج التاميم القديم - مقابيل دائرة الضريبة',
                    'phones' => ['07829309111'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'احمد تين احمد',
                    'email' => null,
                    'phone' => '07808449263',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 20,
                    'certificate' => 'بورد الدكتوراه في طب الاورام عضو الجمعية الاوربية لطب الاورام',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07808449263'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'نبيل مظهر طالب الحديثي',
                    'email' => null,
                    'phone' => '07810169827',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 20,
                    'certificate' => 'بورد (دكتوراه) طب الأورام وأمراض الدم السرطانية وزرع نخاع العظم',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07810169827'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ايمن عدنان الديلان',
                    'email' => null,
                    'phone' => '07734422612',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 20,
                    'certificate' => 'بورد دكتوراه في طب الاورام وامراض الدم السرطانية',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مجمع الطائف',
                    'phones' => ['07734422612', '07829050724'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'عبد مصلح مطر',
                    'email' => null,
                    'phone' => '07800416496',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 17,
                    'certificate' => 'اختصاص جراحة العظام والكسور وآلام المفاصل',
                ],
                'clinic' => [
                    'name' => null,
                    'category_ids' => [6, 17],
                    'address' => 'شارع المستودع _ مقابل بناية الضريبة القديمة',
                    'phones' => ['07800416496'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'حازم حمدان الدليمي',
                    'email' => null,
                    'phone' => '07808682672',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 11,
                    'certificate' => 'طبيب مفاصل وتأهيل طبي، تخطيط الاعصاب والعضلات',
                ],
                'clinic' => [
                    'name' => null,
                    'category_ids' => [6, 11, 17],
                    'address' => 'شارع الاطباء - مجمع السعادة الطبي',
                    'phones' => ['07808682672'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'علي سليمان',
                    'email' => null,
                    'phone' => '07905097052',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 17,
                    'certificate' => 'اختصاص جراحة العظام والكسور والمفاصل.',
                ],
                'clinic' => [
                    'name' => null,
                    'category_ids' => [6, 17, 11],
                    'address' => 'شارع المستودع - مجمع الوسام الطبي',
                    'phones' => ['07905097052'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ريكان ابراهيم الخلف',
                    'email' => null,
                    'phone' => '07854623217',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 15,
                    'certificate' => 'اختصاص دكتوراه ( شهادة البورد ) الطب النفسي',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المحافظه القديم - ساحة الضريبة مجمع الفا الطبي',
                    'phones' => ['07854623217'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'احمد ياسين خضر العاني',
                    'email' => null,
                    'phone' => '07864119665',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 15,
                    'certificate' => 'اخصائي الطب النفسي والعصبي',
                ],
                'clinic' => [
                    'name' => null,
                    'category_ids' => [5, 15],
                    'address' => 'شارع المستودع - مجمع الخضراء الطبي',
                    'phones' => ['07864119665'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'سرمد يحيى نزهت العبيدي',
                    'email' => null,
                    'phone' => '07851670770',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 15,
                    'certificate' => 'طبيب نفسي أمراض نفسية. شقيقة. قالون عصبي توحد. تأخر النطق. الادمان. صدمة اضطرابات نفسية. اضطراب طيف التوحد',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مجمع أبن النفيس الطبي',
                    'phones' => ['07851670770'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ليثم نافع الشايع',
                    'email' => null,
                    'phone' => '07800926711',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 14,
                    'certificate' => 'دبلوم سونار / ودوبلر ملون /  سونار رباعي الابعاد، فحص الغدة الدرقية والثدي فحص الحوض والبطن',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء',
                    'phones' => ['07800926711', '07826026428'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'فاطمة عامر احمد',
                    'email' => null,
                    'phone' => '07860028898',
                    'password' => '123456',
                    'gender' => 0,
                    'role' => Roles::Doctor->name,
                    'category_id' => 14,
                    'certificate' => 'طبيبة الاشعة التشخيصية للفحص بالسونار والدوبلر ملون',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع المستودع - مجمع المستقبل',
                    'phones' => ['07860028898'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'زاهد عبدالكريم',
                    'email' => null,
                    'phone' => '07830868499',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 14,
                    'certificate' => 'أخصائي السونار',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'شارع الاطباء - مجمع الفيصل',
                    'phones' => ['07830868499'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'مصطفى يوسف عبد',
                    'email' => null,
                    'phone' => '07801123292',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 7,
                    'certificate' => 'اختصاص طب وجراحة العيون',
                ],
                'clinic' => [
                    'name' => null,
                    'address' => 'الشارع العام ، مجمع قتيبة الطبي',
                    'phones' => ['07801123292'],
                ]
            ],
            [
                'doctor' => [
                    'name' => 'ذاكر محمد محسن',
                    'email' => null,
                    'phone' => '07830687000',
                    'password' => '123456',
                    'gender' => 1,
                    'role' => Roles::Doctor->name,
                    'category_id' => 7,
                    'certificate' => 'اختصاص طب وجراحة العيون',
                ],
                'clinic' => [
                    'name' => null,
                    'address' =>'الشارع العام - خلف مستشفى الصفوة',
                    'phones' => ['07830687000'],
                ]
            ],
        ];

        // **************************************************
        // Seed Of Categories
        // **************************************************

        $specialties = [
            ['id' => 1, 'name' => 'الباطنية'],
            ['id' => 2, 'name' => 'طب الأطفال وحديثي الولادة'],
            ['id' => 3, 'name' => 'الانف والاذن والحنجرة'],
            ['id' => 4, 'name' => 'الكلى والمسالك البولية'],
            ['id' => 5, 'name' => 'الجملة العصبية'],
            ['id' => 6, 'name' => 'جراحة العظام والمفاصل'],
            ['id' => 7, 'name' => 'طب العيون'],
            ['id' => 8, 'name' => ' النسائية والتوليد'],
            ['id' => 9, 'name' => 'باطنية وقلبية وصدرية'],
            ['id' => 10, 'name' => 'القلبية والأوعية الدموية'],
            ['id' => 11, 'name' => 'المفاصل والطب الطبيعي والتأهيل'],
            ['id' => 12, 'name' => 'تجميل الأسنان'],
            ['id' => 13, 'name' => 'الجلدية والتناسلية'],
            ['id' => 14, 'name' => 'الاشعة التشخيصية والسونار'],
            ['id' => 15, 'name' => 'الطب النفسي والامراض العقلية'],
            ['id' => 16, 'name' => 'المفاصل والروماتزم والفقرات'],
            ['id' => 17, 'name' => 'الكسور والمفاصل'],
            ['id' => 18, 'name' => 'الصدرية والربو والحساسية'],
            ['id' => 19, 'name' => 'العقم واطفال الانابيب'],
            ['id' => 20, 'name' => 'الأورام السرطانية'],
            ['id' => 21, 'name' => 'الجهاز الهضمي والكبد'],
            ['id' => 22, 'name' => 'جراحة عامة'],
        ];


        foreach ($DoctorsAndClinicsas as  $doctorAndClinic) {
            $doctor = $doctorAndClinic['doctor'];
            $clinic = $doctorAndClinic['clinic'];

            $doctor['email'] = blank($doctor['email']) ? str($doctor['name'])->slug("_")->append('@doctor.com')->value() : $doctor['email'];

            if (is_integer($doctor['gender'])) {
                $doctor['gender'] = $doctor['gender'] == 1 ? 'Male' : 'Female';
            }

            $doctorCreated = User::query()->where('email', $doctor['email'])->exists() ?
                User::query()->where('email', $doctor['email'])->first() : User::query()->create($doctor);

            $clinic['name'] = blank($clinic['name']) ? (($doctor['gender'] == 'Female' ? 'الدكتورة ' : 'الدكتور ') . $doctor['name']) : $clinic['name'];

            $clinicCategories = [$doctorCreated->category_id];
            if (filled($clinic['category_ids'] ?? null)) {
                $clinicCategories = $clinic['category_ids'];
            }

            $clinicCreated = Clinic::query()->where('name', $clinic['name'])->exists() ?
                Clinic::query()->where('name', $clinic['name'])->first() : Clinic::query()->create(Arr::except($clinic, ['category_ids']));

            if (!$clinicCreated->users()->wherePivot('user_id', $doctorCreated->id)->exists()) {
                $clinicCreated->users()->attach($doctorCreated, ['role' => $doctor['role']]);
            }

            foreach ($clinicCategories as $clinicCategory) {
                if (!$clinicCreated->categories()->wherePivot('category_id', $clinicCategory)->exists()) {
                    $clinicCreated->categories()->attach($clinicCategory);
                }
            }
        }
    }
}
