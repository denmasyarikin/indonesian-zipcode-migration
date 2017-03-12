<?php

use Illuminate\Database\Seeder;

class KalimantanUtara extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>16, 'name'=>'Kalimantan Utara']);

        //Kota Tarakan Provinsi Kalimantan Utara
        DB::table('cities')->insert(['id'=>213, 'province_id'=>16, 'type'=>'city', 'name'=>'Tarakan']);
        //Kecamatan Tarakan Barat Kota Tarakan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3852, 'city_id'=>213, 'name'=>'Tarakan Barat']);
        DB::table('villages')->insert(['id'=>44173, 'districts_id'=>3852, 'zipcode'=>'77111', 'name'=>'Karang Anyar']);
        DB::table('villages')->insert(['id'=>44174, 'districts_id'=>3852, 'zipcode'=>'77111', 'name'=>'Karang Anyar Pantai']);
        DB::table('villages')->insert(['id'=>44175, 'districts_id'=>3852, 'zipcode'=>'77111', 'name'=>'Karang Harapan']);
        DB::table('villages')->insert(['id'=>44176, 'districts_id'=>3852, 'zipcode'=>'77112', 'name'=>'Karang Balik']);
        DB::table('villages')->insert(['id'=>44177, 'districts_id'=>3852, 'zipcode'=>'77112', 'name'=>'Karang Rejo']);
        //Kecamatan Tarakan Tengah Kota Tarakan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3853, 'city_id'=>213, 'name'=>'Tarakan Tengah']);
        DB::table('villages')->insert(['id'=>44178, 'districts_id'=>3853, 'zipcode'=>'77113', 'name'=>'Kampung Satu (skip)']);
        DB::table('villages')->insert(['id'=>44179, 'districts_id'=>3853, 'zipcode'=>'77113', 'name'=>'Pamusian']);
        DB::table('villages')->insert(['id'=>44180, 'districts_id'=>3853, 'zipcode'=>'77113', 'name'=>'Selumit']);
        DB::table('villages')->insert(['id'=>44181, 'districts_id'=>3853, 'zipcode'=>'77113', 'name'=>'Selumit Pantai']);
        DB::table('villages')->insert(['id'=>44182, 'districts_id'=>3853, 'zipcode'=>'77114', 'name'=>'Sebengkok']);
        //Kecamatan Tarakan Timur Kota Tarakan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3854, 'city_id'=>213, 'name'=>'Tarakan Timur']);
        DB::table('villages')->insert(['id'=>44183, 'districts_id'=>3854, 'zipcode'=>'77115', 'name'=>'Gunung Lingkas']);
        DB::table('villages')->insert(['id'=>44184, 'districts_id'=>3854, 'zipcode'=>'77115', 'name'=>'Mamburungan Timur']);
        DB::table('villages')->insert(['id'=>44185, 'districts_id'=>3854, 'zipcode'=>'77115', 'name'=>'Pantai Amal']);
        DB::table('villages')->insert(['id'=>44186, 'districts_id'=>3854, 'zipcode'=>'77123', 'name'=>'Kampung Enam']);
        DB::table('villages')->insert(['id'=>44187, 'districts_id'=>3854, 'zipcode'=>'77124', 'name'=>'Kampung Empat']);
        DB::table('villages')->insert(['id'=>44188, 'districts_id'=>3854, 'zipcode'=>'77125', 'name'=>'Mamburungan']);
        DB::table('villages')->insert(['id'=>44189, 'districts_id'=>3854, 'zipcode'=>'77126', 'name'=>'Lingkas Ujung']);
        //Kecamatan Tarakan Utara Kota Tarakan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3855, 'city_id'=>213, 'name'=>'Tarakan Utara']);
        DB::table('villages')->insert(['id'=>44190, 'districts_id'=>3855, 'zipcode'=>'77116', 'name'=>'Juata Krikil/kerikil']);
        DB::table('villages')->insert(['id'=>44191, 'districts_id'=>3855, 'zipcode'=>'77116', 'name'=>'Juata Laut']);
        DB::table('villages')->insert(['id'=>44192, 'districts_id'=>3855, 'zipcode'=>'77116', 'name'=>'Juata Permai']);

        //Kab. Tana Tidung Provinsi Kalimantan Utara
        DB::table('cities')->insert(['id'=>214, 'province_id'=>16, 'type'=>'regencies', 'name'=>'Tana Tidung']);
        //Kecamatan Sesayap Hilir Kab. Tana Tidung Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3856, 'city_id'=>214, 'name'=>'Sesayap Hilir']);
        DB::table('villages')->insert(['id'=>44193, 'districts_id'=>3856, 'zipcode'=>'77152', 'name'=>'Badan Bikis']);
        DB::table('villages')->insert(['id'=>44194, 'districts_id'=>3856, 'zipcode'=>'77152', 'name'=>'Bebatu']);
        DB::table('villages')->insert(['id'=>44195, 'districts_id'=>3856, 'zipcode'=>'77152', 'name'=>'Mendelutung (menjelutung)']);
        DB::table('villages')->insert(['id'=>44196, 'districts_id'=>3856, 'zipcode'=>'77152', 'name'=>'Seludau']);
        DB::table('villages')->insert(['id'=>44197, 'districts_id'=>3856, 'zipcode'=>'77152', 'name'=>'Sengkong']);
        DB::table('villages')->insert(['id'=>44198, 'districts_id'=>3856, 'zipcode'=>'77152', 'name'=>'Sepala Dalung (sesayap Dalung)']);
        DB::table('villages')->insert(['id'=>44199, 'districts_id'=>3856, 'zipcode'=>'77152', 'name'=>'Sesayap/sepala']);
        //Kecamatan Betayau Kab. Tana Tidung Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3857, 'city_id'=>214, 'name'=>'Betayau']);
        DB::table('villages')->insert(['id'=>44200, 'districts_id'=>3857, 'zipcode'=>'77152', 'name'=>'Bebakung']);
        DB::table('villages')->insert(['id'=>44201, 'districts_id'=>3857, 'zipcode'=>'77152', 'name'=>'Buang Baru (buong Baru)']);
        DB::table('villages')->insert(['id'=>44202, 'districts_id'=>3857, 'zipcode'=>'77152', 'name'=>'Kujau']);
        DB::table('villages')->insert(['id'=>44203, 'districts_id'=>3857, 'zipcode'=>'77152', 'name'=>'Maning']);
        DB::table('villages')->insert(['id'=>44204, 'districts_id'=>3857, 'zipcode'=>'77152', 'name'=>'Mendupe/mendopu']);
        DB::table('villages')->insert(['id'=>44205, 'districts_id'=>3857, 'zipcode'=>'77152', 'name'=>'Periuk']);
        //Kecamatan Sesayap Kab. Tana Tidung Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3858, 'city_id'=>214, 'name'=>'Sesayap']);
        DB::table('villages')->insert(['id'=>44206, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Gunawan']);
        DB::table('villages')->insert(['id'=>44207, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Limbu Sedulun/sidulun']);
        DB::table('villages')->insert(['id'=>44208, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Rian']);
        DB::table('villages')->insert(['id'=>44209, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Sebawang']);
        DB::table('villages')->insert(['id'=>44210, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Sebidai/sebiday']);
        DB::table('villages')->insert(['id'=>44211, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Sedulun']);
        DB::table('villages')->insert(['id'=>44212, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Seputuk']);
        DB::table('villages')->insert(['id'=>44213, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Tideng Pale']);
        DB::table('villages')->insert(['id'=>44214, 'districts_id'=>3858, 'zipcode'=>'77152', 'name'=>'Tideng Pale Timur']);
        //Kecamatan Tana Lia (tanah Lia) Kab. Tana Tidung Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3859, 'city_id'=>214, 'name'=>'Tana Lia (tanah Lia)']);
        DB::table('villages')->insert(['id'=>44215, 'districts_id'=>3859, 'zipcode'=>'77453', 'name'=>'Sambungan']);
        DB::table('villages')->insert(['id'=>44216, 'districts_id'=>3859, 'zipcode'=>'77453', 'name'=>'Tanah Merah']);
        DB::table('villages')->insert(['id'=>44217, 'districts_id'=>3859, 'zipcode'=>'77453', 'name'=>'Tengku Dacing']);

        //Kab. Malinau Provinsi Kalimantan Utara
        DB::table('cities')->insert(['id'=>215, 'province_id'=>16, 'type'=>'regencies', 'name'=>'Malinau']);
        //Kecamatan Mentarang Hulu Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3860, 'city_id'=>215, 'name'=>'Mentarang Hulu']);
        DB::table('villages')->insert(['id'=>44218, 'districts_id'=>3860, 'zipcode'=>'77155', 'name'=>'Long Berang']);
        DB::table('villages')->insert(['id'=>44219, 'districts_id'=>3860, 'zipcode'=>'77155', 'name'=>'Long Kebinu']);
        DB::table('villages')->insert(['id'=>44220, 'districts_id'=>3860, 'zipcode'=>'77155', 'name'=>'Long Mekatif']);
        DB::table('villages')->insert(['id'=>44221, 'districts_id'=>3860, 'zipcode'=>'77155', 'name'=>'Long Pala']);
        DB::table('villages')->insert(['id'=>44222, 'districts_id'=>3860, 'zipcode'=>'77155', 'name'=>'Long Semamu']);
        DB::table('villages')->insert(['id'=>44223, 'districts_id'=>3860, 'zipcode'=>'77155', 'name'=>'Long Simau']);
        DB::table('villages')->insert(['id'=>44224, 'districts_id'=>3860, 'zipcode'=>'77155', 'name'=>'Long Sulit']);
        //Kecamatan Malinau Selatan Hilir Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3861, 'city_id'=>215, 'name'=>'Malinau Selatan Hilir']);
        DB::table('villages')->insert(['id'=>44225, 'districts_id'=>3861, 'zipcode'=>'77554', 'name'=>'Batu Kajang']);
        DB::table('villages')->insert(['id'=>44226, 'districts_id'=>3861, 'zipcode'=>'77554', 'name'=>'Gong Solok']);
        DB::table('villages')->insert(['id'=>44227, 'districts_id'=>3861, 'zipcode'=>'77554', 'name'=>'Long Adiu']);
        DB::table('villages')->insert(['id'=>44228, 'districts_id'=>3861, 'zipcode'=>'77554', 'name'=>'Punan Gong Solok']);
        DB::table('villages')->insert(['id'=>44229, 'districts_id'=>3861, 'zipcode'=>'77554', 'name'=>'Punan Long Adiu']);
        DB::table('villages')->insert(['id'=>44230, 'districts_id'=>3861, 'zipcode'=>'77554', 'name'=>'Punan Setarap']);
        DB::table('villages')->insert(['id'=>44231, 'districts_id'=>3861, 'zipcode'=>'77554', 'name'=>'Setarap']);
        DB::table('villages')->insert(['id'=>44232, 'districts_id'=>3861, 'zipcode'=>'77554', 'name'=>'Setulang']);
        //Kecamatan Malinau Kota Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3862, 'city_id'=>215, 'name'=>'Malinau Kota']);
        DB::table('villages')->insert(['id'=>44233, 'districts_id'=>3862, 'zipcode'=>'77554', 'name'=>'Batu Lidung']);
        DB::table('villages')->insert(['id'=>44234, 'districts_id'=>3862, 'zipcode'=>'77554', 'name'=>'Malinau Hilir']);
        DB::table('villages')->insert(['id'=>44235, 'districts_id'=>3862, 'zipcode'=>'77554', 'name'=>'Malinau Hulu']);
        DB::table('villages')->insert(['id'=>44236, 'districts_id'=>3862, 'zipcode'=>'77554', 'name'=>'Malinau Kota']);
        DB::table('villages')->insert(['id'=>44237, 'districts_id'=>3862, 'zipcode'=>'77554', 'name'=>'Pelita Kanaan']);
        DB::table('villages')->insert(['id'=>44238, 'districts_id'=>3862, 'zipcode'=>'77554', 'name'=>'Tanjung Keranjang']);
        //Kecamatan Malinau Utara Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3863, 'city_id'=>215, 'name'=>'Malinau Utara']);
        DB::table('villages')->insert(['id'=>44239, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Belayan']);
        DB::table('villages')->insert(['id'=>44240, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Kaliamok']);
        DB::table('villages')->insert(['id'=>44241, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Kelapis']);
        DB::table('villages')->insert(['id'=>44242, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Lubok Manis']);
        DB::table('villages')->insert(['id'=>44243, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Luso']);
        DB::table('villages')->insert(['id'=>44244, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Malinau Seberang']);
        DB::table('villages')->insert(['id'=>44245, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Putat']);
        DB::table('villages')->insert(['id'=>44246, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Respen Tubu']);
        DB::table('villages')->insert(['id'=>44247, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Salap']);
        DB::table('villages')->insert(['id'=>44248, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Semanggaris']);
        DB::table('villages')->insert(['id'=>44249, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Sembuak Warot/warod']);
        DB::table('villages')->insert(['id'=>44250, 'districts_id'=>3863, 'zipcode'=>'77554', 'name'=>'Seruyung']);
        //Kecamatan Malinau Selatan Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3864, 'city_id'=>215, 'name'=>'Malinau Selatan']);
        DB::table('villages')->insert(['id'=>44251, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Bila Bekayuk']);
        DB::table('villages')->insert(['id'=>44252, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Laban Nyarit']);
        DB::table('villages')->insert(['id'=>44253, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Langap']);
        DB::table('villages')->insert(['id'=>44254, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Long Loreh']);
        DB::table('villages')->insert(['id'=>44255, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Nunuk Tanah Kibang']);
        DB::table('villages')->insert(['id'=>44256, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Paya Seturan']);
        DB::table('villages')->insert(['id'=>44257, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Pelencau']);
        DB::table('villages')->insert(['id'=>44258, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Punan Rian']);
        DB::table('villages')->insert(['id'=>44259, 'districts_id'=>3864, 'zipcode'=>'77554', 'name'=>'Sengayan']);
        //Kecamatan Malinau Selatan Hulu Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3865, 'city_id'=>215, 'name'=>'Malinau Selatan Hulu']);
        DB::table('villages')->insert(['id'=>44260, 'districts_id'=>3865, 'zipcode'=>'77554', 'name'=>'Halanga']);
        DB::table('villages')->insert(['id'=>44261, 'districts_id'=>3865, 'zipcode'=>'77554', 'name'=>'Long Jalan']);
        DB::table('villages')->insert(['id'=>44262, 'districts_id'=>3865, 'zipcode'=>'77554', 'name'=>'Long Lake']);
        DB::table('villages')->insert(['id'=>44263, 'districts_id'=>3865, 'zipcode'=>'77554', 'name'=>'Long Rat']);
        DB::table('villages')->insert(['id'=>44264, 'districts_id'=>3865, 'zipcode'=>'77554', 'name'=>'Metut']);
        DB::table('villages')->insert(['id'=>44265, 'districts_id'=>3865, 'zipcode'=>'77554', 'name'=>'Nahakramo Baru']);
        DB::table('villages')->insert(['id'=>44266, 'districts_id'=>3865, 'zipcode'=>'77554', 'name'=>'Punan Mirau']);
        DB::table('villages')->insert(['id'=>44267, 'districts_id'=>3865, 'zipcode'=>'77554', 'name'=>'Tanjung Nanga']);
        //Kecamatan Malinau Barat Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3866, 'city_id'=>215, 'name'=>'Malinau Barat']);
        DB::table('villages')->insert(['id'=>44268, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Kuala Lapang']);
        DB::table('villages')->insert(['id'=>44269, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Long Bila']);
        DB::table('villages')->insert(['id'=>44270, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Long Kenipe']);
        DB::table('villages')->insert(['id'=>44271, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Punan Bengalun']);
        DB::table('villages')->insert(['id'=>44272, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Sempayang']);
        DB::table('villages')->insert(['id'=>44273, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Sentaban']);
        DB::table('villages')->insert(['id'=>44274, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Sesua']);
        DB::table('villages')->insert(['id'=>44275, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Tanjung Lapang']);
        DB::table('villages')->insert(['id'=>44276, 'districts_id'=>3866, 'zipcode'=>'77554', 'name'=>'Taras']);
        //Kecamatan Mentarang Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3867, 'city_id'=>215, 'name'=>'Mentarang']);
        DB::table('villages')->insert(['id'=>44277, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Harapan Maju']);
        DB::table('villages')->insert(['id'=>44278, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Lidung Kemenci']);
        DB::table('villages')->insert(['id'=>44279, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Long Bisai']);
        DB::table('villages')->insert(['id'=>44280, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Long Gafid']);
        DB::table('villages')->insert(['id'=>44281, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Long Liku']);
        DB::table('villages')->insert(['id'=>44282, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Mentarang Baru']);
        DB::table('villages')->insert(['id'=>44283, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Paking']);
        DB::table('villages')->insert(['id'=>44284, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Pulau Sapi']);
        DB::table('villages')->insert(['id'=>44285, 'districts_id'=>3867, 'zipcode'=>'77555', 'name'=>'Temalang']);
        //Kecamatan Sungai Tubu Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3868, 'city_id'=>215, 'name'=>'Sungai Tubu']);
        DB::table('villages')->insert(['id'=>44286, 'districts_id'=>3868, 'zipcode'=>'77555', 'name'=>'Long Nyau']);
        DB::table('villages')->insert(['id'=>44287, 'districts_id'=>3868, 'zipcode'=>'77555', 'name'=>'Long Pada']);
        DB::table('villages')->insert(['id'=>44288, 'districts_id'=>3868, 'zipcode'=>'77555', 'name'=>'Long Ranau']);
        DB::table('villages')->insert(['id'=>44289, 'districts_id'=>3868, 'zipcode'=>'77555', 'name'=>'Long Titi']);
        DB::table('villages')->insert(['id'=>44290, 'districts_id'=>3868, 'zipcode'=>'77555', 'name'=>'Rian Tubu']);
        //Kecamatan Bahau Hulu Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3869, 'city_id'=>215, 'name'=>'Bahau Hulu']);
        DB::table('villages')->insert(['id'=>44291, 'districts_id'=>3869, 'zipcode'=>'77562', 'name'=>'Apau Ping Mading']);
        DB::table('villages')->insert(['id'=>44292, 'districts_id'=>3869, 'zipcode'=>'77562', 'name'=>'Long Alango']);
        DB::table('villages')->insert(['id'=>44293, 'districts_id'=>3869, 'zipcode'=>'77562', 'name'=>'Long Atua/long Kemuat']);
        DB::table('villages')->insert(['id'=>44294, 'districts_id'=>3869, 'zipcode'=>'77562', 'name'=>'Long Berini Mararian']);
        DB::table('villages')->insert(['id'=>44295, 'districts_id'=>3869, 'zipcode'=>'77562', 'name'=>'Long Tabulo/tebulo']);
        DB::table('villages')->insert(['id'=>44296, 'districts_id'=>3869, 'zipcode'=>'77562', 'name'=>'Long Uli']);
        //Kecamatan Pujungan Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3870, 'city_id'=>215, 'name'=>'Pujungan']);
        DB::table('villages')->insert(['id'=>44297, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Lame']);
        DB::table('villages')->insert(['id'=>44298, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Long Aran']);
        DB::table('villages')->insert(['id'=>44299, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Long Belaka Pitau']);
        DB::table('villages')->insert(['id'=>44300, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Long Bena']);
        DB::table('villages')->insert(['id'=>44301, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Long Jelet']);
        DB::table('villages')->insert(['id'=>44302, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Long Ketaman']);
        DB::table('villages')->insert(['id'=>44303, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Long Paliran']);
        DB::table('villages')->insert(['id'=>44304, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Long Pua']);
        DB::table('villages')->insert(['id'=>44305, 'districts_id'=>3870, 'zipcode'=>'77562', 'name'=>'Long Pujungan']);
        //Kecamatan Kayan Hilir Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3871, 'city_id'=>215, 'name'=>'Kayan Hilir']);
        DB::table('villages')->insert(['id'=>44306, 'districts_id'=>3871, 'zipcode'=>'77571', 'name'=>'Data Dian']);
        DB::table('villages')->insert(['id'=>44307, 'districts_id'=>3871, 'zipcode'=>'77571', 'name'=>'Long Metun (long Metun Ii)']);
        DB::table('villages')->insert(['id'=>44308, 'districts_id'=>3871, 'zipcode'=>'77571', 'name'=>'Long Pipa']);
        DB::table('villages')->insert(['id'=>44309, 'districts_id'=>3871, 'zipcode'=>'77571', 'name'=>'Metun (long Metun I)']);
        DB::table('villages')->insert(['id'=>44310, 'districts_id'=>3871, 'zipcode'=>'77571', 'name'=>'Sei/sungai Anai']);
        //Kecamatan Kayan Hulu Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3872, 'city_id'=>215, 'name'=>'Kayan Hulu']);
        DB::table('villages')->insert(['id'=>44311, 'districts_id'=>3872, 'zipcode'=>'77572', 'name'=>'Long Betaoh']);
        DB::table('villages')->insert(['id'=>44312, 'districts_id'=>3872, 'zipcode'=>'77572', 'name'=>'Long Nawang']);
        DB::table('villages')->insert(['id'=>44313, 'districts_id'=>3872, 'zipcode'=>'77572', 'name'=>'Long Payau']);
        DB::table('villages')->insert(['id'=>44314, 'districts_id'=>3872, 'zipcode'=>'77572', 'name'=>'Long Temunyat/temuyat']);
        DB::table('villages')->insert(['id'=>44315, 'districts_id'=>3872, 'zipcode'=>'77572', 'name'=>'Nawang Baru']);
        //Kecamatan Sungai Boh Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3873, 'city_id'=>215, 'name'=>'Sungai Boh']);
        DB::table('villages')->insert(['id'=>44316, 'districts_id'=>3873, 'zipcode'=>'77573', 'name'=>'Agung Baru']);
        DB::table('villages')->insert(['id'=>44317, 'districts_id'=>3873, 'zipcode'=>'77573', 'name'=>'Data Baru']);
        DB::table('villages')->insert(['id'=>44318, 'districts_id'=>3873, 'zipcode'=>'77573', 'name'=>'Dumu Mahak']);
        DB::table('villages')->insert(['id'=>44319, 'districts_id'=>3873, 'zipcode'=>'77573', 'name'=>'Long Lebusan']);
        DB::table('villages')->insert(['id'=>44320, 'districts_id'=>3873, 'zipcode'=>'77573', 'name'=>'Long Top']);
        DB::table('villages')->insert(['id'=>44321, 'districts_id'=>3873, 'zipcode'=>'77573', 'name'=>'Mahak Baru']);
        //Kecamatan Kayan Selatan Kab. Malinau Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3874, 'city_id'=>215, 'name'=>'Kayan Selatan']);
        DB::table('villages')->insert(['id'=>44322, 'districts_id'=>3874, 'zipcode'=>'77573', 'name'=>'Lidung Payau']);
        DB::table('villages')->insert(['id'=>44323, 'districts_id'=>3874, 'zipcode'=>'77573', 'name'=>'Long Ampung']);
        DB::table('villages')->insert(['id'=>44324, 'districts_id'=>3874, 'zipcode'=>'77573', 'name'=>'Long Uro']);
        DB::table('villages')->insert(['id'=>44325, 'districts_id'=>3874, 'zipcode'=>'77573', 'name'=>'Metulang']);
        DB::table('villages')->insert(['id'=>44326, 'districts_id'=>3874, 'zipcode'=>'77573', 'name'=>'Sungai Barang']);

        //Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('cities')->insert(['id'=>216, 'province_id'=>16, 'type'=>'regencies', 'name'=>'Bulungan (bulongan)']);
        //Kecamatan Tanjung Palas Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3875, 'city_id'=>216, 'name'=>'Tanjung Palas']);
        DB::table('villages')->insert(['id'=>44327, 'districts_id'=>3875, 'zipcode'=>'77211', 'name'=>'Antutan']);
        DB::table('villages')->insert(['id'=>44328, 'districts_id'=>3875, 'zipcode'=>'77211', 'name'=>'Gunung Putih']);
        DB::table('villages')->insert(['id'=>44329, 'districts_id'=>3875, 'zipcode'=>'77211', 'name'=>'Pejalin']);
        DB::table('villages')->insert(['id'=>44330, 'districts_id'=>3875, 'zipcode'=>'77211', 'name'=>'Tanjung Palas Ilir/hilir']);
        DB::table('villages')->insert(['id'=>44331, 'districts_id'=>3875, 'zipcode'=>'77214', 'name'=>'Karang Anyar']);
        DB::table('villages')->insert(['id'=>44332, 'districts_id'=>3875, 'zipcode'=>'77214', 'name'=>'Teras Baru']);
        DB::table('villages')->insert(['id'=>44333, 'districts_id'=>3875, 'zipcode'=>'77214', 'name'=>'Teras Nawang']);
        DB::table('villages')->insert(['id'=>44334, 'districts_id'=>3875, 'zipcode'=>'77215', 'name'=>'Tanjung Palas Ulu/hulu']);
        DB::table('villages')->insert(['id'=>44335, 'districts_id'=>3875, 'zipcode'=>'77216', 'name'=>'Tanjung Palas Tengah']);
        //Kecamatan Tanjung Selor Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3876, 'city_id'=>216, 'name'=>'Tanjung Selor']);
        DB::table('villages')->insert(['id'=>44336, 'districts_id'=>3876, 'zipcode'=>'77211', 'name'=>'Tanjung Selor Ulu/hulu']);
        DB::table('villages')->insert(['id'=>44337, 'districts_id'=>3876, 'zipcode'=>'77212', 'name'=>'Apung']);
        DB::table('villages')->insert(['id'=>44338, 'districts_id'=>3876, 'zipcode'=>'77212', 'name'=>'Bumi Rahayu']);
        DB::table('villages')->insert(['id'=>44339, 'districts_id'=>3876, 'zipcode'=>'77212', 'name'=>'Gunung Sari']);
        DB::table('villages')->insert(['id'=>44340, 'districts_id'=>3876, 'zipcode'=>'77212', 'name'=>'Gunung Seriang']);
        DB::table('villages')->insert(['id'=>44341, 'districts_id'=>3876, 'zipcode'=>'77212', 'name'=>'Jelarai Selor']);
        DB::table('villages')->insert(['id'=>44342, 'districts_id'=>3876, 'zipcode'=>'77212', 'name'=>'Tanjung Selor Ilir/hilir']);
        DB::table('villages')->insert(['id'=>44343, 'districts_id'=>3876, 'zipcode'=>'77212', 'name'=>'Tanjung Selor Timur']);
        DB::table('villages')->insert(['id'=>44344, 'districts_id'=>3876, 'zipcode'=>'77212', 'name'=>'Tengkapak']);
        //Kecamatan Tanjung Palas Utara Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3877, 'city_id'=>216, 'name'=>'Tanjung Palas Utara']);
        DB::table('villages')->insert(['id'=>44345, 'districts_id'=>3877, 'zipcode'=>'77215', 'name'=>'Ardi Mulya']);
        DB::table('villages')->insert(['id'=>44346, 'districts_id'=>3877, 'zipcode'=>'77215', 'name'=>'Karang Agung']);
        DB::table('villages')->insert(['id'=>44347, 'districts_id'=>3877, 'zipcode'=>'77215', 'name'=>'Kelubir']);
        DB::table('villages')->insert(['id'=>44348, 'districts_id'=>3877, 'zipcode'=>'77215', 'name'=>'Panca Agung']);
        DB::table('villages')->insert(['id'=>44349, 'districts_id'=>3877, 'zipcode'=>'77215', 'name'=>'Pimping']);
        DB::table('villages')->insert(['id'=>44350, 'districts_id'=>3877, 'zipcode'=>'77215', 'name'=>'Ruhui Rahayu']);
        //Kecamatan Tanjung Palas Timur Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3878, 'city_id'=>216, 'name'=>'Tanjung Palas Timur']);
        DB::table('villages')->insert(['id'=>44351, 'districts_id'=>3878, 'zipcode'=>'77215', 'name'=>'Binai']);
        DB::table('villages')->insert(['id'=>44352, 'districts_id'=>3878, 'zipcode'=>'77215', 'name'=>'Mangkupadi']);
        DB::table('villages')->insert(['id'=>44353, 'districts_id'=>3878, 'zipcode'=>'77215', 'name'=>'Pura Sajau']);
        DB::table('villages')->insert(['id'=>44354, 'districts_id'=>3878, 'zipcode'=>'77215', 'name'=>'Sajau']);
        DB::table('villages')->insert(['id'=>44355, 'districts_id'=>3878, 'zipcode'=>'77215', 'name'=>'Sajau Timur']);
        DB::table('villages')->insert(['id'=>44356, 'districts_id'=>3878, 'zipcode'=>'77215', 'name'=>'Tanah Kuning']);
        DB::table('villages')->insert(['id'=>44357, 'districts_id'=>3878, 'zipcode'=>'77215', 'name'=>'Tanjung Agung']);
        DB::table('villages')->insert(['id'=>44358, 'districts_id'=>3878, 'zipcode'=>'77215', 'name'=>'Wono Mulyo']);
        //Kecamatan Tanjung Palas Tengah Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3879, 'city_id'=>216, 'name'=>'Tanjung Palas Tengah']);
        DB::table('villages')->insert(['id'=>44359, 'districts_id'=>3879, 'zipcode'=>'77216', 'name'=>'Salim Batu']);
        DB::table('villages')->insert(['id'=>44360, 'districts_id'=>3879, 'zipcode'=>'77216', 'name'=>'Silva Rahayu']);
        DB::table('villages')->insert(['id'=>44361, 'districts_id'=>3879, 'zipcode'=>'77216', 'name'=>'Tanjung Buka']);
        //Kecamatan Tanjung Palas Barat Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3880, 'city_id'=>216, 'name'=>'Tanjung Palas Barat']);
        DB::table('villages')->insert(['id'=>44362, 'districts_id'=>3880, 'zipcode'=>'77217', 'name'=>'Long Beluah']);
        DB::table('villages')->insert(['id'=>44363, 'districts_id'=>3880, 'zipcode'=>'77217', 'name'=>'Long Pari']);
        DB::table('villages')->insert(['id'=>44364, 'districts_id'=>3880, 'zipcode'=>'77217', 'name'=>'Long Sam']);
        DB::table('villages')->insert(['id'=>44365, 'districts_id'=>3880, 'zipcode'=>'77217', 'name'=>'Mara Hilir']);
        DB::table('villages')->insert(['id'=>44366, 'districts_id'=>3880, 'zipcode'=>'77217', 'name'=>'Mara Satu']);
        //Kecamatan Peso Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3881, 'city_id'=>216, 'name'=>'Peso']);
        DB::table('villages')->insert(['id'=>44367, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Lepak Aru']);
        DB::table('villages')->insert(['id'=>44368, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Long Bia']);
        DB::table('villages')->insert(['id'=>44369, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Long Buang']);
        DB::table('villages')->insert(['id'=>44370, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Long Lasan']);
        DB::table('villages')->insert(['id'=>44371, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Long Leju']);
        DB::table('villages')->insert(['id'=>44372, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Long Lian']);
        DB::table('villages')->insert(['id'=>44373, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Long Peleban']);
        DB::table('villages')->insert(['id'=>44374, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Long Peso']);
        DB::table('villages')->insert(['id'=>44375, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Long Yiin/pelaah']);
        DB::table('villages')->insert(['id'=>44376, 'districts_id'=>3881, 'zipcode'=>'77261', 'name'=>'Muara Pengean']);
        //Kecamatan Peso Hilir/ilir Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3882, 'city_id'=>216, 'name'=>'Peso Hilir/ilir']);
        DB::table('villages')->insert(['id'=>44377, 'districts_id'=>3882, 'zipcode'=>'77261', 'name'=>'Long Bang']);
        DB::table('villages')->insert(['id'=>44378, 'districts_id'=>3882, 'zipcode'=>'77261', 'name'=>'Long Bang Hulu']);
        DB::table('villages')->insert(['id'=>44379, 'districts_id'=>3882, 'zipcode'=>'77261', 'name'=>'Long Lembu']);
        DB::table('villages')->insert(['id'=>44380, 'districts_id'=>3882, 'zipcode'=>'77261', 'name'=>'Long Telenjau']);
        DB::table('villages')->insert(['id'=>44381, 'districts_id'=>3882, 'zipcode'=>'77261', 'name'=>'Long Tungu']);
        DB::table('villages')->insert(['id'=>44382, 'districts_id'=>3882, 'zipcode'=>'77261', 'name'=>'Naha Aya']);
        //Kecamatan Sekatak Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3883, 'city_id'=>216, 'name'=>'Sekatak']);
        DB::table('villages')->insert(['id'=>44383, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Ambalat']);
        DB::table('villages')->insert(['id'=>44384, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Anjar Arip (anjararef)']);
        DB::table('villages')->insert(['id'=>44385, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Bambang']);
        DB::table('villages')->insert(['id'=>44386, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Bekiliu']);
        DB::table('villages')->insert(['id'=>44387, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Bunau']);
        DB::table('villages')->insert(['id'=>44388, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Kelincawan']);
        DB::table('villages')->insert(['id'=>44389, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Kelising (keliising)']);
        DB::table('villages')->insert(['id'=>44390, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Kelumbunan (kelembunan)']);
        DB::table('villages')->insert(['id'=>44391, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Kendari']);
        DB::table('villages')->insert(['id'=>44392, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Keriting']);
        DB::table('villages')->insert(['id'=>44393, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Liu Agu (liagu)']);
        DB::table('villages')->insert(['id'=>44394, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Maritam']);
        DB::table('villages')->insert(['id'=>44395, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Paru Abang']);
        DB::table('villages')->insert(['id'=>44396, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Pentian']);
        DB::table('villages')->insert(['id'=>44397, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Punan Dulau']);
        DB::table('villages')->insert(['id'=>44398, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Pungit']);
        DB::table('villages')->insert(['id'=>44399, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Sekatak Bengara']);
        DB::table('villages')->insert(['id'=>44400, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Sekatak Buji']);
        DB::table('villages')->insert(['id'=>44401, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Tenggiling']);
        DB::table('villages')->insert(['id'=>44402, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Terindak']);
        DB::table('villages')->insert(['id'=>44403, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Turung']);
        DB::table('villages')->insert(['id'=>44404, 'districts_id'=>3883, 'zipcode'=>'77263', 'name'=>'Ujang']);
        //Kecamatan Pulau Bunyu Kab. Bulungan (bulongan) Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3884, 'city_id'=>216, 'name'=>'Pulau Bunyu']);
        DB::table('villages')->insert(['id'=>44405, 'districts_id'=>3884, 'zipcode'=>'77281', 'name'=>'Pulau Bunyu Barat']);
        DB::table('villages')->insert(['id'=>44406, 'districts_id'=>3884, 'zipcode'=>'77281', 'name'=>'Pulau Bunyu Selatan']);
        DB::table('villages')->insert(['id'=>44407, 'districts_id'=>3884, 'zipcode'=>'77281', 'name'=>'Pulau Bunyu Timur']);

        //Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('cities')->insert(['id'=>217, 'province_id'=>16, 'type'=>'regencies', 'name'=>'Nunukan']);
        //Kecamatan Sembakung Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3885, 'city_id'=>217, 'name'=>'Sembakung']);
        DB::table('villages')->insert(['id'=>44408, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Atap']);
        DB::table('villages')->insert(['id'=>44409, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Binanun']);
        DB::table('villages')->insert(['id'=>44410, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Butas Bagu']);
        DB::table('villages')->insert(['id'=>44411, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Katul']);
        DB::table('villages')->insert(['id'=>44412, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Labuk']);
        DB::table('villages')->insert(['id'=>44413, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Liuk Bulu']);
        DB::table('villages')->insert(['id'=>44414, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Lubakan']);
        DB::table('villages')->insert(['id'=>44415, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Lubok Buat']);
        DB::table('villages')->insert(['id'=>44416, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Mambulu']);
        DB::table('villages')->insert(['id'=>44417, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Manuk Bungkul']);
        DB::table('villages')->insert(['id'=>44418, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Pagaluyon']);
        DB::table('villages')->insert(['id'=>44419, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Pagar']);
        DB::table('villages')->insert(['id'=>44420, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Pelaju (plaju)']);
        DB::table('villages')->insert(['id'=>44421, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Pulau Keras']);
        DB::table('villages')->insert(['id'=>44422, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Sabuluan']);
        DB::table('villages')->insert(['id'=>44423, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Saduman']);
        DB::table('villages')->insert(['id'=>44424, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Tagul']);
        DB::table('villages')->insert(['id'=>44425, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Tepian']);
        DB::table('villages')->insert(['id'=>44426, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Tujung']);
        DB::table('villages')->insert(['id'=>44427, 'districts_id'=>3885, 'zipcode'=>'77453', 'name'=>'Tulang']);
        //Kecamatan Krayan Selatan Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3886, 'city_id'=>217, 'name'=>'Krayan Selatan']);
        DB::table('villages')->insert(['id'=>44428, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Ba Liku']);
        DB::table('villages')->insert(['id'=>44429, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Binuang (ba Binuang)']);
        DB::table('villages')->insert(['id'=>44430, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Liang Lunuk']);
        DB::table('villages')->insert(['id'=>44431, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Birar']);
        DB::table('villages')->insert(['id'=>44432, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Budung']);
        DB::table('villages')->insert(['id'=>44433, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Kelupan / Klupan']);
        DB::table('villages')->insert(['id'=>44434, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Mutan']);
        DB::table('villages')->insert(['id'=>44435, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Padi']);
        DB::table('villages')->insert(['id'=>44436, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Pasia']);
        DB::table('villages')->insert(['id'=>44437, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Pupung']);
        DB::table('villages')->insert(['id'=>44438, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Rian']);
        DB::table('villages')->insert(['id'=>44439, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Long Rungan']);
        DB::table('villages')->insert(['id'=>44440, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Amai']);
        DB::table('villages')->insert(['id'=>44441, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Dalan']);
        DB::table('villages')->insert(['id'=>44442, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Ibang']);
        DB::table('villages')->insert(['id'=>44443, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Kaber']);
        DB::table('villages')->insert(['id'=>44444, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Milau']);
        DB::table('villages')->insert(['id'=>44445, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Sing']);
        DB::table('villages')->insert(['id'=>44446, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Tera']);
        DB::table('villages')->insert(['id'=>44447, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Upan']);
        DB::table('villages')->insert(['id'=>44448, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Urang']);
        DB::table('villages')->insert(['id'=>44449, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Pa Yalau']);
        DB::table('villages')->insert(['id'=>44450, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Tang Badui']);
        DB::table('villages')->insert(['id'=>44451, 'districts_id'=>3886, 'zipcode'=>'77456', 'name'=>'Tang Paye']);
        //Kecamatan Krayan Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3887, 'city_id'=>217, 'name'=>'Krayan']);
        DB::table('villages')->insert(['id'=>44452, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Ba Sikor']);
        DB::table('villages')->insert(['id'=>44453, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Buduk Kinangan']);
        DB::table('villages')->insert(['id'=>44454, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Buduk Kubul']);
        DB::table('villages')->insert(['id'=>44455, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Buduk Tumu']);
        DB::table('villages')->insert(['id'=>44456, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Bungayan']);
        DB::table('villages')->insert(['id'=>44457, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Cinglat']);
        DB::table('villages')->insert(['id'=>44458, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>44459, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Lembada']);
        DB::table('villages')->insert(['id'=>44460, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Lembudud']);
        DB::table('villages')->insert(['id'=>44461, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Lepatar']);
        DB::table('villages')->insert(['id'=>44462, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Liang Alig']);
        DB::table('villages')->insert(['id'=>44463, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Liang Bua']);
        DB::table('villages')->insert(['id'=>44464, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Liang Butan']);
        DB::table('villages')->insert(['id'=>44465, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Liang Tuer']);
        DB::table('villages')->insert(['id'=>44466, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Liang Turan']);
        DB::table('villages')->insert(['id'=>44467, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Bawan']);
        DB::table('villages')->insert(['id'=>44468, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Berayang']);
        DB::table('villages')->insert(['id'=>44469, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Bia Dung']);
        DB::table('villages')->insert(['id'=>44470, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Kabid']);
        DB::table('villages')->insert(['id'=>44471, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Katung']);
        DB::table('villages')->insert(['id'=>44472, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Mangan']);
        DB::table('villages')->insert(['id'=>44473, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Matung']);
        DB::table('villages')->insert(['id'=>44474, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Nawang']);
        DB::table('villages')->insert(['id'=>44475, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Nuat']);
        DB::table('villages')->insert(['id'=>44476, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Puak']);
        DB::table('villages')->insert(['id'=>44477, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Rupan']);
        DB::table('villages')->insert(['id'=>44478, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Sepayang']);
        DB::table('villages')->insert(['id'=>44479, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Tenem']);
        DB::table('villages')->insert(['id'=>44480, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Tugul']);
        DB::table('villages')->insert(['id'=>44481, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Long Umung']);
        DB::table('villages')->insert(['id'=>44482, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Ma Libu']);
        DB::table('villages')->insert(['id'=>44483, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Api']);
        DB::table('villages')->insert(['id'=>44484, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Betung']);
        DB::table('villages')->insert(['id'=>44485, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Butal']);
        DB::table('villages')->insert(['id'=>44486, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Delung']);
        DB::table('villages')->insert(['id'=>44487, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Inan']);
        DB::table('villages')->insert(['id'=>44488, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Kebuan']);
        DB::table('villages')->insert(['id'=>44489, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Kemut']);
        DB::table('villages')->insert(['id'=>44490, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Kidang']);
        DB::table('villages')->insert(['id'=>44491, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Lidung']);
        DB::table('villages')->insert(['id'=>44492, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Lutut']);
        DB::table('villages')->insert(['id'=>44493, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Malade (pa Melade)']);
        DB::table('villages')->insert(['id'=>44494, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Matung']);
        DB::table('villages')->insert(['id'=>44495, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Mering']);
        DB::table('villages')->insert(['id'=>44496, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Mulak']);
        DB::table('villages')->insert(['id'=>44497, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Nado']);
        DB::table('villages')->insert(['id'=>44498, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Padi']);
        DB::table('villages')->insert(['id'=>44499, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Pala']);
        DB::table('villages')->insert(['id'=>44500, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Pani']);
        DB::table('villages')->insert(['id'=>44501, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Pawan']);
        DB::table('villages')->insert(['id'=>44502, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Payak']);
        DB::table('villages')->insert(['id'=>44503, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Pirit']);
        DB::table('villages')->insert(['id'=>44504, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Putuk']);
        DB::table('villages')->insert(['id'=>44505, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Rangeb (parangeb)']);
        DB::table('villages')->insert(['id'=>44506, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Raye']);
        DB::table('villages')->insert(['id'=>44507, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Rupai']);
        DB::table('villages')->insert(['id'=>44508, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Sire (pasire)']);
        DB::table('villages')->insert(['id'=>44509, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Terutun']);
        DB::table('villages')->insert(['id'=>44510, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Umung']);
        DB::table('villages')->insert(['id'=>44511, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Pa Urud']);
        DB::table('villages')->insert(['id'=>44512, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Sembudud']);
        DB::table('villages')->insert(['id'=>44513, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Sinar Baru']);
        DB::table('villages')->insert(['id'=>44514, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Wa Laya']);
        DB::table('villages')->insert(['id'=>44515, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Wa Yagung']);
        DB::table('villages')->insert(['id'=>44516, 'districts_id'=>3887, 'zipcode'=>'77456', 'name'=>'Wa Yanud']);
        //Kecamatan Lumbis Ogong Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3888, 'city_id'=>217, 'name'=>'Lumbis Ogong']);
        DB::table('villages')->insert(['id'=>44517, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Batung']);
        DB::table('villages')->insert(['id'=>44518, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Bokok']);
        DB::table('villages')->insert(['id'=>44519, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Bulu Laun Hilir']);
        DB::table('villages')->insert(['id'=>44520, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Bulu Laun Hulu']);
        DB::table('villages')->insert(['id'=>44521, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Bulu Luan Hulu']);
        DB::table('villages')->insert(['id'=>44522, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Bulu Mengelom']);
        DB::table('villages')->insert(['id'=>44523, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Duyan']);
        DB::table('villages')->insert(['id'=>44524, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Jukup']);
        DB::table('villages')->insert(['id'=>44525, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Kabungalor']);
        DB::table('villages')->insert(['id'=>44526, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Kalam Buku']);
        DB::table('villages')->insert(['id'=>44527, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Kalisun']);
        DB::table('villages')->insert(['id'=>44528, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Kuyo']);
        DB::table('villages')->insert(['id'=>44529, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Labang']);
        DB::table('villages')->insert(['id'=>44530, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Labuk']);
        DB::table('villages')->insert(['id'=>44531, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Lagas']);
        DB::table('villages')->insert(['id'=>44532, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Langgason']);
        DB::table('villages')->insert(['id'=>44533, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Lepaga']);
        DB::table('villages')->insert(['id'=>44534, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Limpakon']);
        DB::table('villages')->insert(['id'=>44535, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Linsayung']);
        DB::table('villages')->insert(['id'=>44536, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Long Bulu']);
        DB::table('villages')->insert(['id'=>44537, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Mamanis']);
        DB::table('villages')->insert(['id'=>44538, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Nan Sapan']);
        DB::table('villages')->insert(['id'=>44539, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Nantukidan']);
        DB::table('villages')->insert(['id'=>44540, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Ngawol']);
        DB::table('villages')->insert(['id'=>44541, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Paluan']);
        DB::table('villages')->insert(['id'=>44542, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Panas']);
        DB::table('villages')->insert(['id'=>44543, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Payang']);
        DB::table('villages')->insert(['id'=>44544, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Salan']);
        DB::table('villages')->insert(['id'=>44545, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Samunti']);
        DB::table('villages')->insert(['id'=>44546, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Sanal']);
        DB::table('villages')->insert(['id'=>44547, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Sedalit']);
        DB::table('villages')->insert(['id'=>44548, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Semata']);
        DB::table('villages')->insert(['id'=>44549, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Sibalu']);
        DB::table('villages')->insert(['id'=>44550, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Sinampala Dua']);
        DB::table('villages')->insert(['id'=>44551, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Sinampala Satu']);
        DB::table('villages')->insert(['id'=>44552, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Sumantipal']);
        DB::table('villages')->insert(['id'=>44553, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Sumentobol']);
        DB::table('villages')->insert(['id'=>44554, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Sungoi']);
        DB::table('villages')->insert(['id'=>44555, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Suyadon']);
        DB::table('villages')->insert(['id'=>44556, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tambalang Hilir']);
        DB::table('villages')->insert(['id'=>44557, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tambalang Ulu']);
        DB::table('villages')->insert(['id'=>44558, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tantalujuk']);
        DB::table('villages')->insert(['id'=>44559, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tantu Libing']);
        DB::table('villages')->insert(['id'=>44560, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tau Lumbis']);
        DB::table('villages')->insert(['id'=>44561, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tetagas']);
        DB::table('villages')->insert(['id'=>44562, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tubel Alung (ubel Alung)']);
        DB::table('villages')->insert(['id'=>44563, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tukulen (tukulon)']);
        DB::table('villages')->insert(['id'=>44564, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Tumatalas']);
        DB::table('villages')->insert(['id'=>44565, 'districts_id'=>3888, 'zipcode'=>'77457', 'name'=>'Ubel Sulok']);
        //Kecamatan Lumbis Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3889, 'city_id'=>217, 'name'=>'Lumbis']);
        DB::table('villages')->insert(['id'=>44566, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Bulan Bulan']);
        DB::table('villages')->insert(['id'=>44567, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Dabulon (dubulon)']);
        DB::table('villages')->insert(['id'=>44568, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Deralon']);
        DB::table('villages')->insert(['id'=>44569, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Kalampising']);
        DB::table('villages')->insert(['id'=>44570, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Liang']);
        DB::table('villages')->insert(['id'=>44571, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Libang']);
        DB::table('villages')->insert(['id'=>44572, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Likos']);
        DB::table('villages')->insert(['id'=>44573, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Lintong']);
        DB::table('villages')->insert(['id'=>44574, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Mansalong']);
        DB::table('villages')->insert(['id'=>44575, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Nainsid']);
        DB::table('villages')->insert(['id'=>44576, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Pa Lemumut']);
        DB::table('villages')->insert(['id'=>44577, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Pa Loo']);
        DB::table('villages')->insert(['id'=>44578, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Patal I (satu)']);
        DB::table('villages')->insert(['id'=>44579, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Patal Ii (dua)']);
        DB::table('villages')->insert(['id'=>44580, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Podong']);
        DB::table('villages')->insert(['id'=>44581, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Pulu Bulawan']);
        DB::table('villages')->insert(['id'=>44582, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Saludan']);
        DB::table('villages')->insert(['id'=>44583, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Sangkup']);
        DB::table('villages')->insert(['id'=>44584, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Sapuyan']);
        DB::table('villages')->insert(['id'=>44585, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Sasibu']);
        DB::table('villages')->insert(['id'=>44586, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Sedongon']);
        DB::table('villages')->insert(['id'=>44587, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Semalat']);
        DB::table('villages')->insert(['id'=>44588, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Siawang']);
        DB::table('villages')->insert(['id'=>44589, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Sumalumung']);
        DB::table('villages')->insert(['id'=>44590, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Taluan']);
        DB::table('villages')->insert(['id'=>44591, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Tanjung Hilir']);
        DB::table('villages')->insert(['id'=>44592, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Tanjung Hulu']);
        DB::table('villages')->insert(['id'=>44593, 'districts_id'=>3889, 'zipcode'=>'77457', 'name'=>'Tubus']);
        //Kecamatan Sebuku Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3890, 'city_id'=>217, 'name'=>'Sebuku']);
        DB::table('villages')->insert(['id'=>44594, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Apas']);
        DB::table('villages')->insert(['id'=>44595, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Bebanas']);
        DB::table('villages')->insert(['id'=>44596, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Harapan']);
        DB::table('villages')->insert(['id'=>44597, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Kekayap']);
        DB::table('villages')->insert(['id'=>44598, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Kunyit']);
        DB::table('villages')->insert(['id'=>44599, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Lulu']);
        DB::table('villages')->insert(['id'=>44600, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Melasu Baru']);
        DB::table('villages')->insert(['id'=>44601, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Pembeliangan']);
        DB::table('villages')->insert(['id'=>44602, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Sujau']);
        DB::table('villages')->insert(['id'=>44603, 'districts_id'=>3890, 'zipcode'=>'77482', 'name'=>'Tetaban']);
        //Kecamatan Nunukan Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3891, 'city_id'=>217, 'name'=>'Nunukan']);
        DB::table('villages')->insert(['id'=>44604, 'districts_id'=>3891, 'zipcode'=>'77482', 'name'=>'Binusan']);
        DB::table('villages')->insert(['id'=>44605, 'districts_id'=>3891, 'zipcode'=>'77482', 'name'=>'Nunukan Barat']);
        DB::table('villages')->insert(['id'=>44606, 'districts_id'=>3891, 'zipcode'=>'77482', 'name'=>'Nunukan Tengah']);
        DB::table('villages')->insert(['id'=>44607, 'districts_id'=>3891, 'zipcode'=>'77482', 'name'=>'Nunukan Timur']);
        DB::table('villages')->insert(['id'=>44608, 'districts_id'=>3891, 'zipcode'=>'77482', 'name'=>'Nunukan Utara']);
        //Kecamatan Tulin Onsoi Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3892, 'city_id'=>217, 'name'=>'Tulin Onsoi']);
        DB::table('villages')->insert(['id'=>44609, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Blatikon (belatikan)']);
        DB::table('villages')->insert(['id'=>44610, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Kulunsayan (kalun Sayan)']);
        DB::table('villages')->insert(['id'=>44611, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Naputi']);
        DB::table('villages')->insert(['id'=>44612, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Salang']);
        DB::table('villages')->insert(['id'=>44613, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Sebuku I (sanur)']);
        DB::table('villages')->insert(['id'=>44614, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Sebuku Ii (makmur)']);
        DB::table('villages')->insert(['id'=>44615, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Sekikilan']);
        DB::table('villages')->insert(['id'=>44616, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Semunad']);
        DB::table('villages')->insert(['id'=>44617, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Tau Baru']);
        DB::table('villages')->insert(['id'=>44618, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Tembalang']);
        DB::table('villages')->insert(['id'=>44619, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Tinampak I']);
        DB::table('villages')->insert(['id'=>44620, 'districts_id'=>3892, 'zipcode'=>'77482', 'name'=>'Tinampak Ii']);
        //Kecamatan Nunukan Selatan Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3893, 'city_id'=>217, 'name'=>'Nunukan Selatan']);
        DB::table('villages')->insert(['id'=>44621, 'districts_id'=>3893, 'zipcode'=>'77482', 'name'=>'Mansapa']);
        DB::table('villages')->insert(['id'=>44622, 'districts_id'=>3893, 'zipcode'=>'77482', 'name'=>'Nunukan Selatan']);
        DB::table('villages')->insert(['id'=>44623, 'districts_id'=>3893, 'zipcode'=>'77482', 'name'=>'Selisun']);
        DB::table('villages')->insert(['id'=>44624, 'districts_id'=>3893, 'zipcode'=>'77482', 'name'=>'Tanjung Harapan']);
        //Kecamatan Sei Menggaris Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3894, 'city_id'=>217, 'name'=>'Sei Menggaris']);
        DB::table('villages')->insert(['id'=>44625, 'districts_id'=>3894, 'zipcode'=>'77482', 'name'=>'Samaenre Semaja']);
        DB::table('villages')->insert(['id'=>44626, 'districts_id'=>3894, 'zipcode'=>'77482', 'name'=>'Sekaduyan Taka']);
        DB::table('villages')->insert(['id'=>44627, 'districts_id'=>3894, 'zipcode'=>'77482', 'name'=>'Srinanti']);
        DB::table('villages')->insert(['id'=>44628, 'districts_id'=>3894, 'zipcode'=>'77482', 'name'=>'Tabur Lestari']);
        //Kecamatan Sebatik Tengah Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3895, 'city_id'=>217, 'name'=>'Sebatik Tengah']);
        DB::table('villages')->insert(['id'=>44629, 'districts_id'=>3895, 'zipcode'=>'77483', 'name'=>'Aji Kuning']);
        DB::table('villages')->insert(['id'=>44630, 'districts_id'=>3895, 'zipcode'=>'77483', 'name'=>'Bukit Harapan']);
        DB::table('villages')->insert(['id'=>44631, 'districts_id'=>3895, 'zipcode'=>'77483', 'name'=>'Maspul']);
        DB::table('villages')->insert(['id'=>44632, 'districts_id'=>3895, 'zipcode'=>'77483', 'name'=>'Sei Limau']);
        //Kecamatan Sebatik Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3896, 'city_id'=>217, 'name'=>'Sebatik']);
        DB::table('villages')->insert(['id'=>44633, 'districts_id'=>3896, 'zipcode'=>'77483', 'name'=>'Balansiku']);
        DB::table('villages')->insert(['id'=>44634, 'districts_id'=>3896, 'zipcode'=>'77483', 'name'=>'Padaidi']);
        DB::table('villages')->insert(['id'=>44635, 'districts_id'=>3896, 'zipcode'=>'77483', 'name'=>'Sungai Manurung']);
        DB::table('villages')->insert(['id'=>44636, 'districts_id'=>3896, 'zipcode'=>'77483', 'name'=>'Tanjung Karang']);
        //Kecamatan Sebatik Barat Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3897, 'city_id'=>217, 'name'=>'Sebatik Barat']);
        DB::table('villages')->insert(['id'=>44637, 'districts_id'=>3897, 'zipcode'=>'77483', 'name'=>'Bambangan']);
        DB::table('villages')->insert(['id'=>44638, 'districts_id'=>3897, 'zipcode'=>'77483', 'name'=>'Binalawan']);
        DB::table('villages')->insert(['id'=>44639, 'districts_id'=>3897, 'zipcode'=>'77483', 'name'=>'Liang Bunyu']);
        DB::table('villages')->insert(['id'=>44640, 'districts_id'=>3897, 'zipcode'=>'77483', 'name'=>'Setabu']);
        //Kecamatan Sebatik Timur Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3898, 'city_id'=>217, 'name'=>'Sebatik Timur']);
        DB::table('villages')->insert(['id'=>44641, 'districts_id'=>3898, 'zipcode'=>'77483', 'name'=>'Bukit Aru Indah']);
        DB::table('villages')->insert(['id'=>44642, 'districts_id'=>3898, 'zipcode'=>'77483', 'name'=>'Sei/sungai Nyamuk']);
        DB::table('villages')->insert(['id'=>44643, 'districts_id'=>3898, 'zipcode'=>'77483', 'name'=>'Tanjung Aru']);
        DB::table('villages')->insert(['id'=>44644, 'districts_id'=>3898, 'zipcode'=>'77483', 'name'=>'Tanjung Harapan']);
        //Kecamatan Sebatik Utara Kab. Nunukan Provinsi Kalimantan Utara
        DB::table('districts')->insert(['id'=>3899, 'city_id'=>217, 'name'=>'Sebatik Utara']);
        DB::table('villages')->insert(['id'=>44645, 'districts_id'=>3899, 'zipcode'=>'77483', 'name'=>'Lapri']);
        DB::table('villages')->insert(['id'=>44646, 'districts_id'=>3899, 'zipcode'=>'77483', 'name'=>'Seberang']);
        DB::table('villages')->insert(['id'=>44647, 'districts_id'=>3899, 'zipcode'=>'77483', 'name'=>'Sei/sungai Pancang']);
    }
}
