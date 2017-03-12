<?php

use Illuminate\Database\Seeder;

class Bali extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('provinces')->insert(['id'=>1, 'name'=>'Bali']);

        //Kota Denpasar Provinsi Bali
        DB::table('cities')->insert(['id'=>1, 'province_id'=>1, 'type'=>'city', 'name'=>'Denpasar']);
        //Kecamatan Denpasar Utara Kota Denpasar Provinsi Bali
        DB::table('districts')->insert(['id'=>1, 'city_id'=>1, 'name'=>'Denpasar Utara']);
        DB::table('villages')->insert(['id'=>1, 'districts_id'=>1, 'zipcode'=>'80111', 'name'=>'Dauh Puri Kaja']);
        DB::table('villages')->insert(['id'=>2, 'districts_id'=>1, 'zipcode'=>'80115', 'name'=>'Peguyangan']);
        DB::table('villages')->insert(['id'=>3, 'districts_id'=>1, 'zipcode'=>'80115', 'name'=>'Peguyangan Kaja']);
        DB::table('villages')->insert(['id'=>4, 'districts_id'=>1, 'zipcode'=>'80115', 'name'=>'Peguyangan Kangin']);
        DB::table('villages')->insert(['id'=>5, 'districts_id'=>1, 'zipcode'=>'80116', 'name'=>'Ubung']);
        DB::table('villages')->insert(['id'=>6, 'districts_id'=>1, 'zipcode'=>'80116', 'name'=>'Ubung Kaja']);
        DB::table('villages')->insert(['id'=>7, 'districts_id'=>1, 'zipcode'=>'80118', 'name'=>'Pemecutan Kaja']);
        DB::table('villages')->insert(['id'=>8, 'districts_id'=>1, 'zipcode'=>'80231', 'name'=>'Dangin Puri Kaja']);
        DB::table('villages')->insert(['id'=>9, 'districts_id'=>1, 'zipcode'=>'80231', 'name'=>'Dangin Puri Kauh']);
        DB::table('villages')->insert(['id'=>10, 'districts_id'=>1, 'zipcode'=>'80233', 'name'=>'Dangin Puri Kangin']);
        DB::table('villages')->insert(['id'=>11, 'districts_id'=>1, 'zipcode'=>'80239', 'name'=>'Tonja']);
        //Kecamatan Denpasar Barat Kota Denpasar Provinsi Bali
        DB::table('districts')->insert(['id'=>2, 'city_id'=>1, 'name'=>'Denpasar Barat']);
        DB::table('villages')->insert(['id'=>12, 'districts_id'=>2, 'zipcode'=>'80112', 'name'=>'Dauh Puri Kangin']);
        DB::table('villages')->insert(['id'=>13, 'districts_id'=>2, 'zipcode'=>'80113', 'name'=>'Dauh Puri']);
        DB::table('villages')->insert(['id'=>14, 'districts_id'=>2, 'zipcode'=>'80113', 'name'=>'Dauh Puri Kauh']);
        DB::table('villages')->insert(['id'=>15, 'districts_id'=>2, 'zipcode'=>'80114', 'name'=>'Dauh Puri Klod/kelod']);
        DB::table('villages')->insert(['id'=>16, 'districts_id'=>2, 'zipcode'=>'80117', 'name'=>'Padangsambian']);
        DB::table('villages')->insert(['id'=>17, 'districts_id'=>2, 'zipcode'=>'80117', 'name'=>'Padangsambian Kaja']);
        DB::table('villages')->insert(['id'=>18, 'districts_id'=>2, 'zipcode'=>'80117', 'name'=>'Padangsambian Klod/kelod']);
        DB::table('villages')->insert(['id'=>19, 'districts_id'=>2, 'zipcode'=>'80119', 'name'=>'Pemecutan']);
        DB::table('villages')->insert(['id'=>20, 'districts_id'=>2, 'zipcode'=>'80119', 'name'=>'Pemecutan Klod/kelod']);
        DB::table('villages')->insert(['id'=>21, 'districts_id'=>2, 'zipcode'=>'80119', 'name'=>'Tegal Harum']);
        DB::table('villages')->insert(['id'=>22, 'districts_id'=>2, 'zipcode'=>'80119', 'name'=>'Tegal Kertha']);
        //Kecamatan Denpasar Selatan Kota Denpasar Provinsi Bali
        DB::table('districts')->insert(['id'=>3, 'city_id'=>1, 'name'=>'Denpasar Selatan']);
        DB::table('villages')->insert(['id'=>23, 'districts_id'=>3, 'zipcode'=>'80221', 'name'=>'Pemogan']);
        DB::table('villages')->insert(['id'=>24, 'districts_id'=>3, 'zipcode'=>'80222', 'name'=>'Pedungan']);
        DB::table('villages')->insert(['id'=>25, 'districts_id'=>3, 'zipcode'=>'80223', 'name'=>'Sesetan']);
        DB::table('villages')->insert(['id'=>26, 'districts_id'=>3, 'zipcode'=>'80224', 'name'=>'Sidakarya']);
        DB::table('villages')->insert(['id'=>27, 'districts_id'=>3, 'zipcode'=>'80225', 'name'=>'Panjer']);
        DB::table('villages')->insert(['id'=>28, 'districts_id'=>3, 'zipcode'=>'80226', 'name'=>'Renon']);
        DB::table('villages')->insert(['id'=>29, 'districts_id'=>3, 'zipcode'=>'80227', 'name'=>'Sanur Kaja']);
        DB::table('villages')->insert(['id'=>30, 'districts_id'=>3, 'zipcode'=>'80227', 'name'=>'Sanur Kauh']);
        DB::table('villages')->insert(['id'=>31, 'districts_id'=>3, 'zipcode'=>'80228', 'name'=>'Sanur']);
        DB::table('villages')->insert(['id'=>32, 'districts_id'=>3, 'zipcode'=>'80229', 'name'=>'Serangan']);
        //Kecamatan Denpasar Timur Kota Denpasar Provinsi Bali
        DB::table('districts')->insert(['id'=>4, 'city_id'=>1, 'name'=>'Denpasar Timur']);
        DB::table('villages')->insert(['id'=>33, 'districts_id'=>4, 'zipcode'=>'80232', 'name'=>'Dangin Puri']);
        DB::table('villages')->insert(['id'=>34, 'districts_id'=>4, 'zipcode'=>'80234', 'name'=>'Dangin Puri Klod']);
        DB::table('villages')->insert(['id'=>35, 'districts_id'=>4, 'zipcode'=>'80235', 'name'=>'Sumerta']);
        DB::table('villages')->insert(['id'=>36, 'districts_id'=>4, 'zipcode'=>'80236', 'name'=>'Sumerta Kaja']);
        DB::table('villages')->insert(['id'=>37, 'districts_id'=>4, 'zipcode'=>'80236', 'name'=>'Sumerta Kauh']);
        DB::table('villages')->insert(['id'=>38, 'districts_id'=>4, 'zipcode'=>'80237', 'name'=>'Kesiman']);
        DB::table('villages')->insert(['id'=>39, 'districts_id'=>4, 'zipcode'=>'80237', 'name'=>'Kesiman Kertalangu']);
        DB::table('villages')->insert(['id'=>40, 'districts_id'=>4, 'zipcode'=>'80237', 'name'=>'Kesiman Petilan']);
        DB::table('villages')->insert(['id'=>41, 'districts_id'=>4, 'zipcode'=>'80238', 'name'=>'Penatih']);
        DB::table('villages')->insert(['id'=>42, 'districts_id'=>4, 'zipcode'=>'80238', 'name'=>'Penatih Dangin Puri']);
        DB::table('villages')->insert(['id'=>43, 'districts_id'=>4, 'zipcode'=>'80239', 'name'=>'Sumerta Kelod/klod']);

        //Kab. Badung Provinsi Bali
        DB::table('cities')->insert(['id'=>2, 'province_id'=>1, 'type'=>'regencies', 'name'=>'Badung']);
        //Kecamatan Mengwi Kab. Badung Provinsi Bali
        DB::table('districts')->insert(['id'=>5, 'city_id'=>2, 'name'=>'Mengwi']);
        DB::table('villages')->insert(['id'=>44, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Abianbase']);
        DB::table('villages')->insert(['id'=>45, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Baha']);
        DB::table('villages')->insert(['id'=>46, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Buduk']);
        DB::table('villages')->insert(['id'=>47, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Cemagi']);
        DB::table('villages')->insert(['id'=>48, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Gulingan']);
        DB::table('villages')->insert(['id'=>49, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Kapal']);
        DB::table('villages')->insert(['id'=>50, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Kekeran']);
        DB::table('villages')->insert(['id'=>51, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Kuwum']);
        DB::table('villages')->insert(['id'=>52, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Lukluk']);
        DB::table('villages')->insert(['id'=>53, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Mengwi']);
        DB::table('villages')->insert(['id'=>54, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Mengwitani']);
        DB::table('villages')->insert(['id'=>55, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Munggu']);
        DB::table('villages')->insert(['id'=>56, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Penarungan']);
        DB::table('villages')->insert(['id'=>57, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Pererenan']);
        DB::table('villages')->insert(['id'=>58, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Sading']);
        DB::table('villages')->insert(['id'=>59, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Sembung']);
        DB::table('villages')->insert(['id'=>60, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Sempidi']);
        DB::table('villages')->insert(['id'=>61, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Sobangan']);
        DB::table('villages')->insert(['id'=>62, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Tumbak Bayuh']);
        DB::table('villages')->insert(['id'=>63, 'districts_id'=>5, 'zipcode'=>'80351', 'name'=>'Werdi Bhuwana']);
        //Kecamatan Abiansemal Kab. Badung Provinsi Bali
        DB::table('districts')->insert(['id'=>6, 'city_id'=>2, 'name'=>'Abiansemal']);
        DB::table('villages')->insert(['id'=>64, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Abiansemal']);
        DB::table('villages')->insert(['id'=>65, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Angantaka']);
        DB::table('villages')->insert(['id'=>66, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Ayunan']);
        DB::table('villages')->insert(['id'=>67, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Blahkiuh']);
        DB::table('villages')->insert(['id'=>68, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Bongkasa']);
        DB::table('villages')->insert(['id'=>69, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Bongkasa Pertiwi']);
        DB::table('villages')->insert(['id'=>70, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Darmasaba']);
        DB::table('villages')->insert(['id'=>71, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Dauh Yeh Cani']);
        DB::table('villages')->insert(['id'=>72, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Jagapati']);
        DB::table('villages')->insert(['id'=>73, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Mambal']);
        DB::table('villages')->insert(['id'=>74, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Mekar Bhuwana']);
        DB::table('villages')->insert(['id'=>75, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Punggul']);
        DB::table('villages')->insert(['id'=>76, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Sangeh']);
        DB::table('villages')->insert(['id'=>77, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Sedang']);
        DB::table('villages')->insert(['id'=>78, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Selat']);
        DB::table('villages')->insert(['id'=>79, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Sibang Gede']);
        DB::table('villages')->insert(['id'=>80, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Sibang Kaja']);
        DB::table('villages')->insert(['id'=>81, 'districts_id'=>6, 'zipcode'=>'80352', 'name'=>'Taman']);
        //Kecamatan Petang Kab. Badung Provinsi Bali
        DB::table('districts')->insert(['id'=>7, 'city_id'=>2, 'name'=>'Petang']);
        DB::table('villages')->insert(['id'=>82, 'districts_id'=>7, 'zipcode'=>'80353', 'name'=>'Belok']);
        DB::table('villages')->insert(['id'=>83, 'districts_id'=>7, 'zipcode'=>'80353', 'name'=>'Carangsari']);
        DB::table('villages')->insert(['id'=>84, 'districts_id'=>7, 'zipcode'=>'80353', 'name'=>'Getasan']);
        DB::table('villages')->insert(['id'=>85, 'districts_id'=>7, 'zipcode'=>'80353', 'name'=>'Pangsan']);
        DB::table('villages')->insert(['id'=>86, 'districts_id'=>7, 'zipcode'=>'80353', 'name'=>'Pelaga']);
        DB::table('villages')->insert(['id'=>87, 'districts_id'=>7, 'zipcode'=>'80353', 'name'=>'Petang']);
        DB::table('villages')->insert(['id'=>88, 'districts_id'=>7, 'zipcode'=>'80353', 'name'=>'Sulangai']);
        //Kecamatan Kuta Selatan Kab. Badung Provinsi Bali
        DB::table('districts')->insert(['id'=>8, 'city_id'=>2, 'name'=>'Kuta Selatan']);
        DB::table('villages')->insert(['id'=>89, 'districts_id'=>8, 'zipcode'=>'80361', 'name'=>'Benoa']);
        DB::table('villages')->insert(['id'=>90, 'districts_id'=>8, 'zipcode'=>'80361', 'name'=>'Jimbaran']);
        DB::table('villages')->insert(['id'=>91, 'districts_id'=>8, 'zipcode'=>'80361', 'name'=>'Kutuh']);
        DB::table('villages')->insert(['id'=>92, 'districts_id'=>8, 'zipcode'=>'80361', 'name'=>'Pecatu']);
        DB::table('villages')->insert(['id'=>93, 'districts_id'=>8, 'zipcode'=>'80361', 'name'=>'Tanjung Benoa']);
        DB::table('villages')->insert(['id'=>94, 'districts_id'=>8, 'zipcode'=>'80361', 'name'=>'Ungasan']);
        //Kecamatan Kuta Utara Kab. Badung Provinsi Bali
        DB::table('districts')->insert(['id'=>9, 'city_id'=>2, 'name'=>'Kuta Utara']);
        DB::table('villages')->insert(['id'=>95, 'districts_id'=>9, 'zipcode'=>'80361', 'name'=>'Canggu']);
        DB::table('villages')->insert(['id'=>96, 'districts_id'=>9, 'zipcode'=>'80361', 'name'=>'Dalung']);
        DB::table('villages')->insert(['id'=>97, 'districts_id'=>9, 'zipcode'=>'80361', 'name'=>'Kerobokan']);
        DB::table('villages')->insert(['id'=>98, 'districts_id'=>9, 'zipcode'=>'80361', 'name'=>'Kerobokan Kaja']);
        DB::table('villages')->insert(['id'=>99, 'districts_id'=>9, 'zipcode'=>'80361', 'name'=>'Kerobokan Kelod']);
        DB::table('villages')->insert(['id'=>100, 'districts_id'=>9, 'zipcode'=>'80361', 'name'=>'Tibubeneng']);
        //Kecamatan Kuta Kab. Badung Provinsi Bali
        DB::table('districts')->insert(['id'=>10, 'city_id'=>2, 'name'=>'Kuta']);
        DB::table('villages')->insert(['id'=>101, 'districts_id'=>10, 'zipcode'=>'80361', 'name'=>'Kedonganan']);
        DB::table('villages')->insert(['id'=>102, 'districts_id'=>10, 'zipcode'=>'80361', 'name'=>'Kuta']);
        DB::table('villages')->insert(['id'=>103, 'districts_id'=>10, 'zipcode'=>'80361', 'name'=>'Legian']);
        DB::table('villages')->insert(['id'=>104, 'districts_id'=>10, 'zipcode'=>'80361', 'name'=>'Seminyak']);
        DB::table('villages')->insert(['id'=>105, 'districts_id'=>10, 'zipcode'=>'80361', 'name'=>'Tuban']);

        //Kab. Gianyar Provinsi Bali
        DB::table('cities')->insert(['id'=>3, 'province_id'=>1, 'type'=>'regencies', 'name'=>'Gianyar']);
        //Kecamatan Gianyar Kab. Gianyar Provinsi Bali
        DB::table('districts')->insert(['id'=>11, 'city_id'=>3, 'name'=>'Gianyar']);
        DB::table('villages')->insert(['id'=>106, 'districts_id'=>11, 'zipcode'=>'80511', 'name'=>'Gianyar']);
        DB::table('villages')->insert(['id'=>107, 'districts_id'=>11, 'zipcode'=>'80512', 'name'=>'Samplangan']);
        DB::table('villages')->insert(['id'=>108, 'districts_id'=>11, 'zipcode'=>'80513', 'name'=>'Beng']);
        DB::table('villages')->insert(['id'=>109, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Abianbase']);
        DB::table('villages')->insert(['id'=>110, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Bakbakan']);
        DB::table('villages')->insert(['id'=>111, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Bitera']);
        DB::table('villages')->insert(['id'=>112, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Lebih']);
        DB::table('villages')->insert(['id'=>113, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Petak']);
        DB::table('villages')->insert(['id'=>114, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Petak Kaja']);
        DB::table('villages')->insert(['id'=>115, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Serongga']);
        DB::table('villages')->insert(['id'=>116, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Siangan']);
        DB::table('villages')->insert(['id'=>117, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Sidan']);
        DB::table('villages')->insert(['id'=>118, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Sumita']);
        DB::table('villages')->insert(['id'=>119, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Suwat']);
        DB::table('villages')->insert(['id'=>120, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Tegal Tugu']);
        DB::table('villages')->insert(['id'=>121, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Temesi']);
        DB::table('villages')->insert(['id'=>122, 'districts_id'=>11, 'zipcode'=>'80515', 'name'=>'Tulikup']);
        //Kecamatan Tampak Siring Kab. Gianyar Provinsi Bali
        DB::table('districts')->insert(['id'=>12, 'city_id'=>3, 'name'=>'Tampak Siring']);
        DB::table('villages')->insert(['id'=>123, 'districts_id'=>12, 'zipcode'=>'80552', 'name'=>'Manukaya']);
        DB::table('villages')->insert(['id'=>124, 'districts_id'=>12, 'zipcode'=>'80552', 'name'=>'Pejeng']);
        DB::table('villages')->insert(['id'=>125, 'districts_id'=>12, 'zipcode'=>'80552', 'name'=>'Pejeng Kaja']);
        DB::table('villages')->insert(['id'=>126, 'districts_id'=>12, 'zipcode'=>'80552', 'name'=>'Pejeng Kangin']);
        DB::table('villages')->insert(['id'=>127, 'districts_id'=>12, 'zipcode'=>'80552', 'name'=>'Pejeng Kawan']);
        DB::table('villages')->insert(['id'=>128, 'districts_id'=>12, 'zipcode'=>'80552', 'name'=>'Pejeng Klod (kelod)']);
        DB::table('villages')->insert(['id'=>129, 'districts_id'=>12, 'zipcode'=>'80552', 'name'=>'Sanding']);
        DB::table('villages')->insert(['id'=>130, 'districts_id'=>12, 'zipcode'=>'80552', 'name'=>'Tampaksiring']);
        //Kecamatan Tegallalang Kab. Gianyar Provinsi Bali
        DB::table('districts')->insert(['id'=>13, 'city_id'=>3, 'name'=>'Tegallalang']);
        DB::table('villages')->insert(['id'=>131, 'districts_id'=>13, 'zipcode'=>'80561', 'name'=>'Kedisan']);
        DB::table('villages')->insert(['id'=>132, 'districts_id'=>13, 'zipcode'=>'80561', 'name'=>'Keliki']);
        DB::table('villages')->insert(['id'=>133, 'districts_id'=>13, 'zipcode'=>'80561', 'name'=>'Kenderan']);
        DB::table('villages')->insert(['id'=>134, 'districts_id'=>13, 'zipcode'=>'80561', 'name'=>'Pupuan']);
        DB::table('villages')->insert(['id'=>135, 'districts_id'=>13, 'zipcode'=>'80561', 'name'=>'Sebatu']);
        DB::table('villages')->insert(['id'=>136, 'districts_id'=>13, 'zipcode'=>'80561', 'name'=>'Taro']);
        DB::table('villages')->insert(['id'=>137, 'districts_id'=>13, 'zipcode'=>'80561', 'name'=>'Tegallalang']);
        //Kecamatan Ubud Kab. Gianyar Provinsi Bali
        DB::table('districts')->insert(['id'=>14, 'city_id'=>3, 'name'=>'Ubud']);
        DB::table('villages')->insert(['id'=>138, 'districts_id'=>14, 'zipcode'=>'80571', 'name'=>'Kedewatan']);
        DB::table('villages')->insert(['id'=>139, 'districts_id'=>14, 'zipcode'=>'80571', 'name'=>'Lodtunduh']);
        DB::table('villages')->insert(['id'=>140, 'districts_id'=>14, 'zipcode'=>'80571', 'name'=>'Mas']);
        DB::table('villages')->insert(['id'=>141, 'districts_id'=>14, 'zipcode'=>'80571', 'name'=>'Peliatan']);
        DB::table('villages')->insert(['id'=>142, 'districts_id'=>14, 'zipcode'=>'80571', 'name'=>'Petulu']);
        DB::table('villages')->insert(['id'=>143, 'districts_id'=>14, 'zipcode'=>'80571', 'name'=>'Sayan']);
        DB::table('villages')->insert(['id'=>144, 'districts_id'=>14, 'zipcode'=>'80571', 'name'=>'Singakerta (singekerta)']);
        DB::table('villages')->insert(['id'=>145, 'districts_id'=>14, 'zipcode'=>'80571', 'name'=>'Ubud']);
        //Kecamatan Payangan Kab. Gianyar Provinsi Bali
        DB::table('districts')->insert(['id'=>15, 'city_id'=>3, 'name'=>'Payangan']);
        DB::table('villages')->insert(['id'=>146, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Bresela (beresela)']);
        DB::table('villages')->insert(['id'=>147, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Buahan']);
        DB::table('villages')->insert(['id'=>148, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Buahan Kaja']);
        DB::table('villages')->insert(['id'=>149, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Bukian']);
        DB::table('villages')->insert(['id'=>150, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Kelusa']);
        DB::table('villages')->insert(['id'=>151, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Kerta']);
        DB::table('villages')->insert(['id'=>152, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Melinggih']);
        DB::table('villages')->insert(['id'=>153, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Melinggih Kelod']);
        DB::table('villages')->insert(['id'=>154, 'districts_id'=>15, 'zipcode'=>'80572', 'name'=>'Puhu']);
        //Kecamatan Belah Batuh (blahbatuh) Kab. Gianyar Provinsi Bali
        DB::table('districts')->insert(['id'=>16, 'city_id'=>3, 'name'=>'Belah Batuh (blahbatuh)']);
        DB::table('villages')->insert(['id'=>155, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Bedulu']);
        DB::table('villages')->insert(['id'=>156, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Belega']);
        DB::table('villages')->insert(['id'=>157, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Blahbatuh']);
        DB::table('villages')->insert(['id'=>158, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Bona']);
        DB::table('villages')->insert(['id'=>159, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Buruan']);
        DB::table('villages')->insert(['id'=>160, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Keramas']);
        DB::table('villages')->insert(['id'=>161, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Medahan']);
        DB::table('villages')->insert(['id'=>162, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Pering']);
        DB::table('villages')->insert(['id'=>163, 'districts_id'=>16, 'zipcode'=>'80581', 'name'=>'Saba']);
        //Kecamatan Sukawati Kab. Gianyar Provinsi Bali
        DB::table('districts')->insert(['id'=>17, 'city_id'=>3, 'name'=>'Sukawati']);
        DB::table('villages')->insert(['id'=>164, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Batuan']);
        DB::table('villages')->insert(['id'=>165, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Batuan Kaler']);
        DB::table('villages')->insert(['id'=>166, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Batubulan']);
        DB::table('villages')->insert(['id'=>167, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Batubulan Kangin']);
        DB::table('villages')->insert(['id'=>168, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Celuk']);
        DB::table('villages')->insert(['id'=>169, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Guwang']);
        DB::table('villages')->insert(['id'=>170, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Kemenuh']);
        DB::table('villages')->insert(['id'=>171, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Ketewel']);
        DB::table('villages')->insert(['id'=>172, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Singapadu']);
        DB::table('villages')->insert(['id'=>173, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Singapadu Kaler']);
        DB::table('villages')->insert(['id'=>174, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Singapadu Tengah']);
        DB::table('villages')->insert(['id'=>175, 'districts_id'=>17, 'zipcode'=>'80582', 'name'=>'Sukawati']);

        //Kab. Bangli Provinsi Bali
        DB::table('cities')->insert(['id'=>4, 'province_id'=>1, 'type'=>'regencies', 'name'=>'Bangli']);
        //Kecamatan Bangli Kab. Bangli Provinsi Bali
        DB::table('districts')->insert(['id'=>18, 'city_id'=>4, 'name'=>'Bangli']);
        DB::table('villages')->insert(['id'=>176, 'districts_id'=>18, 'zipcode'=>'80611', 'name'=>'Kubu']);
        DB::table('villages')->insert(['id'=>177, 'districts_id'=>18, 'zipcode'=>'80611', 'name'=>'Landih']);
        DB::table('villages')->insert(['id'=>178, 'districts_id'=>18, 'zipcode'=>'80612', 'name'=>'Cempaga']);
        DB::table('villages')->insert(['id'=>179, 'districts_id'=>18, 'zipcode'=>'80613', 'name'=>'Kawan']);
        DB::table('villages')->insert(['id'=>180, 'districts_id'=>18, 'zipcode'=>'80614', 'name'=>'Bebalang']);
        DB::table('villages')->insert(['id'=>181, 'districts_id'=>18, 'zipcode'=>'80614', 'name'=>'Bunutin']);
        DB::table('villages')->insert(['id'=>182, 'districts_id'=>18, 'zipcode'=>'80614', 'name'=>'Kayubihi']);
        DB::table('villages')->insert(['id'=>183, 'districts_id'=>18, 'zipcode'=>'80614', 'name'=>'Pengotan']);
        DB::table('villages')->insert(['id'=>184, 'districts_id'=>18, 'zipcode'=>'80614', 'name'=>'Taman Bali']);
        //Kecamatan Kintamani Kab. Bangli Provinsi Bali
        DB::table('districts')->insert(['id'=>19, 'city_id'=>4, 'name'=>'Kintamani']);
        DB::table('villages')->insert(['id'=>185, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Abang Songan']);
        DB::table('villages')->insert(['id'=>186, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Abuan']);
        DB::table('villages')->insert(['id'=>187, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Awan']);
        DB::table('villages')->insert(['id'=>188, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Bantang']);
        DB::table('villages')->insert(['id'=>189, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Banua']);
        DB::table('villages')->insert(['id'=>190, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Batu Dinding']);
        DB::table('villages')->insert(['id'=>191, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Batukaang']);
        DB::table('villages')->insert(['id'=>192, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Batur Selatan']);
        DB::table('villages')->insert(['id'=>193, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Batur Tengah']);
        DB::table('villages')->insert(['id'=>194, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Batur Utara']);
        DB::table('villages')->insert(['id'=>195, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Bayungcerik']);
        DB::table('villages')->insert(['id'=>196, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Bayunggede']);
        DB::table('villages')->insert(['id'=>197, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Belancan']);
        DB::table('villages')->insert(['id'=>198, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Belandingan']);
        DB::table('villages')->insert(['id'=>199, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Belanga']);
        DB::table('villages')->insert(['id'=>200, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Belantih']);
        DB::table('villages')->insert(['id'=>201, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Binyan']);
        DB::table('villages')->insert(['id'=>202, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Bonyoh']);
        DB::table('villages')->insert(['id'=>203, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Buahan']);
        DB::table('villages')->insert(['id'=>204, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Bunutin']);
        DB::table('villages')->insert(['id'=>205, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Catur']);
        DB::table('villages')->insert(['id'=>206, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Daup']);
        DB::table('villages')->insert(['id'=>207, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Dausa']);
        DB::table('villages')->insert(['id'=>208, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Gunungbau']);
        DB::table('villages')->insert(['id'=>209, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Katung']);
        DB::table('villages')->insert(['id'=>210, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Kedisan']);
        DB::table('villages')->insert(['id'=>211, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Kintamani']);
        DB::table('villages')->insert(['id'=>212, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Kutuh']);
        DB::table('villages')->insert(['id'=>213, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Langgahan']);
        DB::table('villages')->insert(['id'=>214, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Lembean']);
        DB::table('villages')->insert(['id'=>215, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Mangguh']);
        DB::table('villages')->insert(['id'=>216, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Manikliyu']);
        DB::table('villages')->insert(['id'=>217, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Mengani']);
        DB::table('villages')->insert(['id'=>218, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Pengejaran']);
        DB::table('villages')->insert(['id'=>219, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Pinggan']);
        DB::table('villages')->insert(['id'=>220, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Satra']);
        DB::table('villages')->insert(['id'=>221, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Sekaan']);
        DB::table('villages')->insert(['id'=>222, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Sekardadi']);
        DB::table('villages')->insert(['id'=>223, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Selulung']);
        DB::table('villages')->insert(['id'=>224, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Serahi']);
        DB::table('villages')->insert(['id'=>225, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Siyakin']);
        DB::table('villages')->insert(['id'=>226, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Songan A']);
        DB::table('villages')->insert(['id'=>227, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Songan B']);
        DB::table('villages')->insert(['id'=>228, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Subaya']);
        DB::table('villages')->insert(['id'=>229, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Sukawana']);
        DB::table('villages')->insert(['id'=>230, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Suter']);
        DB::table('villages')->insert(['id'=>231, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Terunyan']);
        DB::table('villages')->insert(['id'=>232, 'districts_id'=>19, 'zipcode'=>'80652', 'name'=>'Ulian']);
        //Kecamatan Susut Kab. Bangli Provinsi Bali
        DB::table('districts')->insert(['id'=>20, 'city_id'=>4, 'name'=>'Susut']);
        DB::table('villages')->insert(['id'=>233, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Abuan']);
        DB::table('villages')->insert(['id'=>234, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Apuan']);
        DB::table('villages')->insert(['id'=>235, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Demulih']);
        DB::table('villages')->insert(['id'=>236, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Pengiangan']);
        DB::table('villages')->insert(['id'=>237, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Penglumbaran']);
        DB::table('villages')->insert(['id'=>238, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Selat']);
        DB::table('villages')->insert(['id'=>239, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Sulahan']);
        DB::table('villages')->insert(['id'=>240, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Susut']);
        DB::table('villages')->insert(['id'=>241, 'districts_id'=>20, 'zipcode'=>'80661', 'name'=>'Tiga']);
        //Kecamatan Tembuku Kab. Bangli Provinsi Bali
        DB::table('districts')->insert(['id'=>21, 'city_id'=>4, 'name'=>'Tembuku']);
        DB::table('villages')->insert(['id'=>242, 'districts_id'=>21, 'zipcode'=>'80671', 'name'=>'Bangbang']);
        DB::table('villages')->insert(['id'=>243, 'districts_id'=>21, 'zipcode'=>'80671', 'name'=>'Jehem']);
        DB::table('villages')->insert(['id'=>244, 'districts_id'=>21, 'zipcode'=>'80671', 'name'=>'Peninjoan']);
        DB::table('villages')->insert(['id'=>245, 'districts_id'=>21, 'zipcode'=>'80671', 'name'=>'Tembuku']);
        DB::table('villages')->insert(['id'=>246, 'districts_id'=>21, 'zipcode'=>'80671', 'name'=>'Undisan']);
        DB::table('villages')->insert(['id'=>247, 'districts_id'=>21, 'zipcode'=>'80671', 'name'=>'Yangapi']);

        //Kab. Klungkung Provinsi Bali
        DB::table('cities')->insert(['id'=>5, 'province_id'=>1, 'type'=>'regencies', 'name'=>'Klungkung']);
        //Kecamatan Klungkung Kab. Klungkung Provinsi Bali
        DB::table('districts')->insert(['id'=>22, 'city_id'=>5, 'name'=>'Klungkung']);
        DB::table('villages')->insert(['id'=>248, 'districts_id'=>22, 'zipcode'=>'80711', 'name'=>'Semarapura Tengah']);
        DB::table('villages')->insert(['id'=>249, 'districts_id'=>22, 'zipcode'=>'80712', 'name'=>'Semarapura Kaja']);
        DB::table('villages')->insert(['id'=>250, 'districts_id'=>22, 'zipcode'=>'80713', 'name'=>'Semarapura Kauh']);
        DB::table('villages')->insert(['id'=>251, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Akah']);
        DB::table('villages')->insert(['id'=>252, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Gelgel']);
        DB::table('villages')->insert(['id'=>253, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Jumpai']);
        DB::table('villages')->insert(['id'=>254, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Kamasan']);
        DB::table('villages')->insert(['id'=>255, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Kampung Gelgel']);
        DB::table('villages')->insert(['id'=>256, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Manduang']);
        DB::table('villages')->insert(['id'=>257, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Satra']);
        DB::table('villages')->insert(['id'=>258, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Selat']);
        DB::table('villages')->insert(['id'=>259, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Selisihan']);
        DB::table('villages')->insert(['id'=>260, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Semarapura Kangin']);
        DB::table('villages')->insert(['id'=>261, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Semarapura Klod Kangin']);
        DB::table('villages')->insert(['id'=>262, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Semarapura Klod/kelod']);
        DB::table('villages')->insert(['id'=>263, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Tangkas']);
        DB::table('villages')->insert(['id'=>264, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Tegak']);
        DB::table('villages')->insert(['id'=>265, 'districts_id'=>22, 'zipcode'=>'80716', 'name'=>'Tojan']);
        //Kecamatan Banjarangkan Kab. Klungkung Provinsi Bali
        DB::table('districts')->insert(['id'=>23, 'city_id'=>5, 'name'=>'Banjarangkan']);
        DB::table('villages')->insert(['id'=>266, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Aan']);
        DB::table('villages')->insert(['id'=>267, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Bakas']);
        DB::table('villages')->insert(['id'=>268, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Banjarangkan']);
        DB::table('villages')->insert(['id'=>269, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Bungbungan']);
        DB::table('villages')->insert(['id'=>270, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Getakan']);
        DB::table('villages')->insert(['id'=>271, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Negari']);
        DB::table('villages')->insert(['id'=>272, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Nyalian']);
        DB::table('villages')->insert(['id'=>273, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Nyanglan']);
        DB::table('villages')->insert(['id'=>274, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Takmung']);
        DB::table('villages')->insert(['id'=>275, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Tihingan']);
        DB::table('villages')->insert(['id'=>276, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Timuhun']);
        DB::table('villages')->insert(['id'=>277, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Tohpati']);
        DB::table('villages')->insert(['id'=>278, 'districts_id'=>23, 'zipcode'=>'80752', 'name'=>'Tusan']);
        //Kecamatan Dawan Kab. Klungkung Provinsi Bali
        DB::table('districts')->insert(['id'=>24, 'city_id'=>5, 'name'=>'Dawan']);
        DB::table('villages')->insert(['id'=>279, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Besan']);
        DB::table('villages')->insert(['id'=>280, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Dawan Kaler']);
        DB::table('villages')->insert(['id'=>281, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Dawan Klod']);
        DB::table('villages')->insert(['id'=>282, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Gunaksa']);
        DB::table('villages')->insert(['id'=>283, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Kampung Kusamba']);
        DB::table('villages')->insert(['id'=>284, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Kusamba']);
        DB::table('villages')->insert(['id'=>285, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Paksebali']);
        DB::table('villages')->insert(['id'=>286, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Pesinggahan']);
        DB::table('villages')->insert(['id'=>287, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Pikat']);
        DB::table('villages')->insert(['id'=>288, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Sampalan Klod']);
        DB::table('villages')->insert(['id'=>289, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Sampalan Tengah']);
        DB::table('villages')->insert(['id'=>290, 'districts_id'=>24, 'zipcode'=>'80761', 'name'=>'Sulang']);
        //Kecamatan Nusapenida Kab. Klungkung Provinsi Bali
        DB::table('districts')->insert(['id'=>25, 'city_id'=>5, 'name'=>'Nusapenida']);
        DB::table('villages')->insert(['id'=>291, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Batukandik']);
        DB::table('villages')->insert(['id'=>292, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Batumadeg']);
        DB::table('villages')->insert(['id'=>293, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Batununggul']);
        DB::table('villages')->insert(['id'=>294, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Bunga Mekar']);
        DB::table('villages')->insert(['id'=>295, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Jungutbatu']);
        DB::table('villages')->insert(['id'=>296, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Kampung Toyapakeh']);
        DB::table('villages')->insert(['id'=>297, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Klumpu']);
        DB::table('villages')->insert(['id'=>298, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Kutampi']);
        DB::table('villages')->insert(['id'=>299, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Kutampi Kaler']);
        DB::table('villages')->insert(['id'=>300, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Lembongan']);
        DB::table('villages')->insert(['id'=>301, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Ped']);
        DB::table('villages')->insert(['id'=>302, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Pejukutan']);
        DB::table('villages')->insert(['id'=>303, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Sakti']);
        DB::table('villages')->insert(['id'=>304, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Sekartaji']);
        DB::table('villages')->insert(['id'=>305, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Suana']);
        DB::table('villages')->insert(['id'=>306, 'districts_id'=>25, 'zipcode'=>'80771', 'name'=>'Tanglad']);

        //Kab. Karangasem Provinsi Bali
        DB::table('cities')->insert(['id'=>6, 'province_id'=>1, 'type'=>'regencies', 'name'=>'Karangasem']);
        //Kecamatan Karang Asem Kab. Karangasem Provinsi Bali
        DB::table('districts')->insert(['id'=>26, 'city_id'=>6, 'name'=>'Karang Asem']);
        DB::table('villages')->insert(['id'=>307, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Bugbug']);
        DB::table('villages')->insert(['id'=>308, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Bukit']);
        DB::table('villages')->insert(['id'=>309, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Karangasem']);
        DB::table('villages')->insert(['id'=>310, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Padang Kerta']);
        DB::table('villages')->insert(['id'=>311, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Pertima']);
        DB::table('villages')->insert(['id'=>312, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Seraya Barat']);
        DB::table('villages')->insert(['id'=>313, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Seraya Tengah']);
        DB::table('villages')->insert(['id'=>314, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Seraya Timur']);
        DB::table('villages')->insert(['id'=>315, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Tegallinggah']);
        DB::table('villages')->insert(['id'=>316, 'districts_id'=>26, 'zipcode'=>'80811', 'name'=>'Tumbu']);
        DB::table('villages')->insert(['id'=>317, 'districts_id'=>26, 'zipcode'=>'80813', 'name'=>'Subagan']);
        //Kecamatan Abang Kab. Karangasem Provinsi Bali
        DB::table('districts')->insert(['id'=>27, 'city_id'=>6, 'name'=>'Abang']);
        DB::table('villages')->insert(['id'=>318, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Ababi']);
        DB::table('villages')->insert(['id'=>319, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Abang']);
        DB::table('villages')->insert(['id'=>320, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Bunutan']);
        DB::table('villages')->insert(['id'=>321, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Culik']);
        DB::table('villages')->insert(['id'=>322, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Datah']);
        DB::table('villages')->insert(['id'=>323, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Kerta Mandala']);
        DB::table('villages')->insert(['id'=>324, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Kesimpar']);
        DB::table('villages')->insert(['id'=>325, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Laba Sari']);
        DB::table('villages')->insert(['id'=>326, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Nawakerti']);
        DB::table('villages')->insert(['id'=>327, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Pidpid']);
        DB::table('villages')->insert(['id'=>328, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Purwakerti']);
        DB::table('villages')->insert(['id'=>329, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Tista']);
        DB::table('villages')->insert(['id'=>330, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Tiyingtali']);
        DB::table('villages')->insert(['id'=>331, 'districts_id'=>27, 'zipcode'=>'80852', 'name'=>'Tri Buana']);
        //Kecamatan Kubu Kab. Karangasem Provinsi Bali
        DB::table('districts')->insert(['id'=>28, 'city_id'=>6, 'name'=>'Kubu']);
        DB::table('villages')->insert(['id'=>332, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Ban']);
        DB::table('villages')->insert(['id'=>333, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Batu Ringgit']);
        DB::table('villages')->insert(['id'=>334, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Dukuh']);
        DB::table('villages')->insert(['id'=>335, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Kubu']);
        DB::table('villages')->insert(['id'=>336, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Sukadana']);
        DB::table('villages')->insert(['id'=>337, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Tianyar Barat']);
        DB::table('villages')->insert(['id'=>338, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Tianyar Tengah']);
        DB::table('villages')->insert(['id'=>339, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Tianyar Timur']);
        DB::table('villages')->insert(['id'=>340, 'districts_id'=>28, 'zipcode'=>'80853', 'name'=>'Tulamben']);
        //Kecamatan Bebandem Kab. Karangasem Provinsi Bali
        DB::table('districts')->insert(['id'=>29, 'city_id'=>6, 'name'=>'Bebandem']);
        DB::table('villages')->insert(['id'=>341, 'districts_id'=>29, 'zipcode'=>'80861', 'name'=>'Bebandem']);
        DB::table('villages')->insert(['id'=>342, 'districts_id'=>29, 'zipcode'=>'80861', 'name'=>'Buana Giri']);
        DB::table('villages')->insert(['id'=>343, 'districts_id'=>29, 'zipcode'=>'80861', 'name'=>'Budakeling (bude Keling)']);
        DB::table('villages')->insert(['id'=>344, 'districts_id'=>29, 'zipcode'=>'80861', 'name'=>'Bungaya (bungaya Kauh)']);
        DB::table('villages')->insert(['id'=>345, 'districts_id'=>29, 'zipcode'=>'80861', 'name'=>'Bungaya Kangin']);
        DB::table('villages')->insert(['id'=>346, 'districts_id'=>29, 'zipcode'=>'80861', 'name'=>'Jungutan']);
        DB::table('villages')->insert(['id'=>347, 'districts_id'=>29, 'zipcode'=>'80861', 'name'=>'Macang']);
        DB::table('villages')->insert(['id'=>348, 'districts_id'=>29, 'zipcode'=>'80861', 'name'=>'Sibetan']);
        //Kecamatan Selat Kab. Karangasem Provinsi Bali
        DB::table('districts')->insert(['id'=>30, 'city_id'=>6, 'name'=>'Selat']);
        DB::table('villages')->insert(['id'=>349, 'districts_id'=>30, 'zipcode'=>'80862', 'name'=>'Amerta Bhuana']);
        DB::table('villages')->insert(['id'=>350, 'districts_id'=>30, 'zipcode'=>'80862', 'name'=>'Duda']);
        DB::table('villages')->insert(['id'=>351, 'districts_id'=>30, 'zipcode'=>'80862', 'name'=>'Duda Timur']);
        DB::table('villages')->insert(['id'=>352, 'districts_id'=>30, 'zipcode'=>'80862', 'name'=>'Duda Utara']);
        DB::table('villages')->insert(['id'=>353, 'districts_id'=>30, 'zipcode'=>'80862', 'name'=>'Muncan']);
        DB::table('villages')->insert(['id'=>354, 'districts_id'=>30, 'zipcode'=>'80862', 'name'=>'Pering Sari']);
        DB::table('villages')->insert(['id'=>355, 'districts_id'=>30, 'zipcode'=>'80862', 'name'=>'Sebudi']);
        DB::table('villages')->insert(['id'=>356, 'districts_id'=>30, 'zipcode'=>'80862', 'name'=>'Selat']);
        //Kecamatan Rendang Kab. Karangasem Provinsi Bali
        DB::table('districts')->insert(['id'=>31, 'city_id'=>6, 'name'=>'Rendang']);
        DB::table('villages')->insert(['id'=>357, 'districts_id'=>31, 'zipcode'=>'80863', 'name'=>'Besakih']);
        DB::table('villages')->insert(['id'=>358, 'districts_id'=>31, 'zipcode'=>'80863', 'name'=>'Menanga']);
        DB::table('villages')->insert(['id'=>359, 'districts_id'=>31, 'zipcode'=>'80863', 'name'=>'Nongan']);
        DB::table('villages')->insert(['id'=>360, 'districts_id'=>31, 'zipcode'=>'80863', 'name'=>'Pempatan']);
        DB::table('villages')->insert(['id'=>361, 'districts_id'=>31, 'zipcode'=>'80863', 'name'=>'Pesaban']);
        DB::table('villages')->insert(['id'=>362, 'districts_id'=>31, 'zipcode'=>'80863', 'name'=>'Rendang']);
        //Kecamatan Sidemen Kab. Karangasem Provinsi Bali
        DB::table('districts')->insert(['id'=>32, 'city_id'=>6, 'name'=>'Sidemen']);
        DB::table('villages')->insert(['id'=>363, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Kertha Buana']);
        DB::table('villages')->insert(['id'=>364, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Lokasari']);
        DB::table('villages')->insert(['id'=>365, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Sangkan Gunung']);
        DB::table('villages')->insert(['id'=>366, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Sidemen']);
        DB::table('villages')->insert(['id'=>367, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Sindu Wati']);
        DB::table('villages')->insert(['id'=>368, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Talibeng']);
        DB::table('villages')->insert(['id'=>369, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Tangkup']);
        DB::table('villages')->insert(['id'=>370, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Telaga Tawang']);
        DB::table('villages')->insert(['id'=>371, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Tri Eka Buana']);
        DB::table('villages')->insert(['id'=>372, 'districts_id'=>32, 'zipcode'=>'80864', 'name'=>'Wisma Kerta']);
        //Kecamatan Manggis Kab. Karangasem Provinsi Bali
        DB::table('districts')->insert(['id'=>33, 'city_id'=>6, 'name'=>'Manggis']);
        DB::table('villages')->insert(['id'=>373, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Antiga']);
        DB::table('villages')->insert(['id'=>374, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Antiga Kelod']);
        DB::table('villages')->insert(['id'=>375, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Gegelang']);
        DB::table('villages')->insert(['id'=>376, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Manggis']);
        DB::table('villages')->insert(['id'=>377, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Ngis']);
        DB::table('villages')->insert(['id'=>378, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Nyuh Tebel']);
        DB::table('villages')->insert(['id'=>379, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Padangbai']);
        DB::table('villages')->insert(['id'=>380, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Pesedahan']);
        DB::table('villages')->insert(['id'=>381, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Selumbung']);
        DB::table('villages')->insert(['id'=>382, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Sengkidu']);
        DB::table('villages')->insert(['id'=>383, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Tenganan']);
        DB::table('villages')->insert(['id'=>384, 'districts_id'=>33, 'zipcode'=>'80871', 'name'=>'Ulakan']);

        //Kab. Buleleng Provinsi Bali
        DB::table('cities')->insert(['id'=>7, 'province_id'=>1, 'type'=>'regencies', 'name'=>'Buleleng']);
        //Kecamatan Buleleng Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>34, 'city_id'=>7, 'name'=>'Buleleng']);
        DB::table('villages')->insert(['id'=>385, 'districts_id'=>34, 'zipcode'=>'81111', 'name'=>'Kampung Singaraja']);
        DB::table('villages')->insert(['id'=>386, 'districts_id'=>34, 'zipcode'=>'81112', 'name'=>'Astina']);
        DB::table('villages')->insert(['id'=>387, 'districts_id'=>34, 'zipcode'=>'81112', 'name'=>'Kendran']);
        DB::table('villages')->insert(['id'=>388, 'districts_id'=>34, 'zipcode'=>'81113', 'name'=>'Banjar Bali']);
        DB::table('villages')->insert(['id'=>389, 'districts_id'=>34, 'zipcode'=>'81113', 'name'=>'Banjar Jawa']);
        DB::table('villages')->insert(['id'=>390, 'districts_id'=>34, 'zipcode'=>'81114', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>391, 'districts_id'=>34, 'zipcode'=>'81114', 'name'=>'Kampung Kajanan']);
        DB::table('villages')->insert(['id'=>392, 'districts_id'=>34, 'zipcode'=>'81115', 'name'=>'Kampung Anyar']);
        DB::table('villages')->insert(['id'=>393, 'districts_id'=>34, 'zipcode'=>'81115', 'name'=>'Kampung Bugis']);
        DB::table('villages')->insert(['id'=>394, 'districts_id'=>34, 'zipcode'=>'81116', 'name'=>'Banyuasri']);
        DB::table('villages')->insert(['id'=>395, 'districts_id'=>34, 'zipcode'=>'81116', 'name'=>'Kaliuntu']);
        DB::table('villages')->insert(['id'=>396, 'districts_id'=>34, 'zipcode'=>'81117', 'name'=>'Banjar Tegal']);
        DB::table('villages')->insert(['id'=>397, 'districts_id'=>34, 'zipcode'=>'81118', 'name'=>'Paket Agung']);
        DB::table('villages')->insert(['id'=>398, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Alasangker']);
        DB::table('villages')->insert(['id'=>399, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Anturan']);
        DB::table('villages')->insert(['id'=>400, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Banyuning']);
        DB::table('villages')->insert(['id'=>401, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Beratan']);
        DB::table('villages')->insert(['id'=>402, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Bhakti Seraga (baktiseraga)']);
        DB::table('villages')->insert(['id'=>403, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Jinengdalem']);
        DB::table('villages')->insert(['id'=>404, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Kalibukbuk']);
        DB::table('villages')->insert(['id'=>405, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Liligundi']);
        DB::table('villages')->insert(['id'=>406, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Nagasepaha']);
        DB::table('villages')->insert(['id'=>407, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Pemaron']);
        DB::table('villages')->insert(['id'=>408, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Penarukan']);
        DB::table('villages')->insert(['id'=>409, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Penglatan']);
        DB::table('villages')->insert(['id'=>410, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Petandakan']);
        DB::table('villages')->insert(['id'=>411, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Poh Bergong']);
        DB::table('villages')->insert(['id'=>412, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Sari Mekar']);
        DB::table('villages')->insert(['id'=>413, 'districts_id'=>34, 'zipcode'=>'81119', 'name'=>'Tukadmungga']);
        //Kecamatan Banjar Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>35, 'city_id'=>7, 'name'=>'Banjar']);
        DB::table('villages')->insert(['id'=>414, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Banjar']);
        DB::table('villages')->insert(['id'=>415, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Banjar Tegeha']);
        DB::table('villages')->insert(['id'=>416, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Banyuatis']);
        DB::table('villages')->insert(['id'=>417, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Banyusri']);
        DB::table('villages')->insert(['id'=>418, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Cempaga']);
        DB::table('villages')->insert(['id'=>419, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Dencarik']);
        DB::table('villages')->insert(['id'=>420, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Gesing']);
        DB::table('villages')->insert(['id'=>421, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Gobleg']);
        DB::table('villages')->insert(['id'=>422, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Kaliasem']);
        DB::table('villages')->insert(['id'=>423, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Kayuputih']);
        DB::table('villages')->insert(['id'=>424, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Munduk']);
        DB::table('villages')->insert(['id'=>425, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Pedawa']);
        DB::table('villages')->insert(['id'=>426, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Sidetapa']);
        DB::table('villages')->insert(['id'=>427, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Tampekan']);
        DB::table('villages')->insert(['id'=>428, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Temukus']);
        DB::table('villages')->insert(['id'=>429, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Tigawasa']);
        DB::table('villages')->insert(['id'=>430, 'districts_id'=>35, 'zipcode'=>'81152', 'name'=>'Tirtasari']);
        //Kecamatan Seririt Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>36, 'city_id'=>7, 'name'=>'Seririt']);
        DB::table('villages')->insert(['id'=>431, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Banjar Asem']);
        DB::table('villages')->insert(['id'=>432, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Bestala']);
        DB::table('villages')->insert(['id'=>433, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Bubunan']);
        DB::table('villages')->insert(['id'=>434, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Gunungsari']);
        DB::table('villages')->insert(['id'=>435, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Joanyar']);
        DB::table('villages')->insert(['id'=>436, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Kalianget']);
        DB::table('villages')->insert(['id'=>437, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Kalisada']);
        DB::table('villages')->insert(['id'=>438, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Lokapaksa']);
        DB::table('villages')->insert(['id'=>439, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Mayong']);
        DB::table('villages')->insert(['id'=>440, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Munduk Bestala']);
        DB::table('villages')->insert(['id'=>441, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Pangkungparuk']);
        DB::table('villages')->insert(['id'=>442, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Patemoh (patemon)']);
        DB::table('villages')->insert(['id'=>443, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Pengastulan']);
        DB::table('villages')->insert(['id'=>444, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Rangdu']);
        DB::table('villages')->insert(['id'=>445, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Ringdikit']);
        DB::table('villages')->insert(['id'=>446, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Seririt']);
        DB::table('villages')->insert(['id'=>447, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Sulanyah']);
        DB::table('villages')->insert(['id'=>448, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Tangguwisia']);
        DB::table('villages')->insert(['id'=>449, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Ularan']);
        DB::table('villages')->insert(['id'=>450, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Umeanyar']);
        DB::table('villages')->insert(['id'=>451, 'districts_id'=>36, 'zipcode'=>'81153', 'name'=>'Unggahan']);
        //Kecamatan Busungbiu Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>37, 'city_id'=>7, 'name'=>'Busungbiu']);
        DB::table('villages')->insert(['id'=>452, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Bengkel']);
        DB::table('villages')->insert(['id'=>453, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Bongancina']);
        DB::table('villages')->insert(['id'=>454, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Busungbiu']);
        DB::table('villages')->insert(['id'=>455, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Kedia (kedis)']);
        DB::table('villages')->insert(['id'=>456, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Kekeran']);
        DB::table('villages')->insert(['id'=>457, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Pelapuan']);
        DB::table('villages')->insert(['id'=>458, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Pucaksari']);
        DB::table('villages')->insert(['id'=>459, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Sepang']);
        DB::table('villages')->insert(['id'=>460, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Sepang Kelod']);
        DB::table('villages')->insert(['id'=>461, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Subuk']);
        DB::table('villages')->insert(['id'=>462, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Telaga']);
        DB::table('villages')->insert(['id'=>463, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Tinggarsari']);
        DB::table('villages')->insert(['id'=>464, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Tista']);
        DB::table('villages')->insert(['id'=>465, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Titab']);
        DB::table('villages')->insert(['id'=>466, 'districts_id'=>37, 'zipcode'=>'81154', 'name'=>'Umejero']);
        //Kecamatan Gerokgak Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>38, 'city_id'=>7, 'name'=>'Gerokgak']);
        DB::table('villages')->insert(['id'=>467, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Banyupoh']);
        DB::table('villages')->insert(['id'=>468, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Celukan Bawang']);
        DB::table('villages')->insert(['id'=>469, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Gerokgak']);
        DB::table('villages')->insert(['id'=>470, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Musi']);
        DB::table('villages')->insert(['id'=>471, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Patas']);
        DB::table('villages')->insert(['id'=>472, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Pejarakan']);
        DB::table('villages')->insert(['id'=>473, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Pemuteran']);
        DB::table('villages')->insert(['id'=>474, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Pengulon']);
        DB::table('villages')->insert(['id'=>475, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Penyabangan']);
        DB::table('villages')->insert(['id'=>476, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Sanggalangit']);
        DB::table('villages')->insert(['id'=>477, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Sumber Klampok']);
        DB::table('villages')->insert(['id'=>478, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Sumberkima']);
        DB::table('villages')->insert(['id'=>479, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Tinga Tinga']);
        DB::table('villages')->insert(['id'=>480, 'districts_id'=>38, 'zipcode'=>'81155', 'name'=>'Tukad Sumaga']);
        //Kecamatan Sukasada Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>39, 'city_id'=>7, 'name'=>'Sukasada']);
        DB::table('villages')->insert(['id'=>481, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Ambengan']);
        DB::table('villages')->insert(['id'=>482, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Gitgit']);
        DB::table('villages')->insert(['id'=>483, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Kayuputih']);
        DB::table('villages')->insert(['id'=>484, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Padangbulia']);
        DB::table('villages')->insert(['id'=>485, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Pancasari']);
        DB::table('villages')->insert(['id'=>486, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Panji']);
        DB::table('villages')->insert(['id'=>487, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Panji Anom']);
        DB::table('villages')->insert(['id'=>488, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Pegadungan']);
        DB::table('villages')->insert(['id'=>489, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Pegayaman']);
        DB::table('villages')->insert(['id'=>490, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Sambangan']);
        DB::table('villages')->insert(['id'=>491, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Selat']);
        DB::table('villages')->insert(['id'=>492, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Silangjana']);
        DB::table('villages')->insert(['id'=>493, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Sukasada']);
        DB::table('villages')->insert(['id'=>494, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Tegal Linggah (tegalinggah)']);
        DB::table('villages')->insert(['id'=>495, 'districts_id'=>39, 'zipcode'=>'81161', 'name'=>'Wanagiri']);
        //Kecamatan Sawan Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>40, 'city_id'=>7, 'name'=>'Sawan']);
        DB::table('villages')->insert(['id'=>496, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Bebetin']);
        DB::table('villages')->insert(['id'=>497, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Bungkulan']);
        DB::table('villages')->insert(['id'=>498, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Galungan']);
        DB::table('villages')->insert(['id'=>499, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Giri Emas']);
        DB::table('villages')->insert(['id'=>500, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Jagaraga']);
        DB::table('villages')->insert(['id'=>501, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Kerobokan']);
        DB::table('villages')->insert(['id'=>502, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Lemukih']);
        DB::table('villages')->insert(['id'=>503, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Menyali']);
        DB::table('villages')->insert(['id'=>504, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Sangsit']);
        DB::table('villages')->insert(['id'=>505, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Sawan']);
        DB::table('villages')->insert(['id'=>506, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Sekumpul']);
        DB::table('villages')->insert(['id'=>507, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Sinabun']);
        DB::table('villages')->insert(['id'=>508, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Sudaji']);
        DB::table('villages')->insert(['id'=>509, 'districts_id'=>40, 'zipcode'=>'81171', 'name'=>'Suwug']);
        //Kecamatan Kubutambahan Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>41, 'city_id'=>7, 'name'=>'Kubutambahan']);
        DB::table('villages')->insert(['id'=>510, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Bengkala']);
        DB::table('villages')->insert(['id'=>511, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Bila']);
        DB::table('villages')->insert(['id'=>512, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Bontihing']);
        DB::table('villages')->insert(['id'=>513, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Bukti']);
        DB::table('villages')->insert(['id'=>514, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Bulian']);
        DB::table('villages')->insert(['id'=>515, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Depeha']);
        DB::table('villages')->insert(['id'=>516, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Kubutambahan']);
        DB::table('villages')->insert(['id'=>517, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Mengening']);
        DB::table('villages')->insert(['id'=>518, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Pakisan']);
        DB::table('villages')->insert(['id'=>519, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Tajun']);
        DB::table('villages')->insert(['id'=>520, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Tambakan']);
        DB::table('villages')->insert(['id'=>521, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Tamblang']);
        DB::table('villages')->insert(['id'=>522, 'districts_id'=>41, 'zipcode'=>'81172', 'name'=>'Tunjung']);
        //Kecamatan Tejakula Kab. Buleleng Provinsi Bali
        DB::table('districts')->insert(['id'=>42, 'city_id'=>7, 'name'=>'Tejakula']);
        DB::table('villages')->insert(['id'=>523, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Bondalem']);
        DB::table('villages')->insert(['id'=>524, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Julah']);
        DB::table('villages')->insert(['id'=>525, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Les']);
        DB::table('villages')->insert(['id'=>526, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Madenan']);
        DB::table('villages')->insert(['id'=>527, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Pacung']);
        DB::table('villages')->insert(['id'=>528, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Penuktukan']);
        DB::table('villages')->insert(['id'=>529, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Sambirenteng']);
        DB::table('villages')->insert(['id'=>530, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Sembiran']);
        DB::table('villages')->insert(['id'=>531, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Tejakula']);
        DB::table('villages')->insert(['id'=>532, 'districts_id'=>42, 'zipcode'=>'81173', 'name'=>'Tembok']);

        //Kab. Tabanan Provinsi Bali
        DB::table('cities')->insert(['id'=>8, 'province_id'=>1, 'type'=>'regencies', 'name'=>'Tabanan']);
        //Kecamatan Tabanan Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>43, 'city_id'=>8, 'name'=>'Tabanan']);
        DB::table('villages')->insert(['id'=>533, 'districts_id'=>43, 'zipcode'=>'82111', 'name'=>'Dauh Peken']);
        DB::table('villages')->insert(['id'=>534, 'districts_id'=>43, 'zipcode'=>'82111', 'name'=>'Wanasari']);
        DB::table('villages')->insert(['id'=>535, 'districts_id'=>43, 'zipcode'=>'82112', 'name'=>'Bongan (boongan)']);
        DB::table('villages')->insert(['id'=>536, 'districts_id'=>43, 'zipcode'=>'82113', 'name'=>'Delod Peken']);
        DB::table('villages')->insert(['id'=>537, 'districts_id'=>43, 'zipcode'=>'82114', 'name'=>'Dejan Peken (dajan Peken)']);
        DB::table('villages')->insert(['id'=>538, 'districts_id'=>43, 'zipcode'=>'82115', 'name'=>'Buahan']);
        DB::table('villages')->insert(['id'=>539, 'districts_id'=>43, 'zipcode'=>'82115', 'name'=>'Denbantas']);
        DB::table('villages')->insert(['id'=>540, 'districts_id'=>43, 'zipcode'=>'82115', 'name'=>'Gubug']);
        DB::table('villages')->insert(['id'=>541, 'districts_id'=>43, 'zipcode'=>'82115', 'name'=>'Sesandan']);
        DB::table('villages')->insert(['id'=>542, 'districts_id'=>43, 'zipcode'=>'82115', 'name'=>'Subamia']);
        DB::table('villages')->insert(['id'=>543, 'districts_id'=>43, 'zipcode'=>'82115', 'name'=>'Sudimara']);
        DB::table('villages')->insert(['id'=>544, 'districts_id'=>43, 'zipcode'=>'82115', 'name'=>'Tunjuk']);
        //Kecamatan Kediri Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>44, 'city_id'=>8, 'name'=>'Kediri']);
        DB::table('villages')->insert(['id'=>545, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Abian Tuwung']);
        DB::table('villages')->insert(['id'=>546, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Belalang']);
        DB::table('villages')->insert(['id'=>547, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Bengkel']);
        DB::table('villages')->insert(['id'=>548, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Beraban']);
        DB::table('villages')->insert(['id'=>549, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Buwit']);
        DB::table('villages')->insert(['id'=>550, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Cepaka']);
        DB::table('villages')->insert(['id'=>551, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Kaba-kaba']);
        DB::table('villages')->insert(['id'=>552, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Kediri']);
        DB::table('villages')->insert(['id'=>553, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Nyambu']);
        DB::table('villages')->insert(['id'=>554, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Nyitdah']);
        DB::table('villages')->insert(['id'=>555, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Pandak Bandung']);
        DB::table('villages')->insert(['id'=>556, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Pandak Gede']);
        DB::table('villages')->insert(['id'=>557, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Pangkung Tibah']);
        DB::table('villages')->insert(['id'=>558, 'districts_id'=>44, 'zipcode'=>'82121', 'name'=>'Pejaten']);
        DB::table('villages')->insert(['id'=>559, 'districts_id'=>44, 'zipcode'=>'82123', 'name'=>'Banjar Anyar']);
        //Kecamatan Penebel Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>45, 'city_id'=>8, 'name'=>'Penebel']);
        DB::table('villages')->insert(['id'=>560, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Babahan']);
        DB::table('villages')->insert(['id'=>561, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Biaung']);
        DB::table('villages')->insert(['id'=>562, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Buruan']);
        DB::table('villages')->insert(['id'=>563, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Jatiluwih']);
        DB::table('villages')->insert(['id'=>564, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Jegu']);
        DB::table('villages')->insert(['id'=>565, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Mengeste']);
        DB::table('villages')->insert(['id'=>566, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Penatahan']);
        DB::table('villages')->insert(['id'=>567, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Penebel']);
        DB::table('villages')->insert(['id'=>568, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Pesagi']);
        DB::table('villages')->insert(['id'=>569, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Pitra']);
        DB::table('villages')->insert(['id'=>570, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Rejasa']);
        DB::table('villages')->insert(['id'=>571, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Riang Gede']);
        DB::table('villages')->insert(['id'=>572, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Sangketan']);
        DB::table('villages')->insert(['id'=>573, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Senganan']);
        DB::table('villages')->insert(['id'=>574, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Tajen']);
        DB::table('villages')->insert(['id'=>575, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Tegalinggah']);
        DB::table('villages')->insert(['id'=>576, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Tengkudak']);
        DB::table('villages')->insert(['id'=>577, 'districts_id'=>45, 'zipcode'=>'82152', 'name'=>'Wongaya Gede']);
        //Kecamatan Kerambitan Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>46, 'city_id'=>8, 'name'=>'Kerambitan']);
        DB::table('villages')->insert(['id'=>578, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Batuaji']);
        DB::table('villages')->insert(['id'=>579, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Baturiti']);
        DB::table('villages')->insert(['id'=>580, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Belumbang']);
        DB::table('villages')->insert(['id'=>581, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Kelating']);
        DB::table('villages')->insert(['id'=>582, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Kerambitan']);
        DB::table('villages')->insert(['id'=>583, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Kesiut']);
        DB::table('villages')->insert(['id'=>584, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Kukuh']);
        DB::table('villages')->insert(['id'=>585, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Meliling']);
        DB::table('villages')->insert(['id'=>586, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Pangkung Karung']);
        DB::table('villages')->insert(['id'=>587, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Penarukan']);
        DB::table('villages')->insert(['id'=>588, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Samsam']);
        DB::table('villages')->insert(['id'=>589, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Sembung Gede']);
        DB::table('villages')->insert(['id'=>590, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Tibu Biu (tibubiyu)']);
        DB::table('villages')->insert(['id'=>591, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Timpag']);
        DB::table('villages')->insert(['id'=>592, 'districts_id'=>46, 'zipcode'=>'82161', 'name'=>'Tista']);
        //Kecamatan Selemadeg / Salemadeg Barat Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>47, 'city_id'=>8, 'name'=>'Selemadeg / Salemadeg Barat']);
        DB::table('villages')->insert(['id'=>593, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Angkah']);
        DB::table('villages')->insert(['id'=>594, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Antosari']);
        DB::table('villages')->insert(['id'=>595, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Bengkel Sari']);
        DB::table('villages')->insert(['id'=>596, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Lalang Linggah']);
        DB::table('villages')->insert(['id'=>597, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Lumbung']);
        DB::table('villages')->insert(['id'=>598, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Lumbung Kauh']);
        DB::table('villages')->insert(['id'=>599, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Mundeh']);
        DB::table('villages')->insert(['id'=>600, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Mundeh Kangin']);
        DB::table('villages')->insert(['id'=>601, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Mundeh Kauh']);
        DB::table('villages')->insert(['id'=>602, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Selabih']);
        DB::table('villages')->insert(['id'=>603, 'districts_id'=>47, 'zipcode'=>'82162', 'name'=>'Tiying Gading']);
        //Kecamatan Selemadeg Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>48, 'city_id'=>8, 'name'=>'Selemadeg']);
        DB::table('villages')->insert(['id'=>604, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Antap']);
        DB::table('villages')->insert(['id'=>605, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Bajera']);
        DB::table('villages')->insert(['id'=>606, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Bajera Utara']);
        DB::table('villages')->insert(['id'=>607, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Berembeng']);
        DB::table('villages')->insert(['id'=>608, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Manikyang']);
        DB::table('villages')->insert(['id'=>609, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Pupuan Sawah']);
        DB::table('villages')->insert(['id'=>610, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Selemadeg']);
        DB::table('villages')->insert(['id'=>611, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Serampingan']);
        DB::table('villages')->insert(['id'=>612, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Wanagiri']);
        DB::table('villages')->insert(['id'=>613, 'districts_id'=>48, 'zipcode'=>'82162', 'name'=>'Wanagiri Kauh']);
        //Kecamatan Selemadeg / Salamadeg Timur Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>49, 'city_id'=>8, 'name'=>'Selemadeg / Salamadeg Timur']);
        DB::table('villages')->insert(['id'=>614, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Bantas']);
        DB::table('villages')->insert(['id'=>615, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Beraban']);
        DB::table('villages')->insert(['id'=>616, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Dalang']);
        DB::table('villages')->insert(['id'=>617, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Gadung Sari']);
        DB::table('villages')->insert(['id'=>618, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Gadungan']);
        DB::table('villages')->insert(['id'=>619, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Gunung Salak']);
        DB::table('villages')->insert(['id'=>620, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Mambang']);
        DB::table('villages')->insert(['id'=>621, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Megati']);
        DB::table('villages')->insert(['id'=>622, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Tangguntiti']);
        DB::table('villages')->insert(['id'=>623, 'districts_id'=>49, 'zipcode'=>'82162', 'name'=>'Tegal Mengkeb']);
        //Kecamatan Pupuan Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>50, 'city_id'=>8, 'name'=>'Pupuan']);
        DB::table('villages')->insert(['id'=>624, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Bantiran']);
        DB::table('villages')->insert(['id'=>625, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Batungsel']);
        DB::table('villages')->insert(['id'=>626, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Belatungan']);
        DB::table('villages')->insert(['id'=>627, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Belimbing']);
        DB::table('villages')->insert(['id'=>628, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Jelijih Punggang']);
        DB::table('villages')->insert(['id'=>629, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Karya Sari']);
        DB::table('villages')->insert(['id'=>630, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Kebon Padangan']);
        DB::table('villages')->insert(['id'=>631, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Munduk Temu']);
        DB::table('villages')->insert(['id'=>632, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Padangan']);
        DB::table('villages')->insert(['id'=>633, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Pajahan']);
        DB::table('villages')->insert(['id'=>634, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Pujungan']);
        DB::table('villages')->insert(['id'=>635, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Pupuan']);
        DB::table('villages')->insert(['id'=>636, 'districts_id'=>50, 'zipcode'=>'82163', 'name'=>'Sanda']);
        //Kecamatan Marga Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>51, 'city_id'=>8, 'name'=>'Marga']);
        DB::table('villages')->insert(['id'=>637, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Batannyuh']);
        DB::table('villages')->insert(['id'=>638, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Beringkit']);
        DB::table('villages')->insert(['id'=>639, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Caubelayu']);
        DB::table('villages')->insert(['id'=>640, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Geluntung']);
        DB::table('villages')->insert(['id'=>641, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Kukuh']);
        DB::table('villages')->insert(['id'=>642, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Kuwum']);
        DB::table('villages')->insert(['id'=>643, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Marga']);
        DB::table('villages')->insert(['id'=>644, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Marga Dajan Puri']);
        DB::table('villages')->insert(['id'=>645, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Marga Dauh Puri']);
        DB::table('villages')->insert(['id'=>646, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Payangan']);
        DB::table('villages')->insert(['id'=>647, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Peken Belayu']);
        DB::table('villages')->insert(['id'=>648, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Petiga']);
        DB::table('villages')->insert(['id'=>649, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Selanbawak']);
        DB::table('villages')->insert(['id'=>650, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Tegaljadi']);
        DB::table('villages')->insert(['id'=>651, 'districts_id'=>51, 'zipcode'=>'82181', 'name'=>'Tua']);
        //Kecamatan Baturiti Kab. Tabanan Provinsi Bali
        DB::table('districts')->insert(['id'=>52, 'city_id'=>8, 'name'=>'Baturiti']);
        DB::table('villages')->insert(['id'=>652, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Angseri']);
        DB::table('villages')->insert(['id'=>653, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Antapan']);
        DB::table('villages')->insert(['id'=>654, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Apuan']);
        DB::table('villages')->insert(['id'=>655, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Bangli']);
        DB::table('villages')->insert(['id'=>656, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Batunya']);
        DB::table('villages')->insert(['id'=>657, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Baturiti']);
        DB::table('villages')->insert(['id'=>658, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Candikuning']);
        DB::table('villages')->insert(['id'=>659, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Luwus']);
        DB::table('villages')->insert(['id'=>660, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Mekarsari']);
        DB::table('villages')->insert(['id'=>661, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Perean']);
        DB::table('villages')->insert(['id'=>662, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Perean Kangin']);
        DB::table('villages')->insert(['id'=>663, 'districts_id'=>52, 'zipcode'=>'82191', 'name'=>'Perean Tengah']);

        //Kab. Jembrana Provinsi Bali
        DB::table('cities')->insert(['id'=>9, 'province_id'=>1, 'type'=>'regencies', 'name'=>'Jembrana']);
        //Kecamatan Jembrana Kab. Jembrana Provinsi Bali
        DB::table('districts')->insert(['id'=>53, 'city_id'=>9, 'name'=>'Jembrana']);
        DB::table('villages')->insert(['id'=>664, 'districts_id'=>53, 'zipcode'=>'82211', 'name'=>'Pendem']);
        DB::table('villages')->insert(['id'=>665, 'districts_id'=>53, 'zipcode'=>'82216', 'name'=>'Loloan Timur']);
        DB::table('villages')->insert(['id'=>666, 'districts_id'=>53, 'zipcode'=>'82218', 'name'=>'Air Kuning']);
        DB::table('villages')->insert(['id'=>667, 'districts_id'=>53, 'zipcode'=>'82218', 'name'=>'Batuagung']);
        DB::table('villages')->insert(['id'=>668, 'districts_id'=>53, 'zipcode'=>'82218', 'name'=>'Budeng']);
        DB::table('villages')->insert(['id'=>669, 'districts_id'=>53, 'zipcode'=>'82218', 'name'=>'Dangin Tukadaya']);
        DB::table('villages')->insert(['id'=>670, 'districts_id'=>53, 'zipcode'=>'82218', 'name'=>'Dauhwaru']);
        DB::table('villages')->insert(['id'=>671, 'districts_id'=>53, 'zipcode'=>'82218', 'name'=>'Perancak']);
        DB::table('villages')->insert(['id'=>672, 'districts_id'=>53, 'zipcode'=>'82218', 'name'=>'Sangkaragung']);
        DB::table('villages')->insert(['id'=>673, 'districts_id'=>53, 'zipcode'=>'82218', 'name'=>'Yeh Kuning']);
        //Kecamatan Negara Kab. Jembrana Provinsi Bali
        DB::table('districts')->insert(['id'=>54, 'city_id'=>9, 'name'=>'Negara']);
        DB::table('villages')->insert(['id'=>674, 'districts_id'=>54, 'zipcode'=>'82212', 'name'=>'Baler Bale Agung']);
        DB::table('villages')->insert(['id'=>675, 'districts_id'=>54, 'zipcode'=>'82213', 'name'=>'Banjar Tengah']);
        DB::table('villages')->insert(['id'=>676, 'districts_id'=>54, 'zipcode'=>'82214', 'name'=>'Lelateng']);
        DB::table('villages')->insert(['id'=>677, 'districts_id'=>54, 'zipcode'=>'82215', 'name'=>'Loloan Barat']);
        DB::table('villages')->insert(['id'=>678, 'districts_id'=>54, 'zipcode'=>'82218', 'name'=>'Baluk']);
        DB::table('villages')->insert(['id'=>679, 'districts_id'=>54, 'zipcode'=>'82218', 'name'=>'Banyubiru']);
        DB::table('villages')->insert(['id'=>680, 'districts_id'=>54, 'zipcode'=>'82218', 'name'=>'Berangbang']);
        DB::table('villages')->insert(['id'=>681, 'districts_id'=>54, 'zipcode'=>'82218', 'name'=>'Cupel']);
        DB::table('villages')->insert(['id'=>682, 'districts_id'=>54, 'zipcode'=>'82218', 'name'=>'Kaliakah']);
        DB::table('villages')->insert(['id'=>683, 'districts_id'=>54, 'zipcode'=>'82218', 'name'=>'Pengambengan']);
        DB::table('villages')->insert(['id'=>684, 'districts_id'=>54, 'zipcode'=>'82218', 'name'=>'Tegal Badeng Barat']);
        DB::table('villages')->insert(['id'=>685, 'districts_id'=>54, 'zipcode'=>'82218', 'name'=>'Tegal Badeng Timur']);
        //Kecamatan Melaya Kab. Jembrana Provinsi Bali
        DB::table('districts')->insert(['id'=>55, 'city_id'=>9, 'name'=>'Melaya']);
        DB::table('villages')->insert(['id'=>686, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Blimbingsari (belimbingsari)']);
        DB::table('villages')->insert(['id'=>687, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Candikusuma']);
        DB::table('villages')->insert(['id'=>688, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Ekasari']);
        DB::table('villages')->insert(['id'=>689, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Gilimanuk']);
        DB::table('villages')->insert(['id'=>690, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Manistutu']);
        DB::table('villages')->insert(['id'=>691, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Melaya']);
        DB::table('villages')->insert(['id'=>692, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Nusa Sari']);
        DB::table('villages')->insert(['id'=>693, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Tukadaya']);
        DB::table('villages')->insert(['id'=>694, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Tuwed']);
        DB::table('villages')->insert(['id'=>695, 'districts_id'=>55, 'zipcode'=>'82252', 'name'=>'Warnasari']);
        //Kecamatan Mendoyo Kab. Jembrana Provinsi Bali
        DB::table('districts')->insert(['id'=>56, 'city_id'=>9, 'name'=>'Mendoyo']);
        DB::table('villages')->insert(['id'=>696, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Delod Berawah']);
        DB::table('villages')->insert(['id'=>697, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Mendoyo Dangin Tukad']);
        DB::table('villages')->insert(['id'=>698, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Mendoyo Dauh Tukad']);
        DB::table('villages')->insert(['id'=>699, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Penyaringan']);
        DB::table('villages')->insert(['id'=>700, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Pergung']);
        DB::table('villages')->insert(['id'=>701, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Pohsanten']);
        DB::table('villages')->insert(['id'=>702, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Tegal Cangkring']);
        DB::table('villages')->insert(['id'=>703, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Yeh Embang']);
        DB::table('villages')->insert(['id'=>704, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Yeh Embang Kangin']);
        DB::table('villages')->insert(['id'=>705, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Yeh Embang Kauh']);
        DB::table('villages')->insert(['id'=>706, 'districts_id'=>56, 'zipcode'=>'82261', 'name'=>'Yeh Sumbul']);
        //Kecamatan Pekutatan Kab. Jembrana Provinsi Bali
        DB::table('districts')->insert(['id'=>57, 'city_id'=>9, 'name'=>'Pekutatan']);
        DB::table('villages')->insert(['id'=>707, 'districts_id'=>57, 'zipcode'=>'82262', 'name'=>'Asahduren']);
        DB::table('villages')->insert(['id'=>708, 'districts_id'=>57, 'zipcode'=>'82262', 'name'=>'Gumbrih']);
        DB::table('villages')->insert(['id'=>709, 'districts_id'=>57, 'zipcode'=>'82262', 'name'=>'Manggissari']);
        DB::table('villages')->insert(['id'=>710, 'districts_id'=>57, 'zipcode'=>'82262', 'name'=>'Medewi']);
        DB::table('villages')->insert(['id'=>711, 'districts_id'=>57, 'zipcode'=>'82262', 'name'=>'Pangyangan']);
        DB::table('villages')->insert(['id'=>712, 'districts_id'=>57, 'zipcode'=>'82262', 'name'=>'Pekutatan']);
        DB::table('villages')->insert(['id'=>713, 'districts_id'=>57, 'zipcode'=>'82262', 'name'=>'Pengeragoan (pengragoan)']);
        DB::table('villages')->insert(['id'=>714, 'districts_id'=>57, 'zipcode'=>'82262', 'name'=>'Pulukan']);
    }
}
