<?php

use Illuminate\Database\Seeder;

class Maluku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>19, 'name'=>'Maluku']);

        //Kota Ambon Provinsi Maluku
        DB::table('cities')->insert(['id'=>240, 'province_id'=>19, 'type'=>'city', 'name'=>'Ambon']);
        //Kecamatan Nusaniwe (nusanive) Kota Ambon Provinsi Maluku
        DB::table('districts')->insert(['id'=>4190, 'city_id'=>240, 'name'=>'Nusaniwe (nusanive)']);
        DB::table('villages')->insert(['id'=>47643, 'districts_id'=>4190, 'zipcode'=>'97111', 'name'=>'Silale']);
        DB::table('villages')->insert(['id'=>47644, 'districts_id'=>4190, 'zipcode'=>'97112', 'name'=>'Waihaong']);
        DB::table('villages')->insert(['id'=>47645, 'districts_id'=>4190, 'zipcode'=>'97113', 'name'=>'Urimessing (urimesing) Desa']);
        DB::table('villages')->insert(['id'=>47646, 'districts_id'=>4190, 'zipcode'=>'97113', 'name'=>'Urimessing (urimesing) Kelurahan']);
        DB::table('villages')->insert(['id'=>47647, 'districts_id'=>4190, 'zipcode'=>'97114', 'name'=>'Mangga Dua']);
        DB::table('villages')->insert(['id'=>47648, 'districts_id'=>4190, 'zipcode'=>'97115', 'name'=>'Wainitu (wainatu)']);
        DB::table('villages')->insert(['id'=>47649, 'districts_id'=>4190, 'zipcode'=>'97116', 'name'=>'Kudamati']);
        DB::table('villages')->insert(['id'=>47650, 'districts_id'=>4190, 'zipcode'=>'97117', 'name'=>'Amahusu']);
        DB::table('villages')->insert(['id'=>47651, 'districts_id'=>4190, 'zipcode'=>'97117', 'name'=>'Benteng']);
        DB::table('villages')->insert(['id'=>47652, 'districts_id'=>4190, 'zipcode'=>'97117', 'name'=>'Nusaniwe']);
        DB::table('villages')->insert(['id'=>47653, 'districts_id'=>4190, 'zipcode'=>'97117', 'name'=>'Nusaniwe I']);
        DB::table('villages')->insert(['id'=>47654, 'districts_id'=>4190, 'zipcode'=>'97118', 'name'=>'Latuhalat']);
        DB::table('villages')->insert(['id'=>47655, 'districts_id'=>4190, 'zipcode'=>'97118', 'name'=>'Seilale']);
        //Kecamatan Sirimau Kota Ambon Provinsi Maluku
        DB::table('districts')->insert(['id'=>4191, 'city_id'=>240, 'name'=>'Sirimau']);
        DB::table('villages')->insert(['id'=>47656, 'districts_id'=>4191, 'zipcode'=>'97121', 'name'=>'Karang Panjang']);
        DB::table('villages')->insert(['id'=>47657, 'districts_id'=>4191, 'zipcode'=>'97122', 'name'=>'Amantelu']);
        DB::table('villages')->insert(['id'=>47658, 'districts_id'=>4191, 'zipcode'=>'97123', 'name'=>'Rijali']);
        DB::table('villages')->insert(['id'=>47659, 'districts_id'=>4191, 'zipcode'=>'97124', 'name'=>'Uritetu']);
        DB::table('villages')->insert(['id'=>47660, 'districts_id'=>4191, 'zipcode'=>'97125', 'name'=>'Batu Meja']);
        DB::table('villages')->insert(['id'=>47661, 'districts_id'=>4191, 'zipcode'=>'97126', 'name'=>'Honipopu']);
        DB::table('villages')->insert(['id'=>47662, 'districts_id'=>4191, 'zipcode'=>'97127', 'name'=>'Ahusen']);
        DB::table('villages')->insert(['id'=>47663, 'districts_id'=>4191, 'zipcode'=>'97127', 'name'=>'Batu Gaja (batugajah)']);
        DB::table('villages')->insert(['id'=>47664, 'districts_id'=>4191, 'zipcode'=>'97128', 'name'=>'Batu Merah']);
        DB::table('villages')->insert(['id'=>47665, 'districts_id'=>4191, 'zipcode'=>'97128', 'name'=>'Galala']);
        DB::table('villages')->insert(['id'=>47666, 'districts_id'=>4191, 'zipcode'=>'97128', 'name'=>'Hative Kecil']);
        DB::table('villages')->insert(['id'=>47667, 'districts_id'=>4191, 'zipcode'=>'97128', 'name'=>'Pandan Kasturi']);
        DB::table('villages')->insert(['id'=>47668, 'districts_id'=>4191, 'zipcode'=>'97129', 'name'=>'Soya']);
        DB::table('villages')->insert(['id'=>47669, 'districts_id'=>4191, 'zipcode'=>'97129', 'name'=>'Waihoka']);
        //Kecamatan Leitimur Selatan Kota Ambon Provinsi Maluku
        DB::table('districts')->insert(['id'=>4192, 'city_id'=>240, 'name'=>'Leitimur Selatan']);
        DB::table('villages')->insert(['id'=>47670, 'districts_id'=>4192, 'zipcode'=>'97129', 'name'=>'Ema']);
        DB::table('villages')->insert(['id'=>47671, 'districts_id'=>4192, 'zipcode'=>'97129', 'name'=>'Hatalai']);
        DB::table('villages')->insert(['id'=>47672, 'districts_id'=>4192, 'zipcode'=>'97129', 'name'=>'Hukurila']);
        DB::table('villages')->insert(['id'=>47673, 'districts_id'=>4192, 'zipcode'=>'97129', 'name'=>'Kilang']);
        DB::table('villages')->insert(['id'=>47674, 'districts_id'=>4192, 'zipcode'=>'97129', 'name'=>'Naku']);
        DB::table('villages')->insert(['id'=>47675, 'districts_id'=>4192, 'zipcode'=>'97237', 'name'=>'Hutumuri']);
        DB::table('villages')->insert(['id'=>47676, 'districts_id'=>4192, 'zipcode'=>'97237', 'name'=>'Leahari']);
        DB::table('villages')->insert(['id'=>47677, 'districts_id'=>4192, 'zipcode'=>'97237', 'name'=>'Rutong']);
        //Kecamatan Baguala Kota Ambon Provinsi Maluku
        DB::table('districts')->insert(['id'=>4193, 'city_id'=>240, 'name'=>'Baguala']);
        DB::table('villages')->insert(['id'=>47678, 'districts_id'=>4193, 'zipcode'=>'97231', 'name'=>'Halong']);
        DB::table('villages')->insert(['id'=>47679, 'districts_id'=>4193, 'zipcode'=>'97231', 'name'=>'Lateri']);
        DB::table('villages')->insert(['id'=>47680, 'districts_id'=>4193, 'zipcode'=>'97231', 'name'=>'Latta']);
        DB::table('villages')->insert(['id'=>47681, 'districts_id'=>4193, 'zipcode'=>'97232', 'name'=>'Nania']);
        DB::table('villages')->insert(['id'=>47682, 'districts_id'=>4193, 'zipcode'=>'97232', 'name'=>'Negeri Lama']);
        DB::table('villages')->insert(['id'=>47683, 'districts_id'=>4193, 'zipcode'=>'97232', 'name'=>'Passo']);
        DB::table('villages')->insert(['id'=>47684, 'districts_id'=>4193, 'zipcode'=>'97233', 'name'=>'Waiheru']);
        //Kecamatan Teluk Ambon Kota Ambon Provinsi Maluku
        DB::table('districts')->insert(['id'=>4194, 'city_id'=>240, 'name'=>'Teluk Ambon']);
        DB::table('villages')->insert(['id'=>47685, 'districts_id'=>4194, 'zipcode'=>'97233', 'name'=>'Hunuth (durian Patah)']);
        DB::table('villages')->insert(['id'=>47686, 'districts_id'=>4194, 'zipcode'=>'97233', 'name'=>'Poka']);
        DB::table('villages')->insert(['id'=>47687, 'districts_id'=>4194, 'zipcode'=>'97234', 'name'=>'Hative Besar']);
        DB::table('villages')->insert(['id'=>47688, 'districts_id'=>4194, 'zipcode'=>'97234', 'name'=>'Rumah Tiga']);
        DB::table('villages')->insert(['id'=>47689, 'districts_id'=>4194, 'zipcode'=>'97234', 'name'=>'Wayame']);
        DB::table('villages')->insert(['id'=>47690, 'districts_id'=>4194, 'zipcode'=>'97235', 'name'=>'Tawiri']);
        DB::table('villages')->insert(['id'=>47691, 'districts_id'=>4194, 'zipcode'=>'97236', 'name'=>'Laha']);
        DB::table('villages')->insert(['id'=>47692, 'districts_id'=>4194, 'zipcode'=>'97237', 'name'=>'Tihu']);

        //Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('cities')->insert(['id'=>241, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Maluku Barat Daya']);
        //Kecamatan Damer Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4195, 'city_id'=>241, 'name'=>'Damer']);
        DB::table('villages')->insert(['id'=>47693, 'districts_id'=>4195, 'zipcode'=>'97128', 'name'=>'Batumerah']);
        DB::table('villages')->insert(['id'=>47694, 'districts_id'=>4195, 'zipcode'=>'97652', 'name'=>'Bebar Timur']);
        DB::table('villages')->insert(['id'=>47695, 'districts_id'=>4195, 'zipcode'=>'97652', 'name'=>'Ilih']);
        DB::table('villages')->insert(['id'=>47696, 'districts_id'=>4195, 'zipcode'=>'97652', 'name'=>'Kehli']);
        DB::table('villages')->insert(['id'=>47697, 'districts_id'=>4195, 'zipcode'=>'97652', 'name'=>'Kuay Melu']);
        DB::table('villages')->insert(['id'=>47698, 'districts_id'=>4195, 'zipcode'=>'97652', 'name'=>'Kumur']);
        DB::table('villages')->insert(['id'=>47699, 'districts_id'=>4195, 'zipcode'=>'97652', 'name'=>'Wulur']);
        //Kecamatan Pulau Wetang Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4196, 'city_id'=>241, 'name'=>'Pulau Wetang']);
        DB::table('villages')->insert(['id'=>47700, 'districts_id'=>4196, 'zipcode'=>'97452', 'name'=>'Herley (herley Hoka)']);
        DB::table('villages')->insert(['id'=>47701, 'districts_id'=>4196, 'zipcode'=>'97452', 'name'=>'Nusiata']);
        DB::table('villages')->insert(['id'=>47702, 'districts_id'=>4196, 'zipcode'=>'97452', 'name'=>'Pota Besar']);
        DB::table('villages')->insert(['id'=>47703, 'districts_id'=>4196, 'zipcode'=>'97452', 'name'=>'Pota Kecil']);
        DB::table('villages')->insert(['id'=>47704, 'districts_id'=>4196, 'zipcode'=>'97452', 'name'=>'Rumalewang Besar (rumahlewang Besar)']);
        DB::table('villages')->insert(['id'=>47705, 'districts_id'=>4196, 'zipcode'=>'97452', 'name'=>'Rumalewang Kecil (rumahlewang Kecil)']);
        DB::table('villages')->insert(['id'=>47706, 'districts_id'=>4196, 'zipcode'=>'97452', 'name'=>'Upuhupun (upuhupu)']);
        DB::table('villages')->insert(['id'=>47707, 'districts_id'=>4196, 'zipcode'=>'97452', 'name'=>'Wasarili']);
        //Kecamatan Pulau Pulau Babar Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4197, 'city_id'=>241, 'name'=>'Pulau Pulau Babar']);
        DB::table('villages')->insert(['id'=>47708, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Hertuti']);
        DB::table('villages')->insert(['id'=>47709, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Imroing']);
        DB::table('villages')->insert(['id'=>47710, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Letsiara']);
        DB::table('villages')->insert(['id'=>47711, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Lewah']);
        DB::table('villages')->insert(['id'=>47712, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Sinairusi']);
        DB::table('villages')->insert(['id'=>47713, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Tela']);
        DB::table('villages')->insert(['id'=>47714, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Tepa']);
        DB::table('villages')->insert(['id'=>47715, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Wanuwui (manuwui)']);
        DB::table('villages')->insert(['id'=>47716, 'districts_id'=>4197, 'zipcode'=>'97452', 'name'=>'Yaltubung']);
        //Kecamatan Pulau Pulau Terselatan Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4198, 'city_id'=>241, 'name'=>'Pulau Pulau Terselatan']);
        DB::table('villages')->insert(['id'=>47717, 'districts_id'=>4198, 'zipcode'=>'97454', 'name'=>'Abusur']);
        DB::table('villages')->insert(['id'=>47718, 'districts_id'=>4198, 'zipcode'=>'97454', 'name'=>'Kota Lama']);
        DB::table('villages')->insert(['id'=>47719, 'districts_id'=>4198, 'zipcode'=>'97454', 'name'=>'Lekloor']);
        DB::table('villages')->insert(['id'=>47720, 'districts_id'=>4198, 'zipcode'=>'97454', 'name'=>'Oirata Barat']);
        DB::table('villages')->insert(['id'=>47721, 'districts_id'=>4198, 'zipcode'=>'97454', 'name'=>'Oirata Timur']);
        DB::table('villages')->insert(['id'=>47722, 'districts_id'=>4198, 'zipcode'=>'97454', 'name'=>'Wonreli']);
        //Kecamatan Wetar Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4199, 'city_id'=>241, 'name'=>'Wetar']);
        DB::table('villages')->insert(['id'=>47723, 'districts_id'=>4199, 'zipcode'=>'97454', 'name'=>'Amau']);
        DB::table('villages')->insert(['id'=>47724, 'districts_id'=>4199, 'zipcode'=>'97454', 'name'=>'Hiay']);
        DB::table('villages')->insert(['id'=>47725, 'districts_id'=>4199, 'zipcode'=>'97454', 'name'=>'Ilputih']);
        DB::table('villages')->insert(['id'=>47726, 'districts_id'=>4199, 'zipcode'=>'97454', 'name'=>'Ilwaki']);
        DB::table('villages')->insert(['id'=>47727, 'districts_id'=>4199, 'zipcode'=>'97454', 'name'=>'Mahuan']);
        DB::table('villages')->insert(['id'=>47728, 'districts_id'=>4199, 'zipcode'=>'97454', 'name'=>'Masapun']);
        //Kecamatan Wetar Timur Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4200, 'city_id'=>241, 'name'=>'Wetar Timur']);
        DB::table('villages')->insert(['id'=>47729, 'districts_id'=>4200, 'zipcode'=>'97454', 'name'=>'Arwala']);
        DB::table('villages')->insert(['id'=>47730, 'districts_id'=>4200, 'zipcode'=>'97454', 'name'=>'Ilpokil']);
        DB::table('villages')->insert(['id'=>47731, 'districts_id'=>4200, 'zipcode'=>'97454', 'name'=>'Ilway']);
        DB::table('villages')->insert(['id'=>47732, 'districts_id'=>4200, 'zipcode'=>'97454', 'name'=>'Kahilin']);
        DB::table('villages')->insert(['id'=>47733, 'districts_id'=>4200, 'zipcode'=>'97454', 'name'=>'Moning']);
        DB::table('villages')->insert(['id'=>47734, 'districts_id'=>4200, 'zipcode'=>'97454', 'name'=>'Tomliapat']);
        //Kecamatan Pulau Letti (leti Moa Lakor) Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4201, 'city_id'=>241, 'name'=>'Pulau Letti (leti Moa Lakor)']);
        DB::table('villages')->insert(['id'=>47735, 'districts_id'=>4201, 'zipcode'=>'97454', 'name'=>'Batumiau']);
        DB::table('villages')->insert(['id'=>47736, 'districts_id'=>4201, 'zipcode'=>'97454', 'name'=>'Laitutun']);
        DB::table('villages')->insert(['id'=>47737, 'districts_id'=>4201, 'zipcode'=>'97454', 'name'=>'Luhulely (luhuleli)']);
        DB::table('villages')->insert(['id'=>47738, 'districts_id'=>4201, 'zipcode'=>'97454', 'name'=>'Nuwewang']);
        DB::table('villages')->insert(['id'=>47739, 'districts_id'=>4201, 'zipcode'=>'97454', 'name'=>'Tomra']);
        DB::table('villages')->insert(['id'=>47740, 'districts_id'=>4201, 'zipcode'=>'97454', 'name'=>'Tutukey']);
        DB::table('villages')->insert(['id'=>47741, 'districts_id'=>4201, 'zipcode'=>'97454', 'name'=>'Tutuwaru']);
        //Kecamatan Wetar Utara Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4202, 'city_id'=>241, 'name'=>'Wetar Utara']);
        DB::table('villages')->insert(['id'=>47742, 'districts_id'=>4202, 'zipcode'=>'97454', 'name'=>'Elsulith']);
        DB::table('villages')->insert(['id'=>47743, 'districts_id'=>4202, 'zipcode'=>'97454', 'name'=>'Eray']);
        DB::table('villages')->insert(['id'=>47744, 'districts_id'=>4202, 'zipcode'=>'97454', 'name'=>'Lurang']);
        DB::table('villages')->insert(['id'=>47745, 'districts_id'=>4202, 'zipcode'=>'97454', 'name'=>'Nabar']);
        DB::table('villages')->insert(['id'=>47746, 'districts_id'=>4202, 'zipcode'=>'97454', 'name'=>'Naumatang']);
        DB::table('villages')->insert(['id'=>47747, 'districts_id'=>4202, 'zipcode'=>'97454', 'name'=>'Uhak']);
        //Kecamatan Kepulauan Romang Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4203, 'city_id'=>241, 'name'=>'Kepulauan Romang']);
        DB::table('villages')->insert(['id'=>47748, 'districts_id'=>4203, 'zipcode'=>'97454', 'name'=>'Hila']);
        DB::table('villages')->insert(['id'=>47749, 'districts_id'=>4203, 'zipcode'=>'97454', 'name'=>'Jerusu']);
        DB::table('villages')->insert(['id'=>47750, 'districts_id'=>4203, 'zipcode'=>'97454', 'name'=>'Solath']);
        //Kecamatan Wetar Barat Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4204, 'city_id'=>241, 'name'=>'Wetar Barat']);
        DB::table('villages')->insert(['id'=>47751, 'districts_id'=>4204, 'zipcode'=>'97454', 'name'=>'Ilmamau']);
        DB::table('villages')->insert(['id'=>47752, 'districts_id'=>4204, 'zipcode'=>'97454', 'name'=>'Karbubu']);
        DB::table('villages')->insert(['id'=>47753, 'districts_id'=>4204, 'zipcode'=>'97454', 'name'=>'Klishatu']);
        DB::table('villages')->insert(['id'=>47754, 'districts_id'=>4204, 'zipcode'=>'97454', 'name'=>'Telemar']);
        DB::table('villages')->insert(['id'=>47755, 'districts_id'=>4204, 'zipcode'=>'97454', 'name'=>'Ustutun']);
        //Kecamatan Moa Lakor Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4205, 'city_id'=>241, 'name'=>'Moa Lakor']);
        DB::table('villages')->insert(['id'=>47756, 'districts_id'=>4205, 'zipcode'=>'97454', 'name'=>'Kaiwatu']);
        DB::table('villages')->insert(['id'=>47757, 'districts_id'=>4205, 'zipcode'=>'97454', 'name'=>'Klis']);
        DB::table('villages')->insert(['id'=>47758, 'districts_id'=>4205, 'zipcode'=>'97454', 'name'=>'Moain']);
        DB::table('villages')->insert(['id'=>47759, 'districts_id'=>4205, 'zipcode'=>'97454', 'name'=>'Patti']);
        DB::table('villages')->insert(['id'=>47760, 'districts_id'=>4205, 'zipcode'=>'97454', 'name'=>'Tounwawan']);
        DB::table('villages')->insert(['id'=>47761, 'districts_id'=>4205, 'zipcode'=>'97454', 'name'=>'Wakarleli']);
        DB::table('villages')->insert(['id'=>47762, 'districts_id'=>4205, 'zipcode'=>'97454', 'name'=>'Werwaru']);
        //Kecamatan Pulau Lakor Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4206, 'city_id'=>241, 'name'=>'Pulau Lakor']);
        DB::table('villages')->insert(['id'=>47763, 'districts_id'=>4206, 'zipcode'=>'97454', 'name'=>'Kety (ketty)']);
        DB::table('villages')->insert(['id'=>47764, 'districts_id'=>4206, 'zipcode'=>'97454', 'name'=>'Letoda']);
        DB::table('villages')->insert(['id'=>47765, 'districts_id'=>4206, 'zipcode'=>'97454', 'name'=>'Lolotwara (lolotuara)']);
        DB::table('villages')->insert(['id'=>47766, 'districts_id'=>4206, 'zipcode'=>'97454', 'name'=>'Sera']);
        DB::table('villages')->insert(['id'=>47767, 'districts_id'=>4206, 'zipcode'=>'97454', 'name'=>'Yamluli']);
        //Kecamatan Kisar Utara Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4207, 'city_id'=>241, 'name'=>'Kisar Utara']);
        DB::table('villages')->insert(['id'=>47768, 'districts_id'=>4207, 'zipcode'=>'97454', 'name'=>'Lebelau']);
        DB::table('villages')->insert(['id'=>47769, 'districts_id'=>4207, 'zipcode'=>'97454', 'name'=>'Nomaha']);
        DB::table('villages')->insert(['id'=>47770, 'districts_id'=>4207, 'zipcode'=>'97454', 'name'=>'Purpura (pur-pura)']);
        //Kecamatan Pulau-pulau Babar Timur Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4208, 'city_id'=>241, 'name'=>'Pulau-pulau Babar Timur']);
        DB::table('villages')->insert(['id'=>47771, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Ahanari']);
        DB::table('villages')->insert(['id'=>47772, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Analutur']);
        DB::table('villages')->insert(['id'=>47773, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Emplawas (empalwas)']);
        DB::table('villages')->insert(['id'=>47774, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Kokwari']);
        DB::table('villages')->insert(['id'=>47775, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Kroing']);
        DB::table('villages')->insert(['id'=>47776, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Letwurung']);
        DB::table('villages')->insert(['id'=>47777, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Manuweri (manuari)']);
        DB::table('villages')->insert(['id'=>47778, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Nakarhamto']);
        DB::table('villages')->insert(['id'=>47779, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Tutuwawang']);
        DB::table('villages')->insert(['id'=>47780, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Wakpapapi']);
        DB::table('villages')->insert(['id'=>47781, 'districts_id'=>4208, 'zipcode'=>'97652', 'name'=>'Yatoke']);
        //Kecamatan Pulau Masela Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4209, 'city_id'=>241, 'name'=>'Pulau Masela']);
        DB::table('villages')->insert(['id'=>47782, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Babyotang (babiotang)']);
        DB::table('villages')->insert(['id'=>47783, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Bululora']);
        DB::table('villages')->insert(['id'=>47784, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Iblatmuntah']);
        DB::table('villages')->insert(['id'=>47785, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Ilbutung']);
        DB::table('villages')->insert(['id'=>47786, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Latalola Besar']);
        DB::table('villages')->insert(['id'=>47787, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Latalola Kecil']);
        DB::table('villages')->insert(['id'=>47788, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Lawawang']);
        DB::table('villages')->insert(['id'=>47789, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Marsela']);
        DB::table('villages')->insert(['id'=>47790, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Nura']);
        DB::table('villages')->insert(['id'=>47791, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Serili']);
        DB::table('villages')->insert(['id'=>47792, 'districts_id'=>4209, 'zipcode'=>'97652', 'name'=>'Telalora - Letoda']);
        //Kecamatan Mdona Hyera/hiera Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4210, 'city_id'=>241, 'name'=>'Mdona Hyera/hiera']);
        DB::table('villages')->insert(['id'=>47793, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Batu Gajah']);
        DB::table('villages')->insert(['id'=>47794, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Elo']);
        DB::table('villages')->insert(['id'=>47795, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Lelang']);
        DB::table('villages')->insert(['id'=>47796, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Luang Barat']);
        DB::table('villages')->insert(['id'=>47797, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Luang Timur']);
        DB::table('villages')->insert(['id'=>47798, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Mahaleta']);
        DB::table('villages')->insert(['id'=>47799, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Pupioliora']);
        DB::table('villages')->insert(['id'=>47800, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Regoha']);
        DB::table('villages')->insert(['id'=>47801, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Romdara']);
        DB::table('villages')->insert(['id'=>47802, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Romkisar']);
        DB::table('villages')->insert(['id'=>47803, 'districts_id'=>4210, 'zipcode'=>'97652', 'name'=>'Rotnama']);
        //Kecamatan Dawelor Dawera Kab. Maluku Barat Daya Provinsi Maluku
        DB::table('districts')->insert(['id'=>4211, 'city_id'=>241, 'name'=>'Dawelor Dawera']);
        DB::table('villages')->insert(['id'=>47804, 'districts_id'=>4211, 'zipcode'=>'97652', 'name'=>'Ilmarang']);
        DB::table('villages')->insert(['id'=>47805, 'districts_id'=>4211, 'zipcode'=>'97652', 'name'=>'Letmasa']);
        DB::table('villages')->insert(['id'=>47806, 'districts_id'=>4211, 'zipcode'=>'97652', 'name'=>'Nurnyaman']);
        DB::table('villages')->insert(['id'=>47807, 'districts_id'=>4211, 'zipcode'=>'97652', 'name'=>'Wairatan (wiratan/wiratang)']);
        DB::table('villages')->insert(['id'=>47808, 'districts_id'=>4211, 'zipcode'=>'97652', 'name'=>'Watuwey (watuwei)']);
        DB::table('villages')->insert(['id'=>47809, 'districts_id'=>4211, 'zipcode'=>'97652', 'name'=>'Welora']);

        //Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('cities')->insert(['id'=>242, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Maluku Tenggara Barat']);
        //Kecamatan Selaru Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4212, 'city_id'=>242, 'name'=>'Selaru']);
        DB::table('villages')->insert(['id'=>47810, 'districts_id'=>4212, 'zipcode'=>'97453', 'name'=>'Adaut']);
        DB::table('villages')->insert(['id'=>47811, 'districts_id'=>4212, 'zipcode'=>'97453', 'name'=>'Eliasa']);
        DB::table('villages')->insert(['id'=>47812, 'districts_id'=>4212, 'zipcode'=>'97453', 'name'=>'Fursui']);
        DB::table('villages')->insert(['id'=>47813, 'districts_id'=>4212, 'zipcode'=>'97453', 'name'=>'Kandar']);
        DB::table('villages')->insert(['id'=>47814, 'districts_id'=>4212, 'zipcode'=>'97453', 'name'=>'Lingat']);
        DB::table('villages')->insert(['id'=>47815, 'districts_id'=>4212, 'zipcode'=>'97453', 'name'=>'Namtabung']);
        DB::table('villages')->insert(['id'=>47816, 'districts_id'=>4212, 'zipcode'=>'97453', 'name'=>'Werain']);
        //Kecamatan Wuarlabobar Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4213, 'city_id'=>242, 'name'=>'Wuarlabobar']);
        DB::table('villages')->insert(['id'=>47817, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Abat']);
        DB::table('villages')->insert(['id'=>47818, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Awear Rumngeur']);
        DB::table('villages')->insert(['id'=>47819, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Karatat']);
        DB::table('villages')->insert(['id'=>47820, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Kilon']);
        DB::table('villages')->insert(['id'=>47821, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Labobar']);
        DB::table('villages')->insert(['id'=>47822, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Lingada']);
        DB::table('villages')->insert(['id'=>47823, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Teineman']);
        DB::table('villages')->insert(['id'=>47824, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Watmasa']);
        DB::table('villages')->insert(['id'=>47825, 'districts_id'=>4213, 'zipcode'=>'97463', 'name'=>'Wunlah']);
        //Kecamatan Yaru Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4214, 'city_id'=>242, 'name'=>'Yaru']);
        DB::table('villages')->insert(['id'=>47826, 'districts_id'=>4214, 'zipcode'=>'97463', 'name'=>'Adodo Fordata']);
        DB::table('villages')->insert(['id'=>47827, 'districts_id'=>4214, 'zipcode'=>'97463', 'name'=>'Awear']);
        DB::table('villages')->insert(['id'=>47828, 'districts_id'=>4214, 'zipcode'=>'97463', 'name'=>'Romean']);
        DB::table('villages')->insert(['id'=>47829, 'districts_id'=>4214, 'zipcode'=>'97463', 'name'=>'Rumngeur']);
        DB::table('villages')->insert(['id'=>47830, 'districts_id'=>4214, 'zipcode'=>'97463', 'name'=>'Sofyanin']);
        DB::table('villages')->insert(['id'=>47831, 'districts_id'=>4214, 'zipcode'=>'97463', 'name'=>'Walerang']);
        //Kecamatan Molu Maru Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4215, 'city_id'=>242, 'name'=>'Molu Maru']);
        DB::table('villages')->insert(['id'=>47832, 'districts_id'=>4215, 'zipcode'=>'97463', 'name'=>'Adodo Molo']);
        DB::table('villages')->insert(['id'=>47833, 'districts_id'=>4215, 'zipcode'=>'97463', 'name'=>'Nurkat']);
        DB::table('villages')->insert(['id'=>47834, 'districts_id'=>4215, 'zipcode'=>'97463', 'name'=>'Tutunametal']);
        DB::table('villages')->insert(['id'=>47835, 'districts_id'=>4215, 'zipcode'=>'97463', 'name'=>'Wadankou (wadankau)']);
        DB::table('villages')->insert(['id'=>47836, 'districts_id'=>4215, 'zipcode'=>'97463', 'name'=>'Wulmasa']);
        //Kecamatan Kormomolin Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4216, 'city_id'=>242, 'name'=>'Kormomolin']);
        DB::table('villages')->insert(['id'=>47837, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Alusi Batjas']);
        DB::table('villages')->insert(['id'=>47838, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Alusi Bukyalin (bukyalim)']);
        DB::table('villages')->insert(['id'=>47839, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Alusi Kelaan']);
        DB::table('villages')->insert(['id'=>47840, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Alusi Krawain']);
        DB::table('villages')->insert(['id'=>47841, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Alusi Tamrian']);
        DB::table('villages')->insert(['id'=>47842, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Kilmasa']);
        DB::table('villages')->insert(['id'=>47843, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Lorwembun']);
        DB::table('villages')->insert(['id'=>47844, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Lumasebu']);
        DB::table('villages')->insert(['id'=>47845, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Meyano Raya']);
        DB::table('villages')->insert(['id'=>47846, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Meyanobab']);
        DB::table('villages')->insert(['id'=>47847, 'districts_id'=>4216, 'zipcode'=>'97463', 'name'=>'Meyanodas']);
        //Kecamatan Nirunmas Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4217, 'city_id'=>242, 'name'=>'Nirunmas']);
        DB::table('villages')->insert(['id'=>47848, 'districts_id'=>4217, 'zipcode'=>'97463', 'name'=>'Arma']);
        DB::table('villages')->insert(['id'=>47849, 'districts_id'=>4217, 'zipcode'=>'97463', 'name'=>'Manglusi']);
        DB::table('villages')->insert(['id'=>47850, 'districts_id'=>4217, 'zipcode'=>'97463', 'name'=>'Tutukembong']);
        DB::table('villages')->insert(['id'=>47851, 'districts_id'=>4217, 'zipcode'=>'97463', 'name'=>'Watmuri']);
        DB::table('villages')->insert(['id'=>47852, 'districts_id'=>4217, 'zipcode'=>'97463', 'name'=>'Waturu']);
        //Kecamatan Tanimbar Utara Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4218, 'city_id'=>242, 'name'=>'Tanimbar Utara']);
        DB::table('villages')->insert(['id'=>47853, 'districts_id'=>4218, 'zipcode'=>'97463', 'name'=>'Kelaan']);
        DB::table('villages')->insert(['id'=>47854, 'districts_id'=>4218, 'zipcode'=>'97463', 'name'=>'Keliober']);
        DB::table('villages')->insert(['id'=>47855, 'districts_id'=>4218, 'zipcode'=>'97463', 'name'=>'Lamdesar Barat']);
        DB::table('villages')->insert(['id'=>47856, 'districts_id'=>4218, 'zipcode'=>'97463', 'name'=>'Lamdesar Timur']);
        DB::table('villages')->insert(['id'=>47857, 'districts_id'=>4218, 'zipcode'=>'97463', 'name'=>'Lelingluan']);
        DB::table('villages')->insert(['id'=>47858, 'districts_id'=>4218, 'zipcode'=>'97463', 'name'=>'Ridool']);
        DB::table('villages')->insert(['id'=>47859, 'districts_id'=>4218, 'zipcode'=>'97463', 'name'=>'Ritabel']);
        DB::table('villages')->insert(['id'=>47860, 'districts_id'=>4218, 'zipcode'=>'97463', 'name'=>'Watidal']);
        //Kecamatan Wertamrian Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4219, 'city_id'=>242, 'name'=>'Wertamrian']);
        DB::table('villages')->insert(['id'=>47861, 'districts_id'=>4219, 'zipcode'=>'97464', 'name'=>'Amdasa']);
        DB::table('villages')->insert(['id'=>47862, 'districts_id'=>4219, 'zipcode'=>'97464', 'name'=>'Arui Bab']);
        DB::table('villages')->insert(['id'=>47863, 'districts_id'=>4219, 'zipcode'=>'97464', 'name'=>'Arui Das']);
        DB::table('villages')->insert(['id'=>47864, 'districts_id'=>4219, 'zipcode'=>'97464', 'name'=>'Atubul Raya (atabul Dol)']);
        DB::table('villages')->insert(['id'=>47865, 'districts_id'=>4219, 'zipcode'=>'97464', 'name'=>'Lorulung']);
        DB::table('villages')->insert(['id'=>47866, 'districts_id'=>4219, 'zipcode'=>'97464', 'name'=>'Sangliat Dol']);
        DB::table('villages')->insert(['id'=>47867, 'districts_id'=>4219, 'zipcode'=>'97464', 'name'=>'Sangliat Krawain']);
        DB::table('villages')->insert(['id'=>47868, 'districts_id'=>4219, 'zipcode'=>'97464', 'name'=>'Tumbur']);
        //Kecamatan Wermakatian (wer Maktian) Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4220, 'city_id'=>242, 'name'=>'Wermakatian (wer Maktian)']);
        DB::table('villages')->insert(['id'=>47869, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Batu Putih']);
        DB::table('villages')->insert(['id'=>47870, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Kamatubun']);
        DB::table('villages')->insert(['id'=>47871, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Makatiang']);
        DB::table('villages')->insert(['id'=>47872, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Marantutul']);
        DB::table('villages')->insert(['id'=>47873, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Rumasalut']);
        DB::table('villages')->insert(['id'=>47874, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Themin']);
        DB::table('villages')->insert(['id'=>47875, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Welutu']);
        DB::table('villages')->insert(['id'=>47876, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Weratan']);
        DB::table('villages')->insert(['id'=>47877, 'districts_id'=>4220, 'zipcode'=>'97464', 'name'=>'Wermatang']);
        //Kecamatan Tanimbar Selatan Kab. Maluku Tenggara Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4221, 'city_id'=>242, 'name'=>'Tanimbar Selatan']);
        DB::table('villages')->insert(['id'=>47878, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Bomaki']);
        DB::table('villages')->insert(['id'=>47879, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Ilngei']);
        DB::table('villages')->insert(['id'=>47880, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Kabiarat Raya']);
        DB::table('villages')->insert(['id'=>47881, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Latdalam']);
        DB::table('villages')->insert(['id'=>47882, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Lauran']);
        DB::table('villages')->insert(['id'=>47883, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Lermatang']);
        DB::table('villages')->insert(['id'=>47884, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Matakus']);
        DB::table('villages')->insert(['id'=>47885, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Olilit']);
        DB::table('villages')->insert(['id'=>47886, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Saumlaki']);
        DB::table('villages')->insert(['id'=>47887, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Sifnana']);
        DB::table('villages')->insert(['id'=>47888, 'districts_id'=>4221, 'zipcode'=>'97464', 'name'=>'Wowonda']);

        //Kab. Maluku Tengah Provinsi Maluku
        DB::table('cities')->insert(['id'=>243, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Maluku Tengah']);
        //Kecamatan Nusalaut Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4222, 'city_id'=>243, 'name'=>'Nusalaut']);
        DB::table('villages')->insert(['id'=>47889, 'districts_id'=>4222, 'zipcode'=>'97511', 'name'=>'Abubu']);
        DB::table('villages')->insert(['id'=>47890, 'districts_id'=>4222, 'zipcode'=>'97511', 'name'=>'Akoon']);
        DB::table('villages')->insert(['id'=>47891, 'districts_id'=>4222, 'zipcode'=>'97511', 'name'=>'Ameth']);
        DB::table('villages')->insert(['id'=>47892, 'districts_id'=>4222, 'zipcode'=>'97511', 'name'=>'Leinitu']);
        DB::table('villages')->insert(['id'=>47893, 'districts_id'=>4222, 'zipcode'=>'97511', 'name'=>'Nalahia']);
        DB::table('villages')->insert(['id'=>47894, 'districts_id'=>4222, 'zipcode'=>'97511', 'name'=>'Sila']);
        DB::table('villages')->insert(['id'=>47895, 'districts_id'=>4222, 'zipcode'=>'97511', 'name'=>'Titawai (titawaai)']);
        //Kecamatan Masohi Kota Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4223, 'city_id'=>243, 'name'=>'Masohi Kota']);
        DB::table('villages')->insert(['id'=>47896, 'districts_id'=>4223, 'zipcode'=>'97511', 'name'=>'Namaelo']);
        DB::table('villages')->insert(['id'=>47897, 'districts_id'=>4223, 'zipcode'=>'97512', 'name'=>'Namasina']);
        DB::table('villages')->insert(['id'=>47898, 'districts_id'=>4223, 'zipcode'=>'97513', 'name'=>'Ampera']);
        DB::table('villages')->insert(['id'=>47899, 'districts_id'=>4223, 'zipcode'=>'97514', 'name'=>'Lesane']);
        DB::table('villages')->insert(['id'=>47900, 'districts_id'=>4223, 'zipcode'=>'97515', 'name'=>'Letwaru']);
        //Kecamatan Amahai Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4224, 'city_id'=>243, 'name'=>'Amahai']);
        DB::table('villages')->insert(['id'=>47901, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Amahai (amaiiai)']);
        DB::table('villages')->insert(['id'=>47902, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Banda Baru']);
        DB::table('villages')->insert(['id'=>47903, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Haruru']);
        DB::table('villages')->insert(['id'=>47904, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Hollo']);
        DB::table('villages')->insert(['id'=>47905, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Makariki']);
        DB::table('villages')->insert(['id'=>47906, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Rutah']);
        DB::table('villages')->insert(['id'=>47907, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Sehati']);
        DB::table('villages')->insert(['id'=>47908, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Sepa']);
        DB::table('villages')->insert(['id'=>47909, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Soahuku']);
        DB::table('villages')->insert(['id'=>47910, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Tamilouw']);
        DB::table('villages')->insert(['id'=>47911, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Yafila']);
        DB::table('villages')->insert(['id'=>47912, 'districts_id'=>4224, 'zipcode'=>'97516', 'name'=>'Yainuelo']);
        //Kecamatan Teluk Elpaputih Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4225, 'city_id'=>243, 'name'=>'Teluk Elpaputih']);
        DB::table('villages')->insert(['id'=>47913, 'districts_id'=>4225, 'zipcode'=>'97516', 'name'=>'Liang']);
        DB::table('villages')->insert(['id'=>47914, 'districts_id'=>4225, 'zipcode'=>'97516', 'name'=>'Sahulau']);
        DB::table('villages')->insert(['id'=>47915, 'districts_id'=>4225, 'zipcode'=>'97516', 'name'=>'Tananahu']);
        DB::table('villages')->insert(['id'=>47916, 'districts_id'=>4225, 'zipcode'=>'97516', 'name'=>'Waraka']);
        //Kecamatan Tehoru Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4226, 'city_id'=>243, 'name'=>'Tehoru']);
        DB::table('villages')->insert(['id'=>47917, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Hatu']);
        DB::table('villages')->insert(['id'=>47918, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Hatumete']);
        DB::table('villages')->insert(['id'=>47919, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Haya']);
        DB::table('villages')->insert(['id'=>47920, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Mosso']);
        DB::table('villages')->insert(['id'=>47921, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Piliama (piliana)']);
        DB::table('villages')->insert(['id'=>47922, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Salamahu']);
        DB::table('villages')->insert(['id'=>47923, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Saunulu']);
        DB::table('villages')->insert(['id'=>47924, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Tehoru']);
        DB::table('villages')->insert(['id'=>47925, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Teluti Baru']);
        DB::table('villages')->insert(['id'=>47926, 'districts_id'=>4226, 'zipcode'=>'97553', 'name'=>'Yaputih']);
        //Kecamatan Telutih Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4227, 'city_id'=>243, 'name'=>'Telutih']);
        DB::table('villages')->insert(['id'=>47927, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Hunisi']);
        DB::table('villages')->insert(['id'=>47928, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Lafa']);
        DB::table('villages')->insert(['id'=>47929, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Laha']);
        DB::table('villages')->insert(['id'=>47930, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Lahakaba']);
        DB::table('villages')->insert(['id'=>47931, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Laimu']);
        DB::table('villages')->insert(['id'=>47932, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Maneo Ratu']);
        DB::table('villages')->insert(['id'=>47933, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Tehua']);
        DB::table('villages')->insert(['id'=>47934, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Ulahahan']);
        DB::table('villages')->insert(['id'=>47935, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Wolu']);
        DB::table('villages')->insert(['id'=>47936, 'districts_id'=>4227, 'zipcode'=>'97553', 'name'=>'Yamalatu']);
        //Kecamatan Seram Utara Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4228, 'city_id'=>243, 'name'=>'Seram Utara']);
        DB::table('villages')->insert(['id'=>47937, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Air Besar']);
        DB::table('villages')->insert(['id'=>47938, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Besi']);
        DB::table('villages')->insert(['id'=>47939, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Huaulu']);
        DB::table('villages')->insert(['id'=>47940, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Kaloa']);
        DB::table('villages')->insert(['id'=>47941, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Kanikeh (kanike)']);
        DB::table('villages')->insert(['id'=>47942, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Malaku']);
        DB::table('villages')->insert(['id'=>47943, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Manusela']);
        DB::table('villages')->insert(['id'=>47944, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Pasahari']);
        DB::table('villages')->insert(['id'=>47945, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Roho']);
        DB::table('villages')->insert(['id'=>47946, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Rumah Sokat']);
        DB::table('villages')->insert(['id'=>47947, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Sawai']);
        DB::table('villages')->insert(['id'=>47948, 'districts_id'=>4228, 'zipcode'=>'97557', 'name'=>'Wahai']);
        //Kecamatan Seram Utara Timur Seti Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4229, 'city_id'=>243, 'name'=>'Seram Utara Timur Seti']);
        DB::table('villages')->insert(['id'=>47949, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Aketernate']);
        DB::table('villages')->insert(['id'=>47950, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Kobisonta']);
        DB::table('villages')->insert(['id'=>47951, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Namto']);
        DB::table('villages')->insert(['id'=>47952, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Seti']);
        DB::table('villages')->insert(['id'=>47953, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Tanah Merah']);
        DB::table('villages')->insert(['id'=>47954, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Tihuanaa']);
        DB::table('villages')->insert(['id'=>47955, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Wailoping']);
        DB::table('villages')->insert(['id'=>47956, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Waimusal']);
        DB::table('villages')->insert(['id'=>47957, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Waiputih']);
        DB::table('villages')->insert(['id'=>47958, 'districts_id'=>4229, 'zipcode'=>'97557', 'name'=>'Waitila']);
        //Kecamatan Seram Utara Barat Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4230, 'city_id'=>243, 'name'=>'Seram Utara Barat']);
        DB::table('villages')->insert(['id'=>47959, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Gale-gale']);
        DB::table('villages')->insert(['id'=>47960, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Horale']);
        DB::table('villages')->insert(['id'=>47961, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Kalutu (karlutu Kara)']);
        DB::table('villages')->insert(['id'=>47962, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Labuan']);
        DB::table('villages')->insert(['id'=>47963, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Latea']);
        DB::table('villages')->insert(['id'=>47964, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Lisabata Timur']);
        DB::table('villages')->insert(['id'=>47965, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Paa']);
        DB::table('villages')->insert(['id'=>47966, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Pasanea']);
        DB::table('villages')->insert(['id'=>47967, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Rumahwey']);
        DB::table('villages')->insert(['id'=>47968, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Saleman']);
        DB::table('villages')->insert(['id'=>47969, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Waiulu']);
        DB::table('villages')->insert(['id'=>47970, 'districts_id'=>4230, 'zipcode'=>'97557', 'name'=>'Warasiwa']);
        //Kecamatan Seram Utara Timur Kobi Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4231, 'city_id'=>243, 'name'=>'Seram Utara Timur Kobi']);
        DB::table('villages')->insert(['id'=>47971, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Kobi']);
        DB::table('villages')->insert(['id'=>47972, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Kobimukti']);
        DB::table('villages')->insert(['id'=>47973, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Leaway (leawai)']);
        DB::table('villages')->insert(['id'=>47974, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Maneo Rendah']);
        DB::table('villages')->insert(['id'=>47975, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Marasahua']);
        DB::table('villages')->insert(['id'=>47976, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Morokai (morokay)']);
        DB::table('villages')->insert(['id'=>47977, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Samai']);
        DB::table('villages')->insert(['id'=>47978, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Sariputih']);
        DB::table('villages')->insert(['id'=>47979, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Waimusi']);
        DB::table('villages')->insert(['id'=>47980, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Waitonipa']);
        DB::table('villages')->insert(['id'=>47981, 'districts_id'=>4231, 'zipcode'=>'97557', 'name'=>'Way Asih (waiasih)']);
        //Kecamatan Teon Nila Serua Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4232, 'city_id'=>243, 'name'=>'Teon Nila Serua']);
        DB::table('villages')->insert(['id'=>47982, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Ameth']);
        DB::table('villages')->insert(['id'=>47983, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Bumey']);
        DB::table('villages')->insert(['id'=>47984, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Isu (issu)']);
        DB::table('villages')->insert(['id'=>47985, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Jerili']);
        DB::table('villages')->insert(['id'=>47986, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Kokroman']);
        DB::table('villages')->insert(['id'=>47987, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Kuralele']);
        DB::table('villages')->insert(['id'=>47988, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Layeni']);
        DB::table('villages')->insert(['id'=>47989, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Lesluru']);
        DB::table('villages')->insert(['id'=>47990, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Mesa (messa)']);
        DB::table('villages')->insert(['id'=>47991, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Nakupia']);
        DB::table('villages')->insert(['id'=>47992, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Sefluru (sifluru)']);
        DB::table('villages')->insert(['id'=>47993, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Trana']);
        DB::table('villages')->insert(['id'=>47994, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Usliapan']);
        DB::table('villages')->insert(['id'=>47995, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Waru']);
        DB::table('villages')->insert(['id'=>47996, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Watludan']);
        DB::table('villages')->insert(['id'=>47997, 'districts_id'=>4232, 'zipcode'=>'97558', 'name'=>'Wotay']);
        //Kecamatan Leihitu Barat Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4233, 'city_id'=>243, 'name'=>'Leihitu Barat']);
        DB::table('villages')->insert(['id'=>47998, 'districts_id'=>4233, 'zipcode'=>'97581', 'name'=>'Allang']);
        DB::table('villages')->insert(['id'=>47999, 'districts_id'=>4233, 'zipcode'=>'97581', 'name'=>'Hatu']);
        DB::table('villages')->insert(['id'=>48000, 'districts_id'=>4233, 'zipcode'=>'97581', 'name'=>'Larike']);
        DB::table('villages')->insert(['id'=>48001, 'districts_id'=>4233, 'zipcode'=>'97581', 'name'=>'Liliboi']);
        DB::table('villages')->insert(['id'=>48002, 'districts_id'=>4233, 'zipcode'=>'97581', 'name'=>'Wakasihu']);
        //Kecamatan Leihitu Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4234, 'city_id'=>243, 'name'=>'Leihitu']);
        DB::table('villages')->insert(['id'=>48003, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Asilulu']);
        DB::table('villages')->insert(['id'=>48004, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Hila']);
        DB::table('villages')->insert(['id'=>48005, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Hitu Lama']);
        DB::table('villages')->insert(['id'=>48006, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Hitu Mesing']);
        DB::table('villages')->insert(['id'=>48007, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Kaitetu']);
        DB::table('villages')->insert(['id'=>48008, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Mamala']);
        DB::table('villages')->insert(['id'=>48009, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Morela']);
        DB::table('villages')->insert(['id'=>48010, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Negeri Lima']);
        DB::table('villages')->insert(['id'=>48011, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Seith']);
        DB::table('villages')->insert(['id'=>48012, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Ureng']);
        DB::table('villages')->insert(['id'=>48013, 'districts_id'=>4234, 'zipcode'=>'97581', 'name'=>'Wakal']);
        //Kecamatan Salahutu Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4235, 'city_id'=>243, 'name'=>'Salahutu']);
        DB::table('villages')->insert(['id'=>48014, 'districts_id'=>4235, 'zipcode'=>'97582', 'name'=>'Liang']);
        DB::table('villages')->insert(['id'=>48015, 'districts_id'=>4235, 'zipcode'=>'97582', 'name'=>'Suli']);
        DB::table('villages')->insert(['id'=>48016, 'districts_id'=>4235, 'zipcode'=>'97582', 'name'=>'Tengah-tengah']);
        DB::table('villages')->insert(['id'=>48017, 'districts_id'=>4235, 'zipcode'=>'97582', 'name'=>'Tial']);
        DB::table('villages')->insert(['id'=>48018, 'districts_id'=>4235, 'zipcode'=>'97582', 'name'=>'Tulehu']);
        DB::table('villages')->insert(['id'=>48019, 'districts_id'=>4235, 'zipcode'=>'97582', 'name'=>'Waai']);
        //Kecamatan Pulau Haruku Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4236, 'city_id'=>243, 'name'=>'Pulau Haruku']);
        DB::table('villages')->insert(['id'=>48020, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Aboru']);
        DB::table('villages')->insert(['id'=>48021, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Haruku']);
        DB::table('villages')->insert(['id'=>48022, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Hulaliu']);
        DB::table('villages')->insert(['id'=>48023, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Kabau']);
        DB::table('villages')->insert(['id'=>48024, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Kailolo (kailolopia)']);
        DB::table('villages')->insert(['id'=>48025, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Kariuw']);
        DB::table('villages')->insert(['id'=>48026, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Oma']);
        DB::table('villages')->insert(['id'=>48027, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Pelauw']);
        DB::table('villages')->insert(['id'=>48028, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Rohomoni']);
        DB::table('villages')->insert(['id'=>48029, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Sameth']);
        DB::table('villages')->insert(['id'=>48030, 'districts_id'=>4236, 'zipcode'=>'97591', 'name'=>'Wassu']);
        //Kecamatan Saparua Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4237, 'city_id'=>243, 'name'=>'Saparua']);
        DB::table('villages')->insert(['id'=>48031, 'districts_id'=>4237, 'zipcode'=>'97592', 'name'=>'Booi']);
        DB::table('villages')->insert(['id'=>48032, 'districts_id'=>4237, 'zipcode'=>'97592', 'name'=>'Haria']);
        DB::table('villages')->insert(['id'=>48033, 'districts_id'=>4237, 'zipcode'=>'97592', 'name'=>'Kulur']);
        DB::table('villages')->insert(['id'=>48034, 'districts_id'=>4237, 'zipcode'=>'97592', 'name'=>'Paperu']);
        DB::table('villages')->insert(['id'=>48035, 'districts_id'=>4237, 'zipcode'=>'97592', 'name'=>'Portho']);
        DB::table('villages')->insert(['id'=>48036, 'districts_id'=>4237, 'zipcode'=>'97592', 'name'=>'Saparua']);
        DB::table('villages')->insert(['id'=>48037, 'districts_id'=>4237, 'zipcode'=>'97592', 'name'=>'Tiouw']);
        //Kecamatan Saparua Timur Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4238, 'city_id'=>243, 'name'=>'Saparua Timur']);
        DB::table('villages')->insert(['id'=>48038, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Iha']);
        DB::table('villages')->insert(['id'=>48039, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Ihamahu']);
        DB::table('villages')->insert(['id'=>48040, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Itawaka']);
        DB::table('villages')->insert(['id'=>48041, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Mahu']);
        DB::table('villages')->insert(['id'=>48042, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Noloth']);
        DB::table('villages')->insert(['id'=>48043, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Ouw']);
        DB::table('villages')->insert(['id'=>48044, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Siri Sori']);
        DB::table('villages')->insert(['id'=>48045, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Siri-sori Amalatu']);
        DB::table('villages')->insert(['id'=>48046, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Tuhaha']);
        DB::table('villages')->insert(['id'=>48047, 'districts_id'=>4238, 'zipcode'=>'97592', 'name'=>'Ullath']);
        //Kecamatan Banda Kab. Maluku Tengah Provinsi Maluku
        DB::table('districts')->insert(['id'=>4239, 'city_id'=>243, 'name'=>'Banda']);
        DB::table('villages')->insert(['id'=>48048, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Dwiwarna']);
        DB::table('villages')->insert(['id'=>48049, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>48050, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Lonthoir']);
        DB::table('villages')->insert(['id'=>48051, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Merdeka']);
        DB::table('villages')->insert(['id'=>48052, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Nusantara']);
        DB::table('villages')->insert(['id'=>48053, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Pulau Ai/ay']);
        DB::table('villages')->insert(['id'=>48054, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Pulau Hatta']);
        DB::table('villages')->insert(['id'=>48055, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Pulau Rhum']);
        DB::table('villages')->insert(['id'=>48056, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Rajawali']);
        DB::table('villages')->insert(['id'=>48057, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Selamon']);
        DB::table('villages')->insert(['id'=>48058, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Tanah Rata']);
        DB::table('villages')->insert(['id'=>48059, 'districts_id'=>4239, 'zipcode'=>'97593', 'name'=>'Waer']);

        //Kab. Buru Selatan Provinsi Maluku
        DB::table('cities')->insert(['id'=>244, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Buru Selatan']);
        //Kecamatan Ambalau Kab. Buru Selatan Provinsi Maluku
        DB::table('districts')->insert(['id'=>4240, 'city_id'=>244, 'name'=>'Ambalau']);
        DB::table('villages')->insert(['id'=>48060, 'districts_id'=>4240, 'zipcode'=>'97512', 'name'=>'Elara']);
        DB::table('villages')->insert(['id'=>48061, 'districts_id'=>4240, 'zipcode'=>'97512', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>48062, 'districts_id'=>4240, 'zipcode'=>'97512', 'name'=>'Lumoy']);
        DB::table('villages')->insert(['id'=>48063, 'districts_id'=>4240, 'zipcode'=>'97512', 'name'=>'Masawoy']);
        DB::table('villages')->insert(['id'=>48064, 'districts_id'=>4240, 'zipcode'=>'97512', 'name'=>'Selasi']);
        DB::table('villages')->insert(['id'=>48065, 'districts_id'=>4240, 'zipcode'=>'97512', 'name'=>'Siwar']);
        DB::table('villages')->insert(['id'=>48066, 'districts_id'=>4240, 'zipcode'=>'97512', 'name'=>'Ulima']);
        //Kecamatan Kepala Madan Kab. Buru Selatan Provinsi Maluku
        DB::table('districts')->insert(['id'=>4241, 'city_id'=>244, 'name'=>'Kepala Madan']);
        DB::table('villages')->insert(['id'=>48067, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Air Ternate']);
        DB::table('villages')->insert(['id'=>48068, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Bala-bala']);
        DB::table('villages')->insert(['id'=>48069, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Balpetu']);
        DB::table('villages')->insert(['id'=>48070, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Batu Layar']);
        DB::table('villages')->insert(['id'=>48071, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Biloro']);
        DB::table('villages')->insert(['id'=>48072, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Emhugen']);
        DB::table('villages')->insert(['id'=>48073, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Fogi']);
        DB::table('villages')->insert(['id'=>48074, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Nanali']);
        DB::table('villages')->insert(['id'=>48075, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Pasir Putih']);
        DB::table('villages')->insert(['id'=>48076, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Sekat']);
        DB::table('villages')->insert(['id'=>48077, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Siopot']);
        DB::table('villages')->insert(['id'=>48078, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Waeha']);
        DB::table('villages')->insert(['id'=>48079, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Waekeka']);
        DB::table('villages')->insert(['id'=>48080, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Waepandan']);
        DB::table('villages')->insert(['id'=>48081, 'districts_id'=>4241, 'zipcode'=>'97572', 'name'=>'Walbele']);
        //Kecamatan Namrole Kab. Buru Selatan Provinsi Maluku
        DB::table('districts')->insert(['id'=>4242, 'city_id'=>244, 'name'=>'Namrole']);
        DB::table('villages')->insert(['id'=>48082, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Batu Tulis']);
        DB::table('villages')->insert(['id'=>48083, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Elfule']);
        DB::table('villages')->insert(['id'=>48084, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Fatmite']);
        DB::table('villages')->insert(['id'=>48085, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Kamlanglale']);
        DB::table('villages')->insert(['id'=>48086, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Labuang']);
        DB::table('villages')->insert(['id'=>48087, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Lektama']);
        DB::table('villages')->insert(['id'=>48088, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Leku']);
        DB::table('villages')->insert(['id'=>48089, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Masnana']);
        DB::table('villages')->insert(['id'=>48090, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Namrinat']);
        DB::table('villages')->insert(['id'=>48091, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Oki Baru']);
        DB::table('villages')->insert(['id'=>48092, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Oki Lama']);
        DB::table('villages')->insert(['id'=>48093, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Tikbary']);
        DB::table('villages')->insert(['id'=>48094, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Waefusi']);
        DB::table('villages')->insert(['id'=>48095, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Waenalut']);
        DB::table('villages')->insert(['id'=>48096, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Waenono']);
        DB::table('villages')->insert(['id'=>48097, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Wali']);
        DB::table('villages')->insert(['id'=>48098, 'districts_id'=>4242, 'zipcode'=>'97573', 'name'=>'Wamkana']);
        //Kecamatan Leksula Kab. Buru Selatan Provinsi Maluku
        DB::table('districts')->insert(['id'=>4243, 'city_id'=>244, 'name'=>'Leksula']);
        DB::table('villages')->insert(['id'=>48099, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Ewiri (erwiri)']);
        DB::table('villages')->insert(['id'=>48100, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Grahwaen']);
        DB::table('villages')->insert(['id'=>48101, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Kase']);
        DB::table('villages')->insert(['id'=>48102, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Leksula']);
        DB::table('villages')->insert(['id'=>48103, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Liang']);
        DB::table('villages')->insert(['id'=>48104, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Mepa']);
        DB::table('villages')->insert(['id'=>48105, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Nalbessy']);
        DB::table('villages')->insert(['id'=>48106, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Neath']);
        DB::table('villages')->insert(['id'=>48107, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Slealale']);
        DB::table('villages')->insert(['id'=>48108, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Terkuri']);
        DB::table('villages')->insert(['id'=>48109, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Tifu']);
        DB::table('villages')->insert(['id'=>48110, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Waehaka']);
        DB::table('villages')->insert(['id'=>48111, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Waemala']);
        DB::table('villages')->insert(['id'=>48112, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Waemulang']);
        DB::table('villages')->insert(['id'=>48113, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Waenamaolon']);
        DB::table('villages')->insert(['id'=>48114, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Waeturen']);
        DB::table('villages')->insert(['id'=>48115, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Wahaolon']);
        DB::table('villages')->insert(['id'=>48116, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Walunghelat']);
        DB::table('villages')->insert(['id'=>48117, 'districts_id'=>4243, 'zipcode'=>'97573', 'name'=>'Wewali']);
        //Kecamatan Fena Fafan Kab. Buru Selatan Provinsi Maluku
        DB::table('districts')->insert(['id'=>4244, 'city_id'=>244, 'name'=>'Fena Fafan']);
        DB::table('villages')->insert(['id'=>48118, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Fakal']);
        DB::table('villages')->insert(['id'=>48119, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Mangeswaen']);
        DB::table('villages')->insert(['id'=>48120, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Nusarua']);
        DB::table('villages')->insert(['id'=>48121, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Siwatlahin']);
        DB::table('villages')->insert(['id'=>48122, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Trukat']);
        DB::table('villages')->insert(['id'=>48123, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Uneth']);
        DB::table('villages')->insert(['id'=>48124, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Waekatin']);
        DB::table('villages')->insert(['id'=>48125, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Waeken']);
        DB::table('villages')->insert(['id'=>48126, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Waelo']);
        DB::table('villages')->insert(['id'=>48127, 'districts_id'=>4244, 'zipcode'=>'97573', 'name'=>'Waereman (waeraman)']);
        //Kecamatan Waesama Kab. Buru Selatan Provinsi Maluku
        DB::table('districts')->insert(['id'=>4245, 'city_id'=>244, 'name'=>'Waesama']);
        DB::table('villages')->insert(['id'=>48128, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Batu Kasa']);
        DB::table('villages')->insert(['id'=>48129, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Hote']);
        DB::table('villages')->insert(['id'=>48130, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Lena']);
        DB::table('villages')->insert(['id'=>48131, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Pohon Batu']);
        DB::table('villages')->insert(['id'=>48132, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Simi']);
        DB::table('villages')->insert(['id'=>48133, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Waelikut']);
        DB::table('villages')->insert(['id'=>48134, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Waemasing']);
        DB::table('villages')->insert(['id'=>48135, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Waesili']);
        DB::table('villages')->insert(['id'=>48136, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Waetawa']);
        DB::table('villages')->insert(['id'=>48137, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Waeteba (waetaba)']);
        DB::table('villages')->insert(['id'=>48138, 'districts_id'=>4245, 'zipcode'=>'97574', 'name'=>'Wamsisi']);

        //Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('cities')->insert(['id'=>245, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Seram Bagian Timur']);
        //Kecamatan Siwalalat Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4246, 'city_id'=>245, 'name'=>'Siwalalat']);
        DB::table('villages')->insert(['id'=>48139, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Abulate']);
        DB::table('villages')->insert(['id'=>48140, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Adabai']);
        DB::table('villages')->insert(['id'=>48141, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Dihil']);
        DB::table('villages')->insert(['id'=>48142, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Elnusa']);
        DB::table('villages')->insert(['id'=>48143, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Lapela']);
        DB::table('villages')->insert(['id'=>48144, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Liliama']);
        DB::table('villages')->insert(['id'=>48145, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Naiwel Ahinulin']);
        DB::table('villages')->insert(['id'=>48146, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Nayet']);
        DB::table('villages')->insert(['id'=>48147, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Polin']);
        DB::table('villages')->insert(['id'=>48148, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Sabuai']);
        DB::table('villages')->insert(['id'=>48149, 'districts_id'=>4246, 'zipcode'=>'97554', 'name'=>'Tunsai']);
        //Kecamatan Bula Barat Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4247, 'city_id'=>245, 'name'=>'Bula Barat']);
        DB::table('villages')->insert(['id'=>48150, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Aki Jaya']);
        DB::table('villages')->insert(['id'=>48151, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Benggoi (banggoi)']);
        DB::table('villages')->insert(['id'=>48152, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Hote']);
        DB::table('villages')->insert(['id'=>48153, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Jakarta Baru']);
        DB::table('villages')->insert(['id'=>48154, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Jembatan Basah']);
        DB::table('villages')->insert(['id'=>48155, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Rukun Jaya']);
        DB::table('villages')->insert(['id'=>48156, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Silohan']);
        DB::table('villages')->insert(['id'=>48157, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Sumber Agung']);
        DB::table('villages')->insert(['id'=>48158, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Waematakabo']);
        DB::table('villages')->insert(['id'=>48159, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Waiketam Baru']);
        DB::table('villages')->insert(['id'=>48160, 'districts_id'=>4247, 'zipcode'=>'97554', 'name'=>'Waisamet']);
        //Kecamatan Werinama Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4248, 'city_id'=>245, 'name'=>'Werinama']);
        DB::table('villages')->insert(['id'=>48161, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Atiahu']);
        DB::table('villages')->insert(['id'=>48162, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Bemo']);
        DB::table('villages')->insert(['id'=>48163, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Bemo Perak']);
        DB::table('villages')->insert(['id'=>48164, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Betuasa (batuasa)']);
        DB::table('villages')->insert(['id'=>48165, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Funa Naibaya']);
        DB::table('villages')->insert(['id'=>48166, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Gusalaut']);
        DB::table('villages')->insert(['id'=>48167, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Hatumeten / Hatuimeten']);
        DB::table('villages')->insert(['id'=>48168, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Osong']);
        DB::table('villages')->insert(['id'=>48169, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Tobo']);
        DB::table('villages')->insert(['id'=>48170, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Tum']);
        DB::table('villages')->insert(['id'=>48171, 'districts_id'=>4248, 'zipcode'=>'97554', 'name'=>'Werinama']);
        //Kecamatan Teluk Waru Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4249, 'city_id'=>245, 'name'=>'Teluk Waru']);
        DB::table('villages')->insert(['id'=>48172, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Bellis']);
        DB::table('villages')->insert(['id'=>48173, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Dawang']);
        DB::table('villages')->insert(['id'=>48174, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>48175, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Karay']);
        DB::table('villages')->insert(['id'=>48176, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Nama Andan']);
        DB::table('villages')->insert(['id'=>48177, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Nama Lena']);
        DB::table('villages')->insert(['id'=>48178, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Solang']);
        DB::table('villages')->insert(['id'=>48179, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Tubir Wasiwang']);
        DB::table('villages')->insert(['id'=>48180, 'districts_id'=>4249, 'zipcode'=>'97554', 'name'=>'Waru']);
        //Kecamatan Bula Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4250, 'city_id'=>245, 'name'=>'Bula']);
        DB::table('villages')->insert(['id'=>48181, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Bula Air Fatolo']);
        DB::table('villages')->insert(['id'=>48182, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Englas']);
        DB::table('villages')->insert(['id'=>48183, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Fattolo']);
        DB::table('villages')->insert(['id'=>48184, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Kampung Gorom']);
        DB::table('villages')->insert(['id'=>48185, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Kampung Wailola']);
        DB::table('villages')->insert(['id'=>48186, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Limumir']);
        DB::table('villages')->insert(['id'=>48187, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Salas']);
        DB::table('villages')->insert(['id'=>48188, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Sesar']);
        DB::table('villages')->insert(['id'=>48189, 'districts_id'=>4250, 'zipcode'=>'97554', 'name'=>'Tansi Ambon']);
        DB::table('villages')->insert(['id'=>48190, 'districts_id'=>4250, 'zipcode'=>'97555', 'name'=>'Bula']);
        //Kecamatan Kilmury Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4251, 'city_id'=>245, 'name'=>'Kilmury']);
        DB::table('villages')->insert(['id'=>48191, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Afang Defol']);
        DB::table('villages')->insert(['id'=>48192, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Afang Kota']);
        DB::table('villages')->insert(['id'=>48193, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Gunak']);
        DB::table('villages')->insert(['id'=>48194, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Kamar']);
        DB::table('villages')->insert(['id'=>48195, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Kilmury']);
        DB::table('villages')->insert(['id'=>48196, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Kumelang']);
        DB::table('villages')->insert(['id'=>48197, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Mising']);
        DB::table('villages')->insert(['id'=>48198, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Nekan']);
        DB::table('villages')->insert(['id'=>48199, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Selor']);
        DB::table('villages')->insert(['id'=>48200, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Sumbawa']);
        DB::table('villages')->insert(['id'=>48201, 'districts_id'=>4251, 'zipcode'=>'97594', 'name'=>'Undur']);
        //Kecamatan Tutuk Tolu Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4252, 'city_id'=>245, 'name'=>'Tutuk Tolu']);
        DB::table('villages')->insert(['id'=>48202, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Airkasar']);
        DB::table('villages')->insert(['id'=>48203, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Bati Kilwouw']);
        DB::table('villages')->insert(['id'=>48204, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Danama']);
        DB::table('villages')->insert(['id'=>48205, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Gah']);
        DB::table('villages')->insert(['id'=>48206, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Kilbat']);
        DB::table('villages')->insert(['id'=>48207, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Kilmoy (kilmoi)']);
        DB::table('villages')->insert(['id'=>48208, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Sesar']);
        DB::table('villages')->insert(['id'=>48209, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Taruy']);
        DB::table('villages')->insert(['id'=>48210, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Walang Tenga']);
        DB::table('villages')->insert(['id'=>48211, 'districts_id'=>4252, 'zipcode'=>'97594', 'name'=>'Waras Waras']);
        //Kecamatan Kian Darat Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4253, 'city_id'=>245, 'name'=>'Kian Darat']);
        DB::table('villages')->insert(['id'=>48212, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Angar']);
        DB::table('villages')->insert(['id'=>48213, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Artafela']);
        DB::table('villages')->insert(['id'=>48214, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Kelaba']);
        DB::table('villages')->insert(['id'=>48215, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Kian Darat']);
        DB::table('villages')->insert(['id'=>48216, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Kileser']);
        DB::table('villages')->insert(['id'=>48217, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Kilga Kilwouw']);
        DB::table('villages')->insert(['id'=>48218, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Kilga Watubau']);
        DB::table('villages')->insert(['id'=>48219, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Rumfakar']);
        DB::table('villages')->insert(['id'=>48220, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Rumoga']);
        DB::table('villages')->insert(['id'=>48221, 'districts_id'=>4253, 'zipcode'=>'97594', 'name'=>'Watu Watu']);
        //Kecamatan Seram Timur Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4254, 'city_id'=>245, 'name'=>'Seram Timur']);
        DB::table('villages')->insert(['id'=>48222, 'districts_id'=>4254, 'zipcode'=>'97594', 'name'=>'Geser']);
        DB::table('villages')->insert(['id'=>48223, 'districts_id'=>4254, 'zipcode'=>'97594', 'name'=>'Keffing']);
        DB::table('villages')->insert(['id'=>48224, 'districts_id'=>4254, 'zipcode'=>'97594', 'name'=>'Kellu']);
        DB::table('villages')->insert(['id'=>48225, 'districts_id'=>4254, 'zipcode'=>'97594', 'name'=>'Kilbon Kway']);
        DB::table('villages')->insert(['id'=>48226, 'districts_id'=>4254, 'zipcode'=>'97594', 'name'=>'Kilfura']);
        DB::table('villages')->insert(['id'=>48227, 'districts_id'=>4254, 'zipcode'=>'97594', 'name'=>'Kiltay (kiltai)']);
        DB::table('villages')->insert(['id'=>48228, 'districts_id'=>4254, 'zipcode'=>'97594', 'name'=>'Kilwaru']);
        DB::table('villages')->insert(['id'=>48229, 'districts_id'=>4254, 'zipcode'=>'97594', 'name'=>'Urung']);
        //Kecamatan Wakate Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4255, 'city_id'=>245, 'name'=>'Wakate']);
        DB::table('villages')->insert(['id'=>48230, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Amar Laut']);
        DB::table('villages')->insert(['id'=>48231, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Efa (effa)']);
        DB::table('villages')->insert(['id'=>48232, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Guliar']);
        DB::table('villages')->insert(['id'=>48233, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Ilili']);
        DB::table('villages')->insert(['id'=>48234, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Karlomin']);
        DB::table('villages')->insert(['id'=>48235, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Kelangan']);
        DB::table('villages')->insert(['id'=>48236, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Keldor']);
        DB::table('villages')->insert(['id'=>48237, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Lahema']);
        DB::table('villages')->insert(['id'=>48238, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Otademan']);
        DB::table('villages')->insert(['id'=>48239, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Tamher Barat']);
        DB::table('villages')->insert(['id'=>48240, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Tamher Timur']);
        DB::table('villages')->insert(['id'=>48241, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Tanah Baru']);
        DB::table('villages')->insert(['id'=>48242, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Utiia']);
        DB::table('villages')->insert(['id'=>48243, 'districts_id'=>4255, 'zipcode'=>'97595', 'name'=>'Wunin Eldedora']);
        //Kecamatan Pulau Gorong (gorom) Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4256, 'city_id'=>245, 'name'=>'Pulau Gorong (gorom)']);
        DB::table('villages')->insert(['id'=>48244, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Amarsekaru']);
        DB::table('villages')->insert(['id'=>48245, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Day (dai)']);
        DB::table('villages')->insert(['id'=>48246, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Ilili']);
        DB::table('villages')->insert(['id'=>48247, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Kataloka']);
        DB::table('villages')->insert(['id'=>48248, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Kelibingan']);
        DB::table('villages')->insert(['id'=>48249, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Kulugowa']);
        DB::table('villages')->insert(['id'=>48250, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Loko']);
        DB::table('villages')->insert(['id'=>48251, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Mida']);
        DB::table('villages')->insert(['id'=>48252, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Miran Gota']);
        DB::table('villages')->insert(['id'=>48253, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Namalean']);
        DB::table('villages')->insert(['id'=>48254, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Ondor']);
        DB::table('villages')->insert(['id'=>48255, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Rumeon']);
        DB::table('villages')->insert(['id'=>48256, 'districts_id'=>4256, 'zipcode'=>'97595', 'name'=>'Sera']);
        //Kecamatan Gorom Timur Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4257, 'city_id'=>245, 'name'=>'Gorom Timur']);
        DB::table('villages')->insert(['id'=>48257, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Adar']);
        DB::table('villages')->insert(['id'=>48258, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Amarwawatu']);
        DB::table('villages')->insert(['id'=>48259, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Aran']);
        DB::table('villages')->insert(['id'=>48260, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Armada']);
        DB::table('villages')->insert(['id'=>48261, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Bas']);
        DB::table('villages')->insert(['id'=>48262, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Basarin']);
        DB::table('villages')->insert(['id'=>48263, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Goha']);
        DB::table('villages')->insert(['id'=>48264, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Kilkoda']);
        DB::table('villages')->insert(['id'=>48265, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Kota Siri (kota Sirih)']);
        DB::table('villages')->insert(['id'=>48266, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Miran']);
        DB::table('villages')->insert(['id'=>48267, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Rarat']);
        DB::table('villages')->insert(['id'=>48268, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Sagey']);
        DB::table('villages')->insert(['id'=>48269, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Tinarin']);
        DB::table('villages')->insert(['id'=>48270, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Tuha']);
        DB::table('villages')->insert(['id'=>48271, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Tunas Ilur']);
        DB::table('villages')->insert(['id'=>48272, 'districts_id'=>4257, 'zipcode'=>'97596', 'name'=>'Waisalan']);
        //Kecamatan Teor Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4258, 'city_id'=>245, 'name'=>'Teor']);
        DB::table('villages')->insert(['id'=>48273, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Duryar Rumoy']);
        DB::table('villages')->insert(['id'=>48274, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>48275, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Kampung Tengah Wermaf']);
        DB::table('villages')->insert(['id'=>48276, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Karlokin']);
        DB::table('villages')->insert(['id'=>48277, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Kartutin Kartenga']);
        DB::table('villages')->insert(['id'=>48278, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Ker Ker']);
        DB::table('villages')->insert(['id'=>48279, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Kiliwouw']);
        DB::table('villages')->insert(['id'=>48280, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Lapang Kampung Jawa']);
        DB::table('villages')->insert(['id'=>48281, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Mamur']);
        DB::table('villages')->insert(['id'=>48282, 'districts_id'=>4258, 'zipcode'=>'97597', 'name'=>'Teor']);
        //Kecamatan Siritaun Wida Timur Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4259, 'city_id'=>245, 'name'=>'Siritaun Wida Timur']);
        DB::table('villages')->insert(['id'=>48283, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Air Nanang']);
        DB::table('villages')->insert(['id'=>48284, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Aruan Gaur']);
        DB::table('villages')->insert(['id'=>48285, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Keta']);
        DB::table('villages')->insert(['id'=>48286, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Keta Rumadan']);
        DB::table('villages')->insert(['id'=>48287, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Kian Laut']);
        DB::table('villages')->insert(['id'=>48288, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Kwaos (kuwaos)']);
        DB::table('villages')->insert(['id'=>48289, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Lian Tasik']);
        DB::table('villages')->insert(['id'=>48290, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Salagor Air']);
        DB::table('villages')->insert(['id'=>48291, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Salagor Kota']);
        DB::table('villages')->insert(['id'=>48292, 'districts_id'=>4259, 'zipcode'=>'97598', 'name'=>'Suru']);
        //Kecamatan Pulau Panjang Kab. Seram Bagian Timur Provinsi Maluku
        DB::table('districts')->insert(['id'=>4260, 'city_id'=>245, 'name'=>'Pulau Panjang']);
        DB::table('villages')->insert(['id'=>48293, 'districts_id'=>4260, 'zipcode'=>'97599', 'name'=>'Argam']);
        DB::table('villages')->insert(['id'=>48294, 'districts_id'=>4260, 'zipcode'=>'97599', 'name'=>'Lalasa']);
        DB::table('villages')->insert(['id'=>48295, 'districts_id'=>4260, 'zipcode'=>'97599', 'name'=>'Magat']);
        DB::table('villages')->insert(['id'=>48296, 'districts_id'=>4260, 'zipcode'=>'97599', 'name'=>'Perik Basaranggi']);
        DB::table('villages')->insert(['id'=>48297, 'districts_id'=>4260, 'zipcode'=>'97599', 'name'=>'Pulau Panjang']);
        DB::table('villages')->insert(['id'=>48298, 'districts_id'=>4260, 'zipcode'=>'97599', 'name'=>'Ruku Ruku']);

        //Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('cities')->insert(['id'=>246, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Seram Bagian Barat']);
        //Kecamatan Taniwel Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4261, 'city_id'=>246, 'name'=>'Taniwel']);
        DB::table('villages')->insert(['id'=>48299, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Buria']);
        DB::table('villages')->insert(['id'=>48300, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Hulung']);
        DB::table('villages')->insert(['id'=>48301, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Kasieh']);
        DB::table('villages')->insert(['id'=>48302, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Laturake']);
        DB::table('villages')->insert(['id'=>48303, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Lisabata (lisabata Barat)']);
        DB::table('villages')->insert(['id'=>48304, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Lohia Sapalewa']);
        DB::table('villages')->insert(['id'=>48305, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Murnaten / Mornaten']);
        DB::table('villages')->insert(['id'=>48306, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Nikulukan']);
        DB::table('villages')->insert(['id'=>48307, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Niniari']);
        DB::table('villages')->insert(['id'=>48308, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Niwelehu']);
        DB::table('villages')->insert(['id'=>48309, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Nukuhai']);
        DB::table('villages')->insert(['id'=>48310, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Nuniali']);
        DB::table('villages')->insert(['id'=>48311, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Pasinalo']);
        DB::table('villages')->insert(['id'=>48312, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Patahuwe']);
        DB::table('villages')->insert(['id'=>48313, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Riring']);
        DB::table('villages')->insert(['id'=>48314, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Rumahsoal']);
        DB::table('villages')->insert(['id'=>48315, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Taniwel']);
        DB::table('villages')->insert(['id'=>48316, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Uweth / Uweh']);
        DB::table('villages')->insert(['id'=>48317, 'districts_id'=>4261, 'zipcode'=>'97561', 'name'=>'Wakolo']);
        //Kecamatan Taniwel Timur Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4262, 'city_id'=>246, 'name'=>'Taniwel Timur']);
        DB::table('villages')->insert(['id'=>48318, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Hatunuru']);
        DB::table('villages')->insert(['id'=>48319, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Lumahlatal (lumalatal)']);
        DB::table('villages')->insert(['id'=>48320, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Lumahpelu (lumapelu)']);
        DB::table('villages')->insert(['id'=>48321, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Makububui']);
        DB::table('villages')->insert(['id'=>48322, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Maloang']);
        DB::table('villages')->insert(['id'=>48323, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Masihuwey (musihbuway)']);
        DB::table('villages')->insert(['id'=>48324, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Matapa']);
        DB::table('villages')->insert(['id'=>48325, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Soakasale']);
        DB::table('villages')->insert(['id'=>48326, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Sohuwe']);
        DB::table('villages')->insert(['id'=>48327, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Solea']);
        DB::table('villages')->insert(['id'=>48328, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Sukaraja']);
        DB::table('villages')->insert(['id'=>48329, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Tounusa']);
        DB::table('villages')->insert(['id'=>48330, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Uwen Pantai']);
        DB::table('villages')->insert(['id'=>48331, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Walakone']);
        DB::table('villages')->insert(['id'=>48332, 'districts_id'=>4262, 'zipcode'=>'97561', 'name'=>'Waraloin']);
        //Kecamatan Huamual Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4263, 'city_id'=>246, 'name'=>'Huamual']);
        DB::table('villages')->insert(['id'=>48333, 'districts_id'=>4263, 'zipcode'=>'97562', 'name'=>'Ariate']);
        DB::table('villages')->insert(['id'=>48334, 'districts_id'=>4263, 'zipcode'=>'97562', 'name'=>'Iha']);
        DB::table('villages')->insert(['id'=>48335, 'districts_id'=>4263, 'zipcode'=>'97562', 'name'=>'Kulur']);
        DB::table('villages')->insert(['id'=>48336, 'districts_id'=>4263, 'zipcode'=>'97562', 'name'=>'Lokki']);
        DB::table('villages')->insert(['id'=>48337, 'districts_id'=>4263, 'zipcode'=>'97562', 'name'=>'Luhu']);
        //Kecamatan Seram Barat Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4264, 'city_id'=>246, 'name'=>'Seram Barat']);
        DB::table('villages')->insert(['id'=>48338, 'districts_id'=>4264, 'zipcode'=>'97562', 'name'=>'Eti / Ety']);
        DB::table('villages')->insert(['id'=>48339, 'districts_id'=>4264, 'zipcode'=>'97562', 'name'=>'Kaibobo (kaibobu)']);
        DB::table('villages')->insert(['id'=>48340, 'districts_id'=>4264, 'zipcode'=>'97562', 'name'=>'Kawa']);
        DB::table('villages')->insert(['id'=>48341, 'districts_id'=>4264, 'zipcode'=>'97562', 'name'=>'Lumoly (lumoli)']);
        DB::table('villages')->insert(['id'=>48342, 'districts_id'=>4264, 'zipcode'=>'97562', 'name'=>'Morekau']);
        DB::table('villages')->insert(['id'=>48343, 'districts_id'=>4264, 'zipcode'=>'97562', 'name'=>'Neniari / Niniari']);
        DB::table('villages')->insert(['id'=>48344, 'districts_id'=>4264, 'zipcode'=>'97562', 'name'=>'Piru']);
        //Kecamatan Elpaputih Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4265, 'city_id'=>246, 'name'=>'Elpaputih']);
        DB::table('villages')->insert(['id'=>48345, 'districts_id'=>4265, 'zipcode'=>'97566', 'name'=>'Abio Ahiolo']);
        DB::table('villages')->insert(['id'=>48346, 'districts_id'=>4265, 'zipcode'=>'97566', 'name'=>'Elpaputih']);
        DB::table('villages')->insert(['id'=>48347, 'districts_id'=>4265, 'zipcode'=>'97566', 'name'=>'Huku Kecil']);
        DB::table('villages')->insert(['id'=>48348, 'districts_id'=>4265, 'zipcode'=>'97566', 'name'=>'Sanahu']);
        DB::table('villages')->insert(['id'=>48349, 'districts_id'=>4265, 'zipcode'=>'97566', 'name'=>'Sumeith/sameith Pasinaro']);
        DB::table('villages')->insert(['id'=>48350, 'districts_id'=>4265, 'zipcode'=>'97566', 'name'=>'Waisa']);
        DB::table('villages')->insert(['id'=>48351, 'districts_id'=>4265, 'zipcode'=>'97566', 'name'=>'Watuy (watui)']);
        //Kecamatan Kairatu Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4266, 'city_id'=>246, 'name'=>'Kairatu']);
        DB::table('villages')->insert(['id'=>48352, 'districts_id'=>4266, 'zipcode'=>'97566', 'name'=>'Hatusua']);
        DB::table('villages')->insert(['id'=>48353, 'districts_id'=>4266, 'zipcode'=>'97566', 'name'=>'Kairatu']);
        DB::table('villages')->insert(['id'=>48354, 'districts_id'=>4266, 'zipcode'=>'97566', 'name'=>'Kamarian']);
        DB::table('villages')->insert(['id'=>48355, 'districts_id'=>4266, 'zipcode'=>'97566', 'name'=>'Seruawan']);
        DB::table('villages')->insert(['id'=>48356, 'districts_id'=>4266, 'zipcode'=>'97566', 'name'=>'Uraur']);
        DB::table('villages')->insert(['id'=>48357, 'districts_id'=>4266, 'zipcode'=>'97566', 'name'=>'Waimital']);
        DB::table('villages')->insert(['id'=>48358, 'districts_id'=>4266, 'zipcode'=>'97566', 'name'=>'Waipirit']);
        //Kecamatan Amalatu Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4267, 'city_id'=>246, 'name'=>'Amalatu']);
        DB::table('villages')->insert(['id'=>48359, 'districts_id'=>4267, 'zipcode'=>'97566', 'name'=>'Hualoy']);
        DB::table('villages')->insert(['id'=>48360, 'districts_id'=>4267, 'zipcode'=>'97566', 'name'=>'Latu']);
        DB::table('villages')->insert(['id'=>48361, 'districts_id'=>4267, 'zipcode'=>'97566', 'name'=>'Rumahkay']);
        DB::table('villages')->insert(['id'=>48362, 'districts_id'=>4267, 'zipcode'=>'97566', 'name'=>'Seriholo']);
        DB::table('villages')->insert(['id'=>48363, 'districts_id'=>4267, 'zipcode'=>'97566', 'name'=>'Tala']);
        DB::table('villages')->insert(['id'=>48364, 'districts_id'=>4267, 'zipcode'=>'97566', 'name'=>'Tihulale']);
        DB::table('villages')->insert(['id'=>48365, 'districts_id'=>4267, 'zipcode'=>'97566', 'name'=>'Tomalehu']);
        //Kecamatan Inamosol Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4268, 'city_id'=>246, 'name'=>'Inamosol']);
        DB::table('villages')->insert(['id'=>48366, 'districts_id'=>4268, 'zipcode'=>'97566', 'name'=>'Huku Anakota']);
        DB::table('villages')->insert(['id'=>48367, 'districts_id'=>4268, 'zipcode'=>'97566', 'name'=>'Hunitetu']);
        DB::table('villages')->insert(['id'=>48368, 'districts_id'=>4268, 'zipcode'=>'97566', 'name'=>'Manusa']);
        DB::table('villages')->insert(['id'=>48369, 'districts_id'=>4268, 'zipcode'=>'97566', 'name'=>'Rambatu']);
        DB::table('villages')->insert(['id'=>48370, 'districts_id'=>4268, 'zipcode'=>'97566', 'name'=>'Rumberu']);
        //Kecamatan Kairatu Barat Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4269, 'city_id'=>246, 'name'=>'Kairatu Barat']);
        DB::table('villages')->insert(['id'=>48371, 'districts_id'=>4269, 'zipcode'=>'97566', 'name'=>'Kamal']);
        DB::table('villages')->insert(['id'=>48372, 'districts_id'=>4269, 'zipcode'=>'97566', 'name'=>'Lohiatala']);
        DB::table('villages')->insert(['id'=>48373, 'districts_id'=>4269, 'zipcode'=>'97566', 'name'=>'Nuruwe (nurue)']);
        DB::table('villages')->insert(['id'=>48374, 'districts_id'=>4269, 'zipcode'=>'97566', 'name'=>'Waesamu (waisamu)']);
        DB::table('villages')->insert(['id'=>48375, 'districts_id'=>4269, 'zipcode'=>'97566', 'name'=>'Waihatu']);
        DB::table('villages')->insert(['id'=>48376, 'districts_id'=>4269, 'zipcode'=>'97566', 'name'=>'Waisarisa']);
        //Kecamatan Huamual Belakang (waisala) Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4270, 'city_id'=>246, 'name'=>'Huamual Belakang (waisala)']);
        DB::table('villages')->insert(['id'=>48377, 'districts_id'=>4270, 'zipcode'=>'97567', 'name'=>'Alang Asaude']);
        DB::table('villages')->insert(['id'=>48378, 'districts_id'=>4270, 'zipcode'=>'97567', 'name'=>'Buano/boano Selatan']);
        DB::table('villages')->insert(['id'=>48379, 'districts_id'=>4270, 'zipcode'=>'97567', 'name'=>'Buano/boano Utara']);
        DB::table('villages')->insert(['id'=>48380, 'districts_id'=>4270, 'zipcode'=>'97567', 'name'=>'Sole']);
        DB::table('villages')->insert(['id'=>48381, 'districts_id'=>4270, 'zipcode'=>'97567', 'name'=>'Tahalupu']);
        DB::table('villages')->insert(['id'=>48382, 'districts_id'=>4270, 'zipcode'=>'97567', 'name'=>'Tonujaya']);
        DB::table('villages')->insert(['id'=>48383, 'districts_id'=>4270, 'zipcode'=>'97567', 'name'=>'Waesala (waisala)']);
        //Kecamatan Kepulauan Manipa Kab. Seram Bagian Barat Provinsi Maluku
        DB::table('districts')->insert(['id'=>4271, 'city_id'=>246, 'name'=>'Kepulauan Manipa']);
        DB::table('villages')->insert(['id'=>48384, 'districts_id'=>4271, 'zipcode'=>'97567', 'name'=>'Buano Hatuputih']);
        DB::table('villages')->insert(['id'=>48385, 'districts_id'=>4271, 'zipcode'=>'97567', 'name'=>'Kelang Asaude']);
        DB::table('villages')->insert(['id'=>48386, 'districts_id'=>4271, 'zipcode'=>'97567', 'name'=>'Luhutuban']);
        DB::table('villages')->insert(['id'=>48387, 'districts_id'=>4271, 'zipcode'=>'97567', 'name'=>'Masawoi']);
        DB::table('villages')->insert(['id'=>48388, 'districts_id'=>4271, 'zipcode'=>'97567', 'name'=>'Tomalehu Barat (tumalehu Barat)']);
        DB::table('villages')->insert(['id'=>48389, 'districts_id'=>4271, 'zipcode'=>'97567', 'name'=>'Tomalehu Timur (tumalehu Timur)']);
        DB::table('villages')->insert(['id'=>48390, 'districts_id'=>4271, 'zipcode'=>'97567', 'name'=>'Tuniwara']);

        //Kab. Buru Provinsi Maluku
        DB::table('cities')->insert(['id'=>247, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Buru']);
        //Kecamatan Namlea Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4272, 'city_id'=>247, 'name'=>'Namlea']);
        DB::table('villages')->insert(['id'=>48391, 'districts_id'=>4272, 'zipcode'=>'97571', 'name'=>'Batu Boy']);
        DB::table('villages')->insert(['id'=>48392, 'districts_id'=>4272, 'zipcode'=>'97571', 'name'=>'Jamilu']);
        DB::table('villages')->insert(['id'=>48393, 'districts_id'=>4272, 'zipcode'=>'97571', 'name'=>'Karang Jaya']);
        DB::table('villages')->insert(['id'=>48394, 'districts_id'=>4272, 'zipcode'=>'97571', 'name'=>'Lala']);
        DB::table('villages')->insert(['id'=>48395, 'districts_id'=>4272, 'zipcode'=>'97571', 'name'=>'Namlea']);
        DB::table('villages')->insert(['id'=>48396, 'districts_id'=>4272, 'zipcode'=>'97571', 'name'=>'Sanleko']);
        DB::table('villages')->insert(['id'=>48397, 'districts_id'=>4272, 'zipcode'=>'97571', 'name'=>'Siahoni']);
        //Kecamatan Waplau Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4273, 'city_id'=>247, 'name'=>'Waplau']);
        DB::table('villages')->insert(['id'=>48398, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Hatawano']);
        DB::table('villages')->insert(['id'=>48399, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Lamahang']);
        DB::table('villages')->insert(['id'=>48400, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Namsina']);
        DB::table('villages')->insert(['id'=>48401, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Samalagi']);
        DB::table('villages')->insert(['id'=>48402, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Skikilale']);
        DB::table('villages')->insert(['id'=>48403, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Waepotih']);
        DB::table('villages')->insert(['id'=>48404, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Waeura']);
        DB::table('villages')->insert(['id'=>48405, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Wailihang (waelihang)']);
        DB::table('villages')->insert(['id'=>48406, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Waplau']);
        DB::table('villages')->insert(['id'=>48407, 'districts_id'=>4273, 'zipcode'=>'97571', 'name'=>'Waprea']);
        //Kecamatan Lilialy Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4274, 'city_id'=>247, 'name'=>'Lilialy']);
        DB::table('villages')->insert(['id'=>48408, 'districts_id'=>4274, 'zipcode'=>'97571', 'name'=>'Jikumarasa (jikumerasa)']);
        DB::table('villages')->insert(['id'=>48409, 'districts_id'=>4274, 'zipcode'=>'97571', 'name'=>'Sawa']);
        DB::table('villages')->insert(['id'=>48410, 'districts_id'=>4274, 'zipcode'=>'97571', 'name'=>'Ubung']);
        DB::table('villages')->insert(['id'=>48411, 'districts_id'=>4274, 'zipcode'=>'97571', 'name'=>'Waeperang']);
        DB::table('villages')->insert(['id'=>48412, 'districts_id'=>4274, 'zipcode'=>'97571', 'name'=>'Waimiting (waemiting)']);
        //Kecamatan Airbuaya Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4275, 'city_id'=>247, 'name'=>'Airbuaya']);
        DB::table('villages')->insert(['id'=>48413, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Air Buaya']);
        DB::table('villages')->insert(['id'=>48414, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Awilinan']);
        DB::table('villages')->insert(['id'=>48415, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Bara']);
        DB::table('villages')->insert(['id'=>48416, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Batlale']);
        DB::table('villages')->insert(['id'=>48417, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>48418, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Selwadu']);
        DB::table('villages')->insert(['id'=>48419, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Tanjung Karang']);
        DB::table('villages')->insert(['id'=>48420, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Waimangit (waemangit)']);
        DB::table('villages')->insert(['id'=>48421, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Waipure (waepure)']);
        DB::table('villages')->insert(['id'=>48422, 'districts_id'=>4275, 'zipcode'=>'97572', 'name'=>'Wasbaka']);
        //Kecamatan Fena Leisela Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4276, 'city_id'=>247, 'name'=>'Fena Leisela']);
        DB::table('villages')->insert(['id'=>48423, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Balbalu']);
        DB::table('villages')->insert(['id'=>48424, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Lemanpoli']);
        DB::table('villages')->insert(['id'=>48425, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Raheriat']);
        DB::table('villages')->insert(['id'=>48426, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Waedanga']);
        DB::table('villages')->insert(['id'=>48427, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Waekose']);
        DB::table('villages')->insert(['id'=>48428, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Waelana-lana']);
        DB::table('villages')->insert(['id'=>48429, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Waemite']);
        DB::table('villages')->insert(['id'=>48430, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Waereman']);
        DB::table('villages')->insert(['id'=>48431, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Wainibe (waenibe)']);
        DB::table('villages')->insert(['id'=>48432, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Wamana Baru']);
        DB::table('villages')->insert(['id'=>48433, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Wamlana']);
        DB::table('villages')->insert(['id'=>48434, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Wasi']);
        DB::table('villages')->insert(['id'=>48435, 'districts_id'=>4276, 'zipcode'=>'97572', 'name'=>'Waspait']);
        //Kecamatan Waelata Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4277, 'city_id'=>247, 'name'=>'Waelata']);
        DB::table('villages')->insert(['id'=>48436, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Basalale']);
        DB::table('villages')->insert(['id'=>48437, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Dava']);
        DB::table('villages')->insert(['id'=>48438, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Deboway / Debowae']);
        DB::table('villages')->insert(['id'=>48439, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Parbulu']);
        DB::table('villages')->insert(['id'=>48440, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Waehata']);
        DB::table('villages')->insert(['id'=>48441, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Waeleman']);
        DB::table('villages')->insert(['id'=>48442, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Waelo']);
        DB::table('villages')->insert(['id'=>48443, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Waetina']);
        DB::table('villages')->insert(['id'=>48444, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Waflan']);
        DB::table('villages')->insert(['id'=>48445, 'districts_id'=>4277, 'zipcode'=>'97574', 'name'=>'Widit']);
        //Kecamatan Batabual Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4278, 'city_id'=>247, 'name'=>'Batabual']);
        DB::table('villages')->insert(['id'=>48446, 'districts_id'=>4278, 'zipcode'=>'97574', 'name'=>'Batu Jungku']);
        DB::table('villages')->insert(['id'=>48447, 'districts_id'=>4278, 'zipcode'=>'97574', 'name'=>'Ilath']);
        DB::table('villages')->insert(['id'=>48448, 'districts_id'=>4278, 'zipcode'=>'97574', 'name'=>'Namlea Ilath']);
        DB::table('villages')->insert(['id'=>48449, 'districts_id'=>4278, 'zipcode'=>'97574', 'name'=>'Pela']);
        DB::table('villages')->insert(['id'=>48450, 'districts_id'=>4278, 'zipcode'=>'97574', 'name'=>'Waemorat']);
        //Kecamatan Waeapo Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4279, 'city_id'=>247, 'name'=>'Waeapo']);
        DB::table('villages')->insert(['id'=>48451, 'districts_id'=>4279, 'zipcode'=>'97574', 'name'=>'Gogorea']);
        DB::table('villages')->insert(['id'=>48452, 'districts_id'=>4279, 'zipcode'=>'97574', 'name'=>'Savana Jaya']);
        DB::table('villages')->insert(['id'=>48453, 'districts_id'=>4279, 'zipcode'=>'97574', 'name'=>'Waekasar']);
        DB::table('villages')->insert(['id'=>48454, 'districts_id'=>4279, 'zipcode'=>'97574', 'name'=>'Waekerta']);
        DB::table('villages')->insert(['id'=>48455, 'districts_id'=>4279, 'zipcode'=>'97574', 'name'=>'Waenetat']);
        DB::table('villages')->insert(['id'=>48456, 'districts_id'=>4279, 'zipcode'=>'97574', 'name'=>'Waetele']);
        DB::table('villages')->insert(['id'=>48457, 'districts_id'=>4279, 'zipcode'=>'97574', 'name'=>'Wanareja']);
        //Kecamatan Lolong Guba Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4280, 'city_id'=>247, 'name'=>'Lolong Guba']);
        DB::table('villages')->insert(['id'=>48458, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Grandeng']);
        DB::table('villages')->insert(['id'=>48459, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Kubalahin']);
        DB::table('villages')->insert(['id'=>48460, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Lele']);
        DB::table('villages')->insert(['id'=>48461, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Nafrua']);
        DB::table('villages')->insert(['id'=>48462, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Ohilahin']);
        DB::table('villages')->insert(['id'=>48463, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Tifu']);
        DB::table('villages')->insert(['id'=>48464, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Wabloy']);
        DB::table('villages')->insert(['id'=>48465, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Waegeren']);
        DB::table('villages')->insert(['id'=>48466, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Wanakarta']);
        DB::table('villages')->insert(['id'=>48467, 'districts_id'=>4280, 'zipcode'=>'97574', 'name'=>'Wapsalit']);
        //Kecamatan Teluk Kaiely Kab. Buru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4281, 'city_id'=>247, 'name'=>'Teluk Kaiely']);
        DB::table('villages')->insert(['id'=>48468, 'districts_id'=>4281, 'zipcode'=>'97574', 'name'=>'Kaiely (kayeli)']);
        DB::table('villages')->insert(['id'=>48469, 'districts_id'=>4281, 'zipcode'=>'97574', 'name'=>'Kaki Air']);
        DB::table('villages')->insert(['id'=>48470, 'districts_id'=>4281, 'zipcode'=>'97574', 'name'=>'Masarete']);
        DB::table('villages')->insert(['id'=>48471, 'districts_id'=>4281, 'zipcode'=>'97574', 'name'=>'Seith']);
        DB::table('villages')->insert(['id'=>48472, 'districts_id'=>4281, 'zipcode'=>'97574', 'name'=>'Waelapia']);

        //Kab. Maluku Tenggara Provinsi Maluku
        DB::table('cities')->insert(['id'=>248, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Maluku Tenggara']);
        //Kecamatan Hoat Sorbay Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4282, 'city_id'=>248, 'name'=>'Hoat Sorbay']);
        DB::table('villages')->insert(['id'=>48473, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Arso']);
        DB::table('villages')->insert(['id'=>48474, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Dian Darat']);
        DB::table('villages')->insert(['id'=>48475, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Dian Pulau']);
        DB::table('villages')->insert(['id'=>48476, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Evu']);
        DB::table('villages')->insert(['id'=>48477, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Letvuan']);
        DB::table('villages')->insert(['id'=>48478, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Madwat']);
        DB::table('villages')->insert(['id'=>48479, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Ngursit']);
        DB::table('villages')->insert(['id'=>48480, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Ohoibadar']);
        DB::table('villages')->insert(['id'=>48481, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Tetoat']);
        DB::table('villages')->insert(['id'=>48482, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Wab']);
        DB::table('villages')->insert(['id'=>48483, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Warwut']);
        DB::table('villages')->insert(['id'=>48484, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Watngil']);
        DB::table('villages')->insert(['id'=>48485, 'districts_id'=>4282, 'zipcode'=>'97611', 'name'=>'Wirin']);
        //Kecamatan Manyeuw Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4283, 'city_id'=>248, 'name'=>'Manyeuw']);
        DB::table('villages')->insert(['id'=>48486, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Debut']);
        DB::table('villages')->insert(['id'=>48487, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Lairngangas']);
        DB::table('villages')->insert(['id'=>48488, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Namar']);
        DB::table('villages')->insert(['id'=>48489, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Ngayub']);
        DB::table('villages')->insert(['id'=>48490, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Ngilngof']);
        DB::table('villages')->insert(['id'=>48491, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Ohoililir']);
        DB::table('villages')->insert(['id'=>48492, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Ohoiluk']);
        DB::table('villages')->insert(['id'=>48493, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Rumadian']);
        DB::table('villages')->insert(['id'=>48494, 'districts_id'=>4283, 'zipcode'=>'97611', 'name'=>'Selayar']);
        //Kecamatan Kei Kecil Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4284, 'city_id'=>248, 'name'=>'Kei Kecil']);
        DB::table('villages')->insert(['id'=>48495, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Dudunwahan']);
        DB::table('villages')->insert(['id'=>48496, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Faan']);
        DB::table('villages')->insert(['id'=>48497, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Ibra']);
        DB::table('villages')->insert(['id'=>48498, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Kelanit']);
        DB::table('villages')->insert(['id'=>48499, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Kolser']);
        DB::table('villages')->insert(['id'=>48500, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Langgur']);
        DB::table('villages')->insert(['id'=>48501, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Letman']);
        DB::table('villages')->insert(['id'=>48502, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Loon']);
        DB::table('villages')->insert(['id'=>48503, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Ngabub']);
        DB::table('villages')->insert(['id'=>48504, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Ohodertawun']);
        DB::table('villages')->insert(['id'=>48505, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Ohoider Atas']);
        DB::table('villages')->insert(['id'=>48506, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Ohoijang/ohoiyong Watdek']);
        DB::table('villages')->insert(['id'=>48507, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Sathean']);
        DB::table('villages')->insert(['id'=>48508, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Sitniohoi']);
        DB::table('villages')->insert(['id'=>48509, 'districts_id'=>4284, 'zipcode'=>'97611', 'name'=>'Wearlilir']);
        //Kecamatan Kei Kecil Timur Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4285, 'city_id'=>248, 'name'=>'Kei Kecil Timur']);
        DB::table('villages')->insert(['id'=>48510, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Abean']);
        DB::table('villages')->insert(['id'=>48511, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Denwet']);
        DB::table('villages')->insert(['id'=>48512, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Disuk']);
        DB::table('villages')->insert(['id'=>48513, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Iso']);
        DB::table('villages')->insert(['id'=>48514, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Marfun']);
        DB::table('villages')->insert(['id'=>48515, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Mastur']);
        DB::table('villages')->insert(['id'=>48516, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Mastur']);
        DB::table('villages')->insert(['id'=>48517, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Ohoilus']);
        DB::table('villages')->insert(['id'=>48518, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Ohoinol']);
        DB::table('villages')->insert(['id'=>48519, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Raat']);
        DB::table('villages')->insert(['id'=>48520, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Revav (rewav)']);
        DB::table('villages')->insert(['id'=>48521, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Rumat']);
        DB::table('villages')->insert(['id'=>48522, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Semawi']);
        DB::table('villages')->insert(['id'=>48523, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Tenbuk']);
        DB::table('villages')->insert(['id'=>48524, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Wain']);
        DB::table('villages')->insert(['id'=>48525, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Wain Baru']);
        DB::table('villages')->insert(['id'=>48526, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Watngon']);
        DB::table('villages')->insert(['id'=>48527, 'districts_id'=>4285, 'zipcode'=>'97615', 'name'=>'Yafavun']);
        //Kecamatan Kei Kecil Timur Selatan Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4286, 'city_id'=>248, 'name'=>'Kei Kecil Timur Selatan']);
        DB::table('villages')->insert(['id'=>48528, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Danar Lumefar']);
        DB::table('villages')->insert(['id'=>48529, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Danar Ohoiseb']);
        DB::table('villages')->insert(['id'=>48530, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Danar Ternate']);
        DB::table('villages')->insert(['id'=>48531, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Elaar Lamagorang']);
        DB::table('villages')->insert(['id'=>48532, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Elaar Let']);
        DB::table('villages')->insert(['id'=>48533, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Elaar Ngursoin']);
        DB::table('villages')->insert(['id'=>48534, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Garara']);
        DB::table('villages')->insert(['id'=>48535, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Maar']);
        DB::table('villages')->insert(['id'=>48536, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Ngurwul']);
        DB::table('villages')->insert(['id'=>48537, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Sare']);
        DB::table('villages')->insert(['id'=>48538, 'districts_id'=>4286, 'zipcode'=>'97615', 'name'=>'Uf']);
        //Kecamatan Kei Kecil Barat Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4287, 'city_id'=>248, 'name'=>'Kei Kecil Barat']);
        DB::table('villages')->insert(['id'=>48539, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Matwair (madwaer)']);
        DB::table('villages')->insert(['id'=>48540, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Ohoidertom']);
        DB::table('villages')->insert(['id'=>48541, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Ohoidertutu']);
        DB::table('villages')->insert(['id'=>48542, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Ohoira']);
        DB::table('villages')->insert(['id'=>48543, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Ohoiren']);
        DB::table('villages')->insert(['id'=>48544, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Somlain']);
        DB::table('villages')->insert(['id'=>48545, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Tanimbar Kei']);
        DB::table('villages')->insert(['id'=>48546, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Ur Pulau']);
        DB::table('villages')->insert(['id'=>48547, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Warbal']);
        DB::table('villages')->insert(['id'=>48548, 'districts_id'=>4287, 'zipcode'=>'97615', 'name'=>'Yatwav']);
        //Kecamatan Kei Besar Utara Barat Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4288, 'city_id'=>248, 'name'=>'Kei Besar Utara Barat']);
        DB::table('villages')->insert(['id'=>48549, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Ad Ngurwul']);
        DB::table('villages')->insert(['id'=>48550, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Ad Ohoiwaf']);
        DB::table('villages')->insert(['id'=>48551, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Ad Wearaur']);
        DB::table('villages')->insert(['id'=>48552, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Dangarat']);
        DB::table('villages')->insert(['id'=>48553, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Faa']);
        DB::table('villages')->insert(['id'=>48554, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Hangur']);
        DB::table('villages')->insert(['id'=>48555, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Hoor Islam']);
        DB::table('villages')->insert(['id'=>48556, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Hoor Kristen']);
        DB::table('villages')->insert(['id'=>48557, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Laar Perda']);
        DB::table('villages')->insert(['id'=>48558, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Mun Essoy']);
        DB::table('villages')->insert(['id'=>48559, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Mun Kahar']);
        DB::table('villages')->insert(['id'=>48560, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Mun Ngurditwain']);
        DB::table('villages')->insert(['id'=>48561, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Mun Ohoiir']);
        DB::table('villages')->insert(['id'=>48562, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Mun Ohoitadium']);
        DB::table('villages')->insert(['id'=>48563, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Mun Werfan']);
        DB::table('villages')->insert(['id'=>48564, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Ngurwalek']);
        DB::table('villages')->insert(['id'=>48565, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Ohoituf']);
        DB::table('villages')->insert(['id'=>48566, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Uwat']);
        DB::table('villages')->insert(['id'=>48567, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Uwat Reyaan']);
        DB::table('villages')->insert(['id'=>48568, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Uwat Wear']);
        DB::table('villages')->insert(['id'=>48569, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Waer']);
        DB::table('villages')->insert(['id'=>48570, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Waerat']);
        DB::table('villages')->insert(['id'=>48571, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Weer Frawaf']);
        DB::table('villages')->insert(['id'=>48572, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Weer Ohoiker']);
        DB::table('villages')->insert(['id'=>48573, 'districts_id'=>4288, 'zipcode'=>'97661', 'name'=>'Weer Ohoinam']);
        //Kecamatan Kei Besar Utara Timur Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4289, 'city_id'=>248, 'name'=>'Kei Besar Utara Timur']);
        DB::table('villages')->insert(['id'=>48574, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Banda Efruan']);
        DB::table('villages')->insert(['id'=>48575, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Banda Eli/ely']);
        DB::table('villages')->insert(['id'=>48576, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Banda Suku Tigapuluh']);
        DB::table('villages')->insert(['id'=>48577, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Fanwav']);
        DB::table('villages')->insert(['id'=>48578, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Haar Ohoimel']);
        DB::table('villages')->insert(['id'=>48579, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Haar Ohoimur Gpm']);
        DB::table('villages')->insert(['id'=>48580, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Haar Ohoimur Rk']);
        DB::table('villages')->insert(['id'=>48581, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Haar Ohoiwait']);
        DB::table('villages')->insert(['id'=>48582, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Haar Renrahantel']);
        DB::table('villages')->insert(['id'=>48583, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Haar Wassar']);
        DB::table('villages')->insert(['id'=>48584, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Hoko']);
        DB::table('villages')->insert(['id'=>48585, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Hollat']);
        DB::table('villages')->insert(['id'=>48586, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Hollat Solair']);
        DB::table('villages')->insert(['id'=>48587, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Hollay']);
        DB::table('villages')->insert(['id'=>48588, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Kilwair']);
        DB::table('villages')->insert(['id'=>48589, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Langgiar Haar']);
        DB::table('villages')->insert(['id'=>48590, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Ohoifaruan']);
        DB::table('villages')->insert(['id'=>48591, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Ohoifau']);
        DB::table('villages')->insert(['id'=>48592, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Ohoimajang']);
        DB::table('villages')->insert(['id'=>48593, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Ohoiraut']);
        DB::table('villages')->insert(['id'=>48594, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Ohoiwirin']);
        DB::table('villages')->insert(['id'=>48595, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Renfaan Gpm']);
        DB::table('villages')->insert(['id'=>48596, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Renfaan Islam']);
        DB::table('villages')->insert(['id'=>48597, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Renfan (renfaan)']);
        DB::table('villages')->insert(['id'=>48598, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Soin']);
        DB::table('villages')->insert(['id'=>48599, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Tuburlay']);
        DB::table('villages')->insert(['id'=>48600, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Tuburngil']);
        DB::table('villages')->insert(['id'=>48601, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Ur']);
        DB::table('villages')->insert(['id'=>48602, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Watlar']);
        DB::table('villages')->insert(['id'=>48603, 'districts_id'=>4289, 'zipcode'=>'97661', 'name'=>'Yamtimur']);
        //Kecamatan Kei Besar Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4290, 'city_id'=>248, 'name'=>'Kei Besar']);
        DB::table('villages')->insert(['id'=>48604, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Bombay']);
        DB::table('villages')->insert(['id'=>48605, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Daftel']);
        DB::table('villages')->insert(['id'=>48606, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Depur']);
        DB::table('villages')->insert(['id'=>48607, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Elat']);
        DB::table('villages')->insert(['id'=>48608, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Elralang']);
        DB::table('villages')->insert(['id'=>48609, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Fako']);
        DB::table('villages')->insert(['id'=>48610, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Fangamas']);
        DB::table('villages')->insert(['id'=>48611, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Harangur']);
        DB::table('villages')->insert(['id'=>48612, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Karkarit']);
        DB::table('villages')->insert(['id'=>48613, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ler Ohoilim']);
        DB::table('villages')->insert(['id'=>48614, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Mataholat']);
        DB::table('villages')->insert(['id'=>48615, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Nabaheng']);
        DB::table('villages')->insert(['id'=>48616, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ngat']);
        DB::table('villages')->insert(['id'=>48617, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ngefuit']);
        DB::table('villages')->insert(['id'=>48618, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ngefuit Atas']);
        DB::table('villages')->insert(['id'=>48619, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ngurdu']);
        DB::table('villages')->insert(['id'=>48620, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ohoiel']);
        DB::table('villages')->insert(['id'=>48621, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ohoilim']);
        DB::table('villages')->insert(['id'=>48622, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ohoinangan']);
        DB::table('villages')->insert(['id'=>48623, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ohoinangan']);
        DB::table('villages')->insert(['id'=>48624, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ohoiwait']);
        DB::table('villages')->insert(['id'=>48625, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Ohoiwang']);
        DB::table('villages')->insert(['id'=>48626, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Rahareng']);
        DB::table('villages')->insert(['id'=>48627, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Rahareng Atas']);
        DB::table('villages')->insert(['id'=>48628, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Reyamru']);
        DB::table('villages')->insert(['id'=>48629, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Sirbante']);
        DB::table('villages')->insert(['id'=>48630, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Soinrat']);
        DB::table('villages')->insert(['id'=>48631, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Udar']);
        DB::table('villages')->insert(['id'=>48632, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Wakol']);
        DB::table('villages')->insert(['id'=>48633, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Watsin']);
        DB::table('villages')->insert(['id'=>48634, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Watuar']);
        DB::table('villages')->insert(['id'=>48635, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Waur']);
        DB::table('villages')->insert(['id'=>48636, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Waurtahait']);
        DB::table('villages')->insert(['id'=>48637, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Werka']);
        DB::table('villages')->insert(['id'=>48638, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Wermaf']);
        DB::table('villages')->insert(['id'=>48639, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Wulurat']);
        DB::table('villages')->insert(['id'=>48640, 'districts_id'=>4290, 'zipcode'=>'97661', 'name'=>'Yamtel']);
        //Kecamatan Kei Besar Selatan Barat Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4291, 'city_id'=>248, 'name'=>'Kei Besar Selatan Barat']);
        DB::table('villages')->insert(['id'=>48641, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Feer']);
        DB::table('villages')->insert(['id'=>48642, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Hoat']);
        DB::table('villages')->insert(['id'=>48643, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Hoko']);
        DB::table('villages')->insert(['id'=>48644, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Ngafan']);
        DB::table('villages')->insert(['id'=>48645, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Ngan']);
        DB::table('villages')->insert(['id'=>48646, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Ngurko']);
        DB::table('villages')->insert(['id'=>48647, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Ohoilean']);
        DB::table('villages')->insert(['id'=>48648, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Rahangiar']);
        DB::table('villages')->insert(['id'=>48649, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Rerean']);
        DB::table('villages')->insert(['id'=>48650, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Uat']);
        DB::table('villages')->insert(['id'=>48651, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Wafol']);
        DB::table('villages')->insert(['id'=>48652, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Watkidat']);
        DB::table('villages')->insert(['id'=>48653, 'districts_id'=>4291, 'zipcode'=>'97661', 'name'=>'Weduar Feer']);
        //Kecamatan Kei Besar Selatan Kab. Maluku Tenggara Provinsi Maluku
        DB::table('districts')->insert(['id'=>4292, 'city_id'=>248, 'name'=>'Kei Besar Selatan']);
        DB::table('villages')->insert(['id'=>48654, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Kilwat']);
        DB::table('villages')->insert(['id'=>48655, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Larat']);
        DB::table('villages')->insert(['id'=>48656, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Nerong']);
        DB::table('villages')->insert(['id'=>48657, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Ohoirenan']);
        DB::table('villages')->insert(['id'=>48658, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Sether (sather)']);
        DB::table('villages')->insert(['id'=>48659, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Soindat']);
        DB::table('villages')->insert(['id'=>48660, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Tamangil Nuhuten']);
        DB::table('villages')->insert(['id'=>48661, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Tamangil Nuhuyanat']);
        DB::table('villages')->insert(['id'=>48662, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Tutrean']);
        DB::table('villages')->insert(['id'=>48663, 'districts_id'=>4292, 'zipcode'=>'97661', 'name'=>'Weduar']);

        //Kota Tual Provinsi Maluku
        DB::table('cities')->insert(['id'=>249, 'province_id'=>19, 'type'=>'city', 'name'=>'Tual']);
        //Kecamatan Pulau Dullah Utara Kota Tual Provinsi Maluku
        DB::table('districts')->insert(['id'=>4293, 'city_id'=>249, 'name'=>'Pulau Dullah Utara']);
        DB::table('villages')->insert(['id'=>48664, 'districts_id'=>4293, 'zipcode'=>'97611', 'name'=>'Dullah (darat)']);
        DB::table('villages')->insert(['id'=>48665, 'districts_id'=>4293, 'zipcode'=>'97611', 'name'=>'Dullah Laut']);
        DB::table('villages')->insert(['id'=>48666, 'districts_id'=>4293, 'zipcode'=>'97611', 'name'=>'Fiditan']);
        DB::table('villages')->insert(['id'=>48667, 'districts_id'=>4293, 'zipcode'=>'97611', 'name'=>'Labetawi']);
        DB::table('villages')->insert(['id'=>48668, 'districts_id'=>4293, 'zipcode'=>'97611', 'name'=>'Ngadi']);
        DB::table('villages')->insert(['id'=>48669, 'districts_id'=>4293, 'zipcode'=>'97611', 'name'=>'Ohoitahit']);
        DB::table('villages')->insert(['id'=>48670, 'districts_id'=>4293, 'zipcode'=>'97611', 'name'=>'Ohoitel']);
        DB::table('villages')->insert(['id'=>48671, 'districts_id'=>4293, 'zipcode'=>'97611', 'name'=>'Tamedan']);
        //Kecamatan Pulau Dullah Selatan Kota Tual Provinsi Maluku
        DB::table('districts')->insert(['id'=>4294, 'city_id'=>249, 'name'=>'Pulau Dullah Selatan']);
        DB::table('villages')->insert(['id'=>48672, 'districts_id'=>4294, 'zipcode'=>'97611', 'name'=>'Ketsoblak']);
        DB::table('villages')->insert(['id'=>48673, 'districts_id'=>4294, 'zipcode'=>'97611', 'name'=>'Lodar Ell']);
        DB::table('villages')->insert(['id'=>48674, 'districts_id'=>4294, 'zipcode'=>'97611', 'name'=>'Masrum']);
        DB::table('villages')->insert(['id'=>48675, 'districts_id'=>4294, 'zipcode'=>'97611', 'name'=>'Taar']);
        DB::table('villages')->insert(['id'=>48676, 'districts_id'=>4294, 'zipcode'=>'97611', 'name'=>'Tual']);
        //Kecamatan Pulau Tayando Tam Kota Tual Provinsi Maluku
        DB::table('districts')->insert(['id'=>4295, 'city_id'=>249, 'name'=>'Pulau Tayando Tam']);
        DB::table('villages')->insert(['id'=>48677, 'districts_id'=>4295, 'zipcode'=>'97611', 'name'=>'Tam Ngurhir']);
        DB::table('villages')->insert(['id'=>48678, 'districts_id'=>4295, 'zipcode'=>'97611', 'name'=>'Tayando Langgiar']);
        DB::table('villages')->insert(['id'=>48679, 'districts_id'=>4295, 'zipcode'=>'97611', 'name'=>'Tayando Ohoiel']);
        DB::table('villages')->insert(['id'=>48680, 'districts_id'=>4295, 'zipcode'=>'97611', 'name'=>'Tayando Yamru']);
        DB::table('villages')->insert(['id'=>48681, 'districts_id'=>4295, 'zipcode'=>'97611', 'name'=>'Tayando Yamtel']);
        //Kecamatan Pulau-pulau Kur Kota Tual Provinsi Maluku
        DB::table('districts')->insert(['id'=>4296, 'city_id'=>249, 'name'=>'Pulau-pulau Kur']);
        DB::table('villages')->insert(['id'=>48682, 'districts_id'=>4296, 'zipcode'=>'97652', 'name'=>'Finualen']);
        DB::table('villages')->insert(['id'=>48683, 'districts_id'=>4296, 'zipcode'=>'97652', 'name'=>'Kaimear']);
        DB::table('villages')->insert(['id'=>48684, 'districts_id'=>4296, 'zipcode'=>'97652', 'name'=>'Lokwirin']);
        DB::table('villages')->insert(['id'=>48685, 'districts_id'=>4296, 'zipcode'=>'97652', 'name'=>'Tubyal']);
        //Kecamatan Kur Selatan Kota Tual Provinsi Maluku
        DB::table('districts')->insert(['id'=>4297, 'city_id'=>249, 'name'=>'Kur Selatan']);
        DB::table('villages')->insert(['id'=>48686, 'districts_id'=>4297, 'zipcode'=>'97652', 'name'=>'Hirit']);
        DB::table('villages')->insert(['id'=>48687, 'districts_id'=>4297, 'zipcode'=>'97652', 'name'=>'Kanara']);
        DB::table('villages')->insert(['id'=>48688, 'districts_id'=>4297, 'zipcode'=>'97652', 'name'=>'Mangur Niela']);
        DB::table('villages')->insert(['id'=>48689, 'districts_id'=>4297, 'zipcode'=>'97652', 'name'=>'Romoin']);
        DB::table('villages')->insert(['id'=>48690, 'districts_id'=>4297, 'zipcode'=>'97652', 'name'=>'Tiflean']);
        DB::table('villages')->insert(['id'=>48691, 'districts_id'=>4297, 'zipcode'=>'97652', 'name'=>'Warkar']);
        DB::table('villages')->insert(['id'=>48692, 'districts_id'=>4297, 'zipcode'=>'97652', 'name'=>'Yapas']);

        //Kab. Kepulauan Aru Provinsi Maluku
        DB::table('cities')->insert(['id'=>250, 'province_id'=>19, 'type'=>'regencies', 'name'=>'Kepulauan Aru']);
        //Kecamatan Pulau-pulau Aru Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4298, 'city_id'=>250, 'name'=>'Pulau-pulau Aru']);
        DB::table('villages')->insert(['id'=>48693, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Durjela']);
        DB::table('villages')->insert(['id'=>48694, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Galai Dubu']);
        DB::table('villages')->insert(['id'=>48695, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Gorar']);
        DB::table('villages')->insert(['id'=>48696, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Jabulenga']);
        DB::table('villages')->insert(['id'=>48697, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Karangguli']);
        DB::table('villages')->insert(['id'=>48698, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Kobraur']);
        DB::table('villages')->insert(['id'=>48699, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Lau-lau']);
        DB::table('villages')->insert(['id'=>48700, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Nafar (napar)']);
        DB::table('villages')->insert(['id'=>48701, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Samang']);
        DB::table('villages')->insert(['id'=>48702, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Siwalima']);
        DB::table('villages')->insert(['id'=>48703, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Tungu']);
        DB::table('villages')->insert(['id'=>48704, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Tunguwatu']);
        DB::table('villages')->insert(['id'=>48705, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Ujir']);
        DB::table('villages')->insert(['id'=>48706, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Wangel']);
        DB::table('villages')->insert(['id'=>48707, 'districts_id'=>4298, 'zipcode'=>'97662', 'name'=>'Wokam']);
        //Kecamatan Aru Utara Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4299, 'city_id'=>250, 'name'=>'Aru Utara']);
        DB::table('villages')->insert(['id'=>48708, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Foket']);
        DB::table('villages')->insert(['id'=>48709, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Jerwatu']);
        DB::table('villages')->insert(['id'=>48710, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Kabufin']);
        DB::table('villages')->insert(['id'=>48711, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Kaibolafin']);
        DB::table('villages')->insert(['id'=>48712, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Kolamar']);
        DB::table('villages')->insert(['id'=>48713, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Marlasi']);
        DB::table('villages')->insert(['id'=>48714, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Mesidang']);
        DB::table('villages')->insert(['id'=>48715, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Selmona']);
        DB::table('villages')->insert(['id'=>48716, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Tasin Waha']);
        DB::table('villages')->insert(['id'=>48717, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Wahangulangula']);
        DB::table('villages')->insert(['id'=>48718, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Wahayum / Wahayun']);
        DB::table('villages')->insert(['id'=>48719, 'districts_id'=>4299, 'zipcode'=>'97662', 'name'=>'Warialau']);
        //Kecamatan Aru Utara Timur Batuley Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4300, 'city_id'=>250, 'name'=>'Aru Utara Timur Batuley']);
        DB::table('villages')->insert(['id'=>48720, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Batulei (batuley)']);
        DB::table('villages')->insert(['id'=>48721, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Benjuring']);
        DB::table('villages')->insert(['id'=>48722, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Jursiang']);
        DB::table('villages')->insert(['id'=>48723, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Kabalsiang']);
        DB::table('villages')->insert(['id'=>48724, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Kobamar']);
        DB::table('villages')->insert(['id'=>48725, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Kompane']);
        DB::table('villages')->insert(['id'=>48726, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Kumul']);
        DB::table('villages')->insert(['id'=>48727, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Sewer']);
        DB::table('villages')->insert(['id'=>48728, 'districts_id'=>4300, 'zipcode'=>'97663', 'name'=>'Waria']);
        //Kecamatan Sir-sir Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4301, 'city_id'=>250, 'name'=>'Sir-sir']);
        DB::table('villages')->insert(['id'=>48729, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Berdefan']);
        DB::table('villages')->insert(['id'=>48730, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Goda Goda']);
        DB::table('villages')->insert(['id'=>48731, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Gomsey']);
        DB::table('villages')->insert(['id'=>48732, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Kolaha']);
        DB::table('villages')->insert(['id'=>48733, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Langhalau']);
        DB::table('villages')->insert(['id'=>48734, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Leiting']);
        DB::table('villages')->insert(['id'=>48735, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Mohongsel']);
        DB::table('villages')->insert(['id'=>48736, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Wafan']);
        DB::table('villages')->insert(['id'=>48737, 'districts_id'=>4301, 'zipcode'=>'97664', 'name'=>'Waiful (waifual)']);
        //Kecamatan Aru Tengah Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4302, 'city_id'=>250, 'name'=>'Aru Tengah']);
        DB::table('villages')->insert(['id'=>48738, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Algadang']);
        DB::table('villages')->insert(['id'=>48739, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Benjina']);
        DB::table('villages')->insert(['id'=>48740, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Fatlabata']);
        DB::table('villages')->insert(['id'=>48741, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Gardakau']);
        DB::table('villages')->insert(['id'=>48742, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Gulili']);
        DB::table('villages')->insert(['id'=>48743, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Irloy']);
        DB::table('villages')->insert(['id'=>48744, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Jirlay']);
        DB::table('villages')->insert(['id'=>48745, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Kobadangar']);
        DB::table('villages')->insert(['id'=>48746, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Kobasel Fara']);
        DB::table('villages')->insert(['id'=>48747, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Kobasel Timur']);
        DB::table('villages')->insert(['id'=>48748, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Kwarbola']);
        DB::table('villages')->insert(['id'=>48749, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Lorang']);
        DB::table('villages')->insert(['id'=>48750, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Maijuring']);
        DB::table('villages')->insert(['id'=>48751, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Manjau']);
        DB::table('villages')->insert(['id'=>48752, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Maririmar']);
        DB::table('villages')->insert(['id'=>48753, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Murai']);
        DB::table('villages')->insert(['id'=>48754, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Namara']);
        DB::table('villages')->insert(['id'=>48755, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Papakula']);
        DB::table('villages')->insert(['id'=>48756, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Selibata-bata']);
        DB::table('villages')->insert(['id'=>48757, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Selilau']);
        DB::table('villages')->insert(['id'=>48758, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Tanah Miring']);
        DB::table('villages')->insert(['id'=>48759, 'districts_id'=>4302, 'zipcode'=>'97665', 'name'=>'Wakua']);
        //Kecamatan Aru Tengah Selatan Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4303, 'city_id'=>250, 'name'=>'Aru Tengah Selatan']);
        DB::table('villages')->insert(['id'=>48760, 'districts_id'=>4303, 'zipcode'=>'97665', 'name'=>'Apara']);
        DB::table('villages')->insert(['id'=>48761, 'districts_id'=>4303, 'zipcode'=>'97665', 'name'=>'Bemun']);
        DB::table('villages')->insert(['id'=>48762, 'districts_id'=>4303, 'zipcode'=>'97665', 'name'=>'Gomo Gomo']);
        DB::table('villages')->insert(['id'=>48763, 'districts_id'=>4303, 'zipcode'=>'97665', 'name'=>'Jambu Air']);
        DB::table('villages')->insert(['id'=>48764, 'districts_id'=>4303, 'zipcode'=>'97665', 'name'=>'Longgar']);
        DB::table('villages')->insert(['id'=>48765, 'districts_id'=>4303, 'zipcode'=>'97665', 'name'=>'Mesiang']);
        DB::table('villages')->insert(['id'=>48766, 'districts_id'=>4303, 'zipcode'=>'97665', 'name'=>'Warabal']);
        //Kecamatan Aru Tengah Timur Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4304, 'city_id'=>250, 'name'=>'Aru Tengah Timur']);
        DB::table('villages')->insert(['id'=>48767, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Balatan']);
        DB::table('villages')->insert(['id'=>48768, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Basada']);
        DB::table('villages')->insert(['id'=>48769, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Dosinamalau']);
        DB::table('villages')->insert(['id'=>48770, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Kaiwabar']);
        DB::table('villages')->insert(['id'=>48771, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Karawai (karawain)']);
        DB::table('villages')->insert(['id'=>48772, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Kobror']);
        DB::table('villages')->insert(['id'=>48773, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Koijabi']);
        DB::table('villages')->insert(['id'=>48774, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Lola']);
        DB::table('villages')->insert(['id'=>48775, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Mariri']);
        DB::table('villages')->insert(['id'=>48776, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Ponom']);
        DB::table('villages')->insert(['id'=>48777, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Wailay']);
        DB::table('villages')->insert(['id'=>48778, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Warjukur']);
        DB::table('villages')->insert(['id'=>48779, 'districts_id'=>4304, 'zipcode'=>'97665', 'name'=>'Warloy']);
        //Kecamatan Aru Selatan Timur Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4305, 'city_id'=>250, 'name'=>'Aru Selatan Timur']);
        DB::table('villages')->insert(['id'=>48780, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Batugoyang']);
        DB::table('villages')->insert(['id'=>48781, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Beltubur']);
        DB::table('villages')->insert(['id'=>48782, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Dosimar']);
        DB::table('villages')->insert(['id'=>48783, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Gomarmeti']);
        DB::table('villages')->insert(['id'=>48784, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Gomarsungai']);
        DB::table('villages')->insert(['id'=>48785, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Jorang']);
        DB::table('villages')->insert(['id'=>48786, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Karey']);
        DB::table('villages')->insert(['id'=>48787, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Meror']);
        DB::table('villages')->insert(['id'=>48788, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Salarem']);
        DB::table('villages')->insert(['id'=>48789, 'districts_id'=>4305, 'zipcode'=>'97666', 'name'=>'Siya']);
        //Kecamatan Aru Selatan Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4306, 'city_id'=>250, 'name'=>'Aru Selatan']);
        DB::table('villages')->insert(['id'=>48790, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Doka Barat']);
        DB::table('villages')->insert(['id'=>48791, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Doka Timur']);
        DB::table('villages')->insert(['id'=>48792, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Fatural']);
        DB::table('villages')->insert(['id'=>48793, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Feruni']);
        DB::table('villages')->insert(['id'=>48794, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Gaimar']);
        DB::table('villages')->insert(['id'=>48795, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Jelia']);
        DB::table('villages')->insert(['id'=>48796, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Jerol']);
        DB::table('villages')->insert(['id'=>48797, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Kabalukin']);
        DB::table('villages')->insert(['id'=>48798, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Kalar-kalar']);
        DB::table('villages')->insert(['id'=>48799, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Laininir']);
        DB::table('villages')->insert(['id'=>48800, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Lor-lor']);
        DB::table('villages')->insert(['id'=>48801, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Marfenfen (marafenfen)']);
        DB::table('villages')->insert(['id'=>48802, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Ngaibor']);
        DB::table('villages')->insert(['id'=>48803, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Ngaiguli']);
        DB::table('villages')->insert(['id'=>48804, 'districts_id'=>4306, 'zipcode'=>'97667', 'name'=>'Popjetur']);
        //Kecamatan Aru Selatan Utara Kab. Kepulauan Aru Provinsi Maluku
        DB::table('districts')->insert(['id'=>4307, 'city_id'=>250, 'name'=>'Aru Selatan Utara']);
        DB::table('villages')->insert(['id'=>48805, 'districts_id'=>4307, 'zipcode'=>'97668', 'name'=>'Erersin']);
        DB::table('villages')->insert(['id'=>48806, 'districts_id'=>4307, 'zipcode'=>'97668', 'name'=>'Hokmar']);
        DB::table('villages')->insert(['id'=>48807, 'districts_id'=>4307, 'zipcode'=>'97668', 'name'=>'Juring']);
        DB::table('villages')->insert(['id'=>48808, 'districts_id'=>4307, 'zipcode'=>'97668', 'name'=>'Lutur']);
        DB::table('villages')->insert(['id'=>48809, 'districts_id'=>4307, 'zipcode'=>'97668', 'name'=>'Maekor']);
        DB::table('villages')->insert(['id'=>48810, 'districts_id'=>4307, 'zipcode'=>'97668', 'name'=>'Rebi']);
        DB::table('villages')->insert(['id'=>48811, 'districts_id'=>4307, 'zipcode'=>'97668', 'name'=>'Tabarfane']);
    }
}
