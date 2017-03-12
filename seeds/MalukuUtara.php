<?php

use Illuminate\Database\Seeder;

class MalukuUtara extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>20, 'name'=>'Maluku Utara']);

        //Kota Ternate Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>251, 'province_id'=>20, 'type'=>'city', 'name'=>'Ternate']);
        //Kecamatan Ternate Tengah (kota) Kota Ternate Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4308, 'city_id'=>251, 'name'=>'Ternate Tengah (kota)']);
        DB::table('villages')->insert(['id'=>48812, 'districts_id'=>4308, 'zipcode'=>'97711', 'name'=>'Maliaro']);
        DB::table('villages')->insert(['id'=>48813, 'districts_id'=>4308, 'zipcode'=>'97711', 'name'=>'Marikurubu']);
        DB::table('villages')->insert(['id'=>48814, 'districts_id'=>4308, 'zipcode'=>'97712', 'name'=>'Kampung Pisang']);
        DB::table('villages')->insert(['id'=>48815, 'districts_id'=>4308, 'zipcode'=>'97712', 'name'=>'Stadion']);
        DB::table('villages')->insert(['id'=>48816, 'districts_id'=>4308, 'zipcode'=>'97713', 'name'=>'Muhajirin']);
        DB::table('villages')->insert(['id'=>48817, 'districts_id'=>4308, 'zipcode'=>'97713', 'name'=>'Tanah Raja']);
        DB::table('villages')->insert(['id'=>48818, 'districts_id'=>4308, 'zipcode'=>'97714', 'name'=>'Takoma']);
        DB::table('villages')->insert(['id'=>48819, 'districts_id'=>4308, 'zipcode'=>'97721', 'name'=>'Gamalama']);
        DB::table('villages')->insert(['id'=>48820, 'districts_id'=>4308, 'zipcode'=>'97722', 'name'=>'Kalumpang']);
        DB::table('villages')->insert(['id'=>48821, 'districts_id'=>4308, 'zipcode'=>'97722', 'name'=>'Santiong']);
        DB::table('villages')->insert(['id'=>48822, 'districts_id'=>4308, 'zipcode'=>'97723', 'name'=>'Moya']);
        DB::table('villages')->insert(['id'=>48823, 'districts_id'=>4308, 'zipcode'=>'97724', 'name'=>'Makasar Barat']);
        DB::table('villages')->insert(['id'=>48824, 'districts_id'=>4308, 'zipcode'=>'97724', 'name'=>'Makasar Timur']);
        DB::table('villages')->insert(['id'=>48825, 'districts_id'=>4308, 'zipcode'=>'97751', 'name'=>'Kota Baru']);
        DB::table('villages')->insert(['id'=>48826, 'districts_id'=>4308, 'zipcode'=>'97751', 'name'=>'Salahuddin']);
        //Kecamatan Ternate Selatan (kota) Kota Ternate Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4309, 'city_id'=>251, 'name'=>'Ternate Selatan (kota)']);
        DB::table('villages')->insert(['id'=>48827, 'districts_id'=>4309, 'zipcode'=>'97713', 'name'=>'Bastiong Karance']);
        DB::table('villages')->insert(['id'=>48828, 'districts_id'=>4309, 'zipcode'=>'97713', 'name'=>'Jati Perumnas']);
        DB::table('villages')->insert(['id'=>48829, 'districts_id'=>4309, 'zipcode'=>'97713', 'name'=>'Mangga Dua Utara']);
        DB::table('villages')->insert(['id'=>48830, 'districts_id'=>4309, 'zipcode'=>'97713', 'name'=>'Ngade']);
        DB::table('villages')->insert(['id'=>48831, 'districts_id'=>4309, 'zipcode'=>'97713', 'name'=>'Tanah Tinggi Barat']);
        DB::table('villages')->insert(['id'=>48832, 'districts_id'=>4309, 'zipcode'=>'97713', 'name'=>'Tobona (tabona)']);
        DB::table('villages')->insert(['id'=>48833, 'districts_id'=>4309, 'zipcode'=>'97715', 'name'=>'Tanah Tinggi']);
        DB::table('villages')->insert(['id'=>48834, 'districts_id'=>4309, 'zipcode'=>'97715', 'name'=>'Toboko']);
        DB::table('villages')->insert(['id'=>48835, 'districts_id'=>4309, 'zipcode'=>'97716', 'name'=>'Bastiong Talangame']);
        DB::table('villages')->insert(['id'=>48836, 'districts_id'=>4309, 'zipcode'=>'97716', 'name'=>'Jati']);
        DB::table('villages')->insert(['id'=>48837, 'districts_id'=>4309, 'zipcode'=>'97717', 'name'=>'Ubo-ubo']);
        DB::table('villages')->insert(['id'=>48838, 'districts_id'=>4309, 'zipcode'=>'97718', 'name'=>'Fitu']);
        DB::table('villages')->insert(['id'=>48839, 'districts_id'=>4309, 'zipcode'=>'97718', 'name'=>'Kalumata']);
        DB::table('villages')->insert(['id'=>48840, 'districts_id'=>4309, 'zipcode'=>'97719', 'name'=>'Gambesi']);
        DB::table('villages')->insert(['id'=>48841, 'districts_id'=>4309, 'zipcode'=>'97719', 'name'=>'Sasa']);
        DB::table('villages')->insert(['id'=>48842, 'districts_id'=>4309, 'zipcode'=>'97751', 'name'=>'Kayu Merah']);
        DB::table('villages')->insert(['id'=>48843, 'districts_id'=>4309, 'zipcode'=>'97751', 'name'=>'Mangga Dua']);
        //Kecamatan Ternate Utara (kota) Kota Ternate Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4310, 'city_id'=>251, 'name'=>'Ternate Utara (kota)']);
        DB::table('villages')->insert(['id'=>48844, 'districts_id'=>4310, 'zipcode'=>'97723', 'name'=>'Soa Sio']);
        DB::table('villages')->insert(['id'=>48845, 'districts_id'=>4310, 'zipcode'=>'97725', 'name'=>'Salero']);
        DB::table('villages')->insert(['id'=>48846, 'districts_id'=>4310, 'zipcode'=>'97725', 'name'=>'Soa']);
        DB::table('villages')->insert(['id'=>48847, 'districts_id'=>4310, 'zipcode'=>'97726', 'name'=>'Kasturian']);
        DB::table('villages')->insert(['id'=>48848, 'districts_id'=>4310, 'zipcode'=>'97726', 'name'=>'Toboleu']);
        DB::table('villages')->insert(['id'=>48849, 'districts_id'=>4310, 'zipcode'=>'97727', 'name'=>'Dufa Dufa']);
        DB::table('villages')->insert(['id'=>48850, 'districts_id'=>4310, 'zipcode'=>'97727', 'name'=>'Sangaji']);
        DB::table('villages')->insert(['id'=>48851, 'districts_id'=>4310, 'zipcode'=>'97728', 'name'=>'Tabam']);
        DB::table('villages')->insert(['id'=>48852, 'districts_id'=>4310, 'zipcode'=>'97728', 'name'=>'Tafure']);
        DB::table('villages')->insert(['id'=>48853, 'districts_id'=>4310, 'zipcode'=>'97729', 'name'=>'Sango']);
        DB::table('villages')->insert(['id'=>48854, 'districts_id'=>4310, 'zipcode'=>'97751', 'name'=>'Akehuda']);
        DB::table('villages')->insert(['id'=>48855, 'districts_id'=>4310, 'zipcode'=>'97751', 'name'=>'Sangaji Utara']);
        DB::table('villages')->insert(['id'=>48856, 'districts_id'=>4310, 'zipcode'=>'97751', 'name'=>'Tarau']);
        DB::table('villages')->insert(['id'=>48857, 'districts_id'=>4310, 'zipcode'=>'97751', 'name'=>'Tubo']);
        //Kecamatan Pulau Ternate Kota Ternate Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4311, 'city_id'=>251, 'name'=>'Pulau Ternate']);
        DB::table('villages')->insert(['id'=>48858, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Afe Taduma']);
        DB::table('villages')->insert(['id'=>48859, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Bula']);
        DB::table('villages')->insert(['id'=>48860, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Dorpedu']);
        DB::table('villages')->insert(['id'=>48861, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Foramadiahi']);
        DB::table('villages')->insert(['id'=>48862, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Jambula']);
        DB::table('villages')->insert(['id'=>48863, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Kastela']);
        DB::table('villages')->insert(['id'=>48864, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Kulaba']);
        DB::table('villages')->insert(['id'=>48865, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Loto']);
        DB::table('villages')->insert(['id'=>48866, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Rua']);
        DB::table('villages')->insert(['id'=>48867, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Sulamadaha']);
        DB::table('villages')->insert(['id'=>48868, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Takome']);
        DB::table('villages')->insert(['id'=>48869, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Tobololo']);
        DB::table('villages')->insert(['id'=>48870, 'districts_id'=>4311, 'zipcode'=>'97751', 'name'=>'Togafo']);
        //Kecamatan Pulau Batang Dua Kota Ternate Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4312, 'city_id'=>251, 'name'=>'Pulau Batang Dua']);
        DB::table('villages')->insert(['id'=>48871, 'districts_id'=>4312, 'zipcode'=>'97751', 'name'=>'Bido']);
        DB::table('villages')->insert(['id'=>48872, 'districts_id'=>4312, 'zipcode'=>'97751', 'name'=>'Lelewi']);
        DB::table('villages')->insert(['id'=>48873, 'districts_id'=>4312, 'zipcode'=>'97751', 'name'=>'Mayau']);
        DB::table('villages')->insert(['id'=>48874, 'districts_id'=>4312, 'zipcode'=>'97751', 'name'=>'Pantai Sagu']);
        DB::table('villages')->insert(['id'=>48875, 'districts_id'=>4312, 'zipcode'=>'97751', 'name'=>'Perum Bersatu']);
        DB::table('villages')->insert(['id'=>48876, 'districts_id'=>4312, 'zipcode'=>'97751', 'name'=>'Tifure']);
        //Kecamatan Pulau Hiri Kota Ternate Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4313, 'city_id'=>251, 'name'=>'Pulau Hiri']);
        DB::table('villages')->insert(['id'=>48877, 'districts_id'=>4313, 'zipcode'=>'97751', 'name'=>'Dorari Isa']);
        DB::table('villages')->insert(['id'=>48878, 'districts_id'=>4313, 'zipcode'=>'97751', 'name'=>'Faudu']);
        DB::table('villages')->insert(['id'=>48879, 'districts_id'=>4313, 'zipcode'=>'97751', 'name'=>'Mado']);
        DB::table('villages')->insert(['id'=>48880, 'districts_id'=>4313, 'zipcode'=>'97751', 'name'=>'Tafraka']);
        DB::table('villages')->insert(['id'=>48881, 'districts_id'=>4313, 'zipcode'=>'97751', 'name'=>'Togolobe']);
        DB::table('villages')->insert(['id'=>48882, 'districts_id'=>4313, 'zipcode'=>'97751', 'name'=>'Tomajiko']);
        //Kecamatan Moti (pulau Moti) Kota Ternate Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4314, 'city_id'=>251, 'name'=>'Moti (pulau Moti)']);
        DB::table('villages')->insert(['id'=>48883, 'districts_id'=>4314, 'zipcode'=>'97751', 'name'=>'Figur']);
        DB::table('villages')->insert(['id'=>48884, 'districts_id'=>4314, 'zipcode'=>'97751', 'name'=>'Moti Kota']);
        DB::table('villages')->insert(['id'=>48885, 'districts_id'=>4314, 'zipcode'=>'97751', 'name'=>'Tadenas']);
        DB::table('villages')->insert(['id'=>48886, 'districts_id'=>4314, 'zipcode'=>'97751', 'name'=>'Tafaga']);
        DB::table('villages')->insert(['id'=>48887, 'districts_id'=>4314, 'zipcode'=>'97751', 'name'=>'Tafamutu']);
        DB::table('villages')->insert(['id'=>48888, 'districts_id'=>4314, 'zipcode'=>'97751', 'name'=>'Takofi']);

        //Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>252, 'province_id'=>20, 'type'=>'regencies', 'name'=>'Halmahera Barat']);
        //Kecamatan Jailolo Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4315, 'city_id'=>252, 'name'=>'Jailolo']);
        DB::table('villages')->insert(['id'=>48889, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Acango']);
        DB::table('villages')->insert(['id'=>48890, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Akediri']);
        DB::table('villages')->insert(['id'=>48891, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Bobanehena']);
        DB::table('villages')->insert(['id'=>48892, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Bobo']);
        DB::table('villages')->insert(['id'=>48893, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Bobo Jiko']);
        DB::table('villages')->insert(['id'=>48894, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Buku Bualawa']);
        DB::table('villages')->insert(['id'=>48895, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Buku Maadu']);
        DB::table('villages')->insert(['id'=>48896, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Bukumatiti']);
        DB::table('villages')->insert(['id'=>48897, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Galala']);
        DB::table('villages')->insert(['id'=>48898, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Gamlamo']);
        DB::table('villages')->insert(['id'=>48899, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Gamtala']);
        DB::table('villages')->insert(['id'=>48900, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Guaemaadu (guaimaadu)']);
        DB::table('villages')->insert(['id'=>48901, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Guaeria']);
        DB::table('villages')->insert(['id'=>48902, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Gufasa']);
        DB::table('villages')->insert(['id'=>48903, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Hate Bicara']);
        DB::table('villages')->insert(['id'=>48904, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Hoku Hoku Kie (huku-huku Kie)']);
        DB::table('villages')->insert(['id'=>48905, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Idamdehe']);
        DB::table('villages')->insert(['id'=>48906, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Idamdehe Gamsungi']);
        DB::table('villages')->insert(['id'=>48907, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Jalan Baru']);
        DB::table('villages')->insert(['id'=>48908, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Kuripasai']);
        DB::table('villages')->insert(['id'=>48909, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Loloy (lolori)']);
        DB::table('villages')->insert(['id'=>48910, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Marmabati (marimbati)']);
        DB::table('villages')->insert(['id'=>48911, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Matui']);
        DB::table('villages')->insert(['id'=>48912, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Pateng']);
        DB::table('villages')->insert(['id'=>48913, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Payo']);
        DB::table('villages')->insert(['id'=>48914, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Pornity (porniti)']);
        DB::table('villages')->insert(['id'=>48915, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Saria']);
        DB::table('villages')->insert(['id'=>48916, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Soakonora']);
        DB::table('villages')->insert(['id'=>48917, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Taboso (tobosa/tabaso)']);
        DB::table('villages')->insert(['id'=>48918, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Tauro']);
        DB::table('villages')->insert(['id'=>48919, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Tedeng']);
        DB::table('villages')->insert(['id'=>48920, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Todowangi (todowongi)']);
        DB::table('villages')->insert(['id'=>48921, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Tuada']);
        DB::table('villages')->insert(['id'=>48922, 'districts_id'=>4315, 'zipcode'=>'97752', 'name'=>'Ulo']);
        //Kecamatan Jailolo Selatan Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4316, 'city_id'=>252, 'name'=>'Jailolo Selatan']);
        DB::table('villages')->insert(['id'=>48923, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Ake Jailolo']);
        DB::table('villages')->insert(['id'=>48924, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Akeara']);
        DB::table('villages')->insert(['id'=>48925, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Akelaha']);
        DB::table('villages')->insert(['id'=>48926, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Bangkit Rahmat']);
        DB::table('villages')->insert(['id'=>48927, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Biamaahi']);
        DB::table('villages')->insert(['id'=>48928, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Bobane Dano']);
        DB::table('villages')->insert(['id'=>48929, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Braha']);
        DB::table('villages')->insert(['id'=>48930, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Dodinga']);
        DB::table('villages')->insert(['id'=>48931, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Domato']);
        DB::table('villages')->insert(['id'=>48932, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Gamlenge']);
        DB::table('villages')->insert(['id'=>48933, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Hijrah']);
        DB::table('villages')->insert(['id'=>48934, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Moiso']);
        DB::table('villages')->insert(['id'=>48935, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Ratem']);
        DB::table('villages')->insert(['id'=>48936, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Rioribati']);
        DB::table('villages')->insert(['id'=>48937, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Sidangoli Dehe']);
        DB::table('villages')->insert(['id'=>48938, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Sidangoli Gam']);
        DB::table('villages')->insert(['id'=>48939, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>48940, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Taba Damai (db)']);
        DB::table('villages')->insert(['id'=>48941, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Tataleka']);
        DB::table('villages')->insert(['id'=>48942, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Tewe']);
        DB::table('villages')->insert(['id'=>48943, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Toniku']);
        DB::table('villages')->insert(['id'=>48944, 'districts_id'=>4316, 'zipcode'=>'97752', 'name'=>'Tuguraci']);
        //Kecamatan Sahu Timur Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4317, 'city_id'=>252, 'name'=>'Sahu Timur']);
        DB::table('villages')->insert(['id'=>48945, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Air Panas']);
        DB::table('villages')->insert(['id'=>48946, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Akelamo']);
        DB::table('villages')->insert(['id'=>48947, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Aketola']);
        DB::table('villages')->insert(['id'=>48948, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Awer']);
        DB::table('villages')->insert(['id'=>48949, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Campaka']);
        DB::table('villages')->insert(['id'=>48950, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Gamnyial']);
        DB::table('villages')->insert(['id'=>48951, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Gamomeng']);
        DB::table('villages')->insert(['id'=>48952, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Gamsungi']);
        DB::table('villages')->insert(['id'=>48953, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Goal']);
        DB::table('villages')->insert(['id'=>48954, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Golago Kusuma']);
        DB::table('villages')->insert(['id'=>48955, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Hoku Hoku Gam']);
        DB::table('villages')->insert(['id'=>48956, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Idamgamlamo']);
        DB::table('villages')->insert(['id'=>48957, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Loce']);
        DB::table('villages')->insert(['id'=>48958, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Ngaon']);
        DB::table('villages')->insert(['id'=>48959, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Sidodadi']);
        DB::table('villages')->insert(['id'=>48960, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Taba Campaka']);
        DB::table('villages')->insert(['id'=>48961, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Taraudu Kusu']);
        DB::table('villages')->insert(['id'=>48962, 'districts_id'=>4317, 'zipcode'=>'97753', 'name'=>'Tibobo']);
        //Kecamatan Sahu Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4318, 'city_id'=>252, 'name'=>'Sahu']);
        DB::table('villages')->insert(['id'=>48963, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Balisoan']);
        DB::table('villages')->insert(['id'=>48964, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Balisoan Utara']);
        DB::table('villages')->insert(['id'=>48965, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Dere']);
        DB::table('villages')->insert(['id'=>48966, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Golo']);
        DB::table('villages')->insert(['id'=>48967, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Goro Goro']);
        DB::table('villages')->insert(['id'=>48968, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Jaraoke']);
        DB::table('villages')->insert(['id'=>48969, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Lako Akediri']);
        DB::table('villages')->insert(['id'=>48970, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Lako Akelamo']);
        DB::table('villages')->insert(['id'=>48971, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Peot']);
        DB::table('villages')->insert(['id'=>48972, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Ropu Tengah Hulu']);
        DB::table('villages')->insert(['id'=>48973, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Sasur']);
        DB::table('villages')->insert(['id'=>48974, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Sasur Pantai']);
        DB::table('villages')->insert(['id'=>48975, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Susupu']);
        DB::table('villages')->insert(['id'=>48976, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Tacici']);
        DB::table('villages')->insert(['id'=>48977, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Tacim']);
        DB::table('villages')->insert(['id'=>48978, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Taraudu']);
        DB::table('villages')->insert(['id'=>48979, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Taruba']);
        DB::table('villages')->insert(['id'=>48980, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Todahe']);
        DB::table('villages')->insert(['id'=>48981, 'districts_id'=>4318, 'zipcode'=>'97753', 'name'=>'Worat Worat']);
        //Kecamatan Ibu Selatan Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4319, 'city_id'=>252, 'name'=>'Ibu Selatan']);
        DB::table('villages')->insert(['id'=>48982, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Adu']);
        DB::table('villages')->insert(['id'=>48983, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Baru']);
        DB::table('villages')->insert(['id'=>48984, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Bataka']);
        DB::table('villages')->insert(['id'=>48985, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Gamkonora']);
        DB::table('villages')->insert(['id'=>48986, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Gamsida']);
        DB::table('villages')->insert(['id'=>48987, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Gamsungi']);
        DB::table('villages')->insert(['id'=>48988, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Jere']);
        DB::table('villages')->insert(['id'=>48989, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Nanas']);
        DB::table('villages')->insert(['id'=>48990, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Ngalo Ngalo']);
        DB::table('villages')->insert(['id'=>48991, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Ngawet']);
        DB::table('villages')->insert(['id'=>48992, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Sarau']);
        DB::table('villages')->insert(['id'=>48993, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Talaga']);
        DB::table('villages')->insert(['id'=>48994, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Tobelos']);
        DB::table('villages')->insert(['id'=>48995, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Tobobol (tabobol)']);
        DB::table('villages')->insert(['id'=>48996, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Tosoa']);
        DB::table('villages')->insert(['id'=>48997, 'districts_id'=>4319, 'zipcode'=>'97754', 'name'=>'Tuguaer']);
        //Kecamatan Ibu Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4320, 'city_id'=>252, 'name'=>'Ibu']);
        DB::table('villages')->insert(['id'=>48998, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Ake Boso']);
        DB::table('villages')->insert(['id'=>48999, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Akesibu']);
        DB::table('villages')->insert(['id'=>49000, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Gam Ici']);
        DB::table('villages')->insert(['id'=>49001, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Gam Lamo']);
        DB::table('villages')->insert(['id'=>49002, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>49003, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Kie Lei (kie Ici)']);
        DB::table('villages')->insert(['id'=>49004, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Maritango']);
        DB::table('villages')->insert(['id'=>49005, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Naga']);
        DB::table('villages')->insert(['id'=>49006, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Soana Masungi']);
        DB::table('villages')->insert(['id'=>49007, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Tahafo']);
        DB::table('villages')->insert(['id'=>49008, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Tobaol']);
        DB::table('villages')->insert(['id'=>49009, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Togola Sanger/sangir']);
        DB::table('villages')->insert(['id'=>49010, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Togola Wayolo/wayoli']);
        DB::table('villages')->insert(['id'=>49011, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Tongute Goin']);
        DB::table('villages')->insert(['id'=>49012, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Tongute Sungi']);
        DB::table('villages')->insert(['id'=>49013, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Tongute Ternate']);
        DB::table('villages')->insert(['id'=>49014, 'districts_id'=>4320, 'zipcode'=>'97754', 'name'=>'Tongute Ternate Selatan']);
        //Kecamatan Ibu Utara Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4321, 'city_id'=>252, 'name'=>'Ibu Utara']);
        DB::table('villages')->insert(['id'=>49015, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Aru Jaya']);
        DB::table('villages')->insert(['id'=>49016, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Borona']);
        DB::table('villages')->insert(['id'=>49017, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Duono']);
        DB::table('villages')->insert(['id'=>49018, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Goin']);
        DB::table('villages')->insert(['id'=>49019, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Pasalulu']);
        DB::table('villages')->insert(['id'=>49020, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Podol']);
        DB::table('villages')->insert(['id'=>49021, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Sangaji Nyeku']);
        DB::table('villages')->insert(['id'=>49022, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Soasangaji']);
        DB::table('villages')->insert(['id'=>49023, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Tengowango (teongowango)']);
        DB::table('villages')->insert(['id'=>49024, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Todoke']);
        DB::table('villages')->insert(['id'=>49025, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Togoreba Sungi (tugureba Sungi)']);
        DB::table('villages')->insert(['id'=>49026, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Togoreba Tua']);
        DB::table('villages')->insert(['id'=>49027, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Togowo']);
        DB::table('villages')->insert(['id'=>49028, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Tolisaor']);
        DB::table('villages')->insert(['id'=>49029, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Tuguis']);
        DB::table('villages')->insert(['id'=>49030, 'districts_id'=>4321, 'zipcode'=>'97754', 'name'=>'Tukuoku']);
        //Kecamatan Loloda Kab. Halmahera Barat Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4322, 'city_id'=>252, 'name'=>'Loloda']);
        DB::table('villages')->insert(['id'=>49031, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Aruku']);
        DB::table('villages')->insert(['id'=>49032, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Baja']);
        DB::table('villages')->insert(['id'=>49033, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Bakun']);
        DB::table('villages')->insert(['id'=>49034, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Bakun Pantai']);
        DB::table('villages')->insert(['id'=>49035, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Bantol']);
        DB::table('villages')->insert(['id'=>49036, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Barataku']);
        DB::table('villages')->insert(['id'=>49037, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Bilote']);
        DB::table('villages')->insert(['id'=>49038, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Bosala']);
        DB::table('villages')->insert(['id'=>49039, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Buo']);
        DB::table('villages')->insert(['id'=>49040, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Gamkahe']);
        DB::table('villages')->insert(['id'=>49041, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Jangailulu']);
        DB::table('villages')->insert(['id'=>49042, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Jano']);
        DB::table('villages')->insert(['id'=>49043, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Kahatola']);
        DB::table('villages')->insert(['id'=>49044, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Kedi']);
        DB::table('villages')->insert(['id'=>49045, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Laba Besar']);
        DB::table('villages')->insert(['id'=>49046, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Laba Kecil']);
        DB::table('villages')->insert(['id'=>49047, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Linggua']);
        DB::table('villages')->insert(['id'=>49048, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Pumadada']);
        DB::table('villages')->insert(['id'=>49049, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Salu']);
        DB::table('villages')->insert(['id'=>49050, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Soa-sio']);
        DB::table('villages')->insert(['id'=>49051, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Tasye']);
        DB::table('villages')->insert(['id'=>49052, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Tolofuo']);
        DB::table('villages')->insert(['id'=>49053, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Tomodo']);
        DB::table('villages')->insert(['id'=>49054, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Tosomolo']);
        DB::table('villages')->insert(['id'=>49055, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Totala']);
        DB::table('villages')->insert(['id'=>49056, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Totala Jaya']);
        DB::table('villages')->insert(['id'=>49057, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Tuakara']);
        DB::table('villages')->insert(['id'=>49058, 'districts_id'=>4322, 'zipcode'=>'97755', 'name'=>'Tuguis']);

        //Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>253, 'province_id'=>20, 'type'=>'regencies', 'name'=>'Halmahera Utara']);
        //Kecamatan Kao Teluk Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4323, 'city_id'=>253, 'name'=>'Kao Teluk']);
        DB::table('villages')->insert(['id'=>49059, 'districts_id'=>4323, 'zipcode'=>'97752', 'name'=>'Akelamo Raya (akelamo Kao)']);
        DB::table('villages')->insert(['id'=>49060, 'districts_id'=>4323, 'zipcode'=>'97752', 'name'=>'Bobane Igo (bobaneigo)']);
        DB::table('villages')->insert(['id'=>49061, 'districts_id'=>4323, 'zipcode'=>'97752', 'name'=>'Dum Dum']);
        DB::table('villages')->insert(['id'=>49062, 'districts_id'=>4323, 'zipcode'=>'97752', 'name'=>'Gamsungi']);
        DB::table('villages')->insert(['id'=>49063, 'districts_id'=>4323, 'zipcode'=>'97752', 'name'=>'Pasir Putih']);
        DB::table('villages')->insert(['id'=>49064, 'districts_id'=>4323, 'zipcode'=>'97752', 'name'=>'Tetewang']);
        DB::table('villages')->insert(['id'=>49065, 'districts_id'=>4323, 'zipcode'=>'97764', 'name'=>'Barumadehe']);
        DB::table('villages')->insert(['id'=>49066, 'districts_id'=>4323, 'zipcode'=>'97764', 'name'=>'Kuntum Mekar']);
        DB::table('villages')->insert(['id'=>49067, 'districts_id'=>4323, 'zipcode'=>'97764', 'name'=>'Makaeling']);
        DB::table('villages')->insert(['id'=>49068, 'districts_id'=>4323, 'zipcode'=>'97764', 'name'=>'Tiowor']);
        DB::table('villages')->insert(['id'=>49069, 'districts_id'=>4323, 'zipcode'=>'97764', 'name'=>'Tobanoma']);
        //Kecamatan Loloda Utara Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4324, 'city_id'=>253, 'name'=>'Loloda Utara']);
        DB::table('villages')->insert(['id'=>49070, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Apulea']);
        DB::table('villages')->insert(['id'=>49071, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Asimiro (asmiro)']);
        DB::table('villages')->insert(['id'=>49072, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Dorume']);
        DB::table('villages')->insert(['id'=>49073, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Dotia (doitia)']);
        DB::table('villages')->insert(['id'=>49074, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Galao']);
        DB::table('villages')->insert(['id'=>49075, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Gisik']);
        DB::table('villages')->insert(['id'=>49076, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Igo']);
        DB::table('villages')->insert(['id'=>49077, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Kailupa']);
        DB::table('villages')->insert(['id'=>49078, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Kapa Kapa']);
        DB::table('villages')->insert(['id'=>49079, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Momojiu']);
        DB::table('villages')->insert(['id'=>49080, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Ngajam']);
        DB::table('villages')->insert(['id'=>49081, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Pocao']);
        DB::table('villages')->insert(['id'=>49082, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Podol']);
        DB::table('villages')->insert(['id'=>49083, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Posi Posi']);
        DB::table('villages')->insert(['id'=>49084, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Supu']);
        DB::table('villages')->insert(['id'=>49085, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Tate']);
        DB::table('villages')->insert(['id'=>49086, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Teru-teru']);
        DB::table('villages')->insert(['id'=>49087, 'districts_id'=>4324, 'zipcode'=>'97755', 'name'=>'Wori Moi']);
        //Kecamatan Loloda Kepulauan Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4325, 'city_id'=>253, 'name'=>'Loloda Kepulauan']);
        DB::table('villages')->insert(['id'=>49088, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Cera']);
        DB::table('villages')->insert(['id'=>49089, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Dagasuli']);
        DB::table('villages')->insert(['id'=>49090, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Dama']);
        DB::table('villages')->insert(['id'=>49091, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Dedeta']);
        DB::table('villages')->insert(['id'=>49092, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Dowonggila']);
        DB::table('villages')->insert(['id'=>49093, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Fitako']);
        DB::table('villages')->insert(['id'=>49094, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Jikolamo']);
        DB::table('villages')->insert(['id'=>49095, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Salube']);
        DB::table('villages')->insert(['id'=>49096, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Tobo Tobo']);
        DB::table('villages')->insert(['id'=>49097, 'districts_id'=>4325, 'zipcode'=>'97755', 'name'=>'Tuakara']);
        //Kecamatan Galela Selatan Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4326, 'city_id'=>253, 'name'=>'Galela Selatan']);
        DB::table('villages')->insert(['id'=>49098, 'districts_id'=>4326, 'zipcode'=>'97761', 'name'=>'Bale']);
        DB::table('villages')->insert(['id'=>49099, 'districts_id'=>4326, 'zipcode'=>'97761', 'name'=>'Igobula']);
        DB::table('villages')->insert(['id'=>49100, 'districts_id'=>4326, 'zipcode'=>'97761', 'name'=>'Ori']);
        DB::table('villages')->insert(['id'=>49101, 'districts_id'=>4326, 'zipcode'=>'97761', 'name'=>'Seki']);
        DB::table('villages')->insert(['id'=>49102, 'districts_id'=>4326, 'zipcode'=>'97761', 'name'=>'Soakonora']);
        DB::table('villages')->insert(['id'=>49103, 'districts_id'=>4326, 'zipcode'=>'97761', 'name'=>'Togawa']);
        DB::table('villages')->insert(['id'=>49104, 'districts_id'=>4326, 'zipcode'=>'97761', 'name'=>'Togawabesi']);
        //Kecamatan Galela Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4327, 'city_id'=>253, 'name'=>'Galela']);
        DB::table('villages')->insert(['id'=>49105, 'districts_id'=>4327, 'zipcode'=>'97761', 'name'=>'Barataku']);
        DB::table('villages')->insert(['id'=>49106, 'districts_id'=>4327, 'zipcode'=>'97761', 'name'=>'Mamuya']);
        DB::table('villages')->insert(['id'=>49107, 'districts_id'=>4327, 'zipcode'=>'97761', 'name'=>'Pune']);
        DB::table('villages')->insert(['id'=>49108, 'districts_id'=>4327, 'zipcode'=>'97761', 'name'=>'Simau']);
        DB::table('villages')->insert(['id'=>49109, 'districts_id'=>4327, 'zipcode'=>'97761', 'name'=>'Soa Sio']);
        DB::table('villages')->insert(['id'=>49110, 'districts_id'=>4327, 'zipcode'=>'97761', 'name'=>'Torawa']);
        DB::table('villages')->insert(['id'=>49111, 'districts_id'=>4327, 'zipcode'=>'97761', 'name'=>'Toweka']);
        //Kecamatan Galela Utara Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4328, 'city_id'=>253, 'name'=>'Galela Utara']);
        DB::table('villages')->insert(['id'=>49112, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Beringin Jaya']);
        DB::table('villages')->insert(['id'=>49113, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Bobi Singo']);
        DB::table('villages')->insert(['id'=>49114, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Dodowo']);
        DB::table('villages')->insert(['id'=>49115, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Jare (jere)']);
        DB::table('villages')->insert(['id'=>49116, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Jere Tua']);
        DB::table('villages')->insert(['id'=>49117, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Lalonga']);
        DB::table('villages')->insert(['id'=>49118, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Limau']);
        DB::table('villages')->insert(['id'=>49119, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Pelita']);
        DB::table('villages')->insert(['id'=>49120, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Salimuli']);
        DB::table('villages')->insert(['id'=>49121, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Saluta']);
        DB::table('villages')->insert(['id'=>49122, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Togasa']);
        DB::table('villages')->insert(['id'=>49123, 'districts_id'=>4328, 'zipcode'=>'97761', 'name'=>'Tutumaloleo']);
        //Kecamatan Galela Barat Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4329, 'city_id'=>253, 'name'=>'Galela Barat']);
        DB::table('villages')->insert(['id'=>49124, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Dokulamo']);
        DB::table('villages')->insert(['id'=>49125, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Duma']);
        DB::table('villages')->insert(['id'=>49126, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Gotalamo']);
        DB::table('villages')->insert(['id'=>49127, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Kira']);
        DB::table('villages')->insert(['id'=>49128, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Makete']);
        DB::table('villages')->insert(['id'=>49129, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Ngidiho']);
        DB::table('villages')->insert(['id'=>49130, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Roko']);
        DB::table('villages')->insert(['id'=>49131, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Samuda (samudra)']);
        DB::table('villages')->insert(['id'=>49132, 'districts_id'=>4329, 'zipcode'=>'97761', 'name'=>'Soatobaru']);
        //Kecamatan Tobelo Barat Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4330, 'city_id'=>253, 'name'=>'Tobelo Barat']);
        DB::table('villages')->insert(['id'=>49133, 'districts_id'=>4330, 'zipcode'=>'97762', 'name'=>'Birinoa']);
        DB::table('villages')->insert(['id'=>49134, 'districts_id'=>4330, 'zipcode'=>'97762', 'name'=>'Kusuri']);
        DB::table('villages')->insert(['id'=>49135, 'districts_id'=>4330, 'zipcode'=>'97762', 'name'=>'Sukamaju']);
        DB::table('villages')->insert(['id'=>49136, 'districts_id'=>4330, 'zipcode'=>'97762', 'name'=>'Togoliua']);
        DB::table('villages')->insert(['id'=>49137, 'districts_id'=>4330, 'zipcode'=>'97762', 'name'=>'Wangongira']);
        //Kecamatan Tobelo Selatan Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4331, 'city_id'=>253, 'name'=>'Tobelo Selatan']);
        DB::table('villages')->insert(['id'=>49138, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Efi Efi']);
        DB::table('villages')->insert(['id'=>49139, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Gamhoku']);
        DB::table('villages')->insert(['id'=>49140, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Kakara B']);
        DB::table('villages')->insert(['id'=>49141, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Kupa Kupa']);
        DB::table('villages')->insert(['id'=>49142, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Kupa Kupa Selatan']);
        DB::table('villages')->insert(['id'=>49143, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Leleoto']);
        DB::table('villages')->insert(['id'=>49144, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Lemah Ino']);
        DB::table('villages')->insert(['id'=>49145, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Paca']);
        DB::table('villages')->insert(['id'=>49146, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Pale']);
        DB::table('villages')->insert(['id'=>49147, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Talaga Paca']);
        DB::table('villages')->insert(['id'=>49148, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Tioua']);
        DB::table('villages')->insert(['id'=>49149, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Tobe']);
        DB::table('villages')->insert(['id'=>49150, 'districts_id'=>4331, 'zipcode'=>'97762', 'name'=>'Toma Halu']);
        //Kecamatan Tobelo Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4332, 'city_id'=>253, 'name'=>'Tobelo']);
        DB::table('villages')->insert(['id'=>49151, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Gamsungi']);
        DB::table('villages')->insert(['id'=>49152, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Gosoma']);
        DB::table('villages')->insert(['id'=>49153, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Gura']);
        DB::table('villages')->insert(['id'=>49154, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Kakara A']);
        DB::table('villages')->insert(['id'=>49155, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Kumo']);
        DB::table('villages')->insert(['id'=>49156, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Mkcm']);
        DB::table('villages')->insert(['id'=>49157, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Rawajaya']);
        DB::table('villages')->insert(['id'=>49158, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Tagalaya']);
        DB::table('villages')->insert(['id'=>49159, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Wari']);
        DB::table('villages')->insert(['id'=>49160, 'districts_id'=>4332, 'zipcode'=>'97762', 'name'=>'Wari Ino']);
        //Kecamatan Tobelo Timur Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4333, 'city_id'=>253, 'name'=>'Tobelo Timur']);
        DB::table('villages')->insert(['id'=>49161, 'districts_id'=>4333, 'zipcode'=>'97762', 'name'=>'Gonga']);
        DB::table('villages')->insert(['id'=>49162, 'districts_id'=>4333, 'zipcode'=>'97762', 'name'=>'Katana']);
        DB::table('villages')->insert(['id'=>49163, 'districts_id'=>4333, 'zipcode'=>'97762', 'name'=>'Mawea']);
        DB::table('villages')->insert(['id'=>49164, 'districts_id'=>4333, 'zipcode'=>'97762', 'name'=>'Meti']);
        DB::table('villages')->insert(['id'=>49165, 'districts_id'=>4333, 'zipcode'=>'97762', 'name'=>'Todokuiha']);
        DB::table('villages')->insert(['id'=>49166, 'districts_id'=>4333, 'zipcode'=>'97762', 'name'=>'Yaro']);
        //Kecamatan Tobelo Utara Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4334, 'city_id'=>253, 'name'=>'Tobelo Utara']);
        DB::table('villages')->insert(['id'=>49167, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Gorua']);
        DB::table('villages')->insert(['id'=>49168, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Gorua Selatan']);
        DB::table('villages')->insert(['id'=>49169, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Gorua Utara']);
        DB::table('villages')->insert(['id'=>49170, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Kokota Jaya (kokotua Jaya)']);
        DB::table('villages')->insert(['id'=>49171, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Luari']);
        DB::table('villages')->insert(['id'=>49172, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Popila Utara']);
        DB::table('villages')->insert(['id'=>49173, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Popilo']);
        DB::table('villages')->insert(['id'=>49174, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Ruko']);
        DB::table('villages')->insert(['id'=>49175, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Tolonua Selatan']);
        DB::table('villages')->insert(['id'=>49176, 'districts_id'=>4334, 'zipcode'=>'97762', 'name'=>'Tolonuo']);
        //Kecamatan Tobelo Tengah Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4335, 'city_id'=>253, 'name'=>'Tobelo Tengah']);
        DB::table('villages')->insert(['id'=>49177, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Kali Upa']);
        DB::table('villages')->insert(['id'=>49178, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Kalipitu']);
        DB::table('villages')->insert(['id'=>49179, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Lina Ino']);
        DB::table('villages')->insert(['id'=>49180, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Mahia (wosi/wosia Tengah)']);
        DB::table('villages')->insert(['id'=>49181, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Pitu']);
        DB::table('villages')->insert(['id'=>49182, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Tanjung Niara (wosi/wosia Selatan)']);
        DB::table('villages')->insert(['id'=>49183, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Upa']);
        DB::table('villages')->insert(['id'=>49184, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Wko']);
        DB::table('villages')->insert(['id'=>49185, 'districts_id'=>4335, 'zipcode'=>'97762', 'name'=>'Wosi (wosia)']);
        //Kecamatan Kao Barat Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4336, 'city_id'=>253, 'name'=>'Kao Barat']);
        DB::table('villages')->insert(['id'=>49186, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Bailengit']);
        DB::table('villages')->insert(['id'=>49187, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Beringin Agung']);
        DB::table('villages')->insert(['id'=>49188, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Gagaapok']);
        DB::table('villages')->insert(['id'=>49189, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Kai']);
        DB::table('villages')->insert(['id'=>49190, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Leleseng (lelesang)']);
        DB::table('villages')->insert(['id'=>49191, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Makarti']);
        DB::table('villages')->insert(['id'=>49192, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Margomolyo (margomoyo)']);
        DB::table('villages')->insert(['id'=>49193, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Momoda']);
        DB::table('villages')->insert(['id'=>49194, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Ngoali']);
        DB::table('villages')->insert(['id'=>49195, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Parseba']);
        DB::table('villages')->insert(['id'=>49196, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Pitago']);
        DB::table('villages')->insert(['id'=>49197, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Sangaji Jaya']);
        DB::table('villages')->insert(['id'=>49198, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Soa Hukum']);
        DB::table('villages')->insert(['id'=>49199, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Soamaetek']);
        DB::table('villages')->insert(['id'=>49200, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Takimo']);
        DB::table('villages')->insert(['id'=>49201, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Toboulamo']);
        DB::table('villages')->insert(['id'=>49202, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Tolabit']);
        DB::table('villages')->insert(['id'=>49203, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Toliwang']);
        DB::table('villages')->insert(['id'=>49204, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Torawat']);
        DB::table('villages')->insert(['id'=>49205, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Tuguis']);
        DB::table('villages')->insert(['id'=>49206, 'districts_id'=>4336, 'zipcode'=>'97764', 'name'=>'Wonosari']);
        //Kecamatan Malifut Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4337, 'city_id'=>253, 'name'=>'Malifut']);
        DB::table('villages')->insert(['id'=>49207, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Balisosang']);
        DB::table('villages')->insert(['id'=>49208, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Bobawa']);
        DB::table('villages')->insert(['id'=>49209, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Bukit Tinggi']);
        DB::table('villages')->insert(['id'=>49210, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Gayok']);
        DB::table('villages')->insert(['id'=>49211, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Mailoa']);
        DB::table('villages')->insert(['id'=>49212, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Malapa']);
        DB::table('villages')->insert(['id'=>49213, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Matsa']);
        DB::table('villages')->insert(['id'=>49214, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Ngofabobawa']);
        DB::table('villages')->insert(['id'=>49215, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Ngofagita']);
        DB::table('villages')->insert(['id'=>49216, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Ngofakiaha']);
        DB::table('villages')->insert(['id'=>49217, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Peleri']);
        DB::table('villages')->insert(['id'=>49218, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Sabaleh']);
        DB::table('villages')->insert(['id'=>49219, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Samsuma']);
        DB::table('villages')->insert(['id'=>49220, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Soma']);
        DB::table('villages')->insert(['id'=>49221, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Sosol']);
        DB::table('villages')->insert(['id'=>49222, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Tafasoho']);
        DB::table('villages')->insert(['id'=>49223, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Tagono']);
        DB::table('villages')->insert(['id'=>49224, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Tahane']);
        DB::table('villages')->insert(['id'=>49225, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Talapao']);
        DB::table('villages')->insert(['id'=>49226, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Terpadu']);
        DB::table('villages')->insert(['id'=>49227, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Tobobo']);
        DB::table('villages')->insert(['id'=>49228, 'districts_id'=>4337, 'zipcode'=>'97764', 'name'=>'Wangeotek (wangeotak)']);
        //Kecamatan Kao Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4338, 'city_id'=>253, 'name'=>'Kao']);
        DB::table('villages')->insert(['id'=>49229, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Biang']);
        DB::table('villages')->insert(['id'=>49230, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Goruang']);
        DB::table('villages')->insert(['id'=>49231, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Jati']);
        DB::table('villages')->insert(['id'=>49232, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Kao']);
        DB::table('villages')->insert(['id'=>49233, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Kukumutuk']);
        DB::table('villages')->insert(['id'=>49234, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Kusu']);
        DB::table('villages')->insert(['id'=>49235, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Kusu Lofra']);
        DB::table('villages')->insert(['id'=>49236, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Patang']);
        DB::table('villages')->insert(['id'=>49237, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Popon']);
        DB::table('villages')->insert(['id'=>49238, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Sasur']);
        DB::table('villages')->insert(['id'=>49239, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Soasangaji Dim Dim']);
        DB::table('villages')->insert(['id'=>49240, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Sumber Agung']);
        DB::table('villages')->insert(['id'=>49241, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Waringin Lamo']);
        DB::table('villages')->insert(['id'=>49242, 'districts_id'=>4338, 'zipcode'=>'97764', 'name'=>'Waringin Lelewi']);
        //Kecamatan Kao Utara Kab. Halmahera Utara Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4339, 'city_id'=>253, 'name'=>'Kao Utara']);
        DB::table('villages')->insert(['id'=>49243, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Bobale']);
        DB::table('villages')->insert(['id'=>49244, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Bori']);
        DB::table('villages')->insert(['id'=>49245, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Boulamo']);
        DB::table('villages')->insert(['id'=>49246, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Daru']);
        DB::table('villages')->insert(['id'=>49247, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Doro']);
        DB::table('villages')->insert(['id'=>49248, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Dowongimaiti']);
        DB::table('villages')->insert(['id'=>49249, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Gamlaha']);
        DB::table('villages')->insert(['id'=>49250, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Gulo']);
        DB::table('villages')->insert(['id'=>49251, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Pediwang (pidiwang)']);
        DB::table('villages')->insert(['id'=>49252, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Tunuo']);
        DB::table('villages')->insert(['id'=>49253, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Warudu']);
        DB::table('villages')->insert(['id'=>49254, 'districts_id'=>4339, 'zipcode'=>'97764', 'name'=>'Wateto']);

        //Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>254, 'province_id'=>20, 'type'=>'regencies', 'name'=>'Halmahera Selatan']);
        //Kecamatan Makian Barat (pulau Makian) Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4340, 'city_id'=>254, 'name'=>'Makian Barat (pulau Makian)']);
        DB::table('villages')->insert(['id'=>49255, 'districts_id'=>4340, 'zipcode'=>'97756', 'name'=>'Bobawa (bobawae)']);
        DB::table('villages')->insert(['id'=>49256, 'districts_id'=>4340, 'zipcode'=>'97756', 'name'=>'Malapat']);
        DB::table('villages')->insert(['id'=>49257, 'districts_id'=>4340, 'zipcode'=>'97756', 'name'=>'Mateketen (matekente)']);
        DB::table('villages')->insert(['id'=>49258, 'districts_id'=>4340, 'zipcode'=>'97756', 'name'=>'Ombawa']);
        DB::table('villages')->insert(['id'=>49259, 'districts_id'=>4340, 'zipcode'=>'97756', 'name'=>'Sabalei (sebelei)']);
        DB::table('villages')->insert(['id'=>49260, 'districts_id'=>4340, 'zipcode'=>'97756', 'name'=>'Talapao (talapaon)']);
        DB::table('villages')->insert(['id'=>49261, 'districts_id'=>4340, 'zipcode'=>'97756', 'name'=>'Tegono']);
        //Kecamatan Makian (pulau Makian) Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4341, 'city_id'=>254, 'name'=>'Makian (pulau Makian)']);
        DB::table('villages')->insert(['id'=>49262, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Dalam']);
        DB::table('villages')->insert(['id'=>49263, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Dauri (daiwori)']);
        DB::table('villages')->insert(['id'=>49264, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Gitang']);
        DB::table('villages')->insert(['id'=>49265, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Gorup']);
        DB::table('villages')->insert(['id'=>49266, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Gurua']);
        DB::table('villages')->insert(['id'=>49267, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Kiowor (kyowor)']);
        DB::table('villages')->insert(['id'=>49268, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Matentengen (matan Tengin)']);
        DB::table('villages')->insert(['id'=>49269, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Ploli (ploly)']);
        DB::table('villages')->insert(['id'=>49270, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Rabutdaiyo (rabutdaio)']);
        DB::table('villages')->insert(['id'=>49271, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Sangapati']);
        DB::table('villages')->insert(['id'=>49272, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Soma (suma)']);
        DB::table('villages')->insert(['id'=>49273, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Waigitang / Waigitan']);
        DB::table('villages')->insert(['id'=>49274, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Waikyon (kota)']);
        DB::table('villages')->insert(['id'=>49275, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Wailoa']);
        DB::table('villages')->insert(['id'=>49276, 'districts_id'=>4341, 'zipcode'=>'97756', 'name'=>'Walo']);
        //Kecamatan Kayoa Utara Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4342, 'city_id'=>254, 'name'=>'Kayoa Utara']);
        DB::table('villages')->insert(['id'=>49277, 'districts_id'=>4342, 'zipcode'=>'97781', 'name'=>'Ake Jailolo']);
        DB::table('villages')->insert(['id'=>49278, 'districts_id'=>4342, 'zipcode'=>'97781', 'name'=>'Gayap']);
        DB::table('villages')->insert(['id'=>49279, 'districts_id'=>4342, 'zipcode'=>'97781', 'name'=>'Laromabati (loromabati)']);
        DB::table('villages')->insert(['id'=>49280, 'districts_id'=>4342, 'zipcode'=>'97781', 'name'=>'Modayama']);
        DB::table('villages')->insert(['id'=>49281, 'districts_id'=>4342, 'zipcode'=>'97781', 'name'=>'Ngokomalako']);
        DB::table('villages')->insert(['id'=>49282, 'districts_id'=>4342, 'zipcode'=>'97781', 'name'=>'Wayasipang']);
        //Kecamatan Kayoa Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4343, 'city_id'=>254, 'name'=>'Kayoa']);
        DB::table('villages')->insert(['id'=>49283, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Bajo']);
        DB::table('villages')->insert(['id'=>49284, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Buli']);
        DB::table('villages')->insert(['id'=>49285, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Dorolamo']);
        DB::table('villages')->insert(['id'=>49286, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Gafi']);
        DB::table('villages')->insert(['id'=>49287, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Gunange']);
        DB::table('villages')->insert(['id'=>49288, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Guruapin']);
        DB::table('villages')->insert(['id'=>49289, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Karamat']);
        DB::table('villages')->insert(['id'=>49290, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Kida']);
        DB::table('villages')->insert(['id'=>49291, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Laigoma']);
        DB::table('villages')->insert(['id'=>49292, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Lelei']);
        DB::table('villages')->insert(['id'=>49293, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Ligua']);
        DB::table('villages')->insert(['id'=>49294, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Siko']);
        DB::table('villages')->insert(['id'=>49295, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Talimau']);
        DB::table('villages')->insert(['id'=>49296, 'districts_id'=>4343, 'zipcode'=>'97781', 'name'=>'Tawabi']);
        //Kecamatan Kayoa Barat Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4344, 'city_id'=>254, 'name'=>'Kayoa Barat']);
        DB::table('villages')->insert(['id'=>49297, 'districts_id'=>4344, 'zipcode'=>'97781', 'name'=>'Bokimiake']);
        DB::table('villages')->insert(['id'=>49298, 'districts_id'=>4344, 'zipcode'=>'97781', 'name'=>'Busua']);
        DB::table('villages')->insert(['id'=>49299, 'districts_id'=>4344, 'zipcode'=>'97781', 'name'=>'Fofao']);
        DB::table('villages')->insert(['id'=>49300, 'districts_id'=>4344, 'zipcode'=>'97781', 'name'=>'Hatejawa']);
        //Kecamatan Kayoa Selatan Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4345, 'city_id'=>254, 'name'=>'Kayoa Selatan']);
        DB::table('villages')->insert(['id'=>49301, 'districts_id'=>4345, 'zipcode'=>'97781', 'name'=>'Laluin']);
        DB::table('villages')->insert(['id'=>49302, 'districts_id'=>4345, 'zipcode'=>'97781', 'name'=>'Ngute Ngute']);
        DB::table('villages')->insert(['id'=>49303, 'districts_id'=>4345, 'zipcode'=>'97781', 'name'=>'Orimakurunga']);
        DB::table('villages')->insert(['id'=>49304, 'districts_id'=>4345, 'zipcode'=>'97781', 'name'=>'Pasir Putih']);
        DB::table('villages')->insert(['id'=>49305, 'districts_id'=>4345, 'zipcode'=>'97781', 'name'=>'Posi Posi']);
        DB::table('villages')->insert(['id'=>49306, 'districts_id'=>4345, 'zipcode'=>'97781', 'name'=>'Sagawele']);
        //Kecamatan Gane Barat Selatan Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4346, 'city_id'=>254, 'name'=>'Gane Barat Selatan']);
        DB::table('villages')->insert(['id'=>49307, 'districts_id'=>4346, 'zipcode'=>'97782', 'name'=>'Awis']);
        DB::table('villages')->insert(['id'=>49308, 'districts_id'=>4346, 'zipcode'=>'97782', 'name'=>'Dowora']);
        DB::table('villages')->insert(['id'=>49309, 'districts_id'=>4346, 'zipcode'=>'97782', 'name'=>'Gane Dalam']);
        DB::table('villages')->insert(['id'=>49310, 'districts_id'=>4346, 'zipcode'=>'97782', 'name'=>'Jibubu']);
        DB::table('villages')->insert(['id'=>49311, 'districts_id'=>4346, 'zipcode'=>'97782', 'name'=>'Pasi Palele']);
        DB::table('villages')->insert(['id'=>49312, 'districts_id'=>4346, 'zipcode'=>'97782', 'name'=>'Sekely']);
        DB::table('villages')->insert(['id'=>49313, 'districts_id'=>4346, 'zipcode'=>'97782', 'name'=>'Tawa']);
        DB::table('villages')->insert(['id'=>49314, 'districts_id'=>4346, 'zipcode'=>'97782', 'name'=>'Yamly']);
        //Kecamatan Gane Barat Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4347, 'city_id'=>254, 'name'=>'Gane Barat']);
        DB::table('villages')->insert(['id'=>49315, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Balitata']);
        DB::table('villages')->insert(['id'=>49316, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Bumi Rahmat']);
        DB::table('villages')->insert(['id'=>49317, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Cango']);
        DB::table('villages')->insert(['id'=>49318, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Doro']);
        DB::table('villages')->insert(['id'=>49319, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Koititi']);
        DB::table('villages')->insert(['id'=>49320, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Lemo Lemo']);
        DB::table('villages')->insert(['id'=>49321, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Oha']);
        DB::table('villages')->insert(['id'=>49322, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Papaceda']);
        DB::table('villages')->insert(['id'=>49323, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Saketa']);
        DB::table('villages')->insert(['id'=>49324, 'districts_id'=>4347, 'zipcode'=>'97782', 'name'=>'Tabamasa']);
        //Kecamatan Gane Barat Utara Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4348, 'city_id'=>254, 'name'=>'Gane Barat Utara']);
        DB::table('villages')->insert(['id'=>49325, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Batulak']);
        DB::table('villages')->insert(['id'=>49326, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Boso']);
        DB::table('villages')->insert(['id'=>49327, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Dolik']);
        DB::table('villages')->insert(['id'=>49328, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Fulai (jikolamo/fulay)']);
        DB::table('villages')->insert(['id'=>49329, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Gumirah (gumira)']);
        DB::table('villages')->insert(['id'=>49330, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Moloku']);
        DB::table('villages')->insert(['id'=>49331, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Nurjihat']);
        DB::table('villages')->insert(['id'=>49332, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Posi Posi']);
        DB::table('villages')->insert(['id'=>49333, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Samat']);
        DB::table('villages')->insert(['id'=>49334, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Samo']);
        DB::table('villages')->insert(['id'=>49335, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Suka Damai']);
        DB::table('villages')->insert(['id'=>49336, 'districts_id'=>4348, 'zipcode'=>'97782', 'name'=>'Tokaka']);
        //Kecamatan Kepulauan Joronga Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4349, 'city_id'=>254, 'name'=>'Kepulauan Joronga']);
        DB::table('villages')->insert(['id'=>49337, 'districts_id'=>4349, 'zipcode'=>'97782', 'name'=>'Gonone']);
        DB::table('villages')->insert(['id'=>49338, 'districts_id'=>4349, 'zipcode'=>'97782', 'name'=>'Kukupang']);
        DB::table('villages')->insert(['id'=>49339, 'districts_id'=>4349, 'zipcode'=>'97782', 'name'=>'Kurunga']);
        DB::table('villages')->insert(['id'=>49340, 'districts_id'=>4349, 'zipcode'=>'97782', 'name'=>'Liboba Hijrah']);
        DB::table('villages')->insert(['id'=>49341, 'districts_id'=>4349, 'zipcode'=>'97782', 'name'=>'Pulau Gala']);
        DB::table('villages')->insert(['id'=>49342, 'districts_id'=>4349, 'zipcode'=>'97782', 'name'=>'Tawabi']);
        DB::table('villages')->insert(['id'=>49343, 'districts_id'=>4349, 'zipcode'=>'97782', 'name'=>'Yomen']);
        //Kecamatan Gane Timur Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4350, 'city_id'=>254, 'name'=>'Gane Timur']);
        DB::table('villages')->insert(['id'=>49344, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Akelamo/fida']);
        DB::table('villages')->insert(['id'=>49345, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Foya']);
        DB::table('villages')->insert(['id'=>49346, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Foya Tobaru']);
        DB::table('villages')->insert(['id'=>49347, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Kebun Raja']);
        DB::table('villages')->insert(['id'=>49348, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Kotalou']);
        DB::table('villages')->insert(['id'=>49349, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Lalubi']);
        DB::table('villages')->insert(['id'=>49350, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Maffa']);
        DB::table('villages')->insert(['id'=>49351, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Sakita (saketa/botonam)']);
        DB::table('villages')->insert(['id'=>49352, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Sumber Makmur']);
        DB::table('villages')->insert(['id'=>49353, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Tanjung Jere']);
        DB::table('villages')->insert(['id'=>49354, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Tobaru']);
        DB::table('villages')->insert(['id'=>49355, 'districts_id'=>4350, 'zipcode'=>'97783', 'name'=>'Wosi']);
        //Kecamatan Gane Timur Tengah Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4351, 'city_id'=>254, 'name'=>'Gane Timur Tengah']);
        DB::table('villages')->insert(['id'=>49356, 'districts_id'=>4351, 'zipcode'=>'97783', 'name'=>'Bisui']);
        DB::table('villages')->insert(['id'=>49357, 'districts_id'=>4351, 'zipcode'=>'97783', 'name'=>'Lelewi']);
        DB::table('villages')->insert(['id'=>49358, 'districts_id'=>4351, 'zipcode'=>'97783', 'name'=>'Luim']);
        DB::table('villages')->insert(['id'=>49359, 'districts_id'=>4351, 'zipcode'=>'97783', 'name'=>'Matuting']);
        DB::table('villages')->insert(['id'=>49360, 'districts_id'=>4351, 'zipcode'=>'97783', 'name'=>'Matuting Tanjung']);
        DB::table('villages')->insert(['id'=>49361, 'districts_id'=>4351, 'zipcode'=>'97783', 'name'=>'Tabahidayah']);
        DB::table('villages')->insert(['id'=>49362, 'districts_id'=>4351, 'zipcode'=>'97783', 'name'=>'Tabahijrah']);
        DB::table('villages')->insert(['id'=>49363, 'districts_id'=>4351, 'zipcode'=>'97783', 'name'=>'Tagea']);
        //Kecamatan Gane Timur Selatan Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4352, 'city_id'=>254, 'name'=>'Gane Timur Selatan']);
        DB::table('villages')->insert(['id'=>49364, 'districts_id'=>4352, 'zipcode'=>'97783', 'name'=>'Gaimu']);
        DB::table('villages')->insert(['id'=>49365, 'districts_id'=>4352, 'zipcode'=>'97783', 'name'=>'Gane Luar']);
        DB::table('villages')->insert(['id'=>49366, 'districts_id'=>4352, 'zipcode'=>'97783', 'name'=>'Kuwo']);
        DB::table('villages')->insert(['id'=>49367, 'districts_id'=>4352, 'zipcode'=>'97783', 'name'=>'Ranga Ranga']);
        DB::table('villages')->insert(['id'=>49368, 'districts_id'=>4352, 'zipcode'=>'97783', 'name'=>'Sawat']);
        //Kecamatan Mandioli Utara Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4353, 'city_id'=>254, 'name'=>'Mandioli Utara']);
        DB::table('villages')->insert(['id'=>49369, 'districts_id'=>4353, 'zipcode'=>'97791', 'name'=>'Akedabo']);
        DB::table('villages')->insert(['id'=>49370, 'districts_id'=>4353, 'zipcode'=>'97791', 'name'=>'Indong']);
        DB::table('villages')->insert(['id'=>49371, 'districts_id'=>4353, 'zipcode'=>'97791', 'name'=>'Loleongusu']);
        DB::table('villages')->insert(['id'=>49372, 'districts_id'=>4353, 'zipcode'=>'97791', 'name'=>'Pelita (pelita Jaya)']);
        DB::table('villages')->insert(['id'=>49373, 'districts_id'=>4353, 'zipcode'=>'97791', 'name'=>'Waya']);
        DB::table('villages')->insert(['id'=>49374, 'districts_id'=>4353, 'zipcode'=>'97792', 'name'=>'Bobo']);
        //Kecamatan Bacan Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4354, 'city_id'=>254, 'name'=>'Bacan']);
        DB::table('villages')->insert(['id'=>49375, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Amasing Kali']);
        DB::table('villages')->insert(['id'=>49376, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Amasing Kota']);
        DB::table('villages')->insert(['id'=>49377, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Amasing Kota Barat']);
        DB::table('villages')->insert(['id'=>49378, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Amasing Kota Utara']);
        DB::table('villages')->insert(['id'=>49379, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Awanggoa']);
        DB::table('villages')->insert(['id'=>49380, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Belang Belang']);
        DB::table('villages')->insert(['id'=>49381, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Hidayat']);
        DB::table('villages')->insert(['id'=>49382, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Indomut']);
        DB::table('villages')->insert(['id'=>49383, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Kaputusan (kaputusang)']);
        DB::table('villages')->insert(['id'=>49384, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Labuha']);
        DB::table('villages')->insert(['id'=>49385, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Marabose']);
        DB::table('villages')->insert(['id'=>49386, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Suma Tinggi']);
        DB::table('villages')->insert(['id'=>49387, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Sumae']);
        DB::table('villages')->insert(['id'=>49388, 'districts_id'=>4354, 'zipcode'=>'97791', 'name'=>'Tomori']);
        //Kecamatan Kasiruta Barat Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4355, 'city_id'=>254, 'name'=>'Kasiruta Barat']);
        DB::table('villages')->insert(['id'=>49389, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Arumamang']);
        DB::table('villages')->insert(['id'=>49390, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Bisori']);
        DB::table('villages')->insert(['id'=>49391, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Doko (doku)']);
        DB::table('villages')->insert(['id'=>49392, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Imbu Imbu']);
        DB::table('villages')->insert(['id'=>49393, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Kukupang (kakupang)']);
        DB::table('villages')->insert(['id'=>49394, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Lata Lata']);
        DB::table('villages')->insert(['id'=>49395, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Marikapal']);
        DB::table('villages')->insert(['id'=>49396, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Palamea']);
        DB::table('villages')->insert(['id'=>49397, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Sengga Baru']);
        DB::table('villages')->insert(['id'=>49398, 'districts_id'=>4355, 'zipcode'=>'97791', 'name'=>'Sidanga']);
        //Kecamatan Bacan Timur Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4356, 'city_id'=>254, 'name'=>'Bacan Timur']);
        DB::table('villages')->insert(['id'=>49399, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Babang']);
        DB::table('villages')->insert(['id'=>49400, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Bori']);
        DB::table('villages')->insert(['id'=>49401, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Goro Goro']);
        DB::table('villages')->insert(['id'=>49402, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Kaireu']);
        DB::table('villages')->insert(['id'=>49403, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Nyonyifi']);
        DB::table('villages')->insert(['id'=>49404, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Sabatang']);
        DB::table('villages')->insert(['id'=>49405, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Sali Kecil']);
        DB::table('villages')->insert(['id'=>49406, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Sayoang']);
        DB::table('villages')->insert(['id'=>49407, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Timlonga']);
        DB::table('villages')->insert(['id'=>49408, 'districts_id'=>4356, 'zipcode'=>'97791', 'name'=>'Wayamiga']);
        //Kecamatan Mandioli Selatan Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4357, 'city_id'=>254, 'name'=>'Mandioli Selatan']);
        DB::table('villages')->insert(['id'=>49409, 'districts_id'=>4357, 'zipcode'=>'97791', 'name'=>'Bahu']);
        DB::table('villages')->insert(['id'=>49410, 'districts_id'=>4357, 'zipcode'=>'97791', 'name'=>'Galala']);
        DB::table('villages')->insert(['id'=>49411, 'districts_id'=>4357, 'zipcode'=>'97791', 'name'=>'Jiko (jeko)']);
        DB::table('villages')->insert(['id'=>49412, 'districts_id'=>4357, 'zipcode'=>'97791', 'name'=>'Lele']);
        DB::table('villages')->insert(['id'=>49413, 'districts_id'=>4357, 'zipcode'=>'97791', 'name'=>'Tabalema']);
        DB::table('villages')->insert(['id'=>49414, 'districts_id'=>4357, 'zipcode'=>'97791', 'name'=>'Yoyok']);
        //Kecamatan Kepulauan Botanglomang Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4358, 'city_id'=>254, 'name'=>'Kepulauan Botanglomang']);
        DB::table('villages')->insert(['id'=>49415, 'districts_id'=>4358, 'zipcode'=>'97791', 'name'=>'Bajo']);
        DB::table('villages')->insert(['id'=>49416, 'districts_id'=>4358, 'zipcode'=>'97791', 'name'=>'Batutaga']);
        DB::table('villages')->insert(['id'=>49417, 'districts_id'=>4358, 'zipcode'=>'97791', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>49418, 'districts_id'=>4358, 'zipcode'=>'97791', 'name'=>'Pasimbaos']);
        DB::table('villages')->insert(['id'=>49419, 'districts_id'=>4358, 'zipcode'=>'97791', 'name'=>'Prapakanda']);
        DB::table('villages')->insert(['id'=>49420, 'districts_id'=>4358, 'zipcode'=>'97791', 'name'=>'Sawanakar (sawangakar/sawangkang)']);
        DB::table('villages')->insert(['id'=>49421, 'districts_id'=>4358, 'zipcode'=>'97791', 'name'=>'Tanjung Obit']);
        DB::table('villages')->insert(['id'=>49422, 'districts_id'=>4358, 'zipcode'=>'97791', 'name'=>'Toin']);
        //Kecamatan Bacan Timur Tengah Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4359, 'city_id'=>254, 'name'=>'Bacan Timur Tengah']);
        DB::table('villages')->insert(['id'=>49423, 'districts_id'=>4359, 'zipcode'=>'97791', 'name'=>'Bibinoi']);
        DB::table('villages')->insert(['id'=>49424, 'districts_id'=>4359, 'zipcode'=>'97791', 'name'=>'Songa']);
        DB::table('villages')->insert(['id'=>49425, 'districts_id'=>4359, 'zipcode'=>'97791', 'name'=>'Tabapoma']);
        DB::table('villages')->insert(['id'=>49426, 'districts_id'=>4359, 'zipcode'=>'97791', 'name'=>'Tawa']);
        DB::table('villages')->insert(['id'=>49427, 'districts_id'=>4359, 'zipcode'=>'97791', 'name'=>'Tomara']);
        DB::table('villages')->insert(['id'=>49428, 'districts_id'=>4359, 'zipcode'=>'97791', 'name'=>'Tutupa']);
        DB::table('villages')->insert(['id'=>49429, 'districts_id'=>4359, 'zipcode'=>'97791', 'name'=>'Wayatim']);
        //Kecamatan Bacan Selatan Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4360, 'city_id'=>254, 'name'=>'Bacan Selatan']);
        DB::table('villages')->insert(['id'=>49430, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Dgandasuli (gandasuli)']);
        DB::table('villages')->insert(['id'=>49431, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Kubung']);
        DB::table('villages')->insert(['id'=>49432, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Kupal']);
        DB::table('villages')->insert(['id'=>49433, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Makian (kampung Makian)']);
        DB::table('villages')->insert(['id'=>49434, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Mandawong (mandaong)']);
        DB::table('villages')->insert(['id'=>49435, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Panamboang']);
        DB::table('villages')->insert(['id'=>49436, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Papaloang']);
        DB::table('villages')->insert(['id'=>49437, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Sawadai']);
        DB::table('villages')->insert(['id'=>49438, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Tembal']);
        DB::table('villages')->insert(['id'=>49439, 'districts_id'=>4360, 'zipcode'=>'97791', 'name'=>'Tuwokona (tuakona)']);
        //Kecamatan Bacan Barat Utara Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4361, 'city_id'=>254, 'name'=>'Bacan Barat Utara']);
        DB::table('villages')->insert(['id'=>49440, 'districts_id'=>4361, 'zipcode'=>'97791', 'name'=>'Geti Baru']);
        DB::table('villages')->insert(['id'=>49441, 'districts_id'=>4361, 'zipcode'=>'97791', 'name'=>'Geti Lama']);
        DB::table('villages')->insert(['id'=>49442, 'districts_id'=>4361, 'zipcode'=>'97791', 'name'=>'Gilalang']);
        DB::table('villages')->insert(['id'=>49443, 'districts_id'=>4361, 'zipcode'=>'97791', 'name'=>'Gorua Lolaro (lolorogurua)']);
        DB::table('villages')->insert(['id'=>49444, 'districts_id'=>4361, 'zipcode'=>'97791', 'name'=>'Jojame']);
        DB::table('villages')->insert(['id'=>49445, 'districts_id'=>4361, 'zipcode'=>'97791', 'name'=>'Nusa Babullah (nusa Babi)']);
        DB::table('villages')->insert(['id'=>49446, 'districts_id'=>4361, 'zipcode'=>'97791', 'name'=>'Sidopo']);
        DB::table('villages')->insert(['id'=>49447, 'districts_id'=>4361, 'zipcode'=>'97791', 'name'=>'Yaba']);
        //Kecamatan Bacan Barat Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4362, 'city_id'=>254, 'name'=>'Bacan Barat']);
        DB::table('villages')->insert(['id'=>49448, 'districts_id'=>4362, 'zipcode'=>'97791', 'name'=>'Indari']);
        DB::table('villages')->insert(['id'=>49449, 'districts_id'=>4362, 'zipcode'=>'97791', 'name'=>'Kokotu']);
        DB::table('villages')->insert(['id'=>49450, 'districts_id'=>4362, 'zipcode'=>'97791', 'name'=>'Kotunang (kukutunang)']);
        DB::table('villages')->insert(['id'=>49451, 'districts_id'=>4362, 'zipcode'=>'97791', 'name'=>'Kusubibi']);
        DB::table('villages')->insert(['id'=>49452, 'districts_id'=>4362, 'zipcode'=>'97791', 'name'=>'Nondang (mondang)']);
        DB::table('villages')->insert(['id'=>49453, 'districts_id'=>4362, 'zipcode'=>'97791', 'name'=>'Tawabi']);
        DB::table('villages')->insert(['id'=>49454, 'districts_id'=>4362, 'zipcode'=>'97791', 'name'=>'Wiring']);
        //Kecamatan Kasiruta Timur Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4363, 'city_id'=>254, 'name'=>'Kasiruta Timur']);
        DB::table('villages')->insert(['id'=>49455, 'districts_id'=>4363, 'zipcode'=>'97791', 'name'=>'Jeret']);
        DB::table('villages')->insert(['id'=>49456, 'districts_id'=>4363, 'zipcode'=>'97791', 'name'=>'Kasiruta Dalam']);
        DB::table('villages')->insert(['id'=>49457, 'districts_id'=>4363, 'zipcode'=>'97791', 'name'=>'Koubalabala']);
        DB::table('villages')->insert(['id'=>49458, 'districts_id'=>4363, 'zipcode'=>'97791', 'name'=>'Loleo Jaya']);
        DB::table('villages')->insert(['id'=>49459, 'districts_id'=>4363, 'zipcode'=>'97791', 'name'=>'Loleomekar']);
        DB::table('villages')->insert(['id'=>49460, 'districts_id'=>4363, 'zipcode'=>'97791', 'name'=>'Marituso (maritosu)']);
        DB::table('villages')->insert(['id'=>49461, 'districts_id'=>4363, 'zipcode'=>'97791', 'name'=>'Tawa']);
        DB::table('villages')->insert(['id'=>49462, 'districts_id'=>4363, 'zipcode'=>'97791', 'name'=>'Tutuha']);
        //Kecamatan Bacan Timur Selatan Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4364, 'city_id'=>254, 'name'=>'Bacan Timur Selatan']);
        DB::table('villages')->insert(['id'=>49463, 'districts_id'=>4364, 'zipcode'=>'97791', 'name'=>'Liaro']);
        DB::table('villages')->insert(['id'=>49464, 'districts_id'=>4364, 'zipcode'=>'97791', 'name'=>'Pigaraja']);
        DB::table('villages')->insert(['id'=>49465, 'districts_id'=>4364, 'zipcode'=>'97791', 'name'=>'Silang']);
        DB::table('villages')->insert(['id'=>49466, 'districts_id'=>4364, 'zipcode'=>'97791', 'name'=>'Tabajaya']);
        DB::table('villages')->insert(['id'=>49467, 'districts_id'=>4364, 'zipcode'=>'97791', 'name'=>'Tabangame']);
        DB::table('villages')->insert(['id'=>49468, 'districts_id'=>4364, 'zipcode'=>'97791', 'name'=>'Wayakuba']);
        DB::table('villages')->insert(['id'=>49469, 'districts_id'=>4364, 'zipcode'=>'97791', 'name'=>'Wayaua']);
        //Kecamatan Obi Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4365, 'city_id'=>254, 'name'=>'Obi']);
        DB::table('villages')->insert(['id'=>49470, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Air Mangga Indah']);
        DB::table('villages')->insert(['id'=>49471, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Akegula']);
        DB::table('villages')->insert(['id'=>49472, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Anggai']);
        DB::table('villages')->insert(['id'=>49473, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Baru']);
        DB::table('villages')->insert(['id'=>49474, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Buton']);
        DB::table('villages')->insert(['id'=>49475, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Jikotamo']);
        DB::table('villages')->insert(['id'=>49476, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Kawasi']);
        DB::table('villages')->insert(['id'=>49477, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Laiwui']);
        DB::table('villages')->insert(['id'=>49478, 'districts_id'=>4365, 'zipcode'=>'97792', 'name'=>'Sambiki']);
        //Kecamatan Obi Barat Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4366, 'city_id'=>254, 'name'=>'Obi Barat']);
        DB::table('villages')->insert(['id'=>49479, 'districts_id'=>4366, 'zipcode'=>'97792', 'name'=>'Alam Kenanga']);
        DB::table('villages')->insert(['id'=>49480, 'districts_id'=>4366, 'zipcode'=>'97792', 'name'=>'Alam Pelita']);
        DB::table('villages')->insert(['id'=>49481, 'districts_id'=>4366, 'zipcode'=>'97792', 'name'=>'Jikohai (jikohay)']);
        DB::table('villages')->insert(['id'=>49482, 'districts_id'=>4366, 'zipcode'=>'97792', 'name'=>'Manatahan']);
        DB::table('villages')->insert(['id'=>49483, 'districts_id'=>4366, 'zipcode'=>'97792', 'name'=>'Soasangaji']);
        DB::table('villages')->insert(['id'=>49484, 'districts_id'=>4366, 'zipcode'=>'97792', 'name'=>'Tapa']);
        //Kecamatan Obi Selatan Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4367, 'city_id'=>254, 'name'=>'Obi Selatan']);
        DB::table('villages')->insert(['id'=>49485, 'districts_id'=>4367, 'zipcode'=>'97792', 'name'=>'Bobo']);
        DB::table('villages')->insert(['id'=>49486, 'districts_id'=>4367, 'zipcode'=>'97792', 'name'=>'Fluks (fluk)']);
        DB::table('villages')->insert(['id'=>49487, 'districts_id'=>4367, 'zipcode'=>'97792', 'name'=>'Gambaru']);
        DB::table('villages')->insert(['id'=>49488, 'districts_id'=>4367, 'zipcode'=>'97792', 'name'=>'Loleo']);
        DB::table('villages')->insert(['id'=>49489, 'districts_id'=>4367, 'zipcode'=>'97792', 'name'=>'Mano']);
        DB::table('villages')->insert(['id'=>49490, 'districts_id'=>4367, 'zipcode'=>'97792', 'name'=>'Ocimaloleo']);
        DB::table('villages')->insert(['id'=>49491, 'districts_id'=>4367, 'zipcode'=>'97792', 'name'=>'Soligi']);
        DB::table('villages')->insert(['id'=>49492, 'districts_id'=>4367, 'zipcode'=>'97792', 'name'=>'Wayaloar']);
        //Kecamatan Obi Utara Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4368, 'city_id'=>254, 'name'=>'Obi Utara']);
        DB::table('villages')->insert(['id'=>49493, 'districts_id'=>4368, 'zipcode'=>'97792', 'name'=>'Cap']);
        DB::table('villages')->insert(['id'=>49494, 'districts_id'=>4368, 'zipcode'=>'97792', 'name'=>'Galala']);
        DB::table('villages')->insert(['id'=>49495, 'districts_id'=>4368, 'zipcode'=>'97792', 'name'=>'Madapolo']);
        DB::table('villages')->insert(['id'=>49496, 'districts_id'=>4368, 'zipcode'=>'97792', 'name'=>'Madapolo Barat']);
        DB::table('villages')->insert(['id'=>49497, 'districts_id'=>4368, 'zipcode'=>'97792', 'name'=>'Madapolo Timur']);
        DB::table('villages')->insert(['id'=>49498, 'districts_id'=>4368, 'zipcode'=>'97792', 'name'=>'Pasir Putih']);
        DB::table('villages')->insert(['id'=>49499, 'districts_id'=>4368, 'zipcode'=>'97792', 'name'=>'Waringi']);
        //Kecamatan Obi Timur Kab. Halmahera Selatan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4369, 'city_id'=>254, 'name'=>'Obi Timur']);
        DB::table('villages')->insert(['id'=>49500, 'districts_id'=>4369, 'zipcode'=>'97792', 'name'=>'Kello (kelo)']);
        DB::table('villages')->insert(['id'=>49501, 'districts_id'=>4369, 'zipcode'=>'97792', 'name'=>'Sosepe']);
        DB::table('villages')->insert(['id'=>49502, 'districts_id'=>4369, 'zipcode'=>'97792', 'name'=>'Sum']);
        DB::table('villages')->insert(['id'=>49503, 'districts_id'=>4369, 'zipcode'=>'97792', 'name'=>'Wooi']);

        //Kab. Pulau Morotai Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>255, 'province_id'=>20, 'type'=>'regencies', 'name'=>'Pulau Morotai']);
        //Kecamatan Morotai Selatan Kab. Pulau Morotai Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4370, 'city_id'=>255, 'name'=>'Morotai Selatan']);
        DB::table('villages')->insert(['id'=>49504, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Aha']);
        DB::table('villages')->insert(['id'=>49505, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Daeo']);
        DB::table('villages')->insert(['id'=>49506, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Daeo Majiko']);
        DB::table('villages')->insert(['id'=>49507, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Darame']);
        DB::table('villages')->insert(['id'=>49508, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Daruba']);
        DB::table('villages')->insert(['id'=>49509, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Dehegila']);
        DB::table('villages')->insert(['id'=>49510, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Falila']);
        DB::table('villages')->insert(['id'=>49511, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Galo Galo']);
        DB::table('villages')->insert(['id'=>49512, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Gotalamo']);
        DB::table('villages')->insert(['id'=>49513, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Joubela']);
        DB::table('villages')->insert(['id'=>49514, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Juanga']);
        DB::table('villages')->insert(['id'=>49515, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Koloray (kolorai)']);
        DB::table('villages')->insert(['id'=>49516, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Mandiri']);
        DB::table('villages')->insert(['id'=>49517, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Momojiu']);
        DB::table('villages')->insert(['id'=>49518, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Morodadi']);
        DB::table('villages')->insert(['id'=>49519, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Muhajirin']);
        DB::table('villages')->insert(['id'=>49520, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Nakamura']);
        DB::table('villages')->insert(['id'=>49521, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Pandangan']);
        DB::table('villages')->insert(['id'=>49522, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Pilowo']);
        DB::table('villages')->insert(['id'=>49523, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Sabala']);
        DB::table('villages')->insert(['id'=>49524, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Sabatai Baru']);
        DB::table('villages')->insert(['id'=>49525, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Sabatai Tua']);
        DB::table('villages')->insert(['id'=>49526, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Totodoku']);
        DB::table('villages')->insert(['id'=>49527, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Wawama']);
        DB::table('villages')->insert(['id'=>49528, 'districts_id'=>4370, 'zipcode'=>'97771', 'name'=>'Yayasan']);
        //Kecamatan Morotai Selatan Barat Kab. Pulau Morotai Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4371, 'city_id'=>255, 'name'=>'Morotai Selatan Barat']);
        DB::table('villages')->insert(['id'=>49529, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Aru Burung']);
        DB::table('villages')->insert(['id'=>49530, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Aru Irian']);
        DB::table('villages')->insert(['id'=>49531, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Bobula']);
        DB::table('villages')->insert(['id'=>49532, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Cio Dalam']);
        DB::table('villages')->insert(['id'=>49533, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Cio Gerong']);
        DB::table('villages')->insert(['id'=>49534, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Cio Maloleo']);
        DB::table('villages')->insert(['id'=>49535, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Cucumare']);
        DB::table('villages')->insert(['id'=>49536, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Leo Leo']);
        DB::table('villages')->insert(['id'=>49537, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Lou Madoro']);
        DB::table('villages')->insert(['id'=>49538, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Ngele Ngele Besar']);
        DB::table('villages')->insert(['id'=>49539, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Ngele Ngele Kecil']);
        DB::table('villages')->insert(['id'=>49540, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Posi Posi Rao']);
        DB::table('villages')->insert(['id'=>49541, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Raja']);
        DB::table('villages')->insert(['id'=>49542, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Saminyamau']);
        DB::table('villages')->insert(['id'=>49543, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Tiley Kusu']);
        DB::table('villages')->insert(['id'=>49544, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Tiley Pantai']);
        DB::table('villages')->insert(['id'=>49545, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Tutuhu (tuthu)']);
        DB::table('villages')->insert(['id'=>49546, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Usbar Pantai']);
        DB::table('villages')->insert(['id'=>49547, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Waringin']);
        DB::table('villages')->insert(['id'=>49548, 'districts_id'=>4371, 'zipcode'=>'97771', 'name'=>'Wayabula']);
        //Kecamatan Morotai Timur Kab. Pulau Morotai Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4372, 'city_id'=>255, 'name'=>'Morotai Timur']);
        DB::table('villages')->insert(['id'=>49549, 'districts_id'=>4372, 'zipcode'=>'97771', 'name'=>'Sambiki']);
        DB::table('villages')->insert(['id'=>49550, 'districts_id'=>4372, 'zipcode'=>'97771', 'name'=>'Sambiki Baru']);
        DB::table('villages')->insert(['id'=>49551, 'districts_id'=>4372, 'zipcode'=>'97771', 'name'=>'Sangowo']);
        DB::table('villages')->insert(['id'=>49552, 'districts_id'=>4372, 'zipcode'=>'97771', 'name'=>'Sangowo Barat']);
        DB::table('villages')->insert(['id'=>49553, 'districts_id'=>4372, 'zipcode'=>'97771', 'name'=>'Sangowo Timur']);
        DB::table('villages')->insert(['id'=>49554, 'districts_id'=>4372, 'zipcode'=>'97772', 'name'=>'Buho Buho']);
        DB::table('villages')->insert(['id'=>49555, 'districts_id'=>4372, 'zipcode'=>'97772', 'name'=>'Lifao']);
        DB::table('villages')->insert(['id'=>49556, 'districts_id'=>4372, 'zipcode'=>'97772', 'name'=>'Mira']);
        DB::table('villages')->insert(['id'=>49557, 'districts_id'=>4372, 'zipcode'=>'97772', 'name'=>'Rahmat']);
        DB::table('villages')->insert(['id'=>49558, 'districts_id'=>4372, 'zipcode'=>'97772', 'name'=>'Wewemo']);
        DB::table('villages')->insert(['id'=>49559, 'districts_id'=>4372, 'zipcode'=>'97773', 'name'=>'Seseli Jaya']);
        DB::table('villages')->insert(['id'=>49560, 'districts_id'=>4372, 'zipcode'=>'97774', 'name'=>'Hino']);
        DB::table('villages')->insert(['id'=>49561, 'districts_id'=>4372, 'zipcode'=>'97775', 'name'=>'Gosoma Maluku']);
        DB::table('villages')->insert(['id'=>49562, 'districts_id'=>4372, 'zipcode'=>'97776', 'name'=>'Gamlamo']);
        DB::table('villages')->insert(['id'=>49563, 'districts_id'=>4372, 'zipcode'=>'97777', 'name'=>'Doku Mira']);
        //Kecamatan Morotai Jaya Kab. Pulau Morotai Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4373, 'city_id'=>255, 'name'=>'Morotai Jaya']);
        DB::table('villages')->insert(['id'=>49564, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Aru']);
        DB::table('villages')->insert(['id'=>49565, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Bere Bere Kecil']);
        DB::table('villages')->insert(['id'=>49566, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Cempaka']);
        DB::table('villages')->insert(['id'=>49567, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Cendana']);
        DB::table('villages')->insert(['id'=>49568, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Gorugo']);
        DB::table('villages')->insert(['id'=>49569, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Hapo']);
        DB::table('villages')->insert(['id'=>49570, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Libano']);
        DB::table('villages')->insert(['id'=>49571, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Loleo']);
        DB::table('villages')->insert(['id'=>49572, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Pangeo']);
        DB::table('villages')->insert(['id'=>49573, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Podimor Padange']);
        DB::table('villages')->insert(['id'=>49574, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Sopi']);
        DB::table('villages')->insert(['id'=>49575, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Sopi Majiko']);
        DB::table('villages')->insert(['id'=>49576, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Titigogoli']);
        DB::table('villages')->insert(['id'=>49577, 'districts_id'=>4373, 'zipcode'=>'97772', 'name'=>'Towara']);
        //Kecamatan Morotai Utara Kab. Pulau Morotai Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4374, 'city_id'=>255, 'name'=>'Morotai Utara']);
        DB::table('villages')->insert(['id'=>49578, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Bere Bere']);
        DB::table('villages')->insert(['id'=>49579, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Bido']);
        DB::table('villages')->insert(['id'=>49580, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Goa Hira']);
        DB::table('villages')->insert(['id'=>49581, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Gorua']);
        DB::table('villages')->insert(['id'=>49582, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Gorua Selatan']);
        DB::table('villages')->insert(['id'=>49583, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Kenari']);
        DB::table('villages')->insert(['id'=>49584, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Korago']);
        DB::table('villages')->insert(['id'=>49585, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Loleo Jaya']);
        DB::table('villages')->insert(['id'=>49586, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Losuo']);
        DB::table('villages')->insert(['id'=>49587, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Maba']);
        DB::table('villages')->insert(['id'=>49588, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Sakita']);
        DB::table('villages')->insert(['id'=>49589, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Tanjung Saleh']);
        DB::table('villages')->insert(['id'=>49590, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Tawakali']);
        DB::table('villages')->insert(['id'=>49591, 'districts_id'=>4374, 'zipcode'=>'97772', 'name'=>'Yao']);

        //Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>256, 'province_id'=>20, 'type'=>'regencies', 'name'=>'Kepulauan Sula']);
        //Kecamatan Mangoli Barat Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4375, 'city_id'=>256, 'name'=>'Mangoli Barat']);
        DB::table('villages')->insert(['id'=>49592, 'districts_id'=>4375, 'zipcode'=>'97792', 'name'=>'Dofa']);
        DB::table('villages')->insert(['id'=>49593, 'districts_id'=>4375, 'zipcode'=>'97792', 'name'=>'Johor Perda']);
        DB::table('villages')->insert(['id'=>49594, 'districts_id'=>4375, 'zipcode'=>'97792', 'name'=>'Lekokadai']);
        DB::table('villages')->insert(['id'=>49595, 'districts_id'=>4375, 'zipcode'=>'97792', 'name'=>'Lekosula']);
        DB::table('villages')->insert(['id'=>49596, 'districts_id'=>4375, 'zipcode'=>'97792', 'name'=>'Lelyaba']);
        DB::table('villages')->insert(['id'=>49597, 'districts_id'=>4375, 'zipcode'=>'97792', 'name'=>'Pas Ipa']);
        DB::table('villages')->insert(['id'=>49598, 'districts_id'=>4375, 'zipcode'=>'97792', 'name'=>'Pelita']);
        //Kecamatan Mangoli Selatan Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4376, 'city_id'=>256, 'name'=>'Mangoli Selatan']);
        DB::table('villages')->insert(['id'=>49599, 'districts_id'=>4376, 'zipcode'=>'97793', 'name'=>'Auponhia']);
        DB::table('villages')->insert(['id'=>49600, 'districts_id'=>4376, 'zipcode'=>'97793', 'name'=>'Buya']);
        DB::table('villages')->insert(['id'=>49601, 'districts_id'=>4376, 'zipcode'=>'97793', 'name'=>'Kaporo']);
        DB::table('villages')->insert(['id'=>49602, 'districts_id'=>4376, 'zipcode'=>'97793', 'name'=>'Waikafia']);
        DB::table('villages')->insert(['id'=>49603, 'districts_id'=>4376, 'zipcode'=>'97793', 'name'=>'Wailab']);
        //Kecamatan Taliabu Timur Selatan Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4377, 'city_id'=>256, 'name'=>'Taliabu Timur Selatan']);
        DB::table('villages')->insert(['id'=>49604, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Belo']);
        DB::table('villages')->insert(['id'=>49605, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Kabunu']);
        DB::table('villages')->insert(['id'=>49606, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Kamaya']);
        DB::table('villages')->insert(['id'=>49607, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Kawadang']);
        DB::table('villages')->insert(['id'=>49608, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Losseng']);
        DB::table('villages')->insert(['id'=>49609, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Mantarara']);
        DB::table('villages')->insert(['id'=>49610, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Sofan']);
        DB::table('villages')->insert(['id'=>49611, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Waikadai']);
        DB::table('villages')->insert(['id'=>49612, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Waikadai Sula']);
        DB::table('villages')->insert(['id'=>49613, 'districts_id'=>4377, 'zipcode'=>'97793', 'name'=>'Waikoka']);
        //Kecamatan Mangoli Tengah Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4378, 'city_id'=>256, 'name'=>'Mangoli Tengah']);
        DB::table('villages')->insert(['id'=>49614, 'districts_id'=>4378, 'zipcode'=>'97793', 'name'=>'Buruakol']);
        DB::table('villages')->insert(['id'=>49615, 'districts_id'=>4378, 'zipcode'=>'97793', 'name'=>'Capalulu']);
        DB::table('villages')->insert(['id'=>49616, 'districts_id'=>4378, 'zipcode'=>'97793', 'name'=>'Mangoli']);
        DB::table('villages')->insert(['id'=>49617, 'districts_id'=>4378, 'zipcode'=>'97793', 'name'=>'Paslal']);
        DB::table('villages')->insert(['id'=>49618, 'districts_id'=>4378, 'zipcode'=>'97793', 'name'=>'Urifola']);
        DB::table('villages')->insert(['id'=>49619, 'districts_id'=>4378, 'zipcode'=>'97793', 'name'=>'Wai U']);
        DB::table('villages')->insert(['id'=>49620, 'districts_id'=>4378, 'zipcode'=>'97793', 'name'=>'Wailoba']);
        DB::table('villages')->insert(['id'=>49621, 'districts_id'=>4378, 'zipcode'=>'97793', 'name'=>'Waitulia']);
        //Kecamatan Mangoli Utara Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4379, 'city_id'=>256, 'name'=>'Mangoli Utara']);
        DB::table('villages')->insert(['id'=>49622, 'districts_id'=>4379, 'zipcode'=>'97793', 'name'=>'Falabisahaya']);
        DB::table('villages')->insert(['id'=>49623, 'districts_id'=>4379, 'zipcode'=>'97793', 'name'=>'Minaluli']);
        DB::table('villages')->insert(['id'=>49624, 'districts_id'=>4379, 'zipcode'=>'97793', 'name'=>'Modapia']);
        DB::table('villages')->insert(['id'=>49625, 'districts_id'=>4379, 'zipcode'=>'97793', 'name'=>'Modapuhi']);
        DB::table('villages')->insert(['id'=>49626, 'districts_id'=>4379, 'zipcode'=>'97793', 'name'=>'Modapuhi Trans']);
        DB::table('villages')->insert(['id'=>49627, 'districts_id'=>4379, 'zipcode'=>'97793', 'name'=>'Pastabulu']);
        DB::table('villages')->insert(['id'=>49628, 'districts_id'=>4379, 'zipcode'=>'97793', 'name'=>'Saniahaya']);
        //Kecamatan Mangoli Timur Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4380, 'city_id'=>256, 'name'=>'Mangoli Timur']);
        DB::table('villages')->insert(['id'=>49629, 'districts_id'=>4380, 'zipcode'=>'97793', 'name'=>'Karamat Titdoy']);
        DB::table('villages')->insert(['id'=>49630, 'districts_id'=>4380, 'zipcode'=>'97793', 'name'=>'Kau/kou (kow)']);
        DB::table('villages')->insert(['id'=>49631, 'districts_id'=>4380, 'zipcode'=>'97793', 'name'=>'Naflo']);
        DB::table('villages')->insert(['id'=>49632, 'districts_id'=>4380, 'zipcode'=>'97793', 'name'=>'Waitamela']);
        DB::table('villages')->insert(['id'=>49633, 'districts_id'=>4380, 'zipcode'=>'97793', 'name'=>'Waitina']);
        //Kecamatan Mangoli Utara Timur Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4381, 'city_id'=>256, 'name'=>'Mangoli Utara Timur']);
        DB::table('villages')->insert(['id'=>49634, 'districts_id'=>4381, 'zipcode'=>'97793', 'name'=>'Kawata']);
        DB::table('villages')->insert(['id'=>49635, 'districts_id'=>4381, 'zipcode'=>'97793', 'name'=>'Pelita Jaya']);
        DB::table('villages')->insert(['id'=>49636, 'districts_id'=>4381, 'zipcode'=>'97793', 'name'=>'Waisakai']);
        DB::table('villages')->insert(['id'=>49637, 'districts_id'=>4381, 'zipcode'=>'97793', 'name'=>'Waisum']);
        //Kecamatan Lede Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4382, 'city_id'=>256, 'name'=>'Lede']);
        DB::table('villages')->insert(['id'=>49638, 'districts_id'=>4382, 'zipcode'=>'97793', 'name'=>'Langganu']);
        DB::table('villages')->insert(['id'=>49639, 'districts_id'=>4382, 'zipcode'=>'97793', 'name'=>'Lede']);
        DB::table('villages')->insert(['id'=>49640, 'districts_id'=>4382, 'zipcode'=>'97793', 'name'=>'Natang Kuning']);
        DB::table('villages')->insert(['id'=>49641, 'districts_id'=>4382, 'zipcode'=>'97793', 'name'=>'Todoli']);
        DB::table('villages')->insert(['id'=>49642, 'districts_id'=>4382, 'zipcode'=>'97793', 'name'=>'Tolong']);
        //Kecamatan Taliabu Timur Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4383, 'city_id'=>256, 'name'=>'Taliabu Timur']);
        DB::table('villages')->insert(['id'=>49643, 'districts_id'=>4383, 'zipcode'=>'97793', 'name'=>'Parigi']);
        DB::table('villages')->insert(['id'=>49644, 'districts_id'=>4383, 'zipcode'=>'97793', 'name'=>'Penu']);
        DB::table('villages')->insert(['id'=>49645, 'districts_id'=>4383, 'zipcode'=>'97793', 'name'=>'Samuya']);
        DB::table('villages')->insert(['id'=>49646, 'districts_id'=>4383, 'zipcode'=>'97793', 'name'=>'Tubang']);
        //Kecamatan Taliabu Utara Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4384, 'city_id'=>256, 'name'=>'Taliabu Utara']);
        DB::table('villages')->insert(['id'=>49647, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Air Bulan']);
        DB::table('villages')->insert(['id'=>49648, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Air Kalimat']);
        DB::table('villages')->insert(['id'=>49649, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Dege']);
        DB::table('villages')->insert(['id'=>49650, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Gela']);
        DB::table('villages')->insert(['id'=>49651, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Hai']);
        DB::table('villages')->insert(['id'=>49652, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Jorjoga']);
        DB::table('villages')->insert(['id'=>49653, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Mananga']);
        DB::table('villages')->insert(['id'=>49654, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Mbono']);
        DB::table('villages')->insert(['id'=>49655, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Minton']);
        DB::table('villages')->insert(['id'=>49656, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Nunca']);
        DB::table('villages')->insert(['id'=>49657, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Padang']);
        DB::table('villages')->insert(['id'=>49658, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Sahu']);
        DB::table('villages')->insert(['id'=>49659, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Tanjung Una']);
        DB::table('villages')->insert(['id'=>49660, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Tikong']);
        DB::table('villages')->insert(['id'=>49661, 'districts_id'=>4384, 'zipcode'=>'97794', 'name'=>'Ufung']);
        //Kecamatan Taliabu Selatan Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4385, 'city_id'=>256, 'name'=>'Taliabu Selatan']);
        DB::table('villages')->insert(['id'=>49662, 'districts_id'=>4385, 'zipcode'=>'97794', 'name'=>'Bahu']);
        DB::table('villages')->insert(['id'=>49663, 'districts_id'=>4385, 'zipcode'=>'97794', 'name'=>'Bapenu']);
        DB::table('villages')->insert(['id'=>49664, 'districts_id'=>4385, 'zipcode'=>'97794', 'name'=>'Kilo']);
        DB::table('villages')->insert(['id'=>49665, 'districts_id'=>4385, 'zipcode'=>'97794', 'name'=>'Nggaki']);
        DB::table('villages')->insert(['id'=>49666, 'districts_id'=>4385, 'zipcode'=>'97794', 'name'=>'Pancado']);
        DB::table('villages')->insert(['id'=>49667, 'districts_id'=>4385, 'zipcode'=>'97794', 'name'=>'Sumbong']);
        DB::table('villages')->insert(['id'=>49668, 'districts_id'=>4385, 'zipcode'=>'97794', 'name'=>'Tabona']);
        //Kecamatan Taliabu Barat Laut Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4386, 'city_id'=>256, 'name'=>'Taliabu Barat Laut']);
        DB::table('villages')->insert(['id'=>49669, 'districts_id'=>4386, 'zipcode'=>'97794', 'name'=>'Beringin Jaya']);
        DB::table('villages')->insert(['id'=>49670, 'districts_id'=>4386, 'zipcode'=>'97794', 'name'=>'Kasong']);
        DB::table('villages')->insert(['id'=>49671, 'districts_id'=>4386, 'zipcode'=>'97794', 'name'=>'Nggele']);
        DB::table('villages')->insert(['id'=>49672, 'districts_id'=>4386, 'zipcode'=>'97794', 'name'=>'Salati']);
        //Kecamatan Taliabu Barat Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4387, 'city_id'=>256, 'name'=>'Taliabu Barat']);
        DB::table('villages')->insert(['id'=>49673, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Bobong']);
        DB::table('villages')->insert(['id'=>49674, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Gurua']);
        DB::table('villages')->insert(['id'=>49675, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Holbota']);
        DB::table('villages')->insert(['id'=>49676, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Kasuari']);
        DB::table('villages')->insert(['id'=>49677, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Kawalo']);
        DB::table('villages')->insert(['id'=>49678, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Kramat']);
        DB::table('villages')->insert(['id'=>49679, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Limbo']);
        DB::table('villages')->insert(['id'=>49680, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Loho Bubba']);
        DB::table('villages')->insert(['id'=>49681, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Maranti Jaya']);
        DB::table('villages')->insert(['id'=>49682, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Masonit']);
        DB::table('villages')->insert(['id'=>49683, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Pancoran']);
        DB::table('villages')->insert(['id'=>49684, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Talo']);
        DB::table('villages')->insert(['id'=>49685, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Timpaus']);
        DB::table('villages')->insert(['id'=>49686, 'districts_id'=>4387, 'zipcode'=>'97794', 'name'=>'Wayo']);
        //Kecamatan Sanana Utara Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4388, 'city_id'=>256, 'name'=>'Sanana Utara']);
        DB::table('villages')->insert(['id'=>49687, 'districts_id'=>4388, 'zipcode'=>'97795', 'name'=>'Bajo']);
        DB::table('villages')->insert(['id'=>49688, 'districts_id'=>4388, 'zipcode'=>'97795', 'name'=>'Fokalik']);
        DB::table('villages')->insert(['id'=>49689, 'districts_id'=>4388, 'zipcode'=>'97795', 'name'=>'Fukweu']);
        DB::table('villages')->insert(['id'=>49690, 'districts_id'=>4388, 'zipcode'=>'97795', 'name'=>'Malbufa']);
        DB::table('villages')->insert(['id'=>49691, 'districts_id'=>4388, 'zipcode'=>'97795', 'name'=>'Man-gega']);
        DB::table('villages')->insert(['id'=>49692, 'districts_id'=>4388, 'zipcode'=>'97795', 'name'=>'Pohea']);
        DB::table('villages')->insert(['id'=>49693, 'districts_id'=>4388, 'zipcode'=>'97795', 'name'=>'Wainin']);
        //Kecamatan Sulabesi Timur Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4389, 'city_id'=>256, 'name'=>'Sulabesi Timur']);
        DB::table('villages')->insert(['id'=>49694, 'districts_id'=>4389, 'zipcode'=>'97795', 'name'=>'Baleha']);
        DB::table('villages')->insert(['id'=>49695, 'districts_id'=>4389, 'zipcode'=>'97795', 'name'=>'Fatkauyon']);
        DB::table('villages')->insert(['id'=>49696, 'districts_id'=>4389, 'zipcode'=>'97795', 'name'=>'Sama']);
        DB::table('villages')->insert(['id'=>49697, 'districts_id'=>4389, 'zipcode'=>'97795', 'name'=>'Waigoiyofa']);
        DB::table('villages')->insert(['id'=>49698, 'districts_id'=>4389, 'zipcode'=>'97795', 'name'=>'Wailia']);
        DB::table('villages')->insert(['id'=>49699, 'districts_id'=>4389, 'zipcode'=>'97795', 'name'=>'Waisepa']);
        //Kecamatan Sulabesi Tengah Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4390, 'city_id'=>256, 'name'=>'Sulabesi Tengah']);
        DB::table('villages')->insert(['id'=>49700, 'districts_id'=>4390, 'zipcode'=>'97795', 'name'=>'Bega']);
        DB::table('villages')->insert(['id'=>49701, 'districts_id'=>4390, 'zipcode'=>'97795', 'name'=>'Fat Iba']);
        DB::table('villages')->insert(['id'=>49702, 'districts_id'=>4390, 'zipcode'=>'97795', 'name'=>'Manaf']);
        DB::table('villages')->insert(['id'=>49703, 'districts_id'=>4390, 'zipcode'=>'97795', 'name'=>'Soamole']);
        DB::table('villages')->insert(['id'=>49704, 'districts_id'=>4390, 'zipcode'=>'97795', 'name'=>'Waiboga']);
        DB::table('villages')->insert(['id'=>49705, 'districts_id'=>4390, 'zipcode'=>'97795', 'name'=>'Waiman']);
        //Kecamatan Sanana Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4391, 'city_id'=>256, 'name'=>'Sanana']);
        DB::table('villages')->insert(['id'=>49706, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Fagudu']);
        DB::table('villages')->insert(['id'=>49707, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Falahu']);
        DB::table('villages')->insert(['id'=>49708, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Fatcei']);
        DB::table('villages')->insert(['id'=>49709, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Fogi']);
        DB::table('villages')->insert(['id'=>49710, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Mangon']);
        DB::table('villages')->insert(['id'=>49711, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Pastina']);
        DB::table('villages')->insert(['id'=>49712, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Umaloya']);
        DB::table('villages')->insert(['id'=>49713, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Wai Ipa']);
        DB::table('villages')->insert(['id'=>49714, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Waibau']);
        DB::table('villages')->insert(['id'=>49715, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Waihama']);
        DB::table('villages')->insert(['id'=>49716, 'districts_id'=>4391, 'zipcode'=>'97795', 'name'=>'Wailau']);
        //Kecamatan Sulabesi Selatan Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4392, 'city_id'=>256, 'name'=>'Sulabesi Selatan']);
        DB::table('villages')->insert(['id'=>49717, 'districts_id'=>4392, 'zipcode'=>'97795', 'name'=>'Fuata']);
        DB::table('villages')->insert(['id'=>49718, 'districts_id'=>4392, 'zipcode'=>'97795', 'name'=>'Skom']);
        DB::table('villages')->insert(['id'=>49719, 'districts_id'=>4392, 'zipcode'=>'97795', 'name'=>'Wai Tamua']);
        DB::table('villages')->insert(['id'=>49720, 'districts_id'=>4392, 'zipcode'=>'97795', 'name'=>'Waigai']);
        DB::table('villages')->insert(['id'=>49721, 'districts_id'=>4392, 'zipcode'=>'97795', 'name'=>'Wainib']);
        //Kecamatan Sulabesi Barat Kab. Kepulauan Sula Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4393, 'city_id'=>256, 'name'=>'Sulabesi Barat']);
        DB::table('villages')->insert(['id'=>49722, 'districts_id'=>4393, 'zipcode'=>'97795', 'name'=>'Kabau Darat']);
        DB::table('villages')->insert(['id'=>49723, 'districts_id'=>4393, 'zipcode'=>'97795', 'name'=>'Kabau Pantai']);
        DB::table('villages')->insert(['id'=>49724, 'districts_id'=>4393, 'zipcode'=>'97795', 'name'=>'Nahi']);
        DB::table('villages')->insert(['id'=>49725, 'districts_id'=>4393, 'zipcode'=>'97795', 'name'=>'Ona']);
        DB::table('villages')->insert(['id'=>49726, 'districts_id'=>4393, 'zipcode'=>'97795', 'name'=>'Paratina']);
        DB::table('villages')->insert(['id'=>49727, 'districts_id'=>4393, 'zipcode'=>'97795', 'name'=>'Wai Ina']);

        //Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>257, 'province_id'=>20, 'type'=>'city', 'name'=>'Tidore Kepulauan']);
        //Kecamatan Tidore (pulau Tidore) Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4394, 'city_id'=>257, 'name'=>'Tidore (pulau Tidore)']);
        DB::table('villages')->insert(['id'=>49728, 'districts_id'=>4394, 'zipcode'=>'97811', 'name'=>'Soa Sio']);
        DB::table('villages')->insert(['id'=>49729, 'districts_id'=>4394, 'zipcode'=>'97812', 'name'=>'Gamtufkange']);
        DB::table('villages')->insert(['id'=>49730, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Folarora']);
        DB::table('villages')->insert(['id'=>49731, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Goto']);
        DB::table('villages')->insert(['id'=>49732, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Gura-bunga']);
        DB::table('villages')->insert(['id'=>49733, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Indonesiana']);
        DB::table('villages')->insert(['id'=>49734, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Seli']);
        DB::table('villages')->insert(['id'=>49735, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Soadara']);
        DB::table('villages')->insert(['id'=>49736, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Tomagoba']);
        DB::table('villages')->insert(['id'=>49737, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Topo']);
        DB::table('villages')->insert(['id'=>49738, 'districts_id'=>4394, 'zipcode'=>'97813', 'name'=>'Topo Tiga']);
        //Kecamatan Tidore Utara Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4395, 'city_id'=>257, 'name'=>'Tidore Utara']);
        DB::table('villages')->insert(['id'=>49739, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Afa Afa']);
        DB::table('villages')->insert(['id'=>49740, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Bobo']);
        DB::table('villages')->insert(['id'=>49741, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Fobaharu']);
        DB::table('villages')->insert(['id'=>49742, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Gubu Kusuma']);
        DB::table('villages')->insert(['id'=>49743, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Jaya']);
        DB::table('villages')->insert(['id'=>49744, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Maitara']);
        DB::table('villages')->insert(['id'=>49745, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Maitara Selatan']);
        DB::table('villages')->insert(['id'=>49746, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Mareku']);
        DB::table('villages')->insert(['id'=>49747, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Ome']);
        DB::table('villages')->insert(['id'=>49748, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Rum']);
        DB::table('villages')->insert(['id'=>49749, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Rum Balibunga']);
        DB::table('villages')->insert(['id'=>49750, 'districts_id'=>4395, 'zipcode'=>'97813', 'name'=>'Sirongo Folaraha']);
        //Kecamatan Tidore Selatan Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4396, 'city_id'=>257, 'name'=>'Tidore Selatan']);
        DB::table('villages')->insert(['id'=>49751, 'districts_id'=>4396, 'zipcode'=>'97813', 'name'=>'Dokiri']);
        DB::table('villages')->insert(['id'=>49752, 'districts_id'=>4396, 'zipcode'=>'97813', 'name'=>'Gurabati']);
        DB::table('villages')->insert(['id'=>49753, 'districts_id'=>4396, 'zipcode'=>'97813', 'name'=>'Maregam']);
        DB::table('villages')->insert(['id'=>49754, 'districts_id'=>4396, 'zipcode'=>'97813', 'name'=>'Marekofo']);
        DB::table('villages')->insert(['id'=>49755, 'districts_id'=>4396, 'zipcode'=>'97813', 'name'=>'Toloa']);
        DB::table('villages')->insert(['id'=>49756, 'districts_id'=>4396, 'zipcode'=>'97813', 'name'=>'Tomalou']);
        DB::table('villages')->insert(['id'=>49757, 'districts_id'=>4396, 'zipcode'=>'97813', 'name'=>'Tongowai']);
        DB::table('villages')->insert(['id'=>49758, 'districts_id'=>4396, 'zipcode'=>'97813', 'name'=>'Tuguiha']);
        //Kecamatan Tidore Timur (pulau Tidore) Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4397, 'city_id'=>257, 'name'=>'Tidore Timur (pulau Tidore)']);
        DB::table('villages')->insert(['id'=>49759, 'districts_id'=>4397, 'zipcode'=>'97813', 'name'=>'Dowora']);
        DB::table('villages')->insert(['id'=>49760, 'districts_id'=>4397, 'zipcode'=>'97813', 'name'=>'Kalaodi']);
        DB::table('villages')->insert(['id'=>49761, 'districts_id'=>4397, 'zipcode'=>'97813', 'name'=>'Mafututu']);
        DB::table('villages')->insert(['id'=>49762, 'districts_id'=>4397, 'zipcode'=>'97813', 'name'=>'Tosa']);
        //Kecamatan Oba Tengah Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4398, 'city_id'=>257, 'name'=>'Oba Tengah']);
        DB::table('villages')->insert(['id'=>49763, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Akedotilou']);
        DB::table('villages')->insert(['id'=>49764, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Akeguraci']);
        DB::table('villages')->insert(['id'=>49765, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Akelamo']);
        DB::table('villages')->insert(['id'=>49766, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Akesai']);
        DB::table('villages')->insert(['id'=>49767, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Aketobato']);
        DB::table('villages')->insert(['id'=>49768, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Aketobololo']);
        DB::table('villages')->insert(['id'=>49769, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Lola']);
        DB::table('villages')->insert(['id'=>49770, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Tadupi']);
        DB::table('villages')->insert(['id'=>49771, 'districts_id'=>4398, 'zipcode'=>'97852', 'name'=>'Togema']);
        //Kecamatan Oba Utara Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4399, 'city_id'=>257, 'name'=>'Oba Utara']);
        DB::table('villages')->insert(['id'=>49772, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Akekolano']);
        DB::table('villages')->insert(['id'=>49773, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Ampera']);
        DB::table('villages')->insert(['id'=>49774, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Balbar']);
        DB::table('villages')->insert(['id'=>49775, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Bukit Durian']);
        DB::table('villages')->insert(['id'=>49776, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Galala']);
        DB::table('villages')->insert(['id'=>49777, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Gorojou']);
        DB::table('villages')->insert(['id'=>49778, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Guraping']);
        DB::table('villages')->insert(['id'=>49779, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Kaiyasa']);
        DB::table('villages')->insert(['id'=>49780, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Kusu']);
        DB::table('villages')->insert(['id'=>49781, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Oba']);
        DB::table('villages')->insert(['id'=>49782, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Sofifi']);
        DB::table('villages')->insert(['id'=>49783, 'districts_id'=>4399, 'zipcode'=>'97852', 'name'=>'Somahode']);
        //Kecamatan Oba Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4400, 'city_id'=>257, 'name'=>'Oba']);
        DB::table('villages')->insert(['id'=>49784, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Bale']);
        DB::table('villages')->insert(['id'=>49785, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Gita (gita Raja)']);
        DB::table('villages')->insert(['id'=>49786, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Koli']);
        DB::table('villages')->insert(['id'=>49787, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Kosa']);
        DB::table('villages')->insert(['id'=>49788, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Kusu Sinopa']);
        DB::table('villages')->insert(['id'=>49789, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Payahe']);
        DB::table('villages')->insert(['id'=>49790, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Toseho']);
        DB::table('villages')->insert(['id'=>49791, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Tului Talagamori']);
        DB::table('villages')->insert(['id'=>49792, 'districts_id'=>4400, 'zipcode'=>'97852', 'name'=>'Woda']);
        //Kecamatan Oba Selatan Kota Tidore Kepulauan Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4401, 'city_id'=>257, 'name'=>'Oba Selatan']);
        DB::table('villages')->insert(['id'=>49793, 'districts_id'=>4401, 'zipcode'=>'97852', 'name'=>'Hager']);
        DB::table('villages')->insert(['id'=>49794, 'districts_id'=>4401, 'zipcode'=>'97852', 'name'=>'Lifofa']);
        DB::table('villages')->insert(['id'=>49795, 'districts_id'=>4401, 'zipcode'=>'97852', 'name'=>'Maidi']);
        DB::table('villages')->insert(['id'=>49796, 'districts_id'=>4401, 'zipcode'=>'97852', 'name'=>'Nuku']);
        DB::table('villages')->insert(['id'=>49797, 'districts_id'=>4401, 'zipcode'=>'97852', 'name'=>'Selamalofo']);
        DB::table('villages')->insert(['id'=>49798, 'districts_id'=>4401, 'zipcode'=>'97852', 'name'=>'Tagalaya']);
        DB::table('villages')->insert(['id'=>49799, 'districts_id'=>4401, 'zipcode'=>'97852', 'name'=>'Wama']);

        //Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>258, 'province_id'=>20, 'type'=>'regencies', 'name'=>'Halmahera Tengah']);
        //Kecamatan Weda Selatan Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4402, 'city_id'=>258, 'name'=>'Weda Selatan']);
        DB::table('villages')->insert(['id'=>49800, 'districts_id'=>4402, 'zipcode'=>'97853', 'name'=>'Air Salobar']);
        DB::table('villages')->insert(['id'=>49801, 'districts_id'=>4402, 'zipcode'=>'97853', 'name'=>'Kluting Jaya']);
        DB::table('villages')->insert(['id'=>49802, 'districts_id'=>4402, 'zipcode'=>'97853', 'name'=>'Lembah Asri']);
        DB::table('villages')->insert(['id'=>49803, 'districts_id'=>4402, 'zipcode'=>'97853', 'name'=>'Loleo']);
        DB::table('villages')->insert(['id'=>49804, 'districts_id'=>4402, 'zipcode'=>'97853', 'name'=>'Sosowomo']);
        DB::table('villages')->insert(['id'=>49805, 'districts_id'=>4402, 'zipcode'=>'97853', 'name'=>'Sumber Sari']);
        DB::table('villages')->insert(['id'=>49806, 'districts_id'=>4402, 'zipcode'=>'97853', 'name'=>'Tilope (tiloppe)']);
        DB::table('villages')->insert(['id'=>49807, 'districts_id'=>4402, 'zipcode'=>'97853', 'name'=>'Wairoro Indah']);
        //Kecamatan Weda Utara Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4403, 'city_id'=>258, 'name'=>'Weda Utara']);
        DB::table('villages')->insert(['id'=>49808, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Dotte']);
        DB::table('villages')->insert(['id'=>49809, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Fritu (sepoh)']);
        DB::table('villages')->insert(['id'=>49810, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Gemaf']);
        DB::table('villages')->insert(['id'=>49811, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Kiya']);
        DB::table('villages')->insert(['id'=>49812, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Kotalo']);
        DB::table('villages')->insert(['id'=>49813, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Messa']);
        DB::table('villages')->insert(['id'=>49814, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Sagea']);
        DB::table('villages')->insert(['id'=>49815, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Waleh']);
        DB::table('villages')->insert(['id'=>49816, 'districts_id'=>4403, 'zipcode'=>'97853', 'name'=>'Yeke']);
        //Kecamatan Weda Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4404, 'city_id'=>258, 'name'=>'Weda']);
        DB::table('villages')->insert(['id'=>49817, 'districts_id'=>4404, 'zipcode'=>'97853', 'name'=>'Fidy Jaya']);
        DB::table('villages')->insert(['id'=>49818, 'districts_id'=>4404, 'zipcode'=>'97853', 'name'=>'Goeng']);
        DB::table('villages')->insert(['id'=>49819, 'districts_id'=>4404, 'zipcode'=>'97853', 'name'=>'Nurweda']);
        DB::table('villages')->insert(['id'=>49820, 'districts_id'=>4404, 'zipcode'=>'97853', 'name'=>'Nusliko']);
        DB::table('villages')->insert(['id'=>49821, 'districts_id'=>4404, 'zipcode'=>'97853', 'name'=>'Sidanga']);
        DB::table('villages')->insert(['id'=>49822, 'districts_id'=>4404, 'zipcode'=>'97853', 'name'=>'Weda / Wedana']);
        DB::table('villages')->insert(['id'=>49823, 'districts_id'=>4404, 'zipcode'=>'97853', 'name'=>'Were']);
        //Kecamatan Weda Tengah Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4405, 'city_id'=>258, 'name'=>'Weda Tengah']);
        DB::table('villages')->insert(['id'=>49824, 'districts_id'=>4405, 'zipcode'=>'97853', 'name'=>'Kobe']);
        DB::table('villages')->insert(['id'=>49825, 'districts_id'=>4405, 'zipcode'=>'97853', 'name'=>'Kulo Jaya']);
        DB::table('villages')->insert(['id'=>49826, 'districts_id'=>4405, 'zipcode'=>'97853', 'name'=>'Lelilef Sawai']);
        DB::table('villages')->insert(['id'=>49827, 'districts_id'=>4405, 'zipcode'=>'97853', 'name'=>'Lelilef Waibulen']);
        DB::table('villages')->insert(['id'=>49828, 'districts_id'=>4405, 'zipcode'=>'97853', 'name'=>'Sawai Itepo']);
        DB::table('villages')->insert(['id'=>49829, 'districts_id'=>4405, 'zipcode'=>'97853', 'name'=>'Woejerana']);
        DB::table('villages')->insert(['id'=>49830, 'districts_id'=>4405, 'zipcode'=>'97853', 'name'=>'Woekob']);
        //Kecamatan Patani Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4406, 'city_id'=>258, 'name'=>'Patani']);
        DB::table('villages')->insert(['id'=>49831, 'districts_id'=>4406, 'zipcode'=>'97854', 'name'=>'Baka Jaya']);
        DB::table('villages')->insert(['id'=>49832, 'districts_id'=>4406, 'zipcode'=>'97854', 'name'=>'Kipai']);
        DB::table('villages')->insert(['id'=>49833, 'districts_id'=>4406, 'zipcode'=>'97854', 'name'=>'Wailegi']);
        DB::table('villages')->insert(['id'=>49834, 'districts_id'=>4406, 'zipcode'=>'97854', 'name'=>'Yeisowo']);
        DB::table('villages')->insert(['id'=>49835, 'districts_id'=>4406, 'zipcode'=>'97854', 'name'=>'Yondeliu']);
        //Kecamatan Patani Barat Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4407, 'city_id'=>258, 'name'=>'Patani Barat']);
        DB::table('villages')->insert(['id'=>49836, 'districts_id'=>4407, 'zipcode'=>'97854', 'name'=>'Banemo']);
        DB::table('villages')->insert(['id'=>49837, 'districts_id'=>4407, 'zipcode'=>'97854', 'name'=>'Bobane Indah']);
        DB::table('villages')->insert(['id'=>49838, 'districts_id'=>4407, 'zipcode'=>'97854', 'name'=>'Bobane Jaya']);
        DB::table('villages')->insert(['id'=>49839, 'districts_id'=>4407, 'zipcode'=>'97854', 'name'=>'Moreala']);
        DB::table('villages')->insert(['id'=>49840, 'districts_id'=>4407, 'zipcode'=>'97854', 'name'=>'Sibenpopo']);
        //Kecamatan Patani Utara Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4408, 'city_id'=>258, 'name'=>'Patani Utara']);
        DB::table('villages')->insert(['id'=>49841, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Bilifitu']);
        DB::table('villages')->insert(['id'=>49842, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Damuli']);
        DB::table('villages')->insert(['id'=>49843, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Gemia']);
        DB::table('villages')->insert(['id'=>49844, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Maliforo']);
        DB::table('villages')->insert(['id'=>49845, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Masure']);
        DB::table('villages')->insert(['id'=>49846, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Nursifa']);
        DB::table('villages')->insert(['id'=>49847, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Palo']);
        DB::table('villages')->insert(['id'=>49848, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Pantura Jaya']);
        DB::table('villages')->insert(['id'=>49849, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Peniti']);
        DB::table('villages')->insert(['id'=>49850, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Sakam']);
        DB::table('villages')->insert(['id'=>49851, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Tepeleo Batudua']);
        DB::table('villages')->insert(['id'=>49852, 'districts_id'=>4408, 'zipcode'=>'97854', 'name'=>'Tilope (tepeleo)']);
        //Kecamatan Pulau Gebe Kab. Halmahera Tengah Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4409, 'city_id'=>258, 'name'=>'Pulau Gebe']);
        DB::table('villages')->insert(['id'=>49853, 'districts_id'=>4409, 'zipcode'=>'97854', 'name'=>'Elfanun']);
        DB::table('villages')->insert(['id'=>49854, 'districts_id'=>4409, 'zipcode'=>'97854', 'name'=>'Kacepi']);
        DB::table('villages')->insert(['id'=>49855, 'districts_id'=>4409, 'zipcode'=>'97854', 'name'=>'Kapaleo']);
        DB::table('villages')->insert(['id'=>49856, 'districts_id'=>4409, 'zipcode'=>'97854', 'name'=>'Sanafi']);
        DB::table('villages')->insert(['id'=>49857, 'districts_id'=>4409, 'zipcode'=>'97854', 'name'=>'Sonof Kacepo']);
        DB::table('villages')->insert(['id'=>49858, 'districts_id'=>4409, 'zipcode'=>'97854', 'name'=>'Umera']);
        DB::table('villages')->insert(['id'=>49859, 'districts_id'=>4409, 'zipcode'=>'97854', 'name'=>'Umiyal']);
        DB::table('villages')->insert(['id'=>49860, 'districts_id'=>4409, 'zipcode'=>'97854', 'name'=>'Yang']);

        //Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('cities')->insert(['id'=>259, 'province_id'=>20, 'type'=>'regencies', 'name'=>'Halmahera Timur']);
        //Kecamatan Maba Tengah Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4410, 'city_id'=>259, 'name'=>'Maba Tengah']);
        DB::table('villages')->insert(['id'=>49861, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Babasaram']);
        DB::table('villages')->insert(['id'=>49862, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Bangul']);
        DB::table('villages')->insert(['id'=>49863, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Bebsili']);
        DB::table('villages')->insert(['id'=>49864, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Beringin Lamo (baringin)']);
        DB::table('villages')->insert(['id'=>49865, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Dorolamo']);
        DB::table('villages')->insert(['id'=>49866, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Gaifoli']);
        DB::table('villages')->insert(['id'=>49867, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Marasipno']);
        DB::table('villages')->insert(['id'=>49868, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Maratana (marathana Jaya )']);
        DB::table('villages')->insert(['id'=>49869, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Miaf']);
        DB::table('villages')->insert(['id'=>49870, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Tatangapu']);
        DB::table('villages')->insert(['id'=>49871, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Wayamli (wayamly)']);
        DB::table('villages')->insert(['id'=>49872, 'districts_id'=>4410, 'zipcode'=>'97862', 'name'=>'Yawanli']);
        //Kecamatan Maba Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4411, 'city_id'=>259, 'name'=>'Maba']);
        DB::table('villages')->insert(['id'=>49873, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Baburino']);
        DB::table('villages')->insert(['id'=>49874, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Buli']);
        DB::table('villages')->insert(['id'=>49875, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Buli Asal']);
        DB::table('villages')->insert(['id'=>49876, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Buli Karya']);
        DB::table('villages')->insert(['id'=>49877, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Gamesan']);
        DB::table('villages')->insert(['id'=>49878, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Geltoli']);
        DB::table('villages')->insert(['id'=>49879, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Pekaulan']);
        DB::table('villages')->insert(['id'=>49880, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Sailal']);
        DB::table('villages')->insert(['id'=>49881, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Teluk Buli']);
        DB::table('villages')->insert(['id'=>49882, 'districts_id'=>4411, 'zipcode'=>'97862', 'name'=>'Wayafli (wayamli)']);
        //Kecamatan Maba Selatan Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4412, 'city_id'=>259, 'name'=>'Maba Selatan']);
        DB::table('villages')->insert(['id'=>49883, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Bicoli']);
        DB::table('villages')->insert(['id'=>49884, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Gotowasi']);
        DB::table('villages')->insert(['id'=>49885, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Kasuba']);
        DB::table('villages')->insert(['id'=>49886, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Loloelamo']);
        DB::table('villages')->insert(['id'=>49887, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Momole']);
        DB::table('villages')->insert(['id'=>49888, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Pateley (petelei)']);
        DB::table('villages')->insert(['id'=>49889, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Sil']);
        DB::table('villages')->insert(['id'=>49890, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Sowoli']);
        DB::table('villages')->insert(['id'=>49891, 'districts_id'=>4412, 'zipcode'=>'97862', 'name'=>'Waci']);
        //Kecamatan Maba Utara Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4413, 'city_id'=>259, 'name'=>'Maba Utara']);
        DB::table('villages')->insert(['id'=>49892, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Doromoi']);
        DB::table('villages')->insert(['id'=>49893, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Dorosago (dorosagu)']);
        DB::table('villages')->insert(['id'=>49894, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Jarajara']);
        DB::table('villages')->insert(['id'=>49895, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Lili']);
        DB::table('villages')->insert(['id'=>49896, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Lolasita']);
        DB::table('villages')->insert(['id'=>49897, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Patlean']);
        DB::table('villages')->insert(['id'=>49898, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Patlean Jaya']);
        DB::table('villages')->insert(['id'=>49899, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Pumlanga']);
        DB::table('villages')->insert(['id'=>49900, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Sosolat']);
        DB::table('villages')->insert(['id'=>49901, 'districts_id'=>4413, 'zipcode'=>'97862', 'name'=>'Wasileo']);
        //Kecamatan Kota Maba Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4414, 'city_id'=>259, 'name'=>'Kota Maba']);
        DB::table('villages')->insert(['id'=>49902, 'districts_id'=>4414, 'zipcode'=>'97862', 'name'=>'Maba Sangaji (gotowasi)']);
        DB::table('villages')->insert(['id'=>49903, 'districts_id'=>4414, 'zipcode'=>'97862', 'name'=>'Soa Gimalaha']);
        DB::table('villages')->insert(['id'=>49904, 'districts_id'=>4414, 'zipcode'=>'97862', 'name'=>'Soa Laipoh']);
        DB::table('villages')->insert(['id'=>49905, 'districts_id'=>4414, 'zipcode'=>'97862', 'name'=>'Soa Sangaji']);
        DB::table('villages')->insert(['id'=>49906, 'districts_id'=>4414, 'zipcode'=>'97862', 'name'=>'Tewil']);
        DB::table('villages')->insert(['id'=>49907, 'districts_id'=>4414, 'zipcode'=>'97862', 'name'=>'Wailukum']);
        //Kecamatan Wasile Timur Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4415, 'city_id'=>259, 'name'=>'Wasile Timur']);
        DB::table('villages')->insert(['id'=>49908, 'districts_id'=>4415, 'zipcode'=>'97863', 'name'=>'Ake Daga']);
        DB::table('villages')->insert(['id'=>49909, 'districts_id'=>4415, 'zipcode'=>'97863', 'name'=>'Daka Ino']);
        DB::table('villages')->insert(['id'=>49910, 'districts_id'=>4415, 'zipcode'=>'97863', 'name'=>'Dodaga']);
        DB::table('villages')->insert(['id'=>49911, 'districts_id'=>4415, 'zipcode'=>'97863', 'name'=>'Rawamangun']);
        DB::table('villages')->insert(['id'=>49912, 'districts_id'=>4415, 'zipcode'=>'97863', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>49913, 'districts_id'=>4415, 'zipcode'=>'97863', 'name'=>'Toboino']);
        DB::table('villages')->insert(['id'=>49914, 'districts_id'=>4415, 'zipcode'=>'97863', 'name'=>'Tutuling Jaya']);
        DB::table('villages')->insert(['id'=>49915, 'districts_id'=>4415, 'zipcode'=>'97863', 'name'=>'Woka Jaya']);
        //Kecamatan Wasile Selatan Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4416, 'city_id'=>259, 'name'=>'Wasile Selatan']);
        DB::table('villages')->insert(['id'=>49916, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Ake Jawi']);
        DB::table('villages')->insert(['id'=>49917, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Binagara']);
        DB::table('villages')->insert(['id'=>49918, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Bukutio']);
        DB::table('villages')->insert(['id'=>49919, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Ekor']);
        DB::table('villages')->insert(['id'=>49920, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Ekorino']);
        DB::table('villages')->insert(['id'=>49921, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Fayaul']);
        DB::table('villages')->insert(['id'=>49922, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Ino Jaya']);
        DB::table('villages')->insert(['id'=>49923, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Jiko Moi']);
        DB::table('villages')->insert(['id'=>49924, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Loleba']);
        DB::table('villages')->insert(['id'=>49925, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Minamin']);
        DB::table('villages')->insert(['id'=>49926, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Nanas']);
        DB::table('villages')->insert(['id'=>49927, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Nusa Ambu (nusa Ambo)']);
        DB::table('villages')->insert(['id'=>49928, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Nusa Jaya']);
        DB::table('villages')->insert(['id'=>49929, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Pintatu']);
        DB::table('villages')->insert(['id'=>49930, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Saolat']);
        DB::table('villages')->insert(['id'=>49931, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Saramake (saramaake)']);
        DB::table('villages')->insert(['id'=>49932, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Sondo-sondo']);
        DB::table('villages')->insert(['id'=>49933, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Tabanalou (tabanoli)']);
        DB::table('villages')->insert(['id'=>49934, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Talaga Jaya']);
        DB::table('villages')->insert(['id'=>49935, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Tanure']);
        DB::table('villages')->insert(['id'=>49936, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Tomares']);
        DB::table('villages')->insert(['id'=>49937, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Waijoi']);
        DB::table('villages')->insert(['id'=>49938, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Wasile']);
        DB::table('villages')->insert(['id'=>49939, 'districts_id'=>4416, 'zipcode'=>'97863', 'name'=>'Yawal']);
        //Kecamatan Wasile Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4417, 'city_id'=>259, 'name'=>'Wasile']);
        DB::table('villages')->insert(['id'=>49940, 'districts_id'=>4417, 'zipcode'=>'97863', 'name'=>'Batu Raja']);
        DB::table('villages')->insert(['id'=>49941, 'districts_id'=>4417, 'zipcode'=>'97863', 'name'=>'Bumi Restu']);
        DB::table('villages')->insert(['id'=>49942, 'districts_id'=>4417, 'zipcode'=>'97863', 'name'=>'Cemara Jaya']);
        DB::table('villages')->insert(['id'=>49943, 'districts_id'=>4417, 'zipcode'=>'97863', 'name'=>'Gulapapo']);
        DB::table('villages')->insert(['id'=>49944, 'districts_id'=>4417, 'zipcode'=>'97863', 'name'=>'Mekar Sari']);
        DB::table('villages')->insert(['id'=>49945, 'districts_id'=>4417, 'zipcode'=>'97863', 'name'=>'Subaim']);
        DB::table('villages')->insert(['id'=>49946, 'districts_id'=>4417, 'zipcode'=>'97863', 'name'=>'Waisuba']);
        //Kecamatan Wasile Tengah Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4418, 'city_id'=>259, 'name'=>'Wasile Tengah']);
        DB::table('villages')->insert(['id'=>49947, 'districts_id'=>4418, 'zipcode'=>'97863', 'name'=>'Boki Miake (bokimaake)']);
        DB::table('villages')->insert(['id'=>49948, 'districts_id'=>4418, 'zipcode'=>'97863', 'name'=>'Foli (foly)']);
        DB::table('villages')->insert(['id'=>49949, 'districts_id'=>4418, 'zipcode'=>'97863', 'name'=>'Hatetabako']);
        DB::table('villages')->insert(['id'=>49950, 'districts_id'=>4418, 'zipcode'=>'97863', 'name'=>'Kakaraino']);
        DB::table('villages')->insert(['id'=>49951, 'districts_id'=>4418, 'zipcode'=>'97863', 'name'=>'Lolobata']);
        DB::table('villages')->insert(['id'=>49952, 'districts_id'=>4418, 'zipcode'=>'97863', 'name'=>'Nyaolako']);
        DB::table('villages')->insert(['id'=>49953, 'districts_id'=>4418, 'zipcode'=>'97863', 'name'=>'Puao']);
        DB::table('villages')->insert(['id'=>49954, 'districts_id'=>4418, 'zipcode'=>'97863', 'name'=>'Silalaysang (silalayang)']);
        //Kecamatan Wasile Utara Kab. Halmahera Timur Provinsi Maluku Utara
        DB::table('districts')->insert(['id'=>4419, 'city_id'=>259, 'name'=>'Wasile Utara']);
        DB::table('villages')->insert(['id'=>49955, 'districts_id'=>4419, 'zipcode'=>'97863', 'name'=>'Bololo']);
        DB::table('villages')->insert(['id'=>49956, 'districts_id'=>4419, 'zipcode'=>'97863', 'name'=>'Dowongi Jaya']);
        DB::table('villages')->insert(['id'=>49957, 'districts_id'=>4419, 'zipcode'=>'97863', 'name'=>'Helaitetor']);
        DB::table('villages')->insert(['id'=>49958, 'districts_id'=>4419, 'zipcode'=>'97863', 'name'=>'Iga']);
        DB::table('villages')->insert(['id'=>49959, 'districts_id'=>4419, 'zipcode'=>'97863', 'name'=>'Labi Labi']);
        DB::table('villages')->insert(['id'=>49960, 'districts_id'=>4419, 'zipcode'=>'97863', 'name'=>'Majiko Tongone']);
        DB::table('villages')->insert(['id'=>49961, 'districts_id'=>4419, 'zipcode'=>'97863', 'name'=>'Marimoi']);
        DB::table('villages')->insert(['id'=>49962, 'districts_id'=>4419, 'zipcode'=>'97863', 'name'=>'Tatam']);
    }
}
