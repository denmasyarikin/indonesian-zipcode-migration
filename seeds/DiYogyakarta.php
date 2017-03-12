<?php

use Illuminate\Database\Seeder;

class DiYogyakarta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('provinces')->insert(['id'=>5, 'name'=>'Di Yogyakarta']);

        //Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('cities')->insert(['id'=>35, 'province_id'=>5, 'type'=>'city', 'name'=>'Yogyakarta']);
        //Kecamatan Pakualaman Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>463, 'city_id'=>35, 'name'=>'Pakualaman']);
        DB::table('villages')->insert(['id'=>4940, 'districts_id'=>463, 'zipcode'=>'55111', 'name'=>'Gunung Ketur']);
        DB::table('villages')->insert(['id'=>4941, 'districts_id'=>463, 'zipcode'=>'55112', 'name'=>'Purwo Kinanti']);
        //Kecamatan Gondomanan Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>464, 'city_id'=>35, 'name'=>'Gondomanan']);
        DB::table('villages')->insert(['id'=>4942, 'districts_id'=>464, 'zipcode'=>'55121', 'name'=>'Prawirodirjan']);
        DB::table('villages')->insert(['id'=>4943, 'districts_id'=>464, 'zipcode'=>'55122', 'name'=>'Ngupasan']);
        //Kecamatan Kraton Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>465, 'city_id'=>35, 'name'=>'Kraton']);
        DB::table('villages')->insert(['id'=>4944, 'districts_id'=>465, 'zipcode'=>'55131', 'name'=>'Panembahan']);
        DB::table('villages')->insert(['id'=>4945, 'districts_id'=>465, 'zipcode'=>'55132', 'name'=>'Kadipaten']);
        DB::table('villages')->insert(['id'=>4946, 'districts_id'=>465, 'zipcode'=>'55133', 'name'=>'Patehan']);
        //Kecamatan Mantrijeron Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>466, 'city_id'=>35, 'name'=>'Mantrijeron']);
        DB::table('villages')->insert(['id'=>4947, 'districts_id'=>466, 'zipcode'=>'55141', 'name'=>'Suryodiningratan']);
        DB::table('villages')->insert(['id'=>4948, 'districts_id'=>466, 'zipcode'=>'55142', 'name'=>'Gedongkiwo']);
        DB::table('villages')->insert(['id'=>4949, 'districts_id'=>466, 'zipcode'=>'55143', 'name'=>'Mantrijeron']);
        //Kecamatan Mergangsan Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>467, 'city_id'=>35, 'name'=>'Mergangsan']);
        DB::table('villages')->insert(['id'=>4950, 'districts_id'=>467, 'zipcode'=>'55151', 'name'=>'Wirogunan']);
        DB::table('villages')->insert(['id'=>4951, 'districts_id'=>467, 'zipcode'=>'55152', 'name'=>'Keparakan']);
        DB::table('villages')->insert(['id'=>4952, 'districts_id'=>467, 'zipcode'=>'55153', 'name'=>'Brontokusuman']);
        //Kecamatan Umbulharjo Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>468, 'city_id'=>35, 'name'=>'Umbulharjo']);
        DB::table('villages')->insert(['id'=>4953, 'districts_id'=>468, 'zipcode'=>'55161', 'name'=>'Pandeyan']);
        DB::table('villages')->insert(['id'=>4954, 'districts_id'=>468, 'zipcode'=>'55162', 'name'=>'Sorosutan']);
        DB::table('villages')->insert(['id'=>4955, 'districts_id'=>468, 'zipcode'=>'55163', 'name'=>'Giwangan']);
        DB::table('villages')->insert(['id'=>4956, 'districts_id'=>468, 'zipcode'=>'55164', 'name'=>'Warungboto']);
        DB::table('villages')->insert(['id'=>4957, 'districts_id'=>468, 'zipcode'=>'55165', 'name'=>'Muja Muju']);
        DB::table('villages')->insert(['id'=>4958, 'districts_id'=>468, 'zipcode'=>'55166', 'name'=>'Semaki']);
        DB::table('villages')->insert(['id'=>4959, 'districts_id'=>468, 'zipcode'=>'55167', 'name'=>'Tahunan']);
        //Kecamatan Kotagede Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>469, 'city_id'=>35, 'name'=>'Kotagede']);
        DB::table('villages')->insert(['id'=>4960, 'districts_id'=>469, 'zipcode'=>'55171', 'name'=>'Rejowinangun']);
        DB::table('villages')->insert(['id'=>4961, 'districts_id'=>469, 'zipcode'=>'55172', 'name'=>'Prenggan']);
        DB::table('villages')->insert(['id'=>4962, 'districts_id'=>469, 'zipcode'=>'55173', 'name'=>'Purbayan']);
        //Kecamatan Danurejan Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>470, 'city_id'=>35, 'name'=>'Danurejan']);
        DB::table('villages')->insert(['id'=>4963, 'districts_id'=>470, 'zipcode'=>'55211', 'name'=>'Bausasran']);
        DB::table('villages')->insert(['id'=>4964, 'districts_id'=>470, 'zipcode'=>'55212', 'name'=>'Tegal Panggung']);
        DB::table('villages')->insert(['id'=>4965, 'districts_id'=>470, 'zipcode'=>'55213', 'name'=>'Suryatmajan']);
        //Kecamatan Gondokusuman Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>471, 'city_id'=>35, 'name'=>'Gondokusuman']);
        DB::table('villages')->insert(['id'=>4966, 'districts_id'=>471, 'zipcode'=>'55221', 'name'=>'Demangan']);
        DB::table('villages')->insert(['id'=>4967, 'districts_id'=>471, 'zipcode'=>'55222', 'name'=>'Klitren']);
        DB::table('villages')->insert(['id'=>4968, 'districts_id'=>471, 'zipcode'=>'55223', 'name'=>'Terban']);
        DB::table('villages')->insert(['id'=>4969, 'districts_id'=>471, 'zipcode'=>'55224', 'name'=>'Kotabaru']);
        DB::table('villages')->insert(['id'=>4970, 'districts_id'=>471, 'zipcode'=>'55225', 'name'=>'Baciro']);
        //Kecamatan Jetis Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>472, 'city_id'=>35, 'name'=>'Jetis']);
        DB::table('villages')->insert(['id'=>4971, 'districts_id'=>472, 'zipcode'=>'55231', 'name'=>'Bumijo']);
        DB::table('villages')->insert(['id'=>4972, 'districts_id'=>472, 'zipcode'=>'55232', 'name'=>'Gowongan']);
        DB::table('villages')->insert(['id'=>4973, 'districts_id'=>472, 'zipcode'=>'55233', 'name'=>'Cokrodiningratan']);
        //Kecamatan Tegalrejo Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>473, 'city_id'=>35, 'name'=>'Tegalrejo']);
        DB::table('villages')->insert(['id'=>4974, 'districts_id'=>473, 'zipcode'=>'55241', 'name'=>'Karangwaru']);
        DB::table('villages')->insert(['id'=>4975, 'districts_id'=>473, 'zipcode'=>'55242', 'name'=>'Kricak']);
        DB::table('villages')->insert(['id'=>4976, 'districts_id'=>473, 'zipcode'=>'55243', 'name'=>'Bener']);
        DB::table('villages')->insert(['id'=>4977, 'districts_id'=>473, 'zipcode'=>'55244', 'name'=>'Tegalrejo']);
        //Kecamatan Wirobrajan Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>474, 'city_id'=>35, 'name'=>'Wirobrajan']);
        DB::table('villages')->insert(['id'=>4978, 'districts_id'=>474, 'zipcode'=>'55251', 'name'=>'Patangpuluhan']);
        DB::table('villages')->insert(['id'=>4979, 'districts_id'=>474, 'zipcode'=>'55252', 'name'=>'Wirobrajan']);
        DB::table('villages')->insert(['id'=>4980, 'districts_id'=>474, 'zipcode'=>'55253', 'name'=>'Pakuncen']);
        //Kecamatan Ngampilan Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>475, 'city_id'=>35, 'name'=>'Ngampilan']);
        DB::table('villages')->insert(['id'=>4981, 'districts_id'=>475, 'zipcode'=>'55261', 'name'=>'Ngampilan']);
        DB::table('villages')->insert(['id'=>4982, 'districts_id'=>475, 'zipcode'=>'55262', 'name'=>'Notoprajan']);
        //Kecamatan Gedong Tengen Kota Yogyakarta Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>476, 'city_id'=>35, 'name'=>'Gedong Tengen']);
        DB::table('villages')->insert(['id'=>4983, 'districts_id'=>476, 'zipcode'=>'55271', 'name'=>'Sosromenduran']);
        DB::table('villages')->insert(['id'=>4984, 'districts_id'=>476, 'zipcode'=>'55272', 'name'=>'Pringgokusuman']);

        //Kab. Bantul Provinsi Di Yogyakarta
        DB::table('cities')->insert(['id'=>36, 'province_id'=>5, 'type'=>'regencies', 'name'=>'Bantul']);
        //Kecamatan Kasihan Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>477, 'city_id'=>36, 'name'=>'Kasihan']);
        DB::table('villages')->insert(['id'=>4985, 'districts_id'=>477, 'zipcode'=>'55181', 'name'=>'Tirtonirmolo']);
        DB::table('villages')->insert(['id'=>4986, 'districts_id'=>477, 'zipcode'=>'55182', 'name'=>'Ngestiharjo']);
        DB::table('villages')->insert(['id'=>4987, 'districts_id'=>477, 'zipcode'=>'55183', 'name'=>'Tamantirto']);
        DB::table('villages')->insert(['id'=>4988, 'districts_id'=>477, 'zipcode'=>'55184', 'name'=>'Bangunjiwo']);
        //Kecamatan Sewon Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>478, 'city_id'=>36, 'name'=>'Sewon']);
        DB::table('villages')->insert(['id'=>4989, 'districts_id'=>478, 'zipcode'=>'55185', 'name'=>'Pendowoharjo']);
        DB::table('villages')->insert(['id'=>4990, 'districts_id'=>478, 'zipcode'=>'55186', 'name'=>'Timbulharjo']);
        DB::table('villages')->insert(['id'=>4991, 'districts_id'=>478, 'zipcode'=>'55188', 'name'=>'Bangunharjo']);
        DB::table('villages')->insert(['id'=>4992, 'districts_id'=>478, 'zipcode'=>'55188', 'name'=>'Panggungharjo']);
        //Kecamatan Banguntapan Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>479, 'city_id'=>36, 'name'=>'Banguntapan']);
        DB::table('villages')->insert(['id'=>4993, 'districts_id'=>479, 'zipcode'=>'55191', 'name'=>'Tamanan']);
        DB::table('villages')->insert(['id'=>4994, 'districts_id'=>479, 'zipcode'=>'55192', 'name'=>'Jagalan']);
        DB::table('villages')->insert(['id'=>4995, 'districts_id'=>479, 'zipcode'=>'55193', 'name'=>'Singosaren']);
        DB::table('villages')->insert(['id'=>4996, 'districts_id'=>479, 'zipcode'=>'55194', 'name'=>'Wirokerten']);
        DB::table('villages')->insert(['id'=>4997, 'districts_id'=>479, 'zipcode'=>'55195', 'name'=>'Jambidan']);
        DB::table('villages')->insert(['id'=>4998, 'districts_id'=>479, 'zipcode'=>'55196', 'name'=>'Potorono']);
        DB::table('villages')->insert(['id'=>4999, 'districts_id'=>479, 'zipcode'=>'55197', 'name'=>'Baturetno']);
        DB::table('villages')->insert(['id'=>5000, 'districts_id'=>479, 'zipcode'=>'55198', 'name'=>'Banguntapan']);
        //Kecamatan Bantul Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>480, 'city_id'=>36, 'name'=>'Bantul']);
        DB::table('villages')->insert(['id'=>5001, 'districts_id'=>480, 'zipcode'=>'55711', 'name'=>'Bantul']);
        DB::table('villages')->insert(['id'=>5002, 'districts_id'=>480, 'zipcode'=>'55712', 'name'=>'Ringin Harjo']);
        DB::table('villages')->insert(['id'=>5003, 'districts_id'=>480, 'zipcode'=>'55713', 'name'=>'Palbapang']);
        DB::table('villages')->insert(['id'=>5004, 'districts_id'=>480, 'zipcode'=>'55714', 'name'=>'Trirenggo']);
        DB::table('villages')->insert(['id'=>5005, 'districts_id'=>480, 'zipcode'=>'55715', 'name'=>'Sabdodadi']);
        //Kecamatan Pajangan Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>481, 'city_id'=>36, 'name'=>'Pajangan']);
        DB::table('villages')->insert(['id'=>5006, 'districts_id'=>481, 'zipcode'=>'55751', 'name'=>'Guwosari']);
        DB::table('villages')->insert(['id'=>5007, 'districts_id'=>481, 'zipcode'=>'55751', 'name'=>'Sendangsari']);
        DB::table('villages')->insert(['id'=>5008, 'districts_id'=>481, 'zipcode'=>'55751', 'name'=>'Triwidadi']);
        //Kecamatan Sedayu Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>482, 'city_id'=>36, 'name'=>'Sedayu']);
        DB::table('villages')->insert(['id'=>5009, 'districts_id'=>482, 'zipcode'=>'55752', 'name'=>'Argodadi']);
        DB::table('villages')->insert(['id'=>5010, 'districts_id'=>482, 'zipcode'=>'55752', 'name'=>'Argomulyo']);
        DB::table('villages')->insert(['id'=>5011, 'districts_id'=>482, 'zipcode'=>'55752', 'name'=>'Argorejo']);
        DB::table('villages')->insert(['id'=>5012, 'districts_id'=>482, 'zipcode'=>'55752', 'name'=>'Argosari']);
        //Kecamatan Pandak Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>483, 'city_id'=>36, 'name'=>'Pandak']);
        DB::table('villages')->insert(['id'=>5013, 'districts_id'=>483, 'zipcode'=>'55761', 'name'=>'Caturharjo']);
        DB::table('villages')->insert(['id'=>5014, 'districts_id'=>483, 'zipcode'=>'55761', 'name'=>'Gilangharjo']);
        DB::table('villages')->insert(['id'=>5015, 'districts_id'=>483, 'zipcode'=>'55761', 'name'=>'Triharjo']);
        DB::table('villages')->insert(['id'=>5016, 'districts_id'=>483, 'zipcode'=>'55761', 'name'=>'Wijirejo']);
        //Kecamatan Srandakan Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>484, 'city_id'=>36, 'name'=>'Srandakan']);
        DB::table('villages')->insert(['id'=>5017, 'districts_id'=>484, 'zipcode'=>'55762', 'name'=>'Poncosari']);
        DB::table('villages')->insert(['id'=>5018, 'districts_id'=>484, 'zipcode'=>'55762', 'name'=>'Trimurti']);
        //Kecamatan Sanden Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>485, 'city_id'=>36, 'name'=>'Sanden']);
        DB::table('villages')->insert(['id'=>5019, 'districts_id'=>485, 'zipcode'=>'55763', 'name'=>'Gadingharjo']);
        DB::table('villages')->insert(['id'=>5020, 'districts_id'=>485, 'zipcode'=>'55763', 'name'=>'Gadingsari']);
        DB::table('villages')->insert(['id'=>5021, 'districts_id'=>485, 'zipcode'=>'55763', 'name'=>'Murtigading']);
        DB::table('villages')->insert(['id'=>5022, 'districts_id'=>485, 'zipcode'=>'55763', 'name'=>'Srigading']);
        //Kecamatan Bambang Lipuro Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>486, 'city_id'=>36, 'name'=>'Bambang Lipuro']);
        DB::table('villages')->insert(['id'=>5023, 'districts_id'=>486, 'zipcode'=>'55764', 'name'=>'Mulyodadi']);
        DB::table('villages')->insert(['id'=>5024, 'districts_id'=>486, 'zipcode'=>'55764', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>5025, 'districts_id'=>486, 'zipcode'=>'55764', 'name'=>'Sumbermulyo']);
        //Kecamatan Pundong Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>487, 'city_id'=>36, 'name'=>'Pundong']);
        DB::table('villages')->insert(['id'=>5026, 'districts_id'=>487, 'zipcode'=>'55771', 'name'=>'Panjangrejo']);
        DB::table('villages')->insert(['id'=>5027, 'districts_id'=>487, 'zipcode'=>'55771', 'name'=>'Seloharjo']);
        DB::table('villages')->insert(['id'=>5028, 'districts_id'=>487, 'zipcode'=>'55771', 'name'=>'Srihardono']);
        //Kecamatan Kretek Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>488, 'city_id'=>36, 'name'=>'Kretek']);
        DB::table('villages')->insert(['id'=>5029, 'districts_id'=>488, 'zipcode'=>'55772', 'name'=>'Donotirto']);
        DB::table('villages')->insert(['id'=>5030, 'districts_id'=>488, 'zipcode'=>'55772', 'name'=>'Parangtritis']);
        DB::table('villages')->insert(['id'=>5031, 'districts_id'=>488, 'zipcode'=>'55772', 'name'=>'Tirtohargo']);
        DB::table('villages')->insert(['id'=>5032, 'districts_id'=>488, 'zipcode'=>'55772', 'name'=>'Tirtomulyo']);
        DB::table('villages')->insert(['id'=>5033, 'districts_id'=>488, 'zipcode'=>'55772', 'name'=>'Tirtosari']);
        //Kecamatan Jetis Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>489, 'city_id'=>36, 'name'=>'Jetis']);
        DB::table('villages')->insert(['id'=>5034, 'districts_id'=>489, 'zipcode'=>'55781', 'name'=>'Canden']);
        DB::table('villages')->insert(['id'=>5035, 'districts_id'=>489, 'zipcode'=>'55781', 'name'=>'Patalan']);
        DB::table('villages')->insert(['id'=>5036, 'districts_id'=>489, 'zipcode'=>'55781', 'name'=>'Sumber Agung']);
        DB::table('villages')->insert(['id'=>5037, 'districts_id'=>489, 'zipcode'=>'55781', 'name'=>'Trimulyo']);
        //Kecamatan Imogiri Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>490, 'city_id'=>36, 'name'=>'Imogiri']);
        DB::table('villages')->insert(['id'=>5038, 'districts_id'=>490, 'zipcode'=>'55782', 'name'=>'Girirejo']);
        DB::table('villages')->insert(['id'=>5039, 'districts_id'=>490, 'zipcode'=>'55782', 'name'=>'Imogiri']);
        DB::table('villages')->insert(['id'=>5040, 'districts_id'=>490, 'zipcode'=>'55782', 'name'=>'Karang Tengah']);
        DB::table('villages')->insert(['id'=>5041, 'districts_id'=>490, 'zipcode'=>'55782', 'name'=>'Karangtalun']);
        DB::table('villages')->insert(['id'=>5042, 'districts_id'=>490, 'zipcode'=>'55782', 'name'=>'Kebon Agung']);
        DB::table('villages')->insert(['id'=>5043, 'districts_id'=>490, 'zipcode'=>'55782', 'name'=>'Selopamioro']);
        DB::table('villages')->insert(['id'=>5044, 'districts_id'=>490, 'zipcode'=>'55782', 'name'=>'Sriharjo']);
        DB::table('villages')->insert(['id'=>5045, 'districts_id'=>490, 'zipcode'=>'55782', 'name'=>'Wukirsari']);
        //Kecamatan Dlingo Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>491, 'city_id'=>36, 'name'=>'Dlingo']);
        DB::table('villages')->insert(['id'=>5046, 'districts_id'=>491, 'zipcode'=>'55783', 'name'=>'Dlingo']);
        DB::table('villages')->insert(['id'=>5047, 'districts_id'=>491, 'zipcode'=>'55783', 'name'=>'Jatimulyo']);
        DB::table('villages')->insert(['id'=>5048, 'districts_id'=>491, 'zipcode'=>'55783', 'name'=>'Mangunan']);
        DB::table('villages')->insert(['id'=>5049, 'districts_id'=>491, 'zipcode'=>'55783', 'name'=>'Muntuk']);
        DB::table('villages')->insert(['id'=>5050, 'districts_id'=>491, 'zipcode'=>'55783', 'name'=>'Temuwuh']);
        DB::table('villages')->insert(['id'=>5051, 'districts_id'=>491, 'zipcode'=>'55783', 'name'=>'Terong']);
        //Kecamatan Pleret Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>492, 'city_id'=>36, 'name'=>'Pleret']);
        DB::table('villages')->insert(['id'=>5052, 'districts_id'=>492, 'zipcode'=>'55791', 'name'=>'Bawuran']);
        DB::table('villages')->insert(['id'=>5053, 'districts_id'=>492, 'zipcode'=>'55791', 'name'=>'Pleret']);
        DB::table('villages')->insert(['id'=>5054, 'districts_id'=>492, 'zipcode'=>'55791', 'name'=>'Segoroyoso']);
        DB::table('villages')->insert(['id'=>5055, 'districts_id'=>492, 'zipcode'=>'55791', 'name'=>'Wonokromo']);
        DB::table('villages')->insert(['id'=>5056, 'districts_id'=>492, 'zipcode'=>'55791', 'name'=>'Wonolelo']);
        //Kecamatan Piyungan Kab. Bantul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>493, 'city_id'=>36, 'name'=>'Piyungan']);
        DB::table('villages')->insert(['id'=>5057, 'districts_id'=>493, 'zipcode'=>'55792', 'name'=>'Sitimulyo']);
        DB::table('villages')->insert(['id'=>5058, 'districts_id'=>493, 'zipcode'=>'55792', 'name'=>'Srimartani']);
        DB::table('villages')->insert(['id'=>5059, 'districts_id'=>493, 'zipcode'=>'55792', 'name'=>'Srimulyo']);

        //Kab. Sleman Provinsi Di Yogyakarta
        DB::table('cities')->insert(['id'=>37, 'province_id'=>5, 'type'=>'regencies', 'name'=>'Sleman']);
        //Kecamatan Godean Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>494, 'city_id'=>37, 'name'=>'Godean']);
        DB::table('villages')->insert(['id'=>5060, 'districts_id'=>494, 'zipcode'=>'55264', 'name'=>'Sidoagung']);
        DB::table('villages')->insert(['id'=>5061, 'districts_id'=>494, 'zipcode'=>'55264', 'name'=>'Sidoarum']);
        DB::table('villages')->insert(['id'=>5062, 'districts_id'=>494, 'zipcode'=>'55264', 'name'=>'Sidokarto']);
        DB::table('villages')->insert(['id'=>5063, 'districts_id'=>494, 'zipcode'=>'55264', 'name'=>'Sidoluhur']);
        DB::table('villages')->insert(['id'=>5064, 'districts_id'=>494, 'zipcode'=>'55264', 'name'=>'Sidomoyo']);
        DB::table('villages')->insert(['id'=>5065, 'districts_id'=>494, 'zipcode'=>'55264', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>5066, 'districts_id'=>494, 'zipcode'=>'55264', 'name'=>'Sidorejo']);
        //Kecamatan Depok Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>495, 'city_id'=>37, 'name'=>'Depok']);
        DB::table('villages')->insert(['id'=>5067, 'districts_id'=>495, 'zipcode'=>'55281', 'name'=>'Catur Tunggal']);
        DB::table('villages')->insert(['id'=>5068, 'districts_id'=>495, 'zipcode'=>'55282', 'name'=>'Maguwoharjo']);
        DB::table('villages')->insert(['id'=>5069, 'districts_id'=>495, 'zipcode'=>'55283', 'name'=>'Condong Catur']);
        //Kecamatan Mlati Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>496, 'city_id'=>37, 'name'=>'Mlati']);
        DB::table('villages')->insert(['id'=>5070, 'districts_id'=>496, 'zipcode'=>'55284', 'name'=>'Sinduadi']);
        DB::table('villages')->insert(['id'=>5071, 'districts_id'=>496, 'zipcode'=>'55285', 'name'=>'Sendangadi']);
        DB::table('villages')->insert(['id'=>5072, 'districts_id'=>496, 'zipcode'=>'55286', 'name'=>'Tlogoadi']);
        DB::table('villages')->insert(['id'=>5073, 'districts_id'=>496, 'zipcode'=>'55287', 'name'=>'Tirtoadi']);
        DB::table('villages')->insert(['id'=>5074, 'districts_id'=>496, 'zipcode'=>'55288', 'name'=>'Sumberadi']);
        //Kecamatan Gamping Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>497, 'city_id'=>37, 'name'=>'Gamping']);
        DB::table('villages')->insert(['id'=>5075, 'districts_id'=>497, 'zipcode'=>'55291', 'name'=>'Trihanggo']);
        DB::table('villages')->insert(['id'=>5076, 'districts_id'=>497, 'zipcode'=>'55293', 'name'=>'Banyuraden']);
        DB::table('villages')->insert(['id'=>5077, 'districts_id'=>497, 'zipcode'=>'55294', 'name'=>'Ambarketawang']);
        DB::table('villages')->insert(['id'=>5078, 'districts_id'=>497, 'zipcode'=>'55295', 'name'=>'Balecatur']);
        DB::table('villages')->insert(['id'=>5079, 'districts_id'=>497, 'zipcode'=>'55592', 'name'=>'Nogotirto']);
        //Kecamatan Sleman Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>498, 'city_id'=>37, 'name'=>'Sleman']);
        DB::table('villages')->insert(['id'=>5080, 'districts_id'=>498, 'zipcode'=>'55511', 'name'=>'Tridadi']);
        DB::table('villages')->insert(['id'=>5081, 'districts_id'=>498, 'zipcode'=>'55512', 'name'=>'Pandowo Harjo']);
        DB::table('villages')->insert(['id'=>5082, 'districts_id'=>498, 'zipcode'=>'55513', 'name'=>'Tri Mulyo']);
        DB::table('villages')->insert(['id'=>5083, 'districts_id'=>498, 'zipcode'=>'55514', 'name'=>'Triharjo']);
        DB::table('villages')->insert(['id'=>5084, 'districts_id'=>498, 'zipcode'=>'55515', 'name'=>'Catur Harjo']);
        //Kecamatan Turi Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>499, 'city_id'=>37, 'name'=>'Turi']);
        DB::table('villages')->insert(['id'=>5085, 'districts_id'=>499, 'zipcode'=>'55551', 'name'=>'Bangun Kerto']);
        DB::table('villages')->insert(['id'=>5086, 'districts_id'=>499, 'zipcode'=>'55551', 'name'=>'Donokerto']);
        DB::table('villages')->insert(['id'=>5087, 'districts_id'=>499, 'zipcode'=>'55551', 'name'=>'Giri Kerto']);
        DB::table('villages')->insert(['id'=>5088, 'districts_id'=>499, 'zipcode'=>'55551', 'name'=>'Wono Kerto']);
        //Kecamatan Tempel Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>500, 'city_id'=>37, 'name'=>'Tempel']);
        DB::table('villages')->insert(['id'=>5089, 'districts_id'=>500, 'zipcode'=>'55552', 'name'=>'Banyu Rejo']);
        DB::table('villages')->insert(['id'=>5090, 'districts_id'=>500, 'zipcode'=>'55552', 'name'=>'Lumbung Rejo']);
        DB::table('villages')->insert(['id'=>5091, 'districts_id'=>500, 'zipcode'=>'55552', 'name'=>'Margo Rejo']);
        DB::table('villages')->insert(['id'=>5092, 'districts_id'=>500, 'zipcode'=>'55552', 'name'=>'Merdiko Rejo']);
        DB::table('villages')->insert(['id'=>5093, 'districts_id'=>500, 'zipcode'=>'55552', 'name'=>'Moro Rejo']);
        DB::table('villages')->insert(['id'=>5094, 'districts_id'=>500, 'zipcode'=>'55552', 'name'=>'Pondok Rejo']);
        DB::table('villages')->insert(['id'=>5095, 'districts_id'=>500, 'zipcode'=>'55552', 'name'=>'Sumber Rejo']);
        DB::table('villages')->insert(['id'=>5096, 'districts_id'=>500, 'zipcode'=>'55552', 'name'=>'Tambak Rejo']);
        //Kecamatan Seyegan Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>501, 'city_id'=>37, 'name'=>'Seyegan']);
        DB::table('villages')->insert(['id'=>5097, 'districts_id'=>501, 'zipcode'=>'55561', 'name'=>'Margoagung']);
        DB::table('villages')->insert(['id'=>5098, 'districts_id'=>501, 'zipcode'=>'55561', 'name'=>'Margodadi']);
        DB::table('villages')->insert(['id'=>5099, 'districts_id'=>501, 'zipcode'=>'55561', 'name'=>'Margokaton']);
        DB::table('villages')->insert(['id'=>5100, 'districts_id'=>501, 'zipcode'=>'55561', 'name'=>'Margoluwih']);
        DB::table('villages')->insert(['id'=>5101, 'districts_id'=>501, 'zipcode'=>'55561', 'name'=>'Margomulyo']);
        //Kecamatan Minggir Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>502, 'city_id'=>37, 'name'=>'Minggir']);
        DB::table('villages')->insert(['id'=>5102, 'districts_id'=>502, 'zipcode'=>'55562', 'name'=>'Sendang Arum']);
        DB::table('villages')->insert(['id'=>5103, 'districts_id'=>502, 'zipcode'=>'55562', 'name'=>'Sendang Mulyo']);
        DB::table('villages')->insert(['id'=>5104, 'districts_id'=>502, 'zipcode'=>'55562', 'name'=>'Sendang Rejo']);
        DB::table('villages')->insert(['id'=>5105, 'districts_id'=>502, 'zipcode'=>'55562', 'name'=>'Sendangagung']);
        DB::table('villages')->insert(['id'=>5106, 'districts_id'=>502, 'zipcode'=>'55562', 'name'=>'Sendangsari']);
        //Kecamatan Moyudan Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>503, 'city_id'=>37, 'name'=>'Moyudan']);
        DB::table('villages')->insert(['id'=>5107, 'districts_id'=>503, 'zipcode'=>'55563', 'name'=>'Sumber Agung']);
        DB::table('villages')->insert(['id'=>5108, 'districts_id'=>503, 'zipcode'=>'55563', 'name'=>'Sumberarum']);
        DB::table('villages')->insert(['id'=>5109, 'districts_id'=>503, 'zipcode'=>'55563', 'name'=>'Sumberrahayu']);
        DB::table('villages')->insert(['id'=>5110, 'districts_id'=>503, 'zipcode'=>'55563', 'name'=>'Sumbersari']);
        //Kecamatan Kalasan Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>504, 'city_id'=>37, 'name'=>'Kalasan']);
        DB::table('villages')->insert(['id'=>5111, 'districts_id'=>504, 'zipcode'=>'55571', 'name'=>'Purwo Martani']);
        DB::table('villages')->insert(['id'=>5112, 'districts_id'=>504, 'zipcode'=>'55571', 'name'=>'Selo Martani']);
        DB::table('villages')->insert(['id'=>5113, 'districts_id'=>504, 'zipcode'=>'55571', 'name'=>'Taman Martani']);
        DB::table('villages')->insert(['id'=>5114, 'districts_id'=>504, 'zipcode'=>'55571', 'name'=>'Tirto Martani']);
        //Kecamatan Prambanan Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>505, 'city_id'=>37, 'name'=>'Prambanan']);
        DB::table('villages')->insert(['id'=>5115, 'districts_id'=>505, 'zipcode'=>'55572', 'name'=>'Boko Harjo']);
        DB::table('villages')->insert(['id'=>5116, 'districts_id'=>505, 'zipcode'=>'55572', 'name'=>'Gayam Harjo']);
        DB::table('villages')->insert(['id'=>5117, 'districts_id'=>505, 'zipcode'=>'55572', 'name'=>'Madu Rejo']);
        DB::table('villages')->insert(['id'=>5118, 'districts_id'=>505, 'zipcode'=>'55572', 'name'=>'Sambi Rejo']);
        DB::table('villages')->insert(['id'=>5119, 'districts_id'=>505, 'zipcode'=>'55572', 'name'=>'Sumber Harjo']);
        DB::table('villages')->insert(['id'=>5120, 'districts_id'=>505, 'zipcode'=>'55572', 'name'=>'Wukir Harjo']);
        //Kecamatan Berbah Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>506, 'city_id'=>37, 'name'=>'Berbah']);
        DB::table('villages')->insert(['id'=>5121, 'districts_id'=>506, 'zipcode'=>'55573', 'name'=>'Jogo Tirto']);
        DB::table('villages')->insert(['id'=>5122, 'districts_id'=>506, 'zipcode'=>'55573', 'name'=>'Kali Tirto']);
        DB::table('villages')->insert(['id'=>5123, 'districts_id'=>506, 'zipcode'=>'55573', 'name'=>'Sendang Tirto']);
        DB::table('villages')->insert(['id'=>5124, 'districts_id'=>506, 'zipcode'=>'55573', 'name'=>'Tegal Tirto']);
        //Kecamatan Ngaglik Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>507, 'city_id'=>37, 'name'=>'Ngaglik']);
        DB::table('villages')->insert(['id'=>5125, 'districts_id'=>507, 'zipcode'=>'55581', 'name'=>'Donoharjo']);
        DB::table('villages')->insert(['id'=>5126, 'districts_id'=>507, 'zipcode'=>'55581', 'name'=>'Minomartani']);
        DB::table('villages')->insert(['id'=>5127, 'districts_id'=>507, 'zipcode'=>'55581', 'name'=>'Sardonoharjo']);
        DB::table('villages')->insert(['id'=>5128, 'districts_id'=>507, 'zipcode'=>'55581', 'name'=>'Sari Harjo']);
        DB::table('villages')->insert(['id'=>5129, 'districts_id'=>507, 'zipcode'=>'55581', 'name'=>'Sinduharjo']);
        DB::table('villages')->insert(['id'=>5130, 'districts_id'=>507, 'zipcode'=>'55581', 'name'=>'Suko Harjo']);
        //Kecamatan Pakem Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>508, 'city_id'=>37, 'name'=>'Pakem']);
        DB::table('villages')->insert(['id'=>5131, 'districts_id'=>508, 'zipcode'=>'55582', 'name'=>'Candi Binangun']);
        DB::table('villages')->insert(['id'=>5132, 'districts_id'=>508, 'zipcode'=>'55582', 'name'=>'Hargo Binangun']);
        DB::table('villages')->insert(['id'=>5133, 'districts_id'=>508, 'zipcode'=>'55582', 'name'=>'Harjo Binangun']);
        DB::table('villages')->insert(['id'=>5134, 'districts_id'=>508, 'zipcode'=>'55582', 'name'=>'Pakem Binangun']);
        DB::table('villages')->insert(['id'=>5135, 'districts_id'=>508, 'zipcode'=>'55582', 'name'=>'Purwo Binangun']);
        //Kecamatan Cangkringan Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>509, 'city_id'=>37, 'name'=>'Cangkringan']);
        DB::table('villages')->insert(['id'=>5136, 'districts_id'=>509, 'zipcode'=>'55583', 'name'=>'Argo Mulyo']);
        DB::table('villages')->insert(['id'=>5137, 'districts_id'=>509, 'zipcode'=>'55583', 'name'=>'Glagah Harjo']);
        DB::table('villages')->insert(['id'=>5138, 'districts_id'=>509, 'zipcode'=>'55583', 'name'=>'Kepuh Harjo']);
        DB::table('villages')->insert(['id'=>5139, 'districts_id'=>509, 'zipcode'=>'55583', 'name'=>'Umbul Harjo']);
        DB::table('villages')->insert(['id'=>5140, 'districts_id'=>509, 'zipcode'=>'55583', 'name'=>'Wukir Sari']);
        //Kecamatan Ngemplak Kab. Sleman Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>510, 'city_id'=>37, 'name'=>'Ngemplak']);
        DB::table('villages')->insert(['id'=>5141, 'districts_id'=>510, 'zipcode'=>'55584', 'name'=>'Bimo Martani']);
        DB::table('villages')->insert(['id'=>5142, 'districts_id'=>510, 'zipcode'=>'55584', 'name'=>'Sindumartani']);
        DB::table('villages')->insert(['id'=>5143, 'districts_id'=>510, 'zipcode'=>'55584', 'name'=>'Umbulmartani']);
        DB::table('villages')->insert(['id'=>5144, 'districts_id'=>510, 'zipcode'=>'55584', 'name'=>'Wedomartani']);
        DB::table('villages')->insert(['id'=>5145, 'districts_id'=>510, 'zipcode'=>'55584', 'name'=>'Widodo Martani']);

        //Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('cities')->insert(['id'=>38, 'province_id'=>5, 'type'=>'regencies', 'name'=>'Kulon Progo']);
        //Kecamatan Wates Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>511, 'city_id'=>38, 'name'=>'Wates']);
        DB::table('villages')->insert(['id'=>5146, 'districts_id'=>511, 'zipcode'=>'55651', 'name'=>'Bendungan']);
        DB::table('villages')->insert(['id'=>5147, 'districts_id'=>511, 'zipcode'=>'55651', 'name'=>'Giri Peni']);
        DB::table('villages')->insert(['id'=>5148, 'districts_id'=>511, 'zipcode'=>'55651', 'name'=>'Karang Wuni']);
        DB::table('villages')->insert(['id'=>5149, 'districts_id'=>511, 'zipcode'=>'55651', 'name'=>'Kulwaru']);
        DB::table('villages')->insert(['id'=>5150, 'districts_id'=>511, 'zipcode'=>'55651', 'name'=>'Ngestiharjo']);
        DB::table('villages')->insert(['id'=>5151, 'districts_id'=>511, 'zipcode'=>'55651', 'name'=>'Sogan']);
        DB::table('villages')->insert(['id'=>5152, 'districts_id'=>511, 'zipcode'=>'55651', 'name'=>'Triharjo']);
        DB::table('villages')->insert(['id'=>5153, 'districts_id'=>511, 'zipcode'=>'55651', 'name'=>'Wates']);
        //Kecamatan Pengasih Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>512, 'city_id'=>38, 'name'=>'Pengasih']);
        DB::table('villages')->insert(['id'=>5154, 'districts_id'=>512, 'zipcode'=>'55652', 'name'=>'Karangsari']);
        DB::table('villages')->insert(['id'=>5155, 'districts_id'=>512, 'zipcode'=>'55652', 'name'=>'Kedungsari']);
        DB::table('villages')->insert(['id'=>5156, 'districts_id'=>512, 'zipcode'=>'55652', 'name'=>'Margosari']);
        DB::table('villages')->insert(['id'=>5157, 'districts_id'=>512, 'zipcode'=>'55652', 'name'=>'Pengasih']);
        DB::table('villages')->insert(['id'=>5158, 'districts_id'=>512, 'zipcode'=>'55652', 'name'=>'Sendangsari']);
        DB::table('villages')->insert(['id'=>5159, 'districts_id'=>512, 'zipcode'=>'55652', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>5160, 'districts_id'=>512, 'zipcode'=>'55652', 'name'=>'Tawangsari']);
        //Kecamatan Kokap Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>513, 'city_id'=>38, 'name'=>'Kokap']);
        DB::table('villages')->insert(['id'=>5161, 'districts_id'=>513, 'zipcode'=>'55653', 'name'=>'Hargomulyo']);
        DB::table('villages')->insert(['id'=>5162, 'districts_id'=>513, 'zipcode'=>'55653', 'name'=>'Hargorejo']);
        DB::table('villages')->insert(['id'=>5163, 'districts_id'=>513, 'zipcode'=>'55653', 'name'=>'Hargotirto']);
        DB::table('villages')->insert(['id'=>5164, 'districts_id'=>513, 'zipcode'=>'55653', 'name'=>'Hargowilis']);
        DB::table('villages')->insert(['id'=>5165, 'districts_id'=>513, 'zipcode'=>'55653', 'name'=>'Kalirejo']);
        //Kecamatan Temon Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>514, 'city_id'=>38, 'name'=>'Temon']);
        DB::table('villages')->insert(['id'=>5166, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Demen']);
        DB::table('villages')->insert(['id'=>5167, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Glagah']);
        DB::table('villages')->insert(['id'=>5168, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Jangkaran']);
        DB::table('villages')->insert(['id'=>5169, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Janten']);
        DB::table('villages')->insert(['id'=>5170, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Kali Dengen']);
        DB::table('villages')->insert(['id'=>5171, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Kaligintung']);
        DB::table('villages')->insert(['id'=>5172, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Karang Wuluh']);
        DB::table('villages')->insert(['id'=>5173, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Kebonrejo']);
        DB::table('villages')->insert(['id'=>5174, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Kedundang']);
        DB::table('villages')->insert(['id'=>5175, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Kulur']);
        DB::table('villages')->insert(['id'=>5176, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Palihan']);
        DB::table('villages')->insert(['id'=>5177, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Plumbon']);
        DB::table('villages')->insert(['id'=>5178, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Sindutan']);
        DB::table('villages')->insert(['id'=>5179, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Temon Kulon']);
        DB::table('villages')->insert(['id'=>5180, 'districts_id'=>514, 'zipcode'=>'55654', 'name'=>'Temon Wetan']);
        //Kecamatan Panjatan Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>515, 'city_id'=>38, 'name'=>'Panjatan']);
        DB::table('villages')->insert(['id'=>5181, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Bojong']);
        DB::table('villages')->insert(['id'=>5182, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Bugel']);
        DB::table('villages')->insert(['id'=>5183, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Cerme']);
        DB::table('villages')->insert(['id'=>5184, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Depok']);
        DB::table('villages')->insert(['id'=>5185, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Garongan']);
        DB::table('villages')->insert(['id'=>5186, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Gotakan']);
        DB::table('villages')->insert(['id'=>5187, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Kanoman']);
        DB::table('villages')->insert(['id'=>5188, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Krembangan']);
        DB::table('villages')->insert(['id'=>5189, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Panjatan']);
        DB::table('villages')->insert(['id'=>5190, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Pleret']);
        DB::table('villages')->insert(['id'=>5191, 'districts_id'=>515, 'zipcode'=>'55655', 'name'=>'Tayuban']);
        //Kecamatan Galur Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>516, 'city_id'=>38, 'name'=>'Galur']);
        DB::table('villages')->insert(['id'=>5192, 'districts_id'=>516, 'zipcode'=>'55661', 'name'=>'Banaran']);
        DB::table('villages')->insert(['id'=>5193, 'districts_id'=>516, 'zipcode'=>'55661', 'name'=>'Brosot']);
        DB::table('villages')->insert(['id'=>5194, 'districts_id'=>516, 'zipcode'=>'55661', 'name'=>'Karang Sewu']);
        DB::table('villages')->insert(['id'=>5195, 'districts_id'=>516, 'zipcode'=>'55661', 'name'=>'Kranggan']);
        DB::table('villages')->insert(['id'=>5196, 'districts_id'=>516, 'zipcode'=>'55661', 'name'=>'Nomporejo']);
        DB::table('villages')->insert(['id'=>5197, 'districts_id'=>516, 'zipcode'=>'55661', 'name'=>'Pandowan']);
        DB::table('villages')->insert(['id'=>5198, 'districts_id'=>516, 'zipcode'=>'55661', 'name'=>'Tirta Rahayu']);
        //Kecamatan Lendah Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>517, 'city_id'=>38, 'name'=>'Lendah']);
        DB::table('villages')->insert(['id'=>5199, 'districts_id'=>517, 'zipcode'=>'55663', 'name'=>'Bumirejo']);
        DB::table('villages')->insert(['id'=>5200, 'districts_id'=>517, 'zipcode'=>'55663', 'name'=>'Gulurejo']);
        DB::table('villages')->insert(['id'=>5201, 'districts_id'=>517, 'zipcode'=>'55663', 'name'=>'Jatirejo']);
        DB::table('villages')->insert(['id'=>5202, 'districts_id'=>517, 'zipcode'=>'55663', 'name'=>'Ngentakrejo']);
        DB::table('villages')->insert(['id'=>5203, 'districts_id'=>517, 'zipcode'=>'55663', 'name'=>'Sidorejo']);
        DB::table('villages')->insert(['id'=>5204, 'districts_id'=>517, 'zipcode'=>'55663', 'name'=>'Wahyuharjo']);
        //Kecamatan Sentolo Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>518, 'city_id'=>38, 'name'=>'Sentolo']);
        DB::table('villages')->insert(['id'=>5205, 'districts_id'=>518, 'zipcode'=>'55664', 'name'=>'Banguncipto']);
        DB::table('villages')->insert(['id'=>5206, 'districts_id'=>518, 'zipcode'=>'55664', 'name'=>'Demangrejo']);
        DB::table('villages')->insert(['id'=>5207, 'districts_id'=>518, 'zipcode'=>'55664', 'name'=>'Kaliagung']);
        DB::table('villages')->insert(['id'=>5208, 'districts_id'=>518, 'zipcode'=>'55664', 'name'=>'Salamrejo']);
        DB::table('villages')->insert(['id'=>5209, 'districts_id'=>518, 'zipcode'=>'55664', 'name'=>'Sentolo']);
        DB::table('villages')->insert(['id'=>5210, 'districts_id'=>518, 'zipcode'=>'55664', 'name'=>'Srikayangan']);
        DB::table('villages')->insert(['id'=>5211, 'districts_id'=>518, 'zipcode'=>'55664', 'name'=>'Sukoreno']);
        DB::table('villages')->insert(['id'=>5212, 'districts_id'=>518, 'zipcode'=>'55664', 'name'=>'Tuksono']);
        //Kecamatan Nanggulan Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>519, 'city_id'=>38, 'name'=>'Nanggulan']);
        DB::table('villages')->insert(['id'=>5213, 'districts_id'=>519, 'zipcode'=>'55671', 'name'=>'Banyuroto']);
        DB::table('villages')->insert(['id'=>5214, 'districts_id'=>519, 'zipcode'=>'55671', 'name'=>'Donomulyo']);
        DB::table('villages')->insert(['id'=>5215, 'districts_id'=>519, 'zipcode'=>'55671', 'name'=>'Jati Sarono']);
        DB::table('villages')->insert(['id'=>5216, 'districts_id'=>519, 'zipcode'=>'55671', 'name'=>'Kembang']);
        DB::table('villages')->insert(['id'=>5217, 'districts_id'=>519, 'zipcode'=>'55671', 'name'=>'Tanjungharjo']);
        DB::table('villages')->insert(['id'=>5218, 'districts_id'=>519, 'zipcode'=>'55671', 'name'=>'Wijimulyo']);
        //Kecamatan Kalibawang Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>520, 'city_id'=>38, 'name'=>'Kalibawang']);
        DB::table('villages')->insert(['id'=>5219, 'districts_id'=>520, 'zipcode'=>'55672', 'name'=>'Banjararum']);
        DB::table('villages')->insert(['id'=>5220, 'districts_id'=>520, 'zipcode'=>'55672', 'name'=>'Banjarasri']);
        DB::table('villages')->insert(['id'=>5221, 'districts_id'=>520, 'zipcode'=>'55672', 'name'=>'Banjarharjo']);
        DB::table('villages')->insert(['id'=>5222, 'districts_id'=>520, 'zipcode'=>'55672', 'name'=>'Banjaroyo']);
        //Kecamatan Samigaluh Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>521, 'city_id'=>38, 'name'=>'Samigaluh']);
        DB::table('villages')->insert(['id'=>5223, 'districts_id'=>521, 'zipcode'=>'55673', 'name'=>'Banjarsari']);
        DB::table('villages')->insert(['id'=>5224, 'districts_id'=>521, 'zipcode'=>'55673', 'name'=>'Gerbosari']);
        DB::table('villages')->insert(['id'=>5225, 'districts_id'=>521, 'zipcode'=>'55673', 'name'=>'Kebon Harjo']);
        DB::table('villages')->insert(['id'=>5226, 'districts_id'=>521, 'zipcode'=>'55673', 'name'=>'Ngargosari']);
        DB::table('villages')->insert(['id'=>5227, 'districts_id'=>521, 'zipcode'=>'55673', 'name'=>'Pagerharjo']);
        DB::table('villages')->insert(['id'=>5228, 'districts_id'=>521, 'zipcode'=>'55673', 'name'=>'Purwoharjo']);
        DB::table('villages')->insert(['id'=>5229, 'districts_id'=>521, 'zipcode'=>'55673', 'name'=>'Sidoharjo']);
        //Kecamatan Girimulyo Kab. Kulon Progo Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>522, 'city_id'=>38, 'name'=>'Girimulyo']);
        DB::table('villages')->insert(['id'=>5230, 'districts_id'=>522, 'zipcode'=>'55674', 'name'=>'Giripurwo']);
        DB::table('villages')->insert(['id'=>5231, 'districts_id'=>522, 'zipcode'=>'55674', 'name'=>'Jatimulyo']);
        DB::table('villages')->insert(['id'=>5232, 'districts_id'=>522, 'zipcode'=>'55674', 'name'=>'Pendoworejo']);
        DB::table('villages')->insert(['id'=>5233, 'districts_id'=>522, 'zipcode'=>'55674', 'name'=>'Purwosari']);

        //Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('cities')->insert(['id'=>39, 'province_id'=>5, 'type'=>'regencies', 'name'=>'Gunung Kidul']);
        //Kecamatan Wonosari Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>523, 'city_id'=>39, 'name'=>'Wonosari']);
        DB::table('villages')->insert(['id'=>5234, 'districts_id'=>523, 'zipcode'=>'55811', 'name'=>'Baleharjo']);
        DB::table('villages')->insert(['id'=>5235, 'districts_id'=>523, 'zipcode'=>'55813', 'name'=>'Kepek']);
        DB::table('villages')->insert(['id'=>5236, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Duwet']);
        DB::table('villages')->insert(['id'=>5237, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Gari']);
        DB::table('villages')->insert(['id'=>5238, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Karang Rejek']);
        DB::table('villages')->insert(['id'=>5239, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Karang Tengah']);
        DB::table('villages')->insert(['id'=>5240, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Mulo']);
        DB::table('villages')->insert(['id'=>5241, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Piyaman']);
        DB::table('villages')->insert(['id'=>5242, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Pulutan']);
        DB::table('villages')->insert(['id'=>5243, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Selang']);
        DB::table('villages')->insert(['id'=>5244, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Siraman']);
        DB::table('villages')->insert(['id'=>5245, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Wareng']);
        DB::table('villages')->insert(['id'=>5246, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Wonosari']);
        DB::table('villages')->insert(['id'=>5247, 'districts_id'=>523, 'zipcode'=>'55851', 'name'=>'Wunung']);
        //Kecamatan Nglipar Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>524, 'city_id'=>39, 'name'=>'Nglipar']);
        DB::table('villages')->insert(['id'=>5248, 'districts_id'=>524, 'zipcode'=>'55852', 'name'=>'Katongan']);
        DB::table('villages')->insert(['id'=>5249, 'districts_id'=>524, 'zipcode'=>'55852', 'name'=>'Kedung Keris']);
        DB::table('villages')->insert(['id'=>5250, 'districts_id'=>524, 'zipcode'=>'55852', 'name'=>'Kedungpoh']);
        DB::table('villages')->insert(['id'=>5251, 'districts_id'=>524, 'zipcode'=>'55852', 'name'=>'Natah']);
        DB::table('villages')->insert(['id'=>5252, 'districts_id'=>524, 'zipcode'=>'55852', 'name'=>'Nglipar']);
        DB::table('villages')->insert(['id'=>5253, 'districts_id'=>524, 'zipcode'=>'55852', 'name'=>'Pengkol']);
        DB::table('villages')->insert(['id'=>5254, 'districts_id'=>524, 'zipcode'=>'55852', 'name'=>'Pilang Rejo']);
        //Kecamatan Ngawen Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>525, 'city_id'=>39, 'name'=>'Ngawen']);
        DB::table('villages')->insert(['id'=>5255, 'districts_id'=>525, 'zipcode'=>'55853', 'name'=>'Beji']);
        DB::table('villages')->insert(['id'=>5256, 'districts_id'=>525, 'zipcode'=>'55853', 'name'=>'Jurang Jero']);
        DB::table('villages')->insert(['id'=>5257, 'districts_id'=>525, 'zipcode'=>'55853', 'name'=>'Kampung']);
        DB::table('villages')->insert(['id'=>5258, 'districts_id'=>525, 'zipcode'=>'55853', 'name'=>'Sambirejo']);
        DB::table('villages')->insert(['id'=>5259, 'districts_id'=>525, 'zipcode'=>'55853', 'name'=>'Tancep']);
        DB::table('villages')->insert(['id'=>5260, 'districts_id'=>525, 'zipcode'=>'55853', 'name'=>'Watu Sigar']);
        //Kecamatan Semin Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>526, 'city_id'=>39, 'name'=>'Semin']);
        DB::table('villages')->insert(['id'=>5261, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Bendung']);
        DB::table('villages')->insert(['id'=>5262, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Bulurejo']);
        DB::table('villages')->insert(['id'=>5263, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Candi Rejo']);
        DB::table('villages')->insert(['id'=>5264, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Kalitekuk']);
        DB::table('villages')->insert(['id'=>5265, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Karang Sari']);
        DB::table('villages')->insert(['id'=>5266, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Kemejing']);
        DB::table('villages')->insert(['id'=>5267, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Pundung Sari']);
        DB::table('villages')->insert(['id'=>5268, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Rejosari']);
        DB::table('villages')->insert(['id'=>5269, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Semin']);
        DB::table('villages')->insert(['id'=>5270, 'districts_id'=>526, 'zipcode'=>'55854', 'name'=>'Sumberrejo']);
        //Kecamatan Playen Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>527, 'city_id'=>39, 'name'=>'Playen']);
        DB::table('villages')->insert(['id'=>5271, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Banaran']);
        DB::table('villages')->insert(['id'=>5272, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Bandung']);
        DB::table('villages')->insert(['id'=>5273, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Banyusoco']);
        DB::table('villages')->insert(['id'=>5274, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Bleberan']);
        DB::table('villages')->insert(['id'=>5275, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Dengok']);
        DB::table('villages')->insert(['id'=>5276, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Gading']);
        DB::table('villages')->insert(['id'=>5277, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Getas']);
        DB::table('villages')->insert(['id'=>5278, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Logandeng']);
        DB::table('villages')->insert(['id'=>5279, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Ngawu']);
        DB::table('villages')->insert(['id'=>5280, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Ngleri']);
        DB::table('villages')->insert(['id'=>5281, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Ngunut']);
        DB::table('villages')->insert(['id'=>5282, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Playen']);
        DB::table('villages')->insert(['id'=>5283, 'districts_id'=>527, 'zipcode'=>'55861', 'name'=>'Plembutan']);
        //Kecamatan Patuk Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>528, 'city_id'=>39, 'name'=>'Patuk']);
        DB::table('villages')->insert(['id'=>5284, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Beji']);
        DB::table('villages')->insert(['id'=>5285, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Bunder']);
        DB::table('villages')->insert(['id'=>5286, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Nglanggeran']);
        DB::table('villages')->insert(['id'=>5287, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Nglegi']);
        DB::table('villages')->insert(['id'=>5288, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Ngoro Oro']);
        DB::table('villages')->insert(['id'=>5289, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Patuk']);
        DB::table('villages')->insert(['id'=>5290, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Pengkok']);
        DB::table('villages')->insert(['id'=>5291, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Putat']);
        DB::table('villages')->insert(['id'=>5292, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Salam']);
        DB::table('villages')->insert(['id'=>5293, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Semoyo']);
        DB::table('villages')->insert(['id'=>5294, 'districts_id'=>528, 'zipcode'=>'55862', 'name'=>'Terbah']);
        //Kecamatan Gedang Sari Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>529, 'city_id'=>39, 'name'=>'Gedang Sari']);
        DB::table('villages')->insert(['id'=>5295, 'districts_id'=>529, 'zipcode'=>'55863', 'name'=>'Hargo Mulyo']);
        DB::table('villages')->insert(['id'=>5296, 'districts_id'=>529, 'zipcode'=>'55863', 'name'=>'Mertelu']);
        DB::table('villages')->insert(['id'=>5297, 'districts_id'=>529, 'zipcode'=>'55863', 'name'=>'Ngalang']);
        DB::table('villages')->insert(['id'=>5298, 'districts_id'=>529, 'zipcode'=>'55863', 'name'=>'Sampang']);
        DB::table('villages')->insert(['id'=>5299, 'districts_id'=>529, 'zipcode'=>'55863', 'name'=>'Serut']);
        DB::table('villages')->insert(['id'=>5300, 'districts_id'=>529, 'zipcode'=>'55863', 'name'=>'Tegalrejo']);
        DB::table('villages')->insert(['id'=>5301, 'districts_id'=>529, 'zipcode'=>'55863', 'name'=>'Watu Gajah']);
        //Kecamatan Paliyan Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>530, 'city_id'=>39, 'name'=>'Paliyan']);
        DB::table('villages')->insert(['id'=>5302, 'districts_id'=>530, 'zipcode'=>'55871', 'name'=>'Giring']);
        DB::table('villages')->insert(['id'=>5303, 'districts_id'=>530, 'zipcode'=>'55871', 'name'=>'Grogol']);
        DB::table('villages')->insert(['id'=>5304, 'districts_id'=>530, 'zipcode'=>'55871', 'name'=>'Karang Asem']);
        DB::table('villages')->insert(['id'=>5305, 'districts_id'=>530, 'zipcode'=>'55871', 'name'=>'Karang Duwet']);
        DB::table('villages')->insert(['id'=>5306, 'districts_id'=>530, 'zipcode'=>'55871', 'name'=>'Mulusan']);
        DB::table('villages')->insert(['id'=>5307, 'districts_id'=>530, 'zipcode'=>'55871', 'name'=>'Pampang']);
        DB::table('villages')->insert(['id'=>5308, 'districts_id'=>530, 'zipcode'=>'55871', 'name'=>'Sodo']);
        //Kecamatan Sapto Sari Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>531, 'city_id'=>39, 'name'=>'Sapto Sari']);
        DB::table('villages')->insert(['id'=>5309, 'districts_id'=>531, 'zipcode'=>'55871', 'name'=>'Jetis']);
        DB::table('villages')->insert(['id'=>5310, 'districts_id'=>531, 'zipcode'=>'55871', 'name'=>'Kanigoro']);
        DB::table('villages')->insert(['id'=>5311, 'districts_id'=>531, 'zipcode'=>'55871', 'name'=>'Kepek']);
        DB::table('villages')->insert(['id'=>5312, 'districts_id'=>531, 'zipcode'=>'55871', 'name'=>'Krambil Sawit']);
        DB::table('villages')->insert(['id'=>5313, 'districts_id'=>531, 'zipcode'=>'55871', 'name'=>'Monggol']);
        DB::table('villages')->insert(['id'=>5314, 'districts_id'=>531, 'zipcode'=>'55871', 'name'=>'Nglora']);
        DB::table('villages')->insert(['id'=>5315, 'districts_id'=>531, 'zipcode'=>'55871', 'name'=>'Planjan']);
        //Kecamatan Purwosari Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>532, 'city_id'=>39, 'name'=>'Purwosari']);
        DB::table('villages')->insert(['id'=>5316, 'districts_id'=>532, 'zipcode'=>'55872', 'name'=>'Giriasih']);
        DB::table('villages')->insert(['id'=>5317, 'districts_id'=>532, 'zipcode'=>'55872', 'name'=>'Giricahyo']);
        DB::table('villages')->insert(['id'=>5318, 'districts_id'=>532, 'zipcode'=>'55872', 'name'=>'Girijati']);
        DB::table('villages')->insert(['id'=>5319, 'districts_id'=>532, 'zipcode'=>'55872', 'name'=>'Giripurwo']);
        DB::table('villages')->insert(['id'=>5320, 'districts_id'=>532, 'zipcode'=>'55872', 'name'=>'Giritirto']);
        //Kecamatan Panggang Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>533, 'city_id'=>39, 'name'=>'Panggang']);
        DB::table('villages')->insert(['id'=>5321, 'districts_id'=>533, 'zipcode'=>'55872', 'name'=>'Giriharjo']);
        DB::table('villages')->insert(['id'=>5322, 'districts_id'=>533, 'zipcode'=>'55872', 'name'=>'Girikarto']);
        DB::table('villages')->insert(['id'=>5323, 'districts_id'=>533, 'zipcode'=>'55872', 'name'=>'Girimulyo']);
        DB::table('villages')->insert(['id'=>5324, 'districts_id'=>533, 'zipcode'=>'55872', 'name'=>'Girisekar']);
        DB::table('villages')->insert(['id'=>5325, 'districts_id'=>533, 'zipcode'=>'55872', 'name'=>'Girisuko']);
        DB::table('villages')->insert(['id'=>5326, 'districts_id'=>533, 'zipcode'=>'55872', 'name'=>'Giriwungu']);
        //Kecamatan Tanjungsari Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>534, 'city_id'=>39, 'name'=>'Tanjungsari']);
        DB::table('villages')->insert(['id'=>5327, 'districts_id'=>534, 'zipcode'=>'55881', 'name'=>'Banjarejo']);
        DB::table('villages')->insert(['id'=>5328, 'districts_id'=>534, 'zipcode'=>'55881', 'name'=>'Hargosari']);
        DB::table('villages')->insert(['id'=>5329, 'districts_id'=>534, 'zipcode'=>'55881', 'name'=>'Kemadang']);
        DB::table('villages')->insert(['id'=>5330, 'districts_id'=>534, 'zipcode'=>'55881', 'name'=>'Kemiri']);
        DB::table('villages')->insert(['id'=>5331, 'districts_id'=>534, 'zipcode'=>'55881', 'name'=>'Ngestirejo']);
        //Kecamatan Tepus Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>535, 'city_id'=>39, 'name'=>'Tepus']);
        DB::table('villages')->insert(['id'=>5332, 'districts_id'=>535, 'zipcode'=>'55881', 'name'=>'Giripanggung']);
        DB::table('villages')->insert(['id'=>5333, 'districts_id'=>535, 'zipcode'=>'55881', 'name'=>'Purwodadi']);
        DB::table('villages')->insert(['id'=>5334, 'districts_id'=>535, 'zipcode'=>'55881', 'name'=>'Sidoharjo']);
        DB::table('villages')->insert(['id'=>5335, 'districts_id'=>535, 'zipcode'=>'55881', 'name'=>'Sumber Wungu']);
        DB::table('villages')->insert(['id'=>5336, 'districts_id'=>535, 'zipcode'=>'55881', 'name'=>'Tepus']);
        //Kecamatan Girisubo Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>536, 'city_id'=>39, 'name'=>'Girisubo']);
        DB::table('villages')->insert(['id'=>5337, 'districts_id'=>536, 'zipcode'=>'55883', 'name'=>'Balong']);
        DB::table('villages')->insert(['id'=>5338, 'districts_id'=>536, 'zipcode'=>'55883', 'name'=>'Jepitu']);
        DB::table('villages')->insert(['id'=>5339, 'districts_id'=>536, 'zipcode'=>'55883', 'name'=>'Jerukwudel']);
        DB::table('villages')->insert(['id'=>5340, 'districts_id'=>536, 'zipcode'=>'55883', 'name'=>'Karangawen']);
        DB::table('villages')->insert(['id'=>5341, 'districts_id'=>536, 'zipcode'=>'55883', 'name'=>'Nglindur']);
        DB::table('villages')->insert(['id'=>5342, 'districts_id'=>536, 'zipcode'=>'55883', 'name'=>'Pucung']);
        DB::table('villages')->insert(['id'=>5343, 'districts_id'=>536, 'zipcode'=>'55883', 'name'=>'Songbanyu']);
        DB::table('villages')->insert(['id'=>5344, 'districts_id'=>536, 'zipcode'=>'55883', 'name'=>'Tileng']);
        //Kecamatan Rongkop Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>537, 'city_id'=>39, 'name'=>'Rongkop']);
        DB::table('villages')->insert(['id'=>5345, 'districts_id'=>537, 'zipcode'=>'55883', 'name'=>'Bohol']);
        DB::table('villages')->insert(['id'=>5346, 'districts_id'=>537, 'zipcode'=>'55883', 'name'=>'Botodayakan (botodayaan)']);
        DB::table('villages')->insert(['id'=>5347, 'districts_id'=>537, 'zipcode'=>'55883', 'name'=>'Karangwuni']);
        DB::table('villages')->insert(['id'=>5348, 'districts_id'=>537, 'zipcode'=>'55883', 'name'=>'Melikan']);
        DB::table('villages')->insert(['id'=>5349, 'districts_id'=>537, 'zipcode'=>'55883', 'name'=>'Petir']);
        DB::table('villages')->insert(['id'=>5350, 'districts_id'=>537, 'zipcode'=>'55883', 'name'=>'Pringombo']);
        DB::table('villages')->insert(['id'=>5351, 'districts_id'=>537, 'zipcode'=>'55883', 'name'=>'Pucanganom']);
        DB::table('villages')->insert(['id'=>5352, 'districts_id'=>537, 'zipcode'=>'55883', 'name'=>'Semugih']);
        //Kecamatan Karangmojo Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>538, 'city_id'=>39, 'name'=>'Karangmojo']);
        DB::table('villages')->insert(['id'=>5353, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Bejiharjo']);
        DB::table('villages')->insert(['id'=>5354, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Bendungan']);
        DB::table('villages')->insert(['id'=>5355, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Gedang Rejo']);
        DB::table('villages')->insert(['id'=>5356, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Jati Ayu']);
        DB::table('villages')->insert(['id'=>5357, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Karangmojo']);
        DB::table('villages')->insert(['id'=>5358, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Kelor']);
        DB::table('villages')->insert(['id'=>5359, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Ngawis']);
        DB::table('villages')->insert(['id'=>5360, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Ngipak']);
        DB::table('villages')->insert(['id'=>5361, 'districts_id'=>538, 'zipcode'=>'55891', 'name'=>'Wiladeg']);
        //Kecamatan Ponjong Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>539, 'city_id'=>39, 'name'=>'Ponjong']);
        DB::table('villages')->insert(['id'=>5362, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Bedoyo']);
        DB::table('villages')->insert(['id'=>5363, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Genjahan']);
        DB::table('villages')->insert(['id'=>5364, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Gombang']);
        DB::table('villages')->insert(['id'=>5365, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Karang Asem']);
        DB::table('villages')->insert(['id'=>5366, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Kenteng']);
        DB::table('villages')->insert(['id'=>5367, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Ponjong']);
        DB::table('villages')->insert(['id'=>5368, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Sawahan']);
        DB::table('villages')->insert(['id'=>5369, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Sidorejo']);
        DB::table('villages')->insert(['id'=>5370, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Sumber Giri']);
        DB::table('villages')->insert(['id'=>5371, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Tambakromo']);
        DB::table('villages')->insert(['id'=>5372, 'districts_id'=>539, 'zipcode'=>'55892', 'name'=>'Umbul Rejo']);
        //Kecamatan Semanu Kab. Gunung Kidul Provinsi Di Yogyakarta
        DB::table('districts')->insert(['id'=>540, 'city_id'=>39, 'name'=>'Semanu']);
        DB::table('villages')->insert(['id'=>5373, 'districts_id'=>540, 'zipcode'=>'55893', 'name'=>'Candirejo']);
        DB::table('villages')->insert(['id'=>5374, 'districts_id'=>540, 'zipcode'=>'55893', 'name'=>'Dadapayu']);
        DB::table('villages')->insert(['id'=>5375, 'districts_id'=>540, 'zipcode'=>'55893', 'name'=>'Ngeposari']);
        DB::table('villages')->insert(['id'=>5376, 'districts_id'=>540, 'zipcode'=>'55893', 'name'=>'Pacarejo']);
        DB::table('villages')->insert(['id'=>5377, 'districts_id'=>540, 'zipcode'=>'55893', 'name'=>'Semanu']);
    }
}
