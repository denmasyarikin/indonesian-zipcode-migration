<?php

use Illuminate\Database\Seeder;

class _Region_Province_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['id'=>1, 'code'=>'1', 'type'=>'province', 'name'=>'Province 1']);

        //Banten
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>3, 'regionable_type'=>'province']); //Banten
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>17, 'regionable_type'=>'city']); //Tangerang city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>18, 'regionable_type'=>'city']); //Tangerang regencies
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>19, 'regionable_type'=>'city']); //Tangerang Selatan city

        DB::table('regions')->insert(['id'=>2, 'parent'=>1, 'code'=>'151', 'type'=>'city', 'name'=>'City 151, Province 1']);
        DB::table('regionables')->insert(['region_id'=>2, 'regionable_id'=>17, 'regionable_type'=>'city']); //Tangerang city
        DB::table('regionables')->insert(['region_id'=>2, 'regionable_id'=>18, 'regionable_type'=>'city']); //Tangerang regencies
            DB::table('regions')->insert(['id'=>3, 'parent'=>2, 'code'=>'1511', 'type'=>'districts', 'name'=>'Districts 1511, City 151, Province 1']);
            DB::table('regionables')->insert(['region_id'=>3, 'regionable_id'=>105, 'regionable_type'=>'districts']); //Tangerang
            DB::table('regionables')->insert(['region_id'=>3, 'regionable_id'=>106, 'regionable_type'=>'districts']); //Karawaci
            DB::table('regionables')->insert(['region_id'=>3, 'regionable_id'=>147, 'regionable_type'=>'districts']); //Tangerang
            DB::table('regionables')->insert(['region_id'=>3, 'regionable_id'=>148, 'regionable_type'=>'districts']); //Karawaci
                DB::table('regions')->insert(['id'=>4, 'parent'=>3, 'code'=>'15112', 'type'=>'village', 'name'=>'Village 15112, Districts 1511, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>4, 'regionable_id'=>1103, 'regionable_type'=>'village']); //Koang Jaya
                DB::table('regionables')->insert(['region_id'=>4, 'regionable_id'=>1104, 'regionable_type'=>'village']); //Nambo Jaya
                DB::table('regionables')->insert(['region_id'=>4, 'regionable_id'=>1105, 'regionable_type'=>'village']); //Pabuaran Tumpeng
                DB::table('regionables')->insert(['region_id'=>4, 'regionable_id'=>1106, 'regionable_type'=>'village']); //Pasar Baru
                DB::table('regionables')->insert(['region_id'=>4, 'regionable_id'=>1481, 'regionable_type'=>'village']); //Koang Jaya
                DB::table('regionables')->insert(['region_id'=>4, 'regionable_id'=>1482, 'regionable_type'=>'village']); //Nambo Jaya
                DB::table('regionables')->insert(['region_id'=>4, 'regionable_id'=>1483, 'regionable_type'=>'village']); //Pabuaran Tumpeng
                DB::table('regionables')->insert(['region_id'=>4, 'regionable_id'=>1484, 'regionable_type'=>'village']); //Pasar Baru
                DB::table('regions')->insert(['id'=>5, 'parent'=>3, 'code'=>'15113', 'type'=>'village', 'name'=>'Village 15113, Districts 1511, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>5, 'regionable_id'=>1107, 'regionable_type'=>'village']); //Bugel
                DB::table('regionables')->insert(['region_id'=>5, 'regionable_id'=>1108, 'regionable_type'=>'village']); //Gerendeng
                DB::table('regionables')->insert(['region_id'=>5, 'regionable_id'=>1109, 'regionable_type'=>'village']); //Marga Sari
                DB::table('regionables')->insert(['region_id'=>5, 'regionable_id'=>1110, 'regionable_type'=>'village']); //Suka Jadi
                DB::table('regionables')->insert(['region_id'=>5, 'regionable_id'=>1485, 'regionable_type'=>'village']); //Bugel
                DB::table('regionables')->insert(['region_id'=>5, 'regionable_id'=>1486, 'regionable_type'=>'village']); //Gerendeng
                DB::table('regionables')->insert(['region_id'=>5, 'regionable_id'=>1487, 'regionable_type'=>'village']); //Marga Sari
                DB::table('regionables')->insert(['region_id'=>5, 'regionable_id'=>1488, 'regionable_type'=>'village']); //Suka Jadi
                DB::table('regions')->insert(['id'=>6, 'parent'=>3, 'code'=>'15114', 'type'=>'village', 'name'=>'Village 15114, Districts 1511, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>6, 'regionable_id'=>1111, 'regionable_type'=>'village']); //Cimone
                DB::table('regionables')->insert(['region_id'=>6, 'regionable_id'=>1112, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>6, 'regionable_id'=>1113, 'regionable_type'=>'village']); //Sumur Pancing (pacing)
                DB::table('regionables')->insert(['region_id'=>6, 'regionable_id'=>1489, 'regionable_type'=>'village']); //Cimone
                DB::table('regionables')->insert(['region_id'=>6, 'regionable_id'=>1490, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>6, 'regionable_id'=>1491, 'regionable_type'=>'village']); //Sumur Pancing (pacing)
                DB::table('regions')->insert(['id'=>7, 'parent'=>3, 'code'=>'15115', 'type'=>'village', 'name'=>'Village 15115, Districts 1511, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>7, 'regionable_id'=>1114, 'regionable_type'=>'village']); //Bojong Jaya
                DB::table('regionables')->insert(['region_id'=>7, 'regionable_id'=>1115, 'regionable_type'=>'village']); //Karawaci
                DB::table('regionables')->insert(['region_id'=>7, 'regionable_id'=>1492, 'regionable_type'=>'village']); //Bojong Jaya
                DB::table('regionables')->insert(['region_id'=>7, 'regionable_id'=>1493, 'regionable_type'=>'village']); //Karawaci
                DB::table('regions')->insert(['id'=>8, 'parent'=>3, 'code'=>'15116', 'type'=>'village', 'name'=>'Village 15116, Districts 1511, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>8, 'regionable_id'=>1116, 'regionable_type'=>'village']); //Cimone Jaya
                DB::table('regionables')->insert(['region_id'=>8, 'regionable_id'=>1117, 'regionable_type'=>'village']); //Karawaci Baru
                DB::table('regionables')->insert(['region_id'=>8, 'regionable_id'=>1118, 'regionable_type'=>'village']); //Nusa Jaya
                DB::table('regionables')->insert(['region_id'=>8, 'regionable_id'=>1494, 'regionable_type'=>'village']); //Cimone Jaya
                DB::table('regionables')->insert(['region_id'=>8, 'regionable_id'=>1495, 'regionable_type'=>'village']); //Karawaci Baru
                DB::table('regionables')->insert(['region_id'=>8, 'regionable_id'=>1496, 'regionable_type'=>'village']); //Nusa Jaya
            DB::table('regions')->insert(['id'=>9, 'parent'=>2, 'code'=>'1512', 'type'=>'districts', 'name'=>'Districts 1512, City 151, Province 1']);
            DB::table('regionables')->insert(['region_id'=>9, 'regionable_id'=>107, 'regionable_type'=>'districts']); //Batuceper
            DB::table('regionables')->insert(['region_id'=>9, 'regionable_id'=>108, 'regionable_type'=>'districts']); //Neglasari
            DB::table('regionables')->insert(['region_id'=>9, 'regionable_id'=>109, 'regionable_type'=>'districts']); //Benda
            DB::table('regionables')->insert(['region_id'=>9, 'regionable_id'=>149, 'regionable_type'=>'districts']); //Batuceper
            DB::table('regionables')->insert(['region_id'=>9, 'regionable_id'=>150, 'regionable_type'=>'districts']); //Neglasari
            DB::table('regionables')->insert(['region_id'=>9, 'regionable_id'=>151, 'regionable_type'=>'districts']); //Benda
                DB::table('regions')->insert(['id'=>10, 'parent'=>9, 'code'=>'15123', 'type'=>'village', 'name'=>'Village 15123, Districts 1512, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>10, 'regionable_id'=>1133, 'regionable_type'=>'village']); //Belendung
                DB::table('regionables')->insert(['region_id'=>10, 'regionable_id'=>1511, 'regionable_type'=>'village']); //Belendung
                DB::table('regions')->insert(['id'=>11, 'parent'=>9, 'code'=>'15124', 'type'=>'village', 'name'=>'Village 15124, Districts 1512, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>11, 'regionable_id'=>1134, 'regionable_type'=>'village']); //Jurumudi
                DB::table('regionables')->insert(['region_id'=>11, 'regionable_id'=>1135, 'regionable_type'=>'village']); //Jurumudi Baru
                DB::table('regionables')->insert(['region_id'=>11, 'regionable_id'=>1512, 'regionable_type'=>'village']); //Jurumudi
                DB::table('regionables')->insert(['region_id'=>11, 'regionable_id'=>1513, 'regionable_type'=>'village']); //Jurumudi Baru
                DB::table('regions')->insert(['id'=>12, 'parent'=>9, 'code'=>'15125', 'type'=>'village', 'name'=>'Village 15125, Districts 1512, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>12, 'regionable_id'=>1136, 'regionable_type'=>'village']); //Benda
                DB::table('regionables')->insert(['region_id'=>12, 'regionable_id'=>1514, 'regionable_type'=>'village']); //Benda
                DB::table('regions')->insert(['id'=>13, 'parent'=>9, 'code'=>'15126', 'type'=>'village', 'name'=>'Village 15126, Districts 1512, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>13, 'regionable_id'=>1137, 'regionable_type'=>'village']); //Pajang
                DB::table('regionables')->insert(['region_id'=>13, 'regionable_id'=>1515, 'regionable_type'=>'village']); //Pajang
            DB::table('regions')->insert(['id'=>14, 'parent'=>2, 'code'=>'1513', 'type'=>'districts', 'name'=>'Districts 1513, City 151, Province 1']);
            DB::table('regionables')->insert(['region_id'=>14, 'regionable_id'=>110, 'regionable_type'=>'districts']); //Periuk
            DB::table('regionables')->insert(['region_id'=>14, 'regionable_id'=>111, 'regionable_type'=>'districts']); //Jatiuwung
            DB::table('regionables')->insert(['region_id'=>14, 'regionable_id'=>112, 'regionable_type'=>'districts']); //Cibodas
            DB::table('regionables')->insert(['region_id'=>14, 'regionable_id'=>152, 'regionable_type'=>'districts']); //Periuk
            DB::table('regionables')->insert(['region_id'=>14, 'regionable_id'=>153, 'regionable_type'=>'districts']); //Jatiuwung
            DB::table('regionables')->insert(['region_id'=>14, 'regionable_id'=>154, 'regionable_type'=>'districts']); //Cibodas
                DB::table('regions')->insert(['id'=>15, 'parent'=>14, 'code'=>'15134', 'type'=>'village', 'name'=>'Village 15134, Districts 1513, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>15, 'regionable_id'=>1144, 'regionable_type'=>'village']); //Keroncong
                DB::table('regionables')->insert(['region_id'=>15, 'regionable_id'=>1149, 'regionable_type'=>'village']); //Jatiuwung
                DB::table('regionables')->insert(['region_id'=>15, 'regionable_id'=>1522, 'regionable_type'=>'village']); //Keroncong
                DB::table('regionables')->insert(['region_id'=>15, 'regionable_id'=>1527, 'regionable_type'=>'village']); //Jatiuwung
                DB::table('regions')->insert(['id'=>16, 'parent'=>14, 'code'=>'15138', 'type'=>'village', 'name'=>'Village 15138, Districts 1513, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>16, 'regionable_id'=>1150, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>16, 'regionable_id'=>1151, 'regionable_type'=>'village']); //Cibodas Baru
                DB::table('regionables')->insert(['region_id'=>16, 'regionable_id'=>1152, 'regionable_type'=>'village']); //Cibodas Sari
                DB::table('regionables')->insert(['region_id'=>16, 'regionable_id'=>1153, 'regionable_type'=>'village']); //Uwung Jaya
                DB::table('regionables')->insert(['region_id'=>16, 'regionable_id'=>1528, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>16, 'regionable_id'=>1529, 'regionable_type'=>'village']); //Cibodas Baru
                DB::table('regionables')->insert(['region_id'=>16, 'regionable_id'=>1530, 'regionable_type'=>'village']); //Cibodas Sari
                DB::table('regionables')->insert(['region_id'=>16, 'regionable_id'=>1531, 'regionable_type'=>'village']); //Uwung Jaya
                DB::table('regions')->insert(['id'=>17, 'parent'=>14, 'code'=>'15139', 'type'=>'village', 'name'=>'Village 15139, Districts 1513, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>17, 'regionable_id'=>1154, 'regionable_type'=>'village']); //Panunggangan Barat
                DB::table('regionables')->insert(['region_id'=>17, 'regionable_id'=>1532, 'regionable_type'=>'village']); //Panunggangan Barat
            DB::table('regions')->insert(['id'=>18, 'parent'=>2, 'code'=>'1514', 'type'=>'districts', 'name'=>'Districts 1514, City 151, Province 1']);
            DB::table('regionables')->insert(['region_id'=>18, 'regionable_id'=>113, 'regionable_type'=>'districts']); //Cipondoh
            DB::table('regionables')->insert(['region_id'=>18, 'regionable_id'=>114, 'regionable_type'=>'districts']); //Pinang (penang)
            DB::table('regionables')->insert(['region_id'=>18, 'regionable_id'=>155, 'regionable_type'=>'districts']); //Cipondoh
            DB::table('regionables')->insert(['region_id'=>18, 'regionable_id'=>156, 'regionable_type'=>'districts']); //Pinang (penang)
                DB::table('regions')->insert(['id'=>19, 'parent'=>18, 'code'=>'15142', 'type'=>'village', 'name'=>'Village 15142, Districts 1514, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>19, 'regionable_id'=>1165, 'regionable_type'=>'village']); //Cipete
                DB::table('regionables')->insert(['region_id'=>19, 'regionable_id'=>1166, 'regionable_type'=>'village']); //Pakojan
                DB::table('regionables')->insert(['region_id'=>19, 'regionable_id'=>1543, 'regionable_type'=>'village']); //Cipete
                DB::table('regionables')->insert(['region_id'=>19, 'regionable_id'=>1544, 'regionable_type'=>'village']); //Pakojan
                DB::table('regions')->insert(['id'=>20, 'parent'=>18, 'code'=>'15143', 'type'=>'village', 'name'=>'Village 15143, Districts 1514, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>20, 'regionable_id'=>1167, 'regionable_type'=>'village']); //Panunggangan
                DB::table('regionables')->insert(['region_id'=>20, 'regionable_id'=>1168, 'regionable_type'=>'village']); //Panunggangan Timur
                DB::table('regionables')->insert(['region_id'=>20, 'regionable_id'=>1169, 'regionable_type'=>'village']); //Panunggangan Utara
                DB::table('regionables')->insert(['region_id'=>20, 'regionable_id'=>1545, 'regionable_type'=>'village']); //Panunggangan
                DB::table('regionables')->insert(['region_id'=>20, 'regionable_id'=>1546, 'regionable_type'=>'village']); //Panunggangan Timur
                DB::table('regionables')->insert(['region_id'=>20, 'regionable_id'=>1547, 'regionable_type'=>'village']); //Panunggangan Utara
                DB::table('regions')->insert(['id'=>21, 'parent'=>18, 'code'=>'15144', 'type'=>'village', 'name'=>'Village 15144, Districts 1514, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>21, 'regionable_id'=>1170, 'regionable_type'=>'village']); //Kunciran
                DB::table('regionables')->insert(['region_id'=>21, 'regionable_id'=>1171, 'regionable_type'=>'village']); //Kunciran Indah
                DB::table('regionables')->insert(['region_id'=>21, 'regionable_id'=>1172, 'regionable_type'=>'village']); //Kunciran Jaya
                DB::table('regionables')->insert(['region_id'=>21, 'regionable_id'=>1548, 'regionable_type'=>'village']); //Kunciran
                DB::table('regionables')->insert(['region_id'=>21, 'regionable_id'=>1549, 'regionable_type'=>'village']); //Kunciran Indah
                DB::table('regionables')->insert(['region_id'=>21, 'regionable_id'=>1550, 'regionable_type'=>'village']); //Kunciran Jaya
                DB::table('regions')->insert(['id'=>22, 'parent'=>18, 'code'=>'15145', 'type'=>'village', 'name'=>'Village 15145, Districts 1514, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>22, 'regionable_id'=>1173, 'regionable_type'=>'village']); //Nerogtog
                DB::table('regionables')->insert(['region_id'=>22, 'regionable_id'=>1174, 'regionable_type'=>'village']); //Pinang
                DB::table('regionables')->insert(['region_id'=>22, 'regionable_id'=>1175, 'regionable_type'=>'village']); //Sudimara Pinang
                DB::table('regionables')->insert(['region_id'=>22, 'regionable_id'=>1551, 'regionable_type'=>'village']); //Nerogtog
                DB::table('regionables')->insert(['region_id'=>22, 'regionable_id'=>1552, 'regionable_type'=>'village']); //Pinang
                DB::table('regionables')->insert(['region_id'=>22, 'regionable_id'=>1553, 'regionable_type'=>'village']); //Sudimara Pinang
            DB::table('regions')->insert(['id'=>23, 'parent'=>2, 'code'=>'1515', 'type'=>'districts', 'name'=>'Districts 1515, City 151, Province 1']);
            DB::table('regionables')->insert(['region_id'=>23, 'regionable_id'=>115, 'regionable_type'=>'districts']); //Ciledug
            DB::table('regionables')->insert(['region_id'=>23, 'regionable_id'=>116, 'regionable_type'=>'districts']); //Larangan
            DB::table('regionables')->insert(['region_id'=>23, 'regionable_id'=>117, 'regionable_type'=>'districts']); //Karang Tengah
            DB::table('regionables')->insert(['region_id'=>23, 'regionable_id'=>118, 'regionable_type'=>'districts']); //Pagedangan
            DB::table('regionables')->insert(['region_id'=>23, 'regionable_id'=>157, 'regionable_type'=>'districts']); //Ciledug
            DB::table('regionables')->insert(['region_id'=>23, 'regionable_id'=>158, 'regionable_type'=>'districts']); //Larangan
            DB::table('regionables')->insert(['region_id'=>23, 'regionable_id'=>159, 'regionable_type'=>'districts']); //Karang Tengah
            DB::table('regionables')->insert(['region_id'=>23, 'regionable_id'=>160, 'regionable_type'=>'districts']); //Pagedangan
                DB::table('regions')->insert(['id'=>24, 'parent'=>23, 'code'=>'15157', 'type'=>'village', 'name'=>'Village 15157, Districts 1515, City 151, Province 1']);
                DB::table('regionables')->insert(['region_id'=>24, 'regionable_id'=>1192, 'regionable_type'=>'village']); //Karang Mulya
                DB::table('regionables')->insert(['region_id'=>24, 'regionable_id'=>1193, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>24, 'regionable_id'=>1194, 'regionable_type'=>'village']); //Karang Timur
                DB::table('regionables')->insert(['region_id'=>24, 'regionable_id'=>1199, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>24, 'regionable_id'=>1570, 'regionable_type'=>'village']); //Karang Mulya
                DB::table('regionables')->insert(['region_id'=>24, 'regionable_id'=>1571, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>24, 'regionable_id'=>1572, 'regionable_type'=>'village']); //Karang Timur
                DB::table('regionables')->insert(['region_id'=>24, 'regionable_id'=>1577, 'regionable_type'=>'village']); //Karang Tengah
        DB::table('regions')->insert(['id'=>25, 'parent'=>1, 'code'=>'152', 'type'=>'city', 'name'=>'City 152, Province 1']);
        DB::table('regionables')->insert(['region_id'=>25, 'regionable_id'=>17, 'regionable_type'=>'city']); //Tangerang city
        DB::table('regionables')->insert(['region_id'=>25, 'regionable_id'=>18, 'regionable_type'=>'city']); //Tangerang regencies
        DB::table('regionables')->insert(['region_id'=>25, 'regionable_id'=>19, 'regionable_type'=>'city']); //Tangerang Selatan city
            DB::table('regions')->insert(['id'=>26, 'parent'=>25, 'code'=>'1522', 'type'=>'districts', 'name'=>'Districts 1522, City 152, Province 1']);
            DB::table('regionables')->insert(['region_id'=>26, 'regionable_id'=>189, 'regionable_type'=>'districts']); //Pondok Aren
                DB::table('regions')->insert(['id'=>27, 'parent'=>26, 'code'=>'15220', 'type'=>'village', 'name'=>'Village 15220, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>27, 'regionable_id'=>1851, 'regionable_type'=>'village']); //Pondok Jaya
                DB::table('regions')->insert(['id'=>28, 'parent'=>26, 'code'=>'15221', 'type'=>'village', 'name'=>'Village 15221, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>28, 'regionable_id'=>1852, 'regionable_type'=>'village']); //Pondok Betung
                DB::table('regions')->insert(['id'=>29, 'parent'=>26, 'code'=>'15222', 'type'=>'village', 'name'=>'Village 15222, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>29, 'regionable_id'=>1853, 'regionable_type'=>'village']); //Jurang Mangu Timur
                DB::table('regions')->insert(['id'=>30, 'parent'=>26, 'code'=>'15223', 'type'=>'village', 'name'=>'Village 15223, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>30, 'regionable_id'=>1854, 'regionable_type'=>'village']); //Jurang Mangu Barat
                DB::table('regions')->insert(['id'=>31, 'parent'=>26, 'code'=>'15224', 'type'=>'village', 'name'=>'Village 15224, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>31, 'regionable_id'=>1855, 'regionable_type'=>'village']); //Pondok Aren
                DB::table('regions')->insert(['id'=>32, 'parent'=>26, 'code'=>'15225', 'type'=>'village', 'name'=>'Village 15225, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>32, 'regionable_id'=>1856, 'regionable_type'=>'village']); //Pondok Karya
                DB::table('regions')->insert(['id'=>33, 'parent'=>26, 'code'=>'15226', 'type'=>'village', 'name'=>'Village 15226, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>33, 'regionable_id'=>1857, 'regionable_type'=>'village']); //Pondok Kacang Barat
                DB::table('regionables')->insert(['region_id'=>33, 'regionable_id'=>1858, 'regionable_type'=>'village']); //Pondok Kacang Timur
                DB::table('regions')->insert(['id'=>34, 'parent'=>26, 'code'=>'15227', 'type'=>'village', 'name'=>'Village 15227, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>34, 'regionable_id'=>1859, 'regionable_type'=>'village']); //Perigi Lama
                DB::table('regions')->insert(['id'=>35, 'parent'=>26, 'code'=>'15228', 'type'=>'village', 'name'=>'Village 15228, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>35, 'regionable_id'=>1860, 'regionable_type'=>'village']); //Perigi Baru
                DB::table('regions')->insert(['id'=>36, 'parent'=>26, 'code'=>'15229', 'type'=>'village', 'name'=>'Village 15229, Districts 1522, City 152, Province 1']);
                DB::table('regionables')->insert(['region_id'=>36, 'regionable_id'=>1861, 'regionable_type'=>'village']); //Pondok Pucung
        DB::table('regions')->insert(['id'=>37, 'parent'=>1, 'code'=>'153', 'type'=>'city', 'name'=>'City 153, Province 1']);
        DB::table('regionables')->insert(['region_id'=>37, 'regionable_id'=>17, 'regionable_type'=>'city']); //Tangerang city
        DB::table('regionables')->insert(['region_id'=>37, 'regionable_id'=>18, 'regionable_type'=>'city']); //Tangerang regencies
        DB::table('regionables')->insert(['region_id'=>37, 'regionable_id'=>19, 'regionable_type'=>'city']); //Tangerang Selatan city
            DB::table('regions')->insert(['id'=>38, 'parent'=>37, 'code'=>'1531', 'type'=>'districts', 'name'=>'Districts 1531, City 153, Province 1']);
            DB::table('regionables')->insert(['region_id'=>38, 'regionable_id'=>190, 'regionable_type'=>'districts']); //Serpong
            DB::table('regionables')->insert(['region_id'=>38, 'regionable_id'=>191, 'regionable_type'=>'districts']); //Setu
                DB::table('regions')->insert(['id'=>39, 'parent'=>38, 'code'=>'15312', 'type'=>'village', 'name'=>'Village 15312, Districts 1531, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>39, 'regionable_id'=>1871, 'regionable_type'=>'village']); //Kranggan
                DB::table('regions')->insert(['id'=>40, 'parent'=>38, 'code'=>'15313', 'type'=>'village', 'name'=>'Village 15313, Districts 1531, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>40, 'regionable_id'=>1872, 'regionable_type'=>'village']); //Kademangan
                DB::table('regions')->insert(['id'=>41, 'parent'=>38, 'code'=>'15314', 'type'=>'village', 'name'=>'Village 15314, Districts 1531, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>41, 'regionable_id'=>1873, 'regionable_type'=>'village']); //Muncul
                DB::table('regionables')->insert(['region_id'=>41, 'regionable_id'=>1874, 'regionable_type'=>'village']); //Setu
                DB::table('regions')->insert(['id'=>42, 'parent'=>38, 'code'=>'15315', 'type'=>'village', 'name'=>'Village 15315, Districts 1531, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>42, 'regionable_id'=>1875, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>42, 'regionable_id'=>1876, 'regionable_type'=>'village']); //Bakti Jaya
            DB::table('regions')->insert(['id'=>43, 'parent'=>37, 'code'=>'1532', 'type'=>'districts', 'name'=>'Districts 1532, City 153, Province 1']);
            DB::table('regionables')->insert(['region_id'=>43, 'regionable_id'=>190, 'regionable_type'=>'districts']); //Serpong
            DB::table('regionables')->insert(['region_id'=>43, 'regionable_id'=>192, 'regionable_type'=>'districts']); //Serpong Utara
                DB::table('regions')->insert(['id'=>44, 'parent'=>43, 'code'=>'15320', 'type'=>'village', 'name'=>'Village 15320, Districts 1532, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>44, 'regionable_id'=>1877, 'regionable_type'=>'village']); //Lengkong Karya
                DB::table('regionables')->insert(['region_id'=>44, 'regionable_id'=>1878, 'regionable_type'=>'village']); //Pakualam
                DB::table('regions')->insert(['id'=>45, 'parent'=>43, 'code'=>'15323', 'type'=>'village', 'name'=>'Village 15323, Districts 1532, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>45, 'regionable_id'=>1879, 'regionable_type'=>'village']); //Jelupang
                DB::table('regions')->insert(['id'=>46, 'parent'=>43, 'code'=>'15324', 'type'=>'village', 'name'=>'Village 15324, Districts 1532, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>46, 'regionable_id'=>1880, 'regionable_type'=>'village']); //Paku Jaya
                DB::table('regions')->insert(['id'=>47, 'parent'=>43, 'code'=>'15325', 'type'=>'village', 'name'=>'Village 15325, Districts 1532, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>47, 'regionable_id'=>1881, 'regionable_type'=>'village']); //Pakulonan
                DB::table('regions')->insert(['id'=>48, 'parent'=>43, 'code'=>'15326', 'type'=>'village', 'name'=>'Village 15326, Districts 1532, City 153, Province 1']);
                DB::table('regionables')->insert(['region_id'=>48, 'regionable_id'=>1882, 'regionable_type'=>'village']); //Pondok Jagung
                DB::table('regionables')->insert(['region_id'=>48, 'regionable_id'=>1883, 'regionable_type'=>'village']); //Pondok Jagung Timur
        DB::table('regions')->insert(['id'=>49, 'parent'=>1, 'code'=>'154', 'type'=>'city', 'name'=>'City 154, Province 1']);
        DB::table('regionables')->insert(['region_id'=>49, 'regionable_id'=>19, 'regionable_type'=>'city']); //Tangerang Selatan city
            DB::table('regions')->insert(['id'=>50, 'parent'=>49, 'code'=>'1541', 'type'=>'districts', 'name'=>'Districts 1541, City 154, Province 1']);
            DB::table('regionables')->insert(['region_id'=>50, 'regionable_id'=>193, 'regionable_type'=>'districts']); //Ciputat
            DB::table('regionables')->insert(['region_id'=>50, 'regionable_id'=>194, 'regionable_type'=>'districts']); //Ciputat Timur
            DB::table('regionables')->insert(['region_id'=>50, 'regionable_id'=>195, 'regionable_type'=>'districts']); //Pamulang
                DB::table('regions')->insert(['id'=>51, 'parent'=>50, 'code'=>'15415', 'type'=>'village', 'name'=>'Village 15415, Districts 1541, City 154, Province 1']);
                DB::table('regionables')->insert(['region_id'=>51, 'regionable_id'=>1897, 'regionable_type'=>'village']); //Bambu Apus
                DB::table('regionables')->insert(['region_id'=>51, 'regionable_id'=>1898, 'regionable_type'=>'village']); //Kedaung
                DB::table('regions')->insert(['id'=>52, 'parent'=>50, 'code'=>'15416', 'type'=>'village', 'name'=>'Village 15416, Districts 1541, City 154, Province 1']);
                DB::table('regionables')->insert(['region_id'=>52, 'regionable_id'=>1899, 'regionable_type'=>'village']); //Pondok Benda
                DB::table('regions')->insert(['id'=>53, 'parent'=>50, 'code'=>'15417', 'type'=>'village', 'name'=>'Village 15417, Districts 1541, City 154, Province 1']);
                DB::table('regionables')->insert(['region_id'=>53, 'regionable_id'=>1900, 'regionable_type'=>'village']); //Pamulang Barat
                DB::table('regionables')->insert(['region_id'=>53, 'regionable_id'=>1901, 'regionable_type'=>'village']); //Pamulang Timur
                DB::table('regions')->insert(['id'=>54, 'parent'=>50, 'code'=>'15418', 'type'=>'village', 'name'=>'Village 15418, Districts 1541, City 154, Province 1']);
                DB::table('regionables')->insert(['region_id'=>54, 'regionable_id'=>1902, 'regionable_type'=>'village']); //Benda Baru
                DB::table('regionables')->insert(['region_id'=>54, 'regionable_id'=>1903, 'regionable_type'=>'village']); //Pondok Cabe Ilir
                DB::table('regionables')->insert(['region_id'=>54, 'regionable_id'=>1904, 'regionable_type'=>'village']); //Pondok Cabe Udik
        DB::table('regions')->insert(['id'=>55, 'parent'=>1, 'code'=>'155', 'type'=>'city', 'name'=>'City 155, Province 1']);
        DB::table('regionables')->insert(['region_id'=>55, 'regionable_id'=>17, 'regionable_type'=>'city']); //Tangerang city
        DB::table('regionables')->insert(['region_id'=>55, 'regionable_id'=>18, 'regionable_type'=>'city']); //Tangerang regencies
            DB::table('regions')->insert(['id'=>56, 'parent'=>55, 'code'=>'1551', 'type'=>'districts', 'name'=>'Districts 1551, City 155, Province 1']);
            DB::table('regionables')->insert(['region_id'=>56, 'regionable_id'=>121, 'regionable_type'=>'districts']); //Teluknaga
            DB::table('regionables')->insert(['region_id'=>56, 'regionable_id'=>163, 'regionable_type'=>'districts']); //Teluknaga
                DB::table('regions')->insert(['id'=>57, 'parent'=>56, 'code'=>'15510', 'type'=>'village', 'name'=>'Village 15510, Districts 1551, City 155, Province 1']);
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1226, 'regionable_type'=>'village']); //Babakan Asem
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1227, 'regionable_type'=>'village']); //Bojong Renged
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1228, 'regionable_type'=>'village']); //Kampung Besar
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1229, 'regionable_type'=>'village']); //Kampung Melayu Barat
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1230, 'regionable_type'=>'village']); //Kampung Melayu Timur
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1231, 'regionable_type'=>'village']); //Kebon Cau
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1232, 'regionable_type'=>'village']); //Lemo
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1233, 'regionable_type'=>'village']); //Muara
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1234, 'regionable_type'=>'village']); //Pangkalan
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1235, 'regionable_type'=>'village']); //Tanjung Burung
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1236, 'regionable_type'=>'village']); //Tanjung Pasir
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1237, 'regionable_type'=>'village']); //Tegal Angus
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1238, 'regionable_type'=>'village']); //Teluk Naga
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1604, 'regionable_type'=>'village']); //Babakan Asem
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1605, 'regionable_type'=>'village']); //Bojong Renged
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1606, 'regionable_type'=>'village']); //Kampung Besar
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1607, 'regionable_type'=>'village']); //Kampung Melayu Barat
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1608, 'regionable_type'=>'village']); //Kampung Melayu Timur
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1609, 'regionable_type'=>'village']); //Kebon Cau
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1610, 'regionable_type'=>'village']); //Lemo
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1611, 'regionable_type'=>'village']); //Muara
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1612, 'regionable_type'=>'village']); //Pangkalan
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1613, 'regionable_type'=>'village']); //Tanjung Burung
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1614, 'regionable_type'=>'village']); //Tanjung Pasir
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1615, 'regionable_type'=>'village']); //Tegal Angus
                DB::table('regionables')->insert(['region_id'=>57, 'regionable_id'=>1616, 'regionable_type'=>'village']); //Teluk Naga
            DB::table('regions')->insert(['id'=>58, 'parent'=>55, 'code'=>'1552', 'type'=>'districts', 'name'=>'Districts 1552, City 155, Province 1']);
            DB::table('regionables')->insert(['region_id'=>58, 'regionable_id'=>122, 'regionable_type'=>'districts']); //Sepatan Timur
            DB::table('regionables')->insert(['region_id'=>58, 'regionable_id'=>123, 'regionable_type'=>'districts']); //Sepatan
            DB::table('regionables')->insert(['region_id'=>58, 'regionable_id'=>164, 'regionable_type'=>'districts']); //Sepatan Timur
            DB::table('regionables')->insert(['region_id'=>58, 'regionable_id'=>165, 'regionable_type'=>'districts']); //Sepatan
                DB::table('regions')->insert(['id'=>59, 'parent'=>58, 'code'=>'15520', 'type'=>'village', 'name'=>'Village 15520, Districts 1552, City 155, Province 1']);
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1239, 'regionable_type'=>'village']); //Gempol Sari
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1240, 'regionable_type'=>'village']); //Jati Mulya
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1241, 'regionable_type'=>'village']); //Kampung Kelor
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1242, 'regionable_type'=>'village']); //Kedaung Barat
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1243, 'regionable_type'=>'village']); //Lebak Wangi
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1244, 'regionable_type'=>'village']); //Pondok Kelor
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1245, 'regionable_type'=>'village']); //Sangiang
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1246, 'regionable_type'=>'village']); //Tanah Merah
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1247, 'regionable_type'=>'village']); //Karet
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1248, 'regionable_type'=>'village']); //Kayu Agung
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1249, 'regionable_type'=>'village']); //Kayu Bongkok
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1250, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1251, 'regionable_type'=>'village']); //Pisangan Jaya
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1252, 'regionable_type'=>'village']); //Pondok Jaya
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1253, 'regionable_type'=>'village']); //Sarakan
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1254, 'regionable_type'=>'village']); //Sepatan
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1617, 'regionable_type'=>'village']); //Gempol Sari
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1618, 'regionable_type'=>'village']); //Jati Mulya
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1619, 'regionable_type'=>'village']); //Kampung Kelor
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1620, 'regionable_type'=>'village']); //Kedaung Barat
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1621, 'regionable_type'=>'village']); //Lebak Wangi
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1622, 'regionable_type'=>'village']); //Pondok Kelor
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1623, 'regionable_type'=>'village']); //Sangiang
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1624, 'regionable_type'=>'village']); //Tanah Merah
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1625, 'regionable_type'=>'village']); //Karet
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1626, 'regionable_type'=>'village']); //Kayu Agung
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1627, 'regionable_type'=>'village']); //Kayu Bongkok
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1628, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1629, 'regionable_type'=>'village']); //Pisangan Jaya
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1630, 'regionable_type'=>'village']); //Pondok Jaya
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1631, 'regionable_type'=>'village']); //Sarakan
                DB::table('regionables')->insert(['region_id'=>59, 'regionable_id'=>1632, 'regionable_type'=>'village']); //Sepatan
            DB::table('regions')->insert(['id'=>60, 'parent'=>55, 'code'=>'1553', 'type'=>'districts', 'name'=>'Districts 1553, City 155, Province 1']);
            DB::table('regionables')->insert(['region_id'=>60, 'regionable_id'=>124, 'regionable_type'=>'districts']); //Mauk
            DB::table('regionables')->insert(['region_id'=>60, 'regionable_id'=>125, 'regionable_type'=>'districts']); //Sukadiri
            DB::table('regionables')->insert(['region_id'=>60, 'regionable_id'=>126, 'regionable_type'=>'districts']); //Kemiri
            DB::table('regionables')->insert(['region_id'=>60, 'regionable_id'=>166, 'regionable_type'=>'districts']); //Mauk
            DB::table('regionables')->insert(['region_id'=>60, 'regionable_id'=>167, 'regionable_type'=>'districts']); //Sukadiri
            DB::table('regionables')->insert(['region_id'=>60, 'regionable_id'=>168, 'regionable_type'=>'districts']); //Kemiri
                DB::table('regions')->insert(['id'=>61, 'parent'=>60, 'code'=>'15530', 'type'=>'village', 'name'=>'Village 15530, Districts 1553, City 155, Province 1']);
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1255, 'regionable_type'=>'village']); //Banyu Asih
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1256, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1257, 'regionable_type'=>'village']); //Jati Waringin
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1258, 'regionable_type'=>'village']); //Kedung Dalem
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1259, 'regionable_type'=>'village']); //Ketapang
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1260, 'regionable_type'=>'village']); //Marga Mulya
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1261, 'regionable_type'=>'village']); //Mauk Barat
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1262, 'regionable_type'=>'village']); //Mauk Timur
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1263, 'regionable_type'=>'village']); //Sasak
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1264, 'regionable_type'=>'village']); //Tanjung Anom
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1265, 'regionable_type'=>'village']); //Tegal Kunir Kidul
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1266, 'regionable_type'=>'village']); //Tegal Kunir Lor
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1267, 'regionable_type'=>'village']); //Buaran Jati
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1268, 'regionable_type'=>'village']); //Gintung
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1269, 'regionable_type'=>'village']); //Karang Serang
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1270, 'regionable_type'=>'village']); //Kosambi
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1271, 'regionable_type'=>'village']); //Mekar Kondang
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1272, 'regionable_type'=>'village']); //Pekayon
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1273, 'regionable_type'=>'village']); //Rawa Kidang
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1274, 'regionable_type'=>'village']); //Sukadiri
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1275, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1276, 'regionable_type'=>'village']); //Kemiri
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1277, 'regionable_type'=>'village']); //Kjlebet (kelebet)
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1278, 'regionable_type'=>'village']); //Legok Sula Maju
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1279, 'regionable_type'=>'village']); //Lontar
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1280, 'regionable_type'=>'village']); //Patra Manggala
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1281, 'regionable_type'=>'village']); //Ranca Labuh
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1633, 'regionable_type'=>'village']); //Banyu Asih
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1634, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1635, 'regionable_type'=>'village']); //Jati Waringin
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1636, 'regionable_type'=>'village']); //Kedung Dalem
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1637, 'regionable_type'=>'village']); //Ketapang
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1638, 'regionable_type'=>'village']); //Marga Mulya
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1639, 'regionable_type'=>'village']); //Mauk Barat
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1640, 'regionable_type'=>'village']); //Mauk Timur
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1641, 'regionable_type'=>'village']); //Sasak
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1642, 'regionable_type'=>'village']); //Tanjung Anom
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1643, 'regionable_type'=>'village']); //Tegal Kunir Kidul
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1644, 'regionable_type'=>'village']); //Tegal Kunir Lor
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1645, 'regionable_type'=>'village']); //Buaran Jati
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1646, 'regionable_type'=>'village']); //Gintung
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1647, 'regionable_type'=>'village']); //Karang Serang
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1648, 'regionable_type'=>'village']); //Kosambi
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1649, 'regionable_type'=>'village']); //Mekar Kondang
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1650, 'regionable_type'=>'village']); //Pekayon
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1651, 'regionable_type'=>'village']); //Rawa Kidang
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1652, 'regionable_type'=>'village']); //Sukadiri
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1653, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1654, 'regionable_type'=>'village']); //Kemiri
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1655, 'regionable_type'=>'village']); //Kjlebet (kelebet)
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1656, 'regionable_type'=>'village']); //Legok Sula Maju
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1657, 'regionable_type'=>'village']); //Lontar
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1658, 'regionable_type'=>'village']); //Patra Manggala
                DB::table('regionables')->insert(['region_id'=>61, 'regionable_id'=>1659, 'regionable_type'=>'village']); //Ranca Labuh
            DB::table('regions')->insert(['id'=>62, 'parent'=>55, 'code'=>'1554', 'type'=>'districts', 'name'=>'Districts 1554, City 155, Province 1']);
            DB::table('regionables')->insert(['region_id'=>62, 'regionable_id'=>127, 'regionable_type'=>'districts']); //Sindang Jaya
            DB::table('regionables')->insert(['region_id'=>62, 'regionable_id'=>128, 'regionable_type'=>'districts']); //Rajeg
            DB::table('regionables')->insert(['region_id'=>62, 'regionable_id'=>169, 'regionable_type'=>'districts']); //Sindang Jaya
            DB::table('regionables')->insert(['region_id'=>62, 'regionable_id'=>170, 'regionable_type'=>'districts']); //Rajeg
                DB::table('regions')->insert(['id'=>63, 'parent'=>62, 'code'=>'15540', 'type'=>'village', 'name'=>'Village 15540, Districts 1554, City 155, Province 1']);
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1282, 'regionable_type'=>'village']); //Badak Anom
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1289, 'regionable_type'=>'village']); //Daon
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1290, 'regionable_type'=>'village']); //Jambu Karya
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1291, 'regionable_type'=>'village']); //Lembang Sari
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1292, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1293, 'regionable_type'=>'village']); //Pangarengan
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1294, 'regionable_type'=>'village']); //Rajeg
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1295, 'regionable_type'=>'village']); //Rajegmulya
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1296, 'regionable_type'=>'village']); //Ranca Bango
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1297, 'regionable_type'=>'village']); //Suka Manah
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1298, 'regionable_type'=>'village']); //Suka Sari
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1299, 'regionable_type'=>'village']); //Suka Tani
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1300, 'regionable_type'=>'village']); //Tanjakan
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1301, 'regionable_type'=>'village']); //Tanjakan Mekar
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1660, 'regionable_type'=>'village']); //Badak Anom
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1667, 'regionable_type'=>'village']); //Daon
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1668, 'regionable_type'=>'village']); //Jambu Karya
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1669, 'regionable_type'=>'village']); //Lembang Sari
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1670, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1671, 'regionable_type'=>'village']); //Pangarengan
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1672, 'regionable_type'=>'village']); //Rajeg
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1673, 'regionable_type'=>'village']); //Rajegmulya
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1674, 'regionable_type'=>'village']); //Ranca Bango
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1675, 'regionable_type'=>'village']); //Suka Manah
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1676, 'regionable_type'=>'village']); //Suka Sari
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1677, 'regionable_type'=>'village']); //Suka Tani
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1678, 'regionable_type'=>'village']); //Tanjakan
                DB::table('regionables')->insert(['region_id'=>63, 'regionable_id'=>1679, 'regionable_type'=>'village']); //Tanjakan Mekar
            DB::table('regions')->insert(['id'=>64, 'parent'=>55, 'code'=>'1555', 'type'=>'districts', 'name'=>'Districts 1555, City 155, Province 1']);
            DB::table('regionables')->insert(['region_id'=>64, 'regionable_id'=>129, 'regionable_type'=>'districts']); //Kronjo
            DB::table('regionables')->insert(['region_id'=>64, 'regionable_id'=>130, 'regionable_type'=>'districts']); //Mekar Baru
            DB::table('regionables')->insert(['region_id'=>64, 'regionable_id'=>171, 'regionable_type'=>'districts']); //Kronjo
            DB::table('regionables')->insert(['region_id'=>64, 'regionable_id'=>172, 'regionable_type'=>'districts']); //Mekar Baru
                DB::table('regions')->insert(['id'=>65, 'parent'=>64, 'code'=>'15550', 'type'=>'village', 'name'=>'Village 15550, Districts 1555, City 155, Province 1']);
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1302, 'regionable_type'=>'village']); //Bakung
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1303, 'regionable_type'=>'village']); //Blukbuk
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1304, 'regionable_type'=>'village']); //Cirumpak
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1305, 'regionable_type'=>'village']); //Kronjo
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1306, 'regionable_type'=>'village']); //Muncung
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1307, 'regionable_type'=>'village']); //Pagedangan Ilir
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1308, 'regionable_type'=>'village']); //Pagedangan Udik
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1309, 'regionable_type'=>'village']); //Pagenjahan
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1310, 'regionable_type'=>'village']); //Pasilian
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1311, 'regionable_type'=>'village']); //Pasir
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1312, 'regionable_type'=>'village']); //Cijeruk
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1313, 'regionable_type'=>'village']); //Ganda Ria
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1314, 'regionable_type'=>'village']); //Jenggot
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1315, 'regionable_type'=>'village']); //Kedaung
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1316, 'regionable_type'=>'village']); //Klutuk
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1317, 'regionable_type'=>'village']); //Kosambi Dalam
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1318, 'regionable_type'=>'village']); //Mekar Baru
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1319, 'regionable_type'=>'village']); //Waliwis
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1680, 'regionable_type'=>'village']); //Bakung
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1681, 'regionable_type'=>'village']); //Blukbuk
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1682, 'regionable_type'=>'village']); //Cirumpak
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1683, 'regionable_type'=>'village']); //Kronjo
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1684, 'regionable_type'=>'village']); //Muncung
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1685, 'regionable_type'=>'village']); //Pagedangan Ilir
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1686, 'regionable_type'=>'village']); //Pagedangan Udik
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1687, 'regionable_type'=>'village']); //Pagenjahan
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1688, 'regionable_type'=>'village']); //Pasilian
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1689, 'regionable_type'=>'village']); //Pasir
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1690, 'regionable_type'=>'village']); //Cijeruk
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1691, 'regionable_type'=>'village']); //Ganda Ria
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1692, 'regionable_type'=>'village']); //Jenggot
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1693, 'regionable_type'=>'village']); //Kedaung
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1694, 'regionable_type'=>'village']); //Klutuk
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1695, 'regionable_type'=>'village']); //Kosambi Dalam
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1696, 'regionable_type'=>'village']); //Mekar Baru
                DB::table('regionables')->insert(['region_id'=>65, 'regionable_id'=>1697, 'regionable_type'=>'village']); //Waliwis
            DB::table('regions')->insert(['id'=>66, 'parent'=>55, 'code'=>'1556', 'type'=>'districts', 'name'=>'Districts 1556, City 155, Province 1']);
            DB::table('regionables')->insert(['region_id'=>66, 'regionable_id'=>127, 'regionable_type'=>'districts']); //Sindang Jaya
            DB::table('regionables')->insert(['region_id'=>66, 'regionable_id'=>131, 'regionable_type'=>'districts']); //Pasar Kemis
            DB::table('regionables')->insert(['region_id'=>66, 'regionable_id'=>169, 'regionable_type'=>'districts']); //Sindang Jaya
            DB::table('regionables')->insert(['region_id'=>66, 'regionable_id'=>173, 'regionable_type'=>'districts']); //Pasar Kemis
                DB::table('regions')->insert(['id'=>67, 'parent'=>66, 'code'=>'15560', 'type'=>'village', 'name'=>'Village 15560, Districts 1556, City 155, Province 1']);
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1283, 'regionable_type'=>'village']); //Sindang Asih
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1284, 'regionable_type'=>'village']); //Sindang Jaya
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1285, 'regionable_type'=>'village']); //Sindang Panon
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1286, 'regionable_type'=>'village']); //Sindang Sono
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1287, 'regionable_type'=>'village']); //Suka Harja
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1288, 'regionable_type'=>'village']); //Wana Kerta
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1320, 'regionable_type'=>'village']); //Gelam Jaya
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1321, 'regionable_type'=>'village']); //Kuta Baru
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1322, 'regionable_type'=>'village']); //Kuta Bumi
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1323, 'regionable_type'=>'village']); //Kuta Jaya
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1324, 'regionable_type'=>'village']); //Pangadegan
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1325, 'regionable_type'=>'village']); //Pasar Kemis
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1326, 'regionable_type'=>'village']); //Sindang Sari
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1327, 'regionable_type'=>'village']); //Sukaasih
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1328, 'regionable_type'=>'village']); //Sukamantri
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1661, 'regionable_type'=>'village']); //Sindang Asih
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1662, 'regionable_type'=>'village']); //Sindang Jaya
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1663, 'regionable_type'=>'village']); //Sindang Panon
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1664, 'regionable_type'=>'village']); //Sindang Sono
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1665, 'regionable_type'=>'village']); //Suka Harja
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1666, 'regionable_type'=>'village']); //Wana Kerta
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1698, 'regionable_type'=>'village']); //Gelam Jaya
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1699, 'regionable_type'=>'village']); //Kuta Baru
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1700, 'regionable_type'=>'village']); //Kuta Bumi
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1701, 'regionable_type'=>'village']); //Kuta Jaya
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1702, 'regionable_type'=>'village']); //Pangadegan
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1703, 'regionable_type'=>'village']); //Pasar Kemis
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1704, 'regionable_type'=>'village']); //Sindang Sari
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1705, 'regionable_type'=>'village']); //Sukaasih
                DB::table('regionables')->insert(['region_id'=>67, 'regionable_id'=>1706, 'regionable_type'=>'village']); //Sukamantri
            DB::table('regions')->insert(['id'=>68, 'parent'=>55, 'code'=>'1557', 'type'=>'districts', 'name'=>'Districts 1557, City 155, Province 1']);
            DB::table('regionables')->insert(['region_id'=>68, 'regionable_id'=>132, 'regionable_type'=>'districts']); //Pakuhaji
            DB::table('regionables')->insert(['region_id'=>68, 'regionable_id'=>174, 'regionable_type'=>'districts']); //Pakuhaji
                DB::table('regions')->insert(['id'=>69, 'parent'=>68, 'code'=>'15570', 'type'=>'village', 'name'=>'Village 15570, Districts 1557, City 155, Province 1']);
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1329, 'regionable_type'=>'village']); //Buaran Bambu
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1330, 'regionable_type'=>'village']); //Buaran Mangga
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1331, 'regionable_type'=>'village']); //Bunisari (bonasari)
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1332, 'regionable_type'=>'village']); //Gaga
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1333, 'regionable_type'=>'village']); //Kalibaru
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1334, 'regionable_type'=>'village']); //Kiara Payung
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1335, 'regionable_type'=>'village']); //Kohod
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1336, 'regionable_type'=>'village']); //Kramat
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1337, 'regionable_type'=>'village']); //Laksana
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1338, 'regionable_type'=>'village']); //Paku Alam
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1339, 'regionable_type'=>'village']); //Pakuhaji
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1340, 'regionable_type'=>'village']); //Rawa Boni
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1341, 'regionable_type'=>'village']); //Sukawali
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1342, 'regionable_type'=>'village']); //Surya Bahari
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1707, 'regionable_type'=>'village']); //Buaran Bambu
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1708, 'regionable_type'=>'village']); //Buaran Mangga
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1709, 'regionable_type'=>'village']); //Bunisari (bonasari)
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1710, 'regionable_type'=>'village']); //Gaga
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1711, 'regionable_type'=>'village']); //Kalibaru
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1712, 'regionable_type'=>'village']); //Kiara Payung
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1713, 'regionable_type'=>'village']); //Kohod
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1714, 'regionable_type'=>'village']); //Kramat
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1715, 'regionable_type'=>'village']); //Laksana
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1716, 'regionable_type'=>'village']); //Paku Alam
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1717, 'regionable_type'=>'village']); //Pakuhaji
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1718, 'regionable_type'=>'village']); //Rawa Boni
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1719, 'regionable_type'=>'village']); //Sukawali
                DB::table('regionables')->insert(['region_id'=>69, 'regionable_id'=>1720, 'regionable_type'=>'village']); //Surya Bahari
        DB::table('regions')->insert(['id'=>70, 'parent'=>1, 'code'=>'156', 'type'=>'city', 'name'=>'City 156, Province 1']);
        DB::table('regionables')->insert(['region_id'=>70, 'regionable_id'=>17, 'regionable_type'=>'city']); //Tangerang city
        DB::table('regionables')->insert(['region_id'=>70, 'regionable_id'=>18, 'regionable_type'=>'city']); //Tangerang regencies
            DB::table('regions')->insert(['id'=>71, 'parent'=>70, 'code'=>'1561', 'type'=>'districts', 'name'=>'Districts 1561, City 156, Province 1']);
            DB::table('regionables')->insert(['region_id'=>71, 'regionable_id'=>133, 'regionable_type'=>'districts']); //Balaraja
            DB::table('regionables')->insert(['region_id'=>71, 'regionable_id'=>134, 'regionable_type'=>'districts']); //Sukamulya
            DB::table('regionables')->insert(['region_id'=>71, 'regionable_id'=>135, 'regionable_type'=>'districts']); //Jayanti
            DB::table('regionables')->insert(['region_id'=>71, 'regionable_id'=>175, 'regionable_type'=>'districts']); //Balaraja
            DB::table('regionables')->insert(['region_id'=>71, 'regionable_id'=>176, 'regionable_type'=>'districts']); //Sukamulya
            DB::table('regionables')->insert(['region_id'=>71, 'regionable_id'=>177, 'regionable_type'=>'districts']); //Jayanti
                DB::table('regions')->insert(['id'=>72, 'parent'=>71, 'code'=>'15610', 'type'=>'village', 'name'=>'Village 15610, Districts 1561, City 156, Province 1']);
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1343, 'regionable_type'=>'village']); //Balaraja
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1344, 'regionable_type'=>'village']); //Cangkudu
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1345, 'regionable_type'=>'village']); //Gembong
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1346, 'regionable_type'=>'village']); //Saga
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1347, 'regionable_type'=>'village']); //Sentul
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1348, 'regionable_type'=>'village']); //Sentul Jaya
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1349, 'regionable_type'=>'village']); //Suka Murni
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1350, 'regionable_type'=>'village']); //Talagasari
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1351, 'regionable_type'=>'village']); //Tobat
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1352, 'regionable_type'=>'village']); //Benda
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1353, 'regionable_type'=>'village']); //Bunar
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1354, 'regionable_type'=>'village']); //Buni Ayu
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1355, 'regionable_type'=>'village']); //Kali Asin
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1356, 'regionable_type'=>'village']); //Kubang
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1357, 'regionable_type'=>'village']); //Merak
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1358, 'regionable_type'=>'village']); //Parahu
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1359, 'regionable_type'=>'village']); //Suka Mulya
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1360, 'regionable_type'=>'village']); //Cikande
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1361, 'regionable_type'=>'village']); //Dang Deur
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1362, 'regionable_type'=>'village']); //Jayanti
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1363, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1364, 'regionable_type'=>'village']); //Pangkat
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1365, 'regionable_type'=>'village']); //Pasir Gintung
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1366, 'regionable_type'=>'village']); //Pasir Muncang
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1367, 'regionable_type'=>'village']); //Sumur Bandung
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1721, 'regionable_type'=>'village']); //Balaraja
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1722, 'regionable_type'=>'village']); //Cangkudu
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1723, 'regionable_type'=>'village']); //Gembong
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1724, 'regionable_type'=>'village']); //Saga
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1725, 'regionable_type'=>'village']); //Sentul
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1726, 'regionable_type'=>'village']); //Sentul Jaya
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1727, 'regionable_type'=>'village']); //Suka Murni
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1728, 'regionable_type'=>'village']); //Talagasari
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1729, 'regionable_type'=>'village']); //Tobat
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1730, 'regionable_type'=>'village']); //Benda
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1731, 'regionable_type'=>'village']); //Bunar
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1732, 'regionable_type'=>'village']); //Buni Ayu
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1733, 'regionable_type'=>'village']); //Kali Asin
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1734, 'regionable_type'=>'village']); //Kubang
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1735, 'regionable_type'=>'village']); //Merak
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1736, 'regionable_type'=>'village']); //Parahu
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1737, 'regionable_type'=>'village']); //Suka Mulya
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1738, 'regionable_type'=>'village']); //Cikande
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1739, 'regionable_type'=>'village']); //Dang Deur
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1740, 'regionable_type'=>'village']); //Jayanti
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1741, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1742, 'regionable_type'=>'village']); //Pangkat
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1743, 'regionable_type'=>'village']); //Pasir Gintung
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1744, 'regionable_type'=>'village']); //Pasir Muncang
                DB::table('regionables')->insert(['region_id'=>72, 'regionable_id'=>1745, 'regionable_type'=>'village']); //Sumur Bandung
            DB::table('regions')->insert(['id'=>73, 'parent'=>70, 'code'=>'1562', 'type'=>'districts', 'name'=>'Districts 1562, City 156, Province 1']);
            DB::table('regionables')->insert(['region_id'=>73, 'regionable_id'=>136, 'regionable_type'=>'districts']); //Gunung Kaler
            DB::table('regionables')->insert(['region_id'=>73, 'regionable_id'=>137, 'regionable_type'=>'districts']); //Kresek
            DB::table('regionables')->insert(['region_id'=>73, 'regionable_id'=>178, 'regionable_type'=>'districts']); //Gunung Kaler
            DB::table('regionables')->insert(['region_id'=>73, 'regionable_id'=>179, 'regionable_type'=>'districts']); //Kresek
                DB::table('regions')->insert(['id'=>74, 'parent'=>73, 'code'=>'15620', 'type'=>'village', 'name'=>'Village 15620, Districts 1562, City 156, Province 1']);
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1368, 'regionable_type'=>'village']); //Cibetok
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1369, 'regionable_type'=>'village']); //Cipaeh
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1370, 'regionable_type'=>'village']); //Gunung Kaler
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1371, 'regionable_type'=>'village']); //Kanda Wati
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1372, 'regionable_type'=>'village']); //Kedung
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1373, 'regionable_type'=>'village']); //Onyam
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1374, 'regionable_type'=>'village']); //Ranca Gede
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1375, 'regionable_type'=>'village']); //Sidoko
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1376, 'regionable_type'=>'village']); //Tamiang
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1377, 'regionable_type'=>'village']); //Jengkol
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1378, 'regionable_type'=>'village']); //Kemuning
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1379, 'regionable_type'=>'village']); //Koper
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1380, 'regionable_type'=>'village']); //Kresek
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1381, 'regionable_type'=>'village']); //Pasir Ampo
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1382, 'regionable_type'=>'village']); //Patra Sana
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1383, 'regionable_type'=>'village']); //Ranca Ilat
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1384, 'regionable_type'=>'village']); //Renged
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1385, 'regionable_type'=>'village']); //Talok
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1746, 'regionable_type'=>'village']); //Cibetok
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1747, 'regionable_type'=>'village']); //Cipaeh
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1748, 'regionable_type'=>'village']); //Gunung Kaler
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1749, 'regionable_type'=>'village']); //Kanda Wati
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1750, 'regionable_type'=>'village']); //Kedung
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1751, 'regionable_type'=>'village']); //Onyam
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1752, 'regionable_type'=>'village']); //Ranca Gede
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1753, 'regionable_type'=>'village']); //Sidoko
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1754, 'regionable_type'=>'village']); //Tamiang
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1755, 'regionable_type'=>'village']); //Jengkol
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1756, 'regionable_type'=>'village']); //Kemuning
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1757, 'regionable_type'=>'village']); //Koper
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1758, 'regionable_type'=>'village']); //Kresek
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1759, 'regionable_type'=>'village']); //Pasir Ampo
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1760, 'regionable_type'=>'village']); //Patra Sana
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1761, 'regionable_type'=>'village']); //Ranca Ilat
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1762, 'regionable_type'=>'village']); //Renged
                DB::table('regionables')->insert(['region_id'=>74, 'regionable_id'=>1763, 'regionable_type'=>'village']); //Talok
        DB::table('regions')->insert(['id'=>75, 'parent'=>1, 'code'=>'157', 'type'=>'city', 'name'=>'City 157, Province 1']);
        DB::table('regionables')->insert(['region_id'=>75, 'regionable_id'=>17, 'regionable_type'=>'city']); //Tangerang city
        DB::table('regionables')->insert(['region_id'=>75, 'regionable_id'=>18, 'regionable_type'=>'city']); //Tangerang regencies
            DB::table('regions')->insert(['id'=>76, 'parent'=>75, 'code'=>'1571', 'type'=>'districts', 'name'=>'Districts 1571, City 157, Province 1']);
            DB::table('regionables')->insert(['region_id'=>76, 'regionable_id'=>138, 'regionable_type'=>'districts']); //Cikupa
            DB::table('regionables')->insert(['region_id'=>76, 'regionable_id'=>139, 'regionable_type'=>'districts']); //Panongan
            DB::table('regionables')->insert(['region_id'=>76, 'regionable_id'=>180, 'regionable_type'=>'districts']); //Cikupa
            DB::table('regionables')->insert(['region_id'=>76, 'regionable_id'=>181, 'regionable_type'=>'districts']); //Panongan
                DB::table('regions')->insert(['id'=>77, 'parent'=>76, 'code'=>'15710', 'type'=>'village', 'name'=>'Village 15710, Districts 1571, City 157, Province 1']);
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1386, 'regionable_type'=>'village']); //Bitung Jaya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1387, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1388, 'regionable_type'=>'village']); //Budi Mulya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1389, 'regionable_type'=>'village']); //Bunder
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1390, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1391, 'regionable_type'=>'village']); //Cikupa
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1392, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1393, 'regionable_type'=>'village']); //Pasir Gadung
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1394, 'regionable_type'=>'village']); //Pasir Jaya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1395, 'regionable_type'=>'village']); //Suka Damai
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1396, 'regionable_type'=>'village']); //Suka Mulya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1397, 'regionable_type'=>'village']); //Suka Nagara
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1398, 'regionable_type'=>'village']); //Talaga
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1399, 'regionable_type'=>'village']); //Talaga Sari
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1400, 'regionable_type'=>'village']); //Ciakar
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1401, 'regionable_type'=>'village']); //Mekar Bakti
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1402, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1403, 'regionable_type'=>'village']); //Panongan
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1404, 'regionable_type'=>'village']); //Peusar
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1405, 'regionable_type'=>'village']); //Ranca Iyuh
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1406, 'regionable_type'=>'village']); //Ranca Kalapa
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1407, 'regionable_type'=>'village']); //Serdang Kulon
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1764, 'regionable_type'=>'village']); //Bitung Jaya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1765, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1766, 'regionable_type'=>'village']); //Budi Mulya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1767, 'regionable_type'=>'village']); //Bunder
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1768, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1769, 'regionable_type'=>'village']); //Cikupa
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1770, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1771, 'regionable_type'=>'village']); //Pasir Gadung
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1772, 'regionable_type'=>'village']); //Pasir Jaya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1773, 'regionable_type'=>'village']); //Suka Damai
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1774, 'regionable_type'=>'village']); //Suka Mulya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1775, 'regionable_type'=>'village']); //Suka Nagara
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1776, 'regionable_type'=>'village']); //Talaga
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1777, 'regionable_type'=>'village']); //Talaga Sari
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1778, 'regionable_type'=>'village']); //Ciakar
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1779, 'regionable_type'=>'village']); //Mekar Bakti
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1780, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1781, 'regionable_type'=>'village']); //Panongan
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1782, 'regionable_type'=>'village']); //Peusar
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1783, 'regionable_type'=>'village']); //Ranca Iyuh
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1784, 'regionable_type'=>'village']); //Ranca Kalapa
                DB::table('regionables')->insert(['region_id'=>77, 'regionable_id'=>1785, 'regionable_type'=>'village']); //Serdang Kulon
            DB::table('regions')->insert(['id'=>78, 'parent'=>75, 'code'=>'1572', 'type'=>'districts', 'name'=>'Districts 1572, City 157, Province 1']);
            DB::table('regionables')->insert(['region_id'=>78, 'regionable_id'=>140, 'regionable_type'=>'districts']); //Jambe
            DB::table('regionables')->insert(['region_id'=>78, 'regionable_id'=>141, 'regionable_type'=>'districts']); //Tigaraksa
            DB::table('regionables')->insert(['region_id'=>78, 'regionable_id'=>182, 'regionable_type'=>'districts']); //Jambe
            DB::table('regionables')->insert(['region_id'=>78, 'regionable_id'=>183, 'regionable_type'=>'districts']); //Tigaraksa
                DB::table('regions')->insert(['id'=>79, 'parent'=>78, 'code'=>'15720', 'type'=>'village', 'name'=>'Village 15720, Districts 1572, City 157, Province 1']);
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1408, 'regionable_type'=>'village']); //Ancol Pasir
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1409, 'regionable_type'=>'village']); //Daru
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1410, 'regionable_type'=>'village']); //Jambe
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1411, 'regionable_type'=>'village']); //Kutruk
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1412, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1413, 'regionable_type'=>'village']); //Pasir Barat
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1414, 'regionable_type'=>'village']); //Rancabuaya
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1415, 'regionable_type'=>'village']); //Suka Manah
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1416, 'regionable_type'=>'village']); //Taban
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1417, 'regionable_type'=>'village']); //Tipar Jaya (tiparraya)
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1418, 'regionable_type'=>'village']); //Bantar Panjang
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1419, 'regionable_type'=>'village']); //Cileles
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1420, 'regionable_type'=>'village']); //Cisereh
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1421, 'regionable_type'=>'village']); //Kadu Agung
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1422, 'regionable_type'=>'village']); //Marga Sari
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1423, 'regionable_type'=>'village']); //Mata Gara
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1424, 'regionable_type'=>'village']); //Pasir Bolang
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1425, 'regionable_type'=>'village']); //Pasir Nangka
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1426, 'regionable_type'=>'village']); //Pematang
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1427, 'regionable_type'=>'village']); //Pete
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1428, 'regionable_type'=>'village']); //Sodong
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1429, 'regionable_type'=>'village']); //Tapos
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1430, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1431, 'regionable_type'=>'village']); //Tigaraksa
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1786, 'regionable_type'=>'village']); //Ancol Pasir
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1787, 'regionable_type'=>'village']); //Daru
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1788, 'regionable_type'=>'village']); //Jambe
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1789, 'regionable_type'=>'village']); //Kutruk
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1790, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1791, 'regionable_type'=>'village']); //Pasir Barat
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1792, 'regionable_type'=>'village']); //Rancabuaya
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1793, 'regionable_type'=>'village']); //Suka Manah
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1794, 'regionable_type'=>'village']); //Taban
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1795, 'regionable_type'=>'village']); //Tipar Jaya (tiparraya)
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1796, 'regionable_type'=>'village']); //Bantar Panjang
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1797, 'regionable_type'=>'village']); //Cileles
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1798, 'regionable_type'=>'village']); //Cisereh
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1799, 'regionable_type'=>'village']); //Kadu Agung
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1800, 'regionable_type'=>'village']); //Marga Sari
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1801, 'regionable_type'=>'village']); //Mata Gara
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1802, 'regionable_type'=>'village']); //Pasir Bolang
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1803, 'regionable_type'=>'village']); //Pasir Nangka
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1804, 'regionable_type'=>'village']); //Pematang
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1805, 'regionable_type'=>'village']); //Pete
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1806, 'regionable_type'=>'village']); //Sodong
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1807, 'regionable_type'=>'village']); //Tapos
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1808, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regionables')->insert(['region_id'=>79, 'regionable_id'=>1809, 'regionable_type'=>'village']); //Tigaraksa
            DB::table('regions')->insert(['id'=>80, 'parent'=>75, 'code'=>'1573', 'type'=>'districts', 'name'=>'Districts 1573, City 157, Province 1']);
            DB::table('regionables')->insert(['region_id'=>80, 'regionable_id'=>142, 'regionable_type'=>'districts']); //Cisoka
            DB::table('regionables')->insert(['region_id'=>80, 'regionable_id'=>143, 'regionable_type'=>'districts']); //Solear
            DB::table('regionables')->insert(['region_id'=>80, 'regionable_id'=>184, 'regionable_type'=>'districts']); //Cisoka
            DB::table('regionables')->insert(['region_id'=>80, 'regionable_id'=>185, 'regionable_type'=>'districts']); //Solear
                DB::table('regions')->insert(['id'=>81, 'parent'=>80, 'code'=>'15730', 'type'=>'village', 'name'=>'Village 15730, Districts 1573, City 157, Province 1']);
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1432, 'regionable_type'=>'village']); //Bojongloa
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1433, 'regionable_type'=>'village']); //Carenang
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1434, 'regionable_type'=>'village']); //Caringin
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1435, 'regionable_type'=>'village']); //Cempaka
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1436, 'regionable_type'=>'village']); //Cibugel
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1437, 'regionable_type'=>'village']); //Cisoka
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1438, 'regionable_type'=>'village']); //Jeung Jing
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1439, 'regionable_type'=>'village']); //Karangharja
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1440, 'regionable_type'=>'village']); //Selapajang
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1441, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1442, 'regionable_type'=>'village']); //Cikareo
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1443, 'regionable_type'=>'village']); //Cikasungka
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1444, 'regionable_type'=>'village']); //Cikuya
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1445, 'regionable_type'=>'village']); //Cireundeu
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1446, 'regionable_type'=>'village']); //Munjul
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1447, 'regionable_type'=>'village']); //Pasanggrahan
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1448, 'regionable_type'=>'village']); //Solear
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1810, 'regionable_type'=>'village']); //Bojongloa
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1811, 'regionable_type'=>'village']); //Carenang
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1812, 'regionable_type'=>'village']); //Caringin
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1813, 'regionable_type'=>'village']); //Cempaka
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1814, 'regionable_type'=>'village']); //Cibugel
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1815, 'regionable_type'=>'village']); //Cisoka
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1816, 'regionable_type'=>'village']); //Jeung Jing
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1817, 'regionable_type'=>'village']); //Karangharja
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1818, 'regionable_type'=>'village']); //Selapajang
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1819, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1820, 'regionable_type'=>'village']); //Cikareo
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1821, 'regionable_type'=>'village']); //Cikasungka
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1822, 'regionable_type'=>'village']); //Cikuya
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1823, 'regionable_type'=>'village']); //Cireundeu
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1824, 'regionable_type'=>'village']); //Munjul
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1825, 'regionable_type'=>'village']); //Pasanggrahan
                DB::table('regionables')->insert(['region_id'=>81, 'regionable_id'=>1826, 'regionable_type'=>'village']); //Solear
        DB::table('regions')->insert(['id'=>82, 'parent'=>1, 'code'=>'158', 'type'=>'city', 'name'=>'City 158, Province 1']);
        DB::table('regionables')->insert(['region_id'=>82, 'regionable_id'=>17, 'regionable_type'=>'city']); //Tangerang city
        DB::table('regionables')->insert(['region_id'=>82, 'regionable_id'=>18, 'regionable_type'=>'city']); //Tangerang regencies
            DB::table('regions')->insert(['id'=>83, 'parent'=>82, 'code'=>'1581', 'type'=>'districts', 'name'=>'Districts 1581, City 158, Province 1']);
            DB::table('regionables')->insert(['region_id'=>83, 'regionable_id'=>144, 'regionable_type'=>'districts']); //Kelapa Dua
            DB::table('regionables')->insert(['region_id'=>83, 'regionable_id'=>145, 'regionable_type'=>'districts']); //Curug
            DB::table('regionables')->insert(['region_id'=>83, 'regionable_id'=>186, 'regionable_type'=>'districts']); //Kelapa Dua
            DB::table('regionables')->insert(['region_id'=>83, 'regionable_id'=>187, 'regionable_type'=>'districts']); //Curug
                DB::table('regions')->insert(['id'=>84, 'parent'=>83, 'code'=>'15810', 'type'=>'village', 'name'=>'Village 15810, Districts 1581, City 158, Province 1']);
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1449, 'regionable_type'=>'village']); //Bencongan
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1450, 'regionable_type'=>'village']); //Bencongan Indah
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1451, 'regionable_type'=>'village']); //Bojong Nangka
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1452, 'regionable_type'=>'village']); //Curug Sangerang (curug Sangereng)
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1453, 'regionable_type'=>'village']); //Kelapa Dua
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1454, 'regionable_type'=>'village']); //Pakulonan Barat
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1455, 'regionable_type'=>'village']); //Binong
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1456, 'regionable_type'=>'village']); //Cukang Galih
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1457, 'regionable_type'=>'village']); //Curug Kulon
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1458, 'regionable_type'=>'village']); //Curug Wetan
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1459, 'regionable_type'=>'village']); //Kadu
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1460, 'regionable_type'=>'village']); //Kadu Jaya
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1461, 'regionable_type'=>'village']); //Suka Bakti
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1827, 'regionable_type'=>'village']); //Bencongan
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1828, 'regionable_type'=>'village']); //Bencongan Indah
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1829, 'regionable_type'=>'village']); //Bojong Nangka
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1830, 'regionable_type'=>'village']); //Curug Sangerang (curug Sangereng)
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1831, 'regionable_type'=>'village']); //Kelapa Dua
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1832, 'regionable_type'=>'village']); //Pakulonan Barat
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1833, 'regionable_type'=>'village']); //Binong
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1834, 'regionable_type'=>'village']); //Cukang Galih
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1835, 'regionable_type'=>'village']); //Curug Kulon
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1836, 'regionable_type'=>'village']); //Curug Wetan
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1837, 'regionable_type'=>'village']); //Kadu
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1838, 'regionable_type'=>'village']); //Kadu Jaya
                DB::table('regionables')->insert(['region_id'=>84, 'regionable_id'=>1839, 'regionable_type'=>'village']); //Suka Bakti
            DB::table('regions')->insert(['id'=>85, 'parent'=>82, 'code'=>'1582', 'type'=>'districts', 'name'=>'Districts 1582, City 158, Province 1']);
            DB::table('regionables')->insert(['region_id'=>85, 'regionable_id'=>146, 'regionable_type'=>'districts']); //Legok
            DB::table('regionables')->insert(['region_id'=>85, 'regionable_id'=>188, 'regionable_type'=>'districts']); //Legok
                DB::table('regions')->insert(['id'=>86, 'parent'=>85, 'code'=>'15820', 'type'=>'village', 'name'=>'Village 15820, Districts 1582, City 158, Province 1']);
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1462, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1463, 'regionable_type'=>'village']); //Babat
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1464, 'regionable_type'=>'village']); //Bojong Kamal
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1465, 'regionable_type'=>'village']); //Caringin
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1466, 'regionable_type'=>'village']); //Ciangir
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1467, 'regionable_type'=>'village']); //Cirarab
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1468, 'regionable_type'=>'village']); //Kamuning (kemuning)
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1469, 'regionable_type'=>'village']); //Legok
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1470, 'regionable_type'=>'village']); //Pala Sari
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1471, 'regionable_type'=>'village']); //Rancagong
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1472, 'regionable_type'=>'village']); //Serdang Wetan
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1840, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1841, 'regionable_type'=>'village']); //Babat
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1842, 'regionable_type'=>'village']); //Bojong Kamal
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1843, 'regionable_type'=>'village']); //Caringin
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1844, 'regionable_type'=>'village']); //Ciangir
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1845, 'regionable_type'=>'village']); //Cirarab
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1846, 'regionable_type'=>'village']); //Kamuning (kemuning)
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1847, 'regionable_type'=>'village']); //Legok
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1848, 'regionable_type'=>'village']); //Pala Sari
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1849, 'regionable_type'=>'village']); //Rancagong
                DB::table('regionables')->insert(['region_id'=>86, 'regionable_id'=>1850, 'regionable_type'=>'village']); //Serdang Wetan

        //Dki Jakarta
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>6, 'regionable_type'=>'province']); //Dki Jakarta
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>40, 'regionable_type'=>'city']); //Jakarta Pusat city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>41, 'regionable_type'=>'city']); //Jakarta Barat city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>42, 'regionable_type'=>'city']); //Jakarta Selatan city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>43, 'regionable_type'=>'city']); //Jakarta Timur city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>44, 'regionable_type'=>'city']); //Jakarta Utara city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>45, 'regionable_type'=>'city']); //Kepulauan Seribu regencies

        DB::table('regions')->insert(['id'=>87, 'parent'=>1, 'code'=>'10', 'type'=>'city', 'name'=>'City 10, Province 1']);
        DB::table('regionables')->insert(['region_id'=>87, 'regionable_id'=>40, 'regionable_type'=>'city']); //Jakarta Pusat city
            DB::table('regions')->insert(['id'=>88, 'parent'=>87, 'code'=>'101', 'type'=>'districts', 'name'=>'Districts 101, City 10, Province 1']);
            DB::table('regionables')->insert(['region_id'=>88, 'regionable_id'=>541, 'regionable_type'=>'districts']); //Gambir
                DB::table('regions')->insert(['id'=>89, 'parent'=>88, 'code'=>'10110', 'type'=>'village', 'name'=>'Village 10110, Districts 101, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>89, 'regionable_id'=>5378, 'regionable_type'=>'village']); //Gambir
                DB::table('regions')->insert(['id'=>90, 'parent'=>88, 'code'=>'10120', 'type'=>'village', 'name'=>'Village 10120, Districts 101, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>90, 'regionable_id'=>5379, 'regionable_type'=>'village']); //Kebon Kelapa
                DB::table('regions')->insert(['id'=>91, 'parent'=>88, 'code'=>'10130', 'type'=>'village', 'name'=>'Village 10130, Districts 101, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>91, 'regionable_id'=>5380, 'regionable_type'=>'village']); //Petojo Utara
                DB::table('regions')->insert(['id'=>92, 'parent'=>88, 'code'=>'10140', 'type'=>'village', 'name'=>'Village 10140, Districts 101, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>92, 'regionable_id'=>5381, 'regionable_type'=>'village']); //Duri Pulo
                DB::table('regions')->insert(['id'=>93, 'parent'=>88, 'code'=>'10150', 'type'=>'village', 'name'=>'Village 10150, Districts 101, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>93, 'regionable_id'=>5382, 'regionable_type'=>'village']); //Cideng
                DB::table('regions')->insert(['id'=>94, 'parent'=>88, 'code'=>'10160', 'type'=>'village', 'name'=>'Village 10160, Districts 101, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>94, 'regionable_id'=>5383, 'regionable_type'=>'village']); //Petojo Selatan
            DB::table('regions')->insert(['id'=>95, 'parent'=>87, 'code'=>'102', 'type'=>'districts', 'name'=>'Districts 102, City 10, Province 1']);
            DB::table('regionables')->insert(['region_id'=>95, 'regionable_id'=>542, 'regionable_type'=>'districts']); //Tanah Abang
                DB::table('regions')->insert(['id'=>96, 'parent'=>95, 'code'=>'10210', 'type'=>'village', 'name'=>'Village 10210, Districts 102, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>96, 'regionable_id'=>5384, 'regionable_type'=>'village']); //Bendungan Hilir
                DB::table('regions')->insert(['id'=>97, 'parent'=>95, 'code'=>'10220', 'type'=>'village', 'name'=>'Village 10220, Districts 102, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>97, 'regionable_id'=>5385, 'regionable_type'=>'village']); //Karet Tengsin
                DB::table('regions')->insert(['id'=>98, 'parent'=>95, 'code'=>'10230', 'type'=>'village', 'name'=>'Village 10230, Districts 102, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>98, 'regionable_id'=>5386, 'regionable_type'=>'village']); //Kebon Melati
                DB::table('regions')->insert(['id'=>99, 'parent'=>95, 'code'=>'10240', 'type'=>'village', 'name'=>'Village 10240, Districts 102, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>99, 'regionable_id'=>5387, 'regionable_type'=>'village']); //Kebon Kacang
                DB::table('regions')->insert(['id'=>100, 'parent'=>95, 'code'=>'10250', 'type'=>'village', 'name'=>'Village 10250, Districts 102, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>100, 'regionable_id'=>5388, 'regionable_type'=>'village']); //Kampung Bali
                DB::table('regions')->insert(['id'=>101, 'parent'=>95, 'code'=>'10260', 'type'=>'village', 'name'=>'Village 10260, Districts 102, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>101, 'regionable_id'=>5389, 'regionable_type'=>'village']); //Petamburan
                DB::table('regions')->insert(['id'=>102, 'parent'=>95, 'code'=>'10270', 'type'=>'village', 'name'=>'Village 10270, Districts 102, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>102, 'regionable_id'=>5390, 'regionable_type'=>'village']); //Gelora
            DB::table('regions')->insert(['id'=>103, 'parent'=>87, 'code'=>'103', 'type'=>'districts', 'name'=>'Districts 103, City 10, Province 1']);
            DB::table('regionables')->insert(['region_id'=>103, 'regionable_id'=>543, 'regionable_type'=>'districts']); //Menteng
                DB::table('regions')->insert(['id'=>104, 'parent'=>103, 'code'=>'10310', 'type'=>'village', 'name'=>'Village 10310, Districts 103, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>104, 'regionable_id'=>5391, 'regionable_type'=>'village']); //Menteng
                DB::table('regions')->insert(['id'=>105, 'parent'=>103, 'code'=>'10320', 'type'=>'village', 'name'=>'Village 10320, Districts 103, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>105, 'regionable_id'=>5392, 'regionable_type'=>'village']); //Pegangsaan
                DB::table('regions')->insert(['id'=>106, 'parent'=>103, 'code'=>'10330', 'type'=>'village', 'name'=>'Village 10330, Districts 103, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>106, 'regionable_id'=>5393, 'regionable_type'=>'village']); //Cikini
                DB::table('regions')->insert(['id'=>107, 'parent'=>103, 'code'=>'10340', 'type'=>'village', 'name'=>'Village 10340, Districts 103, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>107, 'regionable_id'=>5394, 'regionable_type'=>'village']); //Kebon Sirih
                DB::table('regions')->insert(['id'=>108, 'parent'=>103, 'code'=>'10350', 'type'=>'village', 'name'=>'Village 10350, Districts 103, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>108, 'regionable_id'=>5395, 'regionable_type'=>'village']); //Gondangdia
            DB::table('regions')->insert(['id'=>109, 'parent'=>87, 'code'=>'104', 'type'=>'districts', 'name'=>'Districts 104, City 10, Province 1']);
            DB::table('regionables')->insert(['region_id'=>109, 'regionable_id'=>544, 'regionable_type'=>'districts']); //Senen
                DB::table('regions')->insert(['id'=>110, 'parent'=>109, 'code'=>'10410', 'type'=>'village', 'name'=>'Village 10410, Districts 104, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>110, 'regionable_id'=>5396, 'regionable_type'=>'village']); //Senen
                DB::table('regions')->insert(['id'=>111, 'parent'=>109, 'code'=>'10420', 'type'=>'village', 'name'=>'Village 10420, Districts 104, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>111, 'regionable_id'=>5397, 'regionable_type'=>'village']); //Kwitang
                DB::table('regions')->insert(['id'=>112, 'parent'=>109, 'code'=>'10430', 'type'=>'village', 'name'=>'Village 10430, Districts 104, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>112, 'regionable_id'=>5398, 'regionable_type'=>'village']); //Kenari
                DB::table('regions')->insert(['id'=>113, 'parent'=>109, 'code'=>'10440', 'type'=>'village', 'name'=>'Village 10440, Districts 104, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>113, 'regionable_id'=>5399, 'regionable_type'=>'village']); //Paseban
                DB::table('regions')->insert(['id'=>114, 'parent'=>109, 'code'=>'10450', 'type'=>'village', 'name'=>'Village 10450, Districts 104, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>114, 'regionable_id'=>5400, 'regionable_type'=>'village']); //Kramat
                DB::table('regions')->insert(['id'=>115, 'parent'=>109, 'code'=>'10460', 'type'=>'village', 'name'=>'Village 10460, Districts 104, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>115, 'regionable_id'=>5401, 'regionable_type'=>'village']); //Bungur
            DB::table('regions')->insert(['id'=>116, 'parent'=>87, 'code'=>'105', 'type'=>'districts', 'name'=>'Districts 105, City 10, Province 1']);
            DB::table('regionables')->insert(['region_id'=>116, 'regionable_id'=>545, 'regionable_type'=>'districts']); //Cempaka Putih
            DB::table('regionables')->insert(['region_id'=>116, 'regionable_id'=>546, 'regionable_type'=>'districts']); //Johar Baru
                DB::table('regions')->insert(['id'=>117, 'parent'=>116, 'code'=>'10530', 'type'=>'village', 'name'=>'Village 10530, Districts 105, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>117, 'regionable_id'=>5405, 'regionable_type'=>'village']); //Galur
                DB::table('regions')->insert(['id'=>118, 'parent'=>116, 'code'=>'10540', 'type'=>'village', 'name'=>'Village 10540, Districts 105, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>118, 'regionable_id'=>5406, 'regionable_type'=>'village']); //Tanah Tinggi
                DB::table('regions')->insert(['id'=>119, 'parent'=>116, 'code'=>'10550', 'type'=>'village', 'name'=>'Village 10550, Districts 105, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>119, 'regionable_id'=>5407, 'regionable_type'=>'village']); //Kampung Rawa
                DB::table('regions')->insert(['id'=>120, 'parent'=>116, 'code'=>'10560', 'type'=>'village', 'name'=>'Village 10560, Districts 105, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>120, 'regionable_id'=>5408, 'regionable_type'=>'village']); //Johar Baru
            DB::table('regions')->insert(['id'=>121, 'parent'=>87, 'code'=>'106', 'type'=>'districts', 'name'=>'Districts 106, City 10, Province 1']);
            DB::table('regionables')->insert(['region_id'=>121, 'regionable_id'=>547, 'regionable_type'=>'districts']); //Kemayoran
                DB::table('regions')->insert(['id'=>122, 'parent'=>121, 'code'=>'10610', 'type'=>'village', 'name'=>'Village 10610, Districts 106, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>122, 'regionable_id'=>5409, 'regionable_type'=>'village']); //Gunung Sahari Selatan
                DB::table('regions')->insert(['id'=>123, 'parent'=>121, 'code'=>'10620', 'type'=>'village', 'name'=>'Village 10620, Districts 106, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>123, 'regionable_id'=>5410, 'regionable_type'=>'village']); //Kemayoran
                DB::table('regions')->insert(['id'=>124, 'parent'=>121, 'code'=>'10630', 'type'=>'village', 'name'=>'Village 10630, Districts 106, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>124, 'regionable_id'=>5411, 'regionable_type'=>'village']); //Kebon Kosong
                DB::table('regions')->insert(['id'=>125, 'parent'=>121, 'code'=>'10640', 'type'=>'village', 'name'=>'Village 10640, Districts 106, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>125, 'regionable_id'=>5412, 'regionable_type'=>'village']); //Cempaka Baru
                DB::table('regionables')->insert(['region_id'=>125, 'regionable_id'=>5413, 'regionable_type'=>'village']); //Harapan Mulya
                DB::table('regionables')->insert(['region_id'=>125, 'regionable_id'=>5414, 'regionable_type'=>'village']); //Sumur Batu
                DB::table('regions')->insert(['id'=>126, 'parent'=>121, 'code'=>'10650', 'type'=>'village', 'name'=>'Village 10650, Districts 106, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>126, 'regionable_id'=>5415, 'regionable_type'=>'village']); //Serdang
                DB::table('regionables')->insert(['region_id'=>126, 'regionable_id'=>5416, 'regionable_type'=>'village']); //Utan Panjang
            DB::table('regions')->insert(['id'=>127, 'parent'=>87, 'code'=>'107', 'type'=>'districts', 'name'=>'Districts 107, City 10, Province 1']);
            DB::table('regionables')->insert(['region_id'=>127, 'regionable_id'=>548, 'regionable_type'=>'districts']); //Sawah Besar
                DB::table('regions')->insert(['id'=>128, 'parent'=>127, 'code'=>'10710', 'type'=>'village', 'name'=>'Village 10710, Districts 107, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>128, 'regionable_id'=>5417, 'regionable_type'=>'village']); //Pasar Baru
                DB::table('regions')->insert(['id'=>129, 'parent'=>127, 'code'=>'10720', 'type'=>'village', 'name'=>'Village 10720, Districts 107, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>129, 'regionable_id'=>5418, 'regionable_type'=>'village']); //Gunung Sahari Utara
                DB::table('regions')->insert(['id'=>130, 'parent'=>127, 'code'=>'10730', 'type'=>'village', 'name'=>'Village 10730, Districts 107, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>130, 'regionable_id'=>5419, 'regionable_type'=>'village']); //Mangga Dua Selatan
                DB::table('regions')->insert(['id'=>131, 'parent'=>127, 'code'=>'10740', 'type'=>'village', 'name'=>'Village 10740, Districts 107, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>131, 'regionable_id'=>5420, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regions')->insert(['id'=>132, 'parent'=>127, 'code'=>'10750', 'type'=>'village', 'name'=>'Village 10750, Districts 107, City 10, Province 1']);
                DB::table('regionables')->insert(['region_id'=>132, 'regionable_id'=>5421, 'regionable_type'=>'village']); //Kartini
        DB::table('regions')->insert(['id'=>133, 'parent'=>1, 'code'=>'11', 'type'=>'city', 'name'=>'City 11, Province 1']);
        DB::table('regionables')->insert(['region_id'=>133, 'regionable_id'=>41, 'regionable_type'=>'city']); //Jakarta Barat city
            DB::table('regions')->insert(['id'=>134, 'parent'=>133, 'code'=>'111', 'type'=>'districts', 'name'=>'Districts 111, City 11, Province 1']);
            DB::table('regionables')->insert(['region_id'=>134, 'regionable_id'=>549, 'regionable_type'=>'districts']); //Taman Sari
                DB::table('regions')->insert(['id'=>135, 'parent'=>134, 'code'=>'11110', 'type'=>'village', 'name'=>'Village 11110, Districts 111, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>135, 'regionable_id'=>5422, 'regionable_type'=>'village']); //Pinangsia
                DB::table('regions')->insert(['id'=>136, 'parent'=>134, 'code'=>'11120', 'type'=>'village', 'name'=>'Village 11120, Districts 111, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>136, 'regionable_id'=>5423, 'regionable_type'=>'village']); //Glodok
                DB::table('regions')->insert(['id'=>137, 'parent'=>134, 'code'=>'11130', 'type'=>'village', 'name'=>'Village 11130, Districts 111, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>137, 'regionable_id'=>5424, 'regionable_type'=>'village']); //Keagungan
                DB::table('regions')->insert(['id'=>138, 'parent'=>134, 'code'=>'11140', 'type'=>'village', 'name'=>'Village 11140, Districts 111, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>138, 'regionable_id'=>5425, 'regionable_type'=>'village']); //Krukut
                DB::table('regions')->insert(['id'=>139, 'parent'=>134, 'code'=>'11150', 'type'=>'village', 'name'=>'Village 11150, Districts 111, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>139, 'regionable_id'=>5426, 'regionable_type'=>'village']); //Taman Sari
                DB::table('regions')->insert(['id'=>140, 'parent'=>134, 'code'=>'11160', 'type'=>'village', 'name'=>'Village 11160, Districts 111, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>140, 'regionable_id'=>5427, 'regionable_type'=>'village']); //Maphar
                DB::table('regions')->insert(['id'=>141, 'parent'=>134, 'code'=>'11170', 'type'=>'village', 'name'=>'Village 11170, Districts 111, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>141, 'regionable_id'=>5428, 'regionable_type'=>'village']); //Tangki
                DB::table('regions')->insert(['id'=>142, 'parent'=>134, 'code'=>'11180', 'type'=>'village', 'name'=>'Village 11180, Districts 111, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>142, 'regionable_id'=>5429, 'regionable_type'=>'village']); //Mangga Besar
            DB::table('regions')->insert(['id'=>143, 'parent'=>133, 'code'=>'112', 'type'=>'districts', 'name'=>'Districts 112, City 11, Province 1']);
            DB::table('regionables')->insert(['region_id'=>143, 'regionable_id'=>550, 'regionable_type'=>'districts']); //Tambora
                DB::table('regions')->insert(['id'=>144, 'parent'=>143, 'code'=>'11210', 'type'=>'village', 'name'=>'Village 11210, Districts 112, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>144, 'regionable_id'=>5430, 'regionable_type'=>'village']); //Tanah Sereal
                DB::table('regions')->insert(['id'=>145, 'parent'=>143, 'code'=>'11220', 'type'=>'village', 'name'=>'Village 11220, Districts 112, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>145, 'regionable_id'=>5431, 'regionable_type'=>'village']); //Tambora
                DB::table('regions')->insert(['id'=>146, 'parent'=>143, 'code'=>'11230', 'type'=>'village', 'name'=>'Village 11230, Districts 112, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>146, 'regionable_id'=>5432, 'regionable_type'=>'village']); //Roa Malaka
                DB::table('regions')->insert(['id'=>147, 'parent'=>143, 'code'=>'11240', 'type'=>'village', 'name'=>'Village 11240, Districts 112, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>147, 'regionable_id'=>5433, 'regionable_type'=>'village']); //Pekojan
                DB::table('regions')->insert(['id'=>148, 'parent'=>143, 'code'=>'11250', 'type'=>'village', 'name'=>'Village 11250, Districts 112, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>148, 'regionable_id'=>5434, 'regionable_type'=>'village']); //Jembatan Lima
                DB::table('regions')->insert(['id'=>149, 'parent'=>143, 'code'=>'11260', 'type'=>'village', 'name'=>'Village 11260, Districts 112, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>149, 'regionable_id'=>5435, 'regionable_type'=>'village']); //Krendang
                DB::table('regions')->insert(['id'=>150, 'parent'=>143, 'code'=>'11270', 'type'=>'village', 'name'=>'Village 11270, Districts 112, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>150, 'regionable_id'=>5436, 'regionable_type'=>'village']); //Duri Selatan
                DB::table('regionables')->insert(['region_id'=>150, 'regionable_id'=>5437, 'regionable_type'=>'village']); //Duri Utara
            DB::table('regions')->insert(['id'=>151, 'parent'=>133, 'code'=>'113', 'type'=>'districts', 'name'=>'Districts 113, City 11, Province 1']);
            DB::table('regionables')->insert(['region_id'=>151, 'regionable_id'=>550, 'regionable_type'=>'districts']); //Tambora
                DB::table('regions')->insert(['id'=>152, 'parent'=>151, 'code'=>'11310', 'type'=>'village', 'name'=>'Village 11310, Districts 113, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>152, 'regionable_id'=>5438, 'regionable_type'=>'village']); //Kali Anyar
                DB::table('regions')->insert(['id'=>153, 'parent'=>151, 'code'=>'11320', 'type'=>'village', 'name'=>'Village 11320, Districts 113, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>153, 'regionable_id'=>5439, 'regionable_type'=>'village']); //Jembatan Besi
                DB::table('regions')->insert(['id'=>154, 'parent'=>151, 'code'=>'11330', 'type'=>'village', 'name'=>'Village 11330, Districts 113, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>154, 'regionable_id'=>5440, 'regionable_type'=>'village']); //Angke
            DB::table('regions')->insert(['id'=>155, 'parent'=>133, 'code'=>'114', 'type'=>'districts', 'name'=>'Districts 114, City 11, Province 1']);
            DB::table('regionables')->insert(['region_id'=>155, 'regionable_id'=>551, 'regionable_type'=>'districts']); //Palmerah
            DB::table('regionables')->insert(['region_id'=>155, 'regionable_id'=>552, 'regionable_type'=>'districts']); //Grogol Petamburan
                DB::table('regions')->insert(['id'=>156, 'parent'=>155, 'code'=>'11440', 'type'=>'village', 'name'=>'Village 11440, Districts 114, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>156, 'regionable_id'=>5447, 'regionable_type'=>'village']); //Tomang
                DB::table('regions')->insert(['id'=>157, 'parent'=>155, 'code'=>'11450', 'type'=>'village', 'name'=>'Village 11450, Districts 114, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>157, 'regionable_id'=>5448, 'regionable_type'=>'village']); //Grogol
                DB::table('regions')->insert(['id'=>158, 'parent'=>155, 'code'=>'11460', 'type'=>'village', 'name'=>'Village 11460, Districts 114, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>158, 'regionable_id'=>5449, 'regionable_type'=>'village']); //Jelambar
                DB::table('regionables')->insert(['region_id'=>158, 'regionable_id'=>5450, 'regionable_type'=>'village']); //Jelambar Baru
                DB::table('regionables')->insert(['region_id'=>158, 'regionable_id'=>5451, 'regionable_type'=>'village']); //Wijaya Kusuma
                DB::table('regions')->insert(['id'=>159, 'parent'=>155, 'code'=>'11470', 'type'=>'village', 'name'=>'Village 11470, Districts 114, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>159, 'regionable_id'=>5452, 'regionable_type'=>'village']); //Tanjung Duren Selatan
                DB::table('regionables')->insert(['region_id'=>159, 'regionable_id'=>5453, 'regionable_type'=>'village']); //Tanjung Duren Utara
            DB::table('regions')->insert(['id'=>160, 'parent'=>133, 'code'=>'115', 'type'=>'districts', 'name'=>'Districts 115, City 11, Province 1']);
            DB::table('regionables')->insert(['region_id'=>160, 'regionable_id'=>553, 'regionable_type'=>'districts']); //Kebon Jeruk
                DB::table('regions')->insert(['id'=>161, 'parent'=>160, 'code'=>'11510', 'type'=>'village', 'name'=>'Village 11510, Districts 115, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>161, 'regionable_id'=>5454, 'regionable_type'=>'village']); //Duri Kepa
                DB::table('regions')->insert(['id'=>162, 'parent'=>160, 'code'=>'11520', 'type'=>'village', 'name'=>'Village 11520, Districts 115, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>162, 'regionable_id'=>5455, 'regionable_type'=>'village']); //Kedoya Selatan
                DB::table('regionables')->insert(['region_id'=>162, 'regionable_id'=>5456, 'regionable_type'=>'village']); //Kedoya Utara
                DB::table('regions')->insert(['id'=>163, 'parent'=>160, 'code'=>'11530', 'type'=>'village', 'name'=>'Village 11530, Districts 115, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>163, 'regionable_id'=>5457, 'regionable_type'=>'village']); //Kebon Jeruk
                DB::table('regions')->insert(['id'=>164, 'parent'=>160, 'code'=>'11540', 'type'=>'village', 'name'=>'Village 11540, Districts 115, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>164, 'regionable_id'=>5458, 'regionable_type'=>'village']); //Sukabumi Utara (ilir)
                DB::table('regions')->insert(['id'=>165, 'parent'=>160, 'code'=>'11550', 'type'=>'village', 'name'=>'Village 11550, Districts 115, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>165, 'regionable_id'=>5459, 'regionable_type'=>'village']); //Kelapa Dua
                DB::table('regions')->insert(['id'=>166, 'parent'=>160, 'code'=>'11560', 'type'=>'village', 'name'=>'Village 11560, Districts 115, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>166, 'regionable_id'=>5460, 'regionable_type'=>'village']); //Sukabumi Selatan (udik)
            DB::table('regions')->insert(['id'=>167, 'parent'=>133, 'code'=>'116', 'type'=>'districts', 'name'=>'Districts 116, City 11, Province 1']);
            DB::table('regionables')->insert(['region_id'=>167, 'regionable_id'=>554, 'regionable_type'=>'districts']); //Kembangan
                DB::table('regions')->insert(['id'=>168, 'parent'=>167, 'code'=>'11610', 'type'=>'village', 'name'=>'Village 11610, Districts 116, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>168, 'regionable_id'=>5461, 'regionable_type'=>'village']); //Kembangan Selatan
                DB::table('regionables')->insert(['region_id'=>168, 'regionable_id'=>5462, 'regionable_type'=>'village']); //Kembangan Utara
                DB::table('regions')->insert(['id'=>169, 'parent'=>167, 'code'=>'11620', 'type'=>'village', 'name'=>'Village 11620, Districts 116, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>169, 'regionable_id'=>5463, 'regionable_type'=>'village']); //Meruya Utara (ilir)
                DB::table('regions')->insert(['id'=>170, 'parent'=>167, 'code'=>'11630', 'type'=>'village', 'name'=>'Village 11630, Districts 116, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>170, 'regionable_id'=>5464, 'regionable_type'=>'village']); //Srengseng
                DB::table('regions')->insert(['id'=>171, 'parent'=>167, 'code'=>'11640', 'type'=>'village', 'name'=>'Village 11640, Districts 116, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>171, 'regionable_id'=>5465, 'regionable_type'=>'village']); //Joglo
                DB::table('regions')->insert(['id'=>172, 'parent'=>167, 'code'=>'11650', 'type'=>'village', 'name'=>'Village 11650, Districts 116, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>172, 'regionable_id'=>5466, 'regionable_type'=>'village']); //Meruya Selatan (udik)
            DB::table('regions')->insert(['id'=>173, 'parent'=>133, 'code'=>'117', 'type'=>'districts', 'name'=>'Districts 117, City 11, Province 1']);
            DB::table('regionables')->insert(['region_id'=>173, 'regionable_id'=>555, 'regionable_type'=>'districts']); //Cengkareng
                DB::table('regions')->insert(['id'=>174, 'parent'=>173, 'code'=>'11710', 'type'=>'village', 'name'=>'Village 11710, Districts 117, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>174, 'regionable_id'=>5467, 'regionable_type'=>'village']); //Kedaung Kali Angke
                DB::table('regions')->insert(['id'=>175, 'parent'=>173, 'code'=>'11720', 'type'=>'village', 'name'=>'Village 11720, Districts 117, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>175, 'regionable_id'=>5468, 'regionable_type'=>'village']); //Kapuk
                DB::table('regions')->insert(['id'=>176, 'parent'=>173, 'code'=>'11730', 'type'=>'village', 'name'=>'Village 11730, Districts 117, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>176, 'regionable_id'=>5469, 'regionable_type'=>'village']); //Cengkareng Barat
                DB::table('regionables')->insert(['region_id'=>176, 'regionable_id'=>5470, 'regionable_type'=>'village']); //Cengkareng Timur
                DB::table('regions')->insert(['id'=>177, 'parent'=>173, 'code'=>'11740', 'type'=>'village', 'name'=>'Village 11740, Districts 117, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>177, 'regionable_id'=>5471, 'regionable_type'=>'village']); //Rawa Buaya
                DB::table('regions')->insert(['id'=>178, 'parent'=>173, 'code'=>'11750', 'type'=>'village', 'name'=>'Village 11750, Districts 117, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>178, 'regionable_id'=>5472, 'regionable_type'=>'village']); //Duri Kosambi
            DB::table('regions')->insert(['id'=>179, 'parent'=>133, 'code'=>'118', 'type'=>'districts', 'name'=>'Districts 118, City 11, Province 1']);
            DB::table('regionables')->insert(['region_id'=>179, 'regionable_id'=>556, 'regionable_type'=>'districts']); //Kalideres
                DB::table('regions')->insert(['id'=>180, 'parent'=>179, 'code'=>'11810', 'type'=>'village', 'name'=>'Village 11810, Districts 118, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>180, 'regionable_id'=>5473, 'regionable_type'=>'village']); //Kamal
                DB::table('regions')->insert(['id'=>181, 'parent'=>179, 'code'=>'11820', 'type'=>'village', 'name'=>'Village 11820, Districts 118, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>181, 'regionable_id'=>5474, 'regionable_type'=>'village']); //Tegal Alur
                DB::table('regions')->insert(['id'=>182, 'parent'=>179, 'code'=>'11830', 'type'=>'village', 'name'=>'Village 11830, Districts 118, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>182, 'regionable_id'=>5475, 'regionable_type'=>'village']); //Pegadungan
                DB::table('regions')->insert(['id'=>183, 'parent'=>179, 'code'=>'11840', 'type'=>'village', 'name'=>'Village 11840, Districts 118, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>183, 'regionable_id'=>5476, 'regionable_type'=>'village']); //Kalideres
                DB::table('regions')->insert(['id'=>184, 'parent'=>179, 'code'=>'11850', 'type'=>'village', 'name'=>'Village 11850, Districts 118, City 11, Province 1']);
                DB::table('regionables')->insert(['region_id'=>184, 'regionable_id'=>5477, 'regionable_type'=>'village']); //Semanan
        DB::table('regions')->insert(['id'=>185, 'parent'=>1, 'code'=>'12', 'type'=>'city', 'name'=>'City 12, Province 1']);
        DB::table('regionables')->insert(['region_id'=>185, 'regionable_id'=>42, 'regionable_type'=>'city']); //Jakarta Selatan city
            DB::table('regions')->insert(['id'=>186, 'parent'=>185, 'code'=>'121', 'type'=>'districts', 'name'=>'Districts 121, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>186, 'regionable_id'=>557, 'regionable_type'=>'districts']); //Kebayoran Baru
                DB::table('regions')->insert(['id'=>187, 'parent'=>186, 'code'=>'12110', 'type'=>'village', 'name'=>'Village 12110, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>187, 'regionable_id'=>5478, 'regionable_type'=>'village']); //Selong
                DB::table('regions')->insert(['id'=>188, 'parent'=>186, 'code'=>'12120', 'type'=>'village', 'name'=>'Village 12120, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>188, 'regionable_id'=>5479, 'regionable_type'=>'village']); //Gunung
                DB::table('regions')->insert(['id'=>189, 'parent'=>186, 'code'=>'12130', 'type'=>'village', 'name'=>'Village 12130, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>189, 'regionable_id'=>5480, 'regionable_type'=>'village']); //Kramat Pela
                DB::table('regions')->insert(['id'=>190, 'parent'=>186, 'code'=>'12140', 'type'=>'village', 'name'=>'Village 12140, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>190, 'regionable_id'=>5481, 'regionable_type'=>'village']); //Gandaria Utara
                DB::table('regions')->insert(['id'=>191, 'parent'=>186, 'code'=>'12150', 'type'=>'village', 'name'=>'Village 12150, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>191, 'regionable_id'=>5482, 'regionable_type'=>'village']); //Cipete Utara
                DB::table('regions')->insert(['id'=>192, 'parent'=>186, 'code'=>'12160', 'type'=>'village', 'name'=>'Village 12160, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>192, 'regionable_id'=>5483, 'regionable_type'=>'village']); //Melawai
                DB::table('regionables')->insert(['region_id'=>192, 'regionable_id'=>5484, 'regionable_type'=>'village']); //Pulo
                DB::table('regions')->insert(['id'=>193, 'parent'=>186, 'code'=>'12170', 'type'=>'village', 'name'=>'Village 12170, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>193, 'regionable_id'=>5485, 'regionable_type'=>'village']); //Petogogan
                DB::table('regions')->insert(['id'=>194, 'parent'=>186, 'code'=>'12180', 'type'=>'village', 'name'=>'Village 12180, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>194, 'regionable_id'=>5486, 'regionable_type'=>'village']); //Rawa Barat
                DB::table('regions')->insert(['id'=>195, 'parent'=>186, 'code'=>'12190', 'type'=>'village', 'name'=>'Village 12190, Districts 121, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>195, 'regionable_id'=>5487, 'regionable_type'=>'village']); //Senayan
            DB::table('regions')->insert(['id'=>196, 'parent'=>185, 'code'=>'122', 'type'=>'districts', 'name'=>'Districts 122, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>196, 'regionable_id'=>558, 'regionable_type'=>'districts']); //Kebayoran Lama
            DB::table('regionables')->insert(['region_id'=>196, 'regionable_id'=>559, 'regionable_type'=>'districts']); //Pesanggrahan
                DB::table('regions')->insert(['id'=>197, 'parent'=>196, 'code'=>'12250', 'type'=>'village', 'name'=>'Village 12250, Districts 122, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>197, 'regionable_id'=>5494, 'regionable_type'=>'village']); //Ulujami
                DB::table('regions')->insert(['id'=>198, 'parent'=>196, 'code'=>'12260', 'type'=>'village', 'name'=>'Village 12260, Districts 122, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>198, 'regionable_id'=>5495, 'regionable_type'=>'village']); //Petukangan Utara
                DB::table('regions')->insert(['id'=>199, 'parent'=>196, 'code'=>'12270', 'type'=>'village', 'name'=>'Village 12270, Districts 122, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>199, 'regionable_id'=>5496, 'regionable_type'=>'village']); //Petukangan Selatan
            DB::table('regions')->insert(['id'=>200, 'parent'=>185, 'code'=>'123', 'type'=>'districts', 'name'=>'Districts 123, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>200, 'regionable_id'=>558, 'regionable_type'=>'districts']); //Kebayoran Lama
            DB::table('regionables')->insert(['region_id'=>200, 'regionable_id'=>559, 'regionable_type'=>'districts']); //Pesanggrahan
                DB::table('regions')->insert(['id'=>201, 'parent'=>200, 'code'=>'12320', 'type'=>'village', 'name'=>'Village 12320, Districts 123, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>201, 'regionable_id'=>5497, 'regionable_type'=>'village']); //Pesanggrahan
                DB::table('regions')->insert(['id'=>202, 'parent'=>200, 'code'=>'12330', 'type'=>'village', 'name'=>'Village 12330, Districts 123, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>202, 'regionable_id'=>5498, 'regionable_type'=>'village']); //Bintaro
            DB::table('regions')->insert(['id'=>203, 'parent'=>185, 'code'=>'124', 'type'=>'districts', 'name'=>'Districts 124, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>203, 'regionable_id'=>560, 'regionable_type'=>'districts']); //Cilandak
                DB::table('regions')->insert(['id'=>204, 'parent'=>203, 'code'=>'12410', 'type'=>'village', 'name'=>'Village 12410, Districts 124, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>204, 'regionable_id'=>5499, 'regionable_type'=>'village']); //Cipete Selatan
                DB::table('regions')->insert(['id'=>205, 'parent'=>203, 'code'=>'12420', 'type'=>'village', 'name'=>'Village 12420, Districts 124, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>205, 'regionable_id'=>5500, 'regionable_type'=>'village']); //Gandaria Selatan
                DB::table('regions')->insert(['id'=>206, 'parent'=>203, 'code'=>'12430', 'type'=>'village', 'name'=>'Village 12430, Districts 124, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>206, 'regionable_id'=>5501, 'regionable_type'=>'village']); //Cilandak Barat
                DB::table('regions')->insert(['id'=>207, 'parent'=>203, 'code'=>'12440', 'type'=>'village', 'name'=>'Village 12440, Districts 124, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>207, 'regionable_id'=>5502, 'regionable_type'=>'village']); //Lebak Bulus
                DB::table('regions')->insert(['id'=>208, 'parent'=>203, 'code'=>'12450', 'type'=>'village', 'name'=>'Village 12450, Districts 124, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>208, 'regionable_id'=>5503, 'regionable_type'=>'village']); //Pondok Labu
            DB::table('regions')->insert(['id'=>209, 'parent'=>185, 'code'=>'125', 'type'=>'districts', 'name'=>'Districts 125, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>209, 'regionable_id'=>561, 'regionable_type'=>'districts']); //Pasar Minggu
            DB::table('regionables')->insert(['region_id'=>209, 'regionable_id'=>562, 'regionable_type'=>'districts']); //Jagakarsa
                DB::table('regions')->insert(['id'=>210, 'parent'=>209, 'code'=>'12530', 'type'=>'village', 'name'=>'Village 12530, Districts 125, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>210, 'regionable_id'=>5511, 'regionable_type'=>'village']); //Tanjung Barat
            DB::table('regions')->insert(['id'=>211, 'parent'=>185, 'code'=>'126', 'type'=>'districts', 'name'=>'Districts 126, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>211, 'regionable_id'=>562, 'regionable_type'=>'districts']); //Jagakarsa
                DB::table('regions')->insert(['id'=>212, 'parent'=>211, 'code'=>'12620', 'type'=>'village', 'name'=>'Village 12620, Districts 126, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>212, 'regionable_id'=>5512, 'regionable_type'=>'village']); //Jagakarsa
                DB::table('regions')->insert(['id'=>213, 'parent'=>211, 'code'=>'12630', 'type'=>'village', 'name'=>'Village 12630, Districts 126, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>213, 'regionable_id'=>5513, 'regionable_type'=>'village']); //Ciganjur
                DB::table('regionables')->insert(['region_id'=>213, 'regionable_id'=>5514, 'regionable_type'=>'village']); //Cipedak
                DB::table('regionables')->insert(['region_id'=>213, 'regionable_id'=>5515, 'regionable_type'=>'village']); //Lenteng Agung
                DB::table('regions')->insert(['id'=>214, 'parent'=>211, 'code'=>'12640', 'type'=>'village', 'name'=>'Village 12640, Districts 126, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>214, 'regionable_id'=>5516, 'regionable_type'=>'village']); //Srengseng Sawah
            DB::table('regions')->insert(['id'=>215, 'parent'=>185, 'code'=>'127', 'type'=>'districts', 'name'=>'Districts 127, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>215, 'regionable_id'=>563, 'regionable_type'=>'districts']); //Mampang Prapatan
            DB::table('regionables')->insert(['region_id'=>215, 'regionable_id'=>564, 'regionable_type'=>'districts']); //Pancoran
                DB::table('regions')->insert(['id'=>216, 'parent'=>215, 'code'=>'12740', 'type'=>'village', 'name'=>'Village 12740, Districts 127, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>216, 'regionable_id'=>5522, 'regionable_type'=>'village']); //Kalibata
                DB::table('regions')->insert(['id'=>217, 'parent'=>215, 'code'=>'12750', 'type'=>'village', 'name'=>'Village 12750, Districts 127, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>217, 'regionable_id'=>5523, 'regionable_type'=>'village']); //Rawa Jati
                DB::table('regions')->insert(['id'=>218, 'parent'=>215, 'code'=>'12760', 'type'=>'village', 'name'=>'Village 12760, Districts 127, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>218, 'regionable_id'=>5524, 'regionable_type'=>'village']); //Duren Tiga
                DB::table('regions')->insert(['id'=>219, 'parent'=>215, 'code'=>'12770', 'type'=>'village', 'name'=>'Village 12770, Districts 127, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>219, 'regionable_id'=>5525, 'regionable_type'=>'village']); //Cikoko
                DB::table('regionables')->insert(['region_id'=>219, 'regionable_id'=>5526, 'regionable_type'=>'village']); //Pengadegan
                DB::table('regions')->insert(['id'=>220, 'parent'=>215, 'code'=>'12780', 'type'=>'village', 'name'=>'Village 12780, Districts 127, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>220, 'regionable_id'=>5527, 'regionable_type'=>'village']); //Pancoran
            DB::table('regions')->insert(['id'=>221, 'parent'=>185, 'code'=>'128', 'type'=>'districts', 'name'=>'Districts 128, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>221, 'regionable_id'=>565, 'regionable_type'=>'districts']); //Tebet
                DB::table('regions')->insert(['id'=>222, 'parent'=>221, 'code'=>'12810', 'type'=>'village', 'name'=>'Village 12810, Districts 128, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>222, 'regionable_id'=>5528, 'regionable_type'=>'village']); //Tebet Barat
                DB::table('regions')->insert(['id'=>223, 'parent'=>221, 'code'=>'12820', 'type'=>'village', 'name'=>'Village 12820, Districts 128, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>223, 'regionable_id'=>5529, 'regionable_type'=>'village']); //Tebet Timur
                DB::table('regions')->insert(['id'=>224, 'parent'=>221, 'code'=>'12830', 'type'=>'village', 'name'=>'Village 12830, Districts 128, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>224, 'regionable_id'=>5530, 'regionable_type'=>'village']); //Kebon Baru
                DB::table('regions')->insert(['id'=>225, 'parent'=>221, 'code'=>'12840', 'type'=>'village', 'name'=>'Village 12840, Districts 128, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>225, 'regionable_id'=>5531, 'regionable_type'=>'village']); //Bukit Duri
                DB::table('regions')->insert(['id'=>226, 'parent'=>221, 'code'=>'12850', 'type'=>'village', 'name'=>'Village 12850, Districts 128, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>226, 'regionable_id'=>5532, 'regionable_type'=>'village']); //Manggarai
                DB::table('regions')->insert(['id'=>227, 'parent'=>221, 'code'=>'12860', 'type'=>'village', 'name'=>'Village 12860, Districts 128, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>227, 'regionable_id'=>5533, 'regionable_type'=>'village']); //Manggarai Selatan
                DB::table('regions')->insert(['id'=>228, 'parent'=>221, 'code'=>'12870', 'type'=>'village', 'name'=>'Village 12870, Districts 128, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>228, 'regionable_id'=>5534, 'regionable_type'=>'village']); //Menteng Dalam
            DB::table('regions')->insert(['id'=>229, 'parent'=>185, 'code'=>'129', 'type'=>'districts', 'name'=>'Districts 129, City 12, Province 1']);
            DB::table('regionables')->insert(['region_id'=>229, 'regionable_id'=>566, 'regionable_type'=>'districts']); //Setia Budi
                DB::table('regions')->insert(['id'=>230, 'parent'=>229, 'code'=>'12910', 'type'=>'village', 'name'=>'Village 12910, Districts 129, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>230, 'regionable_id'=>5535, 'regionable_type'=>'village']); //Setiabudi
                DB::table('regions')->insert(['id'=>231, 'parent'=>229, 'code'=>'12920', 'type'=>'village', 'name'=>'Village 12920, Districts 129, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>231, 'regionable_id'=>5536, 'regionable_type'=>'village']); //Karet
                DB::table('regions')->insert(['id'=>232, 'parent'=>229, 'code'=>'12930', 'type'=>'village', 'name'=>'Village 12930, Districts 129, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>232, 'regionable_id'=>5537, 'regionable_type'=>'village']); //Karet Semanggi
                DB::table('regions')->insert(['id'=>233, 'parent'=>229, 'code'=>'12940', 'type'=>'village', 'name'=>'Village 12940, Districts 129, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>233, 'regionable_id'=>5538, 'regionable_type'=>'village']); //Karet Kuningan
                DB::table('regions')->insert(['id'=>234, 'parent'=>229, 'code'=>'12950', 'type'=>'village', 'name'=>'Village 12950, Districts 129, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>234, 'regionable_id'=>5539, 'regionable_type'=>'village']); //Kuningan Timur
                DB::table('regions')->insert(['id'=>235, 'parent'=>229, 'code'=>'12960', 'type'=>'village', 'name'=>'Village 12960, Districts 129, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>235, 'regionable_id'=>5540, 'regionable_type'=>'village']); //Menteng Atas
                DB::table('regions')->insert(['id'=>236, 'parent'=>229, 'code'=>'12970', 'type'=>'village', 'name'=>'Village 12970, Districts 129, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>236, 'regionable_id'=>5541, 'regionable_type'=>'village']); //Pasar Manggis
                DB::table('regions')->insert(['id'=>237, 'parent'=>229, 'code'=>'12980', 'type'=>'village', 'name'=>'Village 12980, Districts 129, City 12, Province 1']);
                DB::table('regionables')->insert(['region_id'=>237, 'regionable_id'=>5542, 'regionable_type'=>'village']); //Guntur
        DB::table('regions')->insert(['id'=>238, 'parent'=>1, 'code'=>'13', 'type'=>'city', 'name'=>'City 13, Province 1']);
        DB::table('regionables')->insert(['region_id'=>238, 'regionable_id'=>43, 'regionable_type'=>'city']); //Jakarta Timur city
            DB::table('regions')->insert(['id'=>239, 'parent'=>238, 'code'=>'131', 'type'=>'districts', 'name'=>'Districts 131, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>239, 'regionable_id'=>567, 'regionable_type'=>'districts']); //Matraman
                DB::table('regions')->insert(['id'=>240, 'parent'=>239, 'code'=>'13110', 'type'=>'village', 'name'=>'Village 13110, Districts 131, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>240, 'regionable_id'=>5543, 'regionable_type'=>'village']); //Pisangan Baru
                DB::table('regions')->insert(['id'=>241, 'parent'=>239, 'code'=>'13120', 'type'=>'village', 'name'=>'Village 13120, Districts 131, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>241, 'regionable_id'=>5544, 'regionable_type'=>'village']); //Utan Kayu Selatan
                DB::table('regionables')->insert(['region_id'=>241, 'regionable_id'=>5545, 'regionable_type'=>'village']); //Utan Kayu Utara
                DB::table('regions')->insert(['id'=>242, 'parent'=>239, 'code'=>'13130', 'type'=>'village', 'name'=>'Village 13130, Districts 131, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>242, 'regionable_id'=>5546, 'regionable_type'=>'village']); //Kayu Manis
                DB::table('regions')->insert(['id'=>243, 'parent'=>239, 'code'=>'13140', 'type'=>'village', 'name'=>'Village 13140, Districts 131, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>243, 'regionable_id'=>5547, 'regionable_type'=>'village']); //Pal Meriam
                DB::table('regions')->insert(['id'=>244, 'parent'=>239, 'code'=>'13150', 'type'=>'village', 'name'=>'Village 13150, Districts 131, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>244, 'regionable_id'=>5548, 'regionable_type'=>'village']); //Kebon Manggis
            DB::table('regions')->insert(['id'=>245, 'parent'=>238, 'code'=>'132', 'type'=>'districts', 'name'=>'Districts 132, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>245, 'regionable_id'=>568, 'regionable_type'=>'districts']); //Pulo Gadung
                DB::table('regions')->insert(['id'=>246, 'parent'=>245, 'code'=>'13210', 'type'=>'village', 'name'=>'Village 13210, Districts 132, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>246, 'regionable_id'=>5549, 'regionable_type'=>'village']); //Kayu Putih
                DB::table('regions')->insert(['id'=>247, 'parent'=>245, 'code'=>'13220', 'type'=>'village', 'name'=>'Village 13220, Districts 132, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>247, 'regionable_id'=>5550, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>247, 'regionable_id'=>5551, 'regionable_type'=>'village']); //Rawamangun
                DB::table('regions')->insert(['id'=>248, 'parent'=>245, 'code'=>'13230', 'type'=>'village', 'name'=>'Village 13230, Districts 132, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>248, 'regionable_id'=>5552, 'regionable_type'=>'village']); //Pisangan Timur
                DB::table('regions')->insert(['id'=>249, 'parent'=>245, 'code'=>'13240', 'type'=>'village', 'name'=>'Village 13240, Districts 132, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>249, 'regionable_id'=>5553, 'regionable_type'=>'village']); //Cipinang
                DB::table('regions')->insert(['id'=>250, 'parent'=>245, 'code'=>'13250', 'type'=>'village', 'name'=>'Village 13250, Districts 132, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>250, 'regionable_id'=>5554, 'regionable_type'=>'village']); //Jatinegara Kaum
                DB::table('regions')->insert(['id'=>251, 'parent'=>245, 'code'=>'13260', 'type'=>'village', 'name'=>'Village 13260, Districts 132, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>251, 'regionable_id'=>5555, 'regionable_type'=>'village']); //Pulo Gadung
            DB::table('regions')->insert(['id'=>252, 'parent'=>238, 'code'=>'133', 'type'=>'districts', 'name'=>'Districts 133, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>252, 'regionable_id'=>569, 'regionable_type'=>'districts']); //Jatinegara
                DB::table('regions')->insert(['id'=>253, 'parent'=>252, 'code'=>'13310', 'type'=>'village', 'name'=>'Village 13310, Districts 133, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>253, 'regionable_id'=>5556, 'regionable_type'=>'village']); //Bali Mester
                DB::table('regions')->insert(['id'=>254, 'parent'=>252, 'code'=>'13320', 'type'=>'village', 'name'=>'Village 13320, Districts 133, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>254, 'regionable_id'=>5557, 'regionable_type'=>'village']); //Kampung Melayu
                DB::table('regions')->insert(['id'=>255, 'parent'=>252, 'code'=>'13330', 'type'=>'village', 'name'=>'Village 13330, Districts 133, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>255, 'regionable_id'=>5558, 'regionable_type'=>'village']); //Bidaracina
                DB::table('regions')->insert(['id'=>256, 'parent'=>252, 'code'=>'13340', 'type'=>'village', 'name'=>'Village 13340, Districts 133, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>256, 'regionable_id'=>5559, 'regionable_type'=>'village']); //Cipinang Cempedak
                DB::table('regions')->insert(['id'=>257, 'parent'=>252, 'code'=>'13350', 'type'=>'village', 'name'=>'Village 13350, Districts 133, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>257, 'regionable_id'=>5560, 'regionable_type'=>'village']); //Rawa Bunga
            DB::table('regions')->insert(['id'=>258, 'parent'=>238, 'code'=>'134', 'type'=>'districts', 'name'=>'Districts 134, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>258, 'regionable_id'=>569, 'regionable_type'=>'districts']); //Jatinegara
            DB::table('regionables')->insert(['region_id'=>258, 'regionable_id'=>570, 'regionable_type'=>'districts']); //Duren Sawit
                DB::table('regions')->insert(['id'=>259, 'parent'=>258, 'code'=>'13430', 'type'=>'village', 'name'=>'Village 13430, Districts 134, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>259, 'regionable_id'=>5564, 'regionable_type'=>'village']); //Pondok Bambu
                DB::table('regions')->insert(['id'=>260, 'parent'=>258, 'code'=>'13440', 'type'=>'village', 'name'=>'Village 13440, Districts 134, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>260, 'regionable_id'=>5565, 'regionable_type'=>'village']); //Duren Sawit
                DB::table('regions')->insert(['id'=>261, 'parent'=>258, 'code'=>'13450', 'type'=>'village', 'name'=>'Village 13450, Districts 134, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>261, 'regionable_id'=>5566, 'regionable_type'=>'village']); //Pondok Kelapa
                DB::table('regions')->insert(['id'=>262, 'parent'=>258, 'code'=>'13460', 'type'=>'village', 'name'=>'Village 13460, Districts 134, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>262, 'regionable_id'=>5567, 'regionable_type'=>'village']); //Malaka Jaya
                DB::table('regionables')->insert(['region_id'=>262, 'regionable_id'=>5568, 'regionable_type'=>'village']); //Malaka Sari
                DB::table('regionables')->insert(['region_id'=>262, 'regionable_id'=>5569, 'regionable_type'=>'village']); //Pondok Kopi
                DB::table('regions')->insert(['id'=>263, 'parent'=>258, 'code'=>'13470', 'type'=>'village', 'name'=>'Village 13470, Districts 134, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>263, 'regionable_id'=>5570, 'regionable_type'=>'village']); //Klender
            DB::table('regions')->insert(['id'=>264, 'parent'=>238, 'code'=>'135', 'type'=>'districts', 'name'=>'Districts 135, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>264, 'regionable_id'=>571, 'regionable_type'=>'districts']); //Kramat Jati
            DB::table('regionables')->insert(['region_id'=>264, 'regionable_id'=>572, 'regionable_type'=>'districts']); //Makasar
                DB::table('regions')->insert(['id'=>265, 'parent'=>264, 'code'=>'13560', 'type'=>'village', 'name'=>'Village 13560, Districts 135, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>265, 'regionable_id'=>5578, 'regionable_type'=>'village']); //Pinang Ranti
                DB::table('regions')->insert(['id'=>266, 'parent'=>264, 'code'=>'13570', 'type'=>'village', 'name'=>'Village 13570, Districts 135, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>266, 'regionable_id'=>5579, 'regionable_type'=>'village']); //Makasar
            DB::table('regions')->insert(['id'=>267, 'parent'=>238, 'code'=>'136', 'type'=>'districts', 'name'=>'Districts 136, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>267, 'regionable_id'=>571, 'regionable_type'=>'districts']); //Kramat Jati
            DB::table('regionables')->insert(['region_id'=>267, 'regionable_id'=>572, 'regionable_type'=>'districts']); //Makasar
                DB::table('regions')->insert(['id'=>268, 'parent'=>267, 'code'=>'13610', 'type'=>'village', 'name'=>'Village 13610, Districts 136, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>268, 'regionable_id'=>5580, 'regionable_type'=>'village']); //Halim Perdana Kusumah
                DB::table('regions')->insert(['id'=>269, 'parent'=>267, 'code'=>'13620', 'type'=>'village', 'name'=>'Village 13620, Districts 136, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>269, 'regionable_id'=>5581, 'regionable_type'=>'village']); //Cipinang Melayu
                DB::table('regions')->insert(['id'=>270, 'parent'=>267, 'code'=>'13650', 'type'=>'village', 'name'=>'Village 13650, Districts 136, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>270, 'regionable_id'=>5582, 'regionable_type'=>'village']); //Kebon Pala
            DB::table('regions')->insert(['id'=>271, 'parent'=>238, 'code'=>'137', 'type'=>'districts', 'name'=>'Districts 137, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>271, 'regionable_id'=>573, 'regionable_type'=>'districts']); //Pasar Rebo
            DB::table('regionables')->insert(['region_id'=>271, 'regionable_id'=>574, 'regionable_type'=>'districts']); //Ciracas
                DB::table('regions')->insert(['id'=>272, 'parent'=>271, 'code'=>'13720', 'type'=>'village', 'name'=>'Village 13720, Districts 137, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>272, 'regionable_id'=>5588, 'regionable_type'=>'village']); //Cibubur
                DB::table('regions')->insert(['id'=>273, 'parent'=>271, 'code'=>'13730', 'type'=>'village', 'name'=>'Village 13730, Districts 137, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>273, 'regionable_id'=>5589, 'regionable_type'=>'village']); //Kelapa Dua Wetan
                DB::table('regions')->insert(['id'=>274, 'parent'=>271, 'code'=>'13740', 'type'=>'village', 'name'=>'Village 13740, Districts 137, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>274, 'regionable_id'=>5590, 'regionable_type'=>'village']); //Ciracas
                DB::table('regions')->insert(['id'=>275, 'parent'=>271, 'code'=>'13750', 'type'=>'village', 'name'=>'Village 13750, Districts 137, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>275, 'regionable_id'=>5591, 'regionable_type'=>'village']); //Susukan
            DB::table('regions')->insert(['id'=>276, 'parent'=>238, 'code'=>'138', 'type'=>'districts', 'name'=>'Districts 138, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>276, 'regionable_id'=>574, 'regionable_type'=>'districts']); //Ciracas
            DB::table('regionables')->insert(['region_id'=>276, 'regionable_id'=>575, 'regionable_type'=>'districts']); //Cipayung
                DB::table('regions')->insert(['id'=>277, 'parent'=>276, 'code'=>'13810', 'type'=>'village', 'name'=>'Village 13810, Districts 138, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>277, 'regionable_id'=>5593, 'regionable_type'=>'village']); //Lubang Buaya
                DB::table('regions')->insert(['id'=>278, 'parent'=>276, 'code'=>'13820', 'type'=>'village', 'name'=>'Village 13820, Districts 138, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>278, 'regionable_id'=>5594, 'regionable_type'=>'village']); //Ceger
                DB::table('regions')->insert(['id'=>279, 'parent'=>276, 'code'=>'13840', 'type'=>'village', 'name'=>'Village 13840, Districts 138, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>279, 'regionable_id'=>5595, 'regionable_type'=>'village']); //Cipayung
                DB::table('regions')->insert(['id'=>280, 'parent'=>276, 'code'=>'13850', 'type'=>'village', 'name'=>'Village 13850, Districts 138, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>280, 'regionable_id'=>5596, 'regionable_type'=>'village']); //Munjul
                DB::table('regions')->insert(['id'=>281, 'parent'=>276, 'code'=>'13860', 'type'=>'village', 'name'=>'Village 13860, Districts 138, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>281, 'regionable_id'=>5597, 'regionable_type'=>'village']); //Pondok Rangon
                DB::table('regions')->insert(['id'=>282, 'parent'=>276, 'code'=>'13870', 'type'=>'village', 'name'=>'Village 13870, Districts 138, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>282, 'regionable_id'=>5598, 'regionable_type'=>'village']); //Cilangkap
                DB::table('regions')->insert(['id'=>283, 'parent'=>276, 'code'=>'13880', 'type'=>'village', 'name'=>'Village 13880, Districts 138, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>283, 'regionable_id'=>5599, 'regionable_type'=>'village']); //Setu
                DB::table('regions')->insert(['id'=>284, 'parent'=>276, 'code'=>'13890', 'type'=>'village', 'name'=>'Village 13890, Districts 138, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>284, 'regionable_id'=>5600, 'regionable_type'=>'village']); //Bambu Apus
            DB::table('regions')->insert(['id'=>285, 'parent'=>238, 'code'=>'139', 'type'=>'districts', 'name'=>'Districts 139, City 13, Province 1']);
            DB::table('regionables')->insert(['region_id'=>285, 'regionable_id'=>576, 'regionable_type'=>'districts']); //Cakung
                DB::table('regions')->insert(['id'=>286, 'parent'=>285, 'code'=>'13910', 'type'=>'village', 'name'=>'Village 13910, Districts 139, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>286, 'regionable_id'=>5601, 'regionable_type'=>'village']); //Cakung Barat
                DB::table('regionables')->insert(['region_id'=>286, 'regionable_id'=>5602, 'regionable_type'=>'village']); //Cakung Timur
                DB::table('regions')->insert(['id'=>287, 'parent'=>285, 'code'=>'13920', 'type'=>'village', 'name'=>'Village 13920, Districts 139, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>287, 'regionable_id'=>5603, 'regionable_type'=>'village']); //Rawa Terate
                DB::table('regions')->insert(['id'=>288, 'parent'=>285, 'code'=>'13930', 'type'=>'village', 'name'=>'Village 13930, Districts 139, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>288, 'regionable_id'=>5604, 'regionable_type'=>'village']); //Jatinegara
                DB::table('regions')->insert(['id'=>289, 'parent'=>285, 'code'=>'13940', 'type'=>'village', 'name'=>'Village 13940, Districts 139, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>289, 'regionable_id'=>5605, 'regionable_type'=>'village']); //Penggilingan
                DB::table('regions')->insert(['id'=>290, 'parent'=>285, 'code'=>'13950', 'type'=>'village', 'name'=>'Village 13950, Districts 139, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>290, 'regionable_id'=>5606, 'regionable_type'=>'village']); //Pulo Gebang
                DB::table('regions')->insert(['id'=>291, 'parent'=>285, 'code'=>'13960', 'type'=>'village', 'name'=>'Village 13960, Districts 139, City 13, Province 1']);
                DB::table('regionables')->insert(['region_id'=>291, 'regionable_id'=>5607, 'regionable_type'=>'village']); //Ujung Menteng
        DB::table('regions')->insert(['id'=>292, 'parent'=>1, 'code'=>'14', 'type'=>'city', 'name'=>'City 14, Province 1']);
        DB::table('regionables')->insert(['region_id'=>292, 'regionable_id'=>44, 'regionable_type'=>'city']); //Jakarta Utara city
        DB::table('regionables')->insert(['region_id'=>292, 'regionable_id'=>45, 'regionable_type'=>'city']); //Kepulauan Seribu regencies
            DB::table('regions')->insert(['id'=>293, 'parent'=>292, 'code'=>'145', 'type'=>'districts', 'name'=>'Districts 145, City 14, Province 1']);
            DB::table('regionables')->insert(['region_id'=>293, 'regionable_id'=>583, 'regionable_type'=>'districts']); //Kepulauan Seribu Selatan
            DB::table('regionables')->insert(['region_id'=>293, 'regionable_id'=>584, 'regionable_type'=>'districts']); //Kepulauan Seribu Utara
                DB::table('regions')->insert(['id'=>294, 'parent'=>293, 'code'=>'14530', 'type'=>'village', 'name'=>'Village 14530, Districts 145, City 14, Province 1']);
                DB::table('regionables')->insert(['region_id'=>294, 'regionable_id'=>5642, 'regionable_type'=>'village']); //Pulau Panggang
                DB::table('regions')->insert(['id'=>295, 'parent'=>293, 'code'=>'14540', 'type'=>'village', 'name'=>'Village 14540, Districts 145, City 14, Province 1']);
                DB::table('regionables')->insert(['region_id'=>295, 'regionable_id'=>5643, 'regionable_type'=>'village']); //Pulau Harapan
                DB::table('regionables')->insert(['region_id'=>295, 'regionable_id'=>5644, 'regionable_type'=>'village']); //Pulau Kelapa

        //Jawa Barat
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>9, 'regionable_type'=>'province']); //Jawa Barat
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>63, 'regionable_type'=>'city']); //Bogor regencies
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>64, 'regionable_type'=>'city']); //Bogor city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>65, 'regionable_type'=>'city']); //Depok city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>66, 'regionable_type'=>'city']); //Bekasi city
        DB::table('regionables')->insert(['region_id'=>1, 'regionable_id'=>67, 'regionable_type'=>'city']); //Bekasi regencies

        DB::table('regions')->insert(['id'=>296, 'parent'=>1, 'code'=>'161', 'type'=>'city', 'name'=>'City 161, Province 1']);
        DB::table('regionables')->insert(['region_id'=>296, 'regionable_id'=>63, 'regionable_type'=>'city']); //Bogor regencies
        DB::table('regionables')->insert(['region_id'=>296, 'regionable_id'=>64, 'regionable_type'=>'city']); //Bogor city
            DB::table('regions')->insert(['id'=>297, 'parent'=>296, 'code'=>'1611', 'type'=>'districts', 'name'=>'Districts 1611, City 161, Province 1']);
            DB::table('regionables')->insert(['region_id'=>297, 'regionable_id'=>828, 'regionable_type'=>'districts']); //Cigombong
            DB::table('regionables')->insert(['region_id'=>297, 'regionable_id'=>829, 'regionable_type'=>'districts']); //Bogor Barat - Kota
            DB::table('regionables')->insert(['region_id'=>297, 'regionable_id'=>874, 'regionable_type'=>'districts']); //Cigombong
            DB::table('regionables')->insert(['region_id'=>297, 'regionable_id'=>875, 'regionable_type'=>'districts']); //Bogor Barat - Kota
                DB::table('regions')->insert(['id'=>298, 'parent'=>297, 'code'=>'16111', 'type'=>'village', 'name'=>'Village 16111, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>298, 'regionable_id'=>8194, 'regionable_type'=>'village']); //Menteng
                DB::table('regionables')->insert(['region_id'=>298, 'regionable_id'=>8692, 'regionable_type'=>'village']); //Menteng
                DB::table('regions')->insert(['id'=>299, 'parent'=>297, 'code'=>'16112', 'type'=>'village', 'name'=>'Village 16112, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>299, 'regionable_id'=>8195, 'regionable_type'=>'village']); //Cilendek Barat
                DB::table('regionables')->insert(['region_id'=>299, 'regionable_id'=>8196, 'regionable_type'=>'village']); //Cilendek Timur
                DB::table('regionables')->insert(['region_id'=>299, 'regionable_id'=>8693, 'regionable_type'=>'village']); //Cilendek Barat
                DB::table('regionables')->insert(['region_id'=>299, 'regionable_id'=>8694, 'regionable_type'=>'village']); //Cilendek Timur
                DB::table('regions')->insert(['id'=>300, 'parent'=>297, 'code'=>'16113', 'type'=>'village', 'name'=>'Village 16113, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>300, 'regionable_id'=>8197, 'regionable_type'=>'village']); //Curug
                DB::table('regionables')->insert(['region_id'=>300, 'regionable_id'=>8198, 'regionable_type'=>'village']); //Curug Mekar
                DB::table('regionables')->insert(['region_id'=>300, 'regionable_id'=>8695, 'regionable_type'=>'village']); //Curug
                DB::table('regionables')->insert(['region_id'=>300, 'regionable_id'=>8696, 'regionable_type'=>'village']); //Curug Mekar
                DB::table('regions')->insert(['id'=>301, 'parent'=>297, 'code'=>'16114', 'type'=>'village', 'name'=>'Village 16114, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>301, 'regionable_id'=>8199, 'regionable_type'=>'village']); //Semplak
                DB::table('regionables')->insert(['region_id'=>301, 'regionable_id'=>8697, 'regionable_type'=>'village']); //Semplak
                DB::table('regions')->insert(['id'=>302, 'parent'=>297, 'code'=>'16115', 'type'=>'village', 'name'=>'Village 16115, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>302, 'regionable_id'=>8200, 'regionable_type'=>'village']); //Bubulak
                DB::table('regionables')->insert(['region_id'=>302, 'regionable_id'=>8201, 'regionable_type'=>'village']); //Situ Gede
                DB::table('regionables')->insert(['region_id'=>302, 'regionable_id'=>8698, 'regionable_type'=>'village']); //Bubulak
                DB::table('regionables')->insert(['region_id'=>302, 'regionable_id'=>8699, 'regionable_type'=>'village']); //Situ Gede
                DB::table('regions')->insert(['id'=>303, 'parent'=>297, 'code'=>'16116', 'type'=>'village', 'name'=>'Village 16116, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>303, 'regionable_id'=>8202, 'regionable_type'=>'village']); //Balungbang Jaya
                DB::table('regionables')->insert(['region_id'=>303, 'regionable_id'=>8203, 'regionable_type'=>'village']); //Margajaya
                DB::table('regionables')->insert(['region_id'=>303, 'regionable_id'=>8700, 'regionable_type'=>'village']); //Balungbang Jaya
                DB::table('regionables')->insert(['region_id'=>303, 'regionable_id'=>8701, 'regionable_type'=>'village']); //Margajaya
                DB::table('regions')->insert(['id'=>304, 'parent'=>297, 'code'=>'16117', 'type'=>'village', 'name'=>'Village 16117, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>304, 'regionable_id'=>8204, 'regionable_type'=>'village']); //Loji
                DB::table('regionables')->insert(['region_id'=>304, 'regionable_id'=>8205, 'regionable_type'=>'village']); //Sindangbarang
                DB::table('regionables')->insert(['region_id'=>304, 'regionable_id'=>8702, 'regionable_type'=>'village']); //Loji
                DB::table('regionables')->insert(['region_id'=>304, 'regionable_id'=>8703, 'regionable_type'=>'village']); //Sindangbarang
                DB::table('regions')->insert(['id'=>305, 'parent'=>297, 'code'=>'16118', 'type'=>'village', 'name'=>'Village 16118, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>305, 'regionable_id'=>8206, 'regionable_type'=>'village']); //Gunungbatu
                DB::table('regionables')->insert(['region_id'=>305, 'regionable_id'=>8207, 'regionable_type'=>'village']); //Pasir Mulya
                DB::table('regionables')->insert(['region_id'=>305, 'regionable_id'=>8704, 'regionable_type'=>'village']); //Gunungbatu
                DB::table('regionables')->insert(['region_id'=>305, 'regionable_id'=>8705, 'regionable_type'=>'village']); //Pasir Mulya
                DB::table('regions')->insert(['id'=>306, 'parent'=>297, 'code'=>'16119', 'type'=>'village', 'name'=>'Village 16119, Districts 1611, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>306, 'regionable_id'=>8193, 'regionable_type'=>'village']); //Pasir Jaya
                DB::table('regionables')->insert(['region_id'=>306, 'regionable_id'=>8208, 'regionable_type'=>'village']); //Pasir Jaya
                DB::table('regionables')->insert(['region_id'=>306, 'regionable_id'=>8209, 'regionable_type'=>'village']); //Pasir Kuda
                DB::table('regionables')->insert(['region_id'=>306, 'regionable_id'=>8691, 'regionable_type'=>'village']); //Pasir Jaya
                DB::table('regionables')->insert(['region_id'=>306, 'regionable_id'=>8706, 'regionable_type'=>'village']); //Pasir Jaya
                DB::table('regionables')->insert(['region_id'=>306, 'regionable_id'=>8707, 'regionable_type'=>'village']); //Pasir Kuda
            DB::table('regions')->insert(['id'=>307, 'parent'=>296, 'code'=>'1612', 'type'=>'districts', 'name'=>'Districts 1612, City 161, Province 1']);
            DB::table('regionables')->insert(['region_id'=>307, 'regionable_id'=>830, 'regionable_type'=>'districts']); //Ciseeng
            DB::table('regionables')->insert(['region_id'=>307, 'regionable_id'=>831, 'regionable_type'=>'districts']); //Bogor Tengah - Kota
            DB::table('regionables')->insert(['region_id'=>307, 'regionable_id'=>876, 'regionable_type'=>'districts']); //Ciseeng
            DB::table('regionables')->insert(['region_id'=>307, 'regionable_id'=>877, 'regionable_type'=>'districts']); //Bogor Tengah - Kota
                DB::table('regions')->insert(['id'=>308, 'parent'=>307, 'code'=>'16121', 'type'=>'village', 'name'=>'Village 16121, Districts 1612, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>308, 'regionable_id'=>8220, 'regionable_type'=>'village']); //Pabaton
                DB::table('regionables')->insert(['region_id'=>308, 'regionable_id'=>8718, 'regionable_type'=>'village']); //Pabaton
                DB::table('regions')->insert(['id'=>309, 'parent'=>307, 'code'=>'16122', 'type'=>'village', 'name'=>'Village 16122, Districts 1612, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>309, 'regionable_id'=>8221, 'regionable_type'=>'village']); //Paledang
                DB::table('regionables')->insert(['region_id'=>309, 'regionable_id'=>8719, 'regionable_type'=>'village']); //Paledang
                DB::table('regions')->insert(['id'=>310, 'parent'=>307, 'code'=>'16123', 'type'=>'village', 'name'=>'Village 16123, Districts 1612, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>310, 'regionable_id'=>8222, 'regionable_type'=>'village']); //Gudang
                DB::table('regionables')->insert(['region_id'=>310, 'regionable_id'=>8720, 'regionable_type'=>'village']); //Gudang
                DB::table('regions')->insert(['id'=>311, 'parent'=>307, 'code'=>'16124', 'type'=>'village', 'name'=>'Village 16124, Districts 1612, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>311, 'regionable_id'=>8223, 'regionable_type'=>'village']); //Cibogor
                DB::table('regionables')->insert(['region_id'=>311, 'regionable_id'=>8224, 'regionable_type'=>'village']); //Ciwaringin
                DB::table('regionables')->insert(['region_id'=>311, 'regionable_id'=>8721, 'regionable_type'=>'village']); //Cibogor
                DB::table('regionables')->insert(['region_id'=>311, 'regionable_id'=>8722, 'regionable_type'=>'village']); //Ciwaringin
                DB::table('regions')->insert(['id'=>312, 'parent'=>307, 'code'=>'16125', 'type'=>'village', 'name'=>'Village 16125, Districts 1612, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>312, 'regionable_id'=>8225, 'regionable_type'=>'village']); //Kebon Kelapa
                DB::table('regionables')->insert(['region_id'=>312, 'regionable_id'=>8226, 'regionable_type'=>'village']); //Panaragan
                DB::table('regionables')->insert(['region_id'=>312, 'regionable_id'=>8723, 'regionable_type'=>'village']); //Kebon Kelapa
                DB::table('regionables')->insert(['region_id'=>312, 'regionable_id'=>8724, 'regionable_type'=>'village']); //Panaragan
                DB::table('regions')->insert(['id'=>313, 'parent'=>307, 'code'=>'16126', 'type'=>'village', 'name'=>'Village 16126, Districts 1612, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>313, 'regionable_id'=>8227, 'regionable_type'=>'village']); //Babakan Pasar
                DB::table('regionables')->insert(['region_id'=>313, 'regionable_id'=>8725, 'regionable_type'=>'village']); //Babakan Pasar
                DB::table('regions')->insert(['id'=>314, 'parent'=>307, 'code'=>'16128', 'type'=>'village', 'name'=>'Village 16128, Districts 1612, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>314, 'regionable_id'=>8228, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>314, 'regionable_id'=>8726, 'regionable_type'=>'village']); //Babakan
                DB::table('regions')->insert(['id'=>315, 'parent'=>307, 'code'=>'16129', 'type'=>'village', 'name'=>'Village 16129, Districts 1612, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>315, 'regionable_id'=>8229, 'regionable_type'=>'village']); //Sempur
                DB::table('regionables')->insert(['region_id'=>315, 'regionable_id'=>8230, 'regionable_type'=>'village']); //Tegal Panjang
                DB::table('regionables')->insert(['region_id'=>315, 'regionable_id'=>8727, 'regionable_type'=>'village']); //Sempur
                DB::table('regionables')->insert(['region_id'=>315, 'regionable_id'=>8728, 'regionable_type'=>'village']); //Tegal Panjang
            DB::table('regions')->insert(['id'=>316, 'parent'=>296, 'code'=>'1613', 'type'=>'districts', 'name'=>'Districts 1613, City 161, Province 1']);
            DB::table('regionables')->insert(['region_id'=>316, 'regionable_id'=>832, 'regionable_type'=>'districts']); //Bogor Selatan - Kota
            DB::table('regionables')->insert(['region_id'=>316, 'regionable_id'=>878, 'regionable_type'=>'districts']); //Bogor Selatan - Kota
                DB::table('regions')->insert(['id'=>317, 'parent'=>316, 'code'=>'16131', 'type'=>'village', 'name'=>'Village 16131, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>317, 'regionable_id'=>8231, 'regionable_type'=>'village']); //Bondongan
                DB::table('regionables')->insert(['region_id'=>317, 'regionable_id'=>8729, 'regionable_type'=>'village']); //Bondongan
                DB::table('regions')->insert(['id'=>318, 'parent'=>316, 'code'=>'16132', 'type'=>'village', 'name'=>'Village 16132, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>318, 'regionable_id'=>8232, 'regionable_type'=>'village']); //Cikaret
                DB::table('regionables')->insert(['region_id'=>318, 'regionable_id'=>8233, 'regionable_type'=>'village']); //Empang
                DB::table('regionables')->insert(['region_id'=>318, 'regionable_id'=>8730, 'regionable_type'=>'village']); //Cikaret
                DB::table('regionables')->insert(['region_id'=>318, 'regionable_id'=>8731, 'regionable_type'=>'village']); //Empang
                DB::table('regions')->insert(['id'=>319, 'parent'=>316, 'code'=>'16133', 'type'=>'village', 'name'=>'Village 16133, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>319, 'regionable_id'=>8234, 'regionable_type'=>'village']); //Batutulis
                DB::table('regionables')->insert(['region_id'=>319, 'regionable_id'=>8235, 'regionable_type'=>'village']); //Cipaku
                DB::table('regionables')->insert(['region_id'=>319, 'regionable_id'=>8732, 'regionable_type'=>'village']); //Batutulis
                DB::table('regionables')->insert(['region_id'=>319, 'regionable_id'=>8733, 'regionable_type'=>'village']); //Cipaku
                DB::table('regions')->insert(['id'=>320, 'parent'=>316, 'code'=>'16134', 'type'=>'village', 'name'=>'Village 16134, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>320, 'regionable_id'=>8236, 'regionable_type'=>'village']); //Lawang Gintung
                DB::table('regionables')->insert(['region_id'=>320, 'regionable_id'=>8237, 'regionable_type'=>'village']); //Pakuan
                DB::table('regionables')->insert(['region_id'=>320, 'regionable_id'=>8734, 'regionable_type'=>'village']); //Lawang Gintung
                DB::table('regionables')->insert(['region_id'=>320, 'regionable_id'=>8735, 'regionable_type'=>'village']); //Pakuan
                DB::table('regions')->insert(['id'=>321, 'parent'=>316, 'code'=>'16135', 'type'=>'village', 'name'=>'Village 16135, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>321, 'regionable_id'=>8238, 'regionable_type'=>'village']); //Mulyaharja
                DB::table('regionables')->insert(['region_id'=>321, 'regionable_id'=>8736, 'regionable_type'=>'village']); //Mulyaharja
                DB::table('regions')->insert(['id'=>322, 'parent'=>316, 'code'=>'16136', 'type'=>'village', 'name'=>'Village 16136, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>322, 'regionable_id'=>8239, 'regionable_type'=>'village']); //Pamoyanan
                DB::table('regionables')->insert(['region_id'=>322, 'regionable_id'=>8240, 'regionable_type'=>'village']); //Ranggamekar
                DB::table('regionables')->insert(['region_id'=>322, 'regionable_id'=>8737, 'regionable_type'=>'village']); //Pamoyanan
                DB::table('regionables')->insert(['region_id'=>322, 'regionable_id'=>8738, 'regionable_type'=>'village']); //Ranggamekar
                DB::table('regions')->insert(['id'=>323, 'parent'=>316, 'code'=>'16137', 'type'=>'village', 'name'=>'Village 16137, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>323, 'regionable_id'=>8241, 'regionable_type'=>'village']); //Genteng
                DB::table('regionables')->insert(['region_id'=>323, 'regionable_id'=>8242, 'regionable_type'=>'village']); //Muarasari
                DB::table('regionables')->insert(['region_id'=>323, 'regionable_id'=>8739, 'regionable_type'=>'village']); //Genteng
                DB::table('regionables')->insert(['region_id'=>323, 'regionable_id'=>8740, 'regionable_type'=>'village']); //Muarasari
                DB::table('regions')->insert(['id'=>324, 'parent'=>316, 'code'=>'16138', 'type'=>'village', 'name'=>'Village 16138, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>324, 'regionable_id'=>8243, 'regionable_type'=>'village']); //Harjasari
                DB::table('regionables')->insert(['region_id'=>324, 'regionable_id'=>8244, 'regionable_type'=>'village']); //Kertamaya
                DB::table('regionables')->insert(['region_id'=>324, 'regionable_id'=>8741, 'regionable_type'=>'village']); //Harjasari
                DB::table('regionables')->insert(['region_id'=>324, 'regionable_id'=>8742, 'regionable_type'=>'village']); //Kertamaya
                DB::table('regions')->insert(['id'=>325, 'parent'=>316, 'code'=>'16139', 'type'=>'village', 'name'=>'Village 16139, Districts 1613, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>325, 'regionable_id'=>8245, 'regionable_type'=>'village']); //Bojongkerta
                DB::table('regionables')->insert(['region_id'=>325, 'regionable_id'=>8246, 'regionable_type'=>'village']); //Rancamaya
                DB::table('regionables')->insert(['region_id'=>325, 'regionable_id'=>8743, 'regionable_type'=>'village']); //Bojongkerta
                DB::table('regionables')->insert(['region_id'=>325, 'regionable_id'=>8744, 'regionable_type'=>'village']); //Rancamaya
            DB::table('regions')->insert(['id'=>326, 'parent'=>296, 'code'=>'1614', 'type'=>'districts', 'name'=>'Districts 1614, City 161, Province 1']);
            DB::table('regionables')->insert(['region_id'=>326, 'regionable_id'=>833, 'regionable_type'=>'districts']); //Bogor Timur - Kota
            DB::table('regionables')->insert(['region_id'=>326, 'regionable_id'=>879, 'regionable_type'=>'districts']); //Bogor Timur - Kota
                DB::table('regions')->insert(['id'=>327, 'parent'=>326, 'code'=>'16141', 'type'=>'village', 'name'=>'Village 16141, Districts 1614, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>327, 'regionable_id'=>8247, 'regionable_type'=>'village']); //Tajur
                DB::table('regionables')->insert(['region_id'=>327, 'regionable_id'=>8745, 'regionable_type'=>'village']); //Tajur
                DB::table('regions')->insert(['id'=>328, 'parent'=>326, 'code'=>'16142', 'type'=>'village', 'name'=>'Village 16142, Districts 1614, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>328, 'regionable_id'=>8248, 'regionable_type'=>'village']); //Sukasari
                DB::table('regionables')->insert(['region_id'=>328, 'regionable_id'=>8746, 'regionable_type'=>'village']); //Sukasari
                DB::table('regions')->insert(['id'=>329, 'parent'=>326, 'code'=>'16143', 'type'=>'village', 'name'=>'Village 16143, Districts 1614, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>329, 'regionable_id'=>8249, 'regionable_type'=>'village']); //Baranangsiang
                DB::table('regionables')->insert(['region_id'=>329, 'regionable_id'=>8747, 'regionable_type'=>'village']); //Baranangsiang
                DB::table('regions')->insert(['id'=>330, 'parent'=>326, 'code'=>'16144', 'type'=>'village', 'name'=>'Village 16144, Districts 1614, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>330, 'regionable_id'=>8250, 'regionable_type'=>'village']); //Katulampa
                DB::table('regionables')->insert(['region_id'=>330, 'regionable_id'=>8748, 'regionable_type'=>'village']); //Katulampa
                DB::table('regions')->insert(['id'=>331, 'parent'=>326, 'code'=>'16145', 'type'=>'village', 'name'=>'Village 16145, Districts 1614, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>331, 'regionable_id'=>8251, 'regionable_type'=>'village']); //Sindangrasa
                DB::table('regionables')->insert(['region_id'=>331, 'regionable_id'=>8749, 'regionable_type'=>'village']); //Sindangrasa
                DB::table('regions')->insert(['id'=>332, 'parent'=>326, 'code'=>'16146', 'type'=>'village', 'name'=>'Village 16146, Districts 1614, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>332, 'regionable_id'=>8252, 'regionable_type'=>'village']); //Sindangsari
                DB::table('regionables')->insert(['region_id'=>332, 'regionable_id'=>8750, 'regionable_type'=>'village']); //Sindangsari
            DB::table('regions')->insert(['id'=>333, 'parent'=>296, 'code'=>'1615', 'type'=>'districts', 'name'=>'Districts 1615, City 161, Province 1']);
            DB::table('regionables')->insert(['region_id'=>333, 'regionable_id'=>834, 'regionable_type'=>'districts']); //Bogor Utara - Kota
            DB::table('regionables')->insert(['region_id'=>333, 'regionable_id'=>880, 'regionable_type'=>'districts']); //Bogor Utara - Kota
                DB::table('regions')->insert(['id'=>334, 'parent'=>333, 'code'=>'16151', 'type'=>'village', 'name'=>'Village 16151, Districts 1615, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>334, 'regionable_id'=>8253, 'regionable_type'=>'village']); //Cibuluh
                DB::table('regionables')->insert(['region_id'=>334, 'regionable_id'=>8751, 'regionable_type'=>'village']); //Cibuluh
                DB::table('regions')->insert(['id'=>335, 'parent'=>333, 'code'=>'16152', 'type'=>'village', 'name'=>'Village 16152, Districts 1615, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>335, 'regionable_id'=>8254, 'regionable_type'=>'village']); //Tegal Gundil
                DB::table('regionables')->insert(['region_id'=>335, 'regionable_id'=>8752, 'regionable_type'=>'village']); //Tegal Gundil
                DB::table('regions')->insert(['id'=>336, 'parent'=>333, 'code'=>'16153', 'type'=>'village', 'name'=>'Village 16153, Districts 1615, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>336, 'regionable_id'=>8255, 'regionable_type'=>'village']); //Bantarjati
                DB::table('regionables')->insert(['region_id'=>336, 'regionable_id'=>8753, 'regionable_type'=>'village']); //Bantarjati
                DB::table('regions')->insert(['id'=>337, 'parent'=>333, 'code'=>'16154', 'type'=>'village', 'name'=>'Village 16154, Districts 1615, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>337, 'regionable_id'=>8256, 'regionable_type'=>'village']); //Tanah Baru
                DB::table('regionables')->insert(['region_id'=>337, 'regionable_id'=>8754, 'regionable_type'=>'village']); //Tanah Baru
                DB::table('regions')->insert(['id'=>338, 'parent'=>333, 'code'=>'16155', 'type'=>'village', 'name'=>'Village 16155, Districts 1615, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>338, 'regionable_id'=>8257, 'regionable_type'=>'village']); //Cimahpar
                DB::table('regionables')->insert(['region_id'=>338, 'regionable_id'=>8755, 'regionable_type'=>'village']); //Cimahpar
                DB::table('regions')->insert(['id'=>339, 'parent'=>333, 'code'=>'16156', 'type'=>'village', 'name'=>'Village 16156, Districts 1615, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>339, 'regionable_id'=>8258, 'regionable_type'=>'village']); //Ciluar
                DB::table('regionables')->insert(['region_id'=>339, 'regionable_id'=>8756, 'regionable_type'=>'village']); //Ciluar
                DB::table('regions')->insert(['id'=>340, 'parent'=>333, 'code'=>'16157', 'type'=>'village', 'name'=>'Village 16157, Districts 1615, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>340, 'regionable_id'=>8259, 'regionable_type'=>'village']); //Ciparigi
                DB::table('regionables')->insert(['region_id'=>340, 'regionable_id'=>8757, 'regionable_type'=>'village']); //Ciparigi
                DB::table('regions')->insert(['id'=>341, 'parent'=>333, 'code'=>'16158', 'type'=>'village', 'name'=>'Village 16158, Districts 1615, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>341, 'regionable_id'=>8260, 'regionable_type'=>'village']); //Kedunghalang
                DB::table('regionables')->insert(['region_id'=>341, 'regionable_id'=>8758, 'regionable_type'=>'village']); //Kedunghalang
            DB::table('regions')->insert(['id'=>342, 'parent'=>296, 'code'=>'1616', 'type'=>'districts', 'name'=>'Districts 1616, City 161, Province 1']);
            DB::table('regionables')->insert(['region_id'=>342, 'regionable_id'=>835, 'regionable_type'=>'districts']); //Tanah Sereal
            DB::table('regionables')->insert(['region_id'=>342, 'regionable_id'=>881, 'regionable_type'=>'districts']); //Tanah Sereal
                DB::table('regions')->insert(['id'=>343, 'parent'=>342, 'code'=>'16161', 'type'=>'village', 'name'=>'Village 16161, Districts 1616, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>343, 'regionable_id'=>8261, 'regionable_type'=>'village']); //Tanah Sareal
                DB::table('regionables')->insert(['region_id'=>343, 'regionable_id'=>8759, 'regionable_type'=>'village']); //Tanah Sareal
                DB::table('regions')->insert(['id'=>344, 'parent'=>342, 'code'=>'16162', 'type'=>'village', 'name'=>'Village 16162, Districts 1616, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>344, 'regionable_id'=>8262, 'regionable_type'=>'village']); //Kebon Pedes
                DB::table('regionables')->insert(['region_id'=>344, 'regionable_id'=>8760, 'regionable_type'=>'village']); //Kebon Pedes
                DB::table('regions')->insert(['id'=>345, 'parent'=>342, 'code'=>'16164', 'type'=>'village', 'name'=>'Village 16164, Districts 1616, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>345, 'regionable_id'=>8263, 'regionable_type'=>'village']); //Kedung Badak
                DB::table('regionables')->insert(['region_id'=>345, 'regionable_id'=>8264, 'regionable_type'=>'village']); //Kedung Jaya
                DB::table('regionables')->insert(['region_id'=>345, 'regionable_id'=>8265, 'regionable_type'=>'village']); //Kedung Waringin
                DB::table('regionables')->insert(['region_id'=>345, 'regionable_id'=>8761, 'regionable_type'=>'village']); //Kedung Badak
                DB::table('regionables')->insert(['region_id'=>345, 'regionable_id'=>8762, 'regionable_type'=>'village']); //Kedung Jaya
                DB::table('regionables')->insert(['region_id'=>345, 'regionable_id'=>8763, 'regionable_type'=>'village']); //Kedung Waringin
                DB::table('regions')->insert(['id'=>346, 'parent'=>342, 'code'=>'16165', 'type'=>'village', 'name'=>'Village 16165, Districts 1616, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>346, 'regionable_id'=>8266, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>346, 'regionable_id'=>8267, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>346, 'regionable_id'=>8764, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>346, 'regionable_id'=>8765, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regions')->insert(['id'=>347, 'parent'=>342, 'code'=>'16166', 'type'=>'village', 'name'=>'Village 16166, Districts 1616, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>347, 'regionable_id'=>8268, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>347, 'regionable_id'=>8766, 'regionable_type'=>'village']); //Cibadak
                DB::table('regions')->insert(['id'=>348, 'parent'=>342, 'code'=>'16167', 'type'=>'village', 'name'=>'Village 16167, Districts 1616, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>348, 'regionable_id'=>8269, 'regionable_type'=>'village']); //Kencana
                DB::table('regionables')->insert(['region_id'=>348, 'regionable_id'=>8767, 'regionable_type'=>'village']); //Kencana
                DB::table('regions')->insert(['id'=>349, 'parent'=>342, 'code'=>'16168', 'type'=>'village', 'name'=>'Village 16168, Districts 1616, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>349, 'regionable_id'=>8270, 'regionable_type'=>'village']); //Mekarwangi
                DB::table('regionables')->insert(['region_id'=>349, 'regionable_id'=>8768, 'regionable_type'=>'village']); //Mekarwangi
                DB::table('regions')->insert(['id'=>350, 'parent'=>342, 'code'=>'16169', 'type'=>'village', 'name'=>'Village 16169, Districts 1616, City 161, Province 1']);
                DB::table('regionables')->insert(['region_id'=>350, 'regionable_id'=>8271, 'regionable_type'=>'village']); //Kayumanis
                DB::table('regionables')->insert(['region_id'=>350, 'regionable_id'=>8769, 'regionable_type'=>'village']); //Kayumanis
        DB::table('regions')->insert(['id'=>351, 'parent'=>1, 'code'=>'163', 'type'=>'city', 'name'=>'City 163, Province 1']);
        DB::table('regionables')->insert(['region_id'=>351, 'regionable_id'=>63, 'regionable_type'=>'city']); //Bogor regencies
        DB::table('regionables')->insert(['region_id'=>351, 'regionable_id'=>64, 'regionable_type'=>'city']); //Bogor city
            DB::table('regions')->insert(['id'=>352, 'parent'=>351, 'code'=>'1631', 'type'=>'districts', 'name'=>'Districts 1631, City 163, Province 1']);
            DB::table('regionables')->insert(['region_id'=>352, 'regionable_id'=>836, 'regionable_type'=>'districts']); //Kemang
            DB::table('regionables')->insert(['region_id'=>352, 'regionable_id'=>837, 'regionable_type'=>'districts']); //Ranca Bungur
            DB::table('regionables')->insert(['region_id'=>352, 'regionable_id'=>882, 'regionable_type'=>'districts']); //Kemang
            DB::table('regionables')->insert(['region_id'=>352, 'regionable_id'=>883, 'regionable_type'=>'districts']); //Ranca Bungur
                DB::table('regions')->insert(['id'=>353, 'parent'=>352, 'code'=>'16310', 'type'=>'village', 'name'=>'Village 16310, Districts 1631, City 163, Province 1']);
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8272, 'regionable_type'=>'village']); //Atang Senjaya
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8273, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8274, 'regionable_type'=>'village']); //Jampang
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8275, 'regionable_type'=>'village']); //Kemang
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8276, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8277, 'regionable_type'=>'village']); //Parakan Jaya
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8278, 'regionable_type'=>'village']); //Pondok Udik
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8279, 'regionable_type'=>'village']); //Semplak Barat
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8280, 'regionable_type'=>'village']); //Tegal
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8281, 'regionable_type'=>'village']); //Bantarjaya
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8282, 'regionable_type'=>'village']); //Bantarsari
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8283, 'regionable_type'=>'village']); //Candali
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8284, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8285, 'regionable_type'=>'village']); //Pasirgaok
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8286, 'regionable_type'=>'village']); //Rancabungur
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8770, 'regionable_type'=>'village']); //Atang Senjaya
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8771, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8772, 'regionable_type'=>'village']); //Jampang
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8773, 'regionable_type'=>'village']); //Kemang
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8774, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8775, 'regionable_type'=>'village']); //Parakan Jaya
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8776, 'regionable_type'=>'village']); //Pondok Udik
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8777, 'regionable_type'=>'village']); //Semplak Barat
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8778, 'regionable_type'=>'village']); //Tegal
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8779, 'regionable_type'=>'village']); //Bantarjaya
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8780, 'regionable_type'=>'village']); //Bantarsari
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8781, 'regionable_type'=>'village']); //Candali
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8782, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8783, 'regionable_type'=>'village']); //Pasirgaok
                DB::table('regionables')->insert(['region_id'=>353, 'regionable_id'=>8784, 'regionable_type'=>'village']); //Rancabungur
            DB::table('regions')->insert(['id'=>354, 'parent'=>351, 'code'=>'1632', 'type'=>'districts', 'name'=>'Districts 1632, City 163, Province 1']);
            DB::table('regionables')->insert(['region_id'=>354, 'regionable_id'=>838, 'regionable_type'=>'districts']); //Tajurhalang
            DB::table('regionables')->insert(['region_id'=>354, 'regionable_id'=>884, 'regionable_type'=>'districts']); //Tajurhalang
                DB::table('regions')->insert(['id'=>355, 'parent'=>354, 'code'=>'16320', 'type'=>'village', 'name'=>'Village 16320, Districts 1632, City 163, Province 1']);
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8287, 'regionable_type'=>'village']); //Citayam
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8288, 'regionable_type'=>'village']); //Kalisuren
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8289, 'regionable_type'=>'village']); //Nanggerang
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8290, 'regionable_type'=>'village']); //Sasak Panjang
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8291, 'regionable_type'=>'village']); //Sukmajaya
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8292, 'regionable_type'=>'village']); //Tajur Halang
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8293, 'regionable_type'=>'village']); //Tonjong
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8785, 'regionable_type'=>'village']); //Citayam
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8786, 'regionable_type'=>'village']); //Kalisuren
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8787, 'regionable_type'=>'village']); //Nanggerang
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8788, 'regionable_type'=>'village']); //Sasak Panjang
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8789, 'regionable_type'=>'village']); //Sukmajaya
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8790, 'regionable_type'=>'village']); //Tajur Halang
                DB::table('regionables')->insert(['region_id'=>355, 'regionable_id'=>8791, 'regionable_type'=>'village']); //Tonjong
            DB::table('regions')->insert(['id'=>356, 'parent'=>351, 'code'=>'1633', 'type'=>'districts', 'name'=>'Districts 1633, City 163, Province 1']);
            DB::table('regionables')->insert(['region_id'=>356, 'regionable_id'=>839, 'regionable_type'=>'districts']); //Parung
            DB::table('regionables')->insert(['region_id'=>356, 'regionable_id'=>885, 'regionable_type'=>'districts']); //Parung
                DB::table('regions')->insert(['id'=>357, 'parent'=>356, 'code'=>'16330', 'type'=>'village', 'name'=>'Village 16330, Districts 1633, City 163, Province 1']);
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8294, 'regionable_type'=>'village']); //Bojong Indah
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8295, 'regionable_type'=>'village']); //Bojong Sempu
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8296, 'regionable_type'=>'village']); //Cogreg
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8297, 'regionable_type'=>'village']); //Iwul
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8298, 'regionable_type'=>'village']); //Jabon Mekar
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8299, 'regionable_type'=>'village']); //Pamagersari
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8300, 'regionable_type'=>'village']); //Parung
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8301, 'regionable_type'=>'village']); //Waru
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8302, 'regionable_type'=>'village']); //Warujaya
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8792, 'regionable_type'=>'village']); //Bojong Indah
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8793, 'regionable_type'=>'village']); //Bojong Sempu
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8794, 'regionable_type'=>'village']); //Cogreg
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8795, 'regionable_type'=>'village']); //Iwul
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8796, 'regionable_type'=>'village']); //Jabon Mekar
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8797, 'regionable_type'=>'village']); //Pamagersari
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8798, 'regionable_type'=>'village']); //Parung
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8799, 'regionable_type'=>'village']); //Waru
                DB::table('regionables')->insert(['region_id'=>357, 'regionable_id'=>8800, 'regionable_type'=>'village']); //Warujaya
            DB::table('regions')->insert(['id'=>358, 'parent'=>351, 'code'=>'1634', 'type'=>'districts', 'name'=>'Districts 1634, City 163, Province 1']);
            DB::table('regionables')->insert(['region_id'=>358, 'regionable_id'=>840, 'regionable_type'=>'districts']); //Gunung Sindur
            DB::table('regionables')->insert(['region_id'=>358, 'regionable_id'=>886, 'regionable_type'=>'districts']); //Gunung Sindur
                DB::table('regions')->insert(['id'=>359, 'parent'=>358, 'code'=>'16340', 'type'=>'village', 'name'=>'Village 16340, Districts 1634, City 163, Province 1']);
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8303, 'regionable_type'=>'village']); //Cibadung
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8304, 'regionable_type'=>'village']); //Cibinong
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8305, 'regionable_type'=>'village']); //Cidokom
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8306, 'regionable_type'=>'village']); //Curug
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8307, 'regionable_type'=>'village']); //Gunung Sindur
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8308, 'regionable_type'=>'village']); //Jampang
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8309, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8310, 'regionable_type'=>'village']); //Padurenan
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8311, 'regionable_type'=>'village']); //Pengasinan
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8312, 'regionable_type'=>'village']); //Rawakalong
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8801, 'regionable_type'=>'village']); //Cibadung
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8802, 'regionable_type'=>'village']); //Cibinong
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8803, 'regionable_type'=>'village']); //Cidokom
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8804, 'regionable_type'=>'village']); //Curug
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8805, 'regionable_type'=>'village']); //Gunung Sindur
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8806, 'regionable_type'=>'village']); //Jampang
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8807, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8808, 'regionable_type'=>'village']); //Padurenan
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8809, 'regionable_type'=>'village']); //Pengasinan
                DB::table('regionables')->insert(['region_id'=>359, 'regionable_id'=>8810, 'regionable_type'=>'village']); //Rawakalong
            DB::table('regions')->insert(['id'=>360, 'parent'=>351, 'code'=>'1635', 'type'=>'districts', 'name'=>'Districts 1635, City 163, Province 1']);
            DB::table('regionables')->insert(['region_id'=>360, 'regionable_id'=>841, 'regionable_type'=>'districts']); //Rumpin
            DB::table('regionables')->insert(['region_id'=>360, 'regionable_id'=>887, 'regionable_type'=>'districts']); //Rumpin
                DB::table('regions')->insert(['id'=>361, 'parent'=>360, 'code'=>'16350', 'type'=>'village', 'name'=>'Village 16350, Districts 1635, City 163, Province 1']);
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8313, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8314, 'regionable_type'=>'village']); //Cidokom
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8315, 'regionable_type'=>'village']); //Cipinang
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8316, 'regionable_type'=>'village']); //Gobang
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8317, 'regionable_type'=>'village']); //Kampung Sawah
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8318, 'regionable_type'=>'village']); //Kerta Jaya
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8319, 'regionable_type'=>'village']); //Leuwibatu
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8320, 'regionable_type'=>'village']); //Mekar Sari
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8321, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8322, 'regionable_type'=>'village']); //Rabak
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8323, 'regionable_type'=>'village']); //Rumpin
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8324, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8325, 'regionable_type'=>'village']); //Sukasari
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8326, 'regionable_type'=>'village']); //Taman Sari
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8811, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8812, 'regionable_type'=>'village']); //Cidokom
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8813, 'regionable_type'=>'village']); //Cipinang
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8814, 'regionable_type'=>'village']); //Gobang
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8815, 'regionable_type'=>'village']); //Kampung Sawah
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8816, 'regionable_type'=>'village']); //Kerta Jaya
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8817, 'regionable_type'=>'village']); //Leuwibatu
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8818, 'regionable_type'=>'village']); //Mekar Sari
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8819, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8820, 'regionable_type'=>'village']); //Rabak
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8821, 'regionable_type'=>'village']); //Rumpin
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8822, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8823, 'regionable_type'=>'village']); //Sukasari
                DB::table('regionables')->insert(['region_id'=>361, 'regionable_id'=>8824, 'regionable_type'=>'village']); //Taman Sari
            DB::table('regions')->insert(['id'=>362, 'parent'=>351, 'code'=>'1636', 'type'=>'districts', 'name'=>'Districts 1636, City 163, Province 1']);
            DB::table('regionables')->insert(['region_id'=>362, 'regionable_id'=>842, 'regionable_type'=>'districts']); //Parung Panjang
            DB::table('regionables')->insert(['region_id'=>362, 'regionable_id'=>888, 'regionable_type'=>'districts']); //Parung Panjang
                DB::table('regions')->insert(['id'=>363, 'parent'=>362, 'code'=>'16360', 'type'=>'village', 'name'=>'Village 16360, Districts 1636, City 163, Province 1']);
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8327, 'regionable_type'=>'village']); //Cibunar
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8328, 'regionable_type'=>'village']); //Cikuda
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8329, 'regionable_type'=>'village']); //Dago
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8330, 'regionable_type'=>'village']); //Gintung Cilejet
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8331, 'regionable_type'=>'village']); //Gorowong
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8332, 'regionable_type'=>'village']); //Jagabaya
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8333, 'regionable_type'=>'village']); //Jagabita
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8334, 'regionable_type'=>'village']); //Kabasiran
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8335, 'regionable_type'=>'village']); //Lumpang
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8336, 'regionable_type'=>'village']); //Parungpanjang
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8337, 'regionable_type'=>'village']); //Pingku
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8825, 'regionable_type'=>'village']); //Cibunar
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8826, 'regionable_type'=>'village']); //Cikuda
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8827, 'regionable_type'=>'village']); //Dago
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8828, 'regionable_type'=>'village']); //Gintung Cilejet
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8829, 'regionable_type'=>'village']); //Gorowong
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8830, 'regionable_type'=>'village']); //Jagabaya
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8831, 'regionable_type'=>'village']); //Jagabita
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8832, 'regionable_type'=>'village']); //Kabasiran
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8833, 'regionable_type'=>'village']); //Lumpang
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8834, 'regionable_type'=>'village']); //Parungpanjang
                DB::table('regionables')->insert(['region_id'=>363, 'regionable_id'=>8835, 'regionable_type'=>'village']); //Pingku
            DB::table('regions')->insert(['id'=>364, 'parent'=>351, 'code'=>'1637', 'type'=>'districts', 'name'=>'Districts 1637, City 163, Province 1']);
            DB::table('regionables')->insert(['region_id'=>364, 'regionable_id'=>843, 'regionable_type'=>'districts']); //Tenjo
            DB::table('regionables')->insert(['region_id'=>364, 'regionable_id'=>844, 'regionable_type'=>'districts']); //Tenjolaya
            DB::table('regionables')->insert(['region_id'=>364, 'regionable_id'=>889, 'regionable_type'=>'districts']); //Tenjo
            DB::table('regionables')->insert(['region_id'=>364, 'regionable_id'=>890, 'regionable_type'=>'districts']); //Tenjolaya
                DB::table('regions')->insert(['id'=>365, 'parent'=>364, 'code'=>'16370', 'type'=>'village', 'name'=>'Village 16370, Districts 1637, City 163, Province 1']);
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8338, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8339, 'regionable_type'=>'village']); //Batok
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8340, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8341, 'regionable_type'=>'village']); //Cilaku
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8342, 'regionable_type'=>'village']); //Ciomas
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8343, 'regionable_type'=>'village']); //Singabangsa
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8344, 'regionable_type'=>'village']); //Singabraja
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8345, 'regionable_type'=>'village']); //Tapos
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8346, 'regionable_type'=>'village']); //Tenjo
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8347, 'regionable_type'=>'village']); //Cibitung Tengah
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8348, 'regionable_type'=>'village']); //Cinangneng
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8349, 'regionable_type'=>'village']); //Gunung Malang
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8350, 'regionable_type'=>'village']); //Situ Daun
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8351, 'regionable_type'=>'village']); //Tapos 1
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8352, 'regionable_type'=>'village']); //Tapos 2
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8836, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8837, 'regionable_type'=>'village']); //Batok
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8838, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8839, 'regionable_type'=>'village']); //Cilaku
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8840, 'regionable_type'=>'village']); //Ciomas
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8841, 'regionable_type'=>'village']); //Singabangsa
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8842, 'regionable_type'=>'village']); //Singabraja
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8843, 'regionable_type'=>'village']); //Tapos
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8844, 'regionable_type'=>'village']); //Tenjo
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8845, 'regionable_type'=>'village']); //Cibitung Tengah
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8846, 'regionable_type'=>'village']); //Cinangneng
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8847, 'regionable_type'=>'village']); //Gunung Malang
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8848, 'regionable_type'=>'village']); //Situ Daun
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8849, 'regionable_type'=>'village']); //Tapos 1
                DB::table('regionables')->insert(['region_id'=>365, 'regionable_id'=>8850, 'regionable_type'=>'village']); //Tapos 2
        DB::table('regions')->insert(['id'=>366, 'parent'=>1, 'code'=>'164', 'type'=>'city', 'name'=>'City 164, Province 1']);
        DB::table('regionables')->insert(['region_id'=>366, 'regionable_id'=>65, 'regionable_type'=>'city']); //Depok city
            DB::table('regions')->insert(['id'=>367, 'parent'=>366, 'code'=>'1641', 'type'=>'districts', 'name'=>'Districts 1641, City 164, Province 1']);
            DB::table('regionables')->insert(['region_id'=>367, 'regionable_id'=>920, 'regionable_type'=>'districts']); //Sukmajaya
            DB::table('regionables')->insert(['region_id'=>367, 'regionable_id'=>921, 'regionable_type'=>'districts']); //Cilodong
                DB::table('regions')->insert(['id'=>368, 'parent'=>367, 'code'=>'16413', 'type'=>'village', 'name'=>'Village 16413, Districts 1641, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>368, 'regionable_id'=>9187, 'regionable_type'=>'village']); //Jatimulya
                DB::table('regionables')->insert(['region_id'=>368, 'regionable_id'=>9188, 'regionable_type'=>'village']); //Kalimulya
                DB::table('regions')->insert(['id'=>369, 'parent'=>367, 'code'=>'16414', 'type'=>'village', 'name'=>'Village 16414, Districts 1641, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>369, 'regionable_id'=>9189, 'regionable_type'=>'village']); //Cilodong
                DB::table('regionables')->insert(['region_id'=>369, 'regionable_id'=>9190, 'regionable_type'=>'village']); //Kalibaru
                DB::table('regions')->insert(['id'=>370, 'parent'=>367, 'code'=>'16415', 'type'=>'village', 'name'=>'Village 16415, Districts 1641, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>370, 'regionable_id'=>9191, 'regionable_type'=>'village']); //Sukamaju
            DB::table('regions')->insert(['id'=>371, 'parent'=>366, 'code'=>'1642', 'type'=>'districts', 'name'=>'Districts 1642, City 164, Province 1']);
            DB::table('regionables')->insert(['region_id'=>371, 'regionable_id'=>922, 'regionable_type'=>'districts']); //Beji
                DB::table('regions')->insert(['id'=>372, 'parent'=>371, 'code'=>'16421', 'type'=>'village', 'name'=>'Village 16421, Districts 1642, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>372, 'regionable_id'=>9192, 'regionable_type'=>'village']); //Beji
                DB::table('regions')->insert(['id'=>373, 'parent'=>371, 'code'=>'16422', 'type'=>'village', 'name'=>'Village 16422, Districts 1642, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>373, 'regionable_id'=>9193, 'regionable_type'=>'village']); //Beji Timur
                DB::table('regions')->insert(['id'=>374, 'parent'=>371, 'code'=>'16423', 'type'=>'village', 'name'=>'Village 16423, Districts 1642, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>374, 'regionable_id'=>9194, 'regionable_type'=>'village']); //Kemiri Muka
                DB::table('regions')->insert(['id'=>375, 'parent'=>371, 'code'=>'16424', 'type'=>'village', 'name'=>'Village 16424, Districts 1642, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>375, 'regionable_id'=>9195, 'regionable_type'=>'village']); //Pondok Cina
                DB::table('regions')->insert(['id'=>376, 'parent'=>371, 'code'=>'16425', 'type'=>'village', 'name'=>'Village 16425, Districts 1642, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>376, 'regionable_id'=>9196, 'regionable_type'=>'village']); //Kukusan
                DB::table('regions')->insert(['id'=>377, 'parent'=>371, 'code'=>'16426', 'type'=>'village', 'name'=>'Village 16426, Districts 1642, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>377, 'regionable_id'=>9197, 'regionable_type'=>'village']); //Tanah Baru
            DB::table('regions')->insert(['id'=>378, 'parent'=>366, 'code'=>'1643', 'type'=>'districts', 'name'=>'Districts 1643, City 164, Province 1']);
            DB::table('regionables')->insert(['region_id'=>378, 'regionable_id'=>923, 'regionable_type'=>'districts']); //Pancoran Mas
            DB::table('regionables')->insert(['region_id'=>378, 'regionable_id'=>924, 'regionable_type'=>'districts']); //Cipayung
                DB::table('regions')->insert(['id'=>379, 'parent'=>378, 'code'=>'16436', 'type'=>'village', 'name'=>'Village 16436, Districts 1643, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>379, 'regionable_id'=>9203, 'regionable_type'=>'village']); //Pancoran Mas
                DB::table('regionables')->insert(['region_id'=>379, 'regionable_id'=>9204, 'regionable_type'=>'village']); //Bojong Pondok Terong
                DB::table('regions')->insert(['id'=>380, 'parent'=>378, 'code'=>'16437', 'type'=>'village', 'name'=>'Village 16437, Districts 1643, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>380, 'regionable_id'=>9205, 'regionable_type'=>'village']); //Cipayung
                DB::table('regionables')->insert(['region_id'=>380, 'regionable_id'=>9206, 'regionable_type'=>'village']); //Cipayung Jaya
                DB::table('regions')->insert(['id'=>381, 'parent'=>378, 'code'=>'16438', 'type'=>'village', 'name'=>'Village 16438, Districts 1643, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>381, 'regionable_id'=>9207, 'regionable_type'=>'village']); //Pondokjaya
                DB::table('regions')->insert(['id'=>382, 'parent'=>378, 'code'=>'16439', 'type'=>'village', 'name'=>'Village 16439, Districts 1643, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>382, 'regionable_id'=>9208, 'regionable_type'=>'village']); //Ratu Jaya
            DB::table('regions')->insert(['id'=>383, 'parent'=>366, 'code'=>'1645', 'type'=>'districts', 'name'=>'Districts 1645, City 164, Province 1']);
            DB::table('regionables')->insert(['region_id'=>383, 'regionable_id'=>925, 'regionable_type'=>'districts']); //Tapos
            DB::table('regionables')->insert(['region_id'=>383, 'regionable_id'=>926, 'regionable_type'=>'districts']); //Cimanggis
                DB::table('regions')->insert(['id'=>384, 'parent'=>383, 'code'=>'16451', 'type'=>'village', 'name'=>'Village 16451, Districts 1645, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>384, 'regionable_id'=>9209, 'regionable_type'=>'village']); //Jatijajar
                DB::table('regionables')->insert(['region_id'=>384, 'regionable_id'=>9216, 'regionable_type'=>'village']); //Pasir Gunung Selatan
                DB::table('regionables')->insert(['region_id'=>384, 'regionable_id'=>9217, 'regionable_type'=>'village']); //Tugu
                DB::table('regions')->insert(['id'=>385, 'parent'=>383, 'code'=>'16452', 'type'=>'village', 'name'=>'Village 16452, Districts 1645, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>385, 'regionable_id'=>9218, 'regionable_type'=>'village']); //Cisalak Pasar
                DB::table('regionables')->insert(['region_id'=>385, 'regionable_id'=>9219, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regions')->insert(['id'=>386, 'parent'=>383, 'code'=>'16453', 'type'=>'village', 'name'=>'Village 16453, Districts 1645, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>386, 'regionable_id'=>9220, 'regionable_type'=>'village']); //Curug
                DB::table('regions')->insert(['id'=>387, 'parent'=>383, 'code'=>'16454', 'type'=>'village', 'name'=>'Village 16454, Districts 1645, City 164, Province 1']);
                DB::table('regionables')->insert(['region_id'=>387, 'regionable_id'=>9210, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>387, 'regionable_id'=>9221, 'regionable_type'=>'village']); //Harjamukti
        DB::table('regions')->insert(['id'=>388, 'parent'=>1, 'code'=>'165', 'type'=>'city', 'name'=>'City 165, Province 1']);
        DB::table('regionables')->insert(['region_id'=>388, 'regionable_id'=>65, 'regionable_type'=>'city']); //Depok city
            DB::table('regions')->insert(['id'=>389, 'parent'=>388, 'code'=>'1651', 'type'=>'districts', 'name'=>'Districts 1651, City 165, Province 1']);
            DB::table('regionables')->insert(['region_id'=>389, 'regionable_id'=>927, 'regionable_type'=>'districts']); //Sawangan
            DB::table('regionables')->insert(['region_id'=>389, 'regionable_id'=>928, 'regionable_type'=>'districts']); //Cinere
            DB::table('regionables')->insert(['region_id'=>389, 'regionable_id'=>929, 'regionable_type'=>'districts']); //Limo
            DB::table('regionables')->insert(['region_id'=>389, 'regionable_id'=>930, 'regionable_type'=>'districts']); //Bojongsari
                DB::table('regions')->insert(['id'=>390, 'parent'=>389, 'code'=>'16516', 'type'=>'village', 'name'=>'Village 16516, Districts 1651, City 165, Province 1']);
                DB::table('regionables')->insert(['region_id'=>390, 'regionable_id'=>9224, 'regionable_type'=>'village']); //Cinangka
                DB::table('regionables')->insert(['region_id'=>390, 'regionable_id'=>9225, 'regionable_type'=>'village']); //Kedaung
                DB::table('regionables')->insert(['region_id'=>390, 'regionable_id'=>9237, 'regionable_type'=>'village']); //Bojong Sari (lama)
                DB::table('regionables')->insert(['region_id'=>390, 'regionable_id'=>9238, 'regionable_type'=>'village']); //Bojong Sari Baru
                DB::table('regions')->insert(['id'=>391, 'parent'=>389, 'code'=>'16517', 'type'=>'village', 'name'=>'Village 16517, Districts 1651, City 165, Province 1']);
                DB::table('regionables')->insert(['region_id'=>391, 'regionable_id'=>9239, 'regionable_type'=>'village']); //Curug
                DB::table('regionables')->insert(['region_id'=>391, 'regionable_id'=>9240, 'regionable_type'=>'village']); //Pondok Petir
                DB::table('regionables')->insert(['region_id'=>391, 'regionable_id'=>9241, 'regionable_type'=>'village']); //Serua
                DB::table('regions')->insert(['id'=>392, 'parent'=>389, 'code'=>'16518', 'type'=>'village', 'name'=>'Village 16518, Districts 1651, City 165, Province 1']);
                DB::table('regionables')->insert(['region_id'=>392, 'regionable_id'=>9226, 'regionable_type'=>'village']); //Pengasihan
                DB::table('regionables')->insert(['region_id'=>392, 'regionable_id'=>9242, 'regionable_type'=>'village']); //Duren Mekar
                DB::table('regionables')->insert(['region_id'=>392, 'regionable_id'=>9243, 'regionable_type'=>'village']); //Duren Seribu
        DB::table('regions')->insert(['id'=>393, 'parent'=>1, 'code'=>'166', 'type'=>'city', 'name'=>'City 166, Province 1']);
        DB::table('regionables')->insert(['region_id'=>393, 'regionable_id'=>63, 'regionable_type'=>'city']); //Bogor regencies
        DB::table('regionables')->insert(['region_id'=>393, 'regionable_id'=>64, 'regionable_type'=>'city']); //Bogor city
            DB::table('regions')->insert(['id'=>394, 'parent'=>393, 'code'=>'1661', 'type'=>'districts', 'name'=>'Districts 1661, City 166, Province 1']);
            DB::table('regionables')->insert(['region_id'=>394, 'regionable_id'=>845, 'regionable_type'=>'districts']); //Ciomas
            DB::table('regionables')->insert(['region_id'=>394, 'regionable_id'=>846, 'regionable_type'=>'districts']); //Tamansari
            DB::table('regionables')->insert(['region_id'=>394, 'regionable_id'=>891, 'regionable_type'=>'districts']); //Ciomas
            DB::table('regionables')->insert(['region_id'=>394, 'regionable_id'=>892, 'regionable_type'=>'districts']); //Tamansari
                DB::table('regions')->insert(['id'=>395, 'parent'=>394, 'code'=>'16610', 'type'=>'village', 'name'=>'Village 16610, Districts 1661, City 166, Province 1']);
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8353, 'regionable_type'=>'village']); //Ciapus
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8354, 'regionable_type'=>'village']); //Ciomas
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8355, 'regionable_type'=>'village']); //Ciomas Rahayu
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8356, 'regionable_type'=>'village']); //Kota Batu
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8357, 'regionable_type'=>'village']); //Laladon
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8358, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8359, 'regionable_type'=>'village']); //Padasuka
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8360, 'regionable_type'=>'village']); //Pagelaran
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8361, 'regionable_type'=>'village']); //Parakan
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8362, 'regionable_type'=>'village']); //Sukaharja
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8363, 'regionable_type'=>'village']); //Sukamakmur
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8364, 'regionable_type'=>'village']); //Pasireurih
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8365, 'regionable_type'=>'village']); //Sirnagalih
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8366, 'regionable_type'=>'village']); //Sukajadi
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8367, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8368, 'regionable_type'=>'village']); //Sukaluyu
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8369, 'regionable_type'=>'village']); //Sukamantri
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8370, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8371, 'regionable_type'=>'village']); //Tamansari
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8851, 'regionable_type'=>'village']); //Ciapus
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8852, 'regionable_type'=>'village']); //Ciomas
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8853, 'regionable_type'=>'village']); //Ciomas Rahayu
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8854, 'regionable_type'=>'village']); //Kota Batu
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8855, 'regionable_type'=>'village']); //Laladon
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8856, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8857, 'regionable_type'=>'village']); //Padasuka
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8858, 'regionable_type'=>'village']); //Pagelaran
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8859, 'regionable_type'=>'village']); //Parakan
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8860, 'regionable_type'=>'village']); //Sukaharja
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8861, 'regionable_type'=>'village']); //Sukamakmur
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8862, 'regionable_type'=>'village']); //Pasireurih
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8863, 'regionable_type'=>'village']); //Sirnagalih
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8864, 'regionable_type'=>'village']); //Sukajadi
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8865, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8866, 'regionable_type'=>'village']); //Sukaluyu
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8867, 'regionable_type'=>'village']); //Sukamantri
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8868, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>395, 'regionable_id'=>8869, 'regionable_type'=>'village']); //Tamansari
            DB::table('regions')->insert(['id'=>396, 'parent'=>393, 'code'=>'1662', 'type'=>'districts', 'name'=>'Districts 1662, City 166, Province 1']);
            DB::table('regionables')->insert(['region_id'=>396, 'regionable_id'=>847, 'regionable_type'=>'districts']); //Ciampea
            DB::table('regionables')->insert(['region_id'=>396, 'regionable_id'=>893, 'regionable_type'=>'districts']); //Ciampea
                DB::table('regions')->insert(['id'=>397, 'parent'=>396, 'code'=>'16620', 'type'=>'village', 'name'=>'Village 16620, Districts 1662, City 166, Province 1']);
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8372, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8373, 'regionable_type'=>'village']); //Bojong Jengkol
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8374, 'regionable_type'=>'village']); //Bojong Rangkas
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8375, 'regionable_type'=>'village']); //Ciampea
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8376, 'regionable_type'=>'village']); //Ciampea Udik
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8377, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8378, 'regionable_type'=>'village']); //Cibanteng
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8379, 'regionable_type'=>'village']); //Cibuntu
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8380, 'regionable_type'=>'village']); //Cicadas
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8381, 'regionable_type'=>'village']); //Cihideung Ilir
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8382, 'regionable_type'=>'village']); //Cihideung Udik
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8383, 'regionable_type'=>'village']); //Cinangka
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8384, 'regionable_type'=>'village']); //Tegal Waru
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8870, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8871, 'regionable_type'=>'village']); //Bojong Jengkol
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8872, 'regionable_type'=>'village']); //Bojong Rangkas
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8873, 'regionable_type'=>'village']); //Ciampea
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8874, 'regionable_type'=>'village']); //Ciampea Udik
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8875, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8876, 'regionable_type'=>'village']); //Cibanteng
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8877, 'regionable_type'=>'village']); //Cibuntu
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8878, 'regionable_type'=>'village']); //Cicadas
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8879, 'regionable_type'=>'village']); //Cihideung Ilir
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8880, 'regionable_type'=>'village']); //Cihideung Udik
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8881, 'regionable_type'=>'village']); //Cinangka
                DB::table('regionables')->insert(['region_id'=>397, 'regionable_id'=>8882, 'regionable_type'=>'village']); //Tegal Waru
            DB::table('regions')->insert(['id'=>398, 'parent'=>393, 'code'=>'1663', 'type'=>'districts', 'name'=>'Districts 1663, City 166, Province 1']);
            DB::table('regionables')->insert(['region_id'=>398, 'regionable_id'=>848, 'regionable_type'=>'districts']); //Cibungbulang
            DB::table('regionables')->insert(['region_id'=>398, 'regionable_id'=>894, 'regionable_type'=>'districts']); //Cibungbulang
                DB::table('regions')->insert(['id'=>399, 'parent'=>398, 'code'=>'16630', 'type'=>'village', 'name'=>'Village 16630, Districts 1663, City 166, Province 1']);
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8385, 'regionable_type'=>'village']); //Cemplang
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8386, 'regionable_type'=>'village']); //Ciaruteun Ilir
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8387, 'regionable_type'=>'village']); //Ciaruteun Udik
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8388, 'regionable_type'=>'village']); //Cibatok 1
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8389, 'regionable_type'=>'village']); //Cibatok 2
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8390, 'regionable_type'=>'village']); //Cijujung
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8391, 'regionable_type'=>'village']); //Cimanggu 1
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8392, 'regionable_type'=>'village']); //Cimanggu 2
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8393, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8394, 'regionable_type'=>'village']); //Galuga
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8395, 'regionable_type'=>'village']); //Girimulya
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8396, 'regionable_type'=>'village']); //Leuweung Kolot
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8397, 'regionable_type'=>'village']); //Situ Ilir
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8398, 'regionable_type'=>'village']); //Situ Udik
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8399, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8883, 'regionable_type'=>'village']); //Cemplang
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8884, 'regionable_type'=>'village']); //Ciaruteun Ilir
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8885, 'regionable_type'=>'village']); //Ciaruteun Udik
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8886, 'regionable_type'=>'village']); //Cibatok 1
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8887, 'regionable_type'=>'village']); //Cibatok 2
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8888, 'regionable_type'=>'village']); //Cijujung
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8889, 'regionable_type'=>'village']); //Cimanggu 1
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8890, 'regionable_type'=>'village']); //Cimanggu 2
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8891, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8892, 'regionable_type'=>'village']); //Galuga
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8893, 'regionable_type'=>'village']); //Girimulya
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8894, 'regionable_type'=>'village']); //Leuweung Kolot
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8895, 'regionable_type'=>'village']); //Situ Ilir
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8896, 'regionable_type'=>'village']); //Situ Udik
                DB::table('regionables')->insert(['region_id'=>399, 'regionable_id'=>8897, 'regionable_type'=>'village']); //Sukamaju
            DB::table('regions')->insert(['id'=>400, 'parent'=>393, 'code'=>'1664', 'type'=>'districts', 'name'=>'Districts 1664, City 166, Province 1']);
            DB::table('regionables')->insert(['region_id'=>400, 'regionable_id'=>849, 'regionable_type'=>'districts']); //Leuwisadeng
            DB::table('regionables')->insert(['region_id'=>400, 'regionable_id'=>850, 'regionable_type'=>'districts']); //Leuwiliang
            DB::table('regionables')->insert(['region_id'=>400, 'regionable_id'=>895, 'regionable_type'=>'districts']); //Leuwisadeng
            DB::table('regionables')->insert(['region_id'=>400, 'regionable_id'=>896, 'regionable_type'=>'districts']); //Leuwiliang
                DB::table('regions')->insert(['id'=>401, 'parent'=>400, 'code'=>'16640', 'type'=>'village', 'name'=>'Village 16640, Districts 1664, City 166, Province 1']);
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8400, 'regionable_type'=>'village']); //Babakan Sadeng
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8401, 'regionable_type'=>'village']); //Kalong 1
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8402, 'regionable_type'=>'village']); //Kalong 2
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8403, 'regionable_type'=>'village']); //Leuwisadeng
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8404, 'regionable_type'=>'village']); //Sadeng
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8405, 'regionable_type'=>'village']); //Sadengkolot
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8406, 'regionable_type'=>'village']); //Sibanteng
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8407, 'regionable_type'=>'village']); //Wangun Jaya
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8408, 'regionable_type'=>'village']); //Barengkok
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8409, 'regionable_type'=>'village']); //Cibeber 1
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8410, 'regionable_type'=>'village']); //Cibeber 2
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8411, 'regionable_type'=>'village']); //Karacak
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8412, 'regionable_type'=>'village']); //Karehkel
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8413, 'regionable_type'=>'village']); //Karyasari
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8414, 'regionable_type'=>'village']); //Leuwiliang
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8415, 'regionable_type'=>'village']); //Leuwimekar
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8416, 'regionable_type'=>'village']); //Pabangbon
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8417, 'regionable_type'=>'village']); //Purasari
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8418, 'regionable_type'=>'village']); //Puraseda
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8898, 'regionable_type'=>'village']); //Babakan Sadeng
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8899, 'regionable_type'=>'village']); //Kalong 1
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8900, 'regionable_type'=>'village']); //Kalong 2
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8901, 'regionable_type'=>'village']); //Leuwisadeng
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8902, 'regionable_type'=>'village']); //Sadeng
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8903, 'regionable_type'=>'village']); //Sadengkolot
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8904, 'regionable_type'=>'village']); //Sibanteng
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8905, 'regionable_type'=>'village']); //Wangun Jaya
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8906, 'regionable_type'=>'village']); //Barengkok
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8907, 'regionable_type'=>'village']); //Cibeber 1
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8908, 'regionable_type'=>'village']); //Cibeber 2
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8909, 'regionable_type'=>'village']); //Karacak
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8910, 'regionable_type'=>'village']); //Karehkel
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8911, 'regionable_type'=>'village']); //Karyasari
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8912, 'regionable_type'=>'village']); //Leuwiliang
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8913, 'regionable_type'=>'village']); //Leuwimekar
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8914, 'regionable_type'=>'village']); //Pabangbon
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8915, 'regionable_type'=>'village']); //Purasari
                DB::table('regionables')->insert(['region_id'=>401, 'regionable_id'=>8916, 'regionable_type'=>'village']); //Puraseda
            DB::table('regions')->insert(['id'=>402, 'parent'=>393, 'code'=>'1665', 'type'=>'districts', 'name'=>'Districts 1665, City 166, Province 1']);
            DB::table('regionables')->insert(['region_id'=>402, 'regionable_id'=>851, 'regionable_type'=>'districts']); //Nanggung
            DB::table('regionables')->insert(['region_id'=>402, 'regionable_id'=>897, 'regionable_type'=>'districts']); //Nanggung
                DB::table('regions')->insert(['id'=>403, 'parent'=>402, 'code'=>'16650', 'type'=>'village', 'name'=>'Village 16650, Districts 1665, City 166, Province 1']);
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8419, 'regionable_type'=>'village']); //Bantar Karet
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8420, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8421, 'regionable_type'=>'village']); //Curug Bitung
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8422, 'regionable_type'=>'village']); //Hambaro
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8423, 'regionable_type'=>'village']); //Kalong Liud
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8424, 'regionable_type'=>'village']); //Malasari
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8425, 'regionable_type'=>'village']); //Nanggung
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8426, 'regionable_type'=>'village']); //Pangkal Jaya
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8427, 'regionable_type'=>'village']); //Parakan Muncang
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8428, 'regionable_type'=>'village']); //Sukaluyu
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8917, 'regionable_type'=>'village']); //Bantar Karet
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8918, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8919, 'regionable_type'=>'village']); //Curug Bitung
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8920, 'regionable_type'=>'village']); //Hambaro
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8921, 'regionable_type'=>'village']); //Kalong Liud
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8922, 'regionable_type'=>'village']); //Malasari
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8923, 'regionable_type'=>'village']); //Nanggung
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8924, 'regionable_type'=>'village']); //Pangkal Jaya
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8925, 'regionable_type'=>'village']); //Parakan Muncang
                DB::table('regionables')->insert(['region_id'=>403, 'regionable_id'=>8926, 'regionable_type'=>'village']); //Sukaluyu
            DB::table('regions')->insert(['id'=>404, 'parent'=>393, 'code'=>'1666', 'type'=>'districts', 'name'=>'Districts 1666, City 166, Province 1']);
            DB::table('regionables')->insert(['region_id'=>404, 'regionable_id'=>852, 'regionable_type'=>'districts']); //Cigudeg
            DB::table('regionables')->insert(['region_id'=>404, 'regionable_id'=>853, 'regionable_type'=>'districts']); //Sukajaya
            DB::table('regionables')->insert(['region_id'=>404, 'regionable_id'=>898, 'regionable_type'=>'districts']); //Cigudeg
            DB::table('regionables')->insert(['region_id'=>404, 'regionable_id'=>899, 'regionable_type'=>'districts']); //Sukajaya
                DB::table('regions')->insert(['id'=>405, 'parent'=>404, 'code'=>'16660', 'type'=>'village', 'name'=>'Village 16660, Districts 1666, City 166, Province 1']);
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8429, 'regionable_type'=>'village']); //Argapura
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8430, 'regionable_type'=>'village']); //Bangunjaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8431, 'regionable_type'=>'village']); //Banyu Asih
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8432, 'regionable_type'=>'village']); //Banyu Resmi
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8433, 'regionable_type'=>'village']); //Banyu Wangi
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8434, 'regionable_type'=>'village']); //Batu Jajar
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8435, 'regionable_type'=>'village']); //Bunar
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8436, 'regionable_type'=>'village']); //Cigudeg
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8437, 'regionable_type'=>'village']); //Cintamanik
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8438, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8439, 'regionable_type'=>'village']); //Rengasjajar
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8440, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8441, 'regionable_type'=>'village']); //Sukaraksa
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8442, 'regionable_type'=>'village']); //Tegallega
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8443, 'regionable_type'=>'village']); //Wargajaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8444, 'regionable_type'=>'village']); //Cileuksa
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8445, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8446, 'regionable_type'=>'village']); //Harkatjaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8447, 'regionable_type'=>'village']); //Jayaraharja
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8448, 'regionable_type'=>'village']); //Kiara Pandak
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8449, 'regionable_type'=>'village']); //Kiarasari
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8450, 'regionable_type'=>'village']); //Pasir Madang
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8451, 'regionable_type'=>'village']); //Sipayung
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8452, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8453, 'regionable_type'=>'village']); //Sukamulih
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8454, 'regionable_type'=>'village']); //Urug
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8927, 'regionable_type'=>'village']); //Argapura
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8928, 'regionable_type'=>'village']); //Bangunjaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8929, 'regionable_type'=>'village']); //Banyu Asih
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8930, 'regionable_type'=>'village']); //Banyu Resmi
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8931, 'regionable_type'=>'village']); //Banyu Wangi
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8932, 'regionable_type'=>'village']); //Batu Jajar
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8933, 'regionable_type'=>'village']); //Bunar
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8934, 'regionable_type'=>'village']); //Cigudeg
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8935, 'regionable_type'=>'village']); //Cintamanik
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8936, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8937, 'regionable_type'=>'village']); //Rengasjajar
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8938, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8939, 'regionable_type'=>'village']); //Sukaraksa
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8940, 'regionable_type'=>'village']); //Tegallega
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8941, 'regionable_type'=>'village']); //Wargajaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8942, 'regionable_type'=>'village']); //Cileuksa
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8943, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8944, 'regionable_type'=>'village']); //Harkatjaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8945, 'regionable_type'=>'village']); //Jayaraharja
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8946, 'regionable_type'=>'village']); //Kiara Pandak
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8947, 'regionable_type'=>'village']); //Kiarasari
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8948, 'regionable_type'=>'village']); //Pasir Madang
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8949, 'regionable_type'=>'village']); //Sipayung
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8950, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8951, 'regionable_type'=>'village']); //Sukamulih
                DB::table('regionables')->insert(['region_id'=>405, 'regionable_id'=>8952, 'regionable_type'=>'village']); //Urug
            DB::table('regions')->insert(['id'=>406, 'parent'=>393, 'code'=>'1667', 'type'=>'districts', 'name'=>'Districts 1667, City 166, Province 1']);
            DB::table('regionables')->insert(['region_id'=>406, 'regionable_id'=>854, 'regionable_type'=>'districts']); //Jasinga
            DB::table('regionables')->insert(['region_id'=>406, 'regionable_id'=>900, 'regionable_type'=>'districts']); //Jasinga
                DB::table('regions')->insert(['id'=>407, 'parent'=>406, 'code'=>'16670', 'type'=>'village', 'name'=>'Village 16670, Districts 1667, City 166, Province 1']);
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8455, 'regionable_type'=>'village']); //Bagoang
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8456, 'regionable_type'=>'village']); //Barengkok
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8457, 'regionable_type'=>'village']); //Cikopomayak
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8458, 'regionable_type'=>'village']); //Curug
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8459, 'regionable_type'=>'village']); //Jasinga
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8460, 'regionable_type'=>'village']); //Jugala Jaya
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8461, 'regionable_type'=>'village']); //Kalongsawah
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8462, 'regionable_type'=>'village']); //Koleang
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8463, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8464, 'regionable_type'=>'village']); //Pamagersari
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8465, 'regionable_type'=>'village']); //Pangaur
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8466, 'regionable_type'=>'village']); //Pangradin
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8467, 'regionable_type'=>'village']); //Setu
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8468, 'regionable_type'=>'village']); //Sipak
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8469, 'regionable_type'=>'village']); //Tegal Wangi
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8953, 'regionable_type'=>'village']); //Bagoang
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8954, 'regionable_type'=>'village']); //Barengkok
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8955, 'regionable_type'=>'village']); //Cikopomayak
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8956, 'regionable_type'=>'village']); //Curug
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8957, 'regionable_type'=>'village']); //Jasinga
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8958, 'regionable_type'=>'village']); //Jugala Jaya
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8959, 'regionable_type'=>'village']); //Kalongsawah
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8960, 'regionable_type'=>'village']); //Koleang
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8961, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8962, 'regionable_type'=>'village']); //Pamagersari
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8963, 'regionable_type'=>'village']); //Pangaur
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8964, 'regionable_type'=>'village']); //Pangradin
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8965, 'regionable_type'=>'village']); //Setu
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8966, 'regionable_type'=>'village']); //Sipak
                DB::table('regionables')->insert(['region_id'=>407, 'regionable_id'=>8967, 'regionable_type'=>'village']); //Tegal Wangi
            DB::table('regions')->insert(['id'=>408, 'parent'=>393, 'code'=>'1668', 'type'=>'districts', 'name'=>'Districts 1668, City 166, Province 1']);
            DB::table('regionables')->insert(['region_id'=>408, 'regionable_id'=>855, 'regionable_type'=>'districts']); //Dramaga
            DB::table('regionables')->insert(['region_id'=>408, 'regionable_id'=>901, 'regionable_type'=>'districts']); //Dramaga
                DB::table('regions')->insert(['id'=>409, 'parent'=>408, 'code'=>'16680', 'type'=>'village', 'name'=>'Village 16680, Districts 1668, City 166, Province 1']);
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8470, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8471, 'regionable_type'=>'village']); //Ciherang
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8472, 'regionable_type'=>'village']); //Cikarawang
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8473, 'regionable_type'=>'village']); //Dramaga
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8474, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8475, 'regionable_type'=>'village']); //Petir
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8476, 'regionable_type'=>'village']); //Purwasari
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8477, 'regionable_type'=>'village']); //Sinar Sari
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8478, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8479, 'regionable_type'=>'village']); //Sukawening
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8968, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8969, 'regionable_type'=>'village']); //Ciherang
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8970, 'regionable_type'=>'village']); //Cikarawang
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8971, 'regionable_type'=>'village']); //Dramaga
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8972, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8973, 'regionable_type'=>'village']); //Petir
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8974, 'regionable_type'=>'village']); //Purwasari
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8975, 'regionable_type'=>'village']); //Sinar Sari
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8976, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>409, 'regionable_id'=>8977, 'regionable_type'=>'village']); //Sukawening
        DB::table('regions')->insert(['id'=>410, 'parent'=>1, 'code'=>'167', 'type'=>'city', 'name'=>'City 167, Province 1']);
        DB::table('regionables')->insert(['region_id'=>410, 'regionable_id'=>63, 'regionable_type'=>'city']); //Bogor regencies
        DB::table('regionables')->insert(['region_id'=>410, 'regionable_id'=>64, 'regionable_type'=>'city']); //Bogor city
            DB::table('regions')->insert(['id'=>411, 'parent'=>410, 'code'=>'1671', 'type'=>'districts', 'name'=>'Districts 1671, City 167, Province 1']);
            DB::table('regionables')->insert(['region_id'=>411, 'regionable_id'=>856, 'regionable_type'=>'districts']); //Klapa Nunggal (kelapa Nunggal)
            DB::table('regionables')->insert(['region_id'=>411, 'regionable_id'=>857, 'regionable_type'=>'districts']); //Sukaraja
            DB::table('regionables')->insert(['region_id'=>411, 'regionable_id'=>902, 'regionable_type'=>'districts']); //Klapa Nunggal (kelapa Nunggal)
            DB::table('regionables')->insert(['region_id'=>411, 'regionable_id'=>903, 'regionable_type'=>'districts']); //Sukaraja
                DB::table('regions')->insert(['id'=>412, 'parent'=>411, 'code'=>'16710', 'type'=>'village', 'name'=>'Village 16710, Districts 1671, City 167, Province 1']);
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8480, 'regionable_type'=>'village']); //Bantar Jati
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8481, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8482, 'regionable_type'=>'village']); //Cikahuripan
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8483, 'regionable_type'=>'village']); //Kembang Kuning
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8484, 'regionable_type'=>'village']); //Klapanunggal
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8485, 'regionable_type'=>'village']); //Leuwikaret
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8486, 'regionable_type'=>'village']); //Ligarmukti
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8487, 'regionable_type'=>'village']); //Lulut
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8488, 'regionable_type'=>'village']); //Nambo
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8489, 'regionable_type'=>'village']); //Cadas Ngampar
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8490, 'regionable_type'=>'village']); //Cibanon
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8491, 'regionable_type'=>'village']); //Cijujung
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8492, 'regionable_type'=>'village']); //Cikeas
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8493, 'regionable_type'=>'village']); //Cilebut Barat
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8494, 'regionable_type'=>'village']); //Cilebut Timur
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8495, 'regionable_type'=>'village']); //Cimandala
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8496, 'regionable_type'=>'village']); //Gunung Geulis
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8497, 'regionable_type'=>'village']); //Nagrak
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8498, 'regionable_type'=>'village']); //Pasir Jambu
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8499, 'regionable_type'=>'village']); //Pasirlaja
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8500, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8501, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8978, 'regionable_type'=>'village']); //Bantar Jati
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8979, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8980, 'regionable_type'=>'village']); //Cikahuripan
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8981, 'regionable_type'=>'village']); //Kembang Kuning
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8982, 'regionable_type'=>'village']); //Klapanunggal
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8983, 'regionable_type'=>'village']); //Leuwikaret
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8984, 'regionable_type'=>'village']); //Ligarmukti
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8985, 'regionable_type'=>'village']); //Lulut
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8986, 'regionable_type'=>'village']); //Nambo
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8987, 'regionable_type'=>'village']); //Cadas Ngampar
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8988, 'regionable_type'=>'village']); //Cibanon
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8989, 'regionable_type'=>'village']); //Cijujung
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8990, 'regionable_type'=>'village']); //Cikeas
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8991, 'regionable_type'=>'village']); //Cilebut Barat
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8992, 'regionable_type'=>'village']); //Cilebut Timur
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8993, 'regionable_type'=>'village']); //Cimandala
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8994, 'regionable_type'=>'village']); //Gunung Geulis
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8995, 'regionable_type'=>'village']); //Nagrak
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8996, 'regionable_type'=>'village']); //Pasir Jambu
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8997, 'regionable_type'=>'village']); //Pasirlaja
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8998, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>412, 'regionable_id'=>8999, 'regionable_type'=>'village']); //Sukatani
            DB::table('regions')->insert(['id'=>413, 'parent'=>410, 'code'=>'1672', 'type'=>'districts', 'name'=>'Districts 1672, City 167, Province 1']);
            DB::table('regionables')->insert(['region_id'=>413, 'regionable_id'=>858, 'regionable_type'=>'districts']); //Ciawi
            DB::table('regionables')->insert(['region_id'=>413, 'regionable_id'=>904, 'regionable_type'=>'districts']); //Ciawi
                DB::table('regions')->insert(['id'=>414, 'parent'=>413, 'code'=>'16720', 'type'=>'village', 'name'=>'Village 16720, Districts 1672, City 167, Province 1']);
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8502, 'regionable_type'=>'village']); //Banjar Sari
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8503, 'regionable_type'=>'village']); //Banjar Wangi
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8504, 'regionable_type'=>'village']); //Banjar Waru
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8505, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8506, 'regionable_type'=>'village']); //Bitung Sari
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8507, 'regionable_type'=>'village']); //Bojong Murni
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8508, 'regionable_type'=>'village']); //Ciawi
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8509, 'regionable_type'=>'village']); //Cibedug
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8510, 'regionable_type'=>'village']); //Cileungsi
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8511, 'regionable_type'=>'village']); //Citapen
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8512, 'regionable_type'=>'village']); //Jambu Luwuk
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8513, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>8514, 'regionable_type'=>'village']); //Teluk Pinang
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9000, 'regionable_type'=>'village']); //Banjar Sari
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9001, 'regionable_type'=>'village']); //Banjar Wangi
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9002, 'regionable_type'=>'village']); //Banjar Waru
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9003, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9004, 'regionable_type'=>'village']); //Bitung Sari
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9005, 'regionable_type'=>'village']); //Bojong Murni
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9006, 'regionable_type'=>'village']); //Ciawi
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9007, 'regionable_type'=>'village']); //Cibedug
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9008, 'regionable_type'=>'village']); //Cileungsi
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9009, 'regionable_type'=>'village']); //Citapen
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9010, 'regionable_type'=>'village']); //Jambu Luwuk
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9011, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>414, 'regionable_id'=>9012, 'regionable_type'=>'village']); //Teluk Pinang
            DB::table('regions')->insert(['id'=>415, 'parent'=>410, 'code'=>'1673', 'type'=>'districts', 'name'=>'Districts 1673, City 167, Province 1']);
            DB::table('regionables')->insert(['region_id'=>415, 'regionable_id'=>859, 'regionable_type'=>'districts']); //Caringin
            DB::table('regionables')->insert(['region_id'=>415, 'regionable_id'=>905, 'regionable_type'=>'districts']); //Caringin
                DB::table('regions')->insert(['id'=>416, 'parent'=>415, 'code'=>'16730', 'type'=>'village', 'name'=>'Village 16730, Districts 1673, City 167, Province 1']);
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8515, 'regionable_type'=>'village']); //Caringin
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8516, 'regionable_type'=>'village']); //Ciderum
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8517, 'regionable_type'=>'village']); //Ciherang Pondok
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8518, 'regionable_type'=>'village']); //Cimande
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8519, 'regionable_type'=>'village']); //Cimande Hilir
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8520, 'regionable_type'=>'village']); //Cinagara
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8521, 'regionable_type'=>'village']); //Lemah Duhur
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8522, 'regionable_type'=>'village']); //Muarajaya
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8523, 'regionable_type'=>'village']); //Pancawati
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8524, 'regionable_type'=>'village']); //Pasir Buncir
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8525, 'regionable_type'=>'village']); //Pasir Muncang
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>8526, 'regionable_type'=>'village']); //Tangkil
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9013, 'regionable_type'=>'village']); //Caringin
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9014, 'regionable_type'=>'village']); //Ciderum
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9015, 'regionable_type'=>'village']); //Ciherang Pondok
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9016, 'regionable_type'=>'village']); //Cimande
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9017, 'regionable_type'=>'village']); //Cimande Hilir
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9018, 'regionable_type'=>'village']); //Cinagara
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9019, 'regionable_type'=>'village']); //Lemah Duhur
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9020, 'regionable_type'=>'village']); //Muarajaya
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9021, 'regionable_type'=>'village']); //Pancawati
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9022, 'regionable_type'=>'village']); //Pasir Buncir
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9023, 'regionable_type'=>'village']); //Pasir Muncang
                DB::table('regionables')->insert(['region_id'=>416, 'regionable_id'=>9024, 'regionable_type'=>'village']); //Tangkil
            DB::table('regions')->insert(['id'=>417, 'parent'=>410, 'code'=>'1674', 'type'=>'districts', 'name'=>'Districts 1674, City 167, Province 1']);
            DB::table('regionables')->insert(['region_id'=>417, 'regionable_id'=>860, 'regionable_type'=>'districts']); //Cijeruk
            DB::table('regionables')->insert(['region_id'=>417, 'regionable_id'=>906, 'regionable_type'=>'districts']); //Cijeruk
                DB::table('regions')->insert(['id'=>418, 'parent'=>417, 'code'=>'16740', 'type'=>'village', 'name'=>'Village 16740, Districts 1674, City 167, Province 1']);
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8527, 'regionable_type'=>'village']); //Cibalung
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8528, 'regionable_type'=>'village']); //Cijeruk
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8529, 'regionable_type'=>'village']); //Cipelang
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8530, 'regionable_type'=>'village']); //Cipicung
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8531, 'regionable_type'=>'village']); //Palasari
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8532, 'regionable_type'=>'village']); //Sukaharja
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8533, 'regionable_type'=>'village']); //Tajur Halang
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8534, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>8535, 'regionable_type'=>'village']); //Warung Menteng
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9025, 'regionable_type'=>'village']); //Cibalung
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9026, 'regionable_type'=>'village']); //Cijeruk
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9027, 'regionable_type'=>'village']); //Cipelang
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9028, 'regionable_type'=>'village']); //Cipicung
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9029, 'regionable_type'=>'village']); //Palasari
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9030, 'regionable_type'=>'village']); //Sukaharja
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9031, 'regionable_type'=>'village']); //Tajur Halang
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9032, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regionables')->insert(['region_id'=>418, 'regionable_id'=>9033, 'regionable_type'=>'village']); //Warung Menteng
            DB::table('regions')->insert(['id'=>419, 'parent'=>410, 'code'=>'1675', 'type'=>'districts', 'name'=>'Districts 1675, City 167, Province 1']);
            DB::table('regionables')->insert(['region_id'=>419, 'regionable_id'=>861, 'regionable_type'=>'districts']); //Cisarua
            DB::table('regionables')->insert(['region_id'=>419, 'regionable_id'=>907, 'regionable_type'=>'districts']); //Cisarua
                DB::table('regions')->insert(['id'=>420, 'parent'=>419, 'code'=>'16750', 'type'=>'village', 'name'=>'Village 16750, Districts 1675, City 167, Province 1']);
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8536, 'regionable_type'=>'village']); //Batu Layang
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8537, 'regionable_type'=>'village']); //Cibeureum
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8538, 'regionable_type'=>'village']); //Cilember
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8539, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8540, 'regionable_type'=>'village']); //Citeko
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8541, 'regionable_type'=>'village']); //Jogjogan
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8542, 'regionable_type'=>'village']); //Kopo
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8543, 'regionable_type'=>'village']); //Leuwimalang
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8544, 'regionable_type'=>'village']); //Tugu Selatan
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>8545, 'regionable_type'=>'village']); //Tugu Utara
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9034, 'regionable_type'=>'village']); //Batu Layang
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9035, 'regionable_type'=>'village']); //Cibeureum
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9036, 'regionable_type'=>'village']); //Cilember
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9037, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9038, 'regionable_type'=>'village']); //Citeko
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9039, 'regionable_type'=>'village']); //Jogjogan
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9040, 'regionable_type'=>'village']); //Kopo
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9041, 'regionable_type'=>'village']); //Leuwimalang
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9042, 'regionable_type'=>'village']); //Tugu Selatan
                DB::table('regionables')->insert(['region_id'=>420, 'regionable_id'=>9043, 'regionable_type'=>'village']); //Tugu Utara
            DB::table('regions')->insert(['id'=>421, 'parent'=>410, 'code'=>'1677', 'type'=>'districts', 'name'=>'Districts 1677, City 167, Province 1']);
            DB::table('regionables')->insert(['region_id'=>421, 'regionable_id'=>862, 'regionable_type'=>'districts']); //Megamendung
            DB::table('regionables')->insert(['region_id'=>421, 'regionable_id'=>908, 'regionable_type'=>'districts']); //Megamendung
                DB::table('regions')->insert(['id'=>422, 'parent'=>421, 'code'=>'16770', 'type'=>'village', 'name'=>'Village 16770, Districts 1677, City 167, Province 1']);
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8546, 'regionable_type'=>'village']); //Cipayung (cipayung Datar)
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8547, 'regionable_type'=>'village']); //Cipayung Girang
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8548, 'regionable_type'=>'village']); //Gadog
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8549, 'regionable_type'=>'village']); //Kuta
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8550, 'regionable_type'=>'village']); //Megamendung
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8551, 'regionable_type'=>'village']); //Pasir Angin
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8552, 'regionable_type'=>'village']); //Sukagalih
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8553, 'regionable_type'=>'village']); //Sukakarya
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8554, 'regionable_type'=>'village']); //Sukamahi
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8555, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8556, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>8557, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9044, 'regionable_type'=>'village']); //Cipayung (cipayung Datar)
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9045, 'regionable_type'=>'village']); //Cipayung Girang
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9046, 'regionable_type'=>'village']); //Gadog
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9047, 'regionable_type'=>'village']); //Kuta
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9048, 'regionable_type'=>'village']); //Megamendung
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9049, 'regionable_type'=>'village']); //Pasir Angin
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9050, 'regionable_type'=>'village']); //Sukagalih
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9051, 'regionable_type'=>'village']); //Sukakarya
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9052, 'regionable_type'=>'village']); //Sukamahi
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9053, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9054, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>422, 'regionable_id'=>9055, 'regionable_type'=>'village']); //Sukaresmi
        DB::table('regions')->insert(['id'=>423, 'parent'=>1, 'code'=>'168', 'type'=>'city', 'name'=>'City 168, Province 1']);
        DB::table('regionables')->insert(['region_id'=>423, 'regionable_id'=>63, 'regionable_type'=>'city']); //Bogor regencies
        DB::table('regionables')->insert(['region_id'=>423, 'regionable_id'=>64, 'regionable_type'=>'city']); //Bogor city
            DB::table('regions')->insert(['id'=>424, 'parent'=>423, 'code'=>'1681', 'type'=>'districts', 'name'=>'Districts 1681, City 168, Province 1']);
            DB::table('regionables')->insert(['region_id'=>424, 'regionable_id'=>863, 'regionable_type'=>'districts']); //Babakan Madang
            DB::table('regionables')->insert(['region_id'=>424, 'regionable_id'=>864, 'regionable_type'=>'districts']); //Pamijahan
            DB::table('regionables')->insert(['region_id'=>424, 'regionable_id'=>865, 'regionable_type'=>'districts']); //Citeureup
            DB::table('regionables')->insert(['region_id'=>424, 'regionable_id'=>909, 'regionable_type'=>'districts']); //Babakan Madang
            DB::table('regionables')->insert(['region_id'=>424, 'regionable_id'=>910, 'regionable_type'=>'districts']); //Pamijahan
            DB::table('regionables')->insert(['region_id'=>424, 'regionable_id'=>911, 'regionable_type'=>'districts']); //Citeureup
                DB::table('regions')->insert(['id'=>425, 'parent'=>424, 'code'=>'16810', 'type'=>'village', 'name'=>'Village 16810, Districts 1681, City 168, Province 1']);
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8558, 'regionable_type'=>'village']); //Babakan Madang
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8559, 'regionable_type'=>'village']); //Bojong Koneng
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8560, 'regionable_type'=>'village']); //Cijayanti
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8561, 'regionable_type'=>'village']); //Cipambuan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8562, 'regionable_type'=>'village']); //Citaringgul
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8563, 'regionable_type'=>'village']); //Kadumangu
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8564, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8565, 'regionable_type'=>'village']); //Sentul
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8566, 'regionable_type'=>'village']); //Sumur Batu
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8567, 'regionable_type'=>'village']); //Ciasihan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8568, 'regionable_type'=>'village']); //Ciasmara
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8569, 'regionable_type'=>'village']); //Cibening
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8570, 'regionable_type'=>'village']); //Cibitung Kulon
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8571, 'regionable_type'=>'village']); //Cibitung Wetan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8572, 'regionable_type'=>'village']); //Cibunian
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8573, 'regionable_type'=>'village']); //Cimayang
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8574, 'regionable_type'=>'village']); //Gunung Bunder 1
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8575, 'regionable_type'=>'village']); //Gunung Bunder 2
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8576, 'regionable_type'=>'village']); //Gunung Menyan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8577, 'regionable_type'=>'village']); //Gunung Picung
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8578, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8579, 'regionable_type'=>'village']); //Pamijahan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8580, 'regionable_type'=>'village']); //Pasarean
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8581, 'regionable_type'=>'village']); //Purwabakti
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8582, 'regionable_type'=>'village']); //Citeureup
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8583, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8584, 'regionable_type'=>'village']); //Hambalang
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8585, 'regionable_type'=>'village']); //Karang Asem Barat
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8586, 'regionable_type'=>'village']); //Karang Asem Timur
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8587, 'regionable_type'=>'village']); //Leuwinutug
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8588, 'regionable_type'=>'village']); //Pasir Mukti
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8589, 'regionable_type'=>'village']); //Puspanegara
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8590, 'regionable_type'=>'village']); //Puspasari
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8591, 'regionable_type'=>'village']); //Sanja
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8592, 'regionable_type'=>'village']); //Sukahati
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8593, 'regionable_type'=>'village']); //Tajur
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8594, 'regionable_type'=>'village']); //Tangkil
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>8595, 'regionable_type'=>'village']); //Tarikolot
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9056, 'regionable_type'=>'village']); //Babakan Madang
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9057, 'regionable_type'=>'village']); //Bojong Koneng
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9058, 'regionable_type'=>'village']); //Cijayanti
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9059, 'regionable_type'=>'village']); //Cipambuan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9060, 'regionable_type'=>'village']); //Citaringgul
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9061, 'regionable_type'=>'village']); //Kadumangu
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9062, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9063, 'regionable_type'=>'village']); //Sentul
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9064, 'regionable_type'=>'village']); //Sumur Batu
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9065, 'regionable_type'=>'village']); //Ciasihan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9066, 'regionable_type'=>'village']); //Ciasmara
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9067, 'regionable_type'=>'village']); //Cibening
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9068, 'regionable_type'=>'village']); //Cibitung Kulon
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9069, 'regionable_type'=>'village']); //Cibitung Wetan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9070, 'regionable_type'=>'village']); //Cibunian
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9071, 'regionable_type'=>'village']); //Cimayang
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9072, 'regionable_type'=>'village']); //Gunung Bunder 1
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9073, 'regionable_type'=>'village']); //Gunung Bunder 2
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9074, 'regionable_type'=>'village']); //Gunung Menyan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9075, 'regionable_type'=>'village']); //Gunung Picung
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9076, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9077, 'regionable_type'=>'village']); //Pamijahan
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9078, 'regionable_type'=>'village']); //Pasarean
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9079, 'regionable_type'=>'village']); //Purwabakti
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9080, 'regionable_type'=>'village']); //Citeureup
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9081, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9082, 'regionable_type'=>'village']); //Hambalang
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9083, 'regionable_type'=>'village']); //Karang Asem Barat
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9084, 'regionable_type'=>'village']); //Karang Asem Timur
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9085, 'regionable_type'=>'village']); //Leuwinutug
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9086, 'regionable_type'=>'village']); //Pasir Mukti
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9087, 'regionable_type'=>'village']); //Puspanegara
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9088, 'regionable_type'=>'village']); //Puspasari
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9089, 'regionable_type'=>'village']); //Sanja
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9090, 'regionable_type'=>'village']); //Sukahati
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9091, 'regionable_type'=>'village']); //Tajur
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9092, 'regionable_type'=>'village']); //Tangkil
                DB::table('regionables')->insert(['region_id'=>425, 'regionable_id'=>9093, 'regionable_type'=>'village']); //Tarikolot
            DB::table('regions')->insert(['id'=>426, 'parent'=>423, 'code'=>'1682', 'type'=>'districts', 'name'=>'Districts 1682, City 168, Province 1']);
            DB::table('regionables')->insert(['region_id'=>426, 'regionable_id'=>866, 'regionable_type'=>'districts']); //Cileungsi
            DB::table('regionables')->insert(['region_id'=>426, 'regionable_id'=>912, 'regionable_type'=>'districts']); //Cileungsi
                DB::table('regions')->insert(['id'=>427, 'parent'=>426, 'code'=>'16820', 'type'=>'village', 'name'=>'Village 16820, Districts 1682, City 168, Province 1']);
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8596, 'regionable_type'=>'village']); //Cileungsi
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8597, 'regionable_type'=>'village']); //Cileungsi Kidul
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8598, 'regionable_type'=>'village']); //Cipenjo
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8599, 'regionable_type'=>'village']); //Cipeucang
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8600, 'regionable_type'=>'village']); //Dayeuh
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8601, 'regionable_type'=>'village']); //Gandoang
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8602, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8603, 'regionable_type'=>'village']); //Limus Nunggal
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8604, 'regionable_type'=>'village']); //Mampir
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8605, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8606, 'regionable_type'=>'village']); //Pasir Angin
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>8607, 'regionable_type'=>'village']); //Setu Sari
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9094, 'regionable_type'=>'village']); //Cileungsi
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9095, 'regionable_type'=>'village']); //Cileungsi Kidul
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9096, 'regionable_type'=>'village']); //Cipenjo
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9097, 'regionable_type'=>'village']); //Cipeucang
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9098, 'regionable_type'=>'village']); //Dayeuh
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9099, 'regionable_type'=>'village']); //Gandoang
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9100, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9101, 'regionable_type'=>'village']); //Limus Nunggal
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9102, 'regionable_type'=>'village']); //Mampir
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9103, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9104, 'regionable_type'=>'village']); //Pasir Angin
                DB::table('regionables')->insert(['region_id'=>427, 'regionable_id'=>9105, 'regionable_type'=>'village']); //Setu Sari
            DB::table('regions')->insert(['id'=>428, 'parent'=>423, 'code'=>'1683', 'type'=>'districts', 'name'=>'Districts 1683, City 168, Province 1']);
            DB::table('regionables')->insert(['region_id'=>428, 'regionable_id'=>867, 'regionable_type'=>'districts']); //Jonggol
            DB::table('regionables')->insert(['region_id'=>428, 'regionable_id'=>868, 'regionable_type'=>'districts']); //Sukamakmur
            DB::table('regionables')->insert(['region_id'=>428, 'regionable_id'=>913, 'regionable_type'=>'districts']); //Jonggol
            DB::table('regionables')->insert(['region_id'=>428, 'regionable_id'=>914, 'regionable_type'=>'districts']); //Sukamakmur
                DB::table('regions')->insert(['id'=>429, 'parent'=>428, 'code'=>'16830', 'type'=>'village', 'name'=>'Village 16830, Districts 1683, City 168, Province 1']);
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8608, 'regionable_type'=>'village']); //Balekambang
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8609, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8610, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8611, 'regionable_type'=>'village']); //Jonggol
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8612, 'regionable_type'=>'village']); //Singajaya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8613, 'regionable_type'=>'village']); //Singasari
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8614, 'regionable_type'=>'village']); //Sirnagalih
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8615, 'regionable_type'=>'village']); //Sukagalih
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8616, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8617, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8618, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8619, 'regionable_type'=>'village']); //Sukanegara
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8620, 'regionable_type'=>'village']); //Sukasirna
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8621, 'regionable_type'=>'village']); //Weninggalih
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8622, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8623, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8624, 'regionable_type'=>'village']); //Sirnajaya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8625, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8626, 'regionable_type'=>'village']); //Sukaharja
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8627, 'regionable_type'=>'village']); //Sukamakmur
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8628, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8629, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8630, 'regionable_type'=>'village']); //Sukawangi
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>8631, 'regionable_type'=>'village']); //Wargajaya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9106, 'regionable_type'=>'village']); //Balekambang
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9107, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9108, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9109, 'regionable_type'=>'village']); //Jonggol
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9110, 'regionable_type'=>'village']); //Singajaya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9111, 'regionable_type'=>'village']); //Singasari
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9112, 'regionable_type'=>'village']); //Sirnagalih
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9113, 'regionable_type'=>'village']); //Sukagalih
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9114, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9115, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9116, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9117, 'regionable_type'=>'village']); //Sukanegara
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9118, 'regionable_type'=>'village']); //Sukasirna
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9119, 'regionable_type'=>'village']); //Weninggalih
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9120, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9121, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9122, 'regionable_type'=>'village']); //Sirnajaya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9123, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9124, 'regionable_type'=>'village']); //Sukaharja
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9125, 'regionable_type'=>'village']); //Sukamakmur
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9126, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9127, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9128, 'regionable_type'=>'village']); //Sukawangi
                DB::table('regionables')->insert(['region_id'=>429, 'regionable_id'=>9129, 'regionable_type'=>'village']); //Wargajaya
            DB::table('regions')->insert(['id'=>430, 'parent'=>423, 'code'=>'1684', 'type'=>'districts', 'name'=>'Districts 1684, City 168, Province 1']);
            DB::table('regionables')->insert(['region_id'=>430, 'regionable_id'=>869, 'regionable_type'=>'districts']); //Tanjungsari
            DB::table('regionables')->insert(['region_id'=>430, 'regionable_id'=>870, 'regionable_type'=>'districts']); //Cariu
            DB::table('regionables')->insert(['region_id'=>430, 'regionable_id'=>915, 'regionable_type'=>'districts']); //Tanjungsari
            DB::table('regionables')->insert(['region_id'=>430, 'regionable_id'=>916, 'regionable_type'=>'districts']); //Cariu
                DB::table('regions')->insert(['id'=>431, 'parent'=>430, 'code'=>'16840', 'type'=>'village', 'name'=>'Village 16840, Districts 1684, City 168, Province 1']);
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8632, 'regionable_type'=>'village']); //Antajaya
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8633, 'regionable_type'=>'village']); //Buanajaya
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8634, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8635, 'regionable_type'=>'village']); //Pasir Tanjung
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8636, 'regionable_type'=>'village']); //Selawangi
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8637, 'regionable_type'=>'village']); //Sirnarasa
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8638, 'regionable_type'=>'village']); //Sirnasari
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8639, 'regionable_type'=>'village']); //Sukarasa
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8640, 'regionable_type'=>'village']); //Tanjungrasa
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8641, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8642, 'regionable_type'=>'village']); //Babakan Raden
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8643, 'regionable_type'=>'village']); //Bantar Kuning
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8644, 'regionable_type'=>'village']); //Cariu
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8645, 'regionable_type'=>'village']); //Cibatu Tiga
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8646, 'regionable_type'=>'village']); //Cikutamahi
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8647, 'regionable_type'=>'village']); //Karya Mekar
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8648, 'regionable_type'=>'village']); //Kuta Mekar
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8649, 'regionable_type'=>'village']); //Mekarwangi
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8650, 'regionable_type'=>'village']); //Sukajadi
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>8651, 'regionable_type'=>'village']); //Tegal Panjang
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9130, 'regionable_type'=>'village']); //Antajaya
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9131, 'regionable_type'=>'village']); //Buanajaya
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9132, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9133, 'regionable_type'=>'village']); //Pasir Tanjung
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9134, 'regionable_type'=>'village']); //Selawangi
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9135, 'regionable_type'=>'village']); //Sirnarasa
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9136, 'regionable_type'=>'village']); //Sirnasari
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9137, 'regionable_type'=>'village']); //Sukarasa
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9138, 'regionable_type'=>'village']); //Tanjungrasa
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9139, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9140, 'regionable_type'=>'village']); //Babakan Raden
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9141, 'regionable_type'=>'village']); //Bantar Kuning
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9142, 'regionable_type'=>'village']); //Cariu
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9143, 'regionable_type'=>'village']); //Cibatu Tiga
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9144, 'regionable_type'=>'village']); //Cikutamahi
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9145, 'regionable_type'=>'village']); //Karya Mekar
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9146, 'regionable_type'=>'village']); //Kuta Mekar
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9147, 'regionable_type'=>'village']); //Mekarwangi
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9148, 'regionable_type'=>'village']); //Sukajadi
                DB::table('regionables')->insert(['region_id'=>431, 'regionable_id'=>9149, 'regionable_type'=>'village']); //Tegal Panjang
        DB::table('regions')->insert(['id'=>432, 'parent'=>1, 'code'=>'169', 'type'=>'city', 'name'=>'City 169, Province 1']);
        DB::table('regionables')->insert(['region_id'=>432, 'regionable_id'=>63, 'regionable_type'=>'city']); //Bogor regencies
        DB::table('regionables')->insert(['region_id'=>432, 'regionable_id'=>64, 'regionable_type'=>'city']); //Bogor city
            DB::table('regions')->insert(['id'=>433, 'parent'=>432, 'code'=>'1691', 'type'=>'districts', 'name'=>'Districts 1691, City 169, Province 1']);
            DB::table('regionables')->insert(['region_id'=>433, 'regionable_id'=>871, 'regionable_type'=>'districts']); //Cibinong
            DB::table('regionables')->insert(['region_id'=>433, 'regionable_id'=>917, 'regionable_type'=>'districts']); //Cibinong
                DB::table('regions')->insert(['id'=>434, 'parent'=>433, 'code'=>'16911', 'type'=>'village', 'name'=>'Village 16911, Districts 1691, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>434, 'regionable_id'=>8652, 'regionable_type'=>'village']); //Cibinong
                DB::table('regionables')->insert(['region_id'=>434, 'regionable_id'=>9150, 'regionable_type'=>'village']); //Cibinong
                DB::table('regions')->insert(['id'=>435, 'parent'=>433, 'code'=>'16912', 'type'=>'village', 'name'=>'Village 16912, Districts 1691, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>435, 'regionable_id'=>8653, 'regionable_type'=>'village']); //Nanggewer
                DB::table('regionables')->insert(['region_id'=>435, 'regionable_id'=>8654, 'regionable_type'=>'village']); //Nanggewer Mekar
                DB::table('regionables')->insert(['region_id'=>435, 'regionable_id'=>9151, 'regionable_type'=>'village']); //Nanggewer
                DB::table('regionables')->insert(['region_id'=>435, 'regionable_id'=>9152, 'regionable_type'=>'village']); //Nanggewer Mekar
                DB::table('regions')->insert(['id'=>436, 'parent'=>433, 'code'=>'16913', 'type'=>'village', 'name'=>'Village 16913, Districts 1691, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>436, 'regionable_id'=>8655, 'regionable_type'=>'village']); //Karadenan
                DB::table('regionables')->insert(['region_id'=>436, 'regionable_id'=>8656, 'regionable_type'=>'village']); //Sukahati
                DB::table('regionables')->insert(['region_id'=>436, 'regionable_id'=>9153, 'regionable_type'=>'village']); //Karadenan
                DB::table('regionables')->insert(['region_id'=>436, 'regionable_id'=>9154, 'regionable_type'=>'village']); //Sukahati
                DB::table('regions')->insert(['id'=>437, 'parent'=>433, 'code'=>'16914', 'type'=>'village', 'name'=>'Village 16914, Districts 1691, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>437, 'regionable_id'=>8657, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>437, 'regionable_id'=>8658, 'regionable_type'=>'village']); //Pondok Rajeg
                DB::table('regionables')->insert(['region_id'=>437, 'regionable_id'=>8659, 'regionable_type'=>'village']); //Tengah
                DB::table('regionables')->insert(['region_id'=>437, 'regionable_id'=>9155, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>437, 'regionable_id'=>9156, 'regionable_type'=>'village']); //Pondok Rajeg
                DB::table('regionables')->insert(['region_id'=>437, 'regionable_id'=>9157, 'regionable_type'=>'village']); //Tengah
                DB::table('regions')->insert(['id'=>438, 'parent'=>433, 'code'=>'16915', 'type'=>'village', 'name'=>'Village 16915, Districts 1691, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>438, 'regionable_id'=>8660, 'regionable_type'=>'village']); //Pakansari
                DB::table('regionables')->insert(['region_id'=>438, 'regionable_id'=>9158, 'regionable_type'=>'village']); //Pakansari
                DB::table('regions')->insert(['id'=>439, 'parent'=>433, 'code'=>'16916', 'type'=>'village', 'name'=>'Village 16916, Districts 1691, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>439, 'regionable_id'=>8661, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>439, 'regionable_id'=>9159, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regions')->insert(['id'=>440, 'parent'=>433, 'code'=>'16917', 'type'=>'village', 'name'=>'Village 16917, Districts 1691, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>440, 'regionable_id'=>8662, 'regionable_type'=>'village']); //Cirimekar
                DB::table('regionables')->insert(['region_id'=>440, 'regionable_id'=>9160, 'regionable_type'=>'village']); //Cirimekar
                DB::table('regions')->insert(['id'=>441, 'parent'=>433, 'code'=>'16918', 'type'=>'village', 'name'=>'Village 16918, Districts 1691, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>441, 'regionable_id'=>8663, 'regionable_type'=>'village']); //Ciriung
                DB::table('regionables')->insert(['region_id'=>441, 'regionable_id'=>9161, 'regionable_type'=>'village']); //Ciriung
            DB::table('regions')->insert(['id'=>442, 'parent'=>432, 'code'=>'1692', 'type'=>'districts', 'name'=>'Districts 1692, City 169, Province 1']);
            DB::table('regionables')->insert(['region_id'=>442, 'regionable_id'=>872, 'regionable_type'=>'districts']); //Bojonggede
            DB::table('regionables')->insert(['region_id'=>442, 'regionable_id'=>918, 'regionable_type'=>'districts']); //Bojonggede
                DB::table('regions')->insert(['id'=>443, 'parent'=>442, 'code'=>'16920', 'type'=>'village', 'name'=>'Village 16920, Districts 1692, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>8664, 'regionable_type'=>'village']); //Bojong Baru
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>8665, 'regionable_type'=>'village']); //Cimanggis
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>8666, 'regionable_type'=>'village']); //Ragajaya
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>8667, 'regionable_type'=>'village']); //Rawa Panjang
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>8668, 'regionable_type'=>'village']); //Susukan
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>8669, 'regionable_type'=>'village']); //Waringin Jaya
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>9162, 'regionable_type'=>'village']); //Bojong Baru
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>9163, 'regionable_type'=>'village']); //Cimanggis
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>9164, 'regionable_type'=>'village']); //Ragajaya
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>9165, 'regionable_type'=>'village']); //Rawa Panjang
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>9166, 'regionable_type'=>'village']); //Susukan
                DB::table('regionables')->insert(['region_id'=>443, 'regionable_id'=>9167, 'regionable_type'=>'village']); //Waringin Jaya
                DB::table('regions')->insert(['id'=>444, 'parent'=>442, 'code'=>'16921', 'type'=>'village', 'name'=>'Village 16921, Districts 1692, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>444, 'regionable_id'=>8670, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regionables')->insert(['region_id'=>444, 'regionable_id'=>9168, 'regionable_type'=>'village']); //Pabuaran
                DB::table('regions')->insert(['id'=>445, 'parent'=>442, 'code'=>'16922', 'type'=>'village', 'name'=>'Village 16922, Districts 1692, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>445, 'regionable_id'=>8671, 'regionable_type'=>'village']); //Bojong Gede
                DB::table('regionables')->insert(['region_id'=>445, 'regionable_id'=>9169, 'regionable_type'=>'village']); //Bojong Gede
                DB::table('regions')->insert(['id'=>446, 'parent'=>442, 'code'=>'16923', 'type'=>'village', 'name'=>'Village 16923, Districts 1692, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>446, 'regionable_id'=>8672, 'regionable_type'=>'village']); //Kedung Waringin
                DB::table('regionables')->insert(['region_id'=>446, 'regionable_id'=>9170, 'regionable_type'=>'village']); //Kedung Waringin
            DB::table('regions')->insert(['id'=>447, 'parent'=>432, 'code'=>'1696', 'type'=>'districts', 'name'=>'Districts 1696, City 169, Province 1']);
            DB::table('regionables')->insert(['region_id'=>447, 'regionable_id'=>873, 'regionable_type'=>'districts']); //Gunung Putri
            DB::table('regionables')->insert(['region_id'=>447, 'regionable_id'=>919, 'regionable_type'=>'districts']); //Gunung Putri
                DB::table('regions')->insert(['id'=>448, 'parent'=>447, 'code'=>'16960', 'type'=>'village', 'name'=>'Village 16960, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>448, 'regionable_id'=>8673, 'regionable_type'=>'village']); //Karanggan
                DB::table('regionables')->insert(['region_id'=>448, 'regionable_id'=>9171, 'regionable_type'=>'village']); //Karanggan
                DB::table('regions')->insert(['id'=>449, 'parent'=>447, 'code'=>'16961', 'type'=>'village', 'name'=>'Village 16961, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>449, 'regionable_id'=>8674, 'regionable_type'=>'village']); //Gunung Putri
                DB::table('regionables')->insert(['region_id'=>449, 'regionable_id'=>9172, 'regionable_type'=>'village']); //Gunung Putri
                DB::table('regions')->insert(['id'=>450, 'parent'=>447, 'code'=>'16962', 'type'=>'village', 'name'=>'Village 16962, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>450, 'regionable_id'=>8675, 'regionable_type'=>'village']); //Tlajung Udik
                DB::table('regionables')->insert(['region_id'=>450, 'regionable_id'=>9173, 'regionable_type'=>'village']); //Tlajung Udik
                DB::table('regions')->insert(['id'=>451, 'parent'=>447, 'code'=>'16963', 'type'=>'village', 'name'=>'Village 16963, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>451, 'regionable_id'=>8676, 'regionable_type'=>'village']); //Bojong Nangka
                DB::table('regionables')->insert(['region_id'=>451, 'regionable_id'=>9174, 'regionable_type'=>'village']); //Bojong Nangka
                DB::table('regions')->insert(['id'=>452, 'parent'=>447, 'code'=>'16964', 'type'=>'village', 'name'=>'Village 16964, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>452, 'regionable_id'=>8677, 'regionable_type'=>'village']); //Cicadas
                DB::table('regionables')->insert(['region_id'=>452, 'regionable_id'=>9175, 'regionable_type'=>'village']); //Cicadas
                DB::table('regions')->insert(['id'=>453, 'parent'=>447, 'code'=>'16965', 'type'=>'village', 'name'=>'Village 16965, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>453, 'regionable_id'=>8678, 'regionable_type'=>'village']); //Wanaherang
                DB::table('regionables')->insert(['region_id'=>453, 'regionable_id'=>9176, 'regionable_type'=>'village']); //Wanaherang
                DB::table('regions')->insert(['id'=>454, 'parent'=>447, 'code'=>'16966', 'type'=>'village', 'name'=>'Village 16966, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>454, 'regionable_id'=>8679, 'regionable_type'=>'village']); //Cikeas Udik
                DB::table('regionables')->insert(['region_id'=>454, 'regionable_id'=>9177, 'regionable_type'=>'village']); //Cikeas Udik
                DB::table('regions')->insert(['id'=>455, 'parent'=>447, 'code'=>'16967', 'type'=>'village', 'name'=>'Village 16967, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>455, 'regionable_id'=>8680, 'regionable_type'=>'village']); //Nagrag
                DB::table('regionables')->insert(['region_id'=>455, 'regionable_id'=>9178, 'regionable_type'=>'village']); //Nagrag
                DB::table('regions')->insert(['id'=>456, 'parent'=>447, 'code'=>'16968', 'type'=>'village', 'name'=>'Village 16968, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>456, 'regionable_id'=>8681, 'regionable_type'=>'village']); //Ciangsana
                DB::table('regionables')->insert(['region_id'=>456, 'regionable_id'=>9179, 'regionable_type'=>'village']); //Ciangsana
                DB::table('regions')->insert(['id'=>457, 'parent'=>447, 'code'=>'16969', 'type'=>'village', 'name'=>'Village 16969, Districts 1696, City 169, Province 1']);
                DB::table('regionables')->insert(['region_id'=>457, 'regionable_id'=>8682, 'regionable_type'=>'village']); //Bojong Kulur
                DB::table('regionables')->insert(['region_id'=>457, 'regionable_id'=>9180, 'regionable_type'=>'village']); //Bojong Kulur
        DB::table('regions')->insert(['id'=>458, 'parent'=>1, 'code'=>'171', 'type'=>'city', 'name'=>'City 171, Province 1']);
        DB::table('regionables')->insert(['region_id'=>458, 'regionable_id'=>66, 'regionable_type'=>'city']); //Bekasi city
        DB::table('regionables')->insert(['region_id'=>458, 'regionable_id'=>67, 'regionable_type'=>'city']); //Bekasi regencies
            DB::table('regions')->insert(['id'=>459, 'parent'=>458, 'code'=>'1711', 'type'=>'districts', 'name'=>'Districts 1711, City 171, Province 1']);
            DB::table('regionables')->insert(['region_id'=>459, 'regionable_id'=>931, 'regionable_type'=>'districts']); //Bekasi Timur
            DB::table('regionables')->insert(['region_id'=>459, 'regionable_id'=>932, 'regionable_type'=>'districts']); //Rawalumbu
            DB::table('regionables')->insert(['region_id'=>459, 'regionable_id'=>966, 'regionable_type'=>'districts']); //Bekasi Timur
            DB::table('regionables')->insert(['region_id'=>459, 'regionable_id'=>967, 'regionable_type'=>'districts']); //Rawalumbu
                DB::table('regions')->insert(['id'=>460, 'parent'=>459, 'code'=>'17114', 'type'=>'village', 'name'=>'Village 17114, Districts 1711, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>460, 'regionable_id'=>9248, 'regionable_type'=>'village']); //Sepanjang Jaya
                DB::table('regionables')->insert(['region_id'=>460, 'regionable_id'=>9491, 'regionable_type'=>'village']); //Sepanjang Jaya
                DB::table('regions')->insert(['id'=>461, 'parent'=>459, 'code'=>'17115', 'type'=>'village', 'name'=>'Village 17115, Districts 1711, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>461, 'regionable_id'=>9249, 'regionable_type'=>'village']); //Pengasinan
                DB::table('regionables')->insert(['region_id'=>461, 'regionable_id'=>9492, 'regionable_type'=>'village']); //Pengasinan
                DB::table('regions')->insert(['id'=>462, 'parent'=>459, 'code'=>'17116', 'type'=>'village', 'name'=>'Village 17116, Districts 1711, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>462, 'regionable_id'=>9250, 'regionable_type'=>'village']); //Bojong Rawalumbu
                DB::table('regionables')->insert(['region_id'=>462, 'regionable_id'=>9493, 'regionable_type'=>'village']); //Bojong Rawalumbu
                DB::table('regions')->insert(['id'=>463, 'parent'=>459, 'code'=>'17117', 'type'=>'village', 'name'=>'Village 17117, Districts 1711, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>463, 'regionable_id'=>9251, 'regionable_type'=>'village']); //Bojong Menteng
                DB::table('regionables')->insert(['region_id'=>463, 'regionable_id'=>9494, 'regionable_type'=>'village']); //Bojong Menteng
            DB::table('regions')->insert(['id'=>464, 'parent'=>458, 'code'=>'1712', 'type'=>'districts', 'name'=>'Districts 1712, City 171, Province 1']);
            DB::table('regionables')->insert(['region_id'=>464, 'regionable_id'=>933, 'regionable_type'=>'districts']); //Bekasi Utara
            DB::table('regionables')->insert(['region_id'=>464, 'regionable_id'=>968, 'regionable_type'=>'districts']); //Bekasi Utara
                DB::table('regions')->insert(['id'=>465, 'parent'=>464, 'code'=>'17121', 'type'=>'village', 'name'=>'Village 17121, Districts 1712, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>465, 'regionable_id'=>9252, 'regionable_type'=>'village']); //Teluk Pucung
                DB::table('regionables')->insert(['region_id'=>465, 'regionable_id'=>9495, 'regionable_type'=>'village']); //Teluk Pucung
                DB::table('regions')->insert(['id'=>466, 'parent'=>464, 'code'=>'17122', 'type'=>'village', 'name'=>'Village 17122, Districts 1712, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>466, 'regionable_id'=>9253, 'regionable_type'=>'village']); //Perwira
                DB::table('regionables')->insert(['region_id'=>466, 'regionable_id'=>9496, 'regionable_type'=>'village']); //Perwira
                DB::table('regions')->insert(['id'=>467, 'parent'=>464, 'code'=>'17123', 'type'=>'village', 'name'=>'Village 17123, Districts 1712, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>467, 'regionable_id'=>9254, 'regionable_type'=>'village']); //Harapan Baru
                DB::table('regionables')->insert(['region_id'=>467, 'regionable_id'=>9497, 'regionable_type'=>'village']); //Harapan Baru
                DB::table('regions')->insert(['id'=>468, 'parent'=>464, 'code'=>'17124', 'type'=>'village', 'name'=>'Village 17124, Districts 1712, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>468, 'regionable_id'=>9255, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>468, 'regionable_id'=>9498, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regions')->insert(['id'=>469, 'parent'=>464, 'code'=>'17125', 'type'=>'village', 'name'=>'Village 17125, Districts 1712, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>469, 'regionable_id'=>9256, 'regionable_type'=>'village']); //Kali Abang Tengah
                DB::table('regionables')->insert(['region_id'=>469, 'regionable_id'=>9499, 'regionable_type'=>'village']); //Kali Abang Tengah
            DB::table('regions')->insert(['id'=>470, 'parent'=>458, 'code'=>'1713', 'type'=>'districts', 'name'=>'Districts 1713, City 171, Province 1']);
            DB::table('regionables')->insert(['region_id'=>470, 'regionable_id'=>934, 'regionable_type'=>'districts']); //Medan Satria
            DB::table('regionables')->insert(['region_id'=>470, 'regionable_id'=>935, 'regionable_type'=>'districts']); //Bekasi Barat
            DB::table('regionables')->insert(['region_id'=>470, 'regionable_id'=>969, 'regionable_type'=>'districts']); //Medan Satria
            DB::table('regionables')->insert(['region_id'=>470, 'regionable_id'=>970, 'regionable_type'=>'districts']); //Bekasi Barat
                DB::table('regions')->insert(['id'=>471, 'parent'=>470, 'code'=>'17133', 'type'=>'village', 'name'=>'Village 17133, Districts 1713, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>471, 'regionable_id'=>9260, 'regionable_type'=>'village']); //Kali Baru
                DB::table('regionables')->insert(['region_id'=>471, 'regionable_id'=>9262, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regionables')->insert(['region_id'=>471, 'regionable_id'=>9503, 'regionable_type'=>'village']); //Kali Baru
                DB::table('regionables')->insert(['region_id'=>471, 'regionable_id'=>9505, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regions')->insert(['id'=>472, 'parent'=>470, 'code'=>'17134', 'type'=>'village', 'name'=>'Village 17134, Districts 1713, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>472, 'regionable_id'=>9263, 'regionable_type'=>'village']); //Bintara
                DB::table('regionables')->insert(['region_id'=>472, 'regionable_id'=>9506, 'regionable_type'=>'village']); //Bintara
                DB::table('regions')->insert(['id'=>473, 'parent'=>470, 'code'=>'17135', 'type'=>'village', 'name'=>'Village 17135, Districts 1713, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>473, 'regionable_id'=>9264, 'regionable_type'=>'village']); //Kranji
                DB::table('regionables')->insert(['region_id'=>473, 'regionable_id'=>9507, 'regionable_type'=>'village']); //Kranji
                DB::table('regions')->insert(['id'=>474, 'parent'=>470, 'code'=>'17136', 'type'=>'village', 'name'=>'Village 17136, Districts 1713, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>474, 'regionable_id'=>9265, 'regionable_type'=>'village']); //Bintara Jaya
                DB::table('regionables')->insert(['region_id'=>474, 'regionable_id'=>9508, 'regionable_type'=>'village']); //Bintara Jaya
            DB::table('regions')->insert(['id'=>475, 'parent'=>458, 'code'=>'1714', 'type'=>'districts', 'name'=>'Districts 1714, City 171, Province 1']);
            DB::table('regionables')->insert(['region_id'=>475, 'regionable_id'=>933, 'regionable_type'=>'districts']); //Bekasi Utara
            DB::table('regionables')->insert(['region_id'=>475, 'regionable_id'=>934, 'regionable_type'=>'districts']); //Medan Satria
            DB::table('regionables')->insert(['region_id'=>475, 'regionable_id'=>935, 'regionable_type'=>'districts']); //Bekasi Barat
            DB::table('regionables')->insert(['region_id'=>475, 'regionable_id'=>936, 'regionable_type'=>'districts']); //Bekasi Selatan
            DB::table('regionables')->insert(['region_id'=>475, 'regionable_id'=>968, 'regionable_type'=>'districts']); //Bekasi Utara
            DB::table('regionables')->insert(['region_id'=>475, 'regionable_id'=>969, 'regionable_type'=>'districts']); //Medan Satria
            DB::table('regionables')->insert(['region_id'=>475, 'regionable_id'=>970, 'regionable_type'=>'districts']); //Bekasi Barat
            DB::table('regionables')->insert(['region_id'=>475, 'regionable_id'=>971, 'regionable_type'=>'districts']); //Bekasi Selatan
                DB::table('regions')->insert(['id'=>476, 'parent'=>475, 'code'=>'17141', 'type'=>'village', 'name'=>'Village 17141, Districts 1714, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>476, 'regionable_id'=>9267, 'regionable_type'=>'village']); //Margajaya
                DB::table('regionables')->insert(['region_id'=>476, 'regionable_id'=>9510, 'regionable_type'=>'village']); //Margajaya
                DB::table('regions')->insert(['id'=>477, 'parent'=>475, 'code'=>'17144', 'type'=>'village', 'name'=>'Village 17144, Districts 1714, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>477, 'regionable_id'=>9268, 'regionable_type'=>'village']); //Kayuringin Jaya
                DB::table('regionables')->insert(['region_id'=>477, 'regionable_id'=>9511, 'regionable_type'=>'village']); //Kayuringin Jaya
                DB::table('regions')->insert(['id'=>478, 'parent'=>475, 'code'=>'17146', 'type'=>'village', 'name'=>'Village 17146, Districts 1714, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>478, 'regionable_id'=>9269, 'regionable_type'=>'village']); //Jaka Mulya
                DB::table('regionables')->insert(['region_id'=>478, 'regionable_id'=>9512, 'regionable_type'=>'village']); //Jaka Mulya
                DB::table('regions')->insert(['id'=>479, 'parent'=>475, 'code'=>'17147', 'type'=>'village', 'name'=>'Village 17147, Districts 1714, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>479, 'regionable_id'=>9270, 'regionable_type'=>'village']); //Jaka Setia
                DB::table('regionables')->insert(['region_id'=>479, 'regionable_id'=>9513, 'regionable_type'=>'village']); //Jaka Setia
                DB::table('regions')->insert(['id'=>480, 'parent'=>475, 'code'=>'17148', 'type'=>'village', 'name'=>'Village 17148, Districts 1714, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>480, 'regionable_id'=>9271, 'regionable_type'=>'village']); //Pekayon Jaya
                DB::table('regionables')->insert(['region_id'=>480, 'regionable_id'=>9514, 'regionable_type'=>'village']); //Pekayon Jaya
            DB::table('regions')->insert(['id'=>481, 'parent'=>458, 'code'=>'1715', 'type'=>'districts', 'name'=>'Districts 1715, City 171, Province 1']);
            DB::table('regionables')->insert(['region_id'=>481, 'regionable_id'=>937, 'regionable_type'=>'districts']); //Bantar Gebang
            DB::table('regionables')->insert(['region_id'=>481, 'regionable_id'=>938, 'regionable_type'=>'districts']); //Mustika Jaya
            DB::table('regionables')->insert(['region_id'=>481, 'regionable_id'=>972, 'regionable_type'=>'districts']); //Bantar Gebang
            DB::table('regionables')->insert(['region_id'=>481, 'regionable_id'=>973, 'regionable_type'=>'districts']); //Mustika Jaya
                DB::table('regions')->insert(['id'=>482, 'parent'=>481, 'code'=>'17155', 'type'=>'village', 'name'=>'Village 17155, Districts 1715, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>482, 'regionable_id'=>9276, 'regionable_type'=>'village']); //Cimuning
                DB::table('regionables')->insert(['region_id'=>482, 'regionable_id'=>9519, 'regionable_type'=>'village']); //Cimuning
                DB::table('regions')->insert(['id'=>483, 'parent'=>481, 'code'=>'17156', 'type'=>'village', 'name'=>'Village 17156, Districts 1715, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>483, 'regionable_id'=>9277, 'regionable_type'=>'village']); //Pedurenan (padurenan)
                DB::table('regionables')->insert(['region_id'=>483, 'regionable_id'=>9520, 'regionable_type'=>'village']); //Pedurenan (padurenan)
                DB::table('regions')->insert(['id'=>484, 'parent'=>481, 'code'=>'17157', 'type'=>'village', 'name'=>'Village 17157, Districts 1715, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>484, 'regionable_id'=>9278, 'regionable_type'=>'village']); //Mustika Sari
                DB::table('regionables')->insert(['region_id'=>484, 'regionable_id'=>9521, 'regionable_type'=>'village']); //Mustika Sari
                DB::table('regions')->insert(['id'=>485, 'parent'=>481, 'code'=>'17158', 'type'=>'village', 'name'=>'Village 17158, Districts 1715, City 171, Province 1']);
                DB::table('regionables')->insert(['region_id'=>485, 'regionable_id'=>9279, 'regionable_type'=>'village']); //Mustika Jaya
                DB::table('regionables')->insert(['region_id'=>485, 'regionable_id'=>9522, 'regionable_type'=>'village']); //Mustika Jaya
        DB::table('regions')->insert(['id'=>486, 'parent'=>1, 'code'=>'172', 'type'=>'city', 'name'=>'City 172, Province 1']);
        DB::table('regionables')->insert(['region_id'=>486, 'regionable_id'=>66, 'regionable_type'=>'city']); //Bekasi city
        DB::table('regionables')->insert(['region_id'=>486, 'regionable_id'=>67, 'regionable_type'=>'city']); //Bekasi regencies
            DB::table('regions')->insert(['id'=>487, 'parent'=>486, 'code'=>'1721', 'type'=>'districts', 'name'=>'Districts 1721, City 172, Province 1']);
            DB::table('regionables')->insert(['region_id'=>487, 'regionable_id'=>939, 'regionable_type'=>'districts']); //Tarumajaya
            DB::table('regionables')->insert(['region_id'=>487, 'regionable_id'=>974, 'regionable_type'=>'districts']); //Tarumajaya
                DB::table('regions')->insert(['id'=>488, 'parent'=>487, 'code'=>'17211', 'type'=>'village', 'name'=>'Village 17211, Districts 1721, City 172, Province 1']);
                DB::table('regionables')->insert(['region_id'=>488, 'regionable_id'=>9280, 'regionable_type'=>'village']); //Segara Makmur
                DB::table('regionables')->insert(['region_id'=>488, 'regionable_id'=>9523, 'regionable_type'=>'village']); //Segara Makmur
                DB::table('regions')->insert(['id'=>489, 'parent'=>487, 'code'=>'17212', 'type'=>'village', 'name'=>'Village 17212, Districts 1721, City 172, Province 1']);
                DB::table('regionables')->insert(['region_id'=>489, 'regionable_id'=>9281, 'regionable_type'=>'village']); //Pantai Makmur
                DB::table('regionables')->insert(['region_id'=>489, 'regionable_id'=>9524, 'regionable_type'=>'village']); //Pantai Makmur
                DB::table('regions')->insert(['id'=>490, 'parent'=>487, 'code'=>'17213', 'type'=>'village', 'name'=>'Village 17213, Districts 1721, City 172, Province 1']);
                DB::table('regionables')->insert(['region_id'=>490, 'regionable_id'=>9282, 'regionable_type'=>'village']); //Setia Mulya
                DB::table('regionables')->insert(['region_id'=>490, 'regionable_id'=>9525, 'regionable_type'=>'village']); //Setia Mulya
                DB::table('regions')->insert(['id'=>491, 'parent'=>487, 'code'=>'17214', 'type'=>'village', 'name'=>'Village 17214, Districts 1721, City 172, Province 1']);
                DB::table('regionables')->insert(['region_id'=>491, 'regionable_id'=>9283, 'regionable_type'=>'village']); //Pusaka Rakyat
                DB::table('regionables')->insert(['region_id'=>491, 'regionable_id'=>9526, 'regionable_type'=>'village']); //Pusaka Rakyat
                DB::table('regions')->insert(['id'=>492, 'parent'=>487, 'code'=>'17215', 'type'=>'village', 'name'=>'Village 17215, Districts 1721, City 172, Province 1']);
                DB::table('regionables')->insert(['region_id'=>492, 'regionable_id'=>9284, 'regionable_type'=>'village']); //Setia Asih
                DB::table('regionables')->insert(['region_id'=>492, 'regionable_id'=>9527, 'regionable_type'=>'village']); //Setia Asih
                DB::table('regions')->insert(['id'=>493, 'parent'=>487, 'code'=>'17216', 'type'=>'village', 'name'=>'Village 17216, Districts 1721, City 172, Province 1']);
                DB::table('regionables')->insert(['region_id'=>493, 'regionable_id'=>9285, 'regionable_type'=>'village']); //Pahlawan Setia
                DB::table('regionables')->insert(['region_id'=>493, 'regionable_id'=>9528, 'regionable_type'=>'village']); //Pahlawan Setia
                DB::table('regions')->insert(['id'=>494, 'parent'=>487, 'code'=>'17217', 'type'=>'village', 'name'=>'Village 17217, Districts 1721, City 172, Province 1']);
                DB::table('regionables')->insert(['region_id'=>494, 'regionable_id'=>9286, 'regionable_type'=>'village']); //Samudra Jaya
                DB::table('regionables')->insert(['region_id'=>494, 'regionable_id'=>9529, 'regionable_type'=>'village']); //Samudra Jaya
                DB::table('regions')->insert(['id'=>495, 'parent'=>487, 'code'=>'17218', 'type'=>'village', 'name'=>'Village 17218, Districts 1721, City 172, Province 1']);
                DB::table('regionables')->insert(['region_id'=>495, 'regionable_id'=>9287, 'regionable_type'=>'village']); //Segara Jaya
                DB::table('regionables')->insert(['region_id'=>495, 'regionable_id'=>9530, 'regionable_type'=>'village']); //Segara Jaya
        DB::table('regions')->insert(['id'=>496, 'parent'=>1, 'code'=>'173', 'type'=>'city', 'name'=>'City 173, Province 1']);
        DB::table('regionables')->insert(['region_id'=>496, 'regionable_id'=>66, 'regionable_type'=>'city']); //Bekasi city
        DB::table('regionables')->insert(['region_id'=>496, 'regionable_id'=>67, 'regionable_type'=>'city']); //Bekasi regencies
            DB::table('regions')->insert(['id'=>497, 'parent'=>496, 'code'=>'1732', 'type'=>'districts', 'name'=>'Districts 1732, City 173, Province 1']);
            DB::table('regionables')->insert(['region_id'=>497, 'regionable_id'=>940, 'regionable_type'=>'districts']); //Setu
            DB::table('regionables')->insert(['region_id'=>497, 'regionable_id'=>975, 'regionable_type'=>'districts']); //Setu
                DB::table('regions')->insert(['id'=>498, 'parent'=>497, 'code'=>'17320', 'type'=>'village', 'name'=>'Village 17320, Districts 1732, City 173, Province 1']);
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9288, 'regionable_type'=>'village']); //Burangkeng
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9289, 'regionable_type'=>'village']); //Cibening
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9290, 'regionable_type'=>'village']); //Cijengkol
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9291, 'regionable_type'=>'village']); //Cikarageman
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9292, 'regionable_type'=>'village']); //Cileduk
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9293, 'regionable_type'=>'village']); //Kertarahayu
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9294, 'regionable_type'=>'village']); //Lubangbuaya
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9295, 'regionable_type'=>'village']); //Muktijaya
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9296, 'regionable_type'=>'village']); //Ragemanunggal
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9297, 'regionable_type'=>'village']); //Taman Rahayu
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9298, 'regionable_type'=>'village']); //Taman Sari
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9531, 'regionable_type'=>'village']); //Burangkeng
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9532, 'regionable_type'=>'village']); //Cibening
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9533, 'regionable_type'=>'village']); //Cijengkol
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9534, 'regionable_type'=>'village']); //Cikarageman
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9535, 'regionable_type'=>'village']); //Cileduk
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9536, 'regionable_type'=>'village']); //Kertarahayu
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9537, 'regionable_type'=>'village']); //Lubangbuaya
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9538, 'regionable_type'=>'village']); //Muktijaya
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9539, 'regionable_type'=>'village']); //Ragemanunggal
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9540, 'regionable_type'=>'village']); //Taman Rahayu
                DB::table('regionables')->insert(['region_id'=>498, 'regionable_id'=>9541, 'regionable_type'=>'village']); //Taman Sari
            DB::table('regions')->insert(['id'=>499, 'parent'=>496, 'code'=>'1733', 'type'=>'districts', 'name'=>'Districts 1733, City 173, Province 1']);
            DB::table('regionables')->insert(['region_id'=>499, 'regionable_id'=>941, 'regionable_type'=>'districts']); //Serang Baru
            DB::table('regionables')->insert(['region_id'=>499, 'regionable_id'=>976, 'regionable_type'=>'districts']); //Serang Baru
                DB::table('regions')->insert(['id'=>500, 'parent'=>499, 'code'=>'17330', 'type'=>'village', 'name'=>'Village 17330, Districts 1733, City 173, Province 1']);
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9299, 'regionable_type'=>'village']); //Cilangkara
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9300, 'regionable_type'=>'village']); //Jaya Sampurna
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9301, 'regionable_type'=>'village']); //Jayamulya
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9302, 'regionable_type'=>'village']); //Nagacipta
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9303, 'regionable_type'=>'village']); //Nagasari
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9304, 'regionable_type'=>'village']); //Sirnajaya
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9305, 'regionable_type'=>'village']); //Sukaragam
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9306, 'regionable_type'=>'village']); //Sukasari
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9542, 'regionable_type'=>'village']); //Cilangkara
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9543, 'regionable_type'=>'village']); //Jaya Sampurna
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9544, 'regionable_type'=>'village']); //Jayamulya
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9545, 'regionable_type'=>'village']); //Nagacipta
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9546, 'regionable_type'=>'village']); //Nagasari
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9547, 'regionable_type'=>'village']); //Sirnajaya
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9548, 'regionable_type'=>'village']); //Sukaragam
                DB::table('regionables')->insert(['region_id'=>500, 'regionable_id'=>9549, 'regionable_type'=>'village']); //Sukasari
            DB::table('regions')->insert(['id'=>501, 'parent'=>496, 'code'=>'1734', 'type'=>'districts', 'name'=>'Districts 1734, City 173, Province 1']);
            DB::table('regionables')->insert(['region_id'=>501, 'regionable_id'=>942, 'regionable_type'=>'districts']); //Cibarusah
            DB::table('regionables')->insert(['region_id'=>501, 'regionable_id'=>977, 'regionable_type'=>'districts']); //Cibarusah
                DB::table('regions')->insert(['id'=>502, 'parent'=>501, 'code'=>'17340', 'type'=>'village', 'name'=>'Village 17340, Districts 1734, City 173, Province 1']);
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9307, 'regionable_type'=>'village']); //Cibarusahjaya
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9308, 'regionable_type'=>'village']); //Cibarusahkota
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9309, 'regionable_type'=>'village']); //Ridogalih
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9310, 'regionable_type'=>'village']); //Ridomanah
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9311, 'regionable_type'=>'village']); //Sindangmulya
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9312, 'regionable_type'=>'village']); //Sirnajati
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9313, 'regionable_type'=>'village']); //Wibawamulya
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9550, 'regionable_type'=>'village']); //Cibarusahjaya
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9551, 'regionable_type'=>'village']); //Cibarusahkota
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9552, 'regionable_type'=>'village']); //Ridogalih
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9553, 'regionable_type'=>'village']); //Ridomanah
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9554, 'regionable_type'=>'village']); //Sindangmulya
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9555, 'regionable_type'=>'village']); //Sirnajati
                DB::table('regionables')->insert(['region_id'=>502, 'regionable_id'=>9556, 'regionable_type'=>'village']); //Wibawamulya
            DB::table('regions')->insert(['id'=>503, 'parent'=>496, 'code'=>'1735', 'type'=>'districts', 'name'=>'Districts 1735, City 173, Province 1']);
            DB::table('regionables')->insert(['region_id'=>503, 'regionable_id'=>943, 'regionable_type'=>'districts']); //Bojongmangu
            DB::table('regionables')->insert(['region_id'=>503, 'regionable_id'=>978, 'regionable_type'=>'districts']); //Bojongmangu
                DB::table('regions')->insert(['id'=>504, 'parent'=>503, 'code'=>'17350', 'type'=>'village', 'name'=>'Village 17350, Districts 1735, City 173, Province 1']);
                DB::table('regionables')->insert(['region_id'=>504, 'regionable_id'=>9314, 'regionable_type'=>'village']); //Karangindah
                DB::table('regionables')->insert(['region_id'=>504, 'regionable_id'=>9315, 'regionable_type'=>'village']); //Medalkrisna
                DB::table('regionables')->insert(['region_id'=>504, 'regionable_id'=>9316, 'regionable_type'=>'village']); //Sukabungah
                DB::table('regionables')->insert(['region_id'=>504, 'regionable_id'=>9317, 'regionable_type'=>'village']); //Sukamukti
                DB::table('regionables')->insert(['region_id'=>504, 'regionable_id'=>9557, 'regionable_type'=>'village']); //Karangindah
                DB::table('regionables')->insert(['region_id'=>504, 'regionable_id'=>9558, 'regionable_type'=>'village']); //Medalkrisna
                DB::table('regionables')->insert(['region_id'=>504, 'regionable_id'=>9559, 'regionable_type'=>'village']); //Sukabungah
                DB::table('regionables')->insert(['region_id'=>504, 'regionable_id'=>9560, 'regionable_type'=>'village']); //Sukamukti
                DB::table('regions')->insert(['id'=>505, 'parent'=>503, 'code'=>'17352', 'type'=>'village', 'name'=>'Village 17352, Districts 1735, City 173, Province 1']);
                DB::table('regionables')->insert(['region_id'=>505, 'regionable_id'=>9318, 'regionable_type'=>'village']); //Bojongmanggu
                DB::table('regionables')->insert(['region_id'=>505, 'regionable_id'=>9561, 'regionable_type'=>'village']); //Bojongmanggu
                DB::table('regions')->insert(['id'=>506, 'parent'=>503, 'code'=>'17356', 'type'=>'village', 'name'=>'Village 17356, Districts 1735, City 173, Province 1']);
                DB::table('regionables')->insert(['region_id'=>506, 'regionable_id'=>9319, 'regionable_type'=>'village']); //Karangmulya
                DB::table('regionables')->insert(['region_id'=>506, 'regionable_id'=>9562, 'regionable_type'=>'village']); //Karangmulya
        DB::table('regions')->insert(['id'=>507, 'parent'=>1, 'code'=>'174', 'type'=>'city', 'name'=>'City 174, Province 1']);
        DB::table('regionables')->insert(['region_id'=>507, 'regionable_id'=>66, 'regionable_type'=>'city']); //Bekasi city
        DB::table('regionables')->insert(['region_id'=>507, 'regionable_id'=>67, 'regionable_type'=>'city']); //Bekasi regencies
            DB::table('regions')->insert(['id'=>508, 'parent'=>507, 'code'=>'1741', 'type'=>'districts', 'name'=>'Districts 1741, City 174, Province 1']);
            DB::table('regionables')->insert(['region_id'=>508, 'regionable_id'=>944, 'regionable_type'=>'districts']); //Pondok Gede
            DB::table('regionables')->insert(['region_id'=>508, 'regionable_id'=>945, 'regionable_type'=>'districts']); //Pondok Melati
            DB::table('regionables')->insert(['region_id'=>508, 'regionable_id'=>979, 'regionable_type'=>'districts']); //Pondok Gede
            DB::table('regionables')->insert(['region_id'=>508, 'regionable_id'=>980, 'regionable_type'=>'districts']); //Pondok Melati
                DB::table('regions')->insert(['id'=>509, 'parent'=>508, 'code'=>'17414', 'type'=>'village', 'name'=>'Village 17414, Districts 1741, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>509, 'regionable_id'=>9325, 'regionable_type'=>'village']); //Jati Rahayu
                DB::table('regionables')->insert(['region_id'=>509, 'regionable_id'=>9326, 'regionable_type'=>'village']); //Jatimelati
                DB::table('regionables')->insert(['region_id'=>509, 'regionable_id'=>9568, 'regionable_type'=>'village']); //Jati Rahayu
                DB::table('regionables')->insert(['region_id'=>509, 'regionable_id'=>9569, 'regionable_type'=>'village']); //Jatimelati
                DB::table('regions')->insert(['id'=>510, 'parent'=>508, 'code'=>'17415', 'type'=>'village', 'name'=>'Village 17415, Districts 1741, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>510, 'regionable_id'=>9327, 'regionable_type'=>'village']); //Jatiwarna
                DB::table('regionables')->insert(['region_id'=>510, 'regionable_id'=>9570, 'regionable_type'=>'village']); //Jatiwarna
            DB::table('regions')->insert(['id'=>511, 'parent'=>507, 'code'=>'1742', 'type'=>'districts', 'name'=>'Districts 1742, City 174, Province 1']);
            DB::table('regionables')->insert(['region_id'=>511, 'regionable_id'=>946, 'regionable_type'=>'districts']); //Jatiasih
            DB::table('regionables')->insert(['region_id'=>511, 'regionable_id'=>981, 'regionable_type'=>'districts']); //Jatiasih
                DB::table('regions')->insert(['id'=>512, 'parent'=>511, 'code'=>'17421', 'type'=>'village', 'name'=>'Village 17421, Districts 1742, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>512, 'regionable_id'=>9329, 'regionable_type'=>'village']); //Jatikramat
                DB::table('regionables')->insert(['region_id'=>512, 'regionable_id'=>9572, 'regionable_type'=>'village']); //Jatikramat
                DB::table('regions')->insert(['id'=>513, 'parent'=>511, 'code'=>'17422', 'type'=>'village', 'name'=>'Village 17422, Districts 1742, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>513, 'regionable_id'=>9330, 'regionable_type'=>'village']); //Jati Mekar
                DB::table('regionables')->insert(['region_id'=>513, 'regionable_id'=>9573, 'regionable_type'=>'village']); //Jati Mekar
                DB::table('regions')->insert(['id'=>514, 'parent'=>511, 'code'=>'17423', 'type'=>'village', 'name'=>'Village 17423, Districts 1742, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>514, 'regionable_id'=>9331, 'regionable_type'=>'village']); //Jatiasih
                DB::table('regionables')->insert(['region_id'=>514, 'regionable_id'=>9574, 'regionable_type'=>'village']); //Jatiasih
                DB::table('regions')->insert(['id'=>515, 'parent'=>511, 'code'=>'17424', 'type'=>'village', 'name'=>'Village 17424, Districts 1742, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>515, 'regionable_id'=>9332, 'regionable_type'=>'village']); //Jatirasa
                DB::table('regionables')->insert(['region_id'=>515, 'regionable_id'=>9575, 'regionable_type'=>'village']); //Jatirasa
                DB::table('regions')->insert(['id'=>516, 'parent'=>511, 'code'=>'17425', 'type'=>'village', 'name'=>'Village 17425, Districts 1742, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>516, 'regionable_id'=>9333, 'regionable_type'=>'village']); //Jatiluhur
                DB::table('regionables')->insert(['region_id'=>516, 'regionable_id'=>9576, 'regionable_type'=>'village']); //Jatiluhur
                DB::table('regions')->insert(['id'=>517, 'parent'=>511, 'code'=>'17426', 'type'=>'village', 'name'=>'Village 17426, Districts 1742, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>517, 'regionable_id'=>9334, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>517, 'regionable_id'=>9577, 'regionable_type'=>'village']); //Jatisari
            DB::table('regions')->insert(['id'=>518, 'parent'=>507, 'code'=>'1743', 'type'=>'districts', 'name'=>'Districts 1743, City 174, Province 1']);
            DB::table('regionables')->insert(['region_id'=>518, 'regionable_id'=>945, 'regionable_type'=>'districts']); //Pondok Melati
            DB::table('regionables')->insert(['region_id'=>518, 'regionable_id'=>947, 'regionable_type'=>'districts']); //Jati Sampurna
            DB::table('regionables')->insert(['region_id'=>518, 'regionable_id'=>980, 'regionable_type'=>'districts']); //Pondok Melati
            DB::table('regionables')->insert(['region_id'=>518, 'regionable_id'=>982, 'regionable_type'=>'districts']); //Jati Sampurna
                DB::table('regions')->insert(['id'=>519, 'parent'=>518, 'code'=>'17432', 'type'=>'village', 'name'=>'Village 17432, Districts 1743, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>519, 'regionable_id'=>9335, 'regionable_type'=>'village']); //Jatiranggon
                DB::table('regionables')->insert(['region_id'=>519, 'regionable_id'=>9578, 'regionable_type'=>'village']); //Jatiranggon
                DB::table('regions')->insert(['id'=>520, 'parent'=>518, 'code'=>'17433', 'type'=>'village', 'name'=>'Village 17433, Districts 1743, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>520, 'regionable_id'=>9336, 'regionable_type'=>'village']); //Jatiraden
                DB::table('regionables')->insert(['region_id'=>520, 'regionable_id'=>9337, 'regionable_type'=>'village']); //Jatisampurna
                DB::table('regionables')->insert(['region_id'=>520, 'regionable_id'=>9579, 'regionable_type'=>'village']); //Jatiraden
                DB::table('regionables')->insert(['region_id'=>520, 'regionable_id'=>9580, 'regionable_type'=>'village']); //Jatisampurna
                DB::table('regions')->insert(['id'=>521, 'parent'=>518, 'code'=>'17434', 'type'=>'village', 'name'=>'Village 17434, Districts 1743, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>521, 'regionable_id'=>9338, 'regionable_type'=>'village']); //Jatirangga
                DB::table('regionables')->insert(['region_id'=>521, 'regionable_id'=>9581, 'regionable_type'=>'village']); //Jatirangga
                DB::table('regions')->insert(['id'=>522, 'parent'=>518, 'code'=>'17435', 'type'=>'village', 'name'=>'Village 17435, Districts 1743, City 174, Province 1']);
                DB::table('regionables')->insert(['region_id'=>522, 'regionable_id'=>9339, 'regionable_type'=>'village']); //Jatikarya
                DB::table('regionables')->insert(['region_id'=>522, 'regionable_id'=>9582, 'regionable_type'=>'village']); //Jatikarya
        DB::table('regions')->insert(['id'=>523, 'parent'=>1, 'code'=>'175', 'type'=>'city', 'name'=>'City 175, Province 1']);
        DB::table('regionables')->insert(['region_id'=>523, 'regionable_id'=>66, 'regionable_type'=>'city']); //Bekasi city
        DB::table('regionables')->insert(['region_id'=>523, 'regionable_id'=>67, 'regionable_type'=>'city']); //Bekasi regencies
            DB::table('regions')->insert(['id'=>524, 'parent'=>523, 'code'=>'1751', 'type'=>'districts', 'name'=>'Districts 1751, City 175, Province 1']);
            DB::table('regionables')->insert(['region_id'=>524, 'regionable_id'=>948, 'regionable_type'=>'districts']); //Tambun Utara
            DB::table('regionables')->insert(['region_id'=>524, 'regionable_id'=>949, 'regionable_type'=>'districts']); //Tambun Selatan
            DB::table('regionables')->insert(['region_id'=>524, 'regionable_id'=>983, 'regionable_type'=>'districts']); //Tambun Utara
            DB::table('regionables')->insert(['region_id'=>524, 'regionable_id'=>984, 'regionable_type'=>'districts']); //Tambun Selatan
                DB::table('regions')->insert(['id'=>525, 'parent'=>524, 'code'=>'17510', 'type'=>'village', 'name'=>'Village 17510, Districts 1751, City 175, Province 1']);
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9340, 'regionable_type'=>'village']); //Jalenjaya (jejalenjaya)
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9341, 'regionable_type'=>'village']); //Karangsatria
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9342, 'regionable_type'=>'village']); //Satriajaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9343, 'regionable_type'=>'village']); //Satriamekar
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9344, 'regionable_type'=>'village']); //Sriamur
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9345, 'regionable_type'=>'village']); //Srijaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9346, 'regionable_type'=>'village']); //Srimahi
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9347, 'regionable_type'=>'village']); //Srimukti
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9348, 'regionable_type'=>'village']); //Jatimulya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9349, 'regionable_type'=>'village']); //Lambangjaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9350, 'regionable_type'=>'village']); //Lambangsari
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9351, 'regionable_type'=>'village']); //Mangunjaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9352, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9353, 'regionable_type'=>'village']); //Setiadarma
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9354, 'regionable_type'=>'village']); //Setiamekar
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9355, 'regionable_type'=>'village']); //Sumber Jaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9356, 'regionable_type'=>'village']); //Tambun
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9357, 'regionable_type'=>'village']); //Tridaya Sakti
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9583, 'regionable_type'=>'village']); //Jalenjaya (jejalenjaya)
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9584, 'regionable_type'=>'village']); //Karangsatria
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9585, 'regionable_type'=>'village']); //Satriajaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9586, 'regionable_type'=>'village']); //Satriamekar
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9587, 'regionable_type'=>'village']); //Sriamur
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9588, 'regionable_type'=>'village']); //Srijaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9589, 'regionable_type'=>'village']); //Srimahi
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9590, 'regionable_type'=>'village']); //Srimukti
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9591, 'regionable_type'=>'village']); //Jatimulya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9592, 'regionable_type'=>'village']); //Lambangjaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9593, 'regionable_type'=>'village']); //Lambangsari
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9594, 'regionable_type'=>'village']); //Mangunjaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9595, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9596, 'regionable_type'=>'village']); //Setiadarma
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9597, 'regionable_type'=>'village']); //Setiamekar
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9598, 'regionable_type'=>'village']); //Sumber Jaya
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9599, 'regionable_type'=>'village']); //Tambun
                DB::table('regionables')->insert(['region_id'=>525, 'regionable_id'=>9600, 'regionable_type'=>'village']); //Tridaya Sakti
            DB::table('regions')->insert(['id'=>526, 'parent'=>523, 'code'=>'1752', 'type'=>'districts', 'name'=>'Districts 1752, City 175, Province 1']);
            DB::table('regionables')->insert(['region_id'=>526, 'regionable_id'=>950, 'regionable_type'=>'districts']); //Cibitung
            DB::table('regionables')->insert(['region_id'=>526, 'regionable_id'=>985, 'regionable_type'=>'districts']); //Cibitung
                DB::table('regions')->insert(['id'=>527, 'parent'=>526, 'code'=>'17520', 'type'=>'village', 'name'=>'Village 17520, Districts 1752, City 175, Province 1']);
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9358, 'regionable_type'=>'village']); //Cibuntu
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9359, 'regionable_type'=>'village']); //Kerta Mukti
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9360, 'regionable_type'=>'village']); //Muktiwari
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9361, 'regionable_type'=>'village']); //Sarimukti
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9362, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9363, 'regionable_type'=>'village']); //Wanajaya
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9364, 'regionable_type'=>'village']); //Wanasari
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9601, 'regionable_type'=>'village']); //Cibuntu
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9602, 'regionable_type'=>'village']); //Kerta Mukti
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9603, 'regionable_type'=>'village']); //Muktiwari
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9604, 'regionable_type'=>'village']); //Sarimukti
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9605, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9606, 'regionable_type'=>'village']); //Wanajaya
                DB::table('regionables')->insert(['region_id'=>527, 'regionable_id'=>9607, 'regionable_type'=>'village']); //Wanasari
            DB::table('regions')->insert(['id'=>528, 'parent'=>523, 'code'=>'1753', 'type'=>'districts', 'name'=>'Districts 1753, City 175, Province 1']);
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>951, 'regionable_type'=>'districts']); //Cikarang Selatan
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>952, 'regionable_type'=>'districts']); //Cikarang Pusat
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>953, 'regionable_type'=>'districts']); //Cikarang Utara
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>954, 'regionable_type'=>'districts']); //Cikarang Barat
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>955, 'regionable_type'=>'districts']); //Cikarang Timur
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>956, 'regionable_type'=>'districts']); //Karangbahagia
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>986, 'regionable_type'=>'districts']); //Cikarang Selatan
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>987, 'regionable_type'=>'districts']); //Cikarang Pusat
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>988, 'regionable_type'=>'districts']); //Cikarang Utara
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>989, 'regionable_type'=>'districts']); //Cikarang Barat
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>990, 'regionable_type'=>'districts']); //Cikarang Timur
            DB::table('regionables')->insert(['region_id'=>528, 'regionable_id'=>991, 'regionable_type'=>'districts']); //Karangbahagia
                DB::table('regions')->insert(['id'=>529, 'parent'=>528, 'code'=>'17530', 'type'=>'village', 'name'=>'Village 17530, Districts 1753, City 175, Province 1']);
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9365, 'regionable_type'=>'village']); //Ciantra
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9366, 'regionable_type'=>'village']); //Cibatu
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9367, 'regionable_type'=>'village']); //Pasirsari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9368, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9369, 'regionable_type'=>'village']); //Sukadami
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9370, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9371, 'regionable_type'=>'village']); //Sukasejati
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9372, 'regionable_type'=>'village']); //Cicau
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9373, 'regionable_type'=>'village']); //Hegarmukti
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9374, 'regionable_type'=>'village']); //Jayamukti
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9375, 'regionable_type'=>'village']); //Pasirpanji
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9376, 'regionable_type'=>'village']); //Pasirtanjung
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9377, 'regionable_type'=>'village']); //Sukamahi
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9378, 'regionable_type'=>'village']); //Cikarang Kota
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9379, 'regionable_type'=>'village']); //Harja Mekar
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9380, 'regionable_type'=>'village']); //Karang Baru
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9381, 'regionable_type'=>'village']); //Karangasih
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9382, 'regionable_type'=>'village']); //Karangraharja
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9383, 'regionable_type'=>'village']); //Mekarmukti
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9384, 'regionable_type'=>'village']); //Pasir Gombong
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9385, 'regionable_type'=>'village']); //Simpangan
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9386, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9387, 'regionable_type'=>'village']); //Waluya
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9388, 'regionable_type'=>'village']); //Wangunharja
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9389, 'regionable_type'=>'village']); //Cikedokan
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9390, 'regionable_type'=>'village']); //Danau Indah
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9391, 'regionable_type'=>'village']); //Gandamekar
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9392, 'regionable_type'=>'village']); //Gandasari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9393, 'regionable_type'=>'village']); //Jatiwangi
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9394, 'regionable_type'=>'village']); //Kali Jaya
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9395, 'regionable_type'=>'village']); //Mekar Wangi
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9396, 'regionable_type'=>'village']); //Sukadanau
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9397, 'regionable_type'=>'village']); //Telaga Asih
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9398, 'regionable_type'=>'village']); //Telaga Murni
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9399, 'regionable_type'=>'village']); //Telajung
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9400, 'regionable_type'=>'village']); //Cipayung
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9401, 'regionable_type'=>'village']); //Hegarmanah
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9402, 'regionable_type'=>'village']); //Jatibaru
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9403, 'regionable_type'=>'village']); //Jatireja
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9404, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9405, 'regionable_type'=>'village']); //Labansari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9406, 'regionable_type'=>'village']); //Sertajaya
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9407, 'regionable_type'=>'village']); //Tanjungbaru
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9408, 'regionable_type'=>'village']); //Karang Bahagia
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9409, 'regionable_type'=>'village']); //Karang Rahayu
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9410, 'regionable_type'=>'village']); //Karang Sentosa
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9411, 'regionable_type'=>'village']); //Karang Setra
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9412, 'regionable_type'=>'village']); //Karang Setu
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9413, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9414, 'regionable_type'=>'village']); //Karangmukti
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9415, 'regionable_type'=>'village']); //Sukaraya
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9608, 'regionable_type'=>'village']); //Ciantra
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9609, 'regionable_type'=>'village']); //Cibatu
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9610, 'regionable_type'=>'village']); //Pasirsari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9611, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9612, 'regionable_type'=>'village']); //Sukadami
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9613, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9614, 'regionable_type'=>'village']); //Sukasejati
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9615, 'regionable_type'=>'village']); //Cicau
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9616, 'regionable_type'=>'village']); //Hegarmukti
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9617, 'regionable_type'=>'village']); //Jayamukti
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9618, 'regionable_type'=>'village']); //Pasirpanji
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9619, 'regionable_type'=>'village']); //Pasirtanjung
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9620, 'regionable_type'=>'village']); //Sukamahi
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9621, 'regionable_type'=>'village']); //Cikarang Kota
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9622, 'regionable_type'=>'village']); //Harja Mekar
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9623, 'regionable_type'=>'village']); //Karang Baru
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9624, 'regionable_type'=>'village']); //Karangasih
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9625, 'regionable_type'=>'village']); //Karangraharja
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9626, 'regionable_type'=>'village']); //Mekarmukti
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9627, 'regionable_type'=>'village']); //Pasir Gombong
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9628, 'regionable_type'=>'village']); //Simpangan
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9629, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9630, 'regionable_type'=>'village']); //Waluya
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9631, 'regionable_type'=>'village']); //Wangunharja
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9632, 'regionable_type'=>'village']); //Cikedokan
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9633, 'regionable_type'=>'village']); //Danau Indah
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9634, 'regionable_type'=>'village']); //Gandamekar
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9635, 'regionable_type'=>'village']); //Gandasari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9636, 'regionable_type'=>'village']); //Jatiwangi
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9637, 'regionable_type'=>'village']); //Kali Jaya
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9638, 'regionable_type'=>'village']); //Mekar Wangi
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9639, 'regionable_type'=>'village']); //Sukadanau
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9640, 'regionable_type'=>'village']); //Telaga Asih
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9641, 'regionable_type'=>'village']); //Telaga Murni
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9642, 'regionable_type'=>'village']); //Telajung
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9643, 'regionable_type'=>'village']); //Cipayung
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9644, 'regionable_type'=>'village']); //Hegarmanah
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9645, 'regionable_type'=>'village']); //Jatibaru
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9646, 'regionable_type'=>'village']); //Jatireja
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9647, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9648, 'regionable_type'=>'village']); //Labansari
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9649, 'regionable_type'=>'village']); //Sertajaya
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9650, 'regionable_type'=>'village']); //Tanjungbaru
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9651, 'regionable_type'=>'village']); //Karang Bahagia
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9652, 'regionable_type'=>'village']); //Karang Rahayu
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9653, 'regionable_type'=>'village']); //Karang Sentosa
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9654, 'regionable_type'=>'village']); //Karang Setra
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9655, 'regionable_type'=>'village']); //Karang Setu
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9656, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9657, 'regionable_type'=>'village']); //Karangmukti
                DB::table('regionables')->insert(['region_id'=>529, 'regionable_id'=>9658, 'regionable_type'=>'village']); //Sukaraya
            DB::table('regions')->insert(['id'=>530, 'parent'=>523, 'code'=>'1754', 'type'=>'districts', 'name'=>'Districts 1754, City 175, Province 1']);
            DB::table('regionables')->insert(['region_id'=>530, 'regionable_id'=>957, 'regionable_type'=>'districts']); //Kedung Waringin
            DB::table('regionables')->insert(['region_id'=>530, 'regionable_id'=>992, 'regionable_type'=>'districts']); //Kedung Waringin
                DB::table('regions')->insert(['id'=>531, 'parent'=>530, 'code'=>'17540', 'type'=>'village', 'name'=>'Village 17540, Districts 1754, City 175, Province 1']);
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9416, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9417, 'regionable_type'=>'village']); //Karang Harum
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9418, 'regionable_type'=>'village']); //Karang Mekar
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9419, 'regionable_type'=>'village']); //Karang Sambung
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9420, 'regionable_type'=>'village']); //Kedungwaringin
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9421, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9422, 'regionable_type'=>'village']); //Waringin Jaya
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9659, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9660, 'regionable_type'=>'village']); //Karang Harum
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9661, 'regionable_type'=>'village']); //Karang Mekar
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9662, 'regionable_type'=>'village']); //Karang Sambung
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9663, 'regionable_type'=>'village']); //Kedungwaringin
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9664, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>531, 'regionable_id'=>9665, 'regionable_type'=>'village']); //Waringin Jaya
        DB::table('regions')->insert(['id'=>532, 'parent'=>1, 'code'=>'176', 'type'=>'city', 'name'=>'City 176, Province 1']);
        DB::table('regionables')->insert(['region_id'=>532, 'regionable_id'=>66, 'regionable_type'=>'city']); //Bekasi city
        DB::table('regionables')->insert(['region_id'=>532, 'regionable_id'=>67, 'regionable_type'=>'city']); //Bekasi regencies
            DB::table('regions')->insert(['id'=>533, 'parent'=>532, 'code'=>'1761', 'type'=>'districts', 'name'=>'Districts 1761, City 176, Province 1']);
            DB::table('regionables')->insert(['region_id'=>533, 'regionable_id'=>958, 'regionable_type'=>'districts']); //Babelan
            DB::table('regionables')->insert(['region_id'=>533, 'regionable_id'=>993, 'regionable_type'=>'districts']); //Babelan
                DB::table('regions')->insert(['id'=>534, 'parent'=>533, 'code'=>'17610', 'type'=>'village', 'name'=>'Village 17610, Districts 1761, City 176, Province 1']);
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9423, 'regionable_type'=>'village']); //Babelan Kota
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9424, 'regionable_type'=>'village']); //Bahagia
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9425, 'regionable_type'=>'village']); //Buni Bakti
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9426, 'regionable_type'=>'village']); //Hurip Jaya
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9427, 'regionable_type'=>'village']); //Kebalen
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9428, 'regionable_type'=>'village']); //Kedung Pengawas
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9429, 'regionable_type'=>'village']); //Kedungjaya
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9430, 'regionable_type'=>'village']); //Muara Bakti
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9431, 'regionable_type'=>'village']); //Pantai Hurip
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9666, 'regionable_type'=>'village']); //Babelan Kota
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9667, 'regionable_type'=>'village']); //Bahagia
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9668, 'regionable_type'=>'village']); //Buni Bakti
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9669, 'regionable_type'=>'village']); //Hurip Jaya
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9670, 'regionable_type'=>'village']); //Kebalen
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9671, 'regionable_type'=>'village']); //Kedung Pengawas
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9672, 'regionable_type'=>'village']); //Kedungjaya
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9673, 'regionable_type'=>'village']); //Muara Bakti
                DB::table('regionables')->insert(['region_id'=>534, 'regionable_id'=>9674, 'regionable_type'=>'village']); //Pantai Hurip
            DB::table('regions')->insert(['id'=>535, 'parent'=>532, 'code'=>'1762', 'type'=>'districts', 'name'=>'Districts 1762, City 176, Province 1']);
            DB::table('regionables')->insert(['region_id'=>535, 'regionable_id'=>959, 'regionable_type'=>'districts']); //Tambelang
            DB::table('regionables')->insert(['region_id'=>535, 'regionable_id'=>960, 'regionable_type'=>'districts']); //Sukawangi
            DB::table('regionables')->insert(['region_id'=>535, 'regionable_id'=>994, 'regionable_type'=>'districts']); //Tambelang
            DB::table('regionables')->insert(['region_id'=>535, 'regionable_id'=>995, 'regionable_type'=>'districts']); //Sukawangi
                DB::table('regions')->insert(['id'=>536, 'parent'=>535, 'code'=>'17620', 'type'=>'village', 'name'=>'Village 17620, Districts 1762, City 176, Province 1']);
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9432, 'regionable_type'=>'village']); //Sukabakti
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9433, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9434, 'regionable_type'=>'village']); //Sukamantri
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9435, 'regionable_type'=>'village']); //Sukarahayu
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9436, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9437, 'regionable_type'=>'village']); //Sukarapih
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9438, 'regionable_type'=>'village']); //Sukawijaya
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9439, 'regionable_type'=>'village']); //Sukabudi
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9440, 'regionable_type'=>'village']); //Sukadaya
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9441, 'regionable_type'=>'village']); //Sukakerta
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9442, 'regionable_type'=>'village']); //Sukamekar
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9443, 'regionable_type'=>'village']); //Sukaringin
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9444, 'regionable_type'=>'village']); //Sukatenang
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9445, 'regionable_type'=>'village']); //Sukawangi
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9675, 'regionable_type'=>'village']); //Sukabakti
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9676, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9677, 'regionable_type'=>'village']); //Sukamantri
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9678, 'regionable_type'=>'village']); //Sukarahayu
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9679, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9680, 'regionable_type'=>'village']); //Sukarapih
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9681, 'regionable_type'=>'village']); //Sukawijaya
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9682, 'regionable_type'=>'village']); //Sukabudi
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9683, 'regionable_type'=>'village']); //Sukadaya
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9684, 'regionable_type'=>'village']); //Sukakerta
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9685, 'regionable_type'=>'village']); //Sukamekar
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9686, 'regionable_type'=>'village']); //Sukaringin
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9687, 'regionable_type'=>'village']); //Sukatenang
                DB::table('regionables')->insert(['region_id'=>536, 'regionable_id'=>9688, 'regionable_type'=>'village']); //Sukawangi
            DB::table('regions')->insert(['id'=>537, 'parent'=>532, 'code'=>'1763', 'type'=>'districts', 'name'=>'Districts 1763, City 176, Province 1']);
            DB::table('regionables')->insert(['region_id'=>537, 'regionable_id'=>961, 'regionable_type'=>'districts']); //Sukatani
            DB::table('regionables')->insert(['region_id'=>537, 'regionable_id'=>962, 'regionable_type'=>'districts']); //Sukakarya
            DB::table('regionables')->insert(['region_id'=>537, 'regionable_id'=>996, 'regionable_type'=>'districts']); //Sukatani
            DB::table('regionables')->insert(['region_id'=>537, 'regionable_id'=>997, 'regionable_type'=>'districts']); //Sukakarya
                DB::table('regions')->insert(['id'=>538, 'parent'=>537, 'code'=>'17630', 'type'=>'village', 'name'=>'Village 17630, Districts 1763, City 176, Province 1']);
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9446, 'regionable_type'=>'village']); //Banjar Sari
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9447, 'regionable_type'=>'village']); //Suka Asih
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9448, 'regionable_type'=>'village']); //Sukadarma
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9449, 'regionable_type'=>'village']); //Sukahurip
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9450, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9451, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9452, 'regionable_type'=>'village']); //Sukarukun
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9453, 'regionable_type'=>'village']); //Sukaindah
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9454, 'regionable_type'=>'village']); //Sukajadi
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9455, 'regionable_type'=>'village']); //Sukakarya
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9456, 'regionable_type'=>'village']); //Sukakersa
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9457, 'regionable_type'=>'village']); //Sukalaksana
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9458, 'regionable_type'=>'village']); //Sukamakmur
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9459, 'regionable_type'=>'village']); //Sukamurni
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9689, 'regionable_type'=>'village']); //Banjar Sari
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9690, 'regionable_type'=>'village']); //Suka Asih
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9691, 'regionable_type'=>'village']); //Sukadarma
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9692, 'regionable_type'=>'village']); //Sukahurip
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9693, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9694, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9695, 'regionable_type'=>'village']); //Sukarukun
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9696, 'regionable_type'=>'village']); //Sukaindah
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9697, 'regionable_type'=>'village']); //Sukajadi
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9698, 'regionable_type'=>'village']); //Sukakarya
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9699, 'regionable_type'=>'village']); //Sukakersa
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9700, 'regionable_type'=>'village']); //Sukalaksana
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9701, 'regionable_type'=>'village']); //Sukamakmur
                DB::table('regionables')->insert(['region_id'=>538, 'regionable_id'=>9702, 'regionable_type'=>'village']); //Sukamurni
        DB::table('regions')->insert(['id'=>539, 'parent'=>1, 'code'=>'177', 'type'=>'city', 'name'=>'City 177, Province 1']);
        DB::table('regionables')->insert(['region_id'=>539, 'regionable_id'=>66, 'regionable_type'=>'city']); //Bekasi city
        DB::table('regionables')->insert(['region_id'=>539, 'regionable_id'=>67, 'regionable_type'=>'city']); //Bekasi regencies
            DB::table('regions')->insert(['id'=>540, 'parent'=>539, 'code'=>'1771', 'type'=>'districts', 'name'=>'Districts 1771, City 177, Province 1']);
            DB::table('regionables')->insert(['region_id'=>540, 'regionable_id'=>963, 'regionable_type'=>'districts']); //Pebayuran
            DB::table('regionables')->insert(['region_id'=>540, 'regionable_id'=>998, 'regionable_type'=>'districts']); //Pebayuran
                DB::table('regions')->insert(['id'=>541, 'parent'=>540, 'code'=>'17710', 'type'=>'village', 'name'=>'Village 17710, Districts 1771, City 177, Province 1']);
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9460, 'regionable_type'=>'village']); //Bantarjaya
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9461, 'regionable_type'=>'village']); //Bantarsari
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9462, 'regionable_type'=>'village']); //Karang Harja
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9463, 'regionable_type'=>'village']); //Karanghaur
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9464, 'regionable_type'=>'village']); //Karangjaya
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9465, 'regionable_type'=>'village']); //Karangpatri
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9466, 'regionable_type'=>'village']); //Karangreja
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9467, 'regionable_type'=>'village']); //Karangsegar
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9468, 'regionable_type'=>'village']); //Kertajaya
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9469, 'regionable_type'=>'village']); //Kertasari
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9470, 'regionable_type'=>'village']); //Sumberreja
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9471, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9472, 'regionable_type'=>'village']); //Sumberurip
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9703, 'regionable_type'=>'village']); //Bantarjaya
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9704, 'regionable_type'=>'village']); //Bantarsari
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9705, 'regionable_type'=>'village']); //Karang Harja
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9706, 'regionable_type'=>'village']); //Karanghaur
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9707, 'regionable_type'=>'village']); //Karangjaya
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9708, 'regionable_type'=>'village']); //Karangpatri
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9709, 'regionable_type'=>'village']); //Karangreja
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9710, 'regionable_type'=>'village']); //Karangsegar
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9711, 'regionable_type'=>'village']); //Kertajaya
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9712, 'regionable_type'=>'village']); //Kertasari
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9713, 'regionable_type'=>'village']); //Sumberreja
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9714, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regionables')->insert(['region_id'=>541, 'regionable_id'=>9715, 'regionable_type'=>'village']); //Sumberurip
            DB::table('regions')->insert(['id'=>542, 'parent'=>539, 'code'=>'1772', 'type'=>'districts', 'name'=>'Districts 1772, City 177, Province 1']);
            DB::table('regionables')->insert(['region_id'=>542, 'regionable_id'=>964, 'regionable_type'=>'districts']); //Cabangbungin
            DB::table('regionables')->insert(['region_id'=>542, 'regionable_id'=>999, 'regionable_type'=>'districts']); //Cabangbungin
                DB::table('regions')->insert(['id'=>543, 'parent'=>542, 'code'=>'17720', 'type'=>'village', 'name'=>'Village 17720, Districts 1772, City 177, Province 1']);
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9473, 'regionable_type'=>'village']); //Jaya Bakti
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9474, 'regionable_type'=>'village']); //Jaya Laksana
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9475, 'regionable_type'=>'village']); //Lenggah Jaya
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9476, 'regionable_type'=>'village']); //Lenggah Sari
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9477, 'regionable_type'=>'village']); //Setia Jaya
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9478, 'regionable_type'=>'village']); //Setialaksana
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9479, 'regionable_type'=>'village']); //Sindang Jaya
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9480, 'regionable_type'=>'village']); //Sindangsari
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9716, 'regionable_type'=>'village']); //Jaya Bakti
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9717, 'regionable_type'=>'village']); //Jaya Laksana
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9718, 'regionable_type'=>'village']); //Lenggah Jaya
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9719, 'regionable_type'=>'village']); //Lenggah Sari
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9720, 'regionable_type'=>'village']); //Setia Jaya
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9721, 'regionable_type'=>'village']); //Setialaksana
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9722, 'regionable_type'=>'village']); //Sindang Jaya
                DB::table('regionables')->insert(['region_id'=>543, 'regionable_id'=>9723, 'regionable_type'=>'village']); //Sindangsari
            DB::table('regions')->insert(['id'=>544, 'parent'=>539, 'code'=>'1773', 'type'=>'districts', 'name'=>'Districts 1773, City 177, Province 1']);
            DB::table('regionables')->insert(['region_id'=>544, 'regionable_id'=>965, 'regionable_type'=>'districts']); //Muara Gembong
            DB::table('regionables')->insert(['region_id'=>544, 'regionable_id'=>1000, 'regionable_type'=>'districts']); //Muara Gembong
                DB::table('regions')->insert(['id'=>545, 'parent'=>544, 'code'=>'17730', 'type'=>'village', 'name'=>'Village 17730, Districts 1773, City 177, Province 1']);
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9481, 'regionable_type'=>'village']); //Jayasakti
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9482, 'regionable_type'=>'village']); //Pantai Bahagia
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9483, 'regionable_type'=>'village']); //Pantai Bakti
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9484, 'regionable_type'=>'village']); //Pantai Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9485, 'regionable_type'=>'village']); //Pantai Mekar
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9486, 'regionable_type'=>'village']); //Pantai Sederhana
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9724, 'regionable_type'=>'village']); //Jayasakti
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9725, 'regionable_type'=>'village']); //Pantai Bahagia
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9726, 'regionable_type'=>'village']); //Pantai Bakti
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9727, 'regionable_type'=>'village']); //Pantai Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9728, 'regionable_type'=>'village']); //Pantai Mekar
                DB::table('regionables')->insert(['region_id'=>545, 'regionable_id'=>9729, 'regionable_type'=>'village']); //Pantai Sederhana
    }
}
