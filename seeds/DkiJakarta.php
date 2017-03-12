<?php

use Illuminate\Database\Seeder;

class DkiJakarta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 DB::table('provinces')->insert(['id'=>6, 'name'=>'Dki Jakarta']);

        //Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('cities')->insert(['id'=>40, 'province_id'=>6, 'type'=>'city', 'name'=>'Jakarta Pusat']);
        //Kecamatan Gambir Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>541, 'city_id'=>40, 'name'=>'Gambir']);
        DB::table('villages')->insert(['id'=>5378, 'districts_id'=>541, 'zipcode'=>'10110', 'name'=>'Gambir']);
        DB::table('villages')->insert(['id'=>5379, 'districts_id'=>541, 'zipcode'=>'10120', 'name'=>'Kebon Kelapa']);
        DB::table('villages')->insert(['id'=>5380, 'districts_id'=>541, 'zipcode'=>'10130', 'name'=>'Petojo Utara']);
        DB::table('villages')->insert(['id'=>5381, 'districts_id'=>541, 'zipcode'=>'10140', 'name'=>'Duri Pulo']);
        DB::table('villages')->insert(['id'=>5382, 'districts_id'=>541, 'zipcode'=>'10150', 'name'=>'Cideng']);
        DB::table('villages')->insert(['id'=>5383, 'districts_id'=>541, 'zipcode'=>'10160', 'name'=>'Petojo Selatan']);
        //Kecamatan Tanah Abang Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>542, 'city_id'=>40, 'name'=>'Tanah Abang']);
        DB::table('villages')->insert(['id'=>5384, 'districts_id'=>542, 'zipcode'=>'10210', 'name'=>'Bendungan Hilir']);
        DB::table('villages')->insert(['id'=>5385, 'districts_id'=>542, 'zipcode'=>'10220', 'name'=>'Karet Tengsin']);
        DB::table('villages')->insert(['id'=>5386, 'districts_id'=>542, 'zipcode'=>'10230', 'name'=>'Kebon Melati']);
        DB::table('villages')->insert(['id'=>5387, 'districts_id'=>542, 'zipcode'=>'10240', 'name'=>'Kebon Kacang']);
        DB::table('villages')->insert(['id'=>5388, 'districts_id'=>542, 'zipcode'=>'10250', 'name'=>'Kampung Bali']);
        DB::table('villages')->insert(['id'=>5389, 'districts_id'=>542, 'zipcode'=>'10260', 'name'=>'Petamburan']);
        DB::table('villages')->insert(['id'=>5390, 'districts_id'=>542, 'zipcode'=>'10270', 'name'=>'Gelora']);
        //Kecamatan Menteng Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>543, 'city_id'=>40, 'name'=>'Menteng']);
        DB::table('villages')->insert(['id'=>5391, 'districts_id'=>543, 'zipcode'=>'10310', 'name'=>'Menteng']);
        DB::table('villages')->insert(['id'=>5392, 'districts_id'=>543, 'zipcode'=>'10320', 'name'=>'Pegangsaan']);
        DB::table('villages')->insert(['id'=>5393, 'districts_id'=>543, 'zipcode'=>'10330', 'name'=>'Cikini']);
        DB::table('villages')->insert(['id'=>5394, 'districts_id'=>543, 'zipcode'=>'10340', 'name'=>'Kebon Sirih']);
        DB::table('villages')->insert(['id'=>5395, 'districts_id'=>543, 'zipcode'=>'10350', 'name'=>'Gondangdia']);
        //Kecamatan Senen Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>544, 'city_id'=>40, 'name'=>'Senen']);
        DB::table('villages')->insert(['id'=>5396, 'districts_id'=>544, 'zipcode'=>'10410', 'name'=>'Senen']);
        DB::table('villages')->insert(['id'=>5397, 'districts_id'=>544, 'zipcode'=>'10420', 'name'=>'Kwitang']);
        DB::table('villages')->insert(['id'=>5398, 'districts_id'=>544, 'zipcode'=>'10430', 'name'=>'Kenari']);
        DB::table('villages')->insert(['id'=>5399, 'districts_id'=>544, 'zipcode'=>'10440', 'name'=>'Paseban']);
        DB::table('villages')->insert(['id'=>5400, 'districts_id'=>544, 'zipcode'=>'10450', 'name'=>'Kramat']);
        DB::table('villages')->insert(['id'=>5401, 'districts_id'=>544, 'zipcode'=>'10460', 'name'=>'Bungur']);
        //Kecamatan Cempaka Putih Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>545, 'city_id'=>40, 'name'=>'Cempaka Putih']);
        DB::table('villages')->insert(['id'=>5402, 'districts_id'=>545, 'zipcode'=>'10510', 'name'=>'Cempaka Putih Timur']);
        DB::table('villages')->insert(['id'=>5403, 'districts_id'=>545, 'zipcode'=>'10520', 'name'=>'Cempaka Putih Barat']);
        DB::table('villages')->insert(['id'=>5404, 'districts_id'=>545, 'zipcode'=>'10570', 'name'=>'Rawasari']);
        //Kecamatan Johar Baru Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>546, 'city_id'=>40, 'name'=>'Johar Baru']);
        DB::table('villages')->insert(['id'=>5405, 'districts_id'=>546, 'zipcode'=>'10530', 'name'=>'Galur']);
        DB::table('villages')->insert(['id'=>5406, 'districts_id'=>546, 'zipcode'=>'10540', 'name'=>'Tanah Tinggi']);
        DB::table('villages')->insert(['id'=>5407, 'districts_id'=>546, 'zipcode'=>'10550', 'name'=>'Kampung Rawa']);
        DB::table('villages')->insert(['id'=>5408, 'districts_id'=>546, 'zipcode'=>'10560', 'name'=>'Johar Baru']);
        //Kecamatan Kemayoran Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>547, 'city_id'=>40, 'name'=>'Kemayoran']);
        DB::table('villages')->insert(['id'=>5409, 'districts_id'=>547, 'zipcode'=>'10610', 'name'=>'Gunung Sahari Selatan']);
        DB::table('villages')->insert(['id'=>5410, 'districts_id'=>547, 'zipcode'=>'10620', 'name'=>'Kemayoran']);
        DB::table('villages')->insert(['id'=>5411, 'districts_id'=>547, 'zipcode'=>'10630', 'name'=>'Kebon Kosong']);
        DB::table('villages')->insert(['id'=>5412, 'districts_id'=>547, 'zipcode'=>'10640', 'name'=>'Cempaka Baru']);
        DB::table('villages')->insert(['id'=>5413, 'districts_id'=>547, 'zipcode'=>'10640', 'name'=>'Harapan Mulya']);
        DB::table('villages')->insert(['id'=>5414, 'districts_id'=>547, 'zipcode'=>'10640', 'name'=>'Sumur Batu']);
        DB::table('villages')->insert(['id'=>5415, 'districts_id'=>547, 'zipcode'=>'10650', 'name'=>'Serdang']);
        DB::table('villages')->insert(['id'=>5416, 'districts_id'=>547, 'zipcode'=>'10650', 'name'=>'Utan Panjang']);
        //Kecamatan Sawah Besar Kota Jakarta Pusat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>548, 'city_id'=>40, 'name'=>'Sawah Besar']);
        DB::table('villages')->insert(['id'=>5417, 'districts_id'=>548, 'zipcode'=>'10710', 'name'=>'Pasar Baru']);
        DB::table('villages')->insert(['id'=>5418, 'districts_id'=>548, 'zipcode'=>'10720', 'name'=>'Gunung Sahari Utara']);
        DB::table('villages')->insert(['id'=>5419, 'districts_id'=>548, 'zipcode'=>'10730', 'name'=>'Mangga Dua Selatan']);
        DB::table('villages')->insert(['id'=>5420, 'districts_id'=>548, 'zipcode'=>'10740', 'name'=>'Karang Anyar']);
        DB::table('villages')->insert(['id'=>5421, 'districts_id'=>548, 'zipcode'=>'10750', 'name'=>'Kartini']);

        //Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('cities')->insert(['id'=>41, 'province_id'=>6, 'type'=>'city', 'name'=>'Jakarta Barat']);
        //Kecamatan Taman Sari Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>549, 'city_id'=>41, 'name'=>'Taman Sari']);
        DB::table('villages')->insert(['id'=>5422, 'districts_id'=>549, 'zipcode'=>'11110', 'name'=>'Pinangsia']);
        DB::table('villages')->insert(['id'=>5423, 'districts_id'=>549, 'zipcode'=>'11120', 'name'=>'Glodok']);
        DB::table('villages')->insert(['id'=>5424, 'districts_id'=>549, 'zipcode'=>'11130', 'name'=>'Keagungan']);
        DB::table('villages')->insert(['id'=>5425, 'districts_id'=>549, 'zipcode'=>'11140', 'name'=>'Krukut']);
        DB::table('villages')->insert(['id'=>5426, 'districts_id'=>549, 'zipcode'=>'11150', 'name'=>'Taman Sari']);
        DB::table('villages')->insert(['id'=>5427, 'districts_id'=>549, 'zipcode'=>'11160', 'name'=>'Maphar']);
        DB::table('villages')->insert(['id'=>5428, 'districts_id'=>549, 'zipcode'=>'11170', 'name'=>'Tangki']);
        DB::table('villages')->insert(['id'=>5429, 'districts_id'=>549, 'zipcode'=>'11180', 'name'=>'Mangga Besar']);
        //Kecamatan Tambora Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>550, 'city_id'=>41, 'name'=>'Tambora']);
        DB::table('villages')->insert(['id'=>5430, 'districts_id'=>550, 'zipcode'=>'11210', 'name'=>'Tanah Sereal']);
        DB::table('villages')->insert(['id'=>5431, 'districts_id'=>550, 'zipcode'=>'11220', 'name'=>'Tambora']);
        DB::table('villages')->insert(['id'=>5432, 'districts_id'=>550, 'zipcode'=>'11230', 'name'=>'Roa Malaka']);
        DB::table('villages')->insert(['id'=>5433, 'districts_id'=>550, 'zipcode'=>'11240', 'name'=>'Pekojan']);
        DB::table('villages')->insert(['id'=>5434, 'districts_id'=>550, 'zipcode'=>'11250', 'name'=>'Jembatan Lima']);
        DB::table('villages')->insert(['id'=>5435, 'districts_id'=>550, 'zipcode'=>'11260', 'name'=>'Krendang']);
        DB::table('villages')->insert(['id'=>5436, 'districts_id'=>550, 'zipcode'=>'11270', 'name'=>'Duri Selatan']);
        DB::table('villages')->insert(['id'=>5437, 'districts_id'=>550, 'zipcode'=>'11270', 'name'=>'Duri Utara']);
        DB::table('villages')->insert(['id'=>5438, 'districts_id'=>550, 'zipcode'=>'11310', 'name'=>'Kali Anyar']);
        DB::table('villages')->insert(['id'=>5439, 'districts_id'=>550, 'zipcode'=>'11320', 'name'=>'Jembatan Besi']);
        DB::table('villages')->insert(['id'=>5440, 'districts_id'=>550, 'zipcode'=>'11330', 'name'=>'Angke']);
        //Kecamatan Palmerah Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>551, 'city_id'=>41, 'name'=>'Palmerah']);
        DB::table('villages')->insert(['id'=>5441, 'districts_id'=>551, 'zipcode'=>'11410', 'name'=>'Slipi']);
        DB::table('villages')->insert(['id'=>5442, 'districts_id'=>551, 'zipcode'=>'11420', 'name'=>'Kota Bambu Selatan']);
        DB::table('villages')->insert(['id'=>5443, 'districts_id'=>551, 'zipcode'=>'11420', 'name'=>'Kota Bambu Utara']);
        DB::table('villages')->insert(['id'=>5444, 'districts_id'=>551, 'zipcode'=>'11430', 'name'=>'Jatipulo']);
        DB::table('villages')->insert(['id'=>5445, 'districts_id'=>551, 'zipcode'=>'11480', 'name'=>'Kemanggisan']);
        DB::table('villages')->insert(['id'=>5446, 'districts_id'=>551, 'zipcode'=>'11480', 'name'=>'Palmerah']);
        //Kecamatan Grogol Petamburan Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>552, 'city_id'=>41, 'name'=>'Grogol Petamburan']);
        DB::table('villages')->insert(['id'=>5447, 'districts_id'=>552, 'zipcode'=>'11440', 'name'=>'Tomang']);
        DB::table('villages')->insert(['id'=>5448, 'districts_id'=>552, 'zipcode'=>'11450', 'name'=>'Grogol']);
        DB::table('villages')->insert(['id'=>5449, 'districts_id'=>552, 'zipcode'=>'11460', 'name'=>'Jelambar']);
        DB::table('villages')->insert(['id'=>5450, 'districts_id'=>552, 'zipcode'=>'11460', 'name'=>'Jelambar Baru']);
        DB::table('villages')->insert(['id'=>5451, 'districts_id'=>552, 'zipcode'=>'11460', 'name'=>'Wijaya Kusuma']);
        DB::table('villages')->insert(['id'=>5452, 'districts_id'=>552, 'zipcode'=>'11470', 'name'=>'Tanjung Duren Selatan']);
        DB::table('villages')->insert(['id'=>5453, 'districts_id'=>552, 'zipcode'=>'11470', 'name'=>'Tanjung Duren Utara']);
        //Kecamatan Kebon Jeruk Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>553, 'city_id'=>41, 'name'=>'Kebon Jeruk']);
        DB::table('villages')->insert(['id'=>5454, 'districts_id'=>553, 'zipcode'=>'11510', 'name'=>'Duri Kepa']);
        DB::table('villages')->insert(['id'=>5455, 'districts_id'=>553, 'zipcode'=>'11520', 'name'=>'Kedoya Selatan']);
        DB::table('villages')->insert(['id'=>5456, 'districts_id'=>553, 'zipcode'=>'11520', 'name'=>'Kedoya Utara']);
        DB::table('villages')->insert(['id'=>5457, 'districts_id'=>553, 'zipcode'=>'11530', 'name'=>'Kebon Jeruk']);
        DB::table('villages')->insert(['id'=>5458, 'districts_id'=>553, 'zipcode'=>'11540', 'name'=>'Sukabumi Utara (ilir)']);
        DB::table('villages')->insert(['id'=>5459, 'districts_id'=>553, 'zipcode'=>'11550', 'name'=>'Kelapa Dua']);
        DB::table('villages')->insert(['id'=>5460, 'districts_id'=>553, 'zipcode'=>'11560', 'name'=>'Sukabumi Selatan (udik)']);
        //Kecamatan Kembangan Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>554, 'city_id'=>41, 'name'=>'Kembangan']);
        DB::table('villages')->insert(['id'=>5461, 'districts_id'=>554, 'zipcode'=>'11610', 'name'=>'Kembangan Selatan']);
        DB::table('villages')->insert(['id'=>5462, 'districts_id'=>554, 'zipcode'=>'11610', 'name'=>'Kembangan Utara']);
        DB::table('villages')->insert(['id'=>5463, 'districts_id'=>554, 'zipcode'=>'11620', 'name'=>'Meruya Utara (ilir)']);
        DB::table('villages')->insert(['id'=>5464, 'districts_id'=>554, 'zipcode'=>'11630', 'name'=>'Srengseng']);
        DB::table('villages')->insert(['id'=>5465, 'districts_id'=>554, 'zipcode'=>'11640', 'name'=>'Joglo']);
        DB::table('villages')->insert(['id'=>5466, 'districts_id'=>554, 'zipcode'=>'11650', 'name'=>'Meruya Selatan (udik)']);
        //Kecamatan Cengkareng Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>555, 'city_id'=>41, 'name'=>'Cengkareng']);
        DB::table('villages')->insert(['id'=>5467, 'districts_id'=>555, 'zipcode'=>'11710', 'name'=>'Kedaung Kali Angke']);
        DB::table('villages')->insert(['id'=>5468, 'districts_id'=>555, 'zipcode'=>'11720', 'name'=>'Kapuk']);
        DB::table('villages')->insert(['id'=>5469, 'districts_id'=>555, 'zipcode'=>'11730', 'name'=>'Cengkareng Barat']);
        DB::table('villages')->insert(['id'=>5470, 'districts_id'=>555, 'zipcode'=>'11730', 'name'=>'Cengkareng Timur']);
        DB::table('villages')->insert(['id'=>5471, 'districts_id'=>555, 'zipcode'=>'11740', 'name'=>'Rawa Buaya']);
        DB::table('villages')->insert(['id'=>5472, 'districts_id'=>555, 'zipcode'=>'11750', 'name'=>'Duri Kosambi']);
        //Kecamatan Kalideres Kota Jakarta Barat Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>556, 'city_id'=>41, 'name'=>'Kalideres']);
        DB::table('villages')->insert(['id'=>5473, 'districts_id'=>556, 'zipcode'=>'11810', 'name'=>'Kamal']);
        DB::table('villages')->insert(['id'=>5474, 'districts_id'=>556, 'zipcode'=>'11820', 'name'=>'Tegal Alur']);
        DB::table('villages')->insert(['id'=>5475, 'districts_id'=>556, 'zipcode'=>'11830', 'name'=>'Pegadungan']);
        DB::table('villages')->insert(['id'=>5476, 'districts_id'=>556, 'zipcode'=>'11840', 'name'=>'Kalideres']);
        DB::table('villages')->insert(['id'=>5477, 'districts_id'=>556, 'zipcode'=>'11850', 'name'=>'Semanan']);

        //Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('cities')->insert(['id'=>42, 'province_id'=>6, 'type'=>'city', 'name'=>'Jakarta Selatan']);
        //Kecamatan Kebayoran Baru Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>557, 'city_id'=>42, 'name'=>'Kebayoran Baru']);
        DB::table('villages')->insert(['id'=>5478, 'districts_id'=>557, 'zipcode'=>'12110', 'name'=>'Selong']);
        DB::table('villages')->insert(['id'=>5479, 'districts_id'=>557, 'zipcode'=>'12120', 'name'=>'Gunung']);
        DB::table('villages')->insert(['id'=>5480, 'districts_id'=>557, 'zipcode'=>'12130', 'name'=>'Kramat Pela']);
        DB::table('villages')->insert(['id'=>5481, 'districts_id'=>557, 'zipcode'=>'12140', 'name'=>'Gandaria Utara']);
        DB::table('villages')->insert(['id'=>5482, 'districts_id'=>557, 'zipcode'=>'12150', 'name'=>'Cipete Utara']);
        DB::table('villages')->insert(['id'=>5483, 'districts_id'=>557, 'zipcode'=>'12160', 'name'=>'Melawai']);
        DB::table('villages')->insert(['id'=>5484, 'districts_id'=>557, 'zipcode'=>'12160', 'name'=>'Pulo']);
        DB::table('villages')->insert(['id'=>5485, 'districts_id'=>557, 'zipcode'=>'12170', 'name'=>'Petogogan']);
        DB::table('villages')->insert(['id'=>5486, 'districts_id'=>557, 'zipcode'=>'12180', 'name'=>'Rawa Barat']);
        DB::table('villages')->insert(['id'=>5487, 'districts_id'=>557, 'zipcode'=>'12190', 'name'=>'Senayan']);
        //Kecamatan Kebayoran Lama Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>558, 'city_id'=>42, 'name'=>'Kebayoran Lama']);
        DB::table('villages')->insert(['id'=>5488, 'districts_id'=>558, 'zipcode'=>'12210', 'name'=>'Grogol Utara']);
        DB::table('villages')->insert(['id'=>5489, 'districts_id'=>558, 'zipcode'=>'12220', 'name'=>'Grogol Selatan']);
        DB::table('villages')->insert(['id'=>5490, 'districts_id'=>558, 'zipcode'=>'12230', 'name'=>'Cipulir']);
        DB::table('villages')->insert(['id'=>5491, 'districts_id'=>558, 'zipcode'=>'12240', 'name'=>'Kebayoran Lama Selatan']);
        DB::table('villages')->insert(['id'=>5492, 'districts_id'=>558, 'zipcode'=>'12240', 'name'=>'Kebayoran Lama Utara']);
        DB::table('villages')->insert(['id'=>5493, 'districts_id'=>558, 'zipcode'=>'12310', 'name'=>'Pondok Pinang']);
        //Kecamatan Pesanggrahan Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>559, 'city_id'=>42, 'name'=>'Pesanggrahan']);
        DB::table('villages')->insert(['id'=>5494, 'districts_id'=>559, 'zipcode'=>'12250', 'name'=>'Ulujami']);
        DB::table('villages')->insert(['id'=>5495, 'districts_id'=>559, 'zipcode'=>'12260', 'name'=>'Petukangan Utara']);
        DB::table('villages')->insert(['id'=>5496, 'districts_id'=>559, 'zipcode'=>'12270', 'name'=>'Petukangan Selatan']);
        DB::table('villages')->insert(['id'=>5497, 'districts_id'=>559, 'zipcode'=>'12320', 'name'=>'Pesanggrahan']);
        DB::table('villages')->insert(['id'=>5498, 'districts_id'=>559, 'zipcode'=>'12330', 'name'=>'Bintaro']);
        //Kecamatan Cilandak Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>560, 'city_id'=>42, 'name'=>'Cilandak']);
        DB::table('villages')->insert(['id'=>5499, 'districts_id'=>560, 'zipcode'=>'12410', 'name'=>'Cipete Selatan']);
        DB::table('villages')->insert(['id'=>5500, 'districts_id'=>560, 'zipcode'=>'12420', 'name'=>'Gandaria Selatan']);
        DB::table('villages')->insert(['id'=>5501, 'districts_id'=>560, 'zipcode'=>'12430', 'name'=>'Cilandak Barat']);
        DB::table('villages')->insert(['id'=>5502, 'districts_id'=>560, 'zipcode'=>'12440', 'name'=>'Lebak Bulus']);
        DB::table('villages')->insert(['id'=>5503, 'districts_id'=>560, 'zipcode'=>'12450', 'name'=>'Pondok Labu']);
        //Kecamatan Pasar Minggu Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>561, 'city_id'=>42, 'name'=>'Pasar Minggu']);
        DB::table('villages')->insert(['id'=>5504, 'districts_id'=>561, 'zipcode'=>'12510', 'name'=>'Pejaten Barat']);
        DB::table('villages')->insert(['id'=>5505, 'districts_id'=>561, 'zipcode'=>'12510', 'name'=>'Pejaten Timur']);
        DB::table('villages')->insert(['id'=>5506, 'districts_id'=>561, 'zipcode'=>'12520', 'name'=>'Kebagusan']);
        DB::table('villages')->insert(['id'=>5507, 'districts_id'=>561, 'zipcode'=>'12520', 'name'=>'Pasar Minggu']);
        DB::table('villages')->insert(['id'=>5508, 'districts_id'=>561, 'zipcode'=>'12540', 'name'=>'Jati Padang']);
        DB::table('villages')->insert(['id'=>5509, 'districts_id'=>561, 'zipcode'=>'12550', 'name'=>'Ragunan']);
        DB::table('villages')->insert(['id'=>5510, 'districts_id'=>561, 'zipcode'=>'12560', 'name'=>'Cilandak Timur']);
        //Kecamatan Jagakarsa Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>562, 'city_id'=>42, 'name'=>'Jagakarsa']);
        DB::table('villages')->insert(['id'=>5511, 'districts_id'=>562, 'zipcode'=>'12530', 'name'=>'Tanjung Barat']);
        DB::table('villages')->insert(['id'=>5512, 'districts_id'=>562, 'zipcode'=>'12620', 'name'=>'Jagakarsa']);
        DB::table('villages')->insert(['id'=>5513, 'districts_id'=>562, 'zipcode'=>'12630', 'name'=>'Ciganjur']);
        DB::table('villages')->insert(['id'=>5514, 'districts_id'=>562, 'zipcode'=>'12630', 'name'=>'Cipedak']);
        DB::table('villages')->insert(['id'=>5515, 'districts_id'=>562, 'zipcode'=>'12630', 'name'=>'Lenteng Agung']);
        DB::table('villages')->insert(['id'=>5516, 'districts_id'=>562, 'zipcode'=>'12640', 'name'=>'Srengseng Sawah']);
        //Kecamatan Mampang Prapatan Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>563, 'city_id'=>42, 'name'=>'Mampang Prapatan']);
        DB::table('villages')->insert(['id'=>5517, 'districts_id'=>563, 'zipcode'=>'12710', 'name'=>'Kuningan Barat']);
        DB::table('villages')->insert(['id'=>5518, 'districts_id'=>563, 'zipcode'=>'12720', 'name'=>'Pela Mampang']);
        DB::table('villages')->insert(['id'=>5519, 'districts_id'=>563, 'zipcode'=>'12730', 'name'=>'Bangka']);
        DB::table('villages')->insert(['id'=>5520, 'districts_id'=>563, 'zipcode'=>'12790', 'name'=>'Mampang Prapatan']);
        DB::table('villages')->insert(['id'=>5521, 'districts_id'=>563, 'zipcode'=>'12790', 'name'=>'Tegal Parang']);
        //Kecamatan Pancoran Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>564, 'city_id'=>42, 'name'=>'Pancoran']);
        DB::table('villages')->insert(['id'=>5522, 'districts_id'=>564, 'zipcode'=>'12740', 'name'=>'Kalibata']);
        DB::table('villages')->insert(['id'=>5523, 'districts_id'=>564, 'zipcode'=>'12750', 'name'=>'Rawa Jati']);
        DB::table('villages')->insert(['id'=>5524, 'districts_id'=>564, 'zipcode'=>'12760', 'name'=>'Duren Tiga']);
        DB::table('villages')->insert(['id'=>5525, 'districts_id'=>564, 'zipcode'=>'12770', 'name'=>'Cikoko']);
        DB::table('villages')->insert(['id'=>5526, 'districts_id'=>564, 'zipcode'=>'12770', 'name'=>'Pengadegan']);
        DB::table('villages')->insert(['id'=>5527, 'districts_id'=>564, 'zipcode'=>'12780', 'name'=>'Pancoran']);
        //Kecamatan Tebet Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>565, 'city_id'=>42, 'name'=>'Tebet']);
        DB::table('villages')->insert(['id'=>5528, 'districts_id'=>565, 'zipcode'=>'12810', 'name'=>'Tebet Barat']);
        DB::table('villages')->insert(['id'=>5529, 'districts_id'=>565, 'zipcode'=>'12820', 'name'=>'Tebet Timur']);
        DB::table('villages')->insert(['id'=>5530, 'districts_id'=>565, 'zipcode'=>'12830', 'name'=>'Kebon Baru']);
        DB::table('villages')->insert(['id'=>5531, 'districts_id'=>565, 'zipcode'=>'12840', 'name'=>'Bukit Duri']);
        DB::table('villages')->insert(['id'=>5532, 'districts_id'=>565, 'zipcode'=>'12850', 'name'=>'Manggarai']);
        DB::table('villages')->insert(['id'=>5533, 'districts_id'=>565, 'zipcode'=>'12860', 'name'=>'Manggarai Selatan']);
        DB::table('villages')->insert(['id'=>5534, 'districts_id'=>565, 'zipcode'=>'12870', 'name'=>'Menteng Dalam']);
        //Kecamatan Setia Budi Kota Jakarta Selatan Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>566, 'city_id'=>42, 'name'=>'Setia Budi']);
        DB::table('villages')->insert(['id'=>5535, 'districts_id'=>566, 'zipcode'=>'12910', 'name'=>'Setiabudi']);
        DB::table('villages')->insert(['id'=>5536, 'districts_id'=>566, 'zipcode'=>'12920', 'name'=>'Karet']);
        DB::table('villages')->insert(['id'=>5537, 'districts_id'=>566, 'zipcode'=>'12930', 'name'=>'Karet Semanggi']);
        DB::table('villages')->insert(['id'=>5538, 'districts_id'=>566, 'zipcode'=>'12940', 'name'=>'Karet Kuningan']);
        DB::table('villages')->insert(['id'=>5539, 'districts_id'=>566, 'zipcode'=>'12950', 'name'=>'Kuningan Timur']);
        DB::table('villages')->insert(['id'=>5540, 'districts_id'=>566, 'zipcode'=>'12960', 'name'=>'Menteng Atas']);
        DB::table('villages')->insert(['id'=>5541, 'districts_id'=>566, 'zipcode'=>'12970', 'name'=>'Pasar Manggis']);
        DB::table('villages')->insert(['id'=>5542, 'districts_id'=>566, 'zipcode'=>'12980', 'name'=>'Guntur']);

        //Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('cities')->insert(['id'=>43, 'province_id'=>6, 'type'=>'city', 'name'=>'Jakarta Timur']);
        //Kecamatan Matraman Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>567, 'city_id'=>43, 'name'=>'Matraman']);
        DB::table('villages')->insert(['id'=>5543, 'districts_id'=>567, 'zipcode'=>'13110', 'name'=>'Pisangan Baru']);
        DB::table('villages')->insert(['id'=>5544, 'districts_id'=>567, 'zipcode'=>'13120', 'name'=>'Utan Kayu Selatan']);
        DB::table('villages')->insert(['id'=>5545, 'districts_id'=>567, 'zipcode'=>'13120', 'name'=>'Utan Kayu Utara']);
        DB::table('villages')->insert(['id'=>5546, 'districts_id'=>567, 'zipcode'=>'13130', 'name'=>'Kayu Manis']);
        DB::table('villages')->insert(['id'=>5547, 'districts_id'=>567, 'zipcode'=>'13140', 'name'=>'Pal Meriam']);
        DB::table('villages')->insert(['id'=>5548, 'districts_id'=>567, 'zipcode'=>'13150', 'name'=>'Kebon Manggis']);
        //Kecamatan Pulo Gadung Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>568, 'city_id'=>43, 'name'=>'Pulo Gadung']);
        DB::table('villages')->insert(['id'=>5549, 'districts_id'=>568, 'zipcode'=>'13210', 'name'=>'Kayu Putih']);
        DB::table('villages')->insert(['id'=>5550, 'districts_id'=>568, 'zipcode'=>'13220', 'name'=>'Jati']);
        DB::table('villages')->insert(['id'=>5551, 'districts_id'=>568, 'zipcode'=>'13220', 'name'=>'Rawamangun']);
        DB::table('villages')->insert(['id'=>5552, 'districts_id'=>568, 'zipcode'=>'13230', 'name'=>'Pisangan Timur']);
        DB::table('villages')->insert(['id'=>5553, 'districts_id'=>568, 'zipcode'=>'13240', 'name'=>'Cipinang']);
        DB::table('villages')->insert(['id'=>5554, 'districts_id'=>568, 'zipcode'=>'13250', 'name'=>'Jatinegara Kaum']);
        DB::table('villages')->insert(['id'=>5555, 'districts_id'=>568, 'zipcode'=>'13260', 'name'=>'Pulo Gadung']);
        //Kecamatan Jatinegara Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>569, 'city_id'=>43, 'name'=>'Jatinegara']);
        DB::table('villages')->insert(['id'=>5556, 'districts_id'=>569, 'zipcode'=>'13310', 'name'=>'Bali Mester']);
        DB::table('villages')->insert(['id'=>5557, 'districts_id'=>569, 'zipcode'=>'13320', 'name'=>'Kampung Melayu']);
        DB::table('villages')->insert(['id'=>5558, 'districts_id'=>569, 'zipcode'=>'13330', 'name'=>'Bidaracina']);
        DB::table('villages')->insert(['id'=>5559, 'districts_id'=>569, 'zipcode'=>'13340', 'name'=>'Cipinang Cempedak']);
        DB::table('villages')->insert(['id'=>5560, 'districts_id'=>569, 'zipcode'=>'13350', 'name'=>'Rawa Bunga']);
        DB::table('villages')->insert(['id'=>5561, 'districts_id'=>569, 'zipcode'=>'13410', 'name'=>'Cipinang Besar Selatan']);
        DB::table('villages')->insert(['id'=>5562, 'districts_id'=>569, 'zipcode'=>'13410', 'name'=>'Cipinang Besar Utara']);
        DB::table('villages')->insert(['id'=>5563, 'districts_id'=>569, 'zipcode'=>'13420', 'name'=>'Cipinang Muara']);
        //Kecamatan Duren Sawit Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>570, 'city_id'=>43, 'name'=>'Duren Sawit']);
        DB::table('villages')->insert(['id'=>5564, 'districts_id'=>570, 'zipcode'=>'13430', 'name'=>'Pondok Bambu']);
        DB::table('villages')->insert(['id'=>5565, 'districts_id'=>570, 'zipcode'=>'13440', 'name'=>'Duren Sawit']);
        DB::table('villages')->insert(['id'=>5566, 'districts_id'=>570, 'zipcode'=>'13450', 'name'=>'Pondok Kelapa']);
        DB::table('villages')->insert(['id'=>5567, 'districts_id'=>570, 'zipcode'=>'13460', 'name'=>'Malaka Jaya']);
        DB::table('villages')->insert(['id'=>5568, 'districts_id'=>570, 'zipcode'=>'13460', 'name'=>'Malaka Sari']);
        DB::table('villages')->insert(['id'=>5569, 'districts_id'=>570, 'zipcode'=>'13460', 'name'=>'Pondok Kopi']);
        DB::table('villages')->insert(['id'=>5570, 'districts_id'=>570, 'zipcode'=>'13470', 'name'=>'Klender']);
        //Kecamatan Kramat Jati Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>571, 'city_id'=>43, 'name'=>'Kramat Jati']);
        DB::table('villages')->insert(['id'=>5571, 'districts_id'=>571, 'zipcode'=>'13510', 'name'=>'Kramat Jati']);
        DB::table('villages')->insert(['id'=>5572, 'districts_id'=>571, 'zipcode'=>'13520', 'name'=>'Batuampar']);
        DB::table('villages')->insert(['id'=>5573, 'districts_id'=>571, 'zipcode'=>'13530', 'name'=>'Balekambang']);
        DB::table('villages')->insert(['id'=>5574, 'districts_id'=>571, 'zipcode'=>'13540', 'name'=>'Kampung Tengah']);
        DB::table('villages')->insert(['id'=>5575, 'districts_id'=>571, 'zipcode'=>'13550', 'name'=>'Dukuh']);
        DB::table('villages')->insert(['id'=>5576, 'districts_id'=>571, 'zipcode'=>'13630', 'name'=>'Cawang']);
        DB::table('villages')->insert(['id'=>5577, 'districts_id'=>571, 'zipcode'=>'13640', 'name'=>'Cililitan']);
        //Kecamatan Makasar Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>572, 'city_id'=>43, 'name'=>'Makasar']);
        DB::table('villages')->insert(['id'=>5578, 'districts_id'=>572, 'zipcode'=>'13560', 'name'=>'Pinang Ranti']);
        DB::table('villages')->insert(['id'=>5579, 'districts_id'=>572, 'zipcode'=>'13570', 'name'=>'Makasar']);
        DB::table('villages')->insert(['id'=>5580, 'districts_id'=>572, 'zipcode'=>'13610', 'name'=>'Halim Perdana Kusumah']);
        DB::table('villages')->insert(['id'=>5581, 'districts_id'=>572, 'zipcode'=>'13620', 'name'=>'Cipinang Melayu']);
        DB::table('villages')->insert(['id'=>5582, 'districts_id'=>572, 'zipcode'=>'13650', 'name'=>'Kebon Pala']);
        //Kecamatan Pasar Rebo Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>573, 'city_id'=>43, 'name'=>'Pasar Rebo']);
        DB::table('villages')->insert(['id'=>5583, 'districts_id'=>573, 'zipcode'=>'13710', 'name'=>'Pekayon']);
        DB::table('villages')->insert(['id'=>5584, 'districts_id'=>573, 'zipcode'=>'13760', 'name'=>'Gedong']);
        DB::table('villages')->insert(['id'=>5585, 'districts_id'=>573, 'zipcode'=>'13770', 'name'=>'Cijantung']);
        DB::table('villages')->insert(['id'=>5586, 'districts_id'=>573, 'zipcode'=>'13780', 'name'=>'Baru']);
        DB::table('villages')->insert(['id'=>5587, 'districts_id'=>573, 'zipcode'=>'13790', 'name'=>'Kalisari']);
        //Kecamatan Ciracas Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>574, 'city_id'=>43, 'name'=>'Ciracas']);
        DB::table('villages')->insert(['id'=>5588, 'districts_id'=>574, 'zipcode'=>'13720', 'name'=>'Cibubur']);
        DB::table('villages')->insert(['id'=>5589, 'districts_id'=>574, 'zipcode'=>'13730', 'name'=>'Kelapa Dua Wetan']);
        DB::table('villages')->insert(['id'=>5590, 'districts_id'=>574, 'zipcode'=>'13740', 'name'=>'Ciracas']);
        DB::table('villages')->insert(['id'=>5591, 'districts_id'=>574, 'zipcode'=>'13750', 'name'=>'Susukan']);
        DB::table('villages')->insert(['id'=>5592, 'districts_id'=>574, 'zipcode'=>'13830', 'name'=>'Rambutan']);
        //Kecamatan Cipayung Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>575, 'city_id'=>43, 'name'=>'Cipayung']);
        DB::table('villages')->insert(['id'=>5593, 'districts_id'=>575, 'zipcode'=>'13810', 'name'=>'Lubang Buaya']);
        DB::table('villages')->insert(['id'=>5594, 'districts_id'=>575, 'zipcode'=>'13820', 'name'=>'Ceger']);
        DB::table('villages')->insert(['id'=>5595, 'districts_id'=>575, 'zipcode'=>'13840', 'name'=>'Cipayung']);
        DB::table('villages')->insert(['id'=>5596, 'districts_id'=>575, 'zipcode'=>'13850', 'name'=>'Munjul']);
        DB::table('villages')->insert(['id'=>5597, 'districts_id'=>575, 'zipcode'=>'13860', 'name'=>'Pondok Rangon']);
        DB::table('villages')->insert(['id'=>5598, 'districts_id'=>575, 'zipcode'=>'13870', 'name'=>'Cilangkap']);
        DB::table('villages')->insert(['id'=>5599, 'districts_id'=>575, 'zipcode'=>'13880', 'name'=>'Setu']);
        DB::table('villages')->insert(['id'=>5600, 'districts_id'=>575, 'zipcode'=>'13890', 'name'=>'Bambu Apus']);
        //Kecamatan Cakung Kota Jakarta Timur Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>576, 'city_id'=>43, 'name'=>'Cakung']);
        DB::table('villages')->insert(['id'=>5601, 'districts_id'=>576, 'zipcode'=>'13910', 'name'=>'Cakung Barat']);
        DB::table('villages')->insert(['id'=>5602, 'districts_id'=>576, 'zipcode'=>'13910', 'name'=>'Cakung Timur']);
        DB::table('villages')->insert(['id'=>5603, 'districts_id'=>576, 'zipcode'=>'13920', 'name'=>'Rawa Terate']);
        DB::table('villages')->insert(['id'=>5604, 'districts_id'=>576, 'zipcode'=>'13930', 'name'=>'Jatinegara']);
        DB::table('villages')->insert(['id'=>5605, 'districts_id'=>576, 'zipcode'=>'13940', 'name'=>'Penggilingan']);
        DB::table('villages')->insert(['id'=>5606, 'districts_id'=>576, 'zipcode'=>'13950', 'name'=>'Pulo Gebang']);
        DB::table('villages')->insert(['id'=>5607, 'districts_id'=>576, 'zipcode'=>'13960', 'name'=>'Ujung Menteng']);

        //Kota Jakarta Utara Provinsi Dki Jakarta
        DB::table('cities')->insert(['id'=>44, 'province_id'=>6, 'type'=>'city', 'name'=>'Jakarta Utara']);
        //Kecamatan Cilincing Kota Jakarta Utara Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>577, 'city_id'=>44, 'name'=>'Cilincing']);
        DB::table('villages')->insert(['id'=>5608, 'districts_id'=>577, 'zipcode'=>'14110', 'name'=>'Kali Baru']);
        DB::table('villages')->insert(['id'=>5609, 'districts_id'=>577, 'zipcode'=>'14120', 'name'=>'Cilincing']);
        DB::table('villages')->insert(['id'=>5610, 'districts_id'=>577, 'zipcode'=>'14130', 'name'=>'Semper Barat']);
        DB::table('villages')->insert(['id'=>5611, 'districts_id'=>577, 'zipcode'=>'14130', 'name'=>'Semper Timur']);
        DB::table('villages')->insert(['id'=>5612, 'districts_id'=>577, 'zipcode'=>'14140', 'name'=>'Rorotan']);
        DB::table('villages')->insert(['id'=>5613, 'districts_id'=>577, 'zipcode'=>'14140', 'name'=>'Sukapura']);
        DB::table('villages')->insert(['id'=>5614, 'districts_id'=>577, 'zipcode'=>'14150', 'name'=>'Marunda']);
        //Kecamatan Koja Kota Jakarta Utara Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>578, 'city_id'=>44, 'name'=>'Koja']);
        DB::table('villages')->insert(['id'=>5615, 'districts_id'=>578, 'zipcode'=>'14210', 'name'=>'Koja (utara Selatan)']);
        DB::table('villages')->insert(['id'=>5616, 'districts_id'=>578, 'zipcode'=>'14230', 'name'=>'Rawa Badak Selatan']);
        DB::table('villages')->insert(['id'=>5617, 'districts_id'=>578, 'zipcode'=>'14230', 'name'=>'Rawa Badak Utara']);
        DB::table('villages')->insert(['id'=>5618, 'districts_id'=>578, 'zipcode'=>'14260', 'name'=>'Tugu Selatan']);
        DB::table('villages')->insert(['id'=>5619, 'districts_id'=>578, 'zipcode'=>'14260', 'name'=>'Tugu Utara']);
        DB::table('villages')->insert(['id'=>5620, 'districts_id'=>578, 'zipcode'=>'14270', 'name'=>'Lagoa']);
        //Kecamatan Kelapa Gading Kota Jakarta Utara Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>579, 'city_id'=>44, 'name'=>'Kelapa Gading']);
        DB::table('villages')->insert(['id'=>5621, 'districts_id'=>579, 'zipcode'=>'14240', 'name'=>'Kelapa Gading Barat']);
        DB::table('villages')->insert(['id'=>5622, 'districts_id'=>579, 'zipcode'=>'14240', 'name'=>'Kelapa Gading Timur']);
        DB::table('villages')->insert(['id'=>5623, 'districts_id'=>579, 'zipcode'=>'14250', 'name'=>'Pegangsaan Dua']);
        //Kecamatan Tanjung Priok Kota Jakarta Utara Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>580, 'city_id'=>44, 'name'=>'Tanjung Priok']);
        DB::table('villages')->insert(['id'=>5624, 'districts_id'=>580, 'zipcode'=>'14310', 'name'=>'Tanjung Priok']);
        DB::table('villages')->insert(['id'=>5625, 'districts_id'=>580, 'zipcode'=>'14320', 'name'=>'Kebon Bawang']);
        DB::table('villages')->insert(['id'=>5626, 'districts_id'=>580, 'zipcode'=>'14330', 'name'=>'Sungai Bambu']);
        DB::table('villages')->insert(['id'=>5627, 'districts_id'=>580, 'zipcode'=>'14340', 'name'=>'Papanggo']);
        DB::table('villages')->insert(['id'=>5628, 'districts_id'=>580, 'zipcode'=>'14350', 'name'=>'Sunter Agung']);
        DB::table('villages')->insert(['id'=>5629, 'districts_id'=>580, 'zipcode'=>'14360', 'name'=>'Sunter Jaya']);
        DB::table('villages')->insert(['id'=>5630, 'districts_id'=>580, 'zipcode'=>'14370', 'name'=>'Warakas']);
        //Kecamatan Pademangan Kota Jakarta Utara Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>581, 'city_id'=>44, 'name'=>'Pademangan']);
        DB::table('villages')->insert(['id'=>5631, 'districts_id'=>581, 'zipcode'=>'14410', 'name'=>'Pademangan Timur']);
        DB::table('villages')->insert(['id'=>5632, 'districts_id'=>581, 'zipcode'=>'14420', 'name'=>'Pademangan Barat']);
        DB::table('villages')->insert(['id'=>5633, 'districts_id'=>581, 'zipcode'=>'14430', 'name'=>'Ancol']);
        //Kecamatan Penjaringan Kota Jakarta Utara Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>582, 'city_id'=>44, 'name'=>'Penjaringan']);
        DB::table('villages')->insert(['id'=>5634, 'districts_id'=>582, 'zipcode'=>'14440', 'name'=>'Penjaringan']);
        DB::table('villages')->insert(['id'=>5635, 'districts_id'=>582, 'zipcode'=>'14450', 'name'=>'Pejagalan']);
        DB::table('villages')->insert(['id'=>5636, 'districts_id'=>582, 'zipcode'=>'14450', 'name'=>'Pluit']);
        DB::table('villages')->insert(['id'=>5637, 'districts_id'=>582, 'zipcode'=>'14460', 'name'=>'Kapuk Muara']);
        DB::table('villages')->insert(['id'=>5638, 'districts_id'=>582, 'zipcode'=>'14470', 'name'=>'Kamal Muara']);

        //Kab. Kepulauan Seribu Provinsi Dki Jakarta
        DB::table('cities')->insert(['id'=>45, 'province_id'=>6, 'type'=>'regencies', 'name'=>'Kepulauan Seribu']);
        //Kecamatan Kepulauan Seribu Selatan Kab. Kepulauan Seribu Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>583, 'city_id'=>45, 'name'=>'Kepulauan Seribu Selatan']);
        DB::table('villages')->insert(['id'=>5639, 'districts_id'=>583, 'zipcode'=>'14510', 'name'=>'Pulau Untung Jawa']);
        DB::table('villages')->insert(['id'=>5640, 'districts_id'=>583, 'zipcode'=>'14520', 'name'=>'Pulau Pari']);
        DB::table('villages')->insert(['id'=>5641, 'districts_id'=>583, 'zipcode'=>'14520', 'name'=>'Pulau Tidung']);
        //Kecamatan Kepulauan Seribu Utara Kab. Kepulauan Seribu Provinsi Dki Jakarta
        DB::table('districts')->insert(['id'=>584, 'city_id'=>45, 'name'=>'Kepulauan Seribu Utara']);
        DB::table('villages')->insert(['id'=>5642, 'districts_id'=>584, 'zipcode'=>'14530', 'name'=>'Pulau Panggang']);
        DB::table('villages')->insert(['id'=>5643, 'districts_id'=>584, 'zipcode'=>'14540', 'name'=>'Pulau Harapan']);
        DB::table('villages')->insert(['id'=>5644, 'districts_id'=>584, 'zipcode'=>'14540', 'name'=>'Pulau Kelapa']);
    }
}
