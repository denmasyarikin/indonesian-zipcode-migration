<?php

use Illuminate\Database\Seeder;

class Gorontalo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('provinces')->insert(['id'=>7, 'name'=>'Gorontalo']);

        //Kota Gorontalo Provinsi Gorontalo
        DB::table('cities')->insert(['id'=>46, 'province_id'=>7, 'type'=>'city', 'name'=>'Gorontalo']);
        //Kecamatan Kota Selatan Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>585, 'city_id'=>46, 'name'=>'Kota Selatan']);
        DB::table('villages')->insert(['id'=>5645, 'districts_id'=>585, 'zipcode'=>'96111', 'name'=>'Biawao']);
        DB::table('villages')->insert(['id'=>5646, 'districts_id'=>585, 'zipcode'=>'96111', 'name'=>'Biawu']);
        DB::table('villages')->insert(['id'=>5647, 'districts_id'=>585, 'zipcode'=>'96115', 'name'=>'Limba B']);
        DB::table('villages')->insert(['id'=>5648, 'districts_id'=>585, 'zipcode'=>'96115', 'name'=>'Limba U Dua (limba U Ii)']);
        DB::table('villages')->insert(['id'=>5649, 'districts_id'=>585, 'zipcode'=>'96115', 'name'=>'Limba U Satu (limba U I)']);
        //Kecamatan Hulonthalangi Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>586, 'city_id'=>46, 'name'=>'Hulonthalangi']);
        DB::table('villages')->insert(['id'=>5650, 'districts_id'=>586, 'zipcode'=>'96111', 'name'=>'Siendeng']);
        DB::table('villages')->insert(['id'=>5651, 'districts_id'=>586, 'zipcode'=>'96111', 'name'=>'Tanjung Kramat']);
        DB::table('villages')->insert(['id'=>5652, 'districts_id'=>586, 'zipcode'=>'96116', 'name'=>'Donggala']);
        DB::table('villages')->insert(['id'=>5653, 'districts_id'=>586, 'zipcode'=>'96117', 'name'=>'Pohe']);
        DB::table('villages')->insert(['id'=>5654, 'districts_id'=>586, 'zipcode'=>'96117', 'name'=>'Tenda']);
        //Kecamatan Dumbo Raya Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>587, 'city_id'=>46, 'name'=>'Dumbo Raya']);
        DB::table('villages')->insert(['id'=>5655, 'districts_id'=>587, 'zipcode'=>'96112', 'name'=>'Bugis']);
        DB::table('villages')->insert(['id'=>5656, 'districts_id'=>587, 'zipcode'=>'96118', 'name'=>'Botu']);
        DB::table('villages')->insert(['id'=>5657, 'districts_id'=>587, 'zipcode'=>'96118', 'name'=>'Talumolo']);
        DB::table('villages')->insert(['id'=>5658, 'districts_id'=>587, 'zipcode'=>'96119', 'name'=>'Leato Selatan']);
        DB::table('villages')->insert(['id'=>5659, 'districts_id'=>587, 'zipcode'=>'96119', 'name'=>'Leato Utara']);
        //Kecamatan Kota Timur Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>588, 'city_id'=>46, 'name'=>'Kota Timur']);
        DB::table('villages')->insert(['id'=>5660, 'districts_id'=>588, 'zipcode'=>'96112', 'name'=>'Ipilo']);
        DB::table('villages')->insert(['id'=>5661, 'districts_id'=>588, 'zipcode'=>'96113', 'name'=>'Moodu']);
        DB::table('villages')->insert(['id'=>5662, 'districts_id'=>588, 'zipcode'=>'96113', 'name'=>'Padebuolo']);
        DB::table('villages')->insert(['id'=>5663, 'districts_id'=>588, 'zipcode'=>'96113', 'name'=>'Tamalate']);
        DB::table('villages')->insert(['id'=>5664, 'districts_id'=>588, 'zipcode'=>'96114', 'name'=>'Heledulaa Selatan']);
        DB::table('villages')->insert(['id'=>5665, 'districts_id'=>588, 'zipcode'=>'96119', 'name'=>'Heledulaa Utara']);
        //Kecamatan Sipatana Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>589, 'city_id'=>46, 'name'=>'Sipatana']);
        DB::table('villages')->insert(['id'=>5666, 'districts_id'=>589, 'zipcode'=>'96121', 'name'=>'Bulotadaa Timur']);
        DB::table('villages')->insert(['id'=>5667, 'districts_id'=>589, 'zipcode'=>'96124', 'name'=>'Bulotadaa Barat']);
        DB::table('villages')->insert(['id'=>5668, 'districts_id'=>589, 'zipcode'=>'96125', 'name'=>'Tapa']);
        DB::table('villages')->insert(['id'=>5669, 'districts_id'=>589, 'zipcode'=>'96126', 'name'=>'Molosifat U (molosipat U)']);
        DB::table('villages')->insert(['id'=>5670, 'districts_id'=>589, 'zipcode'=>'96126', 'name'=>'Tanggikiki']);
        //Kecamatan Kota Utara Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>590, 'city_id'=>46, 'name'=>'Kota Utara']);
        DB::table('villages')->insert(['id'=>5671, 'districts_id'=>590, 'zipcode'=>'96121', 'name'=>'Dembe Ii']);
        DB::table('villages')->insert(['id'=>5672, 'districts_id'=>590, 'zipcode'=>'96121', 'name'=>'Dembe Jaya']);
        DB::table('villages')->insert(['id'=>5673, 'districts_id'=>590, 'zipcode'=>'96122', 'name'=>'Wongkaditi Barat']);
        DB::table('villages')->insert(['id'=>5674, 'districts_id'=>590, 'zipcode'=>'96122', 'name'=>'Wongkaditi Timur']);
        DB::table('villages')->insert(['id'=>5675, 'districts_id'=>590, 'zipcode'=>'96123', 'name'=>'Dulomo Selatan']);
        DB::table('villages')->insert(['id'=>5676, 'districts_id'=>590, 'zipcode'=>'96123', 'name'=>'Dulomo Utara']);
        //Kecamatan Tilango Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>591, 'city_id'=>46, 'name'=>'Tilango']);
        DB::table('villages')->insert(['id'=>5677, 'districts_id'=>591, 'zipcode'=>'96123', 'name'=>'Dulomo']);
        DB::table('villages')->insert(['id'=>5678, 'districts_id'=>591, 'zipcode'=>'96181', 'name'=>'Ilotideaa']);
        DB::table('villages')->insert(['id'=>5679, 'districts_id'=>591, 'zipcode'=>'96181', 'name'=>'Lauwonu']);
        DB::table('villages')->insert(['id'=>5680, 'districts_id'=>591, 'zipcode'=>'96181', 'name'=>'Tabumela']);
        DB::table('villages')->insert(['id'=>5681, 'districts_id'=>591, 'zipcode'=>'96181', 'name'=>'Tenggela']);
        DB::table('villages')->insert(['id'=>5682, 'districts_id'=>591, 'zipcode'=>'96181', 'name'=>'Tilote']);
        DB::table('villages')->insert(['id'=>5683, 'districts_id'=>591, 'zipcode'=>'96181', 'name'=>'Tinelo']);
        DB::table('villages')->insert(['id'=>5684, 'districts_id'=>591, 'zipcode'=>'96181', 'name'=>'Tualango']);
        //Kecamatan Pulubala Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>592, 'city_id'=>46, 'name'=>'Pulubala']);
        DB::table('villages')->insert(['id'=>5685, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Ayumolingo']);
        DB::table('villages')->insert(['id'=>5686, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Bakti']);
        DB::table('villages')->insert(['id'=>5687, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Bukit Aren']);
        DB::table('villages')->insert(['id'=>5688, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Molalahu']);
        DB::table('villages')->insert(['id'=>5689, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Molamahu']);
        DB::table('villages')->insert(['id'=>5690, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Mulyonegoro']);
        DB::table('villages')->insert(['id'=>5691, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Pongongaila']);
        DB::table('villages')->insert(['id'=>5692, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Pulubala']);
        DB::table('villages')->insert(['id'=>5693, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Puncak']);
        DB::table('villages')->insert(['id'=>5694, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Toyidito (toydito)']);
        DB::table('villages')->insert(['id'=>5695, 'districts_id'=>592, 'zipcode'=>'96127', 'name'=>'Tridarma']);
        //Kecamatan Mootilango Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>593, 'city_id'=>46, 'name'=>'Mootilango']);
        DB::table('villages')->insert(['id'=>5696, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Helumo']);
        DB::table('villages')->insert(['id'=>5697, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Huyula']);
        DB::table('villages')->insert(['id'=>5698, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Karya Mukti']);
        DB::table('villages')->insert(['id'=>5699, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Paris']);
        DB::table('villages')->insert(['id'=>5700, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Payu']);
        DB::table('villages')->insert(['id'=>5701, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Pilomonu']);
        DB::table('villages')->insert(['id'=>5702, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Satria']);
        DB::table('villages')->insert(['id'=>5703, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Sido Mukti']);
        DB::table('villages')->insert(['id'=>5704, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Suka Maju']);
        DB::table('villages')->insert(['id'=>5705, 'districts_id'=>593, 'zipcode'=>'96127', 'name'=>'Talumopatu']);
        //Kecamatan Kota Tengah Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>594, 'city_id'=>46, 'name'=>'Kota Tengah']);
        DB::table('villages')->insert(['id'=>5706, 'districts_id'=>594, 'zipcode'=>'96127', 'name'=>'Pulubala']);
        DB::table('villages')->insert(['id'=>5707, 'districts_id'=>594, 'zipcode'=>'96128', 'name'=>'Dulalowo']);
        DB::table('villages')->insert(['id'=>5708, 'districts_id'=>594, 'zipcode'=>'96128', 'name'=>'Dulalowo Timur']);
        DB::table('villages')->insert(['id'=>5709, 'districts_id'=>594, 'zipcode'=>'96128', 'name'=>'Wumialo']);
        DB::table('villages')->insert(['id'=>5710, 'districts_id'=>594, 'zipcode'=>'96129', 'name'=>'Liluwo']);
        DB::table('villages')->insert(['id'=>5711, 'districts_id'=>594, 'zipcode'=>'96129', 'name'=>'Paguyaman']);
        //Kecamatan Kota Barat Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>595, 'city_id'=>46, 'name'=>'Kota Barat']);
        DB::table('villages')->insert(['id'=>5712, 'districts_id'=>595, 'zipcode'=>'96131', 'name'=>'Dembe I']);
        DB::table('villages')->insert(['id'=>5713, 'districts_id'=>595, 'zipcode'=>'96131', 'name'=>'Lekobalo']);
        DB::table('villages')->insert(['id'=>5714, 'districts_id'=>595, 'zipcode'=>'96132', 'name'=>'Pilolodaa']);
        DB::table('villages')->insert(['id'=>5715, 'districts_id'=>595, 'zipcode'=>'96133', 'name'=>'Buliide']);
        DB::table('villages')->insert(['id'=>5716, 'districts_id'=>595, 'zipcode'=>'96133', 'name'=>'Tenilo']);
        DB::table('villages')->insert(['id'=>5717, 'districts_id'=>595, 'zipcode'=>'96134', 'name'=>'Molosifat W (molosipat W)']);
        DB::table('villages')->insert(['id'=>5718, 'districts_id'=>595, 'zipcode'=>'96136', 'name'=>'Buladu']);
        //Kecamatan Dungingi Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>596, 'city_id'=>46, 'name'=>'Dungingi']);
        DB::table('villages')->insert(['id'=>5719, 'districts_id'=>596, 'zipcode'=>'96135', 'name'=>'Libuo']);
        DB::table('villages')->insert(['id'=>5720, 'districts_id'=>596, 'zipcode'=>'96137', 'name'=>'Tuladenggi']);
        DB::table('villages')->insert(['id'=>5721, 'districts_id'=>596, 'zipcode'=>'96138', 'name'=>'Huangobotu']);
        DB::table('villages')->insert(['id'=>5722, 'districts_id'=>596, 'zipcode'=>'96139', 'name'=>'Tomulabutao']);
        DB::table('villages')->insert(['id'=>5723, 'districts_id'=>596, 'zipcode'=>'96139', 'name'=>'Tomulabutao Selatan']);
        //Kecamatan Telaga Biru Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>597, 'city_id'=>46, 'name'=>'Telaga Biru']);
        DB::table('villages')->insert(['id'=>5724, 'districts_id'=>597, 'zipcode'=>'96137', 'name'=>'Tuladenggi']);
        DB::table('villages')->insert(['id'=>5725, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Dulamayo Utara']);
        DB::table('villages')->insert(['id'=>5726, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Dumati']);
        DB::table('villages')->insert(['id'=>5727, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Lupoyo']);
        DB::table('villages')->insert(['id'=>5728, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Modelidu (modellidu)']);
        DB::table('villages')->insert(['id'=>5729, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Pantungo']);
        DB::table('villages')->insert(['id'=>5730, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Pentadio Barat']);
        DB::table('villages')->insert(['id'=>5731, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Pentadio Timur']);
        DB::table('villages')->insert(['id'=>5732, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Talumelito']);
        DB::table('villages')->insert(['id'=>5733, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Tapaluluo']);
        DB::table('villages')->insert(['id'=>5734, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Timuato']);
        DB::table('villages')->insert(['id'=>5735, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Tinelo']);
        DB::table('villages')->insert(['id'=>5736, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Tonala']);
        DB::table('villages')->insert(['id'=>5737, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Ulapato A']);
        DB::table('villages')->insert(['id'=>5738, 'districts_id'=>597, 'zipcode'=>'96181', 'name'=>'Ulapato B']);
        //Kecamatan Telaga Jaya Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>598, 'city_id'=>46, 'name'=>'Telaga Jaya']);
        DB::table('villages')->insert(['id'=>5739, 'districts_id'=>598, 'zipcode'=>'96181', 'name'=>'Buhu']);
        DB::table('villages')->insert(['id'=>5740, 'districts_id'=>598, 'zipcode'=>'96181', 'name'=>'Bunggalo']);
        DB::table('villages')->insert(['id'=>5741, 'districts_id'=>598, 'zipcode'=>'96181', 'name'=>'Hutadaa']);
        DB::table('villages')->insert(['id'=>5742, 'districts_id'=>598, 'zipcode'=>'96181', 'name'=>'Luwoo']);
        DB::table('villages')->insert(['id'=>5743, 'districts_id'=>598, 'zipcode'=>'96213', 'name'=>'Bulota']);
        //Kecamatan Telaga Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>599, 'city_id'=>46, 'name'=>'Telaga']);
        DB::table('villages')->insert(['id'=>5744, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Bulila']);
        DB::table('villages')->insert(['id'=>5745, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Dulamayo Barat']);
        DB::table('villages')->insert(['id'=>5746, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Dulamayo Selatan']);
        DB::table('villages')->insert(['id'=>5747, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Dulohupa']);
        DB::table('villages')->insert(['id'=>5748, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Hulawa']);
        DB::table('villages')->insert(['id'=>5749, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Luhu']);
        DB::table('villages')->insert(['id'=>5750, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Mongolato']);
        DB::table('villages')->insert(['id'=>5751, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Pilohayanga']);
        DB::table('villages')->insert(['id'=>5752, 'districts_id'=>599, 'zipcode'=>'96181', 'name'=>'Pilohayanga Barat']);
        //Kecamatan Limboto Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>600, 'city_id'=>46, 'name'=>'Limboto']);
        DB::table('villages')->insert(['id'=>5753, 'districts_id'=>600, 'zipcode'=>'96211', 'name'=>'Kayubulan']);
        DB::table('villages')->insert(['id'=>5754, 'districts_id'=>600, 'zipcode'=>'96211', 'name'=>'Malahu']);
        DB::table('villages')->insert(['id'=>5755, 'districts_id'=>600, 'zipcode'=>'96212', 'name'=>'Biyonga']);
        DB::table('villages')->insert(['id'=>5756, 'districts_id'=>600, 'zipcode'=>'96212', 'name'=>'Hepuhulawa']);
        DB::table('villages')->insert(['id'=>5757, 'districts_id'=>600, 'zipcode'=>'96212', 'name'=>'Polohungo']);
        DB::table('villages')->insert(['id'=>5758, 'districts_id'=>600, 'zipcode'=>'96213', 'name'=>'Bulota']);
        DB::table('villages')->insert(['id'=>5759, 'districts_id'=>600, 'zipcode'=>'96213', 'name'=>'Dutulanaa']);
        DB::table('villages')->insert(['id'=>5760, 'districts_id'=>600, 'zipcode'=>'96213', 'name'=>'Hutuo']);
        DB::table('villages')->insert(['id'=>5761, 'districts_id'=>600, 'zipcode'=>'96214', 'name'=>'Bongohulawa']);
        DB::table('villages')->insert(['id'=>5762, 'districts_id'=>600, 'zipcode'=>'96214', 'name'=>'Kayumerah']);
        DB::table('villages')->insert(['id'=>5763, 'districts_id'=>600, 'zipcode'=>'96214', 'name'=>'Tilihua']);
        DB::table('villages')->insert(['id'=>5764, 'districts_id'=>600, 'zipcode'=>'96218', 'name'=>'Bolihuangga']);
        DB::table('villages')->insert(['id'=>5765, 'districts_id'=>600, 'zipcode'=>'96218', 'name'=>'Tenilo']);
        DB::table('villages')->insert(['id'=>5766, 'districts_id'=>600, 'zipcode'=>'96219', 'name'=>'Hunggaluwa']);
        //Kecamatan Asparaga Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>601, 'city_id'=>46, 'name'=>'Asparaga']);
        DB::table('villages')->insert(['id'=>5767, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Bihe']);
        DB::table('villages')->insert(['id'=>5768, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Bontulo']);
        DB::table('villages')->insert(['id'=>5769, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Bululi']);
        DB::table('villages')->insert(['id'=>5770, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Karya Baru']);
        DB::table('villages')->insert(['id'=>5771, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Karya Indah']);
        DB::table('villages')->insert(['id'=>5772, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Mohiyolo']);
        DB::table('villages')->insert(['id'=>5773, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Olimohulo']);
        DB::table('villages')->insert(['id'=>5774, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Pangahu']);
        DB::table('villages')->insert(['id'=>5775, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Prima']);
        DB::table('villages')->insert(['id'=>5776, 'districts_id'=>601, 'zipcode'=>'96214', 'name'=>'Tiohu']);
        //Kecamatan Tolangohula Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>602, 'city_id'=>46, 'name'=>'Tolangohula']);
        DB::table('villages')->insert(['id'=>5777, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Bina Jaya']);
        DB::table('villages')->insert(['id'=>5778, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Gandaria']);
        DB::table('villages')->insert(['id'=>5779, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Gandasari']);
        DB::table('villages')->insert(['id'=>5780, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Himalaya']);
        DB::table('villages')->insert(['id'=>5781, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Lakeya']);
        DB::table('villages')->insert(['id'=>5782, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Makmur Abadi']);
        DB::table('villages')->insert(['id'=>5783, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Margomulyo']);
        DB::table('villages')->insert(['id'=>5784, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Molohu']);
        DB::table('villages')->insert(['id'=>5785, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Ombulo Tango']);
        DB::table('villages')->insert(['id'=>5786, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Polohungo']);
        DB::table('villages')->insert(['id'=>5787, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Sidoharjo (sidoarjo)']);
        DB::table('villages')->insert(['id'=>5788, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Sukamakmur']);
        DB::table('villages')->insert(['id'=>5789, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Sukamakmur Utara']);
        DB::table('villages')->insert(['id'=>5790, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Tamaila']);
        DB::table('villages')->insert(['id'=>5791, 'districts_id'=>602, 'zipcode'=>'96214', 'name'=>'Tamalia Utara']);
        //Kecamatan Bongomeme Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>603, 'city_id'=>46, 'name'=>'Bongomeme']);
        DB::table('villages')->insert(['id'=>5792, 'districts_id'=>603, 'zipcode'=>'96214', 'name'=>'Bongohulawa']);
        DB::table('villages')->insert(['id'=>5793, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Batu Loreng']);
        DB::table('villages')->insert(['id'=>5794, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Batulayar']);
        DB::table('villages')->insert(['id'=>5795, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Dulamayo']);
        DB::table('villages')->insert(['id'=>5796, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Huntu Lo Hulawa']);
        DB::table('villages')->insert(['id'=>5797, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Kayumerah']);
        DB::table('villages')->insert(['id'=>5798, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Liyodu']);
        DB::table('villages')->insert(['id'=>5799, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Liyoto']);
        DB::table('villages')->insert(['id'=>5800, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Molanihu']);
        DB::table('villages')->insert(['id'=>5801, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Molas']);
        DB::table('villages')->insert(['id'=>5802, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Molopatodu']);
        DB::table('villages')->insert(['id'=>5803, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Otopade']);
        DB::table('villages')->insert(['id'=>5804, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Owalanga']);
        DB::table('villages')->insert(['id'=>5805, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Tohupo']);
        DB::table('villages')->insert(['id'=>5806, 'districts_id'=>603, 'zipcode'=>'96271', 'name'=>'Upomela']);
        //Kecamatan Limboto Barat Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>604, 'city_id'=>46, 'name'=>'Limboto Barat']);
        DB::table('villages')->insert(['id'=>5807, 'districts_id'=>604, 'zipcode'=>'96215', 'name'=>'Daenaa']);
        DB::table('villages')->insert(['id'=>5808, 'districts_id'=>604, 'zipcode'=>'96215', 'name'=>'Huidu']);
        DB::table('villages')->insert(['id'=>5809, 'districts_id'=>604, 'zipcode'=>'96215', 'name'=>'Ombulo']);
        DB::table('villages')->insert(['id'=>5810, 'districts_id'=>604, 'zipcode'=>'96215', 'name'=>'Pone']);
        DB::table('villages')->insert(['id'=>5811, 'districts_id'=>604, 'zipcode'=>'96216', 'name'=>'Hayahaya']);
        DB::table('villages')->insert(['id'=>5812, 'districts_id'=>604, 'zipcode'=>'96216', 'name'=>'Huidu Utara']);
        DB::table('villages')->insert(['id'=>5813, 'districts_id'=>604, 'zipcode'=>'96216', 'name'=>'Hutabohu']);
        DB::table('villages')->insert(['id'=>5814, 'districts_id'=>604, 'zipcode'=>'96216', 'name'=>'Padengo']);
        DB::table('villages')->insert(['id'=>5815, 'districts_id'=>604, 'zipcode'=>'96216', 'name'=>'Yosonegoro (yoosonegoro)']);
        DB::table('villages')->insert(['id'=>5816, 'districts_id'=>604, 'zipcode'=>'96217', 'name'=>'Tunggulo']);
        //Kecamatan Tibawa Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>605, 'city_id'=>46, 'name'=>'Tibawa']);
        DB::table('villages')->insert(['id'=>5817, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Balahu']);
        DB::table('villages')->insert(['id'=>5818, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Botumoputi']);
        DB::table('villages')->insert(['id'=>5819, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Buhu']);
        DB::table('villages')->insert(['id'=>5820, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Datahu']);
        DB::table('villages')->insert(['id'=>5821, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Dunggala']);
        DB::table('villages')->insert(['id'=>5822, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Ilomata']);
        DB::table('villages')->insert(['id'=>5823, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Iloponu']);
        DB::table('villages')->insert(['id'=>5824, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Isimu Raya']);
        DB::table('villages')->insert(['id'=>5825, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Isimu Selatan']);
        DB::table('villages')->insert(['id'=>5826, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Isimu Utara']);
        DB::table('villages')->insert(['id'=>5827, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Labanu']);
        DB::table('villages')->insert(['id'=>5828, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Molowahu']);
        DB::table('villages')->insert(['id'=>5829, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Motilango']);
        DB::table('villages')->insert(['id'=>5830, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Reksonegoro']);
        DB::table('villages')->insert(['id'=>5831, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Tolotio']);
        DB::table('villages')->insert(['id'=>5832, 'districts_id'=>605, 'zipcode'=>'96251', 'name'=>'Ulobua']);
        //Kecamatan Boliohuto (boliyohuto) Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>606, 'city_id'=>46, 'name'=>'Boliohuto (boliyohuto)']);
        DB::table('villages')->insert(['id'=>5833, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Bandung Rejo']);
        DB::table('villages')->insert(['id'=>5834, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Bongongayu']);
        DB::table('villages')->insert(['id'=>5835, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Diloniyohu']);
        DB::table('villages')->insert(['id'=>5836, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Dulohupa']);
        DB::table('villages')->insert(['id'=>5837, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Iloheluma']);
        DB::table('villages')->insert(['id'=>5838, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Monggolito']);
        DB::table('villages')->insert(['id'=>5839, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Motoduto']);
        DB::table('villages')->insert(['id'=>5840, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Parungi']);
        DB::table('villages')->insert(['id'=>5841, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Potanga']);
        DB::table('villages')->insert(['id'=>5842, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Sidodadi']);
        DB::table('villages')->insert(['id'=>5843, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>5844, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Sidomulyo Selatan']);
        DB::table('villages')->insert(['id'=>5845, 'districts_id'=>606, 'zipcode'=>'96264', 'name'=>'Tolite']);
        //Kecamatan Bilato Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>607, 'city_id'=>46, 'name'=>'Bilato']);
        DB::table('villages')->insert(['id'=>5846, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Bilato']);
        DB::table('villages')->insert(['id'=>5847, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Bumela']);
        DB::table('villages')->insert(['id'=>5848, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Ilomata']);
        DB::table('villages')->insert(['id'=>5849, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Juriya']);
        DB::table('villages')->insert(['id'=>5850, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Lamahu']);
        DB::table('villages')->insert(['id'=>5851, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Musyawarah']);
        DB::table('villages')->insert(['id'=>5852, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Pelehu']);
        DB::table('villages')->insert(['id'=>5853, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>5854, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Taulaa']);
        DB::table('villages')->insert(['id'=>5855, 'districts_id'=>607, 'zipcode'=>'96264', 'name'=>'Totopo']);
        //Kecamatan Dungaliyo Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>608, 'city_id'=>46, 'name'=>'Dungaliyo']);
        DB::table('villages')->insert(['id'=>5856, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Ambara']);
        DB::table('villages')->insert(['id'=>5857, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Ayuhula']);
        DB::table('villages')->insert(['id'=>5858, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Bongomeme']);
        DB::table('villages')->insert(['id'=>5859, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Botubu Lowe']);
        DB::table('villages')->insert(['id'=>5860, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Dungaliyo']);
        DB::table('villages')->insert(['id'=>5861, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Duwanga']);
        DB::table('villages')->insert(['id'=>5862, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Kaliyoso']);
        DB::table('villages')->insert(['id'=>5863, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Momala']);
        DB::table('villages')->insert(['id'=>5864, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Pangadaa']);
        DB::table('villages')->insert(['id'=>5865, 'districts_id'=>608, 'zipcode'=>'96271', 'name'=>'Pilolalenga']);
        //Kecamatan Batudaa Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>609, 'city_id'=>46, 'name'=>'Batudaa']);
        DB::table('villages')->insert(['id'=>5866, 'districts_id'=>609, 'zipcode'=>'96271', 'name'=>'Barakati']);
        DB::table('villages')->insert(['id'=>5867, 'districts_id'=>609, 'zipcode'=>'96271', 'name'=>'Bua']);
        DB::table('villages')->insert(['id'=>5868, 'districts_id'=>609, 'zipcode'=>'96271', 'name'=>'Dunggala']);
        DB::table('villages')->insert(['id'=>5869, 'districts_id'=>609, 'zipcode'=>'96271', 'name'=>'Huntu']);
        DB::table('villages')->insert(['id'=>5870, 'districts_id'=>609, 'zipcode'=>'96271', 'name'=>'Ilohungayo']);
        DB::table('villages')->insert(['id'=>5871, 'districts_id'=>609, 'zipcode'=>'96271', 'name'=>'Iluta']);
        DB::table('villages')->insert(['id'=>5872, 'districts_id'=>609, 'zipcode'=>'96271', 'name'=>'Payunga']);
        DB::table('villages')->insert(['id'=>5873, 'districts_id'=>609, 'zipcode'=>'96271', 'name'=>'Pilobuhuta']);
        //Kecamatan Tabongo Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>610, 'city_id'=>46, 'name'=>'Tabongo']);
        DB::table('villages')->insert(['id'=>5874, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Ilomangga']);
        DB::table('villages')->insert(['id'=>5875, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Limehe Barat']);
        DB::table('villages')->insert(['id'=>5876, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Limehe Timur']);
        DB::table('villages')->insert(['id'=>5877, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Limehu']);
        DB::table('villages')->insert(['id'=>5878, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Moahudu']);
        DB::table('villages')->insert(['id'=>5879, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Motinelo']);
        DB::table('villages')->insert(['id'=>5880, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Tabongo Barat']);
        DB::table('villages')->insert(['id'=>5881, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Tabongo Timur']);
        DB::table('villages')->insert(['id'=>5882, 'districts_id'=>610, 'zipcode'=>'96271', 'name'=>'Teratai']);
        //Kecamatan Biluhu Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>611, 'city_id'=>46, 'name'=>'Biluhu']);
        DB::table('villages')->insert(['id'=>5883, 'districts_id'=>611, 'zipcode'=>'96272', 'name'=>'Biluhu Barat']);
        DB::table('villages')->insert(['id'=>5884, 'districts_id'=>611, 'zipcode'=>'96272', 'name'=>'Biluhu Tengah']);
        DB::table('villages')->insert(['id'=>5885, 'districts_id'=>611, 'zipcode'=>'96272', 'name'=>'Botubolu\o (botuboluo)']);
        DB::table('villages')->insert(['id'=>5886, 'districts_id'=>611, 'zipcode'=>'96272', 'name'=>'Huwongo']);
        DB::table('villages')->insert(['id'=>5887, 'districts_id'=>611, 'zipcode'=>'96272', 'name'=>'Lobuto']);
        DB::table('villages')->insert(['id'=>5888, 'districts_id'=>611, 'zipcode'=>'96272', 'name'=>'Lobuto Timur']);
        DB::table('villages')->insert(['id'=>5889, 'districts_id'=>611, 'zipcode'=>'96272', 'name'=>'Luluo']);
        DB::table('villages')->insert(['id'=>5890, 'districts_id'=>611, 'zipcode'=>'96272', 'name'=>'Olimeyala']);
        //Kecamatan Batudaa Pantai Kota Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>612, 'city_id'=>46, 'name'=>'Batudaa Pantai']);
        DB::table('villages')->insert(['id'=>5891, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Biluhu Timur']);
        DB::table('villages')->insert(['id'=>5892, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Bongo']);
        DB::table('villages')->insert(['id'=>5893, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Buhudaa']);
        DB::table('villages')->insert(['id'=>5894, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Kayubulan']);
        DB::table('villages')->insert(['id'=>5895, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Lamu']);
        DB::table('villages')->insert(['id'=>5896, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Langgula']);
        DB::table('villages')->insert(['id'=>5897, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Lopo']);
        DB::table('villages')->insert(['id'=>5898, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Olimoo']);
        DB::table('villages')->insert(['id'=>5899, 'districts_id'=>612, 'zipcode'=>'96272', 'name'=>'Tontayuo']);

        //Kab. Gorontalo Provinsi Gorontalo
        DB::table('cities')->insert(['id'=>47, 'province_id'=>7, 'type'=>'regencies', 'name'=>'Gorontalo']);
        //Kecamatan Kota Selatan Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>613, 'city_id'=>47, 'name'=>'Kota Selatan']);
        DB::table('villages')->insert(['id'=>5900, 'districts_id'=>613, 'zipcode'=>'96111', 'name'=>'Biawao']);
        DB::table('villages')->insert(['id'=>5901, 'districts_id'=>613, 'zipcode'=>'96111', 'name'=>'Biawu']);
        DB::table('villages')->insert(['id'=>5902, 'districts_id'=>613, 'zipcode'=>'96115', 'name'=>'Limba B']);
        DB::table('villages')->insert(['id'=>5903, 'districts_id'=>613, 'zipcode'=>'96115', 'name'=>'Limba U Dua (limba U Ii)']);
        DB::table('villages')->insert(['id'=>5904, 'districts_id'=>613, 'zipcode'=>'96115', 'name'=>'Limba U Satu (limba U I)']);
        //Kecamatan Hulonthalangi Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>614, 'city_id'=>47, 'name'=>'Hulonthalangi']);
        DB::table('villages')->insert(['id'=>5905, 'districts_id'=>614, 'zipcode'=>'96111', 'name'=>'Siendeng']);
        DB::table('villages')->insert(['id'=>5906, 'districts_id'=>614, 'zipcode'=>'96111', 'name'=>'Tanjung Kramat']);
        DB::table('villages')->insert(['id'=>5907, 'districts_id'=>614, 'zipcode'=>'96116', 'name'=>'Donggala']);
        DB::table('villages')->insert(['id'=>5908, 'districts_id'=>614, 'zipcode'=>'96117', 'name'=>'Pohe']);
        DB::table('villages')->insert(['id'=>5909, 'districts_id'=>614, 'zipcode'=>'96117', 'name'=>'Tenda']);
        //Kecamatan Dumbo Raya Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>615, 'city_id'=>47, 'name'=>'Dumbo Raya']);
        DB::table('villages')->insert(['id'=>5910, 'districts_id'=>615, 'zipcode'=>'96112', 'name'=>'Bugis']);
        DB::table('villages')->insert(['id'=>5911, 'districts_id'=>615, 'zipcode'=>'96118', 'name'=>'Botu']);
        DB::table('villages')->insert(['id'=>5912, 'districts_id'=>615, 'zipcode'=>'96118', 'name'=>'Talumolo']);
        DB::table('villages')->insert(['id'=>5913, 'districts_id'=>615, 'zipcode'=>'96119', 'name'=>'Leato Selatan']);
        DB::table('villages')->insert(['id'=>5914, 'districts_id'=>615, 'zipcode'=>'96119', 'name'=>'Leato Utara']);
        //Kecamatan Kota Timur Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>616, 'city_id'=>47, 'name'=>'Kota Timur']);
        DB::table('villages')->insert(['id'=>5915, 'districts_id'=>616, 'zipcode'=>'96112', 'name'=>'Ipilo']);
        DB::table('villages')->insert(['id'=>5916, 'districts_id'=>616, 'zipcode'=>'96113', 'name'=>'Moodu']);
        DB::table('villages')->insert(['id'=>5917, 'districts_id'=>616, 'zipcode'=>'96113', 'name'=>'Padebuolo']);
        DB::table('villages')->insert(['id'=>5918, 'districts_id'=>616, 'zipcode'=>'96113', 'name'=>'Tamalate']);
        DB::table('villages')->insert(['id'=>5919, 'districts_id'=>616, 'zipcode'=>'96114', 'name'=>'Heledulaa Selatan']);
        DB::table('villages')->insert(['id'=>5920, 'districts_id'=>616, 'zipcode'=>'96119', 'name'=>'Heledulaa Utara']);
        //Kecamatan Sipatana Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>617, 'city_id'=>47, 'name'=>'Sipatana']);
        DB::table('villages')->insert(['id'=>5921, 'districts_id'=>617, 'zipcode'=>'96121', 'name'=>'Bulotadaa Timur']);
        DB::table('villages')->insert(['id'=>5922, 'districts_id'=>617, 'zipcode'=>'96124', 'name'=>'Bulotadaa Barat']);
        DB::table('villages')->insert(['id'=>5923, 'districts_id'=>617, 'zipcode'=>'96125', 'name'=>'Tapa']);
        DB::table('villages')->insert(['id'=>5924, 'districts_id'=>617, 'zipcode'=>'96126', 'name'=>'Molosifat U (molosipat U)']);
        DB::table('villages')->insert(['id'=>5925, 'districts_id'=>617, 'zipcode'=>'96126', 'name'=>'Tanggikiki']);
        //Kecamatan Kota Utara Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>618, 'city_id'=>47, 'name'=>'Kota Utara']);
        DB::table('villages')->insert(['id'=>5926, 'districts_id'=>618, 'zipcode'=>'96121', 'name'=>'Dembe Ii']);
        DB::table('villages')->insert(['id'=>5927, 'districts_id'=>618, 'zipcode'=>'96121', 'name'=>'Dembe Jaya']);
        DB::table('villages')->insert(['id'=>5928, 'districts_id'=>618, 'zipcode'=>'96122', 'name'=>'Wongkaditi Barat']);
        DB::table('villages')->insert(['id'=>5929, 'districts_id'=>618, 'zipcode'=>'96122', 'name'=>'Wongkaditi Timur']);
        DB::table('villages')->insert(['id'=>5930, 'districts_id'=>618, 'zipcode'=>'96123', 'name'=>'Dulomo Selatan']);
        DB::table('villages')->insert(['id'=>5931, 'districts_id'=>618, 'zipcode'=>'96123', 'name'=>'Dulomo Utara']);
        //Kecamatan Tilango Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>619, 'city_id'=>47, 'name'=>'Tilango']);
        DB::table('villages')->insert(['id'=>5932, 'districts_id'=>619, 'zipcode'=>'96123', 'name'=>'Dulomo']);
        DB::table('villages')->insert(['id'=>5933, 'districts_id'=>619, 'zipcode'=>'96181', 'name'=>'Ilotideaa']);
        DB::table('villages')->insert(['id'=>5934, 'districts_id'=>619, 'zipcode'=>'96181', 'name'=>'Lauwonu']);
        DB::table('villages')->insert(['id'=>5935, 'districts_id'=>619, 'zipcode'=>'96181', 'name'=>'Tabumela']);
        DB::table('villages')->insert(['id'=>5936, 'districts_id'=>619, 'zipcode'=>'96181', 'name'=>'Tenggela']);
        DB::table('villages')->insert(['id'=>5937, 'districts_id'=>619, 'zipcode'=>'96181', 'name'=>'Tilote']);
        DB::table('villages')->insert(['id'=>5938, 'districts_id'=>619, 'zipcode'=>'96181', 'name'=>'Tinelo']);
        DB::table('villages')->insert(['id'=>5939, 'districts_id'=>619, 'zipcode'=>'96181', 'name'=>'Tualango']);
        //Kecamatan Pulubala Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>620, 'city_id'=>47, 'name'=>'Pulubala']);
        DB::table('villages')->insert(['id'=>5940, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Ayumolingo']);
        DB::table('villages')->insert(['id'=>5941, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Bakti']);
        DB::table('villages')->insert(['id'=>5942, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Bukit Aren']);
        DB::table('villages')->insert(['id'=>5943, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Molalahu']);
        DB::table('villages')->insert(['id'=>5944, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Molamahu']);
        DB::table('villages')->insert(['id'=>5945, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Mulyonegoro']);
        DB::table('villages')->insert(['id'=>5946, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Pongongaila']);
        DB::table('villages')->insert(['id'=>5947, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Pulubala']);
        DB::table('villages')->insert(['id'=>5948, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Puncak']);
        DB::table('villages')->insert(['id'=>5949, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Toyidito (toydito)']);
        DB::table('villages')->insert(['id'=>5950, 'districts_id'=>620, 'zipcode'=>'96127', 'name'=>'Tridarma']);
        //Kecamatan Mootilango Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>621, 'city_id'=>47, 'name'=>'Mootilango']);
        DB::table('villages')->insert(['id'=>5951, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Helumo']);
        DB::table('villages')->insert(['id'=>5952, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Huyula']);
        DB::table('villages')->insert(['id'=>5953, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Karya Mukti']);
        DB::table('villages')->insert(['id'=>5954, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Paris']);
        DB::table('villages')->insert(['id'=>5955, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Payu']);
        DB::table('villages')->insert(['id'=>5956, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Pilomonu']);
        DB::table('villages')->insert(['id'=>5957, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Satria']);
        DB::table('villages')->insert(['id'=>5958, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Sido Mukti']);
        DB::table('villages')->insert(['id'=>5959, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Suka Maju']);
        DB::table('villages')->insert(['id'=>5960, 'districts_id'=>621, 'zipcode'=>'96127', 'name'=>'Talumopatu']);
        //Kecamatan Kota Tengah Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>622, 'city_id'=>47, 'name'=>'Kota Tengah']);
        DB::table('villages')->insert(['id'=>5961, 'districts_id'=>622, 'zipcode'=>'96127', 'name'=>'Pulubala']);
        DB::table('villages')->insert(['id'=>5962, 'districts_id'=>622, 'zipcode'=>'96128', 'name'=>'Dulalowo']);
        DB::table('villages')->insert(['id'=>5963, 'districts_id'=>622, 'zipcode'=>'96128', 'name'=>'Dulalowo Timur']);
        DB::table('villages')->insert(['id'=>5964, 'districts_id'=>622, 'zipcode'=>'96128', 'name'=>'Wumialo']);
        DB::table('villages')->insert(['id'=>5965, 'districts_id'=>622, 'zipcode'=>'96129', 'name'=>'Liluwo']);
        DB::table('villages')->insert(['id'=>5966, 'districts_id'=>622, 'zipcode'=>'96129', 'name'=>'Paguyaman']);
        //Kecamatan Kota Barat Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>623, 'city_id'=>47, 'name'=>'Kota Barat']);
        DB::table('villages')->insert(['id'=>5967, 'districts_id'=>623, 'zipcode'=>'96131', 'name'=>'Dembe I']);
        DB::table('villages')->insert(['id'=>5968, 'districts_id'=>623, 'zipcode'=>'96131', 'name'=>'Lekobalo']);
        DB::table('villages')->insert(['id'=>5969, 'districts_id'=>623, 'zipcode'=>'96132', 'name'=>'Pilolodaa']);
        DB::table('villages')->insert(['id'=>5970, 'districts_id'=>623, 'zipcode'=>'96133', 'name'=>'Buliide']);
        DB::table('villages')->insert(['id'=>5971, 'districts_id'=>623, 'zipcode'=>'96133', 'name'=>'Tenilo']);
        DB::table('villages')->insert(['id'=>5972, 'districts_id'=>623, 'zipcode'=>'96134', 'name'=>'Molosifat W (molosipat W)']);
        DB::table('villages')->insert(['id'=>5973, 'districts_id'=>623, 'zipcode'=>'96136', 'name'=>'Buladu']);
        //Kecamatan Dungingi Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>624, 'city_id'=>47, 'name'=>'Dungingi']);
        DB::table('villages')->insert(['id'=>5974, 'districts_id'=>624, 'zipcode'=>'96135', 'name'=>'Libuo']);
        DB::table('villages')->insert(['id'=>5975, 'districts_id'=>624, 'zipcode'=>'96137', 'name'=>'Tuladenggi']);
        DB::table('villages')->insert(['id'=>5976, 'districts_id'=>624, 'zipcode'=>'96138', 'name'=>'Huangobotu']);
        DB::table('villages')->insert(['id'=>5977, 'districts_id'=>624, 'zipcode'=>'96139', 'name'=>'Tomulabutao']);
        DB::table('villages')->insert(['id'=>5978, 'districts_id'=>624, 'zipcode'=>'96139', 'name'=>'Tomulabutao Selatan']);
        //Kecamatan Telaga Biru Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>625, 'city_id'=>47, 'name'=>'Telaga Biru']);
        DB::table('villages')->insert(['id'=>5979, 'districts_id'=>625, 'zipcode'=>'96137', 'name'=>'Tuladenggi']);
        DB::table('villages')->insert(['id'=>5980, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Dulamayo Utara']);
        DB::table('villages')->insert(['id'=>5981, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Dumati']);
        DB::table('villages')->insert(['id'=>5982, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Lupoyo']);
        DB::table('villages')->insert(['id'=>5983, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Modelidu (modellidu)']);
        DB::table('villages')->insert(['id'=>5984, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Pantungo']);
        DB::table('villages')->insert(['id'=>5985, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Pentadio Barat']);
        DB::table('villages')->insert(['id'=>5986, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Pentadio Timur']);
        DB::table('villages')->insert(['id'=>5987, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Talumelito']);
        DB::table('villages')->insert(['id'=>5988, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Tapaluluo']);
        DB::table('villages')->insert(['id'=>5989, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Timuato']);
        DB::table('villages')->insert(['id'=>5990, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Tinelo']);
        DB::table('villages')->insert(['id'=>5991, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Tonala']);
        DB::table('villages')->insert(['id'=>5992, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Ulapato A']);
        DB::table('villages')->insert(['id'=>5993, 'districts_id'=>625, 'zipcode'=>'96181', 'name'=>'Ulapato B']);
        //Kecamatan Telaga Jaya Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>626, 'city_id'=>47, 'name'=>'Telaga Jaya']);
        DB::table('villages')->insert(['id'=>5994, 'districts_id'=>626, 'zipcode'=>'96181', 'name'=>'Buhu']);
        DB::table('villages')->insert(['id'=>5995, 'districts_id'=>626, 'zipcode'=>'96181', 'name'=>'Bunggalo']);
        DB::table('villages')->insert(['id'=>5996, 'districts_id'=>626, 'zipcode'=>'96181', 'name'=>'Hutadaa']);
        DB::table('villages')->insert(['id'=>5997, 'districts_id'=>626, 'zipcode'=>'96181', 'name'=>'Luwoo']);
        DB::table('villages')->insert(['id'=>5998, 'districts_id'=>626, 'zipcode'=>'96213', 'name'=>'Bulota']);
        //Kecamatan Telaga Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>627, 'city_id'=>47, 'name'=>'Telaga']);
        DB::table('villages')->insert(['id'=>5999, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Bulila']);
        DB::table('villages')->insert(['id'=>6000, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Dulamayo Barat']);
        DB::table('villages')->insert(['id'=>6001, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Dulamayo Selatan']);
        DB::table('villages')->insert(['id'=>6002, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Dulohupa']);
        DB::table('villages')->insert(['id'=>6003, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Hulawa']);
        DB::table('villages')->insert(['id'=>6004, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Luhu']);
        DB::table('villages')->insert(['id'=>6005, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Mongolato']);
        DB::table('villages')->insert(['id'=>6006, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Pilohayanga']);
        DB::table('villages')->insert(['id'=>6007, 'districts_id'=>627, 'zipcode'=>'96181', 'name'=>'Pilohayanga Barat']);
        //Kecamatan Limboto Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>628, 'city_id'=>47, 'name'=>'Limboto']);
        DB::table('villages')->insert(['id'=>6008, 'districts_id'=>628, 'zipcode'=>'96211', 'name'=>'Kayubulan']);
        DB::table('villages')->insert(['id'=>6009, 'districts_id'=>628, 'zipcode'=>'96211', 'name'=>'Malahu']);
        DB::table('villages')->insert(['id'=>6010, 'districts_id'=>628, 'zipcode'=>'96212', 'name'=>'Biyonga']);
        DB::table('villages')->insert(['id'=>6011, 'districts_id'=>628, 'zipcode'=>'96212', 'name'=>'Hepuhulawa']);
        DB::table('villages')->insert(['id'=>6012, 'districts_id'=>628, 'zipcode'=>'96212', 'name'=>'Polohungo']);
        DB::table('villages')->insert(['id'=>6013, 'districts_id'=>628, 'zipcode'=>'96213', 'name'=>'Bulota']);
        DB::table('villages')->insert(['id'=>6014, 'districts_id'=>628, 'zipcode'=>'96213', 'name'=>'Dutulanaa']);
        DB::table('villages')->insert(['id'=>6015, 'districts_id'=>628, 'zipcode'=>'96213', 'name'=>'Hutuo']);
        DB::table('villages')->insert(['id'=>6016, 'districts_id'=>628, 'zipcode'=>'96214', 'name'=>'Bongohulawa']);
        DB::table('villages')->insert(['id'=>6017, 'districts_id'=>628, 'zipcode'=>'96214', 'name'=>'Kayumerah']);
        DB::table('villages')->insert(['id'=>6018, 'districts_id'=>628, 'zipcode'=>'96214', 'name'=>'Tilihua']);
        DB::table('villages')->insert(['id'=>6019, 'districts_id'=>628, 'zipcode'=>'96218', 'name'=>'Bolihuangga']);
        DB::table('villages')->insert(['id'=>6020, 'districts_id'=>628, 'zipcode'=>'96218', 'name'=>'Tenilo']);
        DB::table('villages')->insert(['id'=>6021, 'districts_id'=>628, 'zipcode'=>'96219', 'name'=>'Hunggaluwa']);
        //Kecamatan Asparaga Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>629, 'city_id'=>47, 'name'=>'Asparaga']);
        DB::table('villages')->insert(['id'=>6022, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Bihe']);
        DB::table('villages')->insert(['id'=>6023, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Bontulo']);
        DB::table('villages')->insert(['id'=>6024, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Bululi']);
        DB::table('villages')->insert(['id'=>6025, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Karya Baru']);
        DB::table('villages')->insert(['id'=>6026, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Karya Indah']);
        DB::table('villages')->insert(['id'=>6027, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Mohiyolo']);
        DB::table('villages')->insert(['id'=>6028, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Olimohulo']);
        DB::table('villages')->insert(['id'=>6029, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Pangahu']);
        DB::table('villages')->insert(['id'=>6030, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Prima']);
        DB::table('villages')->insert(['id'=>6031, 'districts_id'=>629, 'zipcode'=>'96214', 'name'=>'Tiohu']);
        //Kecamatan Tolangohula Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>630, 'city_id'=>47, 'name'=>'Tolangohula']);
        DB::table('villages')->insert(['id'=>6032, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Bina Jaya']);
        DB::table('villages')->insert(['id'=>6033, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Gandaria']);
        DB::table('villages')->insert(['id'=>6034, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Gandasari']);
        DB::table('villages')->insert(['id'=>6035, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Himalaya']);
        DB::table('villages')->insert(['id'=>6036, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Lakeya']);
        DB::table('villages')->insert(['id'=>6037, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Makmur Abadi']);
        DB::table('villages')->insert(['id'=>6038, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Margomulyo']);
        DB::table('villages')->insert(['id'=>6039, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Molohu']);
        DB::table('villages')->insert(['id'=>6040, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Ombulo Tango']);
        DB::table('villages')->insert(['id'=>6041, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Polohungo']);
        DB::table('villages')->insert(['id'=>6042, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Sidoharjo (sidoarjo)']);
        DB::table('villages')->insert(['id'=>6043, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Sukamakmur']);
        DB::table('villages')->insert(['id'=>6044, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Sukamakmur Utara']);
        DB::table('villages')->insert(['id'=>6045, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Tamaila']);
        DB::table('villages')->insert(['id'=>6046, 'districts_id'=>630, 'zipcode'=>'96214', 'name'=>'Tamalia Utara']);
        //Kecamatan Bongomeme Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>631, 'city_id'=>47, 'name'=>'Bongomeme']);
        DB::table('villages')->insert(['id'=>6047, 'districts_id'=>631, 'zipcode'=>'96214', 'name'=>'Bongohulawa']);
        DB::table('villages')->insert(['id'=>6048, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Batu Loreng']);
        DB::table('villages')->insert(['id'=>6049, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Batulayar']);
        DB::table('villages')->insert(['id'=>6050, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Dulamayo']);
        DB::table('villages')->insert(['id'=>6051, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Huntu Lo Hulawa']);
        DB::table('villages')->insert(['id'=>6052, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Kayumerah']);
        DB::table('villages')->insert(['id'=>6053, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Liyodu']);
        DB::table('villages')->insert(['id'=>6054, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Liyoto']);
        DB::table('villages')->insert(['id'=>6055, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Molanihu']);
        DB::table('villages')->insert(['id'=>6056, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Molas']);
        DB::table('villages')->insert(['id'=>6057, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Molopatodu']);
        DB::table('villages')->insert(['id'=>6058, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Otopade']);
        DB::table('villages')->insert(['id'=>6059, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Owalanga']);
        DB::table('villages')->insert(['id'=>6060, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Tohupo']);
        DB::table('villages')->insert(['id'=>6061, 'districts_id'=>631, 'zipcode'=>'96271', 'name'=>'Upomela']);
        //Kecamatan Limboto Barat Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>632, 'city_id'=>47, 'name'=>'Limboto Barat']);
        DB::table('villages')->insert(['id'=>6062, 'districts_id'=>632, 'zipcode'=>'96215', 'name'=>'Daenaa']);
        DB::table('villages')->insert(['id'=>6063, 'districts_id'=>632, 'zipcode'=>'96215', 'name'=>'Huidu']);
        DB::table('villages')->insert(['id'=>6064, 'districts_id'=>632, 'zipcode'=>'96215', 'name'=>'Ombulo']);
        DB::table('villages')->insert(['id'=>6065, 'districts_id'=>632, 'zipcode'=>'96215', 'name'=>'Pone']);
        DB::table('villages')->insert(['id'=>6066, 'districts_id'=>632, 'zipcode'=>'96216', 'name'=>'Hayahaya']);
        DB::table('villages')->insert(['id'=>6067, 'districts_id'=>632, 'zipcode'=>'96216', 'name'=>'Huidu Utara']);
        DB::table('villages')->insert(['id'=>6068, 'districts_id'=>632, 'zipcode'=>'96216', 'name'=>'Hutabohu']);
        DB::table('villages')->insert(['id'=>6069, 'districts_id'=>632, 'zipcode'=>'96216', 'name'=>'Padengo']);
        DB::table('villages')->insert(['id'=>6070, 'districts_id'=>632, 'zipcode'=>'96216', 'name'=>'Yosonegoro (yoosonegoro)']);
        DB::table('villages')->insert(['id'=>6071, 'districts_id'=>632, 'zipcode'=>'96217', 'name'=>'Tunggulo']);
        //Kecamatan Tibawa Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>633, 'city_id'=>47, 'name'=>'Tibawa']);
        DB::table('villages')->insert(['id'=>6072, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Balahu']);
        DB::table('villages')->insert(['id'=>6073, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Botumoputi']);
        DB::table('villages')->insert(['id'=>6074, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Buhu']);
        DB::table('villages')->insert(['id'=>6075, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Datahu']);
        DB::table('villages')->insert(['id'=>6076, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Dunggala']);
        DB::table('villages')->insert(['id'=>6077, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Ilomata']);
        DB::table('villages')->insert(['id'=>6078, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Iloponu']);
        DB::table('villages')->insert(['id'=>6079, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Isimu Raya']);
        DB::table('villages')->insert(['id'=>6080, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Isimu Selatan']);
        DB::table('villages')->insert(['id'=>6081, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Isimu Utara']);
        DB::table('villages')->insert(['id'=>6082, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Labanu']);
        DB::table('villages')->insert(['id'=>6083, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Molowahu']);
        DB::table('villages')->insert(['id'=>6084, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Motilango']);
        DB::table('villages')->insert(['id'=>6085, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Reksonegoro']);
        DB::table('villages')->insert(['id'=>6086, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Tolotio']);
        DB::table('villages')->insert(['id'=>6087, 'districts_id'=>633, 'zipcode'=>'96251', 'name'=>'Ulobua']);
        //Kecamatan Boliohuto (boliyohuto) Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>634, 'city_id'=>47, 'name'=>'Boliohuto (boliyohuto)']);
        DB::table('villages')->insert(['id'=>6088, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Bandung Rejo']);
        DB::table('villages')->insert(['id'=>6089, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Bongongayu']);
        DB::table('villages')->insert(['id'=>6090, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Diloniyohu']);
        DB::table('villages')->insert(['id'=>6091, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Dulohupa']);
        DB::table('villages')->insert(['id'=>6092, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Iloheluma']);
        DB::table('villages')->insert(['id'=>6093, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Monggolito']);
        DB::table('villages')->insert(['id'=>6094, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Motoduto']);
        DB::table('villages')->insert(['id'=>6095, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Parungi']);
        DB::table('villages')->insert(['id'=>6096, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Potanga']);
        DB::table('villages')->insert(['id'=>6097, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Sidodadi']);
        DB::table('villages')->insert(['id'=>6098, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>6099, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Sidomulyo Selatan']);
        DB::table('villages')->insert(['id'=>6100, 'districts_id'=>634, 'zipcode'=>'96264', 'name'=>'Tolite']);
        //Kecamatan Bilato Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>635, 'city_id'=>47, 'name'=>'Bilato']);
        DB::table('villages')->insert(['id'=>6101, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Bilato']);
        DB::table('villages')->insert(['id'=>6102, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Bumela']);
        DB::table('villages')->insert(['id'=>6103, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Ilomata']);
        DB::table('villages')->insert(['id'=>6104, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Juriya']);
        DB::table('villages')->insert(['id'=>6105, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Lamahu']);
        DB::table('villages')->insert(['id'=>6106, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Musyawarah']);
        DB::table('villages')->insert(['id'=>6107, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Pelehu']);
        DB::table('villages')->insert(['id'=>6108, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>6109, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Taulaa']);
        DB::table('villages')->insert(['id'=>6110, 'districts_id'=>635, 'zipcode'=>'96264', 'name'=>'Totopo']);
        //Kecamatan Dungaliyo Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>636, 'city_id'=>47, 'name'=>'Dungaliyo']);
        DB::table('villages')->insert(['id'=>6111, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Ambara']);
        DB::table('villages')->insert(['id'=>6112, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Ayuhula']);
        DB::table('villages')->insert(['id'=>6113, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Bongomeme']);
        DB::table('villages')->insert(['id'=>6114, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Botubu Lowe']);
        DB::table('villages')->insert(['id'=>6115, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Dungaliyo']);
        DB::table('villages')->insert(['id'=>6116, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Duwanga']);
        DB::table('villages')->insert(['id'=>6117, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Kaliyoso']);
        DB::table('villages')->insert(['id'=>6118, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Momala']);
        DB::table('villages')->insert(['id'=>6119, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Pangadaa']);
        DB::table('villages')->insert(['id'=>6120, 'districts_id'=>636, 'zipcode'=>'96271', 'name'=>'Pilolalenga']);
        //Kecamatan Batudaa Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>637, 'city_id'=>47, 'name'=>'Batudaa']);
        DB::table('villages')->insert(['id'=>6121, 'districts_id'=>637, 'zipcode'=>'96271', 'name'=>'Barakati']);
        DB::table('villages')->insert(['id'=>6122, 'districts_id'=>637, 'zipcode'=>'96271', 'name'=>'Bua']);
        DB::table('villages')->insert(['id'=>6123, 'districts_id'=>637, 'zipcode'=>'96271', 'name'=>'Dunggala']);
        DB::table('villages')->insert(['id'=>6124, 'districts_id'=>637, 'zipcode'=>'96271', 'name'=>'Huntu']);
        DB::table('villages')->insert(['id'=>6125, 'districts_id'=>637, 'zipcode'=>'96271', 'name'=>'Ilohungayo']);
        DB::table('villages')->insert(['id'=>6126, 'districts_id'=>637, 'zipcode'=>'96271', 'name'=>'Iluta']);
        DB::table('villages')->insert(['id'=>6127, 'districts_id'=>637, 'zipcode'=>'96271', 'name'=>'Payunga']);
        DB::table('villages')->insert(['id'=>6128, 'districts_id'=>637, 'zipcode'=>'96271', 'name'=>'Pilobuhuta']);
        //Kecamatan Tabongo Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>638, 'city_id'=>47, 'name'=>'Tabongo']);
        DB::table('villages')->insert(['id'=>6129, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Ilomangga']);
        DB::table('villages')->insert(['id'=>6130, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Limehe Barat']);
        DB::table('villages')->insert(['id'=>6131, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Limehe Timur']);
        DB::table('villages')->insert(['id'=>6132, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Limehu']);
        DB::table('villages')->insert(['id'=>6133, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Moahudu']);
        DB::table('villages')->insert(['id'=>6134, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Motinelo']);
        DB::table('villages')->insert(['id'=>6135, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Tabongo Barat']);
        DB::table('villages')->insert(['id'=>6136, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Tabongo Timur']);
        DB::table('villages')->insert(['id'=>6137, 'districts_id'=>638, 'zipcode'=>'96271', 'name'=>'Teratai']);
        //Kecamatan Biluhu Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>639, 'city_id'=>47, 'name'=>'Biluhu']);
        DB::table('villages')->insert(['id'=>6138, 'districts_id'=>639, 'zipcode'=>'96272', 'name'=>'Biluhu Barat']);
        DB::table('villages')->insert(['id'=>6139, 'districts_id'=>639, 'zipcode'=>'96272', 'name'=>'Biluhu Tengah']);
        DB::table('villages')->insert(['id'=>6140, 'districts_id'=>639, 'zipcode'=>'96272', 'name'=>'Botubolu\o (botuboluo)']);
        DB::table('villages')->insert(['id'=>6141, 'districts_id'=>639, 'zipcode'=>'96272', 'name'=>'Huwongo']);
        DB::table('villages')->insert(['id'=>6142, 'districts_id'=>639, 'zipcode'=>'96272', 'name'=>'Lobuto']);
        DB::table('villages')->insert(['id'=>6143, 'districts_id'=>639, 'zipcode'=>'96272', 'name'=>'Lobuto Timur']);
        DB::table('villages')->insert(['id'=>6144, 'districts_id'=>639, 'zipcode'=>'96272', 'name'=>'Luluo']);
        DB::table('villages')->insert(['id'=>6145, 'districts_id'=>639, 'zipcode'=>'96272', 'name'=>'Olimeyala']);
        //Kecamatan Batudaa Pantai Kab. Gorontalo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>640, 'city_id'=>47, 'name'=>'Batudaa Pantai']);
        DB::table('villages')->insert(['id'=>6146, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Biluhu Timur']);
        DB::table('villages')->insert(['id'=>6147, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Bongo']);
        DB::table('villages')->insert(['id'=>6148, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Buhudaa']);
        DB::table('villages')->insert(['id'=>6149, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Kayubulan']);
        DB::table('villages')->insert(['id'=>6150, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Lamu']);
        DB::table('villages')->insert(['id'=>6151, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Langgula']);
        DB::table('villages')->insert(['id'=>6152, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Lopo']);
        DB::table('villages')->insert(['id'=>6153, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Olimoo']);
        DB::table('villages')->insert(['id'=>6154, 'districts_id'=>640, 'zipcode'=>'96272', 'name'=>'Tontayuo']);

        //Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('cities')->insert(['id'=>48, 'province_id'=>7, 'type'=>'regencies', 'name'=>'Gorontalo Utara']);
        //Kecamatan Kwandang Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>641, 'city_id'=>48, 'name'=>'Kwandang']);
        DB::table('villages')->insert(['id'=>6155, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Alata Karya']);
        DB::table('villages')->insert(['id'=>6156, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Botungobungo']);
        DB::table('villages')->insert(['id'=>6157, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Botuwombata']);
        DB::table('villages')->insert(['id'=>6158, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Bualemo']);
        DB::table('villages')->insert(['id'=>6159, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Bulalo']);
        DB::table('villages')->insert(['id'=>6160, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Cisadane']);
        DB::table('villages')->insert(['id'=>6161, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Katialada']);
        DB::table('villages')->insert(['id'=>6162, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Leboto']);
        DB::table('villages')->insert(['id'=>6163, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Masuru']);
        DB::table('villages')->insert(['id'=>6164, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Molingkapoto (molinggapoto)']);
        DB::table('villages')->insert(['id'=>6165, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Molingkapoto Selatan']);
        DB::table('villages')->insert(['id'=>6166, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Moluo']);
        DB::table('villages')->insert(['id'=>6167, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Mootinelo']);
        DB::table('villages')->insert(['id'=>6168, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Ombulodata']);
        DB::table('villages')->insert(['id'=>6169, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Pontolo']);
        DB::table('villages')->insert(['id'=>6170, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Pontolo Atas']);
        DB::table('villages')->insert(['id'=>6171, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Posso']);
        DB::table('villages')->insert(['id'=>6172, 'districts_id'=>641, 'zipcode'=>'96252', 'name'=>'Titidu']);
        //Kecamatan Tomolito Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>642, 'city_id'=>48, 'name'=>'Tomolito']);
        DB::table('villages')->insert(['id'=>6173, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Bubode']);
        DB::table('villages')->insert(['id'=>6174, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Bulango Raya']);
        DB::table('villages')->insert(['id'=>6175, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Dambalo']);
        DB::table('villages')->insert(['id'=>6176, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Huidu Melito']);
        DB::table('villages')->insert(['id'=>6177, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Jembatan Merah']);
        DB::table('villages')->insert(['id'=>6178, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Leyao']);
        DB::table('villages')->insert(['id'=>6179, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Milango']);
        DB::table('villages')->insert(['id'=>6180, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Molantadu']);
        DB::table('villages')->insert(['id'=>6181, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Mutiara Laut']);
        DB::table('villages')->insert(['id'=>6182, 'districts_id'=>642, 'zipcode'=>'96252', 'name'=>'Tanjung Karang']);
        //Kecamatan Ponelo Kepulauan Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>643, 'city_id'=>48, 'name'=>'Ponelo Kepulauan']);
        DB::table('villages')->insert(['id'=>6183, 'districts_id'=>643, 'zipcode'=>'96252', 'name'=>'Malambe']);
        DB::table('villages')->insert(['id'=>6184, 'districts_id'=>643, 'zipcode'=>'96252', 'name'=>'Otiola']);
        DB::table('villages')->insert(['id'=>6185, 'districts_id'=>643, 'zipcode'=>'96252', 'name'=>'Ponelo']);
        DB::table('villages')->insert(['id'=>6186, 'districts_id'=>643, 'zipcode'=>'96252', 'name'=>'Tihengo']);
        //Kecamatan Atinggola Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>644, 'city_id'=>48, 'name'=>'Atinggola']);
        DB::table('villages')->insert(['id'=>6187, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Bintana']);
        DB::table('villages')->insert(['id'=>6188, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Buata']);
        DB::table('villages')->insert(['id'=>6189, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Iloheluma']);
        DB::table('villages')->insert(['id'=>6190, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Imana']);
        DB::table('villages')->insert(['id'=>6191, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Inomata (ilomata)']);
        DB::table('villages')->insert(['id'=>6192, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Kotajin (kota Jin)']);
        DB::table('villages')->insert(['id'=>6193, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Kotajin Utara']);
        DB::table('villages')->insert(['id'=>6194, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Monggupo']);
        DB::table('villages')->insert(['id'=>6195, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Oluhuta']);
        DB::table('villages')->insert(['id'=>6196, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Pinontoyonga']);
        DB::table('villages')->insert(['id'=>6197, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Posono']);
        DB::table('villages')->insert(['id'=>6198, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Sigaso']);
        DB::table('villages')->insert(['id'=>6199, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Tombulilato']);
        DB::table('villages')->insert(['id'=>6200, 'districts_id'=>644, 'zipcode'=>'96253', 'name'=>'Wapalo']);
        //Kecamatan Gentuma Raya Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>645, 'city_id'=>48, 'name'=>'Gentuma Raya']);
        DB::table('villages')->insert(['id'=>6201, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Bohusami']);
        DB::table('villages')->insert(['id'=>6202, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Dumolodo']);
        DB::table('villages')->insert(['id'=>6203, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Durian']);
        DB::table('villages')->insert(['id'=>6204, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Gentuma']);
        DB::table('villages')->insert(['id'=>6205, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Ipilo']);
        DB::table('villages')->insert(['id'=>6206, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Ketapang']);
        DB::table('villages')->insert(['id'=>6207, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Langke']);
        DB::table('villages')->insert(['id'=>6208, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Molonggota']);
        DB::table('villages')->insert(['id'=>6209, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Motomingo']);
        DB::table('villages')->insert(['id'=>6210, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Nanati Jaya']);
        DB::table('villages')->insert(['id'=>6211, 'districts_id'=>645, 'zipcode'=>'96253', 'name'=>'Pasalae']);
        //Kecamatan Sumalata Timur Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>646, 'city_id'=>48, 'name'=>'Sumalata Timur']);
        DB::table('villages')->insert(['id'=>6212, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Bubalango']);
        DB::table('villages')->insert(['id'=>6213, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Buladu']);
        DB::table('villages')->insert(['id'=>6214, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Buluwatu']);
        DB::table('villages')->insert(['id'=>6215, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Deme Dua (deme Ii)']);
        DB::table('villages')->insert(['id'=>6216, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Deme Satu (deme I)']);
        DB::table('villages')->insert(['id'=>6217, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Dulukapa']);
        DB::table('villages')->insert(['id'=>6218, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Hulawa']);
        DB::table('villages')->insert(['id'=>6219, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Koluwoka']);
        DB::table('villages')->insert(['id'=>6220, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Motihelumo']);
        DB::table('villages')->insert(['id'=>6221, 'districts_id'=>646, 'zipcode'=>'96254', 'name'=>'Wubudu']);
        //Kecamatan Sumalata Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>647, 'city_id'=>48, 'name'=>'Sumalata']);
        DB::table('villages')->insert(['id'=>6222, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Buloila']);
        DB::table('villages')->insert(['id'=>6223, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Bulontio Barat']);
        DB::table('villages')->insert(['id'=>6224, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Bulontio Timur']);
        DB::table('villages')->insert(['id'=>6225, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Hutakalo']);
        DB::table('villages')->insert(['id'=>6226, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Kasia']);
        DB::table('villages')->insert(['id'=>6227, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Kikia']);
        DB::table('villages')->insert(['id'=>6228, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Lelato']);
        DB::table('villages')->insert(['id'=>6229, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Mebongo']);
        DB::table('villages')->insert(['id'=>6230, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Pulohenti']);
        DB::table('villages')->insert(['id'=>6231, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Puncak Mandiri']);
        DB::table('villages')->insert(['id'=>6232, 'districts_id'=>647, 'zipcode'=>'96254', 'name'=>'Tumba']);
        //Kecamatan Biau Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>648, 'city_id'=>48, 'name'=>'Biau']);
        DB::table('villages')->insert(['id'=>6233, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Biawu (biau)']);
        DB::table('villages')->insert(['id'=>6234, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Bohulo']);
        DB::table('villages')->insert(['id'=>6235, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Bualo']);
        DB::table('villages')->insert(['id'=>6236, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Didingga']);
        DB::table('villages')->insert(['id'=>6237, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Luhuto']);
        DB::table('villages')->insert(['id'=>6238, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Omuto']);
        DB::table('villages')->insert(['id'=>6239, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Potanga (potango)']);
        DB::table('villages')->insert(['id'=>6240, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Sembihingan']);
        DB::table('villages')->insert(['id'=>6241, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Topi']);
        DB::table('villages')->insert(['id'=>6242, 'districts_id'=>648, 'zipcode'=>'96524', 'name'=>'Windu']);
        //Kecamatan Tolinggula Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>649, 'city_id'=>48, 'name'=>'Tolinggula']);
        DB::table('villages')->insert(['id'=>6243, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Cempaka Putih']);
        DB::table('villages')->insert(['id'=>6244, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Ilomangga']);
        DB::table('villages')->insert(['id'=>6245, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Ilotunggulo']);
        DB::table('villages')->insert(['id'=>6246, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Limbato']);
        DB::table('villages')->insert(['id'=>6247, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Molangga']);
        DB::table('villages')->insert(['id'=>6248, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Papulangi (papualangi)']);
        DB::table('villages')->insert(['id'=>6249, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Tolinggula Pantai']);
        DB::table('villages')->insert(['id'=>6250, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Tolinggula Tengah']);
        DB::table('villages')->insert(['id'=>6251, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Tolinggula Ulu']);
        DB::table('villages')->insert(['id'=>6252, 'districts_id'=>649, 'zipcode'=>'96524', 'name'=>'Tolite Jaya']);
        //Kecamatan Anggrek Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>650, 'city_id'=>48, 'name'=>'Anggrek']);
        DB::table('villages')->insert(['id'=>6253, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Datahu']);
        DB::table('villages')->insert(['id'=>6254, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Dudepo']);
        DB::table('villages')->insert(['id'=>6255, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Helumo']);
        DB::table('villages')->insert(['id'=>6256, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Hiyalooile']);
        DB::table('villages')->insert(['id'=>6257, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Ibarat']);
        DB::table('villages')->insert(['id'=>6258, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Ilangata']);
        DB::table('villages')->insert(['id'=>6259, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Ilodulunga']);
        DB::table('villages')->insert(['id'=>6260, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Iloheluma']);
        DB::table('villages')->insert(['id'=>6261, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Langge']);
        DB::table('villages')->insert(['id'=>6262, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Mootilango']);
        DB::table('villages')->insert(['id'=>6263, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Popalo']);
        DB::table('villages')->insert(['id'=>6264, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Putiana']);
        DB::table('villages')->insert(['id'=>6265, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Tolango']);
        DB::table('villages')->insert(['id'=>6266, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Tolongio']);
        DB::table('villages')->insert(['id'=>6267, 'districts_id'=>650, 'zipcode'=>'96525', 'name'=>'Tutuwoto']);
        //Kecamatan Monano Kab. Gorontalo Utara Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>651, 'city_id'=>48, 'name'=>'Monano']);
        DB::table('villages')->insert(['id'=>6268, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Dunu']);
        DB::table('villages')->insert(['id'=>6269, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Garapia']);
        DB::table('villages')->insert(['id'=>6270, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Mokonowu']);
        DB::table('villages')->insert(['id'=>6271, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Monano']);
        DB::table('villages')->insert(['id'=>6272, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Monas']);
        DB::table('villages')->insert(['id'=>6273, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Pilohulata']);
        DB::table('villages')->insert(['id'=>6274, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Sogu']);
        DB::table('villages')->insert(['id'=>6275, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Tolitehuyu']);
        DB::table('villages')->insert(['id'=>6276, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Tudi']);
        DB::table('villages')->insert(['id'=>6277, 'districts_id'=>651, 'zipcode'=>'96525', 'name'=>'Zuriyati']);

        //Kab. Boalemo Provinsi Gorontalo
        DB::table('cities')->insert(['id'=>49, 'province_id'=>7, 'type'=>'regencies', 'name'=>'Boalemo']);
        //Kecamatan Paguyaman Pantai Kab. Boalemo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>652, 'city_id'=>49, 'name'=>'Paguyaman Pantai']);
        DB::table('villages')->insert(['id'=>6278, 'districts_id'=>652, 'zipcode'=>'96261', 'name'=>'Apitalawu (apitalawo)']);
        DB::table('villages')->insert(['id'=>6279, 'districts_id'=>652, 'zipcode'=>'96261', 'name'=>'Bangga']);
        DB::table('villages')->insert(['id'=>6280, 'districts_id'=>652, 'zipcode'=>'96261', 'name'=>'Bubaa']);
        DB::table('villages')->insert(['id'=>6281, 'districts_id'=>652, 'zipcode'=>'96261', 'name'=>'Bukit Karya']);
        DB::table('villages')->insert(['id'=>6282, 'districts_id'=>652, 'zipcode'=>'96261', 'name'=>'Limbatihu']);
        DB::table('villages')->insert(['id'=>6283, 'districts_id'=>652, 'zipcode'=>'96261', 'name'=>'Lito']);
        DB::table('villages')->insert(['id'=>6284, 'districts_id'=>652, 'zipcode'=>'96261', 'name'=>'Olibu']);
        DB::table('villages')->insert(['id'=>6285, 'districts_id'=>652, 'zipcode'=>'96261', 'name'=>'Towayu']);
        //Kecamatan Paguyaman Kab. Boalemo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>653, 'city_id'=>49, 'name'=>'Paguyaman']);
        DB::table('villages')->insert(['id'=>6286, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Balate Jaya']);
        DB::table('villages')->insert(['id'=>6287, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Batu Kramat/keramat']);
        DB::table('villages')->insert(['id'=>6288, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Bongo Iv']);
        DB::table('villages')->insert(['id'=>6289, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Bongo Nol']);
        DB::table('villages')->insert(['id'=>6290, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Bongo Tua']);
        DB::table('villages')->insert(['id'=>6291, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Bualo']);
        DB::table('villages')->insert(['id'=>6292, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Diloato']);
        DB::table('villages')->insert(['id'=>6293, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Girisa']);
        DB::table('villages')->insert(['id'=>6294, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Hulawe (hulawa)']);
        DB::table('villages')->insert(['id'=>6295, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Huwongo']);
        DB::table('villages')->insert(['id'=>6296, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Karya Murni']);
        DB::table('villages')->insert(['id'=>6297, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Kualalumpur']);
        DB::table('villages')->insert(['id'=>6298, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Molombulahe']);
        DB::table('villages')->insert(['id'=>6299, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Mustika']);
        DB::table('villages')->insert(['id'=>6300, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Mutiara']);
        DB::table('villages')->insert(['id'=>6301, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Permata']);
        DB::table('villages')->insert(['id'=>6302, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Rejonegoro']);
        DB::table('villages')->insert(['id'=>6303, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Saripi']);
        DB::table('villages')->insert(['id'=>6304, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Sosial']);
        DB::table('villages')->insert(['id'=>6305, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Sumber Jaya **']);
        DB::table('villages')->insert(['id'=>6306, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Tangkobu']);
        DB::table('villages')->insert(['id'=>6307, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Tenilo']);
        DB::table('villages')->insert(['id'=>6308, 'districts_id'=>653, 'zipcode'=>'96261', 'name'=>'Wonggahu']);
        //Kecamatan Wonosari Kab. Boalemo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>654, 'city_id'=>49, 'name'=>'Wonosari']);
        DB::table('villages')->insert(['id'=>6309, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Bongo Ii']);
        DB::table('villages')->insert(['id'=>6310, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Bongo Iii']);
        DB::table('villages')->insert(['id'=>6311, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Dimito']);
        DB::table('villages')->insert(['id'=>6312, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Dulohupa']);
        DB::table('villages')->insert(['id'=>6313, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Harapan']);
        DB::table('villages')->insert(['id'=>6314, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Jati Mulya']);
        DB::table('villages')->insert(['id'=>6315, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Makmur **']);
        DB::table('villages')->insert(['id'=>6316, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Mekar Jaya']);
        DB::table('villages')->insert(['id'=>6317, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Pangeya (pangea)']);
        DB::table('villages')->insert(['id'=>6318, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Raharja']);
        DB::table('villages')->insert(['id'=>6319, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Sari Tani']);
        DB::table('villages')->insert(['id'=>6320, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Sejahtera **']);
        DB::table('villages')->insert(['id'=>6321, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Suka Maju']);
        DB::table('villages')->insert(['id'=>6322, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Suka Mulia (sukamulya)']);
        DB::table('villages')->insert(['id'=>6323, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Tanjung Harapan']);
        DB::table('villages')->insert(['id'=>6324, 'districts_id'=>654, 'zipcode'=>'96262', 'name'=>'Tri Rukun']);
        //Kecamatan Tilamuta Kab. Boalemo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>655, 'city_id'=>49, 'name'=>'Tilamuta']);
        DB::table('villages')->insert(['id'=>6325, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Ayuhulalo']);
        DB::table('villages')->insert(['id'=>6326, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Bajo']);
        DB::table('villages')->insert(['id'=>6327, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Hungayonaa']);
        DB::table('villages')->insert(['id'=>6328, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Lahumbo']);
        DB::table('villages')->insert(['id'=>6329, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Lamu']);
        DB::table('villages')->insert(['id'=>6330, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Limbato']);
        DB::table('villages')->insert(['id'=>6331, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Modelomo']);
        DB::table('villages')->insert(['id'=>6332, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Mohungo']);
        DB::table('villages')->insert(['id'=>6333, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Pentadu Barat']);
        DB::table('villages')->insert(['id'=>6334, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Pentadu Timur']);
        DB::table('villages')->insert(['id'=>6335, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Piloliyanga']);
        DB::table('villages')->insert(['id'=>6336, 'districts_id'=>655, 'zipcode'=>'96263', 'name'=>'Tenilo']);
        //Kecamatan Dulupi Kab. Boalemo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>656, 'city_id'=>49, 'name'=>'Dulupi']);
        DB::table('villages')->insert(['id'=>6337, 'districts_id'=>656, 'zipcode'=>'96263', 'name'=>'Dulupi']);
        DB::table('villages')->insert(['id'=>6338, 'districts_id'=>656, 'zipcode'=>'96263', 'name'=>'Kotaraja']);
        DB::table('villages')->insert(['id'=>6339, 'districts_id'=>656, 'zipcode'=>'96263', 'name'=>'Pangi']);
        DB::table('villages')->insert(['id'=>6340, 'districts_id'=>656, 'zipcode'=>'96263', 'name'=>'Polohungo']);
        DB::table('villages')->insert(['id'=>6341, 'districts_id'=>656, 'zipcode'=>'96263', 'name'=>'Tabongo']);
        DB::table('villages')->insert(['id'=>6342, 'districts_id'=>656, 'zipcode'=>'96263', 'name'=>'Tanah Putih']);
        DB::table('villages')->insert(['id'=>6343, 'districts_id'=>656, 'zipcode'=>'96263', 'name'=>'Tangga Barito']);
        DB::table('villages')->insert(['id'=>6344, 'districts_id'=>656, 'zipcode'=>'96263', 'name'=>'Tangga Jaya']);
        //Kecamatan Botumoita (botumoito) Kab. Boalemo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>657, 'city_id'=>49, 'name'=>'Botumoita (botumoito)']);
        DB::table('villages')->insert(['id'=>6345, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Bolihutuo']);
        DB::table('villages')->insert(['id'=>6346, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Botumoito']);
        DB::table('villages')->insert(['id'=>6347, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Dulangea (dulangeya)']);
        DB::table('villages')->insert(['id'=>6348, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Hutamonu']);
        DB::table('villages')->insert(['id'=>6349, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Patoameme']);
        DB::table('villages')->insert(['id'=>6350, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Potanga']);
        DB::table('villages')->insert(['id'=>6351, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Rumbia']);
        DB::table('villages')->insert(['id'=>6352, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Tapadaa']);
        DB::table('villages')->insert(['id'=>6353, 'districts_id'=>657, 'zipcode'=>'96264', 'name'=>'Tutulo']);
        //Kecamatan Mananggu Kab. Boalemo Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>658, 'city_id'=>49, 'name'=>'Mananggu']);
        DB::table('villages')->insert(['id'=>6354, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Bendungan']);
        DB::table('villages')->insert(['id'=>6355, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Buti']);
        DB::table('villages')->insert(['id'=>6356, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Kaaruyan']);
        DB::table('villages')->insert(['id'=>6357, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Keramat']);
        DB::table('villages')->insert(['id'=>6358, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Mananggu']);
        DB::table('villages')->insert(['id'=>6359, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Pontolo']);
        DB::table('villages')->insert(['id'=>6360, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Salilama']);
        DB::table('villages')->insert(['id'=>6361, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Tabulo']);
        DB::table('villages')->insert(['id'=>6362, 'districts_id'=>658, 'zipcode'=>'96265', 'name'=>'Tabulo Selatan']);

        //Kab. Pohuwato Provinsi Gorontalo
        DB::table('cities')->insert(['id'=>50, 'province_id'=>7, 'type'=>'regencies', 'name'=>'Pohuwato']);
        //Kecamatan Paguat Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>659, 'city_id'=>50, 'name'=>'Paguat']);
        DB::table('villages')->insert(['id'=>6363, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Buhu Jaya']);
        DB::table('villages')->insert(['id'=>6364, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Bumbulan']);
        DB::table('villages')->insert(['id'=>6365, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Bunuyo']);
        DB::table('villages')->insert(['id'=>6366, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Kamiri']);
        DB::table('villages')->insert(['id'=>6367, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Libuo']);
        DB::table('villages')->insert(['id'=>6368, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Maleo']);
        DB::table('villages')->insert(['id'=>6369, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Molamahu']);
        DB::table('villages')->insert(['id'=>6370, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Pentadu']);
        DB::table('villages')->insert(['id'=>6371, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Siduan']);
        DB::table('villages')->insert(['id'=>6372, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Sipayo']);
        DB::table('villages')->insert(['id'=>6373, 'districts_id'=>659, 'zipcode'=>'96265', 'name'=>'Soginti']);
        //Kecamatan Dengilo Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>660, 'city_id'=>50, 'name'=>'Dengilo']);
        DB::table('villages')->insert(['id'=>6374, 'districts_id'=>660, 'zipcode'=>'96265', 'name'=>'Huta Moputi']);
        DB::table('villages')->insert(['id'=>6375, 'districts_id'=>660, 'zipcode'=>'96265', 'name'=>'Karangetang']);
        DB::table('villages')->insert(['id'=>6376, 'districts_id'=>660, 'zipcode'=>'96265', 'name'=>'Karya Baru']);
        DB::table('villages')->insert(['id'=>6377, 'districts_id'=>660, 'zipcode'=>'96265', 'name'=>'Padengo']);
        DB::table('villages')->insert(['id'=>6378, 'districts_id'=>660, 'zipcode'=>'96265', 'name'=>'Popaya']);
        //Kecamatan Patilanggio Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>661, 'city_id'=>50, 'name'=>'Patilanggio']);
        DB::table('villages')->insert(['id'=>6379, 'districts_id'=>661, 'zipcode'=>'96266', 'name'=>'Balayo']);
        DB::table('villages')->insert(['id'=>6380, 'districts_id'=>661, 'zipcode'=>'96266', 'name'=>'Dudepo']);
        DB::table('villages')->insert(['id'=>6381, 'districts_id'=>661, 'zipcode'=>'96266', 'name'=>'Dulomo']);
        DB::table('villages')->insert(['id'=>6382, 'districts_id'=>661, 'zipcode'=>'96266', 'name'=>'Ilo Heluma']);
        DB::table('villages')->insert(['id'=>6383, 'districts_id'=>661, 'zipcode'=>'96266', 'name'=>'Manawa']);
        DB::table('villages')->insert(['id'=>6384, 'districts_id'=>661, 'zipcode'=>'96266', 'name'=>'Suka Makmur']);
        //Kecamatan Marisa Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>662, 'city_id'=>50, 'name'=>'Marisa']);
        DB::table('villages')->insert(['id'=>6385, 'districts_id'=>662, 'zipcode'=>'96266', 'name'=>'Batubilotahu Indah']);
        DB::table('villages')->insert(['id'=>6386, 'districts_id'=>662, 'zipcode'=>'96266', 'name'=>'Bulangita']);
        DB::table('villages')->insert(['id'=>6387, 'districts_id'=>662, 'zipcode'=>'96266', 'name'=>'Palopo']);
        DB::table('villages')->insert(['id'=>6388, 'districts_id'=>662, 'zipcode'=>'96266', 'name'=>'Pohuwato']);
        DB::table('villages')->insert(['id'=>6389, 'districts_id'=>662, 'zipcode'=>'96266', 'name'=>'Pohuwato Timur']);
        DB::table('villages')->insert(['id'=>6390, 'districts_id'=>662, 'zipcode'=>'96266', 'name'=>'Teratai']);
        DB::table('villages')->insert(['id'=>6391, 'districts_id'=>662, 'zipcode'=>'96466', 'name'=>'Marisa Selatan']);
        DB::table('villages')->insert(['id'=>6392, 'districts_id'=>662, 'zipcode'=>'96466', 'name'=>'Marisa Utara']);
        //Kecamatan Duhiadaa Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>663, 'city_id'=>50, 'name'=>'Duhiadaa']);
        DB::table('villages')->insert(['id'=>6393, 'districts_id'=>663, 'zipcode'=>'96266', 'name'=>'Bulili']);
        DB::table('villages')->insert(['id'=>6394, 'districts_id'=>663, 'zipcode'=>'96266', 'name'=>'Buntulia Barat']);
        DB::table('villages')->insert(['id'=>6395, 'districts_id'=>663, 'zipcode'=>'96266', 'name'=>'Buntulia Jaya']);
        DB::table('villages')->insert(['id'=>6396, 'districts_id'=>663, 'zipcode'=>'96266', 'name'=>'Buntulia Selatan']);
        DB::table('villages')->insert(['id'=>6397, 'districts_id'=>663, 'zipcode'=>'96266', 'name'=>'Duhiadaa']);
        DB::table('villages')->insert(['id'=>6398, 'districts_id'=>663, 'zipcode'=>'96266', 'name'=>'Mekar Jaya']);
        DB::table('villages')->insert(['id'=>6399, 'districts_id'=>663, 'zipcode'=>'96266', 'name'=>'Mootilango']);
        DB::table('villages')->insert(['id'=>6400, 'districts_id'=>663, 'zipcode'=>'96266', 'name'=>'Padeng']);
        //Kecamatan Buntulia Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>664, 'city_id'=>50, 'name'=>'Buntulia']);
        DB::table('villages')->insert(['id'=>6401, 'districts_id'=>664, 'zipcode'=>'96266', 'name'=>'Buntulia Tengah']);
        DB::table('villages')->insert(['id'=>6402, 'districts_id'=>664, 'zipcode'=>'96266', 'name'=>'Buntulia Utara']);
        DB::table('villages')->insert(['id'=>6403, 'districts_id'=>664, 'zipcode'=>'96266', 'name'=>'Hulawa']);
        DB::table('villages')->insert(['id'=>6404, 'districts_id'=>664, 'zipcode'=>'96266', 'name'=>'Karya Indah']);
        DB::table('villages')->insert(['id'=>6405, 'districts_id'=>664, 'zipcode'=>'96266', 'name'=>'Sipatana']);
        DB::table('villages')->insert(['id'=>6406, 'districts_id'=>664, 'zipcode'=>'96266', 'name'=>'Taluduyunu']);
        DB::table('villages')->insert(['id'=>6407, 'districts_id'=>664, 'zipcode'=>'96266', 'name'=>'Taluduyunu Utara']);
        //Kecamatan Popayato Timur Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>665, 'city_id'=>50, 'name'=>'Popayato Timur']);
        DB::table('villages')->insert(['id'=>6408, 'districts_id'=>665, 'zipcode'=>'96266', 'name'=>'Marisa']);
        DB::table('villages')->insert(['id'=>6409, 'districts_id'=>665, 'zipcode'=>'96467', 'name'=>'Bunto']);
        DB::table('villages')->insert(['id'=>6410, 'districts_id'=>665, 'zipcode'=>'96467', 'name'=>'Kelapa Lima']);
        DB::table('villages')->insert(['id'=>6411, 'districts_id'=>665, 'zipcode'=>'96467', 'name'=>'Londoun (londuun)']);
        DB::table('villages')->insert(['id'=>6412, 'districts_id'=>665, 'zipcode'=>'96467', 'name'=>'Maleo']);
        DB::table('villages')->insert(['id'=>6413, 'districts_id'=>665, 'zipcode'=>'96467', 'name'=>'Milangodaa']);
        DB::table('villages')->insert(['id'=>6414, 'districts_id'=>665, 'zipcode'=>'96467', 'name'=>'Tahele']);
        //Kecamatan Popayato Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>666, 'city_id'=>50, 'name'=>'Popayato']);
        DB::table('villages')->insert(['id'=>6415, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Bukit Tingki']);
        DB::table('villages')->insert(['id'=>6416, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Bumi Bahari']);
        DB::table('villages')->insert(['id'=>6417, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Dambalo']);
        DB::table('villages')->insert(['id'=>6418, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Popayato']);
        DB::table('villages')->insert(['id'=>6419, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Telaga']);
        DB::table('villages')->insert(['id'=>6420, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Telaga Biru']);
        DB::table('villages')->insert(['id'=>6421, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Torosiaje']);
        DB::table('villages')->insert(['id'=>6422, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Torosiaje Jaya']);
        DB::table('villages')->insert(['id'=>6423, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Trikora']);
        DB::table('villages')->insert(['id'=>6424, 'districts_id'=>666, 'zipcode'=>'96467', 'name'=>'Tunas Harapan']);
        //Kecamatan Popayato Barat Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>667, 'city_id'=>50, 'name'=>'Popayato Barat']);
        DB::table('villages')->insert(['id'=>6425, 'districts_id'=>667, 'zipcode'=>'96467', 'name'=>'Butungale']);
        DB::table('villages')->insert(['id'=>6426, 'districts_id'=>667, 'zipcode'=>'96467', 'name'=>'Dudewulo']);
        DB::table('villages')->insert(['id'=>6427, 'districts_id'=>667, 'zipcode'=>'96467', 'name'=>'Molosipat']);
        DB::table('villages')->insert(['id'=>6428, 'districts_id'=>667, 'zipcode'=>'96467', 'name'=>'Molosipat Utara']);
        DB::table('villages')->insert(['id'=>6429, 'districts_id'=>667, 'zipcode'=>'96467', 'name'=>'Padengo']);
        DB::table('villages')->insert(['id'=>6430, 'districts_id'=>667, 'zipcode'=>'96467', 'name'=>'Persatuan']);
        DB::table('villages')->insert(['id'=>6431, 'districts_id'=>667, 'zipcode'=>'96467', 'name'=>'Tunas Jaya']);
        //Kecamatan Lemito Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>668, 'city_id'=>50, 'name'=>'Lemito']);
        DB::table('villages')->insert(['id'=>6432, 'districts_id'=>668, 'zipcode'=>'96468', 'name'=>'Babalonge']);
        DB::table('villages')->insert(['id'=>6433, 'districts_id'=>668, 'zipcode'=>'96468', 'name'=>'Kenari']);
        DB::table('villages')->insert(['id'=>6434, 'districts_id'=>668, 'zipcode'=>'96468', 'name'=>'Lemito']);
        DB::table('villages')->insert(['id'=>6435, 'districts_id'=>668, 'zipcode'=>'96468', 'name'=>'Lemito Utara']);
        DB::table('villages')->insert(['id'=>6436, 'districts_id'=>668, 'zipcode'=>'96468', 'name'=>'Lomuli']);
        DB::table('villages')->insert(['id'=>6437, 'districts_id'=>668, 'zipcode'=>'96468', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>6438, 'districts_id'=>668, 'zipcode'=>'96468', 'name'=>'Wonggarasi Barat']);
        DB::table('villages')->insert(['id'=>6439, 'districts_id'=>668, 'zipcode'=>'96468', 'name'=>'Wonggarasi Tengah']);
        //Kecamatan Wanggarasi Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>669, 'city_id'=>50, 'name'=>'Wanggarasi']);
        DB::table('villages')->insert(['id'=>6440, 'districts_id'=>669, 'zipcode'=>'96468', 'name'=>'Bohusami']);
        DB::table('villages')->insert(['id'=>6441, 'districts_id'=>669, 'zipcode'=>'96468', 'name'=>'Bukit Harapan']);
        DB::table('villages')->insert(['id'=>6442, 'districts_id'=>669, 'zipcode'=>'96468', 'name'=>'Lembah Permai (malango Ii)']);
        DB::table('villages')->insert(['id'=>6443, 'districts_id'=>669, 'zipcode'=>'96468', 'name'=>'Wanggarasi (wonggarasi Timur)']);
        //Kecamatan Randangan Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>670, 'city_id'=>50, 'name'=>'Randangan']);
        DB::table('villages')->insert(['id'=>6444, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Ayula']);
        DB::table('villages')->insert(['id'=>6445, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Banuroja']);
        DB::table('villages')->insert(['id'=>6446, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Huyula']);
        DB::table('villages')->insert(['id'=>6447, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Imbodu']);
        DB::table('villages')->insert(['id'=>6448, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Limbula']);
        DB::table('villages')->insert(['id'=>6449, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Manunggal Karya']);
        DB::table('villages')->insert(['id'=>6450, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Motolohu']);
        DB::table('villages')->insert(['id'=>6451, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Motolohu Selatan']);
        DB::table('villages')->insert(['id'=>6452, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Omayuwa']);
        DB::table('villages')->insert(['id'=>6453, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Patuhu']);
        DB::table('villages')->insert(['id'=>6454, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Pelambane Perda']);
        DB::table('villages')->insert(['id'=>6455, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Sari Murni']);
        DB::table('villages')->insert(['id'=>6456, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Sidorukun']);
        DB::table('villages')->insert(['id'=>6457, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Siduwonge']);
        DB::table('villages')->insert(['id'=>6458, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Tuweya']);
        DB::table('villages')->insert(['id'=>6459, 'districts_id'=>670, 'zipcode'=>'96469', 'name'=>'Yipilo']);
        //Kecamatan Taluditi (taluduti) Kab. Pohuwato Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>671, 'city_id'=>50, 'name'=>'Taluditi (taluduti)']);
        DB::table('villages')->insert(['id'=>6460, 'districts_id'=>671, 'zipcode'=>'96469', 'name'=>'Kalimas']);
        DB::table('villages')->insert(['id'=>6461, 'districts_id'=>671, 'zipcode'=>'96469', 'name'=>'Makarti Jaya']);
        DB::table('villages')->insert(['id'=>6462, 'districts_id'=>671, 'zipcode'=>'96469', 'name'=>'Malango']);
        DB::table('villages')->insert(['id'=>6463, 'districts_id'=>671, 'zipcode'=>'96469', 'name'=>'Marisa Iv']);
        DB::table('villages')->insert(['id'=>6464, 'districts_id'=>671, 'zipcode'=>'96469', 'name'=>'Panca Karsa I']);
        DB::table('villages')->insert(['id'=>6465, 'districts_id'=>671, 'zipcode'=>'96469', 'name'=>'Panca Karsa Ii']);
        DB::table('villages')->insert(['id'=>6466, 'districts_id'=>671, 'zipcode'=>'96469', 'name'=>'Tirto Asri']);

        //Kab. Bone Bolango Provinsi Gorontalo
        DB::table('cities')->insert(['id'=>51, 'province_id'=>7, 'type'=>'regencies', 'name'=>'Bone Bolango']);
        //Kecamatan Bulango Selatan Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>672, 'city_id'=>51, 'name'=>'Bulango Selatan']);
        DB::table('villages')->insert(['id'=>6467, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Ayula Selatan']);
        DB::table('villages')->insert(['id'=>6468, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Ayula Tilango']);
        DB::table('villages')->insert(['id'=>6469, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Ayula Timur']);
        DB::table('villages')->insert(['id'=>6470, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Ayula Utara']);
        DB::table('villages')->insert(['id'=>6471, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Huntu Selatan']);
        DB::table('villages')->insert(['id'=>6472, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Huntu Utara']);
        DB::table('villages')->insert(['id'=>6473, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Lamahu']);
        DB::table('villages')->insert(['id'=>6474, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Mekar Jaya']);
        DB::table('villages')->insert(['id'=>6475, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Sejahtera']);
        DB::table('villages')->insert(['id'=>6476, 'districts_id'=>672, 'zipcode'=>'96582', 'name'=>'Tinelo Ayula']);
        //Kecamatan Bulango Utara Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>673, 'city_id'=>51, 'name'=>'Bulango Utara']);
        DB::table('villages')->insert(['id'=>6477, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Bandungan']);
        DB::table('villages')->insert(['id'=>6478, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Boidu']);
        DB::table('villages')->insert(['id'=>6479, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Bunuo']);
        DB::table('villages')->insert(['id'=>6480, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Kopi']);
        DB::table('villages')->insert(['id'=>6481, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Lomaya']);
        DB::table('villages')->insert(['id'=>6482, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Longalo']);
        DB::table('villages')->insert(['id'=>6483, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>6484, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Tuloa']);
        DB::table('villages')->insert(['id'=>6485, 'districts_id'=>673, 'zipcode'=>'96582', 'name'=>'Tupa']);
        //Kecamatan Bulango Timur Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>674, 'city_id'=>51, 'name'=>'Bulango Timur']);
        DB::table('villages')->insert(['id'=>6486, 'districts_id'=>674, 'zipcode'=>'96582', 'name'=>'Bulotalangi']);
        DB::table('villages')->insert(['id'=>6487, 'districts_id'=>674, 'zipcode'=>'96582', 'name'=>'Bulotalangi Barat']);
        DB::table('villages')->insert(['id'=>6488, 'districts_id'=>674, 'zipcode'=>'96582', 'name'=>'Bulotalangi Timur']);
        DB::table('villages')->insert(['id'=>6489, 'districts_id'=>674, 'zipcode'=>'96582', 'name'=>'Popodu']);
        DB::table('villages')->insert(['id'=>6490, 'districts_id'=>674, 'zipcode'=>'96582', 'name'=>'Toluwaya (tuloa)']);
        //Kecamatan Tapa Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>675, 'city_id'=>51, 'name'=>'Tapa']);
        DB::table('villages')->insert(['id'=>6491, 'districts_id'=>675, 'zipcode'=>'96582', 'name'=>'Dunggala']);
        DB::table('villages')->insert(['id'=>6492, 'districts_id'=>675, 'zipcode'=>'96582', 'name'=>'Keramat']);
        DB::table('villages')->insert(['id'=>6493, 'districts_id'=>675, 'zipcode'=>'96582', 'name'=>'Langge']);
        DB::table('villages')->insert(['id'=>6494, 'districts_id'=>675, 'zipcode'=>'96582', 'name'=>'Meranti']);
        DB::table('villages')->insert(['id'=>6495, 'districts_id'=>675, 'zipcode'=>'96582', 'name'=>'Talulobutu']);
        DB::table('villages')->insert(['id'=>6496, 'districts_id'=>675, 'zipcode'=>'96582', 'name'=>'Talulobutu Selatan']);
        DB::table('villages')->insert(['id'=>6497, 'districts_id'=>675, 'zipcode'=>'96582', 'name'=>'Talumopatu']);
        //Kecamatan Bulango Ulu Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>676, 'city_id'=>51, 'name'=>'Bulango Ulu']);
        DB::table('villages')->insert(['id'=>6498, 'districts_id'=>676, 'zipcode'=>'96582', 'name'=>'Ilomata']);
        DB::table('villages')->insert(['id'=>6499, 'districts_id'=>676, 'zipcode'=>'96582', 'name'=>'Mongiilo']);
        DB::table('villages')->insert(['id'=>6500, 'districts_id'=>676, 'zipcode'=>'96582', 'name'=>'Mongiilo Utara']);
        DB::table('villages')->insert(['id'=>6501, 'districts_id'=>676, 'zipcode'=>'96582', 'name'=>'Owata']);
        DB::table('villages')->insert(['id'=>6502, 'districts_id'=>676, 'zipcode'=>'96582', 'name'=>'Pilolaheya']);
        DB::table('villages')->insert(['id'=>6503, 'districts_id'=>676, 'zipcode'=>'96582', 'name'=>'Suka Makmur']);
        //Kecamatan Tilongkabila Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>677, 'city_id'=>51, 'name'=>'Tilongkabila']);
        DB::table('villages')->insert(['id'=>6504, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Berlian']);
        DB::table('villages')->insert(['id'=>6505, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Bongohulowa']);
        DB::table('villages')->insert(['id'=>6506, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Bongoime']);
        DB::table('villages')->insert(['id'=>6507, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Bongopini']);
        DB::table('villages')->insert(['id'=>6508, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Butu']);
        DB::table('villages')->insert(['id'=>6509, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Iloheluma']);
        DB::table('villages')->insert(['id'=>6510, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Lonuo']);
        DB::table('villages')->insert(['id'=>6511, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Motilango (mootilango)']);
        DB::table('villages')->insert(['id'=>6512, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Moutong']);
        DB::table('villages')->insert(['id'=>6513, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Permata']);
        DB::table('villages')->insert(['id'=>6514, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Tamboo']);
        DB::table('villages')->insert(['id'=>6515, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Toto Utara']);
        DB::table('villages')->insert(['id'=>6516, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Tunggulo']);
        DB::table('villages')->insert(['id'=>6517, 'districts_id'=>677, 'zipcode'=>'96583', 'name'=>'Tunggulo Selatan']);
        //Kecamatan Kabila Bone Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>678, 'city_id'=>51, 'name'=>'Kabila Bone']);
        DB::table('villages')->insert(['id'=>6518, 'districts_id'=>678, 'zipcode'=>'96583', 'name'=>'Biluango']);
        DB::table('villages')->insert(['id'=>6519, 'districts_id'=>678, 'zipcode'=>'96583', 'name'=>'Botubarani']);
        DB::table('villages')->insert(['id'=>6520, 'districts_id'=>678, 'zipcode'=>'96583', 'name'=>'Huangobotu']);
        DB::table('villages')->insert(['id'=>6521, 'districts_id'=>678, 'zipcode'=>'96585', 'name'=>'Bintalahe']);
        DB::table('villages')->insert(['id'=>6522, 'districts_id'=>678, 'zipcode'=>'96585', 'name'=>'Botutonuo (botutonua)']);
        DB::table('villages')->insert(['id'=>6523, 'districts_id'=>678, 'zipcode'=>'96585', 'name'=>'Modelomo']);
        DB::table('villages')->insert(['id'=>6524, 'districts_id'=>678, 'zipcode'=>'96585', 'name'=>'Molotabu (molutabu)']);
        DB::table('villages')->insert(['id'=>6525, 'districts_id'=>678, 'zipcode'=>'96585', 'name'=>'Olele']);
        DB::table('villages')->insert(['id'=>6526, 'districts_id'=>678, 'zipcode'=>'96585', 'name'=>'Oluhuta']);
        //Kecamatan Botu Pingge Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>679, 'city_id'=>51, 'name'=>'Botu Pingge']);
        DB::table('villages')->insert(['id'=>6527, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Buata']);
        DB::table('villages')->insert(['id'=>6528, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Luwohu']);
        DB::table('villages')->insert(['id'=>6529, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Panggulo']);
        DB::table('villages')->insert(['id'=>6530, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Panggulo Barat']);
        DB::table('villages')->insert(['id'=>6531, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Sukma']);
        DB::table('villages')->insert(['id'=>6532, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Tanah Putih']);
        DB::table('villages')->insert(['id'=>6533, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Timbuolo']);
        DB::table('villages')->insert(['id'=>6534, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Timbuolo Tengah']);
        DB::table('villages')->insert(['id'=>6535, 'districts_id'=>679, 'zipcode'=>'96583', 'name'=>'Timbuolo Timur']);
        //Kecamatan Kabila Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>680, 'city_id'=>51, 'name'=>'Kabila']);
        DB::table('villages')->insert(['id'=>6536, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Dutohe']);
        DB::table('villages')->insert(['id'=>6537, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Dutohe Barat']);
        DB::table('villages')->insert(['id'=>6538, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Oluhuta']);
        DB::table('villages')->insert(['id'=>6539, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Oluhuta Utara']);
        DB::table('villages')->insert(['id'=>6540, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Padengo']);
        DB::table('villages')->insert(['id'=>6541, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Pauwo']);
        DB::table('villages')->insert(['id'=>6542, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Poowo']);
        DB::table('villages')->insert(['id'=>6543, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Poowo Barat']);
        DB::table('villages')->insert(['id'=>6544, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Talango']);
        DB::table('villages')->insert(['id'=>6545, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Tanggilingo']);
        DB::table('villages')->insert(['id'=>6546, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Toto Selatan']);
        DB::table('villages')->insert(['id'=>6547, 'districts_id'=>680, 'zipcode'=>'96583', 'name'=>'Tumbihe']);
        //Kecamatan Suwawa Tengah Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>681, 'city_id'=>51, 'name'=>'Suwawa Tengah']);
        DB::table('villages')->insert(['id'=>6548, 'districts_id'=>681, 'zipcode'=>'96584', 'name'=>'Alele']);
        DB::table('villages')->insert(['id'=>6549, 'districts_id'=>681, 'zipcode'=>'96584', 'name'=>'Duano']);
        DB::table('villages')->insert(['id'=>6550, 'districts_id'=>681, 'zipcode'=>'96584', 'name'=>'Lombongo']);
        DB::table('villages')->insert(['id'=>6551, 'districts_id'=>681, 'zipcode'=>'96584', 'name'=>'Lompotoo']);
        DB::table('villages')->insert(['id'=>6552, 'districts_id'=>681, 'zipcode'=>'96584', 'name'=>'Tapadaa']);
        DB::table('villages')->insert(['id'=>6553, 'districts_id'=>681, 'zipcode'=>'96584', 'name'=>'Tolomato']);
        //Kecamatan Pinogu Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>682, 'city_id'=>51, 'name'=>'Pinogu']);
        DB::table('villages')->insert(['id'=>6554, 'districts_id'=>682, 'zipcode'=>'96584', 'name'=>'Bangio']);
        DB::table('villages')->insert(['id'=>6555, 'districts_id'=>682, 'zipcode'=>'96584', 'name'=>'Dataran Hijau']);
        DB::table('villages')->insert(['id'=>6556, 'districts_id'=>682, 'zipcode'=>'96584', 'name'=>'Pinogu']);
        DB::table('villages')->insert(['id'=>6557, 'districts_id'=>682, 'zipcode'=>'96584', 'name'=>'Pinogu Permai']);
        DB::table('villages')->insert(['id'=>6558, 'districts_id'=>682, 'zipcode'=>'96584', 'name'=>'Tilonggibila']);
        //Kecamatan Suwawa Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>683, 'city_id'=>51, 'name'=>'Suwawa']);
        DB::table('villages')->insert(['id'=>6559, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Boludawa']);
        DB::table('villages')->insert(['id'=>6560, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Bube']);
        DB::table('villages')->insert(['id'=>6561, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Bube Baru']);
        DB::table('villages')->insert(['id'=>6562, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Bubeya']);
        DB::table('villages')->insert(['id'=>6563, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Helumo']);
        DB::table('villages')->insert(['id'=>6564, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Huluduotamo']);
        DB::table('villages')->insert(['id'=>6565, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Tinelo']);
        DB::table('villages')->insert(['id'=>6566, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Tingkohubu']);
        DB::table('villages')->insert(['id'=>6567, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Tingkohubu Timur']);
        DB::table('villages')->insert(['id'=>6568, 'districts_id'=>683, 'zipcode'=>'96584', 'name'=>'Ulanta']);
        //Kecamatan Suwawa Selatan Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>684, 'city_id'=>51, 'name'=>'Suwawa Selatan']);
        DB::table('villages')->insert(['id'=>6569, 'districts_id'=>684, 'zipcode'=>'96584', 'name'=>'Bonda Raya']);
        DB::table('villages')->insert(['id'=>6570, 'districts_id'=>684, 'zipcode'=>'96584', 'name'=>'Bondawuna']);
        DB::table('villages')->insert(['id'=>6571, 'districts_id'=>684, 'zipcode'=>'96584', 'name'=>'Bonedaa']);
        DB::table('villages')->insert(['id'=>6572, 'districts_id'=>684, 'zipcode'=>'96584', 'name'=>'Bulontala']);
        DB::table('villages')->insert(['id'=>6573, 'districts_id'=>684, 'zipcode'=>'96584', 'name'=>'Bulontala Timur']);
        DB::table('villages')->insert(['id'=>6574, 'districts_id'=>684, 'zipcode'=>'96584', 'name'=>'Libungo']);
        DB::table('villages')->insert(['id'=>6575, 'districts_id'=>684, 'zipcode'=>'96584', 'name'=>'Molintogupo']);
        DB::table('villages')->insert(['id'=>6576, 'districts_id'=>684, 'zipcode'=>'96584', 'name'=>'Pancuran']);
        //Kecamatan Suwawa Timur Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>685, 'city_id'=>51, 'name'=>'Suwawa Timur']);
        DB::table('villages')->insert(['id'=>6577, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Dataran Hijau']);
        DB::table('villages')->insert(['id'=>6578, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Dumbayabulan']);
        DB::table('villages')->insert(['id'=>6579, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Dumbayabulan Timur']);
        DB::table('villages')->insert(['id'=>6580, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Panggulo']);
        DB::table('villages')->insert(['id'=>6581, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Poduoma']);
        DB::table('villages')->insert(['id'=>6582, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Tilangobula']);
        DB::table('villages')->insert(['id'=>6583, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Tulabolo']);
        DB::table('villages')->insert(['id'=>6584, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Tulabolo Barat']);
        DB::table('villages')->insert(['id'=>6585, 'districts_id'=>685, 'zipcode'=>'96584', 'name'=>'Tulabolo Timur']);
        //Kecamatan Bone Raya Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>686, 'city_id'=>51, 'name'=>'Bone Raya']);
        DB::table('villages')->insert(['id'=>6586, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Alo']);
        DB::table('villages')->insert(['id'=>6587, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Bunga']);
        DB::table('villages')->insert(['id'=>6588, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Inomata']);
        DB::table('villages')->insert(['id'=>6589, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Laut Biru']);
        DB::table('villages')->insert(['id'=>6590, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Moopiya (mopuya)']);
        DB::table('villages')->insert(['id'=>6591, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Mootawa']);
        DB::table('villages')->insert(['id'=>6592, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Mootayu']);
        DB::table('villages')->insert(['id'=>6593, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Mootinelo']);
        DB::table('villages')->insert(['id'=>6594, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Pelita Jaya']);
        DB::table('villages')->insert(['id'=>6595, 'districts_id'=>686, 'zipcode'=>'96585', 'name'=>'Tombulilato']);
        //Kecamatan Bonepantai Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>687, 'city_id'=>51, 'name'=>'Bonepantai']);
        DB::table('villages')->insert(['id'=>6596, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Batu Hijau']);
        DB::table('villages')->insert(['id'=>6597, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Bilungala']);
        DB::table('villages')->insert(['id'=>6598, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Bilungala Utara']);
        DB::table('villages')->insert(['id'=>6599, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Kemiri']);
        DB::table('villages')->insert(['id'=>6600, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Lembah Hijau']);
        DB::table('villages')->insert(['id'=>6601, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Ombulo Hijau']);
        DB::table('villages')->insert(['id'=>6602, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Pelita Hijau']);
        DB::table('villages')->insert(['id'=>6603, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Tamboo']);
        DB::table('villages')->insert(['id'=>6604, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Tihu']);
        DB::table('villages')->insert(['id'=>6605, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Tolotio']);
        DB::table('villages')->insert(['id'=>6606, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Tongo']);
        DB::table('villages')->insert(['id'=>6607, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Tunas Jaya']);
        DB::table('villages')->insert(['id'=>6608, 'districts_id'=>687, 'zipcode'=>'96585', 'name'=>'Uabanga']);
        //Kecamatan Bone Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>688, 'city_id'=>51, 'name'=>'Bone']);
        DB::table('villages')->insert(['id'=>6609, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Bilolantuna']);
        DB::table('villages')->insert(['id'=>6610, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Cendana Putih']);
        DB::table('villages')->insert(['id'=>6611, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Ilohuuwa']);
        DB::table('villages')->insert(['id'=>6612, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Inogaluma']);
        DB::table('villages')->insert(['id'=>6613, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Masiaga']);
        DB::table('villages')->insert(['id'=>6614, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Molamahu']);
        DB::table('villages')->insert(['id'=>6615, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Monano']);
        DB::table('villages')->insert(['id'=>6616, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Moodulio']);
        DB::table('villages')->insert(['id'=>6617, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Muara Bone']);
        DB::table('villages')->insert(['id'=>6618, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Permata']);
        DB::table('villages')->insert(['id'=>6619, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Sogitia']);
        DB::table('villages')->insert(['id'=>6620, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Taludaa']);
        DB::table('villages')->insert(['id'=>6621, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Tumbuh Mekar']);
        DB::table('villages')->insert(['id'=>6622, 'districts_id'=>688, 'zipcode'=>'96585', 'name'=>'Waluhu']);
        //Kecamatan Bulawa Kab. Bone Bolango Provinsi Gorontalo
        DB::table('districts')->insert(['id'=>689, 'city_id'=>51, 'name'=>'Bulawa']);
        DB::table('villages')->insert(['id'=>6623, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Bukit Hijau']);
        DB::table('villages')->insert(['id'=>6624, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Bunga Hijau']);
        DB::table('villages')->insert(['id'=>6625, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Kaidundu']);
        DB::table('villages')->insert(['id'=>6626, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Kaidundu Barat']);
        DB::table('villages')->insert(['id'=>6627, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Mamungaa']);
        DB::table('villages')->insert(['id'=>6628, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Mamungaa Timur']);
        DB::table('villages')->insert(['id'=>6629, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Mopuya']);
        DB::table('villages')->insert(['id'=>6630, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Nyiur Hijau']);
        DB::table('villages')->insert(['id'=>6631, 'districts_id'=>689, 'zipcode'=>'96585', 'name'=>'Patoa']);
    }
}
