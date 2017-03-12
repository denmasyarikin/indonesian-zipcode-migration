<?php

use Illuminate\Database\Seeder;

class SumateraBarat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>32, 'name'=>'Sumatera Barat']);

        //Kota Padang Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>435, 'province_id'=>32, 'type'=>'city', 'name'=>'Padang']);
        //Kecamatan Padang Barat Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6953, 'city_id'=>435, 'name'=>'Padang Barat']);
        DB::table('villages')->insert(['id'=>79230, 'districts_id'=>6953, 'zipcode'=>'25111', 'name'=>'Rimbo Kaluang']);
        DB::table('villages')->insert(['id'=>79231, 'districts_id'=>6953, 'zipcode'=>'25112', 'name'=>'Kampung Jao']);
        DB::table('villages')->insert(['id'=>79232, 'districts_id'=>6953, 'zipcode'=>'25112', 'name'=>'Padang Pasir']);
        DB::table('villages')->insert(['id'=>79233, 'districts_id'=>6953, 'zipcode'=>'25114', 'name'=>'Flamboyan (plamboyan Baru)']);
        DB::table('villages')->insert(['id'=>79234, 'districts_id'=>6953, 'zipcode'=>'25114', 'name'=>'Ujung Gurun']);
        DB::table('villages')->insert(['id'=>79235, 'districts_id'=>6953, 'zipcode'=>'25115', 'name'=>'Purus']);
        DB::table('villages')->insert(['id'=>79236, 'districts_id'=>6953, 'zipcode'=>'25117', 'name'=>'Olo']);
        DB::table('villages')->insert(['id'=>79237, 'districts_id'=>6953, 'zipcode'=>'25118', 'name'=>'Belakang Tangsi']);
        DB::table('villages')->insert(['id'=>79238, 'districts_id'=>6953, 'zipcode'=>'25118', 'name'=>'Berok Nipah']);
        DB::table('villages')->insert(['id'=>79239, 'districts_id'=>6953, 'zipcode'=>'25119', 'name'=>'Kampung Pondok']);
        //Kecamatan Padang Timur Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6954, 'city_id'=>435, 'name'=>'Padang Timur']);
        DB::table('villages')->insert(['id'=>79240, 'districts_id'=>6954, 'zipcode'=>'25121', 'name'=>'Sawahan']);
        DB::table('villages')->insert(['id'=>79241, 'districts_id'=>6954, 'zipcode'=>'25121', 'name'=>'Sawahan Timur']);
        DB::table('villages')->insert(['id'=>79242, 'districts_id'=>6954, 'zipcode'=>'25122', 'name'=>'Ganting Parak Gadang']);
        DB::table('villages')->insert(['id'=>79243, 'districts_id'=>6954, 'zipcode'=>'25123', 'name'=>'Parak Gadang Timur']);
        DB::table('villages')->insert(['id'=>79244, 'districts_id'=>6954, 'zipcode'=>'25123', 'name'=>'Simpang Haru']);
        DB::table('villages')->insert(['id'=>79245, 'districts_id'=>6954, 'zipcode'=>'25125', 'name'=>'Kubu Marapalam']);
        DB::table('villages')->insert(['id'=>79246, 'districts_id'=>6954, 'zipcode'=>'25126', 'name'=>'Andalas']);
        DB::table('villages')->insert(['id'=>79247, 'districts_id'=>6954, 'zipcode'=>'25126', 'name'=>'Kubu Parak Karakah (dalam)']);
        DB::table('villages')->insert(['id'=>79248, 'districts_id'=>6954, 'zipcode'=>'25129', 'name'=>'Jati']);
        DB::table('villages')->insert(['id'=>79249, 'districts_id'=>6954, 'zipcode'=>'25129', 'name'=>'Jati Baru']);
        //Kecamatan Padang Utara Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6955, 'city_id'=>435, 'name'=>'Padang Utara']);
        DB::table('villages')->insert(['id'=>79250, 'districts_id'=>6955, 'zipcode'=>'25132', 'name'=>'Air Tawar Barat']);
        DB::table('villages')->insert(['id'=>79251, 'districts_id'=>6955, 'zipcode'=>'25132', 'name'=>'Air Tawar Timur']);
        DB::table('villages')->insert(['id'=>79252, 'districts_id'=>6955, 'zipcode'=>'25133', 'name'=>'Ulak Karang Utara']);
        DB::table('villages')->insert(['id'=>79253, 'districts_id'=>6955, 'zipcode'=>'25134', 'name'=>'Ulak Karang Selatan']);
        DB::table('villages')->insert(['id'=>79254, 'districts_id'=>6955, 'zipcode'=>'25136', 'name'=>'Lolong Belanti']);
        DB::table('villages')->insert(['id'=>79255, 'districts_id'=>6955, 'zipcode'=>'25137', 'name'=>'Gunung Pangilun']);
        DB::table('villages')->insert(['id'=>79256, 'districts_id'=>6955, 'zipcode'=>'25139', 'name'=>'Alai Parak Kopi']);
        //Kecamatan Nanggalo Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6956, 'city_id'=>435, 'name'=>'Nanggalo']);
        DB::table('villages')->insert(['id'=>79257, 'districts_id'=>6956, 'zipcode'=>'25142', 'name'=>'Kampung Lapai']);
        DB::table('villages')->insert(['id'=>79258, 'districts_id'=>6956, 'zipcode'=>'25143', 'name'=>'Kampung Olo']);
        DB::table('villages')->insert(['id'=>79259, 'districts_id'=>6956, 'zipcode'=>'25144', 'name'=>'Tabing Banda Gadang']);
        DB::table('villages')->insert(['id'=>79260, 'districts_id'=>6956, 'zipcode'=>'25145', 'name'=>'Gurun Lawas/laweh']);
        DB::table('villages')->insert(['id'=>79261, 'districts_id'=>6956, 'zipcode'=>'25146', 'name'=>'Surau Gadang']);
        DB::table('villages')->insert(['id'=>79262, 'districts_id'=>6956, 'zipcode'=>'25147', 'name'=>'Kurao Pagang']);
        //Kecamatan Kuranji Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6957, 'city_id'=>435, 'name'=>'Kuranji']);
        DB::table('villages')->insert(['id'=>79263, 'districts_id'=>6957, 'zipcode'=>'25151', 'name'=>'Anduring']);
        DB::table('villages')->insert(['id'=>79264, 'districts_id'=>6957, 'zipcode'=>'25152', 'name'=>'Pasar Ambacang']);
        DB::table('villages')->insert(['id'=>79265, 'districts_id'=>6957, 'zipcode'=>'25153', 'name'=>'Lubuk Lintah']);
        DB::table('villages')->insert(['id'=>79266, 'districts_id'=>6957, 'zipcode'=>'25154', 'name'=>'Ampang']);
        DB::table('villages')->insert(['id'=>79267, 'districts_id'=>6957, 'zipcode'=>'25155', 'name'=>'Kalumbuk']);
        DB::table('villages')->insert(['id'=>79268, 'districts_id'=>6957, 'zipcode'=>'25156', 'name'=>'Korong Gadang']);
        DB::table('villages')->insert(['id'=>79269, 'districts_id'=>6957, 'zipcode'=>'25157', 'name'=>'Kuranji']);
        DB::table('villages')->insert(['id'=>79270, 'districts_id'=>6957, 'zipcode'=>'25158', 'name'=>'Gunung Sarik']);
        DB::table('villages')->insert(['id'=>79271, 'districts_id'=>6957, 'zipcode'=>'25159', 'name'=>'Sei/sungai Sapih']);
        //Kecamatan Pauh Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6958, 'city_id'=>435, 'name'=>'Pauh']);
        DB::table('villages')->insert(['id'=>79272, 'districts_id'=>6958, 'zipcode'=>'25161', 'name'=>'Binuang Kampung Dalam']);
        DB::table('villages')->insert(['id'=>79273, 'districts_id'=>6958, 'zipcode'=>'25161', 'name'=>'Pisang']);
        DB::table('villages')->insert(['id'=>79274, 'districts_id'=>6958, 'zipcode'=>'25162', 'name'=>'Cupak Tangah']);
        DB::table('villages')->insert(['id'=>79275, 'districts_id'=>6958, 'zipcode'=>'25162', 'name'=>'Piai Tangah']);
        DB::table('villages')->insert(['id'=>79276, 'districts_id'=>6958, 'zipcode'=>'25163', 'name'=>'Kepala/kapalo Koto']);
        DB::table('villages')->insert(['id'=>79277, 'districts_id'=>6958, 'zipcode'=>'25163', 'name'=>'Limau Manis Selatan']);
        DB::table('villages')->insert(['id'=>79278, 'districts_id'=>6958, 'zipcode'=>'25164', 'name'=>'Koto Luar']);
        DB::table('villages')->insert(['id'=>79279, 'districts_id'=>6958, 'zipcode'=>'25166', 'name'=>'Limau Manis']);
        DB::table('villages')->insert(['id'=>79280, 'districts_id'=>6958, 'zipcode'=>'25168', 'name'=>'Lambung Bukit/bukik']);
        //Kecamatan Koto Tangah Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6959, 'city_id'=>435, 'name'=>'Koto Tangah']);
        DB::table('villages')->insert(['id'=>79281, 'districts_id'=>6959, 'zipcode'=>'25171', 'name'=>'Balai Gadang']);
        DB::table('villages')->insert(['id'=>79282, 'districts_id'=>6959, 'zipcode'=>'25171', 'name'=>'Batipuh Panjang']);
        DB::table('villages')->insert(['id'=>79283, 'districts_id'=>6959, 'zipcode'=>'25171', 'name'=>'Bungo Pasang']);
        DB::table('villages')->insert(['id'=>79284, 'districts_id'=>6959, 'zipcode'=>'25171', 'name'=>'Koto Pulai']);
        DB::table('villages')->insert(['id'=>79285, 'districts_id'=>6959, 'zipcode'=>'25171', 'name'=>'Parupuk Tabing']);
        DB::table('villages')->insert(['id'=>79286, 'districts_id'=>6959, 'zipcode'=>'25171', 'name'=>'Pasir/pasie Nan Tigo']);
        DB::table('villages')->insert(['id'=>79287, 'districts_id'=>6959, 'zipcode'=>'25172', 'name'=>'Batang Kabung (k Ganting)']);
        DB::table('villages')->insert(['id'=>79288, 'districts_id'=>6959, 'zipcode'=>'25173', 'name'=>'Lubuk Buaya']);
        DB::table('villages')->insert(['id'=>79289, 'districts_id'=>6959, 'zipcode'=>'25173', 'name'=>'Padang Sarai']);
        DB::table('villages')->insert(['id'=>79290, 'districts_id'=>6959, 'zipcode'=>'25175', 'name'=>'Koto Panjang Ikua Koto']);
        DB::table('villages')->insert(['id'=>79291, 'districts_id'=>6959, 'zipcode'=>'25175', 'name'=>'Lubuk Minturun']);
        DB::table('villages')->insert(['id'=>79292, 'districts_id'=>6959, 'zipcode'=>'25176', 'name'=>'Air Pacah']);
        DB::table('villages')->insert(['id'=>79293, 'districts_id'=>6959, 'zipcode'=>'25176', 'name'=>'Dadok Tunggul Hitam']);
        //Kecamatan Padang Selatan Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6960, 'city_id'=>435, 'name'=>'Padang Selatan']);
        DB::table('villages')->insert(['id'=>79294, 'districts_id'=>6960, 'zipcode'=>'25211', 'name'=>'Alang Laweh']);
        DB::table('villages')->insert(['id'=>79295, 'districts_id'=>6960, 'zipcode'=>'25211', 'name'=>'Belakang Pondok']);
        DB::table('villages')->insert(['id'=>79296, 'districts_id'=>6960, 'zipcode'=>'25212', 'name'=>'Ranah Parak Rumbio']);
        DB::table('villages')->insert(['id'=>79297, 'districts_id'=>6960, 'zipcode'=>'25213', 'name'=>'Pasar Gadang']);
        DB::table('villages')->insert(['id'=>79298, 'districts_id'=>6960, 'zipcode'=>'25214', 'name'=>'Seberang Padang']);
        DB::table('villages')->insert(['id'=>79299, 'districts_id'=>6960, 'zipcode'=>'25215', 'name'=>'Batang Arau']);
        DB::table('villages')->insert(['id'=>79300, 'districts_id'=>6960, 'zipcode'=>'25215', 'name'=>'Bukik/bukit Gado-gado']);
        DB::table('villages')->insert(['id'=>79301, 'districts_id'=>6960, 'zipcode'=>'25215', 'name'=>'Seberang Palinggam']);
        DB::table('villages')->insert(['id'=>79302, 'districts_id'=>6960, 'zipcode'=>'25216', 'name'=>'Mato/mata Air']);
        DB::table('villages')->insert(['id'=>79303, 'districts_id'=>6960, 'zipcode'=>'25216', 'name'=>'Rawang']);
        DB::table('villages')->insert(['id'=>79304, 'districts_id'=>6960, 'zipcode'=>'25217', 'name'=>'Air Manis (aia Manih)']);
        DB::table('villages')->insert(['id'=>79305, 'districts_id'=>6960, 'zipcode'=>'25217', 'name'=>'Teluk Bayur/taluak Bayua']);
        //Kecamatan Lubuk Begalung Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6961, 'city_id'=>435, 'name'=>'Lubuk Begalung']);
        DB::table('villages')->insert(['id'=>79306, 'districts_id'=>6961, 'zipcode'=>'25221', 'name'=>'Gurun Laweh/lawas']);
        DB::table('villages')->insert(['id'=>79307, 'districts_id'=>6961, 'zipcode'=>'25221', 'name'=>'Lubuk Begalung']);
        DB::table('villages')->insert(['id'=>79308, 'districts_id'=>6961, 'zipcode'=>'25222', 'name'=>'Banuaran']);
        DB::table('villages')->insert(['id'=>79309, 'districts_id'=>6961, 'zipcode'=>'25222', 'name'=>'Tanjung Aur/tanjuang Aua']);
        DB::table('villages')->insert(['id'=>79310, 'districts_id'=>6961, 'zipcode'=>'25223', 'name'=>'Batang Taba Nan Xx']);
        DB::table('villages')->insert(['id'=>79311, 'districts_id'=>6961, 'zipcode'=>'25223', 'name'=>'Parak Laweh Pulau Air Nan Xx']);
        DB::table('villages')->insert(['id'=>79312, 'districts_id'=>6961, 'zipcode'=>'25224', 'name'=>'Pitameh Tanjung Saba Nan Xx']);
        DB::table('villages')->insert(['id'=>79313, 'districts_id'=>6961, 'zipcode'=>'25224', 'name'=>'Tanah Sirah Piai Nan Xx']);
        DB::table('villages')->insert(['id'=>79314, 'districts_id'=>6961, 'zipcode'=>'25225', 'name'=>'Cengkeh/cangkeh Nan Xx']);
        DB::table('villages')->insert(['id'=>79315, 'districts_id'=>6961, 'zipcode'=>'25225', 'name'=>'Kampung Baru Nan Xx']);
        DB::table('villages')->insert(['id'=>79316, 'districts_id'=>6961, 'zipcode'=>'25225', 'name'=>'Kampung Jua Nan Xx']);
        DB::table('villages')->insert(['id'=>79317, 'districts_id'=>6961, 'zipcode'=>'25226', 'name'=>'Pagambiran Ampulu (pangambiran Ampalu) Nan Xx']);
        DB::table('villages')->insert(['id'=>79318, 'districts_id'=>6961, 'zipcode'=>'25227', 'name'=>'Gates Nan Xx']);
        DB::table('villages')->insert(['id'=>79319, 'districts_id'=>6961, 'zipcode'=>'25227', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>79320, 'districts_id'=>6961, 'zipcode'=>'25227', 'name'=>'Pampangan Nan Xx']);
        //Kecamatan Lubuk Kilangan Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6962, 'city_id'=>435, 'name'=>'Lubuk Kilangan']);
        DB::table('villages')->insert(['id'=>79321, 'districts_id'=>6962, 'zipcode'=>'25231', 'name'=>'Bandar Buat (banda Buek)']);
        DB::table('villages')->insert(['id'=>79322, 'districts_id'=>6962, 'zipcode'=>'25232', 'name'=>'Koto Lalang']);
        DB::table('villages')->insert(['id'=>79323, 'districts_id'=>6962, 'zipcode'=>'25233', 'name'=>'Padang Besi']);
        DB::table('villages')->insert(['id'=>79324, 'districts_id'=>6962, 'zipcode'=>'25234', 'name'=>'Tarantang']);
        DB::table('villages')->insert(['id'=>79325, 'districts_id'=>6962, 'zipcode'=>'25235', 'name'=>'Beringin/baringin']);
        DB::table('villages')->insert(['id'=>79326, 'districts_id'=>6962, 'zipcode'=>'25236', 'name'=>'Batu Gadang']);
        DB::table('villages')->insert(['id'=>79327, 'districts_id'=>6962, 'zipcode'=>'25237', 'name'=>'Indarung']);
        //Kecamatan Bungus Teluk Kabung Kota Padang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6963, 'city_id'=>435, 'name'=>'Bungus Teluk Kabung']);
        DB::table('villages')->insert(['id'=>79328, 'districts_id'=>6963, 'zipcode'=>'25237', 'name'=>'Bungus Barat']);
        DB::table('villages')->insert(['id'=>79329, 'districts_id'=>6963, 'zipcode'=>'25237', 'name'=>'Bungus Selatan']);
        DB::table('villages')->insert(['id'=>79330, 'districts_id'=>6963, 'zipcode'=>'25237', 'name'=>'Bungus Timur']);
        DB::table('villages')->insert(['id'=>79331, 'districts_id'=>6963, 'zipcode'=>'25237', 'name'=>'Teluk Kabung Selatan']);
        DB::table('villages')->insert(['id'=>79332, 'districts_id'=>6963, 'zipcode'=>'25237', 'name'=>'Teluk Kabung Tengah']);
        DB::table('villages')->insert(['id'=>79333, 'districts_id'=>6963, 'zipcode'=>'25237', 'name'=>'Teluk Kabung Utara']);

        //Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>436, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Kepulauan Mentawai']);
        //Kecamatan Pagai Utara Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6964, 'city_id'=>436, 'name'=>'Pagai Utara']);
        DB::table('villages')->insert(['id'=>79334, 'districts_id'=>6964, 'zipcode'=>'25391', 'name'=>'Betumonga']);
        DB::table('villages')->insert(['id'=>79335, 'districts_id'=>6964, 'zipcode'=>'25391', 'name'=>'Saumanganyak']);
        DB::table('villages')->insert(['id'=>79336, 'districts_id'=>6964, 'zipcode'=>'25391', 'name'=>'Silabu']);
        //Kecamatan Pagai Selatan Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6965, 'city_id'=>436, 'name'=>'Pagai Selatan']);
        DB::table('villages')->insert(['id'=>79337, 'districts_id'=>6965, 'zipcode'=>'25391', 'name'=>'Bulasat']);
        DB::table('villages')->insert(['id'=>79338, 'districts_id'=>6965, 'zipcode'=>'25391', 'name'=>'Makalo']);
        DB::table('villages')->insert(['id'=>79339, 'districts_id'=>6965, 'zipcode'=>'25391', 'name'=>'Malakopak']);
        DB::table('villages')->insert(['id'=>79340, 'districts_id'=>6965, 'zipcode'=>'25391', 'name'=>'Sinakak']);
        //Kecamatan Sikakap Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6966, 'city_id'=>436, 'name'=>'Sikakap']);
        DB::table('villages')->insert(['id'=>79341, 'districts_id'=>6966, 'zipcode'=>'25391', 'name'=>'Matobek']);
        DB::table('villages')->insert(['id'=>79342, 'districts_id'=>6966, 'zipcode'=>'25391', 'name'=>'Sikakap']);
        DB::table('villages')->insert(['id'=>79343, 'districts_id'=>6966, 'zipcode'=>'25391', 'name'=>'Taikako']);
        //Kecamatan Sipora Selatan Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6967, 'city_id'=>436, 'name'=>'Sipora Selatan']);
        DB::table('villages')->insert(['id'=>79344, 'districts_id'=>6967, 'zipcode'=>'25392', 'name'=>'Beriulou']);
        DB::table('villages')->insert(['id'=>79345, 'districts_id'=>6967, 'zipcode'=>'25392', 'name'=>'Bosua']);
        DB::table('villages')->insert(['id'=>79346, 'districts_id'=>6967, 'zipcode'=>'25392', 'name'=>'Mara']);
        DB::table('villages')->insert(['id'=>79347, 'districts_id'=>6967, 'zipcode'=>'25392', 'name'=>'Matobek']);
        DB::table('villages')->insert(['id'=>79348, 'districts_id'=>6967, 'zipcode'=>'25392', 'name'=>'Nem-nem Leleu']);
        DB::table('villages')->insert(['id'=>79349, 'districts_id'=>6967, 'zipcode'=>'25392', 'name'=>'Saureinuk']);
        DB::table('villages')->insert(['id'=>79350, 'districts_id'=>6967, 'zipcode'=>'25392', 'name'=>'Sioban']);
        //Kecamatan Sipora Utara Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6968, 'city_id'=>436, 'name'=>'Sipora Utara']);
        DB::table('villages')->insert(['id'=>79351, 'districts_id'=>6968, 'zipcode'=>'25392', 'name'=>'Betumonga (beutomonga)']);
        DB::table('villages')->insert(['id'=>79352, 'districts_id'=>6968, 'zipcode'=>'25392', 'name'=>'Bukit Pamewa']);
        DB::table('villages')->insert(['id'=>79353, 'districts_id'=>6968, 'zipcode'=>'25392', 'name'=>'Gosooinan (goisooinan)']);
        DB::table('villages')->insert(['id'=>79354, 'districts_id'=>6968, 'zipcode'=>'25392', 'name'=>'Sido Makmur']);
        DB::table('villages')->insert(['id'=>79355, 'districts_id'=>6968, 'zipcode'=>'25392', 'name'=>'Sipora Jaya']);
        DB::table('villages')->insert(['id'=>79356, 'districts_id'=>6968, 'zipcode'=>'25392', 'name'=>'Tuapejat']);
        //Kecamatan Siberut Barat Daya Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6969, 'city_id'=>436, 'name'=>'Siberut Barat Daya']);
        DB::table('villages')->insert(['id'=>79357, 'districts_id'=>6969, 'zipcode'=>'25393', 'name'=>'Katurai/katurei']);
        DB::table('villages')->insert(['id'=>79358, 'districts_id'=>6969, 'zipcode'=>'25393', 'name'=>'Sagulubek (sagalubeg/sagalubbek)']);
        DB::table('villages')->insert(['id'=>79359, 'districts_id'=>6969, 'zipcode'=>'25393', 'name'=>'Taileleu (pasakiat Taleleu)']);
        //Kecamatan Siberut Selatan Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6970, 'city_id'=>436, 'name'=>'Siberut Selatan']);
        DB::table('villages')->insert(['id'=>79360, 'districts_id'=>6970, 'zipcode'=>'25393', 'name'=>'Madobak Ugai']);
        DB::table('villages')->insert(['id'=>79361, 'districts_id'=>6970, 'zipcode'=>'25393', 'name'=>'Maileppet/maleppet']);
        DB::table('villages')->insert(['id'=>79362, 'districts_id'=>6970, 'zipcode'=>'25393', 'name'=>'Matotonan']);
        DB::table('villages')->insert(['id'=>79363, 'districts_id'=>6970, 'zipcode'=>'25393', 'name'=>'Muara/muaro Siberut']);
        DB::table('villages')->insert(['id'=>79364, 'districts_id'=>6970, 'zipcode'=>'25393', 'name'=>'Muntei']);
        //Kecamatan Siberut Tengah Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6971, 'city_id'=>436, 'name'=>'Siberut Tengah']);
        DB::table('villages')->insert(['id'=>79365, 'districts_id'=>6971, 'zipcode'=>'25393', 'name'=>'Saibi Muara (saibi Samukop/samokop)']);
        DB::table('villages')->insert(['id'=>79366, 'districts_id'=>6971, 'zipcode'=>'25393', 'name'=>'Saliguma']);
        DB::table('villages')->insert(['id'=>79367, 'districts_id'=>6971, 'zipcode'=>'25394', 'name'=>'Cimpungan']);
        //Kecamatan Siberut Utara Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6972, 'city_id'=>436, 'name'=>'Siberut Utara']);
        DB::table('villages')->insert(['id'=>79368, 'districts_id'=>6972, 'zipcode'=>'25394', 'name'=>'Bojakan']);
        DB::table('villages')->insert(['id'=>79369, 'districts_id'=>6972, 'zipcode'=>'25394', 'name'=>'Malancang']);
        DB::table('villages')->insert(['id'=>79370, 'districts_id'=>6972, 'zipcode'=>'25394', 'name'=>'Mongan Poula/paula']);
        DB::table('villages')->insert(['id'=>79371, 'districts_id'=>6972, 'zipcode'=>'25394', 'name'=>'Muara/muaro Sikabaluan']);
        DB::table('villages')->insert(['id'=>79372, 'districts_id'=>6972, 'zipcode'=>'25394', 'name'=>'Sirilogui']);
        DB::table('villages')->insert(['id'=>79373, 'districts_id'=>6972, 'zipcode'=>'25394', 'name'=>'Sotboyak']);
        //Kecamatan Siberut Barat Kab. Kepulauan Mentawai Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6973, 'city_id'=>436, 'name'=>'Siberut Barat']);
        DB::table('villages')->insert(['id'=>79374, 'districts_id'=>6973, 'zipcode'=>'25394', 'name'=>'Sigapokna']);
        DB::table('villages')->insert(['id'=>79375, 'districts_id'=>6973, 'zipcode'=>'25394', 'name'=>'Simalegi/simaligi']);
        DB::table('villages')->insert(['id'=>79376, 'districts_id'=>6973, 'zipcode'=>'25394', 'name'=>'Simatalu Sipokak']);

        //Kota Pariaman Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>437, 'province_id'=>32, 'type'=>'city', 'name'=>'Pariaman']);
        //Kecamatan Pariaman Tengah Kota Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6974, 'city_id'=>437, 'name'=>'Pariaman Tengah']);
        DB::table('villages')->insert(['id'=>79377, 'districts_id'=>6974, 'zipcode'=>'25511', 'name'=>'Cimparuah']);
        DB::table('villages')->insert(['id'=>79378, 'districts_id'=>6974, 'zipcode'=>'25511', 'name'=>'Kampung Jawa I']);
        DB::table('villages')->insert(['id'=>79379, 'districts_id'=>6974, 'zipcode'=>'25511', 'name'=>'Kampung Jawa Ii']);
        DB::table('villages')->insert(['id'=>79380, 'districts_id'=>6974, 'zipcode'=>'25511', 'name'=>'Rawang']);
        DB::table('villages')->insert(['id'=>79381, 'districts_id'=>6974, 'zipcode'=>'25512', 'name'=>'Kampung Pondok']);
        DB::table('villages')->insert(['id'=>79382, 'districts_id'=>6974, 'zipcode'=>'25512', 'name'=>'Kampung Pondok Ii']);
        DB::table('villages')->insert(['id'=>79383, 'districts_id'=>6974, 'zipcode'=>'25512', 'name'=>'Pauah/pauh Barat']);
        DB::table('villages')->insert(['id'=>79384, 'districts_id'=>6974, 'zipcode'=>'25512', 'name'=>'Pauah/pauh Timur']);
        DB::table('villages')->insert(['id'=>79385, 'districts_id'=>6974, 'zipcode'=>'25513', 'name'=>'Kampung Perak']);
        DB::table('villages')->insert(['id'=>79386, 'districts_id'=>6974, 'zipcode'=>'25513', 'name'=>'Lohong']);
        DB::table('villages')->insert(['id'=>79387, 'districts_id'=>6974, 'zipcode'=>'25513', 'name'=>'Pasir']);
        DB::table('villages')->insert(['id'=>79388, 'districts_id'=>6974, 'zipcode'=>'25514', 'name'=>'Kampung/kampuang Baru']);
        DB::table('villages')->insert(['id'=>79389, 'districts_id'=>6974, 'zipcode'=>'25514', 'name'=>'Karan Aur']);
        DB::table('villages')->insert(['id'=>79390, 'districts_id'=>6974, 'zipcode'=>'25515', 'name'=>'Jalan Baru']);
        DB::table('villages')->insert(['id'=>79391, 'districts_id'=>6974, 'zipcode'=>'25515', 'name'=>'Jalan Kereta Api']);
        DB::table('villages')->insert(['id'=>79392, 'districts_id'=>6974, 'zipcode'=>'25516', 'name'=>'Ujung Batung (ujuang Batuang)']);
        DB::table('villages')->insert(['id'=>79393, 'districts_id'=>6974, 'zipcode'=>'25517', 'name'=>'Jati Mudik / Mudiak']);
        DB::table('villages')->insert(['id'=>79394, 'districts_id'=>6974, 'zipcode'=>'25517', 'name'=>'Taratak']);
        DB::table('villages')->insert(['id'=>79395, 'districts_id'=>6974, 'zipcode'=>'25518', 'name'=>'Jawi-jawi I']);
        DB::table('villages')->insert(['id'=>79396, 'districts_id'=>6974, 'zipcode'=>'25518', 'name'=>'Jawi-jawi Ii']);
        DB::table('villages')->insert(['id'=>79397, 'districts_id'=>6974, 'zipcode'=>'25519', 'name'=>'Alai Galombang']);
        DB::table('villages')->insert(['id'=>79398, 'districts_id'=>6974, 'zipcode'=>'25519', 'name'=>'Jati Hilir (jalan Hilia)']);
        //Kecamatan Pariaman Timur Kota Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6975, 'city_id'=>437, 'name'=>'Pariaman Timur']);
        DB::table('villages')->insert(['id'=>79399, 'districts_id'=>6975, 'zipcode'=>'25516', 'name'=>'Cubadak Mentawai']);
        DB::table('villages')->insert(['id'=>79400, 'districts_id'=>6975, 'zipcode'=>'25516', 'name'=>'Sungai Pasak']);
        DB::table('villages')->insert(['id'=>79401, 'districts_id'=>6975, 'zipcode'=>'25516', 'name'=>'Sungai Sirah']);
        DB::table('villages')->insert(['id'=>79402, 'districts_id'=>6975, 'zipcode'=>'25519', 'name'=>'Batang Kabung / Kabuang']);
        DB::table('villages')->insert(['id'=>79403, 'districts_id'=>6975, 'zipcode'=>'25519', 'name'=>'Bato']);
        DB::table('villages')->insert(['id'=>79404, 'districts_id'=>6975, 'zipcode'=>'25519', 'name'=>'Koto Marapak']);
        DB::table('villages')->insert(['id'=>79405, 'districts_id'=>6975, 'zipcode'=>'25523', 'name'=>'Kampuang Gadang']);
        DB::table('villages')->insert(['id'=>79406, 'districts_id'=>6975, 'zipcode'=>'25523', 'name'=>'Talago Sariak']);
        DB::table('villages')->insert(['id'=>79407, 'districts_id'=>6975, 'zipcode'=>'25524', 'name'=>'Kampung Baru Padusunan']);
        DB::table('villages')->insert(['id'=>79408, 'districts_id'=>6975, 'zipcode'=>'25524', 'name'=>'Pakasai']);
        DB::table('villages')->insert(['id'=>79409, 'districts_id'=>6975, 'zipcode'=>'25531', 'name'=>'Aia Santok']);
        DB::table('villages')->insert(['id'=>79410, 'districts_id'=>6975, 'zipcode'=>'25534', 'name'=>'Kajai']);
        DB::table('villages')->insert(['id'=>79411, 'districts_id'=>6975, 'zipcode'=>'25534', 'name'=>'Kaluat / Kaluaik (kaluaiak)']);
        DB::table('villages')->insert(['id'=>79412, 'districts_id'=>6975, 'zipcode'=>'25535', 'name'=>'Bungo Tanjung']);
        DB::table('villages')->insert(['id'=>79413, 'districts_id'=>6975, 'zipcode'=>'25535', 'name'=>'Kampung Tangah']);
        DB::table('villages')->insert(['id'=>79414, 'districts_id'=>6975, 'zipcode'=>'25536', 'name'=>'Kampung Kandang']);
        //Kecamatan Pariaman Utara Kota Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6976, 'city_id'=>437, 'name'=>'Pariaman Utara']);
        DB::table('villages')->insert(['id'=>79415, 'districts_id'=>6976, 'zipcode'=>'25521', 'name'=>'Balai Naras/nareh']);
        DB::table('villages')->insert(['id'=>79416, 'districts_id'=>6976, 'zipcode'=>'25521', 'name'=>'Naras I (nareh I)']);
        DB::table('villages')->insert(['id'=>79417, 'districts_id'=>6976, 'zipcode'=>'25521', 'name'=>'Padang Birik-birik (biriak-biriak)']);
        DB::table('villages')->insert(['id'=>79418, 'districts_id'=>6976, 'zipcode'=>'25521', 'name'=>'Sintuk (sintuak)']);
        DB::table('villages')->insert(['id'=>79419, 'districts_id'=>6976, 'zipcode'=>'25521', 'name'=>'Tungka Selatan']);
        DB::table('villages')->insert(['id'=>79420, 'districts_id'=>6976, 'zipcode'=>'25521', 'name'=>'Tungka Utara']);
        DB::table('villages')->insert(['id'=>79421, 'districts_id'=>6976, 'zipcode'=>'25522', 'name'=>'Ampalu']);
        DB::table('villages')->insert(['id'=>79422, 'districts_id'=>6976, 'zipcode'=>'25522', 'name'=>'Apar']);
        DB::table('villages')->insert(['id'=>79423, 'districts_id'=>6976, 'zipcode'=>'25522', 'name'=>'Mangguang']);
        DB::table('villages')->insert(['id'=>79424, 'districts_id'=>6976, 'zipcode'=>'25522', 'name'=>'Naras Hilir (nareh Hilia)']);
        DB::table('villages')->insert(['id'=>79425, 'districts_id'=>6976, 'zipcode'=>'25523', 'name'=>'Tanjuang Sabar']);
        DB::table('villages')->insert(['id'=>79426, 'districts_id'=>6976, 'zipcode'=>'25524', 'name'=>'Cubadak Aia Selatan']);
        DB::table('villages')->insert(['id'=>79427, 'districts_id'=>6976, 'zipcode'=>'25524', 'name'=>'Cubadak Aia Utara']);
        DB::table('villages')->insert(['id'=>79428, 'districts_id'=>6976, 'zipcode'=>'25524', 'name'=>'Cubadak Air/aia']);
        DB::table('villages')->insert(['id'=>79429, 'districts_id'=>6976, 'zipcode'=>'25526', 'name'=>'Sikapak Barat']);
        DB::table('villages')->insert(['id'=>79430, 'districts_id'=>6976, 'zipcode'=>'25526', 'name'=>'Sikapak Timur']);
        DB::table('villages')->insert(['id'=>79431, 'districts_id'=>6976, 'zipcode'=>'25529', 'name'=>'Sungai Rambai']);
        //Kecamatan Pariaman Selatan Kota Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6977, 'city_id'=>437, 'name'=>'Pariaman Selatan']);
        DB::table('villages')->insert(['id'=>79432, 'districts_id'=>6977, 'zipcode'=>'25531', 'name'=>'Balai Kurai Taji']);
        DB::table('villages')->insert(['id'=>79433, 'districts_id'=>6977, 'zipcode'=>'25531', 'name'=>'Batang Tajongkek']);
        DB::table('villages')->insert(['id'=>79434, 'districts_id'=>6977, 'zipcode'=>'25532', 'name'=>'Pauh Kurai Taji (pauah)']);
        DB::table('villages')->insert(['id'=>79435, 'districts_id'=>6977, 'zipcode'=>'25532', 'name'=>'Simpang (kurai Taji)']);
        DB::table('villages')->insert(['id'=>79436, 'districts_id'=>6977, 'zipcode'=>'25533', 'name'=>'Pungguang Ladiang']);
        DB::table('villages')->insert(['id'=>79437, 'districts_id'=>6977, 'zipcode'=>'25533', 'name'=>'Rambai']);
        DB::table('villages')->insert(['id'=>79438, 'districts_id'=>6977, 'zipcode'=>'25536', 'name'=>'Toboh Palabah']);
        DB::table('villages')->insert(['id'=>79439, 'districts_id'=>6977, 'zipcode'=>'25537', 'name'=>'Marabau']);
        DB::table('villages')->insert(['id'=>79440, 'districts_id'=>6977, 'zipcode'=>'25537', 'name'=>'Padang Cakua']);
        DB::table('villages')->insert(['id'=>79441, 'districts_id'=>6977, 'zipcode'=>'25537', 'name'=>'Sungai Kasai']);
        DB::table('villages')->insert(['id'=>79442, 'districts_id'=>6977, 'zipcode'=>'25538', 'name'=>'Marunggih']);
        DB::table('villages')->insert(['id'=>79443, 'districts_id'=>6977, 'zipcode'=>'25538', 'name'=>'Pasir Sunur / Pasa Sunua (pasia Sunua)']);
        DB::table('villages')->insert(['id'=>79444, 'districts_id'=>6977, 'zipcode'=>'25538', 'name'=>'Taluak']);
        DB::table('villages')->insert(['id'=>79445, 'districts_id'=>6977, 'zipcode'=>'25539', 'name'=>'Kampung/kampuang Apar']);
        DB::table('villages')->insert(['id'=>79446, 'districts_id'=>6977, 'zipcode'=>'25539', 'name'=>'Palak Aneh']);
        DB::table('villages')->insert(['id'=>79447, 'districts_id'=>6977, 'zipcode'=>'25539', 'name'=>'Sikabu']);

        //Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>438, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Padang Pariaman']);
        //Kecamatan V Koto Kampung Dalam Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6978, 'city_id'=>438, 'name'=>'V Koto Kampung Dalam']);
        DB::table('villages')->insert(['id'=>79448, 'districts_id'=>6978, 'zipcode'=>'25552', 'name'=>'Campago']);
        DB::table('villages')->insert(['id'=>79449, 'districts_id'=>6978, 'zipcode'=>'25552', 'name'=>'Sikucur']);
        //Kecamatan Sungai Limau Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6979, 'city_id'=>438, 'name'=>'Sungai Limau']);
        DB::table('villages')->insert(['id'=>79450, 'districts_id'=>6979, 'zipcode'=>'25561', 'name'=>'Guguak Kuranji Hilir']);
        DB::table('villages')->insert(['id'=>79451, 'districts_id'=>6979, 'zipcode'=>'25561', 'name'=>'Koto Tinggi Kuranji Hilir']);
        DB::table('villages')->insert(['id'=>79452, 'districts_id'=>6979, 'zipcode'=>'25561', 'name'=>'Kuranji Hilir']);
        DB::table('villages')->insert(['id'=>79453, 'districts_id'=>6979, 'zipcode'=>'25561', 'name'=>'Pilubang']);
        //Kecamatan Sungai Geringging/garingging Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6980, 'city_id'=>438, 'name'=>'Sungai Geringging/garingging']);
        DB::table('villages')->insert(['id'=>79454, 'districts_id'=>6980, 'zipcode'=>'25563', 'name'=>'Batu Gadang Kuranji Hulu']);
        DB::table('villages')->insert(['id'=>79455, 'districts_id'=>6980, 'zipcode'=>'25563', 'name'=>'Kuranji Hulu']);
        DB::table('villages')->insert(['id'=>79456, 'districts_id'=>6980, 'zipcode'=>'25563', 'name'=>'Malai Iii Koto']);
        DB::table('villages')->insert(['id'=>79457, 'districts_id'=>6980, 'zipcode'=>'25563', 'name'=>'Sungai Sirah Kuranji Hulu']);
        //Kecamatan Batang Gasan Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6981, 'city_id'=>438, 'name'=>'Batang Gasan']);
        DB::table('villages')->insert(['id'=>79458, 'districts_id'=>6981, 'zipcode'=>'25563', 'name'=>'Gasan Gadang']);
        DB::table('villages')->insert(['id'=>79459, 'districts_id'=>6981, 'zipcode'=>'25563', 'name'=>'Malai V Suku']);
        //Kecamatan Iv Koto Aur Malintang Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6982, 'city_id'=>438, 'name'=>'Iv Koto Aur Malintang']);
        DB::table('villages')->insert(['id'=>79460, 'districts_id'=>6982, 'zipcode'=>'25564', 'name'=>'Balai Baiak Malai Iii Koto']);
        DB::table('villages')->insert(['id'=>79461, 'districts_id'=>6982, 'zipcode'=>'25564', 'name'=>'Iii Koto Aur Malintang']);
        DB::table('villages')->insert(['id'=>79462, 'districts_id'=>6982, 'zipcode'=>'25564', 'name'=>'Iii Koto Aur Malintang Selatan']);
        DB::table('villages')->insert(['id'=>79463, 'districts_id'=>6982, 'zipcode'=>'25564', 'name'=>'Iii Koto Aur Malintang Timur']);
        DB::table('villages')->insert(['id'=>79464, 'districts_id'=>6982, 'zipcode'=>'25564', 'name'=>'Iii Koto Aur Malintang Utara']);
        //Kecamatan Nan Sabaris Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6983, 'city_id'=>438, 'name'=>'Nan Sabaris']);
        DB::table('villages')->insert(['id'=>79465, 'districts_id'=>6983, 'zipcode'=>'25571', 'name'=>'Kapalo Koto']);
        DB::table('villages')->insert(['id'=>79466, 'districts_id'=>6983, 'zipcode'=>'25571', 'name'=>'Kurai Taji']);
        DB::table('villages')->insert(['id'=>79467, 'districts_id'=>6983, 'zipcode'=>'25571', 'name'=>'Padang Bintungan']);
        DB::table('villages')->insert(['id'=>79468, 'districts_id'=>6983, 'zipcode'=>'25571', 'name'=>'Pauah Kambar']);
        DB::table('villages')->insert(['id'=>79469, 'districts_id'=>6983, 'zipcode'=>'25571', 'name'=>'Sunua']);
        //Kecamatan Ulakan Tapakih/tapakis Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6984, 'city_id'=>438, 'name'=>'Ulakan Tapakih/tapakis']);
        DB::table('villages')->insert(['id'=>79470, 'districts_id'=>6984, 'zipcode'=>'25572', 'name'=>'Tapakih/tapakis']);
        DB::table('villages')->insert(['id'=>79471, 'districts_id'=>6984, 'zipcode'=>'25572', 'name'=>'Ulakan']);
        //Kecamatan Vii Koto Sungai Sarik Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6985, 'city_id'=>438, 'name'=>'Vii Koto Sungai Sarik']);
        DB::table('villages')->insert(['id'=>79472, 'districts_id'=>6985, 'zipcode'=>'25573', 'name'=>'Balah Aia']);
        DB::table('villages')->insert(['id'=>79473, 'districts_id'=>6985, 'zipcode'=>'25573', 'name'=>'Lareh Nan Panjang']);
        DB::table('villages')->insert(['id'=>79474, 'districts_id'=>6985, 'zipcode'=>'25573', 'name'=>'Lurah Ampalu']);
        DB::table('villages')->insert(['id'=>79475, 'districts_id'=>6985, 'zipcode'=>'25573', 'name'=>'Sungai Sariak']);
        //Kecamatan Padang Sago Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6986, 'city_id'=>438, 'name'=>'Padang Sago']);
        DB::table('villages')->insert(['id'=>79476, 'districts_id'=>6986, 'zipcode'=>'25573', 'name'=>'Batu Kalang']);
        DB::table('villages')->insert(['id'=>79477, 'districts_id'=>6986, 'zipcode'=>'25573', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>79478, 'districts_id'=>6986, 'zipcode'=>'25573', 'name'=>'Koto Dalam']);
        //Kecamatan V Koto Timur Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6987, 'city_id'=>438, 'name'=>'V Koto Timur']);
        DB::table('villages')->insert(['id'=>79479, 'districts_id'=>6987, 'zipcode'=>'25573', 'name'=>'Gunung Padang Alai']);
        DB::table('villages')->insert(['id'=>79480, 'districts_id'=>6987, 'zipcode'=>'25573', 'name'=>'Kudu Ganting/gantiang']);
        DB::table('villages')->insert(['id'=>79481, 'districts_id'=>6987, 'zipcode'=>'25573', 'name'=>'Limau Puruik']);
        //Kecamatan Patamuan Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6988, 'city_id'=>438, 'name'=>'Patamuan']);
        DB::table('villages')->insert(['id'=>79482, 'districts_id'=>6988, 'zipcode'=>'25573', 'name'=>'Sungai Durian']);
        DB::table('villages')->insert(['id'=>79483, 'districts_id'=>6988, 'zipcode'=>'25573', 'name'=>'Tandikat/tandikek']);
        DB::table('villages')->insert(['id'=>79484, 'districts_id'=>6988, 'zipcode'=>'25573', 'name'=>'Tandikek Utara']);
        //Kecamatan Lubuk Alung Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6989, 'city_id'=>438, 'name'=>'Lubuk Alung']);
        DB::table('villages')->insert(['id'=>79485, 'districts_id'=>6989, 'zipcode'=>'25581', 'name'=>'Aie Tajun Lubuk Alung']);
        DB::table('villages')->insert(['id'=>79486, 'districts_id'=>6989, 'zipcode'=>'25581', 'name'=>'Lubuk Alung']);
        DB::table('villages')->insert(['id'=>79487, 'districts_id'=>6989, 'zipcode'=>'25581', 'name'=>'Pasie Laweh Lubuk Alung']);
        DB::table('villages')->insert(['id'=>79488, 'districts_id'=>6989, 'zipcode'=>'25581', 'name'=>'Pungguang Kasiak Lubuk Alung']);
        DB::table('villages')->insert(['id'=>79489, 'districts_id'=>6989, 'zipcode'=>'25581', 'name'=>'Sikabu Lubuk Alung']);
        //Kecamatan Sintuk/sintuak Toboh Gadang Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6990, 'city_id'=>438, 'name'=>'Sintuk/sintuak Toboh Gadang']);
        DB::table('villages')->insert(['id'=>79490, 'districts_id'=>6990, 'zipcode'=>'25582', 'name'=>'Sintuk/sintuak']);
        DB::table('villages')->insert(['id'=>79491, 'districts_id'=>6990, 'zipcode'=>'25582', 'name'=>'Toboh Gadang']);
        //Kecamatan 2 X 11 Kayu Tanam Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6991, 'city_id'=>438, 'name'=>'2 X 11 Kayu Tanam']);
        DB::table('villages')->insert(['id'=>79492, 'districts_id'=>6991, 'zipcode'=>'25584', 'name'=>'Anduring (anduriang)']);
        DB::table('villages')->insert(['id'=>79493, 'districts_id'=>6991, 'zipcode'=>'25584', 'name'=>'Guguak']);
        DB::table('villages')->insert(['id'=>79494, 'districts_id'=>6991, 'zipcode'=>'25584', 'name'=>'Kapalo Hilalang']);
        DB::table('villages')->insert(['id'=>79495, 'districts_id'=>6991, 'zipcode'=>'25584', 'name'=>'Kayu Tanam']);
        //Kecamatan Enam Lingkung Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6992, 'city_id'=>438, 'name'=>'Enam Lingkung']);
        DB::table('villages')->insert(['id'=>79496, 'districts_id'=>6992, 'zipcode'=>'25584', 'name'=>'Gadua/gadur']);
        DB::table('villages')->insert(['id'=>79497, 'districts_id'=>6992, 'zipcode'=>'25584', 'name'=>'Koto Tinggi']);
        DB::table('villages')->insert(['id'=>79498, 'districts_id'=>6992, 'zipcode'=>'25584', 'name'=>'Pakandangan']);
        DB::table('villages')->insert(['id'=>79499, 'districts_id'=>6992, 'zipcode'=>'25584', 'name'=>'Parit Malintang']);
        DB::table('villages')->insert(['id'=>79500, 'districts_id'=>6992, 'zipcode'=>'25584', 'name'=>'Toboh Ketek']);
        //Kecamatan 2 X 11 Enam Lingkung Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6993, 'city_id'=>438, 'name'=>'2 X 11 Enam Lingkung']);
        DB::table('villages')->insert(['id'=>79501, 'districts_id'=>6993, 'zipcode'=>'25584', 'name'=>'Lubuk Pandan']);
        DB::table('villages')->insert(['id'=>79502, 'districts_id'=>6993, 'zipcode'=>'25584', 'name'=>'Sicincin']);
        DB::table('villages')->insert(['id'=>79503, 'districts_id'=>6993, 'zipcode'=>'25584', 'name'=>'Sungai Asam']);
        //Kecamatan Batang Anai Kab. Padang Pariaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6994, 'city_id'=>438, 'name'=>'Batang Anai']);
        DB::table('villages')->insert(['id'=>79504, 'districts_id'=>6994, 'zipcode'=>'25586', 'name'=>'Buayan Lubuk Alung']);
        DB::table('villages')->insert(['id'=>79505, 'districts_id'=>6994, 'zipcode'=>'25586', 'name'=>'Kasang']);
        DB::table('villages')->insert(['id'=>79506, 'districts_id'=>6994, 'zipcode'=>'25586', 'name'=>'Katapiang']);
        DB::table('villages')->insert(['id'=>79507, 'districts_id'=>6994, 'zipcode'=>'25586', 'name'=>'Sungai Buluh']);

        //Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>439, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Pesisir Selatan']);
        //Kecamatan Iv Jurai Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6995, 'city_id'=>439, 'name'=>'Iv Jurai']);
        DB::table('villages')->insert(['id'=>79508, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Ampang Tareh Lumpo']);
        DB::table('villages')->insert(['id'=>79509, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Ampuan Lumpo']);
        DB::table('villages')->insert(['id'=>79510, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Balai Sinayan Lumpo']);
        DB::table('villages')->insert(['id'=>79511, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Batu Kunik Lumpo']);
        DB::table('villages')->insert(['id'=>79512, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Bunga Pasang Salido']);
        DB::table('villages')->insert(['id'=>79513, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Gunungbungkuak Lumpo']);
        DB::table('villages')->insert(['id'=>79514, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Koto Rawang']);
        DB::table('villages')->insert(['id'=>79515, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Limau Gadang Lumpo']);
        DB::table('villages')->insert(['id'=>79516, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Lumpo']);
        DB::table('villages')->insert(['id'=>79517, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Painan']);
        DB::table('villages')->insert(['id'=>79518, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Painan Selatan Painan']);
        DB::table('villages')->insert(['id'=>79519, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Painan Timur Painan']);
        DB::table('villages')->insert(['id'=>79520, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Sago Salido']);
        DB::table('villages')->insert(['id'=>79521, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Salido']);
        DB::table('villages')->insert(['id'=>79522, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Salido Sari Bulan']);
        DB::table('villages')->insert(['id'=>79523, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Sungaibukik Kaciak Lumpo']);
        DB::table('villages')->insert(['id'=>79524, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Sungaigayo Lumpo']);
        DB::table('villages')->insert(['id'=>79525, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Sungaisariak Lumpo']);
        DB::table('villages')->insert(['id'=>79526, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Tambang']);
        DB::table('villages')->insert(['id'=>79527, 'districts_id'=>6995, 'zipcode'=>'25651', 'name'=>'Taratak Tangah Lumpo']);
        //Kecamatan Bayang Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6996, 'city_id'=>439, 'name'=>'Bayang']);
        DB::table('villages')->insert(['id'=>79528, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Api-api Pasar Baru']);
        DB::table('villages')->insert(['id'=>79529, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Asamkamba Pasar Baru']);
        DB::table('villages')->insert(['id'=>79530, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Aur Begalung Talaok']);
        DB::table('villages')->insert(['id'=>79531, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Gurun Panjang']);
        DB::table('villages')->insert(['id'=>79532, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Gurun Panjang Barat']);
        DB::table('villages')->insert(['id'=>79533, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Gurun Panjang Selatan']);
        DB::table('villages')->insert(['id'=>79534, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Gurun Panjang Utara']);
        DB::table('villages')->insert(['id'=>79535, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Kapeh Panji Jaya Talaok']);
        DB::table('villages')->insert(['id'=>79536, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Kapelgam Koto Berapak']);
        DB::table('villages')->insert(['id'=>79537, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Kapujan Koto Berapak']);
        DB::table('villages')->insert(['id'=>79538, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Koto Baru Koto Berapak']);
        DB::table('villages')->insert(['id'=>79539, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Koto Berapak']);
        DB::table('villages')->insert(['id'=>79540, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Kubang Koto Berapak']);
        DB::table('villages')->insert(['id'=>79541, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Pasar Baru']);
        DB::table('villages')->insert(['id'=>79542, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Sawahlaweh Pasar Baru']);
        DB::table('villages')->insert(['id'=>79543, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Talaok']);
        DB::table('villages')->insert(['id'=>79544, 'districts_id'=>6996, 'zipcode'=>'25652', 'name'=>'Tanjungdurian Pasar Baru']);
        //Kecamatan Iv Nagari Bayang Utara Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6997, 'city_id'=>439, 'name'=>'Iv Nagari Bayang Utara']);
        DB::table('villages')->insert(['id'=>79545, 'districts_id'=>6997, 'zipcode'=>'25652', 'name'=>'Koto Ranah']);
        DB::table('villages')->insert(['id'=>79546, 'districts_id'=>6997, 'zipcode'=>'25652', 'name'=>'Limau Gadang Pancung Taba']);
        DB::table('villages')->insert(['id'=>79547, 'districts_id'=>6997, 'zipcode'=>'25652', 'name'=>'Muaro Aie']);
        DB::table('villages')->insert(['id'=>79548, 'districts_id'=>6997, 'zipcode'=>'25652', 'name'=>'Pancung Taba']);
        DB::table('villages')->insert(['id'=>79549, 'districts_id'=>6997, 'zipcode'=>'25652', 'name'=>'Puluik Puluik']);
        DB::table('villages')->insert(['id'=>79550, 'districts_id'=>6997, 'zipcode'=>'25652', 'name'=>'Puluik-puluik Selatan']);
        //Kecamatan Koto Xi Tarusan Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6998, 'city_id'=>439, 'name'=>'Koto Xi Tarusan']);
        DB::table('villages')->insert(['id'=>79551, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Ampang Pulai']);
        DB::table('villages')->insert(['id'=>79552, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Barung Barung Balantai']);
        DB::table('villages')->insert(['id'=>79553, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Barung Barung Balantai Selatan']);
        DB::table('villages')->insert(['id'=>79554, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Barung-barung Balantai Tengah']);
        DB::table('villages')->insert(['id'=>79555, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Barung-barung Balantai Timur']);
        DB::table('villages')->insert(['id'=>79556, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Batu Hampa']);
        DB::table('villages')->insert(['id'=>79557, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Batuhampar Selatan']);
        DB::table('villages')->insert(['id'=>79558, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Cerocok Anau Ampang Pulai']);
        DB::table('villages')->insert(['id'=>79559, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Duku']);
        DB::table('villages')->insert(['id'=>79560, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Duku Utara']);
        DB::table('villages')->insert(['id'=>79561, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Jinang Kampung Pansur Ampang Pulai']);
        DB::table('villages')->insert(['id'=>79562, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Kampungbaru Korong Nan Ampek']);
        DB::table('villages')->insert(['id'=>79563, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Kapuh']);
        DB::table('villages')->insert(['id'=>79564, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Kapuh Utara']);
        DB::table('villages')->insert(['id'=>79565, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Mandeh']);
        DB::table('villages')->insert(['id'=>79566, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Nanggalo']);
        DB::table('villages')->insert(['id'=>79567, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Pulaukaram Ampang Pulai']);
        DB::table('villages')->insert(['id'=>79568, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Setara Nanggalo']);
        DB::table('villages')->insert(['id'=>79569, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Siguntur']);
        DB::table('villages')->insert(['id'=>79570, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Siguntur Tua']);
        DB::table('villages')->insert(['id'=>79571, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Sungai Pinang']);
        DB::table('villages')->insert(['id'=>79572, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Sungainyalo Mudiak Aia']);
        DB::table('villages')->insert(['id'=>79573, 'districts_id'=>6998, 'zipcode'=>'25654', 'name'=>'Taratak Sei Lundang']);
        //Kecamatan Batang Kapas Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>6999, 'city_id'=>439, 'name'=>'Batang Kapas']);
        DB::table('villages')->insert(['id'=>79574, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Iv Koto Hilie']);
        DB::table('villages')->insert(['id'=>79575, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Iv Koto Mudiek']);
        DB::table('villages')->insert(['id'=>79576, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Koto Nan Duo Iv Koto Hilie']);
        DB::table('villages')->insert(['id'=>79577, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Koto Nan Tigo Iv Koto Hilie']);
        DB::table('villages')->insert(['id'=>79578, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Sungainyalo Iv Koto Mudiek']);
        DB::table('villages')->insert(['id'=>79579, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Taluak']);
        DB::table('villages')->insert(['id'=>79580, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Taluk Tigo Sakato']);
        DB::table('villages')->insert(['id'=>79581, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Teratak Tempatih Iv Koto Mudiek']);
        DB::table('villages')->insert(['id'=>79582, 'districts_id'=>6999, 'zipcode'=>'25661', 'name'=>'Tuik Iv Koto Mudiek']);
        //Kecamatan Sutera Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7000, 'city_id'=>439, 'name'=>'Sutera']);
        DB::table('villages')->insert(['id'=>79583, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Amping Parak']);
        DB::table('villages')->insert(['id'=>79584, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Amping Parak Timur']);
        DB::table('villages')->insert(['id'=>79585, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Aur Duri Surantih']);
        DB::table('villages')->insert(['id'=>79586, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Ganting Mudiak Selatan Surantih']);
        DB::table('villages')->insert(['id'=>79587, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Ganting Mudiak Utara Surantih']);
        DB::table('villages')->insert(['id'=>79588, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Koto Nan Tigo Selatan Surantih']);
        DB::table('villages')->insert(['id'=>79589, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Koto Nan Tigo Utara Surantih']);
        DB::table('villages')->insert(['id'=>79590, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Koto Taratak']);
        DB::table('villages')->insert(['id'=>79591, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Lansano Taratak']);
        DB::table('villages')->insert(['id'=>79592, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Rawanggunung Mamelo Surantih']);
        DB::table('villages')->insert(['id'=>79593, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Surantih']);
        DB::table('villages')->insert(['id'=>79594, 'districts_id'=>7000, 'zipcode'=>'25662', 'name'=>'Taratak']);
        //Kecamatan Lengayang Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7001, 'city_id'=>439, 'name'=>'Lengayang']);
        DB::table('villages')->insert(['id'=>79595, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Kambang']);
        DB::table('villages')->insert(['id'=>79596, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Kambang Barat']);
        DB::table('villages')->insert(['id'=>79597, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Kambang Timur']);
        DB::table('villages')->insert(['id'=>79598, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Kambang Utara']);
        DB::table('villages')->insert(['id'=>79599, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Lakitan']);
        DB::table('villages')->insert(['id'=>79600, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Lakitan Selatan']);
        DB::table('villages')->insert(['id'=>79601, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Lakitan Tengah']);
        DB::table('villages')->insert(['id'=>79602, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Lakitan Timur']);
        DB::table('villages')->insert(['id'=>79603, 'districts_id'=>7001, 'zipcode'=>'25663', 'name'=>'Lakitan Utara']);
        //Kecamatan Ranah Pesisir Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7002, 'city_id'=>439, 'name'=>'Ranah Pesisir']);
        DB::table('villages')->insert(['id'=>79604, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Koto Viii Pelangai']);
        DB::table('villages')->insert(['id'=>79605, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Nyiur Malambai Pelangai']);
        DB::table('villages')->insert(['id'=>79606, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Palangai Gadang']);
        DB::table('villages')->insert(['id'=>79607, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Pasia Palangai']);
        DB::table('villages')->insert(['id'=>79608, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Pelangai']);
        DB::table('villages')->insert(['id'=>79609, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Pelangai Kaciak']);
        DB::table('villages')->insert(['id'=>79610, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Sungai Tunu']);
        DB::table('villages')->insert(['id'=>79611, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Sungailiku Pelangai']);
        DB::table('villages')->insert(['id'=>79612, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Sungaitunu Barat']);
        DB::table('villages')->insert(['id'=>79613, 'districts_id'=>7002, 'zipcode'=>'25666', 'name'=>'Sungaitunu Utara']);
        //Kecamatan Linggo Sari Baganti Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7003, 'city_id'=>439, 'name'=>'Linggo Sari Baganti']);
        DB::table('villages')->insert(['id'=>79614, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Air Haji']);
        DB::table('villages')->insert(['id'=>79615, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Air Haji Barat']);
        DB::table('villages')->insert(['id'=>79616, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Air Haji Tengah']);
        DB::table('villages')->insert(['id'=>79617, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Air Haji Tenggara']);
        DB::table('villages')->insert(['id'=>79618, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Lagan Hilir Punggasan']);
        DB::table('villages')->insert(['id'=>79619, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Lagan Mudik Punggasan']);
        DB::table('villages')->insert(['id'=>79620, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Muaragadang Air Haji']);
        DB::table('villages')->insert(['id'=>79621, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Muarakandis Punggasan']);
        DB::table('villages')->insert(['id'=>79622, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Padang Xi Punggasan']);
        DB::table('villages')->insert(['id'=>79623, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Pasar Bukit Air Haji']);
        DB::table('villages')->insert(['id'=>79624, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Pasar Lama Muara Air Haji']);
        DB::table('villages')->insert(['id'=>79625, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Punggasan']);
        DB::table('villages')->insert(['id'=>79626, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Punggasan Timur']);
        DB::table('villages')->insert(['id'=>79627, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Punggasan Utara']);
        DB::table('villages')->insert(['id'=>79628, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Rantau Simalenang Air Haji']);
        DB::table('villages')->insert(['id'=>79629, 'districts_id'=>7003, 'zipcode'=>'25668', 'name'=>'Sungaisirah Air Haji']);
        //Kecamatan Basa Ampek Balai Tapan Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7004, 'city_id'=>439, 'name'=>'Basa Ampek Balai Tapan']);
        DB::table('villages')->insert(['id'=>79630, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Ampang Tulak Tapan']);
        DB::table('villages')->insert(['id'=>79631, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Batang Arah Tapan']);
        DB::table('villages')->insert(['id'=>79632, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Batang Betung Tapan']);
        DB::table('villages')->insert(['id'=>79633, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Bukitbuai Tapan']);
        DB::table('villages')->insert(['id'=>79634, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Dusun Baru Tapan']);
        DB::table('villages')->insert(['id'=>79635, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Koto Anau Tapan']);
        DB::table('villages')->insert(['id'=>79636, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Limau Purut Tapan']);
        DB::table('villages')->insert(['id'=>79637, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Pasar Tapan']);
        DB::table('villages')->insert(['id'=>79638, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Riakdanau Tapan']);
        DB::table('villages')->insert(['id'=>79639, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Tanjungpondok Tapan']);
        DB::table('villages')->insert(['id'=>79640, 'districts_id'=>7004, 'zipcode'=>'25673', 'name'=>'Tapan']);
        //Kecamatan Ranah Ampek Hulu Tapan Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7005, 'city_id'=>439, 'name'=>'Ranah Ampek Hulu Tapan']);
        DB::table('villages')->insert(['id'=>79641, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Binjai Tapan']);
        DB::table('villages')->insert(['id'=>79642, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Kampung Tengah Tapan']);
        DB::table('villages')->insert(['id'=>79643, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Kobu Tapan']);
        DB::table('villages')->insert(['id'=>79644, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Simpanggunung Tapan']);
        DB::table('villages')->insert(['id'=>79645, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Sungaigambir Sako Tapan']);
        DB::table('villages')->insert(['id'=>79646, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Sungaipinang Tapan']);
        DB::table('villages')->insert(['id'=>79647, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Talang Balarik Tapan']);
        DB::table('villages')->insert(['id'=>79648, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Talang Koto Pulai Tapan']);
        DB::table('villages')->insert(['id'=>79649, 'districts_id'=>7005, 'zipcode'=>'25673', 'name'=>'Tebing Tinggi Tapan']);
        //Kecamatan Airpura Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7006, 'city_id'=>439, 'name'=>'Airpura']);
        DB::table('villages')->insert(['id'=>79650, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Damar Lapan Batang Inderapura']);
        DB::table('villages')->insert(['id'=>79651, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Indrapura/inderapura Timur']);
        DB::table('villages')->insert(['id'=>79652, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Indrapura/inderapura Utara']);
        DB::table('villages')->insert(['id'=>79653, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Lalang Panjang Inderapura']);
        DB::table('villages')->insert(['id'=>79654, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Lubuk Betung Inderapura']);
        DB::table('villages')->insert(['id'=>79655, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Muara Inderapura']);
        DB::table('villages')->insert(['id'=>79656, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Palokan Inderapura']);
        DB::table('villages')->insert(['id'=>79657, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Pulaurajo Inderapura']);
        DB::table('villages')->insert(['id'=>79658, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Tanah Bakali Inderapura']);
        DB::table('villages')->insert(['id'=>79659, 'districts_id'=>7006, 'zipcode'=>'25673', 'name'=>'Tluk Kualo Inderapura']);
        //Kecamatan Pancung Soal Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7007, 'city_id'=>439, 'name'=>'Pancung Soal']);
        DB::table('villages')->insert(['id'=>79660, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Inderapura']);
        DB::table('villages')->insert(['id'=>79661, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Indrapura/inderapura Barat']);
        DB::table('villages')->insert(['id'=>79662, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Indrapura/inderapura Selatan']);
        DB::table('villages')->insert(['id'=>79663, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Indrapura/inderapura Tengah']);
        DB::table('villages')->insert(['id'=>79664, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Kudo-kudo Inderapura']);
        DB::table('villages')->insert(['id'=>79665, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Muaro Sakai Inderapura']);
        DB::table('villages')->insert(['id'=>79666, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Simpang Lama Inderapura']);
        DB::table('villages')->insert(['id'=>79667, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Tiga Sepakat Inderapura']);
        DB::table('villages')->insert(['id'=>79668, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Tigosungai Inderapura']);
        DB::table('villages')->insert(['id'=>79669, 'districts_id'=>7007, 'zipcode'=>'25673', 'name'=>'Tluk Amplu Inderapura']);
        //Kecamatan Silaut Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7008, 'city_id'=>439, 'name'=>'Silaut']);
        DB::table('villages')->insert(['id'=>79670, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Air Hitam']);
        DB::table('villages')->insert(['id'=>79671, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Durian Seribu']);
        DB::table('villages')->insert(['id'=>79672, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Lubuk Bunta']);
        DB::table('villages')->insert(['id'=>79673, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Pasir Binjai']);
        DB::table('villages')->insert(['id'=>79674, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Sambungo']);
        DB::table('villages')->insert(['id'=>79675, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Silaut']);
        DB::table('villages')->insert(['id'=>79676, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Sungaipulai']);
        DB::table('villages')->insert(['id'=>79677, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Sungaisarik']);
        DB::table('villages')->insert(['id'=>79678, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Sungaisirah']);
        DB::table('villages')->insert(['id'=>79679, 'districts_id'=>7008, 'zipcode'=>'25674', 'name'=>'Talang Binjai']);
        //Kecamatan Lunang Kab. Pesisir Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7009, 'city_id'=>439, 'name'=>'Lunang']);
        DB::table('villages')->insert(['id'=>79680, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Lunang']);
        DB::table('villages')->insert(['id'=>79681, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Lunang Barat']);
        DB::table('villages')->insert(['id'=>79682, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Lunang Dua']);
        DB::table('villages')->insert(['id'=>79683, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Lunang Satu']);
        DB::table('villages')->insert(['id'=>79684, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Lunang Selatan']);
        DB::table('villages')->insert(['id'=>79685, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Lunang Tengah']);
        DB::table('villages')->insert(['id'=>79686, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Lunang Tiga']);
        DB::table('villages')->insert(['id'=>79687, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Lunang Utara']);
        DB::table('villages')->insert(['id'=>79688, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Pondok Parian Lunang']);
        DB::table('villages')->insert(['id'=>79689, 'districts_id'=>7009, 'zipcode'=>'25674', 'name'=>'Sindang Lunang']);

        //Kota Bukittinggi Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>440, 'province_id'=>32, 'type'=>'city', 'name'=>'Bukittinggi']);
        //Kecamatan Guguk Panjang (guguak Panjang) Kota Bukittinggi Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7010, 'city_id'=>440, 'name'=>'Guguk Panjang (guguak Panjang)']);
        DB::table('villages')->insert(['id'=>79690, 'districts_id'=>7010, 'zipcode'=>'26111', 'name'=>'Aur Tajungkang Tengah Sawah']);
        DB::table('villages')->insert(['id'=>79691, 'districts_id'=>7010, 'zipcode'=>'26112', 'name'=>'Pakan Kurai']);
        DB::table('villages')->insert(['id'=>79692, 'districts_id'=>7010, 'zipcode'=>'26113', 'name'=>'Benteng Pasar Atas']);
        DB::table('villages')->insert(['id'=>79693, 'districts_id'=>7010, 'zipcode'=>'26114', 'name'=>'Bukit Apit Puhun']);
        DB::table('villages')->insert(['id'=>79694, 'districts_id'=>7010, 'zipcode'=>'26115', 'name'=>'Kayu Kubu']);
        DB::table('villages')->insert(['id'=>79695, 'districts_id'=>7010, 'zipcode'=>'26116', 'name'=>'Bukit Cangang Kayu Ramang']);
        DB::table('villages')->insert(['id'=>79696, 'districts_id'=>7010, 'zipcode'=>'26117', 'name'=>'Tarok Dipo']);
        //Kecamatan Mandiangin Koto Selayan Kota Bukittinggi Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7011, 'city_id'=>440, 'name'=>'Mandiangin Koto Selayan']);
        DB::table('villages')->insert(['id'=>79697, 'districts_id'=>7011, 'zipcode'=>'26121', 'name'=>'Campago Ipuh']);
        DB::table('villages')->insert(['id'=>79698, 'districts_id'=>7011, 'zipcode'=>'26122', 'name'=>'Kubu Gulai Bancah']);
        DB::table('villages')->insert(['id'=>79699, 'districts_id'=>7011, 'zipcode'=>'26123', 'name'=>'Puhun Pintu Kabun']);
        DB::table('villages')->insert(['id'=>79700, 'districts_id'=>7011, 'zipcode'=>'26124', 'name'=>'Puhun Tembok']);
        DB::table('villages')->insert(['id'=>79701, 'districts_id'=>7011, 'zipcode'=>'26125', 'name'=>'Pulai Anak Air']);
        DB::table('villages')->insert(['id'=>79702, 'districts_id'=>7011, 'zipcode'=>'26126', 'name'=>'Koto Selayan']);
        DB::table('villages')->insert(['id'=>79703, 'districts_id'=>7011, 'zipcode'=>'26127', 'name'=>'Garegeh']);
        DB::table('villages')->insert(['id'=>79704, 'districts_id'=>7011, 'zipcode'=>'26128', 'name'=>'Campago Guguk Bulek']);
        DB::table('villages')->insert(['id'=>79705, 'districts_id'=>7011, 'zipcode'=>'26129', 'name'=>'Manggis Ganting']);
        //Kecamatan Aur Birugo Tigo Baleh Kota Bukittinggi Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7012, 'city_id'=>440, 'name'=>'Aur Birugo Tigo Baleh']);
        DB::table('villages')->insert(['id'=>79706, 'districts_id'=>7012, 'zipcode'=>'26131', 'name'=>'Aur Kuning']);
        DB::table('villages')->insert(['id'=>79707, 'districts_id'=>7012, 'zipcode'=>'26132', 'name'=>'Parit Antang']);
        DB::table('villages')->insert(['id'=>79708, 'districts_id'=>7012, 'zipcode'=>'26133', 'name'=>'Kubu Tanjung']);
        DB::table('villages')->insert(['id'=>79709, 'districts_id'=>7012, 'zipcode'=>'26134', 'name'=>'Pakan Labuh/labuah']);
        DB::table('villages')->insert(['id'=>79710, 'districts_id'=>7012, 'zipcode'=>'26135', 'name'=>'Ladang Cakiah']);
        DB::table('villages')->insert(['id'=>79711, 'districts_id'=>7012, 'zipcode'=>'26136', 'name'=>'Belakang Balok']);
        DB::table('villages')->insert(['id'=>79712, 'districts_id'=>7012, 'zipcode'=>'26137', 'name'=>'Sapiran']);
        DB::table('villages')->insert(['id'=>79713, 'districts_id'=>7012, 'zipcode'=>'26138', 'name'=>'Birugo']);

        //Kab. Agam Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>441, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Agam']);
        //Kecamatan Palupuh Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7013, 'city_id'=>441, 'name'=>'Palupuh']);
        DB::table('villages')->insert(['id'=>79714, 'districts_id'=>7013, 'zipcode'=>'26151', 'name'=>'Koto Rantang']);
        DB::table('villages')->insert(['id'=>79715, 'districts_id'=>7013, 'zipcode'=>'26151', 'name'=>'Nan Tujuah']);
        DB::table('villages')->insert(['id'=>79716, 'districts_id'=>7013, 'zipcode'=>'26151', 'name'=>'Pagadih']);
        DB::table('villages')->insert(['id'=>79717, 'districts_id'=>7013, 'zipcode'=>'26151', 'name'=>'Pasia Laweh']);
        //Kecamatan Tilatang Kamang Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7014, 'city_id'=>441, 'name'=>'Tilatang Kamang']);
        DB::table('villages')->insert(['id'=>79718, 'districts_id'=>7014, 'zipcode'=>'26152', 'name'=>'Gaduk']);
        DB::table('villages')->insert(['id'=>79719, 'districts_id'=>7014, 'zipcode'=>'26152', 'name'=>'Kapau']);
        DB::table('villages')->insert(['id'=>79720, 'districts_id'=>7014, 'zipcode'=>'26152', 'name'=>'Koto Tangah']);
        //Kecamatan Kamang Magek Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7015, 'city_id'=>441, 'name'=>'Kamang Magek']);
        DB::table('villages')->insert(['id'=>79721, 'districts_id'=>7015, 'zipcode'=>'26152', 'name'=>'Kamang Hilia']);
        DB::table('villages')->insert(['id'=>79722, 'districts_id'=>7015, 'zipcode'=>'26152', 'name'=>'Kamang Mudiak']);
        DB::table('villages')->insert(['id'=>79723, 'districts_id'=>7015, 'zipcode'=>'26152', 'name'=>'Magek']);
        //Kecamatan Iv Koto (ampek Koto) Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7016, 'city_id'=>441, 'name'=>'Iv Koto (ampek Koto)']);
        DB::table('villages')->insert(['id'=>79724, 'districts_id'=>7016, 'zipcode'=>'26161', 'name'=>'Balingka']);
        DB::table('villages')->insert(['id'=>79725, 'districts_id'=>7016, 'zipcode'=>'26161', 'name'=>'Guguk Tabek Sarajo']);
        DB::table('villages')->insert(['id'=>79726, 'districts_id'=>7016, 'zipcode'=>'26161', 'name'=>'Koto Gadang']);
        DB::table('villages')->insert(['id'=>79727, 'districts_id'=>7016, 'zipcode'=>'26161', 'name'=>'Koto Panjang']);
        DB::table('villages')->insert(['id'=>79728, 'districts_id'=>7016, 'zipcode'=>'26161', 'name'=>'Koto Tuo']);
        DB::table('villages')->insert(['id'=>79729, 'districts_id'=>7016, 'zipcode'=>'26161', 'name'=>'Sianok Anam Suku']);
        DB::table('villages')->insert(['id'=>79730, 'districts_id'=>7016, 'zipcode'=>'26161', 'name'=>'Sungai Landia']);
        //Kecamatan Ampek Nagari (iv Nagari ) Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7017, 'city_id'=>441, 'name'=>'Ampek Nagari (iv Nagari )']);
        DB::table('villages')->insert(['id'=>79731, 'districts_id'=>7017, 'zipcode'=>'26161', 'name'=>'Batu Kambing']);
        DB::table('villages')->insert(['id'=>79732, 'districts_id'=>7017, 'zipcode'=>'26161', 'name'=>'Bawan']);
        DB::table('villages')->insert(['id'=>79733, 'districts_id'=>7017, 'zipcode'=>'26161', 'name'=>'Sitalang']);
        DB::table('villages')->insert(['id'=>79734, 'districts_id'=>7017, 'zipcode'=>'26161', 'name'=>'Sitanang']);
        //Kecamatan Malakak Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7018, 'city_id'=>441, 'name'=>'Malakak']);
        DB::table('villages')->insert(['id'=>79735, 'districts_id'=>7018, 'zipcode'=>'26161', 'name'=>'Malalak Barat']);
        DB::table('villages')->insert(['id'=>79736, 'districts_id'=>7018, 'zipcode'=>'26161', 'name'=>'Malalak Selatan']);
        DB::table('villages')->insert(['id'=>79737, 'districts_id'=>7018, 'zipcode'=>'26161', 'name'=>'Malalak Timur']);
        DB::table('villages')->insert(['id'=>79738, 'districts_id'=>7018, 'zipcode'=>'26161', 'name'=>'Malalak Utara']);
        //Kecamatan Matur Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7019, 'city_id'=>441, 'name'=>'Matur']);
        DB::table('villages')->insert(['id'=>79739, 'districts_id'=>7019, 'zipcode'=>'26162', 'name'=>'Lawang']);
        DB::table('villages')->insert(['id'=>79740, 'districts_id'=>7019, 'zipcode'=>'26162', 'name'=>'Matur Hilia']);
        DB::table('villages')->insert(['id'=>79741, 'districts_id'=>7019, 'zipcode'=>'26162', 'name'=>'Matur Mudiak']);
        DB::table('villages')->insert(['id'=>79742, 'districts_id'=>7019, 'zipcode'=>'26162', 'name'=>'Panta Pauh']);
        DB::table('villages')->insert(['id'=>79743, 'districts_id'=>7019, 'zipcode'=>'26162', 'name'=>'Parik Panjang']);
        DB::table('villages')->insert(['id'=>79744, 'districts_id'=>7019, 'zipcode'=>'26162', 'name'=>'Tigo Balai']);
        //Kecamatan Palembayan Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7020, 'city_id'=>441, 'name'=>'Palembayan']);
        DB::table('villages')->insert(['id'=>79745, 'districts_id'=>7020, 'zipcode'=>'26164', 'name'=>'Ampek Koto Palembayan']);
        DB::table('villages')->insert(['id'=>79746, 'districts_id'=>7020, 'zipcode'=>'26164', 'name'=>'Baringin']);
        DB::table('villages')->insert(['id'=>79747, 'districts_id'=>7020, 'zipcode'=>'26164', 'name'=>'Salareh Aia']);
        DB::table('villages')->insert(['id'=>79748, 'districts_id'=>7020, 'zipcode'=>'26164', 'name'=>'Sipinang']);
        DB::table('villages')->insert(['id'=>79749, 'districts_id'=>7020, 'zipcode'=>'26164', 'name'=>'Sungai Puar']);
        DB::table('villages')->insert(['id'=>79750, 'districts_id'=>7020, 'zipcode'=>'26164', 'name'=>'Tigo Koto Silungkang']);
        //Kecamatan Sungai Pua (puar) Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7021, 'city_id'=>441, 'name'=>'Sungai Pua (puar)']);
        DB::table('villages')->insert(['id'=>79751, 'districts_id'=>7021, 'zipcode'=>'26181', 'name'=>'Batagak']);
        DB::table('villages')->insert(['id'=>79752, 'districts_id'=>7021, 'zipcode'=>'26181', 'name'=>'Batu Palano']);
        DB::table('villages')->insert(['id'=>79753, 'districts_id'=>7021, 'zipcode'=>'26181', 'name'=>'Padang Laweh']);
        DB::table('villages')->insert(['id'=>79754, 'districts_id'=>7021, 'zipcode'=>'26181', 'name'=>'Sariak']);
        DB::table('villages')->insert(['id'=>79755, 'districts_id'=>7021, 'zipcode'=>'26181', 'name'=>'Sungai Pua']);
        //Kecamatan Banuhampu Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7022, 'city_id'=>441, 'name'=>'Banuhampu']);
        DB::table('villages')->insert(['id'=>79756, 'districts_id'=>7022, 'zipcode'=>'26181', 'name'=>'Cingkariang']);
        DB::table('villages')->insert(['id'=>79757, 'districts_id'=>7022, 'zipcode'=>'26181', 'name'=>'Kubang Putiah']);
        DB::table('villages')->insert(['id'=>79758, 'districts_id'=>7022, 'zipcode'=>'26181', 'name'=>'Ladang Laweh']);
        DB::table('villages')->insert(['id'=>79759, 'districts_id'=>7022, 'zipcode'=>'26181', 'name'=>'Padang Lua']);
        DB::table('villages')->insert(['id'=>79760, 'districts_id'=>7022, 'zipcode'=>'26181', 'name'=>'Pakan Sinayan']);
        DB::table('villages')->insert(['id'=>79761, 'districts_id'=>7022, 'zipcode'=>'26181', 'name'=>'Taluak Ampek Suku']);
        //Kecamatan Iv Angkat Candung (ampek Angkek) Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7023, 'city_id'=>441, 'name'=>'Iv Angkat Candung (ampek Angkek)']);
        DB::table('villages')->insert(['id'=>79762, 'districts_id'=>7023, 'zipcode'=>'26191', 'name'=>'Ampang Gadang']);
        DB::table('villages')->insert(['id'=>79763, 'districts_id'=>7023, 'zipcode'=>'26191', 'name'=>'Balai Gurah']);
        DB::table('villages')->insert(['id'=>79764, 'districts_id'=>7023, 'zipcode'=>'26191', 'name'=>'Batu Taba']);
        DB::table('villages')->insert(['id'=>79765, 'districts_id'=>7023, 'zipcode'=>'26191', 'name'=>'Biaro Gadang']);
        DB::table('villages')->insert(['id'=>79766, 'districts_id'=>7023, 'zipcode'=>'26191', 'name'=>'Lambah']);
        DB::table('villages')->insert(['id'=>79767, 'districts_id'=>7023, 'zipcode'=>'26191', 'name'=>'Panampung']);
        DB::table('villages')->insert(['id'=>79768, 'districts_id'=>7023, 'zipcode'=>'26191', 'name'=>'Pasia']);
        //Kecamatan Candung Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7024, 'city_id'=>441, 'name'=>'Candung']);
        DB::table('villages')->insert(['id'=>79769, 'districts_id'=>7024, 'zipcode'=>'26191', 'name'=>'Bukik Batabuah']);
        DB::table('villages')->insert(['id'=>79770, 'districts_id'=>7024, 'zipcode'=>'26191', 'name'=>'Canduang Koto Laweh']);
        DB::table('villages')->insert(['id'=>79771, 'districts_id'=>7024, 'zipcode'=>'26191', 'name'=>'Lasi']);
        //Kecamatan Baso Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7025, 'city_id'=>441, 'name'=>'Baso']);
        DB::table('villages')->insert(['id'=>79772, 'districts_id'=>7025, 'zipcode'=>'26192', 'name'=>'Bungo Koto Tuo']);
        DB::table('villages')->insert(['id'=>79773, 'districts_id'=>7025, 'zipcode'=>'26192', 'name'=>'Koto Baru Iii Jorong']);
        DB::table('villages')->insert(['id'=>79774, 'districts_id'=>7025, 'zipcode'=>'26192', 'name'=>'Koto Tinggi']);
        DB::table('villages')->insert(['id'=>79775, 'districts_id'=>7025, 'zipcode'=>'26192', 'name'=>'Padang Tarok']);
        DB::table('villages')->insert(['id'=>79776, 'districts_id'=>7025, 'zipcode'=>'26192', 'name'=>'Salo']);
        DB::table('villages')->insert(['id'=>79777, 'districts_id'=>7025, 'zipcode'=>'26192', 'name'=>'Simarasok']);
        DB::table('villages')->insert(['id'=>79778, 'districts_id'=>7025, 'zipcode'=>'26192', 'name'=>'Tabek Panjang']);
        //Kecamatan Lubuk Basung Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7026, 'city_id'=>441, 'name'=>'Lubuk Basung']);
        DB::table('villages')->insert(['id'=>79779, 'districts_id'=>7026, 'zipcode'=>'26451', 'name'=>'Geragahan']);
        DB::table('villages')->insert(['id'=>79780, 'districts_id'=>7026, 'zipcode'=>'26451', 'name'=>'Kampung Pinang']);
        DB::table('villages')->insert(['id'=>79781, 'districts_id'=>7026, 'zipcode'=>'26451', 'name'=>'Kampung Tangah']);
        DB::table('villages')->insert(['id'=>79782, 'districts_id'=>7026, 'zipcode'=>'26451', 'name'=>'Lubuk Basung']);
        DB::table('villages')->insert(['id'=>79783, 'districts_id'=>7026, 'zipcode'=>'26451', 'name'=>'Manggopoh']);
        //Kecamatan Tanjung Raya Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7027, 'city_id'=>441, 'name'=>'Tanjung Raya']);
        DB::table('villages')->insert(['id'=>79784, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Bayua']);
        DB::table('villages')->insert(['id'=>79785, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Duo Koto']);
        DB::table('villages')->insert(['id'=>79786, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Koto Gadang']);
        DB::table('villages')->insert(['id'=>79787, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Koto Kaciak']);
        DB::table('villages')->insert(['id'=>79788, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Koto Malintang']);
        DB::table('villages')->insert(['id'=>79789, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Maninjau']);
        DB::table('villages')->insert(['id'=>79790, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Paninjauan']);
        DB::table('villages')->insert(['id'=>79791, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Sungai Batang']);
        DB::table('villages')->insert(['id'=>79792, 'districts_id'=>7027, 'zipcode'=>'26471', 'name'=>'Tanjung Sani']);
        //Kecamatan Tanjung Mutiara Kab. Agam Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7028, 'city_id'=>441, 'name'=>'Tanjung Mutiara']);
        DB::table('villages')->insert(['id'=>79793, 'districts_id'=>7028, 'zipcode'=>'26473', 'name'=>'Tiku Limo Jorong']);
        DB::table('villages')->insert(['id'=>79794, 'districts_id'=>7028, 'zipcode'=>'26473', 'name'=>'Tiku Selatan']);
        DB::table('villages')->insert(['id'=>79795, 'districts_id'=>7028, 'zipcode'=>'26473', 'name'=>'Tiku Utara']);

        //Kota Payakumbuh Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>442, 'province_id'=>32, 'type'=>'city', 'name'=>'Payakumbuh']);
        //Kecamatan Payakumbuh Utara Kota Payakumbuh Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7029, 'city_id'=>442, 'name'=>'Payakumbuh Utara']);
        DB::table('villages')->insert(['id'=>79796, 'districts_id'=>7029, 'zipcode'=>'26211', 'name'=>'Bunian']);
        DB::table('villages')->insert(['id'=>79797, 'districts_id'=>7029, 'zipcode'=>'26211', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>79798, 'districts_id'=>7029, 'zipcode'=>'26212', 'name'=>'Balai Baru']);
        DB::table('villages')->insert(['id'=>79799, 'districts_id'=>7029, 'zipcode'=>'26212', 'name'=>'Balai Gurun']);
        DB::table('villages')->insert(['id'=>79800, 'districts_id'=>7029, 'zipcode'=>'26213', 'name'=>'Balai Kalikih']);
        DB::table('villages')->insert(['id'=>79801, 'districts_id'=>7029, 'zipcode'=>'26213', 'name'=>'Kubu Gadang']);
        DB::table('villages')->insert(['id'=>79802, 'districts_id'=>7029, 'zipcode'=>'26213', 'name'=>'Labuh/labuah Baru']);
        DB::table('villages')->insert(['id'=>79803, 'districts_id'=>7029, 'zipcode'=>'26214', 'name'=>'Balai Cacang']);
        DB::table('villages')->insert(['id'=>79804, 'districts_id'=>7029, 'zipcode'=>'26214', 'name'=>'Balai Gadang']);
        DB::table('villages')->insert(['id'=>79805, 'districts_id'=>7029, 'zipcode'=>'26214', 'name'=>'Balai Jaring/jariang']);
        DB::table('villages')->insert(['id'=>79806, 'districts_id'=>7029, 'zipcode'=>'26215', 'name'=>'Kaning/kaniang Bukik']);
        DB::table('villages')->insert(['id'=>79807, 'districts_id'=>7029, 'zipcode'=>'26215', 'name'=>'Muaro']);
        DB::table('villages')->insert(['id'=>79808, 'districts_id'=>7029, 'zipcode'=>'26215', 'name'=>'Nan Kodok']);
        DB::table('villages')->insert(['id'=>79809, 'districts_id'=>7029, 'zipcode'=>'26215', 'name'=>'Pasir/pasie']);
        DB::table('villages')->insert(['id'=>79810, 'districts_id'=>7029, 'zipcode'=>'26216', 'name'=>'Balai Betung (batung/batuang)']);
        DB::table('villages')->insert(['id'=>79811, 'districts_id'=>7029, 'zipcode'=>'26216', 'name'=>'Talawi']);
        DB::table('villages')->insert(['id'=>79812, 'districts_id'=>7029, 'zipcode'=>'26216', 'name'=>'Tanjung Anau (tanjuang Anau)']);
        DB::table('villages')->insert(['id'=>79813, 'districts_id'=>7029, 'zipcode'=>'26216', 'name'=>'Taruko']);
        DB::table('villages')->insert(['id'=>79814, 'districts_id'=>7029, 'zipcode'=>'26217', 'name'=>'Cubadak Air/aie']);
        DB::table('villages')->insert(['id'=>79815, 'districts_id'=>7029, 'zipcode'=>'26217', 'name'=>'Payolinyam']);
        DB::table('villages')->insert(['id'=>79816, 'districts_id'=>7029, 'zipcode'=>'26217', 'name'=>'Payonibung/payonibuang']);
        DB::table('villages')->insert(['id'=>79817, 'districts_id'=>7029, 'zipcode'=>'26217', 'name'=>'Timbago/tambago']);
        DB::table('villages')->insert(['id'=>79818, 'districts_id'=>7029, 'zipcode'=>'26218', 'name'=>'Napar']);
        DB::table('villages')->insert(['id'=>79819, 'districts_id'=>7029, 'zipcode'=>'26218', 'name'=>'Padang Kaduduk/kaduduak']);
        DB::table('villages')->insert(['id'=>79820, 'districts_id'=>7029, 'zipcode'=>'26218', 'name'=>'Tarok']);
        //Kecamatan Lamposi Tigo Nagari Kota Payakumbuh Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7030, 'city_id'=>442, 'name'=>'Lamposi Tigo Nagari']);
        DB::table('villages')->insert(['id'=>79821, 'districts_id'=>7030, 'zipcode'=>'26219', 'name'=>'Koto Panjang']);
        DB::table('villages')->insert(['id'=>79822, 'districts_id'=>7030, 'zipcode'=>'26219', 'name'=>'Koto Panjang Dalam']);
        DB::table('villages')->insert(['id'=>79823, 'districts_id'=>7030, 'zipcode'=>'26219', 'name'=>'Padang Sikabu']);
        DB::table('villages')->insert(['id'=>79824, 'districts_id'=>7030, 'zipcode'=>'26219', 'name'=>'Parambahan']);
        DB::table('villages')->insert(['id'=>79825, 'districts_id'=>7030, 'zipcode'=>'26219', 'name'=>'Parik Muko Aie (parit Muka Air)']);
        DB::table('villages')->insert(['id'=>79826, 'districts_id'=>7030, 'zipcode'=>'26219', 'name'=>'Sei/sungai Durian']);
        //Kecamatan Payakumbuh Barat Kota Payakumbuh Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7031, 'city_id'=>442, 'name'=>'Payakumbuh Barat']);
        DB::table('villages')->insert(['id'=>79827, 'districts_id'=>7031, 'zipcode'=>'26221', 'name'=>'Daya Bangun']);
        DB::table('villages')->insert(['id'=>79828, 'districts_id'=>7031, 'zipcode'=>'26221', 'name'=>'Nunang']);
        DB::table('villages')->insert(['id'=>79829, 'districts_id'=>7031, 'zipcode'=>'26222', 'name'=>'Parak Batung (betung/batuang)']);
        DB::table('villages')->insert(['id'=>79830, 'districts_id'=>7031, 'zipcode'=>'26222', 'name'=>'Parik/parit Rantang']);
        DB::table('villages')->insert(['id'=>79831, 'districts_id'=>7031, 'zipcode'=>'26223', 'name'=>'Koto Tangah']);
        DB::table('villages')->insert(['id'=>79832, 'districts_id'=>7031, 'zipcode'=>'26223', 'name'=>'Padang Datar']);
        DB::table('villages')->insert(['id'=>79833, 'districts_id'=>7031, 'zipcode'=>'26223', 'name'=>'Subarang Batung (betung/batuang)']);
        DB::table('villages')->insert(['id'=>79834, 'districts_id'=>7031, 'zipcode'=>'26223', 'name'=>'Tanah Mati']);
        DB::table('villages')->insert(['id'=>79835, 'districts_id'=>7031, 'zipcode'=>'26224', 'name'=>'Balai Nan Duo']);
        DB::table('villages')->insert(['id'=>79836, 'districts_id'=>7031, 'zipcode'=>'26224', 'name'=>'Padang Tangah']);
        DB::table('villages')->insert(['id'=>79837, 'districts_id'=>7031, 'zipcode'=>'26224', 'name'=>'Padang Tinggi']);
        DB::table('villages')->insert(['id'=>79838, 'districts_id'=>7031, 'zipcode'=>'26224', 'name'=>'Piliang']);
        DB::table('villages')->insert(['id'=>79839, 'districts_id'=>7031, 'zipcode'=>'26224', 'name'=>'Sei/sungai Panago/pinago']);
        DB::table('villages')->insert(['id'=>79840, 'districts_id'=>7031, 'zipcode'=>'26225', 'name'=>'Bulakan Balai Kandih']);
        DB::table('villages')->insert(['id'=>79841, 'districts_id'=>7031, 'zipcode'=>'26225', 'name'=>'Payolansek']);
        DB::table('villages')->insert(['id'=>79842, 'districts_id'=>7031, 'zipcode'=>'26225', 'name'=>'Talang']);
        DB::table('villages')->insert(['id'=>79843, 'districts_id'=>7031, 'zipcode'=>'26225', 'name'=>'Tanjung/tanjuang Gadang']);
        DB::table('villages')->insert(['id'=>79844, 'districts_id'=>7031, 'zipcode'=>'26226', 'name'=>'Kubu Gadang']);
        DB::table('villages')->insert(['id'=>79845, 'districts_id'=>7031, 'zipcode'=>'26226', 'name'=>'Pakan Sinayan']);
        DB::table('villages')->insert(['id'=>79846, 'districts_id'=>7031, 'zipcode'=>'26229', 'name'=>'Ibuh']);
        DB::table('villages')->insert(['id'=>79847, 'districts_id'=>7031, 'zipcode'=>'26229', 'name'=>'Labuh/labuah Basilang']);
        DB::table('villages')->insert(['id'=>79848, 'districts_id'=>7031, 'zipcode'=>'26229', 'name'=>'Tanjung Pauh/tanjuang Pauah']);
        //Kecamatan Payakumbuh Selatan Kota Payakumbuh Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7032, 'city_id'=>442, 'name'=>'Payakumbuh Selatan']);
        DB::table('villages')->insert(['id'=>79849, 'districts_id'=>7032, 'zipcode'=>'26226', 'name'=>'Balai Panjang']);
        DB::table('villages')->insert(['id'=>79850, 'districts_id'=>7032, 'zipcode'=>'26226', 'name'=>'Koto Tuo']);
        DB::table('villages')->insert(['id'=>79851, 'districts_id'=>7032, 'zipcode'=>'26227', 'name'=>'Limbukan']);
        DB::table('villages')->insert(['id'=>79852, 'districts_id'=>7032, 'zipcode'=>'26227', 'name'=>'Limo Kampung/kampuang']);
        DB::table('villages')->insert(['id'=>79853, 'districts_id'=>7032, 'zipcode'=>'26227', 'name'=>'Padang Kerambil/karambia']);
        DB::table('villages')->insert(['id'=>79854, 'districts_id'=>7032, 'zipcode'=>'26228', 'name'=>'Ampangan']);
        DB::table('villages')->insert(['id'=>79855, 'districts_id'=>7032, 'zipcode'=>'26228', 'name'=>'Aur Kuning/aua Kuniang']);
        DB::table('villages')->insert(['id'=>79856, 'districts_id'=>7032, 'zipcode'=>'26228', 'name'=>'Kapalo Koto']);
        DB::table('villages')->insert(['id'=>79857, 'districts_id'=>7032, 'zipcode'=>'26228', 'name'=>'Sawah Padang']);
        //Kecamatan Payakumbuh Timur Kota Payakumbuh Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7033, 'city_id'=>442, 'name'=>'Payakumbuh Timur']);
        DB::table('villages')->insert(['id'=>79858, 'districts_id'=>7033, 'zipcode'=>'26231', 'name'=>'Balai Batimah']);
        DB::table('villages')->insert(['id'=>79859, 'districts_id'=>7033, 'zipcode'=>'26231', 'name'=>'Balai Nan Tuo']);
        DB::table('villages')->insert(['id'=>79860, 'districts_id'=>7033, 'zipcode'=>'26231', 'name'=>'Padang Tangah Payobadar']);
        DB::table('villages')->insert(['id'=>79861, 'districts_id'=>7033, 'zipcode'=>'26231', 'name'=>'Ranah']);
        DB::table('villages')->insert(['id'=>79862, 'districts_id'=>7033, 'zipcode'=>'26232', 'name'=>'Padang Tiakar Hilir/hilie']);
        DB::table('villages')->insert(['id'=>79863, 'districts_id'=>7033, 'zipcode'=>'26232', 'name'=>'Padang Tiakar Mudik/mudiak']);
        DB::table('villages')->insert(['id'=>79864, 'districts_id'=>7033, 'zipcode'=>'26233', 'name'=>'Sicincin Hilir/hilie']);
        DB::table('villages')->insert(['id'=>79865, 'districts_id'=>7033, 'zipcode'=>'26233', 'name'=>'Sicincin Mudik/mudiak']);
        DB::table('villages')->insert(['id'=>79866, 'districts_id'=>7033, 'zipcode'=>'26235', 'name'=>'Balai Jaring/jariang']);
        DB::table('villages')->insert(['id'=>79867, 'districts_id'=>7033, 'zipcode'=>'26235', 'name'=>'Bodi']);
        DB::table('villages')->insert(['id'=>79868, 'districts_id'=>7033, 'zipcode'=>'26236', 'name'=>'Padang Alai']);
        DB::table('villages')->insert(['id'=>79869, 'districts_id'=>7033, 'zipcode'=>'26237', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>79870, 'districts_id'=>7033, 'zipcode'=>'26237', 'name'=>'Koto Panjang']);
        DB::table('villages')->insert(['id'=>79871, 'districts_id'=>7033, 'zipcode'=>'26237', 'name'=>'Payobasung/payobasuang']);

        //Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>443, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Lima Puluh Koto/kota']);
        //Kecamatan Payakumbuh Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7034, 'city_id'=>443, 'name'=>'Payakumbuh']);
        DB::table('villages')->insert(['id'=>79872, 'districts_id'=>7034, 'zipcode'=>'26251', 'name'=>'Koto Baru Simalanggang']);
        DB::table('villages')->insert(['id'=>79873, 'districts_id'=>7034, 'zipcode'=>'26251', 'name'=>'Koto Tangah Simalanggang']);
        DB::table('villages')->insert(['id'=>79874, 'districts_id'=>7034, 'zipcode'=>'26251', 'name'=>'Piobang']);
        DB::table('villages')->insert(['id'=>79875, 'districts_id'=>7034, 'zipcode'=>'26251', 'name'=>'Simalanggang']);
        DB::table('villages')->insert(['id'=>79876, 'districts_id'=>7034, 'zipcode'=>'26251', 'name'=>'Sungai Beringin']);
        DB::table('villages')->insert(['id'=>79877, 'districts_id'=>7034, 'zipcode'=>'26251', 'name'=>'Taeh Baruah']);
        DB::table('villages')->insert(['id'=>79878, 'districts_id'=>7034, 'zipcode'=>'26251', 'name'=>'Taeh Bukik']);
        //Kecamatan Akabiluru Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7035, 'city_id'=>443, 'name'=>'Akabiluru']);
        DB::table('villages')->insert(['id'=>79879, 'districts_id'=>7035, 'zipcode'=>'26252', 'name'=>'Batu Hampa']);
        DB::table('villages')->insert(['id'=>79880, 'districts_id'=>7035, 'zipcode'=>'26252', 'name'=>'Durian Gadang']);
        DB::table('villages')->insert(['id'=>79881, 'districts_id'=>7035, 'zipcode'=>'26252', 'name'=>'Koto Tangah Batu Hampa']);
        DB::table('villages')->insert(['id'=>79882, 'districts_id'=>7035, 'zipcode'=>'26252', 'name'=>'Pauh Sangik']);
        DB::table('villages')->insert(['id'=>79883, 'districts_id'=>7035, 'zipcode'=>'26252', 'name'=>'Sariak Laweh']);
        DB::table('villages')->insert(['id'=>79884, 'districts_id'=>7035, 'zipcode'=>'26252', 'name'=>'Sei/sungai Balantik']);
        DB::table('villages')->insert(['id'=>79885, 'districts_id'=>7035, 'zipcode'=>'26252', 'name'=>'Suayan']);
        //Kecamatan Situjuah Limo/lima Nagari Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7036, 'city_id'=>443, 'name'=>'Situjuah Limo/lima Nagari']);
        DB::table('villages')->insert(['id'=>79886, 'districts_id'=>7036, 'zipcode'=>'26252', 'name'=>'Situjuah Banda Dalam']);
        DB::table('villages')->insert(['id'=>79887, 'districts_id'=>7036, 'zipcode'=>'26252', 'name'=>'Situjuah Batua']);
        DB::table('villages')->insert(['id'=>79888, 'districts_id'=>7036, 'zipcode'=>'26252', 'name'=>'Situjuah Gadang']);
        DB::table('villages')->insert(['id'=>79889, 'districts_id'=>7036, 'zipcode'=>'26252', 'name'=>'Situjuah Ladang Laweh']);
        DB::table('villages')->insert(['id'=>79890, 'districts_id'=>7036, 'zipcode'=>'26252', 'name'=>'Tungka']);
        //Kecamatan Guguak (gugu) Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7037, 'city_id'=>443, 'name'=>'Guguak (gugu)']);
        DB::table('villages')->insert(['id'=>79891, 'districts_id'=>7037, 'zipcode'=>'26253', 'name'=>'Guguak Viii Koto']);
        DB::table('villages')->insert(['id'=>79892, 'districts_id'=>7037, 'zipcode'=>'26253', 'name'=>'Kubang']);
        DB::table('villages')->insert(['id'=>79893, 'districts_id'=>7037, 'zipcode'=>'26253', 'name'=>'Simpang Sugiran']);
        DB::table('villages')->insert(['id'=>79894, 'districts_id'=>7037, 'zipcode'=>'26253', 'name'=>'Sungai Talang']);
        DB::table('villages')->insert(['id'=>79895, 'districts_id'=>7037, 'zipcode'=>'26253', 'name'=>'Vii/tujuh Koto Talago']);
        //Kecamatan Mungka Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7038, 'city_id'=>443, 'name'=>'Mungka']);
        DB::table('villages')->insert(['id'=>79896, 'districts_id'=>7038, 'zipcode'=>'26254', 'name'=>'Jopang Manganti']);
        DB::table('villages')->insert(['id'=>79897, 'districts_id'=>7038, 'zipcode'=>'26254', 'name'=>'Mungka']);
        DB::table('villages')->insert(['id'=>79898, 'districts_id'=>7038, 'zipcode'=>'26254', 'name'=>'Simpang Kapuak']);
        DB::table('villages')->insert(['id'=>79899, 'districts_id'=>7038, 'zipcode'=>'26254', 'name'=>'Sungai Antuan']);
        DB::table('villages')->insert(['id'=>79900, 'districts_id'=>7038, 'zipcode'=>'26254', 'name'=>'Talang Maua']);
        //Kecamatan Suliki Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7039, 'city_id'=>443, 'name'=>'Suliki']);
        DB::table('villages')->insert(['id'=>79901, 'districts_id'=>7039, 'zipcode'=>'26255', 'name'=>'Andiang']);
        DB::table('villages')->insert(['id'=>79902, 'districts_id'=>7039, 'zipcode'=>'26255', 'name'=>'Kurai']);
        DB::table('villages')->insert(['id'=>79903, 'districts_id'=>7039, 'zipcode'=>'26255', 'name'=>'Limbanang']);
        DB::table('villages')->insert(['id'=>79904, 'districts_id'=>7039, 'zipcode'=>'26255', 'name'=>'Suliki']);
        DB::table('villages')->insert(['id'=>79905, 'districts_id'=>7039, 'zipcode'=>'26255', 'name'=>'Sungai Rimbang']);
        DB::table('villages')->insert(['id'=>79906, 'districts_id'=>7039, 'zipcode'=>'26255', 'name'=>'Tanjuang Bungo']);
        //Kecamatan Gunuang Omeh (gunung Mas) Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7040, 'city_id'=>443, 'name'=>'Gunuang Omeh (gunung Mas)']);
        DB::table('villages')->insert(['id'=>79907, 'districts_id'=>7040, 'zipcode'=>'26256', 'name'=>'Koto Tinggi']);
        DB::table('villages')->insert(['id'=>79908, 'districts_id'=>7040, 'zipcode'=>'26256', 'name'=>'Pandam Gadang']);
        DB::table('villages')->insert(['id'=>79909, 'districts_id'=>7040, 'zipcode'=>'26256', 'name'=>'Talang Anau']);
        //Kecamatan Bukik Barisan Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7041, 'city_id'=>443, 'name'=>'Bukik Barisan']);
        DB::table('villages')->insert(['id'=>79910, 'districts_id'=>7041, 'zipcode'=>'26257', 'name'=>'Banja Laweh']);
        DB::table('villages')->insert(['id'=>79911, 'districts_id'=>7041, 'zipcode'=>'26257', 'name'=>'Baruah Gunuang']);
        DB::table('villages')->insert(['id'=>79912, 'districts_id'=>7041, 'zipcode'=>'26257', 'name'=>'Koto Tangah']);
        DB::table('villages')->insert(['id'=>79913, 'districts_id'=>7041, 'zipcode'=>'26257', 'name'=>'Maek']);
        DB::table('villages')->insert(['id'=>79914, 'districts_id'=>7041, 'zipcode'=>'26257', 'name'=>'Sungai Naniang']);
        //Kecamatan Luak (luhak) Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7042, 'city_id'=>443, 'name'=>'Luak (luhak)']);
        DB::table('villages')->insert(['id'=>79915, 'districts_id'=>7042, 'zipcode'=>'26261', 'name'=>'Andaleh']);
        DB::table('villages')->insert(['id'=>79916, 'districts_id'=>7042, 'zipcode'=>'26261', 'name'=>'Mungo']);
        DB::table('villages')->insert(['id'=>79917, 'districts_id'=>7042, 'zipcode'=>'26261', 'name'=>'Sungai Kamuyang']);
        DB::table('villages')->insert(['id'=>79918, 'districts_id'=>7042, 'zipcode'=>'26261', 'name'=>'Tanjung Haro (sikabu-kabu/tanjuang Haro)']);
        //Kecamatan Lareh Sago Halaban Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7043, 'city_id'=>443, 'name'=>'Lareh Sago Halaban']);
        DB::table('villages')->insert(['id'=>79919, 'districts_id'=>7043, 'zipcode'=>'26262', 'name'=>'Ampalu']);
        DB::table('villages')->insert(['id'=>79920, 'districts_id'=>7043, 'zipcode'=>'26262', 'name'=>'Balai Panjang']);
        DB::table('villages')->insert(['id'=>79921, 'districts_id'=>7043, 'zipcode'=>'26262', 'name'=>'Batu Payung']);
        DB::table('villages')->insert(['id'=>79922, 'districts_id'=>7043, 'zipcode'=>'26262', 'name'=>'Bukik Sikumpa']);
        DB::table('villages')->insert(['id'=>79923, 'districts_id'=>7043, 'zipcode'=>'26262', 'name'=>'Halaban']);
        DB::table('villages')->insert(['id'=>79924, 'districts_id'=>7043, 'zipcode'=>'26262', 'name'=>'Labuah Gunuang']);
        DB::table('villages')->insert(['id'=>79925, 'districts_id'=>7043, 'zipcode'=>'26262', 'name'=>'Sitanang']);
        DB::table('villages')->insert(['id'=>79926, 'districts_id'=>7043, 'zipcode'=>'26262', 'name'=>'Tanjung/tanjuang Gadang']);
        //Kecamatan Harau Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7044, 'city_id'=>443, 'name'=>'Harau']);
        DB::table('villages')->insert(['id'=>79927, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Batu Balang']);
        DB::table('villages')->insert(['id'=>79928, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Bukik Limbuku']);
        DB::table('villages')->insert(['id'=>79929, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Gurun']);
        DB::table('villages')->insert(['id'=>79930, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Harau']);
        DB::table('villages')->insert(['id'=>79931, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Koto Tuo']);
        DB::table('villages')->insert(['id'=>79932, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Lubuak Batingkok']);
        DB::table('villages')->insert(['id'=>79933, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Pilubang']);
        DB::table('villages')->insert(['id'=>79934, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Sarilamak']);
        DB::table('villages')->insert(['id'=>79935, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Solok Bio-bio']);
        DB::table('villages')->insert(['id'=>79936, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Taram']);
        DB::table('villages')->insert(['id'=>79937, 'districts_id'=>7044, 'zipcode'=>'26271', 'name'=>'Tarantang']);
        //Kecamatan Pangkalan Koto Baru Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7045, 'city_id'=>443, 'name'=>'Pangkalan Koto Baru']);
        DB::table('villages')->insert(['id'=>79938, 'districts_id'=>7045, 'zipcode'=>'26272', 'name'=>'Gunuang Malintang']);
        DB::table('villages')->insert(['id'=>79939, 'districts_id'=>7045, 'zipcode'=>'26272', 'name'=>'Koto Alam']);
        DB::table('villages')->insert(['id'=>79940, 'districts_id'=>7045, 'zipcode'=>'26272', 'name'=>'Manggilang']);
        DB::table('villages')->insert(['id'=>79941, 'districts_id'=>7045, 'zipcode'=>'26272', 'name'=>'Pangkalan']);
        DB::table('villages')->insert(['id'=>79942, 'districts_id'=>7045, 'zipcode'=>'26272', 'name'=>'Tanjung/tanjuang Balik']);
        DB::table('villages')->insert(['id'=>79943, 'districts_id'=>7045, 'zipcode'=>'26272', 'name'=>'Tanjung/tanjuang Pauah']);
        //Kecamatan Kapur Ix/sembilan Kab. Lima Puluh Koto/kota Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7046, 'city_id'=>443, 'name'=>'Kapur Ix/sembilan']);
        DB::table('villages')->insert(['id'=>79944, 'districts_id'=>7046, 'zipcode'=>'26273', 'name'=>'Durian Tinggi']);
        DB::table('villages')->insert(['id'=>79945, 'districts_id'=>7046, 'zipcode'=>'26273', 'name'=>'Galugua/gelugur']);
        DB::table('villages')->insert(['id'=>79946, 'districts_id'=>7046, 'zipcode'=>'26273', 'name'=>'Koto Bangun']);
        DB::table('villages')->insert(['id'=>79947, 'districts_id'=>7046, 'zipcode'=>'26273', 'name'=>'Koto Lamo']);
        DB::table('villages')->insert(['id'=>79948, 'districts_id'=>7046, 'zipcode'=>'26273', 'name'=>'Lubuk/lubuak Alai']);
        DB::table('villages')->insert(['id'=>79949, 'districts_id'=>7046, 'zipcode'=>'26273', 'name'=>'Muaro Paiti']);
        DB::table('villages')->insert(['id'=>79950, 'districts_id'=>7046, 'zipcode'=>'26273', 'name'=>'Sialang']);

        //Kab. Pasaman Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>444, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Pasaman']);
        //Kecamatan Duo Koto (ii Koto) Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7047, 'city_id'=>444, 'name'=>'Duo Koto (ii Koto)']);
        DB::table('villages')->insert(['id'=>79951, 'districts_id'=>7047, 'zipcode'=>'26311', 'name'=>'Cubadak (pasa Cubadak)']);
        DB::table('villages')->insert(['id'=>79952, 'districts_id'=>7047, 'zipcode'=>'26311', 'name'=>'Simpang Tonang']);
        //Kecamatan Lubuk Sikaping Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7048, 'city_id'=>444, 'name'=>'Lubuk Sikaping']);
        DB::table('villages')->insert(['id'=>79953, 'districts_id'=>7048, 'zipcode'=>'26318', 'name'=>'Aia Manggih']);
        DB::table('villages')->insert(['id'=>79954, 'districts_id'=>7048, 'zipcode'=>'26318', 'name'=>'Durian Tinggi']);
        DB::table('villages')->insert(['id'=>79955, 'districts_id'=>7048, 'zipcode'=>'26318', 'name'=>'Jambak']);
        DB::table('villages')->insert(['id'=>79956, 'districts_id'=>7048, 'zipcode'=>'26318', 'name'=>'Pauah']);
        DB::table('villages')->insert(['id'=>79957, 'districts_id'=>7048, 'zipcode'=>'26318', 'name'=>'Sundata']);
        DB::table('villages')->insert(['id'=>79958, 'districts_id'=>7048, 'zipcode'=>'26318', 'name'=>'Tanjuang Baringin']);
        //Kecamatan Padang Gelugur Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7049, 'city_id'=>444, 'name'=>'Padang Gelugur']);
        DB::table('villages')->insert(['id'=>79959, 'districts_id'=>7049, 'zipcode'=>'26352', 'name'=>'Padang Gelugur']);
        //Kecamatan Panti Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7050, 'city_id'=>444, 'name'=>'Panti']);
        DB::table('villages')->insert(['id'=>79960, 'districts_id'=>7050, 'zipcode'=>'26352', 'name'=>'Panti']);
        //Kecamatan Tigo Nagari (iii Nagari) Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7051, 'city_id'=>444, 'name'=>'Tigo Nagari (iii Nagari)']);
        DB::table('villages')->insert(['id'=>79961, 'districts_id'=>7051, 'zipcode'=>'26353', 'name'=>'Binjai']);
        DB::table('villages')->insert(['id'=>79962, 'districts_id'=>7051, 'zipcode'=>'26353', 'name'=>'Ladang Panjang']);
        DB::table('villages')->insert(['id'=>79963, 'districts_id'=>7051, 'zipcode'=>'26353', 'name'=>'Malampah']);
        //Kecamatan Rao Utara Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7052, 'city_id'=>444, 'name'=>'Rao Utara']);
        DB::table('villages')->insert(['id'=>79964, 'districts_id'=>7052, 'zipcode'=>'26353', 'name'=>'Koto Nopan']);
        DB::table('villages')->insert(['id'=>79965, 'districts_id'=>7052, 'zipcode'=>'26353', 'name'=>'Koto Rajo']);
        DB::table('villages')->insert(['id'=>79966, 'districts_id'=>7052, 'zipcode'=>'26353', 'name'=>'Languang']);
        //Kecamatan Rao Selatan Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7053, 'city_id'=>444, 'name'=>'Rao Selatan']);
        DB::table('villages')->insert(['id'=>79967, 'districts_id'=>7053, 'zipcode'=>'26353', 'name'=>'Lansek Kadok']);
        DB::table('villages')->insert(['id'=>79968, 'districts_id'=>7053, 'zipcode'=>'26353', 'name'=>'Lubuak Layang']);
        DB::table('villages')->insert(['id'=>79969, 'districts_id'=>7053, 'zipcode'=>'26353', 'name'=>'Tanjung Betung']);
        //Kecamatan Mapat Tunggul Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7054, 'city_id'=>444, 'name'=>'Mapat Tunggul']);
        DB::table('villages')->insert(['id'=>79970, 'districts_id'=>7054, 'zipcode'=>'26353', 'name'=>'Lubuk/lubuak Gadang']);
        DB::table('villages')->insert(['id'=>79971, 'districts_id'=>7054, 'zipcode'=>'26353', 'name'=>'Muara Tais']);
        DB::table('villages')->insert(['id'=>79972, 'districts_id'=>7054, 'zipcode'=>'26353', 'name'=>'Pintu Padang']);
        //Kecamatan Mapat Tunggul Selatan Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7055, 'city_id'=>444, 'name'=>'Mapat Tunggul Selatan']);
        DB::table('villages')->insert(['id'=>79973, 'districts_id'=>7055, 'zipcode'=>'26353', 'name'=>'Muaro Sei/sungai Lolo']);
        DB::table('villages')->insert(['id'=>79974, 'districts_id'=>7055, 'zipcode'=>'26353', 'name'=>'Silayang']);
        //Kecamatan Rao Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7056, 'city_id'=>444, 'name'=>'Rao']);
        DB::table('villages')->insert(['id'=>79975, 'districts_id'=>7056, 'zipcode'=>'26353', 'name'=>'Padang Metinggi/mantinggi']);
        DB::table('villages')->insert(['id'=>79976, 'districts_id'=>7056, 'zipcode'=>'26353', 'name'=>'Taruang Taruang']);
        //Kecamatan Simpang Alahan Mati Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7057, 'city_id'=>444, 'name'=>'Simpang Alahan Mati']);
        DB::table('villages')->insert(['id'=>79977, 'districts_id'=>7057, 'zipcode'=>'26381', 'name'=>'Alahan Mati']);
        DB::table('villages')->insert(['id'=>79978, 'districts_id'=>7057, 'zipcode'=>'26381', 'name'=>'Simpang']);
        //Kecamatan Bonjol Kab. Pasaman Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7058, 'city_id'=>444, 'name'=>'Bonjol']);
        DB::table('villages')->insert(['id'=>79979, 'districts_id'=>7058, 'zipcode'=>'26381', 'name'=>'Ganggo Hilia']);
        DB::table('villages')->insert(['id'=>79980, 'districts_id'=>7058, 'zipcode'=>'26381', 'name'=>'Ganggo Mudiak']);
        DB::table('villages')->insert(['id'=>79981, 'districts_id'=>7058, 'zipcode'=>'26381', 'name'=>'Koto Kaciak']);
        DB::table('villages')->insert(['id'=>79982, 'districts_id'=>7058, 'zipcode'=>'26381', 'name'=>'Limo Koto']);

        //Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>445, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Pasaman Barat']);
        //Kecamatan Ranah Batahan Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7059, 'city_id'=>445, 'name'=>'Ranah Batahan']);
        DB::table('villages')->insert(['id'=>79983, 'districts_id'=>7059, 'zipcode'=>'26366', 'name'=>'Batahan']);
        DB::table('villages')->insert(['id'=>79984, 'districts_id'=>7059, 'zipcode'=>'26366', 'name'=>'Desa Baru']);
        //Kecamatan Sasak Ranah Pasisir/pesisie Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7060, 'city_id'=>445, 'name'=>'Sasak Ranah Pasisir/pesisie']);
        DB::table('villages')->insert(['id'=>79985, 'districts_id'=>7060, 'zipcode'=>'26366', 'name'=>'Sasak']);
        //Kecamatan Talamau Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7061, 'city_id'=>445, 'name'=>'Talamau']);
        DB::table('villages')->insert(['id'=>79986, 'districts_id'=>7061, 'zipcode'=>'26561', 'name'=>'Kajai']);
        DB::table('villages')->insert(['id'=>79987, 'districts_id'=>7061, 'zipcode'=>'26561', 'name'=>'Sinuruik']);
        DB::table('villages')->insert(['id'=>79988, 'districts_id'=>7061, 'zipcode'=>'26561', 'name'=>'Talu']);
        //Kecamatan Pasaman Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7062, 'city_id'=>445, 'name'=>'Pasaman']);
        DB::table('villages')->insert(['id'=>79989, 'districts_id'=>7062, 'zipcode'=>'26566', 'name'=>'Aia Gadang']);
        DB::table('villages')->insert(['id'=>79990, 'districts_id'=>7062, 'zipcode'=>'26566', 'name'=>'Aua Kuniang']);
        DB::table('villages')->insert(['id'=>79991, 'districts_id'=>7062, 'zipcode'=>'26566', 'name'=>'Lingkuang Aua']);
        //Kecamatan Luhak Nan Duo Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7063, 'city_id'=>445, 'name'=>'Luhak Nan Duo']);
        DB::table('villages')->insert(['id'=>79992, 'districts_id'=>7063, 'zipcode'=>'26567', 'name'=>'Kapar']);
        DB::table('villages')->insert(['id'=>79993, 'districts_id'=>7063, 'zipcode'=>'26567', 'name'=>'Koto Baru']);
        //Kecamatan Kinali Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7064, 'city_id'=>445, 'name'=>'Kinali']);
        DB::table('villages')->insert(['id'=>79994, 'districts_id'=>7064, 'zipcode'=>'26567', 'name'=>'Katiagan Mandiangin']);
        DB::table('villages')->insert(['id'=>79995, 'districts_id'=>7064, 'zipcode'=>'26567', 'name'=>'Kinali']);
        //Kecamatan Gunung Tuleh Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7065, 'city_id'=>445, 'name'=>'Gunung Tuleh']);
        DB::table('villages')->insert(['id'=>79996, 'districts_id'=>7065, 'zipcode'=>'26571', 'name'=>'Muaro Kiawi']);
        DB::table('villages')->insert(['id'=>79997, 'districts_id'=>7065, 'zipcode'=>'26571', 'name'=>'Rabi Jonggor']);
        //Kecamatan Koto Balingka Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7066, 'city_id'=>445, 'name'=>'Koto Balingka']);
        DB::table('villages')->insert(['id'=>79998, 'districts_id'=>7066, 'zipcode'=>'26572', 'name'=>'Parit/parik']);
        //Kecamatan Lembah Melintang Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7067, 'city_id'=>445, 'name'=>'Lembah Melintang']);
        DB::table('villages')->insert(['id'=>79999, 'districts_id'=>7067, 'zipcode'=>'26572', 'name'=>'Ujung Gading']);
        //Kecamatan Sei Beremas Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7068, 'city_id'=>445, 'name'=>'Sei Beremas']);
        DB::table('villages')->insert(['id'=>80000, 'districts_id'=>7068, 'zipcode'=>'26573', 'name'=>'Aia Bangih']);
        //Kecamatan Sungai Aur Kab. Pasaman Barat Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7069, 'city_id'=>445, 'name'=>'Sungai Aur']);
        DB::table('villages')->insert(['id'=>80001, 'districts_id'=>7069, 'zipcode'=>'26573', 'name'=>'Sungai Aur']);

        //Kota Padang Panjang Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>446, 'province_id'=>32, 'type'=>'city', 'name'=>'Padang Panjang']);
        //Kecamatan Padang Panjang Barat Kota Padang Panjang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7070, 'city_id'=>446, 'name'=>'Padang Panjang Barat']);
        DB::table('villages')->insert(['id'=>80002, 'districts_id'=>7070, 'zipcode'=>'27111', 'name'=>'Kampung Manggis']);
        DB::table('villages')->insert(['id'=>80003, 'districts_id'=>7070, 'zipcode'=>'27112', 'name'=>'Tanah Hitam']);
        DB::table('villages')->insert(['id'=>80004, 'districts_id'=>7070, 'zipcode'=>'27113', 'name'=>'Pasar Baru']);
        DB::table('villages')->insert(['id'=>80005, 'districts_id'=>7070, 'zipcode'=>'27114', 'name'=>'Balai-balai']);
        DB::table('villages')->insert(['id'=>80006, 'districts_id'=>7070, 'zipcode'=>'27115', 'name'=>'Bukik/bukit Surungan']);
        DB::table('villages')->insert(['id'=>80007, 'districts_id'=>7070, 'zipcode'=>'27116', 'name'=>'Pasar Usang']);
        DB::table('villages')->insert(['id'=>80008, 'districts_id'=>7070, 'zipcode'=>'27117', 'name'=>'Silaing Atas']);
        DB::table('villages')->insert(['id'=>80009, 'districts_id'=>7070, 'zipcode'=>'27118', 'name'=>'Silaing Bawah']);
        //Kecamatan Padang Panjang Timur Kota Padang Panjang Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7071, 'city_id'=>446, 'name'=>'Padang Panjang Timur']);
        DB::table('villages')->insert(['id'=>80010, 'districts_id'=>7071, 'zipcode'=>'27121', 'name'=>'Tanah Pak Lambik']);
        DB::table('villages')->insert(['id'=>80011, 'districts_id'=>7071, 'zipcode'=>'27122', 'name'=>'Koto Panjang']);
        DB::table('villages')->insert(['id'=>80012, 'districts_id'=>7071, 'zipcode'=>'27123', 'name'=>'Koto Katik']);
        DB::table('villages')->insert(['id'=>80013, 'districts_id'=>7071, 'zipcode'=>'27124', 'name'=>'Ngalau']);
        DB::table('villages')->insert(['id'=>80014, 'districts_id'=>7071, 'zipcode'=>'27125', 'name'=>'Ekor Lubuk']);
        DB::table('villages')->insert(['id'=>80015, 'districts_id'=>7071, 'zipcode'=>'27126', 'name'=>'Sigando']);
        DB::table('villages')->insert(['id'=>80016, 'districts_id'=>7071, 'zipcode'=>'27127', 'name'=>'Ganting']);
        DB::table('villages')->insert(['id'=>80017, 'districts_id'=>7071, 'zipcode'=>'27128', 'name'=>'Guguk Malintang']);

        //Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>447, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Tanah Datar']);
        //Kecamatan Sepuluh Koto (x Koto) Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7072, 'city_id'=>447, 'name'=>'Sepuluh Koto (x Koto)']);
        DB::table('villages')->insert(['id'=>80018, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Aie Angek (aia/air Angek)']);
        DB::table('villages')->insert(['id'=>80019, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Jaho']);
        DB::table('villages')->insert(['id'=>80020, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>80021, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Koto Laweh']);
        DB::table('villages')->insert(['id'=>80022, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Pandai Sikek']);
        DB::table('villages')->insert(['id'=>80023, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Paninjauan']);
        DB::table('villages')->insert(['id'=>80024, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Panyalaian']);
        DB::table('villages')->insert(['id'=>80025, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Singgalang']);
        DB::table('villages')->insert(['id'=>80026, 'districts_id'=>7072, 'zipcode'=>'27151', 'name'=>'Tambangan']);
        //Kecamatan Lima Kaum Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7073, 'city_id'=>447, 'name'=>'Lima Kaum']);
        DB::table('villages')->insert(['id'=>80027, 'districts_id'=>7073, 'zipcode'=>'27211', 'name'=>'Labuah/labuh']);
        DB::table('villages')->insert(['id'=>80028, 'districts_id'=>7073, 'zipcode'=>'27211', 'name'=>'Lima Kaum (limo Kaum)']);
        DB::table('villages')->insert(['id'=>80029, 'districts_id'=>7073, 'zipcode'=>'27211', 'name'=>'Parambahan']);
        DB::table('villages')->insert(['id'=>80030, 'districts_id'=>7073, 'zipcode'=>'27213', 'name'=>'Baringin']);
        DB::table('villages')->insert(['id'=>80031, 'districts_id'=>7073, 'zipcode'=>'27216', 'name'=>'Cubadak']);
        //Kecamatan Sungai Tarab Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7074, 'city_id'=>447, 'name'=>'Sungai Tarab']);
        DB::table('villages')->insert(['id'=>80032, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Gurun']);
        DB::table('villages')->insert(['id'=>80033, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>80034, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Koto Tuo']);
        DB::table('villages')->insert(['id'=>80035, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Kumango']);
        DB::table('villages')->insert(['id'=>80036, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Padang Laweh']);
        DB::table('villages')->insert(['id'=>80037, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Pasie/pasir Laweh']);
        DB::table('villages')->insert(['id'=>80038, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Rao-rao']);
        DB::table('villages')->insert(['id'=>80039, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Simpuruik']);
        DB::table('villages')->insert(['id'=>80040, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Sungai Tarab']);
        DB::table('villages')->insert(['id'=>80041, 'districts_id'=>7074, 'zipcode'=>'27261', 'name'=>'Talang Tangah']);
        //Kecamatan Salimpaung Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7075, 'city_id'=>447, 'name'=>'Salimpaung']);
        DB::table('villages')->insert(['id'=>80042, 'districts_id'=>7075, 'zipcode'=>'27262', 'name'=>'Tabek Patah']);
        DB::table('villages')->insert(['id'=>80043, 'districts_id'=>7075, 'zipcode'=>'27263', 'name'=>'Lawang Mandahiling/mandahiliang']);
        DB::table('villages')->insert(['id'=>80044, 'districts_id'=>7075, 'zipcode'=>'27263', 'name'=>'Salimpaung']);
        DB::table('villages')->insert(['id'=>80045, 'districts_id'=>7075, 'zipcode'=>'27263', 'name'=>'Situmbuk (situmbuak)']);
        DB::table('villages')->insert(['id'=>80046, 'districts_id'=>7075, 'zipcode'=>'27263', 'name'=>'Sumanik (sumaniak}']);
        DB::table('villages')->insert(['id'=>80047, 'districts_id'=>7075, 'zipcode'=>'27263', 'name'=>'Supayang']);
        //Kecamatan Pariangan Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7076, 'city_id'=>447, 'name'=>'Pariangan']);
        DB::table('villages')->insert(['id'=>80048, 'districts_id'=>7076, 'zipcode'=>'27264', 'name'=>'Batu Basa']);
        DB::table('villages')->insert(['id'=>80049, 'districts_id'=>7076, 'zipcode'=>'27264', 'name'=>'Pariangan']);
        DB::table('villages')->insert(['id'=>80050, 'districts_id'=>7076, 'zipcode'=>'27264', 'name'=>'Sawah Tangah']);
        DB::table('villages')->insert(['id'=>80051, 'districts_id'=>7076, 'zipcode'=>'27264', 'name'=>'Simabur']);
        DB::table('villages')->insert(['id'=>80052, 'districts_id'=>7076, 'zipcode'=>'27264', 'name'=>'Sungai Jambu']);
        DB::table('villages')->insert(['id'=>80053, 'districts_id'=>7076, 'zipcode'=>'27264', 'name'=>'Tabek']);
        //Kecamatan Batipuh Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7077, 'city_id'=>447, 'name'=>'Batipuh']);
        DB::table('villages')->insert(['id'=>80054, 'districts_id'=>7077, 'zipcode'=>'27265', 'name'=>'Andaleh']);
        DB::table('villages')->insert(['id'=>80055, 'districts_id'=>7077, 'zipcode'=>'27265', 'name'=>'Batipuh Ateh (batipuah Ateh)']);
        DB::table('villages')->insert(['id'=>80056, 'districts_id'=>7077, 'zipcode'=>'27265', 'name'=>'Batipuh Baru (batipuah Baruah)']);
        DB::table('villages')->insert(['id'=>80057, 'districts_id'=>7077, 'zipcode'=>'27265', 'name'=>'Bungo Tanjung/tanjuang']);
        DB::table('villages')->insert(['id'=>80058, 'districts_id'=>7077, 'zipcode'=>'27265', 'name'=>'Gunung Rajo (gunuang Rajo)']);
        DB::table('villages')->insert(['id'=>80059, 'districts_id'=>7077, 'zipcode'=>'27265', 'name'=>'Pitalah']);
        DB::table('villages')->insert(['id'=>80060, 'districts_id'=>7077, 'zipcode'=>'27265', 'name'=>'Sabu']);
        DB::table('villages')->insert(['id'=>80061, 'districts_id'=>7077, 'zipcode'=>'27265', 'name'=>'Tanjung Barulak']);
        //Kecamatan Batipuh Selatan Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7078, 'city_id'=>447, 'name'=>'Batipuh Selatan']);
        DB::table('villages')->insert(['id'=>80062, 'districts_id'=>7078, 'zipcode'=>'27265', 'name'=>'Batu Taba']);
        DB::table('villages')->insert(['id'=>80063, 'districts_id'=>7078, 'zipcode'=>'27265', 'name'=>'Guguak Malalo']);
        DB::table('villages')->insert(['id'=>80064, 'districts_id'=>7078, 'zipcode'=>'27265', 'name'=>'Padang Laweh Malalo']);
        DB::table('villages')->insert(['id'=>80065, 'districts_id'=>7078, 'zipcode'=>'27265', 'name'=>'Sumpur']);
        //Kecamatan Rambatan Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7079, 'city_id'=>447, 'name'=>'Rambatan']);
        DB::table('villages')->insert(['id'=>80066, 'districts_id'=>7079, 'zipcode'=>'27271', 'name'=>'Balimbing']);
        DB::table('villages')->insert(['id'=>80067, 'districts_id'=>7079, 'zipcode'=>'27271', 'name'=>'Iii/tigo Koto']);
        DB::table('villages')->insert(['id'=>80068, 'districts_id'=>7079, 'zipcode'=>'27271', 'name'=>'Padang Magek']);
        DB::table('villages')->insert(['id'=>80069, 'districts_id'=>7079, 'zipcode'=>'27271', 'name'=>'Rambatan']);
        DB::table('villages')->insert(['id'=>80070, 'districts_id'=>7079, 'zipcode'=>'27271', 'name'=>'Simawang']);
        //Kecamatan Tanjung Baru Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7080, 'city_id'=>447, 'name'=>'Tanjung Baru']);
        DB::table('villages')->insert(['id'=>80071, 'districts_id'=>7080, 'zipcode'=>'27281', 'name'=>'Barulak']);
        DB::table('villages')->insert(['id'=>80072, 'districts_id'=>7080, 'zipcode'=>'27281', 'name'=>'Tanjung Alam']);
        //Kecamatan Tanjung Emas Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7081, 'city_id'=>447, 'name'=>'Tanjung Emas']);
        DB::table('villages')->insert(['id'=>80073, 'districts_id'=>7081, 'zipcode'=>'27281', 'name'=>'Koto Tangah']);
        DB::table('villages')->insert(['id'=>80074, 'districts_id'=>7081, 'zipcode'=>'27281', 'name'=>'Pagaruyung (pagaruyuang)']);
        DB::table('villages')->insert(['id'=>80075, 'districts_id'=>7081, 'zipcode'=>'27281', 'name'=>'Saruaso']);
        DB::table('villages')->insert(['id'=>80076, 'districts_id'=>7081, 'zipcode'=>'27281', 'name'=>'Tanjung Barulak']);
        //Kecamatan Padang Ganting Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7082, 'city_id'=>447, 'name'=>'Padang Ganting']);
        DB::table('villages')->insert(['id'=>80077, 'districts_id'=>7082, 'zipcode'=>'27282', 'name'=>'Atar']);
        DB::table('villages')->insert(['id'=>80078, 'districts_id'=>7082, 'zipcode'=>'27282', 'name'=>'Padang Ganting']);
        //Kecamatan Lintau Buo Utara Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7083, 'city_id'=>447, 'name'=>'Lintau Buo Utara']);
        DB::table('villages')->insert(['id'=>80079, 'districts_id'=>7083, 'zipcode'=>'27292', 'name'=>'Balai Tangah']);
        DB::table('villages')->insert(['id'=>80080, 'districts_id'=>7083, 'zipcode'=>'27292', 'name'=>'Batu Bulek']);
        DB::table('villages')->insert(['id'=>80081, 'districts_id'=>7083, 'zipcode'=>'27292', 'name'=>'Lubuk/lubuak Jantan']);
        DB::table('villages')->insert(['id'=>80082, 'districts_id'=>7083, 'zipcode'=>'27292', 'name'=>'Tanjung/tanjuang Bonai']);
        DB::table('villages')->insert(['id'=>80083, 'districts_id'=>7083, 'zipcode'=>'27292', 'name'=>'Tapi/tepi Selo']);
        //Kecamatan Lintau Buo Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7084, 'city_id'=>447, 'name'=>'Lintau Buo']);
        DB::table('villages')->insert(['id'=>80084, 'districts_id'=>7084, 'zipcode'=>'27292', 'name'=>'Buo']);
        DB::table('villages')->insert(['id'=>80085, 'districts_id'=>7084, 'zipcode'=>'27292', 'name'=>'Pangian']);
        DB::table('villages')->insert(['id'=>80086, 'districts_id'=>7084, 'zipcode'=>'27292', 'name'=>'Taluak']);
        DB::table('villages')->insert(['id'=>80087, 'districts_id'=>7084, 'zipcode'=>'27292', 'name'=>'Tigo Jangko']);
        //Kecamatan Sungayang Kab. Tanah Datar Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7085, 'city_id'=>447, 'name'=>'Sungayang']);
        DB::table('villages')->insert(['id'=>80088, 'districts_id'=>7085, 'zipcode'=>'27294', 'name'=>'Andaleh Baruh/baruah Bukik']);
        DB::table('villages')->insert(['id'=>80089, 'districts_id'=>7085, 'zipcode'=>'27294', 'name'=>'Minangkabau']);
        DB::table('villages')->insert(['id'=>80090, 'districts_id'=>7085, 'zipcode'=>'27294', 'name'=>'Sungai Patai']);
        DB::table('villages')->insert(['id'=>80091, 'districts_id'=>7085, 'zipcode'=>'27294', 'name'=>'Sungayang']);
        DB::table('villages')->insert(['id'=>80092, 'districts_id'=>7085, 'zipcode'=>'27294', 'name'=>'Tanjung (tanjuang)']);

        //Kota Solok Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>448, 'province_id'=>32, 'type'=>'city', 'name'=>'Solok']);
        //Kecamatan Lubuk Sikarah Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7086, 'city_id'=>448, 'name'=>'Lubuk Sikarah']);
        DB::table('villages')->insert(['id'=>80093, 'districts_id'=>7086, 'zipcode'=>'27311', 'name'=>'Vi Suku']);
        DB::table('villages')->insert(['id'=>80094, 'districts_id'=>7086, 'zipcode'=>'27312', 'name'=>'Tanah Garam']);
        DB::table('villages')->insert(['id'=>80095, 'districts_id'=>7086, 'zipcode'=>'27313', 'name'=>'Sinapa Piliang']);
        DB::table('villages')->insert(['id'=>80096, 'districts_id'=>7086, 'zipcode'=>'27314', 'name'=>'Ix Korong']);
        DB::table('villages')->insert(['id'=>80097, 'districts_id'=>7086, 'zipcode'=>'27315', 'name'=>'Kampai Tabu Kerambil/karambia']);
        DB::table('villages')->insert(['id'=>80098, 'districts_id'=>7086, 'zipcode'=>'27316', 'name'=>'Simpang Rumbio']);
        DB::table('villages')->insert(['id'=>80099, 'districts_id'=>7086, 'zipcode'=>'27317', 'name'=>'Aro Iv Korong']);
        //Kecamatan Tanjung Harapan Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7087, 'city_id'=>448, 'name'=>'Tanjung Harapan']);
        DB::table('villages')->insert(['id'=>80100, 'districts_id'=>7087, 'zipcode'=>'27321', 'name'=>'Kampung Jawa']);
        DB::table('villages')->insert(['id'=>80101, 'districts_id'=>7087, 'zipcode'=>'27322', 'name'=>'Pasar Pandan Air Mati']);
        DB::table('villages')->insert(['id'=>80102, 'districts_id'=>7087, 'zipcode'=>'27323', 'name'=>'Koto Panjang']);
        DB::table('villages')->insert(['id'=>80103, 'districts_id'=>7087, 'zipcode'=>'27324', 'name'=>'Tanjung Paku']);
        DB::table('villages')->insert(['id'=>80104, 'districts_id'=>7087, 'zipcode'=>'27325', 'name'=>'Laing']);
        DB::table('villages')->insert(['id'=>80105, 'districts_id'=>7087, 'zipcode'=>'27326', 'name'=>'Nan Balimo']);
        //Kecamatan X Koto Diatas Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7088, 'city_id'=>448, 'name'=>'X Koto Diatas']);
        DB::table('villages')->insert(['id'=>80106, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Bukit Kanduang']);
        DB::table('villages')->insert(['id'=>80107, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Katialo']);
        DB::table('villages')->insert(['id'=>80108, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Kuncir']);
        DB::table('villages')->insert(['id'=>80109, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Labuah Panjang']);
        DB::table('villages')->insert(['id'=>80110, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Nagari Sulit Air']);
        DB::table('villages')->insert(['id'=>80111, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Paninjauan']);
        DB::table('villages')->insert(['id'=>80112, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Pasilihan']);
        DB::table('villages')->insert(['id'=>80113, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Siberambang']);
        DB::table('villages')->insert(['id'=>80114, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Sulik Aia']);
        DB::table('villages')->insert(['id'=>80115, 'districts_id'=>7088, 'zipcode'=>'27355', 'name'=>'Tanjung Balik']);
        //Kecamatan X Koto Singkarak Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7089, 'city_id'=>448, 'name'=>'X Koto Singkarak']);
        DB::table('villages')->insert(['id'=>80116, 'districts_id'=>7089, 'zipcode'=>'27356', 'name'=>'Aripan']);
        DB::table('villages')->insert(['id'=>80117, 'districts_id'=>7089, 'zipcode'=>'27356', 'name'=>'Kacang']);
        DB::table('villages')->insert(['id'=>80118, 'districts_id'=>7089, 'zipcode'=>'27356', 'name'=>'Koto Sani']);
        DB::table('villages')->insert(['id'=>80119, 'districts_id'=>7089, 'zipcode'=>'27356', 'name'=>'Saning Baka']);
        DB::table('villages')->insert(['id'=>80120, 'districts_id'=>7089, 'zipcode'=>'27356', 'name'=>'Singkarak']);
        DB::table('villages')->insert(['id'=>80121, 'districts_id'=>7089, 'zipcode'=>'27356', 'name'=>'Sumani']);
        DB::table('villages')->insert(['id'=>80122, 'districts_id'=>7089, 'zipcode'=>'27356', 'name'=>'Tanjung Alai']);
        DB::table('villages')->insert(['id'=>80123, 'districts_id'=>7089, 'zipcode'=>'27356', 'name'=>'Tikalak']);
        //Kecamatan Kubung Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7090, 'city_id'=>448, 'name'=>'Kubung']);
        DB::table('villages')->insert(['id'=>80124, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Gantuang Ciri']);
        DB::table('villages')->insert(['id'=>80125, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Gauang']);
        DB::table('villages')->insert(['id'=>80126, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>80127, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Koto Hilalang']);
        DB::table('villages')->insert(['id'=>80128, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Panyakalan']);
        DB::table('villages')->insert(['id'=>80129, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Salayo']);
        DB::table('villages')->insert(['id'=>80130, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Saok Laweh']);
        DB::table('villages')->insert(['id'=>80131, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Tanjung']);
        DB::table('villages')->insert(['id'=>80132, 'districts_id'=>7090, 'zipcode'=>'27361', 'name'=>'Tanjung Bingkuang']);
        //Kecamatan Gunung Talang Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7091, 'city_id'=>448, 'name'=>'Gunung Talang']);
        DB::table('villages')->insert(['id'=>80133, 'districts_id'=>7091, 'zipcode'=>'27365', 'name'=>'Aia Batumbuak']);
        DB::table('villages')->insert(['id'=>80134, 'districts_id'=>7091, 'zipcode'=>'27365', 'name'=>'Batang Barus']);
        DB::table('villages')->insert(['id'=>80135, 'districts_id'=>7091, 'zipcode'=>'27365', 'name'=>'Cupak']);
        DB::table('villages')->insert(['id'=>80136, 'districts_id'=>7091, 'zipcode'=>'27365', 'name'=>'Jawi Jawi']);
        DB::table('villages')->insert(['id'=>80137, 'districts_id'=>7091, 'zipcode'=>'27365', 'name'=>'Koto Gadang Guguak']);
        DB::table('villages')->insert(['id'=>80138, 'districts_id'=>7091, 'zipcode'=>'27365', 'name'=>'Koto Gaek Guguk']);
        DB::table('villages')->insert(['id'=>80139, 'districts_id'=>7091, 'zipcode'=>'27365', 'name'=>'Sungai Janiah']);
        DB::table('villages')->insert(['id'=>80140, 'districts_id'=>7091, 'zipcode'=>'27365', 'name'=>'Talang']);
        //Kecamatan Lembah Gumanti Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7092, 'city_id'=>448, 'name'=>'Lembah Gumanti']);
        DB::table('villages')->insert(['id'=>80141, 'districts_id'=>7092, 'zipcode'=>'27371', 'name'=>'Aia Dingin']);
        DB::table('villages')->insert(['id'=>80142, 'districts_id'=>7092, 'zipcode'=>'27371', 'name'=>'Alahan Panjang']);
        DB::table('villages')->insert(['id'=>80143, 'districts_id'=>7092, 'zipcode'=>'27371', 'name'=>'Salimpat']);
        DB::table('villages')->insert(['id'=>80144, 'districts_id'=>7092, 'zipcode'=>'27371', 'name'=>'Sungai Nanam']);
        //Kecamatan Tigo Lurah Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7093, 'city_id'=>448, 'name'=>'Tigo Lurah']);
        DB::table('villages')->insert(['id'=>80145, 'districts_id'=>7093, 'zipcode'=>'27372', 'name'=>'Batu Banjajang']);
        DB::table('villages')->insert(['id'=>80146, 'districts_id'=>7093, 'zipcode'=>'27372', 'name'=>'Garabak Data']);
        DB::table('villages')->insert(['id'=>80147, 'districts_id'=>7093, 'zipcode'=>'27372', 'name'=>'Rangkiang Luluih']);
        DB::table('villages')->insert(['id'=>80148, 'districts_id'=>7093, 'zipcode'=>'27372', 'name'=>'Simanau']);
        DB::table('villages')->insert(['id'=>80149, 'districts_id'=>7093, 'zipcode'=>'27372', 'name'=>'Tanjung Balik Sumiso']);
        //Kecamatan Hiliran Gumanti Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7094, 'city_id'=>448, 'name'=>'Hiliran Gumanti']);
        DB::table('villages')->insert(['id'=>80150, 'districts_id'=>7094, 'zipcode'=>'27372', 'name'=>'Sarik Alahan Tigo']);
        DB::table('villages')->insert(['id'=>80151, 'districts_id'=>7094, 'zipcode'=>'27372', 'name'=>'Sungai Abu']);
        DB::table('villages')->insert(['id'=>80152, 'districts_id'=>7094, 'zipcode'=>'27372', 'name'=>'Talang Babungo']);
        //Kecamatan Pantai Cermin Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7095, 'city_id'=>448, 'name'=>'Pantai Cermin']);
        DB::table('villages')->insert(['id'=>80153, 'districts_id'=>7095, 'zipcode'=>'27373', 'name'=>'Lolo']);
        DB::table('villages')->insert(['id'=>80154, 'districts_id'=>7095, 'zipcode'=>'27373', 'name'=>'Surian']);
        //Kecamatan Bukit Sundi Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7096, 'city_id'=>448, 'name'=>'Bukit Sundi']);
        DB::table('villages')->insert(['id'=>80155, 'districts_id'=>7096, 'zipcode'=>'27381', 'name'=>'Bukit Tandang']);
        DB::table('villages')->insert(['id'=>80156, 'districts_id'=>7096, 'zipcode'=>'27381', 'name'=>'Dilam']);
        DB::table('villages')->insert(['id'=>80157, 'districts_id'=>7096, 'zipcode'=>'27381', 'name'=>'Kinari']);
        DB::table('villages')->insert(['id'=>80158, 'districts_id'=>7096, 'zipcode'=>'27381', 'name'=>'Muaro Paneh']);
        DB::table('villages')->insert(['id'=>80159, 'districts_id'=>7096, 'zipcode'=>'27381', 'name'=>'Parambahan']);
        //Kecamatan Lembang Jaya Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7097, 'city_id'=>448, 'name'=>'Lembang Jaya']);
        DB::table('villages')->insert(['id'=>80160, 'districts_id'=>7097, 'zipcode'=>'27383', 'name'=>'Batu Bajanjang']);
        DB::table('villages')->insert(['id'=>80161, 'districts_id'=>7097, 'zipcode'=>'27383', 'name'=>'Batu Banyak']);
        DB::table('villages')->insert(['id'=>80162, 'districts_id'=>7097, 'zipcode'=>'27383', 'name'=>'Koto Anau']);
        DB::table('villages')->insert(['id'=>80163, 'districts_id'=>7097, 'zipcode'=>'27383', 'name'=>'Koto Laweh']);
        DB::table('villages')->insert(['id'=>80164, 'districts_id'=>7097, 'zipcode'=>'27383', 'name'=>'Limau Lunggo']);
        DB::table('villages')->insert(['id'=>80165, 'districts_id'=>7097, 'zipcode'=>'27383', 'name'=>'Salayo Tanang Bukik Sileh']);
        //Kecamatan Danau Kembar Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7098, 'city_id'=>448, 'name'=>'Danau Kembar']);
        DB::table('villages')->insert(['id'=>80166, 'districts_id'=>7098, 'zipcode'=>'27383', 'name'=>'Kampung Batu Dalam']);
        DB::table('villages')->insert(['id'=>80167, 'districts_id'=>7098, 'zipcode'=>'27383', 'name'=>'Simpang Tanjuang Nan Ampek/iv']);
        //Kecamatan Payung Sekaki Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7099, 'city_id'=>448, 'name'=>'Payung Sekaki']);
        DB::table('villages')->insert(['id'=>80168, 'districts_id'=>7099, 'zipcode'=>'27387', 'name'=>'Aia Luo']);
        DB::table('villages')->insert(['id'=>80169, 'districts_id'=>7099, 'zipcode'=>'27387', 'name'=>'Sirukam']);
        DB::table('villages')->insert(['id'=>80170, 'districts_id'=>7099, 'zipcode'=>'27387', 'name'=>'Supayang']);
        //Kecamatan Ix Koto Sei Lasi Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7100, 'city_id'=>448, 'name'=>'Ix Koto Sei Lasi']);
        DB::table('villages')->insert(['id'=>80171, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Bukit Bais']);
        DB::table('villages')->insert(['id'=>80172, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Guguk Sarai']);
        DB::table('villages')->insert(['id'=>80173, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Indudur']);
        DB::table('villages')->insert(['id'=>80174, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Koto Laweh']);
        DB::table('villages')->insert(['id'=>80175, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Pianggu']);
        DB::table('villages')->insert(['id'=>80176, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Siaro Aro']);
        DB::table('villages')->insert(['id'=>80177, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Sungai Durian']);
        DB::table('villages')->insert(['id'=>80178, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Sungai Jambur']);
        DB::table('villages')->insert(['id'=>80179, 'districts_id'=>7100, 'zipcode'=>'27388', 'name'=>'Taruang Taruang']);
        //Kecamatan Junjung Sirih Kota Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7101, 'city_id'=>448, 'name'=>'Junjung Sirih']);
        DB::table('villages')->insert(['id'=>80180, 'districts_id'=>7101, 'zipcode'=>'27388', 'name'=>'Muaro Pingai']);
        DB::table('villages')->insert(['id'=>80181, 'districts_id'=>7101, 'zipcode'=>'27388', 'name'=>'Paninggahan']);

        //Kab. Solok Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>449, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Solok']);
        //Kecamatan Lubuk Sikarah Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7102, 'city_id'=>449, 'name'=>'Lubuk Sikarah']);
        DB::table('villages')->insert(['id'=>80182, 'districts_id'=>7102, 'zipcode'=>'27311', 'name'=>'Vi Suku']);
        DB::table('villages')->insert(['id'=>80183, 'districts_id'=>7102, 'zipcode'=>'27312', 'name'=>'Tanah Garam']);
        DB::table('villages')->insert(['id'=>80184, 'districts_id'=>7102, 'zipcode'=>'27313', 'name'=>'Sinapa Piliang']);
        DB::table('villages')->insert(['id'=>80185, 'districts_id'=>7102, 'zipcode'=>'27314', 'name'=>'Ix Korong']);
        DB::table('villages')->insert(['id'=>80186, 'districts_id'=>7102, 'zipcode'=>'27315', 'name'=>'Kampai Tabu Kerambil/karambia']);
        DB::table('villages')->insert(['id'=>80187, 'districts_id'=>7102, 'zipcode'=>'27316', 'name'=>'Simpang Rumbio']);
        DB::table('villages')->insert(['id'=>80188, 'districts_id'=>7102, 'zipcode'=>'27317', 'name'=>'Aro Iv Korong']);
        //Kecamatan Tanjung Harapan Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7103, 'city_id'=>449, 'name'=>'Tanjung Harapan']);
        DB::table('villages')->insert(['id'=>80189, 'districts_id'=>7103, 'zipcode'=>'27321', 'name'=>'Kampung Jawa']);
        DB::table('villages')->insert(['id'=>80190, 'districts_id'=>7103, 'zipcode'=>'27322', 'name'=>'Pasar Pandan Air Mati']);
        DB::table('villages')->insert(['id'=>80191, 'districts_id'=>7103, 'zipcode'=>'27323', 'name'=>'Koto Panjang']);
        DB::table('villages')->insert(['id'=>80192, 'districts_id'=>7103, 'zipcode'=>'27324', 'name'=>'Tanjung Paku']);
        DB::table('villages')->insert(['id'=>80193, 'districts_id'=>7103, 'zipcode'=>'27325', 'name'=>'Laing']);
        DB::table('villages')->insert(['id'=>80194, 'districts_id'=>7103, 'zipcode'=>'27326', 'name'=>'Nan Balimo']);
        //Kecamatan X Koto Diatas Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7104, 'city_id'=>449, 'name'=>'X Koto Diatas']);
        DB::table('villages')->insert(['id'=>80195, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Bukit Kanduang']);
        DB::table('villages')->insert(['id'=>80196, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Katialo']);
        DB::table('villages')->insert(['id'=>80197, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Kuncir']);
        DB::table('villages')->insert(['id'=>80198, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Labuah Panjang']);
        DB::table('villages')->insert(['id'=>80199, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Nagari Sulit Air']);
        DB::table('villages')->insert(['id'=>80200, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Paninjauan']);
        DB::table('villages')->insert(['id'=>80201, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Pasilihan']);
        DB::table('villages')->insert(['id'=>80202, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Siberambang']);
        DB::table('villages')->insert(['id'=>80203, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Sulik Aia']);
        DB::table('villages')->insert(['id'=>80204, 'districts_id'=>7104, 'zipcode'=>'27355', 'name'=>'Tanjung Balik']);
        //Kecamatan X Koto Singkarak Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7105, 'city_id'=>449, 'name'=>'X Koto Singkarak']);
        DB::table('villages')->insert(['id'=>80205, 'districts_id'=>7105, 'zipcode'=>'27356', 'name'=>'Aripan']);
        DB::table('villages')->insert(['id'=>80206, 'districts_id'=>7105, 'zipcode'=>'27356', 'name'=>'Kacang']);
        DB::table('villages')->insert(['id'=>80207, 'districts_id'=>7105, 'zipcode'=>'27356', 'name'=>'Koto Sani']);
        DB::table('villages')->insert(['id'=>80208, 'districts_id'=>7105, 'zipcode'=>'27356', 'name'=>'Saning Baka']);
        DB::table('villages')->insert(['id'=>80209, 'districts_id'=>7105, 'zipcode'=>'27356', 'name'=>'Singkarak']);
        DB::table('villages')->insert(['id'=>80210, 'districts_id'=>7105, 'zipcode'=>'27356', 'name'=>'Sumani']);
        DB::table('villages')->insert(['id'=>80211, 'districts_id'=>7105, 'zipcode'=>'27356', 'name'=>'Tanjung Alai']);
        DB::table('villages')->insert(['id'=>80212, 'districts_id'=>7105, 'zipcode'=>'27356', 'name'=>'Tikalak']);
        //Kecamatan Kubung Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7106, 'city_id'=>449, 'name'=>'Kubung']);
        DB::table('villages')->insert(['id'=>80213, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Gantuang Ciri']);
        DB::table('villages')->insert(['id'=>80214, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Gauang']);
        DB::table('villages')->insert(['id'=>80215, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>80216, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Koto Hilalang']);
        DB::table('villages')->insert(['id'=>80217, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Panyakalan']);
        DB::table('villages')->insert(['id'=>80218, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Salayo']);
        DB::table('villages')->insert(['id'=>80219, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Saok Laweh']);
        DB::table('villages')->insert(['id'=>80220, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Tanjung']);
        DB::table('villages')->insert(['id'=>80221, 'districts_id'=>7106, 'zipcode'=>'27361', 'name'=>'Tanjung Bingkuang']);
        //Kecamatan Gunung Talang Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7107, 'city_id'=>449, 'name'=>'Gunung Talang']);
        DB::table('villages')->insert(['id'=>80222, 'districts_id'=>7107, 'zipcode'=>'27365', 'name'=>'Aia Batumbuak']);
        DB::table('villages')->insert(['id'=>80223, 'districts_id'=>7107, 'zipcode'=>'27365', 'name'=>'Batang Barus']);
        DB::table('villages')->insert(['id'=>80224, 'districts_id'=>7107, 'zipcode'=>'27365', 'name'=>'Cupak']);
        DB::table('villages')->insert(['id'=>80225, 'districts_id'=>7107, 'zipcode'=>'27365', 'name'=>'Jawi Jawi']);
        DB::table('villages')->insert(['id'=>80226, 'districts_id'=>7107, 'zipcode'=>'27365', 'name'=>'Koto Gadang Guguak']);
        DB::table('villages')->insert(['id'=>80227, 'districts_id'=>7107, 'zipcode'=>'27365', 'name'=>'Koto Gaek Guguk']);
        DB::table('villages')->insert(['id'=>80228, 'districts_id'=>7107, 'zipcode'=>'27365', 'name'=>'Sungai Janiah']);
        DB::table('villages')->insert(['id'=>80229, 'districts_id'=>7107, 'zipcode'=>'27365', 'name'=>'Talang']);
        //Kecamatan Lembah Gumanti Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7108, 'city_id'=>449, 'name'=>'Lembah Gumanti']);
        DB::table('villages')->insert(['id'=>80230, 'districts_id'=>7108, 'zipcode'=>'27371', 'name'=>'Aia Dingin']);
        DB::table('villages')->insert(['id'=>80231, 'districts_id'=>7108, 'zipcode'=>'27371', 'name'=>'Alahan Panjang']);
        DB::table('villages')->insert(['id'=>80232, 'districts_id'=>7108, 'zipcode'=>'27371', 'name'=>'Salimpat']);
        DB::table('villages')->insert(['id'=>80233, 'districts_id'=>7108, 'zipcode'=>'27371', 'name'=>'Sungai Nanam']);
        //Kecamatan Tigo Lurah Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7109, 'city_id'=>449, 'name'=>'Tigo Lurah']);
        DB::table('villages')->insert(['id'=>80234, 'districts_id'=>7109, 'zipcode'=>'27372', 'name'=>'Batu Banjajang']);
        DB::table('villages')->insert(['id'=>80235, 'districts_id'=>7109, 'zipcode'=>'27372', 'name'=>'Garabak Data']);
        DB::table('villages')->insert(['id'=>80236, 'districts_id'=>7109, 'zipcode'=>'27372', 'name'=>'Rangkiang Luluih']);
        DB::table('villages')->insert(['id'=>80237, 'districts_id'=>7109, 'zipcode'=>'27372', 'name'=>'Simanau']);
        DB::table('villages')->insert(['id'=>80238, 'districts_id'=>7109, 'zipcode'=>'27372', 'name'=>'Tanjung Balik Sumiso']);
        //Kecamatan Hiliran Gumanti Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7110, 'city_id'=>449, 'name'=>'Hiliran Gumanti']);
        DB::table('villages')->insert(['id'=>80239, 'districts_id'=>7110, 'zipcode'=>'27372', 'name'=>'Sarik Alahan Tigo']);
        DB::table('villages')->insert(['id'=>80240, 'districts_id'=>7110, 'zipcode'=>'27372', 'name'=>'Sungai Abu']);
        DB::table('villages')->insert(['id'=>80241, 'districts_id'=>7110, 'zipcode'=>'27372', 'name'=>'Talang Babungo']);
        //Kecamatan Pantai Cermin Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7111, 'city_id'=>449, 'name'=>'Pantai Cermin']);
        DB::table('villages')->insert(['id'=>80242, 'districts_id'=>7111, 'zipcode'=>'27373', 'name'=>'Lolo']);
        DB::table('villages')->insert(['id'=>80243, 'districts_id'=>7111, 'zipcode'=>'27373', 'name'=>'Surian']);
        //Kecamatan Bukit Sundi Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7112, 'city_id'=>449, 'name'=>'Bukit Sundi']);
        DB::table('villages')->insert(['id'=>80244, 'districts_id'=>7112, 'zipcode'=>'27381', 'name'=>'Bukit Tandang']);
        DB::table('villages')->insert(['id'=>80245, 'districts_id'=>7112, 'zipcode'=>'27381', 'name'=>'Dilam']);
        DB::table('villages')->insert(['id'=>80246, 'districts_id'=>7112, 'zipcode'=>'27381', 'name'=>'Kinari']);
        DB::table('villages')->insert(['id'=>80247, 'districts_id'=>7112, 'zipcode'=>'27381', 'name'=>'Muaro Paneh']);
        DB::table('villages')->insert(['id'=>80248, 'districts_id'=>7112, 'zipcode'=>'27381', 'name'=>'Parambahan']);
        //Kecamatan Lembang Jaya Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7113, 'city_id'=>449, 'name'=>'Lembang Jaya']);
        DB::table('villages')->insert(['id'=>80249, 'districts_id'=>7113, 'zipcode'=>'27383', 'name'=>'Batu Bajanjang']);
        DB::table('villages')->insert(['id'=>80250, 'districts_id'=>7113, 'zipcode'=>'27383', 'name'=>'Batu Banyak']);
        DB::table('villages')->insert(['id'=>80251, 'districts_id'=>7113, 'zipcode'=>'27383', 'name'=>'Koto Anau']);
        DB::table('villages')->insert(['id'=>80252, 'districts_id'=>7113, 'zipcode'=>'27383', 'name'=>'Koto Laweh']);
        DB::table('villages')->insert(['id'=>80253, 'districts_id'=>7113, 'zipcode'=>'27383', 'name'=>'Limau Lunggo']);
        DB::table('villages')->insert(['id'=>80254, 'districts_id'=>7113, 'zipcode'=>'27383', 'name'=>'Salayo Tanang Bukik Sileh']);
        //Kecamatan Danau Kembar Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7114, 'city_id'=>449, 'name'=>'Danau Kembar']);
        DB::table('villages')->insert(['id'=>80255, 'districts_id'=>7114, 'zipcode'=>'27383', 'name'=>'Kampung Batu Dalam']);
        DB::table('villages')->insert(['id'=>80256, 'districts_id'=>7114, 'zipcode'=>'27383', 'name'=>'Simpang Tanjuang Nan Ampek/iv']);
        //Kecamatan Payung Sekaki Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7115, 'city_id'=>449, 'name'=>'Payung Sekaki']);
        DB::table('villages')->insert(['id'=>80257, 'districts_id'=>7115, 'zipcode'=>'27387', 'name'=>'Aia Luo']);
        DB::table('villages')->insert(['id'=>80258, 'districts_id'=>7115, 'zipcode'=>'27387', 'name'=>'Sirukam']);
        DB::table('villages')->insert(['id'=>80259, 'districts_id'=>7115, 'zipcode'=>'27387', 'name'=>'Supayang']);
        //Kecamatan Ix Koto Sei Lasi Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7116, 'city_id'=>449, 'name'=>'Ix Koto Sei Lasi']);
        DB::table('villages')->insert(['id'=>80260, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Bukit Bais']);
        DB::table('villages')->insert(['id'=>80261, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Guguk Sarai']);
        DB::table('villages')->insert(['id'=>80262, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Indudur']);
        DB::table('villages')->insert(['id'=>80263, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Koto Laweh']);
        DB::table('villages')->insert(['id'=>80264, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Pianggu']);
        DB::table('villages')->insert(['id'=>80265, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Siaro Aro']);
        DB::table('villages')->insert(['id'=>80266, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Sungai Durian']);
        DB::table('villages')->insert(['id'=>80267, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Sungai Jambur']);
        DB::table('villages')->insert(['id'=>80268, 'districts_id'=>7116, 'zipcode'=>'27388', 'name'=>'Taruang Taruang']);
        //Kecamatan Junjung Sirih Kab. Solok Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7117, 'city_id'=>449, 'name'=>'Junjung Sirih']);
        DB::table('villages')->insert(['id'=>80269, 'districts_id'=>7117, 'zipcode'=>'27388', 'name'=>'Muaro Pingai']);
        DB::table('villages')->insert(['id'=>80270, 'districts_id'=>7117, 'zipcode'=>'27388', 'name'=>'Paninggahan']);

        //Kota Sawah Lunto Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>450, 'province_id'=>32, 'type'=>'city', 'name'=>'Sawah Lunto']);
        //Kecamatan Lembah Segar Kota Sawah Lunto Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7118, 'city_id'=>450, 'name'=>'Lembah Segar']);
        DB::table('villages')->insert(['id'=>80271, 'districts_id'=>7118, 'zipcode'=>'27411', 'name'=>'Pasar']);
        DB::table('villages')->insert(['id'=>80272, 'districts_id'=>7118, 'zipcode'=>'27411', 'name'=>'Tanah Lapang']);
        DB::table('villages')->insert(['id'=>80273, 'districts_id'=>7118, 'zipcode'=>'27412', 'name'=>'Kubang Utara Sikabu']);
        DB::table('villages')->insert(['id'=>80274, 'districts_id'=>7118, 'zipcode'=>'27413', 'name'=>'Kubang Tangah']);
        DB::table('villages')->insert(['id'=>80275, 'districts_id'=>7118, 'zipcode'=>'27415', 'name'=>'Kubang Sirakuk/sirakuak Selatan']);
        DB::table('villages')->insert(['id'=>80276, 'districts_id'=>7118, 'zipcode'=>'27415', 'name'=>'Kubang Sirakuk/sirakuak Utara']);
        DB::table('villages')->insert(['id'=>80277, 'districts_id'=>7118, 'zipcode'=>'27415', 'name'=>'Pasar Kubang']);
        DB::table('villages')->insert(['id'=>80278, 'districts_id'=>7118, 'zipcode'=>'27416', 'name'=>'Lunto Timur']);
        DB::table('villages')->insert(['id'=>80279, 'districts_id'=>7118, 'zipcode'=>'27418', 'name'=>'Air Mulyo (aurmulyo)']);
        DB::table('villages')->insert(['id'=>80280, 'districts_id'=>7118, 'zipcode'=>'27418', 'name'=>'Lunto Barat']);
        DB::table('villages')->insert(['id'=>80281, 'districts_id'=>7118, 'zipcode'=>'27419', 'name'=>'Air/aia Dingin']);
        //Kecamatan Barangin Kota Sawah Lunto Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7119, 'city_id'=>450, 'name'=>'Barangin']);
        DB::table('villages')->insert(['id'=>80282, 'districts_id'=>7119, 'zipcode'=>'27421', 'name'=>'Lumindai']);
        DB::table('villages')->insert(['id'=>80283, 'districts_id'=>7119, 'zipcode'=>'27421', 'name'=>'Saringan']);
        DB::table('villages')->insert(['id'=>80284, 'districts_id'=>7119, 'zipcode'=>'27422', 'name'=>'Balai Batu Sandaran']);
        DB::table('villages')->insert(['id'=>80285, 'districts_id'=>7119, 'zipcode'=>'27423', 'name'=>'Talago Gunung/gunuang']);
        DB::table('villages')->insert(['id'=>80286, 'districts_id'=>7119, 'zipcode'=>'27424', 'name'=>'Lubang Panjang']);
        DB::table('villages')->insert(['id'=>80287, 'districts_id'=>7119, 'zipcode'=>'27424', 'name'=>'Santur/santua']);
        DB::table('villages')->insert(['id'=>80288, 'districts_id'=>7119, 'zipcode'=>'27425', 'name'=>'Durian I']);
        DB::table('villages')->insert(['id'=>80289, 'districts_id'=>7119, 'zipcode'=>'27425', 'name'=>'Durian Ii']);
        DB::table('villages')->insert(['id'=>80290, 'districts_id'=>7119, 'zipcode'=>'27425', 'name'=>'Kolok Mudik/mudiak']);
        DB::table('villages')->insert(['id'=>80291, 'districts_id'=>7119, 'zipcode'=>'27427', 'name'=>'Kolok Nan Tuo']);
        //Kecamatan Silungkang Kota Sawah Lunto Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7120, 'city_id'=>450, 'name'=>'Silungkang']);
        DB::table('villages')->insert(['id'=>80292, 'districts_id'=>7120, 'zipcode'=>'27431', 'name'=>'Silungkang Tigo']);
        DB::table('villages')->insert(['id'=>80293, 'districts_id'=>7120, 'zipcode'=>'27432', 'name'=>'Silungkang Duo']);
        DB::table('villages')->insert(['id'=>80294, 'districts_id'=>7120, 'zipcode'=>'27433', 'name'=>'Silungkang Oso']);
        DB::table('villages')->insert(['id'=>80295, 'districts_id'=>7120, 'zipcode'=>'27434', 'name'=>'Taratak Bancah/boncah']);
        DB::table('villages')->insert(['id'=>80296, 'districts_id'=>7120, 'zipcode'=>'27435', 'name'=>'Muaro Kalaban']);
        //Kecamatan Talawi Kota Sawah Lunto Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7121, 'city_id'=>450, 'name'=>'Talawi']);
        DB::table('villages')->insert(['id'=>80297, 'districts_id'=>7121, 'zipcode'=>'27441', 'name'=>'Datar Mansiang']);
        DB::table('villages')->insert(['id'=>80298, 'districts_id'=>7121, 'zipcode'=>'27442', 'name'=>'Tumpuak Tangah']);
        DB::table('villages')->insert(['id'=>80299, 'districts_id'=>7121, 'zipcode'=>'27443', 'name'=>'Batu Tanjuang']);
        DB::table('villages')->insert(['id'=>80300, 'districts_id'=>7121, 'zipcode'=>'27443', 'name'=>'Kumbayau']);
        DB::table('villages')->insert(['id'=>80301, 'districts_id'=>7121, 'zipcode'=>'27444', 'name'=>'Bukik Gadang']);
        DB::table('villages')->insert(['id'=>80302, 'districts_id'=>7121, 'zipcode'=>'27444', 'name'=>'Talawi Mudik/mudiak']);
        DB::table('villages')->insert(['id'=>80303, 'districts_id'=>7121, 'zipcode'=>'27445', 'name'=>'Talawi Hilir/hilia']);
        DB::table('villages')->insert(['id'=>80304, 'districts_id'=>7121, 'zipcode'=>'27446', 'name'=>'Sijantang Koto']);
        DB::table('villages')->insert(['id'=>80305, 'districts_id'=>7121, 'zipcode'=>'27447', 'name'=>'Salak']);
        DB::table('villages')->insert(['id'=>80306, 'districts_id'=>7121, 'zipcode'=>'27448', 'name'=>'Sikalang']);
        DB::table('villages')->insert(['id'=>80307, 'districts_id'=>7121, 'zipcode'=>'27449', 'name'=>'Rantih']);

        //Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>451, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Sijunjung (sawah Lunto Sijunjung)']);
        //Kecamatan Sijunjung Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7122, 'city_id'=>451, 'name'=>'Sijunjung']);
        DB::table('villages')->insert(['id'=>80308, 'districts_id'=>7122, 'zipcode'=>'27511', 'name'=>'Solok Ambah']);
        DB::table('villages')->insert(['id'=>80309, 'districts_id'=>7122, 'zipcode'=>'27553', 'name'=>'Aie Angek']);
        DB::table('villages')->insert(['id'=>80310, 'districts_id'=>7122, 'zipcode'=>'27553', 'name'=>'Durian Gadang']);
        DB::table('villages')->insert(['id'=>80311, 'districts_id'=>7122, 'zipcode'=>'27553', 'name'=>'Kandang Baru']);
        DB::table('villages')->insert(['id'=>80312, 'districts_id'=>7122, 'zipcode'=>'27553', 'name'=>'Muaro']);
        DB::table('villages')->insert(['id'=>80313, 'districts_id'=>7122, 'zipcode'=>'27553', 'name'=>'Paru']);
        DB::table('villages')->insert(['id'=>80314, 'districts_id'=>7122, 'zipcode'=>'27553', 'name'=>'Pematang Panjang']);
        DB::table('villages')->insert(['id'=>80315, 'districts_id'=>7122, 'zipcode'=>'27553', 'name'=>'Sijunjung']);
        DB::table('villages')->insert(['id'=>80316, 'districts_id'=>7122, 'zipcode'=>'27553', 'name'=>'Silokek']);
        //Kecamatan Lubuak Tarok Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7123, 'city_id'=>451, 'name'=>'Lubuak Tarok']);
        DB::table('villages')->insert(['id'=>80317, 'districts_id'=>7123, 'zipcode'=>'27553', 'name'=>'Buluah Kasok']);
        DB::table('villages')->insert(['id'=>80318, 'districts_id'=>7123, 'zipcode'=>'27553', 'name'=>'Kampung Dalam']);
        DB::table('villages')->insert(['id'=>80319, 'districts_id'=>7123, 'zipcode'=>'27553', 'name'=>'Lalan']);
        DB::table('villages')->insert(['id'=>80320, 'districts_id'=>7123, 'zipcode'=>'27553', 'name'=>'Latang']);
        DB::table('villages')->insert(['id'=>80321, 'districts_id'=>7123, 'zipcode'=>'27553', 'name'=>'Lubuak Tarok']);
        DB::table('villages')->insert(['id'=>80322, 'districts_id'=>7123, 'zipcode'=>'27553', 'name'=>'Silongo']);
        //Kecamatan Iv Nagari Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7124, 'city_id'=>451, 'name'=>'Iv Nagari']);
        DB::table('villages')->insert(['id'=>80323, 'districts_id'=>7124, 'zipcode'=>'27561', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>80324, 'districts_id'=>7124, 'zipcode'=>'27561', 'name'=>'Koto Tuo']);
        DB::table('villages')->insert(['id'=>80325, 'districts_id'=>7124, 'zipcode'=>'27561', 'name'=>'Muaro Bodi']);
        DB::table('villages')->insert(['id'=>80326, 'districts_id'=>7124, 'zipcode'=>'27561', 'name'=>'Mundam Sakti']);
        DB::table('villages')->insert(['id'=>80327, 'districts_id'=>7124, 'zipcode'=>'27561', 'name'=>'Palangki']);
        //Kecamatan Koto Vii Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7125, 'city_id'=>451, 'name'=>'Koto Vii']);
        DB::table('villages')->insert(['id'=>80328, 'districts_id'=>7125, 'zipcode'=>'27562', 'name'=>'Bukit Bual']);
        DB::table('villages')->insert(['id'=>80329, 'districts_id'=>7125, 'zipcode'=>'27562', 'name'=>'Guguk']);
        DB::table('villages')->insert(['id'=>80330, 'districts_id'=>7125, 'zipcode'=>'27562', 'name'=>'Limo Koto']);
        DB::table('villages')->insert(['id'=>80331, 'districts_id'=>7125, 'zipcode'=>'27562', 'name'=>'Padang Laweh']);
        DB::table('villages')->insert(['id'=>80332, 'districts_id'=>7125, 'zipcode'=>'27562', 'name'=>'Palaluar']);
        DB::table('villages')->insert(['id'=>80333, 'districts_id'=>7125, 'zipcode'=>'27562', 'name'=>'Tanjung']);
        //Kecamatan Sumpur Kudus Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7126, 'city_id'=>451, 'name'=>'Sumpur Kudus']);
        DB::table('villages')->insert(['id'=>80334, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Kumanis']);
        DB::table('villages')->insert(['id'=>80335, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Mangganti']);
        DB::table('villages')->insert(['id'=>80336, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Silantai']);
        DB::table('villages')->insert(['id'=>80337, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Sisawah']);
        DB::table('villages')->insert(['id'=>80338, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Sumpur Kudus']);
        DB::table('villages')->insert(['id'=>80339, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Sumpur Kudus Selatan']);
        DB::table('villages')->insert(['id'=>80340, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Tamparungo']);
        DB::table('villages')->insert(['id'=>80341, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Tanjuang Labuah']);
        DB::table('villages')->insert(['id'=>80342, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Tanjung Bonai Aur']);
        DB::table('villages')->insert(['id'=>80343, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Tanjung Bonai Aur Selatan']);
        DB::table('villages')->insert(['id'=>80344, 'districts_id'=>7126, 'zipcode'=>'27563', 'name'=>'Unggan']);
        //Kecamatan Kupitan Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7127, 'city_id'=>451, 'name'=>'Kupitan']);
        DB::table('villages')->insert(['id'=>80345, 'districts_id'=>7127, 'zipcode'=>'27564', 'name'=>'Batu Manjulur']);
        DB::table('villages')->insert(['id'=>80346, 'districts_id'=>7127, 'zipcode'=>'27564', 'name'=>'Desa Kampung Baru']);
        DB::table('villages')->insert(['id'=>80347, 'districts_id'=>7127, 'zipcode'=>'27564', 'name'=>'Padang Sibusuk']);
        DB::table('villages')->insert(['id'=>80348, 'districts_id'=>7127, 'zipcode'=>'27564', 'name'=>'Pamuatan']);
        //Kecamatan Tanjung Gadang Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7128, 'city_id'=>451, 'name'=>'Tanjung Gadang']);
        DB::table('villages')->insert(['id'=>80349, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Langki']);
        DB::table('villages')->insert(['id'=>80350, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Pulasan']);
        DB::table('villages')->insert(['id'=>80351, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Sibakur']);
        DB::table('villages')->insert(['id'=>80352, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Sinyamu']);
        DB::table('villages')->insert(['id'=>80353, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Tanjung Gadang']);
        DB::table('villages')->insert(['id'=>80354, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Tanjung Lolo']);
        DB::table('villages')->insert(['id'=>80355, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Taratak Baru']);
        DB::table('villages')->insert(['id'=>80356, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Taratak Baru Utara']);
        DB::table('villages')->insert(['id'=>80357, 'districts_id'=>7128, 'zipcode'=>'27571', 'name'=>'Timbulun']);
        //Kecamatan Kamang Baru Kab. Sijunjung (sawah Lunto Sijunjung) Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7129, 'city_id'=>451, 'name'=>'Kamang Baru']);
        DB::table('villages')->insert(['id'=>80358, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Aia Amo']);
        DB::table('villages')->insert(['id'=>80359, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Kamang']);
        DB::table('villages')->insert(['id'=>80360, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Kunangan Parik Rantang']);
        DB::table('villages')->insert(['id'=>80361, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Lubuk Tarantang']);
        DB::table('villages')->insert(['id'=>80362, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Maloro']);
        DB::table('villages')->insert(['id'=>80363, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Muaro Takuang']);
        DB::table('villages')->insert(['id'=>80364, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Padang Tarok']);
        DB::table('villages')->insert(['id'=>80365, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Siaur']);
        DB::table('villages')->insert(['id'=>80366, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Sungai Batuang']);
        DB::table('villages')->insert(['id'=>80367, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Sungai Lansek']);
        DB::table('villages')->insert(['id'=>80368, 'districts_id'=>7129, 'zipcode'=>'27572', 'name'=>'Tanjung Kaliang']);

        //Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>452, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Dharmasraya']);
        //Kecamatan Pulau Punjung Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7130, 'city_id'=>452, 'name'=>'Pulau Punjung']);
        DB::table('villages')->insert(['id'=>80369, 'districts_id'=>7130, 'zipcode'=>'27573', 'name'=>'Empat Koto Pulau Punjung']);
        DB::table('villages')->insert(['id'=>80370, 'districts_id'=>7130, 'zipcode'=>'27573', 'name'=>'Gunung Selasih']);
        DB::table('villages')->insert(['id'=>80371, 'districts_id'=>7130, 'zipcode'=>'27573', 'name'=>'Sikabau']);
        DB::table('villages')->insert(['id'=>80372, 'districts_id'=>7130, 'zipcode'=>'27573', 'name'=>'Sungai Dareh']);
        DB::table('villages')->insert(['id'=>80373, 'districts_id'=>7130, 'zipcode'=>'27573', 'name'=>'Sungai Kambut']);
        DB::table('villages')->insert(['id'=>80374, 'districts_id'=>7130, 'zipcode'=>'27573', 'name'=>'Tebing Tinggi']);
        //Kecamatan Sitiung Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7131, 'city_id'=>452, 'name'=>'Sitiung']);
        DB::table('villages')->insert(['id'=>80375, 'districts_id'=>7131, 'zipcode'=>'27678', 'name'=>'Gunung Medan']);
        DB::table('villages')->insert(['id'=>80376, 'districts_id'=>7131, 'zipcode'=>'27678', 'name'=>'Sei/sungai Duo']);
        DB::table('villages')->insert(['id'=>80377, 'districts_id'=>7131, 'zipcode'=>'27678', 'name'=>'Siguntur']);
        DB::table('villages')->insert(['id'=>80378, 'districts_id'=>7131, 'zipcode'=>'27678', 'name'=>'Sitiung']);
        //Kecamatan Timpeh Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7132, 'city_id'=>452, 'name'=>'Timpeh']);
        DB::table('villages')->insert(['id'=>80379, 'districts_id'=>7132, 'zipcode'=>'27678', 'name'=>'Panyuberangan']);
        DB::table('villages')->insert(['id'=>80380, 'districts_id'=>7132, 'zipcode'=>'27678', 'name'=>'Ranah Palabi']);
        DB::table('villages')->insert(['id'=>80381, 'districts_id'=>7132, 'zipcode'=>'27678', 'name'=>'Tabek (penyebrangan)']);
        DB::table('villages')->insert(['id'=>80382, 'districts_id'=>7132, 'zipcode'=>'27678', 'name'=>'Taratak Tinggi']);
        DB::table('villages')->insert(['id'=>80383, 'districts_id'=>7132, 'zipcode'=>'27678', 'name'=>'Timpeh']);
        //Kecamatan Koto Baru Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7133, 'city_id'=>452, 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>80384, 'districts_id'=>7133, 'zipcode'=>'27681', 'name'=>'Ampalu']);
        DB::table('villages')->insert(['id'=>80385, 'districts_id'=>7133, 'zipcode'=>'27681', 'name'=>'Ampang Kuranji']);
        DB::table('villages')->insert(['id'=>80386, 'districts_id'=>7133, 'zipcode'=>'27681', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>80387, 'districts_id'=>7133, 'zipcode'=>'27681', 'name'=>'Koto Padang']);
        DB::table('villages')->insert(['id'=>80388, 'districts_id'=>7133, 'zipcode'=>'27681', 'name'=>'Padukuan']);
        DB::table('villages')->insert(['id'=>80389, 'districts_id'=>7133, 'zipcode'=>'27681', 'name'=>'Pulau Mainan']);
        DB::table('villages')->insert(['id'=>80390, 'districts_id'=>7133, 'zipcode'=>'27681', 'name'=>'Sialang Gaung']);
        DB::table('villages')->insert(['id'=>80391, 'districts_id'=>7133, 'zipcode'=>'27681', 'name'=>'Simalidu']);
        //Kecamatan Koto Salak Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7134, 'city_id'=>452, 'name'=>'Koto Salak']);
        DB::table('villages')->insert(['id'=>80392, 'districts_id'=>7134, 'zipcode'=>'27681', 'name'=>'Ampalu']);
        DB::table('villages')->insert(['id'=>80393, 'districts_id'=>7134, 'zipcode'=>'27681', 'name'=>'Koto Salak']);
        DB::table('villages')->insert(['id'=>80394, 'districts_id'=>7134, 'zipcode'=>'27681', 'name'=>'Padukuan']);
        DB::table('villages')->insert(['id'=>80395, 'districts_id'=>7134, 'zipcode'=>'27681', 'name'=>'Pulau Mainan']);
        DB::table('villages')->insert(['id'=>80396, 'districts_id'=>7134, 'zipcode'=>'27681', 'name'=>'Simalidu']);
        //Kecamatan Sembilan Koto (ix Koto) Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7135, 'city_id'=>452, 'name'=>'Sembilan Koto (ix Koto)']);
        DB::table('villages')->insert(['id'=>80397, 'districts_id'=>7135, 'zipcode'=>'27681', 'name'=>'Banai']);
        DB::table('villages')->insert(['id'=>80398, 'districts_id'=>7135, 'zipcode'=>'27681', 'name'=>'Lubuk Karak']);
        DB::table('villages')->insert(['id'=>80399, 'districts_id'=>7135, 'zipcode'=>'27681', 'name'=>'Nan Iv Bawauah']);
        DB::table('villages')->insert(['id'=>80400, 'districts_id'=>7135, 'zipcode'=>'27681', 'name'=>'Silago']);
        //Kecamatan Padang Laweh Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7136, 'city_id'=>452, 'name'=>'Padang Laweh']);
        DB::table('villages')->insert(['id'=>80401, 'districts_id'=>7136, 'zipcode'=>'27681', 'name'=>'Batu Rijal']);
        DB::table('villages')->insert(['id'=>80402, 'districts_id'=>7136, 'zipcode'=>'27681', 'name'=>'Muaro Sopan']);
        DB::table('villages')->insert(['id'=>80403, 'districts_id'=>7136, 'zipcode'=>'27681', 'name'=>'Padang Laweh']);
        DB::table('villages')->insert(['id'=>80404, 'districts_id'=>7136, 'zipcode'=>'27681', 'name'=>'Sopan Jaya']);
        //Kecamatan Tiumang Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7137, 'city_id'=>452, 'name'=>'Tiumang']);
        DB::table('villages')->insert(['id'=>80405, 'districts_id'=>7137, 'zipcode'=>'27681', 'name'=>'Koto Baringin']);
        DB::table('villages')->insert(['id'=>80406, 'districts_id'=>7137, 'zipcode'=>'27681', 'name'=>'Sei/sungai Langkok']);
        DB::table('villages')->insert(['id'=>80407, 'districts_id'=>7137, 'zipcode'=>'27681', 'name'=>'Sipangkur']);
        DB::table('villages')->insert(['id'=>80408, 'districts_id'=>7137, 'zipcode'=>'27681', 'name'=>'Tiumang']);
        //Kecamatan Koto Besar Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7138, 'city_id'=>452, 'name'=>'Koto Besar']);
        DB::table('villages')->insert(['id'=>80409, 'districts_id'=>7138, 'zipcode'=>'27684', 'name'=>'Abai Siat']);
        DB::table('villages')->insert(['id'=>80410, 'districts_id'=>7138, 'zipcode'=>'27684', 'name'=>'Bonjol']);
        DB::table('villages')->insert(['id'=>80411, 'districts_id'=>7138, 'zipcode'=>'27684', 'name'=>'Koto Besar']);
        DB::table('villages')->insert(['id'=>80412, 'districts_id'=>7138, 'zipcode'=>'27684', 'name'=>'Koto Gadang']);
        DB::table('villages')->insert(['id'=>80413, 'districts_id'=>7138, 'zipcode'=>'27684', 'name'=>'Koto Laweh']);
        DB::table('villages')->insert(['id'=>80414, 'districts_id'=>7138, 'zipcode'=>'27684', 'name'=>'Koto Ranah']);
        DB::table('villages')->insert(['id'=>80415, 'districts_id'=>7138, 'zipcode'=>'27684', 'name'=>'Koto Tinggi']);
        //Kecamatan Asam Jujuhan Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7139, 'city_id'=>452, 'name'=>'Asam Jujuhan']);
        DB::table('villages')->insert(['id'=>80416, 'districts_id'=>7139, 'zipcode'=>'27684', 'name'=>'Alahan Nan Tigo']);
        DB::table('villages')->insert(['id'=>80417, 'districts_id'=>7139, 'zipcode'=>'27684', 'name'=>'Lubuk Besar']);
        DB::table('villages')->insert(['id'=>80418, 'districts_id'=>7139, 'zipcode'=>'27684', 'name'=>'Sei/sungai Limau']);
        DB::table('villages')->insert(['id'=>80419, 'districts_id'=>7139, 'zipcode'=>'27684', 'name'=>'Sinamar']);
        DB::table('villages')->insert(['id'=>80420, 'districts_id'=>7139, 'zipcode'=>'27684', 'name'=>'Tanjung Alam']);
        //Kecamatan Sungai Rumbai Kab. Dharmasraya Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7140, 'city_id'=>452, 'name'=>'Sungai Rumbai']);
        DB::table('villages')->insert(['id'=>80421, 'districts_id'=>7140, 'zipcode'=>'27684', 'name'=>'Kurnia Koto Salak']);
        DB::table('villages')->insert(['id'=>80422, 'districts_id'=>7140, 'zipcode'=>'27684', 'name'=>'Kurnia Selatan']);
        DB::table('villages')->insert(['id'=>80423, 'districts_id'=>7140, 'zipcode'=>'27684', 'name'=>'Sungai Rumbai']);
        DB::table('villages')->insert(['id'=>80424, 'districts_id'=>7140, 'zipcode'=>'27684', 'name'=>'Sungai Rumbai Timur']);

        //Kab. Solok Selatan Provinsi Sumatera Barat
        DB::table('cities')->insert(['id'=>453, 'province_id'=>32, 'type'=>'regencies', 'name'=>'Solok Selatan']);
        //Kecamatan Koto Parik Gadang Diateh Kab. Solok Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7141, 'city_id'=>453, 'name'=>'Koto Parik Gadang Diateh']);
        DB::table('villages')->insert(['id'=>80425, 'districts_id'=>7141, 'zipcode'=>'27775', 'name'=>'Pakan Rabaa']);
        DB::table('villages')->insert(['id'=>80426, 'districts_id'=>7141, 'zipcode'=>'27775', 'name'=>'Pakan Rabaa Tengah']);
        DB::table('villages')->insert(['id'=>80427, 'districts_id'=>7141, 'zipcode'=>'27775', 'name'=>'Pakan Rabaa Timur']);
        DB::table('villages')->insert(['id'=>80428, 'districts_id'=>7141, 'zipcode'=>'27775', 'name'=>'Pakan Rabaa Utara']);
        //Kecamatan Pauh Duo Kab. Solok Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7142, 'city_id'=>453, 'name'=>'Pauh Duo']);
        DB::table('villages')->insert(['id'=>80429, 'districts_id'=>7142, 'zipcode'=>'27776', 'name'=>'Alam Pauh Duo']);
        DB::table('villages')->insert(['id'=>80430, 'districts_id'=>7142, 'zipcode'=>'27776', 'name'=>'Kapau Alam Pauh Duo']);
        DB::table('villages')->insert(['id'=>80431, 'districts_id'=>7142, 'zipcode'=>'27776', 'name'=>'Luak Kapau Alam Pauh Duo']);
        DB::table('villages')->insert(['id'=>80432, 'districts_id'=>7142, 'zipcode'=>'27776', 'name'=>'Pauh Duo Nan Batigo']);
        //Kecamatan Sungai Pagu Kab. Solok Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7143, 'city_id'=>453, 'name'=>'Sungai Pagu']);
        DB::table('villages')->insert(['id'=>80433, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Bomas']);
        DB::table('villages')->insert(['id'=>80434, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Koto Baru']);
        DB::table('villages')->insert(['id'=>80435, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Pasar Muara Labuh']);
        DB::table('villages')->insert(['id'=>80436, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Pasir Talang']);
        DB::table('villages')->insert(['id'=>80437, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Pasir Talang Barat']);
        DB::table('villages')->insert(['id'=>80438, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Pasir Talang Selatan']);
        DB::table('villages')->insert(['id'=>80439, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Pasir Talang Timur']);
        DB::table('villages')->insert(['id'=>80440, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Pulakek Koto Baru']);
        DB::table('villages')->insert(['id'=>80441, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Sako Pasia Talang']);
        DB::table('villages')->insert(['id'=>80442, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Sako Selatan Pasia Talang']);
        DB::table('villages')->insert(['id'=>80443, 'districts_id'=>7143, 'zipcode'=>'27776', 'name'=>'Sako Utara Pasia Talang']);
        //Kecamatan Sangir Jujuan Kab. Solok Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7144, 'city_id'=>453, 'name'=>'Sangir Jujuan']);
        DB::table('villages')->insert(['id'=>80444, 'districts_id'=>7144, 'zipcode'=>'27777', 'name'=>'Bidar Alam']);
        DB::table('villages')->insert(['id'=>80445, 'districts_id'=>7144, 'zipcode'=>'27777', 'name'=>'Lubuk/lubuak Malako']);
        DB::table('villages')->insert(['id'=>80446, 'districts_id'=>7144, 'zipcode'=>'27777', 'name'=>'Malako']);
        DB::table('villages')->insert(['id'=>80447, 'districts_id'=>7144, 'zipcode'=>'27777', 'name'=>'Padang Air Dingin']);
        DB::table('villages')->insert(['id'=>80448, 'districts_id'=>7144, 'zipcode'=>'27777', 'name'=>'Padang Gantiang']);
        //Kecamatan Sangir Balai Janggo Kab. Solok Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7145, 'city_id'=>453, 'name'=>'Sangir Balai Janggo']);
        DB::table('villages')->insert(['id'=>80449, 'districts_id'=>7145, 'zipcode'=>'27777', 'name'=>'Sungai Kunyit']);
        DB::table('villages')->insert(['id'=>80450, 'districts_id'=>7145, 'zipcode'=>'27777', 'name'=>'Sungai Kunyit Barat']);
        DB::table('villages')->insert(['id'=>80451, 'districts_id'=>7145, 'zipcode'=>'27777', 'name'=>'Talao Sungai Kunyit']);
        DB::table('villages')->insert(['id'=>80452, 'districts_id'=>7145, 'zipcode'=>'27777', 'name'=>'Talunan Maju']);
        //Kecamatan Sangir Kab. Solok Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7146, 'city_id'=>453, 'name'=>'Sangir']);
        DB::table('villages')->insert(['id'=>80453, 'districts_id'=>7146, 'zipcode'=>'27778', 'name'=>'Lubuk Gadang']);
        DB::table('villages')->insert(['id'=>80454, 'districts_id'=>7146, 'zipcode'=>'27778', 'name'=>'Lubuk Gadang Selatan']);
        DB::table('villages')->insert(['id'=>80455, 'districts_id'=>7146, 'zipcode'=>'27778', 'name'=>'Lubuk Gadang Timur']);
        DB::table('villages')->insert(['id'=>80456, 'districts_id'=>7146, 'zipcode'=>'27778', 'name'=>'Lubuk Gadang Utara']);
        //Kecamatan Sangir Batang Hari Kab. Solok Selatan Provinsi Sumatera Barat
        DB::table('districts')->insert(['id'=>7147, 'city_id'=>453, 'name'=>'Sangir Batang Hari']);
        DB::table('villages')->insert(['id'=>80457, 'districts_id'=>7147, 'zipcode'=>'27779', 'name'=>'Abai']);
        DB::table('villages')->insert(['id'=>80458, 'districts_id'=>7147, 'zipcode'=>'27779', 'name'=>'Dusun Tangah']);
        DB::table('villages')->insert(['id'=>80459, 'districts_id'=>7147, 'zipcode'=>'27779', 'name'=>'Lubuk Ulang Aling']);
        DB::table('villages')->insert(['id'=>80460, 'districts_id'=>7147, 'zipcode'=>'27779', 'name'=>'Lubuk Ulang Aling Selatan']);
        DB::table('villages')->insert(['id'=>80461, 'districts_id'=>7147, 'zipcode'=>'27779', 'name'=>'Lubuk Ulang Aling Tengah']);
        DB::table('villages')->insert(['id'=>80462, 'districts_id'=>7147, 'zipcode'=>'27779', 'name'=>'Ranah Pantai Cermin']);
        DB::table('villages')->insert(['id'=>80463, 'districts_id'=>7147, 'zipcode'=>'27779', 'name'=>'Sitapus']);
    }
}
