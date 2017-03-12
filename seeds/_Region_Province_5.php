<?php

use Illuminate\Database\Seeder;

class _Region_Province_5 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['id'=>2145, 'code'=>'5', 'type'=>'province', 'name'=>'Province 5']);

        //Di Yogyakarta
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>5, 'regionable_type'=>'province']); //Di Yogyakarta
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>35, 'regionable_type'=>'city']); //Yogyakarta city
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>36, 'regionable_type'=>'city']); //Bantul regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>37, 'regionable_type'=>'city']); //Sleman regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>38, 'regionable_type'=>'city']); //Kulon Progo regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>39, 'regionable_type'=>'city']); //Gunung Kidul regencies

        DB::table('regions')->insert(['id'=>2146, 'parent'=>2145, 'code'=>'551', 'type'=>'city', 'name'=>'City 551, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2146, 'regionable_id'=>35, 'regionable_type'=>'city']); //Yogyakarta city
        DB::table('regionables')->insert(['region_id'=>2146, 'regionable_id'=>36, 'regionable_type'=>'city']); //Bantul regencies
            DB::table('regions')->insert(['id'=>2147, 'parent'=>2146, 'code'=>'5518', 'type'=>'districts', 'name'=>'Districts 5518, City 551, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2147, 'regionable_id'=>477, 'regionable_type'=>'districts']); //Kasihan
            DB::table('regionables')->insert(['region_id'=>2147, 'regionable_id'=>478, 'regionable_type'=>'districts']); //Sewon
                DB::table('regions')->insert(['id'=>2148, 'parent'=>2147, 'code'=>'55185', 'type'=>'village', 'name'=>'Village 55185, Districts 5518, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2148, 'regionable_id'=>4989, 'regionable_type'=>'village']); //Pendowoharjo
                DB::table('regions')->insert(['id'=>2149, 'parent'=>2147, 'code'=>'55186', 'type'=>'village', 'name'=>'Village 55186, Districts 5518, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2149, 'regionable_id'=>4990, 'regionable_type'=>'village']); //Timbulharjo
                DB::table('regions')->insert(['id'=>2150, 'parent'=>2147, 'code'=>'55188', 'type'=>'village', 'name'=>'Village 55188, Districts 5518, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2150, 'regionable_id'=>4991, 'regionable_type'=>'village']); //Bangunharjo
                DB::table('regionables')->insert(['region_id'=>2150, 'regionable_id'=>4992, 'regionable_type'=>'village']); //Panggungharjo
            DB::table('regions')->insert(['id'=>2151, 'parent'=>2146, 'code'=>'5519', 'type'=>'districts', 'name'=>'Districts 5519, City 551, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2151, 'regionable_id'=>479, 'regionable_type'=>'districts']); //Banguntapan
                DB::table('regions')->insert(['id'=>2152, 'parent'=>2151, 'code'=>'55191', 'type'=>'village', 'name'=>'Village 55191, Districts 5519, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2152, 'regionable_id'=>4993, 'regionable_type'=>'village']); //Tamanan
                DB::table('regions')->insert(['id'=>2153, 'parent'=>2151, 'code'=>'55192', 'type'=>'village', 'name'=>'Village 55192, Districts 5519, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2153, 'regionable_id'=>4994, 'regionable_type'=>'village']); //Jagalan
                DB::table('regions')->insert(['id'=>2154, 'parent'=>2151, 'code'=>'55193', 'type'=>'village', 'name'=>'Village 55193, Districts 5519, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2154, 'regionable_id'=>4995, 'regionable_type'=>'village']); //Singosaren
                DB::table('regions')->insert(['id'=>2155, 'parent'=>2151, 'code'=>'55194', 'type'=>'village', 'name'=>'Village 55194, Districts 5519, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2155, 'regionable_id'=>4996, 'regionable_type'=>'village']); //Wirokerten
                DB::table('regions')->insert(['id'=>2156, 'parent'=>2151, 'code'=>'55195', 'type'=>'village', 'name'=>'Village 55195, Districts 5519, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2156, 'regionable_id'=>4997, 'regionable_type'=>'village']); //Jambidan
                DB::table('regions')->insert(['id'=>2157, 'parent'=>2151, 'code'=>'55196', 'type'=>'village', 'name'=>'Village 55196, Districts 5519, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2157, 'regionable_id'=>4998, 'regionable_type'=>'village']); //Potorono
                DB::table('regions')->insert(['id'=>2158, 'parent'=>2151, 'code'=>'55197', 'type'=>'village', 'name'=>'Village 55197, Districts 5519, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2158, 'regionable_id'=>4999, 'regionable_type'=>'village']); //Baturetno
                DB::table('regions')->insert(['id'=>2159, 'parent'=>2151, 'code'=>'55198', 'type'=>'village', 'name'=>'Village 55198, Districts 5519, City 551, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2159, 'regionable_id'=>5000, 'regionable_type'=>'village']); //Banguntapan
        DB::table('regions')->insert(['id'=>2160, 'parent'=>2145, 'code'=>'552', 'type'=>'city', 'name'=>'City 552, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2160, 'regionable_id'=>35, 'regionable_type'=>'city']); //Yogyakarta city
        DB::table('regionables')->insert(['region_id'=>2160, 'regionable_id'=>37, 'regionable_type'=>'city']); //Sleman regencies
            DB::table('regions')->insert(['id'=>2161, 'parent'=>2160, 'code'=>'5526', 'type'=>'districts', 'name'=>'Districts 5526, City 552, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2161, 'regionable_id'=>475, 'regionable_type'=>'districts']); //Ngampilan
            DB::table('regionables')->insert(['region_id'=>2161, 'regionable_id'=>494, 'regionable_type'=>'districts']); //Godean
                DB::table('regions')->insert(['id'=>2162, 'parent'=>2161, 'code'=>'55264', 'type'=>'village', 'name'=>'Village 55264, Districts 5526, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2162, 'regionable_id'=>5060, 'regionable_type'=>'village']); //Sidoagung
                DB::table('regionables')->insert(['region_id'=>2162, 'regionable_id'=>5061, 'regionable_type'=>'village']); //Sidoarum
                DB::table('regionables')->insert(['region_id'=>2162, 'regionable_id'=>5062, 'regionable_type'=>'village']); //Sidokarto
                DB::table('regionables')->insert(['region_id'=>2162, 'regionable_id'=>5063, 'regionable_type'=>'village']); //Sidoluhur
                DB::table('regionables')->insert(['region_id'=>2162, 'regionable_id'=>5064, 'regionable_type'=>'village']); //Sidomoyo
                DB::table('regionables')->insert(['region_id'=>2162, 'regionable_id'=>5065, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>2162, 'regionable_id'=>5066, 'regionable_type'=>'village']); //Sidorejo
            DB::table('regions')->insert(['id'=>2163, 'parent'=>2160, 'code'=>'5528', 'type'=>'districts', 'name'=>'Districts 5528, City 552, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2163, 'regionable_id'=>495, 'regionable_type'=>'districts']); //Depok
            DB::table('regionables')->insert(['region_id'=>2163, 'regionable_id'=>496, 'regionable_type'=>'districts']); //Mlati
                DB::table('regions')->insert(['id'=>2164, 'parent'=>2163, 'code'=>'55284', 'type'=>'village', 'name'=>'Village 55284, Districts 5528, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2164, 'regionable_id'=>5070, 'regionable_type'=>'village']); //Sinduadi
                DB::table('regions')->insert(['id'=>2165, 'parent'=>2163, 'code'=>'55285', 'type'=>'village', 'name'=>'Village 55285, Districts 5528, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2165, 'regionable_id'=>5071, 'regionable_type'=>'village']); //Sendangadi
                DB::table('regions')->insert(['id'=>2166, 'parent'=>2163, 'code'=>'55286', 'type'=>'village', 'name'=>'Village 55286, Districts 5528, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2166, 'regionable_id'=>5072, 'regionable_type'=>'village']); //Tlogoadi
                DB::table('regions')->insert(['id'=>2167, 'parent'=>2163, 'code'=>'55287', 'type'=>'village', 'name'=>'Village 55287, Districts 5528, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2167, 'regionable_id'=>5073, 'regionable_type'=>'village']); //Tirtoadi
                DB::table('regions')->insert(['id'=>2168, 'parent'=>2163, 'code'=>'55288', 'type'=>'village', 'name'=>'Village 55288, Districts 5528, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2168, 'regionable_id'=>5074, 'regionable_type'=>'village']); //Sumberadi
            DB::table('regions')->insert(['id'=>2169, 'parent'=>2160, 'code'=>'5529', 'type'=>'districts', 'name'=>'Districts 5529, City 552, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2169, 'regionable_id'=>497, 'regionable_type'=>'districts']); //Gamping
                DB::table('regions')->insert(['id'=>2170, 'parent'=>2169, 'code'=>'55291', 'type'=>'village', 'name'=>'Village 55291, Districts 5529, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2170, 'regionable_id'=>5075, 'regionable_type'=>'village']); //Trihanggo
                DB::table('regions')->insert(['id'=>2171, 'parent'=>2169, 'code'=>'55293', 'type'=>'village', 'name'=>'Village 55293, Districts 5529, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2171, 'regionable_id'=>5076, 'regionable_type'=>'village']); //Banyuraden
                DB::table('regions')->insert(['id'=>2172, 'parent'=>2169, 'code'=>'55294', 'type'=>'village', 'name'=>'Village 55294, Districts 5529, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2172, 'regionable_id'=>5077, 'regionable_type'=>'village']); //Ambarketawang
                DB::table('regions')->insert(['id'=>2173, 'parent'=>2169, 'code'=>'55295', 'type'=>'village', 'name'=>'Village 55295, Districts 5529, City 552, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2173, 'regionable_id'=>5078, 'regionable_type'=>'village']); //Balecatur
        DB::table('regions')->insert(['id'=>2174, 'parent'=>2145, 'code'=>'555', 'type'=>'city', 'name'=>'City 555, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2174, 'regionable_id'=>37, 'regionable_type'=>'city']); //Sleman regencies
            DB::table('regions')->insert(['id'=>2175, 'parent'=>2174, 'code'=>'5551', 'type'=>'districts', 'name'=>'Districts 5551, City 555, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2175, 'regionable_id'=>498, 'regionable_type'=>'districts']); //Sleman
                DB::table('regions')->insert(['id'=>2176, 'parent'=>2175, 'code'=>'55511', 'type'=>'village', 'name'=>'Village 55511, Districts 5551, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2176, 'regionable_id'=>5080, 'regionable_type'=>'village']); //Tridadi
                DB::table('regions')->insert(['id'=>2177, 'parent'=>2175, 'code'=>'55512', 'type'=>'village', 'name'=>'Village 55512, Districts 5551, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2177, 'regionable_id'=>5081, 'regionable_type'=>'village']); //Pandowo Harjo
                DB::table('regions')->insert(['id'=>2178, 'parent'=>2175, 'code'=>'55513', 'type'=>'village', 'name'=>'Village 55513, Districts 5551, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2178, 'regionable_id'=>5082, 'regionable_type'=>'village']); //Tri Mulyo
                DB::table('regions')->insert(['id'=>2179, 'parent'=>2175, 'code'=>'55514', 'type'=>'village', 'name'=>'Village 55514, Districts 5551, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2179, 'regionable_id'=>5083, 'regionable_type'=>'village']); //Triharjo
                DB::table('regions')->insert(['id'=>2180, 'parent'=>2175, 'code'=>'55515', 'type'=>'village', 'name'=>'Village 55515, Districts 5551, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2180, 'regionable_id'=>5084, 'regionable_type'=>'village']); //Catur Harjo
            DB::table('regions')->insert(['id'=>2181, 'parent'=>2174, 'code'=>'5555', 'type'=>'districts', 'name'=>'Districts 5555, City 555, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2181, 'regionable_id'=>499, 'regionable_type'=>'districts']); //Turi
            DB::table('regionables')->insert(['region_id'=>2181, 'regionable_id'=>500, 'regionable_type'=>'districts']); //Tempel
                DB::table('regions')->insert(['id'=>2182, 'parent'=>2181, 'code'=>'55552', 'type'=>'village', 'name'=>'Village 55552, Districts 5555, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2182, 'regionable_id'=>5089, 'regionable_type'=>'village']); //Banyu Rejo
                DB::table('regionables')->insert(['region_id'=>2182, 'regionable_id'=>5090, 'regionable_type'=>'village']); //Lumbung Rejo
                DB::table('regionables')->insert(['region_id'=>2182, 'regionable_id'=>5091, 'regionable_type'=>'village']); //Margo Rejo
                DB::table('regionables')->insert(['region_id'=>2182, 'regionable_id'=>5092, 'regionable_type'=>'village']); //Merdiko Rejo
                DB::table('regionables')->insert(['region_id'=>2182, 'regionable_id'=>5093, 'regionable_type'=>'village']); //Moro Rejo
                DB::table('regionables')->insert(['region_id'=>2182, 'regionable_id'=>5094, 'regionable_type'=>'village']); //Pondok Rejo
                DB::table('regionables')->insert(['region_id'=>2182, 'regionable_id'=>5095, 'regionable_type'=>'village']); //Sumber Rejo
                DB::table('regionables')->insert(['region_id'=>2182, 'regionable_id'=>5096, 'regionable_type'=>'village']); //Tambak Rejo
            DB::table('regions')->insert(['id'=>2183, 'parent'=>2174, 'code'=>'5556', 'type'=>'districts', 'name'=>'Districts 5556, City 555, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2183, 'regionable_id'=>501, 'regionable_type'=>'districts']); //Seyegan
            DB::table('regionables')->insert(['region_id'=>2183, 'regionable_id'=>502, 'regionable_type'=>'districts']); //Minggir
            DB::table('regionables')->insert(['region_id'=>2183, 'regionable_id'=>503, 'regionable_type'=>'districts']); //Moyudan
                DB::table('regions')->insert(['id'=>2184, 'parent'=>2183, 'code'=>'55563', 'type'=>'village', 'name'=>'Village 55563, Districts 5556, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2184, 'regionable_id'=>5107, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>2184, 'regionable_id'=>5108, 'regionable_type'=>'village']); //Sumberarum
                DB::table('regionables')->insert(['region_id'=>2184, 'regionable_id'=>5109, 'regionable_type'=>'village']); //Sumberrahayu
                DB::table('regionables')->insert(['region_id'=>2184, 'regionable_id'=>5110, 'regionable_type'=>'village']); //Sumbersari
            DB::table('regions')->insert(['id'=>2185, 'parent'=>2174, 'code'=>'5557', 'type'=>'districts', 'name'=>'Districts 5557, City 555, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2185, 'regionable_id'=>504, 'regionable_type'=>'districts']); //Kalasan
            DB::table('regionables')->insert(['region_id'=>2185, 'regionable_id'=>505, 'regionable_type'=>'districts']); //Prambanan
            DB::table('regionables')->insert(['region_id'=>2185, 'regionable_id'=>506, 'regionable_type'=>'districts']); //Berbah
                DB::table('regions')->insert(['id'=>2186, 'parent'=>2185, 'code'=>'55573', 'type'=>'village', 'name'=>'Village 55573, Districts 5557, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2186, 'regionable_id'=>5121, 'regionable_type'=>'village']); //Jogo Tirto
                DB::table('regionables')->insert(['region_id'=>2186, 'regionable_id'=>5122, 'regionable_type'=>'village']); //Kali Tirto
                DB::table('regionables')->insert(['region_id'=>2186, 'regionable_id'=>5123, 'regionable_type'=>'village']); //Sendang Tirto
                DB::table('regionables')->insert(['region_id'=>2186, 'regionable_id'=>5124, 'regionable_type'=>'village']); //Tegal Tirto
            DB::table('regions')->insert(['id'=>2187, 'parent'=>2174, 'code'=>'5558', 'type'=>'districts', 'name'=>'Districts 5558, City 555, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2187, 'regionable_id'=>507, 'regionable_type'=>'districts']); //Ngaglik
            DB::table('regionables')->insert(['region_id'=>2187, 'regionable_id'=>508, 'regionable_type'=>'districts']); //Pakem
            DB::table('regionables')->insert(['region_id'=>2187, 'regionable_id'=>509, 'regionable_type'=>'districts']); //Cangkringan
            DB::table('regionables')->insert(['region_id'=>2187, 'regionable_id'=>510, 'regionable_type'=>'districts']); //Ngemplak
                DB::table('regions')->insert(['id'=>2188, 'parent'=>2187, 'code'=>'55584', 'type'=>'village', 'name'=>'Village 55584, Districts 5558, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2188, 'regionable_id'=>5141, 'regionable_type'=>'village']); //Bimo Martani
                DB::table('regionables')->insert(['region_id'=>2188, 'regionable_id'=>5142, 'regionable_type'=>'village']); //Sindumartani
                DB::table('regionables')->insert(['region_id'=>2188, 'regionable_id'=>5143, 'regionable_type'=>'village']); //Umbulmartani
                DB::table('regionables')->insert(['region_id'=>2188, 'regionable_id'=>5144, 'regionable_type'=>'village']); //Wedomartani
                DB::table('regionables')->insert(['region_id'=>2188, 'regionable_id'=>5145, 'regionable_type'=>'village']); //Widodo Martani
            DB::table('regions')->insert(['id'=>2189, 'parent'=>2174, 'code'=>'5559', 'type'=>'districts', 'name'=>'Districts 5559, City 555, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2189, 'regionable_id'=>497, 'regionable_type'=>'districts']); //Gamping
                DB::table('regions')->insert(['id'=>2190, 'parent'=>2189, 'code'=>'55592', 'type'=>'village', 'name'=>'Village 55592, Districts 5559, City 555, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2190, 'regionable_id'=>5079, 'regionable_type'=>'village']); //Nogotirto
        DB::table('regions')->insert(['id'=>2191, 'parent'=>2145, 'code'=>'556', 'type'=>'city', 'name'=>'City 556, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2191, 'regionable_id'=>38, 'regionable_type'=>'city']); //Kulon Progo regencies
            DB::table('regions')->insert(['id'=>2192, 'parent'=>2191, 'code'=>'5565', 'type'=>'districts', 'name'=>'Districts 5565, City 556, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2192, 'regionable_id'=>511, 'regionable_type'=>'districts']); //Wates
            DB::table('regionables')->insert(['region_id'=>2192, 'regionable_id'=>512, 'regionable_type'=>'districts']); //Pengasih
            DB::table('regionables')->insert(['region_id'=>2192, 'regionable_id'=>513, 'regionable_type'=>'districts']); //Kokap
            DB::table('regionables')->insert(['region_id'=>2192, 'regionable_id'=>514, 'regionable_type'=>'districts']); //Temon
            DB::table('regionables')->insert(['region_id'=>2192, 'regionable_id'=>515, 'regionable_type'=>'districts']); //Panjatan
                DB::table('regions')->insert(['id'=>2193, 'parent'=>2192, 'code'=>'55655', 'type'=>'village', 'name'=>'Village 55655, Districts 5565, City 556, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5181, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5182, 'regionable_type'=>'village']); //Bugel
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5183, 'regionable_type'=>'village']); //Cerme
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5184, 'regionable_type'=>'village']); //Depok
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5185, 'regionable_type'=>'village']); //Garongan
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5186, 'regionable_type'=>'village']); //Gotakan
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5187, 'regionable_type'=>'village']); //Kanoman
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5188, 'regionable_type'=>'village']); //Krembangan
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5189, 'regionable_type'=>'village']); //Panjatan
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5190, 'regionable_type'=>'village']); //Pleret
                DB::table('regionables')->insert(['region_id'=>2193, 'regionable_id'=>5191, 'regionable_type'=>'village']); //Tayuban
            DB::table('regions')->insert(['id'=>2194, 'parent'=>2191, 'code'=>'5566', 'type'=>'districts', 'name'=>'Districts 5566, City 556, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2194, 'regionable_id'=>516, 'regionable_type'=>'districts']); //Galur
            DB::table('regionables')->insert(['region_id'=>2194, 'regionable_id'=>517, 'regionable_type'=>'districts']); //Lendah
            DB::table('regionables')->insert(['region_id'=>2194, 'regionable_id'=>518, 'regionable_type'=>'districts']); //Sentolo
                DB::table('regions')->insert(['id'=>2195, 'parent'=>2194, 'code'=>'55664', 'type'=>'village', 'name'=>'Village 55664, Districts 5566, City 556, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2195, 'regionable_id'=>5205, 'regionable_type'=>'village']); //Banguncipto
                DB::table('regionables')->insert(['region_id'=>2195, 'regionable_id'=>5206, 'regionable_type'=>'village']); //Demangrejo
                DB::table('regionables')->insert(['region_id'=>2195, 'regionable_id'=>5207, 'regionable_type'=>'village']); //Kaliagung
                DB::table('regionables')->insert(['region_id'=>2195, 'regionable_id'=>5208, 'regionable_type'=>'village']); //Salamrejo
                DB::table('regionables')->insert(['region_id'=>2195, 'regionable_id'=>5209, 'regionable_type'=>'village']); //Sentolo
                DB::table('regionables')->insert(['region_id'=>2195, 'regionable_id'=>5210, 'regionable_type'=>'village']); //Srikayangan
                DB::table('regionables')->insert(['region_id'=>2195, 'regionable_id'=>5211, 'regionable_type'=>'village']); //Sukoreno
                DB::table('regionables')->insert(['region_id'=>2195, 'regionable_id'=>5212, 'regionable_type'=>'village']); //Tuksono
            DB::table('regions')->insert(['id'=>2196, 'parent'=>2191, 'code'=>'5567', 'type'=>'districts', 'name'=>'Districts 5567, City 556, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2196, 'regionable_id'=>519, 'regionable_type'=>'districts']); //Nanggulan
            DB::table('regionables')->insert(['region_id'=>2196, 'regionable_id'=>520, 'regionable_type'=>'districts']); //Kalibawang
            DB::table('regionables')->insert(['region_id'=>2196, 'regionable_id'=>521, 'regionable_type'=>'districts']); //Samigaluh
            DB::table('regionables')->insert(['region_id'=>2196, 'regionable_id'=>522, 'regionable_type'=>'districts']); //Girimulyo
                DB::table('regions')->insert(['id'=>2197, 'parent'=>2196, 'code'=>'55674', 'type'=>'village', 'name'=>'Village 55674, Districts 5567, City 556, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2197, 'regionable_id'=>5230, 'regionable_type'=>'village']); //Giripurwo
                DB::table('regionables')->insert(['region_id'=>2197, 'regionable_id'=>5231, 'regionable_type'=>'village']); //Jatimulyo
                DB::table('regionables')->insert(['region_id'=>2197, 'regionable_id'=>5232, 'regionable_type'=>'village']); //Pendoworejo
                DB::table('regionables')->insert(['region_id'=>2197, 'regionable_id'=>5233, 'regionable_type'=>'village']); //Purwosari
        DB::table('regions')->insert(['id'=>2198, 'parent'=>2145, 'code'=>'557', 'type'=>'city', 'name'=>'City 557, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2198, 'regionable_id'=>36, 'regionable_type'=>'city']); //Bantul regencies
            DB::table('regions')->insert(['id'=>2199, 'parent'=>2198, 'code'=>'5571', 'type'=>'districts', 'name'=>'Districts 5571, City 557, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2199, 'regionable_id'=>480, 'regionable_type'=>'districts']); //Bantul
                DB::table('regions')->insert(['id'=>2200, 'parent'=>2199, 'code'=>'55711', 'type'=>'village', 'name'=>'Village 55711, Districts 5571, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2200, 'regionable_id'=>5001, 'regionable_type'=>'village']); //Bantul
                DB::table('regions')->insert(['id'=>2201, 'parent'=>2199, 'code'=>'55712', 'type'=>'village', 'name'=>'Village 55712, Districts 5571, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2201, 'regionable_id'=>5002, 'regionable_type'=>'village']); //Ringin Harjo
                DB::table('regions')->insert(['id'=>2202, 'parent'=>2199, 'code'=>'55713', 'type'=>'village', 'name'=>'Village 55713, Districts 5571, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2202, 'regionable_id'=>5003, 'regionable_type'=>'village']); //Palbapang
                DB::table('regions')->insert(['id'=>2203, 'parent'=>2199, 'code'=>'55714', 'type'=>'village', 'name'=>'Village 55714, Districts 5571, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2203, 'regionable_id'=>5004, 'regionable_type'=>'village']); //Trirenggo
                DB::table('regions')->insert(['id'=>2204, 'parent'=>2199, 'code'=>'55715', 'type'=>'village', 'name'=>'Village 55715, Districts 5571, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2204, 'regionable_id'=>5005, 'regionable_type'=>'village']); //Sabdodadi
            DB::table('regions')->insert(['id'=>2205, 'parent'=>2198, 'code'=>'5575', 'type'=>'districts', 'name'=>'Districts 5575, City 557, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2205, 'regionable_id'=>481, 'regionable_type'=>'districts']); //Pajangan
            DB::table('regionables')->insert(['region_id'=>2205, 'regionable_id'=>482, 'regionable_type'=>'districts']); //Sedayu
                DB::table('regions')->insert(['id'=>2206, 'parent'=>2205, 'code'=>'55752', 'type'=>'village', 'name'=>'Village 55752, Districts 5575, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2206, 'regionable_id'=>5009, 'regionable_type'=>'village']); //Argodadi
                DB::table('regionables')->insert(['region_id'=>2206, 'regionable_id'=>5010, 'regionable_type'=>'village']); //Argomulyo
                DB::table('regionables')->insert(['region_id'=>2206, 'regionable_id'=>5011, 'regionable_type'=>'village']); //Argorejo
                DB::table('regionables')->insert(['region_id'=>2206, 'regionable_id'=>5012, 'regionable_type'=>'village']); //Argosari
            DB::table('regions')->insert(['id'=>2207, 'parent'=>2198, 'code'=>'5576', 'type'=>'districts', 'name'=>'Districts 5576, City 557, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2207, 'regionable_id'=>483, 'regionable_type'=>'districts']); //Pandak
            DB::table('regionables')->insert(['region_id'=>2207, 'regionable_id'=>484, 'regionable_type'=>'districts']); //Srandakan
            DB::table('regionables')->insert(['region_id'=>2207, 'regionable_id'=>485, 'regionable_type'=>'districts']); //Sanden
            DB::table('regionables')->insert(['region_id'=>2207, 'regionable_id'=>486, 'regionable_type'=>'districts']); //Bambang Lipuro
                DB::table('regions')->insert(['id'=>2208, 'parent'=>2207, 'code'=>'55764', 'type'=>'village', 'name'=>'Village 55764, Districts 5576, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2208, 'regionable_id'=>5023, 'regionable_type'=>'village']); //Mulyodadi
                DB::table('regionables')->insert(['region_id'=>2208, 'regionable_id'=>5024, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>2208, 'regionable_id'=>5025, 'regionable_type'=>'village']); //Sumbermulyo
            DB::table('regions')->insert(['id'=>2209, 'parent'=>2198, 'code'=>'5577', 'type'=>'districts', 'name'=>'Districts 5577, City 557, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2209, 'regionable_id'=>487, 'regionable_type'=>'districts']); //Pundong
            DB::table('regionables')->insert(['region_id'=>2209, 'regionable_id'=>488, 'regionable_type'=>'districts']); //Kretek
                DB::table('regions')->insert(['id'=>2210, 'parent'=>2209, 'code'=>'55772', 'type'=>'village', 'name'=>'Village 55772, Districts 5577, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2210, 'regionable_id'=>5029, 'regionable_type'=>'village']); //Donotirto
                DB::table('regionables')->insert(['region_id'=>2210, 'regionable_id'=>5030, 'regionable_type'=>'village']); //Parangtritis
                DB::table('regionables')->insert(['region_id'=>2210, 'regionable_id'=>5031, 'regionable_type'=>'village']); //Tirtohargo
                DB::table('regionables')->insert(['region_id'=>2210, 'regionable_id'=>5032, 'regionable_type'=>'village']); //Tirtomulyo
                DB::table('regionables')->insert(['region_id'=>2210, 'regionable_id'=>5033, 'regionable_type'=>'village']); //Tirtosari
            DB::table('regions')->insert(['id'=>2211, 'parent'=>2198, 'code'=>'5578', 'type'=>'districts', 'name'=>'Districts 5578, City 557, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2211, 'regionable_id'=>489, 'regionable_type'=>'districts']); //Jetis
            DB::table('regionables')->insert(['region_id'=>2211, 'regionable_id'=>490, 'regionable_type'=>'districts']); //Imogiri
            DB::table('regionables')->insert(['region_id'=>2211, 'regionable_id'=>491, 'regionable_type'=>'districts']); //Dlingo
                DB::table('regions')->insert(['id'=>2212, 'parent'=>2211, 'code'=>'55783', 'type'=>'village', 'name'=>'Village 55783, Districts 5578, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2212, 'regionable_id'=>5046, 'regionable_type'=>'village']); //Dlingo
                DB::table('regionables')->insert(['region_id'=>2212, 'regionable_id'=>5047, 'regionable_type'=>'village']); //Jatimulyo
                DB::table('regionables')->insert(['region_id'=>2212, 'regionable_id'=>5048, 'regionable_type'=>'village']); //Mangunan
                DB::table('regionables')->insert(['region_id'=>2212, 'regionable_id'=>5049, 'regionable_type'=>'village']); //Muntuk
                DB::table('regionables')->insert(['region_id'=>2212, 'regionable_id'=>5050, 'regionable_type'=>'village']); //Temuwuh
                DB::table('regionables')->insert(['region_id'=>2212, 'regionable_id'=>5051, 'regionable_type'=>'village']); //Terong
            DB::table('regions')->insert(['id'=>2213, 'parent'=>2198, 'code'=>'5579', 'type'=>'districts', 'name'=>'Districts 5579, City 557, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2213, 'regionable_id'=>492, 'regionable_type'=>'districts']); //Pleret
            DB::table('regionables')->insert(['region_id'=>2213, 'regionable_id'=>493, 'regionable_type'=>'districts']); //Piyungan
                DB::table('regions')->insert(['id'=>2214, 'parent'=>2213, 'code'=>'55792', 'type'=>'village', 'name'=>'Village 55792, Districts 5579, City 557, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2214, 'regionable_id'=>5057, 'regionable_type'=>'village']); //Sitimulyo
                DB::table('regionables')->insert(['region_id'=>2214, 'regionable_id'=>5058, 'regionable_type'=>'village']); //Srimartani
                DB::table('regionables')->insert(['region_id'=>2214, 'regionable_id'=>5059, 'regionable_type'=>'village']); //Srimulyo
        DB::table('regions')->insert(['id'=>2215, 'parent'=>2145, 'code'=>'558', 'type'=>'city', 'name'=>'City 558, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2215, 'regionable_id'=>39, 'regionable_type'=>'city']); //Gunung Kidul regencies
            DB::table('regions')->insert(['id'=>2216, 'parent'=>2215, 'code'=>'5581', 'type'=>'districts', 'name'=>'Districts 5581, City 558, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2216, 'regionable_id'=>523, 'regionable_type'=>'districts']); //Wonosari
                DB::table('regions')->insert(['id'=>2217, 'parent'=>2216, 'code'=>'55811', 'type'=>'village', 'name'=>'Village 55811, Districts 5581, City 558, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2217, 'regionable_id'=>5234, 'regionable_type'=>'village']); //Baleharjo
                DB::table('regions')->insert(['id'=>2218, 'parent'=>2216, 'code'=>'55813', 'type'=>'village', 'name'=>'Village 55813, Districts 5581, City 558, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2218, 'regionable_id'=>5235, 'regionable_type'=>'village']); //Kepek
            DB::table('regions')->insert(['id'=>2219, 'parent'=>2215, 'code'=>'5585', 'type'=>'districts', 'name'=>'Districts 5585, City 558, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2219, 'regionable_id'=>523, 'regionable_type'=>'districts']); //Wonosari
            DB::table('regionables')->insert(['region_id'=>2219, 'regionable_id'=>524, 'regionable_type'=>'districts']); //Nglipar
            DB::table('regionables')->insert(['region_id'=>2219, 'regionable_id'=>525, 'regionable_type'=>'districts']); //Ngawen
            DB::table('regionables')->insert(['region_id'=>2219, 'regionable_id'=>526, 'regionable_type'=>'districts']); //Semin
                DB::table('regions')->insert(['id'=>2220, 'parent'=>2219, 'code'=>'55854', 'type'=>'village', 'name'=>'Village 55854, Districts 5585, City 558, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5261, 'regionable_type'=>'village']); //Bendung
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5262, 'regionable_type'=>'village']); //Bulurejo
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5263, 'regionable_type'=>'village']); //Candi Rejo
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5264, 'regionable_type'=>'village']); //Kalitekuk
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5265, 'regionable_type'=>'village']); //Karang Sari
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5266, 'regionable_type'=>'village']); //Kemejing
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5267, 'regionable_type'=>'village']); //Pundung Sari
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5268, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5269, 'regionable_type'=>'village']); //Semin
                DB::table('regionables')->insert(['region_id'=>2220, 'regionable_id'=>5270, 'regionable_type'=>'village']); //Sumberrejo
            DB::table('regions')->insert(['id'=>2221, 'parent'=>2215, 'code'=>'5586', 'type'=>'districts', 'name'=>'Districts 5586, City 558, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2221, 'regionable_id'=>527, 'regionable_type'=>'districts']); //Playen
            DB::table('regionables')->insert(['region_id'=>2221, 'regionable_id'=>528, 'regionable_type'=>'districts']); //Patuk
            DB::table('regionables')->insert(['region_id'=>2221, 'regionable_id'=>529, 'regionable_type'=>'districts']); //Gedang Sari
                DB::table('regions')->insert(['id'=>2222, 'parent'=>2221, 'code'=>'55863', 'type'=>'village', 'name'=>'Village 55863, Districts 5586, City 558, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2222, 'regionable_id'=>5295, 'regionable_type'=>'village']); //Hargo Mulyo
                DB::table('regionables')->insert(['region_id'=>2222, 'regionable_id'=>5296, 'regionable_type'=>'village']); //Mertelu
                DB::table('regionables')->insert(['region_id'=>2222, 'regionable_id'=>5297, 'regionable_type'=>'village']); //Ngalang
                DB::table('regionables')->insert(['region_id'=>2222, 'regionable_id'=>5298, 'regionable_type'=>'village']); //Sampang
                DB::table('regionables')->insert(['region_id'=>2222, 'regionable_id'=>5299, 'regionable_type'=>'village']); //Serut
                DB::table('regionables')->insert(['region_id'=>2222, 'regionable_id'=>5300, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regionables')->insert(['region_id'=>2222, 'regionable_id'=>5301, 'regionable_type'=>'village']); //Watu Gajah
            DB::table('regions')->insert(['id'=>2223, 'parent'=>2215, 'code'=>'5587', 'type'=>'districts', 'name'=>'Districts 5587, City 558, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2223, 'regionable_id'=>530, 'regionable_type'=>'districts']); //Paliyan
            DB::table('regionables')->insert(['region_id'=>2223, 'regionable_id'=>531, 'regionable_type'=>'districts']); //Sapto Sari
            DB::table('regionables')->insert(['region_id'=>2223, 'regionable_id'=>532, 'regionable_type'=>'districts']); //Purwosari
            DB::table('regionables')->insert(['region_id'=>2223, 'regionable_id'=>533, 'regionable_type'=>'districts']); //Panggang
                DB::table('regions')->insert(['id'=>2224, 'parent'=>2223, 'code'=>'55872', 'type'=>'village', 'name'=>'Village 55872, Districts 5587, City 558, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5316, 'regionable_type'=>'village']); //Giriasih
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5317, 'regionable_type'=>'village']); //Giricahyo
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5318, 'regionable_type'=>'village']); //Girijati
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5319, 'regionable_type'=>'village']); //Giripurwo
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5320, 'regionable_type'=>'village']); //Giritirto
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5321, 'regionable_type'=>'village']); //Giriharjo
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5322, 'regionable_type'=>'village']); //Girikarto
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5323, 'regionable_type'=>'village']); //Girimulyo
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5324, 'regionable_type'=>'village']); //Girisekar
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5325, 'regionable_type'=>'village']); //Girisuko
                DB::table('regionables')->insert(['region_id'=>2224, 'regionable_id'=>5326, 'regionable_type'=>'village']); //Giriwungu
            DB::table('regions')->insert(['id'=>2225, 'parent'=>2215, 'code'=>'5588', 'type'=>'districts', 'name'=>'Districts 5588, City 558, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2225, 'regionable_id'=>534, 'regionable_type'=>'districts']); //Tanjungsari
            DB::table('regionables')->insert(['region_id'=>2225, 'regionable_id'=>535, 'regionable_type'=>'districts']); //Tepus
            DB::table('regionables')->insert(['region_id'=>2225, 'regionable_id'=>536, 'regionable_type'=>'districts']); //Girisubo
            DB::table('regionables')->insert(['region_id'=>2225, 'regionable_id'=>537, 'regionable_type'=>'districts']); //Rongkop
                DB::table('regions')->insert(['id'=>2226, 'parent'=>2225, 'code'=>'55883', 'type'=>'village', 'name'=>'Village 55883, Districts 5588, City 558, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5337, 'regionable_type'=>'village']); //Balong
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5338, 'regionable_type'=>'village']); //Jepitu
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5339, 'regionable_type'=>'village']); //Jerukwudel
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5340, 'regionable_type'=>'village']); //Karangawen
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5341, 'regionable_type'=>'village']); //Nglindur
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5342, 'regionable_type'=>'village']); //Pucung
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5343, 'regionable_type'=>'village']); //Songbanyu
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5344, 'regionable_type'=>'village']); //Tileng
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5345, 'regionable_type'=>'village']); //Bohol
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5346, 'regionable_type'=>'village']); //Botodayakan (botodayaan)
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5347, 'regionable_type'=>'village']); //Karangwuni
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5348, 'regionable_type'=>'village']); //Melikan
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5349, 'regionable_type'=>'village']); //Petir
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5350, 'regionable_type'=>'village']); //Pringombo
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5351, 'regionable_type'=>'village']); //Pucanganom
                DB::table('regionables')->insert(['region_id'=>2226, 'regionable_id'=>5352, 'regionable_type'=>'village']); //Semugih
            DB::table('regions')->insert(['id'=>2227, 'parent'=>2215, 'code'=>'5589', 'type'=>'districts', 'name'=>'Districts 5589, City 558, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2227, 'regionable_id'=>538, 'regionable_type'=>'districts']); //Karangmojo
            DB::table('regionables')->insert(['region_id'=>2227, 'regionable_id'=>539, 'regionable_type'=>'districts']); //Ponjong
            DB::table('regionables')->insert(['region_id'=>2227, 'regionable_id'=>540, 'regionable_type'=>'districts']); //Semanu
                DB::table('regions')->insert(['id'=>2228, 'parent'=>2227, 'code'=>'55893', 'type'=>'village', 'name'=>'Village 55893, Districts 5589, City 558, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2228, 'regionable_id'=>5373, 'regionable_type'=>'village']); //Candirejo
                DB::table('regionables')->insert(['region_id'=>2228, 'regionable_id'=>5374, 'regionable_type'=>'village']); //Dadapayu
                DB::table('regionables')->insert(['region_id'=>2228, 'regionable_id'=>5375, 'regionable_type'=>'village']); //Ngeposari
                DB::table('regionables')->insert(['region_id'=>2228, 'regionable_id'=>5376, 'regionable_type'=>'village']); //Pacarejo
                DB::table('regionables')->insert(['region_id'=>2228, 'regionable_id'=>5377, 'regionable_type'=>'village']); //Semanu

        //Jawa Tengah
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>10, 'regionable_type'=>'province']); //Jawa Tengah
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>90, 'regionable_type'=>'city']); //Semarang city
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>91, 'regionable_type'=>'city']); //Semarang regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>92, 'regionable_type'=>'city']); //Salatiga city
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>93, 'regionable_type'=>'city']); //Pekalongan city
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>94, 'regionable_type'=>'city']); //Pekalongan regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>95, 'regionable_type'=>'city']); //Batang regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>96, 'regionable_type'=>'city']); //Kendal regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>97, 'regionable_type'=>'city']); //Tegal city
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>98, 'regionable_type'=>'city']); //Tegal regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>99, 'regionable_type'=>'city']); //Brebes regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>100, 'regionable_type'=>'city']); //Pemalang regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>101, 'regionable_type'=>'city']); //Banyumas regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>102, 'regionable_type'=>'city']); //Cilacap regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>103, 'regionable_type'=>'city']); //Purbalingga regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>104, 'regionable_type'=>'city']); //Banjarnegara regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>105, 'regionable_type'=>'city']); //Purworejo regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>106, 'regionable_type'=>'city']); //Kebumen regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>107, 'regionable_type'=>'city']); //Magelang city
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>108, 'regionable_type'=>'city']); //Magelang regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>109, 'regionable_type'=>'city']); //Temanggung regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>110, 'regionable_type'=>'city']); //Wonosobo regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>111, 'regionable_type'=>'city']); //Surakarta (solo) city
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>112, 'regionable_type'=>'city']); //Sukoharjo regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>113, 'regionable_type'=>'city']); //Karanganyar regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>114, 'regionable_type'=>'city']); //Sragen regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>115, 'regionable_type'=>'city']); //Boyolali regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>116, 'regionable_type'=>'city']); //Klaten regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>117, 'regionable_type'=>'city']); //Wonogiri regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>118, 'regionable_type'=>'city']); //Grobogan regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>119, 'regionable_type'=>'city']); //Blora regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>120, 'regionable_type'=>'city']); //Pati regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>121, 'regionable_type'=>'city']); //Rembang regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>122, 'regionable_type'=>'city']); //Kudus regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>123, 'regionable_type'=>'city']); //Jepara regencies
        DB::table('regionables')->insert(['region_id'=>2145, 'regionable_id'=>124, 'regionable_type'=>'city']); //Demak regencies

        DB::table('regions')->insert(['id'=>2229, 'parent'=>2145, 'code'=>'501', 'type'=>'city', 'name'=>'City 501, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2229, 'regionable_id'=>90, 'regionable_type'=>'city']); //Semarang city
        DB::table('regionables')->insert(['region_id'=>2229, 'regionable_id'=>91, 'regionable_type'=>'city']); //Semarang regencies
            DB::table('regions')->insert(['id'=>2230, 'parent'=>2229, 'code'=>'5011', 'type'=>'districts', 'name'=>'Districts 5011, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2230, 'regionable_id'=>1744, 'regionable_type'=>'districts']); //Genuk
            DB::table('regionables')->insert(['region_id'=>2230, 'regionable_id'=>1745, 'regionable_type'=>'districts']); //Pedurungan
            DB::table('regionables')->insert(['region_id'=>2230, 'regionable_id'=>1779, 'regionable_type'=>'districts']); //Genuk
            DB::table('regionables')->insert(['region_id'=>2230, 'regionable_id'=>1780, 'regionable_type'=>'districts']); //Pedurungan
                DB::table('regions')->insert(['id'=>2231, 'parent'=>2230, 'code'=>'50113', 'type'=>'village', 'name'=>'Village 50113, Districts 5011, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2231, 'regionable_id'=>16561, 'regionable_type'=>'village']); //Penggaron Lor
                DB::table('regionables')->insert(['region_id'=>2231, 'regionable_id'=>16571, 'regionable_type'=>'village']); //Tlogomulyo
                DB::table('regionables')->insert(['region_id'=>2231, 'regionable_id'=>16973, 'regionable_type'=>'village']); //Penggaron Lor
                DB::table('regionables')->insert(['region_id'=>2231, 'regionable_id'=>16983, 'regionable_type'=>'village']); //Tlogomulyo
            DB::table('regions')->insert(['id'=>2232, 'parent'=>2229, 'code'=>'5012', 'type'=>'districts', 'name'=>'Districts 5012, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2232, 'regionable_id'=>1746, 'regionable_type'=>'districts']); //Semarang Timur
            DB::table('regionables')->insert(['region_id'=>2232, 'regionable_id'=>1747, 'regionable_type'=>'districts']); //Sumowono
            DB::table('regionables')->insert(['region_id'=>2232, 'regionable_id'=>1748, 'regionable_type'=>'districts']); //Bancak
            DB::table('regionables')->insert(['region_id'=>2232, 'regionable_id'=>1781, 'regionable_type'=>'districts']); //Semarang Timur
            DB::table('regionables')->insert(['region_id'=>2232, 'regionable_id'=>1782, 'regionable_type'=>'districts']); //Sumowono
            DB::table('regionables')->insert(['region_id'=>2232, 'regionable_id'=>1783, 'regionable_type'=>'districts']); //Bancak
                DB::table('regions')->insert(['id'=>2233, 'parent'=>2232, 'code'=>'50125', 'type'=>'village', 'name'=>'Village 50125, Districts 5012, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2233, 'regionable_id'=>16587, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2233, 'regionable_id'=>16609, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2233, 'regionable_id'=>16999, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2233, 'regionable_id'=>17021, 'regionable_type'=>'village']); //Rejosari
            DB::table('regions')->insert(['id'=>2234, 'parent'=>2229, 'code'=>'5013', 'type'=>'districts', 'name'=>'Districts 5013, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2234, 'regionable_id'=>1749, 'regionable_type'=>'districts']); //Tuntang
            DB::table('regionables')->insert(['region_id'=>2234, 'regionable_id'=>1750, 'regionable_type'=>'districts']); //Semarang Tengah
            DB::table('regionables')->insert(['region_id'=>2234, 'regionable_id'=>1784, 'regionable_type'=>'districts']); //Tuntang
            DB::table('regionables')->insert(['region_id'=>2234, 'regionable_id'=>1785, 'regionable_type'=>'districts']); //Semarang Tengah
                DB::table('regions')->insert(['id'=>2235, 'parent'=>2234, 'code'=>'50131', 'type'=>'village', 'name'=>'Village 50131, Districts 5013, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2235, 'regionable_id'=>16618, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>2235, 'regionable_id'=>16634, 'regionable_type'=>'village']); //Pendrikan Kidul
                DB::table('regionables')->insert(['region_id'=>2235, 'regionable_id'=>16635, 'regionable_type'=>'village']); //Pendrikan Lor
                DB::table('regionables')->insert(['region_id'=>2235, 'regionable_id'=>17030, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>2235, 'regionable_id'=>17046, 'regionable_type'=>'village']); //Pendrikan Kidul
                DB::table('regionables')->insert(['region_id'=>2235, 'regionable_id'=>17047, 'regionable_type'=>'village']); //Pendrikan Lor
                DB::table('regions')->insert(['id'=>2236, 'parent'=>2234, 'code'=>'50132', 'type'=>'village', 'name'=>'Village 50132, Districts 5013, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2236, 'regionable_id'=>16636, 'regionable_type'=>'village']); //Sekayu
                DB::table('regionables')->insert(['region_id'=>2236, 'regionable_id'=>17048, 'regionable_type'=>'village']); //Sekayu
                DB::table('regions')->insert(['id'=>2237, 'parent'=>2234, 'code'=>'50133', 'type'=>'village', 'name'=>'Village 50133, Districts 5013, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2237, 'regionable_id'=>16637, 'regionable_type'=>'village']); //Kembangsari
                DB::table('regionables')->insert(['region_id'=>2237, 'regionable_id'=>17049, 'regionable_type'=>'village']); //Kembangsari
                DB::table('regions')->insert(['id'=>2238, 'parent'=>2234, 'code'=>'50134', 'type'=>'village', 'name'=>'Village 50134, Districts 5013, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2238, 'regionable_id'=>16638, 'regionable_type'=>'village']); //Miroto
                DB::table('regionables')->insert(['region_id'=>2238, 'regionable_id'=>17050, 'regionable_type'=>'village']); //Miroto
                DB::table('regions')->insert(['id'=>2239, 'parent'=>2234, 'code'=>'50135', 'type'=>'village', 'name'=>'Village 50135, Districts 5013, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2239, 'regionable_id'=>16639, 'regionable_type'=>'village']); //Brumbungan
                DB::table('regionables')->insert(['region_id'=>2239, 'regionable_id'=>16640, 'regionable_type'=>'village']); //Gabahan
                DB::table('regionables')->insert(['region_id'=>2239, 'regionable_id'=>17051, 'regionable_type'=>'village']); //Brumbungan
                DB::table('regionables')->insert(['region_id'=>2239, 'regionable_id'=>17052, 'regionable_type'=>'village']); //Gabahan
                DB::table('regions')->insert(['id'=>2240, 'parent'=>2234, 'code'=>'50137', 'type'=>'village', 'name'=>'Village 50137, Districts 5013, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2240, 'regionable_id'=>16641, 'regionable_type'=>'village']); //Purwodinatan
                DB::table('regionables')->insert(['region_id'=>2240, 'regionable_id'=>17053, 'regionable_type'=>'village']); //Purwodinatan
                DB::table('regions')->insert(['id'=>2241, 'parent'=>2234, 'code'=>'50138', 'type'=>'village', 'name'=>'Village 50138, Districts 5013, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2241, 'regionable_id'=>16642, 'regionable_type'=>'village']); //Bangunharjo
                DB::table('regionables')->insert(['region_id'=>2241, 'regionable_id'=>17054, 'regionable_type'=>'village']); //Bangunharjo
                DB::table('regions')->insert(['id'=>2242, 'parent'=>2234, 'code'=>'50139', 'type'=>'village', 'name'=>'Village 50139, Districts 5013, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2242, 'regionable_id'=>16643, 'regionable_type'=>'village']); //Kranggan
                DB::table('regionables')->insert(['region_id'=>2242, 'regionable_id'=>16644, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>2242, 'regionable_id'=>17055, 'regionable_type'=>'village']); //Kranggan
                DB::table('regionables')->insert(['region_id'=>2242, 'regionable_id'=>17056, 'regionable_type'=>'village']); //Pandansari
            DB::table('regions')->insert(['id'=>2243, 'parent'=>2229, 'code'=>'5014', 'type'=>'districts', 'name'=>'Districts 5014, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2243, 'regionable_id'=>1751, 'regionable_type'=>'districts']); //Semarang Barat
            DB::table('regionables')->insert(['region_id'=>2243, 'regionable_id'=>1786, 'regionable_type'=>'districts']); //Semarang Barat
                DB::table('regions')->insert(['id'=>2244, 'parent'=>2243, 'code'=>'50141', 'type'=>'village', 'name'=>'Village 50141, Districts 5014, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2244, 'regionable_id'=>16649, 'regionable_type'=>'village']); //Bojongsalaman
                DB::table('regionables')->insert(['region_id'=>2244, 'regionable_id'=>16650, 'regionable_type'=>'village']); //Cabean
                DB::table('regionables')->insert(['region_id'=>2244, 'regionable_id'=>16651, 'regionable_type'=>'village']); //Krobokan
                DB::table('regionables')->insert(['region_id'=>2244, 'regionable_id'=>17061, 'regionable_type'=>'village']); //Bojongsalaman
                DB::table('regionables')->insert(['region_id'=>2244, 'regionable_id'=>17062, 'regionable_type'=>'village']); //Cabean
                DB::table('regionables')->insert(['region_id'=>2244, 'regionable_id'=>17063, 'regionable_type'=>'village']); //Krobokan
                DB::table('regions')->insert(['id'=>2245, 'parent'=>2243, 'code'=>'50144', 'type'=>'village', 'name'=>'Village 50144, Districts 5014, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2245, 'regionable_id'=>16652, 'regionable_type'=>'village']); //Tawangmas
                DB::table('regionables')->insert(['region_id'=>2245, 'regionable_id'=>16653, 'regionable_type'=>'village']); //Tawangsari
                DB::table('regionables')->insert(['region_id'=>2245, 'regionable_id'=>17064, 'regionable_type'=>'village']); //Tawangmas
                DB::table('regionables')->insert(['region_id'=>2245, 'regionable_id'=>17065, 'regionable_type'=>'village']); //Tawangsari
                DB::table('regions')->insert(['id'=>2246, 'parent'=>2243, 'code'=>'50145', 'type'=>'village', 'name'=>'Village 50145, Districts 5014, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2246, 'regionable_id'=>16654, 'regionable_type'=>'village']); //Kalibanteng Kulon
                DB::table('regionables')->insert(['region_id'=>2246, 'regionable_id'=>17066, 'regionable_type'=>'village']); //Kalibanteng Kulon
                DB::table('regions')->insert(['id'=>2247, 'parent'=>2243, 'code'=>'50146', 'type'=>'village', 'name'=>'Village 50146, Districts 5014, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2247, 'regionable_id'=>16655, 'regionable_type'=>'village']); //Krapyak
                DB::table('regionables')->insert(['region_id'=>2247, 'regionable_id'=>17067, 'regionable_type'=>'village']); //Krapyak
                DB::table('regions')->insert(['id'=>2248, 'parent'=>2243, 'code'=>'50147', 'type'=>'village', 'name'=>'Village 50147, Districts 5014, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2248, 'regionable_id'=>16656, 'regionable_type'=>'village']); //Manyaran
                DB::table('regionables')->insert(['region_id'=>2248, 'regionable_id'=>17068, 'regionable_type'=>'village']); //Manyaran
                DB::table('regions')->insert(['id'=>2249, 'parent'=>2243, 'code'=>'50148', 'type'=>'village', 'name'=>'Village 50148, Districts 5014, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2249, 'regionable_id'=>16657, 'regionable_type'=>'village']); //Bongsari
                DB::table('regionables')->insert(['region_id'=>2249, 'regionable_id'=>16658, 'regionable_type'=>'village']); //Ngemplak Simongan
                DB::table('regionables')->insert(['region_id'=>2249, 'regionable_id'=>17069, 'regionable_type'=>'village']); //Bongsari
                DB::table('regionables')->insert(['region_id'=>2249, 'regionable_id'=>17070, 'regionable_type'=>'village']); //Ngemplak Simongan
                DB::table('regions')->insert(['id'=>2250, 'parent'=>2243, 'code'=>'50149', 'type'=>'village', 'name'=>'Village 50149, Districts 5014, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>16659, 'regionable_type'=>'village']); //Gisikdrono
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>16660, 'regionable_type'=>'village']); //Kalibanteng Kidul
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>16661, 'regionable_type'=>'village']); //Karang Ayu
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>16662, 'regionable_type'=>'village']); //Salamanmloyo
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>16663, 'regionable_type'=>'village']); //Tambak Harjo
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>17071, 'regionable_type'=>'village']); //Gisikdrono
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>17072, 'regionable_type'=>'village']); //Kalibanteng Kidul
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>17073, 'regionable_type'=>'village']); //Karang Ayu
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>17074, 'regionable_type'=>'village']); //Salamanmloyo
                DB::table('regionables')->insert(['region_id'=>2250, 'regionable_id'=>17075, 'regionable_type'=>'village']); //Tambak Harjo
            DB::table('regions')->insert(['id'=>2251, 'parent'=>2229, 'code'=>'5015', 'type'=>'districts', 'name'=>'Districts 5015, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2251, 'regionable_id'=>1752, 'regionable_type'=>'districts']); //Tugu
            DB::table('regionables')->insert(['region_id'=>2251, 'regionable_id'=>1787, 'regionable_type'=>'districts']); //Tugu
                DB::table('regions')->insert(['id'=>2252, 'parent'=>2251, 'code'=>'50151', 'type'=>'village', 'name'=>'Village 50151, Districts 5015, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2252, 'regionable_id'=>16665, 'regionable_type'=>'village']); //Jerakah
                DB::table('regionables')->insert(['region_id'=>2252, 'regionable_id'=>17077, 'regionable_type'=>'village']); //Jerakah
                DB::table('regions')->insert(['id'=>2253, 'parent'=>2251, 'code'=>'50152', 'type'=>'village', 'name'=>'Village 50152, Districts 5015, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2253, 'regionable_id'=>16666, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>2253, 'regionable_id'=>17078, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regions')->insert(['id'=>2254, 'parent'=>2251, 'code'=>'50154', 'type'=>'village', 'name'=>'Village 50154, Districts 5015, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2254, 'regionable_id'=>16667, 'regionable_type'=>'village']); //Mangunharjo
                DB::table('regionables')->insert(['region_id'=>2254, 'regionable_id'=>17079, 'regionable_type'=>'village']); //Mangunharjo
                DB::table('regions')->insert(['id'=>2255, 'parent'=>2251, 'code'=>'50155', 'type'=>'village', 'name'=>'Village 50155, Districts 5015, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2255, 'regionable_id'=>16668, 'regionable_type'=>'village']); //Mangkang Kulon
                DB::table('regionables')->insert(['region_id'=>2255, 'regionable_id'=>17080, 'regionable_type'=>'village']); //Mangkang Kulon
                DB::table('regions')->insert(['id'=>2256, 'parent'=>2251, 'code'=>'50156', 'type'=>'village', 'name'=>'Village 50156, Districts 5015, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2256, 'regionable_id'=>16669, 'regionable_type'=>'village']); //Mangkang Wetan
                DB::table('regionables')->insert(['region_id'=>2256, 'regionable_id'=>17081, 'regionable_type'=>'village']); //Mangkang Wetan
            DB::table('regions')->insert(['id'=>2257, 'parent'=>2229, 'code'=>'5016', 'type'=>'districts', 'name'=>'Districts 5016, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2257, 'regionable_id'=>1753, 'regionable_type'=>'districts']); //Gayamsari
            DB::table('regionables')->insert(['region_id'=>2257, 'regionable_id'=>1788, 'regionable_type'=>'districts']); //Gayamsari
                DB::table('regions')->insert(['id'=>2258, 'parent'=>2257, 'code'=>'50162', 'type'=>'village', 'name'=>'Village 50162, Districts 5016, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2258, 'regionable_id'=>16672, 'regionable_type'=>'village']); //Siwalan
                DB::table('regionables')->insert(['region_id'=>2258, 'regionable_id'=>17084, 'regionable_type'=>'village']); //Siwalan
                DB::table('regions')->insert(['id'=>2259, 'parent'=>2257, 'code'=>'50163', 'type'=>'village', 'name'=>'Village 50163, Districts 5016, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2259, 'regionable_id'=>16673, 'regionable_type'=>'village']); //Sawahbesar
                DB::table('regionables')->insert(['region_id'=>2259, 'regionable_id'=>17085, 'regionable_type'=>'village']); //Sawahbesar
                DB::table('regions')->insert(['id'=>2260, 'parent'=>2257, 'code'=>'50164', 'type'=>'village', 'name'=>'Village 50164, Districts 5016, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2260, 'regionable_id'=>16674, 'regionable_type'=>'village']); //Kaligawe
                DB::table('regionables')->insert(['region_id'=>2260, 'regionable_id'=>17086, 'regionable_type'=>'village']); //Kaligawe
                DB::table('regions')->insert(['id'=>2261, 'parent'=>2257, 'code'=>'50166', 'type'=>'village', 'name'=>'Village 50166, Districts 5016, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2261, 'regionable_id'=>16675, 'regionable_type'=>'village']); //Sambirejo
                DB::table('regionables')->insert(['region_id'=>2261, 'regionable_id'=>17087, 'regionable_type'=>'village']); //Sambirejo
            DB::table('regions')->insert(['id'=>2262, 'parent'=>2229, 'code'=>'5017', 'type'=>'districts', 'name'=>'Districts 5017, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2262, 'regionable_id'=>1753, 'regionable_type'=>'districts']); //Gayamsari
            DB::table('regionables')->insert(['region_id'=>2262, 'regionable_id'=>1754, 'regionable_type'=>'districts']); //Semarang Utara
            DB::table('regionables')->insert(['region_id'=>2262, 'regionable_id'=>1788, 'regionable_type'=>'districts']); //Gayamsari
            DB::table('regionables')->insert(['region_id'=>2262, 'regionable_id'=>1789, 'regionable_type'=>'districts']); //Semarang Utara
                DB::table('regions')->insert(['id'=>2263, 'parent'=>2262, 'code'=>'50171', 'type'=>'village', 'name'=>'Village 50171, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2263, 'regionable_id'=>16679, 'regionable_type'=>'village']); //Plombokan
                DB::table('regionables')->insert(['region_id'=>2263, 'regionable_id'=>17091, 'regionable_type'=>'village']); //Plombokan
                DB::table('regions')->insert(['id'=>2264, 'parent'=>2262, 'code'=>'50172', 'type'=>'village', 'name'=>'Village 50172, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2264, 'regionable_id'=>16680, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>2264, 'regionable_id'=>17092, 'regionable_type'=>'village']); //Purwosari
                DB::table('regions')->insert(['id'=>2265, 'parent'=>2262, 'code'=>'50173', 'type'=>'village', 'name'=>'Village 50173, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2265, 'regionable_id'=>16681, 'regionable_type'=>'village']); //Dadapsari
                DB::table('regionables')->insert(['region_id'=>2265, 'regionable_id'=>17093, 'regionable_type'=>'village']); //Dadapsari
                DB::table('regions')->insert(['id'=>2266, 'parent'=>2262, 'code'=>'50174', 'type'=>'village', 'name'=>'Village 50174, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2266, 'regionable_id'=>16676, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regionables')->insert(['region_id'=>2266, 'regionable_id'=>16682, 'regionable_type'=>'village']); //Tanjungmas
                DB::table('regionables')->insert(['region_id'=>2266, 'regionable_id'=>17088, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regionables')->insert(['region_id'=>2266, 'regionable_id'=>17094, 'regionable_type'=>'village']); //Tanjungmas
                DB::table('regions')->insert(['id'=>2267, 'parent'=>2262, 'code'=>'50175', 'type'=>'village', 'name'=>'Village 50175, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2267, 'regionable_id'=>16683, 'regionable_type'=>'village']); //Bandarharjo
                DB::table('regionables')->insert(['region_id'=>2267, 'regionable_id'=>17095, 'regionable_type'=>'village']); //Bandarharjo
                DB::table('regions')->insert(['id'=>2268, 'parent'=>2262, 'code'=>'50176', 'type'=>'village', 'name'=>'Village 50176, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2268, 'regionable_id'=>16684, 'regionable_type'=>'village']); //Kuningan
                DB::table('regionables')->insert(['region_id'=>2268, 'regionable_id'=>17096, 'regionable_type'=>'village']); //Kuningan
                DB::table('regions')->insert(['id'=>2269, 'parent'=>2262, 'code'=>'50177', 'type'=>'village', 'name'=>'Village 50177, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2269, 'regionable_id'=>16685, 'regionable_type'=>'village']); //Panggung Lor
                DB::table('regionables')->insert(['region_id'=>2269, 'regionable_id'=>17097, 'regionable_type'=>'village']); //Panggung Lor
                DB::table('regions')->insert(['id'=>2270, 'parent'=>2262, 'code'=>'50178', 'type'=>'village', 'name'=>'Village 50178, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2270, 'regionable_id'=>16686, 'regionable_type'=>'village']); //Panggung Kidul
                DB::table('regionables')->insert(['region_id'=>2270, 'regionable_id'=>17098, 'regionable_type'=>'village']); //Panggung Kidul
                DB::table('regions')->insert(['id'=>2271, 'parent'=>2262, 'code'=>'50179', 'type'=>'village', 'name'=>'Village 50179, Districts 5017, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2271, 'regionable_id'=>16687, 'regionable_type'=>'village']); //Bulu Lor
                DB::table('regionables')->insert(['region_id'=>2271, 'regionable_id'=>17099, 'regionable_type'=>'village']); //Bulu Lor
            DB::table('regions')->insert(['id'=>2272, 'parent'=>2229, 'code'=>'5018', 'type'=>'districts', 'name'=>'Districts 5018, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1748, 'regionable_type'=>'districts']); //Bancak
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1750, 'regionable_type'=>'districts']); //Semarang Tengah
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1751, 'regionable_type'=>'districts']); //Semarang Barat
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1752, 'regionable_type'=>'districts']); //Tugu
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1755, 'regionable_type'=>'districts']); //Ngaliyan
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1756, 'regionable_type'=>'districts']); //Suruh
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1757, 'regionable_type'=>'districts']); //Bergas
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1783, 'regionable_type'=>'districts']); //Bancak
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1785, 'regionable_type'=>'districts']); //Semarang Tengah
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1786, 'regionable_type'=>'districts']); //Semarang Barat
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1787, 'regionable_type'=>'districts']); //Tugu
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1790, 'regionable_type'=>'districts']); //Ngaliyan
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1791, 'regionable_type'=>'districts']); //Suruh
            DB::table('regionables')->insert(['region_id'=>2272, 'regionable_id'=>1792, 'regionable_type'=>'districts']); //Bergas
                DB::table('regions')->insert(['id'=>2273, 'parent'=>2272, 'code'=>'50187', 'type'=>'village', 'name'=>'Village 50187, Districts 5018, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2273, 'regionable_id'=>16692, 'regionable_type'=>'village']); //Gondoriyo
                DB::table('regionables')->insert(['region_id'=>2273, 'regionable_id'=>16693, 'regionable_type'=>'village']); //Podorejo
                DB::table('regionables')->insert(['region_id'=>2273, 'regionable_id'=>16715, 'regionable_type'=>'village']); //Gondoriyo
                DB::table('regionables')->insert(['region_id'=>2273, 'regionable_id'=>17104, 'regionable_type'=>'village']); //Gondoriyo
                DB::table('regionables')->insert(['region_id'=>2273, 'regionable_id'=>17105, 'regionable_type'=>'village']); //Podorejo
                DB::table('regionables')->insert(['region_id'=>2273, 'regionable_id'=>17127, 'regionable_type'=>'village']); //Gondoriyo
            DB::table('regions')->insert(['id'=>2274, 'parent'=>2229, 'code'=>'5019', 'type'=>'districts', 'name'=>'Districts 5019, City 501, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2274, 'regionable_id'=>1745, 'regionable_type'=>'districts']); //Pedurungan
            DB::table('regionables')->insert(['region_id'=>2274, 'regionable_id'=>1780, 'regionable_type'=>'districts']); //Pedurungan
                DB::table('regions')->insert(['id'=>2275, 'parent'=>2274, 'code'=>'50192', 'type'=>'village', 'name'=>'Village 50192, Districts 5019, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2275, 'regionable_id'=>16572, 'regionable_type'=>'village']); //Pedurungan Kidul
                DB::table('regionables')->insert(['region_id'=>2275, 'regionable_id'=>16573, 'regionable_type'=>'village']); //Pedurungan Lor
                DB::table('regionables')->insert(['region_id'=>2275, 'regionable_id'=>16574, 'regionable_type'=>'village']); //Pedurungan Tengah
                DB::table('regionables')->insert(['region_id'=>2275, 'regionable_id'=>16984, 'regionable_type'=>'village']); //Pedurungan Kidul
                DB::table('regionables')->insert(['region_id'=>2275, 'regionable_id'=>16985, 'regionable_type'=>'village']); //Pedurungan Lor
                DB::table('regionables')->insert(['region_id'=>2275, 'regionable_id'=>16986, 'regionable_type'=>'village']); //Pedurungan Tengah
                DB::table('regions')->insert(['id'=>2276, 'parent'=>2274, 'code'=>'50194', 'type'=>'village', 'name'=>'Village 50194, Districts 5019, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2276, 'regionable_id'=>16575, 'regionable_type'=>'village']); //Penggaron Kidul
                DB::table('regionables')->insert(['region_id'=>2276, 'regionable_id'=>16987, 'regionable_type'=>'village']); //Penggaron Kidul
                DB::table('regions')->insert(['id'=>2277, 'parent'=>2274, 'code'=>'50196', 'type'=>'village', 'name'=>'Village 50196, Districts 5019, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2277, 'regionable_id'=>16576, 'regionable_type'=>'village']); //Tlogosari Kulon
                DB::table('regionables')->insert(['region_id'=>2277, 'regionable_id'=>16577, 'regionable_type'=>'village']); //Tlogosari Wetan
                DB::table('regionables')->insert(['region_id'=>2277, 'regionable_id'=>16988, 'regionable_type'=>'village']); //Tlogosari Kulon
                DB::table('regionables')->insert(['region_id'=>2277, 'regionable_id'=>16989, 'regionable_type'=>'village']); //Tlogosari Wetan
                DB::table('regions')->insert(['id'=>2278, 'parent'=>2274, 'code'=>'50197', 'type'=>'village', 'name'=>'Village 50197, Districts 5019, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2278, 'regionable_id'=>16578, 'regionable_type'=>'village']); //Muktiharjo Kidul
                DB::table('regionables')->insert(['region_id'=>2278, 'regionable_id'=>16990, 'regionable_type'=>'village']); //Muktiharjo Kidul
                DB::table('regions')->insert(['id'=>2279, 'parent'=>2274, 'code'=>'50198', 'type'=>'village', 'name'=>'Village 50198, Districts 5019, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2279, 'regionable_id'=>16579, 'regionable_type'=>'village']); //Kalicari
                DB::table('regionables')->insert(['region_id'=>2279, 'regionable_id'=>16991, 'regionable_type'=>'village']); //Kalicari
                DB::table('regions')->insert(['id'=>2280, 'parent'=>2274, 'code'=>'50199', 'type'=>'village', 'name'=>'Village 50199, Districts 5019, City 501, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2280, 'regionable_id'=>16580, 'regionable_type'=>'village']); //Plamongan Sari
                DB::table('regionables')->insert(['region_id'=>2280, 'regionable_id'=>16992, 'regionable_type'=>'village']); //Plamongan Sari
        DB::table('regions')->insert(['id'=>2281, 'parent'=>2145, 'code'=>'502', 'type'=>'city', 'name'=>'City 502, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2281, 'regionable_id'=>90, 'regionable_type'=>'city']); //Semarang city
        DB::table('regionables')->insert(['region_id'=>2281, 'regionable_id'=>91, 'regionable_type'=>'city']); //Semarang regencies
            DB::table('regions')->insert(['id'=>2282, 'parent'=>2281, 'code'=>'5021', 'type'=>'districts', 'name'=>'Districts 5021, City 502, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1749, 'regionable_type'=>'districts']); //Tuntang
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1755, 'regionable_type'=>'districts']); //Ngaliyan
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1758, 'regionable_type'=>'districts']); //Mijen
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1759, 'regionable_type'=>'districts']); //Pringapus
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1760, 'regionable_type'=>'districts']); //Bringin
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1784, 'regionable_type'=>'districts']); //Tuntang
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1790, 'regionable_type'=>'districts']); //Ngaliyan
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1793, 'regionable_type'=>'districts']); //Mijen
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1794, 'regionable_type'=>'districts']); //Pringapus
            DB::table('regionables')->insert(['region_id'=>2282, 'regionable_id'=>1795, 'regionable_type'=>'districts']); //Bringin
                DB::table('regions')->insert(['id'=>2283, 'parent'=>2282, 'code'=>'50218', 'type'=>'village', 'name'=>'Village 50218, Districts 5021, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2283, 'regionable_id'=>16751, 'regionable_type'=>'village']); //Rembes
                DB::table('regionables')->insert(['region_id'=>2283, 'regionable_id'=>17163, 'regionable_type'=>'village']); //Rembes
            DB::table('regions')->insert(['id'=>2284, 'parent'=>2281, 'code'=>'5022', 'type'=>'districts', 'name'=>'Districts 5022, City 502, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2284, 'regionable_id'=>1746, 'regionable_type'=>'districts']); //Semarang Timur
            DB::table('regionables')->insert(['region_id'=>2284, 'regionable_id'=>1761, 'regionable_type'=>'districts']); //Kaliwungu
            DB::table('regionables')->insert(['region_id'=>2284, 'regionable_id'=>1762, 'regionable_type'=>'districts']); //Gunungpati
            DB::table('regionables')->insert(['region_id'=>2284, 'regionable_id'=>1763, 'regionable_type'=>'districts']); //Tengaran
            DB::table('regionables')->insert(['region_id'=>2284, 'regionable_id'=>1781, 'regionable_type'=>'districts']); //Semarang Timur
            DB::table('regionables')->insert(['region_id'=>2284, 'regionable_id'=>1796, 'regionable_type'=>'districts']); //Kaliwungu
            DB::table('regionables')->insert(['region_id'=>2284, 'regionable_id'=>1797, 'regionable_type'=>'districts']); //Gunungpati
            DB::table('regionables')->insert(['region_id'=>2284, 'regionable_id'=>1798, 'regionable_type'=>'districts']); //Tengaran
                DB::table('regions')->insert(['id'=>2285, 'parent'=>2284, 'code'=>'50225', 'type'=>'village', 'name'=>'Village 50225, Districts 5022, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2285, 'regionable_id'=>16784, 'regionable_type'=>'village']); //Plalangan
                DB::table('regionables')->insert(['region_id'=>2285, 'regionable_id'=>16794, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regionables')->insert(['region_id'=>2285, 'regionable_id'=>17196, 'regionable_type'=>'village']); //Plalangan
                DB::table('regionables')->insert(['region_id'=>2285, 'regionable_id'=>17206, 'regionable_type'=>'village']); //Tegalrejo
            DB::table('regions')->insert(['id'=>2286, 'parent'=>2281, 'code'=>'5023', 'type'=>'districts', 'name'=>'Districts 5023, City 502, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2286, 'regionable_id'=>1744, 'regionable_type'=>'districts']); //Genuk
            DB::table('regionables')->insert(['region_id'=>2286, 'regionable_id'=>1746, 'regionable_type'=>'districts']); //Semarang Timur
            DB::table('regionables')->insert(['region_id'=>2286, 'regionable_id'=>1764, 'regionable_type'=>'districts']); //Gajah Mungkur
            DB::table('regionables')->insert(['region_id'=>2286, 'regionable_id'=>1779, 'regionable_type'=>'districts']); //Genuk
            DB::table('regionables')->insert(['region_id'=>2286, 'regionable_id'=>1781, 'regionable_type'=>'districts']); //Semarang Timur
            DB::table('regionables')->insert(['region_id'=>2286, 'regionable_id'=>1799, 'regionable_type'=>'districts']); //Gajah Mungkur
                DB::table('regions')->insert(['id'=>2287, 'parent'=>2286, 'code'=>'50231', 'type'=>'village', 'name'=>'Village 50231, Districts 5023, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2287, 'regionable_id'=>16570, 'regionable_type'=>'village']); //Genuksari
                DB::table('regionables')->insert(['region_id'=>2287, 'regionable_id'=>16809, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>2287, 'regionable_id'=>16810, 'regionable_type'=>'village']); //Lempongsari
                DB::table('regionables')->insert(['region_id'=>2287, 'regionable_id'=>16982, 'regionable_type'=>'village']); //Genuksari
                DB::table('regionables')->insert(['region_id'=>2287, 'regionable_id'=>17221, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>2287, 'regionable_id'=>17222, 'regionable_type'=>'village']); //Lempongsari
                DB::table('regions')->insert(['id'=>2288, 'parent'=>2286, 'code'=>'50232', 'type'=>'village', 'name'=>'Village 50232, Districts 5023, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2288, 'regionable_id'=>16592, 'regionable_type'=>'village']); //Karangtempel
                DB::table('regionables')->insert(['region_id'=>2288, 'regionable_id'=>16811, 'regionable_type'=>'village']); //Gajah Mungkur
                DB::table('regionables')->insert(['region_id'=>2288, 'regionable_id'=>16812, 'regionable_type'=>'village']); //Sampangan
                DB::table('regionables')->insert(['region_id'=>2288, 'regionable_id'=>17004, 'regionable_type'=>'village']); //Karangtempel
                DB::table('regionables')->insert(['region_id'=>2288, 'regionable_id'=>17223, 'regionable_type'=>'village']); //Gajah Mungkur
                DB::table('regionables')->insert(['region_id'=>2288, 'regionable_id'=>17224, 'regionable_type'=>'village']); //Sampangan
                DB::table('regions')->insert(['id'=>2289, 'parent'=>2286, 'code'=>'50233', 'type'=>'village', 'name'=>'Village 50233, Districts 5023, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2289, 'regionable_id'=>16813, 'regionable_type'=>'village']); //Bendan Ngisor
                DB::table('regionables')->insert(['region_id'=>2289, 'regionable_id'=>17225, 'regionable_type'=>'village']); //Bendan Ngisor
                DB::table('regions')->insert(['id'=>2290, 'parent'=>2286, 'code'=>'50235', 'type'=>'village', 'name'=>'Village 50235, Districts 5023, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2290, 'regionable_id'=>16814, 'regionable_type'=>'village']); //Bendan Duwur
                DB::table('regionables')->insert(['region_id'=>2290, 'regionable_id'=>16815, 'regionable_type'=>'village']); //Karang Rejo
                DB::table('regionables')->insert(['region_id'=>2290, 'regionable_id'=>17226, 'regionable_type'=>'village']); //Bendan Duwur
                DB::table('regionables')->insert(['region_id'=>2290, 'regionable_id'=>17227, 'regionable_type'=>'village']); //Karang Rejo
                DB::table('regions')->insert(['id'=>2291, 'parent'=>2286, 'code'=>'50237', 'type'=>'village', 'name'=>'Village 50237, Districts 5023, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2291, 'regionable_id'=>16816, 'regionable_type'=>'village']); //Petompon
                DB::table('regionables')->insert(['region_id'=>2291, 'regionable_id'=>17228, 'regionable_type'=>'village']); //Petompon
            DB::table('regions')->insert(['id'=>2292, 'parent'=>2281, 'code'=>'5024', 'type'=>'districts', 'name'=>'Districts 5024, City 502, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1745, 'regionable_type'=>'districts']); //Pedurungan
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1750, 'regionable_type'=>'districts']); //Semarang Tengah
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1753, 'regionable_type'=>'districts']); //Gayamsari
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1755, 'regionable_type'=>'districts']); //Ngaliyan
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1765, 'regionable_type'=>'districts']); //Semarang Selatan
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1780, 'regionable_type'=>'districts']); //Pedurungan
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1785, 'regionable_type'=>'districts']); //Semarang Tengah
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1788, 'regionable_type'=>'districts']); //Gayamsari
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1790, 'regionable_type'=>'districts']); //Ngaliyan
            DB::table('regionables')->insert(['region_id'=>2292, 'regionable_id'=>1800, 'regionable_type'=>'districts']); //Semarang Selatan
                DB::table('regions')->insert(['id'=>2293, 'parent'=>2292, 'code'=>'50241', 'type'=>'village', 'name'=>'Village 50241, Districts 5024, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2293, 'regionable_id'=>16646, 'regionable_type'=>'village']); //Karangkidul
                DB::table('regionables')->insert(['region_id'=>2293, 'regionable_id'=>16647, 'regionable_type'=>'village']); //Pekunden
                DB::table('regionables')->insert(['region_id'=>2293, 'regionable_id'=>16817, 'regionable_type'=>'village']); //Pleburan
                DB::table('regionables')->insert(['region_id'=>2293, 'regionable_id'=>17058, 'regionable_type'=>'village']); //Karangkidul
                DB::table('regionables')->insert(['region_id'=>2293, 'regionable_id'=>17059, 'regionable_type'=>'village']); //Pekunden
                DB::table('regionables')->insert(['region_id'=>2293, 'regionable_id'=>17229, 'regionable_type'=>'village']); //Pleburan
                DB::table('regions')->insert(['id'=>2294, 'parent'=>2292, 'code'=>'50242', 'type'=>'village', 'name'=>'Village 50242, Districts 5024, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2294, 'regionable_id'=>16818, 'regionable_type'=>'village']); //Peterongan
                DB::table('regionables')->insert(['region_id'=>2294, 'regionable_id'=>16819, 'regionable_type'=>'village']); //Wonodri
                DB::table('regionables')->insert(['region_id'=>2294, 'regionable_id'=>17230, 'regionable_type'=>'village']); //Peterongan
                DB::table('regionables')->insert(['region_id'=>2294, 'regionable_id'=>17231, 'regionable_type'=>'village']); //Wonodri
                DB::table('regions')->insert(['id'=>2295, 'parent'=>2292, 'code'=>'50244', 'type'=>'village', 'name'=>'Village 50244, Districts 5024, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2295, 'regionable_id'=>16697, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>2295, 'regionable_id'=>16820, 'regionable_type'=>'village']); //Randusari
                DB::table('regionables')->insert(['region_id'=>2295, 'regionable_id'=>17109, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>2295, 'regionable_id'=>17232, 'regionable_type'=>'village']); //Randusari
                DB::table('regions')->insert(['id'=>2296, 'parent'=>2292, 'code'=>'50245', 'type'=>'village', 'name'=>'Village 50245, Districts 5024, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2296, 'regionable_id'=>16821, 'regionable_type'=>'village']); //Barusari
                DB::table('regionables')->insert(['region_id'=>2296, 'regionable_id'=>17233, 'regionable_type'=>'village']); //Barusari
                DB::table('regions')->insert(['id'=>2297, 'parent'=>2292, 'code'=>'50246', 'type'=>'village', 'name'=>'Village 50246, Districts 5024, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2297, 'regionable_id'=>16581, 'regionable_type'=>'village']); //Gemah
                DB::table('regionables')->insert(['region_id'=>2297, 'regionable_id'=>16582, 'regionable_type'=>'village']); //Palebon
                DB::table('regionables')->insert(['region_id'=>2297, 'regionable_id'=>16822, 'regionable_type'=>'village']); //Bulustalan
                DB::table('regionables')->insert(['region_id'=>2297, 'regionable_id'=>16993, 'regionable_type'=>'village']); //Gemah
                DB::table('regionables')->insert(['region_id'=>2297, 'regionable_id'=>16994, 'regionable_type'=>'village']); //Palebon
                DB::table('regionables')->insert(['region_id'=>2297, 'regionable_id'=>17234, 'regionable_type'=>'village']); //Bulustalan
                DB::table('regions')->insert(['id'=>2298, 'parent'=>2292, 'code'=>'50248', 'type'=>'village', 'name'=>'Village 50248, Districts 5024, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2298, 'regionable_id'=>16677, 'regionable_type'=>'village']); //Gayamsari
                DB::table('regionables')->insert(['region_id'=>2298, 'regionable_id'=>16823, 'regionable_type'=>'village']); //Lamper Tengah
                DB::table('regionables')->insert(['region_id'=>2298, 'regionable_id'=>17089, 'regionable_type'=>'village']); //Gayamsari
                DB::table('regionables')->insert(['region_id'=>2298, 'regionable_id'=>17235, 'regionable_type'=>'village']); //Lamper Tengah
                DB::table('regions')->insert(['id'=>2299, 'parent'=>2292, 'code'=>'50249', 'type'=>'village', 'name'=>'Village 50249, Districts 5024, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2299, 'regionable_id'=>16678, 'regionable_type'=>'village']); //Pandean Lamper
                DB::table('regionables')->insert(['region_id'=>2299, 'regionable_id'=>16824, 'regionable_type'=>'village']); //Lamper Kidul
                DB::table('regionables')->insert(['region_id'=>2299, 'regionable_id'=>16825, 'regionable_type'=>'village']); //Lamper Lor
                DB::table('regionables')->insert(['region_id'=>2299, 'regionable_id'=>16826, 'regionable_type'=>'village']); //Mugassari
                DB::table('regionables')->insert(['region_id'=>2299, 'regionable_id'=>17090, 'regionable_type'=>'village']); //Pandean Lamper
                DB::table('regionables')->insert(['region_id'=>2299, 'regionable_id'=>17236, 'regionable_type'=>'village']); //Lamper Kidul
                DB::table('regionables')->insert(['region_id'=>2299, 'regionable_id'=>17237, 'regionable_type'=>'village']); //Lamper Lor
                DB::table('regionables')->insert(['region_id'=>2299, 'regionable_id'=>17238, 'regionable_type'=>'village']); //Mugassari
            DB::table('regions')->insert(['id'=>2300, 'parent'=>2281, 'code'=>'5025', 'type'=>'districts', 'name'=>'Districts 5025, City 502, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2300, 'regionable_id'=>1766, 'regionable_type'=>'districts']); //Candisari
            DB::table('regionables')->insert(['region_id'=>2300, 'regionable_id'=>1801, 'regionable_type'=>'districts']); //Candisari
                DB::table('regions')->insert(['id'=>2301, 'parent'=>2300, 'code'=>'50252', 'type'=>'village', 'name'=>'Village 50252, Districts 5025, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2301, 'regionable_id'=>16827, 'regionable_type'=>'village']); //Wonotingal
                DB::table('regionables')->insert(['region_id'=>2301, 'regionable_id'=>17239, 'regionable_type'=>'village']); //Wonotingal
                DB::table('regions')->insert(['id'=>2302, 'parent'=>2300, 'code'=>'50253', 'type'=>'village', 'name'=>'Village 50253, Districts 5025, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2302, 'regionable_id'=>16828, 'regionable_type'=>'village']); //Kaliwiru
                DB::table('regionables')->insert(['region_id'=>2302, 'regionable_id'=>17240, 'regionable_type'=>'village']); //Kaliwiru
                DB::table('regions')->insert(['id'=>2303, 'parent'=>2300, 'code'=>'50254', 'type'=>'village', 'name'=>'Village 50254, Districts 5025, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2303, 'regionable_id'=>16829, 'regionable_type'=>'village']); //Jatingaleh
                DB::table('regionables')->insert(['region_id'=>2303, 'regionable_id'=>17241, 'regionable_type'=>'village']); //Jatingaleh
                DB::table('regions')->insert(['id'=>2304, 'parent'=>2300, 'code'=>'50255', 'type'=>'village', 'name'=>'Village 50255, Districts 5025, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2304, 'regionable_id'=>16830, 'regionable_type'=>'village']); //Karanganyar Gunung
                DB::table('regionables')->insert(['region_id'=>2304, 'regionable_id'=>17242, 'regionable_type'=>'village']); //Karanganyar Gunung
                DB::table('regions')->insert(['id'=>2305, 'parent'=>2300, 'code'=>'50256', 'type'=>'village', 'name'=>'Village 50256, Districts 5025, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2305, 'regionable_id'=>16831, 'regionable_type'=>'village']); //Jomblang
                DB::table('regionables')->insert(['region_id'=>2305, 'regionable_id'=>17243, 'regionable_type'=>'village']); //Jomblang
                DB::table('regions')->insert(['id'=>2306, 'parent'=>2300, 'code'=>'50257', 'type'=>'village', 'name'=>'Village 50257, Districts 5025, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2306, 'regionable_id'=>16832, 'regionable_type'=>'village']); //Candi
                DB::table('regionables')->insert(['region_id'=>2306, 'regionable_id'=>17244, 'regionable_type'=>'village']); //Candi
            DB::table('regions')->insert(['id'=>2307, 'parent'=>2281, 'code'=>'5026', 'type'=>'districts', 'name'=>'Districts 5026, City 502, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2307, 'regionable_id'=>1767, 'regionable_type'=>'districts']); //Banyumanik
            DB::table('regionables')->insert(['region_id'=>2307, 'regionable_id'=>1802, 'regionable_type'=>'districts']); //Banyumanik
                DB::table('regions')->insert(['id'=>2308, 'parent'=>2307, 'code'=>'50261', 'type'=>'village', 'name'=>'Village 50261, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2308, 'regionable_id'=>16834, 'regionable_type'=>'village']); //Ngesrep
                DB::table('regionables')->insert(['region_id'=>2308, 'regionable_id'=>17246, 'regionable_type'=>'village']); //Ngesrep
                DB::table('regions')->insert(['id'=>2309, 'parent'=>2307, 'code'=>'50262', 'type'=>'village', 'name'=>'Village 50262, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2309, 'regionable_id'=>16835, 'regionable_type'=>'village']); //Tinjomoyo
                DB::table('regionables')->insert(['region_id'=>2309, 'regionable_id'=>17247, 'regionable_type'=>'village']); //Tinjomoyo
                DB::table('regions')->insert(['id'=>2310, 'parent'=>2307, 'code'=>'50263', 'type'=>'village', 'name'=>'Village 50263, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2310, 'regionable_id'=>16836, 'regionable_type'=>'village']); //Srondol Kulon
                DB::table('regionables')->insert(['region_id'=>2310, 'regionable_id'=>16837, 'regionable_type'=>'village']); //Srondol Wetan
                DB::table('regionables')->insert(['region_id'=>2310, 'regionable_id'=>17248, 'regionable_type'=>'village']); //Srondol Kulon
                DB::table('regionables')->insert(['region_id'=>2310, 'regionable_id'=>17249, 'regionable_type'=>'village']); //Srondol Wetan
                DB::table('regions')->insert(['id'=>2311, 'parent'=>2307, 'code'=>'50264', 'type'=>'village', 'name'=>'Village 50264, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2311, 'regionable_id'=>16838, 'regionable_type'=>'village']); //Banyumanik
                DB::table('regionables')->insert(['region_id'=>2311, 'regionable_id'=>17250, 'regionable_type'=>'village']); //Banyumanik
                DB::table('regions')->insert(['id'=>2312, 'parent'=>2307, 'code'=>'50265', 'type'=>'village', 'name'=>'Village 50265, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2312, 'regionable_id'=>16839, 'regionable_type'=>'village']); //Pudakpayung
                DB::table('regionables')->insert(['region_id'=>2312, 'regionable_id'=>17251, 'regionable_type'=>'village']); //Pudakpayung
                DB::table('regions')->insert(['id'=>2313, 'parent'=>2307, 'code'=>'50266', 'type'=>'village', 'name'=>'Village 50266, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2313, 'regionable_id'=>16840, 'regionable_type'=>'village']); //Gedawang
                DB::table('regionables')->insert(['region_id'=>2313, 'regionable_id'=>16841, 'regionable_type'=>'village']); //Jabungan
                DB::table('regionables')->insert(['region_id'=>2313, 'regionable_id'=>17252, 'regionable_type'=>'village']); //Gedawang
                DB::table('regionables')->insert(['region_id'=>2313, 'regionable_id'=>17253, 'regionable_type'=>'village']); //Jabungan
                DB::table('regions')->insert(['id'=>2314, 'parent'=>2307, 'code'=>'50267', 'type'=>'village', 'name'=>'Village 50267, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2314, 'regionable_id'=>16842, 'regionable_type'=>'village']); //Padangsari
                DB::table('regionables')->insert(['region_id'=>2314, 'regionable_id'=>17254, 'regionable_type'=>'village']); //Padangsari
                DB::table('regions')->insert(['id'=>2315, 'parent'=>2307, 'code'=>'50268', 'type'=>'village', 'name'=>'Village 50268, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2315, 'regionable_id'=>16843, 'regionable_type'=>'village']); //Pedalangan
                DB::table('regionables')->insert(['region_id'=>2315, 'regionable_id'=>17255, 'regionable_type'=>'village']); //Pedalangan
                DB::table('regions')->insert(['id'=>2316, 'parent'=>2307, 'code'=>'50269', 'type'=>'village', 'name'=>'Village 50269, Districts 5026, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2316, 'regionable_id'=>16844, 'regionable_type'=>'village']); //Sumurboto
                DB::table('regionables')->insert(['region_id'=>2316, 'regionable_id'=>17256, 'regionable_type'=>'village']); //Sumurboto
            DB::table('regions')->insert(['id'=>2317, 'parent'=>2281, 'code'=>'5027', 'type'=>'districts', 'name'=>'Districts 5027, City 502, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2317, 'regionable_id'=>1758, 'regionable_type'=>'districts']); //Mijen
            DB::table('regionables')->insert(['region_id'=>2317, 'regionable_id'=>1768, 'regionable_type'=>'districts']); //Jambu
            DB::table('regionables')->insert(['region_id'=>2317, 'regionable_id'=>1769, 'regionable_type'=>'districts']); //Tembalang
            DB::table('regionables')->insert(['region_id'=>2317, 'regionable_id'=>1793, 'regionable_type'=>'districts']); //Mijen
            DB::table('regionables')->insert(['region_id'=>2317, 'regionable_id'=>1803, 'regionable_type'=>'districts']); //Jambu
            DB::table('regionables')->insert(['region_id'=>2317, 'regionable_id'=>1804, 'regionable_type'=>'districts']); //Tembalang
                DB::table('regions')->insert(['id'=>2318, 'parent'=>2317, 'code'=>'50271', 'type'=>'village', 'name'=>'Village 50271, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2318, 'regionable_id'=>16845, 'regionable_type'=>'village']); //Genting
                DB::table('regionables')->insert(['region_id'=>2318, 'regionable_id'=>16855, 'regionable_type'=>'village']); //Meteseh
                DB::table('regionables')->insert(['region_id'=>2318, 'regionable_id'=>17257, 'regionable_type'=>'village']); //Genting
                DB::table('regionables')->insert(['region_id'=>2318, 'regionable_id'=>17267, 'regionable_type'=>'village']); //Meteseh
                DB::table('regions')->insert(['id'=>2319, 'parent'=>2317, 'code'=>'50272', 'type'=>'village', 'name'=>'Village 50272, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2319, 'regionable_id'=>16856, 'regionable_type'=>'village']); //Mangunharjo
                DB::table('regionables')->insert(['region_id'=>2319, 'regionable_id'=>16857, 'regionable_type'=>'village']); //Sendangmulyo
                DB::table('regionables')->insert(['region_id'=>2319, 'regionable_id'=>17268, 'regionable_type'=>'village']); //Mangunharjo
                DB::table('regionables')->insert(['region_id'=>2319, 'regionable_id'=>17269, 'regionable_type'=>'village']); //Sendangmulyo
                DB::table('regions')->insert(['id'=>2320, 'parent'=>2317, 'code'=>'50273', 'type'=>'village', 'name'=>'Village 50273, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2320, 'regionable_id'=>16858, 'regionable_type'=>'village']); //Kedungmundu
                DB::table('regionables')->insert(['region_id'=>2320, 'regionable_id'=>16859, 'regionable_type'=>'village']); //Sendangguwo
                DB::table('regionables')->insert(['region_id'=>2320, 'regionable_id'=>17270, 'regionable_type'=>'village']); //Kedungmundu
                DB::table('regionables')->insert(['region_id'=>2320, 'regionable_id'=>17271, 'regionable_type'=>'village']); //Sendangguwo
                DB::table('regions')->insert(['id'=>2321, 'parent'=>2317, 'code'=>'50274', 'type'=>'village', 'name'=>'Village 50274, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2321, 'regionable_id'=>16860, 'regionable_type'=>'village']); //Jangli
                DB::table('regionables')->insert(['region_id'=>2321, 'regionable_id'=>16861, 'regionable_type'=>'village']); //Tandang
                DB::table('regionables')->insert(['region_id'=>2321, 'regionable_id'=>17272, 'regionable_type'=>'village']); //Jangli
                DB::table('regionables')->insert(['region_id'=>2321, 'regionable_id'=>17273, 'regionable_type'=>'village']); //Tandang
                DB::table('regions')->insert(['id'=>2322, 'parent'=>2317, 'code'=>'50275', 'type'=>'village', 'name'=>'Village 50275, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2322, 'regionable_id'=>16740, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>2322, 'regionable_id'=>16862, 'regionable_type'=>'village']); //Tembalang
                DB::table('regionables')->insert(['region_id'=>2322, 'regionable_id'=>17152, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>2322, 'regionable_id'=>17274, 'regionable_type'=>'village']); //Tembalang
                DB::table('regions')->insert(['id'=>2323, 'parent'=>2317, 'code'=>'50276', 'type'=>'village', 'name'=>'Village 50276, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2323, 'regionable_id'=>16863, 'regionable_type'=>'village']); //Sambiroto
                DB::table('regionables')->insert(['region_id'=>2323, 'regionable_id'=>17275, 'regionable_type'=>'village']); //Sambiroto
                DB::table('regions')->insert(['id'=>2324, 'parent'=>2317, 'code'=>'50277', 'type'=>'village', 'name'=>'Village 50277, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2324, 'regionable_id'=>16864, 'regionable_type'=>'village']); //Bulusan
                DB::table('regionables')->insert(['region_id'=>2324, 'regionable_id'=>17276, 'regionable_type'=>'village']); //Bulusan
                DB::table('regions')->insert(['id'=>2325, 'parent'=>2317, 'code'=>'50278', 'type'=>'village', 'name'=>'Village 50278, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2325, 'regionable_id'=>16865, 'regionable_type'=>'village']); //Kramas
                DB::table('regionables')->insert(['region_id'=>2325, 'regionable_id'=>17277, 'regionable_type'=>'village']); //Kramas
                DB::table('regions')->insert(['id'=>2326, 'parent'=>2317, 'code'=>'50279', 'type'=>'village', 'name'=>'Village 50279, Districts 5027, City 502, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2326, 'regionable_id'=>16866, 'regionable_type'=>'village']); //Rowosari
                DB::table('regionables')->insert(['region_id'=>2326, 'regionable_id'=>17278, 'regionable_type'=>'village']); //Rowosari
        DB::table('regions')->insert(['id'=>2327, 'parent'=>2145, 'code'=>'505', 'type'=>'city', 'name'=>'City 505, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2327, 'regionable_id'=>90, 'regionable_type'=>'city']); //Semarang city
        DB::table('regionables')->insert(['region_id'=>2327, 'regionable_id'=>91, 'regionable_type'=>'city']); //Semarang regencies
            DB::table('regions')->insert(['id'=>2328, 'parent'=>2327, 'code'=>'5051', 'type'=>'districts', 'name'=>'Districts 5051, City 505, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2328, 'regionable_id'=>1758, 'regionable_type'=>'districts']); //Mijen
            DB::table('regionables')->insert(['region_id'=>2328, 'regionable_id'=>1759, 'regionable_type'=>'districts']); //Pringapus
            DB::table('regionables')->insert(['region_id'=>2328, 'regionable_id'=>1770, 'regionable_type'=>'districts']); //Ungaran Barat
            DB::table('regionables')->insert(['region_id'=>2328, 'regionable_id'=>1771, 'regionable_type'=>'districts']); //Ungaran Timur
            DB::table('regionables')->insert(['region_id'=>2328, 'regionable_id'=>1793, 'regionable_type'=>'districts']); //Mijen
            DB::table('regionables')->insert(['region_id'=>2328, 'regionable_id'=>1794, 'regionable_type'=>'districts']); //Pringapus
            DB::table('regionables')->insert(['region_id'=>2328, 'regionable_id'=>1805, 'regionable_type'=>'districts']); //Ungaran Barat
            DB::table('regionables')->insert(['region_id'=>2328, 'regionable_id'=>1806, 'regionable_type'=>'districts']); //Ungaran Timur
                DB::table('regions')->insert(['id'=>2329, 'parent'=>2328, 'code'=>'50514', 'type'=>'village', 'name'=>'Village 50514, Districts 5051, City 505, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2329, 'regionable_id'=>16878, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>2329, 'regionable_id'=>17290, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regions')->insert(['id'=>2330, 'parent'=>2328, 'code'=>'50515', 'type'=>'village', 'name'=>'Village 50515, Districts 5051, City 505, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2330, 'regionable_id'=>16879, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>2330, 'regionable_id'=>17291, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regions')->insert(['id'=>2331, 'parent'=>2328, 'code'=>'50516', 'type'=>'village', 'name'=>'Village 50516, Districts 5051, City 505, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2331, 'regionable_id'=>16880, 'regionable_type'=>'village']); //Susukan
                DB::table('regionables')->insert(['region_id'=>2331, 'regionable_id'=>17292, 'regionable_type'=>'village']); //Susukan
                DB::table('regions')->insert(['id'=>2332, 'parent'=>2328, 'code'=>'50519', 'type'=>'village', 'name'=>'Village 50519, Districts 5051, City 505, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16741, 'regionable_type'=>'village']); //Mijen
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16872, 'regionable_type'=>'village']); //Branjang
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16873, 'regionable_type'=>'village']); //Kalisidi
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16874, 'regionable_type'=>'village']); //Keji
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16875, 'regionable_type'=>'village']); //Lerep
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16881, 'regionable_type'=>'village']); //Beji
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16882, 'regionable_type'=>'village']); //Gedanganak
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16883, 'regionable_type'=>'village']); //Kalikayen
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16884, 'regionable_type'=>'village']); //Kalongan
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16885, 'regionable_type'=>'village']); //Kawengen
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16886, 'regionable_type'=>'village']); //Leyangan
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>16887, 'regionable_type'=>'village']); //Mluweh
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17153, 'regionable_type'=>'village']); //Mijen
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17284, 'regionable_type'=>'village']); //Branjang
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17285, 'regionable_type'=>'village']); //Kalisidi
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17286, 'regionable_type'=>'village']); //Keji
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17287, 'regionable_type'=>'village']); //Lerep
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17293, 'regionable_type'=>'village']); //Beji
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17294, 'regionable_type'=>'village']); //Gedanganak
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17295, 'regionable_type'=>'village']); //Kalikayen
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17296, 'regionable_type'=>'village']); //Kalongan
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17297, 'regionable_type'=>'village']); //Kawengen
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17298, 'regionable_type'=>'village']); //Leyangan
                DB::table('regionables')->insert(['region_id'=>2332, 'regionable_id'=>17299, 'regionable_type'=>'village']); //Mluweh
            DB::table('regions')->insert(['id'=>2333, 'parent'=>2327, 'code'=>'5055', 'type'=>'districts', 'name'=>'Districts 5055, City 505, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2333, 'regionable_id'=>1757, 'regionable_type'=>'districts']); //Bergas
            DB::table('regionables')->insert(['region_id'=>2333, 'regionable_id'=>1759, 'regionable_type'=>'districts']); //Pringapus
            DB::table('regionables')->insert(['region_id'=>2333, 'regionable_id'=>1770, 'regionable_type'=>'districts']); //Ungaran Barat
            DB::table('regionables')->insert(['region_id'=>2333, 'regionable_id'=>1792, 'regionable_type'=>'districts']); //Bergas
            DB::table('regionables')->insert(['region_id'=>2333, 'regionable_id'=>1794, 'regionable_type'=>'districts']); //Pringapus
            DB::table('regionables')->insert(['region_id'=>2333, 'regionable_id'=>1805, 'regionable_type'=>'districts']); //Ungaran Barat
                DB::table('regions')->insert(['id'=>2334, 'parent'=>2333, 'code'=>'50551', 'type'=>'village', 'name'=>'Village 50551, Districts 5055, City 505, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2334, 'regionable_id'=>16876, 'regionable_type'=>'village']); //Gogik
                DB::table('regionables')->insert(['region_id'=>2334, 'regionable_id'=>16877, 'regionable_type'=>'village']); //Nyatnyono
                DB::table('regionables')->insert(['region_id'=>2334, 'regionable_id'=>17288, 'regionable_type'=>'village']); //Gogik
                DB::table('regionables')->insert(['region_id'=>2334, 'regionable_id'=>17289, 'regionable_type'=>'village']); //Nyatnyono
        DB::table('regions')->insert(['id'=>2335, 'parent'=>2145, 'code'=>'506', 'type'=>'city', 'name'=>'City 506, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2335, 'regionable_id'=>90, 'regionable_type'=>'city']); //Semarang city
        DB::table('regionables')->insert(['region_id'=>2335, 'regionable_id'=>91, 'regionable_type'=>'city']); //Semarang regencies
            DB::table('regions')->insert(['id'=>2336, 'parent'=>2335, 'code'=>'5061', 'type'=>'districts', 'name'=>'Districts 5061, City 506, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1747, 'regionable_type'=>'districts']); //Sumowono
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1750, 'regionable_type'=>'districts']); //Semarang Tengah
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1766, 'regionable_type'=>'districts']); //Candisari
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1772, 'regionable_type'=>'districts']); //Ambarawa
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1773, 'regionable_type'=>'districts']); //Bandungan
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1782, 'regionable_type'=>'districts']); //Sumowono
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1785, 'regionable_type'=>'districts']); //Semarang Tengah
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1801, 'regionable_type'=>'districts']); //Candisari
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1807, 'regionable_type'=>'districts']); //Ambarawa
            DB::table('regionables')->insert(['region_id'=>2336, 'regionable_id'=>1808, 'regionable_type'=>'districts']); //Bandungan
                DB::table('regions')->insert(['id'=>2337, 'parent'=>2336, 'code'=>'50614', 'type'=>'village', 'name'=>'Village 50614, Districts 5061, City 506, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16833, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16892, 'regionable_type'=>'village']); //Baran
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16893, 'regionable_type'=>'village']); //Bejalen
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16894, 'regionable_type'=>'village']); //Ngampin
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16895, 'regionable_type'=>'village']); //Panjang
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16896, 'regionable_type'=>'village']); //Pasekan
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16897, 'regionable_type'=>'village']); //Pojoksari
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16898, 'regionable_type'=>'village']); //Bandungan
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16899, 'regionable_type'=>'village']); //Candi
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16900, 'regionable_type'=>'village']); //Duren
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16901, 'regionable_type'=>'village']); //Jetis
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16902, 'regionable_type'=>'village']); //Kenteng
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>16903, 'regionable_type'=>'village']); //Mlilir
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17245, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17304, 'regionable_type'=>'village']); //Baran
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17305, 'regionable_type'=>'village']); //Bejalen
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17306, 'regionable_type'=>'village']); //Ngampin
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17307, 'regionable_type'=>'village']); //Panjang
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17308, 'regionable_type'=>'village']); //Pasekan
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17309, 'regionable_type'=>'village']); //Pojoksari
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17310, 'regionable_type'=>'village']); //Bandungan
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17311, 'regionable_type'=>'village']); //Candi
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17312, 'regionable_type'=>'village']); //Duren
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17313, 'regionable_type'=>'village']); //Jetis
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17314, 'regionable_type'=>'village']); //Kenteng
                DB::table('regionables')->insert(['region_id'=>2337, 'regionable_id'=>17315, 'regionable_type'=>'village']); //Mlilir
            DB::table('regions')->insert(['id'=>2338, 'parent'=>2335, 'code'=>'5066', 'type'=>'districts', 'name'=>'Districts 5066, City 506, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1747, 'regionable_type'=>'districts']); //Sumowono
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1768, 'regionable_type'=>'districts']); //Jambu
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1773, 'regionable_type'=>'districts']); //Bandungan
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1774, 'regionable_type'=>'districts']); //Bawen
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1775, 'regionable_type'=>'districts']); //Banyubiru
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1782, 'regionable_type'=>'districts']); //Sumowono
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1803, 'regionable_type'=>'districts']); //Jambu
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1808, 'regionable_type'=>'districts']); //Bandungan
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1809, 'regionable_type'=>'districts']); //Bawen
            DB::table('regionables')->insert(['region_id'=>2338, 'regionable_id'=>1810, 'regionable_type'=>'districts']); //Banyubiru
                DB::table('regions')->insert(['id'=>2339, 'parent'=>2338, 'code'=>'50664', 'type'=>'village', 'name'=>'Village 50664, Districts 5066, City 506, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16917, 'regionable_type'=>'village']); //Banyubiru
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16918, 'regionable_type'=>'village']); //Gedong
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16919, 'regionable_type'=>'village']); //Kebondowo
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16920, 'regionable_type'=>'village']); //Kebumen
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16921, 'regionable_type'=>'village']); //Kemambang
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16922, 'regionable_type'=>'village']); //Ngrapah
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16923, 'regionable_type'=>'village']); //Rowoboni
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16924, 'regionable_type'=>'village']); //Sepakung
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16925, 'regionable_type'=>'village']); //Tegaron
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>16926, 'regionable_type'=>'village']); //Wirogomo
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17329, 'regionable_type'=>'village']); //Banyubiru
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17330, 'regionable_type'=>'village']); //Gedong
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17331, 'regionable_type'=>'village']); //Kebondowo
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17332, 'regionable_type'=>'village']); //Kebumen
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17333, 'regionable_type'=>'village']); //Kemambang
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17334, 'regionable_type'=>'village']); //Ngrapah
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17335, 'regionable_type'=>'village']); //Rowoboni
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17336, 'regionable_type'=>'village']); //Sepakung
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17337, 'regionable_type'=>'village']); //Tegaron
                DB::table('regionables')->insert(['region_id'=>2339, 'regionable_id'=>17338, 'regionable_type'=>'village']); //Wirogomo
        DB::table('regions')->insert(['id'=>2340, 'parent'=>2145, 'code'=>'507', 'type'=>'city', 'name'=>'City 507, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2340, 'regionable_id'=>90, 'regionable_type'=>'city']); //Semarang city
        DB::table('regionables')->insert(['region_id'=>2340, 'regionable_id'=>91, 'regionable_type'=>'city']); //Semarang regencies
        DB::table('regionables')->insert(['region_id'=>2340, 'regionable_id'=>92, 'regionable_type'=>'city']); //Salatiga city
            DB::table('regions')->insert(['id'=>2341, 'parent'=>2340, 'code'=>'5071', 'type'=>'districts', 'name'=>'Districts 5071, City 507, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2341, 'regionable_id'=>1814, 'regionable_type'=>'districts']); //Sidorejo
                DB::table('regions')->insert(['id'=>2342, 'parent'=>2341, 'code'=>'50711', 'type'=>'village', 'name'=>'Village 50711, Districts 5071, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2342, 'regionable_id'=>17382, 'regionable_type'=>'village']); //Salatiga
                DB::table('regions')->insert(['id'=>2343, 'parent'=>2341, 'code'=>'50712', 'type'=>'village', 'name'=>'Village 50712, Districts 5071, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2343, 'regionable_id'=>17383, 'regionable_type'=>'village']); //Kauman Kidul
                DB::table('regions')->insert(['id'=>2344, 'parent'=>2341, 'code'=>'50713', 'type'=>'village', 'name'=>'Village 50713, Districts 5071, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2344, 'regionable_id'=>17384, 'regionable_type'=>'village']); //Bugel
                DB::table('regions')->insert(['id'=>2345, 'parent'=>2341, 'code'=>'50714', 'type'=>'village', 'name'=>'Village 50714, Districts 5071, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2345, 'regionable_id'=>17385, 'regionable_type'=>'village']); //Sidorejo Lor
                DB::table('regions')->insert(['id'=>2346, 'parent'=>2341, 'code'=>'50715', 'type'=>'village', 'name'=>'Village 50715, Districts 5071, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2346, 'regionable_id'=>17386, 'regionable_type'=>'village']); //Blotongan
                DB::table('regions')->insert(['id'=>2347, 'parent'=>2341, 'code'=>'50716', 'type'=>'village', 'name'=>'Village 50716, Districts 5071, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2347, 'regionable_id'=>17387, 'regionable_type'=>'village']); //Pulutan
            DB::table('regions')->insert(['id'=>2348, 'parent'=>2340, 'code'=>'5072', 'type'=>'districts', 'name'=>'Districts 5072, City 507, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2348, 'regionable_id'=>1815, 'regionable_type'=>'districts']); //Sidomukti
                DB::table('regions')->insert(['id'=>2349, 'parent'=>2348, 'code'=>'50721', 'type'=>'village', 'name'=>'Village 50721, Districts 5072, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2349, 'regionable_id'=>17388, 'regionable_type'=>'village']); //Mangunsari
                DB::table('regions')->insert(['id'=>2350, 'parent'=>2348, 'code'=>'50722', 'type'=>'village', 'name'=>'Village 50722, Districts 5072, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2350, 'regionable_id'=>17389, 'regionable_type'=>'village']); //Dukuh
                DB::table('regions')->insert(['id'=>2351, 'parent'=>2348, 'code'=>'50723', 'type'=>'village', 'name'=>'Village 50723, Districts 5072, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2351, 'regionable_id'=>17390, 'regionable_type'=>'village']); //Kecandran
                DB::table('regions')->insert(['id'=>2352, 'parent'=>2348, 'code'=>'50724', 'type'=>'village', 'name'=>'Village 50724, Districts 5072, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2352, 'regionable_id'=>17391, 'regionable_type'=>'village']); //Kalicacing
            DB::table('regions')->insert(['id'=>2353, 'parent'=>2340, 'code'=>'5073', 'type'=>'districts', 'name'=>'Districts 5073, City 507, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2353, 'regionable_id'=>1816, 'regionable_type'=>'districts']); //Argomulyo
                DB::table('regions')->insert(['id'=>2354, 'parent'=>2353, 'code'=>'50732', 'type'=>'village', 'name'=>'Village 50732, Districts 5073, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2354, 'regionable_id'=>17392, 'regionable_type'=>'village']); //Ledok
                DB::table('regions')->insert(['id'=>2355, 'parent'=>2353, 'code'=>'50733', 'type'=>'village', 'name'=>'Village 50733, Districts 5073, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2355, 'regionable_id'=>17393, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regions')->insert(['id'=>2356, 'parent'=>2353, 'code'=>'50734', 'type'=>'village', 'name'=>'Village 50734, Districts 5073, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2356, 'regionable_id'=>17394, 'regionable_type'=>'village']); //Kumpulrejo
                DB::table('regions')->insert(['id'=>2357, 'parent'=>2353, 'code'=>'50735', 'type'=>'village', 'name'=>'Village 50735, Districts 5073, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2357, 'regionable_id'=>17395, 'regionable_type'=>'village']); //Randuacir
                DB::table('regions')->insert(['id'=>2358, 'parent'=>2353, 'code'=>'50736', 'type'=>'village', 'name'=>'Village 50736, Districts 5073, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2358, 'regionable_id'=>17396, 'regionable_type'=>'village']); //Cebongan
                DB::table('regionables')->insert(['region_id'=>2358, 'regionable_id'=>17397, 'regionable_type'=>'village']); //Noborejo
            DB::table('regions')->insert(['id'=>2359, 'parent'=>2340, 'code'=>'5074', 'type'=>'districts', 'name'=>'Districts 5074, City 507, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2359, 'regionable_id'=>1817, 'regionable_type'=>'districts']); //Tingkir
                DB::table('regions')->insert(['id'=>2360, 'parent'=>2359, 'code'=>'50741', 'type'=>'village', 'name'=>'Village 50741, Districts 5074, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2360, 'regionable_id'=>17398, 'regionable_type'=>'village']); //Sidorejo Kidul
                DB::table('regions')->insert(['id'=>2361, 'parent'=>2359, 'code'=>'50742', 'type'=>'village', 'name'=>'Village 50742, Districts 5074, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2361, 'regionable_id'=>17399, 'regionable_type'=>'village']); //Kutowinangun
                DB::table('regions')->insert(['id'=>2362, 'parent'=>2359, 'code'=>'50743', 'type'=>'village', 'name'=>'Village 50743, Districts 5074, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2362, 'regionable_id'=>17400, 'regionable_type'=>'village']); //Gendongan
                DB::table('regions')->insert(['id'=>2363, 'parent'=>2359, 'code'=>'50744', 'type'=>'village', 'name'=>'Village 50744, Districts 5074, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2363, 'regionable_id'=>17401, 'regionable_type'=>'village']); //Kalibening
                DB::table('regions')->insert(['id'=>2364, 'parent'=>2359, 'code'=>'50745', 'type'=>'village', 'name'=>'Village 50745, Districts 5074, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2364, 'regionable_id'=>17402, 'regionable_type'=>'village']); //Tingkir Tengah
                DB::table('regions')->insert(['id'=>2365, 'parent'=>2359, 'code'=>'50746', 'type'=>'village', 'name'=>'Village 50746, Districts 5074, City 507, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2365, 'regionable_id'=>17403, 'regionable_type'=>'village']); //Tingkir Lor
        DB::table('regions')->insert(['id'=>2366, 'parent'=>2145, 'code'=>'511', 'type'=>'city', 'name'=>'City 511, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2366, 'regionable_id'=>93, 'regionable_type'=>'city']); //Pekalongan city
        DB::table('regionables')->insert(['region_id'=>2366, 'regionable_id'=>94, 'regionable_type'=>'city']); //Pekalongan regencies
            DB::table('regions')->insert(['id'=>2367, 'parent'=>2366, 'code'=>'5111', 'type'=>'districts', 'name'=>'Districts 5111, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2367, 'regionable_id'=>1818, 'regionable_type'=>'districts']); //Pekalongan Barat
            DB::table('regionables')->insert(['region_id'=>2367, 'regionable_id'=>1841, 'regionable_type'=>'districts']); //Pekalongan Barat
                DB::table('regions')->insert(['id'=>2368, 'parent'=>2367, 'code'=>'51111', 'type'=>'village', 'name'=>'Village 51111, Districts 5111, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2368, 'regionable_id'=>17404, 'regionable_type'=>'village']); //Medono
                DB::table('regionables')->insert(['region_id'=>2368, 'regionable_id'=>17405, 'regionable_type'=>'village']); //Podosugih
                DB::table('regionables')->insert(['region_id'=>2368, 'regionable_id'=>17736, 'regionable_type'=>'village']); //Medono
                DB::table('regionables')->insert(['region_id'=>2368, 'regionable_id'=>17737, 'regionable_type'=>'village']); //Podosugih
                DB::table('regions')->insert(['id'=>2369, 'parent'=>2367, 'code'=>'51112', 'type'=>'village', 'name'=>'Village 51112, Districts 5111, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2369, 'regionable_id'=>17406, 'regionable_type'=>'village']); //Kebulen
                DB::table('regionables')->insert(['region_id'=>2369, 'regionable_id'=>17407, 'regionable_type'=>'village']); //Sapuro
                DB::table('regionables')->insert(['region_id'=>2369, 'regionable_id'=>17738, 'regionable_type'=>'village']); //Kebulen
                DB::table('regionables')->insert(['region_id'=>2369, 'regionable_id'=>17739, 'regionable_type'=>'village']); //Sapuro
                DB::table('regions')->insert(['id'=>2370, 'parent'=>2367, 'code'=>'51113', 'type'=>'village', 'name'=>'Village 51113, Districts 5111, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2370, 'regionable_id'=>17408, 'regionable_type'=>'village']); //Kergon
                DB::table('regionables')->insert(['region_id'=>2370, 'regionable_id'=>17740, 'regionable_type'=>'village']); //Kergon
                DB::table('regions')->insert(['id'=>2371, 'parent'=>2367, 'code'=>'51116', 'type'=>'village', 'name'=>'Village 51116, Districts 5111, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2371, 'regionable_id'=>17409, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regionables')->insert(['region_id'=>2371, 'regionable_id'=>17741, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regions')->insert(['id'=>2372, 'parent'=>2367, 'code'=>'51117', 'type'=>'village', 'name'=>'Village 51117, Districts 5111, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2372, 'regionable_id'=>17410, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2372, 'regionable_id'=>17411, 'regionable_type'=>'village']); //Kraton Kidul
                DB::table('regionables')->insert(['region_id'=>2372, 'regionable_id'=>17412, 'regionable_type'=>'village']); //Pringlangu
                DB::table('regionables')->insert(['region_id'=>2372, 'regionable_id'=>17742, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2372, 'regionable_id'=>17743, 'regionable_type'=>'village']); //Kraton Kidul
                DB::table('regionables')->insert(['region_id'=>2372, 'regionable_id'=>17744, 'regionable_type'=>'village']); //Pringlangu
                DB::table('regions')->insert(['id'=>2373, 'parent'=>2367, 'code'=>'51118', 'type'=>'village', 'name'=>'Village 51118, Districts 5111, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2373, 'regionable_id'=>17413, 'regionable_type'=>'village']); //Kramatsari
                DB::table('regionables')->insert(['region_id'=>2373, 'regionable_id'=>17414, 'regionable_type'=>'village']); //Pasirsari
                DB::table('regionables')->insert(['region_id'=>2373, 'regionable_id'=>17745, 'regionable_type'=>'village']); //Kramatsari
                DB::table('regionables')->insert(['region_id'=>2373, 'regionable_id'=>17746, 'regionable_type'=>'village']); //Pasirsari
                DB::table('regions')->insert(['id'=>2374, 'parent'=>2367, 'code'=>'51119', 'type'=>'village', 'name'=>'Village 51119, Districts 5111, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2374, 'regionable_id'=>17415, 'regionable_type'=>'village']); //Bendan
                DB::table('regionables')->insert(['region_id'=>2374, 'regionable_id'=>17747, 'regionable_type'=>'village']); //Bendan
            DB::table('regions')->insert(['id'=>2375, 'parent'=>2366, 'code'=>'5112', 'type'=>'districts', 'name'=>'Districts 5112, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2375, 'regionable_id'=>1819, 'regionable_type'=>'districts']); //Pekalongan Timur
            DB::table('regionables')->insert(['region_id'=>2375, 'regionable_id'=>1820, 'regionable_type'=>'districts']); //Wiradesa
            DB::table('regionables')->insert(['region_id'=>2375, 'regionable_id'=>1842, 'regionable_type'=>'districts']); //Pekalongan Timur
            DB::table('regionables')->insert(['region_id'=>2375, 'regionable_id'=>1843, 'regionable_type'=>'districts']); //Wiradesa
                DB::table('regions')->insert(['id'=>2376, 'parent'=>2375, 'code'=>'51127', 'type'=>'village', 'name'=>'Village 51127, Districts 5112, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2376, 'regionable_id'=>17423, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>2376, 'regionable_id'=>17430, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>2376, 'regionable_id'=>17755, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>2376, 'regionable_id'=>17762, 'regionable_type'=>'village']); //Kauman
            DB::table('regions')->insert(['id'=>2377, 'parent'=>2366, 'code'=>'5113', 'type'=>'districts', 'name'=>'Districts 5113, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2377, 'regionable_id'=>1821, 'regionable_type'=>'districts']); //Pekalongan Selatan
            DB::table('regionables')->insert(['region_id'=>2377, 'regionable_id'=>1822, 'regionable_type'=>'districts']); //Siwalan
            DB::table('regionables')->insert(['region_id'=>2377, 'regionable_id'=>1844, 'regionable_type'=>'districts']); //Pekalongan Selatan
            DB::table('regionables')->insert(['region_id'=>2377, 'regionable_id'=>1845, 'regionable_type'=>'districts']); //Siwalan
                DB::table('regions')->insert(['id'=>2378, 'parent'=>2377, 'code'=>'51137', 'type'=>'village', 'name'=>'Village 51137, Districts 5113, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17451, 'regionable_type'=>'village']); //Yosorejo
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17457, 'regionable_type'=>'village']); //Blacanan
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17458, 'regionable_type'=>'village']); //Blimbing Wuluh
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17459, 'regionable_type'=>'village']); //Boyo Teluk
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17460, 'regionable_type'=>'village']); //Depok
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17461, 'regionable_type'=>'village']); //Mejasem
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17462, 'regionable_type'=>'village']); //Pait
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17463, 'regionable_type'=>'village']); //Rembun
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17464, 'regionable_type'=>'village']); //Siwalan
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17465, 'regionable_type'=>'village']); //Tengeng Wetan
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17466, 'regionable_type'=>'village']); //Tengengkulon
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17467, 'regionable_type'=>'village']); //Tunjungsari
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17468, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17469, 'regionable_type'=>'village']); //Yosorejo
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17783, 'regionable_type'=>'village']); //Yosorejo
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17789, 'regionable_type'=>'village']); //Blacanan
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17790, 'regionable_type'=>'village']); //Blimbing Wuluh
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17791, 'regionable_type'=>'village']); //Boyo Teluk
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17792, 'regionable_type'=>'village']); //Depok
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17793, 'regionable_type'=>'village']); //Mejasem
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17794, 'regionable_type'=>'village']); //Pait
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17795, 'regionable_type'=>'village']); //Rembun
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17796, 'regionable_type'=>'village']); //Siwalan
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17797, 'regionable_type'=>'village']); //Tengeng Wetan
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17798, 'regionable_type'=>'village']); //Tengengkulon
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17799, 'regionable_type'=>'village']); //Tunjungsari
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17800, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>2378, 'regionable_id'=>17801, 'regionable_type'=>'village']); //Yosorejo
            DB::table('regions')->insert(['id'=>2379, 'parent'=>2366, 'code'=>'5114', 'type'=>'districts', 'name'=>'Districts 5114, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2379, 'regionable_id'=>1823, 'regionable_type'=>'districts']); //Pekalongan Utara
            DB::table('regionables')->insert(['region_id'=>2379, 'regionable_id'=>1846, 'regionable_type'=>'districts']); //Pekalongan Utara
                DB::table('regions')->insert(['id'=>2380, 'parent'=>2379, 'code'=>'51141', 'type'=>'village', 'name'=>'Village 51141, Districts 5114, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2380, 'regionable_id'=>17470, 'regionable_type'=>'village']); //Panjang Baru
                DB::table('regionables')->insert(['region_id'=>2380, 'regionable_id'=>17471, 'regionable_type'=>'village']); //Panjang Wetan
                DB::table('regionables')->insert(['region_id'=>2380, 'regionable_id'=>17802, 'regionable_type'=>'village']); //Panjang Baru
                DB::table('regionables')->insert(['region_id'=>2380, 'regionable_id'=>17803, 'regionable_type'=>'village']); //Panjang Wetan
                DB::table('regions')->insert(['id'=>2381, 'parent'=>2379, 'code'=>'51143', 'type'=>'village', 'name'=>'Village 51143, Districts 5114, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2381, 'regionable_id'=>17472, 'regionable_type'=>'village']); //Bandengan
                DB::table('regionables')->insert(['region_id'=>2381, 'regionable_id'=>17804, 'regionable_type'=>'village']); //Bandengan
                DB::table('regions')->insert(['id'=>2382, 'parent'=>2379, 'code'=>'51144', 'type'=>'village', 'name'=>'Village 51144, Districts 5114, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2382, 'regionable_id'=>17473, 'regionable_type'=>'village']); //Pabean
                DB::table('regionables')->insert(['region_id'=>2382, 'regionable_id'=>17805, 'regionable_type'=>'village']); //Pabean
                DB::table('regions')->insert(['id'=>2383, 'parent'=>2379, 'code'=>'51145', 'type'=>'village', 'name'=>'Village 51145, Districts 5114, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2383, 'regionable_id'=>17474, 'regionable_type'=>'village']); //Kraton Lor
                DB::table('regionables')->insert(['region_id'=>2383, 'regionable_id'=>17806, 'regionable_type'=>'village']); //Kraton Lor
                DB::table('regions')->insert(['id'=>2384, 'parent'=>2379, 'code'=>'51146', 'type'=>'village', 'name'=>'Village 51146, Districts 5114, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2384, 'regionable_id'=>17475, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>2384, 'regionable_id'=>17807, 'regionable_type'=>'village']); //Dukuh
                DB::table('regions')->insert(['id'=>2385, 'parent'=>2379, 'code'=>'51147', 'type'=>'village', 'name'=>'Village 51147, Districts 5114, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2385, 'regionable_id'=>17476, 'regionable_type'=>'village']); //Krapyak Kidul
                DB::table('regionables')->insert(['region_id'=>2385, 'regionable_id'=>17808, 'regionable_type'=>'village']); //Krapyak Kidul
                DB::table('regions')->insert(['id'=>2386, 'parent'=>2379, 'code'=>'51148', 'type'=>'village', 'name'=>'Village 51148, Districts 5114, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2386, 'regionable_id'=>17477, 'regionable_type'=>'village']); //Degayu
                DB::table('regionables')->insert(['region_id'=>2386, 'regionable_id'=>17809, 'regionable_type'=>'village']); //Degayu
                DB::table('regions')->insert(['id'=>2387, 'parent'=>2379, 'code'=>'51149', 'type'=>'village', 'name'=>'Village 51149, Districts 5114, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2387, 'regionable_id'=>17478, 'regionable_type'=>'village']); //Kandangpanjang
                DB::table('regionables')->insert(['region_id'=>2387, 'regionable_id'=>17479, 'regionable_type'=>'village']); //Krapyak Lor
                DB::table('regionables')->insert(['region_id'=>2387, 'regionable_id'=>17810, 'regionable_type'=>'village']); //Kandangpanjang
                DB::table('regionables')->insert(['region_id'=>2387, 'regionable_id'=>17811, 'regionable_type'=>'village']); //Krapyak Lor
            DB::table('regions')->insert(['id'=>2388, 'parent'=>2366, 'code'=>'5115', 'type'=>'districts', 'name'=>'Districts 5115, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1818, 'regionable_type'=>'districts']); //Pekalongan Barat
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1820, 'regionable_type'=>'districts']); //Wiradesa
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1824, 'regionable_type'=>'districts']); //Tirto
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1825, 'regionable_type'=>'districts']); //Wonokerto
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1826, 'regionable_type'=>'districts']); //Sragi
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1827, 'regionable_type'=>'districts']); //Bojong
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1841, 'regionable_type'=>'districts']); //Pekalongan Barat
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1843, 'regionable_type'=>'districts']); //Wiradesa
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1847, 'regionable_type'=>'districts']); //Tirto
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1848, 'regionable_type'=>'districts']); //Wonokerto
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1849, 'regionable_type'=>'districts']); //Sragi
            DB::table('regionables')->insert(['region_id'=>2388, 'regionable_id'=>1850, 'regionable_type'=>'districts']); //Bojong
                DB::table('regions')->insert(['id'=>2389, 'parent'=>2388, 'code'=>'51156', 'type'=>'village', 'name'=>'Village 51156, Districts 5115, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17524, 'regionable_type'=>'village']); //Babalan Kidul
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17525, 'regionable_type'=>'village']); //Babalanlor
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17526, 'regionable_type'=>'village']); //Bojong Minggir
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17527, 'regionable_type'=>'village']); //Bojong Wetan
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17528, 'regionable_type'=>'village']); //Bojonglor
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17529, 'regionable_type'=>'village']); //Bukur
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17530, 'regionable_type'=>'village']); //Duwet
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17531, 'regionable_type'=>'village']); //Jajar Wayang
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17532, 'regionable_type'=>'village']); //Kalipancur
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17533, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17534, 'regionable_type'=>'village']); //Kemasan
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17535, 'regionable_type'=>'village']); //Ketitang Kidul
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17536, 'regionable_type'=>'village']); //Ketitanglor
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17537, 'regionable_type'=>'village']); //Legok Clile
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17538, 'regionable_type'=>'village']); //Menjangan
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17539, 'regionable_type'=>'village']); //Pantianom
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17540, 'regionable_type'=>'village']); //Randu Muktiwaren
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17541, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17542, 'regionable_type'=>'village']); //Sembung Jambu
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17543, 'regionable_type'=>'village']); //Sumur Jomblangbogo
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17544, 'regionable_type'=>'village']); //Wangandowo
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17545, 'regionable_type'=>'village']); //Wiroditan
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17856, 'regionable_type'=>'village']); //Babalan Kidul
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17857, 'regionable_type'=>'village']); //Babalanlor
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17858, 'regionable_type'=>'village']); //Bojong Minggir
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17859, 'regionable_type'=>'village']); //Bojong Wetan
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17860, 'regionable_type'=>'village']); //Bojonglor
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17861, 'regionable_type'=>'village']); //Bukur
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17862, 'regionable_type'=>'village']); //Duwet
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17863, 'regionable_type'=>'village']); //Jajar Wayang
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17864, 'regionable_type'=>'village']); //Kalipancur
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17865, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17866, 'regionable_type'=>'village']); //Kemasan
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17867, 'regionable_type'=>'village']); //Ketitang Kidul
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17868, 'regionable_type'=>'village']); //Ketitanglor
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17869, 'regionable_type'=>'village']); //Legok Clile
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17870, 'regionable_type'=>'village']); //Menjangan
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17871, 'regionable_type'=>'village']); //Pantianom
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17872, 'regionable_type'=>'village']); //Randu Muktiwaren
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17873, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17874, 'regionable_type'=>'village']); //Sembung Jambu
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17875, 'regionable_type'=>'village']); //Sumur Jomblangbogo
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17876, 'regionable_type'=>'village']); //Wangandowo
                DB::table('regionables')->insert(['region_id'=>2389, 'regionable_id'=>17877, 'regionable_type'=>'village']); //Wiroditan
            DB::table('regions')->insert(['id'=>2390, 'parent'=>2366, 'code'=>'5116', 'type'=>'districts', 'name'=>'Districts 5116, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2390, 'regionable_id'=>1828, 'regionable_type'=>'districts']); //Kajen
            DB::table('regionables')->insert(['region_id'=>2390, 'regionable_id'=>1829, 'regionable_type'=>'districts']); //Kesesi
            DB::table('regionables')->insert(['region_id'=>2390, 'regionable_id'=>1830, 'regionable_type'=>'districts']); //Kandangserang
            DB::table('regionables')->insert(['region_id'=>2390, 'regionable_id'=>1831, 'regionable_type'=>'districts']); //Paninggaran
            DB::table('regionables')->insert(['region_id'=>2390, 'regionable_id'=>1851, 'regionable_type'=>'districts']); //Kajen
            DB::table('regionables')->insert(['region_id'=>2390, 'regionable_id'=>1852, 'regionable_type'=>'districts']); //Kesesi
            DB::table('regionables')->insert(['region_id'=>2390, 'regionable_id'=>1853, 'regionable_type'=>'districts']); //Kandangserang
            DB::table('regionables')->insert(['region_id'=>2390, 'regionable_id'=>1854, 'regionable_type'=>'districts']); //Paninggaran
                DB::table('regions')->insert(['id'=>2391, 'parent'=>2390, 'code'=>'51164', 'type'=>'village', 'name'=>'Village 51164, Districts 5116, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17608, 'regionable_type'=>'village']); //Bedagung
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17609, 'regionable_type'=>'village']); //Botosari
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17610, 'regionable_type'=>'village']); //Domiyang
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17611, 'regionable_type'=>'village']); //Kaliboja
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17612, 'regionable_type'=>'village']); //Kaliombo
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17613, 'regionable_type'=>'village']); //Krandegan
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17614, 'regionable_type'=>'village']); //Lambanggelun
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17615, 'regionable_type'=>'village']); //Lomeneng
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17616, 'regionable_type'=>'village']); //Notogiwang
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17617, 'regionable_type'=>'village']); //Paninggaran
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17618, 'regionable_type'=>'village']); //Sawangan
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17619, 'regionable_type'=>'village']); //Tanggeran
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17620, 'regionable_type'=>'village']); //Tenogo
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17621, 'regionable_type'=>'village']); //Werdi
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17622, 'regionable_type'=>'village']); //Winduaji
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17940, 'regionable_type'=>'village']); //Bedagung
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17941, 'regionable_type'=>'village']); //Botosari
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17942, 'regionable_type'=>'village']); //Domiyang
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17943, 'regionable_type'=>'village']); //Kaliboja
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17944, 'regionable_type'=>'village']); //Kaliombo
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17945, 'regionable_type'=>'village']); //Krandegan
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17946, 'regionable_type'=>'village']); //Lambanggelun
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17947, 'regionable_type'=>'village']); //Lomeneng
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17948, 'regionable_type'=>'village']); //Notogiwang
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17949, 'regionable_type'=>'village']); //Paninggaran
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17950, 'regionable_type'=>'village']); //Sawangan
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17951, 'regionable_type'=>'village']); //Tanggeran
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17952, 'regionable_type'=>'village']); //Tenogo
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17953, 'regionable_type'=>'village']); //Werdi
                DB::table('regionables')->insert(['region_id'=>2391, 'regionable_id'=>17954, 'regionable_type'=>'village']); //Winduaji
            DB::table('regions')->insert(['id'=>2392, 'parent'=>2366, 'code'=>'5117', 'type'=>'districts', 'name'=>'Districts 5117, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2392, 'regionable_id'=>1821, 'regionable_type'=>'districts']); //Pekalongan Selatan
            DB::table('regionables')->insert(['region_id'=>2392, 'regionable_id'=>1832, 'regionable_type'=>'districts']); //Buaran
            DB::table('regionables')->insert(['region_id'=>2392, 'regionable_id'=>1833, 'regionable_type'=>'districts']); //Kedungwuni
            DB::table('regionables')->insert(['region_id'=>2392, 'regionable_id'=>1834, 'regionable_type'=>'districts']); //Karangdadap
            DB::table('regionables')->insert(['region_id'=>2392, 'regionable_id'=>1844, 'regionable_type'=>'districts']); //Pekalongan Selatan
            DB::table('regionables')->insert(['region_id'=>2392, 'regionable_id'=>1855, 'regionable_type'=>'districts']); //Buaran
            DB::table('regionables')->insert(['region_id'=>2392, 'regionable_id'=>1856, 'regionable_type'=>'districts']); //Kedungwuni
            DB::table('regionables')->insert(['region_id'=>2392, 'regionable_id'=>1857, 'regionable_type'=>'districts']); //Karangdadap
                DB::table('regions')->insert(['id'=>2393, 'parent'=>2392, 'code'=>'51174', 'type'=>'village', 'name'=>'Village 51174, Districts 5117, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17652, 'regionable_type'=>'village']); //Jrebeng Kembang
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17653, 'regionable_type'=>'village']); //Kaligawe
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17654, 'regionable_type'=>'village']); //Kalilembu
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17655, 'regionable_type'=>'village']); //Karangdadap
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17656, 'regionable_type'=>'village']); //Kebonrowo Pucang
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17657, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17658, 'regionable_type'=>'village']); //Kedung Kebo
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17659, 'regionable_type'=>'village']); //Logandeng
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17660, 'regionable_type'=>'village']); //Pagumengan Mas
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17661, 'regionable_type'=>'village']); //Pangkah
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17662, 'regionable_type'=>'village']); //Pegandon
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17984, 'regionable_type'=>'village']); //Jrebeng Kembang
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17985, 'regionable_type'=>'village']); //Kaligawe
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17986, 'regionable_type'=>'village']); //Kalilembu
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17987, 'regionable_type'=>'village']); //Karangdadap
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17988, 'regionable_type'=>'village']); //Kebonrowo Pucang
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17989, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17990, 'regionable_type'=>'village']); //Kedung Kebo
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17991, 'regionable_type'=>'village']); //Logandeng
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17992, 'regionable_type'=>'village']); //Pagumengan Mas
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17993, 'regionable_type'=>'village']); //Pangkah
                DB::table('regionables')->insert(['region_id'=>2393, 'regionable_id'=>17994, 'regionable_type'=>'village']); //Pegandon
            DB::table('regions')->insert(['id'=>2394, 'parent'=>2366, 'code'=>'5118', 'type'=>'districts', 'name'=>'Districts 5118, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2394, 'regionable_id'=>1824, 'regionable_type'=>'districts']); //Tirto
            DB::table('regionables')->insert(['region_id'=>2394, 'regionable_id'=>1835, 'regionable_type'=>'districts']); //Wonopringgo
            DB::table('regionables')->insert(['region_id'=>2394, 'regionable_id'=>1836, 'regionable_type'=>'districts']); //Karanganyar
            DB::table('regionables')->insert(['region_id'=>2394, 'regionable_id'=>1837, 'regionable_type'=>'districts']); //Lebakbarang
            DB::table('regionables')->insert(['region_id'=>2394, 'regionable_id'=>1847, 'regionable_type'=>'districts']); //Tirto
            DB::table('regionables')->insert(['region_id'=>2394, 'regionable_id'=>1858, 'regionable_type'=>'districts']); //Wonopringgo
            DB::table('regionables')->insert(['region_id'=>2394, 'regionable_id'=>1859, 'regionable_type'=>'districts']); //Karanganyar
            DB::table('regionables')->insert(['region_id'=>2394, 'regionable_id'=>1860, 'regionable_type'=>'districts']); //Lebakbarang
                DB::table('regions')->insert(['id'=>2395, 'parent'=>2394, 'code'=>'51183', 'type'=>'village', 'name'=>'Village 51183, Districts 5118, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17692, 'regionable_type'=>'village']); //Bantar Kulon
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17693, 'regionable_type'=>'village']); //Depok
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17694, 'regionable_type'=>'village']); //Kapundutan
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17695, 'regionable_type'=>'village']); //Kutorembet
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17696, 'regionable_type'=>'village']); //Lebakbarang
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17697, 'regionable_type'=>'village']); //Mendolo
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17698, 'regionable_type'=>'village']); //Pamutuh
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17699, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17700, 'regionable_type'=>'village']); //Tembelang Gunung
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17701, 'regionable_type'=>'village']); //Timbangsari
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>17702, 'regionable_type'=>'village']); //Wonosido
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18024, 'regionable_type'=>'village']); //Bantar Kulon
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18025, 'regionable_type'=>'village']); //Depok
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18026, 'regionable_type'=>'village']); //Kapundutan
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18027, 'regionable_type'=>'village']); //Kutorembet
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18028, 'regionable_type'=>'village']); //Lebakbarang
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18029, 'regionable_type'=>'village']); //Mendolo
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18030, 'regionable_type'=>'village']); //Pamutuh
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18031, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18032, 'regionable_type'=>'village']); //Tembelang Gunung
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18033, 'regionable_type'=>'village']); //Timbangsari
                DB::table('regionables')->insert(['region_id'=>2395, 'regionable_id'=>18034, 'regionable_type'=>'village']); //Wonosido
            DB::table('regions')->insert(['id'=>2396, 'parent'=>2366, 'code'=>'5119', 'type'=>'districts', 'name'=>'Districts 5119, City 511, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2396, 'regionable_id'=>1838, 'regionable_type'=>'districts']); //Doro
            DB::table('regionables')->insert(['region_id'=>2396, 'regionable_id'=>1839, 'regionable_type'=>'districts']); //Talun
            DB::table('regionables')->insert(['region_id'=>2396, 'regionable_id'=>1840, 'regionable_type'=>'districts']); //Petungkriono/petungkriyono
            DB::table('regionables')->insert(['region_id'=>2396, 'regionable_id'=>1861, 'regionable_type'=>'districts']); //Doro
            DB::table('regionables')->insert(['region_id'=>2396, 'regionable_id'=>1862, 'regionable_type'=>'districts']); //Talun
            DB::table('regionables')->insert(['region_id'=>2396, 'regionable_id'=>1863, 'regionable_type'=>'districts']); //Petungkriono/petungkriyono
                DB::table('regions')->insert(['id'=>2397, 'parent'=>2396, 'code'=>'51193', 'type'=>'village', 'name'=>'Village 51193, Districts 5119, City 511, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17727, 'regionable_type'=>'village']); //Curugmuncar
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17728, 'regionable_type'=>'village']); //Gumelem
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17729, 'regionable_type'=>'village']); //Kasimpar
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17730, 'regionable_type'=>'village']); //Kayupuring
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17731, 'regionable_type'=>'village']); //Simego
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17732, 'regionable_type'=>'village']); //Songgodadi
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17733, 'regionable_type'=>'village']); //Tlogohendro
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17734, 'regionable_type'=>'village']); //Tlogopakis
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>17735, 'regionable_type'=>'village']); //Yosorejo
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18059, 'regionable_type'=>'village']); //Curugmuncar
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18060, 'regionable_type'=>'village']); //Gumelem
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18061, 'regionable_type'=>'village']); //Kasimpar
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18062, 'regionable_type'=>'village']); //Kayupuring
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18063, 'regionable_type'=>'village']); //Simego
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18064, 'regionable_type'=>'village']); //Songgodadi
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18065, 'regionable_type'=>'village']); //Tlogohendro
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18066, 'regionable_type'=>'village']); //Tlogopakis
                DB::table('regionables')->insert(['region_id'=>2397, 'regionable_id'=>18067, 'regionable_type'=>'village']); //Yosorejo
        DB::table('regions')->insert(['id'=>2398, 'parent'=>2145, 'code'=>'512', 'type'=>'city', 'name'=>'City 512, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2398, 'regionable_id'=>95, 'regionable_type'=>'city']); //Batang regencies
            DB::table('regions')->insert(['id'=>2399, 'parent'=>2398, 'code'=>'5121', 'type'=>'districts', 'name'=>'Districts 5121, City 512, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2399, 'regionable_id'=>1864, 'regionable_type'=>'districts']); //Batang
                DB::table('regions')->insert(['id'=>2400, 'parent'=>2399, 'code'=>'51211', 'type'=>'village', 'name'=>'Village 51211, Districts 5121, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2400, 'regionable_id'=>18068, 'regionable_type'=>'village']); //Proyonanggan Selatan
                DB::table('regionables')->insert(['region_id'=>2400, 'regionable_id'=>18069, 'regionable_type'=>'village']); //Proyonanggan Tengah
                DB::table('regionables')->insert(['region_id'=>2400, 'regionable_id'=>18070, 'regionable_type'=>'village']); //Proyonanggan Utara
                DB::table('regions')->insert(['id'=>2401, 'parent'=>2399, 'code'=>'51212', 'type'=>'village', 'name'=>'Village 51212, Districts 5121, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2401, 'regionable_id'=>18071, 'regionable_type'=>'village']); //Sambong
                DB::table('regions')->insert(['id'=>2402, 'parent'=>2399, 'code'=>'51214', 'type'=>'village', 'name'=>'Village 51214, Districts 5121, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2402, 'regionable_id'=>18072, 'regionable_type'=>'village']); //Kasepuhan
                DB::table('regions')->insert(['id'=>2403, 'parent'=>2399, 'code'=>'51215', 'type'=>'village', 'name'=>'Village 51215, Districts 5121, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2403, 'regionable_id'=>18073, 'regionable_type'=>'village']); //Kauman
                DB::table('regions')->insert(['id'=>2404, 'parent'=>2399, 'code'=>'51216', 'type'=>'village', 'name'=>'Village 51216, Districts 5121, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18074, 'regionable_type'=>'village']); //Cepokokuning
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18075, 'regionable_type'=>'village']); //Denasri Kulon
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18076, 'regionable_type'=>'village']); //Denasri Wetan
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18077, 'regionable_type'=>'village']); //Kalipucang Kulon
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18078, 'regionable_type'=>'village']); //Kalipucang Wetan
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18079, 'regionable_type'=>'village']); //Kalisalak
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18080, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18081, 'regionable_type'=>'village']); //Karangasem Selatan
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18082, 'regionable_type'=>'village']); //Karangasem Utara
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18083, 'regionable_type'=>'village']); //Kecepak
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18084, 'regionable_type'=>'village']); //Klidang Lor
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18085, 'regionable_type'=>'village']); //Klidang Wetan
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18086, 'regionable_type'=>'village']); //Pasekaran
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18087, 'regionable_type'=>'village']); //Rowobelang
                DB::table('regionables')->insert(['region_id'=>2404, 'regionable_id'=>18088, 'regionable_type'=>'village']); //Watesalit
            DB::table('regions')->insert(['id'=>2405, 'parent'=>2398, 'code'=>'5125', 'type'=>'districts', 'name'=>'Districts 5125, City 512, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2405, 'regionable_id'=>1865, 'regionable_type'=>'districts']); //Warungasem
            DB::table('regionables')->insert(['region_id'=>2405, 'regionable_id'=>1866, 'regionable_type'=>'districts']); //Wonotunggal
            DB::table('regionables')->insert(['region_id'=>2405, 'regionable_id'=>1867, 'regionable_type'=>'districts']); //Bandar
            DB::table('regionables')->insert(['region_id'=>2405, 'regionable_id'=>1868, 'regionable_type'=>'districts']); //Blado
                DB::table('regions')->insert(['id'=>2406, 'parent'=>2405, 'code'=>'51255', 'type'=>'village', 'name'=>'Village 51255, Districts 5125, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18140, 'regionable_type'=>'village']); //Bawang
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18141, 'regionable_type'=>'village']); //Besani
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18142, 'regionable_type'=>'village']); //Bismo
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18143, 'regionable_type'=>'village']); //Blado
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18144, 'regionable_type'=>'village']); //Cokro
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18145, 'regionable_type'=>'village']); //Gerlang
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18146, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18147, 'regionable_type'=>'village']); //Kalipancur
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18148, 'regionable_type'=>'village']); //Kalisari
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18149, 'regionable_type'=>'village']); //Kalitengah
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18150, 'regionable_type'=>'village']); //Kambangan (kembangan)
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18151, 'regionable_type'=>'village']); //Kembanglangit
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18152, 'regionable_type'=>'village']); //Keputon
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18153, 'regionable_type'=>'village']); //Keteleng
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18154, 'regionable_type'=>'village']); //Pesantren
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18155, 'regionable_type'=>'village']); //Selopajang Barat
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18156, 'regionable_type'=>'village']); //Selopajang Timur
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18157, 'regionable_type'=>'village']); //Wonobodro
                DB::table('regionables')->insert(['region_id'=>2406, 'regionable_id'=>18158, 'regionable_type'=>'village']); //Wonorojo
            DB::table('regions')->insert(['id'=>2407, 'parent'=>2398, 'code'=>'5126', 'type'=>'districts', 'name'=>'Districts 5126, City 512, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2407, 'regionable_id'=>1869, 'regionable_type'=>'districts']); //Kandeman
            DB::table('regionables')->insert(['region_id'=>2407, 'regionable_id'=>1870, 'regionable_type'=>'districts']); //Tulis
            DB::table('regionables')->insert(['region_id'=>2407, 'regionable_id'=>1871, 'regionable_type'=>'districts']); //Subah
            DB::table('regionables')->insert(['region_id'=>2407, 'regionable_id'=>1872, 'regionable_type'=>'districts']); //Pecalungan
                DB::table('regions')->insert(['id'=>2408, 'parent'=>2407, 'code'=>'51262', 'type'=>'village', 'name'=>'Village 51262, Districts 5126, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18183, 'regionable_type'=>'village']); //Adinuso
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18184, 'regionable_type'=>'village']); //Clapar
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18185, 'regionable_type'=>'village']); //Cluwuk
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18186, 'regionable_type'=>'village']); //Durenombo
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18187, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18188, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18189, 'regionable_type'=>'village']); //Jolosekti
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18190, 'regionable_type'=>'village']); //Jrakahpayung
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18191, 'regionable_type'=>'village']); //Kalimanggis
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18192, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18193, 'regionable_type'=>'village']); //Keborangan
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18194, 'regionable_type'=>'village']); //Kebumen
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18195, 'regionable_type'=>'village']); //Kemiri Barat
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18196, 'regionable_type'=>'village']); //Kemiri Timur
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18197, 'regionable_type'=>'village']); //Kumejing
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18198, 'regionable_type'=>'village']); //Kuripan
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18199, 'regionable_type'=>'village']); //Mangunharjo
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18200, 'regionable_type'=>'village']); //Menjangan
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18201, 'regionable_type'=>'village']); //Sengon
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18202, 'regionable_type'=>'village']); //Siberuk
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18203, 'regionable_type'=>'village']); //Subah
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18204, 'regionable_type'=>'village']); //Tenggulangharjo
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18205, 'regionable_type'=>'village']); //Bandung
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18206, 'regionable_type'=>'village']); //Gemuh
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18207, 'regionable_type'=>'village']); //Gombong
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18208, 'regionable_type'=>'village']); //Gumawang
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18209, 'regionable_type'=>'village']); //Keniten
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18210, 'regionable_type'=>'village']); //Pecalungan
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18211, 'regionable_type'=>'village']); //Pretek
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18212, 'regionable_type'=>'village']); //Randu
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18213, 'regionable_type'=>'village']); //Selokarto
                DB::table('regionables')->insert(['region_id'=>2408, 'regionable_id'=>18214, 'regionable_type'=>'village']); //Siguci
            DB::table('regions')->insert(['id'=>2409, 'parent'=>2398, 'code'=>'5127', 'type'=>'districts', 'name'=>'Districts 5127, City 512, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2409, 'regionable_id'=>1873, 'regionable_type'=>'districts']); //Limpung
            DB::table('regionables')->insert(['region_id'=>2409, 'regionable_id'=>1874, 'regionable_type'=>'districts']); //Banyuputih
            DB::table('regionables')->insert(['region_id'=>2409, 'regionable_id'=>1875, 'regionable_type'=>'districts']); //Tersono
            DB::table('regionables')->insert(['region_id'=>2409, 'regionable_id'=>1876, 'regionable_type'=>'districts']); //Reban
            DB::table('regionables')->insert(['region_id'=>2409, 'regionable_id'=>1877, 'regionable_type'=>'districts']); //Bawang
                DB::table('regions')->insert(['id'=>2410, 'parent'=>2409, 'code'=>'51274', 'type'=>'village', 'name'=>'Village 51274, Districts 5127, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18283, 'regionable_type'=>'village']); //Bawang
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18284, 'regionable_type'=>'village']); //Candigugur
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18285, 'regionable_type'=>'village']); //Candirejo
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18286, 'regionable_type'=>'village']); //Deles
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18287, 'regionable_type'=>'village']); //Getas
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18288, 'regionable_type'=>'village']); //Gunungsari
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18289, 'regionable_type'=>'village']); //Jambangan
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18290, 'regionable_type'=>'village']); //Jlamprang
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18291, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18292, 'regionable_type'=>'village']); //Kebaturan
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18293, 'regionable_type'=>'village']); //Pangempon
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18294, 'regionable_type'=>'village']); //Pasusukan
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18295, 'regionable_type'=>'village']); //Pranten
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18296, 'regionable_type'=>'village']); //Purbo
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18297, 'regionable_type'=>'village']); //Sangubanyu
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18298, 'regionable_type'=>'village']); //Sibebek
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18299, 'regionable_type'=>'village']); //Sidoharjo
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18300, 'regionable_type'=>'village']); //Soka
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18301, 'regionable_type'=>'village']); //Surjo
                DB::table('regionables')->insert(['region_id'=>2410, 'regionable_id'=>18302, 'regionable_type'=>'village']); //Wono Sari
            DB::table('regions')->insert(['id'=>2411, 'parent'=>2398, 'code'=>'5128', 'type'=>'districts', 'name'=>'Districts 5128, City 512, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2411, 'regionable_id'=>1874, 'regionable_type'=>'districts']); //Banyuputih
            DB::table('regionables')->insert(['region_id'=>2411, 'regionable_id'=>1878, 'regionable_type'=>'districts']); //Gringsing
                DB::table('regions')->insert(['id'=>2412, 'parent'=>2411, 'code'=>'51281', 'type'=>'village', 'name'=>'Village 51281, Districts 5128, City 512, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18237, 'regionable_type'=>'village']); //Banaran
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18238, 'regionable_type'=>'village']); //Bulu
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18239, 'regionable_type'=>'village']); //Penundan
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18240, 'regionable_type'=>'village']); //Timbang
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18303, 'regionable_type'=>'village']); //Gringsing
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18304, 'regionable_type'=>'village']); //Kebondalem
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18305, 'regionable_type'=>'village']); //Ketanggan
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18306, 'regionable_type'=>'village']); //Krengseng
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18307, 'regionable_type'=>'village']); //Kutosari
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18308, 'regionable_type'=>'village']); //Lebo
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18309, 'regionable_type'=>'village']); //Mentosari
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18310, 'regionable_type'=>'village']); //Plelen
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18311, 'regionable_type'=>'village']); //Sawangan
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18312, 'regionable_type'=>'village']); //Sentul
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18313, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18314, 'regionable_type'=>'village']); //Surodadi
                DB::table('regionables')->insert(['region_id'=>2412, 'regionable_id'=>18315, 'regionable_type'=>'village']); //Yosorejo
        DB::table('regions')->insert(['id'=>2413, 'parent'=>2145, 'code'=>'513', 'type'=>'city', 'name'=>'City 513, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2413, 'regionable_id'=>96, 'regionable_type'=>'city']); //Kendal regencies
            DB::table('regions')->insert(['id'=>2414, 'parent'=>2413, 'code'=>'5131', 'type'=>'districts', 'name'=>'Districts 5131, City 513, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2414, 'regionable_id'=>1879, 'regionable_type'=>'districts']); //Kendal
            DB::table('regionables')->insert(['region_id'=>2414, 'regionable_id'=>1880, 'regionable_type'=>'districts']); //Rowosari
                DB::table('regions')->insert(['id'=>2415, 'parent'=>2414, 'code'=>'51319', 'type'=>'village', 'name'=>'Village 51319, Districts 5131, City 513, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2415, 'regionable_id'=>18332, 'regionable_type'=>'village']); //Banyutowo
                DB::table('regionables')->insert(['region_id'=>2415, 'regionable_id'=>18333, 'regionable_type'=>'village']); //Karang Sari
                DB::table('regionables')->insert(['region_id'=>2415, 'regionable_id'=>18334, 'regionable_type'=>'village']); //Ketapang
                DB::table('regionables')->insert(['region_id'=>2415, 'regionable_id'=>18335, 'regionable_type'=>'village']); //Pakauman
                DB::table('regionables')->insert(['region_id'=>2415, 'regionable_id'=>18336, 'regionable_type'=>'village']); //Karangsari
            DB::table('regions')->insert(['id'=>2416, 'parent'=>2413, 'code'=>'5135', 'type'=>'districts', 'name'=>'Districts 5135, City 513, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1880, 'regionable_type'=>'districts']); //Rowosari
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1881, 'regionable_type'=>'districts']); //Patebon
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1882, 'regionable_type'=>'districts']); //Cepiring
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1883, 'regionable_type'=>'districts']); //Kangkung
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1884, 'regionable_type'=>'districts']); //Weleri
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1885, 'regionable_type'=>'districts']); //Ringinarum
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1886, 'regionable_type'=>'districts']); //Gemuh
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1887, 'regionable_type'=>'districts']); //Ngampel
            DB::table('regionables')->insert(['region_id'=>2416, 'regionable_id'=>1888, 'regionable_type'=>'districts']); //Pegandon
                DB::table('regions')->insert(['id'=>2417, 'parent'=>2416, 'code'=>'51357', 'type'=>'village', 'name'=>'Village 51357, Districts 5135, City 513, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18444, 'regionable_type'=>'village']); //Banyuurip
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18445, 'regionable_type'=>'village']); //Bojonggede
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18446, 'regionable_type'=>'village']); //Dempelrejo
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18447, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18448, 'regionable_type'=>'village']); //Kebonagung
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18449, 'regionable_type'=>'village']); //Ngampel Kulon
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18450, 'regionable_type'=>'village']); //Ngampel Wetan
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18451, 'regionable_type'=>'village']); //Putatgede
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18452, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18453, 'regionable_type'=>'village']); //Sudipayung
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18454, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18455, 'regionable_type'=>'village']); //Winong
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18456, 'regionable_type'=>'village']); //Dawungsari
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18457, 'regionable_type'=>'village']); //Gubugsari
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18458, 'regionable_type'=>'village']); //Karangmulyo
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18459, 'regionable_type'=>'village']); //Margomulyo
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18460, 'regionable_type'=>'village']); //Pegandon
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18461, 'regionable_type'=>'village']); //Pekuncen
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18462, 'regionable_type'=>'village']); //Penanggulan
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18463, 'regionable_type'=>'village']); //Pesawahan
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18464, 'regionable_type'=>'village']); //Pucang Rejo
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18465, 'regionable_type'=>'village']); //Puguh
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18466, 'regionable_type'=>'village']); //Tegorejo
                DB::table('regionables')->insert(['region_id'=>2417, 'regionable_id'=>18467, 'regionable_type'=>'village']); //Wonosari
            DB::table('regions')->insert(['id'=>2418, 'parent'=>2413, 'code'=>'5136', 'type'=>'districts', 'name'=>'Districts 5136, City 513, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2418, 'regionable_id'=>1889, 'regionable_type'=>'districts']); //Pagerruyung
            DB::table('regionables')->insert(['region_id'=>2418, 'regionable_id'=>1890, 'regionable_type'=>'districts']); //Plantungan
            DB::table('regionables')->insert(['region_id'=>2418, 'regionable_id'=>1891, 'regionable_type'=>'districts']); //Sukorejo
            DB::table('regionables')->insert(['region_id'=>2418, 'regionable_id'=>1892, 'regionable_type'=>'districts']); //Patean
                DB::table('regions')->insert(['id'=>2419, 'parent'=>2418, 'code'=>'51364', 'type'=>'village', 'name'=>'Village 51364, Districts 5136, City 513, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18512, 'regionable_type'=>'village']); //Curugsewu
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18513, 'regionable_type'=>'village']); //Gedong
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18514, 'regionable_type'=>'village']); //Kalibareng
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18515, 'regionable_type'=>'village']); //Kalices
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18516, 'regionable_type'=>'village']); //Kalilumpang
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18517, 'regionable_type'=>'village']); //Mlatiharjo
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18518, 'regionable_type'=>'village']); //Pagersari
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18519, 'regionable_type'=>'village']); //Pakisan
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18520, 'regionable_type'=>'village']); //Plososari
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18521, 'regionable_type'=>'village']); //Selo
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18522, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18523, 'regionable_type'=>'village']); //Sidokumpul
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18524, 'regionable_type'=>'village']); //Sukomangli
                DB::table('regionables')->insert(['region_id'=>2419, 'regionable_id'=>18525, 'regionable_type'=>'village']); //Wirosari
            DB::table('regions')->insert(['id'=>2420, 'parent'=>2413, 'code'=>'5137', 'type'=>'districts', 'name'=>'Districts 5137, City 513, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2420, 'regionable_id'=>1893, 'regionable_type'=>'districts']); //Brangsong
            DB::table('regionables')->insert(['region_id'=>2420, 'regionable_id'=>1894, 'regionable_type'=>'districts']); //Kaliwungu Selatan
            DB::table('regionables')->insert(['region_id'=>2420, 'regionable_id'=>1895, 'regionable_type'=>'districts']); //Kaliwungu
                DB::table('regions')->insert(['id'=>2421, 'parent'=>2420, 'code'=>'51372', 'type'=>'village', 'name'=>'Village 51372, Districts 5137, City 513, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18538, 'regionable_type'=>'village']); //Derupono/darupono
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18539, 'regionable_type'=>'village']); //Kedungsuren
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18540, 'regionable_type'=>'village']); //Magelung
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18541, 'regionable_type'=>'village']); //Plantaran
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18542, 'regionable_type'=>'village']); //Protomulyo
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18543, 'regionable_type'=>'village']); //Sidomakmur
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18544, 'regionable_type'=>'village']); //Sukomulyo
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18546, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18547, 'regionable_type'=>'village']); //Krajankulon
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18548, 'regionable_type'=>'village']); //Kumpulrejo
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18549, 'regionable_type'=>'village']); //Kutoharjo
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18550, 'regionable_type'=>'village']); //Mororejo
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18551, 'regionable_type'=>'village']); //Nolokerto
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18552, 'regionable_type'=>'village']); //Sarirejo
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18553, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>2421, 'regionable_id'=>18554, 'regionable_type'=>'village']); //Wonorejo
            DB::table('regions')->insert(['id'=>2422, 'parent'=>2413, 'code'=>'5138', 'type'=>'districts', 'name'=>'Districts 5138, City 513, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2422, 'regionable_id'=>1894, 'regionable_type'=>'districts']); //Kaliwungu Selatan
            DB::table('regionables')->insert(['region_id'=>2422, 'regionable_id'=>1896, 'regionable_type'=>'districts']); //Boja
            DB::table('regionables')->insert(['region_id'=>2422, 'regionable_id'=>1897, 'regionable_type'=>'districts']); //Singorojo
            DB::table('regionables')->insert(['region_id'=>2422, 'regionable_id'=>1898, 'regionable_type'=>'districts']); //Limbangan
                DB::table('regions')->insert(['id'=>2423, 'parent'=>2422, 'code'=>'51383', 'type'=>'village', 'name'=>'Village 51383, Districts 5138, City 513, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18586, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18587, 'regionable_type'=>'village']); //Gonoharjo
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18588, 'regionable_type'=>'village']); //Jawisari
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18589, 'regionable_type'=>'village']); //Kedungboto
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18590, 'regionable_type'=>'village']); //Limbangan
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18591, 'regionable_type'=>'village']); //Margosari
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18592, 'regionable_type'=>'village']); //Ngesrepbalong
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18593, 'regionable_type'=>'village']); //Pagertoyo
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18594, 'regionable_type'=>'village']); //Pagerwojo
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18595, 'regionable_type'=>'village']); //Pakis
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18596, 'regionable_type'=>'village']); //Peron
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18597, 'regionable_type'=>'village']); //Sriwulan
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18598, 'regionable_type'=>'village']); //Sumber Rahayu
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18599, 'regionable_type'=>'village']); //Tabet
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18600, 'regionable_type'=>'village']); //Tamanrejo
                DB::table('regionables')->insert(['region_id'=>2423, 'regionable_id'=>18601, 'regionable_type'=>'village']); //Tambahsari
        DB::table('regions')->insert(['id'=>2424, 'parent'=>2145, 'code'=>'521', 'type'=>'city', 'name'=>'City 521, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2424, 'regionable_id'=>97, 'regionable_type'=>'city']); //Tegal city
        DB::table('regionables')->insert(['region_id'=>2424, 'regionable_id'=>98, 'regionable_type'=>'city']); //Tegal regencies
            DB::table('regions')->insert(['id'=>2425, 'parent'=>2424, 'code'=>'5211', 'type'=>'districts', 'name'=>'Districts 5211, City 521, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2425, 'regionable_id'=>1899, 'regionable_type'=>'districts']); //Tegal Barat
            DB::table('regionables')->insert(['region_id'=>2425, 'regionable_id'=>1921, 'regionable_type'=>'districts']); //Tegal Barat
                DB::table('regions')->insert(['id'=>2426, 'parent'=>2425, 'code'=>'52111', 'type'=>'village', 'name'=>'Village 52111, Districts 5211, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2426, 'regionable_id'=>18602, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regionables')->insert(['region_id'=>2426, 'regionable_id'=>18916, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regions')->insert(['id'=>2427, 'parent'=>2425, 'code'=>'52112', 'type'=>'village', 'name'=>'Village 52112, Districts 5211, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2427, 'regionable_id'=>18603, 'regionable_type'=>'village']); //Kraton
                DB::table('regionables')->insert(['region_id'=>2427, 'regionable_id'=>18917, 'regionable_type'=>'village']); //Kraton
                DB::table('regions')->insert(['id'=>2428, 'parent'=>2425, 'code'=>'52114', 'type'=>'village', 'name'=>'Village 52114, Districts 5211, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2428, 'regionable_id'=>18604, 'regionable_type'=>'village']); //Kemandungan
                DB::table('regionables')->insert(['region_id'=>2428, 'regionable_id'=>18918, 'regionable_type'=>'village']); //Kemandungan
                DB::table('regions')->insert(['id'=>2429, 'parent'=>2425, 'code'=>'52115', 'type'=>'village', 'name'=>'Village 52115, Districts 5211, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2429, 'regionable_id'=>18605, 'regionable_type'=>'village']); //Debong Lor
                DB::table('regionables')->insert(['region_id'=>2429, 'regionable_id'=>18919, 'regionable_type'=>'village']); //Debong Lor
                DB::table('regions')->insert(['id'=>2430, 'parent'=>2425, 'code'=>'52117', 'type'=>'village', 'name'=>'Village 52117, Districts 5211, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2430, 'regionable_id'=>18606, 'regionable_type'=>'village']); //Muarareja
                DB::table('regionables')->insert(['region_id'=>2430, 'regionable_id'=>18607, 'regionable_type'=>'village']); //Pesurungan Kidul
                DB::table('regionables')->insert(['region_id'=>2430, 'regionable_id'=>18920, 'regionable_type'=>'village']); //Muarareja
                DB::table('regionables')->insert(['region_id'=>2430, 'regionable_id'=>18921, 'regionable_type'=>'village']); //Pesurungan Kidul
            DB::table('regions')->insert(['id'=>2431, 'parent'=>2424, 'code'=>'5212', 'type'=>'districts', 'name'=>'Districts 5212, City 521, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2431, 'regionable_id'=>1899, 'regionable_type'=>'districts']); //Tegal Barat
            DB::table('regionables')->insert(['region_id'=>2431, 'regionable_id'=>1900, 'regionable_type'=>'districts']); //Adiwerna
            DB::table('regionables')->insert(['region_id'=>2431, 'regionable_id'=>1901, 'regionable_type'=>'districts']); //Tegal Timur
            DB::table('regionables')->insert(['region_id'=>2431, 'regionable_id'=>1921, 'regionable_type'=>'districts']); //Tegal Barat
            DB::table('regionables')->insert(['region_id'=>2431, 'regionable_id'=>1922, 'regionable_type'=>'districts']); //Adiwerna
            DB::table('regionables')->insert(['region_id'=>2431, 'regionable_id'=>1923, 'regionable_type'=>'districts']); //Tegal Timur
                DB::table('regions')->insert(['id'=>2432, 'parent'=>2431, 'code'=>'52121', 'type'=>'village', 'name'=>'Village 52121, Districts 5212, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2432, 'regionable_id'=>18609, 'regionable_type'=>'village']); //Kalimati
                DB::table('regionables')->insert(['region_id'=>2432, 'regionable_id'=>18630, 'regionable_type'=>'village']); //Mintaragen
                DB::table('regionables')->insert(['region_id'=>2432, 'regionable_id'=>18923, 'regionable_type'=>'village']); //Kalimati
                DB::table('regionables')->insert(['region_id'=>2432, 'regionable_id'=>18944, 'regionable_type'=>'village']); //Mintaragen
                DB::table('regions')->insert(['id'=>2433, 'parent'=>2431, 'code'=>'52122', 'type'=>'village', 'name'=>'Village 52122, Districts 5212, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2433, 'regionable_id'=>18631, 'regionable_type'=>'village']); //Panggung
                DB::table('regionables')->insert(['region_id'=>2433, 'regionable_id'=>18945, 'regionable_type'=>'village']); //Panggung
                DB::table('regions')->insert(['id'=>2434, 'parent'=>2431, 'code'=>'52123', 'type'=>'village', 'name'=>'Village 52123, Districts 5212, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2434, 'regionable_id'=>18632, 'regionable_type'=>'village']); //Mangkukusuman
                DB::table('regionables')->insert(['region_id'=>2434, 'regionable_id'=>18946, 'regionable_type'=>'village']); //Mangkukusuman
                DB::table('regions')->insert(['id'=>2435, 'parent'=>2431, 'code'=>'52124', 'type'=>'village', 'name'=>'Village 52124, Districts 5212, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2435, 'regionable_id'=>18633, 'regionable_type'=>'village']); //Kejambon
                DB::table('regionables')->insert(['region_id'=>2435, 'regionable_id'=>18947, 'regionable_type'=>'village']); //Kejambon
                DB::table('regions')->insert(['id'=>2436, 'parent'=>2431, 'code'=>'52125', 'type'=>'village', 'name'=>'Village 52125, Districts 5212, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2436, 'regionable_id'=>18608, 'regionable_type'=>'village']); //Pekauman
                DB::table('regionables')->insert(['region_id'=>2436, 'regionable_id'=>18634, 'regionable_type'=>'village']); //Slerok
                DB::table('regionables')->insert(['region_id'=>2436, 'regionable_id'=>18922, 'regionable_type'=>'village']); //Pekauman
                DB::table('regionables')->insert(['region_id'=>2436, 'regionable_id'=>18948, 'regionable_type'=>'village']); //Slerok
            DB::table('regions')->insert(['id'=>2437, 'parent'=>2424, 'code'=>'5213', 'type'=>'districts', 'name'=>'Districts 5213, City 521, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2437, 'regionable_id'=>1902, 'regionable_type'=>'districts']); //Tegal Selatan
            DB::table('regionables')->insert(['region_id'=>2437, 'regionable_id'=>1924, 'regionable_type'=>'districts']); //Tegal Selatan
                DB::table('regions')->insert(['id'=>2438, 'parent'=>2437, 'code'=>'52131', 'type'=>'village', 'name'=>'Village 52131, Districts 5213, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2438, 'regionable_id'=>18635, 'regionable_type'=>'village']); //Randugunting
                DB::table('regionables')->insert(['region_id'=>2438, 'regionable_id'=>18949, 'regionable_type'=>'village']); //Randugunting
                DB::table('regions')->insert(['id'=>2439, 'parent'=>2437, 'code'=>'52132', 'type'=>'village', 'name'=>'Village 52132, Districts 5213, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2439, 'regionable_id'=>18636, 'regionable_type'=>'village']); //Debong Tengah
                DB::table('regionables')->insert(['region_id'=>2439, 'regionable_id'=>18950, 'regionable_type'=>'village']); //Debong Tengah
                DB::table('regions')->insert(['id'=>2440, 'parent'=>2437, 'code'=>'52133', 'type'=>'village', 'name'=>'Village 52133, Districts 5213, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2440, 'regionable_id'=>18637, 'regionable_type'=>'village']); //Debong Kulon
                DB::table('regionables')->insert(['region_id'=>2440, 'regionable_id'=>18951, 'regionable_type'=>'village']); //Debong Kulon
                DB::table('regions')->insert(['id'=>2441, 'parent'=>2437, 'code'=>'52134', 'type'=>'village', 'name'=>'Village 52134, Districts 5213, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2441, 'regionable_id'=>18638, 'regionable_type'=>'village']); //Keturen
                DB::table('regionables')->insert(['region_id'=>2441, 'regionable_id'=>18952, 'regionable_type'=>'village']); //Keturen
                DB::table('regions')->insert(['id'=>2442, 'parent'=>2437, 'code'=>'52135', 'type'=>'village', 'name'=>'Village 52135, Districts 5213, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2442, 'regionable_id'=>18639, 'regionable_type'=>'village']); //Tunon
                DB::table('regionables')->insert(['region_id'=>2442, 'regionable_id'=>18953, 'regionable_type'=>'village']); //Tunon
                DB::table('regions')->insert(['id'=>2443, 'parent'=>2437, 'code'=>'52136', 'type'=>'village', 'name'=>'Village 52136, Districts 5213, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2443, 'regionable_id'=>18640, 'regionable_type'=>'village']); //Kalinyamat Wetan
                DB::table('regionables')->insert(['region_id'=>2443, 'regionable_id'=>18954, 'regionable_type'=>'village']); //Kalinyamat Wetan
                DB::table('regions')->insert(['id'=>2444, 'parent'=>2437, 'code'=>'52137', 'type'=>'village', 'name'=>'Village 52137, Districts 5213, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2444, 'regionable_id'=>18641, 'regionable_type'=>'village']); //Bandung
                DB::table('regionables')->insert(['region_id'=>2444, 'regionable_id'=>18955, 'regionable_type'=>'village']); //Bandung
                DB::table('regions')->insert(['id'=>2445, 'parent'=>2437, 'code'=>'52138', 'type'=>'village', 'name'=>'Village 52138, Districts 5213, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2445, 'regionable_id'=>18642, 'regionable_type'=>'village']); //Debong Kidul
                DB::table('regionables')->insert(['region_id'=>2445, 'regionable_id'=>18956, 'regionable_type'=>'village']); //Debong Kidul
            DB::table('regions')->insert(['id'=>2446, 'parent'=>2424, 'code'=>'5214', 'type'=>'districts', 'name'=>'Districts 5214, City 521, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2446, 'regionable_id'=>1903, 'regionable_type'=>'districts']); //Margadana
            DB::table('regionables')->insert(['region_id'=>2446, 'regionable_id'=>1925, 'regionable_type'=>'districts']); //Margadana
                DB::table('regions')->insert(['id'=>2447, 'parent'=>2446, 'code'=>'52141', 'type'=>'village', 'name'=>'Village 52141, Districts 5214, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2447, 'regionable_id'=>18643, 'regionable_type'=>'village']); //Sumurpanggang
                DB::table('regionables')->insert(['region_id'=>2447, 'regionable_id'=>18957, 'regionable_type'=>'village']); //Sumurpanggang
                DB::table('regions')->insert(['id'=>2448, 'parent'=>2446, 'code'=>'52143', 'type'=>'village', 'name'=>'Village 52143, Districts 5214, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2448, 'regionable_id'=>18644, 'regionable_type'=>'village']); //Margadana
                DB::table('regionables')->insert(['region_id'=>2448, 'regionable_id'=>18958, 'regionable_type'=>'village']); //Margadana
                DB::table('regions')->insert(['id'=>2449, 'parent'=>2446, 'code'=>'52144', 'type'=>'village', 'name'=>'Village 52144, Districts 5214, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2449, 'regionable_id'=>18645, 'regionable_type'=>'village']); //Kalinyamat Kulon
                DB::table('regionables')->insert(['region_id'=>2449, 'regionable_id'=>18959, 'regionable_type'=>'village']); //Kalinyamat Kulon
                DB::table('regions')->insert(['id'=>2450, 'parent'=>2446, 'code'=>'52146', 'type'=>'village', 'name'=>'Village 52146, Districts 5214, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2450, 'regionable_id'=>18646, 'regionable_type'=>'village']); //Krandon
                DB::table('regionables')->insert(['region_id'=>2450, 'regionable_id'=>18960, 'regionable_type'=>'village']); //Krandon
                DB::table('regions')->insert(['id'=>2451, 'parent'=>2446, 'code'=>'52147', 'type'=>'village', 'name'=>'Village 52147, Districts 5214, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2451, 'regionable_id'=>18647, 'regionable_type'=>'village']); //Cabawan
                DB::table('regionables')->insert(['region_id'=>2451, 'regionable_id'=>18648, 'regionable_type'=>'village']); //Kaligangsa
                DB::table('regionables')->insert(['region_id'=>2451, 'regionable_id'=>18649, 'regionable_type'=>'village']); //Pesurungan Lor
                DB::table('regionables')->insert(['region_id'=>2451, 'regionable_id'=>18961, 'regionable_type'=>'village']); //Cabawan
                DB::table('regionables')->insert(['region_id'=>2451, 'regionable_id'=>18962, 'regionable_type'=>'village']); //Kaligangsa
                DB::table('regionables')->insert(['region_id'=>2451, 'regionable_id'=>18963, 'regionable_type'=>'village']); //Pesurungan Lor
            DB::table('regions')->insert(['id'=>2452, 'parent'=>2424, 'code'=>'5218', 'type'=>'districts', 'name'=>'Districts 5218, City 521, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2452, 'regionable_id'=>1904, 'regionable_type'=>'districts']); //Kramat
            DB::table('regionables')->insert(['region_id'=>2452, 'regionable_id'=>1905, 'regionable_type'=>'districts']); //Surodadi
            DB::table('regionables')->insert(['region_id'=>2452, 'regionable_id'=>1906, 'regionable_type'=>'districts']); //Warurejo
            DB::table('regionables')->insert(['region_id'=>2452, 'regionable_id'=>1907, 'regionable_type'=>'districts']); //Tarub
            DB::table('regionables')->insert(['region_id'=>2452, 'regionable_id'=>1926, 'regionable_type'=>'districts']); //Kramat
            DB::table('regionables')->insert(['region_id'=>2452, 'regionable_id'=>1927, 'regionable_type'=>'districts']); //Surodadi
            DB::table('regionables')->insert(['region_id'=>2452, 'regionable_id'=>1928, 'regionable_type'=>'districts']); //Warurejo
            DB::table('regionables')->insert(['region_id'=>2452, 'regionable_id'=>1929, 'regionable_type'=>'districts']); //Tarub
                DB::table('regions')->insert(['id'=>2453, 'parent'=>2452, 'code'=>'52184', 'type'=>'village', 'name'=>'Village 52184, Districts 5218, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18693, 'regionable_type'=>'village']); //Brekat
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18694, 'regionable_type'=>'village']); //Bulakwaru
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18695, 'regionable_type'=>'village']); //Bumiharja
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18696, 'regionable_type'=>'village']); //Jatirawa
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18697, 'regionable_type'=>'village']); //Kabukan
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18698, 'regionable_type'=>'village']); //Kalijambe
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18699, 'regionable_type'=>'village']); //Karangjati
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18700, 'regionable_type'=>'village']); //Karangmangu
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18701, 'regionable_type'=>'village']); //Kedokan Sayang
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18702, 'regionable_type'=>'village']); //Kedung Bungkus
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18703, 'regionable_type'=>'village']); //Kemanggungan
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18704, 'regionable_type'=>'village']); //Kesadikan
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18705, 'regionable_type'=>'village']); //Kesamiran
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18706, 'regionable_type'=>'village']); //Lebeteng
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18707, 'regionable_type'=>'village']); //Mangunsaren
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18708, 'regionable_type'=>'village']); //Margapadang
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18709, 'regionable_type'=>'village']); //Mindaka
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18710, 'regionable_type'=>'village']); //Purbasana
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18711, 'regionable_type'=>'village']); //Setu
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>18712, 'regionable_type'=>'village']); //Tarub
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19007, 'regionable_type'=>'village']); //Brekat
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19008, 'regionable_type'=>'village']); //Bulakwaru
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19009, 'regionable_type'=>'village']); //Bumiharja
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19010, 'regionable_type'=>'village']); //Jatirawa
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19011, 'regionable_type'=>'village']); //Kabukan
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19012, 'regionable_type'=>'village']); //Kalijambe
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19013, 'regionable_type'=>'village']); //Karangjati
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19014, 'regionable_type'=>'village']); //Karangmangu
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19015, 'regionable_type'=>'village']); //Kedokan Sayang
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19016, 'regionable_type'=>'village']); //Kedung Bungkus
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19017, 'regionable_type'=>'village']); //Kemanggungan
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19018, 'regionable_type'=>'village']); //Kesadikan
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19019, 'regionable_type'=>'village']); //Kesamiran
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19020, 'regionable_type'=>'village']); //Lebeteng
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19021, 'regionable_type'=>'village']); //Mangunsaren
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19022, 'regionable_type'=>'village']); //Margapadang
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19023, 'regionable_type'=>'village']); //Mindaka
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19024, 'regionable_type'=>'village']); //Purbasana
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19025, 'regionable_type'=>'village']); //Setu
                DB::table('regionables')->insert(['region_id'=>2453, 'regionable_id'=>19026, 'regionable_type'=>'village']); //Tarub
            DB::table('regions')->insert(['id'=>2454, 'parent'=>2424, 'code'=>'5219', 'type'=>'districts', 'name'=>'Districts 5219, City 521, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2454, 'regionable_id'=>1900, 'regionable_type'=>'districts']); //Adiwerna
            DB::table('regionables')->insert(['region_id'=>2454, 'regionable_id'=>1908, 'regionable_type'=>'districts']); //Dukuhturi
            DB::table('regionables')->insert(['region_id'=>2454, 'regionable_id'=>1909, 'regionable_type'=>'districts']); //Talang
            DB::table('regionables')->insert(['region_id'=>2454, 'regionable_id'=>1922, 'regionable_type'=>'districts']); //Adiwerna
            DB::table('regionables')->insert(['region_id'=>2454, 'regionable_id'=>1930, 'regionable_type'=>'districts']); //Dukuhturi
            DB::table('regionables')->insert(['region_id'=>2454, 'regionable_id'=>1931, 'regionable_type'=>'districts']); //Talang
                DB::table('regions')->insert(['id'=>2455, 'parent'=>2454, 'code'=>'52193', 'type'=>'village', 'name'=>'Village 52193, Districts 5219, City 521, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18731, 'regionable_type'=>'village']); //Bengle
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18732, 'regionable_type'=>'village']); //Cangkring
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18733, 'regionable_type'=>'village']); //Dawuhan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18734, 'regionable_type'=>'village']); //Dukuhmalang
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18735, 'regionable_type'=>'village']); //Gembong Kulon
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18736, 'regionable_type'=>'village']); //Getaskerep
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18737, 'regionable_type'=>'village']); //Kajen
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18738, 'regionable_type'=>'village']); //Kaladawa
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18739, 'regionable_type'=>'village']); //Kaligayam
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18740, 'regionable_type'=>'village']); //Kebasen
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18741, 'regionable_type'=>'village']); //Langgen
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18742, 'regionable_type'=>'village']); //Pacul
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18743, 'regionable_type'=>'village']); //Pasangan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18744, 'regionable_type'=>'village']); //Pegirikan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18745, 'regionable_type'=>'village']); //Pekiringan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18746, 'regionable_type'=>'village']); //Pesayangan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18747, 'regionable_type'=>'village']); //Talang
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18748, 'regionable_type'=>'village']); //Tegalwangi
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>18749, 'regionable_type'=>'village']); //Wangandawa
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19045, 'regionable_type'=>'village']); //Bengle
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19046, 'regionable_type'=>'village']); //Cangkring
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19047, 'regionable_type'=>'village']); //Dawuhan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19048, 'regionable_type'=>'village']); //Dukuhmalang
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19049, 'regionable_type'=>'village']); //Gembong Kulon
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19050, 'regionable_type'=>'village']); //Getaskerep
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19051, 'regionable_type'=>'village']); //Kajen
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19052, 'regionable_type'=>'village']); //Kaladawa
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19053, 'regionable_type'=>'village']); //Kaligayam
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19054, 'regionable_type'=>'village']); //Kebasen
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19055, 'regionable_type'=>'village']); //Langgen
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19056, 'regionable_type'=>'village']); //Pacul
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19057, 'regionable_type'=>'village']); //Pasangan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19058, 'regionable_type'=>'village']); //Pegirikan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19059, 'regionable_type'=>'village']); //Pekiringan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19060, 'regionable_type'=>'village']); //Pesayangan
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19061, 'regionable_type'=>'village']); //Talang
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19062, 'regionable_type'=>'village']); //Tegalwangi
                DB::table('regionables')->insert(['region_id'=>2455, 'regionable_id'=>19063, 'regionable_type'=>'village']); //Wangandawa
        DB::table('regions')->insert(['id'=>2456, 'parent'=>2145, 'code'=>'522', 'type'=>'city', 'name'=>'City 522, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2456, 'regionable_id'=>99, 'regionable_type'=>'city']); //Brebes regencies
            DB::table('regions')->insert(['id'=>2457, 'parent'=>2456, 'code'=>'5221', 'type'=>'districts', 'name'=>'Districts 5221, City 522, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2457, 'regionable_id'=>1943, 'regionable_type'=>'districts']); //Brebes
                DB::table('regions')->insert(['id'=>2458, 'parent'=>2457, 'code'=>'52211', 'type'=>'village', 'name'=>'Village 52211, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2458, 'regionable_id'=>19230, 'regionable_type'=>'village']); //Pasar Batang
                DB::table('regions')->insert(['id'=>2459, 'parent'=>2457, 'code'=>'52212', 'type'=>'village', 'name'=>'Village 52212, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2459, 'regionable_id'=>19231, 'regionable_type'=>'village']); //Brebes
                DB::table('regions')->insert(['id'=>2460, 'parent'=>2457, 'code'=>'52213', 'type'=>'village', 'name'=>'Village 52213, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2460, 'regionable_id'=>19232, 'regionable_type'=>'village']); //Pulosari
                DB::table('regions')->insert(['id'=>2461, 'parent'=>2457, 'code'=>'52214', 'type'=>'village', 'name'=>'Village 52214, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2461, 'regionable_id'=>19233, 'regionable_type'=>'village']); //Padasugih
                DB::table('regionables')->insert(['region_id'=>2461, 'regionable_id'=>19234, 'regionable_type'=>'village']); //Wangandalem
                DB::table('regions')->insert(['id'=>2462, 'parent'=>2457, 'code'=>'52215', 'type'=>'village', 'name'=>'Village 52215, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2462, 'regionable_id'=>19235, 'regionable_type'=>'village']); //Gandasuli
                DB::table('regions')->insert(['id'=>2463, 'parent'=>2457, 'code'=>'52216', 'type'=>'village', 'name'=>'Village 52216, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2463, 'regionable_id'=>19236, 'regionable_type'=>'village']); //Banjaranyar
                DB::table('regions')->insert(['id'=>2464, 'parent'=>2457, 'code'=>'52217', 'type'=>'village', 'name'=>'Village 52217, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2464, 'regionable_id'=>19237, 'regionable_type'=>'village']); //Kaligangsa Kulon
                DB::table('regionables')->insert(['region_id'=>2464, 'regionable_id'=>19238, 'regionable_type'=>'village']); //Kaligangsa Wetan
                DB::table('regions')->insert(['id'=>2465, 'parent'=>2457, 'code'=>'52218', 'type'=>'village', 'name'=>'Village 52218, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2465, 'regionable_id'=>19239, 'regionable_type'=>'village']); //Limbangan Wetan
                DB::table('regions')->insert(['id'=>2466, 'parent'=>2457, 'code'=>'52219', 'type'=>'village', 'name'=>'Village 52219, Districts 5221, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19240, 'regionable_type'=>'village']); //Kalimati
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19241, 'regionable_type'=>'village']); //Kaliwlingi
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19242, 'regionable_type'=>'village']); //Kedunguter
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19243, 'regionable_type'=>'village']); //Krasak
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19244, 'regionable_type'=>'village']); //Lembarawa
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19245, 'regionable_type'=>'village']); //Limbangan Kulon
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19246, 'regionable_type'=>'village']); //Pagejugan
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19247, 'regionable_type'=>'village']); //Pemaron
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19248, 'regionable_type'=>'village']); //Randusanga Kulon
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19249, 'regionable_type'=>'village']); //Randusanga Wetan
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19250, 'regionable_type'=>'village']); //Sigambir
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19251, 'regionable_type'=>'village']); //Tengki
                DB::table('regionables')->insert(['region_id'=>2466, 'regionable_id'=>19252, 'regionable_type'=>'village']); //Terlangu
            DB::table('regions')->insert(['id'=>2467, 'parent'=>2456, 'code'=>'5222', 'type'=>'districts', 'name'=>'Districts 5222, City 522, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2467, 'regionable_id'=>1944, 'regionable_type'=>'districts']); //Wanasari
                DB::table('regions')->insert(['id'=>2468, 'parent'=>2467, 'code'=>'52221', 'type'=>'village', 'name'=>'Village 52221, Districts 5222, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2468, 'regionable_id'=>19253, 'regionable_type'=>'village']); //Pesantunan
                DB::table('regions')->insert(['id'=>2469, 'parent'=>2467, 'code'=>'52222', 'type'=>'village', 'name'=>'Village 52222, Districts 5222, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2469, 'regionable_id'=>19254, 'regionable_type'=>'village']); //Pebatan
            DB::table('regions')->insert(['id'=>2470, 'parent'=>2456, 'code'=>'5225', 'type'=>'districts', 'name'=>'Districts 5225, City 522, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2470, 'regionable_id'=>1944, 'regionable_type'=>'districts']); //Wanasari
            DB::table('regionables')->insert(['region_id'=>2470, 'regionable_id'=>1945, 'regionable_type'=>'districts']); //Bulakamba
            DB::table('regionables')->insert(['region_id'=>2470, 'regionable_id'=>1946, 'regionable_type'=>'districts']); //Tanjung
            DB::table('regionables')->insert(['region_id'=>2470, 'regionable_id'=>1947, 'regionable_type'=>'districts']); //Losari
                DB::table('regions')->insert(['id'=>2471, 'parent'=>2470, 'code'=>'52255', 'type'=>'village', 'name'=>'Village 52255, Districts 5225, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19310, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19311, 'regionable_type'=>'village']); //Blubuk
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19312, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19313, 'regionable_type'=>'village']); //Dukuhsalam
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19314, 'regionable_type'=>'village']); //Jati Sawit
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19315, 'regionable_type'=>'village']); //Kalibuntu
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19316, 'regionable_type'=>'village']); //Karangdempel
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19317, 'regionable_type'=>'village']); //Karangjunti
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19318, 'regionable_type'=>'village']); //Karangsambung
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19319, 'regionable_type'=>'village']); //Kecipir
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19320, 'regionable_type'=>'village']); //Kedungneng
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19321, 'regionable_type'=>'village']); //Limbangan
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19322, 'regionable_type'=>'village']); //Losari Kidul
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19323, 'regionable_type'=>'village']); //Losari Lor
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19324, 'regionable_type'=>'village']); //Negla
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19325, 'regionable_type'=>'village']); //Pekauman
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19326, 'regionable_type'=>'village']); //Pengabean
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19327, 'regionable_type'=>'village']); //Prapag Kidul
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19328, 'regionable_type'=>'village']); //Prapag Lor
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19329, 'regionable_type'=>'village']); //Radegan
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19330, 'regionable_type'=>'village']); //Randusari
                DB::table('regionables')->insert(['region_id'=>2471, 'regionable_id'=>19331, 'regionable_type'=>'village']); //Rungkang
            DB::table('regions')->insert(['id'=>2472, 'parent'=>2456, 'code'=>'5226', 'type'=>'districts', 'name'=>'Districts 5226, City 522, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2472, 'regionable_id'=>1948, 'regionable_type'=>'districts']); //Jatibarang
            DB::table('regionables')->insert(['region_id'=>2472, 'regionable_id'=>1949, 'regionable_type'=>'districts']); //Larangan
            DB::table('regionables')->insert(['region_id'=>2472, 'regionable_id'=>1950, 'regionable_type'=>'districts']); //Ketanggungan
            DB::table('regionables')->insert(['region_id'=>2472, 'regionable_id'=>1951, 'regionable_type'=>'districts']); //Kersana
            DB::table('regionables')->insert(['region_id'=>2472, 'regionable_id'=>1952, 'regionable_type'=>'districts']); //Banjarharjo
            DB::table('regionables')->insert(['region_id'=>2472, 'regionable_id'=>1953, 'regionable_type'=>'districts']); //Songgom
                DB::table('regions')->insert(['id'=>2473, 'parent'=>2472, 'code'=>'52266', 'type'=>'village', 'name'=>'Village 52266, Districts 5226, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19424, 'regionable_type'=>'village']); //Cenang
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19425, 'regionable_type'=>'village']); //Dukuhmaja
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19426, 'regionable_type'=>'village']); //Gegerkunci
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19427, 'regionable_type'=>'village']); //Jatimakmur
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19428, 'regionable_type'=>'village']); //Jatirokeh
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19429, 'regionable_type'=>'village']); //Karangsembung
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19430, 'regionable_type'=>'village']); //Songgom
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19431, 'regionable_type'=>'village']); //Songgom Lor
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19432, 'regionable_type'=>'village']); //Wanacala
                DB::table('regionables')->insert(['region_id'=>2473, 'regionable_id'=>19433, 'regionable_type'=>'village']); //Wanatawang
            DB::table('regions')->insert(['id'=>2474, 'parent'=>2456, 'code'=>'5227', 'type'=>'districts', 'name'=>'Districts 5227, City 522, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2474, 'regionable_id'=>1954, 'regionable_type'=>'districts']); //Tonjong
            DB::table('regionables')->insert(['region_id'=>2474, 'regionable_id'=>1955, 'regionable_type'=>'districts']); //Sirampog
            DB::table('regionables')->insert(['region_id'=>2474, 'regionable_id'=>1956, 'regionable_type'=>'districts']); //Bumiayu
            DB::table('regionables')->insert(['region_id'=>2474, 'regionable_id'=>1957, 'regionable_type'=>'districts']); //Bantarkawung
            DB::table('regionables')->insert(['region_id'=>2474, 'regionable_id'=>1958, 'regionable_type'=>'districts']); //Salem
            DB::table('regionables')->insert(['region_id'=>2474, 'regionable_id'=>1959, 'regionable_type'=>'districts']); //Paguyangan
                DB::table('regions')->insert(['id'=>2475, 'parent'=>2474, 'code'=>'52276', 'type'=>'village', 'name'=>'Village 52276, Districts 5227, City 522, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19515, 'regionable_type'=>'village']); //Cilibur
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19516, 'regionable_type'=>'village']); //Cipetung
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19517, 'regionable_type'=>'village']); //Kedungoleng
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19518, 'regionable_type'=>'village']); //Kretek
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19519, 'regionable_type'=>'village']); //Pagojengan
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19520, 'regionable_type'=>'village']); //Paguyangan
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19521, 'regionable_type'=>'village']); //Pakujati
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19522, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19523, 'regionable_type'=>'village']); //Ragatunjung
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19524, 'regionable_type'=>'village']); //Taraban
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19525, 'regionable_type'=>'village']); //Wanatirta
                DB::table('regionables')->insert(['region_id'=>2475, 'regionable_id'=>19526, 'regionable_type'=>'village']); //Winduaji
        DB::table('regions')->insert(['id'=>2476, 'parent'=>2145, 'code'=>'523', 'type'=>'city', 'name'=>'City 523, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2476, 'regionable_id'=>100, 'regionable_type'=>'city']); //Pemalang regencies
            DB::table('regions')->insert(['id'=>2477, 'parent'=>2476, 'code'=>'5231', 'type'=>'districts', 'name'=>'Districts 5231, City 523, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2477, 'regionable_id'=>1960, 'regionable_type'=>'districts']); //Pemalang
                DB::table('regions')->insert(['id'=>2478, 'parent'=>2477, 'code'=>'52311', 'type'=>'village', 'name'=>'Village 52311, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2478, 'regionable_id'=>19527, 'regionable_type'=>'village']); //Pelutan
                DB::table('regions')->insert(['id'=>2479, 'parent'=>2477, 'code'=>'52312', 'type'=>'village', 'name'=>'Village 52312, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2479, 'regionable_id'=>19528, 'regionable_type'=>'village']); //Kebondalem
                DB::table('regions')->insert(['id'=>2480, 'parent'=>2477, 'code'=>'52313', 'type'=>'village', 'name'=>'Village 52313, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2480, 'regionable_id'=>19529, 'regionable_type'=>'village']); //Mulyoharjo
                DB::table('regions')->insert(['id'=>2481, 'parent'=>2477, 'code'=>'52314', 'type'=>'village', 'name'=>'Village 52314, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2481, 'regionable_id'=>19530, 'regionable_type'=>'village']); //Danasari
                DB::table('regionables')->insert(['region_id'=>2481, 'regionable_id'=>19531, 'regionable_type'=>'village']); //Widuri
                DB::table('regions')->insert(['id'=>2482, 'parent'=>2477, 'code'=>'52315', 'type'=>'village', 'name'=>'Village 52315, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2482, 'regionable_id'=>19532, 'regionable_type'=>'village']); //Sugihwaras
                DB::table('regions')->insert(['id'=>2483, 'parent'=>2477, 'code'=>'52316', 'type'=>'village', 'name'=>'Village 52316, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2483, 'regionable_id'=>19533, 'regionable_type'=>'village']); //Lawangrejo
                DB::table('regions')->insert(['id'=>2484, 'parent'=>2477, 'code'=>'52317', 'type'=>'village', 'name'=>'Village 52317, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2484, 'regionable_id'=>19534, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regions')->insert(['id'=>2485, 'parent'=>2477, 'code'=>'52318', 'type'=>'village', 'name'=>'Village 52318, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2485, 'regionable_id'=>19535, 'regionable_type'=>'village']); //Bojongnangka
                DB::table('regionables')->insert(['region_id'=>2485, 'regionable_id'=>19536, 'regionable_type'=>'village']); //Kramat
                DB::table('regionables')->insert(['region_id'=>2485, 'regionable_id'=>19537, 'regionable_type'=>'village']); //Surajaya
                DB::table('regions')->insert(['id'=>2486, 'parent'=>2477, 'code'=>'52319', 'type'=>'village', 'name'=>'Village 52319, Districts 5231, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19538, 'regionable_type'=>'village']); //Banjarmulya
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19539, 'regionable_type'=>'village']); //Bojongbata
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19540, 'regionable_type'=>'village']); //Mengori
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19541, 'regionable_type'=>'village']); //Paduraksa
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19542, 'regionable_type'=>'village']); //Pagongsoran
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19543, 'regionable_type'=>'village']); //Saradan
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19544, 'regionable_type'=>'village']); //Sewaka
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19545, 'regionable_type'=>'village']); //Sungapan
                DB::table('regionables')->insert(['region_id'=>2486, 'regionable_id'=>19546, 'regionable_type'=>'village']); //Wanamulya
            DB::table('regions')->insert(['id'=>2487, 'parent'=>2476, 'code'=>'5235', 'type'=>'districts', 'name'=>'Districts 5235, City 523, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2487, 'regionable_id'=>1961, 'regionable_type'=>'districts']); //Bantarbolang
            DB::table('regionables')->insert(['region_id'=>2487, 'regionable_id'=>1962, 'regionable_type'=>'districts']); //Randudongkal
            DB::table('regionables')->insert(['region_id'=>2487, 'regionable_id'=>1963, 'regionable_type'=>'districts']); //Moga
            DB::table('regionables')->insert(['region_id'=>2487, 'regionable_id'=>1964, 'regionable_type'=>'districts']); //Warungpring
            DB::table('regionables')->insert(['region_id'=>2487, 'regionable_id'=>1965, 'regionable_type'=>'districts']); //Pulosari
            DB::table('regionables')->insert(['region_id'=>2487, 'regionable_id'=>1966, 'regionable_type'=>'districts']); //Belik
            DB::table('regionables')->insert(['region_id'=>2487, 'regionable_id'=>1967, 'regionable_type'=>'districts']); //Watukumpul
                DB::table('regions')->insert(['id'=>2488, 'parent'=>2487, 'code'=>'52357', 'type'=>'village', 'name'=>'Village 52357, Districts 5235, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19622, 'regionable_type'=>'village']); //Bodas
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19623, 'regionable_type'=>'village']); //Bongas
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19624, 'regionable_type'=>'village']); //Cawet
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19625, 'regionable_type'=>'village']); //Cikadu
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19626, 'regionable_type'=>'village']); //Gapura
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19627, 'regionable_type'=>'village']); //Jojogan
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19628, 'regionable_type'=>'village']); //Majakerta
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19629, 'regionable_type'=>'village']); //Majalangu
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19630, 'regionable_type'=>'village']); //Medayu
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19631, 'regionable_type'=>'village']); //Pagelaran
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19632, 'regionable_type'=>'village']); //Tambi
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19633, 'regionable_type'=>'village']); //Tlagasana
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19634, 'regionable_type'=>'village']); //Tundagan
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19635, 'regionable_type'=>'village']); //Watukumpul
                DB::table('regionables')->insert(['region_id'=>2488, 'regionable_id'=>19636, 'regionable_type'=>'village']); //Wisnu
            DB::table('regions')->insert(['id'=>2489, 'parent'=>2476, 'code'=>'5236', 'type'=>'districts', 'name'=>'Districts 5236, City 523, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2489, 'regionable_id'=>1968, 'regionable_type'=>'districts']); //Taman
            DB::table('regionables')->insert(['region_id'=>2489, 'regionable_id'=>1969, 'regionable_type'=>'districts']); //Petarukan
            DB::table('regionables')->insert(['region_id'=>2489, 'regionable_id'=>1970, 'regionable_type'=>'districts']); //Comal
            DB::table('regionables')->insert(['region_id'=>2489, 'regionable_id'=>1971, 'regionable_type'=>'districts']); //Ampelgading
            DB::table('regionables')->insert(['region_id'=>2489, 'regionable_id'=>1972, 'regionable_type'=>'districts']); //Bodeh
                DB::table('regions')->insert(['id'=>2490, 'parent'=>2489, 'code'=>'52365', 'type'=>'village', 'name'=>'Village 52365, Districts 5236, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19712, 'regionable_type'=>'village']); //Babakan
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19713, 'regionable_type'=>'village']); //Bodeh
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19714, 'regionable_type'=>'village']); //Cangak
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19715, 'regionable_type'=>'village']); //Gunungbatu
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19716, 'regionable_type'=>'village']); //Jatingarang
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19717, 'regionable_type'=>'village']); //Jatiroyom
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19718, 'regionable_type'=>'village']); //Jraganan
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19719, 'regionable_type'=>'village']); //Karangbrai
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19720, 'regionable_type'=>'village']); //Kebandaran
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19721, 'regionable_type'=>'village']); //Kebandungan
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19722, 'regionable_type'=>'village']); //Kelangdepok
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19723, 'regionable_type'=>'village']); //Kesesirejo
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19724, 'regionable_type'=>'village']); //Kwasen
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19725, 'regionable_type'=>'village']); //Longkeyang
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19726, 'regionable_type'=>'village']); //Muncang
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19727, 'regionable_type'=>'village']); //Parunggalih
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19728, 'regionable_type'=>'village']); //Pasir
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19729, 'regionable_type'=>'village']); //Payung
                DB::table('regionables')->insert(['region_id'=>2490, 'regionable_id'=>19730, 'regionable_type'=>'village']); //Pendowo
            DB::table('regions')->insert(['id'=>2491, 'parent'=>2476, 'code'=>'5237', 'type'=>'districts', 'name'=>'Districts 5237, City 523, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2491, 'regionable_id'=>1973, 'regionable_type'=>'districts']); //Ulujami
                DB::table('regions')->insert(['id'=>2492, 'parent'=>2491, 'code'=>'52371', 'type'=>'village', 'name'=>'Village 52371, Districts 5237, City 523, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19731, 'regionable_type'=>'village']); //Ambowetan
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19732, 'regionable_type'=>'village']); //Blendung
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19733, 'regionable_type'=>'village']); //Botekan
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19734, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19735, 'regionable_type'=>'village']); //Kaliprau
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19736, 'regionable_type'=>'village']); //Kertosari
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19737, 'regionable_type'=>'village']); //Ketapang
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19738, 'regionable_type'=>'village']); //Limbangan
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19739, 'regionable_type'=>'village']); //Mojo
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19740, 'regionable_type'=>'village']); //Padek
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19741, 'regionable_type'=>'village']); //Pagergunung
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19742, 'regionable_type'=>'village']); //Pamutih
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19743, 'regionable_type'=>'village']); //Pesantren
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19744, 'regionable_type'=>'village']); //Rowosari
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19745, 'regionable_type'=>'village']); //Samong
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19746, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19747, 'regionable_type'=>'village']); //Tasikrejo
                DB::table('regionables')->insert(['region_id'=>2492, 'regionable_id'=>19748, 'regionable_type'=>'village']); //Wiyorowetan
        DB::table('regions')->insert(['id'=>2493, 'parent'=>2145, 'code'=>'524', 'type'=>'city', 'name'=>'City 524, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2493, 'regionable_id'=>97, 'regionable_type'=>'city']); //Tegal city
        DB::table('regionables')->insert(['region_id'=>2493, 'regionable_id'=>98, 'regionable_type'=>'city']); //Tegal regencies
            DB::table('regions')->insert(['id'=>2494, 'parent'=>2493, 'code'=>'5241', 'type'=>'districts', 'name'=>'Districts 5241, City 524, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2494, 'regionable_id'=>1910, 'regionable_type'=>'districts']); //Slawi
            DB::table('regionables')->insert(['region_id'=>2494, 'regionable_id'=>1932, 'regionable_type'=>'districts']); //Slawi
                DB::table('regions')->insert(['id'=>2495, 'parent'=>2494, 'code'=>'52411', 'type'=>'village', 'name'=>'Village 52411, Districts 5241, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2495, 'regionable_id'=>18750, 'regionable_type'=>'village']); //Kagok
                DB::table('regionables')->insert(['region_id'=>2495, 'regionable_id'=>18751, 'regionable_type'=>'village']); //Slawi Wetan
                DB::table('regionables')->insert(['region_id'=>2495, 'regionable_id'=>19064, 'regionable_type'=>'village']); //Kagok
                DB::table('regionables')->insert(['region_id'=>2495, 'regionable_id'=>19065, 'regionable_type'=>'village']); //Slawi Wetan
                DB::table('regions')->insert(['id'=>2496, 'parent'=>2494, 'code'=>'52412', 'type'=>'village', 'name'=>'Village 52412, Districts 5241, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2496, 'regionable_id'=>18752, 'regionable_type'=>'village']); //Procot
                DB::table('regionables')->insert(['region_id'=>2496, 'regionable_id'=>19066, 'regionable_type'=>'village']); //Procot
                DB::table('regions')->insert(['id'=>2497, 'parent'=>2494, 'code'=>'52413', 'type'=>'village', 'name'=>'Village 52413, Districts 5241, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2497, 'regionable_id'=>18753, 'regionable_type'=>'village']); //Kudaile
                DB::table('regionables')->insert(['region_id'=>2497, 'regionable_id'=>19067, 'regionable_type'=>'village']); //Kudaile
                DB::table('regions')->insert(['id'=>2498, 'parent'=>2494, 'code'=>'52414', 'type'=>'village', 'name'=>'Village 52414, Districts 5241, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2498, 'regionable_id'=>18754, 'regionable_type'=>'village']); //Trayeman
                DB::table('regionables')->insert(['region_id'=>2498, 'regionable_id'=>19068, 'regionable_type'=>'village']); //Trayeman
                DB::table('regions')->insert(['id'=>2499, 'parent'=>2494, 'code'=>'52415', 'type'=>'village', 'name'=>'Village 52415, Districts 5241, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2499, 'regionable_id'=>18755, 'regionable_type'=>'village']); //Pakembaran
                DB::table('regionables')->insert(['region_id'=>2499, 'regionable_id'=>19069, 'regionable_type'=>'village']); //Pakembaran
                DB::table('regions')->insert(['id'=>2500, 'parent'=>2494, 'code'=>'52416', 'type'=>'village', 'name'=>'Village 52416, Districts 5241, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2500, 'regionable_id'=>18756, 'regionable_type'=>'village']); //Kalisapu
                DB::table('regionables')->insert(['region_id'=>2500, 'regionable_id'=>19070, 'regionable_type'=>'village']); //Kalisapu
                DB::table('regions')->insert(['id'=>2501, 'parent'=>2494, 'code'=>'52418', 'type'=>'village', 'name'=>'Village 52418, Districts 5241, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2501, 'regionable_id'=>18757, 'regionable_type'=>'village']); //Dukuh Salam
                DB::table('regionables')->insert(['region_id'=>2501, 'regionable_id'=>19071, 'regionable_type'=>'village']); //Dukuh Salam
                DB::table('regions')->insert(['id'=>2502, 'parent'=>2494, 'code'=>'52419', 'type'=>'village', 'name'=>'Village 52419, Districts 5241, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2502, 'regionable_id'=>18758, 'regionable_type'=>'village']); //Dukuh Ringin (dukuhwringin)
                DB::table('regionables')->insert(['region_id'=>2502, 'regionable_id'=>18759, 'regionable_type'=>'village']); //Slawi Kulon
                DB::table('regionables')->insert(['region_id'=>2502, 'regionable_id'=>19072, 'regionable_type'=>'village']); //Dukuh Ringin (dukuhwringin)
                DB::table('regionables')->insert(['region_id'=>2502, 'regionable_id'=>19073, 'regionable_type'=>'village']); //Slawi Kulon
            DB::table('regions')->insert(['id'=>2503, 'parent'=>2493, 'code'=>'5245', 'type'=>'districts', 'name'=>'Districts 5245, City 524, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2503, 'regionable_id'=>1911, 'regionable_type'=>'districts']); //Dukuhwaru
            DB::table('regionables')->insert(['region_id'=>2503, 'regionable_id'=>1933, 'regionable_type'=>'districts']); //Dukuhwaru
                DB::table('regions')->insert(['id'=>2504, 'parent'=>2503, 'code'=>'52451', 'type'=>'village', 'name'=>'Village 52451, Districts 5245, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18760, 'regionable_type'=>'village']); //Blubuk
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18761, 'regionable_type'=>'village']); //Bulakpacing
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18762, 'regionable_type'=>'village']); //Dukuhwaru
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18763, 'regionable_type'=>'village']); //Gumayun
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18764, 'regionable_type'=>'village']); //Kabunan
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18765, 'regionable_type'=>'village']); //Kalisoka
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18766, 'regionable_type'=>'village']); //Pedagangan
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18767, 'regionable_type'=>'village']); //Selapura
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18768, 'regionable_type'=>'village']); //Sindang
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>18769, 'regionable_type'=>'village']); //Slarang Lor
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19074, 'regionable_type'=>'village']); //Blubuk
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19075, 'regionable_type'=>'village']); //Bulakpacing
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19076, 'regionable_type'=>'village']); //Dukuhwaru
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19077, 'regionable_type'=>'village']); //Gumayun
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19078, 'regionable_type'=>'village']); //Kabunan
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19079, 'regionable_type'=>'village']); //Kalisoka
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19080, 'regionable_type'=>'village']); //Pedagangan
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19081, 'regionable_type'=>'village']); //Selapura
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19082, 'regionable_type'=>'village']); //Sindang
                DB::table('regionables')->insert(['region_id'=>2504, 'regionable_id'=>19083, 'regionable_type'=>'village']); //Slarang Lor
            DB::table('regions')->insert(['id'=>2505, 'parent'=>2493, 'code'=>'5246', 'type'=>'districts', 'name'=>'Districts 5246, City 524, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1912, 'regionable_type'=>'districts']); //Lebaksiu
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1913, 'regionable_type'=>'districts']); //Pagerbarang
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1914, 'regionable_type'=>'districts']); //Margasari
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1915, 'regionable_type'=>'districts']); //Balapulang
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1916, 'regionable_type'=>'districts']); //Bojong
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1917, 'regionable_type'=>'districts']); //Bumijawa
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1934, 'regionable_type'=>'districts']); //Lebaksiu
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1935, 'regionable_type'=>'districts']); //Pagerbarang
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1936, 'regionable_type'=>'districts']); //Margasari
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1937, 'regionable_type'=>'districts']); //Balapulang
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1938, 'regionable_type'=>'districts']); //Bojong
            DB::table('regionables')->insert(['region_id'=>2505, 'regionable_id'=>1939, 'regionable_type'=>'districts']); //Bumijawa
                DB::table('regions')->insert(['id'=>2506, 'parent'=>2505, 'code'=>'52466', 'type'=>'village', 'name'=>'Village 52466, Districts 5246, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18848, 'regionable_type'=>'village']); //Batumirah
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18849, 'regionable_type'=>'village']); //Begawat
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18850, 'regionable_type'=>'village']); //Bumijawa
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18851, 'regionable_type'=>'village']); //Carul
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18852, 'regionable_type'=>'village']); //Cawitali
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18853, 'regionable_type'=>'village']); //Cempaka
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18854, 'regionable_type'=>'village']); //Cintamanik
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18855, 'regionable_type'=>'village']); //Dukuh Benda
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18856, 'regionable_type'=>'village']); //Guci
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18857, 'regionable_type'=>'village']); //Gunung Agung
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18858, 'regionable_type'=>'village']); //Jejeg
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18859, 'regionable_type'=>'village']); //Muncanglarang
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18860, 'regionable_type'=>'village']); //Pagerkasih
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18861, 'regionable_type'=>'village']); //Sigedong
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18862, 'regionable_type'=>'village']); //Sokasari
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18863, 'regionable_type'=>'village']); //Sokatengah
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18864, 'regionable_type'=>'village']); //Sumbaga
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>18865, 'regionable_type'=>'village']); //Traju
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19162, 'regionable_type'=>'village']); //Batumirah
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19163, 'regionable_type'=>'village']); //Begawat
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19164, 'regionable_type'=>'village']); //Bumijawa
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19165, 'regionable_type'=>'village']); //Carul
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19166, 'regionable_type'=>'village']); //Cawitali
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19167, 'regionable_type'=>'village']); //Cempaka
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19168, 'regionable_type'=>'village']); //Cintamanik
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19169, 'regionable_type'=>'village']); //Dukuh Benda
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19170, 'regionable_type'=>'village']); //Guci
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19171, 'regionable_type'=>'village']); //Gunung Agung
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19172, 'regionable_type'=>'village']); //Jejeg
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19173, 'regionable_type'=>'village']); //Muncanglarang
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19174, 'regionable_type'=>'village']); //Pagerkasih
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19175, 'regionable_type'=>'village']); //Sigedong
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19176, 'regionable_type'=>'village']); //Sokasari
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19177, 'regionable_type'=>'village']); //Sokatengah
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19178, 'regionable_type'=>'village']); //Sumbaga
                DB::table('regionables')->insert(['region_id'=>2506, 'regionable_id'=>19179, 'regionable_type'=>'village']); //Traju
            DB::table('regions')->insert(['id'=>2507, 'parent'=>2493, 'code'=>'5247', 'type'=>'districts', 'name'=>'Districts 5247, City 524, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2507, 'regionable_id'=>1918, 'regionable_type'=>'districts']); //Pangkah
            DB::table('regionables')->insert(['region_id'=>2507, 'regionable_id'=>1919, 'regionable_type'=>'districts']); //Kedung Banteng
            DB::table('regionables')->insert(['region_id'=>2507, 'regionable_id'=>1920, 'regionable_type'=>'districts']); //Jatinegara
            DB::table('regionables')->insert(['region_id'=>2507, 'regionable_id'=>1940, 'regionable_type'=>'districts']); //Pangkah
            DB::table('regionables')->insert(['region_id'=>2507, 'regionable_id'=>1941, 'regionable_type'=>'districts']); //Kedung Banteng
            DB::table('regionables')->insert(['region_id'=>2507, 'regionable_id'=>1942, 'regionable_type'=>'districts']); //Jatinegara
                DB::table('regions')->insert(['id'=>2508, 'parent'=>2507, 'code'=>'52473', 'type'=>'village', 'name'=>'Village 52473, Districts 5247, City 524, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18899, 'regionable_type'=>'village']); //Argatawang
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18900, 'regionable_type'=>'village']); //Capar
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18901, 'regionable_type'=>'village']); //Cerih
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18902, 'regionable_type'=>'village']); //Dukuhbangsa
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18903, 'regionable_type'=>'village']); //Gantungan
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18904, 'regionable_type'=>'village']); //Jatinegara
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18905, 'regionable_type'=>'village']); //Kedungwungu
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18906, 'regionable_type'=>'village']); //Lebakwangi
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18907, 'regionable_type'=>'village']); //Lembahsari
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18908, 'regionable_type'=>'village']); //Luwijawa
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18909, 'regionable_type'=>'village']); //Mokaha
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18910, 'regionable_type'=>'village']); //Padasari
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18911, 'regionable_type'=>'village']); //Penyalahan
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18912, 'regionable_type'=>'village']); //Setail
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18913, 'regionable_type'=>'village']); //Sumbarang
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18914, 'regionable_type'=>'village']); //Tamansari
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>18915, 'regionable_type'=>'village']); //Wotgalih
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19213, 'regionable_type'=>'village']); //Argatawang
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19214, 'regionable_type'=>'village']); //Capar
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19215, 'regionable_type'=>'village']); //Cerih
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19216, 'regionable_type'=>'village']); //Dukuhbangsa
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19217, 'regionable_type'=>'village']); //Gantungan
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19218, 'regionable_type'=>'village']); //Jatinegara
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19219, 'regionable_type'=>'village']); //Kedungwungu
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19220, 'regionable_type'=>'village']); //Lebakwangi
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19221, 'regionable_type'=>'village']); //Lembahsari
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19222, 'regionable_type'=>'village']); //Luwijawa
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19223, 'regionable_type'=>'village']); //Mokaha
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19224, 'regionable_type'=>'village']); //Padasari
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19225, 'regionable_type'=>'village']); //Penyalahan
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19226, 'regionable_type'=>'village']); //Setail
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19227, 'regionable_type'=>'village']); //Sumbarang
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19228, 'regionable_type'=>'village']); //Tamansari
                DB::table('regionables')->insert(['region_id'=>2508, 'regionable_id'=>19229, 'regionable_type'=>'village']); //Wotgalih
        DB::table('regions')->insert(['id'=>2509, 'parent'=>2145, 'code'=>'531', 'type'=>'city', 'name'=>'City 531, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2509, 'regionable_id'=>101, 'regionable_type'=>'city']); //Banyumas regencies
            DB::table('regions')->insert(['id'=>2510, 'parent'=>2509, 'code'=>'5311', 'type'=>'districts', 'name'=>'Districts 5311, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2510, 'regionable_id'=>1974, 'regionable_type'=>'districts']); //Purwokerto Timur
                DB::table('regions')->insert(['id'=>2511, 'parent'=>2510, 'code'=>'53111', 'type'=>'village', 'name'=>'Village 53111, Districts 5311, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2511, 'regionable_id'=>19749, 'regionable_type'=>'village']); //Purwokerto Wetan
                DB::table('regions')->insert(['id'=>2512, 'parent'=>2510, 'code'=>'53112', 'type'=>'village', 'name'=>'Village 53112, Districts 5311, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2512, 'regionable_id'=>19750, 'regionable_type'=>'village']); //Mersi
                DB::table('regions')->insert(['id'=>2513, 'parent'=>2510, 'code'=>'53113', 'type'=>'village', 'name'=>'Village 53113, Districts 5311, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2513, 'regionable_id'=>19751, 'regionable_type'=>'village']); //Arcawinangun
                DB::table('regions')->insert(['id'=>2514, 'parent'=>2510, 'code'=>'53114', 'type'=>'village', 'name'=>'Village 53114, Districts 5311, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2514, 'regionable_id'=>19752, 'regionable_type'=>'village']); //Purwokerto Lor
                DB::table('regions')->insert(['id'=>2515, 'parent'=>2510, 'code'=>'53115', 'type'=>'village', 'name'=>'Village 53115, Districts 5311, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2515, 'regionable_id'=>19753, 'regionable_type'=>'village']); //Sokanegara
                DB::table('regions')->insert(['id'=>2516, 'parent'=>2510, 'code'=>'53116', 'type'=>'village', 'name'=>'Village 53116, Districts 5311, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2516, 'regionable_id'=>19754, 'regionable_type'=>'village']); //Kranji
            DB::table('regions')->insert(['id'=>2517, 'parent'=>2509, 'code'=>'5312', 'type'=>'districts', 'name'=>'Districts 5312, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2517, 'regionable_id'=>1975, 'regionable_type'=>'districts']); //Purwokerto Utara
            DB::table('regionables')->insert(['region_id'=>2517, 'regionable_id'=>1976, 'regionable_type'=>'districts']); //Baturaden
                DB::table('regions')->insert(['id'=>2518, 'parent'=>2517, 'code'=>'53126', 'type'=>'village', 'name'=>'Village 53126, Districts 5312, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2518, 'regionable_id'=>19762, 'regionable_type'=>'village']); //Purwosari
            DB::table('regions')->insert(['id'=>2519, 'parent'=>2509, 'code'=>'5313', 'type'=>'districts', 'name'=>'Districts 5313, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2519, 'regionable_id'=>1977, 'regionable_type'=>'districts']); //Purwokerto Barat
                DB::table('regions')->insert(['id'=>2520, 'parent'=>2519, 'code'=>'53131', 'type'=>'village', 'name'=>'Village 53131, Districts 5313, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2520, 'regionable_id'=>19774, 'regionable_type'=>'village']); //Kedungwuluh
                DB::table('regions')->insert(['id'=>2521, 'parent'=>2519, 'code'=>'53132', 'type'=>'village', 'name'=>'Village 53132, Districts 5313, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2521, 'regionable_id'=>19775, 'regionable_type'=>'village']); //Kober
                DB::table('regions')->insert(['id'=>2522, 'parent'=>2519, 'code'=>'53133', 'type'=>'village', 'name'=>'Village 53133, Districts 5313, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2522, 'regionable_id'=>19776, 'regionable_type'=>'village']); //Bantarsoka
                DB::table('regions')->insert(['id'=>2523, 'parent'=>2519, 'code'=>'53134', 'type'=>'village', 'name'=>'Village 53134, Districts 5313, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2523, 'regionable_id'=>19777, 'regionable_type'=>'village']); //Rejasari
                DB::table('regions')->insert(['id'=>2524, 'parent'=>2519, 'code'=>'53135', 'type'=>'village', 'name'=>'Village 53135, Districts 5313, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2524, 'regionable_id'=>19778, 'regionable_type'=>'village']); //Pasir Kidul
                DB::table('regions')->insert(['id'=>2525, 'parent'=>2519, 'code'=>'53136', 'type'=>'village', 'name'=>'Village 53136, Districts 5313, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2525, 'regionable_id'=>19779, 'regionable_type'=>'village']); //Karanglewas Lor
                DB::table('regions')->insert(['id'=>2526, 'parent'=>2519, 'code'=>'53137', 'type'=>'village', 'name'=>'Village 53137, Districts 5313, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2526, 'regionable_id'=>19780, 'regionable_type'=>'village']); //Pasirmuncang
            DB::table('regions')->insert(['id'=>2527, 'parent'=>2509, 'code'=>'5314', 'type'=>'districts', 'name'=>'Districts 5314, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2527, 'regionable_id'=>1978, 'regionable_type'=>'districts']); //Purwokerto Selatan
                DB::table('regions')->insert(['id'=>2528, 'parent'=>2527, 'code'=>'53141', 'type'=>'village', 'name'=>'Village 53141, Districts 5314, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2528, 'regionable_id'=>19781, 'regionable_type'=>'village']); //Purwokerto Kulon
                DB::table('regions')->insert(['id'=>2529, 'parent'=>2527, 'code'=>'53142', 'type'=>'village', 'name'=>'Village 53142, Districts 5314, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2529, 'regionable_id'=>19782, 'regionable_type'=>'village']); //Karang Pucung
                DB::table('regions')->insert(['id'=>2530, 'parent'=>2527, 'code'=>'53144', 'type'=>'village', 'name'=>'Village 53144, Districts 5314, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2530, 'regionable_id'=>19783, 'regionable_type'=>'village']); //Karang Klesem
                DB::table('regionables')->insert(['region_id'=>2530, 'regionable_id'=>19784, 'regionable_type'=>'village']); //Tanjung
                DB::table('regions')->insert(['id'=>2531, 'parent'=>2527, 'code'=>'53145', 'type'=>'village', 'name'=>'Village 53145, Districts 5314, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2531, 'regionable_id'=>19785, 'regionable_type'=>'village']); //Teluk
                DB::table('regions')->insert(['id'=>2532, 'parent'=>2527, 'code'=>'53146', 'type'=>'village', 'name'=>'Village 53146, Districts 5314, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2532, 'regionable_id'=>19786, 'regionable_type'=>'village']); //Berkoh
                DB::table('regions')->insert(['id'=>2533, 'parent'=>2527, 'code'=>'53147', 'type'=>'village', 'name'=>'Village 53147, Districts 5314, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2533, 'regionable_id'=>19787, 'regionable_type'=>'village']); //Purwokerto Kidul
            DB::table('regions')->insert(['id'=>2534, 'parent'=>2509, 'code'=>'5315', 'type'=>'districts', 'name'=>'Districts 5315, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2534, 'regionable_id'=>1976, 'regionable_type'=>'districts']); //Baturaden
            DB::table('regionables')->insert(['region_id'=>2534, 'regionable_id'=>1979, 'regionable_type'=>'districts']); //Kedung Banteng
                DB::table('regions')->insert(['id'=>2535, 'parent'=>2534, 'code'=>'53152', 'type'=>'village', 'name'=>'Village 53152, Districts 5315, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19788, 'regionable_type'=>'village']); //Baseh
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19789, 'regionable_type'=>'village']); //Beji
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19790, 'regionable_type'=>'village']); //Dawuhan Kulon
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19791, 'regionable_type'=>'village']); //Dawuhan Wetan
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19792, 'regionable_type'=>'village']); //Kalikesur
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19793, 'regionable_type'=>'village']); //Kalisalak
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19794, 'regionable_type'=>'village']); //Karangnangka
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19795, 'regionable_type'=>'village']); //Karangsalam Kidul
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19796, 'regionable_type'=>'village']); //Kebocoran
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19797, 'regionable_type'=>'village']); //Kedungbanteng
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19798, 'regionable_type'=>'village']); //Keniten
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19799, 'regionable_type'=>'village']); //Kutaliman
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19800, 'regionable_type'=>'village']); //Melung
                DB::table('regionables')->insert(['region_id'=>2535, 'regionable_id'=>19801, 'regionable_type'=>'village']); //Windujaya
            DB::table('regions')->insert(['id'=>2536, 'parent'=>2509, 'code'=>'5316', 'type'=>'districts', 'name'=>'Districts 5316, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2536, 'regionable_id'=>1980, 'regionable_type'=>'districts']); //Karanglewas
            DB::table('regionables')->insert(['region_id'=>2536, 'regionable_id'=>1981, 'regionable_type'=>'districts']); //Cilongok
            DB::table('regionables')->insert(['region_id'=>2536, 'regionable_id'=>1982, 'regionable_type'=>'districts']); //Ajibarang
            DB::table('regionables')->insert(['region_id'=>2536, 'regionable_id'=>1983, 'regionable_type'=>'districts']); //Pekuncen
            DB::table('regionables')->insert(['region_id'=>2536, 'regionable_id'=>1984, 'regionable_type'=>'districts']); //Gumelar
                DB::table('regions')->insert(['id'=>2537, 'parent'=>2536, 'code'=>'53165', 'type'=>'village', 'name'=>'Village 53165, Districts 5316, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19866, 'regionable_type'=>'village']); //Cihonje
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19867, 'regionable_type'=>'village']); //Cilangkap
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19868, 'regionable_type'=>'village']); //Gancang
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19869, 'regionable_type'=>'village']); //Gumelar
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19870, 'regionable_type'=>'village']); //Karangkemojing
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19871, 'regionable_type'=>'village']); //Kedungurang
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19872, 'regionable_type'=>'village']); //Paningkaban
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19873, 'regionable_type'=>'village']); //Samudra
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19874, 'regionable_type'=>'village']); //Samudra Kulon
                DB::table('regionables')->insert(['region_id'=>2537, 'regionable_id'=>19875, 'regionable_type'=>'village']); //Tlaga
            DB::table('regions')->insert(['id'=>2538, 'parent'=>2509, 'code'=>'5317', 'type'=>'districts', 'name'=>'Districts 5317, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2538, 'regionable_id'=>1985, 'regionable_type'=>'districts']); //Patikraja
            DB::table('regionables')->insert(['region_id'=>2538, 'regionable_id'=>1986, 'regionable_type'=>'districts']); //Kebasen
            DB::table('regionables')->insert(['region_id'=>2538, 'regionable_id'=>1987, 'regionable_type'=>'districts']); //Rawalo
            DB::table('regionables')->insert(['region_id'=>2538, 'regionable_id'=>1988, 'regionable_type'=>'districts']); //Jatilawang
            DB::table('regionables')->insert(['region_id'=>2538, 'regionable_id'=>1989, 'regionable_type'=>'districts']); //Purwojati
            DB::table('regionables')->insert(['region_id'=>2538, 'regionable_id'=>1990, 'regionable_type'=>'districts']); //Wangon
            DB::table('regionables')->insert(['region_id'=>2538, 'regionable_id'=>1991, 'regionable_type'=>'districts']); //Lumbir
                DB::table('regions')->insert(['id'=>2539, 'parent'=>2538, 'code'=>'53177', 'type'=>'village', 'name'=>'Village 53177, Districts 5317, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19943, 'regionable_type'=>'village']); //Besuki
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19944, 'regionable_type'=>'village']); //Canduk
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19945, 'regionable_type'=>'village']); //Cidora
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19946, 'regionable_type'=>'village']); //Cingebul
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19947, 'regionable_type'=>'village']); //Cirahab
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19948, 'regionable_type'=>'village']); //Dermaji
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19949, 'regionable_type'=>'village']); //Karanggayam
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19950, 'regionable_type'=>'village']); //Kedunggede
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19951, 'regionable_type'=>'village']); //Lumbir
                DB::table('regionables')->insert(['region_id'=>2539, 'regionable_id'=>19952, 'regionable_type'=>'village']); //Parungkamal
            DB::table('regions')->insert(['id'=>2540, 'parent'=>2509, 'code'=>'5318', 'type'=>'districts', 'name'=>'Districts 5318, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2540, 'regionable_id'=>1992, 'regionable_type'=>'districts']); //Sokaraja
            DB::table('regionables')->insert(['region_id'=>2540, 'regionable_id'=>1993, 'regionable_type'=>'districts']); //Kembaran
            DB::table('regionables')->insert(['region_id'=>2540, 'regionable_id'=>1994, 'regionable_type'=>'districts']); //Sumbang
                DB::table('regions')->insert(['id'=>2541, 'parent'=>2540, 'code'=>'53183', 'type'=>'village', 'name'=>'Village 53183, Districts 5318, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19987, 'regionable_type'=>'village']); //Banjarsari Kulon
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19988, 'regionable_type'=>'village']); //Banjarsari Wetan
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19989, 'regionable_type'=>'village']); //Banteran
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19990, 'regionable_type'=>'village']); //Ciberem
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19991, 'regionable_type'=>'village']); //Datar
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19992, 'regionable_type'=>'village']); //Gandatapa
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19993, 'regionable_type'=>'village']); //Karangcegak
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19994, 'regionable_type'=>'village']); //Karanggintung
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19995, 'regionable_type'=>'village']); //Karangturi
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19996, 'regionable_type'=>'village']); //Kawungcarang
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19997, 'regionable_type'=>'village']); //Kebanggan
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19998, 'regionable_type'=>'village']); //Kedung Malang
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>19999, 'regionable_type'=>'village']); //Kotayasa
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>20000, 'regionable_type'=>'village']); //Limpakuwus
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>20001, 'regionable_type'=>'village']); //Sikapat
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>20002, 'regionable_type'=>'village']); //Silado
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>20003, 'regionable_type'=>'village']); //Sumbang
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>20004, 'regionable_type'=>'village']); //Susukan
                DB::table('regionables')->insert(['region_id'=>2541, 'regionable_id'=>20005, 'regionable_type'=>'village']); //Tambaksogra
            DB::table('regions')->insert(['id'=>2542, 'parent'=>2509, 'code'=>'5319', 'type'=>'districts', 'name'=>'Districts 5319, City 531, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2542, 'regionable_id'=>1995, 'regionable_type'=>'districts']); //Kalibagor
            DB::table('regionables')->insert(['region_id'=>2542, 'regionable_id'=>1996, 'regionable_type'=>'districts']); //Banyumas
            DB::table('regionables')->insert(['region_id'=>2542, 'regionable_id'=>1997, 'regionable_type'=>'districts']); //Somagede
            DB::table('regionables')->insert(['region_id'=>2542, 'regionable_id'=>1998, 'regionable_type'=>'districts']); //Kemranjen
            DB::table('regionables')->insert(['region_id'=>2542, 'regionable_id'=>1999, 'regionable_type'=>'districts']); //Sumpiuh
            DB::table('regionables')->insert(['region_id'=>2542, 'regionable_id'=>2000, 'regionable_type'=>'districts']); //Tambak
                DB::table('regions')->insert(['id'=>2543, 'parent'=>2542, 'code'=>'53196', 'type'=>'village', 'name'=>'Village 53196, Districts 5319, City 531, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20068, 'regionable_type'=>'village']); //Buniayu
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20069, 'regionable_type'=>'village']); //Gebangsari
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20070, 'regionable_type'=>'village']); //Gumelar Kidul
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20071, 'regionable_type'=>'village']); //Gumelar Lor
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20072, 'regionable_type'=>'village']); //Kamulyan
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20073, 'regionable_type'=>'village']); //Karangpetir
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20074, 'regionable_type'=>'village']); //Karangpucung
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20075, 'regionable_type'=>'village']); //Pesantren
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20076, 'regionable_type'=>'village']); //Plangkapan
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20077, 'regionable_type'=>'village']); //Prembun
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20078, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>2543, 'regionable_id'=>20079, 'regionable_type'=>'village']); //Watuagung
        DB::table('regions')->insert(['id'=>2544, 'parent'=>2145, 'code'=>'532', 'type'=>'city', 'name'=>'City 532, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2544, 'regionable_id'=>102, 'regionable_type'=>'city']); //Cilacap regencies
            DB::table('regions')->insert(['id'=>2545, 'parent'=>2544, 'code'=>'5321', 'type'=>'districts', 'name'=>'Districts 5321, City 532, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2545, 'regionable_id'=>2001, 'regionable_type'=>'districts']); //Cilacap Selatan
                DB::table('regions')->insert(['id'=>2546, 'parent'=>2545, 'code'=>'53211', 'type'=>'village', 'name'=>'Village 53211, Districts 5321, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2546, 'regionable_id'=>20080, 'regionable_type'=>'village']); //Cilacap
                DB::table('regions')->insert(['id'=>2547, 'parent'=>2545, 'code'=>'53212', 'type'=>'village', 'name'=>'Village 53212, Districts 5321, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2547, 'regionable_id'=>20081, 'regionable_type'=>'village']); //Sidakaya
                DB::table('regions')->insert(['id'=>2548, 'parent'=>2545, 'code'=>'53213', 'type'=>'village', 'name'=>'Village 53213, Districts 5321, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2548, 'regionable_id'=>20082, 'regionable_type'=>'village']); //Tambakreja
                DB::table('regions')->insert(['id'=>2549, 'parent'=>2545, 'code'=>'53215', 'type'=>'village', 'name'=>'Village 53215, Districts 5321, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2549, 'regionable_id'=>20083, 'regionable_type'=>'village']); //Tegalkamulyan
                DB::table('regionables')->insert(['region_id'=>2549, 'regionable_id'=>20084, 'regionable_type'=>'village']); //Tegalrejo
            DB::table('regions')->insert(['id'=>2550, 'parent'=>2544, 'code'=>'5322', 'type'=>'districts', 'name'=>'Districts 5322, City 532, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2550, 'regionable_id'=>2002, 'regionable_type'=>'districts']); //Cilacap Tengah
            DB::table('regionables')->insert(['region_id'=>2550, 'regionable_id'=>2003, 'regionable_type'=>'districts']); //Wanareja
                DB::table('regions')->insert(['id'=>2551, 'parent'=>2550, 'code'=>'53222', 'type'=>'village', 'name'=>'Village 53222, Districts 5322, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2551, 'regionable_id'=>20086, 'regionable_type'=>'village']); //Donan
                DB::table('regionables')->insert(['region_id'=>2551, 'regionable_id'=>20090, 'regionable_type'=>'village']); //Cigintung
            DB::table('regions')->insert(['id'=>2552, 'parent'=>2544, 'code'=>'5323', 'type'=>'districts', 'name'=>'Districts 5323, City 532, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2552, 'regionable_id'=>2003, 'regionable_type'=>'districts']); //Wanareja
            DB::table('regionables')->insert(['region_id'=>2552, 'regionable_id'=>2004, 'regionable_type'=>'districts']); //Cilacap Utara
                DB::table('regions')->insert(['id'=>2553, 'parent'=>2552, 'code'=>'53231', 'type'=>'village', 'name'=>'Village 53231, Districts 5323, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2553, 'regionable_id'=>20106, 'regionable_type'=>'village']); //Gumilir
                DB::table('regions')->insert(['id'=>2554, 'parent'=>2552, 'code'=>'53232', 'type'=>'village', 'name'=>'Village 53232, Districts 5323, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2554, 'regionable_id'=>20091, 'regionable_type'=>'village']); //Limbangan
                DB::table('regionables')->insert(['region_id'=>2554, 'regionable_id'=>20107, 'regionable_type'=>'village']); //Mertasinga
                DB::table('regions')->insert(['id'=>2555, 'parent'=>2552, 'code'=>'53233', 'type'=>'village', 'name'=>'Village 53233, Districts 5323, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2555, 'regionable_id'=>20108, 'regionable_type'=>'village']); //Tritih Kulon
                DB::table('regions')->insert(['id'=>2556, 'parent'=>2552, 'code'=>'53234', 'type'=>'village', 'name'=>'Village 53234, Districts 5323, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2556, 'regionable_id'=>20109, 'regionable_type'=>'village']); //Karangtalun
                DB::table('regions')->insert(['id'=>2557, 'parent'=>2552, 'code'=>'53235', 'type'=>'village', 'name'=>'Village 53235, Districts 5323, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2557, 'regionable_id'=>20110, 'regionable_type'=>'village']); //Kebonmanis
            DB::table('regions')->insert(['id'=>2558, 'parent'=>2544, 'code'=>'5325', 'type'=>'districts', 'name'=>'Districts 5325, City 532, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2558, 'regionable_id'=>2005, 'regionable_type'=>'districts']); //Jeruklegi
            DB::table('regionables')->insert(['region_id'=>2558, 'regionable_id'=>2006, 'regionable_type'=>'districts']); //Kawunganten
            DB::table('regionables')->insert(['region_id'=>2558, 'regionable_id'=>2007, 'regionable_type'=>'districts']); //Kampung Laut
            DB::table('regionables')->insert(['region_id'=>2558, 'regionable_id'=>2008, 'regionable_type'=>'districts']); //Gandrungmangu
            DB::table('regionables')->insert(['region_id'=>2558, 'regionable_id'=>2009, 'regionable_type'=>'districts']); //Karangpucung
            DB::table('regionables')->insert(['region_id'=>2558, 'regionable_id'=>2010, 'regionable_type'=>'districts']); //Cimanggu
            DB::table('regionables')->insert(['region_id'=>2558, 'regionable_id'=>2011, 'regionable_type'=>'districts']); //Majenang
                DB::table('regions')->insert(['id'=>2559, 'parent'=>2558, 'code'=>'53257', 'type'=>'village', 'name'=>'Village 53257, Districts 5325, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20183, 'regionable_type'=>'village']); //Bener
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20184, 'regionable_type'=>'village']); //Boja
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20185, 'regionable_type'=>'village']); //Cibeunying
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20186, 'regionable_type'=>'village']); //Cilopadang
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20187, 'regionable_type'=>'village']); //Jenang
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20188, 'regionable_type'=>'village']); //Mulyadadi
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20189, 'regionable_type'=>'village']); //Mulyasari
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20190, 'regionable_type'=>'village']); //Padangjaya
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20191, 'regionable_type'=>'village']); //Padangsari
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20192, 'regionable_type'=>'village']); //Pahonjean
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20193, 'regionable_type'=>'village']); //Pengadegan
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20194, 'regionable_type'=>'village']); //Sadabumi
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20195, 'regionable_type'=>'village']); //Sadahayu
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20196, 'regionable_type'=>'village']); //Salebu
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20197, 'regionable_type'=>'village']); //Sepatnunggal
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20198, 'regionable_type'=>'village']); //Sindangsari
                DB::table('regionables')->insert(['region_id'=>2559, 'regionable_id'=>20199, 'regionable_type'=>'village']); //Ujungbarang
            DB::table('regions')->insert(['id'=>2560, 'parent'=>2544, 'code'=>'5326', 'type'=>'districts', 'name'=>'Districts 5326, City 532, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2560, 'regionable_id'=>2003, 'regionable_type'=>'districts']); //Wanareja
            DB::table('regionables')->insert(['region_id'=>2560, 'regionable_id'=>2012, 'regionable_type'=>'districts']); //Sidareja
            DB::table('regionables')->insert(['region_id'=>2560, 'regionable_id'=>2013, 'regionable_type'=>'districts']); //Cipari
            DB::table('regionables')->insert(['region_id'=>2560, 'regionable_id'=>2014, 'regionable_type'=>'districts']); //Kedungreja
            DB::table('regionables')->insert(['region_id'=>2560, 'regionable_id'=>2015, 'regionable_type'=>'districts']); //Patimuan
            DB::table('regionables')->insert(['region_id'=>2560, 'regionable_id'=>2016, 'regionable_type'=>'districts']); //Dayeuhluhur
                DB::table('regions')->insert(['id'=>2561, 'parent'=>2560, 'code'=>'53266', 'type'=>'village', 'name'=>'Village 53266, Districts 5326, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20239, 'regionable_type'=>'village']); //Bingkeng
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20240, 'regionable_type'=>'village']); //Bolang
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20241, 'regionable_type'=>'village']); //Cijeruk
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20242, 'regionable_type'=>'village']); //Cilumping
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20243, 'regionable_type'=>'village']); //Ciwalen
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20244, 'regionable_type'=>'village']); //Datar
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20245, 'regionable_type'=>'village']); //Dayeuhluhur
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20246, 'regionable_type'=>'village']); //Hanum
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20247, 'regionable_type'=>'village']); //Kutaagung
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20248, 'regionable_type'=>'village']); //Matenggeng
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20249, 'regionable_type'=>'village']); //Panulisan
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20250, 'regionable_type'=>'village']); //Panulisan Barat
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20251, 'regionable_type'=>'village']); //Panulisan Timur
                DB::table('regionables')->insert(['region_id'=>2561, 'regionable_id'=>20252, 'regionable_type'=>'village']); //Sumpinghayu
            DB::table('regions')->insert(['id'=>2562, 'parent'=>2544, 'code'=>'5327', 'type'=>'districts', 'name'=>'Districts 5327, City 532, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2562, 'regionable_id'=>2017, 'regionable_type'=>'districts']); //Adipala
            DB::table('regionables')->insert(['region_id'=>2562, 'regionable_id'=>2018, 'regionable_type'=>'districts']); //Maos
            DB::table('regionables')->insert(['region_id'=>2562, 'regionable_id'=>2019, 'regionable_type'=>'districts']); //Sampang
            DB::table('regionables')->insert(['region_id'=>2562, 'regionable_id'=>2020, 'regionable_type'=>'districts']); //Kesugihan
                DB::table('regions')->insert(['id'=>2563, 'parent'=>2562, 'code'=>'53274', 'type'=>'village', 'name'=>'Village 53274, Districts 5327, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20289, 'regionable_type'=>'village']); //Bulupayung
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20290, 'regionable_type'=>'village']); //Ciwuni
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20291, 'regionable_type'=>'village']); //Dondong
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20292, 'regionable_type'=>'village']); //Jangrana
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20293, 'regionable_type'=>'village']); //Kalisabuk
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20294, 'regionable_type'=>'village']); //Karangjengkol
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20295, 'regionable_type'=>'village']); //Karangkandri
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20296, 'regionable_type'=>'village']); //Keleng
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20297, 'regionable_type'=>'village']); //Kesugihan
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20298, 'regionable_type'=>'village']); //Kesugihan Kidul
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20299, 'regionable_type'=>'village']); //Kuripan
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20300, 'regionable_type'=>'village']); //Kuripan Kidul
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20301, 'regionable_type'=>'village']); //Menganti
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20302, 'regionable_type'=>'village']); //Pesanggrahan
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20303, 'regionable_type'=>'village']); //Planjan
                DB::table('regionables')->insert(['region_id'=>2563, 'regionable_id'=>20304, 'regionable_type'=>'village']); //Slarang
            DB::table('regions')->insert(['id'=>2564, 'parent'=>2544, 'code'=>'5328', 'type'=>'districts', 'name'=>'Districts 5328, City 532, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2564, 'regionable_id'=>2021, 'regionable_type'=>'districts']); //Binangun
            DB::table('regionables')->insert(['region_id'=>2564, 'regionable_id'=>2022, 'regionable_type'=>'districts']); //Bantarsari
            DB::table('regionables')->insert(['region_id'=>2564, 'regionable_id'=>2023, 'regionable_type'=>'districts']); //Kroya
            DB::table('regionables')->insert(['region_id'=>2564, 'regionable_id'=>2024, 'regionable_type'=>'districts']); //Nusawungu
                DB::table('regions')->insert(['id'=>2565, 'parent'=>2564, 'code'=>'53283', 'type'=>'village', 'name'=>'Village 53283, Districts 5328, City 532, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20347, 'regionable_type'=>'village']); //Banjareja
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20348, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20349, 'regionable_type'=>'village']); //Banjarwaru
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20350, 'regionable_type'=>'village']); //Danasri
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20351, 'regionable_type'=>'village']); //Danasri Kidul
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20352, 'regionable_type'=>'village']); //Danasri Lor
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20353, 'regionable_type'=>'village']); //Jetis
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20354, 'regionable_type'=>'village']); //Karangpakis
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20355, 'regionable_type'=>'village']); //Karangputat
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20356, 'regionable_type'=>'village']); //Karangsembung
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20357, 'regionable_type'=>'village']); //Karangtawang
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20358, 'regionable_type'=>'village']); //Kedungbenda
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20359, 'regionable_type'=>'village']); //Klumprit
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20360, 'regionable_type'=>'village']); //Nusawangkal
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20361, 'regionable_type'=>'village']); //Nusawungu
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20362, 'regionable_type'=>'village']); //Purwadadi
                DB::table('regionables')->insert(['region_id'=>2565, 'regionable_id'=>20363, 'regionable_type'=>'village']); //Sikanco
        DB::table('regions')->insert(['id'=>2566, 'parent'=>2145, 'code'=>'533', 'type'=>'city', 'name'=>'City 533, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2566, 'regionable_id'=>103, 'regionable_type'=>'city']); //Purbalingga regencies
            DB::table('regions')->insert(['id'=>2567, 'parent'=>2566, 'code'=>'5331', 'type'=>'districts', 'name'=>'Districts 5331, City 533, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2567, 'regionable_id'=>2025, 'regionable_type'=>'districts']); //Purbalingga
            DB::table('regionables')->insert(['region_id'=>2567, 'regionable_id'=>2026, 'regionable_type'=>'districts']); //Kejobong
                DB::table('regions')->insert(['id'=>2568, 'parent'=>2567, 'code'=>'53314', 'type'=>'village', 'name'=>'Village 53314, Districts 5331, City 533, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2568, 'regionable_id'=>20367, 'regionable_type'=>'village']); //Penambongan
                DB::table('regionables')->insert(['region_id'=>2568, 'regionable_id'=>20377, 'regionable_type'=>'village']); //Timbang
            DB::table('regions')->insert(['id'=>2569, 'parent'=>2566, 'code'=>'5332', 'type'=>'districts', 'name'=>'Districts 5332, City 533, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2569, 'regionable_id'=>2027, 'regionable_type'=>'districts']); //Kalimanah
                DB::table('regions')->insert(['id'=>2570, 'parent'=>2569, 'code'=>'53321', 'type'=>'village', 'name'=>'Village 53321, Districts 5332, City 533, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2570, 'regionable_id'=>20390, 'regionable_type'=>'village']); //Kalikabong
            DB::table('regions')->insert(['id'=>2571, 'parent'=>2566, 'code'=>'5333', 'type'=>'districts', 'name'=>'Districts 5333, City 533, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2571, 'regionable_id'=>2028, 'regionable_type'=>'districts']); //Kaligondang
                DB::table('regions')->insert(['id'=>2572, 'parent'=>2571, 'code'=>'53331', 'type'=>'village', 'name'=>'Village 53331, Districts 5333, City 533, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2572, 'regionable_id'=>20407, 'regionable_type'=>'village']); //Penaruban
            DB::table('regions')->insert(['id'=>2573, 'parent'=>2566, 'code'=>'5335', 'type'=>'districts', 'name'=>'Districts 5335, City 533, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2573, 'regionable_id'=>2029, 'regionable_type'=>'districts']); //Mrebet
            DB::table('regionables')->insert(['region_id'=>2573, 'regionable_id'=>2030, 'regionable_type'=>'districts']); //Bobotsari
            DB::table('regionables')->insert(['region_id'=>2573, 'regionable_id'=>2031, 'regionable_type'=>'districts']); //Kertanegara
            DB::table('regionables')->insert(['region_id'=>2573, 'regionable_id'=>2032, 'regionable_type'=>'districts']); //Karanganyar
            DB::table('regionables')->insert(['region_id'=>2573, 'regionable_id'=>2033, 'regionable_type'=>'districts']); //Karangmoncol
            DB::table('regionables')->insert(['region_id'=>2573, 'regionable_id'=>2034, 'regionable_type'=>'districts']); //Rembang
            DB::table('regionables')->insert(['region_id'=>2573, 'regionable_id'=>2035, 'regionable_type'=>'districts']); //Karangjambu
            DB::table('regionables')->insert(['region_id'=>2573, 'regionable_id'=>2036, 'regionable_type'=>'districts']); //Karangreja
                DB::table('regions')->insert(['id'=>2574, 'parent'=>2573, 'code'=>'53357', 'type'=>'village', 'name'=>'Village 53357, Districts 5335, City 533, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20507, 'regionable_type'=>'village']); //Danasari
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20508, 'regionable_type'=>'village']); //Jingkang
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20509, 'regionable_type'=>'village']); //Karangjambu
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20510, 'regionable_type'=>'village']); //Purbasari
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20511, 'regionable_type'=>'village']); //Sanguwatang
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20512, 'regionable_type'=>'village']); //Sirandu
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20513, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20514, 'regionable_type'=>'village']); //Karangreja
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20515, 'regionable_type'=>'village']); //Kutabawa
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20516, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20517, 'regionable_type'=>'village']); //Siwarak
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20518, 'regionable_type'=>'village']); //Tlahab Kidul
                DB::table('regionables')->insert(['region_id'=>2574, 'regionable_id'=>20519, 'regionable_type'=>'village']); //Tlahab Lor
            DB::table('regions')->insert(['id'=>2575, 'parent'=>2566, 'code'=>'5336', 'type'=>'districts', 'name'=>'Districts 5336, City 533, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2575, 'regionable_id'=>2037, 'regionable_type'=>'districts']); //Kutasari
            DB::table('regionables')->insert(['region_id'=>2575, 'regionable_id'=>2038, 'regionable_type'=>'districts']); //Bojongsari
                DB::table('regions')->insert(['id'=>2576, 'parent'=>2575, 'code'=>'53362', 'type'=>'village', 'name'=>'Village 53362, Districts 5336, City 533, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20534, 'regionable_type'=>'village']); //Banjaran
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20535, 'regionable_type'=>'village']); //Beji
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20536, 'regionable_type'=>'village']); //Bojongsari
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20537, 'regionable_type'=>'village']); //Brobot
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20538, 'regionable_type'=>'village']); //Bumisari
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20539, 'regionable_type'=>'village']); //Galuh
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20540, 'regionable_type'=>'village']); //Gembong
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20541, 'regionable_type'=>'village']); //Kajongan
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20542, 'regionable_type'=>'village']); //Karangbanjar
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20543, 'regionable_type'=>'village']); //Metenggeng
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20544, 'regionable_type'=>'village']); //Pagedangan
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20545, 'regionable_type'=>'village']); //Patemon
                DB::table('regionables')->insert(['region_id'=>2576, 'regionable_id'=>20546, 'regionable_type'=>'village']); //Pekalongan
            DB::table('regions')->insert(['id'=>2577, 'parent'=>2566, 'code'=>'5337', 'type'=>'districts', 'name'=>'Districts 5337, City 533, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2577, 'regionable_id'=>2027, 'regionable_type'=>'districts']); //Kalimanah
            DB::table('regionables')->insert(['region_id'=>2577, 'regionable_id'=>2039, 'regionable_type'=>'districts']); //Padamara
                DB::table('regions')->insert(['id'=>2578, 'parent'=>2577, 'code'=>'53372', 'type'=>'village', 'name'=>'Village 53372, Districts 5337, City 533, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20547, 'regionable_type'=>'village']); //Bojanegara
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20548, 'regionable_type'=>'village']); //Dawuhan
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20549, 'regionable_type'=>'village']); //Gemuruh
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20550, 'regionable_type'=>'village']); //Kalitinggar
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20551, 'regionable_type'=>'village']); //Kalitinggar Kidul
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20552, 'regionable_type'=>'village']); //Karanggambas
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20553, 'regionable_type'=>'village']); //Karangjambe
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20554, 'regionable_type'=>'village']); //Karangpule
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20555, 'regionable_type'=>'village']); //Karangsentul
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20556, 'regionable_type'=>'village']); //Mipiran
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20557, 'regionable_type'=>'village']); //Padamara
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20558, 'regionable_type'=>'village']); //Prigi
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20559, 'regionable_type'=>'village']); //Purbayasa
                DB::table('regionables')->insert(['region_id'=>2578, 'regionable_id'=>20560, 'regionable_type'=>'village']); //Sokawera
            DB::table('regions')->insert(['id'=>2579, 'parent'=>2566, 'code'=>'5338', 'type'=>'districts', 'name'=>'Districts 5338, City 533, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2579, 'regionable_id'=>2040, 'regionable_type'=>'districts']); //Kemangkon
            DB::table('regionables')->insert(['region_id'=>2579, 'regionable_id'=>2041, 'regionable_type'=>'districts']); //Bukateja
                DB::table('regions')->insert(['id'=>2580, 'parent'=>2579, 'code'=>'53382', 'type'=>'village', 'name'=>'Village 53382, Districts 5338, City 533, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20580, 'regionable_type'=>'village']); //Bajong
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20581, 'regionable_type'=>'village']); //Bukateja
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20582, 'regionable_type'=>'village']); //Cipawon
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20583, 'regionable_type'=>'village']); //Karangcengis
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20584, 'regionable_type'=>'village']); //Karanggedang
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20585, 'regionable_type'=>'village']); //Karangnangka
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20586, 'regionable_type'=>'village']); //Kebutuh
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20587, 'regionable_type'=>'village']); //Kedungjati
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20588, 'regionable_type'=>'village']); //Kembangan
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20589, 'regionable_type'=>'village']); //Kutawis
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20590, 'regionable_type'=>'village']); //Majasari
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20591, 'regionable_type'=>'village']); //Penaruban
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20592, 'regionable_type'=>'village']); //Tidu
                DB::table('regionables')->insert(['region_id'=>2580, 'regionable_id'=>20593, 'regionable_type'=>'village']); //Wirasaba
            DB::table('regions')->insert(['id'=>2581, 'parent'=>2566, 'code'=>'5339', 'type'=>'districts', 'name'=>'Districts 5339, City 533, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2581, 'regionable_id'=>2026, 'regionable_type'=>'districts']); //Kejobong
            DB::table('regionables')->insert(['region_id'=>2581, 'regionable_id'=>2028, 'regionable_type'=>'districts']); //Kaligondang
            DB::table('regionables')->insert(['region_id'=>2581, 'regionable_id'=>2042, 'regionable_type'=>'districts']); //Pengadegan
                DB::table('regions')->insert(['id'=>2582, 'parent'=>2581, 'code'=>'53393', 'type'=>'village', 'name'=>'Village 53393, Districts 5339, City 533, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20594, 'regionable_type'=>'village']); //Bedagas
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20595, 'regionable_type'=>'village']); //Karangjoho
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20596, 'regionable_type'=>'village']); //Larangan
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20597, 'regionable_type'=>'village']); //Pangadegan
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20598, 'regionable_type'=>'village']); //Panunggalan
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20599, 'regionable_type'=>'village']); //Pasunggingan
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20600, 'regionable_type'=>'village']); //Tegalpingen
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20601, 'regionable_type'=>'village']); //Tetel
                DB::table('regionables')->insert(['region_id'=>2582, 'regionable_id'=>20602, 'regionable_type'=>'village']); //Tumanggal
        DB::table('regions')->insert(['id'=>2583, 'parent'=>2145, 'code'=>'534', 'type'=>'city', 'name'=>'City 534, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2583, 'regionable_id'=>104, 'regionable_type'=>'city']); //Banjarnegara regencies
            DB::table('regions')->insert(['id'=>2584, 'parent'=>2583, 'code'=>'5341', 'type'=>'districts', 'name'=>'Districts 5341, City 534, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2584, 'regionable_id'=>2043, 'regionable_type'=>'districts']); //Banjarnegara
            DB::table('regionables')->insert(['region_id'=>2584, 'regionable_id'=>2044, 'regionable_type'=>'districts']); //Pagedongan
                DB::table('regions')->insert(['id'=>2585, 'parent'=>2584, 'code'=>'53418', 'type'=>'village', 'name'=>'Village 53418, Districts 5341, City 534, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20609, 'regionable_type'=>'village']); //Ampelsari
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20610, 'regionable_type'=>'village']); //Argasoka
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20611, 'regionable_type'=>'village']); //Cendana
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20612, 'regionable_type'=>'village']); //Kuta Banjarnegara
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20613, 'regionable_type'=>'village']); //Semampir
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20614, 'regionable_type'=>'village']); //Sokayasa
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20615, 'regionable_type'=>'village']); //Tlagawera
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20616, 'regionable_type'=>'village']); //Duren
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20617, 'regionable_type'=>'village']); //Gentansari
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20618, 'regionable_type'=>'village']); //Gunungjati
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20619, 'regionable_type'=>'village']); //Kebutuhduwur
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20620, 'regionable_type'=>'village']); //Kebutuhjurang
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20621, 'regionable_type'=>'village']); //Lebakwangi
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20622, 'regionable_type'=>'village']); //Pagedongan
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20623, 'regionable_type'=>'village']); //Pesangkalan
                DB::table('regionables')->insert(['region_id'=>2585, 'regionable_id'=>20624, 'regionable_type'=>'village']); //Twelagiri
            DB::table('regions')->insert(['id'=>2586, 'parent'=>2583, 'code'=>'5345', 'type'=>'districts', 'name'=>'Districts 5345, City 534, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2586, 'regionable_id'=>2045, 'regionable_type'=>'districts']); //Banjarmangu
            DB::table('regionables')->insert(['region_id'=>2586, 'regionable_id'=>2046, 'regionable_type'=>'districts']); //Karangkobar
            DB::table('regionables')->insert(['region_id'=>2586, 'regionable_id'=>2047, 'regionable_type'=>'districts']); //Pejawaran
            DB::table('regionables')->insert(['region_id'=>2586, 'regionable_id'=>2048, 'regionable_type'=>'districts']); //Pagentan
            DB::table('regionables')->insert(['region_id'=>2586, 'regionable_id'=>2049, 'regionable_type'=>'districts']); //Batur
            DB::table('regionables')->insert(['region_id'=>2586, 'regionable_id'=>2050, 'regionable_type'=>'districts']); //Wanayasa
            DB::table('regionables')->insert(['region_id'=>2586, 'regionable_id'=>2051, 'regionable_type'=>'districts']); //Kalibening
            DB::table('regionables')->insert(['region_id'=>2586, 'regionable_id'=>2052, 'regionable_type'=>'districts']); //Pandanarum
                DB::table('regions')->insert(['id'=>2587, 'parent'=>2586, 'code'=>'53458', 'type'=>'village', 'name'=>'Village 53458, Districts 5345, City 534, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20713, 'regionable_type'=>'village']); //Asinan
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20714, 'regionable_type'=>'village']); //Bedana
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20715, 'regionable_type'=>'village']); //Gununglangit
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20716, 'regionable_type'=>'village']); //Kalibening
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20717, 'regionable_type'=>'village']); //Kalibombong
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20718, 'regionable_type'=>'village']); //Kalisat Kidul
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20719, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20720, 'regionable_type'=>'village']); //Kasinoman
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20721, 'regionable_type'=>'village']); //Kertasari
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20722, 'regionable_type'=>'village']); //Majatengah
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20723, 'regionable_type'=>'village']); //Plorengan
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20724, 'regionable_type'=>'village']); //Sembawa
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20725, 'regionable_type'=>'village']); //Sidakangen
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20726, 'regionable_type'=>'village']); //Sikumpul
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20727, 'regionable_type'=>'village']); //Sirukem
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20728, 'regionable_type'=>'village']); //Sirukun
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20729, 'regionable_type'=>'village']); //Beji
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20730, 'regionable_type'=>'village']); //Lawen
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20731, 'regionable_type'=>'village']); //Pandanarum
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20732, 'regionable_type'=>'village']); //Pasegeran
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20733, 'regionable_type'=>'village']); //Pingit Lor
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20734, 'regionable_type'=>'village']); //Pringamba
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20735, 'regionable_type'=>'village']); //Sinduaji
                DB::table('regionables')->insert(['region_id'=>2587, 'regionable_id'=>20736, 'regionable_type'=>'village']); //Sirongge
            DB::table('regions')->insert(['id'=>2588, 'parent'=>2583, 'code'=>'5346', 'type'=>'districts', 'name'=>'Districts 5346, City 534, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2588, 'regionable_id'=>2053, 'regionable_type'=>'districts']); //Wanadadi (wonodadi)
            DB::table('regionables')->insert(['region_id'=>2588, 'regionable_id'=>2054, 'regionable_type'=>'districts']); //Punggelan
            DB::table('regionables')->insert(['region_id'=>2588, 'regionable_id'=>2055, 'regionable_type'=>'districts']); //Rakit
                DB::table('regions')->insert(['id'=>2589, 'parent'=>2588, 'code'=>'53463', 'type'=>'village', 'name'=>'Village 53463, Districts 5346, City 534, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20765, 'regionable_type'=>'village']); //Adipasir
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20766, 'regionable_type'=>'village']); //Badamita
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20767, 'regionable_type'=>'village']); //Bandingan
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20768, 'regionable_type'=>'village']); //Gelang
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20769, 'regionable_type'=>'village']); //Kincang
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20770, 'regionable_type'=>'village']); //Lengkong
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20771, 'regionable_type'=>'village']); //Luwung
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20772, 'regionable_type'=>'village']); //Pingit
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20773, 'regionable_type'=>'village']); //Rakit
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20774, 'regionable_type'=>'village']); //Situwangi
                DB::table('regionables')->insert(['region_id'=>2589, 'regionable_id'=>20775, 'regionable_type'=>'village']); //Tanjunganom
            DB::table('regions')->insert(['id'=>2590, 'parent'=>2583, 'code'=>'5347', 'type'=>'districts', 'name'=>'Districts 5347, City 534, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2590, 'regionable_id'=>2056, 'regionable_type'=>'districts']); //Bawang
            DB::table('regionables')->insert(['region_id'=>2590, 'regionable_id'=>2057, 'regionable_type'=>'districts']); //Purwonegoro
            DB::table('regionables')->insert(['region_id'=>2590, 'regionable_id'=>2058, 'regionable_type'=>'districts']); //Mandiraja
            DB::table('regionables')->insert(['region_id'=>2590, 'regionable_id'=>2059, 'regionable_type'=>'districts']); //Purworejo Klampok
            DB::table('regionables')->insert(['region_id'=>2590, 'regionable_id'=>2060, 'regionable_type'=>'districts']); //Susukan
                DB::table('regions')->insert(['id'=>2591, 'parent'=>2590, 'code'=>'53475', 'type'=>'village', 'name'=>'Village 53475, Districts 5347, City 534, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20831, 'regionable_type'=>'village']); //Berta
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20832, 'regionable_type'=>'village']); //Brengkok
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20833, 'regionable_type'=>'village']); //Derik
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20834, 'regionable_type'=>'village']); //Dermasari
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20835, 'regionable_type'=>'village']); //Gumelem Kulon
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20836, 'regionable_type'=>'village']); //Gumelem Wetan
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20837, 'regionable_type'=>'village']); //Karangjati
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20838, 'regionable_type'=>'village']); //Karangsalam
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20839, 'regionable_type'=>'village']); //Kedawung
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20840, 'regionable_type'=>'village']); //Kemranggon
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20841, 'regionable_type'=>'village']); //Pakikiran
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20842, 'regionable_type'=>'village']); //Panerusan Kulon
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20843, 'regionable_type'=>'village']); //Panerusan Wetan
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20844, 'regionable_type'=>'village']); //Piasa Wetan
                DB::table('regionables')->insert(['region_id'=>2591, 'regionable_id'=>20845, 'regionable_type'=>'village']); //Susukan
            DB::table('regions')->insert(['id'=>2592, 'parent'=>2583, 'code'=>'5348', 'type'=>'districts', 'name'=>'Districts 5348, City 534, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2592, 'regionable_id'=>2061, 'regionable_type'=>'districts']); //Sigaluh
            DB::table('regionables')->insert(['region_id'=>2592, 'regionable_id'=>2062, 'regionable_type'=>'districts']); //Madukara
                DB::table('regions')->insert(['id'=>2593, 'parent'=>2592, 'code'=>'53482', 'type'=>'village', 'name'=>'Village 53482, Districts 5348, City 534, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20861, 'regionable_type'=>'village']); //Bantarwaru
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20862, 'regionable_type'=>'village']); //Blitar
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20863, 'regionable_type'=>'village']); //Clapar
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20864, 'regionable_type'=>'village']); //Dawuhan
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20865, 'regionable_type'=>'village']); //Gununggiana
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20866, 'regionable_type'=>'village']); //Kaliurip
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20867, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20868, 'regionable_type'=>'village']); //Kenteng
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20869, 'regionable_type'=>'village']); //Kutayasa
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20870, 'regionable_type'=>'village']); //Limbangan
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20871, 'regionable_type'=>'village']); //Madukara
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20872, 'regionable_type'=>'village']); //Pagelak
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20873, 'regionable_type'=>'village']); //Pakelen
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20874, 'regionable_type'=>'village']); //Pekauman
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20875, 'regionable_type'=>'village']); //Penawangan
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20876, 'regionable_type'=>'village']); //Petambakan
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20877, 'regionable_type'=>'village']); //Rakitan
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20878, 'regionable_type'=>'village']); //Rejasa
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20879, 'regionable_type'=>'village']); //Sered
                DB::table('regionables')->insert(['region_id'=>2593, 'regionable_id'=>20880, 'regionable_type'=>'village']); //Talunamba
        DB::table('regions')->insert(['id'=>2594, 'parent'=>2145, 'code'=>'541', 'type'=>'city', 'name'=>'City 541, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2594, 'regionable_id'=>105, 'regionable_type'=>'city']); //Purworejo regencies
            DB::table('regions')->insert(['id'=>2595, 'parent'=>2594, 'code'=>'5411', 'type'=>'districts', 'name'=>'Districts 5411, City 541, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2595, 'regionable_id'=>2063, 'regionable_type'=>'districts']); //Purworejo
            DB::table('regionables')->insert(['region_id'=>2595, 'regionable_id'=>2064, 'regionable_type'=>'districts']); //Butuh
                DB::table('regions')->insert(['id'=>2596, 'parent'=>2595, 'code'=>'54116', 'type'=>'village', 'name'=>'Village 54116, Districts 5411, City 541, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2596, 'regionable_id'=>20906, 'regionable_type'=>'village']); //Kedungsari
            DB::table('regions')->insert(['id'=>2597, 'parent'=>2594, 'code'=>'5415', 'type'=>'districts', 'name'=>'Districts 5415, City 541, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2597, 'regionable_id'=>2063, 'regionable_type'=>'districts']); //Purworejo
                DB::table('regions')->insert(['id'=>2598, 'parent'=>2597, 'code'=>'54151', 'type'=>'village', 'name'=>'Village 54151, Districts 5415, City 541, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2598, 'regionable_id'=>20905, 'regionable_type'=>'village']); //Purworejo
            DB::table('regions')->insert(['id'=>2599, 'parent'=>2594, 'code'=>'5417', 'type'=>'districts', 'name'=>'Districts 5417, City 541, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2599, 'regionable_id'=>2065, 'regionable_type'=>'districts']); //Banyuurip
            DB::table('regionables')->insert(['region_id'=>2599, 'regionable_id'=>2066, 'regionable_type'=>'districts']); //Ngombol
            DB::table('regionables')->insert(['region_id'=>2599, 'regionable_id'=>2067, 'regionable_type'=>'districts']); //Purwodadi
            DB::table('regionables')->insert(['region_id'=>2599, 'regionable_id'=>2068, 'regionable_type'=>'districts']); //Bagelen
            DB::table('regionables')->insert(['region_id'=>2599, 'regionable_id'=>2069, 'regionable_type'=>'districts']); //Kaligesing
                DB::table('regions')->insert(['id'=>2600, 'parent'=>2599, 'code'=>'54175', 'type'=>'village', 'name'=>'Village 54175, Districts 5417, City 541, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21088, 'regionable_type'=>'village']); //Donorejo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21089, 'regionable_type'=>'village']); //Gunungwangi
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21090, 'regionable_type'=>'village']); //Hardimulyo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21091, 'regionable_type'=>'village']); //Hulosobo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21092, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21093, 'regionable_type'=>'village']); //Jelok
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21094, 'regionable_type'=>'village']); //Kaligono
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21095, 'regionable_type'=>'village']); //Kaliharjo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21096, 'regionable_type'=>'village']); //Kedunggubah
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21097, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21098, 'regionable_type'=>'village']); //Ngaran
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21099, 'regionable_type'=>'village']); //Pandanrejo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21100, 'regionable_type'=>'village']); //Pucungroto
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21101, 'regionable_type'=>'village']); //Purbowono
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21102, 'regionable_type'=>'village']); //Somongari
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21103, 'regionable_type'=>'village']); //Somowono
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21104, 'regionable_type'=>'village']); //Sudorogo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21105, 'regionable_type'=>'village']); //Tawangsari
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21106, 'regionable_type'=>'village']); //Tlogo Rejo
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21107, 'regionable_type'=>'village']); //Tlogobulu
                DB::table('regionables')->insert(['region_id'=>2600, 'regionable_id'=>21108, 'regionable_type'=>'village']); //Tlogoguwo
            DB::table('regions')->insert(['id'=>2601, 'parent'=>2594, 'code'=>'5418', 'type'=>'districts', 'name'=>'Districts 5418, City 541, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2601, 'regionable_id'=>2070, 'regionable_type'=>'districts']); //Loano
            DB::table('regionables')->insert(['region_id'=>2601, 'regionable_id'=>2071, 'regionable_type'=>'districts']); //Bener
                DB::table('regions')->insert(['id'=>2602, 'parent'=>2601, 'code'=>'54183', 'type'=>'village', 'name'=>'Village 54183, Districts 5418, City 541, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21130, 'regionable_type'=>'village']); //Bener
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21131, 'regionable_type'=>'village']); //Benowo
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21132, 'regionable_type'=>'village']); //Bleber
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21133, 'regionable_type'=>'village']); //Cacaban Kidul
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21134, 'regionable_type'=>'village']); //Cacaban Lor
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21135, 'regionable_type'=>'village']); //Guntur
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21136, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21137, 'regionable_type'=>'village']); //Kali Urip
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21138, 'regionable_type'=>'village']); //Kaliboto
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21139, 'regionable_type'=>'village']); //Kalijambe
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21140, 'regionable_type'=>'village']); //Kalitapas
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21141, 'regionable_type'=>'village']); //Kaliwader
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21142, 'regionable_type'=>'village']); //Kamijoro
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21143, 'regionable_type'=>'village']); //Karang Sari
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21144, 'regionable_type'=>'village']); //Kedung Loteng
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21145, 'regionable_type'=>'village']); //Kedung Pucang
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21146, 'regionable_type'=>'village']); //Ketosari
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21147, 'regionable_type'=>'village']); //Legetan
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21148, 'regionable_type'=>'village']); //Limbangan
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21149, 'regionable_type'=>'village']); //Mayung Sari
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21150, 'regionable_type'=>'village']); //Medono
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21151, 'regionable_type'=>'village']); //Ngasinan
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21152, 'regionable_type'=>'village']); //Nglaris
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21153, 'regionable_type'=>'village']); //Pekacangan
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21154, 'regionable_type'=>'village']); //Sendangsari
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21155, 'regionable_type'=>'village']); //Sidomukti
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21156, 'regionable_type'=>'village']); //Sukowuwuh
                DB::table('regionables')->insert(['region_id'=>2602, 'regionable_id'=>21157, 'regionable_type'=>'village']); //Wadas
            DB::table('regions')->insert(['id'=>2603, 'parent'=>2594, 'code'=>'5419', 'type'=>'districts', 'name'=>'Districts 5419, City 541, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2603, 'regionable_id'=>2072, 'regionable_type'=>'districts']); //Gebang
                DB::table('regions')->insert(['id'=>2604, 'parent'=>2603, 'code'=>'54191', 'type'=>'village', 'name'=>'Village 54191, Districts 5419, City 541, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21158, 'regionable_type'=>'village']); //Bendosari
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21159, 'regionable_type'=>'village']); //Bulus
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21160, 'regionable_type'=>'village']); //Gebang
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21161, 'regionable_type'=>'village']); //Gintungan
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21162, 'regionable_type'=>'village']); //Kalitengkek
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21163, 'regionable_type'=>'village']); //Kragilan
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21164, 'regionable_type'=>'village']); //Kroyo
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21165, 'regionable_type'=>'village']); //Lugosobo
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21166, 'regionable_type'=>'village']); //Mlaran
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21167, 'regionable_type'=>'village']); //Ngaglik
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21168, 'regionable_type'=>'village']); //Ngemplak
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21169, 'regionable_type'=>'village']); //Pakem
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21170, 'regionable_type'=>'village']); //Pelutan
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21171, 'regionable_type'=>'village']); //Penungkulan
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21172, 'regionable_type'=>'village']); //Prumben
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21173, 'regionable_type'=>'village']); //Redin
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21174, 'regionable_type'=>'village']); //Rendeng
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21175, 'regionable_type'=>'village']); //Salam
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21176, 'regionable_type'=>'village']); //Seren
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21177, 'regionable_type'=>'village']); //Sidoleren
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21178, 'regionable_type'=>'village']); //Tlogosono
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21179, 'regionable_type'=>'village']); //Winong Kidul
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21180, 'regionable_type'=>'village']); //Winong Lor
                DB::table('regionables')->insert(['region_id'=>2604, 'regionable_id'=>21181, 'regionable_type'=>'village']); //Wonotopo
        DB::table('regions')->insert(['id'=>2605, 'parent'=>2145, 'code'=>'542', 'type'=>'city', 'name'=>'City 542, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2605, 'regionable_id'=>105, 'regionable_type'=>'city']); //Purworejo regencies
            DB::table('regions')->insert(['id'=>2606, 'parent'=>2605, 'code'=>'5421', 'type'=>'districts', 'name'=>'Districts 5421, City 542, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2606, 'regionable_id'=>2073, 'regionable_type'=>'districts']); //Kutoarjo
                DB::table('regions')->insert(['id'=>2607, 'parent'=>2606, 'code'=>'54211', 'type'=>'village', 'name'=>'Village 54211, Districts 5421, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2607, 'regionable_id'=>21183, 'regionable_type'=>'village']); //Bandung
                DB::table('regions')->insert(['id'=>2608, 'parent'=>2606, 'code'=>'54212', 'type'=>'village', 'name'=>'Village 54212, Districts 5421, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21184, 'regionable_type'=>'village']); //Kaligesing
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21185, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21186, 'regionable_type'=>'village']); //Karangwuluh
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21187, 'regionable_type'=>'village']); //Kebondalem
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21188, 'regionable_type'=>'village']); //Kemadu Lor
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21189, 'regionable_type'=>'village']); //Kepuh
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21190, 'regionable_type'=>'village']); //Kiyangkongrejo
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21191, 'regionable_type'=>'village']); //Kuwurejo
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21192, 'regionable_type'=>'village']); //Majir
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21193, 'regionable_type'=>'village']); //Pacor
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21194, 'regionable_type'=>'village']); //Pringgowijayan
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21195, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21196, 'regionable_type'=>'village']); //Semawung Daleman
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21197, 'regionable_type'=>'village']); //Semawung Kembaran
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21198, 'regionable_type'=>'village']); //Sidarum
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21199, 'regionable_type'=>'village']); //Sokoharjo
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21200, 'regionable_type'=>'village']); //Suren
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21201, 'regionable_type'=>'village']); //Tepus Kulon
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21202, 'regionable_type'=>'village']); //Tepus Wetan
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21203, 'regionable_type'=>'village']); //Tunggorono
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21204, 'regionable_type'=>'village']); //Tuntungpahit
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21205, 'regionable_type'=>'village']); //Tursino
                DB::table('regionables')->insert(['region_id'=>2608, 'regionable_id'=>21206, 'regionable_type'=>'village']); //Wirun
                DB::table('regions')->insert(['id'=>2609, 'parent'=>2606, 'code'=>'54214', 'type'=>'village', 'name'=>'Village 54214, Districts 5421, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2609, 'regionable_id'=>21207, 'regionable_type'=>'village']); //Katerban
                DB::table('regions')->insert(['id'=>2610, 'parent'=>2606, 'code'=>'54215', 'type'=>'village', 'name'=>'Village 54215, Districts 5421, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2610, 'regionable_id'=>21208, 'regionable_type'=>'village']); //Bayem
            DB::table('regions')->insert(['id'=>2611, 'parent'=>2605, 'code'=>'5422', 'type'=>'districts', 'name'=>'Districts 5422, City 542, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2611, 'regionable_id'=>2074, 'regionable_type'=>'districts']); //Bayan
                DB::table('regions')->insert(['id'=>2612, 'parent'=>2611, 'code'=>'54222', 'type'=>'village', 'name'=>'Village 54222, Districts 5422, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2612, 'regionable_id'=>21210, 'regionable_type'=>'village']); //Bandungrejo
                DB::table('regions')->insert(['id'=>2613, 'parent'=>2611, 'code'=>'54223', 'type'=>'village', 'name'=>'Village 54223, Districts 5422, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2613, 'regionable_id'=>21211, 'regionable_type'=>'village']); //Besole
                DB::table('regions')->insert(['id'=>2614, 'parent'=>2611, 'code'=>'54224', 'type'=>'village', 'name'=>'Village 54224, Districts 5422, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21212, 'regionable_type'=>'village']); //Bandung Kidul
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21213, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21214, 'regionable_type'=>'village']); //Bayan
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21215, 'regionable_type'=>'village']); //Boto Daleman
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21216, 'regionable_type'=>'village']); //Botorejo
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21217, 'regionable_type'=>'village']); //Bringin
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21218, 'regionable_type'=>'village']); //Dewi
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21219, 'regionable_type'=>'village']); //Dukuhrejo
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21220, 'regionable_type'=>'village']); //Grantung
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21221, 'regionable_type'=>'village']); //Jatingarang
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21222, 'regionable_type'=>'village']); //Jono
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21223, 'regionable_type'=>'village']); //Jrakah
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21224, 'regionable_type'=>'village']); //Kalimiru
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21225, 'regionable_type'=>'village']); //Ketiwijayan
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21226, 'regionable_type'=>'village']); //Krandegan
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21227, 'regionable_type'=>'village']); //Pekutan
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21228, 'regionable_type'=>'village']); //Pogung Juru Tengah
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21229, 'regionable_type'=>'village']); //Pogungkalangan
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21230, 'regionable_type'=>'village']); //Pogungrejo
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21231, 'regionable_type'=>'village']); //Pucang Agung
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21232, 'regionable_type'=>'village']); //Sambeng
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21233, 'regionable_type'=>'village']); //Sucenjuru Tengah
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21234, 'regionable_type'=>'village']); //Tangkisan
                DB::table('regionables')->insert(['region_id'=>2614, 'regionable_id'=>21235, 'regionable_type'=>'village']); //Tanjungrejo
            DB::table('regions')->insert(['id'=>2615, 'parent'=>2605, 'code'=>'5425', 'type'=>'districts', 'name'=>'Districts 5425, City 542, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2615, 'regionable_id'=>2073, 'regionable_type'=>'districts']); //Kutoarjo
                DB::table('regions')->insert(['id'=>2616, 'parent'=>2615, 'code'=>'54251', 'type'=>'village', 'name'=>'Village 54251, Districts 5425, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2616, 'regionable_id'=>21209, 'regionable_type'=>'village']); //Kutoarjo
            DB::table('regions')->insert(['id'=>2617, 'parent'=>2605, 'code'=>'5426', 'type'=>'districts', 'name'=>'Districts 5426, City 542, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2617, 'regionable_id'=>2064, 'regionable_type'=>'districts']); //Butuh
            DB::table('regionables')->insert(['region_id'=>2617, 'regionable_id'=>2072, 'regionable_type'=>'districts']); //Gebang
            DB::table('regionables')->insert(['region_id'=>2617, 'regionable_id'=>2075, 'regionable_type'=>'districts']); //Bruno
            DB::table('regionables')->insert(['region_id'=>2617, 'regionable_id'=>2076, 'regionable_type'=>'districts']); //Kemiri
            DB::table('regionables')->insert(['region_id'=>2617, 'regionable_id'=>2077, 'regionable_type'=>'districts']); //Pituruh
            DB::table('regionables')->insert(['region_id'=>2617, 'regionable_id'=>2078, 'regionable_type'=>'districts']); //Grabag
                DB::table('regions')->insert(['id'=>2618, 'parent'=>2617, 'code'=>'54265', 'type'=>'village', 'name'=>'Village 54265, Districts 5426, City 542, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21343, 'regionable_type'=>'village']); //Aglik
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21344, 'regionable_type'=>'village']); //Bakurejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21345, 'regionable_type'=>'village']); //Banyuyoso
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21346, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21347, 'regionable_type'=>'village']); //Dudukulon
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21348, 'regionable_type'=>'village']); //Duduwetan
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21349, 'regionable_type'=>'village']); //Dukuhdungus
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21350, 'regionable_type'=>'village']); //Grabag
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21351, 'regionable_type'=>'village']); //Harjobinangun
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21352, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21353, 'regionable_type'=>'village']); //Kedung Kamal
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21354, 'regionable_type'=>'village']); //Kertojayan
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21355, 'regionable_type'=>'village']); //Kese
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21356, 'regionable_type'=>'village']); //Ketawangrejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21357, 'regionable_type'=>'village']); //Kumpulrejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21358, 'regionable_type'=>'village']); //Munggangsari
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21359, 'regionable_type'=>'village']); //Nambangan
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21360, 'regionable_type'=>'village']); //Pasaranom
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21361, 'regionable_type'=>'village']); //Patutrejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21362, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21363, 'regionable_type'=>'village']); //Rowodadi
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21364, 'regionable_type'=>'village']); //Roworejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21365, 'regionable_type'=>'village']); //Sangubanyu
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21366, 'regionable_type'=>'village']); //Sumberagung
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21367, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21368, 'regionable_type'=>'village']); //Tlepok Kulon
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21369, 'regionable_type'=>'village']); //Tlepok Wetan
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21370, 'regionable_type'=>'village']); //Trimulyo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21371, 'regionable_type'=>'village']); //Tulusrejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21372, 'regionable_type'=>'village']); //Tunggulrejo
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21373, 'regionable_type'=>'village']); //Ukirsari
                DB::table('regionables')->insert(['region_id'=>2618, 'regionable_id'=>21374, 'regionable_type'=>'village']); //Wonoenggal
        DB::table('regions')->insert(['id'=>2619, 'parent'=>2145, 'code'=>'543', 'type'=>'city', 'name'=>'City 543, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2619, 'regionable_id'=>106, 'regionable_type'=>'city']); //Kebumen regencies
            DB::table('regions')->insert(['id'=>2620, 'parent'=>2619, 'code'=>'5431', 'type'=>'districts', 'name'=>'Districts 5431, City 543, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2620, 'regionable_id'=>2079, 'regionable_type'=>'districts']); //Kebumen
                DB::table('regions')->insert(['id'=>2621, 'parent'=>2620, 'code'=>'54311', 'type'=>'village', 'name'=>'Village 54311, Districts 5431, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2621, 'regionable_id'=>21375, 'regionable_type'=>'village']); //Kebumen
                DB::table('regions')->insert(['id'=>2622, 'parent'=>2620, 'code'=>'54312', 'type'=>'village', 'name'=>'Village 54312, Districts 5431, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2622, 'regionable_id'=>21376, 'regionable_type'=>'village']); //Panjer
                DB::table('regions')->insert(['id'=>2623, 'parent'=>2620, 'code'=>'54313', 'type'=>'village', 'name'=>'Village 54313, Districts 5431, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2623, 'regionable_id'=>21377, 'regionable_type'=>'village']); //Tamanwinangun
                DB::table('regions')->insert(['id'=>2624, 'parent'=>2620, 'code'=>'54314', 'type'=>'village', 'name'=>'Village 54314, Districts 5431, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2624, 'regionable_id'=>21378, 'regionable_type'=>'village']); //Selang
                DB::table('regions')->insert(['id'=>2625, 'parent'=>2620, 'code'=>'54315', 'type'=>'village', 'name'=>'Village 54315, Districts 5431, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2625, 'regionable_id'=>21379, 'regionable_type'=>'village']); //Kembaran
                DB::table('regions')->insert(['id'=>2626, 'parent'=>2620, 'code'=>'54316', 'type'=>'village', 'name'=>'Village 54316, Districts 5431, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2626, 'regionable_id'=>21380, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regions')->insert(['id'=>2627, 'parent'=>2620, 'code'=>'54317', 'type'=>'village', 'name'=>'Village 54317, Districts 5431, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21381, 'regionable_type'=>'village']); //Adikarso
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21382, 'regionable_type'=>'village']); //Argopeni
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21383, 'regionable_type'=>'village']); //Bandung
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21384, 'regionable_type'=>'village']); //Candimulyo
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21385, 'regionable_type'=>'village']); //Candiwulan
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21386, 'regionable_type'=>'village']); //Depokrejo
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21387, 'regionable_type'=>'village']); //Gemeksekti
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21388, 'regionable_type'=>'village']); //Gesikan
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21389, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21390, 'regionable_type'=>'village']); //Jemur
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21391, 'regionable_type'=>'village']); //Kalibagor
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21392, 'regionable_type'=>'village']); //Kalijirek
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21393, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21394, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21395, 'regionable_type'=>'village']); //Kawedusan
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21396, 'regionable_type'=>'village']); //Kutosari
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21397, 'regionable_type'=>'village']); //Mengkowo
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21398, 'regionable_type'=>'village']); //Muktirejo
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21399, 'regionable_type'=>'village']); //Muktisari
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21400, 'regionable_type'=>'village']); //Roworejo
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21401, 'regionable_type'=>'village']); //Sumberadi
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21402, 'regionable_type'=>'village']); //Tanahsari
                DB::table('regionables')->insert(['region_id'=>2627, 'regionable_id'=>21403, 'regionable_type'=>'village']); //Wonosari
            DB::table('regions')->insert(['id'=>2628, 'parent'=>2619, 'code'=>'5435', 'type'=>'districts', 'name'=>'Districts 5435, City 543, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2628, 'regionable_id'=>2080, 'regionable_type'=>'districts']); //Alian/aliyan
            DB::table('regionables')->insert(['region_id'=>2628, 'regionable_id'=>2081, 'regionable_type'=>'districts']); //Karangsambung
            DB::table('regionables')->insert(['region_id'=>2628, 'regionable_id'=>2082, 'regionable_type'=>'districts']); //Sadang
                DB::table('regions')->insert(['id'=>2629, 'parent'=>2628, 'code'=>'54353', 'type'=>'village', 'name'=>'Village 54353, Districts 5435, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21420, 'regionable_type'=>'village']); //Banioro
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21421, 'regionable_type'=>'village']); //Kaligending
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21422, 'regionable_type'=>'village']); //Kalisana
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21423, 'regionable_type'=>'village']); //Karangsambung
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21424, 'regionable_type'=>'village']); //Kedungwaru
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21425, 'regionable_type'=>'village']); //Langse
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21426, 'regionable_type'=>'village']); //Pencil
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21427, 'regionable_type'=>'village']); //Plumbon
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21428, 'regionable_type'=>'village']); //Pujotirto
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21429, 'regionable_type'=>'village']); //Seling
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21430, 'regionable_type'=>'village']); //Tlepok
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21431, 'regionable_type'=>'village']); //Totogan
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21432, 'regionable_type'=>'village']); //Wadasmalang
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21433, 'regionable_type'=>'village']); //Widoro
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21434, 'regionable_type'=>'village']); //Cangkring
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21435, 'regionable_type'=>'village']); //Kedunggong
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21436, 'regionable_type'=>'village']); //Pucangan
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21437, 'regionable_type'=>'village']); //Sadangkulon
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21438, 'regionable_type'=>'village']); //Sadangwetan
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21439, 'regionable_type'=>'village']); //Seboro
                DB::table('regionables')->insert(['region_id'=>2629, 'regionable_id'=>21440, 'regionable_type'=>'village']); //Wonosari
            DB::table('regions')->insert(['id'=>2630, 'parent'=>2619, 'code'=>'5436', 'type'=>'districts', 'name'=>'Districts 5436, City 543, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2630, 'regionable_id'=>2083, 'regionable_type'=>'districts']); //Pejagoan
            DB::table('regionables')->insert(['region_id'=>2630, 'regionable_id'=>2084, 'regionable_type'=>'districts']); //Sruweng
            DB::table('regionables')->insert(['region_id'=>2630, 'regionable_id'=>2085, 'regionable_type'=>'districts']); //Adimulyo
            DB::table('regionables')->insert(['region_id'=>2630, 'regionable_id'=>2086, 'regionable_type'=>'districts']); //Karanganyar
            DB::table('regionables')->insert(['region_id'=>2630, 'regionable_id'=>2087, 'regionable_type'=>'districts']); //Karanggayam
            DB::table('regionables')->insert(['region_id'=>2630, 'regionable_id'=>2088, 'regionable_type'=>'districts']); //Kuwarasan
                DB::table('regions')->insert(['id'=>2631, 'parent'=>2630, 'code'=>'54366', 'type'=>'village', 'name'=>'Village 54366, Districts 5436, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21528, 'regionable_type'=>'village']); //Banjareja
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21529, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21530, 'regionable_type'=>'village']); //Gandusari
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21531, 'regionable_type'=>'village']); //Gumawang
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21532, 'regionable_type'=>'village']); //Gunungmujil
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21533, 'regionable_type'=>'village']); //Harjodowo
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21534, 'regionable_type'=>'village']); //Jatimulya
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21535, 'regionable_type'=>'village']); //Kalipurwo
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21536, 'regionable_type'=>'village']); //Kamulyan
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21537, 'regionable_type'=>'village']); //Kuwarasan
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21538, 'regionable_type'=>'village']); //Kuwaru
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21539, 'regionable_type'=>'village']); //Lemahduwur
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21540, 'regionable_type'=>'village']); //Madureso
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21541, 'regionable_type'=>'village']); //Mangli
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21542, 'regionable_type'=>'village']); //Ori
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21543, 'regionable_type'=>'village']); //Pondokgebangsari
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21544, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21545, 'regionable_type'=>'village']); //Sawangan
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21546, 'regionable_type'=>'village']); //Serut
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21547, 'regionable_type'=>'village']); //Sidomukti
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21548, 'regionable_type'=>'village']); //Tambaksari
                DB::table('regionables')->insert(['region_id'=>2631, 'regionable_id'=>21549, 'regionable_type'=>'village']); //Wonoyoso
            DB::table('regions')->insert(['id'=>2632, 'parent'=>2619, 'code'=>'5438', 'type'=>'districts', 'name'=>'Districts 5438, City 543, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2632, 'regionable_id'=>2089, 'regionable_type'=>'districts']); //Klirong
            DB::table('regionables')->insert(['region_id'=>2632, 'regionable_id'=>2090, 'regionable_type'=>'districts']); //Petanahan
            DB::table('regionables')->insert(['region_id'=>2632, 'regionable_id'=>2091, 'regionable_type'=>'districts']); //Puring
                DB::table('regions')->insert(['id'=>2633, 'parent'=>2632, 'code'=>'54383', 'type'=>'village', 'name'=>'Village 54383, Districts 5438, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21595, 'regionable_type'=>'village']); //Arjowinangun
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21596, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21597, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21598, 'regionable_type'=>'village']); //Kaleng
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21599, 'regionable_type'=>'village']); //Kedalemankulon
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21600, 'regionable_type'=>'village']); //Kedalemanwetan
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21601, 'regionable_type'=>'village']); //Krandegan
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21602, 'regionable_type'=>'village']); //Madurejo
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21603, 'regionable_type'=>'village']); //Pasuruhan (pasuruan)
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21604, 'regionable_type'=>'village']); //Puliharjo
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21605, 'regionable_type'=>'village']); //Purwoharjo
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21606, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21607, 'regionable_type'=>'village']); //Sidobunder
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21608, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21609, 'regionable_type'=>'village']); //Sidoharjo
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21610, 'regionable_type'=>'village']); //Sitiadi
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21611, 'regionable_type'=>'village']); //Srusuhjurutengah
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21612, 'regionable_type'=>'village']); //Surorejan
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21613, 'regionable_type'=>'village']); //Tambakmulyo
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21614, 'regionable_type'=>'village']); //Tukinggedong
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21615, 'regionable_type'=>'village']); //Waluyorejo
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21616, 'regionable_type'=>'village']); //Wetonkulon
                DB::table('regionables')->insert(['region_id'=>2633, 'regionable_id'=>21617, 'regionable_type'=>'village']); //Wetonwetan
            DB::table('regions')->insert(['id'=>2634, 'parent'=>2619, 'code'=>'5439', 'type'=>'districts', 'name'=>'Districts 5439, City 543, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2634, 'regionable_id'=>2092, 'regionable_type'=>'districts']); //Buluspesantren
            DB::table('regionables')->insert(['region_id'=>2634, 'regionable_id'=>2093, 'regionable_type'=>'districts']); //Ambal
            DB::table('regionables')->insert(['region_id'=>2634, 'regionable_id'=>2094, 'regionable_type'=>'districts']); //Kutowinangun
            DB::table('regionables')->insert(['region_id'=>2634, 'regionable_id'=>2095, 'regionable_type'=>'districts']); //Poncowarno
            DB::table('regionables')->insert(['region_id'=>2634, 'regionable_id'=>2096, 'regionable_type'=>'districts']); //Prembun
            DB::table('regionables')->insert(['region_id'=>2634, 'regionable_id'=>2097, 'regionable_type'=>'districts']); //Padureso
            DB::table('regionables')->insert(['region_id'=>2634, 'regionable_id'=>2098, 'regionable_type'=>'districts']); //Bonorowo
            DB::table('regionables')->insert(['region_id'=>2634, 'regionable_id'=>2099, 'regionable_type'=>'districts']); //Mirit
                DB::table('regions')->insert(['id'=>2635, 'parent'=>2634, 'code'=>'54395', 'type'=>'village', 'name'=>'Village 54395, Districts 5439, City 543, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21723, 'regionable_type'=>'village']); //Balorejo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21724, 'regionable_type'=>'village']); //Bonjokkidul
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21725, 'regionable_type'=>'village']); //Bonjoklor
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21726, 'regionable_type'=>'village']); //Bonorowo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21727, 'regionable_type'=>'village']); //Mrentul
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21728, 'regionable_type'=>'village']); //Ngasinan
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21729, 'regionable_type'=>'village']); //Patukrejo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21730, 'regionable_type'=>'village']); //Pujodadi
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21731, 'regionable_type'=>'village']); //Rowosari
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21732, 'regionable_type'=>'village']); //Sirnoboyo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21733, 'regionable_type'=>'village']); //Tlogorejo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21734, 'regionable_type'=>'village']); //Karanggede
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21735, 'regionable_type'=>'village']); //Kertodeso
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21736, 'regionable_type'=>'village']); //Krubungan
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21737, 'regionable_type'=>'village']); //Lembupurwo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21738, 'regionable_type'=>'village']); //Mangunranan
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21739, 'regionable_type'=>'village']); //Mirit
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21740, 'regionable_type'=>'village']); //Miritpetikusan
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21741, 'regionable_type'=>'village']); //Ngabeyan
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21742, 'regionable_type'=>'village']); //Patukgawemulyo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21743, 'regionable_type'=>'village']); //Patukrejomulyo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21744, 'regionable_type'=>'village']); //Pekutan
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21745, 'regionable_type'=>'village']); //Rowo
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21746, 'regionable_type'=>'village']); //Sarwogadung
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21747, 'regionable_type'=>'village']); //Selotumpeng
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21748, 'regionable_type'=>'village']); //Singoyudan
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21749, 'regionable_type'=>'village']); //Sitibentar
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21750, 'regionable_type'=>'village']); //Tlogodepok
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21751, 'regionable_type'=>'village']); //Tlogopragoto
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21752, 'regionable_type'=>'village']); //Wergonayan
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21753, 'regionable_type'=>'village']); //Winong
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21754, 'regionable_type'=>'village']); //Wirogaten
                DB::table('regionables')->insert(['region_id'=>2635, 'regionable_id'=>21755, 'regionable_type'=>'village']); //Wiromartan
        DB::table('regions')->insert(['id'=>2636, 'parent'=>2145, 'code'=>'544', 'type'=>'city', 'name'=>'City 544, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2636, 'regionable_id'=>106, 'regionable_type'=>'city']); //Kebumen regencies
            DB::table('regions')->insert(['id'=>2637, 'parent'=>2636, 'code'=>'5441', 'type'=>'districts', 'name'=>'Districts 5441, City 544, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2637, 'regionable_id'=>2100, 'regionable_type'=>'districts']); //Gombong
                DB::table('regions')->insert(['id'=>2638, 'parent'=>2637, 'code'=>'54411', 'type'=>'village', 'name'=>'Village 54411, Districts 5441, City 544, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2638, 'regionable_id'=>21756, 'regionable_type'=>'village']); //Gombong
                DB::table('regions')->insert(['id'=>2639, 'parent'=>2637, 'code'=>'54412', 'type'=>'village', 'name'=>'Village 54412, Districts 5441, City 544, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2639, 'regionable_id'=>21757, 'regionable_type'=>'village']); //Wonokriyo
                DB::table('regions')->insert(['id'=>2640, 'parent'=>2637, 'code'=>'54413', 'type'=>'village', 'name'=>'Village 54413, Districts 5441, City 544, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2640, 'regionable_id'=>21758, 'regionable_type'=>'village']); //Semondo
                DB::table('regions')->insert(['id'=>2641, 'parent'=>2637, 'code'=>'54414', 'type'=>'village', 'name'=>'Village 54414, Districts 5441, City 544, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2641, 'regionable_id'=>21759, 'regionable_type'=>'village']); //Semanding
                DB::table('regions')->insert(['id'=>2642, 'parent'=>2637, 'code'=>'54416', 'type'=>'village', 'name'=>'Village 54416, Districts 5441, City 544, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21760, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21761, 'regionable_type'=>'village']); //Kalitengah
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21762, 'regionable_type'=>'village']); //Kedungpuji
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21763, 'regionable_type'=>'village']); //Kemukus
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21764, 'regionable_type'=>'village']); //Klopogodo
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21765, 'regionable_type'=>'village']); //Panjangsari
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21766, 'regionable_type'=>'village']); //Patemon
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21767, 'regionable_type'=>'village']); //Sidayu
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21768, 'regionable_type'=>'village']); //Wero
                DB::table('regionables')->insert(['region_id'=>2642, 'regionable_id'=>21769, 'regionable_type'=>'village']); //Wonosigro
            DB::table('regions')->insert(['id'=>2643, 'parent'=>2636, 'code'=>'5442', 'type'=>'districts', 'name'=>'Districts 5442, City 544, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2643, 'regionable_id'=>2101, 'regionable_type'=>'districts']); //Sempor
                DB::table('regions')->insert(['id'=>2644, 'parent'=>2643, 'code'=>'54421', 'type'=>'village', 'name'=>'Village 54421, Districts 5442, City 544, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21770, 'regionable_type'=>'village']); //Bejiruyung
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21771, 'regionable_type'=>'village']); //Bonosari
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21772, 'regionable_type'=>'village']); //Donorojo
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21773, 'regionable_type'=>'village']); //Jatinegoro
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21774, 'regionable_type'=>'village']); //Kalibeji
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21775, 'regionable_type'=>'village']); //Kedungjati
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21776, 'regionable_type'=>'village']); //Kedungwringin
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21777, 'regionable_type'=>'village']); //Kenteng
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21778, 'regionable_type'=>'village']); //Pekuncen
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21779, 'regionable_type'=>'village']); //Sampang
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21780, 'regionable_type'=>'village']); //Selokerto
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21781, 'regionable_type'=>'village']); //Semali
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21782, 'regionable_type'=>'village']); //Sempor
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21783, 'regionable_type'=>'village']); //Sidoharum
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21784, 'regionable_type'=>'village']); //Somagede
                DB::table('regionables')->insert(['region_id'=>2644, 'regionable_id'=>21785, 'regionable_type'=>'village']); //Tunjungseto
            DB::table('regions')->insert(['id'=>2645, 'parent'=>2636, 'code'=>'5447', 'type'=>'districts', 'name'=>'Districts 5447, City 544, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2645, 'regionable_id'=>2102, 'regionable_type'=>'districts']); //Rowokele
            DB::table('regionables')->insert(['region_id'=>2645, 'regionable_id'=>2103, 'regionable_type'=>'districts']); //Ayah
            DB::table('regionables')->insert(['region_id'=>2645, 'regionable_id'=>2104, 'regionable_type'=>'districts']); //Buayan
                DB::table('regions')->insert(['id'=>2646, 'parent'=>2645, 'code'=>'54474', 'type'=>'village', 'name'=>'Village 54474, Districts 5447, City 544, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21815, 'regionable_type'=>'village']); //Adiwarno
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21816, 'regionable_type'=>'village']); //Banyumudal
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21817, 'regionable_type'=>'village']); //Buayan
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21818, 'regionable_type'=>'village']); //Geblug
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21819, 'regionable_type'=>'village']); //Jatiroto
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21820, 'regionable_type'=>'village']); //Jladri
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21821, 'regionable_type'=>'village']); //Jogomulyo
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21822, 'regionable_type'=>'village']); //Karangbolong
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21823, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21824, 'regionable_type'=>'village']); //Mergosono
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21825, 'regionable_type'=>'village']); //Nogoraji
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21826, 'regionable_type'=>'village']); //Pakuran
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21827, 'regionable_type'=>'village']); //Purbowangi
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21828, 'regionable_type'=>'village']); //Rangkah
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21829, 'regionable_type'=>'village']); //Rogodadi
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21830, 'regionable_type'=>'village']); //Rogodono
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21831, 'regionable_type'=>'village']); //Semampir
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21832, 'regionable_type'=>'village']); //Sikayu
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21833, 'regionable_type'=>'village']); //Tugu
                DB::table('regionables')->insert(['region_id'=>2646, 'regionable_id'=>21834, 'regionable_type'=>'village']); //Wonodadi
        DB::table('regions')->insert(['id'=>2647, 'parent'=>2145, 'code'=>'561', 'type'=>'city', 'name'=>'City 561, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2647, 'regionable_id'=>107, 'regionable_type'=>'city']); //Magelang city
        DB::table('regionables')->insert(['region_id'=>2647, 'regionable_id'=>108, 'regionable_type'=>'city']); //Magelang regencies
            DB::table('regions')->insert(['id'=>2648, 'parent'=>2647, 'code'=>'5611', 'type'=>'districts', 'name'=>'Districts 5611, City 561, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2648, 'regionable_id'=>2105, 'regionable_type'=>'districts']); //Magelang Tengah
            DB::table('regionables')->insert(['region_id'=>2648, 'regionable_id'=>2106, 'regionable_type'=>'districts']); //Magelang Utara
            DB::table('regionables')->insert(['region_id'=>2648, 'regionable_id'=>2129, 'regionable_type'=>'districts']); //Magelang Tengah
            DB::table('regionables')->insert(['region_id'=>2648, 'regionable_id'=>2130, 'regionable_type'=>'districts']); //Magelang Utara
                DB::table('regions')->insert(['id'=>2649, 'parent'=>2648, 'code'=>'56113', 'type'=>'village', 'name'=>'Village 56113, Districts 5611, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2649, 'regionable_id'=>21841, 'regionable_type'=>'village']); //Wates
                DB::table('regionables')->insert(['region_id'=>2649, 'regionable_id'=>22230, 'regionable_type'=>'village']); //Wates
                DB::table('regions')->insert(['id'=>2650, 'parent'=>2648, 'code'=>'56114', 'type'=>'village', 'name'=>'Village 56114, Districts 5611, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2650, 'regionable_id'=>21842, 'regionable_type'=>'village']); //Kedungsari
                DB::table('regionables')->insert(['region_id'=>2650, 'regionable_id'=>22231, 'regionable_type'=>'village']); //Kedungsari
                DB::table('regions')->insert(['id'=>2651, 'parent'=>2648, 'code'=>'56115', 'type'=>'village', 'name'=>'Village 56115, Districts 5611, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2651, 'regionable_id'=>21843, 'regionable_type'=>'village']); //Kramat Selatan
                DB::table('regionables')->insert(['region_id'=>2651, 'regionable_id'=>21844, 'regionable_type'=>'village']); //Kramat Utara
                DB::table('regionables')->insert(['region_id'=>2651, 'regionable_id'=>22232, 'regionable_type'=>'village']); //Kramat Selatan
                DB::table('regionables')->insert(['region_id'=>2651, 'regionable_id'=>22233, 'regionable_type'=>'village']); //Kramat Utara
                DB::table('regions')->insert(['id'=>2652, 'parent'=>2648, 'code'=>'56116', 'type'=>'village', 'name'=>'Village 56116, Districts 5611, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2652, 'regionable_id'=>21845, 'regionable_type'=>'village']); //Potrobangsan
                DB::table('regionables')->insert(['region_id'=>2652, 'regionable_id'=>22234, 'regionable_type'=>'village']); //Potrobangsan
            DB::table('regions')->insert(['id'=>2653, 'parent'=>2647, 'code'=>'5612', 'type'=>'districts', 'name'=>'Districts 5612, City 561, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2653, 'regionable_id'=>2105, 'regionable_type'=>'districts']); //Magelang Tengah
            DB::table('regionables')->insert(['region_id'=>2653, 'regionable_id'=>2107, 'regionable_type'=>'districts']); //Magelang Selatan
            DB::table('regionables')->insert(['region_id'=>2653, 'regionable_id'=>2108, 'regionable_type'=>'districts']); //Salaman
            DB::table('regionables')->insert(['region_id'=>2653, 'regionable_id'=>2129, 'regionable_type'=>'districts']); //Magelang Tengah
            DB::table('regionables')->insert(['region_id'=>2653, 'regionable_id'=>2131, 'regionable_type'=>'districts']); //Magelang Selatan
            DB::table('regionables')->insert(['region_id'=>2653, 'regionable_id'=>2132, 'regionable_type'=>'districts']); //Salaman
                DB::table('regions')->insert(['id'=>2654, 'parent'=>2653, 'code'=>'56126', 'type'=>'village', 'name'=>'Village 56126, Districts 5612, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2654, 'regionable_id'=>21851, 'regionable_type'=>'village']); //Magersari
                DB::table('regionables')->insert(['region_id'=>2654, 'regionable_id'=>21852, 'regionable_type'=>'village']); //Sidosari
                DB::table('regionables')->insert(['region_id'=>2654, 'regionable_id'=>22240, 'regionable_type'=>'village']); //Magersari
                DB::table('regionables')->insert(['region_id'=>2654, 'regionable_id'=>22241, 'regionable_type'=>'village']); //Sidosari
            DB::table('regions')->insert(['id'=>2655, 'parent'=>2647, 'code'=>'5615', 'type'=>'districts', 'name'=>'Districts 5615, City 561, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2655, 'regionable_id'=>2109, 'regionable_type'=>'districts']); //Bandongan
            DB::table('regionables')->insert(['region_id'=>2655, 'regionable_id'=>2110, 'regionable_type'=>'districts']); //Windusari
            DB::table('regionables')->insert(['region_id'=>2655, 'regionable_id'=>2111, 'regionable_type'=>'districts']); //Kaliangkrik
            DB::table('regionables')->insert(['region_id'=>2655, 'regionable_id'=>2133, 'regionable_type'=>'districts']); //Bandongan
            DB::table('regionables')->insert(['region_id'=>2655, 'regionable_id'=>2134, 'regionable_type'=>'districts']); //Windusari
            DB::table('regionables')->insert(['region_id'=>2655, 'regionable_id'=>2135, 'regionable_type'=>'districts']); //Kaliangkrik
                DB::table('regions')->insert(['id'=>2656, 'parent'=>2655, 'code'=>'56153', 'type'=>'village', 'name'=>'Village 56153, Districts 5615, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21906, 'regionable_type'=>'village']); //Adipuro
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21907, 'regionable_type'=>'village']); //Balekerto
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21908, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21909, 'regionable_type'=>'village']); //Beseran
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21910, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21911, 'regionable_type'=>'village']); //Girirejo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21912, 'regionable_type'=>'village']); //Giriwarno
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21913, 'regionable_type'=>'village']); //Kaliangkrik
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21914, 'regionable_type'=>'village']); //Kebonlegi
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21915, 'regionable_type'=>'village']); //Ketangi
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21916, 'regionable_type'=>'village']); //Maduretno
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21917, 'regionable_type'=>'village']); //Mangli
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21918, 'regionable_type'=>'village']); //Munggangsari
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21919, 'regionable_type'=>'village']); //Ngargosoko
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21920, 'regionable_type'=>'village']); //Ngawonggo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21921, 'regionable_type'=>'village']); //Ngendrokilo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21922, 'regionable_type'=>'village']); //Pengarengan
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21923, 'regionable_type'=>'village']); //Selomoyo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>21924, 'regionable_type'=>'village']); //Temanggung
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22295, 'regionable_type'=>'village']); //Adipuro
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22296, 'regionable_type'=>'village']); //Balekerto
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22297, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22298, 'regionable_type'=>'village']); //Beseran
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22299, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22300, 'regionable_type'=>'village']); //Girirejo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22301, 'regionable_type'=>'village']); //Giriwarno
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22302, 'regionable_type'=>'village']); //Kaliangkrik
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22303, 'regionable_type'=>'village']); //Kebonlegi
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22304, 'regionable_type'=>'village']); //Ketangi
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22305, 'regionable_type'=>'village']); //Maduretno
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22306, 'regionable_type'=>'village']); //Mangli
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22307, 'regionable_type'=>'village']); //Munggangsari
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22308, 'regionable_type'=>'village']); //Ngargosoko
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22309, 'regionable_type'=>'village']); //Ngawonggo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22310, 'regionable_type'=>'village']); //Ngendrokilo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22311, 'regionable_type'=>'village']); //Pengarengan
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22312, 'regionable_type'=>'village']); //Selomoyo
                DB::table('regionables')->insert(['region_id'=>2656, 'regionable_id'=>22313, 'regionable_type'=>'village']); //Temanggung
            DB::table('regions')->insert(['id'=>2657, 'parent'=>2647, 'code'=>'5616', 'type'=>'districts', 'name'=>'Districts 5616, City 561, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2657, 'regionable_id'=>2108, 'regionable_type'=>'districts']); //Salaman
            DB::table('regionables')->insert(['region_id'=>2657, 'regionable_id'=>2112, 'regionable_type'=>'districts']); //Tempuran
            DB::table('regionables')->insert(['region_id'=>2657, 'regionable_id'=>2113, 'regionable_type'=>'districts']); //Kajoran
            DB::table('regionables')->insert(['region_id'=>2657, 'regionable_id'=>2132, 'regionable_type'=>'districts']); //Salaman
            DB::table('regionables')->insert(['region_id'=>2657, 'regionable_id'=>2136, 'regionable_type'=>'districts']); //Tempuran
            DB::table('regionables')->insert(['region_id'=>2657, 'regionable_id'=>2137, 'regionable_type'=>'districts']); //Kajoran
                DB::table('regions')->insert(['id'=>2658, 'parent'=>2657, 'code'=>'56163', 'type'=>'village', 'name'=>'Village 56163, Districts 5616, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21941, 'regionable_type'=>'village']); //Bambusari
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21942, 'regionable_type'=>'village']); //Bangsri
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21943, 'regionable_type'=>'village']); //Banjaragung
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21944, 'regionable_type'=>'village']); //Banjaretno
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21945, 'regionable_type'=>'village']); //Bumiayu
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21946, 'regionable_type'=>'village']); //Kajoran
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21947, 'regionable_type'=>'village']); //Krinjing
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21948, 'regionable_type'=>'village']); //Krumpakan
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21949, 'regionable_type'=>'village']); //Kwaderan
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21950, 'regionable_type'=>'village']); //Lesanpuro
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21951, 'regionable_type'=>'village']); //Madugondo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21952, 'regionable_type'=>'village']); //Madukoro
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21953, 'regionable_type'=>'village']); //Mangunrejo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21954, 'regionable_type'=>'village']); //Ngargosari
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21955, 'regionable_type'=>'village']); //Ngendrosari
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21956, 'regionable_type'=>'village']); //Pandanretno
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21957, 'regionable_type'=>'village']); //Pucungroto
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21958, 'regionable_type'=>'village']); //Sambak
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21959, 'regionable_type'=>'village']); //Sangen
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21960, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21961, 'regionable_type'=>'village']); //Sidowangi
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21962, 'regionable_type'=>'village']); //Sukomakmur
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21963, 'regionable_type'=>'village']); //Sukomulyo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21964, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21965, 'regionable_type'=>'village']); //Sutopati
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21966, 'regionable_type'=>'village']); //Wadas
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21967, 'regionable_type'=>'village']); //Wonogiri
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>21968, 'regionable_type'=>'village']); //Wuwuharjo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22330, 'regionable_type'=>'village']); //Bambusari
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22331, 'regionable_type'=>'village']); //Bangsri
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22332, 'regionable_type'=>'village']); //Banjaragung
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22333, 'regionable_type'=>'village']); //Banjaretno
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22334, 'regionable_type'=>'village']); //Bumiayu
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22335, 'regionable_type'=>'village']); //Kajoran
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22336, 'regionable_type'=>'village']); //Krinjing
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22337, 'regionable_type'=>'village']); //Krumpakan
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22338, 'regionable_type'=>'village']); //Kwaderan
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22339, 'regionable_type'=>'village']); //Lesanpuro
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22340, 'regionable_type'=>'village']); //Madugondo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22341, 'regionable_type'=>'village']); //Madukoro
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22342, 'regionable_type'=>'village']); //Mangunrejo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22343, 'regionable_type'=>'village']); //Ngargosari
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22344, 'regionable_type'=>'village']); //Ngendrosari
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22345, 'regionable_type'=>'village']); //Pandanretno
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22346, 'regionable_type'=>'village']); //Pucungroto
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22347, 'regionable_type'=>'village']); //Sambak
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22348, 'regionable_type'=>'village']); //Sangen
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22349, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22350, 'regionable_type'=>'village']); //Sidowangi
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22351, 'regionable_type'=>'village']); //Sukomakmur
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22352, 'regionable_type'=>'village']); //Sukomulyo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22353, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22354, 'regionable_type'=>'village']); //Sutopati
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22355, 'regionable_type'=>'village']); //Wadas
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22356, 'regionable_type'=>'village']); //Wonogiri
                DB::table('regionables')->insert(['region_id'=>2658, 'regionable_id'=>22357, 'regionable_type'=>'village']); //Wuwuharjo
            DB::table('regions')->insert(['id'=>2659, 'parent'=>2647, 'code'=>'5617', 'type'=>'districts', 'name'=>'Districts 5617, City 561, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2659, 'regionable_id'=>2114, 'regionable_type'=>'districts']); //Mertoyudan
            DB::table('regionables')->insert(['region_id'=>2659, 'regionable_id'=>2138, 'regionable_type'=>'districts']); //Mertoyudan
                DB::table('regions')->insert(['id'=>2660, 'parent'=>2659, 'code'=>'56172', 'type'=>'village', 'name'=>'Village 56172, Districts 5617, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21970, 'regionable_type'=>'village']); //Banjarnegoro
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21971, 'regionable_type'=>'village']); //Banyurojo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21972, 'regionable_type'=>'village']); //Bondowoso
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21973, 'regionable_type'=>'village']); //Bulurejo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21974, 'regionable_type'=>'village']); //Danurejo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21975, 'regionable_type'=>'village']); //Deyangan
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21976, 'regionable_type'=>'village']); //Donorojo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21977, 'regionable_type'=>'village']); //Jogonegoro
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21978, 'regionable_type'=>'village']); //Kalinegoro
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21979, 'regionable_type'=>'village']); //Mertoyudan
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21980, 'regionable_type'=>'village']); //Pasuruhan
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21981, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>21982, 'regionable_type'=>'village']); //Sumberrejo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22359, 'regionable_type'=>'village']); //Banjarnegoro
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22360, 'regionable_type'=>'village']); //Banyurojo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22361, 'regionable_type'=>'village']); //Bondowoso
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22362, 'regionable_type'=>'village']); //Bulurejo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22363, 'regionable_type'=>'village']); //Danurejo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22364, 'regionable_type'=>'village']); //Deyangan
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22365, 'regionable_type'=>'village']); //Donorojo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22366, 'regionable_type'=>'village']); //Jogonegoro
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22367, 'regionable_type'=>'village']); //Kalinegoro
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22368, 'regionable_type'=>'village']); //Mertoyudan
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22369, 'regionable_type'=>'village']); //Pasuruhan
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22370, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>2660, 'regionable_id'=>22371, 'regionable_type'=>'village']); //Sumberrejo
            DB::table('regions')->insert(['id'=>2661, 'parent'=>2647, 'code'=>'5619', 'type'=>'districts', 'name'=>'Districts 5619, City 561, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2115, 'regionable_type'=>'districts']); //Candimulyo
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2116, 'regionable_type'=>'districts']); //Tegalrejo
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2117, 'regionable_type'=>'districts']); //Pakis
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2118, 'regionable_type'=>'districts']); //Ngablak
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2119, 'regionable_type'=>'districts']); //Secang
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2120, 'regionable_type'=>'districts']); //Grabag
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2139, 'regionable_type'=>'districts']); //Candimulyo
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2140, 'regionable_type'=>'districts']); //Tegalrejo
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2141, 'regionable_type'=>'districts']); //Pakis
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2142, 'regionable_type'=>'districts']); //Ngablak
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2143, 'regionable_type'=>'districts']); //Secang
            DB::table('regionables')->insert(['region_id'=>2661, 'regionable_id'=>2144, 'regionable_type'=>'districts']); //Grabag
                DB::table('regions')->insert(['id'=>2662, 'parent'=>2661, 'code'=>'56196', 'type'=>'village', 'name'=>'Village 56196, Districts 5619, City 561, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22079, 'regionable_type'=>'village']); //Baleagung
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22080, 'regionable_type'=>'village']); //Banaran
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22081, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22082, 'regionable_type'=>'village']); //Banyusari
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22083, 'regionable_type'=>'village']); //Citrosono
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22084, 'regionable_type'=>'village']); //Cokro
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22085, 'regionable_type'=>'village']); //Giriwetan
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22086, 'regionable_type'=>'village']); //Grabag
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22087, 'regionable_type'=>'village']); //Kalikuto
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22088, 'regionable_type'=>'village']); //Kalipucang
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22089, 'regionable_type'=>'village']); //Kartoharjo
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22090, 'regionable_type'=>'village']); //Ketawang
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22091, 'regionable_type'=>'village']); //Klegen
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22092, 'regionable_type'=>'village']); //Kleteran
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22093, 'regionable_type'=>'village']); //Lebak
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22094, 'regionable_type'=>'village']); //Losari
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22095, 'regionable_type'=>'village']); //Ngasinan
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22096, 'regionable_type'=>'village']); //Ngrancah
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22097, 'regionable_type'=>'village']); //Pesidi
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22098, 'regionable_type'=>'village']); //Pucungsari
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22099, 'regionable_type'=>'village']); //Salam
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22100, 'regionable_type'=>'village']); //Sambungrejo
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22101, 'regionable_type'=>'village']); //Seworan
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22102, 'regionable_type'=>'village']); //Sidogede
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22103, 'regionable_type'=>'village']); //Sugihmas
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22104, 'regionable_type'=>'village']); //Sumurarum
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22105, 'regionable_type'=>'village']); //Tirto
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22106, 'regionable_type'=>'village']); //Tlogorejo
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22468, 'regionable_type'=>'village']); //Baleagung
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22469, 'regionable_type'=>'village']); //Banaran
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22470, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22471, 'regionable_type'=>'village']); //Banyusari
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22472, 'regionable_type'=>'village']); //Citrosono
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22473, 'regionable_type'=>'village']); //Cokro
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22474, 'regionable_type'=>'village']); //Giriwetan
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22475, 'regionable_type'=>'village']); //Grabag
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22476, 'regionable_type'=>'village']); //Kalikuto
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22477, 'regionable_type'=>'village']); //Kalipucang
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22478, 'regionable_type'=>'village']); //Kartoharjo
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22479, 'regionable_type'=>'village']); //Ketawang
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22480, 'regionable_type'=>'village']); //Klegen
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22481, 'regionable_type'=>'village']); //Kleteran
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22482, 'regionable_type'=>'village']); //Lebak
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22483, 'regionable_type'=>'village']); //Losari
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22484, 'regionable_type'=>'village']); //Ngasinan
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22485, 'regionable_type'=>'village']); //Ngrancah
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22486, 'regionable_type'=>'village']); //Pesidi
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22487, 'regionable_type'=>'village']); //Pucungsari
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22488, 'regionable_type'=>'village']); //Salam
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22489, 'regionable_type'=>'village']); //Sambungrejo
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22490, 'regionable_type'=>'village']); //Seworan
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22491, 'regionable_type'=>'village']); //Sidogede
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22492, 'regionable_type'=>'village']); //Sugihmas
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22493, 'regionable_type'=>'village']); //Sumurarum
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22494, 'regionable_type'=>'village']); //Tirto
                DB::table('regionables')->insert(['region_id'=>2662, 'regionable_id'=>22495, 'regionable_type'=>'village']); //Tlogorejo
        DB::table('regions')->insert(['id'=>2663, 'parent'=>2145, 'code'=>'562', 'type'=>'city', 'name'=>'City 562, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2663, 'regionable_id'=>109, 'regionable_type'=>'city']); //Temanggung regencies
            DB::table('regions')->insert(['id'=>2664, 'parent'=>2663, 'code'=>'5621', 'type'=>'districts', 'name'=>'Districts 5621, City 562, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2664, 'regionable_id'=>2153, 'regionable_type'=>'districts']); //Temanggung
                DB::table('regions')->insert(['id'=>2665, 'parent'=>2664, 'code'=>'56211', 'type'=>'village', 'name'=>'Village 56211, Districts 5621, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2665, 'regionable_id'=>22613, 'regionable_type'=>'village']); //Banyuurip
                DB::table('regions')->insert(['id'=>2666, 'parent'=>2664, 'code'=>'56212', 'type'=>'village', 'name'=>'Village 56212, Districts 5621, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2666, 'regionable_id'=>22614, 'regionable_type'=>'village']); //Temanggung I
                DB::table('regions')->insert(['id'=>2667, 'parent'=>2664, 'code'=>'56213', 'type'=>'village', 'name'=>'Village 56213, Districts 5621, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2667, 'regionable_id'=>22615, 'regionable_type'=>'village']); //Temanggung Ii
                DB::table('regions')->insert(['id'=>2668, 'parent'=>2664, 'code'=>'56214', 'type'=>'village', 'name'=>'Village 56214, Districts 5621, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2668, 'regionable_id'=>22616, 'regionable_type'=>'village']); //Butuh
                DB::table('regions')->insert(['id'=>2669, 'parent'=>2664, 'code'=>'56215', 'type'=>'village', 'name'=>'Village 56215, Districts 5621, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2669, 'regionable_id'=>22617, 'regionable_type'=>'village']); //Jampirejo
                DB::table('regions')->insert(['id'=>2670, 'parent'=>2664, 'code'=>'56216', 'type'=>'village', 'name'=>'Village 56216, Districts 5621, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2670, 'regionable_id'=>22618, 'regionable_type'=>'village']); //Jampiroso
                DB::table('regions')->insert(['id'=>2671, 'parent'=>2664, 'code'=>'56217', 'type'=>'village', 'name'=>'Village 56217, Districts 5621, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2671, 'regionable_id'=>22619, 'regionable_type'=>'village']); //Kertosari
                DB::table('regions')->insert(['id'=>2672, 'parent'=>2664, 'code'=>'56218', 'type'=>'village', 'name'=>'Village 56218, Districts 5621, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2672, 'regionable_id'=>22620, 'regionable_type'=>'village']); //Kowangan
            DB::table('regions')->insert(['id'=>2673, 'parent'=>2663, 'code'=>'5622', 'type'=>'districts', 'name'=>'Districts 5622, City 562, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2673, 'regionable_id'=>2153, 'regionable_type'=>'districts']); //Temanggung
                DB::table('regions')->insert(['id'=>2674, 'parent'=>2673, 'code'=>'56221', 'type'=>'village', 'name'=>'Village 56221, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2674, 'regionable_id'=>22621, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regions')->insert(['id'=>2675, 'parent'=>2673, 'code'=>'56222', 'type'=>'village', 'name'=>'Village 56222, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2675, 'regionable_id'=>22622, 'regionable_type'=>'village']); //Jurang
                DB::table('regions')->insert(['id'=>2676, 'parent'=>2673, 'code'=>'56223', 'type'=>'village', 'name'=>'Village 56223, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2676, 'regionable_id'=>22623, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regions')->insert(['id'=>2677, 'parent'=>2673, 'code'=>'56224', 'type'=>'village', 'name'=>'Village 56224, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2677, 'regionable_id'=>22624, 'regionable_type'=>'village']); //Manding
                DB::table('regions')->insert(['id'=>2678, 'parent'=>2673, 'code'=>'56225', 'type'=>'village', 'name'=>'Village 56225, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2678, 'regionable_id'=>22625, 'regionable_type'=>'village']); //Mungseng
                DB::table('regions')->insert(['id'=>2679, 'parent'=>2673, 'code'=>'56226', 'type'=>'village', 'name'=>'Village 56226, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2679, 'regionable_id'=>22626, 'regionable_type'=>'village']); //Giyanti
                DB::table('regions')->insert(['id'=>2680, 'parent'=>2673, 'code'=>'56227', 'type'=>'village', 'name'=>'Village 56227, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2680, 'regionable_id'=>22627, 'regionable_type'=>'village']); //Purworejo
                DB::table('regions')->insert(['id'=>2681, 'parent'=>2673, 'code'=>'56228', 'type'=>'village', 'name'=>'Village 56228, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2681, 'regionable_id'=>22628, 'regionable_type'=>'village']); //Mudal
                DB::table('regions')->insert(['id'=>2682, 'parent'=>2673, 'code'=>'56229', 'type'=>'village', 'name'=>'Village 56229, Districts 5622, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22629, 'regionable_type'=>'village']); //Gilingsari
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22630, 'regionable_type'=>'village']); //Guntur
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22631, 'regionable_type'=>'village']); //Joho
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22632, 'regionable_type'=>'village']); //Lungge
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22633, 'regionable_type'=>'village']); //Madureso
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22634, 'regionable_type'=>'village']); //Nampirejo
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22635, 'regionable_type'=>'village']); //Tlogorejo
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22636, 'regionable_type'=>'village']); //Walitelon Selatan
                DB::table('regionables')->insert(['region_id'=>2682, 'regionable_id'=>22637, 'regionable_type'=>'village']); //Walitelon Utara
            DB::table('regions')->insert(['id'=>2683, 'parent'=>2663, 'code'=>'5625', 'type'=>'districts', 'name'=>'Districts 5625, City 562, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2683, 'regionable_id'=>2154, 'regionable_type'=>'districts']); //Kedu
            DB::table('regionables')->insert(['region_id'=>2683, 'regionable_id'=>2155, 'regionable_type'=>'districts']); //Bulu
            DB::table('regionables')->insert(['region_id'=>2683, 'regionable_id'=>2156, 'regionable_type'=>'districts']); //Parakan
            DB::table('regionables')->insert(['region_id'=>2683, 'regionable_id'=>2157, 'regionable_type'=>'districts']); //Ngadirejo
            DB::table('regionables')->insert(['region_id'=>2683, 'regionable_id'=>2158, 'regionable_type'=>'districts']); //Jumo
            DB::table('regionables')->insert(['region_id'=>2683, 'regionable_id'=>2159, 'regionable_type'=>'districts']); //Candiroto
            DB::table('regionables')->insert(['region_id'=>2683, 'regionable_id'=>2160, 'regionable_type'=>'districts']); //Bejen
            DB::table('regionables')->insert(['region_id'=>2683, 'regionable_id'=>2161, 'regionable_type'=>'districts']); //Tretep
                DB::table('regions')->insert(['id'=>2684, 'parent'=>2683, 'code'=>'56259', 'type'=>'village', 'name'=>'Village 56259, Districts 5625, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22748, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22749, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22750, 'regionable_type'=>'village']); //Bonjor
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22751, 'regionable_type'=>'village']); //Campurejo
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22752, 'regionable_type'=>'village']); //Donorojo
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22753, 'regionable_type'=>'village']); //Nglarangan
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22754, 'regionable_type'=>'village']); //Sigedong
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22755, 'regionable_type'=>'village']); //Simpar
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22756, 'regionable_type'=>'village']); //Tempelsari
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22757, 'regionable_type'=>'village']); //Tlogo
                DB::table('regionables')->insert(['region_id'=>2684, 'regionable_id'=>22758, 'regionable_type'=>'village']); //Tretep
            DB::table('regions')->insert(['id'=>2685, 'parent'=>2663, 'code'=>'5626', 'type'=>'districts', 'name'=>'Districts 5626, City 562, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2685, 'regionable_id'=>2162, 'regionable_type'=>'districts']); //Tembarak
            DB::table('regionables')->insert(['region_id'=>2685, 'regionable_id'=>2163, 'regionable_type'=>'districts']); //Selopampang
            DB::table('regionables')->insert(['region_id'=>2685, 'regionable_id'=>2164, 'regionable_type'=>'districts']); //Tlogomulyo
            DB::table('regionables')->insert(['region_id'=>2685, 'regionable_id'=>2165, 'regionable_type'=>'districts']); //Kledung
            DB::table('regionables')->insert(['region_id'=>2685, 'regionable_id'=>2166, 'regionable_type'=>'districts']); //Bansari
            DB::table('regionables')->insert(['region_id'=>2685, 'regionable_id'=>2167, 'regionable_type'=>'districts']); //Wonoboyo
                DB::table('regions')->insert(['id'=>2686, 'parent'=>2685, 'code'=>'56266', 'type'=>'village', 'name'=>'Village 56266, Districts 5626, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22822, 'regionable_type'=>'village']); //Cemoro
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22823, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22824, 'regionable_type'=>'village']); //Pateken
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22825, 'regionable_type'=>'village']); //Pesantren
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22826, 'regionable_type'=>'village']); //Pitrosari
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22827, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22828, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22829, 'regionable_type'=>'village']); //Semen
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22830, 'regionable_type'=>'village']); //Tawangsari
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22831, 'regionable_type'=>'village']); //Tening
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22832, 'regionable_type'=>'village']); //Wates
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22833, 'regionable_type'=>'village']); //Wonoboyo
                DB::table('regionables')->insert(['region_id'=>2686, 'regionable_id'=>22834, 'regionable_type'=>'village']); //Wonocoyo
            DB::table('regions')->insert(['id'=>2687, 'parent'=>2663, 'code'=>'5627', 'type'=>'districts', 'name'=>'Districts 5627, City 562, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2687, 'regionable_id'=>2168, 'regionable_type'=>'districts']); //Kranggan
            DB::table('regionables')->insert(['region_id'=>2687, 'regionable_id'=>2169, 'regionable_type'=>'districts']); //Pringsurat
                DB::table('regions')->insert(['id'=>2688, 'parent'=>2687, 'code'=>'56272', 'type'=>'village', 'name'=>'Village 56272, Districts 5627, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22848, 'regionable_type'=>'village']); //Gowak
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22849, 'regionable_type'=>'village']); //Karangwuni
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22850, 'regionable_type'=>'village']); //Kebumen
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22851, 'regionable_type'=>'village']); //Klepu
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22852, 'regionable_type'=>'village']); //Kupen
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22853, 'regionable_type'=>'village']); //Ngipik
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22854, 'regionable_type'=>'village']); //Nglorog
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22855, 'regionable_type'=>'village']); //Pagergunung
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22856, 'regionable_type'=>'village']); //Pingit
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22857, 'regionable_type'=>'village']); //Pringsurat
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22858, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22859, 'regionable_type'=>'village']); //Soborejo
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22860, 'regionable_type'=>'village']); //Soropadan
                DB::table('regionables')->insert(['region_id'=>2688, 'regionable_id'=>22861, 'regionable_type'=>'village']); //Wonokerso
            DB::table('regions')->insert(['id'=>2689, 'parent'=>2663, 'code'=>'5628', 'type'=>'districts', 'name'=>'Districts 5628, City 562, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2689, 'regionable_id'=>2170, 'regionable_type'=>'districts']); //Kandangan
            DB::table('regionables')->insert(['region_id'=>2689, 'regionable_id'=>2171, 'regionable_type'=>'districts']); //Kaloran
            DB::table('regionables')->insert(['region_id'=>2689, 'regionable_id'=>2172, 'regionable_type'=>'districts']); //Gemawang
                DB::table('regions')->insert(['id'=>2690, 'parent'=>2689, 'code'=>'56283', 'type'=>'village', 'name'=>'Village 56283, Districts 5628, City 562, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22892, 'regionable_type'=>'village']); //Banaran
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22893, 'regionable_type'=>'village']); //Gemawang
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22894, 'regionable_type'=>'village']); //Jambon
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22895, 'regionable_type'=>'village']); //Kalibanger
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22896, 'regionable_type'=>'village']); //Karangseneng
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22897, 'regionable_type'=>'village']); //Kemiriombo
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22898, 'regionable_type'=>'village']); //Krempong
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22899, 'regionable_type'=>'village']); //Muncar
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22900, 'regionable_type'=>'village']); //Ngadisepi
                DB::table('regionables')->insert(['region_id'=>2690, 'regionable_id'=>22901, 'regionable_type'=>'village']); //Sucen
        DB::table('regions')->insert(['id'=>2691, 'parent'=>2145, 'code'=>'563', 'type'=>'city', 'name'=>'City 563, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2691, 'regionable_id'=>110, 'regionable_type'=>'city']); //Wonosobo regencies
            DB::table('regions')->insert(['id'=>2692, 'parent'=>2691, 'code'=>'5631', 'type'=>'districts', 'name'=>'Districts 5631, City 563, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2692, 'regionable_id'=>2173, 'regionable_type'=>'districts']); //Wonosobo
            DB::table('regionables')->insert(['region_id'=>2692, 'regionable_id'=>2174, 'regionable_type'=>'districts']); //Kejajar
                DB::table('regions')->insert(['id'=>2693, 'parent'=>2692, 'code'=>'56314', 'type'=>'village', 'name'=>'Village 56314, Districts 5631, City 563, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2693, 'regionable_id'=>22908, 'regionable_type'=>'village']); //Jaraksari
                DB::table('regionables')->insert(['region_id'=>2693, 'regionable_id'=>22909, 'regionable_type'=>'village']); //Pagerkukuh
                DB::table('regionables')->insert(['region_id'=>2693, 'regionable_id'=>22922, 'regionable_type'=>'village']); //Campursari
            DB::table('regions')->insert(['id'=>2694, 'parent'=>2691, 'code'=>'5635', 'type'=>'districts', 'name'=>'Districts 5635, City 563, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2694, 'regionable_id'=>2174, 'regionable_type'=>'districts']); //Kejajar
            DB::table('regionables')->insert(['region_id'=>2694, 'regionable_id'=>2175, 'regionable_type'=>'districts']); //Mojotengah
            DB::table('regionables')->insert(['region_id'=>2694, 'regionable_id'=>2176, 'regionable_type'=>'districts']); //Watumalang
            DB::table('regionables')->insert(['region_id'=>2694, 'regionable_id'=>2177, 'regionable_type'=>'districts']); //Garung
                DB::table('regions')->insert(['id'=>2695, 'parent'=>2694, 'code'=>'56353', 'type'=>'village', 'name'=>'Village 56353, Districts 5635, City 563, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22973, 'regionable_type'=>'village']); //Garung
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22974, 'regionable_type'=>'village']); //Gemblengan
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22975, 'regionable_type'=>'village']); //Jengkol
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22976, 'regionable_type'=>'village']); //Kayugiyang
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22977, 'regionable_type'=>'village']); //Kuripan
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22978, 'regionable_type'=>'village']); //Larangan Lor
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22979, 'regionable_type'=>'village']); //Lengkong
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22980, 'regionable_type'=>'village']); //Maron
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22981, 'regionable_type'=>'village']); //Menjer
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22982, 'regionable_type'=>'village']); //Mlandi
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22983, 'regionable_type'=>'village']); //Sendangsari
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22984, 'regionable_type'=>'village']); //Sitiharjo
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22985, 'regionable_type'=>'village']); //Siwuran
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22986, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regionables')->insert(['region_id'=>2695, 'regionable_id'=>22987, 'regionable_type'=>'village']); //Tlogo
            DB::table('regions')->insert(['id'=>2696, 'parent'=>2691, 'code'=>'5636', 'type'=>'districts', 'name'=>'Districts 5636, City 563, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2696, 'regionable_id'=>2178, 'regionable_type'=>'districts']); //Selomerto
            DB::table('regionables')->insert(['region_id'=>2696, 'regionable_id'=>2179, 'regionable_type'=>'districts']); //Leksono
            DB::table('regionables')->insert(['region_id'=>2696, 'regionable_id'=>2180, 'regionable_type'=>'districts']); //Sukoharjo
            DB::table('regionables')->insert(['region_id'=>2696, 'regionable_id'=>2181, 'regionable_type'=>'districts']); //Kaliwiro
            DB::table('regionables')->insert(['region_id'=>2696, 'regionable_id'=>2182, 'regionable_type'=>'districts']); //Wadaslintang
                DB::table('regions')->insert(['id'=>2697, 'parent'=>2696, 'code'=>'56365', 'type'=>'village', 'name'=>'Village 56365, Districts 5636, City 563, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23064, 'regionable_type'=>'village']); //Besuki
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23065, 'regionable_type'=>'village']); //Erorejo
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23066, 'regionable_type'=>'village']); //Gumelar
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23067, 'regionable_type'=>'village']); //Kalidadap
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23068, 'regionable_type'=>'village']); //Kaligowong
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23069, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23070, 'regionable_type'=>'village']); //Kumejing
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23071, 'regionable_type'=>'village']); //Lancar
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23072, 'regionable_type'=>'village']); //Ngalian
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23073, 'regionable_type'=>'village']); //Panerusan
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23074, 'regionable_type'=>'village']); //Plunjaran
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23075, 'regionable_type'=>'village']); //Somogede
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23076, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23077, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23078, 'regionable_type'=>'village']); //Tirip
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23079, 'regionable_type'=>'village']); //Trimulyo
                DB::table('regionables')->insert(['region_id'=>2697, 'regionable_id'=>23080, 'regionable_type'=>'village']); //Wadas Lintang
            DB::table('regions')->insert(['id'=>2698, 'parent'=>2691, 'code'=>'5637', 'type'=>'districts', 'name'=>'Districts 5637, City 563, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2698, 'regionable_id'=>2183, 'regionable_type'=>'districts']); //Kertek
            DB::table('regionables')->insert(['region_id'=>2698, 'regionable_id'=>2184, 'regionable_type'=>'districts']); //Kalikajar
            DB::table('regionables')->insert(['region_id'=>2698, 'regionable_id'=>2185, 'regionable_type'=>'districts']); //Sapuran
            DB::table('regionables')->insert(['region_id'=>2698, 'regionable_id'=>2186, 'regionable_type'=>'districts']); //Kalibawang
            DB::table('regionables')->insert(['region_id'=>2698, 'regionable_id'=>2187, 'regionable_type'=>'districts']); //Kepil
                DB::table('regions')->insert(['id'=>2699, 'parent'=>2698, 'code'=>'56374', 'type'=>'village', 'name'=>'Village 56374, Districts 5637, City 563, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23146, 'regionable_type'=>'village']); //Bener
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23147, 'regionable_type'=>'village']); //Beran
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23148, 'regionable_type'=>'village']); //Burat
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23149, 'regionable_type'=>'village']); //Gadingrejo
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23150, 'regionable_type'=>'village']); //Gadingsukuh
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23151, 'regionable_type'=>'village']); //Gondowulan
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23152, 'regionable_type'=>'village']); //Jangkrikan
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23153, 'regionable_type'=>'village']); //Kagungan
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23154, 'regionable_type'=>'village']); //Kalipuru
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23155, 'regionable_type'=>'village']); //Kaliwuluh
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23156, 'regionable_type'=>'village']); //Kapulogo
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23157, 'regionable_type'=>'village']); //Kepil
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23158, 'regionable_type'=>'village']); //Ngalian
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23159, 'regionable_type'=>'village']); //Pulosaren
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23160, 'regionable_type'=>'village']); //Randusari
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23161, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23162, 'regionable_type'=>'village']); //Ropoh
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23163, 'regionable_type'=>'village']); //Tanjunganom
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23164, 'regionable_type'=>'village']); //Tegalgot
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23165, 'regionable_type'=>'village']); //Teges Wetan
                DB::table('regionables')->insert(['region_id'=>2699, 'regionable_id'=>23166, 'regionable_type'=>'village']); //Warangan
        DB::table('regions')->insert(['id'=>2700, 'parent'=>2145, 'code'=>'564', 'type'=>'city', 'name'=>'City 564, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2700, 'regionable_id'=>107, 'regionable_type'=>'city']); //Magelang city
        DB::table('regionables')->insert(['region_id'=>2700, 'regionable_id'=>108, 'regionable_type'=>'city']); //Magelang regencies
            DB::table('regions')->insert(['id'=>2701, 'parent'=>2700, 'code'=>'5641', 'type'=>'districts', 'name'=>'Districts 5641, City 564, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2111, 'regionable_type'=>'districts']); //Kaliangkrik
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2113, 'regionable_type'=>'districts']); //Kajoran
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2121, 'regionable_type'=>'districts']); //Muntilan
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2122, 'regionable_type'=>'districts']); //Sawangan
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2123, 'regionable_type'=>'districts']); //Borobudur
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2135, 'regionable_type'=>'districts']); //Kaliangkrik
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2137, 'regionable_type'=>'districts']); //Kajoran
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2145, 'regionable_type'=>'districts']); //Muntilan
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2146, 'regionable_type'=>'districts']); //Sawangan
            DB::table('regionables')->insert(['region_id'=>2701, 'regionable_id'=>2147, 'regionable_type'=>'districts']); //Borobudur
                DB::table('regions')->insert(['id'=>2702, 'parent'=>2701, 'code'=>'56413', 'type'=>'village', 'name'=>'Village 56413, Districts 5641, City 564, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2702, 'regionable_id'=>22109, 'regionable_type'=>'village']); //Tamanagung
                DB::table('regionables')->insert(['region_id'=>2702, 'regionable_id'=>22136, 'regionable_type'=>'village']); //Tegalarum
                DB::table('regionables')->insert(['region_id'=>2702, 'regionable_id'=>22498, 'regionable_type'=>'village']); //Tamanagung
                DB::table('regionables')->insert(['region_id'=>2702, 'regionable_id'=>22525, 'regionable_type'=>'village']); //Tegalarum
            DB::table('regions')->insert(['id'=>2703, 'parent'=>2700, 'code'=>'5648', 'type'=>'districts', 'name'=>'Districts 5648, City 564, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2122, 'regionable_type'=>'districts']); //Sawangan
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2124, 'regionable_type'=>'districts']); //Dukun
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2125, 'regionable_type'=>'districts']); //Srumbung
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2126, 'regionable_type'=>'districts']); //Salam
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2127, 'regionable_type'=>'districts']); //Ngluwar
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2146, 'regionable_type'=>'districts']); //Sawangan
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2148, 'regionable_type'=>'districts']); //Dukun
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2149, 'regionable_type'=>'districts']); //Srumbung
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2150, 'regionable_type'=>'districts']); //Salam
            DB::table('regionables')->insert(['region_id'=>2703, 'regionable_id'=>2151, 'regionable_type'=>'districts']); //Ngluwar
                DB::table('regions')->insert(['id'=>2704, 'parent'=>2703, 'code'=>'56485', 'type'=>'village', 'name'=>'Village 56485, Districts 5648, City 564, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22200, 'regionable_type'=>'village']); //Bligo
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22201, 'regionable_type'=>'village']); //Blongkeng
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22202, 'regionable_type'=>'village']); //Jamuskauman
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22203, 'regionable_type'=>'village']); //Karangtalun
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22204, 'regionable_type'=>'village']); //Ngluwar
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22205, 'regionable_type'=>'village']); //Pakunden
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22206, 'regionable_type'=>'village']); //Plosogede
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22207, 'regionable_type'=>'village']); //Somokaton
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22589, 'regionable_type'=>'village']); //Bligo
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22590, 'regionable_type'=>'village']); //Blongkeng
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22591, 'regionable_type'=>'village']); //Jamuskauman
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22592, 'regionable_type'=>'village']); //Karangtalun
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22593, 'regionable_type'=>'village']); //Ngluwar
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22594, 'regionable_type'=>'village']); //Pakunden
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22595, 'regionable_type'=>'village']); //Plosogede
                DB::table('regionables')->insert(['region_id'=>2704, 'regionable_id'=>22596, 'regionable_type'=>'village']); //Somokaton
        DB::table('regions')->insert(['id'=>2705, 'parent'=>2145, 'code'=>'565', 'type'=>'city', 'name'=>'City 565, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2705, 'regionable_id'=>107, 'regionable_type'=>'city']); //Magelang city
        DB::table('regionables')->insert(['region_id'=>2705, 'regionable_id'=>108, 'regionable_type'=>'city']); //Magelang regencies
            DB::table('regions')->insert(['id'=>2706, 'parent'=>2705, 'code'=>'5651', 'type'=>'districts', 'name'=>'Districts 5651, City 565, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2706, 'regionable_id'=>2128, 'regionable_type'=>'districts']); //Mungkid
            DB::table('regionables')->insert(['region_id'=>2706, 'regionable_id'=>2152, 'regionable_type'=>'districts']); //Mungkid
                DB::table('regions')->insert(['id'=>2707, 'parent'=>2706, 'code'=>'56511', 'type'=>'village', 'name'=>'Village 56511, Districts 5651, City 565, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2707, 'regionable_id'=>22208, 'regionable_type'=>'village']); //Sawitan
                DB::table('regionables')->insert(['region_id'=>2707, 'regionable_id'=>22597, 'regionable_type'=>'village']); //Sawitan
                DB::table('regions')->insert(['id'=>2708, 'parent'=>2706, 'code'=>'56512', 'type'=>'village', 'name'=>'Village 56512, Districts 5651, City 565, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22209, 'regionable_type'=>'village']); //Ambartawang
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22210, 'regionable_type'=>'village']); //Blondo
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22211, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22212, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22213, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22214, 'regionable_type'=>'village']); //Mendut
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22215, 'regionable_type'=>'village']); //Mungkid
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22216, 'regionable_type'=>'village']); //Ngrajek
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22217, 'regionable_type'=>'village']); //Pabelan
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22218, 'regionable_type'=>'village']); //Pagersari
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22219, 'regionable_type'=>'village']); //Paremono
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22220, 'regionable_type'=>'village']); //Progowati
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22221, 'regionable_type'=>'village']); //Rambeanak
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22222, 'regionable_type'=>'village']); //Senden
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22223, 'regionable_type'=>'village']); //Treko
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22598, 'regionable_type'=>'village']); //Ambartawang
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22599, 'regionable_type'=>'village']); //Blondo
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22600, 'regionable_type'=>'village']); //Bojong
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22601, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22602, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22603, 'regionable_type'=>'village']); //Mendut
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22604, 'regionable_type'=>'village']); //Mungkid
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22605, 'regionable_type'=>'village']); //Ngrajek
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22606, 'regionable_type'=>'village']); //Pabelan
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22607, 'regionable_type'=>'village']); //Pagersari
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22608, 'regionable_type'=>'village']); //Paremono
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22609, 'regionable_type'=>'village']); //Progowati
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22610, 'regionable_type'=>'village']); //Rambeanak
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22611, 'regionable_type'=>'village']); //Senden
                DB::table('regionables')->insert(['region_id'=>2708, 'regionable_id'=>22612, 'regionable_type'=>'village']); //Treko
            DB::table('regions')->insert(['id'=>2709, 'parent'=>2705, 'code'=>'5655', 'type'=>'districts', 'name'=>'Districts 5655, City 565, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2709, 'regionable_id'=>2123, 'regionable_type'=>'districts']); //Borobudur
            DB::table('regionables')->insert(['region_id'=>2709, 'regionable_id'=>2147, 'regionable_type'=>'districts']); //Borobudur
                DB::table('regions')->insert(['id'=>2710, 'parent'=>2709, 'code'=>'56553', 'type'=>'village', 'name'=>'Village 56553, Districts 5655, City 565, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22137, 'regionable_type'=>'village']); //Bigaran
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22138, 'regionable_type'=>'village']); //Borobudur
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22139, 'regionable_type'=>'village']); //Bumiharjo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22140, 'regionable_type'=>'village']); //Candirejo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22141, 'regionable_type'=>'village']); //Giripurno
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22142, 'regionable_type'=>'village']); //Giritengah
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22143, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22144, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22145, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22146, 'regionable_type'=>'village']); //Kembanglimus
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22147, 'regionable_type'=>'village']); //Kenalan
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22148, 'regionable_type'=>'village']); //Majaksingi
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22149, 'regionable_type'=>'village']); //Ngadiharjo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22150, 'regionable_type'=>'village']); //Ngargogondo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22151, 'regionable_type'=>'village']); //Sambeng
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22152, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22153, 'regionable_type'=>'village']); //Tuksongo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22154, 'regionable_type'=>'village']); //Wanurejo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22155, 'regionable_type'=>'village']); //Wringinputih
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22526, 'regionable_type'=>'village']); //Bigaran
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22527, 'regionable_type'=>'village']); //Borobudur
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22528, 'regionable_type'=>'village']); //Bumiharjo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22529, 'regionable_type'=>'village']); //Candirejo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22530, 'regionable_type'=>'village']); //Giripurno
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22531, 'regionable_type'=>'village']); //Giritengah
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22532, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22533, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22534, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22535, 'regionable_type'=>'village']); //Kembanglimus
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22536, 'regionable_type'=>'village']); //Kenalan
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22537, 'regionable_type'=>'village']); //Majaksingi
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22538, 'regionable_type'=>'village']); //Ngadiharjo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22539, 'regionable_type'=>'village']); //Ngargogondo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22540, 'regionable_type'=>'village']); //Sambeng
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22541, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22542, 'regionable_type'=>'village']); //Tuksongo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22543, 'regionable_type'=>'village']); //Wanurejo
                DB::table('regionables')->insert(['region_id'=>2710, 'regionable_id'=>22544, 'regionable_type'=>'village']); //Wringinputih
        DB::table('regions')->insert(['id'=>2711, 'parent'=>2145, 'code'=>'571', 'type'=>'city', 'name'=>'City 571, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2711, 'regionable_id'=>111, 'regionable_type'=>'city']); //Surakarta (solo) city
        DB::table('regionables')->insert(['region_id'=>2711, 'regionable_id'=>112, 'regionable_type'=>'city']); //Sukoharjo regencies
        DB::table('regionables')->insert(['region_id'=>2711, 'regionable_id'=>113, 'regionable_type'=>'city']); //Karanganyar regencies
            DB::table('regions')->insert(['id'=>2712, 'parent'=>2711, 'code'=>'5717', 'type'=>'districts', 'name'=>'Districts 5717, City 571, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2712, 'regionable_id'=>2205, 'regionable_type'=>'districts']); //Colomadu
                DB::table('regions')->insert(['id'=>2713, 'parent'=>2712, 'code'=>'57171', 'type'=>'village', 'name'=>'Village 57171, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2713, 'regionable_id'=>23385, 'regionable_type'=>'village']); //Baturan
                DB::table('regions')->insert(['id'=>2714, 'parent'=>2712, 'code'=>'57172', 'type'=>'village', 'name'=>'Village 57172, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2714, 'regionable_id'=>23386, 'regionable_type'=>'village']); //Klodran
                DB::table('regions')->insert(['id'=>2715, 'parent'=>2712, 'code'=>'57173', 'type'=>'village', 'name'=>'Village 57173, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2715, 'regionable_id'=>23387, 'regionable_type'=>'village']); //Gedongan
                DB::table('regionables')->insert(['region_id'=>2715, 'regionable_id'=>23388, 'regionable_type'=>'village']); //Tohudan
                DB::table('regions')->insert(['id'=>2716, 'parent'=>2712, 'code'=>'57174', 'type'=>'village', 'name'=>'Village 57174, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2716, 'regionable_id'=>23389, 'regionable_type'=>'village']); //Blulukan
                DB::table('regions')->insert(['id'=>2717, 'parent'=>2712, 'code'=>'57175', 'type'=>'village', 'name'=>'Village 57175, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2717, 'regionable_id'=>23390, 'regionable_type'=>'village']); //Gawanan
                DB::table('regions')->insert(['id'=>2718, 'parent'=>2712, 'code'=>'57176', 'type'=>'village', 'name'=>'Village 57176, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2718, 'regionable_id'=>23391, 'regionable_type'=>'village']); //Gajahan
                DB::table('regionables')->insert(['region_id'=>2718, 'regionable_id'=>23392, 'regionable_type'=>'village']); //Paulan
                DB::table('regions')->insert(['id'=>2719, 'parent'=>2712, 'code'=>'57177', 'type'=>'village', 'name'=>'Village 57177, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2719, 'regionable_id'=>23393, 'regionable_type'=>'village']); //Malangjiwan
                DB::table('regions')->insert(['id'=>2720, 'parent'=>2712, 'code'=>'57178', 'type'=>'village', 'name'=>'Village 57178, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2720, 'regionable_id'=>23394, 'regionable_type'=>'village']); //Bolon
                DB::table('regions')->insert(['id'=>2721, 'parent'=>2712, 'code'=>'57179', 'type'=>'village', 'name'=>'Village 57179, Districts 5717, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2721, 'regionable_id'=>23395, 'regionable_type'=>'village']); //Ngasem
            DB::table('regions')->insert(['id'=>2722, 'parent'=>2711, 'code'=>'5718', 'type'=>'districts', 'name'=>'Districts 5718, City 571, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2722, 'regionable_id'=>2206, 'regionable_type'=>'districts']); //Gondangrejo
                DB::table('regions')->insert(['id'=>2723, 'parent'=>2722, 'code'=>'57181', 'type'=>'village', 'name'=>'Village 57181, Districts 5718, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2723, 'regionable_id'=>23396, 'regionable_type'=>'village']); //Plesungan
                DB::table('regions')->insert(['id'=>2724, 'parent'=>2722, 'code'=>'57188', 'type'=>'village', 'name'=>'Village 57188, Districts 5718, City 571, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23397, 'regionable_type'=>'village']); //Bulurejo
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23398, 'regionable_type'=>'village']); //Dayu
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23399, 'regionable_type'=>'village']); //Jatikuwung
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23400, 'regionable_type'=>'village']); //Jeruksawit
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23401, 'regionable_type'=>'village']); //Karangturi
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23402, 'regionable_type'=>'village']); //Kragan
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23403, 'regionable_type'=>'village']); //Krendowahono
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23404, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23405, 'regionable_type'=>'village']); //Selokaton
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23406, 'regionable_type'=>'village']); //Tuban
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23407, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regionables')->insert(['region_id'=>2724, 'regionable_id'=>23408, 'regionable_type'=>'village']); //Wonosari
        DB::table('regions')->insert(['id'=>2725, 'parent'=>2145, 'code'=>'572', 'type'=>'city', 'name'=>'City 572, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2725, 'regionable_id'=>114, 'regionable_type'=>'city']); //Sragen regencies
            DB::table('regions')->insert(['id'=>2726, 'parent'=>2725, 'code'=>'5721', 'type'=>'districts', 'name'=>'Districts 5721, City 572, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2726, 'regionable_id'=>2222, 'regionable_type'=>'districts']); //Sragen
                DB::table('regions')->insert(['id'=>2727, 'parent'=>2726, 'code'=>'57211', 'type'=>'village', 'name'=>'Village 57211, Districts 5721, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2727, 'regionable_id'=>23562, 'regionable_type'=>'village']); //Kedungupit
                DB::table('regionables')->insert(['region_id'=>2727, 'regionable_id'=>23563, 'regionable_type'=>'village']); //Sragen Tengah
                DB::table('regionables')->insert(['region_id'=>2727, 'regionable_id'=>23564, 'regionable_type'=>'village']); //Tangkil
                DB::table('regions')->insert(['id'=>2728, 'parent'=>2726, 'code'=>'57212', 'type'=>'village', 'name'=>'Village 57212, Districts 5721, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2728, 'regionable_id'=>23565, 'regionable_type'=>'village']); //Sragen Kulon
                DB::table('regions')->insert(['id'=>2729, 'parent'=>2726, 'code'=>'57213', 'type'=>'village', 'name'=>'Village 57213, Districts 5721, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2729, 'regionable_id'=>23566, 'regionable_type'=>'village']); //Sine
                DB::table('regions')->insert(['id'=>2730, 'parent'=>2726, 'code'=>'57214', 'type'=>'village', 'name'=>'Village 57214, Districts 5721, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2730, 'regionable_id'=>23567, 'regionable_type'=>'village']); //Sragen Wetan
                DB::table('regions')->insert(['id'=>2731, 'parent'=>2726, 'code'=>'57215', 'type'=>'village', 'name'=>'Village 57215, Districts 5721, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2731, 'regionable_id'=>23568, 'regionable_type'=>'village']); //Nglorog
                DB::table('regions')->insert(['id'=>2732, 'parent'=>2726, 'code'=>'57216', 'type'=>'village', 'name'=>'Village 57216, Districts 5721, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2732, 'regionable_id'=>23569, 'regionable_type'=>'village']); //Karang Tengah
            DB::table('regions')->insert(['id'=>2733, 'parent'=>2725, 'code'=>'5722', 'type'=>'districts', 'name'=>'Districts 5722, City 572, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2733, 'regionable_id'=>2223, 'regionable_type'=>'districts']); //Karangmalang
                DB::table('regions')->insert(['id'=>2734, 'parent'=>2733, 'code'=>'57221', 'type'=>'village', 'name'=>'Village 57221, Districts 5722, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2734, 'regionable_id'=>23570, 'regionable_type'=>'village']); //Kroyo
                DB::table('regions')->insert(['id'=>2735, 'parent'=>2733, 'code'=>'57222', 'type'=>'village', 'name'=>'Village 57222, Districts 5722, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23571, 'regionable_type'=>'village']); //Guworejo
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23572, 'regionable_type'=>'village']); //Jurangjero
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23573, 'regionable_type'=>'village']); //Kedung Waduk
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23574, 'regionable_type'=>'village']); //Mojorejo
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23575, 'regionable_type'=>'village']); //Pelem Gadung
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23576, 'regionable_type'=>'village']); //Plosokerep
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23577, 'regionable_type'=>'village']); //Plumbungan
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23578, 'regionable_type'=>'village']); //Puro
                DB::table('regionables')->insert(['region_id'=>2735, 'regionable_id'=>23579, 'regionable_type'=>'village']); //Saradan
            DB::table('regions')->insert(['id'=>2736, 'parent'=>2725, 'code'=>'5725', 'type'=>'districts', 'name'=>'Districts 5725, City 572, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2736, 'regionable_id'=>2224, 'regionable_type'=>'districts']); //Ngrampal
            DB::table('regionables')->insert(['region_id'=>2736, 'regionable_id'=>2225, 'regionable_type'=>'districts']); //Sambung Macan
            DB::table('regionables')->insert(['region_id'=>2736, 'regionable_id'=>2226, 'regionable_type'=>'districts']); //Gondang
            DB::table('regionables')->insert(['region_id'=>2736, 'regionable_id'=>2227, 'regionable_type'=>'districts']); //Jenar
                DB::table('regions')->insert(['id'=>2737, 'parent'=>2736, 'code'=>'57256', 'type'=>'village', 'name'=>'Village 57256, Districts 5725, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2737, 'regionable_id'=>23606, 'regionable_type'=>'village']); //Banyuurip
                DB::table('regionables')->insert(['region_id'=>2737, 'regionable_id'=>23607, 'regionable_type'=>'village']); //Dawung
                DB::table('regionables')->insert(['region_id'=>2737, 'regionable_id'=>23608, 'regionable_type'=>'village']); //Japoh
                DB::table('regionables')->insert(['region_id'=>2737, 'regionable_id'=>23609, 'regionable_type'=>'village']); //Jenar
                DB::table('regionables')->insert(['region_id'=>2737, 'regionable_id'=>23610, 'regionable_type'=>'village']); //Kandang Sapi
                DB::table('regionables')->insert(['region_id'=>2737, 'regionable_id'=>23611, 'regionable_type'=>'village']); //Mlale
                DB::table('regionables')->insert(['region_id'=>2737, 'regionable_id'=>23612, 'regionable_type'=>'village']); //Ngepringan
            DB::table('regions')->insert(['id'=>2738, 'parent'=>2725, 'code'=>'5726', 'type'=>'districts', 'name'=>'Districts 5726, City 572, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2738, 'regionable_id'=>2228, 'regionable_type'=>'districts']); //Tangen
            DB::table('regionables')->insert(['region_id'=>2738, 'regionable_id'=>2229, 'regionable_type'=>'districts']); //Gesi
            DB::table('regionables')->insert(['region_id'=>2738, 'regionable_id'=>2230, 'regionable_type'=>'districts']); //Sukodono
                DB::table('regions')->insert(['id'=>2739, 'parent'=>2738, 'code'=>'57263', 'type'=>'village', 'name'=>'Village 57263, Districts 5726, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23627, 'regionable_type'=>'village']); //Baleharjo
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23628, 'regionable_type'=>'village']); //Bendo
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23629, 'regionable_type'=>'village']); //Gebang
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23630, 'regionable_type'=>'village']); //Jati Tengah
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23631, 'regionable_type'=>'village']); //Juwok
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23632, 'regionable_type'=>'village']); //Karang Anom
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23633, 'regionable_type'=>'village']); //Majenang
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23634, 'regionable_type'=>'village']); //Newung
                DB::table('regionables')->insert(['region_id'=>2739, 'regionable_id'=>23635, 'regionable_type'=>'village']); //Pantirejo
            DB::table('regions')->insert(['id'=>2740, 'parent'=>2725, 'code'=>'5727', 'type'=>'districts', 'name'=>'Districts 5727, City 572, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2740, 'regionable_id'=>2231, 'regionable_type'=>'districts']); //Mondokan
            DB::table('regionables')->insert(['region_id'=>2740, 'regionable_id'=>2232, 'regionable_type'=>'districts']); //Sumberlawang
            DB::table('regionables')->insert(['region_id'=>2740, 'regionable_id'=>2233, 'regionable_type'=>'districts']); //Gemolong
            DB::table('regionables')->insert(['region_id'=>2740, 'regionable_id'=>2234, 'regionable_type'=>'districts']); //Kalijambe
            DB::table('regionables')->insert(['region_id'=>2740, 'regionable_id'=>2235, 'regionable_type'=>'districts']); //Miri
            DB::table('regionables')->insert(['region_id'=>2740, 'regionable_id'=>2236, 'regionable_type'=>'districts']); //Tanon
                DB::table('regions')->insert(['id'=>2741, 'parent'=>2740, 'code'=>'57277', 'type'=>'village', 'name'=>'Village 57277, Districts 5727, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23694, 'regionable_type'=>'village']); //Bonagung
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23695, 'regionable_type'=>'village']); //Gabugan
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23696, 'regionable_type'=>'village']); //Gading
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23697, 'regionable_type'=>'village']); //Gawan
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23698, 'regionable_type'=>'village']); //Jono
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23699, 'regionable_type'=>'village']); //Kalikobok
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23700, 'regionable_type'=>'village']); //Karang Talun
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23701, 'regionable_type'=>'village']); //Karangasem
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23702, 'regionable_type'=>'village']); //Kecik
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23703, 'regionable_type'=>'village']); //Ketro
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23704, 'regionable_type'=>'village']); //Padas
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23705, 'regionable_type'=>'village']); //Pengkol
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23706, 'regionable_type'=>'village']); //Sambi Duwur
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23707, 'regionable_type'=>'village']); //Slogo
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23708, 'regionable_type'=>'village']); //Suwatu
                DB::table('regionables')->insert(['region_id'=>2741, 'regionable_id'=>23709, 'regionable_type'=>'village']); //Tanon
            DB::table('regions')->insert(['id'=>2742, 'parent'=>2725, 'code'=>'5728', 'type'=>'districts', 'name'=>'Districts 5728, City 572, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2742, 'regionable_id'=>2237, 'regionable_type'=>'districts']); //Sidoharjo
            DB::table('regionables')->insert(['region_id'=>2742, 'regionable_id'=>2238, 'regionable_type'=>'districts']); //Masaran
            DB::table('regionables')->insert(['region_id'=>2742, 'regionable_id'=>2239, 'regionable_type'=>'districts']); //Plupuh
                DB::table('regions')->insert(['id'=>2743, 'parent'=>2742, 'code'=>'57283', 'type'=>'village', 'name'=>'Village 57283, Districts 5728, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23735, 'regionable_type'=>'village']); //Cangkol
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23736, 'regionable_type'=>'village']); //Dari
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23737, 'regionable_type'=>'village']); //Gedongan
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23738, 'regionable_type'=>'village']); //Gentan Banaran
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23739, 'regionable_type'=>'village']); //Jabung
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23740, 'regionable_type'=>'village']); //Jembangan
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23741, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23742, 'regionable_type'=>'village']); //Karangwaru
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23743, 'regionable_type'=>'village']); //Karungan
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23744, 'regionable_type'=>'village']); //Manyarejo
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23745, 'regionable_type'=>'village']); //Ngrombo
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23746, 'regionable_type'=>'village']); //Plupuh
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23747, 'regionable_type'=>'village']); //Pungsari
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23748, 'regionable_type'=>'village']); //Sambirejo
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23749, 'regionable_type'=>'village']); //Sidokerto
                DB::table('regionables')->insert(['region_id'=>2743, 'regionable_id'=>23750, 'regionable_type'=>'village']); //Somomoro Dukuh
            DB::table('regions')->insert(['id'=>2744, 'parent'=>2725, 'code'=>'5729', 'type'=>'districts', 'name'=>'Districts 5729, City 572, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2744, 'regionable_id'=>2240, 'regionable_type'=>'districts']); //Kedawung
            DB::table('regionables')->insert(['region_id'=>2744, 'regionable_id'=>2241, 'regionable_type'=>'districts']); //Sambirejo
                DB::table('regions')->insert(['id'=>2745, 'parent'=>2744, 'code'=>'57293', 'type'=>'village', 'name'=>'Village 57293, Districts 5729, City 572, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23761, 'regionable_type'=>'village']); //Blimbing
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23762, 'regionable_type'=>'village']); //Dawung
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23763, 'regionable_type'=>'village']); //Jambeyan
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23764, 'regionable_type'=>'village']); //Jetis
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23765, 'regionable_type'=>'village']); //Kadipiro
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23766, 'regionable_type'=>'village']); //Musuk
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23767, 'regionable_type'=>'village']); //Sambi
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23768, 'regionable_type'=>'village']); //Sambirejo
                DB::table('regionables')->insert(['region_id'=>2745, 'regionable_id'=>23769, 'regionable_type'=>'village']); //Sukorejo
        DB::table('regions')->insert(['id'=>2746, 'parent'=>2145, 'code'=>'573', 'type'=>'city', 'name'=>'City 573, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2746, 'regionable_id'=>115, 'regionable_type'=>'city']); //Boyolali regencies
            DB::table('regions')->insert(['id'=>2747, 'parent'=>2746, 'code'=>'5731', 'type'=>'districts', 'name'=>'Districts 5731, City 573, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2747, 'regionable_id'=>2242, 'regionable_type'=>'districts']); //Boyolali
            DB::table('regionables')->insert(['region_id'=>2747, 'regionable_id'=>2243, 'regionable_type'=>'districts']); //Karanggede
            DB::table('regionables')->insert(['region_id'=>2747, 'regionable_id'=>2244, 'regionable_type'=>'districts']); //Ampel
                DB::table('regions')->insert(['id'=>2748, 'parent'=>2747, 'code'=>'57316', 'type'=>'village', 'name'=>'Village 57316, Districts 5731, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2748, 'regionable_id'=>23775, 'regionable_type'=>'village']); //Kebonbimo
                DB::table('regionables')->insert(['region_id'=>2748, 'regionable_id'=>23776, 'regionable_type'=>'village']); //Mudal
                DB::table('regionables')->insert(['region_id'=>2748, 'regionable_id'=>23777, 'regionable_type'=>'village']); //Penggung
                DB::table('regionables')->insert(['region_id'=>2748, 'regionable_id'=>23778, 'regionable_type'=>'village']); //Pulisen
                DB::table('regionables')->insert(['region_id'=>2748, 'regionable_id'=>23795, 'regionable_type'=>'village']); //Sidomulyo
            DB::table('regions')->insert(['id'=>2749, 'parent'=>2746, 'code'=>'5732', 'type'=>'districts', 'name'=>'Districts 5732, City 573, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2749, 'regionable_id'=>2245, 'regionable_type'=>'districts']); //Mojosongo
                DB::table('regions')->insert(['id'=>2750, 'parent'=>2749, 'code'=>'57321', 'type'=>'village', 'name'=>'Village 57321, Districts 5732, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2750, 'regionable_id'=>23815, 'regionable_type'=>'village']); //Kemiri
                DB::table('regions')->insert(['id'=>2751, 'parent'=>2749, 'code'=>'57322', 'type'=>'village', 'name'=>'Village 57322, Districts 5732, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23816, 'regionable_type'=>'village']); //Brajan
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23817, 'regionable_type'=>'village']); //Butuh
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23818, 'regionable_type'=>'village']); //Dlingo
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23819, 'regionable_type'=>'village']); //Jurug
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23820, 'regionable_type'=>'village']); //Karangnongko
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23821, 'regionable_type'=>'village']); //Madu
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23822, 'regionable_type'=>'village']); //Manggis
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23823, 'regionable_type'=>'village']); //Metuk
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23824, 'regionable_type'=>'village']); //Mojosongo
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23825, 'regionable_type'=>'village']); //Singosari
                DB::table('regionables')->insert(['region_id'=>2751, 'regionable_id'=>23826, 'regionable_type'=>'village']); //Tambak
                DB::table('regions')->insert(['id'=>2752, 'parent'=>2749, 'code'=>'57323', 'type'=>'village', 'name'=>'Village 57323, Districts 5732, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2752, 'regionable_id'=>23827, 'regionable_type'=>'village']); //Kragilan
            DB::table('regions')->insert(['id'=>2753, 'parent'=>2746, 'code'=>'5733', 'type'=>'districts', 'name'=>'Districts 5733, City 573, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2753, 'regionable_id'=>2246, 'regionable_type'=>'districts']); //Musuk
                DB::table('regions')->insert(['id'=>2754, 'parent'=>2753, 'code'=>'57331', 'type'=>'village', 'name'=>'Village 57331, Districts 5733, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23828, 'regionable_type'=>'village']); //Cluntang
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23829, 'regionable_type'=>'village']); //Dragan
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23830, 'regionable_type'=>'village']); //Jemowo
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23831, 'regionable_type'=>'village']); //Karang Kendal
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23832, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23833, 'regionable_type'=>'village']); //Kebongulo
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23834, 'regionable_type'=>'village']); //Kembangsari
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23835, 'regionable_type'=>'village']); //Keposong
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23836, 'regionable_type'=>'village']); //Lampar
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23837, 'regionable_type'=>'village']); //Lanjaran
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23838, 'regionable_type'=>'village']); //Mriyan
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23839, 'regionable_type'=>'village']); //Musuk
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23840, 'regionable_type'=>'village']); //Pagerjurang
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23841, 'regionable_type'=>'village']); //Pusporenggo
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23842, 'regionable_type'=>'village']); //Ringin Larik
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23843, 'regionable_type'=>'village']); //Sangup
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23844, 'regionable_type'=>'village']); //Sruni
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23845, 'regionable_type'=>'village']); //Sukorame
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23846, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>2754, 'regionable_id'=>23847, 'regionable_type'=>'village']); //Sumur
            DB::table('regions')->insert(['id'=>2755, 'parent'=>2746, 'code'=>'5735', 'type'=>'districts', 'name'=>'Districts 5735, City 573, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2755, 'regionable_id'=>2244, 'regionable_type'=>'districts']); //Ampel
                DB::table('regions')->insert(['id'=>2756, 'parent'=>2755, 'code'=>'57352', 'type'=>'village', 'name'=>'Village 57352, Districts 5735, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23796, 'regionable_type'=>'village']); //Banyuanyar
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23797, 'regionable_type'=>'village']); //Candi
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23798, 'regionable_type'=>'village']); //Candisari
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23799, 'regionable_type'=>'village']); //Gladagsari
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23800, 'regionable_type'=>'village']); //Gondang Slamet
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23801, 'regionable_type'=>'village']); //Jlarem
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23802, 'regionable_type'=>'village']); //Kaligentong
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23803, 'regionable_type'=>'village']); //Kembang
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23804, 'regionable_type'=>'village']); //Ngadirojo
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23805, 'regionable_type'=>'village']); //Ngagrong
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23806, 'regionable_type'=>'village']); //Ngampon
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23807, 'regionable_type'=>'village']); //Ngargoloko
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23808, 'regionable_type'=>'village']); //Ngargosari
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23809, 'regionable_type'=>'village']); //Ngenden
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23810, 'regionable_type'=>'village']); //Sampetan
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23811, 'regionable_type'=>'village']); //Seboto
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23812, 'regionable_type'=>'village']); //Selodoko
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23813, 'regionable_type'=>'village']); //Tanduk
                DB::table('regionables')->insert(['region_id'=>2756, 'regionable_id'=>23814, 'regionable_type'=>'village']); //Urutsewu
            DB::table('regions')->insert(['id'=>2757, 'parent'=>2746, 'code'=>'5736', 'type'=>'districts', 'name'=>'Districts 5736, City 573, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2757, 'regionable_id'=>2247, 'regionable_type'=>'districts']); //Cepogo
            DB::table('regionables')->insert(['region_id'=>2757, 'regionable_id'=>2248, 'regionable_type'=>'districts']); //Selo
                DB::table('regions')->insert(['id'=>2758, 'parent'=>2757, 'code'=>'57363', 'type'=>'village', 'name'=>'Village 57363, Districts 5736, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23863, 'regionable_type'=>'village']); //Jeruk
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23864, 'regionable_type'=>'village']); //Jrakah
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23865, 'regionable_type'=>'village']); //Klakah
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23866, 'regionable_type'=>'village']); //Lencoh
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23867, 'regionable_type'=>'village']); //Samiran
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23868, 'regionable_type'=>'village']); //Selo
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23869, 'regionable_type'=>'village']); //Senden
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23870, 'regionable_type'=>'village']); //Suroteleng
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23871, 'regionable_type'=>'village']); //Tarubatang
                DB::table('regionables')->insert(['region_id'=>2758, 'regionable_id'=>23872, 'regionable_type'=>'village']); //Tlogolele
            DB::table('regions')->insert(['id'=>2759, 'parent'=>2746, 'code'=>'5737', 'type'=>'districts', 'name'=>'Districts 5737, City 573, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2759, 'regionable_id'=>2249, 'regionable_type'=>'districts']); //Teras
            DB::table('regionables')->insert(['region_id'=>2759, 'regionable_id'=>2250, 'regionable_type'=>'districts']); //Banyudono
            DB::table('regionables')->insert(['region_id'=>2759, 'regionable_id'=>2251, 'regionable_type'=>'districts']); //Sawit
            DB::table('regionables')->insert(['region_id'=>2759, 'regionable_id'=>2252, 'regionable_type'=>'districts']); //Ngemplak
            DB::table('regionables')->insert(['region_id'=>2759, 'regionable_id'=>2253, 'regionable_type'=>'districts']); //Sambi
            DB::table('regionables')->insert(['region_id'=>2759, 'regionable_id'=>2254, 'regionable_type'=>'districts']); //Simo
            DB::table('regionables')->insert(['region_id'=>2759, 'regionable_id'=>2255, 'regionable_type'=>'districts']); //Nogosari
                DB::table('regions')->insert(['id'=>2760, 'parent'=>2759, 'code'=>'57378', 'type'=>'village', 'name'=>'Village 57378, Districts 5737, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23954, 'regionable_type'=>'village']); //Bendo
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23955, 'regionable_type'=>'village']); //Glonggong
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23956, 'regionable_type'=>'village']); //Guli
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23957, 'regionable_type'=>'village']); //Jeron
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23958, 'regionable_type'=>'village']); //Kenteng
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23959, 'regionable_type'=>'village']); //Ketitang
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23960, 'regionable_type'=>'village']); //Keyongan
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23961, 'regionable_type'=>'village']); //Pojok
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23962, 'regionable_type'=>'village']); //Potronayan
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23963, 'regionable_type'=>'village']); //Pulutan
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23964, 'regionable_type'=>'village']); //Rembun
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23965, 'regionable_type'=>'village']); //Sembungan
                DB::table('regionables')->insert(['region_id'=>2760, 'regionable_id'=>23966, 'regionable_type'=>'village']); //Tegalgiri
            DB::table('regions')->insert(['id'=>2761, 'parent'=>2746, 'code'=>'5738', 'type'=>'districts', 'name'=>'Districts 5738, City 573, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2761, 'regionable_id'=>2243, 'regionable_type'=>'districts']); //Karanggede
            DB::table('regionables')->insert(['region_id'=>2761, 'regionable_id'=>2256, 'regionable_type'=>'districts']); //Wonosegoro
            DB::table('regionables')->insert(['region_id'=>2761, 'regionable_id'=>2257, 'regionable_type'=>'districts']); //Kemusu
            DB::table('regionables')->insert(['region_id'=>2761, 'regionable_id'=>2258, 'regionable_type'=>'districts']); //Andong
            DB::table('regionables')->insert(['region_id'=>2761, 'regionable_id'=>2259, 'regionable_type'=>'districts']); //Klego
                DB::table('regions')->insert(['id'=>2762, 'parent'=>2761, 'code'=>'57385', 'type'=>'village', 'name'=>'Village 57385, Districts 5738, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24014, 'regionable_type'=>'village']); //Bade
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24015, 'regionable_type'=>'village']); //Banyu Urip
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24016, 'regionable_type'=>'village']); //Blumbang
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24017, 'regionable_type'=>'village']); //Gondanglegi
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24018, 'regionable_type'=>'village']); //Jaten
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24019, 'regionable_type'=>'village']); //Kalangan
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24020, 'regionable_type'=>'village']); //Karanggatak
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24021, 'regionable_type'=>'village']); //Karangmojo
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24022, 'regionable_type'=>'village']); //Klego
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24023, 'regionable_type'=>'village']); //Sangge
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24024, 'regionable_type'=>'village']); //Sendangrejo
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24025, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>2762, 'regionable_id'=>24026, 'regionable_type'=>'village']); //Tanjung
            DB::table('regions')->insert(['id'=>2763, 'parent'=>2746, 'code'=>'5739', 'type'=>'districts', 'name'=>'Districts 5739, City 573, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2763, 'regionable_id'=>2260, 'regionable_type'=>'districts']); //Juwangi
                DB::table('regions')->insert(['id'=>2764, 'parent'=>2763, 'code'=>'57391', 'type'=>'village', 'name'=>'Village 57391, Districts 5739, City 573, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24027, 'regionable_type'=>'village']); //Cerme
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24028, 'regionable_type'=>'village']); //Jerukan
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24029, 'regionable_type'=>'village']); //Juwangi
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24030, 'regionable_type'=>'village']); //Kalimati
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24031, 'regionable_type'=>'village']); //Kayen
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24032, 'regionable_type'=>'village']); //Krobokan
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24033, 'regionable_type'=>'village']); //Ngaren
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24034, 'regionable_type'=>'village']); //Ngleses
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24035, 'regionable_type'=>'village']); //Pilangrejo
                DB::table('regionables')->insert(['region_id'=>2764, 'regionable_id'=>24036, 'regionable_type'=>'village']); //Sambeng
        DB::table('regions')->insert(['id'=>2765, 'parent'=>2145, 'code'=>'574', 'type'=>'city', 'name'=>'City 574, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2765, 'regionable_id'=>116, 'regionable_type'=>'city']); //Klaten regencies
            DB::table('regions')->insert(['id'=>2766, 'parent'=>2765, 'code'=>'5741', 'type'=>'districts', 'name'=>'Districts 5741, City 574, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2766, 'regionable_id'=>2261, 'regionable_type'=>'districts']); //Klaten Tengah
                DB::table('regions')->insert(['id'=>2767, 'parent'=>2766, 'code'=>'57411', 'type'=>'village', 'name'=>'Village 57411, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2767, 'regionable_id'=>24037, 'regionable_type'=>'village']); //Klaten
                DB::table('regions')->insert(['id'=>2768, 'parent'=>2766, 'code'=>'57412', 'type'=>'village', 'name'=>'Village 57412, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2768, 'regionable_id'=>24038, 'regionable_type'=>'village']); //Tonggalan
                DB::table('regions')->insert(['id'=>2769, 'parent'=>2766, 'code'=>'57413', 'type'=>'village', 'name'=>'Village 57413, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2769, 'regionable_id'=>24039, 'regionable_type'=>'village']); //Kabupaten
                DB::table('regions')->insert(['id'=>2770, 'parent'=>2766, 'code'=>'57414', 'type'=>'village', 'name'=>'Village 57414, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2770, 'regionable_id'=>24040, 'regionable_type'=>'village']); //Bareng
                DB::table('regions')->insert(['id'=>2771, 'parent'=>2766, 'code'=>'57415', 'type'=>'village', 'name'=>'Village 57415, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2771, 'regionable_id'=>24041, 'regionable_type'=>'village']); //Semangkak
                DB::table('regions')->insert(['id'=>2772, 'parent'=>2766, 'code'=>'57416', 'type'=>'village', 'name'=>'Village 57416, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2772, 'regionable_id'=>24042, 'regionable_type'=>'village']); //Mojayan
                DB::table('regions')->insert(['id'=>2773, 'parent'=>2766, 'code'=>'57417', 'type'=>'village', 'name'=>'Village 57417, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2773, 'regionable_id'=>24043, 'regionable_type'=>'village']); //Gumulan
                DB::table('regions')->insert(['id'=>2774, 'parent'=>2766, 'code'=>'57418', 'type'=>'village', 'name'=>'Village 57418, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2774, 'regionable_id'=>24044, 'regionable_type'=>'village']); //Jomboran
                DB::table('regions')->insert(['id'=>2775, 'parent'=>2766, 'code'=>'57419', 'type'=>'village', 'name'=>'Village 57419, Districts 5741, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2775, 'regionable_id'=>24045, 'regionable_type'=>'village']); //Buntalan
            DB::table('regions')->insert(['id'=>2776, 'parent'=>2765, 'code'=>'5742', 'type'=>'districts', 'name'=>'Districts 5742, City 574, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2776, 'regionable_id'=>2262, 'regionable_type'=>'districts']); //Klaten Selatan
                DB::table('regions')->insert(['id'=>2777, 'parent'=>2776, 'code'=>'57421', 'type'=>'village', 'name'=>'Village 57421, Districts 5742, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2777, 'regionable_id'=>24046, 'regionable_type'=>'village']); //Jetis
                DB::table('regionables')->insert(['region_id'=>2777, 'regionable_id'=>24047, 'regionable_type'=>'village']); //Trunuh
                DB::table('regions')->insert(['id'=>2778, 'parent'=>2776, 'code'=>'57422', 'type'=>'village', 'name'=>'Village 57422, Districts 5742, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2778, 'regionable_id'=>24048, 'regionable_type'=>'village']); //Nglinggi
                DB::table('regions')->insert(['id'=>2779, 'parent'=>2776, 'code'=>'57423', 'type'=>'village', 'name'=>'Village 57423, Districts 5742, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2779, 'regionable_id'=>24049, 'regionable_type'=>'village']); //Gayamprit
                DB::table('regionables')->insert(['region_id'=>2779, 'regionable_id'=>24050, 'regionable_type'=>'village']); //Karanglo
                DB::table('regions')->insert(['id'=>2780, 'parent'=>2776, 'code'=>'57424', 'type'=>'village', 'name'=>'Village 57424, Districts 5742, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2780, 'regionable_id'=>24051, 'regionable_type'=>'village']); //Merbung
                DB::table('regionables')->insert(['region_id'=>2780, 'regionable_id'=>24052, 'regionable_type'=>'village']); //Tegalyoso
                DB::table('regions')->insert(['id'=>2781, 'parent'=>2776, 'code'=>'57425', 'type'=>'village', 'name'=>'Village 57425, Districts 5742, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2781, 'regionable_id'=>24053, 'regionable_type'=>'village']); //Danguran
                DB::table('regionables')->insert(['region_id'=>2781, 'regionable_id'=>24054, 'regionable_type'=>'village']); //Ngalas
                DB::table('regions')->insert(['id'=>2782, 'parent'=>2776, 'code'=>'57426', 'type'=>'village', 'name'=>'Village 57426, Districts 5742, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2782, 'regionable_id'=>24055, 'regionable_type'=>'village']); //Glodogan
                DB::table('regionables')->insert(['region_id'=>2782, 'regionable_id'=>24056, 'regionable_type'=>'village']); //Kajoran
                DB::table('regionables')->insert(['region_id'=>2782, 'regionable_id'=>24057, 'regionable_type'=>'village']); //Sumberejo
            DB::table('regions')->insert(['id'=>2783, 'parent'=>2765, 'code'=>'5743', 'type'=>'districts', 'name'=>'Districts 5743, City 574, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2783, 'regionable_id'=>2263, 'regionable_type'=>'districts']); //Klaten Utara
                DB::table('regions')->insert(['id'=>2784, 'parent'=>2783, 'code'=>'57432', 'type'=>'village', 'name'=>'Village 57432, Districts 5743, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2784, 'regionable_id'=>24058, 'regionable_type'=>'village']); //Sekarsuli
                DB::table('regions')->insert(['id'=>2785, 'parent'=>2783, 'code'=>'57433', 'type'=>'village', 'name'=>'Village 57433, Districts 5743, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2785, 'regionable_id'=>24059, 'regionable_type'=>'village']); //Jebugan
                DB::table('regions')->insert(['id'=>2786, 'parent'=>2783, 'code'=>'57434', 'type'=>'village', 'name'=>'Village 57434, Districts 5743, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2786, 'regionable_id'=>24060, 'regionable_type'=>'village']); //Gergunung
                DB::table('regions')->insert(['id'=>2787, 'parent'=>2783, 'code'=>'57435', 'type'=>'village', 'name'=>'Village 57435, Districts 5743, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2787, 'regionable_id'=>24061, 'regionable_type'=>'village']); //Jonggrangan
                DB::table('regions')->insert(['id'=>2788, 'parent'=>2783, 'code'=>'57437', 'type'=>'village', 'name'=>'Village 57437, Districts 5743, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2788, 'regionable_id'=>24062, 'regionable_type'=>'village']); //Ketandan
                DB::table('regions')->insert(['id'=>2789, 'parent'=>2783, 'code'=>'57438', 'type'=>'village', 'name'=>'Village 57438, Districts 5743, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2789, 'regionable_id'=>24063, 'regionable_type'=>'village']); //Bareng Lor
                DB::table('regionables')->insert(['region_id'=>2789, 'regionable_id'=>24064, 'regionable_type'=>'village']); //Belang Wetan
                DB::table('regionables')->insert(['region_id'=>2789, 'regionable_id'=>24065, 'regionable_type'=>'village']); //Karanganom
            DB::table('regions')->insert(['id'=>2790, 'parent'=>2765, 'code'=>'5745', 'type'=>'districts', 'name'=>'Districts 5745, City 574, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2790, 'regionable_id'=>2264, 'regionable_type'=>'districts']); //Kalikotes
            DB::table('regionables')->insert(['region_id'=>2790, 'regionable_id'=>2265, 'regionable_type'=>'districts']); //Jogonalan
            DB::table('regionables')->insert(['region_id'=>2790, 'regionable_id'=>2266, 'regionable_type'=>'districts']); //Prambanan
            DB::table('regionables')->insert(['region_id'=>2790, 'regionable_id'=>2267, 'regionable_type'=>'districts']); //Gantiwarno
                DB::table('regions')->insert(['id'=>2791, 'parent'=>2790, 'code'=>'57455', 'type'=>'village', 'name'=>'Village 57455, Districts 5745, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24107, 'regionable_type'=>'village']); //Baturan
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24108, 'regionable_type'=>'village']); //Ceporan
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24109, 'regionable_type'=>'village']); //Gentan
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24110, 'regionable_type'=>'village']); //Gesikan
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24111, 'regionable_type'=>'village']); //Jabung
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24112, 'regionable_type'=>'village']); //Jogoprayan
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24113, 'regionable_type'=>'village']); //Karangturi
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24114, 'regionable_type'=>'village']); //Katekan
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24115, 'regionable_type'=>'village']); //Kerten
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24116, 'regionable_type'=>'village']); //Kragilan
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24117, 'regionable_type'=>'village']); //Mlese
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24118, 'regionable_type'=>'village']); //Muruh
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24119, 'regionable_type'=>'village']); //Mutihan
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24120, 'regionable_type'=>'village']); //Ngandong
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24121, 'regionable_type'=>'village']); //Sawit
                DB::table('regionables')->insert(['region_id'=>2791, 'regionable_id'=>24122, 'regionable_type'=>'village']); //Towangsan
            DB::table('regions')->insert(['id'=>2792, 'parent'=>2765, 'code'=>'5746', 'type'=>'districts', 'name'=>'Districts 5746, City 574, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2792, 'regionable_id'=>2268, 'regionable_type'=>'districts']); //Wedi
            DB::table('regionables')->insert(['region_id'=>2792, 'regionable_id'=>2269, 'regionable_type'=>'districts']); //Bayat
            DB::table('regionables')->insert(['region_id'=>2792, 'regionable_id'=>2270, 'regionable_type'=>'districts']); //Cawas
            DB::table('regionables')->insert(['region_id'=>2792, 'regionable_id'=>2271, 'regionable_type'=>'districts']); //Karangdowo
            DB::table('regionables')->insert(['region_id'=>2792, 'regionable_id'=>2272, 'regionable_type'=>'districts']); //Ceper
            DB::table('regionables')->insert(['region_id'=>2792, 'regionable_id'=>2273, 'regionable_type'=>'districts']); //Ngawen
            DB::table('regionables')->insert(['region_id'=>2792, 'regionable_id'=>2274, 'regionable_type'=>'districts']); //Trucuk
            DB::table('regionables')->insert(['region_id'=>2792, 'regionable_id'=>2275, 'regionable_type'=>'districts']); //Pedan
                DB::table('regions')->insert(['id'=>2793, 'parent'=>2792, 'code'=>'57468', 'type'=>'village', 'name'=>'Village 57468, Districts 5746, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24248, 'regionable_type'=>'village']); //Beji
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24249, 'regionable_type'=>'village']); //Bendo
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24250, 'regionable_type'=>'village']); //Jatimulyo
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24251, 'regionable_type'=>'village']); //Jetis Wetan
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24252, 'regionable_type'=>'village']); //Kalangan
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24253, 'regionable_type'=>'village']); //Kaligawe
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24254, 'regionable_type'=>'village']); //Keden
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24255, 'regionable_type'=>'village']); //Kedungan
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24256, 'regionable_type'=>'village']); //Lemahireng
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24257, 'regionable_type'=>'village']); //Ngaren
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24258, 'regionable_type'=>'village']); //Sobayan
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24259, 'regionable_type'=>'village']); //Tambakboyo
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24260, 'regionable_type'=>'village']); //Temuwangi
                DB::table('regionables')->insert(['region_id'=>2793, 'regionable_id'=>24261, 'regionable_type'=>'village']); //Troketon
            DB::table('regions')->insert(['id'=>2794, 'parent'=>2765, 'code'=>'5747', 'type'=>'districts', 'name'=>'Districts 5747, City 574, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2794, 'regionable_id'=>2274, 'regionable_type'=>'districts']); //Trucuk
            DB::table('regionables')->insert(['region_id'=>2794, 'regionable_id'=>2276, 'regionable_type'=>'districts']); //Delanggu
            DB::table('regionables')->insert(['region_id'=>2794, 'regionable_id'=>2277, 'regionable_type'=>'districts']); //Juwiring
            DB::table('regionables')->insert(['region_id'=>2794, 'regionable_id'=>2278, 'regionable_type'=>'districts']); //Wonosari
            DB::table('regionables')->insert(['region_id'=>2794, 'regionable_id'=>2279, 'regionable_type'=>'districts']); //Polanharjo
            DB::table('regionables')->insert(['region_id'=>2794, 'regionable_id'=>2280, 'regionable_type'=>'districts']); //Karanganom
                DB::table('regions')->insert(['id'=>2795, 'parent'=>2794, 'code'=>'57475', 'type'=>'village', 'name'=>'Village 57475, Districts 5747, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24333, 'regionable_type'=>'village']); //Beku
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24334, 'regionable_type'=>'village']); //Blanceran
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24335, 'regionable_type'=>'village']); //Brangkal
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24336, 'regionable_type'=>'village']); //Gempol
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24337, 'regionable_type'=>'village']); //Gledeg
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24338, 'regionable_type'=>'village']); //Jambeyan
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24339, 'regionable_type'=>'village']); //Jeblog
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24340, 'regionable_type'=>'village']); //Jungkare
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24341, 'regionable_type'=>'village']); //Jurangjero
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24342, 'regionable_type'=>'village']); //Kadirejo
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24343, 'regionable_type'=>'village']); //Karangan
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24344, 'regionable_type'=>'village']); //Karanganom
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24345, 'regionable_type'=>'village']); //Kunden
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24346, 'regionable_type'=>'village']); //Ngabeyan
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24347, 'regionable_type'=>'village']); //Padas
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24348, 'regionable_type'=>'village']); //Pondok
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24349, 'regionable_type'=>'village']); //Soropaten
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24350, 'regionable_type'=>'village']); //Tarubasan
                DB::table('regionables')->insert(['region_id'=>2795, 'regionable_id'=>24351, 'regionable_type'=>'village']); //Troso
            DB::table('regions')->insert(['id'=>2796, 'parent'=>2765, 'code'=>'5748', 'type'=>'districts', 'name'=>'Districts 5748, City 574, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2796, 'regionable_id'=>2281, 'regionable_type'=>'districts']); //Jatinom
            DB::table('regionables')->insert(['region_id'=>2796, 'regionable_id'=>2282, 'regionable_type'=>'districts']); //Tulung
            DB::table('regionables')->insert(['region_id'=>2796, 'regionable_id'=>2283, 'regionable_type'=>'districts']); //Karangnongko
            DB::table('regionables')->insert(['region_id'=>2796, 'regionable_id'=>2284, 'regionable_type'=>'districts']); //Kemalang
            DB::table('regionables')->insert(['region_id'=>2796, 'regionable_id'=>2285, 'regionable_type'=>'districts']); //Manisrenggo
            DB::table('regionables')->insert(['region_id'=>2796, 'regionable_id'=>2286, 'regionable_type'=>'districts']); //Kebonarum
                DB::table('regions')->insert(['id'=>2797, 'parent'=>2796, 'code'=>'57486', 'type'=>'village', 'name'=>'Village 57486, Districts 5748, City 574, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2797, 'regionable_id'=>24431, 'regionable_type'=>'village']); //Basin
                DB::table('regionables')->insert(['region_id'=>2797, 'regionable_id'=>24432, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>2797, 'regionable_id'=>24433, 'regionable_type'=>'village']); //Karangduren
                DB::table('regionables')->insert(['region_id'=>2797, 'regionable_id'=>24434, 'regionable_type'=>'village']); //Malangjiwan
                DB::table('regionables')->insert(['region_id'=>2797, 'regionable_id'=>24435, 'regionable_type'=>'village']); //Menden
                DB::table('regionables')->insert(['region_id'=>2797, 'regionable_id'=>24436, 'regionable_type'=>'village']); //Ngrundul
                DB::table('regionables')->insert(['region_id'=>2797, 'regionable_id'=>24437, 'regionable_type'=>'village']); //Pluneng
        DB::table('regions')->insert(['id'=>2798, 'parent'=>2145, 'code'=>'575', 'type'=>'city', 'name'=>'City 575, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2798, 'regionable_id'=>112, 'regionable_type'=>'city']); //Sukoharjo regencies
            DB::table('regions')->insert(['id'=>2799, 'parent'=>2798, 'code'=>'5751', 'type'=>'districts', 'name'=>'Districts 5751, City 575, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2799, 'regionable_id'=>2194, 'regionable_type'=>'districts']); //Sukoharjo
            DB::table('regionables')->insert(['region_id'=>2799, 'regionable_id'=>2195, 'regionable_type'=>'districts']); //Polokarto
                DB::table('regions')->insert(['id'=>2800, 'parent'=>2799, 'code'=>'57513', 'type'=>'village', 'name'=>'Village 57513, Districts 5751, City 575, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2800, 'regionable_id'=>23232, 'regionable_type'=>'village']); //Joho
                DB::table('regionables')->insert(['region_id'=>2800, 'regionable_id'=>23244, 'regionable_type'=>'village']); //Mranggen
            DB::table('regions')->insert(['id'=>2801, 'parent'=>2798, 'code'=>'5752', 'type'=>'districts', 'name'=>'Districts 5752, City 575, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2801, 'regionable_id'=>2194, 'regionable_type'=>'districts']); //Sukoharjo
            DB::table('regionables')->insert(['region_id'=>2801, 'regionable_id'=>2196, 'regionable_type'=>'districts']); //Bendosari
                DB::table('regions')->insert(['id'=>2802, 'parent'=>2801, 'code'=>'57521', 'type'=>'village', 'name'=>'Village 57521, Districts 5752, City 575, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2802, 'regionable_id'=>23261, 'regionable_type'=>'village']); //Jombor
                DB::table('regions')->insert(['id'=>2803, 'parent'=>2801, 'code'=>'57527', 'type'=>'village', 'name'=>'Village 57527, Districts 5752, City 575, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2803, 'regionable_id'=>23262, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regions')->insert(['id'=>2804, 'parent'=>2801, 'code'=>'57528', 'type'=>'village', 'name'=>'Village 57528, Districts 5752, City 575, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23263, 'regionable_type'=>'village']); //Bendosari
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23264, 'regionable_type'=>'village']); //Cabeyan
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23265, 'regionable_type'=>'village']); //Gentan
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23266, 'regionable_type'=>'village']); //Jagan
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23267, 'regionable_type'=>'village']); //Manisharjo
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23268, 'regionable_type'=>'village']); //Mertan
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23269, 'regionable_type'=>'village']); //Mojorejo
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23270, 'regionable_type'=>'village']); //Mulur
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23271, 'regionable_type'=>'village']); //Paluhombo
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23272, 'regionable_type'=>'village']); //Puhgogor
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23273, 'regionable_type'=>'village']); //Sugihan
                DB::table('regionables')->insert(['region_id'=>2804, 'regionable_id'=>23274, 'regionable_type'=>'village']); //Toriyo
            DB::table('regions')->insert(['id'=>2805, 'parent'=>2798, 'code'=>'5755', 'type'=>'districts', 'name'=>'Districts 5755, City 575, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2805, 'regionable_id'=>2194, 'regionable_type'=>'districts']); //Sukoharjo
            DB::table('regionables')->insert(['region_id'=>2805, 'regionable_id'=>2195, 'regionable_type'=>'districts']); //Polokarto
            DB::table('regionables')->insert(['region_id'=>2805, 'regionable_id'=>2197, 'regionable_type'=>'districts']); //Grogol
            DB::table('regionables')->insert(['region_id'=>2805, 'regionable_id'=>2198, 'regionable_type'=>'districts']); //Mojolaban
            DB::table('regionables')->insert(['region_id'=>2805, 'regionable_id'=>2199, 'regionable_type'=>'districts']); //Baki
            DB::table('regionables')->insert(['region_id'=>2805, 'regionable_id'=>2200, 'regionable_type'=>'districts']); //Gatak
                DB::table('regions')->insert(['id'=>2806, 'parent'=>2805, 'code'=>'57557', 'type'=>'village', 'name'=>'Village 57557, Districts 5755, City 575, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23318, 'regionable_type'=>'village']); //Blimbing
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23319, 'regionable_type'=>'village']); //Geneng
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23320, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23321, 'regionable_type'=>'village']); //Kagokan
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23322, 'regionable_type'=>'village']); //Klaseman
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23323, 'regionable_type'=>'village']); //Krajan
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23324, 'regionable_type'=>'village']); //Luwang
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23325, 'regionable_type'=>'village']); //Mayang
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23326, 'regionable_type'=>'village']); //Sanggung
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23327, 'regionable_type'=>'village']); //Sraten
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23328, 'regionable_type'=>'village']); //Tempel
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23329, 'regionable_type'=>'village']); //Trangsan
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23330, 'regionable_type'=>'village']); //Trosemi
                DB::table('regionables')->insert(['region_id'=>2806, 'regionable_id'=>23331, 'regionable_type'=>'village']); //Wironanggan
            DB::table('regions')->insert(['id'=>2807, 'parent'=>2798, 'code'=>'5756', 'type'=>'districts', 'name'=>'Districts 5756, City 575, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2807, 'regionable_id'=>2201, 'regionable_type'=>'districts']); //Tawangsari
            DB::table('regionables')->insert(['region_id'=>2807, 'regionable_id'=>2202, 'regionable_type'=>'districts']); //Weru
            DB::table('regionables')->insert(['region_id'=>2807, 'regionable_id'=>2203, 'regionable_type'=>'districts']); //Bulu
                DB::table('regions')->insert(['id'=>2808, 'parent'=>2807, 'code'=>'57563', 'type'=>'village', 'name'=>'Village 57563, Districts 5756, City 575, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23357, 'regionable_type'=>'village']); //Bulu
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23358, 'regionable_type'=>'village']); //Gentan
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23359, 'regionable_type'=>'village']); //Kamal
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23360, 'regionable_type'=>'village']); //Karangasem
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23361, 'regionable_type'=>'village']); //Kedungsono
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23362, 'regionable_type'=>'village']); //Kunden
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23363, 'regionable_type'=>'village']); //Lengking
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23364, 'regionable_type'=>'village']); //Malangan
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23365, 'regionable_type'=>'village']); //Ngasinan
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23366, 'regionable_type'=>'village']); //Puron
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23367, 'regionable_type'=>'village']); //Sanggang
                DB::table('regionables')->insert(['region_id'=>2808, 'regionable_id'=>23368, 'regionable_type'=>'village']); //Tiyaran
            DB::table('regions')->insert(['id'=>2809, 'parent'=>2798, 'code'=>'5757', 'type'=>'districts', 'name'=>'Districts 5757, City 575, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2809, 'regionable_id'=>2204, 'regionable_type'=>'districts']); //Nguter
                DB::table('regions')->insert(['id'=>2810, 'parent'=>2809, 'code'=>'57571', 'type'=>'village', 'name'=>'Village 57571, Districts 5757, City 575, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23369, 'regionable_type'=>'village']); //Baran
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23370, 'regionable_type'=>'village']); //Celep
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23371, 'regionable_type'=>'village']); //Daleman
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23372, 'regionable_type'=>'village']); //Gupit
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23373, 'regionable_type'=>'village']); //Jangglengan
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23374, 'regionable_type'=>'village']); //Juron
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23375, 'regionable_type'=>'village']); //Kedungwinong
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23376, 'regionable_type'=>'village']); //Kepuh
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23377, 'regionable_type'=>'village']); //Lawu
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23378, 'regionable_type'=>'village']); //Nguter
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23379, 'regionable_type'=>'village']); //Pengkol
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23380, 'regionable_type'=>'village']); //Plesan
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23381, 'regionable_type'=>'village']); //Pondok
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23382, 'regionable_type'=>'village']); //Serut
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23383, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>2810, 'regionable_id'=>23384, 'regionable_type'=>'village']); //Tanjungrejo
        DB::table('regions')->insert(['id'=>2811, 'parent'=>2145, 'code'=>'576', 'type'=>'city', 'name'=>'City 576, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2811, 'regionable_id'=>117, 'regionable_type'=>'city']); //Wonogiri regencies
            DB::table('regions')->insert(['id'=>2812, 'parent'=>2811, 'code'=>'5761', 'type'=>'districts', 'name'=>'Districts 5761, City 576, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2812, 'regionable_id'=>2287, 'regionable_type'=>'districts']); //Wonogiri
                DB::table('regions')->insert(['id'=>2813, 'parent'=>2812, 'code'=>'57611', 'type'=>'village', 'name'=>'Village 57611, Districts 5761, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2813, 'regionable_id'=>24438, 'regionable_type'=>'village']); //Giritirto
                DB::table('regions')->insert(['id'=>2814, 'parent'=>2812, 'code'=>'57612', 'type'=>'village', 'name'=>'Village 57612, Districts 5761, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2814, 'regionable_id'=>24439, 'regionable_type'=>'village']); //Giripurwo
                DB::table('regionables')->insert(['region_id'=>2814, 'regionable_id'=>24440, 'regionable_type'=>'village']); //Wonokarto
                DB::table('regions')->insert(['id'=>2815, 'parent'=>2812, 'code'=>'57613', 'type'=>'village', 'name'=>'Village 57613, Districts 5761, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2815, 'regionable_id'=>24441, 'regionable_type'=>'village']); //Giriwono
                DB::table('regions')->insert(['id'=>2816, 'parent'=>2812, 'code'=>'57614', 'type'=>'village', 'name'=>'Village 57614, Districts 5761, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2816, 'regionable_id'=>24442, 'regionable_type'=>'village']); //Wuryorejo
                DB::table('regions')->insert(['id'=>2817, 'parent'=>2812, 'code'=>'57615', 'type'=>'village', 'name'=>'Village 57615, Districts 5761, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24443, 'regionable_type'=>'village']); //Bulusulur
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24444, 'regionable_type'=>'village']); //Manjung
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24445, 'regionable_type'=>'village']); //Pokohkidul
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24446, 'regionable_type'=>'village']); //Purworejo
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24447, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24448, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24449, 'regionable_type'=>'village']); //Sonoharjo
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24450, 'regionable_type'=>'village']); //Wonoboyo
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24451, 'regionable_type'=>'village']); //Wonoharjo
                DB::table('regionables')->insert(['region_id'=>2817, 'regionable_id'=>24452, 'regionable_type'=>'village']); //Wonokerto
            DB::table('regions')->insert(['id'=>2818, 'parent'=>2811, 'code'=>'5765', 'type'=>'districts', 'name'=>'Districts 5765, City 576, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2818, 'regionable_id'=>2288, 'regionable_type'=>'districts']); //Selogiri
                DB::table('regions')->insert(['id'=>2819, 'parent'=>2818, 'code'=>'57652', 'type'=>'village', 'name'=>'Village 57652, Districts 5765, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24453, 'regionable_type'=>'village']); //Gemantar
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24454, 'regionable_type'=>'village']); //Jaten
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24455, 'regionable_type'=>'village']); //Jendi
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24456, 'regionable_type'=>'village']); //Kaliancar
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24457, 'regionable_type'=>'village']); //Keloran
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24458, 'regionable_type'=>'village']); //Kepatihan
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24459, 'regionable_type'=>'village']); //Nambangan
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24460, 'regionable_type'=>'village']); //Pare
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24461, 'regionable_type'=>'village']); //Pule
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24462, 'regionable_type'=>'village']); //Sendangijo
                DB::table('regionables')->insert(['region_id'=>2819, 'regionable_id'=>24463, 'regionable_type'=>'village']); //Singodutan
            DB::table('regions')->insert(['id'=>2820, 'parent'=>2811, 'code'=>'5766', 'type'=>'districts', 'name'=>'Districts 5766, City 576, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2820, 'regionable_id'=>2289, 'regionable_type'=>'districts']); //Wuryantoro
            DB::table('regionables')->insert(['region_id'=>2820, 'regionable_id'=>2290, 'regionable_type'=>'districts']); //Manyaran
            DB::table('regionables')->insert(['region_id'=>2820, 'regionable_id'=>2291, 'regionable_type'=>'districts']); //Eromoko
            DB::table('regionables')->insert(['region_id'=>2820, 'regionable_id'=>2292, 'regionable_type'=>'districts']); //Pracimantoro
                DB::table('regions')->insert(['id'=>2821, 'parent'=>2820, 'code'=>'57664', 'type'=>'village', 'name'=>'Village 57664, Districts 5766, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24494, 'regionable_type'=>'village']); //Banaran
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24495, 'regionable_type'=>'village']); //Gambirmanis
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24496, 'regionable_type'=>'village']); //Gebangharjo
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24497, 'regionable_type'=>'village']); //Gedong
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24498, 'regionable_type'=>'village']); //Glinggang
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24499, 'regionable_type'=>'village']); //Jimbar
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24500, 'regionable_type'=>'village']); //Joho
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24501, 'regionable_type'=>'village']); //Lebak
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24502, 'regionable_type'=>'village']); //Petirsari
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24503, 'regionable_type'=>'village']); //Pracimantoro
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24504, 'regionable_type'=>'village']); //Sambiroto
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24505, 'regionable_type'=>'village']); //Sedayu
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24506, 'regionable_type'=>'village']); //Suci
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24507, 'regionable_type'=>'village']); //Sumberagung
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24508, 'regionable_type'=>'village']); //Trukan
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24509, 'regionable_type'=>'village']); //Tubokarto
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24510, 'regionable_type'=>'village']); //Watangrejo
                DB::table('regionables')->insert(['region_id'=>2821, 'regionable_id'=>24511, 'regionable_type'=>'village']); //Wonodadi
            DB::table('regions')->insert(['id'=>2822, 'parent'=>2811, 'code'=>'5767', 'type'=>'districts', 'name'=>'Districts 5767, City 576, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2822, 'regionable_id'=>2293, 'regionable_type'=>'districts']); //Nguntoronadi
            DB::table('regionables')->insert(['region_id'=>2822, 'regionable_id'=>2294, 'regionable_type'=>'districts']); //Tirtomoyo
            DB::table('regionables')->insert(['region_id'=>2822, 'regionable_id'=>2295, 'regionable_type'=>'districts']); //Baturetno
            DB::table('regionables')->insert(['region_id'=>2822, 'regionable_id'=>2296, 'regionable_type'=>'districts']); //Batuwarno
            DB::table('regionables')->insert(['region_id'=>2822, 'regionable_id'=>2297, 'regionable_type'=>'districts']); //Giriwoyo
            DB::table('regionables')->insert(['region_id'=>2822, 'regionable_id'=>2298, 'regionable_type'=>'districts']); //Karangtengah
            DB::table('regionables')->insert(['region_id'=>2822, 'regionable_id'=>2299, 'regionable_type'=>'districts']); //Giritontro
            DB::table('regionables')->insert(['region_id'=>2822, 'regionable_id'=>2300, 'regionable_type'=>'districts']); //Paranggupito
                DB::table('regions')->insert(['id'=>2823, 'parent'=>2822, 'code'=>'57678', 'type'=>'village', 'name'=>'Village 57678, Districts 5767, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24579, 'regionable_type'=>'village']); //Bayemharjo
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24580, 'regionable_type'=>'village']); //Giritontro
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24581, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24582, 'regionable_type'=>'village']); //Ngargoharjo
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24583, 'regionable_type'=>'village']); //Pucanganom
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24584, 'regionable_type'=>'village']); //Tlogoharjo
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24585, 'regionable_type'=>'village']); //Tlogosari
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24586, 'regionable_type'=>'village']); //Gendayakan
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24587, 'regionable_type'=>'village']); //Gudangharjo
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24588, 'regionable_type'=>'village']); //Gunturharjo
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24589, 'regionable_type'=>'village']); //Johunut
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24590, 'regionable_type'=>'village']); //Ketos
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24591, 'regionable_type'=>'village']); //Paranggupito
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24592, 'regionable_type'=>'village']); //Sambiharjo
                DB::table('regionables')->insert(['region_id'=>2823, 'regionable_id'=>24593, 'regionable_type'=>'village']); //Songbledeg
            DB::table('regions')->insert(['id'=>2824, 'parent'=>2811, 'code'=>'5768', 'type'=>'districts', 'name'=>'Districts 5768, City 576, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2824, 'regionable_id'=>2301, 'regionable_type'=>'districts']); //Ngadirojo
            DB::table('regionables')->insert(['region_id'=>2824, 'regionable_id'=>2302, 'regionable_type'=>'districts']); //Sidoharjo
            DB::table('regionables')->insert(['region_id'=>2824, 'regionable_id'=>2303, 'regionable_type'=>'districts']); //Girimarto
                DB::table('regions')->insert(['id'=>2825, 'parent'=>2824, 'code'=>'57683', 'type'=>'village', 'name'=>'Village 57683, Districts 5768, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24617, 'regionable_type'=>'village']); //Bubakan
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24618, 'regionable_type'=>'village']); //Doho
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24619, 'regionable_type'=>'village']); //Gemawang
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24620, 'regionable_type'=>'village']); //Girimarto
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24621, 'regionable_type'=>'village']); //Giriwarno
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24622, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24623, 'regionable_type'=>'village']); //Jendi
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24624, 'regionable_type'=>'village']); //Nungkulan
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24625, 'regionable_type'=>'village']); //Sanan
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24626, 'regionable_type'=>'village']); //Selorejo
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24627, 'regionable_type'=>'village']); //Semagarduwur
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24628, 'regionable_type'=>'village']); //Sidokerto
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24629, 'regionable_type'=>'village']); //Tambakmerang
                DB::table('regionables')->insert(['region_id'=>2825, 'regionable_id'=>24630, 'regionable_type'=>'village']); //Waleng
            DB::table('regions')->insert(['id'=>2826, 'parent'=>2811, 'code'=>'5769', 'type'=>'districts', 'name'=>'Districts 5769, City 576, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2826, 'regionable_id'=>2304, 'regionable_type'=>'districts']); //Jatisrono
            DB::table('regionables')->insert(['region_id'=>2826, 'regionable_id'=>2305, 'regionable_type'=>'districts']); //Jatiroto
            DB::table('regionables')->insert(['region_id'=>2826, 'regionable_id'=>2306, 'regionable_type'=>'districts']); //Jatipurno
            DB::table('regionables')->insert(['region_id'=>2826, 'regionable_id'=>2307, 'regionable_type'=>'districts']); //Slogohimo
            DB::table('regionables')->insert(['region_id'=>2826, 'regionable_id'=>2308, 'regionable_type'=>'districts']); //Purwantoro
            DB::table('regionables')->insert(['region_id'=>2826, 'regionable_id'=>2309, 'regionable_type'=>'districts']); //Kismantoro
            DB::table('regionables')->insert(['region_id'=>2826, 'regionable_id'=>2310, 'regionable_type'=>'districts']); //Bulukerto
            DB::table('regionables')->insert(['region_id'=>2826, 'regionable_id'=>2311, 'regionable_type'=>'districts']); //Puhpelem
                DB::table('regions')->insert(['id'=>2827, 'parent'=>2826, 'code'=>'57698', 'type'=>'village', 'name'=>'Village 57698, Districts 5769, City 576, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2827, 'regionable_id'=>24726, 'regionable_type'=>'village']); //Giriharjo
                DB::table('regionables')->insert(['region_id'=>2827, 'regionable_id'=>24727, 'regionable_type'=>'village']); //Golo
                DB::table('regionables')->insert(['region_id'=>2827, 'regionable_id'=>24728, 'regionable_type'=>'village']); //Nguneng
                DB::table('regionables')->insert(['region_id'=>2827, 'regionable_id'=>24729, 'regionable_type'=>'village']); //Puhpelem
                DB::table('regionables')->insert(['region_id'=>2827, 'regionable_id'=>24730, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>2827, 'regionable_id'=>24731, 'regionable_type'=>'village']); //Tengger
        DB::table('regions')->insert(['id'=>2828, 'parent'=>2145, 'code'=>'577', 'type'=>'city', 'name'=>'City 577, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2828, 'regionable_id'=>113, 'regionable_type'=>'city']); //Karanganyar regencies
            DB::table('regions')->insert(['id'=>2829, 'parent'=>2828, 'code'=>'5771', 'type'=>'districts', 'name'=>'Districts 5771, City 577, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2829, 'regionable_id'=>2207, 'regionable_type'=>'districts']); //Karanganyar
            DB::table('regionables')->insert(['region_id'=>2829, 'regionable_id'=>2208, 'regionable_type'=>'districts']); //Kerjo
            DB::table('regionables')->insert(['region_id'=>2829, 'regionable_id'=>2209, 'regionable_type'=>'districts']); //Karangpandan
            DB::table('regionables')->insert(['region_id'=>2829, 'regionable_id'=>2210, 'regionable_type'=>'districts']); //Jumapolo
            DB::table('regionables')->insert(['region_id'=>2829, 'regionable_id'=>2211, 'regionable_type'=>'districts']); //Mojogedang
                DB::table('regions')->insert(['id'=>2830, 'parent'=>2829, 'code'=>'57716', 'type'=>'village', 'name'=>'Village 57716, Districts 5771, City 577, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23414, 'regionable_type'=>'village']); //Bejen
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23415, 'regionable_type'=>'village']); //Bolong
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23416, 'regionable_type'=>'village']); //Delingan
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23417, 'regionable_type'=>'village']); //Gayamdompo
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23418, 'regionable_type'=>'village']); //Gedong
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23419, 'regionable_type'=>'village']); //Jantiharjo
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23420, 'regionable_type'=>'village']); //Lalung
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23442, 'regionable_type'=>'village']); //Kadipiro
                DB::table('regionables')->insert(['region_id'=>2830, 'regionable_id'=>23454, 'regionable_type'=>'village']); //Munggur
            DB::table('regions')->insert(['id'=>2831, 'parent'=>2828, 'code'=>'5772', 'type'=>'districts', 'name'=>'Districts 5772, City 577, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2831, 'regionable_id'=>2212, 'regionable_type'=>'districts']); //Tasikmadu
                DB::table('regions')->insert(['id'=>2832, 'parent'=>2831, 'code'=>'57721', 'type'=>'village', 'name'=>'Village 57721, Districts 5772, City 577, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2832, 'regionable_id'=>23467, 'regionable_type'=>'village']); //Ngijo
                DB::table('regions')->insert(['id'=>2833, 'parent'=>2831, 'code'=>'57722', 'type'=>'village', 'name'=>'Village 57722, Districts 5772, City 577, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23468, 'regionable_type'=>'village']); //Buran
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23469, 'regionable_type'=>'village']); //Gaum
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23470, 'regionable_type'=>'village']); //Kalijirak
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23471, 'regionable_type'=>'village']); //Kaling
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23472, 'regionable_type'=>'village']); //Karangmojo
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23473, 'regionable_type'=>'village']); //Pandeyan
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23474, 'regionable_type'=>'village']); //Papahan
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23475, 'regionable_type'=>'village']); //Suruh
                DB::table('regionables')->insert(['region_id'=>2833, 'regionable_id'=>23476, 'regionable_type'=>'village']); //Wonolopo
            DB::table('regions')->insert(['id'=>2834, 'parent'=>2828, 'code'=>'5773', 'type'=>'districts', 'name'=>'Districts 5773, City 577, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2834, 'regionable_id'=>2213, 'regionable_type'=>'districts']); //Jaten
            DB::table('regionables')->insert(['region_id'=>2834, 'regionable_id'=>2214, 'regionable_type'=>'districts']); //Ngargoyoso
                DB::table('regions')->insert(['id'=>2835, 'parent'=>2834, 'code'=>'57731', 'type'=>'village', 'name'=>'Village 57731, Districts 5773, City 577, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23477, 'regionable_type'=>'village']); //Brujul
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23478, 'regionable_type'=>'village']); //Dagen
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23479, 'regionable_type'=>'village']); //Jaten
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23480, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23481, 'regionable_type'=>'village']); //Jetis
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23482, 'regionable_type'=>'village']); //Ngringo
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23483, 'regionable_type'=>'village']); //Sroyo
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23484, 'regionable_type'=>'village']); //Suruhkalang
                DB::table('regionables')->insert(['region_id'=>2835, 'regionable_id'=>23485, 'regionable_type'=>'village']); //Dukuh
            DB::table('regions')->insert(['id'=>2836, 'parent'=>2828, 'code'=>'5775', 'type'=>'districts', 'name'=>'Districts 5775, City 577, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2836, 'regionable_id'=>2208, 'regionable_type'=>'districts']); //Kerjo
            DB::table('regionables')->insert(['region_id'=>2836, 'regionable_id'=>2211, 'regionable_type'=>'districts']); //Mojogedang
                DB::table('regions')->insert(['id'=>2837, 'parent'=>2836, 'code'=>'57752', 'type'=>'village', 'name'=>'Village 57752, Districts 5775, City 577, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23455, 'regionable_type'=>'village']); //Buntar
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23456, 'regionable_type'=>'village']); //Gebyok
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23457, 'regionable_type'=>'village']); //Gentungan
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23458, 'regionable_type'=>'village']); //Kaliboto
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23459, 'regionable_type'=>'village']); //Kedungjeruk
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23460, 'regionable_type'=>'village']); //Mojogedang
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23461, 'regionable_type'=>'village']); //Mojoroto
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23462, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23463, 'regionable_type'=>'village']); //Pendem
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23464, 'regionable_type'=>'village']); //Pereng
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23465, 'regionable_type'=>'village']); //Pojok
                DB::table('regionables')->insert(['region_id'=>2837, 'regionable_id'=>23466, 'regionable_type'=>'village']); //Sewurejo
            DB::table('regions')->insert(['id'=>2838, 'parent'=>2828, 'code'=>'5776', 'type'=>'districts', 'name'=>'Districts 5776, City 577, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2838, 'regionable_id'=>2215, 'regionable_type'=>'districts']); //Kebakkramat
                DB::table('regions')->insert(['id'=>2839, 'parent'=>2838, 'code'=>'57762', 'type'=>'village', 'name'=>'Village 57762, Districts 5776, City 577, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23494, 'regionable_type'=>'village']); //Alastuwo
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23495, 'regionable_type'=>'village']); //Banjarharjo
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23496, 'regionable_type'=>'village']); //Kaliwuluh
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23497, 'regionable_type'=>'village']); //Kebak
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23498, 'regionable_type'=>'village']); //Kemiri
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23499, 'regionable_type'=>'village']); //Macanan
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23500, 'regionable_type'=>'village']); //Malanggaten
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23501, 'regionable_type'=>'village']); //Nangsri
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23502, 'regionable_type'=>'village']); //Pulosari
                DB::table('regionables')->insert(['region_id'=>2839, 'regionable_id'=>23503, 'regionable_type'=>'village']); //Waru
            DB::table('regions')->insert(['id'=>2840, 'parent'=>2828, 'code'=>'5778', 'type'=>'districts', 'name'=>'Districts 5778, City 577, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2840, 'regionable_id'=>2210, 'regionable_type'=>'districts']); //Jumapolo
            DB::table('regionables')->insert(['region_id'=>2840, 'regionable_id'=>2216, 'regionable_type'=>'districts']); //Matesih
            DB::table('regionables')->insert(['region_id'=>2840, 'regionable_id'=>2217, 'regionable_type'=>'districts']); //Jumantono
            DB::table('regionables')->insert(['region_id'=>2840, 'regionable_id'=>2218, 'regionable_type'=>'districts']); //Jatipuro
            DB::table('regionables')->insert(['region_id'=>2840, 'regionable_id'=>2219, 'regionable_type'=>'districts']); //Jatiyoso
                DB::table('regions')->insert(['id'=>2841, 'parent'=>2840, 'code'=>'57785', 'type'=>'village', 'name'=>'Village 57785, Districts 5778, City 577, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23534, 'regionable_type'=>'village']); //Beruk
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23535, 'regionable_type'=>'village']); //Jatisawit
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23536, 'regionable_type'=>'village']); //Jatiyoso
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23537, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23538, 'regionable_type'=>'village']); //Petung
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23539, 'regionable_type'=>'village']); //Tlobo
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23540, 'regionable_type'=>'village']); //Wonokeling
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23541, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regionables')->insert(['region_id'=>2841, 'regionable_id'=>23542, 'regionable_type'=>'village']); //Wukirsawit
            DB::table('regions')->insert(['id'=>2842, 'parent'=>2828, 'code'=>'5779', 'type'=>'districts', 'name'=>'Districts 5779, City 577, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2842, 'regionable_id'=>2209, 'regionable_type'=>'districts']); //Karangpandan
            DB::table('regionables')->insert(['region_id'=>2842, 'regionable_id'=>2214, 'regionable_type'=>'districts']); //Ngargoyoso
            DB::table('regionables')->insert(['region_id'=>2842, 'regionable_id'=>2220, 'regionable_type'=>'districts']); //Tawangmangu
            DB::table('regionables')->insert(['region_id'=>2842, 'regionable_id'=>2221, 'regionable_type'=>'districts']); //Jenawi
                DB::table('regions')->insert(['id'=>2843, 'parent'=>2842, 'code'=>'57794', 'type'=>'village', 'name'=>'Village 57794, Districts 5779, City 577, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23553, 'regionable_type'=>'village']); //Anggrasmanis
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23554, 'regionable_type'=>'village']); //Balong
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23555, 'regionable_type'=>'village']); //Gumeng
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23556, 'regionable_type'=>'village']); //Jenawi
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23557, 'regionable_type'=>'village']); //Lempong
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23558, 'regionable_type'=>'village']); //Menjing
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23559, 'regionable_type'=>'village']); //Seloromo
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23560, 'regionable_type'=>'village']); //Sidomukti
                DB::table('regionables')->insert(['region_id'=>2843, 'regionable_id'=>23561, 'regionable_type'=>'village']); //Trengguli
        DB::table('regions')->insert(['id'=>2844, 'parent'=>2145, 'code'=>'581', 'type'=>'city', 'name'=>'City 581, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2844, 'regionable_id'=>118, 'regionable_type'=>'city']); //Grobogan regencies
            DB::table('regions')->insert(['id'=>2845, 'parent'=>2844, 'code'=>'5811', 'type'=>'districts', 'name'=>'Districts 5811, City 581, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2845, 'regionable_id'=>2312, 'regionable_type'=>'districts']); //Purwodadi
                DB::table('regions')->insert(['id'=>2846, 'parent'=>2845, 'code'=>'58111', 'type'=>'village', 'name'=>'Village 58111, Districts 5811, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2846, 'regionable_id'=>24732, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regions')->insert(['id'=>2847, 'parent'=>2845, 'code'=>'58112', 'type'=>'village', 'name'=>'Village 58112, Districts 5811, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2847, 'regionable_id'=>24733, 'regionable_type'=>'village']); //Kuripan
                DB::table('regions')->insert(['id'=>2848, 'parent'=>2845, 'code'=>'58113', 'type'=>'village', 'name'=>'Village 58113, Districts 5811, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2848, 'regionable_id'=>24734, 'regionable_type'=>'village']); //Danyang
                DB::table('regions')->insert(['id'=>2849, 'parent'=>2845, 'code'=>'58114', 'type'=>'village', 'name'=>'Village 58114, Districts 5811, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24735, 'regionable_type'=>'village']); //Candisari
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24736, 'regionable_type'=>'village']); //Cingkrong
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24737, 'regionable_type'=>'village']); //Genuksuran
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24738, 'regionable_type'=>'village']); //Kalongan
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24739, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24740, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24741, 'regionable_type'=>'village']); //Kedungrejo
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24742, 'regionable_type'=>'village']); //Nambuhan
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24743, 'regionable_type'=>'village']); //Ngembak
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24744, 'regionable_type'=>'village']); //Nglobar
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24745, 'regionable_type'=>'village']); //Ngraji
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24746, 'regionable_type'=>'village']); //Pulorejo
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24747, 'regionable_type'=>'village']); //Putat
                DB::table('regionables')->insert(['region_id'=>2849, 'regionable_id'=>24748, 'regionable_type'=>'village']); //Warukaranganyar
            DB::table('regions')->insert(['id'=>2850, 'parent'=>2844, 'code'=>'5815', 'type'=>'districts', 'name'=>'Districts 5815, City 581, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2850, 'regionable_id'=>2313, 'regionable_type'=>'districts']); //Grobogan
            DB::table('regionables')->insert(['region_id'=>2850, 'regionable_id'=>2314, 'regionable_type'=>'districts']); //Brati
            DB::table('regionables')->insert(['region_id'=>2850, 'regionable_id'=>2315, 'regionable_type'=>'districts']); //Klambu
                DB::table('regions')->insert(['id'=>2851, 'parent'=>2850, 'code'=>'58154', 'type'=>'village', 'name'=>'Village 58154, Districts 5815, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24770, 'regionable_type'=>'village']); //Jenengan
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24771, 'regionable_type'=>'village']); //Kandangrejo
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24772, 'regionable_type'=>'village']); //Klambu
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24773, 'regionable_type'=>'village']); //Menawan
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24774, 'regionable_type'=>'village']); //Penganten
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24775, 'regionable_type'=>'village']); //Selojari
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24776, 'regionable_type'=>'village']); //Taruman
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24777, 'regionable_type'=>'village']); //Terkesi
                DB::table('regionables')->insert(['region_id'=>2851, 'regionable_id'=>24778, 'regionable_type'=>'village']); //Wandankemiri
            DB::table('regions')->insert(['id'=>2852, 'parent'=>2844, 'code'=>'5816', 'type'=>'districts', 'name'=>'Districts 5816, City 581, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2852, 'regionable_id'=>2316, 'regionable_type'=>'districts']); //Penawangan
            DB::table('regionables')->insert(['region_id'=>2852, 'regionable_id'=>2317, 'regionable_type'=>'districts']); //Godong
            DB::table('regionables')->insert(['region_id'=>2852, 'regionable_id'=>2318, 'regionable_type'=>'districts']); //Karangrayung
            DB::table('regionables')->insert(['region_id'=>2852, 'regionable_id'=>2319, 'regionable_type'=>'districts']); //Gubug
            DB::table('regionables')->insert(['region_id'=>2852, 'regionable_id'=>2320, 'regionable_type'=>'districts']); //Tegowanu
            DB::table('regionables')->insert(['region_id'=>2852, 'regionable_id'=>2321, 'regionable_type'=>'districts']); //Tanggungharjo
            DB::table('regionables')->insert(['region_id'=>2852, 'regionable_id'=>2322, 'regionable_type'=>'districts']); //Kedungjati
                DB::table('regions')->insert(['id'=>2853, 'parent'=>2852, 'code'=>'58167', 'type'=>'village', 'name'=>'Village 58167, Districts 5816, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24894, 'regionable_type'=>'village']); //Deras
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24895, 'regionable_type'=>'village']); //Jumo
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24896, 'regionable_type'=>'village']); //Kalimaro
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24897, 'regionable_type'=>'village']); //Karanglangu
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24898, 'regionable_type'=>'village']); //Kedungjati
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24899, 'regionable_type'=>'village']); //Kentengsari
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24900, 'regionable_type'=>'village']); //Klitikan
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24901, 'regionable_type'=>'village']); //Ngombak
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24902, 'regionable_type'=>'village']); //Padas
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24903, 'regionable_type'=>'village']); //Panimbo
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24904, 'regionable_type'=>'village']); //Prigi
                DB::table('regionables')->insert(['region_id'=>2853, 'regionable_id'=>24905, 'regionable_type'=>'village']); //Wates
            DB::table('regions')->insert(['id'=>2854, 'parent'=>2844, 'code'=>'5817', 'type'=>'districts', 'name'=>'Districts 5817, City 581, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2854, 'regionable_id'=>2323, 'regionable_type'=>'districts']); //Toroh
            DB::table('regionables')->insert(['region_id'=>2854, 'regionable_id'=>2324, 'regionable_type'=>'districts']); //Geyer
                DB::table('regions')->insert(['id'=>2855, 'parent'=>2854, 'code'=>'58172', 'type'=>'village', 'name'=>'Village 58172, Districts 5817, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24922, 'regionable_type'=>'village']); //Asemrudung
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24923, 'regionable_type'=>'village']); //Bangsri
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24924, 'regionable_type'=>'village']); //Geyer
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24925, 'regionable_type'=>'village']); //Jambangan
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24926, 'regionable_type'=>'village']); //Juworo
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24927, 'regionable_type'=>'village']); //Kalangbancar
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24928, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24929, 'regionable_type'=>'village']); //Ledokdawan
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24930, 'regionable_type'=>'village']); //Monggot
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24931, 'regionable_type'=>'village']); //Ngrandu
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24932, 'regionable_type'=>'village']); //Rambat
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24933, 'regionable_type'=>'village']); //Sobo
                DB::table('regionables')->insert(['region_id'=>2855, 'regionable_id'=>24934, 'regionable_type'=>'village']); //Suru
            DB::table('regions')->insert(['id'=>2856, 'parent'=>2844, 'code'=>'5818', 'type'=>'districts', 'name'=>'Districts 5818, City 581, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2856, 'regionable_id'=>2325, 'regionable_type'=>'districts']); //Pulokulon
            DB::table('regionables')->insert(['region_id'=>2856, 'regionable_id'=>2326, 'regionable_type'=>'districts']); //Kradenan
            DB::table('regionables')->insert(['region_id'=>2856, 'regionable_id'=>2327, 'regionable_type'=>'districts']); //Gabus
                DB::table('regions')->insert(['id'=>2857, 'parent'=>2856, 'code'=>'58183', 'type'=>'village', 'name'=>'Village 58183, Districts 5818, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24962, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24963, 'regionable_type'=>'village']); //Bendoharjo
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24964, 'regionable_type'=>'village']); //Gabus
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24965, 'regionable_type'=>'village']); //Kalipang
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24966, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24967, 'regionable_type'=>'village']); //Keyongan
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24968, 'regionable_type'=>'village']); //Nglinduk
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24969, 'regionable_type'=>'village']); //Pandanharum
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24970, 'regionable_type'=>'village']); //Pelem
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24971, 'regionable_type'=>'village']); //Sulursari
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24972, 'regionable_type'=>'village']); //Suwatu
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24973, 'regionable_type'=>'village']); //Tahunan
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24974, 'regionable_type'=>'village']); //Tlogotirto
                DB::table('regionables')->insert(['region_id'=>2857, 'regionable_id'=>24975, 'regionable_type'=>'village']); //Tunggulrejo
            DB::table('regions')->insert(['id'=>2858, 'parent'=>2844, 'code'=>'5819', 'type'=>'districts', 'name'=>'Districts 5819, City 581, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2858, 'regionable_id'=>2328, 'regionable_type'=>'districts']); //Tawangharjo
            DB::table('regionables')->insert(['region_id'=>2858, 'regionable_id'=>2329, 'regionable_type'=>'districts']); //Wirosari
            DB::table('regionables')->insert(['region_id'=>2858, 'regionable_id'=>2330, 'regionable_type'=>'districts']); //Ngaringan
                DB::table('regions')->insert(['id'=>2859, 'parent'=>2858, 'code'=>'58193', 'type'=>'village', 'name'=>'Village 58193, Districts 5819, City 581, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25000, 'regionable_type'=>'village']); //Bandungsari
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25001, 'regionable_type'=>'village']); //Belor
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25002, 'regionable_type'=>'village']); //Kalangdosari
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25003, 'regionable_type'=>'village']); //Kalanglundo
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25004, 'regionable_type'=>'village']); //Ngaraparap
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25005, 'regionable_type'=>'village']); //Ngaringan
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25006, 'regionable_type'=>'village']); //Pendem
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25007, 'regionable_type'=>'village']); //Sarirejo
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25008, 'regionable_type'=>'village']); //Sendangrejo
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25009, 'regionable_type'=>'village']); //Sumberagung
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25010, 'regionable_type'=>'village']); //Tanjungharjo
                DB::table('regionables')->insert(['region_id'=>2859, 'regionable_id'=>25011, 'regionable_type'=>'village']); //Truwolu
        DB::table('regions')->insert(['id'=>2860, 'parent'=>2145, 'code'=>'582', 'type'=>'city', 'name'=>'City 582, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2860, 'regionable_id'=>119, 'regionable_type'=>'city']); //Blora regencies
            DB::table('regions')->insert(['id'=>2861, 'parent'=>2860, 'code'=>'5821', 'type'=>'districts', 'name'=>'Districts 5821, City 582, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2861, 'regionable_id'=>2331, 'regionable_type'=>'districts']); //Blora Kota
                DB::table('regions')->insert(['id'=>2862, 'parent'=>2861, 'code'=>'58211', 'type'=>'village', 'name'=>'Village 58211, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2862, 'regionable_id'=>25012, 'regionable_type'=>'village']); //Tempelan
                DB::table('regions')->insert(['id'=>2863, 'parent'=>2861, 'code'=>'58212', 'type'=>'village', 'name'=>'Village 58212, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2863, 'regionable_id'=>25013, 'regionable_type'=>'village']); //Kunden
                DB::table('regions')->insert(['id'=>2864, 'parent'=>2861, 'code'=>'58213', 'type'=>'village', 'name'=>'Village 58213, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2864, 'regionable_id'=>25014, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>2864, 'regionable_id'=>25015, 'regionable_type'=>'village']); //Sonorejo
                DB::table('regions')->insert(['id'=>2865, 'parent'=>2861, 'code'=>'58214', 'type'=>'village', 'name'=>'Village 58214, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2865, 'regionable_id'=>25016, 'regionable_type'=>'village']); //Jetis
                DB::table('regionables')->insert(['region_id'=>2865, 'regionable_id'=>25017, 'regionable_type'=>'village']); //Tambahrejo
                DB::table('regions')->insert(['id'=>2866, 'parent'=>2861, 'code'=>'58215', 'type'=>'village', 'name'=>'Village 58215, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2866, 'regionable_id'=>25018, 'regionable_type'=>'village']); //Mlangsen
                DB::table('regions')->insert(['id'=>2867, 'parent'=>2861, 'code'=>'58216', 'type'=>'village', 'name'=>'Village 58216, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2867, 'regionable_id'=>25019, 'regionable_type'=>'village']); //Beran
                DB::table('regions')->insert(['id'=>2868, 'parent'=>2861, 'code'=>'58217', 'type'=>'village', 'name'=>'Village 58217, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2868, 'regionable_id'=>25020, 'regionable_type'=>'village']); //Kedung Jenar
                DB::table('regions')->insert(['id'=>2869, 'parent'=>2861, 'code'=>'58218', 'type'=>'village', 'name'=>'Village 58218, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2869, 'regionable_id'=>25021, 'regionable_type'=>'village']); //Bangkle
                DB::table('regions')->insert(['id'=>2870, 'parent'=>2861, 'code'=>'58219', 'type'=>'village', 'name'=>'Village 58219, Districts 5821, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25022, 'regionable_type'=>'village']); //Andongrejo
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25023, 'regionable_type'=>'village']); //Jejeruk
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25024, 'regionable_type'=>'village']); //Jepangrejo
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25025, 'regionable_type'=>'village']); //Kamolan
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25026, 'regionable_type'=>'village']); //Karangjati
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25027, 'regionable_type'=>'village']); //Ngadipurwo
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25028, 'regionable_type'=>'village']); //Ngampel
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25029, 'regionable_type'=>'village']); //Patalan
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25030, 'regionable_type'=>'village']); //Pelem
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25031, 'regionable_type'=>'village']); //Plantungan
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25032, 'regionable_type'=>'village']); //Purworejo
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25033, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25034, 'regionable_type'=>'village']); //Sendangharjo
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25035, 'regionable_type'=>'village']); //Tambaksari
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25036, 'regionable_type'=>'village']); //Tegalgunung
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25037, 'regionable_type'=>'village']); //Tempuran
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25038, 'regionable_type'=>'village']); //Tempurejo
                DB::table('regionables')->insert(['region_id'=>2870, 'regionable_id'=>25039, 'regionable_type'=>'village']); //Temurejo
            DB::table('regions')->insert(['id'=>2871, 'parent'=>2860, 'code'=>'5825', 'type'=>'districts', 'name'=>'Districts 5825, City 582, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2871, 'regionable_id'=>2332, 'regionable_type'=>'districts']); //Tunjungan
            DB::table('regionables')->insert(['region_id'=>2871, 'regionable_id'=>2333, 'regionable_type'=>'districts']); //Banjarejo
            DB::table('regionables')->insert(['region_id'=>2871, 'regionable_id'=>2334, 'regionable_type'=>'districts']); //Ngawen
            DB::table('regionables')->insert(['region_id'=>2871, 'regionable_id'=>2335, 'regionable_type'=>'districts']); //Kunduran
            DB::table('regionables')->insert(['region_id'=>2871, 'regionable_id'=>2336, 'regionable_type'=>'districts']); //Todanan
            DB::table('regionables')->insert(['region_id'=>2871, 'regionable_id'=>2337, 'regionable_type'=>'districts']); //Japah
                DB::table('regions')->insert(['id'=>2872, 'parent'=>2871, 'code'=>'58257', 'type'=>'village', 'name'=>'Village 58257, Districts 5825, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25155, 'regionable_type'=>'village']); //Beganjing
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25156, 'regionable_type'=>'village']); //Bogem
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25157, 'regionable_type'=>'village']); //Bogorejo
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25158, 'regionable_type'=>'village']); //Dologan
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25159, 'regionable_type'=>'village']); //Gaplokan
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25160, 'regionable_type'=>'village']); //Harjowinangun
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25161, 'regionable_type'=>'village']); //Japah
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25162, 'regionable_type'=>'village']); //Kalinanas
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25163, 'regionable_type'=>'village']); //Krocok
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25164, 'regionable_type'=>'village']); //Ngapus
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25165, 'regionable_type'=>'village']); //Ngiyono
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25166, 'regionable_type'=>'village']); //Ngrambitan
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25167, 'regionable_type'=>'village']); //Padaan
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25168, 'regionable_type'=>'village']); //Pengkolrejo
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25169, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25170, 'regionable_type'=>'village']); //Tengger
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25171, 'regionable_type'=>'village']); //Tlogowungu
                DB::table('regionables')->insert(['region_id'=>2872, 'regionable_id'=>25172, 'regionable_type'=>'village']); //Wotbakah
            DB::table('regions')->insert(['id'=>2873, 'parent'=>2860, 'code'=>'5826', 'type'=>'districts', 'name'=>'Districts 5826, City 582, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2873, 'regionable_id'=>2338, 'regionable_type'=>'districts']); //Jepon
            DB::table('regionables')->insert(['region_id'=>2873, 'regionable_id'=>2339, 'regionable_type'=>'districts']); //Bogorejo
                DB::table('regions')->insert(['id'=>2874, 'parent'=>2873, 'code'=>'58262', 'type'=>'village', 'name'=>'Village 58262, Districts 5826, City 582, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25198, 'regionable_type'=>'village']); //Bogorejo
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25199, 'regionable_type'=>'village']); //Gandu
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25200, 'regionable_type'=>'village']); //Gayam
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25201, 'regionable_type'=>'village']); //Gembol
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25202, 'regionable_type'=>'village']); //Gombang
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25203, 'regionable_type'=>'village']); //Jeruk
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25204, 'regionable_type'=>'village']); //Jurangjero
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25205, 'regionable_type'=>'village']); //Karang
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25206, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25207, 'regionable_type'=>'village']); //Nglengkir
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25208, 'regionable_type'=>'village']); //Prantaan
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25209, 'regionable_type'=>'village']); //Sarirejo
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25210, 'regionable_type'=>'village']); //Sendangrejo
                DB::table('regionables')->insert(['region_id'=>2874, 'regionable_id'=>25211, 'regionable_type'=>'village']); //Tempurejo
        DB::table('regions')->insert(['id'=>2875, 'parent'=>2145, 'code'=>'583', 'type'=>'city', 'name'=>'City 583, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2875, 'regionable_id'=>119, 'regionable_type'=>'city']); //Blora regencies
            DB::table('regions')->insert(['id'=>2876, 'parent'=>2875, 'code'=>'5831', 'type'=>'districts', 'name'=>'Districts 5831, City 583, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2876, 'regionable_id'=>2340, 'regionable_type'=>'districts']); //Cepu
                DB::table('regions')->insert(['id'=>2877, 'parent'=>2876, 'code'=>'58311', 'type'=>'village', 'name'=>'Village 58311, Districts 5831, City 583, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2877, 'regionable_id'=>25212, 'regionable_type'=>'village']); //Balun
                DB::table('regions')->insert(['id'=>2878, 'parent'=>2876, 'code'=>'58312', 'type'=>'village', 'name'=>'Village 58312, Districts 5831, City 583, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2878, 'regionable_id'=>25213, 'regionable_type'=>'village']); //Cepu
                DB::table('regions')->insert(['id'=>2879, 'parent'=>2876, 'code'=>'58313', 'type'=>'village', 'name'=>'Village 58313, Districts 5831, City 583, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2879, 'regionable_id'=>25214, 'regionable_type'=>'village']); //Ngelo
                DB::table('regions')->insert(['id'=>2880, 'parent'=>2876, 'code'=>'58314', 'type'=>'village', 'name'=>'Village 58314, Districts 5831, City 583, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2880, 'regionable_id'=>25215, 'regionable_type'=>'village']); //Ngroto
                DB::table('regions')->insert(['id'=>2881, 'parent'=>2876, 'code'=>'58315', 'type'=>'village', 'name'=>'Village 58315, Districts 5831, City 583, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25216, 'regionable_type'=>'village']); //Cabeyan (cabean)
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25217, 'regionable_type'=>'village']); //Gadon
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25218, 'regionable_type'=>'village']); //Getas
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25219, 'regionable_type'=>'village']); //Jipang
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25220, 'regionable_type'=>'village']); //Kapuan
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25221, 'regionable_type'=>'village']); //Karangboyo
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25222, 'regionable_type'=>'village']); //Kentong
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25223, 'regionable_type'=>'village']); //Mernung
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25224, 'regionable_type'=>'village']); //Mulyorejo
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25225, 'regionable_type'=>'village']); //Nglanjuk
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25226, 'regionable_type'=>'village']); //Ngloram
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25227, 'regionable_type'=>'village']); //Sumberpitu
                DB::table('regionables')->insert(['region_id'=>2881, 'regionable_id'=>25228, 'regionable_type'=>'village']); //Tambakromo
            DB::table('regions')->insert(['id'=>2882, 'parent'=>2875, 'code'=>'5837', 'type'=>'districts', 'name'=>'Districts 5837, City 583, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2882, 'regionable_id'=>2341, 'regionable_type'=>'districts']); //Sambong
            DB::table('regionables')->insert(['region_id'=>2882, 'regionable_id'=>2342, 'regionable_type'=>'districts']); //Jiken
                DB::table('regions')->insert(['id'=>2883, 'parent'=>2882, 'code'=>'58372', 'type'=>'village', 'name'=>'Village 58372, Districts 5837, City 583, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25239, 'regionable_type'=>'village']); //Bangowan
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25240, 'regionable_type'=>'village']); //Bleboh
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25241, 'regionable_type'=>'village']); //Cabak
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25242, 'regionable_type'=>'village']); //Genjahan
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25243, 'regionable_type'=>'village']); //Janjang
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25244, 'regionable_type'=>'village']); //Jiken
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25245, 'regionable_type'=>'village']); //Jiworejo
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25246, 'regionable_type'=>'village']); //Ketringan
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25247, 'regionable_type'=>'village']); //Nglebur
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25248, 'regionable_type'=>'village']); //Nglobo
                DB::table('regionables')->insert(['region_id'=>2883, 'regionable_id'=>25249, 'regionable_type'=>'village']); //Singonegoro
            DB::table('regions')->insert(['id'=>2884, 'parent'=>2875, 'code'=>'5838', 'type'=>'districts', 'name'=>'Districts 5838, City 583, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2884, 'regionable_id'=>2343, 'regionable_type'=>'districts']); //Kedungtuban
            DB::table('regionables')->insert(['region_id'=>2884, 'regionable_id'=>2344, 'regionable_type'=>'districts']); //Randublatung
            DB::table('regionables')->insert(['region_id'=>2884, 'regionable_id'=>2345, 'regionable_type'=>'districts']); //Kradenan
            DB::table('regionables')->insert(['region_id'=>2884, 'regionable_id'=>2346, 'regionable_type'=>'districts']); //Jati
                DB::table('regions')->insert(['id'=>2885, 'parent'=>2884, 'code'=>'58384', 'type'=>'village', 'name'=>'Village 58384, Districts 5838, City 583, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25295, 'regionable_type'=>'village']); //Bangkleyan
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25296, 'regionable_type'=>'village']); //Doplang
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25297, 'regionable_type'=>'village']); //Gabusan
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25298, 'regionable_type'=>'village']); //Gempol
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25299, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25300, 'regionable_type'=>'village']); //Jegong
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25301, 'regionable_type'=>'village']); //Kepoh
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25302, 'regionable_type'=>'village']); //Pelem
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25303, 'regionable_type'=>'village']); //Pengkoljagong
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25304, 'regionable_type'=>'village']); //Randulawang
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25305, 'regionable_type'=>'village']); //Singget
                DB::table('regionables')->insert(['region_id'=>2885, 'regionable_id'=>25306, 'regionable_type'=>'village']); //Tobo
        DB::table('regions')->insert(['id'=>2886, 'parent'=>2145, 'code'=>'591', 'type'=>'city', 'name'=>'City 591, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2886, 'regionable_id'=>120, 'regionable_type'=>'city']); //Pati regencies
            DB::table('regions')->insert(['id'=>2887, 'parent'=>2886, 'code'=>'5911', 'type'=>'districts', 'name'=>'Districts 5911, City 591, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2887, 'regionable_id'=>2347, 'regionable_type'=>'districts']); //Pati
                DB::table('regions')->insert(['id'=>2888, 'parent'=>2887, 'code'=>'59111', 'type'=>'village', 'name'=>'Village 59111, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2888, 'regionable_id'=>25307, 'regionable_type'=>'village']); //Pati Lor
                DB::table('regionables')->insert(['region_id'=>2888, 'regionable_id'=>25308, 'regionable_type'=>'village']); //Sidokerto
                DB::table('regions')->insert(['id'=>2889, 'parent'=>2887, 'code'=>'59112', 'type'=>'village', 'name'=>'Village 59112, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2889, 'regionable_id'=>25309, 'regionable_type'=>'village']); //Ngarus
                DB::table('regionables')->insert(['region_id'=>2889, 'regionable_id'=>25310, 'regionable_type'=>'village']); //Winong
                DB::table('regions')->insert(['id'=>2890, 'parent'=>2887, 'code'=>'59113', 'type'=>'village', 'name'=>'Village 59113, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2890, 'regionable_id'=>25311, 'regionable_type'=>'village']); //Plangitan
                DB::table('regionables')->insert(['region_id'=>2890, 'regionable_id'=>25312, 'regionable_type'=>'village']); //Puri
                DB::table('regions')->insert(['id'=>2891, 'parent'=>2887, 'code'=>'59114', 'type'=>'village', 'name'=>'Village 59114, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2891, 'regionable_id'=>25313, 'regionable_type'=>'village']); //Blaru
                DB::table('regionables')->insert(['region_id'=>2891, 'regionable_id'=>25314, 'regionable_type'=>'village']); //Pati Kidul
                DB::table('regions')->insert(['id'=>2892, 'parent'=>2887, 'code'=>'59115', 'type'=>'village', 'name'=>'Village 59115, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2892, 'regionable_id'=>25315, 'regionable_type'=>'village']); //Pati Wetan
                DB::table('regions')->insert(['id'=>2893, 'parent'=>2887, 'code'=>'59116', 'type'=>'village', 'name'=>'Village 59116, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2893, 'regionable_id'=>25316, 'regionable_type'=>'village']); //Gajahmati
                DB::table('regionables')->insert(['region_id'=>2893, 'regionable_id'=>25317, 'regionable_type'=>'village']); //Panjunan
                DB::table('regionables')->insert(['region_id'=>2893, 'regionable_id'=>25318, 'regionable_type'=>'village']); //Semampir
                DB::table('regions')->insert(['id'=>2894, 'parent'=>2887, 'code'=>'59117', 'type'=>'village', 'name'=>'Village 59117, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2894, 'regionable_id'=>25319, 'regionable_type'=>'village']); //Kalidoro
                DB::table('regionables')->insert(['region_id'=>2894, 'regionable_id'=>25320, 'regionable_type'=>'village']); //Mustokoharjo
                DB::table('regionables')->insert(['region_id'=>2894, 'regionable_id'=>25321, 'regionable_type'=>'village']); //Sidoharjo
                DB::table('regions')->insert(['id'=>2895, 'parent'=>2887, 'code'=>'59118', 'type'=>'village', 'name'=>'Village 59118, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2895, 'regionable_id'=>25322, 'regionable_type'=>'village']); //Kutoharjo
                DB::table('regionables')->insert(['region_id'=>2895, 'regionable_id'=>25323, 'regionable_type'=>'village']); //Sarirejo
                DB::table('regions')->insert(['id'=>2896, 'parent'=>2887, 'code'=>'59119', 'type'=>'village', 'name'=>'Village 59119, Districts 5911, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25324, 'regionable_type'=>'village']); //Dengkek
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25325, 'regionable_type'=>'village']); //Geritan
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25326, 'regionable_type'=>'village']); //Mulyoharjo
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25327, 'regionable_type'=>'village']); //Ngepungrojo
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25328, 'regionable_type'=>'village']); //Parenggan
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25329, 'regionable_type'=>'village']); //Payang
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25330, 'regionable_type'=>'village']); //Purworejo
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25331, 'regionable_type'=>'village']); //Sinoman
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25332, 'regionable_type'=>'village']); //Sugiharjo
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25333, 'regionable_type'=>'village']); //Tambaharjo
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25334, 'regionable_type'=>'village']); //Tambahsari
                DB::table('regionables')->insert(['region_id'=>2896, 'regionable_id'=>25335, 'regionable_type'=>'village']); //Widorokandang
            DB::table('regions')->insert(['id'=>2897, 'parent'=>2886, 'code'=>'5915', 'type'=>'districts', 'name'=>'Districts 5915, City 591, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2897, 'regionable_id'=>2348, 'regionable_type'=>'districts']); //Wedarijaksa
            DB::table('regionables')->insert(['region_id'=>2897, 'regionable_id'=>2349, 'regionable_type'=>'districts']); //Trangkil
            DB::table('regionables')->insert(['region_id'=>2897, 'regionable_id'=>2350, 'regionable_type'=>'districts']); //Margoyoso
            DB::table('regionables')->insert(['region_id'=>2897, 'regionable_id'=>2351, 'regionable_type'=>'districts']); //Tayu
            DB::table('regionables')->insert(['region_id'=>2897, 'regionable_id'=>2352, 'regionable_type'=>'districts']); //Gunungwungkal
            DB::table('regionables')->insert(['region_id'=>2897, 'regionable_id'=>2353, 'regionable_type'=>'districts']); //Cluwak
            DB::table('regionables')->insert(['region_id'=>2897, 'regionable_id'=>2354, 'regionable_type'=>'districts']); //Dukuhseti
                DB::table('regions')->insert(['id'=>2898, 'parent'=>2897, 'code'=>'59158', 'type'=>'village', 'name'=>'Village 59158, Districts 5915, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25441, 'regionable_type'=>'village']); //Alasdowo
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25442, 'regionable_type'=>'village']); //Bakalan
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25443, 'regionable_type'=>'village']); //Banyutowo
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25444, 'regionable_type'=>'village']); //Dukuhseti
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25445, 'regionable_type'=>'village']); //Dumpil
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25446, 'regionable_type'=>'village']); //Grogolan
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25447, 'regionable_type'=>'village']); //Kembang
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25448, 'regionable_type'=>'village']); //Kenanti
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25449, 'regionable_type'=>'village']); //Ngagel
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25450, 'regionable_type'=>'village']); //Puncel
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25451, 'regionable_type'=>'village']); //Tegalombo
                DB::table('regionables')->insert(['region_id'=>2898, 'regionable_id'=>25452, 'regionable_type'=>'village']); //Wedusan
            DB::table('regions')->insert(['id'=>2899, 'parent'=>2886, 'code'=>'5916', 'type'=>'districts', 'name'=>'Districts 5916, City 591, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2899, 'regionable_id'=>2355, 'regionable_type'=>'districts']); //Tlogowungu
            DB::table('regionables')->insert(['region_id'=>2899, 'regionable_id'=>2356, 'regionable_type'=>'districts']); //Gembong
            DB::table('regionables')->insert(['region_id'=>2899, 'regionable_id'=>2357, 'regionable_type'=>'districts']); //Margorejo
                DB::table('regions')->insert(['id'=>2900, 'parent'=>2899, 'code'=>'59163', 'type'=>'village', 'name'=>'Village 59163, Districts 5916, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25479, 'regionable_type'=>'village']); //Badegan
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25480, 'regionable_type'=>'village']); //Banyuurip
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25481, 'regionable_type'=>'village']); //Bumirejo
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25482, 'regionable_type'=>'village']); //Dadirejo
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25483, 'regionable_type'=>'village']); //Jambean Kidul
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25484, 'regionable_type'=>'village']); //Jimbaran
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25485, 'regionable_type'=>'village']); //Langenharjo
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25486, 'regionable_type'=>'village']); //Langse
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25487, 'regionable_type'=>'village']); //Margorejo
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25488, 'regionable_type'=>'village']); //Metaraman
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25489, 'regionable_type'=>'village']); //Muktiharjo
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25490, 'regionable_type'=>'village']); //Ngawen
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25491, 'regionable_type'=>'village']); //Pegandan
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25492, 'regionable_type'=>'village']); //Penambuhan
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25493, 'regionable_type'=>'village']); //Sokokulon
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25494, 'regionable_type'=>'village']); //Sukobubuk
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25495, 'regionable_type'=>'village']); //Sukoharjo
                DB::table('regionables')->insert(['region_id'=>2900, 'regionable_id'=>25496, 'regionable_type'=>'village']); //Wangunrejo
            DB::table('regions')->insert(['id'=>2901, 'parent'=>2886, 'code'=>'5917', 'type'=>'districts', 'name'=>'Districts 5917, City 591, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2901, 'regionable_id'=>2358, 'regionable_type'=>'districts']); //Kayen
            DB::table('regionables')->insert(['region_id'=>2901, 'regionable_id'=>2359, 'regionable_type'=>'districts']); //Sukolilo
            DB::table('regionables')->insert(['region_id'=>2901, 'regionable_id'=>2360, 'regionable_type'=>'districts']); //Gabus
            DB::table('regionables')->insert(['region_id'=>2901, 'regionable_id'=>2361, 'regionable_type'=>'districts']); //Tambakromo
                DB::table('regions')->insert(['id'=>2902, 'parent'=>2901, 'code'=>'59174', 'type'=>'village', 'name'=>'Village 59174, Districts 5917, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25554, 'regionable_type'=>'village']); //Angkatan Kidul
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25555, 'regionable_type'=>'village']); //Angkatan Lor
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25556, 'regionable_type'=>'village']); //Karangawen
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25557, 'regionable_type'=>'village']); //Karangmulyo
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25558, 'regionable_type'=>'village']); //Karangwono
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25559, 'regionable_type'=>'village']); //Keben
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25560, 'regionable_type'=>'village']); //Kedalingan
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25561, 'regionable_type'=>'village']); //Larangan
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25562, 'regionable_type'=>'village']); //Maitan
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25563, 'regionable_type'=>'village']); //Mangunrekso
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25564, 'regionable_type'=>'village']); //Mojomulyo
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25565, 'regionable_type'=>'village']); //Pakis
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25566, 'regionable_type'=>'village']); //Sinomwidodo
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25567, 'regionable_type'=>'village']); //Sitirejo
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25568, 'regionable_type'=>'village']); //Tambahagung
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25569, 'regionable_type'=>'village']); //Tambaharjo
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25570, 'regionable_type'=>'village']); //Tambakromo
                DB::table('regionables')->insert(['region_id'=>2902, 'regionable_id'=>25571, 'regionable_type'=>'village']); //Wukirsari
            DB::table('regions')->insert(['id'=>2903, 'parent'=>2886, 'code'=>'5918', 'type'=>'districts', 'name'=>'Districts 5918, City 591, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2903, 'regionable_id'=>2362, 'regionable_type'=>'districts']); //Winong
            DB::table('regionables')->insert(['region_id'=>2903, 'regionable_id'=>2363, 'regionable_type'=>'districts']); //Jakenan
            DB::table('regionables')->insert(['region_id'=>2903, 'regionable_id'=>2364, 'regionable_type'=>'districts']); //Pucakwangi
            DB::table('regionables')->insert(['region_id'=>2903, 'regionable_id'=>2365, 'regionable_type'=>'districts']); //Jaken
            DB::table('regionables')->insert(['region_id'=>2903, 'regionable_id'=>2366, 'regionable_type'=>'districts']); //Juwana
            DB::table('regionables')->insert(['region_id'=>2903, 'regionable_id'=>2367, 'regionable_type'=>'districts']); //Batangan
                DB::table('regions')->insert(['id'=>2904, 'parent'=>2903, 'code'=>'59186', 'type'=>'village', 'name'=>'Village 59186, Districts 5918, City 591, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25695, 'regionable_type'=>'village']); //Batursari
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25696, 'regionable_type'=>'village']); //Bulumulyo
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25697, 'regionable_type'=>'village']); //Bumimulyo
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25698, 'regionable_type'=>'village']); //Gajahkumpul
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25699, 'regionable_type'=>'village']); //Gunungsari
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25700, 'regionable_type'=>'village']); //Jembangan
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25701, 'regionable_type'=>'village']); //Kedalon
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25702, 'regionable_type'=>'village']); //Ketitangwetan
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25703, 'regionable_type'=>'village']); //Klayusiwalan
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25704, 'regionable_type'=>'village']); //Kuniran
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25705, 'regionable_type'=>'village']); //Lengkong
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25706, 'regionable_type'=>'village']); //Mangunlegi
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25707, 'regionable_type'=>'village']); //Ngening
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25708, 'regionable_type'=>'village']); //Pecangaan
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25709, 'regionable_type'=>'village']); //Raci
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25710, 'regionable_type'=>'village']); //Sukoagung
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25711, 'regionable_type'=>'village']); //Tlogomojo
                DB::table('regionables')->insert(['region_id'=>2904, 'regionable_id'=>25712, 'regionable_type'=>'village']); //Tompomulyo
        DB::table('regions')->insert(['id'=>2905, 'parent'=>2145, 'code'=>'592', 'type'=>'city', 'name'=>'City 592, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2905, 'regionable_id'=>121, 'regionable_type'=>'city']); //Rembang regencies
            DB::table('regions')->insert(['id'=>2906, 'parent'=>2905, 'code'=>'5921', 'type'=>'districts', 'name'=>'Districts 5921, City 592, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2906, 'regionable_id'=>2368, 'regionable_type'=>'districts']); //Rembang
                DB::table('regions')->insert(['id'=>2907, 'parent'=>2906, 'code'=>'59211', 'type'=>'village', 'name'=>'Village 59211, Districts 5921, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2907, 'regionable_id'=>25713, 'regionable_type'=>'village']); //Kutoharjo
                DB::table('regionables')->insert(['region_id'=>2907, 'regionable_id'=>25714, 'regionable_type'=>'village']); //Pandean
                DB::table('regions')->insert(['id'=>2908, 'parent'=>2906, 'code'=>'59212', 'type'=>'village', 'name'=>'Village 59212, Districts 5921, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2908, 'regionable_id'=>25715, 'regionable_type'=>'village']); //Tasikagung
                DB::table('regions')->insert(['id'=>2909, 'parent'=>2906, 'code'=>'59213', 'type'=>'village', 'name'=>'Village 59213, Districts 5921, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2909, 'regionable_id'=>25716, 'regionable_type'=>'village']); //Gegunung Kulon
                DB::table('regionables')->insert(['region_id'=>2909, 'regionable_id'=>25717, 'regionable_type'=>'village']); //Gegunung Wetan
                DB::table('regionables')->insert(['region_id'=>2909, 'regionable_id'=>25718, 'regionable_type'=>'village']); //Pacar
                DB::table('regionables')->insert(['region_id'=>2909, 'regionable_id'=>25719, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regions')->insert(['id'=>2910, 'parent'=>2906, 'code'=>'59214', 'type'=>'village', 'name'=>'Village 59214, Districts 5921, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2910, 'regionable_id'=>25720, 'regionable_type'=>'village']); //Magersari
                DB::table('regions')->insert(['id'=>2911, 'parent'=>2906, 'code'=>'59215', 'type'=>'village', 'name'=>'Village 59215, Districts 5921, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2911, 'regionable_id'=>25721, 'regionable_type'=>'village']); //Sawahan
                DB::table('regions')->insert(['id'=>2912, 'parent'=>2906, 'code'=>'59217', 'type'=>'village', 'name'=>'Village 59217, Districts 5921, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2912, 'regionable_id'=>25722, 'regionable_type'=>'village']); //Leteh
                DB::table('regions')->insert(['id'=>2913, 'parent'=>2906, 'code'=>'59218', 'type'=>'village', 'name'=>'Village 59218, Districts 5921, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2913, 'regionable_id'=>25723, 'regionable_type'=>'village']); //Kabongan Kidul
                DB::table('regionables')->insert(['region_id'=>2913, 'regionable_id'=>25724, 'regionable_type'=>'village']); //Sidowayah
                DB::table('regions')->insert(['id'=>2914, 'parent'=>2906, 'code'=>'59219', 'type'=>'village', 'name'=>'Village 59219, Districts 5921, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25725, 'regionable_type'=>'village']); //Gedangan
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25726, 'regionable_type'=>'village']); //Kabongan Lor
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25727, 'regionable_type'=>'village']); //Kasreman
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25728, 'regionable_type'=>'village']); //Kedungrejo
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25729, 'regionable_type'=>'village']); //Ketanggi
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25730, 'regionable_type'=>'village']); //Kumendung
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25731, 'regionable_type'=>'village']); //Mondoteko
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25732, 'regionable_type'=>'village']); //Ngadem
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25733, 'regionable_type'=>'village']); //Ngotet
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25734, 'regionable_type'=>'village']); //Padaran
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25735, 'regionable_type'=>'village']); //Pasarbanggi
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25736, 'regionable_type'=>'village']); //Pulo
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25737, 'regionable_type'=>'village']); //Punjulharjo
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25738, 'regionable_type'=>'village']); //Sridadi
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25739, 'regionable_type'=>'village']); //Sukoharjo
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25740, 'regionable_type'=>'village']); //Sumberjo
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25741, 'regionable_type'=>'village']); //Tireman
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25742, 'regionable_type'=>'village']); //Tlogomojo
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25743, 'regionable_type'=>'village']); //Tritunggal
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25744, 'regionable_type'=>'village']); //Turusgede
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25745, 'regionable_type'=>'village']); //Waru
                DB::table('regionables')->insert(['region_id'=>2914, 'regionable_id'=>25746, 'regionable_type'=>'village']); //Weton
            DB::table('regions')->insert(['id'=>2915, 'parent'=>2905, 'code'=>'5925', 'type'=>'districts', 'name'=>'Districts 5925, City 592, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2915, 'regionable_id'=>2369, 'regionable_type'=>'districts']); //Kaliori
            DB::table('regionables')->insert(['region_id'=>2915, 'regionable_id'=>2370, 'regionable_type'=>'districts']); //Sumber
            DB::table('regionables')->insert(['region_id'=>2915, 'regionable_id'=>2371, 'regionable_type'=>'districts']); //Sulang
            DB::table('regionables')->insert(['region_id'=>2915, 'regionable_id'=>2372, 'regionable_type'=>'districts']); //Bulu
                DB::table('regions')->insert(['id'=>2916, 'parent'=>2915, 'code'=>'59255', 'type'=>'village', 'name'=>'Village 59255, Districts 5925, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25809, 'regionable_type'=>'village']); //Bulu
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25810, 'regionable_type'=>'village']); //Cabean
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25811, 'regionable_type'=>'village']); //Jukung
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25812, 'regionable_type'=>'village']); //Kadiwono
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25813, 'regionable_type'=>'village']); //Karangasem
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25814, 'regionable_type'=>'village']); //Lambangan Kulon
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25815, 'regionable_type'=>'village']); //Lambangan Wetan
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25816, 'regionable_type'=>'village']); //Mantingan
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25817, 'regionable_type'=>'village']); //Mlatirejo
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25818, 'regionable_type'=>'village']); //Ngulaan
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25819, 'regionable_type'=>'village']); //Pasedan
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25820, 'regionable_type'=>'village']); //Pinggan
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25821, 'regionable_type'=>'village']); //Pondokrejo
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25822, 'regionable_type'=>'village']); //Sendangmulyo
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25823, 'regionable_type'=>'village']); //Sumbermulyo
                DB::table('regionables')->insert(['region_id'=>2916, 'regionable_id'=>25824, 'regionable_type'=>'village']); //Warugunung
            DB::table('regions')->insert(['id'=>2917, 'parent'=>2905, 'code'=>'5926', 'type'=>'districts', 'name'=>'Districts 5926, City 592, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2917, 'regionable_id'=>2373, 'regionable_type'=>'districts']); //Pamotan
            DB::table('regionables')->insert(['region_id'=>2917, 'regionable_id'=>2374, 'regionable_type'=>'districts']); //Pancur
            DB::table('regionables')->insert(['region_id'=>2917, 'regionable_id'=>2375, 'regionable_type'=>'districts']); //Gunem
            DB::table('regionables')->insert(['region_id'=>2917, 'regionable_id'=>2376, 'regionable_type'=>'districts']); //Sedan
            DB::table('regionables')->insert(['region_id'=>2917, 'regionable_id'=>2377, 'regionable_type'=>'districts']); //Sale
                DB::table('regions')->insert(['id'=>2918, 'parent'=>2917, 'code'=>'59265', 'type'=>'village', 'name'=>'Village 59265, Districts 5926, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25908, 'regionable_type'=>'village']); //Bancang
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25909, 'regionable_type'=>'village']); //Bitingan
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25910, 'regionable_type'=>'village']); //Gading
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25911, 'regionable_type'=>'village']); //Jinanten
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25912, 'regionable_type'=>'village']); //Joho
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25913, 'regionable_type'=>'village']); //Mrayun
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25914, 'regionable_type'=>'village']); //Ngajaran
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25915, 'regionable_type'=>'village']); //Pakis
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25916, 'regionable_type'=>'village']); //Rendeng
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25917, 'regionable_type'=>'village']); //Sale
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25918, 'regionable_type'=>'village']); //Sumbermulyo
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25919, 'regionable_type'=>'village']); //Tahunan
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25920, 'regionable_type'=>'village']); //Tengger
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25921, 'regionable_type'=>'village']); //Ukir
                DB::table('regionables')->insert(['region_id'=>2918, 'regionable_id'=>25922, 'regionable_type'=>'village']); //Wonokerto
            DB::table('regions')->insert(['id'=>2919, 'parent'=>2905, 'code'=>'5927', 'type'=>'districts', 'name'=>'Districts 5927, City 592, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2919, 'regionable_id'=>2378, 'regionable_type'=>'districts']); //Lasem
            DB::table('regionables')->insert(['region_id'=>2919, 'regionable_id'=>2379, 'regionable_type'=>'districts']); //Sluke
            DB::table('regionables')->insert(['region_id'=>2919, 'regionable_id'=>2380, 'regionable_type'=>'districts']); //Kragan
            DB::table('regionables')->insert(['region_id'=>2919, 'regionable_id'=>2381, 'regionable_type'=>'districts']); //Sarang
                DB::table('regions')->insert(['id'=>2920, 'parent'=>2919, 'code'=>'59274', 'type'=>'village', 'name'=>'Village 59274, Districts 5927, City 592, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25984, 'regionable_type'=>'village']); //Babaktulung
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25985, 'regionable_type'=>'village']); //Bajingjowo
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25986, 'regionable_type'=>'village']); //Bajingmeduro
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25987, 'regionable_type'=>'village']); //Banowan
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25988, 'regionable_type'=>'village']); //Baturno
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25989, 'regionable_type'=>'village']); //Bonjor
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25990, 'regionable_type'=>'village']); //Dadapmulyo
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25991, 'regionable_type'=>'village']); //Gilis
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25992, 'regionable_type'=>'village']); //Gonggang
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25993, 'regionable_type'=>'village']); //Gunungmulyo
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25994, 'regionable_type'=>'village']); //Jambangan
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25995, 'regionable_type'=>'village']); //Kalipang
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25996, 'regionable_type'=>'village']); //Karangmangu
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25997, 'regionable_type'=>'village']); //Lodan Kulon
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25998, 'regionable_type'=>'village']); //Lodan Wetan
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>25999, 'regionable_type'=>'village']); //Nglojo
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>26000, 'regionable_type'=>'village']); //Pelang
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>26001, 'regionable_type'=>'village']); //Sampung
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>26002, 'regionable_type'=>'village']); //Sarangmeduro
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>26003, 'regionable_type'=>'village']); //Sendangmulyo
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>26004, 'regionable_type'=>'village']); //Sumbermulyo
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>26005, 'regionable_type'=>'village']); //Tawangrejo
                DB::table('regionables')->insert(['region_id'=>2920, 'regionable_id'=>26006, 'regionable_type'=>'village']); //Temperak
        DB::table('regions')->insert(['id'=>2921, 'parent'=>2145, 'code'=>'593', 'type'=>'city', 'name'=>'City 593, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2921, 'regionable_id'=>122, 'regionable_type'=>'city']); //Kudus regencies
            DB::table('regions')->insert(['id'=>2922, 'parent'=>2921, 'code'=>'5931', 'type'=>'districts', 'name'=>'Districts 5931, City 593, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2922, 'regionable_id'=>2382, 'regionable_type'=>'districts']); //Kudus Kota
                DB::table('regions')->insert(['id'=>2923, 'parent'=>2922, 'code'=>'59311', 'type'=>'village', 'name'=>'Village 59311, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2923, 'regionable_id'=>26007, 'regionable_type'=>'village']); //Burikan
                DB::table('regionables')->insert(['region_id'=>2923, 'regionable_id'=>26008, 'regionable_type'=>'village']); //Nganguk
                DB::table('regionables')->insert(['region_id'=>2923, 'regionable_id'=>26009, 'regionable_type'=>'village']); //Rendeng
                DB::table('regions')->insert(['id'=>2924, 'parent'=>2922, 'code'=>'59312', 'type'=>'village', 'name'=>'Village 59312, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2924, 'regionable_id'=>26010, 'regionable_type'=>'village']); //Barongan
                DB::table('regionables')->insert(['region_id'=>2924, 'regionable_id'=>26011, 'regionable_type'=>'village']); //Kaliputu
                DB::table('regionables')->insert(['region_id'=>2924, 'regionable_id'=>26012, 'regionable_type'=>'village']); //Kramat
                DB::table('regions')->insert(['id'=>2925, 'parent'=>2922, 'code'=>'59313', 'type'=>'village', 'name'=>'Village 59313, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2925, 'regionable_id'=>26013, 'regionable_type'=>'village']); //Demaan
                DB::table('regionables')->insert(['region_id'=>2925, 'regionable_id'=>26014, 'regionable_type'=>'village']); //Glantengan
                DB::table('regions')->insert(['id'=>2926, 'parent'=>2922, 'code'=>'59314', 'type'=>'village', 'name'=>'Village 59314, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2926, 'regionable_id'=>26015, 'regionable_type'=>'village']); //Kajeksan
                DB::table('regionables')->insert(['region_id'=>2926, 'regionable_id'=>26016, 'regionable_type'=>'village']); //Krandon
                DB::table('regionables')->insert(['region_id'=>2926, 'regionable_id'=>26017, 'regionable_type'=>'village']); //Singocandi
                DB::table('regions')->insert(['id'=>2927, 'parent'=>2922, 'code'=>'59315', 'type'=>'village', 'name'=>'Village 59315, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2927, 'regionable_id'=>26018, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>2927, 'regionable_id'=>26019, 'regionable_type'=>'village']); //Kerjasan
                DB::table('regionables')->insert(['region_id'=>2927, 'regionable_id'=>26020, 'regionable_type'=>'village']); //Langgardalem
                DB::table('regions')->insert(['id'=>2928, 'parent'=>2922, 'code'=>'59316', 'type'=>'village', 'name'=>'Village 59316, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2928, 'regionable_id'=>26021, 'regionable_type'=>'village']); //Damaran
                DB::table('regionables')->insert(['region_id'=>2928, 'regionable_id'=>26022, 'regionable_type'=>'village']); //Janggalan
                DB::table('regionables')->insert(['region_id'=>2928, 'regionable_id'=>26023, 'regionable_type'=>'village']); //Purwosari
                DB::table('regions')->insert(['id'=>2929, 'parent'=>2922, 'code'=>'59317', 'type'=>'village', 'name'=>'Village 59317, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2929, 'regionable_id'=>26024, 'regionable_type'=>'village']); //Demangan
                DB::table('regionables')->insert(['region_id'=>2929, 'regionable_id'=>26025, 'regionable_type'=>'village']); //Panjunan
                DB::table('regionables')->insert(['region_id'=>2929, 'regionable_id'=>26026, 'regionable_type'=>'village']); //Sunggingan
                DB::table('regions')->insert(['id'=>2930, 'parent'=>2922, 'code'=>'59318', 'type'=>'village', 'name'=>'Village 59318, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2930, 'regionable_id'=>26027, 'regionable_type'=>'village']); //Wergu Kulon
                DB::table('regionables')->insert(['region_id'=>2930, 'regionable_id'=>26028, 'regionable_type'=>'village']); //Wergu Wetan
                DB::table('regions')->insert(['id'=>2931, 'parent'=>2922, 'code'=>'59319', 'type'=>'village', 'name'=>'Village 59319, Districts 5931, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2931, 'regionable_id'=>26029, 'regionable_type'=>'village']); //Mlati Kidul
                DB::table('regionables')->insert(['region_id'=>2931, 'regionable_id'=>26030, 'regionable_type'=>'village']); //Mlati Lor
                DB::table('regionables')->insert(['region_id'=>2931, 'regionable_id'=>26031, 'regionable_type'=>'village']); //Mlati Norowito
            DB::table('regions')->insert(['id'=>2932, 'parent'=>2921, 'code'=>'5932', 'type'=>'districts', 'name'=>'Districts 5932, City 593, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2932, 'regionable_id'=>2383, 'regionable_type'=>'districts']); //Bae
                DB::table('regions')->insert(['id'=>2933, 'parent'=>2932, 'code'=>'59321', 'type'=>'village', 'name'=>'Village 59321, Districts 5932, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2933, 'regionable_id'=>26032, 'regionable_type'=>'village']); //Dersalam
                DB::table('regions')->insert(['id'=>2934, 'parent'=>2932, 'code'=>'59322', 'type'=>'village', 'name'=>'Village 59322, Districts 5932, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2934, 'regionable_id'=>26033, 'regionable_type'=>'village']); //Ngembalrejo
                DB::table('regions')->insert(['id'=>2935, 'parent'=>2932, 'code'=>'59323', 'type'=>'village', 'name'=>'Village 59323, Districts 5932, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2935, 'regionable_id'=>26034, 'regionable_type'=>'village']); //Karangbener
                DB::table('regions')->insert(['id'=>2936, 'parent'=>2932, 'code'=>'59324', 'type'=>'village', 'name'=>'Village 59324, Districts 5932, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2936, 'regionable_id'=>26035, 'regionable_type'=>'village']); //Pedawang
                DB::table('regions')->insert(['id'=>2937, 'parent'=>2932, 'code'=>'59325', 'type'=>'village', 'name'=>'Village 59325, Districts 5932, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2937, 'regionable_id'=>26036, 'regionable_type'=>'village']); //Bacin
                DB::table('regions')->insert(['id'=>2938, 'parent'=>2932, 'code'=>'59326', 'type'=>'village', 'name'=>'Village 59326, Districts 5932, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2938, 'regionable_id'=>26037, 'regionable_type'=>'village']); //Panjang
                DB::table('regions')->insert(['id'=>2939, 'parent'=>2932, 'code'=>'59327', 'type'=>'village', 'name'=>'Village 59327, Districts 5932, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2939, 'regionable_id'=>26038, 'regionable_type'=>'village']); //Bae
                DB::table('regionables')->insert(['region_id'=>2939, 'regionable_id'=>26039, 'regionable_type'=>'village']); //Gondangmanis
                DB::table('regionables')->insert(['region_id'=>2939, 'regionable_id'=>26040, 'regionable_type'=>'village']); //Peganjaran
                DB::table('regionables')->insert(['region_id'=>2939, 'regionable_id'=>26041, 'regionable_type'=>'village']); //Purworejo
            DB::table('regions')->insert(['id'=>2940, 'parent'=>2921, 'code'=>'5933', 'type'=>'districts', 'name'=>'Districts 5933, City 593, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2940, 'regionable_id'=>2384, 'regionable_type'=>'districts']); //Kaliwungu
            DB::table('regionables')->insert(['region_id'=>2940, 'regionable_id'=>2385, 'regionable_type'=>'districts']); //Gebog
                DB::table('regions')->insert(['id'=>2941, 'parent'=>2940, 'code'=>'59333', 'type'=>'village', 'name'=>'Village 59333, Districts 5933, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26057, 'regionable_type'=>'village']); //Besito
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26058, 'regionable_type'=>'village']); //Getasrabi
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26059, 'regionable_type'=>'village']); //Gondosari
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26060, 'regionable_type'=>'village']); //Gribig
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26061, 'regionable_type'=>'village']); //Jurang
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26062, 'regionable_type'=>'village']); //Karangmalang
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26063, 'regionable_type'=>'village']); //Kedungsari
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26064, 'regionable_type'=>'village']); //Klumpit
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26065, 'regionable_type'=>'village']); //Menawan
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26066, 'regionable_type'=>'village']); //Padurenan
                DB::table('regionables')->insert(['region_id'=>2941, 'regionable_id'=>26067, 'regionable_type'=>'village']); //Rahtawu
            DB::table('regions')->insert(['id'=>2942, 'parent'=>2921, 'code'=>'5934', 'type'=>'districts', 'name'=>'Districts 5934, City 593, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2942, 'regionable_id'=>2386, 'regionable_type'=>'districts']); //Jati
                DB::table('regions')->insert(['id'=>2943, 'parent'=>2942, 'code'=>'59341', 'type'=>'village', 'name'=>'Village 59341, Districts 5934, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2943, 'regionable_id'=>26068, 'regionable_type'=>'village']); //Ngembal Kulon
                DB::table('regions')->insert(['id'=>2944, 'parent'=>2942, 'code'=>'59342', 'type'=>'village', 'name'=>'Village 59342, Districts 5934, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2944, 'regionable_id'=>26069, 'regionable_type'=>'village']); //Megawon
                DB::table('regions')->insert(['id'=>2945, 'parent'=>2942, 'code'=>'59343', 'type'=>'village', 'name'=>'Village 59343, Districts 5934, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2945, 'regionable_id'=>26070, 'regionable_type'=>'village']); //Getas Pejaten
                DB::table('regions')->insert(['id'=>2946, 'parent'=>2942, 'code'=>'59344', 'type'=>'village', 'name'=>'Village 59344, Districts 5934, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2946, 'regionable_id'=>26071, 'regionable_type'=>'village']); //Loram Kulon
                DB::table('regionables')->insert(['region_id'=>2946, 'regionable_id'=>26072, 'regionable_type'=>'village']); //Loram Wetan
                DB::table('regions')->insert(['id'=>2947, 'parent'=>2942, 'code'=>'59346', 'type'=>'village', 'name'=>'Village 59346, Districts 5934, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2947, 'regionable_id'=>26073, 'regionable_type'=>'village']); //Jati Wetan
                DB::table('regions')->insert(['id'=>2948, 'parent'=>2942, 'code'=>'59347', 'type'=>'village', 'name'=>'Village 59347, Districts 5934, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2948, 'regionable_id'=>26074, 'regionable_type'=>'village']); //Jati Kulon
                DB::table('regions')->insert(['id'=>2949, 'parent'=>2942, 'code'=>'59348', 'type'=>'village', 'name'=>'Village 59348, Districts 5934, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2949, 'regionable_id'=>26075, 'regionable_type'=>'village']); //Ploso
                DB::table('regions')->insert(['id'=>2950, 'parent'=>2942, 'code'=>'59349', 'type'=>'village', 'name'=>'Village 59349, Districts 5934, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2950, 'regionable_id'=>26076, 'regionable_type'=>'village']); //Jepangpakis
                DB::table('regionables')->insert(['region_id'=>2950, 'regionable_id'=>26077, 'regionable_type'=>'village']); //Jetis Kapuan
                DB::table('regionables')->insert(['region_id'=>2950, 'regionable_id'=>26078, 'regionable_type'=>'village']); //Pasuruhan Kidul
                DB::table('regionables')->insert(['region_id'=>2950, 'regionable_id'=>26079, 'regionable_type'=>'village']); //Pasuruhan Lor
                DB::table('regionables')->insert(['region_id'=>2950, 'regionable_id'=>26080, 'regionable_type'=>'village']); //Tanjung Karang
                DB::table('regionables')->insert(['region_id'=>2950, 'regionable_id'=>26081, 'regionable_type'=>'village']); //Tumpang Krasak
            DB::table('regions')->insert(['id'=>2951, 'parent'=>2921, 'code'=>'5935', 'type'=>'districts', 'name'=>'Districts 5935, City 593, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2951, 'regionable_id'=>2387, 'regionable_type'=>'districts']); //Dawe
                DB::table('regions')->insert(['id'=>2952, 'parent'=>2951, 'code'=>'59353', 'type'=>'village', 'name'=>'Village 59353, Districts 5935, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26082, 'regionable_type'=>'village']); //Cendono
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26083, 'regionable_type'=>'village']); //Colo
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26084, 'regionable_type'=>'village']); //Cranggang
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26085, 'regionable_type'=>'village']); //Dukuhwaringin
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26086, 'regionable_type'=>'village']); //Glagah Kulon
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26087, 'regionable_type'=>'village']); //Japan
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26088, 'regionable_type'=>'village']); //Kajar
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26089, 'regionable_type'=>'village']); //Kandangmas
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26090, 'regionable_type'=>'village']); //Kuwukan
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26091, 'regionable_type'=>'village']); //Lau
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26092, 'regionable_type'=>'village']); //Margorejo
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26093, 'regionable_type'=>'village']); //Piji
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26094, 'regionable_type'=>'village']); //Puyoh
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26095, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26096, 'regionable_type'=>'village']); //Samirejo
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26097, 'regionable_type'=>'village']); //Soco
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26098, 'regionable_type'=>'village']); //Tergo
                DB::table('regionables')->insert(['region_id'=>2952, 'regionable_id'=>26099, 'regionable_type'=>'village']); //Ternadi
            DB::table('regions')->insert(['id'=>2953, 'parent'=>2921, 'code'=>'5937', 'type'=>'districts', 'name'=>'Districts 5937, City 593, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2953, 'regionable_id'=>2388, 'regionable_type'=>'districts']); //Undaan
                DB::table('regions')->insert(['id'=>2954, 'parent'=>2953, 'code'=>'59372', 'type'=>'village', 'name'=>'Village 59372, Districts 5937, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26100, 'regionable_type'=>'village']); //Berugenjang
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26101, 'regionable_type'=>'village']); //Glagahwaru
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26102, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26103, 'regionable_type'=>'village']); //Karangrowo
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26104, 'regionable_type'=>'village']); //Kutuk
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26105, 'regionable_type'=>'village']); //Lambangan
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26106, 'regionable_type'=>'village']); //Larikrejo
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26107, 'regionable_type'=>'village']); //Medini
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26108, 'regionable_type'=>'village']); //Ngemplak
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26109, 'regionable_type'=>'village']); //Sambung
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26110, 'regionable_type'=>'village']); //Terangmas
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26111, 'regionable_type'=>'village']); //Undaan Kidul
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26112, 'regionable_type'=>'village']); //Undaan Lor
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26113, 'regionable_type'=>'village']); //Undaan Tengah
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26114, 'regionable_type'=>'village']); //Wates
                DB::table('regionables')->insert(['region_id'=>2954, 'regionable_id'=>26115, 'regionable_type'=>'village']); //Wonosoco
            DB::table('regions')->insert(['id'=>2955, 'parent'=>2921, 'code'=>'5938', 'type'=>'districts', 'name'=>'Districts 5938, City 593, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2955, 'regionable_id'=>2389, 'regionable_type'=>'districts']); //Mejobo
            DB::table('regionables')->insert(['region_id'=>2955, 'regionable_id'=>2390, 'regionable_type'=>'districts']); //Jekulo
                DB::table('regions')->insert(['id'=>2956, 'parent'=>2955, 'code'=>'59382', 'type'=>'village', 'name'=>'Village 59382, Districts 5938, City 593, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26127, 'regionable_type'=>'village']); //Bulung Kulon
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26128, 'regionable_type'=>'village']); //Bulungcangkring
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26129, 'regionable_type'=>'village']); //Gondoharum
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26130, 'regionable_type'=>'village']); //Hadipolo
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26131, 'regionable_type'=>'village']); //Honggosoco
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26132, 'regionable_type'=>'village']); //Jekulo
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26133, 'regionable_type'=>'village']); //Klaling
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26134, 'regionable_type'=>'village']); //Pladen
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26135, 'regionable_type'=>'village']); //Sadang
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26136, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26137, 'regionable_type'=>'village']); //Tanjungrejo
                DB::table('regionables')->insert(['region_id'=>2956, 'regionable_id'=>26138, 'regionable_type'=>'village']); //Terban
        DB::table('regions')->insert(['id'=>2957, 'parent'=>2145, 'code'=>'594', 'type'=>'city', 'name'=>'City 594, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2957, 'regionable_id'=>123, 'regionable_type'=>'city']); //Jepara regencies
            DB::table('regions')->insert(['id'=>2958, 'parent'=>2957, 'code'=>'5941', 'type'=>'districts', 'name'=>'Districts 5941, City 594, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2958, 'regionable_id'=>2391, 'regionable_type'=>'districts']); //Jepara
                DB::table('regions')->insert(['id'=>2959, 'parent'=>2958, 'code'=>'59411', 'type'=>'village', 'name'=>'Village 59411, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2959, 'regionable_id'=>26139, 'regionable_type'=>'village']); //Karangkebagusan
                DB::table('regionables')->insert(['region_id'=>2959, 'regionable_id'=>26140, 'regionable_type'=>'village']); //Panggang
                DB::table('regions')->insert(['id'=>2960, 'parent'=>2958, 'code'=>'59412', 'type'=>'village', 'name'=>'Village 59412, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2960, 'regionable_id'=>26141, 'regionable_type'=>'village']); //Potroyudan
                DB::table('regions')->insert(['id'=>2961, 'parent'=>2958, 'code'=>'59413', 'type'=>'village', 'name'=>'Village 59413, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2961, 'regionable_id'=>26142, 'regionable_type'=>'village']); //Bapangan
                DB::table('regions')->insert(['id'=>2962, 'parent'=>2958, 'code'=>'59414', 'type'=>'village', 'name'=>'Village 59414, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2962, 'regionable_id'=>26143, 'regionable_type'=>'village']); //Saripan
                DB::table('regions')->insert(['id'=>2963, 'parent'=>2958, 'code'=>'59415', 'type'=>'village', 'name'=>'Village 59415, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2963, 'regionable_id'=>26144, 'regionable_type'=>'village']); //Pengkol
                DB::table('regions')->insert(['id'=>2964, 'parent'=>2958, 'code'=>'59416', 'type'=>'village', 'name'=>'Village 59416, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2964, 'regionable_id'=>26145, 'regionable_type'=>'village']); //Jobokuto
                DB::table('regionables')->insert(['region_id'=>2964, 'regionable_id'=>26146, 'regionable_type'=>'village']); //Ujungbatu
                DB::table('regions')->insert(['id'=>2965, 'parent'=>2958, 'code'=>'59417', 'type'=>'village', 'name'=>'Village 59417, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2965, 'regionable_id'=>26147, 'regionable_type'=>'village']); //Kauman
                DB::table('regions')->insert(['id'=>2966, 'parent'=>2958, 'code'=>'59418', 'type'=>'village', 'name'=>'Village 59418, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2966, 'regionable_id'=>26148, 'regionable_type'=>'village']); //Bulu
                DB::table('regions')->insert(['id'=>2967, 'parent'=>2958, 'code'=>'59419', 'type'=>'village', 'name'=>'Village 59419, Districts 5941, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2967, 'regionable_id'=>26149, 'regionable_type'=>'village']); //Demaan
            DB::table('regions')->insert(['id'=>2968, 'parent'=>2957, 'code'=>'5942', 'type'=>'districts', 'name'=>'Districts 5942, City 594, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2968, 'regionable_id'=>2392, 'regionable_type'=>'districts']); //Tahunan
                DB::table('regions')->insert(['id'=>2969, 'parent'=>2968, 'code'=>'59421', 'type'=>'village', 'name'=>'Village 59421, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2969, 'regionable_id'=>26155, 'regionable_type'=>'village']); //Krapyak
                DB::table('regionables')->insert(['region_id'=>2969, 'regionable_id'=>26156, 'regionable_type'=>'village']); //Mantingan
                DB::table('regions')->insert(['id'=>2970, 'parent'=>2968, 'code'=>'59422', 'type'=>'village', 'name'=>'Village 59422, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2970, 'regionable_id'=>26157, 'regionable_type'=>'village']); //Demangan
                DB::table('regionables')->insert(['region_id'=>2970, 'regionable_id'=>26158, 'regionable_type'=>'village']); //Mangunan
                DB::table('regions')->insert(['id'=>2971, 'parent'=>2968, 'code'=>'59423', 'type'=>'village', 'name'=>'Village 59423, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2971, 'regionable_id'=>26159, 'regionable_type'=>'village']); //Petekeyan
                DB::table('regionables')->insert(['region_id'=>2971, 'regionable_id'=>26160, 'regionable_type'=>'village']); //Platar
                DB::table('regions')->insert(['id'=>2972, 'parent'=>2968, 'code'=>'59424', 'type'=>'village', 'name'=>'Village 59424, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2972, 'regionable_id'=>26161, 'regionable_type'=>'village']); //Semat
                DB::table('regions')->insert(['id'=>2973, 'parent'=>2968, 'code'=>'59425', 'type'=>'village', 'name'=>'Village 59425, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2973, 'regionable_id'=>26162, 'regionable_type'=>'village']); //Langon
                DB::table('regionables')->insert(['region_id'=>2973, 'regionable_id'=>26163, 'regionable_type'=>'village']); //Sukodono
                DB::table('regions')->insert(['id'=>2974, 'parent'=>2968, 'code'=>'59426', 'type'=>'village', 'name'=>'Village 59426, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2974, 'regionable_id'=>26164, 'regionable_type'=>'village']); //Senenan
                DB::table('regions')->insert(['id'=>2975, 'parent'=>2968, 'code'=>'59427', 'type'=>'village', 'name'=>'Village 59427, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2975, 'regionable_id'=>26165, 'regionable_type'=>'village']); //Tegalsambi
                DB::table('regionables')->insert(['region_id'=>2975, 'regionable_id'=>26166, 'regionable_type'=>'village']); //Telukawur
                DB::table('regions')->insert(['id'=>2976, 'parent'=>2968, 'code'=>'59428', 'type'=>'village', 'name'=>'Village 59428, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2976, 'regionable_id'=>26167, 'regionable_type'=>'village']); //Ngabul
                DB::table('regions')->insert(['id'=>2977, 'parent'=>2968, 'code'=>'59429', 'type'=>'village', 'name'=>'Village 59429, Districts 5942, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2977, 'regionable_id'=>26168, 'regionable_type'=>'village']); //Kecapi
            DB::table('regions')->insert(['id'=>2978, 'parent'=>2957, 'code'=>'5943', 'type'=>'districts', 'name'=>'Districts 5943, City 594, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2978, 'regionable_id'=>2391, 'regionable_type'=>'districts']); //Jepara
                DB::table('regions')->insert(['id'=>2979, 'parent'=>2978, 'code'=>'59431', 'type'=>'village', 'name'=>'Village 59431, Districts 5943, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2979, 'regionable_id'=>26150, 'regionable_type'=>'village']); //Kuwasen
                DB::table('regionables')->insert(['region_id'=>2979, 'regionable_id'=>26151, 'regionable_type'=>'village']); //Mulyoharjo
                DB::table('regionables')->insert(['region_id'=>2979, 'regionable_id'=>26152, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regions')->insert(['id'=>2980, 'parent'=>2978, 'code'=>'59432', 'type'=>'village', 'name'=>'Village 59432, Districts 5943, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2980, 'regionable_id'=>26153, 'regionable_type'=>'village']); //Bandengan
                DB::table('regionables')->insert(['region_id'=>2980, 'regionable_id'=>26154, 'regionable_type'=>'village']); //Kedungcino
            DB::table('regions')->insert(['id'=>2981, 'parent'=>2957, 'code'=>'5945', 'type'=>'districts', 'name'=>'Districts 5945, City 594, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2981, 'regionable_id'=>2392, 'regionable_type'=>'districts']); //Tahunan
            DB::table('regionables')->insert(['region_id'=>2981, 'regionable_id'=>2393, 'regionable_type'=>'districts']); //Pakis Aji
            DB::table('regionables')->insert(['region_id'=>2981, 'regionable_id'=>2394, 'regionable_type'=>'districts']); //Mlonggo
            DB::table('regionables')->insert(['region_id'=>2981, 'regionable_id'=>2395, 'regionable_type'=>'districts']); //Kembang
            DB::table('regionables')->insert(['region_id'=>2981, 'regionable_id'=>2396, 'regionable_type'=>'districts']); //Bangsri
            DB::table('regionables')->insert(['region_id'=>2981, 'regionable_id'=>2397, 'regionable_type'=>'districts']); //Donorojo
            DB::table('regionables')->insert(['region_id'=>2981, 'regionable_id'=>2398, 'regionable_type'=>'districts']); //Keling
            DB::table('regionables')->insert(['region_id'=>2981, 'regionable_id'=>2399, 'regionable_type'=>'districts']); //Karimunjawa
                DB::table('regions')->insert(['id'=>2982, 'parent'=>2981, 'code'=>'59455', 'type'=>'village', 'name'=>'Village 59455, Districts 5945, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2982, 'regionable_id'=>26229, 'regionable_type'=>'village']); //Karimunjawa
                DB::table('regionables')->insert(['region_id'=>2982, 'regionable_id'=>26230, 'regionable_type'=>'village']); //Kemojan (kemujan)
                DB::table('regionables')->insert(['region_id'=>2982, 'regionable_id'=>26231, 'regionable_type'=>'village']); //Nyamuk
                DB::table('regionables')->insert(['region_id'=>2982, 'regionable_id'=>26232, 'regionable_type'=>'village']); //Parang
            DB::table('regions')->insert(['id'=>2983, 'parent'=>2957, 'code'=>'5946', 'type'=>'districts', 'name'=>'Districts 5946, City 594, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2983, 'regionable_id'=>2400, 'regionable_type'=>'districts']); //Batealit
            DB::table('regionables')->insert(['region_id'=>2983, 'regionable_id'=>2401, 'regionable_type'=>'districts']); //Kalinyamatan
            DB::table('regionables')->insert(['region_id'=>2983, 'regionable_id'=>2402, 'regionable_type'=>'districts']); //Pecangaan
            DB::table('regionables')->insert(['region_id'=>2983, 'regionable_id'=>2403, 'regionable_type'=>'districts']); //Kedung
            DB::table('regionables')->insert(['region_id'=>2983, 'regionable_id'=>2404, 'regionable_type'=>'districts']); //Welahan
            DB::table('regionables')->insert(['region_id'=>2983, 'regionable_id'=>2405, 'regionable_type'=>'districts']); //Mayong
            DB::table('regionables')->insert(['region_id'=>2983, 'regionable_id'=>2406, 'regionable_type'=>'districts']); //Nalumsari
                DB::table('regions')->insert(['id'=>2984, 'parent'=>2983, 'code'=>'59466', 'type'=>'village', 'name'=>'Village 59466, Districts 5946, City 594, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26319, 'regionable_type'=>'village']); //Bategede
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26320, 'regionable_type'=>'village']); //Bendanpete
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26321, 'regionable_type'=>'village']); //Blimbingrejo
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26322, 'regionable_type'=>'village']); //Daren
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26323, 'regionable_type'=>'village']); //Dorang
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26324, 'regionable_type'=>'village']); //Gemiring Kidul
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26325, 'regionable_type'=>'village']); //Gemiring Lor
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26326, 'regionable_type'=>'village']); //Jatisari
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26327, 'regionable_type'=>'village']); //Karangnongko
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26328, 'regionable_type'=>'village']); //Muryolobo
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26329, 'regionable_type'=>'village']); //Nalumsari
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26330, 'regionable_type'=>'village']); //Ngetuk
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26331, 'regionable_type'=>'village']); //Pringtulis
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26332, 'regionable_type'=>'village']); //Tritis
                DB::table('regionables')->insert(['region_id'=>2984, 'regionable_id'=>26333, 'regionable_type'=>'village']); //Tunggulpandean
        DB::table('regions')->insert(['id'=>2985, 'parent'=>2145, 'code'=>'595', 'type'=>'city', 'name'=>'City 595, Province 5']);
        DB::table('regionables')->insert(['region_id'=>2985, 'regionable_id'=>124, 'regionable_type'=>'city']); //Demak regencies
            DB::table('regions')->insert(['id'=>2986, 'parent'=>2985, 'code'=>'5951', 'type'=>'districts', 'name'=>'Districts 5951, City 595, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2986, 'regionable_id'=>2407, 'regionable_type'=>'districts']); //Demak
            DB::table('regionables')->insert(['region_id'=>2986, 'regionable_id'=>2408, 'regionable_type'=>'districts']); //Bonang
                DB::table('regions')->insert(['id'=>2987, 'parent'=>2986, 'code'=>'59511', 'type'=>'village', 'name'=>'Village 59511, Districts 5951, City 595, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2987, 'regionable_id'=>26334, 'regionable_type'=>'village']); //Bintoro
                DB::table('regionables')->insert(['region_id'=>2987, 'regionable_id'=>26353, 'regionable_type'=>'village']); //Kembangan
            DB::table('regions')->insert(['id'=>2988, 'parent'=>2985, 'code'=>'5955', 'type'=>'districts', 'name'=>'Districts 5955, City 595, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2988, 'regionable_id'=>2408, 'regionable_type'=>'districts']); //Bonang
            DB::table('regionables')->insert(['region_id'=>2988, 'regionable_id'=>2409, 'regionable_type'=>'districts']); //Wedung
                DB::table('regions')->insert(['id'=>2989, 'parent'=>2988, 'code'=>'59554', 'type'=>'village', 'name'=>'Village 59554, Districts 5955, City 595, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26374, 'regionable_type'=>'village']); //Babalan
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26375, 'regionable_type'=>'village']); //Berahan Kulon
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26376, 'regionable_type'=>'village']); //Berahan Wetan
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26377, 'regionable_type'=>'village']); //Buko
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26378, 'regionable_type'=>'village']); //Bungo
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26379, 'regionable_type'=>'village']); //Jetak
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26380, 'regionable_type'=>'village']); //Jungpasir
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26381, 'regionable_type'=>'village']); //Jungsemi
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26382, 'regionable_type'=>'village']); //Kedungkarang
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26383, 'regionable_type'=>'village']); //Kedungmutih
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26384, 'regionable_type'=>'village']); //Kendalasem
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26385, 'regionable_type'=>'village']); //Kenduren
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26386, 'regionable_type'=>'village']); //Mandung
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26387, 'regionable_type'=>'village']); //Mutih Kulon
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26388, 'regionable_type'=>'village']); //Mutih Wetan
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26389, 'regionable_type'=>'village']); //Ngawen
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26390, 'regionable_type'=>'village']); //Ruwit
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26391, 'regionable_type'=>'village']); //Tedunan
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26392, 'regionable_type'=>'village']); //Tempel
                DB::table('regionables')->insert(['region_id'=>2989, 'regionable_id'=>26393, 'regionable_type'=>'village']); //Wedung
            DB::table('regions')->insert(['id'=>2990, 'parent'=>2985, 'code'=>'5956', 'type'=>'districts', 'name'=>'Districts 5956, City 595, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2990, 'regionable_id'=>2410, 'regionable_type'=>'districts']); //Karang Tengah
            DB::table('regionables')->insert(['region_id'=>2990, 'regionable_id'=>2411, 'regionable_type'=>'districts']); //Sayung
            DB::table('regionables')->insert(['region_id'=>2990, 'regionable_id'=>2412, 'regionable_type'=>'districts']); //Guntur
            DB::table('regionables')->insert(['region_id'=>2990, 'regionable_id'=>2413, 'regionable_type'=>'districts']); //Karangawen
            DB::table('regionables')->insert(['region_id'=>2990, 'regionable_id'=>2414, 'regionable_type'=>'districts']); //Mranggen
                DB::table('regions')->insert(['id'=>2991, 'parent'=>2990, 'code'=>'59567', 'type'=>'village', 'name'=>'Village 59567, Districts 5956, City 595, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26463, 'regionable_type'=>'village']); //Bandungrejo
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26464, 'regionable_type'=>'village']); //Banyumeneng
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26465, 'regionable_type'=>'village']); //Batursari
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26466, 'regionable_type'=>'village']); //Brumbung
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26467, 'regionable_type'=>'village']); //Candisari
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26468, 'regionable_type'=>'village']); //Jamus
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26469, 'regionable_type'=>'village']); //Kalitengah
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26470, 'regionable_type'=>'village']); //Kangkung
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26471, 'regionable_type'=>'village']); //Karangsono
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26472, 'regionable_type'=>'village']); //Kebonbatur
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26473, 'regionable_type'=>'village']); //Kembangarum
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26474, 'regionable_type'=>'village']); //Menur
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26475, 'regionable_type'=>'village']); //Mranggen
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26476, 'regionable_type'=>'village']); //Ngemplak
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26477, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26478, 'regionable_type'=>'village']); //Tamansari
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26479, 'regionable_type'=>'village']); //Tegalarum
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26480, 'regionable_type'=>'village']); //Waru
                DB::table('regionables')->insert(['region_id'=>2991, 'regionable_id'=>26481, 'regionable_type'=>'village']); //Wringin Jajar
            DB::table('regions')->insert(['id'=>2992, 'parent'=>2985, 'code'=>'5957', 'type'=>'districts', 'name'=>'Districts 5957, City 595, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2992, 'regionable_id'=>2415, 'regionable_type'=>'districts']); //Wonosalam
            DB::table('regionables')->insert(['region_id'=>2992, 'regionable_id'=>2416, 'regionable_type'=>'districts']); //Dempet
                DB::table('regions')->insert(['id'=>2993, 'parent'=>2992, 'code'=>'59573', 'type'=>'village', 'name'=>'Village 59573, Districts 5957, City 595, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26503, 'regionable_type'=>'village']); //Balerejo
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26504, 'regionable_type'=>'village']); //Baleromo
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26505, 'regionable_type'=>'village']); //Botosengon
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26506, 'regionable_type'=>'village']); //Brakas
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26507, 'regionable_type'=>'village']); //Dempet
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26508, 'regionable_type'=>'village']); //Gempoldenok
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26509, 'regionable_type'=>'village']); //Harjowinangun
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26510, 'regionable_type'=>'village']); //Jerukgulung
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26511, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26512, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26513, 'regionable_type'=>'village']); //Kedungori
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26514, 'regionable_type'=>'village']); //Kramat
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26515, 'regionable_type'=>'village']); //Kunir
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26516, 'regionable_type'=>'village']); //Kuwu
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26517, 'regionable_type'=>'village']); //Merak
                DB::table('regionables')->insert(['region_id'=>2993, 'regionable_id'=>26518, 'regionable_type'=>'village']); //Sidomulyo
            DB::table('regions')->insert(['id'=>2994, 'parent'=>2985, 'code'=>'5958', 'type'=>'districts', 'name'=>'Districts 5958, City 595, Province 5']);
            DB::table('regionables')->insert(['region_id'=>2994, 'regionable_id'=>2417, 'regionable_type'=>'districts']); //Gajah
            DB::table('regionables')->insert(['region_id'=>2994, 'regionable_id'=>2418, 'regionable_type'=>'districts']); //Karanganyar
            DB::table('regionables')->insert(['region_id'=>2994, 'regionable_id'=>2419, 'regionable_type'=>'districts']); //Kebonagung
            DB::table('regionables')->insert(['region_id'=>2994, 'regionable_id'=>2420, 'regionable_type'=>'districts']); //Mijen
                DB::table('regions')->insert(['id'=>2995, 'parent'=>2994, 'code'=>'59583', 'type'=>'village', 'name'=>'Village 59583, Districts 5958, City 595, Province 5']);
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26554, 'regionable_type'=>'village']); //Babad
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26555, 'regionable_type'=>'village']); //Kebonagung
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26556, 'regionable_type'=>'village']); //Klampok Lor
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26557, 'regionable_type'=>'village']); //Mangunan Lor
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26558, 'regionable_type'=>'village']); //Mangunrejo
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26559, 'regionable_type'=>'village']); //Megonten
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26560, 'regionable_type'=>'village']); //Mijen
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26561, 'regionable_type'=>'village']); //Pilangwetan
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26562, 'regionable_type'=>'village']); //Prigi
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26563, 'regionable_type'=>'village']); //Sarimulyo
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26564, 'regionable_type'=>'village']); //Soko Kidul
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26565, 'regionable_type'=>'village']); //Solowire
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26566, 'regionable_type'=>'village']); //Tlogosih
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26567, 'regionable_type'=>'village']); //Werdoyo
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26568, 'regionable_type'=>'village']); //Bakung
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26569, 'regionable_type'=>'village']); //Banteng Mati
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26570, 'regionable_type'=>'village']); //Bermi
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26571, 'regionable_type'=>'village']); //Gempolsongo
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26572, 'regionable_type'=>'village']); //Geneng
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26573, 'regionable_type'=>'village']); //Jleper
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26574, 'regionable_type'=>'village']); //Mijen
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26575, 'regionable_type'=>'village']); //Mlaten
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26576, 'regionable_type'=>'village']); //Ngegot
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26577, 'regionable_type'=>'village']); //Ngelo Kulon
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26578, 'regionable_type'=>'village']); //Ngelo Wetan
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26579, 'regionable_type'=>'village']); //Pasir
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26580, 'regionable_type'=>'village']); //Pecuk
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26581, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>2995, 'regionable_id'=>26582, 'regionable_type'=>'village']); //Tanggul
    }
}
