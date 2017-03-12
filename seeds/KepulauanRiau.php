<?php

use Illuminate\Database\Seeder;

class KepulauanRiau extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>17, 'name'=>'Kepulauan Riau']);

        //Kota Tanjung Pinang Provinsi Kepulauan Riau
        DB::table('cities')->insert(['id'=>218, 'province_id'=>17, 'type'=>'city', 'name'=>'Tanjung Pinang']);
        //Kecamatan Tanjung Pinang Barat Kota Tanjung Pinang Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3900, 'city_id'=>218, 'name'=>'Tanjung Pinang Barat']);
        DB::table('villages')->insert(['id'=>44648, 'districts_id'=>3900, 'zipcode'=>'29111', 'name'=>'Bukit Cermin']);
        DB::table('villages')->insert(['id'=>44649, 'districts_id'=>3900, 'zipcode'=>'29112', 'name'=>'Kemboja']);
        DB::table('villages')->insert(['id'=>44650, 'districts_id'=>3900, 'zipcode'=>'29113', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>44651, 'districts_id'=>3900, 'zipcode'=>'29113', 'name'=>'Tanjung Pinang Barat']);
        //Kecamatan Tanjung Pinang Kota Kota Tanjung Pinang Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3901, 'city_id'=>218, 'name'=>'Tanjung Pinang Kota']);
        DB::table('villages')->insert(['id'=>44652, 'districts_id'=>3901, 'zipcode'=>'29111', 'name'=>'Senggarang']);
        DB::table('villages')->insert(['id'=>44653, 'districts_id'=>3901, 'zipcode'=>'29111', 'name'=>'Tanjung Pinang Kota']);
        DB::table('villages')->insert(['id'=>44654, 'districts_id'=>3901, 'zipcode'=>'29114', 'name'=>'Penyengat']);
        DB::table('villages')->insert(['id'=>44655, 'districts_id'=>3901, 'zipcode'=>'29115', 'name'=>'Kampung Bugis']);
        //Kecamatan Tanjung Pinang Timur Kota Tanjung Pinang Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3902, 'city_id'=>218, 'name'=>'Tanjung Pinang Timur']);
        DB::table('villages')->insert(['id'=>44656, 'districts_id'=>3902, 'zipcode'=>'29122', 'name'=>'Air Raja']);
        DB::table('villages')->insert(['id'=>44657, 'districts_id'=>3902, 'zipcode'=>'29122', 'name'=>'Kampung Bulang']);
        DB::table('villages')->insert(['id'=>44658, 'districts_id'=>3902, 'zipcode'=>'29122', 'name'=>'Pinang Kencana']);
        DB::table('villages')->insert(['id'=>44659, 'districts_id'=>3902, 'zipcode'=>'29123', 'name'=>'Melayu Kota Piring']);
        DB::table('villages')->insert(['id'=>44660, 'districts_id'=>3902, 'zipcode'=>'29125', 'name'=>'Batu Ix (sembilan)']);
        //Kecamatan Bukit Bestari Kota Tanjung Pinang Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3903, 'city_id'=>218, 'name'=>'Bukit Bestari']);
        DB::table('villages')->insert(['id'=>44661, 'districts_id'=>3903, 'zipcode'=>'29122', 'name'=>'Tanjung Pinang Timur']);
        DB::table('villages')->insert(['id'=>44662, 'districts_id'=>3903, 'zipcode'=>'29122', 'name'=>'Tanjung Unggat']);
        DB::table('villages')->insert(['id'=>44663, 'districts_id'=>3903, 'zipcode'=>'29124', 'name'=>'Dompak']);
        DB::table('villages')->insert(['id'=>44664, 'districts_id'=>3903, 'zipcode'=>'29124', 'name'=>'Sei Jang']);
        DB::table('villages')->insert(['id'=>44665, 'districts_id'=>3903, 'zipcode'=>'29124', 'name'=>'Tanjung Ayun Sakti']);

        //Kab. Bintan Provinsi Kepulauan Riau
        DB::table('cities')->insert(['id'=>219, 'province_id'=>17, 'type'=>'regencies', 'name'=>'Bintan']);
        //Kecamatan Teluk Bintan Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3904, 'city_id'=>219, 'name'=>'Teluk Bintan']);
        DB::table('villages')->insert(['id'=>44666, 'districts_id'=>3904, 'zipcode'=>'29132', 'name'=>'Tembeling']);
        DB::table('villages')->insert(['id'=>44667, 'districts_id'=>3904, 'zipcode'=>'29132', 'name'=>'Tembeling Tanjung']);
        DB::table('villages')->insert(['id'=>44668, 'districts_id'=>3904, 'zipcode'=>'29133', 'name'=>'Bintan Buyu']);
        DB::table('villages')->insert(['id'=>44669, 'districts_id'=>3904, 'zipcode'=>'29134', 'name'=>'Penaga']);
        DB::table('villages')->insert(['id'=>44670, 'districts_id'=>3904, 'zipcode'=>'29135', 'name'=>'Pengujan']);
        DB::table('villages')->insert(['id'=>44671, 'districts_id'=>3904, 'zipcode'=>'29136', 'name'=>'Pangkil']);
        //Kecamatan Bintan Pesisir Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3905, 'city_id'=>219, 'name'=>'Bintan Pesisir']);
        DB::table('villages')->insert(['id'=>44672, 'districts_id'=>3905, 'zipcode'=>'29151', 'name'=>'Air Glubi/gelubi']);
        DB::table('villages')->insert(['id'=>44673, 'districts_id'=>3905, 'zipcode'=>'29151', 'name'=>'Kelong']);
        DB::table('villages')->insert(['id'=>44674, 'districts_id'=>3905, 'zipcode'=>'29151', 'name'=>'Mapur']);
        DB::table('villages')->insert(['id'=>44675, 'districts_id'=>3905, 'zipcode'=>'29151', 'name'=>'Numbing']);
        //Kecamatan Mantang Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3906, 'city_id'=>219, 'name'=>'Mantang']);
        DB::table('villages')->insert(['id'=>44676, 'districts_id'=>3906, 'zipcode'=>'29151', 'name'=>'Dendun']);
        DB::table('villages')->insert(['id'=>44677, 'districts_id'=>3906, 'zipcode'=>'29151', 'name'=>'Mantang Baru']);
        DB::table('villages')->insert(['id'=>44678, 'districts_id'=>3906, 'zipcode'=>'29151', 'name'=>'Mantang Besar']);
        DB::table('villages')->insert(['id'=>44679, 'districts_id'=>3906, 'zipcode'=>'29151', 'name'=>'Mantang Lama']);
        //Kecamatan Gunung Kijang Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3907, 'city_id'=>219, 'name'=>'Gunung Kijang']);
        DB::table('villages')->insert(['id'=>44680, 'districts_id'=>3907, 'zipcode'=>'29151', 'name'=>'Gunung Kijang']);
        DB::table('villages')->insert(['id'=>44681, 'districts_id'=>3907, 'zipcode'=>'29151', 'name'=>'Kawal']);
        DB::table('villages')->insert(['id'=>44682, 'districts_id'=>3907, 'zipcode'=>'29151', 'name'=>'Malang Rapat']);
        DB::table('villages')->insert(['id'=>44683, 'districts_id'=>3907, 'zipcode'=>'29151', 'name'=>'Teluk Bakau']);
        //Kecamatan Bintan Timur Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3908, 'city_id'=>219, 'name'=>'Bintan Timur']);
        DB::table('villages')->insert(['id'=>44684, 'districts_id'=>3908, 'zipcode'=>'29151', 'name'=>'Gunung Lengkuas']);
        DB::table('villages')->insert(['id'=>44685, 'districts_id'=>3908, 'zipcode'=>'29151', 'name'=>'Kijang Kota']);
        DB::table('villages')->insert(['id'=>44686, 'districts_id'=>3908, 'zipcode'=>'29151', 'name'=>'Sungai Enam']);
        DB::table('villages')->insert(['id'=>44687, 'districts_id'=>3908, 'zipcode'=>'29151', 'name'=>'Sungai Lekop']);
        //Kecamatan Toapaya Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3909, 'city_id'=>219, 'name'=>'Toapaya']);
        DB::table('villages')->insert(['id'=>44688, 'districts_id'=>3909, 'zipcode'=>'29151', 'name'=>'Toapaya']);
        DB::table('villages')->insert(['id'=>44689, 'districts_id'=>3909, 'zipcode'=>'29151', 'name'=>'Toapaya Asri']);
        DB::table('villages')->insert(['id'=>44690, 'districts_id'=>3909, 'zipcode'=>'29151', 'name'=>'Toapaya Selatan']);
        DB::table('villages')->insert(['id'=>44691, 'districts_id'=>3909, 'zipcode'=>'29151', 'name'=>'Toapaya Utara']);
        //Kecamatan Teluk Sebong Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3910, 'city_id'=>219, 'name'=>'Teluk Sebong']);
        DB::table('villages')->insert(['id'=>44692, 'districts_id'=>3910, 'zipcode'=>'29152', 'name'=>'Berakit']);
        DB::table('villages')->insert(['id'=>44693, 'districts_id'=>3910, 'zipcode'=>'29152', 'name'=>'Ekang Anculai']);
        DB::table('villages')->insert(['id'=>44694, 'districts_id'=>3910, 'zipcode'=>'29152', 'name'=>'Kota Baru']);
        DB::table('villages')->insert(['id'=>44695, 'districts_id'=>3910, 'zipcode'=>'29152', 'name'=>'Pengudang']);
        DB::table('villages')->insert(['id'=>44696, 'districts_id'=>3910, 'zipcode'=>'29152', 'name'=>'Sebung/sebong Lagoi']);
        DB::table('villages')->insert(['id'=>44697, 'districts_id'=>3910, 'zipcode'=>'29152', 'name'=>'Sebung/sebong Pereh']);
        DB::table('villages')->insert(['id'=>44698, 'districts_id'=>3910, 'zipcode'=>'29152', 'name'=>'Sri Bintan']);
        //Kecamatan Seri/sri Kuala Lobam Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3911, 'city_id'=>219, 'name'=>'Seri/sri Kuala Lobam']);
        DB::table('villages')->insert(['id'=>44699, 'districts_id'=>3911, 'zipcode'=>'29152', 'name'=>'Busung']);
        DB::table('villages')->insert(['id'=>44700, 'districts_id'=>3911, 'zipcode'=>'29152', 'name'=>'Kuala Sempang']);
        DB::table('villages')->insert(['id'=>44701, 'districts_id'=>3911, 'zipcode'=>'29152', 'name'=>'Tanjung Permai']);
        DB::table('villages')->insert(['id'=>44702, 'districts_id'=>3911, 'zipcode'=>'29152', 'name'=>'Teluk Lobam']);
        DB::table('villages')->insert(['id'=>44703, 'districts_id'=>3911, 'zipcode'=>'29152', 'name'=>'Teluk Sasah']);
        //Kecamatan Bintan Utara Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3912, 'city_id'=>219, 'name'=>'Bintan Utara']);
        DB::table('villages')->insert(['id'=>44704, 'districts_id'=>3912, 'zipcode'=>'29152', 'name'=>'Lancang Kuning']);
        DB::table('villages')->insert(['id'=>44705, 'districts_id'=>3912, 'zipcode'=>'29152', 'name'=>'Tanjung Uban Kota']);
        DB::table('villages')->insert(['id'=>44706, 'districts_id'=>3912, 'zipcode'=>'29152', 'name'=>'Tanjung Uban Selatan']);
        DB::table('villages')->insert(['id'=>44707, 'districts_id'=>3912, 'zipcode'=>'29152', 'name'=>'Tanjung Uban Timur']);
        DB::table('villages')->insert(['id'=>44708, 'districts_id'=>3912, 'zipcode'=>'29152', 'name'=>'Tanjung Uban Utara']);
        //Kecamatan Tambelan Kab. Bintan Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3913, 'city_id'=>219, 'name'=>'Tambelan']);
        DB::table('villages')->insert(['id'=>44709, 'districts_id'=>3913, 'zipcode'=>'29193', 'name'=>'Batu Lepuk']);
        DB::table('villages')->insert(['id'=>44710, 'districts_id'=>3913, 'zipcode'=>'29193', 'name'=>'Kampung Hilir']);
        DB::table('villages')->insert(['id'=>44711, 'districts_id'=>3913, 'zipcode'=>'29193', 'name'=>'Kampung Melayu']);
        DB::table('villages')->insert(['id'=>44712, 'districts_id'=>3913, 'zipcode'=>'29193', 'name'=>'Kukup']);
        DB::table('villages')->insert(['id'=>44713, 'districts_id'=>3913, 'zipcode'=>'29193', 'name'=>'Pengikik']);
        DB::table('villages')->insert(['id'=>44714, 'districts_id'=>3913, 'zipcode'=>'29193', 'name'=>'Pulau Mentebung']);
        DB::table('villages')->insert(['id'=>44715, 'districts_id'=>3913, 'zipcode'=>'29193', 'name'=>'Pulau Pinang']);
        DB::table('villages')->insert(['id'=>44716, 'districts_id'=>3913, 'zipcode'=>'29193', 'name'=>'Teluk Sekuni']);

        //Kota Batam Provinsi Kepulauan Riau
        DB::table('cities')->insert(['id'=>220, 'province_id'=>17, 'type'=>'city', 'name'=>'Batam']);
        //Kecamatan Belakang Padang Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3914, 'city_id'=>220, 'name'=>'Belakang Padang']);
        DB::table('villages')->insert(['id'=>44717, 'districts_id'=>3914, 'zipcode'=>'29412', 'name'=>'Pemping']);
        DB::table('villages')->insert(['id'=>44718, 'districts_id'=>3914, 'zipcode'=>'29413', 'name'=>'Kasu']);
        DB::table('villages')->insert(['id'=>44719, 'districts_id'=>3914, 'zipcode'=>'29414', 'name'=>'Pecong']);
        DB::table('villages')->insert(['id'=>44720, 'districts_id'=>3914, 'zipcode'=>'29416', 'name'=>'Pulau Terong']);
        DB::table('villages')->insert(['id'=>44721, 'districts_id'=>3914, 'zipcode'=>'29416', 'name'=>'Sekanak Raya']);
        DB::table('villages')->insert(['id'=>44722, 'districts_id'=>3914, 'zipcode'=>'29416', 'name'=>'Tanjung Sari']);
        //Kecamatan Batu Aji Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3915, 'city_id'=>220, 'name'=>'Batu Aji']);
        DB::table('villages')->insert(['id'=>44723, 'districts_id'=>3915, 'zipcode'=>'29422', 'name'=>'Kibing']);
        DB::table('villages')->insert(['id'=>44724, 'districts_id'=>3915, 'zipcode'=>'29424', 'name'=>'Tanjung Uncang']);
        DB::table('villages')->insert(['id'=>44725, 'districts_id'=>3915, 'zipcode'=>'29438', 'name'=>'Bukit Tempayan']);
        DB::table('villages')->insert(['id'=>44726, 'districts_id'=>3915, 'zipcode'=>'29438', 'name'=>'Buliang']);
        //Kecamatan Sekupang Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3916, 'city_id'=>220, 'name'=>'Sekupang']);
        DB::table('villages')->insert(['id'=>44727, 'districts_id'=>3916, 'zipcode'=>'29425', 'name'=>'Tanjung Riau']);
        DB::table('villages')->insert(['id'=>44728, 'districts_id'=>3916, 'zipcode'=>'29425', 'name'=>'Tiban Lama']);
        DB::table('villages')->insert(['id'=>44729, 'districts_id'=>3916, 'zipcode'=>'29426', 'name'=>'Tiban Baru']);
        DB::table('villages')->insert(['id'=>44730, 'districts_id'=>3916, 'zipcode'=>'29426', 'name'=>'Tiban Indah']);
        DB::table('villages')->insert(['id'=>44731, 'districts_id'=>3916, 'zipcode'=>'29427', 'name'=>'Patam Lestari']);
        DB::table('villages')->insert(['id'=>44732, 'districts_id'=>3916, 'zipcode'=>'29428', 'name'=>'Sungai Harapan']);
        DB::table('villages')->insert(['id'=>44733, 'districts_id'=>3916, 'zipcode'=>'29428', 'name'=>'Tanjung Pinggir']);
        //Kecamatan Batam Kota Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3917, 'city_id'=>220, 'name'=>'Batam Kota']);
        DB::table('villages')->insert(['id'=>44734, 'districts_id'=>3917, 'zipcode'=>'29431', 'name'=>'Baloi Permai']);
        DB::table('villages')->insert(['id'=>44735, 'districts_id'=>3917, 'zipcode'=>'29432', 'name'=>'Sukajadi']);
        DB::table('villages')->insert(['id'=>44736, 'districts_id'=>3917, 'zipcode'=>'29432', 'name'=>'Taman Baloi']);
        DB::table('villages')->insert(['id'=>44737, 'districts_id'=>3917, 'zipcode'=>'29433', 'name'=>'Sungai Panas']);
        DB::table('villages')->insert(['id'=>44738, 'districts_id'=>3917, 'zipcode'=>'29461', 'name'=>'Teluk Tering']);
        DB::table('villages')->insert(['id'=>44739, 'districts_id'=>3917, 'zipcode'=>'29464', 'name'=>'Belian']);
        //Kecamatan Lubuk Baja Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3918, 'city_id'=>220, 'name'=>'Lubuk Baja']);
        DB::table('villages')->insert(['id'=>44740, 'districts_id'=>3918, 'zipcode'=>'29432', 'name'=>'Baloi Indah']);
        DB::table('villages')->insert(['id'=>44741, 'districts_id'=>3918, 'zipcode'=>'29441', 'name'=>'Batu Selicin']);
        DB::table('villages')->insert(['id'=>44742, 'districts_id'=>3918, 'zipcode'=>'29443', 'name'=>'Kampung Pelita']);
        DB::table('villages')->insert(['id'=>44743, 'districts_id'=>3918, 'zipcode'=>'29444', 'name'=>'Lubuk Baja Kota']);
        DB::table('villages')->insert(['id'=>44744, 'districts_id'=>3918, 'zipcode'=>'29445', 'name'=>'Tanjung Uma']);
        //Kecamatan Bengkong Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3919, 'city_id'=>220, 'name'=>'Bengkong']);
        DB::table('villages')->insert(['id'=>44745, 'districts_id'=>3919, 'zipcode'=>'29432', 'name'=>'Sadai']);
        DB::table('villages')->insert(['id'=>44746, 'districts_id'=>3919, 'zipcode'=>'29432', 'name'=>'Tanjung Buntung']);
        DB::table('villages')->insert(['id'=>44747, 'districts_id'=>3919, 'zipcode'=>'29458', 'name'=>'Bengkong Indah']);
        DB::table('villages')->insert(['id'=>44748, 'districts_id'=>3919, 'zipcode'=>'29458', 'name'=>'Bengkong Laut']);
        //Kecamatan Sei/sungai Beduk Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3920, 'city_id'=>220, 'name'=>'Sei/sungai Beduk']);
        DB::table('villages')->insert(['id'=>44749, 'districts_id'=>3920, 'zipcode'=>'29433', 'name'=>'Muka Kuning']);
        DB::table('villages')->insert(['id'=>44750, 'districts_id'=>3920, 'zipcode'=>'29437', 'name'=>'Duriangka']);
        DB::table('villages')->insert(['id'=>44751, 'districts_id'=>3920, 'zipcode'=>'29437', 'name'=>'Mangsang (mangsa)']);
        DB::table('villages')->insert(['id'=>44752, 'districts_id'=>3920, 'zipcode'=>'29437', 'name'=>'Tanjung Piayu']);
        //Kecamatan Sagulung Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3921, 'city_id'=>220, 'name'=>'Sagulung']);
        DB::table('villages')->insert(['id'=>44753, 'districts_id'=>3921, 'zipcode'=>'29439', 'name'=>'Sagulung Kota']);
        DB::table('villages')->insert(['id'=>44754, 'districts_id'=>3921, 'zipcode'=>'29439', 'name'=>'Sungai Binti']);
        DB::table('villages')->insert(['id'=>44755, 'districts_id'=>3921, 'zipcode'=>'29439', 'name'=>'Sungai Langkai']);
        DB::table('villages')->insert(['id'=>44756, 'districts_id'=>3921, 'zipcode'=>'29439', 'name'=>'Sungai Lekop']);
        DB::table('villages')->insert(['id'=>44757, 'districts_id'=>3921, 'zipcode'=>'29439', 'name'=>'Sungai Pelenggut/pelunggut']);
        DB::table('villages')->insert(['id'=>44758, 'districts_id'=>3921, 'zipcode'=>'29439', 'name'=>'Tembesi']);
        //Kecamatan Batu Ampar Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3922, 'city_id'=>220, 'name'=>'Batu Ampar']);
        DB::table('villages')->insert(['id'=>44759, 'districts_id'=>3922, 'zipcode'=>'29452', 'name'=>'Batu Merah']);
        DB::table('villages')->insert(['id'=>44760, 'districts_id'=>3922, 'zipcode'=>'29453', 'name'=>'Sungai Jodoh']);
        DB::table('villages')->insert(['id'=>44761, 'districts_id'=>3922, 'zipcode'=>'29453', 'name'=>'Tanjung Sengkuang']);
        DB::table('villages')->insert(['id'=>44762, 'districts_id'=>3922, 'zipcode'=>'29454', 'name'=>'Kampung Seraya']);
        //Kecamatan Nongsa Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3923, 'city_id'=>220, 'name'=>'Nongsa']);
        DB::table('villages')->insert(['id'=>44763, 'districts_id'=>3923, 'zipcode'=>'29465', 'name'=>'Sambau']);
        DB::table('villages')->insert(['id'=>44764, 'districts_id'=>3923, 'zipcode'=>'29466', 'name'=>'Batu Besar']);
        DB::table('villages')->insert(['id'=>44765, 'districts_id'=>3923, 'zipcode'=>'29467', 'name'=>'Kabil']);
        DB::table('villages')->insert(['id'=>44766, 'districts_id'=>3923, 'zipcode'=>'29468', 'name'=>'Ngenang']);
        //Kecamatan Bulang Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3924, 'city_id'=>220, 'name'=>'Bulang']);
        DB::table('villages')->insert(['id'=>44767, 'districts_id'=>3924, 'zipcode'=>'29471', 'name'=>'Bulang Lintang']);
        DB::table('villages')->insert(['id'=>44768, 'districts_id'=>3924, 'zipcode'=>'29472', 'name'=>'Pulau Buluh']);
        DB::table('villages')->insert(['id'=>44769, 'districts_id'=>3924, 'zipcode'=>'29473', 'name'=>'Pantai Gelam']);
        DB::table('villages')->insert(['id'=>44770, 'districts_id'=>3924, 'zipcode'=>'29474', 'name'=>'Batu Legong']);
        DB::table('villages')->insert(['id'=>44771, 'districts_id'=>3924, 'zipcode'=>'29475', 'name'=>'Temoyong']);
        DB::table('villages')->insert(['id'=>44772, 'districts_id'=>3924, 'zipcode'=>'29476', 'name'=>'Pulau Setokok']);
        //Kecamatan Galang Kota Batam Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3925, 'city_id'=>220, 'name'=>'Galang']);
        DB::table('villages')->insert(['id'=>44773, 'districts_id'=>3925, 'zipcode'=>'29481', 'name'=>'Sembulang (pulau Rempang)']);
        DB::table('villages')->insert(['id'=>44774, 'districts_id'=>3925, 'zipcode'=>'29482', 'name'=>'Rempang Cate']);
        DB::table('villages')->insert(['id'=>44775, 'districts_id'=>3925, 'zipcode'=>'29483', 'name'=>'Air Raja']);
        DB::table('villages')->insert(['id'=>44776, 'districts_id'=>3925, 'zipcode'=>'29483', 'name'=>'Subang Mas']);
        DB::table('villages')->insert(['id'=>44777, 'districts_id'=>3925, 'zipcode'=>'29484', 'name'=>'Galang Baru (pulau)']);
        DB::table('villages')->insert(['id'=>44778, 'districts_id'=>3925, 'zipcode'=>'29485', 'name'=>'Sijantung']);
        DB::table('villages')->insert(['id'=>44779, 'districts_id'=>3925, 'zipcode'=>'29486', 'name'=>'Karas (pulau Karas)']);
        DB::table('villages')->insert(['id'=>44780, 'districts_id'=>3925, 'zipcode'=>'29487', 'name'=>'Pulau Abang']);

        //Kab. Karimun Provinsi Kepulauan Riau
        DB::table('cities')->insert(['id'=>221, 'province_id'=>17, 'type'=>'regencies', 'name'=>'Karimun']);
        //Kecamatan Karimun Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3926, 'city_id'=>221, 'name'=>'Karimun']);
        DB::table('villages')->insert(['id'=>44781, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Lubuk Semut']);
        DB::table('villages')->insert(['id'=>44782, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Parit']);
        DB::table('villages')->insert(['id'=>44783, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Selat Mendaun']);
        DB::table('villages')->insert(['id'=>44784, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Sungai Lakam Barat']);
        DB::table('villages')->insert(['id'=>44785, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Sungai Lakam Timur']);
        DB::table('villages')->insert(['id'=>44786, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Tanjung Balai']);
        DB::table('villages')->insert(['id'=>44787, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Tanjung Balai Kota']);
        DB::table('villages')->insert(['id'=>44788, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Teluk Air']);
        DB::table('villages')->insert(['id'=>44789, 'districts_id'=>3926, 'zipcode'=>'29661', 'name'=>'Tulang']);
        //Kecamatan Ungar Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3927, 'city_id'=>221, 'name'=>'Ungar']);
        DB::table('villages')->insert(['id'=>44790, 'districts_id'=>3927, 'zipcode'=>'29662', 'name'=>'Alai']);
        DB::table('villages')->insert(['id'=>44791, 'districts_id'=>3927, 'zipcode'=>'29662', 'name'=>'Batu Limau']);
        DB::table('villages')->insert(['id'=>44792, 'districts_id'=>3927, 'zipcode'=>'29662', 'name'=>'Ngal']);
        DB::table('villages')->insert(['id'=>44793, 'districts_id'=>3927, 'zipcode'=>'29662', 'name'=>'Sungai Buluh']);
        //Kecamatan Belat Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3928, 'city_id'=>221, 'name'=>'Belat']);
        DB::table('villages')->insert(['id'=>44794, 'districts_id'=>3928, 'zipcode'=>'29662', 'name'=>'Degong']);
        DB::table('villages')->insert(['id'=>44795, 'districts_id'=>3928, 'zipcode'=>'29662', 'name'=>'Lebuh']);
        DB::table('villages')->insert(['id'=>44796, 'districts_id'=>3928, 'zipcode'=>'29662', 'name'=>'Penarah']);
        DB::table('villages')->insert(['id'=>44797, 'districts_id'=>3928, 'zipcode'=>'29662', 'name'=>'Sebele']);
        DB::table('villages')->insert(['id'=>44798, 'districts_id'=>3928, 'zipcode'=>'29662', 'name'=>'Sei/sungai Asam']);
        DB::table('villages')->insert(['id'=>44799, 'districts_id'=>3928, 'zipcode'=>'29662', 'name'=>'Tebias']);
        //Kecamatan Kundur Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3929, 'city_id'=>221, 'name'=>'Kundur']);
        DB::table('villages')->insert(['id'=>44800, 'districts_id'=>3929, 'zipcode'=>'29662', 'name'=>'Gading Sari']);
        DB::table('villages')->insert(['id'=>44801, 'districts_id'=>3929, 'zipcode'=>'29662', 'name'=>'Lubuk']);
        DB::table('villages')->insert(['id'=>44802, 'districts_id'=>3929, 'zipcode'=>'29662', 'name'=>'Sebesi (sei Sebesi)']);
        DB::table('villages')->insert(['id'=>44803, 'districts_id'=>3929, 'zipcode'=>'29662', 'name'=>'Sei/sungai Ungar']);
        DB::table('villages')->insert(['id'=>44804, 'districts_id'=>3929, 'zipcode'=>'29662', 'name'=>'Tanjung Batu Barat']);
        DB::table('villages')->insert(['id'=>44805, 'districts_id'=>3929, 'zipcode'=>'29662', 'name'=>'Tanjung Batu Kota']);
        //Kecamatan Kundur Barat Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3930, 'city_id'=>221, 'name'=>'Kundur Barat']);
        DB::table('villages')->insert(['id'=>44806, 'districts_id'=>3930, 'zipcode'=>'29662', 'name'=>'Gemuruh']);
        DB::table('villages')->insert(['id'=>44807, 'districts_id'=>3930, 'zipcode'=>'29662', 'name'=>'Kundur']);
        DB::table('villages')->insert(['id'=>44808, 'districts_id'=>3930, 'zipcode'=>'29662', 'name'=>'Sawang']);
        DB::table('villages')->insert(['id'=>44809, 'districts_id'=>3930, 'zipcode'=>'29662', 'name'=>'Sawang Laut']);
        DB::table('villages')->insert(['id'=>44810, 'districts_id'=>3930, 'zipcode'=>'29662', 'name'=>'Sawang Selatan']);
        //Kecamatan Kundur Utara Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3931, 'city_id'=>221, 'name'=>'Kundur Utara']);
        DB::table('villages')->insert(['id'=>44811, 'districts_id'=>3931, 'zipcode'=>'29662', 'name'=>'Perayun']);
        DB::table('villages')->insert(['id'=>44812, 'districts_id'=>3931, 'zipcode'=>'29662', 'name'=>'Sei/sungai Ungar Utara']);
        DB::table('villages')->insert(['id'=>44813, 'districts_id'=>3931, 'zipcode'=>'29662', 'name'=>'Tanjung Berlian Barat (urung Barat)']);
        DB::table('villages')->insert(['id'=>44814, 'districts_id'=>3931, 'zipcode'=>'29662', 'name'=>'Tanjung Berlian Kota (urung)']);
        DB::table('villages')->insert(['id'=>44815, 'districts_id'=>3931, 'zipcode'=>'29662', 'name'=>'Teluk Radang']);
        //Kecamatan Moro Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3932, 'city_id'=>221, 'name'=>'Moro']);
        DB::table('villages')->insert(['id'=>44816, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Buluh Patah']);
        DB::table('villages')->insert(['id'=>44817, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Jang (pulau Jang)']);
        DB::table('villages')->insert(['id'=>44818, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Keban']);
        DB::table('villages')->insert(['id'=>44819, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Moro']);
        DB::table('villages')->insert(['id'=>44820, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Moro Timur']);
        DB::table('villages')->insert(['id'=>44821, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Niur Permai']);
        DB::table('villages')->insert(['id'=>44822, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Pauh']);
        DB::table('villages')->insert(['id'=>44823, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Pulaumoro']);
        DB::table('villages')->insert(['id'=>44824, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Rawajaya']);
        DB::table('villages')->insert(['id'=>44825, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Selat Mie']);
        DB::table('villages')->insert(['id'=>44826, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Sugie']);
        DB::table('villages')->insert(['id'=>44827, 'districts_id'=>3932, 'zipcode'=>'29663', 'name'=>'Tanjung Pelanduk']);
        //Kecamatan Tebing Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3933, 'city_id'=>221, 'name'=>'Tebing']);
        DB::table('villages')->insert(['id'=>44828, 'districts_id'=>3933, 'zipcode'=>'29663', 'name'=>'Harjosari']);
        DB::table('villages')->insert(['id'=>44829, 'districts_id'=>3933, 'zipcode'=>'29663', 'name'=>'Kapling']);
        DB::table('villages')->insert(['id'=>44830, 'districts_id'=>3933, 'zipcode'=>'29663', 'name'=>'Pamak']);
        DB::table('villages')->insert(['id'=>44831, 'districts_id'=>3933, 'zipcode'=>'29663', 'name'=>'Pongkar']);
        DB::table('villages')->insert(['id'=>44832, 'districts_id'=>3933, 'zipcode'=>'29663', 'name'=>'Tebing']);
        DB::table('villages')->insert(['id'=>44833, 'districts_id'=>3933, 'zipcode'=>'29663', 'name'=>'Teluk Uma']);
        //Kecamatan Meral Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3934, 'city_id'=>221, 'name'=>'Meral']);
        DB::table('villages')->insert(['id'=>44834, 'districts_id'=>3934, 'zipcode'=>'29664', 'name'=>'Baran Barat']);
        DB::table('villages')->insert(['id'=>44835, 'districts_id'=>3934, 'zipcode'=>'29664', 'name'=>'Baran Timur']);
        DB::table('villages')->insert(['id'=>44836, 'districts_id'=>3934, 'zipcode'=>'29664', 'name'=>'Meral Kota']);
        DB::table('villages')->insert(['id'=>44837, 'districts_id'=>3934, 'zipcode'=>'29664', 'name'=>'Pasir Benut']);
        DB::table('villages')->insert(['id'=>44838, 'districts_id'=>3934, 'zipcode'=>'29664', 'name'=>'Sei/sungai Raya']);
        DB::table('villages')->insert(['id'=>44839, 'districts_id'=>3934, 'zipcode'=>'29664', 'name'=>'Sungai Pasir']);
        //Kecamatan Buru Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3935, 'city_id'=>221, 'name'=>'Buru']);
        DB::table('villages')->insert(['id'=>44840, 'districts_id'=>3935, 'zipcode'=>'29664', 'name'=>'Buru']);
        DB::table('villages')->insert(['id'=>44841, 'districts_id'=>3935, 'zipcode'=>'29664', 'name'=>'Lubuk Puding']);
        DB::table('villages')->insert(['id'=>44842, 'districts_id'=>3935, 'zipcode'=>'29664', 'name'=>'Tanjung Batu Kecil']);
        DB::table('villages')->insert(['id'=>44843, 'districts_id'=>3935, 'zipcode'=>'29664', 'name'=>'Tanjung Hutan']);
        //Kecamatan Meral Barat Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3936, 'city_id'=>221, 'name'=>'Meral Barat']);
        DB::table('villages')->insert(['id'=>44844, 'districts_id'=>3936, 'zipcode'=>'29664', 'name'=>'Darussalam']);
        DB::table('villages')->insert(['id'=>44845, 'districts_id'=>3936, 'zipcode'=>'29664', 'name'=>'Pangke']);
        DB::table('villages')->insert(['id'=>44846, 'districts_id'=>3936, 'zipcode'=>'29664', 'name'=>'Pangke Barat']);
        DB::table('villages')->insert(['id'=>44847, 'districts_id'=>3936, 'zipcode'=>'29664', 'name'=>'Pasir Panjang']);
        //Kecamatan Durai Kab. Karimun Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3937, 'city_id'=>221, 'name'=>'Durai']);
        DB::table('villages')->insert(['id'=>44848, 'districts_id'=>3937, 'zipcode'=>'29664', 'name'=>'Durai']);
        DB::table('villages')->insert(['id'=>44849, 'districts_id'=>3937, 'zipcode'=>'29664', 'name'=>'Sanglar']);
        DB::table('villages')->insert(['id'=>44850, 'districts_id'=>3937, 'zipcode'=>'29664', 'name'=>'Simembang (semembang)']);
        DB::table('villages')->insert(['id'=>44851, 'districts_id'=>3937, 'zipcode'=>'29664', 'name'=>'Tanjung Kilang']);

        //Kab. Natuna Provinsi Kepulauan Riau
        DB::table('cities')->insert(['id'=>222, 'province_id'=>17, 'type'=>'regencies', 'name'=>'Natuna']);
        //Kecamatan Serasan Timur Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3938, 'city_id'=>222, 'name'=>'Serasan Timur']);
        DB::table('villages')->insert(['id'=>44852, 'districts_id'=>3938, 'zipcode'=>'29781', 'name'=>'Air Nusa']);
        DB::table('villages')->insert(['id'=>44853, 'districts_id'=>3938, 'zipcode'=>'29781', 'name'=>'Air Ringau']);
        DB::table('villages')->insert(['id'=>44854, 'districts_id'=>3938, 'zipcode'=>'29781', 'name'=>'Arung Ayam']);
        DB::table('villages')->insert(['id'=>44855, 'districts_id'=>3938, 'zipcode'=>'29781', 'name'=>'Payak (harapan Baru)']);
        //Kecamatan Serasan Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3939, 'city_id'=>222, 'name'=>'Serasan']);
        DB::table('villages')->insert(['id'=>44856, 'districts_id'=>3939, 'zipcode'=>'29781', 'name'=>'Batu Berian']);
        DB::table('villages')->insert(['id'=>44857, 'districts_id'=>3939, 'zipcode'=>'29781', 'name'=>'Jernalik']);
        DB::table('villages')->insert(['id'=>44858, 'districts_id'=>3939, 'zipcode'=>'29781', 'name'=>'Kampung Hilir']);
        DB::table('villages')->insert(['id'=>44859, 'districts_id'=>3939, 'zipcode'=>'29781', 'name'=>'Pangkalan']);
        DB::table('villages')->insert(['id'=>44860, 'districts_id'=>3939, 'zipcode'=>'29781', 'name'=>'Serasan']);
        DB::table('villages')->insert(['id'=>44861, 'districts_id'=>3939, 'zipcode'=>'29781', 'name'=>'Tanjung Balau']);
        DB::table('villages')->insert(['id'=>44862, 'districts_id'=>3939, 'zipcode'=>'29781', 'name'=>'Tanjung Setelung']);
        //Kecamatan Subi Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3940, 'city_id'=>222, 'name'=>'Subi']);
        DB::table('villages')->insert(['id'=>44863, 'districts_id'=>3940, 'zipcode'=>'29781', 'name'=>'Meliah']);
        DB::table('villages')->insert(['id'=>44864, 'districts_id'=>3940, 'zipcode'=>'29781', 'name'=>'Meliah Selatan']);
        DB::table('villages')->insert(['id'=>44865, 'districts_id'=>3940, 'zipcode'=>'29781', 'name'=>'Pulau Kerdau']);
        DB::table('villages')->insert(['id'=>44866, 'districts_id'=>3940, 'zipcode'=>'29781', 'name'=>'Pulau Panjang']);
        DB::table('villages')->insert(['id'=>44867, 'districts_id'=>3940, 'zipcode'=>'29781', 'name'=>'Subi']);
        DB::table('villages')->insert(['id'=>44868, 'districts_id'=>3940, 'zipcode'=>'29781', 'name'=>'Subi Besar']);
        DB::table('villages')->insert(['id'=>44869, 'districts_id'=>3940, 'zipcode'=>'29781', 'name'=>'Subi Besar Timur']);
        DB::table('villages')->insert(['id'=>44870, 'districts_id'=>3940, 'zipcode'=>'29781', 'name'=>'Terayak']);
        //Kecamatan Bunguran Barat Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3941, 'city_id'=>222, 'name'=>'Bunguran Barat']);
        DB::table('villages')->insert(['id'=>44871, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Batubi Jaya']);
        DB::table('villages')->insert(['id'=>44872, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Binjai']);
        DB::table('villages')->insert(['id'=>44873, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Gunung Putri']);
        DB::table('villages')->insert(['id'=>44874, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Mekar Jaya']);
        DB::table('villages')->insert(['id'=>44875, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Pian Tengah']);
        DB::table('villages')->insert(['id'=>44876, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Sedanau']);
        DB::table('villages')->insert(['id'=>44877, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Sedanau Timur']);
        DB::table('villages')->insert(['id'=>44878, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Sedarat Baru']);
        DB::table('villages')->insert(['id'=>44879, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Selaut']);
        DB::table('villages')->insert(['id'=>44880, 'districts_id'=>3941, 'zipcode'=>'29782', 'name'=>'Semedang']);
        //Kecamatan Bunguran Tengah Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3942, 'city_id'=>222, 'name'=>'Bunguran Tengah']);
        DB::table('villages')->insert(['id'=>44881, 'districts_id'=>3942, 'zipcode'=>'29783', 'name'=>'Air Lengit']);
        DB::table('villages')->insert(['id'=>44882, 'districts_id'=>3942, 'zipcode'=>'29783', 'name'=>'Harapan Jaya']);
        DB::table('villages')->insert(['id'=>44883, 'districts_id'=>3942, 'zipcode'=>'29783', 'name'=>'Tapau']);
        //Kecamatan Pulau Laut Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3943, 'city_id'=>222, 'name'=>'Pulau Laut']);
        DB::table('villages')->insert(['id'=>44884, 'districts_id'=>3943, 'zipcode'=>'29783', 'name'=>'Air Payang']);
        DB::table('villages')->insert(['id'=>44885, 'districts_id'=>3943, 'zipcode'=>'29783', 'name'=>'Kadur']);
        DB::table('villages')->insert(['id'=>44886, 'districts_id'=>3943, 'zipcode'=>'29783', 'name'=>'Tanjung Pala']);
        //Kecamatan Bunguran Timur Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3944, 'city_id'=>222, 'name'=>'Bunguran Timur']);
        DB::table('villages')->insert(['id'=>44887, 'districts_id'=>3944, 'zipcode'=>'29783', 'name'=>'Bandarsyah']);
        DB::table('villages')->insert(['id'=>44888, 'districts_id'=>3944, 'zipcode'=>'29783', 'name'=>'Batu Gajah']);
        DB::table('villages')->insert(['id'=>44889, 'districts_id'=>3944, 'zipcode'=>'29783', 'name'=>'Ranai Darat']);
        DB::table('villages')->insert(['id'=>44890, 'districts_id'=>3944, 'zipcode'=>'29783', 'name'=>'Ranai Kota']);
        DB::table('villages')->insert(['id'=>44891, 'districts_id'=>3944, 'zipcode'=>'29783', 'name'=>'Sepempang']);
        DB::table('villages')->insert(['id'=>44892, 'districts_id'=>3944, 'zipcode'=>'29783', 'name'=>'Sungai Ulu']);
        //Kecamatan Bunguran Utara Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3945, 'city_id'=>222, 'name'=>'Bunguran Utara']);
        DB::table('villages')->insert(['id'=>44893, 'districts_id'=>3945, 'zipcode'=>'29783', 'name'=>'Belakang Gunung']);
        DB::table('villages')->insert(['id'=>44894, 'districts_id'=>3945, 'zipcode'=>'29783', 'name'=>'Gunung Durian']);
        DB::table('villages')->insert(['id'=>44895, 'districts_id'=>3945, 'zipcode'=>'29783', 'name'=>'Kelarik']);
        DB::table('villages')->insert(['id'=>44896, 'districts_id'=>3945, 'zipcode'=>'29783', 'name'=>'Kelarik Air Mali']);
        DB::table('villages')->insert(['id'=>44897, 'districts_id'=>3945, 'zipcode'=>'29783', 'name'=>'Kelarik Barat']);
        DB::table('villages')->insert(['id'=>44898, 'districts_id'=>3945, 'zipcode'=>'29783', 'name'=>'Kelarik Utara']);
        DB::table('villages')->insert(['id'=>44899, 'districts_id'=>3945, 'zipcode'=>'29783', 'name'=>'Seluan Barat']);
        DB::table('villages')->insert(['id'=>44900, 'districts_id'=>3945, 'zipcode'=>'29783', 'name'=>'Teluk Buton']);
        //Kecamatan Bunguran Selatan Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3946, 'city_id'=>222, 'name'=>'Bunguran Selatan']);
        DB::table('villages')->insert(['id'=>44901, 'districts_id'=>3946, 'zipcode'=>'29783', 'name'=>'Cemaga']);
        DB::table('villages')->insert(['id'=>44902, 'districts_id'=>3946, 'zipcode'=>'29783', 'name'=>'Cemaga Selatan (setegar)']);
        DB::table('villages')->insert(['id'=>44903, 'districts_id'=>3946, 'zipcode'=>'29783', 'name'=>'Cemaga Tengah']);
        DB::table('villages')->insert(['id'=>44904, 'districts_id'=>3946, 'zipcode'=>'29783', 'name'=>'Cemaga Utara (singgang Bbulan)']);
        //Kecamatan Bunguran Timur Laut Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3947, 'city_id'=>222, 'name'=>'Bunguran Timur Laut']);
        DB::table('villages')->insert(['id'=>44905, 'districts_id'=>3947, 'zipcode'=>'29783', 'name'=>'Ceruk']);
        DB::table('villages')->insert(['id'=>44906, 'districts_id'=>3947, 'zipcode'=>'29783', 'name'=>'Kelanga']);
        DB::table('villages')->insert(['id'=>44907, 'districts_id'=>3947, 'zipcode'=>'29783', 'name'=>'Limau Manis']);
        DB::table('villages')->insert(['id'=>44908, 'districts_id'=>3947, 'zipcode'=>'29783', 'name'=>'Pengadah']);
        DB::table('villages')->insert(['id'=>44909, 'districts_id'=>3947, 'zipcode'=>'29783', 'name'=>'Sebadai Ulu / Hulu']);
        DB::table('villages')->insert(['id'=>44910, 'districts_id'=>3947, 'zipcode'=>'29783', 'name'=>'Seleman']);
        DB::table('villages')->insert(['id'=>44911, 'districts_id'=>3947, 'zipcode'=>'29783', 'name'=>'Tanjung']);
        //Kecamatan Pulau Tiga Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3948, 'city_id'=>222, 'name'=>'Pulau Tiga']);
        DB::table('villages')->insert(['id'=>44912, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Pulau Tiga']);
        DB::table('villages')->insert(['id'=>44913, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Sabang Mawang']);
        DB::table('villages')->insert(['id'=>44914, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Sabang Mawang Barat']);
        DB::table('villages')->insert(['id'=>44915, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Sededap']);
        DB::table('villages')->insert(['id'=>44916, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Selading']);
        DB::table('villages')->insert(['id'=>44917, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Serantas']);
        DB::table('villages')->insert(['id'=>44918, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Setumuk']);
        DB::table('villages')->insert(['id'=>44919, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Tanjung Batang']);
        DB::table('villages')->insert(['id'=>44920, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Tanjung Kumbik Utara']);
        DB::table('villages')->insert(['id'=>44921, 'districts_id'=>3948, 'zipcode'=>'29783', 'name'=>'Teluk Labuh']);
        //Kecamatan Midai Kab. Natuna Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3949, 'city_id'=>222, 'name'=>'Midai']);
        DB::table('villages')->insert(['id'=>44922, 'districts_id'=>3949, 'zipcode'=>'29784', 'name'=>'Air Kumpai']);
        DB::table('villages')->insert(['id'=>44923, 'districts_id'=>3949, 'zipcode'=>'29784', 'name'=>'Air Putih']);
        DB::table('villages')->insert(['id'=>44924, 'districts_id'=>3949, 'zipcode'=>'29784', 'name'=>'Batu Belanak']);
        DB::table('villages')->insert(['id'=>44925, 'districts_id'=>3949, 'zipcode'=>'29784', 'name'=>'Gunung Jambat']);
        DB::table('villages')->insert(['id'=>44926, 'districts_id'=>3949, 'zipcode'=>'29784', 'name'=>'Sabang Barat']);
        DB::table('villages')->insert(['id'=>44927, 'districts_id'=>3949, 'zipcode'=>'29784', 'name'=>'Sebelat']);

        //Kab. Kepulauan Anambas Provinsi Kepulauan Riau
        DB::table('cities')->insert(['id'=>223, 'province_id'=>17, 'type'=>'regencies', 'name'=>'Kepulauan Anambas']);
        //Kecamatan Siantan Tengah Kab. Kepulauan Anambas Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3950, 'city_id'=>223, 'name'=>'Siantan Tengah']);
        DB::table('villages')->insert(['id'=>44928, 'districts_id'=>3950, 'zipcode'=>'29783', 'name'=>'Air Asuk']);
        DB::table('villages')->insert(['id'=>44929, 'districts_id'=>3950, 'zipcode'=>'29783', 'name'=>'Air Sena']);
        DB::table('villages')->insert(['id'=>44930, 'districts_id'=>3950, 'zipcode'=>'29783', 'name'=>'Lidi']);
        DB::table('villages')->insert(['id'=>44931, 'districts_id'=>3950, 'zipcode'=>'29783', 'name'=>'Liuk']);
        DB::table('villages')->insert(['id'=>44932, 'districts_id'=>3950, 'zipcode'=>'29783', 'name'=>'Teluk Siantan']);
        DB::table('villages')->insert(['id'=>44933, 'districts_id'=>3950, 'zipcode'=>'29783', 'name'=>'Teluk Sunting']);
        //Kecamatan Palmatak Kab. Kepulauan Anambas Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3951, 'city_id'=>223, 'name'=>'Palmatak']);
        DB::table('villages')->insert(['id'=>44934, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Batu Ampar']);
        DB::table('villages')->insert(['id'=>44935, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Bayat']);
        DB::table('villages')->insert(['id'=>44936, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Belibak']);
        DB::table('villages')->insert(['id'=>44937, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Candi']);
        DB::table('villages')->insert(['id'=>44938, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Ladan']);
        DB::table('villages')->insert(['id'=>44939, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Langir']);
        DB::table('villages')->insert(['id'=>44940, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Matak']);
        DB::table('villages')->insert(['id'=>44941, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Mubur']);
        DB::table('villages')->insert(['id'=>44942, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Payalaman']);
        DB::table('villages')->insert(['id'=>44943, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Payamaram']);
        DB::table('villages')->insert(['id'=>44944, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Piabung']);
        DB::table('villages')->insert(['id'=>44945, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Piasan']);
        DB::table('villages')->insert(['id'=>44946, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Putik']);
        DB::table('villages')->insert(['id'=>44947, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Tebang']);
        DB::table('villages')->insert(['id'=>44948, 'districts_id'=>3951, 'zipcode'=>'29783', 'name'=>'Teluk Bayur']);
        //Kecamatan Siantan Selatan Kab. Kepulauan Anambas Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3952, 'city_id'=>223, 'name'=>'Siantan Selatan']);
        DB::table('villages')->insert(['id'=>44949, 'districts_id'=>3952, 'zipcode'=>'29791', 'name'=>'Air Bini']);
        DB::table('villages')->insert(['id'=>44950, 'districts_id'=>3952, 'zipcode'=>'29791', 'name'=>'Kiabu']);
        DB::table('villages')->insert(['id'=>44951, 'districts_id'=>3952, 'zipcode'=>'29791', 'name'=>'Linga']);
        DB::table('villages')->insert(['id'=>44952, 'districts_id'=>3952, 'zipcode'=>'29791', 'name'=>'Mengkait']);
        DB::table('villages')->insert(['id'=>44953, 'districts_id'=>3952, 'zipcode'=>'29791', 'name'=>'Telaga']);
        DB::table('villages')->insert(['id'=>44954, 'districts_id'=>3952, 'zipcode'=>'29791', 'name'=>'Telaga Kecil']);
        DB::table('villages')->insert(['id'=>44955, 'districts_id'=>3952, 'zipcode'=>'29791', 'name'=>'Tiangau']);
        //Kecamatan Siantan Timur Kab. Kepulauan Anambas Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3953, 'city_id'=>223, 'name'=>'Siantan Timur']);
        DB::table('villages')->insert(['id'=>44956, 'districts_id'=>3953, 'zipcode'=>'29791', 'name'=>'Air Putih']);
        DB::table('villages')->insert(['id'=>44957, 'districts_id'=>3953, 'zipcode'=>'29791', 'name'=>'Batu Belah']);
        DB::table('villages')->insert(['id'=>44958, 'districts_id'=>3953, 'zipcode'=>'29791', 'name'=>'Munjan']);
        DB::table('villages')->insert(['id'=>44959, 'districts_id'=>3953, 'zipcode'=>'29791', 'name'=>'Nyamuk']);
        DB::table('villages')->insert(['id'=>44960, 'districts_id'=>3953, 'zipcode'=>'29791', 'name'=>'Serat']);
        DB::table('villages')->insert(['id'=>44961, 'districts_id'=>3953, 'zipcode'=>'29791', 'name'=>'Temburun']);
        //Kecamatan Siantan Kab. Kepulauan Anambas Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3954, 'city_id'=>223, 'name'=>'Siantan']);
        DB::table('villages')->insert(['id'=>44962, 'districts_id'=>3954, 'zipcode'=>'29791', 'name'=>'Munjan']);
        DB::table('villages')->insert(['id'=>44963, 'districts_id'=>3954, 'zipcode'=>'29791', 'name'=>'Sri Tanjung']);
        DB::table('villages')->insert(['id'=>44964, 'districts_id'=>3954, 'zipcode'=>'29791', 'name'=>'Tarempa']);
        DB::table('villages')->insert(['id'=>44965, 'districts_id'=>3954, 'zipcode'=>'29791', 'name'=>'Tarempa Barat']);
        DB::table('villages')->insert(['id'=>44966, 'districts_id'=>3954, 'zipcode'=>'29791', 'name'=>'Tarempa Barat Daya']);
        DB::table('villages')->insert(['id'=>44967, 'districts_id'=>3954, 'zipcode'=>'29791', 'name'=>'Tarempa Selatan']);
        DB::table('villages')->insert(['id'=>44968, 'districts_id'=>3954, 'zipcode'=>'29791', 'name'=>'Tiangau']);
        //Kecamatan Jemaja Kab. Kepulauan Anambas Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3955, 'city_id'=>223, 'name'=>'Jemaja']);
        DB::table('villages')->insert(['id'=>44969, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Air Biru']);
        DB::table('villages')->insert(['id'=>44970, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Batu Berapit']);
        DB::table('villages')->insert(['id'=>44971, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Impol']);
        DB::table('villages')->insert(['id'=>44972, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Keramut']);
        DB::table('villages')->insert(['id'=>44973, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Landak']);
        DB::table('villages')->insert(['id'=>44974, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Letung']);
        DB::table('villages')->insert(['id'=>44975, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Mampok']);
        DB::table('villages')->insert(['id'=>44976, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Rewak']);
        DB::table('villages')->insert(['id'=>44977, 'districts_id'=>3955, 'zipcode'=>'29792', 'name'=>'Sunggak']);
        //Kecamatan Jemaja Timur Kab. Kepulauan Anambas Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3956, 'city_id'=>223, 'name'=>'Jemaja Timur']);
        DB::table('villages')->insert(['id'=>44978, 'districts_id'=>3956, 'zipcode'=>'29792', 'name'=>'Bukit Padi']);
        DB::table('villages')->insert(['id'=>44979, 'districts_id'=>3956, 'zipcode'=>'29792', 'name'=>'Genting Pulur']);
        DB::table('villages')->insert(['id'=>44980, 'districts_id'=>3956, 'zipcode'=>'29792', 'name'=>'Kuala Maras']);
        DB::table('villages')->insert(['id'=>44981, 'districts_id'=>3956, 'zipcode'=>'29792', 'name'=>'Ulu Maras']);

        //Kab. Lingga Provinsi Kepulauan Riau
        DB::table('cities')->insert(['id'=>224, 'province_id'=>17, 'type'=>'regencies', 'name'=>'Lingga']);
        //Kecamatan Singkep Kab. Lingga Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3957, 'city_id'=>224, 'name'=>'Singkep']);
        DB::table('villages')->insert(['id'=>44982, 'districts_id'=>3957, 'zipcode'=>'29871', 'name'=>'Batu Berdaun']);
        DB::table('villages')->insert(['id'=>44983, 'districts_id'=>3957, 'zipcode'=>'29871', 'name'=>'Batu Karang']);
        DB::table('villages')->insert(['id'=>44984, 'districts_id'=>3957, 'zipcode'=>'29871', 'name'=>'Berhala']);
        DB::table('villages')->insert(['id'=>44985, 'districts_id'=>3957, 'zipcode'=>'29871', 'name'=>'Dabo']);
        DB::table('villages')->insert(['id'=>44986, 'districts_id'=>3957, 'zipcode'=>'29871', 'name'=>'Dabo Lama']);
        DB::table('villages')->insert(['id'=>44987, 'districts_id'=>3957, 'zipcode'=>'29871', 'name'=>'Marok Kecil']);
        DB::table('villages')->insert(['id'=>44988, 'districts_id'=>3957, 'zipcode'=>'29871', 'name'=>'Sungai Lumpur']);
        DB::table('villages')->insert(['id'=>44989, 'districts_id'=>3957, 'zipcode'=>'29871', 'name'=>'Tanjung Harapan']);
        //Kecamatan Singkep Pesisir Kab. Lingga Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3958, 'city_id'=>224, 'name'=>'Singkep Pesisir']);
        DB::table('villages')->insert(['id'=>44990, 'districts_id'=>3958, 'zipcode'=>'29871', 'name'=>'Berindat']);
        DB::table('villages')->insert(['id'=>44991, 'districts_id'=>3958, 'zipcode'=>'29871', 'name'=>'Kota/kote']);
        DB::table('villages')->insert(['id'=>44992, 'districts_id'=>3958, 'zipcode'=>'29871', 'name'=>'Lanjut']);
        DB::table('villages')->insert(['id'=>44993, 'districts_id'=>3958, 'zipcode'=>'29871', 'name'=>'Pelakak']);
        DB::table('villages')->insert(['id'=>44994, 'districts_id'=>3958, 'zipcode'=>'29871', 'name'=>'Persing']);
        DB::table('villages')->insert(['id'=>44995, 'districts_id'=>3958, 'zipcode'=>'29871', 'name'=>'Sedamai']);
        //Kecamatan Lingga Timur Kab. Lingga Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3959, 'city_id'=>224, 'name'=>'Lingga Timur']);
        DB::table('villages')->insert(['id'=>44996, 'districts_id'=>3959, 'zipcode'=>'29872', 'name'=>'Bukit Langkap']);
        DB::table('villages')->insert(['id'=>44997, 'districts_id'=>3959, 'zipcode'=>'29872', 'name'=>'Kerandin']);
        DB::table('villages')->insert(['id'=>44998, 'districts_id'=>3959, 'zipcode'=>'29872', 'name'=>'Keton']);
        DB::table('villages')->insert(['id'=>44999, 'districts_id'=>3959, 'zipcode'=>'29872', 'name'=>'Kudung']);
        DB::table('villages')->insert(['id'=>45000, 'districts_id'=>3959, 'zipcode'=>'29872', 'name'=>'Pekaka']);
        DB::table('villages')->insert(['id'=>45001, 'districts_id'=>3959, 'zipcode'=>'29872', 'name'=>'Sei/sungai Pinang']);
        //Kecamatan Lingga Kab. Lingga Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3960, 'city_id'=>224, 'name'=>'Lingga']);
        DB::table('villages')->insert(['id'=>45002, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Daik']);
        DB::table('villages')->insert(['id'=>45003, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Kelombok']);
        DB::table('villages')->insert(['id'=>45004, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Kelumu']);
        DB::table('villages')->insert(['id'=>45005, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Mentuda']);
        DB::table('villages')->insert(['id'=>45006, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Mepar']);
        DB::table('villages')->insert(['id'=>45007, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Merawang']);
        DB::table('villages')->insert(['id'=>45008, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Musai']);
        DB::table('villages')->insert(['id'=>45009, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Nerekeh']);
        DB::table('villages')->insert(['id'=>45010, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Panggak Darat']);
        DB::table('villages')->insert(['id'=>45011, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Panggak Laut']);
        DB::table('villages')->insert(['id'=>45012, 'districts_id'=>3960, 'zipcode'=>'29872', 'name'=>'Pekajang']);
        //Kecamatan Selayar Kab. Lingga Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3961, 'city_id'=>224, 'name'=>'Selayar']);
        DB::table('villages')->insert(['id'=>45013, 'districts_id'=>3961, 'zipcode'=>'29872', 'name'=>'Pantai Harapan']);
        DB::table('villages')->insert(['id'=>45014, 'districts_id'=>3961, 'zipcode'=>'29872', 'name'=>'Penuba']);
        DB::table('villages')->insert(['id'=>45015, 'districts_id'=>3961, 'zipcode'=>'29872', 'name'=>'Penuba Timur']);
        DB::table('villages')->insert(['id'=>45016, 'districts_id'=>3961, 'zipcode'=>'29872', 'name'=>'Selayar']);
        //Kecamatan Senayang Kab. Lingga Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3962, 'city_id'=>224, 'name'=>'Senayang']);
        DB::table('villages')->insert(['id'=>45017, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Baran']);
        DB::table('villages')->insert(['id'=>45018, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Batu Belubang']);
        DB::table('villages')->insert(['id'=>45019, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Benan']);
        DB::table('villages')->insert(['id'=>45020, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Cempa']);
        DB::table('villages')->insert(['id'=>45021, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Labo']);
        DB::table('villages')->insert(['id'=>45022, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Mamut']);
        DB::table('villages')->insert(['id'=>45023, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Mensanak']);
        DB::table('villages')->insert(['id'=>45024, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Pasir Panjang']);
        DB::table('villages')->insert(['id'=>45025, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Penaah']);
        DB::table('villages')->insert(['id'=>45026, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Pulau Batang']);
        DB::table('villages')->insert(['id'=>45027, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Pulau Bukit']);
        DB::table('villages')->insert(['id'=>45028, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Pulau Duyung']);
        DB::table('villages')->insert(['id'=>45029, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Pulau Medang']);
        DB::table('villages')->insert(['id'=>45030, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Rejai']);
        DB::table('villages')->insert(['id'=>45031, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Senayang']);
        DB::table('villages')->insert(['id'=>45032, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Tajur Biru']);
        DB::table('villages')->insert(['id'=>45033, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Tanjung Kelit']);
        DB::table('villages')->insert(['id'=>45034, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Tanjung Lipat']);
        DB::table('villages')->insert(['id'=>45035, 'districts_id'=>3962, 'zipcode'=>'29873', 'name'=>'Temiang']);
        //Kecamatan Lingga Utara Kab. Lingga Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3963, 'city_id'=>224, 'name'=>'Lingga Utara']);
        DB::table('villages')->insert(['id'=>45036, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Belungkur']);
        DB::table('villages')->insert(['id'=>45037, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Bukit Harapan']);
        DB::table('villages')->insert(['id'=>45038, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Duara']);
        DB::table('villages')->insert(['id'=>45039, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Limbung']);
        DB::table('villages')->insert(['id'=>45040, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Linau']);
        DB::table('villages')->insert(['id'=>45041, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Pancur']);
        DB::table('villages')->insert(['id'=>45042, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Rantau Panjang']);
        DB::table('villages')->insert(['id'=>45043, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Resun']);
        DB::table('villages')->insert(['id'=>45044, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Resun Pesisir']);
        DB::table('villages')->insert(['id'=>45045, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Sekanah']);
        DB::table('villages')->insert(['id'=>45046, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Sungai Besar']);
        DB::table('villages')->insert(['id'=>45047, 'districts_id'=>3963, 'zipcode'=>'29874', 'name'=>'Teluk']);
        //Kecamatan Singkep Barat Kab. Lingga Provinsi Kepulauan Riau
        DB::table('districts')->insert(['id'=>3964, 'city_id'=>224, 'name'=>'Singkep Barat']);
        DB::table('villages')->insert(['id'=>45048, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Bakong']);
        DB::table('villages')->insert(['id'=>45049, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Bukit Belah']);
        DB::table('villages')->insert(['id'=>45050, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Busung Panjang']);
        DB::table('villages')->insert(['id'=>45051, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Jaqoh']);
        DB::table('villages')->insert(['id'=>45052, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Kuala Raya']);
        DB::table('villages')->insert(['id'=>45053, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Langkap']);
        DB::table('villages')->insert(['id'=>45054, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Marok Tua']);
        DB::table('villages')->insert(['id'=>45055, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Posek']);
        DB::table('villages')->insert(['id'=>45056, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Raya']);
        DB::table('villages')->insert(['id'=>45057, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Suak Buaya']);
        DB::table('villages')->insert(['id'=>45058, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Sungai Buluh']);
        DB::table('villages')->insert(['id'=>45059, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Sungai Harapan']);
        DB::table('villages')->insert(['id'=>45060, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Sungai Raya']);
        DB::table('villages')->insert(['id'=>45061, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Tanjung Irat']);
        DB::table('villages')->insert(['id'=>45062, 'districts_id'=>3964, 'zipcode'=>'29875', 'name'=>'Tinjul']);
    }
}
