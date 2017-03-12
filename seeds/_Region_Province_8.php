<?php

use Illuminate\Database\Seeder;

class _Region_Province_8 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['id'=>4287, 'code'=>'8', 'type'=>'province', 'name'=>'Province 8']);

        //Bali
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>1, 'regionable_type'=>'province']); //Bali
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>1, 'regionable_type'=>'city']); //Denpasar city
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>2, 'regionable_type'=>'city']); //Badung regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>3, 'regionable_type'=>'city']); //Gianyar regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>4, 'regionable_type'=>'city']); //Bangli regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>5, 'regionable_type'=>'city']); //Klungkung regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>6, 'regionable_type'=>'city']); //Karangasem regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>7, 'regionable_type'=>'city']); //Buleleng regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>8, 'regionable_type'=>'city']); //Tabanan regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>9, 'regionable_type'=>'city']); //Jembrana regencies

        DB::table('regions')->insert(['id'=>4288, 'parent'=>4287, 'code'=>'801', 'type'=>'city', 'name'=>'City 801, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4288, 'regionable_id'=>1, 'regionable_type'=>'city']); //Denpasar city
            DB::table('regions')->insert(['id'=>4289, 'parent'=>4288, 'code'=>'8011', 'type'=>'districts', 'name'=>'Districts 8011, City 801, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4289, 'regionable_id'=>1, 'regionable_type'=>'districts']); //Denpasar Utara
            DB::table('regionables')->insert(['region_id'=>4289, 'regionable_id'=>2, 'regionable_type'=>'districts']); //Denpasar Barat
                DB::table('regions')->insert(['id'=>4290, 'parent'=>4289, 'code'=>'80112', 'type'=>'village', 'name'=>'Village 80112, Districts 8011, City 801, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4290, 'regionable_id'=>12, 'regionable_type'=>'village']); //Dauh Puri Kangin
                DB::table('regions')->insert(['id'=>4291, 'parent'=>4289, 'code'=>'80113', 'type'=>'village', 'name'=>'Village 80113, Districts 8011, City 801, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4291, 'regionable_id'=>13, 'regionable_type'=>'village']); //Dauh Puri
                DB::table('regionables')->insert(['region_id'=>4291, 'regionable_id'=>14, 'regionable_type'=>'village']); //Dauh Puri Kauh
                DB::table('regions')->insert(['id'=>4292, 'parent'=>4289, 'code'=>'80114', 'type'=>'village', 'name'=>'Village 80114, Districts 8011, City 801, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4292, 'regionable_id'=>15, 'regionable_type'=>'village']); //Dauh Puri Klod/kelod
                DB::table('regions')->insert(['id'=>4293, 'parent'=>4289, 'code'=>'80117', 'type'=>'village', 'name'=>'Village 80117, Districts 8011, City 801, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4293, 'regionable_id'=>16, 'regionable_type'=>'village']); //Padangsambian
                DB::table('regionables')->insert(['region_id'=>4293, 'regionable_id'=>17, 'regionable_type'=>'village']); //Padangsambian Kaja
                DB::table('regionables')->insert(['region_id'=>4293, 'regionable_id'=>18, 'regionable_type'=>'village']); //Padangsambian Klod/kelod
                DB::table('regions')->insert(['id'=>4294, 'parent'=>4289, 'code'=>'80119', 'type'=>'village', 'name'=>'Village 80119, Districts 8011, City 801, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4294, 'regionable_id'=>19, 'regionable_type'=>'village']); //Pemecutan
                DB::table('regionables')->insert(['region_id'=>4294, 'regionable_id'=>20, 'regionable_type'=>'village']); //Pemecutan Klod/kelod
                DB::table('regionables')->insert(['region_id'=>4294, 'regionable_id'=>21, 'regionable_type'=>'village']); //Tegal Harum
                DB::table('regionables')->insert(['region_id'=>4294, 'regionable_id'=>22, 'regionable_type'=>'village']); //Tegal Kertha
        DB::table('regions')->insert(['id'=>4295, 'parent'=>4287, 'code'=>'802', 'type'=>'city', 'name'=>'City 802, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4295, 'regionable_id'=>1, 'regionable_type'=>'city']); //Denpasar city
            DB::table('regions')->insert(['id'=>4296, 'parent'=>4295, 'code'=>'8022', 'type'=>'districts', 'name'=>'Districts 8022, City 802, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4296, 'regionable_id'=>3, 'regionable_type'=>'districts']); //Denpasar Selatan
                DB::table('regions')->insert(['id'=>4297, 'parent'=>4296, 'code'=>'80221', 'type'=>'village', 'name'=>'Village 80221, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4297, 'regionable_id'=>23, 'regionable_type'=>'village']); //Pemogan
                DB::table('regions')->insert(['id'=>4298, 'parent'=>4296, 'code'=>'80222', 'type'=>'village', 'name'=>'Village 80222, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4298, 'regionable_id'=>24, 'regionable_type'=>'village']); //Pedungan
                DB::table('regions')->insert(['id'=>4299, 'parent'=>4296, 'code'=>'80223', 'type'=>'village', 'name'=>'Village 80223, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4299, 'regionable_id'=>25, 'regionable_type'=>'village']); //Sesetan
                DB::table('regions')->insert(['id'=>4300, 'parent'=>4296, 'code'=>'80224', 'type'=>'village', 'name'=>'Village 80224, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4300, 'regionable_id'=>26, 'regionable_type'=>'village']); //Sidakarya
                DB::table('regions')->insert(['id'=>4301, 'parent'=>4296, 'code'=>'80225', 'type'=>'village', 'name'=>'Village 80225, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4301, 'regionable_id'=>27, 'regionable_type'=>'village']); //Panjer
                DB::table('regions')->insert(['id'=>4302, 'parent'=>4296, 'code'=>'80226', 'type'=>'village', 'name'=>'Village 80226, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4302, 'regionable_id'=>28, 'regionable_type'=>'village']); //Renon
                DB::table('regions')->insert(['id'=>4303, 'parent'=>4296, 'code'=>'80227', 'type'=>'village', 'name'=>'Village 80227, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4303, 'regionable_id'=>29, 'regionable_type'=>'village']); //Sanur Kaja
                DB::table('regionables')->insert(['region_id'=>4303, 'regionable_id'=>30, 'regionable_type'=>'village']); //Sanur Kauh
                DB::table('regions')->insert(['id'=>4304, 'parent'=>4296, 'code'=>'80228', 'type'=>'village', 'name'=>'Village 80228, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4304, 'regionable_id'=>31, 'regionable_type'=>'village']); //Sanur
                DB::table('regions')->insert(['id'=>4305, 'parent'=>4296, 'code'=>'80229', 'type'=>'village', 'name'=>'Village 80229, Districts 8022, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4305, 'regionable_id'=>32, 'regionable_type'=>'village']); //Serangan
            DB::table('regions')->insert(['id'=>4306, 'parent'=>4295, 'code'=>'8023', 'type'=>'districts', 'name'=>'Districts 8023, City 802, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4306, 'regionable_id'=>1, 'regionable_type'=>'districts']); //Denpasar Utara
            DB::table('regionables')->insert(['region_id'=>4306, 'regionable_id'=>4, 'regionable_type'=>'districts']); //Denpasar Timur
                DB::table('regions')->insert(['id'=>4307, 'parent'=>4306, 'code'=>'80232', 'type'=>'village', 'name'=>'Village 80232, Districts 8023, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4307, 'regionable_id'=>33, 'regionable_type'=>'village']); //Dangin Puri
                DB::table('regions')->insert(['id'=>4308, 'parent'=>4306, 'code'=>'80234', 'type'=>'village', 'name'=>'Village 80234, Districts 8023, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4308, 'regionable_id'=>34, 'regionable_type'=>'village']); //Dangin Puri Klod
                DB::table('regions')->insert(['id'=>4309, 'parent'=>4306, 'code'=>'80235', 'type'=>'village', 'name'=>'Village 80235, Districts 8023, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4309, 'regionable_id'=>35, 'regionable_type'=>'village']); //Sumerta
                DB::table('regions')->insert(['id'=>4310, 'parent'=>4306, 'code'=>'80236', 'type'=>'village', 'name'=>'Village 80236, Districts 8023, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4310, 'regionable_id'=>36, 'regionable_type'=>'village']); //Sumerta Kaja
                DB::table('regionables')->insert(['region_id'=>4310, 'regionable_id'=>37, 'regionable_type'=>'village']); //Sumerta Kauh
                DB::table('regions')->insert(['id'=>4311, 'parent'=>4306, 'code'=>'80237', 'type'=>'village', 'name'=>'Village 80237, Districts 8023, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4311, 'regionable_id'=>38, 'regionable_type'=>'village']); //Kesiman
                DB::table('regionables')->insert(['region_id'=>4311, 'regionable_id'=>39, 'regionable_type'=>'village']); //Kesiman Kertalangu
                DB::table('regionables')->insert(['region_id'=>4311, 'regionable_id'=>40, 'regionable_type'=>'village']); //Kesiman Petilan
                DB::table('regions')->insert(['id'=>4312, 'parent'=>4306, 'code'=>'80238', 'type'=>'village', 'name'=>'Village 80238, Districts 8023, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4312, 'regionable_id'=>41, 'regionable_type'=>'village']); //Penatih
                DB::table('regionables')->insert(['region_id'=>4312, 'regionable_id'=>42, 'regionable_type'=>'village']); //Penatih Dangin Puri
                DB::table('regions')->insert(['id'=>4313, 'parent'=>4306, 'code'=>'80239', 'type'=>'village', 'name'=>'Village 80239, Districts 8023, City 802, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4313, 'regionable_id'=>11, 'regionable_type'=>'village']); //Tonja
                DB::table('regionables')->insert(['region_id'=>4313, 'regionable_id'=>43, 'regionable_type'=>'village']); //Sumerta Kelod/klod
        DB::table('regions')->insert(['id'=>4314, 'parent'=>4287, 'code'=>'803', 'type'=>'city', 'name'=>'City 803, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4314, 'regionable_id'=>2, 'regionable_type'=>'city']); //Badung regencies
            DB::table('regions')->insert(['id'=>4315, 'parent'=>4314, 'code'=>'8035', 'type'=>'districts', 'name'=>'Districts 8035, City 803, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4315, 'regionable_id'=>5, 'regionable_type'=>'districts']); //Mengwi
            DB::table('regionables')->insert(['region_id'=>4315, 'regionable_id'=>6, 'regionable_type'=>'districts']); //Abiansemal
            DB::table('regionables')->insert(['region_id'=>4315, 'regionable_id'=>7, 'regionable_type'=>'districts']); //Petang
                DB::table('regions')->insert(['id'=>4316, 'parent'=>4315, 'code'=>'80353', 'type'=>'village', 'name'=>'Village 80353, Districts 8035, City 803, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4316, 'regionable_id'=>82, 'regionable_type'=>'village']); //Belok
                DB::table('regionables')->insert(['region_id'=>4316, 'regionable_id'=>83, 'regionable_type'=>'village']); //Carangsari
                DB::table('regionables')->insert(['region_id'=>4316, 'regionable_id'=>84, 'regionable_type'=>'village']); //Getasan
                DB::table('regionables')->insert(['region_id'=>4316, 'regionable_id'=>85, 'regionable_type'=>'village']); //Pangsan
                DB::table('regionables')->insert(['region_id'=>4316, 'regionable_id'=>86, 'regionable_type'=>'village']); //Pelaga
                DB::table('regionables')->insert(['region_id'=>4316, 'regionable_id'=>87, 'regionable_type'=>'village']); //Petang
                DB::table('regionables')->insert(['region_id'=>4316, 'regionable_id'=>88, 'regionable_type'=>'village']); //Sulangai
            DB::table('regions')->insert(['id'=>4317, 'parent'=>4314, 'code'=>'8036', 'type'=>'districts', 'name'=>'Districts 8036, City 803, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4317, 'regionable_id'=>8, 'regionable_type'=>'districts']); //Kuta Selatan
            DB::table('regionables')->insert(['region_id'=>4317, 'regionable_id'=>9, 'regionable_type'=>'districts']); //Kuta Utara
            DB::table('regionables')->insert(['region_id'=>4317, 'regionable_id'=>10, 'regionable_type'=>'districts']); //Kuta
                DB::table('regions')->insert(['id'=>4318, 'parent'=>4317, 'code'=>'80361', 'type'=>'village', 'name'=>'Village 80361, Districts 8036, City 803, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>89, 'regionable_type'=>'village']); //Benoa
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>90, 'regionable_type'=>'village']); //Jimbaran
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>91, 'regionable_type'=>'village']); //Kutuh
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>92, 'regionable_type'=>'village']); //Pecatu
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>93, 'regionable_type'=>'village']); //Tanjung Benoa
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>94, 'regionable_type'=>'village']); //Ungasan
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>95, 'regionable_type'=>'village']); //Canggu
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>96, 'regionable_type'=>'village']); //Dalung
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>97, 'regionable_type'=>'village']); //Kerobokan
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>98, 'regionable_type'=>'village']); //Kerobokan Kaja
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>99, 'regionable_type'=>'village']); //Kerobokan Kelod
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>100, 'regionable_type'=>'village']); //Tibubeneng
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>101, 'regionable_type'=>'village']); //Kedonganan
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>102, 'regionable_type'=>'village']); //Kuta
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>103, 'regionable_type'=>'village']); //Legian
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>104, 'regionable_type'=>'village']); //Seminyak
                DB::table('regionables')->insert(['region_id'=>4318, 'regionable_id'=>105, 'regionable_type'=>'village']); //Tuban
        DB::table('regions')->insert(['id'=>4319, 'parent'=>4287, 'code'=>'805', 'type'=>'city', 'name'=>'City 805, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4319, 'regionable_id'=>3, 'regionable_type'=>'city']); //Gianyar regencies
            DB::table('regions')->insert(['id'=>4320, 'parent'=>4319, 'code'=>'8051', 'type'=>'districts', 'name'=>'Districts 8051, City 805, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4320, 'regionable_id'=>11, 'regionable_type'=>'districts']); //Gianyar
                DB::table('regions')->insert(['id'=>4321, 'parent'=>4320, 'code'=>'80511', 'type'=>'village', 'name'=>'Village 80511, Districts 8051, City 805, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4321, 'regionable_id'=>106, 'regionable_type'=>'village']); //Gianyar
                DB::table('regions')->insert(['id'=>4322, 'parent'=>4320, 'code'=>'80512', 'type'=>'village', 'name'=>'Village 80512, Districts 8051, City 805, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4322, 'regionable_id'=>107, 'regionable_type'=>'village']); //Samplangan
                DB::table('regions')->insert(['id'=>4323, 'parent'=>4320, 'code'=>'80513', 'type'=>'village', 'name'=>'Village 80513, Districts 8051, City 805, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4323, 'regionable_id'=>108, 'regionable_type'=>'village']); //Beng
                DB::table('regions')->insert(['id'=>4324, 'parent'=>4320, 'code'=>'80515', 'type'=>'village', 'name'=>'Village 80515, Districts 8051, City 805, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>109, 'regionable_type'=>'village']); //Abianbase
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>110, 'regionable_type'=>'village']); //Bakbakan
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>111, 'regionable_type'=>'village']); //Bitera
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>112, 'regionable_type'=>'village']); //Lebih
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>113, 'regionable_type'=>'village']); //Petak
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>114, 'regionable_type'=>'village']); //Petak Kaja
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>115, 'regionable_type'=>'village']); //Serongga
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>116, 'regionable_type'=>'village']); //Siangan
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>117, 'regionable_type'=>'village']); //Sidan
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>118, 'regionable_type'=>'village']); //Sumita
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>119, 'regionable_type'=>'village']); //Suwat
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>120, 'regionable_type'=>'village']); //Tegal Tugu
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>121, 'regionable_type'=>'village']); //Temesi
                DB::table('regionables')->insert(['region_id'=>4324, 'regionable_id'=>122, 'regionable_type'=>'village']); //Tulikup
            DB::table('regions')->insert(['id'=>4325, 'parent'=>4319, 'code'=>'8055', 'type'=>'districts', 'name'=>'Districts 8055, City 805, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4325, 'regionable_id'=>12, 'regionable_type'=>'districts']); //Tampak Siring
                DB::table('regions')->insert(['id'=>4326, 'parent'=>4325, 'code'=>'80552', 'type'=>'village', 'name'=>'Village 80552, Districts 8055, City 805, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4326, 'regionable_id'=>123, 'regionable_type'=>'village']); //Manukaya
                DB::table('regionables')->insert(['region_id'=>4326, 'regionable_id'=>124, 'regionable_type'=>'village']); //Pejeng
                DB::table('regionables')->insert(['region_id'=>4326, 'regionable_id'=>125, 'regionable_type'=>'village']); //Pejeng Kaja
                DB::table('regionables')->insert(['region_id'=>4326, 'regionable_id'=>126, 'regionable_type'=>'village']); //Pejeng Kangin
                DB::table('regionables')->insert(['region_id'=>4326, 'regionable_id'=>127, 'regionable_type'=>'village']); //Pejeng Kawan
                DB::table('regionables')->insert(['region_id'=>4326, 'regionable_id'=>128, 'regionable_type'=>'village']); //Pejeng Klod (kelod)
                DB::table('regionables')->insert(['region_id'=>4326, 'regionable_id'=>129, 'regionable_type'=>'village']); //Sanding
                DB::table('regionables')->insert(['region_id'=>4326, 'regionable_id'=>130, 'regionable_type'=>'village']); //Tampaksiring
            DB::table('regions')->insert(['id'=>4327, 'parent'=>4319, 'code'=>'8056', 'type'=>'districts', 'name'=>'Districts 8056, City 805, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4327, 'regionable_id'=>13, 'regionable_type'=>'districts']); //Tegallalang
                DB::table('regions')->insert(['id'=>4328, 'parent'=>4327, 'code'=>'80561', 'type'=>'village', 'name'=>'Village 80561, Districts 8056, City 805, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4328, 'regionable_id'=>131, 'regionable_type'=>'village']); //Kedisan
                DB::table('regionables')->insert(['region_id'=>4328, 'regionable_id'=>132, 'regionable_type'=>'village']); //Keliki
                DB::table('regionables')->insert(['region_id'=>4328, 'regionable_id'=>133, 'regionable_type'=>'village']); //Kenderan
                DB::table('regionables')->insert(['region_id'=>4328, 'regionable_id'=>134, 'regionable_type'=>'village']); //Pupuan
                DB::table('regionables')->insert(['region_id'=>4328, 'regionable_id'=>135, 'regionable_type'=>'village']); //Sebatu
                DB::table('regionables')->insert(['region_id'=>4328, 'regionable_id'=>136, 'regionable_type'=>'village']); //Taro
                DB::table('regionables')->insert(['region_id'=>4328, 'regionable_id'=>137, 'regionable_type'=>'village']); //Tegallalang
            DB::table('regions')->insert(['id'=>4329, 'parent'=>4319, 'code'=>'8057', 'type'=>'districts', 'name'=>'Districts 8057, City 805, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4329, 'regionable_id'=>14, 'regionable_type'=>'districts']); //Ubud
            DB::table('regionables')->insert(['region_id'=>4329, 'regionable_id'=>15, 'regionable_type'=>'districts']); //Payangan
                DB::table('regions')->insert(['id'=>4330, 'parent'=>4329, 'code'=>'80572', 'type'=>'village', 'name'=>'Village 80572, Districts 8057, City 805, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>146, 'regionable_type'=>'village']); //Bresela (beresela)
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>147, 'regionable_type'=>'village']); //Buahan
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>148, 'regionable_type'=>'village']); //Buahan Kaja
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>149, 'regionable_type'=>'village']); //Bukian
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>150, 'regionable_type'=>'village']); //Kelusa
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>151, 'regionable_type'=>'village']); //Kerta
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>152, 'regionable_type'=>'village']); //Melinggih
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>153, 'regionable_type'=>'village']); //Melinggih Kelod
                DB::table('regionables')->insert(['region_id'=>4330, 'regionable_id'=>154, 'regionable_type'=>'village']); //Puhu
            DB::table('regions')->insert(['id'=>4331, 'parent'=>4319, 'code'=>'8058', 'type'=>'districts', 'name'=>'Districts 8058, City 805, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4331, 'regionable_id'=>16, 'regionable_type'=>'districts']); //Belah Batuh (blahbatuh)
            DB::table('regionables')->insert(['region_id'=>4331, 'regionable_id'=>17, 'regionable_type'=>'districts']); //Sukawati
                DB::table('regions')->insert(['id'=>4332, 'parent'=>4331, 'code'=>'80582', 'type'=>'village', 'name'=>'Village 80582, Districts 8058, City 805, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>164, 'regionable_type'=>'village']); //Batuan
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>165, 'regionable_type'=>'village']); //Batuan Kaler
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>166, 'regionable_type'=>'village']); //Batubulan
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>167, 'regionable_type'=>'village']); //Batubulan Kangin
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>168, 'regionable_type'=>'village']); //Celuk
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>169, 'regionable_type'=>'village']); //Guwang
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>170, 'regionable_type'=>'village']); //Kemenuh
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>171, 'regionable_type'=>'village']); //Ketewel
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>172, 'regionable_type'=>'village']); //Singapadu
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>173, 'regionable_type'=>'village']); //Singapadu Kaler
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>174, 'regionable_type'=>'village']); //Singapadu Tengah
                DB::table('regionables')->insert(['region_id'=>4332, 'regionable_id'=>175, 'regionable_type'=>'village']); //Sukawati
        DB::table('regions')->insert(['id'=>4333, 'parent'=>4287, 'code'=>'806', 'type'=>'city', 'name'=>'City 806, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4333, 'regionable_id'=>4, 'regionable_type'=>'city']); //Bangli regencies
            DB::table('regions')->insert(['id'=>4334, 'parent'=>4333, 'code'=>'8061', 'type'=>'districts', 'name'=>'Districts 8061, City 806, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4334, 'regionable_id'=>18, 'regionable_type'=>'districts']); //Bangli
                DB::table('regions')->insert(['id'=>4335, 'parent'=>4334, 'code'=>'80611', 'type'=>'village', 'name'=>'Village 80611, Districts 8061, City 806, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4335, 'regionable_id'=>176, 'regionable_type'=>'village']); //Kubu
                DB::table('regionables')->insert(['region_id'=>4335, 'regionable_id'=>177, 'regionable_type'=>'village']); //Landih
                DB::table('regions')->insert(['id'=>4336, 'parent'=>4334, 'code'=>'80612', 'type'=>'village', 'name'=>'Village 80612, Districts 8061, City 806, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4336, 'regionable_id'=>178, 'regionable_type'=>'village']); //Cempaga
                DB::table('regions')->insert(['id'=>4337, 'parent'=>4334, 'code'=>'80613', 'type'=>'village', 'name'=>'Village 80613, Districts 8061, City 806, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4337, 'regionable_id'=>179, 'regionable_type'=>'village']); //Kawan
                DB::table('regions')->insert(['id'=>4338, 'parent'=>4334, 'code'=>'80614', 'type'=>'village', 'name'=>'Village 80614, Districts 8061, City 806, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4338, 'regionable_id'=>180, 'regionable_type'=>'village']); //Bebalang
                DB::table('regionables')->insert(['region_id'=>4338, 'regionable_id'=>181, 'regionable_type'=>'village']); //Bunutin
                DB::table('regionables')->insert(['region_id'=>4338, 'regionable_id'=>182, 'regionable_type'=>'village']); //Kayubihi
                DB::table('regionables')->insert(['region_id'=>4338, 'regionable_id'=>183, 'regionable_type'=>'village']); //Pengotan
                DB::table('regionables')->insert(['region_id'=>4338, 'regionable_id'=>184, 'regionable_type'=>'village']); //Taman Bali
            DB::table('regions')->insert(['id'=>4339, 'parent'=>4333, 'code'=>'8065', 'type'=>'districts', 'name'=>'Districts 8065, City 806, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4339, 'regionable_id'=>19, 'regionable_type'=>'districts']); //Kintamani
                DB::table('regions')->insert(['id'=>4340, 'parent'=>4339, 'code'=>'80652', 'type'=>'village', 'name'=>'Village 80652, Districts 8065, City 806, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>185, 'regionable_type'=>'village']); //Abang Songan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>186, 'regionable_type'=>'village']); //Abuan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>187, 'regionable_type'=>'village']); //Awan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>188, 'regionable_type'=>'village']); //Bantang
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>189, 'regionable_type'=>'village']); //Banua
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>190, 'regionable_type'=>'village']); //Batu Dinding
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>191, 'regionable_type'=>'village']); //Batukaang
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>192, 'regionable_type'=>'village']); //Batur Selatan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>193, 'regionable_type'=>'village']); //Batur Tengah
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>194, 'regionable_type'=>'village']); //Batur Utara
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>195, 'regionable_type'=>'village']); //Bayungcerik
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>196, 'regionable_type'=>'village']); //Bayunggede
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>197, 'regionable_type'=>'village']); //Belancan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>198, 'regionable_type'=>'village']); //Belandingan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>199, 'regionable_type'=>'village']); //Belanga
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>200, 'regionable_type'=>'village']); //Belantih
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>201, 'regionable_type'=>'village']); //Binyan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>202, 'regionable_type'=>'village']); //Bonyoh
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>203, 'regionable_type'=>'village']); //Buahan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>204, 'regionable_type'=>'village']); //Bunutin
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>205, 'regionable_type'=>'village']); //Catur
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>206, 'regionable_type'=>'village']); //Daup
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>207, 'regionable_type'=>'village']); //Dausa
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>208, 'regionable_type'=>'village']); //Gunungbau
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>209, 'regionable_type'=>'village']); //Katung
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>210, 'regionable_type'=>'village']); //Kedisan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>211, 'regionable_type'=>'village']); //Kintamani
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>212, 'regionable_type'=>'village']); //Kutuh
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>213, 'regionable_type'=>'village']); //Langgahan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>214, 'regionable_type'=>'village']); //Lembean
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>215, 'regionable_type'=>'village']); //Mangguh
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>216, 'regionable_type'=>'village']); //Manikliyu
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>217, 'regionable_type'=>'village']); //Mengani
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>218, 'regionable_type'=>'village']); //Pengejaran
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>219, 'regionable_type'=>'village']); //Pinggan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>220, 'regionable_type'=>'village']); //Satra
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>221, 'regionable_type'=>'village']); //Sekaan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>222, 'regionable_type'=>'village']); //Sekardadi
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>223, 'regionable_type'=>'village']); //Selulung
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>224, 'regionable_type'=>'village']); //Serahi
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>225, 'regionable_type'=>'village']); //Siyakin
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>226, 'regionable_type'=>'village']); //Songan A
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>227, 'regionable_type'=>'village']); //Songan B
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>228, 'regionable_type'=>'village']); //Subaya
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>229, 'regionable_type'=>'village']); //Sukawana
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>230, 'regionable_type'=>'village']); //Suter
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>231, 'regionable_type'=>'village']); //Terunyan
                DB::table('regionables')->insert(['region_id'=>4340, 'regionable_id'=>232, 'regionable_type'=>'village']); //Ulian
            DB::table('regions')->insert(['id'=>4341, 'parent'=>4333, 'code'=>'8066', 'type'=>'districts', 'name'=>'Districts 8066, City 806, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4341, 'regionable_id'=>20, 'regionable_type'=>'districts']); //Susut
                DB::table('regions')->insert(['id'=>4342, 'parent'=>4341, 'code'=>'80661', 'type'=>'village', 'name'=>'Village 80661, Districts 8066, City 806, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>233, 'regionable_type'=>'village']); //Abuan
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>234, 'regionable_type'=>'village']); //Apuan
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>235, 'regionable_type'=>'village']); //Demulih
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>236, 'regionable_type'=>'village']); //Pengiangan
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>237, 'regionable_type'=>'village']); //Penglumbaran
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>238, 'regionable_type'=>'village']); //Selat
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>239, 'regionable_type'=>'village']); //Sulahan
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>240, 'regionable_type'=>'village']); //Susut
                DB::table('regionables')->insert(['region_id'=>4342, 'regionable_id'=>241, 'regionable_type'=>'village']); //Tiga
            DB::table('regions')->insert(['id'=>4343, 'parent'=>4333, 'code'=>'8067', 'type'=>'districts', 'name'=>'Districts 8067, City 806, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4343, 'regionable_id'=>21, 'regionable_type'=>'districts']); //Tembuku
                DB::table('regions')->insert(['id'=>4344, 'parent'=>4343, 'code'=>'80671', 'type'=>'village', 'name'=>'Village 80671, Districts 8067, City 806, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4344, 'regionable_id'=>242, 'regionable_type'=>'village']); //Bangbang
                DB::table('regionables')->insert(['region_id'=>4344, 'regionable_id'=>243, 'regionable_type'=>'village']); //Jehem
                DB::table('regionables')->insert(['region_id'=>4344, 'regionable_id'=>244, 'regionable_type'=>'village']); //Peninjoan
                DB::table('regionables')->insert(['region_id'=>4344, 'regionable_id'=>245, 'regionable_type'=>'village']); //Tembuku
                DB::table('regionables')->insert(['region_id'=>4344, 'regionable_id'=>246, 'regionable_type'=>'village']); //Undisan
                DB::table('regionables')->insert(['region_id'=>4344, 'regionable_id'=>247, 'regionable_type'=>'village']); //Yangapi
        DB::table('regions')->insert(['id'=>4345, 'parent'=>4287, 'code'=>'807', 'type'=>'city', 'name'=>'City 807, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4345, 'regionable_id'=>5, 'regionable_type'=>'city']); //Klungkung regencies
            DB::table('regions')->insert(['id'=>4346, 'parent'=>4345, 'code'=>'8071', 'type'=>'districts', 'name'=>'Districts 8071, City 807, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4346, 'regionable_id'=>22, 'regionable_type'=>'districts']); //Klungkung
                DB::table('regions')->insert(['id'=>4347, 'parent'=>4346, 'code'=>'80711', 'type'=>'village', 'name'=>'Village 80711, Districts 8071, City 807, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4347, 'regionable_id'=>248, 'regionable_type'=>'village']); //Semarapura Tengah
                DB::table('regions')->insert(['id'=>4348, 'parent'=>4346, 'code'=>'80712', 'type'=>'village', 'name'=>'Village 80712, Districts 8071, City 807, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4348, 'regionable_id'=>249, 'regionable_type'=>'village']); //Semarapura Kaja
                DB::table('regions')->insert(['id'=>4349, 'parent'=>4346, 'code'=>'80713', 'type'=>'village', 'name'=>'Village 80713, Districts 8071, City 807, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4349, 'regionable_id'=>250, 'regionable_type'=>'village']); //Semarapura Kauh
                DB::table('regions')->insert(['id'=>4350, 'parent'=>4346, 'code'=>'80716', 'type'=>'village', 'name'=>'Village 80716, Districts 8071, City 807, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>251, 'regionable_type'=>'village']); //Akah
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>252, 'regionable_type'=>'village']); //Gelgel
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>253, 'regionable_type'=>'village']); //Jumpai
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>254, 'regionable_type'=>'village']); //Kamasan
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>255, 'regionable_type'=>'village']); //Kampung Gelgel
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>256, 'regionable_type'=>'village']); //Manduang
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>257, 'regionable_type'=>'village']); //Satra
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>258, 'regionable_type'=>'village']); //Selat
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>259, 'regionable_type'=>'village']); //Selisihan
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>260, 'regionable_type'=>'village']); //Semarapura Kangin
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>261, 'regionable_type'=>'village']); //Semarapura Klod Kangin
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>262, 'regionable_type'=>'village']); //Semarapura Klod/kelod
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>263, 'regionable_type'=>'village']); //Tangkas
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>264, 'regionable_type'=>'village']); //Tegak
                DB::table('regionables')->insert(['region_id'=>4350, 'regionable_id'=>265, 'regionable_type'=>'village']); //Tojan
            DB::table('regions')->insert(['id'=>4351, 'parent'=>4345, 'code'=>'8075', 'type'=>'districts', 'name'=>'Districts 8075, City 807, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4351, 'regionable_id'=>23, 'regionable_type'=>'districts']); //Banjarangkan
                DB::table('regions')->insert(['id'=>4352, 'parent'=>4351, 'code'=>'80752', 'type'=>'village', 'name'=>'Village 80752, Districts 8075, City 807, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>266, 'regionable_type'=>'village']); //Aan
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>267, 'regionable_type'=>'village']); //Bakas
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>268, 'regionable_type'=>'village']); //Banjarangkan
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>269, 'regionable_type'=>'village']); //Bungbungan
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>270, 'regionable_type'=>'village']); //Getakan
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>271, 'regionable_type'=>'village']); //Negari
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>272, 'regionable_type'=>'village']); //Nyalian
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>273, 'regionable_type'=>'village']); //Nyanglan
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>274, 'regionable_type'=>'village']); //Takmung
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>275, 'regionable_type'=>'village']); //Tihingan
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>276, 'regionable_type'=>'village']); //Timuhun
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>277, 'regionable_type'=>'village']); //Tohpati
                DB::table('regionables')->insert(['region_id'=>4352, 'regionable_id'=>278, 'regionable_type'=>'village']); //Tusan
            DB::table('regions')->insert(['id'=>4353, 'parent'=>4345, 'code'=>'8076', 'type'=>'districts', 'name'=>'Districts 8076, City 807, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4353, 'regionable_id'=>24, 'regionable_type'=>'districts']); //Dawan
                DB::table('regions')->insert(['id'=>4354, 'parent'=>4353, 'code'=>'80761', 'type'=>'village', 'name'=>'Village 80761, Districts 8076, City 807, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>279, 'regionable_type'=>'village']); //Besan
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>280, 'regionable_type'=>'village']); //Dawan Kaler
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>281, 'regionable_type'=>'village']); //Dawan Klod
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>282, 'regionable_type'=>'village']); //Gunaksa
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>283, 'regionable_type'=>'village']); //Kampung Kusamba
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>284, 'regionable_type'=>'village']); //Kusamba
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>285, 'regionable_type'=>'village']); //Paksebali
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>286, 'regionable_type'=>'village']); //Pesinggahan
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>287, 'regionable_type'=>'village']); //Pikat
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>288, 'regionable_type'=>'village']); //Sampalan Klod
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>289, 'regionable_type'=>'village']); //Sampalan Tengah
                DB::table('regionables')->insert(['region_id'=>4354, 'regionable_id'=>290, 'regionable_type'=>'village']); //Sulang
            DB::table('regions')->insert(['id'=>4355, 'parent'=>4345, 'code'=>'8077', 'type'=>'districts', 'name'=>'Districts 8077, City 807, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4355, 'regionable_id'=>25, 'regionable_type'=>'districts']); //Nusapenida
                DB::table('regions')->insert(['id'=>4356, 'parent'=>4355, 'code'=>'80771', 'type'=>'village', 'name'=>'Village 80771, Districts 8077, City 807, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>291, 'regionable_type'=>'village']); //Batukandik
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>292, 'regionable_type'=>'village']); //Batumadeg
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>293, 'regionable_type'=>'village']); //Batununggul
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>294, 'regionable_type'=>'village']); //Bunga Mekar
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>295, 'regionable_type'=>'village']); //Jungutbatu
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>296, 'regionable_type'=>'village']); //Kampung Toyapakeh
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>297, 'regionable_type'=>'village']); //Klumpu
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>298, 'regionable_type'=>'village']); //Kutampi
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>299, 'regionable_type'=>'village']); //Kutampi Kaler
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>300, 'regionable_type'=>'village']); //Lembongan
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>301, 'regionable_type'=>'village']); //Ped
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>302, 'regionable_type'=>'village']); //Pejukutan
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>303, 'regionable_type'=>'village']); //Sakti
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>304, 'regionable_type'=>'village']); //Sekartaji
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>305, 'regionable_type'=>'village']); //Suana
                DB::table('regionables')->insert(['region_id'=>4356, 'regionable_id'=>306, 'regionable_type'=>'village']); //Tanglad
        DB::table('regions')->insert(['id'=>4357, 'parent'=>4287, 'code'=>'808', 'type'=>'city', 'name'=>'City 808, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4357, 'regionable_id'=>6, 'regionable_type'=>'city']); //Karangasem regencies
            DB::table('regions')->insert(['id'=>4358, 'parent'=>4357, 'code'=>'8081', 'type'=>'districts', 'name'=>'Districts 8081, City 808, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4358, 'regionable_id'=>26, 'regionable_type'=>'districts']); //Karang Asem
                DB::table('regions')->insert(['id'=>4359, 'parent'=>4358, 'code'=>'80811', 'type'=>'village', 'name'=>'Village 80811, Districts 8081, City 808, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>307, 'regionable_type'=>'village']); //Bugbug
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>308, 'regionable_type'=>'village']); //Bukit
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>309, 'regionable_type'=>'village']); //Karangasem
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>310, 'regionable_type'=>'village']); //Padang Kerta
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>311, 'regionable_type'=>'village']); //Pertima
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>312, 'regionable_type'=>'village']); //Seraya Barat
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>313, 'regionable_type'=>'village']); //Seraya Tengah
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>314, 'regionable_type'=>'village']); //Seraya Timur
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>315, 'regionable_type'=>'village']); //Tegallinggah
                DB::table('regionables')->insert(['region_id'=>4359, 'regionable_id'=>316, 'regionable_type'=>'village']); //Tumbu
                DB::table('regions')->insert(['id'=>4360, 'parent'=>4358, 'code'=>'80813', 'type'=>'village', 'name'=>'Village 80813, Districts 8081, City 808, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4360, 'regionable_id'=>317, 'regionable_type'=>'village']); //Subagan
            DB::table('regions')->insert(['id'=>4361, 'parent'=>4357, 'code'=>'8085', 'type'=>'districts', 'name'=>'Districts 8085, City 808, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4361, 'regionable_id'=>27, 'regionable_type'=>'districts']); //Abang
            DB::table('regionables')->insert(['region_id'=>4361, 'regionable_id'=>28, 'regionable_type'=>'districts']); //Kubu
                DB::table('regions')->insert(['id'=>4362, 'parent'=>4361, 'code'=>'80853', 'type'=>'village', 'name'=>'Village 80853, Districts 8085, City 808, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>332, 'regionable_type'=>'village']); //Ban
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>333, 'regionable_type'=>'village']); //Batu Ringgit
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>334, 'regionable_type'=>'village']); //Dukuh
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>335, 'regionable_type'=>'village']); //Kubu
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>336, 'regionable_type'=>'village']); //Sukadana
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>337, 'regionable_type'=>'village']); //Tianyar Barat
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>338, 'regionable_type'=>'village']); //Tianyar Tengah
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>339, 'regionable_type'=>'village']); //Tianyar Timur
                DB::table('regionables')->insert(['region_id'=>4362, 'regionable_id'=>340, 'regionable_type'=>'village']); //Tulamben
            DB::table('regions')->insert(['id'=>4363, 'parent'=>4357, 'code'=>'8086', 'type'=>'districts', 'name'=>'Districts 8086, City 808, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4363, 'regionable_id'=>29, 'regionable_type'=>'districts']); //Bebandem
            DB::table('regionables')->insert(['region_id'=>4363, 'regionable_id'=>30, 'regionable_type'=>'districts']); //Selat
            DB::table('regionables')->insert(['region_id'=>4363, 'regionable_id'=>31, 'regionable_type'=>'districts']); //Rendang
            DB::table('regionables')->insert(['region_id'=>4363, 'regionable_id'=>32, 'regionable_type'=>'districts']); //Sidemen
                DB::table('regions')->insert(['id'=>4364, 'parent'=>4363, 'code'=>'80864', 'type'=>'village', 'name'=>'Village 80864, Districts 8086, City 808, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>363, 'regionable_type'=>'village']); //Kertha Buana
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>364, 'regionable_type'=>'village']); //Lokasari
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>365, 'regionable_type'=>'village']); //Sangkan Gunung
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>366, 'regionable_type'=>'village']); //Sidemen
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>367, 'regionable_type'=>'village']); //Sindu Wati
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>368, 'regionable_type'=>'village']); //Talibeng
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>369, 'regionable_type'=>'village']); //Tangkup
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>370, 'regionable_type'=>'village']); //Telaga Tawang
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>371, 'regionable_type'=>'village']); //Tri Eka Buana
                DB::table('regionables')->insert(['region_id'=>4364, 'regionable_id'=>372, 'regionable_type'=>'village']); //Wisma Kerta
            DB::table('regions')->insert(['id'=>4365, 'parent'=>4357, 'code'=>'8087', 'type'=>'districts', 'name'=>'Districts 8087, City 808, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4365, 'regionable_id'=>33, 'regionable_type'=>'districts']); //Manggis
                DB::table('regions')->insert(['id'=>4366, 'parent'=>4365, 'code'=>'80871', 'type'=>'village', 'name'=>'Village 80871, Districts 8087, City 808, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>373, 'regionable_type'=>'village']); //Antiga
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>374, 'regionable_type'=>'village']); //Antiga Kelod
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>375, 'regionable_type'=>'village']); //Gegelang
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>376, 'regionable_type'=>'village']); //Manggis
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>377, 'regionable_type'=>'village']); //Ngis
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>378, 'regionable_type'=>'village']); //Nyuh Tebel
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>379, 'regionable_type'=>'village']); //Padangbai
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>380, 'regionable_type'=>'village']); //Pesedahan
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>381, 'regionable_type'=>'village']); //Selumbung
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>382, 'regionable_type'=>'village']); //Sengkidu
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>383, 'regionable_type'=>'village']); //Tenganan
                DB::table('regionables')->insert(['region_id'=>4366, 'regionable_id'=>384, 'regionable_type'=>'village']); //Ulakan
        DB::table('regions')->insert(['id'=>4367, 'parent'=>4287, 'code'=>'811', 'type'=>'city', 'name'=>'City 811, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4367, 'regionable_id'=>7, 'regionable_type'=>'city']); //Buleleng regencies
            DB::table('regions')->insert(['id'=>4368, 'parent'=>4367, 'code'=>'8111', 'type'=>'districts', 'name'=>'Districts 8111, City 811, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4368, 'regionable_id'=>34, 'regionable_type'=>'districts']); //Buleleng
                DB::table('regions')->insert(['id'=>4369, 'parent'=>4368, 'code'=>'81111', 'type'=>'village', 'name'=>'Village 81111, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4369, 'regionable_id'=>385, 'regionable_type'=>'village']); //Kampung Singaraja
                DB::table('regions')->insert(['id'=>4370, 'parent'=>4368, 'code'=>'81112', 'type'=>'village', 'name'=>'Village 81112, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4370, 'regionable_id'=>386, 'regionable_type'=>'village']); //Astina
                DB::table('regionables')->insert(['region_id'=>4370, 'regionable_id'=>387, 'regionable_type'=>'village']); //Kendran
                DB::table('regions')->insert(['id'=>4371, 'parent'=>4368, 'code'=>'81113', 'type'=>'village', 'name'=>'Village 81113, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4371, 'regionable_id'=>388, 'regionable_type'=>'village']); //Banjar Bali
                DB::table('regionables')->insert(['region_id'=>4371, 'regionable_id'=>389, 'regionable_type'=>'village']); //Banjar Jawa
                DB::table('regions')->insert(['id'=>4372, 'parent'=>4368, 'code'=>'81114', 'type'=>'village', 'name'=>'Village 81114, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4372, 'regionable_id'=>390, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>4372, 'regionable_id'=>391, 'regionable_type'=>'village']); //Kampung Kajanan
                DB::table('regions')->insert(['id'=>4373, 'parent'=>4368, 'code'=>'81115', 'type'=>'village', 'name'=>'Village 81115, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4373, 'regionable_id'=>392, 'regionable_type'=>'village']); //Kampung Anyar
                DB::table('regionables')->insert(['region_id'=>4373, 'regionable_id'=>393, 'regionable_type'=>'village']); //Kampung Bugis
                DB::table('regions')->insert(['id'=>4374, 'parent'=>4368, 'code'=>'81116', 'type'=>'village', 'name'=>'Village 81116, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4374, 'regionable_id'=>394, 'regionable_type'=>'village']); //Banyuasri
                DB::table('regionables')->insert(['region_id'=>4374, 'regionable_id'=>395, 'regionable_type'=>'village']); //Kaliuntu
                DB::table('regions')->insert(['id'=>4375, 'parent'=>4368, 'code'=>'81117', 'type'=>'village', 'name'=>'Village 81117, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4375, 'regionable_id'=>396, 'regionable_type'=>'village']); //Banjar Tegal
                DB::table('regions')->insert(['id'=>4376, 'parent'=>4368, 'code'=>'81118', 'type'=>'village', 'name'=>'Village 81118, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4376, 'regionable_id'=>397, 'regionable_type'=>'village']); //Paket Agung
                DB::table('regions')->insert(['id'=>4377, 'parent'=>4368, 'code'=>'81119', 'type'=>'village', 'name'=>'Village 81119, Districts 8111, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>398, 'regionable_type'=>'village']); //Alasangker
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>399, 'regionable_type'=>'village']); //Anturan
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>400, 'regionable_type'=>'village']); //Banyuning
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>401, 'regionable_type'=>'village']); //Beratan
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>402, 'regionable_type'=>'village']); //Bhakti Seraga (baktiseraga)
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>403, 'regionable_type'=>'village']); //Jinengdalem
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>404, 'regionable_type'=>'village']); //Kalibukbuk
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>405, 'regionable_type'=>'village']); //Liligundi
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>406, 'regionable_type'=>'village']); //Nagasepaha
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>407, 'regionable_type'=>'village']); //Pemaron
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>408, 'regionable_type'=>'village']); //Penarukan
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>409, 'regionable_type'=>'village']); //Penglatan
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>410, 'regionable_type'=>'village']); //Petandakan
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>411, 'regionable_type'=>'village']); //Poh Bergong
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>412, 'regionable_type'=>'village']); //Sari Mekar
                DB::table('regionables')->insert(['region_id'=>4377, 'regionable_id'=>413, 'regionable_type'=>'village']); //Tukadmungga
            DB::table('regions')->insert(['id'=>4378, 'parent'=>4367, 'code'=>'8115', 'type'=>'districts', 'name'=>'Districts 8115, City 811, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4378, 'regionable_id'=>35, 'regionable_type'=>'districts']); //Banjar
            DB::table('regionables')->insert(['region_id'=>4378, 'regionable_id'=>36, 'regionable_type'=>'districts']); //Seririt
            DB::table('regionables')->insert(['region_id'=>4378, 'regionable_id'=>37, 'regionable_type'=>'districts']); //Busungbiu
            DB::table('regionables')->insert(['region_id'=>4378, 'regionable_id'=>38, 'regionable_type'=>'districts']); //Gerokgak
                DB::table('regions')->insert(['id'=>4379, 'parent'=>4378, 'code'=>'81155', 'type'=>'village', 'name'=>'Village 81155, Districts 8115, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>467, 'regionable_type'=>'village']); //Banyupoh
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>468, 'regionable_type'=>'village']); //Celukan Bawang
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>469, 'regionable_type'=>'village']); //Gerokgak
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>470, 'regionable_type'=>'village']); //Musi
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>471, 'regionable_type'=>'village']); //Patas
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>472, 'regionable_type'=>'village']); //Pejarakan
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>473, 'regionable_type'=>'village']); //Pemuteran
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>474, 'regionable_type'=>'village']); //Pengulon
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>475, 'regionable_type'=>'village']); //Penyabangan
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>476, 'regionable_type'=>'village']); //Sanggalangit
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>477, 'regionable_type'=>'village']); //Sumber Klampok
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>478, 'regionable_type'=>'village']); //Sumberkima
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>479, 'regionable_type'=>'village']); //Tinga Tinga
                DB::table('regionables')->insert(['region_id'=>4379, 'regionable_id'=>480, 'regionable_type'=>'village']); //Tukad Sumaga
            DB::table('regions')->insert(['id'=>4380, 'parent'=>4367, 'code'=>'8116', 'type'=>'districts', 'name'=>'Districts 8116, City 811, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4380, 'regionable_id'=>39, 'regionable_type'=>'districts']); //Sukasada
                DB::table('regions')->insert(['id'=>4381, 'parent'=>4380, 'code'=>'81161', 'type'=>'village', 'name'=>'Village 81161, Districts 8116, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>481, 'regionable_type'=>'village']); //Ambengan
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>482, 'regionable_type'=>'village']); //Gitgit
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>483, 'regionable_type'=>'village']); //Kayuputih
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>484, 'regionable_type'=>'village']); //Padangbulia
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>485, 'regionable_type'=>'village']); //Pancasari
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>486, 'regionable_type'=>'village']); //Panji
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>487, 'regionable_type'=>'village']); //Panji Anom
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>488, 'regionable_type'=>'village']); //Pegadungan
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>489, 'regionable_type'=>'village']); //Pegayaman
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>490, 'regionable_type'=>'village']); //Sambangan
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>491, 'regionable_type'=>'village']); //Selat
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>492, 'regionable_type'=>'village']); //Silangjana
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>493, 'regionable_type'=>'village']); //Sukasada
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>494, 'regionable_type'=>'village']); //Tegal Linggah (tegalinggah)
                DB::table('regionables')->insert(['region_id'=>4381, 'regionable_id'=>495, 'regionable_type'=>'village']); //Wanagiri
            DB::table('regions')->insert(['id'=>4382, 'parent'=>4367, 'code'=>'8117', 'type'=>'districts', 'name'=>'Districts 8117, City 811, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4382, 'regionable_id'=>40, 'regionable_type'=>'districts']); //Sawan
            DB::table('regionables')->insert(['region_id'=>4382, 'regionable_id'=>41, 'regionable_type'=>'districts']); //Kubutambahan
            DB::table('regionables')->insert(['region_id'=>4382, 'regionable_id'=>42, 'regionable_type'=>'districts']); //Tejakula
                DB::table('regions')->insert(['id'=>4383, 'parent'=>4382, 'code'=>'81173', 'type'=>'village', 'name'=>'Village 81173, Districts 8117, City 811, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>523, 'regionable_type'=>'village']); //Bondalem
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>524, 'regionable_type'=>'village']); //Julah
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>525, 'regionable_type'=>'village']); //Les
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>526, 'regionable_type'=>'village']); //Madenan
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>527, 'regionable_type'=>'village']); //Pacung
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>528, 'regionable_type'=>'village']); //Penuktukan
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>529, 'regionable_type'=>'village']); //Sambirenteng
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>530, 'regionable_type'=>'village']); //Sembiran
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>531, 'regionable_type'=>'village']); //Tejakula
                DB::table('regionables')->insert(['region_id'=>4383, 'regionable_id'=>532, 'regionable_type'=>'village']); //Tembok
        DB::table('regions')->insert(['id'=>4384, 'parent'=>4287, 'code'=>'821', 'type'=>'city', 'name'=>'City 821, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4384, 'regionable_id'=>8, 'regionable_type'=>'city']); //Tabanan regencies
            DB::table('regions')->insert(['id'=>4385, 'parent'=>4384, 'code'=>'8211', 'type'=>'districts', 'name'=>'Districts 8211, City 821, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4385, 'regionable_id'=>43, 'regionable_type'=>'districts']); //Tabanan
                DB::table('regions')->insert(['id'=>4386, 'parent'=>4385, 'code'=>'82111', 'type'=>'village', 'name'=>'Village 82111, Districts 8211, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4386, 'regionable_id'=>533, 'regionable_type'=>'village']); //Dauh Peken
                DB::table('regionables')->insert(['region_id'=>4386, 'regionable_id'=>534, 'regionable_type'=>'village']); //Wanasari
                DB::table('regions')->insert(['id'=>4387, 'parent'=>4385, 'code'=>'82112', 'type'=>'village', 'name'=>'Village 82112, Districts 8211, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4387, 'regionable_id'=>535, 'regionable_type'=>'village']); //Bongan (boongan)
                DB::table('regions')->insert(['id'=>4388, 'parent'=>4385, 'code'=>'82113', 'type'=>'village', 'name'=>'Village 82113, Districts 8211, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4388, 'regionable_id'=>536, 'regionable_type'=>'village']); //Delod Peken
                DB::table('regions')->insert(['id'=>4389, 'parent'=>4385, 'code'=>'82114', 'type'=>'village', 'name'=>'Village 82114, Districts 8211, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4389, 'regionable_id'=>537, 'regionable_type'=>'village']); //Dejan Peken (dajan Peken)
                DB::table('regions')->insert(['id'=>4390, 'parent'=>4385, 'code'=>'82115', 'type'=>'village', 'name'=>'Village 82115, Districts 8211, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4390, 'regionable_id'=>538, 'regionable_type'=>'village']); //Buahan
                DB::table('regionables')->insert(['region_id'=>4390, 'regionable_id'=>539, 'regionable_type'=>'village']); //Denbantas
                DB::table('regionables')->insert(['region_id'=>4390, 'regionable_id'=>540, 'regionable_type'=>'village']); //Gubug
                DB::table('regionables')->insert(['region_id'=>4390, 'regionable_id'=>541, 'regionable_type'=>'village']); //Sesandan
                DB::table('regionables')->insert(['region_id'=>4390, 'regionable_id'=>542, 'regionable_type'=>'village']); //Subamia
                DB::table('regionables')->insert(['region_id'=>4390, 'regionable_id'=>543, 'regionable_type'=>'village']); //Sudimara
                DB::table('regionables')->insert(['region_id'=>4390, 'regionable_id'=>544, 'regionable_type'=>'village']); //Tunjuk
            DB::table('regions')->insert(['id'=>4391, 'parent'=>4384, 'code'=>'8212', 'type'=>'districts', 'name'=>'Districts 8212, City 821, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4391, 'regionable_id'=>44, 'regionable_type'=>'districts']); //Kediri
                DB::table('regions')->insert(['id'=>4392, 'parent'=>4391, 'code'=>'82121', 'type'=>'village', 'name'=>'Village 82121, Districts 8212, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>545, 'regionable_type'=>'village']); //Abian Tuwung
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>546, 'regionable_type'=>'village']); //Belalang
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>547, 'regionable_type'=>'village']); //Bengkel
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>548, 'regionable_type'=>'village']); //Beraban
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>549, 'regionable_type'=>'village']); //Buwit
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>550, 'regionable_type'=>'village']); //Cepaka
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>551, 'regionable_type'=>'village']); //Kaba-kaba
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>552, 'regionable_type'=>'village']); //Kediri
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>553, 'regionable_type'=>'village']); //Nyambu
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>554, 'regionable_type'=>'village']); //Nyitdah
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>555, 'regionable_type'=>'village']); //Pandak Bandung
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>556, 'regionable_type'=>'village']); //Pandak Gede
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>557, 'regionable_type'=>'village']); //Pangkung Tibah
                DB::table('regionables')->insert(['region_id'=>4392, 'regionable_id'=>558, 'regionable_type'=>'village']); //Pejaten
                DB::table('regions')->insert(['id'=>4393, 'parent'=>4391, 'code'=>'82123', 'type'=>'village', 'name'=>'Village 82123, Districts 8212, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4393, 'regionable_id'=>559, 'regionable_type'=>'village']); //Banjar Anyar
            DB::table('regions')->insert(['id'=>4394, 'parent'=>4384, 'code'=>'8215', 'type'=>'districts', 'name'=>'Districts 8215, City 821, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4394, 'regionable_id'=>45, 'regionable_type'=>'districts']); //Penebel
                DB::table('regions')->insert(['id'=>4395, 'parent'=>4394, 'code'=>'82152', 'type'=>'village', 'name'=>'Village 82152, Districts 8215, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>560, 'regionable_type'=>'village']); //Babahan
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>561, 'regionable_type'=>'village']); //Biaung
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>562, 'regionable_type'=>'village']); //Buruan
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>563, 'regionable_type'=>'village']); //Jatiluwih
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>564, 'regionable_type'=>'village']); //Jegu
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>565, 'regionable_type'=>'village']); //Mengeste
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>566, 'regionable_type'=>'village']); //Penatahan
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>567, 'regionable_type'=>'village']); //Penebel
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>568, 'regionable_type'=>'village']); //Pesagi
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>569, 'regionable_type'=>'village']); //Pitra
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>570, 'regionable_type'=>'village']); //Rejasa
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>571, 'regionable_type'=>'village']); //Riang Gede
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>572, 'regionable_type'=>'village']); //Sangketan
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>573, 'regionable_type'=>'village']); //Senganan
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>574, 'regionable_type'=>'village']); //Tajen
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>575, 'regionable_type'=>'village']); //Tegalinggah
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>576, 'regionable_type'=>'village']); //Tengkudak
                DB::table('regionables')->insert(['region_id'=>4395, 'regionable_id'=>577, 'regionable_type'=>'village']); //Wongaya Gede
            DB::table('regions')->insert(['id'=>4396, 'parent'=>4384, 'code'=>'8216', 'type'=>'districts', 'name'=>'Districts 8216, City 821, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4396, 'regionable_id'=>46, 'regionable_type'=>'districts']); //Kerambitan
            DB::table('regionables')->insert(['region_id'=>4396, 'regionable_id'=>47, 'regionable_type'=>'districts']); //Selemadeg / Salemadeg Barat
            DB::table('regionables')->insert(['region_id'=>4396, 'regionable_id'=>48, 'regionable_type'=>'districts']); //Selemadeg
            DB::table('regionables')->insert(['region_id'=>4396, 'regionable_id'=>49, 'regionable_type'=>'districts']); //Selemadeg / Salamadeg Timur
            DB::table('regionables')->insert(['region_id'=>4396, 'regionable_id'=>50, 'regionable_type'=>'districts']); //Pupuan
                DB::table('regions')->insert(['id'=>4397, 'parent'=>4396, 'code'=>'82163', 'type'=>'village', 'name'=>'Village 82163, Districts 8216, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>624, 'regionable_type'=>'village']); //Bantiran
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>625, 'regionable_type'=>'village']); //Batungsel
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>626, 'regionable_type'=>'village']); //Belatungan
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>627, 'regionable_type'=>'village']); //Belimbing
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>628, 'regionable_type'=>'village']); //Jelijih Punggang
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>629, 'regionable_type'=>'village']); //Karya Sari
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>630, 'regionable_type'=>'village']); //Kebon Padangan
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>631, 'regionable_type'=>'village']); //Munduk Temu
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>632, 'regionable_type'=>'village']); //Padangan
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>633, 'regionable_type'=>'village']); //Pajahan
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>634, 'regionable_type'=>'village']); //Pujungan
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>635, 'regionable_type'=>'village']); //Pupuan
                DB::table('regionables')->insert(['region_id'=>4397, 'regionable_id'=>636, 'regionable_type'=>'village']); //Sanda
            DB::table('regions')->insert(['id'=>4398, 'parent'=>4384, 'code'=>'8218', 'type'=>'districts', 'name'=>'Districts 8218, City 821, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4398, 'regionable_id'=>51, 'regionable_type'=>'districts']); //Marga
                DB::table('regions')->insert(['id'=>4399, 'parent'=>4398, 'code'=>'82181', 'type'=>'village', 'name'=>'Village 82181, Districts 8218, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>637, 'regionable_type'=>'village']); //Batannyuh
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>638, 'regionable_type'=>'village']); //Beringkit
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>639, 'regionable_type'=>'village']); //Caubelayu
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>640, 'regionable_type'=>'village']); //Geluntung
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>641, 'regionable_type'=>'village']); //Kukuh
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>642, 'regionable_type'=>'village']); //Kuwum
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>643, 'regionable_type'=>'village']); //Marga
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>644, 'regionable_type'=>'village']); //Marga Dajan Puri
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>645, 'regionable_type'=>'village']); //Marga Dauh Puri
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>646, 'regionable_type'=>'village']); //Payangan
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>647, 'regionable_type'=>'village']); //Peken Belayu
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>648, 'regionable_type'=>'village']); //Petiga
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>649, 'regionable_type'=>'village']); //Selanbawak
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>650, 'regionable_type'=>'village']); //Tegaljadi
                DB::table('regionables')->insert(['region_id'=>4399, 'regionable_id'=>651, 'regionable_type'=>'village']); //Tua
            DB::table('regions')->insert(['id'=>4400, 'parent'=>4384, 'code'=>'8219', 'type'=>'districts', 'name'=>'Districts 8219, City 821, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4400, 'regionable_id'=>52, 'regionable_type'=>'districts']); //Baturiti
                DB::table('regions')->insert(['id'=>4401, 'parent'=>4400, 'code'=>'82191', 'type'=>'village', 'name'=>'Village 82191, Districts 8219, City 821, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>652, 'regionable_type'=>'village']); //Angseri
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>653, 'regionable_type'=>'village']); //Antapan
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>654, 'regionable_type'=>'village']); //Apuan
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>655, 'regionable_type'=>'village']); //Bangli
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>656, 'regionable_type'=>'village']); //Batunya
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>657, 'regionable_type'=>'village']); //Baturiti
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>658, 'regionable_type'=>'village']); //Candikuning
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>659, 'regionable_type'=>'village']); //Luwus
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>660, 'regionable_type'=>'village']); //Mekarsari
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>661, 'regionable_type'=>'village']); //Perean
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>662, 'regionable_type'=>'village']); //Perean Kangin
                DB::table('regionables')->insert(['region_id'=>4401, 'regionable_id'=>663, 'regionable_type'=>'village']); //Perean Tengah
        DB::table('regions')->insert(['id'=>4402, 'parent'=>4287, 'code'=>'822', 'type'=>'city', 'name'=>'City 822, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4402, 'regionable_id'=>9, 'regionable_type'=>'city']); //Jembrana regencies
            DB::table('regions')->insert(['id'=>4403, 'parent'=>4402, 'code'=>'8221', 'type'=>'districts', 'name'=>'Districts 8221, City 822, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4403, 'regionable_id'=>53, 'regionable_type'=>'districts']); //Jembrana
            DB::table('regionables')->insert(['region_id'=>4403, 'regionable_id'=>54, 'regionable_type'=>'districts']); //Negara
                DB::table('regions')->insert(['id'=>4404, 'parent'=>4403, 'code'=>'82212', 'type'=>'village', 'name'=>'Village 82212, Districts 8221, City 822, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4404, 'regionable_id'=>674, 'regionable_type'=>'village']); //Baler Bale Agung
                DB::table('regions')->insert(['id'=>4405, 'parent'=>4403, 'code'=>'82213', 'type'=>'village', 'name'=>'Village 82213, Districts 8221, City 822, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4405, 'regionable_id'=>675, 'regionable_type'=>'village']); //Banjar Tengah
                DB::table('regions')->insert(['id'=>4406, 'parent'=>4403, 'code'=>'82214', 'type'=>'village', 'name'=>'Village 82214, Districts 8221, City 822, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4406, 'regionable_id'=>676, 'regionable_type'=>'village']); //Lelateng
                DB::table('regions')->insert(['id'=>4407, 'parent'=>4403, 'code'=>'82215', 'type'=>'village', 'name'=>'Village 82215, Districts 8221, City 822, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4407, 'regionable_id'=>677, 'regionable_type'=>'village']); //Loloan Barat
                DB::table('regions')->insert(['id'=>4408, 'parent'=>4403, 'code'=>'82218', 'type'=>'village', 'name'=>'Village 82218, Districts 8221, City 822, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>666, 'regionable_type'=>'village']); //Air Kuning
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>667, 'regionable_type'=>'village']); //Batuagung
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>668, 'regionable_type'=>'village']); //Budeng
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>669, 'regionable_type'=>'village']); //Dangin Tukadaya
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>670, 'regionable_type'=>'village']); //Dauhwaru
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>671, 'regionable_type'=>'village']); //Perancak
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>672, 'regionable_type'=>'village']); //Sangkaragung
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>673, 'regionable_type'=>'village']); //Yeh Kuning
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>678, 'regionable_type'=>'village']); //Baluk
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>679, 'regionable_type'=>'village']); //Banyubiru
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>680, 'regionable_type'=>'village']); //Berangbang
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>681, 'regionable_type'=>'village']); //Cupel
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>682, 'regionable_type'=>'village']); //Kaliakah
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>683, 'regionable_type'=>'village']); //Pengambengan
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>684, 'regionable_type'=>'village']); //Tegal Badeng Barat
                DB::table('regionables')->insert(['region_id'=>4408, 'regionable_id'=>685, 'regionable_type'=>'village']); //Tegal Badeng Timur
            DB::table('regions')->insert(['id'=>4409, 'parent'=>4402, 'code'=>'8225', 'type'=>'districts', 'name'=>'Districts 8225, City 822, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4409, 'regionable_id'=>55, 'regionable_type'=>'districts']); //Melaya
                DB::table('regions')->insert(['id'=>4410, 'parent'=>4409, 'code'=>'82252', 'type'=>'village', 'name'=>'Village 82252, Districts 8225, City 822, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>686, 'regionable_type'=>'village']); //Blimbingsari (belimbingsari)
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>687, 'regionable_type'=>'village']); //Candikusuma
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>688, 'regionable_type'=>'village']); //Ekasari
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>689, 'regionable_type'=>'village']); //Gilimanuk
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>690, 'regionable_type'=>'village']); //Manistutu
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>691, 'regionable_type'=>'village']); //Melaya
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>692, 'regionable_type'=>'village']); //Nusa Sari
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>693, 'regionable_type'=>'village']); //Tukadaya
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>694, 'regionable_type'=>'village']); //Tuwed
                DB::table('regionables')->insert(['region_id'=>4410, 'regionable_id'=>695, 'regionable_type'=>'village']); //Warnasari
            DB::table('regions')->insert(['id'=>4411, 'parent'=>4402, 'code'=>'8226', 'type'=>'districts', 'name'=>'Districts 8226, City 822, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4411, 'regionable_id'=>56, 'regionable_type'=>'districts']); //Mendoyo
            DB::table('regionables')->insert(['region_id'=>4411, 'regionable_id'=>57, 'regionable_type'=>'districts']); //Pekutatan
                DB::table('regions')->insert(['id'=>4412, 'parent'=>4411, 'code'=>'82262', 'type'=>'village', 'name'=>'Village 82262, Districts 8226, City 822, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4412, 'regionable_id'=>707, 'regionable_type'=>'village']); //Asahduren
                DB::table('regionables')->insert(['region_id'=>4412, 'regionable_id'=>708, 'regionable_type'=>'village']); //Gumbrih
                DB::table('regionables')->insert(['region_id'=>4412, 'regionable_id'=>709, 'regionable_type'=>'village']); //Manggissari
                DB::table('regionables')->insert(['region_id'=>4412, 'regionable_id'=>710, 'regionable_type'=>'village']); //Medewi
                DB::table('regionables')->insert(['region_id'=>4412, 'regionable_id'=>711, 'regionable_type'=>'village']); //Pangyangan
                DB::table('regionables')->insert(['region_id'=>4412, 'regionable_id'=>712, 'regionable_type'=>'village']); //Pekutatan
                DB::table('regionables')->insert(['region_id'=>4412, 'regionable_id'=>713, 'regionable_type'=>'village']); //Pengeragoan (pengragoan)
                DB::table('regionables')->insert(['region_id'=>4412, 'regionable_id'=>714, 'regionable_type'=>'village']); //Pulukan

        //Nusa Tenggara Barat 
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>22, 'regionable_type'=>'province']); //Nusa Tenggara Barat 
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>283, 'regionable_type'=>'city']); //Mataram city
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>284, 'regionable_type'=>'city']); //Lombok Barat regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>285, 'regionable_type'=>'city']); //Lombok Utara regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>286, 'regionable_type'=>'city']); //Lombok Tengah regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>287, 'regionable_type'=>'city']); //Lombok Timur regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>288, 'regionable_type'=>'city']); //Bima regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>289, 'regionable_type'=>'city']); //Bima city
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>290, 'regionable_type'=>'city']); //Dompu regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>291, 'regionable_type'=>'city']); //Sumbawa regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>292, 'regionable_type'=>'city']); //Sumbawa Barat regencies

        DB::table('regions')->insert(['id'=>4413, 'parent'=>4287, 'code'=>'831', 'type'=>'city', 'name'=>'City 831, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4413, 'regionable_id'=>283, 'regionable_type'=>'city']); //Mataram city
            DB::table('regions')->insert(['id'=>4414, 'parent'=>4413, 'code'=>'8311', 'type'=>'districts', 'name'=>'Districts 8311, City 831, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4414, 'regionable_id'=>4709, 'regionable_type'=>'districts']); //Ampenan
            DB::table('regionables')->insert(['region_id'=>4414, 'regionable_id'=>4710, 'regionable_type'=>'districts']); //Sekarbela
            DB::table('regionables')->insert(['region_id'=>4414, 'regionable_id'=>4711, 'regionable_type'=>'districts']); //Mataram
                DB::table('regions')->insert(['id'=>4415, 'parent'=>4414, 'code'=>'83117', 'type'=>'village', 'name'=>'Village 83117, Districts 8311, City 831, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4415, 'regionable_id'=>56442, 'regionable_type'=>'village']); //Pagutan
            DB::table('regions')->insert(['id'=>4416, 'parent'=>4413, 'code'=>'8312', 'type'=>'districts', 'name'=>'Districts 8312, City 831, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4416, 'regionable_id'=>4711, 'regionable_type'=>'districts']); //Mataram
            DB::table('regionables')->insert(['region_id'=>4416, 'regionable_id'=>4712, 'regionable_type'=>'districts']); //Selaparang (selaprang)
                DB::table('regions')->insert(['id'=>4417, 'parent'=>4416, 'code'=>'83122', 'type'=>'village', 'name'=>'Village 83122, Districts 8312, City 831, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4417, 'regionable_id'=>56451, 'regionable_type'=>'village']); //Monjok
                DB::table('regionables')->insert(['region_id'=>4417, 'regionable_id'=>56452, 'regionable_type'=>'village']); //Monjok Barat
                DB::table('regionables')->insert(['region_id'=>4417, 'regionable_id'=>56453, 'regionable_type'=>'village']); //Monjok Timur
                DB::table('regions')->insert(['id'=>4418, 'parent'=>4416, 'code'=>'83123', 'type'=>'village', 'name'=>'Village 83123, Districts 8312, City 831, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4418, 'regionable_id'=>56454, 'regionable_type'=>'village']); //Karang Baru
                DB::table('regions')->insert(['id'=>4419, 'parent'=>4416, 'code'=>'83124', 'type'=>'village', 'name'=>'Village 83124, Districts 8312, City 831, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4419, 'regionable_id'=>56455, 'regionable_type'=>'village']); //Rembiga
                DB::table('regions')->insert(['id'=>4420, 'parent'=>4416, 'code'=>'83125', 'type'=>'village', 'name'=>'Village 83125, Districts 8312, City 831, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4420, 'regionable_id'=>56456, 'regionable_type'=>'village']); //Dasan Agung
                DB::table('regionables')->insert(['region_id'=>4420, 'regionable_id'=>56457, 'regionable_type'=>'village']); //Dasan Agung Baru
                DB::table('regions')->insert(['id'=>4421, 'parent'=>4416, 'code'=>'83126', 'type'=>'village', 'name'=>'Village 83126, Districts 8312, City 831, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4421, 'regionable_id'=>56458, 'regionable_type'=>'village']); //Gomong
                DB::table('regionables')->insert(['region_id'=>4421, 'regionable_id'=>56459, 'regionable_type'=>'village']); //Mataram Barat
        DB::table('regions')->insert(['id'=>4422, 'parent'=>4287, 'code'=>'832', 'type'=>'city', 'name'=>'City 832, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4422, 'regionable_id'=>283, 'regionable_type'=>'city']); //Mataram city
            DB::table('regions')->insert(['id'=>4423, 'parent'=>4422, 'code'=>'8323', 'type'=>'districts', 'name'=>'Districts 8323, City 832, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4423, 'regionable_id'=>4713, 'regionable_type'=>'districts']); //Sandubaya (sandujaya)
            DB::table('regionables')->insert(['region_id'=>4423, 'regionable_id'=>4714, 'regionable_type'=>'districts']); //Cakranegara
                DB::table('regions')->insert(['id'=>4424, 'parent'=>4423, 'code'=>'83238', 'type'=>'village', 'name'=>'Village 83238, Districts 8323, City 832, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4424, 'regionable_id'=>56467, 'regionable_type'=>'village']); //Cilinaya
                DB::table('regionables')->insert(['region_id'=>4424, 'regionable_id'=>56468, 'regionable_type'=>'village']); //Karang Taliwang
                DB::table('regionables')->insert(['region_id'=>4424, 'regionable_id'=>56469, 'regionable_type'=>'village']); //Mayura
                DB::table('regionables')->insert(['region_id'=>4424, 'regionable_id'=>56470, 'regionable_type'=>'village']); //Sapta Marga
                DB::table('regions')->insert(['id'=>4425, 'parent'=>4423, 'code'=>'83239', 'type'=>'village', 'name'=>'Village 83239, Districts 8323, City 832, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4425, 'regionable_id'=>56471, 'regionable_type'=>'village']); //Cakranegara Barat
                DB::table('regionables')->insert(['region_id'=>4425, 'regionable_id'=>56472, 'regionable_type'=>'village']); //Cakranegara Selatan
                DB::table('regionables')->insert(['region_id'=>4425, 'regionable_id'=>56473, 'regionable_type'=>'village']); //Cakranegara Selatan Baru
                DB::table('regionables')->insert(['region_id'=>4425, 'regionable_id'=>56474, 'regionable_type'=>'village']); //Cakranegara Timur
                DB::table('regionables')->insert(['region_id'=>4425, 'regionable_id'=>56475, 'regionable_type'=>'village']); //Cakranegara Utara
                DB::table('regionables')->insert(['region_id'=>4425, 'regionable_id'=>56476, 'regionable_type'=>'village']); //Sayang Sayang
        DB::table('regions')->insert(['id'=>4426, 'parent'=>4287, 'code'=>'833', 'type'=>'city', 'name'=>'City 833, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4426, 'regionable_id'=>284, 'regionable_type'=>'city']); //Lombok Barat regencies
        DB::table('regionables')->insert(['region_id'=>4426, 'regionable_id'=>285, 'regionable_type'=>'city']); //Lombok Utara regencies
            DB::table('regions')->insert(['id'=>4427, 'parent'=>4426, 'code'=>'8335', 'type'=>'districts', 'name'=>'Districts 8335, City 833, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4427, 'regionable_id'=>4715, 'regionable_type'=>'districts']); //Gunungsari
            DB::table('regionables')->insert(['region_id'=>4427, 'regionable_id'=>4716, 'regionable_type'=>'districts']); //Batu Layar
            DB::table('regionables')->insert(['region_id'=>4427, 'regionable_id'=>4725, 'regionable_type'=>'districts']); //Pemenang
            DB::table('regionables')->insert(['region_id'=>4427, 'regionable_id'=>4726, 'regionable_type'=>'districts']); //Tanjung
            DB::table('regionables')->insert(['region_id'=>4427, 'regionable_id'=>4727, 'regionable_type'=>'districts']); //Gangga
            DB::table('regionables')->insert(['region_id'=>4427, 'regionable_id'=>4728, 'regionable_type'=>'districts']); //Kayangan
            DB::table('regionables')->insert(['region_id'=>4427, 'regionable_id'=>4729, 'regionable_type'=>'districts']); //Bayan
                DB::table('regions')->insert(['id'=>4428, 'parent'=>4427, 'code'=>'83354', 'type'=>'village', 'name'=>'Village 83354, Districts 8335, City 833, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56619, 'regionable_type'=>'village']); //Akar Akar
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56620, 'regionable_type'=>'village']); //Anyar
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56621, 'regionable_type'=>'village']); //Bayan
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56622, 'regionable_type'=>'village']); //Karang Bajo
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56623, 'regionable_type'=>'village']); //Loloan
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56624, 'regionable_type'=>'village']); //Mumbul Sari
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56625, 'regionable_type'=>'village']); //Sambik Elen
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56626, 'regionable_type'=>'village']); //Senaru
                DB::table('regionables')->insert(['region_id'=>4428, 'regionable_id'=>56627, 'regionable_type'=>'village']); //Sukadana
        DB::table('regions')->insert(['id'=>4429, 'parent'=>4287, 'code'=>'835', 'type'=>'city', 'name'=>'City 835, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4429, 'regionable_id'=>283, 'regionable_type'=>'city']); //Mataram city
        DB::table('regionables')->insert(['region_id'=>4429, 'regionable_id'=>286, 'regionable_type'=>'city']); //Lombok Tengah regencies
            DB::table('regions')->insert(['id'=>4430, 'parent'=>4429, 'code'=>'8351', 'type'=>'districts', 'name'=>'Districts 8351, City 835, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4430, 'regionable_id'=>4709, 'regionable_type'=>'districts']); //Ampenan
            DB::table('regionables')->insert(['region_id'=>4430, 'regionable_id'=>4730, 'regionable_type'=>'districts']); //Praya
            DB::table('regionables')->insert(['region_id'=>4430, 'regionable_id'=>4731, 'regionable_type'=>'districts']); //Praya Tengah
                DB::table('regions')->insert(['id'=>4431, 'parent'=>4430, 'code'=>'83513', 'type'=>'village', 'name'=>'Village 83513, Districts 8351, City 835, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4431, 'regionable_id'=>56642, 'regionable_type'=>'village']); //Jontlak
            DB::table('regions')->insert(['id'=>4432, 'parent'=>4429, 'code'=>'8352', 'type'=>'districts', 'name'=>'Districts 8352, City 835, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4432, 'regionable_id'=>4730, 'regionable_type'=>'districts']); //Praya
            DB::table('regionables')->insert(['region_id'=>4432, 'regionable_id'=>4731, 'regionable_type'=>'districts']); //Praya Tengah
                DB::table('regions')->insert(['id'=>4433, 'parent'=>4432, 'code'=>'83523', 'type'=>'village', 'name'=>'Village 83523, Districts 8352, City 835, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4433, 'regionable_id'=>56643, 'regionable_type'=>'village']); //Gerantung
            DB::table('regions')->insert(['id'=>4434, 'parent'=>4429, 'code'=>'8355', 'type'=>'districts', 'name'=>'Districts 8355, City 835, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4434, 'regionable_id'=>4732, 'regionable_type'=>'districts']); //Batukliang Utara
            DB::table('regionables')->insert(['region_id'=>4434, 'regionable_id'=>4733, 'regionable_type'=>'districts']); //Batukliang
            DB::table('regionables')->insert(['region_id'=>4434, 'regionable_id'=>4734, 'regionable_type'=>'districts']); //Kopang
            DB::table('regionables')->insert(['region_id'=>4434, 'regionable_id'=>4735, 'regionable_type'=>'districts']); //Janapria
                DB::table('regions')->insert(['id'=>4435, 'parent'=>4434, 'code'=>'83554', 'type'=>'village', 'name'=>'Village 83554, Districts 8355, City 835, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56678, 'regionable_type'=>'village']); //Bakan
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56679, 'regionable_type'=>'village']); //Durian
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56680, 'regionable_type'=>'village']); //Janapria
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56681, 'regionable_type'=>'village']); //Kerembong
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56682, 'regionable_type'=>'village']); //Langko
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56683, 'regionable_type'=>'village']); //Lekor
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56684, 'regionable_type'=>'village']); //Loangmaka
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56685, 'regionable_type'=>'village']); //Pendem
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56686, 'regionable_type'=>'village']); //Saba
                DB::table('regionables')->insert(['region_id'=>4435, 'regionable_id'=>56687, 'regionable_type'=>'village']); //Selebung Rembiga
            DB::table('regions')->insert(['id'=>4436, 'parent'=>4429, 'code'=>'8356', 'type'=>'districts', 'name'=>'Districts 8356, City 835, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4436, 'regionable_id'=>4736, 'regionable_type'=>'districts']); //Jonggat
            DB::table('regionables')->insert(['region_id'=>4436, 'regionable_id'=>4737, 'regionable_type'=>'districts']); //Pringgarata
                DB::table('regions')->insert(['id'=>4437, 'parent'=>4436, 'code'=>'83562', 'type'=>'village', 'name'=>'Village 83562, Districts 8356, City 835, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4437, 'regionable_id'=>56701, 'regionable_type'=>'village']); //Bagu
                DB::table('regionables')->insert(['region_id'=>4437, 'regionable_id'=>56702, 'regionable_type'=>'village']); //Bilebante
                DB::table('regionables')->insert(['region_id'=>4437, 'regionable_id'=>56703, 'regionable_type'=>'village']); //Murbaya
                DB::table('regionables')->insert(['region_id'=>4437, 'regionable_id'=>56704, 'regionable_type'=>'village']); //Pemepek
                DB::table('regionables')->insert(['region_id'=>4437, 'regionable_id'=>56705, 'regionable_type'=>'village']); //Pringgarata
                DB::table('regionables')->insert(['region_id'=>4437, 'regionable_id'=>56706, 'regionable_type'=>'village']); //Sepakek
                DB::table('regionables')->insert(['region_id'=>4437, 'regionable_id'=>56707, 'regionable_type'=>'village']); //Sintung
            DB::table('regions')->insert(['id'=>4438, 'parent'=>4429, 'code'=>'8357', 'type'=>'districts', 'name'=>'Districts 8357, City 835, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4438, 'regionable_id'=>4738, 'regionable_type'=>'districts']); //Praya Barat Daya
            DB::table('regionables')->insert(['region_id'=>4438, 'regionable_id'=>4739, 'regionable_type'=>'districts']); //Praya Barat
            DB::table('regionables')->insert(['region_id'=>4438, 'regionable_id'=>4740, 'regionable_type'=>'districts']); //Pujut
                DB::table('regions')->insert(['id'=>4439, 'parent'=>4438, 'code'=>'83573', 'type'=>'village', 'name'=>'Village 83573, Districts 8357, City 835, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56727, 'regionable_type'=>'village']); //Gapura
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56728, 'regionable_type'=>'village']); //Kawo
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56729, 'regionable_type'=>'village']); //Ketara
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56730, 'regionable_type'=>'village']); //Kuta (kute)
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56731, 'regionable_type'=>'village']); //Mertak
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56732, 'regionable_type'=>'village']); //Pengembur
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56733, 'regionable_type'=>'village']); //Pengengat
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56734, 'regionable_type'=>'village']); //Prabu
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56735, 'regionable_type'=>'village']); //Rembitan
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56736, 'regionable_type'=>'village']); //Segale Anyar
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56737, 'regionable_type'=>'village']); //Sengkol
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56738, 'regionable_type'=>'village']); //Sukadana
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56739, 'regionable_type'=>'village']); //Tanak Awu
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56740, 'regionable_type'=>'village']); //Teruwai
                DB::table('regionables')->insert(['region_id'=>4439, 'regionable_id'=>56741, 'regionable_type'=>'village']); //Tumpak
            DB::table('regions')->insert(['id'=>4440, 'parent'=>4429, 'code'=>'8358', 'type'=>'districts', 'name'=>'Districts 8358, City 835, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4440, 'regionable_id'=>4731, 'regionable_type'=>'districts']); //Praya Tengah
            DB::table('regionables')->insert(['region_id'=>4440, 'regionable_id'=>4741, 'regionable_type'=>'districts']); //Praya Timur
                DB::table('regions')->insert(['id'=>4441, 'parent'=>4440, 'code'=>'83581', 'type'=>'village', 'name'=>'Village 83581, Districts 8358, City 835, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56742, 'regionable_type'=>'village']); //Beleka
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56743, 'regionable_type'=>'village']); //Bilelando
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56744, 'regionable_type'=>'village']); //Ganti
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56745, 'regionable_type'=>'village']); //Kidang
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56746, 'regionable_type'=>'village']); //Landah
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56747, 'regionable_type'=>'village']); //Marong
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56748, 'regionable_type'=>'village']); //Mujur
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56749, 'regionable_type'=>'village']); //Semoyang
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56750, 'regionable_type'=>'village']); //Sengkerang
                DB::table('regionables')->insert(['region_id'=>4441, 'regionable_id'=>56751, 'regionable_type'=>'village']); //Sukaraja
        DB::table('regions')->insert(['id'=>4442, 'parent'=>4287, 'code'=>'836', 'type'=>'city', 'name'=>'City 836, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4442, 'regionable_id'=>287, 'regionable_type'=>'city']); //Lombok Timur regencies
            DB::table('regions')->insert(['id'=>4443, 'parent'=>4442, 'code'=>'8361', 'type'=>'districts', 'name'=>'Districts 8361, City 836, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4443, 'regionable_id'=>4742, 'regionable_type'=>'districts']); //Selong
            DB::table('regionables')->insert(['region_id'=>4443, 'regionable_id'=>4743, 'regionable_type'=>'districts']); //Labuhan Haji
                DB::table('regions')->insert(['id'=>4444, 'parent'=>4443, 'code'=>'83614', 'type'=>'village', 'name'=>'Village 83614, Districts 8361, City 836, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4444, 'regionable_id'=>56764, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>4444, 'regionable_id'=>56765, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>4444, 'regionable_id'=>56766, 'regionable_type'=>'village']); //Teros
                DB::table('regions')->insert(['id'=>4445, 'parent'=>4443, 'code'=>'83615', 'type'=>'village', 'name'=>'Village 83615, Districts 8361, City 836, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4445, 'regionable_id'=>56767, 'regionable_type'=>'village']); //Geres
                DB::table('regionables')->insert(['region_id'=>4445, 'regionable_id'=>56768, 'regionable_type'=>'village']); //Ijobalit
                DB::table('regionables')->insert(['region_id'=>4445, 'regionable_id'=>56769, 'regionable_type'=>'village']); //Korleko
                DB::table('regionables')->insert(['region_id'=>4445, 'regionable_id'=>56770, 'regionable_type'=>'village']); //Korleko Selatan
                DB::table('regionables')->insert(['region_id'=>4445, 'regionable_id'=>56771, 'regionable_type'=>'village']); //Tirtanadi
                DB::table('regions')->insert(['id'=>4446, 'parent'=>4443, 'code'=>'83616', 'type'=>'village', 'name'=>'Village 83616, Districts 8361, City 836, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4446, 'regionable_id'=>56772, 'regionable_type'=>'village']); //Labuhan Haji
                DB::table('regionables')->insert(['region_id'=>4446, 'regionable_id'=>56773, 'regionable_type'=>'village']); //Surya Wangi
                DB::table('regions')->insert(['id'=>4447, 'parent'=>4443, 'code'=>'83617', 'type'=>'village', 'name'=>'Village 83617, Districts 8361, City 836, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4447, 'regionable_id'=>56756, 'regionable_type'=>'village']); //Jorong
                DB::table('regionables')->insert(['region_id'=>4447, 'regionable_id'=>56774, 'regionable_type'=>'village']); //Kertasari
                DB::table('regionables')->insert(['region_id'=>4447, 'regionable_id'=>56775, 'regionable_type'=>'village']); //Penedagandor
            DB::table('regions')->insert(['id'=>4448, 'parent'=>4442, 'code'=>'8365', 'type'=>'districts', 'name'=>'Districts 8365, City 836, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4448, 'regionable_id'=>4744, 'regionable_type'=>'districts']); //Suralaga
            DB::table('regionables')->insert(['region_id'=>4448, 'regionable_id'=>4745, 'regionable_type'=>'districts']); //Sukamulia
            DB::table('regionables')->insert(['region_id'=>4448, 'regionable_id'=>4746, 'regionable_type'=>'districts']); //Aikmel
            DB::table('regionables')->insert(['region_id'=>4448, 'regionable_id'=>4747, 'regionable_type'=>'districts']); //Wanasaba
            DB::table('regionables')->insert(['region_id'=>4448, 'regionable_id'=>4748, 'regionable_type'=>'districts']); //Pringgabaya
            DB::table('regionables')->insert(['region_id'=>4448, 'regionable_id'=>4749, 'regionable_type'=>'districts']); //Suela (suwela)
            DB::table('regionables')->insert(['region_id'=>4448, 'regionable_id'=>4750, 'regionable_type'=>'districts']); //Sambalia (sambelia)
            DB::table('regionables')->insert(['region_id'=>4448, 'regionable_id'=>4751, 'regionable_type'=>'districts']); //Sembalun
                DB::table('regions')->insert(['id'=>4449, 'parent'=>4448, 'code'=>'83656', 'type'=>'village', 'name'=>'Village 83656, Districts 8365, City 836, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56861, 'regionable_type'=>'village']); //Bagik Manis
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56862, 'regionable_type'=>'village']); //Belanting
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56863, 'regionable_type'=>'village']); //Dadap
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56864, 'regionable_type'=>'village']); //Darakunci
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56865, 'regionable_type'=>'village']); //Labuhan Pandan
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56866, 'regionable_type'=>'village']); //Madayin
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56867, 'regionable_type'=>'village']); //Obel Obel
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56868, 'regionable_type'=>'village']); //Padak Guar
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56869, 'regionable_type'=>'village']); //Sambelia
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56870, 'regionable_type'=>'village']); //Senanggalih
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56871, 'regionable_type'=>'village']); //Sugian
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56872, 'regionable_type'=>'village']); //Bilok Petung
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56873, 'regionable_type'=>'village']); //Sajang
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56874, 'regionable_type'=>'village']); //Sembalun
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56875, 'regionable_type'=>'village']); //Sembalun Bumbung
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56876, 'regionable_type'=>'village']); //Sembalun Lawang
                DB::table('regionables')->insert(['region_id'=>4449, 'regionable_id'=>56877, 'regionable_type'=>'village']); //Sembalun Timba Gading
            DB::table('regions')->insert(['id'=>4450, 'parent'=>4442, 'code'=>'8366', 'type'=>'districts', 'name'=>'Districts 8366, City 836, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4450, 'regionable_id'=>4752, 'regionable_type'=>'districts']); //Pringgasela
            DB::table('regionables')->insert(['region_id'=>4450, 'regionable_id'=>4753, 'regionable_type'=>'districts']); //Masbagik
            DB::table('regionables')->insert(['region_id'=>4450, 'regionable_id'=>4754, 'regionable_type'=>'districts']); //Sikur
            DB::table('regionables')->insert(['region_id'=>4450, 'regionable_id'=>4755, 'regionable_type'=>'districts']); //Terara
            DB::table('regionables')->insert(['region_id'=>4450, 'regionable_id'=>4756, 'regionable_type'=>'districts']); //Montong Gading
                DB::table('regions')->insert(['id'=>4451, 'parent'=>4450, 'code'=>'83663', 'type'=>'village', 'name'=>'Village 83663, Districts 8366, City 836, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56912, 'regionable_type'=>'village']); //Embung Kandong
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56913, 'regionable_type'=>'village']); //Embung Raja
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56914, 'regionable_type'=>'village']); //Jenggik
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56915, 'regionable_type'=>'village']); //Kalianyar
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56916, 'regionable_type'=>'village']); //Lando
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56917, 'regionable_type'=>'village']); //Leming
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56918, 'regionable_type'=>'village']); //Pandan Duri
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56919, 'regionable_type'=>'village']); //Rarang
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56920, 'regionable_type'=>'village']); //Rarang Batas
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56921, 'regionable_type'=>'village']); //Rarang Selatan
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56922, 'regionable_type'=>'village']); //Rarang Tengah
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56923, 'regionable_type'=>'village']); //Santong
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56924, 'regionable_type'=>'village']); //Selagik
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56925, 'regionable_type'=>'village']); //Sukadana
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56926, 'regionable_type'=>'village']); //Suradadi
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56927, 'regionable_type'=>'village']); //Terara
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56928, 'regionable_type'=>'village']); //Jenggik Utara
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56929, 'regionable_type'=>'village']); //Kilang
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56930, 'regionable_type'=>'village']); //Lendang Belo
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56931, 'regionable_type'=>'village']); //Montong Betok
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56932, 'regionable_type'=>'village']); //Perian
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56933, 'regionable_type'=>'village']); //Pesanggrahan
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56934, 'regionable_type'=>'village']); //Pringga Jurang
                DB::table('regionables')->insert(['region_id'=>4451, 'regionable_id'=>56935, 'regionable_type'=>'village']); //Pringgajurang Utara
            DB::table('regions')->insert(['id'=>4452, 'parent'=>4442, 'code'=>'8367', 'type'=>'districts', 'name'=>'Districts 8367, City 836, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4452, 'regionable_id'=>4757, 'regionable_type'=>'districts']); //Sakra Barat
            DB::table('regionables')->insert(['region_id'=>4452, 'regionable_id'=>4758, 'regionable_type'=>'districts']); //Sakra Timur
            DB::table('regionables')->insert(['region_id'=>4452, 'regionable_id'=>4759, 'regionable_type'=>'districts']); //Sakra
            DB::table('regionables')->insert(['region_id'=>4452, 'regionable_id'=>4760, 'regionable_type'=>'districts']); //Keruak
            DB::table('regionables')->insert(['region_id'=>4452, 'regionable_id'=>4761, 'regionable_type'=>'districts']); //Jerowaru
                DB::table('regions')->insert(['id'=>4453, 'parent'=>4452, 'code'=>'83672', 'type'=>'village', 'name'=>'Village 83672, Districts 8367, City 836, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56976, 'regionable_type'=>'village']); //Batu Putik
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56977, 'regionable_type'=>'village']); //Dane Rase
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56978, 'regionable_type'=>'village']); //Keruak
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56979, 'regionable_type'=>'village']); //Ketangga Jeraeng
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56980, 'regionable_type'=>'village']); //Ketapang Raya
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56981, 'regionable_type'=>'village']); //Mendana Raya
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56982, 'regionable_type'=>'village']); //Montong Belae
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56983, 'regionable_type'=>'village']); //Pijot
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56984, 'regionable_type'=>'village']); //Pijot Utara
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56985, 'regionable_type'=>'village']); //Pulau Maringkik
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56986, 'regionable_type'=>'village']); //Selebung Ketangga
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56987, 'regionable_type'=>'village']); //Senyiur
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56988, 'regionable_type'=>'village']); //Sepit
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56989, 'regionable_type'=>'village']); //Setungkep Lingsar
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56990, 'regionable_type'=>'village']); //Tanjung Luar
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56991, 'regionable_type'=>'village']); //Batunampar
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56992, 'regionable_type'=>'village']); //Batunampar Selatan
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56993, 'regionable_type'=>'village']); //Ekas Buana
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56994, 'regionable_type'=>'village']); //Jerowaru
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56995, 'regionable_type'=>'village']); //Kwang Rundun
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56996, 'regionable_type'=>'village']); //Pandan Wangi
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56997, 'regionable_type'=>'village']); //Pare Mas
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56998, 'regionable_type'=>'village']); //Pemongkong
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>56999, 'regionable_type'=>'village']); //Pene
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>57000, 'regionable_type'=>'village']); //Sekaroh
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>57001, 'regionable_type'=>'village']); //Sepapan
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>57002, 'regionable_type'=>'village']); //Seriwe
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>57003, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>57004, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>4453, 'regionable_id'=>57005, 'regionable_type'=>'village']); //Wakan
        DB::table('regions')->insert(['id'=>4454, 'parent'=>4287, 'code'=>'841', 'type'=>'city', 'name'=>'City 841, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4454, 'regionable_id'=>288, 'regionable_type'=>'city']); //Bima regencies
        DB::table('regionables')->insert(['region_id'=>4454, 'regionable_id'=>289, 'regionable_type'=>'city']); //Bima city
            DB::table('regions')->insert(['id'=>4455, 'parent'=>4454, 'code'=>'8411', 'type'=>'districts', 'name'=>'Districts 8411, City 841, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4762, 'regionable_type'=>'districts']); //Madapangga
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4763, 'regionable_type'=>'districts']); //Mpunda
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4764, 'regionable_type'=>'districts']); //Rasanae Barat
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4765, 'regionable_type'=>'districts']); //Raba
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4766, 'regionable_type'=>'districts']); //Rasanae Timur
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4767, 'regionable_type'=>'districts']); //Asakota
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4785, 'regionable_type'=>'districts']); //Madapangga
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4786, 'regionable_type'=>'districts']); //Mpunda
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4787, 'regionable_type'=>'districts']); //Rasanae Barat
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4788, 'regionable_type'=>'districts']); //Raba
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4789, 'regionable_type'=>'districts']); //Rasanae Timur
            DB::table('regionables')->insert(['region_id'=>4455, 'regionable_id'=>4790, 'regionable_type'=>'districts']); //Asakota
                DB::table('regions')->insert(['id'=>4456, 'parent'=>4455, 'code'=>'84119', 'type'=>'village', 'name'=>'Village 84119, Districts 8411, City 841, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57019, 'regionable_type'=>'village']); //Lewirato
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57020, 'regionable_type'=>'village']); //Mande
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57021, 'regionable_type'=>'village']); //Manggemaci
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57022, 'regionable_type'=>'village']); //Matakando
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57023, 'regionable_type'=>'village']); //Panggi
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57024, 'regionable_type'=>'village']); //Sambinae
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57025, 'regionable_type'=>'village']); //Santi
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57030, 'regionable_type'=>'village']); //Dara (dora)
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57031, 'regionable_type'=>'village']); //Pane
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57037, 'regionable_type'=>'village']); //Kendo
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57038, 'regionable_type'=>'village']); //Nitu
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57039, 'regionable_type'=>'village']); //Ntobo
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57040, 'regionable_type'=>'village']); //Penanae
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57041, 'regionable_type'=>'village']); //Rite
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57042, 'regionable_type'=>'village']); //Rontu
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57044, 'regionable_type'=>'village']); //Dodu
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57045, 'regionable_type'=>'village']); //Kodo
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57046, 'regionable_type'=>'village']); //Lampe
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57047, 'regionable_type'=>'village']); //Lelamase
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57048, 'regionable_type'=>'village']); //Nungga
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57049, 'regionable_type'=>'village']); //Oi Fo\o
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57050, 'regionable_type'=>'village']); //Jatibaru
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57051, 'regionable_type'=>'village']); //Jatiwangi
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57052, 'regionable_type'=>'village']); //Kolo
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57053, 'regionable_type'=>'village']); //Melayu
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57228, 'regionable_type'=>'village']); //Lewirato
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57229, 'regionable_type'=>'village']); //Mande
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57230, 'regionable_type'=>'village']); //Manggemaci
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57231, 'regionable_type'=>'village']); //Matakando
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57232, 'regionable_type'=>'village']); //Panggi
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57233, 'regionable_type'=>'village']); //Sambinae
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57234, 'regionable_type'=>'village']); //Santi
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57239, 'regionable_type'=>'village']); //Dara (dora)
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57240, 'regionable_type'=>'village']); //Pane
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57246, 'regionable_type'=>'village']); //Kendo
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57247, 'regionable_type'=>'village']); //Nitu
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57248, 'regionable_type'=>'village']); //Ntobo
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57249, 'regionable_type'=>'village']); //Penanae
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57250, 'regionable_type'=>'village']); //Rite
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57251, 'regionable_type'=>'village']); //Rontu
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57253, 'regionable_type'=>'village']); //Dodu
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57254, 'regionable_type'=>'village']); //Kodo
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57255, 'regionable_type'=>'village']); //Lampe
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57256, 'regionable_type'=>'village']); //Lelamase
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57257, 'regionable_type'=>'village']); //Nungga
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57258, 'regionable_type'=>'village']); //Oi Fo\o
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57259, 'regionable_type'=>'village']); //Jatibaru
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57260, 'regionable_type'=>'village']); //Jatiwangi
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57261, 'regionable_type'=>'village']); //Kolo
                DB::table('regionables')->insert(['region_id'=>4456, 'regionable_id'=>57262, 'regionable_type'=>'village']); //Melayu
            DB::table('regions')->insert(['id'=>4457, 'parent'=>4454, 'code'=>'8415', 'type'=>'districts', 'name'=>'Districts 8415, City 841, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4457, 'regionable_id'=>4768, 'regionable_type'=>'districts']); //Wera
            DB::table('regionables')->insert(['region_id'=>4457, 'regionable_id'=>4769, 'regionable_type'=>'districts']); //Ambalawi
            DB::table('regionables')->insert(['region_id'=>4457, 'regionable_id'=>4791, 'regionable_type'=>'districts']); //Wera
            DB::table('regionables')->insert(['region_id'=>4457, 'regionable_id'=>4792, 'regionable_type'=>'districts']); //Ambalawi
                DB::table('regions')->insert(['id'=>4458, 'parent'=>4457, 'code'=>'84153', 'type'=>'village', 'name'=>'Village 84153, Districts 8415, City 841, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57065, 'regionable_type'=>'village']); //Kole
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57066, 'regionable_type'=>'village']); //Mawu
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57067, 'regionable_type'=>'village']); //Nipa
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57068, 'regionable_type'=>'village']); //Rite
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57069, 'regionable_type'=>'village']); //Talapiti
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57070, 'regionable_type'=>'village']); //Tolowata
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57274, 'regionable_type'=>'village']); //Kole
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57275, 'regionable_type'=>'village']); //Mawu
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57276, 'regionable_type'=>'village']); //Nipa
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57277, 'regionable_type'=>'village']); //Rite
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57278, 'regionable_type'=>'village']); //Talapiti
                DB::table('regionables')->insert(['region_id'=>4458, 'regionable_id'=>57279, 'regionable_type'=>'village']); //Tolowata
            DB::table('regions')->insert(['id'=>4459, 'parent'=>4454, 'code'=>'8416', 'type'=>'districts', 'name'=>'Districts 8416, City 841, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4459, 'regionable_id'=>4770, 'regionable_type'=>'districts']); //Bolo
            DB::table('regionables')->insert(['region_id'=>4459, 'regionable_id'=>4771, 'regionable_type'=>'districts']); //Soromandi
            DB::table('regionables')->insert(['region_id'=>4459, 'regionable_id'=>4772, 'regionable_type'=>'districts']); //Donggo
            DB::table('regionables')->insert(['region_id'=>4459, 'regionable_id'=>4793, 'regionable_type'=>'districts']); //Bolo
            DB::table('regionables')->insert(['region_id'=>4459, 'regionable_id'=>4794, 'regionable_type'=>'districts']); //Soromandi
            DB::table('regionables')->insert(['region_id'=>4459, 'regionable_id'=>4795, 'regionable_type'=>'districts']); //Donggo
                DB::table('regions')->insert(['id'=>4460, 'parent'=>4459, 'code'=>'84162', 'type'=>'village', 'name'=>'Village 84162, Districts 8416, City 841, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57083, 'regionable_type'=>'village']); //Bajo
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57084, 'regionable_type'=>'village']); //Kananta
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57085, 'regionable_type'=>'village']); //Punti
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57086, 'regionable_type'=>'village']); //Sai
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57087, 'regionable_type'=>'village']); //Sampungu
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57088, 'regionable_type'=>'village']); //Wadukopa
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57089, 'regionable_type'=>'village']); //Bumi Pajo
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57090, 'regionable_type'=>'village']); //Doridungga
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57091, 'regionable_type'=>'village']); //Kala
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57092, 'regionable_type'=>'village']); //Mbawa
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57093, 'regionable_type'=>'village']); //Mpili
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57094, 'regionable_type'=>'village']); //O\o
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57095, 'regionable_type'=>'village']); //Palama
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57096, 'regionable_type'=>'village']); //Rora
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57292, 'regionable_type'=>'village']); //Bajo
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57293, 'regionable_type'=>'village']); //Kananta
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57294, 'regionable_type'=>'village']); //Punti
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57295, 'regionable_type'=>'village']); //Sai
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57296, 'regionable_type'=>'village']); //Sampungu
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57297, 'regionable_type'=>'village']); //Wadukopa
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57298, 'regionable_type'=>'village']); //Bumi Pajo
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57299, 'regionable_type'=>'village']); //Doridungga
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57300, 'regionable_type'=>'village']); //Kala
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57301, 'regionable_type'=>'village']); //Mbawa
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57302, 'regionable_type'=>'village']); //Mpili
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57303, 'regionable_type'=>'village']); //O\o
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57304, 'regionable_type'=>'village']); //Palama
                DB::table('regionables')->insert(['region_id'=>4460, 'regionable_id'=>57305, 'regionable_type'=>'village']); //Rora
            DB::table('regions')->insert(['id'=>4461, 'parent'=>4454, 'code'=>'8417', 'type'=>'districts', 'name'=>'Districts 8417, City 841, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4773, 'regionable_type'=>'districts']); //Woha
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4774, 'regionable_type'=>'districts']); //Monta
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4775, 'regionable_type'=>'districts']); //Parado
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4776, 'regionable_type'=>'districts']); //Palibelo
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4777, 'regionable_type'=>'districts']); //Belo
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4796, 'regionable_type'=>'districts']); //Woha
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4797, 'regionable_type'=>'districts']); //Monta
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4798, 'regionable_type'=>'districts']); //Parado
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4799, 'regionable_type'=>'districts']); //Palibelo
            DB::table('regionables')->insert(['region_id'=>4461, 'regionable_id'=>4800, 'regionable_type'=>'districts']); //Belo
                DB::table('regions')->insert(['id'=>4462, 'parent'=>4461, 'code'=>'84173', 'type'=>'village', 'name'=>'Village 84173, Districts 8417, City 841, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57129, 'regionable_type'=>'village']); //Belo
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57130, 'regionable_type'=>'village']); //Doie
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57131, 'regionable_type'=>'village']); //Dore
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57132, 'regionable_type'=>'village']); //Nata
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57133, 'regionable_type'=>'village']); //Ntonggu
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57134, 'regionable_type'=>'village']); //Panda
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57135, 'regionable_type'=>'village']); //Roi
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57136, 'regionable_type'=>'village']); //Teke
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57137, 'regionable_type'=>'village']); //Tolongondoa
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57138, 'regionable_type'=>'village']); //Tonggorisa
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57139, 'regionable_type'=>'village']); //Cenggu
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57140, 'regionable_type'=>'village']); //Lido
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57141, 'regionable_type'=>'village']); //Ncera
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57142, 'regionable_type'=>'village']); //Ngali
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57143, 'regionable_type'=>'village']); //Panda
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57144, 'regionable_type'=>'village']); //Renda
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57145, 'regionable_type'=>'village']); //Roka
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57146, 'regionable_type'=>'village']); //Runggu
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57147, 'regionable_type'=>'village']); //Soki
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57338, 'regionable_type'=>'village']); //Belo
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57339, 'regionable_type'=>'village']); //Doie
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57340, 'regionable_type'=>'village']); //Dore
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57341, 'regionable_type'=>'village']); //Nata
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57342, 'regionable_type'=>'village']); //Ntonggu
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57343, 'regionable_type'=>'village']); //Panda
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57344, 'regionable_type'=>'village']); //Roi
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57345, 'regionable_type'=>'village']); //Teke
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57346, 'regionable_type'=>'village']); //Tolongondoa
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57347, 'regionable_type'=>'village']); //Tonggorisa
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57348, 'regionable_type'=>'village']); //Cenggu
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57349, 'regionable_type'=>'village']); //Lido
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57350, 'regionable_type'=>'village']); //Ncera
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57351, 'regionable_type'=>'village']); //Ngali
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57352, 'regionable_type'=>'village']); //Panda
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57353, 'regionable_type'=>'village']); //Renda
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57354, 'regionable_type'=>'village']); //Roka
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57355, 'regionable_type'=>'village']); //Runggu
                DB::table('regionables')->insert(['region_id'=>4462, 'regionable_id'=>57356, 'regionable_type'=>'village']); //Soki
            DB::table('regions')->insert(['id'=>4463, 'parent'=>4454, 'code'=>'8418', 'type'=>'districts', 'name'=>'Districts 8418, City 841, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4778, 'regionable_type'=>'districts']); //Langgudu
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4779, 'regionable_type'=>'districts']); //Lambitu
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4780, 'regionable_type'=>'districts']); //Wawo
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4781, 'regionable_type'=>'districts']); //Sape
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4782, 'regionable_type'=>'districts']); //Lambu
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4801, 'regionable_type'=>'districts']); //Langgudu
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4802, 'regionable_type'=>'districts']); //Lambitu
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4803, 'regionable_type'=>'districts']); //Wawo
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4804, 'regionable_type'=>'districts']); //Sape
            DB::table('regionables')->insert(['region_id'=>4463, 'regionable_id'=>4805, 'regionable_type'=>'districts']); //Lambu
                DB::table('regions')->insert(['id'=>4464, 'parent'=>4463, 'code'=>'84182', 'type'=>'village', 'name'=>'Village 84182, Districts 8418, City 841, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57175, 'regionable_type'=>'village']); //Bajopulau
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57176, 'regionable_type'=>'village']); //Boke
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57177, 'regionable_type'=>'village']); //Bugis
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57178, 'regionable_type'=>'village']); //Buncu
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57179, 'regionable_type'=>'village']); //Jia
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57180, 'regionable_type'=>'village']); //Kowo
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57181, 'regionable_type'=>'village']); //Lamere (lamera)
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57182, 'regionable_type'=>'village']); //Nae
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57183, 'regionable_type'=>'village']); //Naru
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57184, 'regionable_type'=>'village']); //Naru Barat
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57185, 'regionable_type'=>'village']); //Parangina
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57186, 'regionable_type'=>'village']); //Poja
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57187, 'regionable_type'=>'village']); //Raioi
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57188, 'regionable_type'=>'village']); //Rasabou
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57189, 'regionable_type'=>'village']); //Sangia
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57190, 'regionable_type'=>'village']); //Sari
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57191, 'regionable_type'=>'village']); //Tanah Putih
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57192, 'regionable_type'=>'village']); //Hidirasa
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57193, 'regionable_type'=>'village']); //Kaleo
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57194, 'regionable_type'=>'village']); //Lambu
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57195, 'regionable_type'=>'village']); //Lanta
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57196, 'regionable_type'=>'village']); //Lauta Barat
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57197, 'regionable_type'=>'village']); //Mangge
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57198, 'regionable_type'=>'village']); //Melayu
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57199, 'regionable_type'=>'village']); //Nggelu
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57200, 'regionable_type'=>'village']); //Rato
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57201, 'regionable_type'=>'village']); //Simpasai
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57202, 'regionable_type'=>'village']); //Soro
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57203, 'regionable_type'=>'village']); //Sumi
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57384, 'regionable_type'=>'village']); //Bajopulau
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57385, 'regionable_type'=>'village']); //Boke
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57386, 'regionable_type'=>'village']); //Bugis
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57387, 'regionable_type'=>'village']); //Buncu
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57388, 'regionable_type'=>'village']); //Jia
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57389, 'regionable_type'=>'village']); //Kowo
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57390, 'regionable_type'=>'village']); //Lamere (lamera)
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57391, 'regionable_type'=>'village']); //Nae
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57392, 'regionable_type'=>'village']); //Naru
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57393, 'regionable_type'=>'village']); //Naru Barat
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57394, 'regionable_type'=>'village']); //Parangina
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57395, 'regionable_type'=>'village']); //Poja
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57396, 'regionable_type'=>'village']); //Raioi
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57397, 'regionable_type'=>'village']); //Rasabou
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57398, 'regionable_type'=>'village']); //Sangia
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57399, 'regionable_type'=>'village']); //Sari
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57400, 'regionable_type'=>'village']); //Tanah Putih
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57401, 'regionable_type'=>'village']); //Hidirasa
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57402, 'regionable_type'=>'village']); //Kaleo
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57403, 'regionable_type'=>'village']); //Lambu
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57404, 'regionable_type'=>'village']); //Lanta
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57405, 'regionable_type'=>'village']); //Lauta Barat
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57406, 'regionable_type'=>'village']); //Mangge
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57407, 'regionable_type'=>'village']); //Melayu
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57408, 'regionable_type'=>'village']); //Nggelu
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57409, 'regionable_type'=>'village']); //Rato
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57410, 'regionable_type'=>'village']); //Simpasai
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57411, 'regionable_type'=>'village']); //Soro
                DB::table('regionables')->insert(['region_id'=>4464, 'regionable_id'=>57412, 'regionable_type'=>'village']); //Sumi
            DB::table('regions')->insert(['id'=>4465, 'parent'=>4454, 'code'=>'8419', 'type'=>'districts', 'name'=>'Districts 8419, City 841, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4465, 'regionable_id'=>4783, 'regionable_type'=>'districts']); //Sanggar
            DB::table('regionables')->insert(['region_id'=>4465, 'regionable_id'=>4784, 'regionable_type'=>'districts']); //Tambora
            DB::table('regionables')->insert(['region_id'=>4465, 'regionable_id'=>4806, 'regionable_type'=>'districts']); //Sanggar
            DB::table('regionables')->insert(['region_id'=>4465, 'regionable_id'=>4807, 'regionable_type'=>'districts']); //Tambora
                DB::table('regions')->insert(['id'=>4466, 'parent'=>4465, 'code'=>'84191', 'type'=>'village', 'name'=>'Village 84191, Districts 8419, City 841, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57204, 'regionable_type'=>'village']); //Boro
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57205, 'regionable_type'=>'village']); //Kore
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57206, 'regionable_type'=>'village']); //Oi Saro
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57207, 'regionable_type'=>'village']); //Piong
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57208, 'regionable_type'=>'village']); //Sandue
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57209, 'regionable_type'=>'village']); //Taloko
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57210, 'regionable_type'=>'village']); //Kawinda Nae
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57211, 'regionable_type'=>'village']); //Kawinda Toi
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57212, 'regionable_type'=>'village']); //Labuhan Kananga
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57213, 'regionable_type'=>'village']); //Oi Bura
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57214, 'regionable_type'=>'village']); //Oi Panihi
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57413, 'regionable_type'=>'village']); //Boro
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57414, 'regionable_type'=>'village']); //Kore
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57415, 'regionable_type'=>'village']); //Oi Saro
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57416, 'regionable_type'=>'village']); //Piong
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57417, 'regionable_type'=>'village']); //Sandue
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57418, 'regionable_type'=>'village']); //Taloko
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57419, 'regionable_type'=>'village']); //Kawinda Nae
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57420, 'regionable_type'=>'village']); //Kawinda Toi
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57421, 'regionable_type'=>'village']); //Labuhan Kananga
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57422, 'regionable_type'=>'village']); //Oi Bura
                DB::table('regionables')->insert(['region_id'=>4466, 'regionable_id'=>57423, 'regionable_type'=>'village']); //Oi Panihi
        DB::table('regions')->insert(['id'=>4467, 'parent'=>4287, 'code'=>'842', 'type'=>'city', 'name'=>'City 842, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4467, 'regionable_id'=>290, 'regionable_type'=>'city']); //Dompu regencies
            DB::table('regions')->insert(['id'=>4468, 'parent'=>4467, 'code'=>'8421', 'type'=>'districts', 'name'=>'Districts 8421, City 842, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4468, 'regionable_id'=>4808, 'regionable_type'=>'districts']); //Dompu
            DB::table('regionables')->insert(['region_id'=>4468, 'regionable_id'=>4809, 'regionable_type'=>'districts']); //Woja
                DB::table('regions')->insert(['id'=>4469, 'parent'=>4468, 'code'=>'84216', 'type'=>'village', 'name'=>'Village 84216, Districts 8421, City 842, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4469, 'regionable_id'=>57438, 'regionable_type'=>'village']); //Simpasai
                DB::table('regions')->insert(['id'=>4470, 'parent'=>4468, 'code'=>'84218', 'type'=>'village', 'name'=>'Village 84218, Districts 8421, City 842, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4470, 'regionable_id'=>57439, 'regionable_type'=>'village']); //Kandai Dua
                DB::table('regions')->insert(['id'=>4471, 'parent'=>4468, 'code'=>'84219', 'type'=>'village', 'name'=>'Village 84219, Districts 8421, City 842, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57429, 'regionable_type'=>'village']); //Dorebara
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57430, 'regionable_type'=>'village']); //Kandai Satu
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57431, 'regionable_type'=>'village']); //Karamabura
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57432, 'regionable_type'=>'village']); //Kareke
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57433, 'regionable_type'=>'village']); //Katua
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57434, 'regionable_type'=>'village']); //Mangge Nae
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57435, 'regionable_type'=>'village']); //Mbawi
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57436, 'regionable_type'=>'village']); //Menggeasi (mangge Asi)
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57437, 'regionable_type'=>'village']); //Sorisakolo
                DB::table('regionables')->insert(['region_id'=>4471, 'regionable_id'=>57440, 'regionable_type'=>'village']); //Montabaru
            DB::table('regions')->insert(['id'=>4472, 'parent'=>4467, 'code'=>'8425', 'type'=>'districts', 'name'=>'Districts 8425, City 842, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4472, 'regionable_id'=>4809, 'regionable_type'=>'districts']); //Woja
            DB::table('regionables')->insert(['region_id'=>4472, 'regionable_id'=>4810, 'regionable_type'=>'districts']); //Kilo
            DB::table('regionables')->insert(['region_id'=>4472, 'regionable_id'=>4811, 'regionable_type'=>'districts']); //Menggelewa (manggelewa)
                DB::table('regions')->insert(['id'=>4473, 'parent'=>4472, 'code'=>'84253', 'type'=>'village', 'name'=>'Village 84253, Districts 8425, City 842, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4473, 'regionable_id'=>57455, 'regionable_type'=>'village']); //Banggo
                DB::table('regionables')->insert(['region_id'=>4473, 'regionable_id'=>57456, 'regionable_type'=>'village']); //Doromelo
                DB::table('regionables')->insert(['region_id'=>4473, 'regionable_id'=>57457, 'regionable_type'=>'village']); //Kwangko
                DB::table('regionables')->insert(['region_id'=>4473, 'regionable_id'=>57458, 'regionable_type'=>'village']); //Lanci Jaya
                DB::table('regionables')->insert(['region_id'=>4473, 'regionable_id'=>57459, 'regionable_type'=>'village']); //Nangatumpu
                DB::table('regionables')->insert(['region_id'=>4473, 'regionable_id'=>57460, 'regionable_type'=>'village']); //Nusa Jaya
                DB::table('regionables')->insert(['region_id'=>4473, 'regionable_id'=>57461, 'regionable_type'=>'village']); //Soriutu
                DB::table('regionables')->insert(['region_id'=>4473, 'regionable_id'=>57462, 'regionable_type'=>'village']); //Suka Damai
            DB::table('regions')->insert(['id'=>4474, 'parent'=>4467, 'code'=>'8426', 'type'=>'districts', 'name'=>'Districts 8426, City 842, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4474, 'regionable_id'=>4812, 'regionable_type'=>'districts']); //Pekat
            DB::table('regionables')->insert(['region_id'=>4474, 'regionable_id'=>4813, 'regionable_type'=>'districts']); //Kempo
                DB::table('regions')->insert(['id'=>4475, 'parent'=>4474, 'code'=>'84261', 'type'=>'village', 'name'=>'Village 84261, Districts 8426, City 842, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57463, 'regionable_type'=>'village']); //Beringin Jaya
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57464, 'regionable_type'=>'village']); //Kadindi
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57465, 'regionable_type'=>'village']); //Nangamiro
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57466, 'regionable_type'=>'village']); //Pekat
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57467, 'regionable_type'=>'village']); //Peti
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57468, 'regionable_type'=>'village']); //Sorinomo
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57469, 'regionable_type'=>'village']); //Tambora
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57470, 'regionable_type'=>'village']); //Doro Kobo
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57471, 'regionable_type'=>'village']); //Kempo
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57472, 'regionable_type'=>'village']); //Konte
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57473, 'regionable_type'=>'village']); //Songgaja (songgajah)
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57474, 'regionable_type'=>'village']); //Soro
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57475, 'regionable_type'=>'village']); //Ta\a
                DB::table('regionables')->insert(['region_id'=>4475, 'regionable_id'=>57476, 'regionable_type'=>'village']); //Tolo Kalo
            DB::table('regions')->insert(['id'=>4476, 'parent'=>4467, 'code'=>'8427', 'type'=>'districts', 'name'=>'Districts 8427, City 842, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4476, 'regionable_id'=>4814, 'regionable_type'=>'districts']); //Hu\u
            DB::table('regionables')->insert(['region_id'=>4476, 'regionable_id'=>4815, 'regionable_type'=>'districts']); //Pajo
                DB::table('regions')->insert(['id'=>4477, 'parent'=>4476, 'code'=>'84272', 'type'=>'village', 'name'=>'Village 84272, Districts 8427, City 842, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4477, 'regionable_id'=>57482, 'regionable_type'=>'village']); //Jambu
                DB::table('regionables')->insert(['region_id'=>4477, 'regionable_id'=>57483, 'regionable_type'=>'village']); //Lepadi
                DB::table('regionables')->insert(['region_id'=>4477, 'regionable_id'=>57484, 'regionable_type'=>'village']); //Lune
                DB::table('regionables')->insert(['region_id'=>4477, 'regionable_id'=>57485, 'regionable_type'=>'village']); //Ranggo
                DB::table('regionables')->insert(['region_id'=>4477, 'regionable_id'=>57486, 'regionable_type'=>'village']); //Woko
        DB::table('regions')->insert(['id'=>4478, 'parent'=>4287, 'code'=>'843', 'type'=>'city', 'name'=>'City 843, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4478, 'regionable_id'=>291, 'regionable_type'=>'city']); //Sumbawa regencies
            DB::table('regions')->insert(['id'=>4479, 'parent'=>4478, 'code'=>'8431', 'type'=>'districts', 'name'=>'Districts 8431, City 843, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4479, 'regionable_id'=>4816, 'regionable_type'=>'districts']); //Sumbawa
            DB::table('regionables')->insert(['region_id'=>4479, 'regionable_id'=>4817, 'regionable_type'=>'districts']); //Labuhan Badas
            DB::table('regionables')->insert(['region_id'=>4479, 'regionable_id'=>4818, 'regionable_type'=>'districts']); //Unter Iwes (unterwiris)
                DB::table('regions')->insert(['id'=>4480, 'parent'=>4479, 'code'=>'84316', 'type'=>'village', 'name'=>'Village 84316, Districts 8431, City 843, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57492, 'regionable_type'=>'village']); //Samapuin
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57495, 'regionable_type'=>'village']); //Bajo Medang
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57496, 'regionable_type'=>'village']); //Bugis Medang
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57497, 'regionable_type'=>'village']); //Karang Dima
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57498, 'regionable_type'=>'village']); //Labuan Aji
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57499, 'regionable_type'=>'village']); //Labuan Sumbawa
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57500, 'regionable_type'=>'village']); //Labuhan Badas
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57501, 'regionable_type'=>'village']); //Sebotok
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57502, 'regionable_type'=>'village']); //Boak
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57503, 'regionable_type'=>'village']); //Jorok
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57504, 'regionable_type'=>'village']); //Kerato
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57505, 'regionable_type'=>'village']); //Kerekeh
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57506, 'regionable_type'=>'village']); //Nijang
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57507, 'regionable_type'=>'village']); //Pelat
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57508, 'regionable_type'=>'village']); //Pungka
                DB::table('regionables')->insert(['region_id'=>4480, 'regionable_id'=>57509, 'regionable_type'=>'village']); //Uma Beringin
            DB::table('regions')->insert(['id'=>4481, 'parent'=>4478, 'code'=>'8435', 'type'=>'districts', 'name'=>'Districts 8435, City 843, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4481, 'regionable_id'=>4819, 'regionable_type'=>'districts']); //Utan
            DB::table('regionables')->insert(['region_id'=>4481, 'regionable_id'=>4820, 'regionable_type'=>'districts']); //Rhee
            DB::table('regionables')->insert(['region_id'=>4481, 'regionable_id'=>4821, 'regionable_type'=>'districts']); //Alas
            DB::table('regionables')->insert(['region_id'=>4481, 'regionable_id'=>4822, 'regionable_type'=>'districts']); //Buer
            DB::table('regionables')->insert(['region_id'=>4481, 'regionable_id'=>4823, 'regionable_type'=>'districts']); //Alas Barat
                DB::table('regions')->insert(['id'=>4482, 'parent'=>4481, 'code'=>'84353', 'type'=>'village', 'name'=>'Village 84353, Districts 8435, City 843, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57523, 'regionable_type'=>'village']); //Baru
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57524, 'regionable_type'=>'village']); //Dalam
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57525, 'regionable_type'=>'village']); //Juranalas
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57526, 'regionable_type'=>'village']); //Kalimango
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57527, 'regionable_type'=>'village']); //Labuhan Alas
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57528, 'regionable_type'=>'village']); //Luar
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57529, 'regionable_type'=>'village']); //Marenteh
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57530, 'regionable_type'=>'village']); //Pulau Bungin
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57531, 'regionable_type'=>'village']); //Buin Baru
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57532, 'regionable_type'=>'village']); //Juru Mapin
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57533, 'regionable_type'=>'village']); //Kalabeso
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57534, 'regionable_type'=>'village']); //Labuhan Burung
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57535, 'regionable_type'=>'village']); //Pulau Kaung
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57536, 'regionable_type'=>'village']); //Tarusa
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57537, 'regionable_type'=>'village']); //Gontar
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57538, 'regionable_type'=>'village']); //Gontar Baru
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57539, 'regionable_type'=>'village']); //Labuan Mapin
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57540, 'regionable_type'=>'village']); //Lekong
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57541, 'regionable_type'=>'village']); //Mapin Baru
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57542, 'regionable_type'=>'village']); //Mapin Kebak
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57543, 'regionable_type'=>'village']); //Mapin Rea
                DB::table('regionables')->insert(['region_id'=>4482, 'regionable_id'=>57544, 'regionable_type'=>'village']); //Usar Mapin
            DB::table('regions')->insert(['id'=>4483, 'parent'=>4478, 'code'=>'8436', 'type'=>'districts', 'name'=>'Districts 8436, City 843, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4483, 'regionable_id'=>4824, 'regionable_type'=>'districts']); //Batulanteh
                DB::table('regions')->insert(['id'=>4484, 'parent'=>4483, 'code'=>'84361', 'type'=>'village', 'name'=>'Village 84361, Districts 8436, City 843, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4484, 'regionable_id'=>57545, 'regionable_type'=>'village']); //Bao Desa
                DB::table('regionables')->insert(['region_id'=>4484, 'regionable_id'=>57546, 'regionable_type'=>'village']); //Batudulang
                DB::table('regionables')->insert(['region_id'=>4484, 'regionable_id'=>57547, 'regionable_type'=>'village']); //Baturotok
                DB::table('regionables')->insert(['region_id'=>4484, 'regionable_id'=>57548, 'regionable_type'=>'village']); //Kelungkung
                DB::table('regionables')->insert(['region_id'=>4484, 'regionable_id'=>57549, 'regionable_type'=>'village']); //Tangkampulit (tangkan Pulit)
                DB::table('regionables')->insert(['region_id'=>4484, 'regionable_id'=>57550, 'regionable_type'=>'village']); //Tepal
            DB::table('regions')->insert(['id'=>4485, 'parent'=>4478, 'code'=>'8437', 'type'=>'districts', 'name'=>'Districts 8437, City 843, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4485, 'regionable_id'=>4825, 'regionable_type'=>'districts']); //Moyo Hulu
            DB::table('regionables')->insert(['region_id'=>4485, 'regionable_id'=>4826, 'regionable_type'=>'districts']); //Lantung
            DB::table('regionables')->insert(['region_id'=>4485, 'regionable_id'=>4827, 'regionable_type'=>'districts']); //Ropang
            DB::table('regionables')->insert(['region_id'=>4485, 'regionable_id'=>4828, 'regionable_type'=>'districts']); //Lenangguar
            DB::table('regionables')->insert(['region_id'=>4485, 'regionable_id'=>4829, 'regionable_type'=>'districts']); //Lunyuk
            DB::table('regionables')->insert(['region_id'=>4485, 'regionable_id'=>4830, 'regionable_type'=>'districts']); //Orong Telu
                DB::table('regions')->insert(['id'=>4486, 'parent'=>4485, 'code'=>'84373', 'type'=>'village', 'name'=>'Village 84373, Districts 8437, City 843, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57576, 'regionable_type'=>'village']); //Emang Lestari
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57577, 'regionable_type'=>'village']); //Jamu
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57578, 'regionable_type'=>'village']); //Lunyuk Ode
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57579, 'regionable_type'=>'village']); //Lunyuk Rea
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57580, 'regionable_type'=>'village']); //Pada Suka
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57581, 'regionable_type'=>'village']); //Perung
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57582, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57583, 'regionable_type'=>'village']); //Kelawis
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57584, 'regionable_type'=>'village']); //Mungkin
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57585, 'regionable_type'=>'village']); //Sebeok
                DB::table('regionables')->insert(['region_id'=>4486, 'regionable_id'=>57586, 'regionable_type'=>'village']); //Senawang
            DB::table('regions')->insert(['id'=>4487, 'parent'=>4478, 'code'=>'8438', 'type'=>'districts', 'name'=>'Districts 8438, City 843, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4831, 'regionable_type'=>'districts']); //Moyo Utara
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4832, 'regionable_type'=>'districts']); //Moyo Hilir
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4833, 'regionable_type'=>'districts']); //Lopok
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4834, 'regionable_type'=>'districts']); //Lape (lape Lopok)
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4835, 'regionable_type'=>'districts']); //Plampang
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4836, 'regionable_type'=>'districts']); //Labangka
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4837, 'regionable_type'=>'districts']); //Maronge
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4838, 'regionable_type'=>'districts']); //Tarano
            DB::table('regionables')->insert(['region_id'=>4487, 'regionable_id'=>4839, 'regionable_type'=>'districts']); //Empang
                DB::table('regions')->insert(['id'=>4488, 'parent'=>4487, 'code'=>'84384', 'type'=>'village', 'name'=>'Village 84384, Districts 8438, City 843, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57634, 'regionable_type'=>'village']); //Banda
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57635, 'regionable_type'=>'village']); //Bantulante
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57636, 'regionable_type'=>'village']); //Labuhan Aji
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57637, 'regionable_type'=>'village']); //Labuhan Bontong
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57638, 'regionable_type'=>'village']); //Labuhan Jambu
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57639, 'regionable_type'=>'village']); //Labuhan Pidang
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57640, 'regionable_type'=>'village']); //Mata
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57641, 'regionable_type'=>'village']); //Tolo Oi
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57642, 'regionable_type'=>'village']); //Boal
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57643, 'regionable_type'=>'village']); //Bunga Eja
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57644, 'regionable_type'=>'village']); //Empang Atas
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57645, 'regionable_type'=>'village']); //Empang Bawah
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57646, 'regionable_type'=>'village']); //Gapit
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57647, 'regionable_type'=>'village']); //Jotang
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57648, 'regionable_type'=>'village']); //Jotang Beru
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57649, 'regionable_type'=>'village']); //Lamenta
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57650, 'regionable_type'=>'village']); //Ongko
                DB::table('regionables')->insert(['region_id'=>4488, 'regionable_id'=>57651, 'regionable_type'=>'village']); //Pamanto
        DB::table('regions')->insert(['id'=>4489, 'parent'=>4287, 'code'=>'844', 'type'=>'city', 'name'=>'City 844, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4489, 'regionable_id'=>292, 'regionable_type'=>'city']); //Sumbawa Barat regencies
            DB::table('regions')->insert(['id'=>4490, 'parent'=>4489, 'code'=>'8445', 'type'=>'districts', 'name'=>'Districts 8445, City 844, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4490, 'regionable_id'=>4840, 'regionable_type'=>'districts']); //Sateluk (seteluk)
            DB::table('regionables')->insert(['region_id'=>4490, 'regionable_id'=>4841, 'regionable_type'=>'districts']); //Poto Tano
            DB::table('regionables')->insert(['region_id'=>4490, 'regionable_id'=>4842, 'regionable_type'=>'districts']); //Taliwang
            DB::table('regionables')->insert(['region_id'=>4490, 'regionable_id'=>4843, 'regionable_type'=>'districts']); //Brang Ene
            DB::table('regionables')->insert(['region_id'=>4490, 'regionable_id'=>4844, 'regionable_type'=>'districts']); //Jereweh
            DB::table('regionables')->insert(['region_id'=>4490, 'regionable_id'=>4845, 'regionable_type'=>'districts']); //Maluk
            DB::table('regionables')->insert(['region_id'=>4490, 'regionable_id'=>4846, 'regionable_type'=>'districts']); //Sekongkang
            DB::table('regionables')->insert(['region_id'=>4490, 'regionable_id'=>4847, 'regionable_type'=>'districts']); //Brang Rea
                DB::table('regions')->insert(['id'=>4491, 'parent'=>4490, 'code'=>'84458', 'type'=>'village', 'name'=>'Village 84458, Districts 8445, City 844, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4491, 'regionable_id'=>57712, 'regionable_type'=>'village']); //Bangkat Monte
                DB::table('regionables')->insert(['region_id'=>4491, 'regionable_id'=>57713, 'regionable_type'=>'village']); //Desa Beru
                DB::table('regionables')->insert(['region_id'=>4491, 'regionable_id'=>57714, 'regionable_type'=>'village']); //Sapugara Bree
                DB::table('regionables')->insert(['region_id'=>4491, 'regionable_id'=>57715, 'regionable_type'=>'village']); //Tepas

        //Nusa Tenggara Timur 
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>23, 'regionable_type'=>'province']); //Nusa Tenggara Timur 
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>293, 'regionable_type'=>'city']); //Kupang city
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>294, 'regionable_type'=>'city']); //Kupang regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>295, 'regionable_type'=>'city']); //Sabu Raijua regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>296, 'regionable_type'=>'city']); //Timor Tengah Selatan regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>297, 'regionable_type'=>'city']); //Timor Tengah Utara regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>298, 'regionable_type'=>'city']); //Belu regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>299, 'regionable_type'=>'city']); //Alor regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>300, 'regionable_type'=>'city']); //Rote Ndao regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>301, 'regionable_type'=>'city']); //Sikka regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>302, 'regionable_type'=>'city']); //Ende regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>303, 'regionable_type'=>'city']); //Flores Timur regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>304, 'regionable_type'=>'city']); //Ngada regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>305, 'regionable_type'=>'city']); //Nagekeo regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>306, 'regionable_type'=>'city']); //Manggarai regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>307, 'regionable_type'=>'city']); //Manggarai Timur regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>308, 'regionable_type'=>'city']); //Lembata regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>309, 'regionable_type'=>'city']); //Manggarai Barat regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>310, 'regionable_type'=>'city']); //Sumba Timur regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>311, 'regionable_type'=>'city']); //Sumba Barat regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>312, 'regionable_type'=>'city']); //Sumba Barat Daya regencies
        DB::table('regionables')->insert(['region_id'=>4287, 'regionable_id'=>313, 'regionable_type'=>'city']); //Sumba Tengah regencies

        DB::table('regions')->insert(['id'=>4492, 'parent'=>4287, 'code'=>'851', 'type'=>'city', 'name'=>'City 851, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4492, 'regionable_id'=>293, 'regionable_type'=>'city']); //Kupang city
        DB::table('regionables')->insert(['region_id'=>4492, 'regionable_id'=>294, 'regionable_type'=>'city']); //Kupang regencies
            DB::table('regions')->insert(['id'=>4493, 'parent'=>4492, 'code'=>'8511', 'type'=>'districts', 'name'=>'Districts 8511, City 851, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4493, 'regionable_id'=>4848, 'regionable_type'=>'districts']); //Oebobo
            DB::table('regionables')->insert(['region_id'=>4493, 'regionable_id'=>4849, 'regionable_type'=>'districts']); //Kota Raja
            DB::table('regionables')->insert(['region_id'=>4493, 'regionable_id'=>4878, 'regionable_type'=>'districts']); //Oebobo
            DB::table('regionables')->insert(['region_id'=>4493, 'regionable_id'=>4879, 'regionable_type'=>'districts']); //Kota Raja
                DB::table('regions')->insert(['id'=>4494, 'parent'=>4493, 'code'=>'85112', 'type'=>'village', 'name'=>'Village 85112, Districts 8511, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4494, 'regionable_id'=>57722, 'regionable_type'=>'village']); //Oetete
                DB::table('regionables')->insert(['region_id'=>4494, 'regionable_id'=>57724, 'regionable_type'=>'village']); //Fontein
                DB::table('regionables')->insert(['region_id'=>4494, 'regionable_id'=>57950, 'regionable_type'=>'village']); //Oetete
                DB::table('regionables')->insert(['region_id'=>4494, 'regionable_id'=>57952, 'regionable_type'=>'village']); //Fontein
                DB::table('regions')->insert(['id'=>4495, 'parent'=>4493, 'code'=>'85116', 'type'=>'village', 'name'=>'Village 85116, Districts 8511, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4495, 'regionable_id'=>57723, 'regionable_type'=>'village']); //Bakunase Dua
                DB::table('regionables')->insert(['region_id'=>4495, 'regionable_id'=>57725, 'regionable_type'=>'village']); //Bakunase
                DB::table('regionables')->insert(['region_id'=>4495, 'regionable_id'=>57951, 'regionable_type'=>'village']); //Bakunase Dua
                DB::table('regionables')->insert(['region_id'=>4495, 'regionable_id'=>57953, 'regionable_type'=>'village']); //Bakunase
                DB::table('regions')->insert(['id'=>4496, 'parent'=>4493, 'code'=>'85118', 'type'=>'village', 'name'=>'Village 85118, Districts 8511, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4496, 'regionable_id'=>57726, 'regionable_type'=>'village']); //Naikoten I (satu)
                DB::table('regionables')->insert(['region_id'=>4496, 'regionable_id'=>57727, 'regionable_type'=>'village']); //Naikoten Ii (dua)
                DB::table('regionables')->insert(['region_id'=>4496, 'regionable_id'=>57954, 'regionable_type'=>'village']); //Naikoten I (satu)
                DB::table('regionables')->insert(['region_id'=>4496, 'regionable_id'=>57955, 'regionable_type'=>'village']); //Naikoten Ii (dua)
                DB::table('regions')->insert(['id'=>4497, 'parent'=>4493, 'code'=>'85119', 'type'=>'village', 'name'=>'Village 85119, Districts 8511, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4497, 'regionable_id'=>57728, 'regionable_type'=>'village']); //Air Nona
                DB::table('regionables')->insert(['region_id'=>4497, 'regionable_id'=>57729, 'regionable_type'=>'village']); //Kuanino
                DB::table('regionables')->insert(['region_id'=>4497, 'regionable_id'=>57730, 'regionable_type'=>'village']); //Nunleu
                DB::table('regionables')->insert(['region_id'=>4497, 'regionable_id'=>57956, 'regionable_type'=>'village']); //Air Nona
                DB::table('regionables')->insert(['region_id'=>4497, 'regionable_id'=>57957, 'regionable_type'=>'village']); //Kuanino
                DB::table('regionables')->insert(['region_id'=>4497, 'regionable_id'=>57958, 'regionable_type'=>'village']); //Nunleu
            DB::table('regions')->insert(['id'=>4498, 'parent'=>4492, 'code'=>'8514', 'type'=>'districts', 'name'=>'Districts 8514, City 851, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4498, 'regionable_id'=>4850, 'regionable_type'=>'districts']); //Maulafa
            DB::table('regionables')->insert(['region_id'=>4498, 'regionable_id'=>4880, 'regionable_type'=>'districts']); //Maulafa
                DB::table('regions')->insert(['id'=>4499, 'parent'=>4498, 'code'=>'85141', 'type'=>'village', 'name'=>'Village 85141, Districts 8514, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4499, 'regionable_id'=>57731, 'regionable_type'=>'village']); //Maulafa
                DB::table('regionables')->insert(['region_id'=>4499, 'regionable_id'=>57959, 'regionable_type'=>'village']); //Maulafa
                DB::table('regions')->insert(['id'=>4500, 'parent'=>4498, 'code'=>'85142', 'type'=>'village', 'name'=>'Village 85142, Districts 8514, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4500, 'regionable_id'=>57732, 'regionable_type'=>'village']); //Naikolan
                DB::table('regionables')->insert(['region_id'=>4500, 'regionable_id'=>57733, 'regionable_type'=>'village']); //Oepura
                DB::table('regionables')->insert(['region_id'=>4500, 'regionable_id'=>57960, 'regionable_type'=>'village']); //Naikolan
                DB::table('regionables')->insert(['region_id'=>4500, 'regionable_id'=>57961, 'regionable_type'=>'village']); //Oepura
                DB::table('regions')->insert(['id'=>4501, 'parent'=>4498, 'code'=>'85143', 'type'=>'village', 'name'=>'Village 85143, Districts 8514, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4501, 'regionable_id'=>57734, 'regionable_type'=>'village']); //Sikumana
                DB::table('regionables')->insert(['region_id'=>4501, 'regionable_id'=>57962, 'regionable_type'=>'village']); //Sikumana
                DB::table('regions')->insert(['id'=>4502, 'parent'=>4498, 'code'=>'85144', 'type'=>'village', 'name'=>'Village 85144, Districts 8514, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4502, 'regionable_id'=>57735, 'regionable_type'=>'village']); //Fatukoa
                DB::table('regionables')->insert(['region_id'=>4502, 'regionable_id'=>57963, 'regionable_type'=>'village']); //Fatukoa
                DB::table('regions')->insert(['id'=>4503, 'parent'=>4498, 'code'=>'85146', 'type'=>'village', 'name'=>'Village 85146, Districts 8514, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4503, 'regionable_id'=>57736, 'regionable_type'=>'village']); //Kolhua
                DB::table('regionables')->insert(['region_id'=>4503, 'regionable_id'=>57964, 'regionable_type'=>'village']); //Kolhua
                DB::table('regions')->insert(['id'=>4504, 'parent'=>4498, 'code'=>'85147', 'type'=>'village', 'name'=>'Village 85147, Districts 8514, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4504, 'regionable_id'=>57737, 'regionable_type'=>'village']); //Naimata
                DB::table('regionables')->insert(['region_id'=>4504, 'regionable_id'=>57965, 'regionable_type'=>'village']); //Naimata
                DB::table('regions')->insert(['id'=>4505, 'parent'=>4498, 'code'=>'85148', 'type'=>'village', 'name'=>'Village 85148, Districts 8514, City 851, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4505, 'regionable_id'=>57738, 'regionable_type'=>'village']); //Bello
                DB::table('regionables')->insert(['region_id'=>4505, 'regionable_id'=>57739, 'regionable_type'=>'village']); //Penfui
                DB::table('regionables')->insert(['region_id'=>4505, 'regionable_id'=>57966, 'regionable_type'=>'village']); //Bello
                DB::table('regionables')->insert(['region_id'=>4505, 'regionable_id'=>57967, 'regionable_type'=>'village']); //Penfui
        DB::table('regions')->insert(['id'=>4506, 'parent'=>4287, 'code'=>'852', 'type'=>'city', 'name'=>'City 852, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4506, 'regionable_id'=>293, 'regionable_type'=>'city']); //Kupang city
        DB::table('regionables')->insert(['region_id'=>4506, 'regionable_id'=>294, 'regionable_type'=>'city']); //Kupang regencies
            DB::table('regions')->insert(['id'=>4507, 'parent'=>4506, 'code'=>'8522', 'type'=>'districts', 'name'=>'Districts 8522, City 852, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4507, 'regionable_id'=>4851, 'regionable_type'=>'districts']); //Kota Lama
            DB::table('regionables')->insert(['region_id'=>4507, 'regionable_id'=>4852, 'regionable_type'=>'districts']); //Fatuleu Barat
            DB::table('regionables')->insert(['region_id'=>4507, 'regionable_id'=>4853, 'regionable_type'=>'districts']); //Fatuleu Tengah
            DB::table('regionables')->insert(['region_id'=>4507, 'regionable_id'=>4854, 'regionable_type'=>'districts']); //Kelapa Lima
            DB::table('regionables')->insert(['region_id'=>4507, 'regionable_id'=>4881, 'regionable_type'=>'districts']); //Kota Lama
            DB::table('regionables')->insert(['region_id'=>4507, 'regionable_id'=>4882, 'regionable_type'=>'districts']); //Fatuleu Barat
            DB::table('regionables')->insert(['region_id'=>4507, 'regionable_id'=>4883, 'regionable_type'=>'districts']); //Fatuleu Tengah
            DB::table('regionables')->insert(['region_id'=>4507, 'regionable_id'=>4884, 'regionable_type'=>'districts']); //Kelapa Lima
                DB::table('regions')->insert(['id'=>4508, 'parent'=>4507, 'code'=>'85228', 'type'=>'village', 'name'=>'Village 85228, Districts 8522, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57759, 'regionable_type'=>'village']); //Kelapa Lima
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57760, 'regionable_type'=>'village']); //Lasiana
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57761, 'regionable_type'=>'village']); //Oesapa
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57762, 'regionable_type'=>'village']); //Oesapa Barat
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57763, 'regionable_type'=>'village']); //Oesapa Selatan
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57987, 'regionable_type'=>'village']); //Kelapa Lima
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57988, 'regionable_type'=>'village']); //Lasiana
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57989, 'regionable_type'=>'village']); //Oesapa
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57990, 'regionable_type'=>'village']); //Oesapa Barat
                DB::table('regionables')->insert(['region_id'=>4508, 'regionable_id'=>57991, 'regionable_type'=>'village']); //Oesapa Selatan
            DB::table('regions')->insert(['id'=>4509, 'parent'=>4506, 'code'=>'8523', 'type'=>'districts', 'name'=>'Districts 8523, City 852, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4509, 'regionable_id'=>4855, 'regionable_type'=>'districts']); //Alak
            DB::table('regionables')->insert(['region_id'=>4509, 'regionable_id'=>4885, 'regionable_type'=>'districts']); //Alak
                DB::table('regions')->insert(['id'=>4510, 'parent'=>4509, 'code'=>'85231', 'type'=>'village', 'name'=>'Village 85231, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4510, 'regionable_id'=>57764, 'regionable_type'=>'village']); //Alak
                DB::table('regionables')->insert(['region_id'=>4510, 'regionable_id'=>57765, 'regionable_type'=>'village']); //Penkase Oeleta
                DB::table('regionables')->insert(['region_id'=>4510, 'regionable_id'=>57992, 'regionable_type'=>'village']); //Alak
                DB::table('regionables')->insert(['region_id'=>4510, 'regionable_id'=>57993, 'regionable_type'=>'village']); //Penkase Oeleta
                DB::table('regions')->insert(['id'=>4511, 'parent'=>4509, 'code'=>'85232', 'type'=>'village', 'name'=>'Village 85232, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4511, 'regionable_id'=>57766, 'regionable_type'=>'village']); //Namosain
                DB::table('regionables')->insert(['region_id'=>4511, 'regionable_id'=>57994, 'regionable_type'=>'village']); //Namosain
                DB::table('regions')->insert(['id'=>4512, 'parent'=>4509, 'code'=>'85233', 'type'=>'village', 'name'=>'Village 85233, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4512, 'regionable_id'=>57767, 'regionable_type'=>'village']); //Nunbaun Delha
                DB::table('regionables')->insert(['region_id'=>4512, 'regionable_id'=>57768, 'regionable_type'=>'village']); //Nunbaun Sabu
                DB::table('regionables')->insert(['region_id'=>4512, 'regionable_id'=>57995, 'regionable_type'=>'village']); //Nunbaun Delha
                DB::table('regionables')->insert(['region_id'=>4512, 'regionable_id'=>57996, 'regionable_type'=>'village']); //Nunbaun Sabu
                DB::table('regions')->insert(['id'=>4513, 'parent'=>4509, 'code'=>'85234', 'type'=>'village', 'name'=>'Village 85234, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4513, 'regionable_id'=>57769, 'regionable_type'=>'village']); //Fatufeto
                DB::table('regionables')->insert(['region_id'=>4513, 'regionable_id'=>57770, 'regionable_type'=>'village']); //Nunhila
                DB::table('regionables')->insert(['region_id'=>4513, 'regionable_id'=>57997, 'regionable_type'=>'village']); //Fatufeto
                DB::table('regionables')->insert(['region_id'=>4513, 'regionable_id'=>57998, 'regionable_type'=>'village']); //Nunhila
                DB::table('regions')->insert(['id'=>4514, 'parent'=>4509, 'code'=>'85235', 'type'=>'village', 'name'=>'Village 85235, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4514, 'regionable_id'=>57771, 'regionable_type'=>'village']); //Mantasi
                DB::table('regionables')->insert(['region_id'=>4514, 'regionable_id'=>57999, 'regionable_type'=>'village']); //Mantasi
                DB::table('regions')->insert(['id'=>4515, 'parent'=>4509, 'code'=>'85236', 'type'=>'village', 'name'=>'Village 85236, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4515, 'regionable_id'=>57772, 'regionable_type'=>'village']); //Manutapen
                DB::table('regionables')->insert(['region_id'=>4515, 'regionable_id'=>58000, 'regionable_type'=>'village']); //Manutapen
                DB::table('regions')->insert(['id'=>4516, 'parent'=>4509, 'code'=>'85237', 'type'=>'village', 'name'=>'Village 85237, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4516, 'regionable_id'=>57773, 'regionable_type'=>'village']); //Batuplat
                DB::table('regionables')->insert(['region_id'=>4516, 'regionable_id'=>58001, 'regionable_type'=>'village']); //Batuplat
                DB::table('regions')->insert(['id'=>4517, 'parent'=>4509, 'code'=>'85238', 'type'=>'village', 'name'=>'Village 85238, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4517, 'regionable_id'=>57774, 'regionable_type'=>'village']); //Manulai Ii
                DB::table('regionables')->insert(['region_id'=>4517, 'regionable_id'=>58002, 'regionable_type'=>'village']); //Manulai Ii
                DB::table('regions')->insert(['id'=>4518, 'parent'=>4509, 'code'=>'85239', 'type'=>'village', 'name'=>'Village 85239, Districts 8523, City 852, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4518, 'regionable_id'=>57775, 'regionable_type'=>'village']); //Naioni
                DB::table('regionables')->insert(['region_id'=>4518, 'regionable_id'=>58003, 'regionable_type'=>'village']); //Naioni
        DB::table('regions')->insert(['id'=>4519, 'parent'=>4287, 'code'=>'853', 'type'=>'city', 'name'=>'City 853, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4519, 'regionable_id'=>293, 'regionable_type'=>'city']); //Kupang city
        DB::table('regionables')->insert(['region_id'=>4519, 'regionable_id'=>294, 'regionable_type'=>'city']); //Kupang regencies
        DB::table('regionables')->insert(['region_id'=>4519, 'regionable_id'=>295, 'regionable_type'=>'city']); //Sabu Raijua regencies
            DB::table('regions')->insert(['id'=>4520, 'parent'=>4519, 'code'=>'8539', 'type'=>'districts', 'name'=>'Districts 8539, City 853, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4520, 'regionable_id'=>4877, 'regionable_type'=>'districts']); //Nekamese
            DB::table('regionables')->insert(['region_id'=>4520, 'regionable_id'=>4907, 'regionable_type'=>'districts']); //Nekamese
            DB::table('regionables')->insert(['region_id'=>4520, 'regionable_id'=>4908, 'regionable_type'=>'districts']); //Hawu Mehara
            DB::table('regionables')->insert(['region_id'=>4520, 'regionable_id'=>4909, 'regionable_type'=>'districts']); //Sabu Liae
            DB::table('regionables')->insert(['region_id'=>4520, 'regionable_id'=>4910, 'regionable_type'=>'districts']); //Sabu Barat
            DB::table('regionables')->insert(['region_id'=>4520, 'regionable_id'=>4911, 'regionable_type'=>'districts']); //Sabu Tengah
            DB::table('regionables')->insert(['region_id'=>4520, 'regionable_id'=>4912, 'regionable_type'=>'districts']); //Sabu Timur
            DB::table('regionables')->insert(['region_id'=>4520, 'regionable_id'=>4913, 'regionable_type'=>'districts']); //Raijua
                DB::table('regions')->insert(['id'=>4521, 'parent'=>4520, 'code'=>'85393', 'type'=>'village', 'name'=>'Village 85393, Districts 8539, City 853, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4521, 'regionable_id'=>58230, 'regionable_type'=>'village']); //Ballu
                DB::table('regionables')->insert(['region_id'=>4521, 'regionable_id'=>58231, 'regionable_type'=>'village']); //Bolua
                DB::table('regionables')->insert(['region_id'=>4521, 'regionable_id'=>58232, 'regionable_type'=>'village']); //Kolorae
                DB::table('regionables')->insert(['region_id'=>4521, 'regionable_id'=>58233, 'regionable_type'=>'village']); //Ledeke
                DB::table('regionables')->insert(['region_id'=>4521, 'regionable_id'=>58234, 'regionable_type'=>'village']); //Ledeunu
        DB::table('regions')->insert(['id'=>4522, 'parent'=>4287, 'code'=>'855', 'type'=>'city', 'name'=>'City 855, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4522, 'regionable_id'=>296, 'regionable_type'=>'city']); //Timor Tengah Selatan regencies
            DB::table('regions')->insert(['id'=>4523, 'parent'=>4522, 'code'=>'8551', 'type'=>'districts', 'name'=>'Districts 8551, City 855, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4523, 'regionable_id'=>4914, 'regionable_type'=>'districts']); //Kota Soe
            DB::table('regionables')->insert(['region_id'=>4523, 'regionable_id'=>4915, 'regionable_type'=>'districts']); //Amanuban Barat
                DB::table('regions')->insert(['id'=>4524, 'parent'=>4523, 'code'=>'85514', 'type'=>'village', 'name'=>'Village 85514, Districts 8551, City 855, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4524, 'regionable_id'=>58248, 'regionable_type'=>'village']); //Mnelalete
            DB::table('regions')->insert(['id'=>4525, 'parent'=>4522, 'code'=>'8555', 'type'=>'districts', 'name'=>'Districts 8555, City 855, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4525, 'regionable_id'=>4915, 'regionable_type'=>'districts']); //Amanuban Barat
            DB::table('regionables')->insert(['region_id'=>4525, 'regionable_id'=>4916, 'regionable_type'=>'districts']); //Kuatnana
            DB::table('regionables')->insert(['region_id'=>4525, 'regionable_id'=>4917, 'regionable_type'=>'districts']); //Mollo Utara
            DB::table('regionables')->insert(['region_id'=>4525, 'regionable_id'=>4918, 'regionable_type'=>'districts']); //Tobu
                DB::table('regions')->insert(['id'=>4526, 'parent'=>4525, 'code'=>'85552', 'type'=>'village', 'name'=>'Village 85552, Districts 8555, City 855, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58264, 'regionable_type'=>'village']); //Ajaobaki
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58265, 'regionable_type'=>'village']); //Bijaepunu
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58266, 'regionable_type'=>'village']); //Bosen
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58267, 'regionable_type'=>'village']); //Eon Besi
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58268, 'regionable_type'=>'village']); //Fatukoto
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58269, 'regionable_type'=>'village']); //Halme
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58270, 'regionable_type'=>'village']); //Iusmolo
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58271, 'regionable_type'=>'village']); //Kokfe\u
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58272, 'regionable_type'=>'village']); //Lelobatan
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58273, 'regionable_type'=>'village']); //Leloboko
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58274, 'regionable_type'=>'village']); //Nefokoko
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58275, 'regionable_type'=>'village']); //Netpala
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58276, 'regionable_type'=>'village']); //Obesi
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58277, 'regionable_type'=>'village']); //Sebot
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58278, 'regionable_type'=>'village']); //Taiftob
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58279, 'regionable_type'=>'village']); //To\fen
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58280, 'regionable_type'=>'village']); //To\manat
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58281, 'regionable_type'=>'village']); //Tunua
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58282, 'regionable_type'=>'village']); //Bestobe
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58283, 'regionable_type'=>'village']); //Huetalan
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58284, 'regionable_type'=>'village']); //Pubasu
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58285, 'regionable_type'=>'village']); //Saubalan
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58286, 'regionable_type'=>'village']); //Tobu
                DB::table('regionables')->insert(['region_id'=>4526, 'regionable_id'=>58287, 'regionable_type'=>'village']); //Tutem
            DB::table('regions')->insert(['id'=>4527, 'parent'=>4522, 'code'=>'8556', 'type'=>'districts', 'name'=>'Districts 8556, City 855, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4918, 'regionable_type'=>'districts']); //Tobu
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4919, 'regionable_type'=>'districts']); //Polen
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4920, 'regionable_type'=>'districts']); //Mollo Barat
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4921, 'regionable_type'=>'districts']); //Mollo Selatan
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4922, 'regionable_type'=>'districts']); //Mollo Tengah
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4923, 'regionable_type'=>'districts']); //Fatumnasi
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4924, 'regionable_type'=>'districts']); //Nunbena
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4925, 'regionable_type'=>'districts']); //Amanuban Selatan
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4926, 'regionable_type'=>'districts']); //Batu Putih
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4927, 'regionable_type'=>'districts']); //Noebeba
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4928, 'regionable_type'=>'districts']); //Kualin
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4929, 'regionable_type'=>'districts']); //Kolbano
            DB::table('regionables')->insert(['region_id'=>4527, 'regionable_id'=>4930, 'regionable_type'=>'districts']); //Kuanfatu
                DB::table('regions')->insert(['id'=>4528, 'parent'=>4527, 'code'=>'85563', 'type'=>'village', 'name'=>'Village 85563, Districts 8556, City 855, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58362, 'regionable_type'=>'village']); //Babuin
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58363, 'regionable_type'=>'village']); //Haunobenak
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58364, 'regionable_type'=>'village']); //Kolbano
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58365, 'regionable_type'=>'village']); //Noesiu
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58366, 'regionable_type'=>'village']); //Nununamat
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58367, 'regionable_type'=>'village']); //Oeleu
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58368, 'regionable_type'=>'village']); //Oetuke
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58369, 'regionable_type'=>'village']); //Ofu
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58370, 'regionable_type'=>'village']); //Pana
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58371, 'regionable_type'=>'village']); //Pene Selatan
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58372, 'regionable_type'=>'village']); //Sei
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58373, 'regionable_type'=>'village']); //Spaha
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58374, 'regionable_type'=>'village']); //Basmuti
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58375, 'regionable_type'=>'village']); //Kakan
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58376, 'regionable_type'=>'village']); //Kelle
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58377, 'regionable_type'=>'village']); //Kelle Tunan
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58378, 'regionable_type'=>'village']); //Kuanfatu
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58379, 'regionable_type'=>'village']); //Kusi
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58380, 'regionable_type'=>'village']); //Kusi Utara
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58381, 'regionable_type'=>'village']); //Lasi
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58382, 'regionable_type'=>'village']); //Noebeba
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58383, 'regionable_type'=>'village']); //Oebo
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58384, 'regionable_type'=>'village']); //Oehan
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58385, 'regionable_type'=>'village']); //Olais
                DB::table('regionables')->insert(['region_id'=>4528, 'regionable_id'=>58386, 'regionable_type'=>'village']); //Taupi
            DB::table('regions')->insert(['id'=>4529, 'parent'=>4522, 'code'=>'8557', 'type'=>'districts', 'name'=>'Districts 8557, City 855, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4931, 'regionable_type'=>'districts']); //Amanuban Tengah
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4932, 'regionable_type'=>'districts']); //Oenino
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4933, 'regionable_type'=>'districts']); //Fautmolo
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4934, 'regionable_type'=>'districts']); //Fatukopa
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4935, 'regionable_type'=>'districts']); //Amanuban Timur
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4936, 'regionable_type'=>'districts']); //Amanatun Selatan
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4937, 'regionable_type'=>'districts']); //Boking
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4938, 'regionable_type'=>'districts']); //Nunkolo
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4939, 'regionable_type'=>'districts']); //Noebana
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4940, 'regionable_type'=>'districts']); //Santian
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4941, 'regionable_type'=>'districts']); //Kok Baun
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4942, 'regionable_type'=>'districts']); //Toianas
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4943, 'regionable_type'=>'districts']); //Amanatun Utara
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4944, 'regionable_type'=>'districts']); //Kie (ki\e)
            DB::table('regionables')->insert(['region_id'=>4529, 'regionable_id'=>4945, 'regionable_type'=>'districts']); //Kot Olin
                DB::table('regions')->insert(['id'=>4530, 'parent'=>4529, 'code'=>'85575', 'type'=>'village', 'name'=>'Village 85575, Districts 8557, City 855, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58492, 'regionable_type'=>'village']); //Belle
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58493, 'regionable_type'=>'village']); //Boti
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58494, 'regionable_type'=>'village']); //Enonapi
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58495, 'regionable_type'=>'village']); //Fallas
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58496, 'regionable_type'=>'village']); //Fatukusi
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58497, 'regionable_type'=>'village']); //Fatuulan
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58498, 'regionable_type'=>'village']); //Naile\u
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58499, 'regionable_type'=>'village']); //Napi
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58500, 'regionable_type'=>'village']); //Nekmese
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58501, 'regionable_type'=>'village']); //Oenai
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58502, 'regionable_type'=>'village']); //Oinlasi
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58503, 'regionable_type'=>'village']); //Pili
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58504, 'regionable_type'=>'village']); //Tesi Ayofanu
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58505, 'regionable_type'=>'village']); //Binenok
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58506, 'regionable_type'=>'village']); //Fatuat
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58507, 'regionable_type'=>'village']); //Hoibeti
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58508, 'regionable_type'=>'village']); //Kot Olin
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58509, 'regionable_type'=>'village']); //Nualunat
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58510, 'regionable_type'=>'village']); //Nunbena
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58511, 'regionable_type'=>'village']); //O Obibi
                DB::table('regionables')->insert(['region_id'=>4530, 'regionable_id'=>58512, 'regionable_type'=>'village']); //Panite
        DB::table('regions')->insert(['id'=>4531, 'parent'=>4287, 'code'=>'856', 'type'=>'city', 'name'=>'City 856, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4531, 'regionable_id'=>297, 'regionable_type'=>'city']); //Timor Tengah Utara regencies
            DB::table('regions')->insert(['id'=>4532, 'parent'=>4531, 'code'=>'8561', 'type'=>'districts', 'name'=>'Districts 8561, City 856, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4532, 'regionable_id'=>4946, 'regionable_type'=>'districts']); //Kota Kefamenanu
            DB::table('regionables')->insert(['region_id'=>4532, 'regionable_id'=>4947, 'regionable_type'=>'districts']); //Biboki Anleu
            DB::table('regionables')->insert(['region_id'=>4532, 'regionable_id'=>4948, 'regionable_type'=>'districts']); //Bikomi Selatan
                DB::table('regions')->insert(['id'=>4533, 'parent'=>4532, 'code'=>'85617', 'type'=>'village', 'name'=>'Village 85617, Districts 8561, City 856, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4533, 'regionable_id'=>58520, 'regionable_type'=>'village']); //Maubeli
                DB::table('regionables')->insert(['region_id'=>4533, 'regionable_id'=>58521, 'regionable_type'=>'village']); //Tubuhue
                DB::table('regionables')->insert(['region_id'=>4533, 'regionable_id'=>58531, 'regionable_type'=>'village']); //Tublopo
            DB::table('regions')->insert(['id'=>4534, 'parent'=>4531, 'code'=>'8565', 'type'=>'districts', 'name'=>'Districts 8565, City 856, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4534, 'regionable_id'=>4948, 'regionable_type'=>'districts']); //Bikomi Selatan
            DB::table('regionables')->insert(['region_id'=>4534, 'regionable_id'=>4949, 'regionable_type'=>'districts']); //Miomaffo Timur
            DB::table('regionables')->insert(['region_id'=>4534, 'regionable_id'=>4950, 'regionable_type'=>'districts']); //Bikomi Utara
            DB::table('regionables')->insert(['region_id'=>4534, 'regionable_id'=>4951, 'regionable_type'=>'districts']); //Naibenu
            DB::table('regionables')->insert(['region_id'=>4534, 'regionable_id'=>4952, 'regionable_type'=>'districts']); //Bikomi Tengah
            DB::table('regionables')->insert(['region_id'=>4534, 'regionable_id'=>4953, 'regionable_type'=>'districts']); //Bikomi Nilulat
                DB::table('regions')->insert(['id'=>4535, 'parent'=>4534, 'code'=>'85651', 'type'=>'village', 'name'=>'Village 85651, Districts 8565, City 856, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58532, 'regionable_type'=>'village']); //Kiusili
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58533, 'regionable_type'=>'village']); //Maurisu
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58534, 'regionable_type'=>'village']); //Maurisu Selatan
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58535, 'regionable_type'=>'village']); //Maurisu Utara
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58536, 'regionable_type'=>'village']); //Naiola
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58537, 'regionable_type'=>'village']); //Oelami
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58538, 'regionable_type'=>'village']); //Oetalus
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58539, 'regionable_type'=>'village']); //Amol
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58540, 'regionable_type'=>'village']); //Bitefa
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58541, 'regionable_type'=>'village']); //Bokon
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58542, 'regionable_type'=>'village']); //Fatusene
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58543, 'regionable_type'=>'village']); //Femnasi
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58544, 'regionable_type'=>'village']); //Jak
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58545, 'regionable_type'=>'village']); //Kaenbaun
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58546, 'regionable_type'=>'village']); //Oesena
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58547, 'regionable_type'=>'village']); //Taekas
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58548, 'regionable_type'=>'village']); //Tunoe
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58549, 'regionable_type'=>'village']); //Tuntun
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58550, 'regionable_type'=>'village']); //Baas
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58551, 'regionable_type'=>'village']); //Banain A
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58552, 'regionable_type'=>'village']); //Banain B
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58553, 'regionable_type'=>'village']); //Banain C
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58554, 'regionable_type'=>'village']); //Faennake
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58555, 'regionable_type'=>'village']); //Haumeni
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58556, 'regionable_type'=>'village']); //Napan
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58557, 'regionable_type'=>'village']); //Sainoni
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58558, 'regionable_type'=>'village']); //Tes
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58559, 'regionable_type'=>'village']); //Bakitolas
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58560, 'regionable_type'=>'village']); //Benus
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58561, 'regionable_type'=>'village']); //Manamas
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58562, 'regionable_type'=>'village']); //Sunsea
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58563, 'regionable_type'=>'village']); //Buk
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58564, 'regionable_type'=>'village']); //Kuanek/kuenak
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58565, 'regionable_type'=>'village']); //Nimasi
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58566, 'regionable_type'=>'village']); //Oelbonak
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58567, 'regionable_type'=>'village']); //Oenenu
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58568, 'regionable_type'=>'village']); //Oenenu Selatan
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58569, 'regionable_type'=>'village']); //Oenenu Utara
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58570, 'regionable_type'=>'village']); //Oenino
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58571, 'regionable_type'=>'village']); //Haumeni Ana
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58572, 'regionable_type'=>'village']); //Inbate
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58573, 'regionable_type'=>'village']); //Nainaban
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58574, 'regionable_type'=>'village']); //Nilulat
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58575, 'regionable_type'=>'village']); //Sunkaen
                DB::table('regionables')->insert(['region_id'=>4535, 'regionable_id'=>58576, 'regionable_type'=>'village']); //Tubu
            DB::table('regions')->insert(['id'=>4536, 'parent'=>4531, 'code'=>'8566', 'type'=>'districts', 'name'=>'Districts 8566, City 856, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4536, 'regionable_id'=>4954, 'regionable_type'=>'districts']); //Musi
            DB::table('regionables')->insert(['region_id'=>4536, 'regionable_id'=>4955, 'regionable_type'=>'districts']); //Miomaffo Tengah
            DB::table('regionables')->insert(['region_id'=>4536, 'regionable_id'=>4956, 'regionable_type'=>'districts']); //Noemuti
            DB::table('regionables')->insert(['region_id'=>4536, 'regionable_id'=>4957, 'regionable_type'=>'districts']); //Miomaffo Barat
            DB::table('regionables')->insert(['region_id'=>4536, 'regionable_id'=>4958, 'regionable_type'=>'districts']); //Noemuti Timur
            DB::table('regionables')->insert(['region_id'=>4536, 'regionable_id'=>4959, 'regionable_type'=>'districts']); //Mutis
                DB::table('regions')->insert(['id'=>4537, 'parent'=>4536, 'code'=>'85661', 'type'=>'village', 'name'=>'Village 85661, Districts 8566, City 856, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58577, 'regionable_type'=>'village']); //Ainan
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58578, 'regionable_type'=>'village']); //Batnes
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58579, 'regionable_type'=>'village']); //Bisafe
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58580, 'regionable_type'=>'village']); //Oelneke
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58581, 'regionable_type'=>'village']); //Oeolo
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58582, 'regionable_type'=>'village']); //Oetulu
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58583, 'regionable_type'=>'village']); //Akomi
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58584, 'regionable_type'=>'village']); //Bijaepasu
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58585, 'regionable_type'=>'village']); //Nian
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58586, 'regionable_type'=>'village']); //Noenasi
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58587, 'regionable_type'=>'village']); //Tuabatan
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58588, 'regionable_type'=>'village']); //Banfanu
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58589, 'regionable_type'=>'village']); //Bijeli
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58590, 'regionable_type'=>'village']); //Fatumuti
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58591, 'regionable_type'=>'village']); //Kiuola
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58592, 'regionable_type'=>'village']); //Nibaaf
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58593, 'regionable_type'=>'village']); //Nifuboke
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58594, 'regionable_type'=>'village']); //Noebaun
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58595, 'regionable_type'=>'village']); //Noemuti
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58596, 'regionable_type'=>'village']); //Oenak
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58597, 'regionable_type'=>'village']); //Oeperigi
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58598, 'regionable_type'=>'village']); //Popnam
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58599, 'regionable_type'=>'village']); //Seo
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58600, 'regionable_type'=>'village']); //Eban
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58601, 'regionable_type'=>'village']); //Fatuneno
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58602, 'regionable_type'=>'village']); //Fatunisuan
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58603, 'regionable_type'=>'village']); //Fatutasu
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58604, 'regionable_type'=>'village']); //Haulasi
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58605, 'regionable_type'=>'village']); //Lemon
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58606, 'regionable_type'=>'village']); //Manusasi
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58607, 'regionable_type'=>'village']); //Noeltoko
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58608, 'regionable_type'=>'village']); //Noepesu
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58609, 'regionable_type'=>'village']); //Saenam
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58610, 'regionable_type'=>'village']); //Sallu
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58611, 'regionable_type'=>'village']); //Suanae
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58612, 'regionable_type'=>'village']); //Haekto
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58613, 'regionable_type'=>'village']); //Kuaken
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58614, 'regionable_type'=>'village']); //Manikin
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58615, 'regionable_type'=>'village']); //Naob
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58616, 'regionable_type'=>'village']); //Naekake A
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58617, 'regionable_type'=>'village']); //Naekake B
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58618, 'regionable_type'=>'village']); //Noelelo
                DB::table('regionables')->insert(['region_id'=>4537, 'regionable_id'=>58619, 'regionable_type'=>'village']); //Tasinifu
            DB::table('regions')->insert(['id'=>4538, 'parent'=>4531, 'code'=>'8567', 'type'=>'districts', 'name'=>'Districts 8567, City 856, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4538, 'regionable_id'=>4960, 'regionable_type'=>'districts']); //Insana
            DB::table('regionables')->insert(['region_id'=>4538, 'regionable_id'=>4961, 'regionable_type'=>'districts']); //Insana Barat
            DB::table('regionables')->insert(['region_id'=>4538, 'regionable_id'=>4962, 'regionable_type'=>'districts']); //Insana Fafinesu
            DB::table('regionables')->insert(['region_id'=>4538, 'regionable_id'=>4963, 'regionable_type'=>'districts']); //Insana Utara
            DB::table('regionables')->insert(['region_id'=>4538, 'regionable_id'=>4964, 'regionable_type'=>'districts']); //Insana Tengah
                DB::table('regions')->insert(['id'=>4539, 'parent'=>4538, 'code'=>'85671', 'type'=>'village', 'name'=>'Village 85671, Districts 8567, City 856, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58620, 'regionable_type'=>'village']); //Ainiut
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58621, 'regionable_type'=>'village']); //Fatoin
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58622, 'regionable_type'=>'village']); //Keun
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58623, 'regionable_type'=>'village']); //Loeram
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58624, 'regionable_type'=>'village']); //Manunain A
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58625, 'regionable_type'=>'village']); //Manunain B
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58626, 'regionable_type'=>'village']); //Nansean
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58627, 'regionable_type'=>'village']); //Nunmafo
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58628, 'regionable_type'=>'village']); //Oinbit
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58629, 'regionable_type'=>'village']); //Sekon
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58630, 'regionable_type'=>'village']); //Susulaku A
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58631, 'regionable_type'=>'village']); //Susulaku B
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58632, 'regionable_type'=>'village']); //Tapenpah
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58633, 'regionable_type'=>'village']); //Atmen
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58634, 'regionable_type'=>'village']); //Atmen I
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58635, 'regionable_type'=>'village']); //Banae/bannae
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58636, 'regionable_type'=>'village']); //Lapeom
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58637, 'regionable_type'=>'village']); //Letneo
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58638, 'regionable_type'=>'village']); //Subun
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58639, 'regionable_type'=>'village']); //Usapinonot
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58640, 'regionable_type'=>'village']); //Banuan/baunuan
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58641, 'regionable_type'=>'village']); //Fafinesu
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58642, 'regionable_type'=>'village']); //Fafinesu A
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58643, 'regionable_type'=>'village']); //Fafinesu B
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58644, 'regionable_type'=>'village']); //Fafinesu C
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58645, 'regionable_type'=>'village']); //Oenain
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58646, 'regionable_type'=>'village']); //Fatumtasa
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58647, 'regionable_type'=>'village']); //Humusu A
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58648, 'regionable_type'=>'village']); //Humusu B
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58649, 'regionable_type'=>'village']); //Humusu C
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58650, 'regionable_type'=>'village']); //Oesoko
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58651, 'regionable_type'=>'village']); //Lanaus
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58652, 'regionable_type'=>'village']); //Letmafo
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58653, 'regionable_type'=>'village']); //Maubesi
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58654, 'regionable_type'=>'village']); //Sone
                DB::table('regionables')->insert(['region_id'=>4539, 'regionable_id'=>58655, 'regionable_type'=>'village']); //Tainsala
            DB::table('regions')->insert(['id'=>4540, 'parent'=>4531, 'code'=>'8568', 'type'=>'districts', 'name'=>'Districts 8568, City 856, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4540, 'regionable_id'=>4965, 'regionable_type'=>'districts']); //Biboki Moenleu
            DB::table('regionables')->insert(['region_id'=>4540, 'regionable_id'=>4966, 'regionable_type'=>'districts']); //Biboki Tan Pah
            DB::table('regionables')->insert(['region_id'=>4540, 'regionable_id'=>4967, 'regionable_type'=>'districts']); //Biboki Selatan
            DB::table('regionables')->insert(['region_id'=>4540, 'regionable_id'=>4968, 'regionable_type'=>'districts']); //Biboki Utara
            DB::table('regionables')->insert(['region_id'=>4540, 'regionable_id'=>4969, 'regionable_type'=>'districts']); //Biboki Feotleu
                DB::table('regions')->insert(['id'=>4541, 'parent'=>4540, 'code'=>'85682', 'type'=>'village', 'name'=>'Village 85682, Districts 8568, City 856, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58675, 'regionable_type'=>'village']); //Biloe
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58676, 'regionable_type'=>'village']); //Boronubaen
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58677, 'regionable_type'=>'village']); //Hauteas
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58678, 'regionable_type'=>'village']); //Lokomea
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58679, 'regionable_type'=>'village']); //Sapaen
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58680, 'regionable_type'=>'village']); //Taunbaen
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58681, 'regionable_type'=>'village']); //Tualene/tualena
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58682, 'regionable_type'=>'village']); //Birunatun
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58683, 'regionable_type'=>'village']); //Kuluan
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58684, 'regionable_type'=>'village']); //Makun
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58685, 'regionable_type'=>'village']); //Manumean
                DB::table('regionables')->insert(['region_id'=>4541, 'regionable_id'=>58686, 'regionable_type'=>'village']); //Naku
        DB::table('regions')->insert(['id'=>4542, 'parent'=>4287, 'code'=>'857', 'type'=>'city', 'name'=>'City 857, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4542, 'regionable_id'=>298, 'regionable_type'=>'city']); //Belu regencies
            DB::table('regions')->insert(['id'=>4543, 'parent'=>4542, 'code'=>'8571', 'type'=>'districts', 'name'=>'Districts 8571, City 857, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4543, 'regionable_id'=>4970, 'regionable_type'=>'districts']); //Atambua Kota
            DB::table('regionables')->insert(['region_id'=>4543, 'regionable_id'=>4971, 'regionable_type'=>'districts']); //Tasifeto Timur
            DB::table('regionables')->insert(['region_id'=>4543, 'regionable_id'=>4972, 'regionable_type'=>'districts']); //Atambua Barat
            DB::table('regionables')->insert(['region_id'=>4543, 'regionable_id'=>4973, 'regionable_type'=>'districts']); //Atambua Selatan
            DB::table('regionables')->insert(['region_id'=>4543, 'regionable_id'=>4974, 'regionable_type'=>'districts']); //Laen Manen
                DB::table('regions')->insert(['id'=>4544, 'parent'=>4543, 'code'=>'85718', 'type'=>'village', 'name'=>'Village 85718, Districts 8571, City 857, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58690, 'regionable_type'=>'village']); //Fatubenao
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58706, 'regionable_type'=>'village']); //Beirafu
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58709, 'regionable_type'=>'village']); //Manuaman
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58710, 'regionable_type'=>'village']); //Rinbesi
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58711, 'regionable_type'=>'village']); //Besesmus/bisesmus
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58712, 'regionable_type'=>'village']); //Bonibais
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58713, 'regionable_type'=>'village']); //Kapitanmeo
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58714, 'regionable_type'=>'village']); //Meotroy
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58715, 'regionable_type'=>'village']); //Naekekusa
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58716, 'regionable_type'=>'village']); //Oenaek
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58717, 'regionable_type'=>'village']); //Tesa
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58718, 'regionable_type'=>'village']); //Tniumanu
                DB::table('regionables')->insert(['region_id'=>4544, 'regionable_id'=>58719, 'regionable_type'=>'village']); //Uabau
            DB::table('regions')->insert(['id'=>4545, 'parent'=>4542, 'code'=>'8575', 'type'=>'districts', 'name'=>'Districts 8575, City 857, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4545, 'regionable_id'=>4975, 'regionable_type'=>'districts']); //Tasifeto Barat
            DB::table('regionables')->insert(['region_id'=>4545, 'regionable_id'=>4976, 'regionable_type'=>'districts']); //Kakuluk Mesak
            DB::table('regionables')->insert(['region_id'=>4545, 'regionable_id'=>4977, 'regionable_type'=>'districts']); //Nanaet Duabesi
                DB::table('regions')->insert(['id'=>4546, 'parent'=>4545, 'code'=>'85752', 'type'=>'village', 'name'=>'Village 85752, Districts 8575, City 857, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58720, 'regionable_type'=>'village']); //Bakustulama
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58721, 'regionable_type'=>'village']); //Derok Faturene
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58722, 'regionable_type'=>'village']); //Lawalutolus
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58723, 'regionable_type'=>'village']); //Lookeu
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58724, 'regionable_type'=>'village']); //Naekasa
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58725, 'regionable_type'=>'village']); //Naitimu
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58726, 'regionable_type'=>'village']); //Rinbesihat
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58727, 'regionable_type'=>'village']); //Tukuneno
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58728, 'regionable_type'=>'village']); //Dua Laus
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58729, 'regionable_type'=>'village']); //Fatuketi
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58730, 'regionable_type'=>'village']); //Jenilu
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58731, 'regionable_type'=>'village']); //Kabuna
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58732, 'regionable_type'=>'village']); //Kenebibi
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58733, 'regionable_type'=>'village']); //Leosama
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58734, 'regionable_type'=>'village']); //Dubesi
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58735, 'regionable_type'=>'village']); //Fohoeka
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58736, 'regionable_type'=>'village']); //Nanaenoe
                DB::table('regionables')->insert(['region_id'=>4546, 'regionable_id'=>58737, 'regionable_type'=>'village']); //Nanaet
            DB::table('regions')->insert(['id'=>4547, 'parent'=>4542, 'code'=>'8576', 'type'=>'districts', 'name'=>'Districts 8576, City 857, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4978, 'regionable_type'=>'districts']); //Malaka Timur
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4979, 'regionable_type'=>'districts']); //Raimanuk
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4980, 'regionable_type'=>'districts']); //Malaka Tengah
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4981, 'regionable_type'=>'districts']); //Wewiku
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4982, 'regionable_type'=>'districts']); //Weliman
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4983, 'regionable_type'=>'districts']); //Malaka Barat
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4984, 'regionable_type'=>'districts']); //Rinhat
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4985, 'regionable_type'=>'districts']); //Sasitamean
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4986, 'regionable_type'=>'districts']); //Botin Leo Bele
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4987, 'regionable_type'=>'districts']); //Io Kufeu
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4988, 'regionable_type'=>'districts']); //Kobalima Timur
            DB::table('regionables')->insert(['region_id'=>4547, 'regionable_id'=>4989, 'regionable_type'=>'districts']); //Kobalima
                DB::table('regions')->insert(['id'=>4548, 'parent'=>4547, 'code'=>'85766', 'type'=>'village', 'name'=>'Village 85766, Districts 8576, City 857, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58853, 'regionable_type'=>'village']); //Alas
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58854, 'regionable_type'=>'village']); //Alas Selatan
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58855, 'regionable_type'=>'village']); //Alas Utara
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58856, 'regionable_type'=>'village']); //Kotabiru
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58857, 'regionable_type'=>'village']); //Babulu
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58858, 'regionable_type'=>'village']); //Babulu Selatan
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58859, 'regionable_type'=>'village']); //Lakekun
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58860, 'regionable_type'=>'village']); //Lakekun Barat
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58861, 'regionable_type'=>'village']); //Lakekun Utara
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58862, 'regionable_type'=>'village']); //Litamali
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58863, 'regionable_type'=>'village']); //Rainawe
                DB::table('regionables')->insert(['region_id'=>4548, 'regionable_id'=>58864, 'regionable_type'=>'village']); //Sisi
            DB::table('regions')->insert(['id'=>4549, 'parent'=>4542, 'code'=>'8577', 'type'=>'districts', 'name'=>'Districts 8577, City 857, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4549, 'regionable_id'=>4971, 'regionable_type'=>'districts']); //Tasifeto Timur
            DB::table('regionables')->insert(['region_id'=>4549, 'regionable_id'=>4990, 'regionable_type'=>'districts']); //Lasiolat
            DB::table('regionables')->insert(['region_id'=>4549, 'regionable_id'=>4991, 'regionable_type'=>'districts']); //Lamaknen Selatan
            DB::table('regionables')->insert(['region_id'=>4549, 'regionable_id'=>4992, 'regionable_type'=>'districts']); //Lamaknen
            DB::table('regionables')->insert(['region_id'=>4549, 'regionable_id'=>4993, 'regionable_type'=>'districts']); //Raihat
                DB::table('regions')->insert(['id'=>4550, 'parent'=>4549, 'code'=>'85773', 'type'=>'village', 'name'=>'Village 85773, Districts 8577, City 857, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4550, 'regionable_id'=>58889, 'regionable_type'=>'village']); //Aitoun
                DB::table('regionables')->insert(['region_id'=>4550, 'regionable_id'=>58890, 'regionable_type'=>'village']); //Asumanu
                DB::table('regionables')->insert(['region_id'=>4550, 'regionable_id'=>58891, 'regionable_type'=>'village']); //Maumutin
                DB::table('regionables')->insert(['region_id'=>4550, 'regionable_id'=>58892, 'regionable_type'=>'village']); //Raifatus
                DB::table('regionables')->insert(['region_id'=>4550, 'regionable_id'=>58893, 'regionable_type'=>'village']); //Tohe
                DB::table('regionables')->insert(['region_id'=>4550, 'regionable_id'=>58894, 'regionable_type'=>'village']); //Toheleten
        DB::table('regions')->insert(['id'=>4551, 'parent'=>4287, 'code'=>'858', 'type'=>'city', 'name'=>'City 858, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4551, 'regionable_id'=>299, 'regionable_type'=>'city']); //Alor regencies
            DB::table('regions')->insert(['id'=>4552, 'parent'=>4551, 'code'=>'8581', 'type'=>'districts', 'name'=>'Districts 8581, City 858, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4552, 'regionable_id'=>4994, 'regionable_type'=>'districts']); //Teluk Mutiara
            DB::table('regionables')->insert(['region_id'=>4552, 'regionable_id'=>4995, 'regionable_type'=>'districts']); //Kabola
                DB::table('regions')->insert(['id'=>4553, 'parent'=>4552, 'code'=>'85819', 'type'=>'village', 'name'=>'Village 85819, Districts 8581, City 858, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58902, 'regionable_type'=>'village']); //Adang Buom
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58903, 'regionable_type'=>'village']); //Air Kenari
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58904, 'regionable_type'=>'village']); //Fanating
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58905, 'regionable_type'=>'village']); //Lendola
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58906, 'regionable_type'=>'village']); //Motongbang
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58907, 'regionable_type'=>'village']); //Mutiara
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58908, 'regionable_type'=>'village']); //Nusa Kenari
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58909, 'regionable_type'=>'village']); //Teluk Kenari
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58910, 'regionable_type'=>'village']); //Wetabua
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58911, 'regionable_type'=>'village']); //Kabola
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58912, 'regionable_type'=>'village']); //Kopidil
                DB::table('regionables')->insert(['region_id'=>4553, 'regionable_id'=>58913, 'regionable_type'=>'village']); //Pante Deera
            DB::table('regions')->insert(['id'=>4554, 'parent'=>4551, 'code'=>'8585', 'type'=>'districts', 'name'=>'Districts 8585, City 858, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4554, 'regionable_id'=>4995, 'regionable_type'=>'districts']); //Kabola
            DB::table('regionables')->insert(['region_id'=>4554, 'regionable_id'=>4996, 'regionable_type'=>'districts']); //Alor Barat Laut
            DB::table('regionables')->insert(['region_id'=>4554, 'regionable_id'=>4997, 'regionable_type'=>'districts']); //Pulau Pura
                DB::table('regions')->insert(['id'=>4555, 'parent'=>4554, 'code'=>'85851', 'type'=>'village', 'name'=>'Village 85851, Districts 8585, City 858, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58914, 'regionable_type'=>'village']); //Alila Timur
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58915, 'regionable_type'=>'village']); //Lawahing
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58916, 'regionable_type'=>'village']); //Adang
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58917, 'regionable_type'=>'village']); //Aimoli
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58918, 'regionable_type'=>'village']); //Alaang
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58919, 'regionable_type'=>'village']); //Alila
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58920, 'regionable_type'=>'village']); //Alila Selatan
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58921, 'regionable_type'=>'village']); //Alor Besar
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58922, 'regionable_type'=>'village']); //Alor Kecil
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58923, 'regionable_type'=>'village']); //Ampera
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58924, 'regionable_type'=>'village']); //Bampalola
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58925, 'regionable_type'=>'village']); //Dulolong
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58926, 'regionable_type'=>'village']); //Dulolong Barat
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58927, 'regionable_type'=>'village']); //Hulnani
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58928, 'regionable_type'=>'village']); //Lefokisu
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58929, 'regionable_type'=>'village']); //Lewalu
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58930, 'regionable_type'=>'village']); //O A Mate
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58931, 'regionable_type'=>'village']); //Otvai
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58932, 'regionable_type'=>'village']); //Pulau Buaya
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58933, 'regionable_type'=>'village']); //Ternate
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58934, 'regionable_type'=>'village']); //Ternate Selatan
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58935, 'regionable_type'=>'village']); //Maru
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58936, 'regionable_type'=>'village']); //Pura
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58937, 'regionable_type'=>'village']); //Pura Barat
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58938, 'regionable_type'=>'village']); //Pura Selatan
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58939, 'regionable_type'=>'village']); //Pura Timur
                DB::table('regionables')->insert(['region_id'=>4555, 'regionable_id'=>58940, 'regionable_type'=>'village']); //Pura Utara
            DB::table('regions')->insert(['id'=>4556, 'parent'=>4551, 'code'=>'8586', 'type'=>'districts', 'name'=>'Districts 8586, City 858, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4556, 'regionable_id'=>4998, 'regionable_type'=>'districts']); //Alor Barat Daya
            DB::table('regionables')->insert(['region_id'=>4556, 'regionable_id'=>4999, 'regionable_type'=>'districts']); //Mataru
                DB::table('regions')->insert(['id'=>4557, 'parent'=>4556, 'code'=>'85861', 'type'=>'village', 'name'=>'Village 85861, Districts 8586, City 858, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58941, 'regionable_type'=>'village']); //Halerman
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58942, 'regionable_type'=>'village']); //Kafelulang
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58943, 'regionable_type'=>'village']); //Kuifana
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58944, 'regionable_type'=>'village']); //Manatang
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58945, 'regionable_type'=>'village']); //Margeta
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58946, 'regionable_type'=>'village']); //Moramam
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58947, 'regionable_type'=>'village']); //Morba
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58948, 'regionable_type'=>'village']); //Moru
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58949, 'regionable_type'=>'village']); //Orgen
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58950, 'regionable_type'=>'village']); //Pailelang
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58951, 'regionable_type'=>'village']); //Pintu Mas
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58952, 'regionable_type'=>'village']); //Probur
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58953, 'regionable_type'=>'village']); //Probur Utara
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58954, 'regionable_type'=>'village']); //Tribur
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58955, 'regionable_type'=>'village']); //Wakapsir
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58956, 'regionable_type'=>'village']); //Wakapsir Timur
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58957, 'regionable_type'=>'village']); //Wolwal
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58958, 'regionable_type'=>'village']); //Wolwal Barat
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58959, 'regionable_type'=>'village']); //Wolwal Selatan
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58960, 'regionable_type'=>'village']); //Wolwal Tengah
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58961, 'regionable_type'=>'village']); //Kamaifui
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58962, 'regionable_type'=>'village']); //Lakatuli
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58963, 'regionable_type'=>'village']); //Mataru Barat
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58964, 'regionable_type'=>'village']); //Mataru Selatan
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58965, 'regionable_type'=>'village']); //Mataru Timur
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58966, 'regionable_type'=>'village']); //Mataru Utara
                DB::table('regionables')->insert(['region_id'=>4557, 'regionable_id'=>58967, 'regionable_type'=>'village']); //Taman Mataru
            DB::table('regions')->insert(['id'=>4558, 'parent'=>4551, 'code'=>'8587', 'type'=>'districts', 'name'=>'Districts 8587, City 858, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4558, 'regionable_id'=>5000, 'regionable_type'=>'districts']); //Alor Tengah Utara
            DB::table('regionables')->insert(['region_id'=>4558, 'regionable_id'=>5001, 'regionable_type'=>'districts']); //Alor Selatan
            DB::table('regionables')->insert(['region_id'=>4558, 'regionable_id'=>5002, 'regionable_type'=>'districts']); //Lembur
            DB::table('regionables')->insert(['region_id'=>4558, 'regionable_id'=>5003, 'regionable_type'=>'districts']); //Alor Timur Laut
            DB::table('regionables')->insert(['region_id'=>4558, 'regionable_id'=>5004, 'regionable_type'=>'districts']); //Alor Timur
            DB::table('regionables')->insert(['region_id'=>4558, 'regionable_id'=>5005, 'regionable_type'=>'districts']); //Pureman
                DB::table('regions')->insert(['id'=>4559, 'parent'=>4558, 'code'=>'85872', 'type'=>'village', 'name'=>'Village 85872, Districts 8587, City 858, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59002, 'regionable_type'=>'village']); //Air Mancur
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59003, 'regionable_type'=>'village']); //Kamot
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59004, 'regionable_type'=>'village']); //Kenarimbala
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59005, 'regionable_type'=>'village']); //Lippang
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59006, 'regionable_type'=>'village']); //Nailang
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59007, 'regionable_type'=>'village']); //Pido
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59008, 'regionable_type'=>'village']); //Taramana
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59009, 'regionable_type'=>'village']); //Waisika
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59010, 'regionable_type'=>'village']); //Belemana
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59011, 'regionable_type'=>'village']); //Elok
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59012, 'regionable_type'=>'village']); //Kolana Selatan
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59013, 'regionable_type'=>'village']); //Kolana Utara
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59014, 'regionable_type'=>'village']); //Maritaing
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59015, 'regionable_type'=>'village']); //Maukuru
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59016, 'regionable_type'=>'village']); //Mausamang
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59017, 'regionable_type'=>'village']); //Padang Panjang
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59018, 'regionable_type'=>'village']); //Tanglapui
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59019, 'regionable_type'=>'village']); //Tanglapui Timur
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59020, 'regionable_type'=>'village']); //Kailesa
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59021, 'regionable_type'=>'village']); //Langkuru
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59022, 'regionable_type'=>'village']); //Langkuru Utara
                DB::table('regionables')->insert(['region_id'=>4559, 'regionable_id'=>59023, 'regionable_type'=>'village']); //Purnama
            DB::table('regions')->insert(['id'=>4560, 'parent'=>4551, 'code'=>'8588', 'type'=>'districts', 'name'=>'Districts 8588, City 858, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4560, 'regionable_id'=>5006, 'regionable_type'=>'districts']); //Pantar Barat Laut
            DB::table('regionables')->insert(['region_id'=>4560, 'regionable_id'=>5007, 'regionable_type'=>'districts']); //Pantar Tengah
            DB::table('regionables')->insert(['region_id'=>4560, 'regionable_id'=>5008, 'regionable_type'=>'districts']); //Pantar
            DB::table('regionables')->insert(['region_id'=>4560, 'regionable_id'=>5009, 'regionable_type'=>'districts']); //Pantar Barat
            DB::table('regionables')->insert(['region_id'=>4560, 'regionable_id'=>5010, 'regionable_type'=>'districts']); //Pantar Timur
                DB::table('regions')->insert(['id'=>4561, 'parent'=>4560, 'code'=>'85881', 'type'=>'village', 'name'=>'Village 85881, Districts 8588, City 858, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59024, 'regionable_type'=>'village']); //Allumang
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59025, 'regionable_type'=>'village']); //Beangonong
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59026, 'regionable_type'=>'village']); //Kalondama Barat
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59027, 'regionable_type'=>'village']); //Kalondama Tengah
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59028, 'regionable_type'=>'village']); //Kayang
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59029, 'regionable_type'=>'village']); //Lamma
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59030, 'regionable_type'=>'village']); //Marisa
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59031, 'regionable_type'=>'village']); //Aramaba
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59032, 'regionable_type'=>'village']); //Bagang
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59033, 'regionable_type'=>'village']); //Delaki
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59034, 'regionable_type'=>'village']); //Eka Jaya
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59035, 'regionable_type'=>'village']); //Mauta
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59036, 'regionable_type'=>'village']); //Muriabang
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59037, 'regionable_type'=>'village']); //Tamak
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59038, 'regionable_type'=>'village']); //Toang
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59039, 'regionable_type'=>'village']); //Tubbe (tube)
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59040, 'regionable_type'=>'village']); //Tude
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59041, 'regionable_type'=>'village']); //Bana
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59042, 'regionable_type'=>'village']); //Bandar
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59043, 'regionable_type'=>'village']); //Baolang
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59044, 'regionable_type'=>'village']); //Bouweli
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59045, 'regionable_type'=>'village']); //Bukit Mas
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59046, 'regionable_type'=>'village']); //Helandohi
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59047, 'regionable_type'=>'village']); //Kabir
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59048, 'regionable_type'=>'village']); //Madar
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59049, 'regionable_type'=>'village']); //Munaseli
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59050, 'regionable_type'=>'village']); //Pandai
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59051, 'regionable_type'=>'village']); //Wailawar
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59052, 'regionable_type'=>'village']); //Baraler
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59053, 'regionable_type'=>'village']); //Baranusa
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59054, 'regionable_type'=>'village']); //Blang Merang
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59055, 'regionable_type'=>'village']); //Illu
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59056, 'regionable_type'=>'village']); //Kalondama
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59057, 'regionable_type'=>'village']); //Leer
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59058, 'regionable_type'=>'village']); //Piringsina
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59059, 'regionable_type'=>'village']); //Batu
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59060, 'regionable_type'=>'village']); //Bunga Bali
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59061, 'regionable_type'=>'village']); //Kaera
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59062, 'regionable_type'=>'village']); //Kaleb
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59063, 'regionable_type'=>'village']); //Lalafang
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59064, 'regionable_type'=>'village']); //Lekom
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59065, 'regionable_type'=>'village']); //Mawar
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59066, 'regionable_type'=>'village']); //Merdeka
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59067, 'regionable_type'=>'village']); //Nule
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59068, 'regionable_type'=>'village']); //Ombay
                DB::table('regionables')->insert(['region_id'=>4561, 'regionable_id'=>59069, 'regionable_type'=>'village']); //Treweng/tereweng
        DB::table('regions')->insert(['id'=>4562, 'parent'=>4287, 'code'=>'859', 'type'=>'city', 'name'=>'City 859, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4562, 'regionable_id'=>300, 'regionable_type'=>'city']); //Rote Ndao regencies
            DB::table('regions')->insert(['id'=>4563, 'parent'=>4562, 'code'=>'8591', 'type'=>'districts', 'name'=>'Districts 8591, City 859, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4563, 'regionable_id'=>5011, 'regionable_type'=>'districts']); //Lobalain
                DB::table('regions')->insert(['id'=>4564, 'parent'=>4563, 'code'=>'85912', 'type'=>'village', 'name'=>'Village 85912, Districts 8591, City 859, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4564, 'regionable_id'=>59070, 'regionable_type'=>'village']); //Baadale
                DB::table('regions')->insert(['id'=>4565, 'parent'=>4563, 'code'=>'85913', 'type'=>'village', 'name'=>'Village 85913, Districts 8591, City 859, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4565, 'regionable_id'=>59071, 'regionable_type'=>'village']); //Tuanatuk
                DB::table('regions')->insert(['id'=>4566, 'parent'=>4563, 'code'=>'85914', 'type'=>'village', 'name'=>'Village 85914, Districts 8591, City 859, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4566, 'regionable_id'=>59072, 'regionable_type'=>'village']); //Mokdale
                DB::table('regions')->insert(['id'=>4567, 'parent'=>4563, 'code'=>'85916', 'type'=>'village', 'name'=>'Village 85916, Districts 8591, City 859, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4567, 'regionable_id'=>59073, 'regionable_type'=>'village']); //Sanggaoen
                DB::table('regions')->insert(['id'=>4568, 'parent'=>4563, 'code'=>'85917', 'type'=>'village', 'name'=>'Village 85917, Districts 8591, City 859, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4568, 'regionable_id'=>59074, 'regionable_type'=>'village']); //Oelunggu
                DB::table('regions')->insert(['id'=>4569, 'parent'=>4563, 'code'=>'85918', 'type'=>'village', 'name'=>'Village 85918, Districts 8591, City 859, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59075, 'regionable_type'=>'village']); //Bebalain
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59076, 'regionable_type'=>'village']); //Helebeik
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59077, 'regionable_type'=>'village']); //Holoama
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59078, 'regionable_type'=>'village']); //Kolobolon
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59079, 'regionable_type'=>'village']); //Kuli
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59080, 'regionable_type'=>'village']); //Metina
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59081, 'regionable_type'=>'village']); //Namodale
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59082, 'regionable_type'=>'village']); //Oematamboli
                DB::table('regionables')->insert(['region_id'=>4569, 'regionable_id'=>59083, 'regionable_type'=>'village']); //Suelain
            DB::table('regions')->insert(['id'=>4570, 'parent'=>4562, 'code'=>'8597', 'type'=>'districts', 'name'=>'Districts 8597, City 859, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4570, 'regionable_id'=>5012, 'regionable_type'=>'districts']); //Rote Selatan
            DB::table('regionables')->insert(['region_id'=>4570, 'regionable_id'=>5013, 'regionable_type'=>'districts']); //Rote Tengah
            DB::table('regionables')->insert(['region_id'=>4570, 'regionable_id'=>5014, 'regionable_type'=>'districts']); //Pantai Baru
            DB::table('regionables')->insert(['region_id'=>4570, 'regionable_id'=>5015, 'regionable_type'=>'districts']); //Landu Leko
            DB::table('regionables')->insert(['region_id'=>4570, 'regionable_id'=>5016, 'regionable_type'=>'districts']); //Rote Timur
                DB::table('regions')->insert(['id'=>4571, 'parent'=>4570, 'code'=>'85974', 'type'=>'village', 'name'=>'Village 85974, Districts 8597, City 859, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59107, 'regionable_type'=>'village']); //Bolatena
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59108, 'regionable_type'=>'village']); //Daeurendale
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59109, 'regionable_type'=>'village']); //Daiama
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59110, 'regionable_type'=>'village']); //Lifuleo
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59111, 'regionable_type'=>'village']); //Pukuafu
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59112, 'regionable_type'=>'village']); //Sotimori
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59113, 'regionable_type'=>'village']); //Faifua
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59114, 'regionable_type'=>'village']); //Hundi Hopo
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59115, 'regionable_type'=>'village']); //Lakamola
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59116, 'regionable_type'=>'village']); //Londalusi
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59117, 'regionable_type'=>'village']); //Matasio
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59118, 'regionable_type'=>'village']); //Mukekuku
                DB::table('regionables')->insert(['region_id'=>4571, 'regionable_id'=>59119, 'regionable_type'=>'village']); //Serubeba
            DB::table('regions')->insert(['id'=>4572, 'parent'=>4562, 'code'=>'8598', 'type'=>'districts', 'name'=>'Districts 8598, City 859, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4572, 'regionable_id'=>5017, 'regionable_type'=>'districts']); //Rote Barat Laut
            DB::table('regionables')->insert(['region_id'=>4572, 'regionable_id'=>5018, 'regionable_type'=>'districts']); //Rote Barat
            DB::table('regionables')->insert(['region_id'=>4572, 'regionable_id'=>5019, 'regionable_type'=>'districts']); //Rote Barat Daya
            DB::table('regionables')->insert(['region_id'=>4572, 'regionable_id'=>5020, 'regionable_type'=>'districts']); //Ndao Nuse
                DB::table('regions')->insert(['id'=>4573, 'parent'=>4572, 'code'=>'85983', 'type'=>'village', 'name'=>'Village 85983, Districts 8598, City 859, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4573, 'regionable_id'=>59154, 'regionable_type'=>'village']); //Anarae
                DB::table('regionables')->insert(['region_id'=>4573, 'regionable_id'=>59155, 'regionable_type'=>'village']); //Mbali Lendeiki
                DB::table('regionables')->insert(['region_id'=>4573, 'regionable_id'=>59156, 'regionable_type'=>'village']); //Mbiu Lombo
                DB::table('regionables')->insert(['region_id'=>4573, 'regionable_id'=>59157, 'regionable_type'=>'village']); //Ndaonuse
                DB::table('regionables')->insert(['region_id'=>4573, 'regionable_id'=>59158, 'regionable_type'=>'village']); //Nuse
        DB::table('regions')->insert(['id'=>4574, 'parent'=>4287, 'code'=>'861', 'type'=>'city', 'name'=>'City 861, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4574, 'regionable_id'=>301, 'regionable_type'=>'city']); //Sikka regencies
        DB::table('regionables')->insert(['region_id'=>4574, 'regionable_id'=>302, 'regionable_type'=>'city']); //Ende regencies
            DB::table('regions')->insert(['id'=>4575, 'parent'=>4574, 'code'=>'8611', 'type'=>'districts', 'name'=>'Districts 8611, City 861, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4575, 'regionable_id'=>5021, 'regionable_type'=>'districts']); //Alok Timur
            DB::table('regionables')->insert(['region_id'=>4575, 'regionable_id'=>5022, 'regionable_type'=>'districts']); //Palue
            DB::table('regionables')->insert(['region_id'=>4575, 'regionable_id'=>5023, 'regionable_type'=>'districts']); //Alok
            DB::table('regionables')->insert(['region_id'=>4575, 'regionable_id'=>5024, 'regionable_type'=>'districts']); //Mego
            DB::table('regionables')->insert(['region_id'=>4575, 'regionable_id'=>5025, 'regionable_type'=>'districts']); //Alok Barat
            DB::table('regionables')->insert(['region_id'=>4575, 'regionable_id'=>5026, 'regionable_type'=>'districts']); //Koting
            DB::table('regionables')->insert(['region_id'=>4575, 'regionable_id'=>5027, 'regionable_type'=>'districts']); //Nelle (maumerei)
            DB::table('regionables')->insert(['region_id'=>4575, 'regionable_id'=>5042, 'regionable_type'=>'districts']); //Kotabaru
                DB::table('regions')->insert(['id'=>4576, 'parent'=>4575, 'code'=>'86111', 'type'=>'village', 'name'=>'Village 86111, Districts 8611, City 861, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59159, 'regionable_type'=>'village']); //Beru
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59160, 'regionable_type'=>'village']); //Wairotang
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59169, 'regionable_type'=>'village']); //Kesokoja
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59170, 'regionable_type'=>'village']); //Ladolaka
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59171, 'regionable_type'=>'village']); //Lidi
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59172, 'regionable_type'=>'village']); //Maluriwu
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59173, 'regionable_type'=>'village']); //Nitunglea
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59174, 'regionable_type'=>'village']); //Reruwairere
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59175, 'regionable_type'=>'village']); //Rokirole
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59176, 'regionable_type'=>'village']); //Tuanggeo
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59319, 'regionable_type'=>'village']); //Hangalande
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59320, 'regionable_type'=>'village']); //Kotabaru
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59321, 'regionable_type'=>'village']); //Liselande
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59322, 'regionable_type'=>'village']); //Loboniki
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59323, 'regionable_type'=>'village']); //Ndondo
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59324, 'regionable_type'=>'village']); //Niopanda
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59325, 'regionable_type'=>'village']); //Rangalaka
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59326, 'regionable_type'=>'village']); //Tou
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59327, 'regionable_type'=>'village']); //Tou Barat
                DB::table('regionables')->insert(['region_id'=>4576, 'regionable_id'=>59328, 'regionable_type'=>'village']); //Tou Timur
        DB::table('regions')->insert(['id'=>4577, 'parent'=>4287, 'code'=>'862', 'type'=>'city', 'name'=>'City 862, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4577, 'regionable_id'=>301, 'regionable_type'=>'city']); //Sikka regencies
        DB::table('regionables')->insert(['region_id'=>4577, 'regionable_id'=>303, 'regionable_type'=>'city']); //Flores Timur regencies
            DB::table('regions')->insert(['id'=>4578, 'parent'=>4577, 'code'=>'8621', 'type'=>'districts', 'name'=>'Districts 8621, City 862, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4578, 'regionable_id'=>5021, 'regionable_type'=>'districts']); //Alok Timur
            DB::table('regionables')->insert(['region_id'=>4578, 'regionable_id'=>5063, 'regionable_type'=>'districts']); //Ile Mandiri
            DB::table('regionables')->insert(['region_id'=>4578, 'regionable_id'=>5064, 'regionable_type'=>'districts']); //Larantuka
            DB::table('regionables')->insert(['region_id'=>4578, 'regionable_id'=>5065, 'regionable_type'=>'districts']); //Demon Pagong
                DB::table('regions')->insert(['id'=>4579, 'parent'=>4578, 'code'=>'86219', 'type'=>'village', 'name'=>'Village 86219, Districts 8621, City 862, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59608, 'regionable_type'=>'village']); //Amagarapati
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59609, 'regionable_type'=>'village']); //Lamawalang
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59610, 'regionable_type'=>'village']); //Mokantarak
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59611, 'regionable_type'=>'village']); //Pohon Bao
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59612, 'regionable_type'=>'village']); //Puken Tobi Wangi Bao
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59613, 'regionable_type'=>'village']); //Sarotari
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59614, 'regionable_type'=>'village']); //Sarotari Tengah
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59615, 'regionable_type'=>'village']); //Sarotari Timur
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59616, 'regionable_type'=>'village']); //Waihali
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59617, 'regionable_type'=>'village']); //Weri
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59618, 'regionable_type'=>'village']); //Bama
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59619, 'regionable_type'=>'village']); //Blepanawa
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59620, 'regionable_type'=>'village']); //Kawalelo
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59621, 'regionable_type'=>'village']); //Lamika
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59622, 'regionable_type'=>'village']); //Lewokluok
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59623, 'regionable_type'=>'village']); //Lewomuda
                DB::table('regionables')->insert(['region_id'=>4579, 'regionable_id'=>59624, 'regionable_type'=>'village']); //Watotika Ile
            DB::table('regions')->insert(['id'=>4580, 'parent'=>4577, 'code'=>'8625', 'type'=>'districts', 'name'=>'Districts 8625, City 862, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4580, 'regionable_id'=>5066, 'regionable_type'=>'districts']); //Tanjung Bunga
            DB::table('regionables')->insert(['region_id'=>4580, 'regionable_id'=>5067, 'regionable_type'=>'districts']); //Lewolema
            DB::table('regionables')->insert(['region_id'=>4580, 'regionable_id'=>5068, 'regionable_type'=>'districts']); //Titehena
            DB::table('regionables')->insert(['region_id'=>4580, 'regionable_id'=>5069, 'regionable_type'=>'districts']); //Ile Boleng
            DB::table('regionables')->insert(['region_id'=>4580, 'regionable_id'=>5070, 'regionable_type'=>'districts']); //Wulanggitang
            DB::table('regionables')->insert(['region_id'=>4580, 'regionable_id'=>5071, 'regionable_type'=>'districts']); //Ile Bura
                DB::table('regions')->insert(['id'=>4581, 'parent'=>4580, 'code'=>'86253', 'type'=>'village', 'name'=>'Village 86253, Districts 8625, City 862, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59648, 'regionable_type'=>'village']); //Adabang
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59649, 'regionable_type'=>'village']); //Bokang Wolomatang
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59650, 'regionable_type'=>'village']); //Duli Jaya
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59651, 'regionable_type'=>'village']); //Dun Tana Lewoingu
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59652, 'regionable_type'=>'village']); //Ile Gerong
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59653, 'regionable_type'=>'village']); //Kobasoma
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59654, 'regionable_type'=>'village']); //Konga
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59655, 'regionable_type'=>'village']); //Leraboleng
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59656, 'regionable_type'=>'village']); //Lewoingu
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59657, 'regionable_type'=>'village']); //Lewolaga
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59658, 'regionable_type'=>'village']); //Serinuho
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59659, 'regionable_type'=>'village']); //Tenawahang
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59660, 'regionable_type'=>'village']); //Tuakepa
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59661, 'regionable_type'=>'village']); //Watowara
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59662, 'regionable_type'=>'village']); //Bayuntaa
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59663, 'regionable_type'=>'village']); //Bedalewun
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59664, 'regionable_type'=>'village']); //Boleng
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59665, 'regionable_type'=>'village']); //Bungalawan
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59666, 'regionable_type'=>'village']); //Dokeng
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59667, 'regionable_type'=>'village']); //Duablolong
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59668, 'regionable_type'=>'village']); //Harubala
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59669, 'regionable_type'=>'village']); //Helanlangowuyo
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59670, 'regionable_type'=>'village']); //Lamabayung
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59671, 'regionable_type'=>'village']); //Lamawolo
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59672, 'regionable_type'=>'village']); //Lebanuba
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59673, 'regionable_type'=>'village']); //Lewat
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59674, 'regionable_type'=>'village']); //Lewo Keleng
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59675, 'regionable_type'=>'village']); //Lewopao
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59676, 'regionable_type'=>'village']); //Nele Lamawangi
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59677, 'regionable_type'=>'village']); //Neleblolong
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59678, 'regionable_type'=>'village']); //Nelelamadiken
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59679, 'regionable_type'=>'village']); //Nelelamawangi Dua
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59680, 'regionable_type'=>'village']); //Nelerereng
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59681, 'regionable_type'=>'village']); //Nobo
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59682, 'regionable_type'=>'village']); //Riawale/rianwale
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59683, 'regionable_type'=>'village']); //Bayuntaa
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59684, 'regionable_type'=>'village']); //Boru
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59685, 'regionable_type'=>'village']); //Boru Kedang
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59686, 'regionable_type'=>'village']); //Dokeng
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59687, 'regionable_type'=>'village']); //Hewa
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59688, 'regionable_type'=>'village']); //Hokeng Jaya
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59689, 'regionable_type'=>'village']); //Klatanlo
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59690, 'regionable_type'=>'village']); //Lewat
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59691, 'regionable_type'=>'village']); //Nawokote
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59692, 'regionable_type'=>'village']); //Nileknoheng
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59693, 'regionable_type'=>'village']); //Nobo
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59694, 'regionable_type'=>'village']); //Ojandetun
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59695, 'regionable_type'=>'village']); //Pantai Oa
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59696, 'regionable_type'=>'village']); //Pululera
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59697, 'regionable_type'=>'village']); //Waiula
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59698, 'regionable_type'=>'village']); //Birawan
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59699, 'regionable_type'=>'village']); //Dulipali
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59700, 'regionable_type'=>'village']); //Lewoawang
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59701, 'regionable_type'=>'village']); //Nobokonga
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59702, 'regionable_type'=>'village']); //Nurri
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59703, 'regionable_type'=>'village']); //Riang Rita
                DB::table('regionables')->insert(['region_id'=>4581, 'regionable_id'=>59704, 'regionable_type'=>'village']); //Riangbura
            DB::table('regions')->insert(['id'=>4582, 'parent'=>4577, 'code'=>'8626', 'type'=>'districts', 'name'=>'Districts 8626, City 862, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4582, 'regionable_id'=>5072, 'regionable_type'=>'districts']); //Wotan Ulumado
            DB::table('regionables')->insert(['region_id'=>4582, 'regionable_id'=>5073, 'regionable_type'=>'districts']); //Adonara Timur
            DB::table('regionables')->insert(['region_id'=>4582, 'regionable_id'=>5074, 'regionable_type'=>'districts']); //Kelubagolit (klubagolit)
            DB::table('regionables')->insert(['region_id'=>4582, 'regionable_id'=>5075, 'regionable_type'=>'districts']); //Adonara
            DB::table('regionables')->insert(['region_id'=>4582, 'regionable_id'=>5076, 'regionable_type'=>'districts']); //Witihama (watihama)
            DB::table('regionables')->insert(['region_id'=>4582, 'regionable_id'=>5077, 'regionable_type'=>'districts']); //Adonara Tengah
            DB::table('regionables')->insert(['region_id'=>4582, 'regionable_id'=>5078, 'regionable_type'=>'districts']); //Adonara Barat
                DB::table('regions')->insert(['id'=>4583, 'parent'=>4582, 'code'=>'86262', 'type'=>'village', 'name'=>'Village 86262, Districts 8626, City 862, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59737, 'regionable_type'=>'village']); //Adobala
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59738, 'regionable_type'=>'village']); //Hinga
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59739, 'regionable_type'=>'village']); //Horinara
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59740, 'regionable_type'=>'village']); //Keluwain
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59741, 'regionable_type'=>'village']); //Lamabunga
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59742, 'regionable_type'=>'village']); //Lamapaha
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59743, 'regionable_type'=>'village']); //Mangaaleng
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59744, 'regionable_type'=>'village']); //Muda
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59745, 'regionable_type'=>'village']); //Nisakarang
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59746, 'regionable_type'=>'village']); //Pepak Kelu
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59747, 'regionable_type'=>'village']); //Redontena
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59748, 'regionable_type'=>'village']); //Sukutokan
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59749, 'regionable_type'=>'village']); //Adonara
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59750, 'regionable_type'=>'village']); //Kolilanang
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59751, 'regionable_type'=>'village']); //Kolimasang
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59752, 'regionable_type'=>'village']); //Kolipetung
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59753, 'regionable_type'=>'village']); //Lamahoda
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59754, 'regionable_type'=>'village']); //Nisanulan
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59755, 'regionable_type'=>'village']); //Sagu
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59756, 'regionable_type'=>'village']); //Tikatukang
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59757, 'regionable_type'=>'village']); //Balaweling
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59758, 'regionable_type'=>'village']); //Balaweling Noten
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59759, 'regionable_type'=>'village']); //Baobage
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59760, 'regionable_type'=>'village']); //Lamablawa
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59761, 'regionable_type'=>'village']); //Lamaleka
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59762, 'regionable_type'=>'village']); //Lewopulo
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59763, 'regionable_type'=>'village']); //Oringbele
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59764, 'regionable_type'=>'village']); //Pledo
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59765, 'regionable_type'=>'village']); //Riangduli
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59766, 'regionable_type'=>'village']); //Sandosi
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59767, 'regionable_type'=>'village']); //Tobitika
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59768, 'regionable_type'=>'village']); //Tuwagoetobi
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59769, 'regionable_type'=>'village']); //Waiwuring
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59770, 'regionable_type'=>'village']); //Watololong
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59771, 'regionable_type'=>'village']); //Watoone
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59772, 'regionable_type'=>'village']); //Weranggere
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59773, 'regionable_type'=>'village']); //Baya
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59774, 'regionable_type'=>'village']); //Bidara
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59775, 'regionable_type'=>'village']); //Hoko Horowura
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59776, 'regionable_type'=>'village']); //Horowura
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59777, 'regionable_type'=>'village']); //Kenotan
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59778, 'regionable_type'=>'village']); //Kokotobo
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59779, 'regionable_type'=>'village']); //Lewobele
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59780, 'regionable_type'=>'village']); //Lewopao
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59781, 'regionable_type'=>'village']); //Lite
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59782, 'regionable_type'=>'village']); //Nubalema
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59783, 'regionable_type'=>'village']); //Nubalema Dua
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59784, 'regionable_type'=>'village']); //Oe Sayang
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59785, 'regionable_type'=>'village']); //Wewit
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59786, 'regionable_type'=>'village']); //Bugalima
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59787, 'regionable_type'=>'village']); //Bukit Seburi I
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59788, 'regionable_type'=>'village']); //Bukit Seburi Ii
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59789, 'regionable_type'=>'village']); //Danibao
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59790, 'regionable_type'=>'village']); //Duanur (duwanur)
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59791, 'regionable_type'=>'village']); //Homa
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59792, 'regionable_type'=>'village']); //Hurung
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59793, 'regionable_type'=>'village']); //Ilepati
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59794, 'regionable_type'=>'village']); //Kima Kamak
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59795, 'regionable_type'=>'village']); //Nimun Dani Bao
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59796, 'regionable_type'=>'village']); //Pajinian
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59797, 'regionable_type'=>'village']); //Riangpadu
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59798, 'regionable_type'=>'village']); //Tonuwotan
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59799, 'regionable_type'=>'village']); //Wai Tukan
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59800, 'regionable_type'=>'village']); //Waiwadan
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59801, 'regionable_type'=>'village']); //Wato Baya
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59802, 'regionable_type'=>'village']); //Wolokibang
                DB::table('regionables')->insert(['region_id'=>4583, 'regionable_id'=>59803, 'regionable_type'=>'village']); //Wureh
            DB::table('regions')->insert(['id'=>4584, 'parent'=>4577, 'code'=>'8627', 'type'=>'districts', 'name'=>'Districts 8627, City 862, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4584, 'regionable_id'=>5079, 'regionable_type'=>'districts']); //Solor Selatan
            DB::table('regionables')->insert(['region_id'=>4584, 'regionable_id'=>5080, 'regionable_type'=>'districts']); //Solor Timur
            DB::table('regionables')->insert(['region_id'=>4584, 'regionable_id'=>5081, 'regionable_type'=>'districts']); //Solor Barat
                DB::table('regions')->insert(['id'=>4585, 'parent'=>4584, 'code'=>'86272', 'type'=>'village', 'name'=>'Village 86272, Districts 8627, City 862, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59806, 'regionable_type'=>'village']); //Kalike / Kelike
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59807, 'regionable_type'=>'village']); //Kalike / Kelike Aimatan
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59808, 'regionable_type'=>'village']); //Kenere
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59809, 'regionable_type'=>'village']); //Lemanu
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59810, 'regionable_type'=>'village']); //Sulengwaseng
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59828, 'regionable_type'=>'village']); //Balaweling I
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59829, 'regionable_type'=>'village']); //Balaweling Ii
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59830, 'regionable_type'=>'village']); //Dani Wato
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59831, 'regionable_type'=>'village']); //Kalelu
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59832, 'regionable_type'=>'village']); //Karawatung
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59833, 'regionable_type'=>'village']); //Lamaole
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59834, 'regionable_type'=>'village']); //Lamawalang (lamawohong)
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59835, 'regionable_type'=>'village']); //Lewonama
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59836, 'regionable_type'=>'village']); //Lewotanah Ole
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59837, 'regionable_type'=>'village']); //Nusadani
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59838, 'regionable_type'=>'village']); //Ongalereng
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59839, 'regionable_type'=>'village']); //Pamakayo
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59840, 'regionable_type'=>'village']); //Ritaebang
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59841, 'regionable_type'=>'village']); //Tanah Lein
                DB::table('regionables')->insert(['region_id'=>4585, 'regionable_id'=>59842, 'regionable_type'=>'village']); //Titehena
        DB::table('regions')->insert(['id'=>4586, 'parent'=>4287, 'code'=>'863', 'type'=>'city', 'name'=>'City 863, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4586, 'regionable_id'=>302, 'regionable_type'=>'city']); //Ende regencies
            DB::table('regions')->insert(['id'=>4587, 'parent'=>4586, 'code'=>'8631', 'type'=>'districts', 'name'=>'Districts 8631, City 863, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4587, 'regionable_id'=>5043, 'regionable_type'=>'districts']); //Ende Tengah
            DB::table('regionables')->insert(['region_id'=>4587, 'regionable_id'=>5044, 'regionable_type'=>'districts']); //Ende Selatan
            DB::table('regionables')->insert(['region_id'=>4587, 'regionable_id'=>5045, 'regionable_type'=>'districts']); //Ende Timur
            DB::table('regionables')->insert(['region_id'=>4587, 'regionable_id'=>5046, 'regionable_type'=>'districts']); //Kelimutu
            DB::table('regionables')->insert(['region_id'=>4587, 'regionable_id'=>5047, 'regionable_type'=>'districts']); //Ende Utara
            DB::table('regionables')->insert(['region_id'=>4587, 'regionable_id'=>5048, 'regionable_type'=>'districts']); //Ende
                DB::table('regions')->insert(['id'=>4588, 'parent'=>4587, 'code'=>'86319', 'type'=>'village', 'name'=>'Village 86319, Districts 8631, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59332, 'regionable_type'=>'village']); //Kelimutu
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59339, 'regionable_type'=>'village']); //Rewarangga
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59350, 'regionable_type'=>'village']); //Borokanda
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59351, 'regionable_type'=>'village']); //Embundoa
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59352, 'regionable_type'=>'village']); //Gheoghoma
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59353, 'regionable_type'=>'village']); //Kota Raja
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59354, 'regionable_type'=>'village']); //Kota Ratu
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59355, 'regionable_type'=>'village']); //Mbomba
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59356, 'regionable_type'=>'village']); //Rateru
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59357, 'regionable_type'=>'village']); //Roworena
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59358, 'regionable_type'=>'village']); //Roworena Barat
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59359, 'regionable_type'=>'village']); //Watusipi
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59360, 'regionable_type'=>'village']); //Embu Ngena
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59361, 'regionable_type'=>'village']); //Emburia
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59362, 'regionable_type'=>'village']); //Embutheru
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59363, 'regionable_type'=>'village']); //Ja Moke Asa
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59364, 'regionable_type'=>'village']); //Jejaraja
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59365, 'regionable_type'=>'village']); //Mbotutenda
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59366, 'regionable_type'=>'village']); //Nakuramba
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59367, 'regionable_type'=>'village']); //Ndetundora I
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59368, 'regionable_type'=>'village']); //Ndetundora Ii
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59369, 'regionable_type'=>'village']); //Ndetundora Iii
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59370, 'regionable_type'=>'village']); //Nemboramba
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59371, 'regionable_type'=>'village']); //Nuaja
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59372, 'regionable_type'=>'village']); //Peozakaramba
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59373, 'regionable_type'=>'village']); //Raburia
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59374, 'regionable_type'=>'village']); //Randorama
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59375, 'regionable_type'=>'village']); //Randotonda
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59376, 'regionable_type'=>'village']); //Ranoramba
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59377, 'regionable_type'=>'village']); //Riaraja
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59378, 'regionable_type'=>'village']); //Ruku Ramba
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59379, 'regionable_type'=>'village']); //Tendambonggi
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59380, 'regionable_type'=>'village']); //Tinabani
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59381, 'regionable_type'=>'village']); //Tomberabu 1
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59382, 'regionable_type'=>'village']); //Tomberabu Ii
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59383, 'regionable_type'=>'village']); //Tonggopajoa
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59384, 'regionable_type'=>'village']); //Uzuramba
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59385, 'regionable_type'=>'village']); //Uzuramba Barat
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59386, 'regionable_type'=>'village']); //Wajakea Jaya
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59387, 'regionable_type'=>'village']); //Wawonato
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59388, 'regionable_type'=>'village']); //Wologai
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59389, 'regionable_type'=>'village']); //Wologai Dua
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59390, 'regionable_type'=>'village']); //Wolokaro
                DB::table('regionables')->insert(['region_id'=>4588, 'regionable_id'=>59391, 'regionable_type'=>'village']); //Worhopapa
            DB::table('regions')->insert(['id'=>4589, 'parent'=>4586, 'code'=>'8635', 'type'=>'districts', 'name'=>'Districts 8635, City 863, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4589, 'regionable_id'=>5049, 'regionable_type'=>'districts']); //Nangapanda
            DB::table('regionables')->insert(['region_id'=>4589, 'regionable_id'=>5050, 'regionable_type'=>'districts']); //Maukaro
            DB::table('regionables')->insert(['region_id'=>4589, 'regionable_id'=>5051, 'regionable_type'=>'districts']); //Wewaria
                DB::table('regions')->insert(['id'=>4590, 'parent'=>4589, 'code'=>'86353', 'type'=>'village', 'name'=>'Village 86353, Districts 8635, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59432, 'regionable_type'=>'village']); //Ae Ndoko
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59433, 'regionable_type'=>'village']); //Aelipo
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59434, 'regionable_type'=>'village']); //Aelipo I
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59435, 'regionable_type'=>'village']); //Aemuri
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59436, 'regionable_type'=>'village']); //Detubela
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59437, 'regionable_type'=>'village']); //Ekoae
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59438, 'regionable_type'=>'village']); //Fataatu
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59439, 'regionable_type'=>'village']); //Fataatu Timur
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59440, 'regionable_type'=>'village']); //Kelitembu
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59441, 'regionable_type'=>'village']); //Mautenda
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59442, 'regionable_type'=>'village']); //Mautenda Barat
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59443, 'regionable_type'=>'village']); //Mbotulaka
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59444, 'regionable_type'=>'village']); //Mukusaki
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59445, 'regionable_type'=>'village']); //Nuangenda
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59446, 'regionable_type'=>'village']); //Numba
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59447, 'regionable_type'=>'village']); //Ratewati
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59448, 'regionable_type'=>'village']); //Ratewati Selatan
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59449, 'regionable_type'=>'village']); //Tanali
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59450, 'regionable_type'=>'village']); //Waka
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59451, 'regionable_type'=>'village']); //Welamosa
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59452, 'regionable_type'=>'village']); //Wewaria
                DB::table('regionables')->insert(['region_id'=>4590, 'regionable_id'=>59453, 'regionable_type'=>'village']); //Wolooja
            DB::table('regions')->insert(['id'=>4591, 'parent'=>4586, 'code'=>'8636', 'type'=>'districts', 'name'=>'Districts 8636, City 863, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4591, 'regionable_id'=>5045, 'regionable_type'=>'districts']); //Ende Timur
            DB::table('regionables')->insert(['region_id'=>4591, 'regionable_id'=>5052, 'regionable_type'=>'districts']); //Lio Timur
            DB::table('regionables')->insert(['region_id'=>4591, 'regionable_id'=>5053, 'regionable_type'=>'districts']); //Ndona Timur
            DB::table('regionables')->insert(['region_id'=>4591, 'regionable_id'=>5054, 'regionable_type'=>'districts']); //Ndona
            DB::table('regionables')->insert(['region_id'=>4591, 'regionable_id'=>5055, 'regionable_type'=>'districts']); //Pulau Ende
                DB::table('regions')->insert(['id'=>4592, 'parent'=>4591, 'code'=>'86362', 'type'=>'village', 'name'=>'Village 86362, Districts 8636, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59488, 'regionable_type'=>'village']); //Aejeti
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59489, 'regionable_type'=>'village']); //Kazo Kapo
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59490, 'regionable_type'=>'village']); //Ndoriwoi
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59491, 'regionable_type'=>'village']); //Paderape
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59492, 'regionable_type'=>'village']); //Puutara
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59493, 'regionable_type'=>'village']); //Redodori
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59494, 'regionable_type'=>'village']); //Rendo Raterua
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59495, 'regionable_type'=>'village']); //Renga Menge
                DB::table('regionables')->insert(['region_id'=>4592, 'regionable_id'=>59496, 'regionable_type'=>'village']); //Rorurangga (rendo Ranga)
            DB::table('regions')->insert(['id'=>4593, 'parent'=>4586, 'code'=>'8637', 'type'=>'districts', 'name'=>'Districts 8637, City 863, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4593, 'regionable_id'=>5056, 'regionable_type'=>'districts']); //Detukeli
            DB::table('regionables')->insert(['region_id'=>4593, 'regionable_id'=>5057, 'regionable_type'=>'districts']); //Detusoko
            DB::table('regionables')->insert(['region_id'=>4593, 'regionable_id'=>5058, 'regionable_type'=>'districts']); //Ndori
            DB::table('regionables')->insert(['region_id'=>4593, 'regionable_id'=>5059, 'regionable_type'=>'districts']); //Wolowaru
            DB::table('regionables')->insert(['region_id'=>4593, 'regionable_id'=>5060, 'regionable_type'=>'districts']); //Lepembusu Kelisoke
                DB::table('regions')->insert(['id'=>4594, 'parent'=>4593, 'code'=>'86374', 'type'=>'village', 'name'=>'Village 86374, Districts 8637, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4594, 'regionable_id'=>59557, 'regionable_type'=>'village']); //Detuara
                DB::table('regionables')->insert(['region_id'=>4594, 'regionable_id'=>59558, 'regionable_type'=>'village']); //Tanalangi
                DB::table('regionables')->insert(['region_id'=>4594, 'regionable_id'=>59559, 'regionable_type'=>'village']); //Taniwoda
                DB::table('regionables')->insert(['region_id'=>4594, 'regionable_id'=>59560, 'regionable_type'=>'village']); //Tiwusora
                DB::table('regions')->insert(['id'=>4595, 'parent'=>4593, 'code'=>'86375', 'type'=>'village', 'name'=>'Village 86375, Districts 8637, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4595, 'regionable_id'=>59561, 'regionable_type'=>'village']); //Kuru
                DB::table('regionables')->insert(['region_id'=>4595, 'regionable_id'=>59562, 'regionable_type'=>'village']); //Kuru Sare
                DB::table('regionables')->insert(['region_id'=>4595, 'regionable_id'=>59563, 'regionable_type'=>'village']); //Ndengga Rongge
                DB::table('regions')->insert(['id'=>4596, 'parent'=>4593, 'code'=>'86376', 'type'=>'village', 'name'=>'Village 86376, Districts 8637, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4596, 'regionable_id'=>59564, 'regionable_type'=>'village']); //Mukureku
                DB::table('regionables')->insert(['region_id'=>4596, 'regionable_id'=>59565, 'regionable_type'=>'village']); //Mukureku Sa Ate
                DB::table('regionables')->insert(['region_id'=>4596, 'regionable_id'=>59566, 'regionable_type'=>'village']); //Nggumbelaka
                DB::table('regionables')->insert(['region_id'=>4596, 'regionable_id'=>59567, 'regionable_type'=>'village']); //Wologai Timur
                DB::table('regions')->insert(['id'=>4597, 'parent'=>4593, 'code'=>'86377', 'type'=>'village', 'name'=>'Village 86377, Districts 8637, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4597, 'regionable_id'=>59568, 'regionable_type'=>'village']); //Rutu Jeja
                DB::table('regions')->insert(['id'=>4598, 'parent'=>4593, 'code'=>'86378', 'type'=>'village', 'name'=>'Village 86378, Districts 8637, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4598, 'regionable_id'=>59569, 'regionable_type'=>'village']); //Ndikosapu
                DB::table('regions')->insert(['id'=>4599, 'parent'=>4593, 'code'=>'86379', 'type'=>'village', 'name'=>'Village 86379, Districts 8637, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4599, 'regionable_id'=>59570, 'regionable_type'=>'village']); //Lise Kuru
            DB::table('regions')->insert(['id'=>4600, 'parent'=>4586, 'code'=>'8638', 'type'=>'districts', 'name'=>'Districts 8638, City 863, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4600, 'regionable_id'=>5061, 'regionable_type'=>'districts']); //Maurole
            DB::table('regionables')->insert(['region_id'=>4600, 'regionable_id'=>5062, 'regionable_type'=>'districts']); //Wolojita
                DB::table('regions')->insert(['id'=>4601, 'parent'=>4600, 'code'=>'86382', 'type'=>'village', 'name'=>'Village 86382, Districts 8638, City 863, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4601, 'regionable_id'=>59584, 'regionable_type'=>'village']); //Nggela
                DB::table('regionables')->insert(['region_id'=>4601, 'regionable_id'=>59585, 'regionable_type'=>'village']); //Nuamulu
                DB::table('regionables')->insert(['region_id'=>4601, 'regionable_id'=>59586, 'regionable_type'=>'village']); //Pora
                DB::table('regionables')->insert(['region_id'=>4601, 'regionable_id'=>59587, 'regionable_type'=>'village']); //Tenda
                DB::table('regionables')->insert(['region_id'=>4601, 'regionable_id'=>59588, 'regionable_type'=>'village']); //Wiwipemo
                DB::table('regionables')->insert(['region_id'=>4601, 'regionable_id'=>59589, 'regionable_type'=>'village']); //Wolojita
        DB::table('regions')->insert(['id'=>4602, 'parent'=>4287, 'code'=>'864', 'type'=>'city', 'name'=>'City 864, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4602, 'regionable_id'=>304, 'regionable_type'=>'city']); //Ngada regencies
        DB::table('regionables')->insert(['region_id'=>4602, 'regionable_id'=>305, 'regionable_type'=>'city']); //Nagekeo regencies
            DB::table('regions')->insert(['id'=>4603, 'parent'=>4602, 'code'=>'8646', 'type'=>'districts', 'name'=>'Districts 8646, City 864, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4603, 'regionable_id'=>5091, 'regionable_type'=>'districts']); //Golewa Selatan
            DB::table('regionables')->insert(['region_id'=>4603, 'regionable_id'=>5092, 'regionable_type'=>'districts']); //Golewa Barat
            DB::table('regionables')->insert(['region_id'=>4603, 'regionable_id'=>5093, 'regionable_type'=>'districts']); //Golewa
            DB::table('regionables')->insert(['region_id'=>4603, 'regionable_id'=>5094, 'regionable_type'=>'districts']); //Boawae
            DB::table('regionables')->insert(['region_id'=>4603, 'regionable_id'=>5095, 'regionable_type'=>'districts']); //Mauponggo
            DB::table('regionables')->insert(['region_id'=>4603, 'regionable_id'=>5096, 'regionable_type'=>'districts']); //Nangaroro
            DB::table('regionables')->insert(['region_id'=>4603, 'regionable_id'=>5097, 'regionable_type'=>'districts']); //Keo Tengah
                DB::table('regions')->insert(['id'=>4604, 'parent'=>4603, 'code'=>'86464', 'type'=>'village', 'name'=>'Village 86464, Districts 8646, City 864, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60042, 'regionable_type'=>'village']); //Bidoa
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60043, 'regionable_type'=>'village']); //Degalea
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60044, 'regionable_type'=>'village']); //Kodaute
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60045, 'regionable_type'=>'village']); //Kotakeo
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60046, 'regionable_type'=>'village']); //Kotakeo Dua
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60047, 'regionable_type'=>'village']); //Kotakeo Satu
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60048, 'regionable_type'=>'village']); //Nangaroro
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60049, 'regionable_type'=>'village']); //Nataute
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60050, 'regionable_type'=>'village']); //Pagomogo
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60051, 'regionable_type'=>'village']); //Podenura
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60052, 'regionable_type'=>'village']); //Riti
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60053, 'regionable_type'=>'village']); //Tonggo
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60054, 'regionable_type'=>'village']); //Ulupulu
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60055, 'regionable_type'=>'village']); //Ulupulu I
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60056, 'regionable_type'=>'village']); //Utetoto
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60057, 'regionable_type'=>'village']); //Woedoa
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60058, 'regionable_type'=>'village']); //Woewutu
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60059, 'regionable_type'=>'village']); //Wokodekororo
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60060, 'regionable_type'=>'village']); //Wokowoe
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60061, 'regionable_type'=>'village']); //Keli
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60062, 'regionable_type'=>'village']); //Kotadirumali
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60063, 'regionable_type'=>'village']); //Kotawuji Barat
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60064, 'regionable_type'=>'village']); //Kotawuji Timur
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60065, 'regionable_type'=>'village']); //Ladolima
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60066, 'regionable_type'=>'village']); //Ladolima Barat
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60067, 'regionable_type'=>'village']); //Ladolima Timur
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60068, 'regionable_type'=>'village']); //Lewangera
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60069, 'regionable_type'=>'village']); //Mbaenuamuri
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60070, 'regionable_type'=>'village']); //Ngera
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60071, 'regionable_type'=>'village']); //Paumali
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60072, 'regionable_type'=>'village']); //Pautola
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60073, 'regionable_type'=>'village']); //Udiworowatu
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60074, 'regionable_type'=>'village']); //Wajo
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60075, 'regionable_type'=>'village']); //Wajo Timur
                DB::table('regionables')->insert(['region_id'=>4604, 'regionable_id'=>60076, 'regionable_type'=>'village']); //Witurombaua
            DB::table('regions')->insert(['id'=>4605, 'parent'=>4602, 'code'=>'8647', 'type'=>'districts', 'name'=>'Districts 8647, City 864, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4605, 'regionable_id'=>5098, 'regionable_type'=>'districts']); //Aesesa
            DB::table('regionables')->insert(['region_id'=>4605, 'regionable_id'=>5099, 'regionable_type'=>'districts']); //Wolowae
            DB::table('regionables')->insert(['region_id'=>4605, 'regionable_id'=>5100, 'regionable_type'=>'districts']); //Aesesa Selatan
                DB::table('regions')->insert(['id'=>4606, 'parent'=>4605, 'code'=>'86472', 'type'=>'village', 'name'=>'Village 86472, Districts 8647, City 864, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60077, 'regionable_type'=>'village']); //Aeramo
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60078, 'regionable_type'=>'village']); //Danga
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60079, 'regionable_type'=>'village']); //Dhawe
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60080, 'regionable_type'=>'village']); //Labolewa
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60081, 'regionable_type'=>'village']); //Lape
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60082, 'regionable_type'=>'village']); //Marapokot
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60083, 'regionable_type'=>'village']); //Mbay I
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60084, 'regionable_type'=>'village']); //Mbay Ii
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60085, 'regionable_type'=>'village']); //Nangadhero
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60086, 'regionable_type'=>'village']); //Ngegedhawe
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60087, 'regionable_type'=>'village']); //Nggolo Mbay
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60088, 'regionable_type'=>'village']); //Nggolonio
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60089, 'regionable_type'=>'village']); //Olaia
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60090, 'regionable_type'=>'village']); //Tedakisa
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60091, 'regionable_type'=>'village']); //Tedamude
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60092, 'regionable_type'=>'village']); //Tonggu Rambang
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60093, 'regionable_type'=>'village']); //Towak
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60094, 'regionable_type'=>'village']); //Waekokak
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60095, 'regionable_type'=>'village']); //Anakoli
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60096, 'regionable_type'=>'village']); //Natatoto
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60097, 'regionable_type'=>'village']); //Tenda Kinde
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60098, 'regionable_type'=>'village']); //Tendatoto
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60099, 'regionable_type'=>'village']); //Totomala
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60100, 'regionable_type'=>'village']); //Langedhawe
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60101, 'regionable_type'=>'village']); //Rendu Butowe
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60102, 'regionable_type'=>'village']); //Rendut Tutubhada
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60103, 'regionable_type'=>'village']); //Rendutenoe
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60104, 'regionable_type'=>'village']); //Renduwawo
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60105, 'regionable_type'=>'village']); //Tengatiba
                DB::table('regionables')->insert(['region_id'=>4606, 'regionable_id'=>60106, 'regionable_type'=>'village']); //Wajomara
        DB::table('regions')->insert(['id'=>4607, 'parent'=>4287, 'code'=>'865', 'type'=>'city', 'name'=>'City 865, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4607, 'regionable_id'=>306, 'regionable_type'=>'city']); //Manggarai regencies
        DB::table('regionables')->insert(['region_id'=>4607, 'regionable_id'=>307, 'regionable_type'=>'city']); //Manggarai Timur regencies
            DB::table('regions')->insert(['id'=>4608, 'parent'=>4607, 'code'=>'8657', 'type'=>'districts', 'name'=>'Districts 8657, City 865, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4608, 'regionable_id'=>5112, 'regionable_type'=>'districts']); //Rana Mese
            DB::table('regionables')->insert(['region_id'=>4608, 'regionable_id'=>5113, 'regionable_type'=>'districts']); //Borong
            DB::table('regionables')->insert(['region_id'=>4608, 'regionable_id'=>5114, 'regionable_type'=>'districts']); //Kota Komba
                DB::table('regions')->insert(['id'=>4609, 'parent'=>4608, 'code'=>'86572', 'type'=>'village', 'name'=>'Village 86572, Districts 8657, City 865, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60308, 'regionable_type'=>'village']); //Bamo
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60309, 'regionable_type'=>'village']); //Golo Ndele
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60310, 'regionable_type'=>'village']); //Golo Nderu
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60311, 'regionable_type'=>'village']); //Golo Tolang
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60312, 'regionable_type'=>'village']); //Golomeni
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60313, 'regionable_type'=>'village']); //Gunung Baru
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60314, 'regionable_type'=>'village']); //Gunung Mute
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60315, 'regionable_type'=>'village']); //Komba
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60316, 'regionable_type'=>'village']); //Lembur
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60317, 'regionable_type'=>'village']); //Mbengan
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60318, 'regionable_type'=>'village']); //Mokel
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60319, 'regionable_type'=>'village']); //Mokel Morid
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60320, 'regionable_type'=>'village']); //Paan Leleng
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60321, 'regionable_type'=>'village']); //Pari
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60322, 'regionable_type'=>'village']); //Pong Ruan
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60323, 'regionable_type'=>'village']); //Rana Kolong
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60324, 'regionable_type'=>'village']); //Rana Mbata
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60325, 'regionable_type'=>'village']); //Rana Mbeling
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60326, 'regionable_type'=>'village']); //Rongga Koe
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60327, 'regionable_type'=>'village']); //Ruan
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60328, 'regionable_type'=>'village']); //Tanah Rata
                DB::table('regionables')->insert(['region_id'=>4609, 'regionable_id'=>60329, 'regionable_type'=>'village']); //Watu Nggene
            DB::table('regions')->insert(['id'=>4610, 'parent'=>4607, 'code'=>'8658', 'type'=>'districts', 'name'=>'Districts 8658, City 865, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4610, 'regionable_id'=>5115, 'regionable_type'=>'districts']); //Elar Selatan
            DB::table('regionables')->insert(['region_id'=>4610, 'regionable_id'=>5116, 'regionable_type'=>'districts']); //Elar
            DB::table('regionables')->insert(['region_id'=>4610, 'regionable_id'=>5117, 'regionable_type'=>'districts']); //Lamba Leda
            DB::table('regionables')->insert(['region_id'=>4610, 'regionable_id'=>5118, 'regionable_type'=>'districts']); //Poco Ranaka Timur
            DB::table('regionables')->insert(['region_id'=>4610, 'regionable_id'=>5119, 'regionable_type'=>'districts']); //Poco Ranaka
            DB::table('regionables')->insert(['region_id'=>4610, 'regionable_id'=>5120, 'regionable_type'=>'districts']); //Sambi Rampas
                DB::table('regions')->insert(['id'=>4611, 'parent'=>4610, 'code'=>'86584', 'type'=>'village', 'name'=>'Village 86584, Districts 8658, City 865, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60425, 'regionable_type'=>'village']); //Buti
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60426, 'regionable_type'=>'village']); //Compang Congkar
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60427, 'regionable_type'=>'village']); //Compang Lawi
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60428, 'regionable_type'=>'village']); //Golo Ngawan
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60429, 'regionable_type'=>'village']); //Golo Pari
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60430, 'regionable_type'=>'village']); //Golo Wangkung
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60431, 'regionable_type'=>'village']); //Golo Wangkung Barat
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60432, 'regionable_type'=>'village']); //Golo Wangkung Utara
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60433, 'regionable_type'=>'village']); //Kembang Mekar
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60434, 'regionable_type'=>'village']); //Lada Mese
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60435, 'regionable_type'=>'village']); //Nampar Sepang
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60436, 'regionable_type'=>'village']); //Nanga Baras
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60437, 'regionable_type'=>'village']); //Nanga Mbaling
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60438, 'regionable_type'=>'village']); //Nanga Mbaur
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60439, 'regionable_type'=>'village']); //Pota
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60440, 'regionable_type'=>'village']); //Rana Mese
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60441, 'regionable_type'=>'village']); //Satar Nawang
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60442, 'regionable_type'=>'village']); //Ulung Baras
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60443, 'regionable_type'=>'village']); //Wea
                DB::table('regionables')->insert(['region_id'=>4611, 'regionable_id'=>60444, 'regionable_type'=>'village']); //Wela Lada
        DB::table('regions')->insert(['id'=>4612, 'parent'=>4287, 'code'=>'866', 'type'=>'city', 'name'=>'City 866, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4612, 'regionable_id'=>308, 'regionable_type'=>'city']); //Lembata regencies
            DB::table('regions')->insert(['id'=>4613, 'parent'=>4612, 'code'=>'8661', 'type'=>'districts', 'name'=>'Districts 8661, City 866, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4613, 'regionable_id'=>5121, 'regionable_type'=>'districts']); //Nubatukan
                DB::table('regions')->insert(['id'=>4614, 'parent'=>4613, 'code'=>'86611', 'type'=>'village', 'name'=>'Village 86611, Districts 8661, City 866, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4614, 'regionable_id'=>60445, 'regionable_type'=>'village']); //Lewoleba
                DB::table('regions')->insert(['id'=>4615, 'parent'=>4613, 'code'=>'86612', 'type'=>'village', 'name'=>'Village 86612, Districts 8661, City 866, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4615, 'regionable_id'=>60446, 'regionable_type'=>'village']); //Lewoleba Utara
                DB::table('regions')->insert(['id'=>4616, 'parent'=>4613, 'code'=>'86613', 'type'=>'village', 'name'=>'Village 86613, Districts 8661, City 866, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4616, 'regionable_id'=>60447, 'regionable_type'=>'village']); //Lewoleba Barat
                DB::table('regions')->insert(['id'=>4617, 'parent'=>4613, 'code'=>'86615', 'type'=>'village', 'name'=>'Village 86615, Districts 8661, City 866, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4617, 'regionable_id'=>60448, 'regionable_type'=>'village']); //Lewoleba Tengah
                DB::table('regions')->insert(['id'=>4618, 'parent'=>4613, 'code'=>'86616', 'type'=>'village', 'name'=>'Village 86616, Districts 8661, City 866, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4618, 'regionable_id'=>60449, 'regionable_type'=>'village']); //Lewoleba Timur
                DB::table('regionables')->insert(['region_id'=>4618, 'regionable_id'=>60450, 'regionable_type'=>'village']); //Lite Ulumado
            DB::table('regions')->insert(['id'=>4619, 'parent'=>4612, 'code'=>'8668', 'type'=>'districts', 'name'=>'Districts 8668, City 866, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4619, 'regionable_id'=>5121, 'regionable_type'=>'districts']); //Nubatukan
            DB::table('regionables')->insert(['region_id'=>4619, 'regionable_id'=>5122, 'regionable_type'=>'districts']); //Lebatukan
            DB::table('regionables')->insert(['region_id'=>4619, 'regionable_id'=>5123, 'regionable_type'=>'districts']); //Ile Ape
            DB::table('regionables')->insert(['region_id'=>4619, 'regionable_id'=>5124, 'regionable_type'=>'districts']); //Ile Ape Timur
            DB::table('regionables')->insert(['region_id'=>4619, 'regionable_id'=>5125, 'regionable_type'=>'districts']); //Nagawutung
            DB::table('regionables')->insert(['region_id'=>4619, 'regionable_id'=>5126, 'regionable_type'=>'districts']); //Wulandoni (wulandioni)
            DB::table('regionables')->insert(['region_id'=>4619, 'regionable_id'=>5127, 'regionable_type'=>'districts']); //Atadei
                DB::table('regions')->insert(['id'=>4620, 'parent'=>4619, 'code'=>'86685', 'type'=>'village', 'name'=>'Village 86685, Districts 8668, City 866, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60518, 'regionable_type'=>'village']); //Alap Atadei
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60519, 'regionable_type'=>'village']); //Ataili
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60520, 'regionable_type'=>'village']); //Atakera
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60521, 'regionable_type'=>'village']); //Belobad (belobao)
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60522, 'regionable_type'=>'village']); //Imulolong
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60523, 'regionable_type'=>'village']); //Lamalera A
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60524, 'regionable_type'=>'village']); //Lamalera B
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60525, 'regionable_type'=>'village']); //Lelata
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60526, 'regionable_type'=>'village']); //Leworaja
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60527, 'regionable_type'=>'village']); //Pantai Harapan
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60528, 'regionable_type'=>'village']); //Posiwatu
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60529, 'regionable_type'=>'village']); //Puor
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60530, 'regionable_type'=>'village']); //Puor B
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60531, 'regionable_type'=>'village']); //Tapobali
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60532, 'regionable_type'=>'village']); //Wulandoni
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60533, 'regionable_type'=>'village']); //Atakore
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60534, 'regionable_type'=>'village']); //Dori Pewut
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60535, 'regionable_type'=>'village']); //Dulir
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60536, 'regionable_type'=>'village']); //Ile Kerbau
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60537, 'regionable_type'=>'village']); //Ile Kimok
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60538, 'regionable_type'=>'village']); //Katakeja
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60539, 'regionable_type'=>'village']); //Lebaata
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60540, 'regionable_type'=>'village']); //Lerek
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60541, 'regionable_type'=>'village']); //Lewogroma
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60542, 'regionable_type'=>'village']); //Lusilame
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60543, 'regionable_type'=>'village']); //Nogo Doni
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60544, 'regionable_type'=>'village']); //Nuba Atalojo
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60545, 'regionable_type'=>'village']); //Nubaboli
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60546, 'regionable_type'=>'village']); //Nubahaeraka
                DB::table('regionables')->insert(['region_id'=>4620, 'regionable_id'=>60547, 'regionable_type'=>'village']); //Tubuk Rajan
            DB::table('regions')->insert(['id'=>4621, 'parent'=>4612, 'code'=>'8669', 'type'=>'districts', 'name'=>'Districts 8669, City 866, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4621, 'regionable_id'=>5128, 'regionable_type'=>'districts']); //Omesuri
            DB::table('regionables')->insert(['region_id'=>4621, 'regionable_id'=>5129, 'regionable_type'=>'districts']); //Buyasuri (buyasari)
                DB::table('regions')->insert(['id'=>4622, 'parent'=>4621, 'code'=>'86692', 'type'=>'village', 'name'=>'Village 86692, Districts 8669, City 866, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60569, 'regionable_type'=>'village']); //Atu Wa\lupang
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60570, 'regionable_type'=>'village']); //Atulaleng
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60571, 'regionable_type'=>'village']); //Bareng
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60572, 'regionable_type'=>'village']); //Bean
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60573, 'regionable_type'=>'village']); //Benihading
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60574, 'regionable_type'=>'village']); //Benihading Ii
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60575, 'regionable_type'=>'village']); //Buriwutung
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60576, 'regionable_type'=>'village']); //Kalikur
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60577, 'regionable_type'=>'village']); //Kalikur Wl
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60578, 'regionable_type'=>'village']); //Kaohua
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60579, 'regionable_type'=>'village']); //Leuburi
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60580, 'regionable_type'=>'village']); //Leuwohung
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60581, 'regionable_type'=>'village']); //Loyobohor
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60582, 'regionable_type'=>'village']); //Mampir
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60583, 'regionable_type'=>'village']); //Panama
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60584, 'regionable_type'=>'village']); //Roho
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60585, 'regionable_type'=>'village']); //Rumang
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60586, 'regionable_type'=>'village']); //Tobotani
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60587, 'regionable_type'=>'village']); //Tubung Walang
                DB::table('regionables')->insert(['region_id'=>4622, 'regionable_id'=>60588, 'regionable_type'=>'village']); //Umaleu
        DB::table('regions')->insert(['id'=>4623, 'parent'=>4287, 'code'=>'867', 'type'=>'city', 'name'=>'City 867, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4623, 'regionable_id'=>309, 'regionable_type'=>'city']); //Manggarai Barat regencies
            DB::table('regions')->insert(['id'=>4624, 'parent'=>4623, 'code'=>'8675', 'type'=>'districts', 'name'=>'Districts 8675, City 867, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5130, 'regionable_type'=>'districts']); //Kuwus
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5131, 'regionable_type'=>'districts']); //Ndoso
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5132, 'regionable_type'=>'districts']); //Lembor Selatan
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5133, 'regionable_type'=>'districts']); //Lembor
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5134, 'regionable_type'=>'districts']); //Welak
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5135, 'regionable_type'=>'districts']); //Komodo
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5136, 'regionable_type'=>'districts']); //Boleng
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5137, 'regionable_type'=>'districts']); //Macang Pacar
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5138, 'regionable_type'=>'districts']); //Mbeliling
            DB::table('regionables')->insert(['region_id'=>4624, 'regionable_id'=>5139, 'regionable_type'=>'districts']); //Sano Nggoang
                DB::table('regions')->insert(['id'=>4625, 'parent'=>4624, 'code'=>'86757', 'type'=>'village', 'name'=>'Village 86757, Districts 8675, City 867, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60686, 'regionable_type'=>'village']); //Cunca Lolos
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60687, 'regionable_type'=>'village']); //Cunca Wulang
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60688, 'regionable_type'=>'village']); //Golo Damu
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60689, 'regionable_type'=>'village']); //Golo Desat
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60690, 'regionable_type'=>'village']); //Golo Ndoal
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60691, 'regionable_type'=>'village']); //Golo Sembea
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60692, 'regionable_type'=>'village']); //Golo Tantong
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60693, 'regionable_type'=>'village']); //Kempo
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60694, 'regionable_type'=>'village']); //Liang Ndara
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60695, 'regionable_type'=>'village']); //Tandong/tondong Belang
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60696, 'regionable_type'=>'village']); //Tiwi Riwung
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60697, 'regionable_type'=>'village']); //Wae Jare
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60698, 'regionable_type'=>'village']); //Watu Wangka
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60699, 'regionable_type'=>'village']); //Golo Kempo
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60700, 'regionable_type'=>'village']); //Golo Leleng
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60701, 'regionable_type'=>'village']); //Golo Manting
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60702, 'regionable_type'=>'village']); //Golo Mbu
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60703, 'regionable_type'=>'village']); //Golo Ndaring
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60704, 'regionable_type'=>'village']); //Golo Sengang
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60705, 'regionable_type'=>'village']); //Mata Wae
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60706, 'regionable_type'=>'village']); //Nampar Macing
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60707, 'regionable_type'=>'village']); //Sano Nggoang
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60708, 'regionable_type'=>'village']); //Wae Lolos
                DB::table('regionables')->insert(['region_id'=>4625, 'regionable_id'=>60709, 'regionable_type'=>'village']); //Wae Sano
        DB::table('regions')->insert(['id'=>4626, 'parent'=>4287, 'code'=>'871', 'type'=>'city', 'name'=>'City 871, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4626, 'regionable_id'=>310, 'regionable_type'=>'city']); //Sumba Timur regencies
            DB::table('regions')->insert(['id'=>4627, 'parent'=>4626, 'code'=>'8711', 'type'=>'districts', 'name'=>'Districts 8711, City 871, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4627, 'regionable_id'=>5140, 'regionable_type'=>'districts']); //Kota Waingapu
            DB::table('regionables')->insert(['region_id'=>4627, 'regionable_id'=>5141, 'regionable_type'=>'districts']); //Kambera
            DB::table('regionables')->insert(['region_id'=>4627, 'regionable_id'=>5142, 'regionable_type'=>'districts']); //Kambata Mapambuhang
                DB::table('regions')->insert(['id'=>4628, 'parent'=>4627, 'code'=>'87116', 'type'=>'village', 'name'=>'Village 87116, Districts 8711, City 871, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60712, 'regionable_type'=>'village']); //Kambajawa
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60713, 'regionable_type'=>'village']); //Lukukamaru
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60714, 'regionable_type'=>'village']); //Matawai
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60715, 'regionable_type'=>'village']); //Mbata Kapidu
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60716, 'regionable_type'=>'village']); //Pambola Njara (pambotanjara)
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60721, 'regionable_type'=>'village']); //Malumbi
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60722, 'regionable_type'=>'village']); //Mauhau
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60723, 'regionable_type'=>'village']); //Mauliru
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60724, 'regionable_type'=>'village']); //Wangga
                DB::table('regionables')->insert(['region_id'=>4628, 'regionable_id'=>60725, 'regionable_type'=>'village']); //Luku Wingir (wikir)
            DB::table('regions')->insert(['id'=>4629, 'parent'=>4626, 'code'=>'8715', 'type'=>'districts', 'name'=>'Districts 8715, City 871, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4629, 'regionable_id'=>5143, 'regionable_type'=>'districts']); //Lewa
            DB::table('regionables')->insert(['region_id'=>4629, 'regionable_id'=>5144, 'regionable_type'=>'districts']); //Lewa Tidahu
            DB::table('regionables')->insert(['region_id'=>4629, 'regionable_id'=>5145, 'regionable_type'=>'districts']); //Nggaha Oriangu
            DB::table('regionables')->insert(['region_id'=>4629, 'regionable_id'=>5146, 'regionable_type'=>'districts']); //Katala Hamu Lingu
            DB::table('regionables')->insert(['region_id'=>4629, 'regionable_id'=>5147, 'regionable_type'=>'districts']); //Kanatang
            DB::table('regionables')->insert(['region_id'=>4629, 'regionable_id'=>5148, 'regionable_type'=>'districts']); //Haharu
                DB::table('regions')->insert(['id'=>4630, 'parent'=>4629, 'code'=>'87153', 'type'=>'village', 'name'=>'Village 87153, Districts 8715, City 871, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60758, 'regionable_type'=>'village']); //Hamba Praing
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60759, 'regionable_type'=>'village']); //Kuta
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60760, 'regionable_type'=>'village']); //Mondu
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60761, 'regionable_type'=>'village']); //Ndapayami
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60762, 'regionable_type'=>'village']); //Temu
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60763, 'regionable_type'=>'village']); //Kadahang
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60764, 'regionable_type'=>'village']); //Kalamba
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60765, 'regionable_type'=>'village']); //Mbata Puhu
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60766, 'regionable_type'=>'village']); //Napu
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60767, 'regionable_type'=>'village']); //Praibakul
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60768, 'regionable_type'=>'village']); //Rambangaru
                DB::table('regionables')->insert(['region_id'=>4630, 'regionable_id'=>60769, 'regionable_type'=>'village']); //Wunga
            DB::table('regions')->insert(['id'=>4631, 'parent'=>4626, 'code'=>'8716', 'type'=>'districts', 'name'=>'Districts 8716, City 871, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4631, 'regionable_id'=>5149, 'regionable_type'=>'districts']); //Tabundung
            DB::table('regionables')->insert(['region_id'=>4631, 'regionable_id'=>5150, 'regionable_type'=>'districts']); //Pinupahar (pirapahar)
                DB::table('regions')->insert(['id'=>4632, 'parent'=>4631, 'code'=>'87161', 'type'=>'village', 'name'=>'Village 87161, Districts 8716, City 871, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60770, 'regionable_type'=>'village']); //Bangga Watu
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60771, 'regionable_type'=>'village']); //Billa
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60772, 'regionable_type'=>'village']); //Karita
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60773, 'regionable_type'=>'village']); //Kuki Talu
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60774, 'regionable_type'=>'village']); //Pindu Horomi (hurani)
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60775, 'regionable_type'=>'village']); //Praing Kareha
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60776, 'regionable_type'=>'village']); //Tapil
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60777, 'regionable_type'=>'village']); //Tarimbang
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60778, 'regionable_type'=>'village']); //Waikanabu
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60779, 'regionable_type'=>'village']); //Wudi Pandak
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60780, 'regionable_type'=>'village']); //Lailunggi
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60781, 'regionable_type'=>'village']); //Mahaniwa
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60782, 'regionable_type'=>'village']); //Ramuk
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60783, 'regionable_type'=>'village']); //Tawui
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60784, 'regionable_type'=>'village']); //Wahang
                DB::table('regionables')->insert(['region_id'=>4632, 'regionable_id'=>60785, 'regionable_type'=>'village']); //Wangga Mbewa
            DB::table('regions')->insert(['id'=>4633, 'parent'=>4626, 'code'=>'8717', 'type'=>'districts', 'name'=>'Districts 8717, City 871, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4633, 'regionable_id'=>5142, 'regionable_type'=>'districts']); //Kambata Mapambuhang
            DB::table('regionables')->insert(['region_id'=>4633, 'regionable_id'=>5151, 'regionable_type'=>'districts']); //Mahu
            DB::table('regionables')->insert(['region_id'=>4633, 'regionable_id'=>5152, 'regionable_type'=>'districts']); //Pandawai
            DB::table('regionables')->insert(['region_id'=>4633, 'regionable_id'=>5153, 'regionable_type'=>'districts']); //Kahaunguweti (kahaungu Eti)
            DB::table('regionables')->insert(['region_id'=>4633, 'regionable_id'=>5154, 'regionable_type'=>'districts']); //Paberiwai
            DB::table('regionables')->insert(['region_id'=>4633, 'regionable_id'=>5155, 'regionable_type'=>'districts']); //Matawai Lappau (la Pawu)
            DB::table('regionables')->insert(['region_id'=>4633, 'regionable_id'=>5156, 'regionable_type'=>'districts']); //Karera
            DB::table('regionables')->insert(['region_id'=>4633, 'regionable_id'=>5157, 'regionable_type'=>'districts']); //Ngadu Ngala
                DB::table('regions')->insert(['id'=>4634, 'parent'=>4633, 'code'=>'87172', 'type'=>'village', 'name'=>'Village 87172, Districts 8717, City 871, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60821, 'regionable_type'=>'village']); //Ananjaki
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60822, 'regionable_type'=>'village']); //Jangga Mangu
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60823, 'regionable_type'=>'village']); //Nangga
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60824, 'regionable_type'=>'village']); //Nggongi
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60825, 'regionable_type'=>'village']); //Praimadita
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60826, 'regionable_type'=>'village']); //Praisalura
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60827, 'regionable_type'=>'village']); //Tandula Jangga
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60828, 'regionable_type'=>'village']); //Hambautang (hamba Wutang)
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60829, 'regionable_type'=>'village']); //Kabanda
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60830, 'regionable_type'=>'village']); //Kakaha
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60831, 'regionable_type'=>'village']); //Prai Witu
                DB::table('regionables')->insert(['region_id'=>4634, 'regionable_id'=>60832, 'regionable_type'=>'village']); //Prauraming
            DB::table('regions')->insert(['id'=>4635, 'parent'=>4626, 'code'=>'8718', 'type'=>'districts', 'name'=>'Districts 8718, City 871, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4635, 'regionable_id'=>5158, 'regionable_type'=>'districts']); //Rindi
            DB::table('regionables')->insert(['region_id'=>4635, 'regionable_id'=>5159, 'regionable_type'=>'districts']); //Umalulu
            DB::table('regionables')->insert(['region_id'=>4635, 'regionable_id'=>5160, 'regionable_type'=>'districts']); //Wula Waijelu
            DB::table('regionables')->insert(['region_id'=>4635, 'regionable_id'=>5161, 'regionable_type'=>'districts']); //Pahunga Lodu
                DB::table('regions')->insert(['id'=>4636, 'parent'=>4635, 'code'=>'87182', 'type'=>'village', 'name'=>'Village 87182, Districts 8718, City 871, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60851, 'regionable_type'=>'village']); //Hadakamali
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60852, 'regionable_type'=>'village']); //La Tena
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60853, 'regionable_type'=>'village']); //Lainjanji
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60854, 'regionable_type'=>'village']); //Laipandak
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60855, 'regionable_type'=>'village']); //Lumbu Manggit
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60856, 'regionable_type'=>'village']); //Paranda
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60857, 'regionable_type'=>'village']); //Wulla (wula)
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60858, 'regionable_type'=>'village']); //Kaliuda
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60859, 'regionable_type'=>'village']); //Kuruwaki
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60860, 'regionable_type'=>'village']); //Lambakara
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60861, 'regionable_type'=>'village']); //Mburukulu
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60862, 'regionable_type'=>'village']); //Palanggai
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60863, 'regionable_type'=>'village']); //Pamburu
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60864, 'regionable_type'=>'village']); //Tamma
                DB::table('regionables')->insert(['region_id'=>4636, 'regionable_id'=>60865, 'regionable_type'=>'village']); //Tanamanang
        DB::table('regions')->insert(['id'=>4637, 'parent'=>4287, 'code'=>'872', 'type'=>'city', 'name'=>'City 872, Province 8']);
        DB::table('regionables')->insert(['region_id'=>4637, 'regionable_id'=>311, 'regionable_type'=>'city']); //Sumba Barat regencies
        DB::table('regionables')->insert(['region_id'=>4637, 'regionable_id'=>312, 'regionable_type'=>'city']); //Sumba Barat Daya regencies
        DB::table('regionables')->insert(['region_id'=>4637, 'regionable_id'=>313, 'regionable_type'=>'city']); //Sumba Tengah regencies
            DB::table('regions')->insert(['id'=>4638, 'parent'=>4637, 'code'=>'8725', 'type'=>'districts', 'name'=>'Districts 8725, City 872, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4638, 'regionable_id'=>5163, 'regionable_type'=>'districts']); //Tana Righu
            DB::table('regionables')->insert(['region_id'=>4638, 'regionable_id'=>5168, 'regionable_type'=>'districts']); //Wewewa Tengah (wewera Tengah)
            DB::table('regionables')->insert(['region_id'=>4638, 'regionable_id'=>5169, 'regionable_type'=>'districts']); //Wewewa Timur
            DB::table('regionables')->insert(['region_id'=>4638, 'regionable_id'=>5170, 'regionable_type'=>'districts']); //Wewewa Utara
            DB::table('regionables')->insert(['region_id'=>4638, 'regionable_id'=>5171, 'regionable_type'=>'districts']); //Wewewa Barat
            DB::table('regionables')->insert(['region_id'=>4638, 'regionable_id'=>5172, 'regionable_type'=>'districts']); //Loura (laura)
            DB::table('regionables')->insert(['region_id'=>4638, 'regionable_id'=>5173, 'regionable_type'=>'districts']); //Kota Tambolaka
            DB::table('regionables')->insert(['region_id'=>4638, 'regionable_id'=>5179, 'regionable_type'=>'districts']); //Mamboro
                DB::table('regions')->insert(['id'=>4639, 'parent'=>4638, 'code'=>'87258', 'type'=>'village', 'name'=>'Village 87258, Districts 8725, City 872, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61071, 'regionable_type'=>'village']); //Bondo Sulla
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61072, 'regionable_type'=>'village']); //Cendana
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61073, 'regionable_type'=>'village']); //Cendana Barat
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61074, 'regionable_type'=>'village']); //Manu Wolu
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61075, 'regionable_type'=>'village']); //Ole Ate
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61076, 'regionable_type'=>'village']); //Ole Dewa
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61077, 'regionable_type'=>'village']); //Susu Wendewa
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61078, 'regionable_type'=>'village']); //Watu Asa
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61079, 'regionable_type'=>'village']); //Wee Luri
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61080, 'regionable_type'=>'village']); //Wendewa Barat
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61081, 'regionable_type'=>'village']); //Wendewa Selatan
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61082, 'regionable_type'=>'village']); //Wendewa Timur
                DB::table('regionables')->insert(['region_id'=>4639, 'regionable_id'=>61083, 'regionable_type'=>'village']); //Wendewa Utara
            DB::table('regions')->insert(['id'=>4640, 'parent'=>4637, 'code'=>'8728', 'type'=>'districts', 'name'=>'Districts 8728, City 872, Province 8']);
            DB::table('regionables')->insert(['region_id'=>4640, 'regionable_id'=>5167, 'regionable_type'=>'districts']); //Loli
            DB::table('regionables')->insert(['region_id'=>4640, 'regionable_id'=>5180, 'regionable_type'=>'districts']); //Umbu Ratu Nggay Barat
            DB::table('regionables')->insert(['region_id'=>4640, 'regionable_id'=>5181, 'regionable_type'=>'districts']); //Katikutana
            DB::table('regionables')->insert(['region_id'=>4640, 'regionable_id'=>5182, 'regionable_type'=>'districts']); //Katikutana Selatan
            DB::table('regionables')->insert(['region_id'=>4640, 'regionable_id'=>5183, 'regionable_type'=>'districts']); //Umbu Ratu Nggay
                DB::table('regions')->insert(['id'=>4641, 'parent'=>4640, 'code'=>'87283', 'type'=>'village', 'name'=>'Village 87283, Districts 8728, City 872, Province 8']);
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61119, 'regionable_type'=>'village']); //Bolubokat Barat
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61120, 'regionable_type'=>'village']); //Bulu Bokat (bolu Bokat)
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61121, 'regionable_type'=>'village']); //Bulu Bokat Utara
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61122, 'regionable_type'=>'village']); //Lenang
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61123, 'regionable_type'=>'village']); //Lenang Selatan
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61124, 'regionable_type'=>'village']); //Mara Desa
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61125, 'regionable_type'=>'village']); //Maradesa Selatan
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61126, 'regionable_type'=>'village']); //Maradesa Timur
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61127, 'regionable_type'=>'village']); //Mbilur Pangadu
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61128, 'regionable_type'=>'village']); //Ngadu Bolu
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61129, 'regionable_type'=>'village']); //Ngadu Olu
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61130, 'regionable_type'=>'village']); //Padira Tana
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61131, 'regionable_type'=>'village']); //Prai Karoku Jangga
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61132, 'regionable_type'=>'village']); //Soru
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61133, 'regionable_type'=>'village']); //Tana Mbanas
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61134, 'regionable_type'=>'village']); //Tana Mbanas Barat
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61135, 'regionable_type'=>'village']); //Tana Mbanas Selatan
                DB::table('regionables')->insert(['region_id'=>4641, 'regionable_id'=>61136, 'regionable_type'=>'village']); //Weluk Prai Memang
    }
}
