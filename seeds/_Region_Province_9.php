<?php

use Illuminate\Database\Seeder;

class _Region_Province_9 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['id'=>4642, 'code'=>'9', 'type'=>'province', 'name'=>'Province 9']);

        //Gorontalo
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>7, 'regionable_type'=>'province']); //Gorontalo
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>46, 'regionable_type'=>'city']); //Gorontalo city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>47, 'regionable_type'=>'city']); //Gorontalo regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>48, 'regionable_type'=>'city']); //Gorontalo Utara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>49, 'regionable_type'=>'city']); //Boalemo regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>50, 'regionable_type'=>'city']); //Pohuwato regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>51, 'regionable_type'=>'city']); //Bone Bolango regencies

        DB::table('regions')->insert(['id'=>4643, 'parent'=>4642, 'code'=>'961', 'type'=>'city', 'name'=>'City 961, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4643, 'regionable_id'=>46, 'regionable_type'=>'city']); //Gorontalo city
        DB::table('regionables')->insert(['region_id'=>4643, 'regionable_id'=>47, 'regionable_type'=>'city']); //Gorontalo regencies
            DB::table('regions')->insert(['id'=>4644, 'parent'=>4643, 'code'=>'9611', 'type'=>'districts', 'name'=>'Districts 9611, City 961, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4644, 'regionable_id'=>585, 'regionable_type'=>'districts']); //Kota Selatan
            DB::table('regionables')->insert(['region_id'=>4644, 'regionable_id'=>586, 'regionable_type'=>'districts']); //Hulonthalangi
            DB::table('regionables')->insert(['region_id'=>4644, 'regionable_id'=>587, 'regionable_type'=>'districts']); //Dumbo Raya
            DB::table('regionables')->insert(['region_id'=>4644, 'regionable_id'=>588, 'regionable_type'=>'districts']); //Kota Timur
            DB::table('regionables')->insert(['region_id'=>4644, 'regionable_id'=>613, 'regionable_type'=>'districts']); //Kota Selatan
            DB::table('regionables')->insert(['region_id'=>4644, 'regionable_id'=>614, 'regionable_type'=>'districts']); //Hulonthalangi
            DB::table('regionables')->insert(['region_id'=>4644, 'regionable_id'=>615, 'regionable_type'=>'districts']); //Dumbo Raya
            DB::table('regionables')->insert(['region_id'=>4644, 'regionable_id'=>616, 'regionable_type'=>'districts']); //Kota Timur
                DB::table('regions')->insert(['id'=>4645, 'parent'=>4644, 'code'=>'96112', 'type'=>'village', 'name'=>'Village 96112, Districts 9611, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4645, 'regionable_id'=>5655, 'regionable_type'=>'village']); //Bugis
                DB::table('regionables')->insert(['region_id'=>4645, 'regionable_id'=>5660, 'regionable_type'=>'village']); //Ipilo
                DB::table('regionables')->insert(['region_id'=>4645, 'regionable_id'=>5910, 'regionable_type'=>'village']); //Bugis
                DB::table('regionables')->insert(['region_id'=>4645, 'regionable_id'=>5915, 'regionable_type'=>'village']); //Ipilo
                DB::table('regions')->insert(['id'=>4646, 'parent'=>4644, 'code'=>'96113', 'type'=>'village', 'name'=>'Village 96113, Districts 9611, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4646, 'regionable_id'=>5661, 'regionable_type'=>'village']); //Moodu
                DB::table('regionables')->insert(['region_id'=>4646, 'regionable_id'=>5662, 'regionable_type'=>'village']); //Padebuolo
                DB::table('regionables')->insert(['region_id'=>4646, 'regionable_id'=>5663, 'regionable_type'=>'village']); //Tamalate
                DB::table('regionables')->insert(['region_id'=>4646, 'regionable_id'=>5916, 'regionable_type'=>'village']); //Moodu
                DB::table('regionables')->insert(['region_id'=>4646, 'regionable_id'=>5917, 'regionable_type'=>'village']); //Padebuolo
                DB::table('regionables')->insert(['region_id'=>4646, 'regionable_id'=>5918, 'regionable_type'=>'village']); //Tamalate
                DB::table('regions')->insert(['id'=>4647, 'parent'=>4644, 'code'=>'96114', 'type'=>'village', 'name'=>'Village 96114, Districts 9611, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4647, 'regionable_id'=>5664, 'regionable_type'=>'village']); //Heledulaa Selatan
                DB::table('regionables')->insert(['region_id'=>4647, 'regionable_id'=>5919, 'regionable_type'=>'village']); //Heledulaa Selatan
                DB::table('regions')->insert(['id'=>4648, 'parent'=>4644, 'code'=>'96119', 'type'=>'village', 'name'=>'Village 96119, Districts 9611, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4648, 'regionable_id'=>5658, 'regionable_type'=>'village']); //Leato Selatan
                DB::table('regionables')->insert(['region_id'=>4648, 'regionable_id'=>5659, 'regionable_type'=>'village']); //Leato Utara
                DB::table('regionables')->insert(['region_id'=>4648, 'regionable_id'=>5665, 'regionable_type'=>'village']); //Heledulaa Utara
                DB::table('regionables')->insert(['region_id'=>4648, 'regionable_id'=>5913, 'regionable_type'=>'village']); //Leato Selatan
                DB::table('regionables')->insert(['region_id'=>4648, 'regionable_id'=>5914, 'regionable_type'=>'village']); //Leato Utara
                DB::table('regionables')->insert(['region_id'=>4648, 'regionable_id'=>5920, 'regionable_type'=>'village']); //Heledulaa Utara
            DB::table('regions')->insert(['id'=>4649, 'parent'=>4643, 'code'=>'9612', 'type'=>'districts', 'name'=>'Districts 9612, City 961, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>589, 'regionable_type'=>'districts']); //Sipatana
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>590, 'regionable_type'=>'districts']); //Kota Utara
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>591, 'regionable_type'=>'districts']); //Tilango
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>592, 'regionable_type'=>'districts']); //Pulubala
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>593, 'regionable_type'=>'districts']); //Mootilango
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>594, 'regionable_type'=>'districts']); //Kota Tengah
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>617, 'regionable_type'=>'districts']); //Sipatana
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>618, 'regionable_type'=>'districts']); //Kota Utara
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>619, 'regionable_type'=>'districts']); //Tilango
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>620, 'regionable_type'=>'districts']); //Pulubala
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>621, 'regionable_type'=>'districts']); //Mootilango
            DB::table('regionables')->insert(['region_id'=>4649, 'regionable_id'=>622, 'regionable_type'=>'districts']); //Kota Tengah
                DB::table('regions')->insert(['id'=>4650, 'parent'=>4649, 'code'=>'96127', 'type'=>'village', 'name'=>'Village 96127, Districts 9612, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5685, 'regionable_type'=>'village']); //Ayumolingo
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5686, 'regionable_type'=>'village']); //Bakti
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5687, 'regionable_type'=>'village']); //Bukit Aren
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5688, 'regionable_type'=>'village']); //Molalahu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5689, 'regionable_type'=>'village']); //Molamahu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5690, 'regionable_type'=>'village']); //Mulyonegoro
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5691, 'regionable_type'=>'village']); //Pongongaila
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5692, 'regionable_type'=>'village']); //Pulubala
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5693, 'regionable_type'=>'village']); //Puncak
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5694, 'regionable_type'=>'village']); //Toyidito (toydito)
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5695, 'regionable_type'=>'village']); //Tridarma
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5696, 'regionable_type'=>'village']); //Helumo
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5697, 'regionable_type'=>'village']); //Huyula
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5698, 'regionable_type'=>'village']); //Karya Mukti
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5699, 'regionable_type'=>'village']); //Paris
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5700, 'regionable_type'=>'village']); //Payu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5701, 'regionable_type'=>'village']); //Pilomonu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5702, 'regionable_type'=>'village']); //Satria
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5703, 'regionable_type'=>'village']); //Sido Mukti
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5704, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5705, 'regionable_type'=>'village']); //Talumopatu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5706, 'regionable_type'=>'village']); //Pulubala
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5940, 'regionable_type'=>'village']); //Ayumolingo
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5941, 'regionable_type'=>'village']); //Bakti
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5942, 'regionable_type'=>'village']); //Bukit Aren
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5943, 'regionable_type'=>'village']); //Molalahu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5944, 'regionable_type'=>'village']); //Molamahu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5945, 'regionable_type'=>'village']); //Mulyonegoro
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5946, 'regionable_type'=>'village']); //Pongongaila
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5947, 'regionable_type'=>'village']); //Pulubala
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5948, 'regionable_type'=>'village']); //Puncak
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5949, 'regionable_type'=>'village']); //Toyidito (toydito)
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5950, 'regionable_type'=>'village']); //Tridarma
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5951, 'regionable_type'=>'village']); //Helumo
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5952, 'regionable_type'=>'village']); //Huyula
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5953, 'regionable_type'=>'village']); //Karya Mukti
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5954, 'regionable_type'=>'village']); //Paris
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5955, 'regionable_type'=>'village']); //Payu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5956, 'regionable_type'=>'village']); //Pilomonu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5957, 'regionable_type'=>'village']); //Satria
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5958, 'regionable_type'=>'village']); //Sido Mukti
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5959, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5960, 'regionable_type'=>'village']); //Talumopatu
                DB::table('regionables')->insert(['region_id'=>4650, 'regionable_id'=>5961, 'regionable_type'=>'village']); //Pulubala
                DB::table('regions')->insert(['id'=>4651, 'parent'=>4649, 'code'=>'96128', 'type'=>'village', 'name'=>'Village 96128, Districts 9612, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4651, 'regionable_id'=>5707, 'regionable_type'=>'village']); //Dulalowo
                DB::table('regionables')->insert(['region_id'=>4651, 'regionable_id'=>5708, 'regionable_type'=>'village']); //Dulalowo Timur
                DB::table('regionables')->insert(['region_id'=>4651, 'regionable_id'=>5709, 'regionable_type'=>'village']); //Wumialo
                DB::table('regionables')->insert(['region_id'=>4651, 'regionable_id'=>5962, 'regionable_type'=>'village']); //Dulalowo
                DB::table('regionables')->insert(['region_id'=>4651, 'regionable_id'=>5963, 'regionable_type'=>'village']); //Dulalowo Timur
                DB::table('regionables')->insert(['region_id'=>4651, 'regionable_id'=>5964, 'regionable_type'=>'village']); //Wumialo
                DB::table('regions')->insert(['id'=>4652, 'parent'=>4649, 'code'=>'96129', 'type'=>'village', 'name'=>'Village 96129, Districts 9612, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4652, 'regionable_id'=>5710, 'regionable_type'=>'village']); //Liluwo
                DB::table('regionables')->insert(['region_id'=>4652, 'regionable_id'=>5711, 'regionable_type'=>'village']); //Paguyaman
                DB::table('regionables')->insert(['region_id'=>4652, 'regionable_id'=>5965, 'regionable_type'=>'village']); //Liluwo
                DB::table('regionables')->insert(['region_id'=>4652, 'regionable_id'=>5966, 'regionable_type'=>'village']); //Paguyaman
            DB::table('regions')->insert(['id'=>4653, 'parent'=>4643, 'code'=>'9613', 'type'=>'districts', 'name'=>'Districts 9613, City 961, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4653, 'regionable_id'=>595, 'regionable_type'=>'districts']); //Kota Barat
            DB::table('regionables')->insert(['region_id'=>4653, 'regionable_id'=>596, 'regionable_type'=>'districts']); //Dungingi
            DB::table('regionables')->insert(['region_id'=>4653, 'regionable_id'=>597, 'regionable_type'=>'districts']); //Telaga Biru
            DB::table('regionables')->insert(['region_id'=>4653, 'regionable_id'=>623, 'regionable_type'=>'districts']); //Kota Barat
            DB::table('regionables')->insert(['region_id'=>4653, 'regionable_id'=>624, 'regionable_type'=>'districts']); //Dungingi
            DB::table('regionables')->insert(['region_id'=>4653, 'regionable_id'=>625, 'regionable_type'=>'districts']); //Telaga Biru
                DB::table('regions')->insert(['id'=>4654, 'parent'=>4653, 'code'=>'96137', 'type'=>'village', 'name'=>'Village 96137, Districts 9613, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4654, 'regionable_id'=>5720, 'regionable_type'=>'village']); //Tuladenggi
                DB::table('regionables')->insert(['region_id'=>4654, 'regionable_id'=>5724, 'regionable_type'=>'village']); //Tuladenggi
                DB::table('regionables')->insert(['region_id'=>4654, 'regionable_id'=>5975, 'regionable_type'=>'village']); //Tuladenggi
                DB::table('regionables')->insert(['region_id'=>4654, 'regionable_id'=>5979, 'regionable_type'=>'village']); //Tuladenggi
            DB::table('regions')->insert(['id'=>4655, 'parent'=>4643, 'code'=>'9618', 'type'=>'districts', 'name'=>'Districts 9618, City 961, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4655, 'regionable_id'=>591, 'regionable_type'=>'districts']); //Tilango
            DB::table('regionables')->insert(['region_id'=>4655, 'regionable_id'=>597, 'regionable_type'=>'districts']); //Telaga Biru
            DB::table('regionables')->insert(['region_id'=>4655, 'regionable_id'=>598, 'regionable_type'=>'districts']); //Telaga Jaya
            DB::table('regionables')->insert(['region_id'=>4655, 'regionable_id'=>599, 'regionable_type'=>'districts']); //Telaga
            DB::table('regionables')->insert(['region_id'=>4655, 'regionable_id'=>619, 'regionable_type'=>'districts']); //Tilango
            DB::table('regionables')->insert(['region_id'=>4655, 'regionable_id'=>625, 'regionable_type'=>'districts']); //Telaga Biru
            DB::table('regionables')->insert(['region_id'=>4655, 'regionable_id'=>626, 'regionable_type'=>'districts']); //Telaga Jaya
            DB::table('regionables')->insert(['region_id'=>4655, 'regionable_id'=>627, 'regionable_type'=>'districts']); //Telaga
                DB::table('regions')->insert(['id'=>4656, 'parent'=>4655, 'code'=>'96181', 'type'=>'village', 'name'=>'Village 96181, Districts 9618, City 961, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5678, 'regionable_type'=>'village']); //Ilotideaa
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5679, 'regionable_type'=>'village']); //Lauwonu
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5680, 'regionable_type'=>'village']); //Tabumela
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5681, 'regionable_type'=>'village']); //Tenggela
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5682, 'regionable_type'=>'village']); //Tilote
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5683, 'regionable_type'=>'village']); //Tinelo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5684, 'regionable_type'=>'village']); //Tualango
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5725, 'regionable_type'=>'village']); //Dulamayo Utara
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5726, 'regionable_type'=>'village']); //Dumati
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5727, 'regionable_type'=>'village']); //Lupoyo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5728, 'regionable_type'=>'village']); //Modelidu (modellidu)
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5729, 'regionable_type'=>'village']); //Pantungo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5730, 'regionable_type'=>'village']); //Pentadio Barat
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5731, 'regionable_type'=>'village']); //Pentadio Timur
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5732, 'regionable_type'=>'village']); //Talumelito
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5733, 'regionable_type'=>'village']); //Tapaluluo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5734, 'regionable_type'=>'village']); //Timuato
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5735, 'regionable_type'=>'village']); //Tinelo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5736, 'regionable_type'=>'village']); //Tonala
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5737, 'regionable_type'=>'village']); //Ulapato A
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5738, 'regionable_type'=>'village']); //Ulapato B
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5739, 'regionable_type'=>'village']); //Buhu
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5740, 'regionable_type'=>'village']); //Bunggalo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5741, 'regionable_type'=>'village']); //Hutadaa
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5742, 'regionable_type'=>'village']); //Luwoo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5744, 'regionable_type'=>'village']); //Bulila
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5745, 'regionable_type'=>'village']); //Dulamayo Barat
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5746, 'regionable_type'=>'village']); //Dulamayo Selatan
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5747, 'regionable_type'=>'village']); //Dulohupa
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5748, 'regionable_type'=>'village']); //Hulawa
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5749, 'regionable_type'=>'village']); //Luhu
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5750, 'regionable_type'=>'village']); //Mongolato
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5751, 'regionable_type'=>'village']); //Pilohayanga
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5752, 'regionable_type'=>'village']); //Pilohayanga Barat
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5933, 'regionable_type'=>'village']); //Ilotideaa
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5934, 'regionable_type'=>'village']); //Lauwonu
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5935, 'regionable_type'=>'village']); //Tabumela
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5936, 'regionable_type'=>'village']); //Tenggela
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5937, 'regionable_type'=>'village']); //Tilote
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5938, 'regionable_type'=>'village']); //Tinelo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5939, 'regionable_type'=>'village']); //Tualango
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5980, 'regionable_type'=>'village']); //Dulamayo Utara
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5981, 'regionable_type'=>'village']); //Dumati
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5982, 'regionable_type'=>'village']); //Lupoyo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5983, 'regionable_type'=>'village']); //Modelidu (modellidu)
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5984, 'regionable_type'=>'village']); //Pantungo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5985, 'regionable_type'=>'village']); //Pentadio Barat
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5986, 'regionable_type'=>'village']); //Pentadio Timur
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5987, 'regionable_type'=>'village']); //Talumelito
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5988, 'regionable_type'=>'village']); //Tapaluluo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5989, 'regionable_type'=>'village']); //Timuato
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5990, 'regionable_type'=>'village']); //Tinelo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5991, 'regionable_type'=>'village']); //Tonala
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5992, 'regionable_type'=>'village']); //Ulapato A
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5993, 'regionable_type'=>'village']); //Ulapato B
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5994, 'regionable_type'=>'village']); //Buhu
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5995, 'regionable_type'=>'village']); //Bunggalo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5996, 'regionable_type'=>'village']); //Hutadaa
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5997, 'regionable_type'=>'village']); //Luwoo
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>5999, 'regionable_type'=>'village']); //Bulila
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>6000, 'regionable_type'=>'village']); //Dulamayo Barat
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>6001, 'regionable_type'=>'village']); //Dulamayo Selatan
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>6002, 'regionable_type'=>'village']); //Dulohupa
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>6003, 'regionable_type'=>'village']); //Hulawa
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>6004, 'regionable_type'=>'village']); //Luhu
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>6005, 'regionable_type'=>'village']); //Mongolato
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>6006, 'regionable_type'=>'village']); //Pilohayanga
                DB::table('regionables')->insert(['region_id'=>4656, 'regionable_id'=>6007, 'regionable_type'=>'village']); //Pilohayanga Barat
        DB::table('regions')->insert(['id'=>4657, 'parent'=>4642, 'code'=>'962', 'type'=>'city', 'name'=>'City 962, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4657, 'regionable_id'=>46, 'regionable_type'=>'city']); //Gorontalo city
        DB::table('regionables')->insert(['region_id'=>4657, 'regionable_id'=>47, 'regionable_type'=>'city']); //Gorontalo regencies
        DB::table('regionables')->insert(['region_id'=>4657, 'regionable_id'=>48, 'regionable_type'=>'city']); //Gorontalo Utara regencies
        DB::table('regionables')->insert(['region_id'=>4657, 'regionable_id'=>49, 'regionable_type'=>'city']); //Boalemo regencies
        DB::table('regionables')->insert(['region_id'=>4657, 'regionable_id'=>50, 'regionable_type'=>'city']); //Pohuwato regencies
            DB::table('regions')->insert(['id'=>4658, 'parent'=>4657, 'code'=>'9626', 'type'=>'districts', 'name'=>'Districts 9626, City 962, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>606, 'regionable_type'=>'districts']); //Boliohuto (boliyohuto)
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>607, 'regionable_type'=>'districts']); //Bilato
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>634, 'regionable_type'=>'districts']); //Boliohuto (boliyohuto)
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>635, 'regionable_type'=>'districts']); //Bilato
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>652, 'regionable_type'=>'districts']); //Paguyaman Pantai
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>653, 'regionable_type'=>'districts']); //Paguyaman
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>654, 'regionable_type'=>'districts']); //Wonosari
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>655, 'regionable_type'=>'districts']); //Tilamuta
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>656, 'regionable_type'=>'districts']); //Dulupi
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>657, 'regionable_type'=>'districts']); //Botumoita (botumoito)
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>658, 'regionable_type'=>'districts']); //Mananggu
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>659, 'regionable_type'=>'districts']); //Paguat
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>660, 'regionable_type'=>'districts']); //Dengilo
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>661, 'regionable_type'=>'districts']); //Patilanggio
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>662, 'regionable_type'=>'districts']); //Marisa
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>663, 'regionable_type'=>'districts']); //Duhiadaa
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>664, 'regionable_type'=>'districts']); //Buntulia
            DB::table('regionables')->insert(['region_id'=>4658, 'regionable_id'=>665, 'regionable_type'=>'districts']); //Popayato Timur
                DB::table('regions')->insert(['id'=>4659, 'parent'=>4658, 'code'=>'96266', 'type'=>'village', 'name'=>'Village 96266, Districts 9626, City 962, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6379, 'regionable_type'=>'village']); //Balayo
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6380, 'regionable_type'=>'village']); //Dudepo
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6381, 'regionable_type'=>'village']); //Dulomo
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6382, 'regionable_type'=>'village']); //Ilo Heluma
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6383, 'regionable_type'=>'village']); //Manawa
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6384, 'regionable_type'=>'village']); //Suka Makmur
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6385, 'regionable_type'=>'village']); //Batubilotahu Indah
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6386, 'regionable_type'=>'village']); //Bulangita
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6387, 'regionable_type'=>'village']); //Palopo
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6388, 'regionable_type'=>'village']); //Pohuwato
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6389, 'regionable_type'=>'village']); //Pohuwato Timur
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6390, 'regionable_type'=>'village']); //Teratai
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6393, 'regionable_type'=>'village']); //Bulili
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6394, 'regionable_type'=>'village']); //Buntulia Barat
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6395, 'regionable_type'=>'village']); //Buntulia Jaya
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6396, 'regionable_type'=>'village']); //Buntulia Selatan
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6397, 'regionable_type'=>'village']); //Duhiadaa
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6398, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6399, 'regionable_type'=>'village']); //Mootilango
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6400, 'regionable_type'=>'village']); //Padeng
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6401, 'regionable_type'=>'village']); //Buntulia Tengah
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6402, 'regionable_type'=>'village']); //Buntulia Utara
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6403, 'regionable_type'=>'village']); //Hulawa
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6404, 'regionable_type'=>'village']); //Karya Indah
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6405, 'regionable_type'=>'village']); //Sipatana
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6406, 'regionable_type'=>'village']); //Taluduyunu
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6407, 'regionable_type'=>'village']); //Taluduyunu Utara
                DB::table('regionables')->insert(['region_id'=>4659, 'regionable_id'=>6408, 'regionable_type'=>'village']); //Marisa
        DB::table('regions')->insert(['id'=>4660, 'parent'=>4642, 'code'=>'964', 'type'=>'city', 'name'=>'City 964, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4660, 'regionable_id'=>50, 'regionable_type'=>'city']); //Pohuwato regencies
            DB::table('regions')->insert(['id'=>4661, 'parent'=>4660, 'code'=>'9646', 'type'=>'districts', 'name'=>'Districts 9646, City 964, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4661, 'regionable_id'=>662, 'regionable_type'=>'districts']); //Marisa
            DB::table('regionables')->insert(['region_id'=>4661, 'regionable_id'=>665, 'regionable_type'=>'districts']); //Popayato Timur
            DB::table('regionables')->insert(['region_id'=>4661, 'regionable_id'=>666, 'regionable_type'=>'districts']); //Popayato
            DB::table('regionables')->insert(['region_id'=>4661, 'regionable_id'=>667, 'regionable_type'=>'districts']); //Popayato Barat
            DB::table('regionables')->insert(['region_id'=>4661, 'regionable_id'=>668, 'regionable_type'=>'districts']); //Lemito
            DB::table('regionables')->insert(['region_id'=>4661, 'regionable_id'=>669, 'regionable_type'=>'districts']); //Wanggarasi
            DB::table('regionables')->insert(['region_id'=>4661, 'regionable_id'=>670, 'regionable_type'=>'districts']); //Randangan
            DB::table('regionables')->insert(['region_id'=>4661, 'regionable_id'=>671, 'regionable_type'=>'districts']); //Taluditi (taluduti)
                DB::table('regions')->insert(['id'=>4662, 'parent'=>4661, 'code'=>'96469', 'type'=>'village', 'name'=>'Village 96469, Districts 9646, City 964, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6444, 'regionable_type'=>'village']); //Ayula
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6445, 'regionable_type'=>'village']); //Banuroja
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6446, 'regionable_type'=>'village']); //Huyula
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6447, 'regionable_type'=>'village']); //Imbodu
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6448, 'regionable_type'=>'village']); //Limbula
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6449, 'regionable_type'=>'village']); //Manunggal Karya
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6450, 'regionable_type'=>'village']); //Motolohu
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6451, 'regionable_type'=>'village']); //Motolohu Selatan
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6452, 'regionable_type'=>'village']); //Omayuwa
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6453, 'regionable_type'=>'village']); //Patuhu
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6454, 'regionable_type'=>'village']); //Pelambane Perda
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6455, 'regionable_type'=>'village']); //Sari Murni
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6456, 'regionable_type'=>'village']); //Sidorukun
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6457, 'regionable_type'=>'village']); //Siduwonge
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6458, 'regionable_type'=>'village']); //Tuweya
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6459, 'regionable_type'=>'village']); //Yipilo
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6460, 'regionable_type'=>'village']); //Kalimas
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6461, 'regionable_type'=>'village']); //Makarti Jaya
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6462, 'regionable_type'=>'village']); //Malango
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6463, 'regionable_type'=>'village']); //Marisa Iv
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6464, 'regionable_type'=>'village']); //Panca Karsa I
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6465, 'regionable_type'=>'village']); //Panca Karsa Ii
                DB::table('regionables')->insert(['region_id'=>4662, 'regionable_id'=>6466, 'regionable_type'=>'village']); //Tirto Asri
        DB::table('regions')->insert(['id'=>4663, 'parent'=>4642, 'code'=>'965', 'type'=>'city', 'name'=>'City 965, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4663, 'regionable_id'=>48, 'regionable_type'=>'city']); //Gorontalo Utara regencies
        DB::table('regionables')->insert(['region_id'=>4663, 'regionable_id'=>51, 'regionable_type'=>'city']); //Bone Bolango regencies
            DB::table('regions')->insert(['id'=>4664, 'parent'=>4663, 'code'=>'9658', 'type'=>'districts', 'name'=>'Districts 9658, City 965, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>672, 'regionable_type'=>'districts']); //Bulango Selatan
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>673, 'regionable_type'=>'districts']); //Bulango Utara
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>674, 'regionable_type'=>'districts']); //Bulango Timur
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>675, 'regionable_type'=>'districts']); //Tapa
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>676, 'regionable_type'=>'districts']); //Bulango Ulu
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>677, 'regionable_type'=>'districts']); //Tilongkabila
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>678, 'regionable_type'=>'districts']); //Kabila Bone
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>679, 'regionable_type'=>'districts']); //Botu Pingge
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>680, 'regionable_type'=>'districts']); //Kabila
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>681, 'regionable_type'=>'districts']); //Suwawa Tengah
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>682, 'regionable_type'=>'districts']); //Pinogu
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>683, 'regionable_type'=>'districts']); //Suwawa
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>684, 'regionable_type'=>'districts']); //Suwawa Selatan
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>685, 'regionable_type'=>'districts']); //Suwawa Timur
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>686, 'regionable_type'=>'districts']); //Bone Raya
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>687, 'regionable_type'=>'districts']); //Bonepantai
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>688, 'regionable_type'=>'districts']); //Bone
            DB::table('regionables')->insert(['region_id'=>4664, 'regionable_id'=>689, 'regionable_type'=>'districts']); //Bulawa
                DB::table('regions')->insert(['id'=>4665, 'parent'=>4664, 'code'=>'96585', 'type'=>'village', 'name'=>'Village 96585, Districts 9658, City 965, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6521, 'regionable_type'=>'village']); //Bintalahe
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6522, 'regionable_type'=>'village']); //Botutonuo (botutonua)
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6523, 'regionable_type'=>'village']); //Modelomo
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6524, 'regionable_type'=>'village']); //Molotabu (molutabu)
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6525, 'regionable_type'=>'village']); //Olele
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6526, 'regionable_type'=>'village']); //Oluhuta
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6586, 'regionable_type'=>'village']); //Alo
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6587, 'regionable_type'=>'village']); //Bunga
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6588, 'regionable_type'=>'village']); //Inomata
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6589, 'regionable_type'=>'village']); //Laut Biru
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6590, 'regionable_type'=>'village']); //Moopiya (mopuya)
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6591, 'regionable_type'=>'village']); //Mootawa
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6592, 'regionable_type'=>'village']); //Mootayu
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6593, 'regionable_type'=>'village']); //Mootinelo
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6594, 'regionable_type'=>'village']); //Pelita Jaya
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6595, 'regionable_type'=>'village']); //Tombulilato
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6596, 'regionable_type'=>'village']); //Batu Hijau
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6597, 'regionable_type'=>'village']); //Bilungala
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6598, 'regionable_type'=>'village']); //Bilungala Utara
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6599, 'regionable_type'=>'village']); //Kemiri
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6600, 'regionable_type'=>'village']); //Lembah Hijau
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6601, 'regionable_type'=>'village']); //Ombulo Hijau
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6602, 'regionable_type'=>'village']); //Pelita Hijau
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6603, 'regionable_type'=>'village']); //Tamboo
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6604, 'regionable_type'=>'village']); //Tihu
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6605, 'regionable_type'=>'village']); //Tolotio
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6606, 'regionable_type'=>'village']); //Tongo
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6607, 'regionable_type'=>'village']); //Tunas Jaya
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6608, 'regionable_type'=>'village']); //Uabanga
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6609, 'regionable_type'=>'village']); //Bilolantuna
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6610, 'regionable_type'=>'village']); //Cendana Putih
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6611, 'regionable_type'=>'village']); //Ilohuuwa
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6612, 'regionable_type'=>'village']); //Inogaluma
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6613, 'regionable_type'=>'village']); //Masiaga
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6614, 'regionable_type'=>'village']); //Molamahu
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6615, 'regionable_type'=>'village']); //Monano
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6616, 'regionable_type'=>'village']); //Moodulio
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6617, 'regionable_type'=>'village']); //Muara Bone
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6618, 'regionable_type'=>'village']); //Permata
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6619, 'regionable_type'=>'village']); //Sogitia
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6620, 'regionable_type'=>'village']); //Taludaa
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6621, 'regionable_type'=>'village']); //Tumbuh Mekar
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6622, 'regionable_type'=>'village']); //Waluhu
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6623, 'regionable_type'=>'village']); //Bukit Hijau
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6624, 'regionable_type'=>'village']); //Bunga Hijau
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6625, 'regionable_type'=>'village']); //Kaidundu
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6626, 'regionable_type'=>'village']); //Kaidundu Barat
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6627, 'regionable_type'=>'village']); //Mamungaa
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6628, 'regionable_type'=>'village']); //Mamungaa Timur
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6629, 'regionable_type'=>'village']); //Mopuya
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6630, 'regionable_type'=>'village']); //Nyiur Hijau
                DB::table('regionables')->insert(['region_id'=>4665, 'regionable_id'=>6631, 'regionable_type'=>'village']); //Patoa

        //Maluku
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>19, 'regionable_type'=>'province']); //Maluku
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>240, 'regionable_type'=>'city']); //Ambon city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>241, 'regionable_type'=>'city']); //Maluku Barat Daya regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>242, 'regionable_type'=>'city']); //Maluku Tenggara Barat regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>243, 'regionable_type'=>'city']); //Maluku Tengah regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>244, 'regionable_type'=>'city']); //Buru Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>245, 'regionable_type'=>'city']); //Seram Bagian Timur regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>246, 'regionable_type'=>'city']); //Seram Bagian Barat regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>247, 'regionable_type'=>'city']); //Buru regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>248, 'regionable_type'=>'city']); //Maluku Tenggara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>249, 'regionable_type'=>'city']); //Tual city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>250, 'regionable_type'=>'city']); //Kepulauan Aru regencies

        DB::table('regions')->insert(['id'=>4666, 'parent'=>4642, 'code'=>'971', 'type'=>'city', 'name'=>'City 971, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4666, 'regionable_id'=>240, 'regionable_type'=>'city']); //Ambon city
        DB::table('regionables')->insert(['region_id'=>4666, 'regionable_id'=>241, 'regionable_type'=>'city']); //Maluku Barat Daya regencies
            DB::table('regions')->insert(['id'=>4667, 'parent'=>4666, 'code'=>'9712', 'type'=>'districts', 'name'=>'Districts 9712, City 971, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4667, 'regionable_id'=>4191, 'regionable_type'=>'districts']); //Sirimau
            DB::table('regionables')->insert(['region_id'=>4667, 'regionable_id'=>4192, 'regionable_type'=>'districts']); //Leitimur Selatan
            DB::table('regionables')->insert(['region_id'=>4667, 'regionable_id'=>4195, 'regionable_type'=>'districts']); //Damer
                DB::table('regions')->insert(['id'=>4668, 'parent'=>4667, 'code'=>'97128', 'type'=>'village', 'name'=>'Village 97128, Districts 9712, City 971, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4668, 'regionable_id'=>47664, 'regionable_type'=>'village']); //Batu Merah
                DB::table('regionables')->insert(['region_id'=>4668, 'regionable_id'=>47665, 'regionable_type'=>'village']); //Galala
                DB::table('regionables')->insert(['region_id'=>4668, 'regionable_id'=>47666, 'regionable_type'=>'village']); //Hative Kecil
                DB::table('regionables')->insert(['region_id'=>4668, 'regionable_id'=>47667, 'regionable_type'=>'village']); //Pandan Kasturi
                DB::table('regionables')->insert(['region_id'=>4668, 'regionable_id'=>47693, 'regionable_type'=>'village']); //Batumerah
        DB::table('regions')->insert(['id'=>4669, 'parent'=>4642, 'code'=>'972', 'type'=>'city', 'name'=>'City 972, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4669, 'regionable_id'=>240, 'regionable_type'=>'city']); //Ambon city
            DB::table('regions')->insert(['id'=>4670, 'parent'=>4669, 'code'=>'9723', 'type'=>'districts', 'name'=>'Districts 9723, City 972, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4670, 'regionable_id'=>4192, 'regionable_type'=>'districts']); //Leitimur Selatan
            DB::table('regionables')->insert(['region_id'=>4670, 'regionable_id'=>4193, 'regionable_type'=>'districts']); //Baguala
            DB::table('regionables')->insert(['region_id'=>4670, 'regionable_id'=>4194, 'regionable_type'=>'districts']); //Teluk Ambon
                DB::table('regions')->insert(['id'=>4671, 'parent'=>4670, 'code'=>'97233', 'type'=>'village', 'name'=>'Village 97233, Districts 9723, City 972, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4671, 'regionable_id'=>47684, 'regionable_type'=>'village']); //Waiheru
                DB::table('regionables')->insert(['region_id'=>4671, 'regionable_id'=>47685, 'regionable_type'=>'village']); //Hunuth (durian Patah)
                DB::table('regionables')->insert(['region_id'=>4671, 'regionable_id'=>47686, 'regionable_type'=>'village']); //Poka
                DB::table('regions')->insert(['id'=>4672, 'parent'=>4670, 'code'=>'97234', 'type'=>'village', 'name'=>'Village 97234, Districts 9723, City 972, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4672, 'regionable_id'=>47687, 'regionable_type'=>'village']); //Hative Besar
                DB::table('regionables')->insert(['region_id'=>4672, 'regionable_id'=>47688, 'regionable_type'=>'village']); //Rumah Tiga
                DB::table('regionables')->insert(['region_id'=>4672, 'regionable_id'=>47689, 'regionable_type'=>'village']); //Wayame
                DB::table('regions')->insert(['id'=>4673, 'parent'=>4670, 'code'=>'97235', 'type'=>'village', 'name'=>'Village 97235, Districts 9723, City 972, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4673, 'regionable_id'=>47690, 'regionable_type'=>'village']); //Tawiri
                DB::table('regions')->insert(['id'=>4674, 'parent'=>4670, 'code'=>'97236', 'type'=>'village', 'name'=>'Village 97236, Districts 9723, City 972, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4674, 'regionable_id'=>47691, 'regionable_type'=>'village']); //Laha
                DB::table('regions')->insert(['id'=>4675, 'parent'=>4670, 'code'=>'97237', 'type'=>'village', 'name'=>'Village 97237, Districts 9723, City 972, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4675, 'regionable_id'=>47675, 'regionable_type'=>'village']); //Hutumuri
                DB::table('regionables')->insert(['region_id'=>4675, 'regionable_id'=>47676, 'regionable_type'=>'village']); //Leahari
                DB::table('regionables')->insert(['region_id'=>4675, 'regionable_id'=>47677, 'regionable_type'=>'village']); //Rutong
                DB::table('regionables')->insert(['region_id'=>4675, 'regionable_id'=>47692, 'regionable_type'=>'village']); //Tihu
        DB::table('regions')->insert(['id'=>4676, 'parent'=>4642, 'code'=>'974', 'type'=>'city', 'name'=>'City 974, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4676, 'regionable_id'=>241, 'regionable_type'=>'city']); //Maluku Barat Daya regencies
        DB::table('regionables')->insert(['region_id'=>4676, 'regionable_id'=>242, 'regionable_type'=>'city']); //Maluku Tenggara Barat regencies
            DB::table('regions')->insert(['id'=>4677, 'parent'=>4676, 'code'=>'9745', 'type'=>'districts', 'name'=>'Districts 9745, City 974, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4196, 'regionable_type'=>'districts']); //Pulau Wetang
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4197, 'regionable_type'=>'districts']); //Pulau Pulau Babar
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4198, 'regionable_type'=>'districts']); //Pulau Pulau Terselatan
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4199, 'regionable_type'=>'districts']); //Wetar
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4200, 'regionable_type'=>'districts']); //Wetar Timur
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4201, 'regionable_type'=>'districts']); //Pulau Letti (leti Moa Lakor)
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4202, 'regionable_type'=>'districts']); //Wetar Utara
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4203, 'regionable_type'=>'districts']); //Kepulauan Romang
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4204, 'regionable_type'=>'districts']); //Wetar Barat
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4205, 'regionable_type'=>'districts']); //Moa Lakor
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4206, 'regionable_type'=>'districts']); //Pulau Lakor
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4207, 'regionable_type'=>'districts']); //Kisar Utara
            DB::table('regionables')->insert(['region_id'=>4677, 'regionable_id'=>4212, 'regionable_type'=>'districts']); //Selaru
                DB::table('regions')->insert(['id'=>4678, 'parent'=>4677, 'code'=>'97453', 'type'=>'village', 'name'=>'Village 97453, Districts 9745, City 974, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4678, 'regionable_id'=>47810, 'regionable_type'=>'village']); //Adaut
                DB::table('regionables')->insert(['region_id'=>4678, 'regionable_id'=>47811, 'regionable_type'=>'village']); //Eliasa
                DB::table('regionables')->insert(['region_id'=>4678, 'regionable_id'=>47812, 'regionable_type'=>'village']); //Fursui
                DB::table('regionables')->insert(['region_id'=>4678, 'regionable_id'=>47813, 'regionable_type'=>'village']); //Kandar
                DB::table('regionables')->insert(['region_id'=>4678, 'regionable_id'=>47814, 'regionable_type'=>'village']); //Lingat
                DB::table('regionables')->insert(['region_id'=>4678, 'regionable_id'=>47815, 'regionable_type'=>'village']); //Namtabung
                DB::table('regionables')->insert(['region_id'=>4678, 'regionable_id'=>47816, 'regionable_type'=>'village']); //Werain
            DB::table('regions')->insert(['id'=>4679, 'parent'=>4676, 'code'=>'9746', 'type'=>'districts', 'name'=>'Districts 9746, City 974, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4213, 'regionable_type'=>'districts']); //Wuarlabobar
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4214, 'regionable_type'=>'districts']); //Yaru
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4215, 'regionable_type'=>'districts']); //Molu Maru
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4216, 'regionable_type'=>'districts']); //Kormomolin
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4217, 'regionable_type'=>'districts']); //Nirunmas
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4218, 'regionable_type'=>'districts']); //Tanimbar Utara
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4219, 'regionable_type'=>'districts']); //Wertamrian
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4220, 'regionable_type'=>'districts']); //Wermakatian (wer Maktian)
            DB::table('regionables')->insert(['region_id'=>4679, 'regionable_id'=>4221, 'regionable_type'=>'districts']); //Tanimbar Selatan
                DB::table('regions')->insert(['id'=>4680, 'parent'=>4679, 'code'=>'97464', 'type'=>'village', 'name'=>'Village 97464, Districts 9746, City 974, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47861, 'regionable_type'=>'village']); //Amdasa
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47862, 'regionable_type'=>'village']); //Arui Bab
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47863, 'regionable_type'=>'village']); //Arui Das
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47864, 'regionable_type'=>'village']); //Atubul Raya (atabul Dol)
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47865, 'regionable_type'=>'village']); //Lorulung
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47866, 'regionable_type'=>'village']); //Sangliat Dol
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47867, 'regionable_type'=>'village']); //Sangliat Krawain
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47868, 'regionable_type'=>'village']); //Tumbur
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47869, 'regionable_type'=>'village']); //Batu Putih
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47870, 'regionable_type'=>'village']); //Kamatubun
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47871, 'regionable_type'=>'village']); //Makatiang
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47872, 'regionable_type'=>'village']); //Marantutul
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47873, 'regionable_type'=>'village']); //Rumasalut
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47874, 'regionable_type'=>'village']); //Themin
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47875, 'regionable_type'=>'village']); //Welutu
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47876, 'regionable_type'=>'village']); //Weratan
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47877, 'regionable_type'=>'village']); //Wermatang
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47878, 'regionable_type'=>'village']); //Bomaki
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47879, 'regionable_type'=>'village']); //Ilngei
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47880, 'regionable_type'=>'village']); //Kabiarat Raya
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47881, 'regionable_type'=>'village']); //Latdalam
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47882, 'regionable_type'=>'village']); //Lauran
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47883, 'regionable_type'=>'village']); //Lermatang
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47884, 'regionable_type'=>'village']); //Matakus
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47885, 'regionable_type'=>'village']); //Olilit
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47886, 'regionable_type'=>'village']); //Saumlaki
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47887, 'regionable_type'=>'village']); //Sifnana
                DB::table('regionables')->insert(['region_id'=>4680, 'regionable_id'=>47888, 'regionable_type'=>'village']); //Wowonda
        DB::table('regions')->insert(['id'=>4681, 'parent'=>4642, 'code'=>'975', 'type'=>'city', 'name'=>'City 975, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4681, 'regionable_id'=>243, 'regionable_type'=>'city']); //Maluku Tengah regencies
        DB::table('regionables')->insert(['region_id'=>4681, 'regionable_id'=>244, 'regionable_type'=>'city']); //Buru Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4681, 'regionable_id'=>245, 'regionable_type'=>'city']); //Seram Bagian Timur regencies
        DB::table('regionables')->insert(['region_id'=>4681, 'regionable_id'=>246, 'regionable_type'=>'city']); //Seram Bagian Barat regencies
        DB::table('regionables')->insert(['region_id'=>4681, 'regionable_id'=>247, 'regionable_type'=>'city']); //Buru regencies
            DB::table('regions')->insert(['id'=>4682, 'parent'=>4681, 'code'=>'9757', 'type'=>'districts', 'name'=>'Districts 9757, City 975, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4241, 'regionable_type'=>'districts']); //Kepala Madan
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4242, 'regionable_type'=>'districts']); //Namrole
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4243, 'regionable_type'=>'districts']); //Leksula
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4244, 'regionable_type'=>'districts']); //Fena Fafan
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4245, 'regionable_type'=>'districts']); //Waesama
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4272, 'regionable_type'=>'districts']); //Namlea
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4273, 'regionable_type'=>'districts']); //Waplau
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4274, 'regionable_type'=>'districts']); //Lilialy
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4275, 'regionable_type'=>'districts']); //Airbuaya
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4276, 'regionable_type'=>'districts']); //Fena Leisela
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4277, 'regionable_type'=>'districts']); //Waelata
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4278, 'regionable_type'=>'districts']); //Batabual
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4279, 'regionable_type'=>'districts']); //Waeapo
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4280, 'regionable_type'=>'districts']); //Lolong Guba
            DB::table('regionables')->insert(['region_id'=>4682, 'regionable_id'=>4281, 'regionable_type'=>'districts']); //Teluk Kaiely
                DB::table('regions')->insert(['id'=>4683, 'parent'=>4682, 'code'=>'97574', 'type'=>'village', 'name'=>'Village 97574, Districts 9757, City 975, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48128, 'regionable_type'=>'village']); //Batu Kasa
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48129, 'regionable_type'=>'village']); //Hote
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48130, 'regionable_type'=>'village']); //Lena
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48131, 'regionable_type'=>'village']); //Pohon Batu
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48132, 'regionable_type'=>'village']); //Simi
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48133, 'regionable_type'=>'village']); //Waelikut
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48134, 'regionable_type'=>'village']); //Waemasing
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48135, 'regionable_type'=>'village']); //Waesili
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48136, 'regionable_type'=>'village']); //Waetawa
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48137, 'regionable_type'=>'village']); //Waeteba (waetaba)
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48138, 'regionable_type'=>'village']); //Wamsisi
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48436, 'regionable_type'=>'village']); //Basalale
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48437, 'regionable_type'=>'village']); //Dava
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48438, 'regionable_type'=>'village']); //Deboway / Debowae
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48439, 'regionable_type'=>'village']); //Parbulu
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48440, 'regionable_type'=>'village']); //Waehata
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48441, 'regionable_type'=>'village']); //Waeleman
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48442, 'regionable_type'=>'village']); //Waelo
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48443, 'regionable_type'=>'village']); //Waetina
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48444, 'regionable_type'=>'village']); //Waflan
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48445, 'regionable_type'=>'village']); //Widit
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48446, 'regionable_type'=>'village']); //Batu Jungku
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48447, 'regionable_type'=>'village']); //Ilath
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48448, 'regionable_type'=>'village']); //Namlea Ilath
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48449, 'regionable_type'=>'village']); //Pela
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48450, 'regionable_type'=>'village']); //Waemorat
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48451, 'regionable_type'=>'village']); //Gogorea
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48452, 'regionable_type'=>'village']); //Savana Jaya
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48453, 'regionable_type'=>'village']); //Waekasar
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48454, 'regionable_type'=>'village']); //Waekerta
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48455, 'regionable_type'=>'village']); //Waenetat
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48456, 'regionable_type'=>'village']); //Waetele
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48457, 'regionable_type'=>'village']); //Wanareja
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48458, 'regionable_type'=>'village']); //Grandeng
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48459, 'regionable_type'=>'village']); //Kubalahin
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48460, 'regionable_type'=>'village']); //Lele
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48461, 'regionable_type'=>'village']); //Nafrua
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48462, 'regionable_type'=>'village']); //Ohilahin
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48463, 'regionable_type'=>'village']); //Tifu
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48464, 'regionable_type'=>'village']); //Wabloy
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48465, 'regionable_type'=>'village']); //Waegeren
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48466, 'regionable_type'=>'village']); //Wanakarta
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48467, 'regionable_type'=>'village']); //Wapsalit
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48468, 'regionable_type'=>'village']); //Kaiely (kayeli)
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48469, 'regionable_type'=>'village']); //Kaki Air
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48470, 'regionable_type'=>'village']); //Masarete
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48471, 'regionable_type'=>'village']); //Seith
                DB::table('regionables')->insert(['region_id'=>4683, 'regionable_id'=>48472, 'regionable_type'=>'village']); //Waelapia
        DB::table('regions')->insert(['id'=>4684, 'parent'=>4642, 'code'=>'976', 'type'=>'city', 'name'=>'City 976, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4684, 'regionable_id'=>241, 'regionable_type'=>'city']); //Maluku Barat Daya regencies
        DB::table('regionables')->insert(['region_id'=>4684, 'regionable_id'=>248, 'regionable_type'=>'city']); //Maluku Tenggara regencies
        DB::table('regionables')->insert(['region_id'=>4684, 'regionable_id'=>249, 'regionable_type'=>'city']); //Tual city
        DB::table('regionables')->insert(['region_id'=>4684, 'regionable_id'=>250, 'regionable_type'=>'city']); //Kepulauan Aru regencies
            DB::table('regions')->insert(['id'=>4685, 'parent'=>4684, 'code'=>'9766', 'type'=>'districts', 'name'=>'Districts 9766, City 976, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4288, 'regionable_type'=>'districts']); //Kei Besar Utara Barat
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4289, 'regionable_type'=>'districts']); //Kei Besar Utara Timur
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4290, 'regionable_type'=>'districts']); //Kei Besar
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4291, 'regionable_type'=>'districts']); //Kei Besar Selatan Barat
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4292, 'regionable_type'=>'districts']); //Kei Besar Selatan
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4298, 'regionable_type'=>'districts']); //Pulau-pulau Aru
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4299, 'regionable_type'=>'districts']); //Aru Utara
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4300, 'regionable_type'=>'districts']); //Aru Utara Timur Batuley
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4301, 'regionable_type'=>'districts']); //Sir-sir
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4302, 'regionable_type'=>'districts']); //Aru Tengah
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4303, 'regionable_type'=>'districts']); //Aru Tengah Selatan
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4304, 'regionable_type'=>'districts']); //Aru Tengah Timur
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4305, 'regionable_type'=>'districts']); //Aru Selatan Timur
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4306, 'regionable_type'=>'districts']); //Aru Selatan
            DB::table('regionables')->insert(['region_id'=>4685, 'regionable_id'=>4307, 'regionable_type'=>'districts']); //Aru Selatan Utara
                DB::table('regions')->insert(['id'=>4686, 'parent'=>4685, 'code'=>'97668', 'type'=>'village', 'name'=>'Village 97668, Districts 9766, City 976, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4686, 'regionable_id'=>48805, 'regionable_type'=>'village']); //Erersin
                DB::table('regionables')->insert(['region_id'=>4686, 'regionable_id'=>48806, 'regionable_type'=>'village']); //Hokmar
                DB::table('regionables')->insert(['region_id'=>4686, 'regionable_id'=>48807, 'regionable_type'=>'village']); //Juring
                DB::table('regionables')->insert(['region_id'=>4686, 'regionable_id'=>48808, 'regionable_type'=>'village']); //Lutur
                DB::table('regionables')->insert(['region_id'=>4686, 'regionable_id'=>48809, 'regionable_type'=>'village']); //Maekor
                DB::table('regionables')->insert(['region_id'=>4686, 'regionable_id'=>48810, 'regionable_type'=>'village']); //Rebi
                DB::table('regionables')->insert(['region_id'=>4686, 'regionable_id'=>48811, 'regionable_type'=>'village']); //Tabarfane

        //Maluku Utara
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>20, 'regionable_type'=>'province']); //Maluku Utara
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>251, 'regionable_type'=>'city']); //Ternate city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>252, 'regionable_type'=>'city']); //Halmahera Barat regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>253, 'regionable_type'=>'city']); //Halmahera Utara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>254, 'regionable_type'=>'city']); //Halmahera Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>255, 'regionable_type'=>'city']); //Pulau Morotai regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>256, 'regionable_type'=>'city']); //Kepulauan Sula regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>257, 'regionable_type'=>'city']); //Tidore Kepulauan city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>258, 'regionable_type'=>'city']); //Halmahera Tengah regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>259, 'regionable_type'=>'city']); //Halmahera Timur regencies

        DB::table('regions')->insert(['id'=>4687, 'parent'=>4642, 'code'=>'977', 'type'=>'city', 'name'=>'City 977, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4687, 'regionable_id'=>251, 'regionable_type'=>'city']); //Ternate city
        DB::table('regionables')->insert(['region_id'=>4687, 'regionable_id'=>252, 'regionable_type'=>'city']); //Halmahera Barat regencies
        DB::table('regionables')->insert(['region_id'=>4687, 'regionable_id'=>253, 'regionable_type'=>'city']); //Halmahera Utara regencies
        DB::table('regionables')->insert(['region_id'=>4687, 'regionable_id'=>254, 'regionable_type'=>'city']); //Halmahera Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4687, 'regionable_id'=>255, 'regionable_type'=>'city']); //Pulau Morotai regencies
        DB::table('regionables')->insert(['region_id'=>4687, 'regionable_id'=>256, 'regionable_type'=>'city']); //Kepulauan Sula regencies
            DB::table('regions')->insert(['id'=>4688, 'parent'=>4687, 'code'=>'9779', 'type'=>'districts', 'name'=>'Districts 9779, City 977, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4353, 'regionable_type'=>'districts']); //Mandioli Utara
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4354, 'regionable_type'=>'districts']); //Bacan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4355, 'regionable_type'=>'districts']); //Kasiruta Barat
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4356, 'regionable_type'=>'districts']); //Bacan Timur
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4357, 'regionable_type'=>'districts']); //Mandioli Selatan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4358, 'regionable_type'=>'districts']); //Kepulauan Botanglomang
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4359, 'regionable_type'=>'districts']); //Bacan Timur Tengah
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4360, 'regionable_type'=>'districts']); //Bacan Selatan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4361, 'regionable_type'=>'districts']); //Bacan Barat Utara
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4362, 'regionable_type'=>'districts']); //Bacan Barat
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4363, 'regionable_type'=>'districts']); //Kasiruta Timur
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4364, 'regionable_type'=>'districts']); //Bacan Timur Selatan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4365, 'regionable_type'=>'districts']); //Obi
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4366, 'regionable_type'=>'districts']); //Obi Barat
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4367, 'regionable_type'=>'districts']); //Obi Selatan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4368, 'regionable_type'=>'districts']); //Obi Utara
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4369, 'regionable_type'=>'districts']); //Obi Timur
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4375, 'regionable_type'=>'districts']); //Mangoli Barat
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4376, 'regionable_type'=>'districts']); //Mangoli Selatan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4377, 'regionable_type'=>'districts']); //Taliabu Timur Selatan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4378, 'regionable_type'=>'districts']); //Mangoli Tengah
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4379, 'regionable_type'=>'districts']); //Mangoli Utara
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4380, 'regionable_type'=>'districts']); //Mangoli Timur
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4381, 'regionable_type'=>'districts']); //Mangoli Utara Timur
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4382, 'regionable_type'=>'districts']); //Lede
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4383, 'regionable_type'=>'districts']); //Taliabu Timur
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4384, 'regionable_type'=>'districts']); //Taliabu Utara
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4385, 'regionable_type'=>'districts']); //Taliabu Selatan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4386, 'regionable_type'=>'districts']); //Taliabu Barat Laut
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4387, 'regionable_type'=>'districts']); //Taliabu Barat
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4388, 'regionable_type'=>'districts']); //Sanana Utara
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4389, 'regionable_type'=>'districts']); //Sulabesi Timur
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4390, 'regionable_type'=>'districts']); //Sulabesi Tengah
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4391, 'regionable_type'=>'districts']); //Sanana
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4392, 'regionable_type'=>'districts']); //Sulabesi Selatan
            DB::table('regionables')->insert(['region_id'=>4688, 'regionable_id'=>4393, 'regionable_type'=>'districts']); //Sulabesi Barat
                DB::table('regions')->insert(['id'=>4689, 'parent'=>4688, 'code'=>'97795', 'type'=>'village', 'name'=>'Village 97795, Districts 9779, City 977, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49687, 'regionable_type'=>'village']); //Bajo
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49688, 'regionable_type'=>'village']); //Fokalik
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49689, 'regionable_type'=>'village']); //Fukweu
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49690, 'regionable_type'=>'village']); //Malbufa
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49691, 'regionable_type'=>'village']); //Man-gega
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49692, 'regionable_type'=>'village']); //Pohea
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49693, 'regionable_type'=>'village']); //Wainin
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49694, 'regionable_type'=>'village']); //Baleha
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49695, 'regionable_type'=>'village']); //Fatkauyon
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49696, 'regionable_type'=>'village']); //Sama
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49697, 'regionable_type'=>'village']); //Waigoiyofa
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49698, 'regionable_type'=>'village']); //Wailia
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49699, 'regionable_type'=>'village']); //Waisepa
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49700, 'regionable_type'=>'village']); //Bega
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49701, 'regionable_type'=>'village']); //Fat Iba
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49702, 'regionable_type'=>'village']); //Manaf
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49703, 'regionable_type'=>'village']); //Soamole
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49704, 'regionable_type'=>'village']); //Waiboga
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49705, 'regionable_type'=>'village']); //Waiman
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49706, 'regionable_type'=>'village']); //Fagudu
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49707, 'regionable_type'=>'village']); //Falahu
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49708, 'regionable_type'=>'village']); //Fatcei
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49709, 'regionable_type'=>'village']); //Fogi
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49710, 'regionable_type'=>'village']); //Mangon
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49711, 'regionable_type'=>'village']); //Pastina
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49712, 'regionable_type'=>'village']); //Umaloya
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49713, 'regionable_type'=>'village']); //Wai Ipa
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49714, 'regionable_type'=>'village']); //Waibau
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49715, 'regionable_type'=>'village']); //Waihama
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49716, 'regionable_type'=>'village']); //Wailau
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49717, 'regionable_type'=>'village']); //Fuata
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49718, 'regionable_type'=>'village']); //Skom
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49719, 'regionable_type'=>'village']); //Wai Tamua
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49720, 'regionable_type'=>'village']); //Waigai
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49721, 'regionable_type'=>'village']); //Wainib
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49722, 'regionable_type'=>'village']); //Kabau Darat
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49723, 'regionable_type'=>'village']); //Kabau Pantai
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49724, 'regionable_type'=>'village']); //Nahi
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49725, 'regionable_type'=>'village']); //Ona
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49726, 'regionable_type'=>'village']); //Paratina
                DB::table('regionables')->insert(['region_id'=>4689, 'regionable_id'=>49727, 'regionable_type'=>'village']); //Wai Ina
        DB::table('regions')->insert(['id'=>4690, 'parent'=>4642, 'code'=>'978', 'type'=>'city', 'name'=>'City 978, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4690, 'regionable_id'=>257, 'regionable_type'=>'city']); //Tidore Kepulauan city
        DB::table('regionables')->insert(['region_id'=>4690, 'regionable_id'=>258, 'regionable_type'=>'city']); //Halmahera Tengah regencies
        DB::table('regionables')->insert(['region_id'=>4690, 'regionable_id'=>259, 'regionable_type'=>'city']); //Halmahera Timur regencies
            DB::table('regions')->insert(['id'=>4691, 'parent'=>4690, 'code'=>'9786', 'type'=>'districts', 'name'=>'Districts 9786, City 978, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4410, 'regionable_type'=>'districts']); //Maba Tengah
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4411, 'regionable_type'=>'districts']); //Maba
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4412, 'regionable_type'=>'districts']); //Maba Selatan
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4413, 'regionable_type'=>'districts']); //Maba Utara
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4414, 'regionable_type'=>'districts']); //Kota Maba
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4415, 'regionable_type'=>'districts']); //Wasile Timur
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4416, 'regionable_type'=>'districts']); //Wasile Selatan
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4417, 'regionable_type'=>'districts']); //Wasile
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4418, 'regionable_type'=>'districts']); //Wasile Tengah
            DB::table('regionables')->insert(['region_id'=>4691, 'regionable_id'=>4419, 'regionable_type'=>'districts']); //Wasile Utara
                DB::table('regions')->insert(['id'=>4692, 'parent'=>4691, 'code'=>'97863', 'type'=>'village', 'name'=>'Village 97863, Districts 9786, City 978, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49908, 'regionable_type'=>'village']); //Ake Daga
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49909, 'regionable_type'=>'village']); //Daka Ino
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49910, 'regionable_type'=>'village']); //Dodaga
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49911, 'regionable_type'=>'village']); //Rawamangun
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49912, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49913, 'regionable_type'=>'village']); //Toboino
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49914, 'regionable_type'=>'village']); //Tutuling Jaya
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49915, 'regionable_type'=>'village']); //Woka Jaya
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49916, 'regionable_type'=>'village']); //Ake Jawi
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49917, 'regionable_type'=>'village']); //Binagara
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49918, 'regionable_type'=>'village']); //Bukutio
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49919, 'regionable_type'=>'village']); //Ekor
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49920, 'regionable_type'=>'village']); //Ekorino
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49921, 'regionable_type'=>'village']); //Fayaul
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49922, 'regionable_type'=>'village']); //Ino Jaya
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49923, 'regionable_type'=>'village']); //Jiko Moi
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49924, 'regionable_type'=>'village']); //Loleba
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49925, 'regionable_type'=>'village']); //Minamin
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49926, 'regionable_type'=>'village']); //Nanas
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49927, 'regionable_type'=>'village']); //Nusa Ambu (nusa Ambo)
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49928, 'regionable_type'=>'village']); //Nusa Jaya
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49929, 'regionable_type'=>'village']); //Pintatu
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49930, 'regionable_type'=>'village']); //Saolat
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49931, 'regionable_type'=>'village']); //Saramake (saramaake)
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49932, 'regionable_type'=>'village']); //Sondo-sondo
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49933, 'regionable_type'=>'village']); //Tabanalou (tabanoli)
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49934, 'regionable_type'=>'village']); //Talaga Jaya
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49935, 'regionable_type'=>'village']); //Tanure
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49936, 'regionable_type'=>'village']); //Tomares
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49937, 'regionable_type'=>'village']); //Waijoi
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49938, 'regionable_type'=>'village']); //Wasile
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49939, 'regionable_type'=>'village']); //Yawal
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49940, 'regionable_type'=>'village']); //Batu Raja
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49941, 'regionable_type'=>'village']); //Bumi Restu
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49942, 'regionable_type'=>'village']); //Cemara Jaya
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49943, 'regionable_type'=>'village']); //Gulapapo
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49944, 'regionable_type'=>'village']); //Mekar Sari
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49945, 'regionable_type'=>'village']); //Subaim
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49946, 'regionable_type'=>'village']); //Waisuba
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49947, 'regionable_type'=>'village']); //Boki Miake (bokimaake)
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49948, 'regionable_type'=>'village']); //Foli (foly)
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49949, 'regionable_type'=>'village']); //Hatetabako
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49950, 'regionable_type'=>'village']); //Kakaraino
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49951, 'regionable_type'=>'village']); //Lolobata
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49952, 'regionable_type'=>'village']); //Nyaolako
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49953, 'regionable_type'=>'village']); //Puao
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49954, 'regionable_type'=>'village']); //Silalaysang (silalayang)
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49955, 'regionable_type'=>'village']); //Bololo
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49956, 'regionable_type'=>'village']); //Dowongi Jaya
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49957, 'regionable_type'=>'village']); //Helaitetor
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49958, 'regionable_type'=>'village']); //Iga
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49959, 'regionable_type'=>'village']); //Labi Labi
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49960, 'regionable_type'=>'village']); //Majiko Tongone
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49961, 'regionable_type'=>'village']); //Marimoi
                DB::table('regionables')->insert(['region_id'=>4692, 'regionable_id'=>49962, 'regionable_type'=>'village']); //Tatam

        //Papua
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>24, 'regionable_type'=>'province']); //Papua
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>314, 'regionable_type'=>'city']); //Biak Numfor regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>315, 'regionable_type'=>'city']); //Supiori regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>316, 'regionable_type'=>'city']); //Kepulauan Yapen (yapen Waropen) regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>317, 'regionable_type'=>'city']); //Waropen regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>318, 'regionable_type'=>'city']); //Mamberamo Raya regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>319, 'regionable_type'=>'city']); //Paniai regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>320, 'regionable_type'=>'city']); //Deiyai (deliyai) regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>321, 'regionable_type'=>'city']); //Intan Jaya regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>322, 'regionable_type'=>'city']); //Nabire regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>323, 'regionable_type'=>'city']); //Dogiyai regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>324, 'regionable_type'=>'city']); //Puncak Jaya regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>325, 'regionable_type'=>'city']); //Puncak regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>326, 'regionable_type'=>'city']); //Jayapura city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>327, 'regionable_type'=>'city']); //Jayapura regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>328, 'regionable_type'=>'city']); //Sarmi regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>329, 'regionable_type'=>'city']); //Keerom regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>330, 'regionable_type'=>'city']); //Jayawijaya regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>331, 'regionable_type'=>'city']); //Mamberamo Tengah regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>332, 'regionable_type'=>'city']); //Lanny Jaya regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>333, 'regionable_type'=>'city']); //Tolikara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>334, 'regionable_type'=>'city']); //Nduga regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>335, 'regionable_type'=>'city']); //Yahukimo regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>336, 'regionable_type'=>'city']); //Pegunungan Bintang regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>337, 'regionable_type'=>'city']); //Yalimo regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>338, 'regionable_type'=>'city']); //Merauke regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>339, 'regionable_type'=>'city']); //Boven Digoel regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>340, 'regionable_type'=>'city']); //Asmat regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>341, 'regionable_type'=>'city']); //Mappi regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>342, 'regionable_type'=>'city']); //Mimika regencies

        DB::table('regions')->insert(['id'=>4693, 'parent'=>4642, 'code'=>'981', 'type'=>'city', 'name'=>'City 981, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4693, 'regionable_id'=>314, 'regionable_type'=>'city']); //Biak Numfor regencies
        DB::table('regionables')->insert(['region_id'=>4693, 'regionable_id'=>315, 'regionable_type'=>'city']); //Supiori regencies
            DB::table('regions')->insert(['id'=>4694, 'parent'=>4693, 'code'=>'9816', 'type'=>'districts', 'name'=>'Districts 9816, City 981, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4694, 'regionable_id'=>5203, 'regionable_type'=>'districts']); //Kepulauan Aruri
            DB::table('regionables')->insert(['region_id'=>4694, 'regionable_id'=>5204, 'regionable_type'=>'districts']); //Supiori Selatan
            DB::table('regionables')->insert(['region_id'=>4694, 'regionable_id'=>5205, 'regionable_type'=>'districts']); //Supiori Timur
            DB::table('regionables')->insert(['region_id'=>4694, 'regionable_id'=>5206, 'regionable_type'=>'districts']); //Supiori Barat
            DB::table('regionables')->insert(['region_id'=>4694, 'regionable_id'=>5207, 'regionable_type'=>'districts']); //Supiori Utara
                DB::table('regions')->insert(['id'=>4695, 'parent'=>4694, 'code'=>'98162', 'type'=>'village', 'name'=>'Village 98162, Districts 9816, City 981, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61433, 'regionable_type'=>'village']); //Amyas
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61434, 'regionable_type'=>'village']); //Koryakam (koiryakam)
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61435, 'regionable_type'=>'village']); //Mapia
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61436, 'regionable_type'=>'village']); //Masyai
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61437, 'regionable_type'=>'village']); //Napisandi
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61438, 'regionable_type'=>'village']); //Waryei (wariyei)
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61439, 'regionable_type'=>'village']); //Wayori (mayori)
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61440, 'regionable_type'=>'village']); //Fanjur
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61441, 'regionable_type'=>'village']); //Kobari Jaya
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61442, 'regionable_type'=>'village']); //Puweri
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61443, 'regionable_type'=>'village']); //Warbor
                DB::table('regionables')->insert(['region_id'=>4695, 'regionable_id'=>61444, 'regionable_type'=>'village']); //Warsa
        DB::table('regions')->insert(['id'=>4696, 'parent'=>4642, 'code'=>'982', 'type'=>'city', 'name'=>'City 982, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4696, 'regionable_id'=>316, 'regionable_type'=>'city']); //Kepulauan Yapen (yapen Waropen) regencies
        DB::table('regionables')->insert(['region_id'=>4696, 'regionable_id'=>317, 'regionable_type'=>'city']); //Waropen regencies
        DB::table('regionables')->insert(['region_id'=>4696, 'regionable_id'=>318, 'regionable_type'=>'city']); //Mamberamo Raya regencies
            DB::table('regions')->insert(['id'=>4697, 'parent'=>4696, 'code'=>'9826', 'type'=>'districts', 'name'=>'Districts 9826, City 982, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5222, 'regionable_type'=>'districts']); //Inggerus
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5223, 'regionable_type'=>'districts']); //Ureifasei
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5224, 'regionable_type'=>'districts']); //Wapoga Inggerus
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5225, 'regionable_type'=>'districts']); //Waropen Bawah
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5226, 'regionable_type'=>'districts']); //Oudate Waropen
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5227, 'regionable_type'=>'districts']); //Demba Masirei
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5228, 'regionable_type'=>'districts']); //Kirihi
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5229, 'regionable_type'=>'districts']); //Risei Sayati
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5230, 'regionable_type'=>'districts']); //Masirei
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5231, 'regionable_type'=>'districts']); //Sawai
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5232, 'regionable_type'=>'districts']); //Benuki
            DB::table('regionables')->insert(['region_id'=>4697, 'regionable_id'=>5233, 'regionable_type'=>'districts']); //Waropen Atas
                DB::table('regions')->insert(['id'=>4698, 'parent'=>4697, 'code'=>'98262', 'type'=>'village', 'name'=>'Village 98262, Districts 9826, City 982, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61645, 'regionable_type'=>'village']); //Baino Jaya
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61646, 'regionable_type'=>'village']); //Botawa
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61647, 'regionable_type'=>'village']); //Moroa
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61648, 'regionable_type'=>'village']); //Nau
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61649, 'regionable_type'=>'village']); //Oiboa
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61650, 'regionable_type'=>'village']); //Rasawa
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61651, 'regionable_type'=>'village']); //Ruambak Jaya
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61652, 'regionable_type'=>'village']); //Sowiwa
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61683, 'regionable_type'=>'village']); //Anasi
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61684, 'regionable_type'=>'village']); //Bonoi
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61685, 'regionable_type'=>'village']); //Poiwai
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61686, 'regionable_type'=>'village']); //Rapamarei
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61687, 'regionable_type'=>'village']); //Sawai
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61688, 'regionable_type'=>'village']); //Tamakuri
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61689, 'regionable_type'=>'village']); //Baitanasa
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61690, 'regionable_type'=>'village']); //Dadat
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61691, 'regionable_type'=>'village']); //Gesa Baru
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61692, 'regionable_type'=>'village']); //Kamai
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61693, 'regionable_type'=>'village']); //Kerema
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61694, 'regionable_type'=>'village']); //Taya
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61695, 'regionable_type'=>'village']); //Teuw
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61696, 'regionable_type'=>'village']); //Watiaro
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61697, 'regionable_type'=>'village']); //Barapasi (baradasi)
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61698, 'regionable_type'=>'village']); //Bariwaro
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61699, 'regionable_type'=>'village']); //Bensor
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61700, 'regionable_type'=>'village']); //Marikai
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61701, 'regionable_type'=>'village']); //Nandofoai (nadofoai/nadofuai)
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61702, 'regionable_type'=>'village']); //Rawiwa
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61703, 'regionable_type'=>'village']); //Sipisi
                DB::table('regionables')->insert(['region_id'=>4698, 'regionable_id'=>61704, 'regionable_type'=>'village']); //Sorabi
        DB::table('regions')->insert(['id'=>4699, 'parent'=>4642, 'code'=>'987', 'type'=>'city', 'name'=>'City 987, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4699, 'regionable_id'=>319, 'regionable_type'=>'city']); //Paniai regencies
        DB::table('regionables')->insert(['region_id'=>4699, 'regionable_id'=>320, 'regionable_type'=>'city']); //Deiyai (deliyai) regencies
        DB::table('regionables')->insert(['region_id'=>4699, 'regionable_id'=>321, 'regionable_type'=>'city']); //Intan Jaya regencies
            DB::table('regions')->insert(['id'=>4700, 'parent'=>4699, 'code'=>'9876', 'type'=>'districts', 'name'=>'Districts 9876, City 987, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5242, 'regionable_type'=>'districts']); //Paniai Barat
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5243, 'regionable_type'=>'districts']); //Siriwo
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5244, 'regionable_type'=>'districts']); //Aradide
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5245, 'regionable_type'=>'districts']); //Ekadide
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5246, 'regionable_type'=>'districts']); //Bogobaida
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5250, 'regionable_type'=>'districts']); //Tigi Barat
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5252, 'regionable_type'=>'districts']); //Tigi
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5254, 'regionable_type'=>'districts']); //Homeo (homeyo)
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5255, 'regionable_type'=>'districts']); //Sugapa
            DB::table('regionables')->insert(['region_id'=>4700, 'regionable_id'=>5256, 'regionable_type'=>'districts']); //Hitadipa
                DB::table('regions')->insert(['id'=>4701, 'parent'=>4700, 'code'=>'98768', 'type'=>'village', 'name'=>'Village 98768, Districts 9876, City 987, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61884, 'regionable_type'=>'village']); //Bilogai
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61885, 'regionable_type'=>'village']); //Degeyabu
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61886, 'regionable_type'=>'village']); //Emondi (kemondi)
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61887, 'regionable_type'=>'village']); //Kumlagupa
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61888, 'regionable_type'=>'village']); //Mamba
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61889, 'regionable_type'=>'village']); //Mbilusiga
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61890, 'regionable_type'=>'village']); //Mindau
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61891, 'regionable_type'=>'village']); //Puyagiya
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61892, 'regionable_type'=>'village']); //Ugimba
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61893, 'regionable_type'=>'village']); //Wandoga
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61894, 'regionable_type'=>'village']); //Yalai (jabai/jalai)
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61895, 'regionable_type'=>'village']); //Yokatapa (tokatapa)
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61896, 'regionable_type'=>'village']); //Yoparu
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61900, 'regionable_type'=>'village']); //Danggomba
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61901, 'regionable_type'=>'village']); //Eknemba/elenemba
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61902, 'regionable_type'=>'village']); //Hitadipa
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61903, 'regionable_type'=>'village']); //Kulapa
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61904, 'regionable_type'=>'village']); //Sanaba (sanamba)
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61905, 'regionable_type'=>'village']); //Soagama
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61906, 'regionable_type'=>'village']); //Titigi
                DB::table('regionables')->insert(['region_id'=>4701, 'regionable_id'=>61907, 'regionable_type'=>'village']); //Wabui
            DB::table('regions')->insert(['id'=>4702, 'parent'=>4699, 'code'=>'9878', 'type'=>'districts', 'name'=>'Districts 9878, City 987, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4702, 'regionable_id'=>5247, 'regionable_type'=>'districts']); //Bibida
            DB::table('regionables')->insert(['region_id'=>4702, 'regionable_id'=>5248, 'regionable_type'=>'districts']); //Dumadama
            DB::table('regionables')->insert(['region_id'=>4702, 'regionable_id'=>5249, 'regionable_type'=>'districts']); //Bowobado
            DB::table('regionables')->insert(['region_id'=>4702, 'regionable_id'=>5253, 'regionable_type'=>'districts']); //Tigi Timur
            DB::table('regionables')->insert(['region_id'=>4702, 'regionable_id'=>5257, 'regionable_type'=>'districts']); //Agisiga
            DB::table('regionables')->insert(['region_id'=>4702, 'regionable_id'=>5258, 'regionable_type'=>'districts']); //Biandoga
            DB::table('regionables')->insert(['region_id'=>4702, 'regionable_id'=>5259, 'regionable_type'=>'districts']); //Wandai
                DB::table('regions')->insert(['id'=>4703, 'parent'=>4702, 'code'=>'98784', 'type'=>'village', 'name'=>'Village 98784, Districts 9878, City 987, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61921, 'regionable_type'=>'village']); //Aneya
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61922, 'regionable_type'=>'village']); //Biandoga
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61923, 'regionable_type'=>'village']); //Biatapa
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61924, 'regionable_type'=>'village']); //Bugalaga
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61925, 'regionable_type'=>'village']); //Danggatadi
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61926, 'regionable_type'=>'village']); //Debasiga
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61927, 'regionable_type'=>'village']); //Debasiga Dua / Ii
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61928, 'regionable_type'=>'village']); //Hipadipa (hitadipa)
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61929, 'regionable_type'=>'village']); //Isan Doga
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61930, 'regionable_type'=>'village']); //Kalawa
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61931, 'regionable_type'=>'village']); //Kigitadi
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61932, 'regionable_type'=>'village']); //Mbialapa
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61933, 'regionable_type'=>'village']); //Yagaito (jagaito/tagito)
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61934, 'regionable_type'=>'village']); //Yanei (janei/yamei)
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61935, 'regionable_type'=>'village']); //Debasiga Dua Pemda
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61936, 'regionable_type'=>'village']); //Debasiga Pemda
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61937, 'regionable_type'=>'village']); //Dubasiga Pemda
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61938, 'regionable_type'=>'village']); //Hulapuga
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61939, 'regionable_type'=>'village']); //Isandoga Pemda
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61940, 'regionable_type'=>'village']); //Jae Pemda
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61941, 'regionable_type'=>'village']); //Mbugulo Pemda
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61942, 'regionable_type'=>'village']); //Mogalo Pemda
                DB::table('regionables')->insert(['region_id'=>4703, 'regionable_id'=>61943, 'regionable_type'=>'village']); //Sabisa
        DB::table('regions')->insert(['id'=>4704, 'parent'=>4642, 'code'=>'988', 'type'=>'city', 'name'=>'City 988, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4704, 'regionable_id'=>322, 'regionable_type'=>'city']); //Nabire regencies
        DB::table('regionables')->insert(['region_id'=>4704, 'regionable_id'=>323, 'regionable_type'=>'city']); //Dogiyai regencies
            DB::table('regions')->insert(['id'=>4705, 'parent'=>4704, 'code'=>'9885', 'type'=>'districts', 'name'=>'Districts 9885, City 988, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5262, 'regionable_type'=>'districts']); //Yaur
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5263, 'regionable_type'=>'districts']); //Teluk Umar
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5264, 'regionable_type'=>'districts']); //Uwapa
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5265, 'regionable_type'=>'districts']); //Yaro (yaro Kabisay)
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5266, 'regionable_type'=>'districts']); //Dipa
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5267, 'regionable_type'=>'districts']); //Menou
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5268, 'regionable_type'=>'districts']); //Siriwo
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5269, 'regionable_type'=>'districts']); //Wanggar
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5270, 'regionable_type'=>'districts']); //Nabire Barat
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5275, 'regionable_type'=>'districts']); //Mapia
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5276, 'regionable_type'=>'districts']); //Mapia Barat
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5277, 'regionable_type'=>'districts']); //Mapia Tengah
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5278, 'regionable_type'=>'districts']); //Piyaiye (sukikai)
            DB::table('regionables')->insert(['region_id'=>4705, 'regionable_id'=>5279, 'regionable_type'=>'districts']); //Sukikai Selatan
                DB::table('regions')->insert(['id'=>4706, 'parent'=>4705, 'code'=>'98857', 'type'=>'village', 'name'=>'Village 98857, Districts 9885, City 988, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62046, 'regionable_type'=>'village']); //Apogomakida (aporomakida)
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62047, 'regionable_type'=>'village']); //Deniyode (deneiode)
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62048, 'regionable_type'=>'village']); //Egipa
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62049, 'regionable_type'=>'village']); //Ideduwa
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62050, 'regionable_type'=>'village']); //Kegata
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62051, 'regionable_type'=>'village']); //Tipaugi
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62052, 'regionable_type'=>'village']); //Ukagu
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62053, 'regionable_type'=>'village']); //Yegiyepa (yegeiyepa)
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62054, 'regionable_type'=>'village']); //Iyaro
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62055, 'regionable_type'=>'village']); //Sukikai
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62056, 'regionable_type'=>'village']); //Unito
                DB::table('regionables')->insert(['region_id'=>4706, 'regionable_id'=>62057, 'regionable_type'=>'village']); //Wigoumakida
            DB::table('regions')->insert(['id'=>4707, 'parent'=>4704, 'code'=>'9886', 'type'=>'districts', 'name'=>'Districts 9886, City 988, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5271, 'regionable_type'=>'districts']); //Moora
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5272, 'regionable_type'=>'districts']); //Makimi
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5273, 'regionable_type'=>'districts']); //Wapoga
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5274, 'regionable_type'=>'districts']); //Napan
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5280, 'regionable_type'=>'districts']); //Dogiyai
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5281, 'regionable_type'=>'districts']); //Kamu Selatan
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5282, 'regionable_type'=>'districts']); //Kamu
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5283, 'regionable_type'=>'districts']); //Kamu Timur
            DB::table('regionables')->insert(['region_id'=>4707, 'regionable_id'=>5284, 'regionable_type'=>'districts']); //Kamu Utara (ikrar/ikrat)
                DB::table('regions')->insert(['id'=>4708, 'parent'=>4707, 'code'=>'98863', 'type'=>'village', 'name'=>'Village 98863, Districts 9886, City 988, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62087, 'regionable_type'=>'village']); //Boduda
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62088, 'regionable_type'=>'village']); //Bokaibutu (bukaibuto)
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62089, 'regionable_type'=>'village']); //Bunauwo
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62090, 'regionable_type'=>'village']); //Deiyapa (deiyepa)
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62091, 'regionable_type'=>'village']); //Nuwa (nua)
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62092, 'regionable_type'=>'village']); //Ugapuga
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62093, 'regionable_type'=>'village']); //Yotapuga
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62094, 'regionable_type'=>'village']); //Duntek (dumtek)
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62095, 'regionable_type'=>'village']); //Ekimani (ekiwani)
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62096, 'regionable_type'=>'village']); //Idakebo
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62097, 'regionable_type'=>'village']); //Ikrar
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62098, 'regionable_type'=>'village']); //Koyakago (kuyakago)
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62099, 'regionable_type'=>'village']); //Mogou
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62100, 'regionable_type'=>'village']); //Obayo
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62101, 'regionable_type'=>'village']); //Pugatadi Dua (ii)
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62102, 'regionable_type'=>'village']); //Pugatadi Satu (i)
                DB::table('regionables')->insert(['region_id'=>4708, 'regionable_id'=>62103, 'regionable_type'=>'village']); //Yawetadi
        DB::table('regions')->insert(['id'=>4709, 'parent'=>4642, 'code'=>'989', 'type'=>'city', 'name'=>'City 989, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4709, 'regionable_id'=>324, 'regionable_type'=>'city']); //Puncak Jaya regencies
        DB::table('regionables')->insert(['region_id'=>4709, 'regionable_id'=>325, 'regionable_type'=>'city']); //Puncak regencies
            DB::table('regions')->insert(['id'=>4710, 'parent'=>4709, 'code'=>'9897', 'type'=>'districts', 'name'=>'Districts 9897, City 989, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4710, 'regionable_id'=>5293, 'regionable_type'=>'districts']); //Wangbe
            DB::table('regionables')->insert(['region_id'=>4710, 'regionable_id'=>5294, 'regionable_type'=>'districts']); //Beoga
            DB::table('regionables')->insert(['region_id'=>4710, 'regionable_id'=>5295, 'regionable_type'=>'districts']); //Gome
            DB::table('regionables')->insert(['region_id'=>4710, 'regionable_id'=>5296, 'regionable_type'=>'districts']); //Ilaga
            DB::table('regionables')->insert(['region_id'=>4710, 'regionable_id'=>5297, 'regionable_type'=>'districts']); //Agadugume
            DB::table('regionables')->insert(['region_id'=>4710, 'regionable_id'=>5298, 'regionable_type'=>'districts']); //Pogoma
            DB::table('regionables')->insert(['region_id'=>4710, 'regionable_id'=>5299, 'regionable_type'=>'districts']); //Sinak
            DB::table('regionables')->insert(['region_id'=>4710, 'regionable_id'=>5300, 'regionable_type'=>'districts']); //Doufu
                DB::table('regions')->insert(['id'=>4711, 'parent'=>4710, 'code'=>'98976', 'type'=>'village', 'name'=>'Village 98976, Districts 9897, City 989, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4711, 'regionable_id'=>62481, 'regionable_type'=>'village']); //Doufu/dovo
                DB::table('regionables')->insert(['region_id'=>4711, 'regionable_id'=>62482, 'regionable_type'=>'village']); //Faisau
                DB::table('regionables')->insert(['region_id'=>4711, 'regionable_id'=>62483, 'regionable_type'=>'village']); //Iratoi
                DB::table('regionables')->insert(['region_id'=>4711, 'regionable_id'=>62484, 'regionable_type'=>'village']); //Kordei (kordesi)
                DB::table('regionables')->insert(['region_id'=>4711, 'regionable_id'=>62485, 'regionable_type'=>'village']); //Tayai (taya)
        DB::table('regions')->insert(['id'=>4712, 'parent'=>4642, 'code'=>'991', 'type'=>'city', 'name'=>'City 991, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4712, 'regionable_id'=>326, 'regionable_type'=>'city']); //Jayapura city
        DB::table('regionables')->insert(['region_id'=>4712, 'regionable_id'=>327, 'regionable_type'=>'city']); //Jayapura regencies
            DB::table('regions')->insert(['id'=>4713, 'parent'=>4712, 'code'=>'9911', 'type'=>'districts', 'name'=>'Districts 9911, City 991, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4713, 'regionable_id'=>5301, 'regionable_type'=>'districts']); //Jayapura Utara
            DB::table('regionables')->insert(['region_id'=>4713, 'regionable_id'=>5325, 'regionable_type'=>'districts']); //Jayapura Utara
                DB::table('regions')->insert(['id'=>4714, 'parent'=>4713, 'code'=>'99111', 'type'=>'village', 'name'=>'Village 99111, Districts 9911, City 991, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4714, 'regionable_id'=>62486, 'regionable_type'=>'village']); //Gurabesi
                DB::table('regionables')->insert(['region_id'=>4714, 'regionable_id'=>62668, 'regionable_type'=>'village']); //Gurabesi
                DB::table('regions')->insert(['id'=>4715, 'parent'=>4713, 'code'=>'99112', 'type'=>'village', 'name'=>'Village 99112, Districts 9911, City 991, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4715, 'regionable_id'=>62487, 'regionable_type'=>'village']); //Bhayangkara (bayangkara)
                DB::table('regionables')->insert(['region_id'=>4715, 'regionable_id'=>62669, 'regionable_type'=>'village']); //Bhayangkara (bayangkara)
                DB::table('regions')->insert(['id'=>4716, 'parent'=>4713, 'code'=>'99113', 'type'=>'village', 'name'=>'Village 99113, Districts 9911, City 991, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4716, 'regionable_id'=>62488, 'regionable_type'=>'village']); //Angkasapura
                DB::table('regionables')->insert(['region_id'=>4716, 'regionable_id'=>62670, 'regionable_type'=>'village']); //Angkasapura
                DB::table('regions')->insert(['id'=>4717, 'parent'=>4713, 'code'=>'99114', 'type'=>'village', 'name'=>'Village 99114, Districts 9911, City 991, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4717, 'regionable_id'=>62489, 'regionable_type'=>'village']); //Trikora
                DB::table('regionables')->insert(['region_id'=>4717, 'regionable_id'=>62671, 'regionable_type'=>'village']); //Trikora
                DB::table('regions')->insert(['id'=>4718, 'parent'=>4713, 'code'=>'99115', 'type'=>'village', 'name'=>'Village 99115, Districts 9911, City 991, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4718, 'regionable_id'=>62490, 'regionable_type'=>'village']); //Mandala
                DB::table('regionables')->insert(['region_id'=>4718, 'regionable_id'=>62672, 'regionable_type'=>'village']); //Mandala
                DB::table('regions')->insert(['id'=>4719, 'parent'=>4713, 'code'=>'99116', 'type'=>'village', 'name'=>'Village 99116, Districts 9911, City 991, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4719, 'regionable_id'=>62491, 'regionable_type'=>'village']); //Imbi
                DB::table('regionables')->insert(['region_id'=>4719, 'regionable_id'=>62673, 'regionable_type'=>'village']); //Imbi
                DB::table('regions')->insert(['id'=>4720, 'parent'=>4713, 'code'=>'99117', 'type'=>'village', 'name'=>'Village 99117, Districts 9911, City 991, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4720, 'regionable_id'=>62492, 'regionable_type'=>'village']); //Tanjung Ria
                DB::table('regionables')->insert(['region_id'=>4720, 'regionable_id'=>62674, 'regionable_type'=>'village']); //Tanjung Ria
        DB::table('regions')->insert(['id'=>4721, 'parent'=>4642, 'code'=>'992', 'type'=>'city', 'name'=>'City 992, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4721, 'regionable_id'=>326, 'regionable_type'=>'city']); //Jayapura city
        DB::table('regionables')->insert(['region_id'=>4721, 'regionable_id'=>327, 'regionable_type'=>'city']); //Jayapura regencies
            DB::table('regions')->insert(['id'=>4722, 'parent'=>4721, 'code'=>'9922', 'type'=>'districts', 'name'=>'Districts 9922, City 992, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4722, 'regionable_id'=>5302, 'regionable_type'=>'districts']); //Jayapura Selatan
            DB::table('regionables')->insert(['region_id'=>4722, 'regionable_id'=>5303, 'regionable_type'=>'districts']); //Abepura
            DB::table('regionables')->insert(['region_id'=>4722, 'regionable_id'=>5326, 'regionable_type'=>'districts']); //Jayapura Selatan
            DB::table('regionables')->insert(['region_id'=>4722, 'regionable_id'=>5327, 'regionable_type'=>'districts']); //Abepura
                DB::table('regions')->insert(['id'=>4723, 'parent'=>4722, 'code'=>'99221', 'type'=>'village', 'name'=>'Village 99221, Districts 9922, City 992, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62493, 'regionable_type'=>'village']); //Hamadi
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62494, 'regionable_type'=>'village']); //Numbai (numbay)
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62495, 'regionable_type'=>'village']); //Tahima Sorama
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62496, 'regionable_type'=>'village']); //Tobati
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62497, 'regionable_type'=>'village']); //Way Mhorock
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62503, 'regionable_type'=>'village']); //Waena
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62675, 'regionable_type'=>'village']); //Hamadi
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62676, 'regionable_type'=>'village']); //Numbai (numbay)
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62677, 'regionable_type'=>'village']); //Tahima Sorama
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62678, 'regionable_type'=>'village']); //Tobati
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62679, 'regionable_type'=>'village']); //Way Mhorock
                DB::table('regionables')->insert(['region_id'=>4723, 'regionable_id'=>62685, 'regionable_type'=>'village']); //Waena
        DB::table('regions')->insert(['id'=>4724, 'parent'=>4642, 'code'=>'993', 'type'=>'city', 'name'=>'City 993, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4724, 'regionable_id'=>318, 'regionable_type'=>'city']); //Mamberamo Raya regencies
        DB::table('regionables')->insert(['region_id'=>4724, 'regionable_id'=>326, 'regionable_type'=>'city']); //Jayapura city
        DB::table('regionables')->insert(['region_id'=>4724, 'regionable_id'=>327, 'regionable_type'=>'city']); //Jayapura regencies
        DB::table('regionables')->insert(['region_id'=>4724, 'regionable_id'=>328, 'regionable_type'=>'city']); //Sarmi regencies
            DB::table('regions')->insert(['id'=>4725, 'parent'=>4724, 'code'=>'9935', 'type'=>'districts', 'name'=>'Districts 9935, City 993, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5303, 'regionable_type'=>'districts']); //Abepura
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5304, 'regionable_type'=>'districts']); //Heram
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5305, 'regionable_type'=>'districts']); //Muara Tami
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5306, 'regionable_type'=>'districts']); //Ebungfau (ebungfa)
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5307, 'regionable_type'=>'districts']); //Sentani
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5308, 'regionable_type'=>'districts']); //Depapre
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5309, 'regionable_type'=>'districts']); //Ravenirara
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5310, 'regionable_type'=>'districts']); //Demta
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5311, 'regionable_type'=>'districts']); //Yokari
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5312, 'regionable_type'=>'districts']); //Unurum Guay
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5313, 'regionable_type'=>'districts']); //Kemtuk
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5314, 'regionable_type'=>'districts']); //Gresi Selatan
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5315, 'regionable_type'=>'districts']); //Kemtuk Gresi
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5316, 'regionable_type'=>'districts']); //Waibu
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5317, 'regionable_type'=>'districts']); //Sentani Barat
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5318, 'regionable_type'=>'districts']); //Sentani Timur
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5327, 'regionable_type'=>'districts']); //Abepura
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5328, 'regionable_type'=>'districts']); //Heram
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5329, 'regionable_type'=>'districts']); //Muara Tami
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5330, 'regionable_type'=>'districts']); //Ebungfau (ebungfa)
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5331, 'regionable_type'=>'districts']); //Sentani
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5332, 'regionable_type'=>'districts']); //Depapre
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5333, 'regionable_type'=>'districts']); //Ravenirara
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5334, 'regionable_type'=>'districts']); //Demta
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5335, 'regionable_type'=>'districts']); //Yokari
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5336, 'regionable_type'=>'districts']); //Unurum Guay
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5337, 'regionable_type'=>'districts']); //Kemtuk
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5338, 'regionable_type'=>'districts']); //Gresi Selatan
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5339, 'regionable_type'=>'districts']); //Kemtuk Gresi
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5340, 'regionable_type'=>'districts']); //Waibu
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5341, 'regionable_type'=>'districts']); //Sentani Barat
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5342, 'regionable_type'=>'districts']); //Sentani Timur
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5349, 'regionable_type'=>'districts']); //Bonggo
            DB::table('regionables')->insert(['region_id'=>4725, 'regionable_id'=>5350, 'regionable_type'=>'districts']); //Bonggo Timur
                DB::table('regions')->insert(['id'=>4726, 'parent'=>4725, 'code'=>'99355', 'type'=>'village', 'name'=>'Village 99355, Districts 9935, City 993, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62850, 'regionable_type'=>'village']); //Anus
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62851, 'regionable_type'=>'village']); //Armopa
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62852, 'regionable_type'=>'village']); //Bebon Jaya
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62853, 'regionable_type'=>'village']); //Kiren
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62854, 'regionable_type'=>'village']); //Krim Podena
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62855, 'regionable_type'=>'village']); //Maweswares (mawesres)
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62856, 'regionable_type'=>'village']); //Rimser Sari
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62857, 'regionable_type'=>'village']); //Rotea
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62858, 'regionable_type'=>'village']); //Taronta Srum
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62859, 'regionable_type'=>'village']); //Tetom
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62860, 'regionable_type'=>'village']); //Gwin Jaya
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62861, 'regionable_type'=>'village']); //Kaptiau
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62862, 'regionable_type'=>'village']); //Mawes Mukti
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62863, 'regionable_type'=>'village']); //Mawesday
                DB::table('regionables')->insert(['region_id'=>4726, 'regionable_id'=>62864, 'regionable_type'=>'village']); //Tamas Sari
            DB::table('regions')->insert(['id'=>4727, 'parent'=>4724, 'code'=>'9937', 'type'=>'districts', 'name'=>'Districts 9937, City 993, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5234, 'regionable_type'=>'districts']); //Mamberamo Hilir/ilir
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5235, 'regionable_type'=>'districts']); //Mamberamo Tengah
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5236, 'regionable_type'=>'districts']); //Mamberamo Tengah Timur
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5237, 'regionable_type'=>'districts']); //Rofaer (rufaer)
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5238, 'regionable_type'=>'districts']); //Mamberamo Hulu/ulu
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5351, 'regionable_type'=>'districts']); //Pantai Timur Barat
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5352, 'regionable_type'=>'districts']); //Pantai Timur
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5353, 'regionable_type'=>'districts']); //Tor Atas
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5354, 'regionable_type'=>'districts']); //Sarmi Selatan
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5355, 'regionable_type'=>'districts']); //Sarmi
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5356, 'regionable_type'=>'districts']); //Sarmi Timur
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5357, 'regionable_type'=>'districts']); //Apawer Hulu
            DB::table('regionables')->insert(['region_id'=>4727, 'regionable_id'=>5358, 'regionable_type'=>'districts']); //Pantai Barat
                DB::table('regions')->insert(['id'=>4728, 'parent'=>4727, 'code'=>'99374', 'type'=>'village', 'name'=>'Village 99374, Districts 9937, City 993, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62921, 'regionable_type'=>'village']); //Airoran
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62922, 'regionable_type'=>'village']); //Aurimi
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62923, 'regionable_type'=>'village']); //Bina
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62924, 'regionable_type'=>'village']); //Kwawitania
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62925, 'regionable_type'=>'village']); //Maniwa
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62926, 'regionable_type'=>'village']); //Murara
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62927, 'regionable_type'=>'village']); //Sasawapece
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62928, 'regionable_type'=>'village']); //Surimania (syurimania)
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62929, 'regionable_type'=>'village']); //Tamaya
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62930, 'regionable_type'=>'village']); //Wamariri
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62931, 'regionable_type'=>'village']); //Arbais
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62932, 'regionable_type'=>'village']); //Aruswar
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62933, 'regionable_type'=>'village']); //Burgena
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62934, 'regionable_type'=>'village']); //Kamenawari
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62935, 'regionable_type'=>'village']); //Kapeso
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62936, 'regionable_type'=>'village']); //Karfasia
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62937, 'regionable_type'=>'village']); //Martewar
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62938, 'regionable_type'=>'village']); //Masep
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62939, 'regionable_type'=>'village']); //Nisro
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62940, 'regionable_type'=>'village']); //Niwerawar
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62941, 'regionable_type'=>'village']); //Samorkena
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62942, 'regionable_type'=>'village']); //Siantoa
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62943, 'regionable_type'=>'village']); //Subu
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62944, 'regionable_type'=>'village']); //Waim
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62945, 'regionable_type'=>'village']); //Wari
                DB::table('regionables')->insert(['region_id'=>4728, 'regionable_id'=>62946, 'regionable_type'=>'village']); //Webro
        DB::table('regions')->insert(['id'=>4729, 'parent'=>4642, 'code'=>'994', 'type'=>'city', 'name'=>'City 994, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4729, 'regionable_id'=>329, 'regionable_type'=>'city']); //Keerom regencies
            DB::table('regions')->insert(['id'=>4730, 'parent'=>4729, 'code'=>'9946', 'type'=>'districts', 'name'=>'Districts 9946, City 994, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4730, 'regionable_id'=>5359, 'regionable_type'=>'districts']); //Senggi
            DB::table('regionables')->insert(['region_id'=>4730, 'regionable_id'=>5360, 'regionable_type'=>'districts']); //Web
            DB::table('regionables')->insert(['region_id'=>4730, 'regionable_id'=>5361, 'regionable_type'=>'districts']); //Towe
            DB::table('regionables')->insert(['region_id'=>4730, 'regionable_id'=>5362, 'regionable_type'=>'districts']); //Waris
            DB::table('regionables')->insert(['region_id'=>4730, 'regionable_id'=>5363, 'regionable_type'=>'districts']); //Arso
            DB::table('regionables')->insert(['region_id'=>4730, 'regionable_id'=>5364, 'regionable_type'=>'districts']); //Arso Timur
            DB::table('regionables')->insert(['region_id'=>4730, 'regionable_id'=>5365, 'regionable_type'=>'districts']); //Skamto (skanto)
                DB::table('regions')->insert(['id'=>4731, 'parent'=>4730, 'code'=>'99469', 'type'=>'village', 'name'=>'Village 99469, Districts 9946, City 994, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4731, 'regionable_id'=>63000, 'regionable_type'=>'village']); //Arsopura
                DB::table('regionables')->insert(['region_id'=>4731, 'regionable_id'=>63001, 'regionable_type'=>'village']); //Intaimelyan (intaimilyan)
                DB::table('regionables')->insert(['region_id'=>4731, 'regionable_id'=>63002, 'regionable_type'=>'village']); //Jaifuri
                DB::table('regionables')->insert(['region_id'=>4731, 'regionable_id'=>63003, 'regionable_type'=>'village']); //Naramben
                DB::table('regionables')->insert(['region_id'=>4731, 'regionable_id'=>63004, 'regionable_type'=>'village']); //Skanto (skamto)
                DB::table('regionables')->insert(['region_id'=>4731, 'regionable_id'=>63005, 'regionable_type'=>'village']); //Traimelyan (traimilyan)
                DB::table('regionables')->insert(['region_id'=>4731, 'regionable_id'=>63006, 'regionable_type'=>'village']); //Wiyantre (wiantie)
                DB::table('regionables')->insert(['region_id'=>4731, 'regionable_id'=>63007, 'regionable_type'=>'village']); //Wulukbubun
        DB::table('regions')->insert(['id'=>4732, 'parent'=>4642, 'code'=>'995', 'type'=>'city', 'name'=>'City 995, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4732, 'regionable_id'=>330, 'regionable_type'=>'city']); //Jayawijaya regencies
        DB::table('regionables')->insert(['region_id'=>4732, 'regionable_id'=>331, 'regionable_type'=>'city']); //Mamberamo Tengah regencies
        DB::table('regionables')->insert(['region_id'=>4732, 'regionable_id'=>332, 'regionable_type'=>'city']); //Lanny Jaya regencies
        DB::table('regionables')->insert(['region_id'=>4732, 'regionable_id'=>333, 'regionable_type'=>'city']); //Tolikara regencies
        DB::table('regionables')->insert(['region_id'=>4732, 'regionable_id'=>334, 'regionable_type'=>'city']); //Nduga regencies
        DB::table('regionables')->insert(['region_id'=>4732, 'regionable_id'=>335, 'regionable_type'=>'city']); //Yahukimo regencies
        DB::table('regionables')->insert(['region_id'=>4732, 'regionable_id'=>336, 'regionable_type'=>'city']); //Pegunungan Bintang regencies
        DB::table('regionables')->insert(['region_id'=>4732, 'regionable_id'=>337, 'regionable_type'=>'city']); //Yalimo regencies
            DB::table('regions')->insert(['id'=>4733, 'parent'=>4732, 'code'=>'9958', 'type'=>'districts', 'name'=>'Districts 9958, City 995, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5518, 'regionable_type'=>'districts']); //Kona
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5535, 'regionable_type'=>'districts']); //Dirwemna (diruwena)
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5536, 'regionable_type'=>'districts']); //Puldama
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5537, 'regionable_type'=>'districts']); //Talambo
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5538, 'regionable_type'=>'districts']); //Panggema
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5539, 'regionable_type'=>'districts']); //Ubahak
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5540, 'regionable_type'=>'districts']); //Nipsan
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5541, 'regionable_type'=>'districts']); //Nalca
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5542, 'regionable_type'=>'districts']); //Endomen
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5543, 'regionable_type'=>'districts']); //Duram
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5544, 'regionable_type'=>'districts']); //Pronggoli (proggoli)
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5545, 'regionable_type'=>'districts']); //Hereapini (hereanini)
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5546, 'regionable_type'=>'districts']); //Ubalihi
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5547, 'regionable_type'=>'districts']); //Anggruk
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5548, 'regionable_type'=>'districts']); //Kosarek
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5549, 'regionable_type'=>'districts']); //Walma
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5584, 'regionable_type'=>'districts']); //Benawa
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5585, 'regionable_type'=>'districts']); //Elelim
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5586, 'regionable_type'=>'districts']); //Welarek
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5587, 'regionable_type'=>'districts']); //Apalapsili
            DB::table('regionables')->insert(['region_id'=>4733, 'regionable_id'=>5588, 'regionable_type'=>'districts']); //Abenaho
                DB::table('regions')->insert(['id'=>4734, 'parent'=>4733, 'code'=>'99587', 'type'=>'village', 'name'=>'Village 99587, Districts 9958, City 995, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65317, 'regionable_type'=>'village']); //Abagima
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65318, 'regionable_type'=>'village']); //Abenaho
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65319, 'regionable_type'=>'village']); //Alugi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65320, 'regionable_type'=>'village']); //Amuki
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65321, 'regionable_type'=>'village']); //Arikbalek
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65322, 'regionable_type'=>'village']); //Beim
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65323, 'regionable_type'=>'village']); //Beyam
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65324, 'regionable_type'=>'village']); //Bonahik
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65325, 'regionable_type'=>'village']); //Bonggi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65326, 'regionable_type'=>'village']); //Bukurik
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65327, 'regionable_type'=>'village']); //Bumbum
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65328, 'regionable_type'=>'village']); //Burim
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65329, 'regionable_type'=>'village']); //Dahonaikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65330, 'regionable_type'=>'village']); //Detpagado
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65331, 'regionable_type'=>'village']); //Dombomi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65332, 'regionable_type'=>'village']); //Dosumo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65333, 'regionable_type'=>'village']); //Elesim
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65334, 'regionable_type'=>'village']); //Eliekma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65335, 'regionable_type'=>'village']); //Fabulik
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65336, 'regionable_type'=>'village']); //Fialem
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65337, 'regionable_type'=>'village']); //Fuahe
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65338, 'regionable_type'=>'village']); //Halisek
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65339, 'regionable_type'=>'village']); //Heahobak
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65340, 'regionable_type'=>'village']); //Helaksili
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65341, 'regionable_type'=>'village']); //Hombanman
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65342, 'regionable_type'=>'village']); //Horakia
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65343, 'regionable_type'=>'village']); //Horenikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65344, 'regionable_type'=>'village']); //Hubliki
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65345, 'regionable_type'=>'village']); //Hulhule
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65346, 'regionable_type'=>'village']); //Hulikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65347, 'regionable_type'=>'village']); //Humalma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65348, 'regionable_type'=>'village']); //Hundilip
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65349, 'regionable_type'=>'village']); //Hurualma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65350, 'regionable_type'=>'village']); //Iwim
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65351, 'regionable_type'=>'village']); //Jinggiwi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65352, 'regionable_type'=>'village']); //Kandibung
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65353, 'regionable_type'=>'village']); //Kawokholik
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65354, 'regionable_type'=>'village']); //Kesuwi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65355, 'regionable_type'=>'village']); //Kewi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65356, 'regionable_type'=>'village']); //Klesu
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65357, 'regionable_type'=>'village']); //Kolaima
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65358, 'regionable_type'=>'village']); //Landikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65359, 'regionable_type'=>'village']); //Langongkok
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65360, 'regionable_type'=>'village']); //Lasikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65361, 'regionable_type'=>'village']); //Lilinmuhuk
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65362, 'regionable_type'=>'village']); //Lilukikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65363, 'regionable_type'=>'village']); //Lohomabel
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65364, 'regionable_type'=>'village']); //Mahial
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65365, 'regionable_type'=>'village']); //Maleo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65366, 'regionable_type'=>'village']); //Moban
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65367, 'regionable_type'=>'village']); //Mulip
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65368, 'regionable_type'=>'village']); //Musanahikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65369, 'regionable_type'=>'village']); //Nenomani
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65370, 'regionable_type'=>'village']); //Nilbo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65371, 'regionable_type'=>'village']); //Nofualma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65372, 'regionable_type'=>'village']); //Noholuok
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65373, 'regionable_type'=>'village']); //Obabin
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65374, 'regionable_type'=>'village']); //Obabin Satu
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65375, 'regionable_type'=>'village']); //Pamumu
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65376, 'regionable_type'=>'village']); //Pirikalem
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65377, 'regionable_type'=>'village']); //Sabilironggo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65378, 'regionable_type'=>'village']); //Sahikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65379, 'regionable_type'=>'village']); //Salo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65380, 'regionable_type'=>'village']); //Salohe
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65381, 'regionable_type'=>'village']); //Sapiwarek
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65382, 'regionable_type'=>'village']); //Sebi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65383, 'regionable_type'=>'village']); //Sengikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65384, 'regionable_type'=>'village']); //Sohi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65385, 'regionable_type'=>'village']); //Sohombunu
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65386, 'regionable_type'=>'village']); //Sombule
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65387, 'regionable_type'=>'village']); //Suahe
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65388, 'regionable_type'=>'village']); //Suele
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65389, 'regionable_type'=>'village']); //Sumbule Satu
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65390, 'regionable_type'=>'village']); //Suminaikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65391, 'regionable_type'=>'village']); //Tagabaga
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65392, 'regionable_type'=>'village']); //Uluhufuk
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65393, 'regionable_type'=>'village']); //Ulun
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65394, 'regionable_type'=>'village']); //Ulusi
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65395, 'regionable_type'=>'village']); //Usabiye
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65396, 'regionable_type'=>'village']); //Uwambo Satu
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65397, 'regionable_type'=>'village']); //Wabuhuk
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65398, 'regionable_type'=>'village']); //Waghasilimo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65399, 'regionable_type'=>'village']); //Walagima
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65400, 'regionable_type'=>'village']); //Wambal
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65401, 'regionable_type'=>'village']); //Wambalfak
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65402, 'regionable_type'=>'village']); //Wambo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65403, 'regionable_type'=>'village']); //Wamhor
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65404, 'regionable_type'=>'village']); //Wandikbongkion
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65405, 'regionable_type'=>'village']); //Wanggibo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65406, 'regionable_type'=>'village']); //Wangkun
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65407, 'regionable_type'=>'village']); //Waroham
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65408, 'regionable_type'=>'village']); //Wenemikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65409, 'regionable_type'=>'village']); //Wilak
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65410, 'regionable_type'=>'village']); //Wileroma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65411, 'regionable_type'=>'village']); //Wiltlanggo
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65412, 'regionable_type'=>'village']); //Worol
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65413, 'regionable_type'=>'village']); //Wurupikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65414, 'regionable_type'=>'village']); //Wutlarin
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65415, 'regionable_type'=>'village']); //Yabusup
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65416, 'regionable_type'=>'village']); //Yahatma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65417, 'regionable_type'=>'village']); //Yama
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65418, 'regionable_type'=>'village']); //Yambaikma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65419, 'regionable_type'=>'village']); //Yanamik
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65420, 'regionable_type'=>'village']); //Yangkikalma
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65421, 'regionable_type'=>'village']); //Yawan
                DB::table('regionables')->insert(['region_id'=>4734, 'regionable_id'=>65422, 'regionable_type'=>'village']); //Yutanggo
        DB::table('regions')->insert(['id'=>4735, 'parent'=>4642, 'code'=>'996', 'type'=>'city', 'name'=>'City 996, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4735, 'regionable_id'=>338, 'regionable_type'=>'city']); //Merauke regencies
        DB::table('regionables')->insert(['region_id'=>4735, 'regionable_id'=>339, 'regionable_type'=>'city']); //Boven Digoel regencies
            DB::table('regions')->insert(['id'=>4736, 'parent'=>4735, 'code'=>'9966', 'type'=>'districts', 'name'=>'Districts 9966, City 996, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5609, 'regionable_type'=>'districts']); //Subur
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5610, 'regionable_type'=>'districts']); //Jair
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5611, 'regionable_type'=>'districts']); //Kouh
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5612, 'regionable_type'=>'districts']); //Ki
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5613, 'regionable_type'=>'districts']); //Sesnuk
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5614, 'regionable_type'=>'districts']); //Kombut
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5615, 'regionable_type'=>'districts']); //Mindiptana
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5616, 'regionable_type'=>'districts']); //Iniyandit
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5617, 'regionable_type'=>'districts']); //Bomakia
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5618, 'regionable_type'=>'districts']); //Mandobo
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5619, 'regionable_type'=>'districts']); //Arimop
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5620, 'regionable_type'=>'districts']); //Fofi
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5621, 'regionable_type'=>'districts']); //Ambatkwi (ambatkui)
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5622, 'regionable_type'=>'districts']); //Kombay
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5623, 'regionable_type'=>'districts']); //Yaniruma
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5624, 'regionable_type'=>'districts']); //Waropko
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5625, 'regionable_type'=>'districts']); //Ninati
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5626, 'regionable_type'=>'districts']); //Manggelum
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5627, 'regionable_type'=>'districts']); //Kawagit
            DB::table('regionables')->insert(['region_id'=>4736, 'regionable_id'=>5628, 'regionable_type'=>'districts']); //Firiwage
                DB::table('regions')->insert(['id'=>4737, 'parent'=>4736, 'code'=>'99665', 'type'=>'village', 'name'=>'Village 99665, Districts 9966, City 996, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65605, 'regionable_type'=>'village']); //Kouh
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65689, 'regionable_type'=>'village']); //Bayanggop
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65690, 'regionable_type'=>'village']); //Burunggop
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65691, 'regionable_type'=>'village']); //Gaguop
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65692, 'regionable_type'=>'village']); //Kewam
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65693, 'regionable_type'=>'village']); //Mangga Tiga
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65694, 'regionable_type'=>'village']); //Manggelum
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65695, 'regionable_type'=>'village']); //Biwage
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65696, 'regionable_type'=>'village']); //Biwage Dua
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65697, 'regionable_type'=>'village']); //Kawagit
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65698, 'regionable_type'=>'village']); //Kombai
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65699, 'regionable_type'=>'village']); //Niop
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65700, 'regionable_type'=>'village']); //Wanggom
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65701, 'regionable_type'=>'village']); //Firiwage
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65702, 'regionable_type'=>'village']); //Kabuwage
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65703, 'regionable_type'=>'village']); //Karuwage
                DB::table('regionables')->insert(['region_id'=>4737, 'regionable_id'=>65704, 'regionable_type'=>'village']); //Waliburu
        DB::table('regions')->insert(['id'=>4738, 'parent'=>4642, 'code'=>'997', 'type'=>'city', 'name'=>'City 997, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4738, 'regionable_id'=>340, 'regionable_type'=>'city']); //Asmat regencies
            DB::table('regions')->insert(['id'=>4739, 'parent'=>4738, 'code'=>'9976', 'type'=>'districts', 'name'=>'Districts 9976, City 997, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4739, 'regionable_id'=>5629, 'regionable_type'=>'districts']); //Suator
            DB::table('regionables')->insert(['region_id'=>4739, 'regionable_id'=>5630, 'regionable_type'=>'districts']); //Kolf Braza
                DB::table('regions')->insert(['id'=>4740, 'parent'=>4739, 'code'=>'99766', 'type'=>'village', 'name'=>'Village 99766, Districts 9976, City 997, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65705, 'regionable_type'=>'village']); //Amakot
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65706, 'regionable_type'=>'village']); //Ayak
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65707, 'regionable_type'=>'village']); //Banum
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65708, 'regionable_type'=>'village']); //Binam
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65709, 'regionable_type'=>'village']); //Bor
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65710, 'regionable_type'=>'village']); //Bubis
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65711, 'regionable_type'=>'village']); //Bumu
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65712, 'regionable_type'=>'village']); //Burbis
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65713, 'regionable_type'=>'village']); //Daikot
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65714, 'regionable_type'=>'village']); //Dekamor / Dekamer
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65715, 'regionable_type'=>'village']); //Emnam
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65716, 'regionable_type'=>'village']); //Jinak
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65717, 'regionable_type'=>'village']); //Kapayap Dua
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65718, 'regionable_type'=>'village']); //Kapayap Satu
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65719, 'regionable_type'=>'village']); //Kapayap Tiga
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65720, 'regionable_type'=>'village']); //Karbis
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65721, 'regionable_type'=>'village']); //Nagatun
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65722, 'regionable_type'=>'village']); //Somnak
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65723, 'regionable_type'=>'village']); //Soray / Sorai
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65724, 'regionable_type'=>'village']); //Ujung Batu
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65725, 'regionable_type'=>'village']); //Vakam
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65726, 'regionable_type'=>'village']); //Vakam Dua
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65727, 'regionable_type'=>'village']); //Wabak
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65728, 'regionable_type'=>'village']); //Wagabus
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65729, 'regionable_type'=>'village']); //Waganu Dua
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65730, 'regionable_type'=>'village']); //Waijens
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65731, 'regionable_type'=>'village']); //Wowi
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65732, 'regionable_type'=>'village']); //Auban
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65733, 'regionable_type'=>'village']); //Binamsain
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65734, 'regionable_type'=>'village']); //Butukatnau
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65735, 'regionable_type'=>'village']); //Mabul
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65736, 'regionable_type'=>'village']); //Patipi (patippi)
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65737, 'regionable_type'=>'village']); //Pepera
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65738, 'regionable_type'=>'village']); //Pirabanak
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65739, 'regionable_type'=>'village']); //Sipenap / Sipanap (asarep)
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65740, 'regionable_type'=>'village']); //Ulakin
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65741, 'regionable_type'=>'village']); //Woutu Brasa
                DB::table('regionables')->insert(['region_id'=>4740, 'regionable_id'=>65742, 'regionable_type'=>'village']); //Woutu Kolof
            DB::table('regions')->insert(['id'=>4741, 'parent'=>4738, 'code'=>'9977', 'type'=>'districts', 'name'=>'Districts 9977, City 997, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5631, 'regionable_type'=>'districts']); //Kopay
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5632, 'regionable_type'=>'districts']); //Der Koumur
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5633, 'regionable_type'=>'districts']); //Safan
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5634, 'regionable_type'=>'districts']); //Pantai Kasuari
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5635, 'regionable_type'=>'districts']); //Atsy / Atsj
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5636, 'regionable_type'=>'districts']); //Betcbamu
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5637, 'regionable_type'=>'districts']); //Sirets
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5638, 'regionable_type'=>'districts']); //Ayip
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5639, 'regionable_type'=>'districts']); //Jetsy
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5640, 'regionable_type'=>'districts']); //Agats
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5641, 'regionable_type'=>'districts']); //Joerat
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5642, 'regionable_type'=>'districts']); //Unir Sirau
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5643, 'regionable_type'=>'districts']); //Sawa Erma
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5644, 'regionable_type'=>'districts']); //Suru-suru
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5645, 'regionable_type'=>'districts']); //Pulau Tiga
            DB::table('regionables')->insert(['region_id'=>4741, 'regionable_id'=>5646, 'regionable_type'=>'districts']); //Akat
                DB::table('regions')->insert(['id'=>4742, 'parent'=>4741, 'code'=>'99779', 'type'=>'village', 'name'=>'Village 99779, Districts 9977, City 997, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65815, 'regionable_type'=>'village']); //Dawer
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65816, 'regionable_type'=>'village']); //Katew
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65817, 'regionable_type'=>'village']); //Pau
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65818, 'regionable_type'=>'village']); //Powetsy
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65819, 'regionable_type'=>'village']); //Sisakem
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65820, 'regionable_type'=>'village']); //Yetsy
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65892, 'regionable_type'=>'village']); //Akat (ayam)
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65893, 'regionable_type'=>'village']); //Bayiw Pinam
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65894, 'regionable_type'=>'village']); //Beco
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65895, 'regionable_type'=>'village']); //Buetkwar (betkuar)
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65896, 'regionable_type'=>'village']); //Cumnew
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65897, 'regionable_type'=>'village']); //Fakan
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65898, 'regionable_type'=>'village']); //Jewes
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65899, 'regionable_type'=>'village']); //Manepsimni (manep)
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65900, 'regionable_type'=>'village']); //Simini
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65901, 'regionable_type'=>'village']); //Waw
                DB::table('regionables')->insert(['region_id'=>4742, 'regionable_id'=>65902, 'regionable_type'=>'village']); //Yuni
            DB::table('regions')->insert(['id'=>4743, 'parent'=>4738, 'code'=>'9978', 'type'=>'districts', 'name'=>'Districts 9978, City 997, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4743, 'regionable_id'=>5647, 'regionable_type'=>'districts']); //Fayit
                DB::table('regions')->insert(['id'=>4744, 'parent'=>4743, 'code'=>'99782', 'type'=>'village', 'name'=>'Village 99782, Districts 9978, City 997, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65903, 'regionable_type'=>'village']); //Acenep (ocenep)
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65904, 'regionable_type'=>'village']); //Ainamsato
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65905, 'regionable_type'=>'village']); //Ais
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65906, 'regionable_type'=>'village']); //Akan Tapak
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65907, 'regionable_type'=>'village']); //Amaita
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65908, 'regionable_type'=>'village']); //Bagair
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65909, 'regionable_type'=>'village']); //Bakyor
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65910, 'regionable_type'=>'village']); //Basim
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65911, 'regionable_type'=>'village']); //Bawos
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65912, 'regionable_type'=>'village']); //Biopis
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65913, 'regionable_type'=>'village']); //Bora
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65914, 'regionable_type'=>'village']); //Isar
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65915, 'regionable_type'=>'village']); //Kagas
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65916, 'regionable_type'=>'village']); //Kayarpis
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65917, 'regionable_type'=>'village']); //Mapane
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65918, 'regionable_type'=>'village']); //Nanai (nanay)
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65919, 'regionable_type'=>'village']); //Piramat
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65920, 'regionable_type'=>'village']); //Pirien
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65921, 'regionable_type'=>'village']); //Sayoa
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65922, 'regionable_type'=>'village']); //Tauro
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65923, 'regionable_type'=>'village']); //Waras
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65924, 'regionable_type'=>'village']); //Wiyar
                DB::table('regionables')->insert(['region_id'=>4744, 'regionable_id'=>65925, 'regionable_type'=>'village']); //Yawas
        DB::table('regions')->insert(['id'=>4745, 'parent'=>4642, 'code'=>'998', 'type'=>'city', 'name'=>'City 998, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4745, 'regionable_id'=>341, 'regionable_type'=>'city']); //Mappi regencies
            DB::table('regions')->insert(['id'=>4746, 'parent'=>4745, 'code'=>'9985', 'type'=>'districts', 'name'=>'Districts 9985, City 998, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4746, 'regionable_id'=>5648, 'regionable_type'=>'districts']); //Yakomi
            DB::table('regionables')->insert(['region_id'=>4746, 'regionable_id'=>5649, 'regionable_type'=>'districts']); //Syahcame
            DB::table('regionables')->insert(['region_id'=>4746, 'regionable_id'=>5650, 'regionable_type'=>'districts']); //Edera
            DB::table('regionables')->insert(['region_id'=>4746, 'regionable_id'=>5651, 'regionable_type'=>'districts']); //Venaha
            DB::table('regionables')->insert(['region_id'=>4746, 'regionable_id'=>5652, 'regionable_type'=>'districts']); //Bamgi
                DB::table('regions')->insert(['id'=>4747, 'parent'=>4746, 'code'=>'99853', 'type'=>'village', 'name'=>'Village 99853, Districts 9985, City 998, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65926, 'regionable_type'=>'village']); //Amk
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65927, 'regionable_type'=>'village']); //Benggo
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65928, 'regionable_type'=>'village']); //Borohaba
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65929, 'regionable_type'=>'village']); //Kokoya
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65930, 'regionable_type'=>'village']); //Yame
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65931, 'regionable_type'=>'village']); //Asset
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65932, 'regionable_type'=>'village']); //Bosma
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65933, 'regionable_type'=>'village']); //Homilikia (homlikya)
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65934, 'regionable_type'=>'village']); //Kobeta
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65935, 'regionable_type'=>'village']); //Oghoto
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65936, 'regionable_type'=>'village']); //Osso
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65937, 'regionable_type'=>'village']); //Bade
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65938, 'regionable_type'=>'village']); //Banamepe
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65939, 'regionable_type'=>'village']); //Geturki
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65940, 'regionable_type'=>'village']); //Gimikia (gemikya)
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65941, 'regionable_type'=>'village']); //Isyaman
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65942, 'regionable_type'=>'village']); //Mememu
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65943, 'regionable_type'=>'village']); //Yodom
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65944, 'regionable_type'=>'village']); //Ebeske
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65945, 'regionable_type'=>'village']); //Getiyo
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65946, 'regionable_type'=>'village']); //Harapan
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65947, 'regionable_type'=>'village']); //Memes
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65948, 'regionable_type'=>'village']); //Mopio
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65949, 'regionable_type'=>'village']); //Ogorito
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65950, 'regionable_type'=>'village']); //Pies (piyes)
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65951, 'regionable_type'=>'village']); //Sahapikia (sahapikya)
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65952, 'regionable_type'=>'village']); //Sien
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65953, 'regionable_type'=>'village']); //Yibin
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65954, 'regionable_type'=>'village']); //Konebi
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65955, 'regionable_type'=>'village']); //Sibi
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65956, 'regionable_type'=>'village']); //Tagaimon Karome
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65957, 'regionable_type'=>'village']); //Tagaimon Sino
                DB::table('regionables')->insert(['region_id'=>4747, 'regionable_id'=>65958, 'regionable_type'=>'village']); //Yeloba
            DB::table('regions')->insert(['id'=>4748, 'parent'=>4745, 'code'=>'9987', 'type'=>'districts', 'name'=>'Districts 9987, City 998, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5653, 'regionable_type'=>'districts']); //Passue
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5654, 'regionable_type'=>'districts']); //Obaa
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5655, 'regionable_type'=>'districts']); //Nambioman Bapai (mambioman)
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5656, 'regionable_type'=>'districts']); //Minyamur
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5657, 'regionable_type'=>'districts']); //Assue
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5658, 'regionable_type'=>'districts']); //Citakmitak
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5659, 'regionable_type'=>'districts']); //Kaibar
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5660, 'regionable_type'=>'districts']); //Ti Zain
            DB::table('regionables')->insert(['region_id'=>4748, 'regionable_id'=>5661, 'regionable_type'=>'districts']); //Passue Bawah
                DB::table('regions')->insert(['id'=>4749, 'parent'=>4748, 'code'=>'99875', 'type'=>'village', 'name'=>'Village 99875, Districts 9987, City 998, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66041, 'regionable_type'=>'village']); //Abau
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66042, 'regionable_type'=>'village']); //Bidneu (bidnew)
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66043, 'regionable_type'=>'village']); //Bifo
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66044, 'regionable_type'=>'village']); //Epem
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66045, 'regionable_type'=>'village']); //Kumasma
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66046, 'regionable_type'=>'village']); //Samurukie
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66047, 'regionable_type'=>'village']); //Senggo
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66048, 'regionable_type'=>'village']); //Tamanim
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66049, 'regionable_type'=>'village']); //Womin
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66050, 'regionable_type'=>'village']); //Amasu (amazu)
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66051, 'regionable_type'=>'village']); //Binerbis
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66052, 'regionable_type'=>'village']); //Fomu
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66053, 'regionable_type'=>'village']); //Imembi
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66054, 'regionable_type'=>'village']); //Tayau
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66055, 'regionable_type'=>'village']); //Tiau
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66056, 'regionable_type'=>'village']); //Yemu
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66057, 'regionable_type'=>'village']); //Basman
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66058, 'regionable_type'=>'village']); //Kumaban
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66059, 'regionable_type'=>'village']); //Merokima
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66060, 'regionable_type'=>'village']); //Mu
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66061, 'regionable_type'=>'village']); //Pier
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66062, 'regionable_type'=>'village']); //Sagis
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66063, 'regionable_type'=>'village']); //Tarwa
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66064, 'regionable_type'=>'village']); //Tugumau
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66065, 'regionable_type'=>'village']); //Busiri
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66066, 'regionable_type'=>'village']); //Haku
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66067, 'regionable_type'=>'village']); //Honya
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66068, 'regionable_type'=>'village']); //Keta
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66069, 'regionable_type'=>'village']); //Veta
                DB::table('regionables')->insert(['region_id'=>4749, 'regionable_id'=>66070, 'regionable_type'=>'village']); //Wonggi
            DB::table('regions')->insert(['id'=>4750, 'parent'=>4745, 'code'=>'9988', 'type'=>'districts', 'name'=>'Districts 9988, City 998, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4750, 'regionable_id'=>5662, 'regionable_type'=>'districts']); //Haju
                DB::table('regions')->insert(['id'=>4751, 'parent'=>4750, 'code'=>'99881', 'type'=>'village', 'name'=>'Village 99881, Districts 9988, City 998, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66071, 'regionable_type'=>'village']); //Amagatsu
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66072, 'regionable_type'=>'village']); //Amenda
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66073, 'regionable_type'=>'village']); //Amuro (omuro)
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66074, 'regionable_type'=>'village']); //Arare
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66075, 'regionable_type'=>'village']); //Atsipim
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66076, 'regionable_type'=>'village']); //Gairipim
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66077, 'regionable_type'=>'village']); //Kaibu
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66078, 'regionable_type'=>'village']); //Kaibusene
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66079, 'regionable_type'=>'village']); //Kasima
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66080, 'regionable_type'=>'village']); //Katage
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66081, 'regionable_type'=>'village']); //Kerke
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66082, 'regionable_type'=>'village']); //Mani
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66083, 'regionable_type'=>'village']); //Okor (okoor)
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66084, 'regionable_type'=>'village']); //Pagai
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66085, 'regionable_type'=>'village']); //Semtaipim (tsemtaipim)
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66086, 'regionable_type'=>'village']); //Sogophe
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66087, 'regionable_type'=>'village']); //Warogom
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66088, 'regionable_type'=>'village']); //Wiyage
                DB::table('regionables')->insert(['region_id'=>4751, 'regionable_id'=>66089, 'regionable_type'=>'village']); //Yagatsu
        DB::table('regions')->insert(['id'=>4752, 'parent'=>4642, 'code'=>'999', 'type'=>'city', 'name'=>'City 999, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4752, 'regionable_id'=>342, 'regionable_type'=>'city']); //Mimika regencies
            DB::table('regions')->insert(['id'=>4753, 'parent'=>4752, 'code'=>'9991', 'type'=>'districts', 'name'=>'Districts 9991, City 999, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4753, 'regionable_id'=>5663, 'regionable_type'=>'districts']); //Mimika Baru
                DB::table('regions')->insert(['id'=>4754, 'parent'=>4753, 'code'=>'99910', 'type'=>'village', 'name'=>'Village 99910, Districts 9991, City 999, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66090, 'regionable_type'=>'village']); //Harapan
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66091, 'regionable_type'=>'village']); //Inaoga (inauga)
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66092, 'regionable_type'=>'village']); //Kamoro Jaya
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66093, 'regionable_type'=>'village']); //Koperapoka
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66094, 'regionable_type'=>'village']); //Kwamki
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66095, 'regionable_type'=>'village']); //Limau Asri
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66096, 'regionable_type'=>'village']); //Nawaripi
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66097, 'regionable_type'=>'village']); //Nayaro
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66098, 'regionable_type'=>'village']); //Timika Jaya
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66099, 'regionable_type'=>'village']); //Wangirja
                DB::table('regionables')->insert(['region_id'=>4754, 'regionable_id'=>66100, 'regionable_type'=>'village']); //Wonosari Jaya
            DB::table('regions')->insert(['id'=>4755, 'parent'=>4752, 'code'=>'9996', 'type'=>'districts', 'name'=>'Districts 9996, City 999, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4755, 'regionable_id'=>5664, 'regionable_type'=>'districts']); //Mimika Timur
            DB::table('regionables')->insert(['region_id'=>4755, 'regionable_id'=>5665, 'regionable_type'=>'districts']); //Agimuga
            DB::table('regionables')->insert(['region_id'=>4755, 'regionable_id'=>5666, 'regionable_type'=>'districts']); //Jita
            DB::table('regionables')->insert(['region_id'=>4755, 'regionable_id'=>5667, 'regionable_type'=>'districts']); //Jila
            DB::table('regionables')->insert(['region_id'=>4755, 'regionable_id'=>5668, 'regionable_type'=>'districts']); //Tembagapura
            DB::table('regionables')->insert(['region_id'=>4755, 'regionable_id'=>5669, 'regionable_type'=>'districts']); //Kuala Kencana
                DB::table('regions')->insert(['id'=>4756, 'parent'=>4755, 'code'=>'99968', 'type'=>'village', 'name'=>'Village 99968, Districts 9996, City 999, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4756, 'regionable_id'=>66135, 'regionable_type'=>'village']); //Bhintuka
                DB::table('regionables')->insert(['region_id'=>4756, 'regionable_id'=>66136, 'regionable_type'=>'village']); //Iwaka
                DB::table('regionables')->insert(['region_id'=>4756, 'regionable_id'=>66137, 'regionable_type'=>'village']); //Karang Senang
                DB::table('regionables')->insert(['region_id'=>4756, 'regionable_id'=>66138, 'regionable_type'=>'village']); //Kuala Kencana
                DB::table('regionables')->insert(['region_id'=>4756, 'regionable_id'=>66139, 'regionable_type'=>'village']); //Mulia Kencana
                DB::table('regionables')->insert(['region_id'=>4756, 'regionable_id'=>66140, 'regionable_type'=>'village']); //Naena Muktipura
                DB::table('regionables')->insert(['region_id'=>4756, 'regionable_id'=>66141, 'regionable_type'=>'village']); //Utikini Baru
            DB::table('regions')->insert(['id'=>4757, 'parent'=>4752, 'code'=>'9997', 'type'=>'districts', 'name'=>'Districts 9997, City 999, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4757, 'regionable_id'=>5670, 'regionable_type'=>'districts']); //Mimika Timur Jauh
            DB::table('regionables')->insert(['region_id'=>4757, 'regionable_id'=>5671, 'regionable_type'=>'districts']); //Mimika Timur Tengah
            DB::table('regionables')->insert(['region_id'=>4757, 'regionable_id'=>5672, 'regionable_type'=>'districts']); //Mimika Barat Tengah
            DB::table('regionables')->insert(['region_id'=>4757, 'regionable_id'=>5673, 'regionable_type'=>'districts']); //Mimika Barat (mibar)
            DB::table('regionables')->insert(['region_id'=>4757, 'regionable_id'=>5674, 'regionable_type'=>'districts']); //Mimika Barat Jauh
                DB::table('regions')->insert(['id'=>4758, 'parent'=>4757, 'code'=>'99974', 'type'=>'village', 'name'=>'Village 99974, Districts 9997, City 999, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4758, 'regionable_id'=>66171, 'regionable_type'=>'village']); //Aiduna (aindua)
                DB::table('regionables')->insert(['region_id'=>4758, 'regionable_id'=>66172, 'regionable_type'=>'village']); //Potowayburu (potowaiburu)
                DB::table('regionables')->insert(['region_id'=>4758, 'regionable_id'=>66173, 'regionable_type'=>'village']); //Tapormai
                DB::table('regionables')->insert(['region_id'=>4758, 'regionable_id'=>66174, 'regionable_type'=>'village']); //Umar
                DB::table('regionables')->insert(['region_id'=>4758, 'regionable_id'=>66175, 'regionable_type'=>'village']); //Yapakopa

        //Papua Barat
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>25, 'regionable_type'=>'province']); //Papua Barat
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>343, 'regionable_type'=>'city']); //Manokwari regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>344, 'regionable_type'=>'city']); //Pegunungan Arfak regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>345, 'regionable_type'=>'city']); //Manokwari Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>346, 'regionable_type'=>'city']); //Teluk Wondama regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>347, 'regionable_type'=>'city']); //Teluk Bintuni regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>348, 'regionable_type'=>'city']); //Tambrauw regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>349, 'regionable_type'=>'city']); //Sorong city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>350, 'regionable_type'=>'city']); //Sorong regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>351, 'regionable_type'=>'city']); //Sorong Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>352, 'regionable_type'=>'city']); //Maybrat regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>353, 'regionable_type'=>'city']); //Raja Ampat regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>354, 'regionable_type'=>'city']); //Fakfak regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>355, 'regionable_type'=>'city']); //Kaimana regencies

        DB::table('regions')->insert(['id'=>4759, 'parent'=>4642, 'code'=>'983', 'type'=>'city', 'name'=>'City 983, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4759, 'regionable_id'=>343, 'regionable_type'=>'city']); //Manokwari regencies
        DB::table('regionables')->insert(['region_id'=>4759, 'regionable_id'=>344, 'regionable_type'=>'city']); //Pegunungan Arfak regencies
        DB::table('regionables')->insert(['region_id'=>4759, 'regionable_id'=>345, 'regionable_type'=>'city']); //Manokwari Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4759, 'regionable_id'=>346, 'regionable_type'=>'city']); //Teluk Wondama regencies
        DB::table('regionables')->insert(['region_id'=>4759, 'regionable_id'=>347, 'regionable_type'=>'city']); //Teluk Bintuni regencies
        DB::table('regionables')->insert(['region_id'=>4759, 'regionable_id'=>348, 'regionable_type'=>'city']); //Tambrauw regencies
            DB::table('regions')->insert(['id'=>4760, 'parent'=>4759, 'code'=>'9837', 'type'=>'districts', 'name'=>'Districts 9837, City 983, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5732, 'regionable_type'=>'districts']); //Merdey
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5733, 'regionable_type'=>'districts']); //Biscoop
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5734, 'regionable_type'=>'districts']); //Moskona Timur
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5735, 'regionable_type'=>'districts']); //Moskona Utara
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5736, 'regionable_type'=>'districts']); //Masyeta
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5737, 'regionable_type'=>'districts']); //Mubrani
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5738, 'regionable_type'=>'districts']); //Amberbaken
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5739, 'regionable_type'=>'districts']); //Senopi
            DB::table('regionables')->insert(['region_id'=>4760, 'regionable_id'=>5740, 'regionable_type'=>'districts']); //Kebar
                DB::table('regions')->insert(['id'=>4761, 'parent'=>4760, 'code'=>'98372', 'type'=>'village', 'name'=>'Village 98372, Districts 9837, City 983, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66788, 'regionable_type'=>'village']); //Afrawi
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66789, 'regionable_type'=>'village']); //Senopi
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66790, 'regionable_type'=>'village']); //Wausin (asiti)
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66791, 'regionable_type'=>'village']); //Ajami
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66792, 'regionable_type'=>'village']); //Akmuri
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66793, 'regionable_type'=>'village']); //Atai
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66794, 'regionable_type'=>'village']); //Inam
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66795, 'regionable_type'=>'village']); //Inambuari
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66796, 'regionable_type'=>'village']); //Injai
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66797, 'regionable_type'=>'village']); //Jandurau
                DB::table('regionables')->insert(['region_id'=>4761, 'regionable_id'=>66798, 'regionable_type'=>'village']); //Nekori
        DB::table('regions')->insert(['id'=>4762, 'parent'=>4642, 'code'=>'984', 'type'=>'city', 'name'=>'City 984, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4762, 'regionable_id'=>348, 'regionable_type'=>'city']); //Tambrauw regencies
        DB::table('regionables')->insert(['region_id'=>4762, 'regionable_id'=>349, 'regionable_type'=>'city']); //Sorong city
        DB::table('regionables')->insert(['region_id'=>4762, 'regionable_id'=>350, 'regionable_type'=>'city']); //Sorong regencies
        DB::table('regionables')->insert(['region_id'=>4762, 'regionable_id'=>351, 'regionable_type'=>'city']); //Sorong Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4762, 'regionable_id'=>352, 'regionable_type'=>'city']); //Maybrat regencies
        DB::table('regionables')->insert(['region_id'=>4762, 'regionable_id'=>353, 'regionable_type'=>'city']); //Raja Ampat regencies
            DB::table('regions')->insert(['id'=>4763, 'parent'=>4762, 'code'=>'9848', 'type'=>'districts', 'name'=>'Districts 9848, City 984, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5832, 'regionable_type'=>'districts']); //Ayau
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5833, 'regionable_type'=>'districts']); //Waigeo Utara
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5834, 'regionable_type'=>'districts']); //Waigeo Barat
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5835, 'regionable_type'=>'districts']); //Warwabomi
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5836, 'regionable_type'=>'districts']); //Kepulauan Ayau
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5837, 'regionable_type'=>'districts']); //Supnin
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5838, 'regionable_type'=>'districts']); //Waigeo Barat Kepulauan
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5839, 'regionable_type'=>'districts']); //Meos Mansar
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5840, 'regionable_type'=>'districts']); //Tiplol Mayalibit
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5841, 'regionable_type'=>'districts']); //Kota Waisai
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5842, 'regionable_type'=>'districts']); //Waigeo Selatan
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5843, 'regionable_type'=>'districts']); //Teluk Mayalibit
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5844, 'regionable_type'=>'districts']); //Waigeo Timur
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5845, 'regionable_type'=>'districts']); //Misool Timur
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5846, 'regionable_type'=>'districts']); //Kofiau
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5847, 'regionable_type'=>'districts']); //Misool Barat
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5848, 'regionable_type'=>'districts']); //Misool Selatan
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5849, 'regionable_type'=>'districts']); //Misool (misool Utara)
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5850, 'regionable_type'=>'districts']); //Kepulauan Sembilan
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5851, 'regionable_type'=>'districts']); //Batanta Selatan
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5852, 'regionable_type'=>'districts']); //Batanta Utara
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5853, 'regionable_type'=>'districts']); //Salawati Utara (samate)
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5854, 'regionable_type'=>'districts']); //Salawati Barat
            DB::table('regionables')->insert(['region_id'=>4763, 'regionable_id'=>5855, 'regionable_type'=>'districts']); //Salawati Tengah
                DB::table('regions')->insert(['id'=>4764, 'parent'=>4763, 'code'=>'98484', 'type'=>'village', 'name'=>'Village 98484, Districts 9848, City 984, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67664, 'regionable_type'=>'village']); //Amdui
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67665, 'regionable_type'=>'village']); //Wailebet
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67666, 'regionable_type'=>'village']); //Waiman
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67667, 'regionable_type'=>'village']); //Yenanas
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67668, 'regionable_type'=>'village']); //Arefi Selatan
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67669, 'regionable_type'=>'village']); //Arefi Timur
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67670, 'regionable_type'=>'village']); //Yensawai Barat
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67671, 'regionable_type'=>'village']); //Yensawai Timur
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67672, 'regionable_type'=>'village']); //Jefman Barat
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67673, 'regionable_type'=>'village']); //Jefman Timur
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67674, 'regionable_type'=>'village']); //Kapatlap
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67675, 'regionable_type'=>'village']); //Samate
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67676, 'regionable_type'=>'village']); //Waidim
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67677, 'regionable_type'=>'village']); //Wamega
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67678, 'regionable_type'=>'village']); //Kaliam
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67679, 'regionable_type'=>'village']); //Kalwal
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67680, 'regionable_type'=>'village']); //Solol
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67681, 'regionable_type'=>'village']); //Waibon
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67682, 'regionable_type'=>'village']); //Kalobo
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67683, 'regionable_type'=>'village']); //Sakabu
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67684, 'regionable_type'=>'village']); //Waibu
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67685, 'regionable_type'=>'village']); //Waijan
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67686, 'regionable_type'=>'village']); //Wailabu
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67687, 'regionable_type'=>'village']); //Wailen
                DB::table('regionables')->insert(['region_id'=>4764, 'regionable_id'=>67688, 'regionable_type'=>'village']); //Waimeci
        DB::table('regions')->insert(['id'=>4765, 'parent'=>4642, 'code'=>'986', 'type'=>'city', 'name'=>'City 986, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4765, 'regionable_id'=>352, 'regionable_type'=>'city']); //Maybrat regencies
        DB::table('regionables')->insert(['region_id'=>4765, 'regionable_id'=>354, 'regionable_type'=>'city']); //Fakfak regencies
        DB::table('regionables')->insert(['region_id'=>4765, 'regionable_id'=>355, 'regionable_type'=>'city']); //Kaimana regencies
            DB::table('regions')->insert(['id'=>4766, 'parent'=>4765, 'code'=>'9865', 'type'=>'districts', 'name'=>'Districts 9865, City 986, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5828, 'regionable_type'=>'districts']); //Aifat
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5858, 'regionable_type'=>'districts']); //Kokas
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5859, 'regionable_type'=>'districts']); //Kramongmongga (kramamongga)
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5865, 'regionable_type'=>'districts']); //Teluk Arguni Atas
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5866, 'regionable_type'=>'districts']); //Teluk Arguni Bawah (yerusi)
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5867, 'regionable_type'=>'districts']); //Kambraw (kamberau)
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5868, 'regionable_type'=>'districts']); //Kaimana
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5869, 'regionable_type'=>'districts']); //Teluk Etna
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5870, 'regionable_type'=>'districts']); //Yamor
            DB::table('regionables')->insert(['region_id'=>4766, 'regionable_id'=>5871, 'regionable_type'=>'districts']); //Buruway
                DB::table('regions')->insert(['id'=>4767, 'parent'=>4766, 'code'=>'98656', 'type'=>'village', 'name'=>'Village 98656, Districts 9865, City 986, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67889, 'regionable_type'=>'village']); //Adijaya
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67890, 'regionable_type'=>'village']); //Edor
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67891, 'regionable_type'=>'village']); //Esania
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67892, 'regionable_type'=>'village']); //Gaka
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67893, 'regionable_type'=>'village']); //Guriasa
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67894, 'regionable_type'=>'village']); //Hia
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67895, 'regionable_type'=>'village']); //Kambala
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67896, 'regionable_type'=>'village']); //Nusaulan Jaya
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67897, 'regionable_type'=>'village']); //Tairi
                DB::table('regionables')->insert(['region_id'=>4767, 'regionable_id'=>67898, 'regionable_type'=>'village']); //Yarona

        //Sulawesi Barat
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>27, 'regionable_type'=>'province']); //Sulawesi Barat
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>368, 'regionable_type'=>'city']); //Polewali Mandar regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>369, 'regionable_type'=>'city']); //Mamuju regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>370, 'regionable_type'=>'city']); //Mamasa regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>371, 'regionable_type'=>'city']); //Majene regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>372, 'regionable_type'=>'city']); //Mamuju Utara regencies

        DB::table('regions')->insert(['id'=>4768, 'parent'=>4642, 'code'=>'913', 'type'=>'city', 'name'=>'City 913, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4768, 'regionable_id'=>368, 'regionable_type'=>'city']); //Polewali Mandar regencies
        DB::table('regionables')->insert(['region_id'=>4768, 'regionable_id'=>369, 'regionable_type'=>'city']); //Mamuju regencies
        DB::table('regionables')->insert(['region_id'=>4768, 'regionable_id'=>370, 'regionable_type'=>'city']); //Mamasa regencies
            DB::table('regions')->insert(['id'=>4769, 'parent'=>4768, 'code'=>'9136', 'type'=>'districts', 'name'=>'Districts 9136, City 913, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6067, 'regionable_type'=>'districts']); //Sumarorong
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6068, 'regionable_type'=>'districts']); //Messawa
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6069, 'regionable_type'=>'districts']); //Mamasa
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6070, 'regionable_type'=>'districts']); //Nosu
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6071, 'regionable_type'=>'districts']); //Pana
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6072, 'regionable_type'=>'districts']); //Tabang
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6073, 'regionable_type'=>'districts']); //Tawalian
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6074, 'regionable_type'=>'districts']); //Sesena Padang
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6075, 'regionable_type'=>'districts']); //Balla
            DB::table('regionables')->insert(['region_id'=>4769, 'regionable_id'=>6076, 'regionable_type'=>'districts']); //Tanduk Kalua
                DB::table('regions')->insert(['id'=>4770, 'parent'=>4769, 'code'=>'91366', 'type'=>'village', 'name'=>'Village 91366, Districts 9136, City 913, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70116, 'regionable_type'=>'village']); //Balla
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70117, 'regionable_type'=>'village']); //Balla Barat
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70118, 'regionable_type'=>'village']); //Balla Satanetean
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70119, 'regionable_type'=>'village']); //Balla Tumuka
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70120, 'regionable_type'=>'village']); //Pidara
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70121, 'regionable_type'=>'village']); //Sipakuan
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70122, 'regionable_type'=>'village']); //Ballabatu
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70123, 'regionable_type'=>'village']); //Malabo
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70124, 'regionable_type'=>'village']); //Mannababa
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70125, 'regionable_type'=>'village']); //Mesakada
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70126, 'regionable_type'=>'village']); //Minake
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70127, 'regionable_type'=>'village']); //Parondobulawan
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70128, 'regionable_type'=>'village']); //Sindagamanik
                DB::table('regionables')->insert(['region_id'=>4770, 'regionable_id'=>70129, 'regionable_type'=>'village']); //Tamalantik
            DB::table('regions')->insert(['id'=>4771, 'parent'=>4768, 'code'=>'9137', 'type'=>'districts', 'name'=>'Districts 9137, City 913, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4771, 'regionable_id'=>6077, 'regionable_type'=>'districts']); //Bambang
            DB::table('regionables')->insert(['region_id'=>4771, 'regionable_id'=>6078, 'regionable_type'=>'districts']); //Rantebulahan Timur
            DB::table('regionables')->insert(['region_id'=>4771, 'regionable_id'=>6079, 'regionable_type'=>'districts']); //Mehalaan
            DB::table('regionables')->insert(['region_id'=>4771, 'regionable_id'=>6080, 'regionable_type'=>'districts']); //Mambi
            DB::table('regionables')->insert(['region_id'=>4771, 'regionable_id'=>6081, 'regionable_type'=>'districts']); //Tabulahan
            DB::table('regionables')->insert(['region_id'=>4771, 'regionable_id'=>6082, 'regionable_type'=>'districts']); //Aralle (arrale)
            DB::table('regionables')->insert(['region_id'=>4771, 'regionable_id'=>6083, 'regionable_type'=>'districts']); //Buntumalangka
                DB::table('regions')->insert(['id'=>4772, 'parent'=>4771, 'code'=>'91373', 'type'=>'village', 'name'=>'Village 91373, Districts 9137, City 913, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70176, 'regionable_type'=>'village']); //Aralle
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70177, 'regionable_type'=>'village']); //Aralle Utara
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70178, 'regionable_type'=>'village']); //Baruru
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70179, 'regionable_type'=>'village']); //Pamoseang Pangga
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70180, 'regionable_type'=>'village']); //Panetean
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70181, 'regionable_type'=>'village']); //Ralle Anak
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70182, 'regionable_type'=>'village']); //Ralleanak Utara
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70183, 'regionable_type'=>'village']); //Uhaidaho
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70184, 'regionable_type'=>'village']); //Uhailanu
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70185, 'regionable_type'=>'village']); //Aralle Timur
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70186, 'regionable_type'=>'village']); //Buntu Malangka
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70187, 'regionable_type'=>'village']); //Kabae
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70188, 'regionable_type'=>'village']); //Kebanga
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70189, 'regionable_type'=>'village']); //Ranteberan (rante Berang)
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70190, 'regionable_type'=>'village']); //Salurindu
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70191, 'regionable_type'=>'village']); //Salutambun
                DB::table('regionables')->insert(['region_id'=>4772, 'regionable_id'=>70192, 'regionable_type'=>'village']); //Taora
        DB::table('regions')->insert(['id'=>4773, 'parent'=>4642, 'code'=>'914', 'type'=>'city', 'name'=>'City 914, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4773, 'regionable_id'=>368, 'regionable_type'=>'city']); //Polewali Mandar regencies
        DB::table('regionables')->insert(['region_id'=>4773, 'regionable_id'=>371, 'regionable_type'=>'city']); //Majene regencies
            DB::table('regions')->insert(['id'=>4774, 'parent'=>4773, 'code'=>'9141', 'type'=>'districts', 'name'=>'Districts 9141, City 914, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4774, 'regionable_id'=>6047, 'regionable_type'=>'districts']); //Tinambung
            DB::table('regionables')->insert(['region_id'=>4774, 'regionable_id'=>6049, 'regionable_type'=>'districts']); //Limboro
            DB::table('regionables')->insert(['region_id'=>4774, 'regionable_id'=>6084, 'regionable_type'=>'districts']); //Banggae
            DB::table('regionables')->insert(['region_id'=>4774, 'regionable_id'=>6085, 'regionable_type'=>'districts']); //Banggae Timur
                DB::table('regions')->insert(['id'=>4775, 'parent'=>4774, 'code'=>'91411', 'type'=>'village', 'name'=>'Village 91411, Districts 9141, City 914, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4775, 'regionable_id'=>70193, 'regionable_type'=>'village']); //Banggae
                DB::table('regionables')->insert(['region_id'=>4775, 'regionable_id'=>70194, 'regionable_type'=>'village']); //Galung
                DB::table('regionables')->insert(['region_id'=>4775, 'regionable_id'=>70195, 'regionable_type'=>'village']); //Pangali-ali
                DB::table('regionables')->insert(['region_id'=>4775, 'regionable_id'=>70201, 'regionable_type'=>'village']); //Baruga Dua
                DB::table('regions')->insert(['id'=>4776, 'parent'=>4774, 'code'=>'91412', 'type'=>'village', 'name'=>'Village 91412, Districts 9141, City 914, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4776, 'regionable_id'=>69868, 'regionable_type'=>'village']); //Tangnga-tangnga
                DB::table('regionables')->insert(['region_id'=>4776, 'regionable_id'=>70202, 'regionable_type'=>'village']); //Baurung
                DB::table('regionables')->insert(['region_id'=>4776, 'regionable_id'=>70203, 'regionable_type'=>'village']); //Labuang
                DB::table('regions')->insert(['id'=>4777, 'parent'=>4774, 'code'=>'91413', 'type'=>'village', 'name'=>'Village 91413, Districts 9141, City 914, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69882, 'regionable_type'=>'village']); //Lembang Lembang
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69883, 'regionable_type'=>'village']); //Limboro
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69884, 'regionable_type'=>'village']); //Napo
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69885, 'regionable_type'=>'village']); //Palece
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69886, 'regionable_type'=>'village']); //Pendulangan (pandulangan)
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69887, 'regionable_type'=>'village']); //Renggeang
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69888, 'regionable_type'=>'village']); //Salarri
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69889, 'regionable_type'=>'village']); //Samasundu
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69890, 'regionable_type'=>'village']); //Tandasura (tandassura)
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69891, 'regionable_type'=>'village']); //Tangan Baru
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>69892, 'regionable_type'=>'village']); //Todang Todang
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>70204, 'regionable_type'=>'village']); //Buttu Baruga
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>70205, 'regionable_type'=>'village']); //Labuang Utara
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>70206, 'regionable_type'=>'village']); //Lembang
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>70207, 'regionable_type'=>'village']); //Tande
                DB::table('regionables')->insert(['region_id'=>4777, 'regionable_id'=>70208, 'regionable_type'=>'village']); //Tande Timur
                DB::table('regions')->insert(['id'=>4778, 'parent'=>4774, 'code'=>'91414', 'type'=>'village', 'name'=>'Village 91414, Districts 9141, City 914, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4778, 'regionable_id'=>70209, 'regionable_type'=>'village']); //Baruga
            DB::table('regions')->insert(['id'=>4779, 'parent'=>4773, 'code'=>'9145', 'type'=>'districts', 'name'=>'Districts 9145, City 914, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4779, 'regionable_id'=>6086, 'regionable_type'=>'districts']); //Pamboang
            DB::table('regionables')->insert(['region_id'=>4779, 'regionable_id'=>6087, 'regionable_type'=>'districts']); //Tammeredo Sendana
            DB::table('regionables')->insert(['region_id'=>4779, 'regionable_id'=>6088, 'regionable_type'=>'districts']); //Sendana
            DB::table('regionables')->insert(['region_id'=>4779, 'regionable_id'=>6089, 'regionable_type'=>'districts']); //Tubo (tubo Sendana)
            DB::table('regionables')->insert(['region_id'=>4779, 'regionable_id'=>6090, 'regionable_type'=>'districts']); //Malunda
            DB::table('regionables')->insert(['region_id'=>4779, 'regionable_id'=>6091, 'regionable_type'=>'districts']); //Ulumunda
                DB::table('regions')->insert(['id'=>4780, 'parent'=>4779, 'code'=>'91453', 'type'=>'village', 'name'=>'Village 91453, Districts 9145, City 914, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70255, 'regionable_type'=>'village']); //Bambangan
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70256, 'regionable_type'=>'village']); //Kayuangin
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70257, 'regionable_type'=>'village']); //Lamungang Batu
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70258, 'regionable_type'=>'village']); //Lombang
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70259, 'regionable_type'=>'village']); //Lombang Timur
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70260, 'regionable_type'=>'village']); //Lombong
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70261, 'regionable_type'=>'village']); //Lombong Timur
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70262, 'regionable_type'=>'village']); //Maliaya
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70263, 'regionable_type'=>'village']); //Malunda
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70264, 'regionable_type'=>'village']); //Mekkatta
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70265, 'regionable_type'=>'village']); //Mekkatta Selatan
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70266, 'regionable_type'=>'village']); //Salutahongan
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70267, 'regionable_type'=>'village']); //Kabiraan
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70268, 'regionable_type'=>'village']); //Panggalo
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70269, 'regionable_type'=>'village']); //Popenga
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70270, 'regionable_type'=>'village']); //Salutambung
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70271, 'regionable_type'=>'village']); //Sambabo
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70272, 'regionable_type'=>'village']); //Sulai
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70273, 'regionable_type'=>'village']); //Tandeallo
                DB::table('regionables')->insert(['region_id'=>4780, 'regionable_id'=>70274, 'regionable_type'=>'village']); //Ulumanda
        DB::table('regions')->insert(['id'=>4781, 'parent'=>4642, 'code'=>'915', 'type'=>'city', 'name'=>'City 915, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4781, 'regionable_id'=>369, 'regionable_type'=>'city']); //Mamuju regencies
        DB::table('regionables')->insert(['region_id'=>4781, 'regionable_id'=>372, 'regionable_type'=>'city']); //Mamuju Utara regencies
            DB::table('regions')->insert(['id'=>4782, 'parent'=>4781, 'code'=>'9151', 'type'=>'districts', 'name'=>'Districts 9151, City 915, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4782, 'regionable_id'=>6053, 'regionable_type'=>'districts']); //Mamuju
            DB::table('regionables')->insert(['region_id'=>4782, 'regionable_id'=>6054, 'regionable_type'=>'districts']); //Kep. Bala Balakang
            DB::table('regionables')->insert(['region_id'=>4782, 'regionable_id'=>6055, 'regionable_type'=>'districts']); //Simboro Dan Kepulauan
            DB::table('regionables')->insert(['region_id'=>4782, 'regionable_id'=>6056, 'regionable_type'=>'districts']); //Karossa
            DB::table('regionables')->insert(['region_id'=>4782, 'regionable_id'=>6092, 'regionable_type'=>'districts']); //Dapurang
                DB::table('regions')->insert(['id'=>4783, 'parent'=>4782, 'code'=>'91512', 'type'=>'village', 'name'=>'Village 91512, Districts 9151, City 915, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69925, 'regionable_type'=>'village']); //Bala Balakang
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69926, 'regionable_type'=>'village']); //Bala Balakang Timur
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69927, 'regionable_type'=>'village']); //Botteng
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69928, 'regionable_type'=>'village']); //Botteng Utara
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69929, 'regionable_type'=>'village']); //Kuptd Botteng I
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69930, 'regionable_type'=>'village']); //Kuptd Botteng Ii
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69931, 'regionable_type'=>'village']); //Rangas
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69932, 'regionable_type'=>'village']); //Salletto
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69933, 'regionable_type'=>'village']); //Simboro
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69935, 'regionable_type'=>'village']); //Kadaila
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69936, 'regionable_type'=>'village']); //Kambunong
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69937, 'regionable_type'=>'village']); //Karossa
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69938, 'regionable_type'=>'village']); //Kayucalla
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69939, 'regionable_type'=>'village']); //Lara
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69940, 'regionable_type'=>'village']); //Lara Iii
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69941, 'regionable_type'=>'village']); //Lembah Hopo
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69942, 'regionable_type'=>'village']); //Mora Benggaulu
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69943, 'regionable_type'=>'village']); //Mora Iv
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69944, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>69945, 'regionable_type'=>'village']); //Tasokko
                DB::table('regionables')->insert(['region_id'=>4783, 'regionable_id'=>70275, 'regionable_type'=>'village']); //Benggaulu
            DB::table('regions')->insert(['id'=>4784, 'parent'=>4781, 'code'=>'9157', 'type'=>'districts', 'name'=>'Districts 9157, City 915, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6092, 'regionable_type'=>'districts']); //Dapurang
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6093, 'regionable_type'=>'districts']); //Pasangkayu
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6094, 'regionable_type'=>'districts']); //Pedongga
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6095, 'regionable_type'=>'districts']); //Tikke Raya
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6096, 'regionable_type'=>'districts']); //Lariang
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6097, 'regionable_type'=>'districts']); //Baras
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6098, 'regionable_type'=>'districts']); //Bulu Taba
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6099, 'regionable_type'=>'districts']); //Sarudu
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6100, 'regionable_type'=>'districts']); //Duripoku
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6101, 'regionable_type'=>'districts']); //Bambaira
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6102, 'regionable_type'=>'districts']); //Bambalamotu
            DB::table('regionables')->insert(['region_id'=>4784, 'regionable_id'=>6103, 'regionable_type'=>'districts']); //Sarjo
                DB::table('regions')->insert(['id'=>4785, 'parent'=>4784, 'code'=>'91574', 'type'=>'village', 'name'=>'Village 91574, Districts 9157, City 915, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70324, 'regionable_type'=>'village']); //Bambaira
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70325, 'regionable_type'=>'village']); //Kalukunangka
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70326, 'regionable_type'=>'village']); //Kasoloang
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70327, 'regionable_type'=>'village']); //Tampaure
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70328, 'regionable_type'=>'village']); //Bambalamotu
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70329, 'regionable_type'=>'village']); //Kalola
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70330, 'regionable_type'=>'village']); //Pangiang
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70331, 'regionable_type'=>'village']); //Polewali
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70332, 'regionable_type'=>'village']); //Randomayang
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70333, 'regionable_type'=>'village']); //Wulai
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70334, 'regionable_type'=>'village']); //Letawa
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70335, 'regionable_type'=>'village']); //Maponu
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70336, 'regionable_type'=>'village']); //Sarjo
                DB::table('regionables')->insert(['region_id'=>4785, 'regionable_id'=>70337, 'regionable_type'=>'village']); //Sarude
        DB::table('regions')->insert(['id'=>4786, 'parent'=>4642, 'code'=>'963', 'type'=>'city', 'name'=>'City 963, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4786, 'regionable_id'=>368, 'regionable_type'=>'city']); //Polewali Mandar regencies
            DB::table('regions')->insert(['id'=>4787, 'parent'=>4786, 'code'=>'9636', 'type'=>'districts', 'name'=>'Districts 9636, City 963, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4787, 'regionable_id'=>6050, 'regionable_type'=>'districts']); //Alu (allu)
                DB::table('regions')->insert(['id'=>4788, 'parent'=>4787, 'code'=>'96365', 'type'=>'village', 'name'=>'Village 96365, Districts 9636, City 963, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4788, 'regionable_id'=>69893, 'regionable_type'=>'village']); //Alu (allu)
                DB::table('regionables')->insert(['region_id'=>4788, 'regionable_id'=>69894, 'regionable_type'=>'village']); //Kalumammang
                DB::table('regionables')->insert(['region_id'=>4788, 'regionable_id'=>69895, 'regionable_type'=>'village']); //Mombi
                DB::table('regionables')->insert(['region_id'=>4788, 'regionable_id'=>69896, 'regionable_type'=>'village']); //Pao Pao
                DB::table('regionables')->insert(['region_id'=>4788, 'regionable_id'=>69897, 'regionable_type'=>'village']); //Petoosang
                DB::table('regionables')->insert(['region_id'=>4788, 'regionable_id'=>69898, 'regionable_type'=>'village']); //Pupu Uring (puppuring)
                DB::table('regionables')->insert(['region_id'=>4788, 'regionable_id'=>69899, 'regionable_type'=>'village']); //Saragian
                DB::table('regionables')->insert(['region_id'=>4788, 'regionable_id'=>69900, 'regionable_type'=>'village']); //Sayoang

        //Sulawesi Selatan
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>28, 'regionable_type'=>'province']); //Sulawesi Selatan
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>373, 'regionable_type'=>'city']); //Makassar city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>374, 'regionable_type'=>'city']); //Gowa regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>375, 'regionable_type'=>'city']); //Bone regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>376, 'regionable_type'=>'city']); //Maros regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>377, 'regionable_type'=>'city']); //Pangkajene Kepulauan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>378, 'regionable_type'=>'city']); //Barru regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>379, 'regionable_type'=>'city']); //Soppeng regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>380, 'regionable_type'=>'city']); //Wajo regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>381, 'regionable_type'=>'city']); //Parepare city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>382, 'regionable_type'=>'city']); //Pinrang regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>383, 'regionable_type'=>'city']); //Sidenreng Rappang/rapang regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>384, 'regionable_type'=>'city']); //Sinjai regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>385, 'regionable_type'=>'city']); //Enrekang regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>386, 'regionable_type'=>'city']); //Tana Toraja regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>387, 'regionable_type'=>'city']); //Toraja Utara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>388, 'regionable_type'=>'city']); //Luwu Utara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>389, 'regionable_type'=>'city']); //Palopo city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>390, 'regionable_type'=>'city']); //Luwu regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>391, 'regionable_type'=>'city']); //Luwu Timur regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>392, 'regionable_type'=>'city']); //Takalar regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>393, 'regionable_type'=>'city']); //Jeneponto regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>394, 'regionable_type'=>'city']); //Bantaeng regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>395, 'regionable_type'=>'city']); //Bulukumba regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>396, 'regionable_type'=>'city']); //Selayar (kepulauan Selayar) regencies

        DB::table('regions')->insert(['id'=>4789, 'parent'=>4642, 'code'=>'901', 'type'=>'city', 'name'=>'City 901, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4789, 'regionable_id'=>373, 'regionable_type'=>'city']); //Makassar city
            DB::table('regions')->insert(['id'=>4790, 'parent'=>4789, 'code'=>'9011', 'type'=>'districts', 'name'=>'Districts 9011, City 901, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4790, 'regionable_id'=>6104, 'regionable_type'=>'districts']); //Ujung Pandang
                DB::table('regions')->insert(['id'=>4791, 'parent'=>4790, 'code'=>'90111', 'type'=>'village', 'name'=>'Village 90111, Districts 9011, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4791, 'regionable_id'=>70338, 'regionable_type'=>'village']); //Baru
                DB::table('regionables')->insert(['region_id'=>4791, 'regionable_id'=>70339, 'regionable_type'=>'village']); //Bulogading
                DB::table('regionables')->insert(['region_id'=>4791, 'regionable_id'=>70340, 'regionable_type'=>'village']); //Lae - Lae
                DB::table('regions')->insert(['id'=>4792, 'parent'=>4790, 'code'=>'90112', 'type'=>'village', 'name'=>'Village 90112, Districts 9011, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4792, 'regionable_id'=>70341, 'regionable_type'=>'village']); //Losari
                DB::table('regionables')->insert(['region_id'=>4792, 'regionable_id'=>70342, 'regionable_type'=>'village']); //Maloku
                DB::table('regions')->insert(['id'=>4793, 'parent'=>4790, 'code'=>'90113', 'type'=>'village', 'name'=>'Village 90113, Districts 9011, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4793, 'regionable_id'=>70343, 'regionable_type'=>'village']); //Mangkura
                DB::table('regionables')->insert(['region_id'=>4793, 'regionable_id'=>70344, 'regionable_type'=>'village']); //Sawerigading
                DB::table('regions')->insert(['id'=>4794, 'parent'=>4790, 'code'=>'90114', 'type'=>'village', 'name'=>'Village 90114, Districts 9011, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4794, 'regionable_id'=>70345, 'regionable_type'=>'village']); //Lajangiru
                DB::table('regionables')->insert(['region_id'=>4794, 'regionable_id'=>70346, 'regionable_type'=>'village']); //Pisang Selatan
                DB::table('regions')->insert(['id'=>4795, 'parent'=>4790, 'code'=>'90115', 'type'=>'village', 'name'=>'Village 90115, Districts 9011, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4795, 'regionable_id'=>70347, 'regionable_type'=>'village']); //Pisang Utara
            DB::table('regions')->insert(['id'=>4796, 'parent'=>4789, 'code'=>'9012', 'type'=>'districts', 'name'=>'Districts 9012, City 901, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4796, 'regionable_id'=>6105, 'regionable_type'=>'districts']); //Mariso
                DB::table('regions')->insert(['id'=>4797, 'parent'=>4796, 'code'=>'90121', 'type'=>'village', 'name'=>'Village 90121, Districts 9012, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4797, 'regionable_id'=>70348, 'regionable_type'=>'village']); //Kampung Buyang
                DB::table('regionables')->insert(['region_id'=>4797, 'regionable_id'=>70349, 'regionable_type'=>'village']); //Mattoangin
                DB::table('regionables')->insert(['region_id'=>4797, 'regionable_id'=>70350, 'regionable_type'=>'village']); //Panambungan
                DB::table('regions')->insert(['id'=>4798, 'parent'=>4796, 'code'=>'90122', 'type'=>'village', 'name'=>'Village 90122, Districts 9012, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4798, 'regionable_id'=>70351, 'regionable_type'=>'village']); //Mariso
                DB::table('regions')->insert(['id'=>4799, 'parent'=>4796, 'code'=>'90123', 'type'=>'village', 'name'=>'Village 90123, Districts 9012, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4799, 'regionable_id'=>70352, 'regionable_type'=>'village']); //Lette
                DB::table('regions')->insert(['id'=>4800, 'parent'=>4796, 'code'=>'90125', 'type'=>'village', 'name'=>'Village 90125, Districts 9012, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4800, 'regionable_id'=>70353, 'regionable_type'=>'village']); //Kunjung Mae
                DB::table('regionables')->insert(['region_id'=>4800, 'regionable_id'=>70354, 'regionable_type'=>'village']); //Mario
                DB::table('regions')->insert(['id'=>4801, 'parent'=>4796, 'code'=>'90126', 'type'=>'village', 'name'=>'Village 90126, Districts 9012, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4801, 'regionable_id'=>70355, 'regionable_type'=>'village']); //Bontorannu
                DB::table('regionables')->insert(['region_id'=>4801, 'regionable_id'=>70356, 'regionable_type'=>'village']); //Tamarunang
            DB::table('regions')->insert(['id'=>4802, 'parent'=>4789, 'code'=>'9013', 'type'=>'districts', 'name'=>'Districts 9013, City 901, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4802, 'regionable_id'=>6106, 'regionable_type'=>'districts']); //Mamajang
                DB::table('regions')->insert(['id'=>4803, 'parent'=>4802, 'code'=>'90131', 'type'=>'village', 'name'=>'Village 90131, Districts 9013, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4803, 'regionable_id'=>70357, 'regionable_type'=>'village']); //Baji Mappakasunggu
                DB::table('regionables')->insert(['region_id'=>4803, 'regionable_id'=>70358, 'regionable_type'=>'village']); //Maricaya Selatan
                DB::table('regionables')->insert(['region_id'=>4803, 'regionable_id'=>70359, 'regionable_type'=>'village']); //Pa Batang
                DB::table('regions')->insert(['id'=>4804, 'parent'=>4802, 'code'=>'90132', 'type'=>'village', 'name'=>'Village 90132, Districts 9013, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4804, 'regionable_id'=>70360, 'regionable_type'=>'village']); //Bonto Biraeng
                DB::table('regionables')->insert(['region_id'=>4804, 'regionable_id'=>70361, 'regionable_type'=>'village']); //Labuang Baji
                DB::table('regionables')->insert(['region_id'=>4804, 'regionable_id'=>70362, 'regionable_type'=>'village']); //Mamajang Luar
                DB::table('regions')->insert(['id'=>4805, 'parent'=>4802, 'code'=>'90133', 'type'=>'village', 'name'=>'Village 90133, Districts 9013, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4805, 'regionable_id'=>70363, 'regionable_type'=>'village']); //Bonto Lebang
                DB::table('regionables')->insert(['region_id'=>4805, 'regionable_id'=>70364, 'regionable_type'=>'village']); //Parang
                DB::table('regions')->insert(['id'=>4806, 'parent'=>4802, 'code'=>'90134', 'type'=>'village', 'name'=>'Village 90134, Districts 9013, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4806, 'regionable_id'=>70365, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>4806, 'regionable_id'=>70366, 'regionable_type'=>'village']); //Sambung Jawa
                DB::table('regionables')->insert(['region_id'=>4806, 'regionable_id'=>70367, 'regionable_type'=>'village']); //Tamparang Keke
                DB::table('regions')->insert(['id'=>4807, 'parent'=>4802, 'code'=>'90135', 'type'=>'village', 'name'=>'Village 90135, Districts 9013, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4807, 'regionable_id'=>70368, 'regionable_type'=>'village']); //Mamajang Dalam
                DB::table('regionables')->insert(['region_id'=>4807, 'regionable_id'=>70369, 'regionable_type'=>'village']); //Mandala
            DB::table('regions')->insert(['id'=>4808, 'parent'=>4789, 'code'=>'9014', 'type'=>'districts', 'name'=>'Districts 9014, City 901, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4808, 'regionable_id'=>6107, 'regionable_type'=>'districts']); //Makassar
                DB::table('regions')->insert(['id'=>4809, 'parent'=>4808, 'code'=>'90141', 'type'=>'village', 'name'=>'Village 90141, Districts 9014, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4809, 'regionable_id'=>70370, 'regionable_type'=>'village']); //Lariang Bangi
                DB::table('regionables')->insert(['region_id'=>4809, 'regionable_id'=>70371, 'regionable_type'=>'village']); //Maradekaya
                DB::table('regionables')->insert(['region_id'=>4809, 'regionable_id'=>70372, 'regionable_type'=>'village']); //Maradekaya Selatan
                DB::table('regionables')->insert(['region_id'=>4809, 'regionable_id'=>70373, 'regionable_type'=>'village']); //Maradekaya Utara
                DB::table('regions')->insert(['id'=>4810, 'parent'=>4808, 'code'=>'90142', 'type'=>'village', 'name'=>'Village 90142, Districts 9014, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4810, 'regionable_id'=>70374, 'regionable_type'=>'village']); //Maricaya
                DB::table('regionables')->insert(['region_id'=>4810, 'regionable_id'=>70375, 'regionable_type'=>'village']); //Maricaya Baru
                DB::table('regions')->insert(['id'=>4811, 'parent'=>4808, 'code'=>'90143', 'type'=>'village', 'name'=>'Village 90143, Districts 9014, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4811, 'regionable_id'=>70376, 'regionable_type'=>'village']); //Bara-baraya
                DB::table('regionables')->insert(['region_id'=>4811, 'regionable_id'=>70377, 'regionable_type'=>'village']); //Bara-baraya Selatan
                DB::table('regionables')->insert(['region_id'=>4811, 'regionable_id'=>70378, 'regionable_type'=>'village']); //Bara-baraya Timur
                DB::table('regionables')->insert(['region_id'=>4811, 'regionable_id'=>70379, 'regionable_type'=>'village']); //Bara-baraya Utara
                DB::table('regions')->insert(['id'=>4812, 'parent'=>4808, 'code'=>'90144', 'type'=>'village', 'name'=>'Village 90144, Districts 9014, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4812, 'regionable_id'=>70380, 'regionable_type'=>'village']); //Maccini
                DB::table('regionables')->insert(['region_id'=>4812, 'regionable_id'=>70381, 'regionable_type'=>'village']); //Maccini Gusung
                DB::table('regionables')->insert(['region_id'=>4812, 'regionable_id'=>70382, 'regionable_type'=>'village']); //Maccini Parang
                DB::table('regions')->insert(['id'=>4813, 'parent'=>4808, 'code'=>'90145', 'type'=>'village', 'name'=>'Village 90145, Districts 9014, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4813, 'regionable_id'=>70383, 'regionable_type'=>'village']); //Barana
            DB::table('regions')->insert(['id'=>4814, 'parent'=>4789, 'code'=>'9015', 'type'=>'districts', 'name'=>'Districts 9015, City 901, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4814, 'regionable_id'=>6108, 'regionable_type'=>'districts']); //Bontoala
                DB::table('regions')->insert(['id'=>4815, 'parent'=>4814, 'code'=>'90151', 'type'=>'village', 'name'=>'Village 90151, Districts 9015, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4815, 'regionable_id'=>70384, 'regionable_type'=>'village']); //Timungan Lompoa
                DB::table('regionables')->insert(['region_id'=>4815, 'regionable_id'=>70385, 'regionable_type'=>'village']); //Tompo Balang
                DB::table('regionables')->insert(['region_id'=>4815, 'regionable_id'=>70386, 'regionable_type'=>'village']); //Wajo Baru
                DB::table('regions')->insert(['id'=>4816, 'parent'=>4814, 'code'=>'90152', 'type'=>'village', 'name'=>'Village 90152, Districts 9015, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4816, 'regionable_id'=>70387, 'regionable_type'=>'village']); //Malimongan Baru
                DB::table('regions')->insert(['id'=>4817, 'parent'=>4814, 'code'=>'90153', 'type'=>'village', 'name'=>'Village 90153, Districts 9015, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4817, 'regionable_id'=>70388, 'regionable_type'=>'village']); //Baraya
                DB::table('regions')->insert(['id'=>4818, 'parent'=>4814, 'code'=>'90154', 'type'=>'village', 'name'=>'Village 90154, Districts 9015, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4818, 'regionable_id'=>70389, 'regionable_type'=>'village']); //Bunga Ejaya
                DB::table('regionables')->insert(['region_id'=>4818, 'regionable_id'=>70390, 'regionable_type'=>'village']); //Layang
                DB::table('regions')->insert(['id'=>4819, 'parent'=>4814, 'code'=>'90155', 'type'=>'village', 'name'=>'Village 90155, Districts 9015, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4819, 'regionable_id'=>70391, 'regionable_type'=>'village']); //Parang Layang
                DB::table('regions')->insert(['id'=>4820, 'parent'=>4814, 'code'=>'90156', 'type'=>'village', 'name'=>'Village 90156, Districts 9015, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4820, 'regionable_id'=>70392, 'regionable_type'=>'village']); //Bontoala
                DB::table('regionables')->insert(['region_id'=>4820, 'regionable_id'=>70393, 'regionable_type'=>'village']); //Bontoala Tua
                DB::table('regions')->insert(['id'=>4821, 'parent'=>4814, 'code'=>'90157', 'type'=>'village', 'name'=>'Village 90157, Districts 9015, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4821, 'regionable_id'=>70394, 'regionable_type'=>'village']); //Bontoala Parang
                DB::table('regionables')->insert(['region_id'=>4821, 'regionable_id'=>70395, 'regionable_type'=>'village']); //Gaddong
            DB::table('regions')->insert(['id'=>4822, 'parent'=>4789, 'code'=>'9016', 'type'=>'districts', 'name'=>'Districts 9016, City 901, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4822, 'regionable_id'=>6109, 'regionable_type'=>'districts']); //Ujung Tanah
                DB::table('regions')->insert(['id'=>4823, 'parent'=>4822, 'code'=>'90161', 'type'=>'village', 'name'=>'Village 90161, Districts 9016, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4823, 'regionable_id'=>70396, 'regionable_type'=>'village']); //Pattingalloang
                DB::table('regionables')->insert(['region_id'=>4823, 'regionable_id'=>70397, 'regionable_type'=>'village']); //Pattingalloang Baru
                DB::table('regions')->insert(['id'=>4824, 'parent'=>4822, 'code'=>'90162', 'type'=>'village', 'name'=>'Village 90162, Districts 9016, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4824, 'regionable_id'=>70398, 'regionable_type'=>'village']); //Camba Berua
                DB::table('regionables')->insert(['region_id'=>4824, 'regionable_id'=>70399, 'regionable_type'=>'village']); //Cambaya
                DB::table('regions')->insert(['id'=>4825, 'parent'=>4822, 'code'=>'90163', 'type'=>'village', 'name'=>'Village 90163, Districts 9016, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4825, 'regionable_id'=>70400, 'regionable_type'=>'village']); //Gusung
                DB::table('regions')->insert(['id'=>4826, 'parent'=>4822, 'code'=>'90164', 'type'=>'village', 'name'=>'Village 90164, Districts 9016, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4826, 'regionable_id'=>70401, 'regionable_type'=>'village']); //Tamalabba
                DB::table('regionables')->insert(['region_id'=>4826, 'regionable_id'=>70402, 'regionable_type'=>'village']); //Ujung Tanah
                DB::table('regions')->insert(['id'=>4827, 'parent'=>4822, 'code'=>'90165', 'type'=>'village', 'name'=>'Village 90165, Districts 9016, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4827, 'regionable_id'=>70403, 'regionable_type'=>'village']); //Tabaringan
                DB::table('regionables')->insert(['region_id'=>4827, 'regionable_id'=>70404, 'regionable_type'=>'village']); //Totaka
                DB::table('regions')->insert(['id'=>4828, 'parent'=>4822, 'code'=>'90166', 'type'=>'village', 'name'=>'Village 90166, Districts 9016, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4828, 'regionable_id'=>70405, 'regionable_type'=>'village']); //Barrang Lompo
                DB::table('regions')->insert(['id'=>4829, 'parent'=>4822, 'code'=>'90167', 'type'=>'village', 'name'=>'Village 90167, Districts 9016, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4829, 'regionable_id'=>70406, 'regionable_type'=>'village']); //Barrang Caddi
                DB::table('regions')->insert(['id'=>4830, 'parent'=>4822, 'code'=>'90168', 'type'=>'village', 'name'=>'Village 90168, Districts 9016, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4830, 'regionable_id'=>70407, 'regionable_type'=>'village']); //Kodingareng
            DB::table('regions')->insert(['id'=>4831, 'parent'=>4789, 'code'=>'9017', 'type'=>'districts', 'name'=>'Districts 9017, City 901, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4831, 'regionable_id'=>6110, 'regionable_type'=>'districts']); //Wajo
                DB::table('regions')->insert(['id'=>4832, 'parent'=>4831, 'code'=>'90171', 'type'=>'village', 'name'=>'Village 90171, Districts 9017, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4832, 'regionable_id'=>70408, 'regionable_type'=>'village']); //Melayu
                DB::table('regionables')->insert(['region_id'=>4832, 'regionable_id'=>70409, 'regionable_type'=>'village']); //Melayu Baru
                DB::table('regions')->insert(['id'=>4833, 'parent'=>4831, 'code'=>'90172', 'type'=>'village', 'name'=>'Village 90172, Districts 9017, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4833, 'regionable_id'=>70410, 'regionable_type'=>'village']); //Malimongan
                DB::table('regionables')->insert(['region_id'=>4833, 'regionable_id'=>70411, 'regionable_type'=>'village']); //Malimongan Tua
                DB::table('regions')->insert(['id'=>4834, 'parent'=>4831, 'code'=>'90173', 'type'=>'village', 'name'=>'Village 90173, Districts 9017, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4834, 'regionable_id'=>70412, 'regionable_type'=>'village']); //Butung
                DB::table('regionables')->insert(['region_id'=>4834, 'regionable_id'=>70413, 'regionable_type'=>'village']); //Mampu
                DB::table('regions')->insert(['id'=>4835, 'parent'=>4831, 'code'=>'90174', 'type'=>'village', 'name'=>'Village 90174, Districts 9017, City 901, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4835, 'regionable_id'=>70414, 'regionable_type'=>'village']); //Ende
                DB::table('regionables')->insert(['region_id'=>4835, 'regionable_id'=>70415, 'regionable_type'=>'village']); //Pattunuang
        DB::table('regions')->insert(['id'=>4836, 'parent'=>4642, 'code'=>'902', 'type'=>'city', 'name'=>'City 902, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4836, 'regionable_id'=>373, 'regionable_type'=>'city']); //Makassar city
        DB::table('regionables')->insert(['region_id'=>4836, 'regionable_id'=>374, 'regionable_type'=>'city']); //Gowa regencies
        DB::table('regionables')->insert(['region_id'=>4836, 'regionable_id'=>375, 'regionable_type'=>'city']); //Bone regencies
            DB::table('regions')->insert(['id'=>4837, 'parent'=>4836, 'code'=>'9022', 'type'=>'districts', 'name'=>'Districts 9022, City 902, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4837, 'regionable_id'=>6112, 'regionable_type'=>'districts']); //Rappocini
            DB::table('regionables')->insert(['region_id'=>4837, 'regionable_id'=>6113, 'regionable_type'=>'districts']); //Tamalate
            DB::table('regionables')->insert(['region_id'=>4837, 'regionable_id'=>6118, 'regionable_type'=>'districts']); //Barombong
            DB::table('regionables')->insert(['region_id'=>4837, 'regionable_id'=>6136, 'regionable_type'=>'districts']); //Barebbo
                DB::table('regions')->insert(['id'=>4838, 'parent'=>4837, 'code'=>'90225', 'type'=>'village', 'name'=>'Village 90225, Districts 9022, City 902, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70449, 'regionable_type'=>'village']); //Barombong
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70450, 'regionable_type'=>'village']); //Tanjung Merdeka
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70481, 'regionable_type'=>'village']); //Benteng Somba Opu
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70482, 'regionable_type'=>'village']); //Biringngalla
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70483, 'regionable_type'=>'village']); //Kanjilo
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70484, 'regionable_type'=>'village']); //Lembangparang
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70485, 'regionable_type'=>'village']); //Moncobalang
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70486, 'regionable_type'=>'village']); //Tamannyeleng
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70487, 'regionable_type'=>'village']); //Tinggimae
                DB::table('regionables')->insert(['region_id'=>4838, 'regionable_id'=>70648, 'regionable_type'=>'village']); //Kading
        DB::table('regions')->insert(['id'=>4839, 'parent'=>4642, 'code'=>'905', 'type'=>'city', 'name'=>'City 905, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4839, 'regionable_id'=>376, 'regionable_type'=>'city']); //Maros regencies
        DB::table('regionables')->insert(['region_id'=>4839, 'regionable_id'=>377, 'regionable_type'=>'city']); //Pangkajene Kepulauan regencies
            DB::table('regions')->insert(['id'=>4840, 'parent'=>4839, 'code'=>'9056', 'type'=>'districts', 'name'=>'Districts 9056, City 905, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4840, 'regionable_id'=>6170, 'regionable_type'=>'districts']); //Bantimurung
            DB::table('regionables')->insert(['region_id'=>4840, 'regionable_id'=>6171, 'regionable_type'=>'districts']); //Tompu Bulu
            DB::table('regionables')->insert(['region_id'=>4840, 'regionable_id'=>6172, 'regionable_type'=>'districts']); //Simbang
            DB::table('regionables')->insert(['region_id'=>4840, 'regionable_id'=>6173, 'regionable_type'=>'districts']); //Camba
            DB::table('regionables')->insert(['region_id'=>4840, 'regionable_id'=>6174, 'regionable_type'=>'districts']); //Moncongloe
            DB::table('regionables')->insert(['region_id'=>4840, 'regionable_id'=>6175, 'regionable_type'=>'districts']); //Mallawa
            DB::table('regionables')->insert(['region_id'=>4840, 'regionable_id'=>6177, 'regionable_type'=>'districts']); //Tondong Tallasa
                DB::table('regions')->insert(['id'=>4841, 'parent'=>4840, 'code'=>'90561', 'type'=>'village', 'name'=>'Village 90561, Districts 9056, City 905, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71070, 'regionable_type'=>'village']); //Alatengae
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71071, 'regionable_type'=>'village']); //Baruga
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71072, 'regionable_type'=>'village']); //Kalabbirang
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71073, 'regionable_type'=>'village']); //Leang-leang
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71074, 'regionable_type'=>'village']); //Mangeloreng
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71075, 'regionable_type'=>'village']); //Mattoangin
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71076, 'regionable_type'=>'village']); //Minasa Baji
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71077, 'regionable_type'=>'village']); //Tukamasea
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71078, 'regionable_type'=>'village']); //Benteng Gajah
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71079, 'regionable_type'=>'village']); //Bonto Manai
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71080, 'regionable_type'=>'village']); //Bonto Manurung
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71081, 'regionable_type'=>'village']); //Bonto Somba
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71082, 'regionable_type'=>'village']); //Bontomatinggi
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71083, 'regionable_type'=>'village']); //Pucak
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71084, 'regionable_type'=>'village']); //Toddolimae
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71085, 'regionable_type'=>'village']); //Tompo Bulu
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71086, 'regionable_type'=>'village']); //Bonto Tallasa
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71087, 'regionable_type'=>'village']); //Jenetaesa
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71088, 'regionable_type'=>'village']); //Samangki
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71089, 'regionable_type'=>'village']); //Sambueja
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71090, 'regionable_type'=>'village']); //Simbang
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71091, 'regionable_type'=>'village']); //Tanete
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71123, 'regionable_type'=>'village']); //Bantimurung
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71124, 'regionable_type'=>'village']); //Bonto Birao
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71125, 'regionable_type'=>'village']); //Bulu Tellue
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71126, 'regionable_type'=>'village']); //Lanne
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71127, 'regionable_type'=>'village']); //Malaka
                DB::table('regionables')->insert(['region_id'=>4841, 'regionable_id'=>71128, 'regionable_type'=>'village']); //Tondongkura
        DB::table('regions')->insert(['id'=>4842, 'parent'=>4642, 'code'=>'906', 'type'=>'city', 'name'=>'City 906, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4842, 'regionable_id'=>377, 'regionable_type'=>'city']); //Pangkajene Kepulauan regencies
            DB::table('regions')->insert(['id'=>4843, 'parent'=>4842, 'code'=>'9061', 'type'=>'districts', 'name'=>'Districts 9061, City 906, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4843, 'regionable_id'=>6178, 'regionable_type'=>'districts']); //Pangkajene
            DB::table('regionables')->insert(['region_id'=>4843, 'regionable_id'=>6179, 'regionable_type'=>'districts']); //Minasa Tene
                DB::table('regions')->insert(['id'=>4844, 'parent'=>4843, 'code'=>'90614', 'type'=>'village', 'name'=>'Village 90614, Districts 9061, City 906, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4844, 'regionable_id'=>71138, 'regionable_type'=>'village']); //Biraeng
                DB::table('regionables')->insert(['region_id'=>4844, 'regionable_id'=>71139, 'regionable_type'=>'village']); //Bontokio
                DB::table('regions')->insert(['id'=>4845, 'parent'=>4843, 'code'=>'90615', 'type'=>'village', 'name'=>'Village 90615, Districts 9061, City 906, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4845, 'regionable_id'=>71140, 'regionable_type'=>'village']); //Bontoa
                DB::table('regionables')->insert(['region_id'=>4845, 'regionable_id'=>71141, 'regionable_type'=>'village']); //Kalabbirang
                DB::table('regionables')->insert(['region_id'=>4845, 'regionable_id'=>71142, 'regionable_type'=>'village']); //Minasa Tene
                DB::table('regions')->insert(['id'=>4846, 'parent'=>4843, 'code'=>'90618', 'type'=>'village', 'name'=>'Village 90618, Districts 9061, City 906, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4846, 'regionable_id'=>71143, 'regionable_type'=>'village']); //Bonto Langkasa
                DB::table('regions')->insert(['id'=>4847, 'parent'=>4843, 'code'=>'90619', 'type'=>'village', 'name'=>'Village 90619, Districts 9061, City 906, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4847, 'regionable_id'=>71144, 'regionable_type'=>'village']); //Kabba
                DB::table('regionables')->insert(['region_id'=>4847, 'regionable_id'=>71145, 'regionable_type'=>'village']); //Panaikang
            DB::table('regions')->insert(['id'=>4848, 'parent'=>4842, 'code'=>'9065', 'type'=>'districts', 'name'=>'Districts 9065, City 906, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4848, 'regionable_id'=>6180, 'regionable_type'=>'districts']); //Bungoro
            DB::table('regionables')->insert(['region_id'=>4848, 'regionable_id'=>6181, 'regionable_type'=>'districts']); //Labakkang
            DB::table('regionables')->insert(['region_id'=>4848, 'regionable_id'=>6182, 'regionable_type'=>'districts']); //Marang (ma Rang)
            DB::table('regionables')->insert(['region_id'=>4848, 'regionable_id'=>6183, 'regionable_type'=>'districts']); //Segeri
            DB::table('regionables')->insert(['region_id'=>4848, 'regionable_id'=>6184, 'regionable_type'=>'districts']); //Mandalle
                DB::table('regions')->insert(['id'=>4849, 'parent'=>4848, 'code'=>'90655', 'type'=>'village', 'name'=>'Village 90655, Districts 9065, City 906, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71177, 'regionable_type'=>'village']); //Baring
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71178, 'regionable_type'=>'village']); //Bawasalo
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71179, 'regionable_type'=>'village']); //Bone
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71180, 'regionable_type'=>'village']); //Bonto Matene
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71181, 'regionable_type'=>'village']); //Parenreng
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71182, 'regionable_type'=>'village']); //Segeri
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71183, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71184, 'regionable_type'=>'village']); //Boddie
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71185, 'regionable_type'=>'village']); //Coppo Tompong
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71186, 'regionable_type'=>'village']); //Mandalle
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71187, 'regionable_type'=>'village']); //Manggalung
                DB::table('regionables')->insert(['region_id'=>4849, 'regionable_id'=>71188, 'regionable_type'=>'village']); //Tamarupa
            DB::table('regions')->insert(['id'=>4850, 'parent'=>4842, 'code'=>'9066', 'type'=>'districts', 'name'=>'Districts 9066, City 906, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4850, 'regionable_id'=>6185, 'regionable_type'=>'districts']); //Balocci
                DB::table('regions')->insert(['id'=>4851, 'parent'=>4850, 'code'=>'90661', 'type'=>'village', 'name'=>'Village 90661, Districts 9066, City 906, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4851, 'regionable_id'=>71189, 'regionable_type'=>'village']); //Balleangin
                DB::table('regionables')->insert(['region_id'=>4851, 'regionable_id'=>71190, 'regionable_type'=>'village']); //Balocci Baru
                DB::table('regionables')->insert(['region_id'=>4851, 'regionable_id'=>71191, 'regionable_type'=>'village']); //Kassi
                DB::table('regionables')->insert(['region_id'=>4851, 'regionable_id'=>71192, 'regionable_type'=>'village']); //Tompo Bulu
                DB::table('regionables')->insert(['region_id'=>4851, 'regionable_id'=>71193, 'regionable_type'=>'village']); //Tonasa
            DB::table('regions')->insert(['id'=>4852, 'parent'=>4842, 'code'=>'9067', 'type'=>'districts', 'name'=>'Districts 9067, City 906, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4852, 'regionable_id'=>6186, 'regionable_type'=>'districts']); //Liukang Tupabbiring
            DB::table('regionables')->insert(['region_id'=>4852, 'regionable_id'=>6187, 'regionable_type'=>'districts']); //Liukang Tupabbiring Utara
            DB::table('regionables')->insert(['region_id'=>4852, 'regionable_id'=>6188, 'regionable_type'=>'districts']); //Liukang Kalmas (kalukuang Masalima)
            DB::table('regionables')->insert(['region_id'=>4852, 'regionable_id'=>6189, 'regionable_type'=>'districts']); //Liukang Tangaya
                DB::table('regions')->insert(['id'=>4853, 'parent'=>4852, 'code'=>'90673', 'type'=>'village', 'name'=>'Village 90673, Districts 9067, City 906, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71217, 'regionable_type'=>'village']); //Balo Baloang
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71218, 'regionable_type'=>'village']); //Kapoposan Bali
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71219, 'regionable_type'=>'village']); //Poleonro
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71220, 'regionable_type'=>'village']); //Sabalana
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71221, 'regionable_type'=>'village']); //Sabaru
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71222, 'regionable_type'=>'village']); //Sailus
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71223, 'regionable_type'=>'village']); //Sapuka
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71224, 'regionable_type'=>'village']); //Satanger
                DB::table('regionables')->insert(['region_id'=>4853, 'regionable_id'=>71225, 'regionable_type'=>'village']); //Tampaang
        DB::table('regions')->insert(['id'=>4854, 'parent'=>4642, 'code'=>'907', 'type'=>'city', 'name'=>'City 907, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4854, 'regionable_id'=>378, 'regionable_type'=>'city']); //Barru regencies
            DB::table('regions')->insert(['id'=>4855, 'parent'=>4854, 'code'=>'9071', 'type'=>'districts', 'name'=>'Districts 9071, City 907, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4855, 'regionable_id'=>6190, 'regionable_type'=>'districts']); //Barru
            DB::table('regionables')->insert(['region_id'=>4855, 'regionable_id'=>6191, 'regionable_type'=>'districts']); //Tanete Rilau
            DB::table('regionables')->insert(['region_id'=>4855, 'regionable_id'=>6192, 'regionable_type'=>'districts']); //Mallusetasi
                DB::table('regions')->insert(['id'=>4856, 'parent'=>4855, 'code'=>'90711', 'type'=>'village', 'name'=>'Village 90711, Districts 9071, City 907, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4856, 'regionable_id'=>71226, 'regionable_type'=>'village']); //Coppo
                DB::table('regionables')->insert(['region_id'=>4856, 'regionable_id'=>71227, 'regionable_type'=>'village']); //Galung
                DB::table('regionables')->insert(['region_id'=>4856, 'regionable_id'=>71228, 'regionable_type'=>'village']); //Palakka
                DB::table('regionables')->insert(['region_id'=>4856, 'regionable_id'=>71229, 'regionable_type'=>'village']); //Sepee
                DB::table('regionables')->insert(['region_id'=>4856, 'regionable_id'=>71230, 'regionable_type'=>'village']); //Tompo
                DB::table('regionables')->insert(['region_id'=>4856, 'regionable_id'=>71231, 'regionable_type'=>'village']); //Tuwung
                DB::table('regionables')->insert(['region_id'=>4856, 'regionable_id'=>71236, 'regionable_type'=>'village']); //Garessi
                DB::table('regionables')->insert(['region_id'=>4856, 'regionable_id'=>71246, 'regionable_type'=>'village']); //Mallawa
            DB::table('regions')->insert(['id'=>4857, 'parent'=>4854, 'code'=>'9075', 'type'=>'districts', 'name'=>'Districts 9075, City 907, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4857, 'regionable_id'=>6192, 'regionable_type'=>'districts']); //Mallusetasi
            DB::table('regionables')->insert(['region_id'=>4857, 'regionable_id'=>6193, 'regionable_type'=>'districts']); //Soppeng Riaja
                DB::table('regions')->insert(['id'=>4858, 'parent'=>4857, 'code'=>'90752', 'type'=>'village', 'name'=>'Village 90752, Districts 9075, City 907, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4858, 'regionable_id'=>71254, 'regionable_type'=>'village']); //Ajakkang
                DB::table('regionables')->insert(['region_id'=>4858, 'regionable_id'=>71255, 'regionable_type'=>'village']); //Batupute
                DB::table('regionables')->insert(['region_id'=>4858, 'regionable_id'=>71256, 'regionable_type'=>'village']); //Kiru-kiru
                DB::table('regionables')->insert(['region_id'=>4858, 'regionable_id'=>71257, 'regionable_type'=>'village']); //Lawallu
                DB::table('regionables')->insert(['region_id'=>4858, 'regionable_id'=>71258, 'regionable_type'=>'village']); //Mangkoso
                DB::table('regionables')->insert(['region_id'=>4858, 'regionable_id'=>71259, 'regionable_type'=>'village']); //Paccekke
                DB::table('regionables')->insert(['region_id'=>4858, 'regionable_id'=>71260, 'regionable_type'=>'village']); //Siddo
            DB::table('regions')->insert(['id'=>4859, 'parent'=>4854, 'code'=>'9076', 'type'=>'districts', 'name'=>'Districts 9076, City 907, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4859, 'regionable_id'=>6191, 'regionable_type'=>'districts']); //Tanete Rilau
            DB::table('regionables')->insert(['region_id'=>4859, 'regionable_id'=>6194, 'regionable_type'=>'districts']); //Pujananting
            DB::table('regionables')->insert(['region_id'=>4859, 'regionable_id'=>6195, 'regionable_type'=>'districts']); //Balusu
            DB::table('regionables')->insert(['region_id'=>4859, 'regionable_id'=>6196, 'regionable_type'=>'districts']); //Tanete Riaja
                DB::table('regions')->insert(['id'=>4860, 'parent'=>4859, 'code'=>'90762', 'type'=>'village', 'name'=>'Village 90762, Districts 9076, City 907, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71261, 'regionable_type'=>'village']); //Bacu-bacu
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71262, 'regionable_type'=>'village']); //Bulo-bulo
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71263, 'regionable_type'=>'village']); //Gattareng
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71264, 'regionable_type'=>'village']); //Jangan-jangan
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71265, 'regionable_type'=>'village']); //Mattappawalie
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71266, 'regionable_type'=>'village']); //Pattappa
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71267, 'regionable_type'=>'village']); //Pujananting
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71268, 'regionable_type'=>'village']); //Balusu
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71269, 'regionable_type'=>'village']); //Binuang
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71270, 'regionable_type'=>'village']); //Kamiri
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71271, 'regionable_type'=>'village']); //Lampoko
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71272, 'regionable_type'=>'village']); //Madello
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71273, 'regionable_type'=>'village']); //Takkalasi
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71274, 'regionable_type'=>'village']); //Harapan
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71275, 'regionable_type'=>'village']); //Kading
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71276, 'regionable_type'=>'village']); //Lempang
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71277, 'regionable_type'=>'village']); //Libureng
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71278, 'regionable_type'=>'village']); //Lompo Riaja
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71279, 'regionable_type'=>'village']); //Lompo Tengah
                DB::table('regionables')->insert(['region_id'=>4860, 'regionable_id'=>71280, 'regionable_type'=>'village']); //Mattirowalie
        DB::table('regions')->insert(['id'=>4861, 'parent'=>4642, 'code'=>'908', 'type'=>'city', 'name'=>'City 908, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4861, 'regionable_id'=>379, 'regionable_type'=>'city']); //Soppeng regencies
            DB::table('regions')->insert(['id'=>4862, 'parent'=>4861, 'code'=>'9081', 'type'=>'districts', 'name'=>'Districts 9081, City 908, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4862, 'regionable_id'=>6197, 'regionable_type'=>'districts']); //Lalabata
                DB::table('regions')->insert(['id'=>4863, 'parent'=>4862, 'code'=>'90811', 'type'=>'village', 'name'=>'Village 90811, Districts 9081, City 908, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4863, 'regionable_id'=>71281, 'regionable_type'=>'village']); //Botto
                DB::table('regionables')->insert(['region_id'=>4863, 'regionable_id'=>71282, 'regionable_type'=>'village']); //Lapajung
                DB::table('regionables')->insert(['region_id'=>4863, 'regionable_id'=>71283, 'regionable_type'=>'village']); //Lemba
                DB::table('regionables')->insert(['region_id'=>4863, 'regionable_id'=>71284, 'regionable_type'=>'village']); //Mattabulu
                DB::table('regionables')->insert(['region_id'=>4863, 'regionable_id'=>71285, 'regionable_type'=>'village']); //Umpungeng
                DB::table('regions')->insert(['id'=>4864, 'parent'=>4862, 'code'=>'90812', 'type'=>'village', 'name'=>'Village 90812, Districts 9081, City 908, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4864, 'regionable_id'=>71286, 'regionable_type'=>'village']); //Lalabata Rilau
                DB::table('regions')->insert(['id'=>4865, 'parent'=>4862, 'code'=>'90813', 'type'=>'village', 'name'=>'Village 90813, Districts 9081, City 908, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4865, 'regionable_id'=>71287, 'regionable_type'=>'village']); //Ompo
                DB::table('regions')->insert(['id'=>4866, 'parent'=>4862, 'code'=>'90814', 'type'=>'village', 'name'=>'Village 90814, Districts 9081, City 908, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4866, 'regionable_id'=>71288, 'regionable_type'=>'village']); //Bila
                DB::table('regionables')->insert(['region_id'=>4866, 'regionable_id'=>71289, 'regionable_type'=>'village']); //Maccile
                DB::table('regionables')->insert(['region_id'=>4866, 'regionable_id'=>71290, 'regionable_type'=>'village']); //Salo Karaja
            DB::table('regions')->insert(['id'=>4867, 'parent'=>4861, 'code'=>'9085', 'type'=>'districts', 'name'=>'Districts 9085, City 908, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4867, 'regionable_id'=>6198, 'regionable_type'=>'districts']); //Mario Riawa
            DB::table('regionables')->insert(['region_id'=>4867, 'regionable_id'=>6199, 'regionable_type'=>'districts']); //Donri-donri
                DB::table('regions')->insert(['id'=>4868, 'parent'=>4867, 'code'=>'90853', 'type'=>'village', 'name'=>'Village 90853, Districts 9085, City 908, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71301, 'regionable_type'=>'village']); //Donri-donri
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71302, 'regionable_type'=>'village']); //Kessing
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71303, 'regionable_type'=>'village']); //Labokong
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71304, 'regionable_type'=>'village']); //Lalabata Riaja
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71305, 'regionable_type'=>'village']); //Leworeng
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71306, 'regionable_type'=>'village']); //Pesse
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71307, 'regionable_type'=>'village']); //Pising (solie)
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71308, 'regionable_type'=>'village']); //Sering
                DB::table('regionables')->insert(['region_id'=>4868, 'regionable_id'=>71309, 'regionable_type'=>'village']); //Tottong
            DB::table('regions')->insert(['id'=>4869, 'parent'=>4861, 'code'=>'9086', 'type'=>'districts', 'name'=>'Districts 9086, City 908, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4869, 'regionable_id'=>6200, 'regionable_type'=>'districts']); //Liliraja (lili Riaja)
            DB::table('regionables')->insert(['region_id'=>4869, 'regionable_id'=>6201, 'regionable_type'=>'districts']); //Ganra
            DB::table('regionables')->insert(['region_id'=>4869, 'regionable_id'=>6202, 'regionable_type'=>'districts']); //Citta
            DB::table('regionables')->insert(['region_id'=>4869, 'regionable_id'=>6203, 'regionable_type'=>'districts']); //Mario Riwawo
                DB::table('regions')->insert(['id'=>4870, 'parent'=>4869, 'code'=>'90862', 'type'=>'village', 'name'=>'Village 90862, Districts 9086, City 908, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71326, 'regionable_type'=>'village']); //Barae
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71327, 'regionable_type'=>'village']); //Congko
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71328, 'regionable_type'=>'village']); //Gattareng
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71329, 'regionable_type'=>'village']); //Gattareng Toa
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71330, 'regionable_type'=>'village']); //Goarie
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71331, 'regionable_type'=>'village']); //Labessi
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71332, 'regionable_type'=>'village']); //Mario Riaja
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71333, 'regionable_type'=>'village']); //Mario Rilau
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71334, 'regionable_type'=>'village']); //Mario Rittengnga
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71335, 'regionable_type'=>'village']); //Soga
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71336, 'regionable_type'=>'village']); //Tettikengrarae
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71337, 'regionable_type'=>'village']); //Watu
                DB::table('regionables')->insert(['region_id'=>4870, 'regionable_id'=>71338, 'regionable_type'=>'village']); //Watutoa
            DB::table('regions')->insert(['id'=>4871, 'parent'=>4861, 'code'=>'9087', 'type'=>'districts', 'name'=>'Districts 9087, City 908, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4871, 'regionable_id'=>6204, 'regionable_type'=>'districts']); //Lili Rilau
                DB::table('regions')->insert(['id'=>4872, 'parent'=>4871, 'code'=>'90871', 'type'=>'village', 'name'=>'Village 90871, Districts 9087, City 908, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71339, 'regionable_type'=>'village']); //Abbanuange
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71340, 'regionable_type'=>'village']); //Baringeng
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71341, 'regionable_type'=>'village']); //Cabenge
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71342, 'regionable_type'=>'village']); //Kebo
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71343, 'regionable_type'=>'village']); //Macanre
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71344, 'regionable_type'=>'village']); //Masing
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71345, 'regionable_type'=>'village']); //Pajalesang
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71346, 'regionable_type'=>'village']); //Palangiseng
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71347, 'regionable_type'=>'village']); //Parenring
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71348, 'regionable_type'=>'village']); //Paroto
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71349, 'regionable_type'=>'village']); //Tetewatu
                DB::table('regionables')->insert(['region_id'=>4872, 'regionable_id'=>71350, 'regionable_type'=>'village']); //Ujung
        DB::table('regions')->insert(['id'=>4873, 'parent'=>4642, 'code'=>'909', 'type'=>'city', 'name'=>'City 909, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4873, 'regionable_id'=>380, 'regionable_type'=>'city']); //Wajo regencies
            DB::table('regions')->insert(['id'=>4874, 'parent'=>4873, 'code'=>'9091', 'type'=>'districts', 'name'=>'Districts 9091, City 909, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4874, 'regionable_id'=>6205, 'regionable_type'=>'districts']); //Tempe
            DB::table('regionables')->insert(['region_id'=>4874, 'regionable_id'=>6206, 'regionable_type'=>'districts']); //Belawa
                DB::table('regions')->insert(['id'=>4875, 'parent'=>4874, 'code'=>'90913', 'type'=>'village', 'name'=>'Village 90913, Districts 9091, City 909, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4875, 'regionable_id'=>71357, 'regionable_type'=>'village']); //Lapongkoda
                DB::table('regionables')->insert(['region_id'=>4875, 'regionable_id'=>71358, 'regionable_type'=>'village']); //Pattirosompe
                DB::table('regionables')->insert(['region_id'=>4875, 'regionable_id'=>71367, 'regionable_type'=>'village']); //Leppangeng
            DB::table('regions')->insert(['id'=>4876, 'parent'=>4873, 'code'=>'9095', 'type'=>'districts', 'name'=>'Districts 9095, City 909, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4876, 'regionable_id'=>6206, 'regionable_type'=>'districts']); //Belawa
            DB::table('regionables')->insert(['region_id'=>4876, 'regionable_id'=>6207, 'regionable_type'=>'districts']); //Tana Sitolo
            DB::table('regionables')->insert(['region_id'=>4876, 'regionable_id'=>6208, 'regionable_type'=>'districts']); //Maniang Pajo
            DB::table('regionables')->insert(['region_id'=>4876, 'regionable_id'=>6209, 'regionable_type'=>'districts']); //Gilireng
                DB::table('regions')->insert(['id'=>4877, 'parent'=>4876, 'code'=>'90954', 'type'=>'village', 'name'=>'Village 90954, Districts 9095, City 909, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71403, 'regionable_type'=>'village']); //Abbatireng
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71404, 'regionable_type'=>'village']); //Alausalo
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71405, 'regionable_type'=>'village']); //Arajang
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71406, 'regionable_type'=>'village']); //Gilireng
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71407, 'regionable_type'=>'village']); //Lamata
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71408, 'regionable_type'=>'village']); //Mamminasae (maminasae)
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71409, 'regionable_type'=>'village']); //Paselloreng
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71410, 'regionable_type'=>'village']); //Poleonro
                DB::table('regionables')->insert(['region_id'=>4877, 'regionable_id'=>71411, 'regionable_type'=>'village']); //Polewalie
            DB::table('regions')->insert(['id'=>4878, 'parent'=>4873, 'code'=>'9096', 'type'=>'districts', 'name'=>'Districts 9096, City 909, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4878, 'regionable_id'=>6210, 'regionable_type'=>'districts']); //Sabbang Paru
                DB::table('regions')->insert(['id'=>4879, 'parent'=>4878, 'code'=>'90961', 'type'=>'village', 'name'=>'Village 90961, Districts 9096, City 909, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71412, 'regionable_type'=>'village']); //Benteng Lompoe
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71413, 'regionable_type'=>'village']); //Bila
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71414, 'regionable_type'=>'village']); //Liu
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71415, 'regionable_type'=>'village']); //Mallusesalo
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71416, 'regionable_type'=>'village']); //Pallimae
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71417, 'regionable_type'=>'village']); //Pasaka
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71418, 'regionable_type'=>'village']); //Salotengnga
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71419, 'regionable_type'=>'village']); //Sompe
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71420, 'regionable_type'=>'village']); //Tadangpalie
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71421, 'regionable_type'=>'village']); //Tolotenreng (talotenreng)
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71422, 'regionable_type'=>'village']); //Ugi
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71423, 'regionable_type'=>'village']); //Ujungpero
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71424, 'regionable_type'=>'village']); //Wage
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71425, 'regionable_type'=>'village']); //Walennae (walenae)
                DB::table('regionables')->insert(['region_id'=>4879, 'regionable_id'=>71426, 'regionable_type'=>'village']); //Worongnge
            DB::table('regions')->insert(['id'=>4880, 'parent'=>4873, 'code'=>'9097', 'type'=>'districts', 'name'=>'Districts 9097, City 909, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4880, 'regionable_id'=>6211, 'regionable_type'=>'districts']); //Pammana
                DB::table('regions')->insert(['id'=>4881, 'parent'=>4880, 'code'=>'90971', 'type'=>'village', 'name'=>'Village 90971, Districts 9097, City 909, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71427, 'regionable_type'=>'village']); //Abbanuange
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71428, 'regionable_type'=>'village']); //Cina
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71429, 'regionable_type'=>'village']); //Kampiri
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71430, 'regionable_type'=>'village']); //Lagosi
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71431, 'regionable_type'=>'village']); //Lampulung
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71432, 'regionable_type'=>'village']); //Lapaukke
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71433, 'regionable_type'=>'village']); //Lempa
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71434, 'regionable_type'=>'village']); //Pallawarukka
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71435, 'regionable_type'=>'village']); //Pammana
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71436, 'regionable_type'=>'village']); //Patila
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71437, 'regionable_type'=>'village']); //Simpursia (simpurusia)
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71438, 'regionable_type'=>'village']); //Tadang Palie
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71439, 'regionable_type'=>'village']); //Tobatang
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71440, 'regionable_type'=>'village']); //Watampanua
                DB::table('regionables')->insert(['region_id'=>4881, 'regionable_id'=>71441, 'regionable_type'=>'village']); //Wecudai
            DB::table('regions')->insert(['id'=>4882, 'parent'=>4873, 'code'=>'9098', 'type'=>'districts', 'name'=>'Districts 9098, City 909, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4882, 'regionable_id'=>6212, 'regionable_type'=>'districts']); //Takkalalla
            DB::table('regionables')->insert(['region_id'=>4882, 'regionable_id'=>6213, 'regionable_type'=>'districts']); //Sajoanging
            DB::table('regionables')->insert(['region_id'=>4882, 'regionable_id'=>6214, 'regionable_type'=>'districts']); //Penrang
            DB::table('regionables')->insert(['region_id'=>4882, 'regionable_id'=>6215, 'regionable_type'=>'districts']); //Bola
                DB::table('regions')->insert(['id'=>4883, 'parent'=>4882, 'code'=>'90984', 'type'=>'village', 'name'=>'Village 90984, Districts 9098, City 909, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71474, 'regionable_type'=>'village']); //Balielo
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71475, 'regionable_type'=>'village']); //Bola
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71476, 'regionable_type'=>'village']); //Lattimu
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71477, 'regionable_type'=>'village']); //Lempong
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71478, 'regionable_type'=>'village']); //Manurung
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71479, 'regionable_type'=>'village']); //Pasir Putih
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71480, 'regionable_type'=>'village']); //Pattangngae (patangae)
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71481, 'regionable_type'=>'village']); //Rajamawelang (rajamawellang)
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71482, 'regionable_type'=>'village']); //Sanreseng Ade
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71483, 'regionable_type'=>'village']); //Solo
                DB::table('regionables')->insert(['region_id'=>4883, 'regionable_id'=>71484, 'regionable_type'=>'village']); //Ujung Tanah
            DB::table('regions')->insert(['id'=>4884, 'parent'=>4873, 'code'=>'9099', 'type'=>'districts', 'name'=>'Districts 9099, City 909, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4884, 'regionable_id'=>6216, 'regionable_type'=>'districts']); //Majauleng
            DB::table('regionables')->insert(['region_id'=>4884, 'regionable_id'=>6217, 'regionable_type'=>'districts']); //Pitumpanua
            DB::table('regionables')->insert(['region_id'=>4884, 'regionable_id'=>6218, 'regionable_type'=>'districts']); //Keera
                DB::table('regions')->insert(['id'=>4885, 'parent'=>4884, 'code'=>'90993', 'type'=>'village', 'name'=>'Village 90993, Districts 9099, City 909, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71517, 'regionable_type'=>'village']); //Awo
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71518, 'regionable_type'=>'village']); //Awota
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71519, 'regionable_type'=>'village']); //Ballaere (ballere)
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71520, 'regionable_type'=>'village']); //Ciromanie
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71521, 'regionable_type'=>'village']); //Inrello
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71522, 'regionable_type'=>'village']); //Keera
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71523, 'regionable_type'=>'village']); //Labawang
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71524, 'regionable_type'=>'village']); //Lalliseng
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71525, 'regionable_type'=>'village']); //Paojepe
                DB::table('regionables')->insert(['region_id'=>4885, 'regionable_id'=>71526, 'regionable_type'=>'village']); //Pattirolokka
        DB::table('regions')->insert(['id'=>4886, 'parent'=>4642, 'code'=>'911', 'type'=>'city', 'name'=>'City 911, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4886, 'regionable_id'=>381, 'regionable_type'=>'city']); //Parepare city
            DB::table('regions')->insert(['id'=>4887, 'parent'=>4886, 'code'=>'9111', 'type'=>'districts', 'name'=>'Districts 9111, City 911, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4887, 'regionable_id'=>6219, 'regionable_type'=>'districts']); //Ujung
                DB::table('regions')->insert(['id'=>4888, 'parent'=>4887, 'code'=>'91111', 'type'=>'village', 'name'=>'Village 91111, Districts 9111, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4888, 'regionable_id'=>71527, 'regionable_type'=>'village']); //Labukkang
                DB::table('regionables')->insert(['region_id'=>4888, 'regionable_id'=>71528, 'regionable_type'=>'village']); //Mallusetasi
                DB::table('regions')->insert(['id'=>4889, 'parent'=>4887, 'code'=>'91112', 'type'=>'village', 'name'=>'Village 91112, Districts 9111, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4889, 'regionable_id'=>71529, 'regionable_type'=>'village']); //Lapadde
                DB::table('regions')->insert(['id'=>4890, 'parent'=>4887, 'code'=>'91113', 'type'=>'village', 'name'=>'Village 91113, Districts 9111, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4890, 'regionable_id'=>71530, 'regionable_type'=>'village']); //Ujung Bulu
                DB::table('regions')->insert(['id'=>4891, 'parent'=>4887, 'code'=>'91114', 'type'=>'village', 'name'=>'Village 91114, Districts 9111, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4891, 'regionable_id'=>71531, 'regionable_type'=>'village']); //Ujung Sabbang
            DB::table('regions')->insert(['id'=>4892, 'parent'=>4886, 'code'=>'9112', 'type'=>'districts', 'name'=>'Districts 9112, City 911, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4892, 'regionable_id'=>6220, 'regionable_type'=>'districts']); //Bacukiki Barat
            DB::table('regionables')->insert(['region_id'=>4892, 'regionable_id'=>6221, 'regionable_type'=>'districts']); //Bacukiki
                DB::table('regions')->insert(['id'=>4893, 'parent'=>4892, 'code'=>'91121', 'type'=>'village', 'name'=>'Village 91121, Districts 9112, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4893, 'regionable_id'=>71532, 'regionable_type'=>'village']); //Bumi Harapan
                DB::table('regionables')->insert(['region_id'=>4893, 'regionable_id'=>71533, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>4893, 'regionable_id'=>71534, 'regionable_type'=>'village']); //Sumpang Minangae
                DB::table('regionables')->insert(['region_id'=>4893, 'regionable_id'=>71538, 'regionable_type'=>'village']); //Galung Maloang
                DB::table('regionables')->insert(['region_id'=>4893, 'regionable_id'=>71539, 'regionable_type'=>'village']); //Lemoe
                DB::table('regionables')->insert(['region_id'=>4893, 'regionable_id'=>71540, 'regionable_type'=>'village']); //Wattang Bacukiki
                DB::table('regions')->insert(['id'=>4894, 'parent'=>4892, 'code'=>'91125', 'type'=>'village', 'name'=>'Village 91125, Districts 9112, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4894, 'regionable_id'=>71537, 'regionable_type'=>'village']); //Tiro Sompe
                DB::table('regionables')->insert(['region_id'=>4894, 'regionable_id'=>71541, 'regionable_type'=>'village']); //Lompoe
            DB::table('regions')->insert(['id'=>4895, 'parent'=>4886, 'code'=>'9113', 'type'=>'districts', 'name'=>'Districts 9113, City 911, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4895, 'regionable_id'=>6222, 'regionable_type'=>'districts']); //Soreang
                DB::table('regions')->insert(['id'=>4896, 'parent'=>4895, 'code'=>'91131', 'type'=>'village', 'name'=>'Village 91131, Districts 9113, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4896, 'regionable_id'=>71542, 'regionable_type'=>'village']); //Bukit Harapan
                DB::table('regionables')->insert(['region_id'=>4896, 'regionable_id'=>71543, 'regionable_type'=>'village']); //Bukit Indah
                DB::table('regionables')->insert(['region_id'=>4896, 'regionable_id'=>71544, 'regionable_type'=>'village']); //Kampung Pisang
                DB::table('regionables')->insert(['region_id'=>4896, 'regionable_id'=>71545, 'regionable_type'=>'village']); //Ujung Baru
                DB::table('regionables')->insert(['region_id'=>4896, 'regionable_id'=>71546, 'regionable_type'=>'village']); //Ujung Lare
                DB::table('regions')->insert(['id'=>4897, 'parent'=>4895, 'code'=>'91132', 'type'=>'village', 'name'=>'Village 91132, Districts 9113, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4897, 'regionable_id'=>71547, 'regionable_type'=>'village']); //Wattang Soreang
                DB::table('regions')->insert(['id'=>4898, 'parent'=>4895, 'code'=>'91133', 'type'=>'village', 'name'=>'Village 91133, Districts 9113, City 911, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4898, 'regionable_id'=>71548, 'regionable_type'=>'village']); //Lakessi
        DB::table('regions')->insert(['id'=>4899, 'parent'=>4642, 'code'=>'912', 'type'=>'city', 'name'=>'City 912, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4899, 'regionable_id'=>382, 'regionable_type'=>'city']); //Pinrang regencies
            DB::table('regions')->insert(['id'=>4900, 'parent'=>4899, 'code'=>'9121', 'type'=>'districts', 'name'=>'Districts 9121, City 912, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4900, 'regionable_id'=>6223, 'regionable_type'=>'districts']); //Watang Sawitto
            DB::table('regionables')->insert(['region_id'=>4900, 'regionable_id'=>6224, 'regionable_type'=>'districts']); //Paleteang
                DB::table('regions')->insert(['id'=>4901, 'parent'=>4900, 'code'=>'91213', 'type'=>'village', 'name'=>'Village 91213, Districts 9121, City 912, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4901, 'regionable_id'=>71551, 'regionable_type'=>'village']); //Jaya
                DB::table('regionables')->insert(['region_id'=>4901, 'regionable_id'=>71557, 'regionable_type'=>'village']); //Temmassarangnge
                DB::table('regions')->insert(['id'=>4902, 'parent'=>4900, 'code'=>'91214', 'type'=>'village', 'name'=>'Village 91214, Districts 9121, City 912, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4902, 'regionable_id'=>71558, 'regionable_type'=>'village']); //Macinnae
                DB::table('regions')->insert(['id'=>4903, 'parent'=>4900, 'code'=>'91215', 'type'=>'village', 'name'=>'Village 91215, Districts 9121, City 912, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4903, 'regionable_id'=>71559, 'regionable_type'=>'village']); //Benteng Sawitto
                DB::table('regionables')->insert(['region_id'=>4903, 'regionable_id'=>71560, 'regionable_type'=>'village']); //Laleng Bata
                DB::table('regionables')->insert(['region_id'=>4903, 'regionable_id'=>71561, 'regionable_type'=>'village']); //Mamminasae
                DB::table('regionables')->insert(['region_id'=>4903, 'regionable_id'=>71562, 'regionable_type'=>'village']); //Pacongang
            DB::table('regions')->insert(['id'=>4904, 'parent'=>4899, 'code'=>'9122', 'type'=>'districts', 'name'=>'Districts 9122, City 912, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4904, 'regionable_id'=>6223, 'regionable_type'=>'districts']); //Watang Sawitto
                DB::table('regions')->insert(['id'=>4905, 'parent'=>4904, 'code'=>'91221', 'type'=>'village', 'name'=>'Village 91221, Districts 9122, City 912, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4905, 'regionable_id'=>71556, 'regionable_type'=>'village']); //Bentengnge
            DB::table('regions')->insert(['id'=>4906, 'parent'=>4899, 'code'=>'9125', 'type'=>'districts', 'name'=>'Districts 9125, City 912, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4906, 'regionable_id'=>6225, 'regionable_type'=>'districts']); //Patampanua
            DB::table('regionables')->insert(['region_id'=>4906, 'regionable_id'=>6226, 'regionable_type'=>'districts']); //Duampanua
            DB::table('regionables')->insert(['region_id'=>4906, 'regionable_id'=>6227, 'regionable_type'=>'districts']); //Batulappa
            DB::table('regionables')->insert(['region_id'=>4906, 'regionable_id'=>6228, 'regionable_type'=>'districts']); //Lembang
            DB::table('regionables')->insert(['region_id'=>4906, 'regionable_id'=>6229, 'regionable_type'=>'districts']); //Tiroang
                DB::table('regions')->insert(['id'=>4907, 'parent'=>4906, 'code'=>'91256', 'type'=>'village', 'name'=>'Village 91256, Districts 9125, City 912, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4907, 'regionable_id'=>71610, 'regionable_type'=>'village']); //Marawi
                DB::table('regionables')->insert(['region_id'=>4907, 'regionable_id'=>71611, 'regionable_type'=>'village']); //Mattiro Deceng
                DB::table('regionables')->insert(['region_id'=>4907, 'regionable_id'=>71612, 'regionable_type'=>'village']); //Pakkie (fakkie)
                DB::table('regionables')->insert(['region_id'=>4907, 'regionable_id'=>71613, 'regionable_type'=>'village']); //Pammase
                DB::table('regionables')->insert(['region_id'=>4907, 'regionable_id'=>71614, 'regionable_type'=>'village']); //Tiroang
            DB::table('regions')->insert(['id'=>4908, 'parent'=>4899, 'code'=>'9126', 'type'=>'districts', 'name'=>'Districts 9126, City 912, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4908, 'regionable_id'=>6230, 'regionable_type'=>'districts']); //Mattiro Sompe
            DB::table('regionables')->insert(['region_id'=>4908, 'regionable_id'=>6231, 'regionable_type'=>'districts']); //Cempa
                DB::table('regions')->insert(['id'=>4909, 'parent'=>4908, 'code'=>'91262', 'type'=>'village', 'name'=>'Village 91262, Districts 9126, City 912, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4909, 'regionable_id'=>71624, 'regionable_type'=>'village']); //Cempa
                DB::table('regionables')->insert(['region_id'=>4909, 'regionable_id'=>71625, 'regionable_type'=>'village']); //Mangki
                DB::table('regionables')->insert(['region_id'=>4909, 'regionable_id'=>71626, 'regionable_type'=>'village']); //Mattunru Tunrue
                DB::table('regionables')->insert(['region_id'=>4909, 'regionable_id'=>71627, 'regionable_type'=>'village']); //Salipolo
                DB::table('regionables')->insert(['region_id'=>4909, 'regionable_id'=>71628, 'regionable_type'=>'village']); //Sikkuale
                DB::table('regionables')->insert(['region_id'=>4909, 'regionable_id'=>71629, 'regionable_type'=>'village']); //Tadang Palie
                DB::table('regionables')->insert(['region_id'=>4909, 'regionable_id'=>71630, 'regionable_type'=>'village']); //Tanra Tuo
            DB::table('regions')->insert(['id'=>4910, 'parent'=>4899, 'code'=>'9127', 'type'=>'districts', 'name'=>'Districts 9127, City 912, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4910, 'regionable_id'=>6232, 'regionable_type'=>'districts']); //Mattiro Bulu
            DB::table('regionables')->insert(['region_id'=>4910, 'regionable_id'=>6233, 'regionable_type'=>'districts']); //Lanrisang
            DB::table('regionables')->insert(['region_id'=>4910, 'regionable_id'=>6234, 'regionable_type'=>'districts']); //Suppa
                DB::table('regions')->insert(['id'=>4911, 'parent'=>4910, 'code'=>'91272', 'type'=>'village', 'name'=>'Village 91272, Districts 9127, City 912, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71640, 'regionable_type'=>'village']); //Amassangang
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71641, 'regionable_type'=>'village']); //Barang Palie
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71642, 'regionable_type'=>'village']); //Lanrisang
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71643, 'regionable_type'=>'village']); //Lerang
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71644, 'regionable_type'=>'village']); //Mallongi Longi
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71645, 'regionable_type'=>'village']); //Samaulue
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71646, 'regionable_type'=>'village']); //Wae Tuwoe
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71647, 'regionable_type'=>'village']); //Lero
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71648, 'regionable_type'=>'village']); //Lotang Salo
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71649, 'regionable_type'=>'village']); //Maritengngae
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71650, 'regionable_type'=>'village']); //Polewali
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71651, 'regionable_type'=>'village']); //Tasiwalie
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71652, 'regionable_type'=>'village']); //Tellumpanua
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71653, 'regionable_type'=>'village']); //Ujung Labuang
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71654, 'regionable_type'=>'village']); //Watang Pulu
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71655, 'regionable_type'=>'village']); //Watang Suppa
                DB::table('regionables')->insert(['region_id'=>4911, 'regionable_id'=>71656, 'regionable_type'=>'village']); //Wiringtasi
        DB::table('regions')->insert(['id'=>4912, 'parent'=>4642, 'code'=>'916', 'type'=>'city', 'name'=>'City 916, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4912, 'regionable_id'=>375, 'regionable_type'=>'city']); //Bone regencies
        DB::table('regionables')->insert(['region_id'=>4912, 'regionable_id'=>383, 'regionable_type'=>'city']); //Sidenreng Rappang/rapang regencies
        DB::table('regionables')->insert(['region_id'=>4912, 'regionable_id'=>384, 'regionable_type'=>'city']); //Sinjai regencies
            DB::table('regions')->insert(['id'=>4913, 'parent'=>4912, 'code'=>'9167', 'type'=>'districts', 'name'=>'Districts 9167, City 916, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4913, 'regionable_id'=>6137, 'regionable_type'=>'districts']); //Tellu Limpoe
            DB::table('regionables')->insert(['region_id'=>4913, 'regionable_id'=>6242, 'regionable_type'=>'districts']); //Panca Lautan (lautang)
            DB::table('regionables')->insert(['region_id'=>4913, 'regionable_id'=>6246, 'regionable_type'=>'districts']); //Tellu Limpoe
                DB::table('regions')->insert(['id'=>4914, 'parent'=>4913, 'code'=>'91671', 'type'=>'village', 'name'=>'Village 91671, Districts 9167, City 916, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70666, 'regionable_type'=>'village']); //Batu Putih
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70667, 'regionable_type'=>'village']); //Bonto Masunggu
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70668, 'regionable_type'=>'village']); //Gaya Baru
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70669, 'regionable_type'=>'village']); //Lagori
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70670, 'regionable_type'=>'village']); //Pallawa
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70671, 'regionable_type'=>'village']); //Polewali
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70672, 'regionable_type'=>'village']); //Sadar
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70673, 'regionable_type'=>'village']); //Samaenre
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70674, 'regionable_type'=>'village']); //Tapong
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70675, 'regionable_type'=>'village']); //Tellangkere
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>70676, 'regionable_type'=>'village']); //Tondong
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71763, 'regionable_type'=>'village']); //Bua
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71764, 'regionable_type'=>'village']); //Erabaru
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71765, 'regionable_type'=>'village']); //Kalobba
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71766, 'regionable_type'=>'village']); //Lembang Lohe
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71767, 'regionable_type'=>'village']); //Mannanti
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71768, 'regionable_type'=>'village']); //Massaile
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71769, 'regionable_type'=>'village']); //Pattongko
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71770, 'regionable_type'=>'village']); //Samaturue
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71771, 'regionable_type'=>'village']); //Saotengah
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71772, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>4914, 'regionable_id'=>71773, 'regionable_type'=>'village']); //Tellu Limpoe
        DB::table('regions')->insert(['id'=>4915, 'parent'=>4642, 'code'=>'917', 'type'=>'city', 'name'=>'City 917, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4915, 'regionable_id'=>385, 'regionable_type'=>'city']); //Enrekang regencies
            DB::table('regions')->insert(['id'=>4916, 'parent'=>4915, 'code'=>'9171', 'type'=>'districts', 'name'=>'Districts 9171, City 917, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4916, 'regionable_id'=>6255, 'regionable_type'=>'districts']); //Enrekang
            DB::table('regionables')->insert(['region_id'=>4916, 'regionable_id'=>6256, 'regionable_type'=>'districts']); //Cendana
                DB::table('regions')->insert(['id'=>4917, 'parent'=>4916, 'code'=>'91711', 'type'=>'village', 'name'=>'Village 91711, Districts 9171, City 917, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71843, 'regionable_type'=>'village']); //Buttu Batu
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71844, 'regionable_type'=>'village']); //Cemba
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71845, 'regionable_type'=>'village']); //Juppandang
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71846, 'regionable_type'=>'village']); //Kaluppini
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71847, 'regionable_type'=>'village']); //Karueng
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71848, 'regionable_type'=>'village']); //Lembang
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71849, 'regionable_type'=>'village']); //Leoran
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71850, 'regionable_type'=>'village']); //Lewaja
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71851, 'regionable_type'=>'village']); //Puserren
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71852, 'regionable_type'=>'village']); //Ranga
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71853, 'regionable_type'=>'village']); //Rossoan
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71854, 'regionable_type'=>'village']); //Tallu Bamba
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71855, 'regionable_type'=>'village']); //Temban
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71856, 'regionable_type'=>'village']); //Tobalu
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71857, 'regionable_type'=>'village']); //Tokkonan
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71858, 'regionable_type'=>'village']); //Tuara
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71859, 'regionable_type'=>'village']); //Tungka
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71861, 'regionable_type'=>'village']); //Cendana
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71862, 'regionable_type'=>'village']); //Karrang
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71863, 'regionable_type'=>'village']); //Lebang
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71864, 'regionable_type'=>'village']); //Malalin
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71865, 'regionable_type'=>'village']); //Pinang
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71866, 'regionable_type'=>'village']); //Pundilemo
                DB::table('regionables')->insert(['region_id'=>4917, 'regionable_id'=>71867, 'regionable_type'=>'village']); //Taulan
            DB::table('regions')->insert(['id'=>4918, 'parent'=>4915, 'code'=>'9175', 'type'=>'districts', 'name'=>'Districts 9175, City 917, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4918, 'regionable_id'=>6257, 'regionable_type'=>'districts']); //Anggeraja
            DB::table('regionables')->insert(['region_id'=>4918, 'regionable_id'=>6258, 'regionable_type'=>'districts']); //Malua
            DB::table('regionables')->insert(['region_id'=>4918, 'regionable_id'=>6259, 'regionable_type'=>'districts']); //Baraka
            DB::table('regionables')->insert(['region_id'=>4918, 'regionable_id'=>6260, 'regionable_type'=>'districts']); //Buntu Batu
            DB::table('regionables')->insert(['region_id'=>4918, 'regionable_id'=>6261, 'regionable_type'=>'districts']); //Baroko
            DB::table('regionables')->insert(['region_id'=>4918, 'regionable_id'=>6262, 'regionable_type'=>'districts']); //Masalle
            DB::table('regionables')->insert(['region_id'=>4918, 'regionable_id'=>6263, 'regionable_type'=>'districts']); //Alla
            DB::table('regionables')->insert(['region_id'=>4918, 'regionable_id'=>6264, 'regionable_type'=>'districts']); //Curio
                DB::table('regions')->insert(['id'=>4919, 'parent'=>4918, 'code'=>'91754', 'type'=>'village', 'name'=>'Village 91754, Districts 9175, City 917, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71914, 'regionable_type'=>'village']); //Baroko
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71915, 'regionable_type'=>'village']); //Benteng Alla
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71916, 'regionable_type'=>'village']); //Benteng Alla Utara
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71917, 'regionable_type'=>'village']); //Patongloan
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71918, 'regionable_type'=>'village']); //Tongko
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71919, 'regionable_type'=>'village']); //Batu Kede
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71920, 'regionable_type'=>'village']); //Buntu Sarong
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71921, 'regionable_type'=>'village']); //Masalle
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71922, 'regionable_type'=>'village']); //Mundan
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71923, 'regionable_type'=>'village']); //Rampunan
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71924, 'regionable_type'=>'village']); //Tongkonan Basse
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71925, 'regionable_type'=>'village']); //Bolang
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71926, 'regionable_type'=>'village']); //Buntu Sugi
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71927, 'regionable_type'=>'village']); //Kalosi
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71928, 'regionable_type'=>'village']); //Kambiolangi
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71929, 'regionable_type'=>'village']); //Mata Allo
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71930, 'regionable_type'=>'village']); //Pana
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71931, 'regionable_type'=>'village']); //Sumillan
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71932, 'regionable_type'=>'village']); //Taulo
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71933, 'regionable_type'=>'village']); //Buntu Barana
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71934, 'regionable_type'=>'village']); //Buntu Pema
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71935, 'regionable_type'=>'village']); //Curio
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71936, 'regionable_type'=>'village']); //Mandalan
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71937, 'regionable_type'=>'village']); //Mekkale (mekkalak)
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71938, 'regionable_type'=>'village']); //Pabaloran
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71939, 'regionable_type'=>'village']); //Parombean
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71940, 'regionable_type'=>'village']); //Salassa
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71941, 'regionable_type'=>'village']); //Sanglepongan
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71942, 'regionable_type'=>'village']); //Sumbang
                DB::table('regionables')->insert(['region_id'=>4919, 'regionable_id'=>71943, 'regionable_type'=>'village']); //Tallungura
            DB::table('regions')->insert(['id'=>4920, 'parent'=>4915, 'code'=>'9176', 'type'=>'districts', 'name'=>'Districts 9176, City 917, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4920, 'regionable_id'=>6265, 'regionable_type'=>'districts']); //Maiwa
            DB::table('regionables')->insert(['region_id'=>4920, 'regionable_id'=>6266, 'regionable_type'=>'districts']); //Bungin
                DB::table('regions')->insert(['id'=>4921, 'parent'=>4920, 'code'=>'91761', 'type'=>'village', 'name'=>'Village 91761, Districts 9176, City 917, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71944, 'regionable_type'=>'village']); //Bangkala
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71945, 'regionable_type'=>'village']); //Baringin
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71946, 'regionable_type'=>'village']); //Batu Mila
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71947, 'regionable_type'=>'village']); //Boiya
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71948, 'regionable_type'=>'village']); //Boto Malangga
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71949, 'regionable_type'=>'village']); //Kaluppang
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71950, 'regionable_type'=>'village']); //Labuku
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71951, 'regionable_type'=>'village']); //Lebani
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71952, 'regionable_type'=>'village']); //Limbuang
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71953, 'regionable_type'=>'village']); //Mangkawani (mengkawani)
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71954, 'regionable_type'=>'village']); //Matajang
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71955, 'regionable_type'=>'village']); //Ongko
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71956, 'regionable_type'=>'village']); //Paladang
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71957, 'regionable_type'=>'village']); //Palakka
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71958, 'regionable_type'=>'village']); //Pariwang
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71959, 'regionable_type'=>'village']); //Pasang
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71960, 'regionable_type'=>'village']); //Patondon Salu
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71961, 'regionable_type'=>'village']); //Puncak Harapan
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71962, 'regionable_type'=>'village']); //Salo Dua
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71963, 'regionable_type'=>'village']); //Tanete
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71964, 'regionable_type'=>'village']); //Tapong
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71965, 'regionable_type'=>'village']); //Tuncung
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71966, 'regionable_type'=>'village']); //Baruka
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71967, 'regionable_type'=>'village']); //Bulo
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71968, 'regionable_type'=>'village']); //Bungin
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71969, 'regionable_type'=>'village']); //Sawito
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71970, 'regionable_type'=>'village']); //Tallang Rilau
                DB::table('regionables')->insert(['region_id'=>4921, 'regionable_id'=>71971, 'regionable_type'=>'village']); //Wira Karya
        DB::table('regions')->insert(['id'=>4922, 'parent'=>4642, 'code'=>'918', 'type'=>'city', 'name'=>'City 918, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4922, 'regionable_id'=>386, 'regionable_type'=>'city']); //Tana Toraja regencies
        DB::table('regionables')->insert(['region_id'=>4922, 'regionable_id'=>387, 'regionable_type'=>'city']); //Toraja Utara regencies
        DB::table('regionables')->insert(['region_id'=>4922, 'regionable_id'=>388, 'regionable_type'=>'city']); //Luwu Utara regencies
            DB::table('regions')->insert(['id'=>4923, 'parent'=>4922, 'code'=>'9185', 'type'=>'districts', 'name'=>'Districts 9185, City 918, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6270, 'regionable_type'=>'districts']); //Masanda
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6271, 'regionable_type'=>'districts']); //Bittuang
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6289, 'regionable_type'=>'districts']); //Kesu
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6290, 'regionable_type'=>'districts']); //Sanggalangi
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6291, 'regionable_type'=>'districts']); //Sopai
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6292, 'regionable_type'=>'districts']); //Bangkelekila
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6293, 'regionable_type'=>'districts']); //Rantebua
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6294, 'regionable_type'=>'districts']); //Sesean
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6295, 'regionable_type'=>'districts']); //Buntao
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6296, 'regionable_type'=>'districts']); //Sesean Suloara
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6297, 'regionable_type'=>'districts']); //Sa\dan
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6298, 'regionable_type'=>'districts']); //Rindingallo
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6299, 'regionable_type'=>'districts']); //Awan Rante Karua
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6300, 'regionable_type'=>'districts']); //Baruppu
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6301, 'regionable_type'=>'districts']); //Buntu Pepasan
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6302, 'regionable_type'=>'districts']); //Kapalla Pitu (kapala Pitu)
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6303, 'regionable_type'=>'districts']); //Balusu
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6304, 'regionable_type'=>'districts']); //Nanggala
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6305, 'regionable_type'=>'districts']); //Tondon
            DB::table('regionables')->insert(['region_id'=>4923, 'regionable_id'=>6307, 'regionable_type'=>'districts']); //Limbong
                DB::table('regions')->insert(['id'=>4924, 'parent'=>4923, 'code'=>'91854', 'type'=>'village', 'name'=>'Village 91854, Districts 9185, City 918, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72000, 'regionable_type'=>'village']); //Belau
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72001, 'regionable_type'=>'village']); //Belau Utara
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72002, 'regionable_type'=>'village']); //Kadungdung
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72003, 'regionable_type'=>'village']); //Paku
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72004, 'regionable_type'=>'village']); //Paliorong
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72005, 'regionable_type'=>'village']); //Pondingao
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72006, 'regionable_type'=>'village']); //Ratte
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72007, 'regionable_type'=>'village']); //Sese Salu (sese\alu)
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72219, 'regionable_type'=>'village']); //Ampang Batu (appang)
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72220, 'regionable_type'=>'village']); //Buntu Batu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72221, 'regionable_type'=>'village']); //Lempopoton
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72222, 'regionable_type'=>'village']); //Limbong Malting
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72223, 'regionable_type'=>'village']); //Lo Ko Uru Tanete Batu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72224, 'regionable_type'=>'village']); //Maiting
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72225, 'regionable_type'=>'village']); //Pangala
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72226, 'regionable_type'=>'village']); //Pangala Utara
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72227, 'regionable_type'=>'village']); //Rindingallo
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72228, 'regionable_type'=>'village']); //Awan
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72229, 'regionable_type'=>'village']); //Batu Lotong
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72230, 'regionable_type'=>'village']); //Buntu Karua
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72231, 'regionable_type'=>'village']); //Londong Biang
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72232, 'regionable_type'=>'village']); //Baruppu Benteng Batu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72233, 'regionable_type'=>'village']); //Baruppu Parodo
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72234, 'regionable_type'=>'village']); //Baruppu Selatan
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72235, 'regionable_type'=>'village']); //Baruppu Utara
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72236, 'regionable_type'=>'village']); //Batu Busa (batu Basa)
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72237, 'regionable_type'=>'village']); //Buntu Minanga
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72238, 'regionable_type'=>'village']); //Pangkung Batu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72239, 'regionable_type'=>'village']); //Paonganan
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72240, 'regionable_type'=>'village']); //Parandangan
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72241, 'regionable_type'=>'village']); //Pengkaroan Manuk (pangkoroan Manuk)
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72242, 'regionable_type'=>'village']); //Ponglu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72243, 'regionable_type'=>'village']); //Pulu Pulu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72244, 'regionable_type'=>'village']); //Rante Uma
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72245, 'regionable_type'=>'village']); //Roroan Bara-bara
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72246, 'regionable_type'=>'village']); //Sapan
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72247, 'regionable_type'=>'village']); //Sarambu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72248, 'regionable_type'=>'village']); //Talimbangan
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72249, 'regionable_type'=>'village']); //Benteng Kado
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72250, 'regionable_type'=>'village']); //Benteng Mamulu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72251, 'regionable_type'=>'village']); //Kantun Poya
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72252, 'regionable_type'=>'village']); //Kapala Pitu
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72253, 'regionable_type'=>'village']); //Polo Padang
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72254, 'regionable_type'=>'village']); //Sikuku
                DB::table('regionables')->insert(['region_id'=>4924, 'regionable_id'=>72283, 'regionable_type'=>'village']); //Rinding Allo
        DB::table('regions')->insert(['id'=>4925, 'parent'=>4642, 'code'=>'919', 'type'=>'city', 'name'=>'City 919, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4925, 'regionable_id'=>388, 'regionable_type'=>'city']); //Luwu Utara regencies
        DB::table('regionables')->insert(['region_id'=>4925, 'regionable_id'=>389, 'regionable_type'=>'city']); //Palopo city
        DB::table('regionables')->insert(['region_id'=>4925, 'regionable_id'=>390, 'regionable_type'=>'city']); //Luwu regencies
        DB::table('regionables')->insert(['region_id'=>4925, 'regionable_id'=>391, 'regionable_type'=>'city']); //Luwu Timur regencies
            DB::table('regions')->insert(['id'=>4926, 'parent'=>4925, 'code'=>'9198', 'type'=>'districts', 'name'=>'Districts 9198, City 919, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4926, 'regionable_id'=>6350, 'regionable_type'=>'districts']); //Malili
                DB::table('regions')->insert(['id'=>4927, 'parent'=>4926, 'code'=>'91981', 'type'=>'village', 'name'=>'Village 91981, Districts 9198, City 919, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4927, 'regionable_id'=>72731, 'regionable_type'=>'village']); //Lakawali Pantai
                DB::table('regionables')->insert(['region_id'=>4927, 'regionable_id'=>72732, 'regionable_type'=>'village']); //Malili
                DB::table('regionables')->insert(['region_id'=>4927, 'regionable_id'=>72733, 'regionable_type'=>'village']); //Pasipasi
                DB::table('regionables')->insert(['region_id'=>4927, 'regionable_id'=>72734, 'regionable_type'=>'village']); //Wewangriu
        DB::table('regions')->insert(['id'=>4928, 'parent'=>4642, 'code'=>'921', 'type'=>'city', 'name'=>'City 921, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4928, 'regionable_id'=>374, 'regionable_type'=>'city']); //Gowa regencies
        DB::table('regionables')->insert(['region_id'=>4928, 'regionable_id'=>387, 'regionable_type'=>'city']); //Toraja Utara regencies
            DB::table('regions')->insert(['id'=>4929, 'parent'=>4928, 'code'=>'9211', 'type'=>'districts', 'name'=>'Districts 9211, City 921, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4929, 'regionable_id'=>6120, 'regionable_type'=>'districts']); //Somba Opu (upu)
            DB::table('regionables')->insert(['region_id'=>4929, 'regionable_id'=>6291, 'regionable_type'=>'districts']); //Sopai
                DB::table('regions')->insert(['id'=>4930, 'parent'=>4929, 'code'=>'92119', 'type'=>'village', 'name'=>'Village 92119, Districts 9211, City 921, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4930, 'regionable_id'=>70511, 'regionable_type'=>'village']); //Bontoramba
                DB::table('regionables')->insert(['region_id'=>4930, 'regionable_id'=>70512, 'regionable_type'=>'village']); //Mawang
                DB::table('regionables')->insert(['region_id'=>4930, 'regionable_id'=>72172, 'regionable_type'=>'village']); //Langda
                DB::table('regionables')->insert(['region_id'=>4930, 'regionable_id'=>72173, 'regionable_type'=>'village']); //Marante
                DB::table('regionables')->insert(['region_id'=>4930, 'regionable_id'=>72174, 'regionable_type'=>'village']); //Nonongan Selatan
                DB::table('regionables')->insert(['region_id'=>4930, 'regionable_id'=>72175, 'regionable_type'=>'village']); //Nonongan Utara
                DB::table('regionables')->insert(['region_id'=>4930, 'regionable_id'=>72176, 'regionable_type'=>'village']); //Salu Sopai
                DB::table('regionables')->insert(['region_id'=>4930, 'regionable_id'=>72177, 'regionable_type'=>'village']); //Tombang Langda
        DB::table('regions')->insert(['id'=>4931, 'parent'=>4642, 'code'=>'922', 'type'=>'city', 'name'=>'City 922, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4931, 'regionable_id'=>374, 'regionable_type'=>'city']); //Gowa regencies
        DB::table('regionables')->insert(['region_id'=>4931, 'regionable_id'=>392, 'regionable_type'=>'city']); //Takalar regencies
            DB::table('regions')->insert(['id'=>4932, 'parent'=>4931, 'code'=>'9221', 'type'=>'districts', 'name'=>'Districts 9221, City 922, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4932, 'regionable_id'=>6128, 'regionable_type'=>'districts']); //Pattallassang
            DB::table('regionables')->insert(['region_id'=>4932, 'regionable_id'=>6361, 'regionable_type'=>'districts']); //Patallassang
                DB::table('regions')->insert(['id'=>4933, 'parent'=>4932, 'code'=>'92211', 'type'=>'village', 'name'=>'Village 92211, Districts 9221, City 922, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72858, 'regionable_type'=>'village']); //Bajeng
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72859, 'regionable_type'=>'village']); //Kalabbirang
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72860, 'regionable_type'=>'village']); //Maradekaya
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72861, 'regionable_type'=>'village']); //Pallantikang
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72862, 'regionable_type'=>'village']); //Pappa
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72863, 'regionable_type'=>'village']); //Pattallassang
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72864, 'regionable_type'=>'village']); //Sabintang
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72865, 'regionable_type'=>'village']); //Salaka
                DB::table('regionables')->insert(['region_id'=>4933, 'regionable_id'=>72866, 'regionable_type'=>'village']); //Sombala Bella
            DB::table('regions')->insert(['id'=>4934, 'parent'=>4931, 'code'=>'9222', 'type'=>'districts', 'name'=>'Districts 9222, City 922, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4934, 'regionable_id'=>6362, 'regionable_type'=>'districts']); //Polombangkeng Utara (polobangkeng)
                DB::table('regions')->insert(['id'=>4935, 'parent'=>4934, 'code'=>'92221', 'type'=>'village', 'name'=>'Village 92221, Districts 9222, City 922, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72867, 'regionable_type'=>'village']); //Balangtanaya
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72868, 'regionable_type'=>'village']); //Barugaya
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72869, 'regionable_type'=>'village']); //Kale Ko\mara
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72870, 'regionable_type'=>'village']); //Kampung Beru
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72871, 'regionable_type'=>'village']); //Ko Mara
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72872, 'regionable_type'=>'village']); //Lassang
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72873, 'regionable_type'=>'village']); //Lassang Barat
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72874, 'regionable_type'=>'village']); //Malewang
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72875, 'regionable_type'=>'village']); //Mannongkoki
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72876, 'regionable_type'=>'village']); //Massamaturu
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72877, 'regionable_type'=>'village']); //Mattompodalle
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72878, 'regionable_type'=>'village']); //Pa Rappunganta
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72879, 'regionable_type'=>'village']); //Palleko
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72880, 'regionable_type'=>'village']); //Panrannuangku
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72881, 'regionable_type'=>'village']); //Parang Baddo
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72882, 'regionable_type'=>'village']); //Parang Luara
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72883, 'regionable_type'=>'village']); //Timbuseng
                DB::table('regionables')->insert(['region_id'=>4935, 'regionable_id'=>72884, 'regionable_type'=>'village']); //Towata
            DB::table('regions')->insert(['id'=>4936, 'parent'=>4931, 'code'=>'9223', 'type'=>'districts', 'name'=>'Districts 9223, City 922, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4936, 'regionable_id'=>6363, 'regionable_type'=>'districts']); //Sanrobone
            DB::table('regionables')->insert(['region_id'=>4936, 'regionable_id'=>6364, 'regionable_type'=>'districts']); //Mappakasunggu
                DB::table('regions')->insert(['id'=>4937, 'parent'=>4936, 'code'=>'92232', 'type'=>'village', 'name'=>'Village 92232, Districts 9223, City 922, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72891, 'regionable_type'=>'village']); //Balangdatu
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72892, 'regionable_type'=>'village']); //Maccinibaji
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72893, 'regionable_type'=>'village']); //Mattirobaji
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72894, 'regionable_type'=>'village']); //Pa\batangang
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72895, 'regionable_type'=>'village']); //Patani
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72896, 'regionable_type'=>'village']); //Rewataya
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72897, 'regionable_type'=>'village']); //Soreang
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72898, 'regionable_type'=>'village']); //Takalar Kota
                DB::table('regionables')->insert(['region_id'=>4937, 'regionable_id'=>72899, 'regionable_type'=>'village']); //Tompotana
            DB::table('regions')->insert(['id'=>4938, 'parent'=>4931, 'code'=>'9225', 'type'=>'districts', 'name'=>'Districts 9225, City 922, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4938, 'regionable_id'=>6365, 'regionable_type'=>'districts']); //Polombangkeng Selatan (polobangkeng)
            DB::table('regionables')->insert(['region_id'=>4938, 'regionable_id'=>6366, 'regionable_type'=>'districts']); //Galesong Selatan
            DB::table('regionables')->insert(['region_id'=>4938, 'regionable_id'=>6367, 'regionable_type'=>'districts']); //Galesong
            DB::table('regionables')->insert(['region_id'=>4938, 'regionable_id'=>6368, 'regionable_type'=>'districts']); //Galesong Utara
                DB::table('regions')->insert(['id'=>4939, 'parent'=>4938, 'code'=>'92255', 'type'=>'village', 'name'=>'Village 92255, Districts 9225, City 922, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72929, 'regionable_type'=>'village']); //Campagaya
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72930, 'regionable_type'=>'village']); //Kalenna Bontongape
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72931, 'regionable_type'=>'village']); //Kalukuang
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72932, 'regionable_type'=>'village']); //Mappakalompo
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72933, 'regionable_type'=>'village']); //Pa\lalakkang
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72934, 'regionable_type'=>'village']); //Pa\rasangang Beru
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72935, 'regionable_type'=>'village']); //Pattinoang
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72936, 'regionable_type'=>'village']); //Aeng Batu-batu
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72937, 'regionable_type'=>'village']); //Aeng Towa
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72938, 'regionable_type'=>'village']); //Bonto Lanra
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72939, 'regionable_type'=>'village']); //Bonto Sunggu
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72940, 'regionable_type'=>'village']); //Bontokaddopepe
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72941, 'regionable_type'=>'village']); //Bontolebang
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72942, 'regionable_type'=>'village']); //Pakkabba
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72943, 'regionable_type'=>'village']); //Sampulungan
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72944, 'regionable_type'=>'village']); //Tamalate
                DB::table('regionables')->insert(['region_id'=>4939, 'regionable_id'=>72945, 'regionable_type'=>'village']); //Tamasaju
            DB::table('regions')->insert(['id'=>4940, 'parent'=>4931, 'code'=>'9226', 'type'=>'districts', 'name'=>'Districts 9226, City 922, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4940, 'regionable_id'=>6369, 'regionable_type'=>'districts']); //Mangara Bombang
                DB::table('regions')->insert(['id'=>4941, 'parent'=>4940, 'code'=>'92261', 'type'=>'village', 'name'=>'Village 92261, Districts 9226, City 922, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72946, 'regionable_type'=>'village']); //Banggae
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72947, 'regionable_type'=>'village']); //Bontomanai
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72948, 'regionable_type'=>'village']); //Bontoparang
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72949, 'regionable_type'=>'village']); //Cikowang
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72950, 'regionable_type'=>'village']); //Laikang
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72951, 'regionable_type'=>'village']); //Lakatong
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72952, 'regionable_type'=>'village']); //Lengkese
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72953, 'regionable_type'=>'village']); //Mangadu
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72954, 'regionable_type'=>'village']); //Panyangkalang
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72955, 'regionable_type'=>'village']); //Pattoppakang
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72956, 'regionable_type'=>'village']); //Punaga
                DB::table('regionables')->insert(['region_id'=>4941, 'regionable_id'=>72957, 'regionable_type'=>'village']); //Topejawa
        DB::table('regions')->insert(['id'=>4942, 'parent'=>4642, 'code'=>'923', 'type'=>'city', 'name'=>'City 923, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4942, 'regionable_id'=>393, 'regionable_type'=>'city']); //Jeneponto regencies
            DB::table('regions')->insert(['id'=>4943, 'parent'=>4942, 'code'=>'9231', 'type'=>'districts', 'name'=>'Districts 9231, City 923, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4943, 'regionable_id'=>6370, 'regionable_type'=>'districts']); //Binamu
            DB::table('regionables')->insert(['region_id'=>4943, 'regionable_id'=>6371, 'regionable_type'=>'districts']); //Turatea
            DB::table('regionables')->insert(['region_id'=>4943, 'regionable_id'=>6372, 'regionable_type'=>'districts']); //Rumbia
                DB::table('regions')->insert(['id'=>4944, 'parent'=>4943, 'code'=>'92314', 'type'=>'village', 'name'=>'Village 92314, Districts 9231, City 923, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4944, 'regionable_id'=>72964, 'regionable_type'=>'village']); //Sapanang
                DB::table('regionables')->insert(['region_id'=>4944, 'regionable_id'=>72982, 'regionable_type'=>'village']); //Jenetallasa
            DB::table('regions')->insert(['id'=>4945, 'parent'=>4942, 'code'=>'9235', 'type'=>'districts', 'name'=>'Districts 9235, City 923, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4945, 'regionable_id'=>6373, 'regionable_type'=>'districts']); //Bontoramba
            DB::table('regionables')->insert(['region_id'=>4945, 'regionable_id'=>6374, 'regionable_type'=>'districts']); //Tamalatea
            DB::table('regionables')->insert(['region_id'=>4945, 'regionable_id'=>6375, 'regionable_type'=>'districts']); //Bangkala Barat
            DB::table('regionables')->insert(['region_id'=>4945, 'regionable_id'=>6376, 'regionable_type'=>'districts']); //Bangkala
                DB::table('regions')->insert(['id'=>4946, 'parent'=>4945, 'code'=>'92352', 'type'=>'village', 'name'=>'Village 92352, Districts 9235, City 923, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73018, 'regionable_type'=>'village']); //Banrimanurung
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73019, 'regionable_type'=>'village']); //Barana
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73020, 'regionable_type'=>'village']); //Beroanging
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73021, 'regionable_type'=>'village']); //Bulujaya
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73022, 'regionable_type'=>'village']); //Garassikang
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73023, 'regionable_type'=>'village']); //Pappalluang
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73024, 'regionable_type'=>'village']); //Pattiro
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73025, 'regionable_type'=>'village']); //Tuju
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73026, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73027, 'regionable_type'=>'village']); //Bontomanai
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73028, 'regionable_type'=>'village']); //Bontorannu
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73029, 'regionable_type'=>'village']); //Gunung Silanu
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73030, 'regionable_type'=>'village']); //Jenetallasa
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73031, 'regionable_type'=>'village']); //Kalimporo
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73032, 'regionable_type'=>'village']); //Kapita
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73033, 'regionable_type'=>'village']); //Mallasoro
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73034, 'regionable_type'=>'village']); //Marayoka
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73035, 'regionable_type'=>'village']); //Pallantikang
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73036, 'regionable_type'=>'village']); //Pallengu
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73037, 'regionable_type'=>'village']); //Pantai Bahari
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73038, 'regionable_type'=>'village']); //Punagaya
                DB::table('regionables')->insert(['region_id'=>4946, 'regionable_id'=>73039, 'regionable_type'=>'village']); //Tombo-tombolo
            DB::table('regions')->insert(['id'=>4947, 'parent'=>4942, 'code'=>'9236', 'type'=>'districts', 'name'=>'Districts 9236, City 923, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4947, 'regionable_id'=>6377, 'regionable_type'=>'districts']); //Tarowang
            DB::table('regionables')->insert(['region_id'=>4947, 'regionable_id'=>6378, 'regionable_type'=>'districts']); //Arungkeke
            DB::table('regionables')->insert(['region_id'=>4947, 'regionable_id'=>6379, 'regionable_type'=>'districts']); //Batang
                DB::table('regions')->insert(['id'=>4948, 'parent'=>4947, 'code'=>'92361', 'type'=>'village', 'name'=>'Village 92361, Districts 9236, City 923, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73040, 'regionable_type'=>'village']); //Allu Taroang
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73041, 'regionable_type'=>'village']); //Balang Baru
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73042, 'regionable_type'=>'village']); //Balang Loe Tarowang
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73043, 'regionable_type'=>'village']); //Bonto Ujung
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73044, 'regionable_type'=>'village']); //Bontorappo
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73045, 'regionable_type'=>'village']); //Pao
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73046, 'regionable_type'=>'village']); //Tarowang
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73047, 'regionable_type'=>'village']); //Tino
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73048, 'regionable_type'=>'village']); //Arungkeke
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73049, 'regionable_type'=>'village']); //Arungkeke Pallantikang
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73050, 'regionable_type'=>'village']); //Borong Lamu
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73051, 'regionable_type'=>'village']); //Bulo-bulo
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73052, 'regionable_type'=>'village']); //Kalumpang Loe
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73053, 'regionable_type'=>'village']); //Kampala
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73054, 'regionable_type'=>'village']); //Palajau
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73055, 'regionable_type'=>'village']); //Bontoraya
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73056, 'regionable_type'=>'village']); //Bungeng
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73057, 'regionable_type'=>'village']); //Camba-camba
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73058, 'regionable_type'=>'village']); //Kaluku
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73059, 'regionable_type'=>'village']); //Maccinibaji
                DB::table('regionables')->insert(['region_id'=>4948, 'regionable_id'=>73060, 'regionable_type'=>'village']); //Togo-togo
            DB::table('regions')->insert(['id'=>4949, 'parent'=>4942, 'code'=>'9237', 'type'=>'districts', 'name'=>'Districts 9237, City 923, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4949, 'regionable_id'=>6372, 'regionable_type'=>'districts']); //Rumbia
            DB::table('regionables')->insert(['region_id'=>4949, 'regionable_id'=>6380, 'regionable_type'=>'districts']); //Kelara
                DB::table('regions')->insert(['id'=>4950, 'parent'=>4949, 'code'=>'92371', 'type'=>'village', 'name'=>'Village 92371, Districts 9237, City 923, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72983, 'regionable_type'=>'village']); //Bonto Cini
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72984, 'regionable_type'=>'village']); //Bontomanai
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72985, 'regionable_type'=>'village']); //Kassi
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72986, 'regionable_type'=>'village']); //Lebang Manai
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72987, 'regionable_type'=>'village']); //Lebang Manai Utara
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72988, 'regionable_type'=>'village']); //Pallantikang
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72989, 'regionable_type'=>'village']); //Rumbia
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72990, 'regionable_type'=>'village']); //Tompobulu
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>72991, 'regionable_type'=>'village']); //Ujung Bulu
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73061, 'regionable_type'=>'village']); //Bonto Nompo
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73062, 'regionable_type'=>'village']); //Bontolebang
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73063, 'regionable_type'=>'village']); //Gantarang
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73064, 'regionable_type'=>'village']); //Samataring
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73065, 'regionable_type'=>'village']); //Tolo
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73066, 'regionable_type'=>'village']); //Tolo Barat
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73067, 'regionable_type'=>'village']); //Tolo Selatan
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73068, 'regionable_type'=>'village']); //Tolo Timur
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73069, 'regionable_type'=>'village']); //Tolo Utara
                DB::table('regionables')->insert(['region_id'=>4950, 'regionable_id'=>73070, 'regionable_type'=>'village']); //Tombolo (tombo)
        DB::table('regions')->insert(['id'=>4951, 'parent'=>4642, 'code'=>'924', 'type'=>'city', 'name'=>'City 924, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4951, 'regionable_id'=>394, 'regionable_type'=>'city']); //Bantaeng regencies
            DB::table('regions')->insert(['id'=>4952, 'parent'=>4951, 'code'=>'9241', 'type'=>'districts', 'name'=>'Districts 9241, City 924, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4952, 'regionable_id'=>6381, 'regionable_type'=>'districts']); //Bantaeng
            DB::table('regionables')->insert(['region_id'=>4952, 'regionable_id'=>6382, 'regionable_type'=>'districts']); //Eremerasa
                DB::table('regions')->insert(['id'=>4953, 'parent'=>4952, 'code'=>'92414', 'type'=>'village', 'name'=>'Village 92414, Districts 9241, City 924, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4953, 'regionable_id'=>73080, 'regionable_type'=>'village']); //Ulugalung
                DB::table('regions')->insert(['id'=>4954, 'parent'=>4952, 'code'=>'92415', 'type'=>'village', 'name'=>'Village 92415, Districts 9241, City 924, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73079, 'regionable_type'=>'village']); //Letta
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73081, 'regionable_type'=>'village']); //Barua
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73082, 'regionable_type'=>'village']); //Kampala
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73083, 'regionable_type'=>'village']); //Lonrong
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73084, 'regionable_type'=>'village']); //Mamampang
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73085, 'regionable_type'=>'village']); //Mappilawing
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73086, 'regionable_type'=>'village']); //Pa Bentengan
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73087, 'regionable_type'=>'village']); //Pa Bumbungan
                DB::table('regionables')->insert(['region_id'=>4954, 'regionable_id'=>73088, 'regionable_type'=>'village']); //Parangloe
            DB::table('regions')->insert(['id'=>4955, 'parent'=>4951, 'code'=>'9245', 'type'=>'districts', 'name'=>'Districts 9245, City 924, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4955, 'regionable_id'=>6383, 'regionable_type'=>'districts']); //Bissappu
            DB::table('regionables')->insert(['region_id'=>4955, 'regionable_id'=>6384, 'regionable_type'=>'districts']); //Sinoa
            DB::table('regionables')->insert(['region_id'=>4955, 'regionable_id'=>6385, 'regionable_type'=>'districts']); //Uluere
                DB::table('regions')->insert(['id'=>4956, 'parent'=>4955, 'code'=>'92451', 'type'=>'village', 'name'=>'Village 92451, Districts 9245, City 924, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73089, 'regionable_type'=>'village']); //Bonto Atu
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73090, 'regionable_type'=>'village']); //Bonto Cinde
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73091, 'regionable_type'=>'village']); //Bonto Jai
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73092, 'regionable_type'=>'village']); //Bonto Jaya
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73093, 'regionable_type'=>'village']); //Bonto Langkasa
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73094, 'regionable_type'=>'village']); //Bonto Lebang
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73095, 'regionable_type'=>'village']); //Bonto Loe
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73096, 'regionable_type'=>'village']); //Bonto Manai
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73097, 'regionable_type'=>'village']); //Bonto Rita
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73098, 'regionable_type'=>'village']); //Bonto Salluang
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73099, 'regionable_type'=>'village']); //Bonto Sunggu
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73100, 'regionable_type'=>'village']); //Bonto Bulaeng
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73101, 'regionable_type'=>'village']); //Bonto Karaeng
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73102, 'regionable_type'=>'village']); //Bonto Maccini
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73103, 'regionable_type'=>'village']); //Bonto Majannang
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73104, 'regionable_type'=>'village']); //Bonto Matene
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73105, 'regionable_type'=>'village']); //Bonto Tiro
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73106, 'regionable_type'=>'village']); //Bonto Daeng
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73107, 'regionable_type'=>'village']); //Bonto Lojong
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73108, 'regionable_type'=>'village']); //Bonto Marannu
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73109, 'regionable_type'=>'village']); //Bonto Rannu
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73110, 'regionable_type'=>'village']); //Bonto Tallasa
                DB::table('regionables')->insert(['region_id'=>4956, 'regionable_id'=>73111, 'regionable_type'=>'village']); //Bonto Tangnga
            DB::table('regions')->insert(['id'=>4957, 'parent'=>4951, 'code'=>'9246', 'type'=>'districts', 'name'=>'Districts 9246, City 924, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4957, 'regionable_id'=>6386, 'regionable_type'=>'districts']); //Gantarang Keke (gantareng Keke)
            DB::table('regionables')->insert(['region_id'=>4957, 'regionable_id'=>6387, 'regionable_type'=>'districts']); //Tompobulu
            DB::table('regionables')->insert(['region_id'=>4957, 'regionable_id'=>6388, 'regionable_type'=>'districts']); //Pajukukang
                DB::table('regions')->insert(['id'=>4958, 'parent'=>4957, 'code'=>'92461', 'type'=>'village', 'name'=>'Village 92461, Districts 9246, City 924, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73112, 'regionable_type'=>'village']); //Bajiminasa
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73113, 'regionable_type'=>'village']); //Gantarangkeke
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73114, 'regionable_type'=>'village']); //Kaloling
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73115, 'regionable_type'=>'village']); //Layoa
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73116, 'regionable_type'=>'village']); //Tanahloe
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73117, 'regionable_type'=>'village']); //Tombolo
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73118, 'regionable_type'=>'village']); //Balumbung
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73119, 'regionable_type'=>'village']); //Banyorang
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73120, 'regionable_type'=>'village']); //Bonto Tappalang
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73121, 'regionable_type'=>'village']); //Bonto-bontoa
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73122, 'regionable_type'=>'village']); //Campaga
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73123, 'regionable_type'=>'village']); //Ereng-ereng
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73124, 'regionable_type'=>'village']); //Labbo
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73125, 'regionable_type'=>'village']); //Lembang Gantarangkeke
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73126, 'regionable_type'=>'village']); //Pattallassang
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73127, 'regionable_type'=>'village']); //Pattaneteang
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73128, 'regionable_type'=>'village']); //Baruga
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73129, 'regionable_type'=>'village']); //Batu Karaeng
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73130, 'regionable_type'=>'village']); //Biangkeke
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73131, 'regionable_type'=>'village']); //Biangloe
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73132, 'regionable_type'=>'village']); //Borongloe
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73133, 'regionable_type'=>'village']); //Lumpangan
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73134, 'regionable_type'=>'village']); //Nipa-nipa
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73135, 'regionable_type'=>'village']); //Pajukukang
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73136, 'regionable_type'=>'village']); //Papanloe
                DB::table('regionables')->insert(['region_id'=>4958, 'regionable_id'=>73137, 'regionable_type'=>'village']); //Rappoa
        DB::table('regions')->insert(['id'=>4959, 'parent'=>4642, 'code'=>'925', 'type'=>'city', 'name'=>'City 925, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4959, 'regionable_id'=>393, 'regionable_type'=>'city']); //Jeneponto regencies
        DB::table('regionables')->insert(['region_id'=>4959, 'regionable_id'=>395, 'regionable_type'=>'city']); //Bulukumba regencies
            DB::table('regions')->insert(['id'=>4960, 'parent'=>4959, 'code'=>'9251', 'type'=>'districts', 'name'=>'Districts 9251, City 925, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4960, 'regionable_id'=>6372, 'regionable_type'=>'districts']); //Rumbia
            DB::table('regionables')->insert(['region_id'=>4960, 'regionable_id'=>6389, 'regionable_type'=>'districts']); //Ujung Bulu
            DB::table('regionables')->insert(['region_id'=>4960, 'regionable_id'=>6390, 'regionable_type'=>'districts']); //Kindang
                DB::table('regions')->insert(['id'=>4961, 'parent'=>4960, 'code'=>'92517', 'type'=>'village', 'name'=>'Village 92517, Districts 9251, City 925, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73145, 'regionable_type'=>'village']); //Caile
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73147, 'regionable_type'=>'village']); //Anrihua
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73148, 'regionable_type'=>'village']); //Balibo
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73149, 'regionable_type'=>'village']); //Benteng Palioi
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73150, 'regionable_type'=>'village']); //Borong Rappoa
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73151, 'regionable_type'=>'village']); //Garuntungan
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73152, 'regionable_type'=>'village']); //Kahayya
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73153, 'regionable_type'=>'village']); //Kindang
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73154, 'regionable_type'=>'village']); //Mattirowalie
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73155, 'regionable_type'=>'village']); //Oro Gading
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73156, 'regionable_type'=>'village']); //Sipaenre
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73157, 'regionable_type'=>'village']); //Somba Palioli
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73158, 'regionable_type'=>'village']); //Sopa
                DB::table('regionables')->insert(['region_id'=>4961, 'regionable_id'=>73159, 'regionable_type'=>'village']); //Tamaona
            DB::table('regions')->insert(['id'=>4962, 'parent'=>4959, 'code'=>'9255', 'type'=>'districts', 'name'=>'Districts 9255, City 925, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4962, 'regionable_id'=>6391, 'regionable_type'=>'districts']); //Rilau Ale
            DB::table('regionables')->insert(['region_id'=>4962, 'regionable_id'=>6392, 'regionable_type'=>'districts']); //Bulukumba (bulukumpa)
                DB::table('regions')->insert(['id'=>4963, 'parent'=>4962, 'code'=>'92552', 'type'=>'village', 'name'=>'Village 92552, Districts 9255, City 925, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73160, 'regionable_type'=>'village']); //Anrang
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73161, 'regionable_type'=>'village']); //Bajiminasa
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73162, 'regionable_type'=>'village']); //Batukaropa
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73163, 'regionable_type'=>'village']); //Bonto Matene
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73164, 'regionable_type'=>'village']); //Bontobangun
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73165, 'regionable_type'=>'village']); //Bontoharu
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73166, 'regionable_type'=>'village']); //Bontolohe
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73167, 'regionable_type'=>'village']); //Bontomanai
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73168, 'regionable_type'=>'village']); //Bulolohe
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73169, 'regionable_type'=>'village']); //Karama
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73170, 'regionable_type'=>'village']); //Palampang
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73171, 'regionable_type'=>'village']); //Pangalloang
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73172, 'regionable_type'=>'village']); //Swatani
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73173, 'regionable_type'=>'village']); //Tanah Harapan
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73174, 'regionable_type'=>'village']); //Topanda
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73175, 'regionable_type'=>'village']); //Balang Pesoang
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73176, 'regionable_type'=>'village']); //Balang Taroang
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73177, 'regionable_type'=>'village']); //Ballasaraja
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73178, 'regionable_type'=>'village']); //Baruga Riattang
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73179, 'regionable_type'=>'village']); //Barugae
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73180, 'regionable_type'=>'village']); //Batulohe
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73181, 'regionable_type'=>'village']); //Bonto Bulaeng
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73182, 'regionable_type'=>'village']); //Bonto Minasa
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73183, 'regionable_type'=>'village']); //Bontomangiring
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73184, 'regionable_type'=>'village']); //Bulo-bulo
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73185, 'regionable_type'=>'village']); //Jawi - Jawi
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73186, 'regionable_type'=>'village']); //Jojjolo
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73187, 'regionable_type'=>'village']); //Kambuno
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73188, 'regionable_type'=>'village']); //Salassae
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73189, 'regionable_type'=>'village']); //Sapo Bonto
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73190, 'regionable_type'=>'village']); //Tanete
                DB::table('regionables')->insert(['region_id'=>4963, 'regionable_id'=>73191, 'regionable_type'=>'village']); //Tibona
            DB::table('regions')->insert(['id'=>4964, 'parent'=>4959, 'code'=>'9256', 'type'=>'districts', 'name'=>'Districts 9256, City 925, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4964, 'regionable_id'=>6393, 'regionable_type'=>'districts']); //Gantorang/gantarang (gangking)
                DB::table('regions')->insert(['id'=>4965, 'parent'=>4964, 'code'=>'92561', 'type'=>'village', 'name'=>'Village 92561, Districts 9256, City 925, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73192, 'regionable_type'=>'village']); //Barombong
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73193, 'regionable_type'=>'village']); //Benteng Gatareng
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73194, 'regionable_type'=>'village']); //Benteng Malewang
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73195, 'regionable_type'=>'village']); //Bialo
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73196, 'regionable_type'=>'village']); //Bonto Macinna
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73197, 'regionable_type'=>'village']); //Bonto Sunggu
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73198, 'regionable_type'=>'village']); //Bontomasila
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73199, 'regionable_type'=>'village']); //Bontonyeleng
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73200, 'regionable_type'=>'village']); //Bontoraja
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73201, 'regionable_type'=>'village']); //Bukit Harapan
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73202, 'regionable_type'=>'village']); //Bukit Tinggi
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73203, 'regionable_type'=>'village']); //Dampang
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73204, 'regionable_type'=>'village']); //Gattareng
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73205, 'regionable_type'=>'village']); //Jalanjang
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73206, 'regionable_type'=>'village']); //Mariorennu
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73207, 'regionable_type'=>'village']); //Mattekko
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73208, 'regionable_type'=>'village']); //Padang
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73209, 'regionable_type'=>'village']); //Paenre Lompoe
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73210, 'regionable_type'=>'village']); //Palambarae
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73211, 'regionable_type'=>'village']); //Polewali
                DB::table('regionables')->insert(['region_id'=>4965, 'regionable_id'=>73212, 'regionable_type'=>'village']); //Taccorong
            DB::table('regions')->insert(['id'=>4966, 'parent'=>4959, 'code'=>'9257', 'type'=>'districts', 'name'=>'Districts 9257, City 925, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4966, 'regionable_id'=>6372, 'regionable_type'=>'districts']); //Rumbia
            DB::table('regionables')->insert(['region_id'=>4966, 'regionable_id'=>6394, 'regionable_type'=>'districts']); //Bonto Bahari
            DB::table('regionables')->insert(['region_id'=>4966, 'regionable_id'=>6395, 'regionable_type'=>'districts']); //Bontotiro
            DB::table('regionables')->insert(['region_id'=>4966, 'regionable_id'=>6396, 'regionable_type'=>'districts']); //Hero Lange-lange (herlang)
            DB::table('regionables')->insert(['region_id'=>4966, 'regionable_id'=>6397, 'regionable_type'=>'districts']); //Kajang
                DB::table('regions')->insert(['id'=>4967, 'parent'=>4966, 'code'=>'92574', 'type'=>'village', 'name'=>'Village 92574, Districts 9257, City 925, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73242, 'regionable_type'=>'village']); //Batunilamung
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73243, 'regionable_type'=>'village']); //Bonto Baji
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73244, 'regionable_type'=>'village']); //Bonto Biraeng
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73245, 'regionable_type'=>'village']); //Bontorannu
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73246, 'regionable_type'=>'village']); //Laikang
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73247, 'regionable_type'=>'village']); //Lembang
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73248, 'regionable_type'=>'village']); //Lembanglohe
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73249, 'regionable_type'=>'village']); //Lembanna
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73250, 'regionable_type'=>'village']); //Lolisang
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73251, 'regionable_type'=>'village']); //Malleleng
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73252, 'regionable_type'=>'village']); //Mattoanging
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73253, 'regionable_type'=>'village']); //Pantama
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73254, 'regionable_type'=>'village']); //Pattiroang
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73255, 'regionable_type'=>'village']); //Possi Tanah
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73256, 'regionable_type'=>'village']); //Sangkala
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73257, 'regionable_type'=>'village']); //Sapanang
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73258, 'regionable_type'=>'village']); //Tambangan
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73259, 'regionable_type'=>'village']); //Tanah Jaya
                DB::table('regionables')->insert(['region_id'=>4967, 'regionable_id'=>73260, 'regionable_type'=>'village']); //Tanah Towa
        DB::table('regions')->insert(['id'=>4968, 'parent'=>4642, 'code'=>'926', 'type'=>'city', 'name'=>'City 926, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4968, 'regionable_id'=>384, 'regionable_type'=>'city']); //Sinjai regencies
        DB::table('regionables')->insert(['region_id'=>4968, 'regionable_id'=>395, 'regionable_type'=>'city']); //Bulukumba regencies
            DB::table('regions')->insert(['id'=>4969, 'parent'=>4968, 'code'=>'9266', 'type'=>'districts', 'name'=>'Districts 9266, City 926, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4969, 'regionable_id'=>6252, 'regionable_type'=>'districts']); //Sinjai Selatan
            DB::table('regionables')->insert(['region_id'=>4969, 'regionable_id'=>6253, 'regionable_type'=>'districts']); //Sinjai Borong
            DB::table('regionables')->insert(['region_id'=>4969, 'regionable_id'=>6398, 'regionable_type'=>'districts']); //Ujung Loe
                DB::table('regions')->insert(['id'=>4970, 'parent'=>4969, 'code'=>'92661', 'type'=>'village', 'name'=>'Village 92661, Districts 9266, City 926, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71811, 'regionable_type'=>'village']); //Alenangka
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71812, 'regionable_type'=>'village']); //Aska
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71813, 'regionable_type'=>'village']); //Bulu Kamase
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71814, 'regionable_type'=>'village']); //Gareccing
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71815, 'regionable_type'=>'village']); //Palae
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71816, 'regionable_type'=>'village']); //Palangka
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71817, 'regionable_type'=>'village']); //Polewali
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71818, 'regionable_type'=>'village']); //Puncak
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71819, 'regionable_type'=>'village']); //Sangiasseri
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71820, 'regionable_type'=>'village']); //Songing
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>71821, 'regionable_type'=>'village']); //Talle
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73261, 'regionable_type'=>'village']); //Balleanging (balleangin)
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73262, 'regionable_type'=>'village']); //Balong
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73263, 'regionable_type'=>'village']); //Bijawang
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73264, 'regionable_type'=>'village']); //Dannuang
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73265, 'regionable_type'=>'village']); //Garanta
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73266, 'regionable_type'=>'village']); //Lonrong
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73267, 'regionable_type'=>'village']); //Manjalling
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73268, 'regionable_type'=>'village']); //Manyampa
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73269, 'regionable_type'=>'village']); //Paccaramengang
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73270, 'regionable_type'=>'village']); //Padang Loang
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73271, 'regionable_type'=>'village']); //Salemba
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73272, 'regionable_type'=>'village']); //Seppang
                DB::table('regionables')->insert(['region_id'=>4970, 'regionable_id'=>73273, 'regionable_type'=>'village']); //Tamatto
        DB::table('regions')->insert(['id'=>4971, 'parent'=>4642, 'code'=>'927', 'type'=>'city', 'name'=>'City 927, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4971, 'regionable_id'=>375, 'regionable_type'=>'city']); //Bone regencies
        DB::table('regionables')->insert(['region_id'=>4971, 'regionable_id'=>376, 'regionable_type'=>'city']); //Maros regencies
            DB::table('regions')->insert(['id'=>4972, 'parent'=>4971, 'code'=>'9275', 'type'=>'districts', 'name'=>'Districts 9275, City 927, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4972, 'regionable_id'=>6139, 'regionable_type'=>'districts']); //Kahu
            DB::table('regionables')->insert(['region_id'=>4972, 'regionable_id'=>6142, 'regionable_type'=>'districts']); //Tellu Siattinge
            DB::table('regionables')->insert(['region_id'=>4972, 'regionable_id'=>6143, 'regionable_type'=>'districts']); //Dua Boccoe
            DB::table('regionables')->insert(['region_id'=>4972, 'regionable_id'=>6144, 'regionable_type'=>'districts']); //Cenrana
            DB::table('regionables')->insert(['region_id'=>4972, 'regionable_id'=>6145, 'regionable_type'=>'districts']); //Amali
            DB::table('regionables')->insert(['region_id'=>4972, 'regionable_id'=>6146, 'regionable_type'=>'districts']); //Ajangale
            DB::table('regionables')->insert(['region_id'=>4972, 'regionable_id'=>6176, 'regionable_type'=>'districts']); //Cenrana
                DB::table('regions')->insert(['id'=>4973, 'parent'=>4972, 'code'=>'92754', 'type'=>'village', 'name'=>'Village 92754, Districts 9275, City 927, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70686, 'regionable_type'=>'village']); //Cenrana
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70760, 'regionable_type'=>'village']); //Ajallasse
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70761, 'regionable_type'=>'village']); //Awang Cengrana / Cenrana
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70762, 'regionable_type'=>'village']); //Cenrana
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70763, 'regionable_type'=>'village']); //Labonge (lebbongnge)
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70764, 'regionable_type'=>'village']); //Labotto
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70765, 'regionable_type'=>'village']); //Laoni
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70766, 'regionable_type'=>'village']); //Latonro
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70767, 'regionable_type'=>'village']); //Naga Uleng
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70768, 'regionable_type'=>'village']); //Pacubbe
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70769, 'regionable_type'=>'village']); //Pallae
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70770, 'regionable_type'=>'village']); //Pallime
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70771, 'regionable_type'=>'village']); //Panyiwi
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70772, 'regionable_type'=>'village']); //Pusungnge
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70773, 'regionable_type'=>'village']); //Ujung Tanah
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70774, 'regionable_type'=>'village']); //Watang Ta
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>70775, 'regionable_type'=>'village']); //Watu
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>71116, 'regionable_type'=>'village']); //Baji Pamai
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>71117, 'regionable_type'=>'village']); //Cenrana Baru
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>71118, 'regionable_type'=>'village']); //Labuaja
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>71119, 'regionable_type'=>'village']); //Laiya
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>71120, 'regionable_type'=>'village']); //Lebbotengngae
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>71121, 'regionable_type'=>'village']); //Limam Poccoe
                DB::table('regionables')->insert(['region_id'=>4973, 'regionable_id'=>71122, 'regionable_type'=>'village']); //Rompe Gading
        DB::table('regions')->insert(['id'=>4974, 'parent'=>4642, 'code'=>'928', 'type'=>'city', 'name'=>'City 928, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4974, 'regionable_id'=>396, 'regionable_type'=>'city']); //Selayar (kepulauan Selayar) regencies
            DB::table('regions')->insert(['id'=>4975, 'parent'=>4974, 'code'=>'9281', 'type'=>'districts', 'name'=>'Districts 9281, City 928, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4975, 'regionable_id'=>6399, 'regionable_type'=>'districts']); //Bontoharu
            DB::table('regionables')->insert(['region_id'=>4975, 'regionable_id'=>6400, 'regionable_type'=>'districts']); //Pasimassunggu
            DB::table('regionables')->insert(['region_id'=>4975, 'regionable_id'=>6401, 'regionable_type'=>'districts']); //Benteng
                DB::table('regions')->insert(['id'=>4976, 'parent'=>4975, 'code'=>'92812', 'type'=>'village', 'name'=>'Village 92812, Districts 9281, City 928, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4976, 'regionable_id'=>73289, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>4976, 'regionable_id'=>73290, 'regionable_type'=>'village']); //Benteng Selatan
                DB::table('regionables')->insert(['region_id'=>4976, 'regionable_id'=>73291, 'regionable_type'=>'village']); //Benteng Utara
            DB::table('regions')->insert(['id'=>4977, 'parent'=>4974, 'code'=>'9285', 'type'=>'districts', 'name'=>'Districts 9285, City 928, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4977, 'regionable_id'=>6402, 'regionable_type'=>'districts']); //Bontomanai
            DB::table('regionables')->insert(['region_id'=>4977, 'regionable_id'=>6403, 'regionable_type'=>'districts']); //Buki
            DB::table('regionables')->insert(['region_id'=>4977, 'regionable_id'=>6404, 'regionable_type'=>'districts']); //Bontomatene
            DB::table('regionables')->insert(['region_id'=>4977, 'regionable_id'=>6405, 'regionable_type'=>'districts']); //Bontosikuyu
                DB::table('regions')->insert(['id'=>4978, 'parent'=>4977, 'code'=>'92855', 'type'=>'village', 'name'=>'Village 92855, Districts 9285, City 928, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73321, 'regionable_type'=>'village']); //Appatanah
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73322, 'regionable_type'=>'village']); //Binanga Sombaiya
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73323, 'regionable_type'=>'village']); //Harapan
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73324, 'regionable_type'=>'village']); //Khusus Bahuluang
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73325, 'regionable_type'=>'village']); //Laiyolo
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73326, 'regionable_type'=>'village']); //Laiyolo Baru
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73327, 'regionable_type'=>'village']); //Lantimbongan
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73328, 'regionable_type'=>'village']); //Lowa
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73329, 'regionable_type'=>'village']); //Patikarya
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73330, 'regionable_type'=>'village']); //Patilereng
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73331, 'regionable_type'=>'village']); //Polassi
                DB::table('regionables')->insert(['region_id'=>4978, 'regionable_id'=>73332, 'regionable_type'=>'village']); //Tambolongan
            DB::table('regions')->insert(['id'=>4979, 'parent'=>4974, 'code'=>'9286', 'type'=>'districts', 'name'=>'Districts 9286, City 928, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4979, 'regionable_id'=>6400, 'regionable_type'=>'districts']); //Pasimassunggu
            DB::table('regionables')->insert(['region_id'=>4979, 'regionable_id'=>6406, 'regionable_type'=>'districts']); //Takabonerate
            DB::table('regionables')->insert(['region_id'=>4979, 'regionable_id'=>6407, 'regionable_type'=>'districts']); //Pasimasunggu Timur
            DB::table('regionables')->insert(['region_id'=>4979, 'regionable_id'=>6408, 'regionable_type'=>'districts']); //Pasimarannu
            DB::table('regionables')->insert(['region_id'=>4979, 'regionable_id'=>6409, 'regionable_type'=>'districts']); //Pasilambena
                DB::table('regions')->insert(['id'=>4980, 'parent'=>4979, 'code'=>'92863', 'type'=>'village', 'name'=>'Village 92863, Districts 9286, City 928, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4980, 'regionable_id'=>73356, 'regionable_type'=>'village']); //Garaupa
                DB::table('regionables')->insert(['region_id'=>4980, 'regionable_id'=>73357, 'regionable_type'=>'village']); //Garaupa Raya
                DB::table('regionables')->insert(['region_id'=>4980, 'regionable_id'=>73358, 'regionable_type'=>'village']); //Kalaotoa
                DB::table('regionables')->insert(['region_id'=>4980, 'regionable_id'=>73359, 'regionable_type'=>'village']); //Karumpa
                DB::table('regionables')->insert(['region_id'=>4980, 'regionable_id'=>73360, 'regionable_type'=>'village']); //Lembang Matene
                DB::table('regionables')->insert(['region_id'=>4980, 'regionable_id'=>73361, 'regionable_type'=>'village']); //Pulo Madu
        DB::table('regions')->insert(['id'=>4981, 'parent'=>4642, 'code'=>'929', 'type'=>'city', 'name'=>'City 929, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4981, 'regionable_id'=>388, 'regionable_type'=>'city']); //Luwu Utara regencies
        DB::table('regionables')->insert(['region_id'=>4981, 'regionable_id'=>391, 'regionable_type'=>'city']); //Luwu Timur regencies
            DB::table('regions')->insert(['id'=>4982, 'parent'=>4981, 'code'=>'9293', 'type'=>'districts', 'name'=>'Districts 9293, City 929, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4982, 'regionable_id'=>6350, 'regionable_type'=>'districts']); //Malili
                DB::table('regions')->insert(['id'=>4983, 'parent'=>4982, 'code'=>'92932', 'type'=>'village', 'name'=>'Village 92932, Districts 9293, City 929, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4983, 'regionable_id'=>72735, 'regionable_type'=>'village']); //Baruga
                DB::table('regions')->insert(['id'=>4984, 'parent'=>4982, 'code'=>'92933', 'type'=>'village', 'name'=>'Village 92933, Districts 9293, City 929, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4984, 'regionable_id'=>72736, 'regionable_type'=>'village']); //Balantang
                DB::table('regions')->insert(['id'=>4985, 'parent'=>4982, 'code'=>'92935', 'type'=>'village', 'name'=>'Village 92935, Districts 9293, City 929, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4985, 'regionable_id'=>72737, 'regionable_type'=>'village']); //Laskap
                DB::table('regions')->insert(['id'=>4986, 'parent'=>4982, 'code'=>'92936', 'type'=>'village', 'name'=>'Village 92936, Districts 9293, City 929, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4986, 'regionable_id'=>72738, 'regionable_type'=>'village']); //Puncak Indah
                DB::table('regions')->insert(['id'=>4987, 'parent'=>4982, 'code'=>'92937', 'type'=>'village', 'name'=>'Village 92937, Districts 9293, City 929, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4987, 'regionable_id'=>72739, 'regionable_type'=>'village']); //Ussu
            DB::table('regions')->insert(['id'=>4988, 'parent'=>4981, 'code'=>'9297', 'type'=>'districts', 'name'=>'Districts 9297, City 929, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4988, 'regionable_id'=>6351, 'regionable_type'=>'districts']); //Wotu
            DB::table('regionables')->insert(['region_id'=>4988, 'regionable_id'=>6352, 'regionable_type'=>'districts']); //Tomoni Timur
            DB::table('regionables')->insert(['region_id'=>4988, 'regionable_id'=>6353, 'regionable_type'=>'districts']); //Tomoni
            DB::table('regionables')->insert(['region_id'=>4988, 'regionable_id'=>6354, 'regionable_type'=>'districts']); //Kalaena
            DB::table('regionables')->insert(['region_id'=>4988, 'regionable_id'=>6355, 'regionable_type'=>'districts']); //Mangkutana
            DB::table('regionables')->insert(['region_id'=>4988, 'regionable_id'=>6356, 'regionable_type'=>'districts']); //Burau
                DB::table('regions')->insert(['id'=>4989, 'parent'=>4988, 'code'=>'92975', 'type'=>'village', 'name'=>'Village 92975, Districts 9297, City 929, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72801, 'regionable_type'=>'village']); //Asana
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72802, 'regionable_type'=>'village']); //Batu Putih
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72803, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72804, 'regionable_type'=>'village']); //Bonepute
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72805, 'regionable_type'=>'village']); //Burau
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72806, 'regionable_type'=>'village']); //Burau Pantai
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72807, 'regionable_type'=>'village']); //Cendana
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72808, 'regionable_type'=>'village']); //Harapan
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72809, 'regionable_type'=>'village']); //Jalajja
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72810, 'regionable_type'=>'village']); //Kalatiri
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72811, 'regionable_type'=>'village']); //Lagego
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72812, 'regionable_type'=>'village']); //Lambarese
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72813, 'regionable_type'=>'village']); //Lanosi
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72814, 'regionable_type'=>'village']); //Laro
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72815, 'regionable_type'=>'village']); //Lauwo
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72816, 'regionable_type'=>'village']); //Lewonu
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72817, 'regionable_type'=>'village']); //Lumbewe
                DB::table('regionables')->insert(['region_id'=>4989, 'regionable_id'=>72818, 'regionable_type'=>'village']); //Mabonta
            DB::table('regions')->insert(['id'=>4990, 'parent'=>4981, 'code'=>'9298', 'type'=>'districts', 'name'=>'Districts 9298, City 929, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4990, 'regionable_id'=>6350, 'regionable_type'=>'districts']); //Malili
            DB::table('regionables')->insert(['region_id'=>4990, 'regionable_id'=>6357, 'regionable_type'=>'districts']); //Towuti
            DB::table('regionables')->insert(['region_id'=>4990, 'regionable_id'=>6358, 'regionable_type'=>'districts']); //Wasuponda
            DB::table('regionables')->insert(['region_id'=>4990, 'regionable_id'=>6359, 'regionable_type'=>'districts']); //Nuha
            DB::table('regionables')->insert(['region_id'=>4990, 'regionable_id'=>6360, 'regionable_type'=>'districts']); //Angkona
                DB::table('regions')->insert(['id'=>4991, 'parent'=>4990, 'code'=>'92985', 'type'=>'village', 'name'=>'Village 92985, Districts 9298, City 929, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72848, 'regionable_type'=>'village']); //Balirejo
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72849, 'regionable_type'=>'village']); //Lamaeto
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72850, 'regionable_type'=>'village']); //Maliwowo
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72851, 'regionable_type'=>'village']); //Mantadulu
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72852, 'regionable_type'=>'village']); //Solo
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72853, 'regionable_type'=>'village']); //Tampinna
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72854, 'regionable_type'=>'village']); //Taripa
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72855, 'regionable_type'=>'village']); //Tawakua
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72856, 'regionable_type'=>'village']); //Wanasari
                DB::table('regionables')->insert(['region_id'=>4991, 'regionable_id'=>72857, 'regionable_type'=>'village']); //Watangpanua

        //Sulawesi Tengah
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>29, 'regionable_type'=>'province']); //Sulawesi Tengah
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>397, 'regionable_type'=>'city']); //Palu city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>398, 'regionable_type'=>'city']); //Sigi regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>399, 'regionable_type'=>'city']); //Donggala regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>400, 'regionable_type'=>'city']); //Parigi Moutong regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>401, 'regionable_type'=>'city']); //Toli-toli regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>402, 'regionable_type'=>'city']); //Buol regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>403, 'regionable_type'=>'city']); //Poso regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>404, 'regionable_type'=>'city']); //Tojo Una-una regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>405, 'regionable_type'=>'city']); //Banggai regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>406, 'regionable_type'=>'city']); //Banggai Kepulauan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>407, 'regionable_type'=>'city']); //Morowali regencies

        DB::table('regions')->insert(['id'=>4992, 'parent'=>4642, 'code'=>'941', 'type'=>'city', 'name'=>'City 941, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4992, 'regionable_id'=>397, 'regionable_type'=>'city']); //Palu city
        DB::table('regionables')->insert(['region_id'=>4992, 'regionable_id'=>398, 'regionable_type'=>'city']); //Sigi regencies
            DB::table('regions')->insert(['id'=>4993, 'parent'=>4992, 'code'=>'9411', 'type'=>'districts', 'name'=>'Districts 9411, City 941, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4993, 'regionable_id'=>6410, 'regionable_type'=>'districts']); //Palu Timur
            DB::table('regionables')->insert(['region_id'=>4993, 'regionable_id'=>6411, 'regionable_type'=>'districts']); //Mantikulore
            DB::table('regionables')->insert(['region_id'=>4993, 'regionable_id'=>6418, 'regionable_type'=>'districts']); //Pipikoro
                DB::table('regions')->insert(['id'=>4994, 'parent'=>4993, 'code'=>'94112', 'type'=>'village', 'name'=>'Village 94112, Districts 9411, City 941, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73407, 'regionable_type'=>'village']); //Banasu
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73408, 'regionable_type'=>'village']); //Kalamanta
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73409, 'regionable_type'=>'village']); //Kantewu
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73410, 'regionable_type'=>'village']); //Kantewu Ii
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73411, 'regionable_type'=>'village']); //Koja
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73412, 'regionable_type'=>'village']); //Lawe
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73413, 'regionable_type'=>'village']); //Lone Basa
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73414, 'regionable_type'=>'village']); //Mamu
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73415, 'regionable_type'=>'village']); //Mapahi
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73416, 'regionable_type'=>'village']); //Morui (murui)
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73417, 'regionable_type'=>'village']); //Onu
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73418, 'regionable_type'=>'village']); //Parelea
                DB::table('regionables')->insert(['region_id'=>4994, 'regionable_id'=>73419, 'regionable_type'=>'village']); //Peana
        DB::table('regions')->insert(['id'=>4995, 'parent'=>4642, 'code'=>'942', 'type'=>'city', 'name'=>'City 942, Province 9']);
        DB::table('regionables')->insert(['region_id'=>4995, 'regionable_id'=>397, 'regionable_type'=>'city']); //Palu city
            DB::table('regions')->insert(['id'=>4996, 'parent'=>4995, 'code'=>'9422', 'type'=>'districts', 'name'=>'Districts 9422, City 942, Province 9']);
            DB::table('regionables')->insert(['region_id'=>4996, 'regionable_id'=>6414, 'regionable_type'=>'districts']); //Palu Barat
            DB::table('regionables')->insert(['region_id'=>4996, 'regionable_id'=>6415, 'regionable_type'=>'districts']); //Tatanga
            DB::table('regionables')->insert(['region_id'=>4996, 'regionable_id'=>6416, 'regionable_type'=>'districts']); //Ulujadi
                DB::table('regions')->insert(['id'=>4997, 'parent'=>4996, 'code'=>'94226', 'type'=>'village', 'name'=>'Village 94226, Districts 9422, City 942, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4997, 'regionable_id'=>73389, 'regionable_type'=>'village']); //Balaroa
                DB::table('regionables')->insert(['region_id'=>4997, 'regionable_id'=>73396, 'regionable_type'=>'village']); //Donggala Kodi
                DB::table('regions')->insert(['id'=>4998, 'parent'=>4996, 'code'=>'94227', 'type'=>'village', 'name'=>'Village 94227, Districts 9422, City 942, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4998, 'regionable_id'=>73397, 'regionable_type'=>'village']); //Kabonena
                DB::table('regionables')->insert(['region_id'=>4998, 'regionable_id'=>73398, 'regionable_type'=>'village']); //Silae
                DB::table('regions')->insert(['id'=>4999, 'parent'=>4996, 'code'=>'94228', 'type'=>'village', 'name'=>'Village 94228, Districts 9422, City 942, Province 9']);
                DB::table('regionables')->insert(['region_id'=>4999, 'regionable_id'=>73399, 'regionable_type'=>'village']); //Buluri
                DB::table('regionables')->insert(['region_id'=>4999, 'regionable_id'=>73400, 'regionable_type'=>'village']); //Tipo
                DB::table('regions')->insert(['id'=>5000, 'parent'=>4996, 'code'=>'94229', 'type'=>'village', 'name'=>'Village 94229, Districts 9422, City 942, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5000, 'regionable_id'=>73401, 'regionable_type'=>'village']); //Watusampu
            DB::table('regions')->insert(['id'=>5001, 'parent'=>4995, 'code'=>'9423', 'type'=>'districts', 'name'=>'Districts 9423, City 942, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5001, 'regionable_id'=>6410, 'regionable_type'=>'districts']); //Palu Timur
            DB::table('regionables')->insert(['region_id'=>5001, 'regionable_id'=>6411, 'regionable_type'=>'districts']); //Mantikulore
            DB::table('regionables')->insert(['region_id'=>5001, 'regionable_id'=>6415, 'regionable_type'=>'districts']); //Tatanga
            DB::table('regionables')->insert(['region_id'=>5001, 'regionable_id'=>6417, 'regionable_type'=>'districts']); //Palu Selatan
                DB::table('regions')->insert(['id'=>5002, 'parent'=>5001, 'code'=>'94231', 'type'=>'village', 'name'=>'Village 94231, Districts 9423, City 942, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5002, 'regionable_id'=>73402, 'regionable_type'=>'village']); //Birobuli Selatan
                DB::table('regionables')->insert(['region_id'=>5002, 'regionable_id'=>73403, 'regionable_type'=>'village']); //Birobuli Utara
                DB::table('regions')->insert(['id'=>5003, 'parent'=>5001, 'code'=>'94232', 'type'=>'village', 'name'=>'Village 94232, Districts 9423, City 942, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5003, 'regionable_id'=>73404, 'regionable_type'=>'village']); //Petobo
                DB::table('regions')->insert(['id'=>5004, 'parent'=>5001, 'code'=>'94236', 'type'=>'village', 'name'=>'Village 94236, Districts 9423, City 942, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5004, 'regionable_id'=>73405, 'regionable_type'=>'village']); //Tatura Selatan
                DB::table('regionables')->insert(['region_id'=>5004, 'regionable_id'=>73406, 'regionable_type'=>'village']); //Tatura Utara
        DB::table('regions')->insert(['id'=>5005, 'parent'=>4642, 'code'=>'943', 'type'=>'city', 'name'=>'City 943, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5005, 'regionable_id'=>398, 'regionable_type'=>'city']); //Sigi regencies
        DB::table('regionables')->insert(['region_id'=>5005, 'regionable_id'=>399, 'regionable_type'=>'city']); //Donggala regencies
            DB::table('regions')->insert(['id'=>5006, 'parent'=>5005, 'code'=>'9435', 'type'=>'districts', 'name'=>'Districts 9435, City 943, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6433, 'regionable_type'=>'districts']); //Banawa Selatan
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6434, 'regionable_type'=>'districts']); //Banawa
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6435, 'regionable_type'=>'districts']); //Banawa Tengah
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6436, 'regionable_type'=>'districts']); //Tanantovea
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6437, 'regionable_type'=>'districts']); //Labuan
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6438, 'regionable_type'=>'districts']); //Sindue Tobata
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6439, 'regionable_type'=>'districts']); //Sindue
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6440, 'regionable_type'=>'districts']); //Sindue Tombusabora
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6441, 'regionable_type'=>'districts']); //Sirenja
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6442, 'regionable_type'=>'districts']); //Balaesang Tanjung
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6443, 'regionable_type'=>'districts']); //Balaesang
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6444, 'regionable_type'=>'districts']); //Sojol
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6445, 'regionable_type'=>'districts']); //Sojol Utara
            DB::table('regionables')->insert(['region_id'=>5006, 'regionable_id'=>6446, 'regionable_type'=>'districts']); //Damsol (dampelas Sojol)
                DB::table('regions')->insert(['id'=>5007, 'parent'=>5006, 'code'=>'94356', 'type'=>'village', 'name'=>'Village 94356, Districts 9435, City 943, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73679, 'regionable_type'=>'village']); //Balukang
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73680, 'regionable_type'=>'village']); //Balukang Ii
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73681, 'regionable_type'=>'village']); //Bou
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73682, 'regionable_type'=>'village']); //Bukit Harapan
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73683, 'regionable_type'=>'village']); //Panggalasiang (pangalaseang)
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73684, 'regionable_type'=>'village']); //Samalili
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73685, 'regionable_type'=>'village']); //Siboalong (siboang)
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73686, 'regionable_type'=>'village']); //Siwalempu
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73687, 'regionable_type'=>'village']); //Tonggolobibi
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73688, 'regionable_type'=>'village']); //Bengkoli
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73689, 'regionable_type'=>'village']); //Lenju
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73690, 'regionable_type'=>'village']); //Ogoamas I
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73691, 'regionable_type'=>'village']); //Ogoamas Ii
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73692, 'regionable_type'=>'village']); //Pesik
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73693, 'regionable_type'=>'village']); //Budimukti
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73694, 'regionable_type'=>'village']); //Bukit Harapan
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73695, 'regionable_type'=>'village']); //Karyamukti
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73696, 'regionable_type'=>'village']); //Kembayang (kambayang)
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73697, 'regionable_type'=>'village']); //Lemba Mukti
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73698, 'regionable_type'=>'village']); //Malonas
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73699, 'regionable_type'=>'village']); //Panii
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73700, 'regionable_type'=>'village']); //Parisan Agung
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73701, 'regionable_type'=>'village']); //Ponggerang
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73702, 'regionable_type'=>'village']); //Rerang
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73703, 'regionable_type'=>'village']); //Sabang
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73704, 'regionable_type'=>'village']); //Sioyong
                DB::table('regionables')->insert(['region_id'=>5007, 'regionable_id'=>73705, 'regionable_type'=>'village']); //Talaga
            DB::table('regions')->insert(['id'=>5008, 'parent'=>5005, 'code'=>'9436', 'type'=>'districts', 'name'=>'Districts 9436, City 943, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6419, 'regionable_type'=>'districts']); //Dolo Barat
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6420, 'regionable_type'=>'districts']); //Dolo Selatan
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6421, 'regionable_type'=>'districts']); //Dolo
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6422, 'regionable_type'=>'districts']); //Kinovaru
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6423, 'regionable_type'=>'districts']); //Marawola
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6424, 'regionable_type'=>'districts']); //Marawola Barat
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6425, 'regionable_type'=>'districts']); //Lindu
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6426, 'regionable_type'=>'districts']); //Kulawi
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6427, 'regionable_type'=>'districts']); //Kulawi Selatan
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6428, 'regionable_type'=>'districts']); //Palolo
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6429, 'regionable_type'=>'districts']); //Sigi Biromaru
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6430, 'regionable_type'=>'districts']); //Nokilalaki
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6431, 'regionable_type'=>'districts']); //Gumbasa
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6432, 'regionable_type'=>'districts']); //Tanambulava
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6447, 'regionable_type'=>'districts']); //Pinembani
            DB::table('regionables')->insert(['region_id'=>5008, 'regionable_id'=>6448, 'regionable_type'=>'districts']); //Rio Pakava (riopakawa)
                DB::table('regions')->insert(['id'=>5009, 'parent'=>5008, 'code'=>'94362', 'type'=>'village', 'name'=>'Village 94362, Districts 9436, City 943, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73452, 'regionable_type'=>'village']); //Balane
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73453, 'regionable_type'=>'village']); //Bolobia
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73454, 'regionable_type'=>'village']); //Daenggune
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73455, 'regionable_type'=>'village']); //Doda
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73456, 'regionable_type'=>'village']); //Kalora
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73457, 'regionable_type'=>'village']); //Kanuna
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73458, 'regionable_type'=>'village']); //Porame
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73459, 'regionable_type'=>'village']); //Rondingo
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73460, 'regionable_type'=>'village']); //Uwemanje
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73461, 'regionable_type'=>'village']); //Baliase
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73462, 'regionable_type'=>'village']); //Beka
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73463, 'regionable_type'=>'village']); //Binangga
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73464, 'regionable_type'=>'village']); //Bomba
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73465, 'regionable_type'=>'village']); //Boyabaliase
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73466, 'regionable_type'=>'village']); //Lebanu
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73467, 'regionable_type'=>'village']); //Padende
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73468, 'regionable_type'=>'village']); //Sibedi
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73469, 'regionable_type'=>'village']); //Sunju
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73470, 'regionable_type'=>'village']); //Tinggede
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73471, 'regionable_type'=>'village']); //Tinggede Selatan
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73472, 'regionable_type'=>'village']); //Dombu
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73473, 'regionable_type'=>'village']); //Lewara
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73474, 'regionable_type'=>'village']); //Matantimali
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73475, 'regionable_type'=>'village']); //Ongulero
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73476, 'regionable_type'=>'village']); //Panasibaja
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73477, 'regionable_type'=>'village']); //Soi
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73478, 'regionable_type'=>'village']); //Taipanggabe
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73479, 'regionable_type'=>'village']); //Wayu
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73480, 'regionable_type'=>'village']); //Wiapore
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73481, 'regionable_type'=>'village']); //Wugaga
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73706, 'regionable_type'=>'village']); //Bambakaenu
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73707, 'regionable_type'=>'village']); //Bambakanini
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73708, 'regionable_type'=>'village']); //Dangaraa
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73709, 'regionable_type'=>'village']); //Gimpubia
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73710, 'regionable_type'=>'village']); //Kanagalongga
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73711, 'regionable_type'=>'village']); //Karavia
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73712, 'regionable_type'=>'village']); //Palintuma
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73713, 'regionable_type'=>'village']); //Tamodo
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73714, 'regionable_type'=>'village']); //Tavanggeli
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73715, 'regionable_type'=>'village']); //Bonemarawa
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73716, 'regionable_type'=>'village']); //Bukit Indah
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73717, 'regionable_type'=>'village']); //Lalundu
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73718, 'regionable_type'=>'village']); //Mbulava
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73719, 'regionable_type'=>'village']); //Minti Makmur
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73720, 'regionable_type'=>'village']); //Ngovi Vacava
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73721, 'regionable_type'=>'village']); //Panca Mukti
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73722, 'regionable_type'=>'village']); //Pantalobete
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73723, 'regionable_type'=>'village']); //Polando Jaya
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73724, 'regionable_type'=>'village']); //Polanto Jaya
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73725, 'regionable_type'=>'village']); //Rio Mukti
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73726, 'regionable_type'=>'village']); //Tinauka
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73727, 'regionable_type'=>'village']); //Toviora (towiora)
                DB::table('regionables')->insert(['region_id'=>5009, 'regionable_id'=>73728, 'regionable_type'=>'village']); //Vacava
        DB::table('regions')->insert(['id'=>5010, 'parent'=>4642, 'code'=>'944', 'type'=>'city', 'name'=>'City 944, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5010, 'regionable_id'=>400, 'regionable_type'=>'city']); //Parigi Moutong regencies
            DB::table('regions')->insert(['id'=>5011, 'parent'=>5010, 'code'=>'9447', 'type'=>'districts', 'name'=>'Districts 9447, City 944, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6449, 'regionable_type'=>'districts']); //Parigi Barat
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6450, 'regionable_type'=>'districts']); //Parigi Utara
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6451, 'regionable_type'=>'districts']); //Parigi
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6452, 'regionable_type'=>'districts']); //Parigi Tengah
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6453, 'regionable_type'=>'districts']); //Parigi Selatan
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6454, 'regionable_type'=>'districts']); //Torue
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6455, 'regionable_type'=>'districts']); //Balinggi
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6456, 'regionable_type'=>'districts']); //Sausu
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6457, 'regionable_type'=>'districts']); //Ampibabo
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6458, 'regionable_type'=>'districts']); //Kasimbar
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6459, 'regionable_type'=>'districts']); //Siniu
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6460, 'regionable_type'=>'districts']); //Toribulu
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6461, 'regionable_type'=>'districts']); //Tinombo
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6462, 'regionable_type'=>'districts']); //Tinombo Selatan
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6463, 'regionable_type'=>'districts']); //Tomini
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6464, 'regionable_type'=>'districts']); //Palasa
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6465, 'regionable_type'=>'districts']); //Mepanga
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6466, 'regionable_type'=>'districts']); //Moutong
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6467, 'regionable_type'=>'districts']); //Bolano Lambunu/lambulu
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6468, 'regionable_type'=>'districts']); //Bolano
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6469, 'regionable_type'=>'districts']); //Taopa
            DB::table('regionables')->insert(['region_id'=>5011, 'regionable_id'=>6470, 'regionable_type'=>'districts']); //Ongka Malino
                DB::table('regions')->insert(['id'=>5012, 'parent'=>5011, 'code'=>'94479', 'type'=>'village', 'name'=>'Village 94479, Districts 9447, City 944, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73912, 'regionable_type'=>'village']); //Kota Raya Selatan
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73913, 'regionable_type'=>'village']); //Kotaraya Barat
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73914, 'regionable_type'=>'village']); //Malalan
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73915, 'regionable_type'=>'village']); //Maranti
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73916, 'regionable_type'=>'village']); //Ogomolos
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73917, 'regionable_type'=>'village']); //Aedan Raya
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73918, 'regionable_type'=>'village']); //Bolaung Olonggata
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73919, 'regionable_type'=>'village']); //Gio
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73920, 'regionable_type'=>'village']); //Labuan
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73921, 'regionable_type'=>'village']); //Lobu
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73922, 'regionable_type'=>'village']); //Mbelang Mbelang
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73923, 'regionable_type'=>'village']); //Moutong Barat
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73924, 'regionable_type'=>'village']); //Moutong Tengah
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73925, 'regionable_type'=>'village']); //Moutong Timur
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73926, 'regionable_type'=>'village']); //Moutong Utara
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73927, 'regionable_type'=>'village']); //Olonggata
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73928, 'regionable_type'=>'village']); //Pande
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73929, 'regionable_type'=>'village']); //Pandelalap (lalap)
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73930, 'regionable_type'=>'village']); //Salepae
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73931, 'regionable_type'=>'village']); //Salum Pengut
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73932, 'regionable_type'=>'village']); //Sejoli
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73933, 'regionable_type'=>'village']); //Tuladenggi Pantai
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73934, 'regionable_type'=>'village']); //Anutapura
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73935, 'regionable_type'=>'village']); //Bukit Makmur
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73936, 'regionable_type'=>'village']); //Ganongol Sari
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73937, 'regionable_type'=>'village']); //Gunungsari
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73938, 'regionable_type'=>'village']); //Kotanagaya
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73939, 'regionable_type'=>'village']); //Lambunu
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73940, 'regionable_type'=>'village']); //Lambunu Timur
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73941, 'regionable_type'=>'village']); //Lambunu Utara
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73942, 'regionable_type'=>'village']); //Margapura
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73943, 'regionable_type'=>'village']); //Ogorandu
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73944, 'regionable_type'=>'village']); //Petunasugi
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73945, 'regionable_type'=>'village']); //Siendeng
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73946, 'regionable_type'=>'village']); //Tirtanagaya
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73947, 'regionable_type'=>'village']); //Wanagading
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73948, 'regionable_type'=>'village']); //Bajo
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73949, 'regionable_type'=>'village']); //Beringin Jaya
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73950, 'regionable_type'=>'village']); //Bolano
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73951, 'regionable_type'=>'village']); //Bolano Barat
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73952, 'regionable_type'=>'village']); //Bolano Tengah
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73953, 'regionable_type'=>'village']); //Bolano Utara
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73954, 'regionable_type'=>'village']); //Lembah Bomban
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73955, 'regionable_type'=>'village']); //Sidomukti
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73956, 'regionable_type'=>'village']); //Sritabaang
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73957, 'regionable_type'=>'village']); //Wanamukti
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73958, 'regionable_type'=>'village']); //Wanamukti Barat
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73959, 'regionable_type'=>'village']); //Wanamukti Utara
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73960, 'regionable_type'=>'village']); //Bilalea
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73961, 'regionable_type'=>'village']); //Karya Abadi
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73962, 'regionable_type'=>'village']); //Karya Agung
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73963, 'regionable_type'=>'village']); //Nunurantai
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73964, 'regionable_type'=>'village']); //Palapi
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73965, 'regionable_type'=>'village']); //Paria
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73966, 'regionable_type'=>'village']); //Taopa
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73967, 'regionable_type'=>'village']); //Taopa Barat
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73968, 'regionable_type'=>'village']); //Taopa Utara
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73969, 'regionable_type'=>'village']); //Tompo
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73970, 'regionable_type'=>'village']); //Tuladenggi Sibatang
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73971, 'regionable_type'=>'village']); //Bosagon Jaya
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73972, 'regionable_type'=>'village']); //Karya Mandiri
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73973, 'regionable_type'=>'village']); //Kayu Jati
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73974, 'regionable_type'=>'village']); //Lambanau
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73975, 'regionable_type'=>'village']); //Malino
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73976, 'regionable_type'=>'village']); //Ongka
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73977, 'regionable_type'=>'village']); //Ongka Trimuspasari
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73978, 'regionable_type'=>'village']); //Persatuan Sejati
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73979, 'regionable_type'=>'village']); //Persatuan Utara
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73980, 'regionable_type'=>'village']); //Santigi
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73981, 'regionable_type'=>'village']); //Tabolobolo
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73982, 'regionable_type'=>'village']); //Tinombala
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73983, 'regionable_type'=>'village']); //Tinombala Barat
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73984, 'regionable_type'=>'village']); //Tinombala Jaya
                DB::table('regionables')->insert(['region_id'=>5012, 'regionable_id'=>73985, 'regionable_type'=>'village']); //Tinombala Sejati
        DB::table('regions')->insert(['id'=>5013, 'parent'=>4642, 'code'=>'945', 'type'=>'city', 'name'=>'City 945, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5013, 'regionable_id'=>401, 'regionable_type'=>'city']); //Toli-toli regencies
        DB::table('regionables')->insert(['region_id'=>5013, 'regionable_id'=>402, 'regionable_type'=>'city']); //Buol regencies
            DB::table('regions')->insert(['id'=>5014, 'parent'=>5013, 'code'=>'9456', 'type'=>'districts', 'name'=>'Districts 9456, City 945, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6478, 'regionable_type'=>'districts']); //Galang
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6479, 'regionable_type'=>'districts']); //Tolitoli Utara
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6480, 'regionable_type'=>'districts']); //Dako Pamean
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6481, 'regionable_type'=>'districts']); //Karamat
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6482, 'regionable_type'=>'districts']); //Bukal
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6483, 'regionable_type'=>'districts']); //Biau
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6484, 'regionable_type'=>'districts']); //Lakea (lipunoto)
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6485, 'regionable_type'=>'districts']); //Bokat
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6486, 'regionable_type'=>'districts']); //Tiloan
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6487, 'regionable_type'=>'districts']); //Momunu
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6488, 'regionable_type'=>'districts']); //Bunobogu
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6489, 'regionable_type'=>'districts']); //Paleleh
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6490, 'regionable_type'=>'districts']); //Paleleh Barat
            DB::table('regionables')->insert(['region_id'=>5014, 'regionable_id'=>6491, 'regionable_type'=>'districts']); //Gadung
                DB::table('regions')->insert(['id'=>5015, 'parent'=>5014, 'code'=>'94568', 'type'=>'village', 'name'=>'Village 94568, Districts 9456, City 945, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74162, 'regionable_type'=>'village']); //Batu Rata
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74163, 'regionable_type'=>'village']); //Dopalak
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74164, 'regionable_type'=>'village']); //Dutuno
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74165, 'regionable_type'=>'village']); //Kuala Besar
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74166, 'regionable_type'=>'village']); //Lilito
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74167, 'regionable_type'=>'village']); //Lintidu
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74168, 'regionable_type'=>'village']); //Mulangato
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74169, 'regionable_type'=>'village']); //Paleleh
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74170, 'regionable_type'=>'village']); //Pionoto
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74171, 'regionable_type'=>'village']); //Talaki
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74172, 'regionable_type'=>'village']); //Tolau
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74173, 'regionable_type'=>'village']); //Umu
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74174, 'regionable_type'=>'village']); //Bodi
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74175, 'regionable_type'=>'village']); //Harmoni
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74176, 'regionable_type'=>'village']); //Hulubalang
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74177, 'regionable_type'=>'village']); //Lunguto
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74178, 'regionable_type'=>'village']); //Oyak
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74179, 'regionable_type'=>'village']); //Tayokan
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74180, 'regionable_type'=>'village']); //Timbulon
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74181, 'regionable_type'=>'village']); //Bulagidun
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74182, 'regionable_type'=>'village']); //Bulagidun Tanjung
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74183, 'regionable_type'=>'village']); //Diapatih
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74184, 'regionable_type'=>'village']); //Labuton
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74185, 'regionable_type'=>'village']); //Lipubogu
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74186, 'regionable_type'=>'village']); //Lokodidi
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74187, 'regionable_type'=>'village']); //Lokodoka
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74188, 'regionable_type'=>'village']); //Matinan
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74189, 'regionable_type'=>'village']); //Nandu
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74190, 'regionable_type'=>'village']); //Pandangan
                DB::table('regionables')->insert(['region_id'=>5015, 'regionable_id'=>74191, 'regionable_type'=>'village']); //Taat
        DB::table('regions')->insert(['id'=>5016, 'parent'=>4642, 'code'=>'946', 'type'=>'city', 'name'=>'City 946, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5016, 'regionable_id'=>403, 'regionable_type'=>'city']); //Poso regencies
        DB::table('regionables')->insert(['region_id'=>5016, 'regionable_id'=>404, 'regionable_type'=>'city']); //Tojo Una-una regencies
            DB::table('regions')->insert(['id'=>5017, 'parent'=>5016, 'code'=>'9468', 'type'=>'districts', 'name'=>'Districts 9468, City 946, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5017, 'regionable_id'=>6511, 'regionable_type'=>'districts']); //Tojo
            DB::table('regionables')->insert(['region_id'=>5017, 'regionable_id'=>6512, 'regionable_type'=>'districts']); //Tojo Barat
            DB::table('regionables')->insert(['region_id'=>5017, 'regionable_id'=>6513, 'regionable_type'=>'districts']); //Ulu Bongka
            DB::table('regionables')->insert(['region_id'=>5017, 'regionable_id'=>6514, 'regionable_type'=>'districts']); //Ampana Kota
            DB::table('regionables')->insert(['region_id'=>5017, 'regionable_id'=>6515, 'regionable_type'=>'districts']); //Togean
            DB::table('regionables')->insert(['region_id'=>5017, 'regionable_id'=>6516, 'regionable_type'=>'districts']); //Ampana Tete
                DB::table('regions')->insert(['id'=>5018, 'parent'=>5017, 'code'=>'94684', 'type'=>'village', 'name'=>'Village 94684, Districts 9468, City 946, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74431, 'regionable_type'=>'village']); //Balanggala
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74432, 'regionable_type'=>'village']); //Balingara
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74433, 'regionable_type'=>'village']); //Bantuga
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74434, 'regionable_type'=>'village']); //Borone
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74435, 'regionable_type'=>'village']); //Bulan Jaya
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74436, 'regionable_type'=>'village']); //Giri Mulyo
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74437, 'regionable_type'=>'village']); //Kajulangko
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74438, 'regionable_type'=>'village']); //Longge
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74439, 'regionable_type'=>'village']); //Mantangisi
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74440, 'regionable_type'=>'village']); //Mpoa
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74441, 'regionable_type'=>'village']); //Pusungi
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74442, 'regionable_type'=>'village']); //Sabo
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74443, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74444, 'regionable_type'=>'village']); //Tampabatu
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74445, 'regionable_type'=>'village']); //Tete Atas
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74446, 'regionable_type'=>'village']); //Tete Bawah
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74447, 'regionable_type'=>'village']); //Uebone
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74448, 'regionable_type'=>'village']); //Uemakuni
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74449, 'regionable_type'=>'village']); //Urundaka
                DB::table('regionables')->insert(['region_id'=>5018, 'regionable_id'=>74450, 'regionable_type'=>'village']); //Wanasari
            DB::table('regions')->insert(['id'=>5019, 'parent'=>5016, 'code'=>'9469', 'type'=>'districts', 'name'=>'Districts 9469, City 946, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5019, 'regionable_id'=>6517, 'regionable_type'=>'districts']); //Una - Una
            DB::table('regionables')->insert(['region_id'=>5019, 'regionable_id'=>6518, 'regionable_type'=>'districts']); //Walea Besar
            DB::table('regionables')->insert(['region_id'=>5019, 'regionable_id'=>6519, 'regionable_type'=>'districts']); //Walea Kepulauan
                DB::table('regions')->insert(['id'=>5020, 'parent'=>5019, 'code'=>'94692', 'type'=>'village', 'name'=>'Village 94692, Districts 9469, City 946, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74470, 'regionable_type'=>'village']); //Biga
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74471, 'regionable_type'=>'village']); //Katogop (kotogop)
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74472, 'regionable_type'=>'village']); //Kondongan
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74473, 'regionable_type'=>'village']); //Malapo
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74474, 'regionable_type'=>'village']); //Pasokan
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74475, 'regionable_type'=>'village']); //Salinggoha
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74476, 'regionable_type'=>'village']); //Tingki
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74477, 'regionable_type'=>'village']); //Tongidon
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74478, 'regionable_type'=>'village']); //Dolong A (dolonga)
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74479, 'regionable_type'=>'village']); //Dolong B
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74480, 'regionable_type'=>'village']); //Kabalutan
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74481, 'regionable_type'=>'village']); //Kadoda
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74482, 'regionable_type'=>'village']); //Kalia
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74483, 'regionable_type'=>'village']); //Kolami (kolampi)
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74484, 'regionable_type'=>'village']); //Loe
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74485, 'regionable_type'=>'village']); //Luok
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74486, 'regionable_type'=>'village']); //Malenge
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74487, 'regionable_type'=>'village']); //Olilan
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74488, 'regionable_type'=>'village']); //Pautu
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74489, 'regionable_type'=>'village']); //Popolii (popolii)
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74490, 'regionable_type'=>'village']); //Tiga Pulau
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74491, 'regionable_type'=>'village']); //Tumotok
                DB::table('regionables')->insert(['region_id'=>5020, 'regionable_id'=>74492, 'regionable_type'=>'village']); //Tutung
        DB::table('regions')->insert(['id'=>5021, 'parent'=>4642, 'code'=>'947', 'type'=>'city', 'name'=>'City 947, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5021, 'regionable_id'=>405, 'regionable_type'=>'city']); //Banggai regencies
        DB::table('regionables')->insert(['region_id'=>5021, 'regionable_id'=>406, 'regionable_type'=>'city']); //Banggai Kepulauan regencies
            DB::table('regions')->insert(['id'=>5022, 'parent'=>5021, 'code'=>'9471', 'type'=>'districts', 'name'=>'Districts 9471, City 947, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5022, 'regionable_id'=>6520, 'regionable_type'=>'districts']); //Luwuk Utara
            DB::table('regionables')->insert(['region_id'=>5022, 'regionable_id'=>6521, 'regionable_type'=>'districts']); //Luwuk
            DB::table('regionables')->insert(['region_id'=>5022, 'regionable_id'=>6522, 'regionable_type'=>'districts']); //Luwuk Selatan
            DB::table('regionables')->insert(['region_id'=>5022, 'regionable_id'=>6543, 'regionable_type'=>'districts']); //Tinangkung Selatan
                DB::table('regions')->insert(['id'=>5023, 'parent'=>5022, 'code'=>'94714', 'type'=>'village', 'name'=>'Village 94714, Districts 9471, City 947, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5023, 'regionable_id'=>74830, 'regionable_type'=>'village']); //Kampung Baru
        DB::table('regions')->insert(['id'=>5024, 'parent'=>4642, 'code'=>'948', 'type'=>'city', 'name'=>'City 948, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5024, 'regionable_id'=>406, 'regionable_type'=>'city']); //Banggai Kepulauan regencies
            DB::table('regions')->insert(['id'=>5025, 'parent'=>5024, 'code'=>'9488', 'type'=>'districts', 'name'=>'Districts 9488, City 948, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6543, 'regionable_type'=>'districts']); //Tinangkung Selatan
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6544, 'regionable_type'=>'districts']); //Buko Selatan
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6545, 'regionable_type'=>'districts']); //Buko
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6546, 'regionable_type'=>'districts']); //Bulagi Selatan
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6547, 'regionable_type'=>'districts']); //Bulagi
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6548, 'regionable_type'=>'districts']); //Bulagi Utara
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6549, 'regionable_type'=>'districts']); //Peling Tengah
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6550, 'regionable_type'=>'districts']); //Liang
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6551, 'regionable_type'=>'districts']); //Totikum (totikung)
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6552, 'regionable_type'=>'districts']); //Totikum Selatan
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6553, 'regionable_type'=>'districts']); //Tinangkung
            DB::table('regionables')->insert(['region_id'=>5025, 'regionable_id'=>6554, 'regionable_type'=>'districts']); //Tinangkung Utara
                DB::table('regions')->insert(['id'=>5026, 'parent'=>5025, 'code'=>'94885', 'type'=>'village', 'name'=>'Village 94885, Districts 9488, City 948, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74831, 'regionable_type'=>'village']); //Bobu
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74832, 'regionable_type'=>'village']); //Gansal
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74833, 'regionable_type'=>'village']); //Mansamat A
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74834, 'regionable_type'=>'village']); //Mansamat B
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74835, 'regionable_type'=>'village']); //Paisumosoni
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74836, 'regionable_type'=>'village']); //Tinangkung
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74837, 'regionable_type'=>'village']); //Tobing
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74838, 'regionable_type'=>'village']); //Tobungin
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74957, 'regionable_type'=>'village']); //Ambelang
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74958, 'regionable_type'=>'village']); //Baka
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74959, 'regionable_type'=>'village']); //Bakalan
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74960, 'regionable_type'=>'village']); //Bongganan
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74961, 'regionable_type'=>'village']); //Bulungkobit
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74962, 'regionable_type'=>'village']); //Bungin
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74963, 'regionable_type'=>'village']); //Kautu
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74964, 'regionable_type'=>'village']); //Manggalai
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74965, 'regionable_type'=>'village']); //Saiyong
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74966, 'regionable_type'=>'village']); //Salakan
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74967, 'regionable_type'=>'village']); //Tompudau
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74968, 'regionable_type'=>'village']); //Bampanga
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74969, 'regionable_type'=>'village']); //Lalong
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74970, 'regionable_type'=>'village']); //Luk Sagu
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74971, 'regionable_type'=>'village']); //Palam
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74972, 'regionable_type'=>'village']); //Ponding-ponding
                DB::table('regionables')->insert(['region_id'=>5026, 'regionable_id'=>74973, 'regionable_type'=>'village']); //Tatakalai
            DB::table('regions')->insert(['id'=>5027, 'parent'=>5024, 'code'=>'9489', 'type'=>'districts', 'name'=>'Districts 9489, City 948, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5027, 'regionable_id'=>6555, 'regionable_type'=>'districts']); //Banggai Tengah
            DB::table('regionables')->insert(['region_id'=>5027, 'regionable_id'=>6556, 'regionable_type'=>'districts']); //Banggai Selatan
            DB::table('regionables')->insert(['region_id'=>5027, 'regionable_id'=>6557, 'regionable_type'=>'districts']); //Banggai Utara
            DB::table('regionables')->insert(['region_id'=>5027, 'regionable_id'=>6558, 'regionable_type'=>'districts']); //Banggai
            DB::table('regionables')->insert(['region_id'=>5027, 'regionable_id'=>6559, 'regionable_type'=>'districts']); //Labobo (lobangkurung)
            DB::table('regionables')->insert(['region_id'=>5027, 'regionable_id'=>6560, 'regionable_type'=>'districts']); //Bokan Kepulauan
            DB::table('regionables')->insert(['region_id'=>5027, 'regionable_id'=>6561, 'regionable_type'=>'districts']); //Bangkurung
                DB::table('regions')->insert(['id'=>5028, 'parent'=>5027, 'code'=>'94892', 'type'=>'village', 'name'=>'Village 94892, Districts 9489, City 948, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75004, 'regionable_type'=>'village']); //Alasan
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75005, 'regionable_type'=>'village']); //Bontosi
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75006, 'regionable_type'=>'village']); //Lalong
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75007, 'regionable_type'=>'village']); //Lipu Talas
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75008, 'regionable_type'=>'village']); //Lipulalongo
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75009, 'regionable_type'=>'village']); //Mansalean
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75010, 'regionable_type'=>'village']); //Padingkian
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75011, 'regionable_type'=>'village']); //Paisulamo
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75012, 'regionable_type'=>'village']); //Bolokut
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75013, 'regionable_type'=>'village']); //Bungin
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75014, 'regionable_type'=>'village']); //Kasuari
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75015, 'regionable_type'=>'village']); //Kaukes
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75016, 'regionable_type'=>'village']); //Keak
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75017, 'regionable_type'=>'village']); //Kokudang
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75018, 'regionable_type'=>'village']); //Mandel
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75019, 'regionable_type'=>'village']); //Mbuang Mbuang
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75020, 'regionable_type'=>'village']); //Minanga
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75021, 'regionable_type'=>'village']); //Ndindibung
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75022, 'regionable_type'=>'village']); //Nggasuang
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75023, 'regionable_type'=>'village']); //Paisubebe
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75024, 'regionable_type'=>'village']); //Panapat
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75025, 'regionable_type'=>'village']); //Sonit
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75026, 'regionable_type'=>'village']); //Timpaus
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75027, 'regionable_type'=>'village']); //Toropot
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75028, 'regionable_type'=>'village']); //Bone Bone
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75029, 'regionable_type'=>'village']); //Dungkean
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75030, 'regionable_type'=>'village']); //Kalupapi
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75031, 'regionable_type'=>'village']); //Kanari
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75032, 'regionable_type'=>'village']); //Lalong
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75033, 'regionable_type'=>'village']); //Lantibung
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75034, 'regionable_type'=>'village']); //Mbeleang
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75035, 'regionable_type'=>'village']); //Sasabobok
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75036, 'regionable_type'=>'village']); //Tabulang
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75037, 'regionable_type'=>'village']); //Tadiana Bungin
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75038, 'regionable_type'=>'village']); //Taduno
                DB::table('regionables')->insert(['region_id'=>5028, 'regionable_id'=>75039, 'regionable_type'=>'village']); //Togong Sagu
        DB::table('regions')->insert(['id'=>5029, 'parent'=>4642, 'code'=>'949', 'type'=>'city', 'name'=>'City 949, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5029, 'regionable_id'=>407, 'regionable_type'=>'city']); //Morowali regencies
            DB::table('regions')->insert(['id'=>5030, 'parent'=>5029, 'code'=>'9496', 'type'=>'districts', 'name'=>'Districts 9496, City 949, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5030, 'regionable_id'=>6562, 'regionable_type'=>'districts']); //Mori Atas
            DB::table('regionables')->insert(['region_id'=>5030, 'regionable_id'=>6563, 'regionable_type'=>'districts']); //Mori Utara
            DB::table('regionables')->insert(['region_id'=>5030, 'regionable_id'=>6564, 'regionable_type'=>'districts']); //Lembo
            DB::table('regionables')->insert(['region_id'=>5030, 'regionable_id'=>6565, 'regionable_type'=>'districts']); //Lembo Raya
                DB::table('regions')->insert(['id'=>5031, 'parent'=>5030, 'code'=>'94966', 'type'=>'village', 'name'=>'Village 94966, Districts 9496, City 949, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75062, 'regionable_type'=>'village']); //Beteleme
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75063, 'regionable_type'=>'village']); //Korobonde
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75064, 'regionable_type'=>'village']); //Korompeli
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75065, 'regionable_type'=>'village']); //Korow Alelo
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75066, 'regionable_type'=>'village']); //Korowou
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75067, 'regionable_type'=>'village']); //Kumpi
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75068, 'regionable_type'=>'village']); //Lembobaru
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75069, 'regionable_type'=>'village']); //Lemboroma
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75070, 'regionable_type'=>'village']); //Mora
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75071, 'regionable_type'=>'village']); //Tingkeao
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75072, 'regionable_type'=>'village']); //Tinompo
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75073, 'regionable_type'=>'village']); //Uluanso
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75074, 'regionable_type'=>'village']); //Waraa
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75075, 'regionable_type'=>'village']); //Wawopada
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75076, 'regionable_type'=>'village']); //Bintangor Mukti
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75077, 'regionable_type'=>'village']); //Dolupo Karya
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75078, 'regionable_type'=>'village']); //Jamor Jaya
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75079, 'regionable_type'=>'village']); //Lembobelala
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75080, 'regionable_type'=>'village']); //Mandula
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75081, 'regionable_type'=>'village']); //Pa\awaru
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75082, 'regionable_type'=>'village']); //Petumbea
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75083, 'regionable_type'=>'village']); //Po\ona
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75084, 'regionable_type'=>'village']); //Pontangoa
                DB::table('regionables')->insert(['region_id'=>5031, 'regionable_id'=>75085, 'regionable_type'=>'village']); //Ronta
            DB::table('regions')->insert(['id'=>5032, 'parent'=>5029, 'code'=>'9497', 'type'=>'districts', 'name'=>'Districts 9497, City 949, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6566, 'regionable_type'=>'districts']); //Petasia
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6567, 'regionable_type'=>'districts']); //Soyo Jaya
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6568, 'regionable_type'=>'districts']); //Petasia Timur
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6569, 'regionable_type'=>'districts']); //Petasia Barat
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6570, 'regionable_type'=>'districts']); //Bungku Utara
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6571, 'regionable_type'=>'districts']); //Mamosalato
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6572, 'regionable_type'=>'districts']); //Bungku Tengah
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6573, 'regionable_type'=>'districts']); //Bungku Timur
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6574, 'regionable_type'=>'districts']); //Bahodopi
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6575, 'regionable_type'=>'districts']); //Bungku Selatan
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6576, 'regionable_type'=>'districts']); //Bungku Pesisir
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6577, 'regionable_type'=>'districts']); //Menui Kepulauan
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6578, 'regionable_type'=>'districts']); //Bungku Barat
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6579, 'regionable_type'=>'districts']); //Bumi Raya
            DB::table('regionables')->insert(['region_id'=>5032, 'regionable_id'=>6580, 'regionable_type'=>'districts']); //Wita Ponda
                DB::table('regions')->insert(['id'=>5033, 'parent'=>5032, 'code'=>'94976', 'type'=>'village', 'name'=>'Village 94976, Districts 9497, City 949, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75266, 'regionable_type'=>'village']); //Ambunu
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75267, 'regionable_type'=>'village']); //Bahoea Reko Reko
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75268, 'regionable_type'=>'village']); //Larobenu
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75269, 'regionable_type'=>'village']); //Marga Mulya
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75270, 'regionable_type'=>'village']); //Tondo
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75271, 'regionable_type'=>'village']); //Topogaro (tofogaro)
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75272, 'regionable_type'=>'village']); //Uedago
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75273, 'regionable_type'=>'village']); //Umpanga
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75274, 'regionable_type'=>'village']); //Wata
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75275, 'regionable_type'=>'village']); //Wosu
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75276, 'regionable_type'=>'village']); //Atananga
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75277, 'regionable_type'=>'village']); //Bahonsuai
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75278, 'regionable_type'=>'village']); //Beringin Jaya
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75279, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75280, 'regionable_type'=>'village']); //Karaupa
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75281, 'regionable_type'=>'village']); //Lambelu
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75282, 'regionable_type'=>'village']); //Lasampi
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75283, 'regionable_type'=>'village']); //Limbo Makmur
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75284, 'regionable_type'=>'village']); //Parilangke
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75285, 'regionable_type'=>'village']); //Pebatae
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75286, 'regionable_type'=>'village']); //Pebotoa
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75287, 'regionable_type'=>'village']); //Samarenda
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75288, 'regionable_type'=>'village']); //Umbele
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75289, 'regionable_type'=>'village']); //Bumi Harapan
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75290, 'regionable_type'=>'village']); //Emea
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75291, 'regionable_type'=>'village']); //Lantula Jaya
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75292, 'regionable_type'=>'village']); //Moahino
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75293, 'regionable_type'=>'village']); //Puntari Makmur
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75294, 'regionable_type'=>'village']); //Sampeantaba
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75295, 'regionable_type'=>'village']); //Solonsa
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75296, 'regionable_type'=>'village']); //Solonsa Jaya
                DB::table('regionables')->insert(['region_id'=>5033, 'regionable_id'=>75297, 'regionable_type'=>'village']); //Ungkaya

        //Sulawesi Tenggara
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>30, 'regionable_type'=>'province']); //Sulawesi Tenggara
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>408, 'regionable_type'=>'city']); //Kendari city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>409, 'regionable_type'=>'city']); //Konawe regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>410, 'regionable_type'=>'city']); //Konawe Utara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>411, 'regionable_type'=>'city']); //Konawe Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>412, 'regionable_type'=>'city']); //Kolaka regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>413, 'regionable_type'=>'city']); //Muna regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>414, 'regionable_type'=>'city']); //Buton Utara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>415, 'regionable_type'=>'city']); //Bau-bau city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>416, 'regionable_type'=>'city']); //Buton regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>417, 'regionable_type'=>'city']); //Bombana regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>418, 'regionable_type'=>'city']); //Wakatobi regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>419, 'regionable_type'=>'city']); //Kolaka Utara regencies

        DB::table('regions')->insert(['id'=>5034, 'parent'=>4642, 'code'=>'931', 'type'=>'city', 'name'=>'City 931, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5034, 'regionable_id'=>408, 'regionable_type'=>'city']); //Kendari city
            DB::table('regions')->insert(['id'=>5035, 'parent'=>5034, 'code'=>'9311', 'type'=>'districts', 'name'=>'Districts 9311, City 931, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5035, 'regionable_id'=>6581, 'regionable_type'=>'districts']); //Mandonga
            DB::table('regionables')->insert(['region_id'=>5035, 'regionable_id'=>6582, 'regionable_type'=>'districts']); //Puuwatu
            DB::table('regionables')->insert(['region_id'=>5035, 'regionable_id'=>6583, 'regionable_type'=>'districts']); //Baruga
            DB::table('regionables')->insert(['region_id'=>5035, 'regionable_id'=>6584, 'regionable_type'=>'districts']); //Kadia
            DB::table('regionables')->insert(['region_id'=>5035, 'regionable_id'=>6585, 'regionable_type'=>'districts']); //Wua-wua
                DB::table('regions')->insert(['id'=>5036, 'parent'=>5035, 'code'=>'93117', 'type'=>'village', 'name'=>'Village 93117, Districts 9311, City 931, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5036, 'regionable_id'=>75314, 'regionable_type'=>'village']); //Kadia
                DB::table('regionables')->insert(['region_id'=>5036, 'regionable_id'=>75315, 'regionable_type'=>'village']); //Pondambea
                DB::table('regionables')->insert(['region_id'=>5036, 'regionable_id'=>75316, 'regionable_type'=>'village']); //Wowawanggu
                DB::table('regionables')->insert(['region_id'=>5036, 'regionable_id'=>75319, 'regionable_type'=>'village']); //Wua-wua
                DB::table('regions')->insert(['id'=>5037, 'parent'=>5035, 'code'=>'93118', 'type'=>'village', 'name'=>'Village 93118, Districts 9311, City 931, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5037, 'regionable_id'=>75317, 'regionable_type'=>'village']); //Anaiwoi
                DB::table('regionables')->insert(['region_id'=>5037, 'regionable_id'=>75318, 'regionable_type'=>'village']); //Bende
                DB::table('regionables')->insert(['region_id'=>5037, 'regionable_id'=>75320, 'regionable_type'=>'village']); //Anawai
                DB::table('regionables')->insert(['region_id'=>5037, 'regionable_id'=>75321, 'regionable_type'=>'village']); //Bonggoeya
                DB::table('regionables')->insert(['region_id'=>5037, 'regionable_id'=>75322, 'regionable_type'=>'village']); //Mataiwoi
            DB::table('regions')->insert(['id'=>5038, 'parent'=>5034, 'code'=>'9312', 'type'=>'districts', 'name'=>'Districts 9312, City 931, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5038, 'regionable_id'=>6586, 'regionable_type'=>'districts']); //Kendari
            DB::table('regionables')->insert(['region_id'=>5038, 'regionable_id'=>6587, 'regionable_type'=>'districts']); //Kendari Barat
                DB::table('regions')->insert(['id'=>5039, 'parent'=>5038, 'code'=>'93121', 'type'=>'village', 'name'=>'Village 93121, Districts 9312, City 931, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5039, 'regionable_id'=>75323, 'regionable_type'=>'village']); //Jati Mekar
                DB::table('regionables')->insert(['region_id'=>5039, 'regionable_id'=>75324, 'regionable_type'=>'village']); //Kampung Salo
                DB::table('regionables')->insert(['region_id'=>5039, 'regionable_id'=>75325, 'regionable_type'=>'village']); //Kessilampe
                DB::table('regionables')->insert(['region_id'=>5039, 'regionable_id'=>75326, 'regionable_type'=>'village']); //Purirano
                DB::table('regionables')->insert(['region_id'=>5039, 'regionable_id'=>75332, 'regionable_type'=>'village']); //Kemaraya
                DB::table('regionables')->insert(['region_id'=>5039, 'regionable_id'=>75333, 'regionable_type'=>'village']); //Watu-watu
                DB::table('regions')->insert(['id'=>5040, 'parent'=>5038, 'code'=>'93122', 'type'=>'village', 'name'=>'Village 93122, Districts 9312, City 931, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5040, 'regionable_id'=>75334, 'regionable_type'=>'village']); //Tipulu
                DB::table('regions')->insert(['id'=>5041, 'parent'=>5038, 'code'=>'93123', 'type'=>'village', 'name'=>'Village 93123, Districts 9312, City 931, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5041, 'regionable_id'=>75335, 'regionable_type'=>'village']); //Benu-benua
                DB::table('regionables')->insert(['region_id'=>5041, 'regionable_id'=>75336, 'regionable_type'=>'village']); //Punggaloba
                DB::table('regions')->insert(['id'=>5042, 'parent'=>5038, 'code'=>'93124', 'type'=>'village', 'name'=>'Village 93124, Districts 9312, City 931, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5042, 'regionable_id'=>75337, 'regionable_type'=>'village']); //Sodohoa
                DB::table('regions')->insert(['id'=>5043, 'parent'=>5038, 'code'=>'93127', 'type'=>'village', 'name'=>'Village 93127, Districts 9312, City 931, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5043, 'regionable_id'=>75329, 'regionable_type'=>'village']); //Kandai
                DB::table('regionables')->insert(['region_id'=>5043, 'regionable_id'=>75338, 'regionable_type'=>'village']); //Dapu-dapura
                DB::table('regionables')->insert(['region_id'=>5043, 'regionable_id'=>75339, 'regionable_type'=>'village']); //Lahundape
                DB::table('regionables')->insert(['region_id'=>5043, 'regionable_id'=>75340, 'regionable_type'=>'village']); //Sanua
        DB::table('regions')->insert(['id'=>5044, 'parent'=>4642, 'code'=>'932', 'type'=>'city', 'name'=>'City 932, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5044, 'regionable_id'=>408, 'regionable_type'=>'city']); //Kendari city
            DB::table('regions')->insert(['id'=>5045, 'parent'=>5044, 'code'=>'9323', 'type'=>'districts', 'name'=>'Districts 9323, City 932, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5045, 'regionable_id'=>6588, 'regionable_type'=>'districts']); //Poasia
            DB::table('regionables')->insert(['region_id'=>5045, 'regionable_id'=>6589, 'regionable_type'=>'districts']); //Kambu
            DB::table('regionables')->insert(['region_id'=>5045, 'regionable_id'=>6590, 'regionable_type'=>'districts']); //Abeli
                DB::table('regions')->insert(['id'=>5046, 'parent'=>5045, 'code'=>'93234', 'type'=>'village', 'name'=>'Village 93234, Districts 9323, City 932, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5046, 'regionable_id'=>75349, 'regionable_type'=>'village']); //Abeli
                DB::table('regionables')->insert(['region_id'=>5046, 'regionable_id'=>75350, 'regionable_type'=>'village']); //Anggalomelai (anggolomelai)
                DB::table('regionables')->insert(['region_id'=>5046, 'regionable_id'=>75351, 'regionable_type'=>'village']); //Benua Nirae
                DB::table('regionables')->insert(['region_id'=>5046, 'regionable_id'=>75352, 'regionable_type'=>'village']); //Bungkutoko
                DB::table('regionables')->insert(['region_id'=>5046, 'regionable_id'=>75353, 'regionable_type'=>'village']); //Lapulu
                DB::table('regionables')->insert(['region_id'=>5046, 'regionable_id'=>75354, 'regionable_type'=>'village']); //Puday (pudai)
                DB::table('regions')->insert(['id'=>5047, 'parent'=>5045, 'code'=>'93235', 'type'=>'village', 'name'=>'Village 93235, Districts 9323, City 932, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5047, 'regionable_id'=>75355, 'regionable_type'=>'village']); //Poasia
                DB::table('regionables')->insert(['region_id'=>5047, 'regionable_id'=>75356, 'regionable_type'=>'village']); //Talia
                DB::table('regions')->insert(['id'=>5048, 'parent'=>5045, 'code'=>'93236', 'type'=>'village', 'name'=>'Village 93236, Districts 9323, City 932, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5048, 'regionable_id'=>75357, 'regionable_type'=>'village']); //Nambo
                DB::table('regionables')->insert(['region_id'=>5048, 'regionable_id'=>75358, 'regionable_type'=>'village']); //Petoaha
                DB::table('regions')->insert(['id'=>5049, 'parent'=>5045, 'code'=>'93237', 'type'=>'village', 'name'=>'Village 93237, Districts 9323, City 932, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5049, 'regionable_id'=>75359, 'regionable_type'=>'village']); //Tobimeita
                DB::table('regions')->insert(['id'=>5050, 'parent'=>5045, 'code'=>'93238', 'type'=>'village', 'name'=>'Village 93238, Districts 9323, City 932, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5050, 'regionable_id'=>75360, 'regionable_type'=>'village']); //Sambuli
                DB::table('regionables')->insert(['region_id'=>5050, 'regionable_id'=>75361, 'regionable_type'=>'village']); //Tondonggeu
        DB::table('regions')->insert(['id'=>5051, 'parent'=>4642, 'code'=>'933', 'type'=>'city', 'name'=>'City 933, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5051, 'regionable_id'=>409, 'regionable_type'=>'city']); //Konawe regencies
        DB::table('regionables')->insert(['region_id'=>5051, 'regionable_id'=>410, 'regionable_type'=>'city']); //Konawe Utara regencies
        DB::table('regionables')->insert(['region_id'=>5051, 'regionable_id'=>411, 'regionable_type'=>'city']); //Konawe Selatan regencies
            DB::table('regions')->insert(['id'=>5052, 'parent'=>5051, 'code'=>'9339', 'type'=>'districts', 'name'=>'Districts 9339, City 933, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5052, 'regionable_id'=>6598, 'regionable_type'=>'districts']); //Wawonii Timur Laut
            DB::table('regionables')->insert(['region_id'=>5052, 'regionable_id'=>6599, 'regionable_type'=>'districts']); //Wawonii Selatan
            DB::table('regionables')->insert(['region_id'=>5052, 'regionable_id'=>6600, 'regionable_type'=>'districts']); //Wawonii Tengah
            DB::table('regionables')->insert(['region_id'=>5052, 'regionable_id'=>6601, 'regionable_type'=>'districts']); //Wawonii Barat
            DB::table('regionables')->insert(['region_id'=>5052, 'regionable_id'=>6602, 'regionable_type'=>'districts']); //Wawonii Tenggara
            DB::table('regionables')->insert(['region_id'=>5052, 'regionable_id'=>6603, 'regionable_type'=>'districts']); //Wawonii Utara
            DB::table('regionables')->insert(['region_id'=>5052, 'regionable_id'=>6604, 'regionable_type'=>'districts']); //Wawonii Timur
            DB::table('regionables')->insert(['region_id'=>5052, 'regionable_id'=>6631, 'regionable_type'=>'districts']); //Kolono
                DB::table('regions')->insert(['id'=>5053, 'parent'=>5052, 'code'=>'93395', 'type'=>'village', 'name'=>'Village 93395, Districts 9339, City 933, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75882, 'regionable_type'=>'village']); //Adinete
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75883, 'regionable_type'=>'village']); //Alosi
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75884, 'regionable_type'=>'village']); //Amolengu
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75885, 'regionable_type'=>'village']); //Ampera
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75886, 'regionable_type'=>'village']); //Awunio
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75887, 'regionable_type'=>'village']); //Batu Putih
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75888, 'regionable_type'=>'village']); //Kolono
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75889, 'regionable_type'=>'village']); //Lamapu
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75890, 'regionable_type'=>'village']); //Lambangi
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75891, 'regionable_type'=>'village']); //Lamotau
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75892, 'regionable_type'=>'village']); //Langgapulu
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75893, 'regionable_type'=>'village']); //Langgowala
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75894, 'regionable_type'=>'village']); //Mataiwoi
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75895, 'regionable_type'=>'village']); //Matandahi
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75896, 'regionable_type'=>'village']); //Meletumbu (meletumbo)
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75897, 'regionable_type'=>'village']); //Mondoe Jaya
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75898, 'regionable_type'=>'village']); //Ngapawali
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75899, 'regionable_type'=>'village']); //Puudongi
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75900, 'regionable_type'=>'village']); //Puupi
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75901, 'regionable_type'=>'village']); //Rambu-rambu
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75902, 'regionable_type'=>'village']); //Roda
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75903, 'regionable_type'=>'village']); //Rumba-rumba
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75904, 'regionable_type'=>'village']); //Sarandua
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75905, 'regionable_type'=>'village']); //Sawah
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75906, 'regionable_type'=>'village']); //Silea
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75907, 'regionable_type'=>'village']); //Tiraosu
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75908, 'regionable_type'=>'village']); //Torodale
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75909, 'regionable_type'=>'village']); //Tumbu-tumbu Jaya
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75910, 'regionable_type'=>'village']); //Ulunese
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75911, 'regionable_type'=>'village']); //Ulusena Jaya
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75912, 'regionable_type'=>'village']); //Wawoosu
                DB::table('regionables')->insert(['region_id'=>5053, 'regionable_id'=>75913, 'regionable_type'=>'village']); //Waworano
        DB::table('regions')->insert(['id'=>5054, 'parent'=>4642, 'code'=>'934', 'type'=>'city', 'name'=>'City 934, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5054, 'regionable_id'=>409, 'regionable_type'=>'city']); //Konawe regencies
            DB::table('regions')->insert(['id'=>5055, 'parent'=>5054, 'code'=>'9341', 'type'=>'districts', 'name'=>'Districts 9341, City 934, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5055, 'regionable_id'=>6605, 'regionable_type'=>'districts']); //Puriala
            DB::table('regionables')->insert(['region_id'=>5055, 'regionable_id'=>6606, 'regionable_type'=>'districts']); //Unaaha
            DB::table('regionables')->insert(['region_id'=>5055, 'regionable_id'=>6607, 'regionable_type'=>'districts']); //Anggaberi
                DB::table('regions')->insert(['id'=>5056, 'parent'=>5055, 'code'=>'93417', 'type'=>'village', 'name'=>'Village 93417, Districts 9341, City 934, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5056, 'regionable_id'=>75560, 'regionable_type'=>'village']); //Parauna
                DB::table('regionables')->insert(['region_id'=>5056, 'regionable_id'=>75561, 'regionable_type'=>'village']); //Toriki
                DB::table('regionables')->insert(['region_id'=>5056, 'regionable_id'=>75562, 'regionable_type'=>'village']); //Unaasi
                DB::table('regions')->insert(['id'=>5057, 'parent'=>5055, 'code'=>'93418', 'type'=>'village', 'name'=>'Village 93418, Districts 9341, City 934, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5057, 'regionable_id'=>75559, 'regionable_type'=>'village']); //Unaaha
                DB::table('regionables')->insert(['region_id'=>5057, 'regionable_id'=>75563, 'regionable_type'=>'village']); //Anggaberi
                DB::table('regions')->insert(['id'=>5058, 'parent'=>5055, 'code'=>'93419', 'type'=>'village', 'name'=>'Village 93419, Districts 9341, City 934, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5058, 'regionable_id'=>75564, 'regionable_type'=>'village']); //Andabia
                DB::table('regionables')->insert(['region_id'=>5058, 'regionable_id'=>75565, 'regionable_type'=>'village']); //Lawulo
            DB::table('regions')->insert(['id'=>5059, 'parent'=>5054, 'code'=>'9345', 'type'=>'districts', 'name'=>'Districts 9345, City 934, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5059, 'regionable_id'=>6608, 'regionable_type'=>'districts']); //Abuki
            DB::table('regionables')->insert(['region_id'=>5059, 'regionable_id'=>6609, 'regionable_type'=>'districts']); //Asinua
                DB::table('regions')->insert(['id'=>5060, 'parent'=>5059, 'code'=>'93452', 'type'=>'village', 'name'=>'Village 93452, Districts 9345, City 934, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75566, 'regionable_type'=>'village']); //Abuki
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75567, 'regionable_type'=>'village']); //Aleuti
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75568, 'regionable_type'=>'village']); //Alosika
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75569, 'regionable_type'=>'village']); //Arubia
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75570, 'regionable_type'=>'village']); //Asolu
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75571, 'regionable_type'=>'village']); //Atodopoi
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75572, 'regionable_type'=>'village']); //Epeeya
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75573, 'regionable_type'=>'village']); //Garuda
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75574, 'regionable_type'=>'village']); //Kasuwura Indah
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75575, 'regionable_type'=>'village']); //Kumapo
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75576, 'regionable_type'=>'village']); //Langgea
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75577, 'regionable_type'=>'village']); //Matanggorai
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75578, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75579, 'regionable_type'=>'village']); //Padang Mekar
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75580, 'regionable_type'=>'village']); //Padangguni
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75581, 'regionable_type'=>'village']); //Padangguni Utama
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75582, 'regionable_type'=>'village']); //Punggaluku
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75583, 'regionable_type'=>'village']); //Sambaosu
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75584, 'regionable_type'=>'village']); //Sambeani
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75585, 'regionable_type'=>'village']); //Walay
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75586, 'regionable_type'=>'village']); //Ambodiaa
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75587, 'regionable_type'=>'village']); //Angohi
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75588, 'regionable_type'=>'village']); //Asinua Jaya
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75589, 'regionable_type'=>'village']); //Asipako
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75590, 'regionable_type'=>'village']); //Awua Jaya
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75591, 'regionable_type'=>'village']); //Awua Sari
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75592, 'regionable_type'=>'village']); //Lasada
                DB::table('regionables')->insert(['region_id'=>5060, 'regionable_id'=>75593, 'regionable_type'=>'village']); //Nekudu
            DB::table('regions')->insert(['id'=>5061, 'parent'=>5054, 'code'=>'9346', 'type'=>'districts', 'name'=>'Districts 9346, City 934, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6605, 'regionable_type'=>'districts']); //Puriala
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6610, 'regionable_type'=>'districts']); //Meluhu
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6611, 'regionable_type'=>'districts']); //Latoma
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6612, 'regionable_type'=>'districts']); //Tongauna
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6613, 'regionable_type'=>'districts']); //Wawotobi
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6614, 'regionable_type'=>'districts']); //Konawe
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6615, 'regionable_type'=>'districts']); //Pondidaha
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6616, 'regionable_type'=>'districts']); //Amonggedo
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6617, 'regionable_type'=>'districts']); //Wonggeduku
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6618, 'regionable_type'=>'districts']); //Uepai (uwepai)
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6619, 'regionable_type'=>'districts']); //Lambuya
            DB::table('regionables')->insert(['region_id'=>5061, 'regionable_id'=>6620, 'regionable_type'=>'districts']); //Onembute
                DB::table('regions')->insert(['id'=>5062, 'parent'=>5061, 'code'=>'93464', 'type'=>'village', 'name'=>'Village 93464, Districts 9346, City 934, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75533, 'regionable_type'=>'village']); //Ahuawali
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75534, 'regionable_type'=>'village']); //Lalonggatu
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75535, 'regionable_type'=>'village']); //Laloonaha
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75536, 'regionable_type'=>'village']); //Mokaleleo
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75537, 'regionable_type'=>'village']); //Puriala
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75538, 'regionable_type'=>'village']); //Puuhopa
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75539, 'regionable_type'=>'village']); //Puusangi
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75540, 'regionable_type'=>'village']); //Sonai
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75541, 'regionable_type'=>'village']); //Tetehaka
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75542, 'regionable_type'=>'village']); //Tetewaru
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75543, 'regionable_type'=>'village']); //Unggulino
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75544, 'regionable_type'=>'village']); //Watundehoa (watandehoa)
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75545, 'regionable_type'=>'village']); //Watusa
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75546, 'regionable_type'=>'village']); //Wawosanggula
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75547, 'regionable_type'=>'village']); //Wonua/wanua Morome
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75704, 'regionable_type'=>'village']); //Alo-oloho
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75705, 'regionable_type'=>'village']); //Amaroa
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75706, 'regionable_type'=>'village']); //Ameroro
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75707, 'regionable_type'=>'village']); //Anggopiu
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75708, 'regionable_type'=>'village']); //Baruga
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75709, 'regionable_type'=>'village']); //Langgomea
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75710, 'regionable_type'=>'village']); //Matahoalu
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75711, 'regionable_type'=>'village']); //Rawua
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75712, 'regionable_type'=>'village']); //Tawamelewe
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75713, 'regionable_type'=>'village']); //Tawarotebota
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75714, 'regionable_type'=>'village']); //Uepai
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75715, 'regionable_type'=>'village']); //Amberi
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75716, 'regionable_type'=>'village']); //Asaki (isaki)
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75717, 'regionable_type'=>'village']); //Awuliti (wawuliti)
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75718, 'regionable_type'=>'village']); //Lambuya
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75719, 'regionable_type'=>'village']); //Meraka
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75720, 'regionable_type'=>'village']); //Tanggobu
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75721, 'regionable_type'=>'village']); //Tetembomua
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75722, 'regionable_type'=>'village']); //Ulu Meraka (sukamaju)
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75723, 'regionable_type'=>'village']); //Wanuahoa
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75724, 'regionable_type'=>'village']); //Watarema
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75725, 'regionable_type'=>'village']); //Waworaha
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75726, 'regionable_type'=>'village']); //Kasumeia
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75727, 'regionable_type'=>'village']); //Kumapo
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75728, 'regionable_type'=>'village']); //Mataiwoi
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75729, 'regionable_type'=>'village']); //Nopoosi
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75730, 'regionable_type'=>'village']); //Onembute
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75731, 'regionable_type'=>'village']); //Silea
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75732, 'regionable_type'=>'village']); //Tawapandere
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75733, 'regionable_type'=>'village']); //Trimulya
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75734, 'regionable_type'=>'village']); //Ulu Onembute
                DB::table('regionables')->insert(['region_id'=>5062, 'regionable_id'=>75735, 'regionable_type'=>'village']); //Ulumeraka
        DB::table('regions')->insert(['id'=>5063, 'parent'=>4642, 'code'=>'935', 'type'=>'city', 'name'=>'City 935, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5063, 'regionable_id'=>412, 'regionable_type'=>'city']); //Kolaka regencies
            DB::table('regions')->insert(['id'=>5064, 'parent'=>5063, 'code'=>'9351', 'type'=>'districts', 'name'=>'Districts 9351, City 935, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5064, 'regionable_id'=>6653, 'regionable_type'=>'districts']); //Kolaka
            DB::table('regionables')->insert(['region_id'=>5064, 'regionable_id'=>6654, 'regionable_type'=>'districts']); //Latambaga
                DB::table('regions')->insert(['id'=>5065, 'parent'=>5064, 'code'=>'93512', 'type'=>'village', 'name'=>'Village 93512, Districts 9351, City 935, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5065, 'regionable_id'=>76247, 'regionable_type'=>'village']); //Induha
                DB::table('regionables')->insert(['region_id'=>5065, 'regionable_id'=>76248, 'regionable_type'=>'village']); //Kolakaasih
                DB::table('regionables')->insert(['region_id'=>5065, 'regionable_id'=>76249, 'regionable_type'=>'village']); //Mangolo
                DB::table('regionables')->insert(['region_id'=>5065, 'regionable_id'=>76250, 'regionable_type'=>'village']); //Ulunggolaka
                DB::table('regions')->insert(['id'=>5066, 'parent'=>5064, 'code'=>'93514', 'type'=>'village', 'name'=>'Village 93514, Districts 9351, City 935, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5066, 'regionable_id'=>76251, 'regionable_type'=>'village']); //Latambaga
                DB::table('regionables')->insert(['region_id'=>5066, 'regionable_id'=>76252, 'regionable_type'=>'village']); //Sakuli
                DB::table('regionables')->insert(['region_id'=>5066, 'regionable_id'=>76253, 'regionable_type'=>'village']); //Sea
            DB::table('regions')->insert(['id'=>5067, 'parent'=>5063, 'code'=>'9355', 'type'=>'districts', 'name'=>'Districts 9355, City 935, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5067, 'regionable_id'=>6655, 'regionable_type'=>'districts']); //Wolo
                DB::table('regions')->insert(['id'=>5068, 'parent'=>5067, 'code'=>'93552', 'type'=>'village', 'name'=>'Village 93552, Districts 9355, City 935, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76254, 'regionable_type'=>'village']); //Donggala
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76255, 'regionable_type'=>'village']); //Iwoimenda
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76256, 'regionable_type'=>'village']); //Iwoimopuro
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76257, 'regionable_type'=>'village']); //Ladahai
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76258, 'regionable_type'=>'village']); //Lalonaha
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76259, 'regionable_type'=>'village']); //Lalonggopi
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76260, 'regionable_type'=>'village']); //Lambopini
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76261, 'regionable_type'=>'village']); //Lana
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76262, 'regionable_type'=>'village']); //Langgomali
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76263, 'regionable_type'=>'village']); //Lapao-pao
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76264, 'regionable_type'=>'village']); //Lasiroku
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76265, 'regionable_type'=>'village']); //Muara Lapao Pao
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76266, 'regionable_type'=>'village']); //Samaenre
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76267, 'regionable_type'=>'village']); //Tamborasi
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76268, 'regionable_type'=>'village']); //Tolowe Pondre
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76269, 'regionable_type'=>'village']); //Ulu Kalo
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76270, 'regionable_type'=>'village']); //Ulu Lapao-pao
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76271, 'regionable_type'=>'village']); //Ulu Wolo
                DB::table('regionables')->insert(['region_id'=>5068, 'regionable_id'=>76272, 'regionable_type'=>'village']); //Wolo
            DB::table('regions')->insert(['id'=>5069, 'parent'=>5063, 'code'=>'9356', 'type'=>'districts', 'name'=>'Districts 9356, City 935, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5069, 'regionable_id'=>6656, 'regionable_type'=>'districts']); //Wundulako
            DB::table('regionables')->insert(['region_id'=>5069, 'regionable_id'=>6657, 'regionable_type'=>'districts']); //Baula
            DB::table('regionables')->insert(['region_id'=>5069, 'regionable_id'=>6658, 'regionable_type'=>'districts']); //Pomalaa
            DB::table('regionables')->insert(['region_id'=>5069, 'regionable_id'=>6659, 'regionable_type'=>'districts']); //Tanggetada
            DB::table('regionables')->insert(['region_id'=>5069, 'regionable_id'=>6660, 'regionable_type'=>'districts']); //Toari
            DB::table('regionables')->insert(['region_id'=>5069, 'regionable_id'=>6661, 'regionable_type'=>'districts']); //Watumbangga (watubanggo)
            DB::table('regionables')->insert(['region_id'=>5069, 'regionable_id'=>6662, 'regionable_type'=>'districts']); //Polinggona
                DB::table('regions')->insert(['id'=>5070, 'parent'=>5069, 'code'=>'93563', 'type'=>'village', 'name'=>'Village 93563, Districts 9356, City 935, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76305, 'regionable_type'=>'village']); //Anaiwoi
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76306, 'regionable_type'=>'village']); //Lalonggolosua
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76307, 'regionable_type'=>'village']); //Lamedai
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76308, 'regionable_type'=>'village']); //Lamoiko
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76309, 'regionable_type'=>'village']); //Oneeha
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76310, 'regionable_type'=>'village']); //Palewai
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76311, 'regionable_type'=>'village']); //Petudua
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76312, 'regionable_type'=>'village']); //Popalia
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76313, 'regionable_type'=>'village']); //Powisoa Jaya (pewisoa Jaya)
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76314, 'regionable_type'=>'village']); //Puundaipa
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76315, 'regionable_type'=>'village']); //Rahanggada
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76316, 'regionable_type'=>'village']); //Tanggetada
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76317, 'regionable_type'=>'village']); //Tondowolio
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76318, 'regionable_type'=>'village']); //Anawua
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76319, 'regionable_type'=>'village']); //Lakito
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76320, 'regionable_type'=>'village']); //Rano Jaya
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76321, 'regionable_type'=>'village']); //Ranomentaa
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76322, 'regionable_type'=>'village']); //Toari
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76323, 'regionable_type'=>'village']); //Wowoli
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76324, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76325, 'regionable_type'=>'village']); //Kastura
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76326, 'regionable_type'=>'village']); //Kukutio
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76327, 'regionable_type'=>'village']); //Lamunde
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76328, 'regionable_type'=>'village']); //Longgosipi
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76329, 'regionable_type'=>'village']); //Mata Osu
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76330, 'regionable_type'=>'village']); //Peoho
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76331, 'regionable_type'=>'village']); //Polenga (tirawuta)
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76332, 'regionable_type'=>'village']); //Sumber Rezeki
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76333, 'regionable_type'=>'village']); //Tandebura (tandai Bura)
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76334, 'regionable_type'=>'village']); //Watubanggo
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76335, 'regionable_type'=>'village']); //Wolulu
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76336, 'regionable_type'=>'village']); //Plasma Jaya
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76337, 'regionable_type'=>'village']); //Polinggona
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76338, 'regionable_type'=>'village']); //Pondouwae
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76339, 'regionable_type'=>'village']); //Puudongi
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76340, 'regionable_type'=>'village']); //Tanggeau
                DB::table('regionables')->insert(['region_id'=>5070, 'regionable_id'=>76341, 'regionable_type'=>'village']); //Wulonggere
            DB::table('regions')->insert(['id'=>5071, 'parent'=>5063, 'code'=>'9357', 'type'=>'districts', 'name'=>'Districts 9357, City 935, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6663, 'regionable_type'=>'districts']); //Tinondo
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6664, 'regionable_type'=>'districts']); //Mowewe
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6665, 'regionable_type'=>'districts']); //Loea
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6666, 'regionable_type'=>'districts']); //Lalolae
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6667, 'regionable_type'=>'districts']); //Tirawuta
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6668, 'regionable_type'=>'districts']); //Lambandia (lambadia)
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6669, 'regionable_type'=>'districts']); //Poli Polia
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6670, 'regionable_type'=>'districts']); //Ladongi
            DB::table('regionables')->insert(['region_id'=>5071, 'regionable_id'=>6671, 'regionable_type'=>'districts']); //Uluiwoi
                DB::table('regions')->insert(['id'=>5072, 'parent'=>5071, 'code'=>'93575', 'type'=>'village', 'name'=>'Village 93575, Districts 9357, City 935, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76425, 'regionable_type'=>'village']); //Ahilulu
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76426, 'regionable_type'=>'village']); //Alaaha
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76427, 'regionable_type'=>'village']); //Liku Walanapo
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76428, 'regionable_type'=>'village']); //Pehanggo
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76429, 'regionable_type'=>'village']); //Pora Bua
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76430, 'regionable_type'=>'village']); //Sanggona
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76431, 'regionable_type'=>'village']); //Tawanga
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76432, 'regionable_type'=>'village']); //Tondowatu
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76433, 'regionable_type'=>'village']); //Tongauna
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76434, 'regionable_type'=>'village']); //Ueesi
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76435, 'regionable_type'=>'village']); //Uete
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76436, 'regionable_type'=>'village']); //Undolo
                DB::table('regionables')->insert(['region_id'=>5072, 'regionable_id'=>76437, 'regionable_type'=>'village']); //Wesinggote
        DB::table('regions')->insert(['id'=>5073, 'parent'=>4642, 'code'=>'936', 'type'=>'city', 'name'=>'City 936, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5073, 'regionable_id'=>413, 'regionable_type'=>'city']); //Muna regencies
        DB::table('regionables')->insert(['region_id'=>5073, 'regionable_id'=>414, 'regionable_type'=>'city']); //Buton Utara regencies
            DB::table('regions')->insert(['id'=>5074, 'parent'=>5073, 'code'=>'9367', 'type'=>'districts', 'name'=>'Districts 9367, City 936, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6701, 'regionable_type'=>'districts']); //Wakorumba Selatan
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6702, 'regionable_type'=>'districts']); //Batukara
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6703, 'regionable_type'=>'districts']); //Pasir Putih
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6704, 'regionable_type'=>'districts']); //Pasi Kolaga
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6705, 'regionable_type'=>'districts']); //Maligano
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6706, 'regionable_type'=>'districts']); //Wakorumba Utara
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6707, 'regionable_type'=>'districts']); //Kulisusu (kalingsusu/kalisusu)
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6708, 'regionable_type'=>'districts']); //Kulisusu Utara
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6709, 'regionable_type'=>'districts']); //Kulisusu Barat
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6710, 'regionable_type'=>'districts']); //Kambowa
            DB::table('regionables')->insert(['region_id'=>5074, 'regionable_id'=>6711, 'regionable_type'=>'districts']); //Bonegunu
                DB::table('regions')->insert(['id'=>5075, 'parent'=>5074, 'code'=>'93673', 'type'=>'village', 'name'=>'Village 93673, Districts 9367, City 936, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76754, 'regionable_type'=>'village']); //Baluara
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76755, 'regionable_type'=>'village']); //Bente
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76756, 'regionable_type'=>'village']); //Bubu
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76757, 'regionable_type'=>'village']); //Bubu Barat
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76758, 'regionable_type'=>'village']); //Kambowa
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76759, 'regionable_type'=>'village']); //Kondo
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76760, 'regionable_type'=>'village']); //Lagundi
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76761, 'regionable_type'=>'village']); //Lahamoko Jaya
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76762, 'regionable_type'=>'village']); //Mata
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76763, 'regionable_type'=>'village']); //Morindino
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76764, 'regionable_type'=>'village']); //Pongkawulu
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76765, 'regionable_type'=>'village']); //Bonegunu
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76766, 'regionable_type'=>'village']); //Buranga
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76767, 'regionable_type'=>'village']); //Damai Laborona
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76768, 'regionable_type'=>'village']); //Een Sumala
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76769, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76770, 'regionable_type'=>'village']); //Koboruno
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76771, 'regionable_type'=>'village']); //Koepisino
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76772, 'regionable_type'=>'village']); //Laanoipi
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76773, 'regionable_type'=>'village']); //Langere
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76774, 'regionable_type'=>'village']); //Ngapa\ea
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76775, 'regionable_type'=>'village']); //Rante Gola
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76776, 'regionable_type'=>'village']); //Ronta
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76777, 'regionable_type'=>'village']); //Tatombuli
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76778, 'regionable_type'=>'village']); //Waode Angkalo
                DB::table('regionables')->insert(['region_id'=>5075, 'regionable_id'=>76779, 'regionable_type'=>'village']); //Waode Kalowo
        DB::table('regions')->insert(['id'=>5076, 'parent'=>4642, 'code'=>'937', 'type'=>'city', 'name'=>'City 937, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5076, 'regionable_id'=>409, 'regionable_type'=>'city']); //Konawe regencies
        DB::table('regionables')->insert(['region_id'=>5076, 'regionable_id'=>415, 'regionable_type'=>'city']); //Bau-bau city
        DB::table('regionables')->insert(['region_id'=>5076, 'regionable_id'=>416, 'regionable_type'=>'city']); //Buton regencies
        DB::table('regionables')->insert(['region_id'=>5076, 'regionable_id'=>417, 'regionable_type'=>'city']); //Bombana regencies
        DB::table('regionables')->insert(['region_id'=>5076, 'regionable_id'=>418, 'regionable_type'=>'city']); //Wakatobi regencies
            DB::table('regions')->insert(['id'=>5077, 'parent'=>5076, 'code'=>'9379', 'type'=>'districts', 'name'=>'Districts 9379, City 937, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5077, 'regionable_id'=>6763, 'regionable_type'=>'districts']); //Wangi-wangi
            DB::table('regionables')->insert(['region_id'=>5077, 'regionable_id'=>6764, 'regionable_type'=>'districts']); //Kaledupa
            DB::table('regionables')->insert(['region_id'=>5077, 'regionable_id'=>6765, 'regionable_type'=>'districts']); //Kaledupa Selatan
            DB::table('regionables')->insert(['region_id'=>5077, 'regionable_id'=>6766, 'regionable_type'=>'districts']); //Tomia Timur
            DB::table('regionables')->insert(['region_id'=>5077, 'regionable_id'=>6767, 'regionable_type'=>'districts']); //Tomia
            DB::table('regionables')->insert(['region_id'=>5077, 'regionable_id'=>6768, 'regionable_type'=>'districts']); //Togo Binongko
            DB::table('regionables')->insert(['region_id'=>5077, 'regionable_id'=>6769, 'regionable_type'=>'districts']); //Binongko
            DB::table('regionables')->insert(['region_id'=>5077, 'regionable_id'=>6770, 'regionable_type'=>'districts']); //Wangi-wangi Selatan
                DB::table('regions')->insert(['id'=>5078, 'parent'=>5077, 'code'=>'93795', 'type'=>'village', 'name'=>'Village 93795, Districts 9379, City 937, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77286, 'regionable_type'=>'village']); //Kabita
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77287, 'regionable_type'=>'village']); //Kabita Togo
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77288, 'regionable_type'=>'village']); //Kapota
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77289, 'regionable_type'=>'village']); //Kapota Utara
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77290, 'regionable_type'=>'village']); //Komala
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77291, 'regionable_type'=>'village']); //Liya One Melangka (liya Onemaelangka)
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77292, 'regionable_type'=>'village']); //Liya Togo
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77293, 'regionable_type'=>'village']); //Liyamawi
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77294, 'regionable_type'=>'village']); //Mandati I
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77295, 'regionable_type'=>'village']); //Mandati Ii
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77296, 'regionable_type'=>'village']); //Mandati Iii
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77297, 'regionable_type'=>'village']); //Matahora (metohora)
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77298, 'regionable_type'=>'village']); //Mola Bahari
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77299, 'regionable_type'=>'village']); //Mola Nelayan Bakti/bhakti
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77300, 'regionable_type'=>'village']); //Mola Samaturu
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77301, 'regionable_type'=>'village']); //Mola Selatan
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77302, 'regionable_type'=>'village']); //Mola Utara
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77303, 'regionable_type'=>'village']); //Numana
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77304, 'regionable_type'=>'village']); //Wisata Koto
                DB::table('regionables')->insert(['region_id'=>5078, 'regionable_id'=>77305, 'regionable_type'=>'village']); //Wungka
        DB::table('regions')->insert(['id'=>5079, 'parent'=>4642, 'code'=>'938', 'type'=>'city', 'name'=>'City 938, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5079, 'regionable_id'=>411, 'regionable_type'=>'city']); //Konawe Selatan regencies
            DB::table('regions')->insert(['id'=>5080, 'parent'=>5079, 'code'=>'9381', 'type'=>'districts', 'name'=>'Districts 9381, City 938, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5080, 'regionable_id'=>6632, 'regionable_type'=>'districts']); //Andoolo
            DB::table('regionables')->insert(['region_id'=>5080, 'regionable_id'=>6633, 'regionable_type'=>'districts']); //Buke
                DB::table('regions')->insert(['id'=>5081, 'parent'=>5080, 'code'=>'93812', 'type'=>'village', 'name'=>'Village 93812, Districts 9381, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5081, 'regionable_id'=>75935, 'regionable_type'=>'village']); //Buke
                DB::table('regionables')->insert(['region_id'=>5081, 'regionable_id'=>75936, 'regionable_type'=>'village']); //Pelandia
                DB::table('regionables')->insert(['region_id'=>5081, 'regionable_id'=>75937, 'regionable_type'=>'village']); //Puudaria Jaya
                DB::table('regions')->insert(['id'=>5082, 'parent'=>5080, 'code'=>'93813', 'type'=>'village', 'name'=>'Village 93813, Districts 9381, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5082, 'regionable_id'=>75917, 'regionable_type'=>'village']); //Anese
                DB::table('regionables')->insert(['region_id'=>5082, 'regionable_id'=>75918, 'regionable_type'=>'village']); //Lalonggombu
                DB::table('regionables')->insert(['region_id'=>5082, 'regionable_id'=>75919, 'regionable_type'=>'village']); //Papawu
                DB::table('regionables')->insert(['region_id'=>5082, 'regionable_id'=>75938, 'regionable_type'=>'village']); //Andolo Utama
                DB::table('regions')->insert(['id'=>5083, 'parent'=>5080, 'code'=>'93814', 'type'=>'village', 'name'=>'Village 93814, Districts 9381, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5083, 'regionable_id'=>75939, 'regionable_type'=>'village']); //Adayu Indah
                DB::table('regionables')->insert(['region_id'=>5083, 'regionable_id'=>75940, 'regionable_type'=>'village']); //Ranooha Lestari
                DB::table('regionables')->insert(['region_id'=>5083, 'regionable_id'=>75941, 'regionable_type'=>'village']); //Silea Jaya
                DB::table('regionables')->insert(['region_id'=>5083, 'regionable_id'=>75942, 'regionable_type'=>'village']); //Tetenggolasa
                DB::table('regionables')->insert(['region_id'=>5083, 'regionable_id'=>75943, 'regionable_type'=>'village']); //Tirto/tirta Wartani
                DB::table('regionables')->insert(['region_id'=>5083, 'regionable_id'=>75944, 'regionable_type'=>'village']); //Wanua Maroa
                DB::table('regionables')->insert(['region_id'=>5083, 'regionable_id'=>75945, 'regionable_type'=>'village']); //Wulele Jaya
                DB::table('regions')->insert(['id'=>5084, 'parent'=>5080, 'code'=>'93815', 'type'=>'village', 'name'=>'Village 93815, Districts 9381, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5084, 'regionable_id'=>75946, 'regionable_type'=>'village']); //Adaka Jaya
                DB::table('regions')->insert(['id'=>5085, 'parent'=>5080, 'code'=>'93816', 'type'=>'village', 'name'=>'Village 93816, Districts 9381, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5085, 'regionable_id'=>75947, 'regionable_type'=>'village']); //Awolo
                DB::table('regions')->insert(['id'=>5086, 'parent'=>5080, 'code'=>'93819', 'type'=>'village', 'name'=>'Village 93819, Districts 9381, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75923, 'regionable_type'=>'village']); //Adayu Indah
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75924, 'regionable_type'=>'village']); //Ataku
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75925, 'regionable_type'=>'village']); //Bekenggasu Indah
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75926, 'regionable_type'=>'village']); //Bima Maroa
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75927, 'regionable_type'=>'village']); //Bumi Raya
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75928, 'regionable_type'=>'village']); //Lalobao
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75929, 'regionable_type'=>'village']); //Mataiwoi
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75930, 'regionable_type'=>'village']); //Punggapu
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75931, 'regionable_type'=>'village']); //Puundoho
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75932, 'regionable_type'=>'village']); //Watu Mokala
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75933, 'regionable_type'=>'village']); //Wunduwatu
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75948, 'regionable_type'=>'village']); //Anggokoti
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75949, 'regionable_type'=>'village']); //Asembu Mulya
                DB::table('regionables')->insert(['region_id'=>5086, 'regionable_id'=>75950, 'regionable_type'=>'village']); //Raha Menda Jaya
            DB::table('regions')->insert(['id'=>5087, 'parent'=>5079, 'code'=>'9387', 'type'=>'districts', 'name'=>'Districts 9387, City 938, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6634, 'regionable_type'=>'districts']); //Ranomeeto Barat
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6635, 'regionable_type'=>'districts']); //Ranomeeto
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6636, 'regionable_type'=>'districts']); //Landono
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6637, 'regionable_type'=>'districts']); //Mowila
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6638, 'regionable_type'=>'districts']); //Konda
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6639, 'regionable_type'=>'districts']); //Wolasi
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6640, 'regionable_type'=>'districts']); //Angata
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6641, 'regionable_type'=>'districts']); //Benua
            DB::table('regionables')->insert(['region_id'=>5087, 'regionable_id'=>6642, 'regionable_type'=>'districts']); //Basala
                DB::table('regions')->insert(['id'=>5088, 'parent'=>5087, 'code'=>'93875', 'type'=>'village', 'name'=>'Village 93875, Districts 9387, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76038, 'regionable_type'=>'village']); //Angata
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76039, 'regionable_type'=>'village']); //Aopa
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76040, 'regionable_type'=>'village']); //Boloso
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76041, 'regionable_type'=>'village']); //Kasebo
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76042, 'regionable_type'=>'village']); //Lamoen
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76043, 'regionable_type'=>'village']); //Lamoeri
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76044, 'regionable_type'=>'village']); //Lamooso
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76045, 'regionable_type'=>'village']); //Landabaro
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76046, 'regionable_type'=>'village']); //Langgea Indah
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76047, 'regionable_type'=>'village']); //Matabondu
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76048, 'regionable_type'=>'village']); //Mataiwoi
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76049, 'regionable_type'=>'village']); //Mokalelelo
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76050, 'regionable_type'=>'village']); //Mokoau
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76051, 'regionable_type'=>'village']); //Motaha
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76052, 'regionable_type'=>'village']); //Pewutaa
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76053, 'regionable_type'=>'village']); //Puao
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76054, 'regionable_type'=>'village']); //Pudambu
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76055, 'regionable_type'=>'village']); //Puulipu
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76056, 'regionable_type'=>'village']); //Puungoni
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76057, 'regionable_type'=>'village']); //Puuroe
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76058, 'regionable_type'=>'village']); //Puusanggula
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76059, 'regionable_type'=>'village']); //Sandarsi Jaya
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76060, 'regionable_type'=>'village']); //Sandey
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76061, 'regionable_type'=>'village']); //Simbangu
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76062, 'regionable_type'=>'village']); //Teteasa
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76063, 'regionable_type'=>'village']); //Unggulino
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76064, 'regionable_type'=>'village']); //Awalo
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76065, 'regionable_type'=>'village']); //Benua
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76066, 'regionable_type'=>'village']); //Benua Utama
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76067, 'regionable_type'=>'village']); //Horodopi
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76068, 'regionable_type'=>'village']); //Kosambi
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76069, 'regionable_type'=>'village']); //Lamara
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76070, 'regionable_type'=>'village']); //Palawewu (palowewu)
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76071, 'regionable_type'=>'village']); //Puosu (puuosu)
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76072, 'regionable_type'=>'village']); //Puunggawu Kawu (punggawukawu)
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76073, 'regionable_type'=>'village']); //Puuwehuko
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76074, 'regionable_type'=>'village']); //Tetehaka
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76075, 'regionable_type'=>'village']); //Uelawa
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76076, 'regionable_type'=>'village']); //Basala
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76077, 'regionable_type'=>'village']); //Epeesi
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76078, 'regionable_type'=>'village']); //Iwoi Mendoro
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76079, 'regionable_type'=>'village']); //Lambandia
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76080, 'regionable_type'=>'village']); //Lere
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76081, 'regionable_type'=>'village']); //Lipu Masagena
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76082, 'regionable_type'=>'village']); //Polo-pololi
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76083, 'regionable_type'=>'village']); //Tambekuku (tombekuku)
                DB::table('regionables')->insert(['region_id'=>5088, 'regionable_id'=>76084, 'regionable_type'=>'village']); //Teporombua
            DB::table('regions')->insert(['id'=>5089, 'parent'=>5079, 'code'=>'9388', 'type'=>'districts', 'name'=>'Districts 9388, City 938, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5089, 'regionable_id'=>6632, 'regionable_type'=>'districts']); //Andoolo
            DB::table('regionables')->insert(['region_id'=>5089, 'regionable_id'=>6643, 'regionable_type'=>'districts']); //Laeya
            DB::table('regionables')->insert(['region_id'=>5089, 'regionable_id'=>6644, 'regionable_type'=>'districts']); //Lainea
            DB::table('regionables')->insert(['region_id'=>5089, 'regionable_id'=>6645, 'regionable_type'=>'districts']); //Baito
            DB::table('regionables')->insert(['region_id'=>5089, 'regionable_id'=>6646, 'regionable_type'=>'districts']); //Palangga
            DB::table('regionables')->insert(['region_id'=>5089, 'regionable_id'=>6647, 'regionable_type'=>'districts']); //Palangga Selatan
            DB::table('regionables')->insert(['region_id'=>5089, 'regionable_id'=>6648, 'regionable_type'=>'districts']); //Tinanggea
            DB::table('regionables')->insert(['region_id'=>5089, 'regionable_id'=>6649, 'regionable_type'=>'districts']); //Lalembuu / Lalumbuu
                DB::table('regions')->insert(['id'=>5090, 'parent'=>5089, 'code'=>'93885', 'type'=>'village', 'name'=>'Village 93885, Districts 9388, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76148, 'regionable_type'=>'village']); //Akuni
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76149, 'regionable_type'=>'village']); //Asingi
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76150, 'regionable_type'=>'village']); //Bomba-bomba
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76151, 'regionable_type'=>'village']); //Bungin Permai
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76152, 'regionable_type'=>'village']); //Lalo Watu
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76153, 'regionable_type'=>'village']); //Lalonggasu
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76154, 'regionable_type'=>'village']); //Lanowulu
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76155, 'regionable_type'=>'village']); //Lapoa
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76156, 'regionable_type'=>'village']); //Lapulu
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76157, 'regionable_type'=>'village']); //Lasuai
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76158, 'regionable_type'=>'village']); //Matambawi
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76159, 'regionable_type'=>'village']); //Matandahi
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76160, 'regionable_type'=>'village']); //Moolo Indah
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76161, 'regionable_type'=>'village']); //Ngapaah (ngapaaha)
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76162, 'regionable_type'=>'village']); //Palo Tawo
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76163, 'regionable_type'=>'village']); //Panggoosi
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76164, 'regionable_type'=>'village']); //Roraya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76165, 'regionable_type'=>'village']); //Tatangge
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76166, 'regionable_type'=>'village']); //Telutu Jaya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76167, 'regionable_type'=>'village']); //Tinanggea
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76168, 'regionable_type'=>'village']); //Torokeku
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76169, 'regionable_type'=>'village']); //Wadanggo
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76170, 'regionable_type'=>'village']); //Watumelewe
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76171, 'regionable_type'=>'village']); //Wundumbolo
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76172, 'regionable_type'=>'village']); //Atari Indah
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76173, 'regionable_type'=>'village']); //Atari Jaya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76174, 'regionable_type'=>'village']); //Kapuwila
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76175, 'regionable_type'=>'village']); //Lalembu Jaya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76176, 'regionable_type'=>'village']); //Lalouesamba
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76177, 'regionable_type'=>'village']); //Lambandia
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76178, 'regionable_type'=>'village']); //Lambodi Jaya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76179, 'regionable_type'=>'village']); //Merongga Raya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76180, 'regionable_type'=>'village']); //Mokupa Jaya (makupa Jaya)
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76181, 'regionable_type'=>'village']); //Mondoke (mandoke)
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76182, 'regionable_type'=>'village']); //Padaleu
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76183, 'regionable_type'=>'village']); //Potuho Jaya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76184, 'regionable_type'=>'village']); //Puunangga
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76185, 'regionable_type'=>'village']); //Puurema Subur
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76186, 'regionable_type'=>'village']); //Suka Mukti
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76187, 'regionable_type'=>'village']); //Sumber Jaya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76188, 'regionable_type'=>'village']); //Teteinea Jaya
                DB::table('regionables')->insert(['region_id'=>5090, 'regionable_id'=>76189, 'regionable_type'=>'village']); //Tombeleu
            DB::table('regions')->insert(['id'=>5091, 'parent'=>5079, 'code'=>'9389', 'type'=>'districts', 'name'=>'Districts 9389, City 938, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5091, 'regionable_id'=>6650, 'regionable_type'=>'districts']); //Moramo
            DB::table('regionables')->insert(['region_id'=>5091, 'regionable_id'=>6651, 'regionable_type'=>'districts']); //Moramo Utara
            DB::table('regionables')->insert(['region_id'=>5091, 'regionable_id'=>6652, 'regionable_type'=>'districts']); //Laonti
                DB::table('regions')->insert(['id'=>5092, 'parent'=>5091, 'code'=>'93892', 'type'=>'village', 'name'=>'Village 93892, Districts 9389, City 938, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76220, 'regionable_type'=>'village']); //Cempedak
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76221, 'regionable_type'=>'village']); //Kondono
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76222, 'regionable_type'=>'village']); //Labotaone
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76223, 'regionable_type'=>'village']); //Labuan Beropa
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76224, 'regionable_type'=>'village']); //Laonti
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76225, 'regionable_type'=>'village']); //Lawisata
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76226, 'regionable_type'=>'village']); //Malaringgi
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76227, 'regionable_type'=>'village']); //Mata Bondu
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76228, 'regionable_type'=>'village']); //Namu
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76229, 'regionable_type'=>'village']); //Peo Indah
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76230, 'regionable_type'=>'village']); //Puudirangga (puundirangga)
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76231, 'regionable_type'=>'village']); //Rumbia Rumbia
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76232, 'regionable_type'=>'village']); //Sangi-sangi
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76233, 'regionable_type'=>'village']); //Tambeanga
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76234, 'regionable_type'=>'village']); //Tambolosu
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76235, 'regionable_type'=>'village']); //Tue Tue
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76236, 'regionable_type'=>'village']); //Ulu Sawa
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76237, 'regionable_type'=>'village']); //Wandaeha
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76238, 'regionable_type'=>'village']); //Watundolu (batu Jaya)
                DB::table('regionables')->insert(['region_id'=>5092, 'regionable_id'=>76239, 'regionable_type'=>'village']); //Woru Woru
        DB::table('regions')->insert(['id'=>5093, 'parent'=>4642, 'code'=>'939', 'type'=>'city', 'name'=>'City 939, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5093, 'regionable_id'=>412, 'regionable_type'=>'city']); //Kolaka regencies
        DB::table('regionables')->insert(['region_id'=>5093, 'regionable_id'=>419, 'regionable_type'=>'city']); //Kolaka Utara regencies
            DB::table('regions')->insert(['id'=>5094, 'parent'=>5093, 'code'=>'9391', 'type'=>'districts', 'name'=>'Districts 9391, City 939, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5094, 'regionable_id'=>6672, 'regionable_type'=>'districts']); //Samaturu
            DB::table('regionables')->insert(['region_id'=>5094, 'regionable_id'=>6771, 'regionable_type'=>'districts']); //Lasusua
            DB::table('regionables')->insert(['region_id'=>5094, 'regionable_id'=>6772, 'regionable_type'=>'districts']); //Katoi
                DB::table('regions')->insert(['id'=>5095, 'parent'=>5094, 'code'=>'93913', 'type'=>'village', 'name'=>'Village 93913, Districts 9391, City 939, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5095, 'regionable_id'=>77319, 'regionable_type'=>'village']); //Katoi
                DB::table('regions')->insert(['id'=>5096, 'parent'=>5094, 'code'=>'93914', 'type'=>'village', 'name'=>'Village 93914, Districts 9391, City 939, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5096, 'regionable_id'=>77320, 'regionable_type'=>'village']); //Maruge
                DB::table('regionables')->insert(['region_id'=>5096, 'regionable_id'=>77321, 'regionable_type'=>'village']); //Simbula
                DB::table('regions')->insert(['id'=>5097, 'parent'=>5094, 'code'=>'93916', 'type'=>'village', 'name'=>'Village 93916, Districts 9391, City 939, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77309, 'regionable_type'=>'village']); //Babussalam
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77310, 'regionable_type'=>'village']); //Batu Ganda Permai
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77311, 'regionable_type'=>'village']); //Patowonua
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77312, 'regionable_type'=>'village']); //Pitulua Dua (ii)
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77313, 'regionable_type'=>'village']); //Pucak Monapa
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77314, 'regionable_type'=>'village']); //Rante Limbung
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77315, 'regionable_type'=>'village']); //Sulaho
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77316, 'regionable_type'=>'village']); //Tojabi
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77317, 'regionable_type'=>'village']); //Totallang
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77318, 'regionable_type'=>'village']); //Watuliu (watuliwu)
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77322, 'regionable_type'=>'village']); //Lambuno
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77323, 'regionable_type'=>'village']); //Lanipa-nipa
                DB::table('regionables')->insert(['region_id'=>5097, 'regionable_id'=>77324, 'regionable_type'=>'village']); //Ujung Tobaku (tobako)
            DB::table('regions')->insert(['id'=>5098, 'parent'=>5093, 'code'=>'9395', 'type'=>'districts', 'name'=>'Districts 9395, City 939, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6773, 'regionable_type'=>'districts']); //Pakue Utara
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6774, 'regionable_type'=>'districts']); //Pakue
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6775, 'regionable_type'=>'districts']); //Pakue Tengah
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6776, 'regionable_type'=>'districts']); //Batu Putih
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6777, 'regionable_type'=>'districts']); //Tolala
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6778, 'regionable_type'=>'districts']); //Porehu
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6779, 'regionable_type'=>'districts']); //Lombai (lambai)
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6780, 'regionable_type'=>'districts']); //Ranteangin
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6781, 'regionable_type'=>'districts']); //Wawo
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6782, 'regionable_type'=>'districts']); //Kodeoha
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6783, 'regionable_type'=>'districts']); //Tiwu
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6784, 'regionable_type'=>'districts']); //Ngapa
            DB::table('regionables')->insert(['region_id'=>5098, 'regionable_id'=>6785, 'regionable_type'=>'districts']); //Watunohu
                DB::table('regions')->insert(['id'=>5099, 'parent'=>5098, 'code'=>'93958', 'type'=>'village', 'name'=>'Village 93958, Districts 9395, City 939, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77424, 'regionable_type'=>'village']); //Beringin
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77425, 'regionable_type'=>'village']); //Koreiha
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77426, 'regionable_type'=>'village']); //Lapai
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77427, 'regionable_type'=>'village']); //Lawolatu
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77428, 'regionable_type'=>'village']); //Ngapa
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77429, 'regionable_type'=>'village']); //Paruttelang
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77430, 'regionable_type'=>'village']); //Puurau
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77431, 'regionable_type'=>'village']); //Tadoumera (tadaumera)
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77432, 'regionable_type'=>'village']); //Watumotaha
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77433, 'regionable_type'=>'village']); //Lahabaru
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77434, 'regionable_type'=>'village']); //Nyule
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77435, 'regionable_type'=>'village']); //Samaturu
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77436, 'regionable_type'=>'village']); //Sapoiha
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77437, 'regionable_type'=>'village']); //Sorona (sarona)
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77438, 'regionable_type'=>'village']); //Tambuha
                DB::table('regionables')->insert(['region_id'=>5099, 'regionable_id'=>77439, 'regionable_type'=>'village']); //Watunohu

        //Sulawesi Utara
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>31, 'regionable_type'=>'province']); //Sulawesi Utara
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>420, 'regionable_type'=>'city']); //Manado city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>421, 'regionable_type'=>'city']); //Minahasa Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>422, 'regionable_type'=>'city']); //Minahasa Utara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>423, 'regionable_type'=>'city']); //Minahasa regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>424, 'regionable_type'=>'city']); //Tomohon city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>425, 'regionable_type'=>'city']); //Bitung city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>426, 'regionable_type'=>'city']); //Kotamobagu city
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>427, 'regionable_type'=>'city']); //Bolaang Mongondow (bolmong) regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>428, 'regionable_type'=>'city']); //Bolaang Mongondow Utara regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>429, 'regionable_type'=>'city']); //Bolaang Mongondow Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>430, 'regionable_type'=>'city']); //Bolaang Mongondow Timur regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>431, 'regionable_type'=>'city']); //Kepulauan Sangihe regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>432, 'regionable_type'=>'city']); //Kepulauan Siau Tagulandang Biaro (sitaro) regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>433, 'regionable_type'=>'city']); //Kepulauan Talaud regencies
        DB::table('regionables')->insert(['region_id'=>4642, 'regionable_id'=>434, 'regionable_type'=>'city']); //Minahasa Tenggara regencies

        DB::table('regions')->insert(['id'=>5100, 'parent'=>4642, 'code'=>'951', 'type'=>'city', 'name'=>'City 951, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5100, 'regionable_id'=>420, 'regionable_type'=>'city']); //Manado city
            DB::table('regions')->insert(['id'=>5101, 'parent'=>5100, 'code'=>'9511', 'type'=>'districts', 'name'=>'Districts 9511, City 951, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5101, 'regionable_id'=>6786, 'regionable_type'=>'districts']); //Wenang
            DB::table('regionables')->insert(['region_id'=>5101, 'regionable_id'=>6787, 'regionable_type'=>'districts']); //Sario
            DB::table('regionables')->insert(['region_id'=>5101, 'regionable_id'=>6788, 'regionable_type'=>'districts']); //Malalayang
            DB::table('regionables')->insert(['region_id'=>5101, 'regionable_id'=>6789, 'regionable_type'=>'districts']); //Wanea
                DB::table('regions')->insert(['id'=>5102, 'parent'=>5101, 'code'=>'95117', 'type'=>'village', 'name'=>'Village 95117, Districts 9511, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5102, 'regionable_id'=>77468, 'regionable_type'=>'village']); //Bumi Nyiur
                DB::table('regionables')->insert(['region_id'=>5102, 'regionable_id'=>77469, 'regionable_type'=>'village']); //Karombasan Selatan
                DB::table('regionables')->insert(['region_id'=>5102, 'regionable_id'=>77470, 'regionable_type'=>'village']); //Karombasan Utara
                DB::table('regionables')->insert(['region_id'=>5102, 'regionable_id'=>77471, 'regionable_type'=>'village']); //Tanjung Batu
                DB::table('regionables')->insert(['region_id'=>5102, 'regionable_id'=>77472, 'regionable_type'=>'village']); //Tingkulu
                DB::table('regionables')->insert(['region_id'=>5102, 'regionable_id'=>77473, 'regionable_type'=>'village']); //Wanea
                DB::table('regions')->insert(['id'=>5103, 'parent'=>5101, 'code'=>'95118', 'type'=>'village', 'name'=>'Village 95118, Districts 9511, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5103, 'regionable_id'=>77474, 'regionable_type'=>'village']); //Ranotana Weru
                DB::table('regions')->insert(['id'=>5104, 'parent'=>5101, 'code'=>'95119', 'type'=>'village', 'name'=>'Village 95119, Districts 9511, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5104, 'regionable_id'=>77445, 'regionable_type'=>'village']); //Teling Bawah
                DB::table('regionables')->insert(['region_id'=>5104, 'regionable_id'=>77475, 'regionable_type'=>'village']); //Pakowa
                DB::table('regionables')->insert(['region_id'=>5104, 'regionable_id'=>77476, 'regionable_type'=>'village']); //Teling Atas
            DB::table('regions')->insert(['id'=>5105, 'parent'=>5100, 'code'=>'9512', 'type'=>'districts', 'name'=>'Districts 9512, City 951, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5105, 'regionable_id'=>6786, 'regionable_type'=>'districts']); //Wenang
            DB::table('regionables')->insert(['region_id'=>5105, 'regionable_id'=>6790, 'regionable_type'=>'districts']); //Tikala
            DB::table('regionables')->insert(['region_id'=>5105, 'regionable_id'=>6791, 'regionable_type'=>'districts']); //Paal Dua
                DB::table('regions')->insert(['id'=>5106, 'parent'=>5105, 'code'=>'95127', 'type'=>'village', 'name'=>'Village 95127, Districts 9512, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5106, 'regionable_id'=>77482, 'regionable_type'=>'village']); //Dendengan Dalam
                DB::table('regionables')->insert(['region_id'=>5106, 'regionable_id'=>77483, 'regionable_type'=>'village']); //Dendengan Luar
                DB::table('regions')->insert(['id'=>5107, 'parent'=>5105, 'code'=>'95128', 'type'=>'village', 'name'=>'Village 95128, Districts 9512, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5107, 'regionable_id'=>77484, 'regionable_type'=>'village']); //Ranomut
                DB::table('regions')->insert(['id'=>5108, 'parent'=>5105, 'code'=>'95129', 'type'=>'village', 'name'=>'Village 95129, Districts 9512, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5108, 'regionable_id'=>77480, 'regionable_type'=>'village']); //Paal Iv
                DB::table('regionables')->insert(['region_id'=>5108, 'regionable_id'=>77481, 'regionable_type'=>'village']); //Taas
                DB::table('regionables')->insert(['region_id'=>5108, 'regionable_id'=>77485, 'regionable_type'=>'village']); //Kairagi Weru
                DB::table('regionables')->insert(['region_id'=>5108, 'regionable_id'=>77486, 'regionable_type'=>'village']); //Malendeng
                DB::table('regionables')->insert(['region_id'=>5108, 'regionable_id'=>77487, 'regionable_type'=>'village']); //Paal Dua
                DB::table('regionables')->insert(['region_id'=>5108, 'regionable_id'=>77488, 'regionable_type'=>'village']); //Perkamil
            DB::table('regions')->insert(['id'=>5109, 'parent'=>5100, 'code'=>'9516', 'type'=>'districts', 'name'=>'Districts 9516, City 951, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5109, 'regionable_id'=>6788, 'regionable_type'=>'districts']); //Malalayang
                DB::table('regions')->insert(['id'=>5110, 'parent'=>5109, 'code'=>'95161', 'type'=>'village', 'name'=>'Village 95161, Districts 9516, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5110, 'regionable_id'=>77461, 'regionable_type'=>'village']); //Winangun Dua
                DB::table('regionables')->insert(['region_id'=>5110, 'regionable_id'=>77462, 'regionable_type'=>'village']); //Winangun Satu
                DB::table('regions')->insert(['id'=>5111, 'parent'=>5109, 'code'=>'95162', 'type'=>'village', 'name'=>'Village 95162, Districts 9516, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5111, 'regionable_id'=>77463, 'regionable_type'=>'village']); //Malalayang Satu (i)
                DB::table('regions')->insert(['id'=>5112, 'parent'=>5109, 'code'=>'95163', 'type'=>'village', 'name'=>'Village 95163, Districts 9516, City 951, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5112, 'regionable_id'=>77464, 'regionable_type'=>'village']); //Batu Kota
                DB::table('regionables')->insert(['region_id'=>5112, 'regionable_id'=>77465, 'regionable_type'=>'village']); //Malalayang Dua (ii)
                DB::table('regionables')->insert(['region_id'=>5112, 'regionable_id'=>77466, 'regionable_type'=>'village']); //Malalayang Satu Barat
                DB::table('regionables')->insert(['region_id'=>5112, 'regionable_id'=>77467, 'regionable_type'=>'village']); //Malalayang Satu Timur
        DB::table('regions')->insert(['id'=>5113, 'parent'=>4642, 'code'=>'952', 'type'=>'city', 'name'=>'City 952, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5113, 'regionable_id'=>420, 'regionable_type'=>'city']); //Manado city
            DB::table('regions')->insert(['id'=>5114, 'parent'=>5113, 'code'=>'9523', 'type'=>'districts', 'name'=>'Districts 9523, City 952, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5114, 'regionable_id'=>6792, 'regionable_type'=>'districts']); //Bunaken Kepulauan
            DB::table('regionables')->insert(['region_id'=>5114, 'regionable_id'=>6793, 'regionable_type'=>'districts']); //Bunaken
            DB::table('regionables')->insert(['region_id'=>5114, 'regionable_id'=>6794, 'regionable_type'=>'districts']); //Singkil
            DB::table('regionables')->insert(['region_id'=>5114, 'regionable_id'=>6795, 'regionable_type'=>'districts']); //Tuminiting
                DB::table('regions')->insert(['id'=>5115, 'parent'=>5114, 'code'=>'95238', 'type'=>'village', 'name'=>'Village 95238, Districts 9523, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5115, 'regionable_id'=>77507, 'regionable_type'=>'village']); //Maasing
                DB::table('regions')->insert(['id'=>5116, 'parent'=>5114, 'code'=>'95239', 'type'=>'village', 'name'=>'Village 95239, Districts 9523, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77508, 'regionable_type'=>'village']); //Bitungkarangria
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77509, 'regionable_type'=>'village']); //Islam (kampung Islam)
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77510, 'regionable_type'=>'village']); //Mahawu
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77511, 'regionable_type'=>'village']); //Sindulang Dua
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77512, 'regionable_type'=>'village']); //Sindulang Satu
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77513, 'regionable_type'=>'village']); //Sumompo
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77514, 'regionable_type'=>'village']); //Tuminting
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77515, 'regionable_type'=>'village']); //Tumumpa Dua
                DB::table('regionables')->insert(['region_id'=>5116, 'regionable_id'=>77516, 'regionable_type'=>'village']); //Tumumpa Satu
            DB::table('regions')->insert(['id'=>5117, 'parent'=>5113, 'code'=>'9524', 'type'=>'districts', 'name'=>'Districts 9524, City 952, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5117, 'regionable_id'=>6792, 'regionable_type'=>'districts']); //Bunaken Kepulauan
            DB::table('regionables')->insert(['region_id'=>5117, 'regionable_id'=>6793, 'regionable_type'=>'districts']); //Bunaken
                DB::table('regions')->insert(['id'=>5118, 'parent'=>5117, 'code'=>'95249', 'type'=>'village', 'name'=>'Village 95249, Districts 9524, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5118, 'regionable_id'=>77497, 'regionable_type'=>'village']); //Pandu
            DB::table('regions')->insert(['id'=>5119, 'parent'=>5113, 'code'=>'9525', 'type'=>'districts', 'name'=>'Districts 9525, City 952, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5119, 'regionable_id'=>6796, 'regionable_type'=>'districts']); //Mapanget
                DB::table('regions')->insert(['id'=>5120, 'parent'=>5119, 'code'=>'95251', 'type'=>'village', 'name'=>'Village 95251, Districts 9525, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5120, 'regionable_id'=>77517, 'regionable_type'=>'village']); //Bengkol
                DB::table('regions')->insert(['id'=>5121, 'parent'=>5119, 'code'=>'95252', 'type'=>'village', 'name'=>'Village 95252, Districts 9525, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5121, 'regionable_id'=>77518, 'regionable_type'=>'village']); //Buha
                DB::table('regions')->insert(['id'=>5122, 'parent'=>5119, 'code'=>'95253', 'type'=>'village', 'name'=>'Village 95253, Districts 9525, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5122, 'regionable_id'=>77519, 'regionable_type'=>'village']); //Kairagi Satu
                DB::table('regions')->insert(['id'=>5123, 'parent'=>5119, 'code'=>'95254', 'type'=>'village', 'name'=>'Village 95254, Districts 9525, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5123, 'regionable_id'=>77520, 'regionable_type'=>'village']); //Kairagi Dua
                DB::table('regions')->insert(['id'=>5124, 'parent'=>5119, 'code'=>'95256', 'type'=>'village', 'name'=>'Village 95256, Districts 9525, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5124, 'regionable_id'=>77521, 'regionable_type'=>'village']); //Paniki Bawah
                DB::table('regions')->insert(['id'=>5125, 'parent'=>5119, 'code'=>'95257', 'type'=>'village', 'name'=>'Village 95257, Districts 9525, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5125, 'regionable_id'=>77522, 'regionable_type'=>'village']); //Paniki Dua
                DB::table('regions')->insert(['id'=>5126, 'parent'=>5119, 'code'=>'95258', 'type'=>'village', 'name'=>'Village 95258, Districts 9525, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5126, 'regionable_id'=>77523, 'regionable_type'=>'village']); //Lapangan
                DB::table('regionables')->insert(['region_id'=>5126, 'regionable_id'=>77524, 'regionable_type'=>'village']); //Mapanget Barat
                DB::table('regions')->insert(['id'=>5127, 'parent'=>5119, 'code'=>'95259', 'type'=>'village', 'name'=>'Village 95259, Districts 9525, City 952, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5127, 'regionable_id'=>77525, 'regionable_type'=>'village']); //Kima Atas
                DB::table('regionables')->insert(['region_id'=>5127, 'regionable_id'=>77526, 'regionable_type'=>'village']); //Paniki Satu
        DB::table('regions')->insert(['id'=>5128, 'parent'=>4642, 'code'=>'953', 'type'=>'city', 'name'=>'City 953, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5128, 'regionable_id'=>421, 'regionable_type'=>'city']); //Minahasa Selatan regencies
        DB::table('regionables')->insert(['region_id'=>5128, 'regionable_id'=>422, 'regionable_type'=>'city']); //Minahasa Utara regencies
        DB::table('regionables')->insert(['region_id'=>5128, 'regionable_id'=>423, 'regionable_type'=>'city']); //Minahasa regencies
            DB::table('regions')->insert(['id'=>5129, 'parent'=>5128, 'code'=>'9537', 'type'=>'districts', 'name'=>'Districts 9537, City 953, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6814, 'regionable_type'=>'districts']); //Airmadidi
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6815, 'regionable_type'=>'districts']); //Kauditan
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6816, 'regionable_type'=>'districts']); //Dimembe
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6817, 'regionable_type'=>'districts']); //Talawaan
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6818, 'regionable_type'=>'districts']); //Likupang Selatan
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6819, 'regionable_type'=>'districts']); //Likupang Timur
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6820, 'regionable_type'=>'districts']); //Wori
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6821, 'regionable_type'=>'districts']); //Likupang Barat
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6822, 'regionable_type'=>'districts']); //Kalawat
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6823, 'regionable_type'=>'districts']); //Kema
            DB::table('regionables')->insert(['region_id'=>5129, 'regionable_id'=>6824, 'regionable_type'=>'districts']); //Tondano Utara
                DB::table('regions')->insert(['id'=>5130, 'parent'=>5129, 'code'=>'95371', 'type'=>'village', 'name'=>'Village 95371, Districts 9537, City 953, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77690, 'regionable_type'=>'village']); //Airmadidi Atas
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77691, 'regionable_type'=>'village']); //Airmadidi Bawah
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77692, 'regionable_type'=>'village']); //Rap-rap
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77693, 'regionable_type'=>'village']); //Sampiri
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77694, 'regionable_type'=>'village']); //Sarongsong Dua
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77695, 'regionable_type'=>'village']); //Sarongsong Satu
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77696, 'regionable_type'=>'village']); //Sawangan
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77697, 'regionable_type'=>'village']); //Sukur
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77698, 'regionable_type'=>'village']); //Tanggari
                DB::table('regionables')->insert(['region_id'=>5130, 'regionable_id'=>77821, 'regionable_type'=>'village']); //Tonsea Lama
        DB::table('regions')->insert(['id'=>5131, 'parent'=>4642, 'code'=>'954', 'type'=>'city', 'name'=>'City 954, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5131, 'regionable_id'=>424, 'regionable_type'=>'city']); //Tomohon city
            DB::table('regions')->insert(['id'=>5132, 'parent'=>5131, 'code'=>'9541', 'type'=>'districts', 'name'=>'Districts 9541, City 954, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5132, 'regionable_id'=>6849, 'regionable_type'=>'districts']); //Tomohon Utara
                DB::table('regions')->insert(['id'=>5133, 'parent'=>5132, 'code'=>'95411', 'type'=>'village', 'name'=>'Village 95411, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5133, 'regionable_id'=>78091, 'regionable_type'=>'village']); //Tinoor Dua
                DB::table('regions')->insert(['id'=>5134, 'parent'=>5132, 'code'=>'95412', 'type'=>'village', 'name'=>'Village 95412, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5134, 'regionable_id'=>78092, 'regionable_type'=>'village']); //Tinoor Satu
                DB::table('regions')->insert(['id'=>5135, 'parent'=>5132, 'code'=>'95413', 'type'=>'village', 'name'=>'Village 95413, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5135, 'regionable_id'=>78093, 'regionable_type'=>'village']); //Kinilow Satu
                DB::table('regions')->insert(['id'=>5136, 'parent'=>5132, 'code'=>'95414', 'type'=>'village', 'name'=>'Village 95414, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5136, 'regionable_id'=>78094, 'regionable_type'=>'village']); //Kinilow
                DB::table('regions')->insert(['id'=>5137, 'parent'=>5132, 'code'=>'95415', 'type'=>'village', 'name'=>'Village 95415, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5137, 'regionable_id'=>78095, 'regionable_type'=>'village']); //Kakaskasen Satu
                DB::table('regions')->insert(['id'=>5138, 'parent'=>5132, 'code'=>'95416', 'type'=>'village', 'name'=>'Village 95416, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5138, 'regionable_id'=>78096, 'regionable_type'=>'village']); //Kakaskasen Dua
                DB::table('regions')->insert(['id'=>5139, 'parent'=>5132, 'code'=>'95417', 'type'=>'village', 'name'=>'Village 95417, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5139, 'regionable_id'=>78097, 'regionable_type'=>'village']); //Kakaskasen Tiga
                DB::table('regions')->insert(['id'=>5140, 'parent'=>5132, 'code'=>'95418', 'type'=>'village', 'name'=>'Village 95418, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5140, 'regionable_id'=>78098, 'regionable_type'=>'village']); //Kakaskasen
                DB::table('regionables')->insert(['region_id'=>5140, 'regionable_id'=>78099, 'regionable_type'=>'village']); //Wailan
                DB::table('regions')->insert(['id'=>5141, 'parent'=>5132, 'code'=>'95419', 'type'=>'village', 'name'=>'Village 95419, Districts 9541, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5141, 'regionable_id'=>78100, 'regionable_type'=>'village']); //Kayawu
            DB::table('regions')->insert(['id'=>5142, 'parent'=>5131, 'code'=>'9542', 'type'=>'districts', 'name'=>'Districts 9542, City 954, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5142, 'regionable_id'=>6850, 'regionable_type'=>'districts']); //Tomohon Barat
                DB::table('regions')->insert(['id'=>5143, 'parent'=>5142, 'code'=>'95421', 'type'=>'village', 'name'=>'Village 95421, Districts 9542, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5143, 'regionable_id'=>78101, 'regionable_type'=>'village']); //Woloan Satu
                DB::table('regions')->insert(['id'=>5144, 'parent'=>5142, 'code'=>'95422', 'type'=>'village', 'name'=>'Village 95422, Districts 9542, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5144, 'regionable_id'=>78102, 'regionable_type'=>'village']); //Woloan Dua
                DB::table('regions')->insert(['id'=>5145, 'parent'=>5142, 'code'=>'95423', 'type'=>'village', 'name'=>'Village 95423, Districts 9542, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5145, 'regionable_id'=>78103, 'regionable_type'=>'village']); //Taratara
                DB::table('regionables')->insert(['region_id'=>5145, 'regionable_id'=>78104, 'regionable_type'=>'village']); //Taratara Tiga
                DB::table('regionables')->insert(['region_id'=>5145, 'regionable_id'=>78105, 'regionable_type'=>'village']); //Woloan Satu Utara
                DB::table('regionables')->insert(['region_id'=>5145, 'regionable_id'=>78106, 'regionable_type'=>'village']); //Woloan Tiga
                DB::table('regions')->insert(['id'=>5146, 'parent'=>5142, 'code'=>'95424', 'type'=>'village', 'name'=>'Village 95424, Districts 9542, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5146, 'regionable_id'=>78107, 'regionable_type'=>'village']); //Taratara Dua
                DB::table('regions')->insert(['id'=>5147, 'parent'=>5142, 'code'=>'95425', 'type'=>'village', 'name'=>'Village 95425, Districts 9542, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5147, 'regionable_id'=>78108, 'regionable_type'=>'village']); //Taratara Satu
            DB::table('regions')->insert(['id'=>5148, 'parent'=>5131, 'code'=>'9543', 'type'=>'districts', 'name'=>'Districts 9543, City 954, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5148, 'regionable_id'=>6851, 'regionable_type'=>'districts']); //Tomohon Selatan
                DB::table('regions')->insert(['id'=>5149, 'parent'=>5148, 'code'=>'95431', 'type'=>'village', 'name'=>'Village 95431, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5149, 'regionable_id'=>78109, 'regionable_type'=>'village']); //Lansot
                DB::table('regions')->insert(['id'=>5150, 'parent'=>5148, 'code'=>'95432', 'type'=>'village', 'name'=>'Village 95432, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5150, 'regionable_id'=>78110, 'regionable_type'=>'village']); //Tumatangtang
                DB::table('regions')->insert(['id'=>5151, 'parent'=>5148, 'code'=>'95433', 'type'=>'village', 'name'=>'Village 95433, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5151, 'regionable_id'=>78111, 'regionable_type'=>'village']); //Kampung Jawa
                DB::table('regions')->insert(['id'=>5152, 'parent'=>5148, 'code'=>'95434', 'type'=>'village', 'name'=>'Village 95434, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5152, 'regionable_id'=>78112, 'regionable_type'=>'village']); //Pinaras
                DB::table('regions')->insert(['id'=>5153, 'parent'=>5148, 'code'=>'95435', 'type'=>'village', 'name'=>'Village 95435, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5153, 'regionable_id'=>78113, 'regionable_type'=>'village']); //Lahendong
                DB::table('regions')->insert(['id'=>5154, 'parent'=>5148, 'code'=>'95436', 'type'=>'village', 'name'=>'Village 95436, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5154, 'regionable_id'=>78114, 'regionable_type'=>'village']); //Tondangow
                DB::table('regions')->insert(['id'=>5155, 'parent'=>5148, 'code'=>'95437', 'type'=>'village', 'name'=>'Village 95437, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5155, 'regionable_id'=>78115, 'regionable_type'=>'village']); //Pangolombian
                DB::table('regions')->insert(['id'=>5156, 'parent'=>5148, 'code'=>'95438', 'type'=>'village', 'name'=>'Village 95438, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5156, 'regionable_id'=>78116, 'regionable_type'=>'village']); //Uluindano
                DB::table('regions')->insert(['id'=>5157, 'parent'=>5148, 'code'=>'95439', 'type'=>'village', 'name'=>'Village 95439, Districts 9543, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5157, 'regionable_id'=>78117, 'regionable_type'=>'village']); //Tumatangtang Satu
                DB::table('regionables')->insert(['region_id'=>5157, 'regionable_id'=>78118, 'regionable_type'=>'village']); //Walian
                DB::table('regionables')->insert(['region_id'=>5157, 'regionable_id'=>78119, 'regionable_type'=>'village']); //Walian Dua
                DB::table('regionables')->insert(['region_id'=>5157, 'regionable_id'=>78120, 'regionable_type'=>'village']); //Walian Satu
            DB::table('regions')->insert(['id'=>5158, 'parent'=>5131, 'code'=>'9544', 'type'=>'districts', 'name'=>'Districts 9544, City 954, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5158, 'regionable_id'=>6852, 'regionable_type'=>'districts']); //Tomohon Tengah
            DB::table('regionables')->insert(['region_id'=>5158, 'regionable_id'=>6853, 'regionable_type'=>'districts']); //Tomohon Timur
                DB::table('regions')->insert(['id'=>5159, 'parent'=>5158, 'code'=>'95446', 'type'=>'village', 'name'=>'Village 95446, Districts 9544, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5159, 'regionable_id'=>78130, 'regionable_type'=>'village']); //Paslaten Dua
                DB::table('regionables')->insert(['region_id'=>5159, 'regionable_id'=>78131, 'regionable_type'=>'village']); //Paslaten Satu
                DB::table('regions')->insert(['id'=>5160, 'parent'=>5158, 'code'=>'95447', 'type'=>'village', 'name'=>'Village 95447, Districts 9544, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5160, 'regionable_id'=>78132, 'regionable_type'=>'village']); //Rurukan
                DB::table('regions')->insert(['id'=>5161, 'parent'=>5158, 'code'=>'95449', 'type'=>'village', 'name'=>'Village 95449, Districts 9544, City 954, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5161, 'regionable_id'=>78133, 'regionable_type'=>'village']); //Kumelembuai (kumelembuay)
                DB::table('regionables')->insert(['region_id'=>5161, 'regionable_id'=>78134, 'regionable_type'=>'village']); //Rurukan Satu
        DB::table('regions')->insert(['id'=>5162, 'parent'=>4642, 'code'=>'955', 'type'=>'city', 'name'=>'City 955, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5162, 'regionable_id'=>425, 'regionable_type'=>'city']); //Bitung city
            DB::table('regions')->insert(['id'=>5163, 'parent'=>5162, 'code'=>'9551', 'type'=>'districts', 'name'=>'Districts 9551, City 955, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5163, 'regionable_id'=>6854, 'regionable_type'=>'districts']); //Maesa
            DB::table('regionables')->insert(['region_id'=>5163, 'regionable_id'=>6855, 'regionable_type'=>'districts']); //Girian
            DB::table('regionables')->insert(['region_id'=>5163, 'regionable_id'=>6856, 'regionable_type'=>'districts']); //Madidir (bitung Tengah)
                DB::table('regions')->insert(['id'=>5164, 'parent'=>5163, 'code'=>'95513', 'type'=>'village', 'name'=>'Village 95513, Districts 9551, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5164, 'regionable_id'=>78150, 'regionable_type'=>'village']); //Kadoodan
                DB::table('regions')->insert(['id'=>5165, 'parent'=>5163, 'code'=>'95514', 'type'=>'village', 'name'=>'Village 95514, Districts 9551, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5165, 'regionable_id'=>78151, 'regionable_type'=>'village']); //Madidir Weru
                DB::table('regions')->insert(['id'=>5166, 'parent'=>5163, 'code'=>'95515', 'type'=>'village', 'name'=>'Village 95515, Districts 9551, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5166, 'regionable_id'=>78152, 'regionable_type'=>'village']); //Madidir Ure
                DB::table('regions')->insert(['id'=>5167, 'parent'=>5163, 'code'=>'95516', 'type'=>'village', 'name'=>'Village 95516, Districts 9551, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5167, 'regionable_id'=>78153, 'regionable_type'=>'village']); //Madidir Unet
            DB::table('regions')->insert(['id'=>5168, 'parent'=>5162, 'code'=>'9552', 'type'=>'districts', 'name'=>'Districts 9552, City 955, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5168, 'regionable_id'=>6854, 'regionable_type'=>'districts']); //Maesa
            DB::table('regionables')->insert(['region_id'=>5168, 'regionable_id'=>6857, 'regionable_type'=>'districts']); //Aertembaga (bitung Timur)
                DB::table('regions')->insert(['id'=>5169, 'parent'=>5168, 'code'=>'95521', 'type'=>'village', 'name'=>'Village 95521, Districts 9552, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5169, 'regionable_id'=>78139, 'regionable_type'=>'village']); //Bitung Tengah
                DB::table('regionables')->insert(['region_id'=>5169, 'regionable_id'=>78158, 'regionable_type'=>'village']); //Kasawari
                DB::table('regions')->insert(['id'=>5170, 'parent'=>5168, 'code'=>'95524', 'type'=>'village', 'name'=>'Village 95524, Districts 9552, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5170, 'regionable_id'=>78159, 'regionable_type'=>'village']); //Peteten Dua (ii)
                DB::table('regionables')->insert(['region_id'=>5170, 'regionable_id'=>78160, 'regionable_type'=>'village']); //Peteten Satu (i)
                DB::table('regions')->insert(['id'=>5171, 'parent'=>5168, 'code'=>'95525', 'type'=>'village', 'name'=>'Village 95525, Districts 9552, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5171, 'regionable_id'=>78161, 'regionable_type'=>'village']); //Winenet Dua (ii)
                DB::table('regionables')->insert(['region_id'=>5171, 'regionable_id'=>78162, 'regionable_type'=>'village']); //Winenet Satu (i)
                DB::table('regions')->insert(['id'=>5172, 'parent'=>5168, 'code'=>'95526', 'type'=>'village', 'name'=>'Village 95526, Districts 9552, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5172, 'regionable_id'=>78163, 'regionable_type'=>'village']); //Aertembaga Dua (ii)
                DB::table('regionables')->insert(['region_id'=>5172, 'regionable_id'=>78164, 'regionable_type'=>'village']); //Aertembaga Satu (i)
                DB::table('regions')->insert(['id'=>5173, 'parent'=>5168, 'code'=>'95527', 'type'=>'village', 'name'=>'Village 95527, Districts 9552, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5173, 'regionable_id'=>78165, 'regionable_type'=>'village']); //Tandu Rusa
                DB::table('regions')->insert(['id'=>5174, 'parent'=>5168, 'code'=>'95528', 'type'=>'village', 'name'=>'Village 95528, Districts 9552, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5174, 'regionable_id'=>78166, 'regionable_type'=>'village']); //Makawidey
                DB::table('regions')->insert(['id'=>5175, 'parent'=>5168, 'code'=>'95529', 'type'=>'village', 'name'=>'Village 95529, Districts 9552, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5175, 'regionable_id'=>78167, 'regionable_type'=>'village']); //Pinangunian
            DB::table('regions')->insert(['id'=>5176, 'parent'=>5162, 'code'=>'9553', 'type'=>'districts', 'name'=>'Districts 9553, City 955, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5176, 'regionable_id'=>6858, 'regionable_type'=>'districts']); //Ranowulu (bitung Utara)
            DB::table('regionables')->insert(['region_id'=>5176, 'regionable_id'=>6859, 'regionable_type'=>'districts']); //Matuari (bitung Barat)
                DB::table('regions')->insert(['id'=>5177, 'parent'=>5176, 'code'=>'95539', 'type'=>'village', 'name'=>'Village 95539, Districts 9553, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5177, 'regionable_id'=>78179, 'regionable_type'=>'village']); //Tendeki
            DB::table('regions')->insert(['id'=>5178, 'parent'=>5162, 'code'=>'9554', 'type'=>'districts', 'name'=>'Districts 9554, City 955, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5178, 'regionable_id'=>6855, 'regionable_type'=>'districts']); //Girian
            DB::table('regionables')->insert(['region_id'=>5178, 'regionable_id'=>6856, 'regionable_type'=>'districts']); //Madidir (bitung Tengah)
            DB::table('regionables')->insert(['region_id'=>5178, 'regionable_id'=>6859, 'regionable_type'=>'districts']); //Matuari (bitung Barat)
                DB::table('regions')->insert(['id'=>5179, 'parent'=>5178, 'code'=>'95545', 'type'=>'village', 'name'=>'Village 95545, Districts 9554, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5179, 'regionable_id'=>78180, 'regionable_type'=>'village']); //Manembo Nembo Atas
                DB::table('regionables')->insert(['region_id'=>5179, 'regionable_id'=>78181, 'regionable_type'=>'village']); //Manembo Nembo Bawah
                DB::table('regionables')->insert(['region_id'=>5179, 'regionable_id'=>78182, 'regionable_type'=>'village']); //Manembo Nembo Tengah
                DB::table('regions')->insert(['id'=>5180, 'parent'=>5178, 'code'=>'95546', 'type'=>'village', 'name'=>'Village 95546, Districts 9554, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5180, 'regionable_id'=>78183, 'regionable_type'=>'village']); //Sagerat
                DB::table('regionables')->insert(['region_id'=>5180, 'regionable_id'=>78184, 'regionable_type'=>'village']); //Sagerat Weru Dua (ii)
                DB::table('regionables')->insert(['region_id'=>5180, 'regionable_id'=>78185, 'regionable_type'=>'village']); //Sagerat Weru Satu (i)
                DB::table('regions')->insert(['id'=>5181, 'parent'=>5178, 'code'=>'95547', 'type'=>'village', 'name'=>'Village 95547, Districts 9554, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5181, 'regionable_id'=>78186, 'regionable_type'=>'village']); //Tanjung Merah
            DB::table('regions')->insert(['id'=>5182, 'parent'=>5162, 'code'=>'9555', 'type'=>'districts', 'name'=>'Districts 9555, City 955, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5182, 'regionable_id'=>6860, 'regionable_type'=>'districts']); //Lembeh Utara
            DB::table('regionables')->insert(['region_id'=>5182, 'regionable_id'=>6861, 'regionable_type'=>'districts']); //Lembeh Selatan (bitung Selatan)
                DB::table('regions')->insert(['id'=>5183, 'parent'=>5182, 'code'=>'95551', 'type'=>'village', 'name'=>'Village 95551, Districts 9555, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5183, 'regionable_id'=>78187, 'regionable_type'=>'village']); //Batukota
                DB::table('regionables')->insert(['region_id'=>5183, 'regionable_id'=>78188, 'regionable_type'=>'village']); //Gunung Woka (batu Woka)
                DB::table('regionables')->insert(['region_id'=>5183, 'regionable_id'=>78189, 'regionable_type'=>'village']); //Kareko
                DB::table('regionables')->insert(['region_id'=>5183, 'regionable_id'=>78190, 'regionable_type'=>'village']); //Nusu
                DB::table('regionables')->insert(['region_id'=>5183, 'regionable_id'=>78191, 'regionable_type'=>'village']); //Posokan
                DB::table('regionables')->insert(['region_id'=>5183, 'regionable_id'=>78197, 'regionable_type'=>'village']); //Dorbolaang (dorbolaan)
                DB::table('regionables')->insert(['region_id'=>5183, 'regionable_id'=>78198, 'regionable_type'=>'village']); //Paudean
                DB::table('regions')->insert(['id'=>5184, 'parent'=>5182, 'code'=>'95552', 'type'=>'village', 'name'=>'Village 95552, Districts 9555, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5184, 'regionable_id'=>78199, 'regionable_type'=>'village']); //Batulubang
                DB::table('regions')->insert(['id'=>5185, 'parent'=>5182, 'code'=>'95553', 'type'=>'village', 'name'=>'Village 95553, Districts 9555, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5185, 'regionable_id'=>78200, 'regionable_type'=>'village']); //Pasirpanjang
                DB::table('regions')->insert(['id'=>5186, 'parent'=>5182, 'code'=>'95554', 'type'=>'village', 'name'=>'Village 95554, Districts 9555, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5186, 'regionable_id'=>78201, 'regionable_type'=>'village']); //Papusungan
                DB::table('regions')->insert(['id'=>5187, 'parent'=>5182, 'code'=>'95556', 'type'=>'village', 'name'=>'Village 95556, Districts 9555, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5187, 'regionable_id'=>78202, 'regionable_type'=>'village']); //Pancuran
                DB::table('regions')->insert(['id'=>5188, 'parent'=>5182, 'code'=>'95558', 'type'=>'village', 'name'=>'Village 95558, Districts 9555, City 955, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5188, 'regionable_id'=>78194, 'regionable_type'=>'village']); //Binuang
                DB::table('regionables')->insert(['region_id'=>5188, 'regionable_id'=>78203, 'regionable_type'=>'village']); //Kelapa Dua
        DB::table('regions')->insert(['id'=>5189, 'parent'=>4642, 'code'=>'956', 'type'=>'city', 'name'=>'City 956, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5189, 'regionable_id'=>423, 'regionable_type'=>'city']); //Minahasa regencies
            DB::table('regions')->insert(['id'=>5190, 'parent'=>5189, 'code'=>'9561', 'type'=>'districts', 'name'=>'Districts 9561, City 956, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5190, 'regionable_id'=>6824, 'regionable_type'=>'districts']); //Tondano Utara
            DB::table('regionables')->insert(['region_id'=>5190, 'regionable_id'=>6825, 'regionable_type'=>'districts']); //Tondano Timur
            DB::table('regionables')->insert(['region_id'=>5190, 'regionable_id'=>6826, 'regionable_type'=>'districts']); //Tondano Barat
            DB::table('regionables')->insert(['region_id'=>5190, 'regionable_id'=>6827, 'regionable_type'=>'districts']); //Tondano Selatan
                DB::table('regions')->insert(['id'=>5191, 'parent'=>5190, 'code'=>'95618', 'type'=>'village', 'name'=>'Village 95618, Districts 9561, City 956, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5191, 'regionable_id'=>77849, 'regionable_type'=>'village']); //Koya
                DB::table('regionables')->insert(['region_id'=>5191, 'regionable_id'=>77850, 'regionable_type'=>'village']); //Maesa Unima
                DB::table('regionables')->insert(['region_id'=>5191, 'regionable_id'=>77851, 'regionable_type'=>'village']); //Tataaran Dua (ii)
                DB::table('regionables')->insert(['region_id'=>5191, 'regionable_id'=>77852, 'regionable_type'=>'village']); //Tataaran Satu (i)
                DB::table('regions')->insert(['id'=>5192, 'parent'=>5190, 'code'=>'95619', 'type'=>'village', 'name'=>'Village 95619, Districts 9561, City 956, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5192, 'regionable_id'=>77853, 'regionable_type'=>'village']); //Peleloan
                DB::table('regionables')->insert(['region_id'=>5192, 'regionable_id'=>77854, 'regionable_type'=>'village']); //Tataaran Patar
                DB::table('regionables')->insert(['region_id'=>5192, 'regionable_id'=>77855, 'regionable_type'=>'village']); //Tounsaru
                DB::table('regionables')->insert(['region_id'=>5192, 'regionable_id'=>77856, 'regionable_type'=>'village']); //Urongo
            DB::table('regions')->insert(['id'=>5193, 'parent'=>5189, 'code'=>'9565', 'type'=>'districts', 'name'=>'Districts 9565, City 956, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5193, 'regionable_id'=>6828, 'regionable_type'=>'districts']); //Tombariri
            DB::table('regionables')->insert(['region_id'=>5193, 'regionable_id'=>6829, 'regionable_type'=>'districts']); //Tombariri Timur
                DB::table('regions')->insert(['id'=>5194, 'parent'=>5193, 'code'=>'95651', 'type'=>'village', 'name'=>'Village 95651, Districts 9565, City 956, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77857, 'regionable_type'=>'village']); //Borgo
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77858, 'regionable_type'=>'village']); //Kumu
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77859, 'regionable_type'=>'village']); //Mokupa
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77860, 'regionable_type'=>'village']); //Pinasungkulan
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77861, 'regionable_type'=>'village']); //Poopoh
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77862, 'regionable_type'=>'village']); //Ranowangko
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77863, 'regionable_type'=>'village']); //Sarani Matani
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77864, 'regionable_type'=>'village']); //Senduk
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77865, 'regionable_type'=>'village']); //Tambala
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77866, 'regionable_type'=>'village']); //Teling
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77867, 'regionable_type'=>'village']); //Lemoh
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77868, 'regionable_type'=>'village']); //Lemoh Barat
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77869, 'regionable_type'=>'village']); //Lemoh Timur
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77870, 'regionable_type'=>'village']); //Lemoh Uner
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77871, 'regionable_type'=>'village']); //Lolah
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77872, 'regionable_type'=>'village']); //Lolah Dua
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77873, 'regionable_type'=>'village']); //Lolah Satu
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77874, 'regionable_type'=>'village']); //Lolah Tiga
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77875, 'regionable_type'=>'village']); //Ranotongkor
                DB::table('regionables')->insert(['region_id'=>5194, 'regionable_id'=>77876, 'regionable_type'=>'village']); //Ranotongkor Timur
            DB::table('regions')->insert(['id'=>5195, 'parent'=>5189, 'code'=>'9566', 'type'=>'districts', 'name'=>'Districts 9566, City 956, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5195, 'regionable_id'=>6830, 'regionable_type'=>'districts']); //Mandolang
            DB::table('regionables')->insert(['region_id'=>5195, 'regionable_id'=>6831, 'regionable_type'=>'districts']); //Pineleng
            DB::table('regionables')->insert(['region_id'=>5195, 'regionable_id'=>6832, 'regionable_type'=>'districts']); //Tombulu
                DB::table('regions')->insert(['id'=>5196, 'parent'=>5195, 'code'=>'95661', 'type'=>'village', 'name'=>'Village 95661, Districts 9566, City 956, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77877, 'regionable_type'=>'village']); //Agotey
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77878, 'regionable_type'=>'village']); //Kalasey Dua
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77879, 'regionable_type'=>'village']); //Kalasey Satu
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77880, 'regionable_type'=>'village']); //Koha
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77881, 'regionable_type'=>'village']); //Koha Barat
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77882, 'regionable_type'=>'village']); //Koha Selatan
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77883, 'regionable_type'=>'village']); //Koha Timur
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77884, 'regionable_type'=>'village']); //Tateli
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77885, 'regionable_type'=>'village']); //Tateli Dua
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77886, 'regionable_type'=>'village']); //Tateli Satu
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77887, 'regionable_type'=>'village']); //Tateli Tiga
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77888, 'regionable_type'=>'village']); //Tateli Weru
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77889, 'regionable_type'=>'village']); //Kali
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77890, 'regionable_type'=>'village']); //Kali Selatan
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77891, 'regionable_type'=>'village']); //Lotta
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77892, 'regionable_type'=>'village']); //Pineleng Dua
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77893, 'regionable_type'=>'village']); //Pineleng Dua Indah
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77894, 'regionable_type'=>'village']); //Pineleng Satu
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77895, 'regionable_type'=>'village']); //Pineleng Satu Timur
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77896, 'regionable_type'=>'village']); //Sea
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77897, 'regionable_type'=>'village']); //Sea I
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77898, 'regionable_type'=>'village']); //Sea Ii
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77899, 'regionable_type'=>'village']); //Sea Mitra
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77900, 'regionable_type'=>'village']); //Sea Tumpengan
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77901, 'regionable_type'=>'village']); //Warembungan
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77902, 'regionable_type'=>'village']); //Winangun Atas
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77903, 'regionable_type'=>'village']); //Kamangta
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77904, 'regionable_type'=>'village']); //Kembes Dua
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77905, 'regionable_type'=>'village']); //Kembes Satu
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77906, 'regionable_type'=>'village']); //Koka
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77907, 'regionable_type'=>'village']); //Rumengkor
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77908, 'regionable_type'=>'village']); //Rumengkor Dua
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77909, 'regionable_type'=>'village']); //Rumengkor Satu
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77910, 'regionable_type'=>'village']); //Sawangan
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77911, 'regionable_type'=>'village']); //Suluan
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77912, 'regionable_type'=>'village']); //Tikela
                DB::table('regionables')->insert(['region_id'=>5196, 'regionable_id'=>77913, 'regionable_type'=>'village']); //Tombuluan
            DB::table('regions')->insert(['id'=>5197, 'parent'=>5189, 'code'=>'9568', 'type'=>'districts', 'name'=>'Districts 9568, City 956, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5197, 'regionable_id'=>6833, 'regionable_type'=>'districts']); //Remboken
            DB::table('regionables')->insert(['region_id'=>5197, 'regionable_id'=>6834, 'regionable_type'=>'districts']); //Kakas Barat
            DB::table('regionables')->insert(['region_id'=>5197, 'regionable_id'=>6835, 'regionable_type'=>'districts']); //Kakas
            DB::table('regionables')->insert(['region_id'=>5197, 'regionable_id'=>6836, 'regionable_type'=>'districts']); //Lembean Timur
            DB::table('regionables')->insert(['region_id'=>5197, 'regionable_id'=>6837, 'regionable_type'=>'districts']); //Eris
            DB::table('regionables')->insert(['region_id'=>5197, 'regionable_id'=>6838, 'regionable_type'=>'districts']); //Kombi
                DB::table('regions')->insert(['id'=>5198, 'parent'=>5197, 'code'=>'95684', 'type'=>'village', 'name'=>'Village 95684, Districts 9568, City 956, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77967, 'regionable_type'=>'village']); //Kalawiran
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77968, 'regionable_type'=>'village']); //Kayu Besi
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77969, 'regionable_type'=>'village']); //Kinaselon (kinaleosan)
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77970, 'regionable_type'=>'village']); //Kolongan
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77971, 'regionable_type'=>'village']); //Kolongan I
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77972, 'regionable_type'=>'village']); //Kombi
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77973, 'regionable_type'=>'village']); //Lalumpe
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77974, 'regionable_type'=>'village']); //Makalisung
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77975, 'regionable_type'=>'village']); //Ranowangko Dua
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77976, 'regionable_type'=>'village']); //Rerer
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77977, 'regionable_type'=>'village']); //Rerer I
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77978, 'regionable_type'=>'village']); //Sawangan
                DB::table('regionables')->insert(['region_id'=>5198, 'regionable_id'=>77979, 'regionable_type'=>'village']); //Tulap
            DB::table('regions')->insert(['id'=>5199, 'parent'=>5189, 'code'=>'9569', 'type'=>'districts', 'name'=>'Districts 9569, City 956, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6839, 'regionable_type'=>'districts']); //Sonder
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6840, 'regionable_type'=>'districts']); //Kawangkoan Barat
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6841, 'regionable_type'=>'districts']); //Kawangkoan
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6842, 'regionable_type'=>'districts']); //Kawangkoan Utara
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6843, 'regionable_type'=>'districts']); //Tompaso
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6844, 'regionable_type'=>'districts']); //Tompaso Barat
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6845, 'regionable_type'=>'districts']); //Langowan Timur
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6846, 'regionable_type'=>'districts']); //Langowan Barat
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6847, 'regionable_type'=>'districts']); //Langowan Selatan
            DB::table('regionables')->insert(['region_id'=>5199, 'regionable_id'=>6848, 'regionable_type'=>'districts']); //Langowan Utara
                DB::table('regions')->insert(['id'=>5200, 'parent'=>5199, 'code'=>'95694', 'type'=>'village', 'name'=>'Village 95694, Districts 9569, City 956, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78049, 'regionable_type'=>'village']); //Amongena Dua (ii)
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78050, 'regionable_type'=>'village']); //Amongena Satu (i)
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78051, 'regionable_type'=>'village']); //Amongena Tiga
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78052, 'regionable_type'=>'village']); //Karondoran
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78053, 'regionable_type'=>'village']); //Sumarayar
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78054, 'regionable_type'=>'village']); //Teep
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78055, 'regionable_type'=>'village']); //Waleure
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78056, 'regionable_type'=>'village']); //Wolaang
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78057, 'regionable_type'=>'village']); //Ampreng
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78058, 'regionable_type'=>'village']); //Kopiwangker
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78059, 'regionable_type'=>'village']); //Koyawas
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78060, 'regionable_type'=>'village']); //Lowian
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78061, 'regionable_type'=>'village']); //Noongan I
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78062, 'regionable_type'=>'village']); //Noongan Ii
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78063, 'regionable_type'=>'village']); //Noongan Iii
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78064, 'regionable_type'=>'village']); //Paslateh (paslaten)
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78065, 'regionable_type'=>'village']); //Raranon
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78066, 'regionable_type'=>'village']); //Raringis
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78067, 'regionable_type'=>'village']); //Raringis Selatan
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78068, 'regionable_type'=>'village']); //Raringis Utara
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78069, 'regionable_type'=>'village']); //Tounelet
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78070, 'regionable_type'=>'village']); //Tumaratas I
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78071, 'regionable_type'=>'village']); //Tumaratas Ii
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78072, 'regionable_type'=>'village']); //Walewangko
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78073, 'regionable_type'=>'village']); //Atep
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78074, 'regionable_type'=>'village']); //Atep Satu
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78075, 'regionable_type'=>'village']); //Kaayuran Atas
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78076, 'regionable_type'=>'village']); //Kaayuran Bawah
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78077, 'regionable_type'=>'village']); //Kawatak
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78078, 'regionable_type'=>'village']); //Manembo
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78079, 'regionable_type'=>'village']); //Palamba
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78080, 'regionable_type'=>'village']); //Rumbia
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78081, 'regionable_type'=>'village']); //Temboan
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78082, 'regionable_type'=>'village']); //Winebetan
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78083, 'regionable_type'=>'village']); //Karumenga
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78084, 'regionable_type'=>'village']); //Taraitak
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78085, 'regionable_type'=>'village']); //Taraitak Satu
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78086, 'regionable_type'=>'village']); //Tempang I
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78087, 'regionable_type'=>'village']); //Tempang Ii
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78088, 'regionable_type'=>'village']); //Tempang Iii
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78089, 'regionable_type'=>'village']); //Toraget
                DB::table('regionables')->insert(['region_id'=>5200, 'regionable_id'=>78090, 'regionable_type'=>'village']); //Walantakan
        DB::table('regions')->insert(['id'=>5201, 'parent'=>4642, 'code'=>'957', 'type'=>'city', 'name'=>'City 957, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5201, 'regionable_id'=>426, 'regionable_type'=>'city']); //Kotamobagu city
        DB::table('regionables')->insert(['region_id'=>5201, 'regionable_id'=>427, 'regionable_type'=>'city']); //Bolaang Mongondow (bolmong) regencies
        DB::table('regionables')->insert(['region_id'=>5201, 'regionable_id'=>428, 'regionable_type'=>'city']); //Bolaang Mongondow Utara regencies
        DB::table('regionables')->insert(['region_id'=>5201, 'regionable_id'=>429, 'regionable_type'=>'city']); //Bolaang Mongondow Selatan regencies
        DB::table('regionables')->insert(['region_id'=>5201, 'regionable_id'=>430, 'regionable_type'=>'city']); //Bolaang Mongondow Timur regencies
            DB::table('regions')->insert(['id'=>5202, 'parent'=>5201, 'code'=>'9577', 'type'=>'districts', 'name'=>'Districts 9577, City 957, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6874, 'regionable_type'=>'districts']); //Lolayan
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6875, 'regionable_type'=>'districts']); //Dumoga Timur
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6876, 'regionable_type'=>'districts']); //Dumoga Tenggara
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6877, 'regionable_type'=>'districts']); //Dumoga
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6878, 'regionable_type'=>'districts']); //Dumoga Utara
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6879, 'regionable_type'=>'districts']); //Dumoga Barat
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6880, 'regionable_type'=>'districts']); //Dumoga Tengah
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6887, 'regionable_type'=>'districts']); //Bolaang Uki
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6888, 'regionable_type'=>'districts']); //Posigadan
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6889, 'regionable_type'=>'districts']); //Pinolosian Tengah
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6890, 'regionable_type'=>'districts']); //Pinolosian Timur
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6891, 'regionable_type'=>'districts']); //Pinolosian
            DB::table('regionables')->insert(['region_id'=>5202, 'regionable_id'=>6892, 'regionable_type'=>'districts']); //Nuangan
                DB::table('regions')->insert(['id'=>5203, 'parent'=>5202, 'code'=>'95775', 'type'=>'village', 'name'=>'Village 95775, Districts 9577, City 957, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78568, 'regionable_type'=>'village']); //Adow
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78569, 'regionable_type'=>'village']); //Adow Selatan
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78570, 'regionable_type'=>'village']); //Deaga
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78571, 'regionable_type'=>'village']); //Mataindo
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78572, 'regionable_type'=>'village']); //Tobayagan
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78573, 'regionable_type'=>'village']); //Torosik
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78574, 'regionable_type'=>'village']); //Dayow
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78575, 'regionable_type'=>'village']); //Dumagin A
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78576, 'regionable_type'=>'village']); //Dumagin B
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78577, 'regionable_type'=>'village']); //Iligon
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78578, 'regionable_type'=>'village']); //Matandoi (motandoi)
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78579, 'regionable_type'=>'village']); //Modisi
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78580, 'regionable_type'=>'village']); //Onggunoi
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78581, 'regionable_type'=>'village']); //Pidung
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78582, 'regionable_type'=>'village']); //Posilagon
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78583, 'regionable_type'=>'village']); //Ilomata
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78584, 'regionable_type'=>'village']); //Kombot
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78585, 'regionable_type'=>'village']); //Linawan
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78586, 'regionable_type'=>'village']); //Linawan I
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78587, 'regionable_type'=>'village']); //Lungkap
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78588, 'regionable_type'=>'village']); //Nunuk
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78589, 'regionable_type'=>'village']); //Pinolosian
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78590, 'regionable_type'=>'village']); //Pinolosian Selatan
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78591, 'regionable_type'=>'village']); //Tolotoyon
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78592, 'regionable_type'=>'village']); //Atoga
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78593, 'regionable_type'=>'village']); //Atoga Timur
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78594, 'regionable_type'=>'village']); //Bai
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78595, 'regionable_type'=>'village']); //Idumun
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78596, 'regionable_type'=>'village']); //Iyok
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78597, 'regionable_type'=>'village']); //Jiko
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78598, 'regionable_type'=>'village']); //Jiko Belanga
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78599, 'regionable_type'=>'village']); //Jiko Utara
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78600, 'regionable_type'=>'village']); //Loyow
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78601, 'regionable_type'=>'village']); //Matabulu
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78602, 'regionable_type'=>'village']); //Matabulu Timur
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78603, 'regionable_type'=>'village']); //Molobog
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78604, 'regionable_type'=>'village']); //Molobog Barat
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78605, 'regionable_type'=>'village']); //Molobog Timur
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78606, 'regionable_type'=>'village']); //Motongkad
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78607, 'regionable_type'=>'village']); //Motongkad Selatan
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78608, 'regionable_type'=>'village']); //Motongkad Tengah
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78609, 'regionable_type'=>'village']); //Motongkad Utara
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78610, 'regionable_type'=>'village']); //Nuangan
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78611, 'regionable_type'=>'village']); //Nuangan Barat
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78612, 'regionable_type'=>'village']); //Nuangan I
                DB::table('regionables')->insert(['region_id'=>5203, 'regionable_id'=>78613, 'regionable_type'=>'village']); //Nuangan Selatan
            DB::table('regions')->insert(['id'=>5204, 'parent'=>5201, 'code'=>'9578', 'type'=>'districts', 'name'=>'Districts 9578, City 957, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5204, 'regionable_id'=>6893, 'regionable_type'=>'districts']); //Modayag
            DB::table('regionables')->insert(['region_id'=>5204, 'regionable_id'=>6894, 'regionable_type'=>'districts']); //Modayag Barat
            DB::table('regionables')->insert(['region_id'=>5204, 'regionable_id'=>6895, 'regionable_type'=>'districts']); //Kotabunan
            DB::table('regionables')->insert(['region_id'=>5204, 'regionable_id'=>6896, 'regionable_type'=>'districts']); //Tutuyan
                DB::table('regions')->insert(['id'=>5205, 'parent'=>5204, 'code'=>'95782', 'type'=>'village', 'name'=>'Village 95782, Districts 9578, City 957, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78648, 'regionable_type'=>'village']); //Bukaka
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78649, 'regionable_type'=>'village']); //Bulawan
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78650, 'regionable_type'=>'village']); //Bulawan Dua
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78651, 'regionable_type'=>'village']); //Bulawan Satu
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78652, 'regionable_type'=>'village']); //Buyat
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78653, 'regionable_type'=>'village']); //Buyat Barat
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78654, 'regionable_type'=>'village']); //Buyat I
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78655, 'regionable_type'=>'village']); //Buyat Ii
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78656, 'regionable_type'=>'village']); //Buyat Selatan
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78657, 'regionable_type'=>'village']); //Buyat Tengah
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78658, 'regionable_type'=>'village']); //Kotabunan
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78659, 'regionable_type'=>'village']); //Kotabunan Barat
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78660, 'regionable_type'=>'village']); //Kotabunan Selatan
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78661, 'regionable_type'=>'village']); //Paret
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78662, 'regionable_type'=>'village']); //Paret Timur
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78663, 'regionable_type'=>'village']); //Dodap
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78664, 'regionable_type'=>'village']); //Dodap Pantai
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78665, 'regionable_type'=>'village']); //Dodop Mikasa
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78666, 'regionable_type'=>'village']); //Kayumoyondi
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78667, 'regionable_type'=>'village']); //Togid
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78668, 'regionable_type'=>'village']); //Tombolikat
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78669, 'regionable_type'=>'village']); //Tombolikat Selatan
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78670, 'regionable_type'=>'village']); //Tutuyan
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78671, 'regionable_type'=>'village']); //Tutuyan Ii
                DB::table('regionables')->insert(['region_id'=>5205, 'regionable_id'=>78672, 'regionable_type'=>'village']); //Tutuyan Iii
        DB::table('regions')->insert(['id'=>5206, 'parent'=>4642, 'code'=>'958', 'type'=>'city', 'name'=>'City 958, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5206, 'regionable_id'=>431, 'regionable_type'=>'city']); //Kepulauan Sangihe regencies
        DB::table('regionables')->insert(['region_id'=>5206, 'regionable_id'=>432, 'regionable_type'=>'city']); //Kepulauan Siau Tagulandang Biaro (sitaro) regencies
        DB::table('regionables')->insert(['region_id'=>5206, 'regionable_id'=>433, 'regionable_type'=>'city']); //Kepulauan Talaud regencies
            DB::table('regions')->insert(['id'=>5207, 'parent'=>5206, 'code'=>'9587', 'type'=>'districts', 'name'=>'Districts 9587, City 958, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5207, 'regionable_id'=>6922, 'regionable_type'=>'districts']); //Kalongan
            DB::table('regionables')->insert(['region_id'=>5207, 'regionable_id'=>6923, 'regionable_type'=>'districts']); //Salibabu
            DB::table('regionables')->insert(['region_id'=>5207, 'regionable_id'=>6924, 'regionable_type'=>'districts']); //Lirung
            DB::table('regionables')->insert(['region_id'=>5207, 'regionable_id'=>6925, 'regionable_type'=>'districts']); //Moronge
            DB::table('regionables')->insert(['region_id'=>5207, 'regionable_id'=>6926, 'regionable_type'=>'districts']); //Damao (damau)
            DB::table('regionables')->insert(['region_id'=>5207, 'regionable_id'=>6927, 'regionable_type'=>'districts']); //Kabaruan
                DB::table('regions')->insert(['id'=>5208, 'parent'=>5207, 'code'=>'95872', 'type'=>'village', 'name'=>'Village 95872, Districts 9587, City 958, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78957, 'regionable_type'=>'village']); //Akas
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78958, 'regionable_type'=>'village']); //Akas Balane
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78959, 'regionable_type'=>'village']); //Birang
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78960, 'regionable_type'=>'village']); //Damau
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78961, 'regionable_type'=>'village']); //Damau Bawone
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78962, 'regionable_type'=>'village']); //Ighik
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78963, 'regionable_type'=>'village']); //Peret
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78964, 'regionable_type'=>'village']); //Taduwale
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78965, 'regionable_type'=>'village']); //Bulude
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78966, 'regionable_type'=>'village']); //Bulude Selatan
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78967, 'regionable_type'=>'village']); //Kabaruan
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78968, 'regionable_type'=>'village']); //Kabaruan Timur
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78969, 'regionable_type'=>'village']); //Kordakel
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78970, 'regionable_type'=>'village']); //Mangaran
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78971, 'regionable_type'=>'village']); //Pangeran
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78972, 'regionable_type'=>'village']); //Pannulan
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78973, 'regionable_type'=>'village']); //Pantuge (patuge)
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78974, 'regionable_type'=>'village']); //Pantuge Timur (patuge Timur)
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78975, 'regionable_type'=>'village']); //Rarange
                DB::table('regionables')->insert(['region_id'=>5208, 'regionable_id'=>78976, 'regionable_type'=>'village']); //Taduna
            DB::table('regions')->insert(['id'=>5209, 'parent'=>5206, 'code'=>'9588', 'type'=>'districts', 'name'=>'Districts 9588, City 958, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6928, 'regionable_type'=>'districts']); //Beo Utara
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6929, 'regionable_type'=>'districts']); //Beo
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6930, 'regionable_type'=>'districts']); //Beo Selatan
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6931, 'regionable_type'=>'districts']); //Rainis
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6932, 'regionable_type'=>'districts']); //Tampan Amma
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6933, 'regionable_type'=>'districts']); //Pulutan
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6934, 'regionable_type'=>'districts']); //Essang Selatan
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6935, 'regionable_type'=>'districts']); //Gemeh
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6936, 'regionable_type'=>'districts']); //Essang
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6937, 'regionable_type'=>'districts']); //Nanusa
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6938, 'regionable_type'=>'districts']); //Miangas
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6939, 'regionable_type'=>'districts']); //Melonguane
            DB::table('regionables')->insert(['region_id'=>5209, 'regionable_id'=>6940, 'regionable_type'=>'districts']); //Melonguane Timur
                DB::table('regions')->insert(['id'=>5210, 'parent'=>5209, 'code'=>'95885', 'type'=>'village', 'name'=>'Village 95885, Districts 9588, City 958, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79067, 'regionable_type'=>'village']); //Ambela
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79068, 'regionable_type'=>'village']); //Kiama
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79069, 'regionable_type'=>'village']); //Kiama Barat
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79070, 'regionable_type'=>'village']); //Kiama Maredaren
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79071, 'regionable_type'=>'village']); //Mala
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79072, 'regionable_type'=>'village']); //Mala Timur
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79073, 'regionable_type'=>'village']); //Mala Timur I
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79074, 'regionable_type'=>'village']); //Melonguane
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79075, 'regionable_type'=>'village']); //Melonguane Timur
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79076, 'regionable_type'=>'village']); //Sawang
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79077, 'regionable_type'=>'village']); //Sawang Utara
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79078, 'regionable_type'=>'village']); //Tarun
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79079, 'regionable_type'=>'village']); //Tarun Selatan
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79080, 'regionable_type'=>'village']); //Bowombaru (bawombaru)
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79081, 'regionable_type'=>'village']); //Bowombaru Tengah
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79082, 'regionable_type'=>'village']); //Bowombaru Utara
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79083, 'regionable_type'=>'village']); //Tule
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79084, 'regionable_type'=>'village']); //Tule Tengah
                DB::table('regionables')->insert(['region_id'=>5210, 'regionable_id'=>79085, 'regionable_type'=>'village']); //Tule Utara
        DB::table('regions')->insert(['id'=>5211, 'parent'=>4642, 'code'=>'959', 'type'=>'city', 'name'=>'City 959, Province 9']);
        DB::table('regionables')->insert(['region_id'=>5211, 'regionable_id'=>421, 'regionable_type'=>'city']); //Minahasa Selatan regencies
        DB::table('regionables')->insert(['region_id'=>5211, 'regionable_id'=>434, 'regionable_type'=>'city']); //Minahasa Tenggara regencies
            DB::table('regions')->insert(['id'=>5212, 'parent'=>5211, 'code'=>'9599', 'type'=>'districts', 'name'=>'Districts 9599, City 959, Province 9']);
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6807, 'regionable_type'=>'districts']); //Motoling Timur
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6813, 'regionable_type'=>'districts']); //Ranoyapo
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6941, 'regionable_type'=>'districts']); //Pasan
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6942, 'regionable_type'=>'districts']); //Ratahan
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6943, 'regionable_type'=>'districts']); //Ratahan Timur
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6944, 'regionable_type'=>'districts']); //Tombatu
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6945, 'regionable_type'=>'districts']); //Tombatu Timur
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6946, 'regionable_type'=>'districts']); //Tombatu Utara
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6947, 'regionable_type'=>'districts']); //Ratatotok
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6948, 'regionable_type'=>'districts']); //Belang
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6949, 'regionable_type'=>'districts']); //Pusomaen
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6950, 'regionable_type'=>'districts']); //Touluaan Selatan
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6951, 'regionable_type'=>'districts']); //Touluaan
            DB::table('regionables')->insert(['region_id'=>5212, 'regionable_id'=>6952, 'regionable_type'=>'districts']); //Silian Raya
                DB::table('regions')->insert(['id'=>5213, 'parent'=>5212, 'code'=>'95998', 'type'=>'village', 'name'=>'Village 95998, Districts 9599, City 959, Province 9']);
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79200, 'regionable_type'=>'village']); //Banga
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79201, 'regionable_type'=>'village']); //Bunag
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79202, 'regionable_type'=>'village']); //Kalait
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79203, 'regionable_type'=>'village']); //Kalait Dua
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79204, 'regionable_type'=>'village']); //Kalait Satu
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79205, 'regionable_type'=>'village']); //Kalait Tiga
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79206, 'regionable_type'=>'village']); //Lowatak (lowantag)
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79207, 'regionable_type'=>'village']); //Ranoako
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79208, 'regionable_type'=>'village']); //Suhuyon
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79209, 'regionable_type'=>'village']); //Tambelang
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79210, 'regionable_type'=>'village']); //Lobu
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79211, 'regionable_type'=>'village']); //Lobu Atas
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79212, 'regionable_type'=>'village']); //Lobu Dua
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79213, 'regionable_type'=>'village']); //Lobu Kota
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79214, 'regionable_type'=>'village']); //Lobu Satu
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79215, 'regionable_type'=>'village']); //Ranoketang Atas
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79216, 'regionable_type'=>'village']); //Ranoketang Atas Satu
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79217, 'regionable_type'=>'village']); //Toundanouw (toundanou)
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79218, 'regionable_type'=>'village']); //Toundanouw Atas
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79219, 'regionable_type'=>'village']); //Toundanouw Satu
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79220, 'regionable_type'=>'village']); //Silian
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79221, 'regionable_type'=>'village']); //Silian Barat
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79222, 'regionable_type'=>'village']); //Silian Dua
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79223, 'regionable_type'=>'village']); //Silian Kota
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79224, 'regionable_type'=>'village']); //Silian Satu
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79225, 'regionable_type'=>'village']); //Silian Selatan
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79226, 'regionable_type'=>'village']); //Silian Tengah
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79227, 'regionable_type'=>'village']); //Silian Tiga
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79228, 'regionable_type'=>'village']); //Silian Timur
                DB::table('regionables')->insert(['region_id'=>5213, 'regionable_id'=>79229, 'regionable_type'=>'village']); //Silian Utara
    }
}
