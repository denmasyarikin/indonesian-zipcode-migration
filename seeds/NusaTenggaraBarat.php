<?php

use Illuminate\Database\Seeder;

class NusaTenggaraBarat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>22, 'name'=>'Nusa Tenggara Barat ']);

        //Kota Mataram Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>283, 'province_id'=>22, 'type'=>'city', 'name'=>'Mataram']);
        //Kecamatan Ampenan Kota Mataram Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4709, 'city_id'=>283, 'name'=>'Ampenan']);
        DB::table('villages')->insert(['id'=>56427, 'districts_id'=>4709, 'zipcode'=>'83112', 'name'=>'Ampenan Tengah']);
        DB::table('villages')->insert(['id'=>56428, 'districts_id'=>4709, 'zipcode'=>'83113', 'name'=>'Pejeruk']);
        DB::table('villages')->insert(['id'=>56429, 'districts_id'=>4709, 'zipcode'=>'83114', 'name'=>'Ampenan Selatan']);
        DB::table('villages')->insert(['id'=>56430, 'districts_id'=>4709, 'zipcode'=>'83118', 'name'=>'Banjar']);
        DB::table('villages')->insert(['id'=>56431, 'districts_id'=>4709, 'zipcode'=>'83118', 'name'=>'Bintaro']);
        DB::table('villages')->insert(['id'=>56432, 'districts_id'=>4709, 'zipcode'=>'83118', 'name'=>'Doyan Peken']);
        DB::table('villages')->insert(['id'=>56433, 'districts_id'=>4709, 'zipcode'=>'83118', 'name'=>'Kebunsari']);
        DB::table('villages')->insert(['id'=>56434, 'districts_id'=>4709, 'zipcode'=>'83118', 'name'=>'Pajarakan Karya']);
        DB::table('villages')->insert(['id'=>56435, 'districts_id'=>4709, 'zipcode'=>'83118', 'name'=>'Tamansari']);
        DB::table('villages')->insert(['id'=>56436, 'districts_id'=>4709, 'zipcode'=>'83511', 'name'=>'Ampenan Utara']);
        //Kecamatan Sekarbela Kota Mataram Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4710, 'city_id'=>283, 'name'=>'Sekarbela']);
        DB::table('villages')->insert(['id'=>56437, 'districts_id'=>4710, 'zipcode'=>'83115', 'name'=>'Tanjung Karang']);
        DB::table('villages')->insert(['id'=>56438, 'districts_id'=>4710, 'zipcode'=>'83116', 'name'=>'Jempang Baru']);
        DB::table('villages')->insert(['id'=>56439, 'districts_id'=>4710, 'zipcode'=>'83116', 'name'=>'Karang Pule']);
        DB::table('villages')->insert(['id'=>56440, 'districts_id'=>4710, 'zipcode'=>'83116', 'name'=>'Kekalik Jaya']);
        DB::table('villages')->insert(['id'=>56441, 'districts_id'=>4710, 'zipcode'=>'83116', 'name'=>'Tanjung Karang Permai']);
        //Kecamatan Mataram Kota Mataram Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4711, 'city_id'=>283, 'name'=>'Mataram']);
        DB::table('villages')->insert(['id'=>56442, 'districts_id'=>4711, 'zipcode'=>'83117', 'name'=>'Pagutan']);
        DB::table('villages')->insert(['id'=>56443, 'districts_id'=>4711, 'zipcode'=>'83121', 'name'=>'Mataram Timur']);
        DB::table('villages')->insert(['id'=>56444, 'districts_id'=>4711, 'zipcode'=>'83127', 'name'=>'Pagesangan']);
        DB::table('villages')->insert(['id'=>56445, 'districts_id'=>4711, 'zipcode'=>'83127', 'name'=>'Pagesangan Barat']);
        DB::table('villages')->insert(['id'=>56446, 'districts_id'=>4711, 'zipcode'=>'83127', 'name'=>'Pagesangan Timur']);
        DB::table('villages')->insert(['id'=>56447, 'districts_id'=>4711, 'zipcode'=>'83127', 'name'=>'Pagutan Barat']);
        DB::table('villages')->insert(['id'=>56448, 'districts_id'=>4711, 'zipcode'=>'83127', 'name'=>'Pagutan Timur']);
        DB::table('villages')->insert(['id'=>56449, 'districts_id'=>4711, 'zipcode'=>'83127', 'name'=>'Pejanggik']);
        DB::table('villages')->insert(['id'=>56450, 'districts_id'=>4711, 'zipcode'=>'83127', 'name'=>'Punia']);
        //Kecamatan Selaparang (selaprang) Kota Mataram Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4712, 'city_id'=>283, 'name'=>'Selaparang (selaprang)']);
        DB::table('villages')->insert(['id'=>56451, 'districts_id'=>4712, 'zipcode'=>'83122', 'name'=>'Monjok']);
        DB::table('villages')->insert(['id'=>56452, 'districts_id'=>4712, 'zipcode'=>'83122', 'name'=>'Monjok Barat']);
        DB::table('villages')->insert(['id'=>56453, 'districts_id'=>4712, 'zipcode'=>'83122', 'name'=>'Monjok Timur']);
        DB::table('villages')->insert(['id'=>56454, 'districts_id'=>4712, 'zipcode'=>'83123', 'name'=>'Karang Baru']);
        DB::table('villages')->insert(['id'=>56455, 'districts_id'=>4712, 'zipcode'=>'83124', 'name'=>'Rembiga']);
        DB::table('villages')->insert(['id'=>56456, 'districts_id'=>4712, 'zipcode'=>'83125', 'name'=>'Dasan Agung']);
        DB::table('villages')->insert(['id'=>56457, 'districts_id'=>4712, 'zipcode'=>'83125', 'name'=>'Dasan Agung Baru']);
        DB::table('villages')->insert(['id'=>56458, 'districts_id'=>4712, 'zipcode'=>'83126', 'name'=>'Gomong']);
        DB::table('villages')->insert(['id'=>56459, 'districts_id'=>4712, 'zipcode'=>'83126', 'name'=>'Mataram Barat']);
        //Kecamatan Sandubaya (sandujaya) Kota Mataram Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4713, 'city_id'=>283, 'name'=>'Sandubaya (sandujaya)']);
        DB::table('villages')->insert(['id'=>56460, 'districts_id'=>4713, 'zipcode'=>'83232', 'name'=>'Dasan Cermen']);
        DB::table('villages')->insert(['id'=>56461, 'districts_id'=>4713, 'zipcode'=>'83233', 'name'=>'Babakan']);
        DB::table('villages')->insert(['id'=>56462, 'districts_id'=>4713, 'zipcode'=>'83236', 'name'=>'Bertais']);
        DB::table('villages')->insert(['id'=>56463, 'districts_id'=>4713, 'zipcode'=>'83237', 'name'=>'Abian Tubuh Baru']);
        DB::table('villages')->insert(['id'=>56464, 'districts_id'=>4713, 'zipcode'=>'83237', 'name'=>'Mandalika']);
        DB::table('villages')->insert(['id'=>56465, 'districts_id'=>4713, 'zipcode'=>'83237', 'name'=>'Selagalas']);
        DB::table('villages')->insert(['id'=>56466, 'districts_id'=>4713, 'zipcode'=>'83237', 'name'=>'Turida']);
        //Kecamatan Cakranegara Kota Mataram Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4714, 'city_id'=>283, 'name'=>'Cakranegara']);
        DB::table('villages')->insert(['id'=>56467, 'districts_id'=>4714, 'zipcode'=>'83238', 'name'=>'Cilinaya']);
        DB::table('villages')->insert(['id'=>56468, 'districts_id'=>4714, 'zipcode'=>'83238', 'name'=>'Karang Taliwang']);
        DB::table('villages')->insert(['id'=>56469, 'districts_id'=>4714, 'zipcode'=>'83238', 'name'=>'Mayura']);
        DB::table('villages')->insert(['id'=>56470, 'districts_id'=>4714, 'zipcode'=>'83238', 'name'=>'Sapta Marga']);
        DB::table('villages')->insert(['id'=>56471, 'districts_id'=>4714, 'zipcode'=>'83239', 'name'=>'Cakranegara Barat']);
        DB::table('villages')->insert(['id'=>56472, 'districts_id'=>4714, 'zipcode'=>'83239', 'name'=>'Cakranegara Selatan']);
        DB::table('villages')->insert(['id'=>56473, 'districts_id'=>4714, 'zipcode'=>'83239', 'name'=>'Cakranegara Selatan Baru']);
        DB::table('villages')->insert(['id'=>56474, 'districts_id'=>4714, 'zipcode'=>'83239', 'name'=>'Cakranegara Timur']);
        DB::table('villages')->insert(['id'=>56475, 'districts_id'=>4714, 'zipcode'=>'83239', 'name'=>'Cakranegara Utara']);
        DB::table('villages')->insert(['id'=>56476, 'districts_id'=>4714, 'zipcode'=>'83239', 'name'=>'Sayang Sayang']);

        //Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>284, 'province_id'=>22, 'type'=>'regencies', 'name'=>'Lombok Barat']);
        //Kecamatan Gunungsari Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4715, 'city_id'=>284, 'name'=>'Gunungsari']);
        DB::table('villages')->insert(['id'=>56477, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Bukittinggi']);
        DB::table('villages')->insert(['id'=>56478, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Dopang']);
        DB::table('villages')->insert(['id'=>56479, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Gelangsar']);
        DB::table('villages')->insert(['id'=>56480, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Guntur Macan']);
        DB::table('villages')->insert(['id'=>56481, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Gunung Sari']);
        DB::table('villages')->insert(['id'=>56482, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Jatisela']);
        DB::table('villages')->insert(['id'=>56483, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Jeringgo']);
        DB::table('villages')->insert(['id'=>56484, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Kekait']);
        DB::table('villages')->insert(['id'=>56485, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Kekeri']);
        DB::table('villages')->insert(['id'=>56486, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Mekarsari']);
        DB::table('villages')->insert(['id'=>56487, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Midang']);
        DB::table('villages')->insert(['id'=>56488, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Nambalan (mambalan)']);
        DB::table('villages')->insert(['id'=>56489, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Penimbung']);
        DB::table('villages')->insert(['id'=>56490, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Ranjok']);
        DB::table('villages')->insert(['id'=>56491, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Sesela']);
        DB::table('villages')->insert(['id'=>56492, 'districts_id'=>4715, 'zipcode'=>'83351', 'name'=>'Taman Sari']);
        //Kecamatan Batu Layar Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4716, 'city_id'=>284, 'name'=>'Batu Layar']);
        DB::table('villages')->insert(['id'=>56493, 'districts_id'=>4716, 'zipcode'=>'83355', 'name'=>'Batu Layar']);
        DB::table('villages')->insert(['id'=>56494, 'districts_id'=>4716, 'zipcode'=>'83355', 'name'=>'Bengkaung']);
        DB::table('villages')->insert(['id'=>56495, 'districts_id'=>4716, 'zipcode'=>'83355', 'name'=>'Lembah Sari']);
        DB::table('villages')->insert(['id'=>56496, 'districts_id'=>4716, 'zipcode'=>'83355', 'name'=>'Meninting']);
        DB::table('villages')->insert(['id'=>56497, 'districts_id'=>4716, 'zipcode'=>'83355', 'name'=>'Pusuk Lestari']);
        DB::table('villages')->insert(['id'=>56498, 'districts_id'=>4716, 'zipcode'=>'83355', 'name'=>'Sandik']);
        DB::table('villages')->insert(['id'=>56499, 'districts_id'=>4716, 'zipcode'=>'83355', 'name'=>'Senggigi']);
        DB::table('villages')->insert(['id'=>56500, 'districts_id'=>4716, 'zipcode'=>'83355', 'name'=>'Senteluk']);
        //Kecamatan Labuapi Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4717, 'city_id'=>284, 'name'=>'Labuapi']);
        DB::table('villages')->insert(['id'=>56501, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Bagik Polak']);
        DB::table('villages')->insert(['id'=>56502, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Bagik Polak Barat']);
        DB::table('villages')->insert(['id'=>56503, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Bajur']);
        DB::table('villages')->insert(['id'=>56504, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Bengkel']);
        DB::table('villages')->insert(['id'=>56505, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Karang Bongkot']);
        DB::table('villages')->insert(['id'=>56506, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Kuranji']);
        DB::table('villages')->insert(['id'=>56507, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Kuranji Dalang']);
        DB::table('villages')->insert(['id'=>56508, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Labuapi']);
        DB::table('villages')->insert(['id'=>56509, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Merembu']);
        DB::table('villages')->insert(['id'=>56510, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Perampuan']);
        DB::table('villages')->insert(['id'=>56511, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Telagawaru']);
        DB::table('villages')->insert(['id'=>56512, 'districts_id'=>4717, 'zipcode'=>'83361', 'name'=>'Terong Tawah']);
        //Kecamatan Kediri Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4718, 'city_id'=>284, 'name'=>'Kediri']);
        DB::table('villages')->insert(['id'=>56513, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Banyumulek']);
        DB::table('villages')->insert(['id'=>56514, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Dasan Baru']);
        DB::table('villages')->insert(['id'=>56515, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Gelogor']);
        DB::table('villages')->insert(['id'=>56516, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Jagaraga Indah']);
        DB::table('villages')->insert(['id'=>56517, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Kediri']);
        DB::table('villages')->insert(['id'=>56518, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Kediri Selatan']);
        DB::table('villages')->insert(['id'=>56519, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Lelede']);
        DB::table('villages')->insert(['id'=>56520, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Montong Are']);
        DB::table('villages')->insert(['id'=>56521, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Ombe Baru']);
        DB::table('villages')->insert(['id'=>56522, 'districts_id'=>4718, 'zipcode'=>'83362', 'name'=>'Rumak']);
        //Kecamatan Kuripan Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4719, 'city_id'=>284, 'name'=>'Kuripan']);
        DB::table('villages')->insert(['id'=>56523, 'districts_id'=>4719, 'zipcode'=>'83362', 'name'=>'Giri Sasak']);
        DB::table('villages')->insert(['id'=>56524, 'districts_id'=>4719, 'zipcode'=>'83362', 'name'=>'Jagaraga']);
        DB::table('villages')->insert(['id'=>56525, 'districts_id'=>4719, 'zipcode'=>'83362', 'name'=>'Kuripan']);
        DB::table('villages')->insert(['id'=>56526, 'districts_id'=>4719, 'zipcode'=>'83362', 'name'=>'Kuripan Selatan']);
        DB::table('villages')->insert(['id'=>56527, 'districts_id'=>4719, 'zipcode'=>'83362', 'name'=>'Kuripan Timur']);
        DB::table('villages')->insert(['id'=>56528, 'districts_id'=>4719, 'zipcode'=>'83362', 'name'=>'Kuripan Utara']);
        //Kecamatan Gerung Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4720, 'city_id'=>284, 'name'=>'Gerung']);
        DB::table('villages')->insert(['id'=>56529, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Babussalam']);
        DB::table('villages')->insert(['id'=>56530, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Banyu Urip']);
        DB::table('villages')->insert(['id'=>56531, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Beleke']);
        DB::table('villages')->insert(['id'=>56532, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Dasan Geres']);
        DB::table('villages')->insert(['id'=>56533, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Dasan Tapen']);
        DB::table('villages')->insert(['id'=>56534, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Gapuk']);
        DB::table('villages')->insert(['id'=>56535, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Gerung Selatan']);
        DB::table('villages')->insert(['id'=>56536, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Gerung Utara']);
        DB::table('villages')->insert(['id'=>56537, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Giri Tembesi']);
        DB::table('villages')->insert(['id'=>56538, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Kebunayu']);
        DB::table('villages')->insert(['id'=>56539, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Mesanggok']);
        DB::table('villages')->insert(['id'=>56540, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Sukamakmur']);
        DB::table('villages')->insert(['id'=>56541, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Taman Ayu']);
        DB::table('villages')->insert(['id'=>56542, 'districts_id'=>4720, 'zipcode'=>'83363', 'name'=>'Tempos']);
        //Kecamatan Lembar Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4721, 'city_id'=>284, 'name'=>'Lembar']);
        DB::table('villages')->insert(['id'=>56543, 'districts_id'=>4721, 'zipcode'=>'83364', 'name'=>'Jembatan Gantung']);
        DB::table('villages')->insert(['id'=>56544, 'districts_id'=>4721, 'zipcode'=>'83364', 'name'=>'Jembatan Kembar']);
        DB::table('villages')->insert(['id'=>56545, 'districts_id'=>4721, 'zipcode'=>'83364', 'name'=>'Labuan Tereng']);
        DB::table('villages')->insert(['id'=>56546, 'districts_id'=>4721, 'zipcode'=>'83364', 'name'=>'Lembar']);
        DB::table('villages')->insert(['id'=>56547, 'districts_id'=>4721, 'zipcode'=>'83364', 'name'=>'Lembar Selatan']);
        DB::table('villages')->insert(['id'=>56548, 'districts_id'=>4721, 'zipcode'=>'83364', 'name'=>'Mareje']);
        DB::table('villages')->insert(['id'=>56549, 'districts_id'=>4721, 'zipcode'=>'83364', 'name'=>'Mareje Timur']);
        DB::table('villages')->insert(['id'=>56550, 'districts_id'=>4721, 'zipcode'=>'83364', 'name'=>'Sekotong Timur']);
        //Kecamatan Sekotong Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4722, 'city_id'=>284, 'name'=>'Sekotong']);
        DB::table('villages')->insert(['id'=>56551, 'districts_id'=>4722, 'zipcode'=>'83365', 'name'=>'Batu Putih']);
        DB::table('villages')->insert(['id'=>56552, 'districts_id'=>4722, 'zipcode'=>'83365', 'name'=>'Buwun Mas']);
        DB::table('villages')->insert(['id'=>56553, 'districts_id'=>4722, 'zipcode'=>'83365', 'name'=>'Cendi Manik']);
        DB::table('villages')->insert(['id'=>56554, 'districts_id'=>4722, 'zipcode'=>'83365', 'name'=>'Gili Gede Indah']);
        DB::table('villages')->insert(['id'=>56555, 'districts_id'=>4722, 'zipcode'=>'83365', 'name'=>'Kedaro']);
        DB::table('villages')->insert(['id'=>56556, 'districts_id'=>4722, 'zipcode'=>'83365', 'name'=>'Pelangan']);
        DB::table('villages')->insert(['id'=>56557, 'districts_id'=>4722, 'zipcode'=>'83365', 'name'=>'Sekotong Barat']);
        DB::table('villages')->insert(['id'=>56558, 'districts_id'=>4722, 'zipcode'=>'83365', 'name'=>'Sekotong Tengah']);
        //Kecamatan Narmada Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4723, 'city_id'=>284, 'name'=>'Narmada']);
        DB::table('villages')->insert(['id'=>56559, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Badrain']);
        DB::table('villages')->insert(['id'=>56560, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Batu Kuta']);
        DB::table('villages')->insert(['id'=>56561, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Buwun Sejati']);
        DB::table('villages')->insert(['id'=>56562, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Dasan Tereng']);
        DB::table('villages')->insert(['id'=>56563, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Gerimak Indah']);
        DB::table('villages')->insert(['id'=>56564, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Golong']);
        DB::table('villages')->insert(['id'=>56565, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Krama Jaya']);
        DB::table('villages')->insert(['id'=>56566, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Lebah Sempaga']);
        DB::table('villages')->insert(['id'=>56567, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Lembuak']);
        DB::table('villages')->insert(['id'=>56568, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Mekarsari']);
        DB::table('villages')->insert(['id'=>56569, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Narmada']);
        DB::table('villages')->insert(['id'=>56570, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Nyur Lembang']);
        DB::table('villages')->insert(['id'=>56571, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Pakuan']);
        DB::table('villages')->insert(['id'=>56572, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Peresak']);
        DB::table('villages')->insert(['id'=>56573, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Peru (keru)']);
        DB::table('villages')->insert(['id'=>56574, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Sedau']);
        DB::table('villages')->insert(['id'=>56575, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Selat']);
        DB::table('villages')->insert(['id'=>56576, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Sembung']);
        DB::table('villages')->insert(['id'=>56577, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Sesaot']);
        DB::table('villages')->insert(['id'=>56578, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Suranadi']);
        DB::table('villages')->insert(['id'=>56579, 'districts_id'=>4723, 'zipcode'=>'83371', 'name'=>'Tanah/tanak Beak']);
        //Kecamatan Lingsar Kab. Lombok Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4724, 'city_id'=>284, 'name'=>'Lingsar']);
        DB::table('villages')->insert(['id'=>56580, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Batu Kumbung']);
        DB::table('villages')->insert(['id'=>56581, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Batu Mekar']);
        DB::table('villages')->insert(['id'=>56582, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Bug-bug']);
        DB::table('villages')->insert(['id'=>56583, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Dasan Geria']);
        DB::table('villages')->insert(['id'=>56584, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Duman']);
        DB::table('villages')->insert(['id'=>56585, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Gegelang']);
        DB::table('villages')->insert(['id'=>56586, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Gegerung']);
        DB::table('villages')->insert(['id'=>56587, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Giri Madia']);
        DB::table('villages')->insert(['id'=>56588, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Gontoran']);
        DB::table('villages')->insert(['id'=>56589, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Karang Bayan']);
        DB::table('villages')->insert(['id'=>56590, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Langko']);
        DB::table('villages')->insert(['id'=>56591, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Lingsar']);
        DB::table('villages')->insert(['id'=>56592, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Peteluan Indah']);
        DB::table('villages')->insert(['id'=>56593, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Saribaye']);
        DB::table('villages')->insert(['id'=>56594, 'districts_id'=>4724, 'zipcode'=>'83371', 'name'=>'Sigerongan']);

        //Kab. Lombok Utara Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>285, 'province_id'=>22, 'type'=>'regencies', 'name'=>'Lombok Utara']);
        //Kecamatan Pemenang Kab. Lombok Utara Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4725, 'city_id'=>285, 'name'=>'Pemenang']);
        DB::table('villages')->insert(['id'=>56595, 'districts_id'=>4725, 'zipcode'=>'83352', 'name'=>'Gili Indah']);
        DB::table('villages')->insert(['id'=>56596, 'districts_id'=>4725, 'zipcode'=>'83352', 'name'=>'Malaka']);
        DB::table('villages')->insert(['id'=>56597, 'districts_id'=>4725, 'zipcode'=>'83352', 'name'=>'Pemenang Barat']);
        DB::table('villages')->insert(['id'=>56598, 'districts_id'=>4725, 'zipcode'=>'83352', 'name'=>'Pemenang Timur']);
        //Kecamatan Tanjung Kab. Lombok Utara Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4726, 'city_id'=>285, 'name'=>'Tanjung']);
        DB::table('villages')->insert(['id'=>56599, 'districts_id'=>4726, 'zipcode'=>'83352', 'name'=>'Jenggala']);
        DB::table('villages')->insert(['id'=>56600, 'districts_id'=>4726, 'zipcode'=>'83352', 'name'=>'Medana']);
        DB::table('villages')->insert(['id'=>56601, 'districts_id'=>4726, 'zipcode'=>'83352', 'name'=>'Sigar Penjalin (pinjalin)']);
        DB::table('villages')->insert(['id'=>56602, 'districts_id'=>4726, 'zipcode'=>'83352', 'name'=>'Sokong']);
        DB::table('villages')->insert(['id'=>56603, 'districts_id'=>4726, 'zipcode'=>'83352', 'name'=>'Tanjung']);
        DB::table('villages')->insert(['id'=>56604, 'districts_id'=>4726, 'zipcode'=>'83352', 'name'=>'Tegal Maja']);
        DB::table('villages')->insert(['id'=>56605, 'districts_id'=>4726, 'zipcode'=>'83352', 'name'=>'Teniga']);
        //Kecamatan Gangga Kab. Lombok Utara Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4727, 'city_id'=>285, 'name'=>'Gangga']);
        DB::table('villages')->insert(['id'=>56606, 'districts_id'=>4727, 'zipcode'=>'83353', 'name'=>'Bentek']);
        DB::table('villages')->insert(['id'=>56607, 'districts_id'=>4727, 'zipcode'=>'83353', 'name'=>'Genggelang']);
        DB::table('villages')->insert(['id'=>56608, 'districts_id'=>4727, 'zipcode'=>'83353', 'name'=>'Gondang']);
        DB::table('villages')->insert(['id'=>56609, 'districts_id'=>4727, 'zipcode'=>'83353', 'name'=>'Rempek']);
        DB::table('villages')->insert(['id'=>56610, 'districts_id'=>4727, 'zipcode'=>'83353', 'name'=>'Sambik Bangkol']);
        //Kecamatan Kayangan Kab. Lombok Utara Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4728, 'city_id'=>285, 'name'=>'Kayangan']);
        DB::table('villages')->insert(['id'=>56611, 'districts_id'=>4728, 'zipcode'=>'83353', 'name'=>'Dangiang']);
        DB::table('villages')->insert(['id'=>56612, 'districts_id'=>4728, 'zipcode'=>'83353', 'name'=>'Gumantar']);
        DB::table('villages')->insert(['id'=>56613, 'districts_id'=>4728, 'zipcode'=>'83353', 'name'=>'Kayangan']);
        DB::table('villages')->insert(['id'=>56614, 'districts_id'=>4728, 'zipcode'=>'83353', 'name'=>'Pendua']);
        DB::table('villages')->insert(['id'=>56615, 'districts_id'=>4728, 'zipcode'=>'83353', 'name'=>'Salut']);
        DB::table('villages')->insert(['id'=>56616, 'districts_id'=>4728, 'zipcode'=>'83353', 'name'=>'Santong']);
        DB::table('villages')->insert(['id'=>56617, 'districts_id'=>4728, 'zipcode'=>'83353', 'name'=>'Selengen']);
        DB::table('villages')->insert(['id'=>56618, 'districts_id'=>4728, 'zipcode'=>'83353', 'name'=>'Sesait']);
        //Kecamatan Bayan Kab. Lombok Utara Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4729, 'city_id'=>285, 'name'=>'Bayan']);
        DB::table('villages')->insert(['id'=>56619, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Akar Akar']);
        DB::table('villages')->insert(['id'=>56620, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Anyar']);
        DB::table('villages')->insert(['id'=>56621, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Bayan']);
        DB::table('villages')->insert(['id'=>56622, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Karang Bajo']);
        DB::table('villages')->insert(['id'=>56623, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Loloan']);
        DB::table('villages')->insert(['id'=>56624, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Mumbul Sari']);
        DB::table('villages')->insert(['id'=>56625, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Sambik Elen']);
        DB::table('villages')->insert(['id'=>56626, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Senaru']);
        DB::table('villages')->insert(['id'=>56627, 'districts_id'=>4729, 'zipcode'=>'83354', 'name'=>'Sukadana']);

        //Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>286, 'province_id'=>22, 'type'=>'regencies', 'name'=>'Lombok Tengah']);
        //Kecamatan Praya Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4730, 'city_id'=>286, 'name'=>'Praya']);
        DB::table('villages')->insert(['id'=>56628, 'districts_id'=>4730, 'zipcode'=>'83511', 'name'=>'Aik Mual']);
        DB::table('villages')->insert(['id'=>56629, 'districts_id'=>4730, 'zipcode'=>'83511', 'name'=>'Bunut Baok']);
        DB::table('villages')->insert(['id'=>56630, 'districts_id'=>4730, 'zipcode'=>'83511', 'name'=>'Jago']);
        DB::table('villages')->insert(['id'=>56631, 'districts_id'=>4730, 'zipcode'=>'83511', 'name'=>'Mertak Tombok']);
        DB::table('villages')->insert(['id'=>56632, 'districts_id'=>4730, 'zipcode'=>'83511', 'name'=>'Montong Terep']);
        DB::table('villages')->insert(['id'=>56633, 'districts_id'=>4730, 'zipcode'=>'83511', 'name'=>'Praya']);
        DB::table('villages')->insert(['id'=>56634, 'districts_id'=>4730, 'zipcode'=>'83512', 'name'=>'Semayan']);
        DB::table('villages')->insert(['id'=>56635, 'districts_id'=>4730, 'zipcode'=>'83514', 'name'=>'Gerunung']);
        DB::table('villages')->insert(['id'=>56636, 'districts_id'=>4730, 'zipcode'=>'83515', 'name'=>'Leneng']);
        DB::table('villages')->insert(['id'=>56637, 'districts_id'=>4730, 'zipcode'=>'83516', 'name'=>'Panjisari']);
        DB::table('villages')->insert(['id'=>56638, 'districts_id'=>4730, 'zipcode'=>'83518', 'name'=>'Tiwugalih']);
        DB::table('villages')->insert(['id'=>56639, 'districts_id'=>4730, 'zipcode'=>'83519', 'name'=>'Prapen']);
        DB::table('villages')->insert(['id'=>56640, 'districts_id'=>4730, 'zipcode'=>'83521', 'name'=>'Renteng']);
        DB::table('villages')->insert(['id'=>56641, 'districts_id'=>4730, 'zipcode'=>'83522', 'name'=>'Gonjak']);
        //Kecamatan Praya Tengah Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4731, 'city_id'=>286, 'name'=>'Praya Tengah']);
        DB::table('villages')->insert(['id'=>56642, 'districts_id'=>4731, 'zipcode'=>'83513', 'name'=>'Jontlak']);
        DB::table('villages')->insert(['id'=>56643, 'districts_id'=>4731, 'zipcode'=>'83523', 'name'=>'Gerantung']);
        DB::table('villages')->insert(['id'=>56644, 'districts_id'=>4731, 'zipcode'=>'83582', 'name'=>'Batunyala']);
        DB::table('villages')->insert(['id'=>56645, 'districts_id'=>4731, 'zipcode'=>'83582', 'name'=>'Beraim']);
        DB::table('villages')->insert(['id'=>56646, 'districts_id'=>4731, 'zipcode'=>'83582', 'name'=>'Jurang Jaler']);
        DB::table('villages')->insert(['id'=>56647, 'districts_id'=>4731, 'zipcode'=>'83582', 'name'=>'Kelebuh']);
        DB::table('villages')->insert(['id'=>56648, 'districts_id'=>4731, 'zipcode'=>'83582', 'name'=>'Lajut']);
        DB::table('villages')->insert(['id'=>56649, 'districts_id'=>4731, 'zipcode'=>'83582', 'name'=>'Pejanggik']);
        DB::table('villages')->insert(['id'=>56650, 'districts_id'=>4731, 'zipcode'=>'83582', 'name'=>'Pengadang']);
        DB::table('villages')->insert(['id'=>56651, 'districts_id'=>4731, 'zipcode'=>'83582', 'name'=>'Sasake']);
        //Kecamatan Batukliang Utara Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4732, 'city_id'=>286, 'name'=>'Batukliang Utara']);
        DB::table('villages')->insert(['id'=>56652, 'districts_id'=>4732, 'zipcode'=>'83552', 'name'=>'Aik Berik']);
        DB::table('villages')->insert(['id'=>56653, 'districts_id'=>4732, 'zipcode'=>'83552', 'name'=>'Aik Bukak (bukaq)']);
        DB::table('villages')->insert(['id'=>56654, 'districts_id'=>4732, 'zipcode'=>'83552', 'name'=>'Karang Sidemen']);
        DB::table('villages')->insert(['id'=>56655, 'districts_id'=>4732, 'zipcode'=>'83552', 'name'=>'Lantan']);
        DB::table('villages')->insert(['id'=>56656, 'districts_id'=>4732, 'zipcode'=>'83552', 'name'=>'Mas-mas']);
        DB::table('villages')->insert(['id'=>56657, 'districts_id'=>4732, 'zipcode'=>'83552', 'name'=>'Setiling']);
        DB::table('villages')->insert(['id'=>56658, 'districts_id'=>4732, 'zipcode'=>'83552', 'name'=>'Tanak Beak']);
        DB::table('villages')->insert(['id'=>56659, 'districts_id'=>4732, 'zipcode'=>'83552', 'name'=>'Teratak']);
        //Kecamatan Batukliang Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4733, 'city_id'=>286, 'name'=>'Batukliang']);
        DB::table('villages')->insert(['id'=>56660, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Aik Darek (aiq Dareq)']);
        DB::table('villages')->insert(['id'=>56661, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Barabali']);
        DB::table('villages')->insert(['id'=>56662, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Beber']);
        DB::table('villages')->insert(['id'=>56663, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Bujak']);
        DB::table('villages')->insert(['id'=>56664, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Mantang']);
        DB::table('villages')->insert(['id'=>56665, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Pagutan']);
        DB::table('villages')->insert(['id'=>56666, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Peresak']);
        DB::table('villages')->insert(['id'=>56667, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Selebung']);
        DB::table('villages')->insert(['id'=>56668, 'districts_id'=>4733, 'zipcode'=>'83552', 'name'=>'Tampak Siring']);
        //Kecamatan Kopang Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4734, 'city_id'=>286, 'name'=>'Kopang']);
        DB::table('villages')->insert(['id'=>56669, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Bebuak']);
        DB::table('villages')->insert(['id'=>56670, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Darmaji']);
        DB::table('villages')->insert(['id'=>56671, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Dasan Baru']);
        DB::table('villages')->insert(['id'=>56672, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Kopang Rembiga']);
        DB::table('villages')->insert(['id'=>56673, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Lendang Ara']);
        DB::table('villages')->insert(['id'=>56674, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Monggas']);
        DB::table('villages')->insert(['id'=>56675, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Montong Gamang']);
        DB::table('villages')->insert(['id'=>56676, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Muncan']);
        DB::table('villages')->insert(['id'=>56677, 'districts_id'=>4734, 'zipcode'=>'83553', 'name'=>'Waja Geseng']);
        //Kecamatan Janapria Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4735, 'city_id'=>286, 'name'=>'Janapria']);
        DB::table('villages')->insert(['id'=>56678, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Bakan']);
        DB::table('villages')->insert(['id'=>56679, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Durian']);
        DB::table('villages')->insert(['id'=>56680, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Janapria']);
        DB::table('villages')->insert(['id'=>56681, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Kerembong']);
        DB::table('villages')->insert(['id'=>56682, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Langko']);
        DB::table('villages')->insert(['id'=>56683, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Lekor']);
        DB::table('villages')->insert(['id'=>56684, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Loangmaka']);
        DB::table('villages')->insert(['id'=>56685, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Pendem']);
        DB::table('villages')->insert(['id'=>56686, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Saba']);
        DB::table('villages')->insert(['id'=>56687, 'districts_id'=>4735, 'zipcode'=>'83554', 'name'=>'Selebung Rembiga']);
        //Kecamatan Jonggat Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4736, 'city_id'=>286, 'name'=>'Jonggat']);
        DB::table('villages')->insert(['id'=>56688, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Barejulat']);
        DB::table('villages')->insert(['id'=>56689, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Batutulis']);
        DB::table('villages')->insert(['id'=>56690, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Bonjeruk']);
        DB::table('villages')->insert(['id'=>56691, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Bunkate']);
        DB::table('villages')->insert(['id'=>56692, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Gemel']);
        DB::table('villages')->insert(['id'=>56693, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Jelantik']);
        DB::table('villages')->insert(['id'=>56694, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Labulia']);
        DB::table('villages')->insert(['id'=>56695, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Nyerot']);
        DB::table('villages')->insert(['id'=>56696, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Pengenjek']);
        DB::table('villages')->insert(['id'=>56697, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Perina']);
        DB::table('villages')->insert(['id'=>56698, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Puyung']);
        DB::table('villages')->insert(['id'=>56699, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Sukarara']);
        DB::table('villages')->insert(['id'=>56700, 'districts_id'=>4736, 'zipcode'=>'83561', 'name'=>'Ubung']);
        //Kecamatan Pringgarata Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4737, 'city_id'=>286, 'name'=>'Pringgarata']);
        DB::table('villages')->insert(['id'=>56701, 'districts_id'=>4737, 'zipcode'=>'83562', 'name'=>'Bagu']);
        DB::table('villages')->insert(['id'=>56702, 'districts_id'=>4737, 'zipcode'=>'83562', 'name'=>'Bilebante']);
        DB::table('villages')->insert(['id'=>56703, 'districts_id'=>4737, 'zipcode'=>'83562', 'name'=>'Murbaya']);
        DB::table('villages')->insert(['id'=>56704, 'districts_id'=>4737, 'zipcode'=>'83562', 'name'=>'Pemepek']);
        DB::table('villages')->insert(['id'=>56705, 'districts_id'=>4737, 'zipcode'=>'83562', 'name'=>'Pringgarata']);
        DB::table('villages')->insert(['id'=>56706, 'districts_id'=>4737, 'zipcode'=>'83562', 'name'=>'Sepakek']);
        DB::table('villages')->insert(['id'=>56707, 'districts_id'=>4737, 'zipcode'=>'83562', 'name'=>'Sintung']);
        //Kecamatan Praya Barat Daya Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4738, 'city_id'=>286, 'name'=>'Praya Barat Daya']);
        DB::table('villages')->insert(['id'=>56708, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Batu Jangkih']);
        DB::table('villages')->insert(['id'=>56709, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Darek']);
        DB::table('villages')->insert(['id'=>56710, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Kabul (kabol)']);
        DB::table('villages')->insert(['id'=>56711, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Montong Ajan']);
        DB::table('villages')->insert(['id'=>56712, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Montong Sapah']);
        DB::table('villages')->insert(['id'=>56713, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Pandan Indah']);
        DB::table('villages')->insert(['id'=>56714, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Pelambik (plambik)']);
        DB::table('villages')->insert(['id'=>56715, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Ranggagata']);
        DB::table('villages')->insert(['id'=>56716, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Serage']);
        DB::table('villages')->insert(['id'=>56717, 'districts_id'=>4738, 'zipcode'=>'83571', 'name'=>'Ungga']);
        //Kecamatan Praya Barat Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4739, 'city_id'=>286, 'name'=>'Praya Barat']);
        DB::table('villages')->insert(['id'=>56718, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Banyu Urip']);
        DB::table('villages')->insert(['id'=>56719, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Batujai']);
        DB::table('villages')->insert(['id'=>56720, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Bonder (bondir)']);
        DB::table('villages')->insert(['id'=>56721, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Kateng']);
        DB::table('villages')->insert(['id'=>56722, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Mangkung']);
        DB::table('villages')->insert(['id'=>56723, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Mekar Sari']);
        DB::table('villages')->insert(['id'=>56724, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Penujak']);
        DB::table('villages')->insert(['id'=>56725, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Selong Belanak']);
        DB::table('villages')->insert(['id'=>56726, 'districts_id'=>4739, 'zipcode'=>'83572', 'name'=>'Setanggor']);
        //Kecamatan Pujut Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4740, 'city_id'=>286, 'name'=>'Pujut']);
        DB::table('villages')->insert(['id'=>56727, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Gapura']);
        DB::table('villages')->insert(['id'=>56728, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Kawo']);
        DB::table('villages')->insert(['id'=>56729, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Ketara']);
        DB::table('villages')->insert(['id'=>56730, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Kuta (kute)']);
        DB::table('villages')->insert(['id'=>56731, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Mertak']);
        DB::table('villages')->insert(['id'=>56732, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Pengembur']);
        DB::table('villages')->insert(['id'=>56733, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Pengengat']);
        DB::table('villages')->insert(['id'=>56734, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Prabu']);
        DB::table('villages')->insert(['id'=>56735, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Rembitan']);
        DB::table('villages')->insert(['id'=>56736, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Segale Anyar']);
        DB::table('villages')->insert(['id'=>56737, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Sengkol']);
        DB::table('villages')->insert(['id'=>56738, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Sukadana']);
        DB::table('villages')->insert(['id'=>56739, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Tanak Awu']);
        DB::table('villages')->insert(['id'=>56740, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Teruwai']);
        DB::table('villages')->insert(['id'=>56741, 'districts_id'=>4740, 'zipcode'=>'83573', 'name'=>'Tumpak']);
        //Kecamatan Praya Timur Kab. Lombok Tengah Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4741, 'city_id'=>286, 'name'=>'Praya Timur']);
        DB::table('villages')->insert(['id'=>56742, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Beleka']);
        DB::table('villages')->insert(['id'=>56743, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Bilelando']);
        DB::table('villages')->insert(['id'=>56744, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Ganti']);
        DB::table('villages')->insert(['id'=>56745, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Kidang']);
        DB::table('villages')->insert(['id'=>56746, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Landah']);
        DB::table('villages')->insert(['id'=>56747, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Marong']);
        DB::table('villages')->insert(['id'=>56748, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Mujur']);
        DB::table('villages')->insert(['id'=>56749, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Semoyang']);
        DB::table('villages')->insert(['id'=>56750, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Sengkerang']);
        DB::table('villages')->insert(['id'=>56751, 'districts_id'=>4741, 'zipcode'=>'83581', 'name'=>'Sukaraja']);

        //Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>287, 'province_id'=>22, 'type'=>'regencies', 'name'=>'Lombok Timur']);
        //Kecamatan Selong Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4742, 'city_id'=>287, 'name'=>'Selong']);
        DB::table('villages')->insert(['id'=>56752, 'districts_id'=>4742, 'zipcode'=>'83611', 'name'=>'Pancor']);
        DB::table('villages')->insert(['id'=>56753, 'districts_id'=>4742, 'zipcode'=>'83611', 'name'=>'Sekarteja']);
        DB::table('villages')->insert(['id'=>56754, 'districts_id'=>4742, 'zipcode'=>'83612', 'name'=>'Sandubaya']);
        DB::table('villages')->insert(['id'=>56755, 'districts_id'=>4742, 'zipcode'=>'83613', 'name'=>'Kelayu Selatan']);
        DB::table('villages')->insert(['id'=>56756, 'districts_id'=>4742, 'zipcode'=>'83617', 'name'=>'Jorong']);
        DB::table('villages')->insert(['id'=>56757, 'districts_id'=>4742, 'zipcode'=>'83618', 'name'=>'Danggen Timur']);
        DB::table('villages')->insert(['id'=>56758, 'districts_id'=>4742, 'zipcode'=>'83618', 'name'=>'Denggen']);
        DB::table('villages')->insert(['id'=>56759, 'districts_id'=>4742, 'zipcode'=>'83618', 'name'=>'Kembang Sari']);
        DB::table('villages')->insert(['id'=>56760, 'districts_id'=>4742, 'zipcode'=>'83619', 'name'=>'Kelayu Utara']);
        DB::table('villages')->insert(['id'=>56761, 'districts_id'=>4742, 'zipcode'=>'83619', 'name'=>'Majidi']);
        DB::table('villages')->insert(['id'=>56762, 'districts_id'=>4742, 'zipcode'=>'83619', 'name'=>'Rakam']);
        DB::table('villages')->insert(['id'=>56763, 'districts_id'=>4742, 'zipcode'=>'83619', 'name'=>'Selong Kota']);
        //Kecamatan Labuhan Haji Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4743, 'city_id'=>287, 'name'=>'Labuhan Haji']);
        DB::table('villages')->insert(['id'=>56764, 'districts_id'=>4743, 'zipcode'=>'83614', 'name'=>'Banjarsari']);
        DB::table('villages')->insert(['id'=>56765, 'districts_id'=>4743, 'zipcode'=>'83614', 'name'=>'Tanjung']);
        DB::table('villages')->insert(['id'=>56766, 'districts_id'=>4743, 'zipcode'=>'83614', 'name'=>'Teros']);
        DB::table('villages')->insert(['id'=>56767, 'districts_id'=>4743, 'zipcode'=>'83615', 'name'=>'Geres']);
        DB::table('villages')->insert(['id'=>56768, 'districts_id'=>4743, 'zipcode'=>'83615', 'name'=>'Ijobalit']);
        DB::table('villages')->insert(['id'=>56769, 'districts_id'=>4743, 'zipcode'=>'83615', 'name'=>'Korleko']);
        DB::table('villages')->insert(['id'=>56770, 'districts_id'=>4743, 'zipcode'=>'83615', 'name'=>'Korleko Selatan']);
        DB::table('villages')->insert(['id'=>56771, 'districts_id'=>4743, 'zipcode'=>'83615', 'name'=>'Tirtanadi']);
        DB::table('villages')->insert(['id'=>56772, 'districts_id'=>4743, 'zipcode'=>'83616', 'name'=>'Labuhan Haji']);
        DB::table('villages')->insert(['id'=>56773, 'districts_id'=>4743, 'zipcode'=>'83616', 'name'=>'Surya Wangi']);
        DB::table('villages')->insert(['id'=>56774, 'districts_id'=>4743, 'zipcode'=>'83617', 'name'=>'Kertasari']);
        DB::table('villages')->insert(['id'=>56775, 'districts_id'=>4743, 'zipcode'=>'83617', 'name'=>'Penedagandor']);
        //Kecamatan Suralaga Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4744, 'city_id'=>287, 'name'=>'Suralaga']);
        DB::table('villages')->insert(['id'=>56776, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Anjani']);
        DB::table('villages')->insert(['id'=>56777, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Bagik Payung']);
        DB::table('villages')->insert(['id'=>56778, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Bagik Payung Selatan']);
        DB::table('villages')->insert(['id'=>56779, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Bagik Payung Timur']);
        DB::table('villages')->insert(['id'=>56780, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Bintang Rinjani']);
        DB::table('villages')->insert(['id'=>56781, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Dames Damai']);
        DB::table('villages')->insert(['id'=>56782, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Dasan Borok']);
        DB::table('villages')->insert(['id'=>56783, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Gapuk']);
        DB::table('villages')->insert(['id'=>56784, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Gerung Permai']);
        DB::table('villages')->insert(['id'=>56785, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Kerongkong']);
        DB::table('villages')->insert(['id'=>56786, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Paok Lombok']);
        DB::table('villages')->insert(['id'=>56787, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Suralaga']);
        DB::table('villages')->insert(['id'=>56788, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Tebaban']);
        DB::table('villages')->insert(['id'=>56789, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Tumbuh Mulia']);
        DB::table('villages')->insert(['id'=>56790, 'districts_id'=>4744, 'zipcode'=>'83652', 'name'=>'Waringin']);
        //Kecamatan Sukamulia Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4745, 'city_id'=>287, 'name'=>'Sukamulia']);
        DB::table('villages')->insert(['id'=>56791, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Dasan Lekong']);
        DB::table('villages')->insert(['id'=>56792, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Jantuk']);
        DB::table('villages')->insert(['id'=>56793, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Nyiur Tebel']);
        DB::table('villages')->insert(['id'=>56794, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Padamara']);
        DB::table('villages')->insert(['id'=>56795, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Paok Pampang']);
        DB::table('villages')->insert(['id'=>56796, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Setanggor']);
        DB::table('villages')->insert(['id'=>56797, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Setanggor Selatan']);
        DB::table('villages')->insert(['id'=>56798, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Sukamulia']);
        DB::table('villages')->insert(['id'=>56799, 'districts_id'=>4745, 'zipcode'=>'83652', 'name'=>'Sukamulia Timur']);
        //Kecamatan Aikmel Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4746, 'city_id'=>287, 'name'=>'Aikmel']);
        DB::table('villages')->insert(['id'=>56800, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Aik Prapa']);
        DB::table('villages')->insert(['id'=>56801, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Aikmel']);
        DB::table('villages')->insert(['id'=>56802, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Aikmel Barat']);
        DB::table('villages')->insert(['id'=>56803, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Aikmel Timur']);
        DB::table('villages')->insert(['id'=>56804, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Aikmel Utara']);
        DB::table('villages')->insert(['id'=>56805, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Bagik Nyaka Santri']);
        DB::table('villages')->insert(['id'=>56806, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Kalijaga']);
        DB::table('villages')->insert(['id'=>56807, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Kalijaga Baru']);
        DB::table('villages')->insert(['id'=>56808, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Kalijaga Selatan']);
        DB::table('villages')->insert(['id'=>56809, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Kalijaga Tengah']);
        DB::table('villages')->insert(['id'=>56810, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Kalijaga Timur']);
        DB::table('villages')->insert(['id'=>56811, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Kembang Kerang']);
        DB::table('villages')->insert(['id'=>56812, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Kembang Kerang Daya']);
        DB::table('villages')->insert(['id'=>56813, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Keroya']);
        DB::table('villages')->insert(['id'=>56814, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Lenek']);
        DB::table('villages')->insert(['id'=>56815, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Lenek Baru']);
        DB::table('villages')->insert(['id'=>56816, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Lenek Daya']);
        DB::table('villages')->insert(['id'=>56817, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Lenek Duren']);
        DB::table('villages')->insert(['id'=>56818, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Lenek Kali Bambang']);
        DB::table('villages')->insert(['id'=>56819, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Lenek Lauq']);
        DB::table('villages')->insert(['id'=>56820, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Lenek Pesiraman']);
        DB::table('villages')->insert(['id'=>56821, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Lenek Ramban Biak']);
        DB::table('villages')->insert(['id'=>56822, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Sukarema']);
        DB::table('villages')->insert(['id'=>56823, 'districts_id'=>4746, 'zipcode'=>'83653', 'name'=>'Toya']);
        //Kecamatan Wanasaba Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4747, 'city_id'=>287, 'name'=>'Wanasaba']);
        DB::table('villages')->insert(['id'=>56824, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Bandok']);
        DB::table('villages')->insert(['id'=>56825, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Bebidas']);
        DB::table('villages')->insert(['id'=>56826, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Beriri Jarak']);
        DB::table('villages')->insert(['id'=>56827, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Jineng']);
        DB::table('villages')->insert(['id'=>56828, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Karang Baru']);
        DB::table('villages')->insert(['id'=>56829, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Karang Baru Timur']);
        DB::table('villages')->insert(['id'=>56830, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Mamben Baru']);
        DB::table('villages')->insert(['id'=>56831, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Mamben Daya']);
        DB::table('villages')->insert(['id'=>56832, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Mamben Lauk/lauq']);
        DB::table('villages')->insert(['id'=>56833, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Otak Rarangan']);
        DB::table('villages')->insert(['id'=>56834, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Tembeng Putik']);
        DB::table('villages')->insert(['id'=>56835, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Wanasaba']);
        DB::table('villages')->insert(['id'=>56836, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Wanasaba Daya']);
        DB::table('villages')->insert(['id'=>56837, 'districts_id'=>4747, 'zipcode'=>'83653', 'name'=>'Wanasaba Lauk']);
        //Kecamatan Pringgabaya Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4748, 'city_id'=>287, 'name'=>'Pringgabaya']);
        DB::table('villages')->insert(['id'=>56838, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Anggaraksa']);
        DB::table('villages')->insert(['id'=>56839, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Apitaik']);
        DB::table('villages')->insert(['id'=>56840, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Bagik Papan']);
        DB::table('villages')->insert(['id'=>56841, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Batuyang']);
        DB::table('villages')->insert(['id'=>56842, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Gunung Malang']);
        DB::table('villages')->insert(['id'=>56843, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Kerumut']);
        DB::table('villages')->insert(['id'=>56844, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Labuhan Lombok']);
        DB::table('villages')->insert(['id'=>56845, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Pohgading']);
        DB::table('villages')->insert(['id'=>56846, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Pohgading Timur']);
        DB::table('villages')->insert(['id'=>56847, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Pringgabaya']);
        DB::table('villages')->insert(['id'=>56848, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Pringgabaya Utara']);
        DB::table('villages')->insert(['id'=>56849, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Seruni Mumbul']);
        DB::table('villages')->insert(['id'=>56850, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Tanak Gadang']);
        DB::table('villages')->insert(['id'=>56851, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Teko']);
        DB::table('villages')->insert(['id'=>56852, 'districts_id'=>4748, 'zipcode'=>'83654', 'name'=>'Telaga Waru']);
        //Kecamatan Suela (suwela) Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4749, 'city_id'=>287, 'name'=>'Suela (suwela)']);
        DB::table('villages')->insert(['id'=>56853, 'districts_id'=>4749, 'zipcode'=>'83654', 'name'=>'Ketangga']);
        DB::table('villages')->insert(['id'=>56854, 'districts_id'=>4749, 'zipcode'=>'83654', 'name'=>'Mekar Sari']);
        DB::table('villages')->insert(['id'=>56855, 'districts_id'=>4749, 'zipcode'=>'83654', 'name'=>'Perigi']);
        DB::table('villages')->insert(['id'=>56856, 'districts_id'=>4749, 'zipcode'=>'83654', 'name'=>'Puncak Jeringo']);
        DB::table('villages')->insert(['id'=>56857, 'districts_id'=>4749, 'zipcode'=>'83654', 'name'=>'Sapit']);
        DB::table('villages')->insert(['id'=>56858, 'districts_id'=>4749, 'zipcode'=>'83654', 'name'=>'Selaparang']);
        DB::table('villages')->insert(['id'=>56859, 'districts_id'=>4749, 'zipcode'=>'83654', 'name'=>'Suela (suwela)']);
        DB::table('villages')->insert(['id'=>56860, 'districts_id'=>4749, 'zipcode'=>'83654', 'name'=>'Suntalangu']);
        //Kecamatan Sambalia (sambelia) Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4750, 'city_id'=>287, 'name'=>'Sambalia (sambelia)']);
        DB::table('villages')->insert(['id'=>56861, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Bagik Manis']);
        DB::table('villages')->insert(['id'=>56862, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Belanting']);
        DB::table('villages')->insert(['id'=>56863, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Dadap']);
        DB::table('villages')->insert(['id'=>56864, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Darakunci']);
        DB::table('villages')->insert(['id'=>56865, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Labuhan Pandan']);
        DB::table('villages')->insert(['id'=>56866, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Madayin']);
        DB::table('villages')->insert(['id'=>56867, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Obel Obel']);
        DB::table('villages')->insert(['id'=>56868, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Padak Guar']);
        DB::table('villages')->insert(['id'=>56869, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Sambelia']);
        DB::table('villages')->insert(['id'=>56870, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Senanggalih']);
        DB::table('villages')->insert(['id'=>56871, 'districts_id'=>4750, 'zipcode'=>'83656', 'name'=>'Sugian']);
        //Kecamatan Sembalun Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4751, 'city_id'=>287, 'name'=>'Sembalun']);
        DB::table('villages')->insert(['id'=>56872, 'districts_id'=>4751, 'zipcode'=>'83656', 'name'=>'Bilok Petung']);
        DB::table('villages')->insert(['id'=>56873, 'districts_id'=>4751, 'zipcode'=>'83656', 'name'=>'Sajang']);
        DB::table('villages')->insert(['id'=>56874, 'districts_id'=>4751, 'zipcode'=>'83656', 'name'=>'Sembalun']);
        DB::table('villages')->insert(['id'=>56875, 'districts_id'=>4751, 'zipcode'=>'83656', 'name'=>'Sembalun Bumbung']);
        DB::table('villages')->insert(['id'=>56876, 'districts_id'=>4751, 'zipcode'=>'83656', 'name'=>'Sembalun Lawang']);
        DB::table('villages')->insert(['id'=>56877, 'districts_id'=>4751, 'zipcode'=>'83656', 'name'=>'Sembalun Timba Gading']);
        //Kecamatan Pringgasela Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4752, 'city_id'=>287, 'name'=>'Pringgasela']);
        DB::table('villages')->insert(['id'=>56878, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Aik Dewa']);
        DB::table('villages')->insert(['id'=>56879, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Jurit']);
        DB::table('villages')->insert(['id'=>56880, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Jurit Baru']);
        DB::table('villages')->insert(['id'=>56881, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Pengadangan']);
        DB::table('villages')->insert(['id'=>56882, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Pengadangan Barat']);
        DB::table('villages')->insert(['id'=>56883, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Pringgasela']);
        DB::table('villages')->insert(['id'=>56884, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Pringgasela Selatan']);
        DB::table('villages')->insert(['id'=>56885, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Pringgasela Timur']);
        DB::table('villages')->insert(['id'=>56886, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Rempung']);
        DB::table('villages')->insert(['id'=>56887, 'districts_id'=>4752, 'zipcode'=>'83661', 'name'=>'Timbanuh']);
        //Kecamatan Masbagik Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4753, 'city_id'=>287, 'name'=>'Masbagik']);
        DB::table('villages')->insert(['id'=>56888, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Danger']);
        DB::table('villages')->insert(['id'=>56889, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Kesik']);
        DB::table('villages')->insert(['id'=>56890, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Kumbang']);
        DB::table('villages')->insert(['id'=>56891, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Lendang Nangka']);
        DB::table('villages')->insert(['id'=>56892, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Lendang Nangka Utara']);
        DB::table('villages')->insert(['id'=>56893, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Masbagik Selatan']);
        DB::table('villages')->insert(['id'=>56894, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Masbagik Timur']);
        DB::table('villages')->insert(['id'=>56895, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Masbagik Utara']);
        DB::table('villages')->insert(['id'=>56896, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Masbagik Utara Baru']);
        DB::table('villages')->insert(['id'=>56897, 'districts_id'=>4753, 'zipcode'=>'83661', 'name'=>'Paok Motong']);
        //Kecamatan Sikur Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4754, 'city_id'=>287, 'name'=>'Sikur']);
        DB::table('villages')->insert(['id'=>56898, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Darmasari']);
        DB::table('villages')->insert(['id'=>56899, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Gelora']);
        DB::table('villages')->insert(['id'=>56900, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Jeruk Manis']);
        DB::table('villages')->insert(['id'=>56901, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Kembang Kuning']);
        DB::table('villages')->insert(['id'=>56902, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Kotaraja']);
        DB::table('villages')->insert(['id'=>56903, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Loyok']);
        DB::table('villages')->insert(['id'=>56904, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Montong Baan Selatan']);
        DB::table('villages')->insert(['id'=>56905, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Montongbaan']);
        DB::table('villages')->insert(['id'=>56906, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Semaya']);
        DB::table('villages')->insert(['id'=>56907, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Sikur']);
        DB::table('villages')->insert(['id'=>56908, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Sikur Barat']);
        DB::table('villages')->insert(['id'=>56909, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Sikur Selatan']);
        DB::table('villages')->insert(['id'=>56910, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Tetebatu']);
        DB::table('villages')->insert(['id'=>56911, 'districts_id'=>4754, 'zipcode'=>'83662', 'name'=>'Tetebatu Selatan']);
        //Kecamatan Terara Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4755, 'city_id'=>287, 'name'=>'Terara']);
        DB::table('villages')->insert(['id'=>56912, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Embung Kandong']);
        DB::table('villages')->insert(['id'=>56913, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Embung Raja']);
        DB::table('villages')->insert(['id'=>56914, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Jenggik']);
        DB::table('villages')->insert(['id'=>56915, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Kalianyar']);
        DB::table('villages')->insert(['id'=>56916, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Lando']);
        DB::table('villages')->insert(['id'=>56917, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Leming']);
        DB::table('villages')->insert(['id'=>56918, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Pandan Duri']);
        DB::table('villages')->insert(['id'=>56919, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Rarang']);
        DB::table('villages')->insert(['id'=>56920, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Rarang Batas']);
        DB::table('villages')->insert(['id'=>56921, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Rarang Selatan']);
        DB::table('villages')->insert(['id'=>56922, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Rarang Tengah']);
        DB::table('villages')->insert(['id'=>56923, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Santong']);
        DB::table('villages')->insert(['id'=>56924, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Selagik']);
        DB::table('villages')->insert(['id'=>56925, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Sukadana']);
        DB::table('villages')->insert(['id'=>56926, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Suradadi']);
        DB::table('villages')->insert(['id'=>56927, 'districts_id'=>4755, 'zipcode'=>'83663', 'name'=>'Terara']);
        //Kecamatan Montong Gading Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4756, 'city_id'=>287, 'name'=>'Montong Gading']);
        DB::table('villages')->insert(['id'=>56928, 'districts_id'=>4756, 'zipcode'=>'83663', 'name'=>'Jenggik Utara']);
        DB::table('villages')->insert(['id'=>56929, 'districts_id'=>4756, 'zipcode'=>'83663', 'name'=>'Kilang']);
        DB::table('villages')->insert(['id'=>56930, 'districts_id'=>4756, 'zipcode'=>'83663', 'name'=>'Lendang Belo']);
        DB::table('villages')->insert(['id'=>56931, 'districts_id'=>4756, 'zipcode'=>'83663', 'name'=>'Montong Betok']);
        DB::table('villages')->insert(['id'=>56932, 'districts_id'=>4756, 'zipcode'=>'83663', 'name'=>'Perian']);
        DB::table('villages')->insert(['id'=>56933, 'districts_id'=>4756, 'zipcode'=>'83663', 'name'=>'Pesanggrahan']);
        DB::table('villages')->insert(['id'=>56934, 'districts_id'=>4756, 'zipcode'=>'83663', 'name'=>'Pringga Jurang']);
        DB::table('villages')->insert(['id'=>56935, 'districts_id'=>4756, 'zipcode'=>'83663', 'name'=>'Pringgajurang Utara']);
        //Kecamatan Sakra Barat Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4757, 'city_id'=>287, 'name'=>'Sakra Barat']);
        DB::table('villages')->insert(['id'=>56936, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Borok Toyang']);
        DB::table('villages')->insert(['id'=>56937, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Boyemare']);
        DB::table('villages')->insert(['id'=>56938, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Bungtiang']);
        DB::table('villages')->insert(['id'=>56939, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Gadungmas']);
        DB::table('villages')->insert(['id'=>56940, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Gerisak Semanggelen']);
        DB::table('villages')->insert(['id'=>56941, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Gunung Rajak']);
        DB::table('villages')->insert(['id'=>56942, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Jerogunung']);
        DB::table('villages')->insert(['id'=>56943, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Kembang Are Sampai']);
        DB::table('villages')->insert(['id'=>56944, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Mengkuru']);
        DB::table('villages')->insert(['id'=>56945, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Montong Beter']);
        DB::table('villages')->insert(['id'=>56946, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Pejaring']);
        DB::table('villages')->insert(['id'=>56947, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Pematung']);
        DB::table('villages')->insert(['id'=>56948, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Pengkelakmas']);
        DB::table('villages')->insert(['id'=>56949, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Rensing']);
        DB::table('villages')->insert(['id'=>56950, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Rensing Bat']);
        DB::table('villages')->insert(['id'=>56951, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Rensing Raya']);
        DB::table('villages')->insert(['id'=>56952, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Sukarara']);
        DB::table('villages')->insert(['id'=>56953, 'districts_id'=>4757, 'zipcode'=>'83671', 'name'=>'Tanak Kaken']);
        //Kecamatan Sakra Timur Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4758, 'city_id'=>287, 'name'=>'Sakra Timur']);
        DB::table('villages')->insert(['id'=>56954, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Gelanggang']);
        DB::table('villages')->insert(['id'=>56955, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Gereneng']);
        DB::table('villages')->insert(['id'=>56956, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Gereneng Timur']);
        DB::table('villages')->insert(['id'=>56957, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Lenting']);
        DB::table('villages')->insert(['id'=>56958, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Lepak']);
        DB::table('villages')->insert(['id'=>56959, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Lepak Timur']);
        DB::table('villages')->insert(['id'=>56960, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Menceh']);
        DB::table('villages')->insert(['id'=>56961, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Montongtangi']);
        DB::table('villages')->insert(['id'=>56962, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Surabaya']);
        DB::table('villages')->insert(['id'=>56963, 'districts_id'=>4758, 'zipcode'=>'83671', 'name'=>'Surabaya Utara']);
        //Kecamatan Sakra Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4759, 'city_id'=>287, 'name'=>'Sakra']);
        DB::table('villages')->insert(['id'=>56964, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Kabar']);
        DB::table('villages')->insert(['id'=>56965, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Keselet']);
        DB::table('villages')->insert(['id'=>56966, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Kuang Baru']);
        DB::table('villages')->insert(['id'=>56967, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Moyot']);
        DB::table('villages')->insert(['id'=>56968, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Peresak']);
        DB::table('villages')->insert(['id'=>56969, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Rumbuk']);
        DB::table('villages')->insert(['id'=>56970, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Rumbuk Timur']);
        DB::table('villages')->insert(['id'=>56971, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Sakra']);
        DB::table('villages')->insert(['id'=>56972, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Sakra Selatan']);
        DB::table('villages')->insert(['id'=>56973, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Songak']);
        DB::table('villages')->insert(['id'=>56974, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Suangi']);
        DB::table('villages')->insert(['id'=>56975, 'districts_id'=>4759, 'zipcode'=>'83671', 'name'=>'Suwangi Timur']);
        //Kecamatan Keruak Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4760, 'city_id'=>287, 'name'=>'Keruak']);
        DB::table('villages')->insert(['id'=>56976, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Batu Putik']);
        DB::table('villages')->insert(['id'=>56977, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Dane Rase']);
        DB::table('villages')->insert(['id'=>56978, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Keruak']);
        DB::table('villages')->insert(['id'=>56979, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Ketangga Jeraeng']);
        DB::table('villages')->insert(['id'=>56980, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Ketapang Raya']);
        DB::table('villages')->insert(['id'=>56981, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Mendana Raya']);
        DB::table('villages')->insert(['id'=>56982, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Montong Belae']);
        DB::table('villages')->insert(['id'=>56983, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Pijot']);
        DB::table('villages')->insert(['id'=>56984, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Pijot Utara']);
        DB::table('villages')->insert(['id'=>56985, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Pulau Maringkik']);
        DB::table('villages')->insert(['id'=>56986, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Selebung Ketangga']);
        DB::table('villages')->insert(['id'=>56987, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Senyiur']);
        DB::table('villages')->insert(['id'=>56988, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Sepit']);
        DB::table('villages')->insert(['id'=>56989, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Setungkep Lingsar']);
        DB::table('villages')->insert(['id'=>56990, 'districts_id'=>4760, 'zipcode'=>'83672', 'name'=>'Tanjung Luar']);
        //Kecamatan Jerowaru Kab. Lombok Timur Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4761, 'city_id'=>287, 'name'=>'Jerowaru']);
        DB::table('villages')->insert(['id'=>56991, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Batunampar']);
        DB::table('villages')->insert(['id'=>56992, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Batunampar Selatan']);
        DB::table('villages')->insert(['id'=>56993, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Ekas Buana']);
        DB::table('villages')->insert(['id'=>56994, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Jerowaru']);
        DB::table('villages')->insert(['id'=>56995, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Kwang Rundun']);
        DB::table('villages')->insert(['id'=>56996, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Pandan Wangi']);
        DB::table('villages')->insert(['id'=>56997, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Pare Mas']);
        DB::table('villages')->insert(['id'=>56998, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Pemongkong']);
        DB::table('villages')->insert(['id'=>56999, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Pene']);
        DB::table('villages')->insert(['id'=>57000, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Sekaroh']);
        DB::table('villages')->insert(['id'=>57001, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Sepapan']);
        DB::table('villages')->insert(['id'=>57002, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Seriwe']);
        DB::table('villages')->insert(['id'=>57003, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Sukadamai']);
        DB::table('villages')->insert(['id'=>57004, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Sukaraja']);
        DB::table('villages')->insert(['id'=>57005, 'districts_id'=>4761, 'zipcode'=>'83672', 'name'=>'Wakan']);

        //Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>288, 'province_id'=>22, 'type'=>'regencies', 'name'=>'Bima']);
        //Kecamatan Madapangga Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4762, 'city_id'=>288, 'name'=>'Madapangga']);
        DB::table('villages')->insert(['id'=>57006, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Bolo']);
        DB::table('villages')->insert(['id'=>57007, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Campa']);
        DB::table('villages')->insert(['id'=>57008, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Dena']);
        DB::table('villages')->insert(['id'=>57009, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Mandawau']);
        DB::table('villages')->insert(['id'=>57010, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Monggo']);
        DB::table('villages')->insert(['id'=>57011, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Mpuri']);
        DB::table('villages')->insert(['id'=>57012, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Ndano']);
        DB::table('villages')->insert(['id'=>57013, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Rade']);
        DB::table('villages')->insert(['id'=>57014, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Tonda']);
        DB::table('villages')->insert(['id'=>57015, 'districts_id'=>4762, 'zipcode'=>'84111', 'name'=>'Woro']);
        //Kecamatan Mpunda Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4763, 'city_id'=>288, 'name'=>'Mpunda']);
        DB::table('villages')->insert(['id'=>57016, 'districts_id'=>4763, 'zipcode'=>'84111', 'name'=>'Monggonao']);
        DB::table('villages')->insert(['id'=>57017, 'districts_id'=>4763, 'zipcode'=>'84112', 'name'=>'Sadia']);
        DB::table('villages')->insert(['id'=>57018, 'districts_id'=>4763, 'zipcode'=>'84115', 'name'=>'Penatoi']);
        DB::table('villages')->insert(['id'=>57019, 'districts_id'=>4763, 'zipcode'=>'84119', 'name'=>'Lewirato']);
        DB::table('villages')->insert(['id'=>57020, 'districts_id'=>4763, 'zipcode'=>'84119', 'name'=>'Mande']);
        DB::table('villages')->insert(['id'=>57021, 'districts_id'=>4763, 'zipcode'=>'84119', 'name'=>'Manggemaci']);
        DB::table('villages')->insert(['id'=>57022, 'districts_id'=>4763, 'zipcode'=>'84119', 'name'=>'Matakando']);
        DB::table('villages')->insert(['id'=>57023, 'districts_id'=>4763, 'zipcode'=>'84119', 'name'=>'Panggi']);
        DB::table('villages')->insert(['id'=>57024, 'districts_id'=>4763, 'zipcode'=>'84119', 'name'=>'Sambinae']);
        DB::table('villages')->insert(['id'=>57025, 'districts_id'=>4763, 'zipcode'=>'84119', 'name'=>'Santi']);
        //Kecamatan Rasanae Barat Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4764, 'city_id'=>288, 'name'=>'Rasanae Barat']);
        DB::table('villages')->insert(['id'=>57026, 'districts_id'=>4764, 'zipcode'=>'84111', 'name'=>'Paruga']);
        DB::table('villages')->insert(['id'=>57027, 'districts_id'=>4764, 'zipcode'=>'84116', 'name'=>'Nae']);
        DB::table('villages')->insert(['id'=>57028, 'districts_id'=>4764, 'zipcode'=>'84117', 'name'=>'Sarae']);
        DB::table('villages')->insert(['id'=>57029, 'districts_id'=>4764, 'zipcode'=>'84118', 'name'=>'Tanjung']);
        DB::table('villages')->insert(['id'=>57030, 'districts_id'=>4764, 'zipcode'=>'84119', 'name'=>'Dara (dora)']);
        DB::table('villages')->insert(['id'=>57031, 'districts_id'=>4764, 'zipcode'=>'84119', 'name'=>'Pane']);
        //Kecamatan Raba Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4765, 'city_id'=>288, 'name'=>'Raba']);
        DB::table('villages')->insert(['id'=>57032, 'districts_id'=>4765, 'zipcode'=>'84113', 'name'=>'Rabadompu Barat']);
        DB::table('villages')->insert(['id'=>57033, 'districts_id'=>4765, 'zipcode'=>'84113', 'name'=>'Rabadompu Timur']);
        DB::table('villages')->insert(['id'=>57034, 'districts_id'=>4765, 'zipcode'=>'84113', 'name'=>'Rabangodu Selatan']);
        DB::table('villages')->insert(['id'=>57035, 'districts_id'=>4765, 'zipcode'=>'84113', 'name'=>'Rabangodu Utara']);
        DB::table('villages')->insert(['id'=>57036, 'districts_id'=>4765, 'zipcode'=>'84115', 'name'=>'Penaraga']);
        DB::table('villages')->insert(['id'=>57037, 'districts_id'=>4765, 'zipcode'=>'84119', 'name'=>'Kendo']);
        DB::table('villages')->insert(['id'=>57038, 'districts_id'=>4765, 'zipcode'=>'84119', 'name'=>'Nitu']);
        DB::table('villages')->insert(['id'=>57039, 'districts_id'=>4765, 'zipcode'=>'84119', 'name'=>'Ntobo']);
        DB::table('villages')->insert(['id'=>57040, 'districts_id'=>4765, 'zipcode'=>'84119', 'name'=>'Penanae']);
        DB::table('villages')->insert(['id'=>57041, 'districts_id'=>4765, 'zipcode'=>'84119', 'name'=>'Rite']);
        DB::table('villages')->insert(['id'=>57042, 'districts_id'=>4765, 'zipcode'=>'84119', 'name'=>'Rontu']);
        //Kecamatan Rasanae Timur Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4766, 'city_id'=>288, 'name'=>'Rasanae Timur']);
        DB::table('villages')->insert(['id'=>57043, 'districts_id'=>4766, 'zipcode'=>'84114', 'name'=>'Kumbe']);
        DB::table('villages')->insert(['id'=>57044, 'districts_id'=>4766, 'zipcode'=>'84119', 'name'=>'Dodu']);
        DB::table('villages')->insert(['id'=>57045, 'districts_id'=>4766, 'zipcode'=>'84119', 'name'=>'Kodo']);
        DB::table('villages')->insert(['id'=>57046, 'districts_id'=>4766, 'zipcode'=>'84119', 'name'=>'Lampe']);
        DB::table('villages')->insert(['id'=>57047, 'districts_id'=>4766, 'zipcode'=>'84119', 'name'=>'Lelamase']);
        DB::table('villages')->insert(['id'=>57048, 'districts_id'=>4766, 'zipcode'=>'84119', 'name'=>'Nungga']);
        DB::table('villages')->insert(['id'=>57049, 'districts_id'=>4766, 'zipcode'=>'84119', 'name'=>'Oi Fo\o']);
        //Kecamatan Asakota Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4767, 'city_id'=>288, 'name'=>'Asakota']);
        DB::table('villages')->insert(['id'=>57050, 'districts_id'=>4767, 'zipcode'=>'84119', 'name'=>'Jatibaru']);
        DB::table('villages')->insert(['id'=>57051, 'districts_id'=>4767, 'zipcode'=>'84119', 'name'=>'Jatiwangi']);
        DB::table('villages')->insert(['id'=>57052, 'districts_id'=>4767, 'zipcode'=>'84119', 'name'=>'Kolo']);
        DB::table('villages')->insert(['id'=>57053, 'districts_id'=>4767, 'zipcode'=>'84119', 'name'=>'Melayu']);
        //Kecamatan Wera Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4768, 'city_id'=>288, 'name'=>'Wera']);
        DB::table('villages')->insert(['id'=>57054, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Bala']);
        DB::table('villages')->insert(['id'=>57055, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Hidirasa (hadirasa)']);
        DB::table('villages')->insert(['id'=>57056, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Nanga Wera']);
        DB::table('villages')->insert(['id'=>57057, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Ntoke']);
        DB::table('villages')->insert(['id'=>57058, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Nunggi']);
        DB::table('villages')->insert(['id'=>57059, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Oitui']);
        DB::table('villages')->insert(['id'=>57060, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Pai']);
        DB::table('villages')->insert(['id'=>57061, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Sangiang']);
        DB::table('villages')->insert(['id'=>57062, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Tadewa']);
        DB::table('villages')->insert(['id'=>57063, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Tawali']);
        DB::table('villages')->insert(['id'=>57064, 'districts_id'=>4768, 'zipcode'=>'84152', 'name'=>'Wora']);
        //Kecamatan Ambalawi Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4769, 'city_id'=>288, 'name'=>'Ambalawi']);
        DB::table('villages')->insert(['id'=>57065, 'districts_id'=>4769, 'zipcode'=>'84153', 'name'=>'Kole']);
        DB::table('villages')->insert(['id'=>57066, 'districts_id'=>4769, 'zipcode'=>'84153', 'name'=>'Mawu']);
        DB::table('villages')->insert(['id'=>57067, 'districts_id'=>4769, 'zipcode'=>'84153', 'name'=>'Nipa']);
        DB::table('villages')->insert(['id'=>57068, 'districts_id'=>4769, 'zipcode'=>'84153', 'name'=>'Rite']);
        DB::table('villages')->insert(['id'=>57069, 'districts_id'=>4769, 'zipcode'=>'84153', 'name'=>'Talapiti']);
        DB::table('villages')->insert(['id'=>57070, 'districts_id'=>4769, 'zipcode'=>'84153', 'name'=>'Tolowata']);
        //Kecamatan Bolo Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4770, 'city_id'=>288, 'name'=>'Bolo']);
        DB::table('villages')->insert(['id'=>57071, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Bontokape']);
        DB::table('villages')->insert(['id'=>57072, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Kananga']);
        DB::table('villages')->insert(['id'=>57073, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Leu']);
        DB::table('villages')->insert(['id'=>57074, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Nggembe']);
        DB::table('villages')->insert(['id'=>57075, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Rada']);
        DB::table('villages')->insert(['id'=>57076, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Rasabou']);
        DB::table('villages')->insert(['id'=>57077, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Rato']);
        DB::table('villages')->insert(['id'=>57078, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Sanolo']);
        DB::table('villages')->insert(['id'=>57079, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Sondosia']);
        DB::table('villages')->insert(['id'=>57080, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Tambe']);
        DB::table('villages')->insert(['id'=>57081, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Timu']);
        DB::table('villages')->insert(['id'=>57082, 'districts_id'=>4770, 'zipcode'=>'84161', 'name'=>'Tumpu']);
        //Kecamatan Soromandi Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4771, 'city_id'=>288, 'name'=>'Soromandi']);
        DB::table('villages')->insert(['id'=>57083, 'districts_id'=>4771, 'zipcode'=>'84162', 'name'=>'Bajo']);
        DB::table('villages')->insert(['id'=>57084, 'districts_id'=>4771, 'zipcode'=>'84162', 'name'=>'Kananta']);
        DB::table('villages')->insert(['id'=>57085, 'districts_id'=>4771, 'zipcode'=>'84162', 'name'=>'Punti']);
        DB::table('villages')->insert(['id'=>57086, 'districts_id'=>4771, 'zipcode'=>'84162', 'name'=>'Sai']);
        DB::table('villages')->insert(['id'=>57087, 'districts_id'=>4771, 'zipcode'=>'84162', 'name'=>'Sampungu']);
        DB::table('villages')->insert(['id'=>57088, 'districts_id'=>4771, 'zipcode'=>'84162', 'name'=>'Wadukopa']);
        //Kecamatan Donggo Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4772, 'city_id'=>288, 'name'=>'Donggo']);
        DB::table('villages')->insert(['id'=>57089, 'districts_id'=>4772, 'zipcode'=>'84162', 'name'=>'Bumi Pajo']);
        DB::table('villages')->insert(['id'=>57090, 'districts_id'=>4772, 'zipcode'=>'84162', 'name'=>'Doridungga']);
        DB::table('villages')->insert(['id'=>57091, 'districts_id'=>4772, 'zipcode'=>'84162', 'name'=>'Kala']);
        DB::table('villages')->insert(['id'=>57092, 'districts_id'=>4772, 'zipcode'=>'84162', 'name'=>'Mbawa']);
        DB::table('villages')->insert(['id'=>57093, 'districts_id'=>4772, 'zipcode'=>'84162', 'name'=>'Mpili']);
        DB::table('villages')->insert(['id'=>57094, 'districts_id'=>4772, 'zipcode'=>'84162', 'name'=>'O\o']);
        DB::table('villages')->insert(['id'=>57095, 'districts_id'=>4772, 'zipcode'=>'84162', 'name'=>'Palama']);
        DB::table('villages')->insert(['id'=>57096, 'districts_id'=>4772, 'zipcode'=>'84162', 'name'=>'Rora']);
        //Kecamatan Woha Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4773, 'city_id'=>288, 'name'=>'Woha']);
        DB::table('villages')->insert(['id'=>57097, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Dadibou']);
        DB::table('villages')->insert(['id'=>57098, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Donggobolo']);
        DB::table('villages')->insert(['id'=>57099, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Kalampa']);
        DB::table('villages')->insert(['id'=>57100, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Keli']);
        DB::table('villages')->insert(['id'=>57101, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Naru']);
        DB::table('villages')->insert(['id'=>57102, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Nisa']);
        DB::table('villages')->insert(['id'=>57103, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Pandai']);
        DB::table('villages')->insert(['id'=>57104, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Penapali']);
        DB::table('villages')->insert(['id'=>57105, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Rabakodo']);
        DB::table('villages')->insert(['id'=>57106, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Risa']);
        DB::table('villages')->insert(['id'=>57107, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Samili']);
        DB::table('villages')->insert(['id'=>57108, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Talabiu']);
        DB::table('villages')->insert(['id'=>57109, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Tenga']);
        DB::table('villages')->insert(['id'=>57110, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Tente']);
        DB::table('villages')->insert(['id'=>57111, 'districts_id'=>4773, 'zipcode'=>'84171', 'name'=>'Waduwani']);
        //Kecamatan Monta Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4774, 'city_id'=>288, 'name'=>'Monta']);
        DB::table('villages')->insert(['id'=>57112, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Baralau']);
        DB::table('villages')->insert(['id'=>57113, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Monta']);
        DB::table('villages')->insert(['id'=>57114, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Pela']);
        DB::table('villages')->insert(['id'=>57115, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Sekuru']);
        DB::table('villages')->insert(['id'=>57116, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Sie']);
        DB::table('villages')->insert(['id'=>57117, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Simpasai']);
        DB::table('villages')->insert(['id'=>57118, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Sondo']);
        DB::table('villages')->insert(['id'=>57119, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Tangga']);
        DB::table('villages')->insert(['id'=>57120, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Tangga Baru']);
        DB::table('villages')->insert(['id'=>57121, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Tolotangga']);
        DB::table('villages')->insert(['id'=>57122, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Tolouwi']);
        DB::table('villages')->insert(['id'=>57123, 'districts_id'=>4774, 'zipcode'=>'84172', 'name'=>'Willamaci']);
        //Kecamatan Parado Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4775, 'city_id'=>288, 'name'=>'Parado']);
        DB::table('villages')->insert(['id'=>57124, 'districts_id'=>4775, 'zipcode'=>'84172', 'name'=>'Kanca']);
        DB::table('villages')->insert(['id'=>57125, 'districts_id'=>4775, 'zipcode'=>'84172', 'name'=>'Kuta']);
        DB::table('villages')->insert(['id'=>57126, 'districts_id'=>4775, 'zipcode'=>'84172', 'name'=>'Lere']);
        DB::table('villages')->insert(['id'=>57127, 'districts_id'=>4775, 'zipcode'=>'84172', 'name'=>'Paradorato']);
        DB::table('villages')->insert(['id'=>57128, 'districts_id'=>4775, 'zipcode'=>'84172', 'name'=>'Paradowane']);
        //Kecamatan Palibelo Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4776, 'city_id'=>288, 'name'=>'Palibelo']);
        DB::table('villages')->insert(['id'=>57129, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Belo']);
        DB::table('villages')->insert(['id'=>57130, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Doie']);
        DB::table('villages')->insert(['id'=>57131, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Dore']);
        DB::table('villages')->insert(['id'=>57132, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Nata']);
        DB::table('villages')->insert(['id'=>57133, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Ntonggu']);
        DB::table('villages')->insert(['id'=>57134, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Panda']);
        DB::table('villages')->insert(['id'=>57135, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Roi']);
        DB::table('villages')->insert(['id'=>57136, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Teke']);
        DB::table('villages')->insert(['id'=>57137, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Tolongondoa']);
        DB::table('villages')->insert(['id'=>57138, 'districts_id'=>4776, 'zipcode'=>'84173', 'name'=>'Tonggorisa']);
        //Kecamatan Belo Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4777, 'city_id'=>288, 'name'=>'Belo']);
        DB::table('villages')->insert(['id'=>57139, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Cenggu']);
        DB::table('villages')->insert(['id'=>57140, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Lido']);
        DB::table('villages')->insert(['id'=>57141, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Ncera']);
        DB::table('villages')->insert(['id'=>57142, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Ngali']);
        DB::table('villages')->insert(['id'=>57143, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Panda']);
        DB::table('villages')->insert(['id'=>57144, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Renda']);
        DB::table('villages')->insert(['id'=>57145, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Roka']);
        DB::table('villages')->insert(['id'=>57146, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Runggu']);
        DB::table('villages')->insert(['id'=>57147, 'districts_id'=>4777, 'zipcode'=>'84173', 'name'=>'Soki']);
        //Kecamatan Langgudu Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4778, 'city_id'=>288, 'name'=>'Langgudu']);
        DB::table('villages')->insert(['id'=>57148, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Doro O\o']);
        DB::table('villages')->insert(['id'=>57149, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Dumu']);
        DB::table('villages')->insert(['id'=>57150, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Kalodu']);
        DB::table('villages')->insert(['id'=>57151, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Kangga']);
        DB::table('villages')->insert(['id'=>57152, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Karampi']);
        DB::table('villages')->insert(['id'=>57153, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Karumbu']);
        DB::table('villages')->insert(['id'=>57154, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Kawuwu']);
        DB::table('villages')->insert(['id'=>57155, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Laju']);
        DB::table('villages')->insert(['id'=>57156, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Rompo']);
        DB::table('villages')->insert(['id'=>57157, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Rupe']);
        DB::table('villages')->insert(['id'=>57158, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Wadu Ruka']);
        DB::table('villages')->insert(['id'=>57159, 'districts_id'=>4778, 'zipcode'=>'84181', 'name'=>'Waworada']);
        //Kecamatan Lambitu Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4779, 'city_id'=>288, 'name'=>'Lambitu']);
        DB::table('villages')->insert(['id'=>57160, 'districts_id'=>4779, 'zipcode'=>'84181', 'name'=>'Kaboro (kabaro)']);
        DB::table('villages')->insert(['id'=>57161, 'districts_id'=>4779, 'zipcode'=>'84181', 'name'=>'Kaowa']);
        DB::table('villages')->insert(['id'=>57162, 'districts_id'=>4779, 'zipcode'=>'84181', 'name'=>'Kuta']);
        DB::table('villages')->insert(['id'=>57163, 'districts_id'=>4779, 'zipcode'=>'84181', 'name'=>'Sambori']);
        DB::table('villages')->insert(['id'=>57164, 'districts_id'=>4779, 'zipcode'=>'84181', 'name'=>'Teta']);
        //Kecamatan Wawo Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4780, 'city_id'=>288, 'name'=>'Wawo']);
        DB::table('villages')->insert(['id'=>57165, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Kambilo']);
        DB::table('villages')->insert(['id'=>57166, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Koboro']);
        DB::table('villages')->insert(['id'=>57167, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Kombo']);
        DB::table('villages')->insert(['id'=>57168, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Maria']);
        DB::table('villages')->insert(['id'=>57169, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Maria Utara']);
        DB::table('villages')->insert(['id'=>57170, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Ntori']);
        DB::table('villages')->insert(['id'=>57171, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Pesa']);
        DB::table('villages')->insert(['id'=>57172, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Raba']);
        DB::table('villages')->insert(['id'=>57173, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Riamau (rianmau)']);
        DB::table('villages')->insert(['id'=>57174, 'districts_id'=>4780, 'zipcode'=>'84181', 'name'=>'Tarlawi']);
        //Kecamatan Sape Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4781, 'city_id'=>288, 'name'=>'Sape']);
        DB::table('villages')->insert(['id'=>57175, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Bajopulau']);
        DB::table('villages')->insert(['id'=>57176, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Boke']);
        DB::table('villages')->insert(['id'=>57177, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Bugis']);
        DB::table('villages')->insert(['id'=>57178, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Buncu']);
        DB::table('villages')->insert(['id'=>57179, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Jia']);
        DB::table('villages')->insert(['id'=>57180, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Kowo']);
        DB::table('villages')->insert(['id'=>57181, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Lamere (lamera)']);
        DB::table('villages')->insert(['id'=>57182, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Nae']);
        DB::table('villages')->insert(['id'=>57183, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Naru']);
        DB::table('villages')->insert(['id'=>57184, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Naru Barat']);
        DB::table('villages')->insert(['id'=>57185, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Parangina']);
        DB::table('villages')->insert(['id'=>57186, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Poja']);
        DB::table('villages')->insert(['id'=>57187, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Raioi']);
        DB::table('villages')->insert(['id'=>57188, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Rasabou']);
        DB::table('villages')->insert(['id'=>57189, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Sangia']);
        DB::table('villages')->insert(['id'=>57190, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Sari']);
        DB::table('villages')->insert(['id'=>57191, 'districts_id'=>4781, 'zipcode'=>'84182', 'name'=>'Tanah Putih']);
        //Kecamatan Lambu Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4782, 'city_id'=>288, 'name'=>'Lambu']);
        DB::table('villages')->insert(['id'=>57192, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Hidirasa']);
        DB::table('villages')->insert(['id'=>57193, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Kaleo']);
        DB::table('villages')->insert(['id'=>57194, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Lambu']);
        DB::table('villages')->insert(['id'=>57195, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Lanta']);
        DB::table('villages')->insert(['id'=>57196, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Lauta Barat']);
        DB::table('villages')->insert(['id'=>57197, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Mangge']);
        DB::table('villages')->insert(['id'=>57198, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Melayu']);
        DB::table('villages')->insert(['id'=>57199, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Nggelu']);
        DB::table('villages')->insert(['id'=>57200, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Rato']);
        DB::table('villages')->insert(['id'=>57201, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Simpasai']);
        DB::table('villages')->insert(['id'=>57202, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Soro']);
        DB::table('villages')->insert(['id'=>57203, 'districts_id'=>4782, 'zipcode'=>'84182', 'name'=>'Sumi']);
        //Kecamatan Sanggar Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4783, 'city_id'=>288, 'name'=>'Sanggar']);
        DB::table('villages')->insert(['id'=>57204, 'districts_id'=>4783, 'zipcode'=>'84191', 'name'=>'Boro']);
        DB::table('villages')->insert(['id'=>57205, 'districts_id'=>4783, 'zipcode'=>'84191', 'name'=>'Kore']);
        DB::table('villages')->insert(['id'=>57206, 'districts_id'=>4783, 'zipcode'=>'84191', 'name'=>'Oi Saro']);
        DB::table('villages')->insert(['id'=>57207, 'districts_id'=>4783, 'zipcode'=>'84191', 'name'=>'Piong']);
        DB::table('villages')->insert(['id'=>57208, 'districts_id'=>4783, 'zipcode'=>'84191', 'name'=>'Sandue']);
        DB::table('villages')->insert(['id'=>57209, 'districts_id'=>4783, 'zipcode'=>'84191', 'name'=>'Taloko']);
        //Kecamatan Tambora Kab. Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4784, 'city_id'=>288, 'name'=>'Tambora']);
        DB::table('villages')->insert(['id'=>57210, 'districts_id'=>4784, 'zipcode'=>'84191', 'name'=>'Kawinda Nae']);
        DB::table('villages')->insert(['id'=>57211, 'districts_id'=>4784, 'zipcode'=>'84191', 'name'=>'Kawinda Toi']);
        DB::table('villages')->insert(['id'=>57212, 'districts_id'=>4784, 'zipcode'=>'84191', 'name'=>'Labuhan Kananga']);
        DB::table('villages')->insert(['id'=>57213, 'districts_id'=>4784, 'zipcode'=>'84191', 'name'=>'Oi Bura']);
        DB::table('villages')->insert(['id'=>57214, 'districts_id'=>4784, 'zipcode'=>'84191', 'name'=>'Oi Panihi']);

        //Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>289, 'province_id'=>22, 'type'=>'city', 'name'=>'Bima']);
        //Kecamatan Madapangga Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4785, 'city_id'=>289, 'name'=>'Madapangga']);
        DB::table('villages')->insert(['id'=>57215, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Bolo']);
        DB::table('villages')->insert(['id'=>57216, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Campa']);
        DB::table('villages')->insert(['id'=>57217, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Dena']);
        DB::table('villages')->insert(['id'=>57218, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Mandawau']);
        DB::table('villages')->insert(['id'=>57219, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Monggo']);
        DB::table('villages')->insert(['id'=>57220, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Mpuri']);
        DB::table('villages')->insert(['id'=>57221, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Ndano']);
        DB::table('villages')->insert(['id'=>57222, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Rade']);
        DB::table('villages')->insert(['id'=>57223, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Tonda']);
        DB::table('villages')->insert(['id'=>57224, 'districts_id'=>4785, 'zipcode'=>'84111', 'name'=>'Woro']);
        //Kecamatan Mpunda Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4786, 'city_id'=>289, 'name'=>'Mpunda']);
        DB::table('villages')->insert(['id'=>57225, 'districts_id'=>4786, 'zipcode'=>'84111', 'name'=>'Monggonao']);
        DB::table('villages')->insert(['id'=>57226, 'districts_id'=>4786, 'zipcode'=>'84112', 'name'=>'Sadia']);
        DB::table('villages')->insert(['id'=>57227, 'districts_id'=>4786, 'zipcode'=>'84115', 'name'=>'Penatoi']);
        DB::table('villages')->insert(['id'=>57228, 'districts_id'=>4786, 'zipcode'=>'84119', 'name'=>'Lewirato']);
        DB::table('villages')->insert(['id'=>57229, 'districts_id'=>4786, 'zipcode'=>'84119', 'name'=>'Mande']);
        DB::table('villages')->insert(['id'=>57230, 'districts_id'=>4786, 'zipcode'=>'84119', 'name'=>'Manggemaci']);
        DB::table('villages')->insert(['id'=>57231, 'districts_id'=>4786, 'zipcode'=>'84119', 'name'=>'Matakando']);
        DB::table('villages')->insert(['id'=>57232, 'districts_id'=>4786, 'zipcode'=>'84119', 'name'=>'Panggi']);
        DB::table('villages')->insert(['id'=>57233, 'districts_id'=>4786, 'zipcode'=>'84119', 'name'=>'Sambinae']);
        DB::table('villages')->insert(['id'=>57234, 'districts_id'=>4786, 'zipcode'=>'84119', 'name'=>'Santi']);
        //Kecamatan Rasanae Barat Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4787, 'city_id'=>289, 'name'=>'Rasanae Barat']);
        DB::table('villages')->insert(['id'=>57235, 'districts_id'=>4787, 'zipcode'=>'84111', 'name'=>'Paruga']);
        DB::table('villages')->insert(['id'=>57236, 'districts_id'=>4787, 'zipcode'=>'84116', 'name'=>'Nae']);
        DB::table('villages')->insert(['id'=>57237, 'districts_id'=>4787, 'zipcode'=>'84117', 'name'=>'Sarae']);
        DB::table('villages')->insert(['id'=>57238, 'districts_id'=>4787, 'zipcode'=>'84118', 'name'=>'Tanjung']);
        DB::table('villages')->insert(['id'=>57239, 'districts_id'=>4787, 'zipcode'=>'84119', 'name'=>'Dara (dora)']);
        DB::table('villages')->insert(['id'=>57240, 'districts_id'=>4787, 'zipcode'=>'84119', 'name'=>'Pane']);
        //Kecamatan Raba Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4788, 'city_id'=>289, 'name'=>'Raba']);
        DB::table('villages')->insert(['id'=>57241, 'districts_id'=>4788, 'zipcode'=>'84113', 'name'=>'Rabadompu Barat']);
        DB::table('villages')->insert(['id'=>57242, 'districts_id'=>4788, 'zipcode'=>'84113', 'name'=>'Rabadompu Timur']);
        DB::table('villages')->insert(['id'=>57243, 'districts_id'=>4788, 'zipcode'=>'84113', 'name'=>'Rabangodu Selatan']);
        DB::table('villages')->insert(['id'=>57244, 'districts_id'=>4788, 'zipcode'=>'84113', 'name'=>'Rabangodu Utara']);
        DB::table('villages')->insert(['id'=>57245, 'districts_id'=>4788, 'zipcode'=>'84115', 'name'=>'Penaraga']);
        DB::table('villages')->insert(['id'=>57246, 'districts_id'=>4788, 'zipcode'=>'84119', 'name'=>'Kendo']);
        DB::table('villages')->insert(['id'=>57247, 'districts_id'=>4788, 'zipcode'=>'84119', 'name'=>'Nitu']);
        DB::table('villages')->insert(['id'=>57248, 'districts_id'=>4788, 'zipcode'=>'84119', 'name'=>'Ntobo']);
        DB::table('villages')->insert(['id'=>57249, 'districts_id'=>4788, 'zipcode'=>'84119', 'name'=>'Penanae']);
        DB::table('villages')->insert(['id'=>57250, 'districts_id'=>4788, 'zipcode'=>'84119', 'name'=>'Rite']);
        DB::table('villages')->insert(['id'=>57251, 'districts_id'=>4788, 'zipcode'=>'84119', 'name'=>'Rontu']);
        //Kecamatan Rasanae Timur Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4789, 'city_id'=>289, 'name'=>'Rasanae Timur']);
        DB::table('villages')->insert(['id'=>57252, 'districts_id'=>4789, 'zipcode'=>'84114', 'name'=>'Kumbe']);
        DB::table('villages')->insert(['id'=>57253, 'districts_id'=>4789, 'zipcode'=>'84119', 'name'=>'Dodu']);
        DB::table('villages')->insert(['id'=>57254, 'districts_id'=>4789, 'zipcode'=>'84119', 'name'=>'Kodo']);
        DB::table('villages')->insert(['id'=>57255, 'districts_id'=>4789, 'zipcode'=>'84119', 'name'=>'Lampe']);
        DB::table('villages')->insert(['id'=>57256, 'districts_id'=>4789, 'zipcode'=>'84119', 'name'=>'Lelamase']);
        DB::table('villages')->insert(['id'=>57257, 'districts_id'=>4789, 'zipcode'=>'84119', 'name'=>'Nungga']);
        DB::table('villages')->insert(['id'=>57258, 'districts_id'=>4789, 'zipcode'=>'84119', 'name'=>'Oi Fo\o']);
        //Kecamatan Asakota Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4790, 'city_id'=>289, 'name'=>'Asakota']);
        DB::table('villages')->insert(['id'=>57259, 'districts_id'=>4790, 'zipcode'=>'84119', 'name'=>'Jatibaru']);
        DB::table('villages')->insert(['id'=>57260, 'districts_id'=>4790, 'zipcode'=>'84119', 'name'=>'Jatiwangi']);
        DB::table('villages')->insert(['id'=>57261, 'districts_id'=>4790, 'zipcode'=>'84119', 'name'=>'Kolo']);
        DB::table('villages')->insert(['id'=>57262, 'districts_id'=>4790, 'zipcode'=>'84119', 'name'=>'Melayu']);
        //Kecamatan Wera Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4791, 'city_id'=>289, 'name'=>'Wera']);
        DB::table('villages')->insert(['id'=>57263, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Bala']);
        DB::table('villages')->insert(['id'=>57264, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Hidirasa (hadirasa)']);
        DB::table('villages')->insert(['id'=>57265, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Nanga Wera']);
        DB::table('villages')->insert(['id'=>57266, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Ntoke']);
        DB::table('villages')->insert(['id'=>57267, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Nunggi']);
        DB::table('villages')->insert(['id'=>57268, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Oitui']);
        DB::table('villages')->insert(['id'=>57269, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Pai']);
        DB::table('villages')->insert(['id'=>57270, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Sangiang']);
        DB::table('villages')->insert(['id'=>57271, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Tadewa']);
        DB::table('villages')->insert(['id'=>57272, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Tawali']);
        DB::table('villages')->insert(['id'=>57273, 'districts_id'=>4791, 'zipcode'=>'84152', 'name'=>'Wora']);
        //Kecamatan Ambalawi Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4792, 'city_id'=>289, 'name'=>'Ambalawi']);
        DB::table('villages')->insert(['id'=>57274, 'districts_id'=>4792, 'zipcode'=>'84153', 'name'=>'Kole']);
        DB::table('villages')->insert(['id'=>57275, 'districts_id'=>4792, 'zipcode'=>'84153', 'name'=>'Mawu']);
        DB::table('villages')->insert(['id'=>57276, 'districts_id'=>4792, 'zipcode'=>'84153', 'name'=>'Nipa']);
        DB::table('villages')->insert(['id'=>57277, 'districts_id'=>4792, 'zipcode'=>'84153', 'name'=>'Rite']);
        DB::table('villages')->insert(['id'=>57278, 'districts_id'=>4792, 'zipcode'=>'84153', 'name'=>'Talapiti']);
        DB::table('villages')->insert(['id'=>57279, 'districts_id'=>4792, 'zipcode'=>'84153', 'name'=>'Tolowata']);
        //Kecamatan Bolo Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4793, 'city_id'=>289, 'name'=>'Bolo']);
        DB::table('villages')->insert(['id'=>57280, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Bontokape']);
        DB::table('villages')->insert(['id'=>57281, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Kananga']);
        DB::table('villages')->insert(['id'=>57282, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Leu']);
        DB::table('villages')->insert(['id'=>57283, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Nggembe']);
        DB::table('villages')->insert(['id'=>57284, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Rada']);
        DB::table('villages')->insert(['id'=>57285, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Rasabou']);
        DB::table('villages')->insert(['id'=>57286, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Rato']);
        DB::table('villages')->insert(['id'=>57287, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Sanolo']);
        DB::table('villages')->insert(['id'=>57288, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Sondosia']);
        DB::table('villages')->insert(['id'=>57289, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Tambe']);
        DB::table('villages')->insert(['id'=>57290, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Timu']);
        DB::table('villages')->insert(['id'=>57291, 'districts_id'=>4793, 'zipcode'=>'84161', 'name'=>'Tumpu']);
        //Kecamatan Soromandi Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4794, 'city_id'=>289, 'name'=>'Soromandi']);
        DB::table('villages')->insert(['id'=>57292, 'districts_id'=>4794, 'zipcode'=>'84162', 'name'=>'Bajo']);
        DB::table('villages')->insert(['id'=>57293, 'districts_id'=>4794, 'zipcode'=>'84162', 'name'=>'Kananta']);
        DB::table('villages')->insert(['id'=>57294, 'districts_id'=>4794, 'zipcode'=>'84162', 'name'=>'Punti']);
        DB::table('villages')->insert(['id'=>57295, 'districts_id'=>4794, 'zipcode'=>'84162', 'name'=>'Sai']);
        DB::table('villages')->insert(['id'=>57296, 'districts_id'=>4794, 'zipcode'=>'84162', 'name'=>'Sampungu']);
        DB::table('villages')->insert(['id'=>57297, 'districts_id'=>4794, 'zipcode'=>'84162', 'name'=>'Wadukopa']);
        //Kecamatan Donggo Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4795, 'city_id'=>289, 'name'=>'Donggo']);
        DB::table('villages')->insert(['id'=>57298, 'districts_id'=>4795, 'zipcode'=>'84162', 'name'=>'Bumi Pajo']);
        DB::table('villages')->insert(['id'=>57299, 'districts_id'=>4795, 'zipcode'=>'84162', 'name'=>'Doridungga']);
        DB::table('villages')->insert(['id'=>57300, 'districts_id'=>4795, 'zipcode'=>'84162', 'name'=>'Kala']);
        DB::table('villages')->insert(['id'=>57301, 'districts_id'=>4795, 'zipcode'=>'84162', 'name'=>'Mbawa']);
        DB::table('villages')->insert(['id'=>57302, 'districts_id'=>4795, 'zipcode'=>'84162', 'name'=>'Mpili']);
        DB::table('villages')->insert(['id'=>57303, 'districts_id'=>4795, 'zipcode'=>'84162', 'name'=>'O\o']);
        DB::table('villages')->insert(['id'=>57304, 'districts_id'=>4795, 'zipcode'=>'84162', 'name'=>'Palama']);
        DB::table('villages')->insert(['id'=>57305, 'districts_id'=>4795, 'zipcode'=>'84162', 'name'=>'Rora']);
        //Kecamatan Woha Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4796, 'city_id'=>289, 'name'=>'Woha']);
        DB::table('villages')->insert(['id'=>57306, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Dadibou']);
        DB::table('villages')->insert(['id'=>57307, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Donggobolo']);
        DB::table('villages')->insert(['id'=>57308, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Kalampa']);
        DB::table('villages')->insert(['id'=>57309, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Keli']);
        DB::table('villages')->insert(['id'=>57310, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Naru']);
        DB::table('villages')->insert(['id'=>57311, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Nisa']);
        DB::table('villages')->insert(['id'=>57312, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Pandai']);
        DB::table('villages')->insert(['id'=>57313, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Penapali']);
        DB::table('villages')->insert(['id'=>57314, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Rabakodo']);
        DB::table('villages')->insert(['id'=>57315, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Risa']);
        DB::table('villages')->insert(['id'=>57316, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Samili']);
        DB::table('villages')->insert(['id'=>57317, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Talabiu']);
        DB::table('villages')->insert(['id'=>57318, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Tenga']);
        DB::table('villages')->insert(['id'=>57319, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Tente']);
        DB::table('villages')->insert(['id'=>57320, 'districts_id'=>4796, 'zipcode'=>'84171', 'name'=>'Waduwani']);
        //Kecamatan Monta Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4797, 'city_id'=>289, 'name'=>'Monta']);
        DB::table('villages')->insert(['id'=>57321, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Baralau']);
        DB::table('villages')->insert(['id'=>57322, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Monta']);
        DB::table('villages')->insert(['id'=>57323, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Pela']);
        DB::table('villages')->insert(['id'=>57324, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Sekuru']);
        DB::table('villages')->insert(['id'=>57325, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Sie']);
        DB::table('villages')->insert(['id'=>57326, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Simpasai']);
        DB::table('villages')->insert(['id'=>57327, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Sondo']);
        DB::table('villages')->insert(['id'=>57328, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Tangga']);
        DB::table('villages')->insert(['id'=>57329, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Tangga Baru']);
        DB::table('villages')->insert(['id'=>57330, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Tolotangga']);
        DB::table('villages')->insert(['id'=>57331, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Tolouwi']);
        DB::table('villages')->insert(['id'=>57332, 'districts_id'=>4797, 'zipcode'=>'84172', 'name'=>'Willamaci']);
        //Kecamatan Parado Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4798, 'city_id'=>289, 'name'=>'Parado']);
        DB::table('villages')->insert(['id'=>57333, 'districts_id'=>4798, 'zipcode'=>'84172', 'name'=>'Kanca']);
        DB::table('villages')->insert(['id'=>57334, 'districts_id'=>4798, 'zipcode'=>'84172', 'name'=>'Kuta']);
        DB::table('villages')->insert(['id'=>57335, 'districts_id'=>4798, 'zipcode'=>'84172', 'name'=>'Lere']);
        DB::table('villages')->insert(['id'=>57336, 'districts_id'=>4798, 'zipcode'=>'84172', 'name'=>'Paradorato']);
        DB::table('villages')->insert(['id'=>57337, 'districts_id'=>4798, 'zipcode'=>'84172', 'name'=>'Paradowane']);
        //Kecamatan Palibelo Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4799, 'city_id'=>289, 'name'=>'Palibelo']);
        DB::table('villages')->insert(['id'=>57338, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Belo']);
        DB::table('villages')->insert(['id'=>57339, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Doie']);
        DB::table('villages')->insert(['id'=>57340, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Dore']);
        DB::table('villages')->insert(['id'=>57341, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Nata']);
        DB::table('villages')->insert(['id'=>57342, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Ntonggu']);
        DB::table('villages')->insert(['id'=>57343, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Panda']);
        DB::table('villages')->insert(['id'=>57344, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Roi']);
        DB::table('villages')->insert(['id'=>57345, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Teke']);
        DB::table('villages')->insert(['id'=>57346, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Tolongondoa']);
        DB::table('villages')->insert(['id'=>57347, 'districts_id'=>4799, 'zipcode'=>'84173', 'name'=>'Tonggorisa']);
        //Kecamatan Belo Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4800, 'city_id'=>289, 'name'=>'Belo']);
        DB::table('villages')->insert(['id'=>57348, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Cenggu']);
        DB::table('villages')->insert(['id'=>57349, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Lido']);
        DB::table('villages')->insert(['id'=>57350, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Ncera']);
        DB::table('villages')->insert(['id'=>57351, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Ngali']);
        DB::table('villages')->insert(['id'=>57352, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Panda']);
        DB::table('villages')->insert(['id'=>57353, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Renda']);
        DB::table('villages')->insert(['id'=>57354, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Roka']);
        DB::table('villages')->insert(['id'=>57355, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Runggu']);
        DB::table('villages')->insert(['id'=>57356, 'districts_id'=>4800, 'zipcode'=>'84173', 'name'=>'Soki']);
        //Kecamatan Langgudu Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4801, 'city_id'=>289, 'name'=>'Langgudu']);
        DB::table('villages')->insert(['id'=>57357, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Doro O\o']);
        DB::table('villages')->insert(['id'=>57358, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Dumu']);
        DB::table('villages')->insert(['id'=>57359, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Kalodu']);
        DB::table('villages')->insert(['id'=>57360, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Kangga']);
        DB::table('villages')->insert(['id'=>57361, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Karampi']);
        DB::table('villages')->insert(['id'=>57362, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Karumbu']);
        DB::table('villages')->insert(['id'=>57363, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Kawuwu']);
        DB::table('villages')->insert(['id'=>57364, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Laju']);
        DB::table('villages')->insert(['id'=>57365, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Rompo']);
        DB::table('villages')->insert(['id'=>57366, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Rupe']);
        DB::table('villages')->insert(['id'=>57367, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Wadu Ruka']);
        DB::table('villages')->insert(['id'=>57368, 'districts_id'=>4801, 'zipcode'=>'84181', 'name'=>'Waworada']);
        //Kecamatan Lambitu Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4802, 'city_id'=>289, 'name'=>'Lambitu']);
        DB::table('villages')->insert(['id'=>57369, 'districts_id'=>4802, 'zipcode'=>'84181', 'name'=>'Kaboro (kabaro)']);
        DB::table('villages')->insert(['id'=>57370, 'districts_id'=>4802, 'zipcode'=>'84181', 'name'=>'Kaowa']);
        DB::table('villages')->insert(['id'=>57371, 'districts_id'=>4802, 'zipcode'=>'84181', 'name'=>'Kuta']);
        DB::table('villages')->insert(['id'=>57372, 'districts_id'=>4802, 'zipcode'=>'84181', 'name'=>'Sambori']);
        DB::table('villages')->insert(['id'=>57373, 'districts_id'=>4802, 'zipcode'=>'84181', 'name'=>'Teta']);
        //Kecamatan Wawo Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4803, 'city_id'=>289, 'name'=>'Wawo']);
        DB::table('villages')->insert(['id'=>57374, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Kambilo']);
        DB::table('villages')->insert(['id'=>57375, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Koboro']);
        DB::table('villages')->insert(['id'=>57376, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Kombo']);
        DB::table('villages')->insert(['id'=>57377, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Maria']);
        DB::table('villages')->insert(['id'=>57378, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Maria Utara']);
        DB::table('villages')->insert(['id'=>57379, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Ntori']);
        DB::table('villages')->insert(['id'=>57380, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Pesa']);
        DB::table('villages')->insert(['id'=>57381, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Raba']);
        DB::table('villages')->insert(['id'=>57382, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Riamau (rianmau)']);
        DB::table('villages')->insert(['id'=>57383, 'districts_id'=>4803, 'zipcode'=>'84181', 'name'=>'Tarlawi']);
        //Kecamatan Sape Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4804, 'city_id'=>289, 'name'=>'Sape']);
        DB::table('villages')->insert(['id'=>57384, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Bajopulau']);
        DB::table('villages')->insert(['id'=>57385, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Boke']);
        DB::table('villages')->insert(['id'=>57386, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Bugis']);
        DB::table('villages')->insert(['id'=>57387, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Buncu']);
        DB::table('villages')->insert(['id'=>57388, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Jia']);
        DB::table('villages')->insert(['id'=>57389, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Kowo']);
        DB::table('villages')->insert(['id'=>57390, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Lamere (lamera)']);
        DB::table('villages')->insert(['id'=>57391, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Nae']);
        DB::table('villages')->insert(['id'=>57392, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Naru']);
        DB::table('villages')->insert(['id'=>57393, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Naru Barat']);
        DB::table('villages')->insert(['id'=>57394, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Parangina']);
        DB::table('villages')->insert(['id'=>57395, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Poja']);
        DB::table('villages')->insert(['id'=>57396, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Raioi']);
        DB::table('villages')->insert(['id'=>57397, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Rasabou']);
        DB::table('villages')->insert(['id'=>57398, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Sangia']);
        DB::table('villages')->insert(['id'=>57399, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Sari']);
        DB::table('villages')->insert(['id'=>57400, 'districts_id'=>4804, 'zipcode'=>'84182', 'name'=>'Tanah Putih']);
        //Kecamatan Lambu Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4805, 'city_id'=>289, 'name'=>'Lambu']);
        DB::table('villages')->insert(['id'=>57401, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Hidirasa']);
        DB::table('villages')->insert(['id'=>57402, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Kaleo']);
        DB::table('villages')->insert(['id'=>57403, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Lambu']);
        DB::table('villages')->insert(['id'=>57404, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Lanta']);
        DB::table('villages')->insert(['id'=>57405, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Lauta Barat']);
        DB::table('villages')->insert(['id'=>57406, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Mangge']);
        DB::table('villages')->insert(['id'=>57407, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Melayu']);
        DB::table('villages')->insert(['id'=>57408, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Nggelu']);
        DB::table('villages')->insert(['id'=>57409, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Rato']);
        DB::table('villages')->insert(['id'=>57410, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Simpasai']);
        DB::table('villages')->insert(['id'=>57411, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Soro']);
        DB::table('villages')->insert(['id'=>57412, 'districts_id'=>4805, 'zipcode'=>'84182', 'name'=>'Sumi']);
        //Kecamatan Sanggar Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4806, 'city_id'=>289, 'name'=>'Sanggar']);
        DB::table('villages')->insert(['id'=>57413, 'districts_id'=>4806, 'zipcode'=>'84191', 'name'=>'Boro']);
        DB::table('villages')->insert(['id'=>57414, 'districts_id'=>4806, 'zipcode'=>'84191', 'name'=>'Kore']);
        DB::table('villages')->insert(['id'=>57415, 'districts_id'=>4806, 'zipcode'=>'84191', 'name'=>'Oi Saro']);
        DB::table('villages')->insert(['id'=>57416, 'districts_id'=>4806, 'zipcode'=>'84191', 'name'=>'Piong']);
        DB::table('villages')->insert(['id'=>57417, 'districts_id'=>4806, 'zipcode'=>'84191', 'name'=>'Sandue']);
        DB::table('villages')->insert(['id'=>57418, 'districts_id'=>4806, 'zipcode'=>'84191', 'name'=>'Taloko']);
        //Kecamatan Tambora Kota Bima Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4807, 'city_id'=>289, 'name'=>'Tambora']);
        DB::table('villages')->insert(['id'=>57419, 'districts_id'=>4807, 'zipcode'=>'84191', 'name'=>'Kawinda Nae']);
        DB::table('villages')->insert(['id'=>57420, 'districts_id'=>4807, 'zipcode'=>'84191', 'name'=>'Kawinda Toi']);
        DB::table('villages')->insert(['id'=>57421, 'districts_id'=>4807, 'zipcode'=>'84191', 'name'=>'Labuhan Kananga']);
        DB::table('villages')->insert(['id'=>57422, 'districts_id'=>4807, 'zipcode'=>'84191', 'name'=>'Oi Bura']);
        DB::table('villages')->insert(['id'=>57423, 'districts_id'=>4807, 'zipcode'=>'84191', 'name'=>'Oi Panihi']);

        //Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>290, 'province_id'=>22, 'type'=>'regencies', 'name'=>'Dompu']);
        //Kecamatan Dompu Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4808, 'city_id'=>290, 'name'=>'Dompu']);
        DB::table('villages')->insert(['id'=>57424, 'districts_id'=>4808, 'zipcode'=>'84211', 'name'=>'Bada']);
        DB::table('villages')->insert(['id'=>57425, 'districts_id'=>4808, 'zipcode'=>'84212', 'name'=>'Dorotangga']);
        DB::table('villages')->insert(['id'=>57426, 'districts_id'=>4808, 'zipcode'=>'84213', 'name'=>'Bali 1']);
        DB::table('villages')->insert(['id'=>57427, 'districts_id'=>4808, 'zipcode'=>'84214', 'name'=>'Potu']);
        DB::table('villages')->insert(['id'=>57428, 'districts_id'=>4808, 'zipcode'=>'84217', 'name'=>'Karijawa']);
        DB::table('villages')->insert(['id'=>57429, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Dorebara']);
        DB::table('villages')->insert(['id'=>57430, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Kandai Satu']);
        DB::table('villages')->insert(['id'=>57431, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Karamabura']);
        DB::table('villages')->insert(['id'=>57432, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Kareke']);
        DB::table('villages')->insert(['id'=>57433, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Katua']);
        DB::table('villages')->insert(['id'=>57434, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Mangge Nae']);
        DB::table('villages')->insert(['id'=>57435, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Mbawi']);
        DB::table('villages')->insert(['id'=>57436, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Menggeasi (mangge Asi)']);
        DB::table('villages')->insert(['id'=>57437, 'districts_id'=>4808, 'zipcode'=>'84219', 'name'=>'Sorisakolo']);
        //Kecamatan Woja Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4809, 'city_id'=>290, 'name'=>'Woja']);
        DB::table('villages')->insert(['id'=>57438, 'districts_id'=>4809, 'zipcode'=>'84216', 'name'=>'Simpasai']);
        DB::table('villages')->insert(['id'=>57439, 'districts_id'=>4809, 'zipcode'=>'84218', 'name'=>'Kandai Dua']);
        DB::table('villages')->insert(['id'=>57440, 'districts_id'=>4809, 'zipcode'=>'84219', 'name'=>'Montabaru']);
        DB::table('villages')->insert(['id'=>57441, 'districts_id'=>4809, 'zipcode'=>'84251', 'name'=>'Bara']);
        DB::table('villages')->insert(['id'=>57442, 'districts_id'=>4809, 'zipcode'=>'84251', 'name'=>'Madaprama']);
        DB::table('villages')->insert(['id'=>57443, 'districts_id'=>4809, 'zipcode'=>'84251', 'name'=>'Matua']);
        DB::table('villages')->insert(['id'=>57444, 'districts_id'=>4809, 'zipcode'=>'84251', 'name'=>'Mumbu']);
        DB::table('villages')->insert(['id'=>57445, 'districts_id'=>4809, 'zipcode'=>'84251', 'name'=>'Nowa']);
        DB::table('villages')->insert(['id'=>57446, 'districts_id'=>4809, 'zipcode'=>'84251', 'name'=>'Riwo']);
        DB::table('villages')->insert(['id'=>57447, 'districts_id'=>4809, 'zipcode'=>'84251', 'name'=>'Saneo']);
        DB::table('villages')->insert(['id'=>57448, 'districts_id'=>4809, 'zipcode'=>'84251', 'name'=>'Wawonduru']);
        //Kecamatan Kilo Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4810, 'city_id'=>290, 'name'=>'Kilo']);
        DB::table('villages')->insert(['id'=>57449, 'districts_id'=>4810, 'zipcode'=>'84252', 'name'=>'Kiwu']);
        DB::table('villages')->insert(['id'=>57450, 'districts_id'=>4810, 'zipcode'=>'84252', 'name'=>'Kramat 2 (keramat)']);
        DB::table('villages')->insert(['id'=>57451, 'districts_id'=>4810, 'zipcode'=>'84252', 'name'=>'Lasi']);
        DB::table('villages')->insert(['id'=>57452, 'districts_id'=>4810, 'zipcode'=>'84252', 'name'=>'Malaju']);
        DB::table('villages')->insert(['id'=>57453, 'districts_id'=>4810, 'zipcode'=>'84252', 'name'=>'Mbuju']);
        DB::table('villages')->insert(['id'=>57454, 'districts_id'=>4810, 'zipcode'=>'84252', 'name'=>'Taropo']);
        //Kecamatan Menggelewa (manggelewa) Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4811, 'city_id'=>290, 'name'=>'Menggelewa (manggelewa)']);
        DB::table('villages')->insert(['id'=>57455, 'districts_id'=>4811, 'zipcode'=>'84253', 'name'=>'Banggo']);
        DB::table('villages')->insert(['id'=>57456, 'districts_id'=>4811, 'zipcode'=>'84253', 'name'=>'Doromelo']);
        DB::table('villages')->insert(['id'=>57457, 'districts_id'=>4811, 'zipcode'=>'84253', 'name'=>'Kwangko']);
        DB::table('villages')->insert(['id'=>57458, 'districts_id'=>4811, 'zipcode'=>'84253', 'name'=>'Lanci Jaya']);
        DB::table('villages')->insert(['id'=>57459, 'districts_id'=>4811, 'zipcode'=>'84253', 'name'=>'Nangatumpu']);
        DB::table('villages')->insert(['id'=>57460, 'districts_id'=>4811, 'zipcode'=>'84253', 'name'=>'Nusa Jaya']);
        DB::table('villages')->insert(['id'=>57461, 'districts_id'=>4811, 'zipcode'=>'84253', 'name'=>'Soriutu']);
        DB::table('villages')->insert(['id'=>57462, 'districts_id'=>4811, 'zipcode'=>'84253', 'name'=>'Suka Damai']);
        //Kecamatan Pekat Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4812, 'city_id'=>290, 'name'=>'Pekat']);
        DB::table('villages')->insert(['id'=>57463, 'districts_id'=>4812, 'zipcode'=>'84261', 'name'=>'Beringin Jaya']);
        DB::table('villages')->insert(['id'=>57464, 'districts_id'=>4812, 'zipcode'=>'84261', 'name'=>'Kadindi']);
        DB::table('villages')->insert(['id'=>57465, 'districts_id'=>4812, 'zipcode'=>'84261', 'name'=>'Nangamiro']);
        DB::table('villages')->insert(['id'=>57466, 'districts_id'=>4812, 'zipcode'=>'84261', 'name'=>'Pekat']);
        DB::table('villages')->insert(['id'=>57467, 'districts_id'=>4812, 'zipcode'=>'84261', 'name'=>'Peti']);
        DB::table('villages')->insert(['id'=>57468, 'districts_id'=>4812, 'zipcode'=>'84261', 'name'=>'Sorinomo']);
        DB::table('villages')->insert(['id'=>57469, 'districts_id'=>4812, 'zipcode'=>'84261', 'name'=>'Tambora']);
        //Kecamatan Kempo Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4813, 'city_id'=>290, 'name'=>'Kempo']);
        DB::table('villages')->insert(['id'=>57470, 'districts_id'=>4813, 'zipcode'=>'84261', 'name'=>'Doro Kobo']);
        DB::table('villages')->insert(['id'=>57471, 'districts_id'=>4813, 'zipcode'=>'84261', 'name'=>'Kempo']);
        DB::table('villages')->insert(['id'=>57472, 'districts_id'=>4813, 'zipcode'=>'84261', 'name'=>'Konte']);
        DB::table('villages')->insert(['id'=>57473, 'districts_id'=>4813, 'zipcode'=>'84261', 'name'=>'Songgaja (songgajah)']);
        DB::table('villages')->insert(['id'=>57474, 'districts_id'=>4813, 'zipcode'=>'84261', 'name'=>'Soro']);
        DB::table('villages')->insert(['id'=>57475, 'districts_id'=>4813, 'zipcode'=>'84261', 'name'=>'Ta\a']);
        DB::table('villages')->insert(['id'=>57476, 'districts_id'=>4813, 'zipcode'=>'84261', 'name'=>'Tolo Kalo']);
        //Kecamatan Hu\u Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4814, 'city_id'=>290, 'name'=>'Hu\u']);
        DB::table('villages')->insert(['id'=>57477, 'districts_id'=>4814, 'zipcode'=>'84271', 'name'=>'Adu']);
        DB::table('villages')->insert(['id'=>57478, 'districts_id'=>4814, 'zipcode'=>'84271', 'name'=>'Cempi Jaya']);
        DB::table('villages')->insert(['id'=>57479, 'districts_id'=>4814, 'zipcode'=>'84271', 'name'=>'Daha']);
        DB::table('villages')->insert(['id'=>57480, 'districts_id'=>4814, 'zipcode'=>'84271', 'name'=>'Hu\u']);
        DB::table('villages')->insert(['id'=>57481, 'districts_id'=>4814, 'zipcode'=>'84271', 'name'=>'Rasabou']);
        //Kecamatan Pajo Kab. Dompu Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4815, 'city_id'=>290, 'name'=>'Pajo']);
        DB::table('villages')->insert(['id'=>57482, 'districts_id'=>4815, 'zipcode'=>'84272', 'name'=>'Jambu']);
        DB::table('villages')->insert(['id'=>57483, 'districts_id'=>4815, 'zipcode'=>'84272', 'name'=>'Lepadi']);
        DB::table('villages')->insert(['id'=>57484, 'districts_id'=>4815, 'zipcode'=>'84272', 'name'=>'Lune']);
        DB::table('villages')->insert(['id'=>57485, 'districts_id'=>4815, 'zipcode'=>'84272', 'name'=>'Ranggo']);
        DB::table('villages')->insert(['id'=>57486, 'districts_id'=>4815, 'zipcode'=>'84272', 'name'=>'Woko']);

        //Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>291, 'province_id'=>22, 'type'=>'regencies', 'name'=>'Sumbawa']);
        //Kecamatan Sumbawa Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4816, 'city_id'=>291, 'name'=>'Sumbawa']);
        DB::table('villages')->insert(['id'=>57487, 'districts_id'=>4816, 'zipcode'=>'84311', 'name'=>'Seketeng']);
        DB::table('villages')->insert(['id'=>57488, 'districts_id'=>4816, 'zipcode'=>'84312', 'name'=>'Lempeh']);
        DB::table('villages')->insert(['id'=>57489, 'districts_id'=>4816, 'zipcode'=>'84313', 'name'=>'Bugis']);
        DB::table('villages')->insert(['id'=>57490, 'districts_id'=>4816, 'zipcode'=>'84314', 'name'=>'Brang Bara']);
        DB::table('villages')->insert(['id'=>57491, 'districts_id'=>4816, 'zipcode'=>'84315', 'name'=>'Pekat']);
        DB::table('villages')->insert(['id'=>57492, 'districts_id'=>4816, 'zipcode'=>'84316', 'name'=>'Samapuin']);
        DB::table('villages')->insert(['id'=>57493, 'districts_id'=>4816, 'zipcode'=>'84317', 'name'=>'Uma Sima']);
        DB::table('villages')->insert(['id'=>57494, 'districts_id'=>4816, 'zipcode'=>'84318', 'name'=>'Brang Biji']);
        //Kecamatan Labuhan Badas Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4817, 'city_id'=>291, 'name'=>'Labuhan Badas']);
        DB::table('villages')->insert(['id'=>57495, 'districts_id'=>4817, 'zipcode'=>'84316', 'name'=>'Bajo Medang']);
        DB::table('villages')->insert(['id'=>57496, 'districts_id'=>4817, 'zipcode'=>'84316', 'name'=>'Bugis Medang']);
        DB::table('villages')->insert(['id'=>57497, 'districts_id'=>4817, 'zipcode'=>'84316', 'name'=>'Karang Dima']);
        DB::table('villages')->insert(['id'=>57498, 'districts_id'=>4817, 'zipcode'=>'84316', 'name'=>'Labuan Aji']);
        DB::table('villages')->insert(['id'=>57499, 'districts_id'=>4817, 'zipcode'=>'84316', 'name'=>'Labuan Sumbawa']);
        DB::table('villages')->insert(['id'=>57500, 'districts_id'=>4817, 'zipcode'=>'84316', 'name'=>'Labuhan Badas']);
        DB::table('villages')->insert(['id'=>57501, 'districts_id'=>4817, 'zipcode'=>'84316', 'name'=>'Sebotok']);
        //Kecamatan Unter Iwes (unterwiris) Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4818, 'city_id'=>291, 'name'=>'Unter Iwes (unterwiris)']);
        DB::table('villages')->insert(['id'=>57502, 'districts_id'=>4818, 'zipcode'=>'84316', 'name'=>'Boak']);
        DB::table('villages')->insert(['id'=>57503, 'districts_id'=>4818, 'zipcode'=>'84316', 'name'=>'Jorok']);
        DB::table('villages')->insert(['id'=>57504, 'districts_id'=>4818, 'zipcode'=>'84316', 'name'=>'Kerato']);
        DB::table('villages')->insert(['id'=>57505, 'districts_id'=>4818, 'zipcode'=>'84316', 'name'=>'Kerekeh']);
        DB::table('villages')->insert(['id'=>57506, 'districts_id'=>4818, 'zipcode'=>'84316', 'name'=>'Nijang']);
        DB::table('villages')->insert(['id'=>57507, 'districts_id'=>4818, 'zipcode'=>'84316', 'name'=>'Pelat']);
        DB::table('villages')->insert(['id'=>57508, 'districts_id'=>4818, 'zipcode'=>'84316', 'name'=>'Pungka']);
        DB::table('villages')->insert(['id'=>57509, 'districts_id'=>4818, 'zipcode'=>'84316', 'name'=>'Uma Beringin']);
        //Kecamatan Utan Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4819, 'city_id'=>291, 'name'=>'Utan']);
        DB::table('villages')->insert(['id'=>57510, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Bale Brang']);
        DB::table('villages')->insert(['id'=>57511, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Jorok']);
        DB::table('villages')->insert(['id'=>57512, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Labuan Bajo']);
        DB::table('villages')->insert(['id'=>57513, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Motong']);
        DB::table('villages')->insert(['id'=>57514, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Orong Bawa']);
        DB::table('villages')->insert(['id'=>57515, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Pukat']);
        DB::table('villages')->insert(['id'=>57516, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Sebedo (sabedo)']);
        DB::table('villages')->insert(['id'=>57517, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Stowe Brang']);
        DB::table('villages')->insert(['id'=>57518, 'districts_id'=>4819, 'zipcode'=>'84352', 'name'=>'Tengah']);
        //Kecamatan Rhee Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4820, 'city_id'=>291, 'name'=>'Rhee']);
        DB::table('villages')->insert(['id'=>57519, 'districts_id'=>4820, 'zipcode'=>'84352', 'name'=>'Luk']);
        DB::table('villages')->insert(['id'=>57520, 'districts_id'=>4820, 'zipcode'=>'84352', 'name'=>'Rhee']);
        DB::table('villages')->insert(['id'=>57521, 'districts_id'=>4820, 'zipcode'=>'84352', 'name'=>'Rhee Loka']);
        DB::table('villages')->insert(['id'=>57522, 'districts_id'=>4820, 'zipcode'=>'84352', 'name'=>'Sampe']);
        //Kecamatan Alas Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4821, 'city_id'=>291, 'name'=>'Alas']);
        DB::table('villages')->insert(['id'=>57523, 'districts_id'=>4821, 'zipcode'=>'84353', 'name'=>'Baru']);
        DB::table('villages')->insert(['id'=>57524, 'districts_id'=>4821, 'zipcode'=>'84353', 'name'=>'Dalam']);
        DB::table('villages')->insert(['id'=>57525, 'districts_id'=>4821, 'zipcode'=>'84353', 'name'=>'Juranalas']);
        DB::table('villages')->insert(['id'=>57526, 'districts_id'=>4821, 'zipcode'=>'84353', 'name'=>'Kalimango']);
        DB::table('villages')->insert(['id'=>57527, 'districts_id'=>4821, 'zipcode'=>'84353', 'name'=>'Labuhan Alas']);
        DB::table('villages')->insert(['id'=>57528, 'districts_id'=>4821, 'zipcode'=>'84353', 'name'=>'Luar']);
        DB::table('villages')->insert(['id'=>57529, 'districts_id'=>4821, 'zipcode'=>'84353', 'name'=>'Marenteh']);
        DB::table('villages')->insert(['id'=>57530, 'districts_id'=>4821, 'zipcode'=>'84353', 'name'=>'Pulau Bungin']);
        //Kecamatan Buer Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4822, 'city_id'=>291, 'name'=>'Buer']);
        DB::table('villages')->insert(['id'=>57531, 'districts_id'=>4822, 'zipcode'=>'84353', 'name'=>'Buin Baru']);
        DB::table('villages')->insert(['id'=>57532, 'districts_id'=>4822, 'zipcode'=>'84353', 'name'=>'Juru Mapin']);
        DB::table('villages')->insert(['id'=>57533, 'districts_id'=>4822, 'zipcode'=>'84353', 'name'=>'Kalabeso']);
        DB::table('villages')->insert(['id'=>57534, 'districts_id'=>4822, 'zipcode'=>'84353', 'name'=>'Labuhan Burung']);
        DB::table('villages')->insert(['id'=>57535, 'districts_id'=>4822, 'zipcode'=>'84353', 'name'=>'Pulau Kaung']);
        DB::table('villages')->insert(['id'=>57536, 'districts_id'=>4822, 'zipcode'=>'84353', 'name'=>'Tarusa']);
        //Kecamatan Alas Barat Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4823, 'city_id'=>291, 'name'=>'Alas Barat']);
        DB::table('villages')->insert(['id'=>57537, 'districts_id'=>4823, 'zipcode'=>'84353', 'name'=>'Gontar']);
        DB::table('villages')->insert(['id'=>57538, 'districts_id'=>4823, 'zipcode'=>'84353', 'name'=>'Gontar Baru']);
        DB::table('villages')->insert(['id'=>57539, 'districts_id'=>4823, 'zipcode'=>'84353', 'name'=>'Labuan Mapin']);
        DB::table('villages')->insert(['id'=>57540, 'districts_id'=>4823, 'zipcode'=>'84353', 'name'=>'Lekong']);
        DB::table('villages')->insert(['id'=>57541, 'districts_id'=>4823, 'zipcode'=>'84353', 'name'=>'Mapin Baru']);
        DB::table('villages')->insert(['id'=>57542, 'districts_id'=>4823, 'zipcode'=>'84353', 'name'=>'Mapin Kebak']);
        DB::table('villages')->insert(['id'=>57543, 'districts_id'=>4823, 'zipcode'=>'84353', 'name'=>'Mapin Rea']);
        DB::table('villages')->insert(['id'=>57544, 'districts_id'=>4823, 'zipcode'=>'84353', 'name'=>'Usar Mapin']);
        //Kecamatan Batulanteh Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4824, 'city_id'=>291, 'name'=>'Batulanteh']);
        DB::table('villages')->insert(['id'=>57545, 'districts_id'=>4824, 'zipcode'=>'84361', 'name'=>'Bao Desa']);
        DB::table('villages')->insert(['id'=>57546, 'districts_id'=>4824, 'zipcode'=>'84361', 'name'=>'Batudulang']);
        DB::table('villages')->insert(['id'=>57547, 'districts_id'=>4824, 'zipcode'=>'84361', 'name'=>'Baturotok']);
        DB::table('villages')->insert(['id'=>57548, 'districts_id'=>4824, 'zipcode'=>'84361', 'name'=>'Kelungkung']);
        DB::table('villages')->insert(['id'=>57549, 'districts_id'=>4824, 'zipcode'=>'84361', 'name'=>'Tangkampulit (tangkan Pulit)']);
        DB::table('villages')->insert(['id'=>57550, 'districts_id'=>4824, 'zipcode'=>'84361', 'name'=>'Tepal']);
        //Kecamatan Moyo Hulu Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4825, 'city_id'=>291, 'name'=>'Moyo Hulu']);
        DB::table('villages')->insert(['id'=>57551, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Batubulan']);
        DB::table('villages')->insert(['id'=>57552, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Batutering']);
        DB::table('villages')->insert(['id'=>57553, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Berang Rea']);
        DB::table('villages')->insert(['id'=>57554, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Leseng']);
        DB::table('villages')->insert(['id'=>57555, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Lito']);
        DB::table('villages')->insert(['id'=>57556, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Maman']);
        DB::table('villages')->insert(['id'=>57557, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Marga Karya']);
        DB::table('villages')->insert(['id'=>57558, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Mokong']);
        DB::table('villages')->insert(['id'=>57559, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Pernek']);
        DB::table('villages')->insert(['id'=>57560, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Sebasang']);
        DB::table('villages')->insert(['id'=>57561, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Semamung']);
        DB::table('villages')->insert(['id'=>57562, 'districts_id'=>4825, 'zipcode'=>'84371', 'name'=>'Sempe']);
        //Kecamatan Lantung Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4826, 'city_id'=>291, 'name'=>'Lantung']);
        DB::table('villages')->insert(['id'=>57563, 'districts_id'=>4826, 'zipcode'=>'84372', 'name'=>'Ai Mual']);
        DB::table('villages')->insert(['id'=>57564, 'districts_id'=>4826, 'zipcode'=>'84372', 'name'=>'Lantung']);
        DB::table('villages')->insert(['id'=>57565, 'districts_id'=>4826, 'zipcode'=>'84372', 'name'=>'Padesa']);
        DB::table('villages')->insert(['id'=>57566, 'districts_id'=>4826, 'zipcode'=>'84372', 'name'=>'Sepukur']);
        //Kecamatan Ropang Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4827, 'city_id'=>291, 'name'=>'Ropang']);
        DB::table('villages')->insert(['id'=>57567, 'districts_id'=>4827, 'zipcode'=>'84372', 'name'=>'Lawin']);
        DB::table('villages')->insert(['id'=>57568, 'districts_id'=>4827, 'zipcode'=>'84372', 'name'=>'Lebangkar']);
        DB::table('villages')->insert(['id'=>57569, 'districts_id'=>4827, 'zipcode'=>'84372', 'name'=>'Lebin']);
        DB::table('villages')->insert(['id'=>57570, 'districts_id'=>4827, 'zipcode'=>'84372', 'name'=>'Ranan']);
        DB::table('villages')->insert(['id'=>57571, 'districts_id'=>4827, 'zipcode'=>'84372', 'name'=>'Ropang']);
        //Kecamatan Lenangguar Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4828, 'city_id'=>291, 'name'=>'Lenangguar']);
        DB::table('villages')->insert(['id'=>57572, 'districts_id'=>4828, 'zipcode'=>'84372', 'name'=>'Ledang']);
        DB::table('villages')->insert(['id'=>57573, 'districts_id'=>4828, 'zipcode'=>'84372', 'name'=>'Lenangguar']);
        DB::table('villages')->insert(['id'=>57574, 'districts_id'=>4828, 'zipcode'=>'84372', 'name'=>'Tatebal']);
        DB::table('villages')->insert(['id'=>57575, 'districts_id'=>4828, 'zipcode'=>'84372', 'name'=>'Telaga']);
        //Kecamatan Lunyuk Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4829, 'city_id'=>291, 'name'=>'Lunyuk']);
        DB::table('villages')->insert(['id'=>57576, 'districts_id'=>4829, 'zipcode'=>'84373', 'name'=>'Emang Lestari']);
        DB::table('villages')->insert(['id'=>57577, 'districts_id'=>4829, 'zipcode'=>'84373', 'name'=>'Jamu']);
        DB::table('villages')->insert(['id'=>57578, 'districts_id'=>4829, 'zipcode'=>'84373', 'name'=>'Lunyuk Ode']);
        DB::table('villages')->insert(['id'=>57579, 'districts_id'=>4829, 'zipcode'=>'84373', 'name'=>'Lunyuk Rea']);
        DB::table('villages')->insert(['id'=>57580, 'districts_id'=>4829, 'zipcode'=>'84373', 'name'=>'Pada Suka']);
        DB::table('villages')->insert(['id'=>57581, 'districts_id'=>4829, 'zipcode'=>'84373', 'name'=>'Perung']);
        DB::table('villages')->insert(['id'=>57582, 'districts_id'=>4829, 'zipcode'=>'84373', 'name'=>'Suka Maju']);
        //Kecamatan Orong Telu Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4830, 'city_id'=>291, 'name'=>'Orong Telu']);
        DB::table('villages')->insert(['id'=>57583, 'districts_id'=>4830, 'zipcode'=>'84373', 'name'=>'Kelawis']);
        DB::table('villages')->insert(['id'=>57584, 'districts_id'=>4830, 'zipcode'=>'84373', 'name'=>'Mungkin']);
        DB::table('villages')->insert(['id'=>57585, 'districts_id'=>4830, 'zipcode'=>'84373', 'name'=>'Sebeok']);
        DB::table('villages')->insert(['id'=>57586, 'districts_id'=>4830, 'zipcode'=>'84373', 'name'=>'Senawang']);
        //Kecamatan Moyo Utara Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4831, 'city_id'=>291, 'name'=>'Moyo Utara']);
        DB::table('villages')->insert(['id'=>57587, 'districts_id'=>4831, 'zipcode'=>'84381', 'name'=>'Baru Tahan']);
        DB::table('villages')->insert(['id'=>57588, 'districts_id'=>4831, 'zipcode'=>'84381', 'name'=>'Kukin']);
        DB::table('villages')->insert(['id'=>57589, 'districts_id'=>4831, 'zipcode'=>'84381', 'name'=>'Penyaring']);
        DB::table('villages')->insert(['id'=>57590, 'districts_id'=>4831, 'zipcode'=>'84381', 'name'=>'Pungkit']);
        DB::table('villages')->insert(['id'=>57591, 'districts_id'=>4831, 'zipcode'=>'84381', 'name'=>'Sebewe']);
        DB::table('villages')->insert(['id'=>57592, 'districts_id'=>4831, 'zipcode'=>'84381', 'name'=>'Songkar']);
        //Kecamatan Moyo Hilir Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4832, 'city_id'=>291, 'name'=>'Moyo Hilir']);
        DB::table('villages')->insert(['id'=>57593, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Batu Bangka']);
        DB::table('villages')->insert(['id'=>57594, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Berare']);
        DB::table('villages')->insert(['id'=>57595, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Kakiang']);
        DB::table('villages')->insert(['id'=>57596, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Labuhan Ijuk']);
        DB::table('villages')->insert(['id'=>57597, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Moyo']);
        DB::table('villages')->insert(['id'=>57598, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Moyo Mekar']);
        DB::table('villages')->insert(['id'=>57599, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Ngeru']);
        DB::table('villages')->insert(['id'=>57600, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Olat Rawa']);
        DB::table('villages')->insert(['id'=>57601, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Poto']);
        DB::table('villages')->insert(['id'=>57602, 'districts_id'=>4832, 'zipcode'=>'84381', 'name'=>'Serading']);
        //Kecamatan Lopok Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4833, 'city_id'=>291, 'name'=>'Lopok']);
        DB::table('villages')->insert(['id'=>57603, 'districts_id'=>4833, 'zipcode'=>'84382', 'name'=>'Berora']);
        DB::table('villages')->insert(['id'=>57604, 'districts_id'=>4833, 'zipcode'=>'84382', 'name'=>'Langam']);
        DB::table('villages')->insert(['id'=>57605, 'districts_id'=>4833, 'zipcode'=>'84382', 'name'=>'Lopok']);
        DB::table('villages')->insert(['id'=>57606, 'districts_id'=>4833, 'zipcode'=>'84382', 'name'=>'Lopok Beru']);
        DB::table('villages')->insert(['id'=>57607, 'districts_id'=>4833, 'zipcode'=>'84382', 'name'=>'Mama']);
        DB::table('villages')->insert(['id'=>57608, 'districts_id'=>4833, 'zipcode'=>'84382', 'name'=>'Pungkit']);
        DB::table('villages')->insert(['id'=>57609, 'districts_id'=>4833, 'zipcode'=>'84382', 'name'=>'Tatede']);
        //Kecamatan Lape (lape Lopok) Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4834, 'city_id'=>291, 'name'=>'Lape (lape Lopok)']);
        DB::table('villages')->insert(['id'=>57610, 'districts_id'=>4834, 'zipcode'=>'84382', 'name'=>'Dete']);
        DB::table('villages')->insert(['id'=>57611, 'districts_id'=>4834, 'zipcode'=>'84382', 'name'=>'Hijrah']);
        DB::table('villages')->insert(['id'=>57612, 'districts_id'=>4834, 'zipcode'=>'84382', 'name'=>'Labuan Kuris']);
        DB::table('villages')->insert(['id'=>57613, 'districts_id'=>4834, 'zipcode'=>'84382', 'name'=>'Lape']);
        //Kecamatan Plampang Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4835, 'city_id'=>291, 'name'=>'Plampang']);
        DB::table('villages')->insert(['id'=>57614, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Brang Kolong']);
        DB::table('villages')->insert(['id'=>57615, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Muer']);
        DB::table('villages')->insert(['id'=>57616, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Plampang']);
        DB::table('villages')->insert(['id'=>57617, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Selante']);
        DB::table('villages')->insert(['id'=>57618, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Sepakat']);
        DB::table('villages')->insert(['id'=>57619, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Sepayung']);
        DB::table('villages')->insert(['id'=>57620, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Sp I Prode/perode']);
        DB::table('villages')->insert(['id'=>57621, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Sp Ii Prode/perode']);
        DB::table('villages')->insert(['id'=>57622, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Sp Iii Prode/perode']);
        DB::table('villages')->insert(['id'=>57623, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Teluk Santong']);
        DB::table('villages')->insert(['id'=>57624, 'districts_id'=>4835, 'zipcode'=>'84383', 'name'=>'Usar']);
        //Kecamatan Labangka Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4836, 'city_id'=>291, 'name'=>'Labangka']);
        DB::table('villages')->insert(['id'=>57625, 'districts_id'=>4836, 'zipcode'=>'84383', 'name'=>'Jaya Makmur']);
        DB::table('villages')->insert(['id'=>57626, 'districts_id'=>4836, 'zipcode'=>'84383', 'name'=>'Labangka']);
        DB::table('villages')->insert(['id'=>57627, 'districts_id'=>4836, 'zipcode'=>'84383', 'name'=>'Sekokat']);
        DB::table('villages')->insert(['id'=>57628, 'districts_id'=>4836, 'zipcode'=>'84383', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>57629, 'districts_id'=>4836, 'zipcode'=>'84383', 'name'=>'Suka Mulya']);
        //Kecamatan Maronge Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4837, 'city_id'=>291, 'name'=>'Maronge']);
        DB::table('villages')->insert(['id'=>57630, 'districts_id'=>4837, 'zipcode'=>'84383', 'name'=>'Labuhan Sangoro']);
        DB::table('villages')->insert(['id'=>57631, 'districts_id'=>4837, 'zipcode'=>'84383', 'name'=>'Maronge']);
        DB::table('villages')->insert(['id'=>57632, 'districts_id'=>4837, 'zipcode'=>'84383', 'name'=>'Pemasar']);
        DB::table('villages')->insert(['id'=>57633, 'districts_id'=>4837, 'zipcode'=>'84383', 'name'=>'Simu']);
        //Kecamatan Tarano Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4838, 'city_id'=>291, 'name'=>'Tarano']);
        DB::table('villages')->insert(['id'=>57634, 'districts_id'=>4838, 'zipcode'=>'84384', 'name'=>'Banda']);
        DB::table('villages')->insert(['id'=>57635, 'districts_id'=>4838, 'zipcode'=>'84384', 'name'=>'Bantulante']);
        DB::table('villages')->insert(['id'=>57636, 'districts_id'=>4838, 'zipcode'=>'84384', 'name'=>'Labuhan Aji']);
        DB::table('villages')->insert(['id'=>57637, 'districts_id'=>4838, 'zipcode'=>'84384', 'name'=>'Labuhan Bontong']);
        DB::table('villages')->insert(['id'=>57638, 'districts_id'=>4838, 'zipcode'=>'84384', 'name'=>'Labuhan Jambu']);
        DB::table('villages')->insert(['id'=>57639, 'districts_id'=>4838, 'zipcode'=>'84384', 'name'=>'Labuhan Pidang']);
        DB::table('villages')->insert(['id'=>57640, 'districts_id'=>4838, 'zipcode'=>'84384', 'name'=>'Mata']);
        DB::table('villages')->insert(['id'=>57641, 'districts_id'=>4838, 'zipcode'=>'84384', 'name'=>'Tolo Oi']);
        //Kecamatan Empang Kab. Sumbawa Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4839, 'city_id'=>291, 'name'=>'Empang']);
        DB::table('villages')->insert(['id'=>57642, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Boal']);
        DB::table('villages')->insert(['id'=>57643, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Bunga Eja']);
        DB::table('villages')->insert(['id'=>57644, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Empang Atas']);
        DB::table('villages')->insert(['id'=>57645, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Empang Bawah']);
        DB::table('villages')->insert(['id'=>57646, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Gapit']);
        DB::table('villages')->insert(['id'=>57647, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Jotang']);
        DB::table('villages')->insert(['id'=>57648, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Jotang Beru']);
        DB::table('villages')->insert(['id'=>57649, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Lamenta']);
        DB::table('villages')->insert(['id'=>57650, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Ongko']);
        DB::table('villages')->insert(['id'=>57651, 'districts_id'=>4839, 'zipcode'=>'84384', 'name'=>'Pamanto']);

        //Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('cities')->insert(['id'=>292, 'province_id'=>22, 'type'=>'regencies', 'name'=>'Sumbawa Barat']);
        //Kecamatan Sateluk (seteluk) Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4840, 'city_id'=>292, 'name'=>'Sateluk (seteluk)']);
        DB::table('villages')->insert(['id'=>57652, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Air Suning']);
        DB::table('villages')->insert(['id'=>57653, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Desaloka']);
        DB::table('villages')->insert(['id'=>57654, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Kelanir']);
        DB::table('villages')->insert(['id'=>57655, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Lamusung']);
        DB::table('villages')->insert(['id'=>57656, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Meraran']);
        DB::table('villages')->insert(['id'=>57657, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Rempe']);
        DB::table('villages')->insert(['id'=>57658, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Seran']);
        DB::table('villages')->insert(['id'=>57659, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Seteluk Atas']);
        DB::table('villages')->insert(['id'=>57660, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Seteluk Tengah']);
        DB::table('villages')->insert(['id'=>57661, 'districts_id'=>4840, 'zipcode'=>'84454', 'name'=>'Tapir']);
        //Kecamatan Poto Tano Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4841, 'city_id'=>292, 'name'=>'Poto Tano']);
        DB::table('villages')->insert(['id'=>57662, 'districts_id'=>4841, 'zipcode'=>'84454', 'name'=>'Kiantar']);
        DB::table('villages')->insert(['id'=>57663, 'districts_id'=>4841, 'zipcode'=>'84454', 'name'=>'Kokarlian']);
        DB::table('villages')->insert(['id'=>57664, 'districts_id'=>4841, 'zipcode'=>'84454', 'name'=>'Mantar']);
        DB::table('villages')->insert(['id'=>57665, 'districts_id'=>4841, 'zipcode'=>'84454', 'name'=>'Poto Tano']);
        DB::table('villages')->insert(['id'=>57666, 'districts_id'=>4841, 'zipcode'=>'84454', 'name'=>'Senayan']);
        DB::table('villages')->insert(['id'=>57667, 'districts_id'=>4841, 'zipcode'=>'84454', 'name'=>'Tambak Sari']);
        DB::table('villages')->insert(['id'=>57668, 'districts_id'=>4841, 'zipcode'=>'84454', 'name'=>'Tebo']);
        DB::table('villages')->insert(['id'=>57669, 'districts_id'=>4841, 'zipcode'=>'84454', 'name'=>'Tuananga']);
        //Kecamatan Taliwang Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4842, 'city_id'=>292, 'name'=>'Taliwang']);
        DB::table('villages')->insert(['id'=>57670, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Arab Kenangan']);
        DB::table('villages')->insert(['id'=>57671, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Banjar']);
        DB::table('villages')->insert(['id'=>57672, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Batu Putih']);
        DB::table('villages')->insert(['id'=>57673, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Bugis']);
        DB::table('villages')->insert(['id'=>57674, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Dalam']);
        DB::table('villages')->insert(['id'=>57675, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Kertasari (labuan Kertasari)']);
        DB::table('villages')->insert(['id'=>57676, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Kuang']);
        DB::table('villages')->insert(['id'=>57677, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Labuan Lalar']);
        DB::table('villages')->insert(['id'=>57678, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Lalang Liang (lalar Liang)']);
        DB::table('villages')->insert(['id'=>57679, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Menala']);
        DB::table('villages')->insert(['id'=>57680, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Sampir']);
        DB::table('villages')->insert(['id'=>57681, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Seloto']);
        DB::table('villages')->insert(['id'=>57682, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Sermong']);
        DB::table('villages')->insert(['id'=>57683, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Tamekan']);
        DB::table('villages')->insert(['id'=>57684, 'districts_id'=>4842, 'zipcode'=>'84455', 'name'=>'Telaga Bertong']);
        //Kecamatan Brang Ene Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4843, 'city_id'=>292, 'name'=>'Brang Ene']);
        DB::table('villages')->insert(['id'=>57685, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Kalimantong']);
        DB::table('villages')->insert(['id'=>57686, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Lampok']);
        DB::table('villages')->insert(['id'=>57687, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Lamuntet']);
        DB::table('villages')->insert(['id'=>57688, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Manemeng']);
        DB::table('villages')->insert(['id'=>57689, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Mataiyang']);
        DB::table('villages')->insert(['id'=>57690, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Moteng']);
        DB::table('villages')->insert(['id'=>57691, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Mujahiddin']);
        DB::table('villages')->insert(['id'=>57692, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Mura']);
        DB::table('villages')->insert(['id'=>57693, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Rarak Ronges']);
        DB::table('villages')->insert(['id'=>57694, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Seminar Salit']);
        DB::table('villages')->insert(['id'=>57695, 'districts_id'=>4843, 'zipcode'=>'84455', 'name'=>'Tepas Sepakat']);
        //Kecamatan Jereweh Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4844, 'city_id'=>292, 'name'=>'Jereweh']);
        DB::table('villages')->insert(['id'=>57696, 'districts_id'=>4844, 'zipcode'=>'84456', 'name'=>'Belo']);
        DB::table('villages')->insert(['id'=>57697, 'districts_id'=>4844, 'zipcode'=>'84456', 'name'=>'Beru']);
        DB::table('villages')->insert(['id'=>57698, 'districts_id'=>4844, 'zipcode'=>'84456', 'name'=>'Dasan Anyar']);
        DB::table('villages')->insert(['id'=>57699, 'districts_id'=>4844, 'zipcode'=>'84456', 'name'=>'Goa']);
        //Kecamatan Maluk Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4845, 'city_id'=>292, 'name'=>'Maluk']);
        DB::table('villages')->insert(['id'=>57700, 'districts_id'=>4845, 'zipcode'=>'84456', 'name'=>'Benete']);
        DB::table('villages')->insert(['id'=>57701, 'districts_id'=>4845, 'zipcode'=>'84456', 'name'=>'Bukit Damai']);
        DB::table('villages')->insert(['id'=>57702, 'districts_id'=>4845, 'zipcode'=>'84456', 'name'=>'Maluk']);
        DB::table('villages')->insert(['id'=>57703, 'districts_id'=>4845, 'zipcode'=>'84456', 'name'=>'Mantun']);
        DB::table('villages')->insert(['id'=>57704, 'districts_id'=>4845, 'zipcode'=>'84456', 'name'=>'Pasir Putih']);
        //Kecamatan Sekongkang Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4846, 'city_id'=>292, 'name'=>'Sekongkang']);
        DB::table('villages')->insert(['id'=>57705, 'districts_id'=>4846, 'zipcode'=>'84457', 'name'=>'Ai Kangkung']);
        DB::table('villages')->insert(['id'=>57706, 'districts_id'=>4846, 'zipcode'=>'84457', 'name'=>'Kemuning']);
        DB::table('villages')->insert(['id'=>57707, 'districts_id'=>4846, 'zipcode'=>'84457', 'name'=>'Sekongkang Atas']);
        DB::table('villages')->insert(['id'=>57708, 'districts_id'=>4846, 'zipcode'=>'84457', 'name'=>'Sekongkang Bawah']);
        DB::table('villages')->insert(['id'=>57709, 'districts_id'=>4846, 'zipcode'=>'84457', 'name'=>'Talonang']);
        DB::table('villages')->insert(['id'=>57710, 'districts_id'=>4846, 'zipcode'=>'84457', 'name'=>'Tatar']);
        DB::table('villages')->insert(['id'=>57711, 'districts_id'=>4846, 'zipcode'=>'84457', 'name'=>'Tongo']);
        //Kecamatan Brang Rea Kab. Sumbawa Barat Provinsi Nusa Tenggara Barat 
        DB::table('districts')->insert(['id'=>4847, 'city_id'=>292, 'name'=>'Brang Rea']);
        DB::table('villages')->insert(['id'=>57712, 'districts_id'=>4847, 'zipcode'=>'84458', 'name'=>'Bangkat Monte']);
        DB::table('villages')->insert(['id'=>57713, 'districts_id'=>4847, 'zipcode'=>'84458', 'name'=>'Desa Beru']);
        DB::table('villages')->insert(['id'=>57714, 'districts_id'=>4847, 'zipcode'=>'84458', 'name'=>'Sapugara Bree']);
        DB::table('villages')->insert(['id'=>57715, 'districts_id'=>4847, 'zipcode'=>'84458', 'name'=>'Tepas']);
    }
}
