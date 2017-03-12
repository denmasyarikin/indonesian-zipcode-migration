<?php

use Illuminate\Database\Seeder;

class _Region_Province_4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('regions')->insert(['id'=>1678, 'code'=>'4', 'type'=>'province', 'name'=>'Province 4']);

        //Banten
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>3, 'regionable_type'=>'province']); //Banten
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>20, 'regionable_type'=>'city']); //Serang city
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>21, 'regionable_type'=>'city']); //Serang regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>22, 'regionable_type'=>'city']); //Pandeglang regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>23, 'regionable_type'=>'city']); //Lebak regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>24, 'regionable_type'=>'city']); //Cilegon city

        DB::table('regions')->insert(['id'=>1679, 'parent'=>1678, 'code'=>'421', 'type'=>'city', 'name'=>'City 421, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1679, 'regionable_id'=>20, 'regionable_type'=>'city']); //Serang city
        DB::table('regionables')->insert(['region_id'=>1679, 'regionable_id'=>21, 'regionable_type'=>'city']); //Serang regencies
            DB::table('regions')->insert(['id'=>1680, 'parent'=>1679, 'code'=>'4211', 'type'=>'districts', 'name'=>'Districts 4211, City 421, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1680, 'regionable_id'=>196, 'regionable_type'=>'districts']); //Serang
            DB::table('regionables')->insert(['region_id'=>1680, 'regionable_id'=>231, 'regionable_type'=>'districts']); //Serang
                DB::table('regions')->insert(['id'=>1681, 'parent'=>1680, 'code'=>'42111', 'type'=>'village', 'name'=>'Village 42111, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1681, 'regionable_id'=>1905, 'regionable_type'=>'village']); //Cimuncang
                DB::table('regionables')->insert(['region_id'=>1681, 'regionable_id'=>1906, 'regionable_type'=>'village']); //Unyur
                DB::table('regionables')->insert(['region_id'=>1681, 'regionable_id'=>2297, 'regionable_type'=>'village']); //Cimuncang
                DB::table('regionables')->insert(['region_id'=>1681, 'regionable_id'=>2298, 'regionable_type'=>'village']); //Unyur
                DB::table('regions')->insert(['id'=>1682, 'parent'=>1680, 'code'=>'42112', 'type'=>'village', 'name'=>'Village 42112, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1682, 'regionable_id'=>1907, 'regionable_type'=>'village']); //Kotabaru
                DB::table('regionables')->insert(['region_id'=>1682, 'regionable_id'=>2299, 'regionable_type'=>'village']); //Kotabaru
                DB::table('regions')->insert(['id'=>1683, 'parent'=>1680, 'code'=>'42113', 'type'=>'village', 'name'=>'Village 42113, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1683, 'regionable_id'=>1908, 'regionable_type'=>'village']); //Lopang
                DB::table('regionables')->insert(['region_id'=>1683, 'regionable_id'=>2300, 'regionable_type'=>'village']); //Lopang
                DB::table('regions')->insert(['id'=>1684, 'parent'=>1680, 'code'=>'42114', 'type'=>'village', 'name'=>'Village 42114, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1684, 'regionable_id'=>1909, 'regionable_type'=>'village']); //Kagungan
                DB::table('regionables')->insert(['region_id'=>1684, 'regionable_id'=>2301, 'regionable_type'=>'village']); //Kagungan
                DB::table('regions')->insert(['id'=>1685, 'parent'=>1680, 'code'=>'42115', 'type'=>'village', 'name'=>'Village 42115, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1685, 'regionable_id'=>1910, 'regionable_type'=>'village']); //Lontarbaru
                DB::table('regionables')->insert(['region_id'=>1685, 'regionable_id'=>2302, 'regionable_type'=>'village']); //Lontarbaru
                DB::table('regions')->insert(['id'=>1686, 'parent'=>1680, 'code'=>'42116', 'type'=>'village', 'name'=>'Village 42116, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1686, 'regionable_id'=>1911, 'regionable_type'=>'village']); //Kaligandu
                DB::table('regionables')->insert(['region_id'=>1686, 'regionable_id'=>1912, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>1686, 'regionable_id'=>1913, 'regionable_type'=>'village']); //Sukawana
                DB::table('regionables')->insert(['region_id'=>1686, 'regionable_id'=>2303, 'regionable_type'=>'village']); //Kaligandu
                DB::table('regionables')->insert(['region_id'=>1686, 'regionable_id'=>2304, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>1686, 'regionable_id'=>2305, 'regionable_type'=>'village']); //Sukawana
                DB::table('regions')->insert(['id'=>1687, 'parent'=>1680, 'code'=>'42117', 'type'=>'village', 'name'=>'Village 42117, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1687, 'regionable_id'=>1914, 'regionable_type'=>'village']); //Cipare
                DB::table('regionables')->insert(['region_id'=>1687, 'regionable_id'=>2306, 'regionable_type'=>'village']); //Cipare
                DB::table('regions')->insert(['id'=>1688, 'parent'=>1680, 'code'=>'42118', 'type'=>'village', 'name'=>'Village 42118, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1688, 'regionable_id'=>1915, 'regionable_type'=>'village']); //Sumurpecung
                DB::table('regionables')->insert(['region_id'=>1688, 'regionable_id'=>2307, 'regionable_type'=>'village']); //Sumurpecung
                DB::table('regions')->insert(['id'=>1689, 'parent'=>1680, 'code'=>'42119', 'type'=>'village', 'name'=>'Village 42119, Districts 4211, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1689, 'regionable_id'=>1916, 'regionable_type'=>'village']); //Terondol
                DB::table('regionables')->insert(['region_id'=>1689, 'regionable_id'=>2308, 'regionable_type'=>'village']); //Terondol
            DB::table('regions')->insert(['id'=>1690, 'parent'=>1679, 'code'=>'4212', 'type'=>'districts', 'name'=>'Districts 4212, City 421, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1690, 'regionable_id'=>197, 'regionable_type'=>'districts']); //Cipocok Jaya
            DB::table('regionables')->insert(['region_id'=>1690, 'regionable_id'=>232, 'regionable_type'=>'districts']); //Cipocok Jaya
                DB::table('regions')->insert(['id'=>1691, 'parent'=>1690, 'code'=>'42121', 'type'=>'village', 'name'=>'Village 42121, Districts 4212, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1691, 'regionable_id'=>1917, 'regionable_type'=>'village']); //Cipocok Jaya
                DB::table('regionables')->insert(['region_id'=>1691, 'regionable_id'=>2309, 'regionable_type'=>'village']); //Cipocok Jaya
                DB::table('regions')->insert(['id'=>1692, 'parent'=>1690, 'code'=>'42122', 'type'=>'village', 'name'=>'Village 42122, Districts 4212, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1692, 'regionable_id'=>1918, 'regionable_type'=>'village']); //Banjaragung
                DB::table('regionables')->insert(['region_id'=>1692, 'regionable_id'=>2310, 'regionable_type'=>'village']); //Banjaragung
                DB::table('regions')->insert(['id'=>1693, 'parent'=>1690, 'code'=>'42123', 'type'=>'village', 'name'=>'Village 42123, Districts 4212, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1693, 'regionable_id'=>1919, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>1693, 'regionable_id'=>2311, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regions')->insert(['id'=>1694, 'parent'=>1690, 'code'=>'42124', 'type'=>'village', 'name'=>'Village 42124, Districts 4212, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1694, 'regionable_id'=>1920, 'regionable_type'=>'village']); //Panancangan
                DB::table('regionables')->insert(['region_id'=>1694, 'regionable_id'=>2312, 'regionable_type'=>'village']); //Panancangan
                DB::table('regions')->insert(['id'=>1695, 'parent'=>1690, 'code'=>'42125', 'type'=>'village', 'name'=>'Village 42125, Districts 4212, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1695, 'regionable_id'=>1921, 'regionable_type'=>'village']); //Karundang
                DB::table('regionables')->insert(['region_id'=>1695, 'regionable_id'=>2313, 'regionable_type'=>'village']); //Karundang
                DB::table('regions')->insert(['id'=>1696, 'parent'=>1690, 'code'=>'42126', 'type'=>'village', 'name'=>'Village 42126, Districts 4212, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1696, 'regionable_id'=>1922, 'regionable_type'=>'village']); //Tembong
                DB::table('regionables')->insert(['region_id'=>1696, 'regionable_id'=>2314, 'regionable_type'=>'village']); //Tembong
                DB::table('regions')->insert(['id'=>1697, 'parent'=>1690, 'code'=>'42127', 'type'=>'village', 'name'=>'Village 42127, Districts 4212, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1697, 'regionable_id'=>1923, 'regionable_type'=>'village']); //Dalung
                DB::table('regionables')->insert(['region_id'=>1697, 'regionable_id'=>2315, 'regionable_type'=>'village']); //Dalung
                DB::table('regions')->insert(['id'=>1698, 'parent'=>1690, 'code'=>'42128', 'type'=>'village', 'name'=>'Village 42128, Districts 4212, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1698, 'regionable_id'=>1924, 'regionable_type'=>'village']); //Gelam
                DB::table('regionables')->insert(['region_id'=>1698, 'regionable_id'=>2316, 'regionable_type'=>'village']); //Gelam
            DB::table('regions')->insert(['id'=>1699, 'parent'=>1679, 'code'=>'4216', 'type'=>'districts', 'name'=>'Districts 4216, City 421, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>198, 'regionable_type'=>'districts']); //Kramatwatu
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>199, 'regionable_type'=>'districts']); //Taktakan
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>200, 'regionable_type'=>'districts']); //Gunungsari
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>201, 'regionable_type'=>'districts']); //Pabuaran
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>202, 'regionable_type'=>'districts']); //Ciomas
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>203, 'regionable_type'=>'districts']); //Padarincang
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>204, 'regionable_type'=>'districts']); //Mancak
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>205, 'regionable_type'=>'districts']); //Anyar
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>206, 'regionable_type'=>'districts']); //Cinangka
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>233, 'regionable_type'=>'districts']); //Kramatwatu
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>234, 'regionable_type'=>'districts']); //Taktakan
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>235, 'regionable_type'=>'districts']); //Gunungsari
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>236, 'regionable_type'=>'districts']); //Pabuaran
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>237, 'regionable_type'=>'districts']); //Ciomas
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>238, 'regionable_type'=>'districts']); //Padarincang
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>239, 'regionable_type'=>'districts']); //Mancak
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>240, 'regionable_type'=>'districts']); //Anyar
            DB::table('regionables')->insert(['region_id'=>1699, 'regionable_id'=>241, 'regionable_type'=>'districts']); //Cinangka
                DB::table('regions')->insert(['id'=>1700, 'parent'=>1699, 'code'=>'42167', 'type'=>'village', 'name'=>'Village 42167, Districts 4216, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2018, 'regionable_type'=>'village']); //Bantarwangi
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2019, 'regionable_type'=>'village']); //Bantarwaru
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2020, 'regionable_type'=>'village']); //Baros Jaya
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2021, 'regionable_type'=>'village']); //Bulakan
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2022, 'regionable_type'=>'village']); //Cikolelet
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2023, 'regionable_type'=>'village']); //Cinangka
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2024, 'regionable_type'=>'village']); //Kamasan
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2025, 'regionable_type'=>'village']); //Karang Suraga
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2026, 'regionable_type'=>'village']); //Kubang Baros
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2027, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2028, 'regionable_type'=>'village']); //Pasauran
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2029, 'regionable_type'=>'village']); //Rancasanggal
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2030, 'regionable_type'=>'village']); //Sindanglaya
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2031, 'regionable_type'=>'village']); //Umbul Tanjung
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2410, 'regionable_type'=>'village']); //Bantarwangi
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2411, 'regionable_type'=>'village']); //Bantarwaru
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2412, 'regionable_type'=>'village']); //Baros Jaya
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2413, 'regionable_type'=>'village']); //Bulakan
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2414, 'regionable_type'=>'village']); //Cikolelet
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2415, 'regionable_type'=>'village']); //Cinangka
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2416, 'regionable_type'=>'village']); //Kamasan
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2417, 'regionable_type'=>'village']); //Karang Suraga
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2418, 'regionable_type'=>'village']); //Kubang Baros
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2419, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2420, 'regionable_type'=>'village']); //Pasauran
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2421, 'regionable_type'=>'village']); //Rancasanggal
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2422, 'regionable_type'=>'village']); //Sindanglaya
                DB::table('regionables')->insert(['region_id'=>1700, 'regionable_id'=>2423, 'regionable_type'=>'village']); //Umbul Tanjung
            DB::table('regions')->insert(['id'=>1701, 'parent'=>1679, 'code'=>'4217', 'type'=>'districts', 'name'=>'Districts 4217, City 421, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>207, 'regionable_type'=>'districts']); //Curug
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>208, 'regionable_type'=>'districts']); //Petir
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>209, 'regionable_type'=>'districts']); //Baros
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>210, 'regionable_type'=>'districts']); //Tunjung Teja
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>211, 'regionable_type'=>'districts']); //Cikeusal
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>212, 'regionable_type'=>'districts']); //Bandung
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>213, 'regionable_type'=>'districts']); //Pamarayan
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>214, 'regionable_type'=>'districts']); //Jawilan
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>215, 'regionable_type'=>'districts']); //Kopo
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>242, 'regionable_type'=>'districts']); //Curug
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>243, 'regionable_type'=>'districts']); //Petir
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>244, 'regionable_type'=>'districts']); //Baros
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>245, 'regionable_type'=>'districts']); //Tunjung Teja
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>246, 'regionable_type'=>'districts']); //Cikeusal
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>247, 'regionable_type'=>'districts']); //Bandung
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>248, 'regionable_type'=>'districts']); //Pamarayan
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>249, 'regionable_type'=>'districts']); //Jawilan
            DB::table('regionables')->insert(['region_id'=>1701, 'regionable_id'=>250, 'regionable_type'=>'districts']); //Kopo
                DB::table('regions')->insert(['id'=>1702, 'parent'=>1701, 'code'=>'42178', 'type'=>'village', 'name'=>'Village 42178, Districts 4217, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2124, 'regionable_type'=>'village']); //Babakan Jaya
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2125, 'regionable_type'=>'village']); //Carenang Udik
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2126, 'regionable_type'=>'village']); //Cidahu
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2127, 'regionable_type'=>'village']); //Gabus
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2128, 'regionable_type'=>'village']); //Garut
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2129, 'regionable_type'=>'village']); //Kopo
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2130, 'regionable_type'=>'village']); //Mekarbaru
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2131, 'regionable_type'=>'village']); //Nanggung
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2132, 'regionable_type'=>'village']); //Nyompok
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2133, 'regionable_type'=>'village']); //Rancasumur
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2516, 'regionable_type'=>'village']); //Babakan Jaya
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2517, 'regionable_type'=>'village']); //Carenang Udik
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2518, 'regionable_type'=>'village']); //Cidahu
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2519, 'regionable_type'=>'village']); //Gabus
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2520, 'regionable_type'=>'village']); //Garut
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2521, 'regionable_type'=>'village']); //Kopo
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2522, 'regionable_type'=>'village']); //Mekarbaru
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2523, 'regionable_type'=>'village']); //Nanggung
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2524, 'regionable_type'=>'village']); //Nyompok
                DB::table('regionables')->insert(['region_id'=>1702, 'regionable_id'=>2525, 'regionable_type'=>'village']); //Rancasumur
            DB::table('regions')->insert(['id'=>1703, 'parent'=>1679, 'code'=>'4218', 'type'=>'districts', 'name'=>'Districts 4218, City 421, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>216, 'regionable_type'=>'districts']); //Lebak Wangi
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>217, 'regionable_type'=>'districts']); //Ciruas
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>218, 'regionable_type'=>'districts']); //Walantaka
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>219, 'regionable_type'=>'districts']); //Kragilan
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>220, 'regionable_type'=>'districts']); //Kibin
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>221, 'regionable_type'=>'districts']); //Cikande
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>251, 'regionable_type'=>'districts']); //Lebak Wangi
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>252, 'regionable_type'=>'districts']); //Ciruas
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>253, 'regionable_type'=>'districts']); //Walantaka
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>254, 'regionable_type'=>'districts']); //Kragilan
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>255, 'regionable_type'=>'districts']); //Kibin
            DB::table('regionables')->insert(['region_id'=>1703, 'regionable_id'=>256, 'regionable_type'=>'districts']); //Cikande
                DB::table('regions')->insert(['id'=>1704, 'parent'=>1703, 'code'=>'42186', 'type'=>'village', 'name'=>'Village 42186, Districts 4218, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2194, 'regionable_type'=>'village']); //Bakung
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2195, 'regionable_type'=>'village']); //Cikande
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2196, 'regionable_type'=>'village']); //Cikande Permai
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2197, 'regionable_type'=>'village']); //Gembor Udik
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2198, 'regionable_type'=>'village']); //Julang
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2199, 'regionable_type'=>'village']); //Kamurang
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2200, 'regionable_type'=>'village']); //Koper
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2201, 'regionable_type'=>'village']); //Leuwilimus
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2202, 'regionable_type'=>'village']); //Nambo Udik
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2203, 'regionable_type'=>'village']); //Parigi
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2204, 'regionable_type'=>'village']); //Situterate
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2205, 'regionable_type'=>'village']); //Songgom Jaya
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2206, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2586, 'regionable_type'=>'village']); //Bakung
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2587, 'regionable_type'=>'village']); //Cikande
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2588, 'regionable_type'=>'village']); //Cikande Permai
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2589, 'regionable_type'=>'village']); //Gembor Udik
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2590, 'regionable_type'=>'village']); //Julang
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2591, 'regionable_type'=>'village']); //Kamurang
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2592, 'regionable_type'=>'village']); //Koper
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2593, 'regionable_type'=>'village']); //Leuwilimus
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2594, 'regionable_type'=>'village']); //Nambo Udik
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2595, 'regionable_type'=>'village']); //Parigi
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2596, 'regionable_type'=>'village']); //Situterate
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2597, 'regionable_type'=>'village']); //Songgom Jaya
                DB::table('regionables')->insert(['region_id'=>1704, 'regionable_id'=>2598, 'regionable_type'=>'village']); //Sukatani
            DB::table('regions')->insert(['id'=>1705, 'parent'=>1679, 'code'=>'4219', 'type'=>'districts', 'name'=>'Districts 4219, City 421, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>222, 'regionable_type'=>'districts']); //Kasemen
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>223, 'regionable_type'=>'districts']); //Pontang
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>224, 'regionable_type'=>'districts']); //Tirtayasa
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>225, 'regionable_type'=>'districts']); //Tanara
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>226, 'regionable_type'=>'districts']); //Carenang (cerenang)
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>227, 'regionable_type'=>'districts']); //Binuang
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>257, 'regionable_type'=>'districts']); //Kasemen
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>258, 'regionable_type'=>'districts']); //Pontang
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>259, 'regionable_type'=>'districts']); //Tirtayasa
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>260, 'regionable_type'=>'districts']); //Tanara
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>261, 'regionable_type'=>'districts']); //Carenang (cerenang)
            DB::table('regionables')->insert(['region_id'=>1705, 'regionable_id'=>262, 'regionable_type'=>'districts']); //Binuang
                DB::table('regions')->insert(['id'=>1706, 'parent'=>1705, 'code'=>'42196', 'type'=>'village', 'name'=>'Village 42196, Districts 4219, City 421, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2259, 'regionable_type'=>'village']); //Binuang
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2260, 'regionable_type'=>'village']); //Cakung
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2261, 'regionable_type'=>'village']); //Gembor
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2262, 'regionable_type'=>'village']); //Lamaran
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2263, 'regionable_type'=>'village']); //Renged
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2264, 'regionable_type'=>'village']); //Sukamampir
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2265, 'regionable_type'=>'village']); //Warakas
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2651, 'regionable_type'=>'village']); //Binuang
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2652, 'regionable_type'=>'village']); //Cakung
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2653, 'regionable_type'=>'village']); //Gembor
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2654, 'regionable_type'=>'village']); //Lamaran
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2655, 'regionable_type'=>'village']); //Renged
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2656, 'regionable_type'=>'village']); //Sukamampir
                DB::table('regionables')->insert(['region_id'=>1706, 'regionable_id'=>2657, 'regionable_type'=>'village']); //Warakas
        DB::table('regions')->insert(['id'=>1707, 'parent'=>1678, 'code'=>'422', 'type'=>'city', 'name'=>'City 422, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1707, 'regionable_id'=>22, 'regionable_type'=>'city']); //Pandeglang regencies
            DB::table('regions')->insert(['id'=>1708, 'parent'=>1707, 'code'=>'4221', 'type'=>'districts', 'name'=>'Districts 4221, City 422, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1708, 'regionable_id'=>266, 'regionable_type'=>'districts']); //Majasari
            DB::table('regionables')->insert(['region_id'=>1708, 'regionable_id'=>267, 'regionable_type'=>'districts']); //Pandeglang
            DB::table('regionables')->insert(['region_id'=>1708, 'regionable_id'=>268, 'regionable_type'=>'districts']); //Picung
            DB::table('regionables')->insert(['region_id'=>1708, 'regionable_id'=>269, 'regionable_type'=>'districts']); //Karang Tanjung
                DB::table('regions')->insert(['id'=>1709, 'parent'=>1708, 'code'=>'42213', 'type'=>'village', 'name'=>'Village 42213, Districts 4221, City 422, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1709, 'regionable_id'=>2698, 'regionable_type'=>'village']); //Ciherang
                DB::table('regionables')->insert(['region_id'=>1709, 'regionable_id'=>2699, 'regionable_type'=>'village']); //Kadupandak
                DB::table('regionables')->insert(['region_id'=>1709, 'regionable_id'=>2707, 'regionable_type'=>'village']); //Juhut
            DB::table('regions')->insert(['id'=>1710, 'parent'=>1707, 'code'=>'4225', 'type'=>'districts', 'name'=>'Districts 4225, City 422, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1710, 'regionable_id'=>269, 'regionable_type'=>'districts']); //Karang Tanjung
            DB::table('regionables')->insert(['region_id'=>1710, 'regionable_id'=>270, 'regionable_type'=>'districts']); //Koroncong
            DB::table('regionables')->insert(['region_id'=>1710, 'regionable_id'=>271, 'regionable_type'=>'districts']); //Cadasari
            DB::table('regionables')->insert(['region_id'=>1710, 'regionable_id'=>272, 'regionable_type'=>'districts']); //Banjar
            DB::table('regionables')->insert(['region_id'=>1710, 'regionable_id'=>273, 'regionable_type'=>'districts']); //Kaduhejo
            DB::table('regionables')->insert(['region_id'=>1710, 'regionable_id'=>274, 'regionable_type'=>'districts']); //Pulosari
                DB::table('regions')->insert(['id'=>1711, 'parent'=>1710, 'code'=>'42253', 'type'=>'village', 'name'=>'Village 42253, Districts 4225, City 422, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2745, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2746, 'regionable_type'=>'village']); //Bayumundu
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2747, 'regionable_type'=>'village']); //Campaka
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2748, 'regionable_type'=>'village']); //Ciputri
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2749, 'regionable_type'=>'village']); //Kadugemblo
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2750, 'regionable_type'=>'village']); //Mandalasari
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2751, 'regionable_type'=>'village']); //Palurahan
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2752, 'regionable_type'=>'village']); //Saninten
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2753, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2754, 'regionable_type'=>'village']); //Sukasari
                DB::table('regionables')->insert(['region_id'=>1711, 'regionable_id'=>2755, 'regionable_type'=>'village']); //Kaduhejo
            DB::table('regions')->insert(['id'=>1712, 'parent'=>1707, 'code'=>'4226', 'type'=>'districts', 'name'=>'Districts 4226, City 422, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>274, 'regionable_type'=>'districts']); //Pulosari
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>275, 'regionable_type'=>'districts']); //Mandalawangi
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>276, 'regionable_type'=>'districts']); //Menes
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>277, 'regionable_type'=>'districts']); //Jiput
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>278, 'regionable_type'=>'districts']); //Carita
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>279, 'regionable_type'=>'districts']); //Labuan
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>280, 'regionable_type'=>'districts']); //Patia
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>281, 'regionable_type'=>'districts']); //Pagelaran
            DB::table('regionables')->insert(['region_id'=>1712, 'regionable_id'=>282, 'regionable_type'=>'districts']); //Sukaresmi
                DB::table('regions')->insert(['id'=>1713, 'parent'=>1712, 'code'=>'42265', 'type'=>'village', 'name'=>'Village 42265, Districts 4226, City 422, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2823, 'regionable_type'=>'village']); //Babakankeusik
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2824, 'regionable_type'=>'village']); //Ciawi
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2825, 'regionable_type'=>'village']); //Cimoyan
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2826, 'regionable_type'=>'village']); //Idaman
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2827, 'regionable_type'=>'village']); //Pasirgadung
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2828, 'regionable_type'=>'village']); //Patia
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2829, 'regionable_type'=>'village']); //Rahayu
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2830, 'regionable_type'=>'village']); //Simpangtiga
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2831, 'regionable_type'=>'village']); //Surianeun
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2832, 'regionable_type'=>'village']); //Turus
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2833, 'regionable_type'=>'village']); //Bama
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2834, 'regionable_type'=>'village']); //Bulagor
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2835, 'regionable_type'=>'village']); //Harapankarya
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2836, 'regionable_type'=>'village']); //Kartasana
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2837, 'regionable_type'=>'village']); //Margagiri
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2838, 'regionable_type'=>'village']); //Margasana
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2839, 'regionable_type'=>'village']); //Montor
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2840, 'regionable_type'=>'village']); //Pagelaran
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2841, 'regionable_type'=>'village']); //Senangsari
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2842, 'regionable_type'=>'village']); //Sindanglaya
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2843, 'regionable_type'=>'village']); //Sukadame
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2844, 'regionable_type'=>'village']); //Surakarta
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2845, 'regionable_type'=>'village']); //Tegalpapak
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2846, 'regionable_type'=>'village']); //Cibungur
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2847, 'regionable_type'=>'village']); //Cikuya
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2848, 'regionable_type'=>'village']); //Karyasari
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2849, 'regionable_type'=>'village']); //Kubangkampil
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2850, 'regionable_type'=>'village']); //Pasirkadu
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2851, 'regionable_type'=>'village']); //Perdana
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2852, 'regionable_type'=>'village']); //Seuseupan
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2853, 'regionable_type'=>'village']); //Sidamukti
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2854, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>1713, 'regionable_id'=>2855, 'regionable_type'=>'village']); //Weru
            DB::table('regions')->insert(['id'=>1714, 'parent'=>1707, 'code'=>'4227', 'type'=>'districts', 'name'=>'Districts 4227, City 422, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>268, 'regionable_type'=>'districts']); //Picung
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>274, 'regionable_type'=>'districts']); //Pulosari
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>283, 'regionable_type'=>'districts']); //Cikeudal (cikedal)
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>284, 'regionable_type'=>'districts']); //Cimanuk
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>285, 'regionable_type'=>'districts']); //Mekarjaya
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>286, 'regionable_type'=>'districts']); //Cipeucang
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>287, 'regionable_type'=>'districts']); //Saketi
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>288, 'regionable_type'=>'districts']); //Cisata
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>289, 'regionable_type'=>'districts']); //Bojong
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>290, 'regionable_type'=>'districts']); //Sindangresmi
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>291, 'regionable_type'=>'districts']); //Munjul
            DB::table('regionables')->insert(['region_id'=>1714, 'regionable_id'=>292, 'regionable_type'=>'districts']); //Angsana
                DB::table('regions')->insert(['id'=>1715, 'parent'=>1714, 'code'=>'42277', 'type'=>'village', 'name'=>'Village 42277, Districts 4227, City 422, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2943, 'regionable_type'=>'village']); //Lebak
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2944, 'regionable_type'=>'village']); //Angsana
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2945, 'regionable_type'=>'village']); //Cikayas
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2946, 'regionable_type'=>'village']); //Cipinang
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2947, 'regionable_type'=>'village']); //Kadubadak
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2948, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2949, 'regionable_type'=>'village']); //Kramatmanik
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2950, 'regionable_type'=>'village']); //Padaherang
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2951, 'regionable_type'=>'village']); //Padamulya
                DB::table('regionables')->insert(['region_id'=>1715, 'regionable_id'=>2952, 'regionable_type'=>'village']); //Sumurlaban
            DB::table('regions')->insert(['id'=>1716, 'parent'=>1707, 'code'=>'4228', 'type'=>'districts', 'name'=>'Districts 4228, City 422, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1716, 'regionable_id'=>293, 'regionable_type'=>'districts']); //Sobang
            DB::table('regionables')->insert(['region_id'=>1716, 'regionable_id'=>294, 'regionable_type'=>'districts']); //Panimbang
            DB::table('regionables')->insert(['region_id'=>1716, 'regionable_id'=>295, 'regionable_type'=>'districts']); //Cigeulis
            DB::table('regionables')->insert(['region_id'=>1716, 'regionable_id'=>296, 'regionable_type'=>'districts']); //Sumur
            DB::table('regionables')->insert(['region_id'=>1716, 'regionable_id'=>297, 'regionable_type'=>'districts']); //Cimanggu
            DB::table('regionables')->insert(['region_id'=>1716, 'regionable_id'=>298, 'regionable_type'=>'districts']); //Cibaliung
            DB::table('regionables')->insert(['region_id'=>1716, 'regionable_id'=>299, 'regionable_type'=>'districts']); //Cibitung
            DB::table('regionables')->insert(['region_id'=>1716, 'regionable_id'=>300, 'regionable_type'=>'districts']); //Cikeusik
                DB::table('regions')->insert(['id'=>1717, 'parent'=>1716, 'code'=>'42286', 'type'=>'village', 'name'=>'Village 42286, Districts 4228, City 422, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3014, 'regionable_type'=>'village']); //Cikadongdong
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3015, 'regionable_type'=>'village']); //Cikeusik
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3016, 'regionable_type'=>'village']); //Cikiruhwetan
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3017, 'regionable_type'=>'village']); //Curugciung
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3018, 'regionable_type'=>'village']); //Leuwibalang
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3019, 'regionable_type'=>'village']); //Nanggala
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3020, 'regionable_type'=>'village']); //Parungkokosan
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3021, 'regionable_type'=>'village']); //Rancaseneng
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3022, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3023, 'regionable_type'=>'village']); //Sukaseneng
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3024, 'regionable_type'=>'village']); //Sukawaris
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3025, 'regionable_type'=>'village']); //Sumurbatu
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3026, 'regionable_type'=>'village']); //Tanjungan
                DB::table('regionables')->insert(['region_id'=>1717, 'regionable_id'=>3027, 'regionable_type'=>'village']); //Umbulan
        DB::table('regions')->insert(['id'=>1718, 'parent'=>1678, 'code'=>'423', 'type'=>'city', 'name'=>'City 423, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1718, 'regionable_id'=>23, 'regionable_type'=>'city']); //Lebak regencies
            DB::table('regions')->insert(['id'=>1719, 'parent'=>1718, 'code'=>'4231', 'type'=>'districts', 'name'=>'Districts 4231, City 423, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1719, 'regionable_id'=>301, 'regionable_type'=>'districts']); //Kalanganyar
            DB::table('regionables')->insert(['region_id'=>1719, 'regionable_id'=>302, 'regionable_type'=>'districts']); //Rangkasbitung
            DB::table('regionables')->insert(['region_id'=>1719, 'regionable_id'=>303, 'regionable_type'=>'districts']); //Malingping
            DB::table('regionables')->insert(['region_id'=>1719, 'regionable_id'=>304, 'regionable_type'=>'districts']); //Sobang
            DB::table('regionables')->insert(['region_id'=>1719, 'regionable_id'=>305, 'regionable_type'=>'districts']); //Cibadak
                DB::table('regions')->insert(['id'=>1720, 'parent'=>1719, 'code'=>'42318', 'type'=>'village', 'name'=>'Village 42318, Districts 4231, City 423, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3066, 'regionable_type'=>'village']); //Cilebang
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3067, 'regionable_type'=>'village']); //Cirompang
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3068, 'regionable_type'=>'village']); //Citujah
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3069, 'regionable_type'=>'village']); //Hariang
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3070, 'regionable_type'=>'village']); //Majasari
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3071, 'regionable_type'=>'village']); //Sobang
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3072, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3073, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3074, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3075, 'regionable_type'=>'village']); //Kaduagung Barat
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3076, 'regionable_type'=>'village']); //Kaduagung Tengah
                DB::table('regionables')->insert(['region_id'=>1720, 'regionable_id'=>3077, 'regionable_type'=>'village']); //Kaduagung Timur
            DB::table('regions')->insert(['id'=>1721, 'parent'=>1718, 'code'=>'4235', 'type'=>'districts', 'name'=>'Districts 4235, City 423, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1721, 'regionable_id'=>305, 'regionable_type'=>'districts']); //Cibadak
            DB::table('regionables')->insert(['region_id'=>1721, 'regionable_id'=>306, 'regionable_type'=>'districts']); //Warunggunung
            DB::table('regionables')->insert(['region_id'=>1721, 'regionable_id'=>307, 'regionable_type'=>'districts']); //Cileles
            DB::table('regionables')->insert(['region_id'=>1721, 'regionable_id'=>308, 'regionable_type'=>'districts']); //Gunung Kencana
            DB::table('regionables')->insert(['region_id'=>1721, 'regionable_id'=>309, 'regionable_type'=>'districts']); //Lebakgedong
            DB::table('regionables')->insert(['region_id'=>1721, 'regionable_id'=>310, 'regionable_type'=>'districts']); //Banjarsari
            DB::table('regionables')->insert(['region_id'=>1721, 'regionable_id'=>311, 'regionable_type'=>'districts']); //Cikulur
                DB::table('regions')->insert(['id'=>1722, 'parent'=>1721, 'code'=>'42356', 'type'=>'village', 'name'=>'Village 42356, Districts 4235, City 423, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3152, 'regionable_type'=>'village']); //Anggalan
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3153, 'regionable_type'=>'village']); //Cigoong Selatan
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3154, 'regionable_type'=>'village']); //Cigoong Utara
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3155, 'regionable_type'=>'village']); //Cikulur
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3156, 'regionable_type'=>'village']); //Curugpanjang
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3157, 'regionable_type'=>'village']); //Muaradua
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3158, 'regionable_type'=>'village']); //Muncangkopong
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3159, 'regionable_type'=>'village']); //Parage
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3160, 'regionable_type'=>'village']); //Pasirgintung
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3161, 'regionable_type'=>'village']); //Sukadaya
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3162, 'regionable_type'=>'village']); //Sukaharja
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3163, 'regionable_type'=>'village']); //Sumurbandung
                DB::table('regionables')->insert(['region_id'=>1722, 'regionable_id'=>3164, 'regionable_type'=>'village']); //Taman Jaya
            DB::table('regions')->insert(['id'=>1723, 'parent'=>1718, 'code'=>'4236', 'type'=>'districts', 'name'=>'Districts 4236, City 423, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1723, 'regionable_id'=>312, 'regionable_type'=>'districts']); //Cimarga
            DB::table('regionables')->insert(['region_id'=>1723, 'regionable_id'=>313, 'regionable_type'=>'districts']); //Leuwidamar
            DB::table('regionables')->insert(['region_id'=>1723, 'regionable_id'=>314, 'regionable_type'=>'districts']); //Cirinten
            DB::table('regionables')->insert(['region_id'=>1723, 'regionable_id'=>315, 'regionable_type'=>'districts']); //Bojongmanik
            DB::table('regionables')->insert(['region_id'=>1723, 'regionable_id'=>316, 'regionable_type'=>'districts']); //Muncang
                DB::table('regions')->insert(['id'=>1724, 'parent'=>1723, 'code'=>'42364', 'type'=>'village', 'name'=>'Village 42364, Districts 4236, City 423, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3213, 'regionable_type'=>'village']); //Cikarang
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3214, 'regionable_type'=>'village']); //Ciminyak
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3215, 'regionable_type'=>'village']); //Girijagabaya
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3216, 'regionable_type'=>'village']); //Jagaraksa
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3217, 'regionable_type'=>'village']); //Karangcombong
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3218, 'regionable_type'=>'village']); //Leuwicoo
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3219, 'regionable_type'=>'village']); //Mekarwangi
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3220, 'regionable_type'=>'village']); //Muncang
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3221, 'regionable_type'=>'village']); //Pasirnangka
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3222, 'regionable_type'=>'village']); //Sindangwangi
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3223, 'regionable_type'=>'village']); //Sukanagara
                DB::table('regionables')->insert(['region_id'=>1724, 'regionable_id'=>3224, 'regionable_type'=>'village']); //Tanjungwangi
            DB::table('regions')->insert(['id'=>1725, 'parent'=>1718, 'code'=>'4237', 'type'=>'districts', 'name'=>'Districts 4237, City 423, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1725, 'regionable_id'=>309, 'regionable_type'=>'districts']); //Lebakgedong
            DB::table('regionables')->insert(['region_id'=>1725, 'regionable_id'=>317, 'regionable_type'=>'districts']); //Sajira
            DB::table('regionables')->insert(['region_id'=>1725, 'regionable_id'=>318, 'regionable_type'=>'districts']); //Cipanas
                DB::table('regions')->insert(['id'=>1726, 'parent'=>1725, 'code'=>'42372', 'type'=>'village', 'name'=>'Village 42372, Districts 4237, City 423, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3127, 'regionable_type'=>'village']); //Banjar Irigasi
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3128, 'regionable_type'=>'village']); //Ciladaeun
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3129, 'regionable_type'=>'village']); //Lebakgedong
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3130, 'regionable_type'=>'village']); //Lebaksangka
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3131, 'regionable_type'=>'village']); //Lebaksitu
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3240, 'regionable_type'=>'village']); //Bintangresmi
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3241, 'regionable_type'=>'village']); //Bintangsari
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3242, 'regionable_type'=>'village']); //Cipanas
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3243, 'regionable_type'=>'village']); //Giriharja
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3244, 'regionable_type'=>'village']); //Girilaya
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3245, 'regionable_type'=>'village']); //Harumsari
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3246, 'regionable_type'=>'village']); //Haurgajrug
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3247, 'regionable_type'=>'village']); //Jayapura
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3248, 'regionable_type'=>'village']); //Luhurjaya
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3249, 'regionable_type'=>'village']); //Malangsari
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3250, 'regionable_type'=>'village']); //Pasirhaur
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3251, 'regionable_type'=>'village']); //Sipayung
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3252, 'regionable_type'=>'village']); //Sukasari
                DB::table('regionables')->insert(['region_id'=>1726, 'regionable_id'=>3253, 'regionable_type'=>'village']); //Talagahiang/talagahiyang
            DB::table('regions')->insert(['id'=>1727, 'parent'=>1718, 'code'=>'4238', 'type'=>'districts', 'name'=>'Districts 4238, City 423, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1727, 'regionable_id'=>319, 'regionable_type'=>'districts']); //Maja
            DB::table('regionables')->insert(['region_id'=>1727, 'regionable_id'=>320, 'regionable_type'=>'districts']); //Curugbitung
                DB::table('regions')->insert(['id'=>1728, 'parent'=>1727, 'code'=>'42381', 'type'=>'village', 'name'=>'Village 42381, Districts 4238, City 423, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3254, 'regionable_type'=>'village']); //Binong
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3255, 'regionable_type'=>'village']); //Buyut
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3256, 'regionable_type'=>'village']); //Cilangkap
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3257, 'regionable_type'=>'village']); //Curug Badak
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3258, 'regionable_type'=>'village']); //Gubugcibeureum
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3259, 'regionable_type'=>'village']); //Maja
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3260, 'regionable_type'=>'village']); //Maja Baru
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3261, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3262, 'regionable_type'=>'village']); //Padasuka
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3263, 'regionable_type'=>'village']); //Pasir Kecapi
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3264, 'regionable_type'=>'village']); //Pasir Kembang
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3265, 'regionable_type'=>'village']); //Sangiang
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3266, 'regionable_type'=>'village']); //Sindangmulya
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3267, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3268, 'regionable_type'=>'village']); //Candi
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3269, 'regionable_type'=>'village']); //Ciburuy
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3270, 'regionable_type'=>'village']); //Cidadap
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3271, 'regionable_type'=>'village']); //Cilayang
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3272, 'regionable_type'=>'village']); //Cipining
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3273, 'regionable_type'=>'village']); //Curugbitung
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3274, 'regionable_type'=>'village']); //Guradog
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3275, 'regionable_type'=>'village']); //Lebakkasih
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3276, 'regionable_type'=>'village']); //Mayak
                DB::table('regionables')->insert(['region_id'=>1728, 'regionable_id'=>3277, 'regionable_type'=>'village']); //Sekarwangi
            DB::table('regions')->insert(['id'=>1729, 'parent'=>1718, 'code'=>'4239', 'type'=>'districts', 'name'=>'Districts 4239, City 423, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>303, 'regionable_type'=>'districts']); //Malingping
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>321, 'regionable_type'=>'districts']); //Cihara
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>322, 'regionable_type'=>'districts']); //Panggarangan
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>323, 'regionable_type'=>'districts']); //Bayah
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>324, 'regionable_type'=>'districts']); //Cilograng
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>325, 'regionable_type'=>'districts']); //Cibeber
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>326, 'regionable_type'=>'districts']); //Cijaku
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>327, 'regionable_type'=>'districts']); //Cigemblong
            DB::table('regionables')->insert(['region_id'=>1729, 'regionable_id'=>328, 'regionable_type'=>'districts']); //Wanasalam
                DB::table('regions')->insert(['id'=>1730, 'parent'=>1729, 'code'=>'42396', 'type'=>'village', 'name'=>'Village 42396, Districts 4239, City 423, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3360, 'regionable_type'=>'village']); //Bejod
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3361, 'regionable_type'=>'village']); //Cikeusik
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3362, 'regionable_type'=>'village']); //Cilangkap
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3363, 'regionable_type'=>'village']); //Cipedang
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3364, 'regionable_type'=>'village']); //Cipeucang
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3365, 'regionable_type'=>'village']); //Cisarap
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3366, 'regionable_type'=>'village']); //Karangpamindangan
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3367, 'regionable_type'=>'village']); //Ketapang
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3368, 'regionable_type'=>'village']); //Muara
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3369, 'regionable_type'=>'village']); //Parungpanjang
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3370, 'regionable_type'=>'village']); //Parungsari
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3371, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>1730, 'regionable_id'=>3372, 'regionable_type'=>'village']); //Wanasalam
        DB::table('regions')->insert(['id'=>1731, 'parent'=>1678, 'code'=>'424', 'type'=>'city', 'name'=>'City 424, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1731, 'regionable_id'=>20, 'regionable_type'=>'city']); //Serang city
        DB::table('regionables')->insert(['region_id'=>1731, 'regionable_id'=>21, 'regionable_type'=>'city']); //Serang regencies
        DB::table('regionables')->insert(['region_id'=>1731, 'regionable_id'=>24, 'regionable_type'=>'city']); //Cilegon city
            DB::table('regions')->insert(['id'=>1732, 'parent'=>1731, 'code'=>'4241', 'type'=>'districts', 'name'=>'Districts 4241, City 424, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1732, 'regionable_id'=>329, 'regionable_type'=>'districts']); //Jombang
            DB::table('regionables')->insert(['region_id'=>1732, 'regionable_id'=>330, 'regionable_type'=>'districts']); //Cilegon
                DB::table('regions')->insert(['id'=>1733, 'parent'=>1732, 'code'=>'42415', 'type'=>'village', 'name'=>'Village 42415, Districts 4241, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1733, 'regionable_id'=>3378, 'regionable_type'=>'village']); //Ciwaduk
                DB::table('regions')->insert(['id'=>1734, 'parent'=>1732, 'code'=>'42416', 'type'=>'village', 'name'=>'Village 42416, Districts 4241, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1734, 'regionable_id'=>3377, 'regionable_type'=>'village']); //Sukmajaya
                DB::table('regionables')->insert(['region_id'=>1734, 'regionable_id'=>3379, 'regionable_type'=>'village']); //Ketileng
                DB::table('regions')->insert(['id'=>1735, 'parent'=>1732, 'code'=>'42417', 'type'=>'village', 'name'=>'Village 42417, Districts 4241, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1735, 'regionable_id'=>3380, 'regionable_type'=>'village']); //Bendungan
                DB::table('regions')->insert(['id'=>1736, 'parent'=>1732, 'code'=>'42418', 'type'=>'village', 'name'=>'Village 42418, Districts 4241, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1736, 'regionable_id'=>3381, 'regionable_type'=>'village']); //Ciwedus
                DB::table('regions')->insert(['id'=>1737, 'parent'=>1732, 'code'=>'42419', 'type'=>'village', 'name'=>'Village 42419, Districts 4241, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1737, 'regionable_id'=>3382, 'regionable_type'=>'village']); //Bagendung
            DB::table('regions')->insert(['id'=>1738, 'parent'=>1731, 'code'=>'4242', 'type'=>'districts', 'name'=>'Districts 4242, City 424, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1738, 'regionable_id'=>331, 'regionable_type'=>'districts']); //Cibeber
                DB::table('regions')->insert(['id'=>1739, 'parent'=>1738, 'code'=>'42422', 'type'=>'village', 'name'=>'Village 42422, Districts 4242, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1739, 'regionable_id'=>3383, 'regionable_type'=>'village']); //Kedaleman
                DB::table('regions')->insert(['id'=>1740, 'parent'=>1738, 'code'=>'42423', 'type'=>'village', 'name'=>'Village 42423, Districts 4242, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1740, 'regionable_id'=>3384, 'regionable_type'=>'village']); //Cibeber
                DB::table('regions')->insert(['id'=>1741, 'parent'=>1738, 'code'=>'42424', 'type'=>'village', 'name'=>'Village 42424, Districts 4242, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1741, 'regionable_id'=>3385, 'regionable_type'=>'village']); //Kalitimbang
                DB::table('regions')->insert(['id'=>1742, 'parent'=>1738, 'code'=>'42425', 'type'=>'village', 'name'=>'Village 42425, Districts 4242, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1742, 'regionable_id'=>3386, 'regionable_type'=>'village']); //Karangasem
                DB::table('regions')->insert(['id'=>1743, 'parent'=>1738, 'code'=>'42426', 'type'=>'village', 'name'=>'Village 42426, Districts 4242, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1743, 'regionable_id'=>3387, 'regionable_type'=>'village']); //Bulakan
                DB::table('regions')->insert(['id'=>1744, 'parent'=>1738, 'code'=>'42427', 'type'=>'village', 'name'=>'Village 42427, Districts 4242, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1744, 'regionable_id'=>3388, 'regionable_type'=>'village']); //Cikerai
            DB::table('regions')->insert(['id'=>1745, 'parent'=>1731, 'code'=>'4243', 'type'=>'districts', 'name'=>'Districts 4243, City 424, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1745, 'regionable_id'=>332, 'regionable_type'=>'districts']); //Pulomerak
            DB::table('regionables')->insert(['region_id'=>1745, 'regionable_id'=>333, 'regionable_type'=>'districts']); //Purwakarta
            DB::table('regionables')->insert(['region_id'=>1745, 'regionable_id'=>334, 'regionable_type'=>'districts']); //Gerogol
                DB::table('regions')->insert(['id'=>1746, 'parent'=>1745, 'code'=>'42436', 'type'=>'village', 'name'=>'Village 42436, Districts 4243, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1746, 'regionable_id'=>3399, 'regionable_type'=>'village']); //Gerogol/grogol
                DB::table('regionables')->insert(['region_id'=>1746, 'regionable_id'=>3400, 'regionable_type'=>'village']); //Kotasari
                DB::table('regionables')->insert(['region_id'=>1746, 'regionable_id'=>3401, 'regionable_type'=>'village']); //Rawa Arum
                DB::table('regions')->insert(['id'=>1747, 'parent'=>1745, 'code'=>'42438', 'type'=>'village', 'name'=>'Village 42438, Districts 4243, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1747, 'regionable_id'=>3390, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1747, 'regionable_id'=>3391, 'regionable_type'=>'village']); //Tamansari
                DB::table('regionables')->insert(['region_id'=>1747, 'regionable_id'=>3402, 'regionable_type'=>'village']); //Gerem
            DB::table('regions')->insert(['id'=>1748, 'parent'=>1731, 'code'=>'4244', 'type'=>'districts', 'name'=>'Districts 4244, City 424, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1748, 'regionable_id'=>335, 'regionable_type'=>'districts']); //Ciwandan
            DB::table('regionables')->insert(['region_id'=>1748, 'regionable_id'=>336, 'regionable_type'=>'districts']); //Citangkil
                DB::table('regions')->insert(['id'=>1749, 'parent'=>1748, 'code'=>'42441', 'type'=>'village', 'name'=>'Village 42441, Districts 4244, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1749, 'regionable_id'=>3403, 'regionable_type'=>'village']); //Banjar Negara
                DB::table('regionables')->insert(['region_id'=>1749, 'regionable_id'=>3409, 'regionable_type'=>'village']); //Citangkil
                DB::table('regionables')->insert(['region_id'=>1749, 'regionable_id'=>3410, 'regionable_type'=>'village']); //Tamanbaru
                DB::table('regions')->insert(['id'=>1750, 'parent'=>1748, 'code'=>'42442', 'type'=>'village', 'name'=>'Village 42442, Districts 4244, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1750, 'regionable_id'=>3411, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>1750, 'regionable_id'=>3412, 'regionable_type'=>'village']); //Lebakdenok
                DB::table('regions')->insert(['id'=>1751, 'parent'=>1748, 'code'=>'42443', 'type'=>'village', 'name'=>'Village 42443, Districts 4244, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1751, 'regionable_id'=>3413, 'regionable_type'=>'village']); //Samangraya
                DB::table('regionables')->insert(['region_id'=>1751, 'regionable_id'=>3414, 'regionable_type'=>'village']); //Warnasari
                DB::table('regions')->insert(['id'=>1752, 'parent'=>1748, 'code'=>'42444', 'type'=>'village', 'name'=>'Village 42444, Districts 4244, City 424, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1752, 'regionable_id'=>3415, 'regionable_type'=>'village']); //Deringo

        //Jawa Barat
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>9, 'regionable_type'=>'province']); //Jawa Barat
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>68, 'regionable_type'=>'city']); //Bandung city
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>69, 'regionable_type'=>'city']); //Bandung regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>70, 'regionable_type'=>'city']); //Bandung Barat regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>71, 'regionable_type'=>'city']); //Cimahi city
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>72, 'regionable_type'=>'city']); //Purwakarta regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>73, 'regionable_type'=>'city']); //Subang regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>74, 'regionable_type'=>'city']); //Karawang regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>75, 'regionable_type'=>'city']); //Sukabumi city
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>76, 'regionable_type'=>'city']); //Sukabumi regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>77, 'regionable_type'=>'city']); //Cianjur regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>78, 'regionable_type'=>'city']); //Garut regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>79, 'regionable_type'=>'city']); //Cirebon city
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>80, 'regionable_type'=>'city']); //Cirebon regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>81, 'regionable_type'=>'city']); //Indramayu regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>82, 'regionable_type'=>'city']); //Sumedang regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>83, 'regionable_type'=>'city']); //Majalengka regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>84, 'regionable_type'=>'city']); //Kuningan regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>85, 'regionable_type'=>'city']); //Tasikmalaya city
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>86, 'regionable_type'=>'city']); //Tasikmalaya regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>87, 'regionable_type'=>'city']); //Ciamis regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>88, 'regionable_type'=>'city']); //Pangandaran regencies
        DB::table('regionables')->insert(['region_id'=>1678, 'regionable_id'=>89, 'regionable_type'=>'city']); //Banjar city

        DB::table('regions')->insert(['id'=>1753, 'parent'=>1678, 'code'=>'401', 'type'=>'city', 'name'=>'City 401, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1753, 'regionable_id'=>68, 'regionable_type'=>'city']); //Bandung city
        DB::table('regionables')->insert(['region_id'=>1753, 'regionable_id'=>69, 'regionable_type'=>'city']); //Bandung regencies
            DB::table('regions')->insert(['id'=>1754, 'parent'=>1753, 'code'=>'4011', 'type'=>'districts', 'name'=>'Districts 4011, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1754, 'regionable_id'=>1001, 'regionable_type'=>'districts']); //Sumur Bandung
            DB::table('regionables')->insert(['region_id'=>1754, 'regionable_id'=>1002, 'regionable_type'=>'districts']); //Bandung Wetan
            DB::table('regionables')->insert(['region_id'=>1754, 'regionable_id'=>1062, 'regionable_type'=>'districts']); //Sumur Bandung
            DB::table('regionables')->insert(['region_id'=>1754, 'regionable_id'=>1063, 'regionable_type'=>'districts']); //Bandung Wetan
                DB::table('regions')->insert(['id'=>1755, 'parent'=>1754, 'code'=>'40114', 'type'=>'village', 'name'=>'Village 40114, Districts 4011, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1755, 'regionable_id'=>9734, 'regionable_type'=>'village']); //Cihapit
                DB::table('regionables')->insert(['region_id'=>1755, 'regionable_id'=>10165, 'regionable_type'=>'village']); //Cihapit
                DB::table('regions')->insert(['id'=>1756, 'parent'=>1754, 'code'=>'40115', 'type'=>'village', 'name'=>'Village 40115, Districts 4011, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1756, 'regionable_id'=>9735, 'regionable_type'=>'village']); //Citarum
                DB::table('regionables')->insert(['region_id'=>1756, 'regionable_id'=>10166, 'regionable_type'=>'village']); //Citarum
                DB::table('regions')->insert(['id'=>1757, 'parent'=>1754, 'code'=>'40116', 'type'=>'village', 'name'=>'Village 40116, Districts 4011, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1757, 'regionable_id'=>9736, 'regionable_type'=>'village']); //Tamansari
                DB::table('regionables')->insert(['region_id'=>1757, 'regionable_id'=>10167, 'regionable_type'=>'village']); //Tamansari
            DB::table('regions')->insert(['id'=>1758, 'parent'=>1753, 'code'=>'4012', 'type'=>'districts', 'name'=>'Districts 4012, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1758, 'regionable_id'=>1003, 'regionable_type'=>'districts']); //Cibeunying Kidul
            DB::table('regionables')->insert(['region_id'=>1758, 'regionable_id'=>1004, 'regionable_type'=>'districts']); //Cibeunying Kaler
            DB::table('regionables')->insert(['region_id'=>1758, 'regionable_id'=>1064, 'regionable_type'=>'districts']); //Cibeunying Kidul
            DB::table('regionables')->insert(['region_id'=>1758, 'regionable_id'=>1065, 'regionable_type'=>'districts']); //Cibeunying Kaler
                DB::table('regions')->insert(['id'=>1759, 'parent'=>1758, 'code'=>'40122', 'type'=>'village', 'name'=>'Village 40122, Districts 4012, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1759, 'regionable_id'=>9743, 'regionable_type'=>'village']); //Cihaur Geulis
                DB::table('regionables')->insert(['region_id'=>1759, 'regionable_id'=>10174, 'regionable_type'=>'village']); //Cihaur Geulis
                DB::table('regions')->insert(['id'=>1760, 'parent'=>1758, 'code'=>'40123', 'type'=>'village', 'name'=>'Village 40123, Districts 4012, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1760, 'regionable_id'=>9744, 'regionable_type'=>'village']); //Sukaluyu
                DB::table('regionables')->insert(['region_id'=>1760, 'regionable_id'=>10175, 'regionable_type'=>'village']); //Sukaluyu
                DB::table('regions')->insert(['id'=>1761, 'parent'=>1758, 'code'=>'40124', 'type'=>'village', 'name'=>'Village 40124, Districts 4012, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1761, 'regionable_id'=>9739, 'regionable_type'=>'village']); //Cikutra
                DB::table('regionables')->insert(['region_id'=>1761, 'regionable_id'=>9745, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>1761, 'regionable_id'=>10170, 'regionable_type'=>'village']); //Cikutra
                DB::table('regionables')->insert(['region_id'=>1761, 'regionable_id'=>10176, 'regionable_type'=>'village']); //Neglasari
            DB::table('regions')->insert(['id'=>1762, 'parent'=>1753, 'code'=>'4013', 'type'=>'districts', 'name'=>'Districts 4013, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1762, 'regionable_id'=>1005, 'regionable_type'=>'districts']); //Coblong
            DB::table('regionables')->insert(['region_id'=>1762, 'regionable_id'=>1066, 'regionable_type'=>'districts']); //Coblong
                DB::table('regions')->insert(['id'=>1763, 'parent'=>1762, 'code'=>'40131', 'type'=>'village', 'name'=>'Village 40131, Districts 4013, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1763, 'regionable_id'=>9747, 'regionable_type'=>'village']); //Cipaganti
                DB::table('regionables')->insert(['region_id'=>1763, 'regionable_id'=>10178, 'regionable_type'=>'village']); //Cipaganti
                DB::table('regions')->insert(['id'=>1764, 'parent'=>1762, 'code'=>'40132', 'type'=>'village', 'name'=>'Village 40132, Districts 4013, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1764, 'regionable_id'=>9748, 'regionable_type'=>'village']); //Lebak Gede
                DB::table('regionables')->insert(['region_id'=>1764, 'regionable_id'=>9749, 'regionable_type'=>'village']); //Lebak Siliwangi
                DB::table('regionables')->insert(['region_id'=>1764, 'regionable_id'=>10179, 'regionable_type'=>'village']); //Lebak Gede
                DB::table('regionables')->insert(['region_id'=>1764, 'regionable_id'=>10180, 'regionable_type'=>'village']); //Lebak Siliwangi
                DB::table('regions')->insert(['id'=>1765, 'parent'=>1762, 'code'=>'40133', 'type'=>'village', 'name'=>'Village 40133, Districts 4013, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1765, 'regionable_id'=>9750, 'regionable_type'=>'village']); //Sadang Serang
                DB::table('regionables')->insert(['region_id'=>1765, 'regionable_id'=>10181, 'regionable_type'=>'village']); //Sadang Serang
                DB::table('regions')->insert(['id'=>1766, 'parent'=>1762, 'code'=>'40134', 'type'=>'village', 'name'=>'Village 40134, Districts 4013, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1766, 'regionable_id'=>9751, 'regionable_type'=>'village']); //Sekeloa
                DB::table('regionables')->insert(['region_id'=>1766, 'regionable_id'=>10182, 'regionable_type'=>'village']); //Sekeloa
                DB::table('regions')->insert(['id'=>1767, 'parent'=>1762, 'code'=>'40135', 'type'=>'village', 'name'=>'Village 40135, Districts 4013, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1767, 'regionable_id'=>9752, 'regionable_type'=>'village']); //Dago
                DB::table('regionables')->insert(['region_id'=>1767, 'regionable_id'=>10183, 'regionable_type'=>'village']); //Dago
            DB::table('regions')->insert(['id'=>1768, 'parent'=>1753, 'code'=>'4014', 'type'=>'districts', 'name'=>'Districts 4014, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1768, 'regionable_id'=>1006, 'regionable_type'=>'districts']); //Cidadap
            DB::table('regionables')->insert(['region_id'=>1768, 'regionable_id'=>1067, 'regionable_type'=>'districts']); //Cidadap
                DB::table('regions')->insert(['id'=>1769, 'parent'=>1768, 'code'=>'40141', 'type'=>'village', 'name'=>'Village 40141, Districts 4014, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1769, 'regionable_id'=>9753, 'regionable_type'=>'village']); //Hegarmanah
                DB::table('regionables')->insert(['region_id'=>1769, 'regionable_id'=>10184, 'regionable_type'=>'village']); //Hegarmanah
                DB::table('regions')->insert(['id'=>1770, 'parent'=>1768, 'code'=>'40142', 'type'=>'village', 'name'=>'Village 40142, Districts 4014, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1770, 'regionable_id'=>9754, 'regionable_type'=>'village']); //Ciumbuleuit
                DB::table('regionables')->insert(['region_id'=>1770, 'regionable_id'=>10185, 'regionable_type'=>'village']); //Ciumbuleuit
                DB::table('regions')->insert(['id'=>1771, 'parent'=>1768, 'code'=>'40143', 'type'=>'village', 'name'=>'Village 40143, Districts 4014, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1771, 'regionable_id'=>9755, 'regionable_type'=>'village']); //Ledeng
                DB::table('regionables')->insert(['region_id'=>1771, 'regionable_id'=>10186, 'regionable_type'=>'village']); //Ledeng
            DB::table('regions')->insert(['id'=>1772, 'parent'=>1753, 'code'=>'4015', 'type'=>'districts', 'name'=>'Districts 4015, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1772, 'regionable_id'=>1007, 'regionable_type'=>'districts']); //Sukasari
            DB::table('regionables')->insert(['region_id'=>1772, 'regionable_id'=>1068, 'regionable_type'=>'districts']); //Sukasari
                DB::table('regions')->insert(['id'=>1773, 'parent'=>1772, 'code'=>'40151', 'type'=>'village', 'name'=>'Village 40151, Districts 4015, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1773, 'regionable_id'=>9756, 'regionable_type'=>'village']); //Sarijadi
                DB::table('regionables')->insert(['region_id'=>1773, 'regionable_id'=>10187, 'regionable_type'=>'village']); //Sarijadi
                DB::table('regions')->insert(['id'=>1774, 'parent'=>1772, 'code'=>'40152', 'type'=>'village', 'name'=>'Village 40152, Districts 4015, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1774, 'regionable_id'=>9757, 'regionable_type'=>'village']); //Sukarasa
                DB::table('regionables')->insert(['region_id'=>1774, 'regionable_id'=>10188, 'regionable_type'=>'village']); //Sukarasa
                DB::table('regions')->insert(['id'=>1775, 'parent'=>1772, 'code'=>'40153', 'type'=>'village', 'name'=>'Village 40153, Districts 4015, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1775, 'regionable_id'=>9758, 'regionable_type'=>'village']); //Geger Kalong
                DB::table('regionables')->insert(['region_id'=>1775, 'regionable_id'=>10189, 'regionable_type'=>'village']); //Geger Kalong
                DB::table('regions')->insert(['id'=>1776, 'parent'=>1772, 'code'=>'40154', 'type'=>'village', 'name'=>'Village 40154, Districts 4015, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1776, 'regionable_id'=>9759, 'regionable_type'=>'village']); //Isola
                DB::table('regionables')->insert(['region_id'=>1776, 'regionable_id'=>10190, 'regionable_type'=>'village']); //Isola
            DB::table('regions')->insert(['id'=>1777, 'parent'=>1753, 'code'=>'4016', 'type'=>'districts', 'name'=>'Districts 4016, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1777, 'regionable_id'=>1008, 'regionable_type'=>'districts']); //Sukajadi
            DB::table('regionables')->insert(['region_id'=>1777, 'regionable_id'=>1069, 'regionable_type'=>'districts']); //Sukajadi
                DB::table('regions')->insert(['id'=>1778, 'parent'=>1777, 'code'=>'40161', 'type'=>'village', 'name'=>'Village 40161, Districts 4016, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1778, 'regionable_id'=>9760, 'regionable_type'=>'village']); //Pasteur
                DB::table('regionables')->insert(['region_id'=>1778, 'regionable_id'=>10191, 'regionable_type'=>'village']); //Pasteur
                DB::table('regions')->insert(['id'=>1779, 'parent'=>1777, 'code'=>'40162', 'type'=>'village', 'name'=>'Village 40162, Districts 4016, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1779, 'regionable_id'=>9761, 'regionable_type'=>'village']); //Cipedes
                DB::table('regionables')->insert(['region_id'=>1779, 'regionable_id'=>9762, 'regionable_type'=>'village']); //Sukabungah
                DB::table('regionables')->insert(['region_id'=>1779, 'regionable_id'=>10192, 'regionable_type'=>'village']); //Cipedes
                DB::table('regionables')->insert(['region_id'=>1779, 'regionable_id'=>10193, 'regionable_type'=>'village']); //Sukabungah
                DB::table('regions')->insert(['id'=>1780, 'parent'=>1777, 'code'=>'40163', 'type'=>'village', 'name'=>'Village 40163, Districts 4016, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1780, 'regionable_id'=>9763, 'regionable_type'=>'village']); //Sukagalih
                DB::table('regionables')->insert(['region_id'=>1780, 'regionable_id'=>10194, 'regionable_type'=>'village']); //Sukagalih
                DB::table('regions')->insert(['id'=>1781, 'parent'=>1777, 'code'=>'40164', 'type'=>'village', 'name'=>'Village 40164, Districts 4016, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1781, 'regionable_id'=>9764, 'regionable_type'=>'village']); //Sukawarna
                DB::table('regionables')->insert(['region_id'=>1781, 'regionable_id'=>10195, 'regionable_type'=>'village']); //Sukawarna
            DB::table('regions')->insert(['id'=>1782, 'parent'=>1753, 'code'=>'4017', 'type'=>'districts', 'name'=>'Districts 4017, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1782, 'regionable_id'=>1009, 'regionable_type'=>'districts']); //Cicendo
            DB::table('regionables')->insert(['region_id'=>1782, 'regionable_id'=>1070, 'regionable_type'=>'districts']); //Cicendo
                DB::table('regions')->insert(['id'=>1783, 'parent'=>1782, 'code'=>'40171', 'type'=>'village', 'name'=>'Village 40171, Districts 4017, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1783, 'regionable_id'=>9765, 'regionable_type'=>'village']); //Pasir Kaliki
                DB::table('regionables')->insert(['region_id'=>1783, 'regionable_id'=>10196, 'regionable_type'=>'village']); //Pasir Kaliki
                DB::table('regions')->insert(['id'=>1784, 'parent'=>1782, 'code'=>'40172', 'type'=>'village', 'name'=>'Village 40172, Districts 4017, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1784, 'regionable_id'=>9766, 'regionable_type'=>'village']); //Arjuna
                DB::table('regionables')->insert(['region_id'=>1784, 'regionable_id'=>10197, 'regionable_type'=>'village']); //Arjuna
                DB::table('regions')->insert(['id'=>1785, 'parent'=>1782, 'code'=>'40173', 'type'=>'village', 'name'=>'Village 40173, Districts 4017, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1785, 'regionable_id'=>9767, 'regionable_type'=>'village']); //Pajajaran
                DB::table('regionables')->insert(['region_id'=>1785, 'regionable_id'=>9768, 'regionable_type'=>'village']); //Pamoyanan
                DB::table('regionables')->insert(['region_id'=>1785, 'regionable_id'=>10198, 'regionable_type'=>'village']); //Pajajaran
                DB::table('regionables')->insert(['region_id'=>1785, 'regionable_id'=>10199, 'regionable_type'=>'village']); //Pamoyanan
                DB::table('regions')->insert(['id'=>1786, 'parent'=>1782, 'code'=>'40174', 'type'=>'village', 'name'=>'Village 40174, Districts 4017, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1786, 'regionable_id'=>9769, 'regionable_type'=>'village']); //Husen Sastranegara
                DB::table('regionables')->insert(['region_id'=>1786, 'regionable_id'=>10200, 'regionable_type'=>'village']); //Husen Sastranegara
                DB::table('regions')->insert(['id'=>1787, 'parent'=>1782, 'code'=>'40175', 'type'=>'village', 'name'=>'Village 40175, Districts 4017, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1787, 'regionable_id'=>9770, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>1787, 'regionable_id'=>10201, 'regionable_type'=>'village']); //Sukaraja
            DB::table('regions')->insert(['id'=>1788, 'parent'=>1753, 'code'=>'4018', 'type'=>'districts', 'name'=>'Districts 4018, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1788, 'regionable_id'=>1010, 'regionable_type'=>'districts']); //Andir
            DB::table('regionables')->insert(['region_id'=>1788, 'regionable_id'=>1071, 'regionable_type'=>'districts']); //Andir
                DB::table('regions')->insert(['id'=>1789, 'parent'=>1788, 'code'=>'40181', 'type'=>'village', 'name'=>'Village 40181, Districts 4018, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1789, 'regionable_id'=>9771, 'regionable_type'=>'village']); //Kebon Jeruk
                DB::table('regionables')->insert(['region_id'=>1789, 'regionable_id'=>10202, 'regionable_type'=>'village']); //Kebon Jeruk
                DB::table('regions')->insert(['id'=>1790, 'parent'=>1788, 'code'=>'40182', 'type'=>'village', 'name'=>'Village 40182, Districts 4018, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1790, 'regionable_id'=>9772, 'regionable_type'=>'village']); //Ciroyom
                DB::table('regionables')->insert(['region_id'=>1790, 'regionable_id'=>10203, 'regionable_type'=>'village']); //Ciroyom
                DB::table('regions')->insert(['id'=>1791, 'parent'=>1788, 'code'=>'40183', 'type'=>'village', 'name'=>'Village 40183, Districts 4018, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1791, 'regionable_id'=>9773, 'regionable_type'=>'village']); //Dungus Cariang
                DB::table('regionables')->insert(['region_id'=>1791, 'regionable_id'=>10204, 'regionable_type'=>'village']); //Dungus Cariang
                DB::table('regions')->insert(['id'=>1792, 'parent'=>1788, 'code'=>'40184', 'type'=>'village', 'name'=>'Village 40184, Districts 4018, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1792, 'regionable_id'=>9774, 'regionable_type'=>'village']); //Campaka
                DB::table('regionables')->insert(['region_id'=>1792, 'regionable_id'=>9775, 'regionable_type'=>'village']); //Garuda
                DB::table('regionables')->insert(['region_id'=>1792, 'regionable_id'=>9776, 'regionable_type'=>'village']); //Maleber (maleer)
                DB::table('regionables')->insert(['region_id'=>1792, 'regionable_id'=>10205, 'regionable_type'=>'village']); //Campaka
                DB::table('regionables')->insert(['region_id'=>1792, 'regionable_id'=>10206, 'regionable_type'=>'village']); //Garuda
                DB::table('regionables')->insert(['region_id'=>1792, 'regionable_id'=>10207, 'regionable_type'=>'village']); //Maleber (maleer)
            DB::table('regions')->insert(['id'=>1793, 'parent'=>1753, 'code'=>'4019', 'type'=>'districts', 'name'=>'Districts 4019, City 401, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1793, 'regionable_id'=>1003, 'regionable_type'=>'districts']); //Cibeunying Kidul
            DB::table('regionables')->insert(['region_id'=>1793, 'regionable_id'=>1004, 'regionable_type'=>'districts']); //Cibeunying Kaler
            DB::table('regionables')->insert(['region_id'=>1793, 'regionable_id'=>1011, 'regionable_type'=>'districts']); //Cimeunyan
            DB::table('regionables')->insert(['region_id'=>1793, 'regionable_id'=>1012, 'regionable_type'=>'districts']); //Mandalajati
            DB::table('regionables')->insert(['region_id'=>1793, 'regionable_id'=>1064, 'regionable_type'=>'districts']); //Cibeunying Kidul
            DB::table('regionables')->insert(['region_id'=>1793, 'regionable_id'=>1065, 'regionable_type'=>'districts']); //Cibeunying Kaler
            DB::table('regionables')->insert(['region_id'=>1793, 'regionable_id'=>1072, 'regionable_type'=>'districts']); //Cimeunyan
            DB::table('regionables')->insert(['region_id'=>1793, 'regionable_id'=>1073, 'regionable_type'=>'districts']); //Mandalajati
                DB::table('regions')->insert(['id'=>1794, 'parent'=>1793, 'code'=>'40195', 'type'=>'village', 'name'=>'Village 40195, Districts 4019, City 401, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>9781, 'regionable_type'=>'village']); //Sindanglaya
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>9786, 'regionable_type'=>'village']); //Jatihandap
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>9787, 'regionable_type'=>'village']); //Karang Pamulang
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>9788, 'regionable_type'=>'village']); //Pasir Impun
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>9789, 'regionable_type'=>'village']); //Sindang Jaya
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>10212, 'regionable_type'=>'village']); //Sindanglaya
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>10217, 'regionable_type'=>'village']); //Jatihandap
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>10218, 'regionable_type'=>'village']); //Karang Pamulang
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>10219, 'regionable_type'=>'village']); //Pasir Impun
                DB::table('regionables')->insert(['region_id'=>1794, 'regionable_id'=>10220, 'regionable_type'=>'village']); //Sindang Jaya
        DB::table('regions')->insert(['id'=>1795, 'parent'=>1678, 'code'=>'402', 'type'=>'city', 'name'=>'City 402, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1795, 'regionable_id'=>68, 'regionable_type'=>'city']); //Bandung city
        DB::table('regionables')->insert(['region_id'=>1795, 'regionable_id'=>69, 'regionable_type'=>'city']); //Bandung regencies
            DB::table('regions')->insert(['id'=>1796, 'parent'=>1795, 'code'=>'4021', 'type'=>'districts', 'name'=>'Districts 4021, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1796, 'regionable_id'=>1013, 'regionable_type'=>'districts']); //Bandung Kulon
            DB::table('regionables')->insert(['region_id'=>1796, 'regionable_id'=>1014, 'regionable_type'=>'districts']); //Margaasih
            DB::table('regionables')->insert(['region_id'=>1796, 'regionable_id'=>1015, 'regionable_type'=>'districts']); //Nagreg
            DB::table('regionables')->insert(['region_id'=>1796, 'regionable_id'=>1074, 'regionable_type'=>'districts']); //Bandung Kulon
            DB::table('regionables')->insert(['region_id'=>1796, 'regionable_id'=>1075, 'regionable_type'=>'districts']); //Margaasih
            DB::table('regionables')->insert(['region_id'=>1796, 'regionable_id'=>1076, 'regionable_type'=>'districts']); //Nagreg
                DB::table('regions')->insert(['id'=>1797, 'parent'=>1796, 'code'=>'40215', 'type'=>'village', 'name'=>'Village 40215, Districts 4021, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9796, 'regionable_type'=>'village']); //Cigondewah Rahayu
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9797, 'regionable_type'=>'village']); //Gempolsari
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9799, 'regionable_type'=>'village']); //Margaasih
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9804, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9805, 'regionable_type'=>'village']); //Ciaro
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9806, 'regionable_type'=>'village']); //Ciherang
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9807, 'regionable_type'=>'village']); //Citaman
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9808, 'regionable_type'=>'village']); //Ganjar Sabar
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9809, 'regionable_type'=>'village']); //Mandalawangi
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9810, 'regionable_type'=>'village']); //Nagreg
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>9811, 'regionable_type'=>'village']); //Nagreg Kendan
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10227, 'regionable_type'=>'village']); //Cigondewah Rahayu
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10228, 'regionable_type'=>'village']); //Gempolsari
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10230, 'regionable_type'=>'village']); //Margaasih
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10235, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10236, 'regionable_type'=>'village']); //Ciaro
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10237, 'regionable_type'=>'village']); //Ciherang
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10238, 'regionable_type'=>'village']); //Citaman
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10239, 'regionable_type'=>'village']); //Ganjar Sabar
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10240, 'regionable_type'=>'village']); //Mandalawangi
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10241, 'regionable_type'=>'village']); //Nagreg
                DB::table('regionables')->insert(['region_id'=>1797, 'regionable_id'=>10242, 'regionable_type'=>'village']); //Nagreg Kendan
            DB::table('regions')->insert(['id'=>1798, 'parent'=>1795, 'code'=>'4022', 'type'=>'districts', 'name'=>'Districts 4022, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1798, 'regionable_id'=>1016, 'regionable_type'=>'districts']); //Babakan Ciparay
            DB::table('regionables')->insert(['region_id'=>1798, 'regionable_id'=>1017, 'regionable_type'=>'districts']); //Margahayu
            DB::table('regionables')->insert(['region_id'=>1798, 'regionable_id'=>1077, 'regionable_type'=>'districts']); //Babakan Ciparay
            DB::table('regionables')->insert(['region_id'=>1798, 'regionable_id'=>1078, 'regionable_type'=>'districts']); //Margahayu
                DB::table('regions')->insert(['id'=>1799, 'parent'=>1798, 'code'=>'40225', 'type'=>'village', 'name'=>'Village 40225, Districts 4022, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1799, 'regionable_id'=>9816, 'regionable_type'=>'village']); //Margasuka
                DB::table('regionables')->insert(['region_id'=>1799, 'regionable_id'=>9818, 'regionable_type'=>'village']); //Margahayu Tengah
                DB::table('regionables')->insert(['region_id'=>1799, 'regionable_id'=>10247, 'regionable_type'=>'village']); //Margasuka
                DB::table('regionables')->insert(['region_id'=>1799, 'regionable_id'=>10249, 'regionable_type'=>'village']); //Margahayu Tengah
                DB::table('regions')->insert(['id'=>1800, 'parent'=>1798, 'code'=>'40226', 'type'=>'village', 'name'=>'Village 40226, Districts 4022, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1800, 'regionable_id'=>9819, 'regionable_type'=>'village']); //Margahayu Selatan
                DB::table('regionables')->insert(['region_id'=>1800, 'regionable_id'=>10250, 'regionable_type'=>'village']); //Margahayu Selatan
                DB::table('regions')->insert(['id'=>1801, 'parent'=>1798, 'code'=>'40227', 'type'=>'village', 'name'=>'Village 40227, Districts 4022, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1801, 'regionable_id'=>9817, 'regionable_type'=>'village']); //Cirangrang
                DB::table('regionables')->insert(['region_id'=>1801, 'regionable_id'=>9820, 'regionable_type'=>'village']); //Sukamenak
                DB::table('regionables')->insert(['region_id'=>1801, 'regionable_id'=>10248, 'regionable_type'=>'village']); //Cirangrang
                DB::table('regionables')->insert(['region_id'=>1801, 'regionable_id'=>10251, 'regionable_type'=>'village']); //Sukamenak
                DB::table('regions')->insert(['id'=>1802, 'parent'=>1798, 'code'=>'40228', 'type'=>'village', 'name'=>'Village 40228, Districts 4022, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1802, 'regionable_id'=>9821, 'regionable_type'=>'village']); //Sayati
                DB::table('regionables')->insert(['region_id'=>1802, 'regionable_id'=>10252, 'regionable_type'=>'village']); //Sayati
                DB::table('regions')->insert(['id'=>1803, 'parent'=>1798, 'code'=>'40229', 'type'=>'village', 'name'=>'Village 40229, Districts 4022, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1803, 'regionable_id'=>9822, 'regionable_type'=>'village']); //Sulaeman
                DB::table('regionables')->insert(['region_id'=>1803, 'regionable_id'=>10253, 'regionable_type'=>'village']); //Sulaeman
            DB::table('regions')->insert(['id'=>1804, 'parent'=>1795, 'code'=>'4023', 'type'=>'districts', 'name'=>'Districts 4023, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1804, 'regionable_id'=>1018, 'regionable_type'=>'districts']); //Bojongloa Kaler
            DB::table('regionables')->insert(['region_id'=>1804, 'regionable_id'=>1019, 'regionable_type'=>'districts']); //Bojongloa Kidul
            DB::table('regionables')->insert(['region_id'=>1804, 'regionable_id'=>1020, 'regionable_type'=>'districts']); //Cangkuang
            DB::table('regionables')->insert(['region_id'=>1804, 'regionable_id'=>1021, 'regionable_type'=>'districts']); //Dayeuhkolot
            DB::table('regionables')->insert(['region_id'=>1804, 'regionable_id'=>1079, 'regionable_type'=>'districts']); //Bojongloa Kaler
            DB::table('regionables')->insert(['region_id'=>1804, 'regionable_id'=>1080, 'regionable_type'=>'districts']); //Bojongloa Kidul
            DB::table('regionables')->insert(['region_id'=>1804, 'regionable_id'=>1081, 'regionable_type'=>'districts']); //Cangkuang
            DB::table('regionables')->insert(['region_id'=>1804, 'regionable_id'=>1082, 'regionable_type'=>'districts']); //Dayeuhkolot
                DB::table('regions')->insert(['id'=>1805, 'parent'=>1804, 'code'=>'40238', 'type'=>'village', 'name'=>'Village 40238, Districts 4023, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9832, 'regionable_type'=>'village']); //Cibaduyut Wetan
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9834, 'regionable_type'=>'village']); //Bandasari
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9835, 'regionable_type'=>'village']); //Cangkuang
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9836, 'regionable_type'=>'village']); //Ciluncat
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9837, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9838, 'regionable_type'=>'village']); //Nagrak
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9839, 'regionable_type'=>'village']); //Pananjung
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9840, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>9841, 'regionable_type'=>'village']); //Cangkuang Wetan
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10263, 'regionable_type'=>'village']); //Cibaduyut Wetan
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10265, 'regionable_type'=>'village']); //Bandasari
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10266, 'regionable_type'=>'village']); //Cangkuang
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10267, 'regionable_type'=>'village']); //Ciluncat
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10268, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10269, 'regionable_type'=>'village']); //Nagrak
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10270, 'regionable_type'=>'village']); //Pananjung
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10271, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>1805, 'regionable_id'=>10272, 'regionable_type'=>'village']); //Cangkuang Wetan
                DB::table('regions')->insert(['id'=>1806, 'parent'=>1804, 'code'=>'40239', 'type'=>'village', 'name'=>'Village 40239, Districts 4023, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1806, 'regionable_id'=>9833, 'regionable_type'=>'village']); //Cibaduyut Kidul
                DB::table('regionables')->insert(['region_id'=>1806, 'regionable_id'=>9842, 'regionable_type'=>'village']); //Cangkuang Kulon
                DB::table('regionables')->insert(['region_id'=>1806, 'regionable_id'=>10264, 'regionable_type'=>'village']); //Cibaduyut Kidul
                DB::table('regionables')->insert(['region_id'=>1806, 'regionable_id'=>10273, 'regionable_type'=>'village']); //Cangkuang Kulon
            DB::table('regions')->insert(['id'=>1807, 'parent'=>1795, 'code'=>'4024', 'type'=>'districts', 'name'=>'Districts 4024, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1807, 'regionable_id'=>1022, 'regionable_type'=>'districts']); //Astana Anyar
            DB::table('regionables')->insert(['region_id'=>1807, 'regionable_id'=>1083, 'regionable_type'=>'districts']); //Astana Anyar
                DB::table('regions')->insert(['id'=>1808, 'parent'=>1807, 'code'=>'40241', 'type'=>'village', 'name'=>'Village 40241, Districts 4024, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1808, 'regionable_id'=>9847, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>1808, 'regionable_id'=>9848, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>1808, 'regionable_id'=>10278, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>1808, 'regionable_id'=>10279, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regions')->insert(['id'=>1809, 'parent'=>1807, 'code'=>'40242', 'type'=>'village', 'name'=>'Village 40242, Districts 4024, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1809, 'regionable_id'=>9849, 'regionable_type'=>'village']); //Nyengseret
                DB::table('regionables')->insert(['region_id'=>1809, 'regionable_id'=>9850, 'regionable_type'=>'village']); //Panjunan
                DB::table('regionables')->insert(['region_id'=>1809, 'regionable_id'=>10280, 'regionable_type'=>'village']); //Nyengseret
                DB::table('regionables')->insert(['region_id'=>1809, 'regionable_id'=>10281, 'regionable_type'=>'village']); //Panjunan
                DB::table('regions')->insert(['id'=>1810, 'parent'=>1807, 'code'=>'40243', 'type'=>'village', 'name'=>'Village 40243, Districts 4024, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1810, 'regionable_id'=>9851, 'regionable_type'=>'village']); //Karasak
                DB::table('regionables')->insert(['region_id'=>1810, 'regionable_id'=>9852, 'regionable_type'=>'village']); //Pelindung Hewan
                DB::table('regionables')->insert(['region_id'=>1810, 'regionable_id'=>10282, 'regionable_type'=>'village']); //Karasak
                DB::table('regionables')->insert(['region_id'=>1810, 'regionable_id'=>10283, 'regionable_type'=>'village']); //Pelindung Hewan
            DB::table('regions')->insert(['id'=>1811, 'parent'=>1795, 'code'=>'4025', 'type'=>'districts', 'name'=>'Districts 4025, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1811, 'regionable_id'=>1021, 'regionable_type'=>'districts']); //Dayeuhkolot
            DB::table('regionables')->insert(['region_id'=>1811, 'regionable_id'=>1023, 'regionable_type'=>'districts']); //Regol
            DB::table('regionables')->insert(['region_id'=>1811, 'regionable_id'=>1024, 'regionable_type'=>'districts']); //Bandung Kidul
            DB::table('regionables')->insert(['region_id'=>1811, 'regionable_id'=>1025, 'regionable_type'=>'districts']); //Baleendah
            DB::table('regionables')->insert(['region_id'=>1811, 'regionable_id'=>1082, 'regionable_type'=>'districts']); //Dayeuhkolot
            DB::table('regionables')->insert(['region_id'=>1811, 'regionable_id'=>1084, 'regionable_type'=>'districts']); //Regol
            DB::table('regionables')->insert(['region_id'=>1811, 'regionable_id'=>1085, 'regionable_type'=>'districts']); //Bandung Kidul
            DB::table('regionables')->insert(['region_id'=>1811, 'regionable_id'=>1086, 'regionable_type'=>'districts']); //Baleendah
                DB::table('regions')->insert(['id'=>1812, 'parent'=>1811, 'code'=>'40258', 'type'=>'village', 'name'=>'Village 40258, Districts 4025, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1812, 'regionable_id'=>9845, 'regionable_type'=>'village']); //Dayeuhkolot
                DB::table('regionables')->insert(['region_id'=>1812, 'regionable_id'=>9864, 'regionable_type'=>'village']); //Malakasari
                DB::table('regionables')->insert(['region_id'=>1812, 'regionable_id'=>10276, 'regionable_type'=>'village']); //Dayeuhkolot
                DB::table('regionables')->insert(['region_id'=>1812, 'regionable_id'=>10295, 'regionable_type'=>'village']); //Malakasari
            DB::table('regions')->insert(['id'=>1813, 'parent'=>1795, 'code'=>'4026', 'type'=>'districts', 'name'=>'Districts 4026, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1813, 'regionable_id'=>1021, 'regionable_type'=>'districts']); //Dayeuhkolot
            DB::table('regionables')->insert(['region_id'=>1813, 'regionable_id'=>1024, 'regionable_type'=>'districts']); //Bandung Kidul
            DB::table('regionables')->insert(['region_id'=>1813, 'regionable_id'=>1026, 'regionable_type'=>'districts']); //Lengkong
            DB::table('regionables')->insert(['region_id'=>1813, 'regionable_id'=>1082, 'regionable_type'=>'districts']); //Dayeuhkolot
            DB::table('regionables')->insert(['region_id'=>1813, 'regionable_id'=>1085, 'regionable_type'=>'districts']); //Bandung Kidul
            DB::table('regionables')->insert(['region_id'=>1813, 'regionable_id'=>1087, 'regionable_type'=>'districts']); //Lengkong
                DB::table('regions')->insert(['id'=>1814, 'parent'=>1813, 'code'=>'40261', 'type'=>'village', 'name'=>'Village 40261, Districts 4026, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1814, 'regionable_id'=>9872, 'regionable_type'=>'village']); //Cikawao
                DB::table('regionables')->insert(['region_id'=>1814, 'regionable_id'=>9873, 'regionable_type'=>'village']); //Paledang
                DB::table('regionables')->insert(['region_id'=>1814, 'regionable_id'=>10303, 'regionable_type'=>'village']); //Cikawao
                DB::table('regionables')->insert(['region_id'=>1814, 'regionable_id'=>10304, 'regionable_type'=>'village']); //Paledang
                DB::table('regions')->insert(['id'=>1815, 'parent'=>1813, 'code'=>'40262', 'type'=>'village', 'name'=>'Village 40262, Districts 4026, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1815, 'regionable_id'=>9874, 'regionable_type'=>'village']); //Burangrang
                DB::table('regionables')->insert(['region_id'=>1815, 'regionable_id'=>9875, 'regionable_type'=>'village']); //Malabar
                DB::table('regionables')->insert(['region_id'=>1815, 'regionable_id'=>10305, 'regionable_type'=>'village']); //Burangrang
                DB::table('regionables')->insert(['region_id'=>1815, 'regionable_id'=>10306, 'regionable_type'=>'village']); //Malabar
                DB::table('regions')->insert(['id'=>1816, 'parent'=>1813, 'code'=>'40263', 'type'=>'village', 'name'=>'Village 40263, Districts 4026, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1816, 'regionable_id'=>9876, 'regionable_type'=>'village']); //Lingkar Selatan
                DB::table('regionables')->insert(['region_id'=>1816, 'regionable_id'=>10307, 'regionable_type'=>'village']); //Lingkar Selatan
                DB::table('regions')->insert(['id'=>1817, 'parent'=>1813, 'code'=>'40264', 'type'=>'village', 'name'=>'Village 40264, Districts 4026, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1817, 'regionable_id'=>9877, 'regionable_type'=>'village']); //Turangga
                DB::table('regionables')->insert(['region_id'=>1817, 'regionable_id'=>10308, 'regionable_type'=>'village']); //Turangga
                DB::table('regions')->insert(['id'=>1818, 'parent'=>1813, 'code'=>'40265', 'type'=>'village', 'name'=>'Village 40265, Districts 4026, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1818, 'regionable_id'=>9878, 'regionable_type'=>'village']); //Cijagra
                DB::table('regionables')->insert(['region_id'=>1818, 'regionable_id'=>10309, 'regionable_type'=>'village']); //Cijagra
            DB::table('regions')->insert(['id'=>1819, 'parent'=>1795, 'code'=>'4027', 'type'=>'districts', 'name'=>'Districts 4027, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1819, 'regionable_id'=>1027, 'regionable_type'=>'districts']); //Batununggal
            DB::table('regionables')->insert(['region_id'=>1819, 'regionable_id'=>1088, 'regionable_type'=>'districts']); //Batununggal
                DB::table('regions')->insert(['id'=>1820, 'parent'=>1819, 'code'=>'40271', 'type'=>'village', 'name'=>'Village 40271, Districts 4027, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1820, 'regionable_id'=>9879, 'regionable_type'=>'village']); //Kacapiring
                DB::table('regionables')->insert(['region_id'=>1820, 'regionable_id'=>10310, 'regionable_type'=>'village']); //Kacapiring
                DB::table('regions')->insert(['id'=>1821, 'parent'=>1819, 'code'=>'40272', 'type'=>'village', 'name'=>'Village 40272, Districts 4027, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1821, 'regionable_id'=>9880, 'regionable_type'=>'village']); //Kebonwaru
                DB::table('regionables')->insert(['region_id'=>1821, 'regionable_id'=>10311, 'regionable_type'=>'village']); //Kebonwaru
                DB::table('regions')->insert(['id'=>1822, 'parent'=>1819, 'code'=>'40273', 'type'=>'village', 'name'=>'Village 40273, Districts 4027, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1822, 'regionable_id'=>9881, 'regionable_type'=>'village']); //Cibangkong
                DB::table('regionables')->insert(['region_id'=>1822, 'regionable_id'=>9882, 'regionable_type'=>'village']); //Samoja
                DB::table('regionables')->insert(['region_id'=>1822, 'regionable_id'=>10312, 'regionable_type'=>'village']); //Cibangkong
                DB::table('regionables')->insert(['region_id'=>1822, 'regionable_id'=>10313, 'regionable_type'=>'village']); //Samoja
                DB::table('regions')->insert(['id'=>1823, 'parent'=>1819, 'code'=>'40274', 'type'=>'village', 'name'=>'Village 40274, Districts 4027, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1823, 'regionable_id'=>9883, 'regionable_type'=>'village']); //Kebon Gedang
                DB::table('regionables')->insert(['region_id'=>1823, 'regionable_id'=>9884, 'regionable_type'=>'village']); //Maleer
                DB::table('regionables')->insert(['region_id'=>1823, 'regionable_id'=>10314, 'regionable_type'=>'village']); //Kebon Gedang
                DB::table('regionables')->insert(['region_id'=>1823, 'regionable_id'=>10315, 'regionable_type'=>'village']); //Maleer
                DB::table('regions')->insert(['id'=>1824, 'parent'=>1819, 'code'=>'40275', 'type'=>'village', 'name'=>'Village 40275, Districts 4027, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1824, 'regionable_id'=>9885, 'regionable_type'=>'village']); //Binong
                DB::table('regionables')->insert(['region_id'=>1824, 'regionable_id'=>9886, 'regionable_type'=>'village']); //Gumuruh
                DB::table('regionables')->insert(['region_id'=>1824, 'regionable_id'=>10316, 'regionable_type'=>'village']); //Binong
                DB::table('regionables')->insert(['region_id'=>1824, 'regionable_id'=>10317, 'regionable_type'=>'village']); //Gumuruh
            DB::table('regions')->insert(['id'=>1825, 'parent'=>1795, 'code'=>'4028', 'type'=>'districts', 'name'=>'Districts 4028, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1825, 'regionable_id'=>1024, 'regionable_type'=>'districts']); //Bandung Kidul
            DB::table('regionables')->insert(['region_id'=>1825, 'regionable_id'=>1028, 'regionable_type'=>'districts']); //Kiaracondong
            DB::table('regionables')->insert(['region_id'=>1825, 'regionable_id'=>1029, 'regionable_type'=>'districts']); //Buahbatu (margacinta)
            DB::table('regionables')->insert(['region_id'=>1825, 'regionable_id'=>1030, 'regionable_type'=>'districts']); //Bojongsoang
            DB::table('regionables')->insert(['region_id'=>1825, 'regionable_id'=>1085, 'regionable_type'=>'districts']); //Bandung Kidul
            DB::table('regionables')->insert(['region_id'=>1825, 'regionable_id'=>1089, 'regionable_type'=>'districts']); //Kiaracondong
            DB::table('regionables')->insert(['region_id'=>1825, 'regionable_id'=>1090, 'regionable_type'=>'districts']); //Buahbatu (margacinta)
            DB::table('regionables')->insert(['region_id'=>1825, 'regionable_id'=>1091, 'regionable_type'=>'districts']); //Bojongsoang
                DB::table('regions')->insert(['id'=>1826, 'parent'=>1825, 'code'=>'40287', 'type'=>'village', 'name'=>'Village 40287, Districts 4028, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>9863, 'regionable_type'=>'village']); //Kujangsari
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>9896, 'regionable_type'=>'village']); //Cijaura (margasenang)
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>9897, 'regionable_type'=>'village']); //Buahbatu
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>9898, 'regionable_type'=>'village']); //Cipagalo
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>9899, 'regionable_type'=>'village']); //Lengkong
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>9900, 'regionable_type'=>'village']); //Tegalluar
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>10294, 'regionable_type'=>'village']); //Kujangsari
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>10327, 'regionable_type'=>'village']); //Cijaura (margasenang)
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>10328, 'regionable_type'=>'village']); //Buahbatu
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>10329, 'regionable_type'=>'village']); //Cipagalo
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>10330, 'regionable_type'=>'village']); //Lengkong
                DB::table('regionables')->insert(['region_id'=>1826, 'regionable_id'=>10331, 'regionable_type'=>'village']); //Tegalluar
                DB::table('regions')->insert(['id'=>1827, 'parent'=>1825, 'code'=>'40288', 'type'=>'village', 'name'=>'Village 40288, Districts 4028, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1827, 'regionable_id'=>9901, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>1827, 'regionable_id'=>9902, 'regionable_type'=>'village']); //Bojongsoang
                DB::table('regionables')->insert(['region_id'=>1827, 'regionable_id'=>10332, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>1827, 'regionable_id'=>10333, 'regionable_type'=>'village']); //Bojongsoang
            DB::table('regions')->insert(['id'=>1828, 'parent'=>1795, 'code'=>'4029', 'type'=>'districts', 'name'=>'Districts 4029, City 402, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1031, 'regionable_type'=>'districts']); //Antapani (cicadas)
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1032, 'regionable_type'=>'districts']); //Rancasari
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1033, 'regionable_type'=>'districts']); //Arcamanik
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1034, 'regionable_type'=>'districts']); //Cinambo
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1035, 'regionable_type'=>'districts']); //Gedebage
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1092, 'regionable_type'=>'districts']); //Antapani (cicadas)
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1093, 'regionable_type'=>'districts']); //Rancasari
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1094, 'regionable_type'=>'districts']); //Arcamanik
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1095, 'regionable_type'=>'districts']); //Cinambo
            DB::table('regionables')->insert(['region_id'=>1828, 'regionable_id'=>1096, 'regionable_type'=>'districts']); //Gedebage
                DB::table('regions')->insert(['id'=>1829, 'parent'=>1828, 'code'=>'40294', 'type'=>'village', 'name'=>'Village 40294, Districts 4029, City 402, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9914, 'regionable_type'=>'village']); //Cisarenten Bina Harapan
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9915, 'regionable_type'=>'village']); //Babakan Penghulu
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9916, 'regionable_type'=>'village']); //Cisaranten Wetan
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9917, 'regionable_type'=>'village']); //Pakemitan
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9918, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9919, 'regionable_type'=>'village']); //Cimenerang (cimincrang)
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9920, 'regionable_type'=>'village']); //Cisaranten Kidul
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9921, 'regionable_type'=>'village']); //Rancabalong
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>9922, 'regionable_type'=>'village']); //Rancanumpang
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10345, 'regionable_type'=>'village']); //Cisarenten Bina Harapan
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10346, 'regionable_type'=>'village']); //Babakan Penghulu
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10347, 'regionable_type'=>'village']); //Cisaranten Wetan
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10348, 'regionable_type'=>'village']); //Pakemitan
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10349, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10350, 'regionable_type'=>'village']); //Cimenerang (cimincrang)
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10351, 'regionable_type'=>'village']); //Cisaranten Kidul
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10352, 'regionable_type'=>'village']); //Rancabalong
                DB::table('regionables')->insert(['region_id'=>1829, 'regionable_id'=>10353, 'regionable_type'=>'village']); //Rancanumpang
        DB::table('regions')->insert(['id'=>1830, 'parent'=>1678, 'code'=>'403', 'type'=>'city', 'name'=>'City 403, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1830, 'regionable_id'=>68, 'regionable_type'=>'city']); //Bandung city
        DB::table('regionables')->insert(['region_id'=>1830, 'regionable_id'=>69, 'regionable_type'=>'city']); //Bandung regencies
        DB::table('regionables')->insert(['region_id'=>1830, 'regionable_id'=>70, 'regionable_type'=>'city']); //Bandung Barat regencies
            DB::table('regions')->insert(['id'=>1831, 'parent'=>1830, 'code'=>'4039', 'type'=>'districts', 'name'=>'Districts 4039, City 403, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1831, 'regionable_id'=>1048, 'regionable_type'=>'districts']); //Rancaekek
            DB::table('regionables')->insert(['region_id'=>1831, 'regionable_id'=>1049, 'regionable_type'=>'districts']); //Cicalengka
            DB::table('regionables')->insert(['region_id'=>1831, 'regionable_id'=>1050, 'regionable_type'=>'districts']); //Cikancung
            DB::table('regionables')->insert(['region_id'=>1831, 'regionable_id'=>1109, 'regionable_type'=>'districts']); //Rancaekek
            DB::table('regionables')->insert(['region_id'=>1831, 'regionable_id'=>1110, 'regionable_type'=>'districts']); //Cicalengka
            DB::table('regionables')->insert(['region_id'=>1831, 'regionable_id'=>1111, 'regionable_type'=>'districts']); //Cikancung
            DB::table('regionables')->insert(['region_id'=>1831, 'regionable_id'=>1123, 'regionable_type'=>'districts']); //Lembang
                DB::table('regions')->insert(['id'=>1832, 'parent'=>1831, 'code'=>'40391', 'type'=>'village', 'name'=>'Village 40391, Districts 4039, City 403, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10592, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10593, 'regionable_type'=>'village']); //Cibogo
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10594, 'regionable_type'=>'village']); //Cikahuripan
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10595, 'regionable_type'=>'village']); //Cikidang
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10596, 'regionable_type'=>'village']); //Cikole
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10597, 'regionable_type'=>'village']); //Gudangkahuripan
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10598, 'regionable_type'=>'village']); //Jayagiri
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10599, 'regionable_type'=>'village']); //Kayuambon
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10600, 'regionable_type'=>'village']); //Langensari
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10601, 'regionable_type'=>'village']); //Lembang
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10602, 'regionable_type'=>'village']); //Mekarwangi
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10603, 'regionable_type'=>'village']); //Pagerwangi
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10604, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10605, 'regionable_type'=>'village']); //Suntenjaya
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10606, 'regionable_type'=>'village']); //Wangunharja
                DB::table('regionables')->insert(['region_id'=>1832, 'regionable_id'=>10607, 'regionable_type'=>'village']); //Wangunsari
        DB::table('regions')->insert(['id'=>1833, 'parent'=>1678, 'code'=>'405', 'type'=>'city', 'name'=>'City 405, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1833, 'regionable_id'=>70, 'regionable_type'=>'city']); //Bandung Barat regencies
        DB::table('regionables')->insert(['region_id'=>1833, 'regionable_id'=>71, 'regionable_type'=>'city']); //Cimahi city
            DB::table('regions')->insert(['id'=>1834, 'parent'=>1833, 'code'=>'4051', 'type'=>'districts', 'name'=>'Districts 4051, City 405, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1834, 'regionable_id'=>1139, 'regionable_type'=>'districts']); //Cimahi Utara
                DB::table('regions')->insert(['id'=>1835, 'parent'=>1834, 'code'=>'40511', 'type'=>'village', 'name'=>'Village 40511, Districts 4051, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1835, 'regionable_id'=>10757, 'regionable_type'=>'village']); //Cipageran
                DB::table('regions')->insert(['id'=>1836, 'parent'=>1834, 'code'=>'40512', 'type'=>'village', 'name'=>'Village 40512, Districts 4051, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1836, 'regionable_id'=>10758, 'regionable_type'=>'village']); //Citeureup
                DB::table('regions')->insert(['id'=>1837, 'parent'=>1834, 'code'=>'40513', 'type'=>'village', 'name'=>'Village 40513, Districts 4051, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1837, 'regionable_id'=>10759, 'regionable_type'=>'village']); //Cibabat
                DB::table('regions')->insert(['id'=>1838, 'parent'=>1834, 'code'=>'40514', 'type'=>'village', 'name'=>'Village 40514, Districts 4051, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1838, 'regionable_id'=>10760, 'regionable_type'=>'village']); //Pasirkaliki
            DB::table('regions')->insert(['id'=>1839, 'parent'=>1833, 'code'=>'4052', 'type'=>'districts', 'name'=>'Districts 4052, City 405, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1839, 'regionable_id'=>1140, 'regionable_type'=>'districts']); //Cimahi Tengah
                DB::table('regions')->insert(['id'=>1840, 'parent'=>1839, 'code'=>'40521', 'type'=>'village', 'name'=>'Village 40521, Districts 4052, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1840, 'regionable_id'=>10761, 'regionable_type'=>'village']); //Baros
                DB::table('regions')->insert(['id'=>1841, 'parent'=>1839, 'code'=>'40522', 'type'=>'village', 'name'=>'Village 40522, Districts 4052, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1841, 'regionable_id'=>10762, 'regionable_type'=>'village']); //Cigugur Tengah
                DB::table('regions')->insert(['id'=>1842, 'parent'=>1839, 'code'=>'40523', 'type'=>'village', 'name'=>'Village 40523, Districts 4052, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1842, 'regionable_id'=>10763, 'regionable_type'=>'village']); //Karangmekar
                DB::table('regions')->insert(['id'=>1843, 'parent'=>1839, 'code'=>'40524', 'type'=>'village', 'name'=>'Village 40524, Districts 4052, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1843, 'regionable_id'=>10764, 'regionable_type'=>'village']); //Setiamanah
                DB::table('regions')->insert(['id'=>1844, 'parent'=>1839, 'code'=>'40525', 'type'=>'village', 'name'=>'Village 40525, Districts 4052, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1844, 'regionable_id'=>10765, 'regionable_type'=>'village']); //Cimahi
                DB::table('regions')->insert(['id'=>1845, 'parent'=>1839, 'code'=>'40526', 'type'=>'village', 'name'=>'Village 40526, Districts 4052, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1845, 'regionable_id'=>10766, 'regionable_type'=>'village']); //Padasuka
            DB::table('regions')->insert(['id'=>1846, 'parent'=>1833, 'code'=>'4053', 'type'=>'districts', 'name'=>'Districts 4053, City 405, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1846, 'regionable_id'=>1141, 'regionable_type'=>'districts']); //Cimahi Selatan
                DB::table('regions')->insert(['id'=>1847, 'parent'=>1846, 'code'=>'40531', 'type'=>'village', 'name'=>'Village 40531, Districts 4053, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1847, 'regionable_id'=>10767, 'regionable_type'=>'village']); //Cibeber
                DB::table('regions')->insert(['id'=>1848, 'parent'=>1846, 'code'=>'40532', 'type'=>'village', 'name'=>'Village 40532, Districts 4053, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1848, 'regionable_id'=>10768, 'regionable_type'=>'village']); //Leuwigajah
                DB::table('regions')->insert(['id'=>1849, 'parent'=>1846, 'code'=>'40533', 'type'=>'village', 'name'=>'Village 40533, Districts 4053, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1849, 'regionable_id'=>10769, 'regionable_type'=>'village']); //Utama
                DB::table('regions')->insert(['id'=>1850, 'parent'=>1846, 'code'=>'40534', 'type'=>'village', 'name'=>'Village 40534, Districts 4053, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1850, 'regionable_id'=>10770, 'regionable_type'=>'village']); //Melong
                DB::table('regions')->insert(['id'=>1851, 'parent'=>1846, 'code'=>'40535', 'type'=>'village', 'name'=>'Village 40535, Districts 4053, City 405, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1851, 'regionable_id'=>10771, 'regionable_type'=>'village']); //Cibeureum
        DB::table('regions')->insert(['id'=>1852, 'parent'=>1678, 'code'=>'406', 'type'=>'city', 'name'=>'City 406, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1852, 'regionable_id'=>68, 'regionable_type'=>'city']); //Bandung city
        DB::table('regionables')->insert(['region_id'=>1852, 'regionable_id'=>69, 'regionable_type'=>'city']); //Bandung regencies
            DB::table('regions')->insert(['id'=>1853, 'parent'=>1852, 'code'=>'4061', 'type'=>'districts', 'name'=>'Districts 4061, City 406, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1853, 'regionable_id'=>1051, 'regionable_type'=>'districts']); //Ujung Berung
            DB::table('regionables')->insert(['region_id'=>1853, 'regionable_id'=>1052, 'regionable_type'=>'districts']); //Cibiru
            DB::table('regionables')->insert(['region_id'=>1853, 'regionable_id'=>1053, 'regionable_type'=>'districts']); //Panyileukan
            DB::table('regionables')->insert(['region_id'=>1853, 'regionable_id'=>1054, 'regionable_type'=>'districts']); //Cilengkrang
            DB::table('regionables')->insert(['region_id'=>1853, 'regionable_id'=>1112, 'regionable_type'=>'districts']); //Ujung Berung
            DB::table('regionables')->insert(['region_id'=>1853, 'regionable_id'=>1113, 'regionable_type'=>'districts']); //Cibiru
            DB::table('regionables')->insert(['region_id'=>1853, 'regionable_id'=>1114, 'regionable_type'=>'districts']); //Panyileukan
            DB::table('regionables')->insert(['region_id'=>1853, 'regionable_id'=>1115, 'regionable_type'=>'districts']); //Cilengkrang
                DB::table('regions')->insert(['id'=>1854, 'parent'=>1853, 'code'=>'40615', 'type'=>'village', 'name'=>'Village 40615, Districts 4061, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1854, 'regionable_id'=>10093, 'regionable_type'=>'village']); //Palasari
                DB::table('regionables')->insert(['region_id'=>1854, 'regionable_id'=>10094, 'regionable_type'=>'village']); //Pasirbiru
                DB::table('regionables')->insert(['region_id'=>1854, 'regionable_id'=>10099, 'regionable_type'=>'village']); //Cilengkrang
                DB::table('regionables')->insert(['region_id'=>1854, 'regionable_id'=>10524, 'regionable_type'=>'village']); //Palasari
                DB::table('regionables')->insert(['region_id'=>1854, 'regionable_id'=>10525, 'regionable_type'=>'village']); //Pasirbiru
                DB::table('regionables')->insert(['region_id'=>1854, 'regionable_id'=>10530, 'regionable_type'=>'village']); //Cilengkrang
                DB::table('regions')->insert(['id'=>1855, 'parent'=>1853, 'code'=>'40616', 'type'=>'village', 'name'=>'Village 40616, Districts 4061, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1855, 'regionable_id'=>10087, 'regionable_type'=>'village']); //Pasirjati
                DB::table('regionables')->insert(['region_id'=>1855, 'regionable_id'=>10100, 'regionable_type'=>'village']); //Jatiendah
                DB::table('regionables')->insert(['region_id'=>1855, 'regionable_id'=>10518, 'regionable_type'=>'village']); //Pasirjati
                DB::table('regionables')->insert(['region_id'=>1855, 'regionable_id'=>10531, 'regionable_type'=>'village']); //Jatiendah
                DB::table('regions')->insert(['id'=>1856, 'parent'=>1853, 'code'=>'40617', 'type'=>'village', 'name'=>'Village 40617, Districts 4061, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1856, 'regionable_id'=>10088, 'regionable_type'=>'village']); //Pasanggrahan
                DB::table('regionables')->insert(['region_id'=>1856, 'regionable_id'=>10101, 'regionable_type'=>'village']); //Ciporeat
                DB::table('regionables')->insert(['region_id'=>1856, 'regionable_id'=>10519, 'regionable_type'=>'village']); //Pasanggrahan
                DB::table('regionables')->insert(['region_id'=>1856, 'regionable_id'=>10532, 'regionable_type'=>'village']); //Ciporeat
                DB::table('regions')->insert(['id'=>1857, 'parent'=>1853, 'code'=>'40618', 'type'=>'village', 'name'=>'Village 40618, Districts 4061, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1857, 'regionable_id'=>10089, 'regionable_type'=>'village']); //Pasirwangi
                DB::table('regionables')->insert(['region_id'=>1857, 'regionable_id'=>10102, 'regionable_type'=>'village']); //Cipanjalu
                DB::table('regionables')->insert(['region_id'=>1857, 'regionable_id'=>10103, 'regionable_type'=>'village']); //Melatiwangi
                DB::table('regionables')->insert(['region_id'=>1857, 'regionable_id'=>10520, 'regionable_type'=>'village']); //Pasirwangi
                DB::table('regionables')->insert(['region_id'=>1857, 'regionable_id'=>10533, 'regionable_type'=>'village']); //Cipanjalu
                DB::table('regionables')->insert(['region_id'=>1857, 'regionable_id'=>10534, 'regionable_type'=>'village']); //Melatiwangi
                DB::table('regions')->insert(['id'=>1858, 'parent'=>1853, 'code'=>'40619', 'type'=>'village', 'name'=>'Village 40619, Districts 4061, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1858, 'regionable_id'=>10090, 'regionable_type'=>'village']); //Pasir Endah
                DB::table('regionables')->insert(['region_id'=>1858, 'regionable_id'=>10104, 'regionable_type'=>'village']); //Girimekar
                DB::table('regionables')->insert(['region_id'=>1858, 'regionable_id'=>10521, 'regionable_type'=>'village']); //Pasir Endah
                DB::table('regionables')->insert(['region_id'=>1858, 'regionable_id'=>10535, 'regionable_type'=>'village']); //Girimekar
            DB::table('regions')->insert(['id'=>1859, 'parent'=>1852, 'code'=>'4062', 'type'=>'districts', 'name'=>'Districts 4062, City 406, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1859, 'regionable_id'=>1055, 'regionable_type'=>'districts']); //Cileunyi
            DB::table('regionables')->insert(['region_id'=>1859, 'regionable_id'=>1116, 'regionable_type'=>'districts']); //Cileunyi
                DB::table('regions')->insert(['id'=>1860, 'parent'=>1859, 'code'=>'40621', 'type'=>'village', 'name'=>'Village 40621, Districts 4062, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1860, 'regionable_id'=>10105, 'regionable_type'=>'village']); //Cileunyi Kulon
                DB::table('regionables')->insert(['region_id'=>1860, 'regionable_id'=>10536, 'regionable_type'=>'village']); //Cileunyi Kulon
                DB::table('regions')->insert(['id'=>1861, 'parent'=>1859, 'code'=>'40622', 'type'=>'village', 'name'=>'Village 40622, Districts 4062, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1861, 'regionable_id'=>10106, 'regionable_type'=>'village']); //Cileunyi Wetan
                DB::table('regionables')->insert(['region_id'=>1861, 'regionable_id'=>10537, 'regionable_type'=>'village']); //Cileunyi Wetan
                DB::table('regions')->insert(['id'=>1862, 'parent'=>1859, 'code'=>'40623', 'type'=>'village', 'name'=>'Village 40623, Districts 4062, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1862, 'regionable_id'=>10107, 'regionable_type'=>'village']); //Cimekar
                DB::table('regionables')->insert(['region_id'=>1862, 'regionable_id'=>10538, 'regionable_type'=>'village']); //Cimekar
                DB::table('regions')->insert(['id'=>1863, 'parent'=>1859, 'code'=>'40624', 'type'=>'village', 'name'=>'Village 40624, Districts 4062, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1863, 'regionable_id'=>10108, 'regionable_type'=>'village']); //Cinunuk
                DB::table('regionables')->insert(['region_id'=>1863, 'regionable_id'=>10539, 'regionable_type'=>'village']); //Cinunuk
                DB::table('regions')->insert(['id'=>1864, 'parent'=>1859, 'code'=>'40625', 'type'=>'village', 'name'=>'Village 40625, Districts 4062, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1864, 'regionable_id'=>10109, 'regionable_type'=>'village']); //Cibiru Wetan
                DB::table('regionables')->insert(['region_id'=>1864, 'regionable_id'=>10540, 'regionable_type'=>'village']); //Cibiru Wetan
                DB::table('regions')->insert(['id'=>1865, 'parent'=>1859, 'code'=>'40626', 'type'=>'village', 'name'=>'Village 40626, Districts 4062, City 406, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1865, 'regionable_id'=>10110, 'regionable_type'=>'village']); //Cibiru Hilir
                DB::table('regionables')->insert(['region_id'=>1865, 'regionable_id'=>10541, 'regionable_type'=>'village']); //Cibiru Hilir
        DB::table('regions')->insert(['id'=>1866, 'parent'=>1678, 'code'=>'409', 'type'=>'city', 'name'=>'City 409, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1866, 'regionable_id'=>68, 'regionable_type'=>'city']); //Bandung city
        DB::table('regionables')->insert(['region_id'=>1866, 'regionable_id'=>69, 'regionable_type'=>'city']); //Bandung regencies
            DB::table('regions')->insert(['id'=>1867, 'parent'=>1866, 'code'=>'4091', 'type'=>'districts', 'name'=>'Districts 4091, City 409, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1867, 'regionable_id'=>1056, 'regionable_type'=>'districts']); //Kutawaringin
            DB::table('regionables')->insert(['region_id'=>1867, 'regionable_id'=>1057, 'regionable_type'=>'districts']); //Soreang
            DB::table('regionables')->insert(['region_id'=>1867, 'regionable_id'=>1117, 'regionable_type'=>'districts']); //Kutawaringin
            DB::table('regionables')->insert(['region_id'=>1867, 'regionable_id'=>1118, 'regionable_type'=>'districts']); //Soreang
                DB::table('regions')->insert(['id'=>1868, 'parent'=>1867, 'code'=>'40911', 'type'=>'village', 'name'=>'Village 40911, Districts 4091, City 409, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10111, 'regionable_type'=>'village']); //Buninagara
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10112, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10113, 'regionable_type'=>'village']); //Cilame
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10114, 'regionable_type'=>'village']); //Gajahmekar
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10115, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10116, 'regionable_type'=>'village']); //Jelegong
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10117, 'regionable_type'=>'village']); //Kopo
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10118, 'regionable_type'=>'village']); //Kutawaringin
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10119, 'regionable_type'=>'village']); //Padasuka
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10120, 'regionable_type'=>'village']); //Pameuntasan
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10121, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10122, 'regionable_type'=>'village']); //Soreang
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10123, 'regionable_type'=>'village']); //Sukajadi
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10124, 'regionable_type'=>'village']); //Sukanagara
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10542, 'regionable_type'=>'village']); //Buninagara
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10543, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10544, 'regionable_type'=>'village']); //Cilame
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10545, 'regionable_type'=>'village']); //Gajahmekar
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10546, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10547, 'regionable_type'=>'village']); //Jelegong
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10548, 'regionable_type'=>'village']); //Kopo
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10549, 'regionable_type'=>'village']); //Kutawaringin
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10550, 'regionable_type'=>'village']); //Padasuka
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10551, 'regionable_type'=>'village']); //Pameuntasan
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10552, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10553, 'regionable_type'=>'village']); //Soreang
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10554, 'regionable_type'=>'village']); //Sukajadi
                DB::table('regionables')->insert(['region_id'=>1868, 'regionable_id'=>10555, 'regionable_type'=>'village']); //Sukanagara
                DB::table('regions')->insert(['id'=>1869, 'parent'=>1867, 'code'=>'40912', 'type'=>'village', 'name'=>'Village 40912, Districts 4091, City 409, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1869, 'regionable_id'=>10125, 'regionable_type'=>'village']); //Pamekaran
                DB::table('regionables')->insert(['region_id'=>1869, 'regionable_id'=>10556, 'regionable_type'=>'village']); //Pamekaran
                DB::table('regions')->insert(['id'=>1870, 'parent'=>1867, 'code'=>'40913', 'type'=>'village', 'name'=>'Village 40913, Districts 4091, City 409, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1870, 'regionable_id'=>10126, 'regionable_type'=>'village']); //Sadu
                DB::table('regionables')->insert(['region_id'=>1870, 'regionable_id'=>10557, 'regionable_type'=>'village']); //Sadu
                DB::table('regions')->insert(['id'=>1871, 'parent'=>1867, 'code'=>'40914', 'type'=>'village', 'name'=>'Village 40914, Districts 4091, City 409, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1871, 'regionable_id'=>10127, 'regionable_type'=>'village']); //Cingcin
                DB::table('regionables')->insert(['region_id'=>1871, 'regionable_id'=>10128, 'regionable_type'=>'village']); //Karamatmulya
                DB::table('regionables')->insert(['region_id'=>1871, 'regionable_id'=>10129, 'regionable_type'=>'village']); //Parungserab
                DB::table('regionables')->insert(['region_id'=>1871, 'regionable_id'=>10130, 'regionable_type'=>'village']); //Sekarwangi
                DB::table('regionables')->insert(['region_id'=>1871, 'regionable_id'=>10558, 'regionable_type'=>'village']); //Cingcin
                DB::table('regionables')->insert(['region_id'=>1871, 'regionable_id'=>10559, 'regionable_type'=>'village']); //Karamatmulya
                DB::table('regionables')->insert(['region_id'=>1871, 'regionable_id'=>10560, 'regionable_type'=>'village']); //Parungserab
                DB::table('regionables')->insert(['region_id'=>1871, 'regionable_id'=>10561, 'regionable_type'=>'village']); //Sekarwangi
                DB::table('regions')->insert(['id'=>1872, 'parent'=>1867, 'code'=>'40915', 'type'=>'village', 'name'=>'Village 40915, Districts 4091, City 409, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1872, 'regionable_id'=>10131, 'regionable_type'=>'village']); //Panyirapan
                DB::table('regionables')->insert(['region_id'=>1872, 'regionable_id'=>10562, 'regionable_type'=>'village']); //Panyirapan
            DB::table('regions')->insert(['id'=>1873, 'parent'=>1866, 'code'=>'4092', 'type'=>'districts', 'name'=>'Districts 4092, City 409, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1873, 'regionable_id'=>1058, 'regionable_type'=>'districts']); //Katapang
            DB::table('regionables')->insert(['region_id'=>1873, 'regionable_id'=>1119, 'regionable_type'=>'districts']); //Katapang
                DB::table('regions')->insert(['id'=>1874, 'parent'=>1873, 'code'=>'40921', 'type'=>'village', 'name'=>'Village 40921, Districts 4092, City 409, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10132, 'regionable_type'=>'village']); //Banyusari
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10133, 'regionable_type'=>'village']); //Cilampeni
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10134, 'regionable_type'=>'village']); //Gandasari
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10135, 'regionable_type'=>'village']); //Katapang
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10136, 'regionable_type'=>'village']); //Pangauban
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10137, 'regionable_type'=>'village']); //Sangkanhurip
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10138, 'regionable_type'=>'village']); //Sukamukti
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10563, 'regionable_type'=>'village']); //Banyusari
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10564, 'regionable_type'=>'village']); //Cilampeni
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10565, 'regionable_type'=>'village']); //Gandasari
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10566, 'regionable_type'=>'village']); //Katapang
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10567, 'regionable_type'=>'village']); //Pangauban
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10568, 'regionable_type'=>'village']); //Sangkanhurip
                DB::table('regionables')->insert(['region_id'=>1874, 'regionable_id'=>10569, 'regionable_type'=>'village']); //Sukamukti
            DB::table('regions')->insert(['id'=>1875, 'parent'=>1866, 'code'=>'4097', 'type'=>'districts', 'name'=>'Districts 4097, City 409, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1875, 'regionable_id'=>1059, 'regionable_type'=>'districts']); //Pasirjambu
            DB::table('regionables')->insert(['region_id'=>1875, 'regionable_id'=>1060, 'regionable_type'=>'districts']); //Ranca Bali
            DB::table('regionables')->insert(['region_id'=>1875, 'regionable_id'=>1061, 'regionable_type'=>'districts']); //Ciwidey
            DB::table('regionables')->insert(['region_id'=>1875, 'regionable_id'=>1120, 'regionable_type'=>'districts']); //Pasirjambu
            DB::table('regionables')->insert(['region_id'=>1875, 'regionable_id'=>1121, 'regionable_type'=>'districts']); //Ranca Bali
            DB::table('regionables')->insert(['region_id'=>1875, 'regionable_id'=>1122, 'regionable_type'=>'districts']); //Ciwidey
                DB::table('regions')->insert(['id'=>1876, 'parent'=>1875, 'code'=>'40973', 'type'=>'village', 'name'=>'Village 40973, Districts 4097, City 409, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10149, 'regionable_type'=>'village']); //Alamendah
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10150, 'regionable_type'=>'village']); //Cipelah
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10151, 'regionable_type'=>'village']); //Indragiri
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10152, 'regionable_type'=>'village']); //Patengan
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10153, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10154, 'regionable_type'=>'village']); //Ciwidey
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10155, 'regionable_type'=>'village']); //Lebakmuncang
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10156, 'regionable_type'=>'village']); //Nengkelan
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10157, 'regionable_type'=>'village']); //Panundaan
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10158, 'regionable_type'=>'village']); //Panyocokan
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10159, 'regionable_type'=>'village']); //Rawabogo
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10160, 'regionable_type'=>'village']); //Sukawening
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10580, 'regionable_type'=>'village']); //Alamendah
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10581, 'regionable_type'=>'village']); //Cipelah
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10582, 'regionable_type'=>'village']); //Indragiri
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10583, 'regionable_type'=>'village']); //Patengan
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10584, 'regionable_type'=>'village']); //Sukaresmi
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10585, 'regionable_type'=>'village']); //Ciwidey
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10586, 'regionable_type'=>'village']); //Lebakmuncang
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10587, 'regionable_type'=>'village']); //Nengkelan
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10588, 'regionable_type'=>'village']); //Panundaan
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10589, 'regionable_type'=>'village']); //Panyocokan
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10590, 'regionable_type'=>'village']); //Rawabogo
                DB::table('regionables')->insert(['region_id'=>1876, 'regionable_id'=>10591, 'regionable_type'=>'village']); //Sukawening
        DB::table('regions')->insert(['id'=>1877, 'parent'=>1678, 'code'=>'411', 'type'=>'city', 'name'=>'City 411, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1877, 'regionable_id'=>72, 'regionable_type'=>'city']); //Purwakarta regencies
            DB::table('regions')->insert(['id'=>1878, 'parent'=>1877, 'code'=>'4111', 'type'=>'districts', 'name'=>'Districts 4111, City 411, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1878, 'regionable_id'=>1142, 'regionable_type'=>'districts']); //Purwakarta
            DB::table('regionables')->insert(['region_id'=>1878, 'regionable_id'=>1143, 'regionable_type'=>'districts']); //Tegal Waru
            DB::table('regionables')->insert(['region_id'=>1878, 'regionable_id'=>1144, 'regionable_type'=>'districts']); //Pondoksalam
            DB::table('regionables')->insert(['region_id'=>1878, 'regionable_id'=>1145, 'regionable_type'=>'districts']); //Sukasari
                DB::table('regions')->insert(['id'=>1879, 'parent'=>1878, 'code'=>'41116', 'type'=>'village', 'name'=>'Village 41116, Districts 4111, City 411, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1879, 'regionable_id'=>10778, 'regionable_type'=>'village']); //Tegalmunjul
                DB::table('regionables')->insert(['region_id'=>1879, 'regionable_id'=>10806, 'regionable_type'=>'village']); //Ciririp
                DB::table('regionables')->insert(['region_id'=>1879, 'regionable_id'=>10807, 'regionable_type'=>'village']); //Kertamanah
                DB::table('regionables')->insert(['region_id'=>1879, 'regionable_id'=>10808, 'regionable_type'=>'village']); //Kutamanah
                DB::table('regionables')->insert(['region_id'=>1879, 'regionable_id'=>10809, 'regionable_type'=>'village']); //Parungbanteng
                DB::table('regionables')->insert(['region_id'=>1879, 'regionable_id'=>10810, 'regionable_type'=>'village']); //Sukasari
            DB::table('regions')->insert(['id'=>1880, 'parent'=>1877, 'code'=>'4115', 'type'=>'districts', 'name'=>'Districts 4115, City 411, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1880, 'regionable_id'=>1146, 'regionable_type'=>'districts']); //Babakancikao
            DB::table('regionables')->insert(['region_id'=>1880, 'regionable_id'=>1147, 'regionable_type'=>'districts']); //Jatiluhur
                DB::table('regions')->insert(['id'=>1881, 'parent'=>1880, 'code'=>'41152', 'type'=>'village', 'name'=>'Village 41152, Districts 4115, City 411, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10820, 'regionable_type'=>'village']); //Cibinong
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10821, 'regionable_type'=>'village']); //Cikaobandung
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10822, 'regionable_type'=>'village']); //Cilegong
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10823, 'regionable_type'=>'village']); //Cisalada
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10824, 'regionable_type'=>'village']); //Jatiluhur
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10825, 'regionable_type'=>'village']); //Jatimekar
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10826, 'regionable_type'=>'village']); //Kembangkuning
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10827, 'regionable_type'=>'village']); //Mekargalih
                DB::table('regionables')->insert(['region_id'=>1881, 'regionable_id'=>10828, 'regionable_type'=>'village']); //Parakanlima
            DB::table('regions')->insert(['id'=>1882, 'parent'=>1877, 'code'=>'4116', 'type'=>'districts', 'name'=>'Districts 4116, City 411, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1882, 'regionable_id'=>1143, 'regionable_type'=>'districts']); //Tegal Waru
            DB::table('regionables')->insert(['region_id'=>1882, 'regionable_id'=>1147, 'regionable_type'=>'districts']); //Jatiluhur
            DB::table('regionables')->insert(['region_id'=>1882, 'regionable_id'=>1148, 'regionable_type'=>'districts']); //Plered
            DB::table('regionables')->insert(['region_id'=>1882, 'regionable_id'=>1149, 'regionable_type'=>'districts']); //Darangdan
            DB::table('regionables')->insert(['region_id'=>1882, 'regionable_id'=>1150, 'regionable_type'=>'districts']); //Bojong
            DB::table('regionables')->insert(['region_id'=>1882, 'regionable_id'=>1151, 'regionable_type'=>'districts']); //Maniis
            DB::table('regionables')->insert(['region_id'=>1882, 'regionable_id'=>1152, 'regionable_type'=>'districts']); //Sukatani
                DB::table('regions')->insert(['id'=>1883, 'parent'=>1882, 'code'=>'41167', 'type'=>'village', 'name'=>'Village 41167, Districts 4116, City 411, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10883, 'regionable_type'=>'village']); //Cianting
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10884, 'regionable_type'=>'village']); //Cianting Utara
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10885, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10886, 'regionable_type'=>'village']); //Cijantung
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10887, 'regionable_type'=>'village']); //Cilalawi
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10888, 'regionable_type'=>'village']); //Cipicung
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10889, 'regionable_type'=>'village']); //Malangnengah
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10890, 'regionable_type'=>'village']); //Panyindangan
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10891, 'regionable_type'=>'village']); //Pasirmunjul
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10892, 'regionable_type'=>'village']); //Sindanglaya
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10893, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10894, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10895, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>1883, 'regionable_id'=>10896, 'regionable_type'=>'village']); //Tajursindang
            DB::table('regions')->insert(['id'=>1884, 'parent'=>1877, 'code'=>'4117', 'type'=>'districts', 'name'=>'Districts 4117, City 411, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1884, 'regionable_id'=>1153, 'regionable_type'=>'districts']); //Pasawahan
            DB::table('regionables')->insert(['region_id'=>1884, 'regionable_id'=>1154, 'regionable_type'=>'districts']); //Wanayasa
            DB::table('regionables')->insert(['region_id'=>1884, 'regionable_id'=>1155, 'regionable_type'=>'districts']); //Kiarapedes
                DB::table('regions')->insert(['id'=>1885, 'parent'=>1884, 'code'=>'41175', 'type'=>'village', 'name'=>'Village 41175, Districts 4117, City 411, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10924, 'regionable_type'=>'village']); //Cibeber
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10925, 'regionable_type'=>'village']); //Ciracas
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10926, 'regionable_type'=>'village']); //Gardu
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10927, 'regionable_type'=>'village']); //Kiarapedes
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10928, 'regionable_type'=>'village']); //Margaluyu
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10929, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10930, 'regionable_type'=>'village']); //Parakan Garokgek
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10931, 'regionable_type'=>'village']); //Pusakamulya
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10932, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regionables')->insert(['region_id'=>1885, 'regionable_id'=>10933, 'regionable_type'=>'village']); //Taringgul Landeuh
            DB::table('regions')->insert(['id'=>1886, 'parent'=>1877, 'code'=>'4118', 'type'=>'districts', 'name'=>'Districts 4118, City 411, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1886, 'regionable_id'=>1156, 'regionable_type'=>'districts']); //Campaka
            DB::table('regionables')->insert(['region_id'=>1886, 'regionable_id'=>1157, 'regionable_type'=>'districts']); //Bungursari
            DB::table('regionables')->insert(['region_id'=>1886, 'regionable_id'=>1158, 'regionable_type'=>'districts']); //Cibatu
                DB::table('regions')->insert(['id'=>1887, 'parent'=>1886, 'code'=>'41181', 'type'=>'village', 'name'=>'Village 41181, Districts 4118, City 411, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10934, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10935, 'regionable_type'=>'village']); //Campaka
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10936, 'regionable_type'=>'village']); //Campakasari
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10937, 'regionable_type'=>'village']); //Cijaya
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10938, 'regionable_type'=>'village']); //Cijunti
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10939, 'regionable_type'=>'village']); //Cikumpay
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10940, 'regionable_type'=>'village']); //Cimahi
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10941, 'regionable_type'=>'village']); //Cirende
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10942, 'regionable_type'=>'village']); //Cisaat
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10943, 'regionable_type'=>'village']); //Kertamukti
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10944, 'regionable_type'=>'village']); //Bungursari
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10945, 'regionable_type'=>'village']); //Cibening
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10946, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10947, 'regionable_type'=>'village']); //Cibungur
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10948, 'regionable_type'=>'village']); //Cikopo
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10949, 'regionable_type'=>'village']); //Cinangka
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10950, 'regionable_type'=>'village']); //Ciwangi
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10951, 'regionable_type'=>'village']); //Dangdeur
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10952, 'regionable_type'=>'village']); //Karangmukti
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10953, 'regionable_type'=>'village']); //Wanakerta
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10954, 'regionable_type'=>'village']); //Cibatu
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10955, 'regionable_type'=>'village']); //Cibukamanah
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10956, 'regionable_type'=>'village']); //Cikadu
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10957, 'regionable_type'=>'village']); //Cilandak
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10958, 'regionable_type'=>'village']); //Cipancur
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10959, 'regionable_type'=>'village']); //Ciparungsari
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10960, 'regionable_type'=>'village']); //Cipinang
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10961, 'regionable_type'=>'village']); //Cirangkong
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10962, 'regionable_type'=>'village']); //Karyamekar
                DB::table('regionables')->insert(['region_id'=>1887, 'regionable_id'=>10963, 'regionable_type'=>'village']); //Wanawali
        DB::table('regions')->insert(['id'=>1888, 'parent'=>1678, 'code'=>'412', 'type'=>'city', 'name'=>'City 412, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1888, 'regionable_id'=>73, 'regionable_type'=>'city']); //Subang regencies
            DB::table('regions')->insert(['id'=>1889, 'parent'=>1888, 'code'=>'4121', 'type'=>'districts', 'name'=>'Districts 4121, City 412, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1889, 'regionable_id'=>1159, 'regionable_type'=>'districts']); //Subang
                DB::table('regions')->insert(['id'=>1890, 'parent'=>1889, 'code'=>'41211', 'type'=>'village', 'name'=>'Village 41211, Districts 4121, City 412, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1890, 'regionable_id'=>10964, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>1890, 'regionable_id'=>10965, 'regionable_type'=>'village']); //Parung
                DB::table('regionables')->insert(['region_id'=>1890, 'regionable_id'=>10966, 'regionable_type'=>'village']); //Pasirkareumbi
                DB::table('regionables')->insert(['region_id'=>1890, 'regionable_id'=>10967, 'regionable_type'=>'village']); //Sukamelang
                DB::table('regionables')->insert(['region_id'=>1890, 'regionable_id'=>10968, 'regionable_type'=>'village']); //Wanareja
                DB::table('regions')->insert(['id'=>1891, 'parent'=>1889, 'code'=>'41212', 'type'=>'village', 'name'=>'Village 41212, Districts 4121, City 412, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1891, 'regionable_id'=>10969, 'regionable_type'=>'village']); //Dangdeur
                DB::table('regions')->insert(['id'=>1892, 'parent'=>1889, 'code'=>'41213', 'type'=>'village', 'name'=>'Village 41213, Districts 4121, City 412, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1892, 'regionable_id'=>10970, 'regionable_type'=>'village']); //Cigadung
                DB::table('regions')->insert(['id'=>1893, 'parent'=>1889, 'code'=>'41215', 'type'=>'village', 'name'=>'Village 41215, Districts 4121, City 412, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1893, 'regionable_id'=>10971, 'regionable_type'=>'village']); //Soklat
            DB::table('regions')->insert(['id'=>1894, 'parent'=>1888, 'code'=>'4125', 'type'=>'districts', 'name'=>'Districts 4125, City 412, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1160, 'regionable_type'=>'districts']); //Pabuaran
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1161, 'regionable_type'=>'districts']); //Ciater
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1162, 'regionable_type'=>'districts']); //Pagaden
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1163, 'regionable_type'=>'districts']); //Pagaden Barat
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1164, 'regionable_type'=>'districts']); //Binong
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1165, 'regionable_type'=>'districts']); //Tambakdahan
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1166, 'regionable_type'=>'districts']); //Cikaum
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1167, 'regionable_type'=>'districts']); //Sukasari
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1168, 'regionable_type'=>'districts']); //Legonkulon
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1169, 'regionable_type'=>'districts']); //Pamanukan
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1170, 'regionable_type'=>'districts']); //Pusakajaya
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1171, 'regionable_type'=>'districts']); //Pusakanagara
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1172, 'regionable_type'=>'districts']); //Ciasem
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1173, 'regionable_type'=>'districts']); //Cipunagara
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1174, 'regionable_type'=>'districts']); //Compreng
            DB::table('regionables')->insert(['region_id'=>1894, 'regionable_id'=>1175, 'regionable_type'=>'districts']); //Blanakan
                DB::table('regions')->insert(['id'=>1895, 'parent'=>1894, 'code'=>'41259', 'type'=>'village', 'name'=>'Village 41259, Districts 4125, City 412, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11097, 'regionable_type'=>'village']); //Blanakan
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11098, 'regionable_type'=>'village']); //Cilamaya Girang
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11099, 'regionable_type'=>'village']); //Cilamaya Hilir
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11100, 'regionable_type'=>'village']); //Jayamukti
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11101, 'regionable_type'=>'village']); //Langensari
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11102, 'regionable_type'=>'village']); //Muara
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11103, 'regionable_type'=>'village']); //Rawamekar
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11104, 'regionable_type'=>'village']); //Rawameneng
                DB::table('regionables')->insert(['region_id'=>1895, 'regionable_id'=>11105, 'regionable_type'=>'village']); //Tanjungtiga
            DB::table('regions')->insert(['id'=>1896, 'parent'=>1888, 'code'=>'4126', 'type'=>'districts', 'name'=>'Districts 4126, City 412, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1896, 'regionable_id'=>1160, 'regionable_type'=>'districts']); //Pabuaran
            DB::table('regionables')->insert(['region_id'=>1896, 'regionable_id'=>1176, 'regionable_type'=>'districts']); //Purwadadi
            DB::table('regionables')->insert(['region_id'=>1896, 'regionable_id'=>1177, 'regionable_type'=>'districts']); //Patokbeusi
                DB::table('regions')->insert(['id'=>1897, 'parent'=>1896, 'code'=>'41263', 'type'=>'village', 'name'=>'Village 41263, Districts 4126, City 412, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11116, 'regionable_type'=>'village']); //Ciberes
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11117, 'regionable_type'=>'village']); //Gempolsari
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11118, 'regionable_type'=>'village']); //Jatiragas Hilir
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11119, 'regionable_type'=>'village']); //Rancaasih
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11120, 'regionable_type'=>'village']); //Rancabango
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11121, 'regionable_type'=>'village']); //Rancajaya
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11122, 'regionable_type'=>'village']); //Rancamulya
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11123, 'regionable_type'=>'village']); //Tambakjati
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11124, 'regionable_type'=>'village']); //Tanjungrasa Kaler
                DB::table('regionables')->insert(['region_id'=>1897, 'regionable_id'=>11125, 'regionable_type'=>'village']); //Tanjungrasa Kidul
            DB::table('regions')->insert(['id'=>1898, 'parent'=>1888, 'code'=>'4127', 'type'=>'districts', 'name'=>'Districts 4127, City 412, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1898, 'regionable_id'=>1178, 'regionable_type'=>'districts']); //Kalijati
            DB::table('regionables')->insert(['region_id'=>1898, 'regionable_id'=>1179, 'regionable_type'=>'districts']); //Dawuan
            DB::table('regionables')->insert(['region_id'=>1898, 'regionable_id'=>1180, 'regionable_type'=>'districts']); //Cipeundeuy
                DB::table('regions')->insert(['id'=>1899, 'parent'=>1898, 'code'=>'41272', 'type'=>'village', 'name'=>'Village 41272, Districts 4127, City 412, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1899, 'regionable_id'=>11146, 'regionable_type'=>'village']); //Banggalamulya
                DB::table('regionables')->insert(['region_id'=>1899, 'regionable_id'=>11147, 'regionable_type'=>'village']); //Cimayasari
                DB::table('regionables')->insert(['region_id'=>1899, 'regionable_id'=>11148, 'regionable_type'=>'village']); //Cipeundeuy
                DB::table('regionables')->insert(['region_id'=>1899, 'regionable_id'=>11149, 'regionable_type'=>'village']); //Jalupang
                DB::table('regionables')->insert(['region_id'=>1899, 'regionable_id'=>11150, 'regionable_type'=>'village']); //Lengkong
                DB::table('regionables')->insert(['region_id'=>1899, 'regionable_id'=>11151, 'regionable_type'=>'village']); //Sawangan
                DB::table('regionables')->insert(['region_id'=>1899, 'regionable_id'=>11152, 'regionable_type'=>'village']); //Wantilan
            DB::table('regions')->insert(['id'=>1900, 'parent'=>1888, 'code'=>'4128', 'type'=>'districts', 'name'=>'Districts 4128, City 412, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1161, 'regionable_type'=>'districts']); //Ciater
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1181, 'regionable_type'=>'districts']); //Jalancagak
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1182, 'regionable_type'=>'districts']); //Kasomalang
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1183, 'regionable_type'=>'districts']); //Sagalaherang
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1184, 'regionable_type'=>'districts']); //Serangpanjang
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1185, 'regionable_type'=>'districts']); //Cisalak
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1186, 'regionable_type'=>'districts']); //Tanjungsiang
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1187, 'regionable_type'=>'districts']); //Cibogo
            DB::table('regionables')->insert(['region_id'=>1900, 'regionable_id'=>1188, 'regionable_type'=>'districts']); //Cijambe
                DB::table('regions')->insert(['id'=>1901, 'parent'=>1900, 'code'=>'41286', 'type'=>'village', 'name'=>'Village 41286, Districts 4128, City 412, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1901, 'regionable_id'=>11209, 'regionable_type'=>'village']); //Bantarsari
                DB::table('regionables')->insert(['region_id'=>1901, 'regionable_id'=>11210, 'regionable_type'=>'village']); //Cijambe
                DB::table('regionables')->insert(['region_id'=>1901, 'regionable_id'=>11211, 'regionable_type'=>'village']); //Cikadu
                DB::table('regionables')->insert(['region_id'=>1901, 'regionable_id'=>11212, 'regionable_type'=>'village']); //Cimenteng
                DB::table('regionables')->insert(['region_id'=>1901, 'regionable_id'=>11213, 'regionable_type'=>'village']); //Cirangkong
                DB::table('regionables')->insert(['region_id'=>1901, 'regionable_id'=>11214, 'regionable_type'=>'village']); //Gunungtua
                DB::table('regionables')->insert(['region_id'=>1901, 'regionable_id'=>11215, 'regionable_type'=>'village']); //Sukahurip
                DB::table('regionables')->insert(['region_id'=>1901, 'regionable_id'=>11216, 'regionable_type'=>'village']); //Tanjungwangi
        DB::table('regions')->insert(['id'=>1902, 'parent'=>1678, 'code'=>'413', 'type'=>'city', 'name'=>'City 413, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1902, 'regionable_id'=>74, 'regionable_type'=>'city']); //Karawang regencies
            DB::table('regions')->insert(['id'=>1903, 'parent'=>1902, 'code'=>'4131', 'type'=>'districts', 'name'=>'Districts 4131, City 413, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1903, 'regionable_id'=>1189, 'regionable_type'=>'districts']); //Karawang Barat
            DB::table('regionables')->insert(['region_id'=>1903, 'regionable_id'=>1190, 'regionable_type'=>'districts']); //Karawang Timur
                DB::table('regions')->insert(['id'=>1904, 'parent'=>1903, 'code'=>'41314', 'type'=>'village', 'name'=>'Village 41314, Districts 4131, City 413, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1904, 'regionable_id'=>11225, 'regionable_type'=>'village']); //Adiarsa Timur
                DB::table('regionables')->insert(['region_id'=>1904, 'regionable_id'=>11226, 'regionable_type'=>'village']); //Karawang Wetan
                DB::table('regionables')->insert(['region_id'=>1904, 'regionable_id'=>11227, 'regionable_type'=>'village']); //Palawad
                DB::table('regionables')->insert(['region_id'=>1904, 'regionable_id'=>11228, 'regionable_type'=>'village']); //Palumbonsari
                DB::table('regionables')->insert(['region_id'=>1904, 'regionable_id'=>11229, 'regionable_type'=>'village']); //Tegalsawah
            DB::table('regions')->insert(['id'=>1905, 'parent'=>1902, 'code'=>'4135', 'type'=>'districts', 'name'=>'Districts 4135, City 413, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1191, 'regionable_type'=>'districts']); //Rengasdengklok
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1192, 'regionable_type'=>'districts']); //Jayakerta
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1193, 'regionable_type'=>'districts']); //Cilebar
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1194, 'regionable_type'=>'districts']); //Pedes
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1195, 'regionable_type'=>'districts']); //Batujaya
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1196, 'regionable_type'=>'districts']); //Pakisjaya
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1197, 'regionable_type'=>'districts']); //Cibuaya
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1198, 'regionable_type'=>'districts']); //Tirtajaya
            DB::table('regionables')->insert(['region_id'=>1905, 'regionable_id'=>1199, 'regionable_type'=>'districts']); //Kutawaluya
                DB::table('regions')->insert(['id'=>1906, 'parent'=>1905, 'code'=>'41358', 'type'=>'village', 'name'=>'Village 41358, Districts 4135, City 413, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11312, 'regionable_type'=>'village']); //Kutagandok
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11313, 'regionable_type'=>'village']); //Kutajaya
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11314, 'regionable_type'=>'village']); //Kutakarya
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11315, 'regionable_type'=>'village']); //Kutamukti
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11316, 'regionable_type'=>'village']); //Kutaraja
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11317, 'regionable_type'=>'village']); //Mulyajaya
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11318, 'regionable_type'=>'village']); //Sampalan
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11319, 'regionable_type'=>'village']); //Sindangkarya
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11320, 'regionable_type'=>'village']); //Sindangmukti
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11321, 'regionable_type'=>'village']); //Sindangmulya
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11322, 'regionable_type'=>'village']); //Sindangsari
                DB::table('regionables')->insert(['region_id'=>1906, 'regionable_id'=>11323, 'regionable_type'=>'village']); //Waluya
            DB::table('regions')->insert(['id'=>1907, 'parent'=>1902, 'code'=>'4136', 'type'=>'districts', 'name'=>'Districts 4136, City 413, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1907, 'regionable_id'=>1200, 'regionable_type'=>'districts']); //Telukjambe Barat
            DB::table('regionables')->insert(['region_id'=>1907, 'regionable_id'=>1201, 'regionable_type'=>'districts']); //Telukjambe Timur
            DB::table('regionables')->insert(['region_id'=>1907, 'regionable_id'=>1202, 'regionable_type'=>'districts']); //Tegalwaru
            DB::table('regionables')->insert(['region_id'=>1907, 'regionable_id'=>1203, 'regionable_type'=>'districts']); //Pangkalan
            DB::table('regionables')->insert(['region_id'=>1907, 'regionable_id'=>1204, 'regionable_type'=>'districts']); //Ciampel
                DB::table('regions')->insert(['id'=>1908, 'parent'=>1907, 'code'=>'41363', 'type'=>'village', 'name'=>'Village 41363, Districts 4136, City 413, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1908, 'regionable_id'=>11360, 'regionable_type'=>'village']); //Kutamekar
                DB::table('regionables')->insert(['region_id'=>1908, 'regionable_id'=>11361, 'regionable_type'=>'village']); //Kutanegara
                DB::table('regionables')->insert(['region_id'=>1908, 'regionable_id'=>11362, 'regionable_type'=>'village']); //Kutapohaci
                DB::table('regionables')->insert(['region_id'=>1908, 'regionable_id'=>11363, 'regionable_type'=>'village']); //Mulyasari
                DB::table('regionables')->insert(['region_id'=>1908, 'regionable_id'=>11364, 'regionable_type'=>'village']); //Mulyasejati
                DB::table('regionables')->insert(['region_id'=>1908, 'regionable_id'=>11365, 'regionable_type'=>'village']); //Parungmulya
                DB::table('regionables')->insert(['region_id'=>1908, 'regionable_id'=>11366, 'regionable_type'=>'village']); //Tegalega
            DB::table('regions')->insert(['id'=>1909, 'parent'=>1902, 'code'=>'4137', 'type'=>'districts', 'name'=>'Districts 4137, City 413, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1190, 'regionable_type'=>'districts']); //Karawang Timur
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1205, 'regionable_type'=>'districts']); //Klari
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1206, 'regionable_type'=>'districts']); //Majalaya
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1207, 'regionable_type'=>'districts']); //Purwasari
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1208, 'regionable_type'=>'districts']); //Tirtamulya
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1209, 'regionable_type'=>'districts']); //Cikampek
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1210, 'regionable_type'=>'districts']); //Jatisari
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1211, 'regionable_type'=>'districts']); //Banyusari
            DB::table('regionables')->insert(['region_id'=>1909, 'regionable_id'=>1212, 'regionable_type'=>'districts']); //Kotabaru
                DB::table('regions')->insert(['id'=>1910, 'parent'=>1909, 'code'=>'41374', 'type'=>'village', 'name'=>'Village 41374, Districts 4137, City 413, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11415, 'regionable_type'=>'village']); //Balonggandu
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11416, 'regionable_type'=>'village']); //Barugbug
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11417, 'regionable_type'=>'village']); //Cikalongsari
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11418, 'regionable_type'=>'village']); //Cirejag
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11419, 'regionable_type'=>'village']); //Jatibaru
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11420, 'regionable_type'=>'village']); //Jatiragas
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11421, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11422, 'regionable_type'=>'village']); //Jatiwangi
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11423, 'regionable_type'=>'village']); //Kalijati
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11424, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11425, 'regionable_type'=>'village']); //Pacing
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11426, 'regionable_type'=>'village']); //Situdam
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11427, 'regionable_type'=>'village']); //Sukamekar
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11428, 'regionable_type'=>'village']); //Telarsari
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11429, 'regionable_type'=>'village']); //Banyuasih
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11430, 'regionable_type'=>'village']); //Cicinde Selatan
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11431, 'regionable_type'=>'village']); //Cicinde Utara
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11432, 'regionable_type'=>'village']); //Gembongan
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11433, 'regionable_type'=>'village']); //Gempol
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11434, 'regionable_type'=>'village']); //Gempolkolot
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11435, 'regionable_type'=>'village']); //Jayamukti
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11436, 'regionable_type'=>'village']); //Kutaraharja
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11437, 'regionable_type'=>'village']); //Mekarasih
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11438, 'regionable_type'=>'village']); //Pamekaran
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11439, 'regionable_type'=>'village']); //Talunjaya
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11440, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11441, 'regionable_type'=>'village']); //Cikampek Utara
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11442, 'regionable_type'=>'village']); //Jomin Barat
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11443, 'regionable_type'=>'village']); //Jomin Timur
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11444, 'regionable_type'=>'village']); //Pangulah Baru
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11445, 'regionable_type'=>'village']); //Pangulah Selatan
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11446, 'regionable_type'=>'village']); //Pangulah Utara
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11447, 'regionable_type'=>'village']); //Pucung
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11448, 'regionable_type'=>'village']); //Sarimulya
                DB::table('regionables')->insert(['region_id'=>1910, 'regionable_id'=>11449, 'regionable_type'=>'village']); //Wancimekar
            DB::table('regions')->insert(['id'=>1911, 'parent'=>1902, 'code'=>'4138', 'type'=>'districts', 'name'=>'Districts 4138, City 413, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1911, 'regionable_id'=>1193, 'regionable_type'=>'districts']); //Cilebar
            DB::table('regionables')->insert(['region_id'=>1911, 'regionable_id'=>1213, 'regionable_type'=>'districts']); //Talagasari
            DB::table('regionables')->insert(['region_id'=>1911, 'regionable_id'=>1214, 'regionable_type'=>'districts']); //Rawamerta
            DB::table('regionables')->insert(['region_id'=>1911, 'regionable_id'=>1215, 'regionable_type'=>'districts']); //Lemahabang
            DB::table('regionables')->insert(['region_id'=>1911, 'regionable_id'=>1216, 'regionable_type'=>'districts']); //Cilamaya Kulon
            DB::table('regionables')->insert(['region_id'=>1911, 'regionable_id'=>1217, 'regionable_type'=>'districts']); //Cilamaya Wetan
            DB::table('regionables')->insert(['region_id'=>1911, 'regionable_id'=>1218, 'regionable_type'=>'districts']); //Tempuran
                DB::table('regions')->insert(['id'=>1912, 'parent'=>1911, 'code'=>'41385', 'type'=>'village', 'name'=>'Village 41385, Districts 4138, City 413, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11257, 'regionable_type'=>'village']); //Ciptamargi
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11258, 'regionable_type'=>'village']); //Mekarpohaci
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11259, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11512, 'regionable_type'=>'village']); //Cikuntul
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11513, 'regionable_type'=>'village']); //Ciparagejaya
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11514, 'regionable_type'=>'village']); //Dayeuhluhur
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11515, 'regionable_type'=>'village']); //Jayanagara
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11516, 'regionable_type'=>'village']); //Lemahduhur
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11517, 'regionable_type'=>'village']); //Lemahkarya
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11518, 'regionable_type'=>'village']); //Lemahmakmur
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11519, 'regionable_type'=>'village']); //Lemahsubur
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11520, 'regionable_type'=>'village']); //Pagadungan
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11521, 'regionable_type'=>'village']); //Pancakarya
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11522, 'regionable_type'=>'village']); //Purwajaya
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11523, 'regionable_type'=>'village']); //Sumberjaya
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11524, 'regionable_type'=>'village']); //Tanjungjaya
                DB::table('regionables')->insert(['region_id'=>1912, 'regionable_id'=>11525, 'regionable_type'=>'village']); //Tempuran
        DB::table('regions')->insert(['id'=>1913, 'parent'=>1678, 'code'=>'431', 'type'=>'city', 'name'=>'City 431, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1913, 'regionable_id'=>75, 'regionable_type'=>'city']); //Sukabumi city
        DB::table('regionables')->insert(['region_id'=>1913, 'regionable_id'=>76, 'regionable_type'=>'city']); //Sukabumi regencies
            DB::table('regions')->insert(['id'=>1914, 'parent'=>1913, 'code'=>'4311', 'type'=>'districts', 'name'=>'Districts 4311, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1914, 'regionable_id'=>1219, 'regionable_type'=>'districts']); //Cikole
            DB::table('regionables')->insert(['region_id'=>1914, 'regionable_id'=>1273, 'regionable_type'=>'districts']); //Cikole
                DB::table('regions')->insert(['id'=>1915, 'parent'=>1914, 'code'=>'43111', 'type'=>'village', 'name'=>'Village 43111, Districts 4311, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1915, 'regionable_id'=>11526, 'regionable_type'=>'village']); //Gunung Parang
                DB::table('regionables')->insert(['region_id'=>1915, 'regionable_id'=>11927, 'regionable_type'=>'village']); //Gunung Parang
                DB::table('regions')->insert(['id'=>1916, 'parent'=>1914, 'code'=>'43112', 'type'=>'village', 'name'=>'Village 43112, Districts 4311, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1916, 'regionable_id'=>11527, 'regionable_type'=>'village']); //Kebonjati
                DB::table('regionables')->insert(['region_id'=>1916, 'regionable_id'=>11928, 'regionable_type'=>'village']); //Kebonjati
                DB::table('regions')->insert(['id'=>1917, 'parent'=>1914, 'code'=>'43113', 'type'=>'village', 'name'=>'Village 43113, Districts 4311, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1917, 'regionable_id'=>11528, 'regionable_type'=>'village']); //Cikole
                DB::table('regionables')->insert(['region_id'=>1917, 'regionable_id'=>11929, 'regionable_type'=>'village']); //Cikole
                DB::table('regions')->insert(['id'=>1918, 'parent'=>1914, 'code'=>'43114', 'type'=>'village', 'name'=>'Village 43114, Districts 4311, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1918, 'regionable_id'=>11529, 'regionable_type'=>'village']); //Selabatu
                DB::table('regionables')->insert(['region_id'=>1918, 'regionable_id'=>11930, 'regionable_type'=>'village']); //Selabatu
                DB::table('regions')->insert(['id'=>1919, 'parent'=>1914, 'code'=>'43115', 'type'=>'village', 'name'=>'Village 43115, Districts 4311, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1919, 'regionable_id'=>11530, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>1919, 'regionable_id'=>11931, 'regionable_type'=>'village']); //Cisarua
                DB::table('regions')->insert(['id'=>1920, 'parent'=>1914, 'code'=>'43116', 'type'=>'village', 'name'=>'Village 43116, Districts 4311, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1920, 'regionable_id'=>11531, 'regionable_type'=>'village']); //Subangjaya
                DB::table('regionables')->insert(['region_id'=>1920, 'regionable_id'=>11932, 'regionable_type'=>'village']); //Subangjaya
            DB::table('regions')->insert(['id'=>1921, 'parent'=>1913, 'code'=>'4312', 'type'=>'districts', 'name'=>'Districts 4312, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1921, 'regionable_id'=>1220, 'regionable_type'=>'districts']); //Gunung Puyuh
            DB::table('regionables')->insert(['region_id'=>1921, 'regionable_id'=>1274, 'regionable_type'=>'districts']); //Gunung Puyuh
                DB::table('regions')->insert(['id'=>1922, 'parent'=>1921, 'code'=>'43121', 'type'=>'village', 'name'=>'Village 43121, Districts 4312, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1922, 'regionable_id'=>11532, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>1922, 'regionable_id'=>11533, 'regionable_type'=>'village']); //Sriwedari
                DB::table('regionables')->insert(['region_id'=>1922, 'regionable_id'=>11933, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>1922, 'regionable_id'=>11934, 'regionable_type'=>'village']); //Sriwedari
                DB::table('regions')->insert(['id'=>1923, 'parent'=>1921, 'code'=>'43122', 'type'=>'village', 'name'=>'Village 43122, Districts 4312, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1923, 'regionable_id'=>11534, 'regionable_type'=>'village']); //Karamat
                DB::table('regionables')->insert(['region_id'=>1923, 'regionable_id'=>11935, 'regionable_type'=>'village']); //Karamat
                DB::table('regions')->insert(['id'=>1924, 'parent'=>1921, 'code'=>'43123', 'type'=>'village', 'name'=>'Village 43123, Districts 4312, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1924, 'regionable_id'=>11535, 'regionable_type'=>'village']); //Gunung Puyuh
                DB::table('regionables')->insert(['region_id'=>1924, 'regionable_id'=>11936, 'regionable_type'=>'village']); //Gunung Puyuh
            DB::table('regions')->insert(['id'=>1925, 'parent'=>1913, 'code'=>'4313', 'type'=>'districts', 'name'=>'Districts 4313, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1925, 'regionable_id'=>1221, 'regionable_type'=>'districts']); //Warudoyong
            DB::table('regionables')->insert(['region_id'=>1925, 'regionable_id'=>1222, 'regionable_type'=>'districts']); //Cisaat
            DB::table('regionables')->insert(['region_id'=>1925, 'regionable_id'=>1223, 'regionable_type'=>'districts']); //Lembursitu
            DB::table('regionables')->insert(['region_id'=>1925, 'regionable_id'=>1275, 'regionable_type'=>'districts']); //Warudoyong
            DB::table('regionables')->insert(['region_id'=>1925, 'regionable_id'=>1276, 'regionable_type'=>'districts']); //Cisaat
            DB::table('regionables')->insert(['region_id'=>1925, 'regionable_id'=>1277, 'regionable_type'=>'districts']); //Lembursitu
                DB::table('regions')->insert(['id'=>1926, 'parent'=>1925, 'code'=>'43134', 'type'=>'village', 'name'=>'Village 43134, Districts 4313, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1926, 'regionable_id'=>11539, 'regionable_type'=>'village']); //Dayeuhluhur
                DB::table('regionables')->insert(['region_id'=>1926, 'regionable_id'=>11542, 'regionable_type'=>'village']); //Sukasari
                DB::table('regionables')->insert(['region_id'=>1926, 'regionable_id'=>11554, 'regionable_type'=>'village']); //Cipanengah
                DB::table('regionables')->insert(['region_id'=>1926, 'regionable_id'=>11940, 'regionable_type'=>'village']); //Dayeuhluhur
                DB::table('regionables')->insert(['region_id'=>1926, 'regionable_id'=>11943, 'regionable_type'=>'village']); //Sukasari
                DB::table('regionables')->insert(['region_id'=>1926, 'regionable_id'=>11955, 'regionable_type'=>'village']); //Cipanengah
            DB::table('regions')->insert(['id'=>1927, 'parent'=>1913, 'code'=>'4314', 'type'=>'districts', 'name'=>'Districts 4314, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1927, 'regionable_id'=>1224, 'regionable_type'=>'districts']); //Citamiang
            DB::table('regionables')->insert(['region_id'=>1927, 'regionable_id'=>1225, 'regionable_type'=>'districts']); //Cibeureum
            DB::table('regionables')->insert(['region_id'=>1927, 'regionable_id'=>1278, 'regionable_type'=>'districts']); //Citamiang
            DB::table('regionables')->insert(['region_id'=>1927, 'regionable_id'=>1279, 'regionable_type'=>'districts']); //Cibeureum
                DB::table('regions')->insert(['id'=>1928, 'parent'=>1927, 'code'=>'43142', 'type'=>'village', 'name'=>'Village 43142, Districts 4314, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1928, 'regionable_id'=>11560, 'regionable_type'=>'village']); //Cikondang
                DB::table('regionables')->insert(['region_id'=>1928, 'regionable_id'=>11564, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>1928, 'regionable_id'=>11961, 'regionable_type'=>'village']); //Cikondang
                DB::table('regionables')->insert(['region_id'=>1928, 'regionable_id'=>11965, 'regionable_type'=>'village']); //Babakan
            DB::table('regions')->insert(['id'=>1929, 'parent'=>1913, 'code'=>'4315', 'type'=>'districts', 'name'=>'Districts 4315, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1222, 'regionable_type'=>'districts']); //Cisaat
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1226, 'regionable_type'=>'districts']); //Sukabumi
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1227, 'regionable_type'=>'districts']); //Kadudampit
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1228, 'regionable_type'=>'districts']); //Geger Bitung
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1229, 'regionable_type'=>'districts']); //Caringin
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1230, 'regionable_type'=>'districts']); //Cicantayan
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1231, 'regionable_type'=>'districts']); //Gunung Guruh
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1232, 'regionable_type'=>'districts']); //Cikembar
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1276, 'regionable_type'=>'districts']); //Cisaat
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1280, 'regionable_type'=>'districts']); //Sukabumi
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1281, 'regionable_type'=>'districts']); //Kadudampit
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1282, 'regionable_type'=>'districts']); //Geger Bitung
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1283, 'regionable_type'=>'districts']); //Caringin
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1284, 'regionable_type'=>'districts']); //Cicantayan
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1285, 'regionable_type'=>'districts']); //Gunung Guruh
            DB::table('regionables')->insert(['region_id'=>1929, 'regionable_id'=>1286, 'regionable_type'=>'districts']); //Cikembar
                DB::table('regions')->insert(['id'=>1930, 'parent'=>1929, 'code'=>'43157', 'type'=>'village', 'name'=>'Village 43157, Districts 4315, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11611, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11612, 'regionable_type'=>'village']); //Bojongkembar
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11613, 'regionable_type'=>'village']); //Bojongraharja
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11614, 'regionable_type'=>'village']); //Cibatu
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11615, 'regionable_type'=>'village']); //Cikembar
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11616, 'regionable_type'=>'village']); //Cimanggu
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11617, 'regionable_type'=>'village']); //Kertaraharja
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11618, 'regionable_type'=>'village']); //Parakanlima
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11619, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>11620, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12012, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12013, 'regionable_type'=>'village']); //Bojongkembar
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12014, 'regionable_type'=>'village']); //Bojongraharja
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12015, 'regionable_type'=>'village']); //Cibatu
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12016, 'regionable_type'=>'village']); //Cikembar
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12017, 'regionable_type'=>'village']); //Cimanggu
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12018, 'regionable_type'=>'village']); //Kertaraharja
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12019, 'regionable_type'=>'village']); //Parakanlima
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12020, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1930, 'regionable_id'=>12021, 'regionable_type'=>'village']); //Sukamulya
            DB::table('regions')->insert(['id'=>1931, 'parent'=>1913, 'code'=>'4316', 'type'=>'districts', 'name'=>'Districts 4316, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1931, 'regionable_id'=>1223, 'regionable_type'=>'districts']); //Lembursitu
            DB::table('regionables')->insert(['region_id'=>1931, 'regionable_id'=>1225, 'regionable_type'=>'districts']); //Cibeureum
            DB::table('regionables')->insert(['region_id'=>1931, 'regionable_id'=>1233, 'regionable_type'=>'districts']); //Baros
            DB::table('regionables')->insert(['region_id'=>1931, 'regionable_id'=>1277, 'regionable_type'=>'districts']); //Lembursitu
            DB::table('regionables')->insert(['region_id'=>1931, 'regionable_id'=>1279, 'regionable_type'=>'districts']); //Cibeureum
            DB::table('regionables')->insert(['region_id'=>1931, 'regionable_id'=>1287, 'regionable_type'=>'districts']); //Baros
                DB::table('regions')->insert(['id'=>1932, 'parent'=>1931, 'code'=>'43161', 'type'=>'village', 'name'=>'Village 43161, Districts 4316, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1932, 'regionable_id'=>11621, 'regionable_type'=>'village']); //Baros
                DB::table('regionables')->insert(['region_id'=>1932, 'regionable_id'=>11622, 'regionable_type'=>'village']); //Sudajayahilir
                DB::table('regionables')->insert(['region_id'=>1932, 'regionable_id'=>12022, 'regionable_type'=>'village']); //Baros
                DB::table('regionables')->insert(['region_id'=>1932, 'regionable_id'=>12023, 'regionable_type'=>'village']); //Sudajayahilir
                DB::table('regions')->insert(['id'=>1933, 'parent'=>1931, 'code'=>'43166', 'type'=>'village', 'name'=>'Village 43166, Districts 4316, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1933, 'regionable_id'=>11623, 'regionable_type'=>'village']); //Jayamekar
                DB::table('regionables')->insert(['region_id'=>1933, 'regionable_id'=>11624, 'regionable_type'=>'village']); //Jayaraksa
                DB::table('regionables')->insert(['region_id'=>1933, 'regionable_id'=>12024, 'regionable_type'=>'village']); //Jayamekar
                DB::table('regionables')->insert(['region_id'=>1933, 'regionable_id'=>12025, 'regionable_type'=>'village']); //Jayaraksa
            DB::table('regions')->insert(['id'=>1934, 'parent'=>1913, 'code'=>'4317', 'type'=>'districts', 'name'=>'Districts 4317, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1234, 'regionable_type'=>'districts']); //Jampang Tengah
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1235, 'regionable_type'=>'districts']); //Cibitung
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1236, 'regionable_type'=>'districts']); //Pabuaran
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1237, 'regionable_type'=>'districts']); //Lengkong
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1238, 'regionable_type'=>'districts']); //Waluran
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1239, 'regionable_type'=>'districts']); //Ciracap
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1240, 'regionable_type'=>'districts']); //Ciemas
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1241, 'regionable_type'=>'districts']); //Jampang Kulon
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1242, 'regionable_type'=>'districts']); //Cimanggu
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1243, 'regionable_type'=>'districts']); //Surade
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1288, 'regionable_type'=>'districts']); //Jampang Tengah
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1289, 'regionable_type'=>'districts']); //Cibitung
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1290, 'regionable_type'=>'districts']); //Pabuaran
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1291, 'regionable_type'=>'districts']); //Lengkong
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1292, 'regionable_type'=>'districts']); //Waluran
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1293, 'regionable_type'=>'districts']); //Ciracap
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1294, 'regionable_type'=>'districts']); //Ciemas
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1295, 'regionable_type'=>'districts']); //Jampang Kulon
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1296, 'regionable_type'=>'districts']); //Cimanggu
            DB::table('regionables')->insert(['region_id'=>1934, 'regionable_id'=>1297, 'regionable_type'=>'districts']); //Surade
                DB::table('regions')->insert(['id'=>1935, 'parent'=>1934, 'code'=>'43179', 'type'=>'village', 'name'=>'Village 43179, Districts 4317, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11689, 'regionable_type'=>'village']); //Buniwangi
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11690, 'regionable_type'=>'village']); //Cipeundeuy
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11691, 'regionable_type'=>'village']); //Citanglar
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11692, 'regionable_type'=>'village']); //Gunung Sungging
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11693, 'regionable_type'=>'village']); //Jagamukti
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11694, 'regionable_type'=>'village']); //Kadaleman
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11695, 'regionable_type'=>'village']); //Kademangan
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11696, 'regionable_type'=>'village']); //Pasiripis
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11697, 'regionable_type'=>'village']); //Sirnasari
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11698, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11699, 'regionable_type'=>'village']); //Swakarya
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>11700, 'regionable_type'=>'village']); //Wanasari
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12090, 'regionable_type'=>'village']); //Buniwangi
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12091, 'regionable_type'=>'village']); //Cipeundeuy
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12092, 'regionable_type'=>'village']); //Citanglar
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12093, 'regionable_type'=>'village']); //Gunung Sungging
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12094, 'regionable_type'=>'village']); //Jagamukti
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12095, 'regionable_type'=>'village']); //Kadaleman
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12096, 'regionable_type'=>'village']); //Kademangan
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12097, 'regionable_type'=>'village']); //Pasiripis
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12098, 'regionable_type'=>'village']); //Sirnasari
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12099, 'regionable_type'=>'village']); //Sukatani
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12100, 'regionable_type'=>'village']); //Swakarya
                DB::table('regionables')->insert(['region_id'=>1935, 'regionable_id'=>12101, 'regionable_type'=>'village']); //Wanasari
            DB::table('regions')->insert(['id'=>1936, 'parent'=>1913, 'code'=>'4318', 'type'=>'districts', 'name'=>'Districts 4318, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1244, 'regionable_type'=>'districts']); //Sagaranten
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1245, 'regionable_type'=>'districts']); //Curugkembar
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1246, 'regionable_type'=>'districts']); //Cidadap
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1247, 'regionable_type'=>'districts']); //Cidolog
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1248, 'regionable_type'=>'districts']); //Kali Bunder
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1249, 'regionable_type'=>'districts']); //Tegal Buleud
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1250, 'regionable_type'=>'districts']); //Purabaya
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1298, 'regionable_type'=>'districts']); //Sagaranten
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1299, 'regionable_type'=>'districts']); //Curugkembar
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1300, 'regionable_type'=>'districts']); //Cidadap
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1301, 'regionable_type'=>'districts']); //Cidolog
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1302, 'regionable_type'=>'districts']); //Kali Bunder
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1303, 'regionable_type'=>'districts']); //Tegal Buleud
            DB::table('regionables')->insert(['region_id'=>1936, 'regionable_id'=>1304, 'regionable_type'=>'districts']); //Purabaya
                DB::table('regions')->insert(['id'=>1937, 'parent'=>1936, 'code'=>'43187', 'type'=>'village', 'name'=>'Village 43187, Districts 4318, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>11743, 'regionable_type'=>'village']); //Cicukang
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>11744, 'regionable_type'=>'village']); //Cimerang
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>11745, 'regionable_type'=>'village']); //Citamiang
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>11746, 'regionable_type'=>'village']); //Margaluyu
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>11747, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>11748, 'regionable_type'=>'village']); //Pagelaran
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>11749, 'regionable_type'=>'village']); //Purabaya
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>12144, 'regionable_type'=>'village']); //Cicukang
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>12145, 'regionable_type'=>'village']); //Cimerang
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>12146, 'regionable_type'=>'village']); //Citamiang
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>12147, 'regionable_type'=>'village']); //Margaluyu
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>12148, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>12149, 'regionable_type'=>'village']); //Pagelaran
                DB::table('regionables')->insert(['region_id'=>1937, 'regionable_id'=>12150, 'regionable_type'=>'village']); //Purabaya
            DB::table('regions')->insert(['id'=>1938, 'parent'=>1913, 'code'=>'4319', 'type'=>'districts', 'name'=>'Districts 4319, City 431, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1228, 'regionable_type'=>'districts']); //Geger Bitung
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1251, 'regionable_type'=>'districts']); //Sukalarang
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1252, 'regionable_type'=>'districts']); //Sukaraja
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1253, 'regionable_type'=>'districts']); //Cireunghas
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1254, 'regionable_type'=>'districts']); //Kebonpedes
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1255, 'regionable_type'=>'districts']); //Nyalindung
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1282, 'regionable_type'=>'districts']); //Geger Bitung
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1305, 'regionable_type'=>'districts']); //Sukalarang
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1306, 'regionable_type'=>'districts']); //Sukaraja
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1307, 'regionable_type'=>'districts']); //Cireunghas
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1308, 'regionable_type'=>'districts']); //Kebonpedes
            DB::table('regionables')->insert(['region_id'=>1938, 'regionable_id'=>1309, 'regionable_type'=>'districts']); //Nyalindung
                DB::table('regions')->insert(['id'=>1939, 'parent'=>1938, 'code'=>'43196', 'type'=>'village', 'name'=>'Village 43196, Districts 4319, City 431, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11775, 'regionable_type'=>'village']); //Bojongkalong
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11776, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11777, 'regionable_type'=>'village']); //Cijangkar
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11778, 'regionable_type'=>'village']); //Cisitu
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11779, 'regionable_type'=>'village']); //Kertaangsana
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11780, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11781, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11782, 'regionable_type'=>'village']); //Nyalindung
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11783, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>11784, 'regionable_type'=>'village']); //Wangunreja
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12176, 'regionable_type'=>'village']); //Bojongkalong
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12177, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12178, 'regionable_type'=>'village']); //Cijangkar
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12179, 'regionable_type'=>'village']); //Cisitu
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12180, 'regionable_type'=>'village']); //Kertaangsana
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12181, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12182, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12183, 'regionable_type'=>'village']); //Nyalindung
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12184, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1939, 'regionable_id'=>12185, 'regionable_type'=>'village']); //Wangunreja
        DB::table('regions')->insert(['id'=>1940, 'parent'=>1678, 'code'=>'432', 'type'=>'city', 'name'=>'City 432, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1940, 'regionable_id'=>77, 'regionable_type'=>'city']); //Cianjur regencies
            DB::table('regions')->insert(['id'=>1941, 'parent'=>1940, 'code'=>'4321', 'type'=>'districts', 'name'=>'Districts 4321, City 432, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1941, 'regionable_id'=>1327, 'regionable_type'=>'districts']); //Cianjur
                DB::table('regions')->insert(['id'=>1942, 'parent'=>1941, 'code'=>'43211', 'type'=>'village', 'name'=>'Village 43211, Districts 4321, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1942, 'regionable_id'=>12328, 'regionable_type'=>'village']); //Babakankaret
                DB::table('regionables')->insert(['region_id'=>1942, 'regionable_id'=>12329, 'regionable_type'=>'village']); //Limbangan Sari
                DB::table('regionables')->insert(['region_id'=>1942, 'regionable_id'=>12330, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1942, 'regionable_id'=>12331, 'regionable_type'=>'village']); //Pamoyanan
                DB::table('regionables')->insert(['region_id'=>1942, 'regionable_id'=>12332, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regions')->insert(['id'=>1943, 'parent'=>1941, 'code'=>'43212', 'type'=>'village', 'name'=>'Village 43212, Districts 4321, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1943, 'regionable_id'=>12333, 'regionable_type'=>'village']); //Sawah Gede
                DB::table('regions')->insert(['id'=>1944, 'parent'=>1941, 'code'=>'43213', 'type'=>'village', 'name'=>'Village 43213, Districts 4321, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1944, 'regionable_id'=>12334, 'regionable_type'=>'village']); //Sayang
                DB::table('regions')->insert(['id'=>1945, 'parent'=>1941, 'code'=>'43214', 'type'=>'village', 'name'=>'Village 43214, Districts 4321, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1945, 'regionable_id'=>12335, 'regionable_type'=>'village']); //Solokpandan
                DB::table('regions')->insert(['id'=>1946, 'parent'=>1941, 'code'=>'43215', 'type'=>'village', 'name'=>'Village 43215, Districts 4321, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1946, 'regionable_id'=>12336, 'regionable_type'=>'village']); //Muka
                DB::table('regionables')->insert(['region_id'=>1946, 'regionable_id'=>12337, 'regionable_type'=>'village']); //Nagrak
                DB::table('regions')->insert(['id'=>1947, 'parent'=>1941, 'code'=>'43216', 'type'=>'village', 'name'=>'Village 43216, Districts 4321, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1947, 'regionable_id'=>12338, 'regionable_type'=>'village']); //Bojongherang
            DB::table('regions')->insert(['id'=>1948, 'parent'=>1940, 'code'=>'4325', 'type'=>'districts', 'name'=>'Districts 4325, City 432, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1948, 'regionable_id'=>1328, 'regionable_type'=>'districts']); //Cugenang
            DB::table('regionables')->insert(['region_id'=>1948, 'regionable_id'=>1329, 'regionable_type'=>'districts']); //Cipanas
            DB::table('regionables')->insert(['region_id'=>1948, 'regionable_id'=>1330, 'regionable_type'=>'districts']); //Pacet
            DB::table('regionables')->insert(['region_id'=>1948, 'regionable_id'=>1331, 'regionable_type'=>'districts']); //Sukaresmi
                DB::table('regions')->insert(['id'=>1949, 'parent'=>1948, 'code'=>'43254', 'type'=>'village', 'name'=>'Village 43254, Districts 4325, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12369, 'regionable_type'=>'village']); //Cibadak
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12370, 'regionable_type'=>'village']); //Cibanteng
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12371, 'regionable_type'=>'village']); //Cikancana
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12372, 'regionable_type'=>'village']); //Cikanyere
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12373, 'regionable_type'=>'village']); //Ciwalen
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12374, 'regionable_type'=>'village']); //Kawungluwuk
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12375, 'regionable_type'=>'village']); //Kubang
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12376, 'regionable_type'=>'village']); //Pakuon
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12377, 'regionable_type'=>'village']); //Rawabelut
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12378, 'regionable_type'=>'village']); //Sukamahi
                DB::table('regionables')->insert(['region_id'=>1949, 'regionable_id'=>12379, 'regionable_type'=>'village']); //Sukaresmi
            DB::table('regions')->insert(['id'=>1950, 'parent'=>1940, 'code'=>'4326', 'type'=>'districts', 'name'=>'Districts 4326, City 432, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1332, 'regionable_type'=>'districts']); //Gekbrong
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1333, 'regionable_type'=>'districts']); //Warungkondang
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1334, 'regionable_type'=>'districts']); //Cibeber
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1335, 'regionable_type'=>'districts']); //Campaka
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1336, 'regionable_type'=>'districts']); //Sukanagara
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1337, 'regionable_type'=>'districts']); //Takokak
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1338, 'regionable_type'=>'districts']); //Pagelaran
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1339, 'regionable_type'=>'districts']); //Pasirkuda
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1340, 'regionable_type'=>'districts']); //Tanggeung
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1341, 'regionable_type'=>'districts']); //Kadupandak
            DB::table('regionables')->insert(['region_id'=>1950, 'regionable_id'=>1342, 'regionable_type'=>'districts']); //Campaka Mulya
                DB::table('regions')->insert(['id'=>1951, 'parent'=>1950, 'code'=>'43269', 'type'=>'village', 'name'=>'Village 43269, Districts 4326, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1951, 'regionable_id'=>12496, 'regionable_type'=>'village']); //Campakamulya
                DB::table('regionables')->insert(['region_id'=>1951, 'regionable_id'=>12497, 'regionable_type'=>'village']); //Campakawarna
                DB::table('regionables')->insert(['region_id'=>1951, 'regionable_id'=>12498, 'regionable_type'=>'village']); //Cibanggala
                DB::table('regionables')->insert(['region_id'=>1951, 'regionable_id'=>12499, 'regionable_type'=>'village']); //Sukabungah
                DB::table('regionables')->insert(['region_id'=>1951, 'regionable_id'=>12500, 'regionable_type'=>'village']); //Sukasirna
            DB::table('regions')->insert(['id'=>1952, 'parent'=>1940, 'code'=>'4327', 'type'=>'districts', 'name'=>'Districts 4327, City 432, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1952, 'regionable_id'=>1343, 'regionable_type'=>'districts']); //Cibinong
            DB::table('regionables')->insert(['region_id'=>1952, 'regionable_id'=>1344, 'regionable_type'=>'districts']); //Sindangbarang
            DB::table('regionables')->insert(['region_id'=>1952, 'regionable_id'=>1345, 'regionable_type'=>'districts']); //Agrabinta
            DB::table('regionables')->insert(['region_id'=>1952, 'regionable_id'=>1346, 'regionable_type'=>'districts']); //Leles
            DB::table('regionables')->insert(['region_id'=>1952, 'regionable_id'=>1347, 'regionable_type'=>'districts']); //Naringgul
            DB::table('regionables')->insert(['region_id'=>1952, 'regionable_id'=>1348, 'regionable_type'=>'districts']); //Cidaun
                DB::table('regions')->insert(['id'=>1953, 'parent'=>1952, 'code'=>'43275', 'type'=>'village', 'name'=>'Village 43275, Districts 4327, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12560, 'regionable_type'=>'village']); //Cibuluh
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12561, 'regionable_type'=>'village']); //Cidamar
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12562, 'regionable_type'=>'village']); //Cimaragang
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12563, 'regionable_type'=>'village']); //Cisalak
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12564, 'regionable_type'=>'village']); //Gelarpawitan
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12565, 'regionable_type'=>'village']); //Gelarwangi
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12566, 'regionable_type'=>'village']); //Jayapura
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12567, 'regionable_type'=>'village']); //Karangwangi
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12568, 'regionable_type'=>'village']); //Karyabakti
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12569, 'regionable_type'=>'village']); //Kertajadi
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12570, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12571, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12572, 'regionable_type'=>'village']); //Puncakbaru
                DB::table('regionables')->insert(['region_id'=>1953, 'regionable_id'=>12573, 'regionable_type'=>'village']); //Sukapura
            DB::table('regions')->insert(['id'=>1954, 'parent'=>1940, 'code'=>'4328', 'type'=>'districts', 'name'=>'Districts 4328, City 432, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1330, 'regionable_type'=>'districts']); //Pacet
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1349, 'regionable_type'=>'districts']); //Karangtengah
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1350, 'regionable_type'=>'districts']); //Ciranjang
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1351, 'regionable_type'=>'districts']); //Haurwangi
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1352, 'regionable_type'=>'districts']); //Bojongpicung
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1353, 'regionable_type'=>'districts']); //Sukaluyu
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1354, 'regionable_type'=>'districts']); //Cijati
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1355, 'regionable_type'=>'districts']); //Cikadu
            DB::table('regionables')->insert(['region_id'=>1954, 'regionable_id'=>1356, 'regionable_type'=>'districts']); //Cilaku
                DB::table('regions')->insert(['id'=>1955, 'parent'=>1954, 'code'=>'43285', 'type'=>'village', 'name'=>'Village 43285, Districts 4328, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12648, 'regionable_type'=>'village']); //Cibinong Hilir
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12649, 'regionable_type'=>'village']); //Ciharashas
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12650, 'regionable_type'=>'village']); //Mulyasari
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12651, 'regionable_type'=>'village']); //Munjul
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12652, 'regionable_type'=>'village']); //Rahong
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12653, 'regionable_type'=>'village']); //Rancagoong
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12654, 'regionable_type'=>'village']); //Sindangsari
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12655, 'regionable_type'=>'village']); //Sirnagalih
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12656, 'regionable_type'=>'village']); //Sukakerta
                DB::table('regionables')->insert(['region_id'=>1955, 'regionable_id'=>12657, 'regionable_type'=>'village']); //Sukasari
            DB::table('regions')->insert(['id'=>1956, 'parent'=>1940, 'code'=>'4329', 'type'=>'districts', 'name'=>'Districts 4329, City 432, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1956, 'regionable_id'=>1357, 'regionable_type'=>'districts']); //Cikalongkulon
            DB::table('regionables')->insert(['region_id'=>1956, 'regionable_id'=>1358, 'regionable_type'=>'districts']); //Mande
                DB::table('regions')->insert(['id'=>1957, 'parent'=>1956, 'code'=>'43292', 'type'=>'village', 'name'=>'Village 43292, Districts 4329, City 432, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12676, 'regionable_type'=>'village']); //Bobojong
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12677, 'regionable_type'=>'village']); //Ciandam
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12678, 'regionable_type'=>'village']); //Cikidangbayabang
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12679, 'regionable_type'=>'village']); //Jamali
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12680, 'regionable_type'=>'village']); //Kademangan
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12681, 'regionable_type'=>'village']); //Kutawaringin
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12682, 'regionable_type'=>'village']); //Leuwikoja
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12683, 'regionable_type'=>'village']); //Mande
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12684, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12685, 'regionable_type'=>'village']); //Mulyasari
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12686, 'regionable_type'=>'village']); //Murnisari
                DB::table('regionables')->insert(['region_id'=>1957, 'regionable_id'=>12687, 'regionable_type'=>'village']); //Sukamanah
        DB::table('regions')->insert(['id'=>1958, 'parent'=>1678, 'code'=>'433', 'type'=>'city', 'name'=>'City 433, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1958, 'regionable_id'=>75, 'regionable_type'=>'city']); //Sukabumi city
        DB::table('regionables')->insert(['region_id'=>1958, 'regionable_id'=>76, 'regionable_type'=>'city']); //Sukabumi regencies
            DB::table('regions')->insert(['id'=>1959, 'parent'=>1958, 'code'=>'4335', 'type'=>'districts', 'name'=>'Districts 4335, City 433, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1256, 'regionable_type'=>'districts']); //Cibadak
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1257, 'regionable_type'=>'districts']); //Bojong Genteng
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1258, 'regionable_type'=>'districts']); //Kalapa Nunggal
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1259, 'regionable_type'=>'districts']); //Parakan Salak
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1260, 'regionable_type'=>'districts']); //Ciambar
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1261, 'regionable_type'=>'districts']); //Nagrak
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1262, 'regionable_type'=>'districts']); //Parung Kuda
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1263, 'regionable_type'=>'districts']); //Cidahu
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1264, 'regionable_type'=>'districts']); //Cicurug
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1310, 'regionable_type'=>'districts']); //Cibadak
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1311, 'regionable_type'=>'districts']); //Bojong Genteng
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1312, 'regionable_type'=>'districts']); //Kalapa Nunggal
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1313, 'regionable_type'=>'districts']); //Parakan Salak
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1314, 'regionable_type'=>'districts']); //Ciambar
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1315, 'regionable_type'=>'districts']); //Nagrak
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1316, 'regionable_type'=>'districts']); //Parung Kuda
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1317, 'regionable_type'=>'districts']); //Cidahu
            DB::table('regionables')->insert(['region_id'=>1959, 'regionable_id'=>1318, 'regionable_type'=>'districts']); //Cicurug
                DB::table('regions')->insert(['id'=>1960, 'parent'=>1959, 'code'=>'43359', 'type'=>'village', 'name'=>'Village 43359, Districts 4335, City 433, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11844, 'regionable_type'=>'village']); //Bangbayang
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11845, 'regionable_type'=>'village']); //Benda
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11846, 'regionable_type'=>'village']); //Caringin
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11847, 'regionable_type'=>'village']); //Cicurug
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11848, 'regionable_type'=>'village']); //Cisaat
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11849, 'regionable_type'=>'village']); //Kutajaya
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11850, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11851, 'regionable_type'=>'village']); //Nanggerang
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11852, 'regionable_type'=>'village']); //Nyangkowek
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11853, 'regionable_type'=>'village']); //Pasawahan
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11854, 'regionable_type'=>'village']); //Purwasari
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11855, 'regionable_type'=>'village']); //Tenjoayu
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>11856, 'regionable_type'=>'village']); //Tenjolaya
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12245, 'regionable_type'=>'village']); //Bangbayang
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12246, 'regionable_type'=>'village']); //Benda
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12247, 'regionable_type'=>'village']); //Caringin
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12248, 'regionable_type'=>'village']); //Cicurug
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12249, 'regionable_type'=>'village']); //Cisaat
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12250, 'regionable_type'=>'village']); //Kutajaya
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12251, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12252, 'regionable_type'=>'village']); //Nanggerang
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12253, 'regionable_type'=>'village']); //Nyangkowek
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12254, 'regionable_type'=>'village']); //Pasawahan
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12255, 'regionable_type'=>'village']); //Purwasari
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12256, 'regionable_type'=>'village']); //Tenjoayu
                DB::table('regionables')->insert(['region_id'=>1960, 'regionable_id'=>12257, 'regionable_type'=>'village']); //Tenjolaya
            DB::table('regions')->insert(['id'=>1961, 'parent'=>1958, 'code'=>'4336', 'type'=>'districts', 'name'=>'Districts 4336, City 433, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1265, 'regionable_type'=>'districts']); //Simpenan
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1266, 'regionable_type'=>'districts']); //Warung Kiara
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1267, 'regionable_type'=>'districts']); //Bantargadung
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1268, 'regionable_type'=>'districts']); //Pelabuhan/palabuhan Ratu
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1269, 'regionable_type'=>'districts']); //Cikakak
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1270, 'regionable_type'=>'districts']); //Cisolok
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1271, 'regionable_type'=>'districts']); //Cikidang
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1272, 'regionable_type'=>'districts']); //Kabandungan
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1319, 'regionable_type'=>'districts']); //Simpenan
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1320, 'regionable_type'=>'districts']); //Warung Kiara
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1321, 'regionable_type'=>'districts']); //Bantargadung
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1322, 'regionable_type'=>'districts']); //Pelabuhan/palabuhan Ratu
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1323, 'regionable_type'=>'districts']); //Cikakak
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1324, 'regionable_type'=>'districts']); //Cisolok
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1325, 'regionable_type'=>'districts']); //Cikidang
            DB::table('regionables')->insert(['region_id'=>1961, 'regionable_id'=>1326, 'regionable_type'=>'districts']); //Kabandungan
                DB::table('regions')->insert(['id'=>1962, 'parent'=>1961, 'code'=>'43368', 'type'=>'village', 'name'=>'Village 43368, Districts 4336, City 433, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>11921, 'regionable_type'=>'village']); //Cianaga
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>11922, 'regionable_type'=>'village']); //Cihamerang
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>11923, 'regionable_type'=>'village']); //Cipeuteuy
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>11924, 'regionable_type'=>'village']); //Kabandungan
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>11925, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>11926, 'regionable_type'=>'village']); //Tugubandung
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>12322, 'regionable_type'=>'village']); //Cianaga
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>12323, 'regionable_type'=>'village']); //Cihamerang
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>12324, 'regionable_type'=>'village']); //Cipeuteuy
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>12325, 'regionable_type'=>'village']); //Kabandungan
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>12326, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>1962, 'regionable_id'=>12327, 'regionable_type'=>'village']); //Tugubandung
        DB::table('regions')->insert(['id'=>1963, 'parent'=>1678, 'code'=>'441', 'type'=>'city', 'name'=>'City 441, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1963, 'regionable_id'=>78, 'regionable_type'=>'city']); //Garut regencies
            DB::table('regions')->insert(['id'=>1964, 'parent'=>1963, 'code'=>'4411', 'type'=>'districts', 'name'=>'Districts 4411, City 441, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1964, 'regionable_id'=>1359, 'regionable_type'=>'districts']); //Garut Kota
            DB::table('regionables')->insert(['region_id'=>1964, 'regionable_id'=>1360, 'regionable_type'=>'districts']); //Sucinaraja
            DB::table('regionables')->insert(['region_id'=>1964, 'regionable_id'=>1361, 'regionable_type'=>'districts']); //Cigedug
            DB::table('regionables')->insert(['region_id'=>1964, 'regionable_id'=>1362, 'regionable_type'=>'districts']); //Leles
                DB::table('regions')->insert(['id'=>1965, 'parent'=>1964, 'code'=>'44119', 'type'=>'village', 'name'=>'Village 44119, Districts 4411, City 441, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1965, 'regionable_id'=>12698, 'regionable_type'=>'village']); //Muara Sanding
                DB::table('regionables')->insert(['region_id'=>1965, 'regionable_id'=>12711, 'regionable_type'=>'village']); //Cangkuang
            DB::table('regions')->insert(['id'=>1966, 'parent'=>1963, 'code'=>'4415', 'type'=>'districts', 'name'=>'Districts 4415, City 441, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1966, 'regionable_id'=>1362, 'regionable_type'=>'districts']); //Leles
            DB::table('regionables')->insert(['region_id'=>1966, 'regionable_id'=>1363, 'regionable_type'=>'districts']); //Tarogong Kidul
            DB::table('regionables')->insert(['region_id'=>1966, 'regionable_id'=>1364, 'regionable_type'=>'districts']); //Tarogong Kaler
            DB::table('regionables')->insert(['region_id'=>1966, 'regionable_id'=>1365, 'regionable_type'=>'districts']); //Kadungora
                DB::table('regions')->insert(['id'=>1967, 'parent'=>1966, 'code'=>'44153', 'type'=>'village', 'name'=>'Village 44153, Districts 4415, City 441, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12748, 'regionable_type'=>'village']); //Cikembulan
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12749, 'regionable_type'=>'village']); //Cisaat
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12750, 'regionable_type'=>'village']); //Gandamekar
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12751, 'regionable_type'=>'village']); //Harumansari
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12752, 'regionable_type'=>'village']); //Hegarsari
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12753, 'regionable_type'=>'village']); //Kadungora
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12754, 'regionable_type'=>'village']); //Karangmulya
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12755, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12756, 'regionable_type'=>'village']); //Mandalasari
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12757, 'regionable_type'=>'village']); //Mekarbakti
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12758, 'regionable_type'=>'village']); //Neglasari
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12759, 'regionable_type'=>'village']); //Rancasalak
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12760, 'regionable_type'=>'village']); //Talagasari
                DB::table('regionables')->insert(['region_id'=>1967, 'regionable_id'=>12761, 'regionable_type'=>'village']); //Tanggulun
            DB::table('regions')->insert(['id'=>1968, 'parent'=>1963, 'code'=>'4416', 'type'=>'districts', 'name'=>'Districts 4416, City 441, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1366, 'regionable_type'=>'districts']); //Pasirwangi
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1367, 'regionable_type'=>'districts']); //Samarang
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1368, 'regionable_type'=>'districts']); //Bayongbong
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1369, 'regionable_type'=>'districts']); //Cisurupan
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1370, 'regionable_type'=>'districts']); //Sukaresmi
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1371, 'regionable_type'=>'districts']); //Pakenjeng
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1372, 'regionable_type'=>'districts']); //Pamulihan
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1373, 'regionable_type'=>'districts']); //Bungbulang
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1374, 'regionable_type'=>'districts']); //Mekarmukti
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1375, 'regionable_type'=>'districts']); //Caringin
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1376, 'regionable_type'=>'districts']); //Cisewu
            DB::table('regionables')->insert(['region_id'=>1968, 'regionable_id'=>1377, 'regionable_type'=>'districts']); //Talegong
                DB::table('regions')->insert(['id'=>1969, 'parent'=>1968, 'code'=>'44167', 'type'=>'village', 'name'=>'Village 44167, Districts 4416, City 441, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1969, 'regionable_id'=>12880, 'regionable_type'=>'village']); //Mekarmukti
                DB::table('regionables')->insert(['region_id'=>1969, 'regionable_id'=>12881, 'regionable_type'=>'village']); //Mekarmulya
                DB::table('regionables')->insert(['region_id'=>1969, 'regionable_id'=>12882, 'regionable_type'=>'village']); //Mekarwangi
                DB::table('regionables')->insert(['region_id'=>1969, 'regionable_id'=>12883, 'regionable_type'=>'village']); //Selaawi
                DB::table('regionables')->insert(['region_id'=>1969, 'regionable_id'=>12884, 'regionable_type'=>'village']); //Sukalaksana
                DB::table('regionables')->insert(['region_id'=>1969, 'regionable_id'=>12885, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1969, 'regionable_id'=>12886, 'regionable_type'=>'village']); //Sukamulya
            DB::table('regions')->insert(['id'=>1970, 'parent'=>1963, 'code'=>'4417', 'type'=>'districts', 'name'=>'Districts 4417, City 441, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1378, 'regionable_type'=>'districts']); //Cikajang
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1379, 'regionable_type'=>'districts']); //Banjarwangi
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1380, 'regionable_type'=>'districts']); //Singajaya
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1381, 'regionable_type'=>'districts']); //Cihurip
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1382, 'regionable_type'=>'districts']); //Cisompet
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1383, 'regionable_type'=>'districts']); //Pameungpeuk
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1384, 'regionable_type'=>'districts']); //Cibalong
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1385, 'regionable_type'=>'districts']); //Cikelet
            DB::table('regionables')->insert(['region_id'=>1970, 'regionable_id'=>1386, 'regionable_type'=>'districts']); //Peundeuy
                DB::table('regions')->insert(['id'=>1971, 'parent'=>1970, 'code'=>'44178', 'type'=>'village', 'name'=>'Village 44178, Districts 4417, City 441, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1971, 'regionable_id'=>12964, 'regionable_type'=>'village']); //Pangrumasan
                DB::table('regionables')->insert(['region_id'=>1971, 'regionable_id'=>12965, 'regionable_type'=>'village']); //Peundeuy
                DB::table('regionables')->insert(['region_id'=>1971, 'regionable_id'=>12966, 'regionable_type'=>'village']); //Purwajaya
                DB::table('regionables')->insert(['region_id'=>1971, 'regionable_id'=>12967, 'regionable_type'=>'village']); //Saribakti
                DB::table('regionables')->insert(['region_id'=>1971, 'regionable_id'=>12968, 'regionable_type'=>'village']); //Sukanagara
                DB::table('regionables')->insert(['region_id'=>1971, 'regionable_id'=>12969, 'regionable_type'=>'village']); //Toblong
            DB::table('regions')->insert(['id'=>1972, 'parent'=>1963, 'code'=>'4418', 'type'=>'districts', 'name'=>'Districts 4418, City 441, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1387, 'regionable_type'=>'districts']); //Cilawu
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1388, 'regionable_type'=>'districts']); //Karangpawitan
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1389, 'regionable_type'=>'districts']); //Pangatikan
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1390, 'regionable_type'=>'districts']); //Wanaraja
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1391, 'regionable_type'=>'districts']); //Karangtengah
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1392, 'regionable_type'=>'districts']); //Sukawening
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1393, 'regionable_type'=>'districts']); //Cibatu
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1394, 'regionable_type'=>'districts']); //Kersamanah
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1395, 'regionable_type'=>'districts']); //Blubur Limbangan
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1396, 'regionable_type'=>'districts']); //Selaawi
            DB::table('regionables')->insert(['region_id'=>1972, 'regionable_id'=>1397, 'regionable_type'=>'districts']); //Malangbong
                DB::table('regions')->insert(['id'=>1973, 'parent'=>1972, 'code'=>'44188', 'type'=>'village', 'name'=>'Village 44188, Districts 4418, City 441, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13078, 'regionable_type'=>'village']); //Barudua
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13079, 'regionable_type'=>'village']); //Bunisari
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13080, 'regionable_type'=>'village']); //Campaka
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13081, 'regionable_type'=>'village']); //Cibunar
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13082, 'regionable_type'=>'village']); //Cihaurkuning
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13083, 'regionable_type'=>'village']); //Cikarag
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13084, 'regionable_type'=>'village']); //Cilampuyang
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13085, 'regionable_type'=>'village']); //Cinagara
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13086, 'regionable_type'=>'village']); //Cisitu
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13087, 'regionable_type'=>'village']); //Citeras
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13088, 'regionable_type'=>'village']); //Girimakmur
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13089, 'regionable_type'=>'village']); //Karangmulya
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13090, 'regionable_type'=>'village']); //Kutanagara
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13091, 'regionable_type'=>'village']); //Lewobaru
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13092, 'regionable_type'=>'village']); //Malangbong
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13093, 'regionable_type'=>'village']); //Mekar Mulya
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13094, 'regionable_type'=>'village']); //Mekarasih
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13095, 'regionable_type'=>'village']); //Sakawayana
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13096, 'regionable_type'=>'village']); //Sanding
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13097, 'regionable_type'=>'village']); //Sekarwangi
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13098, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13099, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13100, 'regionable_type'=>'village']); //Sukarasa
                DB::table('regionables')->insert(['region_id'=>1973, 'regionable_id'=>13101, 'regionable_type'=>'village']); //Sukaratu
            DB::table('regions')->insert(['id'=>1974, 'parent'=>1963, 'code'=>'4419', 'type'=>'districts', 'name'=>'Districts 4419, City 441, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1974, 'regionable_id'=>1398, 'regionable_type'=>'districts']); //Banyuresmi
            DB::table('regionables')->insert(['region_id'=>1974, 'regionable_id'=>1399, 'regionable_type'=>'districts']); //Leuwigoong
            DB::table('regionables')->insert(['region_id'=>1974, 'regionable_id'=>1400, 'regionable_type'=>'districts']); //Cibiuk
                DB::table('regions')->insert(['id'=>1975, 'parent'=>1974, 'code'=>'44193', 'type'=>'village', 'name'=>'Village 44193, Districts 4419, City 441, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1975, 'regionable_id'=>13125, 'regionable_type'=>'village']); //Cibiuk Kaler
                DB::table('regionables')->insert(['region_id'=>1975, 'regionable_id'=>13126, 'regionable_type'=>'village']); //Cibiuk Kidul
                DB::table('regionables')->insert(['region_id'=>1975, 'regionable_id'=>13127, 'regionable_type'=>'village']); //Cipareuan
                DB::table('regionables')->insert(['region_id'=>1975, 'regionable_id'=>13128, 'regionable_type'=>'village']); //Lingkungpasir
                DB::table('regionables')->insert(['region_id'=>1975, 'regionable_id'=>13129, 'regionable_type'=>'village']); //Majasari
        DB::table('regions')->insert(['id'=>1976, 'parent'=>1678, 'code'=>'451', 'type'=>'city', 'name'=>'City 451, Province 4']);
        DB::table('regionables')->insert(['region_id'=>1976, 'regionable_id'=>79, 'regionable_type'=>'city']); //Cirebon city
        DB::table('regionables')->insert(['region_id'=>1976, 'regionable_id'=>80, 'regionable_type'=>'city']); //Cirebon regencies
            DB::table('regions')->insert(['id'=>1977, 'parent'=>1976, 'code'=>'4511', 'type'=>'districts', 'name'=>'Districts 4511, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1977, 'regionable_id'=>1401, 'regionable_type'=>'districts']); //Lemahwungkuk
            DB::table('regionables')->insert(['region_id'=>1977, 'regionable_id'=>1402, 'regionable_type'=>'districts']); //Pekalipan
            DB::table('regionables')->insert(['region_id'=>1977, 'regionable_id'=>1446, 'regionable_type'=>'districts']); //Lemahwungkuk
            DB::table('regionables')->insert(['region_id'=>1977, 'regionable_id'=>1447, 'regionable_type'=>'districts']); //Pekalipan
                DB::table('regions')->insert(['id'=>1978, 'parent'=>1977, 'code'=>'45115', 'type'=>'village', 'name'=>'Village 45115, Districts 4511, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1978, 'regionable_id'=>13134, 'regionable_type'=>'village']); //Jagasatru
                DB::table('regionables')->insert(['region_id'=>1978, 'regionable_id'=>13580, 'regionable_type'=>'village']); //Jagasatru
                DB::table('regions')->insert(['id'=>1979, 'parent'=>1977, 'code'=>'45116', 'type'=>'village', 'name'=>'Village 45116, Districts 4511, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1979, 'regionable_id'=>13135, 'regionable_type'=>'village']); //Pulasaren
                DB::table('regionables')->insert(['region_id'=>1979, 'regionable_id'=>13581, 'regionable_type'=>'village']); //Pulasaren
                DB::table('regions')->insert(['id'=>1980, 'parent'=>1977, 'code'=>'45117', 'type'=>'village', 'name'=>'Village 45117, Districts 4511, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1980, 'regionable_id'=>13136, 'regionable_type'=>'village']); //Pekalipan
                DB::table('regionables')->insert(['region_id'=>1980, 'regionable_id'=>13582, 'regionable_type'=>'village']); //Pekalipan
                DB::table('regions')->insert(['id'=>1981, 'parent'=>1977, 'code'=>'45118', 'type'=>'village', 'name'=>'Village 45118, Districts 4511, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1981, 'regionable_id'=>13137, 'regionable_type'=>'village']); //Pekalangan
                DB::table('regionables')->insert(['region_id'=>1981, 'regionable_id'=>13583, 'regionable_type'=>'village']); //Pekalangan
            DB::table('regions')->insert(['id'=>1982, 'parent'=>1976, 'code'=>'4512', 'type'=>'districts', 'name'=>'Districts 4512, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1982, 'regionable_id'=>1403, 'regionable_type'=>'districts']); //Kejaksan
            DB::table('regionables')->insert(['region_id'=>1982, 'regionable_id'=>1448, 'regionable_type'=>'districts']); //Kejaksan
                DB::table('regions')->insert(['id'=>1983, 'parent'=>1982, 'code'=>'45121', 'type'=>'village', 'name'=>'Village 45121, Districts 4512, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1983, 'regionable_id'=>13138, 'regionable_type'=>'village']); //Kebonbaru
                DB::table('regionables')->insert(['region_id'=>1983, 'regionable_id'=>13139, 'regionable_type'=>'village']); //Kesenden
                DB::table('regionables')->insert(['region_id'=>1983, 'regionable_id'=>13584, 'regionable_type'=>'village']); //Kebonbaru
                DB::table('regionables')->insert(['region_id'=>1983, 'regionable_id'=>13585, 'regionable_type'=>'village']); //Kesenden
                DB::table('regions')->insert(['id'=>1984, 'parent'=>1982, 'code'=>'45122', 'type'=>'village', 'name'=>'Village 45122, Districts 4512, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1984, 'regionable_id'=>13140, 'regionable_type'=>'village']); //Sukapura
                DB::table('regionables')->insert(['region_id'=>1984, 'regionable_id'=>13586, 'regionable_type'=>'village']); //Sukapura
                DB::table('regions')->insert(['id'=>1985, 'parent'=>1982, 'code'=>'45123', 'type'=>'village', 'name'=>'Village 45123, Districts 4512, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1985, 'regionable_id'=>13141, 'regionable_type'=>'village']); //Kejaksan
                DB::table('regionables')->insert(['region_id'=>1985, 'regionable_id'=>13587, 'regionable_type'=>'village']); //Kejaksan
            DB::table('regions')->insert(['id'=>1986, 'parent'=>1976, 'code'=>'4513', 'type'=>'districts', 'name'=>'Districts 4513, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1986, 'regionable_id'=>1404, 'regionable_type'=>'districts']); //Kesambi
            DB::table('regionables')->insert(['region_id'=>1986, 'regionable_id'=>1449, 'regionable_type'=>'districts']); //Kesambi
                DB::table('regions')->insert(['id'=>1987, 'parent'=>1986, 'code'=>'45131', 'type'=>'village', 'name'=>'Village 45131, Districts 4513, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1987, 'regionable_id'=>13142, 'regionable_type'=>'village']); //Karyamulya
                DB::table('regionables')->insert(['region_id'=>1987, 'regionable_id'=>13143, 'regionable_type'=>'village']); //Pekiringan
                DB::table('regionables')->insert(['region_id'=>1987, 'regionable_id'=>13588, 'regionable_type'=>'village']); //Karyamulya
                DB::table('regionables')->insert(['region_id'=>1987, 'regionable_id'=>13589, 'regionable_type'=>'village']); //Pekiringan
                DB::table('regions')->insert(['id'=>1988, 'parent'=>1986, 'code'=>'45132', 'type'=>'village', 'name'=>'Village 45132, Districts 4513, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1988, 'regionable_id'=>13144, 'regionable_type'=>'village']); //Sunyaragi
                DB::table('regionables')->insert(['region_id'=>1988, 'regionable_id'=>13590, 'regionable_type'=>'village']); //Sunyaragi
                DB::table('regions')->insert(['id'=>1989, 'parent'=>1986, 'code'=>'45133', 'type'=>'village', 'name'=>'Village 45133, Districts 4513, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1989, 'regionable_id'=>13145, 'regionable_type'=>'village']); //Drajat
                DB::table('regionables')->insert(['region_id'=>1989, 'regionable_id'=>13591, 'regionable_type'=>'village']); //Drajat
                DB::table('regions')->insert(['id'=>1990, 'parent'=>1986, 'code'=>'45134', 'type'=>'village', 'name'=>'Village 45134, Districts 4513, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1990, 'regionable_id'=>13146, 'regionable_type'=>'village']); //Kesambi
                DB::table('regionables')->insert(['region_id'=>1990, 'regionable_id'=>13592, 'regionable_type'=>'village']); //Kesambi
            DB::table('regions')->insert(['id'=>1991, 'parent'=>1976, 'code'=>'4514', 'type'=>'districts', 'name'=>'Districts 4514, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1991, 'regionable_id'=>1405, 'regionable_type'=>'districts']); //Harjamukti
            DB::table('regionables')->insert(['region_id'=>1991, 'regionable_id'=>1450, 'regionable_type'=>'districts']); //Harjamukti
                DB::table('regions')->insert(['id'=>1992, 'parent'=>1991, 'code'=>'45141', 'type'=>'village', 'name'=>'Village 45141, Districts 4514, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1992, 'regionable_id'=>13147, 'regionable_type'=>'village']); //Larangan
                DB::table('regionables')->insert(['region_id'=>1992, 'regionable_id'=>13593, 'regionable_type'=>'village']); //Larangan
                DB::table('regions')->insert(['id'=>1993, 'parent'=>1991, 'code'=>'45142', 'type'=>'village', 'name'=>'Village 45142, Districts 4514, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1993, 'regionable_id'=>13148, 'regionable_type'=>'village']); //Kecapi
                DB::table('regionables')->insert(['region_id'=>1993, 'regionable_id'=>13594, 'regionable_type'=>'village']); //Kecapi
                DB::table('regions')->insert(['id'=>1994, 'parent'=>1991, 'code'=>'45143', 'type'=>'village', 'name'=>'Village 45143, Districts 4514, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1994, 'regionable_id'=>13149, 'regionable_type'=>'village']); //Harjamukti
                DB::table('regionables')->insert(['region_id'=>1994, 'regionable_id'=>13595, 'regionable_type'=>'village']); //Harjamukti
                DB::table('regions')->insert(['id'=>1995, 'parent'=>1991, 'code'=>'45144', 'type'=>'village', 'name'=>'Village 45144, Districts 4514, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1995, 'regionable_id'=>13150, 'regionable_type'=>'village']); //Kalijaga
                DB::table('regionables')->insert(['region_id'=>1995, 'regionable_id'=>13596, 'regionable_type'=>'village']); //Kalijaga
                DB::table('regions')->insert(['id'=>1996, 'parent'=>1991, 'code'=>'45145', 'type'=>'village', 'name'=>'Village 45145, Districts 4514, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1996, 'regionable_id'=>13151, 'regionable_type'=>'village']); //Argasunya
                DB::table('regionables')->insert(['region_id'=>1996, 'regionable_id'=>13597, 'regionable_type'=>'village']); //Argasunya
            DB::table('regions')->insert(['id'=>1997, 'parent'=>1976, 'code'=>'4515', 'type'=>'districts', 'name'=>'Districts 4515, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1406, 'regionable_type'=>'districts']); //Gunung Jati (cirebon Utara)
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1407, 'regionable_type'=>'districts']); //Suranenggala
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1408, 'regionable_type'=>'districts']); //Kapetakan
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1409, 'regionable_type'=>'districts']); //Tengah Tani
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1410, 'regionable_type'=>'districts']); //Kedawung
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1411, 'regionable_type'=>'districts']); //Plered
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1412, 'regionable_type'=>'districts']); //Weru
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1413, 'regionable_type'=>'districts']); //Plumbon
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1414, 'regionable_type'=>'districts']); //Depok
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1415, 'regionable_type'=>'districts']); //Jamblang
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1416, 'regionable_type'=>'districts']); //Klangenan
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1451, 'regionable_type'=>'districts']); //Gunung Jati (cirebon Utara)
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1452, 'regionable_type'=>'districts']); //Suranenggala
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1453, 'regionable_type'=>'districts']); //Kapetakan
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1454, 'regionable_type'=>'districts']); //Tengah Tani
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1455, 'regionable_type'=>'districts']); //Kedawung
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1456, 'regionable_type'=>'districts']); //Plered
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1457, 'regionable_type'=>'districts']); //Weru
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1458, 'regionable_type'=>'districts']); //Plumbon
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1459, 'regionable_type'=>'districts']); //Depok
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1460, 'regionable_type'=>'districts']); //Jamblang
            DB::table('regionables')->insert(['region_id'=>1997, 'regionable_id'=>1461, 'regionable_type'=>'districts']); //Klangenan
                DB::table('regions')->insert(['id'=>1998, 'parent'=>1997, 'code'=>'45156', 'type'=>'village', 'name'=>'Village 45156, Districts 4515, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13247, 'regionable_type'=>'village']); //Bakung Kidul
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13248, 'regionable_type'=>'village']); //Bakung Lor
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13249, 'regionable_type'=>'village']); //Bojong Lor
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13250, 'regionable_type'=>'village']); //Bojong Wetan
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13251, 'regionable_type'=>'village']); //Jamblang
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13252, 'regionable_type'=>'village']); //Orimalang
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13253, 'regionable_type'=>'village']); //Sitiwinangun
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13254, 'regionable_type'=>'village']); //Wangunharja
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13255, 'regionable_type'=>'village']); //Bangodua
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13256, 'regionable_type'=>'village']); //Danawinangun
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13257, 'regionable_type'=>'village']); //Jemaras Kidul
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13258, 'regionable_type'=>'village']); //Jemaras Lor
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13259, 'regionable_type'=>'village']); //Klangenan
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13260, 'regionable_type'=>'village']); //Kreyo
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13261, 'regionable_type'=>'village']); //Pekantingan
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13262, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13263, 'regionable_type'=>'village']); //Slangit
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13693, 'regionable_type'=>'village']); //Bakung Kidul
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13694, 'regionable_type'=>'village']); //Bakung Lor
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13695, 'regionable_type'=>'village']); //Bojong Lor
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13696, 'regionable_type'=>'village']); //Bojong Wetan
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13697, 'regionable_type'=>'village']); //Jamblang
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13698, 'regionable_type'=>'village']); //Orimalang
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13699, 'regionable_type'=>'village']); //Sitiwinangun
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13700, 'regionable_type'=>'village']); //Wangunharja
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13701, 'regionable_type'=>'village']); //Bangodua
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13702, 'regionable_type'=>'village']); //Danawinangun
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13703, 'regionable_type'=>'village']); //Jemaras Kidul
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13704, 'regionable_type'=>'village']); //Jemaras Lor
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13705, 'regionable_type'=>'village']); //Klangenan
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13706, 'regionable_type'=>'village']); //Kreyo
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13707, 'regionable_type'=>'village']); //Pekantingan
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13708, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>1998, 'regionable_id'=>13709, 'regionable_type'=>'village']); //Slangit
            DB::table('regions')->insert(['id'=>1999, 'parent'=>1976, 'code'=>'4516', 'type'=>'districts', 'name'=>'Districts 4516, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1417, 'regionable_type'=>'districts']); //Palimanan
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1418, 'regionable_type'=>'districts']); //Gempol
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1419, 'regionable_type'=>'districts']); //Arjawinangun
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1420, 'regionable_type'=>'districts']); //Panguragan
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1421, 'regionable_type'=>'districts']); //Gegesik
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1422, 'regionable_type'=>'districts']); //Kaliwedi
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1423, 'regionable_type'=>'districts']); //Susukan
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1424, 'regionable_type'=>'districts']); //Ciwaringin
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1462, 'regionable_type'=>'districts']); //Palimanan
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1463, 'regionable_type'=>'districts']); //Gempol
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1464, 'regionable_type'=>'districts']); //Arjawinangun
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1465, 'regionable_type'=>'districts']); //Panguragan
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1466, 'regionable_type'=>'districts']); //Gegesik
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1467, 'regionable_type'=>'districts']); //Kaliwedi
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1468, 'regionable_type'=>'districts']); //Susukan
            DB::table('regionables')->insert(['region_id'=>1999, 'regionable_id'=>1469, 'regionable_type'=>'districts']); //Ciwaringin
                DB::table('regions')->insert(['id'=>2000, 'parent'=>1999, 'code'=>'45167', 'type'=>'village', 'name'=>'Village 45167, Districts 4516, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13339, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13340, 'regionable_type'=>'village']); //Bringin
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13341, 'regionable_type'=>'village']); //Budur
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13342, 'regionable_type'=>'village']); //Ciwaringin
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13343, 'regionable_type'=>'village']); //Galagamba
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13344, 'regionable_type'=>'village']); //Gintung Kidul
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13345, 'regionable_type'=>'village']); //Gintung Tengah
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13346, 'regionable_type'=>'village']); //Gintungranjeng
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13785, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13786, 'regionable_type'=>'village']); //Bringin
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13787, 'regionable_type'=>'village']); //Budur
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13788, 'regionable_type'=>'village']); //Ciwaringin
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13789, 'regionable_type'=>'village']); //Galagamba
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13790, 'regionable_type'=>'village']); //Gintung Kidul
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13791, 'regionable_type'=>'village']); //Gintung Tengah
                DB::table('regionables')->insert(['region_id'=>2000, 'regionable_id'=>13792, 'regionable_type'=>'village']); //Gintungranjeng
            DB::table('regions')->insert(['id'=>2001, 'parent'=>1976, 'code'=>'4517', 'type'=>'districts', 'name'=>'Districts 4517, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2001, 'regionable_id'=>1425, 'regionable_type'=>'districts']); //Talun (cirebon Selatan)
            DB::table('regionables')->insert(['region_id'=>2001, 'regionable_id'=>1426, 'regionable_type'=>'districts']); //Beber
            DB::table('regionables')->insert(['region_id'=>2001, 'regionable_id'=>1427, 'regionable_type'=>'districts']); //Greged (greget)
            DB::table('regionables')->insert(['region_id'=>2001, 'regionable_id'=>1428, 'regionable_type'=>'districts']); //Mundu
            DB::table('regionables')->insert(['region_id'=>2001, 'regionable_id'=>1470, 'regionable_type'=>'districts']); //Talun (cirebon Selatan)
            DB::table('regionables')->insert(['region_id'=>2001, 'regionable_id'=>1471, 'regionable_type'=>'districts']); //Beber
            DB::table('regionables')->insert(['region_id'=>2001, 'regionable_id'=>1472, 'regionable_type'=>'districts']); //Greged (greget)
            DB::table('regionables')->insert(['region_id'=>2001, 'regionable_id'=>1473, 'regionable_type'=>'districts']); //Mundu
                DB::table('regions')->insert(['id'=>2002, 'parent'=>2001, 'code'=>'45173', 'type'=>'village', 'name'=>'Village 45173, Districts 4517, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13378, 'regionable_type'=>'village']); //Bandengan
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13379, 'regionable_type'=>'village']); //Banjarwangunan
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13380, 'regionable_type'=>'village']); //Citemu
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13381, 'regionable_type'=>'village']); //Luwung
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13382, 'regionable_type'=>'village']); //Mundumesigit
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13383, 'regionable_type'=>'village']); //Mundupesisir
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13384, 'regionable_type'=>'village']); //Pamengkang
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13385, 'regionable_type'=>'village']); //Penpen
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13386, 'regionable_type'=>'village']); //Setupatok
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13387, 'regionable_type'=>'village']); //Sinarrancang
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13388, 'regionable_type'=>'village']); //Suci
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13389, 'regionable_type'=>'village']); //Waruduwur
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13824, 'regionable_type'=>'village']); //Bandengan
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13825, 'regionable_type'=>'village']); //Banjarwangunan
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13826, 'regionable_type'=>'village']); //Citemu
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13827, 'regionable_type'=>'village']); //Luwung
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13828, 'regionable_type'=>'village']); //Mundumesigit
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13829, 'regionable_type'=>'village']); //Mundupesisir
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13830, 'regionable_type'=>'village']); //Pamengkang
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13831, 'regionable_type'=>'village']); //Penpen
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13832, 'regionable_type'=>'village']); //Setupatok
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13833, 'regionable_type'=>'village']); //Sinarrancang
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13834, 'regionable_type'=>'village']); //Suci
                DB::table('regionables')->insert(['region_id'=>2002, 'regionable_id'=>13835, 'regionable_type'=>'village']); //Waruduwur
            DB::table('regions')->insert(['id'=>2003, 'parent'=>1976, 'code'=>'4518', 'type'=>'districts', 'name'=>'Districts 4518, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1427, 'regionable_type'=>'districts']); //Greged (greget)
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1429, 'regionable_type'=>'districts']); //Astanajapura
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1430, 'regionable_type'=>'districts']); //Pangenan
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1431, 'regionable_type'=>'districts']); //Lemahabang
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1432, 'regionable_type'=>'districts']); //Susukan Lebak
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1433, 'regionable_type'=>'districts']); //Karangwareng
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1434, 'regionable_type'=>'districts']); //Karangsembung
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1435, 'regionable_type'=>'districts']); //Waled
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1436, 'regionable_type'=>'districts']); //Pasaleman
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1437, 'regionable_type'=>'districts']); //Ciledug
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1438, 'regionable_type'=>'districts']); //Pabuaran
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1439, 'regionable_type'=>'districts']); //Sedong
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1472, 'regionable_type'=>'districts']); //Greged (greget)
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1474, 'regionable_type'=>'districts']); //Astanajapura
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1475, 'regionable_type'=>'districts']); //Pangenan
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1476, 'regionable_type'=>'districts']); //Lemahabang
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1477, 'regionable_type'=>'districts']); //Susukan Lebak
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1478, 'regionable_type'=>'districts']); //Karangwareng
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1479, 'regionable_type'=>'districts']); //Karangsembung
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1480, 'regionable_type'=>'districts']); //Waled
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1481, 'regionable_type'=>'districts']); //Pasaleman
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1482, 'regionable_type'=>'districts']); //Ciledug
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1483, 'regionable_type'=>'districts']); //Pabuaran
            DB::table('regionables')->insert(['region_id'=>2003, 'regionable_id'=>1484, 'regionable_type'=>'districts']); //Sedong
                DB::table('regions')->insert(['id'=>2004, 'parent'=>2003, 'code'=>'45189', 'type'=>'village', 'name'=>'Village 45189, Districts 4518, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13489, 'regionable_type'=>'village']); //Karangwuni
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13490, 'regionable_type'=>'village']); //Kertawangun
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13491, 'regionable_type'=>'village']); //Panambangan
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13492, 'regionable_type'=>'village']); //Panongan
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13493, 'regionable_type'=>'village']); //Panongan Lor
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13494, 'regionable_type'=>'village']); //Putat
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13495, 'regionable_type'=>'village']); //Sedong Kidul
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13496, 'regionable_type'=>'village']); //Sedong Lor
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13497, 'regionable_type'=>'village']); //Winduhaji
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13498, 'regionable_type'=>'village']); //Windujaya
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13935, 'regionable_type'=>'village']); //Karangwuni
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13936, 'regionable_type'=>'village']); //Kertawangun
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13937, 'regionable_type'=>'village']); //Panambangan
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13938, 'regionable_type'=>'village']); //Panongan
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13939, 'regionable_type'=>'village']); //Panongan Lor
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13940, 'regionable_type'=>'village']); //Putat
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13941, 'regionable_type'=>'village']); //Sedong Kidul
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13942, 'regionable_type'=>'village']); //Sedong Lor
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13943, 'regionable_type'=>'village']); //Winduhaji
                DB::table('regionables')->insert(['region_id'=>2004, 'regionable_id'=>13944, 'regionable_type'=>'village']); //Windujaya
            DB::table('regions')->insert(['id'=>2005, 'parent'=>1976, 'code'=>'4519', 'type'=>'districts', 'name'=>'Districts 4519, City 451, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2005, 'regionable_id'=>1440, 'regionable_type'=>'districts']); //Babakan
            DB::table('regionables')->insert(['region_id'=>2005, 'regionable_id'=>1441, 'regionable_type'=>'districts']); //Gebang
            DB::table('regionables')->insert(['region_id'=>2005, 'regionable_id'=>1442, 'regionable_type'=>'districts']); //Losari
            DB::table('regionables')->insert(['region_id'=>2005, 'regionable_id'=>1443, 'regionable_type'=>'districts']); //Pabedilan
            DB::table('regionables')->insert(['region_id'=>2005, 'regionable_id'=>1485, 'regionable_type'=>'districts']); //Babakan
            DB::table('regionables')->insert(['region_id'=>2005, 'regionable_id'=>1486, 'regionable_type'=>'districts']); //Gebang
            DB::table('regionables')->insert(['region_id'=>2005, 'regionable_id'=>1487, 'regionable_type'=>'districts']); //Losari
            DB::table('regionables')->insert(['region_id'=>2005, 'regionable_id'=>1488, 'regionable_type'=>'districts']); //Pabedilan
                DB::table('regions')->insert(['id'=>2006, 'parent'=>2005, 'code'=>'45193', 'type'=>'village', 'name'=>'Village 45193, Districts 4519, City 451, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13536, 'regionable_type'=>'village']); //Babakan Losari
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13537, 'regionable_type'=>'village']); //Babakan Losari Lor
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13538, 'regionable_type'=>'village']); //Dukuhwidara
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13539, 'regionable_type'=>'village']); //Kalibuntu
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13540, 'regionable_type'=>'village']); //Kalimukti
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13541, 'regionable_type'=>'village']); //Pabedilan Kaler
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13542, 'regionable_type'=>'village']); //Pabedilan Kidul
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13543, 'regionable_type'=>'village']); //Pabedilan Kulon
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13544, 'regionable_type'=>'village']); //Pabedilan Wetan
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13545, 'regionable_type'=>'village']); //Pasuruan
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13546, 'regionable_type'=>'village']); //Sidaresmi
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13547, 'regionable_type'=>'village']); //Silihasih
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13548, 'regionable_type'=>'village']); //Tersana
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13982, 'regionable_type'=>'village']); //Babakan Losari
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13983, 'regionable_type'=>'village']); //Babakan Losari Lor
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13984, 'regionable_type'=>'village']); //Dukuhwidara
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13985, 'regionable_type'=>'village']); //Kalibuntu
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13986, 'regionable_type'=>'village']); //Kalimukti
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13987, 'regionable_type'=>'village']); //Pabedilan Kaler
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13988, 'regionable_type'=>'village']); //Pabedilan Kidul
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13989, 'regionable_type'=>'village']); //Pabedilan Kulon
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13990, 'regionable_type'=>'village']); //Pabedilan Wetan
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13991, 'regionable_type'=>'village']); //Pasuruan
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13992, 'regionable_type'=>'village']); //Sidaresmi
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13993, 'regionable_type'=>'village']); //Silihasih
                DB::table('regionables')->insert(['region_id'=>2006, 'regionable_id'=>13994, 'regionable_type'=>'village']); //Tersana
        DB::table('regions')->insert(['id'=>2007, 'parent'=>1678, 'code'=>'452', 'type'=>'city', 'name'=>'City 452, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2007, 'regionable_id'=>81, 'regionable_type'=>'city']); //Indramayu regencies
            DB::table('regions')->insert(['id'=>2008, 'parent'=>2007, 'code'=>'4521', 'type'=>'districts', 'name'=>'Districts 4521, City 452, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2008, 'regionable_id'=>1491, 'regionable_type'=>'districts']); //Indramayu
            DB::table('regionables')->insert(['region_id'=>2008, 'regionable_id'=>1492, 'regionable_type'=>'districts']); //Kandanghaur
            DB::table('regionables')->insert(['region_id'=>2008, 'regionable_id'=>1493, 'regionable_type'=>'districts']); //Pasekan
            DB::table('regionables')->insert(['region_id'=>2008, 'regionable_id'=>1494, 'regionable_type'=>'districts']); //Balongan
                DB::table('regions')->insert(['id'=>2009, 'parent'=>2008, 'code'=>'45217', 'type'=>'village', 'name'=>'Village 45217, Districts 4521, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2009, 'regionable_id'=>14059, 'regionable_type'=>'village']); //Balongan
                DB::table('regionables')->insert(['region_id'=>2009, 'regionable_id'=>14060, 'regionable_type'=>'village']); //Rawadalem
                DB::table('regionables')->insert(['region_id'=>2009, 'regionable_id'=>14061, 'regionable_type'=>'village']); //Sukareja
                DB::table('regionables')->insert(['region_id'=>2009, 'regionable_id'=>14062, 'regionable_type'=>'village']); //Sukaurip
                DB::table('regionables')->insert(['region_id'=>2009, 'regionable_id'=>14063, 'regionable_type'=>'village']); //Tegalurung
            DB::table('regions')->insert(['id'=>2010, 'parent'=>2007, 'code'=>'4522', 'type'=>'districts', 'name'=>'Districts 4522, City 452, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2010, 'regionable_id'=>1493, 'regionable_type'=>'districts']); //Pasekan
            DB::table('regionables')->insert(['region_id'=>2010, 'regionable_id'=>1495, 'regionable_type'=>'districts']); //Sindang
                DB::table('regions')->insert(['id'=>2011, 'parent'=>2010, 'code'=>'45221', 'type'=>'village', 'name'=>'Village 45221, Districts 4522, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2011, 'regionable_id'=>14069, 'regionable_type'=>'village']); //Penganjang
                DB::table('regionables')->insert(['region_id'=>2011, 'regionable_id'=>14070, 'regionable_type'=>'village']); //Rambatan Wetan
                DB::table('regions')->insert(['id'=>2012, 'parent'=>2010, 'code'=>'45222', 'type'=>'village', 'name'=>'Village 45222, Districts 4522, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2012, 'regionable_id'=>14071, 'regionable_type'=>'village']); //Sindang
                DB::table('regions')->insert(['id'=>2013, 'parent'=>2010, 'code'=>'45223', 'type'=>'village', 'name'=>'Village 45223, Districts 4522, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2013, 'regionable_id'=>14072, 'regionable_type'=>'village']); //Dermayu
                DB::table('regions')->insert(['id'=>2014, 'parent'=>2010, 'code'=>'45224', 'type'=>'village', 'name'=>'Village 45224, Districts 4522, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2014, 'regionable_id'=>14073, 'regionable_type'=>'village']); //Terusan
                DB::table('regions')->insert(['id'=>2015, 'parent'=>2010, 'code'=>'45225', 'type'=>'village', 'name'=>'Village 45225, Districts 4522, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2015, 'regionable_id'=>14074, 'regionable_type'=>'village']); //Panyindangan Kulon
                DB::table('regionables')->insert(['region_id'=>2015, 'regionable_id'=>14075, 'regionable_type'=>'village']); //Panyindangan Wetan
                DB::table('regions')->insert(['id'=>2016, 'parent'=>2010, 'code'=>'45226', 'type'=>'village', 'name'=>'Village 45226, Districts 4522, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2016, 'regionable_id'=>14076, 'regionable_type'=>'village']); //Kenanga
                DB::table('regions')->insert(['id'=>2017, 'parent'=>2010, 'code'=>'45227', 'type'=>'village', 'name'=>'Village 45227, Districts 4522, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2017, 'regionable_id'=>14056, 'regionable_type'=>'village']); //Pagirikan
                DB::table('regionables')->insert(['region_id'=>2017, 'regionable_id'=>14077, 'regionable_type'=>'village']); //Babadan
                DB::table('regionables')->insert(['region_id'=>2017, 'regionable_id'=>14078, 'regionable_type'=>'village']); //Wanantara
            DB::table('regions')->insert(['id'=>2018, 'parent'=>2007, 'code'=>'4525', 'type'=>'districts', 'name'=>'Districts 4525, City 452, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2018, 'regionable_id'=>1492, 'regionable_type'=>'districts']); //Kandanghaur
            DB::table('regionables')->insert(['region_id'=>2018, 'regionable_id'=>1496, 'regionable_type'=>'districts']); //Lohbener
            DB::table('regionables')->insert(['region_id'=>2018, 'regionable_id'=>1497, 'regionable_type'=>'districts']); //Losarang
            DB::table('regionables')->insert(['region_id'=>2018, 'regionable_id'=>1498, 'regionable_type'=>'districts']); //Bongas
            DB::table('regionables')->insert(['region_id'=>2018, 'regionable_id'=>1499, 'regionable_type'=>'districts']); //Anjatan
            DB::table('regionables')->insert(['region_id'=>2018, 'regionable_id'=>1500, 'regionable_type'=>'districts']); //Patrol
            DB::table('regionables')->insert(['region_id'=>2018, 'regionable_id'=>1501, 'regionable_type'=>'districts']); //Sukra
            DB::table('regionables')->insert(['region_id'=>2018, 'regionable_id'=>1502, 'regionable_type'=>'districts']); //Cantigi
                DB::table('regions')->insert(['id'=>2019, 'parent'=>2018, 'code'=>'45258', 'type'=>'village', 'name'=>'Village 45258, Districts 4525, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2019, 'regionable_id'=>14141, 'regionable_type'=>'village']); //Cangkring
                DB::table('regionables')->insert(['region_id'=>2019, 'regionable_id'=>14142, 'regionable_type'=>'village']); //Cantigi Kulon
                DB::table('regionables')->insert(['region_id'=>2019, 'regionable_id'=>14143, 'regionable_type'=>'village']); //Cantigi Wetan
                DB::table('regionables')->insert(['region_id'=>2019, 'regionable_id'=>14144, 'regionable_type'=>'village']); //Lamarantarung
                DB::table('regionables')->insert(['region_id'=>2019, 'regionable_id'=>14145, 'regionable_type'=>'village']); //Panyingkiran Kidul
                DB::table('regionables')->insert(['region_id'=>2019, 'regionable_id'=>14146, 'regionable_type'=>'village']); //Panyingkiran Lor
            DB::table('regions')->insert(['id'=>2020, 'parent'=>2007, 'code'=>'4526', 'type'=>'districts', 'name'=>'Districts 4526, City 452, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2020, 'regionable_id'=>1503, 'regionable_type'=>'districts']); //Lelea
            DB::table('regionables')->insert(['region_id'=>2020, 'regionable_id'=>1504, 'regionable_type'=>'districts']); //Cikedung
            DB::table('regionables')->insert(['region_id'=>2020, 'regionable_id'=>1505, 'regionable_type'=>'districts']); //Trisi/terisi
            DB::table('regionables')->insert(['region_id'=>2020, 'regionable_id'=>1506, 'regionable_type'=>'districts']); //Gabuswetan
            DB::table('regionables')->insert(['region_id'=>2020, 'regionable_id'=>1507, 'regionable_type'=>'districts']); //Gantar
            DB::table('regionables')->insert(['region_id'=>2020, 'regionable_id'=>1508, 'regionable_type'=>'districts']); //Haurgeulis
            DB::table('regionables')->insert(['region_id'=>2020, 'regionable_id'=>1509, 'regionable_type'=>'districts']); //Kroya
                DB::table('regions')->insert(['id'=>2021, 'parent'=>2020, 'code'=>'45265', 'type'=>'village', 'name'=>'Village 45265, Districts 4526, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14201, 'regionable_type'=>'village']); //Jayamulya
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14202, 'regionable_type'=>'village']); //Kroya
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14203, 'regionable_type'=>'village']); //Sukamelang
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14204, 'regionable_type'=>'village']); //Sukaslamet
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14205, 'regionable_type'=>'village']); //Sumberjaya
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14206, 'regionable_type'=>'village']); //Sumbon
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14207, 'regionable_type'=>'village']); //Tanjungkerta
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14208, 'regionable_type'=>'village']); //Temiyang
                DB::table('regionables')->insert(['region_id'=>2021, 'regionable_id'=>14209, 'regionable_type'=>'village']); //Temiyangsari
            DB::table('regions')->insert(['id'=>2022, 'parent'=>2007, 'code'=>'4527', 'type'=>'districts', 'name'=>'Districts 4527, City 452, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2022, 'regionable_id'=>1510, 'regionable_type'=>'districts']); //Widasari
            DB::table('regionables')->insert(['region_id'=>2022, 'regionable_id'=>1511, 'regionable_type'=>'districts']); //Bangodua
            DB::table('regionables')->insert(['region_id'=>2022, 'regionable_id'=>1512, 'regionable_type'=>'districts']); //Tukdana
            DB::table('regionables')->insert(['region_id'=>2022, 'regionable_id'=>1513, 'regionable_type'=>'districts']); //Jatibarang
            DB::table('regionables')->insert(['region_id'=>2022, 'regionable_id'=>1514, 'regionable_type'=>'districts']); //Sukagumiwang
            DB::table('regionables')->insert(['region_id'=>2022, 'regionable_id'=>1515, 'regionable_type'=>'districts']); //Kertasemaya
                DB::table('regions')->insert(['id'=>2023, 'parent'=>2022, 'code'=>'45274', 'type'=>'village', 'name'=>'Village 45274, Districts 4527, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14256, 'regionable_type'=>'village']); //Bondan
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14257, 'regionable_type'=>'village']); //Cadangpinggan
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14258, 'regionable_type'=>'village']); //Cibeber
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14259, 'regionable_type'=>'village']); //Gedangan
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14260, 'regionable_type'=>'village']); //Gunungsari
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14261, 'regionable_type'=>'village']); //Sukagumiwang
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14262, 'regionable_type'=>'village']); //Tersana
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14263, 'regionable_type'=>'village']); //Jambe
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14264, 'regionable_type'=>'village']); //Jengkok
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14265, 'regionable_type'=>'village']); //Kertasemaya
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14266, 'regionable_type'=>'village']); //Kliwed
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14267, 'regionable_type'=>'village']); //Laranganjambe
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14268, 'regionable_type'=>'village']); //Lemahayu
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14269, 'regionable_type'=>'village']); //Manguntara
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14270, 'regionable_type'=>'village']); //Sukawera
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14271, 'regionable_type'=>'village']); //Tegalwirangrong
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14272, 'regionable_type'=>'village']); //Tenajar
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14273, 'regionable_type'=>'village']); //Tenajar Kidul
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14274, 'regionable_type'=>'village']); //Tenajar Lor
                DB::table('regionables')->insert(['region_id'=>2023, 'regionable_id'=>14275, 'regionable_type'=>'village']); //Tulungagung
            DB::table('regions')->insert(['id'=>2024, 'parent'=>2007, 'code'=>'4528', 'type'=>'districts', 'name'=>'Districts 4528, City 452, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2024, 'regionable_id'=>1494, 'regionable_type'=>'districts']); //Balongan
            DB::table('regionables')->insert(['region_id'=>2024, 'regionable_id'=>1516, 'regionable_type'=>'districts']); //Sliyeg
            DB::table('regionables')->insert(['region_id'=>2024, 'regionable_id'=>1517, 'regionable_type'=>'districts']); //Juntinyuat
            DB::table('regionables')->insert(['region_id'=>2024, 'regionable_id'=>1518, 'regionable_type'=>'districts']); //Karangampel
            DB::table('regionables')->insert(['region_id'=>2024, 'regionable_id'=>1519, 'regionable_type'=>'districts']); //Kedokan Bunder
            DB::table('regionables')->insert(['region_id'=>2024, 'regionable_id'=>1520, 'regionable_type'=>'districts']); //Krangkeng
                DB::table('regions')->insert(['id'=>2025, 'parent'=>2024, 'code'=>'45284', 'type'=>'village', 'name'=>'Village 45284, Districts 4528, City 452, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14320, 'regionable_type'=>'village']); //Dukuhjati
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14321, 'regionable_type'=>'village']); //Kalianyar
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14322, 'regionable_type'=>'village']); //Kapringan
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14323, 'regionable_type'=>'village']); //Kedungwungu
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14324, 'regionable_type'=>'village']); //Krangkeng
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14325, 'regionable_type'=>'village']); //Luwunggesik
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14326, 'regionable_type'=>'village']); //Purwajaya
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14327, 'regionable_type'=>'village']); //Singakerta
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14328, 'regionable_type'=>'village']); //Srengseng
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14329, 'regionable_type'=>'village']); //Tanjakan
                DB::table('regionables')->insert(['region_id'=>2025, 'regionable_id'=>14330, 'regionable_type'=>'village']); //Tegalmulya
        DB::table('regions')->insert(['id'=>2026, 'parent'=>1678, 'code'=>'453', 'type'=>'city', 'name'=>'City 453, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2026, 'regionable_id'=>81, 'regionable_type'=>'city']); //Indramayu regencies
        DB::table('regionables')->insert(['region_id'=>2026, 'regionable_id'=>82, 'regionable_type'=>'city']); //Sumedang regencies
            DB::table('regions')->insert(['id'=>2027, 'parent'=>2026, 'code'=>'4531', 'type'=>'districts', 'name'=>'Districts 4531, City 453, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2027, 'regionable_id'=>1522, 'regionable_type'=>'districts']); //Sumedang Selatan
                DB::table('regions')->insert(['id'=>2028, 'parent'=>2027, 'code'=>'45311', 'type'=>'village', 'name'=>'Village 45311, Districts 4531, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14339, 'regionable_type'=>'village']); //Baginda
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14340, 'regionable_type'=>'village']); //Ciherang
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14341, 'regionable_type'=>'village']); //Cipancar
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14342, 'regionable_type'=>'village']); //Citengah
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14343, 'regionable_type'=>'village']); //Gunasari
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14344, 'regionable_type'=>'village']); //Kotakulon
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14345, 'regionable_type'=>'village']); //Margalaksana
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14346, 'regionable_type'=>'village']); //Margamekar
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14347, 'regionable_type'=>'village']); //Mekar Rahayu
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14348, 'regionable_type'=>'village']); //Regol Wetan
                DB::table('regionables')->insert(['region_id'=>2028, 'regionable_id'=>14349, 'regionable_type'=>'village']); //Sukagalih
                DB::table('regions')->insert(['id'=>2029, 'parent'=>2027, 'code'=>'45313', 'type'=>'village', 'name'=>'Village 45313, Districts 4531, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2029, 'regionable_id'=>14350, 'regionable_type'=>'village']); //Pasanggrahan
                DB::table('regions')->insert(['id'=>2030, 'parent'=>2027, 'code'=>'45314', 'type'=>'village', 'name'=>'Village 45314, Districts 4531, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2030, 'regionable_id'=>14351, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regions')->insert(['id'=>2031, 'parent'=>2027, 'code'=>'45315', 'type'=>'village', 'name'=>'Village 45315, Districts 4531, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2031, 'regionable_id'=>14352, 'regionable_type'=>'village']); //Cipameungpeuk
            DB::table('regions')->insert(['id'=>2032, 'parent'=>2026, 'code'=>'4532', 'type'=>'districts', 'name'=>'Districts 4532, City 453, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2032, 'regionable_id'=>1523, 'regionable_type'=>'districts']); //Sumedang Utara
                DB::table('regions')->insert(['id'=>2033, 'parent'=>2032, 'code'=>'45321', 'type'=>'village', 'name'=>'Village 45321, Districts 4532, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14353, 'regionable_type'=>'village']); //Girimukti
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14354, 'regionable_type'=>'village']); //Jatihurip
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14355, 'regionable_type'=>'village']); //Jatimulya
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14356, 'regionable_type'=>'village']); //Kebonjati
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14357, 'regionable_type'=>'village']); //Margamukti
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14358, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14359, 'regionable_type'=>'village']); //Mulyasari
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14360, 'regionable_type'=>'village']); //Padasuka
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14361, 'regionable_type'=>'village']); //Rancamulya
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14362, 'regionable_type'=>'village']); //Sirnamulya
                DB::table('regionables')->insert(['region_id'=>2033, 'regionable_id'=>14363, 'regionable_type'=>'village']); //Talun
                DB::table('regions')->insert(['id'=>2034, 'parent'=>2032, 'code'=>'45322', 'type'=>'village', 'name'=>'Village 45322, Districts 4532, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2034, 'regionable_id'=>14364, 'regionable_type'=>'village']); //Kotakaler
                DB::table('regions')->insert(['id'=>2035, 'parent'=>2032, 'code'=>'45323', 'type'=>'village', 'name'=>'Village 45323, Districts 4532, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2035, 'regionable_id'=>14365, 'regionable_type'=>'village']); //Situ
            DB::table('regions')->insert(['id'=>2036, 'parent'=>2026, 'code'=>'4535', 'type'=>'districts', 'name'=>'Districts 4535, City 453, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2036, 'regionable_id'=>1524, 'regionable_type'=>'districts']); //Cimalaka
            DB::table('regionables')->insert(['region_id'=>2036, 'regionable_id'=>1525, 'regionable_type'=>'districts']); //Tanjungkerta
            DB::table('regionables')->insert(['region_id'=>2036, 'regionable_id'=>1526, 'regionable_type'=>'districts']); //Tanjungmedar
            DB::table('regionables')->insert(['region_id'=>2036, 'regionable_id'=>1527, 'regionable_type'=>'districts']); //Cisarua
            DB::table('regionables')->insert(['region_id'=>2036, 'regionable_id'=>1528, 'regionable_type'=>'districts']); //Ganeas
                DB::table('regions')->insert(['id'=>2037, 'parent'=>2036, 'code'=>'45356', 'type'=>'village', 'name'=>'Village 45356, Districts 4535, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2037, 'regionable_id'=>14407, 'regionable_type'=>'village']); //Cikondang
                DB::table('regionables')->insert(['region_id'=>2037, 'regionable_id'=>14408, 'regionable_type'=>'village']); //Cikoneng
                DB::table('regionables')->insert(['region_id'=>2037, 'regionable_id'=>14409, 'regionable_type'=>'village']); //Dayeuh Luhur
                DB::table('regionables')->insert(['region_id'=>2037, 'regionable_id'=>14410, 'regionable_type'=>'village']); //Ganeas
                DB::table('regionables')->insert(['region_id'=>2037, 'regionable_id'=>14411, 'regionable_type'=>'village']); //Sukaluyu
                DB::table('regionables')->insert(['region_id'=>2037, 'regionable_id'=>14412, 'regionable_type'=>'village']); //Sukawening
                DB::table('regionables')->insert(['region_id'=>2037, 'regionable_id'=>14413, 'regionable_type'=>'village']); //Tanjunghurip
            DB::table('regions')->insert(['id'=>2038, 'parent'=>2026, 'code'=>'4536', 'type'=>'districts', 'name'=>'Districts 4536, City 453, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2038, 'regionable_id'=>1521, 'regionable_type'=>'districts']); //Arahan
            DB::table('regionables')->insert(['region_id'=>2038, 'regionable_id'=>1529, 'regionable_type'=>'districts']); //Rancakalong
            DB::table('regionables')->insert(['region_id'=>2038, 'regionable_id'=>1530, 'regionable_type'=>'districts']); //Tanjungsari
            DB::table('regionables')->insert(['region_id'=>2038, 'regionable_id'=>1531, 'regionable_type'=>'districts']); //Jatinangor
            DB::table('regionables')->insert(['region_id'=>2038, 'regionable_id'=>1532, 'regionable_type'=>'districts']); //Cisitu
            DB::table('regionables')->insert(['region_id'=>2038, 'regionable_id'=>1533, 'regionable_type'=>'districts']); //Cimanggung
            DB::table('regionables')->insert(['region_id'=>2038, 'regionable_id'=>1534, 'regionable_type'=>'districts']); //Pamulihan
            DB::table('regionables')->insert(['region_id'=>2038, 'regionable_id'=>1535, 'regionable_type'=>'districts']); //Sukasari
                DB::table('regions')->insert(['id'=>2039, 'parent'=>2038, 'code'=>'45366', 'type'=>'village', 'name'=>'Village 45366, Districts 4536, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2039, 'regionable_id'=>14480, 'regionable_type'=>'village']); //Banyuresmi
                DB::table('regionables')->insert(['region_id'=>2039, 'regionable_id'=>14481, 'regionable_type'=>'village']); //Genteng
                DB::table('regionables')->insert(['region_id'=>2039, 'regionable_id'=>14482, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>2039, 'regionable_id'=>14483, 'regionable_type'=>'village']); //Nanggerang
                DB::table('regionables')->insert(['region_id'=>2039, 'regionable_id'=>14484, 'regionable_type'=>'village']); //Sindangsari
                DB::table('regionables')->insert(['region_id'=>2039, 'regionable_id'=>14485, 'regionable_type'=>'village']); //Sukarapih
                DB::table('regionables')->insert(['region_id'=>2039, 'regionable_id'=>14486, 'regionable_type'=>'village']); //Sukasari
            DB::table('regions')->insert(['id'=>2040, 'parent'=>2026, 'code'=>'4537', 'type'=>'districts', 'name'=>'Districts 4537, City 453, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2040, 'regionable_id'=>1536, 'regionable_type'=>'districts']); //Situraja
            DB::table('regionables')->insert(['region_id'=>2040, 'regionable_id'=>1537, 'regionable_type'=>'districts']); //Darmaraja
            DB::table('regionables')->insert(['region_id'=>2040, 'regionable_id'=>1538, 'regionable_type'=>'districts']); //Wado
            DB::table('regionables')->insert(['region_id'=>2040, 'regionable_id'=>1539, 'regionable_type'=>'districts']); //Cibugel
            DB::table('regionables')->insert(['region_id'=>2040, 'regionable_id'=>1540, 'regionable_type'=>'districts']); //Jatinunggal
            DB::table('regionables')->insert(['region_id'=>2040, 'regionable_id'=>1541, 'regionable_type'=>'districts']); //Jatigede
                DB::table('regions')->insert(['id'=>2041, 'parent'=>2040, 'code'=>'45377', 'type'=>'village', 'name'=>'Village 45377, Districts 4537, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14543, 'regionable_type'=>'village']); //Cijeungjing
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14544, 'regionable_type'=>'village']); //Cintajaya
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14545, 'regionable_type'=>'village']); //Cipicung
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14546, 'regionable_type'=>'village']); //Ciranggem
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14547, 'regionable_type'=>'village']); //Cisampih
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14548, 'regionable_type'=>'village']); //Jemah
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14549, 'regionable_type'=>'village']); //Kadu
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14550, 'regionable_type'=>'village']); //Kadujaya
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14551, 'regionable_type'=>'village']); //Karedok
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14552, 'regionable_type'=>'village']); //Lebaksiuh
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14553, 'regionable_type'=>'village']); //Mekarasih
                DB::table('regionables')->insert(['region_id'=>2041, 'regionable_id'=>14554, 'regionable_type'=>'village']); //Sukakersa
            DB::table('regions')->insert(['id'=>2042, 'parent'=>2026, 'code'=>'4538', 'type'=>'districts', 'name'=>'Districts 4538, City 453, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2042, 'regionable_id'=>1542, 'regionable_type'=>'districts']); //Paseh
            DB::table('regionables')->insert(['region_id'=>2042, 'regionable_id'=>1543, 'regionable_type'=>'districts']); //Tomo
            DB::table('regionables')->insert(['region_id'=>2042, 'regionable_id'=>1544, 'regionable_type'=>'districts']); //Ujungjaya
                DB::table('regions')->insert(['id'=>2043, 'parent'=>2042, 'code'=>'45383', 'type'=>'village', 'name'=>'Village 45383, Districts 4538, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14574, 'regionable_type'=>'village']); //Cibuluh
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14575, 'regionable_type'=>'village']); //Cipelang
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14576, 'regionable_type'=>'village']); //Kebon Cau
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14577, 'regionable_type'=>'village']); //Kudangwangi
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14578, 'regionable_type'=>'village']); //Palabuan
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14579, 'regionable_type'=>'village']); //Palasari
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14580, 'regionable_type'=>'village']); //Sakurjaya
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14581, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>2043, 'regionable_id'=>14582, 'regionable_type'=>'village']); //Ujungjaya
            DB::table('regions')->insert(['id'=>2044, 'parent'=>2026, 'code'=>'4539', 'type'=>'districts', 'name'=>'Districts 4539, City 453, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2044, 'regionable_id'=>1545, 'regionable_type'=>'districts']); //Conggeang
            DB::table('regionables')->insert(['region_id'=>2044, 'regionable_id'=>1546, 'regionable_type'=>'districts']); //Buahdua
            DB::table('regionables')->insert(['region_id'=>2044, 'regionable_id'=>1547, 'regionable_type'=>'districts']); //Surian
                DB::table('regions')->insert(['id'=>2045, 'parent'=>2044, 'code'=>'45393', 'type'=>'village', 'name'=>'Village 45393, Districts 4539, City 453, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2045, 'regionable_id'=>14609, 'regionable_type'=>'village']); //Pamekarsari
                DB::table('regionables')->insert(['region_id'=>2045, 'regionable_id'=>14610, 'regionable_type'=>'village']); //Ranggasari
                DB::table('regionables')->insert(['region_id'=>2045, 'regionable_id'=>14611, 'regionable_type'=>'village']); //Suriamendal
                DB::table('regionables')->insert(['region_id'=>2045, 'regionable_id'=>14612, 'regionable_type'=>'village']); //Suriamukti
                DB::table('regionables')->insert(['region_id'=>2045, 'regionable_id'=>14613, 'regionable_type'=>'village']); //Surian
                DB::table('regionables')->insert(['region_id'=>2045, 'regionable_id'=>14614, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>2045, 'regionable_id'=>14615, 'regionable_type'=>'village']); //Wanajaya
                DB::table('regionables')->insert(['region_id'=>2045, 'regionable_id'=>14616, 'regionable_type'=>'village']); //Wanasari
        DB::table('regions')->insert(['id'=>2046, 'parent'=>1678, 'code'=>'454', 'type'=>'city', 'name'=>'City 454, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2046, 'regionable_id'=>83, 'regionable_type'=>'city']); //Majalengka regencies
            DB::table('regions')->insert(['id'=>2047, 'parent'=>2046, 'code'=>'4541', 'type'=>'districts', 'name'=>'Districts 4541, City 454, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2047, 'regionable_id'=>1548, 'regionable_type'=>'districts']); //Majalengka
                DB::table('regions')->insert(['id'=>2048, 'parent'=>2047, 'code'=>'45411', 'type'=>'village', 'name'=>'Village 45411, Districts 4541, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2048, 'regionable_id'=>14617, 'regionable_type'=>'village']); //Cibodas
                DB::table('regionables')->insert(['region_id'=>2048, 'regionable_id'=>14618, 'regionable_type'=>'village']); //Kawunggirang
                DB::table('regionables')->insert(['region_id'=>2048, 'regionable_id'=>14619, 'regionable_type'=>'village']); //Kulur
                DB::table('regionables')->insert(['region_id'=>2048, 'regionable_id'=>14620, 'regionable_type'=>'village']); //Majalengka Wetan
                DB::table('regionables')->insert(['region_id'=>2048, 'regionable_id'=>14621, 'regionable_type'=>'village']); //Sidamukti
                DB::table('regionables')->insert(['region_id'=>2048, 'regionable_id'=>14622, 'regionable_type'=>'village']); //Sindangkasih
                DB::table('regions')->insert(['id'=>2049, 'parent'=>2047, 'code'=>'45412', 'type'=>'village', 'name'=>'Village 45412, Districts 4541, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2049, 'regionable_id'=>14623, 'regionable_type'=>'village']); //Cicurug
                DB::table('regions')->insert(['id'=>2050, 'parent'=>2047, 'code'=>'45414', 'type'=>'village', 'name'=>'Village 45414, Districts 4541, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2050, 'regionable_id'=>14624, 'regionable_type'=>'village']); //Tonjong
                DB::table('regions')->insert(['id'=>2051, 'parent'=>2047, 'code'=>'45415', 'type'=>'village', 'name'=>'Village 45415, Districts 4541, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2051, 'regionable_id'=>14625, 'regionable_type'=>'village']); //Cikasarung
                DB::table('regions')->insert(['id'=>2052, 'parent'=>2047, 'code'=>'45416', 'type'=>'village', 'name'=>'Village 45416, Districts 4541, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2052, 'regionable_id'=>14626, 'regionable_type'=>'village']); //Tarikolot
                DB::table('regions')->insert(['id'=>2053, 'parent'=>2047, 'code'=>'45417', 'type'=>'village', 'name'=>'Village 45417, Districts 4541, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2053, 'regionable_id'=>14627, 'regionable_type'=>'village']); //Cijati
                DB::table('regionables')->insert(['region_id'=>2053, 'regionable_id'=>14628, 'regionable_type'=>'village']); //Munjul
                DB::table('regions')->insert(['id'=>2054, 'parent'=>2047, 'code'=>'45418', 'type'=>'village', 'name'=>'Village 45418, Districts 4541, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2054, 'regionable_id'=>14629, 'regionable_type'=>'village']); //Majalengka Kulon
                DB::table('regions')->insert(['id'=>2055, 'parent'=>2047, 'code'=>'45419', 'type'=>'village', 'name'=>'Village 45419, Districts 4541, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2055, 'regionable_id'=>14630, 'regionable_type'=>'village']); //Babakan Jawa
            DB::table('regions')->insert(['id'=>2056, 'parent'=>2046, 'code'=>'4545', 'type'=>'districts', 'name'=>'Districts 4545, City 454, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1549, 'regionable_type'=>'districts']); //Kadipaten
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1550, 'regionable_type'=>'districts']); //Dawuan
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1551, 'regionable_type'=>'districts']); //Kasokandel
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1552, 'regionable_type'=>'districts']); //Jatiwangi
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1553, 'regionable_type'=>'districts']); //Sumberjaya
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1554, 'regionable_type'=>'districts']); //Ligung
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1555, 'regionable_type'=>'districts']); //Kertajati
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1556, 'regionable_type'=>'districts']); //Jatitujuh
            DB::table('regionables')->insert(['region_id'=>2056, 'regionable_id'=>1557, 'regionable_type'=>'districts']); //Panyingkiran
                DB::table('regions')->insert(['id'=>2057, 'parent'=>2056, 'code'=>'45459', 'type'=>'village', 'name'=>'Village 45459, Districts 4545, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14738, 'regionable_type'=>'village']); //Bantrangsana
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14739, 'regionable_type'=>'village']); //Bonang
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14740, 'regionable_type'=>'village']); //Cijurey
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14741, 'regionable_type'=>'village']); //Jatipamor
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14742, 'regionable_type'=>'village']); //Jatiserang
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14743, 'regionable_type'=>'village']); //Karyamukti
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14744, 'regionable_type'=>'village']); //Leuwiseeng
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14745, 'regionable_type'=>'village']); //Panyingkiran
                DB::table('regionables')->insert(['region_id'=>2057, 'regionable_id'=>14746, 'regionable_type'=>'village']); //Pasirmuncang
            DB::table('regions')->insert(['id'=>2058, 'parent'=>2046, 'code'=>'4546', 'type'=>'districts', 'name'=>'Districts 4546, City 454, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1553, 'regionable_type'=>'districts']); //Sumberjaya
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1558, 'regionable_type'=>'districts']); //Maja
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1559, 'regionable_type'=>'districts']); //Argapura
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1560, 'regionable_type'=>'districts']); //Talaga
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1561, 'regionable_type'=>'districts']); //Bantarujeg
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1562, 'regionable_type'=>'districts']); //Malausma
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1563, 'regionable_type'=>'districts']); //Lemahsugih
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1564, 'regionable_type'=>'districts']); //Cikijing
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1565, 'regionable_type'=>'districts']); //Cingambul
            DB::table('regionables')->insert(['region_id'=>2058, 'regionable_id'=>1566, 'regionable_type'=>'districts']); //Banjaran
                DB::table('regions')->insert(['id'=>2059, 'parent'=>2058, 'code'=>'45468', 'type'=>'village', 'name'=>'Village 45468, Districts 4546, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14689, 'regionable_type'=>'village']); //Banjaran
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14867, 'regionable_type'=>'village']); //Banjaran
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14868, 'regionable_type'=>'village']); //Cimeong
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14869, 'regionable_type'=>'village']); //Darmalarang
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14870, 'regionable_type'=>'village']); //Genteng
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14871, 'regionable_type'=>'village']); //Girimulya
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14872, 'regionable_type'=>'village']); //Hegarmanah
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14873, 'regionable_type'=>'village']); //Kagok
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14874, 'regionable_type'=>'village']); //Kareo
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14875, 'regionable_type'=>'village']); //Panyindangan
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14876, 'regionable_type'=>'village']); //Sangiang
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14877, 'regionable_type'=>'village']); //Sindangpala
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14878, 'regionable_type'=>'village']); //Sunia
                DB::table('regionables')->insert(['region_id'=>2059, 'regionable_id'=>14879, 'regionable_type'=>'village']); //Suniabaru
            DB::table('regions')->insert(['id'=>2060, 'parent'=>2046, 'code'=>'4547', 'type'=>'districts', 'name'=>'Districts 4547, City 454, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2060, 'regionable_id'=>1567, 'regionable_type'=>'districts']); //Sukahaji
            DB::table('regionables')->insert(['region_id'=>2060, 'regionable_id'=>1568, 'regionable_type'=>'districts']); //Sindang
            DB::table('regionables')->insert(['region_id'=>2060, 'regionable_id'=>1569, 'regionable_type'=>'districts']); //Rajagaluh
            DB::table('regionables')->insert(['region_id'=>2060, 'regionable_id'=>1570, 'regionable_type'=>'districts']); //Leuwimunding
            DB::table('regionables')->insert(['region_id'=>2060, 'regionable_id'=>1571, 'regionable_type'=>'districts']); //Sindangwangi
            DB::table('regionables')->insert(['region_id'=>2060, 'regionable_id'=>1572, 'regionable_type'=>'districts']); //Palasah
            DB::table('regionables')->insert(['region_id'=>2060, 'regionable_id'=>1573, 'regionable_type'=>'districts']); //Cigasong
                DB::table('regions')->insert(['id'=>2061, 'parent'=>2060, 'code'=>'45476', 'type'=>'village', 'name'=>'Village 45476, Districts 4547, City 454, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14950, 'regionable_type'=>'village']); //Baribis
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14951, 'regionable_type'=>'village']); //Batujaya
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14952, 'regionable_type'=>'village']); //Cicenang
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14953, 'regionable_type'=>'village']); //Cigasong
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14954, 'regionable_type'=>'village']); //Karayunan
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14955, 'regionable_type'=>'village']); //Kawunghilir
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14956, 'regionable_type'=>'village']); //Kutamanggu
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14957, 'regionable_type'=>'village']); //Simpeureum
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14958, 'regionable_type'=>'village']); //Tajur
                DB::table('regionables')->insert(['region_id'=>2061, 'regionable_id'=>14959, 'regionable_type'=>'village']); //Tenjolayar
        DB::table('regions')->insert(['id'=>2062, 'parent'=>1678, 'code'=>'455', 'type'=>'city', 'name'=>'City 455, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2062, 'regionable_id'=>84, 'regionable_type'=>'city']); //Kuningan regencies
            DB::table('regions')->insert(['id'=>2063, 'parent'=>2062, 'code'=>'4551', 'type'=>'districts', 'name'=>'Districts 4551, City 455, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2063, 'regionable_id'=>1574, 'regionable_type'=>'districts']); //Kuningan
                DB::table('regions')->insert(['id'=>2064, 'parent'=>2063, 'code'=>'45511', 'type'=>'village', 'name'=>'Village 45511, Districts 4551, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2064, 'regionable_id'=>14960, 'regionable_type'=>'village']); //Awirarangan
                DB::table('regionables')->insert(['region_id'=>2064, 'regionable_id'=>14961, 'regionable_type'=>'village']); //Cibinuang
                DB::table('regionables')->insert(['region_id'=>2064, 'regionable_id'=>14962, 'regionable_type'=>'village']); //Kuningan
                DB::table('regions')->insert(['id'=>2065, 'parent'=>2063, 'code'=>'45512', 'type'=>'village', 'name'=>'Village 45512, Districts 4551, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2065, 'regionable_id'=>14963, 'regionable_type'=>'village']); //Purwawinangun
                DB::table('regions')->insert(['id'=>2066, 'parent'=>2063, 'code'=>'45513', 'type'=>'village', 'name'=>'Village 45513, Districts 4551, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2066, 'regionable_id'=>14964, 'regionable_type'=>'village']); //Cijoho
                DB::table('regionables')->insert(['region_id'=>2066, 'regionable_id'=>14965, 'regionable_type'=>'village']); //Kedungarum
                DB::table('regions')->insert(['id'=>2067, 'parent'=>2063, 'code'=>'45514', 'type'=>'village', 'name'=>'Village 45514, Districts 4551, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2067, 'regionable_id'=>14966, 'regionable_type'=>'village']); //Ancaran
                DB::table('regionables')->insert(['region_id'=>2067, 'regionable_id'=>14967, 'regionable_type'=>'village']); //Ciporang
                DB::table('regions')->insert(['id'=>2068, 'parent'=>2063, 'code'=>'45515', 'type'=>'village', 'name'=>'Village 45515, Districts 4551, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2068, 'regionable_id'=>14968, 'regionable_type'=>'village']); //Karangtawang
                DB::table('regionables')->insert(['region_id'=>2068, 'regionable_id'=>14969, 'regionable_type'=>'village']); //Windusengkahan
                DB::table('regions')->insert(['id'=>2069, 'parent'=>2063, 'code'=>'45516', 'type'=>'village', 'name'=>'Village 45516, Districts 4551, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2069, 'regionable_id'=>14970, 'regionable_type'=>'village']); //Citangtu
                DB::table('regionables')->insert(['region_id'=>2069, 'regionable_id'=>14971, 'regionable_type'=>'village']); //Winduhaji
                DB::table('regions')->insert(['id'=>2070, 'parent'=>2063, 'code'=>'45517', 'type'=>'village', 'name'=>'Village 45517, Districts 4551, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2070, 'regionable_id'=>14972, 'regionable_type'=>'village']); //Cigintung
                DB::table('regions')->insert(['id'=>2071, 'parent'=>2063, 'code'=>'45518', 'type'=>'village', 'name'=>'Village 45518, Districts 4551, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2071, 'regionable_id'=>14973, 'regionable_type'=>'village']); //Cirendang
            DB::table('regions')->insert(['id'=>2072, 'parent'=>2062, 'code'=>'4552', 'type'=>'districts', 'name'=>'Districts 4552, City 455, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2072, 'regionable_id'=>1575, 'regionable_type'=>'districts']); //Kramat Mulya
                DB::table('regions')->insert(['id'=>2073, 'parent'=>2072, 'code'=>'45521', 'type'=>'village', 'name'=>'Village 45521, Districts 4552, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2073, 'regionable_id'=>14974, 'regionable_type'=>'village']); //Kasturi
            DB::table('regions')->insert(['id'=>2074, 'parent'=>2062, 'code'=>'4555', 'type'=>'districts', 'name'=>'Districts 4555, City 455, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1575, 'regionable_type'=>'districts']); //Kramat Mulya
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1576, 'regionable_type'=>'districts']); //Cigugur
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1577, 'regionable_type'=>'districts']); //Jalaksana
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1578, 'regionable_type'=>'districts']); //Japara
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1579, 'regionable_type'=>'districts']); //Cigandamekar
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1580, 'regionable_type'=>'districts']); //Cilimus
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1581, 'regionable_type'=>'districts']); //Pancalang
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1582, 'regionable_type'=>'districts']); //Mandirancan
            DB::table('regionables')->insert(['region_id'=>2074, 'regionable_id'=>1583, 'regionable_type'=>'districts']); //Pasawahan
                DB::table('regions')->insert(['id'=>2075, 'parent'=>2074, 'code'=>'45559', 'type'=>'village', 'name'=>'Village 45559, Districts 4555, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15074, 'regionable_type'=>'village']); //Cibuntu
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15075, 'regionable_type'=>'village']); //Cidahu
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15076, 'regionable_type'=>'village']); //Cimara
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15077, 'regionable_type'=>'village']); //Ciwiru
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15078, 'regionable_type'=>'village']); //Kaduela
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15079, 'regionable_type'=>'village']); //Padabeunghar
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15080, 'regionable_type'=>'village']); //Padamatang
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15081, 'regionable_type'=>'village']); //Paniis
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15082, 'regionable_type'=>'village']); //Pasawahan
                DB::table('regionables')->insert(['region_id'=>2075, 'regionable_id'=>15083, 'regionable_type'=>'village']); //Singkup
            DB::table('regions')->insert(['id'=>2076, 'parent'=>2062, 'code'=>'4556', 'type'=>'districts', 'name'=>'Districts 4556, City 455, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2076, 'regionable_id'=>1584, 'regionable_type'=>'districts']); //Kadugede
            DB::table('regionables')->insert(['region_id'=>2076, 'regionable_id'=>1585, 'regionable_type'=>'districts']); //Darma
            DB::table('regionables')->insert(['region_id'=>2076, 'regionable_id'=>1586, 'regionable_type'=>'districts']); //Nusaherang
            DB::table('regionables')->insert(['region_id'=>2076, 'regionable_id'=>1587, 'regionable_type'=>'districts']); //Hantara
            DB::table('regionables')->insert(['region_id'=>2076, 'regionable_id'=>1588, 'regionable_type'=>'districts']); //Ciniru
            DB::table('regionables')->insert(['region_id'=>2076, 'regionable_id'=>1589, 'regionable_type'=>'districts']); //Selajambe
                DB::table('regions')->insert(['id'=>2077, 'parent'=>2076, 'code'=>'45566', 'type'=>'village', 'name'=>'Village 45566, Districts 4556, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2077, 'regionable_id'=>15140, 'regionable_type'=>'village']); //Bagawat
                DB::table('regionables')->insert(['region_id'=>2077, 'regionable_id'=>15141, 'regionable_type'=>'village']); //Cantilan
                DB::table('regionables')->insert(['region_id'=>2077, 'regionable_id'=>15142, 'regionable_type'=>'village']); //Ciberung
                DB::table('regionables')->insert(['region_id'=>2077, 'regionable_id'=>15143, 'regionable_type'=>'village']); //Jamberama
                DB::table('regionables')->insert(['region_id'=>2077, 'regionable_id'=>15144, 'regionable_type'=>'village']); //Kutawaringin
                DB::table('regionables')->insert(['region_id'=>2077, 'regionable_id'=>15145, 'regionable_type'=>'village']); //Padahurip
                DB::table('regionables')->insert(['region_id'=>2077, 'regionable_id'=>15146, 'regionable_type'=>'village']); //Selajambe
            DB::table('regions')->insert(['id'=>2078, 'parent'=>2062, 'code'=>'4557', 'type'=>'districts', 'name'=>'Districts 4557, City 455, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2078, 'regionable_id'=>1590, 'regionable_type'=>'districts']); //Garawangi
            DB::table('regionables')->insert(['region_id'=>2078, 'regionable_id'=>1591, 'regionable_type'=>'districts']); //Sindangagung
            DB::table('regionables')->insert(['region_id'=>2078, 'regionable_id'=>1592, 'regionable_type'=>'districts']); //Lebakwangi
            DB::table('regionables')->insert(['region_id'=>2078, 'regionable_id'=>1593, 'regionable_type'=>'districts']); //Maleber
            DB::table('regionables')->insert(['region_id'=>2078, 'regionable_id'=>1594, 'regionable_type'=>'districts']); //Cipicung
                DB::table('regions')->insert(['id'=>2079, 'parent'=>2078, 'code'=>'45576', 'type'=>'village', 'name'=>'Village 45576, Districts 4557, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2079, 'regionable_id'=>15205, 'regionable_type'=>'village']); //Mekarsari
            DB::table('regions')->insert(['id'=>2080, 'parent'=>2062, 'code'=>'4558', 'type'=>'districts', 'name'=>'Districts 4558, City 455, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2080, 'regionable_id'=>1595, 'regionable_type'=>'districts']); //Luragung
            DB::table('regionables')->insert(['region_id'=>2080, 'regionable_id'=>1596, 'regionable_type'=>'districts']); //Cimahi
            DB::table('regionables')->insert(['region_id'=>2080, 'regionable_id'=>1597, 'regionable_type'=>'districts']); //Ciwaru
            DB::table('regionables')->insert(['region_id'=>2080, 'regionable_id'=>1598, 'regionable_type'=>'districts']); //Karangkancana
            DB::table('regionables')->insert(['region_id'=>2080, 'regionable_id'=>1599, 'regionable_type'=>'districts']); //Cilebak
            DB::table('regionables')->insert(['region_id'=>2080, 'regionable_id'=>1600, 'regionable_type'=>'districts']); //Subang
            DB::table('regionables')->insert(['region_id'=>2080, 'regionable_id'=>1601, 'regionable_type'=>'districts']); //Cibingbin
            DB::table('regionables')->insert(['region_id'=>2080, 'regionable_id'=>1602, 'regionable_type'=>'districts']); //Cibeureum
                DB::table('regions')->insert(['id'=>2081, 'parent'=>2080, 'code'=>'45588', 'type'=>'village', 'name'=>'Village 45588, Districts 4558, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2081, 'regionable_id'=>15285, 'regionable_type'=>'village']); //Cibeureum
                DB::table('regionables')->insert(['region_id'=>2081, 'regionable_id'=>15286, 'regionable_type'=>'village']); //Cimara
                DB::table('regionables')->insert(['region_id'=>2081, 'regionable_id'=>15287, 'regionable_type'=>'village']); //Kawungsari
                DB::table('regionables')->insert(['region_id'=>2081, 'regionable_id'=>15288, 'regionable_type'=>'village']); //Randusari
                DB::table('regionables')->insert(['region_id'=>2081, 'regionable_id'=>15289, 'regionable_type'=>'village']); //Sukadana
                DB::table('regionables')->insert(['region_id'=>2081, 'regionable_id'=>15290, 'regionable_type'=>'village']); //Sukarapih
                DB::table('regionables')->insert(['region_id'=>2081, 'regionable_id'=>15291, 'regionable_type'=>'village']); //Sumurwiru
                DB::table('regionables')->insert(['region_id'=>2081, 'regionable_id'=>15292, 'regionable_type'=>'village']); //Tarikolot
            DB::table('regions')->insert(['id'=>2082, 'parent'=>2062, 'code'=>'4559', 'type'=>'districts', 'name'=>'Districts 4559, City 455, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2082, 'regionable_id'=>1594, 'regionable_type'=>'districts']); //Cipicung
            DB::table('regionables')->insert(['region_id'=>2082, 'regionable_id'=>1603, 'regionable_type'=>'districts']); //Ciawigebang
            DB::table('regionables')->insert(['region_id'=>2082, 'regionable_id'=>1604, 'regionable_type'=>'districts']); //Kalimanggis
            DB::table('regionables')->insert(['region_id'=>2082, 'regionable_id'=>1605, 'regionable_type'=>'districts']); //Cidahu
                DB::table('regions')->insert(['id'=>2083, 'parent'=>2082, 'code'=>'45595', 'type'=>'village', 'name'=>'Village 45595, Districts 4559, City 455, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15323, 'regionable_type'=>'village']); //Bunder
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15324, 'regionable_type'=>'village']); //Cibulan
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15325, 'regionable_type'=>'village']); //Cidahu
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15326, 'regionable_type'=>'village']); //Cieurih
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15327, 'regionable_type'=>'village']); //Cihideunggirang
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15328, 'regionable_type'=>'village']); //Cihideunghilir
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15329, 'regionable_type'=>'village']); //Cikeusik
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15330, 'regionable_type'=>'village']); //Datar
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15331, 'regionable_type'=>'village']); //Jatimulya
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15332, 'regionable_type'=>'village']); //Kertawinangun
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15333, 'regionable_type'=>'village']); //Legok
                DB::table('regionables')->insert(['region_id'=>2083, 'regionable_id'=>15334, 'regionable_type'=>'village']); //Nanggela
        DB::table('regions')->insert(['id'=>2084, 'parent'=>1678, 'code'=>'456', 'type'=>'city', 'name'=>'City 456, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2084, 'regionable_id'=>79, 'regionable_type'=>'city']); //Cirebon city
        DB::table('regionables')->insert(['region_id'=>2084, 'regionable_id'=>80, 'regionable_type'=>'city']); //Cirebon regencies
            DB::table('regions')->insert(['id'=>2085, 'parent'=>2084, 'code'=>'4561', 'type'=>'districts', 'name'=>'Districts 4561, City 456, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2085, 'regionable_id'=>1444, 'regionable_type'=>'districts']); //Sumber
            DB::table('regionables')->insert(['region_id'=>2085, 'regionable_id'=>1489, 'regionable_type'=>'districts']); //Sumber
                DB::table('regions')->insert(['id'=>2086, 'parent'=>2085, 'code'=>'45611', 'type'=>'village', 'name'=>'Village 45611, Districts 4561, City 456, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13549, 'regionable_type'=>'village']); //Gegunung
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13550, 'regionable_type'=>'village']); //Kaliwadas
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13551, 'regionable_type'=>'village']); //Kemantren
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13552, 'regionable_type'=>'village']); //Kenanga
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13553, 'regionable_type'=>'village']); //Matangaji
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13554, 'regionable_type'=>'village']); //Pasalakan
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13555, 'regionable_type'=>'village']); //Pejambon
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13556, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13557, 'regionable_type'=>'village']); //Sidawangi
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13558, 'regionable_type'=>'village']); //Sumber
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13559, 'regionable_type'=>'village']); //Tukmudal
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13560, 'regionable_type'=>'village']); //Watubelah
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13995, 'regionable_type'=>'village']); //Gegunung
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13996, 'regionable_type'=>'village']); //Kaliwadas
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13997, 'regionable_type'=>'village']); //Kemantren
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13998, 'regionable_type'=>'village']); //Kenanga
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>13999, 'regionable_type'=>'village']); //Matangaji
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>14000, 'regionable_type'=>'village']); //Pasalakan
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>14001, 'regionable_type'=>'village']); //Pejambon
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>14002, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>14003, 'regionable_type'=>'village']); //Sidawangi
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>14004, 'regionable_type'=>'village']); //Sumber
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>14005, 'regionable_type'=>'village']); //Tukmudal
                DB::table('regionables')->insert(['region_id'=>2086, 'regionable_id'=>14006, 'regionable_type'=>'village']); //Watubelah
                DB::table('regions')->insert(['id'=>2087, 'parent'=>2085, 'code'=>'45612', 'type'=>'village', 'name'=>'Village 45612, Districts 4561, City 456, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2087, 'regionable_id'=>13561, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>2087, 'regionable_id'=>14007, 'regionable_type'=>'village']); //Babakan
                DB::table('regions')->insert(['id'=>2088, 'parent'=>2085, 'code'=>'45613', 'type'=>'village', 'name'=>'Village 45613, Districts 4561, City 456, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2088, 'regionable_id'=>13562, 'regionable_type'=>'village']); //Perbutulan
                DB::table('regionables')->insert(['region_id'=>2088, 'regionable_id'=>14008, 'regionable_type'=>'village']); //Perbutulan
            DB::table('regions')->insert(['id'=>2089, 'parent'=>2084, 'code'=>'4565', 'type'=>'districts', 'name'=>'Districts 4565, City 456, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2089, 'regionable_id'=>1412, 'regionable_type'=>'districts']); //Weru
            DB::table('regionables')->insert(['region_id'=>2089, 'regionable_id'=>1445, 'regionable_type'=>'districts']); //Dukupuntang
            DB::table('regionables')->insert(['region_id'=>2089, 'regionable_id'=>1457, 'regionable_type'=>'districts']); //Weru
            DB::table('regionables')->insert(['region_id'=>2089, 'regionable_id'=>1490, 'regionable_type'=>'districts']); //Dukupuntang
                DB::table('regions')->insert(['id'=>2090, 'parent'=>2089, 'code'=>'45652', 'type'=>'village', 'name'=>'Village 45652, Districts 4565, City 456, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13563, 'regionable_type'=>'village']); //Balad
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13564, 'regionable_type'=>'village']); //Bobos
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13565, 'regionable_type'=>'village']); //Cangkoak
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13566, 'regionable_type'=>'village']); //Cikalahang
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13567, 'regionable_type'=>'village']); //Cipanas
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13568, 'regionable_type'=>'village']); //Cisaat
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13569, 'regionable_type'=>'village']); //Dukupuntang
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13570, 'regionable_type'=>'village']); //Girinata
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13571, 'regionable_type'=>'village']); //Kedongdong Kidul
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13572, 'regionable_type'=>'village']); //Kepunduan
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13573, 'regionable_type'=>'village']); //Mandala
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13574, 'regionable_type'=>'village']); //Sindangjawa
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>13575, 'regionable_type'=>'village']); //Sindangmekar
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14009, 'regionable_type'=>'village']); //Balad
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14010, 'regionable_type'=>'village']); //Bobos
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14011, 'regionable_type'=>'village']); //Cangkoak
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14012, 'regionable_type'=>'village']); //Cikalahang
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14013, 'regionable_type'=>'village']); //Cipanas
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14014, 'regionable_type'=>'village']); //Cisaat
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14015, 'regionable_type'=>'village']); //Dukupuntang
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14016, 'regionable_type'=>'village']); //Girinata
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14017, 'regionable_type'=>'village']); //Kedongdong Kidul
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14018, 'regionable_type'=>'village']); //Kepunduan
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14019, 'regionable_type'=>'village']); //Mandala
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14020, 'regionable_type'=>'village']); //Sindangjawa
                DB::table('regionables')->insert(['region_id'=>2090, 'regionable_id'=>14021, 'regionable_type'=>'village']); //Sindangmekar
        DB::table('regions')->insert(['id'=>2091, 'parent'=>1678, 'code'=>'461', 'type'=>'city', 'name'=>'City 461, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2091, 'regionable_id'=>85, 'regionable_type'=>'city']); //Tasikmalaya city
        DB::table('regionables')->insert(['region_id'=>2091, 'regionable_id'=>86, 'regionable_type'=>'city']); //Tasikmalaya regencies
            DB::table('regions')->insert(['id'=>2092, 'parent'=>2091, 'code'=>'4611', 'type'=>'districts', 'name'=>'Districts 4611, City 461, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2092, 'regionable_id'=>1606, 'regionable_type'=>'districts']); //Tawang
            DB::table('regionables')->insert(['region_id'=>2092, 'regionable_id'=>1655, 'regionable_type'=>'districts']); //Tawang
                DB::table('regions')->insert(['id'=>2093, 'parent'=>2092, 'code'=>'46111', 'type'=>'village', 'name'=>'Village 46111, Districts 4611, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2093, 'regionable_id'=>15335, 'regionable_type'=>'village']); //Lengkongsari
                DB::table('regionables')->insert(['region_id'=>2093, 'regionable_id'=>15755, 'regionable_type'=>'village']); //Lengkongsari
                DB::table('regions')->insert(['id'=>2094, 'parent'=>2092, 'code'=>'46112', 'type'=>'village', 'name'=>'Village 46112, Districts 4611, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2094, 'regionable_id'=>15336, 'regionable_type'=>'village']); //Tawangsari
                DB::table('regionables')->insert(['region_id'=>2094, 'regionable_id'=>15756, 'regionable_type'=>'village']); //Tawangsari
                DB::table('regions')->insert(['id'=>2095, 'parent'=>2092, 'code'=>'46113', 'type'=>'village', 'name'=>'Village 46113, Districts 4611, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2095, 'regionable_id'=>15337, 'regionable_type'=>'village']); //Empangsari
                DB::table('regionables')->insert(['region_id'=>2095, 'regionable_id'=>15757, 'regionable_type'=>'village']); //Empangsari
                DB::table('regions')->insert(['id'=>2096, 'parent'=>2092, 'code'=>'46114', 'type'=>'village', 'name'=>'Village 46114, Districts 4611, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2096, 'regionable_id'=>15338, 'regionable_type'=>'village']); //Cikalang
                DB::table('regionables')->insert(['region_id'=>2096, 'regionable_id'=>15758, 'regionable_type'=>'village']); //Cikalang
                DB::table('regions')->insert(['id'=>2097, 'parent'=>2092, 'code'=>'46115', 'type'=>'village', 'name'=>'Village 46115, Districts 4611, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2097, 'regionable_id'=>15339, 'regionable_type'=>'village']); //Kahuripan
                DB::table('regionables')->insert(['region_id'=>2097, 'regionable_id'=>15759, 'regionable_type'=>'village']); //Kahuripan
            DB::table('regions')->insert(['id'=>2098, 'parent'=>2091, 'code'=>'4612', 'type'=>'districts', 'name'=>'Districts 4612, City 461, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2098, 'regionable_id'=>1607, 'regionable_type'=>'districts']); //Cihideung
            DB::table('regionables')->insert(['region_id'=>2098, 'regionable_id'=>1656, 'regionable_type'=>'districts']); //Cihideung
                DB::table('regions')->insert(['id'=>2099, 'parent'=>2098, 'code'=>'46121', 'type'=>'village', 'name'=>'Village 46121, Districts 4612, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2099, 'regionable_id'=>15340, 'regionable_type'=>'village']); //Yudanagara
                DB::table('regionables')->insert(['region_id'=>2099, 'regionable_id'=>15760, 'regionable_type'=>'village']); //Yudanagara
                DB::table('regions')->insert(['id'=>2100, 'parent'=>2098, 'code'=>'46122', 'type'=>'village', 'name'=>'Village 46122, Districts 4612, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2100, 'regionable_id'=>15341, 'regionable_type'=>'village']); //Argasari
                DB::table('regionables')->insert(['region_id'=>2100, 'regionable_id'=>15761, 'regionable_type'=>'village']); //Argasari
                DB::table('regions')->insert(['id'=>2101, 'parent'=>2098, 'code'=>'46123', 'type'=>'village', 'name'=>'Village 46123, Districts 4612, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2101, 'regionable_id'=>15342, 'regionable_type'=>'village']); //Cilembang
                DB::table('regionables')->insert(['region_id'=>2101, 'regionable_id'=>15762, 'regionable_type'=>'village']); //Cilembang
                DB::table('regions')->insert(['id'=>2102, 'parent'=>2098, 'code'=>'46124', 'type'=>'village', 'name'=>'Village 46124, Districts 4612, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2102, 'regionable_id'=>15343, 'regionable_type'=>'village']); //Nagarawangi
                DB::table('regionables')->insert(['region_id'=>2102, 'regionable_id'=>15763, 'regionable_type'=>'village']); //Nagarawangi
                DB::table('regions')->insert(['id'=>2103, 'parent'=>2098, 'code'=>'46125', 'type'=>'village', 'name'=>'Village 46125, Districts 4612, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2103, 'regionable_id'=>15344, 'regionable_type'=>'village']); //Tuguraja
                DB::table('regionables')->insert(['region_id'=>2103, 'regionable_id'=>15764, 'regionable_type'=>'village']); //Tuguraja
                DB::table('regions')->insert(['id'=>2104, 'parent'=>2098, 'code'=>'46126', 'type'=>'village', 'name'=>'Village 46126, Districts 4612, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2104, 'regionable_id'=>15345, 'regionable_type'=>'village']); //Tugujaya
                DB::table('regionables')->insert(['region_id'=>2104, 'regionable_id'=>15765, 'regionable_type'=>'village']); //Tugujaya
            DB::table('regions')->insert(['id'=>2105, 'parent'=>2091, 'code'=>'4613', 'type'=>'districts', 'name'=>'Districts 4613, City 461, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2105, 'regionable_id'=>1608, 'regionable_type'=>'districts']); //Cipedes
            DB::table('regionables')->insert(['region_id'=>2105, 'regionable_id'=>1657, 'regionable_type'=>'districts']); //Cipedes
                DB::table('regions')->insert(['id'=>2106, 'parent'=>2105, 'code'=>'46131', 'type'=>'village', 'name'=>'Village 46131, Districts 4613, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2106, 'regionable_id'=>15346, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regionables')->insert(['region_id'=>2106, 'regionable_id'=>15766, 'regionable_type'=>'village']); //Sukamanah
                DB::table('regions')->insert(['id'=>2107, 'parent'=>2105, 'code'=>'46132', 'type'=>'village', 'name'=>'Village 46132, Districts 4613, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2107, 'regionable_id'=>15347, 'regionable_type'=>'village']); //Nagarasari
                DB::table('regionables')->insert(['region_id'=>2107, 'regionable_id'=>15767, 'regionable_type'=>'village']); //Nagarasari
                DB::table('regions')->insert(['id'=>2108, 'parent'=>2105, 'code'=>'46133', 'type'=>'village', 'name'=>'Village 46133, Districts 4613, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2108, 'regionable_id'=>15348, 'regionable_type'=>'village']); //Cipedes
                DB::table('regionables')->insert(['region_id'=>2108, 'regionable_id'=>15768, 'regionable_type'=>'village']); //Cipedes
                DB::table('regions')->insert(['id'=>2109, 'parent'=>2105, 'code'=>'46134', 'type'=>'village', 'name'=>'Village 46134, Districts 4613, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2109, 'regionable_id'=>15349, 'regionable_type'=>'village']); //Panglayungan
                DB::table('regionables')->insert(['region_id'=>2109, 'regionable_id'=>15769, 'regionable_type'=>'village']); //Panglayungan
            DB::table('regions')->insert(['id'=>2110, 'parent'=>2091, 'code'=>'4615', 'type'=>'districts', 'name'=>'Districts 4615, City 461, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1609, 'regionable_type'=>'districts']); //Bungursari
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1610, 'regionable_type'=>'districts']); //Indihiang
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1611, 'regionable_type'=>'districts']); //Cisayong
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1612, 'regionable_type'=>'districts']); //Sukahening
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1613, 'regionable_type'=>'districts']); //Rajapolah
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1614, 'regionable_type'=>'districts']); //Ciawi
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1615, 'regionable_type'=>'districts']); //Kadipaten
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1616, 'regionable_type'=>'districts']); //Pagerageung
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1658, 'regionable_type'=>'districts']); //Bungursari
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1659, 'regionable_type'=>'districts']); //Indihiang
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1660, 'regionable_type'=>'districts']); //Cisayong
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1661, 'regionable_type'=>'districts']); //Sukahening
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1662, 'regionable_type'=>'districts']); //Rajapolah
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1663, 'regionable_type'=>'districts']); //Ciawi
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1664, 'regionable_type'=>'districts']); //Kadipaten
            DB::table('regionables')->insert(['region_id'=>2110, 'regionable_id'=>1665, 'regionable_type'=>'districts']); //Pagerageung
                DB::table('regions')->insert(['id'=>2111, 'parent'=>2110, 'code'=>'46158', 'type'=>'village', 'name'=>'Village 46158, Districts 4615, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15408, 'regionable_type'=>'village']); //Cipacing
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15409, 'regionable_type'=>'village']); //Guranteng
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15410, 'regionable_type'=>'village']); //Nanggewer
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15411, 'regionable_type'=>'village']); //Pagerageung
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15412, 'regionable_type'=>'village']); //Pagersari
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15413, 'regionable_type'=>'village']); //Puteran
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15414, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15415, 'regionable_type'=>'village']); //Sukapada
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15416, 'regionable_type'=>'village']); //Tanjungkerta
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15828, 'regionable_type'=>'village']); //Cipacing
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15829, 'regionable_type'=>'village']); //Guranteng
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15830, 'regionable_type'=>'village']); //Nanggewer
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15831, 'regionable_type'=>'village']); //Pagerageung
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15832, 'regionable_type'=>'village']); //Pagersari
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15833, 'regionable_type'=>'village']); //Puteran
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15834, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15835, 'regionable_type'=>'village']); //Sukapada
                DB::table('regionables')->insert(['region_id'=>2111, 'regionable_id'=>15836, 'regionable_type'=>'village']); //Tanjungkerta
            DB::table('regions')->insert(['id'=>2112, 'parent'=>2091, 'code'=>'4616', 'type'=>'districts', 'name'=>'Districts 4616, City 461, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2112, 'regionable_id'=>1617, 'regionable_type'=>'districts']); //Bantarkalong
            DB::table('regionables')->insert(['region_id'=>2112, 'regionable_id'=>1666, 'regionable_type'=>'districts']); //Bantarkalong
                DB::table('regions')->insert(['id'=>2113, 'parent'=>2112, 'code'=>'46168', 'type'=>'village', 'name'=>'Village 46168, Districts 4616, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2113, 'regionable_id'=>15418, 'regionable_type'=>'village']); //Wakap
                DB::table('regionables')->insert(['region_id'=>2113, 'regionable_id'=>15838, 'regionable_type'=>'village']); //Wakap
            DB::table('regions')->insert(['id'=>2114, 'parent'=>2091, 'code'=>'4617', 'type'=>'districts', 'name'=>'Districts 4617, City 461, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2114, 'regionable_id'=>1618, 'regionable_type'=>'districts']); //Jamanis
            DB::table('regionables')->insert(['region_id'=>2114, 'regionable_id'=>1667, 'regionable_type'=>'districts']); //Jamanis
                DB::table('regions')->insert(['id'=>2115, 'parent'=>2114, 'code'=>'46175', 'type'=>'village', 'name'=>'Village 46175, Districts 4617, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15426, 'regionable_type'=>'village']); //Bojonggaok
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15427, 'regionable_type'=>'village']); //Condong
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15428, 'regionable_type'=>'village']); //Geresik
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15429, 'regionable_type'=>'village']); //Karangmulya
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15430, 'regionable_type'=>'village']); //Karangresik
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15431, 'regionable_type'=>'village']); //Karangsembung
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15432, 'regionable_type'=>'village']); //Sindangraja
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15433, 'regionable_type'=>'village']); //Tanjungmekar
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15846, 'regionable_type'=>'village']); //Bojonggaok
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15847, 'regionable_type'=>'village']); //Condong
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15848, 'regionable_type'=>'village']); //Geresik
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15849, 'regionable_type'=>'village']); //Karangmulya
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15850, 'regionable_type'=>'village']); //Karangresik
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15851, 'regionable_type'=>'village']); //Karangsembung
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15852, 'regionable_type'=>'village']); //Sindangraja
                DB::table('regionables')->insert(['region_id'=>2115, 'regionable_id'=>15853, 'regionable_type'=>'village']); //Tanjungmekar
            DB::table('regions')->insert(['id'=>2116, 'parent'=>2091, 'code'=>'4618', 'type'=>'districts', 'name'=>'Districts 4618, City 461, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1613, 'regionable_type'=>'districts']); //Rajapolah
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1617, 'regionable_type'=>'districts']); //Bantarkalong
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1619, 'regionable_type'=>'districts']); //Mangkubumi
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1620, 'regionable_type'=>'districts']); //Kawalu
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1621, 'regionable_type'=>'districts']); //Sukaraja
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1622, 'regionable_type'=>'districts']); //Tanjungjaya
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1623, 'regionable_type'=>'districts']); //Parungponteng
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1624, 'regionable_type'=>'districts']); //Cibalong
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1625, 'regionable_type'=>'districts']); //Jatiwaras
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1626, 'regionable_type'=>'districts']); //Karangnunggal
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1627, 'regionable_type'=>'districts']); //Cipatujah
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1628, 'regionable_type'=>'districts']); //Culamega
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1662, 'regionable_type'=>'districts']); //Rajapolah
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1666, 'regionable_type'=>'districts']); //Bantarkalong
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1668, 'regionable_type'=>'districts']); //Mangkubumi
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1669, 'regionable_type'=>'districts']); //Kawalu
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1670, 'regionable_type'=>'districts']); //Sukaraja
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1671, 'regionable_type'=>'districts']); //Tanjungjaya
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1672, 'regionable_type'=>'districts']); //Parungponteng
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1673, 'regionable_type'=>'districts']); //Cibalong
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1674, 'regionable_type'=>'districts']); //Jatiwaras
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1675, 'regionable_type'=>'districts']); //Karangnunggal
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1676, 'regionable_type'=>'districts']); //Cipatujah
            DB::table('regionables')->insert(['region_id'=>2116, 'regionable_id'=>1677, 'regionable_type'=>'districts']); //Culamega
                DB::table('regions')->insert(['id'=>2117, 'parent'=>2116, 'code'=>'46188', 'type'=>'village', 'name'=>'Village 46188, Districts 4618, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15425, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15521, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15522, 'regionable_type'=>'village']); //Cikuya
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15523, 'regionable_type'=>'village']); //Cintabodas
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15524, 'regionable_type'=>'village']); //Cipicung
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15525, 'regionable_type'=>'village']); //Mekarlaksana
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15845, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15941, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15942, 'regionable_type'=>'village']); //Cikuya
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15943, 'regionable_type'=>'village']); //Cintabodas
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15944, 'regionable_type'=>'village']); //Cipicung
                DB::table('regionables')->insert(['region_id'=>2117, 'regionable_id'=>15945, 'regionable_type'=>'village']); //Mekarlaksana
            DB::table('regions')->insert(['id'=>2118, 'parent'=>2091, 'code'=>'4619', 'type'=>'districts', 'name'=>'Districts 4619, City 461, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1629, 'regionable_type'=>'districts']); //Salopa
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1630, 'regionable_type'=>'districts']); //Cikatomas
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1631, 'regionable_type'=>'districts']); //Pancatengah
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1632, 'regionable_type'=>'districts']); //Cikalong
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1633, 'regionable_type'=>'districts']); //Cibeureum
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1634, 'regionable_type'=>'districts']); //Tamansari
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1635, 'regionable_type'=>'districts']); //Purbaratu
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1636, 'regionable_type'=>'districts']); //Manonjaya
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1637, 'regionable_type'=>'districts']); //Cineam
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1638, 'regionable_type'=>'districts']); //Karang Jaya
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1678, 'regionable_type'=>'districts']); //Salopa
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1679, 'regionable_type'=>'districts']); //Cikatomas
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1680, 'regionable_type'=>'districts']); //Pancatengah
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1681, 'regionable_type'=>'districts']); //Cikalong
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1682, 'regionable_type'=>'districts']); //Cibeureum
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1683, 'regionable_type'=>'districts']); //Tamansari
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1684, 'regionable_type'=>'districts']); //Purbaratu
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1685, 'regionable_type'=>'districts']); //Manonjaya
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1686, 'regionable_type'=>'districts']); //Cineam
            DB::table('regionables')->insert(['region_id'=>2118, 'regionable_id'=>1687, 'regionable_type'=>'districts']); //Karang Jaya
                DB::table('regions')->insert(['id'=>2119, 'parent'=>2118, 'code'=>'46198', 'type'=>'village', 'name'=>'Village 46198, Districts 4619, City 461, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15603, 'regionable_type'=>'village']); //Ancol
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15604, 'regionable_type'=>'village']); //Ciampanan
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15605, 'regionable_type'=>'village']); //Cijulang
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15606, 'regionable_type'=>'village']); //Cikondang
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15607, 'regionable_type'=>'village']); //Cineam
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15608, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15609, 'regionable_type'=>'village']); //Madiasari
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15610, 'regionable_type'=>'village']); //Nagaratengah
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15611, 'regionable_type'=>'village']); //Pasirmukti
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15612, 'regionable_type'=>'village']); //Rajadatu
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15613, 'regionable_type'=>'village']); //Citalahab
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15614, 'regionable_type'=>'village']); //Karangjaya
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15615, 'regionable_type'=>'village']); //Karanglayung
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>15616, 'regionable_type'=>'village']); //Sirnajaya
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16023, 'regionable_type'=>'village']); //Ancol
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16024, 'regionable_type'=>'village']); //Ciampanan
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16025, 'regionable_type'=>'village']); //Cijulang
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16026, 'regionable_type'=>'village']); //Cikondang
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16027, 'regionable_type'=>'village']); //Cineam
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16028, 'regionable_type'=>'village']); //Cisarua
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16029, 'regionable_type'=>'village']); //Madiasari
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16030, 'regionable_type'=>'village']); //Nagaratengah
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16031, 'regionable_type'=>'village']); //Pasirmukti
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16032, 'regionable_type'=>'village']); //Rajadatu
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16033, 'regionable_type'=>'village']); //Citalahab
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16034, 'regionable_type'=>'village']); //Karangjaya
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16035, 'regionable_type'=>'village']); //Karanglayung
                DB::table('regionables')->insert(['region_id'=>2119, 'regionable_id'=>16036, 'regionable_type'=>'village']); //Sirnajaya
        DB::table('regions')->insert(['id'=>2120, 'parent'=>1678, 'code'=>'462', 'type'=>'city', 'name'=>'City 462, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2120, 'regionable_id'=>87, 'regionable_type'=>'city']); //Ciamis regencies
        DB::table('regionables')->insert(['region_id'=>2120, 'regionable_id'=>88, 'regionable_type'=>'city']); //Pangandaran regencies
            DB::table('regions')->insert(['id'=>2121, 'parent'=>2120, 'code'=>'4626', 'type'=>'districts', 'name'=>'Districts 4626, City 462, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2121, 'regionable_id'=>1711, 'regionable_type'=>'districts']); //Cikoneng
            DB::table('regionables')->insert(['region_id'=>2121, 'regionable_id'=>1712, 'regionable_type'=>'districts']); //Cihaurbeuti
            DB::table('regionables')->insert(['region_id'=>2121, 'regionable_id'=>1713, 'regionable_type'=>'districts']); //Panumbangan
            DB::table('regionables')->insert(['region_id'=>2121, 'regionable_id'=>1714, 'regionable_type'=>'districts']); //Panjalu
            DB::table('regionables')->insert(['region_id'=>2121, 'regionable_id'=>1715, 'regionable_type'=>'districts']); //Sukamantri
            DB::table('regionables')->insert(['region_id'=>2121, 'regionable_id'=>1716, 'regionable_type'=>'districts']); //Sindangkasih
            DB::table('regionables')->insert(['region_id'=>2121, 'regionable_id'=>1730, 'regionable_type'=>'districts']); //Padaherang
                DB::table('regions')->insert(['id'=>2122, 'parent'=>2121, 'code'=>'46267', 'type'=>'village', 'name'=>'Village 46267, Districts 4626, City 462, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2122, 'regionable_id'=>16440, 'regionable_type'=>'village']); //Sukanagara
        DB::table('regions')->insert(['id'=>2123, 'parent'=>1678, 'code'=>'463', 'type'=>'city', 'name'=>'City 463, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2123, 'regionable_id'=>87, 'regionable_type'=>'city']); //Ciamis regencies
        DB::table('regionables')->insert(['region_id'=>2123, 'regionable_id'=>88, 'regionable_type'=>'city']); //Pangandaran regencies
        DB::table('regionables')->insert(['region_id'=>2123, 'regionable_id'=>89, 'regionable_type'=>'city']); //Banjar city
            DB::table('regions')->insert(['id'=>2124, 'parent'=>2123, 'code'=>'4631', 'type'=>'districts', 'name'=>'Districts 4631, City 463, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2124, 'regionable_id'=>1740, 'regionable_type'=>'districts']); //Banjar
            DB::table('regionables')->insert(['region_id'=>2124, 'regionable_id'=>1741, 'regionable_type'=>'districts']); //Pataruman
                DB::table('regions')->insert(['id'=>2125, 'parent'=>2124, 'code'=>'46316', 'type'=>'village', 'name'=>'Village 46316, Districts 4631, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2125, 'regionable_id'=>16540, 'regionable_type'=>'village']); //Binangun
            DB::table('regions')->insert(['id'=>2126, 'parent'=>2123, 'code'=>'4632', 'type'=>'districts', 'name'=>'Districts 4632, City 463, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2126, 'regionable_id'=>1740, 'regionable_type'=>'districts']); //Banjar
            DB::table('regionables')->insert(['region_id'=>2126, 'regionable_id'=>1741, 'regionable_type'=>'districts']); //Pataruman
            DB::table('regionables')->insert(['region_id'=>2126, 'regionable_id'=>1742, 'regionable_type'=>'districts']); //Langensari
                DB::table('regions')->insert(['id'=>2127, 'parent'=>2126, 'code'=>'46324', 'type'=>'village', 'name'=>'Village 46324, Districts 4632, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2127, 'regionable_id'=>16548, 'regionable_type'=>'village']); //Kujangsari
                DB::table('regionables')->insert(['region_id'=>2127, 'regionable_id'=>16549, 'regionable_type'=>'village']); //Langensari
                DB::table('regions')->insert(['id'=>2128, 'parent'=>2126, 'code'=>'46325', 'type'=>'village', 'name'=>'Village 46325, Districts 4632, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2128, 'regionable_id'=>16550, 'regionable_type'=>'village']); //Bojongkantong
            DB::table('regions')->insert(['id'=>2129, 'parent'=>2123, 'code'=>'4633', 'type'=>'districts', 'name'=>'Districts 4633, City 463, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2129, 'regionable_id'=>1741, 'regionable_type'=>'districts']); //Pataruman
            DB::table('regionables')->insert(['region_id'=>2129, 'regionable_id'=>1743, 'regionable_type'=>'districts']); //Purwaharja
                DB::table('regions')->insert(['id'=>2130, 'parent'=>2129, 'code'=>'46331', 'type'=>'village', 'name'=>'Village 46331, Districts 4633, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2130, 'regionable_id'=>16554, 'regionable_type'=>'village']); //Purwaharja
                DB::table('regions')->insert(['id'=>2131, 'parent'=>2129, 'code'=>'46332', 'type'=>'village', 'name'=>'Village 46332, Districts 4633, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2131, 'regionable_id'=>16555, 'regionable_type'=>'village']); //Karangpanimbal
                DB::table('regions')->insert(['id'=>2132, 'parent'=>2129, 'code'=>'46333', 'type'=>'village', 'name'=>'Village 46333, Districts 4633, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2132, 'regionable_id'=>16556, 'regionable_type'=>'village']); //Raharja
                DB::table('regions')->insert(['id'=>2133, 'parent'=>2129, 'code'=>'46334', 'type'=>'village', 'name'=>'Village 46334, Districts 4633, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2133, 'regionable_id'=>16557, 'regionable_type'=>'village']); //Mekarharja
            DB::table('regions')->insert(['id'=>2134, 'parent'=>2123, 'code'=>'4634', 'type'=>'districts', 'name'=>'Districts 4634, City 463, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2134, 'regionable_id'=>1742, 'regionable_type'=>'districts']); //Langensari
                DB::table('regions')->insert(['id'=>2135, 'parent'=>2134, 'code'=>'46342', 'type'=>'village', 'name'=>'Village 46342, Districts 4634, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2135, 'regionable_id'=>16551, 'regionable_type'=>'village']); //Waringinsari
                DB::table('regions')->insert(['id'=>2136, 'parent'=>2134, 'code'=>'46343', 'type'=>'village', 'name'=>'Village 46343, Districts 4634, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2136, 'regionable_id'=>16552, 'regionable_type'=>'village']); //Muktisari
                DB::table('regions')->insert(['id'=>2137, 'parent'=>2134, 'code'=>'46344', 'type'=>'village', 'name'=>'Village 46344, Districts 4634, City 463, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2137, 'regionable_id'=>16553, 'regionable_type'=>'village']); //Rejasari
        DB::table('regions')->insert(['id'=>2138, 'parent'=>1678, 'code'=>'464', 'type'=>'city', 'name'=>'City 464, Province 4']);
        DB::table('regionables')->insert(['region_id'=>2138, 'regionable_id'=>85, 'regionable_type'=>'city']); //Tasikmalaya city
        DB::table('regionables')->insert(['region_id'=>2138, 'regionable_id'=>86, 'regionable_type'=>'city']); //Tasikmalaya regencies
            DB::table('regions')->insert(['id'=>2139, 'parent'=>2138, 'code'=>'4641', 'type'=>'districts', 'name'=>'Districts 4641, City 464, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1610, 'regionable_type'=>'districts']); //Indihiang
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1616, 'regionable_type'=>'districts']); //Pagerageung
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1633, 'regionable_type'=>'districts']); //Cibeureum
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1639, 'regionable_type'=>'districts']); //Singaparna
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1640, 'regionable_type'=>'districts']); //Sukaratu
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1641, 'regionable_type'=>'districts']); //Sukaresik
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1642, 'regionable_type'=>'districts']); //Gunung Tanjung
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1659, 'regionable_type'=>'districts']); //Indihiang
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1665, 'regionable_type'=>'districts']); //Pagerageung
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1682, 'regionable_type'=>'districts']); //Cibeureum
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1688, 'regionable_type'=>'districts']); //Singaparna
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1689, 'regionable_type'=>'districts']); //Sukaratu
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1690, 'regionable_type'=>'districts']); //Sukaresik
            DB::table('regionables')->insert(['region_id'=>2139, 'regionable_id'=>1691, 'regionable_type'=>'districts']); //Gunung Tanjung
                DB::table('regions')->insert(['id'=>2140, 'parent'=>2139, 'code'=>'46418', 'type'=>'village', 'name'=>'Village 46418, Districts 4641, City 464, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15625, 'regionable_type'=>'village']); //Cikadongdong
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15626, 'regionable_type'=>'village']); //Cikunir
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15635, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15636, 'regionable_type'=>'village']); //Cipondok
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15637, 'regionable_type'=>'village']); //Margamulya
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15638, 'regionable_type'=>'village']); //Sukamenak
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15639, 'regionable_type'=>'village']); //Sukapancar
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15640, 'regionable_type'=>'village']); //Sukaratu
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15641, 'regionable_type'=>'village']); //Sukaresik
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15642, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15643, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15644, 'regionable_type'=>'village']); //Cinunjang
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15645, 'regionable_type'=>'village']); //Giriwangi
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15646, 'regionable_type'=>'village']); //Gunung Tanjung
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15647, 'regionable_type'=>'village']); //Jatijaya
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15648, 'regionable_type'=>'village']); //Malatisuka
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>15649, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16045, 'regionable_type'=>'village']); //Cikadongdong
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16046, 'regionable_type'=>'village']); //Cikunir
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16055, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16056, 'regionable_type'=>'village']); //Cipondok
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16057, 'regionable_type'=>'village']); //Margamulya
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16058, 'regionable_type'=>'village']); //Sukamenak
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16059, 'regionable_type'=>'village']); //Sukapancar
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16060, 'regionable_type'=>'village']); //Sukaratu
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16061, 'regionable_type'=>'village']); //Sukaresik
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16062, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16063, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16064, 'regionable_type'=>'village']); //Cinunjang
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16065, 'regionable_type'=>'village']); //Giriwangi
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16066, 'regionable_type'=>'village']); //Gunung Tanjung
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16067, 'regionable_type'=>'village']); //Jatijaya
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16068, 'regionable_type'=>'village']); //Malatisuka
                DB::table('regionables')->insert(['region_id'=>2140, 'regionable_id'=>16069, 'regionable_type'=>'village']); //Tanjungsari
            DB::table('regions')->insert(['id'=>2141, 'parent'=>2138, 'code'=>'4646', 'type'=>'districts', 'name'=>'Districts 4646, City 464, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1643, 'regionable_type'=>'districts']); //Sukarame
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1644, 'regionable_type'=>'districts']); //Mangunreja
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1645, 'regionable_type'=>'districts']); //Cigalontang
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1646, 'regionable_type'=>'districts']); //Leuwisari
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1647, 'regionable_type'=>'districts']); //Sariwangi
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1648, 'regionable_type'=>'districts']); //Padakembang
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1692, 'regionable_type'=>'districts']); //Sukarame
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1693, 'regionable_type'=>'districts']); //Mangunreja
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1694, 'regionable_type'=>'districts']); //Cigalontang
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1695, 'regionable_type'=>'districts']); //Leuwisari
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1696, 'regionable_type'=>'districts']); //Sariwangi
            DB::table('regionables')->insert(['region_id'=>2141, 'regionable_id'=>1697, 'regionable_type'=>'districts']); //Padakembang
                DB::table('regions')->insert(['id'=>2142, 'parent'=>2141, 'code'=>'46466', 'type'=>'village', 'name'=>'Village 46466, Districts 4646, City 464, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>15693, 'regionable_type'=>'village']); //Cilampunghilir
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>15694, 'regionable_type'=>'village']); //Cisaruni
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>15695, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>15696, 'regionable_type'=>'village']); //Padakembang
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>15697, 'regionable_type'=>'village']); //Rancapaku
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>16113, 'regionable_type'=>'village']); //Cilampunghilir
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>16114, 'regionable_type'=>'village']); //Cisaruni
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>16115, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>16116, 'regionable_type'=>'village']); //Padakembang
                DB::table('regionables')->insert(['region_id'=>2142, 'regionable_id'=>16117, 'regionable_type'=>'village']); //Rancapaku
            DB::table('regions')->insert(['id'=>2143, 'parent'=>2138, 'code'=>'4647', 'type'=>'districts', 'name'=>'Districts 4647, City 464, Province 4']);
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1649, 'regionable_type'=>'districts']); //Puspahiang
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1650, 'regionable_type'=>'districts']); //Salawu
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1651, 'regionable_type'=>'districts']); //Sodonghilir
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1652, 'regionable_type'=>'districts']); //Taraju
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1653, 'regionable_type'=>'districts']); //Bojongasih
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1654, 'regionable_type'=>'districts']); //Bojonggambir
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1698, 'regionable_type'=>'districts']); //Puspahiang
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1699, 'regionable_type'=>'districts']); //Salawu
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1700, 'regionable_type'=>'districts']); //Sodonghilir
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1701, 'regionable_type'=>'districts']); //Taraju
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1702, 'regionable_type'=>'districts']); //Bojongasih
            DB::table('regionables')->insert(['region_id'=>2143, 'regionable_id'=>1703, 'regionable_type'=>'districts']); //Bojonggambir
                DB::table('regions')->insert(['id'=>2144, 'parent'=>2143, 'code'=>'46475', 'type'=>'village', 'name'=>'Village 46475, Districts 4647, City 464, Province 4']);
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15739, 'regionable_type'=>'village']); //Bojongasih
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15740, 'regionable_type'=>'village']); //Cikadongdong
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15741, 'regionable_type'=>'village']); //Girijaya
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15742, 'regionable_type'=>'village']); //Mertajaya
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15743, 'regionable_type'=>'village']); //Sindangsari
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15744, 'regionable_type'=>'village']); //Toblongan
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15745, 'regionable_type'=>'village']); //Bojonggambir
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15746, 'regionable_type'=>'village']); //Bojongkapol
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15747, 'regionable_type'=>'village']); //Campakasari
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15748, 'regionable_type'=>'village']); //Ciroyom
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15749, 'regionable_type'=>'village']); //Girimukti
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15750, 'regionable_type'=>'village']); //Kertanegla
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15751, 'regionable_type'=>'village']); //Mangkonjaya
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15752, 'regionable_type'=>'village']); //Pedangkamulyan
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15753, 'regionable_type'=>'village']); //Purwaraharja
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>15754, 'regionable_type'=>'village']); //Wandasari
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16159, 'regionable_type'=>'village']); //Bojongasih
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16160, 'regionable_type'=>'village']); //Cikadongdong
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16161, 'regionable_type'=>'village']); //Girijaya
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16162, 'regionable_type'=>'village']); //Mertajaya
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16163, 'regionable_type'=>'village']); //Sindangsari
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16164, 'regionable_type'=>'village']); //Toblongan
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16165, 'regionable_type'=>'village']); //Bojonggambir
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16166, 'regionable_type'=>'village']); //Bojongkapol
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16167, 'regionable_type'=>'village']); //Campakasari
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16168, 'regionable_type'=>'village']); //Ciroyom
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16169, 'regionable_type'=>'village']); //Girimukti
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16170, 'regionable_type'=>'village']); //Kertanegla
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16171, 'regionable_type'=>'village']); //Mangkonjaya
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16172, 'regionable_type'=>'village']); //Pedangkamulyan
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16173, 'regionable_type'=>'village']); //Purwaraharja
                DB::table('regionables')->insert(['region_id'=>2144, 'regionable_id'=>16174, 'regionable_type'=>'village']); //Wandasari
    }
}
