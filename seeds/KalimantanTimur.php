<?php

use Illuminate\Database\Seeder;

class KalimantanTimur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>15, 'name'=>'Kalimantan Timur']);

        //Kota Samarinda Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>204, 'province_id'=>15, 'type'=>'city', 'name'=>'Samarinda']);
        //Kecamatan Samarinda Kota Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3749, 'city_id'=>204, 'name'=>'Samarinda Kota']);
        DB::table('villages')->insert(['id'=>43156, 'districts_id'=>3749, 'zipcode'=>'75111', 'name'=>'Pasar Pagi']);
        DB::table('villages')->insert(['id'=>43157, 'districts_id'=>3749, 'zipcode'=>'75112', 'name'=>'Pelabuhan']);
        DB::table('villages')->insert(['id'=>43158, 'districts_id'=>3749, 'zipcode'=>'75113', 'name'=>'Karang Mumus']);
        DB::table('villages')->insert(['id'=>43159, 'districts_id'=>3749, 'zipcode'=>'75117', 'name'=>'Sei/sungai Pinang Luar']);
        DB::table('villages')->insert(['id'=>43160, 'districts_id'=>3749, 'zipcode'=>'75121', 'name'=>'Bugis']);
        //Kecamatan Sambutan Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3750, 'city_id'=>204, 'name'=>'Sambutan']);
        DB::table('villages')->insert(['id'=>43161, 'districts_id'=>3750, 'zipcode'=>'75114', 'name'=>'Pulau Atas']);
        DB::table('villages')->insert(['id'=>43162, 'districts_id'=>3750, 'zipcode'=>'75114', 'name'=>'Sei/sungai Kapih']);
        DB::table('villages')->insert(['id'=>43163, 'districts_id'=>3750, 'zipcode'=>'75114', 'name'=>'Sindang Sari']);
        DB::table('villages')->insert(['id'=>43164, 'districts_id'=>3750, 'zipcode'=>'75115', 'name'=>'Makroman']);
        DB::table('villages')->insert(['id'=>43165, 'districts_id'=>3750, 'zipcode'=>'75115', 'name'=>'Sambutan']);
        //Kecamatan Samarinda Ilir Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3751, 'city_id'=>204, 'name'=>'Samarinda Ilir']);
        DB::table('villages')->insert(['id'=>43166, 'districts_id'=>3751, 'zipcode'=>'75114', 'name'=>'Selili']);
        DB::table('villages')->insert(['id'=>43167, 'districts_id'=>3751, 'zipcode'=>'75115', 'name'=>'Sei/sungai Dama']);
        DB::table('villages')->insert(['id'=>43168, 'districts_id'=>3751, 'zipcode'=>'75116', 'name'=>'Sidodamai']);
        DB::table('villages')->insert(['id'=>43169, 'districts_id'=>3751, 'zipcode'=>'75116', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>43170, 'districts_id'=>3751, 'zipcode'=>'75117', 'name'=>'Pelita']);
        //Kecamatan Sungai Pinang Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3752, 'city_id'=>204, 'name'=>'Sungai Pinang']);
        DB::table('villages')->insert(['id'=>43171, 'districts_id'=>3752, 'zipcode'=>'75117', 'name'=>'Sei/sungai Pinang Dalam']);
        DB::table('villages')->insert(['id'=>43172, 'districts_id'=>3752, 'zipcode'=>'75119', 'name'=>'Bandara']);
        DB::table('villages')->insert(['id'=>43173, 'districts_id'=>3752, 'zipcode'=>'75119', 'name'=>'Gunung Lingai']);
        DB::table('villages')->insert(['id'=>43174, 'districts_id'=>3752, 'zipcode'=>'75119', 'name'=>'Mugirejo']);
        DB::table('villages')->insert(['id'=>43175, 'districts_id'=>3752, 'zipcode'=>'75119', 'name'=>'Temindung Permai']);
        //Kecamatan Samarinda Utara Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3753, 'city_id'=>204, 'name'=>'Samarinda Utara']);
        DB::table('villages')->insert(['id'=>43176, 'districts_id'=>3753, 'zipcode'=>'75118', 'name'=>'Lempake']);
        DB::table('villages')->insert(['id'=>43177, 'districts_id'=>3753, 'zipcode'=>'75118', 'name'=>'Sei/sungai Siring']);
        DB::table('villages')->insert(['id'=>43178, 'districts_id'=>3753, 'zipcode'=>'75119', 'name'=>'Sempaja Selatan']);
        DB::table('villages')->insert(['id'=>43179, 'districts_id'=>3753, 'zipcode'=>'75119', 'name'=>'Sempaja Utara']);
        DB::table('villages')->insert(['id'=>43180, 'districts_id'=>3753, 'zipcode'=>'75119', 'name'=>'Tanah Merah']);
        //Kecamatan Samarinda Ulu Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3754, 'city_id'=>204, 'name'=>'Samarinda Ulu']);
        DB::table('villages')->insert(['id'=>43181, 'districts_id'=>3754, 'zipcode'=>'75122', 'name'=>'Jawa']);
        DB::table('villages')->insert(['id'=>43182, 'districts_id'=>3754, 'zipcode'=>'75123', 'name'=>'Dadi Mulya']);
        DB::table('villages')->insert(['id'=>43183, 'districts_id'=>3754, 'zipcode'=>'75123', 'name'=>'Gunung Kelua']);
        DB::table('villages')->insert(['id'=>43184, 'districts_id'=>3754, 'zipcode'=>'75124', 'name'=>'Air Hitam']);
        DB::table('villages')->insert(['id'=>43185, 'districts_id'=>3754, 'zipcode'=>'75124', 'name'=>'Air Putih']);
        DB::table('villages')->insert(['id'=>43186, 'districts_id'=>3754, 'zipcode'=>'75124', 'name'=>'Bukit Pinang']);
        DB::table('villages')->insert(['id'=>43187, 'districts_id'=>3754, 'zipcode'=>'75128', 'name'=>'Teluk Lerong Ilir']);
        DB::table('villages')->insert(['id'=>43188, 'districts_id'=>3754, 'zipcode'=>'77111', 'name'=>'Sidodadi']);
        //Kecamatan Sungai Kunjang Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3755, 'city_id'=>204, 'name'=>'Sungai Kunjang']);
        DB::table('villages')->insert(['id'=>43189, 'districts_id'=>3755, 'zipcode'=>'75125', 'name'=>'Karang Anyar']);
        DB::table('villages')->insert(['id'=>43190, 'districts_id'=>3755, 'zipcode'=>'75125', 'name'=>'Lok Bahu']);
        DB::table('villages')->insert(['id'=>43191, 'districts_id'=>3755, 'zipcode'=>'75126', 'name'=>'Karang Asam Ilir']);
        DB::table('villages')->insert(['id'=>43192, 'districts_id'=>3755, 'zipcode'=>'75126', 'name'=>'Karang Asam Ulu']);
        DB::table('villages')->insert(['id'=>43193, 'districts_id'=>3755, 'zipcode'=>'75126', 'name'=>'Loa Bakung']);
        DB::table('villages')->insert(['id'=>43194, 'districts_id'=>3755, 'zipcode'=>'75126', 'name'=>'Loa Buah']);
        DB::table('villages')->insert(['id'=>43195, 'districts_id'=>3755, 'zipcode'=>'75127', 'name'=>'Teluk Lerong Ulu']);
        //Kecamatan Samarinda Seberang Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3756, 'city_id'=>204, 'name'=>'Samarinda Seberang']);
        DB::table('villages')->insert(['id'=>43196, 'districts_id'=>3756, 'zipcode'=>'75131', 'name'=>'Baqa/baka/rapak Dalam']);
        DB::table('villages')->insert(['id'=>43197, 'districts_id'=>3756, 'zipcode'=>'75131', 'name'=>'Sei/sungai Keledang']);
        DB::table('villages')->insert(['id'=>43198, 'districts_id'=>3756, 'zipcode'=>'75133', 'name'=>'Mesjid']);
        //Kecamatan Loa Janan Ilir Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3757, 'city_id'=>204, 'name'=>'Loa Janan Ilir']);
        DB::table('villages')->insert(['id'=>43199, 'districts_id'=>3757, 'zipcode'=>'75131', 'name'=>'Harapan Baru']);
        DB::table('villages')->insert(['id'=>43200, 'districts_id'=>3757, 'zipcode'=>'75131', 'name'=>'Rapak Dalam']);
        DB::table('villages')->insert(['id'=>43201, 'districts_id'=>3757, 'zipcode'=>'75131', 'name'=>'Sengkotek']);
        DB::table('villages')->insert(['id'=>43202, 'districts_id'=>3757, 'zipcode'=>'75131', 'name'=>'Simpang Tiga (loa Janan Ilir)']);
        DB::table('villages')->insert(['id'=>43203, 'districts_id'=>3757, 'zipcode'=>'75131', 'name'=>'Tani Aman']);
        //Kecamatan Palaran Kota Samarinda Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3758, 'city_id'=>204, 'name'=>'Palaran']);
        DB::table('villages')->insert(['id'=>43204, 'districts_id'=>3758, 'zipcode'=>'75241', 'name'=>'Bukuan']);
        DB::table('villages')->insert(['id'=>43205, 'districts_id'=>3758, 'zipcode'=>'75242', 'name'=>'Handil Bakti']);
        DB::table('villages')->insert(['id'=>43206, 'districts_id'=>3758, 'zipcode'=>'75243', 'name'=>'Rawa Makmur']);
        DB::table('villages')->insert(['id'=>43207, 'districts_id'=>3758, 'zipcode'=>'75243', 'name'=>'Simpang Pasir']);
        DB::table('villages')->insert(['id'=>43208, 'districts_id'=>3758, 'zipcode'=>'75253', 'name'=>'Bantuas']);

        //Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>205, 'province_id'=>15, 'type'=>'regencies', 'name'=>'Kutai Kartanegara']);
        //Kecamatan Sanga-sanga Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3759, 'city_id'=>205, 'name'=>'Sanga-sanga']);
        DB::table('villages')->insert(['id'=>43209, 'districts_id'=>3759, 'zipcode'=>'75251', 'name'=>'Jawa']);
        DB::table('villages')->insert(['id'=>43210, 'districts_id'=>3759, 'zipcode'=>'75251', 'name'=>'Sanga-sanga Muara']);
        DB::table('villages')->insert(['id'=>43211, 'districts_id'=>3759, 'zipcode'=>'75251', 'name'=>'Sarijaya']);
        DB::table('villages')->insert(['id'=>43212, 'districts_id'=>3759, 'zipcode'=>'75254', 'name'=>'Sanga-sanga Dalam']);
        DB::table('villages')->insert(['id'=>43213, 'districts_id'=>3759, 'zipcode'=>'75256', 'name'=>'Pendingin']);
        //Kecamatan Muara Jawa Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3760, 'city_id'=>205, 'name'=>'Muara Jawa']);
        DB::table('villages')->insert(['id'=>43214, 'districts_id'=>3760, 'zipcode'=>'75261', 'name'=>'Muara Jawa Ulu']);
        DB::table('villages')->insert(['id'=>43215, 'districts_id'=>3760, 'zipcode'=>'75262', 'name'=>'Teluk Dalam']);
        DB::table('villages')->insert(['id'=>43216, 'districts_id'=>3760, 'zipcode'=>'75263', 'name'=>'Muara Jawa Ilir']);
        DB::table('villages')->insert(['id'=>43217, 'districts_id'=>3760, 'zipcode'=>'75263', 'name'=>'Muara Jawa Pesisir']);
        DB::table('villages')->insert(['id'=>43218, 'districts_id'=>3760, 'zipcode'=>'75264', 'name'=>'Muara Jawa Tengah']);
        DB::table('villages')->insert(['id'=>43219, 'districts_id'=>3760, 'zipcode'=>'75265', 'name'=>'Dondang']);
        DB::table('villages')->insert(['id'=>43220, 'districts_id'=>3760, 'zipcode'=>'75266', 'name'=>'Tamapole']);
        DB::table('villages')->insert(['id'=>43221, 'districts_id'=>3760, 'zipcode'=>'75267', 'name'=>'Muara Kembang']);
        //Kecamatan Samboja (semboja) Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3761, 'city_id'=>205, 'name'=>'Samboja (semboja)']);
        DB::table('villages')->insert(['id'=>43222, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Argosari']);
        DB::table('villages')->insert(['id'=>43223, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Beringin Agung']);
        DB::table('villages')->insert(['id'=>43224, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Bukit Merdeka']);
        DB::table('villages')->insert(['id'=>43225, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Bukit Raya']);
        DB::table('villages')->insert(['id'=>43226, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Karya Jaya']);
        DB::table('villages')->insert(['id'=>43227, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Karya Merdeka']);
        DB::table('villages')->insert(['id'=>43228, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Salok Api Darat']);
        DB::table('villages')->insert(['id'=>43229, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Salok Api Laut']);
        DB::table('villages')->insert(['id'=>43230, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Sanipah']);
        DB::table('villages')->insert(['id'=>43231, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Sei/sungai Merdeka']);
        DB::table('villages')->insert(['id'=>43232, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Sei/sungai Seluang']);
        DB::table('villages')->insert(['id'=>43233, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Tani Bakti']);
        DB::table('villages')->insert(['id'=>43234, 'districts_id'=>3761, 'zipcode'=>'75271', 'name'=>'Teluk Pemedas']);
        DB::table('villages')->insert(['id'=>43235, 'districts_id'=>3761, 'zipcode'=>'75273', 'name'=>'Margomulyo']);
        DB::table('villages')->insert(['id'=>43236, 'districts_id'=>3761, 'zipcode'=>'75274', 'name'=>'Ambarawang Darat']);
        DB::table('villages')->insert(['id'=>43237, 'districts_id'=>3761, 'zipcode'=>'75274', 'name'=>'Ambarawang Laut']);
        DB::table('villages')->insert(['id'=>43238, 'districts_id'=>3761, 'zipcode'=>'75276', 'name'=>'Handil Baru Darat']);
        DB::table('villages')->insert(['id'=>43239, 'districts_id'=>3761, 'zipcode'=>'75276', 'name'=>'Kampung Lama']);
        DB::table('villages')->insert(['id'=>43240, 'districts_id'=>3761, 'zipcode'=>'75276', 'name'=>'Tanjung Harapan']);
        DB::table('villages')->insert(['id'=>43241, 'districts_id'=>3761, 'zipcode'=>'75276', 'name'=>'Wonotirto']);
        DB::table('villages')->insert(['id'=>43242, 'districts_id'=>3761, 'zipcode'=>'75277', 'name'=>'Samboja Kuala']);
        DB::table('villages')->insert(['id'=>43243, 'districts_id'=>3761, 'zipcode'=>'75279', 'name'=>'Handil Baru']);
        DB::table('villages')->insert(['id'=>43244, 'districts_id'=>3761, 'zipcode'=>'75279', 'name'=>'Muara Sembilang']);
        //Kecamatan Anggana Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3762, 'city_id'=>205, 'name'=>'Anggana']);
        DB::table('villages')->insert(['id'=>43245, 'districts_id'=>3762, 'zipcode'=>'75381', 'name'=>'Anggana']);
        DB::table('villages')->insert(['id'=>43246, 'districts_id'=>3762, 'zipcode'=>'75381', 'name'=>'Handil Terusan']);
        DB::table('villages')->insert(['id'=>43247, 'districts_id'=>3762, 'zipcode'=>'75381', 'name'=>'Kutai Lama']);
        DB::table('villages')->insert(['id'=>43248, 'districts_id'=>3762, 'zipcode'=>'75381', 'name'=>'Muara Pantuan']);
        DB::table('villages')->insert(['id'=>43249, 'districts_id'=>3762, 'zipcode'=>'75381', 'name'=>'Sei/sungai Meriam']);
        DB::table('villages')->insert(['id'=>43250, 'districts_id'=>3762, 'zipcode'=>'75381', 'name'=>'Sepatin']);
        DB::table('villages')->insert(['id'=>43251, 'districts_id'=>3762, 'zipcode'=>'75381', 'name'=>'Tani Baru']);
        DB::table('villages')->insert(['id'=>43252, 'districts_id'=>3762, 'zipcode'=>'76131', 'name'=>'Sidomulyo']);
        //Kecamatan Muara Badak Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3763, 'city_id'=>205, 'name'=>'Muara Badak']);
        DB::table('villages')->insert(['id'=>43253, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Badak Baru']);
        DB::table('villages')->insert(['id'=>43254, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Badak Mekar']);
        DB::table('villages')->insert(['id'=>43255, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Batu Batu']);
        DB::table('villages')->insert(['id'=>43256, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Gas Alam Badak I']);
        DB::table('villages')->insert(['id'=>43257, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Muara Badak Ilir']);
        DB::table('villages')->insert(['id'=>43258, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Muara Badak Ulu']);
        DB::table('villages')->insert(['id'=>43259, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Salo Cella']);
        DB::table('villages')->insert(['id'=>43260, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Salo Palai']);
        DB::table('villages')->insert(['id'=>43261, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Sei/sungai Bawang']);
        DB::table('villages')->insert(['id'=>43262, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Seliki']);
        DB::table('villages')->insert(['id'=>43263, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>43264, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Tanah Datar']);
        DB::table('villages')->insert(['id'=>43265, 'districts_id'=>3763, 'zipcode'=>'75382', 'name'=>'Tanjung Limau']);
        //Kecamatan Marang Kayu Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3764, 'city_id'=>205, 'name'=>'Marang Kayu']);
        DB::table('villages')->insert(['id'=>43266, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Bunga Putih']);
        DB::table('villages')->insert(['id'=>43267, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Kersik']);
        DB::table('villages')->insert(['id'=>43268, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Makarti']);
        DB::table('villages')->insert(['id'=>43269, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Perangat Baru']);
        DB::table('villages')->insert(['id'=>43270, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Perangat Selatan']);
        DB::table('villages')->insert(['id'=>43271, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Sambera Baru']);
        DB::table('villages')->insert(['id'=>43272, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Santan Ilir']);
        DB::table('villages')->insert(['id'=>43273, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Santan Tengah']);
        DB::table('villages')->insert(['id'=>43274, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Santan Ulu']);
        DB::table('villages')->insert(['id'=>43275, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Sebuntal']);
        DB::table('villages')->insert(['id'=>43276, 'districts_id'=>3764, 'zipcode'=>'75385', 'name'=>'Semangkok']);
        //Kecamatan Loa Janan Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3765, 'city_id'=>205, 'name'=>'Loa Janan']);
        DB::table('villages')->insert(['id'=>43277, 'districts_id'=>3765, 'zipcode'=>'75391', 'name'=>'Bakungan']);
        DB::table('villages')->insert(['id'=>43278, 'districts_id'=>3765, 'zipcode'=>'75391', 'name'=>'Batuah']);
        DB::table('villages')->insert(['id'=>43279, 'districts_id'=>3765, 'zipcode'=>'75391', 'name'=>'Loa Duri Ilir']);
        DB::table('villages')->insert(['id'=>43280, 'districts_id'=>3765, 'zipcode'=>'75391', 'name'=>'Loa Duri Ulu']);
        DB::table('villages')->insert(['id'=>43281, 'districts_id'=>3765, 'zipcode'=>'75391', 'name'=>'Loa Janan Ulu']);
        DB::table('villages')->insert(['id'=>43282, 'districts_id'=>3765, 'zipcode'=>'75391', 'name'=>'Purwajaya']);
        DB::table('villages')->insert(['id'=>43283, 'districts_id'=>3765, 'zipcode'=>'75391', 'name'=>'Tani Bakti']);
        DB::table('villages')->insert(['id'=>43284, 'districts_id'=>3765, 'zipcode'=>'75391', 'name'=>'Tani Harapan']);
        //Kecamatan Tenggarong Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3766, 'city_id'=>205, 'name'=>'Tenggarong']);
        DB::table('villages')->insert(['id'=>43285, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Baru (kampung Baru)']);
        DB::table('villages')->insert(['id'=>43286, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Bendang Raya']);
        DB::table('villages')->insert(['id'=>43287, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Bukit Biru']);
        DB::table('villages')->insert(['id'=>43288, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Jahab']);
        DB::table('villages')->insert(['id'=>43289, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Loa Ipuh Darat']);
        DB::table('villages')->insert(['id'=>43290, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Loa Tebu']);
        DB::table('villages')->insert(['id'=>43291, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Maluhu']);
        DB::table('villages')->insert(['id'=>43292, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Rapak Lambur']);
        DB::table('villages')->insert(['id'=>43293, 'districts_id'=>3766, 'zipcode'=>'75511', 'name'=>'Timbau']);
        DB::table('villages')->insert(['id'=>43294, 'districts_id'=>3766, 'zipcode'=>'75512', 'name'=>'Melayu']);
        DB::table('villages')->insert(['id'=>43295, 'districts_id'=>3766, 'zipcode'=>'75513', 'name'=>'Loa Ipuh']);
        DB::table('villages')->insert(['id'=>43296, 'districts_id'=>3766, 'zipcode'=>'75514', 'name'=>'Panji']);
        DB::table('villages')->insert(['id'=>43297, 'districts_id'=>3766, 'zipcode'=>'75515', 'name'=>'Sukarame']);
        DB::table('villages')->insert(['id'=>43298, 'districts_id'=>3766, 'zipcode'=>'75517', 'name'=>'Mangkurawang']);
        //Kecamatan Sebulu Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3767, 'city_id'=>205, 'name'=>'Sebulu']);
        DB::table('villages')->insert(['id'=>43299, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Beloro']);
        DB::table('villages')->insert(['id'=>43300, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Budaya Lekaq Kidau']);
        DB::table('villages')->insert(['id'=>43301, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Giri Agung']);
        DB::table('villages')->insert(['id'=>43302, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Manunggal Daya']);
        DB::table('villages')->insert(['id'=>43303, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Mekar Jaya']);
        DB::table('villages')->insert(['id'=>43304, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Sanggulan']);
        DB::table('villages')->insert(['id'=>43305, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Sebulu Ilir']);
        DB::table('villages')->insert(['id'=>43306, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Sebulu Modern']);
        DB::table('villages')->insert(['id'=>43307, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Sebulu Ulu']);
        DB::table('villages')->insert(['id'=>43308, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Segihan']);
        DB::table('villages')->insert(['id'=>43309, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Selerong']);
        DB::table('villages')->insert(['id'=>43310, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Senoni']);
        DB::table('villages')->insert(['id'=>43311, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Sumber Sari']);
        DB::table('villages')->insert(['id'=>43312, 'districts_id'=>3767, 'zipcode'=>'75552', 'name'=>'Tanjung Harapan']);
        //Kecamatan Muara Kaman Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3768, 'city_id'=>205, 'name'=>'Muara Kaman']);
        DB::table('villages')->insert(['id'=>43313, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Benua Puhun']);
        DB::table('villages')->insert(['id'=>43314, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Bukit Jering']);
        DB::table('villages')->insert(['id'=>43315, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Bunga Jadi']);
        DB::table('villages')->insert(['id'=>43316, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Cipari Makmur']);
        DB::table('villages')->insert(['id'=>43317, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Kupang Baru']);
        DB::table('villages')->insert(['id'=>43318, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Lebaho Ulaq']);
        DB::table('villages')->insert(['id'=>43319, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Liang Buaya']);
        DB::table('villages')->insert(['id'=>43320, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Menamang Kanan']);
        DB::table('villages')->insert(['id'=>43321, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Menamang Kiri']);
        DB::table('villages')->insert(['id'=>43322, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Muara Kaman Ilir']);
        DB::table('villages')->insert(['id'=>43323, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Muara Kaman Ulu']);
        DB::table('villages')->insert(['id'=>43324, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Muara Siran']);
        DB::table('villages')->insert(['id'=>43325, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Panca Jaya']);
        DB::table('villages')->insert(['id'=>43326, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Puan Cepak']);
        DB::table('villages')->insert(['id'=>43327, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Rantau Hempang']);
        DB::table('villages')->insert(['id'=>43328, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Sabintulung']);
        DB::table('villages')->insert(['id'=>43329, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Sedulang']);
        DB::table('villages')->insert(['id'=>43330, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Sido Mukti']);
        DB::table('villages')->insert(['id'=>43331, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Teratak']);
        DB::table('villages')->insert(['id'=>43332, 'districts_id'=>3768, 'zipcode'=>'75553', 'name'=>'Tunjungan']);
        //Kecamatan Kembang Janggut Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3769, 'city_id'=>205, 'name'=>'Kembang Janggut']);
        DB::table('villages')->insert(['id'=>43333, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Bukit Layang']);
        DB::table('villages')->insert(['id'=>43334, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Genting Tanah']);
        DB::table('villages')->insert(['id'=>43335, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Hambau']);
        DB::table('villages')->insert(['id'=>43336, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Kelekat']);
        DB::table('villages')->insert(['id'=>43337, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Kembang Janggut']);
        DB::table('villages')->insert(['id'=>43338, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Loa Sakoh']);
        DB::table('villages')->insert(['id'=>43339, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Long Beleh Haloq']);
        DB::table('villages')->insert(['id'=>43340, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Long Beleh Modang']);
        DB::table('villages')->insert(['id'=>43341, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Muai']);
        DB::table('villages')->insert(['id'=>43342, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Perdana']);
        DB::table('villages')->insert(['id'=>43343, 'districts_id'=>3769, 'zipcode'=>'75557', 'name'=>'Pulau Pinang']);
        //Kecamatan Tabang Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3770, 'city_id'=>205, 'name'=>'Tabang']);
        DB::table('villages')->insert(['id'=>43344, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Bila Talang']);
        DB::table('villages')->insert(['id'=>43345, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Buluk Sen']);
        DB::table('villages')->insert(['id'=>43346, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Gunung Sari']);
        DB::table('villages')->insert(['id'=>43347, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>43348, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Long Lalang']);
        DB::table('villages')->insert(['id'=>43349, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Muara Belinau']);
        DB::table('villages')->insert(['id'=>43350, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Muara Kebaq']);
        DB::table('villages')->insert(['id'=>43351, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Muara Pedohon']);
        DB::table('villages')->insert(['id'=>43352, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Muara Ritan']);
        DB::table('villages')->insert(['id'=>43353, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Muara Salung']);
        DB::table('villages')->insert(['id'=>43354, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Muara Tiq']);
        DB::table('villages')->insert(['id'=>43355, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Muara Tuboq']);
        DB::table('villages')->insert(['id'=>43356, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Ritan Baru']);
        DB::table('villages')->insert(['id'=>43357, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>43358, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Tabang Lama']);
        DB::table('villages')->insert(['id'=>43359, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Tukung Ritan']);
        DB::table('villages')->insert(['id'=>43360, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Umaq Bekuay/bekuai']);
        DB::table('villages')->insert(['id'=>43361, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Umaq Dian']);
        DB::table('villages')->insert(['id'=>43362, 'districts_id'=>3770, 'zipcode'=>'75558', 'name'=>'Umaq Tukung']);
        //Kecamatan Muara Wis Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3771, 'city_id'=>205, 'name'=>'Muara Wis']);
        DB::table('villages')->insert(['id'=>43363, 'districts_id'=>3771, 'zipcode'=>'75559', 'name'=>'Enggelam']);
        DB::table('villages')->insert(['id'=>43364, 'districts_id'=>3771, 'zipcode'=>'75559', 'name'=>'Lebak Cilong']);
        DB::table('villages')->insert(['id'=>43365, 'districts_id'=>3771, 'zipcode'=>'75559', 'name'=>'Lebak Mantan']);
        DB::table('villages')->insert(['id'=>43366, 'districts_id'=>3771, 'zipcode'=>'75559', 'name'=>'Melintang']);
        DB::table('villages')->insert(['id'=>43367, 'districts_id'=>3771, 'zipcode'=>'75559', 'name'=>'Muara Enggelam']);
        DB::table('villages')->insert(['id'=>43368, 'districts_id'=>3771, 'zipcode'=>'75559', 'name'=>'Muara Wis']);
        DB::table('villages')->insert(['id'=>43369, 'districts_id'=>3771, 'zipcode'=>'75559', 'name'=>'Sebemban']);
        //Kecamatan Kota Bangun Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3772, 'city_id'=>205, 'name'=>'Kota Bangun']);
        DB::table('villages')->insert(['id'=>43370, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Benua Baru']);
        DB::table('villages')->insert(['id'=>43371, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Kedang Ipil']);
        DB::table('villages')->insert(['id'=>43372, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Kedang Murung']);
        DB::table('villages')->insert(['id'=>43373, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Kota Bangun I (1)']);
        DB::table('villages')->insert(['id'=>43374, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Kota Bangun Ii (2)']);
        DB::table('villages')->insert(['id'=>43375, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Kota Bangun Iii (3)']);
        DB::table('villages')->insert(['id'=>43376, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Kota Bangun Ilir']);
        DB::table('villages')->insert(['id'=>43377, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Kota Bangun Seberang']);
        DB::table('villages')->insert(['id'=>43378, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Kota Bangun Ulu']);
        DB::table('villages')->insert(['id'=>43379, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Liang Ilir']);
        DB::table('villages')->insert(['id'=>43380, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Liang Ulu']);
        DB::table('villages')->insert(['id'=>43381, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Loleng']);
        DB::table('villages')->insert(['id'=>43382, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Muhuran']);
        DB::table('villages')->insert(['id'=>43383, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Pela']);
        DB::table('villages')->insert(['id'=>43384, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Sangkuliman']);
        DB::table('villages')->insert(['id'=>43385, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Sarinadi']);
        DB::table('villages')->insert(['id'=>43386, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Sebelimbingan']);
        DB::table('villages')->insert(['id'=>43387, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Sedulang']);
        DB::table('villages')->insert(['id'=>43388, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Sukabumi']);
        DB::table('villages')->insert(['id'=>43389, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Sumber Sari']);
        DB::table('villages')->insert(['id'=>43390, 'districts_id'=>3772, 'zipcode'=>'75561', 'name'=>'Wonosari']);
        //Kecamatan Muara Muntai Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3773, 'city_id'=>205, 'name'=>'Muara Muntai']);
        DB::table('villages')->insert(['id'=>43391, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Batuq']);
        DB::table('villages')->insert(['id'=>43392, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Jantur']);
        DB::table('villages')->insert(['id'=>43393, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Jantur Baru']);
        DB::table('villages')->insert(['id'=>43394, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Jantur Selatan']);
        DB::table('villages')->insert(['id'=>43395, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Kayu Batu']);
        DB::table('villages')->insert(['id'=>43396, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Muara Aloh']);
        DB::table('villages')->insert(['id'=>43397, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Muara Leka']);
        DB::table('villages')->insert(['id'=>43398, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Muara Muntai Ilir']);
        DB::table('villages')->insert(['id'=>43399, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Muara Muntai Ulu']);
        DB::table('villages')->insert(['id'=>43400, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Perian']);
        DB::table('villages')->insert(['id'=>43401, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Pulau Harapan']);
        DB::table('villages')->insert(['id'=>43402, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Rebaq Rinding']);
        DB::table('villages')->insert(['id'=>43403, 'districts_id'=>3773, 'zipcode'=>'75562', 'name'=>'Tanjung Batuq Harapan']);
        //Kecamatan Kenohan Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3774, 'city_id'=>205, 'name'=>'Kenohan']);
        DB::table('villages')->insert(['id'=>43404, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Kahala']);
        DB::table('villages')->insert(['id'=>43405, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Kahala Ilir']);
        DB::table('villages')->insert(['id'=>43406, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Lamin Pulut']);
        DB::table('villages')->insert(['id'=>43407, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Lamin Telihan']);
        DB::table('villages')->insert(['id'=>43408, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Semayang']);
        DB::table('villages')->insert(['id'=>43409, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Teluk Bingkai']);
        DB::table('villages')->insert(['id'=>43410, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Teluk Muda']);
        DB::table('villages')->insert(['id'=>43411, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Tuana Tuha']);
        DB::table('villages')->insert(['id'=>43412, 'districts_id'=>3774, 'zipcode'=>'75564', 'name'=>'Tubuhan']);
        //Kecamatan Loa Kulu Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3775, 'city_id'=>205, 'name'=>'Loa Kulu']);
        DB::table('villages')->insert(['id'=>43413, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Jembayan']);
        DB::table('villages')->insert(['id'=>43414, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Jembayan Dalam']);
        DB::table('villages')->insert(['id'=>43415, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Jembayan Tengah']);
        DB::table('villages')->insert(['id'=>43416, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Jonggon']);
        DB::table('villages')->insert(['id'=>43417, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Jongkang']);
        DB::table('villages')->insert(['id'=>43418, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Karya Utama']);
        DB::table('villages')->insert(['id'=>43419, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Loa Kulu Kota']);
        DB::table('villages')->insert(['id'=>43420, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Loh Sumber']);
        DB::table('villages')->insert(['id'=>43421, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Lung Anai']);
        DB::table('villages')->insert(['id'=>43422, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Margahayu (marga Rahayu)']);
        DB::table('villages')->insert(['id'=>43423, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Ponoragan']);
        DB::table('villages')->insert(['id'=>43424, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Rempanga']);
        DB::table('villages')->insert(['id'=>43425, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Sei/sungai Payang']);
        DB::table('villages')->insert(['id'=>43426, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Sepakat']);
        DB::table('villages')->insert(['id'=>43427, 'districts_id'=>3775, 'zipcode'=>'75571', 'name'=>'Sumber Sari']);
        //Kecamatan Tenggarong Seberang Kab. Kutai Kartanegara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3776, 'city_id'=>205, 'name'=>'Tenggarong Seberang']);
        DB::table('villages')->insert(['id'=>43428, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Bangun Rejo']);
        DB::table('villages')->insert(['id'=>43429, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Buana Jaya']);
        DB::table('villages')->insert(['id'=>43430, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Bukit Pariaman']);
        DB::table('villages')->insert(['id'=>43431, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Bukit Raya']);
        DB::table('villages')->insert(['id'=>43432, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Embalut']);
        DB::table('villages')->insert(['id'=>43433, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Karang Tunggal']);
        DB::table('villages')->insert(['id'=>43434, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Kerta Buana']);
        DB::table('villages')->insert(['id'=>43435, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Loa Lepu']);
        DB::table('villages')->insert(['id'=>43436, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Loa Pari']);
        DB::table('villages')->insert(['id'=>43437, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Loa Raya']);
        DB::table('villages')->insert(['id'=>43438, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Loa Ulung']);
        DB::table('villages')->insert(['id'=>43439, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Manunggal Jaya']);
        DB::table('villages')->insert(['id'=>43440, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Mulawarman']);
        DB::table('villages')->insert(['id'=>43441, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Perjiwa']);
        DB::table('villages')->insert(['id'=>43442, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Separi']);
        DB::table('villages')->insert(['id'=>43443, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Sukamaju']);
        DB::table('villages')->insert(['id'=>43444, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Tanjung Batu']);
        DB::table('villages')->insert(['id'=>43445, 'districts_id'=>3776, 'zipcode'=>'75572', 'name'=>'Teluk Dalam']);

        //Kota Bontang Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>206, 'province_id'=>15, 'type'=>'city', 'name'=>'Bontang']);
        //Kecamatan Bontang Utara Kota Bontang Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3777, 'city_id'=>206, 'name'=>'Bontang Utara']);
        DB::table('villages')->insert(['id'=>43446, 'districts_id'=>3777, 'zipcode'=>'75311', 'name'=>'Api-api']);
        DB::table('villages')->insert(['id'=>43447, 'districts_id'=>3777, 'zipcode'=>'75311', 'name'=>'Bontang Baru']);
        DB::table('villages')->insert(['id'=>43448, 'districts_id'=>3777, 'zipcode'=>'75311', 'name'=>'Gunung Elai']);
        DB::table('villages')->insert(['id'=>43449, 'districts_id'=>3777, 'zipcode'=>'75312', 'name'=>'Bontang Kuala']);
        DB::table('villages')->insert(['id'=>43450, 'districts_id'=>3777, 'zipcode'=>'75314', 'name'=>'Guntung']);
        DB::table('villages')->insert(['id'=>43451, 'districts_id'=>3777, 'zipcode'=>'75314', 'name'=>'Loktuan (lok Tuan)']);
        //Kecamatan Bontang Barat Kota Bontang Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3778, 'city_id'=>206, 'name'=>'Bontang Barat']);
        DB::table('villages')->insert(['id'=>43452, 'districts_id'=>3778, 'zipcode'=>'75313', 'name'=>'Belimbing']);
        DB::table('villages')->insert(['id'=>43453, 'districts_id'=>3778, 'zipcode'=>'75383', 'name'=>'Kanaan']);
        DB::table('villages')->insert(['id'=>43454, 'districts_id'=>3778, 'zipcode'=>'75383', 'name'=>'Telihan (gunung Telihan)']);
        //Kecamatan Bontang Selatan Kota Bontang Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3779, 'city_id'=>206, 'name'=>'Bontang Selatan']);
        DB::table('villages')->insert(['id'=>43455, 'districts_id'=>3779, 'zipcode'=>'75321', 'name'=>'Tanjung Laut']);
        DB::table('villages')->insert(['id'=>43456, 'districts_id'=>3779, 'zipcode'=>'75324', 'name'=>'Satimpo']);
        DB::table('villages')->insert(['id'=>43457, 'districts_id'=>3779, 'zipcode'=>'75325', 'name'=>'Berebas Pantai (berbas Pantai)']);
        DB::table('villages')->insert(['id'=>43458, 'districts_id'=>3779, 'zipcode'=>'75325', 'name'=>'Berebas Tengah (berbas Tengah)']);
        DB::table('villages')->insert(['id'=>43459, 'districts_id'=>3779, 'zipcode'=>'75325', 'name'=>'Bontang Lestari']);
        DB::table('villages')->insert(['id'=>43460, 'districts_id'=>3779, 'zipcode'=>'75325', 'name'=>'Tanjung Laut Indah']);

        //Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>207, 'province_id'=>15, 'type'=>'regencies', 'name'=>'Kutai Timur']);
        //Kecamatan Telen Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3780, 'city_id'=>207, 'name'=>'Telen']);
        DB::table('villages')->insert(['id'=>43461, 'districts_id'=>3780, 'zipcode'=>'75555', 'name'=>'Juk Ayak']);
        DB::table('villages')->insert(['id'=>43462, 'districts_id'=>3780, 'zipcode'=>'75555', 'name'=>'Long Noran']);
        DB::table('villages')->insert(['id'=>43463, 'districts_id'=>3780, 'zipcode'=>'75555', 'name'=>'Long Segar']);
        DB::table('villages')->insert(['id'=>43464, 'districts_id'=>3780, 'zipcode'=>'75555', 'name'=>'Marah Haloq']);
        DB::table('villages')->insert(['id'=>43465, 'districts_id'=>3780, 'zipcode'=>'75555', 'name'=>'Marah Kenyah (long Melah)']);
        DB::table('villages')->insert(['id'=>43466, 'districts_id'=>3780, 'zipcode'=>'75555', 'name'=>'Muara Pantun']);
        DB::table('villages')->insert(['id'=>43467, 'districts_id'=>3780, 'zipcode'=>'75555', 'name'=>'Rantau Panjang']);
        //Kecamatan Kongbeng Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3781, 'city_id'=>207, 'name'=>'Kongbeng']);
        DB::table('villages')->insert(['id'=>43468, 'districts_id'=>3781, 'zipcode'=>'75555', 'name'=>'Kongbeng Indah']);
        DB::table('villages')->insert(['id'=>43469, 'districts_id'=>3781, 'zipcode'=>'75555', 'name'=>'Makmur Jaya']);
        DB::table('villages')->insert(['id'=>43470, 'districts_id'=>3781, 'zipcode'=>'75555', 'name'=>'Marga Mulia']);
        DB::table('villages')->insert(['id'=>43471, 'districts_id'=>3781, 'zipcode'=>'75555', 'name'=>'Miau Baru']);
        DB::table('villages')->insert(['id'=>43472, 'districts_id'=>3781, 'zipcode'=>'75555', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>43473, 'districts_id'=>3781, 'zipcode'=>'75555', 'name'=>'Sri Pantun']);
        DB::table('villages')->insert(['id'=>43474, 'districts_id'=>3781, 'zipcode'=>'75555', 'name'=>'Suka Maju']);
        //Kecamatan Muara Ancalong Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3782, 'city_id'=>207, 'name'=>'Muara Ancalong']);
        DB::table('villages')->insert(['id'=>43475, 'districts_id'=>3782, 'zipcode'=>'75556', 'name'=>'Kelinjau Ulu']);
        DB::table('villages')->insert(['id'=>43476, 'districts_id'=>3782, 'zipcode'=>'75656', 'name'=>'Gemar Baru']);
        DB::table('villages')->insert(['id'=>43477, 'districts_id'=>3782, 'zipcode'=>'75656', 'name'=>'Kelinjau Ilir']);
        DB::table('villages')->insert(['id'=>43478, 'districts_id'=>3782, 'zipcode'=>'75656', 'name'=>'Long Faq/poq Baru']);
        DB::table('villages')->insert(['id'=>43479, 'districts_id'=>3782, 'zipcode'=>'75656', 'name'=>'Long Nah']);
        DB::table('villages')->insert(['id'=>43480, 'districts_id'=>3782, 'zipcode'=>'75656', 'name'=>'Long Tesak']);
        DB::table('villages')->insert(['id'=>43481, 'districts_id'=>3782, 'zipcode'=>'75656', 'name'=>'Muara Dun']);
        DB::table('villages')->insert(['id'=>43482, 'districts_id'=>3782, 'zipcode'=>'75656', 'name'=>'Senyiur']);
        //Kecamatan Busang Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3783, 'city_id'=>207, 'name'=>'Busang']);
        DB::table('villages')->insert(['id'=>43483, 'districts_id'=>3783, 'zipcode'=>'75556', 'name'=>'Long Bentuk']);
        DB::table('villages')->insert(['id'=>43484, 'districts_id'=>3783, 'zipcode'=>'75556', 'name'=>'Long Lees']);
        DB::table('villages')->insert(['id'=>43485, 'districts_id'=>3783, 'zipcode'=>'75556', 'name'=>'Long Nyelong']);
        DB::table('villages')->insert(['id'=>43486, 'districts_id'=>3783, 'zipcode'=>'75556', 'name'=>'Long Pejeng']);
        DB::table('villages')->insert(['id'=>43487, 'districts_id'=>3783, 'zipcode'=>'75556', 'name'=>'Mekar Baru']);
        DB::table('villages')->insert(['id'=>43488, 'districts_id'=>3783, 'zipcode'=>'75556', 'name'=>'Rantau Sentosa']);
        //Kecamatan Kaliorang Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3784, 'city_id'=>207, 'name'=>'Kaliorang']);
        DB::table('villages')->insert(['id'=>43489, 'districts_id'=>3784, 'zipcode'=>'75618', 'name'=>'Bangun Jaya']);
        DB::table('villages')->insert(['id'=>43490, 'districts_id'=>3784, 'zipcode'=>'75618', 'name'=>'Bukit Harapan']);
        DB::table('villages')->insert(['id'=>43491, 'districts_id'=>3784, 'zipcode'=>'75618', 'name'=>'Bukit Makmur']);
        DB::table('villages')->insert(['id'=>43492, 'districts_id'=>3784, 'zipcode'=>'75618', 'name'=>'Bumi Sejahtera']);
        DB::table('villages')->insert(['id'=>43493, 'districts_id'=>3784, 'zipcode'=>'75618', 'name'=>'Citra Manunggal Jaya']);
        DB::table('villages')->insert(['id'=>43494, 'districts_id'=>3784, 'zipcode'=>'75618', 'name'=>'Kaliorang']);
        DB::table('villages')->insert(['id'=>43495, 'districts_id'=>3784, 'zipcode'=>'75618', 'name'=>'Selangkau']);
        //Kecamatan Bengalon Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3785, 'city_id'=>207, 'name'=>'Bengalon']);
        DB::table('villages')->insert(['id'=>43496, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Keraitan']);
        DB::table('villages')->insert(['id'=>43497, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Muara Bengalon']);
        DB::table('villages')->insert(['id'=>43498, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Sekerat']);
        DB::table('villages')->insert(['id'=>43499, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Sepaso Barat']);
        DB::table('villages')->insert(['id'=>43500, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Sepaso Induk']);
        DB::table('villages')->insert(['id'=>43501, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Sepaso Selatan']);
        DB::table('villages')->insert(['id'=>43502, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Sepaso Timur']);
        DB::table('villages')->insert(['id'=>43503, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Tebangan Lebak/lembak']);
        DB::table('villages')->insert(['id'=>43504, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Tepian Baru']);
        DB::table('villages')->insert(['id'=>43505, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Tepian Indah']);
        DB::table('villages')->insert(['id'=>43506, 'districts_id'=>3785, 'zipcode'=>'75618', 'name'=>'Tepian Langsat']);
        //Kecamatan Kaubun Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3786, 'city_id'=>207, 'name'=>'Kaubun']);
        DB::table('villages')->insert(['id'=>43507, 'districts_id'=>3786, 'zipcode'=>'75619', 'name'=>'Bukit Permata']);
        DB::table('villages')->insert(['id'=>43508, 'districts_id'=>3786, 'zipcode'=>'75619', 'name'=>'Bumi Etam']);
        DB::table('villages')->insert(['id'=>43509, 'districts_id'=>3786, 'zipcode'=>'75619', 'name'=>'Bumi Jaya']);
        DB::table('villages')->insert(['id'=>43510, 'districts_id'=>3786, 'zipcode'=>'75619', 'name'=>'Bumi Rapak']);
        DB::table('villages')->insert(['id'=>43511, 'districts_id'=>3786, 'zipcode'=>'75619', 'name'=>'Cipta Graha']);
        DB::table('villages')->insert(['id'=>43512, 'districts_id'=>3786, 'zipcode'=>'75619', 'name'=>'Kadungan Jaya']);
        DB::table('villages')->insert(['id'=>43513, 'districts_id'=>3786, 'zipcode'=>'75619', 'name'=>'Mata Air']);
        DB::table('villages')->insert(['id'=>43514, 'districts_id'=>3786, 'zipcode'=>'75619', 'name'=>'Pengadan Baru']);
        //Kecamatan Muara Bengkal Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3787, 'city_id'=>207, 'name'=>'Muara Bengkal']);
        DB::table('villages')->insert(['id'=>43515, 'districts_id'=>3787, 'zipcode'=>'75654', 'name'=>'Batu Balai']);
        DB::table('villages')->insert(['id'=>43516, 'districts_id'=>3787, 'zipcode'=>'75654', 'name'=>'Benua Baru']);
        DB::table('villages')->insert(['id'=>43517, 'districts_id'=>3787, 'zipcode'=>'75654', 'name'=>'Muara Bengkal Ilir']);
        DB::table('villages')->insert(['id'=>43518, 'districts_id'=>3787, 'zipcode'=>'75654', 'name'=>'Muara Bengkal Ulu']);
        DB::table('villages')->insert(['id'=>43519, 'districts_id'=>3787, 'zipcode'=>'75654', 'name'=>'Mulupan']);
        DB::table('villages')->insert(['id'=>43520, 'districts_id'=>3787, 'zipcode'=>'75654', 'name'=>'Ngayau']);
        DB::table('villages')->insert(['id'=>43521, 'districts_id'=>3787, 'zipcode'=>'75654', 'name'=>'Senambah']);
        //Kecamatan Batu Ampar Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3788, 'city_id'=>207, 'name'=>'Batu Ampar']);
        DB::table('villages')->insert(['id'=>43522, 'districts_id'=>3788, 'zipcode'=>'75654', 'name'=>'Batu Timbau']);
        DB::table('villages')->insert(['id'=>43523, 'districts_id'=>3788, 'zipcode'=>'75654', 'name'=>'Benua Harapan']);
        DB::table('villages')->insert(['id'=>43524, 'districts_id'=>3788, 'zipcode'=>'75654', 'name'=>'Himba Lestari']);
        DB::table('villages')->insert(['id'=>43525, 'districts_id'=>3788, 'zipcode'=>'75654', 'name'=>'Mawai Indah']);
        DB::table('villages')->insert(['id'=>43526, 'districts_id'=>3788, 'zipcode'=>'75654', 'name'=>'Mugi Rahayu']);
        DB::table('villages')->insert(['id'=>43527, 'districts_id'=>3788, 'zipcode'=>'75654', 'name'=>'Telaga']);
        //Kecamatan Long Mesangat (mesengat) Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3789, 'city_id'=>207, 'name'=>'Long Mesangat (mesengat)']);
        DB::table('villages')->insert(['id'=>43528, 'districts_id'=>3789, 'zipcode'=>'75654', 'name'=>'Sumber Agung']);
        DB::table('villages')->insert(['id'=>43529, 'districts_id'=>3789, 'zipcode'=>'75654', 'name'=>'Tanah Abang']);
        DB::table('villages')->insert(['id'=>43530, 'districts_id'=>3789, 'zipcode'=>'75656', 'name'=>'Melan']);
        DB::table('villages')->insert(['id'=>43531, 'districts_id'=>3789, 'zipcode'=>'75656', 'name'=>'Mukti Utama']);
        DB::table('villages')->insert(['id'=>43532, 'districts_id'=>3789, 'zipcode'=>'75656', 'name'=>'Segoi Makmur']);
        DB::table('villages')->insert(['id'=>43533, 'districts_id'=>3789, 'zipcode'=>'75656', 'name'=>'Sika Makmur']);
        DB::table('villages')->insert(['id'=>43534, 'districts_id'=>3789, 'zipcode'=>'75656', 'name'=>'Sumber Sari']);
        //Kecamatan Muara Wahau Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3790, 'city_id'=>207, 'name'=>'Muara Wahau']);
        DB::table('villages')->insert(['id'=>43535, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Benhes']);
        DB::table('villages')->insert(['id'=>43536, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Dabeq']);
        DB::table('villages')->insert(['id'=>43537, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Diaq Lay']);
        DB::table('villages')->insert(['id'=>43538, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Jak Luay']);
        DB::table('villages')->insert(['id'=>43539, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Karya Bakti']);
        DB::table('villages')->insert(['id'=>43540, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Long Wehea']);
        DB::table('villages')->insert(['id'=>43541, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Muara Wahau']);
        DB::table('villages')->insert(['id'=>43542, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Nehesliah Bing']);
        DB::table('villages')->insert(['id'=>43543, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Wahau Baru']);
        DB::table('villages')->insert(['id'=>43544, 'districts_id'=>3790, 'zipcode'=>'75655', 'name'=>'Wana Sari']);
        //Kecamatan Teluk Pandan Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3791, 'city_id'=>207, 'name'=>'Teluk Pandan']);
        DB::table('villages')->insert(['id'=>43545, 'districts_id'=>3791, 'zipcode'=>'75683', 'name'=>'Danau Redan']);
        DB::table('villages')->insert(['id'=>43546, 'districts_id'=>3791, 'zipcode'=>'75683', 'name'=>'Kandolo']);
        DB::table('villages')->insert(['id'=>43547, 'districts_id'=>3791, 'zipcode'=>'75683', 'name'=>'Martadinata']);
        DB::table('villages')->insert(['id'=>43548, 'districts_id'=>3791, 'zipcode'=>'75683', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>43549, 'districts_id'=>3791, 'zipcode'=>'75683', 'name'=>'Suka Rahmat']);
        DB::table('villages')->insert(['id'=>43550, 'districts_id'=>3791, 'zipcode'=>'75683', 'name'=>'Teluk Pandan']);
        //Kecamatan Rantau Pulung Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3792, 'city_id'=>207, 'name'=>'Rantau Pulung']);
        DB::table('villages')->insert(['id'=>43551, 'districts_id'=>3792, 'zipcode'=>'75683', 'name'=>'Kebon Agung']);
        DB::table('villages')->insert(['id'=>43552, 'districts_id'=>3792, 'zipcode'=>'75683', 'name'=>'Manunggal Jaya']);
        DB::table('villages')->insert(['id'=>43553, 'districts_id'=>3792, 'zipcode'=>'75683', 'name'=>'Margo Mulyo']);
        DB::table('villages')->insert(['id'=>43554, 'districts_id'=>3792, 'zipcode'=>'75683', 'name'=>'Mukti Jaya']);
        DB::table('villages')->insert(['id'=>43555, 'districts_id'=>3792, 'zipcode'=>'75683', 'name'=>'Pulung Sari']);
        DB::table('villages')->insert(['id'=>43556, 'districts_id'=>3792, 'zipcode'=>'75683', 'name'=>'Rantau Makmur']);
        DB::table('villages')->insert(['id'=>43557, 'districts_id'=>3792, 'zipcode'=>'75683', 'name'=>'Tanjung Labu']);
        DB::table('villages')->insert(['id'=>43558, 'districts_id'=>3792, 'zipcode'=>'75683', 'name'=>'Tepian Makmur']);
        //Kecamatan Sangatta Selatan Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3793, 'city_id'=>207, 'name'=>'Sangatta Selatan']);
        DB::table('villages')->insert(['id'=>43559, 'districts_id'=>3793, 'zipcode'=>'75683', 'name'=>'Sangata Selatan']);
        DB::table('villages')->insert(['id'=>43560, 'districts_id'=>3793, 'zipcode'=>'75683', 'name'=>'Sangkima']);
        DB::table('villages')->insert(['id'=>43561, 'districts_id'=>3793, 'zipcode'=>'75683', 'name'=>'Singa Geweh']);
        DB::table('villages')->insert(['id'=>43562, 'districts_id'=>3793, 'zipcode'=>'75683', 'name'=>'Teluk Singkam / Singkama']);
        //Kecamatan Sangatta Utara Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3794, 'city_id'=>207, 'name'=>'Sangatta Utara']);
        DB::table('villages')->insert(['id'=>43563, 'districts_id'=>3794, 'zipcode'=>'75683', 'name'=>'Sangatta Utara']);
        DB::table('villages')->insert(['id'=>43564, 'districts_id'=>3794, 'zipcode'=>'75683', 'name'=>'Singa Gembara']);
        DB::table('villages')->insert(['id'=>43565, 'districts_id'=>3794, 'zipcode'=>'75683', 'name'=>'Swarga Bara']);
        DB::table('villages')->insert(['id'=>43566, 'districts_id'=>3794, 'zipcode'=>'75683', 'name'=>'Teluk Lingga']);
        //Kecamatan Karangan Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3795, 'city_id'=>207, 'name'=>'Karangan']);
        DB::table('villages')->insert(['id'=>43567, 'districts_id'=>3795, 'zipcode'=>'75684', 'name'=>'Baay']);
        DB::table('villages')->insert(['id'=>43568, 'districts_id'=>3795, 'zipcode'=>'75684', 'name'=>'Batu Lepoq']);
        DB::table('villages')->insert(['id'=>43569, 'districts_id'=>3795, 'zipcode'=>'75684', 'name'=>'Karangan Dalam']);
        DB::table('villages')->insert(['id'=>43570, 'districts_id'=>3795, 'zipcode'=>'75684', 'name'=>'Karangan Hilir']);
        DB::table('villages')->insert(['id'=>43571, 'districts_id'=>3795, 'zipcode'=>'75684', 'name'=>'Karangan Seberang']);
        DB::table('villages')->insert(['id'=>43572, 'districts_id'=>3795, 'zipcode'=>'75684', 'name'=>'Mukti Lestari']);
        DB::table('villages')->insert(['id'=>43573, 'districts_id'=>3795, 'zipcode'=>'75684', 'name'=>'Pengadan (pengadaan Baru)']);
        //Kecamatan Sangkulirang Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3796, 'city_id'=>207, 'name'=>'Sangkulirang']);
        DB::table('villages')->insert(['id'=>43574, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Benua Baru Ilir']);
        DB::table('villages')->insert(['id'=>43575, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Benua Baru Ulu']);
        DB::table('villages')->insert(['id'=>43576, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Kerayaan']);
        DB::table('villages')->insert(['id'=>43577, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Kolek']);
        DB::table('villages')->insert(['id'=>43578, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Maloy']);
        DB::table('villages')->insert(['id'=>43579, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Mandau Pantai Sejahtera']);
        DB::table('villages')->insert(['id'=>43580, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Mandu Dalam']);
        DB::table('villages')->insert(['id'=>43581, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Pelawan']);
        DB::table('villages')->insert(['id'=>43582, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Peridan']);
        DB::table('villages')->insert(['id'=>43583, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Perupuk']);
        DB::table('villages')->insert(['id'=>43584, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Pulau Miang']);
        DB::table('villages')->insert(['id'=>43585, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Saka']);
        DB::table('villages')->insert(['id'=>43586, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Sempuyau (sempayau)']);
        DB::table('villages')->insert(['id'=>43587, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Tanjung Manis']);
        DB::table('villages')->insert(['id'=>43588, 'districts_id'=>3796, 'zipcode'=>'75684', 'name'=>'Tepian Terap']);
        //Kecamatan Sandaran Kab. Kutai Timur Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3797, 'city_id'=>207, 'name'=>'Sandaran']);
        DB::table('villages')->insert(['id'=>43589, 'districts_id'=>3797, 'zipcode'=>'75685', 'name'=>'Manubar']);
        DB::table('villages')->insert(['id'=>43590, 'districts_id'=>3797, 'zipcode'=>'75685', 'name'=>'Marukangan']);
        DB::table('villages')->insert(['id'=>43591, 'districts_id'=>3797, 'zipcode'=>'75685', 'name'=>'Sandaran']);
        DB::table('villages')->insert(['id'=>43592, 'districts_id'=>3797, 'zipcode'=>'75685', 'name'=>'Susuk Dalam']);
        DB::table('villages')->insert(['id'=>43593, 'districts_id'=>3797, 'zipcode'=>'75685', 'name'=>'Susuk Luar']);
        DB::table('villages')->insert(['id'=>43594, 'districts_id'=>3797, 'zipcode'=>'75685', 'name'=>'Tadoan']);
        DB::table('villages')->insert(['id'=>43595, 'districts_id'=>3797, 'zipcode'=>'75685', 'name'=>'Tanjung Mangkalihat']);

        //Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>208, 'province_id'=>15, 'type'=>'regencies', 'name'=>'Kutai Barat']);
        //Kecamatan Linggang Bigung Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3798, 'city_id'=>208, 'name'=>'Linggang Bigung']);
        DB::table('villages')->insert(['id'=>43596, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Bangun Sari']);
        DB::table('villages')->insert(['id'=>43597, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Bigung Baru']);
        DB::table('villages')->insert(['id'=>43598, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Linggang Amer']);
        DB::table('villages')->insert(['id'=>43599, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Linggang Bigung']);
        DB::table('villages')->insert(['id'=>43600, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Linggang Kebut']);
        DB::table('villages')->insert(['id'=>43601, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Linggang Mapan']);
        DB::table('villages')->insert(['id'=>43602, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Linggang Melapeh']);
        DB::table('villages')->insert(['id'=>43603, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Linggang Mencelew']);
        DB::table('villages')->insert(['id'=>43604, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Melapeh Baru']);
        DB::table('villages')->insert(['id'=>43605, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Purwadadi']);
        DB::table('villages')->insert(['id'=>43606, 'districts_id'=>3798, 'zipcode'=>'75576', 'name'=>'Tutuh (tutung)']);
        //Kecamatan Penyinggahan Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3799, 'city_id'=>208, 'name'=>'Penyinggahan']);
        DB::table('villages')->insert(['id'=>43607, 'districts_id'=>3799, 'zipcode'=>'75763', 'name'=>'Bakung']);
        DB::table('villages')->insert(['id'=>43608, 'districts_id'=>3799, 'zipcode'=>'75763', 'name'=>'Loa Deras']);
        DB::table('villages')->insert(['id'=>43609, 'districts_id'=>3799, 'zipcode'=>'75763', 'name'=>'Minta']);
        DB::table('villages')->insert(['id'=>43610, 'districts_id'=>3799, 'zipcode'=>'75763', 'name'=>'Penyinggahan Ilir']);
        DB::table('villages')->insert(['id'=>43611, 'districts_id'=>3799, 'zipcode'=>'75763', 'name'=>'Penyinggahan Ulu']);
        DB::table('villages')->insert(['id'=>43612, 'districts_id'=>3799, 'zipcode'=>'75763', 'name'=>'Tanjung Haur']);
        //Kecamatan Melak Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3800, 'city_id'=>208, 'name'=>'Melak']);
        DB::table('villages')->insert(['id'=>43613, 'districts_id'=>3800, 'zipcode'=>'75765', 'name'=>'Empakuq']);
        DB::table('villages')->insert(['id'=>43614, 'districts_id'=>3800, 'zipcode'=>'75765', 'name'=>'Empas']);
        DB::table('villages')->insert(['id'=>43615, 'districts_id'=>3800, 'zipcode'=>'75765', 'name'=>'Melak Ilir']);
        DB::table('villages')->insert(['id'=>43616, 'districts_id'=>3800, 'zipcode'=>'75765', 'name'=>'Melak Ulu']);
        DB::table('villages')->insert(['id'=>43617, 'districts_id'=>3800, 'zipcode'=>'75765', 'name'=>'Muara Benangaq']);
        DB::table('villages')->insert(['id'=>43618, 'districts_id'=>3800, 'zipcode'=>'75765', 'name'=>'Muara Bunyut']);
        //Kecamatan Manor Bulatin (mook Manaar Bulatn) Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3801, 'city_id'=>208, 'name'=>'Manor Bulatin (mook Manaar Bulatn)']);
        DB::table('villages')->insert(['id'=>43619, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Gadur']);
        DB::table('villages')->insert(['id'=>43620, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Gemuruh']);
        DB::table('villages')->insert(['id'=>43621, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Gunung Rampah']);
        DB::table('villages')->insert(['id'=>43622, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Jengan']);
        DB::table('villages')->insert(['id'=>43623, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Karangan']);
        DB::table('villages')->insert(['id'=>43624, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Kelumpang']);
        DB::table('villages')->insert(['id'=>43625, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Linggang Marimun']);
        DB::table('villages')->insert(['id'=>43626, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Merayaq']);
        DB::table('villages')->insert(['id'=>43627, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Muara Batuq']);
        DB::table('villages')->insert(['id'=>43628, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Muara Kalaq']);
        DB::table('villages')->insert(['id'=>43629, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Sakaq Lotoq']);
        DB::table('villages')->insert(['id'=>43630, 'districts_id'=>3801, 'zipcode'=>'75765', 'name'=>'Sakaq Tada']);
        DB::table('villages')->insert(['id'=>43631, 'districts_id'=>3801, 'zipcode'=>'75774', 'name'=>'Abit']);
        DB::table('villages')->insert(['id'=>43632, 'districts_id'=>3801, 'zipcode'=>'75774', 'name'=>'Muara Jawaq']);
        DB::table('villages')->insert(['id'=>43633, 'districts_id'=>3801, 'zipcode'=>'75774', 'name'=>'Rembayan / Rambayan']);
        //Kecamatan Sekolaq Darat Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3802, 'city_id'=>208, 'name'=>'Sekolaq Darat']);
        DB::table('villages')->insert(['id'=>43634, 'districts_id'=>3802, 'zipcode'=>'75765', 'name'=>'Sekolaq Darat']);
        DB::table('villages')->insert(['id'=>43635, 'districts_id'=>3802, 'zipcode'=>'75765', 'name'=>'Sekolaq Joleq']);
        DB::table('villages')->insert(['id'=>43636, 'districts_id'=>3802, 'zipcode'=>'75765', 'name'=>'Sekolaq Muliaq']);
        DB::table('villages')->insert(['id'=>43637, 'districts_id'=>3802, 'zipcode'=>'75765', 'name'=>'Sekolaq Oday']);
        DB::table('villages')->insert(['id'=>43638, 'districts_id'=>3802, 'zipcode'=>'75765', 'name'=>'Sri Mulyo']);
        DB::table('villages')->insert(['id'=>43639, 'districts_id'=>3802, 'zipcode'=>'75765', 'name'=>'Sumber Bangun']);
        DB::table('villages')->insert(['id'=>43640, 'districts_id'=>3802, 'zipcode'=>'75765', 'name'=>'Sumber Rejo']);
        //Kecamatan Long Iram Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3803, 'city_id'=>208, 'name'=>'Long Iram']);
        DB::table('villages')->insert(['id'=>43641, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Anah']);
        DB::table('villages')->insert(['id'=>43642, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Kalian Luar']);
        DB::table('villages')->insert(['id'=>43643, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Keliway']);
        DB::table('villages')->insert(['id'=>43644, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Long Daliq']);
        DB::table('villages')->insert(['id'=>43645, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Long Iram Bayan']);
        DB::table('villages')->insert(['id'=>43646, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Long Iram Ilir']);
        DB::table('villages')->insert(['id'=>43647, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Long Iram Kota']);
        DB::table('villages')->insert(['id'=>43648, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Longiram Seberang']);
        DB::table('villages')->insert(['id'=>43649, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Muara Leban']);
        DB::table('villages')->insert(['id'=>43650, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Suko Mulyo']);
        DB::table('villages')->insert(['id'=>43651, 'districts_id'=>3803, 'zipcode'=>'75766', 'name'=>'Ujoh Halang']);
        //Kecamatan Tering Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3804, 'city_id'=>208, 'name'=>'Tering']);
        DB::table('villages')->insert(['id'=>43652, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Jelemuq/jelmuq']);
        DB::table('villages')->insert(['id'=>43653, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Kelian Dalam']);
        DB::table('villages')->insert(['id'=>43654, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Kelubaq']);
        DB::table('villages')->insert(['id'=>43655, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Muara Mujan']);
        DB::table('villages')->insert(['id'=>43656, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Muyub/muyup Aket']);
        DB::table('villages')->insert(['id'=>43657, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Muyub/muyup Ilir']);
        DB::table('villages')->insert(['id'=>43658, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Muyub/muyup Ulu']);
        DB::table('villages')->insert(['id'=>43659, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Purworejo']);
        DB::table('villages')->insert(['id'=>43660, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Tering']);
        DB::table('villages')->insert(['id'=>43661, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Tering Baru']);
        DB::table('villages')->insert(['id'=>43662, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Tering Lama']);
        DB::table('villages')->insert(['id'=>43663, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Tering Seberang']);
        DB::table('villages')->insert(['id'=>43664, 'districts_id'=>3804, 'zipcode'=>'75766', 'name'=>'Tukul']);
        //Kecamatan Long Bagun Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3805, 'city_id'=>208, 'name'=>'Long Bagun']);
        DB::table('villages')->insert(['id'=>43665, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Batoq Kelo (batu Kelau)']);
        DB::table('villages')->insert(['id'=>43666, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Batu Majang']);
        DB::table('villages')->insert(['id'=>43667, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Long Bagun Ilir']);
        DB::table('villages')->insert(['id'=>43668, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Long Bagun Ulu']);
        DB::table('villages')->insert(['id'=>43669, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Long Hurai']);
        DB::table('villages')->insert(['id'=>43670, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Long Melaham']);
        DB::table('villages')->insert(['id'=>43671, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Long Merah']);
        DB::table('villages')->insert(['id'=>43672, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Mamahak Ilir']);
        DB::table('villages')->insert(['id'=>43673, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Mamahak Ulu']);
        DB::table('villages')->insert(['id'=>43674, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Rukun Damai']);
        DB::table('villages')->insert(['id'=>43675, 'districts_id'=>3805, 'zipcode'=>'75767', 'name'=>'Ujoh Bilang']);
        //Kecamatan Long Pahangai Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3806, 'city_id'=>208, 'name'=>'Long Pahangai']);
        DB::table('villages')->insert(['id'=>43676, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Datah Naha']);
        DB::table('villages')->insert(['id'=>43677, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Delang Kerohong']);
        DB::table('villages')->insert(['id'=>43678, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Lirung Ubing']);
        DB::table('villages')->insert(['id'=>43679, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Liu Mulang']);
        DB::table('villages')->insert(['id'=>43680, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Long Isun']);
        DB::table('villages')->insert(['id'=>43681, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Long Lunuk']);
        DB::table('villages')->insert(['id'=>43682, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Long Lunuk Baru']);
        DB::table('villages')->insert(['id'=>43683, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Long Pahangai Dua']);
        DB::table('villages')->insert(['id'=>43684, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Long Pahangai Satu']);
        DB::table('villages')->insert(['id'=>43685, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Long Pakaq']);
        DB::table('villages')->insert(['id'=>43686, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Long Pakaq Baru']);
        DB::table('villages')->insert(['id'=>43687, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Long Tuyoq']);
        DB::table('villages')->insert(['id'=>43688, 'districts_id'=>3806, 'zipcode'=>'75768', 'name'=>'Naha Aru']);
        //Kecamatan Long Apari Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3807, 'city_id'=>208, 'name'=>'Long Apari']);
        DB::table('villages')->insert(['id'=>43689, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Long Apari']);
        DB::table('villages')->insert(['id'=>43690, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Long Kerioq/keriok']);
        DB::table('villages')->insert(['id'=>43691, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Long Penaneh Dua']);
        DB::table('villages')->insert(['id'=>43692, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Long Penaneh Satu']);
        DB::table('villages')->insert(['id'=>43693, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Long Penaneh Tiga']);
        DB::table('villages')->insert(['id'=>43694, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Naha Buan']);
        DB::table('villages')->insert(['id'=>43695, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Noha Silat']);
        DB::table('villages')->insert(['id'=>43696, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Noha Tifab (naha Tifab)']);
        DB::table('villages')->insert(['id'=>43697, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Tiong Buu']);
        DB::table('villages')->insert(['id'=>43698, 'districts_id'=>3807, 'zipcode'=>'75769', 'name'=>'Tiong Ohang']);
        //Kecamatan Bongan Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3808, 'city_id'=>208, 'name'=>'Bongan']);
        DB::table('villages')->insert(['id'=>43699, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Bukit Harapan']);
        DB::table('villages')->insert(['id'=>43700, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Deraya']);
        DB::table('villages')->insert(['id'=>43701, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Gerunggung']);
        DB::table('villages')->insert(['id'=>43702, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Jambuk']);
        DB::table('villages')->insert(['id'=>43703, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Jambuk Makmur']);
        DB::table('villages')->insert(['id'=>43704, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Lemper']);
        DB::table('villages')->insert(['id'=>43705, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Muara Gusik']);
        DB::table('villages')->insert(['id'=>43706, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Muara Kedang']);
        DB::table('villages')->insert(['id'=>43707, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Muara Siram']);
        DB::table('villages')->insert(['id'=>43708, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Muaram Siram I (siram Makmur)']);
        DB::table('villages')->insert(['id'=>43709, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Muaram Siram Ii (siram Jaya)']);
        DB::table('villages')->insert(['id'=>43710, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Penawai']);
        DB::table('villages')->insert(['id'=>43711, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Pereng Talik']);
        DB::table('villages')->insert(['id'=>43712, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Resak']);
        DB::table('villages')->insert(['id'=>43713, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Tanjung Sari']);
        DB::table('villages')->insert(['id'=>43714, 'districts_id'=>3808, 'zipcode'=>'75772', 'name'=>'Tanjung Soke']);
        //Kecamatan Jempang Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3809, 'city_id'=>208, 'name'=>'Jempang']);
        DB::table('villages')->insert(['id'=>43715, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Bekokong Makmur (resak Bekokong)']);
        DB::table('villages')->insert(['id'=>43716, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Lembonah']);
        DB::table('villages')->insert(['id'=>43717, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Mancong']);
        DB::table('villages')->insert(['id'=>43718, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Muara Nayan']);
        DB::table('villages')->insert(['id'=>43719, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Muara Ohong']);
        DB::table('villages')->insert(['id'=>43720, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Muara Tae']);
        DB::table('villages')->insert(['id'=>43721, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Pentat']);
        DB::table('villages')->insert(['id'=>43722, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Perigiq']);
        DB::table('villages')->insert(['id'=>43723, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Pulau Lanting']);
        DB::table('villages')->insert(['id'=>43724, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Tanjung Isuy']);
        DB::table('villages')->insert(['id'=>43725, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Tanjung Jan']);
        DB::table('villages')->insert(['id'=>43726, 'districts_id'=>3809, 'zipcode'=>'75773', 'name'=>'Tanjung Jone']);
        //Kecamatan Siluq Ngurai Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3810, 'city_id'=>208, 'name'=>'Siluq Ngurai']);
        DB::table('villages')->insert(['id'=>43727, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Bentas']);
        DB::table('villages')->insert(['id'=>43728, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Betung']);
        DB::table('villages')->insert(['id'=>43729, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Kaliq']);
        DB::table('villages')->insert(['id'=>43730, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Kendisiq']);
        DB::table('villages')->insert(['id'=>43731, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Kenyanyan']);
        DB::table('villages')->insert(['id'=>43732, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Kiaq']);
        DB::table('villages')->insert(['id'=>43733, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Lendian Liang Nayuk/nayung']);
        DB::table('villages')->insert(['id'=>43734, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Muara Kelawit']);
        DB::table('villages')->insert(['id'=>43735, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Muara Ponaq']);
        DB::table('villages')->insert(['id'=>43736, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Muhur']);
        DB::table('villages')->insert(['id'=>43737, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Penawang']);
        DB::table('villages')->insert(['id'=>43738, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Rikong']);
        DB::table('villages')->insert(['id'=>43739, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Sang Sang (sansang)']);
        DB::table('villages')->insert(['id'=>43740, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Tanah Mea (tana Mea)']);
        DB::table('villages')->insert(['id'=>43741, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Tebisaq']);
        DB::table('villages')->insert(['id'=>43742, 'districts_id'=>3810, 'zipcode'=>'75774', 'name'=>'Tendiq']);
        //Kecamatan Muara Pahu Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3811, 'city_id'=>208, 'name'=>'Muara Pahu']);
        DB::table('villages')->insert(['id'=>43743, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Dasaq']);
        DB::table('villages')->insert(['id'=>43744, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Gunung Bayan']);
        DB::table('villages')->insert(['id'=>43745, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Jerang Dayak']);
        DB::table('villages')->insert(['id'=>43746, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Jerang Melayu']);
        DB::table('villages')->insert(['id'=>43747, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Mendung']);
        DB::table('villages')->insert(['id'=>43748, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Muara Baroh']);
        DB::table('villages')->insert(['id'=>43749, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Muara Beloan']);
        DB::table('villages')->insert(['id'=>43750, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Sebelang']);
        DB::table('villages')->insert(['id'=>43751, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Tanjung Laong']);
        DB::table('villages')->insert(['id'=>43752, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Tanjung Pagar']);
        DB::table('villages')->insert(['id'=>43753, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Teluk Tempudau']);
        DB::table('villages')->insert(['id'=>43754, 'districts_id'=>3811, 'zipcode'=>'75774', 'name'=>'Tepian Ulaq']);
        //Kecamatan Muara Lawa Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3812, 'city_id'=>208, 'name'=>'Muara Lawa']);
        DB::table('villages')->insert(['id'=>43755, 'districts_id'=>3812, 'zipcode'=>'75775', 'name'=>'Benggeris']);
        DB::table('villages')->insert(['id'=>43756, 'districts_id'=>3812, 'zipcode'=>'75775', 'name'=>'Cempedas']);
        DB::table('villages')->insert(['id'=>43757, 'districts_id'=>3812, 'zipcode'=>'75775', 'name'=>'Dingin']);
        DB::table('villages')->insert(['id'=>43758, 'districts_id'=>3812, 'zipcode'=>'75775', 'name'=>'Lambing']);
        DB::table('villages')->insert(['id'=>43759, 'districts_id'=>3812, 'zipcode'=>'75775', 'name'=>'Lataq/lotaq']);
        DB::table('villages')->insert(['id'=>43760, 'districts_id'=>3812, 'zipcode'=>'75775', 'name'=>'Muara Begai']);
        DB::table('villages')->insert(['id'=>43761, 'districts_id'=>3812, 'zipcode'=>'75775', 'name'=>'Muara Lawa']);
        DB::table('villages')->insert(['id'=>43762, 'districts_id'=>3812, 'zipcode'=>'75775', 'name'=>'Payang']);
        //Kecamatan Barong Tongkok Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3813, 'city_id'=>208, 'name'=>'Barong Tongkok']);
        DB::table('villages')->insert(['id'=>43763, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Asa']);
        DB::table('villages')->insert(['id'=>43764, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Balok Asa']);
        DB::table('villages')->insert(['id'=>43765, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Barong Tongkok']);
        DB::table('villages')->insert(['id'=>43766, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Belempung Ulaq']);
        DB::table('villages')->insert(['id'=>43767, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Engkuni Pasek']);
        DB::table('villages')->insert(['id'=>43768, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Geleo Asa']);
        DB::table('villages')->insert(['id'=>43769, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Geleo Baru']);
        DB::table('villages')->insert(['id'=>43770, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Gemuhan Asa']);
        DB::table('villages')->insert(['id'=>43771, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Juaq Asa']);
        DB::table('villages')->insert(['id'=>43772, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Juhan Asa']);
        DB::table('villages')->insert(['id'=>43773, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Mencimai']);
        DB::table('villages')->insert(['id'=>43774, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Muara Asa']);
        DB::table('villages')->insert(['id'=>43775, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Ngenyan Asa']);
        DB::table('villages')->insert(['id'=>43776, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Ombau Asa']);
        DB::table('villages')->insert(['id'=>43777, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Ongko Asa']);
        DB::table('villages')->insert(['id'=>43778, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Pepas Eheng']);
        DB::table('villages')->insert(['id'=>43779, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Pepas/pepes Asa']);
        DB::table('villages')->insert(['id'=>43780, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Rejo Basuki']);
        DB::table('villages')->insert(['id'=>43781, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Sendawar']);
        DB::table('villages')->insert(['id'=>43782, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Simpang Raya']);
        DB::table('villages')->insert(['id'=>43783, 'districts_id'=>3813, 'zipcode'=>'75776', 'name'=>'Sumber Sari']);
        //Kecamatan Nyuatan Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3814, 'city_id'=>208, 'name'=>'Nyuatan']);
        DB::table('villages')->insert(['id'=>43784, 'districts_id'=>3814, 'zipcode'=>'75776', 'name'=>'Awai']);
        DB::table('villages')->insert(['id'=>43785, 'districts_id'=>3814, 'zipcode'=>'75776', 'name'=>'Lakan Bilem']);
        DB::table('villages')->insert(['id'=>43786, 'districts_id'=>3814, 'zipcode'=>'75776', 'name'=>'Mu\ut']);
        DB::table('villages')->insert(['id'=>43787, 'districts_id'=>3814, 'zipcode'=>'75776', 'name'=>'Sentalar']);
        DB::table('villages')->insert(['id'=>43788, 'districts_id'=>3814, 'zipcode'=>'75776', 'name'=>'Terajuk']);
        DB::table('villages')->insert(['id'=>43789, 'districts_id'=>3814, 'zipcode'=>'75777', 'name'=>'Dempar']);
        DB::table('villages')->insert(['id'=>43790, 'districts_id'=>3814, 'zipcode'=>'75777', 'name'=>'Intu Lingau']);
        DB::table('villages')->insert(['id'=>43791, 'districts_id'=>3814, 'zipcode'=>'75777', 'name'=>'Jontai']);
        DB::table('villages')->insert(['id'=>43792, 'districts_id'=>3814, 'zipcode'=>'75777', 'name'=>'Sembuan']);
        DB::table('villages')->insert(['id'=>43793, 'districts_id'=>3814, 'zipcode'=>'75777', 'name'=>'Temula']);
        //Kecamatan Damai Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3815, 'city_id'=>208, 'name'=>'Damai']);
        DB::table('villages')->insert(['id'=>43794, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Benung']);
        DB::table('villages')->insert(['id'=>43795, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Bermai']);
        DB::table('villages')->insert(['id'=>43796, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Besiq (besik)']);
        DB::table('villages')->insert(['id'=>43797, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Damai Kota']);
        DB::table('villages')->insert(['id'=>43798, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Damai Seberang']);
        DB::table('villages')->insert(['id'=>43799, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Jengan Danum']);
        DB::table('villages')->insert(['id'=>43800, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Keay']);
        DB::table('villages')->insert(['id'=>43801, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Lumpat Dahuq']);
        DB::table('villages')->insert(['id'=>43802, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Mantar']);
        DB::table('villages')->insert(['id'=>43803, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Mendika']);
        DB::table('villages')->insert(['id'=>43804, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Muara Bomboy']);
        DB::table('villages')->insert(['id'=>43805, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Muara Nilik']);
        DB::table('villages')->insert(['id'=>43806, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Muara Nyahing']);
        DB::table('villages')->insert(['id'=>43807, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Muara Tokong']);
        DB::table('villages')->insert(['id'=>43808, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Sempatn']);
        DB::table('villages')->insert(['id'=>43809, 'districts_id'=>3815, 'zipcode'=>'75777', 'name'=>'Tepulang']);
        //Kecamatan Bentian Besar Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3816, 'city_id'=>208, 'name'=>'Bentian Besar']);
        DB::table('villages')->insert(['id'=>43810, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Anan Jaya']);
        DB::table('villages')->insert(['id'=>43811, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Dilang Puti']);
        DB::table('villages')->insert(['id'=>43812, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Jelmu Sibak']);
        DB::table('villages')->insert(['id'=>43813, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Penarung']);
        DB::table('villages')->insert(['id'=>43814, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Randa Empas']);
        DB::table('villages')->insert(['id'=>43815, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Sambung']);
        DB::table('villages')->insert(['id'=>43816, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Suakong']);
        DB::table('villages')->insert(['id'=>43817, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Tende']);
        DB::table('villages')->insert(['id'=>43818, 'districts_id'=>3816, 'zipcode'=>'75778', 'name'=>'Tuquk/tukuq']);
        //Kecamatan Laham Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3817, 'city_id'=>208, 'name'=>'Laham']);
        DB::table('villages')->insert(['id'=>43819, 'districts_id'=>3817, 'zipcode'=>'75779', 'name'=>'Danum Paroy/paroi']);
        DB::table('villages')->insert(['id'=>43820, 'districts_id'=>3817, 'zipcode'=>'75779', 'name'=>'Laham']);
        DB::table('villages')->insert(['id'=>43821, 'districts_id'=>3817, 'zipcode'=>'75779', 'name'=>'Long Gelawang']);
        DB::table('villages')->insert(['id'=>43822, 'districts_id'=>3817, 'zipcode'=>'75779', 'name'=>'Muara Ratah']);
        DB::table('villages')->insert(['id'=>43823, 'districts_id'=>3817, 'zipcode'=>'75779', 'name'=>'Nyaribungan']);
        //Kecamatan Long Hubung Kab. Kutai Barat Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3818, 'city_id'=>208, 'name'=>'Long Hubung']);
        DB::table('villages')->insert(['id'=>43824, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Datah Bilang Baru']);
        DB::table('villages')->insert(['id'=>43825, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Datah Bilang Ilir']);
        DB::table('villages')->insert(['id'=>43826, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Datah Bilang Ulu']);
        DB::table('villages')->insert(['id'=>43827, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Long Hubung']);
        DB::table('villages')->insert(['id'=>43828, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Lutan']);
        DB::table('villages')->insert(['id'=>43829, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Mata Libaq']);
        DB::table('villages')->insert(['id'=>43830, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Memahak Teboq']);
        DB::table('villages')->insert(['id'=>43831, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Sirau']);
        DB::table('villages')->insert(['id'=>43832, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Tripati Makmur']);
        DB::table('villages')->insert(['id'=>43833, 'districts_id'=>3818, 'zipcode'=>'75779', 'name'=>'Wana Pariq']);

        //Kota Balikpapan Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>209, 'province_id'=>15, 'type'=>'city', 'name'=>'Balikpapan']);
        //Kecamatan Balikpapan Kota Kota Balikpapan Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3819, 'city_id'=>209, 'name'=>'Balikpapan Kota']);
        DB::table('villages')->insert(['id'=>43834, 'districts_id'=>3819, 'zipcode'=>'76111', 'name'=>'Prapatan']);
        DB::table('villages')->insert(['id'=>43835, 'districts_id'=>3819, 'zipcode'=>'76111', 'name'=>'Telaga Sari']);
        DB::table('villages')->insert(['id'=>43836, 'districts_id'=>3819, 'zipcode'=>'76112', 'name'=>'Klandasan Ulu']);
        DB::table('villages')->insert(['id'=>43837, 'districts_id'=>3819, 'zipcode'=>'76113', 'name'=>'Klandasan Ilir']);
        DB::table('villages')->insert(['id'=>43838, 'districts_id'=>3819, 'zipcode'=>'76114', 'name'=>'Damai']);
        //Kecamatan Balikpapan Selatan Kota Balikpapan Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3820, 'city_id'=>209, 'name'=>'Balikpapan Selatan']);
        DB::table('villages')->insert(['id'=>43839, 'districts_id'=>3820, 'zipcode'=>'76114', 'name'=>'Damai Bahagia']);
        DB::table('villages')->insert(['id'=>43840, 'districts_id'=>3820, 'zipcode'=>'76114', 'name'=>'Damai Baru']);
        DB::table('villages')->insert(['id'=>43841, 'districts_id'=>3820, 'zipcode'=>'76114', 'name'=>'Gunung Bahagia']);
        DB::table('villages')->insert(['id'=>43842, 'districts_id'=>3820, 'zipcode'=>'76114', 'name'=>'Sungai Nangka']);
        DB::table('villages')->insert(['id'=>43843, 'districts_id'=>3820, 'zipcode'=>'76115', 'name'=>'Sepinggan']);
        DB::table('villages')->insert(['id'=>43844, 'districts_id'=>3820, 'zipcode'=>'76115', 'name'=>'Sepinggan Baru']);
        DB::table('villages')->insert(['id'=>43845, 'districts_id'=>3820, 'zipcode'=>'76115', 'name'=>'Sepinggan Raya']);
        //Kecamatan Balikpapan Timur Kota Balikpapan Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3821, 'city_id'=>209, 'name'=>'Balikpapan Timur']);
        DB::table('villages')->insert(['id'=>43846, 'districts_id'=>3821, 'zipcode'=>'76116', 'name'=>'Manggar']);
        DB::table('villages')->insert(['id'=>43847, 'districts_id'=>3821, 'zipcode'=>'76116', 'name'=>'Manggar Baru']);
        DB::table('villages')->insert(['id'=>43848, 'districts_id'=>3821, 'zipcode'=>'76117', 'name'=>'Lamaru']);
        DB::table('villages')->insert(['id'=>43849, 'districts_id'=>3821, 'zipcode'=>'76118', 'name'=>'Teritip']);
        //Kecamatan Balikpapan Tengah Kota Balikpapan Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3822, 'city_id'=>209, 'name'=>'Balikpapan Tengah']);
        DB::table('villages')->insert(['id'=>43850, 'districts_id'=>3822, 'zipcode'=>'76121', 'name'=>'Gunung Sari Ilir']);
        DB::table('villages')->insert(['id'=>43851, 'districts_id'=>3822, 'zipcode'=>'76122', 'name'=>'Gunung Sari Ulu']);
        DB::table('villages')->insert(['id'=>43852, 'districts_id'=>3822, 'zipcode'=>'76122', 'name'=>'Mekar Sari']);
        DB::table('villages')->insert(['id'=>43853, 'districts_id'=>3822, 'zipcode'=>'76123', 'name'=>'Karang Jati']);
        DB::table('villages')->insert(['id'=>43854, 'districts_id'=>3822, 'zipcode'=>'76124', 'name'=>'Karang Rejo']);
        DB::table('villages')->insert(['id'=>43855, 'districts_id'=>3822, 'zipcode'=>'76124', 'name'=>'Sumber Rejo']);
        //Kecamatan Balikpapan Utara Kota Balikpapan Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3823, 'city_id'=>209, 'name'=>'Balikpapan Utara']);
        DB::table('villages')->insert(['id'=>43856, 'districts_id'=>3823, 'zipcode'=>'76125', 'name'=>'Gunung Samarinda']);
        DB::table('villages')->insert(['id'=>43857, 'districts_id'=>3823, 'zipcode'=>'76125', 'name'=>'Muara Rapak']);
        DB::table('villages')->insert(['id'=>43858, 'districts_id'=>3823, 'zipcode'=>'76127', 'name'=>'Karang Joang']);
        DB::table('villages')->insert(['id'=>43859, 'districts_id'=>3823, 'zipcode'=>'76128', 'name'=>'Gunung Samarinda Baru']);
        DB::table('villages')->insert(['id'=>43860, 'districts_id'=>3823, 'zipcode'=>'76129', 'name'=>'Graha Indah']);
        DB::table('villages')->insert(['id'=>43861, 'districts_id'=>3823, 'zipcode'=>'76136', 'name'=>'Batu Ampar']);
        //Kecamatan Balikpapan Barat Kota Balikpapan Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3824, 'city_id'=>209, 'name'=>'Balikpapan Barat']);
        DB::table('villages')->insert(['id'=>43862, 'districts_id'=>3824, 'zipcode'=>'76131', 'name'=>'Baru Ilir']);
        DB::table('villages')->insert(['id'=>43863, 'districts_id'=>3824, 'zipcode'=>'76131', 'name'=>'Marga Sari']);
        DB::table('villages')->insert(['id'=>43864, 'districts_id'=>3824, 'zipcode'=>'76131', 'name'=>'Margo Mulyo']);
        DB::table('villages')->insert(['id'=>43865, 'districts_id'=>3824, 'zipcode'=>'76132', 'name'=>'Baru Tengah']);
        DB::table('villages')->insert(['id'=>43866, 'districts_id'=>3824, 'zipcode'=>'76133', 'name'=>'Baru Ulu']);
        DB::table('villages')->insert(['id'=>43867, 'districts_id'=>3824, 'zipcode'=>'76134', 'name'=>'Kariangau']);

        //Kab. Penajam Paser Utara Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>210, 'province_id'=>15, 'type'=>'regencies', 'name'=>'Penajam Paser Utara']);
        //Kecamatan Penajam Kab. Penajam Paser Utara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3825, 'city_id'=>210, 'name'=>'Penajam']);
        DB::table('villages')->insert(['id'=>43868, 'districts_id'=>3825, 'zipcode'=>'76141', 'name'=>'Bukit Subur']);
        DB::table('villages')->insert(['id'=>43869, 'districts_id'=>3825, 'zipcode'=>'76141', 'name'=>'Giri Mukti']);
        DB::table('villages')->insert(['id'=>43870, 'districts_id'=>3825, 'zipcode'=>'76141', 'name'=>'Gunung Seteleng']);
        DB::table('villages')->insert(['id'=>43871, 'districts_id'=>3825, 'zipcode'=>'76141', 'name'=>'Nenang']);
        DB::table('villages')->insert(['id'=>43872, 'districts_id'=>3825, 'zipcode'=>'76141', 'name'=>'Penajam']);
        DB::table('villages')->insert(['id'=>43873, 'districts_id'=>3825, 'zipcode'=>'76142', 'name'=>'Lawe Lawe']);
        DB::table('villages')->insert(['id'=>43874, 'districts_id'=>3825, 'zipcode'=>'76142', 'name'=>'Nipah Nipah']);
        DB::table('villages')->insert(['id'=>43875, 'districts_id'=>3825, 'zipcode'=>'76142', 'name'=>'Sei/sungai Parit']);
        DB::table('villages')->insert(['id'=>43876, 'districts_id'=>3825, 'zipcode'=>'76142', 'name'=>'Sesumpu']);
        DB::table('villages')->insert(['id'=>43877, 'districts_id'=>3825, 'zipcode'=>'76143', 'name'=>'Giripurwa']);
        DB::table('villages')->insert(['id'=>43878, 'districts_id'=>3825, 'zipcode'=>'76143', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>43879, 'districts_id'=>3825, 'zipcode'=>'76143', 'name'=>'Pejala']);
        DB::table('villages')->insert(['id'=>43880, 'districts_id'=>3825, 'zipcode'=>'76143', 'name'=>'Saloloang']);
        DB::table('villages')->insert(['id'=>43881, 'districts_id'=>3825, 'zipcode'=>'76143', 'name'=>'Sidorejo']);
        DB::table('villages')->insert(['id'=>43882, 'districts_id'=>3825, 'zipcode'=>'76143', 'name'=>'Tanjung Tengah']);
        DB::table('villages')->insert(['id'=>43883, 'districts_id'=>3825, 'zipcode'=>'76144', 'name'=>'Bulu Minung']);
        DB::table('villages')->insert(['id'=>43884, 'districts_id'=>3825, 'zipcode'=>'76144', 'name'=>'Petung']);
        DB::table('villages')->insert(['id'=>43885, 'districts_id'=>3825, 'zipcode'=>'76144', 'name'=>'Sotek']);
        DB::table('villages')->insert(['id'=>43886, 'districts_id'=>3825, 'zipcode'=>'76145', 'name'=>'Gersik']);
        DB::table('villages')->insert(['id'=>43887, 'districts_id'=>3825, 'zipcode'=>'76145', 'name'=>'Riko']);
        DB::table('villages')->insert(['id'=>43888, 'districts_id'=>3825, 'zipcode'=>'76145', 'name'=>'Sepan']);
        DB::table('villages')->insert(['id'=>43889, 'districts_id'=>3825, 'zipcode'=>'76146', 'name'=>'Jenebora']);
        DB::table('villages')->insert(['id'=>43890, 'districts_id'=>3825, 'zipcode'=>'76146', 'name'=>'Pantai Lango']);
        //Kecamatan Sepaku Kab. Penajam Paser Utara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3826, 'city_id'=>210, 'name'=>'Sepaku']);
        DB::table('villages')->insert(['id'=>43891, 'districts_id'=>3826, 'zipcode'=>'76146', 'name'=>'Maridan']);
        DB::table('villages')->insert(['id'=>43892, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Argo Mulyo']);
        DB::table('villages')->insert(['id'=>43893, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Binuang']);
        DB::table('villages')->insert(['id'=>43894, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Bukit Raya (sepaku I)']);
        DB::table('villages')->insert(['id'=>43895, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Bumi Harapan']);
        DB::table('villages')->insert(['id'=>43896, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Pemaluan']);
        DB::table('villages')->insert(['id'=>43897, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Semoi Ii']);
        DB::table('villages')->insert(['id'=>43898, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Sukaraja (sepaku Ii)']);
        DB::table('villages')->insert(['id'=>43899, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Suko Mulyo']);
        DB::table('villages')->insert(['id'=>43900, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Telemow']);
        DB::table('villages')->insert(['id'=>43901, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Tengin Baru (sepaku Iii)']);
        DB::table('villages')->insert(['id'=>43902, 'districts_id'=>3826, 'zipcode'=>'76147', 'name'=>'Wonosari']);
        DB::table('villages')->insert(['id'=>43903, 'districts_id'=>3826, 'zipcode'=>'76148', 'name'=>'Karang Jinawi']);
        DB::table('villages')->insert(['id'=>43904, 'districts_id'=>3826, 'zipcode'=>'76148', 'name'=>'Sepaku']);
        DB::table('villages')->insert(['id'=>43905, 'districts_id'=>3826, 'zipcode'=>'76149', 'name'=>'Mentawir']);
        //Kecamatan Waru Kab. Penajam Paser Utara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3827, 'city_id'=>210, 'name'=>'Waru']);
        DB::table('villages')->insert(['id'=>43906, 'districts_id'=>3827, 'zipcode'=>'76284', 'name'=>'Api Api']);
        DB::table('villages')->insert(['id'=>43907, 'districts_id'=>3827, 'zipcode'=>'76284', 'name'=>'Bangun Mulya']);
        DB::table('villages')->insert(['id'=>43908, 'districts_id'=>3827, 'zipcode'=>'76284', 'name'=>'Sesulu']);
        DB::table('villages')->insert(['id'=>43909, 'districts_id'=>3827, 'zipcode'=>'76284', 'name'=>'Waru']);
        //Kecamatan Babulu Kab. Penajam Paser Utara Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3828, 'city_id'=>210, 'name'=>'Babulu']);
        DB::table('villages')->insert(['id'=>43910, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Babulu Darat']);
        DB::table('villages')->insert(['id'=>43911, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Babulu Laut']);
        DB::table('villages')->insert(['id'=>43912, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Gunung Intan']);
        DB::table('villages')->insert(['id'=>43913, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Gunung Makmur']);
        DB::table('villages')->insert(['id'=>43914, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Gunung Mulia']);
        DB::table('villages')->insert(['id'=>43915, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Labangka']);
        DB::table('villages')->insert(['id'=>43916, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Labangka Barat']);
        DB::table('villages')->insert(['id'=>43917, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Rawa Mulia']);
        DB::table('villages')->insert(['id'=>43918, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Rintik']);
        DB::table('villages')->insert(['id'=>43919, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Sebakung Jaya']);
        DB::table('villages')->insert(['id'=>43920, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Sri Raharja']);
        DB::table('villages')->insert(['id'=>43921, 'districts_id'=>3828, 'zipcode'=>'76285', 'name'=>'Sumber Sari']);

        //Kab. Paser Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>211, 'province_id'=>15, 'type'=>'regencies', 'name'=>'Paser']);
        //Kecamatan Tanah Grogot Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3829, 'city_id'=>211, 'name'=>'Tanah Grogot']);
        DB::table('villages')->insert(['id'=>43922, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Janju']);
        DB::table('villages')->insert(['id'=>43923, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Jone']);
        DB::table('villages')->insert(['id'=>43924, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Muara Pasir']);
        DB::table('villages')->insert(['id'=>43925, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Padang Pengrapat']);
        DB::table('villages')->insert(['id'=>43926, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Pasir Baru']);
        DB::table('villages')->insert(['id'=>43927, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Pepara']);
        DB::table('villages')->insert(['id'=>43928, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Pulau Rantau']);
        DB::table('villages')->insert(['id'=>43929, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Rantau Panjang']);
        DB::table('villages')->insert(['id'=>43930, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Sei/sungai Tuak']);
        DB::table('villages')->insert(['id'=>43931, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Sempulang']);
        DB::table('villages')->insert(['id'=>43932, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Senaken']);
        DB::table('villages')->insert(['id'=>43933, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Sungai Langir']);
        DB::table('villages')->insert(['id'=>43934, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Tanah Grogot']);
        DB::table('villages')->insert(['id'=>43935, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Tanah Periuk']);
        DB::table('villages')->insert(['id'=>43936, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Tapis']);
        DB::table('villages')->insert(['id'=>43937, 'districts_id'=>3829, 'zipcode'=>'76251', 'name'=>'Tepian Batang']);
        //Kecamatan Batu Sopang Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3830, 'city_id'=>211, 'name'=>'Batu Sopang']);
        DB::table('villages')->insert(['id'=>43938, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Batu Sopang']);
        DB::table('villages')->insert(['id'=>43939, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Busui']);
        DB::table('villages')->insert(['id'=>43940, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Kasungai']);
        DB::table('villages')->insert(['id'=>43941, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Legai']);
        DB::table('villages')->insert(['id'=>43942, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Rantau Buta']);
        DB::table('villages')->insert(['id'=>43943, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Rantau Layung']);
        DB::table('villages')->insert(['id'=>43944, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Samurangau']);
        DB::table('villages')->insert(['id'=>43945, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Sei/sungai Terik']);
        DB::table('villages')->insert(['id'=>43946, 'districts_id'=>3830, 'zipcode'=>'76252', 'name'=>'Songka']);
        //Kecamatan Muara Samu Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3831, 'city_id'=>211, 'name'=>'Muara Samu']);
        DB::table('villages')->insert(['id'=>43947, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Biu']);
        DB::table('villages')->insert(['id'=>43948, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Libur Dinding']);
        DB::table('villages')->insert(['id'=>43949, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Luan (dilibinti)']);
        DB::table('villages')->insert(['id'=>43950, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Muara Andeh']);
        DB::table('villages')->insert(['id'=>43951, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Muser']);
        DB::table('villages')->insert(['id'=>43952, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Rantau Atas']);
        DB::table('villages')->insert(['id'=>43953, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Rantau Bintungan']);
        DB::table('villages')->insert(['id'=>43954, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Suweto']);
        DB::table('villages')->insert(['id'=>43955, 'districts_id'=>3831, 'zipcode'=>'76252', 'name'=>'Tanjung Pinang']);
        //Kecamatan Muara Komam Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3832, 'city_id'=>211, 'name'=>'Muara Komam']);
        DB::table('villages')->insert(['id'=>43956, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Batu Butok']);
        DB::table('villages')->insert(['id'=>43957, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Binangon']);
        DB::table('villages')->insert(['id'=>43958, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Long Sayo']);
        DB::table('villages')->insert(['id'=>43959, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Lusan']);
        DB::table('villages')->insert(['id'=>43960, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Muara Komam']);
        DB::table('villages')->insert(['id'=>43961, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Muara Kuaro']);
        DB::table('villages')->insert(['id'=>43962, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Muara Langon']);
        DB::table('villages')->insert(['id'=>43963, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Muara Payang']);
        DB::table('villages')->insert(['id'=>43964, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Prayon']);
        DB::table('villages')->insert(['id'=>43965, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Sekuan Makmur']);
        DB::table('villages')->insert(['id'=>43966, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Selerong']);
        DB::table('villages')->insert(['id'=>43967, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Swan Slutung']);
        DB::table('villages')->insert(['id'=>43968, 'districts_id'=>3832, 'zipcode'=>'76253', 'name'=>'Uko']);
        //Kecamatan Batu Engau Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3833, 'city_id'=>211, 'name'=>'Batu Engau']);
        DB::table('villages')->insert(['id'=>43969, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Bai Jaya']);
        DB::table('villages')->insert(['id'=>43970, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Kerang']);
        DB::table('villages')->insert(['id'=>43971, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Kerang Dayo']);
        DB::table('villages')->insert(['id'=>43972, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Langgai']);
        DB::table('villages')->insert(['id'=>43973, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Lomu']);
        DB::table('villages')->insert(['id'=>43974, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Mengkudu']);
        DB::table('villages')->insert(['id'=>43975, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Pengguren Jaya']);
        DB::table('villages')->insert(['id'=>43976, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Petangis']);
        DB::table('villages')->insert(['id'=>43977, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Riwang']);
        DB::table('villages')->insert(['id'=>43978, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Saing Prupuk']);
        DB::table('villages')->insert(['id'=>43979, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Segendang']);
        DB::table('villages')->insert(['id'=>43980, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Tampakan']);
        DB::table('villages')->insert(['id'=>43981, 'districts_id'=>3833, 'zipcode'=>'76261', 'name'=>'Tebru Paser Damai']);
        //Kecamatan Tanjung Harapan Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3834, 'city_id'=>211, 'name'=>'Tanjung Harapan']);
        DB::table('villages')->insert(['id'=>43982, 'districts_id'=>3834, 'zipcode'=>'76261', 'name'=>'Keladen']);
        DB::table('villages')->insert(['id'=>43983, 'districts_id'=>3834, 'zipcode'=>'76261', 'name'=>'Labuangkalo']);
        DB::table('villages')->insert(['id'=>43984, 'districts_id'=>3834, 'zipcode'=>'76261', 'name'=>'Lori']);
        DB::table('villages')->insert(['id'=>43985, 'districts_id'=>3834, 'zipcode'=>'76261', 'name'=>'Random']);
        DB::table('villages')->insert(['id'=>43986, 'districts_id'=>3834, 'zipcode'=>'76261', 'name'=>'Selengot']);
        DB::table('villages')->insert(['id'=>43987, 'districts_id'=>3834, 'zipcode'=>'76261', 'name'=>'Senipah']);
        DB::table('villages')->insert(['id'=>43988, 'districts_id'=>3834, 'zipcode'=>'76261', 'name'=>'Tanjung Aru']);
        //Kecamatan Pasir Belengkong Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3835, 'city_id'=>211, 'name'=>'Pasir Belengkong']);
        DB::table('villages')->insert(['id'=>43989, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Bekoso']);
        DB::table('villages')->insert(['id'=>43990, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Damit']);
        DB::table('villages')->insert(['id'=>43991, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Laburan']);
        DB::table('villages')->insert(['id'=>43992, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Laburan Baru']);
        DB::table('villages')->insert(['id'=>43993, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Lempesu']);
        DB::table('villages')->insert(['id'=>43994, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Olong Pinang']);
        DB::table('villages')->insert(['id'=>43995, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Pasir Belengkong']);
        DB::table('villages')->insert(['id'=>43996, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Sangkuriman']);
        DB::table('villages')->insert(['id'=>43997, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Seniung Jaya']);
        DB::table('villages')->insert(['id'=>43998, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Suatang']);
        DB::table('villages')->insert(['id'=>43999, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Suatang Baru']);
        DB::table('villages')->insert(['id'=>44000, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Suatang Keteban']);
        DB::table('villages')->insert(['id'=>44001, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Suliliran']);
        DB::table('villages')->insert(['id'=>44002, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Suliliran Baru']);
        DB::table('villages')->insert(['id'=>44003, 'districts_id'=>3835, 'zipcode'=>'76271', 'name'=>'Sunge Batu']);
        //Kecamatan Kuaro Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3836, 'city_id'=>211, 'name'=>'Kuaro']);
        DB::table('villages')->insert(['id'=>44004, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Air Mati']);
        DB::table('villages')->insert(['id'=>44005, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Keluang Lolo']);
        DB::table('villages')->insert(['id'=>44006, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Keluang Paser Jaya']);
        DB::table('villages')->insert(['id'=>44007, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Kendarom']);
        DB::table('villages')->insert(['id'=>44008, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Kerta Bumi']);
        DB::table('villages')->insert(['id'=>44009, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Klempang Sari']);
        DB::table('villages')->insert(['id'=>44010, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Kuaro']);
        DB::table('villages')->insert(['id'=>44011, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Modang']);
        DB::table('villages')->insert(['id'=>44012, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Padang Jaya']);
        DB::table('villages')->insert(['id'=>44013, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Pasir Mayang']);
        DB::table('villages')->insert(['id'=>44014, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Pondong Baru']);
        DB::table('villages')->insert(['id'=>44015, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Rangan']);
        DB::table('villages')->insert(['id'=>44016, 'districts_id'=>3836, 'zipcode'=>'76281', 'name'=>'Sandeley']);
        //Kecamatan Long Ikis Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3837, 'city_id'=>211, 'name'=>'Long Ikis']);
        DB::table('villages')->insert(['id'=>44017, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Atang Pait']);
        DB::table('villages')->insert(['id'=>44018, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Belimbing']);
        DB::table('villages')->insert(['id'=>44019, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Brewe']);
        DB::table('villages')->insert(['id'=>44020, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Bukit Seloka']);
        DB::table('villages')->insert(['id'=>44021, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Jemparing']);
        DB::table('villages')->insert(['id'=>44022, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Kayungo']);
        DB::table('villages')->insert(['id'=>44023, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Kayungo Sari']);
        DB::table('villages')->insert(['id'=>44024, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Kerta Bakti']);
        DB::table('villages')->insert(['id'=>44025, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Krayan Bahagia']);
        DB::table('villages')->insert(['id'=>44026, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Krayan Jaya']);
        DB::table('villages')->insert(['id'=>44027, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Krayan Makmur']);
        DB::table('villages')->insert(['id'=>44028, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Krayan Sentosa']);
        DB::table('villages')->insert(['id'=>44029, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Lombok']);
        DB::table('villages')->insert(['id'=>44030, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Long Gelang']);
        DB::table('villages')->insert(['id'=>44031, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Long Ikis']);
        DB::table('villages')->insert(['id'=>44032, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Muara Adang']);
        DB::table('villages')->insert(['id'=>44033, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Muara Adang I']);
        DB::table('villages')->insert(['id'=>44034, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Olung']);
        DB::table('villages')->insert(['id'=>44035, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Pait']);
        DB::table('villages')->insert(['id'=>44036, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Samuntai']);
        DB::table('villages')->insert(['id'=>44037, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Sawit Jaya']);
        DB::table('villages')->insert(['id'=>44038, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Sekurou Jaya']);
        DB::table('villages')->insert(['id'=>44039, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Tajer Mulya']);
        DB::table('villages')->insert(['id'=>44040, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Tajur']);
        DB::table('villages')->insert(['id'=>44041, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Teluk Waru']);
        DB::table('villages')->insert(['id'=>44042, 'districts_id'=>3837, 'zipcode'=>'76282', 'name'=>'Tiwei']);
        //Kecamatan Long Kali Kab. Paser Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3838, 'city_id'=>211, 'name'=>'Long Kali']);
        DB::table('villages')->insert(['id'=>44043, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Bente/tualan']);
        DB::table('villages')->insert(['id'=>44044, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Gunungputar']);
        DB::table('villages')->insert(['id'=>44045, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Kepala Telake']);
        DB::table('villages')->insert(['id'=>44046, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Long Kali']);
        DB::table('villages')->insert(['id'=>44047, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Makmur Jaya']);
        DB::table('villages')->insert(['id'=>44048, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Maruat']);
        DB::table('villages')->insert(['id'=>44049, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Mendik']);
        DB::table('villages')->insert(['id'=>44050, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Mendik Bhakti']);
        DB::table('villages')->insert(['id'=>44051, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Mendik Karya']);
        DB::table('villages')->insert(['id'=>44052, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Mendik Makmur']);
        DB::table('villages')->insert(['id'=>44053, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Muara Lambakan']);
        DB::table('villages')->insert(['id'=>44054, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Muara Pias']);
        DB::table('villages')->insert(['id'=>44055, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Muara Telake']);
        DB::table('villages')->insert(['id'=>44056, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Muara Toyu']);
        DB::table('villages')->insert(['id'=>44057, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Muaraadang Ii']);
        DB::table('villages')->insert(['id'=>44058, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Munggu']);
        DB::table('villages')->insert(['id'=>44059, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Perkuwin']);
        DB::table('villages')->insert(['id'=>44060, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Petiku']);
        DB::table('villages')->insert(['id'=>44061, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Pinang Jatus']);
        DB::table('villages')->insert(['id'=>44062, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Putang']);
        DB::table('villages')->insert(['id'=>44063, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Sebakung']);
        DB::table('villages')->insert(['id'=>44064, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Sebakung Iv']);
        DB::table('villages')->insert(['id'=>44065, 'districts_id'=>3838, 'zipcode'=>'76283', 'name'=>'Sebakung Makmur']);

        //Kab. Berau Provinsi Kalimantan Timur
        DB::table('cities')->insert(['id'=>212, 'province_id'=>15, 'type'=>'regencies', 'name'=>'Berau']);
        //Kecamatan Tanjung Redeb Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3839, 'city_id'=>212, 'name'=>'Tanjung Redeb']);
        DB::table('villages')->insert(['id'=>44066, 'districts_id'=>3839, 'zipcode'=>'77311', 'name'=>'Gunung Panjang']);
        DB::table('villages')->insert(['id'=>44067, 'districts_id'=>3839, 'zipcode'=>'77312', 'name'=>'Bugis']);
        DB::table('villages')->insert(['id'=>44068, 'districts_id'=>3839, 'zipcode'=>'77315', 'name'=>'Gayam']);
        DB::table('villages')->insert(['id'=>44069, 'districts_id'=>3839, 'zipcode'=>'77315', 'name'=>'Karang Ambun']);
        DB::table('villages')->insert(['id'=>44070, 'districts_id'=>3839, 'zipcode'=>'77315', 'name'=>'Sei/sungai Bedungun']);
        DB::table('villages')->insert(['id'=>44071, 'districts_id'=>3839, 'zipcode'=>'77315', 'name'=>'Tanjung Redeb']);
        //Kecamatan Teluk Bayur Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3840, 'city_id'=>212, 'name'=>'Teluk Bayur']);
        DB::table('villages')->insert(['id'=>44072, 'districts_id'=>3840, 'zipcode'=>'77313', 'name'=>'Rinding']);
        DB::table('villages')->insert(['id'=>44073, 'districts_id'=>3840, 'zipcode'=>'77315', 'name'=>'Teluk Bayur']);
        DB::table('villages')->insert(['id'=>44074, 'districts_id'=>3840, 'zipcode'=>'77315', 'name'=>'Tumbit Melayu']);
        DB::table('villages')->insert(['id'=>44075, 'districts_id'=>3840, 'zipcode'=>'77352', 'name'=>'Labanan Jaya']);
        DB::table('villages')->insert(['id'=>44076, 'districts_id'=>3840, 'zipcode'=>'77352', 'name'=>'Labanan Makarti']);
        DB::table('villages')->insert(['id'=>44077, 'districts_id'=>3840, 'zipcode'=>'77352', 'name'=>'Labanan Makmur']);
        //Kecamatan Gunung Tabur Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3841, 'city_id'=>212, 'name'=>'Gunung Tabur']);
        DB::table('villages')->insert(['id'=>44078, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Batu-batu']);
        DB::table('villages')->insert(['id'=>44079, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Birang']);
        DB::table('villages')->insert(['id'=>44080, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Gunung Tabur']);
        DB::table('villages')->insert(['id'=>44081, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Maluang']);
        DB::table('villages')->insert(['id'=>44082, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Melati Jaya']);
        DB::table('villages')->insert(['id'=>44083, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Merancang Ilir']);
        DB::table('villages')->insert(['id'=>44084, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Merancang Ulu']);
        DB::table('villages')->insert(['id'=>44085, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Pulau Besing']);
        DB::table('villages')->insert(['id'=>44086, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Sambakungan']);
        DB::table('villages')->insert(['id'=>44087, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Samburakat']);
        DB::table('villages')->insert(['id'=>44088, 'districts_id'=>3841, 'zipcode'=>'77352', 'name'=>'Tasuk']);
        //Kecamatan Segah Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3842, 'city_id'=>212, 'name'=>'Segah']);
        DB::table('villages')->insert(['id'=>44089, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Bukit Makmur']);
        DB::table('villages')->insert(['id'=>44090, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Gunung Sari']);
        DB::table('villages')->insert(['id'=>44091, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Harapan Jaya']);
        DB::table('villages')->insert(['id'=>44092, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Long Ayan']);
        DB::table('villages')->insert(['id'=>44093, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Long Ayap']);
        DB::table('villages')->insert(['id'=>44094, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Long Laay/laai']);
        DB::table('villages')->insert(['id'=>44095, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Pandan Sari']);
        DB::table('villages')->insert(['id'=>44096, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Punan Mahkam']);
        DB::table('villages')->insert(['id'=>44097, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Punan Malinau']);
        DB::table('villages')->insert(['id'=>44098, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Punan Segah']);
        DB::table('villages')->insert(['id'=>44099, 'districts_id'=>3842, 'zipcode'=>'77361', 'name'=>'Tepian Buah']);
        //Kecamatan Kelay Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3843, 'city_id'=>212, 'name'=>'Kelay']);
        DB::table('villages')->insert(['id'=>44100, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Lesan Dayak']);
        DB::table('villages')->insert(['id'=>44101, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Long Beliu']);
        DB::table('villages')->insert(['id'=>44102, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Long Duhung']);
        DB::table('villages')->insert(['id'=>44103, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Long Keluh']);
        DB::table('villages')->insert(['id'=>44104, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Long Lamcin']);
        DB::table('villages')->insert(['id'=>44105, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Long Pelay']);
        DB::table('villages')->insert(['id'=>44106, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Long Sului']);
        DB::table('villages')->insert(['id'=>44107, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Mapulu']);
        DB::table('villages')->insert(['id'=>44108, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Merabu']);
        DB::table('villages')->insert(['id'=>44109, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Merapun']);
        DB::table('villages')->insert(['id'=>44110, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Merasa']);
        DB::table('villages')->insert(['id'=>44111, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Muara Lesan']);
        DB::table('villages')->insert(['id'=>44112, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Panaan']);
        DB::table('villages')->insert(['id'=>44113, 'districts_id'=>3843, 'zipcode'=>'77362', 'name'=>'Sido Bangen']);
        //Kecamatan Sambaliung Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3844, 'city_id'=>212, 'name'=>'Sambaliung']);
        DB::table('villages')->insert(['id'=>44114, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Bebanir (sei Bebanir Bangun)']);
        DB::table('villages')->insert(['id'=>44115, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Bena Baru']);
        DB::table('villages')->insert(['id'=>44116, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Gurimbang']);
        DB::table('villages')->insert(['id'=>44117, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Inaran']);
        DB::table('villages')->insert(['id'=>44118, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Long Lanuk']);
        DB::table('villages')->insert(['id'=>44119, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Pegat Bukur']);
        DB::table('villages')->insert(['id'=>44120, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Pesayan']);
        DB::table('villages')->insert(['id'=>44121, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Pilanjau']);
        DB::table('villages')->insert(['id'=>44122, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Rantau Panjang']);
        DB::table('villages')->insert(['id'=>44123, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Sambaliung']);
        DB::table('villages')->insert(['id'=>44124, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Suaran']);
        DB::table('villages')->insert(['id'=>44125, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Sukan Tengah']);
        DB::table('villages')->insert(['id'=>44126, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Tanjung Perangat']);
        DB::table('villages')->insert(['id'=>44127, 'districts_id'=>3844, 'zipcode'=>'77371', 'name'=>'Tumbit Dayak']);
        //Kecamatan Biatan Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3845, 'city_id'=>212, 'name'=>'Biatan']);
        DB::table('villages')->insert(['id'=>44128, 'districts_id'=>3845, 'zipcode'=>'77372', 'name'=>'Biatan Bapinang']);
        DB::table('villages')->insert(['id'=>44129, 'districts_id'=>3845, 'zipcode'=>'77372', 'name'=>'Biatan Baru']);
        DB::table('villages')->insert(['id'=>44130, 'districts_id'=>3845, 'zipcode'=>'77372', 'name'=>'Biatan Ilir']);
        DB::table('villages')->insert(['id'=>44131, 'districts_id'=>3845, 'zipcode'=>'77372', 'name'=>'Biatan Lempake']);
        DB::table('villages')->insert(['id'=>44132, 'districts_id'=>3845, 'zipcode'=>'77372', 'name'=>'Biatan Ulu']);
        DB::table('villages')->insert(['id'=>44133, 'districts_id'=>3845, 'zipcode'=>'77372', 'name'=>'Bukit Makmur Jaya']);
        DB::table('villages')->insert(['id'=>44134, 'districts_id'=>3845, 'zipcode'=>'77372', 'name'=>'Karangan']);
        DB::table('villages')->insert(['id'=>44135, 'districts_id'=>3845, 'zipcode'=>'77372', 'name'=>'Manunggal Jaya']);
        //Kecamatan Talisayan Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3846, 'city_id'=>212, 'name'=>'Talisayan']);
        DB::table('villages')->insert(['id'=>44136, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Bumi Jaya']);
        DB::table('villages')->insert(['id'=>44137, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Campur Sari']);
        DB::table('villages')->insert(['id'=>44138, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Dumaring']);
        DB::table('villages')->insert(['id'=>44139, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Eka Sapta']);
        DB::table('villages')->insert(['id'=>44140, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Purna Sari Jaya']);
        DB::table('villages')->insert(['id'=>44141, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Suka Murya']);
        DB::table('villages')->insert(['id'=>44142, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Sumber Mulia']);
        DB::table('villages')->insert(['id'=>44143, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Talisayan']);
        DB::table('villages')->insert(['id'=>44144, 'districts_id'=>3846, 'zipcode'=>'77372', 'name'=>'Tunggal Bumi']);
        //Kecamatan Tabalar Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3847, 'city_id'=>212, 'name'=>'Tabalar']);
        DB::table('villages')->insert(['id'=>44145, 'districts_id'=>3847, 'zipcode'=>'77372', 'name'=>'Buyung-buyung (radak)']);
        DB::table('villages')->insert(['id'=>44146, 'districts_id'=>3847, 'zipcode'=>'77372', 'name'=>'Harapan Maju']);
        DB::table('villages')->insert(['id'=>44147, 'districts_id'=>3847, 'zipcode'=>'77372', 'name'=>'Semurut']);
        DB::table('villages')->insert(['id'=>44148, 'districts_id'=>3847, 'zipcode'=>'77372', 'name'=>'Tabalar Muara']);
        DB::table('villages')->insert(['id'=>44149, 'districts_id'=>3847, 'zipcode'=>'77372', 'name'=>'Tabalar Ulu']);
        DB::table('villages')->insert(['id'=>44150, 'districts_id'=>3847, 'zipcode'=>'77372', 'name'=>'Tubaan']);
        //Kecamatan Batu Putih Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3848, 'city_id'=>212, 'name'=>'Batu Putih']);
        DB::table('villages')->insert(['id'=>44151, 'districts_id'=>3848, 'zipcode'=>'77372', 'name'=>'Kayu Indah']);
        DB::table('villages')->insert(['id'=>44152, 'districts_id'=>3848, 'zipcode'=>'77372', 'name'=>'Sumber Agung']);
        DB::table('villages')->insert(['id'=>44153, 'districts_id'=>3848, 'zipcode'=>'77372', 'name'=>'Tembudan']);
        DB::table('villages')->insert(['id'=>44154, 'districts_id'=>3848, 'zipcode'=>'77373', 'name'=>'Ampen Medang']);
        DB::table('villages')->insert(['id'=>44155, 'districts_id'=>3848, 'zipcode'=>'77373', 'name'=>'Balik Kukuk (balikukup)']);
        DB::table('villages')->insert(['id'=>44156, 'districts_id'=>3848, 'zipcode'=>'77373', 'name'=>'Batu Putih']);
        DB::table('villages')->insert(['id'=>44157, 'districts_id'=>3848, 'zipcode'=>'77373', 'name'=>'Lobang Kelatak']);
        //Kecamatan Biduk-biduk Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3849, 'city_id'=>212, 'name'=>'Biduk-biduk']);
        DB::table('villages')->insert(['id'=>44158, 'districts_id'=>3849, 'zipcode'=>'77373', 'name'=>'Biduk-biduk']);
        DB::table('villages')->insert(['id'=>44159, 'districts_id'=>3849, 'zipcode'=>'77373', 'name'=>'Giring-giring']);
        DB::table('villages')->insert(['id'=>44160, 'districts_id'=>3849, 'zipcode'=>'77373', 'name'=>'Pantai Harapan']);
        DB::table('villages')->insert(['id'=>44161, 'districts_id'=>3849, 'zipcode'=>'77373', 'name'=>'Tanjung Perepat']);
        DB::table('villages')->insert(['id'=>44162, 'districts_id'=>3849, 'zipcode'=>'77373', 'name'=>'Teluk Sulaiman']);
        DB::table('villages')->insert(['id'=>44163, 'districts_id'=>3849, 'zipcode'=>'77373', 'name'=>'Teluk Sumbang']);
        //Kecamatan Derawan (pulau Derawan) Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3850, 'city_id'=>212, 'name'=>'Derawan (pulau Derawan)']);
        DB::table('villages')->insert(['id'=>44164, 'districts_id'=>3850, 'zipcode'=>'77381', 'name'=>'Kasai']);
        DB::table('villages')->insert(['id'=>44165, 'districts_id'=>3850, 'zipcode'=>'77381', 'name'=>'Pegat Bertumbuk']);
        DB::table('villages')->insert(['id'=>44166, 'districts_id'=>3850, 'zipcode'=>'77381', 'name'=>'Pulau Derawan']);
        DB::table('villages')->insert(['id'=>44167, 'districts_id'=>3850, 'zipcode'=>'77381', 'name'=>'Tanjung Batu']);
        DB::table('villages')->insert(['id'=>44168, 'districts_id'=>3850, 'zipcode'=>'77381', 'name'=>'Teluk Semanting']);
        //Kecamatan Maratua Kab. Berau Provinsi Kalimantan Timur
        DB::table('districts')->insert(['id'=>3851, 'city_id'=>212, 'name'=>'Maratua']);
        DB::table('villages')->insert(['id'=>44169, 'districts_id'=>3851, 'zipcode'=>'77381', 'name'=>'Maratua Bohesilian']);
        DB::table('villages')->insert(['id'=>44170, 'districts_id'=>3851, 'zipcode'=>'77381', 'name'=>'Maratua Payung-payung']);
        DB::table('villages')->insert(['id'=>44171, 'districts_id'=>3851, 'zipcode'=>'77381', 'name'=>'Maratua Teluk Alulu']);
        DB::table('villages')->insert(['id'=>44172, 'districts_id'=>3851, 'zipcode'=>'77381', 'name'=>'Maratua Teluk Harapan']);
    }
}
