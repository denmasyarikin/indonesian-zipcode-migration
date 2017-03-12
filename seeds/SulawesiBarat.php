<?php

use Illuminate\Database\Seeder;

class SulawesiBarat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>27, 'name'=>'Sulawesi Barat']);

        //Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('cities')->insert(['id'=>368, 'province_id'=>27, 'type'=>'regencies', 'name'=>'Polewali Mandar']);
        //Kecamatan Binuang Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6035, 'city_id'=>368, 'name'=>'Binuang']);
        DB::table('villages')->insert(['id'=>69734, 'districts_id'=>6035, 'zipcode'=>'91311', 'name'=>'Mammi']);
        DB::table('villages')->insert(['id'=>69735, 'districts_id'=>6035, 'zipcode'=>'91312', 'name'=>'Amassangan']);
        DB::table('villages')->insert(['id'=>69736, 'districts_id'=>6035, 'zipcode'=>'91312', 'name'=>'Amola']);
        DB::table('villages')->insert(['id'=>69737, 'districts_id'=>6035, 'zipcode'=>'91312', 'name'=>'Batetangnga']);
        DB::table('villages')->insert(['id'=>69738, 'districts_id'=>6035, 'zipcode'=>'91312', 'name'=>'Kaleok']);
        DB::table('villages')->insert(['id'=>69739, 'districts_id'=>6035, 'zipcode'=>'91312', 'name'=>'Mirring']);
        DB::table('villages')->insert(['id'=>69740, 'districts_id'=>6035, 'zipcode'=>'91312', 'name'=>'Rea']);
        DB::table('villages')->insert(['id'=>69741, 'districts_id'=>6035, 'zipcode'=>'91312', 'name'=>'Tonyaman']);
        DB::table('villages')->insert(['id'=>69742, 'districts_id'=>6035, 'zipcode'=>'91351', 'name'=>'Kuajang']);
        DB::table('villages')->insert(['id'=>69743, 'districts_id'=>6035, 'zipcode'=>'91351', 'name'=>'Paku']);
        //Kecamatan Polewali Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6036, 'city_id'=>368, 'name'=>'Polewali']);
        DB::table('villages')->insert(['id'=>69744, 'districts_id'=>6036, 'zipcode'=>'91311', 'name'=>'Manding']);
        DB::table('villages')->insert(['id'=>69745, 'districts_id'=>6036, 'zipcode'=>'91311', 'name'=>'Pekkabata']);
        DB::table('villages')->insert(['id'=>69746, 'districts_id'=>6036, 'zipcode'=>'91311', 'name'=>'Polewali']);
        DB::table('villages')->insert(['id'=>69747, 'districts_id'=>6036, 'zipcode'=>'91311', 'name'=>'Takatidung']);
        DB::table('villages')->insert(['id'=>69748, 'districts_id'=>6036, 'zipcode'=>'91313', 'name'=>'Lantora']);
        DB::table('villages')->insert(['id'=>69749, 'districts_id'=>6036, 'zipcode'=>'91314', 'name'=>'Darma']);
        DB::table('villages')->insert(['id'=>69750, 'districts_id'=>6036, 'zipcode'=>'91315', 'name'=>'Madatte']);
        DB::table('villages')->insert(['id'=>69751, 'districts_id'=>6036, 'zipcode'=>'91315', 'name'=>'Sulewatang']);
        DB::table('villages')->insert(['id'=>69752, 'districts_id'=>6036, 'zipcode'=>'91315', 'name'=>'Wattang']);
        //Kecamatan Anreapi Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6037, 'city_id'=>368, 'name'=>'Anreapi']);
        DB::table('villages')->insert(['id'=>69753, 'districts_id'=>6037, 'zipcode'=>'91315', 'name'=>'Anreapi']);
        DB::table('villages')->insert(['id'=>69754, 'districts_id'=>6037, 'zipcode'=>'91315', 'name'=>'Duampanua']);
        DB::table('villages')->insert(['id'=>69755, 'districts_id'=>6037, 'zipcode'=>'91315', 'name'=>'Kelapa Dua']);
        DB::table('villages')->insert(['id'=>69756, 'districts_id'=>6037, 'zipcode'=>'91315', 'name'=>'Kunyi']);
        DB::table('villages')->insert(['id'=>69757, 'districts_id'=>6037, 'zipcode'=>'91315', 'name'=>'Pappandangan']);
        //Kecamatan Wonomulyo Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6038, 'city_id'=>368, 'name'=>'Wonomulyo']);
        DB::table('villages')->insert(['id'=>69758, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Arjosari']);
        DB::table('villages')->insert(['id'=>69759, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Bakka-bakka']);
        DB::table('villages')->insert(['id'=>69760, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Banua Baru']);
        DB::table('villages')->insert(['id'=>69761, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Bumi Mulyo']);
        DB::table('villages')->insert(['id'=>69762, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Bumiayu']);
        DB::table('villages')->insert(['id'=>69763, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Campurjo']);
        DB::table('villages')->insert(['id'=>69764, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Geleso']);
        DB::table('villages')->insert(['id'=>69765, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Kebunsari']);
        DB::table('villages')->insert(['id'=>69766, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Nepo']);
        DB::table('villages')->insert(['id'=>69767, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Sidodadi']);
        DB::table('villages')->insert(['id'=>69768, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Sidorejo']);
        DB::table('villages')->insert(['id'=>69769, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Sugih Waras']);
        DB::table('villages')->insert(['id'=>69770, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Sumberjo']);
        DB::table('villages')->insert(['id'=>69771, 'districts_id'=>6038, 'zipcode'=>'91352', 'name'=>'Tumpiling']);
        //Kecamatan Matangnga Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6039, 'city_id'=>368, 'name'=>'Matangnga']);
        DB::table('villages')->insert(['id'=>69772, 'districts_id'=>6039, 'zipcode'=>'91352', 'name'=>'Ba\ba Tapua']);
        DB::table('villages')->insert(['id'=>69773, 'districts_id'=>6039, 'zipcode'=>'91352', 'name'=>'Katimbang']);
        DB::table('villages')->insert(['id'=>69774, 'districts_id'=>6039, 'zipcode'=>'91352', 'name'=>'Lilli']);
        DB::table('villages')->insert(['id'=>69775, 'districts_id'=>6039, 'zipcode'=>'91352', 'name'=>'Mambu Tapua']);
        DB::table('villages')->insert(['id'=>69776, 'districts_id'=>6039, 'zipcode'=>'91352', 'name'=>'Matangnga']);
        DB::table('villages')->insert(['id'=>69777, 'districts_id'=>6039, 'zipcode'=>'91352', 'name'=>'Rangoan']);
        DB::table('villages')->insert(['id'=>69778, 'districts_id'=>6039, 'zipcode'=>'91352', 'name'=>'Tapua']);
        //Kecamatan Tapango Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6040, 'city_id'=>368, 'name'=>'Tapango']);
        DB::table('villages')->insert(['id'=>69779, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Banato Rejo']);
        DB::table('villages')->insert(['id'=>69780, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Batu']);
        DB::table('villages')->insert(['id'=>69781, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Bussu']);
        DB::table('villages')->insert(['id'=>69782, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Dakka']);
        DB::table('villages')->insert(['id'=>69783, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Jambu Malea']);
        DB::table('villages')->insert(['id'=>69784, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Kalimbua']);
        DB::table('villages')->insert(['id'=>69785, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Kurrak']);
        DB::table('villages')->insert(['id'=>69786, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Palatta']);
        DB::table('villages')->insert(['id'=>69787, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Pelitakan']);
        DB::table('villages')->insert(['id'=>69788, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Rappang']);
        DB::table('villages')->insert(['id'=>69789, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Riso']);
        DB::table('villages')->insert(['id'=>69790, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Tapango']);
        DB::table('villages')->insert(['id'=>69791, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Tapango Barat']);
        DB::table('villages')->insert(['id'=>69792, 'districts_id'=>6040, 'zipcode'=>'91352', 'name'=>'Tuttula']);
        //Kecamatan Matakali Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6041, 'city_id'=>368, 'name'=>'Matakali']);
        DB::table('villages')->insert(['id'=>69793, 'districts_id'=>6041, 'zipcode'=>'91352', 'name'=>'Barumbung']);
        DB::table('villages')->insert(['id'=>69794, 'districts_id'=>6041, 'zipcode'=>'91352', 'name'=>'Bunga-bunga']);
        DB::table('villages')->insert(['id'=>69795, 'districts_id'=>6041, 'zipcode'=>'91352', 'name'=>'Indo Makkombong (indomakkondang)']);
        DB::table('villages')->insert(['id'=>69796, 'districts_id'=>6041, 'zipcode'=>'91352', 'name'=>'Matakali']);
        DB::table('villages')->insert(['id'=>69797, 'districts_id'=>6041, 'zipcode'=>'91352', 'name'=>'Pasiang']);
        DB::table('villages')->insert(['id'=>69798, 'districts_id'=>6041, 'zipcode'=>'91352', 'name'=>'Patampanua']);
        DB::table('villages')->insert(['id'=>69799, 'districts_id'=>6041, 'zipcode'=>'91352', 'name'=>'Tonro Lima']);
        //Kecamatan Luyo Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6042, 'city_id'=>368, 'name'=>'Luyo']);
        DB::table('villages')->insert(['id'=>69800, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Baru']);
        DB::table('villages')->insert(['id'=>69801, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Batu Panga']);
        DB::table('villages')->insert(['id'=>69802, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Batupanga Daala']);
        DB::table('villages')->insert(['id'=>69803, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Luyo (lujo)']);
        DB::table('villages')->insert(['id'=>69804, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Mambu']);
        DB::table('villages')->insert(['id'=>69805, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Mapilli Barat']);
        DB::table('villages')->insert(['id'=>69806, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Puccadi']);
        DB::table('villages')->insert(['id'=>69807, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Pussui']);
        DB::table('villages')->insert(['id'=>69808, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Pussui Barat']);
        DB::table('villages')->insert(['id'=>69809, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Sambali Wali']);
        DB::table('villages')->insert(['id'=>69810, 'districts_id'=>6042, 'zipcode'=>'91353', 'name'=>'Tenggelang (tenggelan)']);
        //Kecamatan Mapilli Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6043, 'city_id'=>368, 'name'=>'Mapilli']);
        DB::table('villages')->insert(['id'=>69811, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Beroangin']);
        DB::table('villages')->insert(['id'=>69812, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Bonne-bonne']);
        DB::table('villages')->insert(['id'=>69813, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Bonra']);
        DB::table('villages')->insert(['id'=>69814, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Buku']);
        DB::table('villages')->insert(['id'=>69815, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Kurma']);
        DB::table('villages')->insert(['id'=>69816, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Landi Kanusuang']);
        DB::table('villages')->insert(['id'=>69817, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Mapilli']);
        DB::table('villages')->insert(['id'=>69818, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Rappang Barat']);
        DB::table('villages')->insert(['id'=>69819, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Rumpa']);
        DB::table('villages')->insert(['id'=>69820, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Sattoko']);
        DB::table('villages')->insert(['id'=>69821, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Segerang']);
        DB::table('villages')->insert(['id'=>69822, 'districts_id'=>6043, 'zipcode'=>'91353', 'name'=>'Ugi Baru']);
        //Kecamatan Campalagian Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6044, 'city_id'=>368, 'name'=>'Campalagian']);
        DB::table('villages')->insert(['id'=>69823, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Bonde']);
        DB::table('villages')->insert(['id'=>69824, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Botto']);
        DB::table('villages')->insert(['id'=>69825, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Gattungan']);
        DB::table('villages')->insert(['id'=>69826, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Katumbangan']);
        DB::table('villages')->insert(['id'=>69827, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Katumbangan Lemo']);
        DB::table('villages')->insert(['id'=>69828, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Kenje']);
        DB::table('villages')->insert(['id'=>69829, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Lagi-agi']);
        DB::table('villages')->insert(['id'=>69830, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Laliko']);
        DB::table('villages')->insert(['id'=>69831, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Lampoko']);
        DB::table('villages')->insert(['id'=>69832, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Lapeo']);
        DB::table('villages')->insert(['id'=>69833, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Ongko']);
        DB::table('villages')->insert(['id'=>69834, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Padang']);
        DB::table('villages')->insert(['id'=>69835, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Padang Timur']);
        DB::table('villages')->insert(['id'=>69836, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Panyampa']);
        DB::table('villages')->insert(['id'=>69837, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Pappang']);
        DB::table('villages')->insert(['id'=>69838, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Parappe']);
        DB::table('villages')->insert(['id'=>69839, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Sumarang (sumarrang)']);
        DB::table('villages')->insert(['id'=>69840, 'districts_id'=>6044, 'zipcode'=>'91353', 'name'=>'Suruang']);
        //Kecamatan Bulo Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6045, 'city_id'=>368, 'name'=>'Bulo']);
        DB::table('villages')->insert(['id'=>69841, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Bulo']);
        DB::table('villages')->insert(['id'=>69842, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Daala Timur']);
        DB::table('villages')->insert(['id'=>69843, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Ihing']);
        DB::table('villages')->insert(['id'=>69844, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Karombang']);
        DB::table('villages')->insert(['id'=>69845, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Lenggo']);
        DB::table('villages')->insert(['id'=>69846, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Pulliwa']);
        DB::table('villages')->insert(['id'=>69847, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Sabura']);
        DB::table('villages')->insert(['id'=>69848, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Sepporraki']);
        DB::table('villages')->insert(['id'=>69849, 'districts_id'=>6045, 'zipcode'=>'91353', 'name'=>'Tapambanua (patambanua)']);
        //Kecamatan Balanipa Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6046, 'city_id'=>368, 'name'=>'Balanipa']);
        DB::table('villages')->insert(['id'=>69850, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Bala']);
        DB::table('villages')->insert(['id'=>69851, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Balanipa']);
        DB::table('villages')->insert(['id'=>69852, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Galung Tulu']);
        DB::table('villages')->insert(['id'=>69853, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Lambanan']);
        DB::table('villages')->insert(['id'=>69854, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Lego']);
        DB::table('villages')->insert(['id'=>69855, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Mosso']);
        DB::table('villages')->insert(['id'=>69856, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Pallis']);
        DB::table('villages')->insert(['id'=>69857, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Pambusuang']);
        DB::table('villages')->insert(['id'=>69858, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Sabang Subik']);
        DB::table('villages')->insert(['id'=>69859, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Tammangalle']);
        DB::table('villages')->insert(['id'=>69860, 'districts_id'=>6046, 'zipcode'=>'91354', 'name'=>'Tammejarra (tammajarra)']);
        //Kecamatan Tinambung Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6047, 'city_id'=>368, 'name'=>'Tinambung']);
        DB::table('villages')->insert(['id'=>69861, 'districts_id'=>6047, 'zipcode'=>'91354', 'name'=>'Batulaya']);
        DB::table('villages')->insert(['id'=>69862, 'districts_id'=>6047, 'zipcode'=>'91354', 'name'=>'Galung Lombok']);
        DB::table('villages')->insert(['id'=>69863, 'districts_id'=>6047, 'zipcode'=>'91354', 'name'=>'Karama']);
        DB::table('villages')->insert(['id'=>69864, 'districts_id'=>6047, 'zipcode'=>'91354', 'name'=>'Lekopadis']);
        DB::table('villages')->insert(['id'=>69865, 'districts_id'=>6047, 'zipcode'=>'91354', 'name'=>'Sepa Batu']);
        DB::table('villages')->insert(['id'=>69866, 'districts_id'=>6047, 'zipcode'=>'91354', 'name'=>'Tandung']);
        DB::table('villages')->insert(['id'=>69867, 'districts_id'=>6047, 'zipcode'=>'91354', 'name'=>'Tinambung']);
        DB::table('villages')->insert(['id'=>69868, 'districts_id'=>6047, 'zipcode'=>'91412', 'name'=>'Tangnga-tangnga']);
        //Kecamatan Tubbi Taramanu (tutar/tutallu) Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6048, 'city_id'=>368, 'name'=>'Tubbi Taramanu (tutar/tutallu)']);
        DB::table('villages')->insert(['id'=>69869, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Ambo Padang']);
        DB::table('villages')->insert(['id'=>69870, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Arabua']);
        DB::table('villages')->insert(['id'=>69871, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Besoangin']);
        DB::table('villages')->insert(['id'=>69872, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Besoangin Utara']);
        DB::table('villages')->insert(['id'=>69873, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Peburru']);
        DB::table('villages')->insert(['id'=>69874, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Piriang Tapiko']);
        DB::table('villages')->insert(['id'=>69875, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Poda']);
        DB::table('villages')->insert(['id'=>69876, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Pollewani']);
        DB::table('villages')->insert(['id'=>69877, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Ratte']);
        DB::table('villages')->insert(['id'=>69878, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Taloba']);
        DB::table('villages')->insert(['id'=>69879, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Taramanu']);
        DB::table('villages')->insert(['id'=>69880, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Taramanu Tua']);
        DB::table('villages')->insert(['id'=>69881, 'districts_id'=>6048, 'zipcode'=>'91355', 'name'=>'Tubbi']);
        //Kecamatan Limboro Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6049, 'city_id'=>368, 'name'=>'Limboro']);
        DB::table('villages')->insert(['id'=>69882, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Lembang Lembang']);
        DB::table('villages')->insert(['id'=>69883, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Limboro']);
        DB::table('villages')->insert(['id'=>69884, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Napo']);
        DB::table('villages')->insert(['id'=>69885, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Palece']);
        DB::table('villages')->insert(['id'=>69886, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Pendulangan (pandulangan)']);
        DB::table('villages')->insert(['id'=>69887, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Renggeang']);
        DB::table('villages')->insert(['id'=>69888, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Salarri']);
        DB::table('villages')->insert(['id'=>69889, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Samasundu']);
        DB::table('villages')->insert(['id'=>69890, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Tandasura (tandassura)']);
        DB::table('villages')->insert(['id'=>69891, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Tangan Baru']);
        DB::table('villages')->insert(['id'=>69892, 'districts_id'=>6049, 'zipcode'=>'91413', 'name'=>'Todang Todang']);
        //Kecamatan Alu (allu) Kab. Polewali Mandar Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6050, 'city_id'=>368, 'name'=>'Alu (allu)']);
        DB::table('villages')->insert(['id'=>69893, 'districts_id'=>6050, 'zipcode'=>'96365', 'name'=>'Alu (allu)']);
        DB::table('villages')->insert(['id'=>69894, 'districts_id'=>6050, 'zipcode'=>'96365', 'name'=>'Kalumammang']);
        DB::table('villages')->insert(['id'=>69895, 'districts_id'=>6050, 'zipcode'=>'96365', 'name'=>'Mombi']);
        DB::table('villages')->insert(['id'=>69896, 'districts_id'=>6050, 'zipcode'=>'96365', 'name'=>'Pao Pao']);
        DB::table('villages')->insert(['id'=>69897, 'districts_id'=>6050, 'zipcode'=>'96365', 'name'=>'Petoosang']);
        DB::table('villages')->insert(['id'=>69898, 'districts_id'=>6050, 'zipcode'=>'96365', 'name'=>'Pupu Uring (puppuring)']);
        DB::table('villages')->insert(['id'=>69899, 'districts_id'=>6050, 'zipcode'=>'96365', 'name'=>'Saragian']);
        DB::table('villages')->insert(['id'=>69900, 'districts_id'=>6050, 'zipcode'=>'96365', 'name'=>'Sayoang']);

        //Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('cities')->insert(['id'=>369, 'province_id'=>27, 'type'=>'regencies', 'name'=>'Mamuju']);
        //Kecamatan Tapalang Barat Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6051, 'city_id'=>369, 'name'=>'Tapalang Barat']);
        DB::table('villages')->insert(['id'=>69901, 'districts_id'=>6051, 'zipcode'=>'91352', 'name'=>'Ahu']);
        DB::table('villages')->insert(['id'=>69902, 'districts_id'=>6051, 'zipcode'=>'91352', 'name'=>'Dungkait']);
        DB::table('villages')->insert(['id'=>69903, 'districts_id'=>6051, 'zipcode'=>'91352', 'name'=>'Labuang Rano']);
        DB::table('villages')->insert(['id'=>69904, 'districts_id'=>6051, 'zipcode'=>'91352', 'name'=>'Lebani']);
        DB::table('villages')->insert(['id'=>69905, 'districts_id'=>6051, 'zipcode'=>'91352', 'name'=>'Pangasaan']);
        DB::table('villages')->insert(['id'=>69906, 'districts_id'=>6051, 'zipcode'=>'91352', 'name'=>'Pasabu (pasa Bu)']);
        DB::table('villages')->insert(['id'=>69907, 'districts_id'=>6051, 'zipcode'=>'91352', 'name'=>'Tanete Pao']);
        //Kecamatan Tapalang Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6052, 'city_id'=>369, 'name'=>'Tapalang']);
        DB::table('villages')->insert(['id'=>69908, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Bela']);
        DB::table('villages')->insert(['id'=>69909, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Galung']);
        DB::table('villages')->insert(['id'=>69910, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Kasambang']);
        DB::table('villages')->insert(['id'=>69911, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Kopeang']);
        DB::table('villages')->insert(['id'=>69912, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Orobatu']);
        DB::table('villages')->insert(['id'=>69913, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Rantedoda']);
        DB::table('villages')->insert(['id'=>69914, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Taang (ta\an)']);
        DB::table('villages')->insert(['id'=>69915, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Takandeang']);
        DB::table('villages')->insert(['id'=>69916, 'districts_id'=>6052, 'zipcode'=>'91352', 'name'=>'Tampalang']);
        //Kecamatan Mamuju Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6053, 'city_id'=>369, 'name'=>'Mamuju']);
        DB::table('villages')->insert(['id'=>69917, 'districts_id'=>6053, 'zipcode'=>'91511', 'name'=>'Batu Pannu']);
        DB::table('villages')->insert(['id'=>69918, 'districts_id'=>6053, 'zipcode'=>'91511', 'name'=>'Binanga']);
        DB::table('villages')->insert(['id'=>69919, 'districts_id'=>6053, 'zipcode'=>'91511', 'name'=>'Mamunyu']);
        DB::table('villages')->insert(['id'=>69920, 'districts_id'=>6053, 'zipcode'=>'91511', 'name'=>'Tadui']);
        DB::table('villages')->insert(['id'=>69921, 'districts_id'=>6053, 'zipcode'=>'91514', 'name'=>'Bambu']);
        DB::table('villages')->insert(['id'=>69922, 'districts_id'=>6053, 'zipcode'=>'91515', 'name'=>'Karampuang']);
        DB::table('villages')->insert(['id'=>69923, 'districts_id'=>6053, 'zipcode'=>'91515', 'name'=>'Karema']);
        DB::table('villages')->insert(['id'=>69924, 'districts_id'=>6053, 'zipcode'=>'91515', 'name'=>'Rimuku']);
        //Kecamatan Kep. Bala Balakang Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6054, 'city_id'=>369, 'name'=>'Kep. Bala Balakang']);
        DB::table('villages')->insert(['id'=>69925, 'districts_id'=>6054, 'zipcode'=>'91512', 'name'=>'Bala Balakang']);
        DB::table('villages')->insert(['id'=>69926, 'districts_id'=>6054, 'zipcode'=>'91512', 'name'=>'Bala Balakang Timur']);
        //Kecamatan Simboro Dan Kepulauan Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6055, 'city_id'=>369, 'name'=>'Simboro Dan Kepulauan']);
        DB::table('villages')->insert(['id'=>69927, 'districts_id'=>6055, 'zipcode'=>'91512', 'name'=>'Botteng']);
        DB::table('villages')->insert(['id'=>69928, 'districts_id'=>6055, 'zipcode'=>'91512', 'name'=>'Botteng Utara']);
        DB::table('villages')->insert(['id'=>69929, 'districts_id'=>6055, 'zipcode'=>'91512', 'name'=>'Kuptd Botteng I']);
        DB::table('villages')->insert(['id'=>69930, 'districts_id'=>6055, 'zipcode'=>'91512', 'name'=>'Kuptd Botteng Ii']);
        DB::table('villages')->insert(['id'=>69931, 'districts_id'=>6055, 'zipcode'=>'91512', 'name'=>'Rangas']);
        DB::table('villages')->insert(['id'=>69932, 'districts_id'=>6055, 'zipcode'=>'91512', 'name'=>'Salletto']);
        DB::table('villages')->insert(['id'=>69933, 'districts_id'=>6055, 'zipcode'=>'91512', 'name'=>'Simboro']);
        DB::table('villages')->insert(['id'=>69934, 'districts_id'=>6055, 'zipcode'=>'91513', 'name'=>'Sumare']);
        //Kecamatan Karossa Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6056, 'city_id'=>369, 'name'=>'Karossa']);
        DB::table('villages')->insert(['id'=>69935, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Kadaila']);
        DB::table('villages')->insert(['id'=>69936, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Kambunong']);
        DB::table('villages')->insert(['id'=>69937, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Karossa']);
        DB::table('villages')->insert(['id'=>69938, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Kayucalla']);
        DB::table('villages')->insert(['id'=>69939, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Lara']);
        DB::table('villages')->insert(['id'=>69940, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Lara Iii']);
        DB::table('villages')->insert(['id'=>69941, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Lembah Hopo']);
        DB::table('villages')->insert(['id'=>69942, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Mora Benggaulu']);
        DB::table('villages')->insert(['id'=>69943, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Mora Iv']);
        DB::table('villages')->insert(['id'=>69944, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Sukamaju']);
        DB::table('villages')->insert(['id'=>69945, 'districts_id'=>6056, 'zipcode'=>'91512', 'name'=>'Tasokko']);
        //Kecamatan Kalukku Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6057, 'city_id'=>369, 'name'=>'Kalukku']);
        DB::table('villages')->insert(['id'=>69946, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Bebanga']);
        DB::table('villages')->insert(['id'=>69947, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Belang-belang']);
        DB::table('villages')->insert(['id'=>69948, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Beru-beru']);
        DB::table('villages')->insert(['id'=>69949, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Guliling']);
        DB::table('villages')->insert(['id'=>69950, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Kabuloang']);
        DB::table('villages')->insert(['id'=>69951, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Kalukku']);
        DB::table('villages')->insert(['id'=>69952, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Kalukku Barat']);
        DB::table('villages')->insert(['id'=>69953, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Keang']);
        DB::table('villages')->insert(['id'=>69954, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Pammulukang']);
        DB::table('villages')->insert(['id'=>69955, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Pokkang']);
        DB::table('villages')->insert(['id'=>69956, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Sinyonyoi']);
        DB::table('villages')->insert(['id'=>69957, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Sondoang']);
        DB::table('villages')->insert(['id'=>69958, 'districts_id'=>6057, 'zipcode'=>'91561', 'name'=>'Uhaimate']);
        //Kecamatan Bonehau Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6058, 'city_id'=>369, 'name'=>'Bonehau']);
        DB::table('villages')->insert(['id'=>69959, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Banuada']);
        DB::table('villages')->insert(['id'=>69960, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Bonehau']);
        DB::table('villages')->insert(['id'=>69961, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Buttuada']);
        DB::table('villages')->insert(['id'=>69962, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Hinua']);
        DB::table('villages')->insert(['id'=>69963, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Kinatang']);
        DB::table('villages')->insert(['id'=>69964, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Lumika']);
        DB::table('villages')->insert(['id'=>69965, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Lumika I']);
        DB::table('villages')->insert(['id'=>69966, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Mappu']);
        DB::table('villages')->insert(['id'=>69967, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Salutiwo']);
        DB::table('villages')->insert(['id'=>69968, 'districts_id'=>6058, 'zipcode'=>'91562', 'name'=>'Tamalea (talondo I)']);
        //Kecamatan Kalumpang Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6059, 'city_id'=>369, 'name'=>'Kalumpang']);
        DB::table('villages')->insert(['id'=>69969, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Batu Makkada']);
        DB::table('villages')->insert(['id'=>69970, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Kalumpang']);
        DB::table('villages')->insert(['id'=>69971, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Karama']);
        DB::table('villages')->insert(['id'=>69972, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Karataun']);
        DB::table('villages')->insert(['id'=>69973, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Kondo Bulo']);
        DB::table('villages')->insert(['id'=>69974, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Lasa']);
        DB::table('villages')->insert(['id'=>69975, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Limbong']);
        DB::table('villages')->insert(['id'=>69976, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Makkaliki']);
        DB::table('villages')->insert(['id'=>69977, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Polio (ba\san)']);
        DB::table('villages')->insert(['id'=>69978, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Salumakki']);
        DB::table('villages')->insert(['id'=>69979, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Sandapang']);
        DB::table('villages')->insert(['id'=>69980, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Siraun']);
        DB::table('villages')->insert(['id'=>69981, 'districts_id'=>6059, 'zipcode'=>'91562', 'name'=>'Tumonga']);
        //Kecamatan Tommo Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6060, 'city_id'=>369, 'name'=>'Tommo']);
        DB::table('villages')->insert(['id'=>69982, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Buana Sakti']);
        DB::table('villages')->insert(['id'=>69983, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Campaloga']);
        DB::table('villages')->insert(['id'=>69984, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Kakulasang (kakullasan)']);
        DB::table('villages')->insert(['id'=>69985, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Kalepu']);
        DB::table('villages')->insert(['id'=>69986, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Leling']);
        DB::table('villages')->insert(['id'=>69987, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Leling Barat']);
        DB::table('villages')->insert(['id'=>69988, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Leling Utara']);
        DB::table('villages')->insert(['id'=>69989, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Malino']);
        DB::table('villages')->insert(['id'=>69990, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Rante Mario']);
        DB::table('villages')->insert(['id'=>69991, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Saludengen']);
        DB::table('villages')->insert(['id'=>69992, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Sandana']);
        DB::table('villages')->insert(['id'=>69993, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Tamejarra (tammejarra)']);
        DB::table('villages')->insert(['id'=>69994, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Tamemongga']);
        DB::table('villages')->insert(['id'=>69995, 'districts_id'=>6060, 'zipcode'=>'91562', 'name'=>'Tommo']);
        //Kecamatan Budong-budong Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6061, 'city_id'=>369, 'name'=>'Budong-budong']);
        DB::table('villages')->insert(['id'=>69996, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Babana']);
        DB::table('villages')->insert(['id'=>69997, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Barakkang']);
        DB::table('villages')->insert(['id'=>69998, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Bojo']);
        DB::table('villages')->insert(['id'=>69999, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Kire']);
        DB::table('villages')->insert(['id'=>70000, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Lembah Hada']);
        DB::table('villages')->insert(['id'=>70001, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Lumu']);
        DB::table('villages')->insert(['id'=>70002, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Passapa (pasapa)']);
        DB::table('villages')->insert(['id'=>70003, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Pontanakayang']);
        DB::table('villages')->insert(['id'=>70004, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Salugatta (salogatta)']);
        DB::table('villages')->insert(['id'=>70005, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Salumanurung']);
        DB::table('villages')->insert(['id'=>70006, 'districts_id'=>6061, 'zipcode'=>'91563', 'name'=>'Tinali']);
        //Kecamatan Tobadak Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6062, 'city_id'=>369, 'name'=>'Tobadak']);
        DB::table('villages')->insert(['id'=>70007, 'districts_id'=>6062, 'zipcode'=>'91563', 'name'=>'Bambadaru']);
        DB::table('villages')->insert(['id'=>70008, 'districts_id'=>6062, 'zipcode'=>'91563', 'name'=>'Batu Parigi']);
        DB::table('villages')->insert(['id'=>70009, 'districts_id'=>6062, 'zipcode'=>'91563', 'name'=>'Mahahe']);
        DB::table('villages')->insert(['id'=>70010, 'districts_id'=>6062, 'zipcode'=>'91563', 'name'=>'Palongaan']);
        DB::table('villages')->insert(['id'=>70011, 'districts_id'=>6062, 'zipcode'=>'91563', 'name'=>'Saluadak (salo Adak)']);
        DB::table('villages')->insert(['id'=>70012, 'districts_id'=>6062, 'zipcode'=>'91563', 'name'=>'Salubaja (salo Baja)']);
        DB::table('villages')->insert(['id'=>70013, 'districts_id'=>6062, 'zipcode'=>'91563', 'name'=>'Sejati']);
        DB::table('villages')->insert(['id'=>70014, 'districts_id'=>6062, 'zipcode'=>'91563', 'name'=>'Tobadak']);
        //Kecamatan Topoyo Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6063, 'city_id'=>369, 'name'=>'Topoyo']);
        DB::table('villages')->insert(['id'=>70015, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Bambamanurung']);
        DB::table('villages')->insert(['id'=>70016, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Budong-budong']);
        DB::table('villages')->insert(['id'=>70017, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Kabubu']);
        DB::table('villages')->insert(['id'=>70018, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Pangalloang']);
        DB::table('villages')->insert(['id'=>70019, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Paraili']);
        DB::table('villages')->insert(['id'=>70020, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Salulekbo']);
        DB::table('villages')->insert(['id'=>70021, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Salupangkang (salopangkang)']);
        DB::table('villages')->insert(['id'=>70022, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Salupangkang Iv (salupangkang Iv)']);
        DB::table('villages')->insert(['id'=>70023, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Sinabatta']);
        DB::table('villages')->insert(['id'=>70024, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Tabolang']);
        DB::table('villages')->insert(['id'=>70025, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Tangkau (tangkou)']);
        DB::table('villages')->insert(['id'=>70026, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Tapilina (tappilina)']);
        DB::table('villages')->insert(['id'=>70027, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Topoyo']);
        DB::table('villages')->insert(['id'=>70028, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Tumbu']);
        DB::table('villages')->insert(['id'=>70029, 'districts_id'=>6063, 'zipcode'=>'91563', 'name'=>'Waeputeh']);
        //Kecamatan Papalang Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6064, 'city_id'=>369, 'name'=>'Papalang']);
        DB::table('villages')->insert(['id'=>70030, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Batu Ampa']);
        DB::table('villages')->insert(['id'=>70031, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Boda-boda']);
        DB::table('villages')->insert(['id'=>70032, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Bonda']);
        DB::table('villages')->insert(['id'=>70033, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Papalang']);
        DB::table('villages')->insert(['id'=>70034, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Salukayu (salokayu)']);
        DB::table('villages')->insert(['id'=>70035, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Sisango']);
        DB::table('villages')->insert(['id'=>70036, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Sukadamai']);
        DB::table('villages')->insert(['id'=>70037, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Toabo']);
        DB::table('villages')->insert(['id'=>70038, 'districts_id'=>6064, 'zipcode'=>'91563', 'name'=>'Topare (tapore)']);
        //Kecamatan Sampaga Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6065, 'city_id'=>369, 'name'=>'Sampaga']);
        DB::table('villages')->insert(['id'=>70039, 'districts_id'=>6065, 'zipcode'=>'91563', 'name'=>'Bunde']);
        DB::table('villages')->insert(['id'=>70040, 'districts_id'=>6065, 'zipcode'=>'91563', 'name'=>'Kalonding']);
        DB::table('villages')->insert(['id'=>70041, 'districts_id'=>6065, 'zipcode'=>'91563', 'name'=>'Losso']);
        DB::table('villages')->insert(['id'=>70042, 'districts_id'=>6065, 'zipcode'=>'91563', 'name'=>'Salubarana']);
        DB::table('villages')->insert(['id'=>70043, 'districts_id'=>6065, 'zipcode'=>'91563', 'name'=>'Sampaga']);
        DB::table('villages')->insert(['id'=>70044, 'districts_id'=>6065, 'zipcode'=>'91563', 'name'=>'Tanam Buah (tanambua)']);
        DB::table('villages')->insert(['id'=>70045, 'districts_id'=>6065, 'zipcode'=>'91563', 'name'=>'Tarailu']);
        //Kecamatan Pangale Kab. Mamuju Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6066, 'city_id'=>369, 'name'=>'Pangale']);
        DB::table('villages')->insert(['id'=>70046, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Kombiling']);
        DB::table('villages')->insert(['id'=>70047, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Kuo']);
        DB::table('villages')->insert(['id'=>70048, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Lamba-lamba']);
        DB::table('villages')->insert(['id'=>70049, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Lemo-lemo']);
        DB::table('villages')->insert(['id'=>70050, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Pangale']);
        DB::table('villages')->insert(['id'=>70051, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Polocamba']);
        DB::table('villages')->insert(['id'=>70052, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Pololereng']);
        DB::table('villages')->insert(['id'=>70053, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Polopangale']);
        DB::table('villages')->insert(['id'=>70054, 'districts_id'=>6066, 'zipcode'=>'91563', 'name'=>'Sartanama']);

        //Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('cities')->insert(['id'=>370, 'province_id'=>27, 'type'=>'regencies', 'name'=>'Mamasa']);
        //Kecamatan Sumarorong Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6067, 'city_id'=>370, 'name'=>'Sumarorong']);
        DB::table('villages')->insert(['id'=>70055, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Banea']);
        DB::table('villages')->insert(['id'=>70056, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Batang Uru']);
        DB::table('villages')->insert(['id'=>70057, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Batangnguru Timur']);
        DB::table('villages')->insert(['id'=>70058, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Salubalo']);
        DB::table('villages')->insert(['id'=>70059, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Sasakan']);
        DB::table('villages')->insert(['id'=>70060, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Sibanawa']);
        DB::table('villages')->insert(['id'=>70061, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Sumarorong']);
        DB::table('villages')->insert(['id'=>70062, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Tabone']);
        DB::table('villages')->insert(['id'=>70063, 'districts_id'=>6067, 'zipcode'=>'91361', 'name'=>'Tadisi']);
        //Kecamatan Messawa Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6068, 'city_id'=>370, 'name'=>'Messawa']);
        DB::table('villages')->insert(['id'=>70064, 'districts_id'=>6068, 'zipcode'=>'91361', 'name'=>'Makuang']);
        DB::table('villages')->insert(['id'=>70065, 'districts_id'=>6068, 'zipcode'=>'91361', 'name'=>'Malimbong']);
        DB::table('villages')->insert(['id'=>70066, 'districts_id'=>6068, 'zipcode'=>'91361', 'name'=>'Matande']);
        DB::table('villages')->insert(['id'=>70067, 'districts_id'=>6068, 'zipcode'=>'91361', 'name'=>'Messawa']);
        DB::table('villages')->insert(['id'=>70068, 'districts_id'=>6068, 'zipcode'=>'91361', 'name'=>'Pasma Mambu']);
        DB::table('villages')->insert(['id'=>70069, 'districts_id'=>6068, 'zipcode'=>'91361', 'name'=>'Rippung']);
        DB::table('villages')->insert(['id'=>70070, 'districts_id'=>6068, 'zipcode'=>'91361', 'name'=>'Sepang']);
        DB::table('villages')->insert(['id'=>70071, 'districts_id'=>6068, 'zipcode'=>'91361', 'name'=>'Sipai']);
        //Kecamatan Mamasa Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6069, 'city_id'=>370, 'name'=>'Mamasa']);
        DB::table('villages')->insert(['id'=>70072, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Bombong Lambe']);
        DB::table('villages')->insert(['id'=>70073, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Buntu Buda']);
        DB::table('villages')->insert(['id'=>70074, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Lambanan']);
        DB::table('villages')->insert(['id'=>70075, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Mamasa']);
        DB::table('villages')->insert(['id'=>70076, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Mambuliling']);
        DB::table('villages')->insert(['id'=>70077, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Mbana Salulo']);
        DB::table('villages')->insert(['id'=>70078, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Osango']);
        DB::table('villages')->insert(['id'=>70079, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Pebassian']);
        DB::table('villages')->insert(['id'=>70080, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Rambusaratu']);
        DB::table('villages')->insert(['id'=>70081, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Taupe']);
        DB::table('villages')->insert(['id'=>70082, 'districts_id'=>6069, 'zipcode'=>'91362', 'name'=>'Tondok Bakaru']);
        //Kecamatan Nosu Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6070, 'city_id'=>370, 'name'=>'Nosu']);
        DB::table('villages')->insert(['id'=>70083, 'districts_id'=>6070, 'zipcode'=>'91363', 'name'=>'Batupapan']);
        DB::table('villages')->insert(['id'=>70084, 'districts_id'=>6070, 'zipcode'=>'91363', 'name'=>'Masewwe']);
        DB::table('villages')->insert(['id'=>70085, 'districts_id'=>6070, 'zipcode'=>'91363', 'name'=>'Minanga']);
        DB::table('villages')->insert(['id'=>70086, 'districts_id'=>6070, 'zipcode'=>'91363', 'name'=>'Minanga Timur']);
        DB::table('villages')->insert(['id'=>70087, 'districts_id'=>6070, 'zipcode'=>'91363', 'name'=>'Nosu']);
        DB::table('villages')->insert(['id'=>70088, 'districts_id'=>6070, 'zipcode'=>'91363', 'name'=>'Siwi']);
        //Kecamatan Pana Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6071, 'city_id'=>370, 'name'=>'Pana']);
        DB::table('villages')->insert(['id'=>70089, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Datubaringan']);
        DB::table('villages')->insert(['id'=>70090, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Karaka']);
        DB::table('villages')->insert(['id'=>70091, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Mamullu']);
        DB::table('villages')->insert(['id'=>70092, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Manipi']);
        DB::table('villages')->insert(['id'=>70093, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Pana']);
        DB::table('villages')->insert(['id'=>70094, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Panura']);
        DB::table('villages')->insert(['id'=>70095, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Sapan']);
        DB::table('villages')->insert(['id'=>70096, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Tallang Bulawan']);
        DB::table('villages')->insert(['id'=>70097, 'districts_id'=>6071, 'zipcode'=>'91363', 'name'=>'Ulusalu']);
        //Kecamatan Tabang Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6072, 'city_id'=>370, 'name'=>'Tabang']);
        DB::table('villages')->insert(['id'=>70098, 'districts_id'=>6072, 'zipcode'=>'91364', 'name'=>'Bakadisura']);
        DB::table('villages')->insert(['id'=>70099, 'districts_id'=>6072, 'zipcode'=>'91364', 'name'=>'Kalama']);
        DB::table('villages')->insert(['id'=>70100, 'districts_id'=>6072, 'zipcode'=>'91364', 'name'=>'Masupu']);
        DB::table('villages')->insert(['id'=>70101, 'districts_id'=>6072, 'zipcode'=>'91364', 'name'=>'Tabang']);
        DB::table('villages')->insert(['id'=>70102, 'districts_id'=>6072, 'zipcode'=>'91364', 'name'=>'Tabang Barat']);
        DB::table('villages')->insert(['id'=>70103, 'districts_id'=>6072, 'zipcode'=>'91364', 'name'=>'Tadokalua']);
        //Kecamatan Tawalian Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6073, 'city_id'=>370, 'name'=>'Tawalian']);
        DB::table('villages')->insert(['id'=>70104, 'districts_id'=>6073, 'zipcode'=>'91365', 'name'=>'Kariango']);
        DB::table('villages')->insert(['id'=>70105, 'districts_id'=>6073, 'zipcode'=>'91365', 'name'=>'Rante Tangnga']);
        DB::table('villages')->insert(['id'=>70106, 'districts_id'=>6073, 'zipcode'=>'91365', 'name'=>'Tawalian']);
        DB::table('villages')->insert(['id'=>70107, 'districts_id'=>6073, 'zipcode'=>'91365', 'name'=>'Tawalian Timur']);
        //Kecamatan Sesena Padang Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6074, 'city_id'=>370, 'name'=>'Sesena Padang']);
        DB::table('villages')->insert(['id'=>70108, 'districts_id'=>6074, 'zipcode'=>'91365', 'name'=>'Lisuan Ada']);
        DB::table('villages')->insert(['id'=>70109, 'districts_id'=>6074, 'zipcode'=>'91365', 'name'=>'Malangkena Padang']);
        DB::table('villages')->insert(['id'=>70110, 'districts_id'=>6074, 'zipcode'=>'91365', 'name'=>'Orobua']);
        DB::table('villages')->insert(['id'=>70111, 'districts_id'=>6074, 'zipcode'=>'91365', 'name'=>'Orobua Selatan']);
        DB::table('villages')->insert(['id'=>70112, 'districts_id'=>6074, 'zipcode'=>'91365', 'name'=>'Orobua Timur']);
        DB::table('villages')->insert(['id'=>70113, 'districts_id'=>6074, 'zipcode'=>'91365', 'name'=>'Paladan']);
        DB::table('villages')->insert(['id'=>70114, 'districts_id'=>6074, 'zipcode'=>'91365', 'name'=>'Rante Puang']);
        DB::table('villages')->insert(['id'=>70115, 'districts_id'=>6074, 'zipcode'=>'91365', 'name'=>'Satenetean']);
        //Kecamatan Balla Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6075, 'city_id'=>370, 'name'=>'Balla']);
        DB::table('villages')->insert(['id'=>70116, 'districts_id'=>6075, 'zipcode'=>'91366', 'name'=>'Balla']);
        DB::table('villages')->insert(['id'=>70117, 'districts_id'=>6075, 'zipcode'=>'91366', 'name'=>'Balla Barat']);
        DB::table('villages')->insert(['id'=>70118, 'districts_id'=>6075, 'zipcode'=>'91366', 'name'=>'Balla Satanetean']);
        DB::table('villages')->insert(['id'=>70119, 'districts_id'=>6075, 'zipcode'=>'91366', 'name'=>'Balla Tumuka']);
        DB::table('villages')->insert(['id'=>70120, 'districts_id'=>6075, 'zipcode'=>'91366', 'name'=>'Pidara']);
        DB::table('villages')->insert(['id'=>70121, 'districts_id'=>6075, 'zipcode'=>'91366', 'name'=>'Sipakuan']);
        //Kecamatan Tanduk Kalua Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6076, 'city_id'=>370, 'name'=>'Tanduk Kalua']);
        DB::table('villages')->insert(['id'=>70122, 'districts_id'=>6076, 'zipcode'=>'91366', 'name'=>'Ballabatu']);
        DB::table('villages')->insert(['id'=>70123, 'districts_id'=>6076, 'zipcode'=>'91366', 'name'=>'Malabo']);
        DB::table('villages')->insert(['id'=>70124, 'districts_id'=>6076, 'zipcode'=>'91366', 'name'=>'Mannababa']);
        DB::table('villages')->insert(['id'=>70125, 'districts_id'=>6076, 'zipcode'=>'91366', 'name'=>'Mesakada']);
        DB::table('villages')->insert(['id'=>70126, 'districts_id'=>6076, 'zipcode'=>'91366', 'name'=>'Minake']);
        DB::table('villages')->insert(['id'=>70127, 'districts_id'=>6076, 'zipcode'=>'91366', 'name'=>'Parondobulawan']);
        DB::table('villages')->insert(['id'=>70128, 'districts_id'=>6076, 'zipcode'=>'91366', 'name'=>'Sindagamanik']);
        DB::table('villages')->insert(['id'=>70129, 'districts_id'=>6076, 'zipcode'=>'91366', 'name'=>'Tamalantik']);
        //Kecamatan Bambang Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6077, 'city_id'=>370, 'name'=>'Bambang']);
        DB::table('villages')->insert(['id'=>70130, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Bambang']);
        DB::table('villages')->insert(['id'=>70131, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Bambang Timur']);
        DB::table('villages')->insert(['id'=>70132, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Lembang Mokallang']);
        DB::table('villages')->insert(['id'=>70133, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Limbadebata']);
        DB::table('villages')->insert(['id'=>70134, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Masoso']);
        DB::table('villages')->insert(['id'=>70135, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Minanga']);
        DB::table('villages')->insert(['id'=>70136, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Rantelemo']);
        DB::table('villages')->insert(['id'=>70137, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Saluassing']);
        DB::table('villages')->insert(['id'=>70138, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Salubulo']);
        DB::table('villages')->insert(['id'=>70139, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Salukadi']);
        DB::table('villages')->insert(['id'=>70140, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Salukepopok']);
        DB::table('villages')->insert(['id'=>70141, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Salundengen']);
        DB::table('villages')->insert(['id'=>70142, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Sikamase']);
        DB::table('villages')->insert(['id'=>70143, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Tanete Tomba']);
        DB::table('villages')->insert(['id'=>70144, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Ulumambi']);
        DB::table('villages')->insert(['id'=>70145, 'districts_id'=>6077, 'zipcode'=>'91371', 'name'=>'Ulumambi Barat']);
        //Kecamatan Rantebulahan Timur Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6078, 'city_id'=>370, 'name'=>'Rantebulahan Timur']);
        DB::table('villages')->insert(['id'=>70146, 'districts_id'=>6078, 'zipcode'=>'91371', 'name'=>'Bambang Buda']);
        DB::table('villages')->insert(['id'=>70147, 'districts_id'=>6078, 'zipcode'=>'91371', 'name'=>'Buangin']);
        DB::table('villages')->insert(['id'=>70148, 'districts_id'=>6078, 'zipcode'=>'91371', 'name'=>'Leko']);
        DB::table('villages')->insert(['id'=>70149, 'districts_id'=>6078, 'zipcode'=>'91371', 'name'=>'Salumokanan']);
        DB::table('villages')->insert(['id'=>70150, 'districts_id'=>6078, 'zipcode'=>'91371', 'name'=>'Salumokanan Barat']);
        DB::table('villages')->insert(['id'=>70151, 'districts_id'=>6078, 'zipcode'=>'91371', 'name'=>'Salumokanan Utara']);
        //Kecamatan Mehalaan Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6079, 'city_id'=>370, 'name'=>'Mehalaan']);
        DB::table('villages')->insert(['id'=>70152, 'districts_id'=>6079, 'zipcode'=>'91371', 'name'=>'Botteng']);
        DB::table('villages')->insert(['id'=>70153, 'districts_id'=>6079, 'zipcode'=>'91371', 'name'=>'Mehalaan']);
        DB::table('villages')->insert(['id'=>70154, 'districts_id'=>6079, 'zipcode'=>'91371', 'name'=>'Mesakada']);
        DB::table('villages')->insert(['id'=>70155, 'districts_id'=>6079, 'zipcode'=>'91371', 'name'=>'Salukonta']);
        //Kecamatan Mambi Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6080, 'city_id'=>370, 'name'=>'Mambi']);
        DB::table('villages')->insert(['id'=>70156, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Bujung Manurung']);
        DB::table('villages')->insert(['id'=>70157, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Mambi']);
        DB::table('villages')->insert(['id'=>70158, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Pamoseang']);
        DB::table('villages')->insert(['id'=>70159, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Rante Bulahan']);
        DB::table('villages')->insert(['id'=>70160, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Salubanua']);
        DB::table('villages')->insert(['id'=>70161, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Selumaka']);
        DB::table('villages')->insert(['id'=>70162, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Sendana']);
        DB::table('villages')->insert(['id'=>70163, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Sondonglayu']);
        DB::table('villages')->insert(['id'=>70164, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Talipukki']);
        DB::table('villages')->insert(['id'=>70165, 'districts_id'=>6080, 'zipcode'=>'91371', 'name'=>'Tapalina']);
        //Kecamatan Tabulahan Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6081, 'city_id'=>370, 'name'=>'Tabulahan']);
        DB::table('villages')->insert(['id'=>70166, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Burana']);
        DB::table('villages')->insert(['id'=>70167, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Gandang Dewata']);
        DB::table('villages')->insert(['id'=>70168, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Lakahang']);
        DB::table('villages')->insert(['id'=>70169, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Malatiro']);
        DB::table('villages')->insert(['id'=>70170, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Pangandaran']);
        DB::table('villages')->insert(['id'=>70171, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Periangan']);
        DB::table('villages')->insert(['id'=>70172, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Salubakka']);
        DB::table('villages')->insert(['id'=>70173, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Saluleang']);
        DB::table('villages')->insert(['id'=>70174, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Tabulahan']);
        DB::table('villages')->insert(['id'=>70175, 'districts_id'=>6081, 'zipcode'=>'91372', 'name'=>'Tampak Kurra']);
        //Kecamatan Aralle (arrale) Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6082, 'city_id'=>370, 'name'=>'Aralle (arrale)']);
        DB::table('villages')->insert(['id'=>70176, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Aralle']);
        DB::table('villages')->insert(['id'=>70177, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Aralle Utara']);
        DB::table('villages')->insert(['id'=>70178, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Baruru']);
        DB::table('villages')->insert(['id'=>70179, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Pamoseang Pangga']);
        DB::table('villages')->insert(['id'=>70180, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Panetean']);
        DB::table('villages')->insert(['id'=>70181, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Ralle Anak']);
        DB::table('villages')->insert(['id'=>70182, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Ralleanak Utara']);
        DB::table('villages')->insert(['id'=>70183, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Uhaidaho']);
        DB::table('villages')->insert(['id'=>70184, 'districts_id'=>6082, 'zipcode'=>'91373', 'name'=>'Uhailanu']);
        //Kecamatan Buntumalangka Kab. Mamasa Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6083, 'city_id'=>370, 'name'=>'Buntumalangka']);
        DB::table('villages')->insert(['id'=>70185, 'districts_id'=>6083, 'zipcode'=>'91373', 'name'=>'Aralle Timur']);
        DB::table('villages')->insert(['id'=>70186, 'districts_id'=>6083, 'zipcode'=>'91373', 'name'=>'Buntu Malangka']);
        DB::table('villages')->insert(['id'=>70187, 'districts_id'=>6083, 'zipcode'=>'91373', 'name'=>'Kabae']);
        DB::table('villages')->insert(['id'=>70188, 'districts_id'=>6083, 'zipcode'=>'91373', 'name'=>'Kebanga']);
        DB::table('villages')->insert(['id'=>70189, 'districts_id'=>6083, 'zipcode'=>'91373', 'name'=>'Ranteberan (rante Berang)']);
        DB::table('villages')->insert(['id'=>70190, 'districts_id'=>6083, 'zipcode'=>'91373', 'name'=>'Salurindu']);
        DB::table('villages')->insert(['id'=>70191, 'districts_id'=>6083, 'zipcode'=>'91373', 'name'=>'Salutambun']);
        DB::table('villages')->insert(['id'=>70192, 'districts_id'=>6083, 'zipcode'=>'91373', 'name'=>'Taora']);

        //Kab. Majene Provinsi Sulawesi Barat
        DB::table('cities')->insert(['id'=>371, 'province_id'=>27, 'type'=>'regencies', 'name'=>'Majene']);
        //Kecamatan Banggae Kab. Majene Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6084, 'city_id'=>371, 'name'=>'Banggae']);
        DB::table('villages')->insert(['id'=>70193, 'districts_id'=>6084, 'zipcode'=>'91411', 'name'=>'Banggae']);
        DB::table('villages')->insert(['id'=>70194, 'districts_id'=>6084, 'zipcode'=>'91411', 'name'=>'Galung']);
        DB::table('villages')->insert(['id'=>70195, 'districts_id'=>6084, 'zipcode'=>'91411', 'name'=>'Pangali-ali']);
        DB::table('villages')->insert(['id'=>70196, 'districts_id'=>6084, 'zipcode'=>'91415', 'name'=>'Baru']);
        DB::table('villages')->insert(['id'=>70197, 'districts_id'=>6084, 'zipcode'=>'91415', 'name'=>'Palipi Soreang']);
        DB::table('villages')->insert(['id'=>70198, 'districts_id'=>6084, 'zipcode'=>'91415', 'name'=>'Pamboborang']);
        DB::table('villages')->insert(['id'=>70199, 'districts_id'=>6084, 'zipcode'=>'91415', 'name'=>'Rangas']);
        DB::table('villages')->insert(['id'=>70200, 'districts_id'=>6084, 'zipcode'=>'91415', 'name'=>'Totoli']);
        //Kecamatan Banggae Timur Kab. Majene Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6085, 'city_id'=>371, 'name'=>'Banggae Timur']);
        DB::table('villages')->insert(['id'=>70201, 'districts_id'=>6085, 'zipcode'=>'91411', 'name'=>'Baruga Dua']);
        DB::table('villages')->insert(['id'=>70202, 'districts_id'=>6085, 'zipcode'=>'91412', 'name'=>'Baurung']);
        DB::table('villages')->insert(['id'=>70203, 'districts_id'=>6085, 'zipcode'=>'91412', 'name'=>'Labuang']);
        DB::table('villages')->insert(['id'=>70204, 'districts_id'=>6085, 'zipcode'=>'91413', 'name'=>'Buttu Baruga']);
        DB::table('villages')->insert(['id'=>70205, 'districts_id'=>6085, 'zipcode'=>'91413', 'name'=>'Labuang Utara']);
        DB::table('villages')->insert(['id'=>70206, 'districts_id'=>6085, 'zipcode'=>'91413', 'name'=>'Lembang']);
        DB::table('villages')->insert(['id'=>70207, 'districts_id'=>6085, 'zipcode'=>'91413', 'name'=>'Tande']);
        DB::table('villages')->insert(['id'=>70208, 'districts_id'=>6085, 'zipcode'=>'91413', 'name'=>'Tande Timur']);
        DB::table('villages')->insert(['id'=>70209, 'districts_id'=>6085, 'zipcode'=>'91414', 'name'=>'Baruga']);
        //Kecamatan Pamboang Kab. Majene Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6086, 'city_id'=>371, 'name'=>'Pamboang']);
        DB::table('villages')->insert(['id'=>70210, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Adolang']);
        DB::table('villages')->insert(['id'=>70211, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Adolang Dhua']);
        DB::table('villages')->insert(['id'=>70212, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Bababulo']);
        DB::table('villages')->insert(['id'=>70213, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Bababulo Utara']);
        DB::table('villages')->insert(['id'=>70214, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Balombong']);
        DB::table('villages')->insert(['id'=>70215, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Banua Adolang']);
        DB::table('villages')->insert(['id'=>70216, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Betteng']);
        DB::table('villages')->insert(['id'=>70217, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Bonde']);
        DB::table('villages')->insert(['id'=>70218, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Bonde Utara']);
        DB::table('villages')->insert(['id'=>70219, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Buttu Pamboang']);
        DB::table('villages')->insert(['id'=>70220, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Lalampanua']);
        DB::table('villages')->insert(['id'=>70221, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Pesuloang']);
        DB::table('villages')->insert(['id'=>70222, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Simbang']);
        DB::table('villages')->insert(['id'=>70223, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Sirindu']);
        DB::table('villages')->insert(['id'=>70224, 'districts_id'=>6086, 'zipcode'=>'91451', 'name'=>'Tinambung']);
        //Kecamatan Tammeredo Sendana Kab. Majene Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6087, 'city_id'=>371, 'name'=>'Tammeredo Sendana']);
        DB::table('villages')->insert(['id'=>70225, 'districts_id'=>6087, 'zipcode'=>'91452', 'name'=>'Awo']);
        DB::table('villages')->insert(['id'=>70226, 'districts_id'=>6087, 'zipcode'=>'91452', 'name'=>'Manyamba']);
        DB::table('villages')->insert(['id'=>70227, 'districts_id'=>6087, 'zipcode'=>'91452', 'name'=>'Seppong']);
        DB::table('villages')->insert(['id'=>70228, 'districts_id'=>6087, 'zipcode'=>'91452', 'name'=>'Tallambalao']);
        DB::table('villages')->insert(['id'=>70229, 'districts_id'=>6087, 'zipcode'=>'91452', 'name'=>'Tammerodo']);
        DB::table('villages')->insert(['id'=>70230, 'districts_id'=>6087, 'zipcode'=>'91452', 'name'=>'Tammerodo Utara']);
        DB::table('villages')->insert(['id'=>70231, 'districts_id'=>6087, 'zipcode'=>'91452', 'name'=>'Ulidang']);
        //Kecamatan Sendana Kab. Majene Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6088, 'city_id'=>371, 'name'=>'Sendana']);
        DB::table('villages')->insert(['id'=>70232, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Banua Sendana']);
        DB::table('villages')->insert(['id'=>70233, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Binanga']);
        DB::table('villages')->insert(['id'=>70234, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Bukit Samang']);
        DB::table('villages')->insert(['id'=>70235, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Lalatedzong']);
        DB::table('villages')->insert(['id'=>70236, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Leppangang']);
        DB::table('villages')->insert(['id'=>70237, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Limboro Rambu-rambu']);
        DB::table('villages')->insert(['id'=>70238, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Limbua']);
        DB::table('villages')->insert(['id'=>70239, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Mosso']);
        DB::table('villages')->insert(['id'=>70240, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Mosso Dua']);
        DB::table('villages')->insert(['id'=>70241, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Paminggalan']);
        DB::table('villages')->insert(['id'=>70242, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Pundau']);
        DB::table('villages')->insert(['id'=>70243, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Puttada']);
        DB::table('villages')->insert(['id'=>70244, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Sendana']);
        DB::table('villages')->insert(['id'=>70245, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Sendana']);
        DB::table('villages')->insert(['id'=>70246, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Tallubanua Utara']);
        DB::table('villages')->insert(['id'=>70247, 'districts_id'=>6088, 'zipcode'=>'91452', 'name'=>'Tallum Banua']);
        //Kecamatan Tubo (tubo Sendana) Kab. Majene Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6089, 'city_id'=>371, 'name'=>'Tubo (tubo Sendana)']);
        DB::table('villages')->insert(['id'=>70248, 'districts_id'=>6089, 'zipcode'=>'91452', 'name'=>'Bonde Bonde']);
        DB::table('villages')->insert(['id'=>70249, 'districts_id'=>6089, 'zipcode'=>'91452', 'name'=>'Onang Selatan']);
        DB::table('villages')->insert(['id'=>70250, 'districts_id'=>6089, 'zipcode'=>'91452', 'name'=>'Onang Utara']);
        DB::table('villages')->insert(['id'=>70251, 'districts_id'=>6089, 'zipcode'=>'91452', 'name'=>'Tubo']);
        DB::table('villages')->insert(['id'=>70252, 'districts_id'=>6089, 'zipcode'=>'91452', 'name'=>'Tubo Poang']);
        DB::table('villages')->insert(['id'=>70253, 'districts_id'=>6089, 'zipcode'=>'91452', 'name'=>'Tubo Selatan']);
        DB::table('villages')->insert(['id'=>70254, 'districts_id'=>6089, 'zipcode'=>'91452', 'name'=>'Tubo Tengah']);
        //Kecamatan Malunda Kab. Majene Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6090, 'city_id'=>371, 'name'=>'Malunda']);
        DB::table('villages')->insert(['id'=>70255, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Bambangan']);
        DB::table('villages')->insert(['id'=>70256, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Kayuangin']);
        DB::table('villages')->insert(['id'=>70257, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Lamungang Batu']);
        DB::table('villages')->insert(['id'=>70258, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Lombang']);
        DB::table('villages')->insert(['id'=>70259, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Lombang Timur']);
        DB::table('villages')->insert(['id'=>70260, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Lombong']);
        DB::table('villages')->insert(['id'=>70261, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Lombong Timur']);
        DB::table('villages')->insert(['id'=>70262, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Maliaya']);
        DB::table('villages')->insert(['id'=>70263, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Malunda']);
        DB::table('villages')->insert(['id'=>70264, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Mekkatta']);
        DB::table('villages')->insert(['id'=>70265, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Mekkatta Selatan']);
        DB::table('villages')->insert(['id'=>70266, 'districts_id'=>6090, 'zipcode'=>'91453', 'name'=>'Salutahongan']);
        //Kecamatan Ulumunda Kab. Majene Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6091, 'city_id'=>371, 'name'=>'Ulumunda']);
        DB::table('villages')->insert(['id'=>70267, 'districts_id'=>6091, 'zipcode'=>'91453', 'name'=>'Kabiraan']);
        DB::table('villages')->insert(['id'=>70268, 'districts_id'=>6091, 'zipcode'=>'91453', 'name'=>'Panggalo']);
        DB::table('villages')->insert(['id'=>70269, 'districts_id'=>6091, 'zipcode'=>'91453', 'name'=>'Popenga']);
        DB::table('villages')->insert(['id'=>70270, 'districts_id'=>6091, 'zipcode'=>'91453', 'name'=>'Salutambung']);
        DB::table('villages')->insert(['id'=>70271, 'districts_id'=>6091, 'zipcode'=>'91453', 'name'=>'Sambabo']);
        DB::table('villages')->insert(['id'=>70272, 'districts_id'=>6091, 'zipcode'=>'91453', 'name'=>'Sulai']);
        DB::table('villages')->insert(['id'=>70273, 'districts_id'=>6091, 'zipcode'=>'91453', 'name'=>'Tandeallo']);
        DB::table('villages')->insert(['id'=>70274, 'districts_id'=>6091, 'zipcode'=>'91453', 'name'=>'Ulumanda']);

        //Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('cities')->insert(['id'=>372, 'province_id'=>27, 'type'=>'regencies', 'name'=>'Mamuju Utara']);
        //Kecamatan Dapurang Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6092, 'city_id'=>372, 'name'=>'Dapurang']);
        DB::table('villages')->insert(['id'=>70275, 'districts_id'=>6092, 'zipcode'=>'91512', 'name'=>'Benggaulu']);
        DB::table('villages')->insert(['id'=>70276, 'districts_id'=>6092, 'zipcode'=>'91573', 'name'=>'Bulu Bonggu']);
        DB::table('villages')->insert(['id'=>70277, 'districts_id'=>6092, 'zipcode'=>'91573', 'name'=>'Dapurang']);
        DB::table('villages')->insert(['id'=>70278, 'districts_id'=>6092, 'zipcode'=>'91573', 'name'=>'Serasa']);
        DB::table('villages')->insert(['id'=>70279, 'districts_id'=>6092, 'zipcode'=>'91573', 'name'=>'Tirta Buana']);
        //Kecamatan Pasangkayu Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6093, 'city_id'=>372, 'name'=>'Pasangkayu']);
        DB::table('villages')->insert(['id'=>70280, 'districts_id'=>6093, 'zipcode'=>'91571', 'name'=>'Ako']);
        DB::table('villages')->insert(['id'=>70281, 'districts_id'=>6093, 'zipcode'=>'91571', 'name'=>'Karya Bersama']);
        DB::table('villages')->insert(['id'=>70282, 'districts_id'=>6093, 'zipcode'=>'91571', 'name'=>'Malei']);
        DB::table('villages')->insert(['id'=>70283, 'districts_id'=>6093, 'zipcode'=>'91571', 'name'=>'Martajaya']);
        DB::table('villages')->insert(['id'=>70284, 'districts_id'=>6093, 'zipcode'=>'91571', 'name'=>'Pasangkayu']);
        DB::table('villages')->insert(['id'=>70285, 'districts_id'=>6093, 'zipcode'=>'91571', 'name'=>'Pedanda']);
        //Kecamatan Pedongga Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6094, 'city_id'=>372, 'name'=>'Pedongga']);
        DB::table('villages')->insert(['id'=>70286, 'districts_id'=>6094, 'zipcode'=>'91571', 'name'=>'Batu Oge']);
        DB::table('villages')->insert(['id'=>70287, 'districts_id'=>6094, 'zipcode'=>'91571', 'name'=>'Malei Ii']);
        DB::table('villages')->insert(['id'=>70288, 'districts_id'=>6094, 'zipcode'=>'91571', 'name'=>'Martasari']);
        DB::table('villages')->insert(['id'=>70289, 'districts_id'=>6094, 'zipcode'=>'91571', 'name'=>'Pedanda Ii']);
        //Kecamatan Tikke Raya Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6095, 'city_id'=>372, 'name'=>'Tikke Raya']);
        DB::table('villages')->insert(['id'=>70290, 'districts_id'=>6095, 'zipcode'=>'91571', 'name'=>'Jengeng Raya']);
        DB::table('villages')->insert(['id'=>70291, 'districts_id'=>6095, 'zipcode'=>'91571', 'name'=>'Lariang']);
        DB::table('villages')->insert(['id'=>70292, 'districts_id'=>6095, 'zipcode'=>'91571', 'name'=>'Makmur Jaya']);
        DB::table('villages')->insert(['id'=>70293, 'districts_id'=>6095, 'zipcode'=>'91571', 'name'=>'Pajalele (pakawa)']);
        DB::table('villages')->insert(['id'=>70294, 'districts_id'=>6095, 'zipcode'=>'91571', 'name'=>'Tikke']);
        //Kecamatan Lariang Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6096, 'city_id'=>372, 'name'=>'Lariang']);
        DB::table('villages')->insert(['id'=>70295, 'districts_id'=>6096, 'zipcode'=>'91572', 'name'=>'Bajawali']);
        DB::table('villages')->insert(['id'=>70296, 'districts_id'=>6096, 'zipcode'=>'91572', 'name'=>'Bambakoro']);
        DB::table('villages')->insert(['id'=>70297, 'districts_id'=>6096, 'zipcode'=>'91572', 'name'=>'Batu Matoru']);
        DB::table('villages')->insert(['id'=>70298, 'districts_id'=>6096, 'zipcode'=>'91572', 'name'=>'Kenangan']);
        DB::table('villages')->insert(['id'=>70299, 'districts_id'=>6096, 'zipcode'=>'91572', 'name'=>'Kulu']);
        DB::table('villages')->insert(['id'=>70300, 'districts_id'=>6096, 'zipcode'=>'91572', 'name'=>'Parabu']);
        DB::table('villages')->insert(['id'=>70301, 'districts_id'=>6096, 'zipcode'=>'91572', 'name'=>'Singgani']);
        //Kecamatan Baras Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6097, 'city_id'=>372, 'name'=>'Baras']);
        DB::table('villages')->insert(['id'=>70302, 'districts_id'=>6097, 'zipcode'=>'91572', 'name'=>'Balanti']);
        DB::table('villages')->insert(['id'=>70303, 'districts_id'=>6097, 'zipcode'=>'91572', 'name'=>'Baras']);
        DB::table('villages')->insert(['id'=>70304, 'districts_id'=>6097, 'zipcode'=>'91572', 'name'=>'Bulu Parigi']);
        DB::table('villages')->insert(['id'=>70305, 'districts_id'=>6097, 'zipcode'=>'91572', 'name'=>'Kasano']);
        DB::table('villages')->insert(['id'=>70306, 'districts_id'=>6097, 'zipcode'=>'91572', 'name'=>'Motu']);
        DB::table('villages')->insert(['id'=>70307, 'districts_id'=>6097, 'zipcode'=>'91572', 'name'=>'Towoni (toroni)']);
        //Kecamatan Bulu Taba Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6098, 'city_id'=>372, 'name'=>'Bulu Taba']);
        DB::table('villages')->insert(['id'=>70308, 'districts_id'=>6098, 'zipcode'=>'91572', 'name'=>'Bukit Harapan']);
        DB::table('villages')->insert(['id'=>70309, 'districts_id'=>6098, 'zipcode'=>'91572', 'name'=>'Karave (karabe)']);
        DB::table('villages')->insert(['id'=>70310, 'districts_id'=>6098, 'zipcode'=>'91572', 'name'=>'Kasta Buana']);
        DB::table('villages')->insert(['id'=>70311, 'districts_id'=>6098, 'zipcode'=>'91572', 'name'=>'Lelejae']);
        DB::table('villages')->insert(['id'=>70312, 'districts_id'=>6098, 'zipcode'=>'91572', 'name'=>'Lilimori (lelemori)']);
        DB::table('villages')->insert(['id'=>70313, 'districts_id'=>6098, 'zipcode'=>'91572', 'name'=>'Ompi']);
        DB::table('villages')->insert(['id'=>70314, 'districts_id'=>6098, 'zipcode'=>'91572', 'name'=>'Sumbersari']);
        //Kecamatan Sarudu Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6099, 'city_id'=>372, 'name'=>'Sarudu']);
        DB::table('villages')->insert(['id'=>70315, 'districts_id'=>6099, 'zipcode'=>'91573', 'name'=>'Bulu Mario']);
        DB::table('villages')->insert(['id'=>70316, 'districts_id'=>6099, 'zipcode'=>'91573', 'name'=>'Doda']);
        DB::table('villages')->insert(['id'=>70317, 'districts_id'=>6099, 'zipcode'=>'91573', 'name'=>'Kumasari']);
        DB::table('villages')->insert(['id'=>70318, 'districts_id'=>6099, 'zipcode'=>'91573', 'name'=>'Patika']);
        DB::table('villages')->insert(['id'=>70319, 'districts_id'=>6099, 'zipcode'=>'91573', 'name'=>'Sarudu']);
        //Kecamatan Duripoku Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6100, 'city_id'=>372, 'name'=>'Duripoku']);
        DB::table('villages')->insert(['id'=>70320, 'districts_id'=>6100, 'zipcode'=>'91573', 'name'=>'Saptanajaya']);
        DB::table('villages')->insert(['id'=>70321, 'districts_id'=>6100, 'zipcode'=>'91573', 'name'=>'Sipakainga']);
        DB::table('villages')->insert(['id'=>70322, 'districts_id'=>6100, 'zipcode'=>'91573', 'name'=>'Tammarunnang']);
        DB::table('villages')->insert(['id'=>70323, 'districts_id'=>6100, 'zipcode'=>'91573', 'name'=>'Taranggi']);
        //Kecamatan Bambaira Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6101, 'city_id'=>372, 'name'=>'Bambaira']);
        DB::table('villages')->insert(['id'=>70324, 'districts_id'=>6101, 'zipcode'=>'91574', 'name'=>'Bambaira']);
        DB::table('villages')->insert(['id'=>70325, 'districts_id'=>6101, 'zipcode'=>'91574', 'name'=>'Kalukunangka']);
        DB::table('villages')->insert(['id'=>70326, 'districts_id'=>6101, 'zipcode'=>'91574', 'name'=>'Kasoloang']);
        DB::table('villages')->insert(['id'=>70327, 'districts_id'=>6101, 'zipcode'=>'91574', 'name'=>'Tampaure']);
        //Kecamatan Bambalamotu Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6102, 'city_id'=>372, 'name'=>'Bambalamotu']);
        DB::table('villages')->insert(['id'=>70328, 'districts_id'=>6102, 'zipcode'=>'91574', 'name'=>'Bambalamotu']);
        DB::table('villages')->insert(['id'=>70329, 'districts_id'=>6102, 'zipcode'=>'91574', 'name'=>'Kalola']);
        DB::table('villages')->insert(['id'=>70330, 'districts_id'=>6102, 'zipcode'=>'91574', 'name'=>'Pangiang']);
        DB::table('villages')->insert(['id'=>70331, 'districts_id'=>6102, 'zipcode'=>'91574', 'name'=>'Polewali']);
        DB::table('villages')->insert(['id'=>70332, 'districts_id'=>6102, 'zipcode'=>'91574', 'name'=>'Randomayang']);
        DB::table('villages')->insert(['id'=>70333, 'districts_id'=>6102, 'zipcode'=>'91574', 'name'=>'Wulai']);
        //Kecamatan Sarjo Kab. Mamuju Utara Provinsi Sulawesi Barat
        DB::table('districts')->insert(['id'=>6103, 'city_id'=>372, 'name'=>'Sarjo']);
        DB::table('villages')->insert(['id'=>70334, 'districts_id'=>6103, 'zipcode'=>'91574', 'name'=>'Letawa']);
        DB::table('villages')->insert(['id'=>70335, 'districts_id'=>6103, 'zipcode'=>'91574', 'name'=>'Maponu']);
        DB::table('villages')->insert(['id'=>70336, 'districts_id'=>6103, 'zipcode'=>'91574', 'name'=>'Sarjo']);
        DB::table('villages')->insert(['id'=>70337, 'districts_id'=>6103, 'zipcode'=>'91574', 'name'=>'Sarude']);
    }
}
