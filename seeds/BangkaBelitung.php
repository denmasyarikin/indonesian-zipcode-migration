<?php

use Illuminate\Database\Seeder;

class BangkaBelitung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('provinces')->insert(['id'=>2, 'name'=>'Bangka Belitung']);

        //Kota Pangkal Pinang Provinsi Bangka Belitung
        DB::table('cities')->insert(['id'=>10, 'province_id'=>2, 'type'=>'city', 'name'=>'Pangkal Pinang']);
        //Kecamatan Gabek Kota Pangkal Pinang Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>58, 'city_id'=>10, 'name'=>'Gabek']);
        DB::table('villages')->insert(['id'=>715, 'districts_id'=>58, 'zipcode'=>'33111', 'name'=>'Air Salemba']);
        DB::table('villages')->insert(['id'=>716, 'districts_id'=>58, 'zipcode'=>'33116', 'name'=>'Gabek Dua']);
        DB::table('villages')->insert(['id'=>717, 'districts_id'=>58, 'zipcode'=>'33117', 'name'=>'Selindung (selindung Lama)']);
        DB::table('villages')->insert(['id'=>718, 'districts_id'=>58, 'zipcode'=>'33117', 'name'=>'Selindung Baru']);
        DB::table('villages')->insert(['id'=>719, 'districts_id'=>58, 'zipcode'=>'33118', 'name'=>'Gabek Satu']);
        DB::table('villages')->insert(['id'=>720, 'districts_id'=>58, 'zipcode'=>'33119', 'name'=>'Jerambah Gantung']);
        //Kecamatan Pangkal Balam Kota Pangkal Pinang Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>59, 'city_id'=>10, 'name'=>'Pangkal Balam']);
        DB::table('villages')->insert(['id'=>721, 'districts_id'=>59, 'zipcode'=>'33111', 'name'=>'Ketapang']);
        DB::table('villages')->insert(['id'=>722, 'districts_id'=>59, 'zipcode'=>'33111', 'name'=>'Rejosari']);
        DB::table('villages')->insert(['id'=>723, 'districts_id'=>59, 'zipcode'=>'33113', 'name'=>'Ampui']);
        DB::table('villages')->insert(['id'=>724, 'districts_id'=>59, 'zipcode'=>'33115', 'name'=>'Lontong Pancur']);
        DB::table('villages')->insert(['id'=>725, 'districts_id'=>59, 'zipcode'=>'33115', 'name'=>'Pasir Garam']);
        //Kecamatan Taman Sari Kota Pangkal Pinang Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>60, 'city_id'=>10, 'name'=>'Taman Sari']);
        DB::table('villages')->insert(['id'=>726, 'districts_id'=>60, 'zipcode'=>'33121', 'name'=>'Batin Tikal']);
        DB::table('villages')->insert(['id'=>727, 'districts_id'=>60, 'zipcode'=>'33121', 'name'=>'Opas Indah']);
        DB::table('villages')->insert(['id'=>728, 'districts_id'=>60, 'zipcode'=>'33121', 'name'=>'Rawa Bangun']);
        DB::table('villages')->insert(['id'=>729, 'districts_id'=>60, 'zipcode'=>'33123', 'name'=>'Kejaksaan']);
        DB::table('villages')->insert(['id'=>730, 'districts_id'=>60, 'zipcode'=>'33127', 'name'=>'Gedung Nasional']);
        //Kecamatan Gerunggang Kota Pangkal Pinang Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>61, 'city_id'=>10, 'name'=>'Gerunggang']);
        DB::table('villages')->insert(['id'=>731, 'districts_id'=>61, 'zipcode'=>'33123', 'name'=>'Air Kepala Tujuh']);
        DB::table('villages')->insert(['id'=>732, 'districts_id'=>61, 'zipcode'=>'33123', 'name'=>'Bukit Merapin (bukit Merapen)']);
        DB::table('villages')->insert(['id'=>733, 'districts_id'=>61, 'zipcode'=>'33123', 'name'=>'Bukit Sari']);
        DB::table('villages')->insert(['id'=>734, 'districts_id'=>61, 'zipcode'=>'33123', 'name'=>'Taman Bunga']);
        DB::table('villages')->insert(['id'=>735, 'districts_id'=>61, 'zipcode'=>'33124', 'name'=>'Tua Tunu Indah']);
        DB::table('villages')->insert(['id'=>736, 'districts_id'=>61, 'zipcode'=>'33125', 'name'=>'Kacang Pedang']);
        //Kecamatan Rangkui Kota Pangkal Pinang Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>62, 'city_id'=>10, 'name'=>'Rangkui']);
        DB::table('villages')->insert(['id'=>737, 'districts_id'=>62, 'zipcode'=>'33132', 'name'=>'Masjid Jamik']);
        DB::table('villages')->insert(['id'=>738, 'districts_id'=>62, 'zipcode'=>'33133', 'name'=>'Pintu Air']);
        DB::table('villages')->insert(['id'=>739, 'districts_id'=>62, 'zipcode'=>'33134', 'name'=>'Keramat']);
        DB::table('villages')->insert(['id'=>740, 'districts_id'=>62, 'zipcode'=>'33135', 'name'=>'Asam']);
        DB::table('villages')->insert(['id'=>741, 'districts_id'=>62, 'zipcode'=>'33136', 'name'=>'Melintang']);
        DB::table('villages')->insert(['id'=>742, 'districts_id'=>62, 'zipcode'=>'33137', 'name'=>'Parit Lalang']);
        DB::table('villages')->insert(['id'=>743, 'districts_id'=>62, 'zipcode'=>'33138', 'name'=>'Bintang']);
        DB::table('villages')->insert(['id'=>744, 'districts_id'=>62, 'zipcode'=>'33139', 'name'=>'Pasir Putih']);
        //Kecamatan Girimaya Kota Pangkal Pinang Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>63, 'city_id'=>10, 'name'=>'Girimaya']);
        DB::table('villages')->insert(['id'=>745, 'districts_id'=>63, 'zipcode'=>'33141', 'name'=>'Batu Intan']);
        DB::table('villages')->insert(['id'=>746, 'districts_id'=>63, 'zipcode'=>'33142', 'name'=>'Pasar Padi']);
        DB::table('villages')->insert(['id'=>747, 'districts_id'=>63, 'zipcode'=>'33143', 'name'=>'Sriwijaya']);
        DB::table('villages')->insert(['id'=>748, 'districts_id'=>63, 'zipcode'=>'33145', 'name'=>'Bukit Besar']);
        DB::table('villages')->insert(['id'=>749, 'districts_id'=>63, 'zipcode'=>'33146', 'name'=>'Semabung Baru']);
        //Kecamatan Bukit Intan Kota Pangkal Pinang Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>64, 'city_id'=>10, 'name'=>'Bukit Intan']);
        DB::table('villages')->insert(['id'=>750, 'districts_id'=>64, 'zipcode'=>'33147', 'name'=>'Air Mawar']);
        DB::table('villages')->insert(['id'=>751, 'districts_id'=>64, 'zipcode'=>'33147', 'name'=>'Pasir Putih']);
        DB::table('villages')->insert(['id'=>752, 'districts_id'=>64, 'zipcode'=>'33147', 'name'=>'Semabung Lama']);
        DB::table('villages')->insert(['id'=>753, 'districts_id'=>64, 'zipcode'=>'33147', 'name'=>'Sinar Bulan']);
        DB::table('villages')->insert(['id'=>754, 'districts_id'=>64, 'zipcode'=>'33147', 'name'=>'Temberan']);
        DB::table('villages')->insert(['id'=>755, 'districts_id'=>64, 'zipcode'=>'33148', 'name'=>'Bacang']);
        DB::table('villages')->insert(['id'=>756, 'districts_id'=>64, 'zipcode'=>'33149', 'name'=>'Air Itam']);

        //Kab. Bangka Provinsi Bangka Belitung
        DB::table('cities')->insert(['id'=>11, 'province_id'=>2, 'type'=>'regencies', 'name'=>'Bangka']);
        //Kecamatan Merawang Kab. Bangka Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>65, 'city_id'=>11, 'name'=>'Merawang']);
        DB::table('villages')->insert(['id'=>757, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Air Anyir']);
        DB::table('villages')->insert(['id'=>758, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Balun Ijuk']);
        DB::table('villages')->insert(['id'=>759, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Baturusa']);
        DB::table('villages')->insert(['id'=>760, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Dwi Makmur']);
        DB::table('villages')->insert(['id'=>761, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Jada Bahrin']);
        DB::table('villages')->insert(['id'=>762, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Jurung']);
        DB::table('villages')->insert(['id'=>763, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Kimak']);
        DB::table('villages')->insert(['id'=>764, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Merawang']);
        DB::table('villages')->insert(['id'=>765, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Pagarawan']);
        DB::table('villages')->insert(['id'=>766, 'districts_id'=>65, 'zipcode'=>'33172', 'name'=>'Riding Panjang']);
        //Kecamatan Mendo Barat Kab. Bangka Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>66, 'city_id'=>11, 'name'=>'Mendo Barat']);
        DB::table('villages')->insert(['id'=>767, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Air Buluh']);
        DB::table('villages')->insert(['id'=>768, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Air Duren']);
        DB::table('villages')->insert(['id'=>769, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Cengkong Abang']);
        DB::table('villages')->insert(['id'=>770, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Kace']);
        DB::table('villages')->insert(['id'=>771, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Kace Timur']);
        DB::table('villages')->insert(['id'=>772, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Kemuja']);
        DB::table('villages')->insert(['id'=>773, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Kota Kapur']);
        DB::table('villages')->insert(['id'=>774, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Labuh Air Pandan']);
        DB::table('villages')->insert(['id'=>775, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Mendo (menduk)']);
        DB::table('villages')->insert(['id'=>776, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Payabenua']);
        DB::table('villages')->insert(['id'=>777, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Penagan']);
        DB::table('villages')->insert(['id'=>778, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Petaling']);
        DB::table('villages')->insert(['id'=>779, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Petaling Banjar']);
        DB::table('villages')->insert(['id'=>780, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Rukam']);
        DB::table('villages')->insert(['id'=>781, 'districts_id'=>66, 'zipcode'=>'33173', 'name'=>'Zed']);
        //Kecamatan Puding Besar Kab. Bangka Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>67, 'city_id'=>11, 'name'=>'Puding Besar']);
        DB::table('villages')->insert(['id'=>782, 'districts_id'=>67, 'zipcode'=>'33179', 'name'=>'Kayu Besi']);
        DB::table('villages')->insert(['id'=>783, 'districts_id'=>67, 'zipcode'=>'33179', 'name'=>'Kota Waringin']);
        DB::table('villages')->insert(['id'=>784, 'districts_id'=>67, 'zipcode'=>'33179', 'name'=>'Labu']);
        DB::table('villages')->insert(['id'=>785, 'districts_id'=>67, 'zipcode'=>'33179', 'name'=>'Nibung']);
        DB::table('villages')->insert(['id'=>786, 'districts_id'=>67, 'zipcode'=>'33179', 'name'=>'Pudingbesar']);
        DB::table('villages')->insert(['id'=>787, 'districts_id'=>67, 'zipcode'=>'33179', 'name'=>'Saing']);
        DB::table('villages')->insert(['id'=>788, 'districts_id'=>67, 'zipcode'=>'33179', 'name'=>'Tanah Bawah']);
        //Kecamatan Sungai Liat Kab. Bangka Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>68, 'city_id'=>11, 'name'=>'Sungai Liat']);
        DB::table('villages')->insert(['id'=>789, 'districts_id'=>68, 'zipcode'=>'33211', 'name'=>'Kenanga']);
        DB::table('villages')->insert(['id'=>790, 'districts_id'=>68, 'zipcode'=>'33211', 'name'=>'Rebo']);
        DB::table('villages')->insert(['id'=>791, 'districts_id'=>68, 'zipcode'=>'33211', 'name'=>'Sungailiat']);
        DB::table('villages')->insert(['id'=>792, 'districts_id'=>68, 'zipcode'=>'33212', 'name'=>'Sinar Baru']);
        DB::table('villages')->insert(['id'=>793, 'districts_id'=>68, 'zipcode'=>'33213', 'name'=>'Kudai (kuday)']);
        DB::table('villages')->insert(['id'=>794, 'districts_id'=>68, 'zipcode'=>'33214', 'name'=>'Srimenanti']);
        DB::table('villages')->insert(['id'=>795, 'districts_id'=>68, 'zipcode'=>'33215', 'name'=>'Parit Padang']);
        //Kecamatan Pemali Kab. Bangka Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>69, 'city_id'=>11, 'name'=>'Pemali']);
        DB::table('villages')->insert(['id'=>796, 'districts_id'=>69, 'zipcode'=>'33251', 'name'=>'Penyamun']);
        DB::table('villages')->insert(['id'=>797, 'districts_id'=>69, 'zipcode'=>'33251', 'name'=>'Sempan']);
        DB::table('villages')->insert(['id'=>798, 'districts_id'=>69, 'zipcode'=>'33255', 'name'=>'Air Duren']);
        DB::table('villages')->insert(['id'=>799, 'districts_id'=>69, 'zipcode'=>'33255', 'name'=>'Air Ruai']);
        DB::table('villages')->insert(['id'=>800, 'districts_id'=>69, 'zipcode'=>'33255', 'name'=>'Karya Makmur']);
        DB::table('villages')->insert(['id'=>801, 'districts_id'=>69, 'zipcode'=>'33255', 'name'=>'Pemali']);
        //Kecamatan Bakam Kab. Bangka Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>70, 'city_id'=>11, 'name'=>'Bakam']);
        DB::table('villages')->insert(['id'=>802, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Bakam']);
        DB::table('villages')->insert(['id'=>803, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Bukit Layang']);
        DB::table('villages')->insert(['id'=>804, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Dalil']);
        DB::table('villages')->insert(['id'=>805, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Kapuk']);
        DB::table('villages')->insert(['id'=>806, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Mabat']);
        DB::table('villages')->insert(['id'=>807, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Mangka']);
        DB::table('villages')->insert(['id'=>808, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Maras Senang']);
        DB::table('villages')->insert(['id'=>809, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Neknang']);
        DB::table('villages')->insert(['id'=>810, 'districts_id'=>70, 'zipcode'=>'33252', 'name'=>'Tiang Tara']);
        //Kecamatan Belinyu Kab. Bangka Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>71, 'city_id'=>11, 'name'=>'Belinyu']);
        DB::table('villages')->insert(['id'=>811, 'districts_id'=>71, 'zipcode'=>'33253', 'name'=>'Air Jukung']);
        DB::table('villages')->insert(['id'=>812, 'districts_id'=>71, 'zipcode'=>'33253', 'name'=>'Bintet']);
        DB::table('villages')->insert(['id'=>813, 'districts_id'=>71, 'zipcode'=>'33253', 'name'=>'Bukit Ketok']);
        DB::table('villages')->insert(['id'=>814, 'districts_id'=>71, 'zipcode'=>'33253', 'name'=>'Gunung Muda']);
        DB::table('villages')->insert(['id'=>815, 'districts_id'=>71, 'zipcode'=>'33253', 'name'=>'Gunung Pelawan']);
        DB::table('villages')->insert(['id'=>816, 'districts_id'=>71, 'zipcode'=>'33253', 'name'=>'Kuto Panji']);
        DB::table('villages')->insert(['id'=>817, 'districts_id'=>71, 'zipcode'=>'33253', 'name'=>'Lumut']);
        DB::table('villages')->insert(['id'=>818, 'districts_id'=>71, 'zipcode'=>'33253', 'name'=>'Riding Panjang']);
        //Kecamatan Riau Silip Kab. Bangka Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>72, 'city_id'=>11, 'name'=>'Riau Silip']);
        DB::table('villages')->insert(['id'=>819, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Banyu Asin']);
        DB::table('villages')->insert(['id'=>820, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Berbura']);
        DB::table('villages')->insert(['id'=>821, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Cit']);
        DB::table('villages')->insert(['id'=>822, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Deniang']);
        DB::table('villages')->insert(['id'=>823, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Mapur']);
        DB::table('villages')->insert(['id'=>824, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Pangkal Niur']);
        DB::table('villages')->insert(['id'=>825, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Pugul']);
        DB::table('villages')->insert(['id'=>826, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Riau']);
        DB::table('villages')->insert(['id'=>827, 'districts_id'=>72, 'zipcode'=>'33253', 'name'=>'Silip']);

        //Kab. Bangka Barat Provinsi Bangka Belitung
        DB::table('cities')->insert(['id'=>12, 'province_id'=>2, 'type'=>'regencies', 'name'=>'Bangka Barat']);
        //Kecamatan Mentok (muntok) Kab. Bangka Barat Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>73, 'city_id'=>12, 'name'=>'Mentok (muntok)']);
        DB::table('villages')->insert(['id'=>828, 'districts_id'=>73, 'zipcode'=>'33311', 'name'=>'Tanjung']);
        DB::table('villages')->insert(['id'=>829, 'districts_id'=>73, 'zipcode'=>'33312', 'name'=>'Sungai Baru']);
        DB::table('villages')->insert(['id'=>830, 'districts_id'=>73, 'zipcode'=>'33313', 'name'=>'Sungai Daeng']);
        DB::table('villages')->insert(['id'=>831, 'districts_id'=>73, 'zipcode'=>'33351', 'name'=>'Air Belo']);
        DB::table('villages')->insert(['id'=>832, 'districts_id'=>73, 'zipcode'=>'33351', 'name'=>'Air Limau']);
        DB::table('villages')->insert(['id'=>833, 'districts_id'=>73, 'zipcode'=>'33351', 'name'=>'Air Putih']);
        DB::table('villages')->insert(['id'=>834, 'districts_id'=>73, 'zipcode'=>'33351', 'name'=>'Belolaut']);
        //Kecamatan Parittiga Kab. Bangka Barat Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>74, 'city_id'=>12, 'name'=>'Parittiga']);
        DB::table('villages')->insert(['id'=>835, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Air Gantang']);
        DB::table('villages')->insert(['id'=>836, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Bakit']);
        DB::table('villages')->insert(['id'=>837, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Cupat']);
        DB::table('villages')->insert(['id'=>838, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Kapit']);
        DB::table('villages')->insert(['id'=>839, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Kelabat']);
        DB::table('villages')->insert(['id'=>840, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Puput']);
        DB::table('villages')->insert(['id'=>841, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Sekar Biru']);
        DB::table('villages')->insert(['id'=>842, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Semulut']);
        DB::table('villages')->insert(['id'=>843, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Telak']);
        DB::table('villages')->insert(['id'=>844, 'districts_id'=>74, 'zipcode'=>'33362', 'name'=>'Teluk Limau']);
        //Kecamatan Jebus Kab. Bangka Barat Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>75, 'city_id'=>12, 'name'=>'Jebus']);
        DB::table('villages')->insert(['id'=>845, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Air Kuang']);
        DB::table('villages')->insert(['id'=>846, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Jebus']);
        DB::table('villages')->insert(['id'=>847, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Ketap']);
        DB::table('villages')->insert(['id'=>848, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Limbung']);
        DB::table('villages')->insert(['id'=>849, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Mislak']);
        DB::table('villages')->insert(['id'=>850, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Pebuar']);
        DB::table('villages')->insert(['id'=>851, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Ranggi Asam']);
        DB::table('villages')->insert(['id'=>852, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Rukam']);
        DB::table('villages')->insert(['id'=>853, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Sinar Manik']);
        DB::table('villages')->insert(['id'=>854, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Sungai Buluh']);
        DB::table('villages')->insert(['id'=>855, 'districts_id'=>75, 'zipcode'=>'33362', 'name'=>'Tumbak Petar']);
        //Kecamatan Kelapa Kab. Bangka Barat Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>76, 'city_id'=>12, 'name'=>'Kelapa']);
        DB::table('villages')->insert(['id'=>856, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Air Bulin']);
        DB::table('villages')->insert(['id'=>857, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Beruas']);
        DB::table('villages')->insert(['id'=>858, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Dendang']);
        DB::table('villages')->insert(['id'=>859, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Kacung']);
        DB::table('villages')->insert(['id'=>860, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Kayuarang']);
        DB::table('villages')->insert(['id'=>861, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Kelapa']);
        DB::table('villages')->insert(['id'=>862, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Mancung']);
        DB::table('villages')->insert(['id'=>863, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Pangkal Beras']);
        DB::table('villages')->insert(['id'=>864, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Pusuk']);
        DB::table('villages')->insert(['id'=>865, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Sinar Sari']);
        DB::table('villages')->insert(['id'=>866, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Tebing']);
        DB::table('villages')->insert(['id'=>867, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Terentang']);
        DB::table('villages')->insert(['id'=>868, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Tugang']);
        DB::table('villages')->insert(['id'=>869, 'districts_id'=>76, 'zipcode'=>'33364', 'name'=>'Tuik']);
        //Kecamatan Tempilang Kab. Bangka Barat Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>77, 'city_id'=>12, 'name'=>'Tempilang']);
        DB::table('villages')->insert(['id'=>870, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Air Lintang']);
        DB::table('villages')->insert(['id'=>871, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Benteng Kota/kuta']);
        DB::table('villages')->insert(['id'=>872, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Buyan Kelumbi']);
        DB::table('villages')->insert(['id'=>873, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Penyampak']);
        DB::table('villages')->insert(['id'=>874, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Sangku']);
        DB::table('villages')->insert(['id'=>875, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Simpang Yul']);
        DB::table('villages')->insert(['id'=>876, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Sinar Surya']);
        DB::table('villages')->insert(['id'=>877, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Tanjungniur']);
        DB::table('villages')->insert(['id'=>878, 'districts_id'=>77, 'zipcode'=>'33365', 'name'=>'Tempilang']);
        //Kecamatan Simpang Teritip Kab. Bangka Barat Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>78, 'city_id'=>12, 'name'=>'Simpang Teritip']);
        DB::table('villages')->insert(['id'=>879, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Air Menduyung']);
        DB::table('villages')->insert(['id'=>880, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Air Nyatoh']);
        DB::table('villages')->insert(['id'=>881, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Berang']);
        DB::table('villages')->insert(['id'=>882, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Bukit Terak']);
        DB::table('villages')->insert(['id'=>883, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Ibul']);
        DB::table('villages')->insert(['id'=>884, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Kundi']);
        DB::table('villages')->insert(['id'=>885, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Mayang']);
        DB::table('villages')->insert(['id'=>886, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Pangek']);
        DB::table('villages')->insert(['id'=>887, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Pelangas']);
        DB::table('villages')->insert(['id'=>888, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Peradong']);
        DB::table('villages')->insert(['id'=>889, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Rambat']);
        DB::table('villages')->insert(['id'=>890, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Simpang Gung']);
        DB::table('villages')->insert(['id'=>891, 'districts_id'=>78, 'zipcode'=>'33366', 'name'=>'Simpang Tiga']);

        //Kab. Belitung Provinsi Bangka Belitung
        DB::table('cities')->insert(['id'=>13, 'province_id'=>2, 'type'=>'regencies', 'name'=>'Belitung']);
        //Kecamatan Tanjung Pandan Kab. Belitung Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>79, 'city_id'=>13, 'name'=>'Tanjung Pandan']);
        DB::table('villages')->insert(['id'=>892, 'districts_id'=>79, 'zipcode'=>'33411', 'name'=>'Aik Ketekok']);
        DB::table('villages')->insert(['id'=>893, 'districts_id'=>79, 'zipcode'=>'33411', 'name'=>'Air Merbau']);
        DB::table('villages')->insert(['id'=>894, 'districts_id'=>79, 'zipcode'=>'33411', 'name'=>'Buluh Tumbang']);
        DB::table('villages')->insert(['id'=>895, 'districts_id'=>79, 'zipcode'=>'33411', 'name'=>'Dukong']);
        DB::table('villages')->insert(['id'=>896, 'districts_id'=>79, 'zipcode'=>'33411', 'name'=>'Kota Tanjung Pandan']);
        DB::table('villages')->insert(['id'=>897, 'districts_id'=>79, 'zipcode'=>'33411', 'name'=>'Lesung Batang']);
        DB::table('villages')->insert(['id'=>898, 'districts_id'=>79, 'zipcode'=>'33411', 'name'=>'Parit']);
        DB::table('villages')->insert(['id'=>899, 'districts_id'=>79, 'zipcode'=>'33411', 'name'=>'Tanjung Pendam']);
        DB::table('villages')->insert(['id'=>900, 'districts_id'=>79, 'zipcode'=>'33412', 'name'=>'Pangkal Lalang']);
        DB::table('villages')->insert(['id'=>901, 'districts_id'=>79, 'zipcode'=>'33413', 'name'=>'Aik Rayak']);
        DB::table('villages')->insert(['id'=>902, 'districts_id'=>79, 'zipcode'=>'33413', 'name'=>'Perawas']);
        DB::table('villages')->insert(['id'=>903, 'districts_id'=>79, 'zipcode'=>'33414', 'name'=>'Aik Palempang Jaya']);
        DB::table('villages')->insert(['id'=>904, 'districts_id'=>79, 'zipcode'=>'33414', 'name'=>'Paal Satu']);
        DB::table('villages')->insert(['id'=>905, 'districts_id'=>79, 'zipcode'=>'33415', 'name'=>'Air Saga']);
        DB::table('villages')->insert(['id'=>906, 'districts_id'=>79, 'zipcode'=>'33417', 'name'=>'Juru Seberang']);
        //Kecamatan Sijuk Kab. Belitung Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>80, 'city_id'=>13, 'name'=>'Sijuk']);
        DB::table('villages')->insert(['id'=>907, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Air Selumar']);
        DB::table('villages')->insert(['id'=>908, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Air Seru']);
        DB::table('villages')->insert(['id'=>909, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Batu Itam']);
        DB::table('villages')->insert(['id'=>910, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Keciput']);
        DB::table('villages')->insert(['id'=>911, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Pelepak Pute']);
        DB::table('villages')->insert(['id'=>912, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Sijuk']);
        DB::table('villages')->insert(['id'=>913, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Sungai Padang']);
        DB::table('villages')->insert(['id'=>914, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Tanjong Tinggi']);
        DB::table('villages')->insert(['id'=>915, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Tanjung Binga']);
        DB::table('villages')->insert(['id'=>916, 'districts_id'=>80, 'zipcode'=>'33414', 'name'=>'Terong']);
        //Kecamatan Badau Kab. Belitung Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>81, 'city_id'=>13, 'name'=>'Badau']);
        DB::table('villages')->insert(['id'=>917, 'districts_id'=>81, 'zipcode'=>'33451', 'name'=>'Air Batu']);
        DB::table('villages')->insert(['id'=>918, 'districts_id'=>81, 'zipcode'=>'33451', 'name'=>'Badau']);
        DB::table('villages')->insert(['id'=>919, 'districts_id'=>81, 'zipcode'=>'33451', 'name'=>'Cerucuk']);
        DB::table('villages')->insert(['id'=>920, 'districts_id'=>81, 'zipcode'=>'33451', 'name'=>'Ibul']);
        DB::table('villages')->insert(['id'=>921, 'districts_id'=>81, 'zipcode'=>'33451', 'name'=>'Kacang Botor']);
        DB::table('villages')->insert(['id'=>922, 'districts_id'=>81, 'zipcode'=>'33451', 'name'=>'Pegantungan']);
        DB::table('villages')->insert(['id'=>923, 'districts_id'=>81, 'zipcode'=>'33451', 'name'=>'Sungai Samak']);
        //Kecamatan Membalong Kab. Belitung Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>82, 'city_id'=>13, 'name'=>'Membalong']);
        DB::table('villages')->insert(['id'=>924, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Bantan']);
        DB::table('villages')->insert(['id'=>925, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Gunung Riting']);
        DB::table('villages')->insert(['id'=>926, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Kembiri']);
        DB::table('villages')->insert(['id'=>927, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Lassar']);
        DB::table('villages')->insert(['id'=>928, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Membalong']);
        DB::table('villages')->insert(['id'=>929, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Mentigi']);
        DB::table('villages')->insert(['id'=>930, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Padang Kandis']);
        DB::table('villages')->insert(['id'=>931, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Perpat']);
        DB::table('villages')->insert(['id'=>932, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Pulau Seliu']);
        DB::table('villages')->insert(['id'=>933, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Pulau Sumedang']);
        DB::table('villages')->insert(['id'=>934, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Simpang Rusa']);
        DB::table('villages')->insert(['id'=>935, 'districts_id'=>82, 'zipcode'=>'33452', 'name'=>'Tanjung Rusa']);
        //Kecamatan Selat Nasik Kab. Belitung Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>83, 'city_id'=>13, 'name'=>'Selat Nasik']);
        DB::table('villages')->insert(['id'=>936, 'districts_id'=>83, 'zipcode'=>'33481', 'name'=>'Petaling']);
        DB::table('villages')->insert(['id'=>937, 'districts_id'=>83, 'zipcode'=>'33481', 'name'=>'Pulau Gresik']);
        DB::table('villages')->insert(['id'=>938, 'districts_id'=>83, 'zipcode'=>'33481', 'name'=>'Selat Nasik']);
        DB::table('villages')->insert(['id'=>939, 'districts_id'=>83, 'zipcode'=>'33481', 'name'=>'Suak Gual']);

        //Kab. Belitung Timur Provinsi Bangka Belitung
        DB::table('cities')->insert(['id'=>14, 'province_id'=>2, 'type'=>'regencies', 'name'=>'Belitung Timur']);
        //Kecamatan Manggar Kab. Belitung Timur Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>84, 'city_id'=>14, 'name'=>'Manggar']);
        DB::table('villages')->insert(['id'=>940, 'districts_id'=>84, 'zipcode'=>'33511', 'name'=>'Lalang']);
        DB::table('villages')->insert(['id'=>941, 'districts_id'=>84, 'zipcode'=>'33511', 'name'=>'Lalang Jaya']);
        DB::table('villages')->insert(['id'=>942, 'districts_id'=>84, 'zipcode'=>'33511', 'name'=>'Pulau Buku Limau']);
        DB::table('villages')->insert(['id'=>943, 'districts_id'=>84, 'zipcode'=>'33512', 'name'=>'Baru']);
        DB::table('villages')->insert(['id'=>944, 'districts_id'=>84, 'zipcode'=>'33512', 'name'=>'Kurnia Jaya']);
        DB::table('villages')->insert(['id'=>945, 'districts_id'=>84, 'zipcode'=>'33516', 'name'=>'Padang']);
        DB::table('villages')->insert(['id'=>946, 'districts_id'=>84, 'zipcode'=>'33517', 'name'=>'Bentaian Jaya']);
        DB::table('villages')->insert(['id'=>947, 'districts_id'=>84, 'zipcode'=>'33517', 'name'=>'Kelubi']);
        DB::table('villages')->insert(['id'=>948, 'districts_id'=>84, 'zipcode'=>'33517', 'name'=>'Mekar Jaya']);
        //Kecamatan Damar Kab. Belitung Timur Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>85, 'city_id'=>14, 'name'=>'Damar']);
        DB::table('villages')->insert(['id'=>949, 'districts_id'=>85, 'zipcode'=>'33513', 'name'=>'Sukamandi']);
        DB::table('villages')->insert(['id'=>950, 'districts_id'=>85, 'zipcode'=>'33514', 'name'=>'Mengkubang']);
        DB::table('villages')->insert(['id'=>951, 'districts_id'=>85, 'zipcode'=>'33515', 'name'=>'Mempaya']);
        DB::table('villages')->insert(['id'=>952, 'districts_id'=>85, 'zipcode'=>'33571', 'name'=>'Air Kelik']);
        DB::table('villages')->insert(['id'=>953, 'districts_id'=>85, 'zipcode'=>'33571', 'name'=>'Burung Mandi']);
        //Kecamatan Dendang Kab. Belitung Timur Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>86, 'city_id'=>14, 'name'=>'Dendang']);
        DB::table('villages')->insert(['id'=>954, 'districts_id'=>86, 'zipcode'=>'33561', 'name'=>'Balok']);
        DB::table('villages')->insert(['id'=>955, 'districts_id'=>86, 'zipcode'=>'33561', 'name'=>'Dendang']);
        DB::table('villages')->insert(['id'=>956, 'districts_id'=>86, 'zipcode'=>'33561', 'name'=>'Jangkang']);
        DB::table('villages')->insert(['id'=>957, 'districts_id'=>86, 'zipcode'=>'33561', 'name'=>'Nyuruk']);
        //Kecamatan Simpang Pesak Kab. Belitung Timur Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>87, 'city_id'=>14, 'name'=>'Simpang Pesak']);
        DB::table('villages')->insert(['id'=>958, 'districts_id'=>87, 'zipcode'=>'33561', 'name'=>'Dukong']);
        DB::table('villages')->insert(['id'=>959, 'districts_id'=>87, 'zipcode'=>'33561', 'name'=>'Simpang Pesak']);
        DB::table('villages')->insert(['id'=>960, 'districts_id'=>87, 'zipcode'=>'33561', 'name'=>'Tanjung Batu Itam']);
        DB::table('villages')->insert(['id'=>961, 'districts_id'=>87, 'zipcode'=>'33561', 'name'=>'Tanjung Kelumpang']);
        //Kecamatan Simpang Renggiang Kab. Belitung Timur Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>88, 'city_id'=>14, 'name'=>'Simpang Renggiang']);
        DB::table('villages')->insert(['id'=>962, 'districts_id'=>88, 'zipcode'=>'33562', 'name'=>'Aik Madu']);
        DB::table('villages')->insert(['id'=>963, 'districts_id'=>88, 'zipcode'=>'33562', 'name'=>'Lintang']);
        DB::table('villages')->insert(['id'=>964, 'districts_id'=>88, 'zipcode'=>'33562', 'name'=>'Renggiang']);
        DB::table('villages')->insert(['id'=>965, 'districts_id'=>88, 'zipcode'=>'33562', 'name'=>'Simpang Tiga']);
        //Kecamatan Gantung Kab. Belitung Timur Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>89, 'city_id'=>14, 'name'=>'Gantung']);
        DB::table('villages')->insert(['id'=>966, 'districts_id'=>89, 'zipcode'=>'33562', 'name'=>'Batu Penyu']);
        DB::table('villages')->insert(['id'=>967, 'districts_id'=>89, 'zipcode'=>'33562', 'name'=>'Gantung']);
        DB::table('villages')->insert(['id'=>968, 'districts_id'=>89, 'zipcode'=>'33562', 'name'=>'Jangkar Asam']);
        DB::table('villages')->insert(['id'=>969, 'districts_id'=>89, 'zipcode'=>'33562', 'name'=>'Lenggang']);
        DB::table('villages')->insert(['id'=>970, 'districts_id'=>89, 'zipcode'=>'33562', 'name'=>'Lilangan']);
        DB::table('villages')->insert(['id'=>971, 'districts_id'=>89, 'zipcode'=>'33562', 'name'=>'Limbongan']);
        DB::table('villages')->insert(['id'=>972, 'districts_id'=>89, 'zipcode'=>'33562', 'name'=>'Selingsing']);
        //Kecamatan Kelapa Kampit Kab. Belitung Timur Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>90, 'city_id'=>14, 'name'=>'Kelapa Kampit']);
        DB::table('villages')->insert(['id'=>973, 'districts_id'=>90, 'zipcode'=>'33571', 'name'=>'Buding']);
        DB::table('villages')->insert(['id'=>974, 'districts_id'=>90, 'zipcode'=>'33571', 'name'=>'Cendil']);
        DB::table('villages')->insert(['id'=>975, 'districts_id'=>90, 'zipcode'=>'33571', 'name'=>'Mayang']);
        DB::table('villages')->insert(['id'=>976, 'districts_id'=>90, 'zipcode'=>'33571', 'name'=>'Mentawak']);
        DB::table('villages')->insert(['id'=>977, 'districts_id'=>90, 'zipcode'=>'33571', 'name'=>'Pembaharuan']);
        DB::table('villages')->insert(['id'=>978, 'districts_id'=>90, 'zipcode'=>'33571', 'name'=>'Senyubuk']);

        //Kab. Bangka Tengah Provinsi Bangka Belitung
        DB::table('cities')->insert(['id'=>15, 'province_id'=>2, 'type'=>'regencies', 'name'=>'Bangka Tengah']);
        //Kecamatan Simpang Katis Kab. Bangka Tengah Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>91, 'city_id'=>15, 'name'=>'Simpang Katis']);
        DB::table('villages')->insert(['id'=>979, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Beruas']);
        DB::table('villages')->insert(['id'=>980, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Celuak']);
        DB::table('villages')->insert(['id'=>981, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Katis']);
        DB::table('villages')->insert(['id'=>982, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Pasir Garam']);
        DB::table('villages')->insert(['id'=>983, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Pinang Sebatang']);
        DB::table('villages')->insert(['id'=>984, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Puput']);
        DB::table('villages')->insert(['id'=>985, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Simpang Katis']);
        DB::table('villages')->insert(['id'=>986, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Sungkap']);
        DB::table('villages')->insert(['id'=>987, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Terak']);
        DB::table('villages')->insert(['id'=>988, 'districts_id'=>91, 'zipcode'=>'33674', 'name'=>'Teru']);
        //Kecamatan Sungai Selan Kab. Bangka Tengah Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>92, 'city_id'=>15, 'name'=>'Sungai Selan']);
        DB::table('villages')->insert(['id'=>989, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Kemingking']);
        DB::table('villages')->insert(['id'=>990, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Kerakas']);
        DB::table('villages')->insert(['id'=>991, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Kerantai']);
        DB::table('villages')->insert(['id'=>992, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Keretak']);
        DB::table('villages')->insert(['id'=>993, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Keretak Atas']);
        DB::table('villages')->insert(['id'=>994, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Lampur']);
        DB::table('villages')->insert(['id'=>995, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Melabun']);
        DB::table('villages')->insert(['id'=>996, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Munggu']);
        DB::table('villages')->insert(['id'=>997, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Ramadhon (romadhoni)']);
        DB::table('villages')->insert(['id'=>998, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Sarangmandi']);
        DB::table('villages')->insert(['id'=>999, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Sungai Selan']);
        DB::table('villages')->insert(['id'=>1000, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Sungai Selan Atas']);
        DB::table('villages')->insert(['id'=>1001, 'districts_id'=>92, 'zipcode'=>'33675', 'name'=>'Tanjung Pura']);
        //Kecamatan Koba Kab. Bangka Tengah Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>93, 'city_id'=>15, 'name'=>'Koba']);
        DB::table('villages')->insert(['id'=>1002, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Arung Dalam']);
        DB::table('villages')->insert(['id'=>1003, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Berok']);
        DB::table('villages')->insert(['id'=>1004, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Guntung']);
        DB::table('villages')->insert(['id'=>1005, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Koba']);
        DB::table('villages')->insert(['id'=>1006, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Kurau (timur)']);
        DB::table('villages')->insert(['id'=>1007, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Kurau Barat']);
        DB::table('villages')->insert(['id'=>1008, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Nibung']);
        DB::table('villages')->insert(['id'=>1009, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Padang Mulya']);
        DB::table('villages')->insert(['id'=>1010, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Penyak']);
        DB::table('villages')->insert(['id'=>1011, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Simpang Perlang']);
        DB::table('villages')->insert(['id'=>1012, 'districts_id'=>93, 'zipcode'=>'33681', 'name'=>'Terentang Iii']);
        //Kecamatan Namang Kab. Bangka Tengah Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>94, 'city_id'=>15, 'name'=>'Namang']);
        DB::table('villages')->insert(['id'=>1013, 'districts_id'=>94, 'zipcode'=>'33681', 'name'=>'Baskara Bakti/bhakti']);
        DB::table('villages')->insert(['id'=>1014, 'districts_id'=>94, 'zipcode'=>'33681', 'name'=>'Bukit Kijang']);
        DB::table('villages')->insert(['id'=>1015, 'districts_id'=>94, 'zipcode'=>'33684', 'name'=>'Belilik']);
        DB::table('villages')->insert(['id'=>1016, 'districts_id'=>94, 'zipcode'=>'33684', 'name'=>'Cambai']);
        DB::table('villages')->insert(['id'=>1017, 'districts_id'=>94, 'zipcode'=>'33684', 'name'=>'Cambai Selatan']);
        DB::table('villages')->insert(['id'=>1018, 'districts_id'=>94, 'zipcode'=>'33684', 'name'=>'Jelutung']);
        DB::table('villages')->insert(['id'=>1019, 'districts_id'=>94, 'zipcode'=>'33684', 'name'=>'Kayu Besi']);
        DB::table('villages')->insert(['id'=>1020, 'districts_id'=>94, 'zipcode'=>'33684', 'name'=>'Namang']);
        //Kecamatan Lubuk Besar Kab. Bangka Tengah Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>95, 'city_id'=>15, 'name'=>'Lubuk Besar']);
        DB::table('villages')->insert(['id'=>1021, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Batu Beriga']);
        DB::table('villages')->insert(['id'=>1022, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Belimbing']);
        DB::table('villages')->insert(['id'=>1023, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Kulur']);
        DB::table('villages')->insert(['id'=>1024, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Kulur Hilir']);
        DB::table('villages')->insert(['id'=>1025, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Lubuk Besar']);
        DB::table('villages')->insert(['id'=>1026, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Lubuk Lingkuk']);
        DB::table('villages')->insert(['id'=>1027, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Lubuk Pabrik']);
        DB::table('villages')->insert(['id'=>1028, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Perlang']);
        DB::table('villages')->insert(['id'=>1029, 'districts_id'=>95, 'zipcode'=>'33681', 'name'=>'Trubus']);
        //Kecamatan Pangkalan Baru Kab. Bangka Tengah Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>96, 'city_id'=>15, 'name'=>'Pangkalan Baru']);
        DB::table('villages')->insert(['id'=>1030, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Air Mesu Timur']);
        DB::table('villages')->insert(['id'=>1031, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Airmesu']);
        DB::table('villages')->insert(['id'=>1032, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Batu Belubang']);
        DB::table('villages')->insert(['id'=>1033, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Beluluk']);
        DB::table('villages')->insert(['id'=>1034, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Benteng']);
        DB::table('villages')->insert(['id'=>1035, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Dul']);
        DB::table('villages')->insert(['id'=>1036, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Jeruk']);
        DB::table('villages')->insert(['id'=>1037, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Kebintik']);
        DB::table('villages')->insert(['id'=>1038, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Mangkol']);
        DB::table('villages')->insert(['id'=>1039, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Padang Baru']);
        DB::table('villages')->insert(['id'=>1040, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Pelindang (selindung)']);
        DB::table('villages')->insert(['id'=>1041, 'districts_id'=>96, 'zipcode'=>'33684', 'name'=>'Tanjung Gunung']);

        //Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('cities')->insert(['id'=>16, 'province_id'=>2, 'type'=>'regencies', 'name'=>'Bangka Selatan']);
        //Kecamatan Simpang Rimba Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>97, 'city_id'=>16, 'name'=>'Simpang Rimba']);
        DB::table('villages')->insert(['id'=>1042, 'districts_id'=>97, 'zipcode'=>'33777', 'name'=>'Bangka Kota']);
        DB::table('villages')->insert(['id'=>1043, 'districts_id'=>97, 'zipcode'=>'33777', 'name'=>'Gudang']);
        DB::table('villages')->insert(['id'=>1044, 'districts_id'=>97, 'zipcode'=>'33777', 'name'=>'Jelutung Ii']);
        DB::table('villages')->insert(['id'=>1045, 'districts_id'=>97, 'zipcode'=>'33777', 'name'=>'Permis']);
        DB::table('villages')->insert(['id'=>1046, 'districts_id'=>97, 'zipcode'=>'33777', 'name'=>'Rajik']);
        DB::table('villages')->insert(['id'=>1047, 'districts_id'=>97, 'zipcode'=>'33777', 'name'=>'Sebagin']);
        DB::table('villages')->insert(['id'=>1048, 'districts_id'=>97, 'zipcode'=>'33777', 'name'=>'Simpang Rimba']);
        //Kecamatan Pulau Besar Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>98, 'city_id'=>16, 'name'=>'Pulau Besar']);
        DB::table('villages')->insert(['id'=>1049, 'districts_id'=>98, 'zipcode'=>'33778', 'name'=>'Batu Betumpang']);
        DB::table('villages')->insert(['id'=>1050, 'districts_id'=>98, 'zipcode'=>'33778', 'name'=>'Fajar Indah (trans 1)']);
        DB::table('villages')->insert(['id'=>1051, 'districts_id'=>98, 'zipcode'=>'33778', 'name'=>'Panca Tunggal (trans 3)']);
        DB::table('villages')->insert(['id'=>1052, 'districts_id'=>98, 'zipcode'=>'33778', 'name'=>'Sukajaya']);
        DB::table('villages')->insert(['id'=>1053, 'districts_id'=>98, 'zipcode'=>'33778', 'name'=>'Sumber Jaya Permai (trans 4)']);
        //Kecamatan Payung Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>99, 'city_id'=>16, 'name'=>'Payung']);
        DB::table('villages')->insert(['id'=>1054, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Bedengung']);
        DB::table('villages')->insert(['id'=>1055, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Irat']);
        DB::table('villages')->insert(['id'=>1056, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Malik']);
        DB::table('villages')->insert(['id'=>1057, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Nadung']);
        DB::table('villages')->insert(['id'=>1058, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Paku']);
        DB::table('villages')->insert(['id'=>1059, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Pangkalbuluh']);
        DB::table('villages')->insert(['id'=>1060, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Payung']);
        DB::table('villages')->insert(['id'=>1061, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Ranggung']);
        DB::table('villages')->insert(['id'=>1062, 'districts_id'=>99, 'zipcode'=>'33778', 'name'=>'Sengir']);
        //Kecamatan Air Gegas Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>100, 'city_id'=>16, 'name'=>'Air Gegas']);
        DB::table('villages')->insert(['id'=>1063, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Air Bara']);
        DB::table('villages')->insert(['id'=>1064, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Air Gegas']);
        DB::table('villages')->insert(['id'=>1065, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Bencah']);
        DB::table('villages')->insert(['id'=>1066, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Delas']);
        DB::table('villages')->insert(['id'=>1067, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Nangka']);
        DB::table('villages')->insert(['id'=>1068, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Nyelanding']);
        DB::table('villages')->insert(['id'=>1069, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Pergam']);
        DB::table('villages')->insert(['id'=>1070, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Ranggas']);
        DB::table('villages')->insert(['id'=>1071, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Sidoharjo']);
        DB::table('villages')->insert(['id'=>1072, 'districts_id'=>100, 'zipcode'=>'33782', 'name'=>'Tepus']);
        //Kecamatan Toboali Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>101, 'city_id'=>16, 'name'=>'Toboali']);
        DB::table('villages')->insert(['id'=>1073, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Bikang']);
        DB::table('villages')->insert(['id'=>1074, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Gadung']);
        DB::table('villages')->insert(['id'=>1075, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Jeriji']);
        DB::table('villages')->insert(['id'=>1076, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Kaposang/keposang']);
        DB::table('villages')->insert(['id'=>1077, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Kepoh']);
        DB::table('villages')->insert(['id'=>1078, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Rias']);
        DB::table('villages')->insert(['id'=>1079, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Rindik']);
        DB::table('villages')->insert(['id'=>1080, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Serdang']);
        DB::table('villages')->insert(['id'=>1081, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Tanjung Ketapang']);
        DB::table('villages')->insert(['id'=>1082, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Teladan']);
        DB::table('villages')->insert(['id'=>1083, 'districts_id'=>101, 'zipcode'=>'33783', 'name'=>'Toboali']);
        //Kecamatan Tukak Sadai Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>102, 'city_id'=>16, 'name'=>'Tukak Sadai']);
        DB::table('villages')->insert(['id'=>1084, 'districts_id'=>102, 'zipcode'=>'33783', 'name'=>'Bukit Terap']);
        DB::table('villages')->insert(['id'=>1085, 'districts_id'=>102, 'zipcode'=>'33783', 'name'=>'Pasir Putih']);
        DB::table('villages')->insert(['id'=>1086, 'districts_id'=>102, 'zipcode'=>'33783', 'name'=>'Sadai']);
        DB::table('villages')->insert(['id'=>1087, 'districts_id'=>102, 'zipcode'=>'33783', 'name'=>'Tiram']);
        DB::table('villages')->insert(['id'=>1088, 'districts_id'=>102, 'zipcode'=>'33783', 'name'=>'Tukak']);
        //Kecamatan Kepulauan Pongok Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>103, 'city_id'=>16, 'name'=>'Kepulauan Pongok']);
        DB::table('villages')->insert(['id'=>1089, 'districts_id'=>103, 'zipcode'=>'33791', 'name'=>'Celagen']);
        DB::table('villages')->insert(['id'=>1090, 'districts_id'=>103, 'zipcode'=>'33791', 'name'=>'Pongok']);
        //Kecamatan Lepar Pongok Kab. Bangka Selatan Provinsi Bangka Belitung
        DB::table('districts')->insert(['id'=>104, 'city_id'=>16, 'name'=>'Lepar Pongok']);
        DB::table('villages')->insert(['id'=>1091, 'districts_id'=>104, 'zipcode'=>'33791', 'name'=>'Kumbung']);
        DB::table('villages')->insert(['id'=>1092, 'districts_id'=>104, 'zipcode'=>'33791', 'name'=>'Penutuk']);
        DB::table('villages')->insert(['id'=>1093, 'districts_id'=>104, 'zipcode'=>'33791', 'name'=>'Tanjung Labu']);
        DB::table('villages')->insert(['id'=>1094, 'districts_id'=>104, 'zipcode'=>'33791', 'name'=>'Tanjung Sangkar']);
    }
}
