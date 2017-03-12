<?php

use Illuminate\Database\Seeder;

class _Region_Province_6 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('regions')->insert(['id'=>2996, 'code'=>'6', 'type'=>'province', 'name'=>'Province 6']);

        //Jawa Timur
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>11, 'regionable_type'=>'province']); //Jawa Timur
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>125, 'regionable_type'=>'city']); //Surabaya city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>126, 'regionable_type'=>'city']); //Gresik regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>127, 'regionable_type'=>'city']); //Sidoarjo regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>128, 'regionable_type'=>'city']); //Mojokerto city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>129, 'regionable_type'=>'city']); //Mojokerto regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>130, 'regionable_type'=>'city']); //Jombang regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>131, 'regionable_type'=>'city']); //Bojonegoro regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>132, 'regionable_type'=>'city']); //Lamongan regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>133, 'regionable_type'=>'city']); //Tuban regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>134, 'regionable_type'=>'city']); //Madiun city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>135, 'regionable_type'=>'city']); //Madiun regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>136, 'regionable_type'=>'city']); //Magetan regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>137, 'regionable_type'=>'city']); //Ngawi regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>138, 'regionable_type'=>'city']); //Ponorogo regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>139, 'regionable_type'=>'city']); //Pacitan regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>140, 'regionable_type'=>'city']); //Kediri city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>141, 'regionable_type'=>'city']); //Kediri regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>142, 'regionable_type'=>'city']); //Nganjuk regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>143, 'regionable_type'=>'city']); //Malang city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>144, 'regionable_type'=>'city']); //Malang regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>145, 'regionable_type'=>'city']); //Batu city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>146, 'regionable_type'=>'city']); //Blitar city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>147, 'regionable_type'=>'city']); //Blitar regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>148, 'regionable_type'=>'city']); //Tulungagung regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>149, 'regionable_type'=>'city']); //Trenggalek regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>150, 'regionable_type'=>'city']); //Pasuruan city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>151, 'regionable_type'=>'city']); //Pasuruan regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>152, 'regionable_type'=>'city']); //Probolinggo city
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>153, 'regionable_type'=>'city']); //Probolinggo regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>154, 'regionable_type'=>'city']); //Lumajang regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>155, 'regionable_type'=>'city']); //Jember regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>156, 'regionable_type'=>'city']); //Bondowoso regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>157, 'regionable_type'=>'city']); //Situbondo regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>158, 'regionable_type'=>'city']); //Banyuwangi regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>159, 'regionable_type'=>'city']); //Bangkalan regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>160, 'regionable_type'=>'city']); //Sampang regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>161, 'regionable_type'=>'city']); //Pamekasan regencies
        DB::table('regionables')->insert(['region_id'=>2996, 'regionable_id'=>162, 'regionable_type'=>'city']); //Sumenep regencies

        DB::table('regions')->insert(['id'=>2997, 'parent'=>2996, 'code'=>'601', 'type'=>'city', 'name'=>'City 601, Province 6']);
        DB::table('regionables')->insert(['region_id'=>2997, 'regionable_id'=>125, 'regionable_type'=>'city']); //Surabaya city
            DB::table('regions')->insert(['id'=>2998, 'parent'=>2997, 'code'=>'6011', 'type'=>'districts', 'name'=>'Districts 6011, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>2998, 'regionable_id'=>2421, 'regionable_type'=>'districts']); //Sukolilo
            DB::table('regionables')->insert(['region_id'=>2998, 'regionable_id'=>2422, 'regionable_type'=>'districts']); //Mulyorejo
                DB::table('regions')->insert(['id'=>2999, 'parent'=>2998, 'code'=>'60112', 'type'=>'village', 'name'=>'Village 60112, Districts 6011, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>2999, 'regionable_id'=>26590, 'regionable_type'=>'village']); //Kalisari
                DB::table('regionables')->insert(['region_id'=>2999, 'regionable_id'=>26591, 'regionable_type'=>'village']); //Kejawen Putih Tambak
                DB::table('regions')->insert(['id'=>3000, 'parent'=>2998, 'code'=>'60113', 'type'=>'village', 'name'=>'Village 60113, Districts 6011, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3000, 'regionable_id'=>26592, 'regionable_type'=>'village']); //Dukuh Sutorejo
                DB::table('regions')->insert(['id'=>3001, 'parent'=>2998, 'code'=>'60114', 'type'=>'village', 'name'=>'Village 60114, Districts 6011, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3001, 'regionable_id'=>26593, 'regionable_type'=>'village']); //Kalijudan
                DB::table('regions')->insert(['id'=>3002, 'parent'=>2998, 'code'=>'60115', 'type'=>'village', 'name'=>'Village 60115, Districts 6011, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3002, 'regionable_id'=>26594, 'regionable_type'=>'village']); //Mulyorejo
                DB::table('regions')->insert(['id'=>3003, 'parent'=>2998, 'code'=>'60116', 'type'=>'village', 'name'=>'Village 60116, Districts 6011, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3003, 'regionable_id'=>26595, 'regionable_type'=>'village']); //Manyar Sabrangan
            DB::table('regions')->insert(['id'=>3004, 'parent'=>2997, 'code'=>'6012', 'type'=>'districts', 'name'=>'Districts 6012, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3004, 'regionable_id'=>2423, 'regionable_type'=>'districts']); //Bulak
            DB::table('regionables')->insert(['region_id'=>3004, 'regionable_id'=>2424, 'regionable_type'=>'districts']); //Kenjeran
                DB::table('regions')->insert(['id'=>3005, 'parent'=>3004, 'code'=>'60126', 'type'=>'village', 'name'=>'Village 60126, Districts 6012, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3005, 'regionable_id'=>26601, 'regionable_type'=>'village']); //Tambak Wedi
                DB::table('regions')->insert(['id'=>3006, 'parent'=>3004, 'code'=>'60127', 'type'=>'village', 'name'=>'Village 60127, Districts 6012, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3006, 'regionable_id'=>26602, 'regionable_type'=>'village']); //Bulak Banteng
                DB::table('regions')->insert(['id'=>3007, 'parent'=>3004, 'code'=>'60128', 'type'=>'village', 'name'=>'Village 60128, Districts 6012, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3007, 'regionable_id'=>26603, 'regionable_type'=>'village']); //Sidotopo/sidoropo Wetan
                DB::table('regions')->insert(['id'=>3008, 'parent'=>3004, 'code'=>'60129', 'type'=>'village', 'name'=>'Village 60129, Districts 6012, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3008, 'regionable_id'=>26604, 'regionable_type'=>'village']); //Tanah Kali Kedinding
            DB::table('regions')->insert(['id'=>3009, 'parent'=>2997, 'code'=>'6013', 'type'=>'districts', 'name'=>'Districts 6013, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3009, 'regionable_id'=>2425, 'regionable_type'=>'districts']); //Tambaksari
                DB::table('regions')->insert(['id'=>3010, 'parent'=>3009, 'code'=>'60131', 'type'=>'village', 'name'=>'Village 60131, Districts 6013, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3010, 'regionable_id'=>26605, 'regionable_type'=>'village']); //Pacar Keling
                DB::table('regions')->insert(['id'=>3011, 'parent'=>3009, 'code'=>'60132', 'type'=>'village', 'name'=>'Village 60132, Districts 6013, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3011, 'regionable_id'=>26606, 'regionable_type'=>'village']); //Pacar Kembang
                DB::table('regions')->insert(['id'=>3012, 'parent'=>3009, 'code'=>'60133', 'type'=>'village', 'name'=>'Village 60133, Districts 6013, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3012, 'regionable_id'=>26607, 'regionable_type'=>'village']); //Ploso
                DB::table('regions')->insert(['id'=>3013, 'parent'=>3009, 'code'=>'60134', 'type'=>'village', 'name'=>'Village 60134, Districts 6013, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3013, 'regionable_id'=>26608, 'regionable_type'=>'village']); //Gading
                DB::table('regions')->insert(['id'=>3014, 'parent'=>3009, 'code'=>'60135', 'type'=>'village', 'name'=>'Village 60135, Districts 6013, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3014, 'regionable_id'=>26609, 'regionable_type'=>'village']); //Rangkah
                DB::table('regions')->insert(['id'=>3015, 'parent'=>3009, 'code'=>'60136', 'type'=>'village', 'name'=>'Village 60136, Districts 6013, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3015, 'regionable_id'=>26610, 'regionable_type'=>'village']); //Tambaksari
                DB::table('regions')->insert(['id'=>3016, 'parent'=>3009, 'code'=>'60137', 'type'=>'village', 'name'=>'Village 60137, Districts 6013, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3016, 'regionable_id'=>26611, 'regionable_type'=>'village']); //Kapasmadya Baru
                DB::table('regions')->insert(['id'=>3017, 'parent'=>3009, 'code'=>'60138', 'type'=>'village', 'name'=>'Village 60138, Districts 6013, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3017, 'regionable_id'=>26612, 'regionable_type'=>'village']); //Dukuh Setro
            DB::table('regions')->insert(['id'=>3018, 'parent'=>2997, 'code'=>'6014', 'type'=>'districts', 'name'=>'Districts 6014, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3018, 'regionable_id'=>2426, 'regionable_type'=>'districts']); //Simokerto
                DB::table('regions')->insert(['id'=>3019, 'parent'=>3018, 'code'=>'60141', 'type'=>'village', 'name'=>'Village 60141, Districts 6014, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3019, 'regionable_id'=>26613, 'regionable_type'=>'village']); //Kapasan
                DB::table('regions')->insert(['id'=>3020, 'parent'=>3018, 'code'=>'60142', 'type'=>'village', 'name'=>'Village 60142, Districts 6014, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3020, 'regionable_id'=>26614, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regions')->insert(['id'=>3021, 'parent'=>3018, 'code'=>'60143', 'type'=>'village', 'name'=>'Village 60143, Districts 6014, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3021, 'regionable_id'=>26615, 'regionable_type'=>'village']); //Simokerto
                DB::table('regions')->insert(['id'=>3022, 'parent'=>3018, 'code'=>'60144', 'type'=>'village', 'name'=>'Village 60144, Districts 6014, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3022, 'regionable_id'=>26616, 'regionable_type'=>'village']); //Simolawang
                DB::table('regions')->insert(['id'=>3023, 'parent'=>3018, 'code'=>'60145', 'type'=>'village', 'name'=>'Village 60145, Districts 6014, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3023, 'regionable_id'=>26617, 'regionable_type'=>'village']); //Sidodadi
            DB::table('regions')->insert(['id'=>3024, 'parent'=>2997, 'code'=>'6015', 'type'=>'districts', 'name'=>'Districts 6015, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3024, 'regionable_id'=>2427, 'regionable_type'=>'districts']); //Semampir
                DB::table('regions')->insert(['id'=>3025, 'parent'=>3024, 'code'=>'60151', 'type'=>'village', 'name'=>'Village 60151, Districts 6015, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3025, 'regionable_id'=>26618, 'regionable_type'=>'village']); //Ampel
                DB::table('regions')->insert(['id'=>3026, 'parent'=>3024, 'code'=>'60152', 'type'=>'village', 'name'=>'Village 60152, Districts 6015, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3026, 'regionable_id'=>26619, 'regionable_type'=>'village']); //Sidotopo
                DB::table('regions')->insert(['id'=>3027, 'parent'=>3024, 'code'=>'60153', 'type'=>'village', 'name'=>'Village 60153, Districts 6015, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3027, 'regionable_id'=>26620, 'regionable_type'=>'village']); //Pegirian
                DB::table('regions')->insert(['id'=>3028, 'parent'=>3024, 'code'=>'60154', 'type'=>'village', 'name'=>'Village 60154, Districts 6015, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3028, 'regionable_id'=>26621, 'regionable_type'=>'village']); //Wonokusumo
                DB::table('regions')->insert(['id'=>3029, 'parent'=>3024, 'code'=>'60155', 'type'=>'village', 'name'=>'Village 60155, Districts 6015, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3029, 'regionable_id'=>26622, 'regionable_type'=>'village']); //Ujung
            DB::table('regions')->insert(['id'=>3030, 'parent'=>2997, 'code'=>'6016', 'type'=>'districts', 'name'=>'Districts 6016, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3030, 'regionable_id'=>2428, 'regionable_type'=>'districts']); //Pabean Cantikan
                DB::table('regions')->insert(['id'=>3031, 'parent'=>3030, 'code'=>'60161', 'type'=>'village', 'name'=>'Village 60161, Districts 6016, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3031, 'regionable_id'=>26623, 'regionable_type'=>'village']); //Bongkaran
                DB::table('regions')->insert(['id'=>3032, 'parent'=>3030, 'code'=>'60162', 'type'=>'village', 'name'=>'Village 60162, Districts 6016, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3032, 'regionable_id'=>26624, 'regionable_type'=>'village']); //Nyamplungan
                DB::table('regions')->insert(['id'=>3033, 'parent'=>3030, 'code'=>'60163', 'type'=>'village', 'name'=>'Village 60163, Districts 6016, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3033, 'regionable_id'=>26625, 'regionable_type'=>'village']); //Krembangan Utara
                DB::table('regions')->insert(['id'=>3034, 'parent'=>3030, 'code'=>'60164', 'type'=>'village', 'name'=>'Village 60164, Districts 6016, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3034, 'regionable_id'=>26626, 'regionable_type'=>'village']); //Perak Timur
                DB::table('regions')->insert(['id'=>3035, 'parent'=>3030, 'code'=>'60165', 'type'=>'village', 'name'=>'Village 60165, Districts 6016, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3035, 'regionable_id'=>26627, 'regionable_type'=>'village']); //Perak Utara
            DB::table('regions')->insert(['id'=>3036, 'parent'=>2997, 'code'=>'6017', 'type'=>'districts', 'name'=>'Districts 6017, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3036, 'regionable_id'=>2429, 'regionable_type'=>'districts']); //Bubutan
            DB::table('regionables')->insert(['region_id'=>3036, 'regionable_id'=>2430, 'regionable_type'=>'districts']); //Krembangan
                DB::table('regions')->insert(['id'=>3037, 'parent'=>3036, 'code'=>'60175', 'type'=>'village', 'name'=>'Village 60175, Districts 6017, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3037, 'regionable_id'=>26633, 'regionable_type'=>'village']); //Krembangan Selatan
                DB::table('regions')->insert(['id'=>3038, 'parent'=>3036, 'code'=>'60176', 'type'=>'village', 'name'=>'Village 60176, Districts 6017, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3038, 'regionable_id'=>26634, 'regionable_type'=>'village']); //Kemayoran
                DB::table('regions')->insert(['id'=>3039, 'parent'=>3036, 'code'=>'60177', 'type'=>'village', 'name'=>'Village 60177, Districts 6017, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3039, 'regionable_id'=>26635, 'regionable_type'=>'village']); //Perak Barat
                DB::table('regions')->insert(['id'=>3040, 'parent'=>3036, 'code'=>'60178', 'type'=>'village', 'name'=>'Village 60178, Districts 6017, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3040, 'regionable_id'=>26636, 'regionable_type'=>'village']); //Moro Krembangan
                DB::table('regions')->insert(['id'=>3041, 'parent'=>3036, 'code'=>'60179', 'type'=>'village', 'name'=>'Village 60179, Districts 6017, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3041, 'regionable_id'=>26637, 'regionable_type'=>'village']); //Dupak
            DB::table('regions')->insert(['id'=>3042, 'parent'=>2997, 'code'=>'6018', 'type'=>'districts', 'name'=>'Districts 6018, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3042, 'regionable_id'=>2431, 'regionable_type'=>'districts']); //Asemrowo
            DB::table('regionables')->insert(['region_id'=>3042, 'regionable_id'=>2432, 'regionable_type'=>'districts']); //Tandes
            DB::table('regionables')->insert(['region_id'=>3042, 'regionable_id'=>2433, 'regionable_type'=>'districts']); //Sukomanunggal
                DB::table('regions')->insert(['id'=>3043, 'parent'=>3042, 'code'=>'60187', 'type'=>'village', 'name'=>'Village 60187, Districts 6018, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3043, 'regionable_id'=>26648, 'regionable_type'=>'village']); //Tandes (kidul/lor/gedang Asin)
                DB::table('regionables')->insert(['region_id'=>3043, 'regionable_id'=>26649, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regions')->insert(['id'=>3044, 'parent'=>3042, 'code'=>'60188', 'type'=>'village', 'name'=>'Village 60188, Districts 6018, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3044, 'regionable_id'=>26650, 'regionable_type'=>'village']); //Suko Manunggal
                DB::table('regions')->insert(['id'=>3045, 'parent'=>3042, 'code'=>'60189', 'type'=>'village', 'name'=>'Village 60189, Districts 6018, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3045, 'regionable_id'=>26651, 'regionable_type'=>'village']); //Putat Gede
                DB::table('regionables')->insert(['region_id'=>3045, 'regionable_id'=>26652, 'regionable_type'=>'village']); //Sonokwijenan
            DB::table('regions')->insert(['id'=>3046, 'parent'=>2997, 'code'=>'6019', 'type'=>'districts', 'name'=>'Districts 6019, City 601, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3046, 'regionable_id'=>2434, 'regionable_type'=>'districts']); //Benowo
            DB::table('regionables')->insert(['region_id'=>3046, 'regionable_id'=>2435, 'regionable_type'=>'districts']); //Pakal
            DB::table('regionables')->insert(['region_id'=>3046, 'regionable_id'=>2436, 'regionable_type'=>'districts']); //Sambikerep
                DB::table('regions')->insert(['id'=>3047, 'parent'=>3046, 'code'=>'60195', 'type'=>'village', 'name'=>'Village 60195, Districts 6019, City 601, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3047, 'regionable_id'=>26664, 'regionable_type'=>'village']); //Benowo
        DB::table('regions')->insert(['id'=>3048, 'parent'=>2996, 'code'=>'602', 'type'=>'city', 'name'=>'City 602, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3048, 'regionable_id'=>125, 'regionable_type'=>'city']); //Surabaya city
            DB::table('regions')->insert(['id'=>3049, 'parent'=>3048, 'code'=>'6021', 'type'=>'districts', 'name'=>'Districts 6021, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3049, 'regionable_id'=>2436, 'regionable_type'=>'districts']); //Sambikerep
            DB::table('regionables')->insert(['region_id'=>3049, 'regionable_id'=>2437, 'regionable_type'=>'districts']); //Lakar Santri
                DB::table('regions')->insert(['id'=>3050, 'parent'=>3049, 'code'=>'60211', 'type'=>'village', 'name'=>'Village 60211, Districts 6021, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3050, 'regionable_id'=>26669, 'regionable_type'=>'village']); //Lakar Santri
                DB::table('regions')->insert(['id'=>3051, 'parent'=>3049, 'code'=>'60212', 'type'=>'village', 'name'=>'Village 60212, Districts 6021, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3051, 'regionable_id'=>26670, 'regionable_type'=>'village']); //Jeruk
                DB::table('regions')->insert(['id'=>3052, 'parent'=>3049, 'code'=>'60213', 'type'=>'village', 'name'=>'Village 60213, Districts 6021, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3052, 'regionable_id'=>26671, 'regionable_type'=>'village']); //Lidah Kulon
                DB::table('regionables')->insert(['region_id'=>3052, 'regionable_id'=>26672, 'regionable_type'=>'village']); //Lidah Wetan
                DB::table('regions')->insert(['id'=>3053, 'parent'=>3049, 'code'=>'60214', 'type'=>'village', 'name'=>'Village 60214, Districts 6021, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3053, 'regionable_id'=>26673, 'regionable_type'=>'village']); //Bangkingan (bangkringan)
                DB::table('regions')->insert(['id'=>3054, 'parent'=>3049, 'code'=>'60215', 'type'=>'village', 'name'=>'Village 60215, Districts 6021, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3054, 'regionable_id'=>26674, 'regionable_type'=>'village']); //Sumur Welut
            DB::table('regions')->insert(['id'=>3055, 'parent'=>3048, 'code'=>'6022', 'type'=>'districts', 'name'=>'Districts 6022, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3055, 'regionable_id'=>2438, 'regionable_type'=>'districts']); //Karangpilang
            DB::table('regionables')->insert(['region_id'=>3055, 'regionable_id'=>2439, 'regionable_type'=>'districts']); //Wiyung
            DB::table('regionables')->insert(['region_id'=>3055, 'regionable_id'=>2440, 'regionable_type'=>'districts']); //Dukuh Pakis
                DB::table('regions')->insert(['id'=>3056, 'parent'=>3055, 'code'=>'60224', 'type'=>'village', 'name'=>'Village 60224, Districts 6022, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3056, 'regionable_id'=>26683, 'regionable_type'=>'village']); //Gunungsari
                DB::table('regions')->insert(['id'=>3057, 'parent'=>3055, 'code'=>'60225', 'type'=>'village', 'name'=>'Village 60225, Districts 6022, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3057, 'regionable_id'=>26684, 'regionable_type'=>'village']); //Dukuh Kupang
                DB::table('regionables')->insert(['region_id'=>3057, 'regionable_id'=>26685, 'regionable_type'=>'village']); //Dukuh Pakis
                DB::table('regions')->insert(['id'=>3058, 'parent'=>3055, 'code'=>'60226', 'type'=>'village', 'name'=>'Village 60226, Districts 6022, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3058, 'regionable_id'=>26686, 'regionable_type'=>'village']); //Pradah Kali Kendal
            DB::table('regions')->insert(['id'=>3059, 'parent'=>3048, 'code'=>'6023', 'type'=>'districts', 'name'=>'Districts 6023, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3059, 'regionable_id'=>2441, 'regionable_type'=>'districts']); //Gayungan
            DB::table('regionables')->insert(['region_id'=>3059, 'regionable_id'=>2442, 'regionable_type'=>'districts']); //Jambangan
            DB::table('regionables')->insert(['region_id'=>3059, 'regionable_id'=>2443, 'regionable_type'=>'districts']); //Wonocolo
                DB::table('regions')->insert(['id'=>3060, 'parent'=>3059, 'code'=>'60236', 'type'=>'village', 'name'=>'Village 60236, Districts 6023, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3060, 'regionable_id'=>26695, 'regionable_type'=>'village']); //Siwalankerto
                DB::table('regions')->insert(['id'=>3061, 'parent'=>3059, 'code'=>'60237', 'type'=>'village', 'name'=>'Village 60237, Districts 6023, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3061, 'regionable_id'=>26696, 'regionable_type'=>'village']); //Jemur Wonosari
                DB::table('regions')->insert(['id'=>3062, 'parent'=>3059, 'code'=>'60238', 'type'=>'village', 'name'=>'Village 60238, Districts 6023, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3062, 'regionable_id'=>26697, 'regionable_type'=>'village']); //Margorejo
                DB::table('regions')->insert(['id'=>3063, 'parent'=>3059, 'code'=>'60239', 'type'=>'village', 'name'=>'Village 60239, Districts 6023, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3063, 'regionable_id'=>26698, 'regionable_type'=>'village']); //Bendul Merisi
                DB::table('regionables')->insert(['region_id'=>3063, 'regionable_id'=>26699, 'regionable_type'=>'village']); //Sidosermo
            DB::table('regions')->insert(['id'=>3064, 'parent'=>3048, 'code'=>'6024', 'type'=>'districts', 'name'=>'Districts 6024, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3064, 'regionable_id'=>2444, 'regionable_type'=>'districts']); //Wonokromo
                DB::table('regions')->insert(['id'=>3065, 'parent'=>3064, 'code'=>'60241', 'type'=>'village', 'name'=>'Village 60241, Districts 6024, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3065, 'regionable_id'=>26700, 'regionable_type'=>'village']); //Darmo
                DB::table('regions')->insert(['id'=>3066, 'parent'=>3064, 'code'=>'60242', 'type'=>'village', 'name'=>'Village 60242, Districts 6024, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3066, 'regionable_id'=>26701, 'regionable_type'=>'village']); //Sawunggaling
                DB::table('regions')->insert(['id'=>3067, 'parent'=>3064, 'code'=>'60243', 'type'=>'village', 'name'=>'Village 60243, Districts 6024, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3067, 'regionable_id'=>26702, 'regionable_type'=>'village']); //Wonokromo
                DB::table('regions')->insert(['id'=>3068, 'parent'=>3064, 'code'=>'60244', 'type'=>'village', 'name'=>'Village 60244, Districts 6024, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3068, 'regionable_id'=>26703, 'regionable_type'=>'village']); //Jagir
                DB::table('regions')->insert(['id'=>3069, 'parent'=>3064, 'code'=>'60245', 'type'=>'village', 'name'=>'Village 60245, Districts 6024, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3069, 'regionable_id'=>26704, 'regionable_type'=>'village']); //Ngagelrejo
                DB::table('regions')->insert(['id'=>3070, 'parent'=>3064, 'code'=>'60246', 'type'=>'village', 'name'=>'Village 60246, Districts 6024, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3070, 'regionable_id'=>26705, 'regionable_type'=>'village']); //Ngagel
            DB::table('regions')->insert(['id'=>3071, 'parent'=>3048, 'code'=>'6025', 'type'=>'districts', 'name'=>'Districts 6025, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3071, 'regionable_id'=>2445, 'regionable_type'=>'districts']); //Sawahan
                DB::table('regions')->insert(['id'=>3072, 'parent'=>3071, 'code'=>'60251', 'type'=>'village', 'name'=>'Village 60251, Districts 6025, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3072, 'regionable_id'=>26706, 'regionable_type'=>'village']); //Sawahan
                DB::table('regions')->insert(['id'=>3073, 'parent'=>3071, 'code'=>'60252', 'type'=>'village', 'name'=>'Village 60252, Districts 6025, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3073, 'regionable_id'=>26707, 'regionable_type'=>'village']); //Petemon
                DB::table('regions')->insert(['id'=>3074, 'parent'=>3071, 'code'=>'60253', 'type'=>'village', 'name'=>'Village 60253, Districts 6025, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3074, 'regionable_id'=>26708, 'regionable_type'=>'village']); //Kupang Krajan
                DB::table('regions')->insert(['id'=>3075, 'parent'=>3071, 'code'=>'60254', 'type'=>'village', 'name'=>'Village 60254, Districts 6025, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3075, 'regionable_id'=>26709, 'regionable_type'=>'village']); //Banyu Urip
                DB::table('regions')->insert(['id'=>3076, 'parent'=>3071, 'code'=>'60255', 'type'=>'village', 'name'=>'Village 60255, Districts 6025, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3076, 'regionable_id'=>26710, 'regionable_type'=>'village']); //Putat Jaya
                DB::table('regions')->insert(['id'=>3077, 'parent'=>3071, 'code'=>'60256', 'type'=>'village', 'name'=>'Village 60256, Districts 6025, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3077, 'regionable_id'=>26711, 'regionable_type'=>'village']); //Pakis
            DB::table('regions')->insert(['id'=>3078, 'parent'=>3048, 'code'=>'6026', 'type'=>'districts', 'name'=>'Districts 6026, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3078, 'regionable_id'=>2446, 'regionable_type'=>'districts']); //Tegalsari
                DB::table('regions')->insert(['id'=>3079, 'parent'=>3078, 'code'=>'60261', 'type'=>'village', 'name'=>'Village 60261, Districts 6026, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3079, 'regionable_id'=>26712, 'regionable_type'=>'village']); //Kedungdoro
                DB::table('regions')->insert(['id'=>3080, 'parent'=>3078, 'code'=>'60262', 'type'=>'village', 'name'=>'Village 60262, Districts 6026, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3080, 'regionable_id'=>26713, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regions')->insert(['id'=>3081, 'parent'=>3078, 'code'=>'60263', 'type'=>'village', 'name'=>'Village 60263, Districts 6026, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3081, 'regionable_id'=>26714, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regions')->insert(['id'=>3082, 'parent'=>3078, 'code'=>'60264', 'type'=>'village', 'name'=>'Village 60264, Districts 6026, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3082, 'regionable_id'=>26715, 'regionable_type'=>'village']); //Dr. Sutomo
                DB::table('regions')->insert(['id'=>3083, 'parent'=>3078, 'code'=>'60265', 'type'=>'village', 'name'=>'Village 60265, Districts 6026, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3083, 'regionable_id'=>26716, 'regionable_type'=>'village']); //Keputran
            DB::table('regions')->insert(['id'=>3084, 'parent'=>3048, 'code'=>'6027', 'type'=>'districts', 'name'=>'Districts 6027, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3084, 'regionable_id'=>2447, 'regionable_type'=>'districts']); //Genteng
                DB::table('regions')->insert(['id'=>3085, 'parent'=>3084, 'code'=>'60271', 'type'=>'village', 'name'=>'Village 60271, Districts 6027, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3085, 'regionable_id'=>26717, 'regionable_type'=>'village']); //Embong Kaliasin
                DB::table('regions')->insert(['id'=>3086, 'parent'=>3084, 'code'=>'60272', 'type'=>'village', 'name'=>'Village 60272, Districts 6027, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3086, 'regionable_id'=>26718, 'regionable_type'=>'village']); //Ketabang
                DB::table('regions')->insert(['id'=>3087, 'parent'=>3084, 'code'=>'60273', 'type'=>'village', 'name'=>'Village 60273, Districts 6027, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3087, 'regionable_id'=>26719, 'regionable_type'=>'village']); //Kapasari
                DB::table('regions')->insert(['id'=>3088, 'parent'=>3084, 'code'=>'60274', 'type'=>'village', 'name'=>'Village 60274, Districts 6027, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3088, 'regionable_id'=>26720, 'regionable_type'=>'village']); //Peneleh
                DB::table('regions')->insert(['id'=>3089, 'parent'=>3084, 'code'=>'60275', 'type'=>'village', 'name'=>'Village 60275, Districts 6027, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3089, 'regionable_id'=>26721, 'regionable_type'=>'village']); //Genteng
            DB::table('regions')->insert(['id'=>3090, 'parent'=>3048, 'code'=>'6028', 'type'=>'districts', 'name'=>'Districts 6028, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3090, 'regionable_id'=>2433, 'regionable_type'=>'districts']); //Sukomanunggal
            DB::table('regionables')->insert(['region_id'=>3090, 'regionable_id'=>2448, 'regionable_type'=>'districts']); //Gubeng
                DB::table('regions')->insert(['id'=>3091, 'parent'=>3090, 'code'=>'60281', 'type'=>'village', 'name'=>'Village 60281, Districts 6028, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3091, 'regionable_id'=>26653, 'regionable_type'=>'village']); //Simomulyo
                DB::table('regionables')->insert(['region_id'=>3091, 'regionable_id'=>26654, 'regionable_type'=>'village']); //Simomulyo Baru
                DB::table('regionables')->insert(['region_id'=>3091, 'regionable_id'=>26722, 'regionable_type'=>'village']); //Gubeng
                DB::table('regions')->insert(['id'=>3092, 'parent'=>3090, 'code'=>'60282', 'type'=>'village', 'name'=>'Village 60282, Districts 6028, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3092, 'regionable_id'=>26723, 'regionable_type'=>'village']); //Kertajaya
                DB::table('regions')->insert(['id'=>3093, 'parent'=>3090, 'code'=>'60283', 'type'=>'village', 'name'=>'Village 60283, Districts 6028, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3093, 'regionable_id'=>26724, 'regionable_type'=>'village']); //Pucang Sewu
                DB::table('regions')->insert(['id'=>3094, 'parent'=>3090, 'code'=>'60284', 'type'=>'village', 'name'=>'Village 60284, Districts 6028, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3094, 'regionable_id'=>26725, 'regionable_type'=>'village']); //Baratajaya
                DB::table('regions')->insert(['id'=>3095, 'parent'=>3090, 'code'=>'60285', 'type'=>'village', 'name'=>'Village 60285, Districts 6028, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3095, 'regionable_id'=>26726, 'regionable_type'=>'village']); //Mojo
                DB::table('regions')->insert(['id'=>3096, 'parent'=>3090, 'code'=>'60286', 'type'=>'village', 'name'=>'Village 60286, Districts 6028, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3096, 'regionable_id'=>26727, 'regionable_type'=>'village']); //Airlangga
            DB::table('regions')->insert(['id'=>3097, 'parent'=>3048, 'code'=>'6029', 'type'=>'districts', 'name'=>'Districts 6029, City 602, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3097, 'regionable_id'=>2449, 'regionable_type'=>'districts']); //Tenggilis Mejoyo
            DB::table('regionables')->insert(['region_id'=>3097, 'regionable_id'=>2450, 'regionable_type'=>'districts']); //Rungkut
            DB::table('regionables')->insert(['region_id'=>3097, 'regionable_id'=>2451, 'regionable_type'=>'districts']); //Gununganyar
                DB::table('regions')->insert(['id'=>3098, 'parent'=>3097, 'code'=>'60293', 'type'=>'village', 'name'=>'Village 60293, Districts 6029, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3098, 'regionable_id'=>26733, 'regionable_type'=>'village']); //Kali Rungkut
                DB::table('regionables')->insert(['region_id'=>3098, 'regionable_id'=>26734, 'regionable_type'=>'village']); //Rungkut Kidul
                DB::table('regionables')->insert(['region_id'=>3098, 'regionable_id'=>26739, 'regionable_type'=>'village']); //Rungkut Menanggal
                DB::table('regionables')->insert(['region_id'=>3098, 'regionable_id'=>26740, 'regionable_type'=>'village']); //Rungkut Tengah
                DB::table('regions')->insert(['id'=>3099, 'parent'=>3097, 'code'=>'60294', 'type'=>'village', 'name'=>'Village 60294, Districts 6029, City 602, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3099, 'regionable_id'=>26741, 'regionable_type'=>'village']); //Gunung Anyar
                DB::table('regionables')->insert(['region_id'=>3099, 'regionable_id'=>26742, 'regionable_type'=>'village']); //Gunung Anyar Tambak
        DB::table('regions')->insert(['id'=>3100, 'parent'=>2996, 'code'=>'611', 'type'=>'city', 'name'=>'City 611, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3100, 'regionable_id'=>126, 'regionable_type'=>'city']); //Gresik regencies
            DB::table('regions')->insert(['id'=>3101, 'parent'=>3100, 'code'=>'6111', 'type'=>'districts', 'name'=>'Districts 6111, City 611, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3101, 'regionable_id'=>2452, 'regionable_type'=>'districts']); //Gresik
                DB::table('regions')->insert(['id'=>3102, 'parent'=>3101, 'code'=>'61111', 'type'=>'village', 'name'=>'Village 61111, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3102, 'regionable_id'=>26743, 'regionable_type'=>'village']); //Sidokumpul
                DB::table('regionables')->insert(['region_id'=>3102, 'regionable_id'=>26744, 'regionable_type'=>'village']); //Tlogopatut
                DB::table('regions')->insert(['id'=>3103, 'parent'=>3101, 'code'=>'61112', 'type'=>'village', 'name'=>'Village 61112, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3103, 'regionable_id'=>26745, 'regionable_type'=>'village']); //Sidorukun
                DB::table('regions')->insert(['id'=>3104, 'parent'=>3101, 'code'=>'61113', 'type'=>'village', 'name'=>'Village 61113, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3104, 'regionable_id'=>26746, 'regionable_type'=>'village']); //Pulopancikan
                DB::table('regionables')->insert(['region_id'=>3104, 'regionable_id'=>26747, 'regionable_type'=>'village']); //Tlogobendung
                DB::table('regions')->insert(['id'=>3105, 'parent'=>3101, 'code'=>'61114', 'type'=>'village', 'name'=>'Village 61114, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3105, 'regionable_id'=>26748, 'regionable_type'=>'village']); //Bedilan
                DB::table('regionables')->insert(['region_id'=>3105, 'regionable_id'=>26749, 'regionable_type'=>'village']); //Pekauman
                DB::table('regionables')->insert(['region_id'=>3105, 'regionable_id'=>26750, 'regionable_type'=>'village']); //Trate
                DB::table('regions')->insert(['id'=>3106, 'parent'=>3101, 'code'=>'61115', 'type'=>'village', 'name'=>'Village 61115, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3106, 'regionable_id'=>26751, 'regionable_type'=>'village']); //Kebungson
                DB::table('regionables')->insert(['region_id'=>3106, 'regionable_id'=>26752, 'regionable_type'=>'village']); //Kemuteran
                DB::table('regionables')->insert(['region_id'=>3106, 'regionable_id'=>26753, 'regionable_type'=>'village']); //Pekelingan
                DB::table('regions')->insert(['id'=>3107, 'parent'=>3101, 'code'=>'61116', 'type'=>'village', 'name'=>'Village 61116, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3107, 'regionable_id'=>26754, 'regionable_type'=>'village']); //Karangpoh
                DB::table('regionables')->insert(['region_id'=>3107, 'regionable_id'=>26755, 'regionable_type'=>'village']); //Kroman
                DB::table('regionables')->insert(['region_id'=>3107, 'regionable_id'=>26756, 'regionable_type'=>'village']); //Sukodono
                DB::table('regions')->insert(['id'=>3108, 'parent'=>3101, 'code'=>'61117', 'type'=>'village', 'name'=>'Village 61117, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3108, 'regionable_id'=>26757, 'regionable_type'=>'village']); //Lumpur
                DB::table('regions')->insert(['id'=>3109, 'parent'=>3101, 'code'=>'61118', 'type'=>'village', 'name'=>'Village 61118, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3109, 'regionable_id'=>26758, 'regionable_type'=>'village']); //Karangturi
                DB::table('regionables')->insert(['region_id'=>3109, 'regionable_id'=>26759, 'regionable_type'=>'village']); //Tlogopojok
                DB::table('regions')->insert(['id'=>3110, 'parent'=>3101, 'code'=>'61119', 'type'=>'village', 'name'=>'Village 61119, Districts 6111, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3110, 'regionable_id'=>26760, 'regionable_type'=>'village']); //Gapurosukolilo
                DB::table('regionables')->insert(['region_id'=>3110, 'regionable_id'=>26761, 'regionable_type'=>'village']); //Kramatinggil
                DB::table('regionables')->insert(['region_id'=>3110, 'regionable_id'=>26762, 'regionable_type'=>'village']); //Ngipik
                DB::table('regionables')->insert(['region_id'=>3110, 'regionable_id'=>26763, 'regionable_type'=>'village']); //Sukorame
            DB::table('regions')->insert(['id'=>3111, 'parent'=>3100, 'code'=>'6112', 'type'=>'districts', 'name'=>'Districts 6112, City 611, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3111, 'regionable_id'=>2453, 'regionable_type'=>'districts']); //Kebomas
                DB::table('regions')->insert(['id'=>3112, 'parent'=>3111, 'code'=>'61121', 'type'=>'village', 'name'=>'Village 61121, Districts 6112, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3112, 'regionable_id'=>26764, 'regionable_type'=>'village']); //Kawisanyar
                DB::table('regionables')->insert(['region_id'=>3112, 'regionable_id'=>26765, 'regionable_type'=>'village']); //Kebomas
                DB::table('regionables')->insert(['region_id'=>3112, 'regionable_id'=>26766, 'regionable_type'=>'village']); //Randuagung
                DB::table('regions')->insert(['id'=>3113, 'parent'=>3111, 'code'=>'61122', 'type'=>'village', 'name'=>'Village 61122, Districts 6112, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3113, 'regionable_id'=>26767, 'regionable_type'=>'village']); //Sidomoro
                DB::table('regionables')->insert(['region_id'=>3113, 'regionable_id'=>26768, 'regionable_type'=>'village']); //Singosari
                DB::table('regions')->insert(['id'=>3114, 'parent'=>3111, 'code'=>'61123', 'type'=>'village', 'name'=>'Village 61123, Districts 6112, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3114, 'regionable_id'=>26769, 'regionable_type'=>'village']); //Gending
                DB::table('regionables')->insert(['region_id'=>3114, 'regionable_id'=>26770, 'regionable_type'=>'village']); //Segoromadu
                DB::table('regions')->insert(['id'=>3115, 'parent'=>3111, 'code'=>'61124', 'type'=>'village', 'name'=>'Village 61124, Districts 6112, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26771, 'regionable_type'=>'village']); //Dahanrejo
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26772, 'regionable_type'=>'village']); //Giri
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26773, 'regionable_type'=>'village']); //Gulomantung
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26774, 'regionable_type'=>'village']); //Indro
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26775, 'regionable_type'=>'village']); //Karangkering
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26776, 'regionable_type'=>'village']); //Kedanyang
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26777, 'regionable_type'=>'village']); //Kembangan
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26778, 'regionable_type'=>'village']); //Klangonan
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26779, 'regionable_type'=>'village']); //Ngargosari
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26780, 'regionable_type'=>'village']); //Prambangan
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26781, 'regionable_type'=>'village']); //Sekarkurung
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26782, 'regionable_type'=>'village']); //Sidomukti
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26783, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3115, 'regionable_id'=>26784, 'regionable_type'=>'village']); //Tenggulunan
            DB::table('regions')->insert(['id'=>3116, 'parent'=>3100, 'code'=>'6115', 'type'=>'districts', 'name'=>'Districts 6115, City 611, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3116, 'regionable_id'=>2454, 'regionable_type'=>'districts']); //Manyar
            DB::table('regionables')->insert(['region_id'=>3116, 'regionable_id'=>2455, 'regionable_type'=>'districts']); //Bungah
            DB::table('regionables')->insert(['region_id'=>3116, 'regionable_id'=>2456, 'regionable_type'=>'districts']); //Sidayu
            DB::table('regionables')->insert(['region_id'=>3116, 'regionable_id'=>2457, 'regionable_type'=>'districts']); //Ujung Pangkah
            DB::table('regionables')->insert(['region_id'=>3116, 'regionable_id'=>2458, 'regionable_type'=>'districts']); //Dukun
            DB::table('regionables')->insert(['region_id'=>3116, 'regionable_id'=>2459, 'regionable_type'=>'districts']); //Panceng
                DB::table('regions')->insert(['id'=>3117, 'parent'=>3116, 'code'=>'61156', 'type'=>'village', 'name'=>'Village 61156, Districts 6115, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26890, 'regionable_type'=>'village']); //Banyutengah
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26891, 'regionable_type'=>'village']); //Campurejo
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26892, 'regionable_type'=>'village']); //Dalegan
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26893, 'regionable_type'=>'village']); //Doudo
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26894, 'regionable_type'=>'village']); //Ketanen
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26895, 'regionable_type'=>'village']); //Pantenan
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26896, 'regionable_type'=>'village']); //Petung
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26897, 'regionable_type'=>'village']); //Prupuh
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26898, 'regionable_type'=>'village']); //Serah
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26899, 'regionable_type'=>'village']); //Siwalan
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26900, 'regionable_type'=>'village']); //Sukodono
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26901, 'regionable_type'=>'village']); //Sumurber
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26902, 'regionable_type'=>'village']); //Surowiti
                DB::table('regionables')->insert(['region_id'=>3117, 'regionable_id'=>26903, 'regionable_type'=>'village']); //Wotan
            DB::table('regions')->insert(['id'=>3118, 'parent'=>3100, 'code'=>'6116', 'type'=>'districts', 'name'=>'Districts 6116, City 611, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3118, 'regionable_id'=>2460, 'regionable_type'=>'districts']); //Duduk Sampeyan
                DB::table('regions')->insert(['id'=>3119, 'parent'=>3118, 'code'=>'61162', 'type'=>'village', 'name'=>'Village 61162, Districts 6116, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26904, 'regionable_type'=>'village']); //Ambeng Ambeng Watangrejo
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26905, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26906, 'regionable_type'=>'village']); //Duduk Sampeyan
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26907, 'regionable_type'=>'village']); //Glanggang
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26908, 'regionable_type'=>'village']); //Gredek
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26909, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26910, 'regionable_type'=>'village']); //Kawistowindu
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26911, 'regionable_type'=>'village']); //Kemudi
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26912, 'regionable_type'=>'village']); //Kramat Kulon
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26913, 'regionable_type'=>'village']); //Palebon
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26914, 'regionable_type'=>'village']); //Pandanan
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26915, 'regionable_type'=>'village']); //Panjunan
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26916, 'regionable_type'=>'village']); //Petisbenem
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26917, 'regionable_type'=>'village']); //Samirplapan
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26918, 'regionable_type'=>'village']); //Setrohadi
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26919, 'regionable_type'=>'village']); //Sumari
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26920, 'regionable_type'=>'village']); //Sumengko
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26921, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26922, 'regionable_type'=>'village']); //Tebaloan
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26923, 'regionable_type'=>'village']); //Tirem
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26924, 'regionable_type'=>'village']); //Tumapel
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26925, 'regionable_type'=>'village']); //Wadak Kidul
                DB::table('regionables')->insert(['region_id'=>3119, 'regionable_id'=>26926, 'regionable_type'=>'village']); //Wadak Lor
            DB::table('regions')->insert(['id'=>3120, 'parent'=>3100, 'code'=>'6117', 'type'=>'districts', 'name'=>'Districts 6117, City 611, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3120, 'regionable_id'=>2461, 'regionable_type'=>'districts']); //Cerme
            DB::table('regionables')->insert(['region_id'=>3120, 'regionable_id'=>2462, 'regionable_type'=>'districts']); //Benjeng
            DB::table('regionables')->insert(['region_id'=>3120, 'regionable_id'=>2463, 'regionable_type'=>'districts']); //Balong Panggang
            DB::table('regionables')->insert(['region_id'=>3120, 'regionable_id'=>2464, 'regionable_type'=>'districts']); //Menganti
            DB::table('regionables')->insert(['region_id'=>3120, 'regionable_id'=>2465, 'regionable_type'=>'districts']); //Kedamean
            DB::table('regionables')->insert(['region_id'=>3120, 'regionable_id'=>2466, 'regionable_type'=>'districts']); //Wringin Anom
            DB::table('regionables')->insert(['region_id'=>3120, 'regionable_id'=>2467, 'regionable_type'=>'districts']); //Driyorejo
                DB::table('regions')->insert(['id'=>3121, 'parent'=>3120, 'code'=>'61177', 'type'=>'village', 'name'=>'Village 61177, Districts 6117, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27053, 'regionable_type'=>'village']); //Bambe
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27054, 'regionable_type'=>'village']); //Banjaran
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27055, 'regionable_type'=>'village']); //Cangkir
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27056, 'regionable_type'=>'village']); //Driyorejo
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27057, 'regionable_type'=>'village']); //Gadung
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27058, 'regionable_type'=>'village']); //Karangandong
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27059, 'regionable_type'=>'village']); //Kesambenwetan
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27060, 'regionable_type'=>'village']); //Krikilan
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27061, 'regionable_type'=>'village']); //Mojosarirejo
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27062, 'regionable_type'=>'village']); //Mulung
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27063, 'regionable_type'=>'village']); //Petiken
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27064, 'regionable_type'=>'village']); //Randegansari
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27065, 'regionable_type'=>'village']); //Sumput
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27066, 'regionable_type'=>'village']); //Tanjungan
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27067, 'regionable_type'=>'village']); //Tenaru
                DB::table('regionables')->insert(['region_id'=>3121, 'regionable_id'=>27068, 'regionable_type'=>'village']); //Wedoroanom
            DB::table('regions')->insert(['id'=>3122, 'parent'=>3100, 'code'=>'6118', 'type'=>'districts', 'name'=>'Districts 6118, City 611, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3122, 'regionable_id'=>2468, 'regionable_type'=>'districts']); //Sangkapura
            DB::table('regionables')->insert(['region_id'=>3122, 'regionable_id'=>2469, 'regionable_type'=>'districts']); //Tambak
                DB::table('regions')->insert(['id'=>3123, 'parent'=>3122, 'code'=>'61182', 'type'=>'village', 'name'=>'Village 61182, Districts 6118, City 611, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27086, 'regionable_type'=>'village']); //Diponggo
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27087, 'regionable_type'=>'village']); //Gelam
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27088, 'regionable_type'=>'village']); //Grejeg
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27089, 'regionable_type'=>'village']); //Kelompang Gubug
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27090, 'regionable_type'=>'village']); //Kepuh Legundi
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27091, 'regionable_type'=>'village']); //Kepuh Teluk
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27092, 'regionable_type'=>'village']); //Pekalongan
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27093, 'regionable_type'=>'village']); //Peromaan (paromaan)
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27094, 'regionable_type'=>'village']); //Sukalela
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27095, 'regionable_type'=>'village']); //Sukaoneng
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27096, 'regionable_type'=>'village']); //Tambak
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27097, 'regionable_type'=>'village']); //Tanjungori
                DB::table('regionables')->insert(['region_id'=>3123, 'regionable_id'=>27098, 'regionable_type'=>'village']); //Teluk Jatidawang
        DB::table('regions')->insert(['id'=>3124, 'parent'=>2996, 'code'=>'612', 'type'=>'city', 'name'=>'City 612, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3124, 'regionable_id'=>127, 'regionable_type'=>'city']); //Sidoarjo regencies
            DB::table('regions')->insert(['id'=>3125, 'parent'=>3124, 'code'=>'6121', 'type'=>'districts', 'name'=>'Districts 6121, City 612, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3125, 'regionable_id'=>2470, 'regionable_type'=>'districts']); //Taman
            DB::table('regionables')->insert(['region_id'=>3125, 'regionable_id'=>2471, 'regionable_type'=>'districts']); //Sidoarjo
            DB::table('regionables')->insert(['region_id'=>3125, 'regionable_id'=>2472, 'regionable_type'=>'districts']); //Sukodono
                DB::table('regions')->insert(['id'=>3126, 'parent'=>3125, 'code'=>'61216', 'type'=>'village', 'name'=>'Village 61216, Districts 6121, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3126, 'regionable_id'=>27147, 'regionable_type'=>'village']); //Panjunan
            DB::table('regions')->insert(['id'=>3127, 'parent'=>3124, 'code'=>'6122', 'type'=>'districts', 'name'=>'Districts 6122, City 612, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3127, 'regionable_id'=>2471, 'regionable_type'=>'districts']); //Sidoarjo
                DB::table('regions')->insert(['id'=>3128, 'parent'=>3127, 'code'=>'61223', 'type'=>'village', 'name'=>'Village 61223, Districts 6122, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3128, 'regionable_id'=>27133, 'regionable_type'=>'village']); //Lebo
                DB::table('regions')->insert(['id'=>3129, 'parent'=>3127, 'code'=>'61224', 'type'=>'village', 'name'=>'Village 61224, Districts 6122, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3129, 'regionable_id'=>27134, 'regionable_type'=>'village']); //Suko
                DB::table('regions')->insert(['id'=>3130, 'parent'=>3127, 'code'=>'61225', 'type'=>'village', 'name'=>'Village 61225, Districts 6122, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3130, 'regionable_id'=>27135, 'regionable_type'=>'village']); //Banjarbendo
                DB::table('regions')->insert(['id'=>3131, 'parent'=>3127, 'code'=>'61226', 'type'=>'village', 'name'=>'Village 61226, Districts 6122, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3131, 'regionable_id'=>27136, 'regionable_type'=>'village']); //Jati
                DB::table('regions')->insert(['id'=>3132, 'parent'=>3127, 'code'=>'61228', 'type'=>'village', 'name'=>'Village 61228, Districts 6122, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3132, 'regionable_id'=>27137, 'regionable_type'=>'village']); //Sumput
            DB::table('regions')->insert(['id'=>3133, 'parent'=>3124, 'code'=>'6123', 'type'=>'districts', 'name'=>'Districts 6123, City 612, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3133, 'regionable_id'=>2471, 'regionable_type'=>'districts']); //Sidoarjo
                DB::table('regions')->insert(['id'=>3134, 'parent'=>3133, 'code'=>'61231', 'type'=>'village', 'name'=>'Village 61231, Districts 6123, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3134, 'regionable_id'=>27138, 'regionable_type'=>'village']); //Gebang
                DB::table('regions')->insert(['id'=>3135, 'parent'=>3133, 'code'=>'61233', 'type'=>'village', 'name'=>'Village 61233, Districts 6123, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3135, 'regionable_id'=>27139, 'regionable_type'=>'village']); //Bluru Kidul
                DB::table('regions')->insert(['id'=>3136, 'parent'=>3133, 'code'=>'61234', 'type'=>'village', 'name'=>'Village 61234, Districts 6123, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3136, 'regionable_id'=>27140, 'regionable_type'=>'village']); //Bulusidokare
                DB::table('regionables')->insert(['region_id'=>3136, 'regionable_id'=>27141, 'regionable_type'=>'village']); //Cemeng Bakalan
                DB::table('regionables')->insert(['region_id'=>3136, 'regionable_id'=>27142, 'regionable_type'=>'village']); //Cemeng Kalang
                DB::table('regionables')->insert(['region_id'=>3136, 'regionable_id'=>27143, 'regionable_type'=>'village']); //Kemiri
                DB::table('regionables')->insert(['region_id'=>3136, 'regionable_id'=>27144, 'regionable_type'=>'village']); //Rangkahkidul
                DB::table('regionables')->insert(['region_id'=>3136, 'regionable_id'=>27145, 'regionable_type'=>'village']); //Sari Rogo
                DB::table('regionables')->insert(['region_id'=>3136, 'regionable_id'=>27146, 'regionable_type'=>'village']); //Urangagung (jedong)
            DB::table('regions')->insert(['id'=>3137, 'parent'=>3124, 'code'=>'6125', 'type'=>'districts', 'name'=>'Districts 6125, City 612, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3137, 'regionable_id'=>2470, 'regionable_type'=>'districts']); //Taman
            DB::table('regionables')->insert(['region_id'=>3137, 'regionable_id'=>2472, 'regionable_type'=>'districts']); //Sukodono
            DB::table('regionables')->insert(['region_id'=>3137, 'regionable_id'=>2473, 'regionable_type'=>'districts']); //Buduran
            DB::table('regionables')->insert(['region_id'=>3137, 'regionable_id'=>2474, 'regionable_type'=>'districts']); //Sedati
            DB::table('regionables')->insert(['region_id'=>3137, 'regionable_id'=>2475, 'regionable_type'=>'districts']); //Gedangan
            DB::table('regionables')->insert(['region_id'=>3137, 'regionable_id'=>2476, 'regionable_type'=>'districts']); //Waru
                DB::table('regions')->insert(['id'=>3138, 'parent'=>3137, 'code'=>'61256', 'type'=>'village', 'name'=>'Village 61256, Districts 6125, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27212, 'regionable_type'=>'village']); //Berbek
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27213, 'regionable_type'=>'village']); //Bungurasih
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27214, 'regionable_type'=>'village']); //Janti
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27215, 'regionable_type'=>'village']); //Kedungrejo
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27216, 'regionable_type'=>'village']); //Kepuh Kiriman
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27217, 'regionable_type'=>'village']); //Kureksari
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27218, 'regionable_type'=>'village']); //Medaeng
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27219, 'regionable_type'=>'village']); //Ngingas
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27220, 'regionable_type'=>'village']); //Pepelegi
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27221, 'regionable_type'=>'village']); //Tambak Oso
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27222, 'regionable_type'=>'village']); //Tambak Rejo
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27223, 'regionable_type'=>'village']); //Tambak Sawah
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27224, 'regionable_type'=>'village']); //Tambak Sumur
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27225, 'regionable_type'=>'village']); //Tropodo
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27226, 'regionable_type'=>'village']); //Wadungasri
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27227, 'regionable_type'=>'village']); //Waru
                DB::table('regionables')->insert(['region_id'=>3138, 'regionable_id'=>27228, 'regionable_type'=>'village']); //Wedoro
            DB::table('regions')->insert(['id'=>3139, 'parent'=>3124, 'code'=>'6126', 'type'=>'districts', 'name'=>'Districts 6126, City 612, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3139, 'regionable_id'=>2477, 'regionable_type'=>'districts']); //Wonoayu
            DB::table('regionables')->insert(['region_id'=>3139, 'regionable_id'=>2478, 'regionable_type'=>'districts']); //Krian
            DB::table('regionables')->insert(['region_id'=>3139, 'regionable_id'=>2479, 'regionable_type'=>'districts']); //Balongbendo
            DB::table('regionables')->insert(['region_id'=>3139, 'regionable_id'=>2480, 'regionable_type'=>'districts']); //Prambon
            DB::table('regionables')->insert(['region_id'=>3139, 'regionable_id'=>2481, 'regionable_type'=>'districts']); //Tarik
                DB::table('regions')->insert(['id'=>3140, 'parent'=>3139, 'code'=>'61265', 'type'=>'village', 'name'=>'Village 61265, Districts 6126, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27314, 'regionable_type'=>'village']); //Balongmacekan
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27315, 'regionable_type'=>'village']); //Banjarwungu
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27316, 'regionable_type'=>'village']); //Gampingrowo
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27317, 'regionable_type'=>'village']); //Gempolklutuk
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27318, 'regionable_type'=>'village']); //Janti
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27319, 'regionable_type'=>'village']); //Kalimati
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27320, 'regionable_type'=>'village']); //Kedinding
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27321, 'regionable_type'=>'village']); //Kedungbocok
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27322, 'regionable_type'=>'village']); //Kemuning
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27323, 'regionable_type'=>'village']); //Kendalsewu
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27324, 'regionable_type'=>'village']); //Klantingsari
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27325, 'regionable_type'=>'village']); //Kramat Temenggung
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27326, 'regionable_type'=>'village']); //Mergobener
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27327, 'regionable_type'=>'village']); //Mergosari
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27328, 'regionable_type'=>'village']); //Mindugading
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27329, 'regionable_type'=>'village']); //Mliriprowo
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27330, 'regionable_type'=>'village']); //Sebani
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27331, 'regionable_type'=>'village']); //Segodobancang
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27332, 'regionable_type'=>'village']); //Singogalih
                DB::table('regionables')->insert(['region_id'=>3140, 'regionable_id'=>27333, 'regionable_type'=>'village']); //Tarik
            DB::table('regions')->insert(['id'=>3141, 'parent'=>3124, 'code'=>'6127', 'type'=>'districts', 'name'=>'Districts 6127, City 612, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3141, 'regionable_id'=>2482, 'regionable_type'=>'districts']); //Candi
            DB::table('regionables')->insert(['region_id'=>3141, 'regionable_id'=>2483, 'regionable_type'=>'districts']); //Tanggulangin
            DB::table('regionables')->insert(['region_id'=>3141, 'regionable_id'=>2484, 'regionable_type'=>'districts']); //Tulangan
            DB::table('regionables')->insert(['region_id'=>3141, 'regionable_id'=>2485, 'regionable_type'=>'districts']); //Porong
            DB::table('regionables')->insert(['region_id'=>3141, 'regionable_id'=>2486, 'regionable_type'=>'districts']); //Krembung
            DB::table('regionables')->insert(['region_id'=>3141, 'regionable_id'=>2487, 'regionable_type'=>'districts']); //Jabon
                DB::table('regions')->insert(['id'=>3142, 'parent'=>3141, 'code'=>'61276', 'type'=>'village', 'name'=>'Village 61276, Districts 6127, City 612, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27437, 'regionable_type'=>'village']); //Balongtani
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27438, 'regionable_type'=>'village']); //Besuki
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27439, 'regionable_type'=>'village']); //Dukuhsari
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27440, 'regionable_type'=>'village']); //Jemirahan
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27441, 'regionable_type'=>'village']); //Keboguyang
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27442, 'regionable_type'=>'village']); //Kedungcangkring
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27443, 'regionable_type'=>'village']); //Kedungpandan
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27444, 'regionable_type'=>'village']); //Kedungrejo
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27445, 'regionable_type'=>'village']); //Kupang
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27446, 'regionable_type'=>'village']); //Panggreh
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27447, 'regionable_type'=>'village']); //Pejarakan
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27448, 'regionable_type'=>'village']); //Permisan
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27449, 'regionable_type'=>'village']); //Semambung
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27450, 'regionable_type'=>'village']); //Tambak Kalisogo
                DB::table('regionables')->insert(['region_id'=>3142, 'regionable_id'=>27451, 'regionable_type'=>'village']); //Trompoasri
        DB::table('regions')->insert(['id'=>3143, 'parent'=>2996, 'code'=>'613', 'type'=>'city', 'name'=>'City 613, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3143, 'regionable_id'=>128, 'regionable_type'=>'city']); //Mojokerto city
        DB::table('regionables')->insert(['region_id'=>3143, 'regionable_id'=>129, 'regionable_type'=>'city']); //Mojokerto regencies
            DB::table('regions')->insert(['id'=>3144, 'parent'=>3143, 'code'=>'6131', 'type'=>'districts', 'name'=>'Districts 6131, City 613, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3144, 'regionable_id'=>2488, 'regionable_type'=>'districts']); //Magersari
            DB::table('regionables')->insert(['region_id'=>3144, 'regionable_id'=>2508, 'regionable_type'=>'districts']); //Magersari
                DB::table('regions')->insert(['id'=>3145, 'parent'=>3144, 'code'=>'61311', 'type'=>'village', 'name'=>'Village 61311, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3145, 'regionable_id'=>27452, 'regionable_type'=>'village']); //Purwotengah
                DB::table('regionables')->insert(['region_id'=>3145, 'regionable_id'=>27774, 'regionable_type'=>'village']); //Purwotengah
                DB::table('regions')->insert(['id'=>3146, 'parent'=>3144, 'code'=>'61312', 'type'=>'village', 'name'=>'Village 61312, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3146, 'regionable_id'=>27453, 'regionable_type'=>'village']); //Sentanan
                DB::table('regionables')->insert(['region_id'=>3146, 'regionable_id'=>27775, 'regionable_type'=>'village']); //Sentanan
                DB::table('regions')->insert(['id'=>3147, 'parent'=>3144, 'code'=>'61313', 'type'=>'village', 'name'=>'Village 61313, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3147, 'regionable_id'=>27454, 'regionable_type'=>'village']); //Jagalan
                DB::table('regionables')->insert(['region_id'=>3147, 'regionable_id'=>27776, 'regionable_type'=>'village']); //Jagalan
                DB::table('regions')->insert(['id'=>3148, 'parent'=>3144, 'code'=>'61314', 'type'=>'village', 'name'=>'Village 61314, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3148, 'regionable_id'=>27455, 'regionable_type'=>'village']); //Balongsari
                DB::table('regionables')->insert(['region_id'=>3148, 'regionable_id'=>27777, 'regionable_type'=>'village']); //Balongsari
                DB::table('regions')->insert(['id'=>3149, 'parent'=>3144, 'code'=>'61315', 'type'=>'village', 'name'=>'Village 61315, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3149, 'regionable_id'=>27456, 'regionable_type'=>'village']); //Gunung Gedangan
                DB::table('regionables')->insert(['region_id'=>3149, 'regionable_id'=>27457, 'regionable_type'=>'village']); //Meri
                DB::table('regionables')->insert(['region_id'=>3149, 'regionable_id'=>27778, 'regionable_type'=>'village']); //Gunung Gedangan
                DB::table('regionables')->insert(['region_id'=>3149, 'regionable_id'=>27779, 'regionable_type'=>'village']); //Meri
                DB::table('regions')->insert(['id'=>3150, 'parent'=>3144, 'code'=>'61316', 'type'=>'village', 'name'=>'Village 61316, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3150, 'regionable_id'=>27458, 'regionable_type'=>'village']); //Kedundung
                DB::table('regionables')->insert(['region_id'=>3150, 'regionable_id'=>27780, 'regionable_type'=>'village']); //Kedundung
                DB::table('regions')->insert(['id'=>3151, 'parent'=>3144, 'code'=>'61317', 'type'=>'village', 'name'=>'Village 61317, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3151, 'regionable_id'=>27459, 'regionable_type'=>'village']); //Wates
                DB::table('regionables')->insert(['region_id'=>3151, 'regionable_id'=>27781, 'regionable_type'=>'village']); //Wates
                DB::table('regions')->insert(['id'=>3152, 'parent'=>3144, 'code'=>'61318', 'type'=>'village', 'name'=>'Village 61318, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3152, 'regionable_id'=>27460, 'regionable_type'=>'village']); //Magersari
                DB::table('regionables')->insert(['region_id'=>3152, 'regionable_id'=>27782, 'regionable_type'=>'village']); //Magersari
                DB::table('regions')->insert(['id'=>3153, 'parent'=>3144, 'code'=>'61319', 'type'=>'village', 'name'=>'Village 61319, Districts 6131, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3153, 'regionable_id'=>27461, 'regionable_type'=>'village']); //Gedongan
                DB::table('regionables')->insert(['region_id'=>3153, 'regionable_id'=>27783, 'regionable_type'=>'village']); //Gedongan
            DB::table('regions')->insert(['id'=>3154, 'parent'=>3143, 'code'=>'6132', 'type'=>'districts', 'name'=>'Districts 6132, City 613, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3154, 'regionable_id'=>2489, 'regionable_type'=>'districts']); //Prajurit Kulon
            DB::table('regionables')->insert(['region_id'=>3154, 'regionable_id'=>2509, 'regionable_type'=>'districts']); //Prajurit Kulon
                DB::table('regions')->insert(['id'=>3155, 'parent'=>3154, 'code'=>'61321', 'type'=>'village', 'name'=>'Village 61321, Districts 6132, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3155, 'regionable_id'=>27462, 'regionable_type'=>'village']); //Kranggan
                DB::table('regionables')->insert(['region_id'=>3155, 'regionable_id'=>27784, 'regionable_type'=>'village']); //Kranggan
                DB::table('regions')->insert(['id'=>3156, 'parent'=>3154, 'code'=>'61322', 'type'=>'village', 'name'=>'Village 61322, Districts 6132, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3156, 'regionable_id'=>27463, 'regionable_type'=>'village']); //Miji
                DB::table('regionables')->insert(['region_id'=>3156, 'regionable_id'=>27785, 'regionable_type'=>'village']); //Miji
                DB::table('regions')->insert(['id'=>3157, 'parent'=>3154, 'code'=>'61323', 'type'=>'village', 'name'=>'Village 61323, Districts 6132, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3157, 'regionable_id'=>27464, 'regionable_type'=>'village']); //Mentikan
                DB::table('regionables')->insert(['region_id'=>3157, 'regionable_id'=>27786, 'regionable_type'=>'village']); //Mentikan
                DB::table('regions')->insert(['id'=>3158, 'parent'=>3154, 'code'=>'61324', 'type'=>'village', 'name'=>'Village 61324, Districts 6132, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3158, 'regionable_id'=>27465, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3158, 'regionable_id'=>27787, 'regionable_type'=>'village']); //Kauman
                DB::table('regions')->insert(['id'=>3159, 'parent'=>3154, 'code'=>'61325', 'type'=>'village', 'name'=>'Village 61325, Districts 6132, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3159, 'regionable_id'=>27466, 'regionable_type'=>'village']); //Pulorejo
                DB::table('regionables')->insert(['region_id'=>3159, 'regionable_id'=>27788, 'regionable_type'=>'village']); //Pulorejo
                DB::table('regions')->insert(['id'=>3160, 'parent'=>3154, 'code'=>'61326', 'type'=>'village', 'name'=>'Village 61326, Districts 6132, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3160, 'regionable_id'=>27467, 'regionable_type'=>'village']); //Prajurit Kulon
                DB::table('regionables')->insert(['region_id'=>3160, 'regionable_id'=>27789, 'regionable_type'=>'village']); //Prajurit Kulon
                DB::table('regions')->insert(['id'=>3161, 'parent'=>3154, 'code'=>'61327', 'type'=>'village', 'name'=>'Village 61327, Districts 6132, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3161, 'regionable_id'=>27468, 'regionable_type'=>'village']); //Blooto
                DB::table('regionables')->insert(['region_id'=>3161, 'regionable_id'=>27790, 'regionable_type'=>'village']); //Blooto
                DB::table('regions')->insert(['id'=>3162, 'parent'=>3154, 'code'=>'61328', 'type'=>'village', 'name'=>'Village 61328, Districts 6132, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3162, 'regionable_id'=>27469, 'regionable_type'=>'village']); //Surodinawan
                DB::table('regionables')->insert(['region_id'=>3162, 'regionable_id'=>27791, 'regionable_type'=>'village']); //Surodinawan
            DB::table('regions')->insert(['id'=>3163, 'parent'=>3143, 'code'=>'6135', 'type'=>'districts', 'name'=>'Districts 6135, City 613, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3163, 'regionable_id'=>2490, 'regionable_type'=>'districts']); //Gedeg
            DB::table('regionables')->insert(['region_id'=>3163, 'regionable_id'=>2491, 'regionable_type'=>'districts']); //Jetis
            DB::table('regionables')->insert(['region_id'=>3163, 'regionable_id'=>2492, 'regionable_type'=>'districts']); //Kemlagi
            DB::table('regionables')->insert(['region_id'=>3163, 'regionable_id'=>2493, 'regionable_type'=>'districts']); //Dawar Blandong
            DB::table('regionables')->insert(['region_id'=>3163, 'regionable_id'=>2510, 'regionable_type'=>'districts']); //Gedeg
            DB::table('regionables')->insert(['region_id'=>3163, 'regionable_id'=>2511, 'regionable_type'=>'districts']); //Jetis
            DB::table('regionables')->insert(['region_id'=>3163, 'regionable_id'=>2512, 'regionable_type'=>'districts']); //Kemlagi
            DB::table('regionables')->insert(['region_id'=>3163, 'regionable_id'=>2513, 'regionable_type'=>'districts']); //Dawar Blandong
                DB::table('regions')->insert(['id'=>3164, 'parent'=>3163, 'code'=>'61354', 'type'=>'village', 'name'=>'Village 61354, Districts 6135, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27520, 'regionable_type'=>'village']); //Bangeran
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27521, 'regionable_type'=>'village']); //Banyulegi
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27522, 'regionable_type'=>'village']); //Brayublandong
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27523, 'regionable_type'=>'village']); //Cendoro
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27524, 'regionable_type'=>'village']); //Cinandang
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27525, 'regionable_type'=>'village']); //Dawarblandong
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27526, 'regionable_type'=>'village']); //Gunungan
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27527, 'regionable_type'=>'village']); //Gunungsari
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27528, 'regionable_type'=>'village']); //Jatirowo
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27529, 'regionable_type'=>'village']); //Madureso
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27530, 'regionable_type'=>'village']); //Pucuk
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27531, 'regionable_type'=>'village']); //Pulorejo
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27532, 'regionable_type'=>'village']); //Randegan
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27533, 'regionable_type'=>'village']); //Simongagrok
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27534, 'regionable_type'=>'village']); //Sumberwuluh
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27535, 'regionable_type'=>'village']); //Suru
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27536, 'regionable_type'=>'village']); //Talunblandong
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27537, 'regionable_type'=>'village']); //Temuireng
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27842, 'regionable_type'=>'village']); //Bangeran
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27843, 'regionable_type'=>'village']); //Banyulegi
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27844, 'regionable_type'=>'village']); //Brayublandong
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27845, 'regionable_type'=>'village']); //Cendoro
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27846, 'regionable_type'=>'village']); //Cinandang
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27847, 'regionable_type'=>'village']); //Dawarblandong
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27848, 'regionable_type'=>'village']); //Gunungan
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27849, 'regionable_type'=>'village']); //Gunungsari
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27850, 'regionable_type'=>'village']); //Jatirowo
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27851, 'regionable_type'=>'village']); //Madureso
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27852, 'regionable_type'=>'village']); //Pucuk
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27853, 'regionable_type'=>'village']); //Pulorejo
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27854, 'regionable_type'=>'village']); //Randegan
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27855, 'regionable_type'=>'village']); //Simongagrok
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27856, 'regionable_type'=>'village']); //Sumberwuluh
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27857, 'regionable_type'=>'village']); //Suru
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27858, 'regionable_type'=>'village']); //Talunblandong
                DB::table('regionables')->insert(['region_id'=>3164, 'regionable_id'=>27859, 'regionable_type'=>'village']); //Temuireng
            DB::table('regions')->insert(['id'=>3165, 'parent'=>3143, 'code'=>'6136', 'type'=>'districts', 'name'=>'Districts 6136, City 613, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3165, 'regionable_id'=>2494, 'regionable_type'=>'districts']); //Sooko
            DB::table('regionables')->insert(['region_id'=>3165, 'regionable_id'=>2495, 'regionable_type'=>'districts']); //Trowulan
            DB::table('regionables')->insert(['region_id'=>3165, 'regionable_id'=>2496, 'regionable_type'=>'districts']); //Puri
            DB::table('regionables')->insert(['region_id'=>3165, 'regionable_id'=>2497, 'regionable_type'=>'districts']); //Mojoanyar
            DB::table('regionables')->insert(['region_id'=>3165, 'regionable_id'=>2514, 'regionable_type'=>'districts']); //Sooko
            DB::table('regionables')->insert(['region_id'=>3165, 'regionable_id'=>2515, 'regionable_type'=>'districts']); //Trowulan
            DB::table('regionables')->insert(['region_id'=>3165, 'regionable_id'=>2516, 'regionable_type'=>'districts']); //Puri
            DB::table('regionables')->insert(['region_id'=>3165, 'regionable_id'=>2517, 'regionable_type'=>'districts']); //Mojoanyar
                DB::table('regions')->insert(['id'=>3166, 'parent'=>3165, 'code'=>'61364', 'type'=>'village', 'name'=>'Village 61364, Districts 6136, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27585, 'regionable_type'=>'village']); //Gayaman
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27586, 'regionable_type'=>'village']); //Gebangmalang
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27587, 'regionable_type'=>'village']); //Jabon
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27588, 'regionable_type'=>'village']); //Jumeneng
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27589, 'regionable_type'=>'village']); //Kepuhanyar
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27590, 'regionable_type'=>'village']); //Kwatu
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27591, 'regionable_type'=>'village']); //Kwedenkembar
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27592, 'regionable_type'=>'village']); //Lengkong
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27593, 'regionable_type'=>'village']); //Ngarjo
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27594, 'regionable_type'=>'village']); //Sadartengah
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27595, 'regionable_type'=>'village']); //Sumberjati
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27596, 'regionable_type'=>'village']); //Wunut
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27907, 'regionable_type'=>'village']); //Gayaman
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27908, 'regionable_type'=>'village']); //Gebangmalang
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27909, 'regionable_type'=>'village']); //Jabon
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27910, 'regionable_type'=>'village']); //Jumeneng
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27911, 'regionable_type'=>'village']); //Kepuhanyar
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27912, 'regionable_type'=>'village']); //Kwatu
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27913, 'regionable_type'=>'village']); //Kwedenkembar
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27914, 'regionable_type'=>'village']); //Lengkong
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27915, 'regionable_type'=>'village']); //Ngarjo
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27916, 'regionable_type'=>'village']); //Sadartengah
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27917, 'regionable_type'=>'village']); //Sumberjati
                DB::table('regionables')->insert(['region_id'=>3166, 'regionable_id'=>27918, 'regionable_type'=>'village']); //Wunut
            DB::table('regions')->insert(['id'=>3167, 'parent'=>3143, 'code'=>'6137', 'type'=>'districts', 'name'=>'Districts 6137, City 613, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2498, 'regionable_type'=>'districts']); //Dlanggu
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2499, 'regionable_type'=>'districts']); //Gondang
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2500, 'regionable_type'=>'districts']); //Jatirejo
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2501, 'regionable_type'=>'districts']); //Pacet
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2502, 'regionable_type'=>'districts']); //Trawas
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2518, 'regionable_type'=>'districts']); //Dlanggu
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2519, 'regionable_type'=>'districts']); //Gondang
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2520, 'regionable_type'=>'districts']); //Jatirejo
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2521, 'regionable_type'=>'districts']); //Pacet
            DB::table('regionables')->insert(['region_id'=>3167, 'regionable_id'=>2522, 'regionable_type'=>'districts']); //Trawas
                DB::table('regions')->insert(['id'=>3168, 'parent'=>3167, 'code'=>'61375', 'type'=>'village', 'name'=>'Village 61375, Districts 6137, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27670, 'regionable_type'=>'village']); //Belik
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27671, 'regionable_type'=>'village']); //Duyung
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27672, 'regionable_type'=>'village']); //Jatijejer
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27673, 'regionable_type'=>'village']); //Kedungudi
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27674, 'regionable_type'=>'village']); //Kesiman
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27675, 'regionable_type'=>'village']); //Ketapanrame
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27676, 'regionable_type'=>'village']); //Penanggungan
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27677, 'regionable_type'=>'village']); //Seloliman
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27678, 'regionable_type'=>'village']); //Selotapak
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27679, 'regionable_type'=>'village']); //Sugeng
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27680, 'regionable_type'=>'village']); //Sukosari
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27681, 'regionable_type'=>'village']); //Tamiajeng
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27682, 'regionable_type'=>'village']); //Trawas
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27992, 'regionable_type'=>'village']); //Belik
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27993, 'regionable_type'=>'village']); //Duyung
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27994, 'regionable_type'=>'village']); //Jatijejer
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27995, 'regionable_type'=>'village']); //Kedungudi
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27996, 'regionable_type'=>'village']); //Kesiman
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27997, 'regionable_type'=>'village']); //Ketapanrame
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27998, 'regionable_type'=>'village']); //Penanggungan
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>27999, 'regionable_type'=>'village']); //Seloliman
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>28000, 'regionable_type'=>'village']); //Selotapak
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>28001, 'regionable_type'=>'village']); //Sugeng
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>28002, 'regionable_type'=>'village']); //Sukosari
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>28003, 'regionable_type'=>'village']); //Tamiajeng
                DB::table('regionables')->insert(['region_id'=>3168, 'regionable_id'=>28004, 'regionable_type'=>'village']); //Trawas
            DB::table('regions')->insert(['id'=>3169, 'parent'=>3143, 'code'=>'6138', 'type'=>'districts', 'name'=>'Districts 6138, City 613, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2503, 'regionable_type'=>'districts']); //Bangsal
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2504, 'regionable_type'=>'districts']); //Mojosari
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2505, 'regionable_type'=>'districts']); //Kutorejo
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2506, 'regionable_type'=>'districts']); //Pungging
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2507, 'regionable_type'=>'districts']); //Ngoro
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2523, 'regionable_type'=>'districts']); //Bangsal
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2524, 'regionable_type'=>'districts']); //Mojosari
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2525, 'regionable_type'=>'districts']); //Kutorejo
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2526, 'regionable_type'=>'districts']); //Pungging
            DB::table('regionables')->insert(['region_id'=>3169, 'regionable_id'=>2527, 'regionable_type'=>'districts']); //Ngoro
                DB::table('regions')->insert(['id'=>3170, 'parent'=>3169, 'code'=>'61385', 'type'=>'village', 'name'=>'Village 61385, Districts 6138, City 613, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27755, 'regionable_type'=>'village']); //Bandarasri
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27756, 'regionable_type'=>'village']); //Candiharjo
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27757, 'regionable_type'=>'village']); //Jasem
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27758, 'regionable_type'=>'village']); //Kembangsri
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27759, 'regionable_type'=>'village']); //Kesemen
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27760, 'regionable_type'=>'village']); //Kunjorowesi
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27761, 'regionable_type'=>'village']); //Kutogirang
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27762, 'regionable_type'=>'village']); //Lolawang
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27763, 'regionable_type'=>'village']); //Manduro Manggung Gajah
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27764, 'regionable_type'=>'village']); //Ngoro
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27765, 'regionable_type'=>'village']); //Purwojati
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27766, 'regionable_type'=>'village']); //Sedati
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27767, 'regionable_type'=>'village']); //Srigading
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27768, 'regionable_type'=>'village']); //Sukoanyar
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27769, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27770, 'regionable_type'=>'village']); //Tanjangrono
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27771, 'regionable_type'=>'village']); //Watesnegoro
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27772, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>27773, 'regionable_type'=>'village']); //Wotanmasjedong
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28077, 'regionable_type'=>'village']); //Bandarasri
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28078, 'regionable_type'=>'village']); //Candiharjo
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28079, 'regionable_type'=>'village']); //Jasem
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28080, 'regionable_type'=>'village']); //Kembangsri
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28081, 'regionable_type'=>'village']); //Kesemen
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28082, 'regionable_type'=>'village']); //Kunjorowesi
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28083, 'regionable_type'=>'village']); //Kutogirang
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28084, 'regionable_type'=>'village']); //Lolawang
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28085, 'regionable_type'=>'village']); //Manduro Manggung Gajah
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28086, 'regionable_type'=>'village']); //Ngoro
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28087, 'regionable_type'=>'village']); //Purwojati
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28088, 'regionable_type'=>'village']); //Sedati
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28089, 'regionable_type'=>'village']); //Srigading
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28090, 'regionable_type'=>'village']); //Sukoanyar
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28091, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28092, 'regionable_type'=>'village']); //Tanjangrono
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28093, 'regionable_type'=>'village']); //Watesnegoro
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28094, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>3170, 'regionable_id'=>28095, 'regionable_type'=>'village']); //Wotanmasjedong
        DB::table('regions')->insert(['id'=>3171, 'parent'=>2996, 'code'=>'614', 'type'=>'city', 'name'=>'City 614, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3171, 'regionable_id'=>130, 'regionable_type'=>'city']); //Jombang regencies
            DB::table('regions')->insert(['id'=>3172, 'parent'=>3171, 'code'=>'6141', 'type'=>'districts', 'name'=>'Districts 6141, City 614, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3172, 'regionable_id'=>2528, 'regionable_type'=>'districts']); //Jombang
                DB::table('regions')->insert(['id'=>3173, 'parent'=>3172, 'code'=>'61411', 'type'=>'village', 'name'=>'Village 61411, Districts 6141, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3173, 'regionable_id'=>28096, 'regionable_type'=>'village']); //Kepanjen
                DB::table('regions')->insert(['id'=>3174, 'parent'=>3172, 'code'=>'61412', 'type'=>'village', 'name'=>'Village 61412, Districts 6141, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3174, 'regionable_id'=>28097, 'regionable_type'=>'village']); //Jelakombo
                DB::table('regionables')->insert(['region_id'=>3174, 'regionable_id'=>28098, 'regionable_type'=>'village']); //Plandi
                DB::table('regions')->insert(['id'=>3175, 'parent'=>3172, 'code'=>'61413', 'type'=>'village', 'name'=>'Village 61413, Districts 6141, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3175, 'regionable_id'=>28099, 'regionable_type'=>'village']); //Mojongapit
                DB::table('regions')->insert(['id'=>3176, 'parent'=>3172, 'code'=>'61415', 'type'=>'village', 'name'=>'Village 61415, Districts 6141, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3176, 'regionable_id'=>28100, 'regionable_type'=>'village']); //Jombang
                DB::table('regions')->insert(['id'=>3177, 'parent'=>3172, 'code'=>'61416', 'type'=>'village', 'name'=>'Village 61416, Districts 6141, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3177, 'regionable_id'=>28101, 'regionable_type'=>'village']); //Denanyar
                DB::table('regionables')->insert(['region_id'=>3177, 'regionable_id'=>28102, 'regionable_type'=>'village']); //Plosogeneng
                DB::table('regions')->insert(['id'=>3178, 'parent'=>3172, 'code'=>'61417', 'type'=>'village', 'name'=>'Village 61417, Districts 6141, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3178, 'regionable_id'=>28103, 'regionable_type'=>'village']); //Kepatihan
                DB::table('regionables')->insert(['region_id'=>3178, 'regionable_id'=>28104, 'regionable_type'=>'village']); //Pulo Lor
                DB::table('regions')->insert(['id'=>3179, 'parent'=>3172, 'code'=>'61418', 'type'=>'village', 'name'=>'Village 61418, Districts 6141, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3179, 'regionable_id'=>28105, 'regionable_type'=>'village']); //Jabon
                DB::table('regionables')->insert(['region_id'=>3179, 'regionable_id'=>28106, 'regionable_type'=>'village']); //Sengon
                DB::table('regions')->insert(['id'=>3180, 'parent'=>3172, 'code'=>'61419', 'type'=>'village', 'name'=>'Village 61419, Districts 6141, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28107, 'regionable_type'=>'village']); //Banjar Dowo
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28108, 'regionable_type'=>'village']); //Candi Mulyo
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28109, 'regionable_type'=>'village']); //Dapur Kejambon
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28110, 'regionable_type'=>'village']); //Jombatan
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28111, 'regionable_type'=>'village']); //Kaliwungu
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28112, 'regionable_type'=>'village']); //Sambong Dukuh
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28113, 'regionable_type'=>'village']); //Sumberjo
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28114, 'regionable_type'=>'village']); //Tambak Rejo
                DB::table('regionables')->insert(['region_id'=>3180, 'regionable_id'=>28115, 'regionable_type'=>'village']); //Tunggorono
            DB::table('regions')->insert(['id'=>3181, 'parent'=>3171, 'code'=>'6145', 'type'=>'districts', 'name'=>'Districts 6145, City 614, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3181, 'regionable_id'=>2529, 'regionable_type'=>'districts']); //Tembelang
            DB::table('regionables')->insert(['region_id'=>3181, 'regionable_id'=>2530, 'regionable_type'=>'districts']); //Ploso
            DB::table('regionables')->insert(['region_id'=>3181, 'regionable_id'=>2531, 'regionable_type'=>'districts']); //Ngusikan
            DB::table('regionables')->insert(['region_id'=>3181, 'regionable_id'=>2532, 'regionable_type'=>'districts']); //Kudu
            DB::table('regionables')->insert(['region_id'=>3181, 'regionable_id'=>2533, 'regionable_type'=>'districts']); //Kabuh
            DB::table('regionables')->insert(['region_id'=>3181, 'regionable_id'=>2534, 'regionable_type'=>'districts']); //Plandaan
            DB::table('regionables')->insert(['region_id'=>3181, 'regionable_id'=>2535, 'regionable_type'=>'districts']); //Megaluh
                DB::table('regions')->insert(['id'=>3182, 'parent'=>3181, 'code'=>'61457', 'type'=>'village', 'name'=>'Village 61457, Districts 6145, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28195, 'regionable_type'=>'village']); //Balonggemek
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28196, 'regionable_type'=>'village']); //Balongsari
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28197, 'regionable_type'=>'village']); //Dukuh Arum
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28198, 'regionable_type'=>'village']); //Gongseng
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28199, 'regionable_type'=>'village']); //Kedung Rejo
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28200, 'regionable_type'=>'village']); //Megaluh
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28201, 'regionable_type'=>'village']); //Ngogri
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28202, 'regionable_type'=>'village']); //Pacar Peluk
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28203, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28204, 'regionable_type'=>'village']); //Sudimoro
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28205, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28206, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regionables')->insert(['region_id'=>3182, 'regionable_id'=>28207, 'regionable_type'=>'village']); //Turi Pinggir
            DB::table('regions')->insert(['id'=>3183, 'parent'=>3171, 'code'=>'6146', 'type'=>'districts', 'name'=>'Districts 6146, City 614, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3183, 'regionable_id'=>2536, 'regionable_type'=>'districts']); //Perak
            DB::table('regionables')->insert(['region_id'=>3183, 'regionable_id'=>2537, 'regionable_type'=>'districts']); //Bandar Kedung Mulyo
            DB::table('regionables')->insert(['region_id'=>3183, 'regionable_id'=>2538, 'regionable_type'=>'districts']); //Gudo
                DB::table('regions')->insert(['id'=>3184, 'parent'=>3183, 'code'=>'61463', 'type'=>'village', 'name'=>'Village 61463, Districts 6146, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28232, 'regionable_type'=>'village']); //Blimbing
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28233, 'regionable_type'=>'village']); //Bugasur Kedaleman
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28234, 'regionable_type'=>'village']); //Gempol Legundi
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28235, 'regionable_type'=>'village']); //Godong
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28236, 'regionable_type'=>'village']); //Gudo
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28237, 'regionable_type'=>'village']); //Japanan
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28238, 'regionable_type'=>'village']); //Kedungturi
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28239, 'regionable_type'=>'village']); //Krembangan
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28240, 'regionable_type'=>'village']); //Mejoyolosari
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28241, 'regionable_type'=>'village']); //Mentaos
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28242, 'regionable_type'=>'village']); //Pesanggrahan
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28243, 'regionable_type'=>'village']); //Plumbon Gambang
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28244, 'regionable_type'=>'village']); //Pucangro
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28245, 'regionable_type'=>'village']); //Sepanyul
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28246, 'regionable_type'=>'village']); //Sukoiber
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28247, 'regionable_type'=>'village']); //Sukopinggir
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28248, 'regionable_type'=>'village']); //Tanggungan
                DB::table('regionables')->insert(['region_id'=>3184, 'regionable_id'=>28249, 'regionable_type'=>'village']); //Wangkalkepuh
            DB::table('regions')->insert(['id'=>3185, 'parent'=>3171, 'code'=>'6147', 'type'=>'districts', 'name'=>'Districts 6147, City 614, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3185, 'regionable_id'=>2539, 'regionable_type'=>'districts']); //Diwek
            DB::table('regionables')->insert(['region_id'=>3185, 'regionable_id'=>2540, 'regionable_type'=>'districts']); //Ngoro
            DB::table('regionables')->insert(['region_id'=>3185, 'regionable_id'=>2541, 'regionable_type'=>'districts']); //Bareng
            DB::table('regionables')->insert(['region_id'=>3185, 'regionable_id'=>2542, 'regionable_type'=>'districts']); //Mojowarno
            DB::table('regionables')->insert(['region_id'=>3185, 'regionable_id'=>2543, 'regionable_type'=>'districts']); //Wonosalam
                DB::table('regions')->insert(['id'=>3186, 'parent'=>3185, 'code'=>'61476', 'type'=>'village', 'name'=>'Village 61476, Districts 6147, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28315, 'regionable_type'=>'village']); //Carangwulung
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28316, 'regionable_type'=>'village']); //Galengdowo
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28317, 'regionable_type'=>'village']); //Jarak
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28318, 'regionable_type'=>'village']); //Panglungan
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28319, 'regionable_type'=>'village']); //Sambirejo
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28320, 'regionable_type'=>'village']); //Sumberjo
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28321, 'regionable_type'=>'village']); //Wonokerto
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28322, 'regionable_type'=>'village']); //Wonomerto
                DB::table('regionables')->insert(['region_id'=>3186, 'regionable_id'=>28323, 'regionable_type'=>'village']); //Wonosalam
            DB::table('regions')->insert(['id'=>3187, 'parent'=>3171, 'code'=>'6148', 'type'=>'districts', 'name'=>'Districts 6148, City 614, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3187, 'regionable_id'=>2544, 'regionable_type'=>'districts']); //Peterongan
            DB::table('regionables')->insert(['region_id'=>3187, 'regionable_id'=>2545, 'regionable_type'=>'districts']); //Mojoagung
            DB::table('regionables')->insert(['region_id'=>3187, 'regionable_id'=>2546, 'regionable_type'=>'districts']); //Sumobito
            DB::table('regionables')->insert(['region_id'=>3187, 'regionable_id'=>2547, 'regionable_type'=>'districts']); //Kesamben
            DB::table('regionables')->insert(['region_id'=>3187, 'regionable_id'=>2548, 'regionable_type'=>'districts']); //Jogoroto
                DB::table('regions')->insert(['id'=>3188, 'parent'=>3187, 'code'=>'61485', 'type'=>'village', 'name'=>'Village 61485, Districts 6148, City 614, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28391, 'regionable_type'=>'village']); //Alang Alang Caruban
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28392, 'regionable_type'=>'village']); //Janti
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28393, 'regionable_type'=>'village']); //Jarak Kulon
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28394, 'regionable_type'=>'village']); //Jogoroto
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28395, 'regionable_type'=>'village']); //Mayangan
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28396, 'regionable_type'=>'village']); //Ngumpul
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28397, 'regionable_type'=>'village']); //Sambirejo
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28398, 'regionable_type'=>'village']); //Sawiji
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28399, 'regionable_type'=>'village']); //Sukosari
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28400, 'regionable_type'=>'village']); //Sumber Mulyo
                DB::table('regionables')->insert(['region_id'=>3188, 'regionable_id'=>28401, 'regionable_type'=>'village']); //Tambar
        DB::table('regions')->insert(['id'=>3189, 'parent'=>2996, 'code'=>'621', 'type'=>'city', 'name'=>'City 621, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3189, 'regionable_id'=>131, 'regionable_type'=>'city']); //Bojonegoro regencies
            DB::table('regions')->insert(['id'=>3190, 'parent'=>3189, 'code'=>'6211', 'type'=>'districts', 'name'=>'Districts 6211, City 621, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3190, 'regionable_id'=>2549, 'regionable_type'=>'districts']); //Bojonegoro
                DB::table('regions')->insert(['id'=>3191, 'parent'=>3190, 'code'=>'62111', 'type'=>'village', 'name'=>'Village 62111, Districts 6211, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3191, 'regionable_id'=>28402, 'regionable_type'=>'village']); //Kadipaten
                DB::table('regionables')->insert(['region_id'=>3191, 'regionable_id'=>28403, 'regionable_type'=>'village']); //Kepatihan
                DB::table('regions')->insert(['id'=>3192, 'parent'=>3190, 'code'=>'62112', 'type'=>'village', 'name'=>'Village 62112, Districts 6211, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3192, 'regionable_id'=>28404, 'regionable_type'=>'village']); //Ledok Kulon
                DB::table('regionables')->insert(['region_id'=>3192, 'regionable_id'=>28405, 'regionable_type'=>'village']); //Ledok Wetan
                DB::table('regions')->insert(['id'=>3193, 'parent'=>3190, 'code'=>'62113', 'type'=>'village', 'name'=>'Village 62113, Districts 6211, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3193, 'regionable_id'=>28406, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3193, 'regionable_id'=>28407, 'regionable_type'=>'village']); //Klangon
                DB::table('regions')->insert(['id'=>3194, 'parent'=>3190, 'code'=>'62114', 'type'=>'village', 'name'=>'Village 62114, Districts 6211, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3194, 'regionable_id'=>28408, 'regionable_type'=>'village']); //Jetak
                DB::table('regionables')->insert(['region_id'=>3194, 'regionable_id'=>28409, 'regionable_type'=>'village']); //Pacul
                DB::table('regions')->insert(['id'=>3195, 'parent'=>3190, 'code'=>'62115', 'type'=>'village', 'name'=>'Village 62115, Districts 6211, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3195, 'regionable_id'=>28410, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3195, 'regionable_id'=>28411, 'regionable_type'=>'village']); //Sumbang
                DB::table('regions')->insert(['id'=>3196, 'parent'=>3190, 'code'=>'62118', 'type'=>'village', 'name'=>'Village 62118, Districts 6211, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3196, 'regionable_id'=>28412, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regions')->insert(['id'=>3197, 'parent'=>3190, 'code'=>'62119', 'type'=>'village', 'name'=>'Village 62119, Districts 6211, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3197, 'regionable_id'=>28413, 'regionable_type'=>'village']); //Campurjo
                DB::table('regionables')->insert(['region_id'=>3197, 'regionable_id'=>28414, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>3197, 'regionable_id'=>28415, 'regionable_type'=>'village']); //Karang Pacar
                DB::table('regionables')->insert(['region_id'=>3197, 'regionable_id'=>28416, 'regionable_type'=>'village']); //Mojo Kampung
                DB::table('regionables')->insert(['region_id'=>3197, 'regionable_id'=>28417, 'regionable_type'=>'village']); //Mulyoagung
                DB::table('regionables')->insert(['region_id'=>3197, 'regionable_id'=>28418, 'regionable_type'=>'village']); //Ngrowo
                DB::table('regionables')->insert(['region_id'=>3197, 'regionable_id'=>28419, 'regionable_type'=>'village']); //Semanding
            DB::table('regions')->insert(['id'=>3198, 'parent'=>3189, 'code'=>'6215', 'type'=>'districts', 'name'=>'Districts 6215, City 621, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3198, 'regionable_id'=>2550, 'regionable_type'=>'districts']); //Gayam
            DB::table('regionables')->insert(['region_id'=>3198, 'regionable_id'=>2551, 'regionable_type'=>'districts']); //Kalitidu
            DB::table('regionables')->insert(['region_id'=>3198, 'regionable_id'=>2552, 'regionable_type'=>'districts']); //Malo
            DB::table('regionables')->insert(['region_id'=>3198, 'regionable_id'=>2553, 'regionable_type'=>'districts']); //Ngasem
            DB::table('regionables')->insert(['region_id'=>3198, 'regionable_id'=>2554, 'regionable_type'=>'districts']); //Trucuk
                DB::table('regions')->insert(['id'=>3199, 'parent'=>3198, 'code'=>'62155', 'type'=>'village', 'name'=>'Village 62155, Districts 6215, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28487, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28488, 'regionable_type'=>'village']); //Guyangan
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28489, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28490, 'regionable_type'=>'village']); //Kanten
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28491, 'regionable_type'=>'village']); //Mori
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28492, 'regionable_type'=>'village']); //Padang
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28493, 'regionable_type'=>'village']); //Pagerwesi
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28494, 'regionable_type'=>'village']); //Sranak
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28495, 'regionable_type'=>'village']); //Sumbang Timun
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28496, 'regionable_type'=>'village']); //Trucuk
                DB::table('regionables')->insert(['region_id'=>3199, 'regionable_id'=>28497, 'regionable_type'=>'village']); //Tulungrejo
            DB::table('regions')->insert(['id'=>3200, 'parent'=>3189, 'code'=>'6216', 'type'=>'districts', 'name'=>'Districts 6216, City 621, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2555, 'regionable_type'=>'districts']); //Purwosari
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2556, 'regionable_type'=>'districts']); //Padangan
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2557, 'regionable_type'=>'districts']); //Kasiman
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2558, 'regionable_type'=>'districts']); //Kedewan
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2559, 'regionable_type'=>'districts']); //Ngraho
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2560, 'regionable_type'=>'districts']); //Tambakrejo
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2561, 'regionable_type'=>'districts']); //Sekar
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2562, 'regionable_type'=>'districts']); //Ngambon
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2563, 'regionable_type'=>'districts']); //Margomulyo
            DB::table('regionables')->insert(['region_id'=>3200, 'regionable_id'=>2564, 'regionable_type'=>'districts']); //Balen
                DB::table('regions')->insert(['id'=>3201, 'parent'=>3200, 'code'=>'62168', 'type'=>'village', 'name'=>'Village 62168, Districts 6216, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3201, 'regionable_id'=>28587, 'regionable_type'=>'village']); //Geneng
                DB::table('regionables')->insert(['region_id'=>3201, 'regionable_id'=>28588, 'regionable_type'=>'village']); //Kalangan
                DB::table('regionables')->insert(['region_id'=>3201, 'regionable_id'=>28589, 'regionable_type'=>'village']); //Margomulyo
                DB::table('regionables')->insert(['region_id'=>3201, 'regionable_id'=>28590, 'regionable_type'=>'village']); //Meduri
                DB::table('regionables')->insert(['region_id'=>3201, 'regionable_id'=>28591, 'regionable_type'=>'village']); //Ngelo
                DB::table('regionables')->insert(['region_id'=>3201, 'regionable_id'=>28592, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>3201, 'regionable_id'=>28593, 'regionable_type'=>'village']); //Margomulyo
            DB::table('regions')->insert(['id'=>3202, 'parent'=>3189, 'code'=>'6217', 'type'=>'districts', 'name'=>'Districts 6217, City 621, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3202, 'regionable_id'=>2565, 'regionable_type'=>'districts']); //Dander
            DB::table('regionables')->insert(['region_id'=>3202, 'regionable_id'=>2566, 'regionable_type'=>'districts']); //Bubulan
            DB::table('regionables')->insert(['region_id'=>3202, 'regionable_id'=>2567, 'regionable_type'=>'districts']); //Gondang
                DB::table('regions')->insert(['id'=>3203, 'parent'=>3202, 'code'=>'62172', 'type'=>'village', 'name'=>'Village 62172, Districts 6217, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28632, 'regionable_type'=>'village']); //Bubulan
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28633, 'regionable_type'=>'village']); //Cancung
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28634, 'regionable_type'=>'village']); //Clebung
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28635, 'regionable_type'=>'village']); //Ngorogunung
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28636, 'regionable_type'=>'village']); //Sumber Bendo
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28637, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28638, 'regionable_type'=>'village']); //Jari
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28639, 'regionable_type'=>'village']); //Krondonan
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28640, 'regionable_type'=>'village']); //Pajeng
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28641, 'regionable_type'=>'village']); //Pragelan
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28642, 'regionable_type'=>'village']); //Sambongrejo
                DB::table('regionables')->insert(['region_id'=>3203, 'regionable_id'=>28643, 'regionable_type'=>'village']); //Sengaten
            DB::table('regions')->insert(['id'=>3204, 'parent'=>3189, 'code'=>'6218', 'type'=>'districts', 'name'=>'Districts 6218, City 621, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3204, 'regionable_id'=>2564, 'regionable_type'=>'districts']); //Balen
            DB::table('regionables')->insert(['region_id'=>3204, 'regionable_id'=>2568, 'regionable_type'=>'districts']); //Kapas
            DB::table('regionables')->insert(['region_id'=>3204, 'regionable_id'=>2569, 'regionable_type'=>'districts']); //Sugihwaras
            DB::table('regionables')->insert(['region_id'=>3204, 'regionable_id'=>2570, 'regionable_type'=>'districts']); //Sukosewu
            DB::table('regionables')->insert(['region_id'=>3204, 'regionable_id'=>2571, 'regionable_type'=>'districts']); //Temayang
                DB::table('regions')->insert(['id'=>3205, 'parent'=>3204, 'code'=>'62184', 'type'=>'village', 'name'=>'Village 62184, Districts 6218, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28696, 'regionable_type'=>'village']); //Bakulan
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28697, 'regionable_type'=>'village']); //Belun
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28698, 'regionable_type'=>'village']); //Buntalan
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28699, 'regionable_type'=>'village']); //Jono
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28700, 'regionable_type'=>'village']); //Kedungsari
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28701, 'regionable_type'=>'village']); //Kedungsumber
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28702, 'regionable_type'=>'village']); //Ngujung
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28703, 'regionable_type'=>'village']); //Pancur
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28704, 'regionable_type'=>'village']); //Pandantoyo
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28705, 'regionable_type'=>'village']); //Papringan
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28706, 'regionable_type'=>'village']); //Soko
                DB::table('regionables')->insert(['region_id'=>3205, 'regionable_id'=>28707, 'regionable_type'=>'village']); //Temayang
            DB::table('regions')->insert(['id'=>3206, 'parent'=>3189, 'code'=>'6219', 'type'=>'districts', 'name'=>'Districts 6219, City 621, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3206, 'regionable_id'=>2554, 'regionable_type'=>'districts']); //Trucuk
            DB::table('regionables')->insert(['region_id'=>3206, 'regionable_id'=>2572, 'regionable_type'=>'districts']); //Sumberrejo
            DB::table('regionables')->insert(['region_id'=>3206, 'regionable_id'=>2573, 'regionable_type'=>'districts']); //Baureno
            DB::table('regionables')->insert(['region_id'=>3206, 'regionable_id'=>2574, 'regionable_type'=>'districts']); //Kanor
            DB::table('regionables')->insert(['region_id'=>3206, 'regionable_id'=>2575, 'regionable_type'=>'districts']); //Kepoh Baru
            DB::table('regionables')->insert(['region_id'=>3206, 'regionable_id'=>2576, 'regionable_type'=>'districts']); //Kedungadem
                DB::table('regions')->insert(['id'=>3207, 'parent'=>3206, 'code'=>'62195', 'type'=>'village', 'name'=>'Village 62195, Districts 6219, City 621, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28809, 'regionable_type'=>'village']); //Babad
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28810, 'regionable_type'=>'village']); //Balongcabe
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28811, 'regionable_type'=>'village']); //Dayukidul
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28812, 'regionable_type'=>'village']); //Drokilo
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28813, 'regionable_type'=>'village']); //Duwel
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28814, 'regionable_type'=>'village']); //Geger
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28815, 'regionable_type'=>'village']); //Jamberejo
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28816, 'regionable_type'=>'village']); //Kedungadem
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28817, 'regionable_type'=>'village']); //Kedungrejo
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28818, 'regionable_type'=>'village']); //Kendung
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28819, 'regionable_type'=>'village']); //Kepoh Kidul
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28820, 'regionable_type'=>'village']); //Kesongo
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28821, 'regionable_type'=>'village']); //Megale
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28822, 'regionable_type'=>'village']); //Mlideg
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28823, 'regionable_type'=>'village']); //Mojorejo
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28824, 'regionable_type'=>'village']); //Ngrandu
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28825, 'regionable_type'=>'village']); //Panjang
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28826, 'regionable_type'=>'village']); //Pejok
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28827, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28828, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28829, 'regionable_type'=>'village']); //Tlogoagung
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28830, 'regionable_type'=>'village']); //Tondomulo
                DB::table('regionables')->insert(['region_id'=>3207, 'regionable_id'=>28831, 'regionable_type'=>'village']); //Tumbrasanom
        DB::table('regions')->insert(['id'=>3208, 'parent'=>2996, 'code'=>'622', 'type'=>'city', 'name'=>'City 622, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3208, 'regionable_id'=>132, 'regionable_type'=>'city']); //Lamongan regencies
            DB::table('regions')->insert(['id'=>3209, 'parent'=>3208, 'code'=>'6221', 'type'=>'districts', 'name'=>'Districts 6221, City 622, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3209, 'regionable_id'=>2577, 'regionable_type'=>'districts']); //Lamongan
                DB::table('regions')->insert(['id'=>3210, 'parent'=>3209, 'code'=>'62211', 'type'=>'village', 'name'=>'Village 62211, Districts 6221, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3210, 'regionable_id'=>28832, 'regionable_type'=>'village']); //Jetis
                DB::table('regions')->insert(['id'=>3211, 'parent'=>3209, 'code'=>'62212', 'type'=>'village', 'name'=>'Village 62212, Districts 6221, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3211, 'regionable_id'=>28833, 'regionable_type'=>'village']); //Banjarmendalan
                DB::table('regions')->insert(['id'=>3212, 'parent'=>3209, 'code'=>'62213', 'type'=>'village', 'name'=>'Village 62213, Districts 6221, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3212, 'regionable_id'=>28834, 'regionable_type'=>'village']); //Sidokumpul
                DB::table('regions')->insert(['id'=>3213, 'parent'=>3209, 'code'=>'62214', 'type'=>'village', 'name'=>'Village 62214, Districts 6221, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3213, 'regionable_id'=>28835, 'regionable_type'=>'village']); //Tumenggungan
                DB::table('regions')->insert(['id'=>3214, 'parent'=>3209, 'code'=>'62215', 'type'=>'village', 'name'=>'Village 62215, Districts 6221, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3214, 'regionable_id'=>28836, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regions')->insert(['id'=>3215, 'parent'=>3209, 'code'=>'62216', 'type'=>'village', 'name'=>'Village 62216, Districts 6221, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3215, 'regionable_id'=>28837, 'regionable_type'=>'village']); //Sukomulyo
                DB::table('regions')->insert(['id'=>3216, 'parent'=>3209, 'code'=>'62217', 'type'=>'village', 'name'=>'Village 62217, Districts 6221, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3216, 'regionable_id'=>28838, 'regionable_type'=>'village']); //Sidoharjo
                DB::table('regions')->insert(['id'=>3217, 'parent'=>3209, 'code'=>'62218', 'type'=>'village', 'name'=>'Village 62218, Districts 6221, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28839, 'regionable_type'=>'village']); //Karanglangit
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28840, 'regionable_type'=>'village']); //Kebet
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28841, 'regionable_type'=>'village']); //Kramat
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28842, 'regionable_type'=>'village']); //Made
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28843, 'regionable_type'=>'village']); //Pangkatrejo
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28844, 'regionable_type'=>'village']); //Plosowahyu
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28845, 'regionable_type'=>'village']); //Rancang Kencono
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28846, 'regionable_type'=>'village']); //Sendangrejo
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28847, 'regionable_type'=>'village']); //Sidomukti
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28848, 'regionable_type'=>'village']); //Sumberjo
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28849, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28850, 'regionable_type'=>'village']); //Tlogoanyar
                DB::table('regionables')->insert(['region_id'=>3217, 'regionable_id'=>28851, 'regionable_type'=>'village']); //Wajik
            DB::table('regions')->insert(['id'=>3218, 'parent'=>3208, 'code'=>'6225', 'type'=>'districts', 'name'=>'Districts 6225, City 622, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3218, 'regionable_id'=>2578, 'regionable_type'=>'districts']); //Turi
            DB::table('regionables')->insert(['region_id'=>3218, 'regionable_id'=>2579, 'regionable_type'=>'districts']); //Sukodadi
            DB::table('regionables')->insert(['region_id'=>3218, 'regionable_id'=>2580, 'regionable_type'=>'districts']); //Karang Geneng
            DB::table('regionables')->insert(['region_id'=>3218, 'regionable_id'=>2581, 'regionable_type'=>'districts']); //Kalitengah
            DB::table('regionables')->insert(['region_id'=>3218, 'regionable_id'=>2582, 'regionable_type'=>'districts']); //Sugio
            DB::table('regionables')->insert(['region_id'=>3218, 'regionable_id'=>2583, 'regionable_type'=>'districts']); //Pucuk
                DB::table('regions')->insert(['id'=>3219, 'parent'=>3218, 'code'=>'62257', 'type'=>'village', 'name'=>'Village 62257, Districts 6225, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28950, 'regionable_type'=>'village']); //Babatkumpul
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28951, 'regionable_type'=>'village']); //Bugoharjo
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28952, 'regionable_type'=>'village']); //Cungkup
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28953, 'regionable_type'=>'village']); //Gempolpading
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28954, 'regionable_type'=>'village']); //Karangtinggil
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28955, 'regionable_type'=>'village']); //Kedali
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28956, 'regionable_type'=>'village']); //Kesambi
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28957, 'regionable_type'=>'village']); //Ngambeg
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28958, 'regionable_type'=>'village']); //Padenganploso
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28959, 'regionable_type'=>'village']); //Paji
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28960, 'regionable_type'=>'village']); //Plososetro
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28961, 'regionable_type'=>'village']); //Pucuk
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28962, 'regionable_type'=>'village']); //Sumberjo
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28963, 'regionable_type'=>'village']); //Tanggungan
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28964, 'regionable_type'=>'village']); //Wanar
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28965, 'regionable_type'=>'village']); //Warukulon
                DB::table('regionables')->insert(['region_id'=>3219, 'regionable_id'=>28966, 'regionable_type'=>'village']); //Waruwetan
            DB::table('regions')->insert(['id'=>3220, 'parent'=>3208, 'code'=>'6226', 'type'=>'districts', 'name'=>'Districts 6226, City 622, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3220, 'regionable_id'=>2584, 'regionable_type'=>'districts']); //Sekaran
            DB::table('regionables')->insert(['region_id'=>3220, 'regionable_id'=>2585, 'regionable_type'=>'districts']); //Maduran
            DB::table('regionables')->insert(['region_id'=>3220, 'regionable_id'=>2586, 'regionable_type'=>'districts']); //Laren
            DB::table('regionables')->insert(['region_id'=>3220, 'regionable_id'=>2587, 'regionable_type'=>'districts']); //Brondong
            DB::table('regionables')->insert(['region_id'=>3220, 'regionable_id'=>2588, 'regionable_type'=>'districts']); //Paciran
            DB::table('regionables')->insert(['region_id'=>3220, 'regionable_id'=>2589, 'regionable_type'=>'districts']); //Solokuro
                DB::table('regions')->insert(['id'=>3221, 'parent'=>3220, 'code'=>'62265', 'type'=>'village', 'name'=>'Village 62265, Districts 6226, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29052, 'regionable_type'=>'village']); //Banyubang
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29053, 'regionable_type'=>'village']); //Bluri
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29054, 'regionable_type'=>'village']); //Dadapan
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29055, 'regionable_type'=>'village']); //Dagan
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29056, 'regionable_type'=>'village']); //Payaman
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29057, 'regionable_type'=>'village']); //Solokuro
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29058, 'regionable_type'=>'village']); //Sugihan
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29059, 'regionable_type'=>'village']); //Takerharjo
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29060, 'regionable_type'=>'village']); //Tebluru
                DB::table('regionables')->insert(['region_id'=>3221, 'regionable_id'=>29061, 'regionable_type'=>'village']); //Tenggulun
            DB::table('regions')->insert(['id'=>3222, 'parent'=>3208, 'code'=>'6227', 'type'=>'districts', 'name'=>'Districts 6227, City 622, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3222, 'regionable_id'=>2590, 'regionable_type'=>'districts']); //Babat
            DB::table('regionables')->insert(['region_id'=>3222, 'regionable_id'=>2591, 'regionable_type'=>'districts']); //Kedungpring
            DB::table('regionables')->insert(['region_id'=>3222, 'regionable_id'=>2592, 'regionable_type'=>'districts']); //Ngimbang
            DB::table('regionables')->insert(['region_id'=>3222, 'regionable_id'=>2593, 'regionable_type'=>'districts']); //Bluluk
            DB::table('regionables')->insert(['region_id'=>3222, 'regionable_id'=>2594, 'regionable_type'=>'districts']); //Modo
            DB::table('regionables')->insert(['region_id'=>3222, 'regionable_id'=>2595, 'regionable_type'=>'districts']); //Sukorame
                DB::table('regions')->insert(['id'=>3223, 'parent'=>3222, 'code'=>'62276', 'type'=>'village', 'name'=>'Village 62276, Districts 6227, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29153, 'regionable_type'=>'village']); //Banggle
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29154, 'regionable_type'=>'village']); //Kedungkumpul
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29155, 'regionable_type'=>'village']); //Kedungrejo
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29156, 'regionable_type'=>'village']); //Mragel
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29157, 'regionable_type'=>'village']); //Pendowokumpul
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29158, 'regionable_type'=>'village']); //Sembung
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29159, 'regionable_type'=>'village']); //Sewor
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29160, 'regionable_type'=>'village']); //Sukorame
                DB::table('regionables')->insert(['region_id'=>3223, 'regionable_id'=>29161, 'regionable_type'=>'village']); //Wedoro
            DB::table('regions')->insert(['id'=>3224, 'parent'=>3208, 'code'=>'6228', 'type'=>'districts', 'name'=>'Districts 6228, City 622, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3224, 'regionable_id'=>2596, 'regionable_type'=>'districts']); //Tikung
            DB::table('regionables')->insert(['region_id'=>3224, 'regionable_id'=>2597, 'regionable_type'=>'districts']); //Sarirejo
            DB::table('regionables')->insert(['region_id'=>3224, 'regionable_id'=>2598, 'regionable_type'=>'districts']); //Kembangbahu
            DB::table('regionables')->insert(['region_id'=>3224, 'regionable_id'=>2599, 'regionable_type'=>'districts']); //Mantup
            DB::table('regionables')->insert(['region_id'=>3224, 'regionable_id'=>2600, 'regionable_type'=>'districts']); //Sambeng
                DB::table('regions')->insert(['id'=>3225, 'parent'=>3224, 'code'=>'62284', 'type'=>'village', 'name'=>'Village 62284, Districts 6228, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29217, 'regionable_type'=>'village']); //Ardirejo
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29218, 'regionable_type'=>'village']); //Barurejo
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29219, 'regionable_type'=>'village']); //Candisari
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29220, 'regionable_type'=>'village']); //Garung
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29221, 'regionable_type'=>'village']); //Gempolmanis
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29222, 'regionable_type'=>'village']); //Jatipandak
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29223, 'regionable_type'=>'village']); //Kedungbanjar
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29224, 'regionable_type'=>'village']); //Kedungwangi
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29225, 'regionable_type'=>'village']); //Kreteranggon
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29226, 'regionable_type'=>'village']); //Nogojatisari
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29227, 'regionable_type'=>'village']); //Pamotan
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29228, 'regionable_type'=>'village']); //Pasarlegi
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29229, 'regionable_type'=>'village']); //Pataan
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29230, 'regionable_type'=>'village']); //Sekidang
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29231, 'regionable_type'=>'village']); //Selorejo
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29232, 'regionable_type'=>'village']); //Semampirejo
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29233, 'regionable_type'=>'village']); //Sidokumpul
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29234, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29235, 'regionable_type'=>'village']); //Tenggiring
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29236, 'regionable_type'=>'village']); //Wateswinangun
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29237, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regionables')->insert(['region_id'=>3225, 'regionable_id'=>29238, 'regionable_type'=>'village']); //Wudi
            DB::table('regions')->insert(['id'=>3226, 'parent'=>3208, 'code'=>'6229', 'type'=>'districts', 'name'=>'Districts 6229, City 622, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3226, 'regionable_id'=>2601, 'regionable_type'=>'districts']); //Deket
            DB::table('regionables')->insert(['region_id'=>3226, 'regionable_id'=>2602, 'regionable_type'=>'districts']); //Glagah
            DB::table('regionables')->insert(['region_id'=>3226, 'regionable_id'=>2603, 'regionable_type'=>'districts']); //Karangbinangun
                DB::table('regions')->insert(['id'=>3227, 'parent'=>3226, 'code'=>'62293', 'type'=>'village', 'name'=>'Village 62293, Districts 6229, City 622, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29285, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29286, 'regionable_type'=>'village']); //Banyuurip
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29287, 'regionable_type'=>'village']); //Baranggayam
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29288, 'regionable_type'=>'village']); //Blawi
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29289, 'regionable_type'=>'village']); //Bogobabadan
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29290, 'regionable_type'=>'village']); //Gawerejo
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29291, 'regionable_type'=>'village']); //Karanganom
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29292, 'regionable_type'=>'village']); //Karangbinangun
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29293, 'regionable_type'=>'village']); //Ketapangtelu
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29294, 'regionable_type'=>'village']); //Kuro
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29295, 'regionable_type'=>'village']); //Mayong
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29296, 'regionable_type'=>'village']); //Palangan
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29297, 'regionable_type'=>'village']); //Pendowolimo
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29298, 'regionable_type'=>'village']); //Priyoso
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29299, 'regionable_type'=>'village']); //Putatbangah
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29300, 'regionable_type'=>'village']); //Sambopinggir
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29301, 'regionable_type'=>'village']); //Somowinangun
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29302, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29303, 'regionable_type'=>'village']); //Waruk
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29304, 'regionable_type'=>'village']); //Watangpanjang
                DB::table('regionables')->insert(['region_id'=>3227, 'regionable_id'=>29305, 'regionable_type'=>'village']); //Windu
        DB::table('regions')->insert(['id'=>3228, 'parent'=>2996, 'code'=>'623', 'type'=>'city', 'name'=>'City 623, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3228, 'regionable_id'=>133, 'regionable_type'=>'city']); //Tuban regencies
            DB::table('regions')->insert(['id'=>3229, 'parent'=>3228, 'code'=>'6231', 'type'=>'districts', 'name'=>'Districts 6231, City 623, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3229, 'regionable_id'=>2604, 'regionable_type'=>'districts']); //Tuban
                DB::table('regions')->insert(['id'=>3230, 'parent'=>3229, 'code'=>'62311', 'type'=>'village', 'name'=>'Village 62311, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3230, 'regionable_id'=>29306, 'regionable_type'=>'village']); //Kutorejo
                DB::table('regions')->insert(['id'=>3231, 'parent'=>3229, 'code'=>'62312', 'type'=>'village', 'name'=>'Village 62312, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3231, 'regionable_id'=>29307, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regions')->insert(['id'=>3232, 'parent'=>3229, 'code'=>'62313', 'type'=>'village', 'name'=>'Village 62313, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3232, 'regionable_id'=>29308, 'regionable_type'=>'village']); //Kingking
                DB::table('regionables')->insert(['region_id'=>3232, 'regionable_id'=>29309, 'regionable_type'=>'village']); //Ronggomulyo
                DB::table('regions')->insert(['id'=>3233, 'parent'=>3229, 'code'=>'62314', 'type'=>'village', 'name'=>'Village 62314, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3233, 'regionable_id'=>29310, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>3233, 'regionable_id'=>29311, 'regionable_type'=>'village']); //Latsari
                DB::table('regions')->insert(['id'=>3234, 'parent'=>3229, 'code'=>'62315', 'type'=>'village', 'name'=>'Village 62315, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3234, 'regionable_id'=>29312, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regions')->insert(['id'=>3235, 'parent'=>3229, 'code'=>'62316', 'type'=>'village', 'name'=>'Village 62316, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3235, 'regionable_id'=>29313, 'regionable_type'=>'village']); //Doromukti
                DB::table('regions')->insert(['id'=>3236, 'parent'=>3229, 'code'=>'62317', 'type'=>'village', 'name'=>'Village 62317, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3236, 'regionable_id'=>29314, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regions')->insert(['id'=>3237, 'parent'=>3229, 'code'=>'62318', 'type'=>'village', 'name'=>'Village 62318, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3237, 'regionable_id'=>29315, 'regionable_type'=>'village']); //Baturetno
                DB::table('regionables')->insert(['region_id'=>3237, 'regionable_id'=>29316, 'regionable_type'=>'village']); //Sukolilo
                DB::table('regions')->insert(['id'=>3238, 'parent'=>3229, 'code'=>'62319', 'type'=>'village', 'name'=>'Village 62319, Districts 6231, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3238, 'regionable_id'=>29317, 'regionable_type'=>'village']); //Kembangbilo
                DB::table('regionables')->insert(['region_id'=>3238, 'regionable_id'=>29318, 'regionable_type'=>'village']); //Mondokan
                DB::table('regionables')->insert(['region_id'=>3238, 'regionable_id'=>29319, 'regionable_type'=>'village']); //Perbon
                DB::table('regionables')->insert(['region_id'=>3238, 'regionable_id'=>29320, 'regionable_type'=>'village']); //Sendangharjo
                DB::table('regionables')->insert(['region_id'=>3238, 'regionable_id'=>29321, 'regionable_type'=>'village']); //Sugiharjo
                DB::table('regionables')->insert(['region_id'=>3238, 'regionable_id'=>29322, 'regionable_type'=>'village']); //Sumurgung
            DB::table('regions')->insert(['id'=>3239, 'parent'=>3228, 'code'=>'6235', 'type'=>'districts', 'name'=>'Districts 6235, City 623, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3239, 'regionable_id'=>2605, 'regionable_type'=>'districts']); //Jenu
            DB::table('regionables')->insert(['region_id'=>3239, 'regionable_id'=>2606, 'regionable_type'=>'districts']); //Tambakboyo
            DB::table('regionables')->insert(['region_id'=>3239, 'regionable_id'=>2607, 'regionable_type'=>'districts']); //Bancar
            DB::table('regionables')->insert(['region_id'=>3239, 'regionable_id'=>2608, 'regionable_type'=>'districts']); //Merakurak
            DB::table('regionables')->insert(['region_id'=>3239, 'regionable_id'=>2609, 'regionable_type'=>'districts']); //Kerek
            DB::table('regionables')->insert(['region_id'=>3239, 'regionable_id'=>2610, 'regionable_type'=>'districts']); //Montong
                DB::table('regions')->insert(['id'=>3240, 'parent'=>3239, 'code'=>'62357', 'type'=>'village', 'name'=>'Village 62357, Districts 6235, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29418, 'regionable_type'=>'village']); //Bringin
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29419, 'regionable_type'=>'village']); //Guwoterus
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29420, 'regionable_type'=>'village']); //Jetak
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29421, 'regionable_type'=>'village']); //Maindu
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29422, 'regionable_type'=>'village']); //Manjung
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29423, 'regionable_type'=>'village']); //Montongsekar
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29424, 'regionable_type'=>'village']); //Nguluhan
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29425, 'regionable_type'=>'village']); //Pakel
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29426, 'regionable_type'=>'village']); //Pucangan
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29427, 'regionable_type'=>'village']); //Sumurgung
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29428, 'regionable_type'=>'village']); //Talangkembar
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29429, 'regionable_type'=>'village']); //Talun
                DB::table('regionables')->insert(['region_id'=>3240, 'regionable_id'=>29430, 'regionable_type'=>'village']); //Tanggulangin
            DB::table('regions')->insert(['id'=>3241, 'parent'=>3228, 'code'=>'6236', 'type'=>'districts', 'name'=>'Districts 6236, City 623, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3241, 'regionable_id'=>2608, 'regionable_type'=>'districts']); //Merakurak
            DB::table('regionables')->insert(['region_id'=>3241, 'regionable_id'=>2611, 'regionable_type'=>'districts']); //Singgahan
            DB::table('regionables')->insert(['region_id'=>3241, 'regionable_id'=>2612, 'regionable_type'=>'districts']); //Jatirogo
            DB::table('regionables')->insert(['region_id'=>3241, 'regionable_id'=>2613, 'regionable_type'=>'districts']); //Kenduruan
            DB::table('regionables')->insert(['region_id'=>3241, 'regionable_id'=>2614, 'regionable_type'=>'districts']); //Bangilan
            DB::table('regionables')->insert(['region_id'=>3241, 'regionable_id'=>2615, 'regionable_type'=>'districts']); //Senori
            DB::table('regionables')->insert(['region_id'=>3241, 'regionable_id'=>2616, 'regionable_type'=>'districts']); //Parengan
                DB::table('regions')->insert(['id'=>3242, 'parent'=>3241, 'code'=>'62366', 'type'=>'village', 'name'=>'Village 62366, Districts 6236, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29496, 'regionable_type'=>'village']); //Brangkal
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29497, 'regionable_type'=>'village']); //Cengkong
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29498, 'regionable_type'=>'village']); //Dagangan
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29499, 'regionable_type'=>'village']); //Kemlaten
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29500, 'regionable_type'=>'village']); //Kumpulrejo
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29501, 'regionable_type'=>'village']); //Mergoasri
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29502, 'regionable_type'=>'village']); //Mergorejo
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29503, 'regionable_type'=>'village']); //Mojomalang
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29504, 'regionable_type'=>'village']); //Ngawun
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29505, 'regionable_type'=>'village']); //Pacing
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29506, 'regionable_type'=>'village']); //Parangbatu
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29507, 'regionable_type'=>'village']); //Selogabus
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29508, 'regionable_type'=>'village']); //Sembung
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29509, 'regionable_type'=>'village']); //Sendangrejo
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29510, 'regionable_type'=>'village']); //Suciharjo
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29511, 'regionable_type'=>'village']); //Sugihwaras
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29512, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3242, 'regionable_id'=>29513, 'regionable_type'=>'village']); //Wukirharjo
            DB::table('regions')->insert(['id'=>3243, 'parent'=>3228, 'code'=>'6237', 'type'=>'districts', 'name'=>'Districts 6237, City 623, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3243, 'regionable_id'=>2617, 'regionable_type'=>'districts']); //Rengel
            DB::table('regionables')->insert(['region_id'=>3243, 'regionable_id'=>2618, 'regionable_type'=>'districts']); //Grabagan
            DB::table('regionables')->insert(['region_id'=>3243, 'regionable_id'=>2619, 'regionable_type'=>'districts']); //Soko
                DB::table('regions')->insert(['id'=>3244, 'parent'=>3243, 'code'=>'62372', 'type'=>'village', 'name'=>'Village 62372, Districts 6237, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29541, 'regionable_type'=>'village']); //Bangunrejo
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29542, 'regionable_type'=>'village']); //Cekalang
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29543, 'regionable_type'=>'village']); //Glagahsari
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29544, 'regionable_type'=>'village']); //Gununganyar
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29545, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29546, 'regionable_type'=>'village']); //Jegulo
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29547, 'regionable_type'=>'village']); //Kendalrejo
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29548, 'regionable_type'=>'village']); //Kenongosari
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29549, 'regionable_type'=>'village']); //Klumpit
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29550, 'regionable_type'=>'village']); //Menilo
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29551, 'regionable_type'=>'village']); //Mentoro
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29552, 'regionable_type'=>'village']); //Mojoagung
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29553, 'regionable_type'=>'village']); //Nguruan
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29554, 'regionable_type'=>'village']); //Pandanagung
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29555, 'regionable_type'=>'village']); //Pandanwangi
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29556, 'regionable_type'=>'village']); //Prambontergayang
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29557, 'regionable_type'=>'village']); //Rahayu
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29558, 'regionable_type'=>'village']); //Sandingrowo
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29559, 'regionable_type'=>'village']); //Simo
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29560, 'regionable_type'=>'village']); //Sokosari
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29561, 'regionable_type'=>'village']); //Sumurcinde
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29562, 'regionable_type'=>'village']); //Tluwe
                DB::table('regionables')->insert(['region_id'=>3244, 'regionable_id'=>29563, 'regionable_type'=>'village']); //Wadung
            DB::table('regions')->insert(['id'=>3245, 'parent'=>3228, 'code'=>'6238', 'type'=>'districts', 'name'=>'Districts 6238, City 623, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3245, 'regionable_id'=>2620, 'regionable_type'=>'districts']); //Semanding
            DB::table('regionables')->insert(['region_id'=>3245, 'regionable_id'=>2621, 'regionable_type'=>'districts']); //Plumpang
            DB::table('regionables')->insert(['region_id'=>3245, 'regionable_id'=>2622, 'regionable_type'=>'districts']); //Widang
                DB::table('regions')->insert(['id'=>3246, 'parent'=>3245, 'code'=>'62383', 'type'=>'village', 'name'=>'Village 62383, Districts 6238, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29599, 'regionable_type'=>'village']); //Banjar
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29600, 'regionable_type'=>'village']); //Bunut
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29601, 'regionable_type'=>'village']); //Compreng
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29602, 'regionable_type'=>'village']); //Kedungharjo
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29603, 'regionable_type'=>'village']); //Kujung
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29604, 'regionable_type'=>'village']); //Minohorejo
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29605, 'regionable_type'=>'village']); //Mlangi
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29606, 'regionable_type'=>'village']); //Mrutuk
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29607, 'regionable_type'=>'village']); //Ngadipuro
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29608, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29609, 'regionable_type'=>'village']); //Patihan
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29610, 'regionable_type'=>'village']); //Simorejo
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29611, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29612, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29613, 'regionable_type'=>'village']); //Tegalsari
                DB::table('regionables')->insert(['region_id'=>3246, 'regionable_id'=>29614, 'regionable_type'=>'village']); //Widang
            DB::table('regions')->insert(['id'=>3247, 'parent'=>3228, 'code'=>'6239', 'type'=>'districts', 'name'=>'Districts 6239, City 623, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3247, 'regionable_id'=>2623, 'regionable_type'=>'districts']); //Palang
                DB::table('regions')->insert(['id'=>3248, 'parent'=>3247, 'code'=>'62391', 'type'=>'village', 'name'=>'Village 62391, Districts 6239, City 623, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29615, 'regionable_type'=>'village']); //Cendoro
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29616, 'regionable_type'=>'village']); //Cepokorejo
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29617, 'regionable_type'=>'village']); //Dawung
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29618, 'regionable_type'=>'village']); //Gesikharjo
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29619, 'regionable_type'=>'village']); //Glodog
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29620, 'regionable_type'=>'village']); //Karangagung
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29621, 'regionable_type'=>'village']); //Ketambul
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29622, 'regionable_type'=>'village']); //Kradenan
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29623, 'regionable_type'=>'village']); //Leran Kulon
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29624, 'regionable_type'=>'village']); //Leran Wetan
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29625, 'regionable_type'=>'village']); //Ngimbang
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29626, 'regionable_type'=>'village']); //Palang
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29627, 'regionable_type'=>'village']); //Panyuran
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29628, 'regionable_type'=>'village']); //Pliwetan
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29629, 'regionable_type'=>'village']); //Pucangan
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29630, 'regionable_type'=>'village']); //Sumurgung
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29631, 'regionable_type'=>'village']); //Tasikmadu
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29632, 'regionable_type'=>'village']); //Tegalbang
                DB::table('regionables')->insert(['region_id'=>3248, 'regionable_id'=>29633, 'regionable_type'=>'village']); //Wangun
        DB::table('regions')->insert(['id'=>3249, 'parent'=>2996, 'code'=>'631', 'type'=>'city', 'name'=>'City 631, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3249, 'regionable_id'=>134, 'regionable_type'=>'city']); //Madiun city
        DB::table('regionables')->insert(['region_id'=>3249, 'regionable_id'=>135, 'regionable_type'=>'city']); //Madiun regencies
        DB::table('regionables')->insert(['region_id'=>3249, 'regionable_id'=>136, 'regionable_type'=>'city']); //Magetan regencies
            DB::table('regions')->insert(['id'=>3250, 'parent'=>3249, 'code'=>'6313', 'type'=>'districts', 'name'=>'Districts 6313, City 631, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3250, 'regionable_id'=>2627, 'regionable_type'=>'districts']); //Taman
            DB::table('regionables')->insert(['region_id'=>3250, 'regionable_id'=>2645, 'regionable_type'=>'districts']); //Taman
            DB::table('regionables')->insert(['region_id'=>3250, 'regionable_id'=>2660, 'regionable_type'=>'districts']); //Barat
                DB::table('regions')->insert(['id'=>3251, 'parent'=>3250, 'code'=>'63137', 'type'=>'village', 'name'=>'Village 63137, Districts 6313, City 631, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3251, 'regionable_id'=>29672, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>3251, 'regionable_id'=>29905, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>3251, 'regionable_id'=>30100, 'regionable_type'=>'village']); //Banjarejo
        DB::table('regions')->insert(['id'=>3252, 'parent'=>2996, 'code'=>'632', 'type'=>'city', 'name'=>'City 632, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3252, 'regionable_id'=>137, 'regionable_type'=>'city']); //Ngawi regencies
            DB::table('regions')->insert(['id'=>3253, 'parent'=>3252, 'code'=>'6321', 'type'=>'districts', 'name'=>'Districts 6321, City 632, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3253, 'regionable_id'=>2678, 'regionable_type'=>'districts']); //Ngawi
                DB::table('regions')->insert(['id'=>3254, 'parent'=>3253, 'code'=>'63211', 'type'=>'village', 'name'=>'Village 63211, Districts 6321, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3254, 'regionable_id'=>30335, 'regionable_type'=>'village']); //Ketanggi
                DB::table('regions')->insert(['id'=>3255, 'parent'=>3253, 'code'=>'63212', 'type'=>'village', 'name'=>'Village 63212, Districts 6321, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3255, 'regionable_id'=>30336, 'regionable_type'=>'village']); //Pelem
                DB::table('regions')->insert(['id'=>3256, 'parent'=>3253, 'code'=>'63214', 'type'=>'village', 'name'=>'Village 63214, Districts 6321, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3256, 'regionable_id'=>30337, 'regionable_type'=>'village']); //Grudo
                DB::table('regions')->insert(['id'=>3257, 'parent'=>3253, 'code'=>'63215', 'type'=>'village', 'name'=>'Village 63215, Districts 6321, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3257, 'regionable_id'=>30338, 'regionable_type'=>'village']); //Jururejo
                DB::table('regions')->insert(['id'=>3258, 'parent'=>3253, 'code'=>'63216', 'type'=>'village', 'name'=>'Village 63216, Districts 6321, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3258, 'regionable_id'=>30339, 'regionable_type'=>'village']); //Beran
                DB::table('regions')->insert(['id'=>3259, 'parent'=>3253, 'code'=>'63217', 'type'=>'village', 'name'=>'Village 63217, Districts 6321, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3259, 'regionable_id'=>30340, 'regionable_type'=>'village']); //Margomulyo
                DB::table('regions')->insert(['id'=>3260, 'parent'=>3253, 'code'=>'63218', 'type'=>'village', 'name'=>'Village 63218, Districts 6321, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30341, 'regionable_type'=>'village']); //Banyu Urip
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30342, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30343, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30344, 'regionable_type'=>'village']); //Karang Tengah Prandon
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30345, 'regionable_type'=>'village']); //Karangasri
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30346, 'regionable_type'=>'village']); //Kartoharjo
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30347, 'regionable_type'=>'village']); //Kerek
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30348, 'regionable_type'=>'village']); //Mangunharjo
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30349, 'regionable_type'=>'village']); //Ngawi
                DB::table('regionables')->insert(['region_id'=>3260, 'regionable_id'=>30350, 'regionable_type'=>'village']); //Watualang
            DB::table('regions')->insert(['id'=>3261, 'parent'=>3252, 'code'=>'6325', 'type'=>'districts', 'name'=>'Districts 6325, City 632, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3261, 'regionable_id'=>2679, 'regionable_type'=>'districts']); //Pitu
            DB::table('regionables')->insert(['region_id'=>3261, 'regionable_id'=>2680, 'regionable_type'=>'districts']); //Paron
            DB::table('regionables')->insert(['region_id'=>3261, 'regionable_id'=>2681, 'regionable_type'=>'districts']); //Kedunggalar
            DB::table('regionables')->insert(['region_id'=>3261, 'regionable_id'=>2682, 'regionable_type'=>'districts']); //Widodaren
            DB::table('regionables')->insert(['region_id'=>3261, 'regionable_id'=>2683, 'regionable_type'=>'districts']); //Karanganyar
                DB::table('regions')->insert(['id'=>3262, 'parent'=>3261, 'code'=>'63257', 'type'=>'village', 'name'=>'Village 63257, Districts 6325, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3262, 'regionable_id'=>30399, 'regionable_type'=>'village']); //Bangunrejo
                DB::table('regionables')->insert(['region_id'=>3262, 'regionable_id'=>30400, 'regionable_type'=>'village']); //Gembol
                DB::table('regionables')->insert(['region_id'=>3262, 'regionable_id'=>30401, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>3262, 'regionable_id'=>30402, 'regionable_type'=>'village']); //Mengger
                DB::table('regionables')->insert(['region_id'=>3262, 'regionable_id'=>30403, 'regionable_type'=>'village']); //Pandean
                DB::table('regionables')->insert(['region_id'=>3262, 'regionable_id'=>30404, 'regionable_type'=>'village']); //Sekarjati
                DB::table('regionables')->insert(['region_id'=>3262, 'regionable_id'=>30405, 'regionable_type'=>'village']); //Sri Wedari
            DB::table('regions')->insert(['id'=>3263, 'parent'=>3252, 'code'=>'6326', 'type'=>'districts', 'name'=>'Districts 6326, City 632, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3263, 'regionable_id'=>2684, 'regionable_type'=>'districts']); //Kendal
            DB::table('regionables')->insert(['region_id'=>3263, 'regionable_id'=>2685, 'regionable_type'=>'districts']); //Mantingan
            DB::table('regionables')->insert(['region_id'=>3263, 'regionable_id'=>2686, 'regionable_type'=>'districts']); //Jogorogo
            DB::table('regionables')->insert(['region_id'=>3263, 'regionable_id'=>2687, 'regionable_type'=>'districts']); //Ngrambe
            DB::table('regionables')->insert(['region_id'=>3263, 'regionable_id'=>2688, 'regionable_type'=>'districts']); //Sine
                DB::table('regions')->insert(['id'=>3264, 'parent'=>3263, 'code'=>'63264', 'type'=>'village', 'name'=>'Village 63264, Districts 6326, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30449, 'regionable_type'=>'village']); //Gendol
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30450, 'regionable_type'=>'village']); //Girikerto
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30451, 'regionable_type'=>'village']); //Hargosari
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30452, 'regionable_type'=>'village']); //Jagir
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30453, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30454, 'regionable_type'=>'village']); //Ketanggung
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30455, 'regionable_type'=>'village']); //Kuniran
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30456, 'regionable_type'=>'village']); //Ngrendeng
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30457, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30458, 'regionable_type'=>'village']); //Pocol
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30459, 'regionable_type'=>'village']); //Sine
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30460, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30461, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30462, 'regionable_type'=>'village']); //Tulakan
                DB::table('regionables')->insert(['region_id'=>3264, 'regionable_id'=>30463, 'regionable_type'=>'village']); //Wonosari
            DB::table('regions')->insert(['id'=>3265, 'parent'=>3252, 'code'=>'6327', 'type'=>'districts', 'name'=>'Districts 6327, City 632, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3265, 'regionable_id'=>2689, 'regionable_type'=>'districts']); //Geneng
            DB::table('regionables')->insert(['region_id'=>3265, 'regionable_id'=>2690, 'regionable_type'=>'districts']); //Gerih
                DB::table('regions')->insert(['id'=>3266, 'parent'=>3265, 'code'=>'63271', 'type'=>'village', 'name'=>'Village 63271, Districts 6327, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30464, 'regionable_type'=>'village']); //Baderan
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30465, 'regionable_type'=>'village']); //Dempel
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30466, 'regionable_type'=>'village']); //Geneng
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30467, 'regionable_type'=>'village']); //Kasreman
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30468, 'regionable_type'=>'village']); //Keniten
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30469, 'regionable_type'=>'village']); //Keras Wetan
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30470, 'regionable_type'=>'village']); //Kersikan
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30471, 'regionable_type'=>'village']); //Kersoharjo
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30472, 'regionable_type'=>'village']); //Klampisan
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30473, 'regionable_type'=>'village']); //Klitik
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30474, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30475, 'regionable_type'=>'village']); //Tambakromo
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30476, 'regionable_type'=>'village']); //Tepas
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30477, 'regionable_type'=>'village']); //Gerih
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30478, 'regionable_type'=>'village']); //Guyung
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30479, 'regionable_type'=>'village']); //Keras Kulon
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30480, 'regionable_type'=>'village']); //Randusongo
                DB::table('regionables')->insert(['region_id'=>3266, 'regionable_id'=>30481, 'regionable_type'=>'village']); //Widodaren
            DB::table('regions')->insert(['id'=>3267, 'parent'=>3252, 'code'=>'6328', 'type'=>'districts', 'name'=>'Districts 6328, City 632, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3267, 'regionable_id'=>2691, 'regionable_type'=>'districts']); //Padas
            DB::table('regionables')->insert(['region_id'=>3267, 'regionable_id'=>2692, 'regionable_type'=>'districts']); //Kasreman
            DB::table('regionables')->insert(['region_id'=>3267, 'regionable_id'=>2693, 'regionable_type'=>'districts']); //Pangkur
            DB::table('regionables')->insert(['region_id'=>3267, 'regionable_id'=>2694, 'regionable_type'=>'districts']); //Kwadungan
            DB::table('regionables')->insert(['region_id'=>3267, 'regionable_id'=>2695, 'regionable_type'=>'districts']); //Karangjati
            DB::table('regionables')->insert(['region_id'=>3267, 'regionable_id'=>2696, 'regionable_type'=>'districts']); //Bringin
                DB::table('regions')->insert(['id'=>3268, 'parent'=>3267, 'code'=>'63285', 'type'=>'village', 'name'=>'Village 63285, Districts 6328, City 632, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30542, 'regionable_type'=>'village']); //Bringin
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30543, 'regionable_type'=>'village']); //Dampit
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30544, 'regionable_type'=>'village']); //Dero
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30545, 'regionable_type'=>'village']); //Gandong
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30546, 'regionable_type'=>'village']); //Kenongorejo
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30547, 'regionable_type'=>'village']); //Krompol
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30548, 'regionable_type'=>'village']); //Lego Wetan
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30549, 'regionable_type'=>'village']); //Mojo
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30550, 'regionable_type'=>'village']); //Sumber Bening
                DB::table('regionables')->insert(['region_id'=>3268, 'regionable_id'=>30551, 'regionable_type'=>'village']); //Suruh
        DB::table('regions')->insert(['id'=>3269, 'parent'=>2996, 'code'=>'633', 'type'=>'city', 'name'=>'City 633, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3269, 'regionable_id'=>136, 'regionable_type'=>'city']); //Magetan regencies
            DB::table('regions')->insert(['id'=>3270, 'parent'=>3269, 'code'=>'6331', 'type'=>'districts', 'name'=>'Districts 6331, City 633, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3270, 'regionable_id'=>2661, 'regionable_type'=>'districts']); //Magetan
            DB::table('regionables')->insert(['region_id'=>3270, 'regionable_id'=>2662, 'regionable_type'=>'districts']); //Sidorejo
                DB::table('regions')->insert(['id'=>3271, 'parent'=>3270, 'code'=>'63319', 'type'=>'village', 'name'=>'Village 63319, Districts 6331, City 633, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30121, 'regionable_type'=>'village']); //Baron
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30122, 'regionable_type'=>'village']); //Candirejo
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30123, 'regionable_type'=>'village']); //Magetan
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30124, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30125, 'regionable_type'=>'village']); //Ringinagung
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30126, 'regionable_type'=>'village']); //Sukowinangun
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30127, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30128, 'regionable_type'=>'village']); //Campursari
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30129, 'regionable_type'=>'village']); //Kalang
                DB::table('regionables')->insert(['region_id'=>3271, 'regionable_id'=>30130, 'regionable_type'=>'village']); //Sambirobyong
            DB::table('regions')->insert(['id'=>3272, 'parent'=>3269, 'code'=>'6335', 'type'=>'districts', 'name'=>'Districts 6335, City 633, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3272, 'regionable_id'=>2662, 'regionable_type'=>'districts']); //Sidorejo
            DB::table('regionables')->insert(['region_id'=>3272, 'regionable_id'=>2663, 'regionable_type'=>'districts']); //Ngariboyo
            DB::table('regionables')->insert(['region_id'=>3272, 'regionable_id'=>2664, 'regionable_type'=>'districts']); //Panekan
                DB::table('regions')->insert(['id'=>3273, 'parent'=>3272, 'code'=>'63352', 'type'=>'village', 'name'=>'Village 63352, Districts 6335, City 633, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30131, 'regionable_type'=>'village']); //Sidokerto
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30132, 'regionable_type'=>'village']); //Sumbersawit
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30133, 'regionable_type'=>'village']); //Widorokandang
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30150, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30151, 'regionable_type'=>'village']); //Bedagung
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30152, 'regionable_type'=>'village']); //Cepoko
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30153, 'regionable_type'=>'village']); //Jabung
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30154, 'regionable_type'=>'village']); //Manjung
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30155, 'regionable_type'=>'village']); //Milangasri
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30156, 'regionable_type'=>'village']); //Ngiliran
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30157, 'regionable_type'=>'village']); //Panekan
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30158, 'regionable_type'=>'village']); //Rejomulyo
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30159, 'regionable_type'=>'village']); //Sidowayah
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30160, 'regionable_type'=>'village']); //Sukowidi
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30161, 'regionable_type'=>'village']); //Sumberdodol
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30162, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30163, 'regionable_type'=>'village']); //Tapak
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30164, 'regionable_type'=>'village']); //Terung
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30165, 'regionable_type'=>'village']); //Turi
                DB::table('regionables')->insert(['region_id'=>3273, 'regionable_id'=>30166, 'regionable_type'=>'village']); //Wates
            DB::table('regions')->insert(['id'=>3274, 'parent'=>3269, 'code'=>'6336', 'type'=>'districts', 'name'=>'Districts 6336, City 633, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3274, 'regionable_id'=>2662, 'regionable_type'=>'districts']); //Sidorejo
            DB::table('regionables')->insert(['region_id'=>3274, 'regionable_id'=>2663, 'regionable_type'=>'districts']); //Ngariboyo
            DB::table('regionables')->insert(['region_id'=>3274, 'regionable_id'=>2665, 'regionable_type'=>'districts']); //Plaosan
            DB::table('regionables')->insert(['region_id'=>3274, 'regionable_id'=>2666, 'regionable_type'=>'districts']); //Poncol
                DB::table('regions')->insert(['id'=>3275, 'parent'=>3274, 'code'=>'63362', 'type'=>'village', 'name'=>'Village 63362, Districts 6336, City 633, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3275, 'regionable_id'=>30182, 'regionable_type'=>'village']); //Alastuwo
                DB::table('regionables')->insert(['region_id'=>3275, 'regionable_id'=>30183, 'regionable_type'=>'village']); //Cileng
                DB::table('regionables')->insert(['region_id'=>3275, 'regionable_id'=>30184, 'regionable_type'=>'village']); //Genilangit
                DB::table('regionables')->insert(['region_id'=>3275, 'regionable_id'=>30185, 'regionable_type'=>'village']); //Gonggang
                DB::table('regionables')->insert(['region_id'=>3275, 'regionable_id'=>30186, 'regionable_type'=>'village']); //Janggan
                DB::table('regionables')->insert(['region_id'=>3275, 'regionable_id'=>30187, 'regionable_type'=>'village']); //Plangkrongan
                DB::table('regionables')->insert(['region_id'=>3275, 'regionable_id'=>30188, 'regionable_type'=>'village']); //Poncol
                DB::table('regionables')->insert(['region_id'=>3275, 'regionable_id'=>30189, 'regionable_type'=>'village']); //Sombo
            DB::table('regions')->insert(['id'=>3276, 'parent'=>3269, 'code'=>'6337', 'type'=>'districts', 'name'=>'Districts 6337, City 633, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3276, 'regionable_id'=>2667, 'regionable_type'=>'districts']); //Parang
            DB::table('regionables')->insert(['region_id'=>3276, 'regionable_id'=>2668, 'regionable_type'=>'districts']); //Lembeyan
                DB::table('regions')->insert(['id'=>3277, 'parent'=>3276, 'code'=>'63372', 'type'=>'village', 'name'=>'Village 63372, Districts 6337, City 633, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30203, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30204, 'regionable_type'=>'village']); //Kediren
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30205, 'regionable_type'=>'village']); //Kedungpanji
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30206, 'regionable_type'=>'village']); //Krowe
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30207, 'regionable_type'=>'village']); //Lembeyan Kulon
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30208, 'regionable_type'=>'village']); //Lembeyan Wetan
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30209, 'regionable_type'=>'village']); //Nguri
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30210, 'regionable_type'=>'village']); //Pupus
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30211, 'regionable_type'=>'village']); //Tapen
                DB::table('regionables')->insert(['region_id'=>3277, 'regionable_id'=>30212, 'regionable_type'=>'village']); //Tunggur
            DB::table('regions')->insert(['id'=>3278, 'parent'=>3269, 'code'=>'6338', 'type'=>'districts', 'name'=>'Districts 6338, City 633, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3278, 'regionable_id'=>2669, 'regionable_type'=>'districts']); //Kawedanan
            DB::table('regionables')->insert(['region_id'=>3278, 'regionable_id'=>2670, 'regionable_type'=>'districts']); //Nguntoronadi
            DB::table('regionables')->insert(['region_id'=>3278, 'regionable_id'=>2671, 'regionable_type'=>'districts']); //Takeran
            DB::table('regionables')->insert(['region_id'=>3278, 'regionable_id'=>2672, 'regionable_type'=>'districts']); //Bendo
                DB::table('regions')->insert(['id'=>3279, 'parent'=>3278, 'code'=>'63384', 'type'=>'village', 'name'=>'Village 63384, Districts 6338, City 633, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30254, 'regionable_type'=>'village']); //Belotan
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30255, 'regionable_type'=>'village']); //Bendo
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30256, 'regionable_type'=>'village']); //Bulak
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30257, 'regionable_type'=>'village']); //Bulugledeg
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30258, 'regionable_type'=>'village']); //Carikan
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30259, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30260, 'regionable_type'=>'village']); //Duwet
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30261, 'regionable_type'=>'village']); //Kinandang
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30262, 'regionable_type'=>'village']); //Kleco
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30263, 'regionable_type'=>'village']); //Kledokan
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30264, 'regionable_type'=>'village']); //Lemahbang
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30265, 'regionable_type'=>'village']); //Pingkuk
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30266, 'regionable_type'=>'village']); //Setren
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30267, 'regionable_type'=>'village']); //Soco
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30268, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>3279, 'regionable_id'=>30269, 'regionable_type'=>'village']); //Tegalarum
            DB::table('regions')->insert(['id'=>3280, 'parent'=>3269, 'code'=>'6339', 'type'=>'districts', 'name'=>'Districts 6339, City 633, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3280, 'regionable_id'=>2660, 'regionable_type'=>'districts']); //Barat
            DB::table('regionables')->insert(['region_id'=>3280, 'regionable_id'=>2673, 'regionable_type'=>'districts']); //Sukomoro
            DB::table('regionables')->insert(['region_id'=>3280, 'regionable_id'=>2674, 'regionable_type'=>'districts']); //Maospati
            DB::table('regionables')->insert(['region_id'=>3280, 'regionable_id'=>2675, 'regionable_type'=>'districts']); //Karangrejo
            DB::table('regionables')->insert(['region_id'=>3280, 'regionable_id'=>2676, 'regionable_type'=>'districts']); //Kartoharjo (kertoharjo)
            DB::table('regionables')->insert(['region_id'=>3280, 'regionable_id'=>2677, 'regionable_type'=>'districts']); //Karas
                DB::table('regions')->insert(['id'=>3281, 'parent'=>3280, 'code'=>'63395', 'type'=>'village', 'name'=>'Village 63395, Districts 6339, City 633, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30101, 'regionable_type'=>'village']); //Bangunasri
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30102, 'regionable_type'=>'village']); //Blaran
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30103, 'regionable_type'=>'village']); //Bogorejo
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30104, 'regionable_type'=>'village']); //Jonggrang
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30105, 'regionable_type'=>'village']); //Karangsono
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30106, 'regionable_type'=>'village']); //Klagen
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30107, 'regionable_type'=>'village']); //Mangge
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30108, 'regionable_type'=>'village']); //Manjung
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30109, 'regionable_type'=>'village']); //Ngumpul
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30110, 'regionable_type'=>'village']); //Panggung
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30111, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30112, 'regionable_type'=>'village']); //Rejomulyo
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30113, 'regionable_type'=>'village']); //Tebon
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30299, 'regionable_type'=>'village']); //Baluk
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30300, 'regionable_type'=>'village']); //Gebyog
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30301, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30302, 'regionable_type'=>'village']); //Grabahan
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30303, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30304, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30305, 'regionable_type'=>'village']); //Manisrejo
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30306, 'regionable_type'=>'village']); //Mantren
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30307, 'regionable_type'=>'village']); //Maron
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30308, 'regionable_type'=>'village']); //Patihan
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30309, 'regionable_type'=>'village']); //Pelem
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30310, 'regionable_type'=>'village']); //Prampelan
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30311, 'regionable_type'=>'village']); //Sambirembe
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30312, 'regionable_type'=>'village']); //Bayem Taman
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30313, 'regionable_type'=>'village']); //Bayem Wetan
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30314, 'regionable_type'=>'village']); //Gunungan
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30315, 'regionable_type'=>'village']); //Jajar
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30316, 'regionable_type'=>'village']); //Jeruk
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30317, 'regionable_type'=>'village']); //Karangmojo
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30318, 'regionable_type'=>'village']); //Kartoharjo (kertoharjo)
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30319, 'regionable_type'=>'village']); //Klurahan
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30320, 'regionable_type'=>'village']); //Mrahu
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30321, 'regionable_type'=>'village']); //Ngelang
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30322, 'regionable_type'=>'village']); //Pencol
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30323, 'regionable_type'=>'village']); //Sukowidi
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30324, 'regionable_type'=>'village']); //Botok
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30325, 'regionable_type'=>'village']); //Geplak
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30326, 'regionable_type'=>'village']); //Ginuk
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30327, 'regionable_type'=>'village']); //Jungke
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30328, 'regionable_type'=>'village']); //Karas
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30329, 'regionable_type'=>'village']); //Kuwon
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30330, 'regionable_type'=>'village']); //Sobontoro
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30331, 'regionable_type'=>'village']); //Sumursongo
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30332, 'regionable_type'=>'village']); //Taji
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30333, 'regionable_type'=>'village']); //Temboro
                DB::table('regionables')->insert(['region_id'=>3281, 'regionable_id'=>30334, 'regionable_type'=>'village']); //Temenggungan
        DB::table('regions')->insert(['id'=>3282, 'parent'=>2996, 'code'=>'634', 'type'=>'city', 'name'=>'City 634, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3282, 'regionable_id'=>138, 'regionable_type'=>'city']); //Ponorogo regencies
            DB::table('regions')->insert(['id'=>3283, 'parent'=>3282, 'code'=>'6341', 'type'=>'districts', 'name'=>'Districts 6341, City 634, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3283, 'regionable_id'=>2697, 'regionable_type'=>'districts']); //Ponorogo
            DB::table('regionables')->insert(['region_id'=>3283, 'regionable_id'=>2698, 'regionable_type'=>'districts']); //Pudak
                DB::table('regions')->insert(['id'=>3284, 'parent'=>3283, 'code'=>'63418', 'type'=>'village', 'name'=>'Village 63418, Districts 6341, City 634, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3284, 'regionable_id'=>30564, 'regionable_type'=>'village']); //Tonatan
                DB::table('regionables')->insert(['region_id'=>3284, 'regionable_id'=>30571, 'regionable_type'=>'village']); //Banjarjo
                DB::table('regionables')->insert(['region_id'=>3284, 'regionable_id'=>30572, 'regionable_type'=>'village']); //Bareng
                DB::table('regionables')->insert(['region_id'=>3284, 'regionable_id'=>30573, 'regionable_type'=>'village']); //Krisik
                DB::table('regionables')->insert(['region_id'=>3284, 'regionable_id'=>30574, 'regionable_type'=>'village']); //Pudakkulon
                DB::table('regionables')->insert(['region_id'=>3284, 'regionable_id'=>30575, 'regionable_type'=>'village']); //Pudakwetan
                DB::table('regionables')->insert(['region_id'=>3284, 'regionable_id'=>30576, 'regionable_type'=>'village']); //Tambang
            DB::table('regions')->insert(['id'=>3285, 'parent'=>3282, 'code'=>'6345', 'type'=>'districts', 'name'=>'Districts 6345, City 634, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3285, 'regionable_id'=>2699, 'regionable_type'=>'districts']); //Kauman
            DB::table('regionables')->insert(['region_id'=>3285, 'regionable_id'=>2700, 'regionable_type'=>'districts']); //Sukorejo
            DB::table('regionables')->insert(['region_id'=>3285, 'regionable_id'=>2701, 'regionable_type'=>'districts']); //Sampung
            DB::table('regionables')->insert(['region_id'=>3285, 'regionable_id'=>2702, 'regionable_type'=>'districts']); //Badegan
            DB::table('regionables')->insert(['region_id'=>3285, 'regionable_id'=>2703, 'regionable_type'=>'districts']); //Jambon
                DB::table('regions')->insert(['id'=>3286, 'parent'=>3285, 'code'=>'63456', 'type'=>'village', 'name'=>'Village 63456, Districts 6345, City 634, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30633, 'regionable_type'=>'village']); //Blembem
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30634, 'regionable_type'=>'village']); //Bringinan
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30635, 'regionable_type'=>'village']); //Bulu Lor
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30636, 'regionable_type'=>'village']); //Jambon
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30637, 'regionable_type'=>'village']); //Jonggol
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30638, 'regionable_type'=>'village']); //Karanglo Kidul
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30639, 'regionable_type'=>'village']); //Krebet
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30640, 'regionable_type'=>'village']); //Menang
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30641, 'regionable_type'=>'village']); //Poko
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30642, 'regionable_type'=>'village']); //Pulosari
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30643, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30644, 'regionable_type'=>'village']); //Sidoharjo
                DB::table('regionables')->insert(['region_id'=>3286, 'regionable_id'=>30645, 'regionable_type'=>'village']); //Srandil
            DB::table('regions')->insert(['id'=>3287, 'parent'=>3282, 'code'=>'6346', 'type'=>'districts', 'name'=>'Districts 6346, City 634, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3287, 'regionable_id'=>2704, 'regionable_type'=>'districts']); //Balong
            DB::table('regionables')->insert(['region_id'=>3287, 'regionable_id'=>2705, 'regionable_type'=>'districts']); //Bungkal
            DB::table('regionables')->insert(['region_id'=>3287, 'regionable_id'=>2706, 'regionable_type'=>'districts']); //Slahung
            DB::table('regionables')->insert(['region_id'=>3287, 'regionable_id'=>2707, 'regionable_type'=>'districts']); //Ngrayun
                DB::table('regions')->insert(['id'=>3288, 'parent'=>3287, 'code'=>'63464', 'type'=>'village', 'name'=>'Village 63464, Districts 6346, City 634, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30707, 'regionable_type'=>'village']); //Baosan Kidul
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30708, 'regionable_type'=>'village']); //Baosan Lor
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30709, 'regionable_type'=>'village']); //Binade
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30710, 'regionable_type'=>'village']); //Cepoko
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30711, 'regionable_type'=>'village']); //Gedangan
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30712, 'regionable_type'=>'village']); //Mrayan (merayan)
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30713, 'regionable_type'=>'village']); //Ngrayun (ngerayun)
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30714, 'regionable_type'=>'village']); //Selur
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30715, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30716, 'regionable_type'=>'village']); //Temon
                DB::table('regionables')->insert(['region_id'=>3288, 'regionable_id'=>30717, 'regionable_type'=>'village']); //Wonodadi
            DB::table('regions')->insert(['id'=>3289, 'parent'=>3282, 'code'=>'6347', 'type'=>'districts', 'name'=>'Districts 6347, City 634, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3289, 'regionable_id'=>2708, 'regionable_type'=>'districts']); //Siman
            DB::table('regionables')->insert(['region_id'=>3289, 'regionable_id'=>2709, 'regionable_type'=>'districts']); //Mlarak
            DB::table('regionables')->insert(['region_id'=>3289, 'regionable_id'=>2710, 'regionable_type'=>'districts']); //Jetis
            DB::table('regionables')->insert(['region_id'=>3289, 'regionable_id'=>2711, 'regionable_type'=>'districts']); //Sambit
            DB::table('regionables')->insert(['region_id'=>3289, 'regionable_id'=>2712, 'regionable_type'=>'districts']); //Sawoo
                DB::table('regions')->insert(['id'=>3290, 'parent'=>3289, 'code'=>'63475', 'type'=>'village', 'name'=>'Village 63475, Districts 6347, City 634, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30781, 'regionable_type'=>'village']); //Bondrang
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30782, 'regionable_type'=>'village']); //Grogol
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30783, 'regionable_type'=>'village']); //Ketro
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30784, 'regionable_type'=>'village']); //Kori
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30785, 'regionable_type'=>'village']); //Ngindeng
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30786, 'regionable_type'=>'village']); //Pangkal
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30787, 'regionable_type'=>'village']); //Prayungan
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30788, 'regionable_type'=>'village']); //Sawoo
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30789, 'regionable_type'=>'village']); //Sriti (serinti)
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30790, 'regionable_type'=>'village']); //Temon
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30791, 'regionable_type'=>'village']); //Tempuran
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30792, 'regionable_type'=>'village']); //Tugurejo
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30793, 'regionable_type'=>'village']); //Tumpakpelem
                DB::table('regionables')->insert(['region_id'=>3290, 'regionable_id'=>30794, 'regionable_type'=>'village']); //Tumpuk
            DB::table('regions')->insert(['id'=>3291, 'parent'=>3282, 'code'=>'6348', 'type'=>'districts', 'name'=>'Districts 6348, City 634, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3291, 'regionable_id'=>2713, 'regionable_type'=>'districts']); //Pulung
            DB::table('regionables')->insert(['region_id'=>3291, 'regionable_id'=>2714, 'regionable_type'=>'districts']); //Sooko
                DB::table('regions')->insert(['id'=>3292, 'parent'=>3291, 'code'=>'63482', 'type'=>'village', 'name'=>'Village 63482, Districts 6348, City 634, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3292, 'regionable_id'=>30813, 'regionable_type'=>'village']); //Bedoho
                DB::table('regionables')->insert(['region_id'=>3292, 'regionable_id'=>30814, 'regionable_type'=>'village']); //Jurug
                DB::table('regionables')->insert(['region_id'=>3292, 'regionable_id'=>30815, 'regionable_type'=>'village']); //Klepu
                DB::table('regionables')->insert(['region_id'=>3292, 'regionable_id'=>30816, 'regionable_type'=>'village']); //Ngadirojo (ngadirejo)
                DB::table('regionables')->insert(['region_id'=>3292, 'regionable_id'=>30817, 'regionable_type'=>'village']); //Sooko
                DB::table('regionables')->insert(['region_id'=>3292, 'regionable_id'=>30818, 'regionable_type'=>'village']); //Suru (seru)
            DB::table('regions')->insert(['id'=>3293, 'parent'=>3282, 'code'=>'6349', 'type'=>'districts', 'name'=>'Districts 6349, City 634, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3293, 'regionable_id'=>2715, 'regionable_type'=>'districts']); //Babadan
            DB::table('regionables')->insert(['region_id'=>3293, 'regionable_id'=>2716, 'regionable_type'=>'districts']); //Jenangan
            DB::table('regionables')->insert(['region_id'=>3293, 'regionable_id'=>2717, 'regionable_type'=>'districts']); //Ngebel
                DB::table('regions')->insert(['id'=>3294, 'parent'=>3293, 'code'=>'63493', 'type'=>'village', 'name'=>'Village 63493, Districts 6349, City 634, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3294, 'regionable_id'=>30851, 'regionable_type'=>'village']); //Gondowido
                DB::table('regionables')->insert(['region_id'=>3294, 'regionable_id'=>30852, 'regionable_type'=>'village']); //Ngebel
                DB::table('regionables')->insert(['region_id'=>3294, 'regionable_id'=>30853, 'regionable_type'=>'village']); //Ngrogung
                DB::table('regionables')->insert(['region_id'=>3294, 'regionable_id'=>30854, 'regionable_type'=>'village']); //Pupus
                DB::table('regionables')->insert(['region_id'=>3294, 'regionable_id'=>30855, 'regionable_type'=>'village']); //Sahang
                DB::table('regionables')->insert(['region_id'=>3294, 'regionable_id'=>30856, 'regionable_type'=>'village']); //Sempu
                DB::table('regionables')->insert(['region_id'=>3294, 'regionable_id'=>30857, 'regionable_type'=>'village']); //Talun
                DB::table('regionables')->insert(['region_id'=>3294, 'regionable_id'=>30858, 'regionable_type'=>'village']); //Wagir Lor
        DB::table('regions')->insert(['id'=>3295, 'parent'=>2996, 'code'=>'635', 'type'=>'city', 'name'=>'City 635, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3295, 'regionable_id'=>139, 'regionable_type'=>'city']); //Pacitan regencies
            DB::table('regions')->insert(['id'=>3296, 'parent'=>3295, 'code'=>'6351', 'type'=>'districts', 'name'=>'Districts 6351, City 635, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3296, 'regionable_id'=>2718, 'regionable_type'=>'districts']); //Pacitan
                DB::table('regions')->insert(['id'=>3297, 'parent'=>3296, 'code'=>'63511', 'type'=>'village', 'name'=>'Village 63511, Districts 6351, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3297, 'regionable_id'=>30859, 'regionable_type'=>'village']); //Baleharjo
                DB::table('regions')->insert(['id'=>3298, 'parent'=>3296, 'code'=>'63512', 'type'=>'village', 'name'=>'Village 63512, Districts 6351, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3298, 'regionable_id'=>30860, 'regionable_type'=>'village']); //Pacitan
                DB::table('regions')->insert(['id'=>3299, 'parent'=>3296, 'code'=>'63513', 'type'=>'village', 'name'=>'Village 63513, Districts 6351, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3299, 'regionable_id'=>30861, 'regionable_type'=>'village']); //Pucangsewu (pacungsewu)
                DB::table('regions')->insert(['id'=>3300, 'parent'=>3296, 'code'=>'63514', 'type'=>'village', 'name'=>'Village 63514, Districts 6351, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3300, 'regionable_id'=>30862, 'regionable_type'=>'village']); //Sidoharjo
                DB::table('regions')->insert(['id'=>3301, 'parent'=>3296, 'code'=>'63515', 'type'=>'village', 'name'=>'Village 63515, Districts 6351, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3301, 'regionable_id'=>30863, 'regionable_type'=>'village']); //Ploso
                DB::table('regions')->insert(['id'=>3302, 'parent'=>3296, 'code'=>'63516', 'type'=>'village', 'name'=>'Village 63516, Districts 6351, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3302, 'regionable_id'=>30864, 'regionable_type'=>'village']); //Arjowinangun
                DB::table('regions')->insert(['id'=>3303, 'parent'=>3296, 'code'=>'63517', 'type'=>'village', 'name'=>'Village 63517, Districts 6351, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3303, 'regionable_id'=>30865, 'regionable_type'=>'village']); //Menadi
                DB::table('regions')->insert(['id'=>3304, 'parent'=>3296, 'code'=>'63518', 'type'=>'village', 'name'=>'Village 63518, Districts 6351, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30866, 'regionable_type'=>'village']); //Bangunsari
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30867, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30868, 'regionable_type'=>'village']); //Bolosingo
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30869, 'regionable_type'=>'village']); //Kayen
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30870, 'regionable_type'=>'village']); //Kembang
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30871, 'regionable_type'=>'village']); //Mentoro
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30872, 'regionable_type'=>'village']); //Nanggungan
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30873, 'regionable_type'=>'village']); //Ponggok
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30874, 'regionable_type'=>'village']); //Purworejo
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30875, 'regionable_type'=>'village']); //Sambong
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30876, 'regionable_type'=>'village']); //Sedeng
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30877, 'regionable_type'=>'village']); //Semanten
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30878, 'regionable_type'=>'village']); //Sirnoboyo
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30879, 'regionable_type'=>'village']); //Sukoharjo
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30880, 'regionable_type'=>'village']); //Sumberharjo
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30881, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30882, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>3304, 'regionable_id'=>30883, 'regionable_type'=>'village']); //Widoro
            DB::table('regions')->insert(['id'=>3305, 'parent'=>3295, 'code'=>'6355', 'type'=>'districts', 'name'=>'Districts 6355, City 635, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3305, 'regionable_id'=>2719, 'regionable_type'=>'districts']); //Pringkuku
            DB::table('regionables')->insert(['region_id'=>3305, 'regionable_id'=>2720, 'regionable_type'=>'districts']); //Punung
            DB::table('regionables')->insert(['region_id'=>3305, 'regionable_id'=>2721, 'regionable_type'=>'districts']); //Donorojo
                DB::table('regions')->insert(['id'=>3306, 'parent'=>3305, 'code'=>'63554', 'type'=>'village', 'name'=>'Village 63554, Districts 6355, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30910, 'regionable_type'=>'village']); //Belah
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30911, 'regionable_type'=>'village']); //Cemeng
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30912, 'regionable_type'=>'village']); //Donorojo
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30913, 'regionable_type'=>'village']); //Gedompol
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30914, 'regionable_type'=>'village']); //Gendaran
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30915, 'regionable_type'=>'village']); //Kalak
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30916, 'regionable_type'=>'village']); //Klepu
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30917, 'regionable_type'=>'village']); //Sawahan
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30918, 'regionable_type'=>'village']); //Sekar
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30919, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30920, 'regionable_type'=>'village']); //Sukodono
                DB::table('regionables')->insert(['region_id'=>3306, 'regionable_id'=>30921, 'regionable_type'=>'village']); //Widoro
            DB::table('regions')->insert(['id'=>3307, 'parent'=>3295, 'code'=>'6356', 'type'=>'districts', 'name'=>'Districts 6356, City 635, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3307, 'regionable_id'=>2722, 'regionable_type'=>'districts']); //Kebon Agung
                DB::table('regions')->insert(['id'=>3308, 'parent'=>3307, 'code'=>'63561', 'type'=>'village', 'name'=>'Village 63561, Districts 6356, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30922, 'regionable_type'=>'village']); //Banjarjo
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30923, 'regionable_type'=>'village']); //Gawang
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30924, 'regionable_type'=>'village']); //Gembuk
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30925, 'regionable_type'=>'village']); //Kalipelus
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30926, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30927, 'regionable_type'=>'village']); //Karangnongko
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30928, 'regionable_type'=>'village']); //Katipugal
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30929, 'regionable_type'=>'village']); //Kebonagung
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30930, 'regionable_type'=>'village']); //Ketepung
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30931, 'regionable_type'=>'village']); //Ketro
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30932, 'regionable_type'=>'village']); //Klesem
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30933, 'regionable_type'=>'village']); //Mantren
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30934, 'regionable_type'=>'village']); //Plumbungan (pelumbungan)
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30935, 'regionable_type'=>'village']); //Punjung
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30936, 'regionable_type'=>'village']); //Purwoasri
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30937, 'regionable_type'=>'village']); //Sanggrahan
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30938, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30939, 'regionable_type'=>'village']); //Wonogondo
                DB::table('regionables')->insert(['region_id'=>3308, 'regionable_id'=>30940, 'regionable_type'=>'village']); //Worawari
            DB::table('regions')->insert(['id'=>3309, 'parent'=>3295, 'code'=>'6357', 'type'=>'districts', 'name'=>'Districts 6357, City 635, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3309, 'regionable_id'=>2723, 'regionable_type'=>'districts']); //Tulakan
            DB::table('regionables')->insert(['region_id'=>3309, 'regionable_id'=>2724, 'regionable_type'=>'districts']); //Ngadirojo
            DB::table('regionables')->insert(['region_id'=>3309, 'regionable_id'=>2725, 'regionable_type'=>'districts']); //Sudimoro
                DB::table('regions')->insert(['id'=>3310, 'parent'=>3309, 'code'=>'63573', 'type'=>'village', 'name'=>'Village 63573, Districts 6357, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30975, 'regionable_type'=>'village']); //Gunung Rejo
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30976, 'regionable_type'=>'village']); //Karang Mulyo
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30977, 'regionable_type'=>'village']); //Ketanggung
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30978, 'regionable_type'=>'village']); //Klepu (kelepu)
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30979, 'regionable_type'=>'village']); //Pager Kidul
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30980, 'regionable_type'=>'village']); //Pager Lor
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30981, 'regionable_type'=>'village']); //Sembowo
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30982, 'regionable_type'=>'village']); //Sudimoro
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30983, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3310, 'regionable_id'=>30984, 'regionable_type'=>'village']); //Sumberejo (sumber Rejo)
            DB::table('regions')->insert(['id'=>3311, 'parent'=>3295, 'code'=>'6358', 'type'=>'districts', 'name'=>'Districts 6358, City 635, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3311, 'regionable_id'=>2726, 'regionable_type'=>'districts']); //Arjosari
            DB::table('regionables')->insert(['region_id'=>3311, 'regionable_id'=>2727, 'regionable_type'=>'districts']); //Tegalombo
            DB::table('regionables')->insert(['region_id'=>3311, 'regionable_id'=>2728, 'regionable_type'=>'districts']); //Bandar
            DB::table('regionables')->insert(['region_id'=>3311, 'regionable_id'=>2729, 'regionable_type'=>'districts']); //Nawangan
                DB::table('regions')->insert(['id'=>3312, 'parent'=>3311, 'code'=>'63584', 'type'=>'village', 'name'=>'Village 63584, Districts 6358, City 635, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31021, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31022, 'regionable_type'=>'village']); //Jetislor
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31023, 'regionable_type'=>'village']); //Mujing
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31024, 'regionable_type'=>'village']); //Nawangan
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31025, 'regionable_type'=>'village']); //Ngromo
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31026, 'regionable_type'=>'village']); //Pakisbaru
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31027, 'regionable_type'=>'village']); //Penggung
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31028, 'regionable_type'=>'village']); //Sempu
                DB::table('regionables')->insert(['region_id'=>3312, 'regionable_id'=>31029, 'regionable_type'=>'village']); //Tokawi (tokawai)
        DB::table('regions')->insert(['id'=>3313, 'parent'=>2996, 'code'=>'641', 'type'=>'city', 'name'=>'City 641, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3313, 'regionable_id'=>140, 'regionable_type'=>'city']); //Kediri city
        DB::table('regionables')->insert(['region_id'=>3313, 'regionable_id'=>141, 'regionable_type'=>'city']); //Kediri regencies
            DB::table('regions')->insert(['id'=>3314, 'parent'=>3313, 'code'=>'6411', 'type'=>'districts', 'name'=>'Districts 6411, City 641, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3314, 'regionable_id'=>2730, 'regionable_type'=>'districts']); //Mojoroto
            DB::table('regionables')->insert(['region_id'=>3314, 'regionable_id'=>2731, 'regionable_type'=>'districts']); //Gurah
            DB::table('regionables')->insert(['region_id'=>3314, 'regionable_id'=>2759, 'regionable_type'=>'districts']); //Mojoroto
            DB::table('regionables')->insert(['region_id'=>3314, 'regionable_id'=>2760, 'regionable_type'=>'districts']); //Gurah
                DB::table('regions')->insert(['id'=>3315, 'parent'=>3314, 'code'=>'64113', 'type'=>'village', 'name'=>'Village 64113, Districts 6411, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3315, 'regionable_id'=>31034, 'regionable_type'=>'village']); //Gayam
                DB::table('regionables')->insert(['region_id'=>3315, 'regionable_id'=>31044, 'regionable_type'=>'village']); //Gayam
                DB::table('regionables')->insert(['region_id'=>3315, 'regionable_id'=>31424, 'regionable_type'=>'village']); //Gayam
                DB::table('regionables')->insert(['region_id'=>3315, 'regionable_id'=>31434, 'regionable_type'=>'village']); //Gayam
            DB::table('regions')->insert(['id'=>3316, 'parent'=>3313, 'code'=>'6412', 'type'=>'districts', 'name'=>'Districts 6412, City 641, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3316, 'regionable_id'=>2732, 'regionable_type'=>'districts']); //Kediri Kota
            DB::table('regionables')->insert(['region_id'=>3316, 'regionable_id'=>2761, 'regionable_type'=>'districts']); //Kediri Kota
                DB::table('regions')->insert(['id'=>3317, 'parent'=>3316, 'code'=>'64121', 'type'=>'village', 'name'=>'Village 64121, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3317, 'regionable_id'=>31065, 'regionable_type'=>'village']); //Semampir
                DB::table('regionables')->insert(['region_id'=>3317, 'regionable_id'=>31455, 'regionable_type'=>'village']); //Semampir
                DB::table('regions')->insert(['id'=>3318, 'parent'=>3316, 'code'=>'64122', 'type'=>'village', 'name'=>'Village 64122, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3318, 'regionable_id'=>31066, 'regionable_type'=>'village']); //Dandangan
                DB::table('regionables')->insert(['region_id'=>3318, 'regionable_id'=>31067, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regionables')->insert(['region_id'=>3318, 'regionable_id'=>31456, 'regionable_type'=>'village']); //Dandangan
                DB::table('regionables')->insert(['region_id'=>3318, 'regionable_id'=>31457, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regions')->insert(['id'=>3319, 'parent'=>3316, 'code'=>'64123', 'type'=>'village', 'name'=>'Village 64123, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3319, 'regionable_id'=>31068, 'regionable_type'=>'village']); //Pakelan
                DB::table('regionables')->insert(['region_id'=>3319, 'regionable_id'=>31069, 'regionable_type'=>'village']); //Pocanan
                DB::table('regionables')->insert(['region_id'=>3319, 'regionable_id'=>31458, 'regionable_type'=>'village']); //Pakelan
                DB::table('regionables')->insert(['region_id'=>3319, 'regionable_id'=>31459, 'regionable_type'=>'village']); //Pocanan
                DB::table('regions')->insert(['id'=>3320, 'parent'=>3316, 'code'=>'64124', 'type'=>'village', 'name'=>'Village 64124, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3320, 'regionable_id'=>31070, 'regionable_type'=>'village']); //Banjaran
                DB::table('regionables')->insert(['region_id'=>3320, 'regionable_id'=>31460, 'regionable_type'=>'village']); //Banjaran
                DB::table('regions')->insert(['id'=>3321, 'parent'=>3316, 'code'=>'64125', 'type'=>'village', 'name'=>'Village 64125, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3321, 'regionable_id'=>31071, 'regionable_type'=>'village']); //Jagalan
                DB::table('regionables')->insert(['region_id'=>3321, 'regionable_id'=>31072, 'regionable_type'=>'village']); //Kemasan
                DB::table('regionables')->insert(['region_id'=>3321, 'regionable_id'=>31461, 'regionable_type'=>'village']); //Jagalan
                DB::table('regionables')->insert(['region_id'=>3321, 'regionable_id'=>31462, 'regionable_type'=>'village']); //Kemasan
                DB::table('regions')->insert(['id'=>3322, 'parent'=>3316, 'code'=>'64126', 'type'=>'village', 'name'=>'Village 64126, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3322, 'regionable_id'=>31073, 'regionable_type'=>'village']); //Kaliombo
                DB::table('regionables')->insert(['region_id'=>3322, 'regionable_id'=>31074, 'regionable_type'=>'village']); //Kampung Dalem
                DB::table('regionables')->insert(['region_id'=>3322, 'regionable_id'=>31463, 'regionable_type'=>'village']); //Kaliombo
                DB::table('regionables')->insert(['region_id'=>3322, 'regionable_id'=>31464, 'regionable_type'=>'village']); //Kampung Dalem
                DB::table('regions')->insert(['id'=>3323, 'parent'=>3316, 'code'=>'64127', 'type'=>'village', 'name'=>'Village 64127, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3323, 'regionable_id'=>31075, 'regionable_type'=>'village']); //Ngronggo
                DB::table('regionables')->insert(['region_id'=>3323, 'regionable_id'=>31465, 'regionable_type'=>'village']); //Ngronggo
                DB::table('regions')->insert(['id'=>3324, 'parent'=>3316, 'code'=>'64128', 'type'=>'village', 'name'=>'Village 64128, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3324, 'regionable_id'=>31076, 'regionable_type'=>'village']); //Manisrenggo
                DB::table('regionables')->insert(['region_id'=>3324, 'regionable_id'=>31466, 'regionable_type'=>'village']); //Manisrenggo
                DB::table('regions')->insert(['id'=>3325, 'parent'=>3316, 'code'=>'64129', 'type'=>'village', 'name'=>'Village 64129, Districts 6412, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31077, 'regionable_type'=>'village']); //Balowerti
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31078, 'regionable_type'=>'village']); //Rejomulyo
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31079, 'regionable_type'=>'village']); //Ringin Anom
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31080, 'regionable_type'=>'village']); //Setono Gedong
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31081, 'regionable_type'=>'village']); //Setono Pande
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31467, 'regionable_type'=>'village']); //Balowerti
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31468, 'regionable_type'=>'village']); //Rejomulyo
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31469, 'regionable_type'=>'village']); //Ringin Anom
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31470, 'regionable_type'=>'village']); //Setono Gedong
                DB::table('regionables')->insert(['region_id'=>3325, 'regionable_id'=>31471, 'regionable_type'=>'village']); //Setono Pande
            DB::table('regions')->insert(['id'=>3326, 'parent'=>3313, 'code'=>'6413', 'type'=>'districts', 'name'=>'Districts 6413, City 641, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3326, 'regionable_id'=>2733, 'regionable_type'=>'districts']); //Pesantren
            DB::table('regionables')->insert(['region_id'=>3326, 'regionable_id'=>2734, 'regionable_type'=>'districts']); //Kandat
            DB::table('regionables')->insert(['region_id'=>3326, 'regionable_id'=>2762, 'regionable_type'=>'districts']); //Pesantren
            DB::table('regionables')->insert(['region_id'=>3326, 'regionable_id'=>2763, 'regionable_type'=>'districts']); //Kandat
                DB::table('regions')->insert(['id'=>3327, 'parent'=>3326, 'code'=>'64137', 'type'=>'village', 'name'=>'Village 64137, Districts 6413, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3327, 'regionable_id'=>31094, 'regionable_type'=>'village']); //Ngletih
                DB::table('regionables')->insert(['region_id'=>3327, 'regionable_id'=>31097, 'regionable_type'=>'village']); //Ngletih
                DB::table('regionables')->insert(['region_id'=>3327, 'regionable_id'=>31484, 'regionable_type'=>'village']); //Ngletih
                DB::table('regionables')->insert(['region_id'=>3327, 'regionable_id'=>31487, 'regionable_type'=>'village']); //Ngletih
            DB::table('regions')->insert(['id'=>3328, 'parent'=>3313, 'code'=>'6415', 'type'=>'districts', 'name'=>'Districts 6415, City 641, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2735, 'regionable_type'=>'districts']); //Grogol
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2736, 'regionable_type'=>'districts']); //Tarokan
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2737, 'regionable_type'=>'districts']); //Papar
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2738, 'regionable_type'=>'districts']); //Purwoasri
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2739, 'regionable_type'=>'districts']); //Plemahan
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2740, 'regionable_type'=>'districts']); //Kunjang
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2741, 'regionable_type'=>'districts']); //Ngancar
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2742, 'regionable_type'=>'districts']); //Banyakan
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2764, 'regionable_type'=>'districts']); //Grogol
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2765, 'regionable_type'=>'districts']); //Tarokan
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2766, 'regionable_type'=>'districts']); //Papar
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2767, 'regionable_type'=>'districts']); //Purwoasri
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2768, 'regionable_type'=>'districts']); //Plemahan
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2769, 'regionable_type'=>'districts']); //Kunjang
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2770, 'regionable_type'=>'districts']); //Ngancar
            DB::table('regionables')->insert(['region_id'=>3328, 'regionable_id'=>2771, 'regionable_type'=>'districts']); //Banyakan
                DB::table('regions')->insert(['id'=>3329, 'parent'=>3328, 'code'=>'64157', 'type'=>'village', 'name'=>'Village 64157, Districts 6415, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31207, 'regionable_type'=>'village']); //Banyakan
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31208, 'regionable_type'=>'village']); //Jabon
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31209, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31210, 'regionable_type'=>'village']); //Manyaran
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31211, 'regionable_type'=>'village']); //Maron
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31212, 'regionable_type'=>'village']); //Ngablak
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31213, 'regionable_type'=>'village']); //Parang
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31214, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31215, 'regionable_type'=>'village']); //Tiron
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31597, 'regionable_type'=>'village']); //Banyakan
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31598, 'regionable_type'=>'village']); //Jabon
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31599, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31600, 'regionable_type'=>'village']); //Manyaran
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31601, 'regionable_type'=>'village']); //Maron
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31602, 'regionable_type'=>'village']); //Ngablak
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31603, 'regionable_type'=>'village']); //Parang
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31604, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>3329, 'regionable_id'=>31605, 'regionable_type'=>'village']); //Tiron
            DB::table('regions')->insert(['id'=>3330, 'parent'=>3313, 'code'=>'6416', 'type'=>'districts', 'name'=>'Districts 6416, City 641, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3330, 'regionable_id'=>2743, 'regionable_type'=>'districts']); //Semen
            DB::table('regionables')->insert(['region_id'=>3330, 'regionable_id'=>2744, 'regionable_type'=>'districts']); //Mojo
            DB::table('regionables')->insert(['region_id'=>3330, 'regionable_id'=>2772, 'regionable_type'=>'districts']); //Semen
            DB::table('regionables')->insert(['region_id'=>3330, 'regionable_id'=>2773, 'regionable_type'=>'districts']); //Mojo
                DB::table('regions')->insert(['id'=>3331, 'parent'=>3330, 'code'=>'64162', 'type'=>'village', 'name'=>'Village 64162, Districts 6416, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31228, 'regionable_type'=>'village']); //Blimbing
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31229, 'regionable_type'=>'village']); //Jugo
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31230, 'regionable_type'=>'village']); //Kedawung
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31231, 'regionable_type'=>'village']); //Keniten
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31232, 'regionable_type'=>'village']); //Kranding
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31233, 'regionable_type'=>'village']); //Kraton
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31234, 'regionable_type'=>'village']); //Maesan
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31235, 'regionable_type'=>'village']); //Mlati
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31236, 'regionable_type'=>'village']); //Mojo
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31237, 'regionable_type'=>'village']); //Mondo
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31238, 'regionable_type'=>'village']); //Ngadi
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31239, 'regionable_type'=>'village']); //Ngetrep
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31240, 'regionable_type'=>'village']); //Pamongan
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31241, 'regionable_type'=>'village']); //Petok
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31242, 'regionable_type'=>'village']); //Petungroto
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31243, 'regionable_type'=>'village']); //Ploso
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31244, 'regionable_type'=>'village']); //Ponggok
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31245, 'regionable_type'=>'village']); //Sukoanyar
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31246, 'regionable_type'=>'village']); //Surat
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31247, 'regionable_type'=>'village']); //Tambibendo
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31618, 'regionable_type'=>'village']); //Blimbing
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31619, 'regionable_type'=>'village']); //Jugo
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31620, 'regionable_type'=>'village']); //Kedawung
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31621, 'regionable_type'=>'village']); //Keniten
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31622, 'regionable_type'=>'village']); //Kranding
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31623, 'regionable_type'=>'village']); //Kraton
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31624, 'regionable_type'=>'village']); //Maesan
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31625, 'regionable_type'=>'village']); //Mlati
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31626, 'regionable_type'=>'village']); //Mojo
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31627, 'regionable_type'=>'village']); //Mondo
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31628, 'regionable_type'=>'village']); //Ngadi
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31629, 'regionable_type'=>'village']); //Ngetrep
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31630, 'regionable_type'=>'village']); //Pamongan
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31631, 'regionable_type'=>'village']); //Petok
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31632, 'regionable_type'=>'village']); //Petungroto
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31633, 'regionable_type'=>'village']); //Ploso
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31634, 'regionable_type'=>'village']); //Ponggok
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31635, 'regionable_type'=>'village']); //Sukoanyar
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31636, 'regionable_type'=>'village']); //Surat
                DB::table('regionables')->insert(['region_id'=>3331, 'regionable_id'=>31637, 'regionable_type'=>'village']); //Tambibendo
            DB::table('regions')->insert(['id'=>3332, 'parent'=>3313, 'code'=>'6417', 'type'=>'districts', 'name'=>'Districts 6417, City 641, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2734, 'regionable_type'=>'districts']); //Kandat
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2745, 'regionable_type'=>'districts']); //Ngadiluwih
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2746, 'regionable_type'=>'districts']); //Kras
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2747, 'regionable_type'=>'districts']); //Wates
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2748, 'regionable_type'=>'districts']); //Plosoklaten
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2749, 'regionable_type'=>'districts']); //Ringinrejo
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2763, 'regionable_type'=>'districts']); //Kandat
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2774, 'regionable_type'=>'districts']); //Ngadiluwih
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2775, 'regionable_type'=>'districts']); //Kras
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2776, 'regionable_type'=>'districts']); //Wates
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2777, 'regionable_type'=>'districts']); //Plosoklaten
            DB::table('regionables')->insert(['region_id'=>3332, 'regionable_id'=>2778, 'regionable_type'=>'districts']); //Ringinrejo
                DB::table('regions')->insert(['id'=>3333, 'parent'=>3332, 'code'=>'64176', 'type'=>'village', 'name'=>'Village 64176, Districts 6417, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31313, 'regionable_type'=>'village']); //Batuaji
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31314, 'regionable_type'=>'village']); //Dawung
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31315, 'regionable_type'=>'village']); //Deyeng
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31316, 'regionable_type'=>'village']); //Jemekan
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31317, 'regionable_type'=>'village']); //Nambaan
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31318, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31319, 'regionable_type'=>'village']); //Ringinrejo
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31320, 'regionable_type'=>'village']); //Sambi
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31321, 'regionable_type'=>'village']); //Selodono
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31322, 'regionable_type'=>'village']); //Srikaton
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31323, 'regionable_type'=>'village']); //Susuhbango
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31703, 'regionable_type'=>'village']); //Batuaji
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31704, 'regionable_type'=>'village']); //Dawung
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31705, 'regionable_type'=>'village']); //Deyeng
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31706, 'regionable_type'=>'village']); //Jemekan
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31707, 'regionable_type'=>'village']); //Nambaan
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31708, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31709, 'regionable_type'=>'village']); //Ringinrejo
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31710, 'regionable_type'=>'village']); //Sambi
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31711, 'regionable_type'=>'village']); //Selodono
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31712, 'regionable_type'=>'village']); //Srikaton
                DB::table('regionables')->insert(['region_id'=>3333, 'regionable_id'=>31713, 'regionable_type'=>'village']); //Susuhbango
            DB::table('regions')->insert(['id'=>3334, 'parent'=>3313, 'code'=>'6418', 'type'=>'districts', 'name'=>'Districts 6418, City 641, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2731, 'regionable_type'=>'districts']); //Gurah
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2750, 'regionable_type'=>'districts']); //Ngasem
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2751, 'regionable_type'=>'districts']); //Gampengrejo
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2752, 'regionable_type'=>'districts']); //Kayen Kidul
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2753, 'regionable_type'=>'districts']); //Pagu
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2760, 'regionable_type'=>'districts']); //Gurah
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2779, 'regionable_type'=>'districts']); //Ngasem
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2780, 'regionable_type'=>'districts']); //Gampengrejo
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2781, 'regionable_type'=>'districts']); //Kayen Kidul
            DB::table('regionables')->insert(['region_id'=>3334, 'regionable_id'=>2782, 'regionable_type'=>'districts']); //Pagu
                DB::table('regions')->insert(['id'=>3335, 'parent'=>3334, 'code'=>'64183', 'type'=>'village', 'name'=>'Village 64183, Districts 6418, City 641, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31347, 'regionable_type'=>'village']); //Bangsongan
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31348, 'regionable_type'=>'village']); //Baye
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31349, 'regionable_type'=>'village']); //Jambu
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31350, 'regionable_type'=>'village']); //Kayen Kidul
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31351, 'regionable_type'=>'village']); //Mukuh
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31352, 'regionable_type'=>'village']); //Nanggungan
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31353, 'regionable_type'=>'village']); //Padangan
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31354, 'regionable_type'=>'village']); //Sambirobyong
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31355, 'regionable_type'=>'village']); //Sekaran
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31356, 'regionable_type'=>'village']); //Semambung
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31357, 'regionable_type'=>'village']); //Senden
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31358, 'regionable_type'=>'village']); //Sukoharjo
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31359, 'regionable_type'=>'village']); //Bendo
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31360, 'regionable_type'=>'village']); //Bulupasar
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31361, 'regionable_type'=>'village']); //Jagung
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31362, 'regionable_type'=>'village']); //Kambingan
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31363, 'regionable_type'=>'village']); //Menang
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31364, 'regionable_type'=>'village']); //Pagu
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31365, 'regionable_type'=>'village']); //Semanding
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31366, 'regionable_type'=>'village']); //Semen
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31367, 'regionable_type'=>'village']); //Sitimert0
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31368, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31369, 'regionable_type'=>'village']); //Tengger Kidul
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31370, 'regionable_type'=>'village']); //Wates
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31371, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31737, 'regionable_type'=>'village']); //Bangsongan
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31738, 'regionable_type'=>'village']); //Baye
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31739, 'regionable_type'=>'village']); //Jambu
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31740, 'regionable_type'=>'village']); //Kayen Kidul
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31741, 'regionable_type'=>'village']); //Mukuh
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31742, 'regionable_type'=>'village']); //Nanggungan
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31743, 'regionable_type'=>'village']); //Padangan
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31744, 'regionable_type'=>'village']); //Sambirobyong
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31745, 'regionable_type'=>'village']); //Sekaran
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31746, 'regionable_type'=>'village']); //Semambung
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31747, 'regionable_type'=>'village']); //Senden
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31748, 'regionable_type'=>'village']); //Sukoharjo
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31749, 'regionable_type'=>'village']); //Bendo
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31750, 'regionable_type'=>'village']); //Bulupasar
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31751, 'regionable_type'=>'village']); //Jagung
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31752, 'regionable_type'=>'village']); //Kambingan
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31753, 'regionable_type'=>'village']); //Menang
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31754, 'regionable_type'=>'village']); //Pagu
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31755, 'regionable_type'=>'village']); //Semanding
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31756, 'regionable_type'=>'village']); //Semen
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31757, 'regionable_type'=>'village']); //Sitimert0
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31758, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31759, 'regionable_type'=>'village']); //Tengger Kidul
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31760, 'regionable_type'=>'village']); //Wates
                DB::table('regionables')->insert(['region_id'=>3335, 'regionable_id'=>31761, 'regionable_type'=>'village']); //Wonosari
        DB::table('regions')->insert(['id'=>3336, 'parent'=>2996, 'code'=>'642', 'type'=>'city', 'name'=>'City 642, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3336, 'regionable_id'=>140, 'regionable_type'=>'city']); //Kediri city
        DB::table('regionables')->insert(['region_id'=>3336, 'regionable_id'=>141, 'regionable_type'=>'city']); //Kediri regencies
            DB::table('regions')->insert(['id'=>3337, 'parent'=>3336, 'code'=>'6421', 'type'=>'districts', 'name'=>'Districts 6421, City 642, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3337, 'regionable_id'=>2754, 'regionable_type'=>'districts']); //Pare
            DB::table('regionables')->insert(['region_id'=>3337, 'regionable_id'=>2755, 'regionable_type'=>'districts']); //Badas
            DB::table('regionables')->insert(['region_id'=>3337, 'regionable_id'=>2783, 'regionable_type'=>'districts']); //Pare
            DB::table('regionables')->insert(['region_id'=>3337, 'regionable_id'=>2784, 'regionable_type'=>'districts']); //Badas
                DB::table('regions')->insert(['id'=>3338, 'parent'=>3337, 'code'=>'64216', 'type'=>'village', 'name'=>'Village 64216, Districts 6421, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3338, 'regionable_id'=>31382, 'regionable_type'=>'village']); //Lamong
                DB::table('regionables')->insert(['region_id'=>3338, 'regionable_id'=>31772, 'regionable_type'=>'village']); //Lamong
                DB::table('regions')->insert(['id'=>3339, 'parent'=>3337, 'code'=>'64217', 'type'=>'village', 'name'=>'Village 64217, Districts 6421, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3339, 'regionable_id'=>31383, 'regionable_type'=>'village']); //Canggu
                DB::table('regionables')->insert(['region_id'=>3339, 'regionable_id'=>31773, 'regionable_type'=>'village']); //Canggu
                DB::table('regions')->insert(['id'=>3340, 'parent'=>3337, 'code'=>'64218', 'type'=>'village', 'name'=>'Village 64218, Districts 6421, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3340, 'regionable_id'=>31384, 'regionable_type'=>'village']); //Krecek
                DB::table('regionables')->insert(['region_id'=>3340, 'regionable_id'=>31774, 'regionable_type'=>'village']); //Krecek
                DB::table('regions')->insert(['id'=>3341, 'parent'=>3337, 'code'=>'64219', 'type'=>'village', 'name'=>'Village 64219, Districts 6421, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3341, 'regionable_id'=>31385, 'regionable_type'=>'village']); //Blaru
                DB::table('regionables')->insert(['region_id'=>3341, 'regionable_id'=>31775, 'regionable_type'=>'village']); //Blaru
            DB::table('regions')->insert(['id'=>3342, 'parent'=>3336, 'code'=>'6422', 'type'=>'districts', 'name'=>'Districts 6422, City 642, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3342, 'regionable_id'=>2754, 'regionable_type'=>'districts']); //Pare
            DB::table('regionables')->insert(['region_id'=>3342, 'regionable_id'=>2755, 'regionable_type'=>'districts']); //Badas
            DB::table('regionables')->insert(['region_id'=>3342, 'regionable_id'=>2783, 'regionable_type'=>'districts']); //Pare
            DB::table('regionables')->insert(['region_id'=>3342, 'regionable_id'=>2784, 'regionable_type'=>'districts']); //Badas
                DB::table('regions')->insert(['id'=>3343, 'parent'=>3342, 'code'=>'64221', 'type'=>'village', 'name'=>'Village 64221, Districts 6422, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3343, 'regionable_id'=>31386, 'regionable_type'=>'village']); //Badas
                DB::table('regionables')->insert(['region_id'=>3343, 'regionable_id'=>31776, 'regionable_type'=>'village']); //Badas
                DB::table('regions')->insert(['id'=>3344, 'parent'=>3342, 'code'=>'64222', 'type'=>'village', 'name'=>'Village 64222, Districts 6422, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3344, 'regionable_id'=>31387, 'regionable_type'=>'village']); //Tunglur
                DB::table('regionables')->insert(['region_id'=>3344, 'regionable_id'=>31777, 'regionable_type'=>'village']); //Tunglur
                DB::table('regions')->insert(['id'=>3345, 'parent'=>3342, 'code'=>'64223', 'type'=>'village', 'name'=>'Village 64223, Districts 6422, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3345, 'regionable_id'=>31388, 'regionable_type'=>'village']); //Sekoto
                DB::table('regionables')->insert(['region_id'=>3345, 'regionable_id'=>31778, 'regionable_type'=>'village']); //Sekoto
                DB::table('regions')->insert(['id'=>3346, 'parent'=>3342, 'code'=>'64224', 'type'=>'village', 'name'=>'Village 64224, Districts 6422, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3346, 'regionable_id'=>31389, 'regionable_type'=>'village']); //Bringin
                DB::table('regionables')->insert(['region_id'=>3346, 'regionable_id'=>31779, 'regionable_type'=>'village']); //Bringin
            DB::table('regions')->insert(['id'=>3347, 'parent'=>3336, 'code'=>'6429', 'type'=>'districts', 'name'=>'Districts 6429, City 642, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3347, 'regionable_id'=>2741, 'regionable_type'=>'districts']); //Ngancar
            DB::table('regionables')->insert(['region_id'=>3347, 'regionable_id'=>2756, 'regionable_type'=>'districts']); //Puncu
            DB::table('regionables')->insert(['region_id'=>3347, 'regionable_id'=>2757, 'regionable_type'=>'districts']); //Kepung
            DB::table('regionables')->insert(['region_id'=>3347, 'regionable_id'=>2758, 'regionable_type'=>'districts']); //Kandangan
            DB::table('regionables')->insert(['region_id'=>3347, 'regionable_id'=>2770, 'regionable_type'=>'districts']); //Ngancar
            DB::table('regionables')->insert(['region_id'=>3347, 'regionable_id'=>2785, 'regionable_type'=>'districts']); //Puncu
            DB::table('regionables')->insert(['region_id'=>3347, 'regionable_id'=>2786, 'regionable_type'=>'districts']); //Kepung
            DB::table('regionables')->insert(['region_id'=>3347, 'regionable_id'=>2787, 'regionable_type'=>'districts']); //Kandangan
                DB::table('regions')->insert(['id'=>3348, 'parent'=>3347, 'code'=>'64294', 'type'=>'village', 'name'=>'Village 64294, Districts 6429, City 642, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31408, 'regionable_type'=>'village']); //Banaran
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31409, 'regionable_type'=>'village']); //Bukur
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31410, 'regionable_type'=>'village']); //Jerukgulung
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31411, 'regionable_type'=>'village']); //Jerukwangi
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31412, 'regionable_type'=>'village']); //Jlumbang
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31413, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31414, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31415, 'regionable_type'=>'village']); //Kasreman
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31416, 'regionable_type'=>'village']); //Kemiri
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31417, 'regionable_type'=>'village']); //Klampisan
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31418, 'regionable_type'=>'village']); //Medowo
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31419, 'regionable_type'=>'village']); //Mlancu
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31798, 'regionable_type'=>'village']); //Banaran
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31799, 'regionable_type'=>'village']); //Bukur
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31800, 'regionable_type'=>'village']); //Jerukgulung
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31801, 'regionable_type'=>'village']); //Jerukwangi
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31802, 'regionable_type'=>'village']); //Jlumbang
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31803, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31804, 'regionable_type'=>'village']); //Karangtengah
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31805, 'regionable_type'=>'village']); //Kasreman
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31806, 'regionable_type'=>'village']); //Kemiri
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31807, 'regionable_type'=>'village']); //Klampisan
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31808, 'regionable_type'=>'village']); //Medowo
                DB::table('regionables')->insert(['region_id'=>3348, 'regionable_id'=>31809, 'regionable_type'=>'village']); //Mlancu
        DB::table('regions')->insert(['id'=>3349, 'parent'=>2996, 'code'=>'643', 'type'=>'city', 'name'=>'City 643, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3349, 'regionable_id'=>142, 'regionable_type'=>'city']); //Nganjuk regencies
            DB::table('regions')->insert(['id'=>3350, 'parent'=>3349, 'code'=>'6431', 'type'=>'districts', 'name'=>'Districts 6431, City 643, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3350, 'regionable_id'=>2788, 'regionable_type'=>'districts']); //Kertosono
                DB::table('regions')->insert(['id'=>3351, 'parent'=>3350, 'code'=>'64311', 'type'=>'village', 'name'=>'Village 64311, Districts 6431, City 643, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3351, 'regionable_id'=>31810, 'regionable_type'=>'village']); //Banaran
                DB::table('regions')->insert(['id'=>3352, 'parent'=>3350, 'code'=>'64312', 'type'=>'village', 'name'=>'Village 64312, Districts 6431, City 643, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3352, 'regionable_id'=>31811, 'regionable_type'=>'village']); //Kudu
                DB::table('regions')->insert(['id'=>3353, 'parent'=>3350, 'code'=>'64313', 'type'=>'village', 'name'=>'Village 64313, Districts 6431, City 643, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3353, 'regionable_id'=>31812, 'regionable_type'=>'village']); //Kutorejo
                DB::table('regions')->insert(['id'=>3354, 'parent'=>3350, 'code'=>'64314', 'type'=>'village', 'name'=>'Village 64314, Districts 6431, City 643, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3354, 'regionable_id'=>31813, 'regionable_type'=>'village']); //Pelem
                DB::table('regions')->insert(['id'=>3355, 'parent'=>3350, 'code'=>'64315', 'type'=>'village', 'name'=>'Village 64315, Districts 6431, City 643, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31814, 'regionable_type'=>'village']); //Bangsri
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31815, 'regionable_type'=>'village']); //Drenges
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31816, 'regionable_type'=>'village']); //Juwono
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31817, 'regionable_type'=>'village']); //Kalianyar
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31818, 'regionable_type'=>'village']); //Kepuh
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31819, 'regionable_type'=>'village']); //Lambang Kuning
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31820, 'regionable_type'=>'village']); //Nglawak
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31821, 'regionable_type'=>'village']); //Pandan Toyo
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31822, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>3355, 'regionable_id'=>31823, 'regionable_type'=>'village']); //Tembarak
            DB::table('regions')->insert(['id'=>3356, 'parent'=>3349, 'code'=>'6439', 'type'=>'districts', 'name'=>'Districts 6439, City 643, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3356, 'regionable_id'=>2789, 'regionable_type'=>'districts']); //Patianrowo
            DB::table('regionables')->insert(['region_id'=>3356, 'regionable_id'=>2790, 'regionable_type'=>'districts']); //Jatikalen
            DB::table('regionables')->insert(['region_id'=>3356, 'regionable_id'=>2791, 'regionable_type'=>'districts']); //Lengkong
            DB::table('regionables')->insert(['region_id'=>3356, 'regionable_id'=>2792, 'regionable_type'=>'districts']); //Baron
            DB::table('regionables')->insert(['region_id'=>3356, 'regionable_id'=>2793, 'regionable_type'=>'districts']); //Ngronggot
                DB::table('regions')->insert(['id'=>3357, 'parent'=>3356, 'code'=>'64395', 'type'=>'village', 'name'=>'Village 64395, Districts 6439, City 643, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31873, 'regionable_type'=>'village']); //Banjar Sari
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31874, 'regionable_type'=>'village']); //Betet
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31875, 'regionable_type'=>'village']); //Cengkok
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31876, 'regionable_type'=>'village']); //Dadapan
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31877, 'regionable_type'=>'village']); //Juwet
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31878, 'regionable_type'=>'village']); //Kali Anyar
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31879, 'regionable_type'=>'village']); //Kaloran
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31880, 'regionable_type'=>'village']); //Kelutan
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31881, 'regionable_type'=>'village']); //Klurahan
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31882, 'regionable_type'=>'village']); //Mojokendil
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31883, 'regionable_type'=>'village']); //Ngronggot
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31884, 'regionable_type'=>'village']); //Tanjung Kalang
                DB::table('regionables')->insert(['region_id'=>3357, 'regionable_id'=>31885, 'regionable_type'=>'village']); //Trayang
        DB::table('regions')->insert(['id'=>3358, 'parent'=>2996, 'code'=>'644', 'type'=>'city', 'name'=>'City 644, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3358, 'regionable_id'=>142, 'regionable_type'=>'city']); //Nganjuk regencies
            DB::table('regions')->insert(['id'=>3359, 'parent'=>3358, 'code'=>'6441', 'type'=>'districts', 'name'=>'Districts 6441, City 644, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3359, 'regionable_id'=>2794, 'regionable_type'=>'districts']); //Nganjuk
                DB::table('regions')->insert(['id'=>3360, 'parent'=>3359, 'code'=>'64411', 'type'=>'village', 'name'=>'Village 64411, Districts 6441, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3360, 'regionable_id'=>31886, 'regionable_type'=>'village']); //Kauman
                DB::table('regions')->insert(['id'=>3361, 'parent'=>3359, 'code'=>'64413', 'type'=>'village', 'name'=>'Village 64413, Districts 6441, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3361, 'regionable_id'=>31887, 'regionable_type'=>'village']); //Begadung
                DB::table('regions')->insert(['id'=>3362, 'parent'=>3359, 'code'=>'64415', 'type'=>'village', 'name'=>'Village 64415, Districts 6441, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3362, 'regionable_id'=>31888, 'regionable_type'=>'village']); //Bogo
                DB::table('regionables')->insert(['region_id'=>3362, 'regionable_id'=>31889, 'regionable_type'=>'village']); //Cangkringan
                DB::table('regions')->insert(['id'=>3363, 'parent'=>3359, 'code'=>'64416', 'type'=>'village', 'name'=>'Village 64416, Districts 6441, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3363, 'regionable_id'=>31890, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>3363, 'regionable_id'=>31891, 'regionable_type'=>'village']); //Kartoharjo
                DB::table('regions')->insert(['id'=>3364, 'parent'=>3359, 'code'=>'64417', 'type'=>'village', 'name'=>'Village 64417, Districts 6441, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3364, 'regionable_id'=>31892, 'regionable_type'=>'village']); //Ploso
                DB::table('regions')->insert(['id'=>3365, 'parent'=>3359, 'code'=>'64418', 'type'=>'village', 'name'=>'Village 64418, Districts 6441, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3365, 'regionable_id'=>31893, 'regionable_type'=>'village']); //Payaman
                DB::table('regions')->insert(['id'=>3366, 'parent'=>3359, 'code'=>'64419', 'type'=>'village', 'name'=>'Village 64419, Districts 6441, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3366, 'regionable_id'=>31894, 'regionable_type'=>'village']); //Balong Pacul
                DB::table('regionables')->insert(['region_id'=>3366, 'regionable_id'=>31895, 'regionable_type'=>'village']); //Ganung Kidul
                DB::table('regionables')->insert(['region_id'=>3366, 'regionable_id'=>31896, 'regionable_type'=>'village']); //Kedung Dowo
                DB::table('regionables')->insert(['region_id'=>3366, 'regionable_id'=>31897, 'regionable_type'=>'village']); //Kramat
                DB::table('regionables')->insert(['region_id'=>3366, 'regionable_id'=>31898, 'regionable_type'=>'village']); //Mangun Dikaran
                DB::table('regionables')->insert(['region_id'=>3366, 'regionable_id'=>31899, 'regionable_type'=>'village']); //Ringin Anom
                DB::table('regionables')->insert(['region_id'=>3366, 'regionable_id'=>31900, 'regionable_type'=>'village']); //Werungotok
            DB::table('regions')->insert(['id'=>3367, 'parent'=>3358, 'code'=>'6445', 'type'=>'districts', 'name'=>'Districts 6445, City 644, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3367, 'regionable_id'=>2795, 'regionable_type'=>'districts']); //Gondang
            DB::table('regionables')->insert(['region_id'=>3367, 'regionable_id'=>2796, 'regionable_type'=>'districts']); //Pace
            DB::table('regionables')->insert(['region_id'=>3367, 'regionable_id'=>2797, 'regionable_type'=>'districts']); //Ngluyu
            DB::table('regionables')->insert(['region_id'=>3367, 'regionable_id'=>2798, 'regionable_type'=>'districts']); //Rejoso
                DB::table('regions')->insert(['id'=>3368, 'parent'=>3367, 'code'=>'64453', 'type'=>'village', 'name'=>'Village 64453, Districts 6445, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31942, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31943, 'regionable_type'=>'village']); //Benda Asri
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31944, 'regionable_type'=>'village']); //Gempol
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31945, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31946, 'regionable_type'=>'village']); //Jintel
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31947, 'regionable_type'=>'village']); //Kedung Padang
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31948, 'regionable_type'=>'village']); //Klagen
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31949, 'regionable_type'=>'village']); //Mlorah
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31950, 'regionable_type'=>'village']); //Mojorembun
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31951, 'regionable_type'=>'village']); //Mungkung
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31952, 'regionable_type'=>'village']); //Musir Kidul
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31953, 'regionable_type'=>'village']); //Musir Lor
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31954, 'regionable_type'=>'village']); //Ngadiboyo
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31955, 'regionable_type'=>'village']); //Ngangkatan
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31956, 'regionable_type'=>'village']); //Puh Kerep
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31957, 'regionable_type'=>'village']); //Rejoso
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31958, 'regionable_type'=>'village']); //Sambi Kerep
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31959, 'regionable_type'=>'village']); //Setren
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31960, 'regionable_type'=>'village']); //Sidokare
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31961, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31962, 'regionable_type'=>'village']); //Talang
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31963, 'regionable_type'=>'village']); //Talun
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31964, 'regionable_type'=>'village']); //Tritik
                DB::table('regionables')->insert(['region_id'=>3368, 'regionable_id'=>31965, 'regionable_type'=>'village']); //Wengkal
            DB::table('regions')->insert(['id'=>3369, 'parent'=>3358, 'code'=>'6446', 'type'=>'districts', 'name'=>'Districts 6446, City 644, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3369, 'regionable_id'=>2799, 'regionable_type'=>'districts']); //Bagor
            DB::table('regionables')->insert(['region_id'=>3369, 'regionable_id'=>2800, 'regionable_type'=>'districts']); //Wilangan
                DB::table('regions')->insert(['id'=>3370, 'parent'=>3369, 'code'=>'64462', 'type'=>'village', 'name'=>'Village 64462, Districts 6446, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3370, 'regionable_id'=>31987, 'regionable_type'=>'village']); //Mancon
                DB::table('regionables')->insert(['region_id'=>3370, 'regionable_id'=>31988, 'regionable_type'=>'village']); //Ngadipiro
                DB::table('regionables')->insert(['region_id'=>3370, 'regionable_id'=>31989, 'regionable_type'=>'village']); //Ngudikan
                DB::table('regionables')->insert(['region_id'=>3370, 'regionable_id'=>31990, 'regionable_type'=>'village']); //Sudimoroharjo
                DB::table('regionables')->insert(['region_id'=>3370, 'regionable_id'=>31991, 'regionable_type'=>'village']); //Sukoharjo
                DB::table('regionables')->insert(['region_id'=>3370, 'regionable_id'=>31992, 'regionable_type'=>'village']); //Wilangan
            DB::table('regions')->insert(['id'=>3371, 'parent'=>3358, 'code'=>'6447', 'type'=>'districts', 'name'=>'Districts 6447, City 644, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3371, 'regionable_id'=>2796, 'regionable_type'=>'districts']); //Pace
            DB::table('regionables')->insert(['region_id'=>3371, 'regionable_id'=>2801, 'regionable_type'=>'districts']); //Loceret
            DB::table('regionables')->insert(['region_id'=>3371, 'regionable_id'=>2802, 'regionable_type'=>'districts']); //Berbek
            DB::table('regionables')->insert(['region_id'=>3371, 'regionable_id'=>2803, 'regionable_type'=>'districts']); //Ngetos
            DB::table('regionables')->insert(['region_id'=>3371, 'regionable_id'=>2804, 'regionable_type'=>'districts']); //Sawahan
                DB::table('regions')->insert(['id'=>3372, 'parent'=>3371, 'code'=>'64475', 'type'=>'village', 'name'=>'Village 64475, Districts 6447, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32043, 'regionable_type'=>'village']); //Bareng
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32044, 'regionable_type'=>'village']); //Bendolo
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32045, 'regionable_type'=>'village']); //Duren
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32046, 'regionable_type'=>'village']); //Kebon Agung
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32047, 'regionable_type'=>'village']); //Margopatut
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32048, 'regionable_type'=>'village']); //Ngliman
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32049, 'regionable_type'=>'village']); //Sawahan
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32050, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>3372, 'regionable_id'=>32051, 'regionable_type'=>'village']); //Siwalan
            DB::table('regions')->insert(['id'=>3373, 'parent'=>3358, 'code'=>'6448', 'type'=>'districts', 'name'=>'Districts 6448, City 644, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3373, 'regionable_id'=>2805, 'regionable_type'=>'districts']); //Sukomoro
            DB::table('regionables')->insert(['region_id'=>3373, 'regionable_id'=>2806, 'regionable_type'=>'districts']); //Tanjunganom
            DB::table('regionables')->insert(['region_id'=>3373, 'regionable_id'=>2807, 'regionable_type'=>'districts']); //Prambon
                DB::table('regions')->insert(['id'=>3374, 'parent'=>3373, 'code'=>'64484', 'type'=>'village', 'name'=>'Village 64484, Districts 6448, City 644, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32080, 'regionable_type'=>'village']); //Baleturi
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32081, 'regionable_type'=>'village']); //Bandung
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32082, 'regionable_type'=>'village']); //Gondanglegi
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32083, 'regionable_type'=>'village']); //Kurungrejo
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32084, 'regionable_type'=>'village']); //Mojo Agung
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32085, 'regionable_type'=>'village']); //Nglawak
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32086, 'regionable_type'=>'village']); //Rowoharjo
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32087, 'regionable_type'=>'village']); //Sanggrahan
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32088, 'regionable_type'=>'village']); //Singkal Anyar
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32089, 'regionable_type'=>'village']); //Sono Ageng
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32090, 'regionable_type'=>'village']); //Sugihwaras
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32091, 'regionable_type'=>'village']); //Tanjung Tani
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32092, 'regionable_type'=>'village']); //Tegaron
                DB::table('regionables')->insert(['region_id'=>3374, 'regionable_id'=>32093, 'regionable_type'=>'village']); //Watu Dandang
        DB::table('regions')->insert(['id'=>3375, 'parent'=>2996, 'code'=>'651', 'type'=>'city', 'name'=>'City 651, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3375, 'regionable_id'=>143, 'regionable_type'=>'city']); //Malang city
        DB::table('regionables')->insert(['region_id'=>3375, 'regionable_id'=>144, 'regionable_type'=>'city']); //Malang regencies
            DB::table('regions')->insert(['id'=>3376, 'parent'=>3375, 'code'=>'6511', 'type'=>'districts', 'name'=>'Districts 6511, City 651, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3376, 'regionable_id'=>2808, 'regionable_type'=>'districts']); //Klojen
            DB::table('regionables')->insert(['region_id'=>3376, 'regionable_id'=>2846, 'regionable_type'=>'districts']); //Klojen
                DB::table('regions')->insert(['id'=>3377, 'parent'=>3376, 'code'=>'65111', 'type'=>'village', 'name'=>'Village 65111, Districts 6511, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3377, 'regionable_id'=>32094, 'regionable_type'=>'village']); //Klojen
                DB::table('regionables')->insert(['region_id'=>3377, 'regionable_id'=>32095, 'regionable_type'=>'village']); //Rampal Celaket
                DB::table('regionables')->insert(['region_id'=>3377, 'regionable_id'=>32541, 'regionable_type'=>'village']); //Klojen
                DB::table('regionables')->insert(['region_id'=>3377, 'regionable_id'=>32542, 'regionable_type'=>'village']); //Rampal Celaket
                DB::table('regions')->insert(['id'=>3378, 'parent'=>3376, 'code'=>'65112', 'type'=>'village', 'name'=>'Village 65112, Districts 6511, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3378, 'regionable_id'=>32096, 'regionable_type'=>'village']); //Samaan
                DB::table('regionables')->insert(['region_id'=>3378, 'regionable_id'=>32543, 'regionable_type'=>'village']); //Samaan
                DB::table('regions')->insert(['id'=>3379, 'parent'=>3376, 'code'=>'65113', 'type'=>'village', 'name'=>'Village 65113, Districts 6511, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3379, 'regionable_id'=>32097, 'regionable_type'=>'village']); //Penanggungan
                DB::table('regionables')->insert(['region_id'=>3379, 'regionable_id'=>32544, 'regionable_type'=>'village']); //Penanggungan
                DB::table('regions')->insert(['id'=>3380, 'parent'=>3376, 'code'=>'65115', 'type'=>'village', 'name'=>'Village 65115, Districts 6511, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3380, 'regionable_id'=>32098, 'regionable_type'=>'village']); //Gadingkasri
                DB::table('regionables')->insert(['region_id'=>3380, 'regionable_id'=>32545, 'regionable_type'=>'village']); //Gadingkasri
                DB::table('regions')->insert(['id'=>3381, 'parent'=>3376, 'code'=>'65116', 'type'=>'village', 'name'=>'Village 65116, Districts 6511, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3381, 'regionable_id'=>32099, 'regionable_type'=>'village']); //Bareng
                DB::table('regionables')->insert(['region_id'=>3381, 'regionable_id'=>32546, 'regionable_type'=>'village']); //Bareng
                DB::table('regions')->insert(['id'=>3382, 'parent'=>3376, 'code'=>'65117', 'type'=>'village', 'name'=>'Village 65117, Districts 6511, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3382, 'regionable_id'=>32100, 'regionable_type'=>'village']); //Kasin
                DB::table('regionables')->insert(['region_id'=>3382, 'regionable_id'=>32547, 'regionable_type'=>'village']); //Kasin
                DB::table('regions')->insert(['id'=>3383, 'parent'=>3376, 'code'=>'65118', 'type'=>'village', 'name'=>'Village 65118, Districts 6511, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3383, 'regionable_id'=>32101, 'regionable_type'=>'village']); //Sukoharjo
                DB::table('regionables')->insert(['region_id'=>3383, 'regionable_id'=>32548, 'regionable_type'=>'village']); //Sukoharjo
                DB::table('regions')->insert(['id'=>3384, 'parent'=>3376, 'code'=>'65119', 'type'=>'village', 'name'=>'Village 65119, Districts 6511, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3384, 'regionable_id'=>32102, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3384, 'regionable_id'=>32103, 'regionable_type'=>'village']); //Kidul Dalem
                DB::table('regionables')->insert(['region_id'=>3384, 'regionable_id'=>32104, 'regionable_type'=>'village']); //Oro Oro Dowo
                DB::table('regionables')->insert(['region_id'=>3384, 'regionable_id'=>32549, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3384, 'regionable_id'=>32550, 'regionable_type'=>'village']); //Kidul Dalem
                DB::table('regionables')->insert(['region_id'=>3384, 'regionable_id'=>32551, 'regionable_type'=>'village']); //Oro Oro Dowo
            DB::table('regions')->insert(['id'=>3385, 'parent'=>3375, 'code'=>'6512', 'type'=>'districts', 'name'=>'Districts 6512, City 651, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3385, 'regionable_id'=>2809, 'regionable_type'=>'districts']); //Blimbing
            DB::table('regionables')->insert(['region_id'=>3385, 'regionable_id'=>2847, 'regionable_type'=>'districts']); //Blimbing
                DB::table('regions')->insert(['id'=>3386, 'parent'=>3385, 'code'=>'65121', 'type'=>'village', 'name'=>'Village 65121, Districts 6512, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3386, 'regionable_id'=>32105, 'regionable_type'=>'village']); //Kesatrian
                DB::table('regionables')->insert(['region_id'=>3386, 'regionable_id'=>32106, 'regionable_type'=>'village']); //Polehan
                DB::table('regionables')->insert(['region_id'=>3386, 'regionable_id'=>32552, 'regionable_type'=>'village']); //Kesatrian
                DB::table('regionables')->insert(['region_id'=>3386, 'regionable_id'=>32553, 'regionable_type'=>'village']); //Polehan
                DB::table('regions')->insert(['id'=>3387, 'parent'=>3385, 'code'=>'65122', 'type'=>'village', 'name'=>'Village 65122, Districts 6512, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3387, 'regionable_id'=>32107, 'regionable_type'=>'village']); //Purwantoro
                DB::table('regionables')->insert(['region_id'=>3387, 'regionable_id'=>32554, 'regionable_type'=>'village']); //Purwantoro
                DB::table('regions')->insert(['id'=>3388, 'parent'=>3385, 'code'=>'65123', 'type'=>'village', 'name'=>'Village 65123, Districts 6512, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3388, 'regionable_id'=>32108, 'regionable_type'=>'village']); //Bunulrejo
                DB::table('regionables')->insert(['region_id'=>3388, 'regionable_id'=>32555, 'regionable_type'=>'village']); //Bunulrejo
                DB::table('regions')->insert(['id'=>3389, 'parent'=>3385, 'code'=>'65124', 'type'=>'village', 'name'=>'Village 65124, Districts 6512, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3389, 'regionable_id'=>32109, 'regionable_type'=>'village']); //Pandanwangi
                DB::table('regionables')->insert(['region_id'=>3389, 'regionable_id'=>32556, 'regionable_type'=>'village']); //Pandanwangi
                DB::table('regions')->insert(['id'=>3390, 'parent'=>3385, 'code'=>'65125', 'type'=>'village', 'name'=>'Village 65125, Districts 6512, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3390, 'regionable_id'=>32110, 'regionable_type'=>'village']); //Blimbing
                DB::table('regionables')->insert(['region_id'=>3390, 'regionable_id'=>32111, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>3390, 'regionable_id'=>32557, 'regionable_type'=>'village']); //Blimbing
                DB::table('regionables')->insert(['region_id'=>3390, 'regionable_id'=>32558, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regions')->insert(['id'=>3391, 'parent'=>3385, 'code'=>'65126', 'type'=>'village', 'name'=>'Village 65126, Districts 6512, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3391, 'regionable_id'=>32112, 'regionable_type'=>'village']); //Arjosari
                DB::table('regionables')->insert(['region_id'=>3391, 'regionable_id'=>32113, 'regionable_type'=>'village']); //Balearjosari
                DB::table('regionables')->insert(['region_id'=>3391, 'regionable_id'=>32114, 'regionable_type'=>'village']); //Polowijen
                DB::table('regionables')->insert(['region_id'=>3391, 'regionable_id'=>32559, 'regionable_type'=>'village']); //Arjosari
                DB::table('regionables')->insert(['region_id'=>3391, 'regionable_id'=>32560, 'regionable_type'=>'village']); //Balearjosari
                DB::table('regionables')->insert(['region_id'=>3391, 'regionable_id'=>32561, 'regionable_type'=>'village']); //Polowijen
            DB::table('regions')->insert(['id'=>3392, 'parent'=>3375, 'code'=>'6513', 'type'=>'districts', 'name'=>'Districts 6513, City 651, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3392, 'regionable_id'=>2809, 'regionable_type'=>'districts']); //Blimbing
            DB::table('regionables')->insert(['region_id'=>3392, 'regionable_id'=>2810, 'regionable_type'=>'districts']); //Kedungkandang
            DB::table('regionables')->insert(['region_id'=>3392, 'regionable_id'=>2847, 'regionable_type'=>'districts']); //Blimbing
            DB::table('regionables')->insert(['region_id'=>3392, 'regionable_id'=>2848, 'regionable_type'=>'districts']); //Kedungkandang
                DB::table('regions')->insert(['id'=>3393, 'parent'=>3392, 'code'=>'65132', 'type'=>'village', 'name'=>'Village 65132, Districts 6513, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3393, 'regionable_id'=>32116, 'regionable_type'=>'village']); //Arjowinangun
                DB::table('regionables')->insert(['region_id'=>3393, 'regionable_id'=>32563, 'regionable_type'=>'village']); //Arjowinangun
                DB::table('regions')->insert(['id'=>3394, 'parent'=>3392, 'code'=>'65133', 'type'=>'village', 'name'=>'Village 65133, Districts 6513, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3394, 'regionable_id'=>32117, 'regionable_type'=>'village']); //Tlogowaru
                DB::table('regionables')->insert(['region_id'=>3394, 'regionable_id'=>32564, 'regionable_type'=>'village']); //Tlogowaru
                DB::table('regions')->insert(['id'=>3395, 'parent'=>3392, 'code'=>'65134', 'type'=>'village', 'name'=>'Village 65134, Districts 6513, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3395, 'regionable_id'=>32118, 'regionable_type'=>'village']); //Mergosono
                DB::table('regionables')->insert(['region_id'=>3395, 'regionable_id'=>32565, 'regionable_type'=>'village']); //Mergosono
                DB::table('regions')->insert(['id'=>3396, 'parent'=>3392, 'code'=>'65135', 'type'=>'village', 'name'=>'Village 65135, Districts 6513, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3396, 'regionable_id'=>32119, 'regionable_type'=>'village']); //Bumiayu
                DB::table('regionables')->insert(['region_id'=>3396, 'regionable_id'=>32120, 'regionable_type'=>'village']); //Wonokoyo
                DB::table('regionables')->insert(['region_id'=>3396, 'regionable_id'=>32566, 'regionable_type'=>'village']); //Bumiayu
                DB::table('regionables')->insert(['region_id'=>3396, 'regionable_id'=>32567, 'regionable_type'=>'village']); //Wonokoyo
                DB::table('regions')->insert(['id'=>3397, 'parent'=>3392, 'code'=>'65136', 'type'=>'village', 'name'=>'Village 65136, Districts 6513, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3397, 'regionable_id'=>32121, 'regionable_type'=>'village']); //Buring
                DB::table('regionables')->insert(['region_id'=>3397, 'regionable_id'=>32122, 'regionable_type'=>'village']); //Kotalama
                DB::table('regionables')->insert(['region_id'=>3397, 'regionable_id'=>32568, 'regionable_type'=>'village']); //Buring
                DB::table('regionables')->insert(['region_id'=>3397, 'regionable_id'=>32569, 'regionable_type'=>'village']); //Kotalama
                DB::table('regions')->insert(['id'=>3398, 'parent'=>3392, 'code'=>'65137', 'type'=>'village', 'name'=>'Village 65137, Districts 6513, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3398, 'regionable_id'=>32115, 'regionable_type'=>'village']); //Jodipan
                DB::table('regionables')->insert(['region_id'=>3398, 'regionable_id'=>32123, 'regionable_type'=>'village']); //Kedungkandang
                DB::table('regionables')->insert(['region_id'=>3398, 'regionable_id'=>32562, 'regionable_type'=>'village']); //Jodipan
                DB::table('regionables')->insert(['region_id'=>3398, 'regionable_id'=>32570, 'regionable_type'=>'village']); //Kedungkandang
                DB::table('regions')->insert(['id'=>3399, 'parent'=>3392, 'code'=>'65138', 'type'=>'village', 'name'=>'Village 65138, Districts 6513, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3399, 'regionable_id'=>32124, 'regionable_type'=>'village']); //Cemorokandang
                DB::table('regionables')->insert(['region_id'=>3399, 'regionable_id'=>32125, 'regionable_type'=>'village']); //Lesanpuro
                DB::table('regionables')->insert(['region_id'=>3399, 'regionable_id'=>32571, 'regionable_type'=>'village']); //Cemorokandang
                DB::table('regionables')->insert(['region_id'=>3399, 'regionable_id'=>32572, 'regionable_type'=>'village']); //Lesanpuro
                DB::table('regions')->insert(['id'=>3400, 'parent'=>3392, 'code'=>'65139', 'type'=>'village', 'name'=>'Village 65139, Districts 6513, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3400, 'regionable_id'=>32126, 'regionable_type'=>'village']); //Madyopuro
                DB::table('regionables')->insert(['region_id'=>3400, 'regionable_id'=>32127, 'regionable_type'=>'village']); //Sawojajar
                DB::table('regionables')->insert(['region_id'=>3400, 'regionable_id'=>32573, 'regionable_type'=>'village']); //Madyopuro
                DB::table('regionables')->insert(['region_id'=>3400, 'regionable_id'=>32574, 'regionable_type'=>'village']); //Sawojajar
            DB::table('regions')->insert(['id'=>3401, 'parent'=>3375, 'code'=>'6514', 'type'=>'districts', 'name'=>'Districts 6514, City 651, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3401, 'regionable_id'=>2811, 'regionable_type'=>'districts']); //Lowokwaru
            DB::table('regionables')->insert(['region_id'=>3401, 'regionable_id'=>2812, 'regionable_type'=>'districts']); //Sukun
            DB::table('regionables')->insert(['region_id'=>3401, 'regionable_id'=>2849, 'regionable_type'=>'districts']); //Lowokwaru
            DB::table('regionables')->insert(['region_id'=>3401, 'regionable_id'=>2850, 'regionable_type'=>'districts']); //Sukun
                DB::table('regions')->insert(['id'=>3402, 'parent'=>3401, 'code'=>'65146', 'type'=>'village', 'name'=>'Village 65146, Districts 6514, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3402, 'regionable_id'=>32140, 'regionable_type'=>'village']); //Bandulan
                DB::table('regionables')->insert(['region_id'=>3402, 'regionable_id'=>32141, 'regionable_type'=>'village']); //Pisang Candi
                DB::table('regionables')->insert(['region_id'=>3402, 'regionable_id'=>32587, 'regionable_type'=>'village']); //Bandulan
                DB::table('regionables')->insert(['region_id'=>3402, 'regionable_id'=>32588, 'regionable_type'=>'village']); //Pisang Candi
                DB::table('regions')->insert(['id'=>3403, 'parent'=>3401, 'code'=>'65147', 'type'=>'village', 'name'=>'Village 65147, Districts 6514, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3403, 'regionable_id'=>32142, 'regionable_type'=>'village']); //Mulyorejo
                DB::table('regionables')->insert(['region_id'=>3403, 'regionable_id'=>32143, 'regionable_type'=>'village']); //Sukun
                DB::table('regionables')->insert(['region_id'=>3403, 'regionable_id'=>32144, 'regionable_type'=>'village']); //Tanjungrejo
                DB::table('regionables')->insert(['region_id'=>3403, 'regionable_id'=>32589, 'regionable_type'=>'village']); //Mulyorejo
                DB::table('regionables')->insert(['region_id'=>3403, 'regionable_id'=>32590, 'regionable_type'=>'village']); //Sukun
                DB::table('regionables')->insert(['region_id'=>3403, 'regionable_id'=>32591, 'regionable_type'=>'village']); //Tanjungrejo
                DB::table('regions')->insert(['id'=>3404, 'parent'=>3401, 'code'=>'65148', 'type'=>'village', 'name'=>'Village 65148, Districts 6514, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3404, 'regionable_id'=>32145, 'regionable_type'=>'village']); //Bakalan Krajan
                DB::table('regionables')->insert(['region_id'=>3404, 'regionable_id'=>32146, 'regionable_type'=>'village']); //Bandungrejosari
                DB::table('regionables')->insert(['region_id'=>3404, 'regionable_id'=>32147, 'regionable_type'=>'village']); //Ciptomulyo
                DB::table('regionables')->insert(['region_id'=>3404, 'regionable_id'=>32592, 'regionable_type'=>'village']); //Bakalan Krajan
                DB::table('regionables')->insert(['region_id'=>3404, 'regionable_id'=>32593, 'regionable_type'=>'village']); //Bandungrejosari
                DB::table('regionables')->insert(['region_id'=>3404, 'regionable_id'=>32594, 'regionable_type'=>'village']); //Ciptomulyo
                DB::table('regions')->insert(['id'=>3405, 'parent'=>3401, 'code'=>'65149', 'type'=>'village', 'name'=>'Village 65149, Districts 6514, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3405, 'regionable_id'=>32148, 'regionable_type'=>'village']); //Gadang
                DB::table('regionables')->insert(['region_id'=>3405, 'regionable_id'=>32149, 'regionable_type'=>'village']); //Karang Besuki
                DB::table('regionables')->insert(['region_id'=>3405, 'regionable_id'=>32150, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>3405, 'regionable_id'=>32595, 'regionable_type'=>'village']); //Gadang
                DB::table('regionables')->insert(['region_id'=>3405, 'regionable_id'=>32596, 'regionable_type'=>'village']); //Karang Besuki
                DB::table('regionables')->insert(['region_id'=>3405, 'regionable_id'=>32597, 'regionable_type'=>'village']); //Kebonsari
            DB::table('regions')->insert(['id'=>3406, 'parent'=>3375, 'code'=>'6515', 'type'=>'districts', 'name'=>'Districts 6515, City 651, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2813, 'regionable_type'=>'districts']); //Dau
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2814, 'regionable_type'=>'districts']); //Karangploso
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2815, 'regionable_type'=>'districts']); //Singosari
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2816, 'regionable_type'=>'districts']); //Pakis
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2817, 'regionable_type'=>'districts']); //Jabung
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2818, 'regionable_type'=>'districts']); //Tumpang
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2819, 'regionable_type'=>'districts']); //Poncokusumo
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2820, 'regionable_type'=>'districts']); //Wagir
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2851, 'regionable_type'=>'districts']); //Dau
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2852, 'regionable_type'=>'districts']); //Karangploso
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2853, 'regionable_type'=>'districts']); //Singosari
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2854, 'regionable_type'=>'districts']); //Pakis
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2855, 'regionable_type'=>'districts']); //Jabung
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2856, 'regionable_type'=>'districts']); //Tumpang
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2857, 'regionable_type'=>'districts']); //Poncokusumo
            DB::table('regionables')->insert(['region_id'=>3406, 'regionable_id'=>2858, 'regionable_type'=>'districts']); //Wagir
                DB::table('regions')->insert(['id'=>3407, 'parent'=>3406, 'code'=>'65158', 'type'=>'village', 'name'=>'Village 65158, Districts 6515, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32249, 'regionable_type'=>'village']); //Dalisodo
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32250, 'regionable_type'=>'village']); //Gondowangi
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32251, 'regionable_type'=>'village']); //Jedong
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32252, 'regionable_type'=>'village']); //Mendalanwangi
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32253, 'regionable_type'=>'village']); //Pandanlandung
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32254, 'regionable_type'=>'village']); //Pandanrejo
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32255, 'regionable_type'=>'village']); //Parangargo
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32256, 'regionable_type'=>'village']); //Petungsewu
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32257, 'regionable_type'=>'village']); //Sidorahayu
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32258, 'regionable_type'=>'village']); //Sitirejo
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32259, 'regionable_type'=>'village']); //Sukodadi
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32260, 'regionable_type'=>'village']); //Sumbersuko
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32696, 'regionable_type'=>'village']); //Dalisodo
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32697, 'regionable_type'=>'village']); //Gondowangi
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32698, 'regionable_type'=>'village']); //Jedong
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32699, 'regionable_type'=>'village']); //Mendalanwangi
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32700, 'regionable_type'=>'village']); //Pandanlandung
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32701, 'regionable_type'=>'village']); //Pandanrejo
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32702, 'regionable_type'=>'village']); //Parangargo
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32703, 'regionable_type'=>'village']); //Petungsewu
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32704, 'regionable_type'=>'village']); //Sidorahayu
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32705, 'regionable_type'=>'village']); //Sitirejo
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32706, 'regionable_type'=>'village']); //Sukodadi
                DB::table('regionables')->insert(['region_id'=>3407, 'regionable_id'=>32707, 'regionable_type'=>'village']); //Sumbersuko
            DB::table('regions')->insert(['id'=>3408, 'parent'=>3375, 'code'=>'6516', 'type'=>'districts', 'name'=>'Districts 6516, City 651, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2821, 'regionable_type'=>'districts']); //Pakisaji
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2822, 'regionable_type'=>'districts']); //Kepanjen
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2823, 'regionable_type'=>'districts']); //Ngajung (ngajum)
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2824, 'regionable_type'=>'districts']); //Wonosari
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2825, 'regionable_type'=>'districts']); //Kromengan
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2826, 'regionable_type'=>'districts']); //Sumberpucung
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2827, 'regionable_type'=>'districts']); //Kalipare
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2828, 'regionable_type'=>'districts']); //Donomulyo
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2829, 'regionable_type'=>'districts']); //Pagak
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2859, 'regionable_type'=>'districts']); //Pakisaji
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2860, 'regionable_type'=>'districts']); //Kepanjen
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2861, 'regionable_type'=>'districts']); //Ngajung (ngajum)
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2862, 'regionable_type'=>'districts']); //Wonosari
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2863, 'regionable_type'=>'districts']); //Kromengan
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2864, 'regionable_type'=>'districts']); //Sumberpucung
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2865, 'regionable_type'=>'districts']); //Kalipare
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2866, 'regionable_type'=>'districts']); //Donomulyo
            DB::table('regionables')->insert(['region_id'=>3408, 'regionable_id'=>2867, 'regionable_type'=>'districts']); //Pagak
                DB::table('regions')->insert(['id'=>3409, 'parent'=>3408, 'code'=>'65168', 'type'=>'village', 'name'=>'Village 65168, Districts 6516, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32341, 'regionable_type'=>'village']); //Gampingan
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32342, 'regionable_type'=>'village']); //Pagak
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32343, 'regionable_type'=>'village']); //Pandanrejo
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32344, 'regionable_type'=>'village']); //Sempol
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32345, 'regionable_type'=>'village']); //Sumberkerto
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32346, 'regionable_type'=>'village']); //Sumbermanjing Kulon
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32347, 'regionable_type'=>'village']); //Sumberrejo
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32348, 'regionable_type'=>'village']); //Tlogorejo
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32788, 'regionable_type'=>'village']); //Gampingan
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32789, 'regionable_type'=>'village']); //Pagak
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32790, 'regionable_type'=>'village']); //Pandanrejo
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32791, 'regionable_type'=>'village']); //Sempol
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32792, 'regionable_type'=>'village']); //Sumberkerto
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32793, 'regionable_type'=>'village']); //Sumbermanjing Kulon
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32794, 'regionable_type'=>'village']); //Sumberrejo
                DB::table('regionables')->insert(['region_id'=>3409, 'regionable_id'=>32795, 'regionable_type'=>'village']); //Tlogorejo
            DB::table('regions')->insert(['id'=>3410, 'parent'=>3375, 'code'=>'6517', 'type'=>'districts', 'name'=>'Districts 6517, City 651, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2830, 'regionable_type'=>'districts']); //Bululawang
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2831, 'regionable_type'=>'districts']); //Tajinan
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2832, 'regionable_type'=>'districts']); //Wajak
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2833, 'regionable_type'=>'districts']); //Pagelaran
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2834, 'regionable_type'=>'districts']); //Gondanglegi
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2835, 'regionable_type'=>'districts']); //Turen
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2836, 'regionable_type'=>'districts']); //Sumbermanjing Wetan
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2837, 'regionable_type'=>'districts']); //Gedangan
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2838, 'regionable_type'=>'districts']); //Bantur
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2868, 'regionable_type'=>'districts']); //Bululawang
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2869, 'regionable_type'=>'districts']); //Tajinan
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2870, 'regionable_type'=>'districts']); //Wajak
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2871, 'regionable_type'=>'districts']); //Pagelaran
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2872, 'regionable_type'=>'districts']); //Gondanglegi
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2873, 'regionable_type'=>'districts']); //Turen
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2874, 'regionable_type'=>'districts']); //Sumbermanjing Wetan
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2875, 'regionable_type'=>'districts']); //Gedangan
            DB::table('regionables')->insert(['region_id'=>3410, 'regionable_id'=>2876, 'regionable_type'=>'districts']); //Bantur
                DB::table('regions')->insert(['id'=>3411, 'parent'=>3410, 'code'=>'65179', 'type'=>'village', 'name'=>'Village 65179, Districts 6517, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32452, 'regionable_type'=>'village']); //Bandungrejo
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32453, 'regionable_type'=>'village']); //Bantur
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32454, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32455, 'regionable_type'=>'village']); //Pringgodani
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32456, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32457, 'regionable_type'=>'village']); //Rejoyoso
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32458, 'regionable_type'=>'village']); //Srigonco
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32459, 'regionable_type'=>'village']); //Sumberbening
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32460, 'regionable_type'=>'village']); //Wonokerto
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32461, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32899, 'regionable_type'=>'village']); //Bandungrejo
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32900, 'regionable_type'=>'village']); //Bantur
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32901, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32902, 'regionable_type'=>'village']); //Pringgodani
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32903, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32904, 'regionable_type'=>'village']); //Rejoyoso
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32905, 'regionable_type'=>'village']); //Srigonco
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32906, 'regionable_type'=>'village']); //Sumberbening
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32907, 'regionable_type'=>'village']); //Wonokerto
                DB::table('regionables')->insert(['region_id'=>3411, 'regionable_id'=>32908, 'regionable_type'=>'village']); //Wonorejo
            DB::table('regions')->insert(['id'=>3412, 'parent'=>3375, 'code'=>'6518', 'type'=>'districts', 'name'=>'Districts 6518, City 651, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3412, 'regionable_id'=>2839, 'regionable_type'=>'districts']); //Dampit
            DB::table('regionables')->insert(['region_id'=>3412, 'regionable_id'=>2840, 'regionable_type'=>'districts']); //Tirtoyudo
            DB::table('regionables')->insert(['region_id'=>3412, 'regionable_id'=>2841, 'regionable_type'=>'districts']); //Ampelgading
            DB::table('regionables')->insert(['region_id'=>3412, 'regionable_id'=>2877, 'regionable_type'=>'districts']); //Dampit
            DB::table('regionables')->insert(['region_id'=>3412, 'regionable_id'=>2878, 'regionable_type'=>'districts']); //Tirtoyudo
            DB::table('regionables')->insert(['region_id'=>3412, 'regionable_id'=>2879, 'regionable_type'=>'districts']); //Ampelgading
                DB::table('regions')->insert(['id'=>3413, 'parent'=>3412, 'code'=>'65183', 'type'=>'village', 'name'=>'Village 65183, Districts 6518, City 651, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32486, 'regionable_type'=>'village']); //Ampelgading
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32487, 'regionable_type'=>'village']); //Argoyuwono
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32488, 'regionable_type'=>'village']); //Lebakharjo
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32489, 'regionable_type'=>'village']); //Mulyoasri
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32490, 'regionable_type'=>'village']); //Purwoharjo
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32491, 'regionable_type'=>'village']); //Sidorenggo
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32492, 'regionable_type'=>'village']); //Simojayan
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32493, 'regionable_type'=>'village']); //Sonowangi
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32494, 'regionable_type'=>'village']); //Tamanasri
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32495, 'regionable_type'=>'village']); //Tamansari
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32496, 'regionable_type'=>'village']); //Tawangagung
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32497, 'regionable_type'=>'village']); //Tirtomarto
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32498, 'regionable_type'=>'village']); //Tirtomoyo
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32499, 'regionable_type'=>'village']); //Wirotaman
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32933, 'regionable_type'=>'village']); //Ampelgading
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32934, 'regionable_type'=>'village']); //Argoyuwono
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32935, 'regionable_type'=>'village']); //Lebakharjo
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32936, 'regionable_type'=>'village']); //Mulyoasri
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32937, 'regionable_type'=>'village']); //Purwoharjo
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32938, 'regionable_type'=>'village']); //Sidorenggo
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32939, 'regionable_type'=>'village']); //Simojayan
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32940, 'regionable_type'=>'village']); //Sonowangi
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32941, 'regionable_type'=>'village']); //Tamanasri
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32942, 'regionable_type'=>'village']); //Tamansari
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32943, 'regionable_type'=>'village']); //Tawangagung
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32944, 'regionable_type'=>'village']); //Tirtomarto
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32945, 'regionable_type'=>'village']); //Tirtomoyo
                DB::table('regionables')->insert(['region_id'=>3413, 'regionable_id'=>32946, 'regionable_type'=>'village']); //Wirotaman
        DB::table('regions')->insert(['id'=>3414, 'parent'=>2996, 'code'=>'652', 'type'=>'city', 'name'=>'City 652, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3414, 'regionable_id'=>143, 'regionable_type'=>'city']); //Malang city
        DB::table('regionables')->insert(['region_id'=>3414, 'regionable_id'=>144, 'regionable_type'=>'city']); //Malang regencies
            DB::table('regions')->insert(['id'=>3415, 'parent'=>3414, 'code'=>'6521', 'type'=>'districts', 'name'=>'Districts 6521, City 652, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3415, 'regionable_id'=>2842, 'regionable_type'=>'districts']); //Lawang
            DB::table('regionables')->insert(['region_id'=>3415, 'regionable_id'=>2880, 'regionable_type'=>'districts']); //Lawang
                DB::table('regions')->insert(['id'=>3416, 'parent'=>3415, 'code'=>'65211', 'type'=>'village', 'name'=>'Village 65211, Districts 6521, City 652, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3416, 'regionable_id'=>32500, 'regionable_type'=>'village']); //Lawang
                DB::table('regionables')->insert(['region_id'=>3416, 'regionable_id'=>32947, 'regionable_type'=>'village']); //Lawang
                DB::table('regions')->insert(['id'=>3417, 'parent'=>3415, 'code'=>'65213', 'type'=>'village', 'name'=>'Village 65213, Districts 6521, City 652, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3417, 'regionable_id'=>32501, 'regionable_type'=>'village']); //Turirejo
                DB::table('regionables')->insert(['region_id'=>3417, 'regionable_id'=>32948, 'regionable_type'=>'village']); //Turirejo
                DB::table('regions')->insert(['id'=>3418, 'parent'=>3415, 'code'=>'65214', 'type'=>'village', 'name'=>'Village 65214, Districts 6521, City 652, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3418, 'regionable_id'=>32502, 'regionable_type'=>'village']); //Ketindan
                DB::table('regionables')->insert(['region_id'=>3418, 'regionable_id'=>32949, 'regionable_type'=>'village']); //Ketindan
                DB::table('regions')->insert(['id'=>3419, 'parent'=>3415, 'code'=>'65215', 'type'=>'village', 'name'=>'Village 65215, Districts 6521, City 652, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3419, 'regionable_id'=>32503, 'regionable_type'=>'village']); //Bedali
                DB::table('regionables')->insert(['region_id'=>3419, 'regionable_id'=>32950, 'regionable_type'=>'village']); //Bedali
                DB::table('regions')->insert(['id'=>3420, 'parent'=>3415, 'code'=>'65216', 'type'=>'village', 'name'=>'Village 65216, Districts 6521, City 652, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32504, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32505, 'regionable_type'=>'village']); //Mulyoarjo
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32506, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32507, 'regionable_type'=>'village']); //Sidoluhur
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32508, 'regionable_type'=>'village']); //Srigading
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32509, 'regionable_type'=>'village']); //Sumber Ngepoh
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32510, 'regionable_type'=>'village']); //Sumber Porong
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32511, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32951, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32952, 'regionable_type'=>'village']); //Mulyoarjo
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32953, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32954, 'regionable_type'=>'village']); //Sidoluhur
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32955, 'regionable_type'=>'village']); //Srigading
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32956, 'regionable_type'=>'village']); //Sumber Ngepoh
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32957, 'regionable_type'=>'village']); //Sumber Porong
                DB::table('regionables')->insert(['region_id'=>3420, 'regionable_id'=>32958, 'regionable_type'=>'village']); //Wonorejo
        DB::table('regions')->insert(['id'=>3421, 'parent'=>2996, 'code'=>'653', 'type'=>'city', 'name'=>'City 653, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3421, 'regionable_id'=>143, 'regionable_type'=>'city']); //Malang city
        DB::table('regionables')->insert(['region_id'=>3421, 'regionable_id'=>144, 'regionable_type'=>'city']); //Malang regencies
        DB::table('regionables')->insert(['region_id'=>3421, 'regionable_id'=>145, 'regionable_type'=>'city']); //Batu city
            DB::table('regions')->insert(['id'=>3422, 'parent'=>3421, 'code'=>'6531', 'type'=>'districts', 'name'=>'Districts 6531, City 653, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3422, 'regionable_id'=>2884, 'regionable_type'=>'districts']); //Batu
                DB::table('regions')->insert(['id'=>3423, 'parent'=>3422, 'code'=>'65311', 'type'=>'village', 'name'=>'Village 65311, Districts 6531, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3423, 'regionable_id'=>32988, 'regionable_type'=>'village']); //Ngaglik
                DB::table('regions')->insert(['id'=>3424, 'parent'=>3422, 'code'=>'65312', 'type'=>'village', 'name'=>'Village 65312, Districts 6531, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3424, 'regionable_id'=>32989, 'regionable_type'=>'village']); //Songgo Kerto
                DB::table('regions')->insert(['id'=>3425, 'parent'=>3422, 'code'=>'65313', 'type'=>'village', 'name'=>'Village 65313, Districts 6531, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3425, 'regionable_id'=>32990, 'regionable_type'=>'village']); //Pesanggrahan
                DB::table('regions')->insert(['id'=>3426, 'parent'=>3422, 'code'=>'65314', 'type'=>'village', 'name'=>'Village 65314, Districts 6531, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3426, 'regionable_id'=>32991, 'regionable_type'=>'village']); //Sisir
                DB::table('regions')->insert(['id'=>3427, 'parent'=>3422, 'code'=>'65315', 'type'=>'village', 'name'=>'Village 65315, Districts 6531, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3427, 'regionable_id'=>32992, 'regionable_type'=>'village']); //Temas
                DB::table('regions')->insert(['id'=>3428, 'parent'=>3422, 'code'=>'65316', 'type'=>'village', 'name'=>'Village 65316, Districts 6531, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3428, 'regionable_id'=>32993, 'regionable_type'=>'village']); //Oro-oro Ombo
                DB::table('regions')->insert(['id'=>3429, 'parent'=>3422, 'code'=>'65317', 'type'=>'village', 'name'=>'Village 65317, Districts 6531, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3429, 'regionable_id'=>32994, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regions')->insert(['id'=>3430, 'parent'=>3422, 'code'=>'65318', 'type'=>'village', 'name'=>'Village 65318, Districts 6531, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3430, 'regionable_id'=>32995, 'regionable_type'=>'village']); //Sumberejo (sumber Rejo)
            DB::table('regions')->insert(['id'=>3431, 'parent'=>3421, 'code'=>'6532', 'type'=>'districts', 'name'=>'Districts 6532, City 653, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3431, 'regionable_id'=>2885, 'regionable_type'=>'districts']); //Junrejo
                DB::table('regions')->insert(['id'=>3432, 'parent'=>3431, 'code'=>'65321', 'type'=>'village', 'name'=>'Village 65321, Districts 6532, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3432, 'regionable_id'=>32996, 'regionable_type'=>'village']); //Junrejo
                DB::table('regions')->insert(['id'=>3433, 'parent'=>3431, 'code'=>'65322', 'type'=>'village', 'name'=>'Village 65322, Districts 6532, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3433, 'regionable_id'=>32997, 'regionable_type'=>'village']); //Mojorejo
                DB::table('regions')->insert(['id'=>3434, 'parent'=>3431, 'code'=>'65323', 'type'=>'village', 'name'=>'Village 65323, Districts 6532, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3434, 'regionable_id'=>32998, 'regionable_type'=>'village']); //Dadaprejo
                DB::table('regions')->insert(['id'=>3435, 'parent'=>3431, 'code'=>'65324', 'type'=>'village', 'name'=>'Village 65324, Districts 6532, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3435, 'regionable_id'=>32999, 'regionable_type'=>'village']); //Pendem
                DB::table('regions')->insert(['id'=>3436, 'parent'=>3431, 'code'=>'65325', 'type'=>'village', 'name'=>'Village 65325, Districts 6532, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3436, 'regionable_id'=>33000, 'regionable_type'=>'village']); //Torongrejo
                DB::table('regions')->insert(['id'=>3437, 'parent'=>3431, 'code'=>'65326', 'type'=>'village', 'name'=>'Village 65326, Districts 6532, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3437, 'regionable_id'=>33001, 'regionable_type'=>'village']); //Beji
                DB::table('regions')->insert(['id'=>3438, 'parent'=>3431, 'code'=>'65327', 'type'=>'village', 'name'=>'Village 65327, Districts 6532, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3438, 'regionable_id'=>33002, 'regionable_type'=>'village']); //Tlekung
            DB::table('regions')->insert(['id'=>3439, 'parent'=>3421, 'code'=>'6533', 'type'=>'districts', 'name'=>'Districts 6533, City 653, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3439, 'regionable_id'=>2886, 'regionable_type'=>'districts']); //Bumiaji
                DB::table('regions')->insert(['id'=>3440, 'parent'=>3439, 'code'=>'65331', 'type'=>'village', 'name'=>'Village 65331, Districts 6533, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3440, 'regionable_id'=>33003, 'regionable_type'=>'village']); //Bumiaji
                DB::table('regions')->insert(['id'=>3441, 'parent'=>3439, 'code'=>'65332', 'type'=>'village', 'name'=>'Village 65332, Districts 6533, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3441, 'regionable_id'=>33004, 'regionable_type'=>'village']); //Pandan Rejo
                DB::table('regions')->insert(['id'=>3442, 'parent'=>3439, 'code'=>'65333', 'type'=>'village', 'name'=>'Village 65333, Districts 6533, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3442, 'regionable_id'=>33005, 'regionable_type'=>'village']); //Giripurno
                DB::table('regions')->insert(['id'=>3443, 'parent'=>3439, 'code'=>'65334', 'type'=>'village', 'name'=>'Village 65334, Districts 6533, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3443, 'regionable_id'=>33006, 'regionable_type'=>'village']); //Bulukerto
                DB::table('regions')->insert(['id'=>3444, 'parent'=>3439, 'code'=>'65335', 'type'=>'village', 'name'=>'Village 65335, Districts 6533, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3444, 'regionable_id'=>33007, 'regionable_type'=>'village']); //Sumber Gondo
                DB::table('regions')->insert(['id'=>3445, 'parent'=>3439, 'code'=>'65336', 'type'=>'village', 'name'=>'Village 65336, Districts 6533, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3445, 'regionable_id'=>33008, 'regionable_type'=>'village']); //Tulung Rejo
                DB::table('regions')->insert(['id'=>3446, 'parent'=>3439, 'code'=>'65337', 'type'=>'village', 'name'=>'Village 65337, Districts 6533, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3446, 'regionable_id'=>33009, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regions')->insert(['id'=>3447, 'parent'=>3439, 'code'=>'65338', 'type'=>'village', 'name'=>'Village 65338, Districts 6533, City 653, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3447, 'regionable_id'=>33010, 'regionable_type'=>'village']); //Punten
                DB::table('regionables')->insert(['region_id'=>3447, 'regionable_id'=>33011, 'regionable_type'=>'village']); //Sumber Brantas
        DB::table('regions')->insert(['id'=>3448, 'parent'=>2996, 'code'=>'661', 'type'=>'city', 'name'=>'City 661, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3448, 'regionable_id'=>146, 'regionable_type'=>'city']); //Blitar city
        DB::table('regionables')->insert(['region_id'=>3448, 'regionable_id'=>147, 'regionable_type'=>'city']); //Blitar regencies
            DB::table('regions')->insert(['id'=>3449, 'parent'=>3448, 'code'=>'6611', 'type'=>'districts', 'name'=>'Districts 6611, City 661, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3449, 'regionable_id'=>2887, 'regionable_type'=>'districts']); //Kepanjen Kidul
            DB::table('regionables')->insert(['region_id'=>3449, 'regionable_id'=>2912, 'regionable_type'=>'districts']); //Kepanjen Kidul
                DB::table('regions')->insert(['id'=>3450, 'parent'=>3449, 'code'=>'66113', 'type'=>'village', 'name'=>'Village 66113, Districts 6611, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3450, 'regionable_id'=>33012, 'regionable_type'=>'village']); //Sentul
                DB::table('regionables')->insert(['region_id'=>3450, 'regionable_id'=>33281, 'regionable_type'=>'village']); //Sentul
                DB::table('regions')->insert(['id'=>3451, 'parent'=>3449, 'code'=>'66114', 'type'=>'village', 'name'=>'Village 66114, Districts 6611, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3451, 'regionable_id'=>33013, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regionables')->insert(['region_id'=>3451, 'regionable_id'=>33282, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regions')->insert(['id'=>3452, 'parent'=>3449, 'code'=>'66115', 'type'=>'village', 'name'=>'Village 66115, Districts 6611, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3452, 'regionable_id'=>33014, 'regionable_type'=>'village']); //Tanggung
                DB::table('regionables')->insert(['region_id'=>3452, 'regionable_id'=>33283, 'regionable_type'=>'village']); //Tanggung
                DB::table('regions')->insert(['id'=>3453, 'parent'=>3449, 'code'=>'66116', 'type'=>'village', 'name'=>'Village 66116, Districts 6611, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3453, 'regionable_id'=>33015, 'regionable_type'=>'village']); //Bendo
                DB::table('regionables')->insert(['region_id'=>3453, 'regionable_id'=>33284, 'regionable_type'=>'village']); //Bendo
                DB::table('regions')->insert(['id'=>3454, 'parent'=>3449, 'code'=>'66117', 'type'=>'village', 'name'=>'Village 66117, Districts 6611, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3454, 'regionable_id'=>33016, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3454, 'regionable_id'=>33017, 'regionable_type'=>'village']); //Kepanjen Kidul
                DB::table('regionables')->insert(['region_id'=>3454, 'regionable_id'=>33018, 'regionable_type'=>'village']); //Kepanjen Lor
                DB::table('regionables')->insert(['region_id'=>3454, 'regionable_id'=>33285, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3454, 'regionable_id'=>33286, 'regionable_type'=>'village']); //Kepanjen Kidul
                DB::table('regionables')->insert(['region_id'=>3454, 'regionable_id'=>33287, 'regionable_type'=>'village']); //Kepanjen Lor
            DB::table('regions')->insert(['id'=>3455, 'parent'=>3448, 'code'=>'6612', 'type'=>'districts', 'name'=>'Districts 6612, City 661, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3455, 'regionable_id'=>2888, 'regionable_type'=>'districts']); //Sukorejo
            DB::table('regionables')->insert(['region_id'=>3455, 'regionable_id'=>2913, 'regionable_type'=>'districts']); //Sukorejo
                DB::table('regions')->insert(['id'=>3456, 'parent'=>3455, 'code'=>'66121', 'type'=>'village', 'name'=>'Village 66121, Districts 6612, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3456, 'regionable_id'=>33019, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3456, 'regionable_id'=>33288, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regions')->insert(['id'=>3457, 'parent'=>3455, 'code'=>'66122', 'type'=>'village', 'name'=>'Village 66122, Districts 6612, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3457, 'regionable_id'=>33020, 'regionable_type'=>'village']); //Pakunden
                DB::table('regionables')->insert(['region_id'=>3457, 'regionable_id'=>33289, 'regionable_type'=>'village']); //Pakunden
                DB::table('regions')->insert(['id'=>3458, 'parent'=>3455, 'code'=>'66124', 'type'=>'village', 'name'=>'Village 66124, Districts 6612, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3458, 'regionable_id'=>33021, 'regionable_type'=>'village']); //Tlumpu
                DB::table('regionables')->insert(['region_id'=>3458, 'regionable_id'=>33290, 'regionable_type'=>'village']); //Tlumpu
                DB::table('regions')->insert(['id'=>3459, 'parent'=>3455, 'code'=>'66125', 'type'=>'village', 'name'=>'Village 66125, Districts 6612, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3459, 'regionable_id'=>33022, 'regionable_type'=>'village']); //Karang Sari
                DB::table('regionables')->insert(['region_id'=>3459, 'regionable_id'=>33291, 'regionable_type'=>'village']); //Karang Sari
                DB::table('regions')->insert(['id'=>3460, 'parent'=>3455, 'code'=>'66126', 'type'=>'village', 'name'=>'Village 66126, Districts 6612, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3460, 'regionable_id'=>33023, 'regionable_type'=>'village']); //Blitar
                DB::table('regionables')->insert(['region_id'=>3460, 'regionable_id'=>33024, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regionables')->insert(['region_id'=>3460, 'regionable_id'=>33025, 'regionable_type'=>'village']); //Turi
                DB::table('regionables')->insert(['region_id'=>3460, 'regionable_id'=>33292, 'regionable_type'=>'village']); //Blitar
                DB::table('regionables')->insert(['region_id'=>3460, 'regionable_id'=>33293, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regionables')->insert(['region_id'=>3460, 'regionable_id'=>33294, 'regionable_type'=>'village']); //Turi
            DB::table('regions')->insert(['id'=>3461, 'parent'=>3448, 'code'=>'6613', 'type'=>'districts', 'name'=>'Districts 6613, City 661, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3461, 'regionable_id'=>2889, 'regionable_type'=>'districts']); //Sanan Wetan
            DB::table('regionables')->insert(['region_id'=>3461, 'regionable_id'=>2914, 'regionable_type'=>'districts']); //Sanan Wetan
                DB::table('regions')->insert(['id'=>3462, 'parent'=>3461, 'code'=>'66133', 'type'=>'village', 'name'=>'Village 66133, Districts 6613, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3462, 'regionable_id'=>33026, 'regionable_type'=>'village']); //Bendogerit
                DB::table('regionables')->insert(['region_id'=>3462, 'regionable_id'=>33295, 'regionable_type'=>'village']); //Bendogerit
                DB::table('regions')->insert(['id'=>3463, 'parent'=>3461, 'code'=>'66134', 'type'=>'village', 'name'=>'Village 66134, Districts 6613, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3463, 'regionable_id'=>33027, 'regionable_type'=>'village']); //Plosokerep
                DB::table('regionables')->insert(['region_id'=>3463, 'regionable_id'=>33296, 'regionable_type'=>'village']); //Plosokerep
                DB::table('regions')->insert(['id'=>3464, 'parent'=>3461, 'code'=>'66135', 'type'=>'village', 'name'=>'Village 66135, Districts 6613, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3464, 'regionable_id'=>33028, 'regionable_type'=>'village']); //Rembang
                DB::table('regionables')->insert(['region_id'=>3464, 'regionable_id'=>33297, 'regionable_type'=>'village']); //Rembang
                DB::table('regions')->insert(['id'=>3465, 'parent'=>3461, 'code'=>'66136', 'type'=>'village', 'name'=>'Village 66136, Districts 6613, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3465, 'regionable_id'=>33029, 'regionable_type'=>'village']); //Klampok
                DB::table('regionables')->insert(['region_id'=>3465, 'regionable_id'=>33298, 'regionable_type'=>'village']); //Klampok
                DB::table('regions')->insert(['id'=>3466, 'parent'=>3461, 'code'=>'66137', 'type'=>'village', 'name'=>'Village 66137, Districts 6613, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3466, 'regionable_id'=>33030, 'regionable_type'=>'village']); //Gedog
                DB::table('regionables')->insert(['region_id'=>3466, 'regionable_id'=>33031, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>3466, 'regionable_id'=>33032, 'regionable_type'=>'village']); //Sanan Wetan
                DB::table('regionables')->insert(['region_id'=>3466, 'regionable_id'=>33299, 'regionable_type'=>'village']); //Gedog
                DB::table('regionables')->insert(['region_id'=>3466, 'regionable_id'=>33300, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>3466, 'regionable_id'=>33301, 'regionable_type'=>'village']); //Sanan Wetan
            DB::table('regions')->insert(['id'=>3467, 'parent'=>3448, 'code'=>'6615', 'type'=>'districts', 'name'=>'Districts 6615, City 661, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2890, 'regionable_type'=>'districts']); //Sanan Kulon
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2891, 'regionable_type'=>'districts']); //Srengat
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2892, 'regionable_type'=>'districts']); //Ponggok
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2893, 'regionable_type'=>'districts']); //Udanawu
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2894, 'regionable_type'=>'districts']); //Wonodadi
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2915, 'regionable_type'=>'districts']); //Sanan Kulon
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2916, 'regionable_type'=>'districts']); //Srengat
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2917, 'regionable_type'=>'districts']); //Ponggok
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2918, 'regionable_type'=>'districts']); //Udanawu
            DB::table('regionables')->insert(['region_id'=>3467, 'regionable_id'=>2919, 'regionable_type'=>'districts']); //Wonodadi
                DB::table('regions')->insert(['id'=>3468, 'parent'=>3467, 'code'=>'66155', 'type'=>'village', 'name'=>'Village 66155, Districts 6615, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33088, 'regionable_type'=>'village']); //Gandekan
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33089, 'regionable_type'=>'village']); //Jaten
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33090, 'regionable_type'=>'village']); //Kaliboto
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33091, 'regionable_type'=>'village']); //Kebonagung
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33092, 'regionable_type'=>'village']); //Kolomayan
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33093, 'regionable_type'=>'village']); //Kunir
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33094, 'regionable_type'=>'village']); //Pikatan
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33095, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33096, 'regionable_type'=>'village']); //Salam
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33097, 'regionable_type'=>'village']); //Tawangrejo
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33098, 'regionable_type'=>'village']); //Wonodadi
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33357, 'regionable_type'=>'village']); //Gandekan
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33358, 'regionable_type'=>'village']); //Jaten
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33359, 'regionable_type'=>'village']); //Kaliboto
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33360, 'regionable_type'=>'village']); //Kebonagung
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33361, 'regionable_type'=>'village']); //Kolomayan
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33362, 'regionable_type'=>'village']); //Kunir
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33363, 'regionable_type'=>'village']); //Pikatan
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33364, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33365, 'regionable_type'=>'village']); //Salam
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33366, 'regionable_type'=>'village']); //Tawangrejo
                DB::table('regionables')->insert(['region_id'=>3468, 'regionable_id'=>33367, 'regionable_type'=>'village']); //Wonodadi
            DB::table('regions')->insert(['id'=>3469, 'parent'=>3448, 'code'=>'6616', 'type'=>'districts', 'name'=>'Districts 6616, City 661, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3469, 'regionable_id'=>2895, 'regionable_type'=>'districts']); //Kademangan
            DB::table('regionables')->insert(['region_id'=>3469, 'regionable_id'=>2896, 'regionable_type'=>'districts']); //Bakung
            DB::table('regionables')->insert(['region_id'=>3469, 'regionable_id'=>2920, 'regionable_type'=>'districts']); //Kademangan
            DB::table('regionables')->insert(['region_id'=>3469, 'regionable_id'=>2921, 'regionable_type'=>'districts']); //Bakung
                DB::table('regions')->insert(['id'=>3470, 'parent'=>3469, 'code'=>'66163', 'type'=>'village', 'name'=>'Village 66163, Districts 6616, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33114, 'regionable_type'=>'village']); //Bakung
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33115, 'regionable_type'=>'village']); //Bululawang
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33116, 'regionable_type'=>'village']); //Kedungbanteng
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33117, 'regionable_type'=>'village']); //Lorejo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33118, 'regionable_type'=>'village']); //Ngrejo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33119, 'regionable_type'=>'village']); //Plandirejo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33120, 'regionable_type'=>'village']); //Pulerejo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33121, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33122, 'regionable_type'=>'village']); //Sumberdadi
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33123, 'regionable_type'=>'village']); //Tumpakkepuh
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33124, 'regionable_type'=>'village']); //Tumpakoyot
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33383, 'regionable_type'=>'village']); //Bakung
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33384, 'regionable_type'=>'village']); //Bululawang
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33385, 'regionable_type'=>'village']); //Kedungbanteng
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33386, 'regionable_type'=>'village']); //Lorejo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33387, 'regionable_type'=>'village']); //Ngrejo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33388, 'regionable_type'=>'village']); //Plandirejo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33389, 'regionable_type'=>'village']); //Pulerejo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33390, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33391, 'regionable_type'=>'village']); //Sumberdadi
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33392, 'regionable_type'=>'village']); //Tumpakkepuh
                DB::table('regionables')->insert(['region_id'=>3470, 'regionable_id'=>33393, 'regionable_type'=>'village']); //Tumpakoyot
            DB::table('regions')->insert(['id'=>3471, 'parent'=>3448, 'code'=>'6617', 'type'=>'districts', 'name'=>'Districts 6617, City 661, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3471, 'regionable_id'=>2897, 'regionable_type'=>'districts']); //Kanigoro
            DB::table('regionables')->insert(['region_id'=>3471, 'regionable_id'=>2898, 'regionable_type'=>'districts']); //Sutojayan
            DB::table('regionables')->insert(['region_id'=>3471, 'regionable_id'=>2899, 'regionable_type'=>'districts']); //Wonotirto
            DB::table('regionables')->insert(['region_id'=>3471, 'regionable_id'=>2900, 'regionable_type'=>'districts']); //Panggungrejo
            DB::table('regionables')->insert(['region_id'=>3471, 'regionable_id'=>2922, 'regionable_type'=>'districts']); //Kanigoro
            DB::table('regionables')->insert(['region_id'=>3471, 'regionable_id'=>2923, 'regionable_type'=>'districts']); //Sutojayan
            DB::table('regionables')->insert(['region_id'=>3471, 'regionable_id'=>2924, 'regionable_type'=>'districts']); //Wonotirto
            DB::table('regionables')->insert(['region_id'=>3471, 'regionable_id'=>2925, 'regionable_type'=>'districts']); //Panggungrejo
                DB::table('regions')->insert(['id'=>3472, 'parent'=>3471, 'code'=>'66174', 'type'=>'village', 'name'=>'Village 66174, Districts 6617, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33156, 'regionable_type'=>'village']); //Bale Rejo
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33157, 'regionable_type'=>'village']); //Bumiayu
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33158, 'regionable_type'=>'village']); //Kali Gambir
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33159, 'regionable_type'=>'village']); //Kalitengah
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33160, 'regionable_type'=>'village']); //Margo Mulyo
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33161, 'regionable_type'=>'village']); //Panggung Asri
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33162, 'regionable_type'=>'village']); //Panggung Rejo
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33163, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33164, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33165, 'regionable_type'=>'village']); //Sumbersih
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33425, 'regionable_type'=>'village']); //Bale Rejo
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33426, 'regionable_type'=>'village']); //Bumiayu
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33427, 'regionable_type'=>'village']); //Kali Gambir
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33428, 'regionable_type'=>'village']); //Kalitengah
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33429, 'regionable_type'=>'village']); //Margo Mulyo
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33430, 'regionable_type'=>'village']); //Panggung Asri
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33431, 'regionable_type'=>'village']); //Panggung Rejo
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33432, 'regionable_type'=>'village']); //Serang
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33433, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>3472, 'regionable_id'=>33434, 'regionable_type'=>'village']); //Sumbersih
            DB::table('regions')->insert(['id'=>3473, 'parent'=>3448, 'code'=>'6618', 'type'=>'districts', 'name'=>'Districts 6618, City 661, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2901, 'regionable_type'=>'districts']); //Nglegok
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2902, 'regionable_type'=>'districts']); //Garum
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2903, 'regionable_type'=>'districts']); //Talun
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2904, 'regionable_type'=>'districts']); //Wlingi
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2905, 'regionable_type'=>'districts']); //Selopuro
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2906, 'regionable_type'=>'districts']); //Doko
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2907, 'regionable_type'=>'districts']); //Gandusari
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2926, 'regionable_type'=>'districts']); //Nglegok
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2927, 'regionable_type'=>'districts']); //Garum
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2928, 'regionable_type'=>'districts']); //Talun
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2929, 'regionable_type'=>'districts']); //Wlingi
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2930, 'regionable_type'=>'districts']); //Selopuro
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2931, 'regionable_type'=>'districts']); //Doko
            DB::table('regionables')->insert(['region_id'=>3473, 'regionable_id'=>2932, 'regionable_type'=>'districts']); //Gandusari
                DB::table('regions')->insert(['id'=>3474, 'parent'=>3473, 'code'=>'66187', 'type'=>'village', 'name'=>'Village 66187, Districts 6618, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33227, 'regionable_type'=>'village']); //Butun
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33228, 'regionable_type'=>'village']); //Gadungan
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33229, 'regionable_type'=>'village']); //Gandusari
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33230, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33231, 'regionable_type'=>'village']); //Kotes
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33232, 'regionable_type'=>'village']); //Krisik
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33233, 'regionable_type'=>'village']); //Ngaringan
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33234, 'regionable_type'=>'village']); //Semen
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33235, 'regionable_type'=>'village']); //Slumbung
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33236, 'regionable_type'=>'village']); //Soso
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33237, 'regionable_type'=>'village']); //Sukosewu
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33238, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33239, 'regionable_type'=>'village']); //Tambakan
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33240, 'regionable_type'=>'village']); //Tulungrejo
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33496, 'regionable_type'=>'village']); //Butun
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33497, 'regionable_type'=>'village']); //Gadungan
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33498, 'regionable_type'=>'village']); //Gandusari
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33499, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33500, 'regionable_type'=>'village']); //Kotes
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33501, 'regionable_type'=>'village']); //Krisik
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33502, 'regionable_type'=>'village']); //Ngaringan
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33503, 'regionable_type'=>'village']); //Semen
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33504, 'regionable_type'=>'village']); //Slumbung
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33505, 'regionable_type'=>'village']); //Soso
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33506, 'regionable_type'=>'village']); //Sukosewu
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33507, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33508, 'regionable_type'=>'village']); //Tambakan
                DB::table('regionables')->insert(['region_id'=>3474, 'regionable_id'=>33509, 'regionable_type'=>'village']); //Tulungrejo
            DB::table('regions')->insert(['id'=>3475, 'parent'=>3448, 'code'=>'6619', 'type'=>'districts', 'name'=>'Districts 6619, City 661, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3475, 'regionable_id'=>2908, 'regionable_type'=>'districts']); //Kesamben
            DB::table('regionables')->insert(['region_id'=>3475, 'regionable_id'=>2909, 'regionable_type'=>'districts']); //Selorejo
            DB::table('regionables')->insert(['region_id'=>3475, 'regionable_id'=>2910, 'regionable_type'=>'districts']); //Binangun
            DB::table('regionables')->insert(['region_id'=>3475, 'regionable_id'=>2911, 'regionable_type'=>'districts']); //Wates
            DB::table('regionables')->insert(['region_id'=>3475, 'regionable_id'=>2933, 'regionable_type'=>'districts']); //Kesamben
            DB::table('regionables')->insert(['region_id'=>3475, 'regionable_id'=>2934, 'regionable_type'=>'districts']); //Selorejo
            DB::table('regionables')->insert(['region_id'=>3475, 'regionable_id'=>2935, 'regionable_type'=>'districts']); //Binangun
            DB::table('regionables')->insert(['region_id'=>3475, 'regionable_id'=>2936, 'regionable_type'=>'districts']); //Wates
                DB::table('regions')->insert(['id'=>3476, 'parent'=>3475, 'code'=>'66194', 'type'=>'village', 'name'=>'Village 66194, Districts 6619, City 661, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33273, 'regionable_type'=>'village']); //Mojorejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33274, 'regionable_type'=>'village']); //Purworejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33275, 'regionable_type'=>'village']); //Ringin Rejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33276, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33277, 'regionable_type'=>'village']); //Sumberarum
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33278, 'regionable_type'=>'village']); //Tugu Rejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33279, 'regionable_type'=>'village']); //Tulungrejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33280, 'regionable_type'=>'village']); //Wates
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33542, 'regionable_type'=>'village']); //Mojorejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33543, 'regionable_type'=>'village']); //Purworejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33544, 'regionable_type'=>'village']); //Ringin Rejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33545, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33546, 'regionable_type'=>'village']); //Sumberarum
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33547, 'regionable_type'=>'village']); //Tugu Rejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33548, 'regionable_type'=>'village']); //Tulungrejo
                DB::table('regionables')->insert(['region_id'=>3476, 'regionable_id'=>33549, 'regionable_type'=>'village']); //Wates
        DB::table('regions')->insert(['id'=>3477, 'parent'=>2996, 'code'=>'662', 'type'=>'city', 'name'=>'City 662, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3477, 'regionable_id'=>148, 'regionable_type'=>'city']); //Tulungagung regencies
            DB::table('regions')->insert(['id'=>3478, 'parent'=>3477, 'code'=>'6621', 'type'=>'districts', 'name'=>'Districts 6621, City 662, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3478, 'regionable_id'=>2937, 'regionable_type'=>'districts']); //Tulungagung
                DB::table('regions')->insert(['id'=>3479, 'parent'=>3478, 'code'=>'66212', 'type'=>'village', 'name'=>'Village 66212, Districts 6621, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3479, 'regionable_id'=>33550, 'regionable_type'=>'village']); //Kampungdalem
                DB::table('regionables')->insert(['region_id'=>3479, 'regionable_id'=>33551, 'regionable_type'=>'village']); //Kenayan
                DB::table('regions')->insert(['id'=>3480, 'parent'=>3478, 'code'=>'66213', 'type'=>'village', 'name'=>'Village 66213, Districts 6621, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3480, 'regionable_id'=>33552, 'regionable_type'=>'village']); //Botoran
                DB::table('regions')->insert(['id'=>3481, 'parent'=>3478, 'code'=>'66214', 'type'=>'village', 'name'=>'Village 66214, Districts 6621, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3481, 'regionable_id'=>33553, 'regionable_type'=>'village']); //Panggungrejo
                DB::table('regions')->insert(['id'=>3482, 'parent'=>3478, 'code'=>'66215', 'type'=>'village', 'name'=>'Village 66215, Districts 6621, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3482, 'regionable_id'=>33554, 'regionable_type'=>'village']); //Kedungsoko
                DB::table('regionables')->insert(['region_id'=>3482, 'regionable_id'=>33555, 'regionable_type'=>'village']); //Kutoanyar
                DB::table('regions')->insert(['id'=>3483, 'parent'=>3478, 'code'=>'66216', 'type'=>'village', 'name'=>'Village 66216, Districts 6621, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3483, 'regionable_id'=>33556, 'regionable_type'=>'village']); //Tertek
                DB::table('regions')->insert(['id'=>3484, 'parent'=>3478, 'code'=>'66217', 'type'=>'village', 'name'=>'Village 66217, Districts 6621, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3484, 'regionable_id'=>33557, 'regionable_type'=>'village']); //Karangwaru
                DB::table('regionables')->insert(['region_id'=>3484, 'regionable_id'=>33558, 'regionable_type'=>'village']); //Tamanan
                DB::table('regions')->insert(['id'=>3485, 'parent'=>3478, 'code'=>'66218', 'type'=>'village', 'name'=>'Village 66218, Districts 6621, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3485, 'regionable_id'=>33559, 'regionable_type'=>'village']); //Bago
                DB::table('regionables')->insert(['region_id'=>3485, 'regionable_id'=>33560, 'regionable_type'=>'village']); //Jepun
                DB::table('regions')->insert(['id'=>3486, 'parent'=>3478, 'code'=>'66219', 'type'=>'village', 'name'=>'Village 66219, Districts 6621, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3486, 'regionable_id'=>33561, 'regionable_type'=>'village']); //Kauman
                DB::table('regionables')->insert(['region_id'=>3486, 'regionable_id'=>33562, 'regionable_type'=>'village']); //Kepatihan
                DB::table('regionables')->insert(['region_id'=>3486, 'regionable_id'=>33563, 'regionable_type'=>'village']); //Sembung
            DB::table('regions')->insert(['id'=>3487, 'parent'=>3477, 'code'=>'6622', 'type'=>'districts', 'name'=>'Districts 6622, City 662, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3487, 'regionable_id'=>2938, 'regionable_type'=>'districts']); //Kedungwaru
                DB::table('regions')->insert(['id'=>3488, 'parent'=>3487, 'code'=>'66221', 'type'=>'village', 'name'=>'Village 66221, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3488, 'regionable_id'=>33564, 'regionable_type'=>'village']); //Plosokandang
                DB::table('regions')->insert(['id'=>3489, 'parent'=>3487, 'code'=>'66222', 'type'=>'village', 'name'=>'Village 66222, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3489, 'regionable_id'=>33565, 'regionable_type'=>'village']); //Tunggulsari
                DB::table('regions')->insert(['id'=>3490, 'parent'=>3487, 'code'=>'66223', 'type'=>'village', 'name'=>'Village 66223, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3490, 'regionable_id'=>33566, 'regionable_type'=>'village']); //Ringinpitu
                DB::table('regions')->insert(['id'=>3491, 'parent'=>3487, 'code'=>'66224', 'type'=>'village', 'name'=>'Village 66224, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3491, 'regionable_id'=>33567, 'regionable_type'=>'village']); //Kedungwaru
                DB::table('regions')->insert(['id'=>3492, 'parent'=>3487, 'code'=>'66225', 'type'=>'village', 'name'=>'Village 66225, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3492, 'regionable_id'=>33568, 'regionable_type'=>'village']); //Rejoagung
                DB::table('regions')->insert(['id'=>3493, 'parent'=>3487, 'code'=>'66226', 'type'=>'village', 'name'=>'Village 66226, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3493, 'regionable_id'=>33569, 'regionable_type'=>'village']); //Ketanon
                DB::table('regions')->insert(['id'=>3494, 'parent'=>3487, 'code'=>'66227', 'type'=>'village', 'name'=>'Village 66227, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3494, 'regionable_id'=>33570, 'regionable_type'=>'village']); //Tawangsari
                DB::table('regions')->insert(['id'=>3495, 'parent'=>3487, 'code'=>'66228', 'type'=>'village', 'name'=>'Village 66228, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3495, 'regionable_id'=>33571, 'regionable_type'=>'village']); //Mangunsari
                DB::table('regions')->insert(['id'=>3496, 'parent'=>3487, 'code'=>'66229', 'type'=>'village', 'name'=>'Village 66229, Districts 6622, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33572, 'regionable_type'=>'village']); //Bangoan
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33573, 'regionable_type'=>'village']); //Boro
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33574, 'regionable_type'=>'village']); //Bulusari
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33575, 'regionable_type'=>'village']); //Gendingan
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33576, 'regionable_type'=>'village']); //Loderesan
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33577, 'regionable_type'=>'village']); //Majan
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33578, 'regionable_type'=>'village']); //Ngujang
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33579, 'regionable_type'=>'village']); //Plandaan
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33580, 'regionable_type'=>'village']); //Simo
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33581, 'regionable_type'=>'village']); //Tapan
                DB::table('regionables')->insert(['region_id'=>3496, 'regionable_id'=>33582, 'regionable_type'=>'village']); //Winong
            DB::table('regions')->insert(['id'=>3497, 'parent'=>3477, 'code'=>'6623', 'type'=>'districts', 'name'=>'Districts 6623, City 662, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3497, 'regionable_id'=>2939, 'regionable_type'=>'districts']); //Boyolangu
                DB::table('regions')->insert(['id'=>3498, 'parent'=>3497, 'code'=>'66231', 'type'=>'village', 'name'=>'Village 66231, Districts 6623, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3498, 'regionable_id'=>33583, 'regionable_type'=>'village']); //Gedangsewu
                DB::table('regions')->insert(['id'=>3499, 'parent'=>3497, 'code'=>'66232', 'type'=>'village', 'name'=>'Village 66232, Districts 6623, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3499, 'regionable_id'=>33584, 'regionable_type'=>'village']); //Sobontoro
                DB::table('regions')->insert(['id'=>3500, 'parent'=>3497, 'code'=>'66233', 'type'=>'village', 'name'=>'Village 66233, Districts 6623, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3500, 'regionable_id'=>33585, 'regionable_type'=>'village']); //Beji
                DB::table('regions')->insert(['id'=>3501, 'parent'=>3497, 'code'=>'66234', 'type'=>'village', 'name'=>'Village 66234, Districts 6623, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3501, 'regionable_id'=>33586, 'regionable_type'=>'village']); //Kepuh
                DB::table('regions')->insert(['id'=>3502, 'parent'=>3497, 'code'=>'66235', 'type'=>'village', 'name'=>'Village 66235, Districts 6623, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33587, 'regionable_type'=>'village']); //Bono
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33588, 'regionable_type'=>'village']); //Boyolangu
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33589, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33590, 'regionable_type'=>'village']); //Kendalbulur
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33591, 'regionable_type'=>'village']); //Moyoketen
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33592, 'regionable_type'=>'village']); //Ngranti
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33593, 'regionable_type'=>'village']); //Pucung Kidul
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33594, 'regionable_type'=>'village']); //Sanggrahan
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33595, 'regionable_type'=>'village']); //Serut
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33596, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33597, 'regionable_type'=>'village']); //Wajak Kidul
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33598, 'regionable_type'=>'village']); //Wajak Lor
                DB::table('regionables')->insert(['region_id'=>3502, 'regionable_id'=>33599, 'regionable_type'=>'village']); //Waung
            DB::table('regions')->insert(['id'=>3503, 'parent'=>3477, 'code'=>'6625', 'type'=>'districts', 'name'=>'Districts 6625, City 662, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3503, 'regionable_id'=>2940, 'regionable_type'=>'districts']); //Ngantru
            DB::table('regionables')->insert(['region_id'=>3503, 'regionable_id'=>2941, 'regionable_type'=>'districts']); //Karang Rejo
            DB::table('regionables')->insert(['region_id'=>3503, 'regionable_id'=>2942, 'regionable_type'=>'districts']); //Sendang
                DB::table('regions')->insert(['id'=>3504, 'parent'=>3503, 'code'=>'66254', 'type'=>'village', 'name'=>'Village 66254, Districts 6625, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33626, 'regionable_type'=>'village']); //Dono
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33627, 'regionable_type'=>'village']); //Geger
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33628, 'regionable_type'=>'village']); //Kedoyo
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33629, 'regionable_type'=>'village']); //Krosok
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33630, 'regionable_type'=>'village']); //Nglurup
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33631, 'regionable_type'=>'village']); //Nglutung
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33632, 'regionable_type'=>'village']); //Nyawangan
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33633, 'regionable_type'=>'village']); //Picisan
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33634, 'regionable_type'=>'village']); //Sendang
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33635, 'regionable_type'=>'village']); //Talang
                DB::table('regionables')->insert(['region_id'=>3504, 'regionable_id'=>33636, 'regionable_type'=>'village']); //Tugu
            DB::table('regions')->insert(['id'=>3505, 'parent'=>3477, 'code'=>'6626', 'type'=>'districts', 'name'=>'Districts 6626, City 662, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3505, 'regionable_id'=>2943, 'regionable_type'=>'districts']); //Kauman
            DB::table('regionables')->insert(['region_id'=>3505, 'regionable_id'=>2944, 'regionable_type'=>'districts']); //Pagerwojo
            DB::table('regionables')->insert(['region_id'=>3505, 'regionable_id'=>2945, 'regionable_type'=>'districts']); //Gondang
                DB::table('regions')->insert(['id'=>3506, 'parent'=>3505, 'code'=>'66263', 'type'=>'village', 'name'=>'Village 66263, Districts 6626, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33661, 'regionable_type'=>'village']); //Bendo
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33662, 'regionable_type'=>'village']); //Bendungan
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33663, 'regionable_type'=>'village']); //Blendis
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33664, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33665, 'regionable_type'=>'village']); //Gondang
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33666, 'regionable_type'=>'village']); //Gondosuli
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33667, 'regionable_type'=>'village']); //Jarakan
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33668, 'regionable_type'=>'village']); //Kendal
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33669, 'regionable_type'=>'village']); //Kiping
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33670, 'regionable_type'=>'village']); //Macanbang
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33671, 'regionable_type'=>'village']); //Mojoarum
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33672, 'regionable_type'=>'village']); //Ngrendeng
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33673, 'regionable_type'=>'village']); //Notorejo
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33674, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33675, 'regionable_type'=>'village']); //Sepatan
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33676, 'regionable_type'=>'village']); //Sidem
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33677, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33678, 'regionable_type'=>'village']); //Tawing
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33679, 'regionable_type'=>'village']); //Tiudan
                DB::table('regionables')->insert(['region_id'=>3506, 'regionable_id'=>33680, 'regionable_type'=>'village']); //Wonokromo
            DB::table('regions')->insert(['id'=>3507, 'parent'=>3477, 'code'=>'6627', 'type'=>'districts', 'name'=>'Districts 6627, City 662, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3507, 'regionable_id'=>2946, 'regionable_type'=>'districts']); //Campur Darat
            DB::table('regionables')->insert(['region_id'=>3507, 'regionable_id'=>2947, 'regionable_type'=>'districts']); //Pakel
            DB::table('regionables')->insert(['region_id'=>3507, 'regionable_id'=>2948, 'regionable_type'=>'districts']); //Bandung
            DB::table('regionables')->insert(['region_id'=>3507, 'regionable_id'=>2949, 'regionable_type'=>'districts']); //Besuki
                DB::table('regions')->insert(['id'=>3508, 'parent'=>3507, 'code'=>'66275', 'type'=>'village', 'name'=>'Village 66275, Districts 6627, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33727, 'regionable_type'=>'village']); //Besole
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33728, 'regionable_type'=>'village']); //Besuki
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33729, 'regionable_type'=>'village']); //Keboireng
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33730, 'regionable_type'=>'village']); //Sedayugunung
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33731, 'regionable_type'=>'village']); //Siyotobagus
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33732, 'regionable_type'=>'village']); //Tanggulkundung
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33733, 'regionable_type'=>'village']); //Tanggulturus
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33734, 'regionable_type'=>'village']); //Tanggulwelahan
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33735, 'regionable_type'=>'village']); //Tulungrejo
                DB::table('regionables')->insert(['region_id'=>3508, 'regionable_id'=>33736, 'regionable_type'=>'village']); //Wateskroyo
            DB::table('regions')->insert(['id'=>3509, 'parent'=>3477, 'code'=>'6628', 'type'=>'districts', 'name'=>'Districts 6628, City 662, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3509, 'regionable_id'=>2950, 'regionable_type'=>'districts']); //Kalidawir
            DB::table('regionables')->insert(['region_id'=>3509, 'regionable_id'=>2951, 'regionable_type'=>'districts']); //Tanggung Gunung
            DB::table('regionables')->insert(['region_id'=>3509, 'regionable_id'=>2952, 'regionable_type'=>'districts']); //Pucanglaban
                DB::table('regions')->insert(['id'=>3510, 'parent'=>3509, 'code'=>'66284', 'type'=>'village', 'name'=>'Village 66284, Districts 6628, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33761, 'regionable_type'=>'village']); //Demuk
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33762, 'regionable_type'=>'village']); //Kalidawe
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33763, 'regionable_type'=>'village']); //Kaligentong
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33764, 'regionable_type'=>'village']); //Manding
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33765, 'regionable_type'=>'village']); //Panggungkalak
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33766, 'regionable_type'=>'village']); //Panggunguni
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33767, 'regionable_type'=>'village']); //Pucanglaban
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33768, 'regionable_type'=>'village']); //Sumberbendo
                DB::table('regionables')->insert(['region_id'=>3510, 'regionable_id'=>33769, 'regionable_type'=>'village']); //Sumberdadap
            DB::table('regions')->insert(['id'=>3511, 'parent'=>3477, 'code'=>'6629', 'type'=>'districts', 'name'=>'Districts 6629, City 662, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3511, 'regionable_id'=>2953, 'regionable_type'=>'districts']); //Sumbergempol
            DB::table('regionables')->insert(['region_id'=>3511, 'regionable_id'=>2954, 'regionable_type'=>'districts']); //Ngunut
            DB::table('regionables')->insert(['region_id'=>3511, 'regionable_id'=>2955, 'regionable_type'=>'districts']); //Rejotangan
                DB::table('regions')->insert(['id'=>3512, 'parent'=>3511, 'code'=>'66293', 'type'=>'village', 'name'=>'Village 66293, Districts 6629, City 662, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33805, 'regionable_type'=>'village']); //Aryojeding
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33806, 'regionable_type'=>'village']); //Banjarejo
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33807, 'regionable_type'=>'village']); //Blimbing
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33808, 'regionable_type'=>'village']); //Buntaran
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33809, 'regionable_type'=>'village']); //Jatidowo
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33810, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33811, 'regionable_type'=>'village']); //Pakisrejo
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33812, 'regionable_type'=>'village']); //Panjerejo
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33813, 'regionable_type'=>'village']); //Rejotangan
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33814, 'regionable_type'=>'village']); //Sukorejo Wetan
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33815, 'regionable_type'=>'village']); //Sumberagung
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33816, 'regionable_type'=>'village']); //Tanen
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33817, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33818, 'regionable_type'=>'village']); //Tenggong
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33819, 'regionable_type'=>'village']); //Tenggur
                DB::table('regionables')->insert(['region_id'=>3512, 'regionable_id'=>33820, 'regionable_type'=>'village']); //Tugu
        DB::table('regions')->insert(['id'=>3513, 'parent'=>2996, 'code'=>'663', 'type'=>'city', 'name'=>'City 663, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3513, 'regionable_id'=>149, 'regionable_type'=>'city']); //Trenggalek regencies
            DB::table('regions')->insert(['id'=>3514, 'parent'=>3513, 'code'=>'6631', 'type'=>'districts', 'name'=>'Districts 6631, City 663, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3514, 'regionable_id'=>2956, 'regionable_type'=>'districts']); //Trenggalek
            DB::table('regionables')->insert(['region_id'=>3514, 'regionable_id'=>2957, 'regionable_type'=>'districts']); //Tugu
                DB::table('regions')->insert(['id'=>3515, 'parent'=>3514, 'code'=>'66318', 'type'=>'village', 'name'=>'Village 66318, Districts 6631, City 663, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3515, 'regionable_id'=>33829, 'regionable_type'=>'village']); //Dawuhan
                DB::table('regionables')->insert(['region_id'=>3515, 'regionable_id'=>33830, 'regionable_type'=>'village']); //Sukosari
                DB::table('regionables')->insert(['region_id'=>3515, 'regionable_id'=>33834, 'regionable_type'=>'village']); //Banaran
            DB::table('regions')->insert(['id'=>3516, 'parent'=>3513, 'code'=>'6635', 'type'=>'districts', 'name'=>'Districts 6635, City 663, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3516, 'regionable_id'=>2957, 'regionable_type'=>'districts']); //Tugu
            DB::table('regionables')->insert(['region_id'=>3516, 'regionable_id'=>2958, 'regionable_type'=>'districts']); //Bendungan
                DB::table('regions')->insert(['id'=>3517, 'parent'=>3516, 'code'=>'66351', 'type'=>'village', 'name'=>'Village 66351, Districts 6635, City 663, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3517, 'regionable_id'=>33849, 'regionable_type'=>'village']); //Botoputih
                DB::table('regionables')->insert(['region_id'=>3517, 'regionable_id'=>33850, 'regionable_type'=>'village']); //Depok
                DB::table('regionables')->insert(['region_id'=>3517, 'regionable_id'=>33851, 'regionable_type'=>'village']); //Dompyong
                DB::table('regionables')->insert(['region_id'=>3517, 'regionable_id'=>33852, 'regionable_type'=>'village']); //Masaran
                DB::table('regionables')->insert(['region_id'=>3517, 'regionable_id'=>33853, 'regionable_type'=>'village']); //Sengon
                DB::table('regionables')->insert(['region_id'=>3517, 'regionable_id'=>33854, 'regionable_type'=>'village']); //Srabah
                DB::table('regionables')->insert(['region_id'=>3517, 'regionable_id'=>33855, 'regionable_type'=>'village']); //Sumurup
                DB::table('regionables')->insert(['region_id'=>3517, 'regionable_id'=>33856, 'regionable_type'=>'village']); //Surenlor
            DB::table('regions')->insert(['id'=>3518, 'parent'=>3513, 'code'=>'6636', 'type'=>'districts', 'name'=>'Districts 6636, City 663, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3518, 'regionable_id'=>2959, 'regionable_type'=>'districts']); //Karangan
            DB::table('regionables')->insert(['region_id'=>3518, 'regionable_id'=>2960, 'regionable_type'=>'districts']); //Suruh
            DB::table('regionables')->insert(['region_id'=>3518, 'regionable_id'=>2961, 'regionable_type'=>'districts']); //Pule
            DB::table('regionables')->insert(['region_id'=>3518, 'regionable_id'=>2962, 'regionable_type'=>'districts']); //Dongko
            DB::table('regionables')->insert(['region_id'=>3518, 'regionable_id'=>2963, 'regionable_type'=>'districts']); //Panggul
            DB::table('regionables')->insert(['region_id'=>3518, 'regionable_id'=>2964, 'regionable_type'=>'districts']); //Munjungan
                DB::table('regions')->insert(['id'=>3519, 'parent'=>3518, 'code'=>'66365', 'type'=>'village', 'name'=>'Village 66365, Districts 6636, City 663, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33913, 'regionable_type'=>'village']); //Bangun
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33914, 'regionable_type'=>'village']); //Bendoroto
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33915, 'regionable_type'=>'village']); //Besuki
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33916, 'regionable_type'=>'village']); //Craken
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33917, 'regionable_type'=>'village']); //Karangturi
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33918, 'regionable_type'=>'village']); //Masaran
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33919, 'regionable_type'=>'village']); //Munjungan
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33920, 'regionable_type'=>'village']); //Ngulungkulon
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33921, 'regionable_type'=>'village']); //Ngulungwetan
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33922, 'regionable_type'=>'village']); //Sobo
                DB::table('regionables')->insert(['region_id'=>3519, 'regionable_id'=>33923, 'regionable_type'=>'village']); //Tawing
            DB::table('regions')->insert(['id'=>3520, 'parent'=>3513, 'code'=>'6637', 'type'=>'districts', 'name'=>'Districts 6637, City 663, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3520, 'regionable_id'=>2965, 'regionable_type'=>'districts']); //Pogalan
            DB::table('regionables')->insert(['region_id'=>3520, 'regionable_id'=>2966, 'regionable_type'=>'districts']); //Gandusari
            DB::table('regionables')->insert(['region_id'=>3520, 'regionable_id'=>2967, 'regionable_type'=>'districts']); //Kampak
                DB::table('regions')->insert(['id'=>3521, 'parent'=>3520, 'code'=>'66373', 'type'=>'village', 'name'=>'Village 66373, Districts 6637, City 663, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3521, 'regionable_id'=>33945, 'regionable_type'=>'village']); //Bendoagung
                DB::table('regionables')->insert(['region_id'=>3521, 'regionable_id'=>33946, 'regionable_type'=>'village']); //Bogoran
                DB::table('regionables')->insert(['region_id'=>3521, 'regionable_id'=>33947, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>3521, 'regionable_id'=>33948, 'regionable_type'=>'village']); //Ngadimulyo
                DB::table('regionables')->insert(['region_id'=>3521, 'regionable_id'=>33949, 'regionable_type'=>'village']); //Senden
                DB::table('regionables')->insert(['region_id'=>3521, 'regionable_id'=>33950, 'regionable_type'=>'village']); //Sugihan
                DB::table('regionables')->insert(['region_id'=>3521, 'regionable_id'=>33951, 'regionable_type'=>'village']); //Timahan
            DB::table('regions')->insert(['id'=>3522, 'parent'=>3513, 'code'=>'6638', 'type'=>'districts', 'name'=>'Districts 6638, City 663, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3522, 'regionable_id'=>2968, 'regionable_type'=>'districts']); //Durenan
            DB::table('regionables')->insert(['region_id'=>3522, 'regionable_id'=>2969, 'regionable_type'=>'districts']); //Watulimo
                DB::table('regions')->insert(['id'=>3523, 'parent'=>3522, 'code'=>'66382', 'type'=>'village', 'name'=>'Village 66382, Districts 6638, City 663, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33966, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33967, 'regionable_type'=>'village']); //Gemaharjo
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33968, 'regionable_type'=>'village']); //Karanggandu
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33969, 'regionable_type'=>'village']); //Margomulyo
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33970, 'regionable_type'=>'village']); //Ngembel
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33971, 'regionable_type'=>'village']); //Pakel
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33972, 'regionable_type'=>'village']); //Prigi
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33973, 'regionable_type'=>'village']); //Sawahan
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33974, 'regionable_type'=>'village']); //Slawe
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33975, 'regionable_type'=>'village']); //Tasikmadu
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33976, 'regionable_type'=>'village']); //Watuagung
                DB::table('regionables')->insert(['region_id'=>3523, 'regionable_id'=>33977, 'regionable_type'=>'village']); //Watulimo
        DB::table('regions')->insert(['id'=>3524, 'parent'=>2996, 'code'=>'671', 'type'=>'city', 'name'=>'City 671, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3524, 'regionable_id'=>150, 'regionable_type'=>'city']); //Pasuruan city
        DB::table('regionables')->insert(['region_id'=>3524, 'regionable_id'=>151, 'regionable_type'=>'city']); //Pasuruan regencies
            DB::table('regions')->insert(['id'=>3525, 'parent'=>3524, 'code'=>'6711', 'type'=>'districts', 'name'=>'Districts 6711, City 671, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3525, 'regionable_id'=>2970, 'regionable_type'=>'districts']); //Panggungrejo
            DB::table('regionables')->insert(['region_id'=>3525, 'regionable_id'=>2971, 'regionable_type'=>'districts']); //Purworejo
            DB::table('regionables')->insert(['region_id'=>3525, 'regionable_id'=>2998, 'regionable_type'=>'districts']); //Panggungrejo
            DB::table('regionables')->insert(['region_id'=>3525, 'regionable_id'=>2999, 'regionable_type'=>'districts']); //Purworejo
                DB::table('regions')->insert(['id'=>3526, 'parent'=>3525, 'code'=>'67115', 'type'=>'village', 'name'=>'Village 67115, Districts 6711, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3526, 'regionable_id'=>33991, 'regionable_type'=>'village']); //Purworejo
                DB::table('regionables')->insert(['region_id'=>3526, 'regionable_id'=>34390, 'regionable_type'=>'village']); //Purworejo
                DB::table('regions')->insert(['id'=>3527, 'parent'=>3525, 'code'=>'67116', 'type'=>'village', 'name'=>'Village 67116, Districts 6711, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3527, 'regionable_id'=>33992, 'regionable_type'=>'village']); //Kebonagung
                DB::table('regionables')->insert(['region_id'=>3527, 'regionable_id'=>34391, 'regionable_type'=>'village']); //Kebonagung
                DB::table('regions')->insert(['id'=>3528, 'parent'=>3525, 'code'=>'67117', 'type'=>'village', 'name'=>'Village 67117, Districts 6711, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3528, 'regionable_id'=>33993, 'regionable_type'=>'village']); //Purutrejo
                DB::table('regionables')->insert(['region_id'=>3528, 'regionable_id'=>34392, 'regionable_type'=>'village']); //Purutrejo
                DB::table('regions')->insert(['id'=>3529, 'parent'=>3525, 'code'=>'67118', 'type'=>'village', 'name'=>'Village 67118, Districts 6711, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3529, 'regionable_id'=>33994, 'regionable_type'=>'village']); //Tembokrejo
                DB::table('regionables')->insert(['region_id'=>3529, 'regionable_id'=>33995, 'regionable_type'=>'village']); //Wirogunan
                DB::table('regionables')->insert(['region_id'=>3529, 'regionable_id'=>34393, 'regionable_type'=>'village']); //Tembokrejo
                DB::table('regionables')->insert(['region_id'=>3529, 'regionable_id'=>34394, 'regionable_type'=>'village']); //Wirogunan
            DB::table('regions')->insert(['id'=>3530, 'parent'=>3524, 'code'=>'6712', 'type'=>'districts', 'name'=>'Districts 6712, City 671, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3530, 'regionable_id'=>2970, 'regionable_type'=>'districts']); //Panggungrejo
            DB::table('regionables')->insert(['region_id'=>3530, 'regionable_id'=>2971, 'regionable_type'=>'districts']); //Purworejo
            DB::table('regionables')->insert(['region_id'=>3530, 'regionable_id'=>2972, 'regionable_type'=>'districts']); //Bugul Kidul
            DB::table('regionables')->insert(['region_id'=>3530, 'regionable_id'=>2998, 'regionable_type'=>'districts']); //Panggungrejo
            DB::table('regionables')->insert(['region_id'=>3530, 'regionable_id'=>2999, 'regionable_type'=>'districts']); //Purworejo
            DB::table('regionables')->insert(['region_id'=>3530, 'regionable_id'=>3000, 'regionable_type'=>'districts']); //Bugul Kidul
                DB::table('regions')->insert(['id'=>3531, 'parent'=>3530, 'code'=>'67127', 'type'=>'village', 'name'=>'Village 67127, Districts 6712, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3531, 'regionable_id'=>33996, 'regionable_type'=>'village']); //Sekargadung
                DB::table('regionables')->insert(['region_id'=>3531, 'regionable_id'=>33998, 'regionable_type'=>'village']); //Krampyangan
                DB::table('regionables')->insert(['region_id'=>3531, 'regionable_id'=>34395, 'regionable_type'=>'village']); //Sekargadung
                DB::table('regionables')->insert(['region_id'=>3531, 'regionable_id'=>34397, 'regionable_type'=>'village']); //Krampyangan
                DB::table('regions')->insert(['id'=>3532, 'parent'=>3530, 'code'=>'67128', 'type'=>'village', 'name'=>'Village 67128, Districts 6712, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3532, 'regionable_id'=>33999, 'regionable_type'=>'village']); //Bakalan
                DB::table('regionables')->insert(['region_id'=>3532, 'regionable_id'=>34000, 'regionable_type'=>'village']); //Blandongan
                DB::table('regionables')->insert(['region_id'=>3532, 'regionable_id'=>34398, 'regionable_type'=>'village']); //Bakalan
                DB::table('regionables')->insert(['region_id'=>3532, 'regionable_id'=>34399, 'regionable_type'=>'village']); //Blandongan
                DB::table('regions')->insert(['id'=>3533, 'parent'=>3530, 'code'=>'67129', 'type'=>'village', 'name'=>'Village 67129, Districts 6712, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3533, 'regionable_id'=>33987, 'regionable_type'=>'village']); //Bugul Lor
                DB::table('regionables')->insert(['region_id'=>3533, 'regionable_id'=>34001, 'regionable_type'=>'village']); //Bugul Kidul
                DB::table('regionables')->insert(['region_id'=>3533, 'regionable_id'=>34002, 'regionable_type'=>'village']); //Kepel
                DB::table('regionables')->insert(['region_id'=>3533, 'regionable_id'=>34003, 'regionable_type'=>'village']); //Tapaan
                DB::table('regionables')->insert(['region_id'=>3533, 'regionable_id'=>34386, 'regionable_type'=>'village']); //Bugul Lor
                DB::table('regionables')->insert(['region_id'=>3533, 'regionable_id'=>34400, 'regionable_type'=>'village']); //Bugul Kidul
                DB::table('regionables')->insert(['region_id'=>3533, 'regionable_id'=>34401, 'regionable_type'=>'village']); //Kepel
                DB::table('regionables')->insert(['region_id'=>3533, 'regionable_id'=>34402, 'regionable_type'=>'village']); //Tapaan
            DB::table('regions')->insert(['id'=>3534, 'parent'=>3524, 'code'=>'6713', 'type'=>'districts', 'name'=>'Districts 6713, City 671, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3534, 'regionable_id'=>2970, 'regionable_type'=>'districts']); //Panggungrejo
            DB::table('regionables')->insert(['region_id'=>3534, 'regionable_id'=>2973, 'regionable_type'=>'districts']); //Gadingrejo
            DB::table('regionables')->insert(['region_id'=>3534, 'regionable_id'=>2998, 'regionable_type'=>'districts']); //Panggungrejo
            DB::table('regionables')->insert(['region_id'=>3534, 'regionable_id'=>3001, 'regionable_type'=>'districts']); //Gadingrejo
                DB::table('regions')->insert(['id'=>3535, 'parent'=>3534, 'code'=>'67134', 'type'=>'village', 'name'=>'Village 67134, Districts 6713, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3535, 'regionable_id'=>34004, 'regionable_type'=>'village']); //Gadingrejo
                DB::table('regionables')->insert(['region_id'=>3535, 'regionable_id'=>34403, 'regionable_type'=>'village']); //Gadingrejo
                DB::table('regions')->insert(['id'=>3536, 'parent'=>3534, 'code'=>'67135', 'type'=>'village', 'name'=>'Village 67135, Districts 6713, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3536, 'regionable_id'=>34005, 'regionable_type'=>'village']); //Karangketug
                DB::table('regionables')->insert(['region_id'=>3536, 'regionable_id'=>34404, 'regionable_type'=>'village']); //Karangketug
                DB::table('regions')->insert(['id'=>3537, 'parent'=>3534, 'code'=>'67136', 'type'=>'village', 'name'=>'Village 67136, Districts 6713, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3537, 'regionable_id'=>34006, 'regionable_type'=>'village']); //Petahunan
                DB::table('regionables')->insert(['region_id'=>3537, 'regionable_id'=>34007, 'regionable_type'=>'village']); //Randusari
                DB::table('regionables')->insert(['region_id'=>3537, 'regionable_id'=>34405, 'regionable_type'=>'village']); //Petahunan
                DB::table('regionables')->insert(['region_id'=>3537, 'regionable_id'=>34406, 'regionable_type'=>'village']); //Randusari
                DB::table('regions')->insert(['id'=>3538, 'parent'=>3534, 'code'=>'67137', 'type'=>'village', 'name'=>'Village 67137, Districts 6713, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3538, 'regionable_id'=>34008, 'regionable_type'=>'village']); //Krapyakrejo
                DB::table('regionables')->insert(['region_id'=>3538, 'regionable_id'=>34407, 'regionable_type'=>'village']); //Krapyakrejo
                DB::table('regions')->insert(['id'=>3539, 'parent'=>3534, 'code'=>'67138', 'type'=>'village', 'name'=>'Village 67138, Districts 6713, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3539, 'regionable_id'=>34009, 'regionable_type'=>'village']); //Bukir
                DB::table('regionables')->insert(['region_id'=>3539, 'regionable_id'=>34408, 'regionable_type'=>'village']); //Bukir
                DB::table('regions')->insert(['id'=>3540, 'parent'=>3534, 'code'=>'67139', 'type'=>'village', 'name'=>'Village 67139, Districts 6713, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3540, 'regionable_id'=>34010, 'regionable_type'=>'village']); //Gentong
                DB::table('regionables')->insert(['region_id'=>3540, 'regionable_id'=>34011, 'regionable_type'=>'village']); //Sebani
                DB::table('regionables')->insert(['region_id'=>3540, 'regionable_id'=>34409, 'regionable_type'=>'village']); //Gentong
                DB::table('regionables')->insert(['region_id'=>3540, 'regionable_id'=>34410, 'regionable_type'=>'village']); //Sebani
            DB::table('regions')->insert(['id'=>3541, 'parent'=>3524, 'code'=>'6715', 'type'=>'districts', 'name'=>'Districts 6715, City 671, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>2974, 'regionable_type'=>'districts']); //Kraton
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>2975, 'regionable_type'=>'districts']); //Rembang
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>2976, 'regionable_type'=>'districts']); //Bangil
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>2977, 'regionable_type'=>'districts']); //Beji
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>2978, 'regionable_type'=>'districts']); //Gempol
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>2979, 'regionable_type'=>'districts']); //Pandaan
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>2980, 'regionable_type'=>'districts']); //Prigen
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>3002, 'regionable_type'=>'districts']); //Kraton
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>3003, 'regionable_type'=>'districts']); //Rembang
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>3004, 'regionable_type'=>'districts']); //Bangil
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>3005, 'regionable_type'=>'districts']); //Beji
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>3006, 'regionable_type'=>'districts']); //Gempol
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>3007, 'regionable_type'=>'districts']); //Pandaan
            DB::table('regionables')->insert(['region_id'=>3541, 'regionable_id'=>3008, 'regionable_type'=>'districts']); //Prigen
                DB::table('regions')->insert(['id'=>3542, 'parent'=>3541, 'code'=>'67157', 'type'=>'village', 'name'=>'Village 67157, Districts 6715, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34116, 'regionable_type'=>'village']); //Bulukandang
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34117, 'regionable_type'=>'village']); //Candi Wates
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34118, 'regionable_type'=>'village']); //Dayurejo
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34119, 'regionable_type'=>'village']); //Gambiran
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34120, 'regionable_type'=>'village']); //Jatiarjo
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34121, 'regionable_type'=>'village']); //Ketanireng
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34122, 'regionable_type'=>'village']); //Ledug
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34123, 'regionable_type'=>'village']); //Lumbang Rejo
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34124, 'regionable_type'=>'village']); //Pecalukan
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34125, 'regionable_type'=>'village']); //Prigen
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34126, 'regionable_type'=>'village']); //Sekarjoho
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34127, 'regionable_type'=>'village']); //Sukolelo
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34128, 'regionable_type'=>'village']); //Sukoreno
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34129, 'regionable_type'=>'village']); //Watuagung
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34515, 'regionable_type'=>'village']); //Bulukandang
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34516, 'regionable_type'=>'village']); //Candi Wates
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34517, 'regionable_type'=>'village']); //Dayurejo
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34518, 'regionable_type'=>'village']); //Gambiran
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34519, 'regionable_type'=>'village']); //Jatiarjo
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34520, 'regionable_type'=>'village']); //Ketanireng
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34521, 'regionable_type'=>'village']); //Ledug
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34522, 'regionable_type'=>'village']); //Lumbang Rejo
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34523, 'regionable_type'=>'village']); //Pecalukan
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34524, 'regionable_type'=>'village']); //Prigen
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34525, 'regionable_type'=>'village']); //Sekarjoho
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34526, 'regionable_type'=>'village']); //Sukolelo
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34527, 'regionable_type'=>'village']); //Sukoreno
                DB::table('regionables')->insert(['region_id'=>3542, 'regionable_id'=>34528, 'regionable_type'=>'village']); //Watuagung
            DB::table('regions')->insert(['id'=>3543, 'parent'=>3524, 'code'=>'6716', 'type'=>'districts', 'name'=>'Districts 6716, City 671, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3543, 'regionable_id'=>2981, 'regionable_type'=>'districts']); //Sukorejo
            DB::table('regionables')->insert(['region_id'=>3543, 'regionable_id'=>2982, 'regionable_type'=>'districts']); //Purwosari
            DB::table('regionables')->insert(['region_id'=>3543, 'regionable_id'=>2983, 'regionable_type'=>'districts']); //Purwodadi
            DB::table('regionables')->insert(['region_id'=>3543, 'regionable_id'=>2984, 'regionable_type'=>'districts']); //Tutur
            DB::table('regionables')->insert(['region_id'=>3543, 'regionable_id'=>3009, 'regionable_type'=>'districts']); //Sukorejo
            DB::table('regionables')->insert(['region_id'=>3543, 'regionable_id'=>3010, 'regionable_type'=>'districts']); //Purwosari
            DB::table('regionables')->insert(['region_id'=>3543, 'regionable_id'=>3011, 'regionable_type'=>'districts']); //Purwodadi
            DB::table('regionables')->insert(['region_id'=>3543, 'regionable_id'=>3012, 'regionable_type'=>'districts']); //Tutur
                DB::table('regions')->insert(['id'=>3544, 'parent'=>3543, 'code'=>'67165', 'type'=>'village', 'name'=>'Village 67165, Districts 6716, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34177, 'regionable_type'=>'village']); //Andono Sari
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34178, 'regionable_type'=>'village']); //Blarang
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34179, 'regionable_type'=>'village']); //Gendro
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34180, 'regionable_type'=>'village']); //Kali Pucang
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34181, 'regionable_type'=>'village']); //Kayu Kebek
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34182, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34183, 'regionable_type'=>'village']); //Ngembal
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34184, 'regionable_type'=>'village']); //Pungging
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34185, 'regionable_type'=>'village']); //Sumber Pitu
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34186, 'regionable_type'=>'village']); //Tlogosari
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34187, 'regionable_type'=>'village']); //Tutur
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34188, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34576, 'regionable_type'=>'village']); //Andono Sari
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34577, 'regionable_type'=>'village']); //Blarang
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34578, 'regionable_type'=>'village']); //Gendro
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34579, 'regionable_type'=>'village']); //Kali Pucang
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34580, 'regionable_type'=>'village']); //Kayu Kebek
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34581, 'regionable_type'=>'village']); //Ngadirejo
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34582, 'regionable_type'=>'village']); //Ngembal
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34583, 'regionable_type'=>'village']); //Pungging
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34584, 'regionable_type'=>'village']); //Sumber Pitu
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34585, 'regionable_type'=>'village']); //Tlogosari
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34586, 'regionable_type'=>'village']); //Tutur
                DB::table('regionables')->insert(['region_id'=>3544, 'regionable_id'=>34587, 'regionable_type'=>'village']); //Wonosari
            DB::table('regions')->insert(['id'=>3545, 'parent'=>3524, 'code'=>'6717', 'type'=>'districts', 'name'=>'Districts 6717, City 671, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2971, 'regionable_type'=>'districts']); //Purworejo
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2985, 'regionable_type'=>'districts']); //Pohjentrek
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2986, 'regionable_type'=>'districts']); //Kejayan
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2987, 'regionable_type'=>'districts']); //Wonorejo
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2988, 'regionable_type'=>'districts']); //Gondang Wetan
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2989, 'regionable_type'=>'districts']); //Pasrepan
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2990, 'regionable_type'=>'districts']); //Puspo
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2991, 'regionable_type'=>'districts']); //Tosari
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>2999, 'regionable_type'=>'districts']); //Purworejo
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>3013, 'regionable_type'=>'districts']); //Pohjentrek
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>3014, 'regionable_type'=>'districts']); //Kejayan
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>3015, 'regionable_type'=>'districts']); //Wonorejo
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>3016, 'regionable_type'=>'districts']); //Gondang Wetan
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>3017, 'regionable_type'=>'districts']); //Pasrepan
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>3018, 'regionable_type'=>'districts']); //Puspo
            DB::table('regionables')->insert(['region_id'=>3545, 'regionable_id'=>3019, 'regionable_type'=>'districts']); //Tosari
                DB::table('regions')->insert(['id'=>3546, 'parent'=>3545, 'code'=>'67177', 'type'=>'village', 'name'=>'Village 67177, Districts 6717, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34282, 'regionable_type'=>'village']); //Baledono
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34283, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34284, 'regionable_type'=>'village']); //Mororejo
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34285, 'regionable_type'=>'village']); //Ngadiwono
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34286, 'regionable_type'=>'village']); //Podokoyo
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34287, 'regionable_type'=>'village']); //Sedaeng
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34288, 'regionable_type'=>'village']); //Tosari
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34289, 'regionable_type'=>'village']); //Wonokitri
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34681, 'regionable_type'=>'village']); //Baledono
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34682, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34683, 'regionable_type'=>'village']); //Mororejo
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34684, 'regionable_type'=>'village']); //Ngadiwono
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34685, 'regionable_type'=>'village']); //Podokoyo
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34686, 'regionable_type'=>'village']); //Sedaeng
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34687, 'regionable_type'=>'village']); //Tosari
                DB::table('regionables')->insert(['region_id'=>3546, 'regionable_id'=>34688, 'regionable_type'=>'village']); //Wonokitri
            DB::table('regions')->insert(['id'=>3547, 'parent'=>3524, 'code'=>'6718', 'type'=>'districts', 'name'=>'Districts 6718, City 671, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>2992, 'regionable_type'=>'districts']); //Rejoso
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>2993, 'regionable_type'=>'districts']); //Winongan
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>2994, 'regionable_type'=>'districts']); //Lumbang
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>2995, 'regionable_type'=>'districts']); //Grati
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>2996, 'regionable_type'=>'districts']); //Nguling
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>2997, 'regionable_type'=>'districts']); //Lekok
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>3020, 'regionable_type'=>'districts']); //Rejoso
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>3021, 'regionable_type'=>'districts']); //Winongan
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>3022, 'regionable_type'=>'districts']); //Lumbang
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>3023, 'regionable_type'=>'districts']); //Grati
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>3024, 'regionable_type'=>'districts']); //Nguling
            DB::table('regionables')->insert(['region_id'=>3547, 'regionable_id'=>3025, 'regionable_type'=>'districts']); //Lekok
                DB::table('regions')->insert(['id'=>3548, 'parent'=>3547, 'code'=>'67186', 'type'=>'village', 'name'=>'Village 67186, Districts 6718, City 671, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34366, 'regionable_type'=>'village']); //Alas Tlogo
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34367, 'regionable_type'=>'village']); //Balung Anyar
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34368, 'regionable_type'=>'village']); //Branang
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34369, 'regionable_type'=>'village']); //Gejug Jati
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34370, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34371, 'regionable_type'=>'village']); //Pasinan
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34372, 'regionable_type'=>'village']); //Rowo Gempol
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34373, 'regionable_type'=>'village']); //Semedusari
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34374, 'regionable_type'=>'village']); //Tambak Lekok
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34375, 'regionable_type'=>'village']); //Tampung
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34376, 'regionable_type'=>'village']); //Wates
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34765, 'regionable_type'=>'village']); //Alas Tlogo
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34766, 'regionable_type'=>'village']); //Balung Anyar
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34767, 'regionable_type'=>'village']); //Branang
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34768, 'regionable_type'=>'village']); //Gejug Jati
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34769, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34770, 'regionable_type'=>'village']); //Pasinan
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34771, 'regionable_type'=>'village']); //Rowo Gempol
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34772, 'regionable_type'=>'village']); //Semedusari
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34773, 'regionable_type'=>'village']); //Tambak Lekok
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34774, 'regionable_type'=>'village']); //Tampung
                DB::table('regionables')->insert(['region_id'=>3548, 'regionable_id'=>34775, 'regionable_type'=>'village']); //Wates
        DB::table('regions')->insert(['id'=>3549, 'parent'=>2996, 'code'=>'672', 'type'=>'city', 'name'=>'City 672, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3549, 'regionable_id'=>152, 'regionable_type'=>'city']); //Probolinggo city
        DB::table('regionables')->insert(['region_id'=>3549, 'regionable_id'=>153, 'regionable_type'=>'city']); //Probolinggo regencies
            DB::table('regions')->insert(['id'=>3550, 'parent'=>3549, 'code'=>'6721', 'type'=>'districts', 'name'=>'Districts 6721, City 672, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3550, 'regionable_id'=>3026, 'regionable_type'=>'districts']); //Kanigaran
            DB::table('regionables')->insert(['region_id'=>3550, 'regionable_id'=>3027, 'regionable_type'=>'districts']); //Mayangan
            DB::table('regionables')->insert(['region_id'=>3550, 'regionable_id'=>3055, 'regionable_type'=>'districts']); //Kanigaran
            DB::table('regionables')->insert(['region_id'=>3550, 'regionable_id'=>3056, 'regionable_type'=>'districts']); //Mayangan
                DB::table('regions')->insert(['id'=>3551, 'parent'=>3550, 'code'=>'67216', 'type'=>'village', 'name'=>'Village 67216, Districts 6721, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3551, 'regionable_id'=>34782, 'regionable_type'=>'village']); //Wiroborang
                DB::table('regionables')->insert(['region_id'=>3551, 'regionable_id'=>35141, 'regionable_type'=>'village']); //Wiroborang
                DB::table('regions')->insert(['id'=>3552, 'parent'=>3550, 'code'=>'67217', 'type'=>'village', 'name'=>'Village 67217, Districts 6721, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3552, 'regionable_id'=>34783, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>3552, 'regionable_id'=>34784, 'regionable_type'=>'village']); //Mangunharjo
                DB::table('regionables')->insert(['region_id'=>3552, 'regionable_id'=>35142, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>3552, 'regionable_id'=>35143, 'regionable_type'=>'village']); //Mangunharjo
                DB::table('regions')->insert(['id'=>3553, 'parent'=>3550, 'code'=>'67218', 'type'=>'village', 'name'=>'Village 67218, Districts 6721, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3553, 'regionable_id'=>34785, 'regionable_type'=>'village']); //Mayangan
                DB::table('regionables')->insert(['region_id'=>3553, 'regionable_id'=>35144, 'regionable_type'=>'village']); //Mayangan
                DB::table('regions')->insert(['id'=>3554, 'parent'=>3550, 'code'=>'67219', 'type'=>'village', 'name'=>'Village 67219, Districts 6721, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3554, 'regionable_id'=>34786, 'regionable_type'=>'village']); //Sukabumi
                DB::table('regionables')->insert(['region_id'=>3554, 'regionable_id'=>35145, 'regionable_type'=>'village']); //Sukabumi
            DB::table('regions')->insert(['id'=>3555, 'parent'=>3549, 'code'=>'6722', 'type'=>'districts', 'name'=>'Districts 6722, City 672, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3555, 'regionable_id'=>3028, 'regionable_type'=>'districts']); //Kademangan
            DB::table('regionables')->insert(['region_id'=>3555, 'regionable_id'=>3029, 'regionable_type'=>'districts']); //Kedopok (kedopak)
            DB::table('regionables')->insert(['region_id'=>3555, 'regionable_id'=>3057, 'regionable_type'=>'districts']); //Kademangan
            DB::table('regionables')->insert(['region_id'=>3555, 'regionable_id'=>3058, 'regionable_type'=>'districts']); //Kedopok (kedopak)
                DB::table('regions')->insert(['id'=>3556, 'parent'=>3555, 'code'=>'67227', 'type'=>'village', 'name'=>'Village 67227, Districts 6722, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3556, 'regionable_id'=>34793, 'regionable_type'=>'village']); //Sumber Wetan
                DB::table('regionables')->insert(['region_id'=>3556, 'regionable_id'=>35152, 'regionable_type'=>'village']); //Sumber Wetan
                DB::table('regions')->insert(['id'=>3557, 'parent'=>3555, 'code'=>'67228', 'type'=>'village', 'name'=>'Village 67228, Districts 6722, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3557, 'regionable_id'=>34794, 'regionable_type'=>'village']); //Kareng Lor
                DB::table('regionables')->insert(['region_id'=>3557, 'regionable_id'=>35153, 'regionable_type'=>'village']); //Kareng Lor
                DB::table('regions')->insert(['id'=>3558, 'parent'=>3555, 'code'=>'67229', 'type'=>'village', 'name'=>'Village 67229, Districts 6722, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3558, 'regionable_id'=>34795, 'regionable_type'=>'village']); //Jrebeng Kulon
                DB::table('regionables')->insert(['region_id'=>3558, 'regionable_id'=>35154, 'regionable_type'=>'village']); //Jrebeng Kulon
            DB::table('regions')->insert(['id'=>3559, 'parent'=>3549, 'code'=>'6723', 'type'=>'districts', 'name'=>'Districts 6723, City 672, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3559, 'regionable_id'=>3029, 'regionable_type'=>'districts']); //Kedopok (kedopak)
            DB::table('regionables')->insert(['region_id'=>3559, 'regionable_id'=>3030, 'regionable_type'=>'districts']); //Wonoasih
            DB::table('regionables')->insert(['region_id'=>3559, 'regionable_id'=>3058, 'regionable_type'=>'districts']); //Kedopok (kedopak)
            DB::table('regionables')->insert(['region_id'=>3559, 'regionable_id'=>3059, 'regionable_type'=>'districts']); //Wonoasih
                DB::table('regions')->insert(['id'=>3560, 'parent'=>3559, 'code'=>'67232', 'type'=>'village', 'name'=>'Village 67232, Districts 6723, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3560, 'regionable_id'=>34799, 'regionable_type'=>'village']); //Wonoasih
                DB::table('regionables')->insert(['region_id'=>3560, 'regionable_id'=>35158, 'regionable_type'=>'village']); //Wonoasih
                DB::table('regions')->insert(['id'=>3561, 'parent'=>3559, 'code'=>'67233', 'type'=>'village', 'name'=>'Village 67233, Districts 6723, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3561, 'regionable_id'=>34800, 'regionable_type'=>'village']); //Jrebeng Kidul
                DB::table('regionables')->insert(['region_id'=>3561, 'regionable_id'=>35159, 'regionable_type'=>'village']); //Jrebeng Kidul
                DB::table('regions')->insert(['id'=>3562, 'parent'=>3559, 'code'=>'67236', 'type'=>'village', 'name'=>'Village 67236, Districts 6723, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3562, 'regionable_id'=>34801, 'regionable_type'=>'village']); //Kedungasem
                DB::table('regionables')->insert(['region_id'=>3562, 'regionable_id'=>35160, 'regionable_type'=>'village']); //Kedungasem
                DB::table('regions')->insert(['id'=>3563, 'parent'=>3559, 'code'=>'67237', 'type'=>'village', 'name'=>'Village 67237, Districts 6723, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3563, 'regionable_id'=>34802, 'regionable_type'=>'village']); //Sumber Taman
                DB::table('regionables')->insert(['region_id'=>3563, 'regionable_id'=>35161, 'regionable_type'=>'village']); //Sumber Taman
                DB::table('regions')->insert(['id'=>3564, 'parent'=>3559, 'code'=>'67239', 'type'=>'village', 'name'=>'Village 67239, Districts 6723, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3564, 'regionable_id'=>34798, 'regionable_type'=>'village']); //Jrebeng Wetan
                DB::table('regionables')->insert(['region_id'=>3564, 'regionable_id'=>34803, 'regionable_type'=>'village']); //Kedunggaleng
                DB::table('regionables')->insert(['region_id'=>3564, 'regionable_id'=>34804, 'regionable_type'=>'village']); //Pakistaji
                DB::table('regionables')->insert(['region_id'=>3564, 'regionable_id'=>35157, 'regionable_type'=>'village']); //Jrebeng Wetan
                DB::table('regionables')->insert(['region_id'=>3564, 'regionable_id'=>35162, 'regionable_type'=>'village']); //Kedunggaleng
                DB::table('regionables')->insert(['region_id'=>3564, 'regionable_id'=>35163, 'regionable_type'=>'village']); //Pakistaji
            DB::table('regions')->insert(['id'=>3565, 'parent'=>3549, 'code'=>'6725', 'type'=>'districts', 'name'=>'Districts 6725, City 672, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3031, 'regionable_type'=>'districts']); //Sumberasih
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3032, 'regionable_type'=>'districts']); //Tongas
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3033, 'regionable_type'=>'districts']); //Wonomerto
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3034, 'regionable_type'=>'districts']); //Sukapura
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3035, 'regionable_type'=>'districts']); //Lumbang
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3060, 'regionable_type'=>'districts']); //Sumberasih
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3061, 'regionable_type'=>'districts']); //Tongas
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3062, 'regionable_type'=>'districts']); //Wonomerto
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3063, 'regionable_type'=>'districts']); //Sukapura
            DB::table('regionables')->insert(['region_id'=>3565, 'regionable_id'=>3064, 'regionable_type'=>'districts']); //Lumbang
                DB::table('regions')->insert(['id'=>3566, 'parent'=>3565, 'code'=>'67255', 'type'=>'village', 'name'=>'Village 67255, Districts 6725, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34855, 'regionable_type'=>'village']); //Boto
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34856, 'regionable_type'=>'village']); //Branggah
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34857, 'regionable_type'=>'village']); //Lambangkuning
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34858, 'regionable_type'=>'village']); //Lumbang
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34859, 'regionable_type'=>'village']); //Negororejo
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34860, 'regionable_type'=>'village']); //Palangbesi
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34861, 'regionable_type'=>'village']); //Purut
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34862, 'regionable_type'=>'village']); //Sapih
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34863, 'regionable_type'=>'village']); //Tandongsentul (tandon Sentul)
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>34864, 'regionable_type'=>'village']); //Wonogoro
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35214, 'regionable_type'=>'village']); //Boto
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35215, 'regionable_type'=>'village']); //Branggah
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35216, 'regionable_type'=>'village']); //Lambangkuning
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35217, 'regionable_type'=>'village']); //Lumbang
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35218, 'regionable_type'=>'village']); //Negororejo
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35219, 'regionable_type'=>'village']); //Palangbesi
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35220, 'regionable_type'=>'village']); //Purut
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35221, 'regionable_type'=>'village']); //Sapih
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35222, 'regionable_type'=>'village']); //Tandongsentul (tandon Sentul)
                DB::table('regionables')->insert(['region_id'=>3566, 'regionable_id'=>35223, 'regionable_type'=>'village']); //Wonogoro
            DB::table('regions')->insert(['id'=>3567, 'parent'=>3549, 'code'=>'6726', 'type'=>'districts', 'name'=>'Districts 6726, City 672, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3567, 'regionable_id'=>3036, 'regionable_type'=>'districts']); //Bantaran
            DB::table('regionables')->insert(['region_id'=>3567, 'regionable_id'=>3037, 'regionable_type'=>'districts']); //Kuripan
            DB::table('regionables')->insert(['region_id'=>3567, 'regionable_id'=>3038, 'regionable_type'=>'districts']); //Sumber
            DB::table('regionables')->insert(['region_id'=>3567, 'regionable_id'=>3065, 'regionable_type'=>'districts']); //Bantaran
            DB::table('regionables')->insert(['region_id'=>3567, 'regionable_id'=>3066, 'regionable_type'=>'districts']); //Kuripan
            DB::table('regionables')->insert(['region_id'=>3567, 'regionable_id'=>3067, 'regionable_type'=>'districts']); //Sumber
                DB::table('regions')->insert(['id'=>3568, 'parent'=>3567, 'code'=>'67263', 'type'=>'village', 'name'=>'Village 67263, Districts 6726, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34882, 'regionable_type'=>'village']); //Cepoko
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34883, 'regionable_type'=>'village']); //Gemito
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34884, 'regionable_type'=>'village']); //Ledokombo
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34885, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34886, 'regionable_type'=>'village']); //Rambaan
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34887, 'regionable_type'=>'village']); //Sumber
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34888, 'regionable_type'=>'village']); //Sumberanom
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34889, 'regionable_type'=>'village']); //Tukul
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>34890, 'regionable_type'=>'village']); //Wonokerso
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35241, 'regionable_type'=>'village']); //Cepoko
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35242, 'regionable_type'=>'village']); //Gemito
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35243, 'regionable_type'=>'village']); //Ledokombo
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35244, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35245, 'regionable_type'=>'village']); //Rambaan
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35246, 'regionable_type'=>'village']); //Sumber
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35247, 'regionable_type'=>'village']); //Sumberanom
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35248, 'regionable_type'=>'village']); //Tukul
                DB::table('regionables')->insert(['region_id'=>3568, 'regionable_id'=>35249, 'regionable_type'=>'village']); //Wonokerso
            DB::table('regions')->insert(['id'=>3569, 'parent'=>3549, 'code'=>'6727', 'type'=>'districts', 'name'=>'Districts 6727, City 672, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3039, 'regionable_type'=>'districts']); //Dringu
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3040, 'regionable_type'=>'districts']); //Gending
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3041, 'regionable_type'=>'districts']); //Leces
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3042, 'regionable_type'=>'districts']); //Tegal Siwalan
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3043, 'regionable_type'=>'districts']); //Banyu Anyar
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3044, 'regionable_type'=>'districts']); //Maron
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3068, 'regionable_type'=>'districts']); //Dringu
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3069, 'regionable_type'=>'districts']); //Gending
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3070, 'regionable_type'=>'districts']); //Leces
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3071, 'regionable_type'=>'districts']); //Tegal Siwalan
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3072, 'regionable_type'=>'districts']); //Banyu Anyar
            DB::table('regionables')->insert(['region_id'=>3569, 'regionable_id'=>3073, 'regionable_type'=>'districts']); //Maron
                DB::table('regions')->insert(['id'=>3570, 'parent'=>3569, 'code'=>'67276', 'type'=>'village', 'name'=>'Village 67276, Districts 6727, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34954, 'regionable_type'=>'village']); //Brabe
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34955, 'regionable_type'=>'village']); //Brani Kulon
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34956, 'regionable_type'=>'village']); //Brani Wetan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34957, 'regionable_type'=>'village']); //Brumbungan Kidul
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34958, 'regionable_type'=>'village']); //Ganting Kulon
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34959, 'regionable_type'=>'village']); //Ganting Wetan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34960, 'regionable_type'=>'village']); //Gerongan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34961, 'regionable_type'=>'village']); //Kedungsari
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34962, 'regionable_type'=>'village']); //Maron Kidul
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34963, 'regionable_type'=>'village']); //Maron Kulon
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34964, 'regionable_type'=>'village']); //Maron Wetan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34965, 'regionable_type'=>'village']); //Pegalangan Kidul
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34966, 'regionable_type'=>'village']); //Puspan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34967, 'regionable_type'=>'village']); //Satreyan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34968, 'regionable_type'=>'village']); //Suko
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34969, 'regionable_type'=>'village']); //Sumberdawe
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34970, 'regionable_type'=>'village']); //Sumberpoh
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>34971, 'regionable_type'=>'village']); //Wonorejo
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35313, 'regionable_type'=>'village']); //Brabe
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35314, 'regionable_type'=>'village']); //Brani Kulon
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35315, 'regionable_type'=>'village']); //Brani Wetan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35316, 'regionable_type'=>'village']); //Brumbungan Kidul
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35317, 'regionable_type'=>'village']); //Ganting Kulon
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35318, 'regionable_type'=>'village']); //Ganting Wetan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35319, 'regionable_type'=>'village']); //Gerongan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35320, 'regionable_type'=>'village']); //Kedungsari
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35321, 'regionable_type'=>'village']); //Maron Kidul
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35322, 'regionable_type'=>'village']); //Maron Kulon
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35323, 'regionable_type'=>'village']); //Maron Wetan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35324, 'regionable_type'=>'village']); //Pegalangan Kidul
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35325, 'regionable_type'=>'village']); //Puspan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35326, 'regionable_type'=>'village']); //Satreyan
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35327, 'regionable_type'=>'village']); //Suko
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35328, 'regionable_type'=>'village']); //Sumberdawe
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35329, 'regionable_type'=>'village']); //Sumberpoh
                DB::table('regionables')->insert(['region_id'=>3570, 'regionable_id'=>35330, 'regionable_type'=>'village']); //Wonorejo
            DB::table('regions')->insert(['id'=>3571, 'parent'=>3549, 'code'=>'6728', 'type'=>'districts', 'name'=>'Districts 6728, City 672, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3036, 'regionable_type'=>'districts']); //Bantaran
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3045, 'regionable_type'=>'districts']); //Pajarakan
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3046, 'regionable_type'=>'districts']); //Kraksaan
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3047, 'regionable_type'=>'districts']); //Besuk
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3048, 'regionable_type'=>'districts']); //Krejengan
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3049, 'regionable_type'=>'districts']); //Tiris
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3050, 'regionable_type'=>'districts']); //Krucil
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3065, 'regionable_type'=>'districts']); //Bantaran
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3074, 'regionable_type'=>'districts']); //Pajarakan
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3075, 'regionable_type'=>'districts']); //Kraksaan
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3076, 'regionable_type'=>'districts']); //Besuk
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3077, 'regionable_type'=>'districts']); //Krejengan
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3078, 'regionable_type'=>'districts']); //Tiris
            DB::table('regionables')->insert(['region_id'=>3571, 'regionable_id'=>3079, 'regionable_type'=>'districts']); //Krucil
                DB::table('regions')->insert(['id'=>3572, 'parent'=>3571, 'code'=>'67288', 'type'=>'village', 'name'=>'Village 67288, Districts 6728, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35052, 'regionable_type'=>'village']); //Bermi (bremi)
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35053, 'regionable_type'=>'village']); //Betek
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35054, 'regionable_type'=>'village']); //Guyangan
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35055, 'regionable_type'=>'village']); //Kalianan
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35056, 'regionable_type'=>'village']); //Kertosuko
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35057, 'regionable_type'=>'village']); //Krobongan (krobungan)
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35058, 'regionable_type'=>'village']); //Krucil
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35059, 'regionable_type'=>'village']); //Pandanlaras
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35060, 'regionable_type'=>'village']); //Plaosan
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35061, 'regionable_type'=>'village']); //Roto
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35062, 'regionable_type'=>'village']); //Seneng
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35063, 'regionable_type'=>'village']); //Sumber Duren
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35064, 'regionable_type'=>'village']); //Tambelang
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35065, 'regionable_type'=>'village']); //Watupanjang
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35411, 'regionable_type'=>'village']); //Bermi (bremi)
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35412, 'regionable_type'=>'village']); //Betek
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35413, 'regionable_type'=>'village']); //Guyangan
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35414, 'regionable_type'=>'village']); //Kalianan
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35415, 'regionable_type'=>'village']); //Kertosuko
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35416, 'regionable_type'=>'village']); //Krobongan (krobungan)
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35417, 'regionable_type'=>'village']); //Krucil
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35418, 'regionable_type'=>'village']); //Pandanlaras
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35419, 'regionable_type'=>'village']); //Plaosan
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35420, 'regionable_type'=>'village']); //Roto
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35421, 'regionable_type'=>'village']); //Seneng
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35422, 'regionable_type'=>'village']); //Sumber Duren
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35423, 'regionable_type'=>'village']); //Tambelang
                DB::table('regionables')->insert(['region_id'=>3572, 'regionable_id'=>35424, 'regionable_type'=>'village']); //Watupanjang
            DB::table('regions')->insert(['id'=>3573, 'parent'=>3549, 'code'=>'6729', 'type'=>'districts', 'name'=>'Districts 6729, City 672, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3573, 'regionable_id'=>3051, 'regionable_type'=>'districts']); //Paiton
            DB::table('regionables')->insert(['region_id'=>3573, 'regionable_id'=>3052, 'regionable_type'=>'districts']); //Pakuniran
            DB::table('regionables')->insert(['region_id'=>3573, 'regionable_id'=>3053, 'regionable_type'=>'districts']); //Gading
            DB::table('regionables')->insert(['region_id'=>3573, 'regionable_id'=>3054, 'regionable_type'=>'districts']); //Kota Anyar
            DB::table('regionables')->insert(['region_id'=>3573, 'regionable_id'=>3080, 'regionable_type'=>'districts']); //Paiton
            DB::table('regionables')->insert(['region_id'=>3573, 'regionable_id'=>3081, 'regionable_type'=>'districts']); //Pakuniran
            DB::table('regionables')->insert(['region_id'=>3573, 'regionable_id'=>3082, 'regionable_type'=>'districts']); //Gading
            DB::table('regionables')->insert(['region_id'=>3573, 'regionable_id'=>3083, 'regionable_type'=>'districts']); //Kota Anyar
                DB::table('regions')->insert(['id'=>3574, 'parent'=>3573, 'code'=>'67293', 'type'=>'village', 'name'=>'Village 67293, Districts 6729, City 672, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35122, 'regionable_type'=>'village']); //Curahtemu
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35123, 'regionable_type'=>'village']); //Kedungrejoso
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35124, 'regionable_type'=>'village']); //Kota Anyar
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35125, 'regionable_type'=>'village']); //Pasembon
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35126, 'regionable_type'=>'village']); //Sambirampak Kidul
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35127, 'regionable_type'=>'village']); //Sambirampak Lor
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35128, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35129, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35130, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35131, 'regionable_type'=>'village']); //Sumbercentang (sumbercenteng)
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35132, 'regionable_type'=>'village']); //Talkadang
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35133, 'regionable_type'=>'village']); //Tambakukir
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35134, 'regionable_type'=>'village']); //Triwungan
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35481, 'regionable_type'=>'village']); //Curahtemu
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35482, 'regionable_type'=>'village']); //Kedungrejoso
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35483, 'regionable_type'=>'village']); //Kota Anyar
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35484, 'regionable_type'=>'village']); //Pasembon
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35485, 'regionable_type'=>'village']); //Sambirampak Kidul
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35486, 'regionable_type'=>'village']); //Sambirampak Lor
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35487, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35488, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35489, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35490, 'regionable_type'=>'village']); //Sumbercentang (sumbercenteng)
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35491, 'regionable_type'=>'village']); //Talkadang
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35492, 'regionable_type'=>'village']); //Tambakukir
                DB::table('regionables')->insert(['region_id'=>3574, 'regionable_id'=>35493, 'regionable_type'=>'village']); //Triwungan
        DB::table('regions')->insert(['id'=>3575, 'parent'=>2996, 'code'=>'673', 'type'=>'city', 'name'=>'City 673, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3575, 'regionable_id'=>154, 'regionable_type'=>'city']); //Lumajang regencies
            DB::table('regions')->insert(['id'=>3576, 'parent'=>3575, 'code'=>'6731', 'type'=>'districts', 'name'=>'Districts 6731, City 673, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3576, 'regionable_id'=>3084, 'regionable_type'=>'districts']); //Lumajang
            DB::table('regionables')->insert(['region_id'=>3576, 'regionable_id'=>3085, 'regionable_type'=>'districts']); //Sumbersuko
                DB::table('regions')->insert(['id'=>3577, 'parent'=>3576, 'code'=>'67316', 'type'=>'village', 'name'=>'Village 67316, Districts 6731, City 673, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35499, 'regionable_type'=>'village']); //Banjarwaru
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35500, 'regionable_type'=>'village']); //Blukon
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35501, 'regionable_type'=>'village']); //Boreng
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35502, 'regionable_type'=>'village']); //Denok
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35503, 'regionable_type'=>'village']); //Kepuharjo
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35504, 'regionable_type'=>'village']); //Labruk Lor
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35505, 'regionable_type'=>'village']); //Rogotrunan
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35506, 'regionable_type'=>'village']); //Grati
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35507, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35508, 'regionable_type'=>'village']); //Labruk Kidul
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35509, 'regionable_type'=>'village']); //Mojosari
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35510, 'regionable_type'=>'village']); //Petahunan
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35511, 'regionable_type'=>'village']); //Purwosono
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35512, 'regionable_type'=>'village']); //Sentul
                DB::table('regionables')->insert(['region_id'=>3577, 'regionable_id'=>35513, 'regionable_type'=>'village']); //Sumbersuko
            DB::table('regions')->insert(['id'=>3578, 'parent'=>3575, 'code'=>'6735', 'type'=>'districts', 'name'=>'Districts 6735, City 673, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3086, 'regionable_type'=>'districts']); //Padang
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3087, 'regionable_type'=>'districts']); //Sukodono
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3088, 'regionable_type'=>'districts']); //Gucialit
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3089, 'regionable_type'=>'districts']); //Randuagung
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3090, 'regionable_type'=>'districts']); //Jatiroto
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3091, 'regionable_type'=>'districts']); //Klakah
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3092, 'regionable_type'=>'districts']); //Ranuyoso
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3093, 'regionable_type'=>'districts']); //Kedungjajang
            DB::table('regionables')->insert(['region_id'=>3578, 'regionable_id'=>3094, 'regionable_type'=>'districts']); //Rowokangkung
                DB::table('regions')->insert(['id'=>3579, 'parent'=>3578, 'code'=>'67359', 'type'=>'village', 'name'=>'Village 67359, Districts 6735, City 673, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3579, 'regionable_id'=>35595, 'regionable_type'=>'village']); //Dawuhan Wetan
                DB::table('regionables')->insert(['region_id'=>3579, 'regionable_id'=>35596, 'regionable_type'=>'village']); //Kedungrejo
                DB::table('regionables')->insert(['region_id'=>3579, 'regionable_id'=>35597, 'regionable_type'=>'village']); //Nogosari
                DB::table('regionables')->insert(['region_id'=>3579, 'regionable_id'=>35598, 'regionable_type'=>'village']); //Rowokangkung
                DB::table('regionables')->insert(['region_id'=>3579, 'regionable_id'=>35599, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>3579, 'regionable_id'=>35600, 'regionable_type'=>'village']); //Sumberanyar
                DB::table('regionables')->insert(['region_id'=>3579, 'regionable_id'=>35601, 'regionable_type'=>'village']); //Sumbersari
            DB::table('regions')->insert(['id'=>3580, 'parent'=>3575, 'code'=>'6736', 'type'=>'districts', 'name'=>'Districts 6736, City 673, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3580, 'regionable_id'=>3095, 'regionable_type'=>'districts']); //Senduro
            DB::table('regionables')->insert(['region_id'=>3580, 'regionable_id'=>3096, 'regionable_type'=>'districts']); //Pasrujambe/pasujambe
                DB::table('regions')->insert(['id'=>3581, 'parent'=>3580, 'code'=>'67361', 'type'=>'village', 'name'=>'Village 67361, Districts 6736, City 673, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35602, 'regionable_type'=>'village']); //Argosari
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35603, 'regionable_type'=>'village']); //Bedayu
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35604, 'regionable_type'=>'village']); //Bedayutalang
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35605, 'regionable_type'=>'village']); //Burno
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35606, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35607, 'regionable_type'=>'village']); //Kandangtepus
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35608, 'regionable_type'=>'village']); //Pandansari
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35609, 'regionable_type'=>'village']); //Purworejo
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35610, 'regionable_type'=>'village']); //Ranupani
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35611, 'regionable_type'=>'village']); //Sarikemuning
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35612, 'regionable_type'=>'village']); //Senduro
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35613, 'regionable_type'=>'village']); //Wonocepokoayu
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35614, 'regionable_type'=>'village']); //Jambearum
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35615, 'regionable_type'=>'village']); //Jambekumbu
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35616, 'regionable_type'=>'village']); //Karanganom
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35617, 'regionable_type'=>'village']); //Kertosari
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35618, 'regionable_type'=>'village']); //Pagowan
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35619, 'regionable_type'=>'village']); //Pasrujambe (pasujambe)
                DB::table('regionables')->insert(['region_id'=>3581, 'regionable_id'=>35620, 'regionable_type'=>'village']); //Sukorejo
            DB::table('regions')->insert(['id'=>3582, 'parent'=>3575, 'code'=>'6737', 'type'=>'districts', 'name'=>'Districts 6737, City 673, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3582, 'regionable_id'=>3097, 'regionable_type'=>'districts']); //Tempeh
            DB::table('regionables')->insert(['region_id'=>3582, 'regionable_id'=>3098, 'regionable_type'=>'districts']); //Pasirian
            DB::table('regionables')->insert(['region_id'=>3582, 'regionable_id'=>3099, 'regionable_type'=>'districts']); //Candipuro
            DB::table('regionables')->insert(['region_id'=>3582, 'regionable_id'=>3100, 'regionable_type'=>'districts']); //Pronojiwo
            DB::table('regionables')->insert(['region_id'=>3582, 'regionable_id'=>3101, 'regionable_type'=>'districts']); //Tempursari
                DB::table('regions')->insert(['id'=>3583, 'parent'=>3582, 'code'=>'67375', 'type'=>'village', 'name'=>'Village 67375, Districts 6737, City 673, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3583, 'regionable_id'=>35661, 'regionable_type'=>'village']); //Bulurejo
                DB::table('regionables')->insert(['region_id'=>3583, 'regionable_id'=>35662, 'regionable_type'=>'village']); //Kaliuling
                DB::table('regionables')->insert(['region_id'=>3583, 'regionable_id'=>35663, 'regionable_type'=>'village']); //Pundungsari
                DB::table('regionables')->insert(['region_id'=>3583, 'regionable_id'=>35664, 'regionable_type'=>'village']); //Purorejo
                DB::table('regionables')->insert(['region_id'=>3583, 'regionable_id'=>35665, 'regionable_type'=>'village']); //Tegalrejo
                DB::table('regionables')->insert(['region_id'=>3583, 'regionable_id'=>35666, 'regionable_type'=>'village']); //Tempurrejo
                DB::table('regionables')->insert(['region_id'=>3583, 'regionable_id'=>35667, 'regionable_type'=>'village']); //Tempursari
            DB::table('regions')->insert(['id'=>3584, 'parent'=>3575, 'code'=>'6738', 'type'=>'districts', 'name'=>'Districts 6738, City 673, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3584, 'regionable_id'=>3102, 'regionable_type'=>'districts']); //Tekung
            DB::table('regionables')->insert(['region_id'=>3584, 'regionable_id'=>3103, 'regionable_type'=>'districts']); //Yosowilangun
            DB::table('regionables')->insert(['region_id'=>3584, 'regionable_id'=>3104, 'regionable_type'=>'districts']); //Kunir
                DB::table('regions')->insert(['id'=>3585, 'parent'=>3584, 'code'=>'67383', 'type'=>'village', 'name'=>'Village 67383, Districts 6738, City 673, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35688, 'regionable_type'=>'village']); //Dorogowok
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35689, 'regionable_type'=>'village']); //Jatigono
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35690, 'regionable_type'=>'village']); //Jatimulyo
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35691, 'regionable_type'=>'village']); //Jatirejo
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35692, 'regionable_type'=>'village']); //Kabuaran
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35693, 'regionable_type'=>'village']); //Karanglo
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35694, 'regionable_type'=>'village']); //Kedungmoro
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35695, 'regionable_type'=>'village']); //Kunir Kidul
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35696, 'regionable_type'=>'village']); //Kunir Lor
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35697, 'regionable_type'=>'village']); //Sukorejo
                DB::table('regionables')->insert(['region_id'=>3585, 'regionable_id'=>35698, 'regionable_type'=>'village']); //Sukosari
        DB::table('regions')->insert(['id'=>3586, 'parent'=>2996, 'code'=>'681', 'type'=>'city', 'name'=>'City 681, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3586, 'regionable_id'=>155, 'regionable_type'=>'city']); //Jember regencies
            DB::table('regions')->insert(['id'=>3587, 'parent'=>3586, 'code'=>'6811', 'type'=>'districts', 'name'=>'Districts 6811, City 681, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3587, 'regionable_id'=>3105, 'regionable_type'=>'districts']); //Patrang
            DB::table('regionables')->insert(['region_id'=>3587, 'regionable_id'=>3106, 'regionable_type'=>'districts']); //Kalisat
            DB::table('regionables')->insert(['region_id'=>3587, 'regionable_id'=>3107, 'regionable_type'=>'districts']); //Mayang
                DB::table('regions')->insert(['id'=>3588, 'parent'=>3587, 'code'=>'68118', 'type'=>'village', 'name'=>'Village 68118, Districts 6811, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3588, 'regionable_id'=>35705, 'regionable_type'=>'village']); //Banjar Sengon
                DB::table('regionables')->insert(['region_id'=>3588, 'regionable_id'=>35706, 'regionable_type'=>'village']); //Jember Lor
                DB::table('regionables')->insert(['region_id'=>3588, 'regionable_id'=>35719, 'regionable_type'=>'village']); //Tegalrejo
            DB::table('regions')->insert(['id'=>3589, 'parent'=>3586, 'code'=>'6812', 'type'=>'districts', 'name'=>'Districts 6812, City 681, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3589, 'regionable_id'=>3108, 'regionable_type'=>'districts']); //Sumber Sari
                DB::table('regions')->insert(['id'=>3590, 'parent'=>3589, 'code'=>'68121', 'type'=>'village', 'name'=>'Village 68121, Districts 6812, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3590, 'regionable_id'=>35726, 'regionable_type'=>'village']); //Sumbersari
                DB::table('regions')->insert(['id'=>3591, 'parent'=>3589, 'code'=>'68122', 'type'=>'village', 'name'=>'Village 68122, Districts 6812, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3591, 'regionable_id'=>35727, 'regionable_type'=>'village']); //Kebonsari
                DB::table('regions')->insert(['id'=>3592, 'parent'=>3589, 'code'=>'68124', 'type'=>'village', 'name'=>'Village 68124, Districts 6812, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3592, 'regionable_id'=>35728, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>3592, 'regionable_id'=>35729, 'regionable_type'=>'village']); //Tegal Gede
                DB::table('regionables')->insert(['region_id'=>3592, 'regionable_id'=>35730, 'regionable_type'=>'village']); //Wirolegi
                DB::table('regions')->insert(['id'=>3593, 'parent'=>3589, 'code'=>'68125', 'type'=>'village', 'name'=>'Village 68125, Districts 6812, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3593, 'regionable_id'=>35731, 'regionable_type'=>'village']); //Antirogo
                DB::table('regions')->insert(['id'=>3594, 'parent'=>3589, 'code'=>'68126', 'type'=>'village', 'name'=>'Village 68126, Districts 6812, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3594, 'regionable_id'=>35732, 'regionable_type'=>'village']); //Keranjingan
            DB::table('regions')->insert(['id'=>3595, 'parent'=>3586, 'code'=>'6813', 'type'=>'districts', 'name'=>'Districts 6813, City 681, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3595, 'regionable_id'=>3109, 'regionable_type'=>'districts']); //Kaliwates
            DB::table('regionables')->insert(['region_id'=>3595, 'regionable_id'=>3110, 'regionable_type'=>'districts']); //Ambulu
                DB::table('regions')->insert(['id'=>3596, 'parent'=>3595, 'code'=>'68132', 'type'=>'village', 'name'=>'Village 68132, Districts 6813, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3596, 'regionable_id'=>35734, 'regionable_type'=>'village']); //Tegal Besar
                DB::table('regionables')->insert(['region_id'=>3596, 'regionable_id'=>35740, 'regionable_type'=>'village']); //Karang Anyar
            DB::table('regions')->insert(['id'=>3597, 'parent'=>3586, 'code'=>'6815', 'type'=>'districts', 'name'=>'Districts 6815, City 681, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3597, 'regionable_id'=>3111, 'regionable_type'=>'districts']); //Sukorambi
            DB::table('regionables')->insert(['region_id'=>3597, 'regionable_id'=>3112, 'regionable_type'=>'districts']); //Rambipuji
            DB::table('regionables')->insert(['region_id'=>3597, 'regionable_id'=>3113, 'regionable_type'=>'districts']); //Panti
            DB::table('regionables')->insert(['region_id'=>3597, 'regionable_id'=>3114, 'regionable_type'=>'districts']); //Bangsalsari
            DB::table('regionables')->insert(['region_id'=>3597, 'regionable_id'=>3115, 'regionable_type'=>'districts']); //Tanggul
            DB::table('regionables')->insert(['region_id'=>3597, 'regionable_id'=>3116, 'regionable_type'=>'districts']); //Sumber Baru
            DB::table('regionables')->insert(['region_id'=>3597, 'regionable_id'=>3117, 'regionable_type'=>'districts']); //Semboro
                DB::table('regions')->insert(['id'=>3598, 'parent'=>3597, 'code'=>'68157', 'type'=>'village', 'name'=>'Village 68157, Districts 6815, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3598, 'regionable_id'=>35796, 'regionable_type'=>'village']); //Pondok Dalem
                DB::table('regionables')->insert(['region_id'=>3598, 'regionable_id'=>35797, 'regionable_type'=>'village']); //Pondok Joyo
                DB::table('regionables')->insert(['region_id'=>3598, 'regionable_id'=>35798, 'regionable_type'=>'village']); //Rejo Agung
                DB::table('regionables')->insert(['region_id'=>3598, 'regionable_id'=>35799, 'regionable_type'=>'village']); //Semboro
                DB::table('regionables')->insert(['region_id'=>3598, 'regionable_id'=>35800, 'regionable_type'=>'village']); //Sidomekar
                DB::table('regionables')->insert(['region_id'=>3598, 'regionable_id'=>35801, 'regionable_type'=>'village']); //Sidomulyo
            DB::table('regions')->insert(['id'=>3599, 'parent'=>3586, 'code'=>'6816', 'type'=>'districts', 'name'=>'Districts 6816, City 681, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3599, 'regionable_id'=>3118, 'regionable_type'=>'districts']); //Balung
            DB::table('regionables')->insert(['region_id'=>3599, 'regionable_id'=>3119, 'regionable_type'=>'districts']); //Wuluhan
            DB::table('regionables')->insert(['region_id'=>3599, 'regionable_id'=>3120, 'regionable_type'=>'districts']); //Puger
            DB::table('regionables')->insert(['region_id'=>3599, 'regionable_id'=>3121, 'regionable_type'=>'districts']); //Gumuk Mas
            DB::table('regionables')->insert(['region_id'=>3599, 'regionable_id'=>3122, 'regionable_type'=>'districts']); //Umbulsari
            DB::table('regionables')->insert(['region_id'=>3599, 'regionable_id'=>3123, 'regionable_type'=>'districts']); //Kencong
            DB::table('regionables')->insert(['region_id'=>3599, 'regionable_id'=>3124, 'regionable_type'=>'districts']); //Jombang
                DB::table('regions')->insert(['id'=>3600, 'parent'=>3599, 'code'=>'68168', 'type'=>'village', 'name'=>'Village 68168, Districts 6816, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3600, 'regionable_id'=>35852, 'regionable_type'=>'village']); //Jombang
                DB::table('regionables')->insert(['region_id'=>3600, 'regionable_id'=>35853, 'regionable_type'=>'village']); //Keting
                DB::table('regionables')->insert(['region_id'=>3600, 'regionable_id'=>35854, 'regionable_type'=>'village']); //Ngampelrejo
                DB::table('regionables')->insert(['region_id'=>3600, 'regionable_id'=>35855, 'regionable_type'=>'village']); //Padomasan
                DB::table('regionables')->insert(['region_id'=>3600, 'regionable_id'=>35856, 'regionable_type'=>'village']); //Sarimulyo
                DB::table('regionables')->insert(['region_id'=>3600, 'regionable_id'=>35857, 'regionable_type'=>'village']); //Wringin Agung
            DB::table('regions')->insert(['id'=>3601, 'parent'=>3586, 'code'=>'6817', 'type'=>'districts', 'name'=>'Districts 6817, City 681, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3601, 'regionable_id'=>3110, 'regionable_type'=>'districts']); //Ambulu
            DB::table('regionables')->insert(['region_id'=>3601, 'regionable_id'=>3125, 'regionable_type'=>'districts']); //Jenggawah
            DB::table('regionables')->insert(['region_id'=>3601, 'regionable_id'=>3126, 'regionable_type'=>'districts']); //Tempurejo
            DB::table('regionables')->insert(['region_id'=>3601, 'regionable_id'=>3127, 'regionable_type'=>'districts']); //Mumbulsari
            DB::table('regionables')->insert(['region_id'=>3601, 'regionable_id'=>3128, 'regionable_type'=>'districts']); //Ajung
                DB::table('regions')->insert(['id'=>3602, 'parent'=>3601, 'code'=>'68175', 'type'=>'village', 'name'=>'Village 68175, Districts 6817, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3602, 'regionable_id'=>35881, 'regionable_type'=>'village']); //Ajung
                DB::table('regionables')->insert(['region_id'=>3602, 'regionable_id'=>35882, 'regionable_type'=>'village']); //Klompangan
                DB::table('regionables')->insert(['region_id'=>3602, 'regionable_id'=>35883, 'regionable_type'=>'village']); //Mangaran
                DB::table('regionables')->insert(['region_id'=>3602, 'regionable_id'=>35884, 'regionable_type'=>'village']); //Pancakarya
                DB::table('regionables')->insert(['region_id'=>3602, 'regionable_id'=>35885, 'regionable_type'=>'village']); //Rowo Indah
                DB::table('regionables')->insert(['region_id'=>3602, 'regionable_id'=>35886, 'regionable_type'=>'village']); //Sukamakmur
                DB::table('regionables')->insert(['region_id'=>3602, 'regionable_id'=>35887, 'regionable_type'=>'village']); //Wirowongso
            DB::table('regions')->insert(['id'=>3603, 'parent'=>3586, 'code'=>'6818', 'type'=>'districts', 'name'=>'Districts 6818, City 681, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3603, 'regionable_id'=>3107, 'regionable_type'=>'districts']); //Mayang
            DB::table('regionables')->insert(['region_id'=>3603, 'regionable_id'=>3129, 'regionable_type'=>'districts']); //Pakusari
            DB::table('regionables')->insert(['region_id'=>3603, 'regionable_id'=>3130, 'regionable_type'=>'districts']); //Silo
                DB::table('regions')->insert(['id'=>3604, 'parent'=>3603, 'code'=>'68184', 'type'=>'village', 'name'=>'Village 68184, Districts 6818, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35895, 'regionable_type'=>'village']); //Garahan
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35896, 'regionable_type'=>'village']); //Harjomolyo
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35897, 'regionable_type'=>'village']); //Karangharjo
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35898, 'regionable_type'=>'village']); //Mulyorejo
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35899, 'regionable_type'=>'village']); //Pace
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35900, 'regionable_type'=>'village']); //Sempolan
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35901, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35902, 'regionable_type'=>'village']); //Silo
                DB::table('regionables')->insert(['region_id'=>3604, 'regionable_id'=>35903, 'regionable_type'=>'village']); //Sumberjati
            DB::table('regions')->insert(['id'=>3605, 'parent'=>3586, 'code'=>'6819', 'type'=>'districts', 'name'=>'Districts 6819, City 681, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3605, 'regionable_id'=>3106, 'regionable_type'=>'districts']); //Kalisat
            DB::table('regionables')->insert(['region_id'=>3605, 'regionable_id'=>3131, 'regionable_type'=>'districts']); //Arjasa
            DB::table('regionables')->insert(['region_id'=>3605, 'regionable_id'=>3132, 'regionable_type'=>'districts']); //Jelbuk
            DB::table('regionables')->insert(['region_id'=>3605, 'regionable_id'=>3133, 'regionable_type'=>'districts']); //Sukowono
            DB::table('regionables')->insert(['region_id'=>3605, 'regionable_id'=>3134, 'regionable_type'=>'districts']); //Sumber Jambe
            DB::table('regionables')->insert(['region_id'=>3605, 'regionable_id'=>3135, 'regionable_type'=>'districts']); //Ledokombo
                DB::table('regions')->insert(['id'=>3606, 'parent'=>3605, 'code'=>'68196', 'type'=>'village', 'name'=>'Village 68196, Districts 6819, City 681, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35937, 'regionable_type'=>'village']); //Karang Paiton
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35938, 'regionable_type'=>'village']); //Ledokombo
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35939, 'regionable_type'=>'village']); //Lembengan
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35940, 'regionable_type'=>'village']); //Slateng
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35941, 'regionable_type'=>'village']); //Sukogidri
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35942, 'regionable_type'=>'village']); //Sumber Anget
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35943, 'regionable_type'=>'village']); //Sumber Bulus
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35944, 'regionable_type'=>'village']); //Sumber Lesung
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35945, 'regionable_type'=>'village']); //Sumber Salak
                DB::table('regionables')->insert(['region_id'=>3606, 'regionable_id'=>35946, 'regionable_type'=>'village']); //Suren
        DB::table('regions')->insert(['id'=>3607, 'parent'=>2996, 'code'=>'682', 'type'=>'city', 'name'=>'City 682, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3607, 'regionable_id'=>156, 'regionable_type'=>'city']); //Bondowoso regencies
            DB::table('regions')->insert(['id'=>3608, 'parent'=>3607, 'code'=>'6821', 'type'=>'districts', 'name'=>'Districts 6821, City 682, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3608, 'regionable_id'=>3136, 'regionable_type'=>'districts']); //Bondowoso
                DB::table('regions')->insert(['id'=>3609, 'parent'=>3608, 'code'=>'68211', 'type'=>'village', 'name'=>'Village 68211, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3609, 'regionable_id'=>35947, 'regionable_type'=>'village']); //Dabasah
                DB::table('regions')->insert(['id'=>3610, 'parent'=>3608, 'code'=>'68212', 'type'=>'village', 'name'=>'Village 68212, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3610, 'regionable_id'=>35948, 'regionable_type'=>'village']); //Blindungan
                DB::table('regions')->insert(['id'=>3611, 'parent'=>3608, 'code'=>'68213', 'type'=>'village', 'name'=>'Village 68213, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3611, 'regionable_id'=>35949, 'regionable_type'=>'village']); //Kotakulon
                DB::table('regions')->insert(['id'=>3612, 'parent'=>3608, 'code'=>'68214', 'type'=>'village', 'name'=>'Village 68214, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3612, 'regionable_id'=>35950, 'regionable_type'=>'village']); //Badean
                DB::table('regions')->insert(['id'=>3613, 'parent'=>3608, 'code'=>'68215', 'type'=>'village', 'name'=>'Village 68215, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3613, 'regionable_id'=>35951, 'regionable_type'=>'village']); //Nangkaan
                DB::table('regions')->insert(['id'=>3614, 'parent'=>3608, 'code'=>'68216', 'type'=>'village', 'name'=>'Village 68216, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3614, 'regionable_id'=>35952, 'regionable_type'=>'village']); //Tamansari
                DB::table('regions')->insert(['id'=>3615, 'parent'=>3608, 'code'=>'68217', 'type'=>'village', 'name'=>'Village 68217, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3615, 'regionable_id'=>35953, 'regionable_type'=>'village']); //Kademangan
                DB::table('regions')->insert(['id'=>3616, 'parent'=>3608, 'code'=>'68218', 'type'=>'village', 'name'=>'Village 68218, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3616, 'regionable_id'=>35954, 'regionable_type'=>'village']); //Pejaten
                DB::table('regions')->insert(['id'=>3617, 'parent'=>3608, 'code'=>'68219', 'type'=>'village', 'name'=>'Village 68219, Districts 6821, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3617, 'regionable_id'=>35955, 'regionable_type'=>'village']); //Kembang
                DB::table('regionables')->insert(['region_id'=>3617, 'regionable_id'=>35956, 'regionable_type'=>'village']); //Pancoran
                DB::table('regionables')->insert(['region_id'=>3617, 'regionable_id'=>35957, 'regionable_type'=>'village']); //Sukowiryo
            DB::table('regions')->insert(['id'=>3618, 'parent'=>3607, 'code'=>'6825', 'type'=>'districts', 'name'=>'Districts 6825, City 682, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3618, 'regionable_id'=>3137, 'regionable_type'=>'districts']); //Binakal
            DB::table('regionables')->insert(['region_id'=>3618, 'regionable_id'=>3138, 'regionable_type'=>'districts']); //Curahdami
            DB::table('regionables')->insert(['region_id'=>3618, 'regionable_id'=>3139, 'regionable_type'=>'districts']); //Wringin
            DB::table('regionables')->insert(['region_id'=>3618, 'regionable_id'=>3140, 'regionable_type'=>'districts']); //Pakem
                DB::table('regions')->insert(['id'=>3619, 'parent'=>3618, 'code'=>'68253', 'type'=>'village', 'name'=>'Village 68253, Districts 6825, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3619, 'regionable_id'=>35991, 'regionable_type'=>'village']); //Andungsari
                DB::table('regionables')->insert(['region_id'=>3619, 'regionable_id'=>35992, 'regionable_type'=>'village']); //Ardisaeng
                DB::table('regionables')->insert(['region_id'=>3619, 'regionable_id'=>35993, 'regionable_type'=>'village']); //Gadingsari
                DB::table('regionables')->insert(['region_id'=>3619, 'regionable_id'=>35994, 'regionable_type'=>'village']); //Kupang
                DB::table('regionables')->insert(['region_id'=>3619, 'regionable_id'=>35995, 'regionable_type'=>'village']); //Pakem
                DB::table('regionables')->insert(['region_id'=>3619, 'regionable_id'=>35996, 'regionable_type'=>'village']); //Patemon
                DB::table('regionables')->insert(['region_id'=>3619, 'regionable_id'=>35997, 'regionable_type'=>'village']); //Petung
                DB::table('regionables')->insert(['region_id'=>3619, 'regionable_id'=>35998, 'regionable_type'=>'village']); //Sumber Dumpyong
            DB::table('regions')->insert(['id'=>3620, 'parent'=>3607, 'code'=>'6826', 'type'=>'districts', 'name'=>'Districts 6826, City 682, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3620, 'regionable_id'=>3141, 'regionable_type'=>'districts']); //Grujugan
            DB::table('regionables')->insert(['region_id'=>3620, 'regionable_id'=>3142, 'regionable_type'=>'districts']); //Cermee
            DB::table('regionables')->insert(['region_id'=>3620, 'regionable_id'=>3143, 'regionable_type'=>'districts']); //Jambe Sari Darus Sholah
            DB::table('regionables')->insert(['region_id'=>3620, 'regionable_id'=>3144, 'regionable_type'=>'districts']); //Maesan
            DB::table('regionables')->insert(['region_id'=>3620, 'regionable_id'=>3145, 'regionable_type'=>'districts']); //Tamanan
                DB::table('regions')->insert(['id'=>3621, 'parent'=>3620, 'code'=>'68263', 'type'=>'village', 'name'=>'Village 68263, Districts 6826, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36027, 'regionable_type'=>'village']); //Jambe Anom
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36028, 'regionable_type'=>'village']); //Jambe Sari
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36029, 'regionable_type'=>'village']); //Pucang Anom
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36030, 'regionable_type'=>'village']); //Sumber Anyar
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36031, 'regionable_type'=>'village']); //Sumber Jeruk
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36032, 'regionable_type'=>'village']); //Tegalpasir
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36046, 'regionable_type'=>'village']); //Kalianyar
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36047, 'regionable_type'=>'village']); //Karangmelok
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36048, 'regionable_type'=>'village']); //Kemirian
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36049, 'regionable_type'=>'village']); //Mengen
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36050, 'regionable_type'=>'village']); //Sukosari
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36051, 'regionable_type'=>'village']); //Sumber Anom
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36052, 'regionable_type'=>'village']); //Sumberkemuning
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36053, 'regionable_type'=>'village']); //Tamanan
                DB::table('regionables')->insert(['region_id'=>3621, 'regionable_id'=>36054, 'regionable_type'=>'village']); //Wonosuko
            DB::table('regions')->insert(['id'=>3622, 'parent'=>3607, 'code'=>'6827', 'type'=>'districts', 'name'=>'Districts 6827, City 682, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3622, 'regionable_id'=>3143, 'regionable_type'=>'districts']); //Jambe Sari Darus Sholah
            DB::table('regionables')->insert(['region_id'=>3622, 'regionable_id'=>3146, 'regionable_type'=>'districts']); //Pujer
            DB::table('regionables')->insert(['region_id'=>3622, 'regionable_id'=>3147, 'regionable_type'=>'districts']); //Tlogosari
                DB::table('regions')->insert(['id'=>3623, 'parent'=>3622, 'code'=>'68272', 'type'=>'village', 'name'=>'Village 68272, Districts 6827, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36066, 'regionable_type'=>'village']); //Brambang Darussolah
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36067, 'regionable_type'=>'village']); //Gunosari
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36068, 'regionable_type'=>'village']); //Jebung Kidul
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36069, 'regionable_type'=>'village']); //Jebung Lor
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36070, 'regionable_type'=>'village']); //Kembang
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36071, 'regionable_type'=>'village']); //Pakisan
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36072, 'regionable_type'=>'village']); //Patemon
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36073, 'regionable_type'=>'village']); //Sulek
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36074, 'regionable_type'=>'village']); //Tlogosari
                DB::table('regionables')->insert(['region_id'=>3623, 'regionable_id'=>36075, 'regionable_type'=>'village']); //Trotosari
            DB::table('regions')->insert(['id'=>3624, 'parent'=>3607, 'code'=>'6828', 'type'=>'districts', 'name'=>'Districts 6828, City 682, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3142, 'regionable_type'=>'districts']); //Cermee
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3148, 'regionable_type'=>'districts']); //Tenggarang
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3149, 'regionable_type'=>'districts']); //Wonosari
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3150, 'regionable_type'=>'districts']); //Tapen
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3151, 'regionable_type'=>'districts']); //Klabang
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3152, 'regionable_type'=>'districts']); //Botolinggo
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3153, 'regionable_type'=>'districts']); //Prajekan
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3154, 'regionable_type'=>'districts']); //Sukosari
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3155, 'regionable_type'=>'districts']); //Sumber Wringin
            DB::table('regionables')->insert(['region_id'=>3624, 'regionable_id'=>3156, 'regionable_type'=>'districts']); //Sempol
                DB::table('regions')->insert(['id'=>3625, 'parent'=>3624, 'code'=>'68288', 'type'=>'village', 'name'=>'Village 68288, Districts 6828, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3625, 'regionable_id'=>36145, 'regionable_type'=>'village']); //Jampit
                DB::table('regionables')->insert(['region_id'=>3625, 'regionable_id'=>36146, 'regionable_type'=>'village']); //Kalianyar
                DB::table('regionables')->insert(['region_id'=>3625, 'regionable_id'=>36147, 'regionable_type'=>'village']); //Kaligedang
                DB::table('regionables')->insert(['region_id'=>3625, 'regionable_id'=>36148, 'regionable_type'=>'village']); //Kalisat
                DB::table('regionables')->insert(['region_id'=>3625, 'regionable_id'=>36149, 'regionable_type'=>'village']); //Sempol
                DB::table('regionables')->insert(['region_id'=>3625, 'regionable_id'=>36150, 'regionable_type'=>'village']); //Sumber Rejo
            DB::table('regions')->insert(['id'=>3626, 'parent'=>3607, 'code'=>'6829', 'type'=>'districts', 'name'=>'Districts 6829, City 682, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3626, 'regionable_id'=>3157, 'regionable_type'=>'districts']); //Taman Krocok
            DB::table('regionables')->insert(['region_id'=>3626, 'regionable_id'=>3158, 'regionable_type'=>'districts']); //Tegalampel
                DB::table('regions')->insert(['id'=>3627, 'parent'=>3626, 'code'=>'68291', 'type'=>'village', 'name'=>'Village 68291, Districts 6829, City 682, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36151, 'regionable_type'=>'village']); //Gentong
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36152, 'regionable_type'=>'village']); //Kemuningan
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36153, 'regionable_type'=>'village']); //Kretek
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36154, 'regionable_type'=>'village']); //Paguan
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36155, 'regionable_type'=>'village']); //Sumberkokap
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36156, 'regionable_type'=>'village']); //Taman
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36157, 'regionable_type'=>'village']); //Trebungan
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36158, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36159, 'regionable_type'=>'village']); //Klabang
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36160, 'regionable_type'=>'village']); //Klabang Agung
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36161, 'regionable_type'=>'village']); //Mandiro
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36162, 'regionable_type'=>'village']); //Purnama
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36163, 'regionable_type'=>'village']); //Sekarputih
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36164, 'regionable_type'=>'village']); //Tanggulangin
                DB::table('regionables')->insert(['region_id'=>3627, 'regionable_id'=>36165, 'regionable_type'=>'village']); //Tegalampel
        DB::table('regions')->insert(['id'=>3628, 'parent'=>2996, 'code'=>'683', 'type'=>'city', 'name'=>'City 683, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3628, 'regionable_id'=>157, 'regionable_type'=>'city']); //Situbondo regencies
            DB::table('regions')->insert(['id'=>3629, 'parent'=>3628, 'code'=>'6831', 'type'=>'districts', 'name'=>'Districts 6831, City 683, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3629, 'regionable_id'=>3159, 'regionable_type'=>'districts']); //Situbondo
                DB::table('regions')->insert(['id'=>3630, 'parent'=>3629, 'code'=>'68311', 'type'=>'village', 'name'=>'Village 68311, Districts 6831, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3630, 'regionable_id'=>36166, 'regionable_type'=>'village']); //Dawuhan
                DB::table('regions')->insert(['id'=>3631, 'parent'=>3629, 'code'=>'68312', 'type'=>'village', 'name'=>'Village 68312, Districts 6831, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3631, 'regionable_id'=>36167, 'regionable_type'=>'village']); //Patokan
                DB::table('regions')->insert(['id'=>3632, 'parent'=>3629, 'code'=>'68313', 'type'=>'village', 'name'=>'Village 68313, Districts 6831, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3632, 'regionable_id'=>36168, 'regionable_type'=>'village']); //Kotakan
                DB::table('regions')->insert(['id'=>3633, 'parent'=>3629, 'code'=>'68314', 'type'=>'village', 'name'=>'Village 68314, Districts 6831, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3633, 'regionable_id'=>36169, 'regionable_type'=>'village']); //Kalibagor
                DB::table('regions')->insert(['id'=>3634, 'parent'=>3629, 'code'=>'68315', 'type'=>'village', 'name'=>'Village 68315, Districts 6831, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3634, 'regionable_id'=>36170, 'regionable_type'=>'village']); //Talkandang
                DB::table('regions')->insert(['id'=>3635, 'parent'=>3629, 'code'=>'68316', 'type'=>'village', 'name'=>'Village 68316, Districts 6831, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3635, 'regionable_id'=>36171, 'regionable_type'=>'village']); //Olean
            DB::table('regions')->insert(['id'=>3636, 'parent'=>3628, 'code'=>'6832', 'type'=>'districts', 'name'=>'Districts 6832, City 683, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3636, 'regionable_id'=>3160, 'regionable_type'=>'districts']); //Panji
                DB::table('regions')->insert(['id'=>3637, 'parent'=>3636, 'code'=>'68321', 'type'=>'village', 'name'=>'Village 68321, Districts 6832, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3637, 'regionable_id'=>36172, 'regionable_type'=>'village']); //Ardirejo
                DB::table('regions')->insert(['id'=>3638, 'parent'=>3636, 'code'=>'68322', 'type'=>'village', 'name'=>'Village 68322, Districts 6832, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3638, 'regionable_id'=>36173, 'regionable_type'=>'village']); //Mimbaan
                DB::table('regions')->insert(['id'=>3639, 'parent'=>3636, 'code'=>'68323', 'type'=>'village', 'name'=>'Village 68323, Districts 6832, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36174, 'regionable_type'=>'village']); //Battal
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36175, 'regionable_type'=>'village']); //Curah Jeru
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36176, 'regionable_type'=>'village']); //Juglangan
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36177, 'regionable_type'=>'village']); //Kayu Putih
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36178, 'regionable_type'=>'village']); //Klampokan
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36179, 'regionable_type'=>'village']); //Panji Kidul
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36180, 'regionable_type'=>'village']); //Panji Lor
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36181, 'regionable_type'=>'village']); //Sliwung
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36182, 'regionable_type'=>'village']); //Tenggir
                DB::table('regionables')->insert(['region_id'=>3639, 'regionable_id'=>36183, 'regionable_type'=>'village']); //Tokelan
            DB::table('regions')->insert(['id'=>3640, 'parent'=>3628, 'code'=>'6835', 'type'=>'districts', 'name'=>'Districts 6835, City 683, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3161, 'regionable_type'=>'districts']); //Panarukan
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3162, 'regionable_type'=>'districts']); //Kendit
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3163, 'regionable_type'=>'districts']); //Mlandingan
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3164, 'regionable_type'=>'districts']); //Suboh
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3165, 'regionable_type'=>'districts']); //Sumbermalang
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3166, 'regionable_type'=>'districts']); //Besuki
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3167, 'regionable_type'=>'districts']); //Jatibanteng
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3168, 'regionable_type'=>'districts']); //Bungatan
            DB::table('regionables')->insert(['region_id'=>3640, 'regionable_id'=>3169, 'regionable_type'=>'districts']); //Banyuglugur
                DB::table('regions')->insert(['id'=>3641, 'parent'=>3640, 'code'=>'68359', 'type'=>'village', 'name'=>'Village 68359, Districts 6835, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3641, 'regionable_id'=>36248, 'regionable_type'=>'village']); //Banyuglugur
                DB::table('regionables')->insert(['region_id'=>3641, 'regionable_id'=>36249, 'regionable_type'=>'village']); //Kalianget
                DB::table('regionables')->insert(['region_id'=>3641, 'regionable_id'=>36250, 'regionable_type'=>'village']); //Kalisari
                DB::table('regionables')->insert(['region_id'=>3641, 'regionable_id'=>36251, 'regionable_type'=>'village']); //Lubawang
                DB::table('regionables')->insert(['region_id'=>3641, 'regionable_id'=>36252, 'regionable_type'=>'village']); //Selobanteng
                DB::table('regionables')->insert(['region_id'=>3641, 'regionable_id'=>36253, 'regionable_type'=>'village']); //Telempong
                DB::table('regionables')->insert(['region_id'=>3641, 'regionable_id'=>36254, 'regionable_type'=>'village']); //Tepos
            DB::table('regions')->insert(['id'=>3642, 'parent'=>3628, 'code'=>'6836', 'type'=>'districts', 'name'=>'Districts 6836, City 683, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3642, 'regionable_id'=>3170, 'regionable_type'=>'districts']); //Kapongan
            DB::table('regionables')->insert(['region_id'=>3642, 'regionable_id'=>3171, 'regionable_type'=>'districts']); //Mangaran
                DB::table('regions')->insert(['id'=>3643, 'parent'=>3642, 'code'=>'68363', 'type'=>'village', 'name'=>'Village 68363, Districts 6836, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3643, 'regionable_id'=>36265, 'regionable_type'=>'village']); //Mangaran
                DB::table('regionables')->insert(['region_id'=>3643, 'regionable_id'=>36266, 'regionable_type'=>'village']); //Semiring
                DB::table('regionables')->insert(['region_id'=>3643, 'regionable_id'=>36267, 'regionable_type'=>'village']); //Tanjung Glugur
                DB::table('regionables')->insert(['region_id'=>3643, 'regionable_id'=>36268, 'regionable_type'=>'village']); //Tanjung Kamal
                DB::table('regionables')->insert(['region_id'=>3643, 'regionable_id'=>36269, 'regionable_type'=>'village']); //Tanjung Pecinan
                DB::table('regionables')->insert(['region_id'=>3643, 'regionable_id'=>36270, 'regionable_type'=>'village']); //Trebungan
            DB::table('regions')->insert(['id'=>3644, 'parent'=>3628, 'code'=>'6837', 'type'=>'districts', 'name'=>'Districts 6837, City 683, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3644, 'regionable_id'=>3172, 'regionable_type'=>'districts']); //Arjasa
            DB::table('regionables')->insert(['region_id'=>3644, 'regionable_id'=>3173, 'regionable_type'=>'districts']); //Jangkar
            DB::table('regionables')->insert(['region_id'=>3644, 'regionable_id'=>3174, 'regionable_type'=>'districts']); //Asembagus
            DB::table('regionables')->insert(['region_id'=>3644, 'regionable_id'=>3175, 'regionable_type'=>'districts']); //Banyuputih
                DB::table('regions')->insert(['id'=>3645, 'parent'=>3644, 'code'=>'68374', 'type'=>'village', 'name'=>'Village 68374, Districts 6837, City 683, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3645, 'regionable_id'=>36297, 'regionable_type'=>'village']); //Banyu Putih
                DB::table('regionables')->insert(['region_id'=>3645, 'regionable_id'=>36298, 'regionable_type'=>'village']); //Sumberanyar
                DB::table('regionables')->insert(['region_id'=>3645, 'regionable_id'=>36299, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>3645, 'regionable_id'=>36300, 'regionable_type'=>'village']); //Sumberwaru
                DB::table('regionables')->insert(['region_id'=>3645, 'regionable_id'=>36301, 'regionable_type'=>'village']); //Wonorejo
        DB::table('regions')->insert(['id'=>3646, 'parent'=>2996, 'code'=>'684', 'type'=>'city', 'name'=>'City 684, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3646, 'regionable_id'=>158, 'regionable_type'=>'city']); //Banyuwangi regencies
            DB::table('regions')->insert(['id'=>3647, 'parent'=>3646, 'code'=>'6841', 'type'=>'districts', 'name'=>'Districts 6841, City 684, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3647, 'regionable_id'=>3176, 'regionable_type'=>'districts']); //Banyuwangi
                DB::table('regions')->insert(['id'=>3648, 'parent'=>3647, 'code'=>'68411', 'type'=>'village', 'name'=>'Village 68411, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3648, 'regionable_id'=>36302, 'regionable_type'=>'village']); //Karangrejo
                DB::table('regionables')->insert(['region_id'=>3648, 'regionable_id'=>36303, 'regionable_type'=>'village']); //Kepatihan
                DB::table('regions')->insert(['id'=>3649, 'parent'=>3647, 'code'=>'68412', 'type'=>'village', 'name'=>'Village 68412, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3649, 'regionable_id'=>36304, 'regionable_type'=>'village']); //Kampung Melayu
                DB::table('regionables')->insert(['region_id'=>3649, 'regionable_id'=>36305, 'regionable_type'=>'village']); //Temenggungan
                DB::table('regions')->insert(['id'=>3650, 'parent'=>3647, 'code'=>'68413', 'type'=>'village', 'name'=>'Village 68413, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3650, 'regionable_id'=>36306, 'regionable_type'=>'village']); //Lateng
                DB::table('regions')->insert(['id'=>3651, 'parent'=>3647, 'code'=>'68414', 'type'=>'village', 'name'=>'Village 68414, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3651, 'regionable_id'=>36307, 'regionable_type'=>'village']); //Pengantigan
                DB::table('regionables')->insert(['region_id'=>3651, 'regionable_id'=>36308, 'regionable_type'=>'village']); //Singotrunan
                DB::table('regions')->insert(['id'=>3652, 'parent'=>3647, 'code'=>'68415', 'type'=>'village', 'name'=>'Village 68415, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3652, 'regionable_id'=>36309, 'regionable_type'=>'village']); //Panderejo
                DB::table('regionables')->insert(['region_id'=>3652, 'regionable_id'=>36310, 'regionable_type'=>'village']); //Singonegaran
                DB::table('regions')->insert(['id'=>3653, 'parent'=>3647, 'code'=>'68416', 'type'=>'village', 'name'=>'Village 68416, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3653, 'regionable_id'=>36311, 'regionable_type'=>'village']); //Penganjuran
                DB::table('regionables')->insert(['region_id'=>3653, 'regionable_id'=>36312, 'regionable_type'=>'village']); //Tamanbaru
                DB::table('regionables')->insert(['region_id'=>3653, 'regionable_id'=>36313, 'regionable_type'=>'village']); //Tukangkayu
                DB::table('regions')->insert(['id'=>3654, 'parent'=>3647, 'code'=>'68417', 'type'=>'village', 'name'=>'Village 68417, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3654, 'regionable_id'=>36314, 'regionable_type'=>'village']); //Kebalenan
                DB::table('regions')->insert(['id'=>3655, 'parent'=>3647, 'code'=>'68418', 'type'=>'village', 'name'=>'Village 68418, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3655, 'regionable_id'=>36315, 'regionable_type'=>'village']); //Kertosari
                DB::table('regionables')->insert(['region_id'=>3655, 'regionable_id'=>36316, 'regionable_type'=>'village']); //Sobo
                DB::table('regions')->insert(['id'=>3656, 'parent'=>3647, 'code'=>'68419', 'type'=>'village', 'name'=>'Village 68419, Districts 6841, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3656, 'regionable_id'=>36317, 'regionable_type'=>'village']); //Kampung Mandar
                DB::table('regionables')->insert(['region_id'=>3656, 'regionable_id'=>36318, 'regionable_type'=>'village']); //Pakis
                DB::table('regionables')->insert(['region_id'=>3656, 'regionable_id'=>36319, 'regionable_type'=>'village']); //Sumberrejo
            DB::table('regions')->insert(['id'=>3657, 'parent'=>3646, 'code'=>'6842', 'type'=>'districts', 'name'=>'Districts 6842, City 684, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3657, 'regionable_id'=>3177, 'regionable_type'=>'districts']); //Kalipuro
            DB::table('regionables')->insert(['region_id'=>3657, 'regionable_id'=>3178, 'regionable_type'=>'districts']); //Giri
                DB::table('regions')->insert(['id'=>3658, 'parent'=>3657, 'code'=>'68422', 'type'=>'village', 'name'=>'Village 68422, Districts 6842, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3658, 'regionable_id'=>36329, 'regionable_type'=>'village']); //Penataban
                DB::table('regions')->insert(['id'=>3659, 'parent'=>3657, 'code'=>'68423', 'type'=>'village', 'name'=>'Village 68423, Districts 6842, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3659, 'regionable_id'=>36330, 'regionable_type'=>'village']); //Giri
                DB::table('regions')->insert(['id'=>3660, 'parent'=>3657, 'code'=>'68424', 'type'=>'village', 'name'=>'Village 68424, Districts 6842, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3660, 'regionable_id'=>36331, 'regionable_type'=>'village']); //Boyolangu
                DB::table('regions')->insert(['id'=>3661, 'parent'=>3657, 'code'=>'68425', 'type'=>'village', 'name'=>'Village 68425, Districts 6842, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3661, 'regionable_id'=>36332, 'regionable_type'=>'village']); //Grogol
                DB::table('regionables')->insert(['region_id'=>3661, 'regionable_id'=>36333, 'regionable_type'=>'village']); //Jambesari
                DB::table('regionables')->insert(['region_id'=>3661, 'regionable_id'=>36334, 'regionable_type'=>'village']); //Mojopanggung
            DB::table('regions')->insert(['id'=>3662, 'parent'=>3646, 'code'=>'6843', 'type'=>'districts', 'name'=>'Districts 6843, City 684, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3662, 'regionable_id'=>3179, 'regionable_type'=>'districts']); //Glagah
                DB::table('regions')->insert(['id'=>3663, 'parent'=>3662, 'code'=>'68431', 'type'=>'village', 'name'=>'Village 68431, Districts 6843, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3663, 'regionable_id'=>36335, 'regionable_type'=>'village']); //Bakungan
                DB::table('regions')->insert(['id'=>3664, 'parent'=>3662, 'code'=>'68432', 'type'=>'village', 'name'=>'Village 68432, Districts 6843, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36336, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36337, 'regionable_type'=>'village']); //Glagah
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36338, 'regionable_type'=>'village']); //Kampunganyar
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36339, 'regionable_type'=>'village']); //Kemiren
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36340, 'regionable_type'=>'village']); //Kenjo
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36341, 'regionable_type'=>'village']); //Olehsari
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36342, 'regionable_type'=>'village']); //Paspan
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36343, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>3664, 'regionable_id'=>36344, 'regionable_type'=>'village']); //Tamansuruh
            DB::table('regions')->insert(['id'=>3665, 'parent'=>3646, 'code'=>'6845', 'type'=>'districts', 'name'=>'Districts 6845, City 684, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3665, 'regionable_id'=>3177, 'regionable_type'=>'districts']); //Kalipuro
            DB::table('regionables')->insert(['region_id'=>3665, 'regionable_id'=>3180, 'regionable_type'=>'districts']); //Wongsorejo
            DB::table('regionables')->insert(['region_id'=>3665, 'regionable_id'=>3181, 'regionable_type'=>'districts']); //Licin
                DB::table('regions')->insert(['id'=>3666, 'parent'=>3665, 'code'=>'68454', 'type'=>'village', 'name'=>'Village 68454, Districts 6845, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3666, 'regionable_id'=>36357, 'regionable_type'=>'village']); //Banjar
                DB::table('regionables')->insert(['region_id'=>3666, 'regionable_id'=>36358, 'regionable_type'=>'village']); //Gumuk
                DB::table('regionables')->insert(['region_id'=>3666, 'regionable_id'=>36359, 'regionable_type'=>'village']); //Jelun
                DB::table('regionables')->insert(['region_id'=>3666, 'regionable_id'=>36360, 'regionable_type'=>'village']); //Kluncing
                DB::table('regionables')->insert(['region_id'=>3666, 'regionable_id'=>36361, 'regionable_type'=>'village']); //Licin
                DB::table('regionables')->insert(['region_id'=>3666, 'regionable_id'=>36362, 'regionable_type'=>'village']); //Pakel
                DB::table('regionables')->insert(['region_id'=>3666, 'regionable_id'=>36363, 'regionable_type'=>'village']); //Segobang
                DB::table('regionables')->insert(['region_id'=>3666, 'regionable_id'=>36364, 'regionable_type'=>'village']); //Tamansari
            DB::table('regions')->insert(['id'=>3667, 'parent'=>3646, 'code'=>'6846', 'type'=>'districts', 'name'=>'Districts 6846, City 684, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3667, 'regionable_id'=>3182, 'regionable_type'=>'districts']); //Kabat
            DB::table('regionables')->insert(['region_id'=>3667, 'regionable_id'=>3183, 'regionable_type'=>'districts']); //Rogojampi
            DB::table('regionables')->insert(['region_id'=>3667, 'regionable_id'=>3184, 'regionable_type'=>'districts']); //Songgon
            DB::table('regionables')->insert(['region_id'=>3667, 'regionable_id'=>3185, 'regionable_type'=>'districts']); //Singojuruh
            DB::table('regionables')->insert(['region_id'=>3667, 'regionable_id'=>3186, 'regionable_type'=>'districts']); //Genteng
            DB::table('regionables')->insert(['region_id'=>3667, 'regionable_id'=>3187, 'regionable_type'=>'districts']); //Glenmore
            DB::table('regionables')->insert(['region_id'=>3667, 'regionable_id'=>3188, 'regionable_type'=>'districts']); //Kalibaru
            DB::table('regionables')->insert(['region_id'=>3667, 'regionable_id'=>3189, 'regionable_type'=>'districts']); //Sempu
                DB::table('regions')->insert(['id'=>3668, 'parent'=>3667, 'code'=>'68468', 'type'=>'village', 'name'=>'Village 68468, Districts 6846, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3668, 'regionable_id'=>36437, 'regionable_type'=>'village']); //Gendoh
                DB::table('regionables')->insert(['region_id'=>3668, 'regionable_id'=>36438, 'regionable_type'=>'village']); //Jambewangi
                DB::table('regionables')->insert(['region_id'=>3668, 'regionable_id'=>36439, 'regionable_type'=>'village']); //Karangsari
                DB::table('regionables')->insert(['region_id'=>3668, 'regionable_id'=>36440, 'regionable_type'=>'village']); //Sempu
                DB::table('regionables')->insert(['region_id'=>3668, 'regionable_id'=>36441, 'regionable_type'=>'village']); //Tegalarum
                DB::table('regionables')->insert(['region_id'=>3668, 'regionable_id'=>36442, 'regionable_type'=>'village']); //Temuasri
                DB::table('regionables')->insert(['region_id'=>3668, 'regionable_id'=>36443, 'regionable_type'=>'village']); //Temuguruh
            DB::table('regions')->insert(['id'=>3669, 'parent'=>3646, 'code'=>'6847', 'type'=>'districts', 'name'=>'Districts 6847, City 684, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3669, 'regionable_id'=>3190, 'regionable_type'=>'districts']); //Srono
            DB::table('regionables')->insert(['region_id'=>3669, 'regionable_id'=>3191, 'regionable_type'=>'districts']); //Muncar
                DB::table('regions')->insert(['id'=>3670, 'parent'=>3669, 'code'=>'68472', 'type'=>'village', 'name'=>'Village 68472, Districts 6847, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36454, 'regionable_type'=>'village']); //Blambangan
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36455, 'regionable_type'=>'village']); //Kedungrejo
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36456, 'regionable_type'=>'village']); //Kedungringin (kedungpringin)
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36457, 'regionable_type'=>'village']); //Kumendung
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36458, 'regionable_type'=>'village']); //Sumberberas
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36459, 'regionable_type'=>'village']); //Sumbersewu
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36460, 'regionable_type'=>'village']); //Tambakrejo
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36461, 'regionable_type'=>'village']); //Tapanrejo
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36462, 'regionable_type'=>'village']); //Tembokrejo
                DB::table('regionables')->insert(['region_id'=>3670, 'regionable_id'=>36463, 'regionable_type'=>'village']); //Wringin Putih
            DB::table('regions')->insert(['id'=>3671, 'parent'=>3646, 'code'=>'6848', 'type'=>'districts', 'name'=>'Districts 6848, City 684, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3671, 'regionable_id'=>3192, 'regionable_type'=>'districts']); //Cluring
            DB::table('regionables')->insert(['region_id'=>3671, 'regionable_id'=>3193, 'regionable_type'=>'districts']); //Purwoharjo
            DB::table('regionables')->insert(['region_id'=>3671, 'regionable_id'=>3194, 'regionable_type'=>'districts']); //Tegaldlimo
            DB::table('regionables')->insert(['region_id'=>3671, 'regionable_id'=>3195, 'regionable_type'=>'districts']); //Tegalsari
            DB::table('regionables')->insert(['region_id'=>3671, 'regionable_id'=>3196, 'regionable_type'=>'districts']); //Gambiran
            DB::table('regionables')->insert(['region_id'=>3671, 'regionable_id'=>3197, 'regionable_type'=>'districts']); //Bangorejo
            DB::table('regionables')->insert(['region_id'=>3671, 'regionable_id'=>3198, 'regionable_type'=>'districts']); //Siliragung
            DB::table('regionables')->insert(['region_id'=>3671, 'regionable_id'=>3199, 'regionable_type'=>'districts']); //Pesanggaran
                DB::table('regions')->insert(['id'=>3672, 'parent'=>3671, 'code'=>'68488', 'type'=>'village', 'name'=>'Village 68488, Districts 6848, City 684, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36509, 'regionable_type'=>'village']); //Barurejo
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36510, 'regionable_type'=>'village']); //Buluagung
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36511, 'regionable_type'=>'village']); //Kesilir
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36512, 'regionable_type'=>'village']); //Seneporejo
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36513, 'regionable_type'=>'village']); //Siliragung
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36514, 'regionable_type'=>'village']); //Kandangan
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36515, 'regionable_type'=>'village']); //Pesanggaran
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36516, 'regionable_type'=>'village']); //Sarongan
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36517, 'regionable_type'=>'village']); //Sumberagung
                DB::table('regionables')->insert(['region_id'=>3672, 'regionable_id'=>36518, 'regionable_type'=>'village']); //Sumbermulyo
        DB::table('regions')->insert(['id'=>3673, 'parent'=>2996, 'code'=>'691', 'type'=>'city', 'name'=>'City 691, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3673, 'regionable_id'=>159, 'regionable_type'=>'city']); //Bangkalan regencies
            DB::table('regions')->insert(['id'=>3674, 'parent'=>3673, 'code'=>'6911', 'type'=>'districts', 'name'=>'Districts 6911, City 691, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3674, 'regionable_id'=>3200, 'regionable_type'=>'districts']); //Bangkalan
                DB::table('regions')->insert(['id'=>3675, 'parent'=>3674, 'code'=>'69112', 'type'=>'village', 'name'=>'Village 69112, Districts 6911, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3675, 'regionable_id'=>36519, 'regionable_type'=>'village']); //Bancaran
                DB::table('regionables')->insert(['region_id'=>3675, 'regionable_id'=>36520, 'regionable_type'=>'village']); //Pejagan (pajagan)
                DB::table('regions')->insert(['id'=>3676, 'parent'=>3674, 'code'=>'69113', 'type'=>'village', 'name'=>'Village 69113, Districts 6911, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3676, 'regionable_id'=>36521, 'regionable_type'=>'village']); //Sabiyan
                DB::table('regions')->insert(['id'=>3677, 'parent'=>3674, 'code'=>'69114', 'type'=>'village', 'name'=>'Village 69114, Districts 6911, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3677, 'regionable_id'=>36522, 'regionable_type'=>'village']); //Gebang
                DB::table('regions')->insert(['id'=>3678, 'parent'=>3674, 'code'=>'69115', 'type'=>'village', 'name'=>'Village 69115, Districts 6911, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3678, 'regionable_id'=>36523, 'regionable_type'=>'village']); //Demangan
                DB::table('regionables')->insert(['region_id'=>3678, 'regionable_id'=>36524, 'regionable_type'=>'village']); //Pangeranan
                DB::table('regions')->insert(['id'=>3679, 'parent'=>3674, 'code'=>'69116', 'type'=>'village', 'name'=>'Village 69116, Districts 6911, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3679, 'regionable_id'=>36525, 'regionable_type'=>'village']); //Kemayoran
                DB::table('regionables')->insert(['region_id'=>3679, 'regionable_id'=>36526, 'regionable_type'=>'village']); //Mlajah
                DB::table('regions')->insert(['id'=>3680, 'parent'=>3674, 'code'=>'69118', 'type'=>'village', 'name'=>'Village 69118, Districts 6911, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3680, 'regionable_id'=>36527, 'regionable_type'=>'village']); //Sembilangan
                DB::table('regionables')->insert(['region_id'=>3680, 'regionable_id'=>36528, 'regionable_type'=>'village']); //Ujung Piring
                DB::table('regions')->insert(['id'=>3681, 'parent'=>3674, 'code'=>'69119', 'type'=>'village', 'name'=>'Village 69119, Districts 6911, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3681, 'regionable_id'=>36529, 'regionable_type'=>'village']); //Keraton
                DB::table('regionables')->insert(['region_id'=>3681, 'regionable_id'=>36530, 'regionable_type'=>'village']); //Kramat (keramat)
                DB::table('regionables')->insert(['region_id'=>3681, 'regionable_id'=>36531, 'regionable_type'=>'village']); //Mertajasah (martajasah)
            DB::table('regions')->insert(['id'=>3682, 'parent'=>3673, 'code'=>'6912', 'type'=>'districts', 'name'=>'Districts 6912, City 691, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3682, 'regionable_id'=>3201, 'regionable_type'=>'districts']); //Burneh
                DB::table('regions')->insert(['id'=>3683, 'parent'=>3682, 'code'=>'69121', 'type'=>'village', 'name'=>'Village 69121, Districts 6912, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36532, 'regionable_type'=>'village']); //Alas Kembang
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36533, 'regionable_type'=>'village']); //Arok
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36534, 'regionable_type'=>'village']); //Benangkah
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36535, 'regionable_type'=>'village']); //Binoh
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36536, 'regionable_type'=>'village']); //Burneh
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36537, 'regionable_type'=>'village']); //Jambu
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36538, 'regionable_type'=>'village']); //Kapor
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36539, 'regionable_type'=>'village']); //Langkap
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36540, 'regionable_type'=>'village']); //Pangolangan
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36541, 'regionable_type'=>'village']); //Perreng
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36542, 'regionable_type'=>'village']); //Sobih
                DB::table('regionables')->insert(['region_id'=>3683, 'regionable_id'=>36543, 'regionable_type'=>'village']); //Tonjung (tunjung)
            DB::table('regions')->insert(['id'=>3684, 'parent'=>3673, 'code'=>'6915', 'type'=>'districts', 'name'=>'Districts 6915, City 691, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3684, 'regionable_id'=>3202, 'regionable_type'=>'districts']); //Arosbaya
            DB::table('regionables')->insert(['region_id'=>3684, 'regionable_id'=>3203, 'regionable_type'=>'districts']); //Geger
            DB::table('regionables')->insert(['region_id'=>3684, 'regionable_id'=>3204, 'regionable_type'=>'districts']); //Klampis
            DB::table('regionables')->insert(['region_id'=>3684, 'regionable_id'=>3205, 'regionable_type'=>'districts']); //Sepulu
            DB::table('regionables')->insert(['region_id'=>3684, 'regionable_id'=>3206, 'regionable_type'=>'districts']); //Kokop
            DB::table('regionables')->insert(['region_id'=>3684, 'regionable_id'=>3207, 'regionable_type'=>'districts']); //Tanjungbumi
                DB::table('regions')->insert(['id'=>3685, 'parent'=>3684, 'code'=>'69156', 'type'=>'village', 'name'=>'Village 69156, Districts 6915, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36625, 'regionable_type'=>'village']); //Aeng Tabar
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36626, 'regionable_type'=>'village']); //Bandang Dayah
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36627, 'regionable_type'=>'village']); //Banyu Sangkah
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36628, 'regionable_type'=>'village']); //Bumi Anyar
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36629, 'regionable_type'=>'village']); //Bungkeng
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36630, 'regionable_type'=>'village']); //Larangan Timur
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36631, 'regionable_type'=>'village']); //Macajah
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36632, 'regionable_type'=>'village']); //Paseseh
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36633, 'regionable_type'=>'village']); //Planggiran
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36634, 'regionable_type'=>'village']); //Tagungguh
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36635, 'regionable_type'=>'village']); //Tambak Pocok
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36636, 'regionable_type'=>'village']); //Tanjung Bumi
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36637, 'regionable_type'=>'village']); //Telaga/tlaga Biru
                DB::table('regionables')->insert(['region_id'=>3685, 'regionable_id'=>36638, 'regionable_type'=>'village']); //Tlangoh
            DB::table('regions')->insert(['id'=>3686, 'parent'=>3673, 'code'=>'6916', 'type'=>'districts', 'name'=>'Districts 6916, City 691, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3686, 'regionable_id'=>3208, 'regionable_type'=>'districts']); //Socah
            DB::table('regionables')->insert(['region_id'=>3686, 'regionable_id'=>3209, 'regionable_type'=>'districts']); //Kamal
            DB::table('regionables')->insert(['region_id'=>3686, 'regionable_id'=>3210, 'regionable_type'=>'districts']); //Labang
            DB::table('regionables')->insert(['region_id'=>3686, 'regionable_id'=>3211, 'regionable_type'=>'districts']); //Kwanyar
            DB::table('regionables')->insert(['region_id'=>3686, 'regionable_id'=>3212, 'regionable_type'=>'districts']); //Tragah
            DB::table('regionables')->insert(['region_id'=>3686, 'regionable_id'=>3213, 'regionable_type'=>'districts']); //Modung
                DB::table('regions')->insert(['id'=>3687, 'parent'=>3686, 'code'=>'69166', 'type'=>'village', 'name'=>'Village 69166, Districts 6916, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36707, 'regionable_type'=>'village']); //Alaskokon
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36708, 'regionable_type'=>'village']); //Brakas Dajah
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36709, 'regionable_type'=>'village']); //Glisgis (gligis)
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36710, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36711, 'regionable_type'=>'village']); //Kolla
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36712, 'regionable_type'=>'village']); //Langpanggang
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36713, 'regionable_type'=>'village']); //Manggaan
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36714, 'regionable_type'=>'village']); //Modung
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36715, 'regionable_type'=>'village']); //Neroh
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36716, 'regionable_type'=>'village']); //Paeng
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36717, 'regionable_type'=>'village']); //Pakong
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36718, 'regionable_type'=>'village']); //Pangpajung
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36719, 'regionable_type'=>'village']); //Patengteng
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36720, 'regionable_type'=>'village']); //Patereman
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36721, 'regionable_type'=>'village']); //Srabi/serabi Barat
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36722, 'regionable_type'=>'village']); //Srabi/serabi Timur
                DB::table('regionables')->insert(['region_id'=>3687, 'regionable_id'=>36723, 'regionable_type'=>'village']); //Suwaan
            DB::table('regions')->insert(['id'=>3688, 'parent'=>3673, 'code'=>'6917', 'type'=>'districts', 'name'=>'Districts 6917, City 691, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3688, 'regionable_id'=>3214, 'regionable_type'=>'districts']); //Tanah Merah
            DB::table('regionables')->insert(['region_id'=>3688, 'regionable_id'=>3215, 'regionable_type'=>'districts']); //Galis
            DB::table('regionables')->insert(['region_id'=>3688, 'regionable_id'=>3216, 'regionable_type'=>'districts']); //Blega
            DB::table('regionables')->insert(['region_id'=>3688, 'regionable_id'=>3217, 'regionable_type'=>'districts']); //Konang
                DB::table('regions')->insert(['id'=>3689, 'parent'=>3688, 'code'=>'69175', 'type'=>'village', 'name'=>'Village 69175, Districts 6917, City 691, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36787, 'regionable_type'=>'village']); //Bandung
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36788, 'regionable_type'=>'village']); //Batokaban
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36789, 'regionable_type'=>'village']); //Campor
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36790, 'regionable_type'=>'village']); //Cangkarman (cangkareman)
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36791, 'regionable_type'=>'village']); //Durin Barat
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36792, 'regionable_type'=>'village']); //Durin Timur
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36793, 'regionable_type'=>'village']); //Galis Daya/dajah
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36794, 'regionable_type'=>'village']); //Genteng
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36795, 'regionable_type'=>'village']); //Kanegarah (kanagereh)
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36796, 'regionable_type'=>'village']); //Konang
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36797, 'regionable_type'=>'village']); //Pakes
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36798, 'regionable_type'=>'village']); //Sambiyan
                DB::table('regionables')->insert(['region_id'=>3689, 'regionable_id'=>36799, 'regionable_type'=>'village']); //Sen Asen
        DB::table('regions')->insert(['id'=>3690, 'parent'=>2996, 'code'=>'692', 'type'=>'city', 'name'=>'City 692, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3690, 'regionable_id'=>160, 'regionable_type'=>'city']); //Sampang regencies
            DB::table('regions')->insert(['id'=>3691, 'parent'=>3690, 'code'=>'6921', 'type'=>'districts', 'name'=>'Districts 6921, City 692, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3691, 'regionable_id'=>3218, 'regionable_type'=>'districts']); //Sampang
                DB::table('regions')->insert(['id'=>3692, 'parent'=>3691, 'code'=>'69212', 'type'=>'village', 'name'=>'Village 69212, Districts 6921, City 692, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3692, 'regionable_id'=>36800, 'regionable_type'=>'village']); //Dalpenang
                DB::table('regions')->insert(['id'=>3693, 'parent'=>3691, 'code'=>'69215', 'type'=>'village', 'name'=>'Village 69215, Districts 6921, City 692, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3693, 'regionable_id'=>36801, 'regionable_type'=>'village']); //Polagan
                DB::table('regions')->insert(['id'=>3694, 'parent'=>3691, 'code'=>'69216', 'type'=>'village', 'name'=>'Village 69216, Districts 6921, City 692, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36802, 'regionable_type'=>'village']); //Aeng Sareh
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36803, 'regionable_type'=>'village']); //Banyuanyar
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36804, 'regionable_type'=>'village']); //Banyumas
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36805, 'regionable_type'=>'village']); //Baruh
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36806, 'regionable_type'=>'village']); //Gunung Maddah
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36807, 'regionable_type'=>'village']); //Gunung Sekar
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36808, 'regionable_type'=>'village']); //Kamoning
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36809, 'regionable_type'=>'village']); //Karang Dalem
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36810, 'regionable_type'=>'village']); //Pangelen
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36811, 'regionable_type'=>'village']); //Panggung
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36812, 'regionable_type'=>'village']); //Paseyan
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36813, 'regionable_type'=>'village']); //Pekalongan (pakalongan)
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36814, 'regionable_type'=>'village']); //Pulau Mandangin (mandingan)
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36815, 'regionable_type'=>'village']); //Rong Tengah
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36816, 'regionable_type'=>'village']); //Taman Sareh
                DB::table('regionables')->insert(['region_id'=>3694, 'regionable_id'=>36817, 'regionable_type'=>'village']); //Tanggumong
            DB::table('regions')->insert(['id'=>3695, 'parent'=>3690, 'code'=>'6925', 'type'=>'districts', 'name'=>'Districts 6925, City 692, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3695, 'regionable_id'=>3219, 'regionable_type'=>'districts']); //Kedungdung
            DB::table('regionables')->insert(['region_id'=>3695, 'regionable_id'=>3220, 'regionable_type'=>'districts']); //Tambelangan
            DB::table('regionables')->insert(['region_id'=>3695, 'regionable_id'=>3221, 'regionable_type'=>'districts']); //Robatal
            DB::table('regionables')->insert(['region_id'=>3695, 'regionable_id'=>3222, 'regionable_type'=>'districts']); //Karang Penang
                DB::table('regions')->insert(['id'=>3696, 'parent'=>3695, 'code'=>'69254', 'type'=>'village', 'name'=>'Village 69254, Districts 6925, City 692, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36846, 'regionable_type'=>'village']); //Bapelle
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36847, 'regionable_type'=>'village']); //Gunung Rancak
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36848, 'regionable_type'=>'village']); //Jelgung
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36849, 'regionable_type'=>'village']); //Lepelle
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36850, 'regionable_type'=>'village']); //Pandiyangan
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36851, 'regionable_type'=>'village']); //Robatal
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36852, 'regionable_type'=>'village']); //Sawah Tengah
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36853, 'regionable_type'=>'village']); //Torjunan
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36854, 'regionable_type'=>'village']); //Tragih
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36855, 'regionable_type'=>'village']); //Bluuran (blu Uran)
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36856, 'regionable_type'=>'village']); //Bulmatet
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36857, 'regionable_type'=>'village']); //Gunung Kesan
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36858, 'regionable_type'=>'village']); //Karang Penang Oloh
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36859, 'regionable_type'=>'village']); //Karang Penang Onjur
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36860, 'regionable_type'=>'village']); //Poreh
                DB::table('regionables')->insert(['region_id'=>3696, 'regionable_id'=>36861, 'regionable_type'=>'village']); //Tlambah
            DB::table('regions')->insert(['id'=>3697, 'parent'=>3690, 'code'=>'6926', 'type'=>'districts', 'name'=>'Districts 6926, City 692, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3697, 'regionable_id'=>3223, 'regionable_type'=>'districts']); //Ketapang
            DB::table('regionables')->insert(['region_id'=>3697, 'regionable_id'=>3224, 'regionable_type'=>'districts']); //Sokobanah
            DB::table('regionables')->insert(['region_id'=>3697, 'regionable_id'=>3225, 'regionable_type'=>'districts']); //Banyuates
                DB::table('regions')->insert(['id'=>3698, 'parent'=>3697, 'code'=>'69263', 'type'=>'village', 'name'=>'Village 69263, Districts 6926, City 692, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36888, 'regionable_type'=>'village']); //Asem Jaran
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36889, 'regionable_type'=>'village']); //Banyuates
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36890, 'regionable_type'=>'village']); //Batioh
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36891, 'regionable_type'=>'village']); //Jatra Timur
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36892, 'regionable_type'=>'village']); //Kembang Jeruk
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36893, 'regionable_type'=>'village']); //Lar Lar
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36894, 'regionable_type'=>'village']); //Masaran
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36895, 'regionable_type'=>'village']); //Montor
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36896, 'regionable_type'=>'village']); //Morbatoh
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36897, 'regionable_type'=>'village']); //Nagasareh
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36898, 'regionable_type'=>'village']); //Nepa
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36899, 'regionable_type'=>'village']); //Olor
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36900, 'regionable_type'=>'village']); //Planggaran Barat
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36901, 'regionable_type'=>'village']); //Planggaran Timur
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36902, 'regionable_type'=>'village']); //Tapaan
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36903, 'regionable_type'=>'village']); //Tebanah
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36904, 'regionable_type'=>'village']); //Terosan
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36905, 'regionable_type'=>'village']); //Tlagah
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36906, 'regionable_type'=>'village']); //Tolang
                DB::table('regionables')->insert(['region_id'=>3698, 'regionable_id'=>36907, 'regionable_type'=>'village']); //Trapang
            DB::table('regions')->insert(['id'=>3699, 'parent'=>3690, 'code'=>'6927', 'type'=>'districts', 'name'=>'Districts 6927, City 692, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3699, 'regionable_id'=>3226, 'regionable_type'=>'districts']); //Pangarengan
            DB::table('regionables')->insert(['region_id'=>3699, 'regionable_id'=>3227, 'regionable_type'=>'districts']); //Torjun
            DB::table('regionables')->insert(['region_id'=>3699, 'regionable_id'=>3228, 'regionable_type'=>'districts']); //Jrengik
            DB::table('regionables')->insert(['region_id'=>3699, 'regionable_id'=>3229, 'regionable_type'=>'districts']); //Sreseh
                DB::table('regions')->insert(['id'=>3700, 'parent'=>3699, 'code'=>'69273', 'type'=>'village', 'name'=>'Village 69273, Districts 6927, City 692, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36940, 'regionable_type'=>'village']); //Bangsah
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36941, 'regionable_type'=>'village']); //Bundah
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36942, 'regionable_type'=>'village']); //Disanah
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36943, 'regionable_type'=>'village']); //Junuk (junok)
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36944, 'regionable_type'=>'village']); //Klobur
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36945, 'regionable_type'=>'village']); //Labang
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36946, 'regionable_type'=>'village']); //Labuhan
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36947, 'regionable_type'=>'village']); //Marparan
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36948, 'regionable_type'=>'village']); //Noreh
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36949, 'regionable_type'=>'village']); //Plasah
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36950, 'regionable_type'=>'village']); //Sreseh
                DB::table('regionables')->insert(['region_id'=>3700, 'regionable_id'=>36951, 'regionable_type'=>'village']); //Taman
            DB::table('regions')->insert(['id'=>3701, 'parent'=>3690, 'code'=>'6928', 'type'=>'districts', 'name'=>'Districts 6928, City 692, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3701, 'regionable_id'=>3230, 'regionable_type'=>'districts']); //Camplong
                DB::table('regions')->insert(['id'=>3702, 'parent'=>3701, 'code'=>'69281', 'type'=>'village', 'name'=>'Village 69281, Districts 6928, City 692, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36952, 'regionable_type'=>'village']); //Anggersek
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36953, 'regionable_type'=>'village']); //Banjar Tabulu
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36954, 'regionable_type'=>'village']); //Banjar Talela
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36955, 'regionable_type'=>'village']); //Batu Karang
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36956, 'regionable_type'=>'village']); //Dharma Camplong
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36957, 'regionable_type'=>'village']); //Dharma Tanjung
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36958, 'regionable_type'=>'village']); //Madupat
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36959, 'regionable_type'=>'village']); //Pamolaan
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36960, 'regionable_type'=>'village']); //Plampaan
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36961, 'regionable_type'=>'village']); //Prajjan
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36962, 'regionable_type'=>'village']); //Rabasan
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36963, 'regionable_type'=>'village']); //Sejati
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36964, 'regionable_type'=>'village']); //Taddan
                DB::table('regionables')->insert(['region_id'=>3702, 'regionable_id'=>36965, 'regionable_type'=>'village']); //Tambaan
            DB::table('regions')->insert(['id'=>3703, 'parent'=>3690, 'code'=>'6929', 'type'=>'districts', 'name'=>'Districts 6929, City 692, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3703, 'regionable_id'=>3231, 'regionable_type'=>'districts']); //Omben
                DB::table('regions')->insert(['id'=>3704, 'parent'=>3703, 'code'=>'69291', 'type'=>'village', 'name'=>'Village 69291, Districts 6929, City 692, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36966, 'regionable_type'=>'village']); //Angsokah
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36967, 'regionable_type'=>'village']); //Astapah
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36968, 'regionable_type'=>'village']); //Gersempal
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36969, 'regionable_type'=>'village']); //Jrangoan (jranguan)
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36970, 'regionable_type'=>'village']); //Kamondung
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36971, 'regionable_type'=>'village']); //Karang Gayam
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36972, 'regionable_type'=>'village']); //Karang Nangger
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36973, 'regionable_type'=>'village']); //Kebun Sareh
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36974, 'regionable_type'=>'village']); //Madulang
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36975, 'regionable_type'=>'village']); //Meteng
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36976, 'regionable_type'=>'village']); //Napo Daya (napa Daya)
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36977, 'regionable_type'=>'village']); //Napolaok (napa Laok)
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36978, 'regionable_type'=>'village']); //Omben
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36979, 'regionable_type'=>'village']); //Pandan
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36980, 'regionable_type'=>'village']); //Rapa Daya
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36981, 'regionable_type'=>'village']); //Rapa Laok
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36982, 'regionable_type'=>'village']); //Rongdalem (rongdalam)
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36983, 'regionable_type'=>'village']); //Sogiyan (sogian)
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36984, 'regionable_type'=>'village']); //Tambak
                DB::table('regionables')->insert(['region_id'=>3704, 'regionable_id'=>36985, 'regionable_type'=>'village']); //Temoran
        DB::table('regions')->insert(['id'=>3705, 'parent'=>2996, 'code'=>'693', 'type'=>'city', 'name'=>'City 693, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3705, 'regionable_id'=>161, 'regionable_type'=>'city']); //Pamekasan regencies
            DB::table('regions')->insert(['id'=>3706, 'parent'=>3705, 'code'=>'6931', 'type'=>'districts', 'name'=>'Districts 6931, City 693, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3706, 'regionable_id'=>3232, 'regionable_type'=>'districts']); //Pamekasan
                DB::table('regions')->insert(['id'=>3707, 'parent'=>3706, 'code'=>'69311', 'type'=>'village', 'name'=>'Village 69311, Districts 6931, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3707, 'regionable_id'=>36986, 'regionable_type'=>'village']); //Parteker
                DB::table('regions')->insert(['id'=>3708, 'parent'=>3706, 'code'=>'69312', 'type'=>'village', 'name'=>'Village 69312, Districts 6931, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3708, 'regionable_id'=>36987, 'regionable_type'=>'village']); //Patemon
                DB::table('regions')->insert(['id'=>3709, 'parent'=>3706, 'code'=>'69314', 'type'=>'village', 'name'=>'Village 69314, Districts 6931, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3709, 'regionable_id'=>36988, 'regionable_type'=>'village']); //Kolpajung
                DB::table('regions')->insert(['id'=>3710, 'parent'=>3706, 'code'=>'69316', 'type'=>'village', 'name'=>'Village 69316, Districts 6931, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3710, 'regionable_id'=>36989, 'regionable_type'=>'village']); //Bugih
                DB::table('regions')->insert(['id'=>3711, 'parent'=>3706, 'code'=>'69317', 'type'=>'village', 'name'=>'Village 69317, Districts 6931, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36990, 'regionable_type'=>'village']); //Barurambat Kota (barkot)
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36991, 'regionable_type'=>'village']); //Bettet
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36992, 'regionable_type'=>'village']); //Gladak Anyar
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36993, 'regionable_type'=>'village']); //Jalmak
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36994, 'regionable_type'=>'village']); //Jungcangcang
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36995, 'regionable_type'=>'village']); //Kangenan
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36996, 'regionable_type'=>'village']); //Kowel
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36997, 'regionable_type'=>'village']); //Laden
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36998, 'regionable_type'=>'village']); //Nylabu Daya/daja
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>36999, 'regionable_type'=>'village']); //Nylabu Laok
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>37000, 'regionable_type'=>'village']); //Panempan
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>37001, 'regionable_type'=>'village']); //Tejah/teja Barat
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>37002, 'regionable_type'=>'village']); //Tejah/teja Timur
                DB::table('regionables')->insert(['region_id'=>3711, 'regionable_id'=>37003, 'regionable_type'=>'village']); //Toronan
            DB::table('regions')->insert(['id'=>3712, 'parent'=>3705, 'code'=>'6932', 'type'=>'districts', 'name'=>'Districts 6932, City 693, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3712, 'regionable_id'=>3233, 'regionable_type'=>'districts']); //Pademawu
                DB::table('regions')->insert(['id'=>3713, 'parent'=>3712, 'code'=>'69321', 'type'=>'village', 'name'=>'Village 69321, Districts 6932, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3713, 'regionable_id'=>37004, 'regionable_type'=>'village']); //Barurambat Timur
                DB::table('regions')->insert(['id'=>3714, 'parent'=>3712, 'code'=>'69323', 'type'=>'village', 'name'=>'Village 69323, Districts 6932, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37005, 'regionable_type'=>'village']); //Baddurih
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37006, 'regionable_type'=>'village']); //Budagan (buddagan)
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37007, 'regionable_type'=>'village']); //Buddih
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37008, 'regionable_type'=>'village']); //Bunder
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37009, 'regionable_type'=>'village']); //Dasok
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37010, 'regionable_type'=>'village']); //Durbuk
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37011, 'regionable_type'=>'village']); //Jarin
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37012, 'regionable_type'=>'village']); //Lawangan Daya
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37013, 'regionable_type'=>'village']); //Lemper
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37014, 'regionable_type'=>'village']); //Majungan
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37015, 'regionable_type'=>'village']); //Murtajih
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37016, 'regionable_type'=>'village']); //Padelegan (pedelegan)
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37017, 'regionable_type'=>'village']); //Pademawu Barat
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37018, 'regionable_type'=>'village']); //Pademawu Timur
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37019, 'regionable_type'=>'village']); //Pagagan
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37020, 'regionable_type'=>'village']); //Prekbun
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37021, 'regionable_type'=>'village']); //Sentol
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37022, 'regionable_type'=>'village']); //Sopa\ah
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37023, 'regionable_type'=>'village']); //Sumedangan
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37024, 'regionable_type'=>'village']); //Tambung
                DB::table('regionables')->insert(['region_id'=>3714, 'regionable_id'=>37025, 'regionable_type'=>'village']); //Tanjung
            DB::table('regions')->insert(['id'=>3715, 'parent'=>3705, 'code'=>'6935', 'type'=>'districts', 'name'=>'Districts 6935, City 693, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3715, 'regionable_id'=>3234, 'regionable_type'=>'districts']); //Pakong
            DB::table('regionables')->insert(['region_id'=>3715, 'regionable_id'=>3235, 'regionable_type'=>'districts']); //Waru
            DB::table('regionables')->insert(['region_id'=>3715, 'regionable_id'=>3236, 'regionable_type'=>'districts']); //Batumarmar
            DB::table('regionables')->insert(['region_id'=>3715, 'regionable_id'=>3237, 'regionable_type'=>'districts']); //Kadur
            DB::table('regionables')->insert(['region_id'=>3715, 'regionable_id'=>3238, 'regionable_type'=>'districts']); //Pasean
                DB::table('regions')->insert(['id'=>3716, 'parent'=>3715, 'code'=>'69356', 'type'=>'village', 'name'=>'Village 69356, Districts 6935, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37073, 'regionable_type'=>'village']); //Batukerbuy
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37074, 'regionable_type'=>'village']); //Bindang
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37075, 'regionable_type'=>'village']); //Dempo Barat
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37076, 'regionable_type'=>'village']); //Dempo Timur
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37077, 'regionable_type'=>'village']); //Sana Daja
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37078, 'regionable_type'=>'village']); //Sana Tengah
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37079, 'regionable_type'=>'village']); //Sotobar (sotabar)
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37080, 'regionable_type'=>'village']); //Tegangser Daya
                DB::table('regionables')->insert(['region_id'=>3716, 'regionable_id'=>37081, 'regionable_type'=>'village']); //Tlontoraja
            DB::table('regions')->insert(['id'=>3717, 'parent'=>3705, 'code'=>'6936', 'type'=>'districts', 'name'=>'Districts 6936, City 693, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3717, 'regionable_id'=>3239, 'regionable_type'=>'districts']); //Pegantenan
            DB::table('regionables')->insert(['region_id'=>3717, 'regionable_id'=>3240, 'regionable_type'=>'districts']); //Palenga\an
            DB::table('regionables')->insert(['region_id'=>3717, 'regionable_id'=>3241, 'regionable_type'=>'districts']); //Proppo
                DB::table('regions')->insert(['id'=>3718, 'parent'=>3717, 'code'=>'69363', 'type'=>'village', 'name'=>'Village 69363, Districts 6936, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37107, 'regionable_type'=>'village']); //Badung
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37108, 'regionable_type'=>'village']); //Banyu Bulu
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37109, 'regionable_type'=>'village']); //Batu Kalangan
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37110, 'regionable_type'=>'village']); //Billa\an
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37111, 'regionable_type'=>'village']); //Campor
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37112, 'regionable_type'=>'village']); //Candi Burung
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37113, 'regionable_type'=>'village']); //Gro\om
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37114, 'regionable_type'=>'village']); //Jambringin
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37115, 'regionable_type'=>'village']); //Karanganyar
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37116, 'regionable_type'=>'village']); //Klampar
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37117, 'regionable_type'=>'village']); //Kodik
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37118, 'regionable_type'=>'village']); //Lenteng
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37119, 'regionable_type'=>'village']); //Mapper
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37120, 'regionable_type'=>'village']); //Panaguan
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37121, 'regionable_type'=>'village']); //Pangbatok
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37122, 'regionable_type'=>'village']); //Panglemah
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37123, 'regionable_type'=>'village']); //Pangtonggal
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37124, 'regionable_type'=>'village']); //Pangurayan
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37125, 'regionable_type'=>'village']); //Proppo
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37126, 'regionable_type'=>'village']); //Rang Perang Daya
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37127, 'regionable_type'=>'village']); //Rang Perang Laok
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37128, 'regionable_type'=>'village']); //Samatan
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37129, 'regionable_type'=>'village']); //Samiran
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37130, 'regionable_type'=>'village']); //Srambah
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37131, 'regionable_type'=>'village']); //Tattangoh
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37132, 'regionable_type'=>'village']); //Tlangoh
                DB::table('regionables')->insert(['region_id'=>3718, 'regionable_id'=>37133, 'regionable_type'=>'village']); //Toket
            DB::table('regions')->insert(['id'=>3719, 'parent'=>3705, 'code'=>'6937', 'type'=>'districts', 'name'=>'Districts 6937, City 693, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3719, 'regionable_id'=>3242, 'regionable_type'=>'districts']); //Tlanakan
                DB::table('regions')->insert(['id'=>3720, 'parent'=>3719, 'code'=>'69371', 'type'=>'village', 'name'=>'Village 69371, Districts 6937, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37134, 'regionable_type'=>'village']); //Ambat
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37135, 'regionable_type'=>'village']); //Bandaran
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37136, 'regionable_type'=>'village']); //Branta Pasisir
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37137, 'regionable_type'=>'village']); //Branta Tinggi
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37138, 'regionable_type'=>'village']); //Bukek
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37139, 'regionable_type'=>'village']); //Ceguk
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37140, 'regionable_type'=>'village']); //Dabuan
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37141, 'regionable_type'=>'village']); //Gugul
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37142, 'regionable_type'=>'village']); //Kramat
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37143, 'regionable_type'=>'village']); //Larangan Slampar
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37144, 'regionable_type'=>'village']); //Larangan Tokol
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37145, 'regionable_type'=>'village']); //Mangar
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37146, 'regionable_type'=>'village']); //Panglegur
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37147, 'regionable_type'=>'village']); //Taro\an
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37148, 'regionable_type'=>'village']); //Terrak
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37149, 'regionable_type'=>'village']); //Tlanakan
                DB::table('regionables')->insert(['region_id'=>3720, 'regionable_id'=>37150, 'regionable_type'=>'village']); //Tlesa
            DB::table('regions')->insert(['id'=>3721, 'parent'=>3705, 'code'=>'6938', 'type'=>'districts', 'name'=>'Districts 6938, City 693, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3721, 'regionable_id'=>3243, 'regionable_type'=>'districts']); //Galis
            DB::table('regionables')->insert(['region_id'=>3721, 'regionable_id'=>3244, 'regionable_type'=>'districts']); //Larangan
                DB::table('regions')->insert(['id'=>3722, 'parent'=>3721, 'code'=>'69383', 'type'=>'village', 'name'=>'Village 69383, Districts 6938, City 693, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37161, 'regionable_type'=>'village']); //Blumbungan
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37162, 'regionable_type'=>'village']); //Dukuh/duko Timur
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37163, 'regionable_type'=>'village']); //Grujugan
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37164, 'regionable_type'=>'village']); //Kaduara Barat
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37165, 'regionable_type'=>'village']); //Lancar
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37166, 'regionable_type'=>'village']); //Larangan Dalam
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37167, 'regionable_type'=>'village']); //Larangan Luar
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37168, 'regionable_type'=>'village']); //Montok
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37169, 'regionable_type'=>'village']); //Panaguan
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37170, 'regionable_type'=>'village']); //Peltong
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37171, 'regionable_type'=>'village']); //Taraban
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37172, 'regionable_type'=>'village']); //Tentenan Barat
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37173, 'regionable_type'=>'village']); //Tentenan Timur
                DB::table('regionables')->insert(['region_id'=>3722, 'regionable_id'=>37174, 'regionable_type'=>'village']); //Trasak
        DB::table('regions')->insert(['id'=>3723, 'parent'=>2996, 'code'=>'694', 'type'=>'city', 'name'=>'City 694, Province 6']);
        DB::table('regionables')->insert(['region_id'=>3723, 'regionable_id'=>162, 'regionable_type'=>'city']); //Sumenep regencies
            DB::table('regions')->insert(['id'=>3724, 'parent'=>3723, 'code'=>'6941', 'type'=>'districts', 'name'=>'Districts 6941, City 694, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3724, 'regionable_id'=>3245, 'regionable_type'=>'districts']); //Kota Sumenep
                DB::table('regions')->insert(['id'=>3725, 'parent'=>3724, 'code'=>'69412', 'type'=>'village', 'name'=>'Village 69412, Districts 6941, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3725, 'regionable_id'=>37175, 'regionable_type'=>'village']); //Pamolokan
                DB::table('regionables')->insert(['region_id'=>3725, 'regionable_id'=>37176, 'regionable_type'=>'village']); //Pangarangan
                DB::table('regions')->insert(['id'=>3726, 'parent'=>3724, 'code'=>'69413', 'type'=>'village', 'name'=>'Village 69413, Districts 6941, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3726, 'regionable_id'=>37177, 'regionable_type'=>'village']); //Kebonagung
                DB::table('regions')->insert(['id'=>3727, 'parent'=>3724, 'code'=>'69414', 'type'=>'village', 'name'=>'Village 69414, Districts 6941, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3727, 'regionable_id'=>37178, 'regionable_type'=>'village']); //Pandian
                DB::table('regions')->insert(['id'=>3728, 'parent'=>3724, 'code'=>'69415', 'type'=>'village', 'name'=>'Village 69415, Districts 6941, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3728, 'regionable_id'=>37179, 'regionable_type'=>'village']); //Kepanjin
                DB::table('regions')->insert(['id'=>3729, 'parent'=>3724, 'code'=>'69416', 'type'=>'village', 'name'=>'Village 69416, Districts 6941, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3729, 'regionable_id'=>37180, 'regionable_type'=>'village']); //Bangselok
                DB::table('regionables')->insert(['region_id'=>3729, 'regionable_id'=>37181, 'regionable_type'=>'village']); //Pajagalan
                DB::table('regions')->insert(['id'=>3730, 'parent'=>3724, 'code'=>'69417', 'type'=>'village', 'name'=>'Village 69417, Districts 6941, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37182, 'regionable_type'=>'village']); //Bangkal
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37183, 'regionable_type'=>'village']); //Kacongan
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37184, 'regionable_type'=>'village']); //Karangduak
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37185, 'regionable_type'=>'village']); //Kebunan
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37186, 'regionable_type'=>'village']); //Kolor
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37187, 'regionable_type'=>'village']); //Marengan Daya
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37188, 'regionable_type'=>'village']); //Paberasan
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37189, 'regionable_type'=>'village']); //Pabian
                DB::table('regionables')->insert(['region_id'=>3730, 'regionable_id'=>37190, 'regionable_type'=>'village']); //Parsanga
            DB::table('regions')->insert(['id'=>3731, 'parent'=>3723, 'code'=>'6945', 'type'=>'districts', 'name'=>'Districts 6945, City 694, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3731, 'regionable_id'=>3246, 'regionable_type'=>'districts']); //Batuan
            DB::table('regionables')->insert(['region_id'=>3731, 'regionable_id'=>3247, 'regionable_type'=>'districts']); //Manding
            DB::table('regionables')->insert(['region_id'=>3731, 'regionable_id'=>3248, 'regionable_type'=>'districts']); //Batuputih
            DB::table('regionables')->insert(['region_id'=>3731, 'regionable_id'=>3249, 'regionable_type'=>'districts']); //Dasuk
            DB::table('regionables')->insert(['region_id'=>3731, 'regionable_id'=>3250, 'regionable_type'=>'districts']); //Ambunten
            DB::table('regionables')->insert(['region_id'=>3731, 'regionable_id'=>3251, 'regionable_type'=>'districts']); //Rubaru
            DB::table('regionables')->insert(['region_id'=>3731, 'regionable_id'=>3252, 'regionable_type'=>'districts']); //Pasongsongan
                DB::table('regions')->insert(['id'=>3732, 'parent'=>3731, 'code'=>'69457', 'type'=>'village', 'name'=>'Village 69457, Districts 6945, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37264, 'regionable_type'=>'village']); //Campaka
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37265, 'regionable_type'=>'village']); //Lebeng Barat
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37266, 'regionable_type'=>'village']); //Lebeng Timur
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37267, 'regionable_type'=>'village']); //Montorna
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37268, 'regionable_type'=>'village']); //Padangdangan
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37269, 'regionable_type'=>'village']); //Panaongan
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37270, 'regionable_type'=>'village']); //Pasongsongan
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37271, 'regionable_type'=>'village']); //Prancak
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37272, 'regionable_type'=>'village']); //Rajun
                DB::table('regionables')->insert(['region_id'=>3732, 'regionable_id'=>37273, 'regionable_type'=>'village']); //Soddara
            DB::table('regions')->insert(['id'=>3733, 'parent'=>3723, 'code'=>'6946', 'type'=>'districts', 'name'=>'Districts 6946, City 694, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3733, 'regionable_id'=>3253, 'regionable_type'=>'districts']); //Lenteng
            DB::table('regionables')->insert(['region_id'=>3733, 'regionable_id'=>3254, 'regionable_type'=>'districts']); //Ganding
            DB::table('regionables')->insert(['region_id'=>3733, 'regionable_id'=>3255, 'regionable_type'=>'districts']); //Guluk Guluk
            DB::table('regionables')->insert(['region_id'=>3733, 'regionable_id'=>3256, 'regionable_type'=>'districts']); //Pragaan
            DB::table('regionables')->insert(['region_id'=>3733, 'regionable_id'=>3257, 'regionable_type'=>'districts']); //Bluto
            DB::table('regionables')->insert(['region_id'=>3733, 'regionable_id'=>3258, 'regionable_type'=>'districts']); //Saronggi
                DB::table('regions')->insert(['id'=>3734, 'parent'=>3733, 'code'=>'69467', 'type'=>'village', 'name'=>'Village 69467, Districts 6946, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37354, 'regionable_type'=>'village']); //Aengtongtong
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37355, 'regionable_type'=>'village']); //Juluk
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37356, 'regionable_type'=>'village']); //Kambingan Timur
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37357, 'regionable_type'=>'village']); //Kebundadap Barat
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37358, 'regionable_type'=>'village']); //Kebundadap Timur
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37359, 'regionable_type'=>'village']); //Langsar
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37360, 'regionable_type'=>'village']); //Muangan
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37361, 'regionable_type'=>'village']); //Nambakor
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37362, 'regionable_type'=>'village']); //Pagarbatu
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37363, 'regionable_type'=>'village']); //Saroka
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37364, 'regionable_type'=>'village']); //Saronggi
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37365, 'regionable_type'=>'village']); //Talang
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37366, 'regionable_type'=>'village']); //Tanah Merah
                DB::table('regionables')->insert(['region_id'=>3734, 'regionable_id'=>37367, 'regionable_type'=>'village']); //Tanjung
            DB::table('regions')->insert(['id'=>3735, 'parent'=>3723, 'code'=>'6947', 'type'=>'districts', 'name'=>'Districts 6947, City 694, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3735, 'regionable_id'=>3259, 'regionable_type'=>'districts']); //Kalianget
            DB::table('regionables')->insert(['region_id'=>3735, 'regionable_id'=>3260, 'regionable_type'=>'districts']); //Gapura
            DB::table('regionables')->insert(['region_id'=>3735, 'regionable_id'=>3261, 'regionable_type'=>'districts']); //Batang Batang
            DB::table('regionables')->insert(['region_id'=>3735, 'regionable_id'=>3262, 'regionable_type'=>'districts']); //Dungkek
                DB::table('regions')->insert(['id'=>3736, 'parent'=>3735, 'code'=>'69474', 'type'=>'village', 'name'=>'Village 69474, Districts 6947, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37408, 'regionable_type'=>'village']); //Bancamara
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37409, 'regionable_type'=>'village']); //Banraas
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37410, 'regionable_type'=>'village']); //Bicabi
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37411, 'regionable_type'=>'village']); //Bungin Bungin
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37412, 'regionable_type'=>'village']); //Bunpenang
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37413, 'regionable_type'=>'village']); //Candi
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37414, 'regionable_type'=>'village']); //Dungkek
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37415, 'regionable_type'=>'village']); //Jadung
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37416, 'regionable_type'=>'village']); //Lapa Daya
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37417, 'regionable_type'=>'village']); //Lapa Laok
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37418, 'regionable_type'=>'village']); //Lapa Taman
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37419, 'regionable_type'=>'village']); //Romben Barat
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37420, 'regionable_type'=>'village']); //Romben Guna
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37421, 'regionable_type'=>'village']); //Romben Rana
                DB::table('regionables')->insert(['region_id'=>3736, 'regionable_id'=>37422, 'regionable_type'=>'village']); //Tamansare
            DB::table('regions')->insert(['id'=>3737, 'parent'=>3723, 'code'=>'6948', 'type'=>'districts', 'name'=>'Districts 6948, City 694, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3737, 'regionable_id'=>3263, 'regionable_type'=>'districts']); //Talango
            DB::table('regionables')->insert(['region_id'=>3737, 'regionable_id'=>3264, 'regionable_type'=>'districts']); //Gili Ginting (giligenteng)
            DB::table('regionables')->insert(['region_id'=>3737, 'regionable_id'=>3265, 'regionable_type'=>'districts']); //Gayam
            DB::table('regionables')->insert(['region_id'=>3737, 'regionable_id'=>3266, 'regionable_type'=>'districts']); //Nonggunong
            DB::table('regionables')->insert(['region_id'=>3737, 'regionable_id'=>3267, 'regionable_type'=>'districts']); //Ra\as (raas)
                DB::table('regions')->insert(['id'=>3738, 'parent'=>3737, 'code'=>'69485', 'type'=>'village', 'name'=>'Village 69485, Districts 6948, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37457, 'regionable_type'=>'village']); //Alasmalang
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37458, 'regionable_type'=>'village']); //Brakas
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37459, 'regionable_type'=>'village']); //Guwa Guwa
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37460, 'regionable_type'=>'village']); //Jungkat
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37461, 'regionable_type'=>'village']); //Karangnangka
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37462, 'regionable_type'=>'village']); //Karopoh
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37463, 'regionable_type'=>'village']); //Ketupat
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37464, 'regionable_type'=>'village']); //Poteran
                DB::table('regionables')->insert(['region_id'=>3738, 'regionable_id'=>37465, 'regionable_type'=>'village']); //Tonduk
            DB::table('regions')->insert(['id'=>3739, 'parent'=>3723, 'code'=>'6949', 'type'=>'districts', 'name'=>'Districts 6949, City 694, Province 6']);
            DB::table('regionables')->insert(['region_id'=>3739, 'regionable_id'=>3268, 'regionable_type'=>'districts']); //Arjasa
            DB::table('regionables')->insert(['region_id'=>3739, 'regionable_id'=>3269, 'regionable_type'=>'districts']); //Kangayan
            DB::table('regionables')->insert(['region_id'=>3739, 'regionable_id'=>3270, 'regionable_type'=>'districts']); //Masalembu
            DB::table('regionables')->insert(['region_id'=>3739, 'regionable_id'=>3271, 'regionable_type'=>'districts']); //Sapeken
                DB::table('regions')->insert(['id'=>3740, 'parent'=>3739, 'code'=>'69493', 'type'=>'village', 'name'=>'Village 69493, Districts 6949, City 694, Province 6']);
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37498, 'regionable_type'=>'village']); //Pagerungan Besar
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37499, 'regionable_type'=>'village']); //Pagerungan Kecil
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37500, 'regionable_type'=>'village']); //Paliat
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37501, 'regionable_type'=>'village']); //Sabuntan
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37502, 'regionable_type'=>'village']); //Sakala
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37503, 'regionable_type'=>'village']); //Sapeken
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37504, 'regionable_type'=>'village']); //Sasiil (saseel)
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37505, 'regionable_type'=>'village']); //Sepanjang
                DB::table('regionables')->insert(['region_id'=>3740, 'regionable_id'=>37506, 'regionable_type'=>'village']); //Tanjungkiaok
    }
}
