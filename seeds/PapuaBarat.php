<?php

use Illuminate\Database\Seeder;

class PapuaBarat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['id'=>25, 'name'=>'Papua Barat']);

        //Kab. Manokwari Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>343, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Manokwari']);
        //Kecamatan Manokwari Timur Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5675, 'city_id'=>343, 'name'=>'Manokwari Timur']);
        DB::table('villages')->insert(['id'=>66176, 'districts_id'=>5675, 'zipcode'=>'98311', 'name'=>'Aipiri']);
        DB::table('villages')->insert(['id'=>66177, 'districts_id'=>5675, 'zipcode'=>'98311', 'name'=>'Ayambori']);
        DB::table('villages')->insert(['id'=>66178, 'districts_id'=>5675, 'zipcode'=>'98311', 'name'=>'Bakaro']);
        DB::table('villages')->insert(['id'=>66179, 'districts_id'=>5675, 'zipcode'=>'98311', 'name'=>'Mansinam']);
        DB::table('villages')->insert(['id'=>66180, 'districts_id'=>5675, 'zipcode'=>'98311', 'name'=>'Susweni']);
        DB::table('villages')->insert(['id'=>66181, 'districts_id'=>5675, 'zipcode'=>'98313', 'name'=>'Arowi']);
        DB::table('villages')->insert(['id'=>66182, 'districts_id'=>5675, 'zipcode'=>'98313', 'name'=>'Pasir Putih']);
        //Kecamatan Manokwari Barat Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5676, 'city_id'=>343, 'name'=>'Manokwari Barat']);
        DB::table('villages')->insert(['id'=>66183, 'districts_id'=>5676, 'zipcode'=>'98311', 'name'=>'Manokwari Timur']);
        DB::table('villages')->insert(['id'=>66184, 'districts_id'=>5676, 'zipcode'=>'98312', 'name'=>'Binirauw (biniraw)']);
        DB::table('villages')->insert(['id'=>66185, 'districts_id'=>5676, 'zipcode'=>'98312', 'name'=>'Inggramui']);
        DB::table('villages')->insert(['id'=>66186, 'districts_id'=>5676, 'zipcode'=>'98312', 'name'=>'Manokwari Barat']);
        DB::table('villages')->insert(['id'=>66187, 'districts_id'=>5676, 'zipcode'=>'98312', 'name'=>'Padarni']);
        DB::table('villages')->insert(['id'=>66188, 'districts_id'=>5676, 'zipcode'=>'98312', 'name'=>'Sanggeng']);
        DB::table('villages')->insert(['id'=>66189, 'districts_id'=>5676, 'zipcode'=>'98312', 'name'=>'Soribo']);
        DB::table('villages')->insert(['id'=>66190, 'districts_id'=>5676, 'zipcode'=>'98312', 'name'=>'Udopi']);
        DB::table('villages')->insert(['id'=>66191, 'districts_id'=>5676, 'zipcode'=>'98312', 'name'=>'Wosi']);
        DB::table('villages')->insert(['id'=>66192, 'districts_id'=>5676, 'zipcode'=>'98314', 'name'=>'Amban']);
        //Kecamatan Manokwari Selatan Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5677, 'city_id'=>343, 'name'=>'Manokwari Selatan']);
        DB::table('villages')->insert(['id'=>66193, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Acemo']);
        DB::table('villages')->insert(['id'=>66194, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Anday']);
        DB::table('villages')->insert(['id'=>66195, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Angrisi (anggresi)']);
        DB::table('villages')->insert(['id'=>66196, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Dihara']);
        DB::table('villages')->insert(['id'=>66197, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Dobut (doopud/doput)']);
        DB::table('villages')->insert(['id'=>66198, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Katebu']);
        DB::table('villages')->insert(['id'=>66199, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Maruni']);
        DB::table('villages')->insert(['id'=>66200, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Masiepi (masyepi)']);
        DB::table('villages')->insert(['id'=>66201, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Misapmeysi']);
        DB::table('villages')->insert(['id'=>66202, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Mupi']);
        DB::table('villages')->insert(['id'=>66203, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Ngunibouw (nginibouw/nginybou)']);
        DB::table('villages')->insert(['id'=>66204, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Nimbiauw (nimbauw)']);
        DB::table('villages')->insert(['id'=>66205, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Sowi']);
        DB::table('villages')->insert(['id'=>66206, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Warkomi']);
        DB::table('villages')->insert(['id'=>66207, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Warmumi (warmomi)']);
        DB::table('villages')->insert(['id'=>66208, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Warsuami (waswami)']);
        DB::table('villages')->insert(['id'=>66209, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Waruri (weluri)']);
        DB::table('villages')->insert(['id'=>66210, 'districts_id'=>5677, 'zipcode'=>'98315', 'name'=>'Wasay (wasai)']);
        //Kecamatan Manokwari Utara Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5678, 'city_id'=>343, 'name'=>'Manokwari Utara']);
        DB::table('villages')->insert(['id'=>66211, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Asai']);
        DB::table('villages')->insert(['id'=>66212, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Bremi']);
        DB::table('villages')->insert(['id'=>66213, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Caban Dua']);
        DB::table('villages')->insert(['id'=>66214, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Indo Oufa']);
        DB::table('villages')->insert(['id'=>66215, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Inya']);
        DB::table('villages')->insert(['id'=>66216, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Iroduas']);
        DB::table('villages')->insert(['id'=>66217, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Lebau']);
        DB::table('villages')->insert(['id'=>66218, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Mandopi']);
        DB::table('villages')->insert(['id'=>66219, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Mebji']);
        DB::table('villages')->insert(['id'=>66220, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Meyes']);
        DB::table('villages')->insert(['id'=>66221, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Meyunfoka']);
        DB::table('villages')->insert(['id'=>66222, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Mubraidiba']);
        DB::table('villages')->insert(['id'=>66223, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Mubri']);
        DB::table('villages')->insert(['id'=>66224, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Pami']);
        DB::table('villages')->insert(['id'=>66225, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Saubeba']);
        DB::table('villages')->insert(['id'=>66226, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Sayro']);
        DB::table('villages')->insert(['id'=>66227, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Singgimeba']);
        DB::table('villages')->insert(['id'=>66228, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Tanah Rubu']);
        DB::table('villages')->insert(['id'=>66229, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Teluk Mubri']);
        DB::table('villages')->insert(['id'=>66230, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Warbefor']);
        DB::table('villages')->insert(['id'=>66231, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Yonggam']);
        DB::table('villages')->insert(['id'=>66232, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Yoom I']);
        DB::table('villages')->insert(['id'=>66233, 'districts_id'=>5678, 'zipcode'=>'98315', 'name'=>'Yoom Ii']);
        //Kecamatan Tanah Rubuh Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5679, 'city_id'=>343, 'name'=>'Tanah Rubuh']);
        DB::table('villages')->insert(['id'=>66234, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Ayawi']);
        DB::table('villages')->insert(['id'=>66235, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Cuyehep']);
        DB::table('villages')->insert(['id'=>66236, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Hanghouw']);
        DB::table('villages')->insert(['id'=>66237, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Imbeisika']);
        DB::table('villages')->insert(['id'=>66238, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Imboisika']);
        DB::table('villages')->insert(['id'=>66239, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Imboiti']);
        DB::table('villages')->insert(['id'=>66240, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Imhasuma']);
        DB::table('villages')->insert(['id'=>66241, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Indibo']);
        DB::table('villages')->insert(['id'=>66242, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Mbatma']);
        DB::table('villages')->insert(['id'=>66243, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Menyumfoku']);
        DB::table('villages')->insert(['id'=>66244, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Mironi']);
        DB::table('villages')->insert(['id'=>66245, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Misabugoid']);
        DB::table('villages')->insert(['id'=>66246, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Ningdip']);
        DB::table('villages')->insert(['id'=>66247, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Rembuy']);
        DB::table('villages')->insert(['id'=>66248, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Ukemboisi']);
        DB::table('villages')->insert(['id'=>66249, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Ukopti']);
        DB::table('villages')->insert(['id'=>66250, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Umnum']);
        DB::table('villages')->insert(['id'=>66251, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Warami']);
        DB::table('villages')->insert(['id'=>66252, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Wariari']);
        DB::table('villages')->insert(['id'=>66253, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Warkapi']);
        DB::table('villages')->insert(['id'=>66254, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Warmawai']);
        DB::table('villages')->insert(['id'=>66255, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Warnyeti']);
        DB::table('villages')->insert(['id'=>66256, 'districts_id'=>5679, 'zipcode'=>'98315', 'name'=>'Wedoni']);
        DB::table('villages')->insert(['id'=>66257, 'districts_id'=>5679, 'zipcode'=>'98354', 'name'=>'Urwambei']);
        //Kecamatan Prafi Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5680, 'city_id'=>343, 'name'=>'Prafi']);
        DB::table('villages')->insert(['id'=>66258, 'districts_id'=>5680, 'zipcode'=>'98315', 'name'=>'Mebiji / Mebji']);
        DB::table('villages')->insert(['id'=>66259, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Aimasi']);
        DB::table('villages')->insert(['id'=>66260, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Bendip Matoa (debit Motoa)']);
        DB::table('villages')->insert(['id'=>66261, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Bogor']);
        DB::table('villages')->insert(['id'=>66262, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Desay']);
        DB::table('villages')->insert(['id'=>66263, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Inguisi (ingkwoisi)']);
        DB::table('villages')->insert(['id'=>66264, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Kali Amin']);
        DB::table('villages')->insert(['id'=>66265, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Krenu (kerenu/krenui)']);
        DB::table('villages')->insert(['id'=>66266, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Lismaungu (lismanggu)']);
        DB::table('villages')->insert(['id'=>66267, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Prafi Mulia/mulya']);
        DB::table('villages')->insert(['id'=>66268, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Semi (somi)']);
        DB::table('villages')->insert(['id'=>66269, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Udapi Hilir (udap Hilir)']);
        DB::table('villages')->insert(['id'=>66270, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Uhyehekbrig (ogyehek/oyehek Brig)']);
        DB::table('villages')->insert(['id'=>66271, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Umbui (umbuy)']);
        DB::table('villages')->insert(['id'=>66272, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Wanggonoma']);
        DB::table('villages')->insert(['id'=>66273, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Wasegi Pop (waseki)']);
        DB::table('villages')->insert(['id'=>66274, 'districts_id'=>5680, 'zipcode'=>'98356', 'name'=>'Wasegi/waseki Indah']);
        //Kecamatan Warmare Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5681, 'city_id'=>343, 'name'=>'Warmare']);
        DB::table('villages')->insert(['id'=>66275, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Dindey']);
        DB::table('villages')->insert(['id'=>66276, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Duwin (duwin Umsini)']);
        DB::table('villages')->insert(['id'=>66277, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Gueintuy (guentuy)']);
        DB::table('villages')->insert(['id'=>66278, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Hingk']);
        DB::table('villages')->insert(['id'=>66279, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Ibuwau']);
        DB::table('villages')->insert(['id'=>66280, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Imboisrati (iboisrati)']);
        DB::table('villages')->insert(['id'=>66281, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Indisey']);
        DB::table('villages')->insert(['id'=>66282, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Madrat']);
        DB::table('villages')->insert(['id'=>66283, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Meniy (meny)']);
        DB::table('villages')->insert(['id'=>66284, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Ngungguen']);
        DB::table('villages')->insert(['id'=>66285, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Nimbay']);
        DB::table('villages')->insert(['id'=>66286, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Snaimboy']);
        DB::table('villages')->insert(['id'=>66287, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Sotea']);
        DB::table('villages')->insert(['id'=>66288, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Srayndabey (sraindabey)']);
        DB::table('villages')->insert(['id'=>66289, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Subsay']);
        DB::table('villages')->insert(['id'=>66290, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Tanah Merah']);
        DB::table('villages')->insert(['id'=>66291, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Umcen (umcem)']);
        DB::table('villages')->insert(['id'=>66292, 'districts_id'=>5681, 'zipcode'=>'98352', 'name'=>'Warmare']);
        //Kecamatan Masni Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5682, 'city_id'=>343, 'name'=>'Masni']);
        DB::table('villages')->insert(['id'=>66293, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Aska']);
        DB::table('villages')->insert(['id'=>66294, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Aurmios']);
        DB::table('villages')->insert(['id'=>66295, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Bowi Subur']);
        DB::table('villages')->insert(['id'=>66296, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Igor']);
        DB::table('villages')->insert(['id'=>66297, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Inyei']);
        DB::table('villages')->insert(['id'=>66298, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Jowen']);
        DB::table('villages')->insert(['id'=>66299, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Kali Merah']);
        DB::table('villages')->insert(['id'=>66300, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Koyani (koyami)']);
        DB::table('villages')->insert(['id'=>66301, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Macuan']);
        DB::table('villages')->insert(['id'=>66302, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Makwan']);
        DB::table('villages')->insert(['id'=>66303, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Mansaburi (smaryam)']);
        DB::table('villages')->insert(['id'=>66304, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Mantedi']);
        DB::table('villages')->insert(['id'=>66305, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Masni']);
        DB::table('villages')->insert(['id'=>66306, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Meiforga']);
        DB::table('villages')->insert(['id'=>66307, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Membowi']);
        DB::table('villages')->insert(['id'=>66308, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Merejemeg (merejneg)']);
        DB::table('villages')->insert(['id'=>66309, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Meyeruk']);
        DB::table('villages')->insert(['id'=>66310, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Meyof Ii']);
        DB::table('villages')->insert(['id'=>66311, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Mowbja (moubja/mobja)']);
        DB::table('villages')->insert(['id'=>66312, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Muara Prafi']);
        DB::table('villages')->insert(['id'=>66313, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Muara Wariori']);
        DB::table('villages')->insert(['id'=>66314, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Prafi Barat']);
        DB::table('villages')->insert(['id'=>66315, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Ririnfos']);
        DB::table('villages')->insert(['id'=>66316, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Sembab']);
        DB::table('villages')->insert(['id'=>66317, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Sibuni']);
        DB::table('villages')->insert(['id'=>66318, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Sumber Boga']);
        DB::table('villages')->insert(['id'=>66319, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Undi']);
        DB::table('villages')->insert(['id'=>66320, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Urey']);
        DB::table('villages')->insert(['id'=>66321, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Wamfoura (wam Bola)']);
        DB::table('villages')->insert(['id'=>66322, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Wariori']);
        DB::table('villages')->insert(['id'=>66323, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Wariori Indah']);
        DB::table('villages')->insert(['id'=>66324, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Yensum']);
        DB::table('villages')->insert(['id'=>66325, 'districts_id'=>5682, 'zipcode'=>'98357', 'name'=>'Yonsoribo (yen Soribo)']);
        //Kecamatan Sidey Kab. Manokwari Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5683, 'city_id'=>343, 'name'=>'Sidey']);
        DB::table('villages')->insert(['id'=>66326, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Kaironi']);
        DB::table('villages')->insert(['id'=>66327, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Kasi (kassi)']);
        DB::table('villages')->insert(['id'=>66328, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Manggupi']);
        DB::table('villages')->insert(['id'=>66329, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Meyof I']);
        DB::table('villages')->insert(['id'=>66330, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Saray']);
        DB::table('villages')->insert(['id'=>66331, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Sidey']);
        DB::table('villages')->insert(['id'=>66332, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Sidey Baru']);
        DB::table('villages')->insert(['id'=>66333, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Sidey Jaya']);
        DB::table('villages')->insert(['id'=>66334, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Sidey Makmur']);
        DB::table('villages')->insert(['id'=>66335, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Wamnowi (womnowi)']);
        DB::table('villages')->insert(['id'=>66336, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Waramui (waramoi)']);
        DB::table('villages')->insert(['id'=>66337, 'districts_id'=>5683, 'zipcode'=>'98357', 'name'=>'Wariki']);

        //Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>344, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Pegunungan Arfak']);
        //Kecamatan Testega Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5684, 'city_id'=>344, 'name'=>'Testega']);
        DB::table('villages')->insert(['id'=>66338, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Demoura (demuora)']);
        DB::table('villages')->insert(['id'=>66339, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Dumbre (dumbrey)']);
        DB::table('villages')->insert(['id'=>66340, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Iba']);
        DB::table('villages')->insert(['id'=>66341, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Jigja (jijga)']);
        DB::table('villages')->insert(['id'=>66342, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Meidogda']);
        DB::table('villages')->insert(['id'=>66343, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Meifekeni']);
        DB::table('villages')->insert(['id'=>66344, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Meifowoska']);
        DB::table('villages')->insert(['id'=>66345, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Meimersa']);
        DB::table('villages')->insert(['id'=>66346, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Meksi']);
        DB::table('villages')->insert(['id'=>66347, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Mengehena (meigehenawu)']);
        DB::table('villages')->insert(['id'=>66348, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Menjugiji (mejugiji)']);
        DB::table('villages')->insert(['id'=>66349, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Mofoukeda']);
        DB::table('villages')->insert(['id'=>66350, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Morumfeyi']);
        DB::table('villages')->insert(['id'=>66351, 'districts_id'=>5684, 'zipcode'=>'98315', 'name'=>'Testega']);
        DB::table('villages')->insert(['id'=>66352, 'districts_id'=>5684, 'zipcode'=>'98352', 'name'=>'Cening']);
        DB::table('villages')->insert(['id'=>66353, 'districts_id'=>5684, 'zipcode'=>'98357', 'name'=>'Asai Ii (asay Ii)']);
        //Kecamatan Menyambouw (minyambouw) Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5685, 'city_id'=>344, 'name'=>'Menyambouw (minyambouw)']);
        DB::table('villages')->insert(['id'=>66354, 'districts_id'=>5685, 'zipcode'=>'98315', 'name'=>'Figoud']);
        DB::table('villages')->insert(['id'=>66355, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Aduer']);
        DB::table('villages')->insert(['id'=>66356, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Aiwou (aywou)']);
        DB::table('villages')->insert(['id'=>66357, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Amber']);
        DB::table('villages')->insert(['id'=>66358, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Andang']);
        DB::table('villages')->insert(['id'=>66359, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Anggra']);
        DB::table('villages')->insert(['id'=>66360, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Apui']);
        DB::table('villages')->insert(['id'=>66361, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Asarbey (asarbei)']);
        DB::table('villages')->insert(['id'=>66362, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Awibehey (awibehei)']);
        DB::table('villages')->insert(['id'=>66363, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Ayau']);
        DB::table('villages')->insert(['id'=>66364, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Bahamyenti']);
        DB::table('villages')->insert(['id'=>66365, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Bingwoyud (bingywoyut)']);
        DB::table('villages')->insert(['id'=>66366, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Bueibei (dueibei)']);
        DB::table('villages')->insert(['id'=>66367, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Coisi']);
        DB::table('villages')->insert(['id'=>66368, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Demaisi']);
        DB::table('villages')->insert(['id'=>66369, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Driye']);
        DB::table('villages')->insert(['id'=>66370, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Handuk']);
        DB::table('villages')->insert(['id'=>66371, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Imbenti']);
        DB::table('villages')->insert(['id'=>66372, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Imbonggun']);
        DB::table('villages')->insert(['id'=>66373, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Imbrekti']);
        DB::table('villages')->insert(['id'=>66374, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Indabri']);
        DB::table('villages')->insert(['id'=>66375, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Indonbey (indobey/indondey)']);
        DB::table('villages')->insert(['id'=>66376, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Inggrahim (inggramhim)']);
        DB::table('villages')->insert(['id'=>66377, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Injuar']);
        DB::table('villages')->insert(['id'=>66378, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Ipingoisi (ipingosi)']);
        DB::table('villages')->insert(['id'=>66379, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Kibauw (kipouw)']);
        DB::table('villages')->insert(['id'=>66380, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Kwau']);
        DB::table('villages')->insert(['id'=>66381, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Mainda']);
        DB::table('villages')->insert(['id'=>66382, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Mbigma (mbingma)']);
        DB::table('villages')->insert(['id'=>66383, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Memanker (memangker)']);
        DB::table('villages')->insert(['id'=>66384, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Menyambouw (minyambouw)']);
        DB::table('villages')->insert(['id'=>66385, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Micadiwor']);
        DB::table('villages')->insert(['id'=>66386, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Miconti (micomti)']);
        DB::table('villages')->insert(['id'=>66387, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Minggre (mingre)']);
        DB::table('villages')->insert(['id'=>66388, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Misadwer']);
        DB::table('villages')->insert(['id'=>66389, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Misapngoisi (misangoisi)']);
        DB::table('villages')->insert(['id'=>66390, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Mitiede']);
        DB::table('villages')->insert(['id'=>66391, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Mnoubei (minogbei/minogbey/minbey)']);
        DB::table('villages')->insert(['id'=>66392, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Mokwam']);
        DB::table('villages')->insert(['id'=>66393, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Nimbiau']);
        DB::table('villages')->insert(['id'=>66394, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Ninsimoi']);
        DB::table('villages')->insert(['id'=>66395, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Njuar']);
        DB::table('villages')->insert(['id'=>66396, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Piyausi (pinyausi)']);
        DB::table('villages')->insert(['id'=>66397, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Sigim']);
        DB::table('villages')->insert(['id'=>66398, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Simerbei']);
        DB::table('villages')->insert(['id'=>66399, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Sinaitousi (sinaytoisi/sinitousi)']);
        DB::table('villages')->insert(['id'=>66400, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Siyau (syou)']);
        DB::table('villages')->insert(['id'=>66401, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Smainggi (smaingei/smanggei)']);
        DB::table('villages')->insert(['id'=>66402, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Ugjehek (ujeheg)']);
        DB::table('villages')->insert(['id'=>66403, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Umpug']);
        DB::table('villages')->insert(['id'=>66404, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Ungga']);
        DB::table('villages')->insert(['id'=>66405, 'districts_id'=>5685, 'zipcode'=>'98358', 'name'=>'Waminda (wamminda)']);
        //Kecamatan Taige Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5686, 'city_id'=>344, 'name'=>'Taige']);
        DB::table('villages')->insert(['id'=>66406, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Asum (ansum)']);
        DB::table('villages')->insert(['id'=>66407, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Awigau (awaikum/awaigau)']);
        DB::table('villages')->insert(['id'=>66408, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Deroubu (deuroba)']);
        DB::table('villages')->insert(['id'=>66409, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Disura']);
        DB::table('villages')->insert(['id'=>66410, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Genyu']);
        DB::table('villages')->insert(['id'=>66411, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Horeta']);
        DB::table('villages')->insert(['id'=>66412, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Irbos']);
        DB::table('villages')->insert(['id'=>66413, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Siskedouw (siskedowo)']);
        DB::table('villages')->insert(['id'=>66414, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Taiga (taige)']);
        DB::table('villages')->insert(['id'=>66415, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Tridaga']);
        DB::table('villages')->insert(['id'=>66416, 'districts_id'=>5686, 'zipcode'=>'98354', 'name'=>'Ubeisa']);
        //Kecamatan Anggi Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5687, 'city_id'=>344, 'name'=>'Anggi']);
        DB::table('villages')->insert(['id'=>66417, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Ayau (ayaubey)']);
        DB::table('villages')->insert(['id'=>66418, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Hungku']);
        DB::table('villages')->insert(['id'=>66419, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Igmbai (igembai/imbeisba)']);
        DB::table('villages')->insert(['id'=>66420, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Imbai']);
        DB::table('villages')->insert(['id'=>66421, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Iraiweri']);
        DB::table('villages')->insert(['id'=>66422, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Mentubei (mentubey)']);
        DB::table('villages')->insert(['id'=>66423, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Pamaha']);
        DB::table('villages')->insert(['id'=>66424, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Spiyougup']);
        DB::table('villages')->insert(['id'=>66425, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Srubey']);
        DB::table('villages')->insert(['id'=>66426, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Susi']);
        DB::table('villages')->insert(['id'=>66427, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Suteibei (suteibey)']);
        DB::table('villages')->insert(['id'=>66428, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Testega Pamaha']);
        DB::table('villages')->insert(['id'=>66429, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Ulong (ullong)']);
        DB::table('villages')->insert(['id'=>66430, 'districts_id'=>5687, 'zipcode'=>'98354', 'name'=>'Uper']);
        //Kecamatan Membey Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5688, 'city_id'=>344, 'name'=>'Membey']);
        DB::table('villages')->insert(['id'=>66431, 'districts_id'=>5688, 'zipcode'=>'98354', 'name'=>'Imbeisaba']);
        DB::table('villages')->insert(['id'=>66432, 'districts_id'=>5688, 'zipcode'=>'98354', 'name'=>'Inyebow (inyebouw)']);
        DB::table('villages')->insert(['id'=>66433, 'districts_id'=>5688, 'zipcode'=>'98354', 'name'=>'Koney']);
        DB::table('villages')->insert(['id'=>66434, 'districts_id'=>5688, 'zipcode'=>'98354', 'name'=>'Membey']);
        DB::table('villages')->insert(['id'=>66435, 'districts_id'=>5688, 'zipcode'=>'98354', 'name'=>'Memti']);
        DB::table('villages')->insert(['id'=>66436, 'districts_id'=>5688, 'zipcode'=>'98354', 'name'=>'Sisrang (seseran)']);
        DB::table('villages')->insert(['id'=>66437, 'districts_id'=>5688, 'zipcode'=>'98354', 'name'=>'Usti']);
        //Kecamatan Anggi Gida Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5689, 'city_id'=>344, 'name'=>'Anggi Gida']);
        DB::table('villages')->insert(['id'=>66438, 'districts_id'=>5689, 'zipcode'=>'98354', 'name'=>'Itkau']);
        DB::table('villages')->insert(['id'=>66439, 'districts_id'=>5689, 'zipcode'=>'98354', 'name'=>'Krobut (kiwot)']);
        DB::table('villages')->insert(['id'=>66440, 'districts_id'=>5689, 'zipcode'=>'98354', 'name'=>'Ngisrow (ingisrow)']);
        DB::table('villages')->insert(['id'=>66441, 'districts_id'=>5689, 'zipcode'=>'98354', 'name'=>'Sakumi (sakuni/sakurai)']);
        DB::table('villages')->insert(['id'=>66442, 'districts_id'=>5689, 'zipcode'=>'98354', 'name'=>'Sibiogud']);
        DB::table('villages')->insert(['id'=>66443, 'districts_id'=>5689, 'zipcode'=>'98354', 'name'=>'Tombrok']);
        DB::table('villages')->insert(['id'=>66444, 'districts_id'=>5689, 'zipcode'=>'98354', 'name'=>'Tubyam (tuabyam)']);
        //Kecamatan Hingk Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5690, 'city_id'=>344, 'name'=>'Hingk']);
        DB::table('villages')->insert(['id'=>66445, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Arion (aryon)']);
        DB::table('villages')->insert(['id'=>66446, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Cangoisi']);
        DB::table('villages')->insert(['id'=>66447, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Demunti']);
        DB::table('villages')->insert(['id'=>66448, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Guweuti (gueiuti/guwei Uti)']);
        DB::table('villages')->insert(['id'=>66449, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Gweipingbai (gueipinbai)']);
        DB::table('villages')->insert(['id'=>66450, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Heatie Bouw (haktiebou)']);
        DB::table('villages')->insert(['id'=>66451, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Humeysi (humeisi)']);
        DB::table('villages')->insert(['id'=>66452, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Ikimabow (ikimabou)']);
        DB::table('villages')->insert(['id'=>66453, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Kisap']);
        DB::table('villages')->insert(['id'=>66454, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Kwaiyehep']);
        DB::table('villages')->insert(['id'=>66455, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Kwok I']);
        DB::table('villages')->insert(['id'=>66456, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Kwok Ii (kwokwisngung)']);
        DB::table('villages')->insert(['id'=>66457, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Leiheak (liehak)']);
        DB::table('villages')->insert(['id'=>66458, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Mbegau']);
        DB::table('villages')->insert(['id'=>66459, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Mbrande']);
        DB::table('villages')->insert(['id'=>66460, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Minggot (manggot)']);
        DB::table('villages')->insert(['id'=>66461, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Minyeimemut (minyeimemud)']);
        DB::table('villages')->insert(['id'=>66462, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Monut']);
        DB::table('villages')->insert(['id'=>66463, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Ngimoubre (ngimoubri)']);
        DB::table('villages')->insert(['id'=>66464, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Ntap']);
        DB::table('villages')->insert(['id'=>66465, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Nungkimor']);
        DB::table('villages')->insert(['id'=>66466, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Penibut']);
        DB::table('villages')->insert(['id'=>66467, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Punggung (pungug)']);
        DB::table('villages')->insert(['id'=>66468, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Sopnyai']);
        DB::table('villages')->insert(['id'=>66469, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Tigau Comti']);
        DB::table('villages')->insert(['id'=>66470, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Tingkwoikio (tingwoikiou)']);
        DB::table('villages')->insert(['id'=>66471, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Tumbeibehei']);
        DB::table('villages')->insert(['id'=>66472, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Umcep']);
        DB::table('villages')->insert(['id'=>66473, 'districts_id'=>5690, 'zipcode'=>'98357', 'name'=>'Urwong']);
        //Kecamatan Catubouw Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5691, 'city_id'=>344, 'name'=>'Catubouw']);
        DB::table('villages')->insert(['id'=>66474, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Aiga']);
        DB::table('villages')->insert(['id'=>66475, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Bingrayud (binggarud)']);
        DB::table('villages')->insert(['id'=>66476, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Bingwaimod (bigwaimud)']);
        DB::table('villages')->insert(['id'=>66477, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Catubouw']);
        DB::table('villages')->insert(['id'=>66478, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Coijut (coijud)']);
        DB::table('villages')->insert(['id'=>66479, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Idemai']);
        DB::table('villages')->insert(['id'=>66480, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Ijigrek (ijigreg)']);
        DB::table('villages')->insert(['id'=>66481, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Imandrigo']);
        DB::table('villages')->insert(['id'=>66482, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Jim']);
        DB::table('villages')->insert(['id'=>66483, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Kaungwam']);
        DB::table('villages')->insert(['id'=>66484, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Manggesuk']);
        DB::table('villages')->insert(['id'=>66485, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Mieicomti (miey Comty/mieycomti)']);
        DB::table('villages')->insert(['id'=>66486, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Mihij']);
        DB::table('villages')->insert(['id'=>66487, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Minhou (mihou)']);
        DB::table('villages')->insert(['id'=>66488, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Minmo']);
        DB::table('villages')->insert(['id'=>66489, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Ndabouw']);
        DB::table('villages')->insert(['id'=>66490, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Slomiou']);
        DB::table('villages')->insert(['id'=>66491, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Soudin']);
        DB::table('villages')->insert(['id'=>66492, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Sugemah (sugemeh)']);
        DB::table('villages')->insert(['id'=>66493, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Timtou (timtouw)']);
        DB::table('villages')->insert(['id'=>66494, 'districts_id'=>5691, 'zipcode'=>'98358', 'name'=>'Unti']);
        //Kecamatan Sururey Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5692, 'city_id'=>344, 'name'=>'Sururey']);
        DB::table('villages')->insert(['id'=>66495, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Anuk']);
        DB::table('villages')->insert(['id'=>66496, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Duguhani (dugahani)']);
        DB::table('villages')->insert(['id'=>66497, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Inyaub']);
        DB::table('villages')->insert(['id'=>66498, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Kobrey']);
        DB::table('villages')->insert(['id'=>66499, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Kopo']);
        DB::table('villages')->insert(['id'=>66500, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Kostera']);
        DB::table('villages')->insert(['id'=>66501, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Menesrij']);
        DB::table('villages')->insert(['id'=>66502, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Saugemeba']);
        DB::table('villages')->insert(['id'=>66503, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Sungedes (sungudes)']);
        DB::table('villages')->insert(['id'=>66504, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Sururey (sururai)']);
        DB::table('villages')->insert(['id'=>66505, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Tomstera']);
        DB::table('villages')->insert(['id'=>66506, 'districts_id'=>5692, 'zipcode'=>'98359', 'name'=>'Tuhubea (duhubeya)']);
        //Kecamatan Didohu Kab. Pegunungan Arfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5693, 'city_id'=>344, 'name'=>'Didohu']);
        DB::table('villages')->insert(['id'=>66507, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Cigera']);
        DB::table('villages')->insert(['id'=>66508, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Cirnohu']);
        DB::table('villages')->insert(['id'=>66509, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Danmou']);
        DB::table('villages')->insert(['id'=>66510, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Debetik (dibetik)']);
        DB::table('villages')->insert(['id'=>66511, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Demdamei']);
        DB::table('villages')->insert(['id'=>66512, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Desra (disra)']);
        DB::table('villages')->insert(['id'=>66513, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Dugrimog']);
        DB::table('villages')->insert(['id'=>66514, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Gedeira']);
        DB::table('villages')->insert(['id'=>66515, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Iranmeba']);
        DB::table('villages')->insert(['id'=>66516, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Kusmenau']);
        DB::table('villages')->insert(['id'=>66517, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Miseda']);
        DB::table('villages')->insert(['id'=>66518, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Sirgemeih (sergemeh)']);
        DB::table('villages')->insert(['id'=>66519, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Sneraner (sneremer)']);
        DB::table('villages')->insert(['id'=>66520, 'districts_id'=>5693, 'zipcode'=>'98359', 'name'=>'Tomsir']);

        //Kab. Manokwari Selatan Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>345, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Manokwari Selatan']);
        //Kecamatan Oransbari Kab. Manokwari Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5694, 'city_id'=>345, 'name'=>'Oransbari']);
        DB::table('villages')->insert(['id'=>66521, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Akeju']);
        DB::table('villages')->insert(['id'=>66522, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Margomulyo']);
        DB::table('villages')->insert(['id'=>66523, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Margorukun']);
        DB::table('villages')->insert(['id'=>66524, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Masabui Dua (ii)']);
        DB::table('villages')->insert(['id'=>66525, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Masabui Satu (i)']);
        DB::table('villages')->insert(['id'=>66526, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Muari']);
        DB::table('villages')->insert(['id'=>66527, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Oransbari']);
        DB::table('villages')->insert(['id'=>66528, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Sidomulyo']);
        DB::table('villages')->insert(['id'=>66529, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Sindang Jaya (sidang Jaya)']);
        DB::table('villages')->insert(['id'=>66530, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Wamigti']);
        DB::table('villages')->insert(['id'=>66531, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Wandoki']);
        DB::table('villages')->insert(['id'=>66532, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Warbiadi']);
        DB::table('villages')->insert(['id'=>66533, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Warkwandi']);
        DB::table('villages')->insert(['id'=>66534, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Waroser']);
        DB::table('villages')->insert(['id'=>66535, 'districts_id'=>5694, 'zipcode'=>'98353', 'name'=>'Watariri']);
        //Kecamatan Ransiki Kab. Manokwari Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5695, 'city_id'=>345, 'name'=>'Ransiki']);
        DB::table('villages')->insert(['id'=>66536, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Abresso (abreso)']);
        DB::table('villages')->insert(['id'=>66537, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Bamaha']);
        DB::table('villages')->insert(['id'=>66538, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Hamawi']);
        DB::table('villages')->insert(['id'=>66539, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Hamor']);
        DB::table('villages')->insert(['id'=>66540, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Kobrey']);
        DB::table('villages')->insert(['id'=>66541, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Mambrema']);
        DB::table('villages')->insert(['id'=>66542, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Nuhuwai (nuhuei/nuhuwei)']);
        DB::table('villages')->insert(['id'=>66543, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Ransiki Kota']);
        DB::table('villages')->insert(['id'=>66544, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Sabri']);
        DB::table('villages')->insert(['id'=>66545, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Susmorof']);
        DB::table('villages')->insert(['id'=>66546, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Swer']);
        DB::table('villages')->insert(['id'=>66547, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Toboo (tobouw/tobou)']);
        DB::table('villages')->insert(['id'=>66548, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Wamcei']);
        DB::table('villages')->insert(['id'=>66549, 'districts_id'=>5695, 'zipcode'=>'98355', 'name'=>'Yamboy (yamboi)']);
        //Kecamatan Neney (nenei) Kab. Manokwari Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5696, 'city_id'=>345, 'name'=>'Neney (nenei)']);
        DB::table('villages')->insert(['id'=>66550, 'districts_id'=>5696, 'zipcode'=>'98355', 'name'=>'Aryawen Moho (aryawenm)']);
        DB::table('villages')->insert(['id'=>66551, 'districts_id'=>5696, 'zipcode'=>'98355', 'name'=>'Benyas']);
        DB::table('villages')->insert(['id'=>66552, 'districts_id'=>5696, 'zipcode'=>'98355', 'name'=>'Disi']);
        DB::table('villages')->insert(['id'=>66553, 'districts_id'=>5696, 'zipcode'=>'98355', 'name'=>'Hiyou']);
        DB::table('villages')->insert(['id'=>66554, 'districts_id'=>5696, 'zipcode'=>'98355', 'name'=>'Nenei (neney)']);
        DB::table('villages')->insert(['id'=>66555, 'districts_id'=>5696, 'zipcode'=>'98355', 'name'=>'Sesum']);
        DB::table('villages')->insert(['id'=>66556, 'districts_id'=>5696, 'zipcode'=>'98355', 'name'=>'Wama']);
        //Kecamatan Momi Waren Kab. Manokwari Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5697, 'city_id'=>345, 'name'=>'Momi Waren']);
        DB::table('villages')->insert(['id'=>66557, 'districts_id'=>5697, 'zipcode'=>'98355', 'name'=>'Dembek']);
        DB::table('villages')->insert(['id'=>66558, 'districts_id'=>5697, 'zipcode'=>'98355', 'name'=>'Demini']);
        DB::table('villages')->insert(['id'=>66559, 'districts_id'=>5697, 'zipcode'=>'98355', 'name'=>'Gaya Baru']);
        DB::table('villages')->insert(['id'=>66560, 'districts_id'=>5697, 'zipcode'=>'98355', 'name'=>'Neny Pantai (nenei Pantai/nij)']);
        DB::table('villages')->insert(['id'=>66561, 'districts_id'=>5697, 'zipcode'=>'98355', 'name'=>'Siwi']);
        DB::table('villages')->insert(['id'=>66562, 'districts_id'=>5697, 'zipcode'=>'98355', 'name'=>'Waren']);
        DB::table('villages')->insert(['id'=>66563, 'districts_id'=>5697, 'zipcode'=>'98355', 'name'=>'Yekwandi']);
        //Kecamatan Tahota (tohota) Kab. Manokwari Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5698, 'city_id'=>345, 'name'=>'Tahota (tohota)']);
        DB::table('villages')->insert(['id'=>66564, 'districts_id'=>5698, 'zipcode'=>'98355', 'name'=>'Kaprus']);
        DB::table('villages')->insert(['id'=>66565, 'districts_id'=>5698, 'zipcode'=>'98355', 'name'=>'Reyob']);
        DB::table('villages')->insert(['id'=>66566, 'districts_id'=>5698, 'zipcode'=>'98355', 'name'=>'Seimeba']);
        DB::table('villages')->insert(['id'=>66567, 'districts_id'=>5698, 'zipcode'=>'98355', 'name'=>'Yermatum']);
        //Kecamatan Dataran Isim Kab. Manokwari Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5699, 'city_id'=>345, 'name'=>'Dataran Isim']);
        DB::table('villages')->insert(['id'=>66568, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Dibera']);
        DB::table('villages')->insert(['id'=>66569, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Disihu (dihisu)']);
        DB::table('villages')->insert(['id'=>66570, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Disra (desra)']);
        DB::table('villages')->insert(['id'=>66571, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Duhugesa']);
        DB::table('villages')->insert(['id'=>66572, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Hugamod (hugomot)']);
        DB::table('villages')->insert(['id'=>66573, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Inyuara']);
        DB::table('villages')->insert(['id'=>66574, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Isim']);
        DB::table('villages')->insert(['id'=>66575, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Mindermes']);
        DB::table('villages')->insert(['id'=>66576, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Sibjo']);
        DB::table('villages')->insert(['id'=>66577, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Tahosta (tohosta)']);
        DB::table('villages')->insert(['id'=>66578, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Tubes']);
        DB::table('villages')->insert(['id'=>66579, 'districts_id'=>5699, 'zipcode'=>'98359', 'name'=>'Umuhousi (umousi)']);

        //Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>346, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Teluk Wondama']);
        //Kecamatan Wamesa Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5700, 'city_id'=>346, 'name'=>'Wamesa']);
        DB::table('villages')->insert(['id'=>66580, 'districts_id'=>5700, 'zipcode'=>'98361', 'name'=>'Ambuar']);
        DB::table('villages')->insert(['id'=>66581, 'districts_id'=>5700, 'zipcode'=>'98361', 'name'=>'Karuan']);
        DB::table('villages')->insert(['id'=>66582, 'districts_id'=>5700, 'zipcode'=>'98361', 'name'=>'Nordiwar']);
        DB::table('villages')->insert(['id'=>66583, 'districts_id'=>5700, 'zipcode'=>'98361', 'name'=>'Sabubar']);
        DB::table('villages')->insert(['id'=>66584, 'districts_id'=>5700, 'zipcode'=>'98361', 'name'=>'Yarpate']);
        //Kecamatan Rumberpon Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5701, 'city_id'=>346, 'name'=>'Rumberpon']);
        DB::table('villages')->insert(['id'=>66585, 'districts_id'=>5701, 'zipcode'=>'98361', 'name'=>'Isenebuai (senebuay/senebuai)']);
        DB::table('villages')->insert(['id'=>66586, 'districts_id'=>5701, 'zipcode'=>'98361', 'name'=>'Iseren (isren)']);
        DB::table('villages')->insert(['id'=>66587, 'districts_id'=>5701, 'zipcode'=>'98361', 'name'=>'Wetitindau']);
        DB::table('villages')->insert(['id'=>66588, 'districts_id'=>5701, 'zipcode'=>'98361', 'name'=>'Yariari']);
        DB::table('villages')->insert(['id'=>66589, 'districts_id'=>5701, 'zipcode'=>'98361', 'name'=>'Yembekiri Ii']);
        DB::table('villages')->insert(['id'=>66590, 'districts_id'=>5701, 'zipcode'=>'98361', 'name'=>'Yomakan']);
        DB::table('villages')->insert(['id'=>66591, 'districts_id'=>5701, 'zipcode'=>'98361', 'name'=>'Yombekiri I (yembe Kiri)']);
        //Kecamatan Soug Jaya Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5702, 'city_id'=>346, 'name'=>'Soug Jaya']);
        DB::table('villages')->insert(['id'=>66592, 'districts_id'=>5702, 'zipcode'=>'98361', 'name'=>'Kaprus']);
        DB::table('villages')->insert(['id'=>66593, 'districts_id'=>5702, 'zipcode'=>'98361', 'name'=>'Nuspairo']);
        DB::table('villages')->insert(['id'=>66594, 'districts_id'=>5702, 'zipcode'=>'98361', 'name'=>'Reyob (rayob)']);
        DB::table('villages')->insert(['id'=>66595, 'districts_id'=>5702, 'zipcode'=>'98361', 'name'=>'Siresi']);
        DB::table('villages')->insert(['id'=>66596, 'districts_id'=>5702, 'zipcode'=>'98361', 'name'=>'Yarmatum (yermatum)']);
        //Kecamatan Nikiwar Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5703, 'city_id'=>346, 'name'=>'Nikiwar']);
        DB::table('villages')->insert(['id'=>66597, 'districts_id'=>5703, 'zipcode'=>'98361', 'name'=>'Kurei']);
        DB::table('villages')->insert(['id'=>66598, 'districts_id'=>5703, 'zipcode'=>'98361', 'name'=>'Mamisi']);
        DB::table('villages')->insert(['id'=>66599, 'districts_id'=>5703, 'zipcode'=>'98361', 'name'=>'Tamoge']);
        DB::table('villages')->insert(['id'=>66600, 'districts_id'=>5703, 'zipcode'=>'98361', 'name'=>'Werabur']);
        DB::table('villages')->insert(['id'=>66601, 'districts_id'=>5703, 'zipcode'=>'98361', 'name'=>'Werianggi']);
        //Kecamatan Windesi Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5704, 'city_id'=>346, 'name'=>'Windesi']);
        DB::table('villages')->insert(['id'=>66602, 'districts_id'=>5704, 'zipcode'=>'98361', 'name'=>'Sandey']);
        DB::table('villages')->insert(['id'=>66603, 'districts_id'=>5704, 'zipcode'=>'98361', 'name'=>'Sombokoro']);
        DB::table('villages')->insert(['id'=>66604, 'districts_id'=>5704, 'zipcode'=>'98361', 'name'=>'Wamesa Tengah']);
        DB::table('villages')->insert(['id'=>66605, 'districts_id'=>5704, 'zipcode'=>'98361', 'name'=>'Windesi']);
        DB::table('villages')->insert(['id'=>66606, 'districts_id'=>5704, 'zipcode'=>'98361', 'name'=>'Yopmios']);
        //Kecamatan Roswar Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5705, 'city_id'=>346, 'name'=>'Roswar']);
        DB::table('villages')->insert(['id'=>66607, 'districts_id'=>5705, 'zipcode'=>'98361', 'name'=>'Syeiwar']);
        DB::table('villages')->insert(['id'=>66608, 'districts_id'=>5705, 'zipcode'=>'98361', 'name'=>'Waprak']);
        DB::table('villages')->insert(['id'=>66609, 'districts_id'=>5705, 'zipcode'=>'98361', 'name'=>'Yomber']);
        //Kecamatan Teluk Duairi (wasior Utara) Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5706, 'city_id'=>346, 'name'=>'Teluk Duairi (wasior Utara)']);
        DB::table('villages')->insert(['id'=>66610, 'districts_id'=>5706, 'zipcode'=>'98362', 'name'=>'Aisandami']);
        DB::table('villages')->insert(['id'=>66611, 'districts_id'=>5706, 'zipcode'=>'98362', 'name'=>'Sobei (sobey)']);
        DB::table('villages')->insert(['id'=>66612, 'districts_id'=>5706, 'zipcode'=>'98362', 'name'=>'Sobey Indah']);
        DB::table('villages')->insert(['id'=>66613, 'districts_id'=>5706, 'zipcode'=>'98362', 'name'=>'Yopanggar (yopengar)']);
        //Kecamatan Kuri Wamesa Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5707, 'city_id'=>346, 'name'=>'Kuri Wamesa']);
        DB::table('villages')->insert(['id'=>66614, 'districts_id'=>5707, 'zipcode'=>'98362', 'name'=>'Ambumi']);
        DB::table('villages')->insert(['id'=>66615, 'districts_id'=>5707, 'zipcode'=>'98362', 'name'=>'Dusner']);
        DB::table('villages')->insert(['id'=>66616, 'districts_id'=>5707, 'zipcode'=>'98362', 'name'=>'Nanimori']);
        DB::table('villages')->insert(['id'=>66617, 'districts_id'=>5707, 'zipcode'=>'98362', 'name'=>'Simei (simiei)']);
        DB::table('villages')->insert(['id'=>66618, 'districts_id'=>5707, 'zipcode'=>'98362', 'name'=>'Sobiar']);
        DB::table('villages')->insert(['id'=>66619, 'districts_id'=>5707, 'zipcode'=>'98362', 'name'=>'Yerenusi']);
        //Kecamatan Wasior Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5708, 'city_id'=>346, 'name'=>'Wasior']);
        DB::table('villages')->insert(['id'=>66620, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Dotir']);
        DB::table('villages')->insert(['id'=>66621, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Iriati']);
        DB::table('villages')->insert(['id'=>66622, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Maimare (maimari)']);
        DB::table('villages')->insert(['id'=>66623, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Maniwak']);
        DB::table('villages')->insert(['id'=>66624, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Moru (gayabaru)']);
        DB::table('villages')->insert(['id'=>66625, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Rado']);
        DB::table('villages')->insert(['id'=>66626, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Ramiki']);
        DB::table('villages')->insert(['id'=>66627, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Wasior I']);
        DB::table('villages')->insert(['id'=>66628, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Wasior Ii']);
        DB::table('villages')->insert(['id'=>66629, 'districts_id'=>5708, 'zipcode'=>'98362', 'name'=>'Wondamawi']);
        //Kecamatan Roon Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5709, 'city_id'=>346, 'name'=>'Roon']);
        DB::table('villages')->insert(['id'=>66630, 'districts_id'=>5709, 'zipcode'=>'98362', 'name'=>'Inday']);
        DB::table('villages')->insert(['id'=>66631, 'districts_id'=>5709, 'zipcode'=>'98362', 'name'=>'Mena']);
        DB::table('villages')->insert(['id'=>66632, 'districts_id'=>5709, 'zipcode'=>'98362', 'name'=>'Menarbu']);
        DB::table('villages')->insert(['id'=>66633, 'districts_id'=>5709, 'zipcode'=>'98362', 'name'=>'Niab']);
        DB::table('villages')->insert(['id'=>66634, 'districts_id'=>5709, 'zipcode'=>'98362', 'name'=>'Sariay']);
        DB::table('villages')->insert(['id'=>66635, 'districts_id'=>5709, 'zipcode'=>'98362', 'name'=>'Syabes']);
        DB::table('villages')->insert(['id'=>66636, 'districts_id'=>5709, 'zipcode'=>'98362', 'name'=>'Yende']);
        //Kecamatan Naikere (wasior Barat) Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5710, 'city_id'=>346, 'name'=>'Naikere (wasior Barat)']);
        DB::table('villages')->insert(['id'=>66637, 'districts_id'=>5710, 'zipcode'=>'98362', 'name'=>'Inyora']);
        DB::table('villages')->insert(['id'=>66638, 'districts_id'=>5710, 'zipcode'=>'98362', 'name'=>'Oya (oyaa)']);
        DB::table('villages')->insert(['id'=>66639, 'districts_id'=>5710, 'zipcode'=>'98362', 'name'=>'Sararti']);
        DB::table('villages')->insert(['id'=>66640, 'districts_id'=>5710, 'zipcode'=>'98362', 'name'=>'Undurara']);
        DB::table('villages')->insert(['id'=>66641, 'districts_id'=>5710, 'zipcode'=>'98362', 'name'=>'Wosimi (wosimo)']);
        DB::table('villages')->insert(['id'=>66642, 'districts_id'=>5710, 'zipcode'=>'98362', 'name'=>'Yabore']);
        //Kecamatan Rasiei Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5711, 'city_id'=>346, 'name'=>'Rasiei']);
        DB::table('villages')->insert(['id'=>66643, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Isey (isei)']);
        DB::table('villages')->insert(['id'=>66644, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Nggatum']);
        DB::table('villages')->insert(['id'=>66645, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Rasiey (rasiei)']);
        DB::table('villages')->insert(['id'=>66646, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Sasirey (sasirei)']);
        DB::table('villages')->insert(['id'=>66647, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Senderawoy / Senderawoi (sindrawoi)']);
        DB::table('villages')->insert(['id'=>66648, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Tandia']);
        DB::table('villages')->insert(['id'=>66649, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Torey']);
        DB::table('villages')->insert(['id'=>66650, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Uryemi (uriyem/uriemi)']);
        DB::table('villages')->insert(['id'=>66651, 'districts_id'=>5711, 'zipcode'=>'98362', 'name'=>'Webi']);
        //Kecamatan Wondiboy (wasior Selatan) Kab. Teluk Wondama Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5712, 'city_id'=>346, 'name'=>'Wondiboy (wasior Selatan)']);
        DB::table('villages')->insert(['id'=>66652, 'districts_id'=>5712, 'zipcode'=>'98362', 'name'=>'Isuy (issui)']);
        DB::table('villages')->insert(['id'=>66653, 'districts_id'=>5712, 'zipcode'=>'98362', 'name'=>'Kabouw (kabuow)']);
        DB::table('villages')->insert(['id'=>66654, 'districts_id'=>5712, 'zipcode'=>'98362', 'name'=>'Kaibi']);
        DB::table('villages')->insert(['id'=>66655, 'districts_id'=>5712, 'zipcode'=>'98362', 'name'=>'Manopi']);
        DB::table('villages')->insert(['id'=>66656, 'districts_id'=>5712, 'zipcode'=>'98362', 'name'=>'Wondiboi (wondiboy)']);

        //Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>347, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Teluk Bintuni']);
        //Kecamatan Babo Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5713, 'city_id'=>347, 'name'=>'Babo']);
        DB::table('villages')->insert(['id'=>66657, 'districts_id'=>5713, 'zipcode'=>'98363', 'name'=>'Amutu']);
        DB::table('villages')->insert(['id'=>66658, 'districts_id'=>5713, 'zipcode'=>'98363', 'name'=>'Irarutu Iii']);
        DB::table('villages')->insert(['id'=>66659, 'districts_id'=>5713, 'zipcode'=>'98363', 'name'=>'Kasira']);
        DB::table('villages')->insert(['id'=>66660, 'districts_id'=>5713, 'zipcode'=>'98363', 'name'=>'Nusei']);
        //Kecamatan Aroba Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5714, 'city_id'=>347, 'name'=>'Aroba']);
        DB::table('villages')->insert(['id'=>66661, 'districts_id'=>5714, 'zipcode'=>'98363', 'name'=>'Aroba']);
        DB::table('villages')->insert(['id'=>66662, 'districts_id'=>5714, 'zipcode'=>'98363', 'name'=>'Sangguar']);
        DB::table('villages')->insert(['id'=>66663, 'districts_id'=>5714, 'zipcode'=>'98363', 'name'=>'Sido Makmur']);
        DB::table('villages')->insert(['id'=>66664, 'districts_id'=>5714, 'zipcode'=>'98363', 'name'=>'Wimbro (nelayan Wimbro)']);
        DB::table('villages')->insert(['id'=>66665, 'districts_id'=>5714, 'zipcode'=>'98363', 'name'=>'Yaru']);
        //Kecamatan Sumuri (simuri) Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5715, 'city_id'=>347, 'name'=>'Sumuri (simuri)']);
        DB::table('villages')->insert(['id'=>66666, 'districts_id'=>5715, 'zipcode'=>'98363', 'name'=>'Forada']);
        DB::table('villages')->insert(['id'=>66667, 'districts_id'=>5715, 'zipcode'=>'98363', 'name'=>'Materabu Jaya']);
        DB::table('villages')->insert(['id'=>66668, 'districts_id'=>5715, 'zipcode'=>'98363', 'name'=>'Saengga']);
        DB::table('villages')->insert(['id'=>66669, 'districts_id'=>5715, 'zipcode'=>'98363', 'name'=>'Tanah Merah']);
        DB::table('villages')->insert(['id'=>66670, 'districts_id'=>5715, 'zipcode'=>'98363', 'name'=>'Tofoi']);
        //Kecamatan Fafurwar (irorutu) Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5716, 'city_id'=>347, 'name'=>'Fafurwar (irorutu)']);
        DB::table('villages')->insert(['id'=>66671, 'districts_id'=>5716, 'zipcode'=>'98363', 'name'=>'Fruata (fuata/irorutu Ii)']);
        DB::table('villages')->insert(['id'=>66672, 'districts_id'=>5716, 'zipcode'=>'98363', 'name'=>'Meryedi (maryedi)']);
        DB::table('villages')->insert(['id'=>66673, 'districts_id'=>5716, 'zipcode'=>'98363', 'name'=>'Riendo']);
        //Kecamatan Kuri Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5717, 'city_id'=>347, 'name'=>'Kuri']);
        DB::table('villages')->insert(['id'=>66674, 'districts_id'=>5717, 'zipcode'=>'98363', 'name'=>'Naramasa']);
        DB::table('villages')->insert(['id'=>66675, 'districts_id'=>5717, 'zipcode'=>'98363', 'name'=>'Obo']);
        DB::table('villages')->insert(['id'=>66676, 'districts_id'=>5717, 'zipcode'=>'98363', 'name'=>'Refideso']);
        DB::table('villages')->insert(['id'=>66677, 'districts_id'=>5717, 'zipcode'=>'98363', 'name'=>'Sarbe']);
        DB::table('villages')->insert(['id'=>66678, 'districts_id'=>5717, 'zipcode'=>'98363', 'name'=>'Wagura']);
        //Kecamatan Kaitaro Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5718, 'city_id'=>347, 'name'=>'Kaitaro']);
        DB::table('villages')->insert(['id'=>66679, 'districts_id'=>5718, 'zipcode'=>'98363', 'name'=>'Sara']);
        DB::table('villages')->insert(['id'=>66680, 'districts_id'=>5718, 'zipcode'=>'98363', 'name'=>'Suga']);
        DB::table('villages')->insert(['id'=>66681, 'districts_id'=>5718, 'zipcode'=>'98363', 'name'=>'Tugarama (tugerama)']);
        DB::table('villages')->insert(['id'=>66682, 'districts_id'=>5718, 'zipcode'=>'98363', 'name'=>'Warga Nusa Ii']);
        DB::table('villages')->insert(['id'=>66683, 'districts_id'=>5718, 'zipcode'=>'98363', 'name'=>'Warganusa I (warbanusa I)']);
        //Kecamatan Tembuni Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5719, 'city_id'=>347, 'name'=>'Tembuni']);
        DB::table('villages')->insert(['id'=>66684, 'districts_id'=>5719, 'zipcode'=>'98364', 'name'=>'Araisum']);
        DB::table('villages')->insert(['id'=>66685, 'districts_id'=>5719, 'zipcode'=>'98364', 'name'=>'Bangun Mulyo/mulia']);
        DB::table('villages')->insert(['id'=>66686, 'districts_id'=>5719, 'zipcode'=>'98364', 'name'=>'Mogoi Baru']);
        DB::table('villages')->insert(['id'=>66687, 'districts_id'=>5719, 'zipcode'=>'98364', 'name'=>'Tembuni']);
        //Kecamatan Bintuni Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5720, 'city_id'=>347, 'name'=>'Bintuni']);
        DB::table('villages')->insert(['id'=>66688, 'districts_id'=>5720, 'zipcode'=>'98364', 'name'=>'Argosigemerai']);
        DB::table('villages')->insert(['id'=>66689, 'districts_id'=>5720, 'zipcode'=>'98364', 'name'=>'Beimes']);
        DB::table('villages')->insert(['id'=>66690, 'districts_id'=>5720, 'zipcode'=>'98364', 'name'=>'Bintuni Barat']);
        DB::table('villages')->insert(['id'=>66691, 'districts_id'=>5720, 'zipcode'=>'98364', 'name'=>'Bintuni Timur']);
        DB::table('villages')->insert(['id'=>66692, 'districts_id'=>5720, 'zipcode'=>'98364', 'name'=>'Iguriji']);
        DB::table('villages')->insert(['id'=>66693, 'districts_id'=>5720, 'zipcode'=>'98364', 'name'=>'Masina']);
        DB::table('villages')->insert(['id'=>66694, 'districts_id'=>5720, 'zipcode'=>'98364', 'name'=>'Tuasai']);
        DB::table('villages')->insert(['id'=>66695, 'districts_id'=>5720, 'zipcode'=>'98364', 'name'=>'Wesiri']);
        //Kecamatan Manimeri Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5721, 'city_id'=>347, 'name'=>'Manimeri']);
        DB::table('villages')->insert(['id'=>66696, 'districts_id'=>5721, 'zipcode'=>'98364', 'name'=>'Atibo Manimeri']);
        DB::table('villages')->insert(['id'=>66697, 'districts_id'=>5721, 'zipcode'=>'98364', 'name'=>'Banjar Ausoy']);
        DB::table('villages')->insert(['id'=>66698, 'districts_id'=>5721, 'zipcode'=>'98364', 'name'=>'Bumi Saniari']);
        DB::table('villages')->insert(['id'=>66699, 'districts_id'=>5721, 'zipcode'=>'98364', 'name'=>'Korano Jaya']);
        DB::table('villages')->insert(['id'=>66700, 'districts_id'=>5721, 'zipcode'=>'98364', 'name'=>'Pasamai']);
        DB::table('villages')->insert(['id'=>66701, 'districts_id'=>5721, 'zipcode'=>'98364', 'name'=>'Waraitama']);
        //Kecamatan Dataran Beimes Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5722, 'city_id'=>347, 'name'=>'Dataran Beimes']);
        DB::table('villages')->insert(['id'=>66702, 'districts_id'=>5722, 'zipcode'=>'98364', 'name'=>'Cumnaji']);
        DB::table('villages')->insert(['id'=>66703, 'districts_id'=>5722, 'zipcode'=>'98364', 'name'=>'Horna (homa)']);
        DB::table('villages')->insert(['id'=>66704, 'districts_id'=>5722, 'zipcode'=>'98364', 'name'=>'Huss']);
        DB::table('villages')->insert(['id'=>66705, 'districts_id'=>5722, 'zipcode'=>'98364', 'name'=>'Menci']);
        DB::table('villages')->insert(['id'=>66706, 'districts_id'=>5722, 'zipcode'=>'98364', 'name'=>'Sir']);
        DB::table('villages')->insert(['id'=>66707, 'districts_id'=>5722, 'zipcode'=>'98364', 'name'=>'Ugdohop']);
        //Kecamatan Tuhiba Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5723, 'city_id'=>347, 'name'=>'Tuhiba']);
        DB::table('villages')->insert(['id'=>66708, 'districts_id'=>5723, 'zipcode'=>'98364', 'name'=>'Kucir']);
        DB::table('villages')->insert(['id'=>66709, 'districts_id'=>5723, 'zipcode'=>'98364', 'name'=>'Sibena Permai (ii)']);
        DB::table('villages')->insert(['id'=>66710, 'districts_id'=>5723, 'zipcode'=>'98364', 'name'=>'Sibena Raya (i)']);
        DB::table('villages')->insert(['id'=>66711, 'districts_id'=>5723, 'zipcode'=>'98364', 'name'=>'Tisaida']);
        DB::table('villages')->insert(['id'=>66712, 'districts_id'=>5723, 'zipcode'=>'98364', 'name'=>'Tuhiba']);
        //Kecamatan Wamesa (idoor) Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5724, 'city_id'=>347, 'name'=>'Wamesa (idoor)']);
        DB::table('villages')->insert(['id'=>66713, 'districts_id'=>5724, 'zipcode'=>'98364', 'name'=>'Mamuranu']);
        DB::table('villages')->insert(['id'=>66714, 'districts_id'=>5724, 'zipcode'=>'98364', 'name'=>'Wamesa I - Idoor']);
        DB::table('villages')->insert(['id'=>66715, 'districts_id'=>5724, 'zipcode'=>'98364', 'name'=>'Wamesa Ii - Yakati']);
        DB::table('villages')->insert(['id'=>66716, 'districts_id'=>5724, 'zipcode'=>'98364', 'name'=>'Yansei (yansey/ensei/yensei)']);
        //Kecamatan Aranday Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5725, 'city_id'=>347, 'name'=>'Aranday']);
        DB::table('villages')->insert(['id'=>66717, 'districts_id'=>5725, 'zipcode'=>'98365', 'name'=>'Aranday (arandai)']);
        DB::table('villages')->insert(['id'=>66718, 'districts_id'=>5725, 'zipcode'=>'98365', 'name'=>'Baru (kampung Baru)']);
        DB::table('villages')->insert(['id'=>66719, 'districts_id'=>5725, 'zipcode'=>'98365', 'name'=>'Kecap']);
        DB::table('villages')->insert(['id'=>66720, 'districts_id'=>5725, 'zipcode'=>'98365', 'name'=>'Manunggal Karya/jaya']);
        //Kecamatan Mayado Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5726, 'city_id'=>347, 'name'=>'Mayado']);
        DB::table('villages')->insert(['id'=>66721, 'districts_id'=>5726, 'zipcode'=>'98365', 'name'=>'Barma']);
        DB::table('villages')->insert(['id'=>66722, 'districts_id'=>5726, 'zipcode'=>'98365', 'name'=>'Barma Baru (stencool)']);
        DB::table('villages')->insert(['id'=>66723, 'districts_id'=>5726, 'zipcode'=>'98365', 'name'=>'Meyado (mayado/meyabo)']);
        DB::table('villages')->insert(['id'=>66724, 'districts_id'=>5726, 'zipcode'=>'98365', 'name'=>'Vasco Damneen (vesco Damnem/sten)']);
        //Kecamatan Moskona Selatan Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5727, 'city_id'=>347, 'name'=>'Moskona Selatan']);
        DB::table('villages')->insert(['id'=>66725, 'districts_id'=>5727, 'zipcode'=>'98365', 'name'=>'Barma Barat']);
        DB::table('villages')->insert(['id'=>66726, 'districts_id'=>5727, 'zipcode'=>'98365', 'name'=>'Inggof']);
        DB::table('villages')->insert(['id'=>66727, 'districts_id'=>5727, 'zipcode'=>'98365', 'name'=>'Jagiro']);
        DB::table('villages')->insert(['id'=>66728, 'districts_id'=>5727, 'zipcode'=>'98365', 'name'=>'Meyenda']);
        DB::table('villages')->insert(['id'=>66729, 'districts_id'=>5727, 'zipcode'=>'98365', 'name'=>'Rawara']);
        //Kecamatan Kamundan Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5728, 'city_id'=>347, 'name'=>'Kamundan']);
        DB::table('villages')->insert(['id'=>66730, 'districts_id'=>5728, 'zipcode'=>'98365', 'name'=>'Bibiram']);
        DB::table('villages')->insert(['id'=>66731, 'districts_id'=>5728, 'zipcode'=>'98365', 'name'=>'Kalitama I (kalitami I)']);
        DB::table('villages')->insert(['id'=>66732, 'districts_id'=>5728, 'zipcode'=>'98365', 'name'=>'Kalitama Ii (kalitami Ii)']);
        DB::table('villages')->insert(['id'=>66733, 'districts_id'=>5728, 'zipcode'=>'98365', 'name'=>'Kenara']);
        //Kecamatan Tomu Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5729, 'city_id'=>347, 'name'=>'Tomu']);
        DB::table('villages')->insert(['id'=>66734, 'districts_id'=>5729, 'zipcode'=>'98365', 'name'=>'Ekam']);
        DB::table('villages')->insert(['id'=>66735, 'districts_id'=>5729, 'zipcode'=>'98365', 'name'=>'Sebyar Rejosasi/rejosari']);
        DB::table('villages')->insert(['id'=>66736, 'districts_id'=>5729, 'zipcode'=>'98365', 'name'=>'Taroy (toray/taroi)']);
        DB::table('villages')->insert(['id'=>66737, 'districts_id'=>5729, 'zipcode'=>'98365', 'name'=>'Tomu']);
        //Kecamatan Moskona Barat Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5730, 'city_id'=>347, 'name'=>'Moskona Barat']);
        DB::table('villages')->insert(['id'=>66738, 'districts_id'=>5730, 'zipcode'=>'98365', 'name'=>'Istiwkem (istikem)']);
        DB::table('villages')->insert(['id'=>66739, 'districts_id'=>5730, 'zipcode'=>'98365', 'name'=>'Macok']);
        DB::table('villages')->insert(['id'=>66740, 'districts_id'=>5730, 'zipcode'=>'98365', 'name'=>'Mejnic (majnic/majnik)']);
        DB::table('villages')->insert(['id'=>66741, 'districts_id'=>5730, 'zipcode'=>'98365', 'name'=>'Meyerga (mayerga)']);
        //Kecamatan Weriagar Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5731, 'city_id'=>347, 'name'=>'Weriagar']);
        DB::table('villages')->insert(['id'=>66742, 'districts_id'=>5731, 'zipcode'=>'98365', 'name'=>'Mogotira (mogmesa)']);
        DB::table('villages')->insert(['id'=>66743, 'districts_id'=>5731, 'zipcode'=>'98365', 'name'=>'Tuanaikin']);
        DB::table('villages')->insert(['id'=>66744, 'districts_id'=>5731, 'zipcode'=>'98365', 'name'=>'Weriagar']);
        DB::table('villages')->insert(['id'=>66745, 'districts_id'=>5731, 'zipcode'=>'98365', 'name'=>'Weriagar Baru']);
        DB::table('villages')->insert(['id'=>66746, 'districts_id'=>5731, 'zipcode'=>'98365', 'name'=>'Weriagar Utara']);
        //Kecamatan Merdey Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5732, 'city_id'=>347, 'name'=>'Merdey']);
        DB::table('villages')->insert(['id'=>66747, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Anajero']);
        DB::table('villages')->insert(['id'=>66748, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Mekiesefeb']);
        DB::table('villages')->insert(['id'=>66749, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Menggerba']);
        DB::table('villages')->insert(['id'=>66750, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Merdey']);
        DB::table('villages')->insert(['id'=>66751, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Meryeb']);
        DB::table('villages')->insert(['id'=>66752, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Meyetga']);
        DB::table('villages')->insert(['id'=>66753, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Meyom']);
        DB::table('villages')->insert(['id'=>66754, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Mogromus']);
        DB::table('villages')->insert(['id'=>66755, 'districts_id'=>5732, 'zipcode'=>'98373', 'name'=>'Morombuy']);
        //Kecamatan Biscoop Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5733, 'city_id'=>347, 'name'=>'Biscoop']);
        DB::table('villages')->insert(['id'=>66756, 'districts_id'=>5733, 'zipcode'=>'98373', 'name'=>'Eniba']);
        DB::table('villages')->insert(['id'=>66757, 'districts_id'=>5733, 'zipcode'=>'98373', 'name'=>'Ibori']);
        DB::table('villages')->insert(['id'=>66758, 'districts_id'=>5733, 'zipcode'=>'98373', 'name'=>'Jahabra']);
        DB::table('villages')->insert(['id'=>66759, 'districts_id'=>5733, 'zipcode'=>'98373', 'name'=>'Laudoho']);
        DB::table('villages')->insert(['id'=>66760, 'districts_id'=>5733, 'zipcode'=>'98373', 'name'=>'Menyembrui (menyembru)']);
        DB::table('villages')->insert(['id'=>66761, 'districts_id'=>5733, 'zipcode'=>'98373', 'name'=>'Meyorga']);
        DB::table('villages')->insert(['id'=>66762, 'districts_id'=>5733, 'zipcode'=>'98373', 'name'=>'Mowitka']);
        //Kecamatan Moskona Timur Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5734, 'city_id'=>347, 'name'=>'Moskona Timur']);
        DB::table('villages')->insert(['id'=>66763, 'districts_id'=>5734, 'zipcode'=>'98373', 'name'=>'Igomu']);
        DB::table('villages')->insert(['id'=>66764, 'districts_id'=>5734, 'zipcode'=>'98373', 'name'=>'Mesna']);
        DB::table('villages')->insert(['id'=>66765, 'districts_id'=>5734, 'zipcode'=>'98373', 'name'=>'Sumuy (sumui)']);
        //Kecamatan Moskona Utara Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5735, 'city_id'=>347, 'name'=>'Moskona Utara']);
        DB::table('villages')->insert(['id'=>66766, 'districts_id'=>5735, 'zipcode'=>'98373', 'name'=>'Inofina']);
        DB::table('villages')->insert(['id'=>66767, 'districts_id'=>5735, 'zipcode'=>'98373', 'name'=>'Merestim (maristim)']);
        DB::table('villages')->insert(['id'=>66768, 'districts_id'=>5735, 'zipcode'=>'98373', 'name'=>'Mosum']);
        DB::table('villages')->insert(['id'=>66769, 'districts_id'=>5735, 'zipcode'=>'98373', 'name'=>'Moyeba']);
        //Kecamatan Masyeta Kab. Teluk Bintuni Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5736, 'city_id'=>347, 'name'=>'Masyeta']);
        DB::table('villages')->insert(['id'=>66770, 'districts_id'=>5736, 'zipcode'=>'98373', 'name'=>'Kalibiru']);
        DB::table('villages')->insert(['id'=>66771, 'districts_id'=>5736, 'zipcode'=>'98373', 'name'=>'Maestofu (mestofu)']);
        DB::table('villages')->insert(['id'=>66772, 'districts_id'=>5736, 'zipcode'=>'98373', 'name'=>'Masyeta']);
        DB::table('villages')->insert(['id'=>66773, 'districts_id'=>5736, 'zipcode'=>'98373', 'name'=>'Mesomda']);

        //Kab. Tambrauw Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>348, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Tambrauw']);
        //Kecamatan Mubrani Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5737, 'city_id'=>348, 'name'=>'Mubrani']);
        DB::table('villages')->insert(['id'=>66774, 'districts_id'=>5737, 'zipcode'=>'98371', 'name'=>'Arfu']);
        DB::table('villages')->insert(['id'=>66775, 'districts_id'=>5737, 'zipcode'=>'98371', 'name'=>'Atori']);
        DB::table('villages')->insert(['id'=>66776, 'districts_id'=>5737, 'zipcode'=>'98371', 'name'=>'Bawey']);
        DB::table('villages')->insert(['id'=>66777, 'districts_id'=>5737, 'zipcode'=>'98371', 'name'=>'Bijanfou (bijamfou/buanfou)']);
        DB::table('villages')->insert(['id'=>66778, 'districts_id'=>5737, 'zipcode'=>'98371', 'name'=>'Meriambeke (meriambeker)']);
        DB::table('villages')->insert(['id'=>66779, 'districts_id'=>5737, 'zipcode'=>'98371', 'name'=>'Waru']);
        DB::table('villages')->insert(['id'=>66780, 'districts_id'=>5737, 'zipcode'=>'98371', 'name'=>'Wasnebri (warsnembri/wasnembri)']);
        //Kecamatan Amberbaken Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5738, 'city_id'=>348, 'name'=>'Amberbaken']);
        DB::table('villages')->insert(['id'=>66781, 'districts_id'=>5738, 'zipcode'=>'98371', 'name'=>'Bondopi']);
        DB::table('villages')->insert(['id'=>66782, 'districts_id'=>5738, 'zipcode'=>'98371', 'name'=>'Mangganek (arupi)']);
        DB::table('villages')->insert(['id'=>66783, 'districts_id'=>5738, 'zipcode'=>'98371', 'name'=>'Sasuy (sasui)']);
        DB::table('villages')->insert(['id'=>66784, 'districts_id'=>5738, 'zipcode'=>'98371', 'name'=>'Serayo']);
        DB::table('villages')->insert(['id'=>66785, 'districts_id'=>5738, 'zipcode'=>'98371', 'name'=>'Soukorem (saukorem)']);
        DB::table('villages')->insert(['id'=>66786, 'districts_id'=>5738, 'zipcode'=>'98371', 'name'=>'Wasarak']);
        DB::table('villages')->insert(['id'=>66787, 'districts_id'=>5738, 'zipcode'=>'98371', 'name'=>'Wefiani']);
        //Kecamatan Senopi Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5739, 'city_id'=>348, 'name'=>'Senopi']);
        DB::table('villages')->insert(['id'=>66788, 'districts_id'=>5739, 'zipcode'=>'98372', 'name'=>'Afrawi']);
        DB::table('villages')->insert(['id'=>66789, 'districts_id'=>5739, 'zipcode'=>'98372', 'name'=>'Senopi']);
        DB::table('villages')->insert(['id'=>66790, 'districts_id'=>5739, 'zipcode'=>'98372', 'name'=>'Wausin (asiti)']);
        //Kecamatan Kebar Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5740, 'city_id'=>348, 'name'=>'Kebar']);
        DB::table('villages')->insert(['id'=>66791, 'districts_id'=>5740, 'zipcode'=>'98372', 'name'=>'Ajami']);
        DB::table('villages')->insert(['id'=>66792, 'districts_id'=>5740, 'zipcode'=>'98372', 'name'=>'Akmuri']);
        DB::table('villages')->insert(['id'=>66793, 'districts_id'=>5740, 'zipcode'=>'98372', 'name'=>'Atai']);
        DB::table('villages')->insert(['id'=>66794, 'districts_id'=>5740, 'zipcode'=>'98372', 'name'=>'Inam']);
        DB::table('villages')->insert(['id'=>66795, 'districts_id'=>5740, 'zipcode'=>'98372', 'name'=>'Inambuari']);
        DB::table('villages')->insert(['id'=>66796, 'districts_id'=>5740, 'zipcode'=>'98372', 'name'=>'Injai']);
        DB::table('villages')->insert(['id'=>66797, 'districts_id'=>5740, 'zipcode'=>'98372', 'name'=>'Jandurau']);
        DB::table('villages')->insert(['id'=>66798, 'districts_id'=>5740, 'zipcode'=>'98372', 'name'=>'Nekori']);
        //Kecamatan Moraid Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5741, 'city_id'=>348, 'name'=>'Moraid']);
        DB::table('villages')->insert(['id'=>66799, 'districts_id'=>5741, 'zipcode'=>'98472', 'name'=>'Dela (della)']);
        DB::table('villages')->insert(['id'=>66800, 'districts_id'=>5741, 'zipcode'=>'98472', 'name'=>'Malawarsai (malaworsai)']);
        DB::table('villages')->insert(['id'=>66801, 'districts_id'=>5741, 'zipcode'=>'98472', 'name'=>'Mega']);
        DB::table('villages')->insert(['id'=>66802, 'districts_id'=>5741, 'zipcode'=>'98472', 'name'=>'Salewok (selewok)']);
        DB::table('villages')->insert(['id'=>66803, 'districts_id'=>5741, 'zipcode'=>'98472', 'name'=>'Selekebu (selekopi)']);
        DB::table('villages')->insert(['id'=>66804, 'districts_id'=>5741, 'zipcode'=>'98472', 'name'=>'Sengkeduk (saengkeduk)']);
        DB::table('villages')->insert(['id'=>66805, 'districts_id'=>5741, 'zipcode'=>'98472', 'name'=>'Siwis']);
        //Kecamatan Miyah (meyah) Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5742, 'city_id'=>348, 'name'=>'Miyah (meyah)']);
        DB::table('villages')->insert(['id'=>66806, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Aibogiar']);
        DB::table('villages')->insert(['id'=>66807, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Ayae']);
        DB::table('villages')->insert(['id'=>66808, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Ayiamane']);
        DB::table('villages')->insert(['id'=>66809, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Meis']);
        DB::table('villages')->insert(['id'=>66810, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Miri/ Ibiah']);
        DB::table('villages')->insert(['id'=>66811, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Revewes (ruvewes)']);
        DB::table('villages')->insert(['id'=>66812, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Ruf']);
        DB::table('villages')->insert(['id'=>66813, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Siakwa']);
        DB::table('villages')->insert(['id'=>66814, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Tabamsere']);
        DB::table('villages')->insert(['id'=>66815, 'districts_id'=>5742, 'zipcode'=>'98473', 'name'=>'Yabuow (jabouw)']);
        //Kecamatan Fef (peef) Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5743, 'city_id'=>348, 'name'=>'Fef (peef)']);
        DB::table('villages')->insert(['id'=>66816, 'districts_id'=>5743, 'zipcode'=>'98473', 'name'=>'Ases']);
        DB::table('villages')->insert(['id'=>66817, 'districts_id'=>5743, 'zipcode'=>'98473', 'name'=>'Fef']);
        DB::table('villages')->insert(['id'=>66818, 'districts_id'=>5743, 'zipcode'=>'98473', 'name'=>'Mawor']);
        DB::table('villages')->insert(['id'=>66819, 'districts_id'=>5743, 'zipcode'=>'98473', 'name'=>'Sikor']);
        DB::table('villages')->insert(['id'=>66820, 'districts_id'=>5743, 'zipcode'=>'98473', 'name'=>'Syubun']);
        DB::table('villages')->insert(['id'=>66821, 'districts_id'=>5743, 'zipcode'=>'98473', 'name'=>'Wayo']);
        //Kecamatan Syujak Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5744, 'city_id'=>348, 'name'=>'Syujak']);
        DB::table('villages')->insert(['id'=>66822, 'districts_id'=>5744, 'zipcode'=>'98473', 'name'=>'Banso']);
        DB::table('villages')->insert(['id'=>66823, 'districts_id'=>5744, 'zipcode'=>'98473', 'name'=>'Frafane']);
        DB::table('villages')->insert(['id'=>66824, 'districts_id'=>5744, 'zipcode'=>'98473', 'name'=>'Iof']);
        DB::table('villages')->insert(['id'=>66825, 'districts_id'=>5744, 'zipcode'=>'98473', 'name'=>'Soon']);
        DB::table('villages')->insert(['id'=>66826, 'districts_id'=>5744, 'zipcode'=>'98473', 'name'=>'Syujak (sujak)']);
        //Kecamatan Kwoor Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5745, 'city_id'=>348, 'name'=>'Kwoor']);
        DB::table('villages')->insert(['id'=>66827, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Batde (baddei)']);
        DB::table('villages')->insert(['id'=>66828, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Hopmare']);
        DB::table('villages')->insert(['id'=>66829, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Kranfotsu']);
        DB::table('villages')->insert(['id'=>66830, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Krisnos']);
        DB::table('villages')->insert(['id'=>66831, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Kwesefo (kosefa)']);
        DB::table('villages')->insert(['id'=>66832, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Kwoor']);
        DB::table('villages')->insert(['id'=>66833, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Syuau']);
        DB::table('villages')->insert(['id'=>66834, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Syukwes']);
        DB::table('villages')->insert(['id'=>66835, 'districts_id'=>5745, 'zipcode'=>'98473', 'name'=>'Syumbab']);
        //Kecamatan Sausapor Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5746, 'city_id'=>348, 'name'=>'Sausapor']);
        DB::table('villages')->insert(['id'=>66836, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Bikar']);
        DB::table('villages')->insert(['id'=>66837, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Emaos']);
        DB::table('villages')->insert(['id'=>66838, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Jokte']);
        DB::table('villages')->insert(['id'=>66839, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Sausapor']);
        DB::table('villages')->insert(['id'=>66840, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Uigwem']);
        DB::table('villages')->insert(['id'=>66841, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Wertam']);
        DB::table('villages')->insert(['id'=>66842, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Werur']);
        DB::table('villages')->insert(['id'=>66843, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Werur Besar']);
        DB::table('villages')->insert(['id'=>66844, 'districts_id'=>5746, 'zipcode'=>'98473', 'name'=>'Werwaf']);
        //Kecamatan Abun Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5747, 'city_id'=>348, 'name'=>'Abun']);
        DB::table('villages')->insert(['id'=>66845, 'districts_id'=>5747, 'zipcode'=>'98473', 'name'=>'Saubeba']);
        DB::table('villages')->insert(['id'=>66846, 'districts_id'=>5747, 'zipcode'=>'98473', 'name'=>'Waibem (waiben)']);
        DB::table('villages')->insert(['id'=>66847, 'districts_id'=>5747, 'zipcode'=>'98473', 'name'=>'Warmandi']);
        DB::table('villages')->insert(['id'=>66848, 'districts_id'=>5747, 'zipcode'=>'98473', 'name'=>'Wau']);
        DB::table('villages')->insert(['id'=>66849, 'districts_id'=>5747, 'zipcode'=>'98473', 'name'=>'Weyaf']);
        //Kecamatan Yembun Kab. Tambrauw Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5748, 'city_id'=>348, 'name'=>'Yembun']);
        DB::table('villages')->insert(['id'=>66850, 'districts_id'=>5748, 'zipcode'=>'98474', 'name'=>'Bamus']);
        DB::table('villages')->insert(['id'=>66851, 'districts_id'=>5748, 'zipcode'=>'98474', 'name'=>'Bamus Waiman (bamuswayman)']);
        DB::table('villages')->insert(['id'=>66852, 'districts_id'=>5748, 'zipcode'=>'98474', 'name'=>'Baun (baum)']);
        DB::table('villages')->insert(['id'=>66853, 'districts_id'=>5748, 'zipcode'=>'98474', 'name'=>'Mefnanyam (metnayam)']);
        DB::table('villages')->insert(['id'=>66854, 'districts_id'=>5748, 'zipcode'=>'98474', 'name'=>'Metbelum']);
        DB::table('villages')->insert(['id'=>66855, 'districts_id'=>5748, 'zipcode'=>'98474', 'name'=>'Metbesa']);
        DB::table('villages')->insert(['id'=>66856, 'districts_id'=>5748, 'zipcode'=>'98474', 'name'=>'Sumbekas']);
        DB::table('villages')->insert(['id'=>66857, 'districts_id'=>5748, 'zipcode'=>'98474', 'name'=>'Syarwom']);

        //Kota Sorong Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>349, 'province_id'=>25, 'type'=>'city', 'name'=>'Sorong']);
        //Kecamatan Sorong Barat Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5749, 'city_id'=>349, 'name'=>'Sorong Barat']);
        DB::table('villages')->insert(['id'=>66858, 'districts_id'=>5749, 'zipcode'=>'98411', 'name'=>'Klawasi']);
        DB::table('villages')->insert(['id'=>66859, 'districts_id'=>5749, 'zipcode'=>'98411', 'name'=>'Saoka']);
        DB::table('villages')->insert(['id'=>66860, 'districts_id'=>5749, 'zipcode'=>'98411', 'name'=>'Tanjung Kasuari']);
        DB::table('villages')->insert(['id'=>66861, 'districts_id'=>5749, 'zipcode'=>'98412', 'name'=>'Klabala']);
        DB::table('villages')->insert(['id'=>66862, 'districts_id'=>5749, 'zipcode'=>'98412', 'name'=>'Rufei']);
        //Kecamatan Sorong Kepulauan Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5750, 'city_id'=>349, 'name'=>'Sorong Kepulauan']);
        DB::table('villages')->insert(['id'=>66863, 'districts_id'=>5750, 'zipcode'=>'98413', 'name'=>'Dum Barat (doom Barat)']);
        DB::table('villages')->insert(['id'=>66864, 'districts_id'=>5750, 'zipcode'=>'98413', 'name'=>'Dum Timur (doom Timur)']);
        DB::table('villages')->insert(['id'=>66865, 'districts_id'=>5750, 'zipcode'=>'98413', 'name'=>'Raam']);
        DB::table('villages')->insert(['id'=>66866, 'districts_id'=>5750, 'zipcode'=>'98413', 'name'=>'Soop']);
        //Kecamatan Sorong Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5751, 'city_id'=>349, 'name'=>'Sorong']);
        DB::table('villages')->insert(['id'=>66867, 'districts_id'=>5751, 'zipcode'=>'98413', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>66868, 'districts_id'=>5751, 'zipcode'=>'98414', 'name'=>'Klademak']);
        DB::table('villages')->insert(['id'=>66869, 'districts_id'=>5751, 'zipcode'=>'98414', 'name'=>'Klakublik']);
        DB::table('villages')->insert(['id'=>66870, 'districts_id'=>5751, 'zipcode'=>'98414', 'name'=>'Klasuur']);
        DB::table('villages')->insert(['id'=>66871, 'districts_id'=>5751, 'zipcode'=>'98416', 'name'=>'Remu Utara']);
        //Kecamatan Sorong Timur Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5752, 'city_id'=>349, 'name'=>'Sorong Timur']);
        DB::table('villages')->insert(['id'=>66872, 'districts_id'=>5752, 'zipcode'=>'98414', 'name'=>'Klablim']);
        DB::table('villages')->insert(['id'=>66873, 'districts_id'=>5752, 'zipcode'=>'98415', 'name'=>'Klawalu']);
        DB::table('villages')->insert(['id'=>66874, 'districts_id'=>5752, 'zipcode'=>'98417', 'name'=>'Klasaman']);
        DB::table('villages')->insert(['id'=>66875, 'districts_id'=>5752, 'zipcode'=>'98418', 'name'=>'Giwu']);
        DB::table('villages')->insert(['id'=>66876, 'districts_id'=>5752, 'zipcode'=>'98418', 'name'=>'Klamana']);
        DB::table('villages')->insert(['id'=>66877, 'districts_id'=>5752, 'zipcode'=>'98418', 'name'=>'Klasuat']);
        DB::table('villages')->insert(['id'=>66878, 'districts_id'=>5752, 'zipcode'=>'98419', 'name'=>'Klawuyuk']);
        //Kecamatan Sorong Manoi Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5753, 'city_id'=>349, 'name'=>'Sorong Manoi']);
        DB::table('villages')->insert(['id'=>66879, 'districts_id'=>5753, 'zipcode'=>'98414', 'name'=>'Klaligi']);
        DB::table('villages')->insert(['id'=>66880, 'districts_id'=>5753, 'zipcode'=>'98415', 'name'=>'Remu Selatan']);
        DB::table('villages')->insert(['id'=>66881, 'districts_id'=>5753, 'zipcode'=>'98416', 'name'=>'Klasabi']);
        DB::table('villages')->insert(['id'=>66882, 'districts_id'=>5753, 'zipcode'=>'98416', 'name'=>'Malabutor']);
        DB::table('villages')->insert(['id'=>66883, 'districts_id'=>5753, 'zipcode'=>'98416', 'name'=>'Malawei']);
        //Kecamatan Sorong Utara Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5754, 'city_id'=>349, 'name'=>'Sorong Utara']);
        DB::table('villages')->insert(['id'=>66884, 'districts_id'=>5754, 'zipcode'=>'98416', 'name'=>'Klagete']);
        DB::table('villages')->insert(['id'=>66885, 'districts_id'=>5754, 'zipcode'=>'98419', 'name'=>'Malaingkedi']);
        DB::table('villages')->insert(['id'=>66886, 'districts_id'=>5754, 'zipcode'=>'98419', 'name'=>'Malanu']);
        DB::table('villages')->insert(['id'=>66887, 'districts_id'=>5754, 'zipcode'=>'98419', 'name'=>'Matalamagi (matalamangi)']);
        DB::table('villages')->insert(['id'=>66888, 'districts_id'=>5754, 'zipcode'=>'98419', 'name'=>'Sawagumu']);
        //Kecamatan Mayamuk Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5755, 'city_id'=>349, 'name'=>'Mayamuk']);
        DB::table('villages')->insert(['id'=>66889, 'districts_id'=>5755, 'zipcode'=>'98451', 'name'=>'Arar']);
        DB::table('villages')->insert(['id'=>66890, 'districts_id'=>5755, 'zipcode'=>'98451', 'name'=>'Jeflio (yeflio/yefilio)']);
        DB::table('villages')->insert(['id'=>66891, 'districts_id'=>5755, 'zipcode'=>'98451', 'name'=>'Klalin (klain)']);
        DB::table('villages')->insert(['id'=>66892, 'districts_id'=>5755, 'zipcode'=>'98451', 'name'=>'Klasmelek']);
        DB::table('villages')->insert(['id'=>66893, 'districts_id'=>5755, 'zipcode'=>'98451', 'name'=>'Makbalim']);
        DB::table('villages')->insert(['id'=>66894, 'districts_id'=>5755, 'zipcode'=>'98451', 'name'=>'Makbusun (makbusum)']);
        DB::table('villages')->insert(['id'=>66895, 'districts_id'=>5755, 'zipcode'=>'98451', 'name'=>'Makotyamsa']);
        DB::table('villages')->insert(['id'=>66896, 'districts_id'=>5755, 'zipcode'=>'98451', 'name'=>'Wen']);
        //Kecamatan Salawati Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5756, 'city_id'=>349, 'name'=>'Salawati']);
        DB::table('villages')->insert(['id'=>66897, 'districts_id'=>5756, 'zipcode'=>'98451', 'name'=>'Katinim']);
        DB::table('villages')->insert(['id'=>66898, 'districts_id'=>5756, 'zipcode'=>'98451', 'name'=>'Majaran']);
        DB::table('villages')->insert(['id'=>66899, 'districts_id'=>5756, 'zipcode'=>'98451', 'name'=>'Majener']);
        DB::table('villages')->insert(['id'=>66900, 'districts_id'=>5756, 'zipcode'=>'98451', 'name'=>'Malaus']);
        DB::table('villages')->insert(['id'=>66901, 'districts_id'=>5756, 'zipcode'=>'98451', 'name'=>'Matawolot']);
        DB::table('villages')->insert(['id'=>66902, 'districts_id'=>5756, 'zipcode'=>'98451', 'name'=>'Rawa Sugi']);
        DB::table('villages')->insert(['id'=>66903, 'districts_id'=>5756, 'zipcode'=>'98451', 'name'=>'Walal']);
        //Kecamatan Moisegen Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5757, 'city_id'=>349, 'name'=>'Moisegen']);
        DB::table('villages')->insert(['id'=>66904, 'districts_id'=>5757, 'zipcode'=>'98451', 'name'=>'Klafdalim']);
        DB::table('villages')->insert(['id'=>66905, 'districts_id'=>5757, 'zipcode'=>'98451', 'name'=>'Klaforo']);
        DB::table('villages')->insert(['id'=>66906, 'districts_id'=>5757, 'zipcode'=>'98451', 'name'=>'Klasarin']);
        DB::table('villages')->insert(['id'=>66907, 'districts_id'=>5757, 'zipcode'=>'98451', 'name'=>'Klasof']);
        DB::table('villages')->insert(['id'=>66908, 'districts_id'=>5757, 'zipcode'=>'98451', 'name'=>'Klawoton']);
        DB::table('villages')->insert(['id'=>66909, 'districts_id'=>5757, 'zipcode'=>'98451', 'name'=>'Ninjemur']);
        DB::table('villages')->insert(['id'=>66910, 'districts_id'=>5757, 'zipcode'=>'98451', 'name'=>'Wonosobo']);
        //Kecamatan Salawati Selatan Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5758, 'city_id'=>349, 'name'=>'Salawati Selatan']);
        DB::table('villages')->insert(['id'=>66911, 'districts_id'=>5758, 'zipcode'=>'98452', 'name'=>'Dulbatan']);
        DB::table('villages')->insert(['id'=>66912, 'districts_id'=>5758, 'zipcode'=>'98452', 'name'=>'Duriankari']);
        DB::table('villages')->insert(['id'=>66913, 'districts_id'=>5758, 'zipcode'=>'98452', 'name'=>'Katlol (klotlof/katlof)']);
        DB::table('villages')->insert(['id'=>66914, 'districts_id'=>5758, 'zipcode'=>'98452', 'name'=>'Manoket']);
        DB::table('villages')->insert(['id'=>66915, 'districts_id'=>5758, 'zipcode'=>'98452', 'name'=>'Maralol']);
        DB::table('villages')->insert(['id'=>66916, 'districts_id'=>5758, 'zipcode'=>'98452', 'name'=>'Sailolof']);
        DB::table('villages')->insert(['id'=>66917, 'districts_id'=>5758, 'zipcode'=>'98452', 'name'=>'Sakapul']);
        DB::table('villages')->insert(['id'=>66918, 'districts_id'=>5758, 'zipcode'=>'98452', 'name'=>'Waliam']);
        //Kecamatan Segun Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5759, 'city_id'=>349, 'name'=>'Segun']);
        DB::table('villages')->insert(['id'=>66919, 'districts_id'=>5759, 'zipcode'=>'98452', 'name'=>'Gisim']);
        DB::table('villages')->insert(['id'=>66920, 'districts_id'=>5759, 'zipcode'=>'98452', 'name'=>'Klasigon (klasegun)']);
        DB::table('villages')->insert(['id'=>66921, 'districts_id'=>5759, 'zipcode'=>'98452', 'name'=>'Majemau']);
        DB::table('villages')->insert(['id'=>66922, 'districts_id'=>5759, 'zipcode'=>'98452', 'name'=>'Segun']);
        DB::table('villages')->insert(['id'=>66923, 'districts_id'=>5759, 'zipcode'=>'98452', 'name'=>'Waimon']);
        DB::table('villages')->insert(['id'=>66924, 'districts_id'=>5759, 'zipcode'=>'98452', 'name'=>'Wainlabat']);
        //Kecamatan Seget Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5760, 'city_id'=>349, 'name'=>'Seget']);
        DB::table('villages')->insert(['id'=>66925, 'districts_id'=>5760, 'zipcode'=>'98452', 'name'=>'Kasim']);
        DB::table('villages')->insert(['id'=>66926, 'districts_id'=>5760, 'zipcode'=>'98452', 'name'=>'Kasimle']);
        DB::table('villages')->insert(['id'=>66927, 'districts_id'=>5760, 'zipcode'=>'98452', 'name'=>'Klayas']);
        DB::table('villages')->insert(['id'=>66928, 'districts_id'=>5760, 'zipcode'=>'98452', 'name'=>'Malabam (malaban)']);
        DB::table('villages')->insert(['id'=>66929, 'districts_id'=>5760, 'zipcode'=>'98452', 'name'=>'Seget']);
        DB::table('villages')->insert(['id'=>66930, 'districts_id'=>5760, 'zipcode'=>'98452', 'name'=>'Wajin']);
        DB::table('villages')->insert(['id'=>66931, 'districts_id'=>5760, 'zipcode'=>'98452', 'name'=>'Wasingsan']);
        DB::table('villages')->insert(['id'=>66932, 'districts_id'=>5760, 'zipcode'=>'98452', 'name'=>'Wayenkede']);
        //Kecamatan Klawak Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5761, 'city_id'=>349, 'name'=>'Klawak']);
        DB::table('villages')->insert(['id'=>66933, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Ayolokle']);
        DB::table('villages')->insert(['id'=>66934, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Brianlo']);
        DB::table('villages')->insert(['id'=>66935, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Hobard']);
        DB::table('villages')->insert(['id'=>66936, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Klamne']);
        DB::table('villages')->insert(['id'=>66937, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Mlawen']);
        DB::table('villages')->insert(['id'=>66938, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Sas']);
        DB::table('villages')->insert(['id'=>66939, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Tarsa']);
        DB::table('villages')->insert(['id'=>66940, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Totjin']);
        DB::table('villages')->insert(['id'=>66941, 'districts_id'=>5761, 'zipcode'=>'98453', 'name'=>'Wilty']);
        //Kecamatan Beraur Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5762, 'city_id'=>349, 'name'=>'Beraur']);
        DB::table('villages')->insert(['id'=>66942, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Bagung']);
        DB::table('villages')->insert(['id'=>66943, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Disfra']);
        DB::table('villages')->insert(['id'=>66944, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Kaas']);
        DB::table('villages')->insert(['id'=>66945, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Klabra']);
        DB::table('villages')->insert(['id'=>66946, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Klarion']);
        DB::table('villages')->insert(['id'=>66947, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Mumpi']);
        DB::table('villages')->insert(['id'=>66948, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Wanurian']);
        DB::table('villages')->insert(['id'=>66949, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Wensi']);
        DB::table('villages')->insert(['id'=>66950, 'districts_id'=>5762, 'zipcode'=>'98453', 'name'=>'Wisbiak']);
        //Kecamatan Klabot Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5763, 'city_id'=>349, 'name'=>'Klabot']);
        DB::table('villages')->insert(['id'=>66951, 'districts_id'=>5763, 'zipcode'=>'98453', 'name'=>'Buk']);
        DB::table('villages')->insert(['id'=>66952, 'districts_id'=>5763, 'zipcode'=>'98453', 'name'=>'Indiwi']);
        DB::table('villages')->insert(['id'=>66953, 'districts_id'=>5763, 'zipcode'=>'98453', 'name'=>'Klabot']);
        DB::table('villages')->insert(['id'=>66954, 'districts_id'=>5763, 'zipcode'=>'98453', 'name'=>'Klais']);
        DB::table('villages')->insert(['id'=>66955, 'districts_id'=>5763, 'zipcode'=>'98453', 'name'=>'Mimpe']);
        DB::table('villages')->insert(['id'=>66956, 'districts_id'=>5763, 'zipcode'=>'98453', 'name'=>'Mlakhan']);
        DB::table('villages')->insert(['id'=>66957, 'districts_id'=>5763, 'zipcode'=>'98453', 'name'=>'Mlat']);
        DB::table('villages')->insert(['id'=>66958, 'districts_id'=>5763, 'zipcode'=>'98453', 'name'=>'Mlawes']);
        //Kecamatan Klamono Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5764, 'city_id'=>349, 'name'=>'Klamono']);
        DB::table('villages')->insert(['id'=>66959, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Gisim Darat']);
        DB::table('villages')->insert(['id'=>66960, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Keladum']);
        DB::table('villages')->insert(['id'=>66961, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Klagulu']);
        DB::table('villages')->insert(['id'=>66962, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Klalomon']);
        DB::table('villages')->insert(['id'=>66963, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Klamano']);
        DB::table('villages')->insert(['id'=>66964, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Klamugun']);
        DB::table('villages')->insert(['id'=>66965, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Klasman']);
        DB::table('villages')->insert(['id'=>66966, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Klawana']);
        DB::table('villages')->insert(['id'=>66967, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Malajapa']);
        DB::table('villages')->insert(['id'=>66968, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Malasigit']);
        DB::table('villages')->insert(['id'=>66969, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Mlais']);
        DB::table('villages')->insert(['id'=>66970, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Wariayau']);
        DB::table('villages')->insert(['id'=>66971, 'districts_id'=>5764, 'zipcode'=>'98456', 'name'=>'Wonosari']);
        //Kecamatan Aimas Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5765, 'city_id'=>349, 'name'=>'Aimas']);
        DB::table('villages')->insert(['id'=>66972, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Aimas']);
        DB::table('villages')->insert(['id'=>66973, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Klabinain']);
        DB::table('villages')->insert(['id'=>66974, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Klaigit']);
        DB::table('villages')->insert(['id'=>66975, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Maibo']);
        DB::table('villages')->insert(['id'=>66976, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Malasom']);
        DB::table('villages')->insert(['id'=>66977, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Malawele']);
        DB::table('villages')->insert(['id'=>66978, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Malawili']);
        DB::table('villages')->insert(['id'=>66979, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Mariat Gunung']);
        DB::table('villages')->insert(['id'=>66980, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Mariat Pantai']);
        DB::table('villages')->insert(['id'=>66981, 'districts_id'=>5765, 'zipcode'=>'98457', 'name'=>'Warmon']);
        //Kecamatan Mariat Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5766, 'city_id'=>349, 'name'=>'Mariat']);
        DB::table('villages')->insert(['id'=>66982, 'districts_id'=>5766, 'zipcode'=>'98457', 'name'=>'Klaben']);
        DB::table('villages')->insert(['id'=>66983, 'districts_id'=>5766, 'zipcode'=>'98457', 'name'=>'Klamalu']);
        DB::table('villages')->insert(['id'=>66984, 'districts_id'=>5766, 'zipcode'=>'98457', 'name'=>'Klamasen']);
        DB::table('villages')->insert(['id'=>66985, 'districts_id'=>5766, 'zipcode'=>'98457', 'name'=>'Klasukuk']);
        DB::table('villages')->insert(['id'=>66986, 'districts_id'=>5766, 'zipcode'=>'98457', 'name'=>'Mariyai']);
        //Kecamatan Makbon Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5767, 'city_id'=>349, 'name'=>'Makbon']);
        DB::table('villages')->insert(['id'=>66987, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Asbaken']);
        DB::table('villages')->insert(['id'=>66988, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Bainkete']);
        DB::table('villages')->insert(['id'=>66989, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Batu Lubang/lobang']);
        DB::table('villages')->insert(['id'=>66990, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Batu Lubang/lobang Pantai']);
        DB::table('villages')->insert(['id'=>66991, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Kuadas (kwadas)']);
        DB::table('villages')->insert(['id'=>66992, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Makbon']);
        DB::table('villages')->insert(['id'=>66993, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Malaumkarta']);
        DB::table('villages')->insert(['id'=>66994, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Sawatuk']);
        DB::table('villages')->insert(['id'=>66995, 'districts_id'=>5767, 'zipcode'=>'98471', 'name'=>'Teluk Dore']);
        //Kecamatan Sayosa Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5768, 'city_id'=>349, 'name'=>'Sayosa']);
        DB::table('villages')->insert(['id'=>66996, 'districts_id'=>5768, 'zipcode'=>'98471', 'name'=>'Batu Payung']);
        DB::table('villages')->insert(['id'=>66997, 'districts_id'=>5768, 'zipcode'=>'98471', 'name'=>'Dasri']);
        DB::table('villages')->insert(['id'=>66998, 'districts_id'=>5768, 'zipcode'=>'98471', 'name'=>'Klatin (klatim)']);
        DB::table('villages')->insert(['id'=>66999, 'districts_id'=>5768, 'zipcode'=>'98471', 'name'=>'Luwelala (suwelala)']);
        DB::table('villages')->insert(['id'=>67000, 'districts_id'=>5768, 'zipcode'=>'98471', 'name'=>'Maladofok']);
        DB::table('villages')->insert(['id'=>67001, 'districts_id'=>5768, 'zipcode'=>'98471', 'name'=>'Sailala']);
        DB::table('villages')->insert(['id'=>67002, 'districts_id'=>5768, 'zipcode'=>'98471', 'name'=>'Saluk']);
        //Kecamatan Klayili Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5769, 'city_id'=>349, 'name'=>'Klayili']);
        DB::table('villages')->insert(['id'=>67003, 'districts_id'=>5769, 'zipcode'=>'98471', 'name'=>'Klasowoh']);
        DB::table('villages')->insert(['id'=>67004, 'districts_id'=>5769, 'zipcode'=>'98471', 'name'=>'Klawuluh']);
        DB::table('villages')->insert(['id'=>67005, 'districts_id'=>5769, 'zipcode'=>'98471', 'name'=>'Klayali']);
        DB::table('villages')->insert(['id'=>67006, 'districts_id'=>5769, 'zipcode'=>'98471', 'name'=>'Kwakeik']);
        DB::table('villages')->insert(['id'=>67007, 'districts_id'=>5769, 'zipcode'=>'98471', 'name'=>'Malakobutu']);
        DB::table('villages')->insert(['id'=>67008, 'districts_id'=>5769, 'zipcode'=>'98471', 'name'=>'Malalilis']);
        //Kecamatan Maudus Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5770, 'city_id'=>349, 'name'=>'Maudus']);
        DB::table('villages')->insert(['id'=>67009, 'districts_id'=>5770, 'zipcode'=>'98472', 'name'=>'Dasri']);
        DB::table('villages')->insert(['id'=>67010, 'districts_id'=>5770, 'zipcode'=>'98472', 'name'=>'Ketawas']);
        DB::table('villages')->insert(['id'=>67011, 'districts_id'=>5770, 'zipcode'=>'98472', 'name'=>'Klaos']);
        DB::table('villages')->insert(['id'=>67012, 'districts_id'=>5770, 'zipcode'=>'98472', 'name'=>'Klatim']);
        DB::table('villages')->insert(['id'=>67013, 'districts_id'=>5770, 'zipcode'=>'98472', 'name'=>'Luwelala']);
        DB::table('villages')->insert(['id'=>67014, 'districts_id'=>5770, 'zipcode'=>'98472', 'name'=>'Masos']);
        DB::table('villages')->insert(['id'=>67015, 'districts_id'=>5770, 'zipcode'=>'98472', 'name'=>'Suluh']);
        DB::table('villages')->insert(['id'=>67016, 'districts_id'=>5770, 'zipcode'=>'98472', 'name'=>'Warbo']);
        //Kecamatan Klaso Kota Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5771, 'city_id'=>349, 'name'=>'Klaso']);
        DB::table('villages')->insert(['id'=>67017, 'districts_id'=>5771, 'zipcode'=>'98472', 'name'=>'Klamugun']);
        DB::table('villages')->insert(['id'=>67018, 'districts_id'=>5771, 'zipcode'=>'98472', 'name'=>'Miskum']);
        DB::table('villages')->insert(['id'=>67019, 'districts_id'=>5771, 'zipcode'=>'98472', 'name'=>'Saengkeduk']);
        DB::table('villages')->insert(['id'=>67020, 'districts_id'=>5771, 'zipcode'=>'98472', 'name'=>'Selekobo']);
        DB::table('villages')->insert(['id'=>67021, 'districts_id'=>5771, 'zipcode'=>'98472', 'name'=>'Siwis']);

        //Kab. Sorong Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>350, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Sorong']);
        //Kecamatan Sorong Barat Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5772, 'city_id'=>350, 'name'=>'Sorong Barat']);
        DB::table('villages')->insert(['id'=>67022, 'districts_id'=>5772, 'zipcode'=>'98411', 'name'=>'Klawasi']);
        DB::table('villages')->insert(['id'=>67023, 'districts_id'=>5772, 'zipcode'=>'98411', 'name'=>'Saoka']);
        DB::table('villages')->insert(['id'=>67024, 'districts_id'=>5772, 'zipcode'=>'98411', 'name'=>'Tanjung Kasuari']);
        DB::table('villages')->insert(['id'=>67025, 'districts_id'=>5772, 'zipcode'=>'98412', 'name'=>'Klabala']);
        DB::table('villages')->insert(['id'=>67026, 'districts_id'=>5772, 'zipcode'=>'98412', 'name'=>'Rufei']);
        //Kecamatan Sorong Kepulauan Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5773, 'city_id'=>350, 'name'=>'Sorong Kepulauan']);
        DB::table('villages')->insert(['id'=>67027, 'districts_id'=>5773, 'zipcode'=>'98413', 'name'=>'Dum Barat (doom Barat)']);
        DB::table('villages')->insert(['id'=>67028, 'districts_id'=>5773, 'zipcode'=>'98413', 'name'=>'Dum Timur (doom Timur)']);
        DB::table('villages')->insert(['id'=>67029, 'districts_id'=>5773, 'zipcode'=>'98413', 'name'=>'Raam']);
        DB::table('villages')->insert(['id'=>67030, 'districts_id'=>5773, 'zipcode'=>'98413', 'name'=>'Soop']);
        //Kecamatan Sorong Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5774, 'city_id'=>350, 'name'=>'Sorong']);
        DB::table('villages')->insert(['id'=>67031, 'districts_id'=>5774, 'zipcode'=>'98413', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>67032, 'districts_id'=>5774, 'zipcode'=>'98414', 'name'=>'Klademak']);
        DB::table('villages')->insert(['id'=>67033, 'districts_id'=>5774, 'zipcode'=>'98414', 'name'=>'Klakublik']);
        DB::table('villages')->insert(['id'=>67034, 'districts_id'=>5774, 'zipcode'=>'98414', 'name'=>'Klasuur']);
        DB::table('villages')->insert(['id'=>67035, 'districts_id'=>5774, 'zipcode'=>'98416', 'name'=>'Remu Utara']);
        //Kecamatan Sorong Timur Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5775, 'city_id'=>350, 'name'=>'Sorong Timur']);
        DB::table('villages')->insert(['id'=>67036, 'districts_id'=>5775, 'zipcode'=>'98414', 'name'=>'Klablim']);
        DB::table('villages')->insert(['id'=>67037, 'districts_id'=>5775, 'zipcode'=>'98415', 'name'=>'Klawalu']);
        DB::table('villages')->insert(['id'=>67038, 'districts_id'=>5775, 'zipcode'=>'98417', 'name'=>'Klasaman']);
        DB::table('villages')->insert(['id'=>67039, 'districts_id'=>5775, 'zipcode'=>'98418', 'name'=>'Giwu']);
        DB::table('villages')->insert(['id'=>67040, 'districts_id'=>5775, 'zipcode'=>'98418', 'name'=>'Klamana']);
        DB::table('villages')->insert(['id'=>67041, 'districts_id'=>5775, 'zipcode'=>'98418', 'name'=>'Klasuat']);
        DB::table('villages')->insert(['id'=>67042, 'districts_id'=>5775, 'zipcode'=>'98419', 'name'=>'Klawuyuk']);
        //Kecamatan Sorong Manoi Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5776, 'city_id'=>350, 'name'=>'Sorong Manoi']);
        DB::table('villages')->insert(['id'=>67043, 'districts_id'=>5776, 'zipcode'=>'98414', 'name'=>'Klaligi']);
        DB::table('villages')->insert(['id'=>67044, 'districts_id'=>5776, 'zipcode'=>'98415', 'name'=>'Remu Selatan']);
        DB::table('villages')->insert(['id'=>67045, 'districts_id'=>5776, 'zipcode'=>'98416', 'name'=>'Klasabi']);
        DB::table('villages')->insert(['id'=>67046, 'districts_id'=>5776, 'zipcode'=>'98416', 'name'=>'Malabutor']);
        DB::table('villages')->insert(['id'=>67047, 'districts_id'=>5776, 'zipcode'=>'98416', 'name'=>'Malawei']);
        //Kecamatan Sorong Utara Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5777, 'city_id'=>350, 'name'=>'Sorong Utara']);
        DB::table('villages')->insert(['id'=>67048, 'districts_id'=>5777, 'zipcode'=>'98416', 'name'=>'Klagete']);
        DB::table('villages')->insert(['id'=>67049, 'districts_id'=>5777, 'zipcode'=>'98419', 'name'=>'Malaingkedi']);
        DB::table('villages')->insert(['id'=>67050, 'districts_id'=>5777, 'zipcode'=>'98419', 'name'=>'Malanu']);
        DB::table('villages')->insert(['id'=>67051, 'districts_id'=>5777, 'zipcode'=>'98419', 'name'=>'Matalamagi (matalamangi)']);
        DB::table('villages')->insert(['id'=>67052, 'districts_id'=>5777, 'zipcode'=>'98419', 'name'=>'Sawagumu']);
        //Kecamatan Mayamuk Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5778, 'city_id'=>350, 'name'=>'Mayamuk']);
        DB::table('villages')->insert(['id'=>67053, 'districts_id'=>5778, 'zipcode'=>'98451', 'name'=>'Arar']);
        DB::table('villages')->insert(['id'=>67054, 'districts_id'=>5778, 'zipcode'=>'98451', 'name'=>'Jeflio (yeflio/yefilio)']);
        DB::table('villages')->insert(['id'=>67055, 'districts_id'=>5778, 'zipcode'=>'98451', 'name'=>'Klalin (klain)']);
        DB::table('villages')->insert(['id'=>67056, 'districts_id'=>5778, 'zipcode'=>'98451', 'name'=>'Klasmelek']);
        DB::table('villages')->insert(['id'=>67057, 'districts_id'=>5778, 'zipcode'=>'98451', 'name'=>'Makbalim']);
        DB::table('villages')->insert(['id'=>67058, 'districts_id'=>5778, 'zipcode'=>'98451', 'name'=>'Makbusun (makbusum)']);
        DB::table('villages')->insert(['id'=>67059, 'districts_id'=>5778, 'zipcode'=>'98451', 'name'=>'Makotyamsa']);
        DB::table('villages')->insert(['id'=>67060, 'districts_id'=>5778, 'zipcode'=>'98451', 'name'=>'Wen']);
        //Kecamatan Salawati Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5779, 'city_id'=>350, 'name'=>'Salawati']);
        DB::table('villages')->insert(['id'=>67061, 'districts_id'=>5779, 'zipcode'=>'98451', 'name'=>'Katinim']);
        DB::table('villages')->insert(['id'=>67062, 'districts_id'=>5779, 'zipcode'=>'98451', 'name'=>'Majaran']);
        DB::table('villages')->insert(['id'=>67063, 'districts_id'=>5779, 'zipcode'=>'98451', 'name'=>'Majener']);
        DB::table('villages')->insert(['id'=>67064, 'districts_id'=>5779, 'zipcode'=>'98451', 'name'=>'Malaus']);
        DB::table('villages')->insert(['id'=>67065, 'districts_id'=>5779, 'zipcode'=>'98451', 'name'=>'Matawolot']);
        DB::table('villages')->insert(['id'=>67066, 'districts_id'=>5779, 'zipcode'=>'98451', 'name'=>'Rawa Sugi']);
        DB::table('villages')->insert(['id'=>67067, 'districts_id'=>5779, 'zipcode'=>'98451', 'name'=>'Walal']);
        //Kecamatan Moisegen Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5780, 'city_id'=>350, 'name'=>'Moisegen']);
        DB::table('villages')->insert(['id'=>67068, 'districts_id'=>5780, 'zipcode'=>'98451', 'name'=>'Klafdalim']);
        DB::table('villages')->insert(['id'=>67069, 'districts_id'=>5780, 'zipcode'=>'98451', 'name'=>'Klaforo']);
        DB::table('villages')->insert(['id'=>67070, 'districts_id'=>5780, 'zipcode'=>'98451', 'name'=>'Klasarin']);
        DB::table('villages')->insert(['id'=>67071, 'districts_id'=>5780, 'zipcode'=>'98451', 'name'=>'Klasof']);
        DB::table('villages')->insert(['id'=>67072, 'districts_id'=>5780, 'zipcode'=>'98451', 'name'=>'Klawoton']);
        DB::table('villages')->insert(['id'=>67073, 'districts_id'=>5780, 'zipcode'=>'98451', 'name'=>'Ninjemur']);
        DB::table('villages')->insert(['id'=>67074, 'districts_id'=>5780, 'zipcode'=>'98451', 'name'=>'Wonosobo']);
        //Kecamatan Salawati Selatan Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5781, 'city_id'=>350, 'name'=>'Salawati Selatan']);
        DB::table('villages')->insert(['id'=>67075, 'districts_id'=>5781, 'zipcode'=>'98452', 'name'=>'Dulbatan']);
        DB::table('villages')->insert(['id'=>67076, 'districts_id'=>5781, 'zipcode'=>'98452', 'name'=>'Duriankari']);
        DB::table('villages')->insert(['id'=>67077, 'districts_id'=>5781, 'zipcode'=>'98452', 'name'=>'Katlol (klotlof/katlof)']);
        DB::table('villages')->insert(['id'=>67078, 'districts_id'=>5781, 'zipcode'=>'98452', 'name'=>'Manoket']);
        DB::table('villages')->insert(['id'=>67079, 'districts_id'=>5781, 'zipcode'=>'98452', 'name'=>'Maralol']);
        DB::table('villages')->insert(['id'=>67080, 'districts_id'=>5781, 'zipcode'=>'98452', 'name'=>'Sailolof']);
        DB::table('villages')->insert(['id'=>67081, 'districts_id'=>5781, 'zipcode'=>'98452', 'name'=>'Sakapul']);
        DB::table('villages')->insert(['id'=>67082, 'districts_id'=>5781, 'zipcode'=>'98452', 'name'=>'Waliam']);
        //Kecamatan Segun Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5782, 'city_id'=>350, 'name'=>'Segun']);
        DB::table('villages')->insert(['id'=>67083, 'districts_id'=>5782, 'zipcode'=>'98452', 'name'=>'Gisim']);
        DB::table('villages')->insert(['id'=>67084, 'districts_id'=>5782, 'zipcode'=>'98452', 'name'=>'Klasigon (klasegun)']);
        DB::table('villages')->insert(['id'=>67085, 'districts_id'=>5782, 'zipcode'=>'98452', 'name'=>'Majemau']);
        DB::table('villages')->insert(['id'=>67086, 'districts_id'=>5782, 'zipcode'=>'98452', 'name'=>'Segun']);
        DB::table('villages')->insert(['id'=>67087, 'districts_id'=>5782, 'zipcode'=>'98452', 'name'=>'Waimon']);
        DB::table('villages')->insert(['id'=>67088, 'districts_id'=>5782, 'zipcode'=>'98452', 'name'=>'Wainlabat']);
        //Kecamatan Seget Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5783, 'city_id'=>350, 'name'=>'Seget']);
        DB::table('villages')->insert(['id'=>67089, 'districts_id'=>5783, 'zipcode'=>'98452', 'name'=>'Kasim']);
        DB::table('villages')->insert(['id'=>67090, 'districts_id'=>5783, 'zipcode'=>'98452', 'name'=>'Kasimle']);
        DB::table('villages')->insert(['id'=>67091, 'districts_id'=>5783, 'zipcode'=>'98452', 'name'=>'Klayas']);
        DB::table('villages')->insert(['id'=>67092, 'districts_id'=>5783, 'zipcode'=>'98452', 'name'=>'Malabam (malaban)']);
        DB::table('villages')->insert(['id'=>67093, 'districts_id'=>5783, 'zipcode'=>'98452', 'name'=>'Seget']);
        DB::table('villages')->insert(['id'=>67094, 'districts_id'=>5783, 'zipcode'=>'98452', 'name'=>'Wajin']);
        DB::table('villages')->insert(['id'=>67095, 'districts_id'=>5783, 'zipcode'=>'98452', 'name'=>'Wasingsan']);
        DB::table('villages')->insert(['id'=>67096, 'districts_id'=>5783, 'zipcode'=>'98452', 'name'=>'Wayenkede']);
        //Kecamatan Klawak Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5784, 'city_id'=>350, 'name'=>'Klawak']);
        DB::table('villages')->insert(['id'=>67097, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Ayolokle']);
        DB::table('villages')->insert(['id'=>67098, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Brianlo']);
        DB::table('villages')->insert(['id'=>67099, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Hobard']);
        DB::table('villages')->insert(['id'=>67100, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Klamne']);
        DB::table('villages')->insert(['id'=>67101, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Mlawen']);
        DB::table('villages')->insert(['id'=>67102, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Sas']);
        DB::table('villages')->insert(['id'=>67103, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Tarsa']);
        DB::table('villages')->insert(['id'=>67104, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Totjin']);
        DB::table('villages')->insert(['id'=>67105, 'districts_id'=>5784, 'zipcode'=>'98453', 'name'=>'Wilty']);
        //Kecamatan Beraur Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5785, 'city_id'=>350, 'name'=>'Beraur']);
        DB::table('villages')->insert(['id'=>67106, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Bagung']);
        DB::table('villages')->insert(['id'=>67107, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Disfra']);
        DB::table('villages')->insert(['id'=>67108, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Kaas']);
        DB::table('villages')->insert(['id'=>67109, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Klabra']);
        DB::table('villages')->insert(['id'=>67110, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Klarion']);
        DB::table('villages')->insert(['id'=>67111, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Mumpi']);
        DB::table('villages')->insert(['id'=>67112, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Wanurian']);
        DB::table('villages')->insert(['id'=>67113, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Wensi']);
        DB::table('villages')->insert(['id'=>67114, 'districts_id'=>5785, 'zipcode'=>'98453', 'name'=>'Wisbiak']);
        //Kecamatan Klabot Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5786, 'city_id'=>350, 'name'=>'Klabot']);
        DB::table('villages')->insert(['id'=>67115, 'districts_id'=>5786, 'zipcode'=>'98453', 'name'=>'Buk']);
        DB::table('villages')->insert(['id'=>67116, 'districts_id'=>5786, 'zipcode'=>'98453', 'name'=>'Indiwi']);
        DB::table('villages')->insert(['id'=>67117, 'districts_id'=>5786, 'zipcode'=>'98453', 'name'=>'Klabot']);
        DB::table('villages')->insert(['id'=>67118, 'districts_id'=>5786, 'zipcode'=>'98453', 'name'=>'Klais']);
        DB::table('villages')->insert(['id'=>67119, 'districts_id'=>5786, 'zipcode'=>'98453', 'name'=>'Mimpe']);
        DB::table('villages')->insert(['id'=>67120, 'districts_id'=>5786, 'zipcode'=>'98453', 'name'=>'Mlakhan']);
        DB::table('villages')->insert(['id'=>67121, 'districts_id'=>5786, 'zipcode'=>'98453', 'name'=>'Mlat']);
        DB::table('villages')->insert(['id'=>67122, 'districts_id'=>5786, 'zipcode'=>'98453', 'name'=>'Mlawes']);
        //Kecamatan Klamono Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5787, 'city_id'=>350, 'name'=>'Klamono']);
        DB::table('villages')->insert(['id'=>67123, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Gisim Darat']);
        DB::table('villages')->insert(['id'=>67124, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Keladum']);
        DB::table('villages')->insert(['id'=>67125, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Klagulu']);
        DB::table('villages')->insert(['id'=>67126, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Klalomon']);
        DB::table('villages')->insert(['id'=>67127, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Klamano']);
        DB::table('villages')->insert(['id'=>67128, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Klamugun']);
        DB::table('villages')->insert(['id'=>67129, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Klasman']);
        DB::table('villages')->insert(['id'=>67130, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Klawana']);
        DB::table('villages')->insert(['id'=>67131, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Malajapa']);
        DB::table('villages')->insert(['id'=>67132, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Malasigit']);
        DB::table('villages')->insert(['id'=>67133, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Mlais']);
        DB::table('villages')->insert(['id'=>67134, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Wariayau']);
        DB::table('villages')->insert(['id'=>67135, 'districts_id'=>5787, 'zipcode'=>'98456', 'name'=>'Wonosari']);
        //Kecamatan Aimas Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5788, 'city_id'=>350, 'name'=>'Aimas']);
        DB::table('villages')->insert(['id'=>67136, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Aimas']);
        DB::table('villages')->insert(['id'=>67137, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Klabinain']);
        DB::table('villages')->insert(['id'=>67138, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Klaigit']);
        DB::table('villages')->insert(['id'=>67139, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Maibo']);
        DB::table('villages')->insert(['id'=>67140, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Malasom']);
        DB::table('villages')->insert(['id'=>67141, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Malawele']);
        DB::table('villages')->insert(['id'=>67142, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Malawili']);
        DB::table('villages')->insert(['id'=>67143, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Mariat Gunung']);
        DB::table('villages')->insert(['id'=>67144, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Mariat Pantai']);
        DB::table('villages')->insert(['id'=>67145, 'districts_id'=>5788, 'zipcode'=>'98457', 'name'=>'Warmon']);
        //Kecamatan Mariat Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5789, 'city_id'=>350, 'name'=>'Mariat']);
        DB::table('villages')->insert(['id'=>67146, 'districts_id'=>5789, 'zipcode'=>'98457', 'name'=>'Klaben']);
        DB::table('villages')->insert(['id'=>67147, 'districts_id'=>5789, 'zipcode'=>'98457', 'name'=>'Klamalu']);
        DB::table('villages')->insert(['id'=>67148, 'districts_id'=>5789, 'zipcode'=>'98457', 'name'=>'Klamasen']);
        DB::table('villages')->insert(['id'=>67149, 'districts_id'=>5789, 'zipcode'=>'98457', 'name'=>'Klasukuk']);
        DB::table('villages')->insert(['id'=>67150, 'districts_id'=>5789, 'zipcode'=>'98457', 'name'=>'Mariyai']);
        //Kecamatan Makbon Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5790, 'city_id'=>350, 'name'=>'Makbon']);
        DB::table('villages')->insert(['id'=>67151, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Asbaken']);
        DB::table('villages')->insert(['id'=>67152, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Bainkete']);
        DB::table('villages')->insert(['id'=>67153, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Batu Lubang/lobang']);
        DB::table('villages')->insert(['id'=>67154, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Batu Lubang/lobang Pantai']);
        DB::table('villages')->insert(['id'=>67155, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Kuadas (kwadas)']);
        DB::table('villages')->insert(['id'=>67156, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Makbon']);
        DB::table('villages')->insert(['id'=>67157, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Malaumkarta']);
        DB::table('villages')->insert(['id'=>67158, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Sawatuk']);
        DB::table('villages')->insert(['id'=>67159, 'districts_id'=>5790, 'zipcode'=>'98471', 'name'=>'Teluk Dore']);
        //Kecamatan Sayosa Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5791, 'city_id'=>350, 'name'=>'Sayosa']);
        DB::table('villages')->insert(['id'=>67160, 'districts_id'=>5791, 'zipcode'=>'98471', 'name'=>'Batu Payung']);
        DB::table('villages')->insert(['id'=>67161, 'districts_id'=>5791, 'zipcode'=>'98471', 'name'=>'Dasri']);
        DB::table('villages')->insert(['id'=>67162, 'districts_id'=>5791, 'zipcode'=>'98471', 'name'=>'Klatin (klatim)']);
        DB::table('villages')->insert(['id'=>67163, 'districts_id'=>5791, 'zipcode'=>'98471', 'name'=>'Luwelala (suwelala)']);
        DB::table('villages')->insert(['id'=>67164, 'districts_id'=>5791, 'zipcode'=>'98471', 'name'=>'Maladofok']);
        DB::table('villages')->insert(['id'=>67165, 'districts_id'=>5791, 'zipcode'=>'98471', 'name'=>'Sailala']);
        DB::table('villages')->insert(['id'=>67166, 'districts_id'=>5791, 'zipcode'=>'98471', 'name'=>'Saluk']);
        //Kecamatan Klayili Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5792, 'city_id'=>350, 'name'=>'Klayili']);
        DB::table('villages')->insert(['id'=>67167, 'districts_id'=>5792, 'zipcode'=>'98471', 'name'=>'Klasowoh']);
        DB::table('villages')->insert(['id'=>67168, 'districts_id'=>5792, 'zipcode'=>'98471', 'name'=>'Klawuluh']);
        DB::table('villages')->insert(['id'=>67169, 'districts_id'=>5792, 'zipcode'=>'98471', 'name'=>'Klayali']);
        DB::table('villages')->insert(['id'=>67170, 'districts_id'=>5792, 'zipcode'=>'98471', 'name'=>'Kwakeik']);
        DB::table('villages')->insert(['id'=>67171, 'districts_id'=>5792, 'zipcode'=>'98471', 'name'=>'Malakobutu']);
        DB::table('villages')->insert(['id'=>67172, 'districts_id'=>5792, 'zipcode'=>'98471', 'name'=>'Malalilis']);
        //Kecamatan Maudus Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5793, 'city_id'=>350, 'name'=>'Maudus']);
        DB::table('villages')->insert(['id'=>67173, 'districts_id'=>5793, 'zipcode'=>'98472', 'name'=>'Dasri']);
        DB::table('villages')->insert(['id'=>67174, 'districts_id'=>5793, 'zipcode'=>'98472', 'name'=>'Ketawas']);
        DB::table('villages')->insert(['id'=>67175, 'districts_id'=>5793, 'zipcode'=>'98472', 'name'=>'Klaos']);
        DB::table('villages')->insert(['id'=>67176, 'districts_id'=>5793, 'zipcode'=>'98472', 'name'=>'Klatim']);
        DB::table('villages')->insert(['id'=>67177, 'districts_id'=>5793, 'zipcode'=>'98472', 'name'=>'Luwelala']);
        DB::table('villages')->insert(['id'=>67178, 'districts_id'=>5793, 'zipcode'=>'98472', 'name'=>'Masos']);
        DB::table('villages')->insert(['id'=>67179, 'districts_id'=>5793, 'zipcode'=>'98472', 'name'=>'Suluh']);
        DB::table('villages')->insert(['id'=>67180, 'districts_id'=>5793, 'zipcode'=>'98472', 'name'=>'Warbo']);
        //Kecamatan Klaso Kab. Sorong Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5794, 'city_id'=>350, 'name'=>'Klaso']);
        DB::table('villages')->insert(['id'=>67181, 'districts_id'=>5794, 'zipcode'=>'98472', 'name'=>'Klamugun']);
        DB::table('villages')->insert(['id'=>67182, 'districts_id'=>5794, 'zipcode'=>'98472', 'name'=>'Miskum']);
        DB::table('villages')->insert(['id'=>67183, 'districts_id'=>5794, 'zipcode'=>'98472', 'name'=>'Saengkeduk']);
        DB::table('villages')->insert(['id'=>67184, 'districts_id'=>5794, 'zipcode'=>'98472', 'name'=>'Selekobo']);
        DB::table('villages')->insert(['id'=>67185, 'districts_id'=>5794, 'zipcode'=>'98472', 'name'=>'Siwis']);

        //Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>351, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Sorong Selatan']);
        //Kecamatan Teminabuan Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5795, 'city_id'=>351, 'name'=>'Teminabuan']);
        DB::table('villages')->insert(['id'=>67186, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Aibobor']);
        DB::table('villages')->insert(['id'=>67187, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Ani Sesna']);
        DB::table('villages')->insert(['id'=>67188, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Gorolo']);
        DB::table('villages')->insert(['id'=>67189, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Kaibus']);
        DB::table('villages')->insert(['id'=>67190, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Keyen']);
        DB::table('villages')->insert(['id'=>67191, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Kohoin']);
        DB::table('villages')->insert(['id'=>67192, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Magis']);
        DB::table('villages')->insert(['id'=>67193, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Nambro']);
        DB::table('villages')->insert(['id'=>67194, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Seyolo']);
        DB::table('villages')->insert(['id'=>67195, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Siribau']);
        DB::table('villages')->insert(['id'=>67196, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Tapiri']);
        DB::table('villages')->insert(['id'=>67197, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Tegirolo']);
        DB::table('villages')->insert(['id'=>67198, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Wehali']);
        DB::table('villages')->insert(['id'=>67199, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Wermit']);
        DB::table('villages')->insert(['id'=>67200, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Wernas']);
        DB::table('villages')->insert(['id'=>67201, 'districts_id'=>5795, 'zipcode'=>'98454', 'name'=>'Wersar']);
        //Kecamatan Wayer Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5796, 'city_id'=>351, 'name'=>'Wayer']);
        DB::table('villages')->insert(['id'=>67202, 'districts_id'=>5796, 'zipcode'=>'98454', 'name'=>'Bagraga (bagaraga)']);
        DB::table('villages')->insert(['id'=>67203, 'districts_id'=>5796, 'zipcode'=>'98454', 'name'=>'Baldon (boldon)']);
        DB::table('villages')->insert(['id'=>67204, 'districts_id'=>5796, 'zipcode'=>'98454', 'name'=>'Sesor']);
        DB::table('villages')->insert(['id'=>67205, 'districts_id'=>5796, 'zipcode'=>'98454', 'name'=>'Sungguer']);
        DB::table('villages')->insert(['id'=>67206, 'districts_id'=>5796, 'zipcode'=>'98454', 'name'=>'Ungi (unggi)']);
        DB::table('villages')->insert(['id'=>67207, 'districts_id'=>5796, 'zipcode'=>'98454', 'name'=>'Waigo']);
        DB::table('villages')->insert(['id'=>67208, 'districts_id'=>5796, 'zipcode'=>'98454', 'name'=>'Wardik']);
        DB::table('villages')->insert(['id'=>67209, 'districts_id'=>5796, 'zipcode'=>'98454', 'name'=>'Wayer']);
        //Kecamatan Konda Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5797, 'city_id'=>351, 'name'=>'Konda']);
        DB::table('villages')->insert(['id'=>67210, 'districts_id'=>5797, 'zipcode'=>'98454', 'name'=>'Bariat']);
        DB::table('villages')->insert(['id'=>67211, 'districts_id'=>5797, 'zipcode'=>'98454', 'name'=>'Konda']);
        DB::table('villages')->insert(['id'=>67212, 'districts_id'=>5797, 'zipcode'=>'98454', 'name'=>'Manelek']);
        DB::table('villages')->insert(['id'=>67213, 'districts_id'=>5797, 'zipcode'=>'98454', 'name'=>'Nagna']);
        DB::table('villages')->insert(['id'=>67214, 'districts_id'=>5797, 'zipcode'=>'98454', 'name'=>'Wamargege']);
        //Kecamatan Saifi Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5798, 'city_id'=>351, 'name'=>'Saifi']);
        DB::table('villages')->insert(['id'=>67215, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Botain']);
        DB::table('villages')->insert(['id'=>67216, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Kayabo']);
        DB::table('villages')->insert(['id'=>67217, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Kenaya']);
        DB::table('villages')->insert(['id'=>67218, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Komanggaret']);
        DB::table('villages')->insert(['id'=>67219, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Kwowok']);
        DB::table('villages')->insert(['id'=>67220, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Manggroholo']);
        DB::table('villages')->insert(['id'=>67221, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Mlaswat']);
        DB::table('villages')->insert(['id'=>67222, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Sayal']);
        DB::table('villages')->insert(['id'=>67223, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Sira']);
        DB::table('villages')->insert(['id'=>67224, 'districts_id'=>5798, 'zipcode'=>'98454', 'name'=>'Sisir']);
        //Kecamatan Moswaren Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5799, 'city_id'=>351, 'name'=>'Moswaren']);
        DB::table('villages')->insert(['id'=>67225, 'districts_id'=>5799, 'zipcode'=>'98454', 'name'=>'Bumi Ajo']);
        DB::table('villages')->insert(['id'=>67226, 'districts_id'=>5799, 'zipcode'=>'98454', 'name'=>'Hararo']);
        DB::table('villages')->insert(['id'=>67227, 'districts_id'=>5799, 'zipcode'=>'98454', 'name'=>'Hasik Jaya']);
        DB::table('villages')->insert(['id'=>67228, 'districts_id'=>5799, 'zipcode'=>'98454', 'name'=>'Joshiro']);
        DB::table('villages')->insert(['id'=>67229, 'districts_id'=>5799, 'zipcode'=>'98454', 'name'=>'Kamisabe']);
        DB::table('villages')->insert(['id'=>67230, 'districts_id'=>5799, 'zipcode'=>'98454', 'name'=>'Moswaren']);
        DB::table('villages')->insert(['id'=>67231, 'districts_id'=>5799, 'zipcode'=>'98454', 'name'=>'Tokass']);
        //Kecamatan Seremuk Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5800, 'city_id'=>351, 'name'=>'Seremuk']);
        DB::table('villages')->insert(['id'=>67232, 'districts_id'=>5800, 'zipcode'=>'98454', 'name'=>'Haha']);
        DB::table('villages')->insert(['id'=>67233, 'districts_id'=>5800, 'zipcode'=>'98454', 'name'=>'Kakas']);
        DB::table('villages')->insert(['id'=>67234, 'districts_id'=>5800, 'zipcode'=>'98454', 'name'=>'Kamaro']);
        DB::table('villages')->insert(['id'=>67235, 'districts_id'=>5800, 'zipcode'=>'98454', 'name'=>'Klaogin']);
        DB::table('villages')->insert(['id'=>67236, 'districts_id'=>5800, 'zipcode'=>'98454', 'name'=>'Sbir']);
        DB::table('villages')->insert(['id'=>67237, 'districts_id'=>5800, 'zipcode'=>'98454', 'name'=>'Srer']);
        DB::table('villages')->insert(['id'=>67238, 'districts_id'=>5800, 'zipcode'=>'98454', 'name'=>'Tofot']);
        DB::table('villages')->insert(['id'=>67239, 'districts_id'=>5800, 'zipcode'=>'98454', 'name'=>'Woloin']);
        //Kecamatan Kokoda Utara Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5801, 'city_id'=>351, 'name'=>'Kokoda Utara']);
        DB::table('villages')->insert(['id'=>67240, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Adona']);
        DB::table('villages')->insert(['id'=>67241, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Atori']);
        DB::table('villages')->insert(['id'=>67242, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Benawa Ii']);
        DB::table('villages')->insert(['id'=>67243, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Bubuko']);
        DB::table('villages')->insert(['id'=>67244, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Kamundan Dua']);
        DB::table('villages')->insert(['id'=>67245, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Kamundan Satu']);
        DB::table('villages')->insert(['id'=>67246, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Karirif']);
        DB::table('villages')->insert(['id'=>67247, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Kayubiro']);
        DB::table('villages')->insert(['id'=>67248, 'districts_id'=>5801, 'zipcode'=>'98455', 'name'=>'Udagaga']);
        //Kecamatan Kokoda Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5802, 'city_id'=>351, 'name'=>'Kokoda']);
        DB::table('villages')->insert(['id'=>67249, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Arbasina']);
        DB::table('villages')->insert(['id'=>67250, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Birawaku']);
        DB::table('villages')->insert(['id'=>67251, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Daimar']);
        DB::table('villages')->insert(['id'=>67252, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Daubak']);
        DB::table('villages')->insert(['id'=>67253, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Kasuweri']);
        DB::table('villages')->insert(['id'=>67254, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Korewatara']);
        DB::table('villages')->insert(['id'=>67255, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Migori']);
        DB::table('villages')->insert(['id'=>67256, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Migrito']);
        DB::table('villages')->insert(['id'=>67257, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Nayakore']);
        DB::table('villages')->insert(['id'=>67258, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Negeri Besar']);
        DB::table('villages')->insert(['id'=>67259, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Siwatori']);
        DB::table('villages')->insert(['id'=>67260, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Tambani']);
        DB::table('villages')->insert(['id'=>67261, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Tapas']);
        DB::table('villages')->insert(['id'=>67262, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Tarof']);
        DB::table('villages')->insert(['id'=>67263, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Topdan']);
        DB::table('villages')->insert(['id'=>67264, 'districts_id'=>5802, 'zipcode'=>'98455', 'name'=>'Totona']);
        //Kecamatan Matemani Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5803, 'city_id'=>351, 'name'=>'Matemani']);
        DB::table('villages')->insert(['id'=>67265, 'districts_id'=>5803, 'zipcode'=>'98455', 'name'=>'Bedare']);
        DB::table('villages')->insert(['id'=>67266, 'districts_id'=>5803, 'zipcode'=>'98455', 'name'=>'Mugim']);
        DB::table('villages')->insert(['id'=>67267, 'districts_id'=>5803, 'zipcode'=>'98455', 'name'=>'Nusa']);
        DB::table('villages')->insert(['id'=>67268, 'districts_id'=>5803, 'zipcode'=>'98455', 'name'=>'Puragi']);
        DB::table('villages')->insert(['id'=>67269, 'districts_id'=>5803, 'zipcode'=>'98455', 'name'=>'Saga']);
        DB::table('villages')->insert(['id'=>67270, 'districts_id'=>5803, 'zipcode'=>'98455', 'name'=>'Tawanggire']);
        //Kecamatan Kais (matemani Kais) Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5804, 'city_id'=>351, 'name'=>'Kais (matemani Kais)']);
        DB::table('villages')->insert(['id'=>67271, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Benawa I']);
        DB::table('villages')->insert(['id'=>67272, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Haemaran (kurana)']);
        DB::table('villages')->insert(['id'=>67273, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Ikana']);
        DB::table('villages')->insert(['id'=>67274, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Kais']);
        DB::table('villages')->insert(['id'=>67275, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Makaroro']);
        DB::table('villages')->insert(['id'=>67276, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Mogotemin (mogatemin)']);
        DB::table('villages')->insert(['id'=>67277, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Mukamat']);
        DB::table('villages')->insert(['id'=>67278, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Onimsefa']);
        DB::table('villages')->insert(['id'=>67279, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Siranggo']);
        DB::table('villages')->insert(['id'=>67280, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Sumano']);
        DB::table('villages')->insert(['id'=>67281, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Tapuri']);
        DB::table('villages')->insert(['id'=>67282, 'districts_id'=>5804, 'zipcode'=>'98455', 'name'=>'Yahadian']);
        //Kecamatan Inanwatan (inawatan) Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5805, 'city_id'=>351, 'name'=>'Inanwatan (inawatan)']);
        DB::table('villages')->insert(['id'=>67283, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Isogo']);
        DB::table('villages')->insert(['id'=>67284, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Mate']);
        DB::table('villages')->insert(['id'=>67285, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Mogibi']);
        DB::table('villages')->insert(['id'=>67286, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Odeare']);
        DB::table('villages')->insert(['id'=>67287, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Serkos']);
        DB::table('villages')->insert(['id'=>67288, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Sibae']);
        DB::table('villages')->insert(['id'=>67289, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Siri-siri']);
        DB::table('villages')->insert(['id'=>67290, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Solta Baru']);
        DB::table('villages')->insert(['id'=>67291, 'districts_id'=>5805, 'zipcode'=>'98455', 'name'=>'Wadoi']);
        //Kecamatan Sawiat Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5806, 'city_id'=>351, 'name'=>'Sawiat']);
        DB::table('villages')->insert(['id'=>67292, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Alma']);
        DB::table('villages')->insert(['id'=>67293, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Elles']);
        DB::table('villages')->insert(['id'=>67294, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Klamit']);
        DB::table('villages')->insert(['id'=>67295, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Kofalit']);
        DB::table('villages')->insert(['id'=>67296, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Mlabolo']);
        DB::table('villages')->insert(['id'=>67297, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Sasnek']);
        DB::table('villages')->insert(['id'=>67298, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Sawiat']);
        DB::table('villages')->insert(['id'=>67299, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Sfakyo']);
        DB::table('villages')->insert(['id'=>67300, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Sodrofoyo']);
        DB::table('villages')->insert(['id'=>67301, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Ween']);
        DB::table('villages')->insert(['id'=>67302, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Wendi']);
        DB::table('villages')->insert(['id'=>67303, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Wenslolo']);
        DB::table('villages')->insert(['id'=>67304, 'districts_id'=>5806, 'zipcode'=>'98456', 'name'=>'Wensough']);
        //Kecamatan Fokour Kab. Sorong Selatan Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5807, 'city_id'=>351, 'name'=>'Fokour']);
        DB::table('villages')->insert(['id'=>67305, 'districts_id'=>5807, 'zipcode'=>'98456', 'name'=>'Bemus']);
        DB::table('villages')->insert(['id'=>67306, 'districts_id'=>5807, 'zipcode'=>'98456', 'name'=>'Pasir Putih']);
        DB::table('villages')->insert(['id'=>67307, 'districts_id'=>5807, 'zipcode'=>'98456', 'name'=>'Wandum']);
        DB::table('villages')->insert(['id'=>67308, 'districts_id'=>5807, 'zipcode'=>'98456', 'name'=>'Welek']);

        //Kab. Maybrat Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>352, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Maybrat']);
        //Kecamatan Ayamaru Jaya Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5808, 'city_id'=>352, 'name'=>'Ayamaru Jaya']);
        DB::table('villages')->insert(['id'=>67309, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Adoh']);
        DB::table('villages')->insert(['id'=>67310, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Orain']);
        DB::table('villages')->insert(['id'=>67311, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Orsu']);
        DB::table('villages')->insert(['id'=>67312, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Rawas']);
        DB::table('villages')->insert(['id'=>67313, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Segior']);
        DB::table('villages')->insert(['id'=>67314, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Soan']);
        DB::table('villages')->insert(['id'=>67315, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Sosian']);
        DB::table('villages')->insert(['id'=>67316, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Temel']);
        DB::table('villages')->insert(['id'=>67317, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Warbo']);
        DB::table('villages')->insert(['id'=>67318, 'districts_id'=>5808, 'zipcode'=>'98461', 'name'=>'Woman']);
        //Kecamatan Ayamaru Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5809, 'city_id'=>352, 'name'=>'Ayamaru']);
        DB::table('villages')->insert(['id'=>67319, 'districts_id'=>5809, 'zipcode'=>'98461', 'name'=>'Afes']);
        DB::table('villages')->insert(['id'=>67320, 'districts_id'=>5809, 'zipcode'=>'98461', 'name'=>'Ayamaru']);
        DB::table('villages')->insert(['id'=>67321, 'districts_id'=>5809, 'zipcode'=>'98461', 'name'=>'Fraharo']);
        DB::table('villages')->insert(['id'=>67322, 'districts_id'=>5809, 'zipcode'=>'98461', 'name'=>'Framu']);
        DB::table('villages')->insert(['id'=>67323, 'districts_id'=>5809, 'zipcode'=>'98461', 'name'=>'Mefkajim Ii']);
        DB::table('villages')->insert(['id'=>67324, 'districts_id'=>5809, 'zipcode'=>'98461', 'name'=>'Smusuwioh']);
        DB::table('villages')->insert(['id'=>67325, 'districts_id'=>5809, 'zipcode'=>'98461', 'name'=>'Tuso']);
        DB::table('villages')->insert(['id'=>67326, 'districts_id'=>5809, 'zipcode'=>'98461', 'name'=>'Twer']);
        //Kecamatan Ayamaru Selatan Jaya Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5810, 'city_id'=>352, 'name'=>'Ayamaru Selatan Jaya']);
        DB::table('villages')->insert(['id'=>67327, 'districts_id'=>5810, 'zipcode'=>'98461', 'name'=>'Arus']);
        DB::table('villages')->insert(['id'=>67328, 'districts_id'=>5810, 'zipcode'=>'98461', 'name'=>'Asses']);
        DB::table('villages')->insert(['id'=>67329, 'districts_id'=>5810, 'zipcode'=>'98461', 'name'=>'Fait Nggre']);
        DB::table('villages')->insert(['id'=>67330, 'districts_id'=>5810, 'zipcode'=>'98461', 'name'=>'Faitsimar']);
        DB::table('villages')->insert(['id'=>67331, 'districts_id'=>5810, 'zipcode'=>'98461', 'name'=>'Isnum']);
        DB::table('villages')->insert(['id'=>67332, 'districts_id'=>5810, 'zipcode'=>'98461', 'name'=>'Kofait']);
        DB::table('villages')->insert(['id'=>67333, 'districts_id'=>5810, 'zipcode'=>'98461', 'name'=>'Sufu']);
        //Kecamatan Ayamaru Utara Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5811, 'city_id'=>352, 'name'=>'Ayamaru Utara']);
        DB::table('villages')->insert(['id'=>67334, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Asmuruf Tee']);
        DB::table('villages')->insert(['id'=>67335, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Asmuruf U']);
        DB::table('villages')->insert(['id'=>67336, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Bohwat']);
        DB::table('villages')->insert(['id'=>67337, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Fan']);
        DB::table('villages')->insert(['id'=>67338, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Fategomi']);
        DB::table('villages')->insert(['id'=>67339, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Framafir']);
        DB::table('villages')->insert(['id'=>67340, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Gohsames']);
        DB::table('villages')->insert(['id'=>67341, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Inta']);
        DB::table('villages')->insert(['id'=>67342, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Mirafan']);
        DB::table('villages')->insert(['id'=>67343, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Subrit']);
        DB::table('villages')->insert(['id'=>67344, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Tehak Besar']);
        DB::table('villages')->insert(['id'=>67345, 'districts_id'=>5811, 'zipcode'=>'98461', 'name'=>'Tehak Tee']);
        //Kecamatan Mare Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5812, 'city_id'=>352, 'name'=>'Mare']);
        DB::table('villages')->insert(['id'=>67346, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Bakrabi']);
        DB::table('villages')->insert(['id'=>67347, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Kombif']);
        DB::table('villages')->insert(['id'=>67348, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Mahos']);
        DB::table('villages')->insert(['id'=>67349, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Nafasi']);
        DB::table('villages')->insert(['id'=>67350, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Rufases']);
        DB::table('villages')->insert(['id'=>67351, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Sawo']);
        DB::table('villages')->insert(['id'=>67352, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Seya']);
        DB::table('villages')->insert(['id'=>67353, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Suswa']);
        DB::table('villages')->insert(['id'=>67354, 'districts_id'=>5812, 'zipcode'=>'98461', 'name'=>'Wabam']);
        //Kecamatan Mare Selatan Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5813, 'city_id'=>352, 'name'=>'Mare Selatan']);
        DB::table('villages')->insert(['id'=>67355, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Batu Zaman']);
        DB::table('villages')->insert(['id'=>67356, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Kanggilo']);
        DB::table('villages')->insert(['id'=>67357, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Mopi']);
        DB::table('villages')->insert(['id'=>67358, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Nonomi']);
        DB::table('villages')->insert(['id'=>67359, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Sarafambai']);
        DB::table('villages')->insert(['id'=>67360, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Sawara Jaya']);
        DB::table('villages')->insert(['id'=>67361, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Uri']);
        DB::table('villages')->insert(['id'=>67362, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Waren I']);
        DB::table('villages')->insert(['id'=>67363, 'districts_id'=>5813, 'zipcode'=>'98461', 'name'=>'Waren Ii']);
        //Kecamatan Ayamaru Tengah Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5814, 'city_id'=>352, 'name'=>'Ayamaru Tengah']);
        DB::table('villages')->insert(['id'=>67364, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Bawy']);
        DB::table('villages')->insert(['id'=>67365, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Fiane']);
        DB::table('villages')->insert(['id'=>67366, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Hufioh']);
        DB::table('villages')->insert(['id'=>67367, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Isme']);
        DB::table('villages')->insert(['id'=>67368, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Kartapura']);
        DB::table('villages')->insert(['id'=>67369, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Men']);
        DB::table('villages')->insert(['id'=>67370, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Rindu']);
        DB::table('villages')->insert(['id'=>67371, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Semu']);
        DB::table('villages')->insert(['id'=>67372, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Tut']);
        DB::table('villages')->insert(['id'=>67373, 'districts_id'=>5814, 'zipcode'=>'98461', 'name'=>'Yohwer']);
        //Kecamatan Ayamaru Barat Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5815, 'city_id'=>352, 'name'=>'Ayamaru Barat']);
        DB::table('villages')->insert(['id'=>67374, 'districts_id'=>5815, 'zipcode'=>'98461', 'name'=>'Chaliat']);
        DB::table('villages')->insert(['id'=>67375, 'districts_id'=>5815, 'zipcode'=>'98461', 'name'=>'Fanse']);
        DB::table('villages')->insert(['id'=>67376, 'districts_id'=>5815, 'zipcode'=>'98461', 'name'=>'Sehu']);
        DB::table('villages')->insert(['id'=>67377, 'districts_id'=>5815, 'zipcode'=>'98461', 'name'=>'Sfacko']);
        DB::table('villages')->insert(['id'=>67378, 'districts_id'=>5815, 'zipcode'=>'98461', 'name'=>'Sfakraka']);
        DB::table('villages')->insert(['id'=>67379, 'districts_id'=>5815, 'zipcode'=>'98461', 'name'=>'Sien']);
        DB::table('villages')->insert(['id'=>67380, 'districts_id'=>5815, 'zipcode'=>'98461', 'name'=>'Sorowan']);
        DB::table('villages')->insert(['id'=>67381, 'districts_id'=>5815, 'zipcode'=>'98461', 'name'=>'Tbo']);
        //Kecamatan Ayamaru Timur Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5816, 'city_id'=>352, 'name'=>'Ayamaru Timur']);
        DB::table('villages')->insert(['id'=>67382, 'districts_id'=>5816, 'zipcode'=>'98461', 'name'=>'Faitmajin']);
        DB::table('villages')->insert(['id'=>67383, 'districts_id'=>5816, 'zipcode'=>'98461', 'name'=>'Faitsiur']);
        DB::table('villages')->insert(['id'=>67384, 'districts_id'=>5816, 'zipcode'=>'98461', 'name'=>'Huberita']);
        DB::table('villages')->insert(['id'=>67385, 'districts_id'=>5816, 'zipcode'=>'98461', 'name'=>'Insas']);
        DB::table('villages')->insert(['id'=>67386, 'districts_id'=>5816, 'zipcode'=>'98461', 'name'=>'Ismayu']);
        DB::table('villages')->insert(['id'=>67387, 'districts_id'=>5816, 'zipcode'=>'98461', 'name'=>'Kambuaya']);
        DB::table('villages')->insert(['id'=>67388, 'districts_id'=>5816, 'zipcode'=>'98461', 'name'=>'Keyum']);
        DB::table('villages')->insert(['id'=>67389, 'districts_id'=>5816, 'zipcode'=>'98461', 'name'=>'Sefayit']);
        //Kecamatan Ayamaru Timur Selatan Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5817, 'city_id'=>352, 'name'=>'Ayamaru Timur Selatan']);
        DB::table('villages')->insert(['id'=>67390, 'districts_id'=>5817, 'zipcode'=>'98461', 'name'=>'Faitwosur']);
        DB::table('villages')->insert(['id'=>67391, 'districts_id'=>5817, 'zipcode'=>'98461', 'name'=>'Isusu']);
        DB::table('villages')->insert(['id'=>67392, 'districts_id'=>5817, 'zipcode'=>'98461', 'name'=>'Kambuifa']);
        DB::table('villages')->insert(['id'=>67393, 'districts_id'=>5817, 'zipcode'=>'98461', 'name'=>'Kambuskato']);
        DB::table('villages')->insert(['id'=>67394, 'districts_id'=>5817, 'zipcode'=>'98461', 'name'=>'Kambuskato Utara']);
        DB::table('villages')->insert(['id'=>67395, 'districts_id'=>5817, 'zipcode'=>'98461', 'name'=>'Mano']);
        DB::table('villages')->insert(['id'=>67396, 'districts_id'=>5817, 'zipcode'=>'98461', 'name'=>'Sipat']);
        //Kecamatan Ayamaru Utara Timur Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5818, 'city_id'=>352, 'name'=>'Ayamaru Utara Timur']);
        DB::table('villages')->insert(['id'=>67397, 'districts_id'=>5818, 'zipcode'=>'98461', 'name'=>'Frabo']);
        DB::table('villages')->insert(['id'=>67398, 'districts_id'=>5818, 'zipcode'=>'98461', 'name'=>'Karfa']);
        DB::table('villages')->insert(['id'=>67399, 'districts_id'=>5818, 'zipcode'=>'98461', 'name'=>'Kona']);
        DB::table('villages')->insert(['id'=>67400, 'districts_id'=>5818, 'zipcode'=>'98461', 'name'=>'Kosah']);
        DB::table('villages')->insert(['id'=>67401, 'districts_id'=>5818, 'zipcode'=>'98461', 'name'=>'Mapura']);
        DB::table('villages')->insert(['id'=>67402, 'districts_id'=>5818, 'zipcode'=>'98461', 'name'=>'Suwiam']);
        DB::table('villages')->insert(['id'=>67403, 'districts_id'=>5818, 'zipcode'=>'98461', 'name'=>'Tomase']);
        //Kecamatan Ayamaru Selatan Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5819, 'city_id'=>352, 'name'=>'Ayamaru Selatan']);
        DB::table('villages')->insert(['id'=>67404, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Hawioh']);
        DB::table('villages')->insert(['id'=>67405, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Kanisabar']);
        DB::table('villages')->insert(['id'=>67406, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Koma Koma']);
        DB::table('villages')->insert(['id'=>67407, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Lemauk Klit']);
        DB::table('villages')->insert(['id'=>67408, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Sagrim']);
        DB::table('villages')->insert(['id'=>67409, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Sauf']);
        DB::table('villages')->insert(['id'=>67410, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Sembaro']);
        DB::table('villages')->insert(['id'=>67411, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Seneh']);
        DB::table('villages')->insert(['id'=>67412, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Sfarare']);
        DB::table('villages')->insert(['id'=>67413, 'districts_id'=>5819, 'zipcode'=>'98461', 'name'=>'Simiyah']);
        //Kecamatan Aitinyo Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5820, 'city_id'=>352, 'name'=>'Aitinyo']);
        DB::table('villages')->insert(['id'=>67414, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Afkrem']);
        DB::table('villages')->insert(['id'=>67415, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Aitinyo']);
        DB::table('villages')->insert(['id'=>67416, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Bofait']);
        DB::table('villages')->insert(['id'=>67417, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Ibasuf']);
        DB::table('villages')->insert(['id'=>67418, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Ihore']);
        DB::table('villages')->insert(['id'=>67419, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Irohmrar']);
        DB::table('villages')->insert(['id'=>67420, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Kamro']);
        DB::table('villages')->insert(['id'=>67421, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Kamro Selatan']);
        DB::table('villages')->insert(['id'=>67422, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Karsu']);
        DB::table('villages')->insert(['id'=>67423, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Korom']);
        DB::table('villages')->insert(['id'=>67424, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Sira Aya']);
        DB::table('villages')->insert(['id'=>67425, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Sowai Sau']);
        DB::table('villages')->insert(['id'=>67426, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Sris']);
        DB::table('villages')->insert(['id'=>67427, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Subin']);
        DB::table('villages')->insert(['id'=>67428, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Sumanis']);
        DB::table('villages')->insert(['id'=>67429, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Tehak Kecil']);
        DB::table('villages')->insert(['id'=>67430, 'districts_id'=>5820, 'zipcode'=>'98462', 'name'=>'Wiho']);
        //Kecamatan Aitinyo Utara Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5821, 'city_id'=>352, 'name'=>'Aitinyo Utara']);
        DB::table('villages')->insert(['id'=>67431, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Asmuruf Tee']);
        DB::table('villages')->insert(['id'=>67432, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Asmuruf U']);
        DB::table('villages')->insert(['id'=>67433, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Bohwat']);
        DB::table('villages')->insert(['id'=>67434, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Fan']);
        DB::table('villages')->insert(['id'=>67435, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Fategomi']);
        DB::table('villages')->insert(['id'=>67436, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Framafir']);
        DB::table('villages')->insert(['id'=>67437, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Gohsames']);
        DB::table('villages')->insert(['id'=>67438, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Inta']);
        DB::table('villages')->insert(['id'=>67439, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Mirafan']);
        DB::table('villages')->insert(['id'=>67440, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Subrit']);
        DB::table('villages')->insert(['id'=>67441, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Tehak Besar']);
        DB::table('villages')->insert(['id'=>67442, 'districts_id'=>5821, 'zipcode'=>'98462', 'name'=>'Tehak Tee']);
        //Kecamatan Aitinyo Tengah Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5822, 'city_id'=>352, 'name'=>'Aitinyo Tengah']);
        DB::table('villages')->insert(['id'=>67443, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Asnaif']);
        DB::table('villages')->insert(['id'=>67444, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Awit']);
        DB::table('villages')->insert(['id'=>67445, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Erokwero']);
        DB::table('villages')->insert(['id'=>67446, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Eway']);
        DB::table('villages')->insert(['id'=>67447, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Framboh']);
        DB::table('villages')->insert(['id'=>67448, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Iroh Sohser']);
        DB::table('villages')->insert(['id'=>67449, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Itigah']);
        DB::table('villages')->insert(['id'=>67450, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Sabun']);
        DB::table('villages')->insert(['id'=>67451, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Sira']);
        DB::table('villages')->insert(['id'=>67452, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Sira Tee']);
        DB::table('villages')->insert(['id'=>67453, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Tohmri']);
        DB::table('villages')->insert(['id'=>67454, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Way U']);
        DB::table('villages')->insert(['id'=>67455, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Wrait U']);
        DB::table('villages')->insert(['id'=>67456, 'districts_id'=>5822, 'zipcode'=>'98462', 'name'=>'Yaksoro']);
        //Kecamatan Aitinyo Raya Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5823, 'city_id'=>352, 'name'=>'Aitinyo Raya']);
        DB::table('villages')->insert(['id'=>67457, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Faithowes']);
        DB::table('villages')->insert(['id'=>67458, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Ikuf']);
        DB::table('villages')->insert(['id'=>67459, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Ikuf Utara']);
        DB::table('villages')->insert(['id'=>67460, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Isir']);
        DB::table('villages')->insert(['id'=>67461, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Jitmau']);
        DB::table('villages')->insert(['id'=>67462, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Jitmau Timur']);
        DB::table('villages')->insert(['id'=>67463, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Kambusabo']);
        DB::table('villages')->insert(['id'=>67464, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Sarimo']);
        DB::table('villages')->insert(['id'=>67465, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Srirtabam']);
        DB::table('villages')->insert(['id'=>67466, 'districts_id'=>5823, 'zipcode'=>'98462', 'name'=>'Yumame']);
        //Kecamatan Aitinyo Barat Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5824, 'city_id'=>352, 'name'=>'Aitinyo Barat']);
        DB::table('villages')->insert(['id'=>67467, 'districts_id'=>5824, 'zipcode'=>'98462', 'name'=>'Fatase']);
        DB::table('villages')->insert(['id'=>67468, 'districts_id'=>5824, 'zipcode'=>'98462', 'name'=>'Fatem']);
        DB::table('villages')->insert(['id'=>67469, 'districts_id'=>5824, 'zipcode'=>'98462', 'name'=>'Hasweh']);
        DB::table('villages')->insert(['id'=>67470, 'districts_id'=>5824, 'zipcode'=>'98462', 'name'=>'Hosyo Ata']);
        DB::table('villages')->insert(['id'=>67471, 'districts_id'=>5824, 'zipcode'=>'98462', 'name'=>'Kambufatem']);
        DB::table('villages')->insert(['id'=>67472, 'districts_id'=>5824, 'zipcode'=>'98462', 'name'=>'Kambufatem Utara']);
        DB::table('villages')->insert(['id'=>67473, 'districts_id'=>5824, 'zipcode'=>'98462', 'name'=>'Siyo']);
        DB::table('villages')->insert(['id'=>67474, 'districts_id'=>5824, 'zipcode'=>'98462', 'name'=>'Waybomatah']);
        //Kecamatan Aifat Timur Tengah Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5825, 'city_id'=>352, 'name'=>'Aifat Timur Tengah']);
        DB::table('villages')->insert(['id'=>67475, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Aifam']);
        DB::table('villages')->insert(['id'=>67476, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Aikus']);
        DB::table('villages')->insert(['id'=>67477, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Aiwesa']);
        DB::table('villages')->insert(['id'=>67478, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Assem']);
        DB::table('villages')->insert(['id'=>67479, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Ayata']);
        DB::table('villages')->insert(['id'=>67480, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Faan']);
        DB::table('villages')->insert(['id'=>67481, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Frambu']);
        DB::table('villages')->insert(['id'=>67482, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Kamat']);
        DB::table('villages')->insert(['id'=>67483, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Mupas']);
        DB::table('villages')->insert(['id'=>67484, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Pitor']);
        DB::table('villages')->insert(['id'=>67485, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Saud']);
        DB::table('villages')->insert(['id'=>67486, 'districts_id'=>5825, 'zipcode'=>'98463', 'name'=>'Tiam']);
        //Kecamatan Aifat Timur Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5826, 'city_id'=>352, 'name'=>'Aifat Timur']);
        DB::table('villages')->insert(['id'=>67487, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Aikrer']);
        DB::table('villages')->insert(['id'=>67488, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Aisa']);
        DB::table('villages')->insert(['id'=>67489, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Aitrem']);
        DB::table('villages')->insert(['id'=>67490, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Buoh Sa']);
        DB::table('villages')->insert(['id'=>67491, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Fuog']);
        DB::table('villages')->insert(['id'=>67492, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Sabah']);
        DB::table('villages')->insert(['id'=>67493, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Sanem']);
        DB::table('villages')->insert(['id'=>67494, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Sawin']);
        DB::table('villages')->insert(['id'=>67495, 'districts_id'=>5826, 'zipcode'=>'98463', 'name'=>'Wakom']);
        //Kecamatan Aifat Timur Jauh Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5827, 'city_id'=>352, 'name'=>'Aifat Timur Jauh']);
        DB::table('villages')->insert(['id'=>67496, 'districts_id'=>5827, 'zipcode'=>'98463', 'name'=>'Aimau']);
        DB::table('villages')->insert(['id'=>67497, 'districts_id'=>5827, 'zipcode'=>'98463', 'name'=>'Ainesra']);
        DB::table('villages')->insert(['id'=>67498, 'districts_id'=>5827, 'zipcode'=>'98463', 'name'=>'Akingging']);
        DB::table('villages')->insert(['id'=>67499, 'districts_id'=>5827, 'zipcode'=>'98463', 'name'=>'Framneway']);
        DB::table('villages')->insert(['id'=>67500, 'districts_id'=>5827, 'zipcode'=>'98463', 'name'=>'Mesyam']);
        DB::table('villages')->insert(['id'=>67501, 'districts_id'=>5827, 'zipcode'=>'98463', 'name'=>'Sasior Nafe']);
        DB::table('villages')->insert(['id'=>67502, 'districts_id'=>5827, 'zipcode'=>'98463', 'name'=>'Tiefromen']);
        //Kecamatan Aifat Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5828, 'city_id'=>352, 'name'=>'Aifat']);
        DB::table('villages')->insert(['id'=>67503, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Ainod']);
        DB::table('villages')->insert(['id'=>67504, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Aisyo']);
        DB::table('villages')->insert(['id'=>67505, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Bori']);
        DB::table('villages')->insert(['id'=>67506, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Bori Timur']);
        DB::table('villages')->insert(['id'=>67507, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Faitmayaf']);
        DB::table('villages')->insert(['id'=>67508, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Faitmayat Barat']);
        DB::table('villages')->insert(['id'=>67509, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Frawebo']);
        DB::table('villages')->insert(['id'=>67510, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Futon']);
        DB::table('villages')->insert(['id'=>67511, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Kocuas Utara']);
        DB::table('villages')->insert(['id'=>67512, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Kocuwer']);
        DB::table('villages')->insert(['id'=>67513, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Kocuwer Selatan']);
        DB::table('villages')->insert(['id'=>67514, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Konja']);
        DB::table('villages')->insert(['id'=>67515, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Kumurkek']);
        DB::table('villages')->insert(['id'=>67516, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Kumurkek Barat']);
        DB::table('villages')->insert(['id'=>67517, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Sampika']);
        DB::table('villages')->insert(['id'=>67518, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Sikof']);
        DB::table('villages')->insert(['id'=>67519, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Sunei']);
        DB::table('villages')->insert(['id'=>67520, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Susumuk']);
        DB::table('villages')->insert(['id'=>67521, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Tahahite']);
        DB::table('villages')->insert(['id'=>67522, 'districts_id'=>5828, 'zipcode'=>'98463', 'name'=>'Werjaya']);
        DB::table('villages')->insert(['id'=>67523, 'districts_id'=>5828, 'zipcode'=>'98652', 'name'=>'Faitsawe']);
        DB::table('villages')->insert(['id'=>67524, 'districts_id'=>5828, 'zipcode'=>'98652', 'name'=>'Kokas']);
        DB::table('villages')->insert(['id'=>67525, 'districts_id'=>5828, 'zipcode'=>'98652', 'name'=>'Martaim']);
        //Kecamatan Aifat Selatan Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5829, 'city_id'=>352, 'name'=>'Aifat Selatan']);
        DB::table('villages')->insert(['id'=>67526, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Asiaf Zaman']);
        DB::table('villages')->insert(['id'=>67527, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Awet Main']);
        DB::table('villages')->insert(['id'=>67528, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Fuog']);
        DB::table('villages')->insert(['id'=>67529, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Fuog Selatan']);
        DB::table('villages')->insert(['id'=>67530, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Hora Iek']);
        DB::table('villages')->insert(['id'=>67531, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Imsun']);
        DB::table('villages')->insert(['id'=>67532, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Kaitana']);
        DB::table('villages')->insert(['id'=>67533, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Kisor']);
        DB::table('villages')->insert(['id'=>67534, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Krus']);
        DB::table('villages')->insert(['id'=>67535, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Roma']);
        DB::table('villages')->insert(['id'=>67536, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Sabah']);
        DB::table('villages')->insert(['id'=>67537, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Same Rakator']);
        DB::table('villages')->insert(['id'=>67538, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Sorry']);
        DB::table('villages')->insert(['id'=>67539, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Tahsimara']);
        DB::table('villages')->insert(['id'=>67540, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Tolak']);
        DB::table('villages')->insert(['id'=>67541, 'districts_id'=>5829, 'zipcode'=>'98463', 'name'=>'Yeek']);
        //Kecamatan Aifat Utara Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5830, 'city_id'=>352, 'name'=>'Aifat Utara']);
        DB::table('villages')->insert(['id'=>67542, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Ayawasi']);
        DB::table('villages')->insert(['id'=>67543, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Ayawasi Selatan']);
        DB::table('villages')->insert(['id'=>67544, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Ayawasi Timur']);
        DB::table('villages')->insert(['id'=>67545, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Fonatu']);
        DB::table('villages')->insert(['id'=>67546, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Haenkanes']);
        DB::table('villages')->insert(['id'=>67547, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Howait']);
        DB::table('villages')->insert(['id'=>67548, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Irata']);
        DB::table('villages')->insert(['id'=>67549, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Konja']);
        DB::table('villages')->insert(['id'=>67550, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Konja Barat']);
        DB::table('villages')->insert(['id'=>67551, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Man']);
        DB::table('villages')->insert(['id'=>67552, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Mosun']);
        DB::table('villages')->insert(['id'=>67553, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Mosun Timur']);
        DB::table('villages')->insert(['id'=>67554, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Mosun Utara']);
        DB::table('villages')->insert(['id'=>67555, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Mowes']);
        DB::table('villages')->insert(['id'=>67556, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Neset']);
        DB::table('villages')->insert(['id'=>67557, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Raha']);
        DB::table('villages')->insert(['id'=>67558, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Susai']);
        DB::table('villages')->insert(['id'=>67559, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Wayane']);
        DB::table('villages')->insert(['id'=>67560, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Yarat']);
        DB::table('villages')->insert(['id'=>67561, 'districts_id'=>5830, 'zipcode'=>'98463', 'name'=>'Yarat Timur']);
        //Kecamatan Aifat Timur Selatan Kab. Maybrat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5831, 'city_id'=>352, 'name'=>'Aifat Timur Selatan']);
        DB::table('villages')->insert(['id'=>67562, 'districts_id'=>5831, 'zipcode'=>'98463', 'name'=>'Makiri']);
        DB::table('villages')->insert(['id'=>67563, 'districts_id'=>5831, 'zipcode'=>'98463', 'name'=>'Srumate']);
        DB::table('villages')->insert(['id'=>67564, 'districts_id'=>5831, 'zipcode'=>'98463', 'name'=>'Warba']);
        DB::table('villages')->insert(['id'=>67565, 'districts_id'=>5831, 'zipcode'=>'98463', 'name'=>'Winuni']);
        DB::table('villages')->insert(['id'=>67566, 'districts_id'=>5831, 'zipcode'=>'98463', 'name'=>'Womba']);
        DB::table('villages')->insert(['id'=>67567, 'districts_id'=>5831, 'zipcode'=>'98463', 'name'=>'Wormu']);

        //Kab. Raja Ampat Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>353, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Raja Ampat']);
        //Kecamatan Ayau Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5832, 'city_id'=>353, 'name'=>'Ayau']);
        DB::table('villages')->insert(['id'=>67568, 'districts_id'=>5832, 'zipcode'=>'98481', 'name'=>'Abidon']);
        DB::table('villages')->insert(['id'=>67569, 'districts_id'=>5832, 'zipcode'=>'98481', 'name'=>'Meosbekwan']);
        DB::table('villages')->insert(['id'=>67570, 'districts_id'=>5832, 'zipcode'=>'98481', 'name'=>'Reni']);
        DB::table('villages')->insert(['id'=>67571, 'districts_id'=>5832, 'zipcode'=>'98481', 'name'=>'Rutum']);
        //Kecamatan Waigeo Utara Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5833, 'city_id'=>353, 'name'=>'Waigeo Utara']);
        DB::table('villages')->insert(['id'=>67572, 'districts_id'=>5833, 'zipcode'=>'98481', 'name'=>'Andey']);
        DB::table('villages')->insert(['id'=>67573, 'districts_id'=>5833, 'zipcode'=>'98481', 'name'=>'Asukweri']);
        DB::table('villages')->insert(['id'=>67574, 'districts_id'=>5833, 'zipcode'=>'98481', 'name'=>'Bonsayor']);
        DB::table('villages')->insert(['id'=>67575, 'districts_id'=>5833, 'zipcode'=>'98481', 'name'=>'Darumbab']);
        DB::table('villages')->insert(['id'=>67576, 'districts_id'=>5833, 'zipcode'=>'98481', 'name'=>'Kabare']);
        DB::table('villages')->insert(['id'=>67577, 'districts_id'=>5833, 'zipcode'=>'98481', 'name'=>'Kalisade']);
        //Kecamatan Waigeo Barat Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5834, 'city_id'=>353, 'name'=>'Waigeo Barat']);
        DB::table('villages')->insert(['id'=>67578, 'districts_id'=>5834, 'zipcode'=>'98481', 'name'=>'Bianci']);
        DB::table('villages')->insert(['id'=>67579, 'districts_id'=>5834, 'zipcode'=>'98481', 'name'=>'Mutus']);
        DB::table('villages')->insert(['id'=>67580, 'districts_id'=>5834, 'zipcode'=>'98481', 'name'=>'Saleo']);
        DB::table('villages')->insert(['id'=>67581, 'districts_id'=>5834, 'zipcode'=>'98481', 'name'=>'Selpele']);
        DB::table('villages')->insert(['id'=>67582, 'districts_id'=>5834, 'zipcode'=>'98481', 'name'=>'Waisilip']);
        //Kecamatan Warwabomi Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5835, 'city_id'=>353, 'name'=>'Warwabomi']);
        DB::table('villages')->insert(['id'=>67583, 'districts_id'=>5835, 'zipcode'=>'98481', 'name'=>'Boni']);
        DB::table('villages')->insert(['id'=>67584, 'districts_id'=>5835, 'zipcode'=>'98481', 'name'=>'Mnier']);
        DB::table('villages')->insert(['id'=>67585, 'districts_id'=>5835, 'zipcode'=>'98481', 'name'=>'Warkori']);
        DB::table('villages')->insert(['id'=>67586, 'districts_id'=>5835, 'zipcode'=>'98481', 'name'=>'Warmanai']);
        //Kecamatan Kepulauan Ayau Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5836, 'city_id'=>353, 'name'=>'Kepulauan Ayau']);
        DB::table('villages')->insert(['id'=>67587, 'districts_id'=>5836, 'zipcode'=>'98481', 'name'=>'Doreker (dorekar)']);
        DB::table('villages')->insert(['id'=>67588, 'districts_id'=>5836, 'zipcode'=>'98481', 'name'=>'Meosbekwan']);
        DB::table('villages')->insert(['id'=>67589, 'districts_id'=>5836, 'zipcode'=>'98481', 'name'=>'Reni']);
        DB::table('villages')->insert(['id'=>67590, 'districts_id'=>5836, 'zipcode'=>'98481', 'name'=>'Rutum']);
        DB::table('villages')->insert(['id'=>67591, 'districts_id'=>5836, 'zipcode'=>'98481', 'name'=>'Yenkawir']);
        //Kecamatan Supnin Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5837, 'city_id'=>353, 'name'=>'Supnin']);
        DB::table('villages')->insert(['id'=>67592, 'districts_id'=>5837, 'zipcode'=>'98481', 'name'=>'Duber']);
        DB::table('villages')->insert(['id'=>67593, 'districts_id'=>5837, 'zipcode'=>'98481', 'name'=>'Kapadiri']);
        DB::table('villages')->insert(['id'=>67594, 'districts_id'=>5837, 'zipcode'=>'98481', 'name'=>'Rauki']);
        DB::table('villages')->insert(['id'=>67595, 'districts_id'=>5837, 'zipcode'=>'98481', 'name'=>'Urai']);
        //Kecamatan Waigeo Barat Kepulauan Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5838, 'city_id'=>353, 'name'=>'Waigeo Barat Kepulauan']);
        DB::table('villages')->insert(['id'=>67596, 'districts_id'=>5838, 'zipcode'=>'98481', 'name'=>'Gag']);
        DB::table('villages')->insert(['id'=>67597, 'districts_id'=>5838, 'zipcode'=>'98481', 'name'=>'Manyaifun']);
        DB::table('villages')->insert(['id'=>67598, 'districts_id'=>5838, 'zipcode'=>'98481', 'name'=>'Meosmanggara']);
        DB::table('villages')->insert(['id'=>67599, 'districts_id'=>5838, 'zipcode'=>'98481', 'name'=>'Pam']);
        DB::table('villages')->insert(['id'=>67600, 'districts_id'=>5838, 'zipcode'=>'98481', 'name'=>'Saukabu']);
        DB::table('villages')->insert(['id'=>67601, 'districts_id'=>5838, 'zipcode'=>'98481', 'name'=>'Saupapir']);
        //Kecamatan Meos Mansar Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5839, 'city_id'=>353, 'name'=>'Meos Mansar']);
        DB::table('villages')->insert(['id'=>67602, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Arborek']);
        DB::table('villages')->insert(['id'=>67603, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Kabuy (kabui)']);
        DB::table('villages')->insert(['id'=>67604, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Kapisawar']);
        DB::table('villages')->insert(['id'=>67605, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Kurkapa']);
        DB::table('villages')->insert(['id'=>67606, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Sawandarek']);
        DB::table('villages')->insert(['id'=>67607, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Sawinggrai']);
        DB::table('villages')->insert(['id'=>67608, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Yembekwan']);
        DB::table('villages')->insert(['id'=>67609, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Yenbuba']);
        DB::table('villages')->insert(['id'=>67610, 'districts_id'=>5839, 'zipcode'=>'98482', 'name'=>'Yenwaupnoor (yenwaupnor)']);
        //Kecamatan Tiplol Mayalibit Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5840, 'city_id'=>353, 'name'=>'Tiplol Mayalibit']);
        DB::table('villages')->insert(['id'=>67611, 'districts_id'=>5840, 'zipcode'=>'98482', 'name'=>'Arway']);
        DB::table('villages')->insert(['id'=>67612, 'districts_id'=>5840, 'zipcode'=>'98482', 'name'=>'Beo']);
        DB::table('villages')->insert(['id'=>67613, 'districts_id'=>5840, 'zipcode'=>'98482', 'name'=>'Go']);
        DB::table('villages')->insert(['id'=>67614, 'districts_id'=>5840, 'zipcode'=>'98482', 'name'=>'Kabilol']);
        DB::table('villages')->insert(['id'=>67615, 'districts_id'=>5840, 'zipcode'=>'98482', 'name'=>'Waifoi']);
        DB::table('villages')->insert(['id'=>67616, 'districts_id'=>5840, 'zipcode'=>'98482', 'name'=>'Warimak']);
        //Kecamatan Kota Waisai Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5841, 'city_id'=>353, 'name'=>'Kota Waisai']);
        DB::table('villages')->insert(['id'=>67617, 'districts_id'=>5841, 'zipcode'=>'98482', 'name'=>'Bonwakir']);
        DB::table('villages')->insert(['id'=>67618, 'districts_id'=>5841, 'zipcode'=>'98482', 'name'=>'Sapordanco']);
        DB::table('villages')->insert(['id'=>67619, 'districts_id'=>5841, 'zipcode'=>'98482', 'name'=>'Waisai']);
        DB::table('villages')->insert(['id'=>67620, 'districts_id'=>5841, 'zipcode'=>'98482', 'name'=>'Warmasen']);
        //Kecamatan Waigeo Selatan Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5842, 'city_id'=>353, 'name'=>'Waigeo Selatan']);
        DB::table('villages')->insert(['id'=>67621, 'districts_id'=>5842, 'zipcode'=>'98482', 'name'=>'Friwen']);
        DB::table('villages')->insert(['id'=>67622, 'districts_id'=>5842, 'zipcode'=>'98482', 'name'=>'Saonek']);
        DB::table('villages')->insert(['id'=>67623, 'districts_id'=>5842, 'zipcode'=>'98482', 'name'=>'Saporkren']);
        DB::table('villages')->insert(['id'=>67624, 'districts_id'=>5842, 'zipcode'=>'98482', 'name'=>'Wawiyai']);
        DB::table('villages')->insert(['id'=>67625, 'districts_id'=>5842, 'zipcode'=>'98482', 'name'=>'Yenbeser']);
        //Kecamatan Teluk Mayalibit Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5843, 'city_id'=>353, 'name'=>'Teluk Mayalibit']);
        DB::table('villages')->insert(['id'=>67626, 'districts_id'=>5843, 'zipcode'=>'98482', 'name'=>'Kalitoko']);
        DB::table('villages')->insert(['id'=>67627, 'districts_id'=>5843, 'zipcode'=>'98482', 'name'=>'Lopintol']);
        DB::table('villages')->insert(['id'=>67628, 'districts_id'=>5843, 'zipcode'=>'98482', 'name'=>'Mumes']);
        DB::table('villages')->insert(['id'=>67629, 'districts_id'=>5843, 'zipcode'=>'98482', 'name'=>'Warsamdin']);
        //Kecamatan Waigeo Timur Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5844, 'city_id'=>353, 'name'=>'Waigeo Timur']);
        DB::table('villages')->insert(['id'=>67630, 'districts_id'=>5844, 'zipcode'=>'98482', 'name'=>'Puper']);
        DB::table('villages')->insert(['id'=>67631, 'districts_id'=>5844, 'zipcode'=>'98482', 'name'=>'Urbinasopen']);
        DB::table('villages')->insert(['id'=>67632, 'districts_id'=>5844, 'zipcode'=>'98482', 'name'=>'Yembekaki']);
        DB::table('villages')->insert(['id'=>67633, 'districts_id'=>5844, 'zipcode'=>'98482', 'name'=>'Yensener (yesner)']);
        //Kecamatan Misool Timur Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5845, 'city_id'=>353, 'name'=>'Misool Timur']);
        DB::table('villages')->insert(['id'=>67634, 'districts_id'=>5845, 'zipcode'=>'98483', 'name'=>'Audam']);
        DB::table('villages')->insert(['id'=>67635, 'districts_id'=>5845, 'zipcode'=>'98483', 'name'=>'Folley']);
        DB::table('villages')->insert(['id'=>67636, 'districts_id'=>5845, 'zipcode'=>'98483', 'name'=>'Limalas Barat']);
        DB::table('villages')->insert(['id'=>67637, 'districts_id'=>5845, 'zipcode'=>'98483', 'name'=>'Limalas Timur']);
        DB::table('villages')->insert(['id'=>67638, 'districts_id'=>5845, 'zipcode'=>'98483', 'name'=>'Tomolol']);
        DB::table('villages')->insert(['id'=>67639, 'districts_id'=>5845, 'zipcode'=>'98483', 'name'=>'Usaha Jaya']);
        //Kecamatan Kofiau Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5846, 'city_id'=>353, 'name'=>'Kofiau']);
        DB::table('villages')->insert(['id'=>67640, 'districts_id'=>5846, 'zipcode'=>'98483', 'name'=>'Awat']);
        DB::table('villages')->insert(['id'=>67641, 'districts_id'=>5846, 'zipcode'=>'98483', 'name'=>'Deer']);
        DB::table('villages')->insert(['id'=>67642, 'districts_id'=>5846, 'zipcode'=>'98483', 'name'=>'Dibalal']);
        DB::table('villages')->insert(['id'=>67643, 'districts_id'=>5846, 'zipcode'=>'98483', 'name'=>'Mikiran']);
        DB::table('villages')->insert(['id'=>67644, 'districts_id'=>5846, 'zipcode'=>'98483', 'name'=>'Tolabi (tolobi)']);
        //Kecamatan Misool Barat Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5847, 'city_id'=>353, 'name'=>'Misool Barat']);
        DB::table('villages')->insert(['id'=>67645, 'districts_id'=>5847, 'zipcode'=>'98483', 'name'=>'Biga']);
        DB::table('villages')->insert(['id'=>67646, 'districts_id'=>5847, 'zipcode'=>'98483', 'name'=>'Gamta']);
        DB::table('villages')->insert(['id'=>67647, 'districts_id'=>5847, 'zipcode'=>'98483', 'name'=>'Kapatcol']);
        DB::table('villages')->insert(['id'=>67648, 'districts_id'=>5847, 'zipcode'=>'98483', 'name'=>'Lilinta']);
        DB::table('villages')->insert(['id'=>67649, 'districts_id'=>5847, 'zipcode'=>'98483', 'name'=>'Magey']);
        //Kecamatan Misool Selatan Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5848, 'city_id'=>353, 'name'=>'Misool Selatan']);
        DB::table('villages')->insert(['id'=>67650, 'districts_id'=>5848, 'zipcode'=>'98483', 'name'=>'Dabatan']);
        DB::table('villages')->insert(['id'=>67651, 'districts_id'=>5848, 'zipcode'=>'98483', 'name'=>'Fafanlap']);
        DB::table('villages')->insert(['id'=>67652, 'districts_id'=>5848, 'zipcode'=>'98483', 'name'=>'Harapan Jaya']);
        DB::table('villages')->insert(['id'=>67653, 'districts_id'=>5848, 'zipcode'=>'98483', 'name'=>'Usaha Jaya']);
        DB::table('villages')->insert(['id'=>67654, 'districts_id'=>5848, 'zipcode'=>'98483', 'name'=>'Yellu']);
        //Kecamatan Misool (misool Utara) Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5849, 'city_id'=>353, 'name'=>'Misool (misool Utara)']);
        DB::table('villages')->insert(['id'=>67655, 'districts_id'=>5849, 'zipcode'=>'98483', 'name'=>'Folley']);
        DB::table('villages')->insert(['id'=>67656, 'districts_id'=>5849, 'zipcode'=>'98483', 'name'=>'Lenmalas']);
        DB::table('villages')->insert(['id'=>67657, 'districts_id'=>5849, 'zipcode'=>'98483', 'name'=>'Satukorano (sato Kurana)']);
        DB::table('villages')->insert(['id'=>67658, 'districts_id'=>5849, 'zipcode'=>'98483', 'name'=>'Tomolol']);
        DB::table('villages')->insert(['id'=>67659, 'districts_id'=>5849, 'zipcode'=>'98483', 'name'=>'Wejim']);
        //Kecamatan Kepulauan Sembilan Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5850, 'city_id'=>353, 'name'=>'Kepulauan Sembilan']);
        DB::table('villages')->insert(['id'=>67660, 'districts_id'=>5850, 'zipcode'=>'98483', 'name'=>'Pulau Tikus']);
        DB::table('villages')->insert(['id'=>67661, 'districts_id'=>5850, 'zipcode'=>'98483', 'name'=>'Satukurano']);
        DB::table('villages')->insert(['id'=>67662, 'districts_id'=>5850, 'zipcode'=>'98483', 'name'=>'Wejim Barat']);
        DB::table('villages')->insert(['id'=>67663, 'districts_id'=>5850, 'zipcode'=>'98483', 'name'=>'Wejim Timur']);
        //Kecamatan Batanta Selatan Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5851, 'city_id'=>353, 'name'=>'Batanta Selatan']);
        DB::table('villages')->insert(['id'=>67664, 'districts_id'=>5851, 'zipcode'=>'98484', 'name'=>'Amdui']);
        DB::table('villages')->insert(['id'=>67665, 'districts_id'=>5851, 'zipcode'=>'98484', 'name'=>'Wailebet']);
        DB::table('villages')->insert(['id'=>67666, 'districts_id'=>5851, 'zipcode'=>'98484', 'name'=>'Waiman']);
        DB::table('villages')->insert(['id'=>67667, 'districts_id'=>5851, 'zipcode'=>'98484', 'name'=>'Yenanas']);
        //Kecamatan Batanta Utara Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5852, 'city_id'=>353, 'name'=>'Batanta Utara']);
        DB::table('villages')->insert(['id'=>67668, 'districts_id'=>5852, 'zipcode'=>'98484', 'name'=>'Arefi Selatan']);
        DB::table('villages')->insert(['id'=>67669, 'districts_id'=>5852, 'zipcode'=>'98484', 'name'=>'Arefi Timur']);
        DB::table('villages')->insert(['id'=>67670, 'districts_id'=>5852, 'zipcode'=>'98484', 'name'=>'Yensawai Barat']);
        DB::table('villages')->insert(['id'=>67671, 'districts_id'=>5852, 'zipcode'=>'98484', 'name'=>'Yensawai Timur']);
        //Kecamatan Salawati Utara (samate) Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5853, 'city_id'=>353, 'name'=>'Salawati Utara (samate)']);
        DB::table('villages')->insert(['id'=>67672, 'districts_id'=>5853, 'zipcode'=>'98484', 'name'=>'Jefman Barat']);
        DB::table('villages')->insert(['id'=>67673, 'districts_id'=>5853, 'zipcode'=>'98484', 'name'=>'Jefman Timur']);
        DB::table('villages')->insert(['id'=>67674, 'districts_id'=>5853, 'zipcode'=>'98484', 'name'=>'Kapatlap']);
        DB::table('villages')->insert(['id'=>67675, 'districts_id'=>5853, 'zipcode'=>'98484', 'name'=>'Samate']);
        DB::table('villages')->insert(['id'=>67676, 'districts_id'=>5853, 'zipcode'=>'98484', 'name'=>'Waidim']);
        DB::table('villages')->insert(['id'=>67677, 'districts_id'=>5853, 'zipcode'=>'98484', 'name'=>'Wamega']);
        //Kecamatan Salawati Barat Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5854, 'city_id'=>353, 'name'=>'Salawati Barat']);
        DB::table('villages')->insert(['id'=>67678, 'districts_id'=>5854, 'zipcode'=>'98484', 'name'=>'Kaliam']);
        DB::table('villages')->insert(['id'=>67679, 'districts_id'=>5854, 'zipcode'=>'98484', 'name'=>'Kalwal']);
        DB::table('villages')->insert(['id'=>67680, 'districts_id'=>5854, 'zipcode'=>'98484', 'name'=>'Solol']);
        DB::table('villages')->insert(['id'=>67681, 'districts_id'=>5854, 'zipcode'=>'98484', 'name'=>'Waibon']);
        //Kecamatan Salawati Tengah Kab. Raja Ampat Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5855, 'city_id'=>353, 'name'=>'Salawati Tengah']);
        DB::table('villages')->insert(['id'=>67682, 'districts_id'=>5855, 'zipcode'=>'98484', 'name'=>'Kalobo']);
        DB::table('villages')->insert(['id'=>67683, 'districts_id'=>5855, 'zipcode'=>'98484', 'name'=>'Sakabu']);
        DB::table('villages')->insert(['id'=>67684, 'districts_id'=>5855, 'zipcode'=>'98484', 'name'=>'Waibu']);
        DB::table('villages')->insert(['id'=>67685, 'districts_id'=>5855, 'zipcode'=>'98484', 'name'=>'Waijan']);
        DB::table('villages')->insert(['id'=>67686, 'districts_id'=>5855, 'zipcode'=>'98484', 'name'=>'Wailabu']);
        DB::table('villages')->insert(['id'=>67687, 'districts_id'=>5855, 'zipcode'=>'98484', 'name'=>'Wailen']);
        DB::table('villages')->insert(['id'=>67688, 'districts_id'=>5855, 'zipcode'=>'98484', 'name'=>'Waimeci']);

        //Kab. Fakfak Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>354, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Fakfak']);
        //Kecamatan Fakfak Tengah Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5856, 'city_id'=>354, 'name'=>'Fakfak Tengah']);
        DB::table('villages')->insert(['id'=>67689, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Air Besar']);
        DB::table('villages')->insert(['id'=>67690, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Brongkendik']);
        DB::table('villages')->insert(['id'=>67691, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Dana Weria']);
        DB::table('villages')->insert(['id'=>67692, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Kaduria (raduria)']);
        DB::table('villages')->insert(['id'=>67693, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Kanantare']);
        DB::table('villages')->insert(['id'=>67694, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Katemba']);
        DB::table('villages')->insert(['id'=>67695, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Kayu Merah']);
        DB::table('villages')->insert(['id'=>67696, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Mandopma']);
        DB::table('villages')->insert(['id'=>67697, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Nemiwikarya (nemewi Karya)']);
        DB::table('villages')->insert(['id'=>67698, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Pasir Putih']);
        DB::table('villages')->insert(['id'=>67699, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Pirma']);
        DB::table('villages')->insert(['id'=>67700, 'districts_id'=>5856, 'zipcode'=>'98611', 'name'=>'Sakartemin']);
        //Kecamatan Fakfak Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5857, 'city_id'=>354, 'name'=>'Fakfak']);
        DB::table('villages')->insert(['id'=>67701, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Dulanpokpok']);
        DB::table('villages')->insert(['id'=>67702, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Fak Fak Selatan']);
        DB::table('villages')->insert(['id'=>67703, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Fak Fak Utara']);
        DB::table('villages')->insert(['id'=>67704, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Gewerpe']);
        DB::table('villages')->insert(['id'=>67705, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Kapartutin']);
        DB::table('villages')->insert(['id'=>67706, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Lusi Peri']);
        DB::table('villages')->insert(['id'=>67707, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Sekban']);
        DB::table('villages')->insert(['id'=>67708, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Sekru']);
        DB::table('villages')->insert(['id'=>67709, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Tanama']);
        DB::table('villages')->insert(['id'=>67710, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Torea']);
        DB::table('villages')->insert(['id'=>67711, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Wagom Selatan']);
        DB::table('villages')->insert(['id'=>67712, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Wagon Utara']);
        DB::table('villages')->insert(['id'=>67713, 'districts_id'=>5857, 'zipcode'=>'98611', 'name'=>'Wrikapal']);
        //Kecamatan Kokas Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5858, 'city_id'=>354, 'name'=>'Kokas']);
        DB::table('villages')->insert(['id'=>67714, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Andamata']);
        DB::table('villages')->insert(['id'=>67715, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Arguni']);
        DB::table('villages')->insert(['id'=>67716, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Batufiafas']);
        DB::table('villages')->insert(['id'=>67717, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Darembang']);
        DB::table('villages')->insert(['id'=>67718, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Fior']);
        DB::table('villages')->insert(['id'=>67719, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Furir']);
        DB::table('villages')->insert(['id'=>67720, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Goras']);
        DB::table('villages')->insert(['id'=>67721, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Kampung Baru']);
        DB::table('villages')->insert(['id'=>67722, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Kinam']);
        DB::table('villages')->insert(['id'=>67723, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Kokas Kota']);
        DB::table('villages')->insert(['id'=>67724, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Kriawaswas']);
        DB::table('villages')->insert(['id'=>67725, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Mambunibuni']);
        DB::table('villages')->insert(['id'=>67726, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Mandoni']);
        DB::table('villages')->insert(['id'=>67727, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Mbahamdandra']);
        DB::table('villages')->insert(['id'=>67728, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Mitimber']);
        DB::table('villages')->insert(['id'=>67729, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Patimburak']);
        DB::table('villages')->insert(['id'=>67730, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Sekar']);
        DB::table('villages')->insert(['id'=>67731, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Sisir']);
        DB::table('villages')->insert(['id'=>67732, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Ugar']);
        DB::table('villages')->insert(['id'=>67733, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Wabung']);
        DB::table('villages')->insert(['id'=>67734, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Wagap']);
        DB::table('villages')->insert(['id'=>67735, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Waremu']);
        DB::table('villages')->insert(['id'=>67736, 'districts_id'=>5858, 'zipcode'=>'98652', 'name'=>'Wos']);
        //Kecamatan Kramongmongga (kramamongga) Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5859, 'city_id'=>354, 'name'=>'Kramongmongga (kramamongga)']);
        DB::table('villages')->insert(['id'=>67737, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Bahbadan']);
        DB::table('villages')->insert(['id'=>67738, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Gewab']);
        DB::table('villages')->insert(['id'=>67739, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Homor Kokma']);
        DB::table('villages')->insert(['id'=>67740, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Kaburbur']);
        DB::table('villages')->insert(['id'=>67741, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Kayuni']);
        DB::table('villages')->insert(['id'=>67742, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Kramongmongga']);
        DB::table('villages')->insert(['id'=>67743, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Kuagas']);
        DB::table('villages')->insert(['id'=>67744, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Kwamkwamur']);
        DB::table('villages')->insert(['id'=>67745, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Mamur']);
        DB::table('villages')->insert(['id'=>67746, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Mananmur']);
        DB::table('villages')->insert(['id'=>67747, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Nembukteb']);
        DB::table('villages')->insert(['id'=>67748, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Pattukar']);
        DB::table('villages')->insert(['id'=>67749, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Pikpik']);
        DB::table('villages')->insert(['id'=>67750, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Rangkendak']);
        DB::table('villages')->insert(['id'=>67751, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Ubadari']);
        DB::table('villages')->insert(['id'=>67752, 'districts_id'=>5859, 'zipcode'=>'98652', 'name'=>'Wargep']);
        //Kecamatan Teluk Patipi Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5860, 'city_id'=>354, 'name'=>'Teluk Patipi']);
        DB::table('villages')->insert(['id'=>67753, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Adora']);
        DB::table('villages')->insert(['id'=>67754, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Degen']);
        DB::table('villages')->insert(['id'=>67755, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Mawar']);
        DB::table('villages')->insert(['id'=>67756, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Ofie']);
        DB::table('villages')->insert(['id'=>67757, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Patipi Pasir']);
        DB::table('villages')->insert(['id'=>67758, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Patipi Pulau (nusa)']);
        DB::table('villages')->insert(['id'=>67759, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Puar']);
        DB::table('villages')->insert(['id'=>67760, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Rumbati']);
        DB::table('villages')->insert(['id'=>67761, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Salakiti']);
        DB::table('villages')->insert(['id'=>67762, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Sum']);
        DB::table('villages')->insert(['id'=>67763, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Tanehamur']);
        DB::table('villages')->insert(['id'=>67764, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Tanisapata (tanisapatu)']);
        DB::table('villages')->insert(['id'=>67765, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Tawar']);
        DB::table('villages')->insert(['id'=>67766, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Teluk Patipi']);
        DB::table('villages')->insert(['id'=>67767, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Tetar']);
        DB::table('villages')->insert(['id'=>67768, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Tibatibananam']);
        DB::table('villages')->insert(['id'=>67769, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Tuimar']);
        DB::table('villages')->insert(['id'=>67770, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Us']);
        DB::table('villages')->insert(['id'=>67771, 'districts_id'=>5860, 'zipcode'=>'98661', 'name'=>'Werfa (werfra)']);
        //Kecamatan Fakfak Barat Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5861, 'city_id'=>354, 'name'=>'Fakfak Barat']);
        DB::table('villages')->insert(['id'=>67772, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Kiat']);
        DB::table('villages')->insert(['id'=>67773, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Purwasak']);
        DB::table('villages')->insert(['id'=>67774, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Siboru']);
        DB::table('villages')->insert(['id'=>67775, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Sipatnanam']);
        DB::table('villages')->insert(['id'=>67776, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Wartutin']);
        DB::table('villages')->insert(['id'=>67777, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Werabuan']);
        DB::table('villages')->insert(['id'=>67778, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Werba']);
        DB::table('villages')->insert(['id'=>67779, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Werpigan']);
        DB::table('villages')->insert(['id'=>67780, 'districts_id'=>5861, 'zipcode'=>'98661', 'name'=>'Wurkendik']);
        //Kecamatan Karas Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5862, 'city_id'=>354, 'name'=>'Karas']);
        DB::table('villages')->insert(['id'=>67781, 'districts_id'=>5862, 'zipcode'=>'98662', 'name'=>'Antalisa']);
        DB::table('villages')->insert(['id'=>67782, 'districts_id'=>5862, 'zipcode'=>'98662', 'name'=>'Faur']);
        DB::table('villages')->insert(['id'=>67783, 'districts_id'=>5862, 'zipcode'=>'98662', 'name'=>'Kiaba']);
        DB::table('villages')->insert(['id'=>67784, 'districts_id'=>5862, 'zipcode'=>'98662', 'name'=>'Malakuli (tanjung Purkadi)']);
        DB::table('villages')->insert(['id'=>67785, 'districts_id'=>5862, 'zipcode'=>'98662', 'name'=>'Mas (maas)']);
        DB::table('villages')->insert(['id'=>67786, 'districts_id'=>5862, 'zipcode'=>'98662', 'name'=>'Tarak']);
        DB::table('villages')->insert(['id'=>67787, 'districts_id'=>5862, 'zipcode'=>'98662', 'name'=>'Tuberwasak']);
        //Kecamatan Bombarai (bomberay) Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5863, 'city_id'=>354, 'name'=>'Bombarai (bomberay)']);
        DB::table('villages')->insert(['id'=>67788, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Bumimoroh Indah']);
        DB::table('villages')->insert(['id'=>67789, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Mbimajaya']);
        DB::table('villages')->insert(['id'=>67790, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Mekarsari']);
        DB::table('villages')->insert(['id'=>67791, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Onimsari']);
        DB::table('villages')->insert(['id'=>67792, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Otoweri']);
        DB::table('villages')->insert(['id'=>67793, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Pinang Agung']);
        DB::table('villages')->insert(['id'=>67794, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Tesha']);
        DB::table('villages')->insert(['id'=>67795, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Tomage']);
        DB::table('villages')->insert(['id'=>67796, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Warisa Mulya']);
        DB::table('villages')->insert(['id'=>67797, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Wawosan']);
        DB::table('villages')->insert(['id'=>67798, 'districts_id'=>5863, 'zipcode'=>'98662', 'name'=>'Wonodadi Mulya']);
        //Kecamatan Fakfak Timur Kab. Fakfak Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5864, 'city_id'=>354, 'name'=>'Fakfak Timur']);
        DB::table('villages')->insert(['id'=>67799, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Kalamanuk']);
        DB::table('villages')->insert(['id'=>67800, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Kiria Bisa (air Bisa)']);
        DB::table('villages')->insert(['id'=>67801, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Kotam']);
        DB::table('villages')->insert(['id'=>67802, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Kwama']);
        DB::table('villages')->insert(['id'=>67803, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Saharei']);
        DB::table('villages')->insert(['id'=>67804, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Sanggram']);
        DB::table('villages')->insert(['id'=>67805, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Tunas Gain']);
        DB::table('villages')->insert(['id'=>67806, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Urat']);
        DB::table('villages')->insert(['id'=>67807, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Wambar (wambrar)']);
        DB::table('villages')->insert(['id'=>67808, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Waserat']);
        DB::table('villages')->insert(['id'=>67809, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Wayati']);
        DB::table('villages')->insert(['id'=>67810, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Wayati Barat (faukia)']);
        DB::table('villages')->insert(['id'=>67811, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Wayati Timur']);
        DB::table('villages')->insert(['id'=>67812, 'districts_id'=>5864, 'zipcode'=>'98662', 'name'=>'Weri']);

        //Kab. Kaimana Provinsi Papua Barat
        DB::table('cities')->insert(['id'=>355, 'province_id'=>25, 'type'=>'regencies', 'name'=>'Kaimana']);
        //Kecamatan Teluk Arguni Atas Kab. Kaimana Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5865, 'city_id'=>355, 'name'=>'Teluk Arguni Atas']);
        DB::table('villages')->insert(['id'=>67813, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Afuafu']);
        DB::table('villages')->insert(['id'=>67814, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Bayeda']);
        DB::table('villages')->insert(['id'=>67815, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Bofuwer']);
        DB::table('villages')->insert(['id'=>67816, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Borogerba']);
        DB::table('villages')->insert(['id'=>67817, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Erigara']);
        DB::table('villages')->insert(['id'=>67818, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Feternu (fetermu)']);
        DB::table('villages')->insert(['id'=>67819, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Fudima']);
        DB::table('villages')->insert(['id'=>67820, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Furnusu (fumusu)']);
        DB::table('villages')->insert(['id'=>67821, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Gusi']);
        DB::table('villages')->insert(['id'=>67822, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Kensi (kasira)']);
        DB::table('villages')->insert(['id'=>67823, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Kokoroba']);
        DB::table('villages')->insert(['id'=>67824, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Maskur']);
        DB::table('villages')->insert(['id'=>67825, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Moyana']);
        DB::table('villages')->insert(['id'=>67826, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Pigo']);
        DB::table('villages')->insert(['id'=>67827, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Sawatewera (sawatawera)']);
        DB::table('villages')->insert(['id'=>67828, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Sawi (sawia)']);
        DB::table('villages')->insert(['id'=>67829, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Tiwara']);
        DB::table('villages')->insert(['id'=>67830, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Tuguwara']);
        DB::table('villages')->insert(['id'=>67831, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Turgani (tugarni)']);
        DB::table('villages')->insert(['id'=>67832, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Wainaga']);
        DB::table('villages')->insert(['id'=>67833, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Wanggita']);
        DB::table('villages')->insert(['id'=>67834, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Warua']);
        DB::table('villages')->insert(['id'=>67835, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Warwasi']);
        DB::table('villages')->insert(['id'=>67836, 'districts_id'=>5865, 'zipcode'=>'98653', 'name'=>'Weswasa']);
        //Kecamatan Teluk Arguni Bawah (yerusi) Kab. Kaimana Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5866, 'city_id'=>355, 'name'=>'Teluk Arguni Bawah (yerusi)']);
        DB::table('villages')->insert(['id'=>67837, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Egerwara']);
        DB::table('villages')->insert(['id'=>67838, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Inari']);
        DB::table('villages')->insert(['id'=>67839, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Jawera']);
        DB::table('villages')->insert(['id'=>67840, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Kufuriyai']);
        DB::table('villages')->insert(['id'=>67841, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Manggera']);
        DB::table('villages')->insert(['id'=>67842, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Nagura']);
        DB::table('villages')->insert(['id'=>67843, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Ruwara']);
        DB::table('villages')->insert(['id'=>67844, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Seraran']);
        DB::table('villages')->insert(['id'=>67845, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Sumun']);
        DB::table('villages')->insert(['id'=>67846, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Tanusan']);
        DB::table('villages')->insert(['id'=>67847, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Ukiara']);
        DB::table('villages')->insert(['id'=>67848, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Urisa']);
        DB::table('villages')->insert(['id'=>67849, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Wanoma']);
        DB::table('villages')->insert(['id'=>67850, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Waromi']);
        DB::table('villages')->insert(['id'=>67851, 'districts_id'=>5866, 'zipcode'=>'98653', 'name'=>'Wermenu']);
        //Kecamatan Kambraw (kamberau) Kab. Kaimana Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5867, 'city_id'=>355, 'name'=>'Kambraw (kamberau)']);
        DB::table('villages')->insert(['id'=>67852, 'districts_id'=>5867, 'zipcode'=>'98654', 'name'=>'Bahumia']);
        DB::table('villages')->insert(['id'=>67853, 'districts_id'=>5867, 'zipcode'=>'98654', 'name'=>'Kooy']);
        DB::table('villages')->insert(['id'=>67854, 'districts_id'=>5867, 'zipcode'=>'98654', 'name'=>'Rauna']);
        DB::table('villages')->insert(['id'=>67855, 'districts_id'=>5867, 'zipcode'=>'98654', 'name'=>'Sermuku (ubia Sermuku)']);
        DB::table('villages')->insert(['id'=>67856, 'districts_id'=>5867, 'zipcode'=>'98654', 'name'=>'Waho']);
        DB::table('villages')->insert(['id'=>67857, 'districts_id'=>5867, 'zipcode'=>'98654', 'name'=>'Wamesa']);
        DB::table('villages')->insert(['id'=>67858, 'districts_id'=>5867, 'zipcode'=>'98654', 'name'=>'Werafuta']);
        //Kecamatan Kaimana Kab. Kaimana Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5868, 'city_id'=>355, 'name'=>'Kaimana']);
        DB::table('villages')->insert(['id'=>67859, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Coa']);
        DB::table('villages')->insert(['id'=>67860, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Foroma Jaya']);
        DB::table('villages')->insert(['id'=>67861, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Jarati']);
        DB::table('villages')->insert(['id'=>67862, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Kaimana Kota']);
        DB::table('villages')->insert(['id'=>67863, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Kamaka']);
        DB::table('villages')->insert(['id'=>67864, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Krooy']);
        DB::table('villages')->insert(['id'=>67865, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Lobo']);
        DB::table('villages')->insert(['id'=>67866, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Lumira']);
        DB::table('villages')->insert(['id'=>67867, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Mai Mai']);
        DB::table('villages')->insert(['id'=>67868, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Marsi']);
        DB::table('villages')->insert(['id'=>67869, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Murano']);
        DB::table('villages')->insert(['id'=>67870, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Namatota']);
        DB::table('villages')->insert(['id'=>67871, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Oray']);
        DB::table('villages')->insert(['id'=>67872, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Sara']);
        DB::table('villages')->insert(['id'=>67873, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Saria']);
        DB::table('villages')->insert(['id'=>67874, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Sisir']);
        DB::table('villages')->insert(['id'=>67875, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Tanggaromi']);
        DB::table('villages')->insert(['id'=>67876, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Trikora']);
        DB::table('villages')->insert(['id'=>67877, 'districts_id'=>5868, 'zipcode'=>'98654', 'name'=>'Werua']);
        //Kecamatan Teluk Etna Kab. Kaimana Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5869, 'city_id'=>355, 'name'=>'Teluk Etna']);
        DB::table('villages')->insert(['id'=>67878, 'districts_id'=>5869, 'zipcode'=>'98655', 'name'=>'Bamana']);
        DB::table('villages')->insert(['id'=>67879, 'districts_id'=>5869, 'zipcode'=>'98655', 'name'=>'Boiya']);
        DB::table('villages')->insert(['id'=>67880, 'districts_id'=>5869, 'zipcode'=>'98655', 'name'=>'Nariki']);
        DB::table('villages')->insert(['id'=>67881, 'districts_id'=>5869, 'zipcode'=>'98655', 'name'=>'Rurumo']);
        DB::table('villages')->insert(['id'=>67882, 'districts_id'=>5869, 'zipcode'=>'98655', 'name'=>'Siawatan']);
        //Kecamatan Yamor Kab. Kaimana Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5870, 'city_id'=>355, 'name'=>'Yamor']);
        DB::table('villages')->insert(['id'=>67883, 'districts_id'=>5870, 'zipcode'=>'98655', 'name'=>'Hairapara']);
        DB::table('villages')->insert(['id'=>67884, 'districts_id'=>5870, 'zipcode'=>'98655', 'name'=>'Omba Pamuku']);
        DB::table('villages')->insert(['id'=>67885, 'districts_id'=>5870, 'zipcode'=>'98655', 'name'=>'Ure (mury/uray)']);
        DB::table('villages')->insert(['id'=>67886, 'districts_id'=>5870, 'zipcode'=>'98655', 'name'=>'Urubika']);
        DB::table('villages')->insert(['id'=>67887, 'districts_id'=>5870, 'zipcode'=>'98655', 'name'=>'Wagoha (wagioha)']);
        DB::table('villages')->insert(['id'=>67888, 'districts_id'=>5870, 'zipcode'=>'98655', 'name'=>'Wosokuno']);
        //Kecamatan Buruway Kab. Kaimana Provinsi Papua Barat
        DB::table('districts')->insert(['id'=>5871, 'city_id'=>355, 'name'=>'Buruway']);
        DB::table('villages')->insert(['id'=>67889, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Adijaya']);
        DB::table('villages')->insert(['id'=>67890, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Edor']);
        DB::table('villages')->insert(['id'=>67891, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Esania']);
        DB::table('villages')->insert(['id'=>67892, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Gaka']);
        DB::table('villages')->insert(['id'=>67893, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Guriasa']);
        DB::table('villages')->insert(['id'=>67894, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Hia']);
        DB::table('villages')->insert(['id'=>67895, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Kambala']);
        DB::table('villages')->insert(['id'=>67896, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Nusaulan Jaya']);
        DB::table('villages')->insert(['id'=>67897, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Tairi']);
        DB::table('villages')->insert(['id'=>67898, 'districts_id'=>5871, 'zipcode'=>'98656', 'name'=>'Yarona']);
    }
}
