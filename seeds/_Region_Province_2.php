<?php

use Illuminate\Database\Seeder;

class _Region_Province_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['id'=>546, 'code'=>'2', 'type'=>'province', 'name'=>'Province 2']);

        //Kepulauan Riau
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>17, 'regionable_type'=>'province']); //Kepulauan Riau
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>218, 'regionable_type'=>'city']); //Tanjung Pinang city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>219, 'regionable_type'=>'city']); //Bintan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>220, 'regionable_type'=>'city']); //Batam city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>221, 'regionable_type'=>'city']); //Karimun regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>222, 'regionable_type'=>'city']); //Natuna regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>223, 'regionable_type'=>'city']); //Kepulauan Anambas regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>224, 'regionable_type'=>'city']); //Lingga regencies

        DB::table('regions')->insert(['id'=>547, 'parent'=>546, 'code'=>'291', 'type'=>'city', 'name'=>'City 291, Province 2']);
        DB::table('regionables')->insert(['region_id'=>547, 'regionable_id'=>218, 'regionable_type'=>'city']); //Tanjung Pinang city
        DB::table('regionables')->insert(['region_id'=>547, 'regionable_id'=>219, 'regionable_type'=>'city']); //Bintan regencies
            DB::table('regions')->insert(['id'=>548, 'parent'=>547, 'code'=>'2913', 'type'=>'districts', 'name'=>'Districts 2913, City 291, Province 2']);
            DB::table('regionables')->insert(['region_id'=>548, 'regionable_id'=>3904, 'regionable_type'=>'districts']); //Teluk Bintan
                DB::table('regions')->insert(['id'=>549, 'parent'=>548, 'code'=>'29132', 'type'=>'village', 'name'=>'Village 29132, Districts 2913, City 291, Province 2']);
                DB::table('regionables')->insert(['region_id'=>549, 'regionable_id'=>44666, 'regionable_type'=>'village']); //Tembeling
                DB::table('regionables')->insert(['region_id'=>549, 'regionable_id'=>44667, 'regionable_type'=>'village']); //Tembeling Tanjung
                DB::table('regions')->insert(['id'=>550, 'parent'=>548, 'code'=>'29133', 'type'=>'village', 'name'=>'Village 29133, Districts 2913, City 291, Province 2']);
                DB::table('regionables')->insert(['region_id'=>550, 'regionable_id'=>44668, 'regionable_type'=>'village']); //Bintan Buyu
                DB::table('regions')->insert(['id'=>551, 'parent'=>548, 'code'=>'29134', 'type'=>'village', 'name'=>'Village 29134, Districts 2913, City 291, Province 2']);
                DB::table('regionables')->insert(['region_id'=>551, 'regionable_id'=>44669, 'regionable_type'=>'village']); //Penaga
                DB::table('regions')->insert(['id'=>552, 'parent'=>548, 'code'=>'29135', 'type'=>'village', 'name'=>'Village 29135, Districts 2913, City 291, Province 2']);
                DB::table('regionables')->insert(['region_id'=>552, 'regionable_id'=>44670, 'regionable_type'=>'village']); //Pengujan
                DB::table('regions')->insert(['id'=>553, 'parent'=>548, 'code'=>'29136', 'type'=>'village', 'name'=>'Village 29136, Districts 2913, City 291, Province 2']);
                DB::table('regionables')->insert(['region_id'=>553, 'regionable_id'=>44671, 'regionable_type'=>'village']); //Pangkil
            DB::table('regions')->insert(['id'=>554, 'parent'=>547, 'code'=>'2915', 'type'=>'districts', 'name'=>'Districts 2915, City 291, Province 2']);
            DB::table('regionables')->insert(['region_id'=>554, 'regionable_id'=>3905, 'regionable_type'=>'districts']); //Bintan Pesisir
            DB::table('regionables')->insert(['region_id'=>554, 'regionable_id'=>3906, 'regionable_type'=>'districts']); //Mantang
            DB::table('regionables')->insert(['region_id'=>554, 'regionable_id'=>3907, 'regionable_type'=>'districts']); //Gunung Kijang
            DB::table('regionables')->insert(['region_id'=>554, 'regionable_id'=>3908, 'regionable_type'=>'districts']); //Bintan Timur
            DB::table('regionables')->insert(['region_id'=>554, 'regionable_id'=>3909, 'regionable_type'=>'districts']); //Toapaya
            DB::table('regionables')->insert(['region_id'=>554, 'regionable_id'=>3910, 'regionable_type'=>'districts']); //Teluk Sebong
            DB::table('regionables')->insert(['region_id'=>554, 'regionable_id'=>3911, 'regionable_type'=>'districts']); //Seri/sri Kuala Lobam
            DB::table('regionables')->insert(['region_id'=>554, 'regionable_id'=>3912, 'regionable_type'=>'districts']); //Bintan Utara
                DB::table('regions')->insert(['id'=>555, 'parent'=>554, 'code'=>'29152', 'type'=>'village', 'name'=>'Village 29152, Districts 2915, City 291, Province 2']);
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44692, 'regionable_type'=>'village']); //Berakit
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44693, 'regionable_type'=>'village']); //Ekang Anculai
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44694, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44695, 'regionable_type'=>'village']); //Pengudang
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44696, 'regionable_type'=>'village']); //Sebung/sebong Lagoi
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44697, 'regionable_type'=>'village']); //Sebung/sebong Pereh
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44698, 'regionable_type'=>'village']); //Sri Bintan
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44699, 'regionable_type'=>'village']); //Busung
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44700, 'regionable_type'=>'village']); //Kuala Sempang
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44701, 'regionable_type'=>'village']); //Tanjung Permai
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44702, 'regionable_type'=>'village']); //Teluk Lobam
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44703, 'regionable_type'=>'village']); //Teluk Sasah
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44704, 'regionable_type'=>'village']); //Lancang Kuning
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44705, 'regionable_type'=>'village']); //Tanjung Uban Kota
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44706, 'regionable_type'=>'village']); //Tanjung Uban Selatan
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44707, 'regionable_type'=>'village']); //Tanjung Uban Timur
                DB::table('regionables')->insert(['region_id'=>555, 'regionable_id'=>44708, 'regionable_type'=>'village']); //Tanjung Uban Utara
            DB::table('regions')->insert(['id'=>556, 'parent'=>547, 'code'=>'2919', 'type'=>'districts', 'name'=>'Districts 2919, City 291, Province 2']);
            DB::table('regionables')->insert(['region_id'=>556, 'regionable_id'=>3913, 'regionable_type'=>'districts']); //Tambelan
                DB::table('regions')->insert(['id'=>557, 'parent'=>556, 'code'=>'29193', 'type'=>'village', 'name'=>'Village 29193, Districts 2919, City 291, Province 2']);
                DB::table('regionables')->insert(['region_id'=>557, 'regionable_id'=>44709, 'regionable_type'=>'village']); //Batu Lepuk
                DB::table('regionables')->insert(['region_id'=>557, 'regionable_id'=>44710, 'regionable_type'=>'village']); //Kampung Hilir
                DB::table('regionables')->insert(['region_id'=>557, 'regionable_id'=>44711, 'regionable_type'=>'village']); //Kampung Melayu
                DB::table('regionables')->insert(['region_id'=>557, 'regionable_id'=>44712, 'regionable_type'=>'village']); //Kukup
                DB::table('regionables')->insert(['region_id'=>557, 'regionable_id'=>44713, 'regionable_type'=>'village']); //Pengikik
                DB::table('regionables')->insert(['region_id'=>557, 'regionable_id'=>44714, 'regionable_type'=>'village']); //Pulau Mentebung
                DB::table('regionables')->insert(['region_id'=>557, 'regionable_id'=>44715, 'regionable_type'=>'village']); //Pulau Pinang
                DB::table('regionables')->insert(['region_id'=>557, 'regionable_id'=>44716, 'regionable_type'=>'village']); //Teluk Sekuni
        DB::table('regions')->insert(['id'=>558, 'parent'=>546, 'code'=>'294', 'type'=>'city', 'name'=>'City 294, Province 2']);
        DB::table('regionables')->insert(['region_id'=>558, 'regionable_id'=>220, 'regionable_type'=>'city']); //Batam city
            DB::table('regions')->insert(['id'=>559, 'parent'=>558, 'code'=>'2941', 'type'=>'districts', 'name'=>'Districts 2941, City 294, Province 2']);
            DB::table('regionables')->insert(['region_id'=>559, 'regionable_id'=>3914, 'regionable_type'=>'districts']); //Belakang Padang
                DB::table('regions')->insert(['id'=>560, 'parent'=>559, 'code'=>'29412', 'type'=>'village', 'name'=>'Village 29412, Districts 2941, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>560, 'regionable_id'=>44717, 'regionable_type'=>'village']); //Pemping
                DB::table('regions')->insert(['id'=>561, 'parent'=>559, 'code'=>'29413', 'type'=>'village', 'name'=>'Village 29413, Districts 2941, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>561, 'regionable_id'=>44718, 'regionable_type'=>'village']); //Kasu
                DB::table('regions')->insert(['id'=>562, 'parent'=>559, 'code'=>'29414', 'type'=>'village', 'name'=>'Village 29414, Districts 2941, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>562, 'regionable_id'=>44719, 'regionable_type'=>'village']); //Pecong
                DB::table('regions')->insert(['id'=>563, 'parent'=>559, 'code'=>'29416', 'type'=>'village', 'name'=>'Village 29416, Districts 2941, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>563, 'regionable_id'=>44720, 'regionable_type'=>'village']); //Pulau Terong
                DB::table('regionables')->insert(['region_id'=>563, 'regionable_id'=>44721, 'regionable_type'=>'village']); //Sekanak Raya
                DB::table('regionables')->insert(['region_id'=>563, 'regionable_id'=>44722, 'regionable_type'=>'village']); //Tanjung Sari
            DB::table('regions')->insert(['id'=>564, 'parent'=>558, 'code'=>'2942', 'type'=>'districts', 'name'=>'Districts 2942, City 294, Province 2']);
            DB::table('regionables')->insert(['region_id'=>564, 'regionable_id'=>3915, 'regionable_type'=>'districts']); //Batu Aji
            DB::table('regionables')->insert(['region_id'=>564, 'regionable_id'=>3916, 'regionable_type'=>'districts']); //Sekupang
                DB::table('regions')->insert(['id'=>565, 'parent'=>564, 'code'=>'29425', 'type'=>'village', 'name'=>'Village 29425, Districts 2942, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>565, 'regionable_id'=>44727, 'regionable_type'=>'village']); //Tanjung Riau
                DB::table('regionables')->insert(['region_id'=>565, 'regionable_id'=>44728, 'regionable_type'=>'village']); //Tiban Lama
                DB::table('regions')->insert(['id'=>566, 'parent'=>564, 'code'=>'29426', 'type'=>'village', 'name'=>'Village 29426, Districts 2942, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>566, 'regionable_id'=>44729, 'regionable_type'=>'village']); //Tiban Baru
                DB::table('regionables')->insert(['region_id'=>566, 'regionable_id'=>44730, 'regionable_type'=>'village']); //Tiban Indah
                DB::table('regions')->insert(['id'=>567, 'parent'=>564, 'code'=>'29427', 'type'=>'village', 'name'=>'Village 29427, Districts 2942, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>567, 'regionable_id'=>44731, 'regionable_type'=>'village']); //Patam Lestari
                DB::table('regions')->insert(['id'=>568, 'parent'=>564, 'code'=>'29428', 'type'=>'village', 'name'=>'Village 29428, Districts 2942, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>568, 'regionable_id'=>44732, 'regionable_type'=>'village']); //Sungai Harapan
                DB::table('regionables')->insert(['region_id'=>568, 'regionable_id'=>44733, 'regionable_type'=>'village']); //Tanjung Pinggir
            DB::table('regions')->insert(['id'=>569, 'parent'=>558, 'code'=>'2943', 'type'=>'districts', 'name'=>'Districts 2943, City 294, Province 2']);
            DB::table('regionables')->insert(['region_id'=>569, 'regionable_id'=>3915, 'regionable_type'=>'districts']); //Batu Aji
            DB::table('regionables')->insert(['region_id'=>569, 'regionable_id'=>3917, 'regionable_type'=>'districts']); //Batam Kota
            DB::table('regionables')->insert(['region_id'=>569, 'regionable_id'=>3918, 'regionable_type'=>'districts']); //Lubuk Baja
            DB::table('regionables')->insert(['region_id'=>569, 'regionable_id'=>3919, 'regionable_type'=>'districts']); //Bengkong
            DB::table('regionables')->insert(['region_id'=>569, 'regionable_id'=>3920, 'regionable_type'=>'districts']); //Sei/sungai Beduk
            DB::table('regionables')->insert(['region_id'=>569, 'regionable_id'=>3921, 'regionable_type'=>'districts']); //Sagulung
                DB::table('regions')->insert(['id'=>570, 'parent'=>569, 'code'=>'29439', 'type'=>'village', 'name'=>'Village 29439, Districts 2943, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>570, 'regionable_id'=>44753, 'regionable_type'=>'village']); //Sagulung Kota
                DB::table('regionables')->insert(['region_id'=>570, 'regionable_id'=>44754, 'regionable_type'=>'village']); //Sungai Binti
                DB::table('regionables')->insert(['region_id'=>570, 'regionable_id'=>44755, 'regionable_type'=>'village']); //Sungai Langkai
                DB::table('regionables')->insert(['region_id'=>570, 'regionable_id'=>44756, 'regionable_type'=>'village']); //Sungai Lekop
                DB::table('regionables')->insert(['region_id'=>570, 'regionable_id'=>44757, 'regionable_type'=>'village']); //Sungai Pelenggut/pelunggut
                DB::table('regionables')->insert(['region_id'=>570, 'regionable_id'=>44758, 'regionable_type'=>'village']); //Tembesi
            DB::table('regions')->insert(['id'=>571, 'parent'=>558, 'code'=>'2944', 'type'=>'districts', 'name'=>'Districts 2944, City 294, Province 2']);
            DB::table('regionables')->insert(['region_id'=>571, 'regionable_id'=>3918, 'regionable_type'=>'districts']); //Lubuk Baja
                DB::table('regions')->insert(['id'=>572, 'parent'=>571, 'code'=>'29441', 'type'=>'village', 'name'=>'Village 29441, Districts 2944, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>572, 'regionable_id'=>44741, 'regionable_type'=>'village']); //Batu Selicin
                DB::table('regions')->insert(['id'=>573, 'parent'=>571, 'code'=>'29443', 'type'=>'village', 'name'=>'Village 29443, Districts 2944, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>573, 'regionable_id'=>44742, 'regionable_type'=>'village']); //Kampung Pelita
                DB::table('regions')->insert(['id'=>574, 'parent'=>571, 'code'=>'29444', 'type'=>'village', 'name'=>'Village 29444, Districts 2944, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>574, 'regionable_id'=>44743, 'regionable_type'=>'village']); //Lubuk Baja Kota
                DB::table('regions')->insert(['id'=>575, 'parent'=>571, 'code'=>'29445', 'type'=>'village', 'name'=>'Village 29445, Districts 2944, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>575, 'regionable_id'=>44744, 'regionable_type'=>'village']); //Tanjung Uma
            DB::table('regions')->insert(['id'=>576, 'parent'=>558, 'code'=>'2945', 'type'=>'districts', 'name'=>'Districts 2945, City 294, Province 2']);
            DB::table('regionables')->insert(['region_id'=>576, 'regionable_id'=>3919, 'regionable_type'=>'districts']); //Bengkong
            DB::table('regionables')->insert(['region_id'=>576, 'regionable_id'=>3922, 'regionable_type'=>'districts']); //Batu Ampar
                DB::table('regions')->insert(['id'=>577, 'parent'=>576, 'code'=>'29452', 'type'=>'village', 'name'=>'Village 29452, Districts 2945, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>577, 'regionable_id'=>44759, 'regionable_type'=>'village']); //Batu Merah
                DB::table('regions')->insert(['id'=>578, 'parent'=>576, 'code'=>'29453', 'type'=>'village', 'name'=>'Village 29453, Districts 2945, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>578, 'regionable_id'=>44760, 'regionable_type'=>'village']); //Sungai Jodoh
                DB::table('regionables')->insert(['region_id'=>578, 'regionable_id'=>44761, 'regionable_type'=>'village']); //Tanjung Sengkuang
                DB::table('regions')->insert(['id'=>579, 'parent'=>576, 'code'=>'29454', 'type'=>'village', 'name'=>'Village 29454, Districts 2945, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>579, 'regionable_id'=>44762, 'regionable_type'=>'village']); //Kampung Seraya
            DB::table('regions')->insert(['id'=>580, 'parent'=>558, 'code'=>'2946', 'type'=>'districts', 'name'=>'Districts 2946, City 294, Province 2']);
            DB::table('regionables')->insert(['region_id'=>580, 'regionable_id'=>3917, 'regionable_type'=>'districts']); //Batam Kota
            DB::table('regionables')->insert(['region_id'=>580, 'regionable_id'=>3923, 'regionable_type'=>'districts']); //Nongsa
                DB::table('regions')->insert(['id'=>581, 'parent'=>580, 'code'=>'29465', 'type'=>'village', 'name'=>'Village 29465, Districts 2946, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>581, 'regionable_id'=>44763, 'regionable_type'=>'village']); //Sambau
                DB::table('regions')->insert(['id'=>582, 'parent'=>580, 'code'=>'29466', 'type'=>'village', 'name'=>'Village 29466, Districts 2946, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>582, 'regionable_id'=>44764, 'regionable_type'=>'village']); //Batu Besar
                DB::table('regions')->insert(['id'=>583, 'parent'=>580, 'code'=>'29467', 'type'=>'village', 'name'=>'Village 29467, Districts 2946, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>583, 'regionable_id'=>44765, 'regionable_type'=>'village']); //Kabil
                DB::table('regions')->insert(['id'=>584, 'parent'=>580, 'code'=>'29468', 'type'=>'village', 'name'=>'Village 29468, Districts 2946, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>584, 'regionable_id'=>44766, 'regionable_type'=>'village']); //Ngenang
            DB::table('regions')->insert(['id'=>585, 'parent'=>558, 'code'=>'2947', 'type'=>'districts', 'name'=>'Districts 2947, City 294, Province 2']);
            DB::table('regionables')->insert(['region_id'=>585, 'regionable_id'=>3924, 'regionable_type'=>'districts']); //Bulang
                DB::table('regions')->insert(['id'=>586, 'parent'=>585, 'code'=>'29471', 'type'=>'village', 'name'=>'Village 29471, Districts 2947, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>586, 'regionable_id'=>44767, 'regionable_type'=>'village']); //Bulang Lintang
                DB::table('regions')->insert(['id'=>587, 'parent'=>585, 'code'=>'29472', 'type'=>'village', 'name'=>'Village 29472, Districts 2947, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>587, 'regionable_id'=>44768, 'regionable_type'=>'village']); //Pulau Buluh
                DB::table('regions')->insert(['id'=>588, 'parent'=>585, 'code'=>'29473', 'type'=>'village', 'name'=>'Village 29473, Districts 2947, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>588, 'regionable_id'=>44769, 'regionable_type'=>'village']); //Pantai Gelam
                DB::table('regions')->insert(['id'=>589, 'parent'=>585, 'code'=>'29474', 'type'=>'village', 'name'=>'Village 29474, Districts 2947, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>589, 'regionable_id'=>44770, 'regionable_type'=>'village']); //Batu Legong
                DB::table('regions')->insert(['id'=>590, 'parent'=>585, 'code'=>'29475', 'type'=>'village', 'name'=>'Village 29475, Districts 2947, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>590, 'regionable_id'=>44771, 'regionable_type'=>'village']); //Temoyong
                DB::table('regions')->insert(['id'=>591, 'parent'=>585, 'code'=>'29476', 'type'=>'village', 'name'=>'Village 29476, Districts 2947, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>591, 'regionable_id'=>44772, 'regionable_type'=>'village']); //Pulau Setokok
            DB::table('regions')->insert(['id'=>592, 'parent'=>558, 'code'=>'2948', 'type'=>'districts', 'name'=>'Districts 2948, City 294, Province 2']);
            DB::table('regionables')->insert(['region_id'=>592, 'regionable_id'=>3925, 'regionable_type'=>'districts']); //Galang
                DB::table('regions')->insert(['id'=>593, 'parent'=>592, 'code'=>'29481', 'type'=>'village', 'name'=>'Village 29481, Districts 2948, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>593, 'regionable_id'=>44773, 'regionable_type'=>'village']); //Sembulang (pulau Rempang)
                DB::table('regions')->insert(['id'=>594, 'parent'=>592, 'code'=>'29482', 'type'=>'village', 'name'=>'Village 29482, Districts 2948, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>594, 'regionable_id'=>44774, 'regionable_type'=>'village']); //Rempang Cate
                DB::table('regions')->insert(['id'=>595, 'parent'=>592, 'code'=>'29483', 'type'=>'village', 'name'=>'Village 29483, Districts 2948, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>595, 'regionable_id'=>44775, 'regionable_type'=>'village']); //Air Raja
                DB::table('regionables')->insert(['region_id'=>595, 'regionable_id'=>44776, 'regionable_type'=>'village']); //Subang Mas
                DB::table('regions')->insert(['id'=>596, 'parent'=>592, 'code'=>'29484', 'type'=>'village', 'name'=>'Village 29484, Districts 2948, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>596, 'regionable_id'=>44777, 'regionable_type'=>'village']); //Galang Baru (pulau)
                DB::table('regions')->insert(['id'=>597, 'parent'=>592, 'code'=>'29485', 'type'=>'village', 'name'=>'Village 29485, Districts 2948, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>597, 'regionable_id'=>44778, 'regionable_type'=>'village']); //Sijantung
                DB::table('regions')->insert(['id'=>598, 'parent'=>592, 'code'=>'29486', 'type'=>'village', 'name'=>'Village 29486, Districts 2948, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>598, 'regionable_id'=>44779, 'regionable_type'=>'village']); //Karas (pulau Karas)
                DB::table('regions')->insert(['id'=>599, 'parent'=>592, 'code'=>'29487', 'type'=>'village', 'name'=>'Village 29487, Districts 2948, City 294, Province 2']);
                DB::table('regionables')->insert(['region_id'=>599, 'regionable_id'=>44780, 'regionable_type'=>'village']); //Pulau Abang
        DB::table('regions')->insert(['id'=>600, 'parent'=>546, 'code'=>'296', 'type'=>'city', 'name'=>'City 296, Province 2']);
        DB::table('regionables')->insert(['region_id'=>600, 'regionable_id'=>221, 'regionable_type'=>'city']); //Karimun regencies
            DB::table('regions')->insert(['id'=>601, 'parent'=>600, 'code'=>'2966', 'type'=>'districts', 'name'=>'Districts 2966, City 296, Province 2']);
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3926, 'regionable_type'=>'districts']); //Karimun
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3927, 'regionable_type'=>'districts']); //Ungar
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3928, 'regionable_type'=>'districts']); //Belat
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3929, 'regionable_type'=>'districts']); //Kundur
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3930, 'regionable_type'=>'districts']); //Kundur Barat
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3931, 'regionable_type'=>'districts']); //Kundur Utara
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3932, 'regionable_type'=>'districts']); //Moro
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3933, 'regionable_type'=>'districts']); //Tebing
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3934, 'regionable_type'=>'districts']); //Meral
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3935, 'regionable_type'=>'districts']); //Buru
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3936, 'regionable_type'=>'districts']); //Meral Barat
            DB::table('regionables')->insert(['region_id'=>601, 'regionable_id'=>3937, 'regionable_type'=>'districts']); //Durai
                DB::table('regions')->insert(['id'=>602, 'parent'=>601, 'code'=>'29664', 'type'=>'village', 'name'=>'Village 29664, Districts 2966, City 296, Province 2']);
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44834, 'regionable_type'=>'village']); //Baran Barat
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44835, 'regionable_type'=>'village']); //Baran Timur
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44836, 'regionable_type'=>'village']); //Meral Kota
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44837, 'regionable_type'=>'village']); //Pasir Benut
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44838, 'regionable_type'=>'village']); //Sei/sungai Raya
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44839, 'regionable_type'=>'village']); //Sungai Pasir
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44840, 'regionable_type'=>'village']); //Buru
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44841, 'regionable_type'=>'village']); //Lubuk Puding
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44842, 'regionable_type'=>'village']); //Tanjung Batu Kecil
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44843, 'regionable_type'=>'village']); //Tanjung Hutan
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44844, 'regionable_type'=>'village']); //Darussalam
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44845, 'regionable_type'=>'village']); //Pangke
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44846, 'regionable_type'=>'village']); //Pangke Barat
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44847, 'regionable_type'=>'village']); //Pasir Panjang
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44848, 'regionable_type'=>'village']); //Durai
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44849, 'regionable_type'=>'village']); //Sanglar
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44850, 'regionable_type'=>'village']); //Simembang (semembang)
                DB::table('regionables')->insert(['region_id'=>602, 'regionable_id'=>44851, 'regionable_type'=>'village']); //Tanjung Kilang
        DB::table('regions')->insert(['id'=>603, 'parent'=>546, 'code'=>'297', 'type'=>'city', 'name'=>'City 297, Province 2']);
        DB::table('regionables')->insert(['region_id'=>603, 'regionable_id'=>222, 'regionable_type'=>'city']); //Natuna regencies
        DB::table('regionables')->insert(['region_id'=>603, 'regionable_id'=>223, 'regionable_type'=>'city']); //Kepulauan Anambas regencies
            DB::table('regions')->insert(['id'=>604, 'parent'=>603, 'code'=>'2978', 'type'=>'districts', 'name'=>'Districts 2978, City 297, Province 2']);
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3938, 'regionable_type'=>'districts']); //Serasan Timur
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3939, 'regionable_type'=>'districts']); //Serasan
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3940, 'regionable_type'=>'districts']); //Subi
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3941, 'regionable_type'=>'districts']); //Bunguran Barat
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3942, 'regionable_type'=>'districts']); //Bunguran Tengah
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3943, 'regionable_type'=>'districts']); //Pulau Laut
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3944, 'regionable_type'=>'districts']); //Bunguran Timur
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3945, 'regionable_type'=>'districts']); //Bunguran Utara
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3946, 'regionable_type'=>'districts']); //Bunguran Selatan
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3947, 'regionable_type'=>'districts']); //Bunguran Timur Laut
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3948, 'regionable_type'=>'districts']); //Pulau Tiga
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3949, 'regionable_type'=>'districts']); //Midai
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3950, 'regionable_type'=>'districts']); //Siantan Tengah
            DB::table('regionables')->insert(['region_id'=>604, 'regionable_id'=>3951, 'regionable_type'=>'districts']); //Palmatak
                DB::table('regions')->insert(['id'=>605, 'parent'=>604, 'code'=>'29783', 'type'=>'village', 'name'=>'Village 29783, Districts 2978, City 297, Province 2']);
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44881, 'regionable_type'=>'village']); //Air Lengit
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44882, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44883, 'regionable_type'=>'village']); //Tapau
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44884, 'regionable_type'=>'village']); //Air Payang
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44885, 'regionable_type'=>'village']); //Kadur
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44886, 'regionable_type'=>'village']); //Tanjung Pala
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44887, 'regionable_type'=>'village']); //Bandarsyah
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44888, 'regionable_type'=>'village']); //Batu Gajah
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44889, 'regionable_type'=>'village']); //Ranai Darat
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44890, 'regionable_type'=>'village']); //Ranai Kota
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44891, 'regionable_type'=>'village']); //Sepempang
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44892, 'regionable_type'=>'village']); //Sungai Ulu
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44893, 'regionable_type'=>'village']); //Belakang Gunung
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44894, 'regionable_type'=>'village']); //Gunung Durian
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44895, 'regionable_type'=>'village']); //Kelarik
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44896, 'regionable_type'=>'village']); //Kelarik Air Mali
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44897, 'regionable_type'=>'village']); //Kelarik Barat
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44898, 'regionable_type'=>'village']); //Kelarik Utara
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44899, 'regionable_type'=>'village']); //Seluan Barat
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44900, 'regionable_type'=>'village']); //Teluk Buton
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44901, 'regionable_type'=>'village']); //Cemaga
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44902, 'regionable_type'=>'village']); //Cemaga Selatan (setegar)
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44903, 'regionable_type'=>'village']); //Cemaga Tengah
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44904, 'regionable_type'=>'village']); //Cemaga Utara (singgang Bbulan)
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44905, 'regionable_type'=>'village']); //Ceruk
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44906, 'regionable_type'=>'village']); //Kelanga
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44907, 'regionable_type'=>'village']); //Limau Manis
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44908, 'regionable_type'=>'village']); //Pengadah
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44909, 'regionable_type'=>'village']); //Sebadai Ulu / Hulu
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44910, 'regionable_type'=>'village']); //Seleman
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44911, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44912, 'regionable_type'=>'village']); //Pulau Tiga
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44913, 'regionable_type'=>'village']); //Sabang Mawang
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44914, 'regionable_type'=>'village']); //Sabang Mawang Barat
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44915, 'regionable_type'=>'village']); //Sededap
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44916, 'regionable_type'=>'village']); //Selading
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44917, 'regionable_type'=>'village']); //Serantas
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44918, 'regionable_type'=>'village']); //Setumuk
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44919, 'regionable_type'=>'village']); //Tanjung Batang
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44920, 'regionable_type'=>'village']); //Tanjung Kumbik Utara
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44921, 'regionable_type'=>'village']); //Teluk Labuh
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44928, 'regionable_type'=>'village']); //Air Asuk
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44929, 'regionable_type'=>'village']); //Air Sena
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44930, 'regionable_type'=>'village']); //Lidi
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44931, 'regionable_type'=>'village']); //Liuk
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44932, 'regionable_type'=>'village']); //Teluk Siantan
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44933, 'regionable_type'=>'village']); //Teluk Sunting
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44934, 'regionable_type'=>'village']); //Batu Ampar
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44935, 'regionable_type'=>'village']); //Bayat
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44936, 'regionable_type'=>'village']); //Belibak
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44937, 'regionable_type'=>'village']); //Candi
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44938, 'regionable_type'=>'village']); //Ladan
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44939, 'regionable_type'=>'village']); //Langir
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44940, 'regionable_type'=>'village']); //Matak
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44941, 'regionable_type'=>'village']); //Mubur
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44942, 'regionable_type'=>'village']); //Payalaman
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44943, 'regionable_type'=>'village']); //Payamaram
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44944, 'regionable_type'=>'village']); //Piabung
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44945, 'regionable_type'=>'village']); //Piasan
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44946, 'regionable_type'=>'village']); //Putik
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44947, 'regionable_type'=>'village']); //Tebang
                DB::table('regionables')->insert(['region_id'=>605, 'regionable_id'=>44948, 'regionable_type'=>'village']); //Teluk Bayur
            DB::table('regions')->insert(['id'=>606, 'parent'=>603, 'code'=>'2979', 'type'=>'districts', 'name'=>'Districts 2979, City 297, Province 2']);
            DB::table('regionables')->insert(['region_id'=>606, 'regionable_id'=>3952, 'regionable_type'=>'districts']); //Siantan Selatan
            DB::table('regionables')->insert(['region_id'=>606, 'regionable_id'=>3953, 'regionable_type'=>'districts']); //Siantan Timur
            DB::table('regionables')->insert(['region_id'=>606, 'regionable_id'=>3954, 'regionable_type'=>'districts']); //Siantan
            DB::table('regionables')->insert(['region_id'=>606, 'regionable_id'=>3955, 'regionable_type'=>'districts']); //Jemaja
            DB::table('regionables')->insert(['region_id'=>606, 'regionable_id'=>3956, 'regionable_type'=>'districts']); //Jemaja Timur
                DB::table('regions')->insert(['id'=>607, 'parent'=>606, 'code'=>'29792', 'type'=>'village', 'name'=>'Village 29792, Districts 2979, City 297, Province 2']);
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44969, 'regionable_type'=>'village']); //Air Biru
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44970, 'regionable_type'=>'village']); //Batu Berapit
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44971, 'regionable_type'=>'village']); //Impol
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44972, 'regionable_type'=>'village']); //Keramut
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44973, 'regionable_type'=>'village']); //Landak
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44974, 'regionable_type'=>'village']); //Letung
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44975, 'regionable_type'=>'village']); //Mampok
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44976, 'regionable_type'=>'village']); //Rewak
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44977, 'regionable_type'=>'village']); //Sunggak
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44978, 'regionable_type'=>'village']); //Bukit Padi
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44979, 'regionable_type'=>'village']); //Genting Pulur
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44980, 'regionable_type'=>'village']); //Kuala Maras
                DB::table('regionables')->insert(['region_id'=>607, 'regionable_id'=>44981, 'regionable_type'=>'village']); //Ulu Maras
        DB::table('regions')->insert(['id'=>608, 'parent'=>546, 'code'=>'298', 'type'=>'city', 'name'=>'City 298, Province 2']);
        DB::table('regionables')->insert(['region_id'=>608, 'regionable_id'=>224, 'regionable_type'=>'city']); //Lingga regencies
            DB::table('regions')->insert(['id'=>609, 'parent'=>608, 'code'=>'2987', 'type'=>'districts', 'name'=>'Districts 2987, City 298, Province 2']);
            DB::table('regionables')->insert(['region_id'=>609, 'regionable_id'=>3957, 'regionable_type'=>'districts']); //Singkep
            DB::table('regionables')->insert(['region_id'=>609, 'regionable_id'=>3958, 'regionable_type'=>'districts']); //Singkep Pesisir
            DB::table('regionables')->insert(['region_id'=>609, 'regionable_id'=>3959, 'regionable_type'=>'districts']); //Lingga Timur
            DB::table('regionables')->insert(['region_id'=>609, 'regionable_id'=>3960, 'regionable_type'=>'districts']); //Lingga
            DB::table('regionables')->insert(['region_id'=>609, 'regionable_id'=>3961, 'regionable_type'=>'districts']); //Selayar
            DB::table('regionables')->insert(['region_id'=>609, 'regionable_id'=>3962, 'regionable_type'=>'districts']); //Senayang
            DB::table('regionables')->insert(['region_id'=>609, 'regionable_id'=>3963, 'regionable_type'=>'districts']); //Lingga Utara
            DB::table('regionables')->insert(['region_id'=>609, 'regionable_id'=>3964, 'regionable_type'=>'districts']); //Singkep Barat
                DB::table('regions')->insert(['id'=>610, 'parent'=>609, 'code'=>'29875', 'type'=>'village', 'name'=>'Village 29875, Districts 2987, City 298, Province 2']);
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45048, 'regionable_type'=>'village']); //Bakong
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45049, 'regionable_type'=>'village']); //Bukit Belah
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45050, 'regionable_type'=>'village']); //Busung Panjang
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45051, 'regionable_type'=>'village']); //Jaqoh
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45052, 'regionable_type'=>'village']); //Kuala Raya
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45053, 'regionable_type'=>'village']); //Langkap
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45054, 'regionable_type'=>'village']); //Marok Tua
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45055, 'regionable_type'=>'village']); //Posek
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45056, 'regionable_type'=>'village']); //Raya
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45057, 'regionable_type'=>'village']); //Suak Buaya
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45058, 'regionable_type'=>'village']); //Sungai Buluh
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45059, 'regionable_type'=>'village']); //Sungai Harapan
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45060, 'regionable_type'=>'village']); //Sungai Raya
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45061, 'regionable_type'=>'village']); //Tanjung Irat
                DB::table('regionables')->insert(['region_id'=>610, 'regionable_id'=>45062, 'regionable_type'=>'village']); //Tinjul

        //Nanggroe Aceh Darussalam 
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>21, 'regionable_type'=>'province']); //Nanggroe Aceh Darussalam 
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>260, 'regionable_type'=>'city']); //Banda Aceh city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>261, 'regionable_type'=>'city']); //Aceh Besar regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>262, 'regionable_type'=>'city']); //Sabang city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>263, 'regionable_type'=>'city']); //Aceh Barat regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>264, 'regionable_type'=>'city']); //Aceh Jaya regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>265, 'regionable_type'=>'city']); //Nagan Raya regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>266, 'regionable_type'=>'city']); //Aceh Selatan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>267, 'regionable_type'=>'city']); //Aceh Barat Daya regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>268, 'regionable_type'=>'city']); //Simeulue regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>269, 'regionable_type'=>'city']); //Pidie regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>270, 'regionable_type'=>'city']); //Pidie Jaya regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>271, 'regionable_type'=>'city']); //Bireuen regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>272, 'regionable_type'=>'city']); //Lhokseumawe city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>273, 'regionable_type'=>'city']); //Aceh Utara regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>274, 'regionable_type'=>'city']); //Langsa city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>275, 'regionable_type'=>'city']); //Aceh Timur regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>276, 'regionable_type'=>'city']); //Aceh Tamiang regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>277, 'regionable_type'=>'city']); //Aceh Tengah regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>278, 'regionable_type'=>'city']); //Bener Meriah regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>279, 'regionable_type'=>'city']); //Aceh Tenggara regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>280, 'regionable_type'=>'city']); //Gayo Lues regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>281, 'regionable_type'=>'city']); //Subulussalam city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>282, 'regionable_type'=>'city']); //Aceh Singkil regencies

        DB::table('regions')->insert(['id'=>611, 'parent'=>546, 'code'=>'231', 'type'=>'city', 'name'=>'City 231, Province 2']);
        DB::table('regionables')->insert(['region_id'=>611, 'regionable_id'=>260, 'regionable_type'=>'city']); //Banda Aceh city
            DB::table('regions')->insert(['id'=>612, 'parent'=>611, 'code'=>'2311', 'type'=>'districts', 'name'=>'Districts 2311, City 231, Province 2']);
            DB::table('regionables')->insert(['region_id'=>612, 'regionable_id'=>4420, 'regionable_type'=>'districts']); //Syiah Kuala
            DB::table('regionables')->insert(['region_id'=>612, 'regionable_id'=>4421, 'regionable_type'=>'districts']); //Ulee Kareng
                DB::table('regions')->insert(['id'=>613, 'parent'=>612, 'code'=>'23117', 'type'=>'village', 'name'=>'Village 23117, Districts 2311, City 231, Province 2']);
                DB::table('regionables')->insert(['region_id'=>613, 'regionable_id'=>49973, 'regionable_type'=>'village']); //Ceurih
                DB::table('regionables')->insert(['region_id'=>613, 'regionable_id'=>49974, 'regionable_type'=>'village']); //Doi/doy
                DB::table('regionables')->insert(['region_id'=>613, 'regionable_id'=>49975, 'regionable_type'=>'village']); //Iemasen Ulee Kareng
                DB::table('regionables')->insert(['region_id'=>613, 'regionable_id'=>49976, 'regionable_type'=>'village']); //Lamglumpang
                DB::table('regions')->insert(['id'=>614, 'parent'=>612, 'code'=>'23118', 'type'=>'village', 'name'=>'Village 23118, Districts 2311, City 231, Province 2']);
                DB::table('regionables')->insert(['region_id'=>614, 'regionable_id'=>49977, 'regionable_type'=>'village']); //Lambhuk
                DB::table('regionables')->insert(['region_id'=>614, 'regionable_id'=>49978, 'regionable_type'=>'village']); //Lamteh
                DB::table('regions')->insert(['id'=>615, 'parent'=>612, 'code'=>'23119', 'type'=>'village', 'name'=>'Village 23119, Districts 2311, City 231, Province 2']);
                DB::table('regionables')->insert(['region_id'=>615, 'regionable_id'=>49979, 'regionable_type'=>'village']); //Ilie
                DB::table('regionables')->insert(['region_id'=>615, 'regionable_id'=>49980, 'regionable_type'=>'village']); //Pango Deah
                DB::table('regionables')->insert(['region_id'=>615, 'regionable_id'=>49981, 'regionable_type'=>'village']); //Pango Raya
            DB::table('regions')->insert(['id'=>616, 'parent'=>611, 'code'=>'2312', 'type'=>'districts', 'name'=>'Districts 2312, City 231, Province 2']);
            DB::table('regionables')->insert(['region_id'=>616, 'regionable_id'=>4422, 'regionable_type'=>'districts']); //Kuta Alam
            DB::table('regionables')->insert(['region_id'=>616, 'regionable_id'=>4423, 'regionable_type'=>'districts']); //Kuta Raja
                DB::table('regions')->insert(['id'=>617, 'parent'=>616, 'code'=>'23128', 'type'=>'village', 'name'=>'Village 23128, Districts 2312, City 231, Province 2']);
                DB::table('regionables')->insert(['region_id'=>617, 'regionable_id'=>49993, 'regionable_type'=>'village']); //Gampong Jawa
                DB::table('regionables')->insert(['region_id'=>617, 'regionable_id'=>49994, 'regionable_type'=>'village']); //Gampong Pande
                DB::table('regions')->insert(['id'=>618, 'parent'=>616, 'code'=>'23129', 'type'=>'village', 'name'=>'Village 23129, Districts 2312, City 231, Province 2']);
                DB::table('regionables')->insert(['region_id'=>618, 'regionable_id'=>49995, 'regionable_type'=>'village']); //Keudah
                DB::table('regionables')->insert(['region_id'=>618, 'regionable_id'=>49996, 'regionable_type'=>'village']); //Peulanggahan
        DB::table('regions')->insert(['id'=>619, 'parent'=>546, 'code'=>'232', 'type'=>'city', 'name'=>'City 232, Province 2']);
        DB::table('regionables')->insert(['region_id'=>619, 'regionable_id'=>260, 'regionable_type'=>'city']); //Banda Aceh city
            DB::table('regions')->insert(['id'=>620, 'parent'=>619, 'code'=>'2323', 'type'=>'districts', 'name'=>'Districts 2323, City 232, Province 2']);
            DB::table('regionables')->insert(['region_id'=>620, 'regionable_id'=>4423, 'regionable_type'=>'districts']); //Kuta Raja
            DB::table('regionables')->insert(['region_id'=>620, 'regionable_id'=>4424, 'regionable_type'=>'districts']); //Jaya Baru
            DB::table('regionables')->insert(['region_id'=>620, 'regionable_id'=>4425, 'regionable_type'=>'districts']); //Meuraxa
            DB::table('regionables')->insert(['region_id'=>620, 'regionable_id'=>4426, 'regionable_type'=>'districts']); //Banda Raya
                DB::table('regions')->insert(['id'=>621, 'parent'=>620, 'code'=>'23238', 'type'=>'village', 'name'=>'Village 23238, Districts 2323, City 232, Province 2']);
                DB::table('regionables')->insert(['region_id'=>621, 'regionable_id'=>50024, 'regionable_type'=>'village']); //Lam Ara
                DB::table('regionables')->insert(['region_id'=>621, 'regionable_id'=>50025, 'regionable_type'=>'village']); //Lampuot
                DB::table('regionables')->insert(['region_id'=>621, 'regionable_id'=>50026, 'regionable_type'=>'village']); //Lhong Cut
                DB::table('regionables')->insert(['region_id'=>621, 'regionable_id'=>50027, 'regionable_type'=>'village']); //Lhong Raya
                DB::table('regionables')->insert(['region_id'=>621, 'regionable_id'=>50028, 'regionable_type'=>'village']); //Mibo
                DB::table('regionables')->insert(['region_id'=>621, 'regionable_id'=>50029, 'regionable_type'=>'village']); //Peunyeurat
                DB::table('regions')->insert(['id'=>622, 'parent'=>620, 'code'=>'23239', 'type'=>'village', 'name'=>'Village 23239, Districts 2323, City 232, Province 2']);
                DB::table('regionables')->insert(['region_id'=>622, 'regionable_id'=>50030, 'regionable_type'=>'village']); //Geuceu Iniem
                DB::table('regionables')->insert(['region_id'=>622, 'regionable_id'=>50031, 'regionable_type'=>'village']); //Geuceu Kayee Jato
                DB::table('regionables')->insert(['region_id'=>622, 'regionable_id'=>50032, 'regionable_type'=>'village']); //Geuceu Komplek
                DB::table('regionables')->insert(['region_id'=>622, 'regionable_id'=>50033, 'regionable_type'=>'village']); //Lam Lagang
            DB::table('regions')->insert(['id'=>623, 'parent'=>619, 'code'=>'2324', 'type'=>'districts', 'name'=>'Districts 2324, City 232, Province 2']);
            DB::table('regionables')->insert(['region_id'=>623, 'regionable_id'=>4423, 'regionable_type'=>'districts']); //Kuta Raja
            DB::table('regionables')->insert(['region_id'=>623, 'regionable_id'=>4424, 'regionable_type'=>'districts']); //Jaya Baru
            DB::table('regionables')->insert(['region_id'=>623, 'regionable_id'=>4427, 'regionable_type'=>'districts']); //Baiturrahman
            DB::table('regionables')->insert(['region_id'=>623, 'regionable_id'=>4428, 'regionable_type'=>'districts']); //Lueng Bata
                DB::table('regions')->insert(['id'=>624, 'parent'=>623, 'code'=>'23244', 'type'=>'village', 'name'=>'Village 23244, Districts 2324, City 232, Province 2']);
                DB::table('regionables')->insert(['region_id'=>624, 'regionable_id'=>50040, 'regionable_type'=>'village']); //Ateuk Deah Tanoh
                DB::table('regionables')->insert(['region_id'=>624, 'regionable_id'=>50041, 'regionable_type'=>'village']); //Ateuk Munjeng
                DB::table('regionables')->insert(['region_id'=>624, 'regionable_id'=>50042, 'regionable_type'=>'village']); //Neusu Aceh
                DB::table('regionables')->insert(['region_id'=>624, 'regionable_id'=>50044, 'regionable_type'=>'village']); //Lam Dom (landom)
                DB::table('regions')->insert(['id'=>625, 'parent'=>623, 'code'=>'23245', 'type'=>'village', 'name'=>'Village 23245, Districts 2324, City 232, Province 2']);
                DB::table('regionables')->insert(['region_id'=>625, 'regionable_id'=>50043, 'regionable_type'=>'village']); //Ateuk Jawo
                DB::table('regionables')->insert(['region_id'=>625, 'regionable_id'=>50045, 'regionable_type'=>'village']); //Batoh
                DB::table('regions')->insert(['id'=>626, 'parent'=>623, 'code'=>'23246', 'type'=>'village', 'name'=>'Village 23246, Districts 2324, City 232, Province 2']);
                DB::table('regionables')->insert(['region_id'=>626, 'regionable_id'=>50046, 'regionable_type'=>'village']); //Cot Mesjid
                DB::table('regions')->insert(['id'=>627, 'parent'=>623, 'code'=>'23247', 'type'=>'village', 'name'=>'Village 23247, Districts 2324, City 232, Province 2']);
                DB::table('regionables')->insert(['region_id'=>627, 'regionable_id'=>50047, 'regionable_type'=>'village']); //Lamseupeung
                DB::table('regionables')->insert(['region_id'=>627, 'regionable_id'=>50048, 'regionable_type'=>'village']); //Lueng Bata
                DB::table('regionables')->insert(['region_id'=>627, 'regionable_id'=>50049, 'regionable_type'=>'village']); //Panteriek
                DB::table('regions')->insert(['id'=>628, 'parent'=>623, 'code'=>'23248', 'type'=>'village', 'name'=>'Village 23248, Districts 2324, City 232, Province 2']);
                DB::table('regionables')->insert(['region_id'=>628, 'regionable_id'=>50050, 'regionable_type'=>'village']); //Blang Cut
                DB::table('regionables')->insert(['region_id'=>628, 'regionable_id'=>50051, 'regionable_type'=>'village']); //Lampaloh
                DB::table('regions')->insert(['id'=>629, 'parent'=>623, 'code'=>'23249', 'type'=>'village', 'name'=>'Village 23249, Districts 2324, City 232, Province 2']);
                DB::table('regionables')->insert(['region_id'=>629, 'regionable_id'=>50052, 'regionable_type'=>'village']); //Sukadamai
        DB::table('regions')->insert(['id'=>630, 'parent'=>546, 'code'=>'233', 'type'=>'city', 'name'=>'City 233, Province 2']);
        DB::table('regionables')->insert(['region_id'=>630, 'regionable_id'=>261, 'regionable_type'=>'city']); //Aceh Besar regencies
            DB::table('regions')->insert(['id'=>631, 'parent'=>630, 'code'=>'2335', 'type'=>'districts', 'name'=>'Districts 2335, City 233, Province 2']);
            DB::table('regionables')->insert(['region_id'=>631, 'regionable_id'=>4429, 'regionable_type'=>'districts']); //Peukan Bada
            DB::table('regionables')->insert(['region_id'=>631, 'regionable_id'=>4430, 'regionable_type'=>'districts']); //Darul Imarah
            DB::table('regionables')->insert(['region_id'=>631, 'regionable_id'=>4431, 'regionable_type'=>'districts']); //Darul Kamal
            DB::table('regionables')->insert(['region_id'=>631, 'regionable_id'=>4432, 'regionable_type'=>'districts']); //Lhoknga (lho\nga)
            DB::table('regionables')->insert(['region_id'=>631, 'regionable_id'=>4433, 'regionable_type'=>'districts']); //Leupung
            DB::table('regionables')->insert(['region_id'=>631, 'regionable_id'=>4434, 'regionable_type'=>'districts']); //Lhoong
                DB::table('regions')->insert(['id'=>632, 'parent'=>631, 'code'=>'23354', 'type'=>'village', 'name'=>'Village 23354, Districts 2335, City 233, Province 2']);
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50152, 'regionable_type'=>'village']); //Lampaya
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50159, 'regionable_type'=>'village']); //Baroh Blang Mee
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50160, 'regionable_type'=>'village']); //Baroh Genteut
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50161, 'regionable_type'=>'village']); //Baroh Krueng Kala
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50162, 'regionable_type'=>'village']); //Birek
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50163, 'regionable_type'=>'village']); //Cot
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50164, 'regionable_type'=>'village']); //Cundin
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50165, 'regionable_type'=>'village']); //Gapuy
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50166, 'regionable_type'=>'village']); //Glee Bruek
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50167, 'regionable_type'=>'village']); //Jantang
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50168, 'regionable_type'=>'village']); //Kareung
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50169, 'regionable_type'=>'village']); //Keutapang
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50170, 'regionable_type'=>'village']); //Lam Griheu
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50171, 'regionable_type'=>'village']); //Lam Juhang
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50172, 'regionable_type'=>'village']); //Lam Kuta Blang Mee
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50173, 'regionable_type'=>'village']); //Lam Sujen
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50174, 'regionable_type'=>'village']); //Meunasah Krueng Kala
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50175, 'regionable_type'=>'village']); //Meunasah Lhok
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50176, 'regionable_type'=>'village']); //Mon Mata
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50177, 'regionable_type'=>'village']); //Paroy
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50178, 'regionable_type'=>'village']); //Pasie
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50179, 'regionable_type'=>'village']); //Pudeng
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50180, 'regionable_type'=>'village']); //Saney
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50181, 'regionable_type'=>'village']); //Sengko Meulat
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50182, 'regionable_type'=>'village']); //Teungoh Blang Mee
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50183, 'regionable_type'=>'village']); //Teungoh Geunteut
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50184, 'regionable_type'=>'village']); //Tunong Krueng Kala
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50185, 'regionable_type'=>'village']); //Umong Seurebee
                DB::table('regionables')->insert(['region_id'=>632, 'regionable_id'=>50186, 'regionable_type'=>'village']); //Utamong
            DB::table('regions')->insert(['id'=>633, 'parent'=>630, 'code'=>'2336', 'type'=>'districts', 'name'=>'Districts 2336, City 233, Province 2']);
            DB::table('regionables')->insert(['region_id'=>633, 'regionable_id'=>4435, 'regionable_type'=>'districts']); //Suka Makmur
            DB::table('regionables')->insert(['region_id'=>633, 'regionable_id'=>4436, 'regionable_type'=>'districts']); //Mantasiek (montasik)
            DB::table('regionables')->insert(['region_id'=>633, 'regionable_id'=>4437, 'regionable_type'=>'districts']); //Blank Bintang
            DB::table('regionables')->insert(['region_id'=>633, 'regionable_id'=>4438, 'regionable_type'=>'districts']); //Indrapuri
            DB::table('regionables')->insert(['region_id'=>633, 'regionable_id'=>4439, 'regionable_type'=>'districts']); //Kota Cot Glie (kuta Cot Glie)
            DB::table('regionables')->insert(['region_id'=>633, 'regionable_id'=>4440, 'regionable_type'=>'districts']); //Kota Malaka (kuta Malaka)
                DB::table('regions')->insert(['id'=>634, 'parent'=>633, 'code'=>'23363', 'type'=>'village', 'name'=>'Village 23363, Districts 2336, City 233, Province 2']);
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50287, 'regionable_type'=>'village']); //Aneuk Glee
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50288, 'regionable_type'=>'village']); //Cot Kareung
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50289, 'regionable_type'=>'village']); //Cureh
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50290, 'regionable_type'=>'village']); //Empee Ara
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50291, 'regionable_type'=>'village']); //Grot Meunasah Baro
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50292, 'regionable_type'=>'village']); //Grot Meunasah Blang
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50293, 'regionable_type'=>'village']); //Grot Meunasah Manyang
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50294, 'regionable_type'=>'village']); //Indrapuri
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50295, 'regionable_type'=>'village']); //Jruek Bak Kreh
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50296, 'regionable_type'=>'village']); //Jruek Balee
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50297, 'regionable_type'=>'village']); //Krueng Lamkareung
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50298, 'regionable_type'=>'village']); //Lam Beutong
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50299, 'regionable_type'=>'village']); //Lam Ilie Ganto
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50300, 'regionable_type'=>'village']); //Lam Ilie Mesjid
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50301, 'regionable_type'=>'village']); //Lam Ilie Teungoh
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50302, 'regionable_type'=>'village']); //Lam Lueng
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50303, 'regionable_type'=>'village']); //Lam Siot
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50304, 'regionable_type'=>'village']); //Lambunot
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50305, 'regionable_type'=>'village']); //Lamleubok
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50306, 'regionable_type'=>'village']); //Lampanah Baro
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50307, 'regionable_type'=>'village']); //Lampanah Dayah
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50308, 'regionable_type'=>'village']); //Lampanah Ranjo
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50309, 'regionable_type'=>'village']); //Lampanah Teungoh
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50310, 'regionable_type'=>'village']); //Lampanah Tunong
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50311, 'regionable_type'=>'village']); //Lampupok Baro
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50312, 'regionable_type'=>'village']); //Lampupok Raya
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50313, 'regionable_type'=>'village']); //Lheue Jeumpa
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50314, 'regionable_type'=>'village']); //Limo Blang
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50315, 'regionable_type'=>'village']); //Limo Lamluweung (lamlueng)
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50316, 'regionable_type'=>'village']); //Limo Mesjid
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50317, 'regionable_type'=>'village']); //Lingom
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50318, 'regionable_type'=>'village']); //Manggra
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50319, 'regionable_type'=>'village']); //Meunara
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50320, 'regionable_type'=>'village']); //Meusalee Lhok
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50321, 'regionable_type'=>'village']); //Mon Alue
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50322, 'regionable_type'=>'village']); //Mureu Baro
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50323, 'regionable_type'=>'village']); //Mureu Bueng-ue
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50324, 'regionable_type'=>'village']); //Mureu Lam Glumpang
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50325, 'regionable_type'=>'village']); //Mureu Ulee Titi
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50326, 'regionable_type'=>'village']); //Pasar Indrapuri
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50327, 'regionable_type'=>'village']); //Reukih Dayah
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50328, 'regionable_type'=>'village']); //Reukih Keupula
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50329, 'regionable_type'=>'village']); //Riting
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50330, 'regionable_type'=>'village']); //Seot/seuot Baroh
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50331, 'regionable_type'=>'village']); //Seot/seuot Tunong
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50332, 'regionable_type'=>'village']); //Seulangai
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50333, 'regionable_type'=>'village']); //Seureumo
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50334, 'regionable_type'=>'village']); //Sihom Cot
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50335, 'regionable_type'=>'village']); //Sihom Lhok
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50336, 'regionable_type'=>'village']); //Sinyeu
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50337, 'regionable_type'=>'village']); //Ulee Kareung
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50338, 'regionable_type'=>'village']); //Ulee Oe
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50339, 'regionable_type'=>'village']); //Bak Sukon
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50340, 'regionable_type'=>'village']); //Bandasafa
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50341, 'regionable_type'=>'village']); //Barih Lhok
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50342, 'regionable_type'=>'village']); //Bithak
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50343, 'regionable_type'=>'village']); //Bueng Simek
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50344, 'regionable_type'=>'village']); //Cot Bayu
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50345, 'regionable_type'=>'village']); //Glee Jai
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50346, 'regionable_type'=>'village']); //Ie Alang Dayah
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50347, 'regionable_type'=>'village']); //Ie Alang Lam Ghui
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50348, 'regionable_type'=>'village']); //Ie Alang Lam Kreumeuh (keureumeun)
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50349, 'regionable_type'=>'village']); //Ie Alang Mesjid
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50350, 'regionable_type'=>'village']); //Keumireu
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50351, 'regionable_type'=>'village']); //Keuruweung Blang
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50352, 'regionable_type'=>'village']); //Keuruweung Krueng
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50353, 'regionable_type'=>'village']); //Lam Aling/alieng
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50354, 'regionable_type'=>'village']); //Lam Beugak
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50355, 'regionable_type'=>'village']); //Lam Kleng/kleeng
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50356, 'regionable_type'=>'village']); //Lam Leuot
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50357, 'regionable_type'=>'village']); //Lam Leupung
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50358, 'regionable_type'=>'village']); //Lampakuk
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50359, 'regionable_type'=>'village']); //Lampoh Raja
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50360, 'regionable_type'=>'village']); //Lamtui
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50361, 'regionable_type'=>'village']); //Leupung Baleu/balee
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50362, 'regionable_type'=>'village']); //Leupung Bruk/bruek
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50363, 'regionable_type'=>'village']); //Maheng
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50364, 'regionable_type'=>'village']); //Pakuk
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50365, 'regionable_type'=>'village']); //Pasar Lampakuk
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50366, 'regionable_type'=>'village']); //Sigapang
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50367, 'regionable_type'=>'village']); //Siron Blang
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50368, 'regionable_type'=>'village']); //Siron Krueng
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50369, 'regionable_type'=>'village']); //Tutui/tutue
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50371, 'regionable_type'=>'village']); //Bughu
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50372, 'regionable_type'=>'village']); //Lam Ara Cut
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50373, 'regionable_type'=>'village']); //Lam Ara Engkit
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50374, 'regionable_type'=>'village']); //Lam Ara Tunong
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50375, 'regionable_type'=>'village']); //Lambaro Samahani
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50376, 'regionable_type'=>'village']); //Lamsiteh Cot
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50377, 'regionable_type'=>'village']); //Leupung Cut
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50378, 'regionable_type'=>'village']); //Leupung Rayeuk
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50379, 'regionable_type'=>'village']); //Leupung Riwat
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50380, 'regionable_type'=>'village']); //Lubok Batee
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50381, 'regionable_type'=>'village']); //Lubok Buni
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50382, 'regionable_type'=>'village']); //Reuleung Geulumpang
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50383, 'regionable_type'=>'village']); //Reuleung Karieng
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50384, 'regionable_type'=>'village']); //Teudayah
                DB::table('regionables')->insert(['region_id'=>634, 'regionable_id'=>50385, 'regionable_type'=>'village']); //Tumbo Baro
            DB::table('regions')->insert(['id'=>635, 'parent'=>630, 'code'=>'2337', 'type'=>'districts', 'name'=>'Districts 2337, City 233, Province 2']);
            DB::table('regionables')->insert(['region_id'=>635, 'regionable_id'=>4437, 'regionable_type'=>'districts']); //Blank Bintang
            DB::table('regionables')->insert(['region_id'=>635, 'regionable_id'=>4439, 'regionable_type'=>'districts']); //Kota Cot Glie (kuta Cot Glie)
            DB::table('regionables')->insert(['region_id'=>635, 'regionable_id'=>4441, 'regionable_type'=>'districts']); //Ingin Jaya
            DB::table('regionables')->insert(['region_id'=>635, 'regionable_id'=>4442, 'regionable_type'=>'districts']); //Simpang Tiga
            DB::table('regionables')->insert(['region_id'=>635, 'regionable_id'=>4443, 'regionable_type'=>'districts']); //Krueng Barona Jaya
            DB::table('regionables')->insert(['region_id'=>635, 'regionable_id'=>4444, 'regionable_type'=>'districts']); //Kuta Baro
            DB::table('regionables')->insert(['region_id'=>635, 'regionable_id'=>4445, 'regionable_type'=>'districts']); //Darussalam
            DB::table('regionables')->insert(['region_id'=>635, 'regionable_id'=>4446, 'regionable_type'=>'districts']); //Baitussalam
                DB::table('regions')->insert(['id'=>636, 'parent'=>635, 'code'=>'23373', 'type'=>'village', 'name'=>'Village 23373, Districts 2337, City 233, Province 2']);
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50513, 'regionable_type'=>'village']); //Angan
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50514, 'regionable_type'=>'village']); //Beurabung
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50515, 'regionable_type'=>'village']); //Gampong Blang
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50516, 'regionable_type'=>'village']); //Gampong Cot
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50517, 'regionable_type'=>'village']); //Krueng Kalee
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50518, 'regionable_type'=>'village']); //Lam Asan
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50519, 'regionable_type'=>'village']); //Lam Biheu
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50520, 'regionable_type'=>'village']); //Lam Bitra
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50521, 'regionable_type'=>'village']); //Lam Duroy
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50522, 'regionable_type'=>'village']); //Lam Gawee
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50523, 'regionable_type'=>'village']); //Lam Keunung
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50524, 'regionable_type'=>'village']); //Lam Klat
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50525, 'regionable_type'=>'village']); //Lam Peudaya
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50526, 'regionable_type'=>'village']); //Lam Puja
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50527, 'regionable_type'=>'village']); //Lam Puuk
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50528, 'regionable_type'=>'village']); //Lam Reh
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50529, 'regionable_type'=>'village']); //Lam Timpeung
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50530, 'regionable_type'=>'village']); //Lam Ujong
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50531, 'regionable_type'=>'village']); //Lambada Peukan
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50532, 'regionable_type'=>'village']); //Lambaro Sukon
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50533, 'regionable_type'=>'village']); //Lambiheu Siem
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50534, 'regionable_type'=>'village']); //Lie Eue
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50535, 'regionable_type'=>'village']); //Limpok
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50536, 'regionable_type'=>'village']); //Miruek Taman
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50537, 'regionable_type'=>'village']); //Seuleu
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50538, 'regionable_type'=>'village']); //Siem
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50539, 'regionable_type'=>'village']); //Tanjong Seulamat
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50540, 'regionable_type'=>'village']); //Tanjung Deyah
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50541, 'regionable_type'=>'village']); //Tungkop
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50542, 'regionable_type'=>'village']); //Baet
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50543, 'regionable_type'=>'village']); //Blang Krueng
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50544, 'regionable_type'=>'village']); //Cadek
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50545, 'regionable_type'=>'village']); //Cot Paya
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50546, 'regionable_type'=>'village']); //Kajhu
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50547, 'regionable_type'=>'village']); //Klieng Cot Aron
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50548, 'regionable_type'=>'village']); //Klieng Meuria
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50549, 'regionable_type'=>'village']); //Labui
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50550, 'regionable_type'=>'village']); //Lam Asan
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50551, 'regionable_type'=>'village']); //Lam Bada Lhok
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50552, 'regionable_type'=>'village']); //Lam Ujong
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50553, 'regionable_type'=>'village']); //Lampineung
                DB::table('regionables')->insert(['region_id'=>636, 'regionable_id'=>50554, 'regionable_type'=>'village']); //Miruk Lam Reudeup
            DB::table('regions')->insert(['id'=>637, 'parent'=>630, 'code'=>'2338', 'type'=>'districts', 'name'=>'Districts 2338, City 233, Province 2']);
            DB::table('regionables')->insert(['region_id'=>637, 'regionable_id'=>4447, 'regionable_type'=>'districts']); //Mesjid Raya
                DB::table('regions')->insert(['id'=>638, 'parent'=>637, 'code'=>'23381', 'type'=>'village', 'name'=>'Village 23381, Districts 2338, City 233, Province 2']);
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50555, 'regionable_type'=>'village']); //Beurandeh
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50556, 'regionable_type'=>'village']); //Durung
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50557, 'regionable_type'=>'village']); //Gampong Baro
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50558, 'regionable_type'=>'village']); //Ie Seu Um
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50559, 'regionable_type'=>'village']); //Ladong
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50560, 'regionable_type'=>'village']); //Lam Reh
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50561, 'regionable_type'=>'village']); //Lamnga
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50562, 'regionable_type'=>'village']); //Meunasah Keudee
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50563, 'regionable_type'=>'village']); //Meunasah Kulam
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50564, 'regionable_type'=>'village']); //Meunasah Mon
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50565, 'regionable_type'=>'village']); //Neuheun
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50566, 'regionable_type'=>'village']); //Paya Kameng
                DB::table('regionables')->insert(['region_id'=>638, 'regionable_id'=>50567, 'regionable_type'=>'village']); //Ruyung
            DB::table('regions')->insert(['id'=>639, 'parent'=>630, 'code'=>'2339', 'type'=>'districts', 'name'=>'Districts 2339, City 233, Province 2']);
            DB::table('regionables')->insert(['region_id'=>639, 'regionable_id'=>4448, 'regionable_type'=>'districts']); //Pulo Aceh
                DB::table('regions')->insert(['id'=>640, 'parent'=>639, 'code'=>'23391', 'type'=>'village', 'name'=>'Village 23391, Districts 2339, City 233, Province 2']);
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50568, 'regionable_type'=>'village']); //Alue Raya
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50569, 'regionable_type'=>'village']); //Alue Reuyeueng (riyeung)
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50570, 'regionable_type'=>'village']); //Blang Situngkoh
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50571, 'regionable_type'=>'village']); //Deudap
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50572, 'regionable_type'=>'village']); //Gugob
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50573, 'regionable_type'=>'village']); //Lampuyang
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50574, 'regionable_type'=>'village']); //Lamteng
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50575, 'regionable_type'=>'village']); //Lapeng
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50576, 'regionable_type'=>'village']); //Lhoh
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50577, 'regionable_type'=>'village']); //Melingge
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50578, 'regionable_type'=>'village']); //Paloh
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50579, 'regionable_type'=>'village']); //Pasi Janeng
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50580, 'regionable_type'=>'village']); //Rabo
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50581, 'regionable_type'=>'village']); //Rinon
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50582, 'regionable_type'=>'village']); //Seurapong
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50583, 'regionable_type'=>'village']); //Teunom
                DB::table('regionables')->insert(['region_id'=>640, 'regionable_id'=>50584, 'regionable_type'=>'village']); //Ulee Paya
        DB::table('regions')->insert(['id'=>641, 'parent'=>546, 'code'=>'235', 'type'=>'city', 'name'=>'City 235, Province 2']);
        DB::table('regionables')->insert(['region_id'=>641, 'regionable_id'=>262, 'regionable_type'=>'city']); //Sabang city
            DB::table('regions')->insert(['id'=>642, 'parent'=>641, 'code'=>'2351', 'type'=>'districts', 'name'=>'Districts 2351, City 235, Province 2']);
            DB::table('regionables')->insert(['region_id'=>642, 'regionable_id'=>4452, 'regionable_type'=>'districts']); //Sukakarya
                DB::table('regions')->insert(['id'=>643, 'parent'=>642, 'code'=>'23511', 'type'=>'village', 'name'=>'Village 23511, Districts 2351, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>643, 'regionable_id'=>50657, 'regionable_type'=>'village']); //Kota Atas
                DB::table('regions')->insert(['id'=>644, 'parent'=>642, 'code'=>'23512', 'type'=>'village', 'name'=>'Village 23512, Districts 2351, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>644, 'regionable_id'=>50658, 'regionable_type'=>'village']); //Kota Bawah Barat
                DB::table('regions')->insert(['id'=>645, 'parent'=>642, 'code'=>'23513', 'type'=>'village', 'name'=>'Village 23513, Districts 2351, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>645, 'regionable_id'=>50659, 'regionable_type'=>'village']); //Kota Bawah Timur
                DB::table('regions')->insert(['id'=>646, 'parent'=>642, 'code'=>'23514', 'type'=>'village', 'name'=>'Village 23514, Districts 2351, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>646, 'regionable_id'=>50660, 'regionable_type'=>'village']); //Aneuk Laot
                DB::table('regions')->insert(['id'=>647, 'parent'=>642, 'code'=>'23515', 'type'=>'village', 'name'=>'Village 23515, Districts 2351, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>647, 'regionable_id'=>50661, 'regionable_type'=>'village']); //Krueng Raya
                DB::table('regions')->insert(['id'=>648, 'parent'=>642, 'code'=>'23516', 'type'=>'village', 'name'=>'Village 23516, Districts 2351, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>648, 'regionable_id'=>50662, 'regionable_type'=>'village']); //Paya Seunara
                DB::table('regions')->insert(['id'=>649, 'parent'=>642, 'code'=>'23517', 'type'=>'village', 'name'=>'Village 23517, Districts 2351, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>649, 'regionable_id'=>50663, 'regionable_type'=>'village']); //Batee Shok
                DB::table('regions')->insert(['id'=>650, 'parent'=>642, 'code'=>'23518', 'type'=>'village', 'name'=>'Village 23518, Districts 2351, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>650, 'regionable_id'=>50664, 'regionable_type'=>'village']); //Iboih
            DB::table('regions')->insert(['id'=>651, 'parent'=>641, 'code'=>'2352', 'type'=>'districts', 'name'=>'Districts 2352, City 235, Province 2']);
            DB::table('regionables')->insert(['region_id'=>651, 'regionable_id'=>4453, 'regionable_type'=>'districts']); //Sukajaya
                DB::table('regions')->insert(['id'=>652, 'parent'=>651, 'code'=>'23521', 'type'=>'village', 'name'=>'Village 23521, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>652, 'regionable_id'=>50665, 'regionable_type'=>'village']); //Ie Meulee
                DB::table('regionables')->insert(['region_id'=>652, 'regionable_id'=>50666, 'regionable_type'=>'village']); //Ujong Kareung (kareueng)
                DB::table('regions')->insert(['id'=>653, 'parent'=>651, 'code'=>'23522', 'type'=>'village', 'name'=>'Village 23522, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>653, 'regionable_id'=>50667, 'regionable_type'=>'village']); //Cot Ba\u
                DB::table('regions')->insert(['id'=>654, 'parent'=>651, 'code'=>'23523', 'type'=>'village', 'name'=>'Village 23523, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>654, 'regionable_id'=>50668, 'regionable_type'=>'village']); //Cot Abeuk
                DB::table('regions')->insert(['id'=>655, 'parent'=>651, 'code'=>'23524', 'type'=>'village', 'name'=>'Village 23524, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>655, 'regionable_id'=>50669, 'regionable_type'=>'village']); //Anoi Itam
                DB::table('regions')->insert(['id'=>656, 'parent'=>651, 'code'=>'23525', 'type'=>'village', 'name'=>'Village 23525, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>656, 'regionable_id'=>50670, 'regionable_type'=>'village']); //Balohan
                DB::table('regions')->insert(['id'=>657, 'parent'=>651, 'code'=>'23526', 'type'=>'village', 'name'=>'Village 23526, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>657, 'regionable_id'=>50671, 'regionable_type'=>'village']); //Jaboi
                DB::table('regions')->insert(['id'=>658, 'parent'=>651, 'code'=>'23527', 'type'=>'village', 'name'=>'Village 23527, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>658, 'regionable_id'=>50672, 'regionable_type'=>'village']); //Beurawang
                DB::table('regions')->insert(['id'=>659, 'parent'=>651, 'code'=>'23528', 'type'=>'village', 'name'=>'Village 23528, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>659, 'regionable_id'=>50673, 'regionable_type'=>'village']); //Keunekai
                DB::table('regions')->insert(['id'=>660, 'parent'=>651, 'code'=>'23529', 'type'=>'village', 'name'=>'Village 23529, Districts 2352, City 235, Province 2']);
                DB::table('regionables')->insert(['region_id'=>660, 'regionable_id'=>50674, 'regionable_type'=>'village']); //Paya
        DB::table('regions')->insert(['id'=>661, 'parent'=>546, 'code'=>'236', 'type'=>'city', 'name'=>'City 236, Province 2']);
        DB::table('regionables')->insert(['region_id'=>661, 'regionable_id'=>263, 'regionable_type'=>'city']); //Aceh Barat regencies
        DB::table('regionables')->insert(['region_id'=>661, 'regionable_id'=>264, 'regionable_type'=>'city']); //Aceh Jaya regencies
        DB::table('regionables')->insert(['region_id'=>661, 'regionable_id'=>265, 'regionable_type'=>'city']); //Nagan Raya regencies
            DB::table('regions')->insert(['id'=>662, 'parent'=>661, 'code'=>'2366', 'type'=>'districts', 'name'=>'Districts 2366, City 236, Province 2']);
            DB::table('regionables')->insert(['region_id'=>662, 'regionable_id'=>4475, 'regionable_type'=>'districts']); //Tadu Raya
            DB::table('regionables')->insert(['region_id'=>662, 'regionable_id'=>4476, 'regionable_type'=>'districts']); //Kuala
            DB::table('regionables')->insert(['region_id'=>662, 'regionable_id'=>4477, 'regionable_type'=>'districts']); //Kuala Pesisir
            DB::table('regionables')->insert(['region_id'=>662, 'regionable_id'=>4478, 'regionable_type'=>'districts']); //Darul Makmur
            DB::table('regionables')->insert(['region_id'=>662, 'regionable_id'=>4479, 'regionable_type'=>'districts']); //Tripa Makmur
                DB::table('regions')->insert(['id'=>663, 'parent'=>662, 'code'=>'23662', 'type'=>'village', 'name'=>'Village 23662, Districts 2366, City 236, Province 2']);
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51224, 'regionable_type'=>'village']); //Alue Bateung Brok
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51225, 'regionable_type'=>'village']); //Alue Bilie
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51226, 'regionable_type'=>'village']); //Alue Geutah
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51227, 'regionable_type'=>'village']); //Alue Jampak
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51228, 'regionable_type'=>'village']); //Alue Kuyun
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51229, 'regionable_type'=>'village']); //Alue Rambot
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51230, 'regionable_type'=>'village']); //Alue Raya
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51231, 'regionable_type'=>'village']); //Alue Waki
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51232, 'regionable_type'=>'village']); //Blang Baro
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51233, 'regionable_type'=>'village']); //Blang Luah
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51234, 'regionable_type'=>'village']); //Gelanggang Gajah
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51235, 'regionable_type'=>'village']); //Gunong Cut
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51236, 'regionable_type'=>'village']); //Karang Anyer
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51237, 'regionable_type'=>'village']); //Kayee Unoe
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51238, 'regionable_type'=>'village']); //Krueng Alem
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51239, 'regionable_type'=>'village']); //Krueng Seumanyam
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51240, 'regionable_type'=>'village']); //Kuala Seumanyam
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51241, 'regionable_type'=>'village']); //Kuta Trieng
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51242, 'regionable_type'=>'village']); //Ladang Baro
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51243, 'regionable_type'=>'village']); //Lamie
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51244, 'regionable_type'=>'village']); //Makarti Jaya
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51245, 'regionable_type'=>'village']); //Panton Bayu
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51246, 'regionable_type'=>'village']); //Pulo Ie
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51247, 'regionable_type'=>'village']); //Pulo Kruet
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51248, 'regionable_type'=>'village']); //Pulo Teungoh
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51249, 'regionable_type'=>'village']); //Serba Guna
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51250, 'regionable_type'=>'village']); //Serba Jadi
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51251, 'regionable_type'=>'village']); //Sido Jadi
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51252, 'regionable_type'=>'village']); //Simpang Dua
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51253, 'regionable_type'=>'village']); //Sp. Deli Kampong
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51254, 'regionable_type'=>'village']); //Sp. Deli Kilang
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51255, 'regionable_type'=>'village']); //Suak Palembang
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51256, 'regionable_type'=>'village']); //Suka Jadi
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51257, 'regionable_type'=>'village']); //Suka Mulia
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51258, 'regionable_type'=>'village']); //Suka Raja
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51259, 'regionable_type'=>'village']); //Suka Ramai
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51260, 'regionable_type'=>'village']); //Sumber Makmur
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51261, 'regionable_type'=>'village']); //Tuwi Buya
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51262, 'regionable_type'=>'village']); //Ujong Lamie
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51263, 'regionable_type'=>'village']); //Ujong Tanjong
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51264, 'regionable_type'=>'village']); //Babah Lueng
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51265, 'regionable_type'=>'village']); //Drien Tujoh
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51266, 'regionable_type'=>'village']); //Kabu
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51267, 'regionable_type'=>'village']); //Kuala Teripa/tripa
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51268, 'regionable_type'=>'village']); //Lueng Keube Jagat/jagad
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51269, 'regionable_type'=>'village']); //Mon Dua
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51270, 'regionable_type'=>'village']); //Neubok Yee Pk
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51271, 'regionable_type'=>'village']); //Neubok Yee Pp
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51272, 'regionable_type'=>'village']); //Panton Pange
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51273, 'regionable_type'=>'village']); //Pasie Keube Dom
                DB::table('regionables')->insert(['region_id'=>663, 'regionable_id'=>51274, 'regionable_type'=>'village']); //Ujong Krueng
            DB::table('regions')->insert(['id'=>664, 'parent'=>661, 'code'=>'2367', 'type'=>'districts', 'name'=>'Districts 2367, City 236, Province 2']);
            DB::table('regionables')->insert(['region_id'=>664, 'regionable_id'=>4480, 'regionable_type'=>'districts']); //Seunagan
            DB::table('regionables')->insert(['region_id'=>664, 'regionable_id'=>4481, 'regionable_type'=>'districts']); //Suka Makmue
            DB::table('regionables')->insert(['region_id'=>664, 'regionable_id'=>4482, 'regionable_type'=>'districts']); //Seunagan Timur
            DB::table('regionables')->insert(['region_id'=>664, 'regionable_id'=>4483, 'regionable_type'=>'districts']); //Beutong
            DB::table('regionables')->insert(['region_id'=>664, 'regionable_id'=>4484, 'regionable_type'=>'districts']); //Beutong Ateuh Banggalang
                DB::table('regions')->insert(['id'=>665, 'parent'=>664, 'code'=>'23672', 'type'=>'village', 'name'=>'Village 23672, Districts 2367, City 236, Province 2']);
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51363, 'regionable_type'=>'village']); //Babah Krueng
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51364, 'regionable_type'=>'village']); //Blang Baro Pulo Raga
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51365, 'regionable_type'=>'village']); //Blang Baro Rambong
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51366, 'regionable_type'=>'village']); //Blang Dalam
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51367, 'regionable_type'=>'village']); //Blang Leumak
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51368, 'regionable_type'=>'village']); //Blang Mesjid
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51369, 'regionable_type'=>'village']); //Blang Neuang
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51370, 'regionable_type'=>'village']); //Blang Seumot
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51371, 'regionable_type'=>'village']); //Blang Seunong
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51372, 'regionable_type'=>'village']); //Bumi Sari
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51373, 'regionable_type'=>'village']); //Gunung Nagan
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51374, 'regionable_type'=>'village']); //Keude Seumot
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51375, 'regionable_type'=>'village']); //Krueng Cut
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51376, 'regionable_type'=>'village']); //Kulam Jeurneh (jeureuneh)
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51377, 'regionable_type'=>'village']); //Kuta Jeumpa
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51378, 'regionable_type'=>'village']); //Lhok Seumot
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51379, 'regionable_type'=>'village']); //Meunasah Dayah
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51380, 'regionable_type'=>'village']); //Meunasah Krueng
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51381, 'regionable_type'=>'village']); //Meunasah Pante
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51382, 'regionable_type'=>'village']); //Meunasah Teungoh
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51383, 'regionable_type'=>'village']); //Pante Ara
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51384, 'regionable_type'=>'village']); //Panton Bayam
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51385, 'regionable_type'=>'village']); //Tuwi Bunta
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51386, 'regionable_type'=>'village']); //Ujong Blang
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51387, 'regionable_type'=>'village']); //Babah Suak
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51388, 'regionable_type'=>'village']); //Blang Meurandeh
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51389, 'regionable_type'=>'village']); //Blang Puuk
                DB::table('regionables')->insert(['region_id'=>665, 'regionable_id'=>51390, 'regionable_type'=>'village']); //Kuta Teungoh
        DB::table('regions')->insert(['id'=>666, 'parent'=>546, 'code'=>'237', 'type'=>'city', 'name'=>'City 237, Province 2']);
        DB::table('regionables')->insert(['region_id'=>666, 'regionable_id'=>266, 'regionable_type'=>'city']); //Aceh Selatan regencies
        DB::table('regionables')->insert(['region_id'=>666, 'regionable_id'=>267, 'regionable_type'=>'city']); //Aceh Barat Daya regencies
            DB::table('regions')->insert(['id'=>667, 'parent'=>666, 'code'=>'2376', 'type'=>'districts', 'name'=>'Districts 2376, City 237, Province 2']);
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4492, 'regionable_type'=>'districts']); //Labuhan Haji
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4503, 'regionable_type'=>'districts']); //Manggeng
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4504, 'regionable_type'=>'districts']); //Lembah Sabil
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4505, 'regionable_type'=>'districts']); //Tangan-tangan
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4506, 'regionable_type'=>'districts']); //Setia
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4507, 'regionable_type'=>'districts']); //Blang Pidie
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4508, 'regionable_type'=>'districts']); //Jeumpa
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4509, 'regionable_type'=>'districts']); //Susoh
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4510, 'regionable_type'=>'districts']); //Kuala Batee
            DB::table('regionables')->insert(['region_id'=>667, 'regionable_id'=>4511, 'regionable_type'=>'districts']); //Babah Rot
                DB::table('regions')->insert(['id'=>668, 'parent'=>667, 'code'=>'23767', 'type'=>'village', 'name'=>'Village 23767, Districts 2376, City 237, Province 2']);
                DB::table('regionables')->insert(['region_id'=>668, 'regionable_id'=>51776, 'regionable_type'=>'village']); //Alue Jeureujak (jerjak)
                DB::table('regionables')->insert(['region_id'=>668, 'regionable_id'=>51777, 'regionable_type'=>'village']); //Alue Peunawa
                DB::table('regionables')->insert(['region_id'=>668, 'regionable_id'=>51778, 'regionable_type'=>'village']); //Blang Dalam
                DB::table('regionables')->insert(['region_id'=>668, 'regionable_id'=>51779, 'regionable_type'=>'village']); //Gunung Samarinda
                DB::table('regionables')->insert(['region_id'=>668, 'regionable_id'=>51780, 'regionable_type'=>'village']); //Ie Merah
                DB::table('regionables')->insert(['region_id'=>668, 'regionable_id'=>51781, 'regionable_type'=>'village']); //Pantee Cermin
                DB::table('regionables')->insert(['region_id'=>668, 'regionable_id'=>51782, 'regionable_type'=>'village']); //Pantee Rakyat
        DB::table('regions')->insert(['id'=>669, 'parent'=>546, 'code'=>'238', 'type'=>'city', 'name'=>'City 238, Province 2']);
        DB::table('regionables')->insert(['region_id'=>669, 'regionable_id'=>268, 'regionable_type'=>'city']); //Simeulue regencies
            DB::table('regions')->insert(['id'=>670, 'parent'=>669, 'code'=>'2389', 'type'=>'districts', 'name'=>'Districts 2389, City 238, Province 2']);
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4512, 'regionable_type'=>'districts']); //Teupah Tengah
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4513, 'regionable_type'=>'districts']); //Simeuleu Timur
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4514, 'regionable_type'=>'districts']); //Teupah Selatan
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4515, 'regionable_type'=>'districts']); //Teluk Dalam
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4516, 'regionable_type'=>'districts']); //Simeuleu Barat
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4517, 'regionable_type'=>'districts']); //Teupah Barat
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4518, 'regionable_type'=>'districts']); //Salang
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4519, 'regionable_type'=>'districts']); //Alapan (alafan)
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4520, 'regionable_type'=>'districts']); //Simeulue Cut
            DB::table('regionables')->insert(['region_id'=>670, 'regionable_id'=>4521, 'regionable_type'=>'districts']); //Simeuleu Tengah
                DB::table('regions')->insert(['id'=>671, 'parent'=>670, 'code'=>'23894', 'type'=>'village', 'name'=>'Village 23894, Districts 2389, City 238, Province 2']);
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51897, 'regionable_type'=>'village']); //Amarabu
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51898, 'regionable_type'=>'village']); //Borengan
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51899, 'regionable_type'=>'village']); //Bubuhan
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51900, 'regionable_type'=>'village']); //Kuta Inang
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51901, 'regionable_type'=>'village']); //Kuta Padang
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51902, 'regionable_type'=>'village']); //Latak Ayah
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51903, 'regionable_type'=>'village']); //Sibuluh
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51904, 'regionable_type'=>'village']); //Ujung Pandang / Padang
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51905, 'regionable_type'=>'village']); //Dihit
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51906, 'regionable_type'=>'village']); //Kampung Aie
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51907, 'regionable_type'=>'village']); //Kuta Batu
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51908, 'regionable_type'=>'village']); //Lakubang
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51909, 'regionable_type'=>'village']); //Lamayang
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51910, 'regionable_type'=>'village']); //Lambaya
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51911, 'regionable_type'=>'village']); //Latitik
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51912, 'regionable_type'=>'village']); //Lauke
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51913, 'regionable_type'=>'village']); //Laure-e
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51914, 'regionable_type'=>'village']); //Luan Sorip
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51915, 'regionable_type'=>'village']); //Putra Jaya
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51916, 'regionable_type'=>'village']); //Sebbe
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51917, 'regionable_type'=>'village']); //Situfa Jaya
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51918, 'regionable_type'=>'village']); //Suak Baru
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51919, 'regionable_type'=>'village']); //Wel Wel
                DB::table('regionables')->insert(['region_id'=>671, 'regionable_id'=>51920, 'regionable_type'=>'village']); //Wellang Kum (wel Langkom)
        DB::table('regions')->insert(['id'=>672, 'parent'=>546, 'code'=>'239', 'type'=>'city', 'name'=>'City 239, Province 2']);
        DB::table('regionables')->insert(['region_id'=>672, 'regionable_id'=>261, 'regionable_type'=>'city']); //Aceh Besar regencies
            DB::table('regions')->insert(['id'=>673, 'parent'=>672, 'code'=>'2391', 'type'=>'districts', 'name'=>'Districts 2391, City 239, Province 2']);
            DB::table('regionables')->insert(['region_id'=>673, 'regionable_id'=>4449, 'regionable_type'=>'districts']); //Kota Jantho
                DB::table('regions')->insert(['id'=>674, 'parent'=>673, 'code'=>'23911', 'type'=>'village', 'name'=>'Village 23911, Districts 2391, City 239, Province 2']);
                DB::table('regionables')->insert(['region_id'=>674, 'regionable_id'=>50585, 'regionable_type'=>'village']); //Barueh
                DB::table('regions')->insert(['id'=>675, 'parent'=>673, 'code'=>'23912', 'type'=>'village', 'name'=>'Village 23912, Districts 2391, City 239, Province 2']);
                DB::table('regionables')->insert(['region_id'=>675, 'regionable_id'=>50586, 'regionable_type'=>'village']); //Jantho
                DB::table('regions')->insert(['id'=>676, 'parent'=>673, 'code'=>'23913', 'type'=>'village', 'name'=>'Village 23913, Districts 2391, City 239, Province 2']);
                DB::table('regionables')->insert(['region_id'=>676, 'regionable_id'=>50587, 'regionable_type'=>'village']); //Teureubeh
                DB::table('regions')->insert(['id'=>677, 'parent'=>673, 'code'=>'23915', 'type'=>'village', 'name'=>'Village 23915, Districts 2391, City 239, Province 2']);
                DB::table('regionables')->insert(['region_id'=>677, 'regionable_id'=>50588, 'regionable_type'=>'village']); //Jalin
                DB::table('regions')->insert(['id'=>678, 'parent'=>673, 'code'=>'23917', 'type'=>'village', 'name'=>'Village 23917, Districts 2391, City 239, Province 2']);
                DB::table('regionables')->insert(['region_id'=>678, 'regionable_id'=>50589, 'regionable_type'=>'village']); //Awee
                DB::table('regionables')->insert(['region_id'=>678, 'regionable_id'=>50590, 'regionable_type'=>'village']); //Beung
                DB::table('regionables')->insert(['region_id'=>678, 'regionable_id'=>50591, 'regionable_type'=>'village']); //Data Cut
                DB::table('regionables')->insert(['region_id'=>678, 'regionable_id'=>50592, 'regionable_type'=>'village']); //Jantho Baru
                DB::table('regionables')->insert(['region_id'=>678, 'regionable_id'=>50593, 'regionable_type'=>'village']); //Jantho Makmur
                DB::table('regionables')->insert(['region_id'=>678, 'regionable_id'=>50594, 'regionable_type'=>'village']); //Suka Tani
                DB::table('regionables')->insert(['region_id'=>678, 'regionable_id'=>50595, 'regionable_type'=>'village']); //Weu
                DB::table('regions')->insert(['id'=>679, 'parent'=>673, 'code'=>'23918', 'type'=>'village', 'name'=>'Village 23918, Districts 2391, City 239, Province 2']);
                DB::table('regionables')->insert(['region_id'=>679, 'regionable_id'=>50596, 'regionable_type'=>'village']); //Cucum
                DB::table('regions')->insert(['id'=>680, 'parent'=>673, 'code'=>'23919', 'type'=>'village', 'name'=>'Village 23919, Districts 2391, City 239, Province 2']);
                DB::table('regionables')->insert(['region_id'=>680, 'regionable_id'=>50597, 'regionable_type'=>'village']); //Bukit Meusara
            DB::table('regions')->insert(['id'=>681, 'parent'=>672, 'code'=>'2395', 'type'=>'districts', 'name'=>'Districts 2395, City 239, Province 2']);
            DB::table('regionables')->insert(['region_id'=>681, 'regionable_id'=>4450, 'regionable_type'=>'districts']); //Seulimeum
            DB::table('regionables')->insert(['region_id'=>681, 'regionable_id'=>4451, 'regionable_type'=>'districts']); //Lembah Seulawah
                DB::table('regions')->insert(['id'=>682, 'parent'=>681, 'code'=>'23952', 'type'=>'village', 'name'=>'Village 23952, Districts 2395, City 239, Province 2']);
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50645, 'regionable_type'=>'village']); //Lam Kubu
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50646, 'regionable_type'=>'village']); //Lambaro Tunong
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50647, 'regionable_type'=>'village']); //Lamtamot
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50648, 'regionable_type'=>'village']); //Lon Asan
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50649, 'regionable_type'=>'village']); //Lon Baroh
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50650, 'regionable_type'=>'village']); //Panca
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50651, 'regionable_type'=>'village']); //Panca Kubu
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50652, 'regionable_type'=>'village']); //Paya Keureuleh
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50653, 'regionable_type'=>'village']); //Saree Aceh
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50654, 'regionable_type'=>'village']); //Suka Mulya (sukamulia)
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50655, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>682, 'regionable_id'=>50656, 'regionable_type'=>'village']); //Teuladan
        DB::table('regions')->insert(['id'=>683, 'parent'=>546, 'code'=>'241', 'type'=>'city', 'name'=>'City 241, Province 2']);
        DB::table('regionables')->insert(['region_id'=>683, 'regionable_id'=>269, 'regionable_type'=>'city']); //Pidie regencies
        DB::table('regionables')->insert(['region_id'=>683, 'regionable_id'=>270, 'regionable_type'=>'city']); //Pidie Jaya regencies
            DB::table('regions')->insert(['id'=>684, 'parent'=>683, 'code'=>'2418', 'type'=>'districts', 'name'=>'Districts 2418, City 241, Province 2']);
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4535, 'regionable_type'=>'districts']); //Kembang Tanjong (tanjung)
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4541, 'regionable_type'=>'districts']); //Simpang Tiga
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4542, 'regionable_type'=>'districts']); //Glumpang Tiga (geulumpang Tiga)
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4543, 'regionable_type'=>'districts']); //Glumpang Baro
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4544, 'regionable_type'=>'districts']); //Mane
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4545, 'regionable_type'=>'districts']); //Bandar Baru
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4546, 'regionable_type'=>'districts']); //Trienggadeng
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4547, 'regionable_type'=>'districts']); //Panteraja
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4548, 'regionable_type'=>'districts']); //Meureudu
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4549, 'regionable_type'=>'districts']); //Meurah Dua
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4550, 'regionable_type'=>'districts']); //Jangka Buya
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4551, 'regionable_type'=>'districts']); //Ulim
            DB::table('regionables')->insert(['region_id'=>684, 'regionable_id'=>4552, 'regionable_type'=>'districts']); //Bandar Dua
                DB::table('regions')->insert(['id'=>685, 'parent'=>684, 'code'=>'24188', 'type'=>'village', 'name'=>'Village 24188, Districts 2418, City 241, Province 2']);
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52825, 'regionable_type'=>'village']); //Adan
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52826, 'regionable_type'=>'village']); //Alue Keutapang
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52827, 'regionable_type'=>'village']); //Alue Me
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52828, 'regionable_type'=>'village']); //Alue Sane
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52829, 'regionable_type'=>'village']); //Asan Kumbang
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52830, 'regionable_type'=>'village']); //Babah Krueng
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52831, 'regionable_type'=>'village']); //Beurasan
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52832, 'regionable_type'=>'village']); //Blang Dalam
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52833, 'regionable_type'=>'village']); //Blang Kuta
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52834, 'regionable_type'=>'village']); //Blang Mirou
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52835, 'regionable_type'=>'village']); //Cot Geurufai
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52836, 'regionable_type'=>'village']); //Cot Keng
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52837, 'regionable_type'=>'village']); //Drien Bungong
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52838, 'regionable_type'=>'village']); //Drien Tujoh
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52839, 'regionable_type'=>'village']); //Gaharu
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52840, 'regionable_type'=>'village']); //Gampong Ulee Glee
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52841, 'regionable_type'=>'village']); //Jeulanga Barat
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52842, 'regionable_type'=>'village']); //Jeulanga Mata Ie
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52843, 'regionable_type'=>'village']); //Jeulanga Mesjid
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52844, 'regionable_type'=>'village']); //Kampung Baro
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52845, 'regionable_type'=>'village']); //Keude Ulee Glee
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52846, 'regionable_type'=>'village']); //Krueng Kiran
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52847, 'regionable_type'=>'village']); //Kumba
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52848, 'regionable_type'=>'village']); //Kuta Krueng
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52849, 'regionable_type'=>'village']); //Lhok Pusong
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52850, 'regionable_type'=>'village']); //Meugit Kayei Panyang
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52851, 'regionable_type'=>'village']); //Meugit Sagoe
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52852, 'regionable_type'=>'village']); //Meuko Baroh
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52853, 'regionable_type'=>'village']); //Meuko Dayah
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52854, 'regionable_type'=>'village']); //Meuko Kuthang
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52855, 'regionable_type'=>'village']); //Meunasah Paku
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52856, 'regionable_type'=>'village']); //Meurandeh Alue
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52857, 'regionable_type'=>'village']); //Muko Buloh
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52858, 'regionable_type'=>'village']); //Paya Baroh
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52859, 'regionable_type'=>'village']); //Paya Pisang Klat
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52860, 'regionable_type'=>'village']); //Paya Tunong
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52861, 'regionable_type'=>'village']); //Peulakan Cebrek
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52862, 'regionable_type'=>'village']); //Peulakan Tambo
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52863, 'regionable_type'=>'village']); //Peulakan Tunong
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52864, 'regionable_type'=>'village']); //Pohroh
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52865, 'regionable_type'=>'village']); //Pulo
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52866, 'regionable_type'=>'village']); //Pulo Gapu
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52867, 'regionable_type'=>'village']); //Reudeup Melayu
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52868, 'regionable_type'=>'village']); //Seunong
                DB::table('regionables')->insert(['region_id'=>685, 'regionable_id'=>52869, 'regionable_type'=>'village']); //Uteun Bayu
        DB::table('regions')->insert(['id'=>686, 'parent'=>546, 'code'=>'242', 'type'=>'city', 'name'=>'City 242, Province 2']);
        DB::table('regionables')->insert(['region_id'=>686, 'regionable_id'=>271, 'regionable_type'=>'city']); //Bireuen regencies
            DB::table('regions')->insert(['id'=>687, 'parent'=>686, 'code'=>'2425', 'type'=>'districts', 'name'=>'Districts 2425, City 242, Province 2']);
            DB::table('regionables')->insert(['region_id'=>687, 'regionable_id'=>4553, 'regionable_type'=>'districts']); //Juli
            DB::table('regionables')->insert(['region_id'=>687, 'regionable_id'=>4554, 'regionable_type'=>'districts']); //Jeumpa
            DB::table('regionables')->insert(['region_id'=>687, 'regionable_id'=>4555, 'regionable_type'=>'districts']); //Simpang Mamplam
            DB::table('regionables')->insert(['region_id'=>687, 'regionable_id'=>4556, 'regionable_type'=>'districts']); //Kota Juang
                DB::table('regions')->insert(['id'=>688, 'parent'=>687, 'code'=>'24251', 'type'=>'village', 'name'=>'Village 24251, Districts 2425, City 242, Province 2']);
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52870, 'regionable_type'=>'village']); //Abeuk Budi
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52871, 'regionable_type'=>'village']); //Aleu Rambong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52872, 'regionable_type'=>'village']); //Alue Unou/unoe
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52873, 'regionable_type'=>'village']); //Balee Panah
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52874, 'regionable_type'=>'village']); //Batee Raya
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52875, 'regionable_type'=>'village']); //Blang Keutumba (ketumba)
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52876, 'regionable_type'=>'village']); //Buket Mulia
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52877, 'regionable_type'=>'village']); //Bunyot (beunyot)
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52878, 'regionable_type'=>'village']); //Geulumpang Meu Jimjim
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52879, 'regionable_type'=>'village']); //Juli Cot Mesjid
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52880, 'regionable_type'=>'village']); //Juli Cot Meurak
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52881, 'regionable_type'=>'village']); //Juli Keudee Dua
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52882, 'regionable_type'=>'village']); //Juli Mee Teungoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52883, 'regionable_type'=>'village']); //Juli Meunasah Jok
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52884, 'regionable_type'=>'village']); //Juli Meunasah Seutuy
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52885, 'regionable_type'=>'village']); //Juli Meunasah Tambo
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52886, 'regionable_type'=>'village']); //Juli Meunasah Teungoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52887, 'regionable_type'=>'village']); //Juli Paya Ru
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52888, 'regionable_type'=>'village']); //Juli Seupeng/lampoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52889, 'regionable_type'=>'village']); //Juli Tambo Tanjong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52890, 'regionable_type'=>'village']); //Juli Teungku Dilampoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52891, 'regionable_type'=>'village']); //Juli Uruek Anoe
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52892, 'regionable_type'=>'village']); //Krueng Simpo
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52893, 'regionable_type'=>'village']); //Mane Meujingki
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52894, 'regionable_type'=>'village']); //Pante Baro
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52895, 'regionable_type'=>'village']); //Pante Peusangan
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52896, 'regionable_type'=>'village']); //Paseh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52897, 'regionable_type'=>'village']); //Paya Cut
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52898, 'regionable_type'=>'village']); //Ranto Panyang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52899, 'regionable_type'=>'village']); //Seuneubok Dalam
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52900, 'regionable_type'=>'village']); //Seuneubok Gunci
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52901, 'regionable_type'=>'village']); //Seuneubok Peuraden
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52902, 'regionable_type'=>'village']); //Simpang Jaya
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52903, 'regionable_type'=>'village']); //Suka Tani
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52904, 'regionable_type'=>'village']); //Tamboi Tanjong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52905, 'regionable_type'=>'village']); //Teupin Manee
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52906, 'regionable_type'=>'village']); //Abeuk Tingkeum
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52907, 'regionable_type'=>'village']); //Abeuk Usong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52908, 'regionable_type'=>'village']); //Alue Limeng
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52909, 'regionable_type'=>'village']); //Batee Timoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52910, 'regionable_type'=>'village']); //Beurawang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52911, 'regionable_type'=>'village']); //Blang Bladeh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52912, 'regionable_type'=>'village']); //Blang Cot Baroh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52913, 'regionable_type'=>'village']); //Blang Cot Tunong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52914, 'regionable_type'=>'village']); //Blang Dalam
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52915, 'regionable_type'=>'village']); //Blang Gandai
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52916, 'regionable_type'=>'village']); //Blang Me
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52917, 'regionable_type'=>'village']); //Blang Rheum
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52918, 'regionable_type'=>'village']); //Blang Seunong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52919, 'regionable_type'=>'village']); //Blang Seupeng
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52920, 'regionable_type'=>'village']); //Cot Bada
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52921, 'regionable_type'=>'village']); //Cot Gadong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52922, 'regionable_type'=>'village']); //Cot Geurundong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52923, 'regionable_type'=>'village']); //Cot Iboeh Timu
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52924, 'regionable_type'=>'village']); //Cot Iboh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52925, 'regionable_type'=>'village']); //Cot Keutapang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52926, 'regionable_type'=>'village']); //Cot Leusong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52927, 'regionable_type'=>'village']); //Cot Meugoe
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52928, 'regionable_type'=>'village']); //Cot Tarom Baroh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52929, 'regionable_type'=>'village']); //Cot Tarom Tunong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52930, 'regionable_type'=>'village']); //Cot Ulim
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52931, 'regionable_type'=>'village']); //Geudong Tampu
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52932, 'regionable_type'=>'village']); //Geulumpang Payong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52933, 'regionable_type'=>'village']); //Kuala Jeumpa
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52934, 'regionable_type'=>'village']); //Kuta Meuligoe
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52935, 'regionable_type'=>'village']); //Lhaksamana
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52936, 'regionable_type'=>'village']); //Lipah Cut
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52937, 'regionable_type'=>'village']); //Lipah Rayeuk
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52938, 'regionable_type'=>'village']); //Mon Jambee
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52939, 'regionable_type'=>'village']); //Mon Mane
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52940, 'regionable_type'=>'village']); //Paloh Panyang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52941, 'regionable_type'=>'village']); //Paloh Seulimeng
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52942, 'regionable_type'=>'village']); //Pulo Lawang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52943, 'regionable_type'=>'village']); //Salah Sirong Jaya
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52944, 'regionable_type'=>'village']); //Seuleumbah
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52945, 'regionable_type'=>'village']); //Seuneubok Lhong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52946, 'regionable_type'=>'village']); //Teupok Baroh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52947, 'regionable_type'=>'village']); //Teupok Tunong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52948, 'regionable_type'=>'village']); //Alue Leuhob
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52949, 'regionable_type'=>'village']); //Arongan
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52950, 'regionable_type'=>'village']); //Balee
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52951, 'regionable_type'=>'village']); //Blang Kuta Coh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52952, 'regionable_type'=>'village']); //Blang Kuta Dua Meunasah
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52953, 'regionable_type'=>'village']); //Blang Mane Barat
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52954, 'regionable_type'=>'village']); //Blang Mane Dua Meunasah
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52955, 'regionable_type'=>'village']); //Blang Panyang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52956, 'regionable_type'=>'village']); //Blang Tambue
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52957, 'regionable_type'=>'village']); //Blang Teumulek
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52958, 'regionable_type'=>'village']); //Calok
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52959, 'regionable_type'=>'village']); //Ceureucok
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52960, 'regionable_type'=>'village']); //Cot Trieng
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52961, 'regionable_type'=>'village']); //Cure Baroh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52962, 'regionable_type'=>'village']); //Cure Tunong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52963, 'regionable_type'=>'village']); //Gle Meundong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52964, 'regionable_type'=>'village']); //Ie Rhob Babah Lueng
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52965, 'regionable_type'=>'village']); //Ie Rhob Barat
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52966, 'regionable_type'=>'village']); //Ie Rhob Geulumpang/glumpang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52967, 'regionable_type'=>'village']); //Ie Rhob Timur
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52968, 'regionable_type'=>'village']); //Jurong Binjee
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52969, 'regionable_type'=>'village']); //Keude Tambue
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52970, 'regionable_type'=>'village']); //Krueng Meuseugob
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52971, 'regionable_type'=>'village']); //Lancang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52972, 'regionable_type'=>'village']); //Lhok Mane
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52973, 'regionable_type'=>'village']); //Lhok Tanoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52974, 'regionable_type'=>'village']); //Meunasah Asan
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52975, 'regionable_type'=>'village']); //Meunasah Barat
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52976, 'regionable_type'=>'village']); //Meunasah Dayah
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52977, 'regionable_type'=>'village']); //Meunasah Mamplam
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52978, 'regionable_type'=>'village']); //Meunasah Mesjid
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52979, 'regionable_type'=>'village']); //Paku
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52980, 'regionable_type'=>'village']); //Peuneulet Baroh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52981, 'regionable_type'=>'village']); //Peuneulet Tunong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52982, 'regionable_type'=>'village']); //Pulo Dapong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52983, 'regionable_type'=>'village']); //Pulo Drien
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52984, 'regionable_type'=>'village']); //Rheum Barat
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52985, 'regionable_type'=>'village']); //Rheum Barouh/baroh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52986, 'regionable_type'=>'village']); //Rheum Timur
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52987, 'regionable_type'=>'village']); //Tambue Barat
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52988, 'regionable_type'=>'village']); //Ulee Kareung
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52989, 'regionable_type'=>'village']); //Bireun Meunasah Blang
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52990, 'regionable_type'=>'village']); //Bireun Meunasah Capa
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52991, 'regionable_type'=>'village']); //Bireun Meunasah Dayah
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52992, 'regionable_type'=>'village']); //Bireun Meunasah Reuleut
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52993, 'regionable_type'=>'village']); //Bireun Meunasah Teungku Digadong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52994, 'regionable_type'=>'village']); //Blang Reulieng (reuling)
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52995, 'regionable_type'=>'village']); //Blang Tingkeum
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52996, 'regionable_type'=>'village']); //Buket Teukueh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52997, 'regionable_type'=>'village']); //Cot Gapu
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52998, 'regionable_type'=>'village']); //Cot Jrat
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>52999, 'regionable_type'=>'village']); //Cot Peutek
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53000, 'regionable_type'=>'village']); //Gampong Baro
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53001, 'regionable_type'=>'village']); //Geudong Alue
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53002, 'regionable_type'=>'village']); //Geudong Geudong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53003, 'regionable_type'=>'village']); //Geulanggang Baro
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53004, 'regionable_type'=>'village']); //Geulanggang Gampong
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53005, 'regionable_type'=>'village']); //Geulanggang Kulam
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53006, 'regionable_type'=>'village']); //Geulanggang Teungoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53007, 'regionable_type'=>'village']); //Kota Bireun (bireuen)
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53008, 'regionable_type'=>'village']); //Lhok Awe Teungoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53009, 'regionable_type'=>'village']); //Pulo Ara Geudong Teungoh
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53010, 'regionable_type'=>'village']); //Pulo Kiton
                DB::table('regionables')->insert(['region_id'=>688, 'regionable_id'=>53011, 'regionable_type'=>'village']); //Uteun Reutoh
            DB::table('regions')->insert(['id'=>689, 'parent'=>686, 'code'=>'2426', 'type'=>'districts', 'name'=>'Districts 2426, City 242, Province 2']);
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4557, 'regionable_type'=>'districts']); //Jangka
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4558, 'regionable_type'=>'districts']); //Peusangan
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4559, 'regionable_type'=>'districts']); //Peusangan Siblah Krueng
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4560, 'regionable_type'=>'districts']); //Kuala
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4561, 'regionable_type'=>'districts']); //Peusangan Selatan
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4562, 'regionable_type'=>'districts']); //Peudada
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4563, 'regionable_type'=>'districts']); //Pandrah
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4564, 'regionable_type'=>'districts']); //Jeunieb
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4565, 'regionable_type'=>'districts']); //Peulimbang (plimbang)
            DB::table('regionables')->insert(['region_id'=>689, 'regionable_id'=>4566, 'regionable_type'=>'districts']); //Samalanga
                DB::table('regions')->insert(['id'=>690, 'parent'=>689, 'code'=>'24264', 'type'=>'village', 'name'=>'Village 24264, Districts 2426, City 242, Province 2']);
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53325, 'regionable_type'=>'village']); //Alue Barat
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53326, 'regionable_type'=>'village']); //Ankieng Barat
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53327, 'regionable_type'=>'village']); //Batee Iliek
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53328, 'regionable_type'=>'village']); //Cot Mane
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53329, 'regionable_type'=>'village']); //Cot Meurak Baroh
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53330, 'regionable_type'=>'village']); //Cot Meurak Blang
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53331, 'regionable_type'=>'village']); //Cot Siren
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53332, 'regionable_type'=>'village']); //Darussalam
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53333, 'regionable_type'=>'village']); //Gampong Baro
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53334, 'regionable_type'=>'village']); //Gampong Meulum
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53335, 'regionable_type'=>'village']); //Gampong Putoh
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53336, 'regionable_type'=>'village']); //Geulumpang/glumpang Bungkok
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53337, 'regionable_type'=>'village']); //Geulumpang/glumpang Payong
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53338, 'regionable_type'=>'village']); //Kandang
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53339, 'regionable_type'=>'village']); //Keude Aceh
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53340, 'regionable_type'=>'village']); //Lancok
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53341, 'regionable_type'=>'village']); //Lhok Seumira
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53342, 'regionable_type'=>'village']); //Lueng Keubeu
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53343, 'regionable_type'=>'village']); //Matang
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53344, 'regionable_type'=>'village']); //Matang Jareung
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53345, 'regionable_type'=>'village']); //Matang Teungoh
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53346, 'regionable_type'=>'village']); //Matang Wakeuh
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53347, 'regionable_type'=>'village']); //Mesjid Baro
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53348, 'regionable_type'=>'village']); //Meuliek
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53349, 'regionable_type'=>'village']); //Meunasah Lancok
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53350, 'regionable_type'=>'village']); //Meunasah Lincah
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53351, 'regionable_type'=>'village']); //Meunasah Lueng
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53352, 'regionable_type'=>'village']); //Meunasah Puuk
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53353, 'regionable_type'=>'village']); //Meurah
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53354, 'regionable_type'=>'village']); //Mideun Geudong
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53355, 'regionable_type'=>'village']); //Mideun Jok
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53356, 'regionable_type'=>'village']); //Namploh Baro
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53357, 'regionable_type'=>'village']); //Namploh Blang Garang
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53358, 'regionable_type'=>'village']); //Namploh Krueng
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53359, 'regionable_type'=>'village']); //Namploh Manyang
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53360, 'regionable_type'=>'village']); //Namploh Papeuen
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53361, 'regionable_type'=>'village']); //Paloh
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53362, 'regionable_type'=>'village']); //Pante Rheeng/rheng
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53363, 'regionable_type'=>'village']); //Pineung Siri Bee
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53364, 'regionable_type'=>'village']); //Pulo Baroh
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53365, 'regionable_type'=>'village']); //Sangso
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53366, 'regionable_type'=>'village']); //Tanjong Baro
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53367, 'regionable_type'=>'village']); //Tanjongan Idem
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53368, 'regionable_type'=>'village']); //Ulee Alue
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53369, 'regionable_type'=>'village']); //Ulee Jeumatan
                DB::table('regionables')->insert(['region_id'=>690, 'regionable_id'=>53370, 'regionable_type'=>'village']); //Ulee Ue
        DB::table('regions')->insert(['id'=>691, 'parent'=>546, 'code'=>'243', 'type'=>'city', 'name'=>'City 243, Province 2']);
        DB::table('regionables')->insert(['region_id'=>691, 'regionable_id'=>271, 'regionable_type'=>'city']); //Bireuen regencies
        DB::table('regionables')->insert(['region_id'=>691, 'regionable_id'=>272, 'regionable_type'=>'city']); //Lhokseumawe city
        DB::table('regionables')->insert(['region_id'=>691, 'regionable_id'=>273, 'regionable_type'=>'city']); //Aceh Utara regencies
            DB::table('regions')->insert(['id'=>692, 'parent'=>691, 'code'=>'2431', 'type'=>'districts', 'name'=>'Districts 2431, City 243, Province 2']);
            DB::table('regionables')->insert(['region_id'=>692, 'regionable_id'=>4570, 'regionable_type'=>'districts']); //Banda Sakti
            DB::table('regionables')->insert(['region_id'=>692, 'regionable_id'=>4574, 'regionable_type'=>'districts']); //Simpang Kramat (keramat)
                DB::table('regions')->insert(['id'=>693, 'parent'=>692, 'code'=>'24313', 'type'=>'village', 'name'=>'Village 24313, Districts 2431, City 243, Province 2']);
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53480, 'regionable_type'=>'village']); //Simpang Empat
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53547, 'regionable_type'=>'village']); //Alue Badee
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53548, 'regionable_type'=>'village']); //Blang Raleue
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53549, 'regionable_type'=>'village']); //Ie Tarek I
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53550, 'regionable_type'=>'village']); //Ie Tarek Ii
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53551, 'regionable_type'=>'village']); //Kebon Baru/baro
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53552, 'regionable_type'=>'village']); //Keude Simpang Empat (iv)
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53553, 'regionable_type'=>'village']); //Kilo Meter Vi
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53554, 'regionable_type'=>'village']); //Kilo Meter Viii
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53555, 'regionable_type'=>'village']); //Mancang
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53556, 'regionable_type'=>'village']); //Meunasah Baroh
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53557, 'regionable_type'=>'village']); //Meunasah Dayah Spk
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53558, 'regionable_type'=>'village']); //Meunasah Teungoh
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53559, 'regionable_type'=>'village']); //Pase Sentosa/sentausa
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53560, 'regionable_type'=>'village']); //Paya Leupah
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53561, 'regionable_type'=>'village']); //Paya Teungoh
                DB::table('regionables')->insert(['region_id'=>693, 'regionable_id'=>53562, 'regionable_type'=>'village']); //Seunebok Punti
            DB::table('regions')->insert(['id'=>694, 'parent'=>691, 'code'=>'2435', 'type'=>'districts', 'name'=>'Districts 2435, City 243, Province 2']);
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4567, 'regionable_type'=>'districts']); //Ganda Pura
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4568, 'regionable_type'=>'districts']); //Kuta Blang
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4569, 'regionable_type'=>'districts']); //Makmur
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4570, 'regionable_type'=>'districts']); //Banda Sakti
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4571, 'regionable_type'=>'districts']); //Muara Dua
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4572, 'regionable_type'=>'districts']); //Muara Satu
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4575, 'regionable_type'=>'districts']); //Cot Girek
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4576, 'regionable_type'=>'districts']); //Dewantara
            DB::table('regionables')->insert(['region_id'=>694, 'regionable_id'=>4577, 'regionable_type'=>'districts']); //Muara Batu
                DB::table('regions')->insert(['id'=>695, 'parent'=>694, 'code'=>'24355', 'type'=>'village', 'name'=>'Village 24355, Districts 2435, City 243, Province 2']);
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53602, 'regionable_type'=>'village']); //Cot Seurani
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53603, 'regionable_type'=>'village']); //Cot Trueng
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53604, 'regionable_type'=>'village']); //Dakuta
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53605, 'regionable_type'=>'village']); //Kambam
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53606, 'regionable_type'=>'village']); //Keude Bungkaih
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53607, 'regionable_type'=>'village']); //Keude Mane
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53608, 'regionable_type'=>'village']); //Kuala Dua (dewa)
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53609, 'regionable_type'=>'village']); //Mane Tunong
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53610, 'regionable_type'=>'village']); //Meunasah Aron
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53611, 'regionable_type'=>'village']); //Meunasah Baro
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53612, 'regionable_type'=>'village']); //Meunasah Drang
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53613, 'regionable_type'=>'village']); //Meunasah Lhok
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53614, 'regionable_type'=>'village']); //Meunasah Pinto
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53615, 'regionable_type'=>'village']); //Paloh Awe
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53616, 'regionable_type'=>'village']); //Paloh Raya
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53617, 'regionable_type'=>'village']); //Panigah
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53618, 'regionable_type'=>'village']); //Pante Gurah
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53619, 'regionable_type'=>'village']); //Pinto Makmur
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53620, 'regionable_type'=>'village']); //Reuleut Barat
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53621, 'regionable_type'=>'village']); //Reuleut Timur
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53622, 'regionable_type'=>'village']); //Tanoh Anoe/anoue
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53623, 'regionable_type'=>'village']); //Teupin Banja
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53624, 'regionable_type'=>'village']); //Tumpok Beurandang
                DB::table('regionables')->insert(['region_id'=>695, 'regionable_id'=>53625, 'regionable_type'=>'village']); //Ulee Madon
            DB::table('regions')->insert(['id'=>696, 'parent'=>691, 'code'=>'2437', 'type'=>'districts', 'name'=>'Districts 2437, City 243, Province 2']);
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4573, 'regionable_type'=>'districts']); //Blang Mangat
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4578, 'regionable_type'=>'districts']); //Kuta Makmur
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4579, 'regionable_type'=>'districts']); //Meurah Mulia
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4580, 'regionable_type'=>'districts']); //Syamtalira Bayu
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4581, 'regionable_type'=>'districts']); //Geuredong Pase
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4582, 'regionable_type'=>'districts']); //Samudera
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4583, 'regionable_type'=>'districts']); //Nisam
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4584, 'regionable_type'=>'districts']); //Banda Baro
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4585, 'regionable_type'=>'districts']); //Nisam Antara
            DB::table('regionables')->insert(['region_id'=>696, 'regionable_id'=>4586, 'regionable_type'=>'districts']); //Sawang
                DB::table('regions')->insert(['id'=>697, 'parent'=>696, 'code'=>'24377', 'type'=>'village', 'name'=>'Village 24377, Districts 2437, City 243, Province 2']);
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53848, 'regionable_type'=>'village']); //Abeuk Reuling
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53849, 'regionable_type'=>'village']); //Babah Buloh
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53850, 'regionable_type'=>'village']); //Babah Krueng
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53851, 'regionable_type'=>'village']); //Blang Cut
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53852, 'regionable_type'=>'village']); //Blang Manyak
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53853, 'regionable_type'=>'village']); //Blang Reuling
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53854, 'regionable_type'=>'village']); //Blang Teurakan
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53855, 'regionable_type'=>'village']); //Cot Kumuneng/keumuning
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53856, 'regionable_type'=>'village']); //Cot Lambideng
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53857, 'regionable_type'=>'village']); //Gampong Sawang
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53858, 'regionable_type'=>'village']); //Gampong Teungoh
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53859, 'regionable_type'=>'village']); //Glee Dagang
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53860, 'regionable_type'=>'village']); //Gunci
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53861, 'regionable_type'=>'village']); //Jurong
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53862, 'regionable_type'=>'village']); //Krueng Baro
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53863, 'regionable_type'=>'village']); //Kubu
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53864, 'regionable_type'=>'village']); //Kuta Meuligoe
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53865, 'regionable_type'=>'village']); //Lagang
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53866, 'regionable_type'=>'village']); //Lancok
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53867, 'regionable_type'=>'village']); //Lhok Bayu
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53868, 'regionable_type'=>'village']); //Lhok Cut
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53869, 'regionable_type'=>'village']); //Lhok Gajah
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53870, 'regionable_type'=>'village']); //Lhok Jok
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53871, 'regionable_type'=>'village']); //Lhok Krek
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53872, 'regionable_type'=>'village']); //Lhok Kuyun
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53873, 'regionable_type'=>'village']); //Lhok Merbo (meureubo)
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53874, 'regionable_type'=>'village']); //Meunasah Pulo
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53875, 'regionable_type'=>'village']); //Pante Jaloh
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53876, 'regionable_type'=>'village']); //Paya Gaboh
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53877, 'regionable_type'=>'village']); //Paya Rabo Lhok
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53878, 'regionable_type'=>'village']); //Paya Rabo Timur
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53879, 'regionable_type'=>'village']); //Punteuet (punteut)
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53880, 'regionable_type'=>'village']); //Rambong Payong
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53881, 'regionable_type'=>'village']); //Riseh Baroh
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53882, 'regionable_type'=>'village']); //Riseh Teungoh
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53883, 'regionable_type'=>'village']); //Riseh Tunong
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53884, 'regionable_type'=>'village']); //Tanjong Keumala
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53885, 'regionable_type'=>'village']); //Teupin Rusep/reusep
                DB::table('regionables')->insert(['region_id'=>697, 'regionable_id'=>53886, 'regionable_type'=>'village']); //Ulee Geudong
            DB::table('regions')->insert(['id'=>698, 'parent'=>691, 'code'=>'2438', 'type'=>'districts', 'name'=>'Districts 2438, City 243, Province 2']);
            DB::table('regionables')->insert(['region_id'=>698, 'regionable_id'=>4587, 'regionable_type'=>'districts']); //Syamtalira Aron
            DB::table('regionables')->insert(['region_id'=>698, 'regionable_id'=>4588, 'regionable_type'=>'districts']); //Lhoksukon
            DB::table('regionables')->insert(['region_id'=>698, 'regionable_id'=>4589, 'regionable_type'=>'districts']); //Nibong
            DB::table('regionables')->insert(['region_id'=>698, 'regionable_id'=>4590, 'regionable_type'=>'districts']); //Tanah Luas
            DB::table('regionables')->insert(['region_id'=>698, 'regionable_id'=>4591, 'regionable_type'=>'districts']); //Paya Bakong
            DB::table('regionables')->insert(['region_id'=>698, 'regionable_id'=>4592, 'regionable_type'=>'districts']); //Pirak Timur
            DB::table('regionables')->insert(['region_id'=>698, 'regionable_id'=>4593, 'regionable_type'=>'districts']); //Matangkuli
                DB::table('regions')->insert(['id'=>699, 'parent'=>698, 'code'=>'24386', 'type'=>'village', 'name'=>'Village 24386, Districts 2438, City 243, Province 2']);
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54072, 'regionable_type'=>'village']); //Gampong Ampeh
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54073, 'regionable_type'=>'village']); //Alue Bieng
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54074, 'regionable_type'=>'village']); //Asan Seuleumak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54075, 'regionable_type'=>'village']); //Blang Dalam
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54076, 'regionable_type'=>'village']); //Blang Gunci
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54077, 'regionable_type'=>'village']); //Blang Mane
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54078, 'regionable_type'=>'village']); //Blang Paku
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54079, 'regionable_type'=>'village']); //Blang Pante
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54080, 'regionable_type'=>'village']); //Blang Sialet
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54081, 'regionable_type'=>'village']); //Buket Guru
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54082, 'regionable_type'=>'village']); //Buket Pidie
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54083, 'regionable_type'=>'village']); //Cempeudak (ceumpeudak)
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54084, 'regionable_type'=>'village']); //Cot Tufah
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54085, 'regionable_type'=>'village']); //Gampong Alue Leukot
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54086, 'regionable_type'=>'village']); //Gampong Alue Lhok
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54087, 'regionable_type'=>'village']); //Gampong Blang Ara
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54088, 'regionable_type'=>'village']); //Gampong Mampree
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54089, 'regionable_type'=>'village']); //Gampong Nga
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54090, 'regionable_type'=>'village']); //Gampong Seuneubok Aceh
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54091, 'regionable_type'=>'village']); //Geureughek
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54092, 'regionable_type'=>'village']); //Glumpang/geulumpang Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54093, 'regionable_type'=>'village']); //Jok
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54094, 'regionable_type'=>'village']); //Keubon Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54095, 'regionable_type'=>'village']); //Keude Paya Bakong
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54096, 'regionable_type'=>'village']); //Leuhong
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54097, 'regionable_type'=>'village']); //Lueng
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54098, 'regionable_type'=>'village']); //Matang Panyang
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54099, 'regionable_type'=>'village']); //Meunye Seuleumak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54100, 'regionable_type'=>'village']); //Meuria Seuleumak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54101, 'regionable_type'=>'village']); //Pante Seuleumak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54102, 'regionable_type'=>'village']); //Paya Meudru
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54103, 'regionable_type'=>'village']); //Peureupok
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54104, 'regionable_type'=>'village']); //Pucok Alue Seuleumak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54105, 'regionable_type'=>'village']); //Simpang
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54106, 'regionable_type'=>'village']); //Tanjong Beurunyong
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54107, 'regionable_type'=>'village']); //Tanjong Drien
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54108, 'regionable_type'=>'village']); //Teungku Dibanda Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54109, 'regionable_type'=>'village']); //Teungku Dibanda Tektek
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54110, 'regionable_type'=>'village']); //Tumpok Mesjid
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54111, 'regionable_type'=>'village']); //Tunong Krueng
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54112, 'regionable_type'=>'village']); //Alue Bungkoh
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54113, 'regionable_type'=>'village']); //Alue Rimei
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54114, 'regionable_type'=>'village']); //Ara Tonton Moncrang
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54115, 'regionable_type'=>'village']); //Asan Krueng Kreh
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54116, 'regionable_type'=>'village']); //Beuracan Rata
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54117, 'regionable_type'=>'village']); //Bili Baro
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54118, 'regionable_type'=>'village']); //Bungong
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54119, 'regionable_type'=>'village']); //Ceumeucet
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54120, 'regionable_type'=>'village']); //Glumpang (geulumpang)
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54121, 'regionable_type'=>'village']); //Keutapang
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54122, 'regionable_type'=>'village']); //Krueng Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54123, 'regionable_type'=>'village']); //Leupe
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54124, 'regionable_type'=>'village']); //Matang Keh
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54125, 'regionable_type'=>'village']); //Munye Tujuh (meunye Tujoh)
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54126, 'regionable_type'=>'village']); //Paya Lueng Jalo
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54127, 'regionable_type'=>'village']); //Pucok Alue Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54128, 'regionable_type'=>'village']); //Rayeuk Pange
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54129, 'regionable_type'=>'village']); //Reungkam (rengkam)
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54130, 'regionable_type'=>'village']); //Serdang
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54131, 'regionable_type'=>'village']); //Tanjong Seurikui
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54132, 'regionable_type'=>'village']); //Teupin U
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54133, 'regionable_type'=>'village']); //Trieng Krueng Kreh
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54134, 'regionable_type'=>'village']); //Ulee Blang
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54135, 'regionable_type'=>'village']); //Alue Entok
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54136, 'regionable_type'=>'village']); //Alue Tho
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54137, 'regionable_type'=>'village']); //Aron Glumpang Vii
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54138, 'regionable_type'=>'village']); //Aron Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54139, 'regionable_type'=>'village']); //Baro
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54140, 'regionable_type'=>'village']); //Beurancan Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54141, 'regionable_type'=>'village']); //Beuringin
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54142, 'regionable_type'=>'village']); //Blang Kuta
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54143, 'regionable_type'=>'village']); //Blang Matangkuli
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54144, 'regionable_type'=>'village']); //Blang Supeng
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54145, 'regionable_type'=>'village']); //Ceubreuk Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54146, 'regionable_type'=>'village']); //Dayah Baro
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54147, 'regionable_type'=>'village']); //Glumpang Vii
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54148, 'regionable_type'=>'village']); //Hagu
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54149, 'regionable_type'=>'village']); //Jeumpa Glumpang Vii
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54150, 'regionable_type'=>'village']); //Keude Matangkuli
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54151, 'regionable_type'=>'village']); //Kunyet Mule
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54152, 'regionable_type'=>'village']); //Lawang
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54153, 'regionable_type'=>'village']); //Leubok
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54154, 'regionable_type'=>'village']); //Matang Me
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54155, 'regionable_type'=>'village']); //Matang Menye
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54156, 'regionable_type'=>'village']); //Matang Peusangan
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54157, 'regionable_type'=>'village']); //Mee
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54158, 'regionable_type'=>'village']); //Mesjid Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54159, 'regionable_type'=>'village']); //Meuriya Matangkuli
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54160, 'regionable_type'=>'village']); //Munye Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54161, 'regionable_type'=>'village']); //Pantee Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54162, 'regionable_type'=>'village']); //Parang Sikureung
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54163, 'regionable_type'=>'village']); //Punti Glumpang Vii
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54164, 'regionable_type'=>'village']); //Punti Matang Kuli
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54165, 'regionable_type'=>'village']); //Punti Matangkuli
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54166, 'regionable_type'=>'village']); //Rayeuk Matangkuli
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54167, 'regionable_type'=>'village']); //Rayeuk Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54168, 'regionable_type'=>'village']); //Seuriweuk
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54169, 'regionable_type'=>'village']); //Siren
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54170, 'regionable_type'=>'village']); //Tanjong Babah Krueng
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54171, 'regionable_type'=>'village']); //Tanjong Haji Muda
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54172, 'regionable_type'=>'village']); //Tanjong Teungku Ali
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54173, 'regionable_type'=>'village']); //Teungoh Glumpang Vii
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54174, 'regionable_type'=>'village']); //Teungoh Pirak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54175, 'regionable_type'=>'village']); //Teungoh Seuleumak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54176, 'regionable_type'=>'village']); //Teupin Keubue
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54177, 'regionable_type'=>'village']); //Tj. Teungku Kari
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54178, 'regionable_type'=>'village']); //Trieng Teupin Keubue
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54179, 'regionable_type'=>'village']); //Tumpok Barat
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54180, 'regionable_type'=>'village']); //Tumpok Perlak
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54181, 'regionable_type'=>'village']); //Tutong
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54182, 'regionable_type'=>'village']); //Ude
                DB::table('regionables')->insert(['region_id'=>699, 'regionable_id'=>54183, 'regionable_type'=>'village']); //Ujong Kulam
            DB::table('regions')->insert(['id'=>700, 'parent'=>691, 'code'=>'2439', 'type'=>'districts', 'name'=>'Districts 2439, City 243, Province 2']);
            DB::table('regionables')->insert(['region_id'=>700, 'regionable_id'=>4594, 'regionable_type'=>'districts']); //Tanah Pasir
            DB::table('regionables')->insert(['region_id'=>700, 'regionable_id'=>4595, 'regionable_type'=>'districts']); //Lapang
            DB::table('regionables')->insert(['region_id'=>700, 'regionable_id'=>4596, 'regionable_type'=>'districts']); //Baktiya
            DB::table('regionables')->insert(['region_id'=>700, 'regionable_id'=>4597, 'regionable_type'=>'districts']); //Baktiya Barat
            DB::table('regionables')->insert(['region_id'=>700, 'regionable_id'=>4598, 'regionable_type'=>'districts']); //Seunuddon (seunudon)
            DB::table('regionables')->insert(['region_id'=>700, 'regionable_id'=>4599, 'regionable_type'=>'districts']); //Langkahan
            DB::table('regionables')->insert(['region_id'=>700, 'regionable_id'=>4600, 'regionable_type'=>'districts']); //Tanah Jambo Aye
                DB::table('regions')->insert(['id'=>701, 'parent'=>700, 'code'=>'24394', 'type'=>'village', 'name'=>'Village 24394, Districts 2439, City 243, Province 2']);
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54329, 'regionable_type'=>'village']); //Alue Dua
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54330, 'regionable_type'=>'village']); //Alue Krak Kayee
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54331, 'regionable_type'=>'village']); //Bantayan
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54332, 'regionable_type'=>'village']); //Buket Linteung
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54333, 'regionable_type'=>'village']); //Cot Bada
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54334, 'regionable_type'=>'village']); //Geudumbak
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54335, 'regionable_type'=>'village']); //Kampung Blang
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54336, 'regionable_type'=>'village']); //Krueng Lingka
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54337, 'regionable_type'=>'village']); //Langkahan
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54338, 'regionable_type'=>'village']); //Leubok Mane
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54339, 'regionable_type'=>'village']); //Lubok Pusaka
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54340, 'regionable_type'=>'village']); //Matang Keutapang
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54341, 'regionable_type'=>'village']); //Matang Rubek
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54342, 'regionable_type'=>'village']); //Matang Teungoh Selatan
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54343, 'regionable_type'=>'village']); //Meunasah Blang
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54344, 'regionable_type'=>'village']); //Padang Meuria
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54345, 'regionable_type'=>'village']); //Pante Gaki Bale
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54346, 'regionable_type'=>'village']); //Paya Tukai
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54347, 'regionable_type'=>'village']); //Rumoh Rayeuk
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54348, 'regionable_type'=>'village']); //Seureuke
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54349, 'regionable_type'=>'village']); //Simpang Tiga
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54350, 'regionable_type'=>'village']); //Tanjong Dalam Selatan
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54351, 'regionable_type'=>'village']); //Tanjong Jawa
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54352, 'regionable_type'=>'village']); //Alue Ie Mirah
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54353, 'regionable_type'=>'village']); //Alue Papeun
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54354, 'regionable_type'=>'village']); //Biara Barat
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54355, 'regionable_type'=>'village']); //Biara Timur
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54356, 'regionable_type'=>'village']); //Biram Cut
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54357, 'regionable_type'=>'village']); //Biram Rayeuk
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54358, 'regionable_type'=>'village']); //Buket Alue Puteh
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54359, 'regionable_type'=>'village']); //Buket Batee Badan
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54360, 'regionable_type'=>'village']); //Buket Jeurat Manyang
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54361, 'regionable_type'=>'village']); //Bukit Padang
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54362, 'regionable_type'=>'village']); //Ceumpeudak
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54363, 'regionable_type'=>'village']); //Cot Biek
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54364, 'regionable_type'=>'village']); //Geulumpang Umpung Unou
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54365, 'regionable_type'=>'village']); //Kota Panton Labu
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54366, 'regionable_type'=>'village']); //Lhok Beuringen
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54367, 'regionable_type'=>'village']); //Lhok Bintang Hu
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54368, 'regionable_type'=>'village']); //Lhok Merbo
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54369, 'regionable_type'=>'village']); //Lhok Reudeup
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54370, 'regionable_type'=>'village']); //Lueng Tuha
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54371, 'regionable_type'=>'village']); //Matang Arongan
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54372, 'regionable_type'=>'village']); //Matang Drien
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54373, 'regionable_type'=>'village']); //Matang Jurong
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54374, 'regionable_type'=>'village']); //Matang Maneh
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54375, 'regionable_type'=>'village']); //Matang Raya
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54376, 'regionable_type'=>'village']); //Matang Santot
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54377, 'regionable_type'=>'village']); //Matang Serdang
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54378, 'regionable_type'=>'village']); //Matang Seuke Pulot
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54379, 'regionable_type'=>'village']); //Matang Teungoh Teungoh
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54380, 'regionable_type'=>'village']); //Meunasah Dayah
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54381, 'regionable_type'=>'village']); //Meunasah Geudong
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54382, 'regionable_type'=>'village']); //Meunasah Merbo
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54383, 'regionable_type'=>'village']); //Meunasah Panton Labu
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54384, 'regionable_type'=>'village']); //Pucok Alue
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54385, 'regionable_type'=>'village']); //Rantau Panyang
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54386, 'regionable_type'=>'village']); //Rawang Itik
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54387, 'regionable_type'=>'village']); //Samakurok
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54388, 'regionable_type'=>'village']); //Seuneubok Dhou
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54389, 'regionable_type'=>'village']); //Seuneubok Pidie
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54390, 'regionable_type'=>'village']); //Tanjong Ceungai
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54391, 'regionable_type'=>'village']); //Tanjong Dalam Utara
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54392, 'regionable_type'=>'village']); //Tanjong Menuang
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54393, 'regionable_type'=>'village']); //Tanjong Meunye
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54394, 'regionable_type'=>'village']); //Tanjung Ara
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54395, 'regionable_type'=>'village']); //Tanjung Punti
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54396, 'regionable_type'=>'village']); //Teupin Bayu
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54397, 'regionable_type'=>'village']); //Teupin Gajah
                DB::table('regionables')->insert(['region_id'=>701, 'regionable_id'=>54398, 'regionable_type'=>'village']); //Ulee Gle
        DB::table('regions')->insert(['id'=>702, 'parent'=>546, 'code'=>'244', 'type'=>'city', 'name'=>'City 244, Province 2']);
        DB::table('regionables')->insert(['region_id'=>702, 'regionable_id'=>274, 'regionable_type'=>'city']); //Langsa city
        DB::table('regionables')->insert(['region_id'=>702, 'regionable_id'=>275, 'regionable_type'=>'city']); //Aceh Timur regencies
        DB::table('regionables')->insert(['region_id'=>702, 'regionable_id'=>276, 'regionable_type'=>'city']); //Aceh Tamiang regencies
            DB::table('regions')->insert(['id'=>703, 'parent'=>702, 'code'=>'2447', 'type'=>'districts', 'name'=>'Districts 2447, City 244, Province 2']);
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4630, 'regionable_type'=>'districts']); //Manyak Payed
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4631, 'regionable_type'=>'districts']); //Bendahara
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4632, 'regionable_type'=>'districts']); //Banda Mulia
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4633, 'regionable_type'=>'districts']); //Seruway
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4634, 'regionable_type'=>'districts']); //Rantau
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4635, 'regionable_type'=>'districts']); //Kota Kuala Simpang
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4636, 'regionable_type'=>'districts']); //Karang Baru
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4637, 'regionable_type'=>'districts']); //Sekerak
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4638, 'regionable_type'=>'districts']); //Kejuruan Muda
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4639, 'regionable_type'=>'districts']); //Tenggulun
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4640, 'regionable_type'=>'districts']); //Bandar Pusaka
            DB::table('regionables')->insert(['region_id'=>703, 'regionable_id'=>4641, 'regionable_type'=>'districts']); //Tamiang Hulu
                DB::table('regions')->insert(['id'=>704, 'parent'=>703, 'code'=>'24478', 'type'=>'village', 'name'=>'Village 24478, Districts 2447, City 244, Province 2']);
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55165, 'regionable_type'=>'village']); //Alur Jambu
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55166, 'regionable_type'=>'village']); //Aras Sembilan
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55167, 'regionable_type'=>'village']); //Babo
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55168, 'regionable_type'=>'village']); //Batang Ara
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55169, 'regionable_type'=>'village']); //Batu Bedulang
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55170, 'regionable_type'=>'village']); //Bengkelang
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55171, 'regionable_type'=>'village']); //Blang Kandis
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55172, 'regionable_type'=>'village']); //Jambo/jambu Rambong
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55173, 'regionable_type'=>'village']); //Pantai Cempa
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55174, 'regionable_type'=>'village']); //Pengidam
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55175, 'regionable_type'=>'village']); //Perkebunan Alur Jambu
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55176, 'regionable_type'=>'village']); //Perupuk
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55177, 'regionable_type'=>'village']); //Rantau Bintang
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55178, 'regionable_type'=>'village']); //Serba
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55179, 'regionable_type'=>'village']); //Sunting
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55180, 'regionable_type'=>'village']); //Alur Tani I
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55181, 'regionable_type'=>'village']); //Alur Tani Ii
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55182, 'regionable_type'=>'village']); //Bandar Khalifah
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55183, 'regionable_type'=>'village']); //Bandar Setia
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55184, 'regionable_type'=>'village']); //Harum Sari
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55185, 'regionable_type'=>'village']); //Kaloy
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55186, 'regionable_type'=>'village']); //Perkebunan Pulau Tiga
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55187, 'regionable_type'=>'village']); //Rongoh
                DB::table('regionables')->insert(['region_id'=>704, 'regionable_id'=>55188, 'regionable_type'=>'village']); //Wono Sari
        DB::table('regions')->insert(['id'=>705, 'parent'=>546, 'code'=>'245', 'type'=>'city', 'name'=>'City 245, Province 2']);
        DB::table('regionables')->insert(['region_id'=>705, 'regionable_id'=>277, 'regionable_type'=>'city']); //Aceh Tengah regencies
        DB::table('regionables')->insert(['region_id'=>705, 'regionable_id'=>278, 'regionable_type'=>'city']); //Bener Meriah regencies
            DB::table('regions')->insert(['id'=>706, 'parent'=>705, 'code'=>'2455', 'type'=>'districts', 'name'=>'Districts 2455, City 245, Province 2']);
            DB::table('regionables')->insert(['region_id'=>706, 'regionable_id'=>4644, 'regionable_type'=>'districts']); //Bebesen
            DB::table('regionables')->insert(['region_id'=>706, 'regionable_id'=>4656, 'regionable_type'=>'districts']); //Gajah Putih
            DB::table('regionables')->insert(['region_id'=>706, 'regionable_id'=>4657, 'regionable_type'=>'districts']); //Pintu Rime Gayo
            DB::table('regionables')->insert(['region_id'=>706, 'regionable_id'=>4658, 'regionable_type'=>'districts']); //Timang Gajah
                DB::table('regions')->insert(['id'=>707, 'parent'=>706, 'code'=>'24553', 'type'=>'village', 'name'=>'Village 24553, Districts 2455, City 245, Province 2']);
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55484, 'regionable_type'=>'village']); //Alam Jaya
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55485, 'regionable_type'=>'village']); //Gajah Putih
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55486, 'regionable_type'=>'village']); //Gayo Setie
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55487, 'regionable_type'=>'village']); //Meriah Jaya
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55488, 'regionable_type'=>'village']); //Pantan Lues
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55489, 'regionable_type'=>'village']); //Pante Karya
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55490, 'regionable_type'=>'village']); //Rerongga (reronga)
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55491, 'regionable_type'=>'village']); //Simpang Rahmat
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55492, 'regionable_type'=>'village']); //Timang Gajah
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55493, 'regionable_type'=>'village']); //Umah Besi
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55494, 'regionable_type'=>'village']); //Arul Cincin
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55495, 'regionable_type'=>'village']); //Arul Gading
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55496, 'regionable_type'=>'village']); //Bener Meriah
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55497, 'regionable_type'=>'village']); //Bintang Berangun
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55498, 'regionable_type'=>'village']); //Blang Ara
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55499, 'regionable_type'=>'village']); //Blang Rakal
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55500, 'regionable_type'=>'village']); //Gemasih
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55501, 'regionable_type'=>'village']); //Musaba
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55502, 'regionable_type'=>'village']); //Musara Pakat
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55503, 'regionable_type'=>'village']); //Negeri Antara
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55504, 'regionable_type'=>'village']); //Pancar Jelobok
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55505, 'regionable_type'=>'village']); //Pantan Lah
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55506, 'regionable_type'=>'village']); //Pantan Sinaku
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55507, 'regionable_type'=>'village']); //Perdamaian
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55508, 'regionable_type'=>'village']); //Pulo Intan
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55509, 'regionable_type'=>'village']); //Rata Ara
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55510, 'regionable_type'=>'village']); //Rimba Raya
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55511, 'regionable_type'=>'village']); //Simpang Lancang
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55512, 'regionable_type'=>'village']); //Singah Mulo
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55513, 'regionable_type'=>'village']); //Taman Firdaus
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55514, 'regionable_type'=>'village']); //Ulu Naron
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55515, 'regionable_type'=>'village']); //Uning Mas
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55516, 'regionable_type'=>'village']); //Wih Porak
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55517, 'regionable_type'=>'village']); //Bandar Lampahan
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55518, 'regionable_type'=>'village']); //Blang Rongka
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55519, 'regionable_type'=>'village']); //Bukit Mulie
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55520, 'regionable_type'=>'village']); //Bukit Tunyang
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55521, 'regionable_type'=>'village']); //Bumi Ayu
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55522, 'regionable_type'=>'village']); //Cekal Baru
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55523, 'regionable_type'=>'village']); //Damaran Baru
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55524, 'regionable_type'=>'village']); //Datu Beru Tunyang
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55525, 'regionable_type'=>'village']); //Fajar Harapan
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55526, 'regionable_type'=>'village']); //Gegur Sepakat
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55527, 'regionable_type'=>'village']); //Gunung Tunyang
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55528, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55529, 'regionable_type'=>'village']); //Karang Jadi
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55530, 'regionable_type'=>'village']); //Kenine
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55531, 'regionable_type'=>'village']); //Kolam Para Kanis
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55532, 'regionable_type'=>'village']); //Lampahan
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55533, 'regionable_type'=>'village']); //Lampahan Barat
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55534, 'regionable_type'=>'village']); //Lampahan Timur
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55535, 'regionable_type'=>'village']); //Linung Bale
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55536, 'regionable_type'=>'village']); //Mekar Ayu
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55537, 'regionable_type'=>'village']); //Mude Benara
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55538, 'regionable_type'=>'village']); //Pantan Kemuning
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55539, 'regionable_type'=>'village']); //Pantan Pediangen
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55540, 'regionable_type'=>'village']); //Rembune
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55541, 'regionable_type'=>'village']); //Setie
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55542, 'regionable_type'=>'village']); //Simpang Layang
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55543, 'regionable_type'=>'village']); //Suka Damai
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55544, 'regionable_type'=>'village']); //Sumber Jaya
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55545, 'regionable_type'=>'village']); //Timang Rasa
                DB::table('regionables')->insert(['region_id'=>707, 'regionable_id'=>55546, 'regionable_type'=>'village']); //Tunyang
            DB::table('regions')->insert(['id'=>708, 'parent'=>705, 'code'=>'2458', 'type'=>'districts', 'name'=>'Districts 2458, City 245, Province 2']);
            DB::table('regionables')->insert(['region_id'=>708, 'regionable_id'=>4659, 'regionable_type'=>'districts']); //Bukit
            DB::table('regionables')->insert(['region_id'=>708, 'regionable_id'=>4660, 'regionable_type'=>'districts']); //Wih Pesam
            DB::table('regionables')->insert(['region_id'=>708, 'regionable_id'=>4661, 'regionable_type'=>'districts']); //Mesidah
            DB::table('regionables')->insert(['region_id'=>708, 'regionable_id'=>4662, 'regionable_type'=>'districts']); //Permata
            DB::table('regionables')->insert(['region_id'=>708, 'regionable_id'=>4663, 'regionable_type'=>'districts']); //Bandar
            DB::table('regionables')->insert(['region_id'=>708, 'regionable_id'=>4664, 'regionable_type'=>'districts']); //Bener Kelipah
            DB::table('regionables')->insert(['region_id'=>708, 'regionable_id'=>4665, 'regionable_type'=>'districts']); //Syiah Utama
                DB::table('regions')->insert(['id'=>709, 'parent'=>708, 'code'=>'24582', 'type'=>'village', 'name'=>'Village 24582, Districts 2458, City 245, Province 2']);
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55614, 'regionable_type'=>'village']); //Amor
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55615, 'regionable_type'=>'village']); //Buntul Gayo
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55616, 'regionable_type'=>'village']); //Cemparan Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55617, 'regionable_type'=>'village']); //Cemparan Lama
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55618, 'regionable_type'=>'village']); //Cemparan Pakat Jeroh
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55619, 'regionable_type'=>'village']); //Gunung Sayang
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55620, 'regionable_type'=>'village']); //Hakim Peteri Pintu
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55621, 'regionable_type'=>'village']); //Jamur Atu
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55622, 'regionable_type'=>'village']); //Pantan Kuli
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55623, 'regionable_type'=>'village']); //Perumpaken Benjadi
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55624, 'regionable_type'=>'village']); //Simpang Renggali
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55625, 'regionable_type'=>'village']); //Simpur
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55626, 'regionable_type'=>'village']); //Sosial
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55627, 'regionable_type'=>'village']); //Wer Tingkem
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55628, 'regionable_type'=>'village']); //Wih Resap (pintu Wih Resap)
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55629, 'regionable_type'=>'village']); //Ayu Ara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55630, 'regionable_type'=>'village']); //Bale Musara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55631, 'regionable_type'=>'village']); //Bale Purnama
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55632, 'regionable_type'=>'village']); //Bener Pepanyi
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55633, 'regionable_type'=>'village']); //Bintang Bener
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55634, 'regionable_type'=>'village']); //Bintang Permata
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55635, 'regionable_type'=>'village']); //Buntul Fitri (peteri)
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55636, 'regionable_type'=>'village']); //Burni Pase
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55637, 'regionable_type'=>'village']); //Ceding Ayu
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55638, 'regionable_type'=>'village']); //Darul Aman Ramu
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55639, 'regionable_type'=>'village']); //Gelampang Wih Tenang Uken
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55640, 'regionable_type'=>'village']); //Jelobok
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55641, 'regionable_type'=>'village']); //Jungke
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55642, 'regionable_type'=>'village']); //Kepie / Kepies
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55643, 'regionable_type'=>'village']); //Pantan Tengah Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55644, 'regionable_type'=>'village']); //Pemanggo
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55645, 'regionable_type'=>'village']); //Penosan Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55646, 'regionable_type'=>'village']); //Ramung Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55647, 'regionable_type'=>'village']); //Rikit Musara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55648, 'regionable_type'=>'village']); //Seni Antara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55649, 'regionable_type'=>'village']); //Suku Sara Tangke
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55650, 'regionable_type'=>'village']); //Tawar Bengi
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55651, 'regionable_type'=>'village']); //Temas Mumanang
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55652, 'regionable_type'=>'village']); //Timur Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55653, 'regionable_type'=>'village']); //Uning Sejuk
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55654, 'regionable_type'=>'village']); //Wih Tenang Toa
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55655, 'regionable_type'=>'village']); //Wih Tenang Uken
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55656, 'regionable_type'=>'village']); //Bahgie Bentona
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55657, 'regionable_type'=>'village']); //Beranun Teleden
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55658, 'regionable_type'=>'village']); //Blang Pulo
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55659, 'regionable_type'=>'village']); //Bukit Wih Ilang
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55660, 'regionable_type'=>'village']); //Gele Semayang
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55661, 'regionable_type'=>'village']); //Gunung Antara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55662, 'regionable_type'=>'village']); //Hakim Wih Ilang
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55663, 'regionable_type'=>'village']); //Jadi Sepakat
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55664, 'regionable_type'=>'village']); //Janarata
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55665, 'regionable_type'=>'village']); //Kala Nempan
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55666, 'regionable_type'=>'village']); //Keramat Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55667, 'regionable_type'=>'village']); //Lewajadi
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55668, 'regionable_type'=>'village']); //Makmur Sentosa
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55669, 'regionable_type'=>'village']); //Mutiara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55670, 'regionable_type'=>'village']); //Muyang Kute Mangku
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55671, 'regionable_type'=>'village']); //Pakat Jeroh
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55672, 'regionable_type'=>'village']); //Paya Baning
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55673, 'regionable_type'=>'village']); //Paya Ringkel
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55674, 'regionable_type'=>'village']); //Petukel/petukal Blang Jurong
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55675, 'regionable_type'=>'village']); //Pondok Baru
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55676, 'regionable_type'=>'village']); //Pondok Gajah
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55677, 'regionable_type'=>'village']); //Pondok Ulung
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55678, 'regionable_type'=>'village']); //Puja Mulia
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55679, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55680, 'regionable_type'=>'village']); //Remang Ketike Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55681, 'regionable_type'=>'village']); //Selamat Rejo
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55682, 'regionable_type'=>'village']); //Selisih Mara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55683, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55684, 'regionable_type'=>'village']); //Simpang Utama
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55685, 'regionable_type'=>'village']); //Suku Wih Ilang
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55686, 'regionable_type'=>'village']); //Tanjung Pura
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55687, 'regionable_type'=>'village']); //Tansaran Bidin
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55688, 'regionable_type'=>'village']); //Tawar Sedenge
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55689, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55690, 'regionable_type'=>'village']); //Batin Bandar Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55691, 'regionable_type'=>'village']); //Bener Kelipah Selatan
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55692, 'regionable_type'=>'village']); //Bener Kelipah Utara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55693, 'regionable_type'=>'village']); //Bener Lukup Ii
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55694, 'regionable_type'=>'village']); //Bintang Musara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55695, 'regionable_type'=>'village']); //Gunung Musara
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55696, 'regionable_type'=>'village']); //Jongok Meluem
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55697, 'regionable_type'=>'village']); //Kala Tenang
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55698, 'regionable_type'=>'village']); //Lot Bener Kelipah
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55699, 'regionable_type'=>'village']); //Nosar Baru
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55700, 'regionable_type'=>'village']); //Nosar Tawar Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55701, 'regionable_type'=>'village']); //Suku Bener
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55702, 'regionable_type'=>'village']); //Blang Panu
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55703, 'regionable_type'=>'village']); //Gerpa
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55704, 'regionable_type'=>'village']); //Geruti Jaya
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55705, 'regionable_type'=>'village']); //Goneng
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55706, 'regionable_type'=>'village']); //Kerlah
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55707, 'regionable_type'=>'village']); //Kutelah Lane
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55708, 'regionable_type'=>'village']); //Pasir Putih
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55709, 'regionable_type'=>'village']); //Payung
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55710, 'regionable_type'=>'village']); //Rata Mulie
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55711, 'regionable_type'=>'village']); //Rusip
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55712, 'regionable_type'=>'village']); //Tembolon
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55713, 'regionable_type'=>'village']); //Tempen Baru
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55714, 'regionable_type'=>'village']); //Uning
                DB::table('regionables')->insert(['region_id'=>709, 'regionable_id'=>55715, 'regionable_type'=>'village']); //Wihni Durin
        DB::table('regions')->insert(['id'=>710, 'parent'=>546, 'code'=>'246', 'type'=>'city', 'name'=>'City 246, Province 2']);
        DB::table('regionables')->insert(['region_id'=>710, 'regionable_id'=>279, 'regionable_type'=>'city']); //Aceh Tenggara regencies
        DB::table('regionables')->insert(['region_id'=>710, 'regionable_id'=>280, 'regionable_type'=>'city']); //Gayo Lues regencies
            DB::table('regions')->insert(['id'=>711, 'parent'=>710, 'code'=>'2465', 'type'=>'districts', 'name'=>'Districts 2465, City 246, Province 2']);
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4666, 'regionable_type'=>'districts']); //Babussalam
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4667, 'regionable_type'=>'districts']); //Lawe Bulan
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4668, 'regionable_type'=>'districts']); //Deleng Pokhisen
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4669, 'regionable_type'=>'districts']); //Bambel
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4670, 'regionable_type'=>'districts']); //Ketambe
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4671, 'regionable_type'=>'districts']); //Badar
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4672, 'regionable_type'=>'districts']); //Darul Hasanah
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4682, 'regionable_type'=>'districts']); //Blang Pegayon
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4683, 'regionable_type'=>'districts']); //Dabun Gelang (debun Gelang)
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4684, 'regionable_type'=>'districts']); //Pantan Cuaca
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4685, 'regionable_type'=>'districts']); //Rikit Gaib
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4686, 'regionable_type'=>'districts']); //Blang Kejeren
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4687, 'regionable_type'=>'districts']); //Blang Jerango
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4688, 'regionable_type'=>'districts']); //Kuta Panjang
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4689, 'regionable_type'=>'districts']); //Pining (pinding)
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4690, 'regionable_type'=>'districts']); //Putri Betung
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4691, 'regionable_type'=>'districts']); //Terangun (terangon)
            DB::table('regionables')->insert(['region_id'=>711, 'regionable_id'=>4692, 'regionable_type'=>'districts']); //Teripe/tripe Jaya
                DB::table('regions')->insert(['id'=>712, 'parent'=>711, 'code'=>'24656', 'type'=>'village', 'name'=>'Village 24656, Districts 2465, City 246, Province 2']);
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56204, 'regionable_type'=>'village']); //Berhut
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56205, 'regionable_type'=>'village']); //Blang Kala
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56206, 'regionable_type'=>'village']); //Blang Kuncir
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56207, 'regionable_type'=>'village']); //Bukut
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56208, 'regionable_type'=>'village']); //Garut
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56209, 'regionable_type'=>'village']); //Gawar Belangi
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56210, 'regionable_type'=>'village']); //Gewat
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56211, 'regionable_type'=>'village']); //Jabo
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56212, 'regionable_type'=>'village']); //Kute Reje
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56213, 'regionable_type'=>'village']); //Kutesange
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56214, 'regionable_type'=>'village']); //Lestari
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56215, 'regionable_type'=>'village']); //Makmur Jaya
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56216, 'regionable_type'=>'village']); //Padang
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56217, 'regionable_type'=>'village']); //Pantan Lues
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56218, 'regionable_type'=>'village']); //Persada Tongra
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56219, 'regionable_type'=>'village']); //Reje Pudung
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56220, 'regionable_type'=>'village']); //Rempelan Pinang
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56221, 'regionable_type'=>'village']); //Rime Jaya
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56222, 'regionable_type'=>'village']); //Rumpi
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56223, 'regionable_type'=>'village']); //Soyo
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56224, 'regionable_type'=>'village']); //Telege Jernih
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56225, 'regionable_type'=>'village']); //Terangon
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56226, 'regionable_type'=>'village']); //Terlis
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56227, 'regionable_type'=>'village']); //Buntul Musara
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56228, 'regionable_type'=>'village']); //Kuala Jernih
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56229, 'regionable_type'=>'village']); //Pantan Kela
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56230, 'regionable_type'=>'village']); //Pasir
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56231, 'regionable_type'=>'village']); //Paya Kumer
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56232, 'regionable_type'=>'village']); //Perlak
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56233, 'regionable_type'=>'village']); //Pulo Gelime
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56234, 'regionable_type'=>'village']); //Rerebe
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56235, 'regionable_type'=>'village']); //Setul
                DB::table('regionables')->insert(['region_id'=>712, 'regionable_id'=>56236, 'regionable_type'=>'village']); //Uyem Beriring
        DB::table('regions')->insert(['id'=>713, 'parent'=>546, 'code'=>'247', 'type'=>'city', 'name'=>'City 247, Province 2']);
        DB::table('regionables')->insert(['region_id'=>713, 'regionable_id'=>281, 'regionable_type'=>'city']); //Subulussalam city
        DB::table('regionables')->insert(['region_id'=>713, 'regionable_id'=>282, 'regionable_type'=>'city']); //Aceh Singkil regencies
            DB::table('regions')->insert(['id'=>714, 'parent'=>713, 'code'=>'2478', 'type'=>'districts', 'name'=>'Districts 2478, City 247, Province 2']);
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4693, 'regionable_type'=>'districts']); //Longkib
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4694, 'regionable_type'=>'districts']); //Sultan Daulat
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4695, 'regionable_type'=>'districts']); //Simpang Kiri
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4696, 'regionable_type'=>'districts']); //Penanggalan
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4697, 'regionable_type'=>'districts']); //Rundeng
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4698, 'regionable_type'=>'districts']); //Simpang Kanan
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4699, 'regionable_type'=>'districts']); //Suro Makmur
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4700, 'regionable_type'=>'districts']); //Danau Paris
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4701, 'regionable_type'=>'districts']); //Gunung Meriah (mariah)
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4702, 'regionable_type'=>'districts']); //Kota Baharu
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4703, 'regionable_type'=>'districts']); //Kuala Baru
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4704, 'regionable_type'=>'districts']); //Singkohor
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4705, 'regionable_type'=>'districts']); //Singkil Utara
            DB::table('regionables')->insert(['region_id'=>714, 'regionable_id'=>4706, 'regionable_type'=>'districts']); //Singkil
                DB::table('regions')->insert(['id'=>715, 'parent'=>714, 'code'=>'24785', 'type'=>'village', 'name'=>'Village 24785, Districts 2478, City 247, Province 2']);
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56397, 'regionable_type'=>'village']); //Gosong Telaga Barat
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56398, 'regionable_type'=>'village']); //Gosong Telaga Selatan
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56399, 'regionable_type'=>'village']); //Gosong Telaga Timur
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56400, 'regionable_type'=>'village']); //Gosong Telaga Utara
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56401, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56402, 'regionable_type'=>'village']); //Ketapang Indah
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56403, 'regionable_type'=>'village']); //Telaga Sakti
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56404, 'regionable_type'=>'village']); //Kilangan
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56405, 'regionable_type'=>'village']); //Kota Simboling
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56406, 'regionable_type'=>'village']); //Pasar Singkil
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56407, 'regionable_type'=>'village']); //Paya Bumbung
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56408, 'regionable_type'=>'village']); //Pemuka
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56409, 'regionable_type'=>'village']); //Pulo Sarok
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56410, 'regionable_type'=>'village']); //Rantau Gedang
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56411, 'regionable_type'=>'village']); //Selok Aceh
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56412, 'regionable_type'=>'village']); //Siti Ambia
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56413, 'regionable_type'=>'village']); //Suka Damai
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56414, 'regionable_type'=>'village']); //Suka Makmur
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56415, 'regionable_type'=>'village']); //Takal Pasir
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56416, 'regionable_type'=>'village']); //Teluk Ambun
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56417, 'regionable_type'=>'village']); //Teluk Rumbia
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56418, 'regionable_type'=>'village']); //Ujung
                DB::table('regionables')->insert(['region_id'=>715, 'regionable_id'=>56419, 'regionable_type'=>'village']); //Ujung Bawang
            DB::table('regions')->insert(['id'=>716, 'parent'=>713, 'code'=>'2479', 'type'=>'districts', 'name'=>'Districts 2479, City 247, Province 2']);
            DB::table('regionables')->insert(['region_id'=>716, 'regionable_id'=>4707, 'regionable_type'=>'districts']); //Pulau Banyak Barat
            DB::table('regionables')->insert(['region_id'=>716, 'regionable_id'=>4708, 'regionable_type'=>'districts']); //Pulau Banyak
                DB::table('regions')->insert(['id'=>717, 'parent'=>716, 'code'=>'24791', 'type'=>'village', 'name'=>'Village 24791, Districts 2479, City 247, Province 2']);
                DB::table('regionables')->insert(['region_id'=>717, 'regionable_id'=>56420, 'regionable_type'=>'village']); //Asantola
                DB::table('regionables')->insert(['region_id'=>717, 'regionable_id'=>56421, 'regionable_type'=>'village']); //Haloban
                DB::table('regionables')->insert(['region_id'=>717, 'regionable_id'=>56422, 'regionable_type'=>'village']); //Suka Makmur
                DB::table('regionables')->insert(['region_id'=>717, 'regionable_id'=>56423, 'regionable_type'=>'village']); //Ujung Sialit
                DB::table('regionables')->insert(['region_id'=>717, 'regionable_id'=>56424, 'regionable_type'=>'village']); //Pulau Baguk
                DB::table('regionables')->insert(['region_id'=>717, 'regionable_id'=>56425, 'regionable_type'=>'village']); //Pulau Balai
                DB::table('regionables')->insert(['region_id'=>717, 'regionable_id'=>56426, 'regionable_type'=>'village']); //Teluk Nibung

        //Riau
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>26, 'regionable_type'=>'province']); //Riau
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>356, 'regionable_type'=>'city']); //Pekanbaru city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>357, 'regionable_type'=>'city']); //Pelalawan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>358, 'regionable_type'=>'city']); //Kampar regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>359, 'regionable_type'=>'city']); //Rokan Hulu regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>360, 'regionable_type'=>'city']); //Siak regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>361, 'regionable_type'=>'city']); //Bengkalis regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>362, 'regionable_type'=>'city']); //Kepulauan Meranti regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>363, 'regionable_type'=>'city']); //Dumai city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>364, 'regionable_type'=>'city']); //Rokan Hilir regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>365, 'regionable_type'=>'city']); //Indragiri Hilir regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>366, 'regionable_type'=>'city']); //Indragiri Hulu regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>367, 'regionable_type'=>'city']); //Kuantan Singingi regencies

        DB::table('regions')->insert(['id'=>718, 'parent'=>546, 'code'=>'281', 'type'=>'city', 'name'=>'City 281, Province 2']);
        DB::table('regionables')->insert(['region_id'=>718, 'regionable_id'=>356, 'regionable_type'=>'city']); //Pekanbaru city
            DB::table('regions')->insert(['id'=>719, 'parent'=>718, 'code'=>'2811', 'type'=>'districts', 'name'=>'Districts 2811, City 281, Province 2']);
            DB::table('regionables')->insert(['region_id'=>719, 'regionable_id'=>5872, 'regionable_type'=>'districts']); //Pekanbaru Kota
                DB::table('regions')->insert(['id'=>720, 'parent'=>719, 'code'=>'28111', 'type'=>'village', 'name'=>'Village 28111, Districts 2811, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>720, 'regionable_id'=>67899, 'regionable_type'=>'village']); //Suka Ramai
                DB::table('regionables')->insert(['region_id'=>720, 'regionable_id'=>67900, 'regionable_type'=>'village']); //Suma Hilang
                DB::table('regions')->insert(['id'=>721, 'parent'=>719, 'code'=>'28112', 'type'=>'village', 'name'=>'Village 28112, Districts 2811, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>721, 'regionable_id'=>67901, 'regionable_type'=>'village']); //Kota Tinggi
                DB::table('regions')->insert(['id'=>722, 'parent'=>719, 'code'=>'28114', 'type'=>'village', 'name'=>'Village 28114, Districts 2811, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>722, 'regionable_id'=>67902, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regions')->insert(['id'=>723, 'parent'=>719, 'code'=>'28115', 'type'=>'village', 'name'=>'Village 28115, Districts 2811, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>723, 'regionable_id'=>67903, 'regionable_type'=>'village']); //Tanah Datar
                DB::table('regions')->insert(['id'=>724, 'parent'=>719, 'code'=>'28116', 'type'=>'village', 'name'=>'Village 28116, Districts 2811, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>724, 'regionable_id'=>67904, 'regionable_type'=>'village']); //Simpang Empat
            DB::table('regions')->insert(['id'=>725, 'parent'=>718, 'code'=>'2812', 'type'=>'districts', 'name'=>'Districts 2812, City 281, Province 2']);
            DB::table('regionables')->insert(['region_id'=>725, 'regionable_id'=>5873, 'regionable_type'=>'districts']); //Sukajadi
            DB::table('regionables')->insert(['region_id'=>725, 'regionable_id'=>5874, 'regionable_type'=>'districts']); //Marpoyan Damai
                DB::table('regions')->insert(['id'=>726, 'parent'=>725, 'code'=>'28125', 'type'=>'village', 'name'=>'Village 28125, Districts 2812, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>726, 'regionable_id'=>67912, 'regionable_type'=>'village']); //Maharatu
                DB::table('regionables')->insert(['region_id'=>726, 'regionable_id'=>67913, 'regionable_type'=>'village']); //Sidomulyo Timur
                DB::table('regionables')->insert(['region_id'=>726, 'regionable_id'=>67914, 'regionable_type'=>'village']); //Wonorejo
            DB::table('regions')->insert(['id'=>727, 'parent'=>718, 'code'=>'2813', 'type'=>'districts', 'name'=>'Districts 2813, City 281, Province 2']);
            DB::table('regionables')->insert(['region_id'=>727, 'regionable_id'=>5875, 'regionable_type'=>'districts']); //Sail
                DB::table('regions')->insert(['id'=>728, 'parent'=>727, 'code'=>'28131', 'type'=>'village', 'name'=>'Village 28131, Districts 2813, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>728, 'regionable_id'=>67917, 'regionable_type'=>'village']); //Cinta Raja
                DB::table('regionables')->insert(['region_id'=>728, 'regionable_id'=>67918, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>728, 'regionable_id'=>67919, 'regionable_type'=>'village']); //Suka Mulia (sukamulya)
            DB::table('regions')->insert(['id'=>729, 'parent'=>718, 'code'=>'2814', 'type'=>'districts', 'name'=>'Districts 2814, City 281, Province 2']);
            DB::table('regionables')->insert(['region_id'=>729, 'regionable_id'=>5876, 'regionable_type'=>'districts']); //Lima Puluh
                DB::table('regions')->insert(['id'=>730, 'parent'=>729, 'code'=>'28141', 'type'=>'village', 'name'=>'Village 28141, Districts 2814, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>730, 'regionable_id'=>67920, 'regionable_type'=>'village']); //Rintis
                DB::table('regions')->insert(['id'=>731, 'parent'=>729, 'code'=>'28142', 'type'=>'village', 'name'=>'Village 28142, Districts 2814, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>731, 'regionable_id'=>67921, 'regionable_type'=>'village']); //Sekip
                DB::table('regions')->insert(['id'=>732, 'parent'=>729, 'code'=>'28143', 'type'=>'village', 'name'=>'Village 28143, Districts 2814, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>732, 'regionable_id'=>67922, 'regionable_type'=>'village']); //Tanjung Rhu
                DB::table('regions')->insert(['id'=>733, 'parent'=>729, 'code'=>'28144', 'type'=>'village', 'name'=>'Village 28144, Districts 2814, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>733, 'regionable_id'=>67923, 'regionable_type'=>'village']); //Pesisir
            DB::table('regions')->insert(['id'=>734, 'parent'=>718, 'code'=>'2815', 'type'=>'districts', 'name'=>'Districts 2815, City 281, Province 2']);
            DB::table('regionables')->insert(['region_id'=>734, 'regionable_id'=>5877, 'regionable_type'=>'districts']); //Senapelan
                DB::table('regions')->insert(['id'=>735, 'parent'=>734, 'code'=>'28151', 'type'=>'village', 'name'=>'Village 28151, Districts 2815, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>735, 'regionable_id'=>67924, 'regionable_type'=>'village']); //Sago
                DB::table('regions')->insert(['id'=>736, 'parent'=>734, 'code'=>'28152', 'type'=>'village', 'name'=>'Village 28152, Districts 2815, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>736, 'regionable_id'=>67925, 'regionable_type'=>'village']); //Kampung Dalam
                DB::table('regions')->insert(['id'=>737, 'parent'=>734, 'code'=>'28153', 'type'=>'village', 'name'=>'Village 28153, Districts 2815, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>737, 'regionable_id'=>67926, 'regionable_type'=>'village']); //Kampung Bandar
                DB::table('regions')->insert(['id'=>738, 'parent'=>734, 'code'=>'28154', 'type'=>'village', 'name'=>'Village 28154, Districts 2815, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>738, 'regionable_id'=>67927, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regions')->insert(['id'=>739, 'parent'=>734, 'code'=>'28155', 'type'=>'village', 'name'=>'Village 28155, Districts 2815, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>739, 'regionable_id'=>67928, 'regionable_type'=>'village']); //Padang Terubuk
                DB::table('regions')->insert(['id'=>740, 'parent'=>734, 'code'=>'28156', 'type'=>'village', 'name'=>'Village 28156, Districts 2815, City 281, Province 2']);
                DB::table('regionables')->insert(['region_id'=>740, 'regionable_id'=>67929, 'regionable_type'=>'village']); //Padang Bulan
        DB::table('regions')->insert(['id'=>741, 'parent'=>546, 'code'=>'282', 'type'=>'city', 'name'=>'City 282, Province 2']);
        DB::table('regionables')->insert(['region_id'=>741, 'regionable_id'=>356, 'regionable_type'=>'city']); //Pekanbaru city
            DB::table('regions')->insert(['id'=>742, 'parent'=>741, 'code'=>'2826', 'type'=>'districts', 'name'=>'Districts 2826, City 282, Province 2']);
            DB::table('regionables')->insert(['region_id'=>742, 'regionable_id'=>5878, 'regionable_type'=>'districts']); //Rumbai Pesisir
            DB::table('regionables')->insert(['region_id'=>742, 'regionable_id'=>5879, 'regionable_type'=>'districts']); //Rumbai
                DB::table('regions')->insert(['id'=>743, 'parent'=>742, 'code'=>'28261', 'type'=>'village', 'name'=>'Village 28261, Districts 2826, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>743, 'regionable_id'=>67930, 'regionable_type'=>'village']); //Limbungan
                DB::table('regionables')->insert(['region_id'=>743, 'regionable_id'=>67931, 'regionable_type'=>'village']); //Limbungan Baru
                DB::table('regionables')->insert(['region_id'=>743, 'regionable_id'=>67936, 'regionable_type'=>'village']); //Sri Meranti
                DB::table('regions')->insert(['id'=>744, 'parent'=>742, 'code'=>'28264', 'type'=>'village', 'name'=>'Village 28264, Districts 2826, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>744, 'regionable_id'=>67937, 'regionable_type'=>'village']); //Palas
                DB::table('regionables')->insert(['region_id'=>744, 'regionable_id'=>67938, 'regionable_type'=>'village']); //Rumbai Bukit
                DB::table('regions')->insert(['id'=>745, 'parent'=>742, 'code'=>'28265', 'type'=>'village', 'name'=>'Village 28265, Districts 2826, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>745, 'regionable_id'=>67939, 'regionable_type'=>'village']); //Umban Sari
                DB::table('regions')->insert(['id'=>746, 'parent'=>742, 'code'=>'28267', 'type'=>'village', 'name'=>'Village 28267, Districts 2826, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>746, 'regionable_id'=>67940, 'regionable_type'=>'village']); //Muara Fajar
            DB::table('regions')->insert(['id'=>747, 'parent'=>741, 'code'=>'2828', 'type'=>'districts', 'name'=>'Districts 2828, City 282, Province 2']);
            DB::table('regionables')->insert(['region_id'=>747, 'regionable_id'=>5874, 'regionable_type'=>'districts']); //Marpoyan Damai
            DB::table('regionables')->insert(['region_id'=>747, 'regionable_id'=>5878, 'regionable_type'=>'districts']); //Rumbai Pesisir
            DB::table('regionables')->insert(['region_id'=>747, 'regionable_id'=>5880, 'regionable_type'=>'districts']); //Tenayan Raya
            DB::table('regionables')->insert(['region_id'=>747, 'regionable_id'=>5881, 'regionable_type'=>'districts']); //Bukit Raya
                DB::table('regions')->insert(['id'=>748, 'parent'=>747, 'code'=>'28281', 'type'=>'village', 'name'=>'Village 28281, Districts 2828, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>748, 'regionable_id'=>67941, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>748, 'regionable_id'=>67945, 'regionable_type'=>'village']); //Tangkerang Labuai
                DB::table('regions')->insert(['id'=>749, 'parent'=>747, 'code'=>'28284', 'type'=>'village', 'name'=>'Village 28284, Districts 2828, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>749, 'regionable_id'=>67946, 'regionable_type'=>'village']); //Simpang Tiga
                DB::table('regions')->insert(['id'=>750, 'parent'=>747, 'code'=>'28288', 'type'=>'village', 'name'=>'Village 28288, Districts 2828, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>750, 'regionable_id'=>67947, 'regionable_type'=>'village']); //Tangkerang Selatan
                DB::table('regions')->insert(['id'=>751, 'parent'=>747, 'code'=>'28289', 'type'=>'village', 'name'=>'Village 28289, Districts 2828, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>751, 'regionable_id'=>67944, 'regionable_type'=>'village']); //Tangkerang Timur
                DB::table('regionables')->insert(['region_id'=>751, 'regionable_id'=>67948, 'regionable_type'=>'village']); //Tangkerang Utara
            DB::table('regions')->insert(['id'=>752, 'parent'=>741, 'code'=>'2829', 'type'=>'districts', 'name'=>'Districts 2829, City 282, Province 2']);
            DB::table('regionables')->insert(['region_id'=>752, 'regionable_id'=>5882, 'regionable_type'=>'districts']); //Tampan
            DB::table('regionables')->insert(['region_id'=>752, 'regionable_id'=>5883, 'regionable_type'=>'districts']); //Payung Sekaki
                DB::table('regions')->insert(['id'=>753, 'parent'=>752, 'code'=>'28292', 'type'=>'village', 'name'=>'Village 28292, Districts 2829, City 282, Province 2']);
                DB::table('regionables')->insert(['region_id'=>753, 'regionable_id'=>67953, 'regionable_type'=>'village']); //Air Hitam
                DB::table('regionables')->insert(['region_id'=>753, 'regionable_id'=>67954, 'regionable_type'=>'village']); //Labuh Baru Barat
                DB::table('regionables')->insert(['region_id'=>753, 'regionable_id'=>67955, 'regionable_type'=>'village']); //Labuh Baru Timur
                DB::table('regionables')->insert(['region_id'=>753, 'regionable_id'=>67956, 'regionable_type'=>'village']); //Tampan
        DB::table('regions')->insert(['id'=>754, 'parent'=>546, 'code'=>'283', 'type'=>'city', 'name'=>'City 283, Province 2']);
        DB::table('regionables')->insert(['region_id'=>754, 'regionable_id'=>357, 'regionable_type'=>'city']); //Pelalawan regencies
            DB::table('regions')->insert(['id'=>755, 'parent'=>754, 'code'=>'2835', 'type'=>'districts', 'name'=>'Districts 2835, City 283, Province 2']);
            DB::table('regionables')->insert(['region_id'=>755, 'regionable_id'=>5884, 'regionable_type'=>'districts']); //Kerumutan
            DB::table('regionables')->insert(['region_id'=>755, 'regionable_id'=>5885, 'regionable_type'=>'districts']); //Pelalawan
            DB::table('regionables')->insert(['region_id'=>755, 'regionable_id'=>5886, 'regionable_type'=>'districts']); //Teluk Meranti
                DB::table('regions')->insert(['id'=>756, 'parent'=>755, 'code'=>'28353', 'type'=>'village', 'name'=>'Village 28353, Districts 2835, City 283, Province 2']);
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67957, 'regionable_type'=>'village']); //Banjar Panjang
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67958, 'regionable_type'=>'village']); //Beringin Makmur
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67959, 'regionable_type'=>'village']); //Bukit Lembah Subur
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67960, 'regionable_type'=>'village']); //Kerumutan
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67961, 'regionable_type'=>'village']); //Lipai Bulan
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67962, 'regionable_type'=>'village']); //Mak Teduh
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67963, 'regionable_type'=>'village']); //Pangkalan Panduk
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67964, 'regionable_type'=>'village']); //Pangkalan Tampoi/tampui
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67965, 'regionable_type'=>'village']); //Pematang Tinggi
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67966, 'regionable_type'=>'village']); //Tanjung Air Hitam
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67967, 'regionable_type'=>'village']); //Batang Nilo Kecil
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67968, 'regionable_type'=>'village']); //Delik
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67969, 'regionable_type'=>'village']); //Kuala Tolam
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67970, 'regionable_type'=>'village']); //Lalang Kabung
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67971, 'regionable_type'=>'village']); //Pelalawan
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67972, 'regionable_type'=>'village']); //Ransang
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67973, 'regionable_type'=>'village']); //Sering
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67974, 'regionable_type'=>'village']); //Sungai Ara
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67975, 'regionable_type'=>'village']); //Telayap
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67976, 'regionable_type'=>'village']); //Gambut Mutiara
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67977, 'regionable_type'=>'village']); //Kuala Panduk
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67978, 'regionable_type'=>'village']); //Labuhan Bilik
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67979, 'regionable_type'=>'village']); //Pangkalan Terap
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67980, 'regionable_type'=>'village']); //Petodaan
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67981, 'regionable_type'=>'village']); //Pulau Muda
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67982, 'regionable_type'=>'village']); //Segamai
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67983, 'regionable_type'=>'village']); //Teluk Binjai
                DB::table('regionables')->insert(['region_id'=>756, 'regionable_id'=>67984, 'regionable_type'=>'village']); //Teluk Meranti
            DB::table('regions')->insert(['id'=>757, 'parent'=>754, 'code'=>'2838', 'type'=>'districts', 'name'=>'Districts 2838, City 283, Province 2']);
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5887, 'regionable_type'=>'districts']); //Pangkalan Kerinci
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5888, 'regionable_type'=>'districts']); //Langgam
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5889, 'regionable_type'=>'districts']); //Ukui
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5890, 'regionable_type'=>'districts']); //Pangkalan Kuras
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5891, 'regionable_type'=>'districts']); //Pangkalan Lesung
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5892, 'regionable_type'=>'districts']); //Bunut
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5893, 'regionable_type'=>'districts']); //Bandar Sei Kijang
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5894, 'regionable_type'=>'districts']); //Bandar Petalangan
            DB::table('regionables')->insert(['region_id'=>757, 'regionable_id'=>5895, 'regionable_type'=>'districts']); //Kuala Kampar
                DB::table('regions')->insert(['id'=>758, 'parent'=>757, 'code'=>'28384', 'type'=>'village', 'name'=>'Village 28384, Districts 2838, City 283, Province 2']);
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68054, 'regionable_type'=>'village']); //Air Terjun
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68055, 'regionable_type'=>'village']); //Angkasa
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68056, 'regionable_type'=>'village']); //Lubuk Keranji
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68057, 'regionable_type'=>'village']); //Lubuk Keranji Timur
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68058, 'regionable_type'=>'village']); //Lubuk Raja
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68059, 'regionable_type'=>'village']); //Lubuk Terap
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68060, 'regionable_type'=>'village']); //Pompa Air
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68061, 'regionable_type'=>'village']); //Sialang Bungkuk
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68062, 'regionable_type'=>'village']); //Sialang Godang
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68063, 'regionable_type'=>'village']); //Tambun
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68064, 'regionable_type'=>'village']); //Terbangiang
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68065, 'regionable_type'=>'village']); //Serapung
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68066, 'regionable_type'=>'village']); //Sokoi
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68067, 'regionable_type'=>'village']); //Sungai Mas
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68068, 'regionable_type'=>'village']); //Sungai Solok
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68069, 'regionable_type'=>'village']); //Sungai Upih
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68070, 'regionable_type'=>'village']); //Tanjung Sum
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68071, 'regionable_type'=>'village']); //Teluk
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68072, 'regionable_type'=>'village']); //Teluk Bakau
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68073, 'regionable_type'=>'village']); //Teluk Beringin
                DB::table('regionables')->insert(['region_id'=>758, 'regionable_id'=>68074, 'regionable_type'=>'village']); //Teluk Dalam
        DB::table('regions')->insert(['id'=>759, 'parent'=>546, 'code'=>'284', 'type'=>'city', 'name'=>'City 284, Province 2']);
        DB::table('regionables')->insert(['region_id'=>759, 'regionable_id'=>358, 'regionable_type'=>'city']); //Kampar regencies
            DB::table('regions')->insert(['id'=>760, 'parent'=>759, 'code'=>'2841', 'type'=>'districts', 'name'=>'Districts 2841, City 284, Province 2']);
            DB::table('regionables')->insert(['region_id'=>760, 'regionable_id'=>5896, 'regionable_type'=>'districts']); //Bangkinang
                DB::table('regions')->insert(['id'=>761, 'parent'=>760, 'code'=>'28411', 'type'=>'village', 'name'=>'Village 28411, Districts 2841, City 284, Province 2']);
                DB::table('regionables')->insert(['region_id'=>761, 'regionable_id'=>68075, 'regionable_type'=>'village']); //Bangkinang (bangkinang Kota)
                DB::table('regionables')->insert(['region_id'=>761, 'regionable_id'=>68076, 'regionable_type'=>'village']); //Kumantan
                DB::table('regionables')->insert(['region_id'=>761, 'regionable_id'=>68077, 'regionable_type'=>'village']); //Ridan Permai
                DB::table('regions')->insert(['id'=>762, 'parent'=>760, 'code'=>'28412', 'type'=>'village', 'name'=>'Village 28412, Districts 2841, City 284, Province 2']);
                DB::table('regionables')->insert(['region_id'=>762, 'regionable_id'=>68078, 'regionable_type'=>'village']); //Langgini
            DB::table('regions')->insert(['id'=>763, 'parent'=>759, 'code'=>'2845', 'type'=>'districts', 'name'=>'Districts 2845, City 284, Province 2']);
            DB::table('regionables')->insert(['region_id'=>763, 'regionable_id'=>5897, 'regionable_type'=>'districts']); //Salo
            DB::table('regionables')->insert(['region_id'=>763, 'regionable_id'=>5898, 'regionable_type'=>'districts']); //Siak Hulu
            DB::table('regionables')->insert(['region_id'=>763, 'regionable_id'=>5899, 'regionable_type'=>'districts']); //Xiii Koto Kampar
            DB::table('regionables')->insert(['region_id'=>763, 'regionable_id'=>5900, 'regionable_type'=>'districts']); //Koto Kampar Hulu
            DB::table('regionables')->insert(['region_id'=>763, 'regionable_id'=>5901, 'regionable_type'=>'districts']); //Rumbio Jaya
                DB::table('regions')->insert(['id'=>764, 'parent'=>763, 'code'=>'28458', 'type'=>'village', 'name'=>'Village 28458, Districts 2845, City 284, Province 2']);
                DB::table('regionables')->insert(['region_id'=>764, 'regionable_id'=>68116, 'regionable_type'=>'village']); //Alam Panjang
                DB::table('regionables')->insert(['region_id'=>764, 'regionable_id'=>68117, 'regionable_type'=>'village']); //Batang Batindih
                DB::table('regionables')->insert(['region_id'=>764, 'regionable_id'=>68118, 'regionable_type'=>'village']); //Bukit Kratai
                DB::table('regionables')->insert(['region_id'=>764, 'regionable_id'=>68119, 'regionable_type'=>'village']); //Pulau Payung
                DB::table('regionables')->insert(['region_id'=>764, 'regionable_id'=>68120, 'regionable_type'=>'village']); //Simpang Petai
                DB::table('regionables')->insert(['region_id'=>764, 'regionable_id'=>68121, 'regionable_type'=>'village']); //Tambusai
                DB::table('regionables')->insert(['region_id'=>764, 'regionable_id'=>68122, 'regionable_type'=>'village']); //Teratak
            DB::table('regions')->insert(['id'=>765, 'parent'=>759, 'code'=>'2846', 'type'=>'districts', 'name'=>'Districts 2846, City 284, Province 2']);
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5902, 'regionable_type'=>'districts']); //Kampar
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5903, 'regionable_type'=>'districts']); //Kampar Timur
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5904, 'regionable_type'=>'districts']); //Kampar Utara
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5905, 'regionable_type'=>'districts']); //Tambang
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5906, 'regionable_type'=>'districts']); //Perhentian Raja
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5907, 'regionable_type'=>'districts']); //Kuok (bangkinang Barat)
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5908, 'regionable_type'=>'districts']); //Bangkinang Seberang
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5909, 'regionable_type'=>'districts']); //Tapung
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5910, 'regionable_type'=>'districts']); //Tapung Hilir
            DB::table('regionables')->insert(['region_id'=>765, 'regionable_id'=>5911, 'regionable_type'=>'districts']); //Tapung Hulu
                DB::table('regions')->insert(['id'=>766, 'parent'=>765, 'code'=>'28464', 'type'=>'village', 'name'=>'Village 28464, Districts 2846, City 284, Province 2']);
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68198, 'regionable_type'=>'village']); //Air Terbit
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68199, 'regionable_type'=>'village']); //Batu Gajah
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68200, 'regionable_type'=>'village']); //Bencah Kelubi
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68201, 'regionable_type'=>'village']); //Gading Sari
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68202, 'regionable_type'=>'village']); //Indra Sakti
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68203, 'regionable_type'=>'village']); //Indrapuri
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68204, 'regionable_type'=>'village']); //Karya Indah
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68205, 'regionable_type'=>'village']); //Kijang Rejo
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68206, 'regionable_type'=>'village']); //Kinantan/kenantan
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68207, 'regionable_type'=>'village']); //Muara Mahat Baru
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68208, 'regionable_type'=>'village']); //Mukti Sari
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68209, 'regionable_type'=>'village']); //Pagaruyung
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68210, 'regionable_type'=>'village']); //Pancuran Gading
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68211, 'regionable_type'=>'village']); //Pantai Cermin
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68212, 'regionable_type'=>'village']); //Pelambaian
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68213, 'regionable_type'=>'village']); //Petapahan
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68214, 'regionable_type'=>'village']); //Petapahan Jaya
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68215, 'regionable_type'=>'village']); //Sari Galuh
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68216, 'regionable_type'=>'village']); //Sei/sungai Agung
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68217, 'regionable_type'=>'village']); //Sei/sungai Lembu Makmur
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68218, 'regionable_type'=>'village']); //Sei/sungai Putih
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68219, 'regionable_type'=>'village']); //Sibuak
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68220, 'regionable_type'=>'village']); //Sumber Makmur
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68221, 'regionable_type'=>'village']); //Tanjung Sawit
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68222, 'regionable_type'=>'village']); //Tri Manunggal
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68223, 'regionable_type'=>'village']); //Beringin Lestari
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68224, 'regionable_type'=>'village']); //Cinta Damai
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68225, 'regionable_type'=>'village']); //Gerbang Sari
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68226, 'regionable_type'=>'village']); //Kijang Jaya
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68227, 'regionable_type'=>'village']); //Kijang Makmur
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68228, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68229, 'regionable_type'=>'village']); //Kota Garo
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68230, 'regionable_type'=>'village']); //Kota/koto Bangun
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68231, 'regionable_type'=>'village']); //Koto Aman
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68232, 'regionable_type'=>'village']); //Sikijang/sekijang
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68233, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68234, 'regionable_type'=>'village']); //Tanah Tinggi
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68235, 'regionable_type'=>'village']); //Tandan Sari
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68236, 'regionable_type'=>'village']); //Tapung Lestari
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68237, 'regionable_type'=>'village']); //Tapung Makmur
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68238, 'regionable_type'=>'village']); //Tebing Lestari
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68239, 'regionable_type'=>'village']); //Bukit Kemuning
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68240, 'regionable_type'=>'village']); //Danau Lancang
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68241, 'regionable_type'=>'village']); //Kasikan
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68242, 'regionable_type'=>'village']); //Kusau Makmur
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68243, 'regionable_type'=>'village']); //Rimba Beringin
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68244, 'regionable_type'=>'village']); //Sinama Nenek
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68245, 'regionable_type'=>'village']); //Sukaramai
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68246, 'regionable_type'=>'village']); //Sumber Sari
                DB::table('regionables')->insert(['region_id'=>766, 'regionable_id'=>68247, 'regionable_type'=>'village']); //Talang Danto
            DB::table('regions')->insert(['id'=>767, 'parent'=>759, 'code'=>'2847', 'type'=>'districts', 'name'=>'Districts 2847, City 284, Province 2']);
            DB::table('regionables')->insert(['region_id'=>767, 'regionable_id'=>5912, 'regionable_type'=>'districts']); //Kampar Kiri Hulu
            DB::table('regionables')->insert(['region_id'=>767, 'regionable_id'=>5913, 'regionable_type'=>'districts']); //Kampar Kiri Hilir
            DB::table('regionables')->insert(['region_id'=>767, 'regionable_id'=>5914, 'regionable_type'=>'districts']); //Kampar Kiri Tengah
            DB::table('regionables')->insert(['region_id'=>767, 'regionable_id'=>5915, 'regionable_type'=>'districts']); //Kampar Kiri
            DB::table('regionables')->insert(['region_id'=>767, 'regionable_id'=>5916, 'regionable_type'=>'districts']); //Gunung Sahilan
                DB::table('regions')->insert(['id'=>768, 'parent'=>767, 'code'=>'28471', 'type'=>'village', 'name'=>'Village 28471, Districts 2847, City 284, Province 2']);
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68248, 'regionable_type'=>'village']); //Aur Kuning
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68249, 'regionable_type'=>'village']); //Batu Sanggan
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68250, 'regionable_type'=>'village']); //Batu Sasak
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68251, 'regionable_type'=>'village']); //Bukit Betung
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68252, 'regionable_type'=>'village']); //Danau Sontul
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68253, 'regionable_type'=>'village']); //Deras Tajak
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68254, 'regionable_type'=>'village']); //Dua Sepakat
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68255, 'regionable_type'=>'village']); //Gajah Bertalut
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68256, 'regionable_type'=>'village']); //Gema
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68257, 'regionable_type'=>'village']); //Kebun Tinggi
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68258, 'regionable_type'=>'village']); //Kota Lama
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68259, 'regionable_type'=>'village']); //Lubuk Bingau
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68260, 'regionable_type'=>'village']); //Ludai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68261, 'regionable_type'=>'village']); //Muarobio
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68262, 'regionable_type'=>'village']); //Pangkalan Kapas
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68263, 'regionable_type'=>'village']); //Pangkalan Serai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68264, 'regionable_type'=>'village']); //Subayang Jaya
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68265, 'regionable_type'=>'village']); //Sungai Santi
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68266, 'regionable_type'=>'village']); //Tanjung Belit
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68267, 'regionable_type'=>'village']); //Tanjung Belit Selatan
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68268, 'regionable_type'=>'village']); //Tanjung Beringin
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68269, 'regionable_type'=>'village']); //Tanjung Karang
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68270, 'regionable_type'=>'village']); //Tanjung Permai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68271, 'regionable_type'=>'village']); //Terusan
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68272, 'regionable_type'=>'village']); //Bangun Sari
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68273, 'regionable_type'=>'village']); //Gading Permai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68274, 'regionable_type'=>'village']); //Mentulik
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68275, 'regionable_type'=>'village']); //Rantau Kasih
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68276, 'regionable_type'=>'village']); //Sungai Bunga/bungo
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68277, 'regionable_type'=>'village']); //Sungai Pagar
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68278, 'regionable_type'=>'village']); //Sungai Petai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68279, 'regionable_type'=>'village']); //Sungai Simpang Dua
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68280, 'regionable_type'=>'village']); //Bina Baru
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68281, 'regionable_type'=>'village']); //Bukit Sakai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68282, 'regionable_type'=>'village']); //Hidup Baru
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68283, 'regionable_type'=>'village']); //Karya Bakti/bhakti
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68284, 'regionable_type'=>'village']); //Koto Damai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68285, 'regionable_type'=>'village']); //Lubuk Sakai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68286, 'regionable_type'=>'village']); //Mayang Pongkai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68287, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68288, 'regionable_type'=>'village']); //Penghidupan
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68289, 'regionable_type'=>'village']); //Simalinyang
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68290, 'regionable_type'=>'village']); //Utama Karya
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68291, 'regionable_type'=>'village']); //Domo
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68292, 'regionable_type'=>'village']); //Iv Koto Setingkai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68293, 'regionable_type'=>'village']); //Kuntu
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68294, 'regionable_type'=>'village']); //Kuntu Darussalam
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68295, 'regionable_type'=>'village']); //Lipat Kain
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68296, 'regionable_type'=>'village']); //Lipat Kain Selatan
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68297, 'regionable_type'=>'village']); //Lipat Kain Utara
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68298, 'regionable_type'=>'village']); //Muara Selaya
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68299, 'regionable_type'=>'village']); //Padang Sawah
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68300, 'regionable_type'=>'village']); //Sungai Geringging
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68301, 'regionable_type'=>'village']); //Sungai Harapan
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68302, 'regionable_type'=>'village']); //Sungai Liti
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68303, 'regionable_type'=>'village']); //Sungai Paku
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68304, 'regionable_type'=>'village']); //Sungai Raja
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68305, 'regionable_type'=>'village']); //Sungai Rambai
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68306, 'regionable_type'=>'village']); //Sungai Sarik
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68307, 'regionable_type'=>'village']); //Tanjung Harapan
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68308, 'regionable_type'=>'village']); //Tanjung Mas
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68309, 'regionable_type'=>'village']); //Teluk Paman
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68310, 'regionable_type'=>'village']); //Teluk Paman Timur
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68311, 'regionable_type'=>'village']); //Gunung Mulya
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68312, 'regionable_type'=>'village']); //Gunung Sahilan
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68313, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68314, 'regionable_type'=>'village']); //Kebun Durian
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68315, 'regionable_type'=>'village']); //Makmur Sejahtera
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68316, 'regionable_type'=>'village']); //Sahilan Darussalam
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68317, 'regionable_type'=>'village']); //Subarak
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68318, 'regionable_type'=>'village']); //Suka Makmur
                DB::table('regionables')->insert(['region_id'=>768, 'regionable_id'=>68319, 'regionable_type'=>'village']); //Sungai Lipai
        DB::table('regions')->insert(['id'=>769, 'parent'=>546, 'code'=>'285', 'type'=>'city', 'name'=>'City 285, Province 2']);
        DB::table('regionables')->insert(['region_id'=>769, 'regionable_id'=>359, 'regionable_type'=>'city']); //Rokan Hulu regencies
            DB::table('regions')->insert(['id'=>770, 'parent'=>769, 'code'=>'2855', 'type'=>'districts', 'name'=>'Districts 2855, City 285, Province 2']);
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5917, 'regionable_type'=>'districts']); //Kabun
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5918, 'regionable_type'=>'districts']); //Tandun
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5919, 'regionable_type'=>'districts']); //Ujung Batu
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5920, 'regionable_type'=>'districts']); //Pendalian Iv Koto
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5921, 'regionable_type'=>'districts']); //Rokan Iv Koto
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5922, 'regionable_type'=>'districts']); //Kunto Darussalam
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5923, 'regionable_type'=>'districts']); //Pagaran Tapah Darussalam
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5924, 'regionable_type'=>'districts']); //Rambah
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5925, 'regionable_type'=>'districts']); //Bangun Purba
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5926, 'regionable_type'=>'districts']); //Rambah Hilir
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5927, 'regionable_type'=>'districts']); //Tambusai Utara
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5928, 'regionable_type'=>'districts']); //Tambusai
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5929, 'regionable_type'=>'districts']); //Bonai Darussalam
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5930, 'regionable_type'=>'districts']); //Kepenuhan Hulu
            DB::table('regionables')->insert(['region_id'=>770, 'regionable_id'=>5931, 'regionable_type'=>'districts']); //Kepenuhan
                DB::table('regions')->insert(['id'=>771, 'parent'=>770, 'code'=>'28559', 'type'=>'village', 'name'=>'Village 28559, Districts 2855, City 285, Province 2']);
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68434, 'regionable_type'=>'village']); //Bonai
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68435, 'regionable_type'=>'village']); //Kasang Mungai
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68436, 'regionable_type'=>'village']); //Kasang Padang
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68437, 'regionable_type'=>'village']); //Pauh
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68438, 'regionable_type'=>'village']); //Rawa Makmur
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68439, 'regionable_type'=>'village']); //Sontang
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68440, 'regionable_type'=>'village']); //Teluk Sono
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68441, 'regionable_type'=>'village']); //Kepayan
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68442, 'regionable_type'=>'village']); //Kepenuhan Hulu
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68443, 'regionable_type'=>'village']); //Kepenuhan Jaya
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68444, 'regionable_type'=>'village']); //Muara Jaya
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68445, 'regionable_type'=>'village']); //Pekan Tebih
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68446, 'regionable_type'=>'village']); //Kepenuhan Barat
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68447, 'regionable_type'=>'village']); //Kepenuhan Barat Mulya
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68448, 'regionable_type'=>'village']); //Kepenuhan Barat Sei Rokan Jaya
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68449, 'regionable_type'=>'village']); //Kepenuhan Baru
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68450, 'regionable_type'=>'village']); //Kepenuhan Hilir
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68451, 'regionable_type'=>'village']); //Kepenuhan Raya
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68452, 'regionable_type'=>'village']); //Kepenuhan Suka
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68453, 'regionable_type'=>'village']); //Kepenuhan Tengah
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68454, 'regionable_type'=>'village']); //Rantau Binuang Sakti
                DB::table('regionables')->insert(['region_id'=>771, 'regionable_id'=>68455, 'regionable_type'=>'village']); //Ulak Patian
            DB::table('regions')->insert(['id'=>772, 'parent'=>769, 'code'=>'2856', 'type'=>'districts', 'name'=>'Districts 2856, City 285, Province 2']);
            DB::table('regionables')->insert(['region_id'=>772, 'regionable_id'=>5932, 'regionable_type'=>'districts']); //Rambah Samo
                DB::table('regions')->insert(['id'=>773, 'parent'=>772, 'code'=>'28565', 'type'=>'village', 'name'=>'Village 28565, Districts 2856, City 285, Province 2']);
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68456, 'regionable_type'=>'village']); //Karya Mulya
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68457, 'regionable_type'=>'village']); //Langkitin
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68458, 'regionable_type'=>'village']); //Lubuk Bilang
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68459, 'regionable_type'=>'village']); //Lubuk Napal
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68460, 'regionable_type'=>'village']); //Marga Mulya
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68461, 'regionable_type'=>'village']); //Masda Makmur
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68462, 'regionable_type'=>'village']); //Pasir Makmur
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68463, 'regionable_type'=>'village']); //Rambah Baru
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68464, 'regionable_type'=>'village']); //Rambah Samo
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68465, 'regionable_type'=>'village']); //Rambah Samo Barat
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68466, 'regionable_type'=>'village']); //Rambah Utama
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68467, 'regionable_type'=>'village']); //Sei Kuning
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68468, 'regionable_type'=>'village']); //Sei Salak
                DB::table('regionables')->insert(['region_id'=>773, 'regionable_id'=>68469, 'regionable_type'=>'village']); //Teluk Aur
        DB::table('regions')->insert(['id'=>774, 'parent'=>546, 'code'=>'286', 'type'=>'city', 'name'=>'City 286, Province 2']);
        DB::table('regionables')->insert(['region_id'=>774, 'regionable_id'=>360, 'regionable_type'=>'city']); //Siak regencies
            DB::table('regions')->insert(['id'=>775, 'parent'=>774, 'code'=>'2865', 'type'=>'districts', 'name'=>'Districts 2865, City 286, Province 2']);
            DB::table('regionables')->insert(['region_id'=>775, 'regionable_id'=>5933, 'regionable_type'=>'districts']); //Kerinci Kanan
            DB::table('regionables')->insert(['region_id'=>775, 'regionable_id'=>5934, 'regionable_type'=>'districts']); //Lubuk Dalam
                DB::table('regions')->insert(['id'=>776, 'parent'=>775, 'code'=>'28654', 'type'=>'village', 'name'=>'Village 28654, Districts 2865, City 286, Province 2']);
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68470, 'regionable_type'=>'village']); //Buana Bakti/bhakti
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68471, 'regionable_type'=>'village']); //Buatan Baru
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68472, 'regionable_type'=>'village']); //Bukit Agung
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68473, 'regionable_type'=>'village']); //Bukit Harapan
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68474, 'regionable_type'=>'village']); //Delima Jaya
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68475, 'regionable_type'=>'village']); //Gabung Makmur
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68476, 'regionable_type'=>'village']); //Jati Mulia/mulya
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68477, 'regionable_type'=>'village']); //Kerinci Kanan
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68478, 'regionable_type'=>'village']); //Kerinci Kiri
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68479, 'regionable_type'=>'village']); //Kumbara Utama
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68480, 'regionable_type'=>'village']); //Seminai
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68481, 'regionable_type'=>'village']); //Simpang Perak Jaya
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68482, 'regionable_type'=>'village']); //Empang Baru
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68483, 'regionable_type'=>'village']); //Lubuk Dalam
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68484, 'regionable_type'=>'village']); //Rawang Kao
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68485, 'regionable_type'=>'village']); //Rawang Kao Barat
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68486, 'regionable_type'=>'village']); //Sialang Baru
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68487, 'regionable_type'=>'village']); //Sialang Palas
                DB::table('regionables')->insert(['region_id'=>776, 'regionable_id'=>68488, 'regionable_type'=>'village']); //Sri Gading
            DB::table('regions')->insert(['id'=>777, 'parent'=>774, 'code'=>'2866', 'type'=>'districts', 'name'=>'Districts 2866, City 286, Province 2']);
            DB::table('regionables')->insert(['region_id'=>777, 'regionable_id'=>5935, 'regionable_type'=>'districts']); //Sungai Apit
                DB::table('regions')->insert(['id'=>778, 'parent'=>777, 'code'=>'28662', 'type'=>'village', 'name'=>'Village 28662, Districts 2866, City 286, Province 2']);
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68489, 'regionable_type'=>'village']); //Bunsur
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68490, 'regionable_type'=>'village']); //Harapan
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68491, 'regionable_type'=>'village']); //Kayu Ara Permai
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68492, 'regionable_type'=>'village']); //Lalang
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68493, 'regionable_type'=>'village']); //Mengkapan
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68494, 'regionable_type'=>'village']); //Parit I/ii
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68495, 'regionable_type'=>'village']); //Penyengat
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68496, 'regionable_type'=>'village']); //Rawa Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68497, 'regionable_type'=>'village']); //Sungai Apit
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68498, 'regionable_type'=>'village']); //Sungai Kayu Ara
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68499, 'regionable_type'=>'village']); //Sungai Rawa
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68500, 'regionable_type'=>'village']); //Tanjung Kuras
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68501, 'regionable_type'=>'village']); //Teluk Batil
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68502, 'regionable_type'=>'village']); //Teluk Lanus
                DB::table('regionables')->insert(['region_id'=>778, 'regionable_id'=>68503, 'regionable_type'=>'village']); //Teluk Mesjid
            DB::table('regions')->insert(['id'=>779, 'parent'=>774, 'code'=>'2867', 'type'=>'districts', 'name'=>'Districts 2867, City 286, Province 2']);
            DB::table('regionables')->insert(['region_id'=>779, 'regionable_id'=>5936, 'regionable_type'=>'districts']); //Dayun
            DB::table('regionables')->insert(['region_id'=>779, 'regionable_id'=>5937, 'regionable_type'=>'districts']); //Sungai Mandau
            DB::table('regionables')->insert(['region_id'=>779, 'regionable_id'=>5938, 'regionable_type'=>'districts']); //Siak
            DB::table('regionables')->insert(['region_id'=>779, 'regionable_id'=>5939, 'regionable_type'=>'districts']); //Koto Gasib
                DB::table('regions')->insert(['id'=>780, 'parent'=>779, 'code'=>'28671', 'type'=>'village', 'name'=>'Village 28671, Districts 2867, City 286, Province 2']);
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68504, 'regionable_type'=>'village']); //Banjar Seminai
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68505, 'regionable_type'=>'village']); //Berumbung Baru (tilan)
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68506, 'regionable_type'=>'village']); //Buana Makmur
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68507, 'regionable_type'=>'village']); //Dayun
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68508, 'regionable_type'=>'village']); //Lubuk Tilan
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68509, 'regionable_type'=>'village']); //Merangkai
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68510, 'regionable_type'=>'village']); //Pangkalan Makmur
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68511, 'regionable_type'=>'village']); //Sawit Permai
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68512, 'regionable_type'=>'village']); //Sialang Sakti
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68513, 'regionable_type'=>'village']); //Suka Mulia/mulya
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68514, 'regionable_type'=>'village']); //Teluk Merbau
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68515, 'regionable_type'=>'village']); //Bencah Umbai
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68516, 'regionable_type'=>'village']); //Lubuk Jering
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68517, 'regionable_type'=>'village']); //Lubuk Umbut
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68518, 'regionable_type'=>'village']); //Muara Bungkal
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68519, 'regionable_type'=>'village']); //Muara Kelantan
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68520, 'regionable_type'=>'village']); //Olak
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68521, 'regionable_type'=>'village']); //Sungai Lodang
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68522, 'regionable_type'=>'village']); //Tasik Betung
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68523, 'regionable_type'=>'village']); //Teluk Lancang
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68524, 'regionable_type'=>'village']); //Buantan Besar
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68525, 'regionable_type'=>'village']); //Kampung Dalam
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68526, 'regionable_type'=>'village']); //Kampung Rempak
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68527, 'regionable_type'=>'village']); //Langkai
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68528, 'regionable_type'=>'village']); //Merempan Hulu
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68529, 'regionable_type'=>'village']); //Rawang Air Putih
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68530, 'regionable_type'=>'village']); //Suak Lanjut
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68531, 'regionable_type'=>'village']); //Tumang
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68532, 'regionable_type'=>'village']); //Buatan I
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68533, 'regionable_type'=>'village']); //Buatan Ii
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68534, 'regionable_type'=>'village']); //Empang Pandan
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68535, 'regionable_type'=>'village']); //Keranji Guguh
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68536, 'regionable_type'=>'village']); //Kuala Gasib
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68537, 'regionable_type'=>'village']); //Pangkalan Pisang
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68538, 'regionable_type'=>'village']); //Rantau Panjang
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68539, 'regionable_type'=>'village']); //Sengkemang
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68540, 'regionable_type'=>'village']); //Sri Gemilang
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68541, 'regionable_type'=>'village']); //Tasik Seminai
                DB::table('regionables')->insert(['region_id'=>780, 'regionable_id'=>68542, 'regionable_type'=>'village']); //Teluk Rimba
            DB::table('regions')->insert(['id'=>781, 'parent'=>774, 'code'=>'2868', 'type'=>'districts', 'name'=>'Districts 2868, City 286, Province 2']);
            DB::table('regionables')->insert(['region_id'=>781, 'regionable_id'=>5940, 'regionable_type'=>'districts']); //Sabak Auh
            DB::table('regionables')->insert(['region_id'=>781, 'regionable_id'=>5941, 'regionable_type'=>'districts']); //Minas
            DB::table('regionables')->insert(['region_id'=>781, 'regionable_id'=>5942, 'regionable_type'=>'districts']); //Kandis
                DB::table('regions')->insert(['id'=>782, 'parent'=>781, 'code'=>'28686', 'type'=>'village', 'name'=>'Village 28686, Districts 2868, City 286, Province 2']);
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68556, 'regionable_type'=>'village']); //Bekalar
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68557, 'regionable_type'=>'village']); //Belutu
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68558, 'regionable_type'=>'village']); //Jambai Makmur
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68559, 'regionable_type'=>'village']); //Kandis
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68560, 'regionable_type'=>'village']); //Kandis Kota
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68561, 'regionable_type'=>'village']); //Libo Jaya
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68562, 'regionable_type'=>'village']); //Pencing Bekuto
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68563, 'regionable_type'=>'village']); //Sam Sam
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68564, 'regionable_type'=>'village']); //Simpang Belutu
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68565, 'regionable_type'=>'village']); //Sungai Gondang
                DB::table('regionables')->insert(['region_id'=>782, 'regionable_id'=>68566, 'regionable_type'=>'village']); //Telaga Sam-sam
        DB::table('regions')->insert(['id'=>783, 'parent'=>546, 'code'=>'287', 'type'=>'city', 'name'=>'City 287, Province 2']);
        DB::table('regionables')->insert(['region_id'=>783, 'regionable_id'=>360, 'regionable_type'=>'city']); //Siak regencies
        DB::table('regionables')->insert(['region_id'=>783, 'regionable_id'=>361, 'regionable_type'=>'city']); //Bengkalis regencies
        DB::table('regionables')->insert(['region_id'=>783, 'regionable_id'=>362, 'regionable_type'=>'city']); //Kepulauan Meranti regencies
            DB::table('regions')->insert(['id'=>784, 'parent'=>783, 'code'=>'2875', 'type'=>'districts', 'name'=>'Districts 2875, City 287, Province 2']);
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5948, 'regionable_type'=>'districts']); //Bantan
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5955, 'regionable_type'=>'districts']); //Merbau
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5956, 'regionable_type'=>'districts']); //Tasik Putri Puyu
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5957, 'regionable_type'=>'districts']); //Pulaumerbau
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5958, 'regionable_type'=>'districts']); //Tebing Tinggi
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5959, 'regionable_type'=>'districts']); //Tebing Tinggi Barat
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5960, 'regionable_type'=>'districts']); //Tebing Tinggi Timur
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5961, 'regionable_type'=>'districts']); //Rangsang Barat
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5962, 'regionable_type'=>'districts']); //Rangsang Pesisir
            DB::table('regionables')->insert(['region_id'=>784, 'regionable_id'=>5963, 'regionable_type'=>'districts']); //Rangsang
                DB::table('regions')->insert(['id'=>785, 'parent'=>784, 'code'=>'28755', 'type'=>'village', 'name'=>'Village 28755, Districts 2875, City 287, Province 2']);
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68820, 'regionable_type'=>'village']); //Anak Setatah
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68821, 'regionable_type'=>'village']); //Bantar
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68822, 'regionable_type'=>'village']); //Bina Maju
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68823, 'regionable_type'=>'village']); //Bokor
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68824, 'regionable_type'=>'village']); //Lemang
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68825, 'regionable_type'=>'village']); //Mekar Baru
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68826, 'regionable_type'=>'village']); //Melai
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68827, 'regionable_type'=>'village']); //Permai
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68828, 'regionable_type'=>'village']); //Segomeng
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68829, 'regionable_type'=>'village']); //Sialang Pasung
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68830, 'regionable_type'=>'village']); //Sungai Cina
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68831, 'regionable_type'=>'village']); //Telaga Baru
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68832, 'regionable_type'=>'village']); //Beting
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68833, 'regionable_type'=>'village']); //Bungur
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68834, 'regionable_type'=>'village']); //Kayu Ara
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68835, 'regionable_type'=>'village']); //Kedabu Rapat
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68836, 'regionable_type'=>'village']); //Sendaur
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68837, 'regionable_type'=>'village']); //Sokop
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68838, 'regionable_type'=>'village']); //Sonde
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68839, 'regionable_type'=>'village']); //Tanah Merah
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68840, 'regionable_type'=>'village']); //Tanjung Kedabu
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68841, 'regionable_type'=>'village']); //Telesung
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68842, 'regionable_type'=>'village']); //Tenggayun Raya
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68843, 'regionable_type'=>'village']); //Citra Damai
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68844, 'regionable_type'=>'village']); //Dwi Tunggal
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68845, 'regionable_type'=>'village']); //Gemala Sari
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68846, 'regionable_type'=>'village']); //Penyagun
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68847, 'regionable_type'=>'village']); //Repan
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68848, 'regionable_type'=>'village']); //Sungai Gayung Kiri
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68849, 'regionable_type'=>'village']); //Tanjung Bakau
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68850, 'regionable_type'=>'village']); //Tanjung Gemuk
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68851, 'regionable_type'=>'village']); //Tanjung Medang
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68852, 'regionable_type'=>'village']); //Tanjung Samak
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68853, 'regionable_type'=>'village']); //Tebun
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68854, 'regionable_type'=>'village']); //Teluk Samak
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68855, 'regionable_type'=>'village']); //Topang
                DB::table('regionables')->insert(['region_id'=>785, 'regionable_id'=>68856, 'regionable_type'=>'village']); //Wonosari
        DB::table('regions')->insert(['id'=>786, 'parent'=>546, 'code'=>'288', 'type'=>'city', 'name'=>'City 288, Province 2']);
        DB::table('regionables')->insert(['region_id'=>786, 'regionable_id'=>363, 'regionable_type'=>'city']); //Dumai city
            DB::table('regions')->insert(['id'=>787, 'parent'=>786, 'code'=>'2881', 'type'=>'districts', 'name'=>'Districts 2881, City 288, Province 2']);
            DB::table('regionables')->insert(['region_id'=>787, 'regionable_id'=>5964, 'regionable_type'=>'districts']); //Dumai Timur
            DB::table('regionables')->insert(['region_id'=>787, 'regionable_id'=>5965, 'regionable_type'=>'districts']); //Dumai Kota
            DB::table('regionables')->insert(['region_id'=>787, 'regionable_id'=>5966, 'regionable_type'=>'districts']); //Dumai Selatan
                DB::table('regions')->insert(['id'=>788, 'parent'=>787, 'code'=>'28813', 'type'=>'village', 'name'=>'Village 28813, Districts 2881, City 288, Province 2']);
                DB::table('regionables')->insert(['region_id'=>788, 'regionable_id'=>68858, 'regionable_type'=>'village']); //Teluk Binjai
                DB::table('regionables')->insert(['region_id'=>788, 'regionable_id'=>68867, 'regionable_type'=>'village']); //Bumi Ayu
            DB::table('regions')->insert(['id'=>789, 'parent'=>786, 'code'=>'2882', 'type'=>'districts', 'name'=>'Districts 2882, City 288, Province 2']);
            DB::table('regionables')->insert(['region_id'=>789, 'regionable_id'=>5965, 'regionable_type'=>'districts']); //Dumai Kota
            DB::table('regionables')->insert(['region_id'=>789, 'regionable_id'=>5966, 'regionable_type'=>'districts']); //Dumai Selatan
            DB::table('regionables')->insert(['region_id'=>789, 'regionable_id'=>5967, 'regionable_type'=>'districts']); //Dumai Barat
            DB::table('regionables')->insert(['region_id'=>789, 'regionable_id'=>5968, 'regionable_type'=>'districts']); //Medang Kampai
            DB::table('regionables')->insert(['region_id'=>789, 'regionable_id'=>5969, 'regionable_type'=>'districts']); //Sungai Sembilan
                DB::table('regions')->insert(['id'=>790, 'parent'=>789, 'code'=>'28826', 'type'=>'village', 'name'=>'Village 28826, Districts 2882, City 288, Province 2']);
                DB::table('regionables')->insert(['region_id'=>790, 'regionable_id'=>68871, 'regionable_type'=>'village']); //Bukit Timah
                DB::table('regionables')->insert(['region_id'=>790, 'regionable_id'=>68880, 'regionable_type'=>'village']); //Bangsal Aceh
                DB::table('regionables')->insert(['region_id'=>790, 'regionable_id'=>68881, 'regionable_type'=>'village']); //Basilam Baru
                DB::table('regionables')->insert(['region_id'=>790, 'regionable_id'=>68882, 'regionable_type'=>'village']); //Batu Teritip
                DB::table('regionables')->insert(['region_id'=>790, 'regionable_id'=>68883, 'regionable_type'=>'village']); //Lubuk Gaung
                DB::table('regionables')->insert(['region_id'=>790, 'regionable_id'=>68884, 'regionable_type'=>'village']); //Tanjung Penyembal
            DB::table('regions')->insert(['id'=>791, 'parent'=>786, 'code'=>'2888', 'type'=>'districts', 'name'=>'Districts 2888, City 288, Province 2']);
            DB::table('regionables')->insert(['region_id'=>791, 'regionable_id'=>5970, 'regionable_type'=>'districts']); //Bukit Kapur
                DB::table('regions')->insert(['id'=>792, 'parent'=>791, 'code'=>'28882', 'type'=>'village', 'name'=>'Village 28882, Districts 2888, City 288, Province 2']);
                DB::table('regionables')->insert(['region_id'=>792, 'regionable_id'=>68885, 'regionable_type'=>'village']); //Bagan Besar
                DB::table('regionables')->insert(['region_id'=>792, 'regionable_id'=>68886, 'regionable_type'=>'village']); //Bukit Nanas / Nenas
                DB::table('regionables')->insert(['region_id'=>792, 'regionable_id'=>68887, 'regionable_type'=>'village']); //Gurun Panjang
                DB::table('regionables')->insert(['region_id'=>792, 'regionable_id'=>68888, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>792, 'regionable_id'=>68889, 'regionable_type'=>'village']); //Kayu Kapur (bukit Kayu Kapur)
        DB::table('regions')->insert(['id'=>793, 'parent'=>546, 'code'=>'289', 'type'=>'city', 'name'=>'City 289, Province 2']);
        DB::table('regionables')->insert(['region_id'=>793, 'regionable_id'=>364, 'regionable_type'=>'city']); //Rokan Hilir regencies
            DB::table('regions')->insert(['id'=>794, 'parent'=>793, 'code'=>'2891', 'type'=>'districts', 'name'=>'Districts 2891, City 289, Province 2']);
            DB::table('regionables')->insert(['region_id'=>794, 'regionable_id'=>5971, 'regionable_type'=>'districts']); //Bangko
            DB::table('regionables')->insert(['region_id'=>794, 'regionable_id'=>5972, 'regionable_type'=>'districts']); //Batu Hampar
            DB::table('regionables')->insert(['region_id'=>794, 'regionable_id'=>5973, 'regionable_type'=>'districts']); //Sinaboi (senaboi)
            DB::table('regionables')->insert(['region_id'=>794, 'regionable_id'=>5974, 'regionable_type'=>'districts']); //Pekaitan
                DB::table('regions')->insert(['id'=>795, 'parent'=>794, 'code'=>'28912', 'type'=>'village', 'name'=>'Village 28912, Districts 2891, City 289, Province 2']);
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68891, 'regionable_type'=>'village']); //Bagan Barat
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68892, 'regionable_type'=>'village']); //Bagan Hulu
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68893, 'regionable_type'=>'village']); //Bagan Jawa Pesisir
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68894, 'regionable_type'=>'village']); //Bagan Punak
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68895, 'regionable_type'=>'village']); //Bagan Punak Meranti
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68896, 'regionable_type'=>'village']); //Bagan Punak Pesisir
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68897, 'regionable_type'=>'village']); //Bagan Timur
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68898, 'regionable_type'=>'village']); //Labuhan Tangga Baru
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68899, 'regionable_type'=>'village']); //Labuhan Tangga Hilir
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68900, 'regionable_type'=>'village']); //Labuhan Tangga Kecil
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68901, 'regionable_type'=>'village']); //Serusa
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68905, 'regionable_type'=>'village']); //Bantayan/bantaian
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68906, 'regionable_type'=>'village']); //Bantayan/bantaian Baru
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68907, 'regionable_type'=>'village']); //Bantayan/bantaian Hilir
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68908, 'regionable_type'=>'village']); //Sei/sungai Sialang
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68909, 'regionable_type'=>'village']); //Sei/sungai Sialang Hulu
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68910, 'regionable_type'=>'village']); //Darussalam
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68911, 'regionable_type'=>'village']); //Raja Bejamu
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68912, 'regionable_type'=>'village']); //Sei/sungai Bakau
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68913, 'regionable_type'=>'village']); //Senaboi/sinaboi
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68914, 'regionable_type'=>'village']); //Sinaboi Kota
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68915, 'regionable_type'=>'village']); //Sungai Nyamuk
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68916, 'regionable_type'=>'village']); //Karyo Mulyo Sari
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68917, 'regionable_type'=>'village']); //Kubu I
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68918, 'regionable_type'=>'village']); //Pedamaran
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68919, 'regionable_type'=>'village']); //Pekaitan
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68920, 'regionable_type'=>'village']); //Rokan Baru
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68921, 'regionable_type'=>'village']); //Rokan Baru Pesisir
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68922, 'regionable_type'=>'village']); //Sei Besar
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68923, 'regionable_type'=>'village']); //Suak Air Hitam
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68924, 'regionable_type'=>'village']); //Suak Temenggung
                DB::table('regionables')->insert(['region_id'=>795, 'regionable_id'=>68925, 'regionable_type'=>'village']); //Telukbano Ii
            DB::table('regions')->insert(['id'=>796, 'parent'=>793, 'code'=>'2895', 'type'=>'districts', 'name'=>'Districts 2895, City 289, Province 2']);
            DB::table('regionables')->insert(['region_id'=>796, 'regionable_id'=>5975, 'regionable_type'=>'districts']); //Rimba Melintang
                DB::table('regions')->insert(['id'=>797, 'parent'=>796, 'code'=>'28953', 'type'=>'village', 'name'=>'Village 28953, Districts 2895, City 289, Province 2']);
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68926, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68927, 'regionable_type'=>'village']); //Jumrah
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68928, 'regionable_type'=>'village']); //Karya Mukti
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68929, 'regionable_type'=>'village']); //Lenggadai/langgadai Hilir
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68930, 'regionable_type'=>'village']); //Lenggadai/langgadai Hulu
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68931, 'regionable_type'=>'village']); //Mukti Jaya
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68932, 'regionable_type'=>'village']); //Pematang Botam
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68933, 'regionable_type'=>'village']); //Pematang Sikek
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68934, 'regionable_type'=>'village']); //Rimba Melintang
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68935, 'regionable_type'=>'village']); //Seremban Jaya
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68936, 'regionable_type'=>'village']); //Teluk Pulau Hilir
                DB::table('regionables')->insert(['region_id'=>797, 'regionable_id'=>68937, 'regionable_type'=>'village']); //Teluk Pulau Hulu
            DB::table('regions')->insert(['id'=>798, 'parent'=>793, 'code'=>'2898', 'type'=>'districts', 'name'=>'Districts 2898, City 289, Province 2']);
            DB::table('regionables')->insert(['region_id'=>798, 'regionable_id'=>5976, 'regionable_type'=>'districts']); //Pujud
            DB::table('regionables')->insert(['region_id'=>798, 'regionable_id'=>5977, 'regionable_type'=>'districts']); //Rantau Kopar
            DB::table('regionables')->insert(['region_id'=>798, 'regionable_id'=>5978, 'regionable_type'=>'districts']); //Bangko Pusaka (pusako)
            DB::table('regionables')->insert(['region_id'=>798, 'regionable_id'=>5979, 'regionable_type'=>'districts']); //Tanah Putih
            DB::table('regionables')->insert(['region_id'=>798, 'regionable_id'=>5980, 'regionable_type'=>'districts']); //Tanah Putih Tanjung Melawan
                DB::table('regions')->insert(['id'=>799, 'parent'=>798, 'code'=>'28983', 'type'=>'village', 'name'=>'Village 28983, Districts 2898, City 289, Province 2']);
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68938, 'regionable_type'=>'village']); //Air Hitam
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68939, 'regionable_type'=>'village']); //Akar Belingkar
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68940, 'regionable_type'=>'village']); //Babussalam Rokan
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68941, 'regionable_type'=>'village']); //Kasang Bangsawan
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68942, 'regionable_type'=>'village']); //Perkebunan Siarang-arang
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68943, 'regionable_type'=>'village']); //Perkebunan Tanjung Medan
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68944, 'regionable_type'=>'village']); //Pondok Kresek
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68945, 'regionable_type'=>'village']); //Pujud
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68946, 'regionable_type'=>'village']); //Pujud Selatan
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68947, 'regionable_type'=>'village']); //Pujud Utara
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68948, 'regionable_type'=>'village']); //Sei Meranti
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68949, 'regionable_type'=>'village']); //Sei Meranti Darussalam
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68950, 'regionable_type'=>'village']); //Siarang-arang
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68951, 'regionable_type'=>'village']); //Sri Kayangan
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68952, 'regionable_type'=>'village']); //Suka Jadi
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68953, 'regionable_type'=>'village']); //Sungaipinang
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68954, 'regionable_type'=>'village']); //Sungaitapah
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68955, 'regionable_type'=>'village']); //Tangga Batu
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68956, 'regionable_type'=>'village']); //Tanjungmedan
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68957, 'regionable_type'=>'village']); //Tanjungmedan Barat
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68958, 'regionable_type'=>'village']); //Tanjungmedan Utara
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68959, 'regionable_type'=>'village']); //Tanjungsari
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68960, 'regionable_type'=>'village']); //Teluknayang
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68961, 'regionable_type'=>'village']); //Bagan Cempedak
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68962, 'regionable_type'=>'village']); //Rantau Kopar
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68963, 'regionable_type'=>'village']); //Sei/sungai Rangau
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68964, 'regionable_type'=>'village']); //Sekapas
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68965, 'regionable_type'=>'village']); //Bangko Pusaka (pusako)
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68981, 'regionable_type'=>'village']); //Banjar Xii
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68982, 'regionable_type'=>'village']); //Menggala Sakti
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68983, 'regionable_type'=>'village']); //Menggala Sempurna
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68984, 'regionable_type'=>'village']); //Mumugo
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68985, 'regionable_type'=>'village']); //Mumugo Pemekaran
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68986, 'regionable_type'=>'village']); //Putat
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68987, 'regionable_type'=>'village']); //Rantau Bais
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68988, 'regionable_type'=>'village']); //Sedinginan
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68989, 'regionable_type'=>'village']); //Sekeladi
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68990, 'regionable_type'=>'village']); //Sekeladi Hilir
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68991, 'regionable_type'=>'village']); //Sintong
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68992, 'regionable_type'=>'village']); //Sintong Bakti
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68993, 'regionable_type'=>'village']); //Sintong Makmur
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68994, 'regionable_type'=>'village']); //Sintong Pusaka
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68995, 'regionable_type'=>'village']); //Teluk Berembun
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68996, 'regionable_type'=>'village']); //Teluk Mega
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68997, 'regionable_type'=>'village']); //Ujung Tanjung
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68998, 'regionable_type'=>'village']); //Batu Hampar
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>68999, 'regionable_type'=>'village']); //Labuhan Papan
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>69000, 'regionable_type'=>'village']); //Melayu Besar
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>69001, 'regionable_type'=>'village']); //Melayu Besar Kota
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>69002, 'regionable_type'=>'village']); //Melayu Tengah
                DB::table('regionables')->insert(['region_id'=>799, 'regionable_id'=>69003, 'regionable_type'=>'village']); //Mesah
            DB::table('regions')->insert(['id'=>800, 'parent'=>793, 'code'=>'2899', 'type'=>'districts', 'name'=>'Districts 2899, City 289, Province 2']);
            DB::table('regionables')->insert(['region_id'=>800, 'regionable_id'=>5978, 'regionable_type'=>'districts']); //Bangko Pusaka (pusako)
            DB::table('regionables')->insert(['region_id'=>800, 'regionable_id'=>5981, 'regionable_type'=>'districts']); //Kubu Babussalam
            DB::table('regionables')->insert(['region_id'=>800, 'regionable_id'=>5982, 'regionable_type'=>'districts']); //Pasir Limau Kapas
            DB::table('regionables')->insert(['region_id'=>800, 'regionable_id'=>5983, 'regionable_type'=>'districts']); //Kubu
            DB::table('regionables')->insert(['region_id'=>800, 'regionable_id'=>5984, 'regionable_type'=>'districts']); //Bagan Sinembah
            DB::table('regionables')->insert(['region_id'=>800, 'regionable_id'=>5985, 'regionable_type'=>'districts']); //Simpang Kanan
                DB::table('regions')->insert(['id'=>801, 'parent'=>800, 'code'=>'28992', 'type'=>'village', 'name'=>'Village 28992, Districts 2899, City 289, Province 2']);
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68966, 'regionable_type'=>'village']); //Bangko Bakti
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68967, 'regionable_type'=>'village']); //Bangko Balam
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68968, 'regionable_type'=>'village']); //Bangko Jaya
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68969, 'regionable_type'=>'village']); //Bangko Kanan
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68970, 'regionable_type'=>'village']); //Bangko Kiri
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68971, 'regionable_type'=>'village']); //Bangko Lestari
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68972, 'regionable_type'=>'village']); //Bangko Makmur
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68973, 'regionable_type'=>'village']); //Bangko Mas Raya
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68974, 'regionable_type'=>'village']); //Bangko Mukti
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68975, 'regionable_type'=>'village']); //Bangko Permata
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68976, 'regionable_type'=>'village']); //Bangko Sempurna
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68977, 'regionable_type'=>'village']); //Pematang Damar
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68978, 'regionable_type'=>'village']); //Pematang Ibul
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68979, 'regionable_type'=>'village']); //Sungai Menasib (sei Manasib)
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>68980, 'regionable_type'=>'village']); //Teluk Bano I
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69034, 'regionable_type'=>'village']); //Bagan Bakti
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69035, 'regionable_type'=>'village']); //Bagan Batu
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69036, 'regionable_type'=>'village']); //Bagan Batu Kota
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69037, 'regionable_type'=>'village']); //Bagan Manunggal
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69038, 'regionable_type'=>'village']); //Bagan Sapta Permai
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69039, 'regionable_type'=>'village']); //Bagan Sinembah
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69040, 'regionable_type'=>'village']); //Bagan Sinembah Barat
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69041, 'regionable_type'=>'village']); //Bagan Sinembah Kota
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69042, 'regionable_type'=>'village']); //Bagan Sinembah Timur
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69043, 'regionable_type'=>'village']); //Bagan Sinembah Utara
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69044, 'regionable_type'=>'village']); //Bahtera Makmur
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69045, 'regionable_type'=>'village']); //Bahtera Makmur Kota
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69046, 'regionable_type'=>'village']); //Bakti Makmur
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69047, 'regionable_type'=>'village']); //Balai Jaya
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69048, 'regionable_type'=>'village']); //Balai Jaya Kota
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69049, 'regionable_type'=>'village']); //Balam Jaya
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69050, 'regionable_type'=>'village']); //Balam Sempurna
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69051, 'regionable_type'=>'village']); //Balam Sempurna Kota
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69052, 'regionable_type'=>'village']); //Bhayangkara Jaya
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69053, 'regionable_type'=>'village']); //Gelora
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69054, 'regionable_type'=>'village']); //Harapan Makmur
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69055, 'regionable_type'=>'village']); //Harapan Makmur Selatan
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69056, 'regionable_type'=>'village']); //Jaya Agung
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69057, 'regionable_type'=>'village']); //Kencana
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69058, 'regionable_type'=>'village']); //Lubuk Jawi
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69059, 'regionable_type'=>'village']); //Makmur Jaya
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69060, 'regionable_type'=>'village']); //Meranti Makmur
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69061, 'regionable_type'=>'village']); //Panca Mukti
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69062, 'regionable_type'=>'village']); //Pasir Putih
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69063, 'regionable_type'=>'village']); //Pasir Putih Barat
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69064, 'regionable_type'=>'village']); //Pasir Putih Utara
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69065, 'regionable_type'=>'village']); //Pelita
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69066, 'regionable_type'=>'village']); //Salak
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69067, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69068, 'regionable_type'=>'village']); //Bagan Nibung
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69069, 'regionable_type'=>'village']); //Bukit Damar
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69070, 'regionable_type'=>'village']); //Bukit Mas
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69071, 'regionable_type'=>'village']); //Kota Paret/parit
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69072, 'regionable_type'=>'village']); //Simpang Kanan
                DB::table('regionables')->insert(['region_id'=>801, 'regionable_id'=>69073, 'regionable_type'=>'village']); //Tanjung Selamat
        DB::table('regions')->insert(['id'=>802, 'parent'=>546, 'code'=>'292', 'type'=>'city', 'name'=>'City 292, Province 2']);
        DB::table('regionables')->insert(['region_id'=>802, 'regionable_id'=>365, 'regionable_type'=>'city']); //Indragiri Hilir regencies
            DB::table('regions')->insert(['id'=>803, 'parent'=>802, 'code'=>'2921', 'type'=>'districts', 'name'=>'Districts 2921, City 292, Province 2']);
            DB::table('regionables')->insert(['region_id'=>803, 'regionable_id'=>5986, 'regionable_type'=>'districts']); //Tembilahan
            DB::table('regionables')->insert(['region_id'=>803, 'regionable_id'=>5987, 'regionable_type'=>'districts']); //Tembilahan Hulu
                DB::table('regions')->insert(['id'=>804, 'parent'=>803, 'code'=>'29213', 'type'=>'village', 'name'=>'Village 29213, Districts 2921, City 292, Province 2']);
                DB::table('regionables')->insert(['region_id'=>804, 'regionable_id'=>69082, 'regionable_type'=>'village']); //Pekan Kamis
                DB::table('regionables')->insert(['region_id'=>804, 'regionable_id'=>69083, 'regionable_type'=>'village']); //Pulau Palas
                DB::table('regionables')->insert(['region_id'=>804, 'regionable_id'=>69084, 'regionable_type'=>'village']); //Sialang Panjang
                DB::table('regionables')->insert(['region_id'=>804, 'regionable_id'=>69085, 'regionable_type'=>'village']); //Sungai Intan
                DB::table('regionables')->insert(['region_id'=>804, 'regionable_id'=>69086, 'regionable_type'=>'village']); //Tembilahan Barat
                DB::table('regionables')->insert(['region_id'=>804, 'regionable_id'=>69087, 'regionable_type'=>'village']); //Tembilahan Hulu
            DB::table('regions')->insert(['id'=>805, 'parent'=>802, 'code'=>'2925', 'type'=>'districts', 'name'=>'Districts 2925, City 292, Province 2']);
            DB::table('regionables')->insert(['region_id'=>805, 'regionable_id'=>5988, 'regionable_type'=>'districts']); //Batang Tuaka
            DB::table('regionables')->insert(['region_id'=>805, 'regionable_id'=>5989, 'regionable_type'=>'districts']); //Gaung Anak Serka
            DB::table('regionables')->insert(['region_id'=>805, 'regionable_id'=>5990, 'regionable_type'=>'districts']); //Mandah
            DB::table('regionables')->insert(['region_id'=>805, 'regionable_id'=>5991, 'regionable_type'=>'districts']); //Kateman
            DB::table('regionables')->insert(['region_id'=>805, 'regionable_id'=>5992, 'regionable_type'=>'districts']); //Pelangiran
            DB::table('regionables')->insert(['region_id'=>805, 'regionable_id'=>5993, 'regionable_type'=>'districts']); //Teluk Belengkong
            DB::table('regionables')->insert(['region_id'=>805, 'regionable_id'=>5994, 'regionable_type'=>'districts']); //Pulau Burung
                DB::table('regions')->insert(['id'=>806, 'parent'=>805, 'code'=>'29256', 'type'=>'village', 'name'=>'Village 29256, Districts 2925, City 292, Province 2']);
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69170, 'regionable_type'=>'village']); //Bangun Harjo Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69171, 'regionable_type'=>'village']); //Beringin Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69172, 'regionable_type'=>'village']); //Binangun Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69173, 'regionable_type'=>'village']); //Bukit Sari Intan Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69174, 'regionable_type'=>'village']); //Keramat/kramat Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69175, 'regionable_type'=>'village']); //Manunggal Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69176, 'regionable_type'=>'village']); //Mayang Sari Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69177, 'regionable_type'=>'village']); //Pulau Burung
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69178, 'regionable_type'=>'village']); //Sapta Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69179, 'regionable_type'=>'village']); //Sempadan Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69180, 'regionable_type'=>'village']); //Sri Danai
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69181, 'regionable_type'=>'village']); //Suka Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69182, 'regionable_type'=>'village']); //Suko Harjo Jaya
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69183, 'regionable_type'=>'village']); //Sungai Danai
                DB::table('regionables')->insert(['region_id'=>806, 'regionable_id'=>69184, 'regionable_type'=>'village']); //Teluk Nibung
            DB::table('regions')->insert(['id'=>807, 'parent'=>802, 'code'=>'2926', 'type'=>'districts', 'name'=>'Districts 2926, City 292, Province 2']);
            DB::table('regionables')->insert(['region_id'=>807, 'regionable_id'=>5995, 'regionable_type'=>'districts']); //Kempas
            DB::table('regionables')->insert(['region_id'=>807, 'regionable_id'=>5996, 'regionable_type'=>'districts']); //Tempuling
                DB::table('regions')->insert(['id'=>808, 'parent'=>807, 'code'=>'29261', 'type'=>'village', 'name'=>'Village 29261, Districts 2926, City 292, Province 2']);
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69185, 'regionable_type'=>'village']); //Bayas Jaya
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69186, 'regionable_type'=>'village']); //Danau Pulai Indah
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69187, 'regionable_type'=>'village']); //Harapan Tani
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69188, 'regionable_type'=>'village']); //Karya Tani
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69189, 'regionable_type'=>'village']); //Kempas Jaya
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69190, 'regionable_type'=>'village']); //Kerta Jaya
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69191, 'regionable_type'=>'village']); //Kulim Jaya
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69192, 'regionable_type'=>'village']); //Pekan Tua
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69193, 'regionable_type'=>'village']); //Rumbai Jaya
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69194, 'regionable_type'=>'village']); //Sungai Arah
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69195, 'regionable_type'=>'village']); //Sungai Gantang
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69196, 'regionable_type'=>'village']); //Sungai Rabit
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69197, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69198, 'regionable_type'=>'village']); //Karya Tunas Jaya
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69199, 'regionable_type'=>'village']); //Mumpa
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69200, 'regionable_type'=>'village']); //Pangkalan Tujuh
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69201, 'regionable_type'=>'village']); //Sungai Salak
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69202, 'regionable_type'=>'village']); //Tanjung Pidada
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69203, 'regionable_type'=>'village']); //Teluk Jira
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69204, 'regionable_type'=>'village']); //Teluk Kiambang
                DB::table('regionables')->insert(['region_id'=>808, 'regionable_id'=>69205, 'regionable_type'=>'village']); //Tempuling
            DB::table('regions')->insert(['id'=>809, 'parent'=>802, 'code'=>'2927', 'type'=>'districts', 'name'=>'Districts 2927, City 292, Province 2']);
            DB::table('regionables')->insert(['region_id'=>809, 'regionable_id'=>5997, 'regionable_type'=>'districts']); //Tanah Merah
            DB::table('regionables')->insert(['region_id'=>809, 'regionable_id'=>5998, 'regionable_type'=>'districts']); //Enok
            DB::table('regionables')->insert(['region_id'=>809, 'regionable_id'=>5999, 'regionable_type'=>'districts']); //Sungai Batang
            DB::table('regionables')->insert(['region_id'=>809, 'regionable_id'=>6000, 'regionable_type'=>'districts']); //Reteh
            DB::table('regionables')->insert(['region_id'=>809, 'regionable_id'=>6001, 'regionable_type'=>'districts']); //Kemuning
            DB::table('regionables')->insert(['region_id'=>809, 'regionable_id'=>6002, 'regionable_type'=>'districts']); //Keritang
                DB::table('regions')->insert(['id'=>810, 'parent'=>809, 'code'=>'29274', 'type'=>'village', 'name'=>'Village 29274, Districts 2927, City 292, Province 2']);
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69252, 'regionable_type'=>'village']); //Air Balui
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69253, 'regionable_type'=>'village']); //Batu Ampar
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69254, 'regionable_type'=>'village']); //Dusun Tuk Jimun
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69255, 'regionable_type'=>'village']); //Kemuning Muda
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69256, 'regionable_type'=>'village']); //Kemuning Tua
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69257, 'regionable_type'=>'village']); //Keritang
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69258, 'regionable_type'=>'village']); //Limau Manis
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69259, 'regionable_type'=>'village']); //Lubuk Besar
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69260, 'regionable_type'=>'village']); //Sekara
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69261, 'regionable_type'=>'village']); //Sekayan
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69262, 'regionable_type'=>'village']); //Selensen
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69263, 'regionable_type'=>'village']); //Talang Jangkang
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69264, 'regionable_type'=>'village']); //Kayu Raja
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69265, 'regionable_type'=>'village']); //Kembang Mekar Sari
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69266, 'regionable_type'=>'village']); //Kota Baru Reteh
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69267, 'regionable_type'=>'village']); //Kota Baru Seberida
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69268, 'regionable_type'=>'village']); //Kuala Keritang
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69269, 'regionable_type'=>'village']); //Kuala Lemang
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69270, 'regionable_type'=>'village']); //Lintas Utara
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69271, 'regionable_type'=>'village']); //Nusantara Jaya
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69272, 'regionable_type'=>'village']); //Nyiur Permai
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69273, 'regionable_type'=>'village']); //Pancur
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69274, 'regionable_type'=>'village']); //Pasar Kembang
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69275, 'regionable_type'=>'village']); //Pebenaan
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69276, 'regionable_type'=>'village']); //Pengalihan/pengalehan
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69277, 'regionable_type'=>'village']); //Petalongan
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69278, 'regionable_type'=>'village']); //Seberang Pebenaan
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69279, 'regionable_type'=>'village']); //Sencalang
                DB::table('regionables')->insert(['region_id'=>810, 'regionable_id'=>69280, 'regionable_type'=>'village']); //Teluk Kelasa
            DB::table('regions')->insert(['id'=>811, 'parent'=>802, 'code'=>'2928', 'type'=>'districts', 'name'=>'Districts 2928, City 292, Province 2']);
            DB::table('regionables')->insert(['region_id'=>811, 'regionable_id'=>6003, 'regionable_type'=>'districts']); //Concong
            DB::table('regionables')->insert(['region_id'=>811, 'regionable_id'=>6004, 'regionable_type'=>'districts']); //Kuala Indragiri
            DB::table('regionables')->insert(['region_id'=>811, 'regionable_id'=>6005, 'regionable_type'=>'districts']); //Gaung
                DB::table('regions')->insert(['id'=>812, 'parent'=>811, 'code'=>'29282', 'type'=>'village', 'name'=>'Village 29282, Districts 2928, City 292, Province 2']);
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69295, 'regionable_type'=>'village']); //Belantaraya
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69296, 'regionable_type'=>'village']); //Gembira
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69297, 'regionable_type'=>'village']); //Jerambang
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69298, 'regionable_type'=>'village']); //Kuala Lahang
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69299, 'regionable_type'=>'village']); //Lahang Baru
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69300, 'regionable_type'=>'village']); //Lahang Hulu
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69301, 'regionable_type'=>'village']); //Lahang Tengah
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69302, 'regionable_type'=>'village']); //Pintasan
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69303, 'regionable_type'=>'village']); //Pungkat
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69304, 'regionable_type'=>'village']); //Semambu Kuning
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69305, 'regionable_type'=>'village']); //Simpang Gaung
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69306, 'regionable_type'=>'village']); //Soren
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69307, 'regionable_type'=>'village']); //Sungai Baru
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69308, 'regionable_type'=>'village']); //Teluk Kabung
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69309, 'regionable_type'=>'village']); //Telukmerbau
                DB::table('regionables')->insert(['region_id'=>812, 'regionable_id'=>69310, 'regionable_type'=>'village']); //Terusan Kempas
        DB::table('regions')->insert(['id'=>813, 'parent'=>546, 'code'=>'293', 'type'=>'city', 'name'=>'City 293, Province 2']);
        DB::table('regionables')->insert(['region_id'=>813, 'regionable_id'=>366, 'regionable_type'=>'city']); //Indragiri Hulu regencies
            DB::table('regions')->insert(['id'=>814, 'parent'=>813, 'code'=>'2931', 'type'=>'districts', 'name'=>'Districts 2931, City 293, Province 2']);
            DB::table('regionables')->insert(['region_id'=>814, 'regionable_id'=>6006, 'regionable_type'=>'districts']); //Rengat
                DB::table('regions')->insert(['id'=>815, 'parent'=>814, 'code'=>'29311', 'type'=>'village', 'name'=>'Village 29311, Districts 2931, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>815, 'regionable_id'=>69311, 'regionable_type'=>'village']); //Pasar Kota Rengat
                DB::table('regions')->insert(['id'=>816, 'parent'=>814, 'code'=>'29312', 'type'=>'village', 'name'=>'Village 29312, Districts 2931, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>816, 'regionable_id'=>69312, 'regionable_type'=>'village']); //Kampung Besar Kota
                DB::table('regionables')->insert(['region_id'=>816, 'regionable_id'=>69313, 'regionable_type'=>'village']); //Kampung Besar Seberang
                DB::table('regions')->insert(['id'=>817, 'parent'=>814, 'code'=>'29313', 'type'=>'village', 'name'=>'Village 29313, Districts 2931, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>817, 'regionable_id'=>69314, 'regionable_type'=>'village']); //Kampung Dagang
                DB::table('regionables')->insert(['region_id'=>817, 'regionable_id'=>69315, 'regionable_type'=>'village']); //Pulau Gajah
                DB::table('regions')->insert(['id'=>818, 'parent'=>814, 'code'=>'29314', 'type'=>'village', 'name'=>'Village 29314, Districts 2931, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>818, 'regionable_id'=>69316, 'regionable_type'=>'village']); //Kampung Pulau
                DB::table('regionables')->insert(['region_id'=>818, 'regionable_id'=>69317, 'regionable_type'=>'village']); //Kuantan Baru
                DB::table('regions')->insert(['id'=>819, 'parent'=>814, 'code'=>'29316', 'type'=>'village', 'name'=>'Village 29316, Districts 2931, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>819, 'regionable_id'=>69318, 'regionable_type'=>'village']); //Pasir Kemilu
                DB::table('regions')->insert(['id'=>820, 'parent'=>814, 'code'=>'29317', 'type'=>'village', 'name'=>'Village 29317, Districts 2931, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>820, 'regionable_id'=>69319, 'regionable_type'=>'village']); //Sungai Beringin
                DB::table('regions')->insert(['id'=>821, 'parent'=>814, 'code'=>'29318', 'type'=>'village', 'name'=>'Village 29318, Districts 2931, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>821, 'regionable_id'=>69320, 'regionable_type'=>'village']); //Sekip Hilir
                DB::table('regions')->insert(['id'=>822, 'parent'=>814, 'code'=>'29319', 'type'=>'village', 'name'=>'Village 29319, Districts 2931, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>822, 'regionable_id'=>69321, 'regionable_type'=>'village']); //Rantau Mapesai
                DB::table('regionables')->insert(['region_id'=>822, 'regionable_id'=>69322, 'regionable_type'=>'village']); //Rawa Bangun
                DB::table('regionables')->insert(['region_id'=>822, 'regionable_id'=>69323, 'regionable_type'=>'village']); //Sei/sungai Guntung Hilir
                DB::table('regionables')->insert(['region_id'=>822, 'regionable_id'=>69324, 'regionable_type'=>'village']); //Sei/sungai Guntung Tengah
                DB::table('regionables')->insert(['region_id'=>822, 'regionable_id'=>69325, 'regionable_type'=>'village']); //Sekip Hulu
                DB::table('regionables')->insert(['region_id'=>822, 'regionable_id'=>69326, 'regionable_type'=>'village']); //Sungai Raya
            DB::table('regions')->insert(['id'=>823, 'parent'=>813, 'code'=>'2933', 'type'=>'districts', 'name'=>'Districts 2933, City 293, Province 2']);
            DB::table('regionables')->insert(['region_id'=>823, 'regionable_id'=>6007, 'regionable_type'=>'districts']); //Kuala Cenaku
                DB::table('regions')->insert(['id'=>824, 'parent'=>823, 'code'=>'29335', 'type'=>'village', 'name'=>'Village 29335, Districts 2933, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69327, 'regionable_type'=>'village']); //Kuala Cenaku
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69328, 'regionable_type'=>'village']); //Kuala Mulia
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69329, 'regionable_type'=>'village']); //Pulau Gelang
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69330, 'regionable_type'=>'village']); //Pulau Jumat
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69331, 'regionable_type'=>'village']); //Rawa Asri
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69332, 'regionable_type'=>'village']); //Rawa Sekip
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69333, 'regionable_type'=>'village']); //Suka Jadi
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69334, 'regionable_type'=>'village']); //Tambak
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69335, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regionables')->insert(['region_id'=>824, 'regionable_id'=>69336, 'regionable_type'=>'village']); //Teluk Sungkai
            DB::table('regions')->insert(['id'=>825, 'parent'=>813, 'code'=>'2934', 'type'=>'districts', 'name'=>'Districts 2934, City 293, Province 2']);
            DB::table('regionables')->insert(['region_id'=>825, 'regionable_id'=>6008, 'regionable_type'=>'districts']); //Rengat Barat
                DB::table('regions')->insert(['id'=>826, 'parent'=>825, 'code'=>'29344', 'type'=>'village', 'name'=>'Village 29344, Districts 2934, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>826, 'regionable_id'=>69337, 'regionable_type'=>'village']); //Sialang Dua Dahan
                DB::table('regions')->insert(['id'=>827, 'parent'=>825, 'code'=>'29345', 'type'=>'village', 'name'=>'Village 29345, Districts 2934, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>827, 'regionable_id'=>69338, 'regionable_type'=>'village']); //Rantau Bakung
            DB::table('regions')->insert(['id'=>828, 'parent'=>813, 'code'=>'2935', 'type'=>'districts', 'name'=>'Districts 2935, City 293, Province 2']);
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6008, 'regionable_type'=>'districts']); //Rengat Barat
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6009, 'regionable_type'=>'districts']); //Pasir Penyu
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6010, 'regionable_type'=>'districts']); //Lubuk Batu Jaya
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6011, 'regionable_type'=>'districts']); //Rakit Kulim
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6012, 'regionable_type'=>'districts']); //Kelayang
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6013, 'regionable_type'=>'districts']); //Lirik
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6014, 'regionable_type'=>'districts']); //Peranap
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6015, 'regionable_type'=>'districts']); //Batang Peranap
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6016, 'regionable_type'=>'districts']); //Batang Cenaku
            DB::table('regionables')->insert(['region_id'=>828, 'regionable_id'=>6017, 'regionable_type'=>'districts']); //Batang Gansal
                DB::table('regions')->insert(['id'=>829, 'parent'=>828, 'code'=>'29355', 'type'=>'village', 'name'=>'Village 29355, Districts 2935, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69452, 'regionable_type'=>'village']); //Alim
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69453, 'regionable_type'=>'village']); //Anak Talang
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69454, 'regionable_type'=>'village']); //Aur Cina
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69455, 'regionable_type'=>'village']); //Batu Papan
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69456, 'regionable_type'=>'village']); //Bukit Lingkar
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69457, 'regionable_type'=>'village']); //Bukit Lipai
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69458, 'regionable_type'=>'village']); //Cenaku Kecil
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69459, 'regionable_type'=>'village']); //Kepayang Sari
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69460, 'regionable_type'=>'village']); //Kerubung Jaya
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69461, 'regionable_type'=>'village']); //Kuala Gading
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69462, 'regionable_type'=>'village']); //Kuala Kilan
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69463, 'regionable_type'=>'village']); //Lahai Kemuning
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69464, 'regionable_type'=>'village']); //Pataling/petaling Jaya
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69465, 'regionable_type'=>'village']); //Pejangki
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69466, 'regionable_type'=>'village']); //Pematang Manggis
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69467, 'regionable_type'=>'village']); //Punti Anai
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69468, 'regionable_type'=>'village']); //Sanglap
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69469, 'regionable_type'=>'village']); //Sipang
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69470, 'regionable_type'=>'village']); //Talang Bersemi
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69471, 'regionable_type'=>'village']); //Talang Mulia/mulya
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69472, 'regionable_type'=>'village']); //Belimbing
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69473, 'regionable_type'=>'village']); //Danau Rambai
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69474, 'regionable_type'=>'village']); //Penyaguan
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69475, 'regionable_type'=>'village']); //Rantau Langsat
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69476, 'regionable_type'=>'village']); //Ringin
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69477, 'regionable_type'=>'village']); //Seberida
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69478, 'regionable_type'=>'village']); //Siambul
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69479, 'regionable_type'=>'village']); //Sungai Akar
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69480, 'regionable_type'=>'village']); //Talang Lakat
                DB::table('regionables')->insert(['region_id'=>829, 'regionable_id'=>69481, 'regionable_type'=>'village']); //Usul
            DB::table('regions')->insert(['id'=>830, 'parent'=>813, 'code'=>'2936', 'type'=>'districts', 'name'=>'Districts 2936, City 293, Province 2']);
            DB::table('regionables')->insert(['region_id'=>830, 'regionable_id'=>6018, 'regionable_type'=>'districts']); //Sungai Lala
                DB::table('regions')->insert(['id'=>831, 'parent'=>830, 'code'=>'29363', 'type'=>'village', 'name'=>'Village 29363, Districts 2936, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69482, 'regionable_type'=>'village']); //Kelawat
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69483, 'regionable_type'=>'village']); //Kuala Lala
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69484, 'regionable_type'=>'village']); //Morong
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69485, 'regionable_type'=>'village']); //Pasir Batu Mandi
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69486, 'regionable_type'=>'village']); //Pasir Bongkal
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69487, 'regionable_type'=>'village']); //Pasir Kelampaian
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69488, 'regionable_type'=>'village']); //Pasir Selabau
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69489, 'regionable_type'=>'village']); //Perkebunan Sei/sungai Lala
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69490, 'regionable_type'=>'village']); //Perkebunan Sei/sungai Parit
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69491, 'regionable_type'=>'village']); //Sungai Air Putih
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69492, 'regionable_type'=>'village']); //Sungai Lala
                DB::table('regionables')->insert(['region_id'=>831, 'regionable_id'=>69493, 'regionable_type'=>'village']); //Tanjung Danau
            DB::table('regions')->insert(['id'=>832, 'parent'=>813, 'code'=>'2937', 'type'=>'districts', 'name'=>'Districts 2937, City 293, Province 2']);
            DB::table('regionables')->insert(['region_id'=>832, 'regionable_id'=>6019, 'regionable_type'=>'districts']); //Seberida
                DB::table('regions')->insert(['id'=>833, 'parent'=>832, 'code'=>'29371', 'type'=>'village', 'name'=>'Village 29371, Districts 2937, City 293, Province 2']);
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69494, 'regionable_type'=>'village']); //Bandar Padang
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69495, 'regionable_type'=>'village']); //Beligan
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69496, 'regionable_type'=>'village']); //Bukit Meranti
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69497, 'regionable_type'=>'village']); //Buluh Rampai
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69498, 'regionable_type'=>'village']); //Kelesa
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69499, 'regionable_type'=>'village']); //Pangkalan Kasai
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69500, 'regionable_type'=>'village']); //Payarumbai
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69501, 'regionable_type'=>'village']); //Petala Bumi
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69502, 'regionable_type'=>'village']); //Serasam
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69503, 'regionable_type'=>'village']); //Sibabat
                DB::table('regionables')->insert(['region_id'=>833, 'regionable_id'=>69504, 'regionable_type'=>'village']); //Titian Resak
        DB::table('regions')->insert(['id'=>834, 'parent'=>546, 'code'=>'295', 'type'=>'city', 'name'=>'City 295, Province 2']);
        DB::table('regionables')->insert(['region_id'=>834, 'regionable_id'=>367, 'regionable_type'=>'city']); //Kuantan Singingi regencies
            DB::table('regions')->insert(['id'=>835, 'parent'=>834, 'code'=>'2951', 'type'=>'districts', 'name'=>'Districts 2951, City 295, Province 2']);
            DB::table('regionables')->insert(['region_id'=>835, 'regionable_id'=>6020, 'regionable_type'=>'districts']); //Kuantan Tengah
                DB::table('regions')->insert(['id'=>836, 'parent'=>835, 'code'=>'29511', 'type'=>'village', 'name'=>'Village 29511, Districts 2951, City 295, Province 2']);
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69505, 'regionable_type'=>'village']); //Bandar Alai
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69506, 'regionable_type'=>'village']); //Beringin Taluk
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69507, 'regionable_type'=>'village']); //Jake
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69508, 'regionable_type'=>'village']); //Jaya
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69509, 'regionable_type'=>'village']); //Kopah
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69510, 'regionable_type'=>'village']); //Koto Kari
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69511, 'regionable_type'=>'village']); //Koto Tuo
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69512, 'regionable_type'=>'village']); //Munsalo
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69513, 'regionable_type'=>'village']); //Pasar Teluk
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69514, 'regionable_type'=>'village']); //Pintu Gobang
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69515, 'regionable_type'=>'village']); //Pulauaro
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69516, 'regionable_type'=>'village']); //Pulaubanjar Kari
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69517, 'regionable_type'=>'village']); //Pulaubaru
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69518, 'regionable_type'=>'village']); //Pulaugodang Kari
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69519, 'regionable_type'=>'village']); //Sawah
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69520, 'regionable_type'=>'village']); //Seberang Taluk
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69521, 'regionable_type'=>'village']); //Seberang Taluk Hilir
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69522, 'regionable_type'=>'village']); //Simpang Tiga
                DB::table('regionables')->insert(['region_id'=>836, 'regionable_id'=>69523, 'regionable_type'=>'village']); //Sitorajo
                DB::table('regions')->insert(['id'=>837, 'parent'=>835, 'code'=>'29512', 'type'=>'village', 'name'=>'Village 29512, Districts 2951, City 295, Province 2']);
                DB::table('regionables')->insert(['region_id'=>837, 'regionable_id'=>69524, 'regionable_type'=>'village']); //Titian Modang Kopah
                DB::table('regions')->insert(['id'=>838, 'parent'=>835, 'code'=>'29513', 'type'=>'village', 'name'=>'Village 29513, Districts 2951, City 295, Province 2']);
                DB::table('regionables')->insert(['region_id'=>838, 'regionable_id'=>69525, 'regionable_type'=>'village']); //Sungaijering
                DB::table('regions')->insert(['id'=>839, 'parent'=>835, 'code'=>'29514', 'type'=>'village', 'name'=>'Village 29514, Districts 2951, City 295, Province 2']);
                DB::table('regionables')->insert(['region_id'=>839, 'regionable_id'=>69526, 'regionable_type'=>'village']); //Pulaukedundung
                DB::table('regions')->insert(['id'=>840, 'parent'=>835, 'code'=>'29515', 'type'=>'village', 'name'=>'Village 29515, Districts 2951, City 295, Province 2']);
                DB::table('regionables')->insert(['region_id'=>840, 'regionable_id'=>69527, 'regionable_type'=>'village']); //Koto Taluk
            DB::table('regions')->insert(['id'=>841, 'parent'=>834, 'code'=>'2955', 'type'=>'districts', 'name'=>'Districts 2955, City 295, Province 2']);
            DB::table('regionables')->insert(['region_id'=>841, 'regionable_id'=>6021, 'regionable_type'=>'districts']); //Pangean
            DB::table('regionables')->insert(['region_id'=>841, 'regionable_id'=>6022, 'regionable_type'=>'districts']); //Cerenti
            DB::table('regionables')->insert(['region_id'=>841, 'regionable_id'=>6023, 'regionable_type'=>'districts']); //Logas Tanah Darat
                DB::table('regions')->insert(['id'=>842, 'parent'=>841, 'code'=>'29556', 'type'=>'village', 'name'=>'Village 29556, Districts 2955, City 295, Province 2']);
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69558, 'regionable_type'=>'village']); //Bumi Mulya
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69559, 'regionable_type'=>'village']); //Giri Sako
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69560, 'regionable_type'=>'village']); //Hulu Teso
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69561, 'regionable_type'=>'village']); //Kuantan Sako
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69562, 'regionable_type'=>'village']); //Logas
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69563, 'regionable_type'=>'village']); //Lubuk Kebun
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69564, 'regionable_type'=>'village']); //Rambahan
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69565, 'regionable_type'=>'village']); //Sako Margosari
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69566, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69567, 'regionable_type'=>'village']); //Sikijang
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69568, 'regionable_type'=>'village']); //Situgal
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69569, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69570, 'regionable_type'=>'village']); //Sungai Rambai
                DB::table('regionables')->insert(['region_id'=>842, 'regionable_id'=>69571, 'regionable_type'=>'village']); //Teratak Rendah
            DB::table('regions')->insert(['id'=>843, 'parent'=>834, 'code'=>'2956', 'type'=>'districts', 'name'=>'Districts 2956, City 295, Province 2']);
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6023, 'regionable_type'=>'districts']); //Logas Tanah Darat
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6024, 'regionable_type'=>'districts']); //Kuantan Hilir
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6025, 'regionable_type'=>'districts']); //Kuantan Hilir Seberang
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6026, 'regionable_type'=>'districts']); //Singingi
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6027, 'regionable_type'=>'districts']); //Singingi Hilir
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6028, 'regionable_type'=>'districts']); //Kuantan Mudik
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6029, 'regionable_type'=>'districts']); //Pucuk Rantau
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6030, 'regionable_type'=>'districts']); //Inuman
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6031, 'regionable_type'=>'districts']); //Gunung Toar
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6032, 'regionable_type'=>'districts']); //Hulu Kuantan
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6033, 'regionable_type'=>'districts']); //Benai
            DB::table('regionables')->insert(['region_id'=>843, 'regionable_id'=>6034, 'regionable_type'=>'districts']); //Sentajo Raya
                DB::table('regions')->insert(['id'=>844, 'parent'=>843, 'code'=>'29566', 'type'=>'village', 'name'=>'Village 29566, Districts 2956, City 295, Province 2']);
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69702, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69703, 'regionable_type'=>'village']); //Banjar Benai
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69704, 'regionable_type'=>'village']); //Banjar Lopak
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69705, 'regionable_type'=>'village']); //Benai
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69706, 'regionable_type'=>'village']); //Benai Kecil
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69707, 'regionable_type'=>'village']); //Gunungkesiangan
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69708, 'regionable_type'=>'village']); //Koto Benai
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69709, 'regionable_type'=>'village']); //Pulauingu
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69710, 'regionable_type'=>'village']); //Pulaukalimanting
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69711, 'regionable_type'=>'village']); //Pulaulancang
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69712, 'regionable_type'=>'village']); //Pulautongah
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69713, 'regionable_type'=>'village']); //Siberakun
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69714, 'regionable_type'=>'village']); //Simandolak
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69715, 'regionable_type'=>'village']); //Talontom
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69716, 'regionable_type'=>'village']); //Tanjungsimandolak
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69717, 'regionable_type'=>'village']); //Tebing Tinggi
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69718, 'regionable_type'=>'village']); //Ujung Tanjung
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69719, 'regionable_type'=>'village']); //Beringin Jaya
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69720, 'regionable_type'=>'village']); //Geringging Jaya
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69721, 'regionable_type'=>'village']); //Geringing Baru
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69722, 'regionable_type'=>'village']); //Jalur Patah
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69723, 'regionable_type'=>'village']); //Kampung Baru Sentajo
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69724, 'regionable_type'=>'village']); //Koto Sentajo
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69725, 'regionable_type'=>'village']); //Langsat Hulu
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69726, 'regionable_type'=>'village']); //Marsawa
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69727, 'regionable_type'=>'village']); //Muara Langsat
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69728, 'regionable_type'=>'village']); //Muaro Sentajo
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69729, 'regionable_type'=>'village']); //Parit Teratak Air Hitam
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69730, 'regionable_type'=>'village']); //Pulaukomang Sentajo
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69731, 'regionable_type'=>'village']); //Pulaukopung Sentajo
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69732, 'regionable_type'=>'village']); //Seberang Teratak Air Hitam
                DB::table('regionables')->insert(['region_id'=>844, 'regionable_id'=>69733, 'regionable_type'=>'village']); //Teratak Air Hitam

        //Sumatera Barat
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>32, 'regionable_type'=>'province']); //Sumatera Barat
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>435, 'regionable_type'=>'city']); //Padang city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>436, 'regionable_type'=>'city']); //Kepulauan Mentawai regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>437, 'regionable_type'=>'city']); //Pariaman city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>438, 'regionable_type'=>'city']); //Padang Pariaman regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>439, 'regionable_type'=>'city']); //Pesisir Selatan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>440, 'regionable_type'=>'city']); //Bukittinggi city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>441, 'regionable_type'=>'city']); //Agam regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>442, 'regionable_type'=>'city']); //Payakumbuh city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>443, 'regionable_type'=>'city']); //Lima Puluh Koto/kota regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>444, 'regionable_type'=>'city']); //Pasaman regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>445, 'regionable_type'=>'city']); //Pasaman Barat regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>446, 'regionable_type'=>'city']); //Padang Panjang city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>447, 'regionable_type'=>'city']); //Tanah Datar regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>448, 'regionable_type'=>'city']); //Solok city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>449, 'regionable_type'=>'city']); //Solok regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>450, 'regionable_type'=>'city']); //Sawah Lunto city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>451, 'regionable_type'=>'city']); //Sijunjung (sawah Lunto Sijunjung) regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>452, 'regionable_type'=>'city']); //Dharmasraya regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>453, 'regionable_type'=>'city']); //Solok Selatan regencies

        DB::table('regions')->insert(['id'=>845, 'parent'=>546, 'code'=>'251', 'type'=>'city', 'name'=>'City 251, Province 2']);
        DB::table('regionables')->insert(['region_id'=>845, 'regionable_id'=>435, 'regionable_type'=>'city']); //Padang city
            DB::table('regions')->insert(['id'=>846, 'parent'=>845, 'code'=>'2511', 'type'=>'districts', 'name'=>'Districts 2511, City 251, Province 2']);
            DB::table('regionables')->insert(['region_id'=>846, 'regionable_id'=>6953, 'regionable_type'=>'districts']); //Padang Barat
                DB::table('regions')->insert(['id'=>847, 'parent'=>846, 'code'=>'25111', 'type'=>'village', 'name'=>'Village 25111, Districts 2511, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>847, 'regionable_id'=>79230, 'regionable_type'=>'village']); //Rimbo Kaluang
                DB::table('regions')->insert(['id'=>848, 'parent'=>846, 'code'=>'25112', 'type'=>'village', 'name'=>'Village 25112, Districts 2511, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>848, 'regionable_id'=>79231, 'regionable_type'=>'village']); //Kampung Jao
                DB::table('regionables')->insert(['region_id'=>848, 'regionable_id'=>79232, 'regionable_type'=>'village']); //Padang Pasir
                DB::table('regions')->insert(['id'=>849, 'parent'=>846, 'code'=>'25114', 'type'=>'village', 'name'=>'Village 25114, Districts 2511, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>849, 'regionable_id'=>79233, 'regionable_type'=>'village']); //Flamboyan (plamboyan Baru)
                DB::table('regionables')->insert(['region_id'=>849, 'regionable_id'=>79234, 'regionable_type'=>'village']); //Ujung Gurun
                DB::table('regions')->insert(['id'=>850, 'parent'=>846, 'code'=>'25115', 'type'=>'village', 'name'=>'Village 25115, Districts 2511, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>850, 'regionable_id'=>79235, 'regionable_type'=>'village']); //Purus
                DB::table('regions')->insert(['id'=>851, 'parent'=>846, 'code'=>'25117', 'type'=>'village', 'name'=>'Village 25117, Districts 2511, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>851, 'regionable_id'=>79236, 'regionable_type'=>'village']); //Olo
                DB::table('regions')->insert(['id'=>852, 'parent'=>846, 'code'=>'25118', 'type'=>'village', 'name'=>'Village 25118, Districts 2511, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>852, 'regionable_id'=>79237, 'regionable_type'=>'village']); //Belakang Tangsi
                DB::table('regionables')->insert(['region_id'=>852, 'regionable_id'=>79238, 'regionable_type'=>'village']); //Berok Nipah
                DB::table('regions')->insert(['id'=>853, 'parent'=>846, 'code'=>'25119', 'type'=>'village', 'name'=>'Village 25119, Districts 2511, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>853, 'regionable_id'=>79239, 'regionable_type'=>'village']); //Kampung Pondok
            DB::table('regions')->insert(['id'=>854, 'parent'=>845, 'code'=>'2512', 'type'=>'districts', 'name'=>'Districts 2512, City 251, Province 2']);
            DB::table('regionables')->insert(['region_id'=>854, 'regionable_id'=>6954, 'regionable_type'=>'districts']); //Padang Timur
                DB::table('regions')->insert(['id'=>855, 'parent'=>854, 'code'=>'25121', 'type'=>'village', 'name'=>'Village 25121, Districts 2512, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>855, 'regionable_id'=>79240, 'regionable_type'=>'village']); //Sawahan
                DB::table('regionables')->insert(['region_id'=>855, 'regionable_id'=>79241, 'regionable_type'=>'village']); //Sawahan Timur
                DB::table('regions')->insert(['id'=>856, 'parent'=>854, 'code'=>'25122', 'type'=>'village', 'name'=>'Village 25122, Districts 2512, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>856, 'regionable_id'=>79242, 'regionable_type'=>'village']); //Ganting Parak Gadang
                DB::table('regions')->insert(['id'=>857, 'parent'=>854, 'code'=>'25123', 'type'=>'village', 'name'=>'Village 25123, Districts 2512, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>857, 'regionable_id'=>79243, 'regionable_type'=>'village']); //Parak Gadang Timur
                DB::table('regionables')->insert(['region_id'=>857, 'regionable_id'=>79244, 'regionable_type'=>'village']); //Simpang Haru
                DB::table('regions')->insert(['id'=>858, 'parent'=>854, 'code'=>'25125', 'type'=>'village', 'name'=>'Village 25125, Districts 2512, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>858, 'regionable_id'=>79245, 'regionable_type'=>'village']); //Kubu Marapalam
                DB::table('regions')->insert(['id'=>859, 'parent'=>854, 'code'=>'25126', 'type'=>'village', 'name'=>'Village 25126, Districts 2512, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>859, 'regionable_id'=>79246, 'regionable_type'=>'village']); //Andalas
                DB::table('regionables')->insert(['region_id'=>859, 'regionable_id'=>79247, 'regionable_type'=>'village']); //Kubu Parak Karakah (dalam)
                DB::table('regions')->insert(['id'=>860, 'parent'=>854, 'code'=>'25129', 'type'=>'village', 'name'=>'Village 25129, Districts 2512, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>860, 'regionable_id'=>79248, 'regionable_type'=>'village']); //Jati
                DB::table('regionables')->insert(['region_id'=>860, 'regionable_id'=>79249, 'regionable_type'=>'village']); //Jati Baru
            DB::table('regions')->insert(['id'=>861, 'parent'=>845, 'code'=>'2513', 'type'=>'districts', 'name'=>'Districts 2513, City 251, Province 2']);
            DB::table('regionables')->insert(['region_id'=>861, 'regionable_id'=>6955, 'regionable_type'=>'districts']); //Padang Utara
                DB::table('regions')->insert(['id'=>862, 'parent'=>861, 'code'=>'25132', 'type'=>'village', 'name'=>'Village 25132, Districts 2513, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>862, 'regionable_id'=>79250, 'regionable_type'=>'village']); //Air Tawar Barat
                DB::table('regionables')->insert(['region_id'=>862, 'regionable_id'=>79251, 'regionable_type'=>'village']); //Air Tawar Timur
                DB::table('regions')->insert(['id'=>863, 'parent'=>861, 'code'=>'25133', 'type'=>'village', 'name'=>'Village 25133, Districts 2513, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>863, 'regionable_id'=>79252, 'regionable_type'=>'village']); //Ulak Karang Utara
                DB::table('regions')->insert(['id'=>864, 'parent'=>861, 'code'=>'25134', 'type'=>'village', 'name'=>'Village 25134, Districts 2513, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>864, 'regionable_id'=>79253, 'regionable_type'=>'village']); //Ulak Karang Selatan
                DB::table('regions')->insert(['id'=>865, 'parent'=>861, 'code'=>'25136', 'type'=>'village', 'name'=>'Village 25136, Districts 2513, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>865, 'regionable_id'=>79254, 'regionable_type'=>'village']); //Lolong Belanti
                DB::table('regions')->insert(['id'=>866, 'parent'=>861, 'code'=>'25137', 'type'=>'village', 'name'=>'Village 25137, Districts 2513, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>866, 'regionable_id'=>79255, 'regionable_type'=>'village']); //Gunung Pangilun
                DB::table('regions')->insert(['id'=>867, 'parent'=>861, 'code'=>'25139', 'type'=>'village', 'name'=>'Village 25139, Districts 2513, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>867, 'regionable_id'=>79256, 'regionable_type'=>'village']); //Alai Parak Kopi
            DB::table('regions')->insert(['id'=>868, 'parent'=>845, 'code'=>'2514', 'type'=>'districts', 'name'=>'Districts 2514, City 251, Province 2']);
            DB::table('regionables')->insert(['region_id'=>868, 'regionable_id'=>6956, 'regionable_type'=>'districts']); //Nanggalo
                DB::table('regions')->insert(['id'=>869, 'parent'=>868, 'code'=>'25142', 'type'=>'village', 'name'=>'Village 25142, Districts 2514, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>869, 'regionable_id'=>79257, 'regionable_type'=>'village']); //Kampung Lapai
                DB::table('regions')->insert(['id'=>870, 'parent'=>868, 'code'=>'25143', 'type'=>'village', 'name'=>'Village 25143, Districts 2514, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>870, 'regionable_id'=>79258, 'regionable_type'=>'village']); //Kampung Olo
                DB::table('regions')->insert(['id'=>871, 'parent'=>868, 'code'=>'25144', 'type'=>'village', 'name'=>'Village 25144, Districts 2514, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>871, 'regionable_id'=>79259, 'regionable_type'=>'village']); //Tabing Banda Gadang
                DB::table('regions')->insert(['id'=>872, 'parent'=>868, 'code'=>'25145', 'type'=>'village', 'name'=>'Village 25145, Districts 2514, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>872, 'regionable_id'=>79260, 'regionable_type'=>'village']); //Gurun Lawas/laweh
                DB::table('regions')->insert(['id'=>873, 'parent'=>868, 'code'=>'25146', 'type'=>'village', 'name'=>'Village 25146, Districts 2514, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>873, 'regionable_id'=>79261, 'regionable_type'=>'village']); //Surau Gadang
                DB::table('regions')->insert(['id'=>874, 'parent'=>868, 'code'=>'25147', 'type'=>'village', 'name'=>'Village 25147, Districts 2514, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>874, 'regionable_id'=>79262, 'regionable_type'=>'village']); //Kurao Pagang
            DB::table('regions')->insert(['id'=>875, 'parent'=>845, 'code'=>'2515', 'type'=>'districts', 'name'=>'Districts 2515, City 251, Province 2']);
            DB::table('regionables')->insert(['region_id'=>875, 'regionable_id'=>6957, 'regionable_type'=>'districts']); //Kuranji
                DB::table('regions')->insert(['id'=>876, 'parent'=>875, 'code'=>'25151', 'type'=>'village', 'name'=>'Village 25151, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>876, 'regionable_id'=>79263, 'regionable_type'=>'village']); //Anduring
                DB::table('regions')->insert(['id'=>877, 'parent'=>875, 'code'=>'25152', 'type'=>'village', 'name'=>'Village 25152, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>877, 'regionable_id'=>79264, 'regionable_type'=>'village']); //Pasar Ambacang
                DB::table('regions')->insert(['id'=>878, 'parent'=>875, 'code'=>'25153', 'type'=>'village', 'name'=>'Village 25153, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>878, 'regionable_id'=>79265, 'regionable_type'=>'village']); //Lubuk Lintah
                DB::table('regions')->insert(['id'=>879, 'parent'=>875, 'code'=>'25154', 'type'=>'village', 'name'=>'Village 25154, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>879, 'regionable_id'=>79266, 'regionable_type'=>'village']); //Ampang
                DB::table('regions')->insert(['id'=>880, 'parent'=>875, 'code'=>'25155', 'type'=>'village', 'name'=>'Village 25155, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>880, 'regionable_id'=>79267, 'regionable_type'=>'village']); //Kalumbuk
                DB::table('regions')->insert(['id'=>881, 'parent'=>875, 'code'=>'25156', 'type'=>'village', 'name'=>'Village 25156, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>881, 'regionable_id'=>79268, 'regionable_type'=>'village']); //Korong Gadang
                DB::table('regions')->insert(['id'=>882, 'parent'=>875, 'code'=>'25157', 'type'=>'village', 'name'=>'Village 25157, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>882, 'regionable_id'=>79269, 'regionable_type'=>'village']); //Kuranji
                DB::table('regions')->insert(['id'=>883, 'parent'=>875, 'code'=>'25158', 'type'=>'village', 'name'=>'Village 25158, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>883, 'regionable_id'=>79270, 'regionable_type'=>'village']); //Gunung Sarik
                DB::table('regions')->insert(['id'=>884, 'parent'=>875, 'code'=>'25159', 'type'=>'village', 'name'=>'Village 25159, Districts 2515, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>884, 'regionable_id'=>79271, 'regionable_type'=>'village']); //Sei/sungai Sapih
            DB::table('regions')->insert(['id'=>885, 'parent'=>845, 'code'=>'2516', 'type'=>'districts', 'name'=>'Districts 2516, City 251, Province 2']);
            DB::table('regionables')->insert(['region_id'=>885, 'regionable_id'=>6958, 'regionable_type'=>'districts']); //Pauh
                DB::table('regions')->insert(['id'=>886, 'parent'=>885, 'code'=>'25161', 'type'=>'village', 'name'=>'Village 25161, Districts 2516, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>886, 'regionable_id'=>79272, 'regionable_type'=>'village']); //Binuang Kampung Dalam
                DB::table('regionables')->insert(['region_id'=>886, 'regionable_id'=>79273, 'regionable_type'=>'village']); //Pisang
                DB::table('regions')->insert(['id'=>887, 'parent'=>885, 'code'=>'25162', 'type'=>'village', 'name'=>'Village 25162, Districts 2516, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>887, 'regionable_id'=>79274, 'regionable_type'=>'village']); //Cupak Tangah
                DB::table('regionables')->insert(['region_id'=>887, 'regionable_id'=>79275, 'regionable_type'=>'village']); //Piai Tangah
                DB::table('regions')->insert(['id'=>888, 'parent'=>885, 'code'=>'25163', 'type'=>'village', 'name'=>'Village 25163, Districts 2516, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>888, 'regionable_id'=>79276, 'regionable_type'=>'village']); //Kepala/kapalo Koto
                DB::table('regionables')->insert(['region_id'=>888, 'regionable_id'=>79277, 'regionable_type'=>'village']); //Limau Manis Selatan
                DB::table('regions')->insert(['id'=>889, 'parent'=>885, 'code'=>'25164', 'type'=>'village', 'name'=>'Village 25164, Districts 2516, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>889, 'regionable_id'=>79278, 'regionable_type'=>'village']); //Koto Luar
                DB::table('regions')->insert(['id'=>890, 'parent'=>885, 'code'=>'25166', 'type'=>'village', 'name'=>'Village 25166, Districts 2516, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>890, 'regionable_id'=>79279, 'regionable_type'=>'village']); //Limau Manis
                DB::table('regions')->insert(['id'=>891, 'parent'=>885, 'code'=>'25168', 'type'=>'village', 'name'=>'Village 25168, Districts 2516, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>891, 'regionable_id'=>79280, 'regionable_type'=>'village']); //Lambung Bukit/bukik
            DB::table('regions')->insert(['id'=>892, 'parent'=>845, 'code'=>'2517', 'type'=>'districts', 'name'=>'Districts 2517, City 251, Province 2']);
            DB::table('regionables')->insert(['region_id'=>892, 'regionable_id'=>6959, 'regionable_type'=>'districts']); //Koto Tangah
                DB::table('regions')->insert(['id'=>893, 'parent'=>892, 'code'=>'25171', 'type'=>'village', 'name'=>'Village 25171, Districts 2517, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>893, 'regionable_id'=>79281, 'regionable_type'=>'village']); //Balai Gadang
                DB::table('regionables')->insert(['region_id'=>893, 'regionable_id'=>79282, 'regionable_type'=>'village']); //Batipuh Panjang
                DB::table('regionables')->insert(['region_id'=>893, 'regionable_id'=>79283, 'regionable_type'=>'village']); //Bungo Pasang
                DB::table('regionables')->insert(['region_id'=>893, 'regionable_id'=>79284, 'regionable_type'=>'village']); //Koto Pulai
                DB::table('regionables')->insert(['region_id'=>893, 'regionable_id'=>79285, 'regionable_type'=>'village']); //Parupuk Tabing
                DB::table('regionables')->insert(['region_id'=>893, 'regionable_id'=>79286, 'regionable_type'=>'village']); //Pasir/pasie Nan Tigo
                DB::table('regions')->insert(['id'=>894, 'parent'=>892, 'code'=>'25172', 'type'=>'village', 'name'=>'Village 25172, Districts 2517, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>894, 'regionable_id'=>79287, 'regionable_type'=>'village']); //Batang Kabung (k Ganting)
                DB::table('regions')->insert(['id'=>895, 'parent'=>892, 'code'=>'25173', 'type'=>'village', 'name'=>'Village 25173, Districts 2517, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>895, 'regionable_id'=>79288, 'regionable_type'=>'village']); //Lubuk Buaya
                DB::table('regionables')->insert(['region_id'=>895, 'regionable_id'=>79289, 'regionable_type'=>'village']); //Padang Sarai
                DB::table('regions')->insert(['id'=>896, 'parent'=>892, 'code'=>'25175', 'type'=>'village', 'name'=>'Village 25175, Districts 2517, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>896, 'regionable_id'=>79290, 'regionable_type'=>'village']); //Koto Panjang Ikua Koto
                DB::table('regionables')->insert(['region_id'=>896, 'regionable_id'=>79291, 'regionable_type'=>'village']); //Lubuk Minturun
                DB::table('regions')->insert(['id'=>897, 'parent'=>892, 'code'=>'25176', 'type'=>'village', 'name'=>'Village 25176, Districts 2517, City 251, Province 2']);
                DB::table('regionables')->insert(['region_id'=>897, 'regionable_id'=>79292, 'regionable_type'=>'village']); //Air Pacah
                DB::table('regionables')->insert(['region_id'=>897, 'regionable_id'=>79293, 'regionable_type'=>'village']); //Dadok Tunggul Hitam
        DB::table('regions')->insert(['id'=>898, 'parent'=>546, 'code'=>'252', 'type'=>'city', 'name'=>'City 252, Province 2']);
        DB::table('regionables')->insert(['region_id'=>898, 'regionable_id'=>435, 'regionable_type'=>'city']); //Padang city
            DB::table('regions')->insert(['id'=>899, 'parent'=>898, 'code'=>'2521', 'type'=>'districts', 'name'=>'Districts 2521, City 252, Province 2']);
            DB::table('regionables')->insert(['region_id'=>899, 'regionable_id'=>6960, 'regionable_type'=>'districts']); //Padang Selatan
                DB::table('regions')->insert(['id'=>900, 'parent'=>899, 'code'=>'25211', 'type'=>'village', 'name'=>'Village 25211, Districts 2521, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>900, 'regionable_id'=>79294, 'regionable_type'=>'village']); //Alang Laweh
                DB::table('regionables')->insert(['region_id'=>900, 'regionable_id'=>79295, 'regionable_type'=>'village']); //Belakang Pondok
                DB::table('regions')->insert(['id'=>901, 'parent'=>899, 'code'=>'25212', 'type'=>'village', 'name'=>'Village 25212, Districts 2521, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>901, 'regionable_id'=>79296, 'regionable_type'=>'village']); //Ranah Parak Rumbio
                DB::table('regions')->insert(['id'=>902, 'parent'=>899, 'code'=>'25213', 'type'=>'village', 'name'=>'Village 25213, Districts 2521, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>902, 'regionable_id'=>79297, 'regionable_type'=>'village']); //Pasar Gadang
                DB::table('regions')->insert(['id'=>903, 'parent'=>899, 'code'=>'25214', 'type'=>'village', 'name'=>'Village 25214, Districts 2521, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>903, 'regionable_id'=>79298, 'regionable_type'=>'village']); //Seberang Padang
                DB::table('regions')->insert(['id'=>904, 'parent'=>899, 'code'=>'25215', 'type'=>'village', 'name'=>'Village 25215, Districts 2521, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>904, 'regionable_id'=>79299, 'regionable_type'=>'village']); //Batang Arau
                DB::table('regionables')->insert(['region_id'=>904, 'regionable_id'=>79300, 'regionable_type'=>'village']); //Bukik/bukit Gado-gado
                DB::table('regionables')->insert(['region_id'=>904, 'regionable_id'=>79301, 'regionable_type'=>'village']); //Seberang Palinggam
                DB::table('regions')->insert(['id'=>905, 'parent'=>899, 'code'=>'25216', 'type'=>'village', 'name'=>'Village 25216, Districts 2521, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>905, 'regionable_id'=>79302, 'regionable_type'=>'village']); //Mato/mata Air
                DB::table('regionables')->insert(['region_id'=>905, 'regionable_id'=>79303, 'regionable_type'=>'village']); //Rawang
                DB::table('regions')->insert(['id'=>906, 'parent'=>899, 'code'=>'25217', 'type'=>'village', 'name'=>'Village 25217, Districts 2521, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>906, 'regionable_id'=>79304, 'regionable_type'=>'village']); //Air Manis (aia Manih)
                DB::table('regionables')->insert(['region_id'=>906, 'regionable_id'=>79305, 'regionable_type'=>'village']); //Teluk Bayur/taluak Bayua
            DB::table('regions')->insert(['id'=>907, 'parent'=>898, 'code'=>'2522', 'type'=>'districts', 'name'=>'Districts 2522, City 252, Province 2']);
            DB::table('regionables')->insert(['region_id'=>907, 'regionable_id'=>6961, 'regionable_type'=>'districts']); //Lubuk Begalung
                DB::table('regions')->insert(['id'=>908, 'parent'=>907, 'code'=>'25221', 'type'=>'village', 'name'=>'Village 25221, Districts 2522, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>908, 'regionable_id'=>79306, 'regionable_type'=>'village']); //Gurun Laweh/lawas
                DB::table('regionables')->insert(['region_id'=>908, 'regionable_id'=>79307, 'regionable_type'=>'village']); //Lubuk Begalung
                DB::table('regions')->insert(['id'=>909, 'parent'=>907, 'code'=>'25222', 'type'=>'village', 'name'=>'Village 25222, Districts 2522, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>909, 'regionable_id'=>79308, 'regionable_type'=>'village']); //Banuaran
                DB::table('regionables')->insert(['region_id'=>909, 'regionable_id'=>79309, 'regionable_type'=>'village']); //Tanjung Aur/tanjuang Aua
                DB::table('regions')->insert(['id'=>910, 'parent'=>907, 'code'=>'25223', 'type'=>'village', 'name'=>'Village 25223, Districts 2522, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>910, 'regionable_id'=>79310, 'regionable_type'=>'village']); //Batang Taba Nan Xx
                DB::table('regionables')->insert(['region_id'=>910, 'regionable_id'=>79311, 'regionable_type'=>'village']); //Parak Laweh Pulau Air Nan Xx
                DB::table('regions')->insert(['id'=>911, 'parent'=>907, 'code'=>'25224', 'type'=>'village', 'name'=>'Village 25224, Districts 2522, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>911, 'regionable_id'=>79312, 'regionable_type'=>'village']); //Pitameh Tanjung Saba Nan Xx
                DB::table('regionables')->insert(['region_id'=>911, 'regionable_id'=>79313, 'regionable_type'=>'village']); //Tanah Sirah Piai Nan Xx
                DB::table('regions')->insert(['id'=>912, 'parent'=>907, 'code'=>'25225', 'type'=>'village', 'name'=>'Village 25225, Districts 2522, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>912, 'regionable_id'=>79314, 'regionable_type'=>'village']); //Cengkeh/cangkeh Nan Xx
                DB::table('regionables')->insert(['region_id'=>912, 'regionable_id'=>79315, 'regionable_type'=>'village']); //Kampung Baru Nan Xx
                DB::table('regionables')->insert(['region_id'=>912, 'regionable_id'=>79316, 'regionable_type'=>'village']); //Kampung Jua Nan Xx
                DB::table('regions')->insert(['id'=>913, 'parent'=>907, 'code'=>'25226', 'type'=>'village', 'name'=>'Village 25226, Districts 2522, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>913, 'regionable_id'=>79317, 'regionable_type'=>'village']); //Pagambiran Ampulu (pangambiran Ampalu) Nan Xx
                DB::table('regions')->insert(['id'=>914, 'parent'=>907, 'code'=>'25227', 'type'=>'village', 'name'=>'Village 25227, Districts 2522, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>914, 'regionable_id'=>79318, 'regionable_type'=>'village']); //Gates Nan Xx
                DB::table('regionables')->insert(['region_id'=>914, 'regionable_id'=>79319, 'regionable_type'=>'village']); //Koto Baru
                DB::table('regionables')->insert(['region_id'=>914, 'regionable_id'=>79320, 'regionable_type'=>'village']); //Pampangan Nan Xx
            DB::table('regions')->insert(['id'=>915, 'parent'=>898, 'code'=>'2523', 'type'=>'districts', 'name'=>'Districts 2523, City 252, Province 2']);
            DB::table('regionables')->insert(['region_id'=>915, 'regionable_id'=>6962, 'regionable_type'=>'districts']); //Lubuk Kilangan
            DB::table('regionables')->insert(['region_id'=>915, 'regionable_id'=>6963, 'regionable_type'=>'districts']); //Bungus Teluk Kabung
                DB::table('regions')->insert(['id'=>916, 'parent'=>915, 'code'=>'25237', 'type'=>'village', 'name'=>'Village 25237, Districts 2523, City 252, Province 2']);
                DB::table('regionables')->insert(['region_id'=>916, 'regionable_id'=>79327, 'regionable_type'=>'village']); //Indarung
                DB::table('regionables')->insert(['region_id'=>916, 'regionable_id'=>79328, 'regionable_type'=>'village']); //Bungus Barat
                DB::table('regionables')->insert(['region_id'=>916, 'regionable_id'=>79329, 'regionable_type'=>'village']); //Bungus Selatan
                DB::table('regionables')->insert(['region_id'=>916, 'regionable_id'=>79330, 'regionable_type'=>'village']); //Bungus Timur
                DB::table('regionables')->insert(['region_id'=>916, 'regionable_id'=>79331, 'regionable_type'=>'village']); //Teluk Kabung Selatan
                DB::table('regionables')->insert(['region_id'=>916, 'regionable_id'=>79332, 'regionable_type'=>'village']); //Teluk Kabung Tengah
                DB::table('regionables')->insert(['region_id'=>916, 'regionable_id'=>79333, 'regionable_type'=>'village']); //Teluk Kabung Utara
        DB::table('regions')->insert(['id'=>917, 'parent'=>546, 'code'=>'253', 'type'=>'city', 'name'=>'City 253, Province 2']);
        DB::table('regionables')->insert(['region_id'=>917, 'regionable_id'=>436, 'regionable_type'=>'city']); //Kepulauan Mentawai regencies
            DB::table('regions')->insert(['id'=>918, 'parent'=>917, 'code'=>'2539', 'type'=>'districts', 'name'=>'Districts 2539, City 253, Province 2']);
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6964, 'regionable_type'=>'districts']); //Pagai Utara
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6965, 'regionable_type'=>'districts']); //Pagai Selatan
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6966, 'regionable_type'=>'districts']); //Sikakap
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6967, 'regionable_type'=>'districts']); //Sipora Selatan
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6968, 'regionable_type'=>'districts']); //Sipora Utara
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6969, 'regionable_type'=>'districts']); //Siberut Barat Daya
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6970, 'regionable_type'=>'districts']); //Siberut Selatan
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6971, 'regionable_type'=>'districts']); //Siberut Tengah
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6972, 'regionable_type'=>'districts']); //Siberut Utara
            DB::table('regionables')->insert(['region_id'=>918, 'regionable_id'=>6973, 'regionable_type'=>'districts']); //Siberut Barat
                DB::table('regions')->insert(['id'=>919, 'parent'=>918, 'code'=>'25394', 'type'=>'village', 'name'=>'Village 25394, Districts 2539, City 253, Province 2']);
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79367, 'regionable_type'=>'village']); //Cimpungan
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79368, 'regionable_type'=>'village']); //Bojakan
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79369, 'regionable_type'=>'village']); //Malancang
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79370, 'regionable_type'=>'village']); //Mongan Poula/paula
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79371, 'regionable_type'=>'village']); //Muara/muaro Sikabaluan
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79372, 'regionable_type'=>'village']); //Sirilogui
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79373, 'regionable_type'=>'village']); //Sotboyak
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79374, 'regionable_type'=>'village']); //Sigapokna
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79375, 'regionable_type'=>'village']); //Simalegi/simaligi
                DB::table('regionables')->insert(['region_id'=>919, 'regionable_id'=>79376, 'regionable_type'=>'village']); //Simatalu Sipokak
        DB::table('regions')->insert(['id'=>920, 'parent'=>546, 'code'=>'255', 'type'=>'city', 'name'=>'City 255, Province 2']);
        DB::table('regionables')->insert(['region_id'=>920, 'regionable_id'=>437, 'regionable_type'=>'city']); //Pariaman city
        DB::table('regionables')->insert(['region_id'=>920, 'regionable_id'=>438, 'regionable_type'=>'city']); //Padang Pariaman regencies
            DB::table('regions')->insert(['id'=>921, 'parent'=>920, 'code'=>'2555', 'type'=>'districts', 'name'=>'Districts 2555, City 255, Province 2']);
            DB::table('regionables')->insert(['region_id'=>921, 'regionable_id'=>6978, 'regionable_type'=>'districts']); //V Koto Kampung Dalam
                DB::table('regions')->insert(['id'=>922, 'parent'=>921, 'code'=>'25552', 'type'=>'village', 'name'=>'Village 25552, Districts 2555, City 255, Province 2']);
                DB::table('regionables')->insert(['region_id'=>922, 'regionable_id'=>79448, 'regionable_type'=>'village']); //Campago
                DB::table('regionables')->insert(['region_id'=>922, 'regionable_id'=>79449, 'regionable_type'=>'village']); //Sikucur
            DB::table('regions')->insert(['id'=>923, 'parent'=>920, 'code'=>'2556', 'type'=>'districts', 'name'=>'Districts 2556, City 255, Province 2']);
            DB::table('regionables')->insert(['region_id'=>923, 'regionable_id'=>6979, 'regionable_type'=>'districts']); //Sungai Limau
            DB::table('regionables')->insert(['region_id'=>923, 'regionable_id'=>6980, 'regionable_type'=>'districts']); //Sungai Geringging/garingging
            DB::table('regionables')->insert(['region_id'=>923, 'regionable_id'=>6981, 'regionable_type'=>'districts']); //Batang Gasan
            DB::table('regionables')->insert(['region_id'=>923, 'regionable_id'=>6982, 'regionable_type'=>'districts']); //Iv Koto Aur Malintang
                DB::table('regions')->insert(['id'=>924, 'parent'=>923, 'code'=>'25564', 'type'=>'village', 'name'=>'Village 25564, Districts 2556, City 255, Province 2']);
                DB::table('regionables')->insert(['region_id'=>924, 'regionable_id'=>79460, 'regionable_type'=>'village']); //Balai Baiak Malai Iii Koto
                DB::table('regionables')->insert(['region_id'=>924, 'regionable_id'=>79461, 'regionable_type'=>'village']); //Iii Koto Aur Malintang
                DB::table('regionables')->insert(['region_id'=>924, 'regionable_id'=>79462, 'regionable_type'=>'village']); //Iii Koto Aur Malintang Selatan
                DB::table('regionables')->insert(['region_id'=>924, 'regionable_id'=>79463, 'regionable_type'=>'village']); //Iii Koto Aur Malintang Timur
                DB::table('regionables')->insert(['region_id'=>924, 'regionable_id'=>79464, 'regionable_type'=>'village']); //Iii Koto Aur Malintang Utara
            DB::table('regions')->insert(['id'=>925, 'parent'=>920, 'code'=>'2557', 'type'=>'districts', 'name'=>'Districts 2557, City 255, Province 2']);
            DB::table('regionables')->insert(['region_id'=>925, 'regionable_id'=>6983, 'regionable_type'=>'districts']); //Nan Sabaris
            DB::table('regionables')->insert(['region_id'=>925, 'regionable_id'=>6984, 'regionable_type'=>'districts']); //Ulakan Tapakih/tapakis
            DB::table('regionables')->insert(['region_id'=>925, 'regionable_id'=>6985, 'regionable_type'=>'districts']); //Vii Koto Sungai Sarik
            DB::table('regionables')->insert(['region_id'=>925, 'regionable_id'=>6986, 'regionable_type'=>'districts']); //Padang Sago
            DB::table('regionables')->insert(['region_id'=>925, 'regionable_id'=>6987, 'regionable_type'=>'districts']); //V Koto Timur
            DB::table('regionables')->insert(['region_id'=>925, 'regionable_id'=>6988, 'regionable_type'=>'districts']); //Patamuan
                DB::table('regions')->insert(['id'=>926, 'parent'=>925, 'code'=>'25573', 'type'=>'village', 'name'=>'Village 25573, Districts 2557, City 255, Province 2']);
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79472, 'regionable_type'=>'village']); //Balah Aia
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79473, 'regionable_type'=>'village']); //Lareh Nan Panjang
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79474, 'regionable_type'=>'village']); //Lurah Ampalu
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79475, 'regionable_type'=>'village']); //Sungai Sariak
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79476, 'regionable_type'=>'village']); //Batu Kalang
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79477, 'regionable_type'=>'village']); //Koto Baru
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79478, 'regionable_type'=>'village']); //Koto Dalam
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79479, 'regionable_type'=>'village']); //Gunung Padang Alai
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79480, 'regionable_type'=>'village']); //Kudu Ganting/gantiang
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79481, 'regionable_type'=>'village']); //Limau Puruik
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79482, 'regionable_type'=>'village']); //Sungai Durian
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79483, 'regionable_type'=>'village']); //Tandikat/tandikek
                DB::table('regionables')->insert(['region_id'=>926, 'regionable_id'=>79484, 'regionable_type'=>'village']); //Tandikek Utara
            DB::table('regions')->insert(['id'=>927, 'parent'=>920, 'code'=>'2558', 'type'=>'districts', 'name'=>'Districts 2558, City 255, Province 2']);
            DB::table('regionables')->insert(['region_id'=>927, 'regionable_id'=>6989, 'regionable_type'=>'districts']); //Lubuk Alung
            DB::table('regionables')->insert(['region_id'=>927, 'regionable_id'=>6990, 'regionable_type'=>'districts']); //Sintuk/sintuak Toboh Gadang
            DB::table('regionables')->insert(['region_id'=>927, 'regionable_id'=>6991, 'regionable_type'=>'districts']); //2 X 11 Kayu Tanam
            DB::table('regionables')->insert(['region_id'=>927, 'regionable_id'=>6992, 'regionable_type'=>'districts']); //Enam Lingkung
            DB::table('regionables')->insert(['region_id'=>927, 'regionable_id'=>6993, 'regionable_type'=>'districts']); //2 X 11 Enam Lingkung
            DB::table('regionables')->insert(['region_id'=>927, 'regionable_id'=>6994, 'regionable_type'=>'districts']); //Batang Anai
                DB::table('regions')->insert(['id'=>928, 'parent'=>927, 'code'=>'25586', 'type'=>'village', 'name'=>'Village 25586, Districts 2558, City 255, Province 2']);
                DB::table('regionables')->insert(['region_id'=>928, 'regionable_id'=>79504, 'regionable_type'=>'village']); //Buayan Lubuk Alung
                DB::table('regionables')->insert(['region_id'=>928, 'regionable_id'=>79505, 'regionable_type'=>'village']); //Kasang
                DB::table('regionables')->insert(['region_id'=>928, 'regionable_id'=>79506, 'regionable_type'=>'village']); //Katapiang
                DB::table('regionables')->insert(['region_id'=>928, 'regionable_id'=>79507, 'regionable_type'=>'village']); //Sungai Buluh
        DB::table('regions')->insert(['id'=>929, 'parent'=>546, 'code'=>'256', 'type'=>'city', 'name'=>'City 256, Province 2']);
        DB::table('regionables')->insert(['region_id'=>929, 'regionable_id'=>439, 'regionable_type'=>'city']); //Pesisir Selatan regencies
            DB::table('regions')->insert(['id'=>930, 'parent'=>929, 'code'=>'2565', 'type'=>'districts', 'name'=>'Districts 2565, City 256, Province 2']);
            DB::table('regionables')->insert(['region_id'=>930, 'regionable_id'=>6995, 'regionable_type'=>'districts']); //Iv Jurai
            DB::table('regionables')->insert(['region_id'=>930, 'regionable_id'=>6996, 'regionable_type'=>'districts']); //Bayang
            DB::table('regionables')->insert(['region_id'=>930, 'regionable_id'=>6997, 'regionable_type'=>'districts']); //Iv Nagari Bayang Utara
            DB::table('regionables')->insert(['region_id'=>930, 'regionable_id'=>6998, 'regionable_type'=>'districts']); //Koto Xi Tarusan
                DB::table('regions')->insert(['id'=>931, 'parent'=>930, 'code'=>'25654', 'type'=>'village', 'name'=>'Village 25654, Districts 2565, City 256, Province 2']);
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79551, 'regionable_type'=>'village']); //Ampang Pulai
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79552, 'regionable_type'=>'village']); //Barung Barung Balantai
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79553, 'regionable_type'=>'village']); //Barung Barung Balantai Selatan
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79554, 'regionable_type'=>'village']); //Barung-barung Balantai Tengah
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79555, 'regionable_type'=>'village']); //Barung-barung Balantai Timur
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79556, 'regionable_type'=>'village']); //Batu Hampa
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79557, 'regionable_type'=>'village']); //Batuhampar Selatan
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79558, 'regionable_type'=>'village']); //Cerocok Anau Ampang Pulai
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79559, 'regionable_type'=>'village']); //Duku
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79560, 'regionable_type'=>'village']); //Duku Utara
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79561, 'regionable_type'=>'village']); //Jinang Kampung Pansur Ampang Pulai
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79562, 'regionable_type'=>'village']); //Kampungbaru Korong Nan Ampek
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79563, 'regionable_type'=>'village']); //Kapuh
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79564, 'regionable_type'=>'village']); //Kapuh Utara
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79565, 'regionable_type'=>'village']); //Mandeh
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79566, 'regionable_type'=>'village']); //Nanggalo
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79567, 'regionable_type'=>'village']); //Pulaukaram Ampang Pulai
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79568, 'regionable_type'=>'village']); //Setara Nanggalo
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79569, 'regionable_type'=>'village']); //Siguntur
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79570, 'regionable_type'=>'village']); //Siguntur Tua
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79571, 'regionable_type'=>'village']); //Sungai Pinang
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79572, 'regionable_type'=>'village']); //Sungainyalo Mudiak Aia
                DB::table('regionables')->insert(['region_id'=>931, 'regionable_id'=>79573, 'regionable_type'=>'village']); //Taratak Sei Lundang
            DB::table('regions')->insert(['id'=>932, 'parent'=>929, 'code'=>'2566', 'type'=>'districts', 'name'=>'Districts 2566, City 256, Province 2']);
            DB::table('regionables')->insert(['region_id'=>932, 'regionable_id'=>6999, 'regionable_type'=>'districts']); //Batang Kapas
            DB::table('regionables')->insert(['region_id'=>932, 'regionable_id'=>7000, 'regionable_type'=>'districts']); //Sutera
            DB::table('regionables')->insert(['region_id'=>932, 'regionable_id'=>7001, 'regionable_type'=>'districts']); //Lengayang
            DB::table('regionables')->insert(['region_id'=>932, 'regionable_id'=>7002, 'regionable_type'=>'districts']); //Ranah Pesisir
            DB::table('regionables')->insert(['region_id'=>932, 'regionable_id'=>7003, 'regionable_type'=>'districts']); //Linggo Sari Baganti
                DB::table('regions')->insert(['id'=>933, 'parent'=>932, 'code'=>'25668', 'type'=>'village', 'name'=>'Village 25668, Districts 2566, City 256, Province 2']);
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79614, 'regionable_type'=>'village']); //Air Haji
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79615, 'regionable_type'=>'village']); //Air Haji Barat
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79616, 'regionable_type'=>'village']); //Air Haji Tengah
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79617, 'regionable_type'=>'village']); //Air Haji Tenggara
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79618, 'regionable_type'=>'village']); //Lagan Hilir Punggasan
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79619, 'regionable_type'=>'village']); //Lagan Mudik Punggasan
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79620, 'regionable_type'=>'village']); //Muaragadang Air Haji
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79621, 'regionable_type'=>'village']); //Muarakandis Punggasan
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79622, 'regionable_type'=>'village']); //Padang Xi Punggasan
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79623, 'regionable_type'=>'village']); //Pasar Bukit Air Haji
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79624, 'regionable_type'=>'village']); //Pasar Lama Muara Air Haji
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79625, 'regionable_type'=>'village']); //Punggasan
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79626, 'regionable_type'=>'village']); //Punggasan Timur
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79627, 'regionable_type'=>'village']); //Punggasan Utara
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79628, 'regionable_type'=>'village']); //Rantau Simalenang Air Haji
                DB::table('regionables')->insert(['region_id'=>933, 'regionable_id'=>79629, 'regionable_type'=>'village']); //Sungaisirah Air Haji
            DB::table('regions')->insert(['id'=>934, 'parent'=>929, 'code'=>'2567', 'type'=>'districts', 'name'=>'Districts 2567, City 256, Province 2']);
            DB::table('regionables')->insert(['region_id'=>934, 'regionable_id'=>7004, 'regionable_type'=>'districts']); //Basa Ampek Balai Tapan
            DB::table('regionables')->insert(['region_id'=>934, 'regionable_id'=>7005, 'regionable_type'=>'districts']); //Ranah Ampek Hulu Tapan
            DB::table('regionables')->insert(['region_id'=>934, 'regionable_id'=>7006, 'regionable_type'=>'districts']); //Airpura
            DB::table('regionables')->insert(['region_id'=>934, 'regionable_id'=>7007, 'regionable_type'=>'districts']); //Pancung Soal
            DB::table('regionables')->insert(['region_id'=>934, 'regionable_id'=>7008, 'regionable_type'=>'districts']); //Silaut
            DB::table('regionables')->insert(['region_id'=>934, 'regionable_id'=>7009, 'regionable_type'=>'districts']); //Lunang
                DB::table('regions')->insert(['id'=>935, 'parent'=>934, 'code'=>'25674', 'type'=>'village', 'name'=>'Village 25674, Districts 2567, City 256, Province 2']);
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79670, 'regionable_type'=>'village']); //Air Hitam
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79671, 'regionable_type'=>'village']); //Durian Seribu
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79672, 'regionable_type'=>'village']); //Lubuk Bunta
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79673, 'regionable_type'=>'village']); //Pasir Binjai
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79674, 'regionable_type'=>'village']); //Sambungo
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79675, 'regionable_type'=>'village']); //Silaut
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79676, 'regionable_type'=>'village']); //Sungaipulai
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79677, 'regionable_type'=>'village']); //Sungaisarik
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79678, 'regionable_type'=>'village']); //Sungaisirah
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79679, 'regionable_type'=>'village']); //Talang Binjai
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79680, 'regionable_type'=>'village']); //Lunang
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79681, 'regionable_type'=>'village']); //Lunang Barat
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79682, 'regionable_type'=>'village']); //Lunang Dua
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79683, 'regionable_type'=>'village']); //Lunang Satu
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79684, 'regionable_type'=>'village']); //Lunang Selatan
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79685, 'regionable_type'=>'village']); //Lunang Tengah
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79686, 'regionable_type'=>'village']); //Lunang Tiga
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79687, 'regionable_type'=>'village']); //Lunang Utara
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79688, 'regionable_type'=>'village']); //Pondok Parian Lunang
                DB::table('regionables')->insert(['region_id'=>935, 'regionable_id'=>79689, 'regionable_type'=>'village']); //Sindang Lunang
        DB::table('regions')->insert(['id'=>936, 'parent'=>546, 'code'=>'261', 'type'=>'city', 'name'=>'City 261, Province 2']);
        DB::table('regionables')->insert(['region_id'=>936, 'regionable_id'=>440, 'regionable_type'=>'city']); //Bukittinggi city
        DB::table('regionables')->insert(['region_id'=>936, 'regionable_id'=>441, 'regionable_type'=>'city']); //Agam regencies
            DB::table('regions')->insert(['id'=>937, 'parent'=>936, 'code'=>'2615', 'type'=>'districts', 'name'=>'Districts 2615, City 261, Province 2']);
            DB::table('regionables')->insert(['region_id'=>937, 'regionable_id'=>7013, 'regionable_type'=>'districts']); //Palupuh
            DB::table('regionables')->insert(['region_id'=>937, 'regionable_id'=>7014, 'regionable_type'=>'districts']); //Tilatang Kamang
            DB::table('regionables')->insert(['region_id'=>937, 'regionable_id'=>7015, 'regionable_type'=>'districts']); //Kamang Magek
                DB::table('regions')->insert(['id'=>938, 'parent'=>937, 'code'=>'26152', 'type'=>'village', 'name'=>'Village 26152, Districts 2615, City 261, Province 2']);
                DB::table('regionables')->insert(['region_id'=>938, 'regionable_id'=>79718, 'regionable_type'=>'village']); //Gaduk
                DB::table('regionables')->insert(['region_id'=>938, 'regionable_id'=>79719, 'regionable_type'=>'village']); //Kapau
                DB::table('regionables')->insert(['region_id'=>938, 'regionable_id'=>79720, 'regionable_type'=>'village']); //Koto Tangah
                DB::table('regionables')->insert(['region_id'=>938, 'regionable_id'=>79721, 'regionable_type'=>'village']); //Kamang Hilia
                DB::table('regionables')->insert(['region_id'=>938, 'regionable_id'=>79722, 'regionable_type'=>'village']); //Kamang Mudiak
                DB::table('regionables')->insert(['region_id'=>938, 'regionable_id'=>79723, 'regionable_type'=>'village']); //Magek
            DB::table('regions')->insert(['id'=>939, 'parent'=>936, 'code'=>'2616', 'type'=>'districts', 'name'=>'Districts 2616, City 261, Province 2']);
            DB::table('regionables')->insert(['region_id'=>939, 'regionable_id'=>7016, 'regionable_type'=>'districts']); //Iv Koto (ampek Koto)
            DB::table('regionables')->insert(['region_id'=>939, 'regionable_id'=>7017, 'regionable_type'=>'districts']); //Ampek Nagari (iv Nagari )
            DB::table('regionables')->insert(['region_id'=>939, 'regionable_id'=>7018, 'regionable_type'=>'districts']); //Malakak
            DB::table('regionables')->insert(['region_id'=>939, 'regionable_id'=>7019, 'regionable_type'=>'districts']); //Matur
            DB::table('regionables')->insert(['region_id'=>939, 'regionable_id'=>7020, 'regionable_type'=>'districts']); //Palembayan
                DB::table('regions')->insert(['id'=>940, 'parent'=>939, 'code'=>'26164', 'type'=>'village', 'name'=>'Village 26164, Districts 2616, City 261, Province 2']);
                DB::table('regionables')->insert(['region_id'=>940, 'regionable_id'=>79745, 'regionable_type'=>'village']); //Ampek Koto Palembayan
                DB::table('regionables')->insert(['region_id'=>940, 'regionable_id'=>79746, 'regionable_type'=>'village']); //Baringin
                DB::table('regionables')->insert(['region_id'=>940, 'regionable_id'=>79747, 'regionable_type'=>'village']); //Salareh Aia
                DB::table('regionables')->insert(['region_id'=>940, 'regionable_id'=>79748, 'regionable_type'=>'village']); //Sipinang
                DB::table('regionables')->insert(['region_id'=>940, 'regionable_id'=>79749, 'regionable_type'=>'village']); //Sungai Puar
                DB::table('regionables')->insert(['region_id'=>940, 'regionable_id'=>79750, 'regionable_type'=>'village']); //Tigo Koto Silungkang
            DB::table('regions')->insert(['id'=>941, 'parent'=>936, 'code'=>'2618', 'type'=>'districts', 'name'=>'Districts 2618, City 261, Province 2']);
            DB::table('regionables')->insert(['region_id'=>941, 'regionable_id'=>7021, 'regionable_type'=>'districts']); //Sungai Pua (puar)
            DB::table('regionables')->insert(['region_id'=>941, 'regionable_id'=>7022, 'regionable_type'=>'districts']); //Banuhampu
                DB::table('regions')->insert(['id'=>942, 'parent'=>941, 'code'=>'26181', 'type'=>'village', 'name'=>'Village 26181, Districts 2618, City 261, Province 2']);
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79751, 'regionable_type'=>'village']); //Batagak
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79752, 'regionable_type'=>'village']); //Batu Palano
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79753, 'regionable_type'=>'village']); //Padang Laweh
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79754, 'regionable_type'=>'village']); //Sariak
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79755, 'regionable_type'=>'village']); //Sungai Pua
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79756, 'regionable_type'=>'village']); //Cingkariang
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79757, 'regionable_type'=>'village']); //Kubang Putiah
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79758, 'regionable_type'=>'village']); //Ladang Laweh
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79759, 'regionable_type'=>'village']); //Padang Lua
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79760, 'regionable_type'=>'village']); //Pakan Sinayan
                DB::table('regionables')->insert(['region_id'=>942, 'regionable_id'=>79761, 'regionable_type'=>'village']); //Taluak Ampek Suku
            DB::table('regions')->insert(['id'=>943, 'parent'=>936, 'code'=>'2619', 'type'=>'districts', 'name'=>'Districts 2619, City 261, Province 2']);
            DB::table('regionables')->insert(['region_id'=>943, 'regionable_id'=>7023, 'regionable_type'=>'districts']); //Iv Angkat Candung (ampek Angkek)
            DB::table('regionables')->insert(['region_id'=>943, 'regionable_id'=>7024, 'regionable_type'=>'districts']); //Candung
            DB::table('regionables')->insert(['region_id'=>943, 'regionable_id'=>7025, 'regionable_type'=>'districts']); //Baso
                DB::table('regions')->insert(['id'=>944, 'parent'=>943, 'code'=>'26192', 'type'=>'village', 'name'=>'Village 26192, Districts 2619, City 261, Province 2']);
                DB::table('regionables')->insert(['region_id'=>944, 'regionable_id'=>79772, 'regionable_type'=>'village']); //Bungo Koto Tuo
                DB::table('regionables')->insert(['region_id'=>944, 'regionable_id'=>79773, 'regionable_type'=>'village']); //Koto Baru Iii Jorong
                DB::table('regionables')->insert(['region_id'=>944, 'regionable_id'=>79774, 'regionable_type'=>'village']); //Koto Tinggi
                DB::table('regionables')->insert(['region_id'=>944, 'regionable_id'=>79775, 'regionable_type'=>'village']); //Padang Tarok
                DB::table('regionables')->insert(['region_id'=>944, 'regionable_id'=>79776, 'regionable_type'=>'village']); //Salo
                DB::table('regionables')->insert(['region_id'=>944, 'regionable_id'=>79777, 'regionable_type'=>'village']); //Simarasok
                DB::table('regionables')->insert(['region_id'=>944, 'regionable_id'=>79778, 'regionable_type'=>'village']); //Tabek Panjang
        DB::table('regions')->insert(['id'=>945, 'parent'=>546, 'code'=>'262', 'type'=>'city', 'name'=>'City 262, Province 2']);
        DB::table('regionables')->insert(['region_id'=>945, 'regionable_id'=>442, 'regionable_type'=>'city']); //Payakumbuh city
        DB::table('regionables')->insert(['region_id'=>945, 'regionable_id'=>443, 'regionable_type'=>'city']); //Lima Puluh Koto/kota regencies
            DB::table('regions')->insert(['id'=>946, 'parent'=>945, 'code'=>'2625', 'type'=>'districts', 'name'=>'Districts 2625, City 262, Province 2']);
            DB::table('regionables')->insert(['region_id'=>946, 'regionable_id'=>7034, 'regionable_type'=>'districts']); //Payakumbuh
            DB::table('regionables')->insert(['region_id'=>946, 'regionable_id'=>7035, 'regionable_type'=>'districts']); //Akabiluru
            DB::table('regionables')->insert(['region_id'=>946, 'regionable_id'=>7036, 'regionable_type'=>'districts']); //Situjuah Limo/lima Nagari
            DB::table('regionables')->insert(['region_id'=>946, 'regionable_id'=>7037, 'regionable_type'=>'districts']); //Guguak (gugu)
            DB::table('regionables')->insert(['region_id'=>946, 'regionable_id'=>7038, 'regionable_type'=>'districts']); //Mungka
            DB::table('regionables')->insert(['region_id'=>946, 'regionable_id'=>7039, 'regionable_type'=>'districts']); //Suliki
            DB::table('regionables')->insert(['region_id'=>946, 'regionable_id'=>7040, 'regionable_type'=>'districts']); //Gunuang Omeh (gunung Mas)
            DB::table('regionables')->insert(['region_id'=>946, 'regionable_id'=>7041, 'regionable_type'=>'districts']); //Bukik Barisan
                DB::table('regions')->insert(['id'=>947, 'parent'=>946, 'code'=>'26257', 'type'=>'village', 'name'=>'Village 26257, Districts 2625, City 262, Province 2']);
                DB::table('regionables')->insert(['region_id'=>947, 'regionable_id'=>79910, 'regionable_type'=>'village']); //Banja Laweh
                DB::table('regionables')->insert(['region_id'=>947, 'regionable_id'=>79911, 'regionable_type'=>'village']); //Baruah Gunuang
                DB::table('regionables')->insert(['region_id'=>947, 'regionable_id'=>79912, 'regionable_type'=>'village']); //Koto Tangah
                DB::table('regionables')->insert(['region_id'=>947, 'regionable_id'=>79913, 'regionable_type'=>'village']); //Maek
                DB::table('regionables')->insert(['region_id'=>947, 'regionable_id'=>79914, 'regionable_type'=>'village']); //Sungai Naniang
            DB::table('regions')->insert(['id'=>948, 'parent'=>945, 'code'=>'2626', 'type'=>'districts', 'name'=>'Districts 2626, City 262, Province 2']);
            DB::table('regionables')->insert(['region_id'=>948, 'regionable_id'=>7042, 'regionable_type'=>'districts']); //Luak (luhak)
            DB::table('regionables')->insert(['region_id'=>948, 'regionable_id'=>7043, 'regionable_type'=>'districts']); //Lareh Sago Halaban
                DB::table('regions')->insert(['id'=>949, 'parent'=>948, 'code'=>'26262', 'type'=>'village', 'name'=>'Village 26262, Districts 2626, City 262, Province 2']);
                DB::table('regionables')->insert(['region_id'=>949, 'regionable_id'=>79919, 'regionable_type'=>'village']); //Ampalu
                DB::table('regionables')->insert(['region_id'=>949, 'regionable_id'=>79920, 'regionable_type'=>'village']); //Balai Panjang
                DB::table('regionables')->insert(['region_id'=>949, 'regionable_id'=>79921, 'regionable_type'=>'village']); //Batu Payung
                DB::table('regionables')->insert(['region_id'=>949, 'regionable_id'=>79922, 'regionable_type'=>'village']); //Bukik Sikumpa
                DB::table('regionables')->insert(['region_id'=>949, 'regionable_id'=>79923, 'regionable_type'=>'village']); //Halaban
                DB::table('regionables')->insert(['region_id'=>949, 'regionable_id'=>79924, 'regionable_type'=>'village']); //Labuah Gunuang
                DB::table('regionables')->insert(['region_id'=>949, 'regionable_id'=>79925, 'regionable_type'=>'village']); //Sitanang
                DB::table('regionables')->insert(['region_id'=>949, 'regionable_id'=>79926, 'regionable_type'=>'village']); //Tanjung/tanjuang Gadang
            DB::table('regions')->insert(['id'=>950, 'parent'=>945, 'code'=>'2627', 'type'=>'districts', 'name'=>'Districts 2627, City 262, Province 2']);
            DB::table('regionables')->insert(['region_id'=>950, 'regionable_id'=>7044, 'regionable_type'=>'districts']); //Harau
            DB::table('regionables')->insert(['region_id'=>950, 'regionable_id'=>7045, 'regionable_type'=>'districts']); //Pangkalan Koto Baru
            DB::table('regionables')->insert(['region_id'=>950, 'regionable_id'=>7046, 'regionable_type'=>'districts']); //Kapur Ix/sembilan
                DB::table('regions')->insert(['id'=>951, 'parent'=>950, 'code'=>'26273', 'type'=>'village', 'name'=>'Village 26273, Districts 2627, City 262, Province 2']);
                DB::table('regionables')->insert(['region_id'=>951, 'regionable_id'=>79944, 'regionable_type'=>'village']); //Durian Tinggi
                DB::table('regionables')->insert(['region_id'=>951, 'regionable_id'=>79945, 'regionable_type'=>'village']); //Galugua/gelugur
                DB::table('regionables')->insert(['region_id'=>951, 'regionable_id'=>79946, 'regionable_type'=>'village']); //Koto Bangun
                DB::table('regionables')->insert(['region_id'=>951, 'regionable_id'=>79947, 'regionable_type'=>'village']); //Koto Lamo
                DB::table('regionables')->insert(['region_id'=>951, 'regionable_id'=>79948, 'regionable_type'=>'village']); //Lubuk/lubuak Alai
                DB::table('regionables')->insert(['region_id'=>951, 'regionable_id'=>79949, 'regionable_type'=>'village']); //Muaro Paiti
                DB::table('regionables')->insert(['region_id'=>951, 'regionable_id'=>79950, 'regionable_type'=>'village']); //Sialang
        DB::table('regions')->insert(['id'=>952, 'parent'=>546, 'code'=>'263', 'type'=>'city', 'name'=>'City 263, Province 2']);
        DB::table('regionables')->insert(['region_id'=>952, 'regionable_id'=>444, 'regionable_type'=>'city']); //Pasaman regencies
        DB::table('regionables')->insert(['region_id'=>952, 'regionable_id'=>445, 'regionable_type'=>'city']); //Pasaman Barat regencies
            DB::table('regions')->insert(['id'=>953, 'parent'=>952, 'code'=>'2636', 'type'=>'districts', 'name'=>'Districts 2636, City 263, Province 2']);
            DB::table('regionables')->insert(['region_id'=>953, 'regionable_id'=>7059, 'regionable_type'=>'districts']); //Ranah Batahan
            DB::table('regionables')->insert(['region_id'=>953, 'regionable_id'=>7060, 'regionable_type'=>'districts']); //Sasak Ranah Pasisir/pesisie
                DB::table('regions')->insert(['id'=>954, 'parent'=>953, 'code'=>'26366', 'type'=>'village', 'name'=>'Village 26366, Districts 2636, City 263, Province 2']);
                DB::table('regionables')->insert(['region_id'=>954, 'regionable_id'=>79983, 'regionable_type'=>'village']); //Batahan
                DB::table('regionables')->insert(['region_id'=>954, 'regionable_id'=>79984, 'regionable_type'=>'village']); //Desa Baru
                DB::table('regionables')->insert(['region_id'=>954, 'regionable_id'=>79985, 'regionable_type'=>'village']); //Sasak
        DB::table('regions')->insert(['id'=>955, 'parent'=>546, 'code'=>'264', 'type'=>'city', 'name'=>'City 264, Province 2']);
        DB::table('regionables')->insert(['region_id'=>955, 'regionable_id'=>441, 'regionable_type'=>'city']); //Agam regencies
            DB::table('regions')->insert(['id'=>956, 'parent'=>955, 'code'=>'2645', 'type'=>'districts', 'name'=>'Districts 2645, City 264, Province 2']);
            DB::table('regionables')->insert(['region_id'=>956, 'regionable_id'=>7026, 'regionable_type'=>'districts']); //Lubuk Basung
                DB::table('regions')->insert(['id'=>957, 'parent'=>956, 'code'=>'26451', 'type'=>'village', 'name'=>'Village 26451, Districts 2645, City 264, Province 2']);
                DB::table('regionables')->insert(['region_id'=>957, 'regionable_id'=>79779, 'regionable_type'=>'village']); //Geragahan
                DB::table('regionables')->insert(['region_id'=>957, 'regionable_id'=>79780, 'regionable_type'=>'village']); //Kampung Pinang
                DB::table('regionables')->insert(['region_id'=>957, 'regionable_id'=>79781, 'regionable_type'=>'village']); //Kampung Tangah
                DB::table('regionables')->insert(['region_id'=>957, 'regionable_id'=>79782, 'regionable_type'=>'village']); //Lubuk Basung
                DB::table('regionables')->insert(['region_id'=>957, 'regionable_id'=>79783, 'regionable_type'=>'village']); //Manggopoh
            DB::table('regions')->insert(['id'=>958, 'parent'=>955, 'code'=>'2647', 'type'=>'districts', 'name'=>'Districts 2647, City 264, Province 2']);
            DB::table('regionables')->insert(['region_id'=>958, 'regionable_id'=>7027, 'regionable_type'=>'districts']); //Tanjung Raya
            DB::table('regionables')->insert(['region_id'=>958, 'regionable_id'=>7028, 'regionable_type'=>'districts']); //Tanjung Mutiara
                DB::table('regions')->insert(['id'=>959, 'parent'=>958, 'code'=>'26473', 'type'=>'village', 'name'=>'Village 26473, Districts 2647, City 264, Province 2']);
                DB::table('regionables')->insert(['region_id'=>959, 'regionable_id'=>79793, 'regionable_type'=>'village']); //Tiku Limo Jorong
                DB::table('regionables')->insert(['region_id'=>959, 'regionable_id'=>79794, 'regionable_type'=>'village']); //Tiku Selatan
                DB::table('regionables')->insert(['region_id'=>959, 'regionable_id'=>79795, 'regionable_type'=>'village']); //Tiku Utara
        DB::table('regions')->insert(['id'=>960, 'parent'=>546, 'code'=>'265', 'type'=>'city', 'name'=>'City 265, Province 2']);
        DB::table('regionables')->insert(['region_id'=>960, 'regionable_id'=>445, 'regionable_type'=>'city']); //Pasaman Barat regencies
            DB::table('regions')->insert(['id'=>961, 'parent'=>960, 'code'=>'2656', 'type'=>'districts', 'name'=>'Districts 2656, City 265, Province 2']);
            DB::table('regionables')->insert(['region_id'=>961, 'regionable_id'=>7061, 'regionable_type'=>'districts']); //Talamau
            DB::table('regionables')->insert(['region_id'=>961, 'regionable_id'=>7062, 'regionable_type'=>'districts']); //Pasaman
            DB::table('regionables')->insert(['region_id'=>961, 'regionable_id'=>7063, 'regionable_type'=>'districts']); //Luhak Nan Duo
            DB::table('regionables')->insert(['region_id'=>961, 'regionable_id'=>7064, 'regionable_type'=>'districts']); //Kinali
                DB::table('regions')->insert(['id'=>962, 'parent'=>961, 'code'=>'26567', 'type'=>'village', 'name'=>'Village 26567, Districts 2656, City 265, Province 2']);
                DB::table('regionables')->insert(['region_id'=>962, 'regionable_id'=>79992, 'regionable_type'=>'village']); //Kapar
                DB::table('regionables')->insert(['region_id'=>962, 'regionable_id'=>79993, 'regionable_type'=>'village']); //Koto Baru
                DB::table('regionables')->insert(['region_id'=>962, 'regionable_id'=>79994, 'regionable_type'=>'village']); //Katiagan Mandiangin
                DB::table('regionables')->insert(['region_id'=>962, 'regionable_id'=>79995, 'regionable_type'=>'village']); //Kinali
            DB::table('regions')->insert(['id'=>963, 'parent'=>960, 'code'=>'2657', 'type'=>'districts', 'name'=>'Districts 2657, City 265, Province 2']);
            DB::table('regionables')->insert(['region_id'=>963, 'regionable_id'=>7065, 'regionable_type'=>'districts']); //Gunung Tuleh
            DB::table('regionables')->insert(['region_id'=>963, 'regionable_id'=>7066, 'regionable_type'=>'districts']); //Koto Balingka
            DB::table('regionables')->insert(['region_id'=>963, 'regionable_id'=>7067, 'regionable_type'=>'districts']); //Lembah Melintang
            DB::table('regionables')->insert(['region_id'=>963, 'regionable_id'=>7068, 'regionable_type'=>'districts']); //Sei Beremas
            DB::table('regionables')->insert(['region_id'=>963, 'regionable_id'=>7069, 'regionable_type'=>'districts']); //Sungai Aur
                DB::table('regions')->insert(['id'=>964, 'parent'=>963, 'code'=>'26573', 'type'=>'village', 'name'=>'Village 26573, Districts 2657, City 265, Province 2']);
                DB::table('regionables')->insert(['region_id'=>964, 'regionable_id'=>80000, 'regionable_type'=>'village']); //Aia Bangih
                DB::table('regionables')->insert(['region_id'=>964, 'regionable_id'=>80001, 'regionable_type'=>'village']); //Sungai Aur
        DB::table('regions')->insert(['id'=>965, 'parent'=>546, 'code'=>'271', 'type'=>'city', 'name'=>'City 271, Province 2']);
        DB::table('regionables')->insert(['region_id'=>965, 'regionable_id'=>446, 'regionable_type'=>'city']); //Padang Panjang city
        DB::table('regionables')->insert(['region_id'=>965, 'regionable_id'=>447, 'regionable_type'=>'city']); //Tanah Datar regencies
            DB::table('regions')->insert(['id'=>966, 'parent'=>965, 'code'=>'2715', 'type'=>'districts', 'name'=>'Districts 2715, City 271, Province 2']);
            DB::table('regionables')->insert(['region_id'=>966, 'regionable_id'=>7072, 'regionable_type'=>'districts']); //Sepuluh Koto (x Koto)
                DB::table('regions')->insert(['id'=>967, 'parent'=>966, 'code'=>'27151', 'type'=>'village', 'name'=>'Village 27151, Districts 2715, City 271, Province 2']);
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80018, 'regionable_type'=>'village']); //Aie Angek (aia/air Angek)
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80019, 'regionable_type'=>'village']); //Jaho
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80020, 'regionable_type'=>'village']); //Koto Baru
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80021, 'regionable_type'=>'village']); //Koto Laweh
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80022, 'regionable_type'=>'village']); //Pandai Sikek
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80023, 'regionable_type'=>'village']); //Paninjauan
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80024, 'regionable_type'=>'village']); //Panyalaian
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80025, 'regionable_type'=>'village']); //Singgalang
                DB::table('regionables')->insert(['region_id'=>967, 'regionable_id'=>80026, 'regionable_type'=>'village']); //Tambangan
        DB::table('regions')->insert(['id'=>968, 'parent'=>546, 'code'=>'272', 'type'=>'city', 'name'=>'City 272, Province 2']);
        DB::table('regionables')->insert(['region_id'=>968, 'regionable_id'=>447, 'regionable_type'=>'city']); //Tanah Datar regencies
            DB::table('regions')->insert(['id'=>969, 'parent'=>968, 'code'=>'2721', 'type'=>'districts', 'name'=>'Districts 2721, City 272, Province 2']);
            DB::table('regionables')->insert(['region_id'=>969, 'regionable_id'=>7073, 'regionable_type'=>'districts']); //Lima Kaum
                DB::table('regions')->insert(['id'=>970, 'parent'=>969, 'code'=>'27211', 'type'=>'village', 'name'=>'Village 27211, Districts 2721, City 272, Province 2']);
                DB::table('regionables')->insert(['region_id'=>970, 'regionable_id'=>80027, 'regionable_type'=>'village']); //Labuah/labuh
                DB::table('regionables')->insert(['region_id'=>970, 'regionable_id'=>80028, 'regionable_type'=>'village']); //Lima Kaum (limo Kaum)
                DB::table('regionables')->insert(['region_id'=>970, 'regionable_id'=>80029, 'regionable_type'=>'village']); //Parambahan
                DB::table('regions')->insert(['id'=>971, 'parent'=>969, 'code'=>'27213', 'type'=>'village', 'name'=>'Village 27213, Districts 2721, City 272, Province 2']);
                DB::table('regionables')->insert(['region_id'=>971, 'regionable_id'=>80030, 'regionable_type'=>'village']); //Baringin
                DB::table('regions')->insert(['id'=>972, 'parent'=>969, 'code'=>'27216', 'type'=>'village', 'name'=>'Village 27216, Districts 2721, City 272, Province 2']);
                DB::table('regionables')->insert(['region_id'=>972, 'regionable_id'=>80031, 'regionable_type'=>'village']); //Cubadak
            DB::table('regions')->insert(['id'=>973, 'parent'=>968, 'code'=>'2726', 'type'=>'districts', 'name'=>'Districts 2726, City 272, Province 2']);
            DB::table('regionables')->insert(['region_id'=>973, 'regionable_id'=>7074, 'regionable_type'=>'districts']); //Sungai Tarab
            DB::table('regionables')->insert(['region_id'=>973, 'regionable_id'=>7075, 'regionable_type'=>'districts']); //Salimpaung
            DB::table('regionables')->insert(['region_id'=>973, 'regionable_id'=>7076, 'regionable_type'=>'districts']); //Pariangan
            DB::table('regionables')->insert(['region_id'=>973, 'regionable_id'=>7077, 'regionable_type'=>'districts']); //Batipuh
            DB::table('regionables')->insert(['region_id'=>973, 'regionable_id'=>7078, 'regionable_type'=>'districts']); //Batipuh Selatan
                DB::table('regions')->insert(['id'=>974, 'parent'=>973, 'code'=>'27265', 'type'=>'village', 'name'=>'Village 27265, Districts 2726, City 272, Province 2']);
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80054, 'regionable_type'=>'village']); //Andaleh
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80055, 'regionable_type'=>'village']); //Batipuh Ateh (batipuah Ateh)
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80056, 'regionable_type'=>'village']); //Batipuh Baru (batipuah Baruah)
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80057, 'regionable_type'=>'village']); //Bungo Tanjung/tanjuang
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80058, 'regionable_type'=>'village']); //Gunung Rajo (gunuang Rajo)
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80059, 'regionable_type'=>'village']); //Pitalah
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80060, 'regionable_type'=>'village']); //Sabu
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80061, 'regionable_type'=>'village']); //Tanjung Barulak
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80062, 'regionable_type'=>'village']); //Batu Taba
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80063, 'regionable_type'=>'village']); //Guguak Malalo
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80064, 'regionable_type'=>'village']); //Padang Laweh Malalo
                DB::table('regionables')->insert(['region_id'=>974, 'regionable_id'=>80065, 'regionable_type'=>'village']); //Sumpur
            DB::table('regions')->insert(['id'=>975, 'parent'=>968, 'code'=>'2727', 'type'=>'districts', 'name'=>'Districts 2727, City 272, Province 2']);
            DB::table('regionables')->insert(['region_id'=>975, 'regionable_id'=>7079, 'regionable_type'=>'districts']); //Rambatan
                DB::table('regions')->insert(['id'=>976, 'parent'=>975, 'code'=>'27271', 'type'=>'village', 'name'=>'Village 27271, Districts 2727, City 272, Province 2']);
                DB::table('regionables')->insert(['region_id'=>976, 'regionable_id'=>80066, 'regionable_type'=>'village']); //Balimbing
                DB::table('regionables')->insert(['region_id'=>976, 'regionable_id'=>80067, 'regionable_type'=>'village']); //Iii/tigo Koto
                DB::table('regionables')->insert(['region_id'=>976, 'regionable_id'=>80068, 'regionable_type'=>'village']); //Padang Magek
                DB::table('regionables')->insert(['region_id'=>976, 'regionable_id'=>80069, 'regionable_type'=>'village']); //Rambatan
                DB::table('regionables')->insert(['region_id'=>976, 'regionable_id'=>80070, 'regionable_type'=>'village']); //Simawang
            DB::table('regions')->insert(['id'=>977, 'parent'=>968, 'code'=>'2728', 'type'=>'districts', 'name'=>'Districts 2728, City 272, Province 2']);
            DB::table('regionables')->insert(['region_id'=>977, 'regionable_id'=>7080, 'regionable_type'=>'districts']); //Tanjung Baru
            DB::table('regionables')->insert(['region_id'=>977, 'regionable_id'=>7081, 'regionable_type'=>'districts']); //Tanjung Emas
            DB::table('regionables')->insert(['region_id'=>977, 'regionable_id'=>7082, 'regionable_type'=>'districts']); //Padang Ganting
                DB::table('regions')->insert(['id'=>978, 'parent'=>977, 'code'=>'27282', 'type'=>'village', 'name'=>'Village 27282, Districts 2728, City 272, Province 2']);
                DB::table('regionables')->insert(['region_id'=>978, 'regionable_id'=>80077, 'regionable_type'=>'village']); //Atar
                DB::table('regionables')->insert(['region_id'=>978, 'regionable_id'=>80078, 'regionable_type'=>'village']); //Padang Ganting
            DB::table('regions')->insert(['id'=>979, 'parent'=>968, 'code'=>'2729', 'type'=>'districts', 'name'=>'Districts 2729, City 272, Province 2']);
            DB::table('regionables')->insert(['region_id'=>979, 'regionable_id'=>7083, 'regionable_type'=>'districts']); //Lintau Buo Utara
            DB::table('regionables')->insert(['region_id'=>979, 'regionable_id'=>7084, 'regionable_type'=>'districts']); //Lintau Buo
            DB::table('regionables')->insert(['region_id'=>979, 'regionable_id'=>7085, 'regionable_type'=>'districts']); //Sungayang
                DB::table('regions')->insert(['id'=>980, 'parent'=>979, 'code'=>'27294', 'type'=>'village', 'name'=>'Village 27294, Districts 2729, City 272, Province 2']);
                DB::table('regionables')->insert(['region_id'=>980, 'regionable_id'=>80088, 'regionable_type'=>'village']); //Andaleh Baruh/baruah Bukik
                DB::table('regionables')->insert(['region_id'=>980, 'regionable_id'=>80089, 'regionable_type'=>'village']); //Minangkabau
                DB::table('regionables')->insert(['region_id'=>980, 'regionable_id'=>80090, 'regionable_type'=>'village']); //Sungai Patai
                DB::table('regionables')->insert(['region_id'=>980, 'regionable_id'=>80091, 'regionable_type'=>'village']); //Sungayang
                DB::table('regionables')->insert(['region_id'=>980, 'regionable_id'=>80092, 'regionable_type'=>'village']); //Tanjung (tanjuang)
        DB::table('regions')->insert(['id'=>981, 'parent'=>546, 'code'=>'273', 'type'=>'city', 'name'=>'City 273, Province 2']);
        DB::table('regionables')->insert(['region_id'=>981, 'regionable_id'=>448, 'regionable_type'=>'city']); //Solok city
        DB::table('regionables')->insert(['region_id'=>981, 'regionable_id'=>449, 'regionable_type'=>'city']); //Solok regencies
            DB::table('regions')->insert(['id'=>982, 'parent'=>981, 'code'=>'2731', 'type'=>'districts', 'name'=>'Districts 2731, City 273, Province 2']);
            DB::table('regionables')->insert(['region_id'=>982, 'regionable_id'=>7086, 'regionable_type'=>'districts']); //Lubuk Sikarah
            DB::table('regionables')->insert(['region_id'=>982, 'regionable_id'=>7102, 'regionable_type'=>'districts']); //Lubuk Sikarah
                DB::table('regions')->insert(['id'=>983, 'parent'=>982, 'code'=>'27311', 'type'=>'village', 'name'=>'Village 27311, Districts 2731, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>983, 'regionable_id'=>80093, 'regionable_type'=>'village']); //Vi Suku
                DB::table('regionables')->insert(['region_id'=>983, 'regionable_id'=>80182, 'regionable_type'=>'village']); //Vi Suku
                DB::table('regions')->insert(['id'=>984, 'parent'=>982, 'code'=>'27312', 'type'=>'village', 'name'=>'Village 27312, Districts 2731, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>984, 'regionable_id'=>80094, 'regionable_type'=>'village']); //Tanah Garam
                DB::table('regionables')->insert(['region_id'=>984, 'regionable_id'=>80183, 'regionable_type'=>'village']); //Tanah Garam
                DB::table('regions')->insert(['id'=>985, 'parent'=>982, 'code'=>'27313', 'type'=>'village', 'name'=>'Village 27313, Districts 2731, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>985, 'regionable_id'=>80095, 'regionable_type'=>'village']); //Sinapa Piliang
                DB::table('regionables')->insert(['region_id'=>985, 'regionable_id'=>80184, 'regionable_type'=>'village']); //Sinapa Piliang
                DB::table('regions')->insert(['id'=>986, 'parent'=>982, 'code'=>'27314', 'type'=>'village', 'name'=>'Village 27314, Districts 2731, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>986, 'regionable_id'=>80096, 'regionable_type'=>'village']); //Ix Korong
                DB::table('regionables')->insert(['region_id'=>986, 'regionable_id'=>80185, 'regionable_type'=>'village']); //Ix Korong
                DB::table('regions')->insert(['id'=>987, 'parent'=>982, 'code'=>'27315', 'type'=>'village', 'name'=>'Village 27315, Districts 2731, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>987, 'regionable_id'=>80097, 'regionable_type'=>'village']); //Kampai Tabu Kerambil/karambia
                DB::table('regionables')->insert(['region_id'=>987, 'regionable_id'=>80186, 'regionable_type'=>'village']); //Kampai Tabu Kerambil/karambia
                DB::table('regions')->insert(['id'=>988, 'parent'=>982, 'code'=>'27316', 'type'=>'village', 'name'=>'Village 27316, Districts 2731, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>988, 'regionable_id'=>80098, 'regionable_type'=>'village']); //Simpang Rumbio
                DB::table('regionables')->insert(['region_id'=>988, 'regionable_id'=>80187, 'regionable_type'=>'village']); //Simpang Rumbio
                DB::table('regions')->insert(['id'=>989, 'parent'=>982, 'code'=>'27317', 'type'=>'village', 'name'=>'Village 27317, Districts 2731, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>989, 'regionable_id'=>80099, 'regionable_type'=>'village']); //Aro Iv Korong
                DB::table('regionables')->insert(['region_id'=>989, 'regionable_id'=>80188, 'regionable_type'=>'village']); //Aro Iv Korong
            DB::table('regions')->insert(['id'=>990, 'parent'=>981, 'code'=>'2732', 'type'=>'districts', 'name'=>'Districts 2732, City 273, Province 2']);
            DB::table('regionables')->insert(['region_id'=>990, 'regionable_id'=>7087, 'regionable_type'=>'districts']); //Tanjung Harapan
            DB::table('regionables')->insert(['region_id'=>990, 'regionable_id'=>7103, 'regionable_type'=>'districts']); //Tanjung Harapan
                DB::table('regions')->insert(['id'=>991, 'parent'=>990, 'code'=>'27321', 'type'=>'village', 'name'=>'Village 27321, Districts 2732, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>991, 'regionable_id'=>80100, 'regionable_type'=>'village']); //Kampung Jawa
                DB::table('regionables')->insert(['region_id'=>991, 'regionable_id'=>80189, 'regionable_type'=>'village']); //Kampung Jawa
                DB::table('regions')->insert(['id'=>992, 'parent'=>990, 'code'=>'27322', 'type'=>'village', 'name'=>'Village 27322, Districts 2732, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>992, 'regionable_id'=>80101, 'regionable_type'=>'village']); //Pasar Pandan Air Mati
                DB::table('regionables')->insert(['region_id'=>992, 'regionable_id'=>80190, 'regionable_type'=>'village']); //Pasar Pandan Air Mati
                DB::table('regions')->insert(['id'=>993, 'parent'=>990, 'code'=>'27323', 'type'=>'village', 'name'=>'Village 27323, Districts 2732, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>993, 'regionable_id'=>80102, 'regionable_type'=>'village']); //Koto Panjang
                DB::table('regionables')->insert(['region_id'=>993, 'regionable_id'=>80191, 'regionable_type'=>'village']); //Koto Panjang
                DB::table('regions')->insert(['id'=>994, 'parent'=>990, 'code'=>'27324', 'type'=>'village', 'name'=>'Village 27324, Districts 2732, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>994, 'regionable_id'=>80103, 'regionable_type'=>'village']); //Tanjung Paku
                DB::table('regionables')->insert(['region_id'=>994, 'regionable_id'=>80192, 'regionable_type'=>'village']); //Tanjung Paku
                DB::table('regions')->insert(['id'=>995, 'parent'=>990, 'code'=>'27325', 'type'=>'village', 'name'=>'Village 27325, Districts 2732, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>995, 'regionable_id'=>80104, 'regionable_type'=>'village']); //Laing
                DB::table('regionables')->insert(['region_id'=>995, 'regionable_id'=>80193, 'regionable_type'=>'village']); //Laing
                DB::table('regions')->insert(['id'=>996, 'parent'=>990, 'code'=>'27326', 'type'=>'village', 'name'=>'Village 27326, Districts 2732, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>996, 'regionable_id'=>80105, 'regionable_type'=>'village']); //Nan Balimo
                DB::table('regionables')->insert(['region_id'=>996, 'regionable_id'=>80194, 'regionable_type'=>'village']); //Nan Balimo
            DB::table('regions')->insert(['id'=>997, 'parent'=>981, 'code'=>'2735', 'type'=>'districts', 'name'=>'Districts 2735, City 273, Province 2']);
            DB::table('regionables')->insert(['region_id'=>997, 'regionable_id'=>7088, 'regionable_type'=>'districts']); //X Koto Diatas
            DB::table('regionables')->insert(['region_id'=>997, 'regionable_id'=>7089, 'regionable_type'=>'districts']); //X Koto Singkarak
            DB::table('regionables')->insert(['region_id'=>997, 'regionable_id'=>7104, 'regionable_type'=>'districts']); //X Koto Diatas
            DB::table('regionables')->insert(['region_id'=>997, 'regionable_id'=>7105, 'regionable_type'=>'districts']); //X Koto Singkarak
                DB::table('regions')->insert(['id'=>998, 'parent'=>997, 'code'=>'27356', 'type'=>'village', 'name'=>'Village 27356, Districts 2735, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80116, 'regionable_type'=>'village']); //Aripan
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80117, 'regionable_type'=>'village']); //Kacang
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80118, 'regionable_type'=>'village']); //Koto Sani
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80119, 'regionable_type'=>'village']); //Saning Baka
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80120, 'regionable_type'=>'village']); //Singkarak
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80121, 'regionable_type'=>'village']); //Sumani
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80122, 'regionable_type'=>'village']); //Tanjung Alai
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80123, 'regionable_type'=>'village']); //Tikalak
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80205, 'regionable_type'=>'village']); //Aripan
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80206, 'regionable_type'=>'village']); //Kacang
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80207, 'regionable_type'=>'village']); //Koto Sani
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80208, 'regionable_type'=>'village']); //Saning Baka
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80209, 'regionable_type'=>'village']); //Singkarak
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80210, 'regionable_type'=>'village']); //Sumani
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80211, 'regionable_type'=>'village']); //Tanjung Alai
                DB::table('regionables')->insert(['region_id'=>998, 'regionable_id'=>80212, 'regionable_type'=>'village']); //Tikalak
            DB::table('regions')->insert(['id'=>999, 'parent'=>981, 'code'=>'2736', 'type'=>'districts', 'name'=>'Districts 2736, City 273, Province 2']);
            DB::table('regionables')->insert(['region_id'=>999, 'regionable_id'=>7090, 'regionable_type'=>'districts']); //Kubung
            DB::table('regionables')->insert(['region_id'=>999, 'regionable_id'=>7091, 'regionable_type'=>'districts']); //Gunung Talang
            DB::table('regionables')->insert(['region_id'=>999, 'regionable_id'=>7106, 'regionable_type'=>'districts']); //Kubung
            DB::table('regionables')->insert(['region_id'=>999, 'regionable_id'=>7107, 'regionable_type'=>'districts']); //Gunung Talang
                DB::table('regions')->insert(['id'=>1000, 'parent'=>999, 'code'=>'27365', 'type'=>'village', 'name'=>'Village 27365, Districts 2736, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80133, 'regionable_type'=>'village']); //Aia Batumbuak
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80134, 'regionable_type'=>'village']); //Batang Barus
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80135, 'regionable_type'=>'village']); //Cupak
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80136, 'regionable_type'=>'village']); //Jawi Jawi
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80137, 'regionable_type'=>'village']); //Koto Gadang Guguak
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80138, 'regionable_type'=>'village']); //Koto Gaek Guguk
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80139, 'regionable_type'=>'village']); //Sungai Janiah
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80140, 'regionable_type'=>'village']); //Talang
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80222, 'regionable_type'=>'village']); //Aia Batumbuak
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80223, 'regionable_type'=>'village']); //Batang Barus
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80224, 'regionable_type'=>'village']); //Cupak
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80225, 'regionable_type'=>'village']); //Jawi Jawi
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80226, 'regionable_type'=>'village']); //Koto Gadang Guguak
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80227, 'regionable_type'=>'village']); //Koto Gaek Guguk
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80228, 'regionable_type'=>'village']); //Sungai Janiah
                DB::table('regionables')->insert(['region_id'=>1000, 'regionable_id'=>80229, 'regionable_type'=>'village']); //Talang
            DB::table('regions')->insert(['id'=>1001, 'parent'=>981, 'code'=>'2737', 'type'=>'districts', 'name'=>'Districts 2737, City 273, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1001, 'regionable_id'=>7092, 'regionable_type'=>'districts']); //Lembah Gumanti
            DB::table('regionables')->insert(['region_id'=>1001, 'regionable_id'=>7093, 'regionable_type'=>'districts']); //Tigo Lurah
            DB::table('regionables')->insert(['region_id'=>1001, 'regionable_id'=>7094, 'regionable_type'=>'districts']); //Hiliran Gumanti
            DB::table('regionables')->insert(['region_id'=>1001, 'regionable_id'=>7095, 'regionable_type'=>'districts']); //Pantai Cermin
            DB::table('regionables')->insert(['region_id'=>1001, 'regionable_id'=>7108, 'regionable_type'=>'districts']); //Lembah Gumanti
            DB::table('regionables')->insert(['region_id'=>1001, 'regionable_id'=>7109, 'regionable_type'=>'districts']); //Tigo Lurah
            DB::table('regionables')->insert(['region_id'=>1001, 'regionable_id'=>7110, 'regionable_type'=>'districts']); //Hiliran Gumanti
            DB::table('regionables')->insert(['region_id'=>1001, 'regionable_id'=>7111, 'regionable_type'=>'districts']); //Pantai Cermin
                DB::table('regions')->insert(['id'=>1002, 'parent'=>1001, 'code'=>'27373', 'type'=>'village', 'name'=>'Village 27373, Districts 2737, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1002, 'regionable_id'=>80153, 'regionable_type'=>'village']); //Lolo
                DB::table('regionables')->insert(['region_id'=>1002, 'regionable_id'=>80154, 'regionable_type'=>'village']); //Surian
                DB::table('regionables')->insert(['region_id'=>1002, 'regionable_id'=>80242, 'regionable_type'=>'village']); //Lolo
                DB::table('regionables')->insert(['region_id'=>1002, 'regionable_id'=>80243, 'regionable_type'=>'village']); //Surian
            DB::table('regions')->insert(['id'=>1003, 'parent'=>981, 'code'=>'2738', 'type'=>'districts', 'name'=>'Districts 2738, City 273, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7096, 'regionable_type'=>'districts']); //Bukit Sundi
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7097, 'regionable_type'=>'districts']); //Lembang Jaya
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7098, 'regionable_type'=>'districts']); //Danau Kembar
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7099, 'regionable_type'=>'districts']); //Payung Sekaki
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7100, 'regionable_type'=>'districts']); //Ix Koto Sei Lasi
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7101, 'regionable_type'=>'districts']); //Junjung Sirih
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7112, 'regionable_type'=>'districts']); //Bukit Sundi
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7113, 'regionable_type'=>'districts']); //Lembang Jaya
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7114, 'regionable_type'=>'districts']); //Danau Kembar
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7115, 'regionable_type'=>'districts']); //Payung Sekaki
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7116, 'regionable_type'=>'districts']); //Ix Koto Sei Lasi
            DB::table('regionables')->insert(['region_id'=>1003, 'regionable_id'=>7117, 'regionable_type'=>'districts']); //Junjung Sirih
                DB::table('regions')->insert(['id'=>1004, 'parent'=>1003, 'code'=>'27388', 'type'=>'village', 'name'=>'Village 27388, Districts 2738, City 273, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80171, 'regionable_type'=>'village']); //Bukit Bais
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80172, 'regionable_type'=>'village']); //Guguk Sarai
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80173, 'regionable_type'=>'village']); //Indudur
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80174, 'regionable_type'=>'village']); //Koto Laweh
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80175, 'regionable_type'=>'village']); //Pianggu
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80176, 'regionable_type'=>'village']); //Siaro Aro
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80177, 'regionable_type'=>'village']); //Sungai Durian
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80178, 'regionable_type'=>'village']); //Sungai Jambur
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80179, 'regionable_type'=>'village']); //Taruang Taruang
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80180, 'regionable_type'=>'village']); //Muaro Pingai
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80181, 'regionable_type'=>'village']); //Paninggahan
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80260, 'regionable_type'=>'village']); //Bukit Bais
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80261, 'regionable_type'=>'village']); //Guguk Sarai
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80262, 'regionable_type'=>'village']); //Indudur
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80263, 'regionable_type'=>'village']); //Koto Laweh
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80264, 'regionable_type'=>'village']); //Pianggu
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80265, 'regionable_type'=>'village']); //Siaro Aro
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80266, 'regionable_type'=>'village']); //Sungai Durian
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80267, 'regionable_type'=>'village']); //Sungai Jambur
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80268, 'regionable_type'=>'village']); //Taruang Taruang
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80269, 'regionable_type'=>'village']); //Muaro Pingai
                DB::table('regionables')->insert(['region_id'=>1004, 'regionable_id'=>80270, 'regionable_type'=>'village']); //Paninggahan
        DB::table('regions')->insert(['id'=>1005, 'parent'=>546, 'code'=>'274', 'type'=>'city', 'name'=>'City 274, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1005, 'regionable_id'=>450, 'regionable_type'=>'city']); //Sawah Lunto city
            DB::table('regions')->insert(['id'=>1006, 'parent'=>1005, 'code'=>'2741', 'type'=>'districts', 'name'=>'Districts 2741, City 274, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1006, 'regionable_id'=>7118, 'regionable_type'=>'districts']); //Lembah Segar
                DB::table('regions')->insert(['id'=>1007, 'parent'=>1006, 'code'=>'27411', 'type'=>'village', 'name'=>'Village 27411, Districts 2741, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1007, 'regionable_id'=>80271, 'regionable_type'=>'village']); //Pasar
                DB::table('regionables')->insert(['region_id'=>1007, 'regionable_id'=>80272, 'regionable_type'=>'village']); //Tanah Lapang
                DB::table('regions')->insert(['id'=>1008, 'parent'=>1006, 'code'=>'27412', 'type'=>'village', 'name'=>'Village 27412, Districts 2741, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1008, 'regionable_id'=>80273, 'regionable_type'=>'village']); //Kubang Utara Sikabu
                DB::table('regions')->insert(['id'=>1009, 'parent'=>1006, 'code'=>'27413', 'type'=>'village', 'name'=>'Village 27413, Districts 2741, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1009, 'regionable_id'=>80274, 'regionable_type'=>'village']); //Kubang Tangah
                DB::table('regions')->insert(['id'=>1010, 'parent'=>1006, 'code'=>'27415', 'type'=>'village', 'name'=>'Village 27415, Districts 2741, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1010, 'regionable_id'=>80275, 'regionable_type'=>'village']); //Kubang Sirakuk/sirakuak Selatan
                DB::table('regionables')->insert(['region_id'=>1010, 'regionable_id'=>80276, 'regionable_type'=>'village']); //Kubang Sirakuk/sirakuak Utara
                DB::table('regionables')->insert(['region_id'=>1010, 'regionable_id'=>80277, 'regionable_type'=>'village']); //Pasar Kubang
                DB::table('regions')->insert(['id'=>1011, 'parent'=>1006, 'code'=>'27416', 'type'=>'village', 'name'=>'Village 27416, Districts 2741, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1011, 'regionable_id'=>80278, 'regionable_type'=>'village']); //Lunto Timur
                DB::table('regions')->insert(['id'=>1012, 'parent'=>1006, 'code'=>'27418', 'type'=>'village', 'name'=>'Village 27418, Districts 2741, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1012, 'regionable_id'=>80279, 'regionable_type'=>'village']); //Air Mulyo (aurmulyo)
                DB::table('regionables')->insert(['region_id'=>1012, 'regionable_id'=>80280, 'regionable_type'=>'village']); //Lunto Barat
                DB::table('regions')->insert(['id'=>1013, 'parent'=>1006, 'code'=>'27419', 'type'=>'village', 'name'=>'Village 27419, Districts 2741, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1013, 'regionable_id'=>80281, 'regionable_type'=>'village']); //Air/aia Dingin
            DB::table('regions')->insert(['id'=>1014, 'parent'=>1005, 'code'=>'2742', 'type'=>'districts', 'name'=>'Districts 2742, City 274, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1014, 'regionable_id'=>7119, 'regionable_type'=>'districts']); //Barangin
                DB::table('regions')->insert(['id'=>1015, 'parent'=>1014, 'code'=>'27421', 'type'=>'village', 'name'=>'Village 27421, Districts 2742, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1015, 'regionable_id'=>80282, 'regionable_type'=>'village']); //Lumindai
                DB::table('regionables')->insert(['region_id'=>1015, 'regionable_id'=>80283, 'regionable_type'=>'village']); //Saringan
                DB::table('regions')->insert(['id'=>1016, 'parent'=>1014, 'code'=>'27422', 'type'=>'village', 'name'=>'Village 27422, Districts 2742, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1016, 'regionable_id'=>80284, 'regionable_type'=>'village']); //Balai Batu Sandaran
                DB::table('regions')->insert(['id'=>1017, 'parent'=>1014, 'code'=>'27423', 'type'=>'village', 'name'=>'Village 27423, Districts 2742, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1017, 'regionable_id'=>80285, 'regionable_type'=>'village']); //Talago Gunung/gunuang
                DB::table('regions')->insert(['id'=>1018, 'parent'=>1014, 'code'=>'27424', 'type'=>'village', 'name'=>'Village 27424, Districts 2742, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1018, 'regionable_id'=>80286, 'regionable_type'=>'village']); //Lubang Panjang
                DB::table('regionables')->insert(['region_id'=>1018, 'regionable_id'=>80287, 'regionable_type'=>'village']); //Santur/santua
                DB::table('regions')->insert(['id'=>1019, 'parent'=>1014, 'code'=>'27425', 'type'=>'village', 'name'=>'Village 27425, Districts 2742, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1019, 'regionable_id'=>80288, 'regionable_type'=>'village']); //Durian I
                DB::table('regionables')->insert(['region_id'=>1019, 'regionable_id'=>80289, 'regionable_type'=>'village']); //Durian Ii
                DB::table('regionables')->insert(['region_id'=>1019, 'regionable_id'=>80290, 'regionable_type'=>'village']); //Kolok Mudik/mudiak
                DB::table('regions')->insert(['id'=>1020, 'parent'=>1014, 'code'=>'27427', 'type'=>'village', 'name'=>'Village 27427, Districts 2742, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1020, 'regionable_id'=>80291, 'regionable_type'=>'village']); //Kolok Nan Tuo
            DB::table('regions')->insert(['id'=>1021, 'parent'=>1005, 'code'=>'2743', 'type'=>'districts', 'name'=>'Districts 2743, City 274, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1021, 'regionable_id'=>7120, 'regionable_type'=>'districts']); //Silungkang
                DB::table('regions')->insert(['id'=>1022, 'parent'=>1021, 'code'=>'27431', 'type'=>'village', 'name'=>'Village 27431, Districts 2743, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1022, 'regionable_id'=>80292, 'regionable_type'=>'village']); //Silungkang Tigo
                DB::table('regions')->insert(['id'=>1023, 'parent'=>1021, 'code'=>'27432', 'type'=>'village', 'name'=>'Village 27432, Districts 2743, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1023, 'regionable_id'=>80293, 'regionable_type'=>'village']); //Silungkang Duo
                DB::table('regions')->insert(['id'=>1024, 'parent'=>1021, 'code'=>'27433', 'type'=>'village', 'name'=>'Village 27433, Districts 2743, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1024, 'regionable_id'=>80294, 'regionable_type'=>'village']); //Silungkang Oso
                DB::table('regions')->insert(['id'=>1025, 'parent'=>1021, 'code'=>'27434', 'type'=>'village', 'name'=>'Village 27434, Districts 2743, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1025, 'regionable_id'=>80295, 'regionable_type'=>'village']); //Taratak Bancah/boncah
                DB::table('regions')->insert(['id'=>1026, 'parent'=>1021, 'code'=>'27435', 'type'=>'village', 'name'=>'Village 27435, Districts 2743, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1026, 'regionable_id'=>80296, 'regionable_type'=>'village']); //Muaro Kalaban
            DB::table('regions')->insert(['id'=>1027, 'parent'=>1005, 'code'=>'2744', 'type'=>'districts', 'name'=>'Districts 2744, City 274, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1027, 'regionable_id'=>7121, 'regionable_type'=>'districts']); //Talawi
                DB::table('regions')->insert(['id'=>1028, 'parent'=>1027, 'code'=>'27441', 'type'=>'village', 'name'=>'Village 27441, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1028, 'regionable_id'=>80297, 'regionable_type'=>'village']); //Datar Mansiang
                DB::table('regions')->insert(['id'=>1029, 'parent'=>1027, 'code'=>'27442', 'type'=>'village', 'name'=>'Village 27442, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1029, 'regionable_id'=>80298, 'regionable_type'=>'village']); //Tumpuak Tangah
                DB::table('regions')->insert(['id'=>1030, 'parent'=>1027, 'code'=>'27443', 'type'=>'village', 'name'=>'Village 27443, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1030, 'regionable_id'=>80299, 'regionable_type'=>'village']); //Batu Tanjuang
                DB::table('regionables')->insert(['region_id'=>1030, 'regionable_id'=>80300, 'regionable_type'=>'village']); //Kumbayau
                DB::table('regions')->insert(['id'=>1031, 'parent'=>1027, 'code'=>'27444', 'type'=>'village', 'name'=>'Village 27444, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1031, 'regionable_id'=>80301, 'regionable_type'=>'village']); //Bukik Gadang
                DB::table('regionables')->insert(['region_id'=>1031, 'regionable_id'=>80302, 'regionable_type'=>'village']); //Talawi Mudik/mudiak
                DB::table('regions')->insert(['id'=>1032, 'parent'=>1027, 'code'=>'27445', 'type'=>'village', 'name'=>'Village 27445, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1032, 'regionable_id'=>80303, 'regionable_type'=>'village']); //Talawi Hilir/hilia
                DB::table('regions')->insert(['id'=>1033, 'parent'=>1027, 'code'=>'27446', 'type'=>'village', 'name'=>'Village 27446, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1033, 'regionable_id'=>80304, 'regionable_type'=>'village']); //Sijantang Koto
                DB::table('regions')->insert(['id'=>1034, 'parent'=>1027, 'code'=>'27447', 'type'=>'village', 'name'=>'Village 27447, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1034, 'regionable_id'=>80305, 'regionable_type'=>'village']); //Salak
                DB::table('regions')->insert(['id'=>1035, 'parent'=>1027, 'code'=>'27448', 'type'=>'village', 'name'=>'Village 27448, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1035, 'regionable_id'=>80306, 'regionable_type'=>'village']); //Sikalang
                DB::table('regions')->insert(['id'=>1036, 'parent'=>1027, 'code'=>'27449', 'type'=>'village', 'name'=>'Village 27449, Districts 2744, City 274, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1036, 'regionable_id'=>80307, 'regionable_type'=>'village']); //Rantih
        DB::table('regions')->insert(['id'=>1037, 'parent'=>546, 'code'=>'275', 'type'=>'city', 'name'=>'City 275, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1037, 'regionable_id'=>451, 'regionable_type'=>'city']); //Sijunjung (sawah Lunto Sijunjung) regencies
        DB::table('regionables')->insert(['region_id'=>1037, 'regionable_id'=>452, 'regionable_type'=>'city']); //Dharmasraya regencies
            DB::table('regions')->insert(['id'=>1038, 'parent'=>1037, 'code'=>'2757', 'type'=>'districts', 'name'=>'Districts 2757, City 275, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1038, 'regionable_id'=>7128, 'regionable_type'=>'districts']); //Tanjung Gadang
            DB::table('regionables')->insert(['region_id'=>1038, 'regionable_id'=>7129, 'regionable_type'=>'districts']); //Kamang Baru
            DB::table('regionables')->insert(['region_id'=>1038, 'regionable_id'=>7130, 'regionable_type'=>'districts']); //Pulau Punjung
                DB::table('regions')->insert(['id'=>1039, 'parent'=>1038, 'code'=>'27573', 'type'=>'village', 'name'=>'Village 27573, Districts 2757, City 275, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1039, 'regionable_id'=>80369, 'regionable_type'=>'village']); //Empat Koto Pulau Punjung
                DB::table('regionables')->insert(['region_id'=>1039, 'regionable_id'=>80370, 'regionable_type'=>'village']); //Gunung Selasih
                DB::table('regionables')->insert(['region_id'=>1039, 'regionable_id'=>80371, 'regionable_type'=>'village']); //Sikabau
                DB::table('regionables')->insert(['region_id'=>1039, 'regionable_id'=>80372, 'regionable_type'=>'village']); //Sungai Dareh
                DB::table('regionables')->insert(['region_id'=>1039, 'regionable_id'=>80373, 'regionable_type'=>'village']); //Sungai Kambut
                DB::table('regionables')->insert(['region_id'=>1039, 'regionable_id'=>80374, 'regionable_type'=>'village']); //Tebing Tinggi
        DB::table('regions')->insert(['id'=>1040, 'parent'=>546, 'code'=>'276', 'type'=>'city', 'name'=>'City 276, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1040, 'regionable_id'=>452, 'regionable_type'=>'city']); //Dharmasraya regencies
            DB::table('regions')->insert(['id'=>1041, 'parent'=>1040, 'code'=>'2767', 'type'=>'districts', 'name'=>'Districts 2767, City 276, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1041, 'regionable_id'=>7131, 'regionable_type'=>'districts']); //Sitiung
            DB::table('regionables')->insert(['region_id'=>1041, 'regionable_id'=>7132, 'regionable_type'=>'districts']); //Timpeh
                DB::table('regions')->insert(['id'=>1042, 'parent'=>1041, 'code'=>'27678', 'type'=>'village', 'name'=>'Village 27678, Districts 2767, City 276, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80375, 'regionable_type'=>'village']); //Gunung Medan
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80376, 'regionable_type'=>'village']); //Sei/sungai Duo
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80377, 'regionable_type'=>'village']); //Siguntur
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80378, 'regionable_type'=>'village']); //Sitiung
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80379, 'regionable_type'=>'village']); //Panyuberangan
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80380, 'regionable_type'=>'village']); //Ranah Palabi
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80381, 'regionable_type'=>'village']); //Tabek (penyebrangan)
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80382, 'regionable_type'=>'village']); //Taratak Tinggi
                DB::table('regionables')->insert(['region_id'=>1042, 'regionable_id'=>80383, 'regionable_type'=>'village']); //Timpeh
            DB::table('regions')->insert(['id'=>1043, 'parent'=>1040, 'code'=>'2768', 'type'=>'districts', 'name'=>'Districts 2768, City 276, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1043, 'regionable_id'=>7133, 'regionable_type'=>'districts']); //Koto Baru
            DB::table('regionables')->insert(['region_id'=>1043, 'regionable_id'=>7134, 'regionable_type'=>'districts']); //Koto Salak
            DB::table('regionables')->insert(['region_id'=>1043, 'regionable_id'=>7135, 'regionable_type'=>'districts']); //Sembilan Koto (ix Koto)
            DB::table('regionables')->insert(['region_id'=>1043, 'regionable_id'=>7136, 'regionable_type'=>'districts']); //Padang Laweh
            DB::table('regionables')->insert(['region_id'=>1043, 'regionable_id'=>7137, 'regionable_type'=>'districts']); //Tiumang
            DB::table('regionables')->insert(['region_id'=>1043, 'regionable_id'=>7138, 'regionable_type'=>'districts']); //Koto Besar
            DB::table('regionables')->insert(['region_id'=>1043, 'regionable_id'=>7139, 'regionable_type'=>'districts']); //Asam Jujuhan
            DB::table('regionables')->insert(['region_id'=>1043, 'regionable_id'=>7140, 'regionable_type'=>'districts']); //Sungai Rumbai
                DB::table('regions')->insert(['id'=>1044, 'parent'=>1043, 'code'=>'27684', 'type'=>'village', 'name'=>'Village 27684, Districts 2768, City 276, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80409, 'regionable_type'=>'village']); //Abai Siat
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80410, 'regionable_type'=>'village']); //Bonjol
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80411, 'regionable_type'=>'village']); //Koto Besar
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80412, 'regionable_type'=>'village']); //Koto Gadang
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80413, 'regionable_type'=>'village']); //Koto Laweh
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80414, 'regionable_type'=>'village']); //Koto Ranah
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80415, 'regionable_type'=>'village']); //Koto Tinggi
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80416, 'regionable_type'=>'village']); //Alahan Nan Tigo
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80417, 'regionable_type'=>'village']); //Lubuk Besar
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80418, 'regionable_type'=>'village']); //Sei/sungai Limau
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80419, 'regionable_type'=>'village']); //Sinamar
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80420, 'regionable_type'=>'village']); //Tanjung Alam
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80421, 'regionable_type'=>'village']); //Kurnia Koto Salak
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80422, 'regionable_type'=>'village']); //Kurnia Selatan
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80423, 'regionable_type'=>'village']); //Sungai Rumbai
                DB::table('regionables')->insert(['region_id'=>1044, 'regionable_id'=>80424, 'regionable_type'=>'village']); //Sungai Rumbai Timur
        DB::table('regions')->insert(['id'=>1045, 'parent'=>546, 'code'=>'277', 'type'=>'city', 'name'=>'City 277, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1045, 'regionable_id'=>453, 'regionable_type'=>'city']); //Solok Selatan regencies
            DB::table('regions')->insert(['id'=>1046, 'parent'=>1045, 'code'=>'2777', 'type'=>'districts', 'name'=>'Districts 2777, City 277, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1046, 'regionable_id'=>7141, 'regionable_type'=>'districts']); //Koto Parik Gadang Diateh
            DB::table('regionables')->insert(['region_id'=>1046, 'regionable_id'=>7142, 'regionable_type'=>'districts']); //Pauh Duo
            DB::table('regionables')->insert(['region_id'=>1046, 'regionable_id'=>7143, 'regionable_type'=>'districts']); //Sungai Pagu
            DB::table('regionables')->insert(['region_id'=>1046, 'regionable_id'=>7144, 'regionable_type'=>'districts']); //Sangir Jujuan
            DB::table('regionables')->insert(['region_id'=>1046, 'regionable_id'=>7145, 'regionable_type'=>'districts']); //Sangir Balai Janggo
            DB::table('regionables')->insert(['region_id'=>1046, 'regionable_id'=>7146, 'regionable_type'=>'districts']); //Sangir
            DB::table('regionables')->insert(['region_id'=>1046, 'regionable_id'=>7147, 'regionable_type'=>'districts']); //Sangir Batang Hari
                DB::table('regions')->insert(['id'=>1047, 'parent'=>1046, 'code'=>'27779', 'type'=>'village', 'name'=>'Village 27779, Districts 2777, City 277, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1047, 'regionable_id'=>80457, 'regionable_type'=>'village']); //Abai
                DB::table('regionables')->insert(['region_id'=>1047, 'regionable_id'=>80458, 'regionable_type'=>'village']); //Dusun Tangah
                DB::table('regionables')->insert(['region_id'=>1047, 'regionable_id'=>80459, 'regionable_type'=>'village']); //Lubuk Ulang Aling
                DB::table('regionables')->insert(['region_id'=>1047, 'regionable_id'=>80460, 'regionable_type'=>'village']); //Lubuk Ulang Aling Selatan
                DB::table('regionables')->insert(['region_id'=>1047, 'regionable_id'=>80461, 'regionable_type'=>'village']); //Lubuk Ulang Aling Tengah
                DB::table('regionables')->insert(['region_id'=>1047, 'regionable_id'=>80462, 'regionable_type'=>'village']); //Ranah Pantai Cermin
                DB::table('regionables')->insert(['region_id'=>1047, 'regionable_id'=>80463, 'regionable_type'=>'village']); //Sitapus

        //Sumatera Utara
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>34, 'regionable_type'=>'province']); //Sumatera Utara
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>469, 'regionable_type'=>'city']); //Medan city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>470, 'regionable_type'=>'city']); //Deli Serdang regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>471, 'regionable_type'=>'city']); //Tebing Tinggi city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>472, 'regionable_type'=>'city']); //Binjai city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>473, 'regionable_type'=>'city']); //Langkat regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>474, 'regionable_type'=>'city']); //Serdang Bedagai regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>475, 'regionable_type'=>'city']); //Pematang Siantar city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>476, 'regionable_type'=>'city']); //Simalungun regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>477, 'regionable_type'=>'city']); //Asahan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>478, 'regionable_type'=>'city']); //Batu Bara regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>479, 'regionable_type'=>'city']); //Tanjung Balai city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>480, 'regionable_type'=>'city']); //Labuhan Batu regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>481, 'regionable_type'=>'city']); //Labuhan Batu Utara regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>482, 'regionable_type'=>'city']); //Labuhan Batu Selatan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>483, 'regionable_type'=>'city']); //Karo regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>484, 'regionable_type'=>'city']); //Dairi regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>485, 'regionable_type'=>'city']); //Pakpak Bharat regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>486, 'regionable_type'=>'city']); //Toba Samosir regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>487, 'regionable_type'=>'city']); //Samosir regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>488, 'regionable_type'=>'city']); //Tapanuli Utara regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>489, 'regionable_type'=>'city']); //Humbang Hasundutan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>490, 'regionable_type'=>'city']); //Sibolga city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>491, 'regionable_type'=>'city']); //Tapanuli Tengah regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>492, 'regionable_type'=>'city']); //Padang Sidempuan city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>493, 'regionable_type'=>'city']); //Tapanuli Selatan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>494, 'regionable_type'=>'city']); //Padang Lawas Utara regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>495, 'regionable_type'=>'city']); //Padang Lawas regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>496, 'regionable_type'=>'city']); //Gunungsitoli city
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>497, 'regionable_type'=>'city']); //Nias Barat regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>498, 'regionable_type'=>'city']); //Nias Utara regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>499, 'regionable_type'=>'city']); //Nias regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>500, 'regionable_type'=>'city']); //Nias Selatan regencies
        DB::table('regionables')->insert(['region_id'=>546, 'regionable_id'=>501, 'regionable_type'=>'city']); //Mandailing Natal regencies

        DB::table('regions')->insert(['id'=>1048, 'parent'=>546, 'code'=>'201', 'type'=>'city', 'name'=>'City 201, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1048, 'regionable_id'=>469, 'regionable_type'=>'city']); //Medan city
            DB::table('regions')->insert(['id'=>1049, 'parent'=>1048, 'code'=>'2011', 'type'=>'districts', 'name'=>'Districts 2011, City 201, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1049, 'regionable_id'=>7376, 'regionable_type'=>'districts']); //Medan Barat
            DB::table('regionables')->insert(['region_id'=>1049, 'regionable_id'=>7377, 'regionable_type'=>'districts']); //Medan Petisah
                DB::table('regions')->insert(['id'=>1050, 'parent'=>1049, 'code'=>'20112', 'type'=>'village', 'name'=>'Village 20112, Districts 2011, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1050, 'regionable_id'=>83614, 'regionable_type'=>'village']); //Petisah Tengah
                DB::table('regions')->insert(['id'=>1051, 'parent'=>1049, 'code'=>'20113', 'type'=>'village', 'name'=>'Village 20113, Districts 2011, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1051, 'regionable_id'=>83615, 'regionable_type'=>'village']); //Sekip
                DB::table('regions')->insert(['id'=>1052, 'parent'=>1049, 'code'=>'20118', 'type'=>'village', 'name'=>'Village 20118, Districts 2011, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1052, 'regionable_id'=>83616, 'regionable_type'=>'village']); //Sei Putih Barat
                DB::table('regionables')->insert(['region_id'=>1052, 'regionable_id'=>83617, 'regionable_type'=>'village']); //Sei Putih Tengah
                DB::table('regionables')->insert(['region_id'=>1052, 'regionable_id'=>83618, 'regionable_type'=>'village']); //Sei Putih Timur I
                DB::table('regionables')->insert(['region_id'=>1052, 'regionable_id'=>83619, 'regionable_type'=>'village']); //Sei Putih Timur Ii
                DB::table('regions')->insert(['id'=>1053, 'parent'=>1049, 'code'=>'20119', 'type'=>'village', 'name'=>'Village 20119, Districts 2011, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1053, 'regionable_id'=>83620, 'regionable_type'=>'village']); //Sei Sikambing D
            DB::table('regions')->insert(['id'=>1054, 'parent'=>1048, 'code'=>'2012', 'type'=>'districts', 'name'=>'Districts 2012, City 201, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1054, 'regionable_id'=>7378, 'regionable_type'=>'districts']); //Medan Sunggal
            DB::table('regionables')->insert(['region_id'=>1054, 'regionable_id'=>7379, 'regionable_type'=>'districts']); //Medan Helvetia
                DB::table('regions')->insert(['id'=>1055, 'parent'=>1054, 'code'=>'20123', 'type'=>'village', 'name'=>'Village 20123, Districts 2012, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1055, 'regionable_id'=>83627, 'regionable_type'=>'village']); //Dwi Kora
                DB::table('regionables')->insert(['region_id'=>1055, 'regionable_id'=>83628, 'regionable_type'=>'village']); //Sei Sikambing C Ii
                DB::table('regions')->insert(['id'=>1056, 'parent'=>1054, 'code'=>'20124', 'type'=>'village', 'name'=>'Village 20124, Districts 2012, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1056, 'regionable_id'=>83629, 'regionable_type'=>'village']); //Helvetia
                DB::table('regionables')->insert(['region_id'=>1056, 'regionable_id'=>83630, 'regionable_type'=>'village']); //Helvetia Tengah
                DB::table('regionables')->insert(['region_id'=>1056, 'regionable_id'=>83631, 'regionable_type'=>'village']); //Helvetia Timur
                DB::table('regions')->insert(['id'=>1057, 'parent'=>1054, 'code'=>'20125', 'type'=>'village', 'name'=>'Village 20125, Districts 2012, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1057, 'regionable_id'=>83632, 'regionable_type'=>'village']); //Tanjung Gusta
                DB::table('regions')->insert(['id'=>1058, 'parent'=>1054, 'code'=>'20126', 'type'=>'village', 'name'=>'Village 20126, Districts 2012, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1058, 'regionable_id'=>83633, 'regionable_type'=>'village']); //Cinta Damai
            DB::table('regions')->insert(['id'=>1059, 'parent'=>1048, 'code'=>'2013', 'type'=>'districts', 'name'=>'Districts 2013, City 201, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1059, 'regionable_id'=>7380, 'regionable_type'=>'districts']); //Medan Selayang
            DB::table('regionables')->insert(['region_id'=>1059, 'regionable_id'=>7381, 'regionable_type'=>'districts']); //Medan Tuntungan
                DB::table('regions')->insert(['id'=>1060, 'parent'=>1059, 'code'=>'20134', 'type'=>'village', 'name'=>'Village 20134, Districts 2013, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1060, 'regionable_id'=>83640, 'regionable_type'=>'village']); //Tanjung Selamat
                DB::table('regions')->insert(['id'=>1061, 'parent'=>1059, 'code'=>'20135', 'type'=>'village', 'name'=>'Village 20135, Districts 2013, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1061, 'regionable_id'=>83641, 'regionable_type'=>'village']); //Simalingkar B
                DB::table('regionables')->insert(['region_id'=>1061, 'regionable_id'=>83642, 'regionable_type'=>'village']); //Simpang Selayang
                DB::table('regions')->insert(['id'=>1062, 'parent'=>1059, 'code'=>'20136', 'type'=>'village', 'name'=>'Village 20136, Districts 2013, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1062, 'regionable_id'=>83643, 'regionable_type'=>'village']); //Kemenangan Tani
                DB::table('regionables')->insert(['region_id'=>1062, 'regionable_id'=>83644, 'regionable_type'=>'village']); //Lau Cih
                DB::table('regionables')->insert(['region_id'=>1062, 'regionable_id'=>83645, 'regionable_type'=>'village']); //Namu Gajah
                DB::table('regions')->insert(['id'=>1063, 'parent'=>1059, 'code'=>'20137', 'type'=>'village', 'name'=>'Village 20137, Districts 2013, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1063, 'regionable_id'=>83646, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regions')->insert(['id'=>1064, 'parent'=>1059, 'code'=>'20138', 'type'=>'village', 'name'=>'Village 20138, Districts 2013, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1064, 'regionable_id'=>83647, 'regionable_type'=>'village']); //Ladang Bambu
            DB::table('regions')->insert(['id'=>1065, 'parent'=>1048, 'code'=>'2014', 'type'=>'districts', 'name'=>'Districts 2014, City 201, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1065, 'regionable_id'=>7381, 'regionable_type'=>'districts']); //Medan Tuntungan
            DB::table('regionables')->insert(['region_id'=>1065, 'regionable_id'=>7382, 'regionable_type'=>'districts']); //Medan Johor
            DB::table('regionables')->insert(['region_id'=>1065, 'regionable_id'=>7383, 'regionable_type'=>'districts']); //Medan Amplas
                DB::table('regions')->insert(['id'=>1066, 'parent'=>1065, 'code'=>'20147', 'type'=>'village', 'name'=>'Village 20147, Districts 2014, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1066, 'regionable_id'=>83655, 'regionable_type'=>'village']); //Harjosari I
                DB::table('regionables')->insert(['region_id'=>1066, 'regionable_id'=>83656, 'regionable_type'=>'village']); //Harjosari Ii
                DB::table('regions')->insert(['id'=>1067, 'parent'=>1065, 'code'=>'20148', 'type'=>'village', 'name'=>'Village 20148, Districts 2014, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1067, 'regionable_id'=>83657, 'regionable_type'=>'village']); //Timbang Deli
                DB::table('regions')->insert(['id'=>1068, 'parent'=>1065, 'code'=>'20149', 'type'=>'village', 'name'=>'Village 20149, Districts 2014, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1068, 'regionable_id'=>83658, 'regionable_type'=>'village']); //Bangun Mulia
            DB::table('regions')->insert(['id'=>1069, 'parent'=>1048, 'code'=>'2015', 'type'=>'districts', 'name'=>'Districts 2015, City 201, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1069, 'regionable_id'=>7384, 'regionable_type'=>'districts']); //Medan Maimun
            DB::table('regionables')->insert(['region_id'=>1069, 'regionable_id'=>7385, 'regionable_type'=>'districts']); //Medan Polonia
            DB::table('regionables')->insert(['region_id'=>1069, 'regionable_id'=>7386, 'regionable_type'=>'districts']); //Medan Baru
                DB::table('regions')->insert(['id'=>1070, 'parent'=>1069, 'code'=>'20153', 'type'=>'village', 'name'=>'Village 20153, Districts 2015, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1070, 'regionable_id'=>83673, 'regionable_type'=>'village']); //Darat
                DB::table('regionables')->insert(['region_id'=>1070, 'regionable_id'=>83674, 'regionable_type'=>'village']); //Petisah Hulu
                DB::table('regions')->insert(['id'=>1071, 'parent'=>1069, 'code'=>'20154', 'type'=>'village', 'name'=>'Village 20154, Districts 2015, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1071, 'regionable_id'=>83675, 'regionable_type'=>'village']); //Babura
                DB::table('regionables')->insert(['region_id'=>1071, 'regionable_id'=>83676, 'regionable_type'=>'village']); //Merdeka
                DB::table('regions')->insert(['id'=>1072, 'parent'=>1069, 'code'=>'20155', 'type'=>'village', 'name'=>'Village 20155, Districts 2015, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1072, 'regionable_id'=>83677, 'regionable_type'=>'village']); //Padang Bulan
                DB::table('regions')->insert(['id'=>1073, 'parent'=>1069, 'code'=>'20156', 'type'=>'village', 'name'=>'Village 20156, Districts 2015, City 201, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1073, 'regionable_id'=>83678, 'regionable_type'=>'village']); //Titi Rantai/rante
        DB::table('regions')->insert(['id'=>1074, 'parent'=>546, 'code'=>'202', 'type'=>'city', 'name'=>'City 202, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1074, 'regionable_id'=>469, 'regionable_type'=>'city']); //Medan city
            DB::table('regions')->insert(['id'=>1075, 'parent'=>1074, 'code'=>'2021', 'type'=>'districts', 'name'=>'Districts 2021, City 202, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1075, 'regionable_id'=>7383, 'regionable_type'=>'districts']); //Medan Amplas
            DB::table('regionables')->insert(['region_id'=>1075, 'regionable_id'=>7387, 'regionable_type'=>'districts']); //Medan Kota
            DB::table('regionables')->insert(['region_id'=>1075, 'regionable_id'=>7388, 'regionable_type'=>'districts']); //Medan Area
                DB::table('regions')->insert(['id'=>1076, 'parent'=>1075, 'code'=>'20211', 'type'=>'village', 'name'=>'Village 20211, Districts 2021, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1076, 'regionable_id'=>83679, 'regionable_type'=>'village']); //Pandau Hulu I
                DB::table('regionables')->insert(['region_id'=>1076, 'regionable_id'=>83691, 'regionable_type'=>'village']); //Pandau Hulu Ii
                DB::table('regions')->insert(['id'=>1077, 'parent'=>1075, 'code'=>'20214', 'type'=>'village', 'name'=>'Village 20214, Districts 2021, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1077, 'regionable_id'=>83683, 'regionable_type'=>'village']); //Sei Rengas I
                DB::table('regionables')->insert(['region_id'=>1077, 'regionable_id'=>83692, 'regionable_type'=>'village']); //Sei Rengas Ii
                DB::table('regionables')->insert(['region_id'=>1077, 'regionable_id'=>83693, 'regionable_type'=>'village']); //Sei Rengas Permata
                DB::table('regions')->insert(['id'=>1078, 'parent'=>1075, 'code'=>'20215', 'type'=>'village', 'name'=>'Village 20215, Districts 2021, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1078, 'regionable_id'=>83684, 'regionable_type'=>'village']); //Kota Matsum Iii
                DB::table('regionables')->insert(['region_id'=>1078, 'regionable_id'=>83694, 'regionable_type'=>'village']); //Kota Matsum I
                DB::table('regionables')->insert(['region_id'=>1078, 'regionable_id'=>83695, 'regionable_type'=>'village']); //Kota Matsum Ii
                DB::table('regionables')->insert(['region_id'=>1078, 'regionable_id'=>83696, 'regionable_type'=>'village']); //Kota Matsum Iv
                DB::table('regions')->insert(['id'=>1079, 'parent'=>1075, 'code'=>'20216', 'type'=>'village', 'name'=>'Village 20216, Districts 2021, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1079, 'regionable_id'=>83697, 'regionable_type'=>'village']); //Sukaramai I
                DB::table('regionables')->insert(['region_id'=>1079, 'regionable_id'=>83698, 'regionable_type'=>'village']); //Sukaramai Ii
                DB::table('regionables')->insert(['region_id'=>1079, 'regionable_id'=>83699, 'regionable_type'=>'village']); //Tegal Sari I
                DB::table('regionables')->insert(['region_id'=>1079, 'regionable_id'=>83700, 'regionable_type'=>'village']); //Tegal Sari Ii
                DB::table('regionables')->insert(['region_id'=>1079, 'regionable_id'=>83701, 'regionable_type'=>'village']); //Tegal Sari Iii
                DB::table('regions')->insert(['id'=>1080, 'parent'=>1075, 'code'=>'20217', 'type'=>'village', 'name'=>'Village 20217, Districts 2021, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1080, 'regionable_id'=>83685, 'regionable_type'=>'village']); //Pasar Merah Barat
                DB::table('regionables')->insert(['region_id'=>1080, 'regionable_id'=>83686, 'regionable_type'=>'village']); //Teladan Barat
                DB::table('regionables')->insert(['region_id'=>1080, 'regionable_id'=>83687, 'regionable_type'=>'village']); //Teladan Timur
                DB::table('regionables')->insert(['region_id'=>1080, 'regionable_id'=>83702, 'regionable_type'=>'village']); //Pasar Merah Timur
            DB::table('regions')->insert(['id'=>1081, 'parent'=>1074, 'code'=>'2022', 'type'=>'districts', 'name'=>'Districts 2022, City 202, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1081, 'regionable_id'=>7383, 'regionable_type'=>'districts']); //Medan Amplas
            DB::table('regionables')->insert(['region_id'=>1081, 'regionable_id'=>7389, 'regionable_type'=>'districts']); //Medan Tembung
            DB::table('regionables')->insert(['region_id'=>1081, 'regionable_id'=>7390, 'regionable_type'=>'districts']); //Medan Denai
                DB::table('regions')->insert(['id'=>1082, 'parent'=>1081, 'code'=>'20226', 'type'=>'village', 'name'=>'Village 20226, Districts 2022, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1082, 'regionable_id'=>83710, 'regionable_type'=>'village']); //Tegal Sari Mandala I
                DB::table('regionables')->insert(['region_id'=>1082, 'regionable_id'=>83711, 'regionable_type'=>'village']); //Tegal Sari Mandala Ii
                DB::table('regionables')->insert(['region_id'=>1082, 'regionable_id'=>83712, 'regionable_type'=>'village']); //Tegal Sari Mandala Iii
                DB::table('regions')->insert(['id'=>1083, 'parent'=>1081, 'code'=>'20227', 'type'=>'village', 'name'=>'Village 20227, Districts 2022, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1083, 'regionable_id'=>83713, 'regionable_type'=>'village']); //Denai
                DB::table('regions')->insert(['id'=>1084, 'parent'=>1081, 'code'=>'20228', 'type'=>'village', 'name'=>'Village 20228, Districts 2022, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1084, 'regionable_id'=>83714, 'regionable_type'=>'village']); //Binjai
                DB::table('regionables')->insert(['region_id'=>1084, 'regionable_id'=>83715, 'regionable_type'=>'village']); //Medan Tenggara
            DB::table('regions')->insert(['id'=>1085, 'parent'=>1074, 'code'=>'2023', 'type'=>'districts', 'name'=>'Districts 2023, City 202, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1085, 'regionable_id'=>7391, 'regionable_type'=>'districts']); //Medan Timur
            DB::table('regionables')->insert(['region_id'=>1085, 'regionable_id'=>7392, 'regionable_type'=>'districts']); //Medan Perjuangan
                DB::table('regions')->insert(['id'=>1086, 'parent'=>1085, 'code'=>'20232', 'type'=>'village', 'name'=>'Village 20232, Districts 2023, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1086, 'regionable_id'=>83727, 'regionable_type'=>'village']); //Pandau Hilir
                DB::table('regions')->insert(['id'=>1087, 'parent'=>1085, 'code'=>'20233', 'type'=>'village', 'name'=>'Village 20233, Districts 2023, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1087, 'regionable_id'=>83728, 'regionable_type'=>'village']); //Pahlawan
                DB::table('regionables')->insert(['region_id'=>1087, 'regionable_id'=>83729, 'regionable_type'=>'village']); //Sei Kera Hulu
                DB::table('regionables')->insert(['region_id'=>1087, 'regionable_id'=>83730, 'regionable_type'=>'village']); //Sei Kerah Hilir I
                DB::table('regionables')->insert(['region_id'=>1087, 'regionable_id'=>83731, 'regionable_type'=>'village']); //Sei Kerah Hilir Ii
                DB::table('regions')->insert(['id'=>1088, 'parent'=>1085, 'code'=>'20236', 'type'=>'village', 'name'=>'Village 20236, Districts 2023, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1088, 'regionable_id'=>83732, 'regionable_type'=>'village']); //Sidorame Barat I
                DB::table('regionables')->insert(['region_id'=>1088, 'regionable_id'=>83733, 'regionable_type'=>'village']); //Sidorame Barat Ii
                DB::table('regionables')->insert(['region_id'=>1088, 'regionable_id'=>83734, 'regionable_type'=>'village']); //Sidorame Timur
                DB::table('regions')->insert(['id'=>1089, 'parent'=>1085, 'code'=>'20237', 'type'=>'village', 'name'=>'Village 20237, Districts 2023, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1089, 'regionable_id'=>83735, 'regionable_type'=>'village']); //Tegal Rejo
            DB::table('regions')->insert(['id'=>1090, 'parent'=>1074, 'code'=>'2024', 'type'=>'districts', 'name'=>'Districts 2024, City 202, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1090, 'regionable_id'=>7393, 'regionable_type'=>'districts']); //Medan Deli
            DB::table('regionables')->insert(['region_id'=>1090, 'regionable_id'=>7394, 'regionable_type'=>'districts']); //Medan Marelan
                DB::table('regions')->insert(['id'=>1091, 'parent'=>1090, 'code'=>'20245', 'type'=>'village', 'name'=>'Village 20245, Districts 2024, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1091, 'regionable_id'=>83742, 'regionable_type'=>'village']); //Tanah Enam Ratus
            DB::table('regions')->insert(['id'=>1092, 'parent'=>1074, 'code'=>'2025', 'type'=>'districts', 'name'=>'Districts 2025, City 202, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1092, 'regionable_id'=>7394, 'regionable_type'=>'districts']); //Medan Marelan
            DB::table('regionables')->insert(['region_id'=>1092, 'regionable_id'=>7395, 'regionable_type'=>'districts']); //Medan Labuhan
                DB::table('regions')->insert(['id'=>1093, 'parent'=>1092, 'code'=>'20251', 'type'=>'village', 'name'=>'Village 20251, Districts 2025, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1093, 'regionable_id'=>83747, 'regionable_type'=>'village']); //Besar
                DB::table('regions')->insert(['id'=>1094, 'parent'=>1092, 'code'=>'20252', 'type'=>'village', 'name'=>'Village 20252, Districts 2025, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1094, 'regionable_id'=>83748, 'regionable_type'=>'village']); //Martubung
                DB::table('regionables')->insert(['region_id'=>1094, 'regionable_id'=>83749, 'regionable_type'=>'village']); //Sei Mati
                DB::table('regions')->insert(['id'=>1095, 'parent'=>1092, 'code'=>'20253', 'type'=>'village', 'name'=>'Village 20253, Districts 2025, City 202, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1095, 'regionable_id'=>83750, 'regionable_type'=>'village']); //Pekan Labuhan
        DB::table('regions')->insert(['id'=>1096, 'parent'=>546, 'code'=>'203', 'type'=>'city', 'name'=>'City 203, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1096, 'regionable_id'=>470, 'regionable_type'=>'city']); //Deli Serdang regencies
            DB::table('regions')->insert(['id'=>1097, 'parent'=>1096, 'code'=>'2035', 'type'=>'districts', 'name'=>'Districts 2035, City 203, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1097, 'regionable_id'=>7397, 'regionable_type'=>'districts']); //Sunggal
            DB::table('regionables')->insert(['region_id'=>1097, 'regionable_id'=>7398, 'regionable_type'=>'districts']); //Pancur Batu
            DB::table('regionables')->insert(['region_id'=>1097, 'regionable_id'=>7399, 'regionable_type'=>'districts']); //Kutalimbaru
            DB::table('regionables')->insert(['region_id'=>1097, 'regionable_id'=>7400, 'regionable_type'=>'districts']); //Deli Tua
            DB::table('regionables')->insert(['region_id'=>1097, 'regionable_id'=>7401, 'regionable_type'=>'districts']); //Namo Rambe
            DB::table('regionables')->insert(['region_id'=>1097, 'regionable_id'=>7402, 'regionable_type'=>'districts']); //Sibolangit
            DB::table('regionables')->insert(['region_id'=>1097, 'regionable_id'=>7403, 'regionable_type'=>'districts']); //Biru-biru
                DB::table('regions')->insert(['id'=>1098, 'parent'=>1097, 'code'=>'20358', 'type'=>'village', 'name'=>'Village 20358, Districts 2035, City 203, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83887, 'regionable_type'=>'village']); //Aji Baho
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83888, 'regionable_type'=>'village']); //Biru-biru
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83889, 'regionable_type'=>'village']); //Candi Rejo
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83890, 'regionable_type'=>'village']); //Kuala Dekah
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83891, 'regionable_type'=>'village']); //Kuta Mulyo
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83892, 'regionable_type'=>'village']); //Madinding Julu
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83893, 'regionable_type'=>'village']); //Mbaruae (mbaruai)
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83894, 'regionable_type'=>'village']); //Namo Suro Baru
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83895, 'regionable_type'=>'village']); //Namo Tualang
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83896, 'regionable_type'=>'village']); //Penen
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83897, 'regionable_type'=>'village']); //Per Ria Ria
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83898, 'regionable_type'=>'village']); //Rumah Gerat
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83899, 'regionable_type'=>'village']); //Sari Laba Jahe
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83900, 'regionable_type'=>'village']); //Selamat (kampung Selamat)
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83901, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83902, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>1098, 'regionable_id'=>83903, 'regionable_type'=>'village']); //Tanjung Sena
            DB::table('regions')->insert(['id'=>1099, 'parent'=>1096, 'code'=>'2036', 'type'=>'districts', 'name'=>'Districts 2036, City 203, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1099, 'regionable_id'=>7404, 'regionable_type'=>'districts']); //Patumbak
            DB::table('regionables')->insert(['region_id'=>1099, 'regionable_id'=>7405, 'regionable_type'=>'districts']); //Tanjung Morawa
            DB::table('regionables')->insert(['region_id'=>1099, 'regionable_id'=>7406, 'regionable_type'=>'districts']); //Sinembah Tanjung Muda Hilir
                DB::table('regions')->insert(['id'=>1100, 'parent'=>1099, 'code'=>'20363', 'type'=>'village', 'name'=>'Village 20363, Districts 2036, City 203, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83938, 'regionable_type'=>'village']); //Gunung Rintis
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83939, 'regionable_type'=>'village']); //Juma/jumma Tombak
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83940, 'regionable_type'=>'village']); //Kuta Jurung
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83941, 'regionable_type'=>'village']); //Lau Barus Baru
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83942, 'regionable_type'=>'village']); //Lau Rakit
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83943, 'regionable_type'=>'village']); //Lau Rempah
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83944, 'regionable_type'=>'village']); //Limau Mungkur
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83945, 'regionable_type'=>'village']); //Negara Beringin/bringin
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83946, 'regionable_type'=>'village']); //Penungkiren
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83947, 'regionable_type'=>'village']); //Rambai
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83948, 'regionable_type'=>'village']); //Siguci
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83949, 'regionable_type'=>'village']); //Sumbul
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83950, 'regionable_type'=>'village']); //Tadukan Raga
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83951, 'regionable_type'=>'village']); //Tala Peta
                DB::table('regionables')->insert(['region_id'=>1100, 'regionable_id'=>83952, 'regionable_type'=>'village']); //Telun Kenas
            DB::table('regions')->insert(['id'=>1101, 'parent'=>1096, 'code'=>'2037', 'type'=>'districts', 'name'=>'Districts 2037, City 203, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1101, 'regionable_id'=>7407, 'regionable_type'=>'districts']); //Percut Sei Tuan
            DB::table('regionables')->insert(['region_id'=>1101, 'regionable_id'=>7408, 'regionable_type'=>'districts']); //Batang Kuis
            DB::table('regionables')->insert(['region_id'=>1101, 'regionable_id'=>7409, 'regionable_type'=>'districts']); //Labuhan Deli
            DB::table('regionables')->insert(['region_id'=>1101, 'regionable_id'=>7410, 'regionable_type'=>'districts']); //Hamparan Perak
                DB::table('regions')->insert(['id'=>1102, 'parent'=>1101, 'code'=>'20374', 'type'=>'village', 'name'=>'Village 20374, Districts 2037, City 203, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83989, 'regionable_type'=>'village']); //Bulu Cina
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83990, 'regionable_type'=>'village']); //Desa Lama (kampung Lama)
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83991, 'regionable_type'=>'village']); //Hamparan Perak
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83992, 'regionable_type'=>'village']); //Klambir
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83993, 'regionable_type'=>'village']); //Klambir Lima Kampung
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83994, 'regionable_type'=>'village']); //Klambir Lima Kebon
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83995, 'regionable_type'=>'village']); //Klumpang Kampung
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83996, 'regionable_type'=>'village']); //Klumpang Kebon
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83997, 'regionable_type'=>'village']); //Kota Datar
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83998, 'regionable_type'=>'village']); //Kota Pantang (rantang)
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>83999, 'regionable_type'=>'village']); //Paluh Kurau
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84000, 'regionable_type'=>'village']); //Paluh Manan
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84001, 'regionable_type'=>'village']); //Paya Bakung
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84002, 'regionable_type'=>'village']); //Sei/sungai Baharu
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84003, 'regionable_type'=>'village']); //Selemak
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84004, 'regionable_type'=>'village']); //Sialang Muda
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84005, 'regionable_type'=>'village']); //Tandam/tandem Hilir Dua
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84006, 'regionable_type'=>'village']); //Tandam/tandem Hilir Satu
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84007, 'regionable_type'=>'village']); //Tandam/tandem Hulu Dua
                DB::table('regionables')->insert(['region_id'=>1102, 'regionable_id'=>84008, 'regionable_type'=>'village']); //Tandam/tandem Hulu Satu
        DB::table('regions')->insert(['id'=>1103, 'parent'=>546, 'code'=>'204', 'type'=>'city', 'name'=>'City 204, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1103, 'regionable_id'=>469, 'regionable_type'=>'city']); //Medan city
            DB::table('regions')->insert(['id'=>1104, 'parent'=>1103, 'code'=>'2041', 'type'=>'districts', 'name'=>'Districts 2041, City 204, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1104, 'regionable_id'=>7396, 'regionable_type'=>'districts']); //Medan Belawan Kota
                DB::table('regions')->insert(['id'=>1105, 'parent'=>1104, 'code'=>'20411', 'type'=>'village', 'name'=>'Village 20411, Districts 2041, City 204, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1105, 'regionable_id'=>83753, 'regionable_type'=>'village']); //Belawan I
                DB::table('regions')->insert(['id'=>1106, 'parent'=>1104, 'code'=>'20412', 'type'=>'village', 'name'=>'Village 20412, Districts 2041, City 204, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1106, 'regionable_id'=>83754, 'regionable_type'=>'village']); //Belawan Ii
                DB::table('regionables')->insert(['region_id'=>1106, 'regionable_id'=>83755, 'regionable_type'=>'village']); //Belawan Sicanang
                DB::table('regions')->insert(['id'=>1107, 'parent'=>1104, 'code'=>'20414', 'type'=>'village', 'name'=>'Village 20414, Districts 2041, City 204, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1107, 'regionable_id'=>83756, 'regionable_type'=>'village']); //Bagan Deli
                DB::table('regionables')->insert(['region_id'=>1107, 'regionable_id'=>83757, 'regionable_type'=>'village']); //Belawan Bahari
                DB::table('regions')->insert(['id'=>1108, 'parent'=>1104, 'code'=>'20415', 'type'=>'village', 'name'=>'Village 20415, Districts 2041, City 204, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1108, 'regionable_id'=>83758, 'regionable_type'=>'village']); //Belawan Bahagia
        DB::table('regions')->insert(['id'=>1109, 'parent'=>546, 'code'=>'205', 'type'=>'city', 'name'=>'City 205, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1109, 'regionable_id'=>469, 'regionable_type'=>'city']); //Medan city
        DB::table('regionables')->insert(['region_id'=>1109, 'regionable_id'=>470, 'regionable_type'=>'city']); //Deli Serdang regencies
            DB::table('regions')->insert(['id'=>1110, 'parent'=>1109, 'code'=>'2051', 'type'=>'districts', 'name'=>'Districts 2051, City 205, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1110, 'regionable_id'=>7411, 'regionable_type'=>'districts']); //Lubuk Pakam
                DB::table('regions')->insert(['id'=>1111, 'parent'=>1110, 'code'=>'20511', 'type'=>'village', 'name'=>'Village 20511, Districts 2051, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1111, 'regionable_id'=>84009, 'regionable_type'=>'village']); //Bakaran Batu
                DB::table('regionables')->insert(['region_id'=>1111, 'regionable_id'=>84010, 'regionable_type'=>'village']); //Lubuk Pakam I-ii
                DB::table('regionables')->insert(['region_id'=>1111, 'regionable_id'=>84011, 'regionable_type'=>'village']); //Tanjung Garbus
                DB::table('regions')->insert(['id'=>1112, 'parent'=>1110, 'code'=>'20512', 'type'=>'village', 'name'=>'Village 20512, Districts 2051, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1112, 'regionable_id'=>84012, 'regionable_type'=>'village']); //Lubuk Pakam Pekan
                DB::table('regions')->insert(['id'=>1113, 'parent'=>1110, 'code'=>'20513', 'type'=>'village', 'name'=>'Village 20513, Districts 2051, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1113, 'regionable_id'=>84013, 'regionable_type'=>'village']); //Paluh Kemiri
                DB::table('regions')->insert(['id'=>1114, 'parent'=>1110, 'code'=>'20514', 'type'=>'village', 'name'=>'Village 20514, Districts 2051, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1114, 'regionable_id'=>84014, 'regionable_type'=>'village']); //Petapahan
                DB::table('regions')->insert(['id'=>1115, 'parent'=>1110, 'code'=>'20515', 'type'=>'village', 'name'=>'Village 20515, Districts 2051, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1115, 'regionable_id'=>84015, 'regionable_type'=>'village']); //Pagar Merbau Tiga
                DB::table('regionables')->insert(['region_id'=>1115, 'regionable_id'=>84016, 'regionable_type'=>'village']); //Syahmad
                DB::table('regions')->insert(['id'=>1116, 'parent'=>1110, 'code'=>'20516', 'type'=>'village', 'name'=>'Village 20516, Districts 2051, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1116, 'regionable_id'=>84017, 'regionable_type'=>'village']); //Lubuk Pakam Tiga
                DB::table('regions')->insert(['id'=>1117, 'parent'=>1110, 'code'=>'20517', 'type'=>'village', 'name'=>'Village 20517, Districts 2051, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1117, 'regionable_id'=>84018, 'regionable_type'=>'village']); //Cemara
                DB::table('regionables')->insert(['region_id'=>1117, 'regionable_id'=>84019, 'regionable_type'=>'village']); //Sekip
                DB::table('regions')->insert(['id'=>1118, 'parent'=>1110, 'code'=>'20518', 'type'=>'village', 'name'=>'Village 20518, Districts 2051, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1118, 'regionable_id'=>84020, 'regionable_type'=>'village']); //Pagar Jati
                DB::table('regionables')->insert(['region_id'=>1118, 'regionable_id'=>84021, 'regionable_type'=>'village']); //Pasar Melintang
            DB::table('regions')->insert(['id'=>1119, 'parent'=>1109, 'code'=>'2055', 'type'=>'districts', 'name'=>'Districts 2055, City 205, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1119, 'regionable_id'=>7412, 'regionable_type'=>'districts']); //Pagar Merbau
            DB::table('regionables')->insert(['region_id'=>1119, 'regionable_id'=>7413, 'regionable_type'=>'districts']); //Beringin
            DB::table('regionables')->insert(['region_id'=>1119, 'regionable_id'=>7414, 'regionable_type'=>'districts']); //Pantai Labu
                DB::table('regions')->insert(['id'=>1120, 'parent'=>1119, 'code'=>'20553', 'type'=>'village', 'name'=>'Village 20553, Districts 2055, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84049, 'regionable_type'=>'village']); //Bagan Serdang
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84050, 'regionable_type'=>'village']); //Binjai Bakung
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84051, 'regionable_type'=>'village']); //Denai Kuala
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84052, 'regionable_type'=>'village']); //Denai Lama
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84053, 'regionable_type'=>'village']); //Denai Sarang Burung
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84054, 'regionable_type'=>'village']); //Durian
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84055, 'regionable_type'=>'village']); //Kelambir
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84056, 'regionable_type'=>'village']); //Kubah Sentang
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84057, 'regionable_type'=>'village']); //Paluh Sebaji
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84058, 'regionable_type'=>'village']); //Pantai Labu Baru
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84059, 'regionable_type'=>'village']); //Pantai Labu Pekan
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84060, 'regionable_type'=>'village']); //Pematang Biara
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84061, 'regionable_type'=>'village']); //Perkebunan Ramonia (ramunia)
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84062, 'regionable_type'=>'village']); //Ramonia I (ramunia Satu)
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84063, 'regionable_type'=>'village']); //Ramonia Ii (ramunia Dua)
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84064, 'regionable_type'=>'village']); //Rantau Panjang
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84065, 'regionable_type'=>'village']); //Regemuk
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84066, 'regionable_type'=>'village']); //Sei Tuan
                DB::table('regionables')->insert(['region_id'=>1120, 'regionable_id'=>84067, 'regionable_type'=>'village']); //Tengah (kampung Tengah)
            DB::table('regions')->insert(['id'=>1121, 'parent'=>1109, 'code'=>'2058', 'type'=>'districts', 'name'=>'Districts 2058, City 205, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1121, 'regionable_id'=>7415, 'regionable_type'=>'districts']); //Bangun Purba
            DB::table('regionables')->insert(['region_id'=>1121, 'regionable_id'=>7416, 'regionable_type'=>'districts']); //Sinembah Tanjung Muda Hulu
            DB::table('regionables')->insert(['region_id'=>1121, 'regionable_id'=>7417, 'regionable_type'=>'districts']); //Gunung Meriah
            DB::table('regionables')->insert(['region_id'=>1121, 'regionable_id'=>7418, 'regionable_type'=>'districts']); //Galang
                DB::table('regions')->insert(['id'=>1122, 'parent'=>1121, 'code'=>'20585', 'type'=>'village', 'name'=>'Village 20585, Districts 2058, City 205, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84124, 'regionable_type'=>'village']); //Bandar Kuala
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84125, 'regionable_type'=>'village']); //Baru Titi Besi
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84126, 'regionable_type'=>'village']); //Batu Lokong
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84127, 'regionable_type'=>'village']); //Galang Barat
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84128, 'regionable_type'=>'village']); //Galang Kota
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84129, 'regionable_type'=>'village']); //Galang Suka
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84130, 'regionable_type'=>'village']); //Jaharum A
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84131, 'regionable_type'=>'village']); //Jaharum B
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84132, 'regionable_type'=>'village']); //Juhar Baru
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84133, 'regionable_type'=>'village']); //Kelapa Satu
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84134, 'regionable_type'=>'village']); //Keramat Gajah
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84135, 'regionable_type'=>'village']); //Kotangan
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84136, 'regionable_type'=>'village']); //Kotasan
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84137, 'regionable_type'=>'village']); //Nogorejo
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84138, 'regionable_type'=>'village']); //Paku
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84139, 'regionable_type'=>'village']); //Paya Itik
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84140, 'regionable_type'=>'village']); //Paya Kuda
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84141, 'regionable_type'=>'village']); //Paya Sampir
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84142, 'regionable_type'=>'village']); //Petangguhan
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84143, 'regionable_type'=>'village']); //Petumbukan
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84144, 'regionable_type'=>'village']); //Pisang Pala
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84145, 'regionable_type'=>'village']); //Pulau Tagor Batu
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84146, 'regionable_type'=>'village']); //Sei Karang
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84147, 'regionable_type'=>'village']); //Sei Putih
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84148, 'regionable_type'=>'village']); //Tanah Abang
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84149, 'regionable_type'=>'village']); //Tanah Merah
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84150, 'regionable_type'=>'village']); //Tanjung Gusti
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84151, 'regionable_type'=>'village']); //Tanjung Siporkis
                DB::table('regionables')->insert(['region_id'=>1122, 'regionable_id'=>84152, 'regionable_type'=>'village']); //Timbang Deli
        DB::table('regions')->insert(['id'=>1123, 'parent'=>546, 'code'=>'206', 'type'=>'city', 'name'=>'City 206, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1123, 'regionable_id'=>471, 'regionable_type'=>'city']); //Tebing Tinggi city
            DB::table('regions')->insert(['id'=>1124, 'parent'=>1123, 'code'=>'2061', 'type'=>'districts', 'name'=>'Districts 2061, City 206, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1124, 'regionable_id'=>7419, 'regionable_type'=>'districts']); //Bajenis
            DB::table('regionables')->insert(['region_id'=>1124, 'regionable_id'=>7420, 'regionable_type'=>'districts']); //Rambutan
            DB::table('regionables')->insert(['region_id'=>1124, 'regionable_id'=>7421, 'regionable_type'=>'districts']); //Tebing Tinggi Kota
                DB::table('regions')->insert(['id'=>1125, 'parent'=>1124, 'code'=>'20613', 'type'=>'village', 'name'=>'Village 20613, Districts 2061, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1125, 'regionable_id'=>84157, 'regionable_type'=>'village']); //Bandar Sakti
                DB::table('regionables')->insert(['region_id'=>1125, 'regionable_id'=>84167, 'regionable_type'=>'village']); //Bandar Utama
                DB::table('regions')->insert(['id'=>1126, 'parent'=>1124, 'code'=>'20615', 'type'=>'village', 'name'=>'Village 20615, Districts 2061, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1126, 'regionable_id'=>84168, 'regionable_type'=>'village']); //Badak Bejuang
            DB::table('regions')->insert(['id'=>1127, 'parent'=>1123, 'code'=>'2062', 'type'=>'districts', 'name'=>'Districts 2062, City 206, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1127, 'regionable_id'=>7419, 'regionable_type'=>'districts']); //Bajenis
            DB::table('regionables')->insert(['region_id'=>1127, 'regionable_id'=>7421, 'regionable_type'=>'districts']); //Tebing Tinggi Kota
            DB::table('regionables')->insert(['region_id'=>1127, 'regionable_id'=>7422, 'regionable_type'=>'districts']); //Padang Hulu
                DB::table('regions')->insert(['id'=>1128, 'parent'=>1127, 'code'=>'20622', 'type'=>'village', 'name'=>'Village 20622, Districts 2062, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1128, 'regionable_id'=>84174, 'regionable_type'=>'village']); //Lubuk Baru
                DB::table('regions')->insert(['id'=>1129, 'parent'=>1127, 'code'=>'20623', 'type'=>'village', 'name'=>'Village 20623, Districts 2062, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1129, 'regionable_id'=>84175, 'regionable_type'=>'village']); //Pabatu
                DB::table('regions')->insert(['id'=>1130, 'parent'=>1127, 'code'=>'20624', 'type'=>'village', 'name'=>'Village 20624, Districts 2062, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1130, 'regionable_id'=>84176, 'regionable_type'=>'village']); //Lubuk Raya
                DB::table('regionables')->insert(['region_id'=>1130, 'regionable_id'=>84177, 'regionable_type'=>'village']); //Padang Merbau
                DB::table('regionables')->insert(['region_id'=>1130, 'regionable_id'=>84178, 'regionable_type'=>'village']); //Persiakan
                DB::table('regionables')->insert(['region_id'=>1130, 'regionable_id'=>84179, 'regionable_type'=>'village']); //Tualang
                DB::table('regions')->insert(['id'=>1131, 'parent'=>1127, 'code'=>'20625', 'type'=>'village', 'name'=>'Village 20625, Districts 2062, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1131, 'regionable_id'=>84180, 'regionable_type'=>'village']); //Bandarsono
            DB::table('regions')->insert(['id'=>1132, 'parent'=>1123, 'code'=>'2063', 'type'=>'districts', 'name'=>'Districts 2063, City 206, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1132, 'regionable_id'=>7421, 'regionable_type'=>'districts']); //Tebing Tinggi Kota
            DB::table('regionables')->insert(['region_id'=>1132, 'regionable_id'=>7423, 'regionable_type'=>'districts']); //Padang Hilir
                DB::table('regions')->insert(['id'=>1133, 'parent'=>1132, 'code'=>'20631', 'type'=>'village', 'name'=>'Village 20631, Districts 2063, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1133, 'regionable_id'=>84181, 'regionable_type'=>'village']); //Tambangan
                DB::table('regionables')->insert(['region_id'=>1133, 'regionable_id'=>84182, 'regionable_type'=>'village']); //Tebing Tinggi
                DB::table('regions')->insert(['id'=>1134, 'parent'=>1132, 'code'=>'20634', 'type'=>'village', 'name'=>'Village 20634, Districts 2063, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1134, 'regionable_id'=>84183, 'regionable_type'=>'village']); //Bagelen
                DB::table('regions')->insert(['id'=>1135, 'parent'=>1132, 'code'=>'20636', 'type'=>'village', 'name'=>'Village 20636, Districts 2063, City 206, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1135, 'regionable_id'=>84184, 'regionable_type'=>'village']); //Damar Sari
                DB::table('regionables')->insert(['region_id'=>1135, 'regionable_id'=>84185, 'regionable_type'=>'village']); //Deblod Sundoro
                DB::table('regionables')->insert(['region_id'=>1135, 'regionable_id'=>84186, 'regionable_type'=>'village']); //Satria
                DB::table('regionables')->insert(['region_id'=>1135, 'regionable_id'=>84187, 'regionable_type'=>'village']); //Tambangan Hulu
        DB::table('regions')->insert(['id'=>1136, 'parent'=>546, 'code'=>'207', 'type'=>'city', 'name'=>'City 207, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1136, 'regionable_id'=>472, 'regionable_type'=>'city']); //Binjai city
        DB::table('regionables')->insert(['region_id'=>1136, 'regionable_id'=>473, 'regionable_type'=>'city']); //Langkat regencies
            DB::table('regions')->insert(['id'=>1137, 'parent'=>1136, 'code'=>'2076', 'type'=>'districts', 'name'=>'Districts 2076, City 207, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1137, 'regionable_id'=>7429, 'regionable_type'=>'districts']); //Binjai
            DB::table('regionables')->insert(['region_id'=>1137, 'regionable_id'=>7430, 'regionable_type'=>'districts']); //Selesai
                DB::table('regions')->insert(['id'=>1138, 'parent'=>1137, 'code'=>'20762', 'type'=>'village', 'name'=>'Village 20762, Districts 2076, City 207, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84232, 'regionable_type'=>'village']); //Bekulap
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84233, 'regionable_type'=>'village']); //Kuta Parit
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84234, 'regionable_type'=>'village']); //Kwala/kuala Air Hitam
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84235, 'regionable_type'=>'village']); //Lau Mulgap
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84236, 'regionable_type'=>'village']); //Mancang
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84237, 'regionable_type'=>'village']); //Nambiki
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84238, 'regionable_type'=>'village']); //Padang Brahrang
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84239, 'regionable_type'=>'village']); //Padang Cermin
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84240, 'regionable_type'=>'village']); //Pekan Selesai
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84241, 'regionable_type'=>'village']); //Perhiasan
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84242, 'regionable_type'=>'village']); //Sei Limbat
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84243, 'regionable_type'=>'village']); //Selayang
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84244, 'regionable_type'=>'village']); //Selayang Baru
                DB::table('regionables')->insert(['region_id'=>1138, 'regionable_id'=>84245, 'regionable_type'=>'village']); //Tanjung Merahe
            DB::table('regions')->insert(['id'=>1139, 'parent'=>1136, 'code'=>'2077', 'type'=>'districts', 'name'=>'Districts 2077, City 207, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1139, 'regionable_id'=>7431, 'regionable_type'=>'districts']); //Sei Binge (bingai)
            DB::table('regionables')->insert(['region_id'=>1139, 'regionable_id'=>7432, 'regionable_type'=>'districts']); //Sirapit (serapit)
            DB::table('regionables')->insert(['region_id'=>1139, 'regionable_id'=>7433, 'regionable_type'=>'districts']); //Kuala
            DB::table('regionables')->insert(['region_id'=>1139, 'regionable_id'=>7434, 'regionable_type'=>'districts']); //Salapian
            DB::table('regionables')->insert(['region_id'=>1139, 'regionable_id'=>7435, 'regionable_type'=>'districts']); //Sei Lepan
            DB::table('regionables')->insert(['region_id'=>1139, 'regionable_id'=>7436, 'regionable_type'=>'districts']); //Kutambaru
            DB::table('regionables')->insert(['region_id'=>1139, 'regionable_id'=>7437, 'regionable_type'=>'districts']); //Bahorok
                DB::table('regions')->insert(['id'=>1140, 'parent'=>1139, 'code'=>'20774', 'type'=>'village', 'name'=>'Village 20774, Districts 2077, City 207, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84269, 'regionable_type'=>'village']); //Perkebunan Amaltani
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84270, 'regionable_type'=>'village']); //Sebertung
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84271, 'regionable_type'=>'village']); //Sumber Jaya
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84327, 'regionable_type'=>'village']); //Batu Jongjong
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84328, 'regionable_type'=>'village']); //Empus
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84329, 'regionable_type'=>'village']); //Lau Damak
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84330, 'regionable_type'=>'village']); //Musam Pembangunan
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84331, 'regionable_type'=>'village']); //Pekan Bahorok
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84332, 'regionable_type'=>'village']); //Perkebunan Bukit Lawang
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84333, 'regionable_type'=>'village']); //Perkebunan Bungara
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84334, 'regionable_type'=>'village']); //Perkebunan Pulau Rambung
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84335, 'regionable_type'=>'village']); //Perkebunan Sei Musam
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84336, 'regionable_type'=>'village']); //Perkebunan Turangi
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84337, 'regionable_type'=>'village']); //Sampe Raya
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84338, 'regionable_type'=>'village']); //Sei Musam Kendit
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84339, 'regionable_type'=>'village']); //Sematar
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84340, 'regionable_type'=>'village']); //Simpang Pulau Rambung
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84341, 'regionable_type'=>'village']); //Suka Rakyat (sukarayat)
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84342, 'regionable_type'=>'village']); //Tanjung Lenggang
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84343, 'regionable_type'=>'village']); //Timbang Jaya
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84344, 'regionable_type'=>'village']); //Timbang Lawan
                DB::table('regionables')->insert(['region_id'=>1140, 'regionable_id'=>84345, 'regionable_type'=>'village']); //Ujung Bandar
        DB::table('regions')->insert(['id'=>1141, 'parent'=>546, 'code'=>'208', 'type'=>'city', 'name'=>'City 208, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1141, 'regionable_id'=>473, 'regionable_type'=>'city']); //Langkat regencies
            DB::table('regions')->insert(['id'=>1142, 'parent'=>1141, 'code'=>'2081', 'type'=>'districts', 'name'=>'Districts 2081, City 208, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1142, 'regionable_id'=>7438, 'regionable_type'=>'districts']); //Sawit Seberang
            DB::table('regionables')->insert(['region_id'=>1142, 'regionable_id'=>7439, 'regionable_type'=>'districts']); //Stabat
                DB::table('regions')->insert(['id'=>1143, 'parent'=>1142, 'code'=>'20811', 'type'=>'village', 'name'=>'Village 20811, Districts 2081, City 208, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84346, 'regionable_type'=>'village']); //Alur Gadung
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84347, 'regionable_type'=>'village']); //Alur Melati
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84348, 'regionable_type'=>'village']); //Mekar Sawit
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84349, 'regionable_type'=>'village']); //Sawit Hulu
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84350, 'regionable_type'=>'village']); //Sawit Seberang
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84351, 'regionable_type'=>'village']); //Sei Litur Tasik
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84352, 'regionable_type'=>'village']); //Simpang Tiga
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84353, 'regionable_type'=>'village']); //Ara Condong
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84354, 'regionable_type'=>'village']); //Banyumas
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84355, 'regionable_type'=>'village']); //Dendang
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84356, 'regionable_type'=>'village']); //Karang Rejo
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84357, 'regionable_type'=>'village']); //Kwala Begumit
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84358, 'regionable_type'=>'village']); //Kwala Bingai
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84359, 'regionable_type'=>'village']); //Mangga
                DB::table('regionables')->insert(['region_id'=>1143, 'regionable_id'=>84360, 'regionable_type'=>'village']); //Stabat Baru
                DB::table('regions')->insert(['id'=>1144, 'parent'=>1142, 'code'=>'20812', 'type'=>'village', 'name'=>'Village 20812, Districts 2081, City 208, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1144, 'regionable_id'=>84361, 'regionable_type'=>'village']); //Pantai Gemi
                DB::table('regions')->insert(['id'=>1145, 'parent'=>1142, 'code'=>'20813', 'type'=>'village', 'name'=>'Village 20813, Districts 2081, City 208, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1145, 'regionable_id'=>84362, 'regionable_type'=>'village']); //Sido Mulyo
                DB::table('regions')->insert(['id'=>1146, 'parent'=>1142, 'code'=>'20815', 'type'=>'village', 'name'=>'Village 20815, Districts 2081, City 208, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1146, 'regionable_id'=>84363, 'regionable_type'=>'village']); //Perdamaian
                DB::table('regions')->insert(['id'=>1147, 'parent'=>1142, 'code'=>'20816', 'type'=>'village', 'name'=>'Village 20816, Districts 2081, City 208, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1147, 'regionable_id'=>84364, 'regionable_type'=>'village']); //Paya Mabar
            DB::table('regions')->insert(['id'=>1148, 'parent'=>1141, 'code'=>'2085', 'type'=>'districts', 'name'=>'Districts 2085, City 208, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7440, 'regionable_type'=>'districts']); //Wampu
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7441, 'regionable_type'=>'districts']); //Padang Tualang
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7442, 'regionable_type'=>'districts']); //Batang Serangan
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7443, 'regionable_type'=>'districts']); //Tanjungpura
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7444, 'regionable_type'=>'districts']); //Hinai
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7445, 'regionable_type'=>'districts']); //Secanggang
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7446, 'regionable_type'=>'districts']); //Gebang
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7447, 'regionable_type'=>'districts']); //Babalan
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7448, 'regionable_type'=>'districts']); //Pangkalan Susu
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7449, 'regionable_type'=>'districts']); //Pematang Jaya
            DB::table('regionables')->insert(['region_id'=>1148, 'regionable_id'=>7450, 'regionable_type'=>'districts']); //Besitang
                DB::table('regions')->insert(['id'=>1149, 'parent'=>1148, 'code'=>'20859', 'type'=>'village', 'name'=>'Village 20859, Districts 2085, City 208, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84483, 'regionable_type'=>'village']); //Salahaji
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84484, 'regionable_type'=>'village']); //Serang Jaya
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84485, 'regionable_type'=>'village']); //Serang Jaya Hilir
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84486, 'regionable_type'=>'village']); //Bukit Kubu
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84487, 'regionable_type'=>'village']); //Bukit Mas
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84488, 'regionable_type'=>'village']); //Bukit Selamat
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84489, 'regionable_type'=>'village']); //Halaban
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84490, 'regionable_type'=>'village']); //Kampung Lama
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84491, 'regionable_type'=>'village']); //Pekan Besitang
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84492, 'regionable_type'=>'village']); //Pir Adb Besitang
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84493, 'regionable_type'=>'village']); //Sekoci
                DB::table('regionables')->insert(['region_id'=>1149, 'regionable_id'=>84494, 'regionable_type'=>'village']); //Suka Jaya
            DB::table('regions')->insert(['id'=>1150, 'parent'=>1141, 'code'=>'2088', 'type'=>'districts', 'name'=>'Districts 2088, City 208, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1150, 'regionable_id'=>7451, 'regionable_type'=>'districts']); //Brandan Barat
                DB::table('regions')->insert(['id'=>1151, 'parent'=>1150, 'code'=>'20881', 'type'=>'village', 'name'=>'Village 20881, Districts 2088, City 208, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1151, 'regionable_id'=>84495, 'regionable_type'=>'village']); //Kelantan
                DB::table('regionables')->insert(['region_id'=>1151, 'regionable_id'=>84496, 'regionable_type'=>'village']); //Lubuk Kasih
                DB::table('regionables')->insert(['region_id'=>1151, 'regionable_id'=>84497, 'regionable_type'=>'village']); //Lubuk Kertang
                DB::table('regionables')->insert(['region_id'=>1151, 'regionable_id'=>84498, 'regionable_type'=>'village']); //Pangkalan Batu
                DB::table('regionables')->insert(['region_id'=>1151, 'regionable_id'=>84499, 'regionable_type'=>'village']); //Perlis
                DB::table('regionables')->insert(['region_id'=>1151, 'regionable_id'=>84500, 'regionable_type'=>'village']); //Sei/sungai Tualang
                DB::table('regionables')->insert(['region_id'=>1151, 'regionable_id'=>84501, 'regionable_type'=>'village']); //Tangkahan Durian
        DB::table('regions')->insert(['id'=>1152, 'parent'=>546, 'code'=>'209', 'type'=>'city', 'name'=>'City 209, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1152, 'regionable_id'=>474, 'regionable_type'=>'city']); //Serdang Bedagai regencies
            DB::table('regions')->insert(['id'=>1153, 'parent'=>1152, 'code'=>'2098', 'type'=>'districts', 'name'=>'Districts 2098, City 209, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1153, 'regionable_id'=>7452, 'regionable_type'=>'districts']); //Kotarih
            DB::table('regionables')->insert(['region_id'=>1153, 'regionable_id'=>7453, 'regionable_type'=>'districts']); //Bintang Bayu
            DB::table('regionables')->insert(['region_id'=>1153, 'regionable_id'=>7454, 'regionable_type'=>'districts']); //Silinda
            DB::table('regionables')->insert(['region_id'=>1153, 'regionable_id'=>7455, 'regionable_type'=>'districts']); //Perbaungan
            DB::table('regionables')->insert(['region_id'=>1153, 'regionable_id'=>7456, 'regionable_type'=>'districts']); //Pegajahan
            DB::table('regionables')->insert(['region_id'=>1153, 'regionable_id'=>7457, 'regionable_type'=>'districts']); //Pantai Cermin
                DB::table('regions')->insert(['id'=>1154, 'parent'=>1153, 'code'=>'20987', 'type'=>'village', 'name'=>'Village 20987, Districts 2098, City 209, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84582, 'regionable_type'=>'village']); //Ara Payung
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84583, 'regionable_type'=>'village']); //Besar 2 Terjun
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84584, 'regionable_type'=>'village']); //Celawan
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84585, 'regionable_type'=>'village']); //Kota Pari
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84586, 'regionable_type'=>'village']); //Kuala Lama
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84587, 'regionable_type'=>'village']); //Lubuk Saban
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84588, 'regionable_type'=>'village']); //Naga Kisar
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84589, 'regionable_type'=>'village']); //Pantai Cermin Kanan
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84590, 'regionable_type'=>'village']); //Pantai Cermin Kiri
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84591, 'regionable_type'=>'village']); //Pematang Kasih
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84592, 'regionable_type'=>'village']); //Sementara
                DB::table('regionables')->insert(['region_id'=>1154, 'regionable_id'=>84593, 'regionable_type'=>'village']); //Ujung Rambung
            DB::table('regions')->insert(['id'=>1155, 'parent'=>1152, 'code'=>'2099', 'type'=>'districts', 'name'=>'Districts 2099, City 209, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7458, 'regionable_type'=>'districts']); //Dolok Masihul
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7459, 'regionable_type'=>'districts']); //Serba Jadi
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7460, 'regionable_type'=>'districts']); //Sipispis
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7461, 'regionable_type'=>'districts']); //Dolok Merawan
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7462, 'regionable_type'=>'districts']); //Bandar Khalifah
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7463, 'regionable_type'=>'districts']); //Sei Bamban
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7464, 'regionable_type'=>'districts']); //Sei Rampah
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7465, 'regionable_type'=>'districts']); //Tanjung Beringin
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7466, 'regionable_type'=>'districts']); //Teluk Mengkudu
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7467, 'regionable_type'=>'districts']); //Tebing Tinggi
            DB::table('regionables')->insert(['region_id'=>1155, 'regionable_id'=>7468, 'regionable_type'=>'districts']); //Tebing Syahbandar
                DB::table('regions')->insert(['id'=>1156, 'parent'=>1155, 'code'=>'20998', 'type'=>'village', 'name'=>'Village 20998, Districts 2099, City 209, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84721, 'regionable_type'=>'village']); //Bah Sumbu
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84722, 'regionable_type'=>'village']); //Gunung Kataran
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84723, 'regionable_type'=>'village']); //Jambu
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84724, 'regionable_type'=>'village']); //Kedai Damar
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84725, 'regionable_type'=>'village']); //Kuta Baru
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84726, 'regionable_type'=>'village']); //Mariah Padang
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84727, 'regionable_type'=>'village']); //Naga Kesiangan
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84728, 'regionable_type'=>'village']); //Paya Bagas
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84729, 'regionable_type'=>'village']); //Paya Lombang
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84730, 'regionable_type'=>'village']); //Paya Mabar
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84731, 'regionable_type'=>'village']); //Penonggol
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84732, 'regionable_type'=>'village']); //Pertapaan
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84733, 'regionable_type'=>'village']); //Sei Priok (sungai Periok)
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84734, 'regionable_type'=>'village']); //Sei Serimah
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84735, 'regionable_type'=>'village']); //Bahilang
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84736, 'regionable_type'=>'village']); //Binjai
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84737, 'regionable_type'=>'village']); //Kuta Pinang
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84738, 'regionable_type'=>'village']); //Laut Tador
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84739, 'regionable_type'=>'village']); //Paya Pasir
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84740, 'regionable_type'=>'village']); //Paya Pinang
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84741, 'regionable_type'=>'village']); //Penggalangan
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84742, 'regionable_type'=>'village']); //Penggalian
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84743, 'regionable_type'=>'village']); //Sibulan
                DB::table('regionables')->insert(['region_id'=>1156, 'regionable_id'=>84744, 'regionable_type'=>'village']); //Tanah Besih
        DB::table('regions')->insert(['id'=>1157, 'parent'=>546, 'code'=>'211', 'type'=>'city', 'name'=>'City 211, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1157, 'regionable_id'=>475, 'regionable_type'=>'city']); //Pematang Siantar city
        DB::table('regionables')->insert(['region_id'=>1157, 'regionable_id'=>476, 'regionable_type'=>'city']); //Simalungun regencies
            DB::table('regions')->insert(['id'=>1158, 'parent'=>1157, 'code'=>'2115', 'type'=>'districts', 'name'=>'Districts 2115, City 211, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1158, 'regionable_id'=>7477, 'regionable_type'=>'districts']); //Siantar
            DB::table('regionables')->insert(['region_id'=>1158, 'regionable_id'=>7478, 'regionable_type'=>'districts']); //Jawa Maraja Bah Jambi
            DB::table('regionables')->insert(['region_id'=>1158, 'regionable_id'=>7479, 'regionable_type'=>'districts']); //Tapian Dolok
            DB::table('regionables')->insert(['region_id'=>1158, 'regionable_id'=>7480, 'regionable_type'=>'districts']); //Dolok Batu Nanggar
            DB::table('regionables')->insert(['region_id'=>1158, 'regionable_id'=>7481, 'regionable_type'=>'districts']); //Raya Kahean
            DB::table('regionables')->insert(['region_id'=>1158, 'regionable_id'=>7482, 'regionable_type'=>'districts']); //Silou Kahean
                DB::table('regions')->insert(['id'=>1159, 'parent'=>1158, 'code'=>'21157', 'type'=>'village', 'name'=>'Village 21157, Districts 2115, City 211, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84858, 'regionable_type'=>'village']); //Bah Sarimah
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84859, 'regionable_type'=>'village']); //Bandar Maruhur
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84860, 'regionable_type'=>'village']); //Bandar Nagori
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84861, 'regionable_type'=>'village']); //Buttu Bayu
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84862, 'regionable_type'=>'village']); //Damaritang
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84863, 'regionable_type'=>'village']); //Dolok Marawa
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84864, 'regionable_type'=>'village']); //Dolok Saribu Bangun
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84865, 'regionable_type'=>'village']); //Mariah Buttu
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84866, 'regionable_type'=>'village']); //Nagori Tani
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84867, 'regionable_type'=>'village']); //Negeri Dolok
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84868, 'regionable_type'=>'village']); //Pardomuan Bandar
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84869, 'regionable_type'=>'village']); //Pardomuan Tongah
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84870, 'regionable_type'=>'village']); //Silau/silou Dunia
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84871, 'regionable_type'=>'village']); //Silau/silou Paribuan
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84872, 'regionable_type'=>'village']); //Simanabun
                DB::table('regionables')->insert(['region_id'=>1159, 'regionable_id'=>84873, 'regionable_type'=>'village']); //Sinasih
            DB::table('regions')->insert(['id'=>1160, 'parent'=>1157, 'code'=>'2116', 'type'=>'districts', 'name'=>'Districts 2116, City 211, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7483, 'regionable_type'=>'districts']); //Panei
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7484, 'regionable_type'=>'districts']); //Raya
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7485, 'regionable_type'=>'districts']); //Bandar
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7486, 'regionable_type'=>'districts']); //Dolok Pardamean
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7487, 'regionable_type'=>'districts']); //Panombeian Panei
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7488, 'regionable_type'=>'districts']); //Purba
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7489, 'regionable_type'=>'districts']); //Silimakuta
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7490, 'regionable_type'=>'districts']); //Pematang Silima Huta
            DB::table('regionables')->insert(['region_id'=>1160, 'regionable_id'=>7491, 'regionable_type'=>'districts']); //Dolok Silau
                DB::table('regions')->insert(['id'=>1161, 'parent'=>1160, 'code'=>'21168', 'type'=>'village', 'name'=>'Village 21168, Districts 2116, City 211, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84959, 'regionable_type'=>'village']); //Bawang
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84960, 'regionable_type'=>'village']); //Cingkes
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84961, 'regionable_type'=>'village']); //Dolok Mariah
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84962, 'regionable_type'=>'village']); //Huta Saing
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84963, 'regionable_type'=>'village']); //Mariah Dolok
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84964, 'regionable_type'=>'village']); //Marubun Lokkung
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84965, 'regionable_type'=>'village']); //Paribuan
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84966, 'regionable_type'=>'village']); //Perasmian
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84967, 'regionable_type'=>'village']); //Saran Padang
                DB::table('regionables')->insert(['region_id'=>1161, 'regionable_id'=>84968, 'regionable_type'=>'village']); //Tagur
            DB::table('regions')->insert(['id'=>1162, 'parent'=>1157, 'code'=>'2117', 'type'=>'districts', 'name'=>'Districts 2117, City 211, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1162, 'regionable_id'=>7492, 'regionable_type'=>'districts']); //Sidamanik
            DB::table('regionables')->insert(['region_id'=>1162, 'regionable_id'=>7493, 'regionable_type'=>'districts']); //Jorlang Hataran
            DB::table('regionables')->insert(['region_id'=>1162, 'regionable_id'=>7494, 'regionable_type'=>'districts']); //Dolok Panribuan
            DB::table('regionables')->insert(['region_id'=>1162, 'regionable_id'=>7495, 'regionable_type'=>'districts']); //Gunung Maligas
            DB::table('regionables')->insert(['region_id'=>1162, 'regionable_id'=>7496, 'regionable_type'=>'districts']); //Gunung Malela
            DB::table('regionables')->insert(['region_id'=>1162, 'regionable_id'=>7497, 'regionable_type'=>'districts']); //Hatonduhan
            DB::table('regionables')->insert(['region_id'=>1162, 'regionable_id'=>7498, 'regionable_type'=>'districts']); //Girsang Sipangan Bolon
            DB::table('regionables')->insert(['region_id'=>1162, 'regionable_id'=>7499, 'regionable_type'=>'districts']); //Haranggaol Horison
                DB::table('regions')->insert(['id'=>1163, 'parent'=>1162, 'code'=>'21174', 'type'=>'village', 'name'=>'Village 21174, Districts 2117, City 211, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85006, 'regionable_type'=>'village']); //Bandar Malela
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85007, 'regionable_type'=>'village']); //Gajing
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85008, 'regionable_type'=>'village']); //Hutadipar
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85009, 'regionable_type'=>'village']); //Karang Anyer
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85010, 'regionable_type'=>'village']); //Karang Rejo
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85011, 'regionable_type'=>'village']); //Karang Sari
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85012, 'regionable_type'=>'village']); //Rabuhit
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85013, 'regionable_type'=>'village']); //Silau Bayu
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85014, 'regionable_type'=>'village']); //Tumorang
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85015, 'regionable_type'=>'village']); //Bandar Siantar
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85016, 'regionable_type'=>'village']); //Bangun
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85017, 'regionable_type'=>'village']); //Bukit Maraja
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85018, 'regionable_type'=>'village']); //Dolok Malela
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85019, 'regionable_type'=>'village']); //Lingga
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85020, 'regionable_type'=>'village']); //Margo Muliyo
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85021, 'regionable_type'=>'village']); //Marihat Bukit
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85022, 'regionable_type'=>'village']); //Nagori Malela
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85023, 'regionable_type'=>'village']); //Pematang Asilum
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85024, 'regionable_type'=>'village']); //Pematang Gajing
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85025, 'regionable_type'=>'village']); //Pematang Syahkuda (sah Kuda)
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85026, 'regionable_type'=>'village']); //Senio
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85027, 'regionable_type'=>'village']); //Serapuh
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85028, 'regionable_type'=>'village']); //Silau Malela
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85029, 'regionable_type'=>'village']); //Silulu
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85030, 'regionable_type'=>'village']); //Syahkuda Bayu (sah Kuda Bayu)
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85031, 'regionable_type'=>'village']); //Bosar Nauli
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85032, 'regionable_type'=>'village']); //Buttu Bayu (buntu Bayu)
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85033, 'regionable_type'=>'village']); //Buttu Turunan (buntu Turunan)
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85034, 'regionable_type'=>'village']); //Jawa Tongah
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85035, 'regionable_type'=>'village']); //Jawa Tongah Ii
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85036, 'regionable_type'=>'village']); //Parhundalian Jawadipar
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85037, 'regionable_type'=>'village']); //Saribu Asih
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85038, 'regionable_type'=>'village']); //Tangga Batu
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85039, 'regionable_type'=>'village']); //Tonduhan
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85040, 'regionable_type'=>'village']); //Girsang
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85041, 'regionable_type'=>'village']); //Parapat
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85042, 'regionable_type'=>'village']); //Sibaganding
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85043, 'regionable_type'=>'village']); //Sipangan Bolon
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85044, 'regionable_type'=>'village']); //Tiga Raja
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85045, 'regionable_type'=>'village']); //Haranggaol
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85046, 'regionable_type'=>'village']); //Nagori Purba Harison/harisan
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85047, 'regionable_type'=>'village']); //Nagori Purba Pasir
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85048, 'regionable_type'=>'village']); //Nagori Purba Saribu
                DB::table('regionables')->insert(['region_id'=>1163, 'regionable_id'=>85049, 'regionable_type'=>'village']); //Nagori Sihalpe
            DB::table('regions')->insert(['id'=>1164, 'parent'=>1157, 'code'=>'2118', 'type'=>'districts', 'name'=>'Districts 2118, City 211, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7485, 'regionable_type'=>'districts']); //Bandar
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7500, 'regionable_type'=>'districts']); //Tanah Jawa
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7501, 'regionable_type'=>'districts']); //Huta Bayu Raja
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7502, 'regionable_type'=>'districts']); //Bosar Maligas
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7503, 'regionable_type'=>'districts']); //Bandar Huluan
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7504, 'regionable_type'=>'districts']); //Bandar Masilam
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7505, 'regionable_type'=>'districts']); //Pematang Sidamanik
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7506, 'regionable_type'=>'districts']); //Pematang Bandar
            DB::table('regionables')->insert(['region_id'=>1164, 'regionable_id'=>7507, 'regionable_type'=>'districts']); //Ujung Padang
                DB::table('regions')->insert(['id'=>1165, 'parent'=>1164, 'code'=>'21187', 'type'=>'village', 'name'=>'Village 21187, Districts 2118, City 211, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85141, 'regionable_type'=>'village']); //Aek Ger Ger Sidodadi
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85142, 'regionable_type'=>'village']); //Bangun Sordang
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85143, 'regionable_type'=>'village']); //Dusun Ulu
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85144, 'regionable_type'=>'village']); //Huta Parik
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85145, 'regionable_type'=>'village']); //Kampung Lalang
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85146, 'regionable_type'=>'village']); //Pagar Bosi
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85147, 'regionable_type'=>'village']); //Pulo Pitu Marihat
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85148, 'regionable_type'=>'village']); //Riah Poso
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85149, 'regionable_type'=>'village']); //Sayur Matinggi
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85150, 'regionable_type'=>'village']); //Sei Merbou
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85151, 'regionable_type'=>'village']); //Siringan Ringan
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85152, 'regionable_type'=>'village']); //Sordang Bolon
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85153, 'regionable_type'=>'village']); //Tanjung Rapuan
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85154, 'regionable_type'=>'village']); //Taratak Nagodang
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85155, 'regionable_type'=>'village']); //Teluk Tapian
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85156, 'regionable_type'=>'village']); //Tinjoan (tinjowan)
                DB::table('regionables')->insert(['region_id'=>1165, 'regionable_id'=>85157, 'regionable_type'=>'village']); //Ujung Padang
        DB::table('regions')->insert(['id'=>1166, 'parent'=>546, 'code'=>'212', 'type'=>'city', 'name'=>'City 212, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1166, 'regionable_id'=>477, 'regionable_type'=>'city']); //Asahan regencies
        DB::table('regionables')->insert(['region_id'=>1166, 'regionable_id'=>478, 'regionable_type'=>'city']); //Batu Bara regencies
            DB::table('regions')->insert(['id'=>1167, 'parent'=>1166, 'code'=>'2125', 'type'=>'districts', 'name'=>'Districts 2125, City 212, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1167, 'regionable_id'=>7533, 'regionable_type'=>'districts']); //Sei Balai
            DB::table('regionables')->insert(['region_id'=>1167, 'regionable_id'=>7534, 'regionable_type'=>'districts']); //Tanjung Tiram
            DB::table('regionables')->insert(['region_id'=>1167, 'regionable_id'=>7535, 'regionable_type'=>'districts']); //Talawi
            DB::table('regionables')->insert(['region_id'=>1167, 'regionable_id'=>7536, 'regionable_type'=>'districts']); //Limapuluh
            DB::table('regionables')->insert(['region_id'=>1167, 'regionable_id'=>7537, 'regionable_type'=>'districts']); //Air Putih
            DB::table('regionables')->insert(['region_id'=>1167, 'regionable_id'=>7538, 'regionable_type'=>'districts']); //Sei Suka
            DB::table('regionables')->insert(['region_id'=>1167, 'regionable_id'=>7539, 'regionable_type'=>'districts']); //Medang Deras
                DB::table('regions')->insert(['id'=>1168, 'parent'=>1167, 'code'=>'21258', 'type'=>'village', 'name'=>'Village 21258, Districts 2125, City 212, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85488, 'regionable_type'=>'village']); //Aek Nauli
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85489, 'regionable_type'=>'village']); //Cengkering Pekan
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85490, 'regionable_type'=>'village']); //Durian
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85491, 'regionable_type'=>'village']); //Lalang
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85492, 'regionable_type'=>'village']); //Mandarsah
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85493, 'regionable_type'=>'village']); //Medang
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85494, 'regionable_type'=>'village']); //Medang Baru
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85495, 'regionable_type'=>'village']); //Nenas Siam
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85496, 'regionable_type'=>'village']); //Pagurawan
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85497, 'regionable_type'=>'village']); //Pakam
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85498, 'regionable_type'=>'village']); //Pakam Raya
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85499, 'regionable_type'=>'village']); //Pakam Raya Selatan
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85500, 'regionable_type'=>'village']); //Pangkalan Dodek
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85501, 'regionable_type'=>'village']); //Pangkalan Dodek Baru
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85502, 'regionable_type'=>'village']); //Pematang Cengkering
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85503, 'regionable_type'=>'village']); //Pematang Nibung
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85504, 'regionable_type'=>'village']); //Sei Buah Keras
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85505, 'regionable_type'=>'village']); //Sei Raja
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85506, 'regionable_type'=>'village']); //Sei Rakyat
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85507, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>1168, 'regionable_id'=>85508, 'regionable_type'=>'village']); //Tanjung Sigoni
        DB::table('regions')->insert(['id'=>1169, 'parent'=>546, 'code'=>'213', 'type'=>'city', 'name'=>'City 213, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1169, 'regionable_id'=>477, 'regionable_type'=>'city']); //Asahan regencies
        DB::table('regionables')->insert(['region_id'=>1169, 'regionable_id'=>479, 'regionable_type'=>'city']); //Tanjung Balai city
            DB::table('regions')->insert(['id'=>1170, 'parent'=>1169, 'code'=>'2131', 'type'=>'districts', 'name'=>'Districts 2131, City 213, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1170, 'regionable_id'=>7540, 'regionable_type'=>'districts']); //Tanjung Balai Selatan
                DB::table('regions')->insert(['id'=>1171, 'parent'=>1170, 'code'=>'21311', 'type'=>'village', 'name'=>'Village 21311, Districts 2131, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1171, 'regionable_id'=>85509, 'regionable_type'=>'village']); //Tanjungbalai Kota I
                DB::table('regions')->insert(['id'=>1172, 'parent'=>1170, 'code'=>'21312', 'type'=>'village', 'name'=>'Village 21312, Districts 2131, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1172, 'regionable_id'=>85510, 'regionable_type'=>'village']); //Tanjungbalai Kota Ii
                DB::table('regions')->insert(['id'=>1173, 'parent'=>1170, 'code'=>'21313', 'type'=>'village', 'name'=>'Village 21313, Districts 2131, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1173, 'regionable_id'=>85511, 'regionable_type'=>'village']); //Perwira
                DB::table('regions')->insert(['id'=>1174, 'parent'=>1170, 'code'=>'21314', 'type'=>'village', 'name'=>'Village 21314, Districts 2131, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1174, 'regionable_id'=>85512, 'regionable_type'=>'village']); //Karya
                DB::table('regions')->insert(['id'=>1175, 'parent'=>1170, 'code'=>'21315', 'type'=>'village', 'name'=>'Village 21315, Districts 2131, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1175, 'regionable_id'=>85513, 'regionable_type'=>'village']); //Indra Sakti
                DB::table('regions')->insert(['id'=>1176, 'parent'=>1170, 'code'=>'21316', 'type'=>'village', 'name'=>'Village 21316, Districts 2131, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1176, 'regionable_id'=>85514, 'regionable_type'=>'village']); //Pantai Burung
            DB::table('regions')->insert(['id'=>1177, 'parent'=>1169, 'code'=>'2132', 'type'=>'districts', 'name'=>'Districts 2132, City 213, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1177, 'regionable_id'=>7541, 'regionable_type'=>'districts']); //Tanjung Balai Utara
                DB::table('regions')->insert(['id'=>1178, 'parent'=>1177, 'code'=>'21321', 'type'=>'village', 'name'=>'Village 21321, Districts 2132, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1178, 'regionable_id'=>85515, 'regionable_type'=>'village']); //Tanjungbalai Kota Iii
                DB::table('regions')->insert(['id'=>1179, 'parent'=>1177, 'code'=>'21322', 'type'=>'village', 'name'=>'Village 21322, Districts 2132, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1179, 'regionable_id'=>85516, 'regionable_type'=>'village']); //Tanjungbalai Kota Iv
                DB::table('regions')->insert(['id'=>1180, 'parent'=>1177, 'code'=>'21323', 'type'=>'village', 'name'=>'Village 21323, Districts 2132, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1180, 'regionable_id'=>85517, 'regionable_type'=>'village']); //Sejahtera
                DB::table('regions')->insert(['id'=>1181, 'parent'=>1177, 'code'=>'21324', 'type'=>'village', 'name'=>'Village 21324, Districts 2132, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1181, 'regionable_id'=>85518, 'regionable_type'=>'village']); //Kuala Silau Bestari
                DB::table('regions')->insert(['id'=>1182, 'parent'=>1177, 'code'=>'21325', 'type'=>'village', 'name'=>'Village 21325, Districts 2132, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1182, 'regionable_id'=>85519, 'regionable_type'=>'village']); //Matahalasan
            DB::table('regions')->insert(['id'=>1183, 'parent'=>1169, 'code'=>'2133', 'type'=>'districts', 'name'=>'Districts 2133, City 213, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1183, 'regionable_id'=>7542, 'regionable_type'=>'districts']); //Teluk Nibung
                DB::table('regions')->insert(['id'=>1184, 'parent'=>1183, 'code'=>'21331', 'type'=>'village', 'name'=>'Village 21331, Districts 2133, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1184, 'regionable_id'=>85520, 'regionable_type'=>'village']); //Kapias Pulau Buaya
                DB::table('regions')->insert(['id'=>1185, 'parent'=>1183, 'code'=>'21332', 'type'=>'village', 'name'=>'Village 21332, Districts 2133, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1185, 'regionable_id'=>85521, 'regionable_type'=>'village']); //Perjuangan
                DB::table('regions')->insert(['id'=>1186, 'parent'=>1183, 'code'=>'21333', 'type'=>'village', 'name'=>'Village 21333, Districts 2133, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1186, 'regionable_id'=>85522, 'regionable_type'=>'village']); //Pematang Pasir
                DB::table('regions')->insert(['id'=>1187, 'parent'=>1183, 'code'=>'21334', 'type'=>'village', 'name'=>'Village 21334, Districts 2133, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1187, 'regionable_id'=>85523, 'regionable_type'=>'village']); //Sei Merbau
                DB::table('regions')->insert(['id'=>1188, 'parent'=>1183, 'code'=>'21335', 'type'=>'village', 'name'=>'Village 21335, Districts 2133, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1188, 'regionable_id'=>85524, 'regionable_type'=>'village']); //Beting Kwala/kuala Kapias
            DB::table('regions')->insert(['id'=>1189, 'parent'=>1169, 'code'=>'2134', 'type'=>'districts', 'name'=>'Districts 2134, City 213, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1189, 'regionable_id'=>7543, 'regionable_type'=>'districts']); //Sei Tualang Raso
                DB::table('regions')->insert(['id'=>1190, 'parent'=>1189, 'code'=>'21341', 'type'=>'village', 'name'=>'Village 21341, Districts 2134, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1190, 'regionable_id'=>85525, 'regionable_type'=>'village']); //Pasar Baru
                DB::table('regions')->insert(['id'=>1191, 'parent'=>1189, 'code'=>'21342', 'type'=>'village', 'name'=>'Village 21342, Districts 2134, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1191, 'regionable_id'=>85526, 'regionable_type'=>'village']); //Muara Sentosa
                DB::table('regions')->insert(['id'=>1192, 'parent'=>1189, 'code'=>'21343', 'type'=>'village', 'name'=>'Village 21343, Districts 2134, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1192, 'regionable_id'=>85527, 'regionable_type'=>'village']); //Sumber Sari
                DB::table('regions')->insert(['id'=>1193, 'parent'=>1189, 'code'=>'21344', 'type'=>'village', 'name'=>'Village 21344, Districts 2134, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1193, 'regionable_id'=>85528, 'regionable_type'=>'village']); //Keramat Kubah
                DB::table('regions')->insert(['id'=>1194, 'parent'=>1189, 'code'=>'21345', 'type'=>'village', 'name'=>'Village 21345, Districts 2134, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1194, 'regionable_id'=>85529, 'regionable_type'=>'village']); //Sei Raja
            DB::table('regions')->insert(['id'=>1195, 'parent'=>1169, 'code'=>'2136', 'type'=>'districts', 'name'=>'Districts 2136, City 213, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1195, 'regionable_id'=>7544, 'regionable_type'=>'districts']); //Datuk Bandar
            DB::table('regionables')->insert(['region_id'=>1195, 'regionable_id'=>7545, 'regionable_type'=>'districts']); //Datuk Bandar Timur
                DB::table('regions')->insert(['id'=>1196, 'parent'=>1195, 'code'=>'21364', 'type'=>'village', 'name'=>'Village 21364, Districts 2136, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1196, 'regionable_id'=>85535, 'regionable_type'=>'village']); //Selat Lancang
                DB::table('regionables')->insert(['region_id'=>1196, 'regionable_id'=>85536, 'regionable_type'=>'village']); //Selat Tanjung Medan
                DB::table('regions')->insert(['id'=>1197, 'parent'=>1195, 'code'=>'21365', 'type'=>'village', 'name'=>'Village 21365, Districts 2136, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1197, 'regionable_id'=>85537, 'regionable_type'=>'village']); //Semula Jadi
                DB::table('regions')->insert(['id'=>1198, 'parent'=>1195, 'code'=>'21366', 'type'=>'village', 'name'=>'Village 21366, Districts 2136, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1198, 'regionable_id'=>85538, 'regionable_type'=>'village']); //Pulau Simardan
                DB::table('regions')->insert(['id'=>1199, 'parent'=>1195, 'code'=>'21367', 'type'=>'village', 'name'=>'Village 21367, Districts 2136, City 213, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1199, 'regionable_id'=>85539, 'regionable_type'=>'village']); //Bunga Tanjung
        DB::table('regions')->insert(['id'=>1200, 'parent'=>546, 'code'=>'214', 'type'=>'city', 'name'=>'City 214, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1200, 'regionable_id'=>480, 'regionable_type'=>'city']); //Labuhan Batu regencies
        DB::table('regionables')->insert(['region_id'=>1200, 'regionable_id'=>481, 'regionable_type'=>'city']); //Labuhan Batu Utara regencies
        DB::table('regionables')->insert(['region_id'=>1200, 'regionable_id'=>482, 'regionable_type'=>'city']); //Labuhan Batu Selatan regencies
            DB::table('regions')->insert(['id'=>1201, 'parent'=>1200, 'code'=>'2146', 'type'=>'districts', 'name'=>'Districts 2146, City 214, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1201, 'regionable_id'=>7550, 'regionable_type'=>'districts']); //Pangkatan
            DB::table('regionables')->insert(['region_id'=>1201, 'regionable_id'=>7563, 'regionable_type'=>'districts']); //Silangkitang
            DB::table('regionables')->insert(['region_id'=>1201, 'regionable_id'=>7564, 'regionable_type'=>'districts']); //Kampung Rakyat
            DB::table('regionables')->insert(['region_id'=>1201, 'regionable_id'=>7565, 'regionable_type'=>'districts']); //Torgamba
            DB::table('regionables')->insert(['region_id'=>1201, 'regionable_id'=>7566, 'regionable_type'=>'districts']); //Kota Pinang
            DB::table('regionables')->insert(['region_id'=>1201, 'regionable_id'=>7567, 'regionable_type'=>'districts']); //Sei/sungai Kanan
                DB::table('regions')->insert(['id'=>1202, 'parent'=>1201, 'code'=>'21465', 'type'=>'village', 'name'=>'Village 21465, Districts 2146, City 214, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85774, 'regionable_type'=>'village']); //Batang Nadenggan
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85775, 'regionable_type'=>'village']); //Hajoran
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85776, 'regionable_type'=>'village']); //Huta Godang
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85777, 'regionable_type'=>'village']); //Langga Payung
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85778, 'regionable_type'=>'village']); //Marsonja
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85779, 'regionable_type'=>'village']); //Parimburan
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85780, 'regionable_type'=>'village']); //Sabungan
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85781, 'regionable_type'=>'village']); //Sampean
                DB::table('regionables')->insert(['region_id'=>1202, 'regionable_id'=>85782, 'regionable_type'=>'village']); //Ujung Gading
        DB::table('regions')->insert(['id'=>1203, 'parent'=>546, 'code'=>'221', 'type'=>'city', 'name'=>'City 221, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1203, 'regionable_id'=>483, 'regionable_type'=>'city']); //Karo regencies
            DB::table('regions')->insert(['id'=>1204, 'parent'=>1203, 'code'=>'2211', 'type'=>'districts', 'name'=>'Districts 2211, City 221, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1204, 'regionable_id'=>7568, 'regionable_type'=>'districts']); //Kabanjahe
                DB::table('regions')->insert(['id'=>1205, 'parent'=>1204, 'code'=>'22111', 'type'=>'village', 'name'=>'Village 22111, Districts 2211, City 221, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85783, 'regionable_type'=>'village']); //Gung Leto
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85784, 'regionable_type'=>'village']); //Kaban
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85785, 'regionable_type'=>'village']); //Kacaribu
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85786, 'regionable_type'=>'village']); //Kandibata
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85787, 'regionable_type'=>'village']); //Ketaren
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85788, 'regionable_type'=>'village']); //Lausimono
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85789, 'regionable_type'=>'village']); //Rumah Kabanjahe
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85790, 'regionable_type'=>'village']); //Samura
                DB::table('regionables')->insert(['region_id'=>1205, 'regionable_id'=>85791, 'regionable_type'=>'village']); //Sumber Mufakat
                DB::table('regions')->insert(['id'=>1206, 'parent'=>1204, 'code'=>'22112', 'type'=>'village', 'name'=>'Village 22112, Districts 2211, City 221, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1206, 'regionable_id'=>85792, 'regionable_type'=>'village']); //Gung Negeri
                DB::table('regions')->insert(['id'=>1207, 'parent'=>1204, 'code'=>'22113', 'type'=>'village', 'name'=>'Village 22113, Districts 2211, City 221, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1207, 'regionable_id'=>85793, 'regionable_type'=>'village']); //Kampung Dalam
                DB::table('regions')->insert(['id'=>1208, 'parent'=>1204, 'code'=>'22114', 'type'=>'village', 'name'=>'Village 22114, Districts 2211, City 221, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1208, 'regionable_id'=>85794, 'regionable_type'=>'village']); //Lau Cimba
                DB::table('regions')->insert(['id'=>1209, 'parent'=>1204, 'code'=>'22115', 'type'=>'village', 'name'=>'Village 22115, Districts 2211, City 221, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1209, 'regionable_id'=>85795, 'regionable_type'=>'village']); //Padang Mas
            DB::table('regions')->insert(['id'=>1210, 'parent'=>1203, 'code'=>'2215', 'type'=>'districts', 'name'=>'Districts 2215, City 221, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1210, 'regionable_id'=>7569, 'regionable_type'=>'districts']); //Brastagi (berastagi)
            DB::table('regionables')->insert(['region_id'=>1210, 'regionable_id'=>7570, 'regionable_type'=>'districts']); //Simpang Empat
            DB::table('regionables')->insert(['region_id'=>1210, 'regionable_id'=>7571, 'regionable_type'=>'districts']); //Nama Teran
            DB::table('regionables')->insert(['region_id'=>1210, 'regionable_id'=>7572, 'regionable_type'=>'districts']); //Merdeka
            DB::table('regionables')->insert(['region_id'=>1210, 'regionable_id'=>7573, 'regionable_type'=>'districts']); //Payung
            DB::table('regionables')->insert(['region_id'=>1210, 'regionable_id'=>7574, 'regionable_type'=>'districts']); //Tiganderket
            DB::table('regionables')->insert(['region_id'=>1210, 'regionable_id'=>7575, 'regionable_type'=>'districts']); //Kuta Buluh
                DB::table('regions')->insert(['id'=>1211, 'parent'=>1210, 'code'=>'22155', 'type'=>'village', 'name'=>'Village 22155, Districts 2215, City 221, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85871, 'regionable_type'=>'village']); //Amburudi (mburidi)
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85872, 'regionable_type'=>'village']); //Bintang Meriah
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85873, 'regionable_type'=>'village']); //Buah Raya
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85874, 'regionable_type'=>'village']); //Gunung Meriah
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85875, 'regionable_type'=>'village']); //Jinabun
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85876, 'regionable_type'=>'village']); //Kuta Buluh
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85877, 'regionable_type'=>'village']); //Kuta Buluh Gugung
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85878, 'regionable_type'=>'village']); //Kuta Male
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85879, 'regionable_type'=>'village']); //Lau Buluh
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85880, 'regionable_type'=>'village']); //Liang Merdeka
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85881, 'regionable_type'=>'village']); //Negeri Jahe
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85882, 'regionable_type'=>'village']); //Pola Tebu
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85883, 'regionable_type'=>'village']); //Rih Tengah
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85884, 'regionable_type'=>'village']); //Siabang Abang
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85885, 'regionable_type'=>'village']); //Tanjung Merahe
                DB::table('regionables')->insert(['region_id'=>1211, 'regionable_id'=>85886, 'regionable_type'=>'village']); //Ujung Deleng
            DB::table('regions')->insert(['id'=>1212, 'parent'=>1203, 'code'=>'2216', 'type'=>'districts', 'name'=>'Districts 2216, City 221, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1212, 'regionable_id'=>7576, 'regionable_type'=>'districts']); //Munte
            DB::table('regionables')->insert(['region_id'=>1212, 'regionable_id'=>7577, 'regionable_type'=>'districts']); //Tiga Binanga
            DB::table('regionables')->insert(['region_id'=>1212, 'regionable_id'=>7578, 'regionable_type'=>'districts']); //Juhar
            DB::table('regionables')->insert(['region_id'=>1212, 'regionable_id'=>7579, 'regionable_type'=>'districts']); //Laubaleng
            DB::table('regionables')->insert(['region_id'=>1212, 'regionable_id'=>7580, 'regionable_type'=>'districts']); //Mardinding
                DB::table('regions')->insert(['id'=>1213, 'parent'=>1212, 'code'=>'22165', 'type'=>'village', 'name'=>'Village 22165, Districts 2216, City 221, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85967, 'regionable_type'=>'village']); //Bandar Purba
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85968, 'regionable_type'=>'village']); //Kuta Pengkih
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85969, 'regionable_type'=>'village']); //Lau Kasumpat
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85970, 'regionable_type'=>'village']); //Lau Mulgap
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85971, 'regionable_type'=>'village']); //Lau Pakam
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85972, 'regionable_type'=>'village']); //Lau Pengulu
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85973, 'regionable_type'=>'village']); //Lau Solu
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85974, 'regionable_type'=>'village']); //Mardingding
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85975, 'regionable_type'=>'village']); //Rimo Bunga
                DB::table('regionables')->insert(['region_id'=>1213, 'regionable_id'=>85976, 'regionable_type'=>'village']); //Tanjung Pamah
            DB::table('regions')->insert(['id'=>1214, 'parent'=>1203, 'code'=>'2217', 'type'=>'districts', 'name'=>'Districts 2217, City 221, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1214, 'regionable_id'=>7581, 'regionable_type'=>'districts']); //Tiga Panah
            DB::table('regionables')->insert(['region_id'=>1214, 'regionable_id'=>7582, 'regionable_type'=>'districts']); //Dolat Rayat
            DB::table('regionables')->insert(['region_id'=>1214, 'regionable_id'=>7583, 'regionable_type'=>'districts']); //Barus Jahe
            DB::table('regionables')->insert(['region_id'=>1214, 'regionable_id'=>7584, 'regionable_type'=>'districts']); //Merek
                DB::table('regions')->insert(['id'=>1215, 'parent'=>1214, 'code'=>'22173', 'type'=>'village', 'name'=>'Village 22173, Districts 2217, City 221, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86029, 'regionable_type'=>'village']); //Ajinembah
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86030, 'regionable_type'=>'village']); //Bandar Tongging
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86031, 'regionable_type'=>'village']); //Dokan
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86032, 'regionable_type'=>'village']); //Garingging
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86033, 'regionable_type'=>'village']); //Kodon-kodon
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86034, 'regionable_type'=>'village']); //Merek
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86035, 'regionable_type'=>'village']); //Mulia Rakyat
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86036, 'regionable_type'=>'village']); //Nagalingga
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86037, 'regionable_type'=>'village']); //Nagara
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86038, 'regionable_type'=>'village']); //Negeri Tongging
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86039, 'regionable_type'=>'village']); //Pancur Batu
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86040, 'regionable_type'=>'village']); //Pangambaten
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86041, 'regionable_type'=>'village']); //Pertibi Lama
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86042, 'regionable_type'=>'village']); //Pertibitembe
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86043, 'regionable_type'=>'village']); //Regaji
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86044, 'regionable_type'=>'village']); //Sibolangit
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86045, 'regionable_type'=>'village']); //Situnggaling
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86046, 'regionable_type'=>'village']); //Sukamandi
                DB::table('regionables')->insert(['region_id'=>1215, 'regionable_id'=>86047, 'regionable_type'=>'village']); //Tongging
        DB::table('regions')->insert(['id'=>1216, 'parent'=>546, 'code'=>'222', 'type'=>'city', 'name'=>'City 222, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1216, 'regionable_id'=>484, 'regionable_type'=>'city']); //Dairi regencies
        DB::table('regionables')->insert(['region_id'=>1216, 'regionable_id'=>485, 'regionable_type'=>'city']); //Pakpak Bharat regencies
            DB::table('regions')->insert(['id'=>1217, 'parent'=>1216, 'code'=>'2227', 'type'=>'districts', 'name'=>'Districts 2227, City 222, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1217, 'regionable_id'=>7600, 'regionable_type'=>'districts']); //Pergetteng Getteng Sengkut
            DB::table('regionables')->insert(['region_id'=>1217, 'regionable_id'=>7601, 'regionable_type'=>'districts']); //Kerajaan
            DB::table('regionables')->insert(['region_id'=>1217, 'regionable_id'=>7602, 'regionable_type'=>'districts']); //Pagindar
            DB::table('regionables')->insert(['region_id'=>1217, 'regionable_id'=>7603, 'regionable_type'=>'districts']); //Sitellu Tali Urang Jehe
            DB::table('regionables')->insert(['region_id'=>1217, 'regionable_id'=>7604, 'regionable_type'=>'districts']); //Salak
            DB::table('regionables')->insert(['region_id'=>1217, 'regionable_id'=>7605, 'regionable_type'=>'districts']); //Tinada
            DB::table('regionables')->insert(['region_id'=>1217, 'regionable_id'=>7606, 'regionable_type'=>'districts']); //Sitellu Tali Urang Julu
            DB::table('regionables')->insert(['region_id'=>1217, 'regionable_id'=>7607, 'regionable_type'=>'districts']); //Siempat Rube
                DB::table('regions')->insert(['id'=>1218, 'parent'=>1217, 'code'=>'22272', 'type'=>'village', 'name'=>'Village 22272, Districts 2227, City 222, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86209, 'regionable_type'=>'village']); //Bandar Baru
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86210, 'regionable_type'=>'village']); //Kaban Tengah
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86211, 'regionable_type'=>'village']); //Maholida
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86212, 'regionable_type'=>'village']); //Malum
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86213, 'regionable_type'=>'village']); //Mbinalun
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86214, 'regionable_type'=>'village']); //Perjaga
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86215, 'regionable_type'=>'village']); //Perolihen
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86216, 'regionable_type'=>'village']); //Simberuna
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86217, 'regionable_type'=>'village']); //Tanjung Meriah
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86218, 'regionable_type'=>'village']); //Tanjung Mulia
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86219, 'regionable_type'=>'village']); //Boangmanalu Salak
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86220, 'regionable_type'=>'village']); //Kuta Tinggi
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86221, 'regionable_type'=>'village']); //Penanggalan Binanga Boang
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86222, 'regionable_type'=>'village']); //Salak I
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86223, 'regionable_type'=>'village']); //Salak Ii
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86224, 'regionable_type'=>'village']); //Sibongkaras
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86225, 'regionable_type'=>'village']); //Buluh Tellang
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86226, 'regionable_type'=>'village']); //Kuta Babo
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86227, 'regionable_type'=>'village']); //Mahala
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86228, 'regionable_type'=>'village']); //Prongil
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86229, 'regionable_type'=>'village']); //Silima Kuta
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86230, 'regionable_type'=>'village']); //Tinada
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86231, 'regionable_type'=>'village']); //Cikaok
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86232, 'regionable_type'=>'village']); //Lae Langge Namuseng
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86233, 'regionable_type'=>'village']); //Pardomuan
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86234, 'regionable_type'=>'village']); //Silima Kuta
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86235, 'regionable_type'=>'village']); //Ulu Merah
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86236, 'regionable_type'=>'village']); //Kuta Jungak
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86237, 'regionable_type'=>'village']); //Mungkur
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86238, 'regionable_type'=>'village']); //Siempat Rube I
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86239, 'regionable_type'=>'village']); //Siempat Rube Ii
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86240, 'regionable_type'=>'village']); //Siempat Rube Iv
                DB::table('regionables')->insert(['region_id'=>1218, 'regionable_id'=>86241, 'regionable_type'=>'village']); //Traju
        DB::table('regions')->insert(['id'=>1219, 'parent'=>546, 'code'=>'223', 'type'=>'city', 'name'=>'City 223, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1219, 'regionable_id'=>486, 'regionable_type'=>'city']); //Toba Samosir regencies
        DB::table('regionables')->insert(['region_id'=>1219, 'regionable_id'=>487, 'regionable_type'=>'city']); //Samosir regencies
            DB::table('regions')->insert(['id'=>1220, 'parent'=>1219, 'code'=>'2239', 'type'=>'districts', 'name'=>'Districts 2239, City 223, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7624, 'regionable_type'=>'districts']); //Harian
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7625, 'regionable_type'=>'districts']); //Onan Runggu
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7626, 'regionable_type'=>'districts']); //Pangururan
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7627, 'regionable_type'=>'districts']); //Ronggur Nihuta
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7628, 'regionable_type'=>'districts']); //Palipi
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7629, 'regionable_type'=>'districts']); //Nainggolan
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7630, 'regionable_type'=>'districts']); //Simanindo
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7631, 'regionable_type'=>'districts']); //Sitio-tio
            DB::table('regionables')->insert(['region_id'=>1220, 'regionable_id'=>7632, 'regionable_type'=>'districts']); //Sianjur Mula-mula
                DB::table('regions')->insert(['id'=>1221, 'parent'=>1220, 'code'=>'22396', 'type'=>'village', 'name'=>'Village 22396, Districts 2239, City 223, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86536, 'regionable_type'=>'village']); //Pasar Pangururan
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86592, 'regionable_type'=>'village']); //Aek Sipitudai
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86593, 'regionable_type'=>'village']); //Boho
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86594, 'regionable_type'=>'village']); //Bonan Dolok
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86595, 'regionable_type'=>'village']); //Ginolat
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86596, 'regionable_type'=>'village']); //Hasinggaan
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86597, 'regionable_type'=>'village']); //Huta Ginjang
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86598, 'regionable_type'=>'village']); //Huta Gurgur
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86599, 'regionable_type'=>'village']); //Sari Marihit
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86600, 'regionable_type'=>'village']); //Sianjur Mulamula
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86601, 'regionable_type'=>'village']); //Siboro
                DB::table('regionables')->insert(['region_id'=>1221, 'regionable_id'=>86602, 'regionable_type'=>'village']); //Singkam
        DB::table('regions')->insert(['id'=>1222, 'parent'=>546, 'code'=>'224', 'type'=>'city', 'name'=>'City 224, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1222, 'regionable_id'=>488, 'regionable_type'=>'city']); //Tapanuli Utara regencies
        DB::table('regionables')->insert(['region_id'=>1222, 'regionable_id'=>489, 'regionable_type'=>'city']); //Humbang Hasundutan regencies
            DB::table('regions')->insert(['id'=>1223, 'parent'=>1222, 'code'=>'2245', 'type'=>'districts', 'name'=>'Districts 2245, City 224, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7633, 'regionable_type'=>'districts']); //Tarutung
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7635, 'regionable_type'=>'districts']); //Sipoholon
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7636, 'regionable_type'=>'districts']); //Parmonangan
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7637, 'regionable_type'=>'districts']); //Pagaran
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7648, 'regionable_type'=>'districts']); //Onan Ganjang
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7649, 'regionable_type'=>'districts']); //Pakkat
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7650, 'regionable_type'=>'districts']); //Parlilitan
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7651, 'regionable_type'=>'districts']); //Tara Bintang
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7652, 'regionable_type'=>'districts']); //Dolok Sanggul
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7653, 'regionable_type'=>'districts']); //Pollung
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7654, 'regionable_type'=>'districts']); //Sijama Polang
            DB::table('regionables')->insert(['region_id'=>1223, 'regionable_id'=>7655, 'regionable_type'=>'districts']); //Bakti Raja
                DB::table('regions')->insert(['id'=>1224, 'parent'=>1223, 'code'=>'22457', 'type'=>'village', 'name'=>'Village 22457, Districts 2245, City 224, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86909, 'regionable_type'=>'village']); //Aek Lung
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86910, 'regionable_type'=>'village']); //Bonani Onan
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86911, 'regionable_type'=>'village']); //Dolok Sanggul (pasar Dolok Sanggul)
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86912, 'regionable_type'=>'village']); //Huta Gurgur
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86913, 'regionable_type'=>'village']); //Hutabagasan
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86914, 'regionable_type'=>'village']); //Hutaraja
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86915, 'regionable_type'=>'village']); //Janji
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86916, 'regionable_type'=>'village']); //Lumban Purba
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86917, 'regionable_type'=>'village']); //Lumban Tobing
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86918, 'regionable_type'=>'village']); //Matiti I
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86919, 'regionable_type'=>'village']); //Matiti Ii
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86920, 'regionable_type'=>'village']); //Pakkat
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86921, 'regionable_type'=>'village']); //Parik Sinomba
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86922, 'regionable_type'=>'village']); //Pasaribu
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86923, 'regionable_type'=>'village']); //Purba Dolok
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86924, 'regionable_type'=>'village']); //Purba Manalu
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86925, 'regionable_type'=>'village']); //Saitnihuta
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86926, 'regionable_type'=>'village']); //Sampean
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86927, 'regionable_type'=>'village']); //Sigala Gala (silaga Laga)
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86928, 'regionable_type'=>'village']); //Sihite I
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86929, 'regionable_type'=>'village']); //Sihite Ii
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86930, 'regionable_type'=>'village']); //Sileang
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86931, 'regionable_type'=>'village']); //Simangaronsang
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86932, 'regionable_type'=>'village']); //Simarigung
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86933, 'regionable_type'=>'village']); //Sirisirisi
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86934, 'regionable_type'=>'village']); //Sosor Gonting
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86935, 'regionable_type'=>'village']); //Sosor Tambok
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86936, 'regionable_type'=>'village']); //Sosortolong Sihite Iii
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86937, 'regionable_type'=>'village']); //Aek Nauli I
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86938, 'regionable_type'=>'village']); //Aek Nauli Ii
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86939, 'regionable_type'=>'village']); //Huta Julu
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86940, 'regionable_type'=>'village']); //Huta Paung
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86941, 'regionable_type'=>'village']); //Huta Paung Utara
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86942, 'regionable_type'=>'village']); //Pandumaan
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86943, 'regionable_type'=>'village']); //Pansur Batu
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86944, 'regionable_type'=>'village']); //Pardomuan
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86945, 'regionable_type'=>'village']); //Parsingguran I
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86946, 'regionable_type'=>'village']); //Parsingguran Ii
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86947, 'regionable_type'=>'village']); //Pollung
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86948, 'regionable_type'=>'village']); //Ria-ria
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86949, 'regionable_type'=>'village']); //Sipitu Huta
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86950, 'regionable_type'=>'village']); //Batu Nagajar
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86951, 'regionable_type'=>'village']); //Bonan Dolok I
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86952, 'regionable_type'=>'village']); //Bonan Dolok Ii
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86953, 'regionable_type'=>'village']); //Hutaginjang
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86954, 'regionable_type'=>'village']); //Nagurguran
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86955, 'regionable_type'=>'village']); //Sanggaran I
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86956, 'regionable_type'=>'village']); //Siborboron
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86957, 'regionable_type'=>'village']); //Sibuntuon
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86958, 'regionable_type'=>'village']); //Sigulok
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86959, 'regionable_type'=>'village']); //Sitapongan
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86960, 'regionable_type'=>'village']); //Marbun
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86961, 'regionable_type'=>'village']); //Marbun Tonga Marbun Dolok
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86962, 'regionable_type'=>'village']); //Simamora
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86963, 'regionable_type'=>'village']); //Simangulampe
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86964, 'regionable_type'=>'village']); //Sinambela
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86965, 'regionable_type'=>'village']); //Siunong-unong Julu
                DB::table('regionables')->insert(['region_id'=>1224, 'regionable_id'=>86966, 'regionable_type'=>'village']); //Tipang
            DB::table('regions')->insert(['id'=>1225, 'parent'=>1222, 'code'=>'2247', 'type'=>'districts', 'name'=>'Districts 2247, City 224, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1225, 'regionable_id'=>7643, 'regionable_type'=>'districts']); //Sipahutar
            DB::table('regionables')->insert(['region_id'=>1225, 'regionable_id'=>7644, 'regionable_type'=>'districts']); //Pangaribuan
            DB::table('regionables')->insert(['region_id'=>1225, 'regionable_id'=>7645, 'regionable_type'=>'districts']); //Garoga
            DB::table('regionables')->insert(['region_id'=>1225, 'regionable_id'=>7646, 'regionable_type'=>'districts']); //Siborong-borong
            DB::table('regionables')->insert(['region_id'=>1225, 'regionable_id'=>7647, 'regionable_type'=>'districts']); //Muara
            DB::table('regionables')->insert(['region_id'=>1225, 'regionable_id'=>7656, 'regionable_type'=>'districts']); //Lintong Nihuta
            DB::table('regionables')->insert(['region_id'=>1225, 'regionable_id'=>7657, 'regionable_type'=>'districts']); //Paranginan
                DB::table('regions')->insert(['id'=>1226, 'parent'=>1225, 'code'=>'22475', 'type'=>'village', 'name'=>'Village 22475, Districts 2247, City 224, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86967, 'regionable_type'=>'village']); //Bonan Dolok
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86968, 'regionable_type'=>'village']); //Dolok Margu (dolok Marduga)
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86969, 'regionable_type'=>'village']); //Habeahan
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86970, 'regionable_type'=>'village']); //Hutasoit
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86971, 'regionable_type'=>'village']); //Hutasoit Ii
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86972, 'regionable_type'=>'village']); //Lobu Tua
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86973, 'regionable_type'=>'village']); //Naga Saribu I
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86974, 'regionable_type'=>'village']); //Naga Saribu Ii
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86975, 'regionable_type'=>'village']); //Nagasaribu Iii
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86976, 'regionable_type'=>'village']); //Nagasaribu Iv
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86977, 'regionable_type'=>'village']); //Nagasaribu V
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86978, 'regionable_type'=>'village']); //Pargaulan
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86979, 'regionable_type'=>'village']); //Parulohan
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86980, 'regionable_type'=>'village']); //Sibuntoan Parpea / Parpean
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86981, 'regionable_type'=>'village']); //Sibuntuon
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86982, 'regionable_type'=>'village']); //Sigompul
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86983, 'regionable_type'=>'village']); //Sigumpar
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86984, 'regionable_type'=>'village']); //Siharjulu
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86985, 'regionable_type'=>'village']); //Siponjot
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86986, 'regionable_type'=>'village']); //Sitio Ii
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86987, 'regionable_type'=>'village']); //Sitolu Bahal
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86988, 'regionable_type'=>'village']); //Tapian Nauli
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86989, 'regionable_type'=>'village']); //Lobu Tolong
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86990, 'regionable_type'=>'village']); //Lobutolong Habinsaran
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86991, 'regionable_type'=>'village']); //Lumban Barat
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86992, 'regionable_type'=>'village']); //Lumban Sialaman
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86993, 'regionable_type'=>'village']); //Lumban Sianturi
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86994, 'regionable_type'=>'village']); //Paranginan Selatan
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86995, 'regionable_type'=>'village']); //Paranginan Utara
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86996, 'regionable_type'=>'village']); //Pearung
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86997, 'regionable_type'=>'village']); //Pearung Silali
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86998, 'regionable_type'=>'village']); //Siboru Torop
                DB::table('regionables')->insert(['region_id'=>1226, 'regionable_id'=>86999, 'regionable_type'=>'village']); //Sihonongan
        DB::table('regions')->insert(['id'=>1227, 'parent'=>546, 'code'=>'225', 'type'=>'city', 'name'=>'City 225, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1227, 'regionable_id'=>490, 'regionable_type'=>'city']); //Sibolga city
        DB::table('regionables')->insert(['region_id'=>1227, 'regionable_id'=>491, 'regionable_type'=>'city']); //Tapanuli Tengah regencies
            DB::table('regions')->insert(['id'=>1228, 'parent'=>1227, 'code'=>'2256', 'type'=>'districts', 'name'=>'Districts 2256, City 225, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7662, 'regionable_type'=>'districts']); //Kolang
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7663, 'regionable_type'=>'districts']); //Pasaribu Tobing
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7664, 'regionable_type'=>'districts']); //Sorkam Barat
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7665, 'regionable_type'=>'districts']); //Sorkam
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7666, 'regionable_type'=>'districts']); //Barus
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7667, 'regionable_type'=>'districts']); //Sosor Gadong
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7668, 'regionable_type'=>'districts']); //Barus Utara
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7669, 'regionable_type'=>'districts']); //Sirandorung
            DB::table('regionables')->insert(['region_id'=>1228, 'regionable_id'=>7670, 'regionable_type'=>'districts']); //Manduamas
                DB::table('regions')->insert(['id'=>1229, 'parent'=>1228, 'code'=>'22565', 'type'=>'village', 'name'=>'Village 22565, Districts 2256, City 225, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87091, 'regionable_type'=>'village']); //Bajamas
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87092, 'regionable_type'=>'village']); //Masnauli
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87093, 'regionable_type'=>'village']); //Muara Ore
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87094, 'regionable_type'=>'village']); //Pardomuan
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87095, 'regionable_type'=>'village']); //Sampang Maruhur
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87096, 'regionable_type'=>'village']); //Sigodung
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87097, 'regionable_type'=>'village']); //Simpang Tiga Lae Bingke
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87098, 'regionable_type'=>'village']); //Siordang
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87099, 'regionable_type'=>'village']); //Binjohara
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87100, 'regionable_type'=>'village']); //Lae Monong
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87101, 'regionable_type'=>'village']); //Manduamas Lama
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87102, 'regionable_type'=>'village']); //Pagaran Nauli
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87103, 'regionable_type'=>'village']); //Pasar Onan Manduamas
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87104, 'regionable_type'=>'village']); //Saragih
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87105, 'regionable_type'=>'village']); //Sarma Nauli
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87106, 'regionable_type'=>'village']); //Tumba
                DB::table('regionables')->insert(['region_id'=>1229, 'regionable_id'=>87107, 'regionable_type'=>'village']); //Tumba Jae
        DB::table('regions')->insert(['id'=>1230, 'parent'=>546, 'code'=>'226', 'type'=>'city', 'name'=>'City 226, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1230, 'regionable_id'=>491, 'regionable_type'=>'city']); //Tapanuli Tengah regencies
            DB::table('regions')->insert(['id'=>1231, 'parent'=>1230, 'code'=>'2261', 'type'=>'districts', 'name'=>'Districts 2261, City 226, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1231, 'regionable_id'=>7671, 'regionable_type'=>'districts']); //Sitahuis
            DB::table('regionables')->insert(['region_id'=>1231, 'regionable_id'=>7672, 'regionable_type'=>'districts']); //Pandan
            DB::table('regionables')->insert(['region_id'=>1231, 'regionable_id'=>7673, 'regionable_type'=>'districts']); //Sarudik
            DB::table('regionables')->insert(['region_id'=>1231, 'regionable_id'=>7674, 'regionable_type'=>'districts']); //Tukka
            DB::table('regionables')->insert(['region_id'=>1231, 'regionable_id'=>7675, 'regionable_type'=>'districts']); //Tapian Nauli
                DB::table('regions')->insert(['id'=>1232, 'parent'=>1231, 'code'=>'22618', 'type'=>'village', 'name'=>'Village 22618, Districts 2261, City 226, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87135, 'regionable_type'=>'village']); //Sait Nihuta Kalangan Ii
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87136, 'regionable_type'=>'village']); //Aloban
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87137, 'regionable_type'=>'village']); //Bair
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87138, 'regionable_type'=>'village']); //Mela Dolok
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87139, 'regionable_type'=>'village']); //Mela I
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87140, 'regionable_type'=>'village']); //Mela Ii
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87141, 'regionable_type'=>'village']); //Tapian Nauli I
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87142, 'regionable_type'=>'village']); //Tapian Nauli Ii
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87143, 'regionable_type'=>'village']); //Tapian Nauli Iii
                DB::table('regionables')->insert(['region_id'=>1232, 'regionable_id'=>87144, 'regionable_type'=>'village']); //Tapian Nauli Iv
            DB::table('regions')->insert(['id'=>1233, 'parent'=>1230, 'code'=>'2265', 'type'=>'districts', 'name'=>'Districts 2265, City 226, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1233, 'regionable_id'=>7676, 'regionable_type'=>'districts']); //Andam Dewi
            DB::table('regionables')->insert(['region_id'=>1233, 'regionable_id'=>7677, 'regionable_type'=>'districts']); //Lumut
            DB::table('regionables')->insert(['region_id'=>1233, 'regionable_id'=>7678, 'regionable_type'=>'districts']); //Badiri
            DB::table('regionables')->insert(['region_id'=>1233, 'regionable_id'=>7679, 'regionable_type'=>'districts']); //Sibabangun
            DB::table('regionables')->insert(['region_id'=>1233, 'regionable_id'=>7680, 'regionable_type'=>'districts']); //Pinangsori
            DB::table('regionables')->insert(['region_id'=>1233, 'regionable_id'=>7681, 'regionable_type'=>'districts']); //Suka Bangun
                DB::table('regions')->insert(['id'=>1234, 'parent'=>1233, 'code'=>'22654', 'type'=>'village', 'name'=>'Village 22654, Districts 2265, City 226, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87159, 'regionable_type'=>'village']); //Aek Gambir
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87160, 'regionable_type'=>'village']); //Lumut
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87161, 'regionable_type'=>'village']); //Lumut Maju
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87162, 'regionable_type'=>'village']); //Lumut Nauli
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87163, 'regionable_type'=>'village']); //Masundung
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87164, 'regionable_type'=>'village']); //Sialogo
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87165, 'regionable_type'=>'village']); //Sialogo (sihalogo)
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87166, 'regionable_type'=>'village']); //Aek Horsik
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87167, 'regionable_type'=>'village']); //Gunung Kelambu
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87168, 'regionable_type'=>'village']); //Hutabalang
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87169, 'regionable_type'=>'village']); //Jago Jago
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87170, 'regionable_type'=>'village']); //Kebun Pisang
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87171, 'regionable_type'=>'village']); //Lopian
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87172, 'regionable_type'=>'village']); //Lubuk Ampolu
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87173, 'regionable_type'=>'village']); //Pagaran Honas
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87174, 'regionable_type'=>'village']); //Sitardas
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87175, 'regionable_type'=>'village']); //Anggoli
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87176, 'regionable_type'=>'village']); //Hutagurgur
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87177, 'regionable_type'=>'village']); //Mombang Boru
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87178, 'regionable_type'=>'village']); //Muara Sibuntuon
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87179, 'regionable_type'=>'village']); //Sibabangun
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87180, 'regionable_type'=>'village']); //Sibio Bio
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87181, 'regionable_type'=>'village']); //Simanosor
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87182, 'regionable_type'=>'village']); //Gunung Marijo
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87183, 'regionable_type'=>'village']); //Parjalihotan Baru
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87184, 'regionable_type'=>'village']); //Pinang Baru
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87185, 'regionable_type'=>'village']); //Pinangsori
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87186, 'regionable_type'=>'village']); //Sihaporas
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87187, 'regionable_type'=>'village']); //Sitonong Bangun
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87188, 'regionable_type'=>'village']); //Toga Basir
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87189, 'regionable_type'=>'village']); //Janji Maria
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87190, 'regionable_type'=>'village']); //Pulo Pakkat I
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87191, 'regionable_type'=>'village']); //Pulo Pakkat Ii
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87192, 'regionable_type'=>'village']); //Sihadatuon
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87193, 'regionable_type'=>'village']); //Sihapas
                DB::table('regionables')->insert(['region_id'=>1234, 'regionable_id'=>87194, 'regionable_type'=>'village']); //Tebing Tinggi
        DB::table('regions')->insert(['id'=>1235, 'parent'=>546, 'code'=>'227', 'type'=>'city', 'name'=>'City 227, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1235, 'regionable_id'=>492, 'regionable_type'=>'city']); //Padang Sidempuan city
        DB::table('regionables')->insert(['region_id'=>1235, 'regionable_id'=>493, 'regionable_type'=>'city']); //Tapanuli Selatan regencies
        DB::table('regionables')->insert(['region_id'=>1235, 'regionable_id'=>494, 'regionable_type'=>'city']); //Padang Lawas Utara regencies
        DB::table('regionables')->insert(['region_id'=>1235, 'regionable_id'=>495, 'regionable_type'=>'city']); //Padang Lawas regencies
            DB::table('regions')->insert(['id'=>1236, 'parent'=>1235, 'code'=>'2274', 'type'=>'districts', 'name'=>'Districts 2274, City 227, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1236, 'regionable_id'=>7695, 'regionable_type'=>'districts']); //Sipirok
            DB::table('regionables')->insert(['region_id'=>1236, 'regionable_id'=>7696, 'regionable_type'=>'districts']); //Arse
            DB::table('regionables')->insert(['region_id'=>1236, 'regionable_id'=>7703, 'regionable_type'=>'districts']); //Portibi
            DB::table('regionables')->insert(['region_id'=>1236, 'regionable_id'=>7704, 'regionable_type'=>'districts']); //Simangambat
            DB::table('regionables')->insert(['region_id'=>1236, 'regionable_id'=>7711, 'regionable_type'=>'districts']); //Batang Lubu Sutam
            DB::table('regionables')->insert(['region_id'=>1236, 'regionable_id'=>7712, 'regionable_type'=>'districts']); //Huristak
                DB::table('regions')->insert(['id'=>1237, 'parent'=>1236, 'code'=>'22742', 'type'=>'village', 'name'=>'Village 22742, Districts 2274, City 227, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87380, 'regionable_type'=>'village']); //Aek Batang Paya
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87381, 'regionable_type'=>'village']); //Bagas Lombang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87382, 'regionable_type'=>'village']); //Bagas Nagodang Iii
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87383, 'regionable_type'=>'village']); //Baringin
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87384, 'regionable_type'=>'village']); //Barnang/barnag Koling
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87385, 'regionable_type'=>'village']); //Batang Tura
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87386, 'regionable_type'=>'village']); //Batang Tura Julu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87387, 'regionable_type'=>'village']); //Batu Satail
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87388, 'regionable_type'=>'village']); //Bulu Mario
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87389, 'regionable_type'=>'village']); //Bunga Bondar
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87390, 'regionable_type'=>'village']); //Dolok Sordang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87391, 'regionable_type'=>'village']); //Dolok Sordang Julu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87392, 'regionable_type'=>'village']); //Gadu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87393, 'regionable_type'=>'village']); //Hasang Marsada
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87394, 'regionable_type'=>'village']); //Huta Suhut I
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87395, 'regionable_type'=>'village']); //Janji Mauli
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87396, 'regionable_type'=>'village']); //Kilang Papan
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87397, 'regionable_type'=>'village']); //Luat Lombang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87398, 'regionable_type'=>'village']); //Marsada
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87399, 'regionable_type'=>'village']); //Padang Bujur
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87400, 'regionable_type'=>'village']); //Pahae Aek Sagala
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87401, 'regionable_type'=>'village']); //Panaungan
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87402, 'regionable_type'=>'village']); //Pangaribuan
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87403, 'regionable_type'=>'village']); //Pangurabaan
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87404, 'regionable_type'=>'village']); //Paran Dolok Mardomu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87405, 'regionable_type'=>'village']); //Paran Julu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87406, 'regionable_type'=>'village']); //Paran Padang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87407, 'regionable_type'=>'village']); //Parau Sorat
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87408, 'regionable_type'=>'village']); //Pargarutan
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87409, 'regionable_type'=>'village']); //Pasar Sipirok
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87410, 'regionable_type'=>'village']); //Ramba Sihosur
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87411, 'regionable_type'=>'village']); //Saba Batang Miha
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87412, 'regionable_type'=>'village']); //Sampean
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87413, 'regionable_type'=>'village']); //Sarogodung
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87414, 'regionable_type'=>'village']); //Siala Gundi
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87415, 'regionable_type'=>'village']); //Sialaman
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87416, 'regionable_type'=>'village']); //Sibadoar
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87417, 'regionable_type'=>'village']); //Simaninggir
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87418, 'regionable_type'=>'village']); //Sipirok Godang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87419, 'regionable_type'=>'village']); //Situmba
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87420, 'regionable_type'=>'village']); //Situmba Julu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87421, 'regionable_type'=>'village']); //Somba Tolang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87927, 'regionable_type'=>'village']); //Aek Sorik
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87928, 'regionable_type'=>'village']); //Botung
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87929, 'regionable_type'=>'village']); //Gunung Intan
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87930, 'regionable_type'=>'village']); //Gunung Manaon
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87931, 'regionable_type'=>'village']); //Hatongga
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87932, 'regionable_type'=>'village']); //Huta Baru
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87933, 'regionable_type'=>'village']); //Hutanopan
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87934, 'regionable_type'=>'village']); //Manggis
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87935, 'regionable_type'=>'village']); //Muara Malinto Baru
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87936, 'regionable_type'=>'village']); //Muara Malinto Lama
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87937, 'regionable_type'=>'village']); //Muara Tige
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87938, 'regionable_type'=>'village']); //Pagaran Baringin/beringin
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87939, 'regionable_type'=>'village']); //Pagaran Dolok Pinarik
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87940, 'regionable_type'=>'village']); //Pagaran Manggis
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87941, 'regionable_type'=>'village']); //Pagaran Tayas
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87942, 'regionable_type'=>'village']); //Papaso
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87943, 'regionable_type'=>'village']); //Pinarik
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87944, 'regionable_type'=>'village']); //Rombayan
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87945, 'regionable_type'=>'village']); //Salambue
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87946, 'regionable_type'=>'village']); //Siadam
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87947, 'regionable_type'=>'village']); //Sibodak Papaso
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87948, 'regionable_type'=>'village']); //Siojo
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87949, 'regionable_type'=>'village']); //Tamiang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87950, 'regionable_type'=>'village']); //Tandalon
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87951, 'regionable_type'=>'village']); //Tangga Batu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87952, 'regionable_type'=>'village']); //Tanjung Barani
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87953, 'regionable_type'=>'village']); //Tanjung Baru
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87954, 'regionable_type'=>'village']); //Tanjung Botung Pinarik
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87955, 'regionable_type'=>'village']); //Binanga Tolu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87956, 'regionable_type'=>'village']); //Bulu Cina
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87957, 'regionable_type'=>'village']); //Gala Bonang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87958, 'regionable_type'=>'village']); //Ganal
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87959, 'regionable_type'=>'village']); //Gonting Jae
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87960, 'regionable_type'=>'village']); //Gonting Julu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87961, 'regionable_type'=>'village']); //Gunung Manaon Hr
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87962, 'regionable_type'=>'village']); //Gunung Matinggi
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87963, 'regionable_type'=>'village']); //Huristak
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87964, 'regionable_type'=>'village']); //Huta Pasir Ulak Tano
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87965, 'regionable_type'=>'village']); //Paran Tonga Hr (an)
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87966, 'regionable_type'=>'village']); //Pasar Huristak
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87967, 'regionable_type'=>'village']); //Pasir Lancat Baru
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87968, 'regionable_type'=>'village']); //Pasir Lancat Lama
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87969, 'regionable_type'=>'village']); //Pasir Pinang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87970, 'regionable_type'=>'village']); //Paya Bujing
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87971, 'regionable_type'=>'village']); //Pulo Barian/bariang
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87972, 'regionable_type'=>'village']); //Ramba
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87973, 'regionable_type'=>'village']); //Siala Gundi
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87974, 'regionable_type'=>'village']); //Sigading
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87975, 'regionable_type'=>'village']); //Sihoda-hoda (tarutung)
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87976, 'regionable_type'=>'village']); //Sipirok Baru
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87977, 'regionable_type'=>'village']); //Tanjung Baringin
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87978, 'regionable_type'=>'village']); //Tanjung Morang Hr
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87979, 'regionable_type'=>'village']); //Tobing Jae
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87980, 'regionable_type'=>'village']); //Tobing Julu
                DB::table('regionables')->insert(['region_id'=>1237, 'regionable_id'=>87981, 'regionable_type'=>'village']); //Tobing Tinggi Hr
            DB::table('regions')->insert(['id'=>1238, 'parent'=>1235, 'code'=>'2275', 'type'=>'districts', 'name'=>'Districts 2275, City 227, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7687, 'regionable_type'=>'districts']); //Padang Sidempuan Hutaimbaru
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7697, 'regionable_type'=>'districts']); //Aek Bilah
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7698, 'regionable_type'=>'districts']); //Saipar Dolok Hole
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7705, 'regionable_type'=>'districts']); //Padang Bolak Julu
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7706, 'regionable_type'=>'districts']); //Padang Bolak
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7707, 'regionable_type'=>'districts']); //Halongonan
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7708, 'regionable_type'=>'districts']); //Dolok
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7709, 'regionable_type'=>'districts']); //Dolok Sigompulon
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7713, 'regionable_type'=>'districts']); //Aek Nabara Barumun
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7714, 'regionable_type'=>'districts']); //Sihapas Barumun
            DB::table('regionables')->insert(['region_id'=>1238, 'regionable_id'=>7715, 'regionable_type'=>'districts']); //Barumun Tengah
                DB::table('regions')->insert(['id'=>1239, 'parent'=>1238, 'code'=>'22755', 'type'=>'village', 'name'=>'Village 22755, Districts 2275, City 227, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87982, 'regionable_type'=>'village']); //Aek Bonban
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87983, 'regionable_type'=>'village']); //Aek Buaton
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87984, 'regionable_type'=>'village']); //Aek Nabara Jae
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87985, 'regionable_type'=>'village']); //Aek Nabara Julu
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87986, 'regionable_type'=>'village']); //Aek Nabara Tonga
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87987, 'regionable_type'=>'village']); //Bangkuang
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87988, 'regionable_type'=>'village']); //Hadungdung Aek Rampa
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87989, 'regionable_type'=>'village']); //Hadungdung Pintu Padang
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87990, 'regionable_type'=>'village']); //Huta Bargot
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87991, 'regionable_type'=>'village']); //Janji Maria
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87992, 'regionable_type'=>'village']); //Marenu
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87993, 'regionable_type'=>'village']); //Padang Galugur Julu
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87994, 'regionable_type'=>'village']); //Padang Galugur Tonga
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87995, 'regionable_type'=>'village']); //Padang Garugur Jae
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87996, 'regionable_type'=>'village']); //Paran Julu
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87997, 'regionable_type'=>'village']); //Paran Tonga An
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87998, 'regionable_type'=>'village']); //Paya Bahung
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>87999, 'regionable_type'=>'village']); //Sayur Mahincat
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88000, 'regionable_type'=>'village']); //Sayur Matua
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88001, 'regionable_type'=>'village']); //Sidokan
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88002, 'regionable_type'=>'village']); //Sipagabu
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88003, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88004, 'regionable_type'=>'village']); //Tanjung Rokan
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88005, 'regionable_type'=>'village']); //Tobing
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88006, 'regionable_type'=>'village']); //Tobing Tinggi
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88007, 'regionable_type'=>'village']); //Aek Goti
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88008, 'regionable_type'=>'village']); //Balangka
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88009, 'regionable_type'=>'village']); //Gulangan
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88010, 'regionable_type'=>'village']); //Lubuk Gonting
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88011, 'regionable_type'=>'village']); //Padang Hasior Dolok
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88012, 'regionable_type'=>'village']); //Padang Hasior Lombang
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88013, 'regionable_type'=>'village']); //Paran Dolok
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88014, 'regionable_type'=>'village']); //Silenjeng
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88015, 'regionable_type'=>'village']); //Simaninggir
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88016, 'regionable_type'=>'village']); //Sitada Tada
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88017, 'regionable_type'=>'village']); //Tanjung Morang
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88018, 'regionable_type'=>'village']); //Ujung Gading
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88019, 'regionable_type'=>'village']); //Ujung Padang
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88020, 'regionable_type'=>'village']); //Aek Siala
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88021, 'regionable_type'=>'village']); //Aek Tanduk
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88022, 'regionable_type'=>'village']); //Aek Tunjang
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88023, 'regionable_type'=>'village']); //Bahal Batu
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88024, 'regionable_type'=>'village']); //Bakkudu (bangkudu)
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88025, 'regionable_type'=>'village']); //Bara Batu
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88026, 'regionable_type'=>'village']); //Batu Sundung
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88027, 'regionable_type'=>'village']); //Binanga
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88028, 'regionable_type'=>'village']); //Bire
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88029, 'regionable_type'=>'village']); //Gading
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88030, 'regionable_type'=>'village']); //Ginduang Batu
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88031, 'regionable_type'=>'village']); //Gunung Baringin
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88032, 'regionable_type'=>'village']); //Gunung Malintang
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88033, 'regionable_type'=>'village']); //Gunung Manaon Ur
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88034, 'regionable_type'=>'village']); //Huta Ruhom
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88035, 'regionable_type'=>'village']); //Janji Manahan
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88036, 'regionable_type'=>'village']); //Janji Matogu Ur
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88037, 'regionable_type'=>'village']); //Janji Raja
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88038, 'regionable_type'=>'village']); //Manombo
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88039, 'regionable_type'=>'village']); //Padang Garugur
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88040, 'regionable_type'=>'village']); //Padang Matinggi
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88041, 'regionable_type'=>'village']); //Pangirkiran Dolok
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88042, 'regionable_type'=>'village']); //Paran Napa Dolok
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88043, 'regionable_type'=>'village']); //Paran Napa Jae
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88044, 'regionable_type'=>'village']); //Pasar Binanga
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88045, 'regionable_type'=>'village']); //Pp Makmur
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88046, 'regionable_type'=>'village']); //Sibatu Loting
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88047, 'regionable_type'=>'village']); //Sibontar
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88048, 'regionable_type'=>'village']); //Siboris Bahal
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88049, 'regionable_type'=>'village']); //Siboris Dolok
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88050, 'regionable_type'=>'village']); //Siboris Lombang
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88051, 'regionable_type'=>'village']); //Sidong-dong
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88052, 'regionable_type'=>'village']); //Sihaborgoan Barum
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88053, 'regionable_type'=>'village']); //Sihaborgoan Dalan
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88054, 'regionable_type'=>'village']); //Siolip
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88055, 'regionable_type'=>'village']); //Siparau
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88056, 'regionable_type'=>'village']); //Sisalean
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88057, 'regionable_type'=>'village']); //Tandihat
                DB::table('regionables')->insert(['region_id'=>1239, 'regionable_id'=>88058, 'regionable_type'=>'village']); //Unte Rudang
            DB::table('regions')->insert(['id'=>1240, 'parent'=>1235, 'code'=>'2276', 'type'=>'districts', 'name'=>'Districts 2276, City 227, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1240, 'regionable_id'=>7710, 'regionable_type'=>'districts']); //Batang Onang
            DB::table('regionables')->insert(['region_id'=>1240, 'regionable_id'=>7716, 'regionable_type'=>'districts']); //Sosopan
            DB::table('regionables')->insert(['region_id'=>1240, 'regionable_id'=>7717, 'regionable_type'=>'districts']); //Lubuk Barumun
            DB::table('regionables')->insert(['region_id'=>1240, 'regionable_id'=>7718, 'regionable_type'=>'districts']); //Ulu Barumun
            DB::table('regionables')->insert(['region_id'=>1240, 'regionable_id'=>7719, 'regionable_type'=>'districts']); //Barumun
            DB::table('regionables')->insert(['region_id'=>1240, 'regionable_id'=>7720, 'regionable_type'=>'districts']); //Barumun Selatan
            DB::table('regionables')->insert(['region_id'=>1240, 'regionable_id'=>7721, 'regionable_type'=>'districts']); //Sosa
                DB::table('regions')->insert(['id'=>1241, 'parent'=>1240, 'code'=>'22765', 'type'=>'village', 'name'=>'Village 22765, Districts 2276, City 227, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88161, 'regionable_type'=>'village']); //Aek Tinga
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88162, 'regionable_type'=>'village']); //Aer Bale
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88163, 'regionable_type'=>'village']); //Ampolu
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88164, 'regionable_type'=>'village']); //Batu Gajah
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88165, 'regionable_type'=>'village']); //Bonan Dolok
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88166, 'regionable_type'=>'village']); //Gunung Baringin
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88167, 'regionable_type'=>'village']); //Gunung Tua
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88168, 'regionable_type'=>'village']); //Handio
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88169, 'regionable_type'=>'village']); //Hapung
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88170, 'regionable_type'=>'village']); //Hapung Torop
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88171, 'regionable_type'=>'village']); //Harang Jae
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88172, 'regionable_type'=>'village']); //Harang Julu
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88173, 'regionable_type'=>'village']); //Horuan
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88174, 'regionable_type'=>'village']); //Hurung Jilok
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88175, 'regionable_type'=>'village']); //Huta Imbaru
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88176, 'regionable_type'=>'village']); //Huta Raja Lama
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88177, 'regionable_type'=>'village']); //Janji Raja
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88178, 'regionable_type'=>'village']); //Lumban Huayan
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88179, 'regionable_type'=>'village']); //Mananti Sosa Julu
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88180, 'regionable_type'=>'village']); //Mandian
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88181, 'regionable_type'=>'village']); //Mondang
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88182, 'regionable_type'=>'village']); //Parapat
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88183, 'regionable_type'=>'village']); //Parau Sorat
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88184, 'regionable_type'=>'village']); //Pasar Ujung Batu
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88185, 'regionable_type'=>'village']); //Pasir Jae
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88186, 'regionable_type'=>'village']); //Pasir Julu
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88187, 'regionable_type'=>'village']); //Plasma Mondang (trans Sosa Iv)
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88188, 'regionable_type'=>'village']); //Ramba
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88189, 'regionable_type'=>'village']); //Rao Rao Dolok
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88190, 'regionable_type'=>'village']); //Roburan
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88191, 'regionable_type'=>'village']); //Siborna Bunut
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88192, 'regionable_type'=>'village']); //Siginduang
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88193, 'regionable_type'=>'village']); //Simarancar
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88194, 'regionable_type'=>'village']); //Sisoma
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88195, 'regionable_type'=>'village']); //Sungai Jior
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88196, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88197, 'regionable_type'=>'village']); //Tanjung Bale
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88198, 'regionable_type'=>'village']); //Tanjung Botung Sosa Jae
                DB::table('regionables')->insert(['region_id'=>1241, 'regionable_id'=>88199, 'regionable_type'=>'village']); //Ujung Batu
            DB::table('regions')->insert(['id'=>1242, 'parent'=>1235, 'code'=>'2277', 'type'=>'districts', 'name'=>'Districts 2277, City 227, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1242, 'regionable_id'=>7699, 'regionable_type'=>'districts']); //Batang Angkola
            DB::table('regionables')->insert(['region_id'=>1242, 'regionable_id'=>7700, 'regionable_type'=>'districts']); //Sayur Matinggi
            DB::table('regionables')->insert(['region_id'=>1242, 'regionable_id'=>7701, 'regionable_type'=>'districts']); //Tano Tombangan Angkola
            DB::table('regionables')->insert(['region_id'=>1242, 'regionable_id'=>7722, 'regionable_type'=>'districts']); //Huta Raja Tinggi
                DB::table('regions')->insert(['id'=>1243, 'parent'=>1242, 'code'=>'22774', 'type'=>'village', 'name'=>'Village 22774, Districts 2277, City 227, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87500, 'regionable_type'=>'village']); //Aek Badak Jae
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87501, 'regionable_type'=>'village']); //Aek Badak Julu
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87502, 'regionable_type'=>'village']); //Aek Libung
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87503, 'regionable_type'=>'village']); //Aek Raja
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87504, 'regionable_type'=>'village']); //Bange
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87505, 'regionable_type'=>'village']); //Bulu Gading
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87506, 'regionable_type'=>'village']); //Huta Pardomuan
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87507, 'regionable_type'=>'village']); //Janji Mauli Baringin
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87508, 'regionable_type'=>'village']); //Lumban Huayan
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87509, 'regionable_type'=>'village']); //Mondang
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87510, 'regionable_type'=>'village']); //Samonggal Parmonangan
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87511, 'regionable_type'=>'village']); //Sayur Matinggi
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87512, 'regionable_type'=>'village']); //Sialang
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87513, 'regionable_type'=>'village']); //Silaiya
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87514, 'regionable_type'=>'village']); //Silaiya Tanjung Leuk
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87515, 'regionable_type'=>'village']); //Simpang Tolang
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87516, 'regionable_type'=>'village']); //Sipange Godang
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87517, 'regionable_type'=>'village']); //Sipange Julu
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87518, 'regionable_type'=>'village']); //Sipange Siunjam
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87519, 'regionable_type'=>'village']); //Tolang Jae
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87520, 'regionable_type'=>'village']); //Tolang Julu
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87521, 'regionable_type'=>'village']); //Aek Kahombu
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87522, 'regionable_type'=>'village']); //Aek Parupuk
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87523, 'regionable_type'=>'village']); //Aek Uncim
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87524, 'regionable_type'=>'village']); //Batu Horpak
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87525, 'regionable_type'=>'village']); //Harean
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87526, 'regionable_type'=>'village']); //Hutaraja
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87527, 'regionable_type'=>'village']); //Ingul Jae
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87528, 'regionable_type'=>'village']); //Kota Tua
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87529, 'regionable_type'=>'village']); //Lumban Jabi-jabi
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87530, 'regionable_type'=>'village']); //Lumban Ratus
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87531, 'regionable_type'=>'village']); //Panabari Hutatonga
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87532, 'regionable_type'=>'village']); //Panindoan
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87533, 'regionable_type'=>'village']); //Purba Tua
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87534, 'regionable_type'=>'village']); //Simaninggir Tt
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87535, 'regionable_type'=>'village']); //Sisoma
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87536, 'regionable_type'=>'village']); //Situmba
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>87537, 'regionable_type'=>'village']); //Tanjung Medan
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88200, 'regionable_type'=>'village']); //Ali Aga
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88201, 'regionable_type'=>'village']); //Gunung Mulia
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88202, 'regionable_type'=>'village']); //Huta Raja Tinggi
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88203, 'regionable_type'=>'village']); //Lubuk Bunut
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88204, 'regionable_type'=>'village']); //Mananti Sosa Jae
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88205, 'regionable_type'=>'village']); //Margo Mulia (pirtrans Sosa Iv)
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88206, 'regionable_type'=>'village']); //Mulya Sari
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88207, 'regionable_type'=>'village']); //Pagaran Dolok Sosa Jae
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88208, 'regionable_type'=>'village']); //Panyabungan
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88209, 'regionable_type'=>'village']); //Parmainan
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88210, 'regionable_type'=>'village']); //Pasar Panyabungan
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88211, 'regionable_type'=>'village']); //Payombur (payaombor)
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88212, 'regionable_type'=>'village']); //Pirtrans Sosa Ii
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88213, 'regionable_type'=>'village']); //Siabu
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88214, 'regionable_type'=>'village']); //Sibodak Sosa Jae
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88215, 'regionable_type'=>'village']); //Sido Mulyo (pirtrans Sosa Iii A)
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88216, 'regionable_type'=>'village']); //Sigala Gala
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88217, 'regionable_type'=>'village']); //Sigalapung
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88218, 'regionable_type'=>'village']); //Simangambat
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88219, 'regionable_type'=>'village']); //Sosa Mulia
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88220, 'regionable_type'=>'village']); //Suka Dame (pirtrans Sosa Iii B)
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88221, 'regionable_type'=>'village']); //Sungai Korang
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88222, 'regionable_type'=>'village']); //Tanjung Ale
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88223, 'regionable_type'=>'village']); //Tanjung Baringin
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88224, 'regionable_type'=>'village']); //Tanjung Sari (pirtrans Sosa Ib)
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88225, 'regionable_type'=>'village']); //Ujung Batu I
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88226, 'regionable_type'=>'village']); //Ujung Batu Ii
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88227, 'regionable_type'=>'village']); //Ujung Batu Iii
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88228, 'regionable_type'=>'village']); //Ujung Batu Iv
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88229, 'regionable_type'=>'village']); //Ujung Batu V
                DB::table('regionables')->insert(['region_id'=>1243, 'regionable_id'=>88230, 'regionable_type'=>'village']); //Ujung Padang
        DB::table('regions')->insert(['id'=>1244, 'parent'=>546, 'code'=>'228', 'type'=>'city', 'name'=>'City 228, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1244, 'regionable_id'=>496, 'regionable_type'=>'city']); //Gunungsitoli city
        DB::table('regionables')->insert(['region_id'=>1244, 'regionable_id'=>497, 'regionable_type'=>'city']); //Nias Barat regencies
        DB::table('regionables')->insert(['region_id'=>1244, 'regionable_id'=>498, 'regionable_type'=>'city']); //Nias Utara regencies
        DB::table('regionables')->insert(['region_id'=>1244, 'regionable_id'=>499, 'regionable_type'=>'city']); //Nias regencies
        DB::table('regionables')->insert(['region_id'=>1244, 'regionable_id'=>500, 'regionable_type'=>'city']); //Nias Selatan regencies
            DB::table('regions')->insert(['id'=>1245, 'parent'=>1244, 'code'=>'2286', 'type'=>'districts', 'name'=>'Districts 2286, City 228, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7731, 'regionable_type'=>'districts']); //Ulu Moro\o (ulu Narwo)
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7732, 'regionable_type'=>'districts']); //Mandrehe
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7733, 'regionable_type'=>'districts']); //Moro\o
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7734, 'regionable_type'=>'districts']); //Sirombu
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7735, 'regionable_type'=>'districts']); //Lahomi (gahori)
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7746, 'regionable_type'=>'districts']); //Alasa
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7747, 'regionable_type'=>'districts']); //Tugala Oyo
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7753, 'regionable_type'=>'districts']); //Ulugawo
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7758, 'regionable_type'=>'districts']); //Lolowau
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7759, 'regionable_type'=>'districts']); //Hilisalawa\ahe (hilisalawaahe)
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7760, 'regionable_type'=>'districts']); //O\o\u (oou)
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7761, 'regionable_type'=>'districts']); //Hilimegai
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7762, 'regionable_type'=>'districts']); //Onohazumba
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7763, 'regionable_type'=>'districts']); //Teluk Dalam
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7764, 'regionable_type'=>'districts']); //Fanayama
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7765, 'regionable_type'=>'districts']); //Toma
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7766, 'regionable_type'=>'districts']); //Maniamolo
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7767, 'regionable_type'=>'districts']); //Mazino
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7768, 'regionable_type'=>'districts']); //Amandraya
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7769, 'regionable_type'=>'districts']); //Ulususua
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7770, 'regionable_type'=>'districts']); //Aramo
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7771, 'regionable_type'=>'districts']); //Ulunoyo
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7772, 'regionable_type'=>'districts']); //Huruna
            DB::table('regionables')->insert(['region_id'=>1245, 'regionable_id'=>7773, 'regionable_type'=>'districts']); //Lolomatua
                DB::table('regions')->insert(['id'=>1246, 'parent'=>1245, 'code'=>'22867', 'type'=>'village', 'name'=>'Village 22867, Districts 2286, City 228, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88382, 'regionable_type'=>'village']); //Hayo
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88919, 'regionable_type'=>'village']); //Ambukha Satu
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88920, 'regionable_type'=>'village']); //Amorosa
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88921, 'regionable_type'=>'village']); //Bawo Lolomatua
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88922, 'regionable_type'=>'village']); //Borowosi
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88923, 'regionable_type'=>'village']); //Hilifakhe
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88924, 'regionable_type'=>'village']); //Hilimaera
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88925, 'regionable_type'=>'village']); //Hiliwaebu
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88926, 'regionable_type'=>'village']); //Loloana\a
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88927, 'regionable_type'=>'village']); //Marao
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88928, 'regionable_type'=>'village']); //Orahili Ulunoyo
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88929, 'regionable_type'=>'village']); //Puncak Lolomatua
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88930, 'regionable_type'=>'village']); //Sambulu
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88931, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88932, 'regionable_type'=>'village']); //Bawahosi Huruna
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88933, 'regionable_type'=>'village']); //Ehosakhozi
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88934, 'regionable_type'=>'village']); //Fadoro Tuhemberua
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88935, 'regionable_type'=>'village']); //Hilifalawu
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88936, 'regionable_type'=>'village']); //Hilimanawa
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88937, 'regionable_type'=>'village']); //Hiliuso
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88938, 'regionable_type'=>'village']); //Hilizoliga
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88939, 'regionable_type'=>'village']); //Lalimanawa
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88940, 'regionable_type'=>'village']); //Luahamofakhe
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88941, 'regionable_type'=>'village']); //Mombawa Oladano
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88942, 'regionable_type'=>'village']); //Olayama
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88943, 'regionable_type'=>'village']); //Sifalago
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88944, 'regionable_type'=>'village']); //Sifaoro\asi
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88945, 'regionable_type'=>'village']); //Sifaoroasi Huruna
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88946, 'regionable_type'=>'village']); //Sisarahili Huruna
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88947, 'regionable_type'=>'village']); //Tarewe
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88948, 'regionable_type'=>'village']); //Tundrombaho
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88949, 'regionable_type'=>'village']); //Botohili Ndruria
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88950, 'regionable_type'=>'village']); //Caritas Sogawunasi
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88951, 'regionable_type'=>'village']); //Ewo
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88952, 'regionable_type'=>'village']); //Hili Otalua
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88953, 'regionable_type'=>'village']); //Hilifaondrato
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88954, 'regionable_type'=>'village']); //Hilisangowola
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88955, 'regionable_type'=>'village']); //Ko\olotano
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88956, 'regionable_type'=>'village']); //Koendrafo
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88957, 'regionable_type'=>'village']); //Lawa-lawa Luo
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88958, 'regionable_type'=>'village']); //Orudua Lawa-lawa Lou
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88959, 'regionable_type'=>'village']); //Tesikhori
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88960, 'regionable_type'=>'village']); //Tuhemberua
                DB::table('regionables')->insert(['region_id'=>1246, 'regionable_id'=>88961, 'regionable_type'=>'village']); //Tumari
            DB::table('regions')->insert(['id'=>1247, 'parent'=>1244, 'code'=>'2287', 'type'=>'districts', 'name'=>'Districts 2287, City 228, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7728, 'regionable_type'=>'districts']); //Gunungsitoli Idanoi
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7736, 'regionable_type'=>'districts']); //Lolofitu Moi
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7750, 'regionable_type'=>'districts']); //Bawolato
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7754, 'regionable_type'=>'districts']); //Gido
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7755, 'regionable_type'=>'districts']); //Sogae Adu (sogaeadu)
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7756, 'regionable_type'=>'districts']); //Somolo-molo (samolo)
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7757, 'regionable_type'=>'districts']); //Idano Gawo
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7774, 'regionable_type'=>'districts']); //Umbunasi
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7775, 'regionable_type'=>'districts']); //Gomo
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7776, 'regionable_type'=>'districts']); //Boronadu
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7777, 'regionable_type'=>'districts']); //Susua
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7778, 'regionable_type'=>'districts']); //Mazo
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7779, 'regionable_type'=>'districts']); //Lahusa
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7780, 'regionable_type'=>'districts']); //Somambawa
            DB::table('regionables')->insert(['region_id'=>1247, 'regionable_id'=>7781, 'regionable_type'=>'districts']); //Sidua\ori
                DB::table('regions')->insert(['id'=>1248, 'parent'=>1247, 'code'=>'22874', 'type'=>'village', 'name'=>'Village 22874, Districts 2287, City 228, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89045, 'regionable_type'=>'village']); //Angorudua Balaekha
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89046, 'regionable_type'=>'village']); //Bawolato
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89047, 'regionable_type'=>'village']); //Bawootalua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89048, 'regionable_type'=>'village']); //Bawozihono
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89049, 'regionable_type'=>'village']); //Golambanua I
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89050, 'regionable_type'=>'village']); //Harenoro
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89051, 'regionable_type'=>'village']); //Hiliabolata
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89052, 'regionable_type'=>'village']); //Hiligambukha
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89053, 'regionable_type'=>'village']); //Hilinawalo Balaekha
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89054, 'regionable_type'=>'village']); //Hiliorudua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89055, 'regionable_type'=>'village']); //Hilisimaetano
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89056, 'regionable_type'=>'village']); //Hiliwatema
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89057, 'regionable_type'=>'village']); //Hilizomboi
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89058, 'regionable_type'=>'village']); //Lahusa
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89059, 'regionable_type'=>'village']); //Lahusa Satu
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89060, 'regionable_type'=>'village']); //Mogae
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89061, 'regionable_type'=>'village']); //Oikhoda Balaekha
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89062, 'regionable_type'=>'village']); //Orahili Balaekha
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89063, 'regionable_type'=>'village']); //Sarahililaza
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89064, 'regionable_type'=>'village']); //Sinar Baho
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89065, 'regionable_type'=>'village']); //Sinar Baru
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89066, 'regionable_type'=>'village']); //Sobawagoli
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89067, 'regionable_type'=>'village']); //Tetezou (fetezou)
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89068, 'regionable_type'=>'village']); //Fanedanu
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89069, 'regionable_type'=>'village']); //Gabungan Tasua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89070, 'regionable_type'=>'village']); //Golambanua Ii
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89071, 'regionable_type'=>'village']); //Hilialawa
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89072, 'regionable_type'=>'village']); //Hiliorahua Tasua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89073, 'regionable_type'=>'village']); //Mehaga
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89074, 'regionable_type'=>'village']); //Oladano
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89075, 'regionable_type'=>'village']); //Sifitubanua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89076, 'regionable_type'=>'village']); //Sihareo
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89077, 'regionable_type'=>'village']); //Silimabanua Somambawa
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89078, 'regionable_type'=>'village']); //Sinar Susua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89079, 'regionable_type'=>'village']); //Sitolu Banua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89080, 'regionable_type'=>'village']); //Siwalubanua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89081, 'regionable_type'=>'village']); //Somambawa
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89082, 'regionable_type'=>'village']); //Hilidohona
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89083, 'regionable_type'=>'village']); //Hililaora
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89084, 'regionable_type'=>'village']); //Hilisao\oto
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89085, 'regionable_type'=>'village']); //Hilizanuwo
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89086, 'regionable_type'=>'village']); //Hoya
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89087, 'regionable_type'=>'village']); //Mondrowe
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89088, 'regionable_type'=>'village']); //Na\ai
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89089, 'regionable_type'=>'village']); //Olanori
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89090, 'regionable_type'=>'village']); //Taluzusua
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89091, 'regionable_type'=>'village']); //Uluidanoduo
                DB::table('regionables')->insert(['region_id'=>1248, 'regionable_id'=>89092, 'regionable_type'=>'village']); //Umbu Sohahua
            DB::table('regions')->insert(['id'=>1249, 'parent'=>1244, 'code'=>'2288', 'type'=>'districts', 'name'=>'Districts 2288, City 228, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1249, 'regionable_id'=>7782, 'regionable_type'=>'districts']); //Pulau-pulau Batu Timur
            DB::table('regionables')->insert(['region_id'=>1249, 'regionable_id'=>7783, 'regionable_type'=>'districts']); //Pulau-pulau Batu Utara
            DB::table('regionables')->insert(['region_id'=>1249, 'regionable_id'=>7784, 'regionable_type'=>'districts']); //Pulau-pulau Batu
            DB::table('regionables')->insert(['region_id'=>1249, 'regionable_id'=>7785, 'regionable_type'=>'districts']); //Tanah Masa
            DB::table('regionables')->insert(['region_id'=>1249, 'regionable_id'=>7786, 'regionable_type'=>'districts']); //Hibala
            DB::table('regionables')->insert(['region_id'=>1249, 'regionable_id'=>7787, 'regionable_type'=>'districts']); //Pulau-pulau Batu Barat
            DB::table('regionables')->insert(['region_id'=>1249, 'regionable_id'=>7788, 'regionable_type'=>'districts']); //Simuk
                DB::table('regions')->insert(['id'=>1250, 'parent'=>1249, 'code'=>'22881', 'type'=>'village', 'name'=>'Village 22881, Districts 2288, City 228, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89093, 'regionable_type'=>'village']); //Adam
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89094, 'regionable_type'=>'village']); //Bais
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89095, 'regionable_type'=>'village']); //Bais Baru
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89096, 'regionable_type'=>'village']); //Labara
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89097, 'regionable_type'=>'village']); //Labuan Bajau
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89098, 'regionable_type'=>'village']); //Labuan Hiu / Hiyu
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89099, 'regionable_type'=>'village']); //Labuan Rima
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89100, 'regionable_type'=>'village']); //Labuan Rima Baru
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89101, 'regionable_type'=>'village']); //Lambak
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89102, 'regionable_type'=>'village']); //Mahang Labara
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89103, 'regionable_type'=>'village']); //Afore Gobo
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89104, 'regionable_type'=>'village']); //Bale-bale
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89105, 'regionable_type'=>'village']); //Bale-bale Sibohou
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89106, 'regionable_type'=>'village']); //Limo Biang
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89107, 'regionable_type'=>'village']); //Majino Lorang
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89108, 'regionable_type'=>'village']); //Memong
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89109, 'regionable_type'=>'village']); //Merit Baru
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89110, 'regionable_type'=>'village']); //Siofa Banua Lorang
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89111, 'regionable_type'=>'village']); //Siofa Banua Marit
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89112, 'regionable_type'=>'village']); //Teluk Limo
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89113, 'regionable_type'=>'village']); //Wawa
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89114, 'regionable_type'=>'village']); //Ziabiang
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89115, 'regionable_type'=>'village']); //Balogia
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89116, 'regionable_type'=>'village']); //Baruyu Lasara
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89117, 'regionable_type'=>'village']); //Bawo Ama Helato
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89118, 'regionable_type'=>'village']); //Bawo Omasio
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89119, 'regionable_type'=>'village']); //Bawodobara
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89120, 'regionable_type'=>'village']); //Hili Amo Dula
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89121, 'regionable_type'=>'village']); //Hiliotalua
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89122, 'regionable_type'=>'village']); //Koto
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89123, 'regionable_type'=>'village']); //Lasonde
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89124, 'regionable_type'=>'village']); //Loboi
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89125, 'regionable_type'=>'village']); //Onaya
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89126, 'regionable_type'=>'village']); //Orahili
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89127, 'regionable_type'=>'village']); //Pasar Pulau Telo
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89128, 'regionable_type'=>'village']); //Rapa Rapa Melayu
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89129, 'regionable_type'=>'village']); //Sebuasi
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89130, 'regionable_type'=>'village']); //Siduaewali
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89131, 'regionable_type'=>'village']); //Sifitu Ewali
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89132, 'regionable_type'=>'village']); //Silimaewali
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89133, 'regionable_type'=>'village']); //Simaluaya
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89134, 'regionable_type'=>'village']); //Sinauru
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89135, 'regionable_type'=>'village']); //Siofa Ewali
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89136, 'regionable_type'=>'village']); //Sisarahili
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89137, 'regionable_type'=>'village']); //Baluta
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89138, 'regionable_type'=>'village']); //Bawo Analita Saeru
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89139, 'regionable_type'=>'village']); //Bawo Ofuloa
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89140, 'regionable_type'=>'village']); //Bawo Orudua
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89141, 'regionable_type'=>'village']); //Eho Baluta
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89142, 'regionable_type'=>'village']); //Hale Baluta
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89143, 'regionable_type'=>'village']); //Hiligeho Sogawu
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89144, 'regionable_type'=>'village']); //Hilimasio
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89145, 'regionable_type'=>'village']); //Jeke
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89146, 'regionable_type'=>'village']); //Makole
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89147, 'regionable_type'=>'village']); //Saeru Melayu
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89148, 'regionable_type'=>'village']); //Sifauruasi
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89149, 'regionable_type'=>'village']); //Baruyu Sibohou
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89150, 'regionable_type'=>'village']); //Bawonifaoso
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89151, 'regionable_type'=>'village']); //Duru
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89152, 'regionable_type'=>'village']); //Eho
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89153, 'regionable_type'=>'village']); //Hilianombasela
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89154, 'regionable_type'=>'village']); //Hilikana
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89155, 'regionable_type'=>'village']); //Hilinifaese
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89156, 'regionable_type'=>'village']); //Hilioro Dua Tebolo
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89157, 'regionable_type'=>'village']); //Hilioro Mao
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89158, 'regionable_type'=>'village']); //Lumbui Melayu
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89159, 'regionable_type'=>'village']); //Lumbui Nias
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89160, 'regionable_type'=>'village']); //Omega
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89161, 'regionable_type'=>'village']); //Sepakat
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89162, 'regionable_type'=>'village']); //Sialema
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89163, 'regionable_type'=>'village']); //Tano Mokinu
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89164, 'regionable_type'=>'village']); //Tebolo Melayu
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89165, 'regionable_type'=>'village']); //Tuwaso
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89166, 'regionable_type'=>'village']); //Bawolawindra
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89167, 'regionable_type'=>'village']); //Bawositora
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89168, 'regionable_type'=>'village']); //Bintuang
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89169, 'regionable_type'=>'village']); //Fuge
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89170, 'regionable_type'=>'village']); //Hayo
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89171, 'regionable_type'=>'village']); //Hilizamorogotano
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89172, 'regionable_type'=>'village']); //Luaha Idanopono
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89173, 'regionable_type'=>'village']); //Sibaranun
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89174, 'regionable_type'=>'village']); //Sigese
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89175, 'regionable_type'=>'village']); //Gobo
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89176, 'regionable_type'=>'village']); //Gobo Baru
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89177, 'regionable_type'=>'village']); //Gondia
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89178, 'regionable_type'=>'village']); //Maufa
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89179, 'regionable_type'=>'village']); //Silina
                DB::table('regionables')->insert(['region_id'=>1250, 'regionable_id'=>89180, 'regionable_type'=>'village']); //Silina Baru
        DB::table('regions')->insert(['id'=>1251, 'parent'=>546, 'code'=>'229', 'type'=>'city', 'name'=>'City 229, Province 2']);
        DB::table('regionables')->insert(['region_id'=>1251, 'regionable_id'=>501, 'regionable_type'=>'city']); //Mandailing Natal regencies
            DB::table('regions')->insert(['id'=>1252, 'parent'=>1251, 'code'=>'2291', 'type'=>'districts', 'name'=>'Districts 2291, City 229, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1252, 'regionable_id'=>7789, 'regionable_type'=>'districts']); //Panyabungan Barat
            DB::table('regionables')->insert(['region_id'=>1252, 'regionable_id'=>7790, 'regionable_type'=>'districts']); //Panyabungan Kota
            DB::table('regionables')->insert(['region_id'=>1252, 'regionable_id'=>7791, 'regionable_type'=>'districts']); //Panyabungan Timur
                DB::table('regions')->insert(['id'=>1253, 'parent'=>1252, 'code'=>'22912', 'type'=>'village', 'name'=>'Village 22912, Districts 2291, City 229, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89191, 'regionable_type'=>'village']); //Adian Jior
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89192, 'regionable_type'=>'village']); //Aek Banir
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89193, 'regionable_type'=>'village']); //Aek Mata
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89194, 'regionable_type'=>'village']); //Darussalam
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89195, 'regionable_type'=>'village']); //Gunung Barani
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89196, 'regionable_type'=>'village']); //Gunung Manaon
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89197, 'regionable_type'=>'village']); //Huta Lombang Lubis
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89198, 'regionable_type'=>'village']); //Kampung Padang
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89199, 'regionable_type'=>'village']); //Lumban Pasir
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89200, 'regionable_type'=>'village']); //Manyabar
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89201, 'regionable_type'=>'village']); //Pagaran Tonga
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89202, 'regionable_type'=>'village']); //Panyabungan I
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89203, 'regionable_type'=>'village']); //Parbangunan / Perbangunan
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89204, 'regionable_type'=>'village']); //Salambue
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89205, 'regionable_type'=>'village']); //Sarak Matua
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89206, 'regionable_type'=>'village']); //Sigalapang Julu
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89207, 'regionable_type'=>'village']); //Siobon
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89208, 'regionable_type'=>'village']); //Sipapaga
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89209, 'regionable_type'=>'village']); //Sopo Batu
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89224, 'regionable_type'=>'village']); //Aek Nabara
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89225, 'regionable_type'=>'village']); //Banjar Lancat
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89226, 'regionable_type'=>'village']); //Gunung Baringin
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89227, 'regionable_type'=>'village']); //Huta Bangun
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89228, 'regionable_type'=>'village']); //Huta Rimbaru Gb
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89229, 'regionable_type'=>'village']); //Huta Tinggi
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89230, 'regionable_type'=>'village']); //Padang Laru
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89231, 'regionable_type'=>'village']); //Pagur
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89232, 'regionable_type'=>'village']); //Pardomuan
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89233, 'regionable_type'=>'village']); //Parmompang
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89234, 'regionable_type'=>'village']); //Ranto Natas
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89235, 'regionable_type'=>'village']); //Sirangkap
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89236, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89237, 'regionable_type'=>'village']); //Tanjung Julu
                DB::table('regionables')->insert(['region_id'=>1253, 'regionable_id'=>89238, 'regionable_type'=>'village']); //Tebing Tinggi
            DB::table('regions')->insert(['id'=>1254, 'parent'=>1251, 'code'=>'2295', 'type'=>'districts', 'name'=>'Districts 2295, City 229, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1254, 'regionable_id'=>7792, 'regionable_type'=>'districts']); //Panyabungan Selatan
                DB::table('regions')->insert(['id'=>1255, 'parent'=>1254, 'code'=>'22952', 'type'=>'village', 'name'=>'Village 22952, Districts 2295, City 229, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89239, 'regionable_type'=>'village']); //Aek Ngali
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89240, 'regionable_type'=>'village']); //Hayuraja
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89241, 'regionable_type'=>'village']); //Hutaraja Hutajulu
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89242, 'regionable_type'=>'village']); //Hutarimbaru
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89243, 'regionable_type'=>'village']); //Kayu Laut
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89244, 'regionable_type'=>'village']); //Lumban Dolok
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89245, 'regionable_type'=>'village']); //Pagaran Gala-gala
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89246, 'regionable_type'=>'village']); //Roburan Dolok
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89247, 'regionable_type'=>'village']); //Roburan Lombang
                DB::table('regionables')->insert(['region_id'=>1255, 'regionable_id'=>89248, 'regionable_type'=>'village']); //Tano Bato
            DB::table('regions')->insert(['id'=>1256, 'parent'=>1251, 'code'=>'2297', 'type'=>'districts', 'name'=>'Districts 2297, City 229, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1256, 'regionable_id'=>7793, 'regionable_type'=>'districts']); //Siabu
            DB::table('regionables')->insert(['region_id'=>1256, 'regionable_id'=>7794, 'regionable_type'=>'districts']); //Bukit Malintang
            DB::table('regionables')->insert(['region_id'=>1256, 'regionable_id'=>7795, 'regionable_type'=>'districts']); //Naga Juang
            DB::table('regionables')->insert(['region_id'=>1256, 'regionable_id'=>7796, 'regionable_type'=>'districts']); //Huta Bargot
            DB::table('regionables')->insert(['region_id'=>1256, 'regionable_id'=>7797, 'regionable_type'=>'districts']); //Panyabungan Utara
                DB::table('regions')->insert(['id'=>1257, 'parent'=>1256, 'code'=>'22978', 'type'=>'village', 'name'=>'Village 22978, Districts 2297, City 229, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89288, 'regionable_type'=>'village']); //Bangun Sejati
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89289, 'regionable_type'=>'village']); //Huta Bargot Dolok
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89290, 'regionable_type'=>'village']); //Huta Bargot Lombang
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89291, 'regionable_type'=>'village']); //Huta Bargot Nauli
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89292, 'regionable_type'=>'village']); //Huta Bargot Setia
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89293, 'regionable_type'=>'village']); //Hutarimbaru
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89294, 'regionable_type'=>'village']); //Mondan
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89295, 'regionable_type'=>'village']); //Pasar Huta Bargot
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89296, 'regionable_type'=>'village']); //Sayur Maincat
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89297, 'regionable_type'=>'village']); //Beringin/baringin Jaya
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89298, 'regionable_type'=>'village']); //Binanga
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89299, 'regionable_type'=>'village']); //Huta Dame
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89300, 'regionable_type'=>'village']); //Hutabargot Simalang
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89301, 'regionable_type'=>'village']); //Hutanaingkan
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89302, 'regionable_type'=>'village']); //Jambur Padang Matinggi
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89303, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89304, 'regionable_type'=>'village']); //Mompang Jae
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89305, 'regionable_type'=>'village']); //Mompang Julu
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89306, 'regionable_type'=>'village']); //Rumbio
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89307, 'regionable_type'=>'village']); //Simanondong
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89308, 'regionable_type'=>'village']); //Sopo Sorik
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89309, 'regionable_type'=>'village']); //Sukaramai
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89310, 'regionable_type'=>'village']); //Tanjung Mompang
                DB::table('regionables')->insert(['region_id'=>1257, 'regionable_id'=>89311, 'regionable_type'=>'village']); //Tor Banua Raja
            DB::table('regions')->insert(['id'=>1258, 'parent'=>1251, 'code'=>'2298', 'type'=>'districts', 'name'=>'Districts 2298, City 229, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1258, 'regionable_id'=>7798, 'regionable_type'=>'districts']); //Langga Bayu (lingga Bayu)
            DB::table('regionables')->insert(['region_id'=>1258, 'regionable_id'=>7799, 'regionable_type'=>'districts']); //Batang Natal
            DB::table('regionables')->insert(['region_id'=>1258, 'regionable_id'=>7800, 'regionable_type'=>'districts']); //Ranto Baek/baik
            DB::table('regionables')->insert(['region_id'=>1258, 'regionable_id'=>7801, 'regionable_type'=>'districts']); //Natal
            DB::table('regionables')->insert(['region_id'=>1258, 'regionable_id'=>7802, 'regionable_type'=>'districts']); //Sinunukan
            DB::table('regionables')->insert(['region_id'=>1258, 'regionable_id'=>7803, 'regionable_type'=>'districts']); //Batahan
            DB::table('regionables')->insert(['region_id'=>1258, 'regionable_id'=>7804, 'regionable_type'=>'districts']); //Muara Batang Gadis
                DB::table('regions')->insert(['id'=>1259, 'parent'=>1258, 'code'=>'22989', 'type'=>'village', 'name'=>'Village 22989, Districts 2298, City 229, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89426, 'regionable_type'=>'village']); //Batu Mundam
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89427, 'regionable_type'=>'village']); //Huta Imbaru
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89428, 'regionable_type'=>'village']); //Lubuk Kapundung
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89429, 'regionable_type'=>'village']); //Lubuk Kapundung Ii
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89430, 'regionable_type'=>'village']); //Manuncang
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89431, 'regionable_type'=>'village']); //Panunggulan
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89432, 'regionable_type'=>'village']); //Pasar Ii Singkuang
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89433, 'regionable_type'=>'village']); //Rantau Panjang
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89434, 'regionable_type'=>'village']); //Sale Baru
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89435, 'regionable_type'=>'village']); //Sikapas
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89436, 'regionable_type'=>'village']); //Singkuang I (pasar I Singkuang)
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89437, 'regionable_type'=>'village']); //Tabuyung
                DB::table('regionables')->insert(['region_id'=>1259, 'regionable_id'=>89438, 'regionable_type'=>'village']); //Tagilang Julu
            DB::table('regions')->insert(['id'=>1260, 'parent'=>1251, 'code'=>'2299', 'type'=>'districts', 'name'=>'Districts 2299, City 229, Province 2']);
            DB::table('regionables')->insert(['region_id'=>1260, 'regionable_id'=>7805, 'regionable_type'=>'districts']); //Lembah Sorik Merapi
            DB::table('regionables')->insert(['region_id'=>1260, 'regionable_id'=>7806, 'regionable_type'=>'districts']); //Tambangan
            DB::table('regionables')->insert(['region_id'=>1260, 'regionable_id'=>7807, 'regionable_type'=>'districts']); //Kotanopan
            DB::table('regionables')->insert(['region_id'=>1260, 'regionable_id'=>7808, 'regionable_type'=>'districts']); //Puncak Sorik Marapi/merapi
            DB::table('regionables')->insert(['region_id'=>1260, 'regionable_id'=>7809, 'regionable_type'=>'districts']); //Ulu Pungkut
            DB::table('regionables')->insert(['region_id'=>1260, 'regionable_id'=>7810, 'regionable_type'=>'districts']); //Muara Sipongi
            DB::table('regionables')->insert(['region_id'=>1260, 'regionable_id'=>7811, 'regionable_type'=>'districts']); //Pakantan
                DB::table('regions')->insert(['id'=>1261, 'parent'=>1260, 'code'=>'22998', 'type'=>'village', 'name'=>'Village 22998, Districts 2299, City 229, Province 2']);
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89515, 'regionable_type'=>'village']); //Alahan Kae
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89516, 'regionable_type'=>'village']); //Habincaran
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89517, 'regionable_type'=>'village']); //Huta Godang
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89518, 'regionable_type'=>'village']); //Huta Padang Up
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89519, 'regionable_type'=>'village']); //Huta Rimbaru Up (hutaimbaru)
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89520, 'regionable_type'=>'village']); //Muara Saladi
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89521, 'regionable_type'=>'village']); //Patahajang
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89522, 'regionable_type'=>'village']); //Simpang Banyak Jae
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89523, 'regionable_type'=>'village']); //Simpang Banyak Julu
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89524, 'regionable_type'=>'village']); //Simpang Duhu Lombang
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89525, 'regionable_type'=>'village']); //Simpang Duku Dolok
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89526, 'regionable_type'=>'village']); //Simpang Pining
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89527, 'regionable_type'=>'village']); //Tolang
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89528, 'regionable_type'=>'village']); //Bandar Panjang
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89529, 'regionable_type'=>'village']); //Bandar Panjang Tuo
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89530, 'regionable_type'=>'village']); //Kampung Pinang
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89531, 'regionable_type'=>'village']); //Koto Baringin
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89532, 'regionable_type'=>'village']); //Limau Manis
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89533, 'regionable_type'=>'village']); //Pasar Muara Sipongi
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89534, 'regionable_type'=>'village']); //Ranjo Batu
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89535, 'regionable_type'=>'village']); //Sibinail
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89536, 'regionable_type'=>'village']); //Simpang Mandepo
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89537, 'regionable_type'=>'village']); //Tamiang Mudo
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89538, 'regionable_type'=>'village']); //Tanjung Alai
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89539, 'regionable_type'=>'village']); //Huta Gambir
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89540, 'regionable_type'=>'village']); //Huta Julu
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89541, 'regionable_type'=>'village']); //Huta Lancat
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89542, 'regionable_type'=>'village']); //Huta Padang
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89543, 'regionable_type'=>'village']); //Huta Toras
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89544, 'regionable_type'=>'village']); //Pakantan Dolok
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89545, 'regionable_type'=>'village']); //Pakantan Lombang
                DB::table('regionables')->insert(['region_id'=>1261, 'regionable_id'=>89546, 'regionable_type'=>'village']); //Silogun
    }
}
