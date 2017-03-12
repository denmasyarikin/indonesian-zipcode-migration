<?php

use Illuminate\Database\Seeder;

class _Region_Province_7 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['id'=>3741, 'code'=>'7', 'type'=>'province', 'name'=>'Province 7']);

        //Kalimantan Barat
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>12, 'regionable_type'=>'province']); //Kalimantan Barat
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>163, 'regionable_type'=>'city']); //Pontianak city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>164, 'regionable_type'=>'city']); //Kubu Raya regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>165, 'regionable_type'=>'city']); //Pontianak regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>166, 'regionable_type'=>'city']); //Sanggau regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>167, 'regionable_type'=>'city']); //Sintang regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>168, 'regionable_type'=>'city']); //Kapuas Hulu regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>169, 'regionable_type'=>'city']); //Ketapang regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>170, 'regionable_type'=>'city']); //Kayong Utara regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>171, 'regionable_type'=>'city']); //Singkawang city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>172, 'regionable_type'=>'city']); //Sambas regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>173, 'regionable_type'=>'city']); //Bengkayang regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>174, 'regionable_type'=>'city']); //Landak regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>175, 'regionable_type'=>'city']); //Sekadau regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>176, 'regionable_type'=>'city']); //Melawi regencies

        DB::table('regions')->insert(['id'=>3742, 'parent'=>3741, 'code'=>'781', 'type'=>'city', 'name'=>'City 781, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3742, 'regionable_id'=>163, 'regionable_type'=>'city']); //Pontianak city
        DB::table('regionables')->insert(['region_id'=>3742, 'regionable_id'=>165, 'regionable_type'=>'city']); //Pontianak regencies
            DB::table('regions')->insert(['id'=>3743, 'parent'=>3742, 'code'=>'7811', 'type'=>'districts', 'name'=>'Districts 7811, City 781, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3743, 'regionable_id'=>3272, 'regionable_type'=>'districts']); //Pontianak Kota
            DB::table('regionables')->insert(['region_id'=>3743, 'regionable_id'=>3273, 'regionable_type'=>'districts']); //Pontianak Barat
            DB::table('regionables')->insert(['region_id'=>3743, 'regionable_id'=>3296, 'regionable_type'=>'districts']); //Pontianak Kota
            DB::table('regionables')->insert(['region_id'=>3743, 'regionable_id'=>3297, 'regionable_type'=>'districts']); //Pontianak Barat
                DB::table('regions')->insert(['id'=>3744, 'parent'=>3743, 'code'=>'78113', 'type'=>'village', 'name'=>'Village 78113, Districts 7811, City 781, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3744, 'regionable_id'=>37509, 'regionable_type'=>'village']); //Sei/sungai Jawi
                DB::table('regionables')->insert(['region_id'=>3744, 'regionable_id'=>37512, 'regionable_type'=>'village']); //Sei/sungai Jawi Luar
                DB::table('regionables')->insert(['region_id'=>3744, 'regionable_id'=>37720, 'regionable_type'=>'village']); //Sei/sungai Jawi
                DB::table('regionables')->insert(['region_id'=>3744, 'regionable_id'=>37723, 'regionable_type'=>'village']); //Sei/sungai Jawi Luar
                DB::table('regions')->insert(['id'=>3745, 'parent'=>3743, 'code'=>'78114', 'type'=>'village', 'name'=>'Village 78114, Districts 7811, City 781, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3745, 'regionable_id'=>37513, 'regionable_type'=>'village']); //Pal Lima
                DB::table('regionables')->insert(['region_id'=>3745, 'regionable_id'=>37724, 'regionable_type'=>'village']); //Pal Lima
                DB::table('regions')->insert(['id'=>3746, 'parent'=>3743, 'code'=>'78115', 'type'=>'village', 'name'=>'Village 78115, Districts 7811, City 781, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3746, 'regionable_id'=>37514, 'regionable_type'=>'village']); //Sei/sungai Jawi Dalam
                DB::table('regionables')->insert(['region_id'=>3746, 'regionable_id'=>37725, 'regionable_type'=>'village']); //Sei/sungai Jawi Dalam
                DB::table('regions')->insert(['id'=>3747, 'parent'=>3743, 'code'=>'78117', 'type'=>'village', 'name'=>'Village 78117, Districts 7811, City 781, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3747, 'regionable_id'=>37511, 'regionable_type'=>'village']); //Darat Sekip
                DB::table('regionables')->insert(['region_id'=>3747, 'regionable_id'=>37515, 'regionable_type'=>'village']); //Sei/sungai Beliung
                DB::table('regionables')->insert(['region_id'=>3747, 'regionable_id'=>37722, 'regionable_type'=>'village']); //Darat Sekip
                DB::table('regionables')->insert(['region_id'=>3747, 'regionable_id'=>37726, 'regionable_type'=>'village']); //Sei/sungai Beliung
            DB::table('regions')->insert(['id'=>3748, 'parent'=>3742, 'code'=>'7812', 'type'=>'districts', 'name'=>'Districts 7812, City 781, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3748, 'regionable_id'=>3274, 'regionable_type'=>'districts']); //Pontianak Selatan
            DB::table('regionables')->insert(['region_id'=>3748, 'regionable_id'=>3275, 'regionable_type'=>'districts']); //Pontianak Tenggara
            DB::table('regionables')->insert(['region_id'=>3748, 'regionable_id'=>3298, 'regionable_type'=>'districts']); //Pontianak Selatan
            DB::table('regionables')->insert(['region_id'=>3748, 'regionable_id'=>3299, 'regionable_type'=>'districts']); //Pontianak Tenggara
                DB::table('regions')->insert(['id'=>3749, 'parent'=>3748, 'code'=>'78124', 'type'=>'village', 'name'=>'Village 78124, Districts 7812, City 781, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3749, 'regionable_id'=>37521, 'regionable_type'=>'village']); //Bangka Belitung Darat
                DB::table('regionables')->insert(['region_id'=>3749, 'regionable_id'=>37522, 'regionable_type'=>'village']); //Bangka Belitung Laut
                DB::table('regionables')->insert(['region_id'=>3749, 'regionable_id'=>37523, 'regionable_type'=>'village']); //Bansir Darat
                DB::table('regionables')->insert(['region_id'=>3749, 'regionable_id'=>37524, 'regionable_type'=>'village']); //Bansir Laut
                DB::table('regionables')->insert(['region_id'=>3749, 'regionable_id'=>37732, 'regionable_type'=>'village']); //Bangka Belitung Darat
                DB::table('regionables')->insert(['region_id'=>3749, 'regionable_id'=>37733, 'regionable_type'=>'village']); //Bangka Belitung Laut
                DB::table('regionables')->insert(['region_id'=>3749, 'regionable_id'=>37734, 'regionable_type'=>'village']); //Bansir Darat
                DB::table('regionables')->insert(['region_id'=>3749, 'regionable_id'=>37735, 'regionable_type'=>'village']); //Bansir Laut
            DB::table('regions')->insert(['id'=>3750, 'parent'=>3742, 'code'=>'7813', 'type'=>'districts', 'name'=>'Districts 7813, City 781, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3750, 'regionable_id'=>3276, 'regionable_type'=>'districts']); //Pontianak Timur
            DB::table('regionables')->insert(['region_id'=>3750, 'regionable_id'=>3300, 'regionable_type'=>'districts']); //Pontianak Timur
                DB::table('regions')->insert(['id'=>3751, 'parent'=>3750, 'code'=>'78132', 'type'=>'village', 'name'=>'Village 78132, Districts 7813, City 781, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3751, 'regionable_id'=>37525, 'regionable_type'=>'village']); //Saigon
                DB::table('regionables')->insert(['region_id'=>3751, 'regionable_id'=>37736, 'regionable_type'=>'village']); //Saigon
                DB::table('regions')->insert(['id'=>3752, 'parent'=>3750, 'code'=>'78137', 'type'=>'village', 'name'=>'Village 78137, Districts 7813, City 781, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3752, 'regionable_id'=>37526, 'regionable_type'=>'village']); //Tanjung Hulu
                DB::table('regionables')->insert(['region_id'=>3752, 'regionable_id'=>37737, 'regionable_type'=>'village']); //Tanjung Hulu
        DB::table('regions')->insert(['id'=>3753, 'parent'=>3741, 'code'=>'782', 'type'=>'city', 'name'=>'City 782, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3753, 'regionable_id'=>163, 'regionable_type'=>'city']); //Pontianak city
        DB::table('regionables')->insert(['region_id'=>3753, 'regionable_id'=>164, 'regionable_type'=>'city']); //Kubu Raya regencies
        DB::table('regionables')->insert(['region_id'=>3753, 'regionable_id'=>165, 'regionable_type'=>'city']); //Pontianak regencies
            DB::table('regions')->insert(['id'=>3754, 'parent'=>3753, 'code'=>'7823', 'type'=>'districts', 'name'=>'Districts 7823, City 782, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3754, 'regionable_id'=>3276, 'regionable_type'=>'districts']); //Pontianak Timur
            DB::table('regionables')->insert(['region_id'=>3754, 'regionable_id'=>3287, 'regionable_type'=>'districts']); //Sei/sungai Raya
            DB::table('regionables')->insert(['region_id'=>3754, 'regionable_id'=>3300, 'regionable_type'=>'districts']); //Pontianak Timur
                DB::table('regions')->insert(['id'=>3755, 'parent'=>3754, 'code'=>'78231', 'type'=>'village', 'name'=>'Village 78231, Districts 7823, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3755, 'regionable_id'=>37527, 'regionable_type'=>'village']); //Parit Mayor
                DB::table('regionables')->insert(['region_id'=>3755, 'regionable_id'=>37738, 'regionable_type'=>'village']); //Parit Mayor
                DB::table('regions')->insert(['id'=>3756, 'parent'=>3754, 'code'=>'78233', 'type'=>'village', 'name'=>'Village 78233, Districts 7823, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3756, 'regionable_id'=>37528, 'regionable_type'=>'village']); //Banjar Serasan
                DB::table('regionables')->insert(['region_id'=>3756, 'regionable_id'=>37739, 'regionable_type'=>'village']); //Banjar Serasan
                DB::table('regions')->insert(['id'=>3757, 'parent'=>3754, 'code'=>'78234', 'type'=>'village', 'name'=>'Village 78234, Districts 7823, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3757, 'regionable_id'=>37529, 'regionable_type'=>'village']); //Tambelan Sampit
                DB::table('regionables')->insert(['region_id'=>3757, 'regionable_id'=>37603, 'regionable_type'=>'village']); //Kapur
                DB::table('regionables')->insert(['region_id'=>3757, 'regionable_id'=>37740, 'regionable_type'=>'village']); //Tambelan Sampit
                DB::table('regions')->insert(['id'=>3758, 'parent'=>3754, 'code'=>'78235', 'type'=>'village', 'name'=>'Village 78235, Districts 7823, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3758, 'regionable_id'=>37530, 'regionable_type'=>'village']); //Dalam Bugis
                DB::table('regionables')->insert(['region_id'=>3758, 'regionable_id'=>37741, 'regionable_type'=>'village']); //Dalam Bugis
                DB::table('regions')->insert(['id'=>3759, 'parent'=>3754, 'code'=>'78236', 'type'=>'village', 'name'=>'Village 78236, Districts 7823, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3759, 'regionable_id'=>37531, 'regionable_type'=>'village']); //Tanjung Hilir
                DB::table('regionables')->insert(['region_id'=>3759, 'regionable_id'=>37742, 'regionable_type'=>'village']); //Tanjung Hilir
            DB::table('regions')->insert(['id'=>3760, 'parent'=>3753, 'code'=>'7824', 'type'=>'districts', 'name'=>'Districts 7824, City 782, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3760, 'regionable_id'=>3277, 'regionable_type'=>'districts']); //Pontianak Utara
            DB::table('regionables')->insert(['region_id'=>3760, 'regionable_id'=>3301, 'regionable_type'=>'districts']); //Pontianak Utara
                DB::table('regions')->insert(['id'=>3761, 'parent'=>3760, 'code'=>'78241', 'type'=>'village', 'name'=>'Village 78241, Districts 7824, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3761, 'regionable_id'=>37532, 'regionable_type'=>'village']); //Siantan Hulu
                DB::table('regionables')->insert(['region_id'=>3761, 'regionable_id'=>37743, 'regionable_type'=>'village']); //Siantan Hulu
                DB::table('regions')->insert(['id'=>3762, 'parent'=>3760, 'code'=>'78242', 'type'=>'village', 'name'=>'Village 78242, Districts 7824, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3762, 'regionable_id'=>37533, 'regionable_type'=>'village']); //Siantan Tengah
                DB::table('regionables')->insert(['region_id'=>3762, 'regionable_id'=>37744, 'regionable_type'=>'village']); //Siantan Tengah
                DB::table('regions')->insert(['id'=>3763, 'parent'=>3760, 'code'=>'78243', 'type'=>'village', 'name'=>'Village 78243, Districts 7824, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3763, 'regionable_id'=>37534, 'regionable_type'=>'village']); //Siantan Hilir
                DB::table('regionables')->insert(['region_id'=>3763, 'regionable_id'=>37745, 'regionable_type'=>'village']); //Siantan Hilir
                DB::table('regions')->insert(['id'=>3764, 'parent'=>3760, 'code'=>'78244', 'type'=>'village', 'name'=>'Village 78244, Districts 7824, City 782, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3764, 'regionable_id'=>37535, 'regionable_type'=>'village']); //Batu Layang
                DB::table('regionables')->insert(['region_id'=>3764, 'regionable_id'=>37746, 'regionable_type'=>'village']); //Batu Layang
        DB::table('regions')->insert(['id'=>3765, 'parent'=>3741, 'code'=>'783', 'type'=>'city', 'name'=>'City 783, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3765, 'regionable_id'=>163, 'regionable_type'=>'city']); //Pontianak city
        DB::table('regionables')->insert(['region_id'=>3765, 'regionable_id'=>164, 'regionable_type'=>'city']); //Kubu Raya regencies
        DB::table('regionables')->insert(['region_id'=>3765, 'regionable_id'=>165, 'regionable_type'=>'city']); //Pontianak regencies
            DB::table('regions')->insert(['id'=>3766, 'parent'=>3765, 'code'=>'7835', 'type'=>'districts', 'name'=>'Districts 7835, City 783, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3278, 'regionable_type'=>'districts']); //Siantan
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3279, 'regionable_type'=>'districts']); //Segedong
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3280, 'regionable_type'=>'districts']); //Anjongan
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3281, 'regionable_type'=>'districts']); //Sei/sungai Pinyuh
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3288, 'regionable_type'=>'districts']); //Kuala Mandor-b
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3302, 'regionable_type'=>'districts']); //Siantan
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3303, 'regionable_type'=>'districts']); //Segedong
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3304, 'regionable_type'=>'districts']); //Anjongan
            DB::table('regionables')->insert(['region_id'=>3766, 'regionable_id'=>3305, 'regionable_type'=>'districts']); //Sei/sungai Pinyuh
                DB::table('regions')->insert(['id'=>3767, 'parent'=>3766, 'code'=>'78353', 'type'=>'village', 'name'=>'Village 78353, Districts 7835, City 783, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37547, 'regionable_type'=>'village']); //Anjungan Dalam
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37548, 'regionable_type'=>'village']); //Anjungan Melancar
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37549, 'regionable_type'=>'village']); //Dema
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37550, 'regionable_type'=>'village']); //Kepayang
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37551, 'regionable_type'=>'village']); //Pak Bulu
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37552, 'regionable_type'=>'village']); //Jalan Galang
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37553, 'regionable_type'=>'village']); //Nusapati
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37554, 'regionable_type'=>'village']); //Peniraman
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37555, 'regionable_type'=>'village']); //Sei/sungai Bakau Besar Darat
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37556, 'regionable_type'=>'village']); //Sei/sungai Bakau Besar Laut
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37557, 'regionable_type'=>'village']); //Sei/sungai Batang
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37558, 'regionable_type'=>'village']); //Sei/sungai Pinyuh
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37559, 'regionable_type'=>'village']); //Sei/sungai Purun Kecil
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37560, 'regionable_type'=>'village']); //Sei/sungai Rasau
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37758, 'regionable_type'=>'village']); //Anjungan Dalam
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37759, 'regionable_type'=>'village']); //Anjungan Melancar
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37760, 'regionable_type'=>'village']); //Dema
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37761, 'regionable_type'=>'village']); //Kepayang
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37762, 'regionable_type'=>'village']); //Pak Bulu
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37763, 'regionable_type'=>'village']); //Jalan Galang
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37764, 'regionable_type'=>'village']); //Nusapati
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37765, 'regionable_type'=>'village']); //Peniraman
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37766, 'regionable_type'=>'village']); //Sei/sungai Bakau Besar Darat
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37767, 'regionable_type'=>'village']); //Sei/sungai Bakau Besar Laut
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37768, 'regionable_type'=>'village']); //Sei/sungai Batang
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37769, 'regionable_type'=>'village']); //Sei/sungai Pinyuh
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37770, 'regionable_type'=>'village']); //Sei/sungai Purun Kecil
                DB::table('regionables')->insert(['region_id'=>3767, 'regionable_id'=>37771, 'regionable_type'=>'village']); //Sei/sungai Rasau
            DB::table('regions')->insert(['id'=>3768, 'parent'=>3765, 'code'=>'7836', 'type'=>'districts', 'name'=>'Districts 7836, City 783, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3768, 'regionable_id'=>3282, 'regionable_type'=>'districts']); //Sadaniang
            DB::table('regionables')->insert(['region_id'=>3768, 'regionable_id'=>3283, 'regionable_type'=>'districts']); //Toho
            DB::table('regionables')->insert(['region_id'=>3768, 'regionable_id'=>3306, 'regionable_type'=>'districts']); //Sadaniang
            DB::table('regionables')->insert(['region_id'=>3768, 'regionable_id'=>3307, 'regionable_type'=>'districts']); //Toho
                DB::table('regions')->insert(['id'=>3769, 'parent'=>3768, 'code'=>'78361', 'type'=>'village', 'name'=>'Village 78361, Districts 7836, City 783, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37561, 'regionable_type'=>'village']); //Amawang/amawaking
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37562, 'regionable_type'=>'village']); //Ansiap
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37563, 'regionable_type'=>'village']); //Bumbun/bunbun
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37564, 'regionable_type'=>'village']); //Pentek
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37565, 'regionable_type'=>'village']); //Sekabuk
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37566, 'regionable_type'=>'village']); //Suak Berangan/barangan
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37567, 'regionable_type'=>'village']); //Benuang
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37568, 'regionable_type'=>'village']); //Kecurit
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37569, 'regionable_type'=>'village']); //Pak Laheng
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37570, 'regionable_type'=>'village']); //Pakutan
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37571, 'regionable_type'=>'village']); //Sembora/samboro
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37572, 'regionable_type'=>'village']); //Sepang
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37573, 'regionable_type'=>'village']); //Terap
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37574, 'regionable_type'=>'village']); //Toho Ilir
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37772, 'regionable_type'=>'village']); //Amawang/amawaking
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37773, 'regionable_type'=>'village']); //Ansiap
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37774, 'regionable_type'=>'village']); //Bumbun/bunbun
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37775, 'regionable_type'=>'village']); //Pentek
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37776, 'regionable_type'=>'village']); //Sekabuk
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37777, 'regionable_type'=>'village']); //Suak Berangan/barangan
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37778, 'regionable_type'=>'village']); //Benuang
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37779, 'regionable_type'=>'village']); //Kecurit
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37780, 'regionable_type'=>'village']); //Pak Laheng
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37781, 'regionable_type'=>'village']); //Pakutan
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37782, 'regionable_type'=>'village']); //Sembora/samboro
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37783, 'regionable_type'=>'village']); //Sepang
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37784, 'regionable_type'=>'village']); //Terap
                DB::table('regionables')->insert(['region_id'=>3769, 'regionable_id'=>37785, 'regionable_type'=>'village']); //Toho Ilir
            DB::table('regions')->insert(['id'=>3770, 'parent'=>3765, 'code'=>'7837', 'type'=>'districts', 'name'=>'Districts 7837, City 783, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3770, 'regionable_id'=>3284, 'regionable_type'=>'districts']); //Sei/sungai Kunyit
            DB::table('regionables')->insert(['region_id'=>3770, 'regionable_id'=>3308, 'regionable_type'=>'districts']); //Sei/sungai Kunyit
                DB::table('regions')->insert(['id'=>3771, 'parent'=>3770, 'code'=>'78371', 'type'=>'village', 'name'=>'Village 78371, Districts 7837, City 783, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37575, 'regionable_type'=>'village']); //Bukit Batu
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37576, 'regionable_type'=>'village']); //Mendalok
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37577, 'regionable_type'=>'village']); //Sei/sungai Bundung Laut
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37578, 'regionable_type'=>'village']); //Sei/sungai Dungun
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37579, 'regionable_type'=>'village']); //Sei/sungai Duri I (satu)
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37580, 'regionable_type'=>'village']); //Sei/sungai Duri Ii (dua)
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37581, 'regionable_type'=>'village']); //Sei/sungai Kunyit Dalam
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37582, 'regionable_type'=>'village']); //Sei/sungai Kunyit Hulu
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37583, 'regionable_type'=>'village']); //Sei/sungai Kunyit Laut
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37584, 'regionable_type'=>'village']); //Sei/sungai Limau
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37585, 'regionable_type'=>'village']); //Semparong Parit Raden
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37586, 'regionable_type'=>'village']); //Semudun
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37786, 'regionable_type'=>'village']); //Bukit Batu
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37787, 'regionable_type'=>'village']); //Mendalok
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37788, 'regionable_type'=>'village']); //Sei/sungai Bundung Laut
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37789, 'regionable_type'=>'village']); //Sei/sungai Dungun
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37790, 'regionable_type'=>'village']); //Sei/sungai Duri I (satu)
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37791, 'regionable_type'=>'village']); //Sei/sungai Duri Ii (dua)
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37792, 'regionable_type'=>'village']); //Sei/sungai Kunyit Dalam
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37793, 'regionable_type'=>'village']); //Sei/sungai Kunyit Hulu
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37794, 'regionable_type'=>'village']); //Sei/sungai Kunyit Laut
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37795, 'regionable_type'=>'village']); //Sei/sungai Limau
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37796, 'regionable_type'=>'village']); //Semparong Parit Raden
                DB::table('regionables')->insert(['region_id'=>3771, 'regionable_id'=>37797, 'regionable_type'=>'village']); //Semudun
        DB::table('regions')->insert(['id'=>3772, 'parent'=>3741, 'code'=>'785', 'type'=>'city', 'name'=>'City 785, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3772, 'regionable_id'=>166, 'regionable_type'=>'city']); //Sanggau regencies
            DB::table('regions')->insert(['id'=>3773, 'parent'=>3772, 'code'=>'7851', 'type'=>'districts', 'name'=>'Districts 7851, City 785, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3773, 'regionable_id'=>3311, 'regionable_type'=>'districts']); //Kapuas (sanggau Kapuas)
                DB::table('regions')->insert(['id'=>3774, 'parent'=>3773, 'code'=>'78511', 'type'=>'village', 'name'=>'Village 78511, Districts 7851, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3774, 'regionable_id'=>37814, 'regionable_type'=>'village']); //Bunut
                DB::table('regions')->insert(['id'=>3775, 'parent'=>3773, 'code'=>'78512', 'type'=>'village', 'name'=>'Village 78512, Districts 7851, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3775, 'regionable_id'=>37815, 'regionable_type'=>'village']); //Beringin
                DB::table('regions')->insert(['id'=>3776, 'parent'=>3773, 'code'=>'78513', 'type'=>'village', 'name'=>'Village 78513, Districts 7851, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3776, 'regionable_id'=>37816, 'regionable_type'=>'village']); //Ilir Kota
                DB::table('regions')->insert(['id'=>3777, 'parent'=>3773, 'code'=>'78514', 'type'=>'village', 'name'=>'Village 78514, Districts 7851, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3777, 'regionable_id'=>37817, 'regionable_type'=>'village']); //Sei/sungai Sengkuang
                DB::table('regions')->insert(['id'=>3778, 'parent'=>3773, 'code'=>'78515', 'type'=>'village', 'name'=>'Village 78515, Districts 7851, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3778, 'regionable_id'=>37818, 'regionable_type'=>'village']); //Tanjung Sekayam
                DB::table('regions')->insert(['id'=>3779, 'parent'=>3773, 'code'=>'78516', 'type'=>'village', 'name'=>'Village 78516, Districts 7851, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37819, 'regionable_type'=>'village']); //Belangin
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37820, 'regionable_type'=>'village']); //Botuh Lintang
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37821, 'regionable_type'=>'village']); //Entakai
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37822, 'regionable_type'=>'village']); //Kambong
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37823, 'regionable_type'=>'village']); //Lape
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37824, 'regionable_type'=>'village']); //Lintang Kapuas
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37825, 'regionable_type'=>'village']); //Lintang Pelaman
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37826, 'regionable_type'=>'village']); //Mengkiang
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37827, 'regionable_type'=>'village']); //Nanga Biang
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37828, 'regionable_type'=>'village']); //Pana
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37829, 'regionable_type'=>'village']); //Penyeladi
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37830, 'regionable_type'=>'village']); //Penyelimau Hilir
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37831, 'regionable_type'=>'village']); //Penyelimau Jaya
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37832, 'regionable_type'=>'village']); //Rambin
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37833, 'regionable_type'=>'village']); //Sei/sungai Alai
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37834, 'regionable_type'=>'village']); //Sei/sungai Batu
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37835, 'regionable_type'=>'village']); //Sei/sungai Mawang
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37836, 'regionable_type'=>'village']); //Sei/sungai Muntik
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37837, 'regionable_type'=>'village']); //Semerangkai
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37838, 'regionable_type'=>'village']); //Tanjung Kapuas
                DB::table('regionables')->insert(['region_id'=>3779, 'regionable_id'=>37839, 'regionable_type'=>'village']); //Tapang Dulang
            DB::table('regions')->insert(['id'=>3780, 'parent'=>3772, 'code'=>'7855', 'type'=>'districts', 'name'=>'Districts 7855, City 785, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3780, 'regionable_id'=>3312, 'regionable_type'=>'districts']); //Bonti
            DB::table('regionables')->insert(['region_id'=>3780, 'regionable_id'=>3313, 'regionable_type'=>'districts']); //Kembayan
            DB::table('regionables')->insert(['region_id'=>3780, 'regionable_id'=>3314, 'regionable_type'=>'districts']); //Noyan
            DB::table('regionables')->insert(['region_id'=>3780, 'regionable_id'=>3315, 'regionable_type'=>'districts']); //Beduai (beduwai)
            DB::table('regionables')->insert(['region_id'=>3780, 'regionable_id'=>3316, 'regionable_type'=>'districts']); //Sekayam
            DB::table('regionables')->insert(['region_id'=>3780, 'regionable_id'=>3317, 'regionable_type'=>'districts']); //Entikong
                DB::table('regions')->insert(['id'=>3781, 'parent'=>3780, 'code'=>'78557', 'type'=>'village', 'name'=>'Village 78557, Districts 7855, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3781, 'regionable_id'=>37880, 'regionable_type'=>'village']); //Entikong
                DB::table('regionables')->insert(['region_id'=>3781, 'regionable_id'=>37881, 'regionable_type'=>'village']); //Nekan
                DB::table('regionables')->insert(['region_id'=>3781, 'regionable_id'=>37882, 'regionable_type'=>'village']); //Pala Asang (palapasang)
                DB::table('regionables')->insert(['region_id'=>3781, 'regionable_id'=>37883, 'regionable_type'=>'village']); //Semangit (semanget)
                DB::table('regionables')->insert(['region_id'=>3781, 'regionable_id'=>37884, 'regionable_type'=>'village']); //Suruh Tembawang
            DB::table('regions')->insert(['id'=>3782, 'parent'=>3772, 'code'=>'7856', 'type'=>'districts', 'name'=>'Districts 7856, City 785, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3782, 'regionable_id'=>3318, 'regionable_type'=>'districts']); //Parindu
            DB::table('regionables')->insert(['region_id'=>3782, 'regionable_id'=>3319, 'regionable_type'=>'districts']); //Tayan Hulu
            DB::table('regionables')->insert(['region_id'=>3782, 'regionable_id'=>3320, 'regionable_type'=>'districts']); //Balai
            DB::table('regionables')->insert(['region_id'=>3782, 'regionable_id'=>3321, 'regionable_type'=>'districts']); //Tayan Hilir
                DB::table('regions')->insert(['id'=>3783, 'parent'=>3782, 'code'=>'78564', 'type'=>'village', 'name'=>'Village 78564, Districts 7856, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37922, 'regionable_type'=>'village']); //Balai Ingin
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37923, 'regionable_type'=>'village']); //Beginjan
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37924, 'regionable_type'=>'village']); //Cempedak
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37925, 'regionable_type'=>'village']); //Emberas
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37926, 'regionable_type'=>'village']); //Kawat
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37927, 'regionable_type'=>'village']); //Lalang
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37928, 'regionable_type'=>'village']); //Melugai
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37929, 'regionable_type'=>'village']); //Pedalaman
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37930, 'regionable_type'=>'village']); //Pulau Tayan Utara
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37931, 'regionable_type'=>'village']); //Sebemban
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37932, 'regionable_type'=>'village']); //Sei/sungai Jaman
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37933, 'regionable_type'=>'village']); //Sejotang
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37934, 'regionable_type'=>'village']); //Subah
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37935, 'regionable_type'=>'village']); //Tanjung Bunut
                DB::table('regionables')->insert(['region_id'=>3783, 'regionable_id'=>37936, 'regionable_type'=>'village']); //Tebang Benua
            DB::table('regions')->insert(['id'=>3784, 'parent'=>3772, 'code'=>'7857', 'type'=>'districts', 'name'=>'Districts 7857, City 785, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3784, 'regionable_id'=>3322, 'regionable_type'=>'districts']); //Meliau
            DB::table('regionables')->insert(['region_id'=>3784, 'regionable_id'=>3323, 'regionable_type'=>'districts']); //Toba
                DB::table('regions')->insert(['id'=>3785, 'parent'=>3784, 'code'=>'78572', 'type'=>'village', 'name'=>'Village 78572, Districts 7857, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3785, 'regionable_id'=>37956, 'regionable_type'=>'village']); //Bagan Asam
                DB::table('regionables')->insert(['region_id'=>3785, 'regionable_id'=>37957, 'regionable_type'=>'village']); //Balai Belungai
                DB::table('regionables')->insert(['region_id'=>3785, 'regionable_id'=>37958, 'regionable_type'=>'village']); //Belungai Dalam
                DB::table('regionables')->insert(['region_id'=>3785, 'regionable_id'=>37959, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>3785, 'regionable_id'=>37960, 'regionable_type'=>'village']); //Lumut
                DB::table('regionables')->insert(['region_id'=>3785, 'regionable_id'=>37961, 'regionable_type'=>'village']); //Sansat
                DB::table('regionables')->insert(['region_id'=>3785, 'regionable_id'=>37962, 'regionable_type'=>'village']); //Teraju (teraju Barat)
            DB::table('regions')->insert(['id'=>3786, 'parent'=>3772, 'code'=>'7858', 'type'=>'districts', 'name'=>'Districts 7858, City 785, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3786, 'regionable_id'=>3324, 'regionable_type'=>'districts']); //Mukok
                DB::table('regions')->insert(['id'=>3787, 'parent'=>3786, 'code'=>'78581', 'type'=>'village', 'name'=>'Village 78581, Districts 7858, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37963, 'regionable_type'=>'village']); //Engkode
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37964, 'regionable_type'=>'village']); //Inggis
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37965, 'regionable_type'=>'village']); //Kedukul
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37966, 'regionable_type'=>'village']); //Layak Omang
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37967, 'regionable_type'=>'village']); //Sei/sungai Mawang
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37968, 'regionable_type'=>'village']); //Semanggis Raya
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37969, 'regionable_type'=>'village']); //Semuntai
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37970, 'regionable_type'=>'village']); //Serambai Jaya
                DB::table('regionables')->insert(['region_id'=>3787, 'regionable_id'=>37971, 'regionable_type'=>'village']); //Trimulya
            DB::table('regions')->insert(['id'=>3788, 'parent'=>3772, 'code'=>'7859', 'type'=>'districts', 'name'=>'Districts 7859, City 785, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3788, 'regionable_id'=>3325, 'regionable_type'=>'districts']); //Jangkang
                DB::table('regions')->insert(['id'=>3789, 'parent'=>3788, 'code'=>'78591', 'type'=>'village', 'name'=>'Village 78591, Districts 7859, City 785, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37972, 'regionable_type'=>'village']); //Balai Sebut
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37973, 'regionable_type'=>'village']); //Empiyang
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37974, 'regionable_type'=>'village']); //Jangkang Benua
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37975, 'regionable_type'=>'village']); //Ketori
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37976, 'regionable_type'=>'village']); //Pisang
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37977, 'regionable_type'=>'village']); //Sape
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37978, 'regionable_type'=>'village']); //Selampung
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37979, 'regionable_type'=>'village']); //Semirau
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37980, 'regionable_type'=>'village']); //Semombat
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37981, 'regionable_type'=>'village']); //Tanggung
                DB::table('regionables')->insert(['region_id'=>3789, 'regionable_id'=>37982, 'regionable_type'=>'village']); //Terati
        DB::table('regions')->insert(['id'=>3790, 'parent'=>3741, 'code'=>'786', 'type'=>'city', 'name'=>'City 786, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3790, 'regionable_id'=>167, 'regionable_type'=>'city']); //Sintang regencies
            DB::table('regions')->insert(['id'=>3791, 'parent'=>3790, 'code'=>'7861', 'type'=>'districts', 'name'=>'Districts 7861, City 786, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3791, 'regionable_id'=>3326, 'regionable_type'=>'districts']); //Sintang
                DB::table('regions')->insert(['id'=>3792, 'parent'=>3791, 'code'=>'78611', 'type'=>'village', 'name'=>'Village 78611, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3792, 'regionable_id'=>37983, 'regionable_type'=>'village']); //Tanjung Kelansam
                DB::table('regionables')->insert(['region_id'=>3792, 'regionable_id'=>37984, 'regionable_type'=>'village']); //Tanjung Puri
                DB::table('regions')->insert(['id'=>3793, 'parent'=>3791, 'code'=>'78612', 'type'=>'village', 'name'=>'Village 78612, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3793, 'regionable_id'=>37985, 'regionable_type'=>'village']); //Baning Kota
                DB::table('regionables')->insert(['region_id'=>3793, 'regionable_id'=>37986, 'regionable_type'=>'village']); //Ladang
                DB::table('regions')->insert(['id'=>3794, 'parent'=>3791, 'code'=>'78613', 'type'=>'village', 'name'=>'Village 78613, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3794, 'regionable_id'=>37987, 'regionable_type'=>'village']); //Kapuas Kanan Hilir
                DB::table('regions')->insert(['id'=>3795, 'parent'=>3791, 'code'=>'78614', 'type'=>'village', 'name'=>'Village 78614, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3795, 'regionable_id'=>37988, 'regionable_type'=>'village']); //Kapuas Kanan Hulu
                DB::table('regions')->insert(['id'=>3796, 'parent'=>3791, 'code'=>'78615', 'type'=>'village', 'name'=>'Village 78615, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3796, 'regionable_id'=>37989, 'regionable_type'=>'village']); //Kapuas Kiri Hilir
                DB::table('regions')->insert(['id'=>3797, 'parent'=>3791, 'code'=>'78616', 'type'=>'village', 'name'=>'Village 78616, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3797, 'regionable_id'=>37990, 'regionable_type'=>'village']); //Kapuas Kiri Hulu
                DB::table('regionables')->insert(['region_id'=>3797, 'regionable_id'=>37991, 'regionable_type'=>'village']); //Mungguk Bantok
                DB::table('regionables')->insert(['region_id'=>3797, 'regionable_id'=>37992, 'regionable_type'=>'village']); //Teluk Kelansam
                DB::table('regionables')->insert(['region_id'=>3797, 'regionable_id'=>37993, 'regionable_type'=>'village']); //Tertong
                DB::table('regions')->insert(['id'=>3798, 'parent'=>3791, 'code'=>'78617', 'type'=>'village', 'name'=>'Village 78617, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3798, 'regionable_id'=>37994, 'regionable_type'=>'village']); //Anggah Jaya
                DB::table('regionables')->insert(['region_id'=>3798, 'regionable_id'=>37995, 'regionable_type'=>'village']); //Lalang Baru
                DB::table('regions')->insert(['id'=>3799, 'parent'=>3791, 'code'=>'78618', 'type'=>'village', 'name'=>'Village 78618, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3799, 'regionable_id'=>37996, 'regionable_type'=>'village']); //Merti Guna
                DB::table('regions')->insert(['id'=>3800, 'parent'=>3791, 'code'=>'78619', 'type'=>'village', 'name'=>'Village 78619, Districts 7861, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3800, 'regionable_id'=>37997, 'regionable_type'=>'village']); //Sungai Ana
            DB::table('regions')->insert(['id'=>3801, 'parent'=>3790, 'code'=>'7865', 'type'=>'districts', 'name'=>'Districts 7865, City 786, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3801, 'regionable_id'=>3327, 'regionable_type'=>'districts']); //Ketungau Hilir
            DB::table('regionables')->insert(['region_id'=>3801, 'regionable_id'=>3328, 'regionable_type'=>'districts']); //Ketungau Tengah
            DB::table('regionables')->insert(['region_id'=>3801, 'regionable_id'=>3329, 'regionable_type'=>'districts']); //Ketungau Hulu
            DB::table('regionables')->insert(['region_id'=>3801, 'regionable_id'=>3330, 'regionable_type'=>'districts']); //Sungai Tebelian
            DB::table('regionables')->insert(['region_id'=>3801, 'regionable_id'=>3331, 'regionable_type'=>'districts']); //Kelam Permai
                DB::table('regions')->insert(['id'=>3802, 'parent'=>3801, 'code'=>'78656', 'type'=>'village', 'name'=>'Village 78656, Districts 7865, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38074, 'regionable_type'=>'village']); //Baning Panjang
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38075, 'regionable_type'=>'village']); //Bengkuang
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38076, 'regionable_type'=>'village']); //Ensaid Panjang
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38077, 'regionable_type'=>'village']); //Gemba Raya
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38078, 'regionable_type'=>'village']); //Karya Jaya Bhakti
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38079, 'regionable_type'=>'village']); //Kebong
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38080, 'regionable_type'=>'village']); //Landau Kodam
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38081, 'regionable_type'=>'village']); //Mandiri Jaya
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38082, 'regionable_type'=>'village']); //Merpak
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38083, 'regionable_type'=>'village']); //Nanga Lebang
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38084, 'regionable_type'=>'village']); //Pelimping
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38085, 'regionable_type'=>'village']); //Sei/sungai Maram
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38086, 'regionable_type'=>'village']); //Sei/sungai Pukat
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38087, 'regionable_type'=>'village']); //Sepan Lebang
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38088, 'regionable_type'=>'village']); //Sungai Labi
                DB::table('regionables')->insert(['region_id'=>3802, 'regionable_id'=>38089, 'regionable_type'=>'village']); //Sungai Lais
            DB::table('regions')->insert(['id'=>3803, 'parent'=>3790, 'code'=>'7866', 'type'=>'districts', 'name'=>'Districts 7866, City 786, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3803, 'regionable_id'=>3332, 'regionable_type'=>'districts']); //Tempunak
            DB::table('regionables')->insert(['region_id'=>3803, 'regionable_id'=>3333, 'regionable_type'=>'districts']); //Sepauk
            DB::table('regionables')->insert(['region_id'=>3803, 'regionable_id'=>3334, 'regionable_type'=>'districts']); //Binjai Hulu
                DB::table('regions')->insert(['id'=>3804, 'parent'=>3803, 'code'=>'78663', 'type'=>'village', 'name'=>'Village 78663, Districts 7866, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38147, 'regionable_type'=>'village']); //Ampar Bedang
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38148, 'regionable_type'=>'village']); //Binjai Hilir
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38149, 'regionable_type'=>'village']); //Binjai Hulu
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38150, 'regionable_type'=>'village']); //Dak Jaya
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38151, 'regionable_type'=>'village']); //Empaka Kabiau Raya
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38152, 'regionable_type'=>'village']); //Mensiku
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38153, 'regionable_type'=>'village']); //Sei/sungai Risap
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38154, 'regionable_type'=>'village']); //Simba Raya
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38155, 'regionable_type'=>'village']); //Sungai Risap Mensiku Bersatu
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38156, 'regionable_type'=>'village']); //Telaga Dua
                DB::table('regionables')->insert(['region_id'=>3804, 'regionable_id'=>38157, 'regionable_type'=>'village']); //Telaga Satu
            DB::table('regions')->insert(['id'=>3805, 'parent'=>3790, 'code'=>'7868', 'type'=>'districts', 'name'=>'Districts 7868, City 786, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3805, 'regionable_id'=>3335, 'regionable_type'=>'districts']); //Serawai (nanga Serawai)
            DB::table('regionables')->insert(['region_id'=>3805, 'regionable_id'=>3336, 'regionable_type'=>'districts']); //Ambalau
                DB::table('regions')->insert(['id'=>3806, 'parent'=>3805, 'code'=>'78684', 'type'=>'village', 'name'=>'Village 78684, Districts 7868, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38182, 'regionable_type'=>'village']); //Buntut Pimpin
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38183, 'regionable_type'=>'village']); //Buntut Purun
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38184, 'regionable_type'=>'village']); //Buntut Sabon
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38185, 'regionable_type'=>'village']); //Kepala Jungai
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38186, 'regionable_type'=>'village']); //Nanga Ambalau
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38187, 'regionable_type'=>'village']); //Nanga Kemangai
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38188, 'regionable_type'=>'village']); //Nanga Keremoi
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38189, 'regionable_type'=>'village']); //Nanga Kesange
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38190, 'regionable_type'=>'village']); //Nanga Menakon
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38191, 'regionable_type'=>'village']); //Nanga Menantak
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38192, 'regionable_type'=>'village']); //Nanga Sakai
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38193, 'regionable_type'=>'village']); //Nanga Sake
                DB::table('regionables')->insert(['region_id'=>3806, 'regionable_id'=>38194, 'regionable_type'=>'village']); //Tanjung Andan
            DB::table('regions')->insert(['id'=>3807, 'parent'=>3790, 'code'=>'7869', 'type'=>'districts', 'name'=>'Districts 7869, City 786, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3807, 'regionable_id'=>3337, 'regionable_type'=>'districts']); //Dedai
            DB::table('regionables')->insert(['region_id'=>3807, 'regionable_id'=>3338, 'regionable_type'=>'districts']); //Kayan Hilir
            DB::table('regionables')->insert(['region_id'=>3807, 'regionable_id'=>3339, 'regionable_type'=>'districts']); //Kayan Hulu
                DB::table('regions')->insert(['id'=>3808, 'parent'=>3807, 'code'=>'78694', 'type'=>'village', 'name'=>'Village 78694, Districts 7869, City 786, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38241, 'regionable_type'=>'village']); //Buluh Merindu
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38242, 'regionable_type'=>'village']); //Empakan
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38243, 'regionable_type'=>'village']); //Empoyang
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38244, 'regionable_type'=>'village']); //Entogong
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38245, 'regionable_type'=>'village']); //Kerapuk Jaya
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38246, 'regionable_type'=>'village']); //Landau Bara
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38247, 'regionable_type'=>'village']); //Lintang Tambuk
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38248, 'regionable_type'=>'village']); //Mapan Jaya
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38249, 'regionable_type'=>'village']); //Merah Arai
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38250, 'regionable_type'=>'village']); //Merahau Permai
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38251, 'regionable_type'=>'village']); //Nanga Abai
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38252, 'regionable_type'=>'village']); //Nanga Laar
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38253, 'regionable_type'=>'village']); //Nanga Masau
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38254, 'regionable_type'=>'village']); //Nanga Oran
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38255, 'regionable_type'=>'village']); //Nanga Payak
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38256, 'regionable_type'=>'village']); //Nanga Tebidah
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38257, 'regionable_type'=>'village']); //Nanga Tonggoi
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38258, 'regionable_type'=>'village']); //Nanga Toran
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38259, 'regionable_type'=>'village']); //Nanga Ungai
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38260, 'regionable_type'=>'village']); //Nangkak Lestari
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38261, 'regionable_type'=>'village']); //Riam Muntik
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38262, 'regionable_type'=>'village']); //Riam Panjang
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38263, 'regionable_type'=>'village']); //Tanah Merah
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38264, 'regionable_type'=>'village']); //Tanjung Bunga
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38265, 'regionable_type'=>'village']); //Tanjung Lalau
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38266, 'regionable_type'=>'village']); //Tanjung Miru
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38267, 'regionable_type'=>'village']); //Tapang Manua
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38268, 'regionable_type'=>'village']); //Tonak Goneh
                DB::table('regionables')->insert(['region_id'=>3808, 'regionable_id'=>38269, 'regionable_type'=>'village']); //Topan Nanga
        DB::table('regions')->insert(['id'=>3809, 'parent'=>3741, 'code'=>'787', 'type'=>'city', 'name'=>'City 787, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3809, 'regionable_id'=>168, 'regionable_type'=>'city']); //Kapuas Hulu regencies
            DB::table('regions')->insert(['id'=>3810, 'parent'=>3809, 'code'=>'7871', 'type'=>'districts', 'name'=>'Districts 7871, City 787, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3810, 'regionable_id'=>3340, 'regionable_type'=>'districts']); //Putussibau Selatan
            DB::table('regionables')->insert(['region_id'=>3810, 'regionable_id'=>3341, 'regionable_type'=>'districts']); //Putussibau Utara
                DB::table('regions')->insert(['id'=>3811, 'parent'=>3810, 'code'=>'78716', 'type'=>'village', 'name'=>'Village 78716, Districts 7871, City 787, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38286, 'regionable_type'=>'village']); //Ariung Mendalam
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38287, 'regionable_type'=>'village']); //Banua Tanga
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38288, 'regionable_type'=>'village']); //Datah Dian
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38289, 'regionable_type'=>'village']); //Hilir Kantor
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38290, 'regionable_type'=>'village']); //Jangkang
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38291, 'regionable_type'=>'village']); //Lauk
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38292, 'regionable_type'=>'village']); //Nanga Awin
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38293, 'regionable_type'=>'village']); //Nanga Nyabau
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38294, 'regionable_type'=>'village']); //Nanga Sambus
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38295, 'regionable_type'=>'village']); //Padua Mendalam
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38296, 'regionable_type'=>'village']); //Pala Pulau
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38297, 'regionable_type'=>'village']); //Putussibau Kota
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38298, 'regionable_type'=>'village']); //Seluan
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38299, 'regionable_type'=>'village']); //Sibau Hilir
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38300, 'regionable_type'=>'village']); //Sibau Hulu
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38301, 'regionable_type'=>'village']); //Sungai Uluk Palin
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38302, 'regionable_type'=>'village']); //Tanjung Beruang
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38303, 'regionable_type'=>'village']); //Tanjung Karang
                DB::table('regionables')->insert(['region_id'=>3811, 'regionable_id'=>38304, 'regionable_type'=>'village']); //Tanjung Lasa
            DB::table('regions')->insert(['id'=>3812, 'parent'=>3809, 'code'=>'7875', 'type'=>'districts', 'name'=>'Districts 7875, City 787, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3812, 'regionable_id'=>3340, 'regionable_type'=>'districts']); //Putussibau Selatan
            DB::table('regionables')->insert(['region_id'=>3812, 'regionable_id'=>3342, 'regionable_type'=>'districts']); //Bika
            DB::table('regionables')->insert(['region_id'=>3812, 'regionable_id'=>3343, 'regionable_type'=>'districts']); //Embaloh Hilir
            DB::table('regionables')->insert(['region_id'=>3812, 'regionable_id'=>3344, 'regionable_type'=>'districts']); //Embaloh Hulu
            DB::table('regionables')->insert(['region_id'=>3812, 'regionable_id'=>3345, 'regionable_type'=>'districts']); //Kalis
            DB::table('regionables')->insert(['region_id'=>3812, 'regionable_id'=>3346, 'regionable_type'=>'districts']); //Mentebah
            DB::table('regionables')->insert(['region_id'=>3812, 'regionable_id'=>3347, 'regionable_type'=>'districts']); //Boyan Tanjung
            DB::table('regionables')->insert(['region_id'=>3812, 'regionable_id'=>3348, 'regionable_type'=>'districts']); //Pengkadan (batu Datu)
                DB::table('regions')->insert(['id'=>3813, 'parent'=>3812, 'code'=>'78759', 'type'=>'village', 'name'=>'Village 78759, Districts 7875, City 787, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38373, 'regionable_type'=>'village']); //Buak Limbang
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38374, 'regionable_type'=>'village']); //Hulu Pengkadan
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38375, 'regionable_type'=>'village']); //Kerangan Panjang
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38376, 'regionable_type'=>'village']); //Martadana
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38377, 'regionable_type'=>'village']); //Mawan
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38378, 'regionable_type'=>'village']); //Pengkadan Hilir
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38379, 'regionable_type'=>'village']); //Permata Perda
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38380, 'regionable_type'=>'village']); //Pinang Laka
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38381, 'regionable_type'=>'village']); //Riam Panjang
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38382, 'regionable_type'=>'village']); //Sasan
                DB::table('regionables')->insert(['region_id'=>3813, 'regionable_id'=>38383, 'regionable_type'=>'village']); //Sira Jaya
            DB::table('regions')->insert(['id'=>3814, 'parent'=>3809, 'code'=>'7876', 'type'=>'districts', 'name'=>'Districts 7876, City 787, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3349, 'regionable_type'=>'districts']); //Bunut Hilir
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3350, 'regionable_type'=>'districts']); //Bunut Hulu
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3351, 'regionable_type'=>'districts']); //Jongkong (jengkong)
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3352, 'regionable_type'=>'districts']); //Hulu Gurung
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3353, 'regionable_type'=>'districts']); //Selimbau
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3354, 'regionable_type'=>'districts']); //Batang Lupar
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3355, 'regionable_type'=>'districts']); //Badau
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3356, 'regionable_type'=>'districts']); //Empanang
            DB::table('regionables')->insert(['region_id'=>3814, 'regionable_id'=>3357, 'regionable_type'=>'districts']); //Puring Kencana
                DB::table('regions')->insert(['id'=>3815, 'parent'=>3814, 'code'=>'78769', 'type'=>'village', 'name'=>'Village 78769, Districts 7876, City 787, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3815, 'regionable_id'=>38481, 'regionable_type'=>'village']); //Kantuk Asam
                DB::table('regionables')->insert(['region_id'=>3815, 'regionable_id'=>38482, 'regionable_type'=>'village']); //Kantuk Bunut
                DB::table('regionables')->insert(['region_id'=>3815, 'regionable_id'=>38483, 'regionable_type'=>'village']); //Langau
                DB::table('regionables')->insert(['region_id'=>3815, 'regionable_id'=>38484, 'regionable_type'=>'village']); //Merakai Panjang
                DB::table('regionables')->insert(['region_id'=>3815, 'regionable_id'=>38485, 'regionable_type'=>'village']); //Sei/sungai Antu
                DB::table('regionables')->insert(['region_id'=>3815, 'regionable_id'=>38486, 'regionable_type'=>'village']); //Sei/sungai Asin
            DB::table('regions')->insert(['id'=>3816, 'parent'=>3809, 'code'=>'7877', 'type'=>'districts', 'name'=>'Districts 7877, City 787, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3816, 'regionable_id'=>3358, 'regionable_type'=>'districts']); //Semitau
            DB::table('regionables')->insert(['region_id'=>3816, 'regionable_id'=>3359, 'regionable_type'=>'districts']); //Seberuang
            DB::table('regionables')->insert(['region_id'=>3816, 'regionable_id'=>3360, 'regionable_type'=>'districts']); //Silat Hilir
            DB::table('regionables')->insert(['region_id'=>3816, 'regionable_id'=>3361, 'regionable_type'=>'districts']); //Silat Hulu
            DB::table('regionables')->insert(['region_id'=>3816, 'regionable_id'=>3362, 'regionable_type'=>'districts']); //Suhaid
                DB::table('regions')->insert(['id'=>3817, 'parent'=>3816, 'code'=>'78775', 'type'=>'village', 'name'=>'Village 78775, Districts 7877, City 787, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38541, 'regionable_type'=>'village']); //Jongkong Hulu
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38542, 'regionable_type'=>'village']); //Kerengas
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38543, 'regionable_type'=>'village']); //Laut Tawang
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38544, 'regionable_type'=>'village']); //Lubuk Pengail
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38545, 'regionable_type'=>'village']); //Madang Permai
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38546, 'regionable_type'=>'village']); //Mantan
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38547, 'regionable_type'=>'village']); //Menapar
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38548, 'regionable_type'=>'village']); //Mensusai
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38549, 'regionable_type'=>'village']); //Nanga Suhaid
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38550, 'regionable_type'=>'village']); //Tanjung Harapan
                DB::table('regionables')->insert(['region_id'=>3817, 'regionable_id'=>38551, 'regionable_type'=>'village']); //Tanjung Kapuas
        DB::table('regions')->insert(['id'=>3818, 'parent'=>3741, 'code'=>'788', 'type'=>'city', 'name'=>'City 788, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3818, 'regionable_id'=>169, 'regionable_type'=>'city']); //Ketapang regencies
        DB::table('regionables')->insert(['region_id'=>3818, 'regionable_id'=>170, 'regionable_type'=>'city']); //Kayong Utara regencies
            DB::table('regions')->insert(['id'=>3819, 'parent'=>3818, 'code'=>'7885', 'type'=>'districts', 'name'=>'Districts 7885, City 788, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3819, 'regionable_id'=>3368, 'regionable_type'=>'districts']); //Simpang Hulu
            DB::table('regionables')->insert(['region_id'=>3819, 'regionable_id'=>3369, 'regionable_type'=>'districts']); //Simpang Dua
            DB::table('regionables')->insert(['region_id'=>3819, 'regionable_id'=>3383, 'regionable_type'=>'districts']); //Sukadana
            DB::table('regionables')->insert(['region_id'=>3819, 'regionable_id'=>3384, 'regionable_type'=>'districts']); //Simpang Hilir
            DB::table('regionables')->insert(['region_id'=>3819, 'regionable_id'=>3385, 'regionable_type'=>'districts']); //Kepulauan Karimata
            DB::table('regionables')->insert(['region_id'=>3819, 'regionable_id'=>3386, 'regionable_type'=>'districts']); //Pulau Maya (pulau Maya Karimata)
            DB::table('regionables')->insert(['region_id'=>3819, 'regionable_id'=>3387, 'regionable_type'=>'districts']); //Teluk Batang
            DB::table('regionables')->insert(['region_id'=>3819, 'regionable_id'=>3388, 'regionable_type'=>'districts']); //Seponti
                DB::table('regions')->insert(['id'=>3820, 'parent'=>3819, 'code'=>'78857', 'type'=>'village', 'name'=>'Village 78857, Districts 7885, City 788, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3820, 'regionable_id'=>38838, 'regionable_type'=>'village']); //Durian Sebatang
                DB::table('regionables')->insert(['region_id'=>3820, 'regionable_id'=>38839, 'regionable_type'=>'village']); //Podo Rukun
                DB::table('regionables')->insert(['region_id'=>3820, 'regionable_id'=>38840, 'regionable_type'=>'village']); //Sei/sungai Sepeti
                DB::table('regionables')->insert(['region_id'=>3820, 'regionable_id'=>38841, 'regionable_type'=>'village']); //Seponti Jaya
                DB::table('regionables')->insert(['region_id'=>3820, 'regionable_id'=>38842, 'regionable_type'=>'village']); //Telaga Arum
                DB::table('regionables')->insert(['region_id'=>3820, 'regionable_id'=>38843, 'regionable_type'=>'village']); //Wonorejo
        DB::table('regions')->insert(['id'=>3821, 'parent'=>3741, 'code'=>'789', 'type'=>'city', 'name'=>'City 789, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3821, 'regionable_id'=>163, 'regionable_type'=>'city']); //Pontianak city
        DB::table('regionables')->insert(['region_id'=>3821, 'regionable_id'=>165, 'regionable_type'=>'city']); //Pontianak regencies
            DB::table('regions')->insert(['id'=>3822, 'parent'=>3821, 'code'=>'7891', 'type'=>'districts', 'name'=>'Districts 7891, City 789, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3822, 'regionable_id'=>3285, 'regionable_type'=>'districts']); //Mempawah Hilir
            DB::table('regionables')->insert(['region_id'=>3822, 'regionable_id'=>3286, 'regionable_type'=>'districts']); //Mempawah Timur
            DB::table('regionables')->insert(['region_id'=>3822, 'regionable_id'=>3309, 'regionable_type'=>'districts']); //Mempawah Hilir
            DB::table('regionables')->insert(['region_id'=>3822, 'regionable_id'=>3310, 'regionable_type'=>'districts']); //Mempawah Timur
                DB::table('regions')->insert(['id'=>3823, 'parent'=>3822, 'code'=>'78915', 'type'=>'village', 'name'=>'Village 78915, Districts 7891, City 789, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3823, 'regionable_id'=>37595, 'regionable_type'=>'village']); //Pasir Panjang
                DB::table('regionables')->insert(['region_id'=>3823, 'regionable_id'=>37596, 'regionable_type'=>'village']); //Pasir Wan Salim
                DB::table('regionables')->insert(['region_id'=>3823, 'regionable_id'=>37806, 'regionable_type'=>'village']); //Pasir Panjang
                DB::table('regionables')->insert(['region_id'=>3823, 'regionable_id'=>37807, 'regionable_type'=>'village']); //Pasir Wan Salim
                DB::table('regions')->insert(['id'=>3824, 'parent'=>3822, 'code'=>'78916', 'type'=>'village', 'name'=>'Village 78916, Districts 7891, City 789, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3824, 'regionable_id'=>37597, 'regionable_type'=>'village']); //Pasir Palembang
                DB::table('regionables')->insert(['region_id'=>3824, 'regionable_id'=>37808, 'regionable_type'=>'village']); //Pasir Palembang
                DB::table('regions')->insert(['id'=>3825, 'parent'=>3822, 'code'=>'78917', 'type'=>'village', 'name'=>'Village 78917, Districts 7891, City 789, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3825, 'regionable_id'=>37598, 'regionable_type'=>'village']); //Antibar
                DB::table('regionables')->insert(['region_id'=>3825, 'regionable_id'=>37599, 'regionable_type'=>'village']); //Pulau Pedalaman
                DB::table('regionables')->insert(['region_id'=>3825, 'regionable_id'=>37809, 'regionable_type'=>'village']); //Antibar
                DB::table('regionables')->insert(['region_id'=>3825, 'regionable_id'=>37810, 'regionable_type'=>'village']); //Pulau Pedalaman
                DB::table('regions')->insert(['id'=>3826, 'parent'=>3822, 'code'=>'78918', 'type'=>'village', 'name'=>'Village 78918, Districts 7891, City 789, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3826, 'regionable_id'=>37600, 'regionable_type'=>'village']); //Sejegi
                DB::table('regionables')->insert(['region_id'=>3826, 'regionable_id'=>37811, 'regionable_type'=>'village']); //Sejegi
                DB::table('regions')->insert(['id'=>3827, 'parent'=>3822, 'code'=>'78919', 'type'=>'village', 'name'=>'Village 78919, Districts 7891, City 789, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37591, 'regionable_type'=>'village']); //Malikian
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37592, 'regionable_type'=>'village']); //Pasir
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37593, 'regionable_type'=>'village']); //Penibungan
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37594, 'regionable_type'=>'village']); //Sengkubang
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37601, 'regionable_type'=>'village']); //Parit Banjar
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37602, 'regionable_type'=>'village']); //Sei/sungai Bakau Kecil
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37802, 'regionable_type'=>'village']); //Malikian
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37803, 'regionable_type'=>'village']); //Pasir
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37804, 'regionable_type'=>'village']); //Penibungan
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37805, 'regionable_type'=>'village']); //Sengkubang
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37812, 'regionable_type'=>'village']); //Parit Banjar
                DB::table('regionables')->insert(['region_id'=>3827, 'regionable_id'=>37813, 'regionable_type'=>'village']); //Sei/sungai Bakau Kecil
        DB::table('regions')->insert(['id'=>3828, 'parent'=>3741, 'code'=>'791', 'type'=>'city', 'name'=>'City 791, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3828, 'regionable_id'=>171, 'regionable_type'=>'city']); //Singkawang city
        DB::table('regionables')->insert(['region_id'=>3828, 'regionable_id'=>172, 'regionable_type'=>'city']); //Sambas regencies
        DB::table('regionables')->insert(['region_id'=>3828, 'regionable_id'=>173, 'regionable_type'=>'city']); //Bengkayang regencies
            DB::table('regions')->insert(['id'=>3829, 'parent'=>3828, 'code'=>'7918', 'type'=>'districts', 'name'=>'Districts 7918, City 791, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3829, 'regionable_id'=>3413, 'regionable_type'=>'districts']); //Monterado
                DB::table('regions')->insert(['id'=>3830, 'parent'=>3829, 'code'=>'79181', 'type'=>'village', 'name'=>'Village 79181, Districts 7918, City 791, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39053, 'regionable_type'=>'village']); //Beringin Baru
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39054, 'regionable_type'=>'village']); //Gerantung
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39055, 'regionable_type'=>'village']); //Goa Boma
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39056, 'regionable_type'=>'village']); //Jahandung
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39057, 'regionable_type'=>'village']); //Mekar Baru
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39058, 'regionable_type'=>'village']); //Monterado
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39059, 'regionable_type'=>'village']); //Nek Ginap
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39060, 'regionable_type'=>'village']); //Rantau
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39061, 'regionable_type'=>'village']); //Sendoreng
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39062, 'regionable_type'=>'village']); //Serindu
                DB::table('regionables')->insert(['region_id'=>3830, 'regionable_id'=>39063, 'regionable_type'=>'village']); //Siaga (nyempen)
        DB::table('regions')->insert(['id'=>3831, 'parent'=>3741, 'code'=>'792', 'type'=>'city', 'name'=>'City 792, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3831, 'regionable_id'=>171, 'regionable_type'=>'city']); //Singkawang city
        DB::table('regionables')->insert(['region_id'=>3831, 'regionable_id'=>173, 'regionable_type'=>'city']); //Bengkayang regencies
            DB::table('regions')->insert(['id'=>3832, 'parent'=>3831, 'code'=>'7921', 'type'=>'districts', 'name'=>'Districts 7921, City 792, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3832, 'regionable_id'=>3414, 'regionable_type'=>'districts']); //Bengkayang
            DB::table('regionables')->insert(['region_id'=>3832, 'regionable_id'=>3415, 'regionable_type'=>'districts']); //Sungai Betung
            DB::table('regionables')->insert(['region_id'=>3832, 'regionable_id'=>3416, 'regionable_type'=>'districts']); //Teriak
                DB::table('regions')->insert(['id'=>3833, 'parent'=>3832, 'code'=>'79214', 'type'=>'village', 'name'=>'Village 79214, Districts 7921, City 792, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39074, 'regionable_type'=>'village']); //Ampar Benteng
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39075, 'regionable_type'=>'village']); //Bana
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39076, 'regionable_type'=>'village']); //Bangun Sari
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39077, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39078, 'regionable_type'=>'village']); //Dharma Bhakti
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39079, 'regionable_type'=>'village']); //Lulang
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39080, 'regionable_type'=>'village']); //Malo Jelayan
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39081, 'regionable_type'=>'village']); //Puteng
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39082, 'regionable_type'=>'village']); //Sebente
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39083, 'regionable_type'=>'village']); //Sebetung Menyala
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39084, 'regionable_type'=>'village']); //Sekaruh
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39085, 'regionable_type'=>'village']); //Setia Jaya
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39086, 'regionable_type'=>'village']); //Sumber Karya
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39087, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39088, 'regionable_type'=>'village']); //Telidik
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39089, 'regionable_type'=>'village']); //Temia Sio
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39090, 'regionable_type'=>'village']); //Teriak
                DB::table('regionables')->insert(['region_id'=>3833, 'regionable_id'=>39091, 'regionable_type'=>'village']); //Tubajur
            DB::table('regions')->insert(['id'=>3834, 'parent'=>3831, 'code'=>'7925', 'type'=>'districts', 'name'=>'Districts 7925, City 792, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3834, 'regionable_id'=>3393, 'regionable_type'=>'districts']); //Singkawang Timur
            DB::table('regionables')->insert(['region_id'=>3834, 'regionable_id'=>3417, 'regionable_type'=>'districts']); //Tujuh Belas
                DB::table('regions')->insert(['id'=>3835, 'parent'=>3834, 'code'=>'79251', 'type'=>'village', 'name'=>'Village 79251, Districts 7925, City 792, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>38865, 'regionable_type'=>'village']); //Bagak Sahwa
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>38866, 'regionable_type'=>'village']); //Mayasopa
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>38867, 'regionable_type'=>'village']); //Nyarungkop
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>38868, 'regionable_type'=>'village']); //Pajintan
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>38869, 'regionable_type'=>'village']); //Sanggau Kolor
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>39092, 'regionable_type'=>'village']); //Bengkilu
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>39093, 'regionable_type'=>'village']); //Kamuh
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>39094, 'regionable_type'=>'village']); //Pisak
                DB::table('regionables')->insert(['region_id'=>3835, 'regionable_id'=>39095, 'regionable_type'=>'village']); //Sinar Tebudak
            DB::table('regions')->insert(['id'=>3836, 'parent'=>3831, 'code'=>'7927', 'type'=>'districts', 'name'=>'Districts 7927, City 792, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3836, 'regionable_id'=>3418, 'regionable_type'=>'districts']); //Capkala
            DB::table('regionables')->insert(['region_id'=>3836, 'regionable_id'=>3419, 'regionable_type'=>'districts']); //Sungai Raya Kepulauan
            DB::table('regionables')->insert(['region_id'=>3836, 'regionable_id'=>3420, 'regionable_type'=>'districts']); //Sungai Raya
                DB::table('regions')->insert(['id'=>3837, 'parent'=>3836, 'code'=>'79271', 'type'=>'village', 'name'=>'Village 79271, Districts 7927, City 792, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39096, 'regionable_type'=>'village']); //Aris
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39097, 'regionable_type'=>'village']); //Capkala
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39098, 'regionable_type'=>'village']); //Mandor
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39099, 'regionable_type'=>'village']); //Pawangi
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39100, 'regionable_type'=>'village']); //Sabandut
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39101, 'regionable_type'=>'village']); //Setanduk
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39102, 'regionable_type'=>'village']); //Karimunting
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39103, 'regionable_type'=>'village']); //Pulau Lemukutan
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39104, 'regionable_type'=>'village']); //Rukma Jaya
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39105, 'regionable_type'=>'village']); //Sei/sungai Keran
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39106, 'regionable_type'=>'village']); //Sei/sungai Raya
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39107, 'regionable_type'=>'village']); //Sei/sungai Duri
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39108, 'regionable_type'=>'village']); //Sei/sungai Jaga A
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39109, 'regionable_type'=>'village']); //Sei/sungai Jaga B
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39110, 'regionable_type'=>'village']); //Sei/sungai Pangkalan I
                DB::table('regionables')->insert(['region_id'=>3837, 'regionable_id'=>39111, 'regionable_type'=>'village']); //Sei/sungai Pangkalan Ii
            DB::table('regions')->insert(['id'=>3838, 'parent'=>3831, 'code'=>'7928', 'type'=>'districts', 'name'=>'Districts 7928, City 792, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3421, 'regionable_type'=>'districts']); //Samalantan
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3422, 'regionable_type'=>'districts']); //Lembah Bawang
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3423, 'regionable_type'=>'districts']); //Lumar
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3424, 'regionable_type'=>'districts']); //Suti Semarang
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3425, 'regionable_type'=>'districts']); //Ledo
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3426, 'regionable_type'=>'districts']); //Sanggau Ledo
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3427, 'regionable_type'=>'districts']); //Seluas
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3428, 'regionable_type'=>'districts']); //Jagoi Babang
            DB::table('regionables')->insert(['region_id'=>3838, 'regionable_id'=>3429, 'regionable_type'=>'districts']); //Siding
                DB::table('regions')->insert(['id'=>3839, 'parent'=>3838, 'code'=>'79286', 'type'=>'village', 'name'=>'Village 79286, Districts 7928, City 792, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39163, 'regionable_type'=>'village']); //Gersik
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39164, 'regionable_type'=>'village']); //Jagoi
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39165, 'regionable_type'=>'village']); //Kumba
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39166, 'regionable_type'=>'village']); //Sekida (jagoi Sekida)
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39167, 'regionable_type'=>'village']); //Semunyin Jaya
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39168, 'regionable_type'=>'village']); //Sinar Baru
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39169, 'regionable_type'=>'village']); //Lhi Bui/lhibuie
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39170, 'regionable_type'=>'village']); //Siding
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39171, 'regionable_type'=>'village']); //Sungkung I
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39172, 'regionable_type'=>'village']); //Sungkung Ii
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39173, 'regionable_type'=>'village']); //Sungkung Iii
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39174, 'regionable_type'=>'village']); //Tamong
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39175, 'regionable_type'=>'village']); //Tangguh
                DB::table('regionables')->insert(['region_id'=>3839, 'regionable_id'=>39176, 'regionable_type'=>'village']); //Tawang
        DB::table('regions')->insert(['id'=>3840, 'parent'=>3741, 'code'=>'793', 'type'=>'city', 'name'=>'City 793, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3840, 'regionable_id'=>174, 'regionable_type'=>'city']); //Landak regencies
            DB::table('regions')->insert(['id'=>3841, 'parent'=>3840, 'code'=>'7935', 'type'=>'districts', 'name'=>'Districts 7935, City 793, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3841, 'regionable_id'=>3430, 'regionable_type'=>'districts']); //Mandor
            DB::table('regionables')->insert(['region_id'=>3841, 'regionable_id'=>3431, 'regionable_type'=>'districts']); //Sengah Temila
            DB::table('regionables')->insert(['region_id'=>3841, 'regionable_id'=>3432, 'regionable_type'=>'districts']); //Ngabang
            DB::table('regionables')->insert(['region_id'=>3841, 'regionable_id'=>3433, 'regionable_type'=>'districts']); //Jelimpo
            DB::table('regionables')->insert(['region_id'=>3841, 'regionable_id'=>3434, 'regionable_type'=>'districts']); //Sebangki
                DB::table('regions')->insert(['id'=>3842, 'parent'=>3841, 'code'=>'79358', 'type'=>'village', 'name'=>'Village 79358, Districts 7935, City 793, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3842, 'regionable_id'=>39240, 'regionable_type'=>'village']); //Agak
                DB::table('regionables')->insert(['region_id'=>3842, 'regionable_id'=>39241, 'regionable_type'=>'village']); //Kumpang Tengah
                DB::table('regionables')->insert(['region_id'=>3842, 'regionable_id'=>39242, 'regionable_type'=>'village']); //Rantau Panjang
                DB::table('regionables')->insert(['region_id'=>3842, 'regionable_id'=>39243, 'regionable_type'=>'village']); //Sebangki
                DB::table('regionables')->insert(['region_id'=>3842, 'regionable_id'=>39244, 'regionable_type'=>'village']); //Sei/sungai Segak
            DB::table('regions')->insert(['id'=>3843, 'parent'=>3840, 'code'=>'7936', 'type'=>'districts', 'name'=>'Districts 7936, City 793, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3843, 'regionable_id'=>3435, 'regionable_type'=>'districts']); //Menjalin
            DB::table('regionables')->insert(['region_id'=>3843, 'regionable_id'=>3436, 'regionable_type'=>'districts']); //Sompak
            DB::table('regionables')->insert(['region_id'=>3843, 'regionable_id'=>3437, 'regionable_type'=>'districts']); //Mempawah Hulu
            DB::table('regionables')->insert(['region_id'=>3843, 'regionable_id'=>3438, 'regionable_type'=>'districts']); //Menyuke
            DB::table('regionables')->insert(['region_id'=>3843, 'regionable_id'=>3439, 'regionable_type'=>'districts']); //Banyuke Hulu
            DB::table('regionables')->insert(['region_id'=>3843, 'regionable_id'=>3440, 'regionable_type'=>'districts']); //Air Besar
            DB::table('regionables')->insert(['region_id'=>3843, 'regionable_id'=>3441, 'regionable_type'=>'districts']); //Meranti
            DB::table('regionables')->insert(['region_id'=>3843, 'regionable_id'=>3442, 'regionable_type'=>'districts']); //Kuala Behe
                DB::table('regions')->insert(['id'=>3844, 'parent'=>3843, 'code'=>'79367', 'type'=>'village', 'name'=>'Village 79367, Districts 7936, City 793, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39322, 'regionable_type'=>'village']); //Angkanyar
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39323, 'regionable_type'=>'village']); //Bengawan Ampar
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39324, 'regionable_type'=>'village']); //Kedama
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39325, 'regionable_type'=>'village']); //Kuala Behe
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39326, 'regionable_type'=>'village']); //Nyayum
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39327, 'regionable_type'=>'village']); //Paku Raya
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39328, 'regionable_type'=>'village']); //Permiit
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39329, 'regionable_type'=>'village']); //Sehe Lusur
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39330, 'regionable_type'=>'village']); //Sejowet
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39331, 'regionable_type'=>'village']); //Semedang (sumedang)
                DB::table('regionables')->insert(['region_id'=>3844, 'regionable_id'=>39332, 'regionable_type'=>'village']); //Tanjung Balai
        DB::table('regions')->insert(['id'=>3845, 'parent'=>3741, 'code'=>'794', 'type'=>'city', 'name'=>'City 794, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3845, 'regionable_id'=>172, 'regionable_type'=>'city']); //Sambas regencies
            DB::table('regions')->insert(['id'=>3846, 'parent'=>3845, 'code'=>'7941', 'type'=>'districts', 'name'=>'Districts 7941, City 794, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3846, 'regionable_id'=>3395, 'regionable_type'=>'districts']); //Subah
                DB::table('regions')->insert(['id'=>3847, 'parent'=>3846, 'code'=>'79417', 'type'=>'village', 'name'=>'Village 79417, Districts 7941, City 794, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38879, 'regionable_type'=>'village']); //Balai Gemuruh
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38880, 'regionable_type'=>'village']); //Bukit Mulya
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38881, 'regionable_type'=>'village']); //Madak
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38882, 'regionable_type'=>'village']); //Mensade
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38883, 'regionable_type'=>'village']); //Mukti Raharja
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38884, 'regionable_type'=>'village']); //Sabung
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38885, 'regionable_type'=>'village']); //Sei/sungai Deden
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38886, 'regionable_type'=>'village']); //Sei/sungai Sapak
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38887, 'regionable_type'=>'village']); //Sempurna
                DB::table('regionables')->insert(['region_id'=>3847, 'regionable_id'=>38888, 'regionable_type'=>'village']); //Tebuah Elok
            DB::table('regions')->insert(['id'=>3848, 'parent'=>3845, 'code'=>'7945', 'type'=>'districts', 'name'=>'Districts 7945, City 794, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3848, 'regionable_id'=>3396, 'regionable_type'=>'districts']); //Selakau
            DB::table('regionables')->insert(['region_id'=>3848, 'regionable_id'=>3397, 'regionable_type'=>'districts']); //Selakau Timur
            DB::table('regionables')->insert(['region_id'=>3848, 'regionable_id'=>3398, 'regionable_type'=>'districts']); //Galing
            DB::table('regionables')->insert(['region_id'=>3848, 'regionable_id'=>3399, 'regionable_type'=>'districts']); //Pemangkat
            DB::table('regionables')->insert(['region_id'=>3848, 'regionable_id'=>3400, 'regionable_type'=>'districts']); //Salatiga
            DB::table('regionables')->insert(['region_id'=>3848, 'regionable_id'=>3401, 'regionable_type'=>'districts']); //Semparuk
            DB::table('regionables')->insert(['region_id'=>3848, 'regionable_id'=>3402, 'regionable_type'=>'districts']); //Jawai
                DB::table('regions')->insert(['id'=>3849, 'parent'=>3848, 'code'=>'79454', 'type'=>'village', 'name'=>'Village 79454, Districts 7945, City 794, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38927, 'regionable_type'=>'village']); //Bakau
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38928, 'regionable_type'=>'village']); //Dungun Laut
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38929, 'regionable_type'=>'village']); //Parit Setia
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38930, 'regionable_type'=>'village']); //Pelimpaan
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38931, 'regionable_type'=>'village']); //Sarang Burung Danau
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38932, 'regionable_type'=>'village']); //Sarang Burung Kolam
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38933, 'regionable_type'=>'village']); //Sarang Burung Kuala
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38934, 'regionable_type'=>'village']); //Sarang Burung Usrat
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38935, 'regionable_type'=>'village']); //Sei/sungai Nilam
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38936, 'regionable_type'=>'village']); //Sei/sungai Nyirih
                DB::table('regionables')->insert(['region_id'=>3849, 'regionable_id'=>38937, 'regionable_type'=>'village']); //Sentebang
            DB::table('regions')->insert(['id'=>3850, 'parent'=>3845, 'code'=>'7946', 'type'=>'districts', 'name'=>'Districts 7946, City 794, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3403, 'regionable_type'=>'districts']); //Tebas
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3404, 'regionable_type'=>'districts']); //Sajad
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3405, 'regionable_type'=>'districts']); //Sambas
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3406, 'regionable_type'=>'districts']); //Sebawi
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3407, 'regionable_type'=>'districts']); //Sejangkung
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3408, 'regionable_type'=>'districts']); //Tangaran
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3409, 'regionable_type'=>'districts']); //Teluk Keramat
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3410, 'regionable_type'=>'districts']); //Tekarang
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3411, 'regionable_type'=>'districts']); //Paloh
            DB::table('regionables')->insert(['region_id'=>3850, 'regionable_id'=>3412, 'regionable_type'=>'districts']); //Sajingan Besar
                DB::table('regions')->insert(['id'=>3851, 'parent'=>3850, 'code'=>'79467', 'type'=>'village', 'name'=>'Village 79467, Districts 7946, City 794, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3851, 'regionable_id'=>39048, 'regionable_type'=>'village']); //Kaliau
                DB::table('regionables')->insert(['region_id'=>3851, 'regionable_id'=>39049, 'regionable_type'=>'village']); //Sanatab
                DB::table('regionables')->insert(['region_id'=>3851, 'regionable_id'=>39050, 'regionable_type'=>'village']); //Santaban
                DB::table('regionables')->insert(['region_id'=>3851, 'regionable_id'=>39051, 'regionable_type'=>'village']); //Sebunga
                DB::table('regionables')->insert(['region_id'=>3851, 'regionable_id'=>39052, 'regionable_type'=>'village']); //Sei/sungai Bening
        DB::table('regions')->insert(['id'=>3852, 'parent'=>3741, 'code'=>'795', 'type'=>'city', 'name'=>'City 795, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3852, 'regionable_id'=>175, 'regionable_type'=>'city']); //Sekadau regencies
            DB::table('regions')->insert(['id'=>3853, 'parent'=>3852, 'code'=>'7951', 'type'=>'districts', 'name'=>'Districts 7951, City 795, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3853, 'regionable_id'=>3443, 'regionable_type'=>'districts']); //Sekadau Hilir
                DB::table('regions')->insert(['id'=>3854, 'parent'=>3853, 'code'=>'79511', 'type'=>'village', 'name'=>'Village 79511, Districts 7951, City 795, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3854, 'regionable_id'=>39333, 'regionable_type'=>'village']); //Mungguk
                DB::table('regionables')->insert(['region_id'=>3854, 'regionable_id'=>39334, 'regionable_type'=>'village']); //Tanjung
                DB::table('regions')->insert(['id'=>3855, 'parent'=>3853, 'code'=>'79512', 'type'=>'village', 'name'=>'Village 79512, Districts 7951, City 795, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3855, 'regionable_id'=>39335, 'regionable_type'=>'village']); //Merapi
                DB::table('regionables')->insert(['region_id'=>3855, 'regionable_id'=>39336, 'regionable_type'=>'village']); //Seraras
                DB::table('regions')->insert(['id'=>3856, 'parent'=>3853, 'code'=>'79513', 'type'=>'village', 'name'=>'Village 79513, Districts 7951, City 795, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3856, 'regionable_id'=>39337, 'regionable_type'=>'village']); //Engkersik
                DB::table('regionables')->insert(['region_id'=>3856, 'regionable_id'=>39338, 'regionable_type'=>'village']); //Tapang Semadak
                DB::table('regions')->insert(['id'=>3857, 'parent'=>3853, 'code'=>'79514', 'type'=>'village', 'name'=>'Village 79514, Districts 7951, City 795, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3857, 'regionable_id'=>39339, 'regionable_type'=>'village']); //Landau Kodah
                DB::table('regionables')->insert(['region_id'=>3857, 'regionable_id'=>39340, 'regionable_type'=>'village']); //Timpuk
                DB::table('regions')->insert(['id'=>3858, 'parent'=>3853, 'code'=>'79515', 'type'=>'village', 'name'=>'Village 79515, Districts 7951, City 795, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3858, 'regionable_id'=>39341, 'regionable_type'=>'village']); //Seberang Kapuas
                DB::table('regionables')->insert(['region_id'=>3858, 'regionable_id'=>39342, 'regionable_type'=>'village']); //Semabi
                DB::table('regions')->insert(['id'=>3859, 'parent'=>3853, 'code'=>'79516', 'type'=>'village', 'name'=>'Village 79516, Districts 7951, City 795, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3859, 'regionable_id'=>39343, 'regionable_type'=>'village']); //Ensalang
                DB::table('regionables')->insert(['region_id'=>3859, 'regionable_id'=>39344, 'regionable_type'=>'village']); //Peniti
                DB::table('regionables')->insert(['region_id'=>3859, 'regionable_id'=>39345, 'regionable_type'=>'village']); //Sei/sungai Kunyit
            DB::table('regions')->insert(['id'=>3860, 'parent'=>3852, 'code'=>'7958', 'type'=>'districts', 'name'=>'Districts 7958, City 795, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3860, 'regionable_id'=>3443, 'regionable_type'=>'districts']); //Sekadau Hilir
            DB::table('regionables')->insert(['region_id'=>3860, 'regionable_id'=>3444, 'regionable_type'=>'districts']); //Sekadau Hulu
            DB::table('regionables')->insert(['region_id'=>3860, 'regionable_id'=>3445, 'regionable_type'=>'districts']); //Nanga Taman
            DB::table('regionables')->insert(['region_id'=>3860, 'regionable_id'=>3446, 'regionable_type'=>'districts']); //Nanga Mahap
            DB::table('regionables')->insert(['region_id'=>3860, 'regionable_id'=>3447, 'regionable_type'=>'districts']); //Belitang Hilir
            DB::table('regionables')->insert(['region_id'=>3860, 'regionable_id'=>3448, 'regionable_type'=>'districts']); //Belitang Hulu
            DB::table('regionables')->insert(['region_id'=>3860, 'regionable_id'=>3449, 'regionable_type'=>'districts']); //Belitang
                DB::table('regions')->insert(['id'=>3861, 'parent'=>3860, 'code'=>'79588', 'type'=>'village', 'name'=>'Village 79588, Districts 7958, City 795, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3861, 'regionable_id'=>39413, 'regionable_type'=>'village']); //Belitang Dua
                DB::table('regionables')->insert(['region_id'=>3861, 'regionable_id'=>39414, 'regionable_type'=>'village']); //Belitang Satu
                DB::table('regionables')->insert(['region_id'=>3861, 'regionable_id'=>39415, 'regionable_type'=>'village']); //Maboh Permai
                DB::table('regionables')->insert(['region_id'=>3861, 'regionable_id'=>39416, 'regionable_type'=>'village']); //Menua Prama
                DB::table('regionables')->insert(['region_id'=>3861, 'regionable_id'=>39417, 'regionable_type'=>'village']); //Nanga Ansar
                DB::table('regionables')->insert(['region_id'=>3861, 'regionable_id'=>39418, 'regionable_type'=>'village']); //Padak
                DB::table('regionables')->insert(['region_id'=>3861, 'regionable_id'=>39419, 'regionable_type'=>'village']); //Setuntung
        DB::table('regions')->insert(['id'=>3862, 'parent'=>3741, 'code'=>'796', 'type'=>'city', 'name'=>'City 796, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3862, 'regionable_id'=>176, 'regionable_type'=>'city']); //Melawi regencies
            DB::table('regions')->insert(['id'=>3863, 'parent'=>3862, 'code'=>'7967', 'type'=>'districts', 'name'=>'Districts 7967, City 796, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3450, 'regionable_type'=>'districts']); //Belimbing
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3451, 'regionable_type'=>'districts']); //Belimbing Hulu
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3452, 'regionable_type'=>'districts']); //Nanga Pinoh
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3453, 'regionable_type'=>'districts']); //Pinoh Selatan
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3454, 'regionable_type'=>'districts']); //Pinoh Utara
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3455, 'regionable_type'=>'districts']); //Sayan
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3456, 'regionable_type'=>'districts']); //Tanah Pinoh
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3457, 'regionable_type'=>'districts']); //Tanah Pinoh Barat
            DB::table('regionables')->insert(['region_id'=>3863, 'regionable_id'=>3458, 'regionable_type'=>'districts']); //Sokan
                DB::table('regions')->insert(['id'=>3864, 'parent'=>3863, 'code'=>'79675', 'type'=>'village', 'name'=>'Village 79675, Districts 7967, City 796, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39533, 'regionable_type'=>'village']); //Gelata
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39534, 'regionable_type'=>'village']); //Keluing Taja
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39535, 'regionable_type'=>'village']); //Landau Kabu
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39536, 'regionable_type'=>'village']); //Melana
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39537, 'regionable_type'=>'village']); //Muara Tanjung
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39538, 'regionable_type'=>'village']); //Nanga Betangai
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39539, 'regionable_type'=>'village']); //Nanga Libas
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39540, 'regionable_type'=>'village']); //Nanga Ora
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39541, 'regionable_type'=>'village']); //Nanga Potai
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39542, 'regionable_type'=>'village']); //Nanga Sokan
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39543, 'regionable_type'=>'village']); //Nanga Tangkit
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39544, 'regionable_type'=>'village']); //Penyengkuang
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39545, 'regionable_type'=>'village']); //Sepakat
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39546, 'regionable_type'=>'village']); //Sijau
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39547, 'regionable_type'=>'village']); //Tanjung Mahung
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39548, 'regionable_type'=>'village']); //Tanjung Sokan
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39549, 'regionable_type'=>'village']); //Telaga Raya
                DB::table('regionables')->insert(['region_id'=>3864, 'regionable_id'=>39550, 'regionable_type'=>'village']); //Teluk Pangkal
            DB::table('regions')->insert(['id'=>3865, 'parent'=>3862, 'code'=>'7968', 'type'=>'districts', 'name'=>'Districts 7968, City 796, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3865, 'regionable_id'=>3459, 'regionable_type'=>'districts']); //Ella Hilir
            DB::table('regionables')->insert(['region_id'=>3865, 'regionable_id'=>3460, 'regionable_type'=>'districts']); //Menukung
                DB::table('regions')->insert(['id'=>3866, 'parent'=>3865, 'code'=>'79682', 'type'=>'village', 'name'=>'Village 79682, Districts 7968, City 796, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39570, 'regionable_type'=>'village']); //Batas Nangka
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39571, 'regionable_type'=>'village']); //Batu Badak
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39572, 'regionable_type'=>'village']); //Batu Onap
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39573, 'regionable_type'=>'village']); //Belaban Ella
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39574, 'regionable_type'=>'village']); //Ella Hulu (nanga Ella Hulu)
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39575, 'regionable_type'=>'village']); //Laman Mumbung
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39576, 'regionable_type'=>'village']); //Landau Leban
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39577, 'regionable_type'=>'village']); //Lihai
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39578, 'regionable_type'=>'village']); //Mawang Mentatai
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39579, 'regionable_type'=>'village']); //Melona
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39580, 'regionable_type'=>'village']); //Menukung Kota
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39581, 'regionable_type'=>'village']); //Nanga Keruap
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39582, 'regionable_type'=>'village']); //Nanga Siyai
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39583, 'regionable_type'=>'village']); //Nusa Poring
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39584, 'regionable_type'=>'village']); //Oyah
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39585, 'regionable_type'=>'village']); //Pelaik Keruap
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39586, 'regionable_type'=>'village']); //Sei/sungai Sampak
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39587, 'regionable_type'=>'village']); //Sei/sungai Sampuk
                DB::table('regionables')->insert(['region_id'=>3866, 'regionable_id'=>39588, 'regionable_type'=>'village']); //Tanjung Beringin

        //Kalimantan Selatan
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>13, 'regionable_type'=>'province']); //Kalimantan Selatan
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>177, 'regionable_type'=>'city']); //Banjarmasin city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>178, 'regionable_type'=>'city']); //Barito Kuala regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>179, 'regionable_type'=>'city']); //Banjar regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>180, 'regionable_type'=>'city']); //Banjarbaru city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>181, 'regionable_type'=>'city']); //Tanah Laut regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>182, 'regionable_type'=>'city']); //Tapin regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>183, 'regionable_type'=>'city']); //Hulu Sungai Selatan regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>184, 'regionable_type'=>'city']); //Hulu Sungai Tengah regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>185, 'regionable_type'=>'city']); //Hulu Sungai Utara regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>186, 'regionable_type'=>'city']); //Tabalong regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>187, 'regionable_type'=>'city']); //Balangan regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>188, 'regionable_type'=>'city']); //Kotabaru regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>189, 'regionable_type'=>'city']); //Tanah Bumbu regencies

        DB::table('regions')->insert(['id'=>3867, 'parent'=>3741, 'code'=>'701', 'type'=>'city', 'name'=>'City 701, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3867, 'regionable_id'=>177, 'regionable_type'=>'city']); //Banjarmasin city
            DB::table('regions')->insert(['id'=>3868, 'parent'=>3867, 'code'=>'7011', 'type'=>'districts', 'name'=>'Districts 7011, City 701, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3868, 'regionable_id'=>3461, 'regionable_type'=>'districts']); //Banjarmasin Tengah
            DB::table('regionables')->insert(['region_id'=>3868, 'regionable_id'=>3462, 'regionable_type'=>'districts']); //Banjarmasin Barat
                DB::table('regions')->insert(['id'=>3869, 'parent'=>3868, 'code'=>'70112', 'type'=>'village', 'name'=>'Village 70112, Districts 7011, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3869, 'regionable_id'=>39591, 'regionable_type'=>'village']); //Mawar
                DB::table('regionables')->insert(['region_id'=>3869, 'regionable_id'=>39601, 'regionable_type'=>'village']); //Telawang
                DB::table('regions')->insert(['id'=>3870, 'parent'=>3868, 'code'=>'70113', 'type'=>'village', 'name'=>'Village 70113, Districts 7011, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3870, 'regionable_id'=>39602, 'regionable_type'=>'village']); //Teluk Tiram
                DB::table('regions')->insert(['id'=>3871, 'parent'=>3868, 'code'=>'70116', 'type'=>'village', 'name'=>'Village 70116, Districts 7011, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3871, 'regionable_id'=>39603, 'regionable_type'=>'village']); //Belitung Selatan
                DB::table('regionables')->insert(['region_id'=>3871, 'regionable_id'=>39604, 'regionable_type'=>'village']); //Belitung Utara
                DB::table('regions')->insert(['id'=>3872, 'parent'=>3868, 'code'=>'70118', 'type'=>'village', 'name'=>'Village 70118, Districts 7011, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3872, 'regionable_id'=>39605, 'regionable_type'=>'village']); //Pelambuan
                DB::table('regions')->insert(['id'=>3873, 'parent'=>3868, 'code'=>'70119', 'type'=>'village', 'name'=>'Village 70119, Districts 7011, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3873, 'regionable_id'=>39606, 'regionable_type'=>'village']); //Telaga Biru
            DB::table('regions')->insert(['id'=>3874, 'parent'=>3867, 'code'=>'7012', 'type'=>'districts', 'name'=>'Districts 7012, City 701, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3874, 'regionable_id'=>3462, 'regionable_type'=>'districts']); //Banjarmasin Barat
            DB::table('regionables')->insert(['region_id'=>3874, 'regionable_id'=>3463, 'regionable_type'=>'districts']); //Banjarmasin Utara
                DB::table('regions')->insert(['id'=>3875, 'parent'=>3874, 'code'=>'70121', 'type'=>'village', 'name'=>'Village 70121, Districts 7012, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3875, 'regionable_id'=>39610, 'regionable_type'=>'village']); //Sei/sungai Jingah
                DB::table('regions')->insert(['id'=>3876, 'parent'=>3874, 'code'=>'70122', 'type'=>'village', 'name'=>'Village 70122, Districts 7012, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3876, 'regionable_id'=>39611, 'regionable_type'=>'village']); //Sungai Andai
                DB::table('regionables')->insert(['region_id'=>3876, 'regionable_id'=>39612, 'regionable_type'=>'village']); //Surgi Mufti
                DB::table('regions')->insert(['id'=>3877, 'parent'=>3874, 'code'=>'70123', 'type'=>'village', 'name'=>'Village 70123, Districts 7012, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3877, 'regionable_id'=>39613, 'regionable_type'=>'village']); //Antasan Kecil Timur
                DB::table('regionables')->insert(['region_id'=>3877, 'regionable_id'=>39614, 'regionable_type'=>'village']); //Sei/sungai Miai
                DB::table('regions')->insert(['id'=>3878, 'parent'=>3874, 'code'=>'70124', 'type'=>'village', 'name'=>'Village 70124, Districts 7012, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3878, 'regionable_id'=>39615, 'regionable_type'=>'village']); //Pangeran
                DB::table('regions')->insert(['id'=>3879, 'parent'=>3874, 'code'=>'70125', 'type'=>'village', 'name'=>'Village 70125, Districts 7012, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3879, 'regionable_id'=>39616, 'regionable_type'=>'village']); //Alalak Utara
                DB::table('regions')->insert(['id'=>3880, 'parent'=>3874, 'code'=>'70126', 'type'=>'village', 'name'=>'Village 70126, Districts 7012, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3880, 'regionable_id'=>39617, 'regionable_type'=>'village']); //Alalak Selatan
                DB::table('regionables')->insert(['region_id'=>3880, 'regionable_id'=>39618, 'regionable_type'=>'village']); //Alalak Tengah
                DB::table('regions')->insert(['id'=>3881, 'parent'=>3874, 'code'=>'70127', 'type'=>'village', 'name'=>'Village 70127, Districts 7012, City 701, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3881, 'regionable_id'=>39619, 'regionable_type'=>'village']); //Kuin Utara
        DB::table('regions')->insert(['id'=>3882, 'parent'=>3741, 'code'=>'702', 'type'=>'city', 'name'=>'City 702, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3882, 'regionable_id'=>177, 'regionable_type'=>'city']); //Banjarmasin city
            DB::table('regions')->insert(['id'=>3883, 'parent'=>3882, 'code'=>'7023', 'type'=>'districts', 'name'=>'Districts 7023, City 702, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3883, 'regionable_id'=>3461, 'regionable_type'=>'districts']); //Banjarmasin Tengah
            DB::table('regionables')->insert(['region_id'=>3883, 'regionable_id'=>3464, 'regionable_type'=>'districts']); //Banjarmasin Timur
                DB::table('regions')->insert(['id'=>3884, 'parent'=>3883, 'code'=>'70234', 'type'=>'village', 'name'=>'Village 70234, Districts 7023, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3884, 'regionable_id'=>39598, 'regionable_type'=>'village']); //Melayu
                DB::table('regionables')->insert(['region_id'=>3884, 'regionable_id'=>39620, 'regionable_type'=>'village']); //Karang Mekar
                DB::table('regionables')->insert(['region_id'=>3884, 'regionable_id'=>39621, 'regionable_type'=>'village']); //Pekapuran Raya
                DB::table('regions')->insert(['id'=>3885, 'parent'=>3883, 'code'=>'70235', 'type'=>'village', 'name'=>'Village 70235, Districts 7023, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3885, 'regionable_id'=>39599, 'regionable_type'=>'village']); //Pekapuran Laut
                DB::table('regionables')->insert(['region_id'=>3885, 'regionable_id'=>39622, 'regionable_type'=>'village']); //Kebun Bunga
                DB::table('regions')->insert(['id'=>3886, 'parent'=>3883, 'code'=>'70236', 'type'=>'village', 'name'=>'Village 70236, Districts 7023, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3886, 'regionable_id'=>39623, 'regionable_type'=>'village']); //Kuripan
                DB::table('regionables')->insert(['region_id'=>3886, 'regionable_id'=>39624, 'regionable_type'=>'village']); //Pemurus Luar
                DB::table('regionables')->insert(['region_id'=>3886, 'regionable_id'=>39625, 'regionable_type'=>'village']); //Sei/sungai Bilu
                DB::table('regions')->insert(['id'=>3887, 'parent'=>3883, 'code'=>'70237', 'type'=>'village', 'name'=>'Village 70237, Districts 7023, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3887, 'regionable_id'=>39626, 'regionable_type'=>'village']); //Pengambangan
                DB::table('regions')->insert(['id'=>3888, 'parent'=>3883, 'code'=>'70238', 'type'=>'village', 'name'=>'Village 70238, Districts 7023, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3888, 'regionable_id'=>39627, 'regionable_type'=>'village']); //Sei/sungai Lulut
                DB::table('regions')->insert(['id'=>3889, 'parent'=>3883, 'code'=>'70239', 'type'=>'village', 'name'=>'Village 70239, Districts 7023, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3889, 'regionable_id'=>39628, 'regionable_type'=>'village']); //Benua Anyar
            DB::table('regions')->insert(['id'=>3890, 'parent'=>3882, 'code'=>'7024', 'type'=>'districts', 'name'=>'Districts 7024, City 702, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3890, 'regionable_id'=>3461, 'regionable_type'=>'districts']); //Banjarmasin Tengah
            DB::table('regionables')->insert(['region_id'=>3890, 'regionable_id'=>3462, 'regionable_type'=>'districts']); //Banjarmasin Barat
            DB::table('regionables')->insert(['region_id'=>3890, 'regionable_id'=>3465, 'regionable_type'=>'districts']); //Banjarmasin Selatan
                DB::table('regions')->insert(['id'=>3891, 'parent'=>3890, 'code'=>'70241', 'type'=>'village', 'name'=>'Village 70241, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3891, 'regionable_id'=>39600, 'regionable_type'=>'village']); //Kelayan Luar
                DB::table('regionables')->insert(['region_id'=>3891, 'regionable_id'=>39629, 'regionable_type'=>'village']); //Kelayan Barat
                DB::table('regions')->insert(['id'=>3892, 'parent'=>3890, 'code'=>'70242', 'type'=>'village', 'name'=>'Village 70242, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3892, 'regionable_id'=>39630, 'regionable_type'=>'village']); //Kelayan Dalam
                DB::table('regionables')->insert(['region_id'=>3892, 'regionable_id'=>39631, 'regionable_type'=>'village']); //Kelayan Tengah
                DB::table('regions')->insert(['id'=>3893, 'parent'=>3890, 'code'=>'70243', 'type'=>'village', 'name'=>'Village 70243, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3893, 'regionable_id'=>39632, 'regionable_type'=>'village']); //Pekauman
                DB::table('regions')->insert(['id'=>3894, 'parent'=>3890, 'code'=>'70244', 'type'=>'village', 'name'=>'Village 70244, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3894, 'regionable_id'=>39633, 'regionable_type'=>'village']); //Mantuil
                DB::table('regions')->insert(['id'=>3895, 'parent'=>3890, 'code'=>'70245', 'type'=>'village', 'name'=>'Village 70245, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3895, 'regionable_id'=>39609, 'regionable_type'=>'village']); //Basirih
                DB::table('regionables')->insert(['region_id'=>3895, 'regionable_id'=>39634, 'regionable_type'=>'village']); //Basirih Selatan
                DB::table('regions')->insert(['id'=>3896, 'parent'=>3890, 'code'=>'70246', 'type'=>'village', 'name'=>'Village 70246, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3896, 'regionable_id'=>39635, 'regionable_type'=>'village']); //Kelayan Selatan
                DB::table('regions')->insert(['id'=>3897, 'parent'=>3890, 'code'=>'70247', 'type'=>'village', 'name'=>'Village 70247, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3897, 'regionable_id'=>39636, 'regionable_type'=>'village']); //Kelayan Timur
                DB::table('regionables')->insert(['region_id'=>3897, 'regionable_id'=>39637, 'regionable_type'=>'village']); //Murung Raya
                DB::table('regionables')->insert(['region_id'=>3897, 'regionable_id'=>39638, 'regionable_type'=>'village']); //Tanjung Pagar
                DB::table('regions')->insert(['id'=>3898, 'parent'=>3890, 'code'=>'70248', 'type'=>'village', 'name'=>'Village 70248, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3898, 'regionable_id'=>39639, 'regionable_type'=>'village']); //Pemurus Dalam
                DB::table('regions')->insert(['id'=>3899, 'parent'=>3890, 'code'=>'70249', 'type'=>'village', 'name'=>'Village 70249, Districts 7024, City 702, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3899, 'regionable_id'=>39640, 'regionable_type'=>'village']); //Pemurus Baru
        DB::table('regions')->insert(['id'=>3900, 'parent'=>3741, 'code'=>'705', 'type'=>'city', 'name'=>'City 705, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3900, 'regionable_id'=>178, 'regionable_type'=>'city']); //Barito Kuala regencies
            DB::table('regions')->insert(['id'=>3901, 'parent'=>3900, 'code'=>'7051', 'type'=>'districts', 'name'=>'Districts 7051, City 705, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3901, 'regionable_id'=>3466, 'regionable_type'=>'districts']); //Marabahan
            DB::table('regionables')->insert(['region_id'=>3901, 'regionable_id'=>3467, 'regionable_type'=>'districts']); //Bakumpai
                DB::table('regions')->insert(['id'=>3902, 'parent'=>3901, 'code'=>'70512', 'type'=>'village', 'name'=>'Village 70512, Districts 7051, City 705, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3902, 'regionable_id'=>39651, 'regionable_type'=>'village']); //Lepasan
                DB::table('regions')->insert(['id'=>3903, 'parent'=>3901, 'code'=>'70513', 'type'=>'village', 'name'=>'Village 70513, Districts 7051, City 705, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39649, 'regionable_type'=>'village']); //Karya Maju
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39650, 'regionable_type'=>'village']); //Ulu Benteng
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39652, 'regionable_type'=>'village']); //Bahalayung
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39653, 'regionable_type'=>'village']); //Balukung
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39654, 'regionable_type'=>'village']); //Banitan
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39655, 'regionable_type'=>'village']); //Batik
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39656, 'regionable_type'=>'village']); //Benua Anyar
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39657, 'regionable_type'=>'village']); //Murung Raya
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39658, 'regionable_type'=>'village']); //Palingkau
                DB::table('regionables')->insert(['region_id'=>3903, 'regionable_id'=>39659, 'regionable_type'=>'village']); //Sei/sungai Lirik
            DB::table('regions')->insert(['id'=>3904, 'parent'=>3900, 'code'=>'7055', 'type'=>'districts', 'name'=>'Districts 7055, City 705, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3904, 'regionable_id'=>3468, 'regionable_type'=>'districts']); //Kuripan
            DB::table('regionables')->insert(['region_id'=>3904, 'regionable_id'=>3469, 'regionable_type'=>'districts']); //Tabukan
                DB::table('regions')->insert(['id'=>3905, 'parent'=>3904, 'code'=>'70553', 'type'=>'village', 'name'=>'Village 70553, Districts 7055, City 705, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39669, 'regionable_type'=>'village']); //Bandar Karya
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39670, 'regionable_type'=>'village']); //Karya Indah
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39671, 'regionable_type'=>'village']); //Karya Jadi
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39672, 'regionable_type'=>'village']); //Karya Makmur
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39673, 'regionable_type'=>'village']); //Muara Pulau
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39674, 'regionable_type'=>'village']); //Pantang Baru
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39675, 'regionable_type'=>'village']); //Pantang Raya
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39676, 'regionable_type'=>'village']); //Rantau Bamban
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39677, 'regionable_type'=>'village']); //Tabukan Raya
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39678, 'regionable_type'=>'village']); //Tamba Jaya
                DB::table('regionables')->insert(['region_id'=>3905, 'regionable_id'=>39679, 'regionable_type'=>'village']); //Teluk Tamba
            DB::table('regions')->insert(['id'=>3906, 'parent'=>3900, 'code'=>'7056', 'type'=>'districts', 'name'=>'Districts 7056, City 705, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3470, 'regionable_type'=>'districts']); //Rantau Badauh
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3471, 'regionable_type'=>'districts']); //Wanaraya
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3472, 'regionable_type'=>'districts']); //Barambai
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3473, 'regionable_type'=>'districts']); //Belawang
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3474, 'regionable_type'=>'districts']); //Anjir Muara
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3475, 'regionable_type'=>'districts']); //Anjir Pasar
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3476, 'regionable_type'=>'districts']); //Tamban
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3477, 'regionable_type'=>'districts']); //Tabunganen
            DB::table('regionables')->insert(['region_id'=>3906, 'regionable_id'=>3478, 'regionable_type'=>'districts']); //Mekar Sari
                DB::table('regions')->insert(['id'=>3907, 'parent'=>3906, 'code'=>'70568', 'type'=>'village', 'name'=>'Village 70568, Districts 7056, City 705, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39786, 'regionable_type'=>'village']); //Indah Sari
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39787, 'regionable_type'=>'village']); //Jelapat Ii
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39788, 'regionable_type'=>'village']); //Karang Mekar
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39789, 'regionable_type'=>'village']); //Mekar Sari
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39790, 'regionable_type'=>'village']); //Tamban Raya
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39791, 'regionable_type'=>'village']); //Tamban Raya Baru
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39792, 'regionable_type'=>'village']); //Tinggiran Baru
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39793, 'regionable_type'=>'village']); //Tinggiran Darat
                DB::table('regionables')->insert(['region_id'=>3907, 'regionable_id'=>39794, 'regionable_type'=>'village']); //Tinggiran Tengah
            DB::table('regions')->insert(['id'=>3908, 'parent'=>3900, 'code'=>'7057', 'type'=>'districts', 'name'=>'Districts 7057, City 705, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3908, 'regionable_id'=>3479, 'regionable_type'=>'districts']); //Cerbon
                DB::table('regions')->insert(['id'=>3909, 'parent'=>3908, 'code'=>'70571', 'type'=>'village', 'name'=>'Village 70571, Districts 7057, City 705, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3909, 'regionable_id'=>39795, 'regionable_type'=>'village']); //Badandan
                DB::table('regionables')->insert(['region_id'=>3909, 'regionable_id'=>39796, 'regionable_type'=>'village']); //Bantuil
                DB::table('regionables')->insert(['region_id'=>3909, 'regionable_id'=>39797, 'regionable_type'=>'village']); //Sawahan
                DB::table('regionables')->insert(['region_id'=>3909, 'regionable_id'=>39798, 'regionable_type'=>'village']); //Sei/sungai Kambat
                DB::table('regionables')->insert(['region_id'=>3909, 'regionable_id'=>39799, 'regionable_type'=>'village']); //Sei/sungai Rasau
                DB::table('regionables')->insert(['region_id'=>3909, 'regionable_id'=>39800, 'regionable_type'=>'village']); //Sei/sungai Raya
                DB::table('regionables')->insert(['region_id'=>3909, 'regionable_id'=>39801, 'regionable_type'=>'village']); //Sei/sungai Tunjang
                DB::table('regionables')->insert(['region_id'=>3909, 'regionable_id'=>39802, 'regionable_type'=>'village']); //Simpang Nungki
            DB::table('regions')->insert(['id'=>3910, 'parent'=>3900, 'code'=>'7058', 'type'=>'districts', 'name'=>'Districts 7058, City 705, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3910, 'regionable_id'=>3480, 'regionable_type'=>'districts']); //Mandastana
            DB::table('regionables')->insert(['region_id'=>3910, 'regionable_id'=>3481, 'regionable_type'=>'districts']); //Jejangkit
            DB::table('regionables')->insert(['region_id'=>3910, 'regionable_id'=>3482, 'regionable_type'=>'districts']); //Alalak
                DB::table('regions')->insert(['id'=>3911, 'parent'=>3910, 'code'=>'70582', 'type'=>'village', 'name'=>'Village 70582, Districts 7058, City 705, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39824, 'regionable_type'=>'village']); //Belandean
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39825, 'regionable_type'=>'village']); //Belandean Muara
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39826, 'regionable_type'=>'village']); //Berangas
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39827, 'regionable_type'=>'village']); //Berangas Barat
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39828, 'regionable_type'=>'village']); //Berangas Timur
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39829, 'regionable_type'=>'village']); //Beringin
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39830, 'regionable_type'=>'village']); //Handil Bakti
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39831, 'regionable_type'=>'village']); //Panca Karya
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39832, 'regionable_type'=>'village']); //Pulau Alalak
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39833, 'regionable_type'=>'village']); //Pulau Sewangi
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39834, 'regionable_type'=>'village']); //Pulau Sugara
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39835, 'regionable_type'=>'village']); //Sei/sungai Lumbah
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39836, 'regionable_type'=>'village']); //Sei/sungai Pitung
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39837, 'regionable_type'=>'village']); //Semangat Bakti
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39838, 'regionable_type'=>'village']); //Semangat Dalam
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39839, 'regionable_type'=>'village']); //Semangat Karya
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39840, 'regionable_type'=>'village']); //Tanjung Harapan
                DB::table('regionables')->insert(['region_id'=>3911, 'regionable_id'=>39841, 'regionable_type'=>'village']); //Tatah Mesjid
        DB::table('regions')->insert(['id'=>3912, 'parent'=>3741, 'code'=>'706', 'type'=>'city', 'name'=>'City 706, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3912, 'regionable_id'=>179, 'regionable_type'=>'city']); //Banjar regencies
            DB::table('regions')->insert(['id'=>3913, 'parent'=>3912, 'code'=>'7061', 'type'=>'districts', 'name'=>'Districts 7061, City 706, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3913, 'regionable_id'=>3483, 'regionable_type'=>'districts']); //Martapura Kota
            DB::table('regionables')->insert(['region_id'=>3913, 'regionable_id'=>3484, 'regionable_type'=>'districts']); //Martapura Timur
            DB::table('regionables')->insert(['region_id'=>3913, 'regionable_id'=>3485, 'regionable_type'=>'districts']); //Martapura Barat
                DB::table('regions')->insert(['id'=>3914, 'parent'=>3913, 'code'=>'70618', 'type'=>'village', 'name'=>'Village 70618, Districts 7061, City 706, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39888, 'regionable_type'=>'village']); //Antasan Sutun
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39889, 'regionable_type'=>'village']); //Keliling Benteng Tengah
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39890, 'regionable_type'=>'village']); //Keliling Benteng Ulu
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39891, 'regionable_type'=>'village']); //Penggalaman
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39892, 'regionable_type'=>'village']); //Sei/sungai Batang
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39893, 'regionable_type'=>'village']); //Sei/sungai Batang Ilir
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39894, 'regionable_type'=>'village']); //Sei/sungai Rangas
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39895, 'regionable_type'=>'village']); //Sei/sungai Rangas Hambuku
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39896, 'regionable_type'=>'village']); //Sei/sungai Rangas Tengah
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39897, 'regionable_type'=>'village']); //Sei/sungai Rangas Ulu
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39898, 'regionable_type'=>'village']); //Tangkas
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39899, 'regionable_type'=>'village']); //Telok Selong
                DB::table('regionables')->insert(['region_id'=>3914, 'regionable_id'=>39900, 'regionable_type'=>'village']); //Telok Selong Ulu
            DB::table('regions')->insert(['id'=>3915, 'parent'=>3912, 'code'=>'7065', 'type'=>'districts', 'name'=>'Districts 7065, City 706, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3915, 'regionable_id'=>3486, 'regionable_type'=>'districts']); //Gambut
            DB::table('regionables')->insert(['region_id'=>3915, 'regionable_id'=>3487, 'regionable_type'=>'districts']); //Sei/sungai Tabuk
            DB::table('regionables')->insert(['region_id'=>3915, 'regionable_id'=>3488, 'regionable_type'=>'districts']); //Simpang Empat
            DB::table('regionables')->insert(['region_id'=>3915, 'regionable_id'=>3489, 'regionable_type'=>'districts']); //Tatah Makmur
            DB::table('regionables')->insert(['region_id'=>3915, 'regionable_id'=>3490, 'regionable_type'=>'districts']); //Kertak Hanyar
            DB::table('regionables')->insert(['region_id'=>3915, 'regionable_id'=>3491, 'regionable_type'=>'districts']); //Aluh-aluh
            DB::table('regionables')->insert(['region_id'=>3915, 'regionable_id'=>3492, 'regionable_type'=>'districts']); //Beruntung Baru
                DB::table('regions')->insert(['id'=>3916, 'parent'=>3915, 'code'=>'70655', 'type'=>'village', 'name'=>'Village 70655, Districts 7065, City 706, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39988, 'regionable_type'=>'village']); //Aluh Aluh Kecil
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39989, 'regionable_type'=>'village']); //Aluh Aluh Kecil Muara
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39990, 'regionable_type'=>'village']); //Aluh-aluh Besar
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39991, 'regionable_type'=>'village']); //Bakambat
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39992, 'regionable_type'=>'village']); //Balimau
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39993, 'regionable_type'=>'village']); //Bunipah
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39994, 'regionable_type'=>'village']); //Handil Baru
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39995, 'regionable_type'=>'village']); //Handil Bujur
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39996, 'regionable_type'=>'village']); //Kuin Besar
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39997, 'regionable_type'=>'village']); //Kuin Kecil
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39998, 'regionable_type'=>'village']); //Labat Muara
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>39999, 'regionable_type'=>'village']); //Pemurus
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40000, 'regionable_type'=>'village']); //Podok
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40001, 'regionable_type'=>'village']); //Pulantan
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40002, 'regionable_type'=>'village']); //Sei/sungai Musang
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40003, 'regionable_type'=>'village']); //Simpang Warga
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40004, 'regionable_type'=>'village']); //Simpang Warga Dalam
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40005, 'regionable_type'=>'village']); //Tanipah
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40006, 'regionable_type'=>'village']); //Terapu
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40007, 'regionable_type'=>'village']); //Babirik
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40008, 'regionable_type'=>'village']); //Handil Purai
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40009, 'regionable_type'=>'village']); //Haur Kuning
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40010, 'regionable_type'=>'village']); //Jambu Burung
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40011, 'regionable_type'=>'village']); //Jambu Raya
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40012, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40013, 'regionable_type'=>'village']); //Lawahan
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40014, 'regionable_type'=>'village']); //Muara Halayung
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40015, 'regionable_type'=>'village']); //Pindahan Baru
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40016, 'regionable_type'=>'village']); //Rumpiang
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40017, 'regionable_type'=>'village']); //Selat Makmur
                DB::table('regionables')->insert(['region_id'=>3916, 'regionable_id'=>40018, 'regionable_type'=>'village']); //Tambak Padi
            DB::table('regions')->insert(['id'=>3917, 'parent'=>3912, 'code'=>'7066', 'type'=>'districts', 'name'=>'Districts 7066, City 706, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3917, 'regionable_id'=>3493, 'regionable_type'=>'districts']); //Karang Intan
                DB::table('regions')->insert(['id'=>3918, 'parent'=>3917, 'code'=>'70661', 'type'=>'village', 'name'=>'Village 70661, Districts 7066, City 706, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40019, 'regionable_type'=>'village']); //Abirau
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40020, 'regionable_type'=>'village']); //Awang Bangkal Barat
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40021, 'regionable_type'=>'village']); //Awang Bangkal Timur
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40022, 'regionable_type'=>'village']); //Balau
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40023, 'regionable_type'=>'village']); //Biih
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40024, 'regionable_type'=>'village']); //Jingah Habang Ilir
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40025, 'regionable_type'=>'village']); //Jingah Habang Ulu
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40026, 'regionable_type'=>'village']); //Karang Intan
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40027, 'regionable_type'=>'village']); //Kiram
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40028, 'regionable_type'=>'village']); //Lihung
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40029, 'regionable_type'=>'village']); //Loktangga
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40030, 'regionable_type'=>'village']); //Mali Mali
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40031, 'regionable_type'=>'village']); //Mandi Angin Barat
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40032, 'regionable_type'=>'village']); //Mandi Angin Timur
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40033, 'regionable_type'=>'village']); //Mandi Kapau Barat
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40034, 'regionable_type'=>'village']); //Mandi Kapau Timur
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40035, 'regionable_type'=>'village']); //Padang Panjang
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40036, 'regionable_type'=>'village']); //Pandak Daun
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40037, 'regionable_type'=>'village']); //Pasar Lama
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40038, 'regionable_type'=>'village']); //Penyambaran
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40039, 'regionable_type'=>'village']); //Pulau Nyiur
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40040, 'regionable_type'=>'village']); //Sei/sungai Alang
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40041, 'regionable_type'=>'village']); //Sei/sungai Arfat
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40042, 'regionable_type'=>'village']); //Sei/sungai Asam
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40043, 'regionable_type'=>'village']); //Sei/sungai Besar
                DB::table('regionables')->insert(['region_id'=>3918, 'regionable_id'=>40044, 'regionable_type'=>'village']); //Sei/sungai Landas
            DB::table('regions')->insert(['id'=>3919, 'parent'=>3912, 'code'=>'7067', 'type'=>'districts', 'name'=>'Districts 7067, City 706, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3488, 'regionable_type'=>'districts']); //Simpang Empat
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3494, 'regionable_type'=>'districts']); //Aranio
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3495, 'regionable_type'=>'districts']); //Astambul
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3496, 'regionable_type'=>'districts']); //Mataraman
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3497, 'regionable_type'=>'districts']); //Telaga Bauntung
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3498, 'regionable_type'=>'districts']); //Pengaron
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3499, 'regionable_type'=>'districts']); //Sambung Makmur
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3500, 'regionable_type'=>'districts']); //Peramasan
            DB::table('regionables')->insert(['region_id'=>3919, 'regionable_id'=>3501, 'regionable_type'=>'districts']); //Sei/sungai Pinang
                DB::table('regions')->insert(['id'=>3920, 'parent'=>3919, 'code'=>'70675', 'type'=>'village', 'name'=>'Village 70675, Districts 7067, City 706, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40117, 'regionable_type'=>'village']); //Angkipih
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40118, 'regionable_type'=>'village']); //Peramasan Atas
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40119, 'regionable_type'=>'village']); //Peramasan Bawah
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40120, 'regionable_type'=>'village']); //Remo
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40121, 'regionable_type'=>'village']); //Belimbing Baru
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40122, 'regionable_type'=>'village']); //Belimbing Lama
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40123, 'regionable_type'=>'village']); //Hakim Makmur
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40124, 'regionable_type'=>'village']); //Kahelaan
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40125, 'regionable_type'=>'village']); //Kupang Rejo
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40126, 'regionable_type'=>'village']); //Pakutik
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40127, 'regionable_type'=>'village']); //Rantau Bakula
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40128, 'regionable_type'=>'village']); //Rantau Nangka
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40129, 'regionable_type'=>'village']); //Sei/sungai Pinang
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40130, 'regionable_type'=>'village']); //Sumber Baru
                DB::table('regionables')->insert(['region_id'=>3920, 'regionable_id'=>40131, 'regionable_type'=>'village']); //Sumber Harapan
        DB::table('regions')->insert(['id'=>3921, 'parent'=>3741, 'code'=>'707', 'type'=>'city', 'name'=>'City 707, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3921, 'regionable_id'=>180, 'regionable_type'=>'city']); //Banjarbaru city
            DB::table('regions')->insert(['id'=>3922, 'parent'=>3921, 'code'=>'7071', 'type'=>'districts', 'name'=>'Districts 7071, City 707, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3922, 'regionable_id'=>3502, 'regionable_type'=>'districts']); //Banjar Baru Selatan
            DB::table('regionables')->insert(['region_id'=>3922, 'regionable_id'=>3503, 'regionable_type'=>'districts']); //Banjar Baru Utara
                DB::table('regions')->insert(['id'=>3923, 'parent'=>3922, 'code'=>'70714', 'type'=>'village', 'name'=>'Village 70714, Districts 7071, City 707, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3923, 'regionable_id'=>40133, 'regionable_type'=>'village']); //Kemuning
                DB::table('regionables')->insert(['region_id'=>3923, 'regionable_id'=>40134, 'regionable_type'=>'village']); //Loktabat Selatan
                DB::table('regionables')->insert(['region_id'=>3923, 'regionable_id'=>40135, 'regionable_type'=>'village']); //Sei/sungai Besar
                DB::table('regionables')->insert(['region_id'=>3923, 'regionable_id'=>40136, 'regionable_type'=>'village']); //Komet
                DB::table('regionables')->insert(['region_id'=>3923, 'regionable_id'=>40137, 'regionable_type'=>'village']); //Loktabat Utara
                DB::table('regionables')->insert(['region_id'=>3923, 'regionable_id'=>40138, 'regionable_type'=>'village']); //Mentaos
                DB::table('regionables')->insert(['region_id'=>3923, 'regionable_id'=>40139, 'regionable_type'=>'village']); //Sei/sungai Ulin
            DB::table('regions')->insert(['id'=>3924, 'parent'=>3921, 'code'=>'7072', 'type'=>'districts', 'name'=>'Districts 7072, City 707, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3924, 'regionable_id'=>3504, 'regionable_type'=>'districts']); //Landasan Ulin
            DB::table('regionables')->insert(['region_id'=>3924, 'regionable_id'=>3505, 'regionable_type'=>'districts']); //Liang Anggang
                DB::table('regions')->insert(['id'=>3925, 'parent'=>3924, 'code'=>'70722', 'type'=>'village', 'name'=>'Village 70722, Districts 7072, City 707, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3925, 'regionable_id'=>40144, 'regionable_type'=>'village']); //Landasan Ulin Barat
                DB::table('regions')->insert(['id'=>3926, 'parent'=>3924, 'code'=>'70723', 'type'=>'village', 'name'=>'Village 70723, Districts 7072, City 707, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3926, 'regionable_id'=>40145, 'regionable_type'=>'village']); //Landasan Ulin Tengah
                DB::table('regions')->insert(['id'=>3927, 'parent'=>3924, 'code'=>'70724', 'type'=>'village', 'name'=>'Village 70724, Districts 7072, City 707, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3927, 'regionable_id'=>40141, 'regionable_type'=>'village']); //Guntung Manggis
                DB::table('regionables')->insert(['region_id'=>3927, 'regionable_id'=>40142, 'regionable_type'=>'village']); //Landasan Ulin Timur
                DB::table('regionables')->insert(['region_id'=>3927, 'regionable_id'=>40143, 'regionable_type'=>'village']); //Syamsudin Noor
                DB::table('regionables')->insert(['region_id'=>3927, 'regionable_id'=>40146, 'regionable_type'=>'village']); //Landasan Ulin Selatan
                DB::table('regionables')->insert(['region_id'=>3927, 'regionable_id'=>40147, 'regionable_type'=>'village']); //Landasan Ulin Utara
            DB::table('regions')->insert(['id'=>3928, 'parent'=>3921, 'code'=>'7073', 'type'=>'districts', 'name'=>'Districts 7073, City 707, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3928, 'regionable_id'=>3506, 'regionable_type'=>'districts']); //Cempaka
                DB::table('regions')->insert(['id'=>3929, 'parent'=>3928, 'code'=>'70731', 'type'=>'village', 'name'=>'Village 70731, Districts 7073, City 707, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3929, 'regionable_id'=>40148, 'regionable_type'=>'village']); //Palam
                DB::table('regions')->insert(['id'=>3930, 'parent'=>3928, 'code'=>'70732', 'type'=>'village', 'name'=>'Village 70732, Districts 7073, City 707, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3930, 'regionable_id'=>40149, 'regionable_type'=>'village']); //Bangkal
                DB::table('regions')->insert(['id'=>3931, 'parent'=>3928, 'code'=>'70733', 'type'=>'village', 'name'=>'Village 70733, Districts 7073, City 707, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3931, 'regionable_id'=>40150, 'regionable_type'=>'village']); //Cempaka
                DB::table('regions')->insert(['id'=>3932, 'parent'=>3928, 'code'=>'70734', 'type'=>'village', 'name'=>'Village 70734, Districts 7073, City 707, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3932, 'regionable_id'=>40151, 'regionable_type'=>'village']); //Sei/sungai Tiung
        DB::table('regions')->insert(['id'=>3933, 'parent'=>3741, 'code'=>'708', 'type'=>'city', 'name'=>'City 708, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3933, 'regionable_id'=>181, 'regionable_type'=>'city']); //Tanah Laut regencies
            DB::table('regions')->insert(['id'=>3934, 'parent'=>3933, 'code'=>'7081', 'type'=>'districts', 'name'=>'Districts 7081, City 708, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3934, 'regionable_id'=>3507, 'regionable_type'=>'districts']); //Pelaihari
            DB::table('regionables')->insert(['region_id'=>3934, 'regionable_id'=>3508, 'regionable_type'=>'districts']); //Bajuin
                DB::table('regions')->insert(['id'=>3935, 'parent'=>3934, 'code'=>'70815', 'type'=>'village', 'name'=>'Village 70815, Districts 7081, City 708, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40154, 'regionable_type'=>'village']); //Ambungan
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40155, 'regionable_type'=>'village']); //Atu Atu
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40156, 'regionable_type'=>'village']); //Bumi Jaya
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40157, 'regionable_type'=>'village']); //Guntung Besar
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40158, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40159, 'regionable_type'=>'village']); //Pabahanan
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40160, 'regionable_type'=>'village']); //Panggung
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40161, 'regionable_type'=>'village']); //Panggung Baru
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40162, 'regionable_type'=>'village']); //Panjaratan
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40163, 'regionable_type'=>'village']); //Pelaihari
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40164, 'regionable_type'=>'village']); //Pemuda
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40165, 'regionable_type'=>'village']); //Sarang Halang
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40166, 'regionable_type'=>'village']); //Sei/sungai Riam
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40167, 'regionable_type'=>'village']); //Sumber Mulia
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40168, 'regionable_type'=>'village']); //Tampang
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40169, 'regionable_type'=>'village']); //Telaga
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40170, 'regionable_type'=>'village']); //Tungkaran
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40171, 'regionable_type'=>'village']); //Ujung Batu
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40172, 'regionable_type'=>'village']); //Bajuin
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40173, 'regionable_type'=>'village']); //Galam
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40174, 'regionable_type'=>'village']); //Ketapang
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40175, 'regionable_type'=>'village']); //Kunyit
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40176, 'regionable_type'=>'village']); //Pamalungan (pamalongan)
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40177, 'regionable_type'=>'village']); //Sei/sungai Bakar
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40178, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40179, 'regionable_type'=>'village']); //Tebing Siring
                DB::table('regionables')->insert(['region_id'=>3935, 'regionable_id'=>40180, 'regionable_type'=>'village']); //Tirta Jaya
            DB::table('regions')->insert(['id'=>3936, 'parent'=>3933, 'code'=>'7085', 'type'=>'districts', 'name'=>'Districts 7085, City 708, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3936, 'regionable_id'=>3509, 'regionable_type'=>'districts']); //Bati-bati
            DB::table('regionables')->insert(['region_id'=>3936, 'regionable_id'=>3510, 'regionable_type'=>'districts']); //Kurau
            DB::table('regionables')->insert(['region_id'=>3936, 'regionable_id'=>3511, 'regionable_type'=>'districts']); //Bumi Makmur
            DB::table('regionables')->insert(['region_id'=>3936, 'regionable_id'=>3512, 'regionable_type'=>'districts']); //Tambang Ulang
                DB::table('regions')->insert(['id'=>3937, 'parent'=>3936, 'code'=>'70854', 'type'=>'village', 'name'=>'Village 70854, Districts 7085, City 708, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40217, 'regionable_type'=>'village']); //Bingkulu
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40218, 'regionable_type'=>'village']); //Gunung Raja
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40219, 'regionable_type'=>'village']); //Kayu Abang
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40220, 'regionable_type'=>'village']); //Martadah
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40221, 'regionable_type'=>'village']); //Martadah Baru
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40222, 'regionable_type'=>'village']); //Pulau Sari
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40223, 'regionable_type'=>'village']); //Sei/sungai Jelai
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40224, 'regionable_type'=>'village']); //Sei/sungai Pinang
                DB::table('regionables')->insert(['region_id'=>3937, 'regionable_id'=>40225, 'regionable_type'=>'village']); //Tambang Ulang
            DB::table('regions')->insert(['id'=>3938, 'parent'=>3933, 'code'=>'7086', 'type'=>'districts', 'name'=>'Districts 7086, City 708, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3938, 'regionable_id'=>3513, 'regionable_type'=>'districts']); //Takisung
                DB::table('regions')->insert(['id'=>3939, 'parent'=>3938, 'code'=>'70861', 'type'=>'village', 'name'=>'Village 70861, Districts 7086, City 708, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40226, 'regionable_type'=>'village']); //Batilai
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40227, 'regionable_type'=>'village']); //Benua Lawas
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40228, 'regionable_type'=>'village']); //Benua Tengah
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40229, 'regionable_type'=>'village']); //Gunung Makmur
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40230, 'regionable_type'=>'village']); //Kuala Tambangan
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40231, 'regionable_type'=>'village']); //Pegatan Besar
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40232, 'regionable_type'=>'village']); //Ranggang
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40233, 'regionable_type'=>'village']); //Ranggang Dalam
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40234, 'regionable_type'=>'village']); //Sumber Makmur
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40235, 'regionable_type'=>'village']); //Tabanio
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40236, 'regionable_type'=>'village']); //Takisung
                DB::table('regionables')->insert(['region_id'=>3939, 'regionable_id'=>40237, 'regionable_type'=>'village']); //Telaga Langsat
            DB::table('regions')->insert(['id'=>3940, 'parent'=>3933, 'code'=>'7087', 'type'=>'districts', 'name'=>'Districts 7087, City 708, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3940, 'regionable_id'=>3514, 'regionable_type'=>'districts']); //Panyipatan
                DB::table('regions')->insert(['id'=>3941, 'parent'=>3940, 'code'=>'70871', 'type'=>'village', 'name'=>'Village 70871, Districts 7087, City 708, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40238, 'regionable_type'=>'village']); //Batakan
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40239, 'regionable_type'=>'village']); //Batu Mulya
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40240, 'regionable_type'=>'village']); //Batu Tungku
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40241, 'regionable_type'=>'village']); //Bumi Asih
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40242, 'regionable_type'=>'village']); //Kandangan Baru
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40243, 'regionable_type'=>'village']); //Kandangan Lama
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40244, 'regionable_type'=>'village']); //Kuringkit
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40245, 'regionable_type'=>'village']); //Panyipatan
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40246, 'regionable_type'=>'village']); //Suka Ramah
                DB::table('regionables')->insert(['region_id'=>3941, 'regionable_id'=>40247, 'regionable_type'=>'village']); //Tanjung Dewa
            DB::table('regions')->insert(['id'=>3942, 'parent'=>3933, 'code'=>'7088', 'type'=>'districts', 'name'=>'Districts 7088, City 708, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3942, 'regionable_id'=>3515, 'regionable_type'=>'districts']); //Jorong
            DB::table('regionables')->insert(['region_id'=>3942, 'regionable_id'=>3516, 'regionable_type'=>'districts']); //Batu Ampar
            DB::table('regionables')->insert(['region_id'=>3942, 'regionable_id'=>3517, 'regionable_type'=>'districts']); //Kintap
                DB::table('regions')->insert(['id'=>3943, 'parent'=>3942, 'code'=>'70883', 'type'=>'village', 'name'=>'Village 70883, Districts 7088, City 708, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40273, 'regionable_type'=>'village']); //Bukit Mulia
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40274, 'regionable_type'=>'village']); //Kebun Raya
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40275, 'regionable_type'=>'village']); //Kintap
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40276, 'regionable_type'=>'village']); //Kintap Kecil
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40277, 'regionable_type'=>'village']); //Kintap Pura (kintapura)
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40278, 'regionable_type'=>'village']); //Mekar Raya (mekarsari)
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40279, 'regionable_type'=>'village']); //Muara Kintap
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40280, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40281, 'regionable_type'=>'village']); //Pasir Putih
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40282, 'regionable_type'=>'village']); //Riam Adungan
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40283, 'regionable_type'=>'village']); //Salaman
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40284, 'regionable_type'=>'village']); //Sebamban Baru
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40285, 'regionable_type'=>'village']); //Sei/sungai Cuka
                DB::table('regionables')->insert(['region_id'=>3943, 'regionable_id'=>40286, 'regionable_type'=>'village']); //Sumber Jaya
        DB::table('regions')->insert(['id'=>3944, 'parent'=>3741, 'code'=>'711', 'type'=>'city', 'name'=>'City 711, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3944, 'regionable_id'=>182, 'regionable_type'=>'city']); //Tapin regencies
            DB::table('regions')->insert(['id'=>3945, 'parent'=>3944, 'code'=>'7111', 'type'=>'districts', 'name'=>'Districts 7111, City 711, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3945, 'regionable_id'=>3518, 'regionable_type'=>'districts']); //Tapin Utara
                DB::table('regions')->insert(['id'=>3946, 'parent'=>3945, 'code'=>'71111', 'type'=>'village', 'name'=>'Village 71111, Districts 7111, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3946, 'regionable_id'=>40287, 'regionable_type'=>'village']); //Rantau Kiwa
                DB::table('regions')->insert(['id'=>3947, 'parent'=>3945, 'code'=>'71112', 'type'=>'village', 'name'=>'Village 71112, Districts 7111, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3947, 'regionable_id'=>40288, 'regionable_type'=>'village']); //Rantau Kanan
                DB::table('regions')->insert(['id'=>3948, 'parent'=>3945, 'code'=>'71113', 'type'=>'village', 'name'=>'Village 71113, Districts 7111, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3948, 'regionable_id'=>40289, 'regionable_type'=>'village']); //Kupang
                DB::table('regions')->insert(['id'=>3949, 'parent'=>3945, 'code'=>'71114', 'type'=>'village', 'name'=>'Village 71114, Districts 7111, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40290, 'regionable_type'=>'village']); //Antasari
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40291, 'regionable_type'=>'village']); //Antasari Hilir
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40292, 'regionable_type'=>'village']); //Badaun
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40293, 'regionable_type'=>'village']); //Banua Halat Kanan
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40294, 'regionable_type'=>'village']); //Banua Halat Kiri
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40295, 'regionable_type'=>'village']); //Banua Hanyar
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40296, 'regionable_type'=>'village']); //Banua Hanyar Hulu
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40297, 'regionable_type'=>'village']); //Jingah Babaris
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40298, 'regionable_type'=>'village']); //Kakaran
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40299, 'regionable_type'=>'village']); //Keramat
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40300, 'regionable_type'=>'village']); //Lumbu Raya
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40301, 'regionable_type'=>'village']); //Perintis Raya
                DB::table('regionables')->insert(['region_id'=>3949, 'regionable_id'=>40302, 'regionable_type'=>'village']); //Rangda Malingkung
            DB::table('regions')->insert(['id'=>3950, 'parent'=>3944, 'code'=>'7115', 'type'=>'districts', 'name'=>'Districts 7115, City 711, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3950, 'regionable_id'=>3519, 'regionable_type'=>'districts']); //Bakarangan
            DB::table('regionables')->insert(['region_id'=>3950, 'regionable_id'=>3520, 'regionable_type'=>'districts']); //Bungur
            DB::table('regionables')->insert(['region_id'=>3950, 'regionable_id'=>3521, 'regionable_type'=>'districts']); //Lokpaikat
                DB::table('regions')->insert(['id'=>3951, 'parent'=>3950, 'code'=>'71154', 'type'=>'village', 'name'=>'Village 71154, Districts 7115, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40327, 'regionable_type'=>'village']); //Ayunan Papan
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40328, 'regionable_type'=>'village']); //Bataratat
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40329, 'regionable_type'=>'village']); //Binderang
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40330, 'regionable_type'=>'village']); //Bitahan
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40331, 'regionable_type'=>'village']); //Bitahan Baru
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40332, 'regionable_type'=>'village']); //Budi Mulya
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40333, 'regionable_type'=>'village']); //Lokpaikat
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40334, 'regionable_type'=>'village']); //Parandakan
                DB::table('regionables')->insert(['region_id'=>3951, 'regionable_id'=>40335, 'regionable_type'=>'village']); //Puncak Harapan
            DB::table('regions')->insert(['id'=>3952, 'parent'=>3944, 'code'=>'7116', 'type'=>'districts', 'name'=>'Districts 7116, City 711, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3952, 'regionable_id'=>3522, 'regionable_type'=>'districts']); //Tapin Tengah
            DB::table('regionables')->insert(['region_id'=>3952, 'regionable_id'=>3523, 'regionable_type'=>'districts']); //Candi Laras Selatan
                DB::table('regions')->insert(['id'=>3953, 'parent'=>3952, 'code'=>'71162', 'type'=>'village', 'name'=>'Village 71162, Districts 7116, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40353, 'regionable_type'=>'village']); //Baringin A
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40354, 'regionable_type'=>'village']); //Baringin B
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40355, 'regionable_type'=>'village']); //Baulin
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40356, 'regionable_type'=>'village']); //Candi Laras
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40357, 'regionable_type'=>'village']); //Marampiau
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40358, 'regionable_type'=>'village']); //Marampiau Hilir
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40359, 'regionable_type'=>'village']); //Margasari Ulu
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40360, 'regionable_type'=>'village']); //Pabaungan Hilir
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40361, 'regionable_type'=>'village']); //Pabaungan Hulu
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40362, 'regionable_type'=>'village']); //Pabaungan Pantai
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40363, 'regionable_type'=>'village']); //Sei/sungai Rutas
                DB::table('regionables')->insert(['region_id'=>3953, 'regionable_id'=>40364, 'regionable_type'=>'village']); //Sei/sungai Rutas Hulu
            DB::table('regions')->insert(['id'=>3954, 'parent'=>3944, 'code'=>'7117', 'type'=>'districts', 'name'=>'Districts 7117, City 711, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3954, 'regionable_id'=>3524, 'regionable_type'=>'districts']); //Candi Laras Utara
                DB::table('regions')->insert(['id'=>3955, 'parent'=>3954, 'code'=>'71171', 'type'=>'village', 'name'=>'Village 71171, Districts 7117, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40365, 'regionable_type'=>'village']); //Batalas
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40366, 'regionable_type'=>'village']); //Buas Buas
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40367, 'regionable_type'=>'village']); //Buas Buas Hilir
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40368, 'regionable_type'=>'village']); //Kaladan
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40369, 'regionable_type'=>'village']); //Margasari Ilir
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40370, 'regionable_type'=>'village']); //Pariok
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40371, 'regionable_type'=>'village']); //Rawana
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40372, 'regionable_type'=>'village']); //Rawana Hulu
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40373, 'regionable_type'=>'village']); //Sawaja
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40374, 'regionable_type'=>'village']); //Sei/sungai Puting
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40375, 'regionable_type'=>'village']); //Sei/sungai Salai
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40376, 'regionable_type'=>'village']); //Sei/sungai Salai Hilir
                DB::table('regionables')->insert(['region_id'=>3955, 'regionable_id'=>40377, 'regionable_type'=>'village']); //Teluk Haur
            DB::table('regions')->insert(['id'=>3956, 'parent'=>3944, 'code'=>'7118', 'type'=>'districts', 'name'=>'Districts 7118, City 711, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3956, 'regionable_id'=>3525, 'regionable_type'=>'districts']); //Tapin Selatan
            DB::table('regionables')->insert(['region_id'=>3956, 'regionable_id'=>3526, 'regionable_type'=>'districts']); //Binuang
            DB::table('regionables')->insert(['region_id'=>3956, 'regionable_id'=>3527, 'regionable_type'=>'districts']); //Hatungun
            DB::table('regionables')->insert(['region_id'=>3956, 'regionable_id'=>3528, 'regionable_type'=>'districts']); //Salam Babaris
                DB::table('regions')->insert(['id'=>3957, 'parent'=>3956, 'code'=>'71185', 'type'=>'village', 'name'=>'Village 71185, Districts 7118, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3957, 'regionable_id'=>40408, 'regionable_type'=>'village']); //Kambang Habang Baru
                DB::table('regionables')->insert(['region_id'=>3957, 'regionable_id'=>40409, 'regionable_type'=>'village']); //Kambang Habang Lama
                DB::table('regionables')->insert(['region_id'=>3957, 'regionable_id'=>40410, 'regionable_type'=>'village']); //Pantai Cabe
                DB::table('regionables')->insert(['region_id'=>3957, 'regionable_id'=>40411, 'regionable_type'=>'village']); //Salam Babaris
                DB::table('regionables')->insert(['region_id'=>3957, 'regionable_id'=>40412, 'regionable_type'=>'village']); //Suato Baru
                DB::table('regionables')->insert(['region_id'=>3957, 'regionable_id'=>40413, 'regionable_type'=>'village']); //Suato Lama
            DB::table('regions')->insert(['id'=>3958, 'parent'=>3944, 'code'=>'7119', 'type'=>'districts', 'name'=>'Districts 7119, City 711, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3958, 'regionable_id'=>3529, 'regionable_type'=>'districts']); //Piani
                DB::table('regions')->insert(['id'=>3959, 'parent'=>3958, 'code'=>'71191', 'type'=>'village', 'name'=>'Village 71191, Districts 7119, City 711, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3959, 'regionable_id'=>40414, 'regionable_type'=>'village']); //Balawaian
                DB::table('regionables')->insert(['region_id'=>3959, 'regionable_id'=>40415, 'regionable_type'=>'village']); //Baramban
                DB::table('regionables')->insert(['region_id'=>3959, 'regionable_id'=>40416, 'regionable_type'=>'village']); //Batu Ampar
                DB::table('regionables')->insert(['region_id'=>3959, 'regionable_id'=>40417, 'regionable_type'=>'village']); //Batung
                DB::table('regionables')->insert(['region_id'=>3959, 'regionable_id'=>40418, 'regionable_type'=>'village']); //Buni In Jaya
                DB::table('regionables')->insert(['region_id'=>3959, 'regionable_id'=>40419, 'regionable_type'=>'village']); //Harakit
                DB::table('regionables')->insert(['region_id'=>3959, 'regionable_id'=>40420, 'regionable_type'=>'village']); //Miawa
                DB::table('regionables')->insert(['region_id'=>3959, 'regionable_id'=>40421, 'regionable_type'=>'village']); //Pipitak Jaya
        DB::table('regions')->insert(['id'=>3960, 'parent'=>3741, 'code'=>'712', 'type'=>'city', 'name'=>'City 712, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3960, 'regionable_id'=>179, 'regionable_type'=>'city']); //Banjar regencies
        DB::table('regionables')->insert(['region_id'=>3960, 'regionable_id'=>183, 'regionable_type'=>'city']); //Hulu Sungai Selatan regencies
            DB::table('regions')->insert(['id'=>3961, 'parent'=>3960, 'code'=>'7121', 'type'=>'districts', 'name'=>'Districts 7121, City 712, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3961, 'regionable_id'=>3483, 'regionable_type'=>'districts']); //Martapura Kota
            DB::table('regionables')->insert(['region_id'=>3961, 'regionable_id'=>3530, 'regionable_type'=>'districts']); //Kandangan
                DB::table('regions')->insert(['id'=>3962, 'parent'=>3961, 'code'=>'71211', 'type'=>'village', 'name'=>'Village 71211, Districts 7121, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3962, 'regionable_id'=>40422, 'regionable_type'=>'village']); //Kandangan Kota
                DB::table('regions')->insert(['id'=>3963, 'parent'=>3961, 'code'=>'71213', 'type'=>'village', 'name'=>'Village 71213, Districts 7121, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3963, 'regionable_id'=>39867, 'regionable_type'=>'village']); //Sei/sungai Paring
                DB::table('regionables')->insert(['region_id'=>3963, 'regionable_id'=>40423, 'regionable_type'=>'village']); //Amawang Kanan
                DB::table('regionables')->insert(['region_id'=>3963, 'regionable_id'=>40424, 'regionable_type'=>'village']); //Amawang Kiri
                DB::table('regionables')->insert(['region_id'=>3963, 'regionable_id'=>40425, 'regionable_type'=>'village']); //Amawang Kiri Muka
                DB::table('regionables')->insert(['region_id'=>3963, 'regionable_id'=>40426, 'regionable_type'=>'village']); //Bariang
                DB::table('regionables')->insert(['region_id'=>3963, 'regionable_id'=>40427, 'regionable_type'=>'village']); //Kandangan Barat
                DB::table('regionables')->insert(['region_id'=>3963, 'regionable_id'=>40428, 'regionable_type'=>'village']); //Lungau
                DB::table('regionables')->insert(['region_id'=>3963, 'regionable_id'=>40429, 'regionable_type'=>'village']); //Sei/sungai Paring
                DB::table('regions')->insert(['id'=>3964, 'parent'=>3961, 'code'=>'71214', 'type'=>'village', 'name'=>'Village 71214, Districts 7121, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3964, 'regionable_id'=>40430, 'regionable_type'=>'village']); //Jambu Hilir
                DB::table('regionables')->insert(['region_id'=>3964, 'regionable_id'=>40431, 'regionable_type'=>'village']); //Kandangan Utara
                DB::table('regionables')->insert(['region_id'=>3964, 'regionable_id'=>40432, 'regionable_type'=>'village']); //Tibung Raya
                DB::table('regions')->insert(['id'=>3965, 'parent'=>3961, 'code'=>'71215', 'type'=>'village', 'name'=>'Village 71215, Districts 7121, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3965, 'regionable_id'=>40433, 'regionable_type'=>'village']); //Gambah Dalam
                DB::table('regionables')->insert(['region_id'=>3965, 'regionable_id'=>40434, 'regionable_type'=>'village']); //Gambah Dalam Barat
                DB::table('regions')->insert(['id'=>3966, 'parent'=>3961, 'code'=>'71216', 'type'=>'village', 'name'=>'Village 71216, Districts 7121, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3966, 'regionable_id'=>40435, 'regionable_type'=>'village']); //Gambah Luar
                DB::table('regionables')->insert(['region_id'=>3966, 'regionable_id'=>40436, 'regionable_type'=>'village']); //Gambah Luar Muka
                DB::table('regions')->insert(['id'=>3967, 'parent'=>3961, 'code'=>'71217', 'type'=>'village', 'name'=>'Village 71217, Districts 7121, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3967, 'regionable_id'=>40437, 'regionable_type'=>'village']); //Baluti
                DB::table('regionables')->insert(['region_id'=>3967, 'regionable_id'=>40438, 'regionable_type'=>'village']); //Bangkau
                DB::table('regionables')->insert(['region_id'=>3967, 'regionable_id'=>40439, 'regionable_type'=>'village']); //Sei/sungai Kupang
            DB::table('regions')->insert(['id'=>3968, 'parent'=>3960, 'code'=>'7125', 'type'=>'districts', 'name'=>'Districts 7125, City 712, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3968, 'regionable_id'=>3531, 'regionable_type'=>'districts']); //Daha Barat
            DB::table('regionables')->insert(['region_id'=>3968, 'regionable_id'=>3532, 'regionable_type'=>'districts']); //Daha Selatan
            DB::table('regionables')->insert(['region_id'=>3968, 'regionable_id'=>3533, 'regionable_type'=>'districts']); //Daha Utara
                DB::table('regions')->insert(['id'=>3969, 'parent'=>3968, 'code'=>'71253', 'type'=>'village', 'name'=>'Village 71253, Districts 7125, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40463, 'regionable_type'=>'village']); //Baruh Kembang
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40464, 'regionable_type'=>'village']); //Belah Paikat
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40465, 'regionable_type'=>'village']); //Hakurung
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40466, 'regionable_type'=>'village']); //Hamayung
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40467, 'regionable_type'=>'village']); //Hamayung Utara
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40468, 'regionable_type'=>'village']); //Mandala Murung Mesjid
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40469, 'regionable_type'=>'village']); //Murung Raya
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40470, 'regionable_type'=>'village']); //Paharangan
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40471, 'regionable_type'=>'village']); //Pakan Dalam
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40472, 'regionable_type'=>'village']); //Pakapuran Kecil
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40473, 'regionable_type'=>'village']); //Pandak Daun
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40474, 'regionable_type'=>'village']); //Panggandingan
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40475, 'regionable_type'=>'village']); //Paramaian
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40476, 'regionable_type'=>'village']); //Pasungkan
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40477, 'regionable_type'=>'village']); //Sei/sungai Garuda
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40478, 'regionable_type'=>'village']); //Sei/sungai Mandala
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40479, 'regionable_type'=>'village']); //Taluk Haur
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40480, 'regionable_type'=>'village']); //Tambak Bitin
                DB::table('regionables')->insert(['region_id'=>3969, 'regionable_id'=>40481, 'regionable_type'=>'village']); //Teluk Labak
            DB::table('regions')->insert(['id'=>3970, 'parent'=>3960, 'code'=>'7126', 'type'=>'districts', 'name'=>'Districts 7126, City 712, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3970, 'regionable_id'=>3534, 'regionable_type'=>'districts']); //Simpur
            DB::table('regionables')->insert(['region_id'=>3970, 'regionable_id'=>3535, 'regionable_type'=>'districts']); //Kalumpang (kelumpang)
                DB::table('regions')->insert(['id'=>3971, 'parent'=>3970, 'code'=>'71262', 'type'=>'village', 'name'=>'Village 71262, Districts 7126, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40493, 'regionable_type'=>'village']); //Bago Tanggul
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40494, 'regionable_type'=>'village']); //Balanti
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40495, 'regionable_type'=>'village']); //Balimau
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40496, 'regionable_type'=>'village']); //Kalumpang (kelumpang)
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40497, 'regionable_type'=>'village']); //Karang Bulan
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40498, 'regionable_type'=>'village']); //Karang Paci
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40499, 'regionable_type'=>'village']); //Sirih
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40500, 'regionable_type'=>'village']); //Sirih Hulu
                DB::table('regionables')->insert(['region_id'=>3971, 'regionable_id'=>40501, 'regionable_type'=>'village']); //Tambingkar
            DB::table('regions')->insert(['id'=>3972, 'parent'=>3960, 'code'=>'7127', 'type'=>'districts', 'name'=>'Districts 7127, City 712, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3972, 'regionable_id'=>3536, 'regionable_type'=>'districts']); //Sungai Raya
                DB::table('regions')->insert(['id'=>3973, 'parent'=>3972, 'code'=>'71271', 'type'=>'village', 'name'=>'Village 71271, Districts 7127, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40502, 'regionable_type'=>'village']); //Asam
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40503, 'regionable_type'=>'village']); //Baru
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40504, 'regionable_type'=>'village']); //Batang Kulur Kanan
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40505, 'regionable_type'=>'village']); //Batang Kulur Kiri
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40506, 'regionable_type'=>'village']); //Batang Kulur Tengah
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40507, 'regionable_type'=>'village']); //Bumi Barkat
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40508, 'regionable_type'=>'village']); //Hamalau
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40509, 'regionable_type'=>'village']); //Hariti
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40510, 'regionable_type'=>'village']); //Ida Manggala
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40511, 'regionable_type'=>'village']); //Karasikan
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40512, 'regionable_type'=>'village']); //Paring Agung
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40513, 'regionable_type'=>'village']); //Sarang Halang
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40514, 'regionable_type'=>'village']); //Sei/sungai Kali
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40515, 'regionable_type'=>'village']); //Sei/sungai Raya Selatan
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40516, 'regionable_type'=>'village']); //Sei/sungai Raya Utara
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40517, 'regionable_type'=>'village']); //Tamiyang
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40518, 'regionable_type'=>'village']); //Tanah Bangkang
                DB::table('regionables')->insert(['region_id'=>3973, 'regionable_id'=>40519, 'regionable_type'=>'village']); //Telaga Bidadari
            DB::table('regions')->insert(['id'=>3974, 'parent'=>3960, 'code'=>'7128', 'type'=>'districts', 'name'=>'Districts 7128, City 712, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3974, 'regionable_id'=>3537, 'regionable_type'=>'districts']); //Padang Batung
            DB::table('regionables')->insert(['region_id'=>3974, 'regionable_id'=>3538, 'regionable_type'=>'districts']); //Loksado
                DB::table('regions')->insert(['id'=>3975, 'parent'=>3974, 'code'=>'71282', 'type'=>'village', 'name'=>'Village 71282, Districts 7128, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40537, 'regionable_type'=>'village']); //Halunuk
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40538, 'regionable_type'=>'village']); //Haratai
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40539, 'regionable_type'=>'village']); //Hulu Banyu
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40540, 'regionable_type'=>'village']); //Kamawakan
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40541, 'regionable_type'=>'village']); //Lok Lahung
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40542, 'regionable_type'=>'village']); //Loksado
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40543, 'regionable_type'=>'village']); //Lumpangi
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40544, 'regionable_type'=>'village']); //Malinau
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40545, 'regionable_type'=>'village']); //Panggungan
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40546, 'regionable_type'=>'village']); //Tumingki
                DB::table('regionables')->insert(['region_id'=>3975, 'regionable_id'=>40547, 'regionable_type'=>'village']); //Ulang (muara Ulang)
            DB::table('regions')->insert(['id'=>3976, 'parent'=>3960, 'code'=>'7129', 'type'=>'districts', 'name'=>'Districts 7129, City 712, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3976, 'regionable_id'=>3539, 'regionable_type'=>'districts']); //Angkinang
            DB::table('regionables')->insert(['region_id'=>3976, 'regionable_id'=>3540, 'regionable_type'=>'districts']); //Telaga Langsat
                DB::table('regions')->insert(['id'=>3977, 'parent'=>3976, 'code'=>'71292', 'type'=>'village', 'name'=>'Village 71292, Districts 7129, City 712, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40559, 'regionable_type'=>'village']); //Ambutun
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40560, 'regionable_type'=>'village']); //Gumbil
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40561, 'regionable_type'=>'village']); //Hamak
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40562, 'regionable_type'=>'village']); //Hamak Timur
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40563, 'regionable_type'=>'village']); //Hamak Utara
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40564, 'regionable_type'=>'village']); //Lok Binuang
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40565, 'regionable_type'=>'village']); //Longawang
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40566, 'regionable_type'=>'village']); //Mandala
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40567, 'regionable_type'=>'village']); //Pakuan Timur
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40568, 'regionable_type'=>'village']); //Pandulangan
                DB::table('regionables')->insert(['region_id'=>3977, 'regionable_id'=>40569, 'regionable_type'=>'village']); //Telaga Langsat
        DB::table('regions')->insert(['id'=>3978, 'parent'=>3741, 'code'=>'713', 'type'=>'city', 'name'=>'City 713, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3978, 'regionable_id'=>184, 'regionable_type'=>'city']); //Hulu Sungai Tengah regencies
            DB::table('regions')->insert(['id'=>3979, 'parent'=>3978, 'code'=>'7131', 'type'=>'districts', 'name'=>'Districts 7131, City 713, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3979, 'regionable_id'=>3541, 'regionable_type'=>'districts']); //Barabai
                DB::table('regions')->insert(['id'=>3980, 'parent'=>3979, 'code'=>'71311', 'type'=>'village', 'name'=>'Village 71311, Districts 7131, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3980, 'regionable_id'=>40570, 'regionable_type'=>'village']); //Barabai Selatan
                DB::table('regions')->insert(['id'=>3981, 'parent'=>3979, 'code'=>'71312', 'type'=>'village', 'name'=>'Village 71312, Districts 7131, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3981, 'regionable_id'=>40571, 'regionable_type'=>'village']); //Barabai Timur
                DB::table('regions')->insert(['id'=>3982, 'parent'=>3979, 'code'=>'71313', 'type'=>'village', 'name'=>'Village 71313, Districts 7131, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3982, 'regionable_id'=>40572, 'regionable_type'=>'village']); //Barabai Utara
                DB::table('regions')->insert(['id'=>3983, 'parent'=>3979, 'code'=>'71314', 'type'=>'village', 'name'=>'Village 71314, Districts 7131, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3983, 'regionable_id'=>40573, 'regionable_type'=>'village']); //Barabai Barat
                DB::table('regions')->insert(['id'=>3984, 'parent'=>3979, 'code'=>'71315', 'type'=>'village', 'name'=>'Village 71315, Districts 7131, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40574, 'regionable_type'=>'village']); //Awang Besar
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40575, 'regionable_type'=>'village']); //Ayuang
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40576, 'regionable_type'=>'village']); //Babai
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40577, 'regionable_type'=>'village']); //Bakapas
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40578, 'regionable_type'=>'village']); //Banua Binjai
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40579, 'regionable_type'=>'village']); //Banua Budi
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40580, 'regionable_type'=>'village']); //Banua Jingah
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40581, 'regionable_type'=>'village']); //Barabai Darat
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40582, 'regionable_type'=>'village']); //Benawa Tengah
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40583, 'regionable_type'=>'village']); //Bukat
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40584, 'regionable_type'=>'village']); //Gambah
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40585, 'regionable_type'=>'village']); //Kayu Bawang
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40586, 'regionable_type'=>'village']); //Mandingin
                DB::table('regionables')->insert(['region_id'=>3984, 'regionable_id'=>40587, 'regionable_type'=>'village']); //Pajukungan
            DB::table('regions')->insert(['id'=>3985, 'parent'=>3978, 'code'=>'7135', 'type'=>'districts', 'name'=>'Districts 7135, City 713, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3985, 'regionable_id'=>3542, 'regionable_type'=>'districts']); //Pandawan
                DB::table('regions')->insert(['id'=>3986, 'parent'=>3985, 'code'=>'71352', 'type'=>'village', 'name'=>'Village 71352, Districts 7135, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40588, 'regionable_type'=>'village']); //Banua Asam
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40589, 'regionable_type'=>'village']); //Banua Batung
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40590, 'regionable_type'=>'village']); //Banua Hanyar
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40591, 'regionable_type'=>'village']); //Banua Supanggal
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40592, 'regionable_type'=>'village']); //Buluan
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40593, 'regionable_type'=>'village']); //Hilir Banua
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40594, 'regionable_type'=>'village']); //Hulu Rasau
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40595, 'regionable_type'=>'village']); //Jaranih
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40596, 'regionable_type'=>'village']); //Jatuh
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40597, 'regionable_type'=>'village']); //Kambat Selatan
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40598, 'regionable_type'=>'village']); //Kambat Utara
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40599, 'regionable_type'=>'village']); //Kayu Rabah
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40600, 'regionable_type'=>'village']); //Mahang Matang Landung
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40601, 'regionable_type'=>'village']); //Mahang Putat
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40602, 'regionable_type'=>'village']); //Mahang Sei/sungai Hanyar
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40603, 'regionable_type'=>'village']); //Masiraan
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40604, 'regionable_type'=>'village']); //Matang Ginalun
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40605, 'regionable_type'=>'village']); //Palajau
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40606, 'regionable_type'=>'village']); //Pandawan
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40607, 'regionable_type'=>'village']); //Setiap
                DB::table('regionables')->insert(['region_id'=>3986, 'regionable_id'=>40608, 'regionable_type'=>'village']); //Walatung
            DB::table('regions')->insert(['id'=>3987, 'parent'=>3978, 'code'=>'7136', 'type'=>'districts', 'name'=>'Districts 7136, City 713, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3987, 'regionable_id'=>3543, 'regionable_type'=>'districts']); //Labuan Amas Selatan
            DB::table('regionables')->insert(['region_id'=>3987, 'regionable_id'=>3544, 'regionable_type'=>'districts']); //Labuan Amas Utara
            DB::table('regionables')->insert(['region_id'=>3987, 'regionable_id'=>3545, 'regionable_type'=>'districts']); //Haruyan
                DB::table('regions')->insert(['id'=>3988, 'parent'=>3987, 'code'=>'71363', 'type'=>'village', 'name'=>'Village 71363, Districts 7136, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40643, 'regionable_type'=>'village']); //Andang
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40644, 'regionable_type'=>'village']); //Barikin
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40645, 'regionable_type'=>'village']); //Batu Panggung
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40646, 'regionable_type'=>'village']); //Hapulang
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40647, 'regionable_type'=>'village']); //Haruyan
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40648, 'regionable_type'=>'village']); //Haruyan Seberang
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40649, 'regionable_type'=>'village']); //Lokbuntar
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40650, 'regionable_type'=>'village']); //Mangunang
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40651, 'regionable_type'=>'village']); //Mangunang Seberang
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40652, 'regionable_type'=>'village']); //Pandanu
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40653, 'regionable_type'=>'village']); //Pangambau Hilir Luar
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40654, 'regionable_type'=>'village']); //Panggung
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40655, 'regionable_type'=>'village']); //Pengambau Hilir Dalam
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40656, 'regionable_type'=>'village']); //Pengambau Hulu
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40657, 'regionable_type'=>'village']); //Sei/sungai Harang
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40658, 'regionable_type'=>'village']); //Tabat Padang
                DB::table('regionables')->insert(['region_id'=>3988, 'regionable_id'=>40659, 'regionable_type'=>'village']); //Teluk Mesjid
            DB::table('regions')->insert(['id'=>3989, 'parent'=>3978, 'code'=>'7137', 'type'=>'districts', 'name'=>'Districts 7137, City 713, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3989, 'regionable_id'=>3546, 'regionable_type'=>'districts']); //Batu Benawa
            DB::table('regionables')->insert(['region_id'=>3989, 'regionable_id'=>3547, 'regionable_type'=>'districts']); //Hantakan
                DB::table('regions')->insert(['id'=>3990, 'parent'=>3989, 'code'=>'71372', 'type'=>'village', 'name'=>'Village 71372, Districts 7137, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40674, 'regionable_type'=>'village']); //Alat
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40675, 'regionable_type'=>'village']); //Batu Tunggal
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40676, 'regionable_type'=>'village']); //Bulayak
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40677, 'regionable_type'=>'village']); //Datar Ajab
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40678, 'regionable_type'=>'village']); //Hantakan
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40679, 'regionable_type'=>'village']); //Haruyan Dayak
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40680, 'regionable_type'=>'village']); //Hinas Kanan
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40681, 'regionable_type'=>'village']); //Kindingan
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40682, 'regionable_type'=>'village']); //Murung B
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40683, 'regionable_type'=>'village']); //Pasting
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40684, 'regionable_type'=>'village']); //Patikalain
                DB::table('regionables')->insert(['region_id'=>3990, 'regionable_id'=>40685, 'regionable_type'=>'village']); //Tilahan
            DB::table('regions')->insert(['id'=>3991, 'parent'=>3978, 'code'=>'7138', 'type'=>'districts', 'name'=>'Districts 7138, City 713, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3991, 'regionable_id'=>3548, 'regionable_type'=>'districts']); //Batang Alai Selatan
            DB::table('regionables')->insert(['region_id'=>3991, 'regionable_id'=>3549, 'regionable_type'=>'districts']); //Batang Alai Timur
                DB::table('regions')->insert(['id'=>3992, 'parent'=>3991, 'code'=>'71382', 'type'=>'village', 'name'=>'Village 71382, Districts 7138, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40705, 'regionable_type'=>'village']); //Aing Bantai
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40706, 'regionable_type'=>'village']); //Atiran
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40707, 'regionable_type'=>'village']); //Batu Perahu
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40708, 'regionable_type'=>'village']); //Batu Tangga
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40709, 'regionable_type'=>'village']); //Datar Batung
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40710, 'regionable_type'=>'village']); //Hinas Kiri
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40711, 'regionable_type'=>'village']); //Juhu
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40712, 'regionable_type'=>'village']); //Muara Hungi
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40713, 'regionable_type'=>'village']); //Nateh
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40714, 'regionable_type'=>'village']); //Pembakulan
                DB::table('regionables')->insert(['region_id'=>3992, 'regionable_id'=>40715, 'regionable_type'=>'village']); //Tandilang
            DB::table('regions')->insert(['id'=>3993, 'parent'=>3978, 'code'=>'7139', 'type'=>'districts', 'name'=>'Districts 7139, City 713, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3993, 'regionable_id'=>3550, 'regionable_type'=>'districts']); //Limpasu
            DB::table('regionables')->insert(['region_id'=>3993, 'regionable_id'=>3551, 'regionable_type'=>'districts']); //Batang Alai Utara
                DB::table('regions')->insert(['id'=>3994, 'parent'=>3993, 'code'=>'71391', 'type'=>'village', 'name'=>'Village 71391, Districts 7139, City 713, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40716, 'regionable_type'=>'village']); //Abung
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40717, 'regionable_type'=>'village']); //Abung Surapati
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40718, 'regionable_type'=>'village']); //Hawang
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40719, 'regionable_type'=>'village']); //Kabang
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40720, 'regionable_type'=>'village']); //Karatungan
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40721, 'regionable_type'=>'village']); //Karau
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40722, 'regionable_type'=>'village']); //Limpasu
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40723, 'regionable_type'=>'village']); //Pauh
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40724, 'regionable_type'=>'village']); //Tapuk
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40725, 'regionable_type'=>'village']); //Awang
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40726, 'regionable_type'=>'village']); //Awang Baru
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40727, 'regionable_type'=>'village']); //Dangu
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40728, 'regionable_type'=>'village']); //Hapingin
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40729, 'regionable_type'=>'village']); //Haur Gading
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40730, 'regionable_type'=>'village']); //Ilung
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40731, 'regionable_type'=>'village']); //Ilung Pasar Lama
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40732, 'regionable_type'=>'village']); //Ilung Tengah
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40733, 'regionable_type'=>'village']); //Labunganak
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40734, 'regionable_type'=>'village']); //Maringgit
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40735, 'regionable_type'=>'village']); //Muara Rintis
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40736, 'regionable_type'=>'village']); //Sumanggi
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40737, 'regionable_type'=>'village']); //Sumanggi Semerang / Seberang
                DB::table('regionables')->insert(['region_id'=>3994, 'regionable_id'=>40738, 'regionable_type'=>'village']); //Telang
        DB::table('regions')->insert(['id'=>3995, 'parent'=>3741, 'code'=>'714', 'type'=>'city', 'name'=>'City 714, Province 7']);
        DB::table('regionables')->insert(['region_id'=>3995, 'regionable_id'=>185, 'regionable_type'=>'city']); //Hulu Sungai Utara regencies
            DB::table('regions')->insert(['id'=>3996, 'parent'=>3995, 'code'=>'7141', 'type'=>'districts', 'name'=>'Districts 7141, City 714, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3996, 'regionable_id'=>3552, 'regionable_type'=>'districts']); //Amuntai Tengah
            DB::table('regionables')->insert(['region_id'=>3996, 'regionable_id'=>3553, 'regionable_type'=>'districts']); //Banjang
                DB::table('regions')->insert(['id'=>3997, 'parent'=>3996, 'code'=>'71416', 'type'=>'village', 'name'=>'Village 71416, Districts 7141, City 714, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40768, 'regionable_type'=>'village']); //Banjang
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40769, 'regionable_type'=>'village']); //Baruh Tabing
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40770, 'regionable_type'=>'village']); //Beringin/baringin
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40771, 'regionable_type'=>'village']); //Danau Terate/terati
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40772, 'regionable_type'=>'village']); //Garunggang
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40773, 'regionable_type'=>'village']); //Kalintamui
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40774, 'regionable_type'=>'village']); //Kaludan Besar
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40775, 'regionable_type'=>'village']); //Kaludan Kecil
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40776, 'regionable_type'=>'village']); //Karias Dalam
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40777, 'regionable_type'=>'village']); //Lok Bangkai
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40778, 'regionable_type'=>'village']); //Murung Padang
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40779, 'regionable_type'=>'village']); //Palanjungan Sari
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40780, 'regionable_type'=>'village']); //Pandulangan
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40781, 'regionable_type'=>'village']); //Patarikan
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40782, 'regionable_type'=>'village']); //Pawalutan
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40783, 'regionable_type'=>'village']); //Pulau Damar
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40784, 'regionable_type'=>'village']); //Rantau Bujur
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40785, 'regionable_type'=>'village']); //Sei/sungai Bahadangan
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40786, 'regionable_type'=>'village']); //Teluk Buluh
                DB::table('regionables')->insert(['region_id'=>3997, 'regionable_id'=>40787, 'regionable_type'=>'village']); //Teluk Sarikat
            DB::table('regions')->insert(['id'=>3998, 'parent'=>3995, 'code'=>'7145', 'type'=>'districts', 'name'=>'Districts 7145, City 714, Province 7']);
            DB::table('regionables')->insert(['region_id'=>3998, 'regionable_id'=>3554, 'regionable_type'=>'districts']); //Amuntai Selatan
            DB::table('regionables')->insert(['region_id'=>3998, 'regionable_id'=>3555, 'regionable_type'=>'districts']); //Paminggir
            DB::table('regionables')->insert(['region_id'=>3998, 'regionable_id'=>3556, 'regionable_type'=>'districts']); //Danau Panggang
            DB::table('regionables')->insert(['region_id'=>3998, 'regionable_id'=>3557, 'regionable_type'=>'districts']); //Babirik
            DB::table('regionables')->insert(['region_id'=>3998, 'regionable_id'=>3558, 'regionable_type'=>'districts']); //Sungai Tabukan
            DB::table('regionables')->insert(['region_id'=>3998, 'regionable_id'=>3559, 'regionable_type'=>'districts']); //Sungai Pandan
                DB::table('regions')->insert(['id'=>3999, 'parent'=>3998, 'code'=>'71455', 'type'=>'village', 'name'=>'Village 71455, Districts 7145, City 714, Province 7']);
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40864, 'regionable_type'=>'village']); //Banua Hanyar
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40865, 'regionable_type'=>'village']); //Galagah
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40866, 'regionable_type'=>'village']); //Galagah Hulu
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40867, 'regionable_type'=>'village']); //Gampa Raya
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40868, 'regionable_type'=>'village']); //Hilir Mesjid
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40869, 'regionable_type'=>'village']); //Nelayan
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40870, 'regionable_type'=>'village']); //Pasar Sabtu
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40871, 'regionable_type'=>'village']); //Pematang Benteng
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40872, 'regionable_type'=>'village']); //Pematang Benteng Hilir
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40873, 'regionable_type'=>'village']); //Rantau Bujur Darat
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40874, 'regionable_type'=>'village']); //Rantau Bujur Hilir
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40875, 'regionable_type'=>'village']); //Rantau Bujur Hulu
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40876, 'regionable_type'=>'village']); //Rantau Bujur Tengah
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40877, 'regionable_type'=>'village']); //Sei/sungai Haji
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40878, 'regionable_type'=>'village']); //Sei/sungai Tabukan
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40879, 'regionable_type'=>'village']); //Tambalang Raya
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40880, 'regionable_type'=>'village']); //Teluk Cati
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40881, 'regionable_type'=>'village']); //Banyu Tajun Dalam
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40882, 'regionable_type'=>'village']); //Banyu Tajun Hilir
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40883, 'regionable_type'=>'village']); //Banyu Tajun Hulu
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40884, 'regionable_type'=>'village']); //Banyu Tajun Pangkalan
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40885, 'regionable_type'=>'village']); //Hambuku Hulu
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40886, 'regionable_type'=>'village']); //Hambuku Pasar
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40887, 'regionable_type'=>'village']); //Hambuku Raya
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40888, 'regionable_type'=>'village']); //Hambuku Tengah
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40889, 'regionable_type'=>'village']); //Jalan Lurus
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40890, 'regionable_type'=>'village']); //Murung Asam
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40891, 'regionable_type'=>'village']); //Padang Bangkal
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40892, 'regionable_type'=>'village']); //Pandulangan
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40893, 'regionable_type'=>'village']); //Pangkalan Sari
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40894, 'regionable_type'=>'village']); //Pondok Babaris
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40895, 'regionable_type'=>'village']); //Putat Atas /tatau
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40896, 'regionable_type'=>'village']); //Rantau Karau Hilir
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40897, 'regionable_type'=>'village']); //Rantau Karau Hulu
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40898, 'regionable_type'=>'village']); //Rantau Karau Raya
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40899, 'regionable_type'=>'village']); //Rantau Karau Tengah
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40900, 'regionable_type'=>'village']); //Sei/sungai Kuini
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40901, 'regionable_type'=>'village']); //Sei/sungai Pandan Hilir
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40902, 'regionable_type'=>'village']); //Sei/sungai Pandan Hulu
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40903, 'regionable_type'=>'village']); //Sei/sungai Pandan Tengah
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40904, 'regionable_type'=>'village']); //Sei/sungai Pinang
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40905, 'regionable_type'=>'village']); //Sei/sungai Sandung
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40906, 'regionable_type'=>'village']); //Tambalang
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40907, 'regionable_type'=>'village']); //Tambalang Kecil
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40908, 'regionable_type'=>'village']); //Tambalang Tengah
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40909, 'regionable_type'=>'village']); //Tapus Dalam
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40910, 'regionable_type'=>'village']); //Tatah Laban
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40911, 'regionable_type'=>'village']); //Teluk Betung
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40912, 'regionable_type'=>'village']); //Teluk Mesjid
                DB::table('regionables')->insert(['region_id'=>3999, 'regionable_id'=>40913, 'regionable_type'=>'village']); //Teluk Sinar
            DB::table('regions')->insert(['id'=>4000, 'parent'=>3995, 'code'=>'7147', 'type'=>'districts', 'name'=>'Districts 7147, City 714, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4000, 'regionable_id'=>3560, 'regionable_type'=>'districts']); //Amuntai Utara
            DB::table('regionables')->insert(['region_id'=>4000, 'regionable_id'=>3561, 'regionable_type'=>'districts']); //Haur Gading
                DB::table('regions')->insert(['id'=>4001, 'parent'=>4000, 'code'=>'71471', 'type'=>'village', 'name'=>'Village 71471, Districts 7147, City 714, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40914, 'regionable_type'=>'village']); //Air Tawar
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40915, 'regionable_type'=>'village']); //Cakru
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40916, 'regionable_type'=>'village']); //Guntung
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40917, 'regionable_type'=>'village']); //Kamayahan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40918, 'regionable_type'=>'village']); //Kuangan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40919, 'regionable_type'=>'village']); //Muara Baruh
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40920, 'regionable_type'=>'village']); //Murung Karangan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40921, 'regionable_type'=>'village']); //Padang Basar Hilir
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40922, 'regionable_type'=>'village']); //Padang Basar Hulu
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40923, 'regionable_type'=>'village']); //Padang Luar
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40924, 'regionable_type'=>'village']); //Pakacangan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40925, 'regionable_type'=>'village']); //Pakapuran
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40926, 'regionable_type'=>'village']); //Pamintangan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40927, 'regionable_type'=>'village']); //Panangian
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40928, 'regionable_type'=>'village']); //Panangkalaan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40929, 'regionable_type'=>'village']); //Panangkalaan Hulu
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40930, 'regionable_type'=>'village']); //Pandawan (pandawanan)
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40931, 'regionable_type'=>'village']); //Panyaungan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40932, 'regionable_type'=>'village']); //Pimping
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40933, 'regionable_type'=>'village']); //Sei/sungai Turak
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40934, 'regionable_type'=>'village']); //Sei/sungai Turak Dalam
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40935, 'regionable_type'=>'village']); //Tabalong Mati
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40936, 'regionable_type'=>'village']); //Tabing Lering
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40937, 'regionable_type'=>'village']); //Tayur
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40938, 'regionable_type'=>'village']); //Telaga Bamban
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40939, 'regionable_type'=>'village']); //Teluk Daun
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40940, 'regionable_type'=>'village']); //Bayur
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40941, 'regionable_type'=>'village']); //Haur Gading
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40942, 'regionable_type'=>'village']); //Jingah Bujur
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40943, 'regionable_type'=>'village']); //Keramat/karamat
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40944, 'regionable_type'=>'village']); //Loksoga/lok Suga
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40945, 'regionable_type'=>'village']); //Palimbangan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40946, 'regionable_type'=>'village']); //Palimbangan Gusti
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40947, 'regionable_type'=>'village']); //Palimbangan Sari
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40948, 'regionable_type'=>'village']); //Panawakan
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40949, 'regionable_type'=>'village']); //Pihaung
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40950, 'regionable_type'=>'village']); //Pulantani/polantani
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40951, 'regionable_type'=>'village']); //Sei/sungai Binuang
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40952, 'regionable_type'=>'village']); //Sei/sungai Limas
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40953, 'regionable_type'=>'village']); //Tambak Sari Panji
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40954, 'regionable_type'=>'village']); //Tangkawang
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40955, 'regionable_type'=>'village']); //Teluk Haur
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40956, 'regionable_type'=>'village']); //Tuhuran
                DB::table('regionables')->insert(['region_id'=>4001, 'regionable_id'=>40957, 'regionable_type'=>'village']); //Waringin
        DB::table('regions')->insert(['id'=>4002, 'parent'=>3741, 'code'=>'715', 'type'=>'city', 'name'=>'City 715, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4002, 'regionable_id'=>186, 'regionable_type'=>'city']); //Tabalong regencies
            DB::table('regions')->insert(['id'=>4003, 'parent'=>4002, 'code'=>'7151', 'type'=>'districts', 'name'=>'Districts 7151, City 715, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4003, 'regionable_id'=>3562, 'regionable_type'=>'districts']); //Tanjung
                DB::table('regions')->insert(['id'=>4004, 'parent'=>4003, 'code'=>'71512', 'type'=>'village', 'name'=>'Village 71512, Districts 7151, City 715, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4004, 'regionable_id'=>40958, 'regionable_type'=>'village']); //Jangkung
                DB::table('regions')->insert(['id'=>4005, 'parent'=>4003, 'code'=>'71513', 'type'=>'village', 'name'=>'Village 71513, Districts 7151, City 715, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4005, 'regionable_id'=>40959, 'regionable_type'=>'village']); //Tanjung
                DB::table('regions')->insert(['id'=>4006, 'parent'=>4003, 'code'=>'71514', 'type'=>'village', 'name'=>'Village 71514, Districts 7151, City 715, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4006, 'regionable_id'=>40960, 'regionable_type'=>'village']); //Agung
                DB::table('regions')->insert(['id'=>4007, 'parent'=>4003, 'code'=>'71515', 'type'=>'village', 'name'=>'Village 71515, Districts 7151, City 715, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40961, 'regionable_type'=>'village']); //Banyu Tajun
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40962, 'regionable_type'=>'village']); //Garunggung
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40963, 'regionable_type'=>'village']); //Hikun
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40964, 'regionable_type'=>'village']); //Juai
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40965, 'regionable_type'=>'village']); //Kambitin
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40966, 'regionable_type'=>'village']); //Kambitin Raya
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40967, 'regionable_type'=>'village']); //Kitang
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40968, 'regionable_type'=>'village']); //Mahe Seberang
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40969, 'regionable_type'=>'village']); //Pamarangan Kiwa
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40970, 'regionable_type'=>'village']); //Puain Kiwa
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40971, 'regionable_type'=>'village']); //Sei/sungai Pimping
                DB::table('regionables')->insert(['region_id'=>4007, 'regionable_id'=>40972, 'regionable_type'=>'village']); //Wayau
            DB::table('regions')->insert(['id'=>4008, 'parent'=>4002, 'code'=>'7155', 'type'=>'districts', 'name'=>'Districts 7155, City 715, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4008, 'regionable_id'=>3563, 'regionable_type'=>'districts']); //Kelua (klua)
            DB::table('regionables')->insert(['region_id'=>4008, 'regionable_id'=>3564, 'regionable_type'=>'districts']); //Banua Lawas
            DB::table('regionables')->insert(['region_id'=>4008, 'regionable_id'=>3565, 'regionable_type'=>'districts']); //Pugaan
            DB::table('regionables')->insert(['region_id'=>4008, 'regionable_id'=>3566, 'regionable_type'=>'districts']); //Muara Harus
                DB::table('regions')->insert(['id'=>4009, 'parent'=>4008, 'code'=>'71555', 'type'=>'village', 'name'=>'Village 71555, Districts 7155, City 715, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4009, 'regionable_id'=>41007, 'regionable_type'=>'village']); //Harus
                DB::table('regionables')->insert(['region_id'=>4009, 'regionable_id'=>41008, 'regionable_type'=>'village']); //Madang
                DB::table('regionables')->insert(['region_id'=>4009, 'regionable_id'=>41009, 'regionable_type'=>'village']); //Manduin
                DB::table('regionables')->insert(['region_id'=>4009, 'regionable_id'=>41010, 'regionable_type'=>'village']); //Mantuil
                DB::table('regionables')->insert(['region_id'=>4009, 'regionable_id'=>41011, 'regionable_type'=>'village']); //Murung Karangan
                DB::table('regionables')->insert(['region_id'=>4009, 'regionable_id'=>41012, 'regionable_type'=>'village']); //Padangin
                DB::table('regionables')->insert(['region_id'=>4009, 'regionable_id'=>41013, 'regionable_type'=>'village']); //Tantaringin
            DB::table('regions')->insert(['id'=>4010, 'parent'=>4002, 'code'=>'7156', 'type'=>'districts', 'name'=>'Districts 7156, City 715, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4010, 'regionable_id'=>3567, 'regionable_type'=>'districts']); //Tanta
                DB::table('regions')->insert(['id'=>4011, 'parent'=>4010, 'code'=>'71561', 'type'=>'village', 'name'=>'Village 71561, Districts 7156, City 715, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41014, 'regionable_type'=>'village']); //Barimbun
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41015, 'regionable_type'=>'village']); //Luk Bayur
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41016, 'regionable_type'=>'village']); //Mangkusip
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41017, 'regionable_type'=>'village']); //Murung Baru
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41018, 'regionable_type'=>'village']); //Padang Panjang
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41019, 'regionable_type'=>'village']); //Padangin
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41020, 'regionable_type'=>'village']); //Pamarangan Kanan
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41021, 'regionable_type'=>'village']); //Puain Kanan
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41022, 'regionable_type'=>'village']); //Pulau Kuu (kuu)
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41023, 'regionable_type'=>'village']); //Tamiyang
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41024, 'regionable_type'=>'village']); //Tanta
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41025, 'regionable_type'=>'village']); //Tanta Hulu
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41026, 'regionable_type'=>'village']); //Walangkir
                DB::table('regionables')->insert(['region_id'=>4011, 'regionable_id'=>41027, 'regionable_type'=>'village']); //Warukin
            DB::table('regions')->insert(['id'=>4012, 'parent'=>4002, 'code'=>'7157', 'type'=>'districts', 'name'=>'Districts 7157, City 715, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4012, 'regionable_id'=>3568, 'regionable_type'=>'districts']); //Murung Pudak
            DB::table('regionables')->insert(['region_id'=>4012, 'regionable_id'=>3569, 'regionable_type'=>'districts']); //Bintang Ara
            DB::table('regionables')->insert(['region_id'=>4012, 'regionable_id'=>3570, 'regionable_type'=>'districts']); //Haruai
            DB::table('regionables')->insert(['region_id'=>4012, 'regionable_id'=>3571, 'regionable_type'=>'districts']); //Muara Uya
            DB::table('regionables')->insert(['region_id'=>4012, 'regionable_id'=>3572, 'regionable_type'=>'districts']); //Jaro
            DB::table('regionables')->insert(['region_id'=>4012, 'regionable_id'=>3573, 'regionable_type'=>'districts']); //Upau
                DB::table('regions')->insert(['id'=>4013, 'parent'=>4012, 'code'=>'71575', 'type'=>'village', 'name'=>'Village 71575, Districts 7157, City 715, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4013, 'regionable_id'=>41083, 'regionable_type'=>'village']); //Bilas
                DB::table('regionables')->insert(['region_id'=>4013, 'regionable_id'=>41084, 'regionable_type'=>'village']); //Kaong
                DB::table('regionables')->insert(['region_id'=>4013, 'regionable_id'=>41085, 'regionable_type'=>'village']); //Kinarum
                DB::table('regionables')->insert(['region_id'=>4013, 'regionable_id'=>41086, 'regionable_type'=>'village']); //Masingai I
                DB::table('regionables')->insert(['region_id'=>4013, 'regionable_id'=>41087, 'regionable_type'=>'village']); //Masingai Ii
                DB::table('regionables')->insert(['region_id'=>4013, 'regionable_id'=>41088, 'regionable_type'=>'village']); //Pangelak
        DB::table('regions')->insert(['id'=>4014, 'parent'=>3741, 'code'=>'716', 'type'=>'city', 'name'=>'City 716, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4014, 'regionable_id'=>187, 'regionable_type'=>'city']); //Balangan regencies
            DB::table('regions')->insert(['id'=>4015, 'parent'=>4014, 'code'=>'7161', 'type'=>'districts', 'name'=>'Districts 7161, City 716, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4015, 'regionable_id'=>3574, 'regionable_type'=>'districts']); //Paringin
            DB::table('regionables')->insert(['region_id'=>4015, 'regionable_id'=>3575, 'regionable_type'=>'districts']); //Paringin Selatan
                DB::table('regions')->insert(['id'=>4016, 'parent'=>4015, 'code'=>'71617', 'type'=>'village', 'name'=>'Village 71617, Districts 7161, City 716, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4016, 'regionable_id'=>41105, 'regionable_type'=>'village']); //Bungin
                DB::table('regions')->insert(['id'=>4017, 'parent'=>4015, 'code'=>'71618', 'type'=>'village', 'name'=>'Village 71618, Districts 7161, City 716, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4017, 'regionable_id'=>41106, 'regionable_type'=>'village']); //Batu Piring
            DB::table('regions')->insert(['id'=>4018, 'parent'=>4014, 'code'=>'7166', 'type'=>'districts', 'name'=>'Districts 7166, City 716, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4018, 'regionable_id'=>3574, 'regionable_type'=>'districts']); //Paringin
            DB::table('regionables')->insert(['region_id'=>4018, 'regionable_id'=>3575, 'regionable_type'=>'districts']); //Paringin Selatan
            DB::table('regionables')->insert(['region_id'=>4018, 'regionable_id'=>3576, 'regionable_type'=>'districts']); //Lampihong
            DB::table('regionables')->insert(['region_id'=>4018, 'regionable_id'=>3577, 'regionable_type'=>'districts']); //Batu Mandi
            DB::table('regionables')->insert(['region_id'=>4018, 'regionable_id'=>3578, 'regionable_type'=>'districts']); //Tebing Tinggi
            DB::table('regionables')->insert(['region_id'=>4018, 'regionable_id'=>3579, 'regionable_type'=>'districts']); //Awayan
            DB::table('regionables')->insert(['region_id'=>4018, 'regionable_id'=>3580, 'regionable_type'=>'districts']); //Juai
            DB::table('regionables')->insert(['region_id'=>4018, 'regionable_id'=>3581, 'regionable_type'=>'districts']); //Halong
                DB::table('regions')->insert(['id'=>4019, 'parent'=>4018, 'code'=>'71666', 'type'=>'village', 'name'=>'Village 71666, Districts 7166, City 716, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41222, 'regionable_type'=>'village']); //Aniungan
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41223, 'regionable_type'=>'village']); //Bangkal
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41224, 'regionable_type'=>'village']); //Baruh Panyambaran
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41225, 'regionable_type'=>'village']); //Binjai Punggal
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41226, 'regionable_type'=>'village']); //Binju
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41227, 'regionable_type'=>'village']); //Binuang Santang
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41228, 'regionable_type'=>'village']); //Buntut Pilanduk
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41229, 'regionable_type'=>'village']); //Gunung Riut
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41230, 'regionable_type'=>'village']); //Ha Uwai
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41231, 'regionable_type'=>'village']); //Halong
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41232, 'regionable_type'=>'village']); //Kapul
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41233, 'regionable_type'=>'village']); //Karya
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41234, 'regionable_type'=>'village']); //Liyu
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41235, 'regionable_type'=>'village']); //Mamantang
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41236, 'regionable_type'=>'village']); //Mamigang
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41237, 'regionable_type'=>'village']); //Mantuyan
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41238, 'regionable_type'=>'village']); //Marajai
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41239, 'regionable_type'=>'village']); //Mauya
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41240, 'regionable_type'=>'village']); //Padang Raya
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41241, 'regionable_type'=>'village']); //Puyun
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41242, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41243, 'regionable_type'=>'village']); //Suryatama
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41244, 'regionable_type'=>'village']); //Tabuan
                DB::table('regionables')->insert(['region_id'=>4019, 'regionable_id'=>41245, 'regionable_type'=>'village']); //Uren
        DB::table('regions')->insert(['id'=>4020, 'parent'=>3741, 'code'=>'721', 'type'=>'city', 'name'=>'City 721, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4020, 'regionable_id'=>186, 'regionable_type'=>'city']); //Tabalong regencies
        DB::table('regionables')->insert(['region_id'=>4020, 'regionable_id'=>188, 'regionable_type'=>'city']); //Kotabaru regencies
            DB::table('regions')->insert(['id'=>4021, 'parent'=>4020, 'code'=>'7211', 'type'=>'districts', 'name'=>'Districts 7211, City 721, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4021, 'regionable_id'=>3582, 'regionable_type'=>'districts']); //Pulau Laut Utara
                DB::table('regions')->insert(['id'=>4022, 'parent'=>4021, 'code'=>'72111', 'type'=>'village', 'name'=>'Village 72111, Districts 7211, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4022, 'regionable_id'=>41246, 'regionable_type'=>'village']); //Hilir Muara
                DB::table('regionables')->insert(['region_id'=>4022, 'regionable_id'=>41247, 'regionable_type'=>'village']); //Kotabaru Hilir
                DB::table('regions')->insert(['id'=>4023, 'parent'=>4021, 'code'=>'72112', 'type'=>'village', 'name'=>'Village 72112, Districts 7211, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4023, 'regionable_id'=>41248, 'regionable_type'=>'village']); //Baharu Utara
                DB::table('regionables')->insert(['region_id'=>4023, 'regionable_id'=>41249, 'regionable_type'=>'village']); //Batuah
                DB::table('regionables')->insert(['region_id'=>4023, 'regionable_id'=>41250, 'regionable_type'=>'village']); //Sigam
                DB::table('regionables')->insert(['region_id'=>4023, 'regionable_id'=>41251, 'regionable_type'=>'village']); //Tirawan
                DB::table('regions')->insert(['id'=>4024, 'parent'=>4021, 'code'=>'72113', 'type'=>'village', 'name'=>'Village 72113, Districts 7211, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4024, 'regionable_id'=>41252, 'regionable_type'=>'village']); //Kotabaru Tengah
                DB::table('regionables')->insert(['region_id'=>4024, 'regionable_id'=>41253, 'regionable_type'=>'village']); //Sebatung
                DB::table('regions')->insert(['id'=>4025, 'parent'=>4021, 'code'=>'72114', 'type'=>'village', 'name'=>'Village 72114, Districts 7211, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41254, 'regionable_type'=>'village']); //Gedambaan
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41255, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41256, 'regionable_type'=>'village']); //Gunung Ulin
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41257, 'regionable_type'=>'village']); //Kotabaru Hulu
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41258, 'regionable_type'=>'village']); //Mega Sari
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41259, 'regionable_type'=>'village']); //Rampa
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41260, 'regionable_type'=>'village']); //Sarang Tiung
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41261, 'regionable_type'=>'village']); //Sebelimbingan
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41262, 'regionable_type'=>'village']); //Sei/sungai Taib
                DB::table('regionables')->insert(['region_id'=>4025, 'regionable_id'=>41263, 'regionable_type'=>'village']); //Stagen
                DB::table('regions')->insert(['id'=>4026, 'parent'=>4021, 'code'=>'72115', 'type'=>'village', 'name'=>'Village 72115, Districts 7211, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4026, 'regionable_id'=>41264, 'regionable_type'=>'village']); //Baharu Selatan
                DB::table('regions')->insert(['id'=>4027, 'parent'=>4021, 'code'=>'72116', 'type'=>'village', 'name'=>'Village 72116, Districts 7211, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4027, 'regionable_id'=>41265, 'regionable_type'=>'village']); //Dirgahayu
                DB::table('regions')->insert(['id'=>4028, 'parent'=>4021, 'code'=>'72117', 'type'=>'village', 'name'=>'Village 72117, Districts 7211, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4028, 'regionable_id'=>41266, 'regionable_type'=>'village']); //Semayap
            DB::table('regions')->insert(['id'=>4029, 'parent'=>4020, 'code'=>'7215', 'type'=>'districts', 'name'=>'Districts 7215, City 721, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4029, 'regionable_id'=>3583, 'regionable_type'=>'districts']); //Pulau Laut Timur
            DB::table('regionables')->insert(['region_id'=>4029, 'regionable_id'=>3584, 'regionable_type'=>'districts']); //Pulau Laut Tanjung Selayar
            DB::table('regionables')->insert(['region_id'=>4029, 'regionable_id'=>3585, 'regionable_type'=>'districts']); //Pulau Laut Barat
            DB::table('regionables')->insert(['region_id'=>4029, 'regionable_id'=>3586, 'regionable_type'=>'districts']); //Pulau Laut Selatan
            DB::table('regionables')->insert(['region_id'=>4029, 'regionable_id'=>3587, 'regionable_type'=>'districts']); //Pulau Laut Kepulauan
            DB::table('regionables')->insert(['region_id'=>4029, 'regionable_id'=>3588, 'regionable_type'=>'districts']); //Pulau Sebuku
            DB::table('regionables')->insert(['region_id'=>4029, 'regionable_id'=>3589, 'regionable_type'=>'districts']); //Pulau Laut Tengah
                DB::table('regions')->insert(['id'=>4030, 'parent'=>4029, 'code'=>'72156', 'type'=>'village', 'name'=>'Village 72156, Districts 7215, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4030, 'regionable_id'=>41327, 'regionable_type'=>'village']); //Mekar Pura
                DB::table('regionables')->insert(['region_id'=>4030, 'regionable_id'=>41328, 'regionable_type'=>'village']); //Pantai Baru
                DB::table('regionables')->insert(['region_id'=>4030, 'regionable_id'=>41329, 'regionable_type'=>'village']); //Salino (maniang)
                DB::table('regionables')->insert(['region_id'=>4030, 'regionable_id'=>41330, 'regionable_type'=>'village']); //Sei/sungai Pasir
                DB::table('regionables')->insert(['region_id'=>4030, 'regionable_id'=>41331, 'regionable_type'=>'village']); //Selaru
                DB::table('regionables')->insert(['region_id'=>4030, 'regionable_id'=>41332, 'regionable_type'=>'village']); //Semisir
                DB::table('regionables')->insert(['region_id'=>4030, 'regionable_id'=>41333, 'regionable_type'=>'village']); //Sungup Kanan
            DB::table('regions')->insert(['id'=>4031, 'parent'=>4020, 'code'=>'7216', 'type'=>'districts', 'name'=>'Districts 7216, City 721, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3564, 'regionable_type'=>'districts']); //Banua Lawas
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3590, 'regionable_type'=>'districts']); //Kelumpang Selatan
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3591, 'regionable_type'=>'districts']); //Kelumpang Hilir
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3592, 'regionable_type'=>'districts']); //Kelumpang Hulu
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3593, 'regionable_type'=>'districts']); //Hampang
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3594, 'regionable_type'=>'districts']); //Kelumpang Barat
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3595, 'regionable_type'=>'districts']); //Kelumpang Tengah
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3596, 'regionable_type'=>'districts']); //Kelumpang Utara
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3597, 'regionable_type'=>'districts']); //Sampanahan
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3598, 'regionable_type'=>'districts']); //Sungai Durian
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3599, 'regionable_type'=>'districts']); //Pamukan Selatan
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3600, 'regionable_type'=>'districts']); //Pamukan Utara
            DB::table('regionables')->insert(['region_id'=>4031, 'regionable_id'=>3601, 'regionable_type'=>'districts']); //Pamukan Barat
                DB::table('regions')->insert(['id'=>4032, 'parent'=>4031, 'code'=>'72169', 'type'=>'village', 'name'=>'Village 72169, Districts 7216, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41425, 'regionable_type'=>'village']); //Bakau
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41426, 'regionable_type'=>'village']); //Balamea
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41427, 'regionable_type'=>'village']); //Bepara
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41428, 'regionable_type'=>'village']); //Betung
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41429, 'regionable_type'=>'village']); //Binturung
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41430, 'regionable_type'=>'village']); //Harapan Baru
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41431, 'regionable_type'=>'village']); //Kalian
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41432, 'regionable_type'=>'village']); //Lintang Jaya
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41433, 'regionable_type'=>'village']); //Mulyo Harjo
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41434, 'regionable_type'=>'village']); //Pamukan Indah
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41435, 'regionable_type'=>'village']); //Sekayu Baru
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41436, 'regionable_type'=>'village']); //Tamiyang
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41437, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41438, 'regionable_type'=>'village']); //Batuah
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41439, 'regionable_type'=>'village']); //Mangka
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41440, 'regionable_type'=>'village']); //Marga Jaya
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41441, 'regionable_type'=>'village']); //Mayang Sari
                DB::table('regionables')->insert(['region_id'=>4032, 'regionable_id'=>41442, 'regionable_type'=>'village']); //Sengayam
            DB::table('regions')->insert(['id'=>4033, 'parent'=>4020, 'code'=>'7218', 'type'=>'districts', 'name'=>'Districts 7218, City 721, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4033, 'regionable_id'=>3602, 'regionable_type'=>'districts']); //Pulau Sembilan
                DB::table('regions')->insert(['id'=>4034, 'parent'=>4033, 'code'=>'72181', 'type'=>'village', 'name'=>'Village 72181, Districts 7218, City 721, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4034, 'regionable_id'=>41443, 'regionable_type'=>'village']); //Labuan Barat
                DB::table('regionables')->insert(['region_id'=>4034, 'regionable_id'=>41444, 'regionable_type'=>'village']); //Maradapan
                DB::table('regionables')->insert(['region_id'=>4034, 'regionable_id'=>41445, 'regionable_type'=>'village']); //Tanjung Nyiur
                DB::table('regionables')->insert(['region_id'=>4034, 'regionable_id'=>41446, 'regionable_type'=>'village']); //Teluk Sungai
                DB::table('regionables')->insert(['region_id'=>4034, 'regionable_id'=>41447, 'regionable_type'=>'village']); //Tengah
        DB::table('regions')->insert(['id'=>4035, 'parent'=>3741, 'code'=>'722', 'type'=>'city', 'name'=>'City 722, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4035, 'regionable_id'=>189, 'regionable_type'=>'city']); //Tanah Bumbu regencies
            DB::table('regions')->insert(['id'=>4036, 'parent'=>4035, 'code'=>'7221', 'type'=>'districts', 'name'=>'Districts 7221, City 722, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4036, 'regionable_id'=>3603, 'regionable_type'=>'districts']); //Karang Bintang
            DB::table('regionables')->insert(['region_id'=>4036, 'regionable_id'=>3604, 'regionable_type'=>'districts']); //Mantewe
            DB::table('regionables')->insert(['region_id'=>4036, 'regionable_id'=>3605, 'regionable_type'=>'districts']); //Simpang Empat
            DB::table('regionables')->insert(['region_id'=>4036, 'regionable_id'=>3606, 'regionable_type'=>'districts']); //Batulicin
                DB::table('regions')->insert(['id'=>4037, 'parent'=>4036, 'code'=>'72211', 'type'=>'village', 'name'=>'Village 72211, Districts 7221, City 722, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41448, 'regionable_type'=>'village']); //Batulicin Irigasi
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41449, 'regionable_type'=>'village']); //Harapan Maju
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41450, 'regionable_type'=>'village']); //Karang Bintang
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41451, 'regionable_type'=>'village']); //Karang Rejo
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41452, 'regionable_type'=>'village']); //Madu Retno
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41453, 'regionable_type'=>'village']); //Manunggal
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41454, 'regionable_type'=>'village']); //Pandan Sari
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41455, 'regionable_type'=>'village']); //Pematang Ulin
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41456, 'regionable_type'=>'village']); //Rejo Winangun
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41457, 'regionable_type'=>'village']); //Sela Selilau
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41458, 'regionable_type'=>'village']); //Sumber Wangi
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41459, 'regionable_type'=>'village']); //Bulu Rejo
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41460, 'regionable_type'=>'village']); //Dukuh Rejo
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41461, 'regionable_type'=>'village']); //Emil Baru
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41462, 'regionable_type'=>'village']); //Gunung Hatalau Meratus Raya
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41463, 'regionable_type'=>'village']); //Gunung Raya
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41464, 'regionable_type'=>'village']); //Maju Mulyo
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41465, 'regionable_type'=>'village']); //Mantewe
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41466, 'regionable_type'=>'village']); //Mentawakan Mulya/mulia
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41467, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41468, 'regionable_type'=>'village']); //Sari Mulya/mulia
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41469, 'regionable_type'=>'village']); //Sepakat
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41470, 'regionable_type'=>'village']); //Sido Mulyo
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41471, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41472, 'regionable_type'=>'village']); //Mekar Sari
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41473, 'regionable_type'=>'village']); //Sari Gadung
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41474, 'regionable_type'=>'village']); //Sei/sungai Dua
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41484, 'regionable_type'=>'village']); //Pondok Butun
                DB::table('regionables')->insert(['region_id'=>4037, 'regionable_id'=>41485, 'regionable_type'=>'village']); //Segumbang
                DB::table('regions')->insert(['id'=>4038, 'parent'=>4036, 'code'=>'72214', 'type'=>'village', 'name'=>'Village 72214, Districts 7221, City 722, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4038, 'regionable_id'=>41486, 'regionable_type'=>'village']); //Kusambi
                DB::table('regions')->insert(['id'=>4039, 'parent'=>4036, 'code'=>'72215', 'type'=>'village', 'name'=>'Village 72215, Districts 7221, City 722, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4039, 'regionable_id'=>41487, 'regionable_type'=>'village']); //Kersik Putih
                DB::table('regions')->insert(['id'=>4040, 'parent'=>4036, 'code'=>'72216', 'type'=>'village', 'name'=>'Village 72216, Districts 7221, City 722, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4040, 'regionable_id'=>41488, 'regionable_type'=>'village']); //Maju Bersama
                DB::table('regions')->insert(['id'=>4041, 'parent'=>4036, 'code'=>'72217', 'type'=>'village', 'name'=>'Village 72217, Districts 7221, City 722, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4041, 'regionable_id'=>41489, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regions')->insert(['id'=>4042, 'parent'=>4036, 'code'=>'72218', 'type'=>'village', 'name'=>'Village 72218, Districts 7221, City 722, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4042, 'regionable_id'=>41490, 'regionable_type'=>'village']); //Polewali Marajae
            DB::table('regions')->insert(['id'=>4043, 'parent'=>4035, 'code'=>'7227', 'type'=>'districts', 'name'=>'Districts 7227, City 722, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4043, 'regionable_id'=>3606, 'regionable_type'=>'districts']); //Batulicin
            DB::table('regionables')->insert(['region_id'=>4043, 'regionable_id'=>3607, 'regionable_type'=>'districts']); //Kusan Hulu
            DB::table('regionables')->insert(['region_id'=>4043, 'regionable_id'=>3608, 'regionable_type'=>'districts']); //Kuranji
            DB::table('regionables')->insert(['region_id'=>4043, 'regionable_id'=>3609, 'regionable_type'=>'districts']); //Kusan Hilir
            DB::table('regionables')->insert(['region_id'=>4043, 'regionable_id'=>3610, 'regionable_type'=>'districts']); //Sungai Loban
            DB::table('regionables')->insert(['region_id'=>4043, 'regionable_id'=>3611, 'regionable_type'=>'districts']); //Satui
            DB::table('regionables')->insert(['region_id'=>4043, 'regionable_id'=>3612, 'regionable_type'=>'districts']); //Angsana
                DB::table('regions')->insert(['id'=>4044, 'parent'=>4043, 'code'=>'72275', 'type'=>'village', 'name'=>'Village 72275, Districts 7227, City 722, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41573, 'regionable_type'=>'village']); //Al Kausar
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41574, 'regionable_type'=>'village']); //Bukit Baru
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41575, 'regionable_type'=>'village']); //Jombang
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41576, 'regionable_type'=>'village']); //Mulya Makmur
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41577, 'regionable_type'=>'village']); //Pandamaran Jaya
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41578, 'regionable_type'=>'village']); //Satui Barat
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41579, 'regionable_type'=>'village']); //Satui Timur
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41580, 'regionable_type'=>'village']); //Sei/sungai Cuka
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41581, 'regionable_type'=>'village']); //Sei/sungai Danau
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41582, 'regionable_type'=>'village']); //Sekapuk
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41583, 'regionable_type'=>'village']); //Setarap
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41584, 'regionable_type'=>'village']); //Sinar Bulan
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41585, 'regionable_type'=>'village']); //Sumber Arum
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41586, 'regionable_type'=>'village']); //Sumber Makmur
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41587, 'regionable_type'=>'village']); //Tegal Sari
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41588, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41589, 'regionable_type'=>'village']); //Angsana
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41590, 'regionable_type'=>'village']); //Banjar Sari
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41591, 'regionable_type'=>'village']); //Bayan Sari
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41592, 'regionable_type'=>'village']); //Bunati
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41593, 'regionable_type'=>'village']); //Karang Indah
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41594, 'regionable_type'=>'village']); //Makmur
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41595, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41596, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>4044, 'regionable_id'=>41597, 'regionable_type'=>'village']); //Sumber Baru

        //Kalimantan Tengah
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>14, 'regionable_type'=>'province']); //Kalimantan Tengah
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>190, 'regionable_type'=>'city']); //Palangka Raya city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>191, 'regionable_type'=>'city']); //Kapuas regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>192, 'regionable_type'=>'city']); //Barito Timur regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>193, 'regionable_type'=>'city']); //Barito Selatan regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>194, 'regionable_type'=>'city']); //Barito Utara regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>195, 'regionable_type'=>'city']); //Murung Raya regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>196, 'regionable_type'=>'city']); //Kotawaringin Barat regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>197, 'regionable_type'=>'city']); //Lamandau regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>198, 'regionable_type'=>'city']); //Sukamara regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>199, 'regionable_type'=>'city']); //Seruyan regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>200, 'regionable_type'=>'city']); //Kotawaringin Timur regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>201, 'regionable_type'=>'city']); //Katingan regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>202, 'regionable_type'=>'city']); //Gunung Mas regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>203, 'regionable_type'=>'city']); //Pulang Pisau regencies

        DB::table('regions')->insert(['id'=>4045, 'parent'=>3741, 'code'=>'731', 'type'=>'city', 'name'=>'City 731, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4045, 'regionable_id'=>190, 'regionable_type'=>'city']); //Palangka Raya city
            DB::table('regions')->insert(['id'=>4046, 'parent'=>4045, 'code'=>'7311', 'type'=>'districts', 'name'=>'Districts 7311, City 731, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4046, 'regionable_id'=>3613, 'regionable_type'=>'districts']); //Pahandut
            DB::table('regionables')->insert(['region_id'=>4046, 'regionable_id'=>3614, 'regionable_type'=>'districts']); //Jekan Raya
            DB::table('regionables')->insert(['region_id'=>4046, 'regionable_id'=>3615, 'regionable_type'=>'districts']); //Sebangau
                DB::table('regions')->insert(['id'=>4047, 'parent'=>4046, 'code'=>'73113', 'type'=>'village', 'name'=>'Village 73113, Districts 7311, City 731, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4047, 'regionable_id'=>41608, 'regionable_type'=>'village']); //Kereng Bangkirai
                DB::table('regionables')->insert(['region_id'=>4047, 'regionable_id'=>41609, 'regionable_type'=>'village']); //Sabaru
                DB::table('regions')->insert(['id'=>4048, 'parent'=>4046, 'code'=>'73114', 'type'=>'village', 'name'=>'Village 73114, Districts 7311, City 731, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4048, 'regionable_id'=>41610, 'regionable_type'=>'village']); //Bereng Bengkel
                DB::table('regionables')->insert(['region_id'=>4048, 'regionable_id'=>41611, 'regionable_type'=>'village']); //Danau Tundai
                DB::table('regionables')->insert(['region_id'=>4048, 'regionable_id'=>41612, 'regionable_type'=>'village']); //Kalampangan
                DB::table('regionables')->insert(['region_id'=>4048, 'regionable_id'=>41613, 'regionable_type'=>'village']); //Kameloh Baru
        DB::table('regions')->insert(['id'=>4049, 'parent'=>3741, 'code'=>'732', 'type'=>'city', 'name'=>'City 732, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4049, 'regionable_id'=>190, 'regionable_type'=>'city']); //Palangka Raya city
            DB::table('regions')->insert(['id'=>4050, 'parent'=>4049, 'code'=>'7322', 'type'=>'districts', 'name'=>'Districts 7322, City 732, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4050, 'regionable_id'=>3616, 'regionable_type'=>'districts']); //Bukit Batu
            DB::table('regionables')->insert(['region_id'=>4050, 'regionable_id'=>3617, 'regionable_type'=>'districts']); //Rakumpit
                DB::table('regions')->insert(['id'=>4051, 'parent'=>4050, 'code'=>'73227', 'type'=>'village', 'name'=>'Village 73227, Districts 7322, City 732, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4051, 'regionable_id'=>41621, 'regionable_type'=>'village']); //Petuk Bukit
                DB::table('regions')->insert(['id'=>4052, 'parent'=>4050, 'code'=>'73228', 'type'=>'village', 'name'=>'Village 73228, Districts 7322, City 732, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4052, 'regionable_id'=>41622, 'regionable_type'=>'village']); //Panjehang
                DB::table('regions')->insert(['id'=>4053, 'parent'=>4050, 'code'=>'73229', 'type'=>'village', 'name'=>'Village 73229, Districts 7322, City 732, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4053, 'regionable_id'=>41623, 'regionable_type'=>'village']); //Bukit Sua
                DB::table('regionables')->insert(['region_id'=>4053, 'regionable_id'=>41624, 'regionable_type'=>'village']); //Gaung Baru
                DB::table('regionables')->insert(['region_id'=>4053, 'regionable_id'=>41625, 'regionable_type'=>'village']); //Mungku Baru
                DB::table('regionables')->insert(['region_id'=>4053, 'regionable_id'=>41626, 'regionable_type'=>'village']); //Pager
                DB::table('regionables')->insert(['region_id'=>4053, 'regionable_id'=>41627, 'regionable_type'=>'village']); //Petuk Berunai
        DB::table('regions')->insert(['id'=>4054, 'parent'=>3741, 'code'=>'735', 'type'=>'city', 'name'=>'City 735, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4054, 'regionable_id'=>191, 'regionable_type'=>'city']); //Kapuas regencies
            DB::table('regions')->insert(['id'=>4055, 'parent'=>4054, 'code'=>'7351', 'type'=>'districts', 'name'=>'Districts 7351, City 735, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4055, 'regionable_id'=>3618, 'regionable_type'=>'districts']); //Bataguh
            DB::table('regionables')->insert(['region_id'=>4055, 'regionable_id'=>3619, 'regionable_type'=>'districts']); //Selat
                DB::table('regions')->insert(['id'=>4056, 'parent'=>4055, 'code'=>'73512', 'type'=>'village', 'name'=>'Village 73512, Districts 7351, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4056, 'regionable_id'=>41643, 'regionable_type'=>'village']); //Murung Keramat
                DB::table('regions')->insert(['id'=>4057, 'parent'=>4055, 'code'=>'73513', 'type'=>'village', 'name'=>'Village 73513, Districts 7351, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4057, 'regionable_id'=>41644, 'regionable_type'=>'village']); //Selat Hilir
                DB::table('regions')->insert(['id'=>4058, 'parent'=>4055, 'code'=>'73514', 'type'=>'village', 'name'=>'Village 73514, Districts 7351, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4058, 'regionable_id'=>41645, 'regionable_type'=>'village']); //Panamas
                DB::table('regionables')->insert(['region_id'=>4058, 'regionable_id'=>41646, 'regionable_type'=>'village']); //Selat Barat
                DB::table('regionables')->insert(['region_id'=>4058, 'regionable_id'=>41647, 'regionable_type'=>'village']); //Selat Tengah
                DB::table('regions')->insert(['id'=>4059, 'parent'=>4055, 'code'=>'73515', 'type'=>'village', 'name'=>'Village 73515, Districts 7351, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4059, 'regionable_id'=>41648, 'regionable_type'=>'village']); //Selat Hulu
                DB::table('regions')->insert(['id'=>4060, 'parent'=>4055, 'code'=>'73516', 'type'=>'village', 'name'=>'Village 73516, Districts 7351, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41629, 'regionable_type'=>'village']); //Bamban Raya
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41630, 'regionable_type'=>'village']); //Bangun Harjo
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41631, 'regionable_type'=>'village']); //Budi Mufakat
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41632, 'regionable_type'=>'village']); //Pulau Mambulau
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41633, 'regionable_type'=>'village']); //Sei Jangkir
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41634, 'regionable_type'=>'village']); //Sei/sungai Lunuk
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41635, 'regionable_type'=>'village']); //Tamban Luar
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41636, 'regionable_type'=>'village']); //Terusan Baguntan Raya
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41637, 'regionable_type'=>'village']); //Terusan Karya
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41638, 'regionable_type'=>'village']); //Terusan Makmur
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41639, 'regionable_type'=>'village']); //Terusan Mulya
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41640, 'regionable_type'=>'village']); //Terusan Raya
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41641, 'regionable_type'=>'village']); //Terusan Raya Barat
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41642, 'regionable_type'=>'village']); //Terusan Raya Hilir
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41649, 'regionable_type'=>'village']); //Pulau Telo
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41650, 'regionable_type'=>'village']); //Pulau Telo Baru
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41651, 'regionable_type'=>'village']); //Selat Dalam
                DB::table('regionables')->insert(['region_id'=>4060, 'regionable_id'=>41652, 'regionable_type'=>'village']); //Selat Utara
            DB::table('regions')->insert(['id'=>4061, 'parent'=>4054, 'code'=>'7352', 'type'=>'districts', 'name'=>'Districts 7352, City 735, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4061, 'regionable_id'=>3620, 'regionable_type'=>'districts']); //Kapuas Hilir
                DB::table('regions')->insert(['id'=>4062, 'parent'=>4061, 'code'=>'73521', 'type'=>'village', 'name'=>'Village 73521, Districts 7352, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4062, 'regionable_id'=>41653, 'regionable_type'=>'village']); //Mambulau
                DB::table('regions')->insert(['id'=>4063, 'parent'=>4061, 'code'=>'73522', 'type'=>'village', 'name'=>'Village 73522, Districts 7352, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4063, 'regionable_id'=>41654, 'regionable_type'=>'village']); //Hampatung
                DB::table('regions')->insert(['id'=>4064, 'parent'=>4061, 'code'=>'73523', 'type'=>'village', 'name'=>'Village 73523, Districts 7352, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4064, 'regionable_id'=>41655, 'regionable_type'=>'village']); //Dahirang
                DB::table('regions')->insert(['id'=>4065, 'parent'=>4061, 'code'=>'73524', 'type'=>'village', 'name'=>'Village 73524, Districts 7352, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4065, 'regionable_id'=>41656, 'regionable_type'=>'village']); //Barimba
                DB::table('regions')->insert(['id'=>4066, 'parent'=>4061, 'code'=>'73525', 'type'=>'village', 'name'=>'Village 73525, Districts 7352, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4066, 'regionable_id'=>41657, 'regionable_type'=>'village']); //Bakungin
                DB::table('regionables')->insert(['region_id'=>4066, 'regionable_id'=>41658, 'regionable_type'=>'village']); //Saka Batur
                DB::table('regionables')->insert(['region_id'=>4066, 'regionable_id'=>41659, 'regionable_type'=>'village']); //Sei/sungai Asam
                DB::table('regionables')->insert(['region_id'=>4066, 'regionable_id'=>41660, 'regionable_type'=>'village']); //Sei/sungai Pasah
            DB::table('regions')->insert(['id'=>4067, 'parent'=>4054, 'code'=>'7355', 'type'=>'districts', 'name'=>'Districts 7355, City 735, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4067, 'regionable_id'=>3621, 'regionable_type'=>'districts']); //Kapuas Barat
            DB::table('regionables')->insert(['region_id'=>4067, 'regionable_id'=>3622, 'regionable_type'=>'districts']); //Mantangai
            DB::table('regionables')->insert(['region_id'=>4067, 'regionable_id'=>3623, 'regionable_type'=>'districts']); //Timpah
            DB::table('regionables')->insert(['region_id'=>4067, 'regionable_id'=>3624, 'regionable_type'=>'districts']); //Kapuas Tengah
            DB::table('regionables')->insert(['region_id'=>4067, 'regionable_id'=>3625, 'regionable_type'=>'districts']); //Pasak Talawang
            DB::table('regionables')->insert(['region_id'=>4067, 'regionable_id'=>3626, 'regionable_type'=>'districts']); //Mandau Talawang
                DB::table('regions')->insert(['id'=>4068, 'parent'=>4067, 'code'=>'73555', 'type'=>'village', 'name'=>'Village 73555, Districts 7355, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41720, 'regionable_type'=>'village']); //Bajuh
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41721, 'regionable_type'=>'village']); //Barunang
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41722, 'regionable_type'=>'village']); //Buhut Jaya
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41723, 'regionable_type'=>'village']); //Hurung Pukung
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41724, 'regionable_type'=>'village']); //Karukus
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41725, 'regionable_type'=>'village']); //Kayu Bulan
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41726, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41727, 'regionable_type'=>'village']); //Manis
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41728, 'regionable_type'=>'village']); //Marapit (merapit)
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41729, 'regionable_type'=>'village']); //Masaran
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41730, 'regionable_type'=>'village']); //Penda Muntei
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41731, 'regionable_type'=>'village']); //Pujon
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41732, 'regionable_type'=>'village']); //Tapen
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41733, 'regionable_type'=>'village']); //Balai Banjang
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41734, 'regionable_type'=>'village']); //Batu Sambung
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41735, 'regionable_type'=>'village']); //Dandang
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41736, 'regionable_type'=>'village']); //Hurung Kampin
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41737, 'regionable_type'=>'village']); //Jangkang
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41738, 'regionable_type'=>'village']); //Kaburan
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41739, 'regionable_type'=>'village']); //Sei/sungai Ringin
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41740, 'regionable_type'=>'village']); //Tumbang Diring
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41741, 'regionable_type'=>'village']); //Tumbang Nusa
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41742, 'regionable_type'=>'village']); //Tumbang Tukun
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41743, 'regionable_type'=>'village']); //Jakatan Masaha
                DB::table('regionables')->insert(['region_id'=>4068, 'regionable_id'=>41744, 'regionable_type'=>'village']); //Masupa Ria
            DB::table('regions')->insert(['id'=>4069, 'parent'=>4054, 'code'=>'7356', 'type'=>'districts', 'name'=>'Districts 7356, City 735, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4069, 'regionable_id'=>3627, 'regionable_type'=>'districts']); //Basarang
                DB::table('regions')->insert(['id'=>4070, 'parent'=>4069, 'code'=>'73564', 'type'=>'village', 'name'=>'Village 73564, Districts 7356, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41753, 'regionable_type'=>'village']); //Basarang
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41754, 'regionable_type'=>'village']); //Basarang Jaya
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41755, 'regionable_type'=>'village']); //Basungkai
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41756, 'regionable_type'=>'village']); //Batu Nindan
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41757, 'regionable_type'=>'village']); //Batuah
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41758, 'regionable_type'=>'village']); //Bungai Jaya
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41759, 'regionable_type'=>'village']); //Lunuk Ramba
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41760, 'regionable_type'=>'village']); //Maluen
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41761, 'regionable_type'=>'village']); //Naning
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41762, 'regionable_type'=>'village']); //Panarung
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41763, 'regionable_type'=>'village']); //Pangkalan Rekan
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41764, 'regionable_type'=>'village']); //Pangkalan Sari
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41765, 'regionable_type'=>'village']); //Tambun Raya
                DB::table('regionables')->insert(['region_id'=>4070, 'regionable_id'=>41766, 'regionable_type'=>'village']); //Tarung Manuah
            DB::table('regions')->insert(['id'=>4071, 'parent'=>4054, 'code'=>'7358', 'type'=>'districts', 'name'=>'Districts 7358, City 735, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4071, 'regionable_id'=>3628, 'regionable_type'=>'districts']); //Kapuas Timur
            DB::table('regionables')->insert(['region_id'=>4071, 'regionable_id'=>3629, 'regionable_type'=>'districts']); //Tamban Catur
            DB::table('regionables')->insert(['region_id'=>4071, 'regionable_id'=>3630, 'regionable_type'=>'districts']); //Kapuas Kuala
                DB::table('regions')->insert(['id'=>4072, 'parent'=>4071, 'code'=>'73583', 'type'=>'village', 'name'=>'Village 73583, Districts 7358, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41774, 'regionable_type'=>'village']); //Bandar Mekar
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41775, 'regionable_type'=>'village']); //Bandar Raya
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41776, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41777, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41778, 'regionable_type'=>'village']); //Tamban Baru Mekar
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41779, 'regionable_type'=>'village']); //Tamban Baru Tengah
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41780, 'regionable_type'=>'village']); //Tamban Baru Timur
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41781, 'regionable_type'=>'village']); //Tambun Jaya
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41782, 'regionable_type'=>'village']); //Tambun Makmur
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41783, 'regionable_type'=>'village']); //Warna Sari
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41784, 'regionable_type'=>'village']); //Baranggau
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41785, 'regionable_type'=>'village']); //Batanjung
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41786, 'regionable_type'=>'village']); //Cemara Labat
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41787, 'regionable_type'=>'village']); //Lupak Dalam
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41788, 'regionable_type'=>'village']); //Lupak Timur
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41789, 'regionable_type'=>'village']); //Palampai
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41790, 'regionable_type'=>'village']); //Pematang
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41791, 'regionable_type'=>'village']); //Sei Bakut
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41792, 'regionable_type'=>'village']); //Sei/sungai Teras
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41793, 'regionable_type'=>'village']); //Simpang Bunga Tanjung
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41794, 'regionable_type'=>'village']); //Tamban Baru Tengah
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41795, 'regionable_type'=>'village']); //Tamban Lupak
                DB::table('regionables')->insert(['region_id'=>4072, 'regionable_id'=>41796, 'regionable_type'=>'village']); //Wargo Mulyo
            DB::table('regions')->insert(['id'=>4073, 'parent'=>4054, 'code'=>'7359', 'type'=>'districts', 'name'=>'Districts 7359, City 735, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4073, 'regionable_id'=>3631, 'regionable_type'=>'districts']); //Pulau Petak
            DB::table('regionables')->insert(['region_id'=>4073, 'regionable_id'=>3632, 'regionable_type'=>'districts']); //Kapuas Murung
            DB::table('regionables')->insert(['region_id'=>4073, 'regionable_id'=>3633, 'regionable_type'=>'districts']); //Dadahup
                DB::table('regions')->insert(['id'=>4074, 'parent'=>4073, 'code'=>'73593', 'type'=>'village', 'name'=>'Village 73593, Districts 7359, City 735, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41809, 'regionable_type'=>'village']); //Belawang
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41810, 'regionable_type'=>'village']); //Bina Karya
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41811, 'regionable_type'=>'village']); //Bina Mekar
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41812, 'regionable_type'=>'village']); //Bina Sejahtera
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41813, 'regionable_type'=>'village']); //Bumi Rahayu
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41814, 'regionable_type'=>'village']); //Karya Bersama
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41815, 'regionable_type'=>'village']); //Mampai
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41816, 'regionable_type'=>'village']); //Mangala Permai
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41817, 'regionable_type'=>'village']); //Muara Dadahup
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41818, 'regionable_type'=>'village']); //Palangkau Baru
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41819, 'regionable_type'=>'village']); //Palangkau Lama
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41820, 'regionable_type'=>'village']); //Palingkau Asri
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41821, 'regionable_type'=>'village']); //Palingkau Baru
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41822, 'regionable_type'=>'village']); //Palingkau Jaya
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41823, 'regionable_type'=>'village']); //Palingkau Lama
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41824, 'regionable_type'=>'village']); //Palingkau Sejahtera
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41825, 'regionable_type'=>'village']); //Rawa Subur
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41826, 'regionable_type'=>'village']); //Saka Binjai
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41827, 'regionable_type'=>'village']); //Suka Mukti
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41828, 'regionable_type'=>'village']); //Suka Reja
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41829, 'regionable_type'=>'village']); //Sumber Mulia
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41830, 'regionable_type'=>'village']); //Tajepan
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41831, 'regionable_type'=>'village']); //Talekung Punai
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41832, 'regionable_type'=>'village']); //Bentuk Jaya
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41833, 'regionable_type'=>'village']); //Bina Jaya
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41834, 'regionable_type'=>'village']); //Dadahup
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41835, 'regionable_type'=>'village']); //Dadahup Raya
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41836, 'regionable_type'=>'village']); //Harapan Baru
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41837, 'regionable_type'=>'village']); //Kahuripan Permai
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41838, 'regionable_type'=>'village']); //Manuntung
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41839, 'regionable_type'=>'village']); //Menteng Karya
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41840, 'regionable_type'=>'village']); //Petak Batuah
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41841, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41842, 'regionable_type'=>'village']); //Sumber Alaska
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41843, 'regionable_type'=>'village']); //Tambak Bajai
                DB::table('regionables')->insert(['region_id'=>4074, 'regionable_id'=>41844, 'regionable_type'=>'village']); //Tanjung Harapan
        DB::table('regions')->insert(['id'=>4075, 'parent'=>3741, 'code'=>'736', 'type'=>'city', 'name'=>'City 736, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4075, 'regionable_id'=>192, 'regionable_type'=>'city']); //Barito Timur regencies
            DB::table('regions')->insert(['id'=>4076, 'parent'=>4075, 'code'=>'7361', 'type'=>'districts', 'name'=>'Districts 7361, City 736, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4076, 'regionable_id'=>3635, 'regionable_type'=>'districts']); //Dusun Timur
            DB::table('regionables')->insert(['region_id'=>4076, 'regionable_id'=>3636, 'regionable_type'=>'districts']); //Paju Epat
                DB::table('regions')->insert(['id'=>4077, 'parent'=>4076, 'code'=>'73617', 'type'=>'village', 'name'=>'Village 73617, Districts 7361, City 736, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41863, 'regionable_type'=>'village']); //Didi
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41864, 'regionable_type'=>'village']); //Jaar
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41865, 'regionable_type'=>'village']); //Jaweten
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41866, 'regionable_type'=>'village']); //Karang Langit
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41867, 'regionable_type'=>'village']); //Pulau Patai
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41868, 'regionable_type'=>'village']); //Sarapat (ex. Harara)
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41869, 'regionable_type'=>'village']); //Tamiang Layang
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41876, 'regionable_type'=>'village']); //Balawa
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41877, 'regionable_type'=>'village']); //Juru Banu
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41878, 'regionable_type'=>'village']); //Kali Napu
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41879, 'regionable_type'=>'village']); //Maipe
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41880, 'regionable_type'=>'village']); //Murutuwu
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41881, 'regionable_type'=>'village']); //Siong
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41882, 'regionable_type'=>'village']); //Tampulangit
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41883, 'regionable_type'=>'village']); //Telang Baru
                DB::table('regionables')->insert(['region_id'=>4077, 'regionable_id'=>41884, 'regionable_type'=>'village']); //Telang Siong
            DB::table('regions')->insert(['id'=>4078, 'parent'=>4075, 'code'=>'7365', 'type'=>'districts', 'name'=>'Districts 7365, City 736, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4078, 'regionable_id'=>3637, 'regionable_type'=>'districts']); //Dusun Tengah
            DB::table('regionables')->insert(['region_id'=>4078, 'regionable_id'=>3638, 'regionable_type'=>'districts']); //Paku
            DB::table('regionables')->insert(['region_id'=>4078, 'regionable_id'=>3639, 'regionable_type'=>'districts']); //Raren Batuah
            DB::table('regionables')->insert(['region_id'=>4078, 'regionable_id'=>3640, 'regionable_type'=>'districts']); //Karusen Janang
            DB::table('regionables')->insert(['region_id'=>4078, 'regionable_id'=>3641, 'regionable_type'=>'districts']); //Pematang Karau
                DB::table('regions')->insert(['id'=>4079, 'parent'=>4078, 'code'=>'73653', 'type'=>'village', 'name'=>'Village 73653, Districts 7365, City 736, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41921, 'regionable_type'=>'village']); //Bambulung
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41922, 'regionable_type'=>'village']); //Bararawa
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41923, 'regionable_type'=>'village']); //Ketap
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41924, 'regionable_type'=>'village']); //Kupang Bersih
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41925, 'regionable_type'=>'village']); //Lampeong
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41926, 'regionable_type'=>'village']); //Lebo
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41927, 'regionable_type'=>'village']); //Muara Palantau
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41928, 'regionable_type'=>'village']); //Muru Duyung
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41929, 'regionable_type'=>'village']); //Nagaleah
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41930, 'regionable_type'=>'village']); //Pinang Tunggal
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41931, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41932, 'regionable_type'=>'village']); //Tumpung Ulung
                DB::table('regionables')->insert(['region_id'=>4079, 'regionable_id'=>41933, 'regionable_type'=>'village']); //Tuyau
            DB::table('regions')->insert(['id'=>4080, 'parent'=>4075, 'code'=>'7366', 'type'=>'districts', 'name'=>'Districts 7366, City 736, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4080, 'regionable_id'=>3642, 'regionable_type'=>'districts']); //Benua Lima
                DB::table('regions')->insert(['id'=>4081, 'parent'=>4080, 'code'=>'73661', 'type'=>'village', 'name'=>'Village 73661, Districts 7366, City 736, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4081, 'regionable_id'=>41934, 'regionable_type'=>'village']); //Bagok
                DB::table('regionables')->insert(['region_id'=>4081, 'regionable_id'=>41935, 'regionable_type'=>'village']); //Bamban
                DB::table('regionables')->insert(['region_id'=>4081, 'regionable_id'=>41936, 'regionable_type'=>'village']); //Banyu Landas
                DB::table('regionables')->insert(['region_id'=>4081, 'regionable_id'=>41937, 'regionable_type'=>'village']); //Gudang Seng
                DB::table('regionables')->insert(['region_id'=>4081, 'regionable_id'=>41938, 'regionable_type'=>'village']); //Kandris
                DB::table('regionables')->insert(['region_id'=>4081, 'regionable_id'=>41939, 'regionable_type'=>'village']); //Taniran Pasar Panas
                DB::table('regionables')->insert(['region_id'=>4081, 'regionable_id'=>41940, 'regionable_type'=>'village']); //Tewah Pupuh
            DB::table('regions')->insert(['id'=>4082, 'parent'=>4075, 'code'=>'7367', 'type'=>'districts', 'name'=>'Districts 7367, City 736, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4082, 'regionable_id'=>3643, 'regionable_type'=>'districts']); //Patangkep Tutui
                DB::table('regions')->insert(['id'=>4083, 'parent'=>4082, 'code'=>'73671', 'type'=>'village', 'name'=>'Village 73671, Districts 7367, City 736, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41941, 'regionable_type'=>'village']); //Ampari Bora
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41942, 'regionable_type'=>'village']); //Bentot
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41943, 'regionable_type'=>'village']); //Betang Nalong
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41944, 'regionable_type'=>'village']); //Jango
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41945, 'regionable_type'=>'village']); //Kambitin
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41946, 'regionable_type'=>'village']); //Kotam
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41947, 'regionable_type'=>'village']); //Lalap
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41948, 'regionable_type'=>'village']); //Muani
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41949, 'regionable_type'=>'village']); //Pulau Padang
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41950, 'regionable_type'=>'village']); //Ramania
                DB::table('regionables')->insert(['region_id'=>4083, 'regionable_id'=>41951, 'regionable_type'=>'village']); //Tamiang
            DB::table('regions')->insert(['id'=>4084, 'parent'=>4075, 'code'=>'7368', 'type'=>'districts', 'name'=>'Districts 7368, City 736, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4084, 'regionable_id'=>3644, 'regionable_type'=>'districts']); //Awang
                DB::table('regions')->insert(['id'=>4085, 'parent'=>4084, 'code'=>'73681', 'type'=>'village', 'name'=>'Village 73681, Districts 7368, City 736, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41952, 'regionable_type'=>'village']); //Ampari
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41953, 'regionable_type'=>'village']); //Apar Batu
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41954, 'regionable_type'=>'village']); //Bangkirayen
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41955, 'regionable_type'=>'village']); //Biwan
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41956, 'regionable_type'=>'village']); //Danau
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41957, 'regionable_type'=>'village']); //Hayaping
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41958, 'regionable_type'=>'village']); //Janah Jari
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41959, 'regionable_type'=>'village']); //Janah Mansiwui
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41960, 'regionable_type'=>'village']); //Pianggu
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41961, 'regionable_type'=>'village']); //Tangkan
                DB::table('regionables')->insert(['region_id'=>4085, 'regionable_id'=>41962, 'regionable_type'=>'village']); //Wungkur Nanakan
        DB::table('regions')->insert(['id'=>4086, 'parent'=>3741, 'code'=>'737', 'type'=>'city', 'name'=>'City 737, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4086, 'regionable_id'=>193, 'regionable_type'=>'city']); //Barito Selatan regencies
            DB::table('regions')->insert(['id'=>4087, 'parent'=>4086, 'code'=>'7371', 'type'=>'districts', 'name'=>'Districts 7371, City 737, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4087, 'regionable_id'=>3645, 'regionable_type'=>'districts']); //Dusun Selatan
                DB::table('regions')->insert(['id'=>4088, 'parent'=>4087, 'code'=>'73711', 'type'=>'village', 'name'=>'Village 73711, Districts 7371, City 737, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4088, 'regionable_id'=>41963, 'regionable_type'=>'village']); //Buntok Kota
                DB::table('regions')->insert(['id'=>4089, 'parent'=>4087, 'code'=>'73712', 'type'=>'village', 'name'=>'Village 73712, Districts 7371, City 737, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4089, 'regionable_id'=>41964, 'regionable_type'=>'village']); //Hilir Sper
                DB::table('regions')->insert(['id'=>4090, 'parent'=>4087, 'code'=>'73713', 'type'=>'village', 'name'=>'Village 73713, Districts 7371, City 737, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41965, 'regionable_type'=>'village']); //Baru
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41966, 'regionable_type'=>'village']); //Danau Ganting
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41967, 'regionable_type'=>'village']); //Danau Masura
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41968, 'regionable_type'=>'village']); //Danau Sadar
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41969, 'regionable_type'=>'village']); //Dangka
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41970, 'regionable_type'=>'village']); //Jelapat
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41971, 'regionable_type'=>'village']); //Lembeng
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41972, 'regionable_type'=>'village']); //Madara
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41973, 'regionable_type'=>'village']); //Mangaris
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41974, 'regionable_type'=>'village']); //Muara Talang
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41975, 'regionable_type'=>'village']); //Murung Paken
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41976, 'regionable_type'=>'village']); //Pamangka
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41977, 'regionable_type'=>'village']); //Telang Andrau
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41978, 'regionable_type'=>'village']); //Teluk Mampun
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41979, 'regionable_type'=>'village']); //Teluk Telaga
                DB::table('regionables')->insert(['region_id'=>4090, 'regionable_id'=>41980, 'regionable_type'=>'village']); //Tetei Lanan
            DB::table('regions')->insert(['id'=>4091, 'parent'=>4086, 'code'=>'7375', 'type'=>'districts', 'name'=>'Districts 7375, City 737, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4091, 'regionable_id'=>3645, 'regionable_type'=>'districts']); //Dusun Selatan
            DB::table('regionables')->insert(['region_id'=>4091, 'regionable_id'=>3646, 'regionable_type'=>'districts']); //Dusun Utara
            DB::table('regionables')->insert(['region_id'=>4091, 'regionable_id'=>3647, 'regionable_type'=>'districts']); //Gunung Bintang Awai
                DB::table('regions')->insert(['id'=>4092, 'parent'=>4091, 'code'=>'73753', 'type'=>'village', 'name'=>'Village 73753, Districts 7375, City 737, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42009, 'regionable_type'=>'village']); //Baruang/ekeng
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42010, 'regionable_type'=>'village']); //Bintang Ara
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42011, 'regionable_type'=>'village']); //Bipak Kali
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42012, 'regionable_type'=>'village']); //Gagutur
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42013, 'regionable_type'=>'village']); //Kayumban
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42014, 'regionable_type'=>'village']); //Malungai Raya
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42015, 'regionable_type'=>'village']); //Marga Jaya
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42016, 'regionable_type'=>'village']); //Muara Singan
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42017, 'regionable_type'=>'village']); //Muka Haji
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42018, 'regionable_type'=>'village']); //Ngurit
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42019, 'regionable_type'=>'village']); //Palo Rejo
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42020, 'regionable_type'=>'village']); //Patas I
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42021, 'regionable_type'=>'village']); //Patas Ii
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42022, 'regionable_type'=>'village']); //Ruhing Raya
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42023, 'regionable_type'=>'village']); //Sarimbuah
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42024, 'regionable_type'=>'village']); //Sei/sungai Paken
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42025, 'regionable_type'=>'village']); //Sire
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42026, 'regionable_type'=>'village']); //Tabak Kanilan
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42027, 'regionable_type'=>'village']); //Ugang Sayu
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42028, 'regionable_type'=>'village']); //Wayun
                DB::table('regionables')->insert(['region_id'=>4092, 'regionable_id'=>42029, 'regionable_type'=>'village']); //Wungkur Baru
            DB::table('regions')->insert(['id'=>4093, 'parent'=>4086, 'code'=>'7376', 'type'=>'districts', 'name'=>'Districts 7376, City 737, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4093, 'regionable_id'=>3648, 'regionable_type'=>'districts']); //Karau Kuala
            DB::table('regionables')->insert(['region_id'=>4093, 'regionable_id'=>3649, 'regionable_type'=>'districts']); //Dusun Hilir
            DB::table('regionables')->insert(['region_id'=>4093, 'regionable_id'=>3650, 'regionable_type'=>'districts']); //Jenamas
                DB::table('regions')->insert(['id'=>4094, 'parent'=>4093, 'code'=>'73763', 'type'=>'village', 'name'=>'Village 73763, Districts 7376, City 737, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4094, 'regionable_id'=>42051, 'regionable_type'=>'village']); //Rangga Ilung
                DB::table('regionables')->insert(['region_id'=>4094, 'regionable_id'=>42052, 'regionable_type'=>'village']); //Rantau Bahuang
                DB::table('regionables')->insert(['region_id'=>4094, 'regionable_id'=>42053, 'regionable_type'=>'village']); //Rantau Kujang
                DB::table('regionables')->insert(['region_id'=>4094, 'regionable_id'=>42054, 'regionable_type'=>'village']); //Tabatan
                DB::table('regionables')->insert(['region_id'=>4094, 'regionable_id'=>42055, 'regionable_type'=>'village']); //Tampulang
        DB::table('regions')->insert(['id'=>4095, 'parent'=>3741, 'code'=>'738', 'type'=>'city', 'name'=>'City 738, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4095, 'regionable_id'=>194, 'regionable_type'=>'city']); //Barito Utara regencies
            DB::table('regions')->insert(['id'=>4096, 'parent'=>4095, 'code'=>'7381', 'type'=>'districts', 'name'=>'Districts 7381, City 738, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4096, 'regionable_id'=>3651, 'regionable_type'=>'districts']); //Teweh Tengah
            DB::table('regionables')->insert(['region_id'=>4096, 'regionable_id'=>3652, 'regionable_type'=>'districts']); //Teweh Baru
            DB::table('regionables')->insert(['region_id'=>4096, 'regionable_id'=>3653, 'regionable_type'=>'districts']); //Teweh Selatan
                DB::table('regions')->insert(['id'=>4097, 'parent'=>4096, 'code'=>'73814', 'type'=>'village', 'name'=>'Village 73814, Districts 7381, City 738, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42058, 'regionable_type'=>'village']); //Beringin Raya
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42059, 'regionable_type'=>'village']); //Datai Nirui
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42060, 'regionable_type'=>'village']); //Lemo I
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42061, 'regionable_type'=>'village']); //Lemo Ii
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42062, 'regionable_type'=>'village']); //Pendreh/pandreh
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42063, 'regionable_type'=>'village']); //Rimba Sari
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42064, 'regionable_type'=>'village']); //Sei/sungai Rahayu I
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42065, 'regionable_type'=>'village']); //Sei/sungai Rahayu Ii
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42067, 'regionable_type'=>'village']); //Hajak
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42068, 'regionable_type'=>'village']); //Jingah
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42069, 'regionable_type'=>'village']); //Liang Naga
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42070, 'regionable_type'=>'village']); //Malawaken
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42071, 'regionable_type'=>'village']); //Sabuh
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42072, 'regionable_type'=>'village']); //Sikui
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42076, 'regionable_type'=>'village']); //Bintang Ninggi I (satu)
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42077, 'regionable_type'=>'village']); //Bintang Ninggi Ii (dua)
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42078, 'regionable_type'=>'village']); //Bukit Sawit
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42079, 'regionable_type'=>'village']); //Buntok Baru
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42080, 'regionable_type'=>'village']); //Butong
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42081, 'regionable_type'=>'village']); //Pandran Permai
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42082, 'regionable_type'=>'village']); //Pandran Raya
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42083, 'regionable_type'=>'village']); //Tawan Jaya
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42084, 'regionable_type'=>'village']); //Terinsing/trinsing
                DB::table('regionables')->insert(['region_id'=>4097, 'regionable_id'=>42085, 'regionable_type'=>'village']); //Trahean
            DB::table('regions')->insert(['id'=>4098, 'parent'=>4095, 'code'=>'7385', 'type'=>'districts', 'name'=>'Districts 7385, City 738, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4098, 'regionable_id'=>3654, 'regionable_type'=>'districts']); //Lahei Barat
            DB::table('regionables')->insert(['region_id'=>4098, 'regionable_id'=>3655, 'regionable_type'=>'districts']); //Lahei
                DB::table('regions')->insert(['id'=>4099, 'parent'=>4098, 'code'=>'73852', 'type'=>'village', 'name'=>'Village 73852, Districts 7385, City 738, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42086, 'regionable_type'=>'village']); //Benao Hilir
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42087, 'regionable_type'=>'village']); //Benao Hulu
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42088, 'regionable_type'=>'village']); //Jangkang Baru
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42089, 'regionable_type'=>'village']); //Jangkang Lama
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42090, 'regionable_type'=>'village']); //Karamuan
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42091, 'regionable_type'=>'village']); //Luwe Hilir
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42092, 'regionable_type'=>'village']); //Luwe Hulu
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42093, 'regionable_type'=>'village']); //Nihan Hilir
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42094, 'regionable_type'=>'village']); //Nihan Hulu
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42095, 'regionable_type'=>'village']); //Papar Pujung
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42096, 'regionable_type'=>'village']); //Teluk Malewai
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42097, 'regionable_type'=>'village']); //Bengahon
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42098, 'regionable_type'=>'village']); //Haragandang
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42099, 'regionable_type'=>'village']); //Hurung Enep
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42100, 'regionable_type'=>'village']); //Ipu
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42101, 'regionable_type'=>'village']); //Juju Baru
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42102, 'regionable_type'=>'village']); //Karendan
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42103, 'regionable_type'=>'village']); //Lahei I
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42104, 'regionable_type'=>'village']); //Lahei Ii
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42105, 'regionable_type'=>'village']); //Muara Bakah
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42106, 'regionable_type'=>'village']); //Muara Inu
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42107, 'regionable_type'=>'village']); //Muara Pari
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42108, 'regionable_type'=>'village']); //Mukut
                DB::table('regionables')->insert(['region_id'=>4099, 'regionable_id'=>42109, 'regionable_type'=>'village']); //Rahaden
            DB::table('regions')->insert(['id'=>4100, 'parent'=>4095, 'code'=>'7386', 'type'=>'districts', 'name'=>'Districts 7386, City 738, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4100, 'regionable_id'=>3656, 'regionable_type'=>'districts']); //Montallat (montalat)
            DB::table('regionables')->insert(['region_id'=>4100, 'regionable_id'=>3657, 'regionable_type'=>'districts']); //Gunung Timang
                DB::table('regions')->insert(['id'=>4101, 'parent'=>4100, 'code'=>'73862', 'type'=>'village', 'name'=>'Village 73862, Districts 7386, City 738, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42120, 'regionable_type'=>'village']); //Baliti
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42121, 'regionable_type'=>'village']); //Baturaya I
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42122, 'regionable_type'=>'village']); //Baturaya Ii
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42123, 'regionable_type'=>'village']); //Jaman
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42124, 'regionable_type'=>'village']); //Kandui
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42125, 'regionable_type'=>'village']); //Ketapang
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42126, 'regionable_type'=>'village']); //Majangkan
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42127, 'regionable_type'=>'village']); //Malungai
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42128, 'regionable_type'=>'village']); //Payang Ara
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42129, 'regionable_type'=>'village']); //Pelari
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42130, 'regionable_type'=>'village']); //Rarawa
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42131, 'regionable_type'=>'village']); //Sangkurang
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42132, 'regionable_type'=>'village']); //Siwau
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42133, 'regionable_type'=>'village']); //Tapen Raya
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42134, 'regionable_type'=>'village']); //Tongka
                DB::table('regionables')->insert(['region_id'=>4101, 'regionable_id'=>42135, 'regionable_type'=>'village']); //Walur
            DB::table('regions')->insert(['id'=>4102, 'parent'=>4095, 'code'=>'7387', 'type'=>'districts', 'name'=>'Districts 7387, City 738, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4102, 'regionable_id'=>3658, 'regionable_type'=>'districts']); //Gunung Purei
                DB::table('regions')->insert(['id'=>4103, 'parent'=>4102, 'code'=>'73871', 'type'=>'village', 'name'=>'Village 73871, Districts 7387, City 738, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42136, 'regionable_type'=>'village']); //Baok
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42137, 'regionable_type'=>'village']); //Berong
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42138, 'regionable_type'=>'village']); //Lampeong I
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42139, 'regionable_type'=>'village']); //Lampeong Ii
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42140, 'regionable_type'=>'village']); //Lawarang
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42141, 'regionable_type'=>'village']); //Linon Besi I
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42142, 'regionable_type'=>'village']); //Linon Besi Ii
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42143, 'regionable_type'=>'village']); //Muara Mea
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42144, 'regionable_type'=>'village']); //Payang
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42145, 'regionable_type'=>'village']); //Tambaba
                DB::table('regionables')->insert(['region_id'=>4103, 'regionable_id'=>42146, 'regionable_type'=>'village']); //Tanjung Harapan
            DB::table('regions')->insert(['id'=>4104, 'parent'=>4095, 'code'=>'7388', 'type'=>'districts', 'name'=>'Districts 7388, City 738, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4104, 'regionable_id'=>3652, 'regionable_type'=>'districts']); //Teweh Baru
            DB::table('regionables')->insert(['region_id'=>4104, 'regionable_id'=>3659, 'regionable_type'=>'districts']); //Teweh Timur
                DB::table('regions')->insert(['id'=>4105, 'parent'=>4104, 'code'=>'73881', 'type'=>'village', 'name'=>'Village 73881, Districts 7388, City 738, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42073, 'regionable_type'=>'village']); //Gandring
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42074, 'regionable_type'=>'village']); //Liangbuah
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42075, 'regionable_type'=>'village']); //Panaen
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42147, 'regionable_type'=>'village']); //Benangin I / I
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42148, 'regionable_type'=>'village']); //Benangin Ii / 2
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42149, 'regionable_type'=>'village']); //Benangin Iii / 3
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42150, 'regionable_type'=>'village']); //Benangin V / 5
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42151, 'regionable_type'=>'village']); //Jamut
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42152, 'regionable_type'=>'village']); //Liju
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42153, 'regionable_type'=>'village']); //Mampuak I
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42154, 'regionable_type'=>'village']); //Mampuak Ii (pantung)
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42155, 'regionable_type'=>'village']); //Muara Wakat
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42156, 'regionable_type'=>'village']); //Sampirang I
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42157, 'regionable_type'=>'village']); //Sampirang Ii
                DB::table('regionables')->insert(['region_id'=>4105, 'regionable_id'=>42158, 'regionable_type'=>'village']); //Sei/sungai Liju
        DB::table('regions')->insert(['id'=>4106, 'parent'=>3741, 'code'=>'739', 'type'=>'city', 'name'=>'City 739, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4106, 'regionable_id'=>195, 'regionable_type'=>'city']); //Murung Raya regencies
            DB::table('regions')->insert(['id'=>4107, 'parent'=>4106, 'code'=>'7391', 'type'=>'districts', 'name'=>'Districts 7391, City 739, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4107, 'regionable_id'=>3660, 'regionable_type'=>'districts']); //Murung
                DB::table('regions')->insert(['id'=>4108, 'parent'=>4107, 'code'=>'73911', 'type'=>'village', 'name'=>'Village 73911, Districts 7391, City 739, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42159, 'regionable_type'=>'village']); //Bahitom/bahintom
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42160, 'regionable_type'=>'village']); //Batu Putih
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42161, 'regionable_type'=>'village']); //Beriwit
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42162, 'regionable_type'=>'village']); //Danau Usung
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42163, 'regionable_type'=>'village']); //Dirung
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42164, 'regionable_type'=>'village']); //Jangin/juking Pajang
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42165, 'regionable_type'=>'village']); //Malasan/masalan
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42166, 'regionable_type'=>'village']); //Mangkahui
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42167, 'regionable_type'=>'village']); //Muara Bumban/bamban
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42168, 'regionable_type'=>'village']); //Muara Jaan
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42169, 'regionable_type'=>'village']); //Muara Sumpoi
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42170, 'regionable_type'=>'village']); //Muara Untu
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42171, 'regionable_type'=>'village']); //Panuut (panaout)
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42172, 'regionable_type'=>'village']); //Penyang
                DB::table('regionables')->insert(['region_id'=>4108, 'regionable_id'=>42173, 'regionable_type'=>'village']); //Puruk Cahu
            DB::table('regions')->insert(['id'=>4109, 'parent'=>4106, 'code'=>'7396', 'type'=>'districts', 'name'=>'Districts 7396, City 739, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4109, 'regionable_id'=>3661, 'regionable_type'=>'districts']); //Tanah Siang
            DB::table('regionables')->insert(['region_id'=>4109, 'regionable_id'=>3662, 'regionable_type'=>'districts']); //Tanah Siang Selatan
                DB::table('regions')->insert(['id'=>4110, 'parent'=>4109, 'code'=>'73961', 'type'=>'village', 'name'=>'Village 73961, Districts 7396, City 739, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42174, 'regionable_type'=>'village']); //Belawan
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42175, 'regionable_type'=>'village']); //Cangkang
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42176, 'regionable_type'=>'village']); //Dirung Bakung
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42177, 'regionable_type'=>'village']); //Doan Arung
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42178, 'regionable_type'=>'village']); //Kalang Kaluh
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42179, 'regionable_type'=>'village']); //Karali
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42180, 'regionable_type'=>'village']); //Kolam
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42181, 'regionable_type'=>'village']); //Konut
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42182, 'regionable_type'=>'village']); //Mahanyan
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42183, 'regionable_type'=>'village']); //Mangkolisoi
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42184, 'regionable_type'=>'village']); //Mantiat Pari
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42185, 'regionable_type'=>'village']); //Muwun
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42186, 'regionable_type'=>'village']); //Nonokaliwon
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42187, 'regionable_type'=>'village']); //Olung Balo
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42188, 'regionable_type'=>'village']); //Olung Dojou
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42189, 'regionable_type'=>'village']); //Olung Nango
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42190, 'regionable_type'=>'village']); //Olung Siron
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42191, 'regionable_type'=>'village']); //Olung Soloi
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42192, 'regionable_type'=>'village']); //Olung Ulu
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42193, 'regionable_type'=>'village']); //Osom Tompok
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42194, 'regionable_type'=>'village']); //Puruk Batu
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42195, 'regionable_type'=>'village']); //Saripoi
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42196, 'regionable_type'=>'village']); //Saruhung
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42197, 'regionable_type'=>'village']); //Sei/sungai Lunuk
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42198, 'regionable_type'=>'village']); //Tabulang
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42199, 'regionable_type'=>'village']); //Tino Talih
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42200, 'regionable_type'=>'village']); //Tokung
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42201, 'regionable_type'=>'village']); //Datah Kotou
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42202, 'regionable_type'=>'village']); //Dirung Lingkin
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42203, 'regionable_type'=>'village']); //Olung Hanangan
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42204, 'regionable_type'=>'village']); //Olung Muro
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42205, 'regionable_type'=>'village']); //Oreng
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42206, 'regionable_type'=>'village']); //Puruk Kambang
                DB::table('regionables')->insert(['region_id'=>4110, 'regionable_id'=>42207, 'regionable_type'=>'village']); //Tahujan Ontu
            DB::table('regions')->insert(['id'=>4111, 'parent'=>4106, 'code'=>'7397', 'type'=>'districts', 'name'=>'Districts 7397, City 739, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4111, 'regionable_id'=>3663, 'regionable_type'=>'districts']); //Permata Intan
            DB::table('regionables')->insert(['region_id'=>4111, 'regionable_id'=>3664, 'regionable_type'=>'districts']); //Sungai Babuat
                DB::table('regions')->insert(['id'=>4112, 'parent'=>4111, 'code'=>'73971', 'type'=>'village', 'name'=>'Village 73971, Districts 7397, City 739, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42208, 'regionable_type'=>'village']); //Baratu (beratu)
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42209, 'regionable_type'=>'village']); //Juking Supan
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42210, 'regionable_type'=>'village']); //Muara Babuat
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42211, 'regionable_type'=>'village']); //Muara Bakanon
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42212, 'regionable_type'=>'village']); //Pantai Laga
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42213, 'regionable_type'=>'village']); //Purnama
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42214, 'regionable_type'=>'village']); //Sei/sungai Bakanon
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42215, 'regionable_type'=>'village']); //Sei/sungai Batang
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42216, 'regionable_type'=>'village']); //Sei/sungai Gula
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42217, 'regionable_type'=>'village']); //Sei/sungai Lobang
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42218, 'regionable_type'=>'village']); //Tumbang Lahung
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42219, 'regionable_type'=>'village']); //Tumbang Salio
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42220, 'regionable_type'=>'village']); //Batu Mirau
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42221, 'regionable_type'=>'village']); //Tambelum
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42222, 'regionable_type'=>'village']); //Tumbang Apat
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42223, 'regionable_type'=>'village']); //Tumbang Bantian
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42224, 'regionable_type'=>'village']); //Tumbang Kolon
                DB::table('regionables')->insert(['region_id'=>4112, 'regionable_id'=>42225, 'regionable_type'=>'village']); //Tumbang Saan
            DB::table('regions')->insert(['id'=>4113, 'parent'=>4106, 'code'=>'7398', 'type'=>'districts', 'name'=>'Districts 7398, City 739, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4113, 'regionable_id'=>3665, 'regionable_type'=>'districts']); //Sumber Barito
            DB::table('regionables')->insert(['region_id'=>4113, 'regionable_id'=>3666, 'regionable_type'=>'districts']); //Uut Murung
            DB::table('regionables')->insert(['region_id'=>4113, 'regionable_id'=>3667, 'regionable_type'=>'districts']); //Seribu Riam
                DB::table('regions')->insert(['id'=>4114, 'parent'=>4113, 'code'=>'73981', 'type'=>'village', 'name'=>'Village 73981, Districts 7398, City 739, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42226, 'regionable_type'=>'village']); //Batu Makap
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42227, 'regionable_type'=>'village']); //Kalapeh Baru
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42228, 'regionable_type'=>'village']); //Laas Baru
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42229, 'regionable_type'=>'village']); //Olong Liko
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42230, 'regionable_type'=>'village']); //Teluk/telok Jolo
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42231, 'regionable_type'=>'village']); //Tumbang Kunyi
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42232, 'regionable_type'=>'village']); //Tumbang Masao
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42233, 'regionable_type'=>'village']); //Tumbang Mulut
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42234, 'regionable_type'=>'village']); //Tumbang Tuan
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42235, 'regionable_type'=>'village']); //Kalasin
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42236, 'regionable_type'=>'village']); //Tumbang Olong
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42237, 'regionable_type'=>'village']); //Tumbang Olong Ii
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42238, 'regionable_type'=>'village']); //Tumbang Tujang
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42239, 'regionable_type'=>'village']); //Tumbang Tupus/topus
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42240, 'regionable_type'=>'village']); //Muara Joloi I
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42241, 'regionable_type'=>'village']); //Muara Joloi Ii
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42242, 'regionable_type'=>'village']); //Parahau
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42243, 'regionable_type'=>'village']); //Takajung
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42244, 'regionable_type'=>'village']); //Tumbang Jojang
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42245, 'regionable_type'=>'village']); //Tumbang Naan
                DB::table('regionables')->insert(['region_id'=>4114, 'regionable_id'=>42246, 'regionable_type'=>'village']); //Tumbang Tuhan/tohan
            DB::table('regions')->insert(['id'=>4115, 'parent'=>4106, 'code'=>'7399', 'type'=>'districts', 'name'=>'Districts 7399, City 739, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4115, 'regionable_id'=>3668, 'regionable_type'=>'districts']); //Laung Tuhup
            DB::table('regionables')->insert(['region_id'=>4115, 'regionable_id'=>3669, 'regionable_type'=>'districts']); //Barito Tuhup Raya
                DB::table('regions')->insert(['id'=>4116, 'parent'=>4115, 'code'=>'73991', 'type'=>'village', 'name'=>'Village 73991, Districts 7399, City 739, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42247, 'regionable_type'=>'village']); //Batu Bua I
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42248, 'regionable_type'=>'village']); //Batu Bua Ii
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42249, 'regionable_type'=>'village']); //Batu Karang
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42250, 'regionable_type'=>'village']); //Batu Tuhup
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42251, 'regionable_type'=>'village']); //Beralang
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42252, 'regionable_type'=>'village']); //Beras Belange
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42253, 'regionable_type'=>'village']); //Biha
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42254, 'regionable_type'=>'village']); //Dirung Pinang
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42255, 'regionable_type'=>'village']); //Dirung Pundu
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42256, 'regionable_type'=>'village']); //Kalang Duhung
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42257, 'regionable_type'=>'village']); //Lakutan
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42258, 'regionable_type'=>'village']); //Muara Laung I
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42259, 'regionable_type'=>'village']); //Muara Laung Ii
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42260, 'regionable_type'=>'village']); //Muara Maruwei I
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42261, 'regionable_type'=>'village']); //Muara Maruwei Ii
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42262, 'regionable_type'=>'village']); //Muara Tuhup
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42263, 'regionable_type'=>'village']); //Muara Tupuh
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42264, 'regionable_type'=>'village']); //Narui
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42265, 'regionable_type'=>'village']); //Pelaci
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42266, 'regionable_type'=>'village']); //Penda Siron
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42267, 'regionable_type'=>'village']); //Tahujan Laung
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42268, 'regionable_type'=>'village']); //Tawai Haui
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42269, 'regionable_type'=>'village']); //Tumbang Bahan
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42270, 'regionable_type'=>'village']); //Tumbang Bana
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42271, 'regionable_type'=>'village']); //Tumbang Bondang
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42272, 'regionable_type'=>'village']); //Tumbang Tonduk
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42273, 'regionable_type'=>'village']); //Batu Tojah
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42274, 'regionable_type'=>'village']); //Bumban Tuhup
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42275, 'regionable_type'=>'village']); //Cinta Budiman
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42276, 'regionable_type'=>'village']); //Dirung Sararung/sararong
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42277, 'regionable_type'=>'village']); //Hingan Tokung
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42278, 'regionable_type'=>'village']); //Kohong
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42279, 'regionable_type'=>'village']); //Liang Nyaling
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42280, 'regionable_type'=>'village']); //Makunjung
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42281, 'regionable_type'=>'village']); //Tumbang Baloi
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42282, 'regionable_type'=>'village']); //Tumbang Bauh
                DB::table('regionables')->insert(['region_id'=>4116, 'regionable_id'=>42283, 'regionable_type'=>'village']); //Tumbang Masalo
        DB::table('regions')->insert(['id'=>4117, 'parent'=>3741, 'code'=>'741', 'type'=>'city', 'name'=>'City 741, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4117, 'regionable_id'=>196, 'regionable_type'=>'city']); //Kotawaringin Barat regencies
        DB::table('regionables')->insert(['region_id'=>4117, 'regionable_id'=>197, 'regionable_type'=>'city']); //Lamandau regencies
        DB::table('regionables')->insert(['region_id'=>4117, 'regionable_id'=>198, 'regionable_type'=>'city']); //Sukamara regencies
            DB::table('regions')->insert(['id'=>4118, 'parent'=>4117, 'code'=>'7417', 'type'=>'districts', 'name'=>'Districts 7417, City 741, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4118, 'regionable_id'=>3684, 'regionable_type'=>'districts']); //Jelai
            DB::table('regionables')->insert(['region_id'=>4118, 'regionable_id'=>3685, 'regionable_type'=>'districts']); //Pantai Lunci
            DB::table('regionables')->insert(['region_id'=>4118, 'regionable_id'=>3686, 'regionable_type'=>'districts']); //Sukamara
            DB::table('regionables')->insert(['region_id'=>4118, 'regionable_id'=>3687, 'regionable_type'=>'districts']); //Balai Riam
            DB::table('regionables')->insert(['region_id'=>4118, 'regionable_id'=>3688, 'regionable_type'=>'districts']); //Permata Kecubung
                DB::table('regions')->insert(['id'=>4119, 'parent'=>4118, 'code'=>'74173', 'type'=>'village', 'name'=>'Village 74173, Districts 7417, City 741, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42477, 'regionable_type'=>'village']); //Air Dua
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42478, 'regionable_type'=>'village']); //Balai Riam
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42479, 'regionable_type'=>'village']); //Bangun Jaya
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42480, 'regionable_type'=>'village']); //Bukit Sungkai
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42481, 'regionable_type'=>'village']); //Jihing
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42482, 'regionable_type'=>'village']); //Lupu Peruca
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42483, 'regionable_type'=>'village']); //Pempaning
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42484, 'regionable_type'=>'village']); //Sekuningan Baru
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42485, 'regionable_type'=>'village']); //Ajang
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42486, 'regionable_type'=>'village']); //Kenawan
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42487, 'regionable_type'=>'village']); //Laman Baru
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42488, 'regionable_type'=>'village']); //Natai Kondang
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42489, 'regionable_type'=>'village']); //Nibung Terjun
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42490, 'regionable_type'=>'village']); //Semantun
                DB::table('regionables')->insert(['region_id'=>4119, 'regionable_id'=>42491, 'regionable_type'=>'village']); //Sembi Kuan
        DB::table('regions')->insert(['id'=>4120, 'parent'=>3741, 'code'=>'742', 'type'=>'city', 'name'=>'City 742, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4120, 'regionable_id'=>199, 'regionable_type'=>'city']); //Seruyan regencies
            DB::table('regions')->insert(['id'=>4121, 'parent'=>4120, 'code'=>'7421', 'type'=>'districts', 'name'=>'Districts 7421, City 742, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4121, 'regionable_id'=>3689, 'regionable_type'=>'districts']); //Seruyan Hilir
            DB::table('regionables')->insert(['region_id'=>4121, 'regionable_id'=>3690, 'regionable_type'=>'districts']); //Seruyan Hilir Timur
                DB::table('regions')->insert(['id'=>4122, 'parent'=>4121, 'code'=>'74213', 'type'=>'village', 'name'=>'Village 74213, Districts 7421, City 742, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4122, 'regionable_id'=>42492, 'regionable_type'=>'village']); //Pematang Limau
                DB::table('regionables')->insert(['region_id'=>4122, 'regionable_id'=>42502, 'regionable_type'=>'village']); //Pematang Panjang
                DB::table('regions')->insert(['id'=>4123, 'parent'=>4121, 'code'=>'74215', 'type'=>'village', 'name'=>'Village 74215, Districts 7421, City 742, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42497, 'regionable_type'=>'village']); //Kuala Pembuang Dua (ii)
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42498, 'regionable_type'=>'village']); //Kuala Pembuang Satu (i)
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42499, 'regionable_type'=>'village']); //Persit Raya
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42500, 'regionable_type'=>'village']); //Sei/sungai Perlu
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42501, 'regionable_type'=>'village']); //Sei/sungai Urdang
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42503, 'regionable_type'=>'village']); //Bangun Harja/harjo
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42504, 'regionable_type'=>'village']); //Halimaung Jaya
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42505, 'regionable_type'=>'village']); //Kartika Bhakti/bakti
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42506, 'regionable_type'=>'village']); //Mekar Indah
                DB::table('regionables')->insert(['region_id'=>4123, 'regionable_id'=>42507, 'regionable_type'=>'village']); //Sei/sungai Bakau
            DB::table('regions')->insert(['id'=>4124, 'parent'=>4120, 'code'=>'7426', 'type'=>'districts', 'name'=>'Districts 7426, City 742, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4124, 'regionable_id'=>3691, 'regionable_type'=>'districts']); //Seruyan Raya
            DB::table('regionables')->insert(['region_id'=>4124, 'regionable_id'=>3692, 'regionable_type'=>'districts']); //Danau Sembuluh
                DB::table('regions')->insert(['id'=>4125, 'parent'=>4124, 'code'=>'74261', 'type'=>'village', 'name'=>'Village 74261, Districts 7426, City 742, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42508, 'regionable_type'=>'village']); //Bangkal
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42509, 'regionable_type'=>'village']); //Lanpasa
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42510, 'regionable_type'=>'village']); //Salunuk (selunuk)
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42511, 'regionable_type'=>'village']); //Tabiku
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42512, 'regionable_type'=>'village']); //Terawan
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42513, 'regionable_type'=>'village']); //Banua Usang
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42514, 'regionable_type'=>'village']); //Cempaka Baru
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42515, 'regionable_type'=>'village']); //Palingkau
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42516, 'regionable_type'=>'village']); //Paren
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42517, 'regionable_type'=>'village']); //Sembuluh I (satu)
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42518, 'regionable_type'=>'village']); //Sembuluh Ii (dua)
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42519, 'regionable_type'=>'village']); //Telaga Pulang
                DB::table('regionables')->insert(['region_id'=>4125, 'regionable_id'=>42520, 'regionable_type'=>'village']); //Ulak Batu
            DB::table('regions')->insert(['id'=>4126, 'parent'=>4120, 'code'=>'7427', 'type'=>'districts', 'name'=>'Districts 7427, City 742, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4126, 'regionable_id'=>3693, 'regionable_type'=>'districts']); //Danau Seluluk
            DB::table('regionables')->insert(['region_id'=>4126, 'regionable_id'=>3694, 'regionable_type'=>'districts']); //Hanau
                DB::table('regions')->insert(['id'=>4127, 'parent'=>4126, 'code'=>'74271', 'type'=>'village', 'name'=>'Village 74271, Districts 7427, City 742, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42521, 'regionable_type'=>'village']); //Asam Baru
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42522, 'regionable_type'=>'village']); //Panimba Raya
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42523, 'regionable_type'=>'village']); //Rangau Raya
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42524, 'regionable_type'=>'village']); //Tanjung Hara
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42525, 'regionable_type'=>'village']); //Tanjung Paring
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42526, 'regionable_type'=>'village']); //Tanjung Rangas Ii
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42527, 'regionable_type'=>'village']); //Bahaur
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42528, 'regionable_type'=>'village']); //Derangga
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42529, 'regionable_type'=>'village']); //Parang Batang
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42530, 'regionable_type'=>'village']); //Paring Raya
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42531, 'regionable_type'=>'village']); //Pembuang Hulu I
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42532, 'regionable_type'=>'village']); //Pembuang Hulu Ii
                DB::table('regionables')->insert(['region_id'=>4127, 'regionable_id'=>42533, 'regionable_type'=>'village']); //Tanjung Hanau/hana
            DB::table('regions')->insert(['id'=>4128, 'parent'=>4120, 'code'=>'7428', 'type'=>'districts', 'name'=>'Districts 7428, City 742, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4128, 'regionable_id'=>3695, 'regionable_type'=>'districts']); //Seruyan Tengah
            DB::table('regionables')->insert(['region_id'=>4128, 'regionable_id'=>3696, 'regionable_type'=>'districts']); //Batu Ampar
                DB::table('regions')->insert(['id'=>4129, 'parent'=>4128, 'code'=>'74281', 'type'=>'village', 'name'=>'Village 74281, Districts 7428, City 742, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42534, 'regionable_type'=>'village']); //Ayawan
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42535, 'regionable_type'=>'village']); //Batu Agung
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42536, 'regionable_type'=>'village']); //Bukit Buluh/buluk
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42537, 'regionable_type'=>'village']); //Bumi Jaya (bumi Ayu)
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42538, 'regionable_type'=>'village']); //Durian Tunggal
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42539, 'regionable_type'=>'village']); //Gantung Pengayuh
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42540, 'regionable_type'=>'village']); //Mugi Panyahu (mugie Panyuhu)
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42541, 'regionable_type'=>'village']); //Panca Jaya
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42542, 'regionable_type'=>'village']); //Pangke
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42543, 'regionable_type'=>'village']); //Penyumpa
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42544, 'regionable_type'=>'village']); //Rantau Pulut
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42545, 'regionable_type'=>'village']); //Ringin Agung
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42546, 'regionable_type'=>'village']); //Suka Jaya (suka Ayu)
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42547, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42548, 'regionable_type'=>'village']); //Suka Makmur
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42549, 'regionable_type'=>'village']); //Suka Mandang
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42550, 'regionable_type'=>'village']); //Sukorejo (suku Rejo)
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42551, 'regionable_type'=>'village']); //Tangga Batu
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42552, 'regionable_type'=>'village']); //Teluk Bayur
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42553, 'regionable_type'=>'village']); //Tumbang Bai/bei
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42554, 'regionable_type'=>'village']); //Batu Manangis
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42555, 'regionable_type'=>'village']); //Derawa
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42556, 'regionable_type'=>'village']); //Durian Kait
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42557, 'regionable_type'=>'village']); //Kalang
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42558, 'regionable_type'=>'village']); //Sandul
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42559, 'regionable_type'=>'village']); //Sebabi
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42560, 'regionable_type'=>'village']); //Sehabu (sahabu/sebabu)
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42561, 'regionable_type'=>'village']); //Suka Mulya
                DB::table('regionables')->insert(['region_id'=>4129, 'regionable_id'=>42562, 'regionable_type'=>'village']); //Wana Tirta
            DB::table('regions')->insert(['id'=>4130, 'parent'=>4120, 'code'=>'7429', 'type'=>'districts', 'name'=>'Districts 7429, City 742, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4130, 'regionable_id'=>3697, 'regionable_type'=>'districts']); //Seruyan Hulu
            DB::table('regionables')->insert(['region_id'=>4130, 'regionable_id'=>3698, 'regionable_type'=>'districts']); //Suling Tambun
                DB::table('regions')->insert(['id'=>4131, 'parent'=>4130, 'code'=>'74291', 'type'=>'village', 'name'=>'Village 74291, Districts 7429, City 742, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42563, 'regionable_type'=>'village']); //Buntut Sapau
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42564, 'regionable_type'=>'village']); //Majang/mojang Baru
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42565, 'regionable_type'=>'village']); //Marandang
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42566, 'regionable_type'=>'village']); //Mongoh Juoi
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42567, 'regionable_type'=>'village']); //Rantau Panjang
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42568, 'regionable_type'=>'village']); //Riam Batang
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42569, 'regionable_type'=>'village']); //Sepundu Hantu
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42570, 'regionable_type'=>'village']); //Tanjung Paku
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42571, 'regionable_type'=>'village']); //Tumbang Bahan
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42572, 'regionable_type'=>'village']); //Tumbang Darap
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42573, 'regionable_type'=>'village']); //Tumbang Kalam
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42574, 'regionable_type'=>'village']); //Tumbang Kasai
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42575, 'regionable_type'=>'village']); //Tumbang Kubang
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42576, 'regionable_type'=>'village']); //Tumbang Laku
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42577, 'regionable_type'=>'village']); //Tumbang Manjul
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42578, 'regionable_type'=>'village']); //Tumbang Sepan
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42579, 'regionable_type'=>'village']); //Tumbang Setawai
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42580, 'regionable_type'=>'village']); //Tumbang Suei
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42581, 'regionable_type'=>'village']); //Tumbang Taberau
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42582, 'regionable_type'=>'village']); //Tusuk Belawan
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42583, 'regionable_type'=>'village']); //Rangkang Munduk
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42584, 'regionable_type'=>'village']); //Rantau Betung
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42585, 'regionable_type'=>'village']); //Tanjung Tukal
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42586, 'regionable_type'=>'village']); //Tumbang Gugup
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42587, 'regionable_type'=>'village']); //Tumbang Hentas
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42588, 'regionable_type'=>'village']); //Tumbang Langkai
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42589, 'regionable_type'=>'village']); //Tumbang Magin
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42590, 'regionable_type'=>'village']); //Tumbang Salau
                DB::table('regionables')->insert(['region_id'=>4131, 'regionable_id'=>42591, 'regionable_type'=>'village']); //Tumbang Setoli
        DB::table('regions')->insert(['id'=>4132, 'parent'=>3741, 'code'=>'743', 'type'=>'city', 'name'=>'City 743, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4132, 'regionable_id'=>200, 'regionable_type'=>'city']); //Kotawaringin Timur regencies
            DB::table('regions')->insert(['id'=>4133, 'parent'=>4132, 'code'=>'7431', 'type'=>'districts', 'name'=>'Districts 7431, City 743, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4133, 'regionable_id'=>3699, 'regionable_type'=>'districts']); //Baamang
            DB::table('regionables')->insert(['region_id'=>4133, 'regionable_id'=>3700, 'regionable_type'=>'districts']); //Seranau
                DB::table('regions')->insert(['id'=>4134, 'parent'=>4133, 'code'=>'74314', 'type'=>'village', 'name'=>'Village 74314, Districts 7431, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4134, 'regionable_id'=>42598, 'regionable_type'=>'village']); //Ganepo
                DB::table('regionables')->insert(['region_id'=>4134, 'regionable_id'=>42599, 'regionable_type'=>'village']); //Terantang
                DB::table('regions')->insert(['id'=>4135, 'parent'=>4133, 'code'=>'74315', 'type'=>'village', 'name'=>'Village 74315, Districts 7431, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4135, 'regionable_id'=>42600, 'regionable_type'=>'village']); //Batuah
                DB::table('regionables')->insert(['region_id'=>4135, 'regionable_id'=>42601, 'regionable_type'=>'village']); //Terantang Hilir
            DB::table('regions')->insert(['id'=>4136, 'parent'=>4132, 'code'=>'7432', 'type'=>'districts', 'name'=>'Districts 7432, City 743, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4136, 'regionable_id'=>3700, 'regionable_type'=>'districts']); //Seranau
            DB::table('regionables')->insert(['region_id'=>4136, 'regionable_id'=>3701, 'regionable_type'=>'districts']); //Mentawa Baru (ketapang)
                DB::table('regions')->insert(['id'=>4137, 'parent'=>4136, 'code'=>'74321', 'type'=>'village', 'name'=>'Village 74321, Districts 7432, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4137, 'regionable_id'=>42603, 'regionable_type'=>'village']); //Sawahan (mentawa Baru Hulu Utara)
                DB::table('regions')->insert(['id'=>4138, 'parent'=>4136, 'code'=>'74322', 'type'=>'village', 'name'=>'Village 74322, Districts 7432, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4138, 'regionable_id'=>42604, 'regionable_type'=>'village']); //Mentawa Baru Hulu
                DB::table('regionables')->insert(['region_id'=>4138, 'regionable_id'=>42605, 'regionable_type'=>'village']); //Pasir Putih
                DB::table('regions')->insert(['id'=>4139, 'parent'=>4136, 'code'=>'74323', 'type'=>'village', 'name'=>'Village 74323, Districts 7432, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4139, 'regionable_id'=>42606, 'regionable_type'=>'village']); //Mentawa Baru Hilir
                DB::table('regions')->insert(['id'=>4140, 'parent'=>4136, 'code'=>'74325', 'type'=>'village', 'name'=>'Village 74325, Districts 7432, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4140, 'regionable_id'=>42607, 'regionable_type'=>'village']); //Ketapang
                DB::table('regions')->insert(['id'=>4141, 'parent'=>4136, 'code'=>'74326', 'type'=>'village', 'name'=>'Village 74326, Districts 7432, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4141, 'regionable_id'=>42608, 'regionable_type'=>'village']); //Bapanggang Raya
                DB::table('regionables')->insert(['region_id'=>4141, 'regionable_id'=>42609, 'regionable_type'=>'village']); //Bapeang
                DB::table('regionables')->insert(['region_id'=>4141, 'regionable_id'=>42610, 'regionable_type'=>'village']); //Bengkuang Makmur
                DB::table('regionables')->insert(['region_id'=>4141, 'regionable_id'=>42611, 'regionable_type'=>'village']); //Eka Bahurui
                DB::table('regionables')->insert(['region_id'=>4141, 'regionable_id'=>42612, 'regionable_type'=>'village']); //Pelangsian
                DB::table('regionables')->insert(['region_id'=>4141, 'regionable_id'=>42613, 'regionable_type'=>'village']); //Telaga Baru
            DB::table('regions')->insert(['id'=>4142, 'parent'=>4132, 'code'=>'7435', 'type'=>'districts', 'name'=>'Districts 7435, City 743, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3702, 'regionable_type'=>'districts']); //Telaga Antang
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3703, 'regionable_type'=>'districts']); //Antang Kalang
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3704, 'regionable_type'=>'districts']); //Kota Besi
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3705, 'regionable_type'=>'districts']); //Telawang
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3706, 'regionable_type'=>'districts']); //Cempaga Hulu
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3707, 'regionable_type'=>'districts']); //Cempaga
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3708, 'regionable_type'=>'districts']); //Parenggean
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3709, 'regionable_type'=>'districts']); //Tualan Hulu
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3710, 'regionable_type'=>'districts']); //Mentaya Hulu
            DB::table('regionables')->insert(['region_id'=>4142, 'regionable_id'=>3711, 'regionable_type'=>'districts']); //Bukit Santuei
                DB::table('regions')->insert(['id'=>4143, 'parent'=>4142, 'code'=>'74356', 'type'=>'village', 'name'=>'Village 74356, Districts 7435, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42629, 'regionable_type'=>'village']); //Buana Mustika
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42630, 'regionable_type'=>'village']); //Tanjung Harapan
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42707, 'regionable_type'=>'village']); //Baampah
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42708, 'regionable_type'=>'village']); //Bawan
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42709, 'regionable_type'=>'village']); //Kapuk
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42710, 'regionable_type'=>'village']); //Kawan Batu
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42711, 'regionable_type'=>'village']); //Kuala Kuayan
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42712, 'regionable_type'=>'village']); //Pahirangan
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42713, 'regionable_type'=>'village']); //Pemantang
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42714, 'regionable_type'=>'village']); //Penda Durian
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42715, 'regionable_type'=>'village']); //Santilik
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42716, 'regionable_type'=>'village']); //Sationg
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42717, 'regionable_type'=>'village']); //Tangar
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42718, 'regionable_type'=>'village']); //Tangka Robah
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42719, 'regionable_type'=>'village']); //Tanjung Batur
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42720, 'regionable_type'=>'village']); //Tanjung Jariangau
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42721, 'regionable_type'=>'village']); //Tumbang Sapiri
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42722, 'regionable_type'=>'village']); //Lunuk Bagantung
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42723, 'regionable_type'=>'village']); //Tanah Haluan
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42724, 'regionable_type'=>'village']); //Tewei Hara
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42725, 'regionable_type'=>'village']); //Tumbang Batu
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42726, 'regionable_type'=>'village']); //Tumbang Getas
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42727, 'regionable_type'=>'village']); //Tumbang Kamining/kaminting
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42728, 'regionable_type'=>'village']); //Tumbang Kania
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42729, 'regionable_type'=>'village']); //Tumbang Payang
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42730, 'regionable_type'=>'village']); //Tumbang Penyahuan
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42731, 'regionable_type'=>'village']); //Tumbang Saluang
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42732, 'regionable_type'=>'village']); //Tumbang Sapia
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42733, 'regionable_type'=>'village']); //Tumbang Tawan
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42734, 'regionable_type'=>'village']); //Tumbang Tilap
                DB::table('regionables')->insert(['region_id'=>4143, 'regionable_id'=>42735, 'regionable_type'=>'village']); //Tumbang Torung/turung
            DB::table('regions')->insert(['id'=>4144, 'parent'=>4132, 'code'=>'7436', 'type'=>'districts', 'name'=>'Districts 7436, City 743, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4144, 'regionable_id'=>3712, 'regionable_type'=>'districts']); //Mentaya Hilir Utara
            DB::table('regionables')->insert(['region_id'=>4144, 'regionable_id'=>3713, 'regionable_type'=>'districts']); //Pulau Hanaut
            DB::table('regionables')->insert(['region_id'=>4144, 'regionable_id'=>3714, 'regionable_type'=>'districts']); //Teluk Sampit
            DB::table('regionables')->insert(['region_id'=>4144, 'regionable_id'=>3715, 'regionable_type'=>'districts']); //Mentaya Hilir Selatan
                DB::table('regions')->insert(['id'=>4145, 'parent'=>4144, 'code'=>'74363', 'type'=>'village', 'name'=>'Village 74363, Districts 7436, City 743, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42753, 'regionable_type'=>'village']); //Basawang
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42754, 'regionable_type'=>'village']); //Kuin Permai
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42755, 'regionable_type'=>'village']); //Lampuyang
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42756, 'regionable_type'=>'village']); //Parebok
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42757, 'regionable_type'=>'village']); //Regei Lestari
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42758, 'regionable_type'=>'village']); //Ujung Pandaran
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42759, 'regionable_type'=>'village']); //Basirih Hilir
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42760, 'regionable_type'=>'village']); //Basirih Hulu
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42761, 'regionable_type'=>'village']); //Handil Sohor
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42762, 'regionable_type'=>'village']); //Jaya Karet
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42763, 'regionable_type'=>'village']); //Jaya Kelapa
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42764, 'regionable_type'=>'village']); //Sabamban
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42765, 'regionable_type'=>'village']); //Samuda Besar
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42766, 'regionable_type'=>'village']); //Samuda Kecil
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42767, 'regionable_type'=>'village']); //Samuda Kota
                DB::table('regionables')->insert(['region_id'=>4145, 'regionable_id'=>42768, 'regionable_type'=>'village']); //Sei/sungai Ijum Raya
        DB::table('regions')->insert(['id'=>4146, 'parent'=>3741, 'code'=>'744', 'type'=>'city', 'name'=>'City 744, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4146, 'regionable_id'=>201, 'regionable_type'=>'city']); //Katingan regencies
            DB::table('regions')->insert(['id'=>4147, 'parent'=>4146, 'code'=>'7441', 'type'=>'districts', 'name'=>'Districts 7441, City 744, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4147, 'regionable_id'=>3716, 'regionable_type'=>'districts']); //Katingan Hilir
                DB::table('regions')->insert(['id'=>4148, 'parent'=>4147, 'code'=>'74413', 'type'=>'village', 'name'=>'Village 74413, Districts 7441, City 744, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4148, 'regionable_id'=>42769, 'regionable_type'=>'village']); //Banut Kalanaman
                DB::table('regionables')->insert(['region_id'=>4148, 'regionable_id'=>42770, 'regionable_type'=>'village']); //Hampalit
                DB::table('regionables')->insert(['region_id'=>4148, 'regionable_id'=>42771, 'regionable_type'=>'village']); //Kasongan Baru
                DB::table('regionables')->insert(['region_id'=>4148, 'regionable_id'=>42772, 'regionable_type'=>'village']); //Kasongan Lama
                DB::table('regionables')->insert(['region_id'=>4148, 'regionable_id'=>42773, 'regionable_type'=>'village']); //Talangkah (telangkah)
                DB::table('regionables')->insert(['region_id'=>4148, 'regionable_id'=>42774, 'regionable_type'=>'village']); //Talian Kereng
                DB::table('regionables')->insert(['region_id'=>4148, 'regionable_id'=>42775, 'regionable_type'=>'village']); //Tewang Kadamba
                DB::table('regionables')->insert(['region_id'=>4148, 'regionable_id'=>42776, 'regionable_type'=>'village']); //Tumbang Liting
            DB::table('regions')->insert(['id'=>4149, 'parent'=>4146, 'code'=>'7445', 'type'=>'districts', 'name'=>'Districts 7445, City 744, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4149, 'regionable_id'=>3717, 'regionable_type'=>'districts']); //Tewang Sanggalang Garing (sangalang)
            DB::table('regionables')->insert(['region_id'=>4149, 'regionable_id'=>3718, 'regionable_type'=>'districts']); //Pulau Malan
            DB::table('regionables')->insert(['region_id'=>4149, 'regionable_id'=>3719, 'regionable_type'=>'districts']); //Katingan Tengah
            DB::table('regionables')->insert(['region_id'=>4149, 'regionable_id'=>3720, 'regionable_type'=>'districts']); //Petak Malai
            DB::table('regionables')->insert(['region_id'=>4149, 'regionable_id'=>3721, 'regionable_type'=>'districts']); //Sanaman Mantikei (senamang Mantikei)
            DB::table('regionables')->insert(['region_id'=>4149, 'regionable_id'=>3722, 'regionable_type'=>'districts']); //Marikit
            DB::table('regionables')->insert(['region_id'=>4149, 'regionable_id'=>3723, 'regionable_type'=>'districts']); //Katingan Hulu
            DB::table('regionables')->insert(['region_id'=>4149, 'regionable_id'=>3724, 'regionable_type'=>'districts']); //Bukit Raya
                DB::table('regions')->insert(['id'=>4150, 'parent'=>4149, 'code'=>'74457', 'type'=>'village', 'name'=>'Village 74457, Districts 7445, City 744, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42856, 'regionable_type'=>'village']); //Batu Bango
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42857, 'regionable_type'=>'village']); //Dehes Asem
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42858, 'regionable_type'=>'village']); //Kiham Batang
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42859, 'regionable_type'=>'village']); //Kuluk Sepangi/sapangi
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42860, 'regionable_type'=>'village']); //Penda Tangaring Baru
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42861, 'regionable_type'=>'village']); //Penda Tangaring Lama
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42862, 'regionable_type'=>'village']); //Rangan Kawit
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42863, 'regionable_type'=>'village']); //Rangan Ranjing
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42864, 'regionable_type'=>'village']); //Rantau Bahai
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42865, 'regionable_type'=>'village']); //Rantau Puka
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42866, 'regionable_type'=>'village']); //Sei/sungai Nanjan
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42867, 'regionable_type'=>'village']); //Telok Tampang
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42868, 'regionable_type'=>'village']); //Tumbang Hangei Ii
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42869, 'regionable_type'=>'village']); //Tumbang Jiga
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42870, 'regionable_type'=>'village']); //Tumbang Kabayan/kabayang
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42871, 'regionable_type'=>'village']); //Tumbang Kuai
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42872, 'regionable_type'=>'village']); //Tumbang Labaning
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42873, 'regionable_type'=>'village']); //Tumbang Mahop/mahup
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42874, 'regionable_type'=>'village']); //Tumbang Manangei
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42875, 'regionable_type'=>'village']); //Tumbang Mangketai
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42876, 'regionable_type'=>'village']); //Tumbang Sabetung
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42877, 'regionable_type'=>'village']); //Tumbang Salaman
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42878, 'regionable_type'=>'village']); //Tumbang Senamang I
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42879, 'regionable_type'=>'village']); //Penda Nange
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42880, 'regionable_type'=>'village']); //Rangan Bahekang
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42881, 'regionable_type'=>'village']); //Rantau Pandan
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42882, 'regionable_type'=>'village']); //Rongan Rondan
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42883, 'regionable_type'=>'village']); //Tanjung Batik
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42884, 'regionable_type'=>'village']); //Tumbang Dahuei
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42885, 'regionable_type'=>'village']); //Tumbang Gaei
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42886, 'regionable_type'=>'village']); //Tumbang Kaburai
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42887, 'regionable_type'=>'village']); //Tumbang Kajamei
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42888, 'regionable_type'=>'village']); //Tumbang Karuei
                DB::table('regionables')->insert(['region_id'=>4150, 'regionable_id'=>42889, 'regionable_type'=>'village']); //Tumbang Kataei
            DB::table('regions')->insert(['id'=>4151, 'parent'=>4146, 'code'=>'7446', 'type'=>'districts', 'name'=>'Districts 7446, City 744, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4151, 'regionable_id'=>3725, 'regionable_type'=>'districts']); //Tasik Payawan
            DB::table('regionables')->insert(['region_id'=>4151, 'regionable_id'=>3726, 'regionable_type'=>'districts']); //Kamipang
            DB::table('regionables')->insert(['region_id'=>4151, 'regionable_id'=>3727, 'regionable_type'=>'districts']); //Katingan Kuala
            DB::table('regionables')->insert(['region_id'=>4151, 'regionable_id'=>3728, 'regionable_type'=>'districts']); //Mendawai
                DB::table('regions')->insert(['id'=>4152, 'parent'=>4151, 'code'=>'74463', 'type'=>'village', 'name'=>'Village 74463, Districts 7446, City 744, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42907, 'regionable_type'=>'village']); //Bakung Raya
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42908, 'regionable_type'=>'village']); //Bumi Subur
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42909, 'regionable_type'=>'village']); //Jaya Makmur
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42910, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42911, 'regionable_type'=>'village']); //Kampung Melayu
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42912, 'regionable_type'=>'village']); //Kampung Tengah
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42913, 'regionable_type'=>'village']); //Makmur Utama
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42914, 'regionable_type'=>'village']); //Mangun Jaya
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42915, 'regionable_type'=>'village']); //Pegatan/pagatan Hilir
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42916, 'regionable_type'=>'village']); //Pegatan/pagatan Hulu
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42917, 'regionable_type'=>'village']); //Sebangau Jaya
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42918, 'regionable_type'=>'village']); //Selat Baning
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42919, 'regionable_type'=>'village']); //Setia Mulia
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42920, 'regionable_type'=>'village']); //Singam Raya
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42921, 'regionable_type'=>'village']); //Subur Indah
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42922, 'regionable_type'=>'village']); //Sungai Kaki
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42923, 'regionable_type'=>'village']); //Kampung Melayu
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42924, 'regionable_type'=>'village']); //Mekar Tani
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42925, 'regionable_type'=>'village']); //Mendawai
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42926, 'regionable_type'=>'village']); //Perigi (parigi)
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42927, 'regionable_type'=>'village']); //Teluk Sebulu
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42928, 'regionable_type'=>'village']); //Tewang/tawang Kampung
                DB::table('regionables')->insert(['region_id'=>4152, 'regionable_id'=>42929, 'regionable_type'=>'village']); //Tumbang Bulan
        DB::table('regions')->insert(['id'=>4153, 'parent'=>3741, 'code'=>'745', 'type'=>'city', 'name'=>'City 745, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4153, 'regionable_id'=>191, 'regionable_type'=>'city']); //Kapuas regencies
        DB::table('regionables')->insert(['region_id'=>4153, 'regionable_id'=>202, 'regionable_type'=>'city']); //Gunung Mas regencies
            DB::table('regions')->insert(['id'=>4154, 'parent'=>4153, 'code'=>'7451', 'type'=>'districts', 'name'=>'Districts 7451, City 745, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4154, 'regionable_id'=>3729, 'regionable_type'=>'districts']); //Kurun
                DB::table('regions')->insert(['id'=>4155, 'parent'=>4154, 'code'=>'74511', 'type'=>'village', 'name'=>'Village 74511, Districts 7451, City 745, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42930, 'regionable_type'=>'village']); //Hurung Bunut
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42931, 'regionable_type'=>'village']); //Kurun (kuala Kurun)
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42932, 'regionable_type'=>'village']); //Penda Pilang
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42933, 'regionable_type'=>'village']); //Petak Bahandang
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42934, 'regionable_type'=>'village']); //Pilang Munduk
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42935, 'regionable_type'=>'village']); //Tanjung Riu
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42936, 'regionable_type'=>'village']); //Teluk Nyatu
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42937, 'regionable_type'=>'village']); //Tewang Pajangan
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42938, 'regionable_type'=>'village']); //Tumbang Anjir
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42939, 'regionable_type'=>'village']); //Tumbang Hakau
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42940, 'regionable_type'=>'village']); //Tumbang Lampaung/lampahung
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42941, 'regionable_type'=>'village']); //Tumbang Manyangan
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42942, 'regionable_type'=>'village']); //Tumbang Miwan
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42943, 'regionable_type'=>'village']); //Tumbang Tambirah
                DB::table('regionables')->insert(['region_id'=>4155, 'regionable_id'=>42944, 'regionable_type'=>'village']); //Tumbang Tariak
            DB::table('regions')->insert(['id'=>4156, 'parent'=>4153, 'code'=>'7455', 'type'=>'districts', 'name'=>'Districts 7455, City 745, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4156, 'regionable_id'=>3730, 'regionable_type'=>'districts']); //Tewah
            DB::table('regionables')->insert(['region_id'=>4156, 'regionable_id'=>3731, 'regionable_type'=>'districts']); //Kahayan Hulu Utara
            DB::table('regionables')->insert(['region_id'=>4156, 'regionable_id'=>3732, 'regionable_type'=>'districts']); //Miri Manasa
            DB::table('regionables')->insert(['region_id'=>4156, 'regionable_id'=>3733, 'regionable_type'=>'districts']); //Damang Batu
                DB::table('regions')->insert(['id'=>4157, 'parent'=>4156, 'code'=>'74553', 'type'=>'village', 'name'=>'Village 74553, Districts 7455, City 745, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42961, 'regionable_type'=>'village']); //Batu Tangkui
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42962, 'regionable_type'=>'village']); //Dandang
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42963, 'regionable_type'=>'village']); //Penda Rangas
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42964, 'regionable_type'=>'village']); //Takaoi
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42965, 'regionable_type'=>'village']); //Teluk Kanduri
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42966, 'regionable_type'=>'village']); //Tumbang Hamputung
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42967, 'regionable_type'=>'village']); //Tumbang Korik/kurik
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42968, 'regionable_type'=>'village']); //Tumbang Miri
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42969, 'regionable_type'=>'village']); //Tumbang Pasangon
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42970, 'regionable_type'=>'village']); //Tumbang Ponyoi
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42971, 'regionable_type'=>'village']); //Tumbang Sian
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42972, 'regionable_type'=>'village']); //Tumbang Tajungan
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42973, 'regionable_type'=>'village']); //Buntui (buntoi)
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42974, 'regionable_type'=>'village']); //Harowu
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42975, 'regionable_type'=>'village']); //Mangkuhung
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42976, 'regionable_type'=>'village']); //Rangan Hiran
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42977, 'regionable_type'=>'village']); //Tumbang Hantung
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42978, 'regionable_type'=>'village']); //Tumbang Koroi
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42979, 'regionable_type'=>'village']); //Tumbang Lapan
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42980, 'regionable_type'=>'village']); //Tumbang Manyoi
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42981, 'regionable_type'=>'village']); //Tumbang Masukih
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42982, 'regionable_type'=>'village']); //Tumbang Napoi
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42983, 'regionable_type'=>'village']); //Tumbang Siruk
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42984, 'regionable_type'=>'village']); //Karetau Rambangun
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42985, 'regionable_type'=>'village']); //Karetau Sarian
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42986, 'regionable_type'=>'village']); //Lawang Kanji
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42987, 'regionable_type'=>'village']); //Tumbang Anoi
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42988, 'regionable_type'=>'village']); //Tumbang Mahuroi
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42989, 'regionable_type'=>'village']); //Tumbang Maraya
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42990, 'regionable_type'=>'village']); //Tumbang Marikoi
                DB::table('regionables')->insert(['region_id'=>4157, 'regionable_id'=>42991, 'regionable_type'=>'village']); //Tumbang Posu
            DB::table('regions')->insert(['id'=>4158, 'parent'=>4153, 'code'=>'7456', 'type'=>'districts', 'name'=>'Districts 7456, City 745, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4158, 'regionable_id'=>3734, 'regionable_type'=>'districts']); //Rungan Hulu
            DB::table('regionables')->insert(['region_id'=>4158, 'regionable_id'=>3735, 'regionable_type'=>'districts']); //Rungan
            DB::table('regionables')->insert(['region_id'=>4158, 'regionable_id'=>3736, 'regionable_type'=>'districts']); //Rungan Barat
            DB::table('regionables')->insert(['region_id'=>4158, 'regionable_id'=>3737, 'regionable_type'=>'districts']); //Manuhing
            DB::table('regionables')->insert(['region_id'=>4158, 'regionable_id'=>3738, 'regionable_type'=>'districts']); //Manuhing Raya
                DB::table('regions')->insert(['id'=>4159, 'parent'=>4158, 'code'=>'74562', 'type'=>'village', 'name'=>'Village 74562, Districts 7456, City 745, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43025, 'regionable_type'=>'village']); //Mangkawuk
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43026, 'regionable_type'=>'village']); //Bangun Sari
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43027, 'regionable_type'=>'village']); //Belawan Mulya
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43028, 'regionable_type'=>'village']); //Bereng Belawan
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43029, 'regionable_type'=>'village']); //Bereng Jun
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43030, 'regionable_type'=>'village']); //Fajar Harapan
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43031, 'regionable_type'=>'village']); //Gohong
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43032, 'regionable_type'=>'village']); //Takaras
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43033, 'regionable_type'=>'village']); //Tangki Dahuyan
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43034, 'regionable_type'=>'village']); //Taringen
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43035, 'regionable_type'=>'village']); //Tumbang Jelemu
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43036, 'regionable_type'=>'village']); //Tumbang Sepang
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43037, 'regionable_type'=>'village']); //Tumbang Talaken
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43038, 'regionable_type'=>'village']); //Luwuk Tukau
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43039, 'regionable_type'=>'village']); //Putat Durei
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43040, 'regionable_type'=>'village']); //Tehang
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43041, 'regionable_type'=>'village']); //Tumbang Mantuhe
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43042, 'regionable_type'=>'village']); //Tumbang Oroi
                DB::table('regionables')->insert(['region_id'=>4159, 'regionable_id'=>43043, 'regionable_type'=>'village']); //Tumbang Samui
            DB::table('regions')->insert(['id'=>4160, 'parent'=>4153, 'code'=>'7457', 'type'=>'districts', 'name'=>'Districts 7457, City 745, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4160, 'regionable_id'=>3739, 'regionable_type'=>'districts']); //Mihing Raya
            DB::table('regionables')->insert(['region_id'=>4160, 'regionable_id'=>3740, 'regionable_type'=>'districts']); //Sepang (sepang Simin)
                DB::table('regions')->insert(['id'=>4161, 'parent'=>4160, 'code'=>'74571', 'type'=>'village', 'name'=>'Village 74571, Districts 7457, City 745, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43044, 'regionable_type'=>'village']); //Dahian Tambuk
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43045, 'regionable_type'=>'village']); //Kampuri
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43046, 'regionable_type'=>'village']); //Rangan Tate
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43047, 'regionable_type'=>'village']); //Tumbang Danau
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43048, 'regionable_type'=>'village']); //Tumbang Empas
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43049, 'regionable_type'=>'village']); //Tuyun
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43050, 'regionable_type'=>'village']); //Luwuk Andan
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43051, 'regionable_type'=>'village']); //Pematang Limau
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43052, 'regionable_type'=>'village']); //Sepang Kota
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43053, 'regionable_type'=>'village']); //Sepang Simin
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43054, 'regionable_type'=>'village']); //Tampelas
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43055, 'regionable_type'=>'village']); //Tanjung Karitak
                DB::table('regionables')->insert(['region_id'=>4161, 'regionable_id'=>43056, 'regionable_type'=>'village']); //Tewai Baru
        DB::table('regions')->insert(['id'=>4162, 'parent'=>3741, 'code'=>'746', 'type'=>'city', 'name'=>'City 746, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4162, 'regionable_id'=>197, 'regionable_type'=>'city']); //Lamandau regencies
            DB::table('regions')->insert(['id'=>4163, 'parent'=>4162, 'code'=>'7461', 'type'=>'districts', 'name'=>'Districts 7461, City 746, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4163, 'regionable_id'=>3676, 'regionable_type'=>'districts']); //Bulik
                DB::table('regions')->insert(['id'=>4164, 'parent'=>4163, 'code'=>'74611', 'type'=>'village', 'name'=>'Village 74611, Districts 7461, City 746, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4164, 'regionable_id'=>42387, 'regionable_type'=>'village']); //Nanga Bulik
                DB::table('regions')->insert(['id'=>4165, 'parent'=>4163, 'code'=>'74612', 'type'=>'village', 'name'=>'Village 74612, Districts 7461, City 746, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4165, 'regionable_id'=>42388, 'regionable_type'=>'village']); //Kujan
            DB::table('regions')->insert(['id'=>4166, 'parent'=>4162, 'code'=>'7466', 'type'=>'districts', 'name'=>'Districts 7466, City 746, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4166, 'regionable_id'=>3680, 'regionable_type'=>'districts']); //Lamandau
            DB::table('regionables')->insert(['region_id'=>4166, 'regionable_id'=>3681, 'regionable_type'=>'districts']); //Belantikan Raya
            DB::table('regionables')->insert(['region_id'=>4166, 'regionable_id'=>3682, 'regionable_type'=>'districts']); //Batangkawa
            DB::table('regionables')->insert(['region_id'=>4166, 'regionable_id'=>3683, 'regionable_type'=>'districts']); //Delang
                DB::table('regions')->insert(['id'=>4167, 'parent'=>4166, 'code'=>'74664', 'type'=>'village', 'name'=>'Village 74664, Districts 7466, City 746, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42441, 'regionable_type'=>'village']); //Batu Tambun
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42442, 'regionable_type'=>'village']); //Benakitan
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42443, 'regionable_type'=>'village']); //Ginih
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42444, 'regionable_type'=>'village']); //Jemuat
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42445, 'regionable_type'=>'village']); //Karang Mas
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42446, 'regionable_type'=>'village']); //Kina
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42447, 'regionable_type'=>'village']); //Kinipan
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42448, 'regionable_type'=>'village']); //Liku
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42449, 'regionable_type'=>'village']); //Mengkalang
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42450, 'regionable_type'=>'village']); //Kubung
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42451, 'regionable_type'=>'village']); //Kudangan
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42452, 'regionable_type'=>'village']); //Landau Kantu
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42453, 'regionable_type'=>'village']); //Lopus
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42454, 'regionable_type'=>'village']); //Nyalang
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42455, 'regionable_type'=>'village']); //Penyombaan
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42456, 'regionable_type'=>'village']); //Riam Penahan
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42457, 'regionable_type'=>'village']); //Riam Tinggi
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42458, 'regionable_type'=>'village']); //Sekombulan
                DB::table('regionables')->insert(['region_id'=>4167, 'regionable_id'=>42459, 'regionable_type'=>'village']); //Sepoyu
        DB::table('regions')->insert(['id'=>4168, 'parent'=>3741, 'code'=>'748', 'type'=>'city', 'name'=>'City 748, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4168, 'regionable_id'=>203, 'regionable_type'=>'city']); //Pulang Pisau regencies
            DB::table('regions')->insert(['id'=>4169, 'parent'=>4168, 'code'=>'7481', 'type'=>'districts', 'name'=>'Districts 7481, City 748, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4169, 'regionable_id'=>3741, 'regionable_type'=>'districts']); //Kahayan Hilir
            DB::table('regionables')->insert(['region_id'=>4169, 'regionable_id'=>3742, 'regionable_type'=>'districts']); //Jabiren Raya
                DB::table('regions')->insert(['id'=>4170, 'parent'=>4169, 'code'=>'74816', 'type'=>'village', 'name'=>'Village 74816, Districts 7481, City 748, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43060, 'regionable_type'=>'village']); //Mintin
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43067, 'regionable_type'=>'village']); //Garung (garong)
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43068, 'regionable_type'=>'village']); //Henda
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43069, 'regionable_type'=>'village']); //Jabiren
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43070, 'regionable_type'=>'village']); //Pilang
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43071, 'regionable_type'=>'village']); //Saka Kajang
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43072, 'regionable_type'=>'village']); //Simpur
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43073, 'regionable_type'=>'village']); //Tanjung Taruna
                DB::table('regionables')->insert(['region_id'=>4170, 'regionable_id'=>43074, 'regionable_type'=>'village']); //Tumbang Nusa
            DB::table('regions')->insert(['id'=>4171, 'parent'=>4168, 'code'=>'7482', 'type'=>'districts', 'name'=>'Districts 7482, City 748, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4171, 'regionable_id'=>3741, 'regionable_type'=>'districts']); //Kahayan Hilir
                DB::table('regions')->insert(['id'=>4172, 'parent'=>4171, 'code'=>'74821', 'type'=>'village', 'name'=>'Village 74821, Districts 7482, City 748, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4172, 'regionable_id'=>43061, 'regionable_type'=>'village']); //Hanjak Maju
            DB::table('regions')->insert(['id'=>4173, 'parent'=>4168, 'code'=>'7483', 'type'=>'districts', 'name'=>'Districts 7483, City 748, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4173, 'regionable_id'=>3741, 'regionable_type'=>'districts']); //Kahayan Hilir
                DB::table('regions')->insert(['id'=>4174, 'parent'=>4173, 'code'=>'74831', 'type'=>'village', 'name'=>'Village 74831, Districts 7483, City 748, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4174, 'regionable_id'=>43062, 'regionable_type'=>'village']); //Bereng
            DB::table('regions')->insert(['id'=>4175, 'parent'=>4168, 'code'=>'7484', 'type'=>'districts', 'name'=>'Districts 7484, City 748, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4175, 'regionable_id'=>3741, 'regionable_type'=>'districts']); //Kahayan Hilir
                DB::table('regions')->insert(['id'=>4176, 'parent'=>4175, 'code'=>'74841', 'type'=>'village', 'name'=>'Village 74841, Districts 7484, City 748, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4176, 'regionable_id'=>43063, 'regionable_type'=>'village']); //Kahayan Hilir
            DB::table('regions')->insert(['id'=>4177, 'parent'=>4168, 'code'=>'7486', 'type'=>'districts', 'name'=>'Districts 7486, City 748, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4177, 'regionable_id'=>3741, 'regionable_type'=>'districts']); //Kahayan Hilir
            DB::table('regionables')->insert(['region_id'=>4177, 'regionable_id'=>3743, 'regionable_type'=>'districts']); //Kahayan Tengah
            DB::table('regionables')->insert(['region_id'=>4177, 'regionable_id'=>3744, 'regionable_type'=>'districts']); //Banama Tingang
                DB::table('regions')->insert(['id'=>4178, 'parent'=>4177, 'code'=>'74863', 'type'=>'village', 'name'=>'Village 74863, Districts 7486, City 748, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43089, 'regionable_type'=>'village']); //Bawan
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43090, 'regionable_type'=>'village']); //Guha
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43091, 'regionable_type'=>'village']); //Hanua
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43092, 'regionable_type'=>'village']); //Hurung
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43093, 'regionable_type'=>'village']); //Kasali Baru
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43094, 'regionable_type'=>'village']); //Lawang Uru
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43095, 'regionable_type'=>'village']); //Manen Kaleka
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43096, 'regionable_type'=>'village']); //Manen Paduran
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43097, 'regionable_type'=>'village']); //Pahawan
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43098, 'regionable_type'=>'village']); //Pandawei
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43099, 'regionable_type'=>'village']); //Pangi
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43100, 'regionable_type'=>'village']); //Ramang
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43101, 'regionable_type'=>'village']); //Tambak
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43102, 'regionable_type'=>'village']); //Tangkahen
                DB::table('regionables')->insert(['region_id'=>4178, 'regionable_id'=>43103, 'regionable_type'=>'village']); //Tumbang Tarusan
            DB::table('regions')->insert(['id'=>4179, 'parent'=>4168, 'code'=>'7487', 'type'=>'districts', 'name'=>'Districts 7487, City 748, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4179, 'regionable_id'=>3745, 'regionable_type'=>'districts']); //Pandih Batu
            DB::table('regionables')->insert(['region_id'=>4179, 'regionable_id'=>3746, 'regionable_type'=>'districts']); //Kahayan Kuala
            DB::table('regionables')->insert(['region_id'=>4179, 'regionable_id'=>3747, 'regionable_type'=>'districts']); //Maliku
            DB::table('regionables')->insert(['region_id'=>4179, 'regionable_id'=>3748, 'regionable_type'=>'districts']); //Sebangau Kuala
                DB::table('regions')->insert(['id'=>4180, 'parent'=>4179, 'code'=>'74874', 'type'=>'village', 'name'=>'Village 74874, Districts 7487, City 748, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4180, 'regionable_id'=>43148, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>4180, 'regionable_id'=>43149, 'regionable_type'=>'village']); //Paduran Sabangau
                DB::table('regionables')->insert(['region_id'=>4180, 'regionable_id'=>43150, 'regionable_type'=>'village']); //Panduran Mulya
                DB::table('regionables')->insert(['region_id'=>4180, 'regionable_id'=>43151, 'regionable_type'=>'village']); //Sebangau Jaya
                DB::table('regionables')->insert(['region_id'=>4180, 'regionable_id'=>43152, 'regionable_type'=>'village']); //Sebangau Mulya
                DB::table('regionables')->insert(['region_id'=>4180, 'regionable_id'=>43153, 'regionable_type'=>'village']); //Sebangau Permai
                DB::table('regionables')->insert(['region_id'=>4180, 'regionable_id'=>43154, 'regionable_type'=>'village']); //Sei/sungai Bakau
                DB::table('regionables')->insert(['region_id'=>4180, 'regionable_id'=>43155, 'regionable_type'=>'village']); //Sei/sungai Hambawang

        //Kalimantan Timur
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>15, 'regionable_type'=>'province']); //Kalimantan Timur
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>204, 'regionable_type'=>'city']); //Samarinda city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>205, 'regionable_type'=>'city']); //Kutai Kartanegara regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>206, 'regionable_type'=>'city']); //Bontang city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>207, 'regionable_type'=>'city']); //Kutai Timur regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>208, 'regionable_type'=>'city']); //Kutai Barat regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>209, 'regionable_type'=>'city']); //Balikpapan city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>210, 'regionable_type'=>'city']); //Penajam Paser Utara regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>211, 'regionable_type'=>'city']); //Paser regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>212, 'regionable_type'=>'city']); //Berau regencies

        DB::table('regions')->insert(['id'=>4181, 'parent'=>3741, 'code'=>'751', 'type'=>'city', 'name'=>'City 751, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4181, 'regionable_id'=>204, 'regionable_type'=>'city']); //Samarinda city
            DB::table('regions')->insert(['id'=>4182, 'parent'=>4181, 'code'=>'7511', 'type'=>'districts', 'name'=>'Districts 7511, City 751, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4182, 'regionable_id'=>3749, 'regionable_type'=>'districts']); //Samarinda Kota
            DB::table('regionables')->insert(['region_id'=>4182, 'regionable_id'=>3750, 'regionable_type'=>'districts']); //Sambutan
            DB::table('regionables')->insert(['region_id'=>4182, 'regionable_id'=>3751, 'regionable_type'=>'districts']); //Samarinda Ilir
            DB::table('regionables')->insert(['region_id'=>4182, 'regionable_id'=>3752, 'regionable_type'=>'districts']); //Sungai Pinang
            DB::table('regionables')->insert(['region_id'=>4182, 'regionable_id'=>3753, 'regionable_type'=>'districts']); //Samarinda Utara
                DB::table('regions')->insert(['id'=>4183, 'parent'=>4182, 'code'=>'75118', 'type'=>'village', 'name'=>'Village 75118, Districts 7511, City 751, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4183, 'regionable_id'=>43176, 'regionable_type'=>'village']); //Lempake
                DB::table('regionables')->insert(['region_id'=>4183, 'regionable_id'=>43177, 'regionable_type'=>'village']); //Sei/sungai Siring
                DB::table('regions')->insert(['id'=>4184, 'parent'=>4182, 'code'=>'75119', 'type'=>'village', 'name'=>'Village 75119, Districts 7511, City 751, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4184, 'regionable_id'=>43172, 'regionable_type'=>'village']); //Bandara
                DB::table('regionables')->insert(['region_id'=>4184, 'regionable_id'=>43173, 'regionable_type'=>'village']); //Gunung Lingai
                DB::table('regionables')->insert(['region_id'=>4184, 'regionable_id'=>43174, 'regionable_type'=>'village']); //Mugirejo
                DB::table('regionables')->insert(['region_id'=>4184, 'regionable_id'=>43175, 'regionable_type'=>'village']); //Temindung Permai
                DB::table('regionables')->insert(['region_id'=>4184, 'regionable_id'=>43178, 'regionable_type'=>'village']); //Sempaja Selatan
                DB::table('regionables')->insert(['region_id'=>4184, 'regionable_id'=>43179, 'regionable_type'=>'village']); //Sempaja Utara
                DB::table('regionables')->insert(['region_id'=>4184, 'regionable_id'=>43180, 'regionable_type'=>'village']); //Tanah Merah
            DB::table('regions')->insert(['id'=>4185, 'parent'=>4181, 'code'=>'7512', 'type'=>'districts', 'name'=>'Districts 7512, City 751, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4185, 'regionable_id'=>3749, 'regionable_type'=>'districts']); //Samarinda Kota
            DB::table('regionables')->insert(['region_id'=>4185, 'regionable_id'=>3754, 'regionable_type'=>'districts']); //Samarinda Ulu
            DB::table('regionables')->insert(['region_id'=>4185, 'regionable_id'=>3755, 'regionable_type'=>'districts']); //Sungai Kunjang
                DB::table('regions')->insert(['id'=>4186, 'parent'=>4185, 'code'=>'75125', 'type'=>'village', 'name'=>'Village 75125, Districts 7512, City 751, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4186, 'regionable_id'=>43189, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>4186, 'regionable_id'=>43190, 'regionable_type'=>'village']); //Lok Bahu
                DB::table('regions')->insert(['id'=>4187, 'parent'=>4185, 'code'=>'75126', 'type'=>'village', 'name'=>'Village 75126, Districts 7512, City 751, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4187, 'regionable_id'=>43191, 'regionable_type'=>'village']); //Karang Asam Ilir
                DB::table('regionables')->insert(['region_id'=>4187, 'regionable_id'=>43192, 'regionable_type'=>'village']); //Karang Asam Ulu
                DB::table('regionables')->insert(['region_id'=>4187, 'regionable_id'=>43193, 'regionable_type'=>'village']); //Loa Bakung
                DB::table('regionables')->insert(['region_id'=>4187, 'regionable_id'=>43194, 'regionable_type'=>'village']); //Loa Buah
                DB::table('regions')->insert(['id'=>4188, 'parent'=>4185, 'code'=>'75127', 'type'=>'village', 'name'=>'Village 75127, Districts 7512, City 751, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4188, 'regionable_id'=>43195, 'regionable_type'=>'village']); //Teluk Lerong Ulu
            DB::table('regions')->insert(['id'=>4189, 'parent'=>4181, 'code'=>'7513', 'type'=>'districts', 'name'=>'Districts 7513, City 751, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4189, 'regionable_id'=>3756, 'regionable_type'=>'districts']); //Samarinda Seberang
            DB::table('regionables')->insert(['region_id'=>4189, 'regionable_id'=>3757, 'regionable_type'=>'districts']); //Loa Janan Ilir
                DB::table('regions')->insert(['id'=>4190, 'parent'=>4189, 'code'=>'75131', 'type'=>'village', 'name'=>'Village 75131, Districts 7513, City 751, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4190, 'regionable_id'=>43196, 'regionable_type'=>'village']); //Baqa/baka/rapak Dalam
                DB::table('regionables')->insert(['region_id'=>4190, 'regionable_id'=>43197, 'regionable_type'=>'village']); //Sei/sungai Keledang
                DB::table('regionables')->insert(['region_id'=>4190, 'regionable_id'=>43199, 'regionable_type'=>'village']); //Harapan Baru
                DB::table('regionables')->insert(['region_id'=>4190, 'regionable_id'=>43200, 'regionable_type'=>'village']); //Rapak Dalam
                DB::table('regionables')->insert(['region_id'=>4190, 'regionable_id'=>43201, 'regionable_type'=>'village']); //Sengkotek
                DB::table('regionables')->insert(['region_id'=>4190, 'regionable_id'=>43202, 'regionable_type'=>'village']); //Simpang Tiga (loa Janan Ilir)
                DB::table('regionables')->insert(['region_id'=>4190, 'regionable_id'=>43203, 'regionable_type'=>'village']); //Tani Aman
        DB::table('regions')->insert(['id'=>4191, 'parent'=>3741, 'code'=>'752', 'type'=>'city', 'name'=>'City 752, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4191, 'regionable_id'=>204, 'regionable_type'=>'city']); //Samarinda city
        DB::table('regionables')->insert(['region_id'=>4191, 'regionable_id'=>205, 'regionable_type'=>'city']); //Kutai Kartanegara regencies
            DB::table('regions')->insert(['id'=>4192, 'parent'=>4191, 'code'=>'7525', 'type'=>'districts', 'name'=>'Districts 7525, City 752, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4192, 'regionable_id'=>3758, 'regionable_type'=>'districts']); //Palaran
            DB::table('regionables')->insert(['region_id'=>4192, 'regionable_id'=>3759, 'regionable_type'=>'districts']); //Sanga-sanga
                DB::table('regions')->insert(['id'=>4193, 'parent'=>4192, 'code'=>'75251', 'type'=>'village', 'name'=>'Village 75251, Districts 7525, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4193, 'regionable_id'=>43209, 'regionable_type'=>'village']); //Jawa
                DB::table('regionables')->insert(['region_id'=>4193, 'regionable_id'=>43210, 'regionable_type'=>'village']); //Sanga-sanga Muara
                DB::table('regionables')->insert(['region_id'=>4193, 'regionable_id'=>43211, 'regionable_type'=>'village']); //Sarijaya
                DB::table('regions')->insert(['id'=>4194, 'parent'=>4192, 'code'=>'75254', 'type'=>'village', 'name'=>'Village 75254, Districts 7525, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4194, 'regionable_id'=>43212, 'regionable_type'=>'village']); //Sanga-sanga Dalam
                DB::table('regions')->insert(['id'=>4195, 'parent'=>4192, 'code'=>'75256', 'type'=>'village', 'name'=>'Village 75256, Districts 7525, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4195, 'regionable_id'=>43213, 'regionable_type'=>'village']); //Pendingin
            DB::table('regions')->insert(['id'=>4196, 'parent'=>4191, 'code'=>'7526', 'type'=>'districts', 'name'=>'Districts 7526, City 752, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4196, 'regionable_id'=>3760, 'regionable_type'=>'districts']); //Muara Jawa
                DB::table('regions')->insert(['id'=>4197, 'parent'=>4196, 'code'=>'75261', 'type'=>'village', 'name'=>'Village 75261, Districts 7526, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4197, 'regionable_id'=>43214, 'regionable_type'=>'village']); //Muara Jawa Ulu
                DB::table('regions')->insert(['id'=>4198, 'parent'=>4196, 'code'=>'75262', 'type'=>'village', 'name'=>'Village 75262, Districts 7526, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4198, 'regionable_id'=>43215, 'regionable_type'=>'village']); //Teluk Dalam
                DB::table('regions')->insert(['id'=>4199, 'parent'=>4196, 'code'=>'75263', 'type'=>'village', 'name'=>'Village 75263, Districts 7526, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4199, 'regionable_id'=>43216, 'regionable_type'=>'village']); //Muara Jawa Ilir
                DB::table('regionables')->insert(['region_id'=>4199, 'regionable_id'=>43217, 'regionable_type'=>'village']); //Muara Jawa Pesisir
                DB::table('regions')->insert(['id'=>4200, 'parent'=>4196, 'code'=>'75264', 'type'=>'village', 'name'=>'Village 75264, Districts 7526, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4200, 'regionable_id'=>43218, 'regionable_type'=>'village']); //Muara Jawa Tengah
                DB::table('regions')->insert(['id'=>4201, 'parent'=>4196, 'code'=>'75265', 'type'=>'village', 'name'=>'Village 75265, Districts 7526, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4201, 'regionable_id'=>43219, 'regionable_type'=>'village']); //Dondang
                DB::table('regions')->insert(['id'=>4202, 'parent'=>4196, 'code'=>'75266', 'type'=>'village', 'name'=>'Village 75266, Districts 7526, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4202, 'regionable_id'=>43220, 'regionable_type'=>'village']); //Tamapole
                DB::table('regions')->insert(['id'=>4203, 'parent'=>4196, 'code'=>'75267', 'type'=>'village', 'name'=>'Village 75267, Districts 7526, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4203, 'regionable_id'=>43221, 'regionable_type'=>'village']); //Muara Kembang
            DB::table('regions')->insert(['id'=>4204, 'parent'=>4191, 'code'=>'7527', 'type'=>'districts', 'name'=>'Districts 7527, City 752, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4204, 'regionable_id'=>3761, 'regionable_type'=>'districts']); //Samboja (semboja)
                DB::table('regions')->insert(['id'=>4205, 'parent'=>4204, 'code'=>'75271', 'type'=>'village', 'name'=>'Village 75271, Districts 7527, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43222, 'regionable_type'=>'village']); //Argosari
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43223, 'regionable_type'=>'village']); //Beringin Agung
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43224, 'regionable_type'=>'village']); //Bukit Merdeka
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43225, 'regionable_type'=>'village']); //Bukit Raya
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43226, 'regionable_type'=>'village']); //Karya Jaya
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43227, 'regionable_type'=>'village']); //Karya Merdeka
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43228, 'regionable_type'=>'village']); //Salok Api Darat
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43229, 'regionable_type'=>'village']); //Salok Api Laut
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43230, 'regionable_type'=>'village']); //Sanipah
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43231, 'regionable_type'=>'village']); //Sei/sungai Merdeka
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43232, 'regionable_type'=>'village']); //Sei/sungai Seluang
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43233, 'regionable_type'=>'village']); //Tani Bakti
                DB::table('regionables')->insert(['region_id'=>4205, 'regionable_id'=>43234, 'regionable_type'=>'village']); //Teluk Pemedas
                DB::table('regions')->insert(['id'=>4206, 'parent'=>4204, 'code'=>'75273', 'type'=>'village', 'name'=>'Village 75273, Districts 7527, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4206, 'regionable_id'=>43235, 'regionable_type'=>'village']); //Margomulyo
                DB::table('regions')->insert(['id'=>4207, 'parent'=>4204, 'code'=>'75274', 'type'=>'village', 'name'=>'Village 75274, Districts 7527, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4207, 'regionable_id'=>43236, 'regionable_type'=>'village']); //Ambarawang Darat
                DB::table('regionables')->insert(['region_id'=>4207, 'regionable_id'=>43237, 'regionable_type'=>'village']); //Ambarawang Laut
                DB::table('regions')->insert(['id'=>4208, 'parent'=>4204, 'code'=>'75276', 'type'=>'village', 'name'=>'Village 75276, Districts 7527, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4208, 'regionable_id'=>43238, 'regionable_type'=>'village']); //Handil Baru Darat
                DB::table('regionables')->insert(['region_id'=>4208, 'regionable_id'=>43239, 'regionable_type'=>'village']); //Kampung Lama
                DB::table('regionables')->insert(['region_id'=>4208, 'regionable_id'=>43240, 'regionable_type'=>'village']); //Tanjung Harapan
                DB::table('regionables')->insert(['region_id'=>4208, 'regionable_id'=>43241, 'regionable_type'=>'village']); //Wonotirto
                DB::table('regions')->insert(['id'=>4209, 'parent'=>4204, 'code'=>'75277', 'type'=>'village', 'name'=>'Village 75277, Districts 7527, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4209, 'regionable_id'=>43242, 'regionable_type'=>'village']); //Samboja Kuala
                DB::table('regions')->insert(['id'=>4210, 'parent'=>4204, 'code'=>'75279', 'type'=>'village', 'name'=>'Village 75279, Districts 7527, City 752, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4210, 'regionable_id'=>43243, 'regionable_type'=>'village']); //Handil Baru
                DB::table('regionables')->insert(['region_id'=>4210, 'regionable_id'=>43244, 'regionable_type'=>'village']); //Muara Sembilang
        DB::table('regions')->insert(['id'=>4211, 'parent'=>3741, 'code'=>'753', 'type'=>'city', 'name'=>'City 753, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4211, 'regionable_id'=>205, 'regionable_type'=>'city']); //Kutai Kartanegara regencies
        DB::table('regionables')->insert(['region_id'=>4211, 'regionable_id'=>206, 'regionable_type'=>'city']); //Bontang city
            DB::table('regions')->insert(['id'=>4212, 'parent'=>4211, 'code'=>'7531', 'type'=>'districts', 'name'=>'Districts 7531, City 753, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4212, 'regionable_id'=>3777, 'regionable_type'=>'districts']); //Bontang Utara
            DB::table('regionables')->insert(['region_id'=>4212, 'regionable_id'=>3778, 'regionable_type'=>'districts']); //Bontang Barat
                DB::table('regions')->insert(['id'=>4213, 'parent'=>4212, 'code'=>'75313', 'type'=>'village', 'name'=>'Village 75313, Districts 7531, City 753, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4213, 'regionable_id'=>43452, 'regionable_type'=>'village']); //Belimbing
            DB::table('regions')->insert(['id'=>4214, 'parent'=>4211, 'code'=>'7532', 'type'=>'districts', 'name'=>'Districts 7532, City 753, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4214, 'regionable_id'=>3779, 'regionable_type'=>'districts']); //Bontang Selatan
                DB::table('regions')->insert(['id'=>4215, 'parent'=>4214, 'code'=>'75321', 'type'=>'village', 'name'=>'Village 75321, Districts 7532, City 753, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4215, 'regionable_id'=>43455, 'regionable_type'=>'village']); //Tanjung Laut
                DB::table('regions')->insert(['id'=>4216, 'parent'=>4214, 'code'=>'75324', 'type'=>'village', 'name'=>'Village 75324, Districts 7532, City 753, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4216, 'regionable_id'=>43456, 'regionable_type'=>'village']); //Satimpo
                DB::table('regions')->insert(['id'=>4217, 'parent'=>4214, 'code'=>'75325', 'type'=>'village', 'name'=>'Village 75325, Districts 7532, City 753, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4217, 'regionable_id'=>43457, 'regionable_type'=>'village']); //Berebas Pantai (berbas Pantai)
                DB::table('regionables')->insert(['region_id'=>4217, 'regionable_id'=>43458, 'regionable_type'=>'village']); //Berebas Tengah (berbas Tengah)
                DB::table('regionables')->insert(['region_id'=>4217, 'regionable_id'=>43459, 'regionable_type'=>'village']); //Bontang Lestari
                DB::table('regionables')->insert(['region_id'=>4217, 'regionable_id'=>43460, 'regionable_type'=>'village']); //Tanjung Laut Indah
            DB::table('regions')->insert(['id'=>4218, 'parent'=>4211, 'code'=>'7538', 'type'=>'districts', 'name'=>'Districts 7538, City 753, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4218, 'regionable_id'=>3762, 'regionable_type'=>'districts']); //Anggana
            DB::table('regionables')->insert(['region_id'=>4218, 'regionable_id'=>3763, 'regionable_type'=>'districts']); //Muara Badak
            DB::table('regionables')->insert(['region_id'=>4218, 'regionable_id'=>3764, 'regionable_type'=>'districts']); //Marang Kayu
            DB::table('regionables')->insert(['region_id'=>4218, 'regionable_id'=>3778, 'regionable_type'=>'districts']); //Bontang Barat
                DB::table('regions')->insert(['id'=>4219, 'parent'=>4218, 'code'=>'75383', 'type'=>'village', 'name'=>'Village 75383, Districts 7538, City 753, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4219, 'regionable_id'=>43453, 'regionable_type'=>'village']); //Kanaan
                DB::table('regionables')->insert(['region_id'=>4219, 'regionable_id'=>43454, 'regionable_type'=>'village']); //Telihan (gunung Telihan)
        DB::table('regions')->insert(['id'=>4220, 'parent'=>3741, 'code'=>'755', 'type'=>'city', 'name'=>'City 755, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4220, 'regionable_id'=>205, 'regionable_type'=>'city']); //Kutai Kartanegara regencies
        DB::table('regionables')->insert(['region_id'=>4220, 'regionable_id'=>207, 'regionable_type'=>'city']); //Kutai Timur regencies
        DB::table('regionables')->insert(['region_id'=>4220, 'regionable_id'=>208, 'regionable_type'=>'city']); //Kutai Barat regencies
            DB::table('regions')->insert(['id'=>4221, 'parent'=>4220, 'code'=>'7557', 'type'=>'districts', 'name'=>'Districts 7557, City 755, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4221, 'regionable_id'=>3775, 'regionable_type'=>'districts']); //Loa Kulu
            DB::table('regionables')->insert(['region_id'=>4221, 'regionable_id'=>3776, 'regionable_type'=>'districts']); //Tenggarong Seberang
            DB::table('regionables')->insert(['region_id'=>4221, 'regionable_id'=>3798, 'regionable_type'=>'districts']); //Linggang Bigung
                DB::table('regions')->insert(['id'=>4222, 'parent'=>4221, 'code'=>'75576', 'type'=>'village', 'name'=>'Village 75576, Districts 7557, City 755, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43596, 'regionable_type'=>'village']); //Bangun Sari
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43597, 'regionable_type'=>'village']); //Bigung Baru
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43598, 'regionable_type'=>'village']); //Linggang Amer
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43599, 'regionable_type'=>'village']); //Linggang Bigung
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43600, 'regionable_type'=>'village']); //Linggang Kebut
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43601, 'regionable_type'=>'village']); //Linggang Mapan
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43602, 'regionable_type'=>'village']); //Linggang Melapeh
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43603, 'regionable_type'=>'village']); //Linggang Mencelew
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43604, 'regionable_type'=>'village']); //Melapeh Baru
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43605, 'regionable_type'=>'village']); //Purwadadi
                DB::table('regionables')->insert(['region_id'=>4222, 'regionable_id'=>43606, 'regionable_type'=>'village']); //Tutuh (tutung)
        DB::table('regions')->insert(['id'=>4223, 'parent'=>3741, 'code'=>'756', 'type'=>'city', 'name'=>'City 756, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4223, 'regionable_id'=>207, 'regionable_type'=>'city']); //Kutai Timur regencies
            DB::table('regions')->insert(['id'=>4224, 'parent'=>4223, 'code'=>'7561', 'type'=>'districts', 'name'=>'Districts 7561, City 756, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4224, 'regionable_id'=>3784, 'regionable_type'=>'districts']); //Kaliorang
            DB::table('regionables')->insert(['region_id'=>4224, 'regionable_id'=>3785, 'regionable_type'=>'districts']); //Bengalon
            DB::table('regionables')->insert(['region_id'=>4224, 'regionable_id'=>3786, 'regionable_type'=>'districts']); //Kaubun
                DB::table('regions')->insert(['id'=>4225, 'parent'=>4224, 'code'=>'75619', 'type'=>'village', 'name'=>'Village 75619, Districts 7561, City 756, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4225, 'regionable_id'=>43507, 'regionable_type'=>'village']); //Bukit Permata
                DB::table('regionables')->insert(['region_id'=>4225, 'regionable_id'=>43508, 'regionable_type'=>'village']); //Bumi Etam
                DB::table('regionables')->insert(['region_id'=>4225, 'regionable_id'=>43509, 'regionable_type'=>'village']); //Bumi Jaya
                DB::table('regionables')->insert(['region_id'=>4225, 'regionable_id'=>43510, 'regionable_type'=>'village']); //Bumi Rapak
                DB::table('regionables')->insert(['region_id'=>4225, 'regionable_id'=>43511, 'regionable_type'=>'village']); //Cipta Graha
                DB::table('regionables')->insert(['region_id'=>4225, 'regionable_id'=>43512, 'regionable_type'=>'village']); //Kadungan Jaya
                DB::table('regionables')->insert(['region_id'=>4225, 'regionable_id'=>43513, 'regionable_type'=>'village']); //Mata Air
                DB::table('regionables')->insert(['region_id'=>4225, 'regionable_id'=>43514, 'regionable_type'=>'village']); //Pengadan Baru
            DB::table('regions')->insert(['id'=>4226, 'parent'=>4223, 'code'=>'7565', 'type'=>'districts', 'name'=>'Districts 7565, City 756, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4226, 'regionable_id'=>3782, 'regionable_type'=>'districts']); //Muara Ancalong
            DB::table('regionables')->insert(['region_id'=>4226, 'regionable_id'=>3787, 'regionable_type'=>'districts']); //Muara Bengkal
            DB::table('regionables')->insert(['region_id'=>4226, 'regionable_id'=>3788, 'regionable_type'=>'districts']); //Batu Ampar
            DB::table('regionables')->insert(['region_id'=>4226, 'regionable_id'=>3789, 'regionable_type'=>'districts']); //Long Mesangat (mesengat)
            DB::table('regionables')->insert(['region_id'=>4226, 'regionable_id'=>3790, 'regionable_type'=>'districts']); //Muara Wahau
                DB::table('regions')->insert(['id'=>4227, 'parent'=>4226, 'code'=>'75655', 'type'=>'village', 'name'=>'Village 75655, Districts 7565, City 756, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43535, 'regionable_type'=>'village']); //Benhes
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43536, 'regionable_type'=>'village']); //Dabeq
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43537, 'regionable_type'=>'village']); //Diaq Lay
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43538, 'regionable_type'=>'village']); //Jak Luay
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43539, 'regionable_type'=>'village']); //Karya Bakti
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43540, 'regionable_type'=>'village']); //Long Wehea
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43541, 'regionable_type'=>'village']); //Muara Wahau
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43542, 'regionable_type'=>'village']); //Nehesliah Bing
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43543, 'regionable_type'=>'village']); //Wahau Baru
                DB::table('regionables')->insert(['region_id'=>4227, 'regionable_id'=>43544, 'regionable_type'=>'village']); //Wana Sari
            DB::table('regions')->insert(['id'=>4228, 'parent'=>4223, 'code'=>'7568', 'type'=>'districts', 'name'=>'Districts 7568, City 756, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4228, 'regionable_id'=>3791, 'regionable_type'=>'districts']); //Teluk Pandan
            DB::table('regionables')->insert(['region_id'=>4228, 'regionable_id'=>3792, 'regionable_type'=>'districts']); //Rantau Pulung
            DB::table('regionables')->insert(['region_id'=>4228, 'regionable_id'=>3793, 'regionable_type'=>'districts']); //Sangatta Selatan
            DB::table('regionables')->insert(['region_id'=>4228, 'regionable_id'=>3794, 'regionable_type'=>'districts']); //Sangatta Utara
            DB::table('regionables')->insert(['region_id'=>4228, 'regionable_id'=>3795, 'regionable_type'=>'districts']); //Karangan
            DB::table('regionables')->insert(['region_id'=>4228, 'regionable_id'=>3796, 'regionable_type'=>'districts']); //Sangkulirang
            DB::table('regionables')->insert(['region_id'=>4228, 'regionable_id'=>3797, 'regionable_type'=>'districts']); //Sandaran
                DB::table('regions')->insert(['id'=>4229, 'parent'=>4228, 'code'=>'75685', 'type'=>'village', 'name'=>'Village 75685, Districts 7568, City 756, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4229, 'regionable_id'=>43589, 'regionable_type'=>'village']); //Manubar
                DB::table('regionables')->insert(['region_id'=>4229, 'regionable_id'=>43590, 'regionable_type'=>'village']); //Marukangan
                DB::table('regionables')->insert(['region_id'=>4229, 'regionable_id'=>43591, 'regionable_type'=>'village']); //Sandaran
                DB::table('regionables')->insert(['region_id'=>4229, 'regionable_id'=>43592, 'regionable_type'=>'village']); //Susuk Dalam
                DB::table('regionables')->insert(['region_id'=>4229, 'regionable_id'=>43593, 'regionable_type'=>'village']); //Susuk Luar
                DB::table('regionables')->insert(['region_id'=>4229, 'regionable_id'=>43594, 'regionable_type'=>'village']); //Tadoan
                DB::table('regionables')->insert(['region_id'=>4229, 'regionable_id'=>43595, 'regionable_type'=>'village']); //Tanjung Mangkalihat
        DB::table('regions')->insert(['id'=>4230, 'parent'=>3741, 'code'=>'757', 'type'=>'city', 'name'=>'City 757, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4230, 'regionable_id'=>208, 'regionable_type'=>'city']); //Kutai Barat regencies
            DB::table('regions')->insert(['id'=>4231, 'parent'=>4230, 'code'=>'7576', 'type'=>'districts', 'name'=>'Districts 7576, City 757, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3799, 'regionable_type'=>'districts']); //Penyinggahan
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3800, 'regionable_type'=>'districts']); //Melak
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3801, 'regionable_type'=>'districts']); //Manor Bulatin (mook Manaar Bulatn)
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3802, 'regionable_type'=>'districts']); //Sekolaq Darat
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3803, 'regionable_type'=>'districts']); //Long Iram
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3804, 'regionable_type'=>'districts']); //Tering
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3805, 'regionable_type'=>'districts']); //Long Bagun
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3806, 'regionable_type'=>'districts']); //Long Pahangai
            DB::table('regionables')->insert(['region_id'=>4231, 'regionable_id'=>3807, 'regionable_type'=>'districts']); //Long Apari
                DB::table('regions')->insert(['id'=>4232, 'parent'=>4231, 'code'=>'75769', 'type'=>'village', 'name'=>'Village 75769, Districts 7576, City 757, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43689, 'regionable_type'=>'village']); //Long Apari
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43690, 'regionable_type'=>'village']); //Long Kerioq/keriok
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43691, 'regionable_type'=>'village']); //Long Penaneh Dua
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43692, 'regionable_type'=>'village']); //Long Penaneh Satu
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43693, 'regionable_type'=>'village']); //Long Penaneh Tiga
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43694, 'regionable_type'=>'village']); //Naha Buan
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43695, 'regionable_type'=>'village']); //Noha Silat
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43696, 'regionable_type'=>'village']); //Noha Tifab (naha Tifab)
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43697, 'regionable_type'=>'village']); //Tiong Buu
                DB::table('regionables')->insert(['region_id'=>4232, 'regionable_id'=>43698, 'regionable_type'=>'village']); //Tiong Ohang
            DB::table('regions')->insert(['id'=>4233, 'parent'=>4230, 'code'=>'7577', 'type'=>'districts', 'name'=>'Districts 7577, City 757, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3801, 'regionable_type'=>'districts']); //Manor Bulatin (mook Manaar Bulatn)
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3808, 'regionable_type'=>'districts']); //Bongan
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3809, 'regionable_type'=>'districts']); //Jempang
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3810, 'regionable_type'=>'districts']); //Siluq Ngurai
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3811, 'regionable_type'=>'districts']); //Muara Pahu
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3812, 'regionable_type'=>'districts']); //Muara Lawa
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3813, 'regionable_type'=>'districts']); //Barong Tongkok
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3814, 'regionable_type'=>'districts']); //Nyuatan
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3815, 'regionable_type'=>'districts']); //Damai
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3816, 'regionable_type'=>'districts']); //Bentian Besar
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3817, 'regionable_type'=>'districts']); //Laham
            DB::table('regionables')->insert(['region_id'=>4233, 'regionable_id'=>3818, 'regionable_type'=>'districts']); //Long Hubung
                DB::table('regions')->insert(['id'=>4234, 'parent'=>4233, 'code'=>'75779', 'type'=>'village', 'name'=>'Village 75779, Districts 7577, City 757, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43819, 'regionable_type'=>'village']); //Danum Paroy/paroi
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43820, 'regionable_type'=>'village']); //Laham
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43821, 'regionable_type'=>'village']); //Long Gelawang
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43822, 'regionable_type'=>'village']); //Muara Ratah
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43823, 'regionable_type'=>'village']); //Nyaribungan
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43824, 'regionable_type'=>'village']); //Datah Bilang Baru
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43825, 'regionable_type'=>'village']); //Datah Bilang Ilir
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43826, 'regionable_type'=>'village']); //Datah Bilang Ulu
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43827, 'regionable_type'=>'village']); //Long Hubung
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43828, 'regionable_type'=>'village']); //Lutan
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43829, 'regionable_type'=>'village']); //Mata Libaq
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43830, 'regionable_type'=>'village']); //Memahak Teboq
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43831, 'regionable_type'=>'village']); //Sirau
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43832, 'regionable_type'=>'village']); //Tripati Makmur
                DB::table('regionables')->insert(['region_id'=>4234, 'regionable_id'=>43833, 'regionable_type'=>'village']); //Wana Pariq
        DB::table('regions')->insert(['id'=>4235, 'parent'=>3741, 'code'=>'761', 'type'=>'city', 'name'=>'City 761, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4235, 'regionable_id'=>205, 'regionable_type'=>'city']); //Kutai Kartanegara regencies
        DB::table('regionables')->insert(['region_id'=>4235, 'regionable_id'=>209, 'regionable_type'=>'city']); //Balikpapan city
        DB::table('regionables')->insert(['region_id'=>4235, 'regionable_id'=>210, 'regionable_type'=>'city']); //Penajam Paser Utara regencies
            DB::table('regions')->insert(['id'=>4236, 'parent'=>4235, 'code'=>'7614', 'type'=>'districts', 'name'=>'Districts 7614, City 761, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4236, 'regionable_id'=>3825, 'regionable_type'=>'districts']); //Penajam
            DB::table('regionables')->insert(['region_id'=>4236, 'regionable_id'=>3826, 'regionable_type'=>'districts']); //Sepaku
                DB::table('regions')->insert(['id'=>4237, 'parent'=>4236, 'code'=>'76146', 'type'=>'village', 'name'=>'Village 76146, Districts 7614, City 761, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4237, 'regionable_id'=>43889, 'regionable_type'=>'village']); //Jenebora
                DB::table('regionables')->insert(['region_id'=>4237, 'regionable_id'=>43890, 'regionable_type'=>'village']); //Pantai Lango
                DB::table('regionables')->insert(['region_id'=>4237, 'regionable_id'=>43891, 'regionable_type'=>'village']); //Maridan
                DB::table('regions')->insert(['id'=>4238, 'parent'=>4236, 'code'=>'76147', 'type'=>'village', 'name'=>'Village 76147, Districts 7614, City 761, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43892, 'regionable_type'=>'village']); //Argo Mulyo
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43893, 'regionable_type'=>'village']); //Binuang
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43894, 'regionable_type'=>'village']); //Bukit Raya (sepaku I)
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43895, 'regionable_type'=>'village']); //Bumi Harapan
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43896, 'regionable_type'=>'village']); //Pemaluan
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43897, 'regionable_type'=>'village']); //Semoi Ii
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43898, 'regionable_type'=>'village']); //Sukaraja (sepaku Ii)
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43899, 'regionable_type'=>'village']); //Suko Mulyo
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43900, 'regionable_type'=>'village']); //Telemow
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43901, 'regionable_type'=>'village']); //Tengin Baru (sepaku Iii)
                DB::table('regionables')->insert(['region_id'=>4238, 'regionable_id'=>43902, 'regionable_type'=>'village']); //Wonosari
                DB::table('regions')->insert(['id'=>4239, 'parent'=>4236, 'code'=>'76148', 'type'=>'village', 'name'=>'Village 76148, Districts 7614, City 761, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4239, 'regionable_id'=>43903, 'regionable_type'=>'village']); //Karang Jinawi
                DB::table('regionables')->insert(['region_id'=>4239, 'regionable_id'=>43904, 'regionable_type'=>'village']); //Sepaku
                DB::table('regions')->insert(['id'=>4240, 'parent'=>4236, 'code'=>'76149', 'type'=>'village', 'name'=>'Village 76149, Districts 7614, City 761, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4240, 'regionable_id'=>43905, 'regionable_type'=>'village']); //Mentawir
        DB::table('regions')->insert(['id'=>4241, 'parent'=>3741, 'code'=>'762', 'type'=>'city', 'name'=>'City 762, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4241, 'regionable_id'=>210, 'regionable_type'=>'city']); //Penajam Paser Utara regencies
        DB::table('regionables')->insert(['region_id'=>4241, 'regionable_id'=>211, 'regionable_type'=>'city']); //Paser regencies
            DB::table('regions')->insert(['id'=>4242, 'parent'=>4241, 'code'=>'7625', 'type'=>'districts', 'name'=>'Districts 7625, City 762, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4242, 'regionable_id'=>3829, 'regionable_type'=>'districts']); //Tanah Grogot
            DB::table('regionables')->insert(['region_id'=>4242, 'regionable_id'=>3830, 'regionable_type'=>'districts']); //Batu Sopang
            DB::table('regionables')->insert(['region_id'=>4242, 'regionable_id'=>3831, 'regionable_type'=>'districts']); //Muara Samu
            DB::table('regionables')->insert(['region_id'=>4242, 'regionable_id'=>3832, 'regionable_type'=>'districts']); //Muara Komam
                DB::table('regions')->insert(['id'=>4243, 'parent'=>4242, 'code'=>'76253', 'type'=>'village', 'name'=>'Village 76253, Districts 7625, City 762, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43956, 'regionable_type'=>'village']); //Batu Butok
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43957, 'regionable_type'=>'village']); //Binangon
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43958, 'regionable_type'=>'village']); //Long Sayo
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43959, 'regionable_type'=>'village']); //Lusan
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43960, 'regionable_type'=>'village']); //Muara Komam
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43961, 'regionable_type'=>'village']); //Muara Kuaro
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43962, 'regionable_type'=>'village']); //Muara Langon
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43963, 'regionable_type'=>'village']); //Muara Payang
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43964, 'regionable_type'=>'village']); //Prayon
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43965, 'regionable_type'=>'village']); //Sekuan Makmur
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43966, 'regionable_type'=>'village']); //Selerong
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43967, 'regionable_type'=>'village']); //Swan Slutung
                DB::table('regionables')->insert(['region_id'=>4243, 'regionable_id'=>43968, 'regionable_type'=>'village']); //Uko
            DB::table('regions')->insert(['id'=>4244, 'parent'=>4241, 'code'=>'7626', 'type'=>'districts', 'name'=>'Districts 7626, City 762, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4244, 'regionable_id'=>3833, 'regionable_type'=>'districts']); //Batu Engau
            DB::table('regionables')->insert(['region_id'=>4244, 'regionable_id'=>3834, 'regionable_type'=>'districts']); //Tanjung Harapan
                DB::table('regions')->insert(['id'=>4245, 'parent'=>4244, 'code'=>'76261', 'type'=>'village', 'name'=>'Village 76261, Districts 7626, City 762, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43969, 'regionable_type'=>'village']); //Bai Jaya
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43970, 'regionable_type'=>'village']); //Kerang
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43971, 'regionable_type'=>'village']); //Kerang Dayo
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43972, 'regionable_type'=>'village']); //Langgai
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43973, 'regionable_type'=>'village']); //Lomu
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43974, 'regionable_type'=>'village']); //Mengkudu
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43975, 'regionable_type'=>'village']); //Pengguren Jaya
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43976, 'regionable_type'=>'village']); //Petangis
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43977, 'regionable_type'=>'village']); //Riwang
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43978, 'regionable_type'=>'village']); //Saing Prupuk
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43979, 'regionable_type'=>'village']); //Segendang
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43980, 'regionable_type'=>'village']); //Tampakan
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43981, 'regionable_type'=>'village']); //Tebru Paser Damai
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43982, 'regionable_type'=>'village']); //Keladen
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43983, 'regionable_type'=>'village']); //Labuangkalo
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43984, 'regionable_type'=>'village']); //Lori
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43985, 'regionable_type'=>'village']); //Random
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43986, 'regionable_type'=>'village']); //Selengot
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43987, 'regionable_type'=>'village']); //Senipah
                DB::table('regionables')->insert(['region_id'=>4245, 'regionable_id'=>43988, 'regionable_type'=>'village']); //Tanjung Aru
            DB::table('regions')->insert(['id'=>4246, 'parent'=>4241, 'code'=>'7627', 'type'=>'districts', 'name'=>'Districts 7627, City 762, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4246, 'regionable_id'=>3835, 'regionable_type'=>'districts']); //Pasir Belengkong
                DB::table('regions')->insert(['id'=>4247, 'parent'=>4246, 'code'=>'76271', 'type'=>'village', 'name'=>'Village 76271, Districts 7627, City 762, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43989, 'regionable_type'=>'village']); //Bekoso
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43990, 'regionable_type'=>'village']); //Damit
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43991, 'regionable_type'=>'village']); //Laburan
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43992, 'regionable_type'=>'village']); //Laburan Baru
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43993, 'regionable_type'=>'village']); //Lempesu
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43994, 'regionable_type'=>'village']); //Olong Pinang
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43995, 'regionable_type'=>'village']); //Pasir Belengkong
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43996, 'regionable_type'=>'village']); //Sangkuriman
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43997, 'regionable_type'=>'village']); //Seniung Jaya
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43998, 'regionable_type'=>'village']); //Suatang
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>43999, 'regionable_type'=>'village']); //Suatang Baru
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>44000, 'regionable_type'=>'village']); //Suatang Keteban
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>44001, 'regionable_type'=>'village']); //Suliliran
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>44002, 'regionable_type'=>'village']); //Suliliran Baru
                DB::table('regionables')->insert(['region_id'=>4247, 'regionable_id'=>44003, 'regionable_type'=>'village']); //Sunge Batu
            DB::table('regions')->insert(['id'=>4248, 'parent'=>4241, 'code'=>'7628', 'type'=>'districts', 'name'=>'Districts 7628, City 762, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4248, 'regionable_id'=>3827, 'regionable_type'=>'districts']); //Waru
            DB::table('regionables')->insert(['region_id'=>4248, 'regionable_id'=>3828, 'regionable_type'=>'districts']); //Babulu
            DB::table('regionables')->insert(['region_id'=>4248, 'regionable_id'=>3836, 'regionable_type'=>'districts']); //Kuaro
            DB::table('regionables')->insert(['region_id'=>4248, 'regionable_id'=>3837, 'regionable_type'=>'districts']); //Long Ikis
            DB::table('regionables')->insert(['region_id'=>4248, 'regionable_id'=>3838, 'regionable_type'=>'districts']); //Long Kali
                DB::table('regions')->insert(['id'=>4249, 'parent'=>4248, 'code'=>'76283', 'type'=>'village', 'name'=>'Village 76283, Districts 7628, City 762, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44043, 'regionable_type'=>'village']); //Bente/tualan
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44044, 'regionable_type'=>'village']); //Gunungputar
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44045, 'regionable_type'=>'village']); //Kepala Telake
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44046, 'regionable_type'=>'village']); //Long Kali
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44047, 'regionable_type'=>'village']); //Makmur Jaya
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44048, 'regionable_type'=>'village']); //Maruat
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44049, 'regionable_type'=>'village']); //Mendik
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44050, 'regionable_type'=>'village']); //Mendik Bhakti
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44051, 'regionable_type'=>'village']); //Mendik Karya
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44052, 'regionable_type'=>'village']); //Mendik Makmur
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44053, 'regionable_type'=>'village']); //Muara Lambakan
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44054, 'regionable_type'=>'village']); //Muara Pias
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44055, 'regionable_type'=>'village']); //Muara Telake
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44056, 'regionable_type'=>'village']); //Muara Toyu
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44057, 'regionable_type'=>'village']); //Muaraadang Ii
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44058, 'regionable_type'=>'village']); //Munggu
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44059, 'regionable_type'=>'village']); //Perkuwin
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44060, 'regionable_type'=>'village']); //Petiku
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44061, 'regionable_type'=>'village']); //Pinang Jatus
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44062, 'regionable_type'=>'village']); //Putang
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44063, 'regionable_type'=>'village']); //Sebakung
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44064, 'regionable_type'=>'village']); //Sebakung Iv
                DB::table('regionables')->insert(['region_id'=>4249, 'regionable_id'=>44065, 'regionable_type'=>'village']); //Sebakung Makmur
        DB::table('regions')->insert(['id'=>4250, 'parent'=>3741, 'code'=>'771', 'type'=>'city', 'name'=>'City 771, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4250, 'regionable_id'=>204, 'regionable_type'=>'city']); //Samarinda city
        DB::table('regionables')->insert(['region_id'=>4250, 'regionable_id'=>213, 'regionable_type'=>'city']); //Tarakan city
        DB::table('regionables')->insert(['region_id'=>4250, 'regionable_id'=>214, 'regionable_type'=>'city']); //Tana Tidung regencies
        DB::table('regionables')->insert(['region_id'=>4250, 'regionable_id'=>215, 'regionable_type'=>'city']); //Malinau regencies
            DB::table('regions')->insert(['id'=>4251, 'parent'=>4250, 'code'=>'7715', 'type'=>'districts', 'name'=>'Districts 7715, City 771, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4251, 'regionable_id'=>3856, 'regionable_type'=>'districts']); //Sesayap Hilir
            DB::table('regionables')->insert(['region_id'=>4251, 'regionable_id'=>3857, 'regionable_type'=>'districts']); //Betayau
            DB::table('regionables')->insert(['region_id'=>4251, 'regionable_id'=>3858, 'regionable_type'=>'districts']); //Sesayap
            DB::table('regionables')->insert(['region_id'=>4251, 'regionable_id'=>3860, 'regionable_type'=>'districts']); //Mentarang Hulu
                DB::table('regions')->insert(['id'=>4252, 'parent'=>4251, 'code'=>'77155', 'type'=>'village', 'name'=>'Village 77155, Districts 7715, City 771, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4252, 'regionable_id'=>44218, 'regionable_type'=>'village']); //Long Berang
                DB::table('regionables')->insert(['region_id'=>4252, 'regionable_id'=>44219, 'regionable_type'=>'village']); //Long Kebinu
                DB::table('regionables')->insert(['region_id'=>4252, 'regionable_id'=>44220, 'regionable_type'=>'village']); //Long Mekatif
                DB::table('regionables')->insert(['region_id'=>4252, 'regionable_id'=>44221, 'regionable_type'=>'village']); //Long Pala
                DB::table('regionables')->insert(['region_id'=>4252, 'regionable_id'=>44222, 'regionable_type'=>'village']); //Long Semamu
                DB::table('regionables')->insert(['region_id'=>4252, 'regionable_id'=>44223, 'regionable_type'=>'village']); //Long Simau
                DB::table('regionables')->insert(['region_id'=>4252, 'regionable_id'=>44224, 'regionable_type'=>'village']); //Long Sulit
        DB::table('regions')->insert(['id'=>4253, 'parent'=>3741, 'code'=>'773', 'type'=>'city', 'name'=>'City 773, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4253, 'regionable_id'=>212, 'regionable_type'=>'city']); //Berau regencies
            DB::table('regions')->insert(['id'=>4254, 'parent'=>4253, 'code'=>'7731', 'type'=>'districts', 'name'=>'Districts 7731, City 773, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4254, 'regionable_id'=>3839, 'regionable_type'=>'districts']); //Tanjung Redeb
            DB::table('regionables')->insert(['region_id'=>4254, 'regionable_id'=>3840, 'regionable_type'=>'districts']); //Teluk Bayur
                DB::table('regions')->insert(['id'=>4255, 'parent'=>4254, 'code'=>'77313', 'type'=>'village', 'name'=>'Village 77313, Districts 7731, City 773, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4255, 'regionable_id'=>44072, 'regionable_type'=>'village']); //Rinding
                DB::table('regions')->insert(['id'=>4256, 'parent'=>4254, 'code'=>'77315', 'type'=>'village', 'name'=>'Village 77315, Districts 7731, City 773, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4256, 'regionable_id'=>44068, 'regionable_type'=>'village']); //Gayam
                DB::table('regionables')->insert(['region_id'=>4256, 'regionable_id'=>44069, 'regionable_type'=>'village']); //Karang Ambun
                DB::table('regionables')->insert(['region_id'=>4256, 'regionable_id'=>44070, 'regionable_type'=>'village']); //Sei/sungai Bedungun
                DB::table('regionables')->insert(['region_id'=>4256, 'regionable_id'=>44071, 'regionable_type'=>'village']); //Tanjung Redeb
                DB::table('regionables')->insert(['region_id'=>4256, 'regionable_id'=>44073, 'regionable_type'=>'village']); //Teluk Bayur
                DB::table('regionables')->insert(['region_id'=>4256, 'regionable_id'=>44074, 'regionable_type'=>'village']); //Tumbit Melayu
            DB::table('regions')->insert(['id'=>4257, 'parent'=>4253, 'code'=>'7735', 'type'=>'districts', 'name'=>'Districts 7735, City 773, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4257, 'regionable_id'=>3840, 'regionable_type'=>'districts']); //Teluk Bayur
            DB::table('regionables')->insert(['region_id'=>4257, 'regionable_id'=>3841, 'regionable_type'=>'districts']); //Gunung Tabur
                DB::table('regions')->insert(['id'=>4258, 'parent'=>4257, 'code'=>'77352', 'type'=>'village', 'name'=>'Village 77352, Districts 7735, City 773, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44075, 'regionable_type'=>'village']); //Labanan Jaya
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44076, 'regionable_type'=>'village']); //Labanan Makarti
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44077, 'regionable_type'=>'village']); //Labanan Makmur
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44078, 'regionable_type'=>'village']); //Batu-batu
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44079, 'regionable_type'=>'village']); //Birang
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44080, 'regionable_type'=>'village']); //Gunung Tabur
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44081, 'regionable_type'=>'village']); //Maluang
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44082, 'regionable_type'=>'village']); //Melati Jaya
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44083, 'regionable_type'=>'village']); //Merancang Ilir
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44084, 'regionable_type'=>'village']); //Merancang Ulu
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44085, 'regionable_type'=>'village']); //Pulau Besing
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44086, 'regionable_type'=>'village']); //Sambakungan
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44087, 'regionable_type'=>'village']); //Samburakat
                DB::table('regionables')->insert(['region_id'=>4258, 'regionable_id'=>44088, 'regionable_type'=>'village']); //Tasuk
            DB::table('regions')->insert(['id'=>4259, 'parent'=>4253, 'code'=>'7736', 'type'=>'districts', 'name'=>'Districts 7736, City 773, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4259, 'regionable_id'=>3842, 'regionable_type'=>'districts']); //Segah
            DB::table('regionables')->insert(['region_id'=>4259, 'regionable_id'=>3843, 'regionable_type'=>'districts']); //Kelay
                DB::table('regions')->insert(['id'=>4260, 'parent'=>4259, 'code'=>'77362', 'type'=>'village', 'name'=>'Village 77362, Districts 7736, City 773, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44100, 'regionable_type'=>'village']); //Lesan Dayak
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44101, 'regionable_type'=>'village']); //Long Beliu
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44102, 'regionable_type'=>'village']); //Long Duhung
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44103, 'regionable_type'=>'village']); //Long Keluh
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44104, 'regionable_type'=>'village']); //Long Lamcin
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44105, 'regionable_type'=>'village']); //Long Pelay
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44106, 'regionable_type'=>'village']); //Long Sului
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44107, 'regionable_type'=>'village']); //Mapulu
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44108, 'regionable_type'=>'village']); //Merabu
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44109, 'regionable_type'=>'village']); //Merapun
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44110, 'regionable_type'=>'village']); //Merasa
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44111, 'regionable_type'=>'village']); //Muara Lesan
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44112, 'regionable_type'=>'village']); //Panaan
                DB::table('regionables')->insert(['region_id'=>4260, 'regionable_id'=>44113, 'regionable_type'=>'village']); //Sido Bangen
            DB::table('regions')->insert(['id'=>4261, 'parent'=>4253, 'code'=>'7737', 'type'=>'districts', 'name'=>'Districts 7737, City 773, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4261, 'regionable_id'=>3844, 'regionable_type'=>'districts']); //Sambaliung
            DB::table('regionables')->insert(['region_id'=>4261, 'regionable_id'=>3845, 'regionable_type'=>'districts']); //Biatan
            DB::table('regionables')->insert(['region_id'=>4261, 'regionable_id'=>3846, 'regionable_type'=>'districts']); //Talisayan
            DB::table('regionables')->insert(['region_id'=>4261, 'regionable_id'=>3847, 'regionable_type'=>'districts']); //Tabalar
            DB::table('regionables')->insert(['region_id'=>4261, 'regionable_id'=>3848, 'regionable_type'=>'districts']); //Batu Putih
            DB::table('regionables')->insert(['region_id'=>4261, 'regionable_id'=>3849, 'regionable_type'=>'districts']); //Biduk-biduk
                DB::table('regions')->insert(['id'=>4262, 'parent'=>4261, 'code'=>'77373', 'type'=>'village', 'name'=>'Village 77373, Districts 7737, City 773, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44154, 'regionable_type'=>'village']); //Ampen Medang
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44155, 'regionable_type'=>'village']); //Balik Kukuk (balikukup)
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44156, 'regionable_type'=>'village']); //Batu Putih
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44157, 'regionable_type'=>'village']); //Lobang Kelatak
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44158, 'regionable_type'=>'village']); //Biduk-biduk
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44159, 'regionable_type'=>'village']); //Giring-giring
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44160, 'regionable_type'=>'village']); //Pantai Harapan
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44161, 'regionable_type'=>'village']); //Tanjung Perepat
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44162, 'regionable_type'=>'village']); //Teluk Sulaiman
                DB::table('regionables')->insert(['region_id'=>4262, 'regionable_id'=>44163, 'regionable_type'=>'village']); //Teluk Sumbang
            DB::table('regions')->insert(['id'=>4263, 'parent'=>4253, 'code'=>'7738', 'type'=>'districts', 'name'=>'Districts 7738, City 773, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4263, 'regionable_id'=>3850, 'regionable_type'=>'districts']); //Derawan (pulau Derawan)
            DB::table('regionables')->insert(['region_id'=>4263, 'regionable_id'=>3851, 'regionable_type'=>'districts']); //Maratua
                DB::table('regions')->insert(['id'=>4264, 'parent'=>4263, 'code'=>'77381', 'type'=>'village', 'name'=>'Village 77381, Districts 7738, City 773, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44164, 'regionable_type'=>'village']); //Kasai
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44165, 'regionable_type'=>'village']); //Pegat Bertumbuk
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44166, 'regionable_type'=>'village']); //Pulau Derawan
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44167, 'regionable_type'=>'village']); //Tanjung Batu
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44168, 'regionable_type'=>'village']); //Teluk Semanting
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44169, 'regionable_type'=>'village']); //Maratua Bohesilian
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44170, 'regionable_type'=>'village']); //Maratua Payung-payung
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44171, 'regionable_type'=>'village']); //Maratua Teluk Alulu
                DB::table('regionables')->insert(['region_id'=>4264, 'regionable_id'=>44172, 'regionable_type'=>'village']); //Maratua Teluk Harapan

        //Kalimantan Utara
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>16, 'regionable_type'=>'province']); //Kalimantan Utara
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>213, 'regionable_type'=>'city']); //Tarakan city
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>214, 'regionable_type'=>'city']); //Tana Tidung regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>215, 'regionable_type'=>'city']); //Malinau regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>216, 'regionable_type'=>'city']); //Bulungan (bulongan) regencies
        DB::table('regionables')->insert(['region_id'=>3741, 'regionable_id'=>217, 'regionable_type'=>'city']); //Nunukan regencies

        DB::table('regions')->insert(['id'=>4265, 'parent'=>3741, 'code'=>'771', 'type'=>'city', 'name'=>'City 771, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4265, 'regionable_id'=>204, 'regionable_type'=>'city']); //Samarinda city
        DB::table('regionables')->insert(['region_id'=>4265, 'regionable_id'=>213, 'regionable_type'=>'city']); //Tarakan city
        DB::table('regionables')->insert(['region_id'=>4265, 'regionable_id'=>214, 'regionable_type'=>'city']); //Tana Tidung regencies
        DB::table('regionables')->insert(['region_id'=>4265, 'regionable_id'=>215, 'regionable_type'=>'city']); //Malinau regencies
            DB::table('regions')->insert(['id'=>4266, 'parent'=>4265, 'code'=>'7715', 'type'=>'districts', 'name'=>'Districts 7715, City 771, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4266, 'regionable_id'=>3856, 'regionable_type'=>'districts']); //Sesayap Hilir
            DB::table('regionables')->insert(['region_id'=>4266, 'regionable_id'=>3857, 'regionable_type'=>'districts']); //Betayau
            DB::table('regionables')->insert(['region_id'=>4266, 'regionable_id'=>3858, 'regionable_type'=>'districts']); //Sesayap
            DB::table('regionables')->insert(['region_id'=>4266, 'regionable_id'=>3860, 'regionable_type'=>'districts']); //Mentarang Hulu
                DB::table('regions')->insert(['id'=>4267, 'parent'=>4266, 'code'=>'77155', 'type'=>'village', 'name'=>'Village 77155, Districts 7715, City 771, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4267, 'regionable_id'=>44218, 'regionable_type'=>'village']); //Long Berang
                DB::table('regionables')->insert(['region_id'=>4267, 'regionable_id'=>44219, 'regionable_type'=>'village']); //Long Kebinu
                DB::table('regionables')->insert(['region_id'=>4267, 'regionable_id'=>44220, 'regionable_type'=>'village']); //Long Mekatif
                DB::table('regionables')->insert(['region_id'=>4267, 'regionable_id'=>44221, 'regionable_type'=>'village']); //Long Pala
                DB::table('regionables')->insert(['region_id'=>4267, 'regionable_id'=>44222, 'regionable_type'=>'village']); //Long Semamu
                DB::table('regionables')->insert(['region_id'=>4267, 'regionable_id'=>44223, 'regionable_type'=>'village']); //Long Simau
                DB::table('regionables')->insert(['region_id'=>4267, 'regionable_id'=>44224, 'regionable_type'=>'village']); //Long Sulit
        DB::table('regions')->insert(['id'=>4268, 'parent'=>3741, 'code'=>'772', 'type'=>'city', 'name'=>'City 772, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4268, 'regionable_id'=>216, 'regionable_type'=>'city']); //Bulungan (bulongan) regencies
            DB::table('regions')->insert(['id'=>4269, 'parent'=>4268, 'code'=>'7721', 'type'=>'districts', 'name'=>'Districts 7721, City 772, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4269, 'regionable_id'=>3875, 'regionable_type'=>'districts']); //Tanjung Palas
            DB::table('regionables')->insert(['region_id'=>4269, 'regionable_id'=>3876, 'regionable_type'=>'districts']); //Tanjung Selor
            DB::table('regionables')->insert(['region_id'=>4269, 'regionable_id'=>3877, 'regionable_type'=>'districts']); //Tanjung Palas Utara
            DB::table('regionables')->insert(['region_id'=>4269, 'regionable_id'=>3878, 'regionable_type'=>'districts']); //Tanjung Palas Timur
            DB::table('regionables')->insert(['region_id'=>4269, 'regionable_id'=>3879, 'regionable_type'=>'districts']); //Tanjung Palas Tengah
            DB::table('regionables')->insert(['region_id'=>4269, 'regionable_id'=>3880, 'regionable_type'=>'districts']); //Tanjung Palas Barat
                DB::table('regions')->insert(['id'=>4270, 'parent'=>4269, 'code'=>'77217', 'type'=>'village', 'name'=>'Village 77217, Districts 7721, City 772, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4270, 'regionable_id'=>44362, 'regionable_type'=>'village']); //Long Beluah
                DB::table('regionables')->insert(['region_id'=>4270, 'regionable_id'=>44363, 'regionable_type'=>'village']); //Long Pari
                DB::table('regionables')->insert(['region_id'=>4270, 'regionable_id'=>44364, 'regionable_type'=>'village']); //Long Sam
                DB::table('regionables')->insert(['region_id'=>4270, 'regionable_id'=>44365, 'regionable_type'=>'village']); //Mara Hilir
                DB::table('regionables')->insert(['region_id'=>4270, 'regionable_id'=>44366, 'regionable_type'=>'village']); //Mara Satu
            DB::table('regions')->insert(['id'=>4271, 'parent'=>4268, 'code'=>'7726', 'type'=>'districts', 'name'=>'Districts 7726, City 772, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4271, 'regionable_id'=>3881, 'regionable_type'=>'districts']); //Peso
            DB::table('regionables')->insert(['region_id'=>4271, 'regionable_id'=>3882, 'regionable_type'=>'districts']); //Peso Hilir/ilir
            DB::table('regionables')->insert(['region_id'=>4271, 'regionable_id'=>3883, 'regionable_type'=>'districts']); //Sekatak
                DB::table('regions')->insert(['id'=>4272, 'parent'=>4271, 'code'=>'77263', 'type'=>'village', 'name'=>'Village 77263, Districts 7726, City 772, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44383, 'regionable_type'=>'village']); //Ambalat
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44384, 'regionable_type'=>'village']); //Anjar Arip (anjararef)
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44385, 'regionable_type'=>'village']); //Bambang
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44386, 'regionable_type'=>'village']); //Bekiliu
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44387, 'regionable_type'=>'village']); //Bunau
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44388, 'regionable_type'=>'village']); //Kelincawan
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44389, 'regionable_type'=>'village']); //Kelising (keliising)
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44390, 'regionable_type'=>'village']); //Kelumbunan (kelembunan)
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44391, 'regionable_type'=>'village']); //Kendari
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44392, 'regionable_type'=>'village']); //Keriting
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44393, 'regionable_type'=>'village']); //Liu Agu (liagu)
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44394, 'regionable_type'=>'village']); //Maritam
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44395, 'regionable_type'=>'village']); //Paru Abang
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44396, 'regionable_type'=>'village']); //Pentian
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44397, 'regionable_type'=>'village']); //Punan Dulau
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44398, 'regionable_type'=>'village']); //Pungit
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44399, 'regionable_type'=>'village']); //Sekatak Bengara
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44400, 'regionable_type'=>'village']); //Sekatak Buji
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44401, 'regionable_type'=>'village']); //Tenggiling
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44402, 'regionable_type'=>'village']); //Terindak
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44403, 'regionable_type'=>'village']); //Turung
                DB::table('regionables')->insert(['region_id'=>4272, 'regionable_id'=>44404, 'regionable_type'=>'village']); //Ujang
            DB::table('regions')->insert(['id'=>4273, 'parent'=>4268, 'code'=>'7728', 'type'=>'districts', 'name'=>'Districts 7728, City 772, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4273, 'regionable_id'=>3884, 'regionable_type'=>'districts']); //Pulau Bunyu
                DB::table('regions')->insert(['id'=>4274, 'parent'=>4273, 'code'=>'77281', 'type'=>'village', 'name'=>'Village 77281, Districts 7728, City 772, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4274, 'regionable_id'=>44405, 'regionable_type'=>'village']); //Pulau Bunyu Barat
                DB::table('regionables')->insert(['region_id'=>4274, 'regionable_id'=>44406, 'regionable_type'=>'village']); //Pulau Bunyu Selatan
                DB::table('regionables')->insert(['region_id'=>4274, 'regionable_id'=>44407, 'regionable_type'=>'village']); //Pulau Bunyu Timur
        DB::table('regions')->insert(['id'=>4275, 'parent'=>3741, 'code'=>'774', 'type'=>'city', 'name'=>'City 774, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4275, 'regionable_id'=>214, 'regionable_type'=>'city']); //Tana Tidung regencies
        DB::table('regionables')->insert(['region_id'=>4275, 'regionable_id'=>217, 'regionable_type'=>'city']); //Nunukan regencies
            DB::table('regions')->insert(['id'=>4276, 'parent'=>4275, 'code'=>'7745', 'type'=>'districts', 'name'=>'Districts 7745, City 774, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4276, 'regionable_id'=>3859, 'regionable_type'=>'districts']); //Tana Lia (tanah Lia)
            DB::table('regionables')->insert(['region_id'=>4276, 'regionable_id'=>3885, 'regionable_type'=>'districts']); //Sembakung
            DB::table('regionables')->insert(['region_id'=>4276, 'regionable_id'=>3886, 'regionable_type'=>'districts']); //Krayan Selatan
            DB::table('regionables')->insert(['region_id'=>4276, 'regionable_id'=>3887, 'regionable_type'=>'districts']); //Krayan
            DB::table('regionables')->insert(['region_id'=>4276, 'regionable_id'=>3888, 'regionable_type'=>'districts']); //Lumbis Ogong
            DB::table('regionables')->insert(['region_id'=>4276, 'regionable_id'=>3889, 'regionable_type'=>'districts']); //Lumbis
                DB::table('regions')->insert(['id'=>4277, 'parent'=>4276, 'code'=>'77457', 'type'=>'village', 'name'=>'Village 77457, Districts 7745, City 774, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44517, 'regionable_type'=>'village']); //Batung
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44518, 'regionable_type'=>'village']); //Bokok
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44519, 'regionable_type'=>'village']); //Bulu Laun Hilir
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44520, 'regionable_type'=>'village']); //Bulu Laun Hulu
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44521, 'regionable_type'=>'village']); //Bulu Luan Hulu
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44522, 'regionable_type'=>'village']); //Bulu Mengelom
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44523, 'regionable_type'=>'village']); //Duyan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44524, 'regionable_type'=>'village']); //Jukup
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44525, 'regionable_type'=>'village']); //Kabungalor
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44526, 'regionable_type'=>'village']); //Kalam Buku
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44527, 'regionable_type'=>'village']); //Kalisun
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44528, 'regionable_type'=>'village']); //Kuyo
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44529, 'regionable_type'=>'village']); //Labang
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44530, 'regionable_type'=>'village']); //Labuk
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44531, 'regionable_type'=>'village']); //Lagas
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44532, 'regionable_type'=>'village']); //Langgason
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44533, 'regionable_type'=>'village']); //Lepaga
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44534, 'regionable_type'=>'village']); //Limpakon
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44535, 'regionable_type'=>'village']); //Linsayung
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44536, 'regionable_type'=>'village']); //Long Bulu
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44537, 'regionable_type'=>'village']); //Mamanis
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44538, 'regionable_type'=>'village']); //Nan Sapan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44539, 'regionable_type'=>'village']); //Nantukidan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44540, 'regionable_type'=>'village']); //Ngawol
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44541, 'regionable_type'=>'village']); //Paluan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44542, 'regionable_type'=>'village']); //Panas
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44543, 'regionable_type'=>'village']); //Payang
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44544, 'regionable_type'=>'village']); //Salan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44545, 'regionable_type'=>'village']); //Samunti
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44546, 'regionable_type'=>'village']); //Sanal
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44547, 'regionable_type'=>'village']); //Sedalit
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44548, 'regionable_type'=>'village']); //Semata
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44549, 'regionable_type'=>'village']); //Sibalu
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44550, 'regionable_type'=>'village']); //Sinampala Dua
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44551, 'regionable_type'=>'village']); //Sinampala Satu
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44552, 'regionable_type'=>'village']); //Sumantipal
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44553, 'regionable_type'=>'village']); //Sumentobol
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44554, 'regionable_type'=>'village']); //Sungoi
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44555, 'regionable_type'=>'village']); //Suyadon
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44556, 'regionable_type'=>'village']); //Tambalang Hilir
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44557, 'regionable_type'=>'village']); //Tambalang Ulu
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44558, 'regionable_type'=>'village']); //Tantalujuk
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44559, 'regionable_type'=>'village']); //Tantu Libing
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44560, 'regionable_type'=>'village']); //Tau Lumbis
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44561, 'regionable_type'=>'village']); //Tetagas
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44562, 'regionable_type'=>'village']); //Tubel Alung (ubel Alung)
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44563, 'regionable_type'=>'village']); //Tukulen (tukulon)
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44564, 'regionable_type'=>'village']); //Tumatalas
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44565, 'regionable_type'=>'village']); //Ubel Sulok
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44566, 'regionable_type'=>'village']); //Bulan Bulan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44567, 'regionable_type'=>'village']); //Dabulon (dubulon)
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44568, 'regionable_type'=>'village']); //Deralon
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44569, 'regionable_type'=>'village']); //Kalampising
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44570, 'regionable_type'=>'village']); //Liang
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44571, 'regionable_type'=>'village']); //Libang
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44572, 'regionable_type'=>'village']); //Likos
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44573, 'regionable_type'=>'village']); //Lintong
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44574, 'regionable_type'=>'village']); //Mansalong
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44575, 'regionable_type'=>'village']); //Nainsid
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44576, 'regionable_type'=>'village']); //Pa Lemumut
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44577, 'regionable_type'=>'village']); //Pa Loo
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44578, 'regionable_type'=>'village']); //Patal I (satu)
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44579, 'regionable_type'=>'village']); //Patal Ii (dua)
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44580, 'regionable_type'=>'village']); //Podong
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44581, 'regionable_type'=>'village']); //Pulu Bulawan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44582, 'regionable_type'=>'village']); //Saludan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44583, 'regionable_type'=>'village']); //Sangkup
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44584, 'regionable_type'=>'village']); //Sapuyan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44585, 'regionable_type'=>'village']); //Sasibu
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44586, 'regionable_type'=>'village']); //Sedongon
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44587, 'regionable_type'=>'village']); //Semalat
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44588, 'regionable_type'=>'village']); //Siawang
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44589, 'regionable_type'=>'village']); //Sumalumung
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44590, 'regionable_type'=>'village']); //Taluan
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44591, 'regionable_type'=>'village']); //Tanjung Hilir
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44592, 'regionable_type'=>'village']); //Tanjung Hulu
                DB::table('regionables')->insert(['region_id'=>4277, 'regionable_id'=>44593, 'regionable_type'=>'village']); //Tubus
            DB::table('regions')->insert(['id'=>4278, 'parent'=>4275, 'code'=>'7748', 'type'=>'districts', 'name'=>'Districts 7748, City 774, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3890, 'regionable_type'=>'districts']); //Sebuku
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3891, 'regionable_type'=>'districts']); //Nunukan
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3892, 'regionable_type'=>'districts']); //Tulin Onsoi
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3893, 'regionable_type'=>'districts']); //Nunukan Selatan
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3894, 'regionable_type'=>'districts']); //Sei Menggaris
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3895, 'regionable_type'=>'districts']); //Sebatik Tengah
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3896, 'regionable_type'=>'districts']); //Sebatik
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3897, 'regionable_type'=>'districts']); //Sebatik Barat
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3898, 'regionable_type'=>'districts']); //Sebatik Timur
            DB::table('regionables')->insert(['region_id'=>4278, 'regionable_id'=>3899, 'regionable_type'=>'districts']); //Sebatik Utara
                DB::table('regions')->insert(['id'=>4279, 'parent'=>4278, 'code'=>'77483', 'type'=>'village', 'name'=>'Village 77483, Districts 7748, City 774, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44629, 'regionable_type'=>'village']); //Aji Kuning
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44630, 'regionable_type'=>'village']); //Bukit Harapan
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44631, 'regionable_type'=>'village']); //Maspul
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44632, 'regionable_type'=>'village']); //Sei Limau
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44633, 'regionable_type'=>'village']); //Balansiku
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44634, 'regionable_type'=>'village']); //Padaidi
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44635, 'regionable_type'=>'village']); //Sungai Manurung
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44636, 'regionable_type'=>'village']); //Tanjung Karang
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44637, 'regionable_type'=>'village']); //Bambangan
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44638, 'regionable_type'=>'village']); //Binalawan
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44639, 'regionable_type'=>'village']); //Liang Bunyu
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44640, 'regionable_type'=>'village']); //Setabu
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44641, 'regionable_type'=>'village']); //Bukit Aru Indah
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44642, 'regionable_type'=>'village']); //Sei/sungai Nyamuk
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44643, 'regionable_type'=>'village']); //Tanjung Aru
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44644, 'regionable_type'=>'village']); //Tanjung Harapan
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44645, 'regionable_type'=>'village']); //Lapri
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44646, 'regionable_type'=>'village']); //Seberang
                DB::table('regionables')->insert(['region_id'=>4279, 'regionable_id'=>44647, 'regionable_type'=>'village']); //Sei/sungai Pancang
        DB::table('regions')->insert(['id'=>4280, 'parent'=>3741, 'code'=>'775', 'type'=>'city', 'name'=>'City 775, Province 7']);
        DB::table('regionables')->insert(['region_id'=>4280, 'regionable_id'=>215, 'regionable_type'=>'city']); //Malinau regencies
            DB::table('regions')->insert(['id'=>4281, 'parent'=>4280, 'code'=>'7755', 'type'=>'districts', 'name'=>'Districts 7755, City 775, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4281, 'regionable_id'=>3861, 'regionable_type'=>'districts']); //Malinau Selatan Hilir
            DB::table('regionables')->insert(['region_id'=>4281, 'regionable_id'=>3862, 'regionable_type'=>'districts']); //Malinau Kota
            DB::table('regionables')->insert(['region_id'=>4281, 'regionable_id'=>3863, 'regionable_type'=>'districts']); //Malinau Utara
            DB::table('regionables')->insert(['region_id'=>4281, 'regionable_id'=>3864, 'regionable_type'=>'districts']); //Malinau Selatan
            DB::table('regionables')->insert(['region_id'=>4281, 'regionable_id'=>3865, 'regionable_type'=>'districts']); //Malinau Selatan Hulu
            DB::table('regionables')->insert(['region_id'=>4281, 'regionable_id'=>3866, 'regionable_type'=>'districts']); //Malinau Barat
            DB::table('regionables')->insert(['region_id'=>4281, 'regionable_id'=>3867, 'regionable_type'=>'districts']); //Mentarang
            DB::table('regionables')->insert(['region_id'=>4281, 'regionable_id'=>3868, 'regionable_type'=>'districts']); //Sungai Tubu
                DB::table('regions')->insert(['id'=>4282, 'parent'=>4281, 'code'=>'77555', 'type'=>'village', 'name'=>'Village 77555, Districts 7755, City 775, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44277, 'regionable_type'=>'village']); //Harapan Maju
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44278, 'regionable_type'=>'village']); //Lidung Kemenci
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44279, 'regionable_type'=>'village']); //Long Bisai
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44280, 'regionable_type'=>'village']); //Long Gafid
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44281, 'regionable_type'=>'village']); //Long Liku
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44282, 'regionable_type'=>'village']); //Mentarang Baru
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44283, 'regionable_type'=>'village']); //Paking
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44284, 'regionable_type'=>'village']); //Pulau Sapi
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44285, 'regionable_type'=>'village']); //Temalang
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44286, 'regionable_type'=>'village']); //Long Nyau
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44287, 'regionable_type'=>'village']); //Long Pada
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44288, 'regionable_type'=>'village']); //Long Ranau
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44289, 'regionable_type'=>'village']); //Long Titi
                DB::table('regionables')->insert(['region_id'=>4282, 'regionable_id'=>44290, 'regionable_type'=>'village']); //Rian Tubu
            DB::table('regions')->insert(['id'=>4283, 'parent'=>4280, 'code'=>'7756', 'type'=>'districts', 'name'=>'Districts 7756, City 775, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4283, 'regionable_id'=>3869, 'regionable_type'=>'districts']); //Bahau Hulu
            DB::table('regionables')->insert(['region_id'=>4283, 'regionable_id'=>3870, 'regionable_type'=>'districts']); //Pujungan
                DB::table('regions')->insert(['id'=>4284, 'parent'=>4283, 'code'=>'77562', 'type'=>'village', 'name'=>'Village 77562, Districts 7756, City 775, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44291, 'regionable_type'=>'village']); //Apau Ping Mading
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44292, 'regionable_type'=>'village']); //Long Alango
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44293, 'regionable_type'=>'village']); //Long Atua/long Kemuat
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44294, 'regionable_type'=>'village']); //Long Berini Mararian
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44295, 'regionable_type'=>'village']); //Long Tabulo/tebulo
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44296, 'regionable_type'=>'village']); //Long Uli
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44297, 'regionable_type'=>'village']); //Lame
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44298, 'regionable_type'=>'village']); //Long Aran
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44299, 'regionable_type'=>'village']); //Long Belaka Pitau
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44300, 'regionable_type'=>'village']); //Long Bena
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44301, 'regionable_type'=>'village']); //Long Jelet
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44302, 'regionable_type'=>'village']); //Long Ketaman
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44303, 'regionable_type'=>'village']); //Long Paliran
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44304, 'regionable_type'=>'village']); //Long Pua
                DB::table('regionables')->insert(['region_id'=>4284, 'regionable_id'=>44305, 'regionable_type'=>'village']); //Long Pujungan
            DB::table('regions')->insert(['id'=>4285, 'parent'=>4280, 'code'=>'7757', 'type'=>'districts', 'name'=>'Districts 7757, City 775, Province 7']);
            DB::table('regionables')->insert(['region_id'=>4285, 'regionable_id'=>3871, 'regionable_type'=>'districts']); //Kayan Hilir
            DB::table('regionables')->insert(['region_id'=>4285, 'regionable_id'=>3872, 'regionable_type'=>'districts']); //Kayan Hulu
            DB::table('regionables')->insert(['region_id'=>4285, 'regionable_id'=>3873, 'regionable_type'=>'districts']); //Sungai Boh
            DB::table('regionables')->insert(['region_id'=>4285, 'regionable_id'=>3874, 'regionable_type'=>'districts']); //Kayan Selatan
                DB::table('regions')->insert(['id'=>4286, 'parent'=>4285, 'code'=>'77573', 'type'=>'village', 'name'=>'Village 77573, Districts 7757, City 775, Province 7']);
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44316, 'regionable_type'=>'village']); //Agung Baru
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44317, 'regionable_type'=>'village']); //Data Baru
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44318, 'regionable_type'=>'village']); //Dumu Mahak
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44319, 'regionable_type'=>'village']); //Long Lebusan
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44320, 'regionable_type'=>'village']); //Long Top
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44321, 'regionable_type'=>'village']); //Mahak Baru
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44322, 'regionable_type'=>'village']); //Lidung Payau
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44323, 'regionable_type'=>'village']); //Long Ampung
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44324, 'regionable_type'=>'village']); //Long Uro
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44325, 'regionable_type'=>'village']); //Metulang
                DB::table('regionables')->insert(['region_id'=>4286, 'regionable_id'=>44326, 'regionable_type'=>'village']); //Sungai Barang
    }
}
