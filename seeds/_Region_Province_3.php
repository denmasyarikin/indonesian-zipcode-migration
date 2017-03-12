<?php

use Illuminate\Database\Seeder;

class _Region_Province_3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['id'=>1262, 'code'=>'3', 'type'=>'province', 'name'=>'Province 3']);

        //Bangka Belitung
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>2, 'regionable_type'=>'province']); //Bangka Belitung
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>10, 'regionable_type'=>'city']); //Pangkal Pinang city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>11, 'regionable_type'=>'city']); //Bangka regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>12, 'regionable_type'=>'city']); //Bangka Barat regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>13, 'regionable_type'=>'city']); //Belitung regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>14, 'regionable_type'=>'city']); //Belitung Timur regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>15, 'regionable_type'=>'city']); //Bangka Tengah regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>16, 'regionable_type'=>'city']); //Bangka Selatan regencies

        DB::table('regions')->insert(['id'=>1263, 'parent'=>1262, 'code'=>'331', 'type'=>'city', 'name'=>'City 331, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1263, 'regionable_id'=>10, 'regionable_type'=>'city']); //Pangkal Pinang city
        DB::table('regionables')->insert(['region_id'=>1263, 'regionable_id'=>11, 'regionable_type'=>'city']); //Bangka regencies
            DB::table('regions')->insert(['id'=>1264, 'parent'=>1263, 'code'=>'3317', 'type'=>'districts', 'name'=>'Districts 3317, City 331, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1264, 'regionable_id'=>65, 'regionable_type'=>'districts']); //Merawang
            DB::table('regionables')->insert(['region_id'=>1264, 'regionable_id'=>66, 'regionable_type'=>'districts']); //Mendo Barat
            DB::table('regionables')->insert(['region_id'=>1264, 'regionable_id'=>67, 'regionable_type'=>'districts']); //Puding Besar
                DB::table('regions')->insert(['id'=>1265, 'parent'=>1264, 'code'=>'33179', 'type'=>'village', 'name'=>'Village 33179, Districts 3317, City 331, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1265, 'regionable_id'=>782, 'regionable_type'=>'village']); //Kayu Besi
                DB::table('regionables')->insert(['region_id'=>1265, 'regionable_id'=>783, 'regionable_type'=>'village']); //Kota Waringin
                DB::table('regionables')->insert(['region_id'=>1265, 'regionable_id'=>784, 'regionable_type'=>'village']); //Labu
                DB::table('regionables')->insert(['region_id'=>1265, 'regionable_id'=>785, 'regionable_type'=>'village']); //Nibung
                DB::table('regionables')->insert(['region_id'=>1265, 'regionable_id'=>786, 'regionable_type'=>'village']); //Pudingbesar
                DB::table('regionables')->insert(['region_id'=>1265, 'regionable_id'=>787, 'regionable_type'=>'village']); //Saing
                DB::table('regionables')->insert(['region_id'=>1265, 'regionable_id'=>788, 'regionable_type'=>'village']); //Tanah Bawah
        DB::table('regions')->insert(['id'=>1266, 'parent'=>1262, 'code'=>'332', 'type'=>'city', 'name'=>'City 332, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1266, 'regionable_id'=>11, 'regionable_type'=>'city']); //Bangka regencies
            DB::table('regions')->insert(['id'=>1267, 'parent'=>1266, 'code'=>'3321', 'type'=>'districts', 'name'=>'Districts 3321, City 332, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1267, 'regionable_id'=>68, 'regionable_type'=>'districts']); //Sungai Liat
                DB::table('regions')->insert(['id'=>1268, 'parent'=>1267, 'code'=>'33211', 'type'=>'village', 'name'=>'Village 33211, Districts 3321, City 332, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1268, 'regionable_id'=>789, 'regionable_type'=>'village']); //Kenanga
                DB::table('regionables')->insert(['region_id'=>1268, 'regionable_id'=>790, 'regionable_type'=>'village']); //Rebo
                DB::table('regionables')->insert(['region_id'=>1268, 'regionable_id'=>791, 'regionable_type'=>'village']); //Sungailiat
                DB::table('regions')->insert(['id'=>1269, 'parent'=>1267, 'code'=>'33212', 'type'=>'village', 'name'=>'Village 33212, Districts 3321, City 332, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1269, 'regionable_id'=>792, 'regionable_type'=>'village']); //Sinar Baru
                DB::table('regions')->insert(['id'=>1270, 'parent'=>1267, 'code'=>'33213', 'type'=>'village', 'name'=>'Village 33213, Districts 3321, City 332, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1270, 'regionable_id'=>793, 'regionable_type'=>'village']); //Kudai (kuday)
                DB::table('regions')->insert(['id'=>1271, 'parent'=>1267, 'code'=>'33214', 'type'=>'village', 'name'=>'Village 33214, Districts 3321, City 332, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1271, 'regionable_id'=>794, 'regionable_type'=>'village']); //Srimenanti
                DB::table('regions')->insert(['id'=>1272, 'parent'=>1267, 'code'=>'33215', 'type'=>'village', 'name'=>'Village 33215, Districts 3321, City 332, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1272, 'regionable_id'=>795, 'regionable_type'=>'village']); //Parit Padang
            DB::table('regions')->insert(['id'=>1273, 'parent'=>1266, 'code'=>'3325', 'type'=>'districts', 'name'=>'Districts 3325, City 332, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1273, 'regionable_id'=>69, 'regionable_type'=>'districts']); //Pemali
            DB::table('regionables')->insert(['region_id'=>1273, 'regionable_id'=>70, 'regionable_type'=>'districts']); //Bakam
            DB::table('regionables')->insert(['region_id'=>1273, 'regionable_id'=>71, 'regionable_type'=>'districts']); //Belinyu
            DB::table('regionables')->insert(['region_id'=>1273, 'regionable_id'=>72, 'regionable_type'=>'districts']); //Riau Silip
                DB::table('regions')->insert(['id'=>1274, 'parent'=>1273, 'code'=>'33253', 'type'=>'village', 'name'=>'Village 33253, Districts 3325, City 332, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>811, 'regionable_type'=>'village']); //Air Jukung
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>812, 'regionable_type'=>'village']); //Bintet
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>813, 'regionable_type'=>'village']); //Bukit Ketok
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>814, 'regionable_type'=>'village']); //Gunung Muda
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>815, 'regionable_type'=>'village']); //Gunung Pelawan
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>816, 'regionable_type'=>'village']); //Kuto Panji
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>817, 'regionable_type'=>'village']); //Lumut
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>818, 'regionable_type'=>'village']); //Riding Panjang
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>819, 'regionable_type'=>'village']); //Banyu Asin
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>820, 'regionable_type'=>'village']); //Berbura
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>821, 'regionable_type'=>'village']); //Cit
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>822, 'regionable_type'=>'village']); //Deniang
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>823, 'regionable_type'=>'village']); //Mapur
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>824, 'regionable_type'=>'village']); //Pangkal Niur
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>825, 'regionable_type'=>'village']); //Pugul
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>826, 'regionable_type'=>'village']); //Riau
                DB::table('regionables')->insert(['region_id'=>1274, 'regionable_id'=>827, 'regionable_type'=>'village']); //Silip
        DB::table('regions')->insert(['id'=>1275, 'parent'=>1262, 'code'=>'333', 'type'=>'city', 'name'=>'City 333, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1275, 'regionable_id'=>12, 'regionable_type'=>'city']); //Bangka Barat regencies
            DB::table('regions')->insert(['id'=>1276, 'parent'=>1275, 'code'=>'3331', 'type'=>'districts', 'name'=>'Districts 3331, City 333, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1276, 'regionable_id'=>73, 'regionable_type'=>'districts']); //Mentok (muntok)
                DB::table('regions')->insert(['id'=>1277, 'parent'=>1276, 'code'=>'33311', 'type'=>'village', 'name'=>'Village 33311, Districts 3331, City 333, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1277, 'regionable_id'=>828, 'regionable_type'=>'village']); //Tanjung
                DB::table('regions')->insert(['id'=>1278, 'parent'=>1276, 'code'=>'33312', 'type'=>'village', 'name'=>'Village 33312, Districts 3331, City 333, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1278, 'regionable_id'=>829, 'regionable_type'=>'village']); //Sungai Baru
                DB::table('regions')->insert(['id'=>1279, 'parent'=>1276, 'code'=>'33313', 'type'=>'village', 'name'=>'Village 33313, Districts 3331, City 333, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1279, 'regionable_id'=>830, 'regionable_type'=>'village']); //Sungai Daeng
            DB::table('regions')->insert(['id'=>1280, 'parent'=>1275, 'code'=>'3335', 'type'=>'districts', 'name'=>'Districts 3335, City 333, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1280, 'regionable_id'=>73, 'regionable_type'=>'districts']); //Mentok (muntok)
                DB::table('regions')->insert(['id'=>1281, 'parent'=>1280, 'code'=>'33351', 'type'=>'village', 'name'=>'Village 33351, Districts 3335, City 333, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1281, 'regionable_id'=>831, 'regionable_type'=>'village']); //Air Belo
                DB::table('regionables')->insert(['region_id'=>1281, 'regionable_id'=>832, 'regionable_type'=>'village']); //Air Limau
                DB::table('regionables')->insert(['region_id'=>1281, 'regionable_id'=>833, 'regionable_type'=>'village']); //Air Putih
                DB::table('regionables')->insert(['region_id'=>1281, 'regionable_id'=>834, 'regionable_type'=>'village']); //Belolaut
            DB::table('regions')->insert(['id'=>1282, 'parent'=>1275, 'code'=>'3336', 'type'=>'districts', 'name'=>'Districts 3336, City 333, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1282, 'regionable_id'=>74, 'regionable_type'=>'districts']); //Parittiga
            DB::table('regionables')->insert(['region_id'=>1282, 'regionable_id'=>75, 'regionable_type'=>'districts']); //Jebus
            DB::table('regionables')->insert(['region_id'=>1282, 'regionable_id'=>76, 'regionable_type'=>'districts']); //Kelapa
            DB::table('regionables')->insert(['region_id'=>1282, 'regionable_id'=>77, 'regionable_type'=>'districts']); //Tempilang
            DB::table('regionables')->insert(['region_id'=>1282, 'regionable_id'=>78, 'regionable_type'=>'districts']); //Simpang Teritip
                DB::table('regions')->insert(['id'=>1283, 'parent'=>1282, 'code'=>'33366', 'type'=>'village', 'name'=>'Village 33366, Districts 3336, City 333, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>879, 'regionable_type'=>'village']); //Air Menduyung
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>880, 'regionable_type'=>'village']); //Air Nyatoh
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>881, 'regionable_type'=>'village']); //Berang
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>882, 'regionable_type'=>'village']); //Bukit Terak
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>883, 'regionable_type'=>'village']); //Ibul
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>884, 'regionable_type'=>'village']); //Kundi
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>885, 'regionable_type'=>'village']); //Mayang
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>886, 'regionable_type'=>'village']); //Pangek
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>887, 'regionable_type'=>'village']); //Pelangas
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>888, 'regionable_type'=>'village']); //Peradong
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>889, 'regionable_type'=>'village']); //Rambat
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>890, 'regionable_type'=>'village']); //Simpang Gung
                DB::table('regionables')->insert(['region_id'=>1283, 'regionable_id'=>891, 'regionable_type'=>'village']); //Simpang Tiga
        DB::table('regions')->insert(['id'=>1284, 'parent'=>1262, 'code'=>'334', 'type'=>'city', 'name'=>'City 334, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1284, 'regionable_id'=>13, 'regionable_type'=>'city']); //Belitung regencies
            DB::table('regions')->insert(['id'=>1285, 'parent'=>1284, 'code'=>'3341', 'type'=>'districts', 'name'=>'Districts 3341, City 334, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1285, 'regionable_id'=>79, 'regionable_type'=>'districts']); //Tanjung Pandan
            DB::table('regionables')->insert(['region_id'=>1285, 'regionable_id'=>80, 'regionable_type'=>'districts']); //Sijuk
                DB::table('regions')->insert(['id'=>1286, 'parent'=>1285, 'code'=>'33414', 'type'=>'village', 'name'=>'Village 33414, Districts 3341, City 334, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>903, 'regionable_type'=>'village']); //Aik Palempang Jaya
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>904, 'regionable_type'=>'village']); //Paal Satu
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>907, 'regionable_type'=>'village']); //Air Selumar
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>908, 'regionable_type'=>'village']); //Air Seru
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>909, 'regionable_type'=>'village']); //Batu Itam
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>910, 'regionable_type'=>'village']); //Keciput
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>911, 'regionable_type'=>'village']); //Pelepak Pute
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>912, 'regionable_type'=>'village']); //Sijuk
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>913, 'regionable_type'=>'village']); //Sungai Padang
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>914, 'regionable_type'=>'village']); //Tanjong Tinggi
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>915, 'regionable_type'=>'village']); //Tanjung Binga
                DB::table('regionables')->insert(['region_id'=>1286, 'regionable_id'=>916, 'regionable_type'=>'village']); //Terong
            DB::table('regions')->insert(['id'=>1287, 'parent'=>1284, 'code'=>'3345', 'type'=>'districts', 'name'=>'Districts 3345, City 334, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1287, 'regionable_id'=>81, 'regionable_type'=>'districts']); //Badau
            DB::table('regionables')->insert(['region_id'=>1287, 'regionable_id'=>82, 'regionable_type'=>'districts']); //Membalong
                DB::table('regions')->insert(['id'=>1288, 'parent'=>1287, 'code'=>'33452', 'type'=>'village', 'name'=>'Village 33452, Districts 3345, City 334, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>924, 'regionable_type'=>'village']); //Bantan
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>925, 'regionable_type'=>'village']); //Gunung Riting
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>926, 'regionable_type'=>'village']); //Kembiri
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>927, 'regionable_type'=>'village']); //Lassar
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>928, 'regionable_type'=>'village']); //Membalong
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>929, 'regionable_type'=>'village']); //Mentigi
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>930, 'regionable_type'=>'village']); //Padang Kandis
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>931, 'regionable_type'=>'village']); //Perpat
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>932, 'regionable_type'=>'village']); //Pulau Seliu
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>933, 'regionable_type'=>'village']); //Pulau Sumedang
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>934, 'regionable_type'=>'village']); //Simpang Rusa
                DB::table('regionables')->insert(['region_id'=>1288, 'regionable_id'=>935, 'regionable_type'=>'village']); //Tanjung Rusa
            DB::table('regions')->insert(['id'=>1289, 'parent'=>1284, 'code'=>'3348', 'type'=>'districts', 'name'=>'Districts 3348, City 334, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1289, 'regionable_id'=>83, 'regionable_type'=>'districts']); //Selat Nasik
                DB::table('regions')->insert(['id'=>1290, 'parent'=>1289, 'code'=>'33481', 'type'=>'village', 'name'=>'Village 33481, Districts 3348, City 334, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1290, 'regionable_id'=>936, 'regionable_type'=>'village']); //Petaling
                DB::table('regionables')->insert(['region_id'=>1290, 'regionable_id'=>937, 'regionable_type'=>'village']); //Pulau Gresik
                DB::table('regionables')->insert(['region_id'=>1290, 'regionable_id'=>938, 'regionable_type'=>'village']); //Selat Nasik
                DB::table('regionables')->insert(['region_id'=>1290, 'regionable_id'=>939, 'regionable_type'=>'village']); //Suak Gual
        DB::table('regions')->insert(['id'=>1291, 'parent'=>1262, 'code'=>'335', 'type'=>'city', 'name'=>'City 335, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1291, 'regionable_id'=>14, 'regionable_type'=>'city']); //Belitung Timur regencies
            DB::table('regions')->insert(['id'=>1292, 'parent'=>1291, 'code'=>'3351', 'type'=>'districts', 'name'=>'Districts 3351, City 335, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1292, 'regionable_id'=>84, 'regionable_type'=>'districts']); //Manggar
            DB::table('regionables')->insert(['region_id'=>1292, 'regionable_id'=>85, 'regionable_type'=>'districts']); //Damar
                DB::table('regions')->insert(['id'=>1293, 'parent'=>1292, 'code'=>'33513', 'type'=>'village', 'name'=>'Village 33513, Districts 3351, City 335, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1293, 'regionable_id'=>949, 'regionable_type'=>'village']); //Sukamandi
                DB::table('regions')->insert(['id'=>1294, 'parent'=>1292, 'code'=>'33514', 'type'=>'village', 'name'=>'Village 33514, Districts 3351, City 335, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1294, 'regionable_id'=>950, 'regionable_type'=>'village']); //Mengkubang
                DB::table('regions')->insert(['id'=>1295, 'parent'=>1292, 'code'=>'33515', 'type'=>'village', 'name'=>'Village 33515, Districts 3351, City 335, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1295, 'regionable_id'=>951, 'regionable_type'=>'village']); //Mempaya
            DB::table('regions')->insert(['id'=>1296, 'parent'=>1291, 'code'=>'3356', 'type'=>'districts', 'name'=>'Districts 3356, City 335, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1296, 'regionable_id'=>86, 'regionable_type'=>'districts']); //Dendang
            DB::table('regionables')->insert(['region_id'=>1296, 'regionable_id'=>87, 'regionable_type'=>'districts']); //Simpang Pesak
            DB::table('regionables')->insert(['region_id'=>1296, 'regionable_id'=>88, 'regionable_type'=>'districts']); //Simpang Renggiang
            DB::table('regionables')->insert(['region_id'=>1296, 'regionable_id'=>89, 'regionable_type'=>'districts']); //Gantung
                DB::table('regions')->insert(['id'=>1297, 'parent'=>1296, 'code'=>'33562', 'type'=>'village', 'name'=>'Village 33562, Districts 3356, City 335, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>962, 'regionable_type'=>'village']); //Aik Madu
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>963, 'regionable_type'=>'village']); //Lintang
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>964, 'regionable_type'=>'village']); //Renggiang
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>965, 'regionable_type'=>'village']); //Simpang Tiga
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>966, 'regionable_type'=>'village']); //Batu Penyu
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>967, 'regionable_type'=>'village']); //Gantung
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>968, 'regionable_type'=>'village']); //Jangkar Asam
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>969, 'regionable_type'=>'village']); //Lenggang
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>970, 'regionable_type'=>'village']); //Lilangan
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>971, 'regionable_type'=>'village']); //Limbongan
                DB::table('regionables')->insert(['region_id'=>1297, 'regionable_id'=>972, 'regionable_type'=>'village']); //Selingsing
            DB::table('regions')->insert(['id'=>1298, 'parent'=>1291, 'code'=>'3357', 'type'=>'districts', 'name'=>'Districts 3357, City 335, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1298, 'regionable_id'=>85, 'regionable_type'=>'districts']); //Damar
            DB::table('regionables')->insert(['region_id'=>1298, 'regionable_id'=>90, 'regionable_type'=>'districts']); //Kelapa Kampit
                DB::table('regions')->insert(['id'=>1299, 'parent'=>1298, 'code'=>'33571', 'type'=>'village', 'name'=>'Village 33571, Districts 3357, City 335, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1299, 'regionable_id'=>952, 'regionable_type'=>'village']); //Air Kelik
                DB::table('regionables')->insert(['region_id'=>1299, 'regionable_id'=>953, 'regionable_type'=>'village']); //Burung Mandi
                DB::table('regionables')->insert(['region_id'=>1299, 'regionable_id'=>973, 'regionable_type'=>'village']); //Buding
                DB::table('regionables')->insert(['region_id'=>1299, 'regionable_id'=>974, 'regionable_type'=>'village']); //Cendil
                DB::table('regionables')->insert(['region_id'=>1299, 'regionable_id'=>975, 'regionable_type'=>'village']); //Mayang
                DB::table('regionables')->insert(['region_id'=>1299, 'regionable_id'=>976, 'regionable_type'=>'village']); //Mentawak
                DB::table('regionables')->insert(['region_id'=>1299, 'regionable_id'=>977, 'regionable_type'=>'village']); //Pembaharuan
                DB::table('regionables')->insert(['region_id'=>1299, 'regionable_id'=>978, 'regionable_type'=>'village']); //Senyubuk
        DB::table('regions')->insert(['id'=>1300, 'parent'=>1262, 'code'=>'336', 'type'=>'city', 'name'=>'City 336, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1300, 'regionable_id'=>15, 'regionable_type'=>'city']); //Bangka Tengah regencies
            DB::table('regions')->insert(['id'=>1301, 'parent'=>1300, 'code'=>'3367', 'type'=>'districts', 'name'=>'Districts 3367, City 336, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1301, 'regionable_id'=>91, 'regionable_type'=>'districts']); //Simpang Katis
            DB::table('regionables')->insert(['region_id'=>1301, 'regionable_id'=>92, 'regionable_type'=>'districts']); //Sungai Selan
                DB::table('regions')->insert(['id'=>1302, 'parent'=>1301, 'code'=>'33675', 'type'=>'village', 'name'=>'Village 33675, Districts 3367, City 336, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>989, 'regionable_type'=>'village']); //Kemingking
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>990, 'regionable_type'=>'village']); //Kerakas
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>991, 'regionable_type'=>'village']); //Kerantai
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>992, 'regionable_type'=>'village']); //Keretak
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>993, 'regionable_type'=>'village']); //Keretak Atas
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>994, 'regionable_type'=>'village']); //Lampur
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>995, 'regionable_type'=>'village']); //Melabun
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>996, 'regionable_type'=>'village']); //Munggu
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>997, 'regionable_type'=>'village']); //Ramadhon (romadhoni)
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>998, 'regionable_type'=>'village']); //Sarangmandi
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>999, 'regionable_type'=>'village']); //Sungai Selan
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>1000, 'regionable_type'=>'village']); //Sungai Selan Atas
                DB::table('regionables')->insert(['region_id'=>1302, 'regionable_id'=>1001, 'regionable_type'=>'village']); //Tanjung Pura
            DB::table('regions')->insert(['id'=>1303, 'parent'=>1300, 'code'=>'3368', 'type'=>'districts', 'name'=>'Districts 3368, City 336, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1303, 'regionable_id'=>93, 'regionable_type'=>'districts']); //Koba
            DB::table('regionables')->insert(['region_id'=>1303, 'regionable_id'=>94, 'regionable_type'=>'districts']); //Namang
            DB::table('regionables')->insert(['region_id'=>1303, 'regionable_id'=>95, 'regionable_type'=>'districts']); //Lubuk Besar
            DB::table('regionables')->insert(['region_id'=>1303, 'regionable_id'=>96, 'regionable_type'=>'districts']); //Pangkalan Baru
                DB::table('regions')->insert(['id'=>1304, 'parent'=>1303, 'code'=>'33684', 'type'=>'village', 'name'=>'Village 33684, Districts 3368, City 336, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1015, 'regionable_type'=>'village']); //Belilik
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1016, 'regionable_type'=>'village']); //Cambai
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1017, 'regionable_type'=>'village']); //Cambai Selatan
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1018, 'regionable_type'=>'village']); //Jelutung
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1019, 'regionable_type'=>'village']); //Kayu Besi
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1020, 'regionable_type'=>'village']); //Namang
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1030, 'regionable_type'=>'village']); //Air Mesu Timur
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1031, 'regionable_type'=>'village']); //Airmesu
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1032, 'regionable_type'=>'village']); //Batu Belubang
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1033, 'regionable_type'=>'village']); //Beluluk
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1034, 'regionable_type'=>'village']); //Benteng
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1035, 'regionable_type'=>'village']); //Dul
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1036, 'regionable_type'=>'village']); //Jeruk
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1037, 'regionable_type'=>'village']); //Kebintik
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1038, 'regionable_type'=>'village']); //Mangkol
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1039, 'regionable_type'=>'village']); //Padang Baru
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1040, 'regionable_type'=>'village']); //Pelindang (selindung)
                DB::table('regionables')->insert(['region_id'=>1304, 'regionable_id'=>1041, 'regionable_type'=>'village']); //Tanjung Gunung
        DB::table('regions')->insert(['id'=>1305, 'parent'=>1262, 'code'=>'337', 'type'=>'city', 'name'=>'City 337, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1305, 'regionable_id'=>16, 'regionable_type'=>'city']); //Bangka Selatan regencies
            DB::table('regions')->insert(['id'=>1306, 'parent'=>1305, 'code'=>'3377', 'type'=>'districts', 'name'=>'Districts 3377, City 337, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1306, 'regionable_id'=>97, 'regionable_type'=>'districts']); //Simpang Rimba
            DB::table('regionables')->insert(['region_id'=>1306, 'regionable_id'=>98, 'regionable_type'=>'districts']); //Pulau Besar
            DB::table('regionables')->insert(['region_id'=>1306, 'regionable_id'=>99, 'regionable_type'=>'districts']); //Payung
                DB::table('regions')->insert(['id'=>1307, 'parent'=>1306, 'code'=>'33778', 'type'=>'village', 'name'=>'Village 33778, Districts 3377, City 337, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1049, 'regionable_type'=>'village']); //Batu Betumpang
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1050, 'regionable_type'=>'village']); //Fajar Indah (trans 1)
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1051, 'regionable_type'=>'village']); //Panca Tunggal (trans 3)
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1052, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1053, 'regionable_type'=>'village']); //Sumber Jaya Permai (trans 4)
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1054, 'regionable_type'=>'village']); //Bedengung
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1055, 'regionable_type'=>'village']); //Irat
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1056, 'regionable_type'=>'village']); //Malik
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1057, 'regionable_type'=>'village']); //Nadung
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1058, 'regionable_type'=>'village']); //Paku
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1059, 'regionable_type'=>'village']); //Pangkalbuluh
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1060, 'regionable_type'=>'village']); //Payung
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1061, 'regionable_type'=>'village']); //Ranggung
                DB::table('regionables')->insert(['region_id'=>1307, 'regionable_id'=>1062, 'regionable_type'=>'village']); //Sengir
            DB::table('regions')->insert(['id'=>1308, 'parent'=>1305, 'code'=>'3378', 'type'=>'districts', 'name'=>'Districts 3378, City 337, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1308, 'regionable_id'=>100, 'regionable_type'=>'districts']); //Air Gegas
            DB::table('regionables')->insert(['region_id'=>1308, 'regionable_id'=>101, 'regionable_type'=>'districts']); //Toboali
            DB::table('regionables')->insert(['region_id'=>1308, 'regionable_id'=>102, 'regionable_type'=>'districts']); //Tukak Sadai
                DB::table('regions')->insert(['id'=>1309, 'parent'=>1308, 'code'=>'33783', 'type'=>'village', 'name'=>'Village 33783, Districts 3378, City 337, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1073, 'regionable_type'=>'village']); //Bikang
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1074, 'regionable_type'=>'village']); //Gadung
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1075, 'regionable_type'=>'village']); //Jeriji
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1076, 'regionable_type'=>'village']); //Kaposang/keposang
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1077, 'regionable_type'=>'village']); //Kepoh
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1078, 'regionable_type'=>'village']); //Rias
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1079, 'regionable_type'=>'village']); //Rindik
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1080, 'regionable_type'=>'village']); //Serdang
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1081, 'regionable_type'=>'village']); //Tanjung Ketapang
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1082, 'regionable_type'=>'village']); //Teladan
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1083, 'regionable_type'=>'village']); //Toboali
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1084, 'regionable_type'=>'village']); //Bukit Terap
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1085, 'regionable_type'=>'village']); //Pasir Putih
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1086, 'regionable_type'=>'village']); //Sadai
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1087, 'regionable_type'=>'village']); //Tiram
                DB::table('regionables')->insert(['region_id'=>1309, 'regionable_id'=>1088, 'regionable_type'=>'village']); //Tukak
            DB::table('regions')->insert(['id'=>1310, 'parent'=>1305, 'code'=>'3379', 'type'=>'districts', 'name'=>'Districts 3379, City 337, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1310, 'regionable_id'=>103, 'regionable_type'=>'districts']); //Kepulauan Pongok
            DB::table('regionables')->insert(['region_id'=>1310, 'regionable_id'=>104, 'regionable_type'=>'districts']); //Lepar Pongok
                DB::table('regions')->insert(['id'=>1311, 'parent'=>1310, 'code'=>'33791', 'type'=>'village', 'name'=>'Village 33791, Districts 3379, City 337, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1311, 'regionable_id'=>1089, 'regionable_type'=>'village']); //Celagen
                DB::table('regionables')->insert(['region_id'=>1311, 'regionable_id'=>1090, 'regionable_type'=>'village']); //Pongok
                DB::table('regionables')->insert(['region_id'=>1311, 'regionable_id'=>1091, 'regionable_type'=>'village']); //Kumbung
                DB::table('regionables')->insert(['region_id'=>1311, 'regionable_id'=>1092, 'regionable_type'=>'village']); //Penutuk
                DB::table('regionables')->insert(['region_id'=>1311, 'regionable_id'=>1093, 'regionable_type'=>'village']); //Tanjung Labu
                DB::table('regionables')->insert(['region_id'=>1311, 'regionable_id'=>1094, 'regionable_type'=>'village']); //Tanjung Sangkar

        //Bengkulu
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>4, 'regionable_type'=>'province']); //Bengkulu
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>25, 'regionable_type'=>'city']); //Bengkulu city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>26, 'regionable_type'=>'city']); //Bengkulu Utara regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>27, 'regionable_type'=>'city']); //Bengkulu Tengah regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>28, 'regionable_type'=>'city']); //Bengkulu Selatan regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>29, 'regionable_type'=>'city']); //Muko Muko regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>30, 'regionable_type'=>'city']); //Seluma regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>31, 'regionable_type'=>'city']); //Kaur regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>32, 'regionable_type'=>'city']); //Rejang Lebong regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>33, 'regionable_type'=>'city']); //Lebong regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>34, 'regionable_type'=>'city']); //Kepahiang regencies

        DB::table('regions')->insert(['id'=>1312, 'parent'=>1262, 'code'=>'381', 'type'=>'city', 'name'=>'City 381, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1312, 'regionable_id'=>25, 'regionable_type'=>'city']); //Bengkulu city
            DB::table('regions')->insert(['id'=>1313, 'parent'=>1312, 'code'=>'3811', 'type'=>'districts', 'name'=>'Districts 3811, City 381, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1313, 'regionable_id'=>337, 'regionable_type'=>'districts']); //Teluk Segara
            DB::table('regionables')->insert(['region_id'=>1313, 'regionable_id'=>338, 'regionable_type'=>'districts']); //Sungai Serut
                DB::table('regions')->insert(['id'=>1314, 'parent'=>1313, 'code'=>'38119', 'type'=>'village', 'name'=>'Village 38119, Districts 3811, City 381, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3426, 'regionable_type'=>'village']); //Jitra (pasar Jitra)
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3427, 'regionable_type'=>'village']); //Kampung Bali
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3428, 'regionable_type'=>'village']); //Malabero/malabro
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3429, 'regionable_type'=>'village']); //Kampung Kelawi/klawi
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3430, 'regionable_type'=>'village']); //Pasar Bengkulu
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3431, 'regionable_type'=>'village']); //Semarang
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3432, 'regionable_type'=>'village']); //Suka Merindu
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3433, 'regionable_type'=>'village']); //Surabaya
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3434, 'regionable_type'=>'village']); //Tanjung Agung
                DB::table('regionables')->insert(['region_id'=>1314, 'regionable_id'=>3435, 'regionable_type'=>'village']); //Tanjung Jaya
            DB::table('regions')->insert(['id'=>1315, 'parent'=>1312, 'code'=>'3812', 'type'=>'districts', 'name'=>'Districts 3812, City 381, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1315, 'regionable_id'=>339, 'regionable_type'=>'districts']); //Muara Bangka Hulu
                DB::table('regions')->insert(['id'=>1316, 'parent'=>1315, 'code'=>'38121', 'type'=>'village', 'name'=>'Village 38121, Districts 3812, City 381, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1316, 'regionable_id'=>3436, 'regionable_type'=>'village']); //Bentiring Permai
                DB::table('regionables')->insert(['region_id'=>1316, 'regionable_id'=>3437, 'regionable_type'=>'village']); //Beringin Raya
                DB::table('regionables')->insert(['region_id'=>1316, 'regionable_id'=>3438, 'regionable_type'=>'village']); //Rawa Makmur
                DB::table('regionables')->insert(['region_id'=>1316, 'regionable_id'=>3439, 'regionable_type'=>'village']); //Rawa Makmur Permai
                DB::table('regions')->insert(['id'=>1317, 'parent'=>1315, 'code'=>'38122', 'type'=>'village', 'name'=>'Village 38122, Districts 3812, City 381, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1317, 'regionable_id'=>3440, 'regionable_type'=>'village']); //Kandang Limun
                DB::table('regions')->insert(['id'=>1318, 'parent'=>1315, 'code'=>'38125', 'type'=>'village', 'name'=>'Village 38125, Districts 3812, City 381, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1318, 'regionable_id'=>3441, 'regionable_type'=>'village']); //Pematang Gubernur
                DB::table('regions')->insert(['id'=>1319, 'parent'=>1315, 'code'=>'38126', 'type'=>'village', 'name'=>'Village 38126, Districts 3812, City 381, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1319, 'regionable_id'=>3442, 'regionable_type'=>'village']); //Bentiring
        DB::table('regions')->insert(['id'=>1320, 'parent'=>1262, 'code'=>'382', 'type'=>'city', 'name'=>'City 382, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1320, 'regionable_id'=>25, 'regionable_type'=>'city']); //Bengkulu city
            DB::table('regions')->insert(['id'=>1321, 'parent'=>1320, 'code'=>'3821', 'type'=>'districts', 'name'=>'Districts 3821, City 382, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1321, 'regionable_id'=>340, 'regionable_type'=>'districts']); //Selebar
            DB::table('regionables')->insert(['region_id'=>1321, 'regionable_id'=>341, 'regionable_type'=>'districts']); //Kampung Melayu
                DB::table('regions')->insert(['id'=>1322, 'parent'=>1321, 'code'=>'38215', 'type'=>'village', 'name'=>'Village 38215, Districts 3821, City 382, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1322, 'regionable_id'=>3449, 'regionable_type'=>'village']); //Kandang Mas
                DB::table('regionables')->insert(['region_id'=>1322, 'regionable_id'=>3450, 'regionable_type'=>'village']); //Muara Dua
                DB::table('regionables')->insert(['region_id'=>1322, 'regionable_id'=>3451, 'regionable_type'=>'village']); //Padang Serai
                DB::table('regionables')->insert(['region_id'=>1322, 'regionable_id'=>3452, 'regionable_type'=>'village']); //Sumber Jaya
                DB::table('regionables')->insert(['region_id'=>1322, 'regionable_id'=>3453, 'regionable_type'=>'village']); //Teluk Sepang
                DB::table('regions')->insert(['id'=>1323, 'parent'=>1321, 'code'=>'38216', 'type'=>'village', 'name'=>'Village 38216, Districts 3821, City 382, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1323, 'regionable_id'=>3446, 'regionable_type'=>'village']); //Bumi Ayu
                DB::table('regionables')->insert(['region_id'=>1323, 'regionable_id'=>3447, 'regionable_type'=>'village']); //Sukarami
                DB::table('regionables')->insert(['region_id'=>1323, 'regionable_id'=>3448, 'regionable_type'=>'village']); //Sumur Dewa
                DB::table('regionables')->insert(['region_id'=>1323, 'regionable_id'=>3454, 'regionable_type'=>'village']); //Kandang
            DB::table('regions')->insert(['id'=>1324, 'parent'=>1320, 'code'=>'3822', 'type'=>'districts', 'name'=>'Districts 3822, City 382, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1324, 'regionable_id'=>342, 'regionable_type'=>'districts']); //Ratu Samban
            DB::table('regionables')->insert(['region_id'=>1324, 'regionable_id'=>343, 'regionable_type'=>'districts']); //Gading Cempaka
            DB::table('regionables')->insert(['region_id'=>1324, 'regionable_id'=>344, 'regionable_type'=>'districts']); //Singaran Pati
            DB::table('regionables')->insert(['region_id'=>1324, 'regionable_id'=>345, 'regionable_type'=>'districts']); //Ratu Agung
                DB::table('regions')->insert(['id'=>1325, 'parent'=>1324, 'code'=>'38223', 'type'=>'village', 'name'=>'Village 38223, Districts 3822, City 382, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1325, 'regionable_id'=>3461, 'regionable_type'=>'village']); //Anggut Bawah
                DB::table('regionables')->insert(['region_id'=>1325, 'regionable_id'=>3462, 'regionable_type'=>'village']); //Penurunan
                DB::table('regionables')->insert(['region_id'=>1325, 'regionable_id'=>3475, 'regionable_type'=>'village']); //Kebun Beler
                DB::table('regionables')->insert(['region_id'=>1325, 'regionable_id'=>3476, 'regionable_type'=>'village']); //Kebun Kenanga
                DB::table('regionables')->insert(['region_id'=>1325, 'regionable_id'=>3477, 'regionable_type'=>'village']); //Lempuing
                DB::table('regionables')->insert(['region_id'=>1325, 'regionable_id'=>3478, 'regionable_type'=>'village']); //Sawah Lebar Baru
                DB::table('regions')->insert(['id'=>1326, 'parent'=>1324, 'code'=>'38224', 'type'=>'village', 'name'=>'Village 38224, Districts 3822, City 382, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1326, 'regionable_id'=>3472, 'regionable_type'=>'village']); //Jembatan Kecil
                DB::table('regionables')->insert(['region_id'=>1326, 'regionable_id'=>3479, 'regionable_type'=>'village']); //Nusa Indah
                DB::table('regionables')->insert(['region_id'=>1326, 'regionable_id'=>3480, 'regionable_type'=>'village']); //Tanah Patah
                DB::table('regions')->insert(['id'=>1327, 'parent'=>1324, 'code'=>'38227', 'type'=>'village', 'name'=>'Village 38227, Districts 3822, City 382, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1327, 'regionable_id'=>3463, 'regionable_type'=>'village']); //Padang Jati
                DB::table('regionables')->insert(['region_id'=>1327, 'regionable_id'=>3481, 'regionable_type'=>'village']); //Kebun Tebeng
                DB::table('regions')->insert(['id'=>1328, 'parent'=>1324, 'code'=>'38228', 'type'=>'village', 'name'=>'Village 38228, Districts 3822, City 382, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1328, 'regionable_id'=>3482, 'regionable_type'=>'village']); //Sawah Lebar
        DB::table('regions')->insert(['id'=>1329, 'parent'=>1262, 'code'=>'383', 'type'=>'city', 'name'=>'City 383, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1329, 'regionable_id'=>26, 'regionable_type'=>'city']); //Bengkulu Utara regencies
        DB::table('regionables')->insert(['region_id'=>1329, 'regionable_id'=>27, 'regionable_type'=>'city']); //Bengkulu Tengah regencies
            DB::table('regions')->insert(['id'=>1330, 'parent'=>1329, 'code'=>'3837', 'type'=>'districts', 'name'=>'Districts 3837, City 383, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1330, 'regionable_id'=>350, 'regionable_type'=>'districts']); //Air Napal
            DB::table('regionables')->insert(['region_id'=>1330, 'regionable_id'=>351, 'regionable_type'=>'districts']); //Tanjung Agung Palik
            DB::table('regionables')->insert(['region_id'=>1330, 'regionable_id'=>352, 'regionable_type'=>'districts']); //Hulu Palik
            DB::table('regionables')->insert(['region_id'=>1330, 'regionable_id'=>353, 'regionable_type'=>'districts']); //Kerkap
            DB::table('regionables')->insert(['region_id'=>1330, 'regionable_id'=>363, 'regionable_type'=>'districts']); //Pondok Kelapa
            DB::table('regionables')->insert(['region_id'=>1330, 'regionable_id'=>364, 'regionable_type'=>'districts']); //Pematang Tiga
            DB::table('regionables')->insert(['region_id'=>1330, 'regionable_id'=>365, 'regionable_type'=>'districts']); //Bang Haji
            DB::table('regionables')->insert(['region_id'=>1330, 'regionable_id'=>366, 'regionable_type'=>'districts']); //Pondok Kubang
                DB::table('regions')->insert(['id'=>1331, 'parent'=>1330, 'code'=>'38375', 'type'=>'village', 'name'=>'Village 38375, Districts 3837, City 383, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1331, 'regionable_id'=>3745, 'regionable_type'=>'village']); //Batu Raja
                DB::table('regionables')->insert(['region_id'=>1331, 'regionable_id'=>3746, 'regionable_type'=>'village']); //Dusun Anyar
                DB::table('regionables')->insert(['region_id'=>1331, 'regionable_id'=>3747, 'regionable_type'=>'village']); //Linggar Galing
                DB::table('regionables')->insert(['region_id'=>1331, 'regionable_id'=>3748, 'regionable_type'=>'village']); //Paku Haji
                DB::table('regionables')->insert(['region_id'=>1331, 'regionable_id'=>3749, 'regionable_type'=>'village']); //Pondok Kubang
                DB::table('regionables')->insert(['region_id'=>1331, 'regionable_id'=>3750, 'regionable_type'=>'village']); //Talang Tengah
                DB::table('regionables')->insert(['region_id'=>1331, 'regionable_id'=>3751, 'regionable_type'=>'village']); //Tanjung Terdana
                DB::table('regions')->insert(['id'=>1332, 'parent'=>1330, 'code'=>'38376', 'type'=>'village', 'name'=>'Village 38376, Districts 3837, City 383, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1332, 'regionable_id'=>3752, 'regionable_type'=>'village']); //Dusun Baru I
                DB::table('regionables')->insert(['region_id'=>1332, 'regionable_id'=>3753, 'regionable_type'=>'village']); //Harapan Makmur
                DB::table('regions')->insert(['id'=>1333, 'parent'=>1330, 'code'=>'38377', 'type'=>'village', 'name'=>'Village 38377, Districts 3837, City 383, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1333, 'regionable_id'=>3754, 'regionable_type'=>'village']); //Margo Mulya
                DB::table('regions')->insert(['id'=>1334, 'parent'=>1330, 'code'=>'38378', 'type'=>'village', 'name'=>'Village 38378, Districts 3837, City 383, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1334, 'regionable_id'=>3755, 'regionable_type'=>'village']); //Taba Jambu
                DB::table('regions')->insert(['id'=>1335, 'parent'=>1330, 'code'=>'38379', 'type'=>'village', 'name'=>'Village 38379, Districts 3837, City 383, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1335, 'regionable_id'=>3756, 'regionable_type'=>'village']); //Tanjung Dalam
            DB::table('regions')->insert(['id'=>1336, 'parent'=>1329, 'code'=>'3838', 'type'=>'districts', 'name'=>'Districts 3838, City 383, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1336, 'regionable_id'=>354, 'regionable_type'=>'districts']); //Enggano
            DB::table('regionables')->insert(['region_id'=>1336, 'regionable_id'=>367, 'regionable_type'=>'districts']); //Karang Tinggi
            DB::table('regionables')->insert(['region_id'=>1336, 'regionable_id'=>368, 'regionable_type'=>'districts']); //Pagar Jati
            DB::table('regionables')->insert(['region_id'=>1336, 'regionable_id'=>369, 'regionable_type'=>'districts']); //Merigi Sakti
            DB::table('regionables')->insert(['region_id'=>1336, 'regionable_id'=>370, 'regionable_type'=>'districts']); //Talang Empat
            DB::table('regionables')->insert(['region_id'=>1336, 'regionable_id'=>371, 'regionable_type'=>'districts']); //Merigi Kelindang
            DB::table('regionables')->insert(['region_id'=>1336, 'regionable_id'=>372, 'regionable_type'=>'districts']); //Taba Penanjung
                DB::table('regions')->insert(['id'=>1337, 'parent'=>1336, 'code'=>'38386', 'type'=>'village', 'name'=>'Village 38386, Districts 3838, City 383, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3819, 'regionable_type'=>'village']); //Bajak I
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3820, 'regionable_type'=>'village']); //Jambu
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3821, 'regionable_type'=>'village']); //Kelindang
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3822, 'regionable_type'=>'village']); //Kelindang Atas
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3823, 'regionable_type'=>'village']); //Lubuk Unen
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3824, 'regionable_type'=>'village']); //Lubuk Unen Baru
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3825, 'regionable_type'=>'village']); //Padang Kedeper
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3826, 'regionable_type'=>'village']); //Penembang
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3827, 'regionable_type'=>'village']); //Pungguk Beringin
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3828, 'regionable_type'=>'village']); //Pungguk Ketupat
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3829, 'regionable_type'=>'village']); //Taba Durian Sebakul
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3830, 'regionable_type'=>'village']); //Talang Ambung / Lambung
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3831, 'regionable_type'=>'village']); //Ulak Lebar
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3832, 'regionable_type'=>'village']); //Bajak I
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3833, 'regionable_type'=>'village']); //Datar Lebar
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3834, 'regionable_type'=>'village']); //Karang Tengah
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3835, 'regionable_type'=>'village']); //Kota Niur
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3836, 'regionable_type'=>'village']); //Lubuk Sini
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3837, 'regionable_type'=>'village']); //Penum
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3838, 'regionable_type'=>'village']); //Rindu Hati
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3839, 'regionable_type'=>'village']); //Suka Rami
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3840, 'regionable_type'=>'village']); //Surau
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3841, 'regionable_type'=>'village']); //Taba Baru
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3842, 'regionable_type'=>'village']); //Taba Penanjung
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3843, 'regionable_type'=>'village']); //Taba Teret
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3844, 'regionable_type'=>'village']); //Tanjung Heran
                DB::table('regionables')->insert(['region_id'=>1337, 'regionable_id'=>3845, 'regionable_type'=>'village']); //Tanjung Raman
        DB::table('regions')->insert(['id'=>1338, 'parent'=>1262, 'code'=>'385', 'type'=>'city', 'name'=>'City 385, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1338, 'regionable_id'=>26, 'regionable_type'=>'city']); //Bengkulu Utara regencies
        DB::table('regionables')->insert(['region_id'=>1338, 'regionable_id'=>28, 'regionable_type'=>'city']); //Bengkulu Selatan regencies
            DB::table('regions')->insert(['id'=>1339, 'parent'=>1338, 'code'=>'3851', 'type'=>'districts', 'name'=>'Districts 3851, City 385, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1339, 'regionable_id'=>373, 'regionable_type'=>'districts']); //Kota Manna
            DB::table('regionables')->insert(['region_id'=>1339, 'regionable_id'=>374, 'regionable_type'=>'districts']); //Bunga Mas
            DB::table('regionables')->insert(['region_id'=>1339, 'regionable_id'=>375, 'regionable_type'=>'districts']); //Manna
            DB::table('regionables')->insert(['region_id'=>1339, 'regionable_id'=>376, 'regionable_type'=>'districts']); //Pasar Manna
                DB::table('regions')->insert(['id'=>1340, 'parent'=>1339, 'code'=>'38513', 'type'=>'village', 'name'=>'Village 38513, Districts 3851, City 385, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1340, 'regionable_id'=>3853, 'regionable_type'=>'village']); //Gunung Ayu I
                DB::table('regionables')->insert(['region_id'=>1340, 'regionable_id'=>3854, 'regionable_type'=>'village']); //Ibul
                DB::table('regionables')->insert(['region_id'=>1340, 'regionable_id'=>3855, 'regionable_type'=>'village']); //Kota Medan
                DB::table('regionables')->insert(['region_id'=>1340, 'regionable_id'=>3856, 'regionable_type'=>'village']); //Pagar Dewa
                DB::table('regionables')->insert(['region_id'=>1340, 'regionable_id'=>3885, 'regionable_type'=>'village']); //Batu Lambang
                DB::table('regions')->insert(['id'=>1341, 'parent'=>1339, 'code'=>'38514', 'type'=>'village', 'name'=>'Village 38514, Districts 3851, City 385, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1341, 'regionable_id'=>3886, 'regionable_type'=>'village']); //Belakang Gedung
                DB::table('regions')->insert(['id'=>1342, 'parent'=>1339, 'code'=>'38515', 'type'=>'village', 'name'=>'Village 38515, Districts 3851, City 385, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1342, 'regionable_id'=>3887, 'regionable_type'=>'village']); //Pasar Bawah
                DB::table('regions')->insert(['id'=>1343, 'parent'=>1339, 'code'=>'38516', 'type'=>'village', 'name'=>'Village 38516, Districts 3851, City 385, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1343, 'regionable_id'=>3888, 'regionable_type'=>'village']); //Ketapang Besar
                DB::table('regions')->insert(['id'=>1344, 'parent'=>1339, 'code'=>'38517', 'type'=>'village', 'name'=>'Village 38517, Districts 3851, City 385, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1344, 'regionable_id'=>3889, 'regionable_type'=>'village']); //Gunung Mesir
                DB::table('regionables')->insert(['region_id'=>1344, 'regionable_id'=>3890, 'regionable_type'=>'village']); //Padang Sialang
                DB::table('regions')->insert(['id'=>1345, 'parent'=>1339, 'code'=>'38518', 'type'=>'village', 'name'=>'Village 38518, Districts 3851, City 385, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1345, 'regionable_id'=>3891, 'regionable_type'=>'village']); //Batu Kuning
                DB::table('regionables')->insert(['region_id'=>1345, 'regionable_id'=>3892, 'regionable_type'=>'village']); //Pasar Mulia
                DB::table('regionables')->insert(['region_id'=>1345, 'regionable_id'=>3893, 'regionable_type'=>'village']); //Tanjung Mulia
            DB::table('regions')->insert(['id'=>1346, 'parent'=>1338, 'code'=>'3855', 'type'=>'districts', 'name'=>'Districts 3855, City 385, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1346, 'regionable_id'=>377, 'regionable_type'=>'districts']); //Seginim
            DB::table('regionables')->insert(['region_id'=>1346, 'regionable_id'=>378, 'regionable_type'=>'districts']); //Kedurang Ilir
            DB::table('regionables')->insert(['region_id'=>1346, 'regionable_id'=>379, 'regionable_type'=>'districts']); //Kedurang
                DB::table('regions')->insert(['id'=>1347, 'parent'=>1346, 'code'=>'38553', 'type'=>'village', 'name'=>'Village 38553, Districts 3855, City 385, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3916, 'regionable_type'=>'village']); //Air Sulau
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3917, 'regionable_type'=>'village']); //Betungan
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3918, 'regionable_type'=>'village']); //Karang Caya
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3919, 'regionable_type'=>'village']); //Limus
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3920, 'regionable_type'=>'village']); //Lubuk Ladung
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3921, 'regionable_type'=>'village']); //Nanjungan
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3922, 'regionable_type'=>'village']); //Padang Bindu
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3923, 'regionable_type'=>'village']); //Pagar Banyu
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3924, 'regionable_type'=>'village']); //Penindaian
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3925, 'regionable_type'=>'village']); //Suka Jaya
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3926, 'regionable_type'=>'village']); //Suka Raja
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3927, 'regionable_type'=>'village']); //Sukarami I
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3928, 'regionable_type'=>'village']); //Batu Ampar
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3929, 'regionable_type'=>'village']); //Bumi Agung
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3930, 'regionable_type'=>'village']); //Durian Sebatang
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3931, 'regionable_type'=>'village']); //Karang Agung
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3932, 'regionable_type'=>'village']); //Keban Agung I
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3933, 'regionable_type'=>'village']); //Keban Agung Ii
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3934, 'regionable_type'=>'village']); //Keban Agung Iii
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3935, 'regionable_type'=>'village']); //Lawang Agung
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3936, 'regionable_type'=>'village']); //Lubuk Resam
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3937, 'regionable_type'=>'village']); //Muara Tiga
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3938, 'regionable_type'=>'village']); //Muara Tiga Ilir
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3939, 'regionable_type'=>'village']); //Nanti Agung
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3940, 'regionable_type'=>'village']); //Pajar Bulan
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3941, 'regionable_type'=>'village']); //Palak Siring
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3942, 'regionable_type'=>'village']); //Rantau Sialang
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3943, 'regionable_type'=>'village']); //Tanjung Alam
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3944, 'regionable_type'=>'village']); //Tanjung Besar
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3945, 'regionable_type'=>'village']); //Tanjung Nanti (sukananti)
                DB::table('regionables')->insert(['region_id'=>1347, 'regionable_id'=>3946, 'regionable_type'=>'village']); //Tanjung Negara
            DB::table('regions')->insert(['id'=>1348, 'parent'=>1338, 'code'=>'3857', 'type'=>'districts', 'name'=>'Districts 3857, City 385, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1348, 'regionable_id'=>351, 'regionable_type'=>'districts']); //Tanjung Agung Palik
            DB::table('regionables')->insert(['region_id'=>1348, 'regionable_id'=>355, 'regionable_type'=>'districts']); //Air Besi
            DB::table('regionables')->insert(['region_id'=>1348, 'regionable_id'=>380, 'regionable_type'=>'districts']); //Pinoraya
            DB::table('regionables')->insert(['region_id'=>1348, 'regionable_id'=>381, 'regionable_type'=>'districts']); //Ulu Manna
            DB::table('regionables')->insert(['region_id'=>1348, 'regionable_id'=>382, 'regionable_type'=>'districts']); //Pino
            DB::table('regionables')->insert(['region_id'=>1348, 'regionable_id'=>383, 'regionable_type'=>'districts']); //Air Nipis
                DB::table('regions')->insert(['id'=>1349, 'parent'=>1348, 'code'=>'38571', 'type'=>'village', 'name'=>'Village 38571, Districts 3857, City 385, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3947, 'regionable_type'=>'village']); //Air Kemang
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3948, 'regionable_type'=>'village']); //Bandung Ayu
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3949, 'regionable_type'=>'village']); //Cinto Mandi
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3950, 'regionable_type'=>'village']); //Karang Cayo
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3951, 'regionable_type'=>'village']); //Kemang Manis
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3952, 'regionable_type'=>'village']); //Kembang Seri
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3953, 'regionable_type'=>'village']); //Nanjungan
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3954, 'regionable_type'=>'village']); //Napal Melintang
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3955, 'regionable_type'=>'village']); //Padang Beriang
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3956, 'regionable_type'=>'village']); //Padang Serasan
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3957, 'regionable_type'=>'village']); //Pagar Gading
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3958, 'regionable_type'=>'village']); //Pasar Pino
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3959, 'regionable_type'=>'village']); //Selali I
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3960, 'regionable_type'=>'village']); //Serang Bulan
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3961, 'regionable_type'=>'village']); //Suka Bandung
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3962, 'regionable_type'=>'village']); //Talang Padang
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3963, 'regionable_type'=>'village']); //Tanggo Raso
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3964, 'regionable_type'=>'village']); //Tanjung Aur
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3965, 'regionable_type'=>'village']); //Telaga Dalam
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3966, 'regionable_type'=>'village']); //Tungkal I
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3967, 'regionable_type'=>'village']); //Tungkal Ii
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3968, 'regionable_type'=>'village']); //Air Tenam Dalam
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3969, 'regionable_type'=>'village']); //Bandar Agung
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3970, 'regionable_type'=>'village']); //Batu Kuning
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3971, 'regionable_type'=>'village']); //Batu Panco
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3972, 'regionable_type'=>'village']); //Kayu Ajaran
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3973, 'regionable_type'=>'village']); //Keban Jati
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3974, 'regionable_type'=>'village']); //Lubuk Tapi
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3975, 'regionable_type'=>'village']); //Merambung
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3976, 'regionable_type'=>'village']); //Simpang Pino
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3977, 'regionable_type'=>'village']); //Talang Tinggi
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3978, 'regionable_type'=>'village']); //Air Umban
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3979, 'regionable_type'=>'village']); //Anggut
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3980, 'regionable_type'=>'village']); //Batu Bandung
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3981, 'regionable_type'=>'village']); //Beringin Datar
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3982, 'regionable_type'=>'village']); //Ganjuh
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3983, 'regionable_type'=>'village']); //Gedung Agung
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3984, 'regionable_type'=>'village']); //Kota Bumi
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3985, 'regionable_type'=>'village']); //Masat
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3986, 'regionable_type'=>'village']); //Padang Lebar
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3987, 'regionable_type'=>'village']); //Padang Mumpo
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3988, 'regionable_type'=>'village']); //Padang Tambak
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3989, 'regionable_type'=>'village']); //Puding
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3990, 'regionable_type'=>'village']); //Sebilo
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3991, 'regionable_type'=>'village']); //Tanjung Aur I
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3992, 'regionable_type'=>'village']); //Tanjung Eran
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3993, 'regionable_type'=>'village']); //Ulak Lebar
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3994, 'regionable_type'=>'village']); //Keban Jati
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3995, 'regionable_type'=>'village']); //Maras
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3996, 'regionable_type'=>'village']); //Palak Bengkerung
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3997, 'regionable_type'=>'village']); //Penandingan
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3998, 'regionable_type'=>'village']); //Pino Baru
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>3999, 'regionable_type'=>'village']); //Suka Bandung
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>4000, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>4001, 'regionable_type'=>'village']); //Suka Negeri
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>4002, 'regionable_type'=>'village']); //Sukarami
                DB::table('regionables')->insert(['region_id'=>1349, 'regionable_id'=>4003, 'regionable_type'=>'village']); //Tanjung Beringin
        DB::table('regions')->insert(['id'=>1350, 'parent'=>1262, 'code'=>'386', 'type'=>'city', 'name'=>'City 386, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1350, 'regionable_id'=>26, 'regionable_type'=>'city']); //Bengkulu Utara regencies
            DB::table('regions')->insert(['id'=>1351, 'parent'=>1350, 'code'=>'3861', 'type'=>'districts', 'name'=>'Districts 3861, City 386, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1351, 'regionable_id'=>356, 'regionable_type'=>'districts']); //Arma Jaya
            DB::table('regionables')->insert(['region_id'=>1351, 'regionable_id'=>357, 'regionable_type'=>'districts']); //Arga Makmur
                DB::table('regions')->insert(['id'=>1352, 'parent'=>1351, 'code'=>'38611', 'type'=>'village', 'name'=>'Village 38611, Districts 3861, City 386, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3619, 'regionable_type'=>'village']); //Air Merah
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3620, 'regionable_type'=>'village']); //Gardu
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3621, 'regionable_type'=>'village']); //Gunung Besar
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3622, 'regionable_type'=>'village']); //Kalai Duai
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3623, 'regionable_type'=>'village']); //Kali
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3624, 'regionable_type'=>'village']); //Kemumu
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3625, 'regionable_type'=>'village']); //Pagar Banyu
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3626, 'regionable_type'=>'village']); //Pagar Ruyung
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3627, 'regionable_type'=>'village']); //Pematang Sapang
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3628, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3629, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3630, 'regionable_type'=>'village']); //Tebing Kaning
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3631, 'regionable_type'=>'village']); //Gunung Agung
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3632, 'regionable_type'=>'village']); //Gunung Alam
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3633, 'regionable_type'=>'village']); //Gunung Selam / Selan
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3634, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3635, 'regionable_type'=>'village']); //Karang Anyar Ilir
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3636, 'regionable_type'=>'village']); //Kuro Tidur
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3637, 'regionable_type'=>'village']); //Senali
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3638, 'regionable_type'=>'village']); //Sido Urip
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3639, 'regionable_type'=>'village']); //Taba Tembilang
                DB::table('regionables')->insert(['region_id'=>1352, 'regionable_id'=>3640, 'regionable_type'=>'village']); //Talang Denau
                DB::table('regions')->insert(['id'=>1353, 'parent'=>1351, 'code'=>'38612', 'type'=>'village', 'name'=>'Village 38612, Districts 3861, City 386, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1353, 'regionable_id'=>3641, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regions')->insert(['id'=>1354, 'parent'=>1351, 'code'=>'38614', 'type'=>'village', 'name'=>'Village 38614, Districts 3861, City 386, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1354, 'regionable_id'=>3642, 'regionable_type'=>'village']); //Rama Agung
                DB::table('regions')->insert(['id'=>1355, 'parent'=>1351, 'code'=>'38617', 'type'=>'village', 'name'=>'Village 38617, Districts 3861, City 386, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1355, 'regionable_id'=>3643, 'regionable_type'=>'village']); //Datar Ruyung
                DB::table('regionables')->insert(['region_id'=>1355, 'regionable_id'=>3644, 'regionable_type'=>'village']); //Tanjung Raman
                DB::table('regions')->insert(['id'=>1356, 'parent'=>1351, 'code'=>'38618', 'type'=>'village', 'name'=>'Village 38618, Districts 3861, City 386, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1356, 'regionable_id'=>3645, 'regionable_type'=>'village']); //Lubuk Saung/sahung
                DB::table('regions')->insert(['id'=>1357, 'parent'=>1351, 'code'=>'38619', 'type'=>'village', 'name'=>'Village 38619, Districts 3861, City 386, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1357, 'regionable_id'=>3646, 'regionable_type'=>'village']); //Karang Suci
            DB::table('regions')->insert(['id'=>1358, 'parent'=>1350, 'code'=>'3865', 'type'=>'districts', 'name'=>'Districts 3865, City 386, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1358, 'regionable_id'=>358, 'regionable_type'=>'districts']); //Lais
            DB::table('regionables')->insert(['region_id'=>1358, 'regionable_id'=>359, 'regionable_type'=>'districts']); //Air Padang
            DB::table('regionables')->insert(['region_id'=>1358, 'regionable_id'=>360, 'regionable_type'=>'districts']); //Giri Mulia
            DB::table('regionables')->insert(['region_id'=>1358, 'regionable_id'=>361, 'regionable_type'=>'districts']); //Batik Nau
            DB::table('regionables')->insert(['region_id'=>1358, 'regionable_id'=>362, 'regionable_type'=>'districts']); //Padang Jaya
                DB::table('regions')->insert(['id'=>1359, 'parent'=>1358, 'code'=>'38657', 'type'=>'village', 'name'=>'Village 38657, Districts 3865, City 386, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3691, 'regionable_type'=>'village']); //Arga Mulya
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3692, 'regionable_type'=>'village']); //Lubuk Banyau
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3693, 'regionable_type'=>'village']); //Marga Jaya
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3694, 'regionable_type'=>'village']); //Marga Sakti
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3695, 'regionable_type'=>'village']); //Padang Jaya
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3696, 'regionable_type'=>'village']); //Sido Luhur
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3697, 'regionable_type'=>'village']); //Sido Mukti
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3698, 'regionable_type'=>'village']); //Talang Tua/tuo
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3699, 'regionable_type'=>'village']); //Tambak Rejo
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3700, 'regionable_type'=>'village']); //Tanah Hitam
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3701, 'regionable_type'=>'village']); //Tanah Tinggi
                DB::table('regionables')->insert(['region_id'=>1359, 'regionable_id'=>3702, 'regionable_type'=>'village']); //Tanjung Harapan
        DB::table('regions')->insert(['id'=>1360, 'parent'=>1262, 'code'=>'387', 'type'=>'city', 'name'=>'City 387, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1360, 'regionable_id'=>29, 'regionable_type'=>'city']); //Muko Muko regencies
            DB::table('regions')->insert(['id'=>1361, 'parent'=>1360, 'code'=>'3871', 'type'=>'districts', 'name'=>'Districts 3871, City 387, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1361, 'regionable_id'=>384, 'regionable_type'=>'districts']); //Kota Mukomuko (mukomuko Utara)
                DB::table('regions')->insert(['id'=>1362, 'parent'=>1361, 'code'=>'38711', 'type'=>'village', 'name'=>'Village 38711, Districts 3871, City 387, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1362, 'regionable_id'=>4004, 'regionable_type'=>'village']); //Pasar Mukomuko
                DB::table('regions')->insert(['id'=>1363, 'parent'=>1361, 'code'=>'38713', 'type'=>'village', 'name'=>'Village 38713, Districts 3871, City 387, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1363, 'regionable_id'=>4005, 'regionable_type'=>'village']); //Pondok Batu
                DB::table('regions')->insert(['id'=>1364, 'parent'=>1361, 'code'=>'38714', 'type'=>'village', 'name'=>'Village 38714, Districts 3871, City 387, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1364, 'regionable_id'=>4006, 'regionable_type'=>'village']); //Ujung Padang
            DB::table('regions')->insert(['id'=>1365, 'parent'=>1360, 'code'=>'3876', 'type'=>'districts', 'name'=>'Districts 3876, City 387, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>384, 'regionable_type'=>'districts']); //Kota Mukomuko (mukomuko Utara)
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>385, 'regionable_type'=>'districts']); //Ipuh (muko-muko Selatan)
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>386, 'regionable_type'=>'districts']); //Air Rami
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>387, 'regionable_type'=>'districts']); //Malin Deman
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>388, 'regionable_type'=>'districts']); //Air Dikit
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>389, 'regionable_type'=>'districts']); //Xiv Koto
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>390, 'regionable_type'=>'districts']); //Pondok Suguh
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>391, 'regionable_type'=>'districts']); //Teramang Jaya
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>392, 'regionable_type'=>'districts']); //Sungai Rumbai
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>393, 'regionable_type'=>'districts']); //Air Majunto
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>394, 'regionable_type'=>'districts']); //Lubuk Pinang
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>395, 'regionable_type'=>'districts']); //V Koto
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>396, 'regionable_type'=>'districts']); //Teras Terunjam
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>397, 'regionable_type'=>'districts']); //Penarik
            DB::table('regionables')->insert(['region_id'=>1365, 'regionable_id'=>398, 'regionable_type'=>'districts']); //Selagan Raya
                DB::table('regions')->insert(['id'=>1366, 'parent'=>1365, 'code'=>'38768', 'type'=>'village', 'name'=>'Village 38768, Districts 3876, City 387, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4121, 'regionable_type'=>'village']); //Aur Cina
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4122, 'regionable_type'=>'village']); //Karang Jaya
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4123, 'regionable_type'=>'village']); //Lubuk Bangko
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4124, 'regionable_type'=>'village']); //Marga Mukti
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4125, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4126, 'regionable_type'=>'village']); //Mekar Mulya
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4127, 'regionable_type'=>'village']); //Pondok Kopi
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4128, 'regionable_type'=>'village']); //Setia Budi
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4129, 'regionable_type'=>'village']); //Sido Mulyo
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4130, 'regionable_type'=>'village']); //Sungai Ipuh Dua
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4131, 'regionable_type'=>'village']); //Sungai Ipuh Satu
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4132, 'regionable_type'=>'village']); //Talang Buai
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4133, 'regionable_type'=>'village']); //Talang Kuning
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4134, 'regionable_type'=>'village']); //Talang Medan
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4135, 'regionable_type'=>'village']); //Teras Terunjam
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4136, 'regionable_type'=>'village']); //Teruntung
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4137, 'regionable_type'=>'village']); //Tunggal Jaya
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4138, 'regionable_type'=>'village']); //Wonosobo
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4139, 'regionable_type'=>'village']); //Bukit Makmur
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4140, 'regionable_type'=>'village']); //Bumi Mulya
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4141, 'regionable_type'=>'village']); //Lubuk Mukti
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4142, 'regionable_type'=>'village']); //Marga Mukti
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4143, 'regionable_type'=>'village']); //Mekar Mulya
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4144, 'regionable_type'=>'village']); //Penarik
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4145, 'regionable_type'=>'village']); //Sido Mulya
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4146, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4147, 'regionable_type'=>'village']); //Sumber Mulya
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4148, 'regionable_type'=>'village']); //Wonosobo
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4149, 'regionable_type'=>'village']); //Lubuk Sahung
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4150, 'regionable_type'=>'village']); //Pondok Baru
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4151, 'regionable_type'=>'village']); //Sungai Gading
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4152, 'regionable_type'=>'village']); //Sungai Ipuh
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4153, 'regionable_type'=>'village']); //Sungai Jerinjing
                DB::table('regionables')->insert(['region_id'=>1366, 'regionable_id'=>4154, 'regionable_type'=>'village']); //Surian Bungkal
        DB::table('regions')->insert(['id'=>1367, 'parent'=>1262, 'code'=>'388', 'type'=>'city', 'name'=>'City 388, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1367, 'regionable_id'=>30, 'regionable_type'=>'city']); //Seluma regencies
            DB::table('regions')->insert(['id'=>1368, 'parent'=>1367, 'code'=>'3887', 'type'=>'districts', 'name'=>'Districts 3887, City 388, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1368, 'regionable_id'=>399, 'regionable_type'=>'districts']); //Semidang Alas
            DB::table('regionables')->insert(['region_id'=>1368, 'regionable_id'=>400, 'regionable_type'=>'districts']); //Talo
            DB::table('regionables')->insert(['region_id'=>1368, 'regionable_id'=>401, 'regionable_type'=>'districts']); //Semidang Alas Maras
            DB::table('regionables')->insert(['region_id'=>1368, 'regionable_id'=>402, 'regionable_type'=>'districts']); //Seluma
            DB::table('regionables')->insert(['region_id'=>1368, 'regionable_id'=>403, 'regionable_type'=>'districts']); //Sukaraja
            DB::table('regionables')->insert(['region_id'=>1368, 'regionable_id'=>404, 'regionable_type'=>'districts']); //Seluma Selatan
                DB::table('regions')->insert(['id'=>1369, 'parent'=>1368, 'code'=>'38878', 'type'=>'village', 'name'=>'Village 38878, Districts 3887, City 388, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4247, 'regionable_type'=>'village']); //Padang Genting
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4248, 'regionable_type'=>'village']); //Padang Merbau
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4249, 'regionable_type'=>'village']); //Padang Rambun
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4250, 'regionable_type'=>'village']); //Pasar Seluma
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4251, 'regionable_type'=>'village']); //Rimbo Kedui
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4252, 'regionable_type'=>'village']); //Sengkuang
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4253, 'regionable_type'=>'village']); //Sido Mulyo
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4254, 'regionable_type'=>'village']); //Suka Rami
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4255, 'regionable_type'=>'village']); //Tangga Batu
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4256, 'regionable_type'=>'village']); //Tanjung Seluai
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4257, 'regionable_type'=>'village']); //Tanjung Seru
                DB::table('regionables')->insert(['region_id'=>1369, 'regionable_id'=>4258, 'regionable_type'=>'village']); //Tanjungan
            DB::table('regions')->insert(['id'=>1370, 'parent'=>1367, 'code'=>'3888', 'type'=>'districts', 'name'=>'Districts 3888, City 388, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1370, 'regionable_id'=>405, 'regionable_type'=>'districts']); //Air Periukan
            DB::table('regionables')->insert(['region_id'=>1370, 'regionable_id'=>406, 'regionable_type'=>'districts']); //Lubuk Sandi
            DB::table('regionables')->insert(['region_id'=>1370, 'regionable_id'=>407, 'regionable_type'=>'districts']); //Seluma Barat
            DB::table('regionables')->insert(['region_id'=>1370, 'regionable_id'=>408, 'regionable_type'=>'districts']); //Seluma Utara
            DB::table('regionables')->insert(['region_id'=>1370, 'regionable_id'=>409, 'regionable_type'=>'districts']); //Seluma Timur
            DB::table('regionables')->insert(['region_id'=>1370, 'regionable_id'=>410, 'regionable_type'=>'districts']); //Ulu Talo
            DB::table('regionables')->insert(['region_id'=>1370, 'regionable_id'=>411, 'regionable_type'=>'districts']); //Ilir Talo
            DB::table('regionables')->insert(['region_id'=>1370, 'regionable_id'=>412, 'regionable_type'=>'districts']); //Talo Kecil
                DB::table('regions')->insert(['id'=>1371, 'parent'=>1370, 'code'=>'38888', 'type'=>'village', 'name'=>'Village 38888, Districts 3888, City 388, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4344, 'regionable_type'=>'village']); //Bakal Dalam
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4345, 'regionable_type'=>'village']); //Lubuk Lagan
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4346, 'regionable_type'=>'village']); //Napalan
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4347, 'regionable_type'=>'village']); //Pering Baru
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4348, 'regionable_type'=>'village']); //Suka Bulan
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4349, 'regionable_type'=>'village']); //Suka Merindu
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4350, 'regionable_type'=>'village']); //Sungai Petai
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4351, 'regionable_type'=>'village']); //Taba
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4352, 'regionable_type'=>'village']); //Talang Padang
                DB::table('regionables')->insert(['region_id'=>1371, 'regionable_id'=>4353, 'regionable_type'=>'village']); //Tebat Sibun
        DB::table('regions')->insert(['id'=>1372, 'parent'=>1262, 'code'=>'389', 'type'=>'city', 'name'=>'City 389, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1372, 'regionable_id'=>31, 'regionable_type'=>'city']); //Kaur regencies
            DB::table('regions')->insert(['id'=>1373, 'parent'=>1372, 'code'=>'3895', 'type'=>'districts', 'name'=>'Districts 3895, City 389, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1373, 'regionable_id'=>413, 'regionable_type'=>'districts']); //Tanjung Kemuning
            DB::table('regionables')->insert(['region_id'=>1373, 'regionable_id'=>414, 'regionable_type'=>'districts']); //Kelam Tengah
            DB::table('regionables')->insert(['region_id'=>1373, 'regionable_id'=>415, 'regionable_type'=>'districts']); //Padang Guci Hilir
            DB::table('regionables')->insert(['region_id'=>1373, 'regionable_id'=>416, 'regionable_type'=>'districts']); //Lungkang Kule
            DB::table('regionables')->insert(['region_id'=>1373, 'regionable_id'=>417, 'regionable_type'=>'districts']); //Kaur Utara
            DB::table('regionables')->insert(['region_id'=>1373, 'regionable_id'=>418, 'regionable_type'=>'districts']); //Padang Guci Hulu
                DB::table('regions')->insert(['id'=>1374, 'parent'=>1373, 'code'=>'38956', 'type'=>'village', 'name'=>'Village 38956, Districts 3895, City 389, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4379, 'regionable_type'=>'village']); //Rigangan I
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4380, 'regionable_type'=>'village']); //Rigangan Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4381, 'regionable_type'=>'village']); //Rigangan Iii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4382, 'regionable_type'=>'village']); //Suka Rami Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4383, 'regionable_type'=>'village']); //Sukarami
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4384, 'regionable_type'=>'village']); //Talang Marap
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4385, 'regionable_type'=>'village']); //Tanjung Ganti I
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4386, 'regionable_type'=>'village']); //Tanjung Ganti Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4387, 'regionable_type'=>'village']); //Air Kering
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4388, 'regionable_type'=>'village']); //Air Kering Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4389, 'regionable_type'=>'village']); //Gunung Kaya
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4390, 'regionable_type'=>'village']); //Marga Mulyo
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4391, 'regionable_type'=>'village']); //Pulau Panggung
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4392, 'regionable_type'=>'village']); //Talang Besar
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4393, 'regionable_type'=>'village']); //Talang Jawi I
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4394, 'regionable_type'=>'village']); //Talang Jawi Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4395, 'regionable_type'=>'village']); //Talang Padang
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4396, 'regionable_type'=>'village']); //Ulak Agung
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4397, 'regionable_type'=>'village']); //Aur Gading
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4398, 'regionable_type'=>'village']); //Datar Lebar
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4399, 'regionable_type'=>'village']); //Datar Lebar Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4400, 'regionable_type'=>'village']); //Lawang Agung
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4401, 'regionable_type'=>'village']); //Senak Perda
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4402, 'regionable_type'=>'village']); //Sinar Bulan
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4403, 'regionable_type'=>'village']); //Suka Nanti
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4404, 'regionable_type'=>'village']); //Tanjung Bunian
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4405, 'regionable_type'=>'village']); //Tanjung Kurung
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4406, 'regionable_type'=>'village']); //Bandu Agung
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4407, 'regionable_type'=>'village']); //Coko Enau
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4408, 'regionable_type'=>'village']); //Gunung Agung
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4409, 'regionable_type'=>'village']); //Guru Agung
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4410, 'regionable_type'=>'village']); //Guru Agung Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4411, 'regionable_type'=>'village']); //Padang Manis
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4412, 'regionable_type'=>'village']); //Pancur Negara
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4413, 'regionable_type'=>'village']); //Perugian
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4414, 'regionable_type'=>'village']); //Simpang Tiga
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4415, 'regionable_type'=>'village']); //Tanjung Betung I
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4416, 'regionable_type'=>'village']); //Tanjung Betung Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4417, 'regionable_type'=>'village']); //Bungin Tambun I
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4418, 'regionable_type'=>'village']); //Bungin Tambun Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4419, 'regionable_type'=>'village']); //Bungin Tambun Iii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4420, 'regionable_type'=>'village']); //Coko Betung
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4421, 'regionable_type'=>'village']); //Jati Mulyo
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4422, 'regionable_type'=>'village']); //Manau Sembilan I
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4423, 'regionable_type'=>'village']); //Manau Sembilan Ii
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4424, 'regionable_type'=>'village']); //Naga Rantai
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4425, 'regionable_type'=>'village']); //Pagar Alam
                DB::table('regionables')->insert(['region_id'=>1374, 'regionable_id'=>4426, 'regionable_type'=>'village']); //Pagar Gunung
            DB::table('regions')->insert(['id'=>1375, 'parent'=>1372, 'code'=>'3896', 'type'=>'districts', 'name'=>'Districts 3896, City 389, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>419, 'regionable_type'=>'districts']); //Luas
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>420, 'regionable_type'=>'districts']); //Muara Sahung
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>421, 'regionable_type'=>'districts']); //Kaur Tengah
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>422, 'regionable_type'=>'districts']); //Semidang Gumai (gumay)
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>423, 'regionable_type'=>'districts']); //Kinal
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>424, 'regionable_type'=>'districts']); //Kaur Selatan
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>425, 'regionable_type'=>'districts']); //Tetap (muara Tetap)
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>426, 'regionable_type'=>'districts']); //Nasal
            DB::table('regionables')->insert(['region_id'=>1375, 'regionable_id'=>427, 'regionable_type'=>'districts']); //Maje
                DB::table('regions')->insert(['id'=>1376, 'parent'=>1375, 'code'=>'38965', 'type'=>'village', 'name'=>'Village 38965, Districts 3896, City 389, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4529, 'regionable_type'=>'village']); //Air Bacang
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4530, 'regionable_type'=>'village']); //Air Jelatang
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4531, 'regionable_type'=>'village']); //Air Long
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4532, 'regionable_type'=>'village']); //Arga Mulya
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4533, 'regionable_type'=>'village']); //Bakal Makmur
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4534, 'regionable_type'=>'village']); //Benteng Harapan
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4535, 'regionable_type'=>'village']); //Kedataran
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4536, 'regionable_type'=>'village']); //Linau
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4537, 'regionable_type'=>'village']); //Muara Jaya
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4538, 'regionable_type'=>'village']); //Parda Suka
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4539, 'regionable_type'=>'village']); //Pematang Danau
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4540, 'regionable_type'=>'village']); //Penyandingan
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4541, 'regionable_type'=>'village']); //Suka Menanti
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4542, 'regionable_type'=>'village']); //Sumber Harapan
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4543, 'regionable_type'=>'village']); //Tanjung Agung
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4544, 'regionable_type'=>'village']); //Tanjung Aur
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4545, 'regionable_type'=>'village']); //Tanjung Baru
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4546, 'regionable_type'=>'village']); //Tanjung Beringin
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4547, 'regionable_type'=>'village']); //Tanjung Ganti
                DB::table('regionables')->insert(['region_id'=>1376, 'regionable_id'=>4548, 'regionable_type'=>'village']); //Way Hawang
        DB::table('regions')->insert(['id'=>1377, 'parent'=>1262, 'code'=>'391', 'type'=>'city', 'name'=>'City 391, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1377, 'regionable_id'=>32, 'regionable_type'=>'city']); //Rejang Lebong regencies
            DB::table('regions')->insert(['id'=>1378, 'parent'=>1377, 'code'=>'3911', 'type'=>'districts', 'name'=>'Districts 3911, City 391, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1378, 'regionable_id'=>428, 'regionable_type'=>'districts']); //Curup
            DB::table('regionables')->insert(['region_id'=>1378, 'regionable_id'=>429, 'regionable_type'=>'districts']); //Curup Selatan
            DB::table('regionables')->insert(['region_id'=>1378, 'regionable_id'=>430, 'regionable_type'=>'districts']); //Curup Tengah
            DB::table('regionables')->insert(['region_id'=>1378, 'regionable_id'=>431, 'regionable_type'=>'districts']); //Curup Timur
            DB::table('regionables')->insert(['region_id'=>1378, 'regionable_id'=>432, 'regionable_type'=>'districts']); //Curup Utara
                DB::table('regions')->insert(['id'=>1379, 'parent'=>1378, 'code'=>'39119', 'type'=>'village', 'name'=>'Village 39119, Districts 3911, City 391, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1379, 'regionable_id'=>4574, 'regionable_type'=>'village']); //Sidorejo/siderejo
                DB::table('regionables')->insert(['region_id'=>1379, 'regionable_id'=>4588, 'regionable_type'=>'village']); //Dusun Curup
            DB::table('regions')->insert(['id'=>1380, 'parent'=>1377, 'code'=>'3912', 'type'=>'districts', 'name'=>'Districts 3912, City 391, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1380, 'regionable_id'=>428, 'regionable_type'=>'districts']); //Curup
            DB::table('regionables')->insert(['region_id'=>1380, 'regionable_id'=>429, 'regionable_type'=>'districts']); //Curup Selatan
            DB::table('regionables')->insert(['region_id'=>1380, 'regionable_id'=>430, 'regionable_type'=>'districts']); //Curup Tengah
            DB::table('regionables')->insert(['region_id'=>1380, 'regionable_id'=>431, 'regionable_type'=>'districts']); //Curup Timur
            DB::table('regionables')->insert(['region_id'=>1380, 'regionable_id'=>432, 'regionable_type'=>'districts']); //Curup Utara
                DB::table('regions')->insert(['id'=>1381, 'parent'=>1380, 'code'=>'39123', 'type'=>'village', 'name'=>'Village 39123, Districts 3912, City 391, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1381, 'regionable_id'=>4589, 'regionable_type'=>'village']); //Tunas Harapan
                DB::table('regions')->insert(['id'=>1382, 'parent'=>1380, 'code'=>'39125', 'type'=>'village', 'name'=>'Village 39125, Districts 3912, City 391, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4556, 'regionable_type'=>'village']); //Adirejo
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4557, 'regionable_type'=>'village']); //Timbul Rejo
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4560, 'regionable_type'=>'village']); //Air Lanang
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4561, 'regionable_type'=>'village']); //Lubuk Ubar
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4562, 'regionable_type'=>'village']); //Pungguk Lalang
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4563, 'regionable_type'=>'village']); //Rimbo Recap
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4564, 'regionable_type'=>'village']); //Suka Marga
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4565, 'regionable_type'=>'village']); //Tanjung Dalam
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4566, 'regionable_type'=>'village']); //Teladan (desa Teladan)
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4567, 'regionable_type'=>'village']); //Turan Baru
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4568, 'regionable_type'=>'village']); //Watas Marga
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4575, 'regionable_type'=>'village']); //Air Bang
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4576, 'regionable_type'=>'village']); //Air Merah
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4577, 'regionable_type'=>'village']); //Banyumas
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4578, 'regionable_type'=>'village']); //Batu Galing
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4582, 'regionable_type'=>'village']); //Duku Ilir
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4583, 'regionable_type'=>'village']); //Duku Ulu
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4584, 'regionable_type'=>'village']); //Kampung Delima
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4585, 'regionable_type'=>'village']); //Kesambe Baru
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4586, 'regionable_type'=>'village']); //Kesambe Lama
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4587, 'regionable_type'=>'village']); //Talang Ulu
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4590, 'regionable_type'=>'village']); //Batu Dewa
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4591, 'regionable_type'=>'village']); //Batu Panco
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4592, 'regionable_type'=>'village']); //Desa Pahlawan
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4593, 'regionable_type'=>'village']); //Dusun Sawah
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4594, 'regionable_type'=>'village']); //Kota Pagu
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4595, 'regionable_type'=>'village']); //Lubuk Kembang
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4596, 'regionable_type'=>'village']); //Perbo
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4597, 'regionable_type'=>'village']); //Seguring
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4598, 'regionable_type'=>'village']); //Suka Datang
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4599, 'regionable_type'=>'village']); //Tabarenah
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4600, 'regionable_type'=>'village']); //Tanjung Beringin
                DB::table('regionables')->insert(['region_id'=>1382, 'regionable_id'=>4601, 'regionable_type'=>'village']); //Tasikmalaya
            DB::table('regions')->insert(['id'=>1383, 'parent'=>1377, 'code'=>'3915', 'type'=>'districts', 'name'=>'Districts 3915, City 391, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1383, 'regionable_id'=>433, 'regionable_type'=>'districts']); //Bermani Ulu Raya
            DB::table('regionables')->insert(['region_id'=>1383, 'regionable_id'=>434, 'regionable_type'=>'districts']); //Bermani Ulu
            DB::table('regionables')->insert(['region_id'=>1383, 'regionable_id'=>435, 'regionable_type'=>'districts']); //Sindang Kelingi
            DB::table('regionables')->insert(['region_id'=>1383, 'regionable_id'=>436, 'regionable_type'=>'districts']); //Selupu Rejang
            DB::table('regionables')->insert(['region_id'=>1383, 'regionable_id'=>437, 'regionable_type'=>'districts']); //Sindang Daratan
                DB::table('regions')->insert(['id'=>1384, 'parent'=>1383, 'code'=>'39153', 'type'=>'village', 'name'=>'Village 39153, Districts 3915, City 391, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4624, 'regionable_type'=>'village']); //Air Dingin
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4625, 'regionable_type'=>'village']); //Belitar Muka
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4626, 'regionable_type'=>'village']); //Belitar Seberang
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4627, 'regionable_type'=>'village']); //Beringin Tiga
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4628, 'regionable_type'=>'village']); //Cahaya Negeri
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4629, 'regionable_type'=>'village']); //Kayu Manis
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4630, 'regionable_type'=>'village']); //Mojorejo
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4631, 'regionable_type'=>'village']); //Pelalo
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4632, 'regionable_type'=>'village']); //Sindang Jati
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4633, 'regionable_type'=>'village']); //Sindang Jaya
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4634, 'regionable_type'=>'village']); //Talang Lahat
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4635, 'regionable_type'=>'village']); //Tanjung Aur
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4636, 'regionable_type'=>'village']); //Air Duku
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4637, 'regionable_type'=>'village']); //Air Meles Atas
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4638, 'regionable_type'=>'village']); //Air Putih Kali Bandung
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4639, 'regionable_type'=>'village']); //Cawang Baru
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4640, 'regionable_type'=>'village']); //Cawang Lama
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4641, 'regionable_type'=>'village']); //Kali Padang
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4642, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4643, 'regionable_type'=>'village']); //Karang Jaya
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4644, 'regionable_type'=>'village']); //Kayu Manis
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4645, 'regionable_type'=>'village']); //Sambirejo
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4646, 'regionable_type'=>'village']); //Simpang Nangka
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4647, 'regionable_type'=>'village']); //Suban Ayam
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4648, 'regionable_type'=>'village']); //Sumber Bening
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4649, 'regionable_type'=>'village']); //Sumber Urip
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4650, 'regionable_type'=>'village']); //Air Rusa
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4651, 'regionable_type'=>'village']); //Bengko
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4652, 'regionable_type'=>'village']); //Iv/empat Suku Menanti
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4653, 'regionable_type'=>'village']); //Sinar Gunung
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4654, 'regionable_type'=>'village']); //Talang Belitar
                DB::table('regionables')->insert(['region_id'=>1384, 'regionable_id'=>4655, 'regionable_type'=>'village']); //Warung Pojok
            DB::table('regions')->insert(['id'=>1385, 'parent'=>1377, 'code'=>'3918', 'type'=>'districts', 'name'=>'Districts 3918, City 391, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1385, 'regionable_id'=>438, 'regionable_type'=>'districts']); //Binduriang
            DB::table('regionables')->insert(['region_id'=>1385, 'regionable_id'=>439, 'regionable_type'=>'districts']); //Padang Ulak Tanding
            DB::table('regionables')->insert(['region_id'=>1385, 'regionable_id'=>440, 'regionable_type'=>'districts']); //Sindang Beliti Ulu
            DB::table('regionables')->insert(['region_id'=>1385, 'regionable_id'=>441, 'regionable_type'=>'districts']); //Sindang Beliti Ilir
            DB::table('regionables')->insert(['region_id'=>1385, 'regionable_id'=>442, 'regionable_type'=>'districts']); //Kota Padang
                DB::table('regions')->insert(['id'=>1386, 'parent'=>1385, 'code'=>'39183', 'type'=>'village', 'name'=>'Village 39183, Districts 3918, City 391, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4685, 'regionable_type'=>'village']); //Balai Buntar/butar
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4686, 'regionable_type'=>'village']); //Lubuk Belimbing I
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4687, 'regionable_type'=>'village']); //Lubuk Belimbing Ii
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4688, 'regionable_type'=>'village']); //Lubuk Bingin Baru
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4689, 'regionable_type'=>'village']); //Lubuk Tanjung/tunjung
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4690, 'regionable_type'=>'village']); //Merantau
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4691, 'regionable_type'=>'village']); //Periang
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4692, 'regionable_type'=>'village']); //Sari Pulau
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4693, 'regionable_type'=>'village']); //Suka Merindu
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4694, 'regionable_type'=>'village']); //Sukakarya
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4695, 'regionable_type'=>'village']); //Bedeng Ss
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4696, 'regionable_type'=>'village']); //Derati
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4697, 'regionable_type'=>'village']); //Durian Mas
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4698, 'regionable_type'=>'village']); //Dusun Baru
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4699, 'regionable_type'=>'village']); //Kota Padang
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4700, 'regionable_type'=>'village']); //Kota Padang Baru
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4701, 'regionable_type'=>'village']); //Lubuk Mumpo
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4702, 'regionable_type'=>'village']); //Suka Rami
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4703, 'regionable_type'=>'village']); //Taba Anyar
                DB::table('regionables')->insert(['region_id'=>1386, 'regionable_id'=>4704, 'regionable_type'=>'village']); //Tanjung Gelang
        DB::table('regions')->insert(['id'=>1387, 'parent'=>1262, 'code'=>'392', 'type'=>'city', 'name'=>'City 392, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1387, 'regionable_id'=>33, 'regionable_type'=>'city']); //Lebong regencies
            DB::table('regions')->insert(['id'=>1388, 'parent'=>1387, 'code'=>'3926', 'type'=>'districts', 'name'=>'Districts 3926, City 392, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>443, 'regionable_type'=>'districts']); //Rimbo Pengadang
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>444, 'regionable_type'=>'districts']); //Topos
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>445, 'regionable_type'=>'districts']); //Bingin Kuning
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>446, 'regionable_type'=>'districts']); //Lebong Selatan
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>447, 'regionable_type'=>'districts']); //Lebong Tengah
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>448, 'regionable_type'=>'districts']); //Amen
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>449, 'regionable_type'=>'districts']); //Lebong Utara
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>450, 'regionable_type'=>'districts']); //Lebong Atas
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>451, 'regionable_type'=>'districts']); //Pelabai
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>452, 'regionable_type'=>'districts']); //Lebong Sakti
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>453, 'regionable_type'=>'districts']); //Uram Jaya
            DB::table('regionables')->insert(['region_id'=>1388, 'regionable_id'=>454, 'regionable_type'=>'districts']); //Pinang Belapis
                DB::table('regions')->insert(['id'=>1389, 'parent'=>1388, 'code'=>'39269', 'type'=>'village', 'name'=>'Village 39269, Districts 3926, City 392, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1389, 'regionable_id'=>4812, 'regionable_type'=>'village']); //Air Kopras
                DB::table('regionables')->insert(['region_id'=>1389, 'regionable_id'=>4813, 'regionable_type'=>'village']); //Bioa Putiak
                DB::table('regionables')->insert(['region_id'=>1389, 'regionable_id'=>4814, 'regionable_type'=>'village']); //Ketenong I
                DB::table('regionables')->insert(['region_id'=>1389, 'regionable_id'=>4815, 'regionable_type'=>'village']); //Ketenong Ii
                DB::table('regionables')->insert(['region_id'=>1389, 'regionable_id'=>4816, 'regionable_type'=>'village']); //Ketenong Jaya
                DB::table('regionables')->insert(['region_id'=>1389, 'regionable_id'=>4817, 'regionable_type'=>'village']); //Sebelat
                DB::table('regionables')->insert(['region_id'=>1389, 'regionable_id'=>4818, 'regionable_type'=>'village']); //Sungai Lisai
                DB::table('regionables')->insert(['region_id'=>1389, 'regionable_id'=>4819, 'regionable_type'=>'village']); //Tambang Sawah
        DB::table('regions')->insert(['id'=>1390, 'parent'=>1262, 'code'=>'393', 'type'=>'city', 'name'=>'City 393, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1390, 'regionable_id'=>34, 'regionable_type'=>'city']); //Kepahiang regencies
            DB::table('regions')->insert(['id'=>1391, 'parent'=>1390, 'code'=>'3937', 'type'=>'districts', 'name'=>'Districts 3937, City 393, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1391, 'regionable_id'=>455, 'regionable_type'=>'districts']); //Ujan Mas
            DB::table('regionables')->insert(['region_id'=>1391, 'regionable_id'=>456, 'regionable_type'=>'districts']); //Merigi
            DB::table('regionables')->insert(['region_id'=>1391, 'regionable_id'=>457, 'regionable_type'=>'districts']); //Kebawetan (kabawetan)
            DB::table('regionables')->insert(['region_id'=>1391, 'regionable_id'=>458, 'regionable_type'=>'districts']); //Kepahiang
            DB::table('regionables')->insert(['region_id'=>1391, 'regionable_id'=>459, 'regionable_type'=>'districts']); //Seberang Musi
            DB::table('regionables')->insert(['region_id'=>1391, 'regionable_id'=>460, 'regionable_type'=>'districts']); //Tebat Karai
            DB::table('regionables')->insert(['region_id'=>1391, 'regionable_id'=>461, 'regionable_type'=>'districts']); //Muara Kemumu
            DB::table('regionables')->insert(['region_id'=>1391, 'regionable_id'=>462, 'regionable_type'=>'districts']); //Bermani Ilir
                DB::table('regions')->insert(['id'=>1392, 'parent'=>1391, 'code'=>'39374', 'type'=>'village', 'name'=>'Village 39374, Districts 3937, City 393, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4893, 'regionable_type'=>'village']); //Air Selimang
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4894, 'regionable_type'=>'village']); //Benuang Galing
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4895, 'regionable_type'=>'village']); //Tebat Laut
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4910, 'regionable_type'=>'village']); //Air Punggur
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4911, 'regionable_type'=>'village']); //Batu Bandung
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4912, 'regionable_type'=>'village']); //Batu Kalung
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4913, 'regionable_type'=>'village']); //Limbur/lembur Baru
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4914, 'regionable_type'=>'village']); //Pematang Danau Air Les
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4915, 'regionable_type'=>'village']); //Renah Kurung
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4916, 'regionable_type'=>'village']); //Sosokan Baru
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4917, 'regionable_type'=>'village']); //Sosokan Tabah
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4918, 'regionable_type'=>'village']); //Talang Tige
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4919, 'regionable_type'=>'village']); //Warung Pojok
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4920, 'regionable_type'=>'village']); //Warung Pojok
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4921, 'regionable_type'=>'village']); //Air Raman
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4922, 'regionable_type'=>'village']); //Batu Belarik
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4923, 'regionable_type'=>'village']); //Bukit Menyan
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4924, 'regionable_type'=>'village']); //Cinta Mandi Baru
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4925, 'regionable_type'=>'village']); //Cinto Mandi (cinta Mandi)
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4926, 'regionable_type'=>'village']); //Embong Ijuk
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4927, 'regionable_type'=>'village']); //Embong Sido
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4928, 'regionable_type'=>'village']); //Gunung Agung
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4929, 'regionable_type'=>'village']); //Keban Agung
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4930, 'regionable_type'=>'village']); //Kembang Seri
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4931, 'regionable_type'=>'village']); //Kota Agung
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4932, 'regionable_type'=>'village']); //Langgar Jaya
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4933, 'regionable_type'=>'village']); //Limbur Lama (lembur Lama)
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4934, 'regionable_type'=>'village']); //Muara Langkap
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4935, 'regionable_type'=>'village']); //Pagar Agung
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4936, 'regionable_type'=>'village']); //Sosokan Cinta Mandi
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4937, 'regionable_type'=>'village']); //Taba Baru
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4938, 'regionable_type'=>'village']); //Talang Pito
                DB::table('regionables')->insert(['region_id'=>1392, 'regionable_id'=>4939, 'regionable_type'=>'village']); //Talang Sawah

        //Jambi
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>8, 'regionable_type'=>'province']); //Jambi
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>52, 'regionable_type'=>'city']); //Jambi city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>53, 'regionable_type'=>'city']); //Muaro Jambi regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>54, 'regionable_type'=>'city']); //Tanjung Jabung Barat regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>55, 'regionable_type'=>'city']); //Tanjung Jabung Timur regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>56, 'regionable_type'=>'city']); //Batang Hari regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>57, 'regionable_type'=>'city']); //Sungaipenuh city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>58, 'regionable_type'=>'city']); //Kerinci regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>59, 'regionable_type'=>'city']); //Bungo regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>60, 'regionable_type'=>'city']); //Tebo regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>61, 'regionable_type'=>'city']); //Merangin regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>62, 'regionable_type'=>'city']); //Sarolangun regencies

        DB::table('regions')->insert(['id'=>1393, 'parent'=>1262, 'code'=>'361', 'type'=>'city', 'name'=>'City 361, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1393, 'regionable_id'=>52, 'regionable_type'=>'city']); //Jambi city
            DB::table('regions')->insert(['id'=>1394, 'parent'=>1393, 'code'=>'3611', 'type'=>'districts', 'name'=>'Districts 3611, City 361, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1394, 'regionable_id'=>690, 'regionable_type'=>'districts']); //Pasar Jambi
                DB::table('regions')->insert(['id'=>1395, 'parent'=>1394, 'code'=>'36111', 'type'=>'village', 'name'=>'Village 36111, Districts 3611, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1395, 'regionable_id'=>6632, 'regionable_type'=>'village']); //Orang Kayo Hitam
                DB::table('regions')->insert(['id'=>1396, 'parent'=>1394, 'code'=>'36112', 'type'=>'village', 'name'=>'Village 36112, Districts 3611, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1396, 'regionable_id'=>6633, 'regionable_type'=>'village']); //Beringin
            DB::table('regions')->insert(['id'=>1397, 'parent'=>1393, 'code'=>'3612', 'type'=>'districts', 'name'=>'Districts 3612, City 361, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1397, 'regionable_id'=>691, 'regionable_type'=>'districts']); //Telanaipura
            DB::table('regionables')->insert(['region_id'=>1397, 'regionable_id'=>692, 'regionable_type'=>'districts']); //Kota Baru
                DB::table('regions')->insert(['id'=>1398, 'parent'=>1397, 'code'=>'36125', 'type'=>'village', 'name'=>'Village 36125, Districts 3612, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1398, 'regionable_id'=>6647, 'regionable_type'=>'village']); //Rawa Sari
                DB::table('regions')->insert(['id'=>1399, 'parent'=>1397, 'code'=>'36126', 'type'=>'village', 'name'=>'Village 36126, Districts 3612, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1399, 'regionable_id'=>6648, 'regionable_type'=>'village']); //Simpang Tiga Sipin
                DB::table('regions')->insert(['id'=>1400, 'parent'=>1397, 'code'=>'36127', 'type'=>'village', 'name'=>'Village 36127, Districts 3612, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1400, 'regionable_id'=>6649, 'regionable_type'=>'village']); //Suka Karya
                DB::table('regions')->insert(['id'=>1401, 'parent'=>1397, 'code'=>'36128', 'type'=>'village', 'name'=>'Village 36128, Districts 3612, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1401, 'regionable_id'=>6650, 'regionable_type'=>'village']); //Kenali Asam Atas
                DB::table('regionables')->insert(['region_id'=>1401, 'regionable_id'=>6651, 'regionable_type'=>'village']); //Kenali Asam Bawah
                DB::table('regionables')->insert(['region_id'=>1401, 'regionable_id'=>6652, 'regionable_type'=>'village']); //Paal Lima
                DB::table('regions')->insert(['id'=>1402, 'parent'=>1397, 'code'=>'36129', 'type'=>'village', 'name'=>'Village 36129, Districts 3612, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1402, 'regionable_id'=>6645, 'regionable_type'=>'village']); //Pematang Sulur
                DB::table('regionables')->insert(['region_id'=>1402, 'regionable_id'=>6646, 'regionable_type'=>'village']); //Selamat
                DB::table('regionables')->insert(['region_id'=>1402, 'regionable_id'=>6653, 'regionable_type'=>'village']); //Bagan Pete
                DB::table('regionables')->insert(['region_id'=>1402, 'regionable_id'=>6654, 'regionable_type'=>'village']); //Beliung Patah
                DB::table('regionables')->insert(['region_id'=>1402, 'regionable_id'=>6655, 'regionable_type'=>'village']); //Kenali Besar
                DB::table('regionables')->insert(['region_id'=>1402, 'regionable_id'=>6656, 'regionable_type'=>'village']); //Mayang Mangurai
            DB::table('regions')->insert(['id'=>1403, 'parent'=>1393, 'code'=>'3613', 'type'=>'districts', 'name'=>'Districts 3613, City 361, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1403, 'regionable_id'=>690, 'regionable_type'=>'districts']); //Pasar Jambi
            DB::table('regionables')->insert(['region_id'=>1403, 'regionable_id'=>693, 'regionable_type'=>'districts']); //Jambi Selatan
            DB::table('regionables')->insert(['region_id'=>1403, 'regionable_id'=>694, 'regionable_type'=>'districts']); //Jelutung
                DB::table('regions')->insert(['id'=>1404, 'parent'=>1403, 'code'=>'36133', 'type'=>'village', 'name'=>'Village 36133, Districts 3613, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1404, 'regionable_id'=>6634, 'regionable_type'=>'village']); //Pasar Jambi
                DB::table('regionables')->insert(['region_id'=>1404, 'regionable_id'=>6666, 'regionable_type'=>'village']); //Talang Jauh
                DB::table('regions')->insert(['id'=>1405, 'parent'=>1403, 'code'=>'36134', 'type'=>'village', 'name'=>'Village 36134, Districts 3613, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1405, 'regionable_id'=>6635, 'regionable_type'=>'village']); //Sungai Asam
                DB::table('regionables')->insert(['region_id'=>1405, 'regionable_id'=>6667, 'regionable_type'=>'village']); //Cempaka Putih
                DB::table('regions')->insert(['id'=>1406, 'parent'=>1403, 'code'=>'36135', 'type'=>'village', 'name'=>'Village 36135, Districts 3613, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1406, 'regionable_id'=>6668, 'regionable_type'=>'village']); //Lebak Bandung
                DB::table('regionables')->insert(['region_id'=>1406, 'regionable_id'=>6669, 'regionable_type'=>'village']); //Payo Lebar
                DB::table('regions')->insert(['id'=>1407, 'parent'=>1403, 'code'=>'36136', 'type'=>'village', 'name'=>'Village 36136, Districts 3613, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1407, 'regionable_id'=>6670, 'regionable_type'=>'village']); //Jelutung
                DB::table('regions')->insert(['id'=>1408, 'parent'=>1403, 'code'=>'36137', 'type'=>'village', 'name'=>'Village 36137, Districts 3613, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1408, 'regionable_id'=>6671, 'regionable_type'=>'village']); //Handil Jaya
                DB::table('regionables')->insert(['region_id'=>1408, 'regionable_id'=>6672, 'regionable_type'=>'village']); //Kebun Handil
            DB::table('regions')->insert(['id'=>1409, 'parent'=>1393, 'code'=>'3614', 'type'=>'districts', 'name'=>'Districts 3614, City 361, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1409, 'regionable_id'=>695, 'regionable_type'=>'districts']); //Jambi Timur
                DB::table('regions')->insert(['id'=>1410, 'parent'=>1409, 'code'=>'36141', 'type'=>'village', 'name'=>'Village 36141, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1410, 'regionable_id'=>6673, 'regionable_type'=>'village']); //Kasang
                DB::table('regionables')->insert(['region_id'=>1410, 'regionable_id'=>6674, 'regionable_type'=>'village']); //Kasang Jaya
                DB::table('regions')->insert(['id'=>1411, 'parent'=>1409, 'code'=>'36142', 'type'=>'village', 'name'=>'Village 36142, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1411, 'regionable_id'=>6675, 'regionable_type'=>'village']); //Talang Banjar
                DB::table('regions')->insert(['id'=>1412, 'parent'=>1409, 'code'=>'36143', 'type'=>'village', 'name'=>'Village 36143, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1412, 'regionable_id'=>6676, 'regionable_type'=>'village']); //Rajawali
                DB::table('regions')->insert(['id'=>1413, 'parent'=>1409, 'code'=>'36144', 'type'=>'village', 'name'=>'Village 36144, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1413, 'regionable_id'=>6677, 'regionable_type'=>'village']); //Sulan Jana
                DB::table('regions')->insert(['id'=>1414, 'parent'=>1409, 'code'=>'36145', 'type'=>'village', 'name'=>'Village 36145, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1414, 'regionable_id'=>6678, 'regionable_type'=>'village']); //Budiman
                DB::table('regions')->insert(['id'=>1415, 'parent'=>1409, 'code'=>'36146', 'type'=>'village', 'name'=>'Village 36146, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1415, 'regionable_id'=>6679, 'regionable_type'=>'village']); //Tanjung Pinang
                DB::table('regions')->insert(['id'=>1416, 'parent'=>1409, 'code'=>'36147', 'type'=>'village', 'name'=>'Village 36147, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1416, 'regionable_id'=>6680, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regions')->insert(['id'=>1417, 'parent'=>1409, 'code'=>'36148', 'type'=>'village', 'name'=>'Village 36148, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1417, 'regionable_id'=>6681, 'regionable_type'=>'village']); //Payo Selincah/silincah
                DB::table('regions')->insert(['id'=>1418, 'parent'=>1409, 'code'=>'36149', 'type'=>'village', 'name'=>'Village 36149, Districts 3614, City 361, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1418, 'regionable_id'=>6682, 'regionable_type'=>'village']); //Sijenjang (sijinjang)
        DB::table('regions')->insert(['id'=>1419, 'parent'=>1262, 'code'=>'362', 'type'=>'city', 'name'=>'City 362, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1419, 'regionable_id'=>52, 'regionable_type'=>'city']); //Jambi city
            DB::table('regions')->insert(['id'=>1420, 'parent'=>1419, 'code'=>'3625', 'type'=>'districts', 'name'=>'Districts 3625, City 362, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1420, 'regionable_id'=>696, 'regionable_type'=>'districts']); //Pelayangan
                DB::table('regions')->insert(['id'=>1421, 'parent'=>1420, 'code'=>'36251', 'type'=>'village', 'name'=>'Village 36251, Districts 3625, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1421, 'regionable_id'=>6683, 'regionable_type'=>'village']); //Arab Melayu
                DB::table('regions')->insert(['id'=>1422, 'parent'=>1420, 'code'=>'36252', 'type'=>'village', 'name'=>'Village 36252, Districts 3625, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1422, 'regionable_id'=>6684, 'regionable_type'=>'village']); //Mudung Laut
                DB::table('regions')->insert(['id'=>1423, 'parent'=>1420, 'code'=>'36253', 'type'=>'village', 'name'=>'Village 36253, Districts 3625, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1423, 'regionable_id'=>6685, 'regionable_type'=>'village']); //Jelmu
                DB::table('regions')->insert(['id'=>1424, 'parent'=>1420, 'code'=>'36254', 'type'=>'village', 'name'=>'Village 36254, Districts 3625, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1424, 'regionable_id'=>6686, 'regionable_type'=>'village']); //Tengah
                DB::table('regions')->insert(['id'=>1425, 'parent'=>1420, 'code'=>'36255', 'type'=>'village', 'name'=>'Village 36255, Districts 3625, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1425, 'regionable_id'=>6687, 'regionable_type'=>'village']); //Tahtul Yaman
                DB::table('regions')->insert(['id'=>1426, 'parent'=>1420, 'code'=>'36256', 'type'=>'village', 'name'=>'Village 36256, Districts 3625, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1426, 'regionable_id'=>6688, 'regionable_type'=>'village']); //Tanjung Johor
            DB::table('regions')->insert(['id'=>1427, 'parent'=>1419, 'code'=>'3626', 'type'=>'districts', 'name'=>'Districts 3626, City 362, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1427, 'regionable_id'=>697, 'regionable_type'=>'districts']); //Danau Teluk
                DB::table('regions')->insert(['id'=>1428, 'parent'=>1427, 'code'=>'36261', 'type'=>'village', 'name'=>'Village 36261, Districts 3626, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1428, 'regionable_id'=>6689, 'regionable_type'=>'village']); //Ulu Gedong
                DB::table('regions')->insert(['id'=>1429, 'parent'=>1427, 'code'=>'36262', 'type'=>'village', 'name'=>'Village 36262, Districts 3626, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1429, 'regionable_id'=>6690, 'regionable_type'=>'village']); //Olak Kemang
                DB::table('regions')->insert(['id'=>1430, 'parent'=>1427, 'code'=>'36263', 'type'=>'village', 'name'=>'Village 36263, Districts 3626, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1430, 'regionable_id'=>6691, 'regionable_type'=>'village']); //Tanjung Pasir
                DB::table('regions')->insert(['id'=>1431, 'parent'=>1427, 'code'=>'36264', 'type'=>'village', 'name'=>'Village 36264, Districts 3626, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1431, 'regionable_id'=>6692, 'regionable_type'=>'village']); //Tanjung Raden
                DB::table('regions')->insert(['id'=>1432, 'parent'=>1427, 'code'=>'36265', 'type'=>'village', 'name'=>'Village 36265, Districts 3626, City 362, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1432, 'regionable_id'=>6693, 'regionable_type'=>'village']); //Pasir Panjang
        DB::table('regions')->insert(['id'=>1433, 'parent'=>1262, 'code'=>'363', 'type'=>'city', 'name'=>'City 363, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1433, 'regionable_id'=>53, 'regionable_type'=>'city']); //Muaro Jambi regencies
            DB::table('regions')->insert(['id'=>1434, 'parent'=>1433, 'code'=>'3636', 'type'=>'districts', 'name'=>'Districts 3636, City 363, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1434, 'regionable_id'=>698, 'regionable_type'=>'districts']); //Jambi Luar Kota
            DB::table('regionables')->insert(['region_id'=>1434, 'regionable_id'=>699, 'regionable_type'=>'districts']); //Mestong
            DB::table('regionables')->insert(['region_id'=>1434, 'regionable_id'=>700, 'regionable_type'=>'districts']); //Sungai Gelam
            DB::table('regionables')->insert(['region_id'=>1434, 'regionable_id'=>701, 'regionable_type'=>'districts']); //Bahar Selatan
            DB::table('regionables')->insert(['region_id'=>1434, 'regionable_id'=>702, 'regionable_type'=>'districts']); //Bahar Utara
            DB::table('regionables')->insert(['region_id'=>1434, 'regionable_id'=>703, 'regionable_type'=>'districts']); //Sungai Bahar
                DB::table('regions')->insert(['id'=>1435, 'parent'=>1434, 'code'=>'36365', 'type'=>'village', 'name'=>'Village 36365, Districts 3636, City 363, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6743, 'regionable_type'=>'village']); //Adipura Kencana
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6744, 'regionable_type'=>'village']); //Bukit Jaya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6745, 'regionable_type'=>'village']); //Bukit Subur
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6746, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6747, 'regionable_type'=>'village']); //Tanjung Baru
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6748, 'regionable_type'=>'village']); //Tanjung Lebar
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6749, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6750, 'regionable_type'=>'village']); //Tanjungmulya (tanjung Mulia)
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6751, 'regionable_type'=>'village']); //Trijaya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6752, 'regionable_type'=>'village']); //Ujung Tanjung
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6753, 'regionable_type'=>'village']); //Bahar Mulya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6754, 'regionable_type'=>'village']); //Bukit Mulya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6755, 'regionable_type'=>'village']); //Markanding
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6756, 'regionable_type'=>'village']); //Matra Manunggal
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6757, 'regionable_type'=>'village']); //Mulya Jaya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6758, 'regionable_type'=>'village']); //Pinang Tinggi
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6759, 'regionable_type'=>'village']); //Sumber Mulya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6760, 'regionable_type'=>'village']); //Sungai Dayo
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6761, 'regionable_type'=>'village']); //Talang Bukit
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6762, 'regionable_type'=>'village']); //Talang Datar
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6764, 'regionable_type'=>'village']); //Bakti Mulya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6765, 'regionable_type'=>'village']); //Berkah (desa Berkah)
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6766, 'regionable_type'=>'village']); //Bukit Makmur
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6767, 'regionable_type'=>'village']); //Bukit Mas
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6768, 'regionable_type'=>'village']); //Marga Manunggal Jaya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6769, 'regionable_type'=>'village']); //Marga Mulya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6770, 'regionable_type'=>'village']); //Mekarsari Makmur
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6771, 'regionable_type'=>'village']); //Panca Bakti
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6772, 'regionable_type'=>'village']); //Panca Mulya
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6773, 'regionable_type'=>'village']); //Suka Makmur
                DB::table('regionables')->insert(['region_id'=>1435, 'regionable_id'=>6774, 'regionable_type'=>'village']); //Tanjung Harapan
            DB::table('regions')->insert(['id'=>1436, 'parent'=>1433, 'code'=>'3637', 'type'=>'districts', 'name'=>'Districts 3637, City 363, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1436, 'regionable_id'=>700, 'regionable_type'=>'districts']); //Sungai Gelam
            DB::table('regionables')->insert(['region_id'=>1436, 'regionable_id'=>702, 'regionable_type'=>'districts']); //Bahar Utara
            DB::table('regionables')->insert(['region_id'=>1436, 'regionable_id'=>704, 'regionable_type'=>'districts']); //Kumpeh
            DB::table('regionables')->insert(['region_id'=>1436, 'regionable_id'=>705, 'regionable_type'=>'districts']); //Taman Rajo / Rejo
            DB::table('regionables')->insert(['region_id'=>1436, 'regionable_id'=>706, 'regionable_type'=>'districts']); //Kumpeh Ulu
                DB::table('regions')->insert(['id'=>1437, 'parent'=>1436, 'code'=>'36373', 'type'=>'village', 'name'=>'Village 36373, Districts 3637, City 363, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6733, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6734, 'regionable_type'=>'village']); //Mingkung Jay
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6735, 'regionable_type'=>'village']); //Parit
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6736, 'regionable_type'=>'village']); //Petaling Jaya
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6737, 'regionable_type'=>'village']); //Sido Mukti
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6738, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6739, 'regionable_type'=>'village']); //Sungai Gelam
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6740, 'regionable_type'=>'village']); //Tangkit
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6741, 'regionable_type'=>'village']); //Tangkit Baru
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6742, 'regionable_type'=>'village']); //Trimulya Jaya
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6763, 'regionable_type'=>'village']); //Sumber Jaya
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6802, 'regionable_type'=>'village']); //Arang Arang
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6803, 'regionable_type'=>'village']); //Kasang Kota Karang
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6804, 'regionable_type'=>'village']); //Kasang Kumpeh
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6805, 'regionable_type'=>'village']); //Kasang Lopak Alai
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6806, 'regionable_type'=>'village']); //Kasang Pudak
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6807, 'regionable_type'=>'village']); //Kota/koto Karang
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6808, 'regionable_type'=>'village']); //Lopak Alai
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6809, 'regionable_type'=>'village']); //Muara Kumpeh
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6810, 'regionable_type'=>'village']); //Pemunduran
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6811, 'regionable_type'=>'village']); //Pudak
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6812, 'regionable_type'=>'village']); //Ramin
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6813, 'regionable_type'=>'village']); //Sakean
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6814, 'regionable_type'=>'village']); //Sipin Teluk Duren
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6815, 'regionable_type'=>'village']); //Solok
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6816, 'regionable_type'=>'village']); //Sungai Terap
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6817, 'regionable_type'=>'village']); //Tarikan
                DB::table('regionables')->insert(['region_id'=>1437, 'regionable_id'=>6818, 'regionable_type'=>'village']); //Teluk Raya
            DB::table('regions')->insert(['id'=>1438, 'parent'=>1433, 'code'=>'3638', 'type'=>'districts', 'name'=>'Districts 3638, City 363, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1438, 'regionable_id'=>698, 'regionable_type'=>'districts']); //Jambi Luar Kota
            DB::table('regionables')->insert(['region_id'=>1438, 'regionable_id'=>705, 'regionable_type'=>'districts']); //Taman Rajo / Rejo
            DB::table('regionables')->insert(['region_id'=>1438, 'regionable_id'=>707, 'regionable_type'=>'districts']); //Sekernan
            DB::table('regionables')->insert(['region_id'=>1438, 'regionable_id'=>708, 'regionable_type'=>'districts']); //Maro Sebo
                DB::table('regions')->insert(['id'=>1439, 'parent'=>1438, 'code'=>'36382', 'type'=>'village', 'name'=>'Village 36382, Districts 3638, City 363, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6713, 'regionable_type'=>'village']); //Maro Sebo
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6794, 'regionable_type'=>'village']); //Kemingking Dalam
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6795, 'regionable_type'=>'village']); //Kemingking Luar
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6796, 'regionable_type'=>'village']); //Kunangan
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6797, 'regionable_type'=>'village']); //Mudo
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6798, 'regionable_type'=>'village']); //Sekumbung
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6799, 'regionable_type'=>'village']); //Talang Duku
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6800, 'regionable_type'=>'village']); //Tebat Patah
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6801, 'regionable_type'=>'village']); //Teluk Jambu
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6835, 'regionable_type'=>'village']); //Bakung
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6836, 'regionable_type'=>'village']); //Baru
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6837, 'regionable_type'=>'village']); //Danau Kedap
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6838, 'regionable_type'=>'village']); //Danau Lamo
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6839, 'regionable_type'=>'village']); //Jambi Kecil
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6840, 'regionable_type'=>'village']); //Jambi Kulo/tulo
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6841, 'regionable_type'=>'village']); //Lubuk Raman
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6842, 'regionable_type'=>'village']); //Muara/muaro Jambi
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6843, 'regionable_type'=>'village']); //Mudung Darat
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6844, 'regionable_type'=>'village']); //Niaso
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6845, 'regionable_type'=>'village']); //Setiris
                DB::table('regionables')->insert(['region_id'=>1439, 'regionable_id'=>6846, 'regionable_type'=>'village']); //Tanjung Katung
        DB::table('regions')->insert(['id'=>1440, 'parent'=>1262, 'code'=>'365', 'type'=>'city', 'name'=>'City 365, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1440, 'regionable_id'=>54, 'regionable_type'=>'city']); //Tanjung Jabung Barat regencies
        DB::table('regionables')->insert(['region_id'=>1440, 'regionable_id'=>55, 'regionable_type'=>'city']); //Tanjung Jabung Timur regencies
            DB::table('regions')->insert(['id'=>1441, 'parent'=>1440, 'code'=>'3657', 'type'=>'districts', 'name'=>'Districts 3657, City 365, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1441, 'regionable_id'=>722, 'regionable_type'=>'districts']); //Berbak
                DB::table('regions')->insert(['id'=>1442, 'parent'=>1441, 'code'=>'36572', 'type'=>'village', 'name'=>'Village 36572, Districts 3657, City 365, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1442, 'regionable_id'=>6981, 'regionable_type'=>'village']); //Rantau Makmur
                DB::table('regionables')->insert(['region_id'=>1442, 'regionable_id'=>6982, 'regionable_type'=>'village']); //Rantau Rasau
                DB::table('regionables')->insert(['region_id'=>1442, 'regionable_id'=>6983, 'regionable_type'=>'village']); //Rawasari
                DB::table('regionables')->insert(['region_id'=>1442, 'regionable_id'=>6984, 'regionable_type'=>'village']); //Simpang
                DB::table('regionables')->insert(['region_id'=>1442, 'regionable_id'=>6985, 'regionable_type'=>'village']); //Sungai Rambut
                DB::table('regionables')->insert(['region_id'=>1442, 'regionable_id'=>6986, 'regionable_type'=>'village']); //Telaga Lima (telago Limo)
        DB::table('regions')->insert(['id'=>1443, 'parent'=>1262, 'code'=>'366', 'type'=>'city', 'name'=>'City 366, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1443, 'regionable_id'=>56, 'regionable_type'=>'city']); //Batang Hari regencies
            DB::table('regions')->insert(['id'=>1444, 'parent'=>1443, 'code'=>'3661', 'type'=>'districts', 'name'=>'Districts 3661, City 366, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1444, 'regionable_id'=>733, 'regionable_type'=>'districts']); //Muara Bulian
            DB::table('regionables')->insert(['region_id'=>1444, 'regionable_id'=>734, 'regionable_type'=>'districts']); //Bajubang
                DB::table('regions')->insert(['id'=>1445, 'parent'=>1444, 'code'=>'36611', 'type'=>'village', 'name'=>'Village 36611, Districts 3661, City 366, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7074, 'regionable_type'=>'village']); //Aro
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7075, 'regionable_type'=>'village']); //Bajubang Laut
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7076, 'regionable_type'=>'village']); //Kilangan
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7077, 'regionable_type'=>'village']); //Malapari
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7078, 'regionable_type'=>'village']); //Muara Singoan
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7079, 'regionable_type'=>'village']); //Napal Sisik
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7080, 'regionable_type'=>'village']); //Olak
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7081, 'regionable_type'=>'village']); //Pasar Baru
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7082, 'regionable_type'=>'village']); //Pasar Terusan
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7083, 'regionable_type'=>'village']); //Rambahan (pelayangan Rambahan)
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7084, 'regionable_type'=>'village']); //Rantau Puri
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7085, 'regionable_type'=>'village']); //Rengas Condong
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7086, 'regionable_type'=>'village']); //Simpang Terusan
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7087, 'regionable_type'=>'village']); //Singkawang
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7088, 'regionable_type'=>'village']); //Sungai Baung
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7089, 'regionable_type'=>'village']); //Sungai Buluh
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7090, 'regionable_type'=>'village']); //Tenam
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7094, 'regionable_type'=>'village']); //Bajubang
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7095, 'regionable_type'=>'village']); //Batin
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7096, 'regionable_type'=>'village']); //Bungku
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7097, 'regionable_type'=>'village']); //Ladang Peris
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7098, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7099, 'regionable_type'=>'village']); //Penerokan
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7100, 'regionable_type'=>'village']); //Petajen (petajin)
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7101, 'regionable_type'=>'village']); //Pompa Air
                DB::table('regionables')->insert(['region_id'=>1445, 'regionable_id'=>7102, 'regionable_type'=>'village']); //Sungkai
            DB::table('regions')->insert(['id'=>1446, 'parent'=>1443, 'code'=>'3665', 'type'=>'districts', 'name'=>'Districts 3665, City 366, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1446, 'regionable_id'=>735, 'regionable_type'=>'districts']); //Muara Tembesi
            DB::table('regionables')->insert(['region_id'=>1446, 'regionable_id'=>736, 'regionable_type'=>'districts']); //Mersam
            DB::table('regionables')->insert(['region_id'=>1446, 'regionable_id'=>737, 'regionable_type'=>'districts']); //Maro Sebo Ulu
            DB::table('regionables')->insert(['region_id'=>1446, 'regionable_id'=>738, 'regionable_type'=>'districts']); //Maro Sebo Ilir
            DB::table('regionables')->insert(['region_id'=>1446, 'regionable_id'=>739, 'regionable_type'=>'districts']); //Batin Xxiv
            DB::table('regionables')->insert(['region_id'=>1446, 'regionable_id'=>740, 'regionable_type'=>'districts']); //Pemayung
                DB::table('regions')->insert(['id'=>1447, 'parent'=>1446, 'code'=>'36657', 'type'=>'village', 'name'=>'Village 36657, Districts 3665, City 366, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7169, 'regionable_type'=>'village']); //Awin
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7170, 'regionable_type'=>'village']); //Bukit Sare
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7171, 'regionable_type'=>'village']); //Jembatan Mas
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7172, 'regionable_type'=>'village']); //Kaos
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7173, 'regionable_type'=>'village']); //Kuap
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7174, 'regionable_type'=>'village']); //Kubu Kandang
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7175, 'regionable_type'=>'village']); //Lopak Aur
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7176, 'regionable_type'=>'village']); //Lubuk Ruso
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7177, 'regionable_type'=>'village']); //Olak Rambahan
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7178, 'regionable_type'=>'village']); //Pulau Betung
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7179, 'regionable_type'=>'village']); //Pulau Raman
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7180, 'regionable_type'=>'village']); //Selat
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7181, 'regionable_type'=>'village']); //Senaning
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7182, 'regionable_type'=>'village']); //Serasah
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7183, 'regionable_type'=>'village']); //Simpang Kubu Kandang
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7184, 'regionable_type'=>'village']); //Tebing Tinggi
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7185, 'regionable_type'=>'village']); //Teluk
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7186, 'regionable_type'=>'village']); //Teluk Ketapang
                DB::table('regionables')->insert(['region_id'=>1447, 'regionable_id'=>7187, 'regionable_type'=>'village']); //Ture
        DB::table('regions')->insert(['id'=>1448, 'parent'=>1262, 'code'=>'367', 'type'=>'city', 'name'=>'City 367, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1448, 'regionable_id'=>55, 'regionable_type'=>'city']); //Tanjung Jabung Timur regencies
            DB::table('regions')->insert(['id'=>1449, 'parent'=>1448, 'code'=>'3676', 'type'=>'districts', 'name'=>'Districts 3676, City 367, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1449, 'regionable_id'=>723, 'regionable_type'=>'districts']); //Muara Sabak Timur
            DB::table('regionables')->insert(['region_id'=>1449, 'regionable_id'=>724, 'regionable_type'=>'districts']); //Kuala Jambi
            DB::table('regionables')->insert(['region_id'=>1449, 'regionable_id'=>725, 'regionable_type'=>'districts']); //Muara Sabak Barat
            DB::table('regionables')->insert(['region_id'=>1449, 'regionable_id'=>726, 'regionable_type'=>'districts']); //Dendang
            DB::table('regionables')->insert(['region_id'=>1449, 'regionable_id'=>727, 'regionable_type'=>'districts']); //Mendahara
            DB::table('regionables')->insert(['region_id'=>1449, 'regionable_id'=>728, 'regionable_type'=>'districts']); //Mendahara Ulu
            DB::table('regionables')->insert(['region_id'=>1449, 'regionable_id'=>729, 'regionable_type'=>'districts']); //Geragai
                DB::table('regions')->insert(['id'=>1450, 'parent'=>1449, 'code'=>'36764', 'type'=>'village', 'name'=>'Village 36764, Districts 3676, City 367, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7019, 'regionable_type'=>'village']); //Bhakti/bakti Idaman
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7020, 'regionable_type'=>'village']); //Lagan Ilir
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7021, 'regionable_type'=>'village']); //Mendahara Ilir
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7022, 'regionable_type'=>'village']); //Mendahara Tengah
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7023, 'regionable_type'=>'village']); //Merbau
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7024, 'regionable_type'=>'village']); //Pangkal Duri Ilir
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7025, 'regionable_type'=>'village']); //Pangkalan/pangkal Duri
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7026, 'regionable_type'=>'village']); //Sinar Kalimantan
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7027, 'regionable_type'=>'village']); //Sungai Tawar
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7028, 'regionable_type'=>'village']); //Bukit Tempurung
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7029, 'regionable_type'=>'village']); //Mencolok
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7030, 'regionable_type'=>'village']); //Pematang Rahim
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7031, 'regionable_type'=>'village']); //Simpang Tuan
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7032, 'regionable_type'=>'village']); //Sinar Wajo
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7033, 'regionable_type'=>'village']); //Sungai Beras
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7034, 'regionable_type'=>'village']); //Sungai Toman
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7035, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7036, 'regionable_type'=>'village']); //Lagan Tengah
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7037, 'regionable_type'=>'village']); //Lagan Ulu
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7038, 'regionable_type'=>'village']); //Pandan Jaya
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7039, 'regionable_type'=>'village']); //Pandan Lagan/logan
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7040, 'regionable_type'=>'village']); //Pandan Makmur
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7041, 'regionable_type'=>'village']); //Pandan Sejahtera
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7042, 'regionable_type'=>'village']); //Rantau Karya
                DB::table('regionables')->insert(['region_id'=>1450, 'regionable_id'=>7043, 'regionable_type'=>'village']); //Suka Maju
            DB::table('regions')->insert(['id'=>1451, 'parent'=>1448, 'code'=>'3677', 'type'=>'districts', 'name'=>'Districts 3677, City 367, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1451, 'regionable_id'=>730, 'regionable_type'=>'districts']); //Nipah Panjang
            DB::table('regionables')->insert(['region_id'=>1451, 'regionable_id'=>731, 'regionable_type'=>'districts']); //Rantau Rasau
            DB::table('regionables')->insert(['region_id'=>1451, 'regionable_id'=>732, 'regionable_type'=>'districts']); //Sadu
                DB::table('regions')->insert(['id'=>1452, 'parent'=>1451, 'code'=>'36773', 'type'=>'village', 'name'=>'Village 36773, Districts 3677, City 367, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7065, 'regionable_type'=>'village']); //Air Hitam (laut)
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7066, 'regionable_type'=>'village']); //Labuhan Pering
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7067, 'regionable_type'=>'village']); //Remau Baku Tuo
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7068, 'regionable_type'=>'village']); //Sungai Benuh
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7069, 'regionable_type'=>'village']); //Sungai Cemara
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7070, 'regionable_type'=>'village']); //Sungai Itik
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7071, 'regionable_type'=>'village']); //Sungai Jambat
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7072, 'regionable_type'=>'village']); //Sungai Lokan
                DB::table('regionables')->insert(['region_id'=>1452, 'regionable_id'=>7073, 'regionable_type'=>'village']); //Sungai Sayang
        DB::table('regions')->insert(['id'=>1453, 'parent'=>1262, 'code'=>'371', 'type'=>'city', 'name'=>'City 371, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1453, 'regionable_id'=>57, 'regionable_type'=>'city']); //Sungaipenuh city
        DB::table('regionables')->insert(['region_id'=>1453, 'regionable_id'=>58, 'regionable_type'=>'city']); //Kerinci regencies
            DB::table('regions')->insert(['id'=>1454, 'parent'=>1453, 'code'=>'3715', 'type'=>'districts', 'name'=>'Districts 3715, City 371, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1454, 'regionable_id'=>744, 'regionable_type'=>'districts']); //Pesisir Bukit
            DB::table('regionables')->insert(['region_id'=>1454, 'regionable_id'=>746, 'regionable_type'=>'districts']); //Koto Baru
            DB::table('regionables')->insert(['region_id'=>1454, 'regionable_id'=>747, 'regionable_type'=>'districts']); //Hamparan Rawang
            DB::table('regionables')->insert(['region_id'=>1454, 'regionable_id'=>749, 'regionable_type'=>'districts']); //Air Hangat Timur
                DB::table('regions')->insert(['id'=>1455, 'parent'=>1454, 'code'=>'37152', 'type'=>'village', 'name'=>'Village 37152, Districts 3715, City 371, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7215, 'regionable_type'=>'village']); //Koto Dua / Duo
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7216, 'regionable_type'=>'village']); //Seberang
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7217, 'regionable_type'=>'village']); //Sumur Gedang
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7218, 'regionable_type'=>'village']); //Sungai Liuk
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7225, 'regionable_type'=>'village']); //Baru Sri Menanti
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7226, 'regionable_type'=>'village']); //Dujung Sakti
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7227, 'regionable_type'=>'village']); //Kampung Tengah
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7228, 'regionable_type'=>'village']); //Koto Baru (kota Baru)
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7229, 'regionable_type'=>'village']); //Koto Limau Manis
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7230, 'regionable_type'=>'village']); //Permai Indah
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7231, 'regionable_type'=>'village']); //Cempaka
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7232, 'regionable_type'=>'village']); //Dusun Diilir
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7233, 'regionable_type'=>'village']); //Kampung Dalam
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7234, 'regionable_type'=>'village']); //Kampung Diilir
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7235, 'regionable_type'=>'village']); //Koto Beringin
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7236, 'regionable_type'=>'village']); //Koto Dian
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7237, 'regionable_type'=>'village']); //Koto Teluk
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7238, 'regionable_type'=>'village']); //Larik Kemahan
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7239, 'regionable_type'=>'village']); //Maliki Air
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7240, 'regionable_type'=>'village']); //Paling Serumpun
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7241, 'regionable_type'=>'village']); //Simpang Tiga Rawang
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7242, 'regionable_type'=>'village']); //Tanjung
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7243, 'regionable_type'=>'village']); //Tanjung Muda/mudo
                DB::table('regionables')->insert(['region_id'=>1455, 'regionable_id'=>7257, 'regionable_type'=>'village']); //Sungai Deras
            DB::table('regions')->insert(['id'=>1456, 'parent'=>1453, 'code'=>'3716', 'type'=>'districts', 'name'=>'Districts 3716, City 371, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>749, 'regionable_type'=>'districts']); //Air Hangat Timur
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>750, 'regionable_type'=>'districts']); //Air Hangat Barat
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>751, 'regionable_type'=>'districts']); //Air Hangat
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>752, 'regionable_type'=>'districts']); //Depati Tujuh
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>753, 'regionable_type'=>'districts']); //Gunung Kerinci
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>754, 'regionable_type'=>'districts']); //Siulak
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>755, 'regionable_type'=>'districts']); //Siulak Mukai
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>756, 'regionable_type'=>'districts']); //Kayu Aro
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>757, 'regionable_type'=>'districts']); //Kayu Aro Barat
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>758, 'regionable_type'=>'districts']); //Gunung Tujuh
            DB::table('regionables')->insert(['region_id'=>1456, 'regionable_id'=>759, 'regionable_type'=>'districts']); //Sitinjau Laut
                DB::table('regions')->insert(['id'=>1457, 'parent'=>1456, 'code'=>'37163', 'type'=>'village', 'name'=>'Village 37163, Districts 3716, City 371, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7386, 'regionable_type'=>'village']); //Batang Sangir
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7387, 'regionable_type'=>'village']); //Bedeng Baru
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7388, 'regionable_type'=>'village']); //Bendung Air Timur
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7389, 'regionable_type'=>'village']); //Kersik Tuo
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7390, 'regionable_type'=>'village']); //Koto Baru
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7391, 'regionable_type'=>'village']); //Koto Panjang
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7392, 'regionable_type'=>'village']); //Koto Periang
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7393, 'regionable_type'=>'village']); //Koto Tengah
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7394, 'regionable_type'=>'village']); //Koto Tuo
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7395, 'regionable_type'=>'village']); //Lindung Jaya
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7396, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7397, 'regionable_type'=>'village']); //Mekar Sari
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7398, 'regionable_type'=>'village']); //Pasar Sungai Tanduk
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7399, 'regionable_type'=>'village']); //Renah Kasak
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7400, 'regionable_type'=>'village']); //Sangir
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7401, 'regionable_type'=>'village']); //Sangir Tengah
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7402, 'regionable_type'=>'village']); //Sungai Bendung Air
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7403, 'regionable_type'=>'village']); //Sungai Dalam
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7404, 'regionable_type'=>'village']); //Sungai Sampun
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7405, 'regionable_type'=>'village']); //Sungai Tanduk
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7406, 'regionable_type'=>'village']); //Tanjung Bungo
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7407, 'regionable_type'=>'village']); //Batu Hampar
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7408, 'regionable_type'=>'village']); //Bedeng Delapan
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7409, 'regionable_type'=>'village']); //Bedeng Dua
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7410, 'regionable_type'=>'village']); //Bento
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7411, 'regionable_type'=>'village']); //Ensatu
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7412, 'regionable_type'=>'village']); //Giri Mulyo
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7413, 'regionable_type'=>'village']); //Gunung Labu
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7414, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7415, 'regionable_type'=>'village']); //Kebun Baru
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7416, 'regionable_type'=>'village']); //Pasar Minggu
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7417, 'regionable_type'=>'village']); //Patok Empat
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7418, 'regionable_type'=>'village']); //Sako Duo/dua
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7419, 'regionable_type'=>'village']); //Sungai Asam
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7420, 'regionable_type'=>'village']); //Sungai Jambu
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7421, 'regionable_type'=>'village']); //Sungai Kering
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7422, 'regionable_type'=>'village']); //Sungai Lintang
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7423, 'regionable_type'=>'village']); //Sungai Renah
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7424, 'regionable_type'=>'village']); //Bengkolan Dua
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7425, 'regionable_type'=>'village']); //Bumbun Duri
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7426, 'regionable_type'=>'village']); //Jernih Jaya
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7427, 'regionable_type'=>'village']); //Lubuk Pauh
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7428, 'regionable_type'=>'village']); //Pauh Tinggi
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7429, 'regionable_type'=>'village']); //Pelompek
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7430, 'regionable_type'=>'village']); //Pelompek Pasar Baru
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7431, 'regionable_type'=>'village']); //Pesisir Bukit
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7432, 'regionable_type'=>'village']); //Sungai Jernih
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7433, 'regionable_type'=>'village']); //Sungai Rumpun
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7434, 'regionable_type'=>'village']); //Sungai Sikai
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7435, 'regionable_type'=>'village']); //Tangkil
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7436, 'regionable_type'=>'village']); //Telun Berasap
                DB::table('regionables')->insert(['region_id'=>1457, 'regionable_id'=>7437, 'regionable_type'=>'village']); //Kayuaro Ambai
            DB::table('regions')->insert(['id'=>1458, 'parent'=>1453, 'code'=>'3717', 'type'=>'districts', 'name'=>'Districts 3717, City 371, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1458, 'regionable_id'=>748, 'regionable_type'=>'districts']); //Tanah Kampung
            DB::table('regionables')->insert(['region_id'=>1458, 'regionable_id'=>759, 'regionable_type'=>'districts']); //Sitinjau Laut
            DB::table('regionables')->insert(['region_id'=>1458, 'regionable_id'=>760, 'regionable_type'=>'districts']); //Danau Kerinci
            DB::table('regionables')->insert(['region_id'=>1458, 'regionable_id'=>761, 'regionable_type'=>'districts']); //Keliling Danau
            DB::table('regionables')->insert(['region_id'=>1458, 'regionable_id'=>762, 'regionable_type'=>'districts']); //Gunung Raya
            DB::table('regionables')->insert(['region_id'=>1458, 'regionable_id'=>763, 'regionable_type'=>'districts']); //Bukitkerman
            DB::table('regionables')->insert(['region_id'=>1458, 'regionable_id'=>764, 'regionable_type'=>'districts']); //Batang Merangin
                DB::table('regions')->insert(['id'=>1459, 'parent'=>1458, 'code'=>'37175', 'type'=>'village', 'name'=>'Village 37175, Districts 3717, City 371, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7528, 'regionable_type'=>'village']); //Karang Pandan
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7529, 'regionable_type'=>'village']); //Muak
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7530, 'regionable_type'=>'village']); //Pengasi Baru
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7531, 'regionable_type'=>'village']); //Pengasi Lama
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7532, 'regionable_type'=>'village']); //Pondok
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7533, 'regionable_type'=>'village']); //Pulaupandan
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7534, 'regionable_type'=>'village']); //Pulausangkar
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7535, 'regionable_type'=>'village']); //Baru Pulau Sangkar
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7536, 'regionable_type'=>'village']); //Batang Merangin
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7537, 'regionable_type'=>'village']); //Lubuk Paku
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7538, 'regionable_type'=>'village']); //Muara Hemat
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7539, 'regionable_type'=>'village']); //Pasar Tamiai
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7540, 'regionable_type'=>'village']); //Pematang Lingkung
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7541, 'regionable_type'=>'village']); //Seberang Merangin
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7542, 'regionable_type'=>'village']); //Tamiai
                DB::table('regionables')->insert(['region_id'=>1459, 'regionable_id'=>7543, 'regionable_type'=>'village']); //Tarutung
        DB::table('regions')->insert(['id'=>1460, 'parent'=>1262, 'code'=>'372', 'type'=>'city', 'name'=>'City 372, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1460, 'regionable_id'=>59, 'regionable_type'=>'city']); //Bungo regencies
        DB::table('regionables')->insert(['region_id'=>1460, 'regionable_id'=>60, 'regionable_type'=>'city']); //Tebo regencies
            DB::table('regions')->insert(['id'=>1461, 'parent'=>1460, 'code'=>'3725', 'type'=>'districts', 'name'=>'Districts 3725, City 372, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1461, 'regionable_id'=>772, 'regionable_type'=>'districts']); //Pelepat Ilir
            DB::table('regionables')->insert(['region_id'=>1461, 'regionable_id'=>773, 'regionable_type'=>'districts']); //Tanah Tumbuh
            DB::table('regionables')->insert(['region_id'=>1461, 'regionable_id'=>774, 'regionable_type'=>'districts']); //Bathin Ii Pelayang
            DB::table('regionables')->insert(['region_id'=>1461, 'regionable_id'=>775, 'regionable_type'=>'districts']); //Jujuhan Ilir
            DB::table('regionables')->insert(['region_id'=>1461, 'regionable_id'=>776, 'regionable_type'=>'districts']); //Jujuhan
            DB::table('regionables')->insert(['region_id'=>1461, 'regionable_id'=>782, 'regionable_type'=>'districts']); //Vii Koto
            DB::table('regionables')->insert(['region_id'=>1461, 'regionable_id'=>783, 'regionable_type'=>'districts']); //Vii Koto Ilir
                DB::table('regions')->insert(['id'=>1462, 'parent'=>1461, 'code'=>'37259', 'type'=>'village', 'name'=>'Village 37259, Districts 3725, City 372, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7698, 'regionable_type'=>'village']); //Aur Cino
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7699, 'regionable_type'=>'village']); //Dusun Baru
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7700, 'regionable_type'=>'village']); //Kuamang
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7701, 'regionable_type'=>'village']); //Muara Niro
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7702, 'regionable_type'=>'village']); //Muara Tabun
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7703, 'regionable_type'=>'village']); //Pucuk Jambi
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7704, 'regionable_type'=>'village']); //Sungai Abang
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7705, 'regionable_type'=>'village']); //Tabun
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7706, 'regionable_type'=>'village']); //Teluk Kayu Putih
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7707, 'regionable_type'=>'village']); //Teluk Lancang
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7708, 'regionable_type'=>'village']); //Balai Rajo
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7709, 'regionable_type'=>'village']); //Cermin Alam
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7710, 'regionable_type'=>'village']); //Paseban
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7711, 'regionable_type'=>'village']); //Pasir Mayang
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7712, 'regionable_type'=>'village']); //Sungai Karang
                DB::table('regionables')->insert(['region_id'=>1462, 'regionable_id'=>7713, 'regionable_type'=>'village']); //Teluk Kepayang Pulau Indah
        DB::table('regions')->insert(['id'=>1463, 'parent'=>1262, 'code'=>'373', 'type'=>'city', 'name'=>'City 373, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1463, 'regionable_id'=>61, 'regionable_type'=>'city']); //Merangin regencies
        DB::table('regionables')->insert(['region_id'=>1463, 'regionable_id'=>62, 'regionable_type'=>'city']); //Sarolangun regencies
            DB::table('regions')->insert(['id'=>1464, 'parent'=>1463, 'code'=>'3738', 'type'=>'districts', 'name'=>'Districts 3738, City 373, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1464, 'regionable_id'=>818, 'regionable_type'=>'districts']); //Limun
            DB::table('regionables')->insert(['region_id'=>1464, 'regionable_id'=>819, 'regionable_type'=>'districts']); //Cermin Nan Gadang
                DB::table('regions')->insert(['id'=>1465, 'parent'=>1464, 'code'=>'37382', 'type'=>'village', 'name'=>'Village 37382, Districts 3738, City 373, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8027, 'regionable_type'=>'village']); //Berkun
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8028, 'regionable_type'=>'village']); //Demang
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8029, 'regionable_type'=>'village']); //Lubuk Bedorong
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8030, 'regionable_type'=>'village']); //Meribung/maribung
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8031, 'regionable_type'=>'village']); //Mersip
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8032, 'regionable_type'=>'village']); //Moenti
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8033, 'regionable_type'=>'village']); //Muara Limun
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8034, 'regionable_type'=>'village']); //Muara Mansao
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8035, 'regionable_type'=>'village']); //Napal Melintang
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8036, 'regionable_type'=>'village']); //Panca Karya
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8037, 'regionable_type'=>'village']); //Pulau Pandan
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8038, 'regionable_type'=>'village']); //Ranggo
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8039, 'regionable_type'=>'village']); //Suka Damai
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8040, 'regionable_type'=>'village']); //Tanjung Raden
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8041, 'regionable_type'=>'village']); //Temalang
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8042, 'regionable_type'=>'village']); //Temenggung
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8043, 'regionable_type'=>'village']); //Kampung Tujuh
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8044, 'regionable_type'=>'village']); //Lubuk Resam
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8045, 'regionable_type'=>'village']); //Lubuk Resam Hilir
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8046, 'regionable_type'=>'village']); //Pemuncak (pemancak)
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8047, 'regionable_type'=>'village']); //Sekamis
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8048, 'regionable_type'=>'village']); //Sungaikeramat
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8049, 'regionable_type'=>'village']); //Tambang Tinggi
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8050, 'regionable_type'=>'village']); //Teluk Rendah
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8051, 'regionable_type'=>'village']); //Teluk Tigo
                DB::table('regionables')->insert(['region_id'=>1465, 'regionable_id'=>8052, 'regionable_type'=>'village']); //Tendah
        DB::table('regions')->insert(['id'=>1466, 'parent'=>1262, 'code'=>'374', 'type'=>'city', 'name'=>'City 374, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1466, 'regionable_id'=>62, 'regionable_type'=>'city']); //Sarolangun regencies
            DB::table('regions')->insert(['id'=>1467, 'parent'=>1466, 'code'=>'3748', 'type'=>'districts', 'name'=>'Districts 3748, City 374, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1467, 'regionable_id'=>820, 'regionable_type'=>'districts']); //Sarolangun
            DB::table('regionables')->insert(['region_id'=>1467, 'regionable_id'=>821, 'regionable_type'=>'districts']); //Bathin Viii (batin Viii)
            DB::table('regionables')->insert(['region_id'=>1467, 'regionable_id'=>822, 'regionable_type'=>'districts']); //Singkut
            DB::table('regionables')->insert(['region_id'=>1467, 'regionable_id'=>823, 'regionable_type'=>'districts']); //Pelawan
            DB::table('regionables')->insert(['region_id'=>1467, 'regionable_id'=>824, 'regionable_type'=>'districts']); //Batang Asai
                DB::table('regions')->insert(['id'=>1468, 'parent'=>1467, 'code'=>'37485', 'type'=>'village', 'name'=>'Village 37485, Districts 3748, City 374, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8111, 'regionable_type'=>'village']); //Bathin/batin Pengambang
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8112, 'regionable_type'=>'village']); //Batu Empang
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8113, 'regionable_type'=>'village']); //Bukit Berantai
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8114, 'regionable_type'=>'village']); //Bukit Kalimau Ulu
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8115, 'regionable_type'=>'village']); //Bukit Sulah
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8116, 'regionable_type'=>'village']); //Datuk Nan Duo
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8117, 'regionable_type'=>'village']); //Kasiro
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8118, 'regionable_type'=>'village']); //Kasiro Ilir
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8119, 'regionable_type'=>'village']); //Lubuk Bangkar
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8120, 'regionable_type'=>'village']); //Muaro/muara Air Dua
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8121, 'regionable_type'=>'village']); //Muaro/muara Cuban
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8122, 'regionable_type'=>'village']); //Muaro/muara Pemuat
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8123, 'regionable_type'=>'village']); //Padang Jering
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8124, 'regionable_type'=>'village']); //Paniban Baru
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8125, 'regionable_type'=>'village']); //Pekan Gedang
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8126, 'regionable_type'=>'village']); //Pulau Salak Baru
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8127, 'regionable_type'=>'village']); //Raden Anom
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8128, 'regionable_type'=>'village']); //Rantau Panjang
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8129, 'regionable_type'=>'village']); //Simpang Narso
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8130, 'regionable_type'=>'village']); //Sungai Baung
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8131, 'regionable_type'=>'village']); //Sungai Bemban
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8132, 'regionable_type'=>'village']); //Sungai Keradak
                DB::table('regionables')->insert(['region_id'=>1468, 'regionable_id'=>8133, 'regionable_type'=>'village']); //Tambak Ratu
            DB::table('regions')->insert(['id'=>1469, 'parent'=>1466, 'code'=>'3749', 'type'=>'districts', 'name'=>'Districts 3749, City 374, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1469, 'regionable_id'=>825, 'regionable_type'=>'districts']); //Pauh
            DB::table('regionables')->insert(['region_id'=>1469, 'regionable_id'=>826, 'regionable_type'=>'districts']); //Air Hitam
            DB::table('regionables')->insert(['region_id'=>1469, 'regionable_id'=>827, 'regionable_type'=>'districts']); //Mandiangin
                DB::table('regions')->insert(['id'=>1470, 'parent'=>1469, 'code'=>'37492', 'type'=>'village', 'name'=>'Village 37492, Districts 3749, City 374, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8157, 'regionable_type'=>'village']); //Bukit Peranginan
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8158, 'regionable_type'=>'village']); //Butang Baru
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8159, 'regionable_type'=>'village']); //Guruh Baru
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8160, 'regionable_type'=>'village']); //Gurun Mudo
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8161, 'regionable_type'=>'village']); //Gurun Tuo
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8162, 'regionable_type'=>'village']); //Gurun Tuo Simpang
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8163, 'regionable_type'=>'village']); //Jati Baru
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8164, 'regionable_type'=>'village']); //Jati Baru Mudo
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8165, 'regionable_type'=>'village']); //Jernang Baru
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8166, 'regionable_type'=>'village']); //Kerto Pati
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8167, 'regionable_type'=>'village']); //Kute Jaye
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8168, 'regionable_type'=>'village']); //Mandiangin
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8169, 'regionable_type'=>'village']); //Mandiangin Pasar
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8170, 'regionable_type'=>'village']); //Mandiangin Tuo
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8171, 'regionable_type'=>'village']); //Meranti Baru
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8172, 'regionable_type'=>'village']); //Meranti Jaya
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8173, 'regionable_type'=>'village']); //Muara Ketalo
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8174, 'regionable_type'=>'village']); //Pemusiran
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8175, 'regionable_type'=>'village']); //Petiduran Baru
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8176, 'regionable_type'=>'village']); //Rangkiling
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8177, 'regionable_type'=>'village']); //Rangkiling Simpang
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8178, 'regionable_type'=>'village']); //Simpang Gurun Tuo
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8179, 'regionable_type'=>'village']); //Simpang Kertopati
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8180, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8181, 'regionable_type'=>'village']); //Sungai Butang
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8182, 'regionable_type'=>'village']); //Sungairotan
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8183, 'regionable_type'=>'village']); //Talang Serdang
                DB::table('regionables')->insert(['region_id'=>1470, 'regionable_id'=>8184, 'regionable_type'=>'village']); //Taman Dewa (desa Taman Dewa)
        DB::table('regions')->insert(['id'=>1471, 'parent'=>1262, 'code'=>'375', 'type'=>'city', 'name'=>'City 375, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1471, 'regionable_id'=>60, 'regionable_type'=>'city']); //Tebo regencies
            DB::table('regions')->insert(['id'=>1472, 'parent'=>1471, 'code'=>'3755', 'type'=>'districts', 'name'=>'Districts 3755, City 375, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1472, 'regionable_id'=>784, 'regionable_type'=>'districts']); //Rimbo Ilir
            DB::table('regionables')->insert(['region_id'=>1472, 'regionable_id'=>785, 'regionable_type'=>'districts']); //Rimbo Bujang
            DB::table('regionables')->insert(['region_id'=>1472, 'regionable_id'=>786, 'regionable_type'=>'districts']); //Rimbo Ulu
            DB::table('regionables')->insert(['region_id'=>1472, 'regionable_id'=>787, 'regionable_type'=>'districts']); //Serai Serumpun
            DB::table('regionables')->insert(['region_id'=>1472, 'regionable_id'=>788, 'regionable_type'=>'districts']); //Tebo Ulu
                DB::table('regions')->insert(['id'=>1473, 'parent'=>1472, 'code'=>'37554', 'type'=>'village', 'name'=>'Village 37554, Districts 3755, City 375, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7737, 'regionable_type'=>'village']); //Bukit Pemuatan
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7738, 'regionable_type'=>'village']); //Napal Putih
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7739, 'regionable_type'=>'village']); //Pagar Puding Lamo
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7740, 'regionable_type'=>'village']); //Pinang Belai/balai
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7741, 'regionable_type'=>'village']); //Sako Makmur
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7742, 'regionable_type'=>'village']); //Sekutur Jaya
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7743, 'regionable_type'=>'village']); //Tanjung Aur Seberang
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7744, 'regionable_type'=>'village']); //Teluk Melintang
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7745, 'regionable_type'=>'village']); //Bungo Tanjung
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7746, 'regionable_type'=>'village']); //Jambu
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7747, 'regionable_type'=>'village']); //Lubuk Benteng
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7748, 'regionable_type'=>'village']); //Malako Intan
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7749, 'regionable_type'=>'village']); //Medan Seri Rambahan
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7750, 'regionable_type'=>'village']); //Pagar Puding
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7751, 'regionable_type'=>'village']); //Pulau Jelmu
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7752, 'regionable_type'=>'village']); //Pulau Panjang
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7753, 'regionable_type'=>'village']); //Pulau Temiang
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7754, 'regionable_type'=>'village']); //Rantau Langkap
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7755, 'regionable_type'=>'village']); //Sungai Rambai
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7756, 'regionable_type'=>'village']); //Tanjung Aur
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7757, 'regionable_type'=>'village']); //Teluk Kasai Rambahan
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7758, 'regionable_type'=>'village']); //Teluk Kembang Jambu
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7759, 'regionable_type'=>'village']); //Teluk Kuali
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7760, 'regionable_type'=>'village']); //Teluk Pandan Rambahan
                DB::table('regionables')->insert(['region_id'=>1473, 'regionable_id'=>7761, 'regionable_type'=>'village']); //Ulak Banjir Rambahan
            DB::table('regions')->insert(['id'=>1474, 'parent'=>1471, 'code'=>'3757', 'type'=>'districts', 'name'=>'Districts 3757, City 375, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1474, 'regionable_id'=>789, 'regionable_type'=>'districts']); //Tebo Tengah
            DB::table('regionables')->insert(['region_id'=>1474, 'regionable_id'=>790, 'regionable_type'=>'districts']); //Muara Tabir
            DB::table('regionables')->insert(['region_id'=>1474, 'regionable_id'=>791, 'regionable_type'=>'districts']); //Tebo Ilir
            DB::table('regionables')->insert(['region_id'=>1474, 'regionable_id'=>792, 'regionable_type'=>'districts']); //Tengah Ilir
            DB::table('regionables')->insert(['region_id'=>1474, 'regionable_id'=>793, 'regionable_type'=>'districts']); //Sumay
                DB::table('regions')->insert(['id'=>1475, 'parent'=>1474, 'code'=>'37573', 'type'=>'village', 'name'=>'Village 37573, Districts 3757, City 375, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7798, 'regionable_type'=>'village']); //Desa Semambu
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7799, 'regionable_type'=>'village']); //Jati Belarik
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7800, 'regionable_type'=>'village']); //Lembak Bungur
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7801, 'regionable_type'=>'village']); //Muara Sekalo
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7802, 'regionable_type'=>'village']); //Pemayungan (pemayongan)
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7803, 'regionable_type'=>'village']); //Puntikalo
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7804, 'regionable_type'=>'village']); //Suo Suo
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7805, 'regionable_type'=>'village']); //Tambun Arang
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7806, 'regionable_type'=>'village']); //Teluk Langkap
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7807, 'regionable_type'=>'village']); //Teluk Singkawang
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7808, 'regionable_type'=>'village']); //Teriti
                DB::table('regionables')->insert(['region_id'=>1475, 'regionable_id'=>7809, 'regionable_type'=>'village']); //Tuo Sumay

        //Lampung
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>18, 'regionable_type'=>'province']); //Lampung
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>225, 'regionable_type'=>'city']); //Metro city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>226, 'regionable_type'=>'city']); //Lampung Tengah regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>227, 'regionable_type'=>'city']); //Lampung Timur regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>228, 'regionable_type'=>'city']); //Tulang Bawang Barat regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>229, 'regionable_type'=>'city']); //Lampung Utara regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>230, 'regionable_type'=>'city']); //Tulang Bawang regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>231, 'regionable_type'=>'city']); //Mesuji regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>232, 'regionable_type'=>'city']); //Way Kanan regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>233, 'regionable_type'=>'city']); //Lampung Barat regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>234, 'regionable_type'=>'city']); //Pesisir Barat regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>235, 'regionable_type'=>'city']); //Bandar Lampung city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>236, 'regionable_type'=>'city']); //Lampung Selatan regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>237, 'regionable_type'=>'city']); //Pesawaran regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>238, 'regionable_type'=>'city']); //Pringsewu regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>239, 'regionable_type'=>'city']); //Tanggamus regencies

        DB::table('regions')->insert(['id'=>1476, 'parent'=>1262, 'code'=>'341', 'type'=>'city', 'name'=>'City 341, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1476, 'regionable_id'=>225, 'regionable_type'=>'city']); //Metro city
        DB::table('regionables')->insert(['region_id'=>1476, 'regionable_id'=>226, 'regionable_type'=>'city']); //Lampung Tengah regencies
        DB::table('regionables')->insert(['region_id'=>1476, 'regionable_id'=>227, 'regionable_type'=>'city']); //Lampung Timur regencies
            DB::table('regions')->insert(['id'=>1477, 'parent'=>1476, 'code'=>'3418', 'type'=>'districts', 'name'=>'Districts 3418, City 341, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1477, 'regionable_id'=>3998, 'regionable_type'=>'districts']); //Bumi Agung
                DB::table('regions')->insert(['id'=>1478, 'parent'=>1477, 'code'=>'34182', 'type'=>'village', 'name'=>'Village 34182, Districts 3418, City 341, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1478, 'regionable_id'=>45389, 'regionable_type'=>'village']); //Bumi Tinggi
                DB::table('regionables')->insert(['region_id'=>1478, 'regionable_id'=>45390, 'regionable_type'=>'village']); //Catur Swako
                DB::table('regionables')->insert(['region_id'=>1478, 'regionable_id'=>45391, 'regionable_type'=>'village']); //Donomulyo
                DB::table('regionables')->insert(['region_id'=>1478, 'regionable_id'=>45392, 'regionable_type'=>'village']); //Lehan
                DB::table('regionables')->insert(['region_id'=>1478, 'regionable_id'=>45393, 'regionable_type'=>'village']); //Marga Mulya
                DB::table('regionables')->insert(['region_id'=>1478, 'regionable_id'=>45394, 'regionable_type'=>'village']); //Mulyo Asri
                DB::table('regionables')->insert(['region_id'=>1478, 'regionable_id'=>45395, 'regionable_type'=>'village']); //Nyampir
            DB::table('regions')->insert(['id'=>1479, 'parent'=>1476, 'code'=>'3419', 'type'=>'districts', 'name'=>'Districts 3419, City 341, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1479, 'regionable_id'=>3999, 'regionable_type'=>'districts']); //Purbolinggo
            DB::table('regionables')->insert(['region_id'=>1479, 'regionable_id'=>4000, 'regionable_type'=>'districts']); //Sukadana
            DB::table('regionables')->insert(['region_id'=>1479, 'regionable_id'=>4001, 'regionable_type'=>'districts']); //Braja Slebah
            DB::table('regionables')->insert(['region_id'=>1479, 'regionable_id'=>4002, 'regionable_type'=>'districts']); //Labuhan Maringgai
            DB::table('regionables')->insert(['region_id'=>1479, 'regionable_id'=>4003, 'regionable_type'=>'districts']); //Mataram Baru
                DB::table('regions')->insert(['id'=>1480, 'parent'=>1479, 'code'=>'34199', 'type'=>'village', 'name'=>'Village 34199, Districts 3419, City 341, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1480, 'regionable_id'=>45446, 'regionable_type'=>'village']); //Kebon Damar
                DB::table('regionables')->insert(['region_id'=>1480, 'regionable_id'=>45447, 'regionable_type'=>'village']); //Mandala Sari
                DB::table('regionables')->insert(['region_id'=>1480, 'regionable_id'=>45448, 'regionable_type'=>'village']); //Mataram Baru
                DB::table('regionables')->insert(['region_id'=>1480, 'regionable_id'=>45449, 'regionable_type'=>'village']); //Rajabasa Baru
                DB::table('regionables')->insert(['region_id'=>1480, 'regionable_id'=>45450, 'regionable_type'=>'village']); //Teluk Dalem
                DB::table('regionables')->insert(['region_id'=>1480, 'regionable_id'=>45451, 'regionable_type'=>'village']); //Tulungpasik
                DB::table('regionables')->insert(['region_id'=>1480, 'regionable_id'=>45452, 'regionable_type'=>'village']); //Way Areng (wai Arang)
        DB::table('regions')->insert(['id'=>1481, 'parent'=>1262, 'code'=>'343', 'type'=>'city', 'name'=>'City 343, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1481, 'regionable_id'=>227, 'regionable_type'=>'city']); //Lampung Timur regencies
        DB::table('regionables')->insert(['region_id'=>1481, 'regionable_id'=>228, 'regionable_type'=>'city']); //Tulang Bawang Barat regencies
            DB::table('regions')->insert(['id'=>1482, 'parent'=>1481, 'code'=>'3438', 'type'=>'districts', 'name'=>'Districts 3438, City 343, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4011, 'regionable_type'=>'districts']); //Batanghari
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4012, 'regionable_type'=>'districts']); //Sekampung
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4013, 'regionable_type'=>'districts']); //Jabung
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4014, 'regionable_type'=>'districts']); //Marga Sekampung
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4015, 'regionable_type'=>'districts']); //Sekampung Udik
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4016, 'regionable_type'=>'districts']); //Margatiga
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4017, 'regionable_type'=>'districts']); //Pasir Sakti
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4018, 'regionable_type'=>'districts']); //Gunung Pelindung
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4019, 'regionable_type'=>'districts']); //Bandar Sribawono
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4022, 'regionable_type'=>'districts']); //Way Kenanga
            DB::table('regionables')->insert(['region_id'=>1482, 'regionable_id'=>4023, 'regionable_type'=>'districts']); //Lambu Kibang
                DB::table('regions')->insert(['id'=>1483, 'parent'=>1482, 'code'=>'34388', 'type'=>'village', 'name'=>'Village 34388, Districts 3438, City 343, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45613, 'regionable_type'=>'village']); //Negeri Agung
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45614, 'regionable_type'=>'village']); //Nibung
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45615, 'regionable_type'=>'village']); //Pelindung Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45616, 'regionable_type'=>'village']); //Pempen
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45617, 'regionable_type'=>'village']); //Wai Mili
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45653, 'regionable_type'=>'village']); //Agung Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45654, 'regionable_type'=>'village']); //Balam Asri
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45655, 'regionable_type'=>'village']); //Balam Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45656, 'regionable_type'=>'village']); //Indraloka I
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45657, 'regionable_type'=>'village']); //Indraloka Ii
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45658, 'regionable_type'=>'village']); //Mercu Buana
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45659, 'regionable_type'=>'village']); //Pagar Buana
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45660, 'regionable_type'=>'village']); //Gilang Tunggal Makarta
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45661, 'regionable_type'=>'village']); //Gunung Sari
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45662, 'regionable_type'=>'village']); //Kibang Budi Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45663, 'regionable_type'=>'village']); //Kibang Tri Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45664, 'regionable_type'=>'village']); //Kibang Yekti Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45665, 'regionable_type'=>'village']); //Lesung Bakti Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45666, 'regionable_type'=>'village']); //Mekar Sari Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45667, 'regionable_type'=>'village']); //Pagar Jaya
                DB::table('regionables')->insert(['region_id'=>1483, 'regionable_id'=>45668, 'regionable_type'=>'village']); //Sumber Rejo
        DB::table('regions')->insert(['id'=>1484, 'parent'=>1262, 'code'=>'345', 'type'=>'city', 'name'=>'City 345, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1484, 'regionable_id'=>228, 'regionable_type'=>'city']); //Tulang Bawang Barat regencies
        DB::table('regionables')->insert(['region_id'=>1484, 'regionable_id'=>229, 'regionable_type'=>'city']); //Lampung Utara regencies
        DB::table('regionables')->insert(['region_id'=>1484, 'regionable_id'=>230, 'regionable_type'=>'city']); //Tulang Bawang regencies
        DB::table('regionables')->insert(['region_id'=>1484, 'regionable_id'=>231, 'regionable_type'=>'city']); //Mesuji regencies
            DB::table('regions')->insert(['id'=>1485, 'parent'=>1484, 'code'=>'3459', 'type'=>'districts', 'name'=>'Districts 3459, City 345, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4024, 'regionable_type'=>'districts']); //Tumijajar
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4053, 'regionable_type'=>'districts']); //Rawa Pitu
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4054, 'regionable_type'=>'districts']); //Gedung Aji Baru
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4055, 'regionable_type'=>'districts']); //Penawar Tama
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4056, 'regionable_type'=>'districts']); //Penawar Aji
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4057, 'regionable_type'=>'districts']); //Gedung Meneng
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4058, 'regionable_type'=>'districts']); //Dente Teladas
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4059, 'regionable_type'=>'districts']); //Rawajitu Timur
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4060, 'regionable_type'=>'districts']); //Rawajitu Selatan
            DB::table('regionables')->insert(['region_id'=>1485, 'regionable_id'=>4068, 'regionable_type'=>'districts']); //Tanjung Raya
                DB::table('regions')->insert(['id'=>1486, 'parent'=>1485, 'code'=>'34598', 'type'=>'village', 'name'=>'Village 34598, Districts 3459, City 345, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46133, 'regionable_type'=>'village']); //Bangun Jaya
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46134, 'regionable_type'=>'village']); //Brabasan
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46135, 'regionable_type'=>'village']); //Bujung Buring
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46136, 'regionable_type'=>'village']); //Gedung Ram
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46137, 'regionable_type'=>'village']); //Harapan Mukti
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46138, 'regionable_type'=>'village']); //Kagungan Dalam
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46139, 'regionable_type'=>'village']); //Mekar Sari
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46140, 'regionable_type'=>'village']); //Muara Tenang
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46141, 'regionable_type'=>'village']); //Sinar Laga
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46142, 'regionable_type'=>'village']); //Sri/seri Tanjung
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46143, 'regionable_type'=>'village']); //Tanjung Sari
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46144, 'regionable_type'=>'village']); //Tri Karya Mulya
                DB::table('regionables')->insert(['region_id'=>1486, 'regionable_id'=>46145, 'regionable_type'=>'village']); //Wira Jaya
        DB::table('regions')->insert(['id'=>1487, 'parent'=>1262, 'code'=>'346', 'type'=>'city', 'name'=>'City 346, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1487, 'regionable_id'=>228, 'regionable_type'=>'city']); //Tulang Bawang Barat regencies
        DB::table('regionables')->insert(['region_id'=>1487, 'regionable_id'=>230, 'regionable_type'=>'city']); //Tulang Bawang regencies
        DB::table('regionables')->insert(['region_id'=>1487, 'regionable_id'=>231, 'regionable_type'=>'city']); //Mesuji regencies
            DB::table('regions')->insert(['id'=>1488, 'parent'=>1487, 'code'=>'3468', 'type'=>'districts', 'name'=>'Districts 3468, City 346, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1488, 'regionable_id'=>4025, 'regionable_type'=>'districts']); //Gunung Agung
            DB::table('regionables')->insert(['region_id'=>1488, 'regionable_id'=>4026, 'regionable_type'=>'districts']); //Gunung Terang
            DB::table('regionables')->insert(['region_id'=>1488, 'regionable_id'=>4063, 'regionable_type'=>'districts']); //Gedung Aji
            DB::table('regionables')->insert(['region_id'=>1488, 'regionable_id'=>4064, 'regionable_type'=>'districts']); //Meraksa Aji
            DB::table('regionables')->insert(['region_id'=>1488, 'regionable_id'=>4065, 'regionable_type'=>'districts']); //Banjar Margo
            DB::table('regionables')->insert(['region_id'=>1488, 'regionable_id'=>4066, 'regionable_type'=>'districts']); //Banjar Baru
            DB::table('regionables')->insert(['region_id'=>1488, 'regionable_id'=>4067, 'regionable_type'=>'districts']); //Banjar Agung
            DB::table('regionables')->insert(['region_id'=>1488, 'regionable_id'=>4069, 'regionable_type'=>'districts']); //Way Serdang
                DB::table('regions')->insert(['id'=>1489, 'parent'=>1488, 'code'=>'34684', 'type'=>'village', 'name'=>'Village 34684, Districts 3468, City 346, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46146, 'regionable_type'=>'village']); //Buko Poso
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46147, 'regionable_type'=>'village']); //Bumi Harapan
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46148, 'regionable_type'=>'village']); //Gedung Boga/raja
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46149, 'regionable_type'=>'village']); //Hadi Mulyo
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46150, 'regionable_type'=>'village']); //Kebun Dalam
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46151, 'regionable_type'=>'village']); //Kejadian
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46152, 'regionable_type'=>'village']); //Labuhan Baru
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46153, 'regionable_type'=>'village']); //Labuhan Batin
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46154, 'regionable_type'=>'village']); //Labuhan Makmur
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46155, 'regionable_type'=>'village']); //Panca Warna
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46156, 'regionable_type'=>'village']); //Rejo Mulyo
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46157, 'regionable_type'=>'village']); //Sri Gedung Mulya
                DB::table('regionables')->insert(['region_id'=>1489, 'regionable_id'=>46158, 'regionable_type'=>'village']); //Suka Agung
            DB::table('regions')->insert(['id'=>1490, 'parent'=>1487, 'code'=>'3469', 'type'=>'districts', 'name'=>'Districts 3469, City 346, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1490, 'regionable_id'=>4027, 'regionable_type'=>'districts']); //Tulang Bawang Udik
            DB::table('regionables')->insert(['region_id'=>1490, 'regionable_id'=>4028, 'regionable_type'=>'districts']); //Tulang Bawang Tengah
            DB::table('regionables')->insert(['region_id'=>1490, 'regionable_id'=>4029, 'regionable_type'=>'districts']); //Pagar Dewa
            DB::table('regionables')->insert(['region_id'=>1490, 'regionable_id'=>4070, 'regionable_type'=>'districts']); //Rawa Jitu Utara
            DB::table('regionables')->insert(['region_id'=>1490, 'regionable_id'=>4071, 'regionable_type'=>'districts']); //Mesuji Timur
            DB::table('regionables')->insert(['region_id'=>1490, 'regionable_id'=>4072, 'regionable_type'=>'districts']); //Mesuji
            DB::table('regionables')->insert(['region_id'=>1490, 'regionable_id'=>4073, 'regionable_type'=>'districts']); //Panca Jaya
            DB::table('regionables')->insert(['region_id'=>1490, 'regionable_id'=>4074, 'regionable_type'=>'districts']); //Simpang Pematang
                DB::table('regions')->insert(['id'=>1491, 'parent'=>1490, 'code'=>'34698', 'type'=>'village', 'name'=>'Village 34698, Districts 3469, City 346, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46192, 'regionable_type'=>'village']); //Adi Karya Mulya
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46193, 'regionable_type'=>'village']); //Adi Luhur
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46194, 'regionable_type'=>'village']); //Adi Mulya / Mulyo
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46195, 'regionable_type'=>'village']); //Fajar Asri
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46196, 'regionable_type'=>'village']); //Fajar Baru
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46197, 'regionable_type'=>'village']); //Fajar Indah
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46198, 'regionable_type'=>'village']); //Mukti Karya
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46199, 'regionable_type'=>'village']); //Agung Batin
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46200, 'regionable_type'=>'village']); //Bangun Mulyo
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46201, 'regionable_type'=>'village']); //Budi Aji
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46202, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46203, 'regionable_type'=>'village']); //Jaya Sakti
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46204, 'regionable_type'=>'village']); //Marga Rahayu
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46205, 'regionable_type'=>'village']); //Rejo Binangun
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46206, 'regionable_type'=>'village']); //Simpang Pematang
                DB::table('regionables')->insert(['region_id'=>1491, 'regionable_id'=>46207, 'regionable_type'=>'village']); //Wira Bangun
        DB::table('regions')->insert(['id'=>1492, 'parent'=>1262, 'code'=>'347', 'type'=>'city', 'name'=>'City 347, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1492, 'regionable_id'=>232, 'regionable_type'=>'city']); //Way Kanan regencies
            DB::table('regions')->insert(['id'=>1493, 'parent'=>1492, 'code'=>'3476', 'type'=>'districts', 'name'=>'Districts 3476, City 347, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4075, 'regionable_type'=>'districts']); //Baradatu
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4076, 'regionable_type'=>'districts']); //Pakuan Ratu
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4077, 'regionable_type'=>'districts']); //Bahuga
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4078, 'regionable_type'=>'districts']); //Bumi Agung
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4079, 'regionable_type'=>'districts']); //Blambangan Umpu
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4080, 'regionable_type'=>'districts']); //Kasui
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4081, 'regionable_type'=>'districts']); //Banjit
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4082, 'regionable_type'=>'districts']); //Rebang Tangkas
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4083, 'regionable_type'=>'districts']); //Way Tuba
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4084, 'regionable_type'=>'districts']); //Buay Bahuga
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4085, 'regionable_type'=>'districts']); //Gunung Labuhan
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4086, 'regionable_type'=>'districts']); //Negara Batin
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4087, 'regionable_type'=>'districts']); //Negeri Agung
            DB::table('regionables')->insert(['region_id'=>1493, 'regionable_id'=>4088, 'regionable_type'=>'districts']); //Negeri Besar
                DB::table('regions')->insert(['id'=>1494, 'parent'=>1493, 'code'=>'34769', 'type'=>'village', 'name'=>'Village 34769, Districts 3476, City 347, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46384, 'regionable_type'=>'village']); //Adi Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46385, 'regionable_type'=>'village']); //Bumi Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46386, 'regionable_type'=>'village']); //Gedong/gedung Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46387, 'regionable_type'=>'village']); //Gisting Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46388, 'regionable_type'=>'village']); //Karta Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46389, 'regionable_type'=>'village']); //Kota Jawa
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46390, 'regionable_type'=>'village']); //Marga Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46391, 'regionable_type'=>'village']); //Negara Batin
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46392, 'regionable_type'=>'village']); //Negara Mulya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46393, 'regionable_type'=>'village']); //Purwa Agung
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46394, 'regionable_type'=>'village']); //Purwa Negara
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46395, 'regionable_type'=>'village']); //Sari Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46396, 'regionable_type'=>'village']); //Setia Negara
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46397, 'regionable_type'=>'village']); //Sri Menanti
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46398, 'regionable_type'=>'village']); //Sri Mulyo
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46399, 'regionable_type'=>'village']); //Bandar Dalam
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46400, 'regionable_type'=>'village']); //Bandar Kasih
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46401, 'regionable_type'=>'village']); //Gedong/gedung Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46402, 'regionable_type'=>'village']); //Gedung Harapan
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46403, 'regionable_type'=>'village']); //Gedung Menong
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46404, 'regionable_type'=>'village']); //Kali Papan
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46405, 'regionable_type'=>'village']); //Karya Agung
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46406, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46407, 'regionable_type'=>'village']); //Kotabumi Way Kanan
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46408, 'regionable_type'=>'village']); //Mulyo/mulya Sari
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46409, 'regionable_type'=>'village']); //Negeri Agung
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46410, 'regionable_type'=>'village']); //Penengahan
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46411, 'regionable_type'=>'village']); //Pulau Batu
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46412, 'regionable_type'=>'village']); //Rejosasi
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46413, 'regionable_type'=>'village']); //Sumber Rejeki
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46414, 'regionable_type'=>'village']); //Sungsang
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46415, 'regionable_type'=>'village']); //Tanjung Rejo
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46416, 'regionable_type'=>'village']); //Way Limau
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46417, 'regionable_type'=>'village']); //Bima Sakti
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46418, 'regionable_type'=>'village']); //Kaliawi
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46419, 'regionable_type'=>'village']); //Kaliawi Indah
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46420, 'regionable_type'=>'village']); //Kiling Kiling
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46421, 'regionable_type'=>'village']); //Negara Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46422, 'regionable_type'=>'village']); //Negeri Besar
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46423, 'regionable_type'=>'village']); //Negeri Jaya
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46424, 'regionable_type'=>'village']); //Negeri Kasih
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46425, 'regionable_type'=>'village']); //Pagar Iman
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46426, 'regionable_type'=>'village']); //Sri Basuki
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46427, 'regionable_type'=>'village']); //Tanjungmas
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46428, 'regionable_type'=>'village']); //Tegal Mukti
                DB::table('regionables')->insert(['region_id'=>1494, 'regionable_id'=>46429, 'regionable_type'=>'village']); //Tiuh Baru
        DB::table('regions')->insert(['id'=>1495, 'parent'=>1262, 'code'=>'348', 'type'=>'city', 'name'=>'City 348, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1495, 'regionable_id'=>233, 'regionable_type'=>'city']); //Lampung Barat regencies
        DB::table('regionables')->insert(['region_id'=>1495, 'regionable_id'=>234, 'regionable_type'=>'city']); //Pesisir Barat regencies
            DB::table('regions')->insert(['id'=>1496, 'parent'=>1495, 'code'=>'3487', 'type'=>'districts', 'name'=>'Districts 3487, City 348, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4090, 'regionable_type'=>'districts']); //Kebun Tebu
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4091, 'regionable_type'=>'districts']); //Gedung Surian
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4092, 'regionable_type'=>'districts']); //Sumber Jaya
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4093, 'regionable_type'=>'districts']); //Batu Ketulis
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4094, 'regionable_type'=>'districts']); //Belalau
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4095, 'regionable_type'=>'districts']); //Air Hitam
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4096, 'regionable_type'=>'districts']); //Sukau
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4097, 'regionable_type'=>'districts']); //Lumbok Seminung
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4104, 'regionable_type'=>'districts']); //Pesisir Selatan
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4105, 'regionable_type'=>'districts']); //Krui Selatan
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4106, 'regionable_type'=>'districts']); //Way Krui
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4107, 'regionable_type'=>'districts']); //Pesisir Tengah
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4108, 'regionable_type'=>'districts']); //Pesisir Utara
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4109, 'regionable_type'=>'districts']); //Pulau Pisang
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4110, 'regionable_type'=>'districts']); //Lemong
            DB::table('regionables')->insert(['region_id'=>1496, 'regionable_id'=>4111, 'regionable_type'=>'districts']); //Karya Penggawa
                DB::table('regions')->insert(['id'=>1497, 'parent'=>1496, 'code'=>'34878', 'type'=>'village', 'name'=>'Village 34878, Districts 3487, City 348, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46640, 'regionable_type'=>'village']); //Asahan Way Sindi
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46641, 'regionable_type'=>'village']); //Kebuayan
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46642, 'regionable_type'=>'village']); //Laay
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46643, 'regionable_type'=>'village']); //Menyancang
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46644, 'regionable_type'=>'village']); //Penengahan
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46645, 'regionable_type'=>'village']); //Penggawa V Tengah
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46646, 'regionable_type'=>'village']); //Penggawa V Ulu
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46647, 'regionable_type'=>'village']); //Tebakak Way Sidi
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46648, 'regionable_type'=>'village']); //Way Nukak
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46649, 'regionable_type'=>'village']); //Way Sindi
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46650, 'regionable_type'=>'village']); //Way Sindi Hanuan
                DB::table('regionables')->insert(['region_id'=>1497, 'regionable_id'=>46651, 'regionable_type'=>'village']); //Way Sindi Utara
            DB::table('regions')->insert(['id'=>1498, 'parent'=>1495, 'code'=>'3488', 'type'=>'districts', 'name'=>'Districts 3488, City 348, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4098, 'regionable_type'=>'districts']); //Batu Brak
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4099, 'regionable_type'=>'districts']); //Bandar Negeri Suoh
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4100, 'regionable_type'=>'districts']); //Suoh
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4101, 'regionable_type'=>'districts']); //Way Tenong
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4102, 'regionable_type'=>'districts']); //Pagar Dewa
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4103, 'regionable_type'=>'districts']); //Sekincau
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4110, 'regionable_type'=>'districts']); //Lemong
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4112, 'regionable_type'=>'districts']); //Bengkunat Belimbing
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4113, 'regionable_type'=>'districts']); //Bengkunat
            DB::table('regionables')->insert(['region_id'=>1498, 'regionable_id'=>4114, 'regionable_type'=>'districts']); //Ngambur
                DB::table('regions')->insert(['id'=>1499, 'parent'=>1498, 'code'=>'34883', 'type'=>'village', 'name'=>'Village 34883, Districts 3488, City 348, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46638, 'regionable_type'=>'village']); //Parda Haga
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46639, 'regionable_type'=>'village']); //Suka Mulya
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46652, 'regionable_type'=>'village']); //Bandar Dalam
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46653, 'regionable_type'=>'village']); //Kota Jawa
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46654, 'regionable_type'=>'village']); //Pagar Bukit
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46655, 'regionable_type'=>'village']); //Pagar Bukit Induk
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46656, 'regionable_type'=>'village']); //Pemerihan
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46657, 'regionable_type'=>'village']); //Penyandingan
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46658, 'regionable_type'=>'village']); //Siring Gading
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46659, 'regionable_type'=>'village']); //Suka Marga
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46660, 'regionable_type'=>'village']); //Suka Negeri
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46661, 'regionable_type'=>'village']); //Sumberejo
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46662, 'regionable_type'=>'village']); //Tanjung Kemala
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46663, 'regionable_type'=>'village']); //Tanjung Rejo
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46664, 'regionable_type'=>'village']); //Way Haru
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46665, 'regionable_type'=>'village']); //Way Tias
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46666, 'regionable_type'=>'village']); //Bandar Jaya
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46667, 'regionable_type'=>'village']); //Kota Batu
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46668, 'regionable_type'=>'village']); //Mulang Maya
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46669, 'regionable_type'=>'village']); //Negeri Ratu Ngaras
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46670, 'regionable_type'=>'village']); //Padang Dalam
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46671, 'regionable_type'=>'village']); //Parda Suka
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46672, 'regionable_type'=>'village']); //Raja Basa
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46673, 'regionable_type'=>'village']); //Suka Maju
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46674, 'regionable_type'=>'village']); //Sukarame
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46675, 'regionable_type'=>'village']); //Bumi Ratu
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46676, 'regionable_type'=>'village']); //Gedung Cahya Kuningan
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46677, 'regionable_type'=>'village']); //Mauara Tembulih
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46678, 'regionable_type'=>'village']); //Negara
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46679, 'regionable_type'=>'village']); //Negeri Ratu Ngambur
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46680, 'regionable_type'=>'village']); //Pekon Mon
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46681, 'regionable_type'=>'village']); //Suka Banjar
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46682, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>1499, 'regionable_id'=>46683, 'regionable_type'=>'village']); //Ulok Mukti
        DB::table('regions')->insert(['id'=>1500, 'parent'=>1262, 'code'=>'351', 'type'=>'city', 'name'=>'City 351, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1500, 'regionable_id'=>235, 'regionable_type'=>'city']); //Bandar Lampung city
            DB::table('regions')->insert(['id'=>1501, 'parent'=>1500, 'code'=>'3511', 'type'=>'districts', 'name'=>'Districts 3511, City 351, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1501, 'regionable_id'=>4115, 'regionable_type'=>'districts']); //Enggal
            DB::table('regionables')->insert(['region_id'=>1501, 'regionable_id'=>4116, 'regionable_type'=>'districts']); //Tanjung Karang Pusat
            DB::table('regionables')->insert(['region_id'=>1501, 'regionable_id'=>4117, 'regionable_type'=>'districts']); //Kedaton
                DB::table('regions')->insert(['id'=>1502, 'parent'=>1501, 'code'=>'35112', 'type'=>'village', 'name'=>'Village 35112, Districts 3511, City 351, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1502, 'regionable_id'=>46697, 'regionable_type'=>'village']); //Penengahan
                DB::table('regionables')->insert(['region_id'=>1502, 'regionable_id'=>46698, 'regionable_type'=>'village']); //Penengahan Raya
            DB::table('regions')->insert(['id'=>1503, 'parent'=>1500, 'code'=>'3512', 'type'=>'districts', 'name'=>'Districts 3512, City 351, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1503, 'regionable_id'=>4115, 'regionable_type'=>'districts']); //Enggal
            DB::table('regionables')->insert(['region_id'=>1503, 'regionable_id'=>4118, 'regionable_type'=>'districts']); //Tanjung Karang Timur
            DB::table('regionables')->insert(['region_id'=>1503, 'regionable_id'=>4119, 'regionable_type'=>'districts']); //Kedamaian
            DB::table('regionables')->insert(['region_id'=>1503, 'regionable_id'=>4120, 'regionable_type'=>'districts']); //Sukabumi
            DB::table('regionables')->insert(['region_id'=>1503, 'regionable_id'=>4121, 'regionable_type'=>'districts']); //Way Halim
                DB::table('regions')->insert(['id'=>1504, 'parent'=>1503, 'code'=>'35123', 'type'=>'village', 'name'=>'Village 35123, Districts 3512, City 351, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1504, 'regionable_id'=>46723, 'regionable_type'=>'village']); //Jaga Baya I
            DB::table('regions')->insert(['id'=>1505, 'parent'=>1500, 'code'=>'3513', 'type'=>'districts', 'name'=>'Districts 3513, City 351, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1505, 'regionable_id'=>4119, 'regionable_type'=>'districts']); //Kedamaian
            DB::table('regionables')->insert(['region_id'=>1505, 'regionable_id'=>4120, 'regionable_type'=>'districts']); //Sukabumi
            DB::table('regionables')->insert(['region_id'=>1505, 'regionable_id'=>4121, 'regionable_type'=>'districts']); //Way Halim
            DB::table('regionables')->insert(['region_id'=>1505, 'regionable_id'=>4122, 'regionable_type'=>'districts']); //Sukarame
                DB::table('regions')->insert(['id'=>1506, 'parent'=>1505, 'code'=>'35131', 'type'=>'village', 'name'=>'Village 35131, Districts 3513, City 351, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1506, 'regionable_id'=>46729, 'regionable_type'=>'village']); //Korpri Jaya
                DB::table('regionables')->insert(['region_id'=>1506, 'regionable_id'=>46730, 'regionable_type'=>'village']); //Korpri Raya
                DB::table('regionables')->insert(['region_id'=>1506, 'regionable_id'=>46731, 'regionable_type'=>'village']); //Sukarame
                DB::table('regionables')->insert(['region_id'=>1506, 'regionable_id'=>46732, 'regionable_type'=>'village']); //Sukarame Baru
                DB::table('regionables')->insert(['region_id'=>1506, 'regionable_id'=>46733, 'regionable_type'=>'village']); //Way Dadi
                DB::table('regionables')->insert(['region_id'=>1506, 'regionable_id'=>46734, 'regionable_type'=>'village']); //Way Dadi Baru
            DB::table('regions')->insert(['id'=>1507, 'parent'=>1500, 'code'=>'3514', 'type'=>'districts', 'name'=>'Districts 3514, City 351, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1507, 'regionable_id'=>4117, 'regionable_type'=>'districts']); //Kedaton
            DB::table('regionables')->insert(['region_id'=>1507, 'regionable_id'=>4121, 'regionable_type'=>'districts']); //Way Halim
            DB::table('regionables')->insert(['region_id'=>1507, 'regionable_id'=>4123, 'regionable_type'=>'districts']); //Tanjung Senang
            DB::table('regionables')->insert(['region_id'=>1507, 'regionable_id'=>4124, 'regionable_type'=>'districts']); //Labuhan Ratu
            DB::table('regionables')->insert(['region_id'=>1507, 'regionable_id'=>4125, 'regionable_type'=>'districts']); //Rajabasa
                DB::table('regions')->insert(['id'=>1508, 'parent'=>1507, 'code'=>'35144', 'type'=>'village', 'name'=>'Village 35144, Districts 3514, City 351, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1508, 'regionable_id'=>46746, 'regionable_type'=>'village']); //Rajabasa
                DB::table('regionables')->insert(['region_id'=>1508, 'regionable_id'=>46747, 'regionable_type'=>'village']); //Rajabasa Jaya
                DB::table('regionables')->insert(['region_id'=>1508, 'regionable_id'=>46748, 'regionable_type'=>'village']); //Rajabasa Nunyai
                DB::table('regionables')->insert(['region_id'=>1508, 'regionable_id'=>46749, 'regionable_type'=>'village']); //Rajabasa Pemuka
                DB::table('regionables')->insert(['region_id'=>1508, 'regionable_id'=>46750, 'regionable_type'=>'village']); //Rajabasa Raya
                DB::table('regions')->insert(['id'=>1509, 'parent'=>1507, 'code'=>'35145', 'type'=>'village', 'name'=>'Village 35145, Districts 3514, City 351, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1509, 'regionable_id'=>46751, 'regionable_type'=>'village']); //Gedong Meneng
                DB::table('regionables')->insert(['region_id'=>1509, 'regionable_id'=>46752, 'regionable_type'=>'village']); //Gedong Meneng Baru
            DB::table('regions')->insert(['id'=>1510, 'parent'=>1500, 'code'=>'3515', 'type'=>'districts', 'name'=>'Districts 3515, City 351, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1510, 'regionable_id'=>4126, 'regionable_type'=>'districts']); //Tanjung Karang Barat
            DB::table('regionables')->insert(['region_id'=>1510, 'regionable_id'=>4127, 'regionable_type'=>'districts']); //Langkapura
            DB::table('regionables')->insert(['region_id'=>1510, 'regionable_id'=>4128, 'regionable_type'=>'districts']); //Kemiling
                DB::table('regions')->insert(['id'=>1511, 'parent'=>1510, 'code'=>'35153', 'type'=>'village', 'name'=>'Village 35153, Districts 3515, City 351, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1511, 'regionable_id'=>46765, 'regionable_type'=>'village']); //Sumber Rejo
                DB::table('regionables')->insert(['region_id'=>1511, 'regionable_id'=>46766, 'regionable_type'=>'village']); //Sumber Rejo Sejahtera
                DB::table('regions')->insert(['id'=>1512, 'parent'=>1510, 'code'=>'35158', 'type'=>'village', 'name'=>'Village 35158, Districts 3515, City 351, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1512, 'regionable_id'=>46767, 'regionable_type'=>'village']); //Beringin Raya
                DB::table('regionables')->insert(['region_id'=>1512, 'regionable_id'=>46768, 'regionable_type'=>'village']); //Beringin Raya
                DB::table('regionables')->insert(['region_id'=>1512, 'regionable_id'=>46769, 'regionable_type'=>'village']); //Kedaung
                DB::table('regionables')->insert(['region_id'=>1512, 'regionable_id'=>46770, 'regionable_type'=>'village']); //Kemiling Permai
                DB::table('regionables')->insert(['region_id'=>1512, 'regionable_id'=>46771, 'regionable_type'=>'village']); //Kemiling Raya
                DB::table('regionables')->insert(['region_id'=>1512, 'regionable_id'=>46772, 'regionable_type'=>'village']); //Pinang Jaya
                DB::table('regionables')->insert(['region_id'=>1512, 'regionable_id'=>46773, 'regionable_type'=>'village']); //Sumber Agung
        DB::table('regions')->insert(['id'=>1513, 'parent'=>1262, 'code'=>'352', 'type'=>'city', 'name'=>'City 352, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1513, 'regionable_id'=>226, 'regionable_type'=>'city']); //Lampung Tengah regencies
        DB::table('regionables')->insert(['region_id'=>1513, 'regionable_id'=>235, 'regionable_type'=>'city']); //Bandar Lampung city
            DB::table('regions')->insert(['id'=>1514, 'parent'=>1513, 'code'=>'3521', 'type'=>'districts', 'name'=>'Districts 3521, City 352, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1514, 'regionable_id'=>3996, 'regionable_type'=>'districts']); //Way Pangubuan (pengubuan)
            DB::table('regionables')->insert(['region_id'=>1514, 'regionable_id'=>4115, 'regionable_type'=>'districts']); //Enggal
            DB::table('regionables')->insert(['region_id'=>1514, 'regionable_id'=>4129, 'regionable_type'=>'districts']); //Telukbetung Selatan
            DB::table('regionables')->insert(['region_id'=>1514, 'regionable_id'=>4130, 'regionable_type'=>'districts']); //Telukbetung Utara
                DB::table('regions')->insert(['id'=>1515, 'parent'=>1514, 'code'=>'35211', 'type'=>'village', 'name'=>'Village 35211, Districts 3521, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1515, 'regionable_id'=>46774, 'regionable_type'=>'village']); //Gunung Mas
                DB::table('regionables')->insert(['region_id'=>1515, 'regionable_id'=>46780, 'regionable_type'=>'village']); //Kupang Kota
                DB::table('regions')->insert(['id'=>1516, 'parent'=>1514, 'code'=>'35212', 'type'=>'village', 'name'=>'Village 35212, Districts 3521, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1516, 'regionable_id'=>46781, 'regionable_type'=>'village']); //Kupang Raya
                DB::table('regionables')->insert(['region_id'=>1516, 'regionable_id'=>46782, 'regionable_type'=>'village']); //Kupang Teba
                DB::table('regions')->insert(['id'=>1517, 'parent'=>1514, 'code'=>'35214', 'type'=>'village', 'name'=>'Village 35214, Districts 3521, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1517, 'regionable_id'=>46783, 'regionable_type'=>'village']); //Gulak Galik
                DB::table('regionables')->insert(['region_id'=>1517, 'regionable_id'=>46784, 'regionable_type'=>'village']); //Sumur Batu
                DB::table('regions')->insert(['id'=>1518, 'parent'=>1514, 'code'=>'35215', 'type'=>'village', 'name'=>'Village 35215, Districts 3521, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1518, 'regionable_id'=>46775, 'regionable_type'=>'village']); //Sumur Putri
                DB::table('regionables')->insert(['region_id'=>1518, 'regionable_id'=>46785, 'regionable_type'=>'village']); //Pengajaran
            DB::table('regions')->insert(['id'=>1519, 'parent'=>1513, 'code'=>'3522', 'type'=>'districts', 'name'=>'Districts 3522, City 352, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1519, 'regionable_id'=>4129, 'regionable_type'=>'districts']); //Telukbetung Selatan
            DB::table('regionables')->insert(['region_id'=>1519, 'regionable_id'=>4131, 'regionable_type'=>'districts']); //Bumi Waras
                DB::table('regions')->insert(['id'=>1520, 'parent'=>1519, 'code'=>'35224', 'type'=>'village', 'name'=>'Village 35224, Districts 3522, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1520, 'regionable_id'=>46786, 'regionable_type'=>'village']); //Kangkung
                DB::table('regions')->insert(['id'=>1521, 'parent'=>1519, 'code'=>'35225', 'type'=>'village', 'name'=>'Village 35225, Districts 3522, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1521, 'regionable_id'=>46787, 'regionable_type'=>'village']); //Bumi Waras
                DB::table('regions')->insert(['id'=>1522, 'parent'=>1519, 'code'=>'35226', 'type'=>'village', 'name'=>'Village 35226, Districts 3522, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1522, 'regionable_id'=>46788, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regions')->insert(['id'=>1523, 'parent'=>1519, 'code'=>'35227', 'type'=>'village', 'name'=>'Village 35227, Districts 3522, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1523, 'regionable_id'=>46789, 'regionable_type'=>'village']); //Garuntang
                DB::table('regions')->insert(['id'=>1524, 'parent'=>1519, 'code'=>'35228', 'type'=>'village', 'name'=>'Village 35228, Districts 3522, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1524, 'regionable_id'=>46790, 'regionable_type'=>'village']); //Bumi Raya
            DB::table('regions')->insert(['id'=>1525, 'parent'=>1513, 'code'=>'3523', 'type'=>'districts', 'name'=>'Districts 3523, City 352, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1525, 'regionable_id'=>4132, 'regionable_type'=>'districts']); //Telukbetung Timur
            DB::table('regionables')->insert(['region_id'=>1525, 'regionable_id'=>4133, 'regionable_type'=>'districts']); //Telukbetung Barat
                DB::table('regions')->insert(['id'=>1526, 'parent'=>1525, 'code'=>'35232', 'type'=>'village', 'name'=>'Village 35232, Districts 3523, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1526, 'regionable_id'=>46797, 'regionable_type'=>'village']); //Kuripan
                DB::table('regions')->insert(['id'=>1527, 'parent'=>1525, 'code'=>'35233', 'type'=>'village', 'name'=>'Village 35233, Districts 3523, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1527, 'regionable_id'=>46798, 'regionable_type'=>'village']); //Negeri Olok Gading
                DB::table('regions')->insert(['id'=>1528, 'parent'=>1525, 'code'=>'35234', 'type'=>'village', 'name'=>'Village 35234, Districts 3523, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1528, 'regionable_id'=>46799, 'regionable_type'=>'village']); //Sukarame Ii
                DB::table('regions')->insert(['id'=>1529, 'parent'=>1525, 'code'=>'35238', 'type'=>'village', 'name'=>'Village 35238, Districts 3523, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1529, 'regionable_id'=>46800, 'regionable_type'=>'village']); //Bakung
                DB::table('regions')->insert(['id'=>1530, 'parent'=>1525, 'code'=>'35239', 'type'=>'village', 'name'=>'Village 35239, Districts 3523, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1530, 'regionable_id'=>46801, 'regionable_type'=>'village']); //Batu Putuk
            DB::table('regions')->insert(['id'=>1531, 'parent'=>1513, 'code'=>'3524', 'type'=>'districts', 'name'=>'Districts 3524, City 352, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1531, 'regionable_id'=>4120, 'regionable_type'=>'districts']); //Sukabumi
            DB::table('regionables')->insert(['region_id'=>1531, 'regionable_id'=>4134, 'regionable_type'=>'districts']); //Panjang
                DB::table('regions')->insert(['id'=>1532, 'parent'=>1531, 'code'=>'35241', 'type'=>'village', 'name'=>'Village 35241, Districts 3524, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1532, 'regionable_id'=>46802, 'regionable_type'=>'village']); //Panjang Utara
                DB::table('regionables')->insert(['region_id'=>1532, 'regionable_id'=>46803, 'regionable_type'=>'village']); //Pidada
                DB::table('regions')->insert(['id'=>1533, 'parent'=>1531, 'code'=>'35242', 'type'=>'village', 'name'=>'Village 35242, Districts 3524, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1533, 'regionable_id'=>46804, 'regionable_type'=>'village']); //Srengsem
                DB::table('regions')->insert(['id'=>1534, 'parent'=>1531, 'code'=>'35243', 'type'=>'village', 'name'=>'Village 35243, Districts 3524, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1534, 'regionable_id'=>46805, 'regionable_type'=>'village']); //Panjang Selatan
                DB::table('regions')->insert(['id'=>1535, 'parent'=>1531, 'code'=>'35244', 'type'=>'village', 'name'=>'Village 35244, Districts 3524, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1535, 'regionable_id'=>46721, 'regionable_type'=>'village']); //Way Gubak
                DB::table('regionables')->insert(['region_id'=>1535, 'regionable_id'=>46806, 'regionable_type'=>'village']); //Way Lunik
                DB::table('regions')->insert(['id'=>1536, 'parent'=>1531, 'code'=>'35245', 'type'=>'village', 'name'=>'Village 35245, Districts 3524, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1536, 'regionable_id'=>46722, 'regionable_type'=>'village']); //Way Laga
                DB::table('regionables')->insert(['region_id'=>1536, 'regionable_id'=>46807, 'regionable_type'=>'village']); //Karang Maritim
                DB::table('regionables')->insert(['region_id'=>1536, 'regionable_id'=>46808, 'regionable_type'=>'village']); //Ketapang
                DB::table('regions')->insert(['id'=>1537, 'parent'=>1531, 'code'=>'35246', 'type'=>'village', 'name'=>'Village 35246, Districts 3524, City 352, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1537, 'regionable_id'=>46809, 'regionable_type'=>'village']); //Ketapang Kuala
        DB::table('regions')->insert(['id'=>1538, 'parent'=>1262, 'code'=>'353', 'type'=>'city', 'name'=>'City 353, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1538, 'regionable_id'=>236, 'regionable_type'=>'city']); //Lampung Selatan regencies
        DB::table('regionables')->insert(['region_id'=>1538, 'regionable_id'=>237, 'regionable_type'=>'city']); //Pesawaran regencies
        DB::table('regionables')->insert(['region_id'=>1538, 'regionable_id'=>238, 'regionable_type'=>'city']); //Pringsewu regencies
        DB::table('regionables')->insert(['region_id'=>1538, 'regionable_id'=>239, 'regionable_type'=>'city']); //Tanggamus regencies
            DB::table('regions')->insert(['id'=>1539, 'parent'=>1538, 'code'=>'3537', 'type'=>'districts', 'name'=>'Districts 3537, City 353, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4161, 'regionable_type'=>'districts']); //Gading Rejo
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4162, 'regionable_type'=>'districts']); //Banyumas
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4163, 'regionable_type'=>'districts']); //Pringsewu
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4164, 'regionable_type'=>'districts']); //Pagelaran
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4165, 'regionable_type'=>'districts']); //Ambarawa
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4166, 'regionable_type'=>'districts']); //Pagelaran Utara
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4170, 'regionable_type'=>'districts']); //Sumberejo
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4171, 'regionable_type'=>'districts']); //Ulubelu
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4172, 'regionable_type'=>'districts']); //Talang Padang
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4173, 'regionable_type'=>'districts']); //Gisting
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4174, 'regionable_type'=>'districts']); //Gunung Alip
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4175, 'regionable_type'=>'districts']); //Kelumbayan Barat
            DB::table('regionables')->insert(['region_id'=>1539, 'regionable_id'=>4176, 'regionable_type'=>'districts']); //Kelumbayan
                DB::table('regions')->insert(['id'=>1540, 'parent'=>1539, 'code'=>'35379', 'type'=>'village', 'name'=>'Village 35379, Districts 3537, City 353, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47399, 'regionable_type'=>'village']); //Banjar Agung
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47400, 'regionable_type'=>'village']); //Banjar Negeri
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47401, 'regionable_type'=>'village']); //Ciherang
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47402, 'regionable_type'=>'village']); //Darussalam
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47403, 'regionable_type'=>'village']); //Kedaloman
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47404, 'regionable_type'=>'village']); //Pariaman
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47405, 'regionable_type'=>'village']); //Penanggungan
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47406, 'regionable_type'=>'village']); //Sukabanjar
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47407, 'regionable_type'=>'village']); //Sukadamai
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47408, 'regionable_type'=>'village']); //Sukamernah (sukamarnah)
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47409, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47410, 'regionable_type'=>'village']); //Way Halom
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47411, 'regionable_type'=>'village']); //Batu Patah
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47412, 'regionable_type'=>'village']); //Lengkukai
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47413, 'regionable_type'=>'village']); //Marga Mulya
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47414, 'regionable_type'=>'village']); //Merbau
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47415, 'regionable_type'=>'village']); //Purwosari
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47416, 'regionable_type'=>'village']); //Sidoharjo
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47417, 'regionable_type'=>'village']); //Kilauan Negeri
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47418, 'regionable_type'=>'village']); //Napal
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47419, 'regionable_type'=>'village']); //Negeri Kelumbayan
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47420, 'regionable_type'=>'village']); //Paku
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47421, 'regionable_type'=>'village']); //Pekon Susuk
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47422, 'regionable_type'=>'village']); //Pekon Unggak
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47423, 'regionable_type'=>'village']); //Penyandingan
                DB::table('regionables')->insert(['region_id'=>1540, 'regionable_id'=>47424, 'regionable_type'=>'village']); //Umbar
            DB::table('regions')->insert(['id'=>1541, 'parent'=>1538, 'code'=>'3538', 'type'=>'districts', 'name'=>'Districts 3538, City 353, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1541, 'regionable_id'=>4171, 'regionable_type'=>'districts']); //Ulubelu
            DB::table('regionables')->insert(['region_id'=>1541, 'regionable_id'=>4177, 'regionable_type'=>'districts']); //Pematang Sawa
            DB::table('regionables')->insert(['region_id'=>1541, 'regionable_id'=>4178, 'regionable_type'=>'districts']); //Kota Agung (kota Agung Pusat)
            DB::table('regionables')->insert(['region_id'=>1541, 'regionable_id'=>4179, 'regionable_type'=>'districts']); //Kota Agung Barat
            DB::table('regionables')->insert(['region_id'=>1541, 'regionable_id'=>4180, 'regionable_type'=>'districts']); //Kota Agung Timur
            DB::table('regionables')->insert(['region_id'=>1541, 'regionable_id'=>4181, 'regionable_type'=>'districts']); //Semaka
                DB::table('regions')->insert(['id'=>1542, 'parent'=>1541, 'code'=>'35386', 'type'=>'village', 'name'=>'Village 35386, Districts 3538, City 353, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47483, 'regionable_type'=>'village']); //Bangun Rejo
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47484, 'regionable_type'=>'village']); //Garut
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47485, 'regionable_type'=>'village']); //Kaca Pura
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47486, 'regionable_type'=>'village']); //Kanoman
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47487, 'regionable_type'=>'village']); //Karang Agung
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47488, 'regionable_type'=>'village']); //Karang Rejo
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47489, 'regionable_type'=>'village']); //Margomulyo
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47490, 'regionable_type'=>'village']); //Parda Waras
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47491, 'regionable_type'=>'village']); //Sedayu
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47492, 'regionable_type'=>'village']); //Sido Dadi
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47493, 'regionable_type'=>'village']); //Sido Mulyo
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47494, 'regionable_type'=>'village']); //Sri Katon
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47495, 'regionable_type'=>'village']); //Sri Kuncoro
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47496, 'regionable_type'=>'village']); //Sri Purnomo
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47497, 'regionable_type'=>'village']); //Sudimoro
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47498, 'regionable_type'=>'village']); //Sudimoro Bangun
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47499, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47500, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47501, 'regionable_type'=>'village']); //Tugu Papak
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47502, 'regionable_type'=>'village']); //Tugu Rejo
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47503, 'regionable_type'=>'village']); //Tulung Asahan
                DB::table('regionables')->insert(['region_id'=>1542, 'regionable_id'=>47504, 'regionable_type'=>'village']); //Way Kerap
        DB::table('regions')->insert(['id'=>1543, 'parent'=>1262, 'code'=>'354', 'type'=>'city', 'name'=>'City 354, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1543, 'regionable_id'=>236, 'regionable_type'=>'city']); //Lampung Selatan regencies
        DB::table('regionables')->insert(['region_id'=>1543, 'regionable_id'=>237, 'regionable_type'=>'city']); //Pesawaran regencies
            DB::table('regions')->insert(['id'=>1544, 'parent'=>1543, 'code'=>'3545', 'type'=>'districts', 'name'=>'Districts 3545, City 354, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1544, 'regionable_id'=>4143, 'regionable_type'=>'districts']); //Katibung
            DB::table('regionables')->insert(['region_id'=>1544, 'regionable_id'=>4144, 'regionable_type'=>'districts']); //Way Sulan
            DB::table('regionables')->insert(['region_id'=>1544, 'regionable_id'=>4158, 'regionable_type'=>'districts']); //Padang Cermin
            DB::table('regionables')->insert(['region_id'=>1544, 'regionable_id'=>4159, 'regionable_type'=>'districts']); //Punduh Pidada (pedada)
            DB::table('regionables')->insert(['region_id'=>1544, 'regionable_id'=>4160, 'regionable_type'=>'districts']); //Marga Punduh
                DB::table('regions')->insert(['id'=>1545, 'parent'=>1544, 'code'=>'35453', 'type'=>'village', 'name'=>'Village 35453, Districts 3545, City 354, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47190, 'regionable_type'=>'village']); //Banding Agung
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47191, 'regionable_type'=>'village']); //Batu Raja
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47192, 'regionable_type'=>'village']); //Bawang
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47193, 'regionable_type'=>'village']); //Kota Jawa
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47194, 'regionable_type'=>'village']); //Pagar Jaya
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47195, 'regionable_type'=>'village']); //Pulau Legundi
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47196, 'regionable_type'=>'village']); //Rusaba
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47197, 'regionable_type'=>'village']); //Suka Jaya Pidada
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47198, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47199, 'regionable_type'=>'village']); //Sukarame
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47200, 'regionable_type'=>'village']); //Kampung Baru
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47201, 'regionable_type'=>'village']); //Kekatang
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47202, 'regionable_type'=>'village']); //Kunyaian
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47203, 'regionable_type'=>'village']); //Maja
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47204, 'regionable_type'=>'village']); //Pekon Ampai
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47205, 'regionable_type'=>'village']); //Penyandingan
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47206, 'regionable_type'=>'village']); //Pulau Pahawang
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47207, 'regionable_type'=>'village']); //Suka Jaya Punduh
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47208, 'regionable_type'=>'village']); //Tajur
                DB::table('regionables')->insert(['region_id'=>1545, 'regionable_id'=>47209, 'regionable_type'=>'village']); //Umbul Limus
        DB::table('regions')->insert(['id'=>1546, 'parent'=>1262, 'code'=>'355', 'type'=>'city', 'name'=>'City 355, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1546, 'regionable_id'=>226, 'regionable_type'=>'city']); //Lampung Tengah regencies
        DB::table('regionables')->insert(['region_id'=>1546, 'regionable_id'=>236, 'regionable_type'=>'city']); //Lampung Selatan regencies
            DB::table('regions')->insert(['id'=>1547, 'parent'=>1546, 'code'=>'3555', 'type'=>'districts', 'name'=>'Districts 3555, City 355, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1547, 'regionable_id'=>4145, 'regionable_type'=>'districts']); //Kalianda
            DB::table('regionables')->insert(['region_id'=>1547, 'regionable_id'=>4146, 'regionable_type'=>'districts']); //Rajabasa
                DB::table('regions')->insert(['id'=>1548, 'parent'=>1547, 'code'=>'35552', 'type'=>'village', 'name'=>'Village 35552, Districts 3555, City 355, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46979, 'regionable_type'=>'village']); //Banding
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46980, 'regionable_type'=>'village']); //Batu Balak
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46981, 'regionable_type'=>'village']); //Betung
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46982, 'regionable_type'=>'village']); //Canggung
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46983, 'regionable_type'=>'village']); //Canti
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46984, 'regionable_type'=>'village']); //Cugung
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46985, 'regionable_type'=>'village']); //Hargo Pancoran
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46986, 'regionable_type'=>'village']); //Kerinjing
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46987, 'regionable_type'=>'village']); //Kota Guring
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46988, 'regionable_type'=>'village']); //Kunyir
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46989, 'regionable_type'=>'village']); //Rajabasa
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46990, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46991, 'regionable_type'=>'village']); //Tanjung Gading
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46992, 'regionable_type'=>'village']); //Tejang Pulau Sebesi
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46993, 'regionable_type'=>'village']); //Wai Muli Timur
                DB::table('regionables')->insert(['region_id'=>1548, 'regionable_id'=>46994, 'regionable_type'=>'village']); //Waymuli
            DB::table('regions')->insert(['id'=>1549, 'parent'=>1546, 'code'=>'3559', 'type'=>'districts', 'name'=>'Districts 3559, City 355, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1549, 'regionable_id'=>4147, 'regionable_type'=>'districts']); //Bakauheni
            DB::table('regionables')->insert(['region_id'=>1549, 'regionable_id'=>4148, 'regionable_type'=>'districts']); //Penengahan
            DB::table('regionables')->insert(['region_id'=>1549, 'regionable_id'=>4149, 'regionable_type'=>'districts']); //Palas
            DB::table('regionables')->insert(['region_id'=>1549, 'regionable_id'=>4150, 'regionable_type'=>'districts']); //Ketapang
            DB::table('regionables')->insert(['region_id'=>1549, 'regionable_id'=>4151, 'regionable_type'=>'districts']); //Sragi
                DB::table('regions')->insert(['id'=>1550, 'parent'=>1549, 'code'=>'35597', 'type'=>'village', 'name'=>'Village 35597, Districts 3559, City 355, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47060, 'regionable_type'=>'village']); //Bakti Rasa
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47061, 'regionable_type'=>'village']); //Bandar Agung
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47062, 'regionable_type'=>'village']); //Kedaung
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47063, 'regionable_type'=>'village']); //Kuala Sekampung
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47064, 'regionable_type'=>'village']); //Mandalasari
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47065, 'regionable_type'=>'village']); //Margajasa
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47066, 'regionable_type'=>'village']); //Margasari
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47067, 'regionable_type'=>'village']); //Sukapura
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47068, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>1550, 'regionable_id'=>47069, 'regionable_type'=>'village']); //Sumber Sari
        DB::table('regions')->insert(['id'=>1551, 'parent'=>1262, 'code'=>'356', 'type'=>'city', 'name'=>'City 356, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1551, 'regionable_id'=>238, 'regionable_type'=>'city']); //Pringsewu regencies
        DB::table('regionables')->insert(['region_id'=>1551, 'regionable_id'=>239, 'regionable_type'=>'city']); //Tanggamus regencies
            DB::table('regions')->insert(['id'=>1552, 'parent'=>1551, 'code'=>'3561', 'type'=>'districts', 'name'=>'Districts 3561, City 356, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1552, 'regionable_id'=>4178, 'regionable_type'=>'districts']); //Kota Agung (kota Agung Pusat)
            DB::table('regionables')->insert(['region_id'=>1552, 'regionable_id'=>4182, 'regionable_type'=>'districts']); //Limau
                DB::table('regions')->insert(['id'=>1553, 'parent'=>1552, 'code'=>'35613', 'type'=>'village', 'name'=>'Village 35613, Districts 3561, City 356, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47453, 'regionable_type'=>'village']); //Kuripan
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47505, 'regionable_type'=>'village']); //Antarbrak (antarberak)
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47506, 'regionable_type'=>'village']); //Badak
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47507, 'regionable_type'=>'village']); //Banjar Agung
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47508, 'regionable_type'=>'village']); //Ketapang
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47509, 'regionable_type'=>'village']); //Kuripan
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47510, 'regionable_type'=>'village']); //Padang Ratu
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47511, 'regionable_type'=>'village']); //Pariaman
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47512, 'regionable_type'=>'village']); //Pekon Ampai
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47513, 'regionable_type'=>'village']); //Tanjung Siom
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47514, 'regionable_type'=>'village']); //Tanjungjaya
                DB::table('regionables')->insert(['region_id'=>1553, 'regionable_id'=>47515, 'regionable_type'=>'village']); //Tegineneng
            DB::table('regions')->insert(['id'=>1554, 'parent'=>1551, 'code'=>'3567', 'type'=>'districts', 'name'=>'Districts 3567, City 356, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1554, 'regionable_id'=>4167, 'regionable_type'=>'districts']); //Adi Luwih
            DB::table('regionables')->insert(['region_id'=>1554, 'regionable_id'=>4168, 'regionable_type'=>'districts']); //Sukoharjo
            DB::table('regionables')->insert(['region_id'=>1554, 'regionable_id'=>4183, 'regionable_type'=>'districts']); //Pugung
            DB::table('regionables')->insert(['region_id'=>1554, 'regionable_id'=>4184, 'regionable_type'=>'districts']); //Pulau Panggung
            DB::table('regionables')->insert(['region_id'=>1554, 'regionable_id'=>4185, 'regionable_type'=>'districts']); //Air Naningan
                DB::table('regions')->insert(['id'=>1555, 'parent'=>1554, 'code'=>'35679', 'type'=>'village', 'name'=>'Village 35679, Districts 3567, City 356, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47543, 'regionable_type'=>'village']); //Air Bakoman
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47544, 'regionable_type'=>'village']); //Batu Bedil
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47545, 'regionable_type'=>'village']); //Gedung Agung
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47546, 'regionable_type'=>'village']); //Gunung Megang
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47547, 'regionable_type'=>'village']); //Gunung Meraksa
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47548, 'regionable_type'=>'village']); //Kemuning
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47549, 'regionable_type'=>'village']); //Muara Dua
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47550, 'regionable_type'=>'village']); //Penantian
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47551, 'regionable_type'=>'village']); //Pulau Panggung
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47552, 'regionable_type'=>'village']); //Sinar Mancak
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47553, 'regionable_type'=>'village']); //Sinar Mulyo
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47554, 'regionable_type'=>'village']); //Sindang Marga
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47555, 'regionable_type'=>'village']); //Srimanganten
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47556, 'regionable_type'=>'village']); //Sumber Mulyo/mulya
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47557, 'regionable_type'=>'village']); //Talang Beringin
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47558, 'regionable_type'=>'village']); //Talang Jawa
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47559, 'regionable_type'=>'village']); //Tanjung Begelung
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47560, 'regionable_type'=>'village']); //Tanjung Rejo
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47561, 'regionable_type'=>'village']); //Tanjunggunung
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47562, 'regionable_type'=>'village']); //Tekad
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47563, 'regionable_type'=>'village']); //Way Ilahan
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47564, 'regionable_type'=>'village']); //Air Kubang
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47565, 'regionable_type'=>'village']); //Air Naningan
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47566, 'regionable_type'=>'village']); //Batu Bedil
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47567, 'regionable_type'=>'village']); //Datar Lebuay
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47568, 'regionable_type'=>'village']); //Karang Sari
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47569, 'regionable_type'=>'village']); //Margomulyo
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47570, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47571, 'regionable_type'=>'village']); //Sinar Jawa
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47572, 'regionable_type'=>'village']); //Sinar Sekampung
                DB::table('regionables')->insert(['region_id'=>1555, 'regionable_id'=>47573, 'regionable_type'=>'village']); //Way Harong
            DB::table('regions')->insert(['id'=>1556, 'parent'=>1551, 'code'=>'3568', 'type'=>'districts', 'name'=>'Districts 3568, City 356, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1556, 'regionable_id'=>4169, 'regionable_type'=>'districts']); //Pardasuka
            DB::table('regionables')->insert(['region_id'=>1556, 'regionable_id'=>4178, 'regionable_type'=>'districts']); //Kota Agung (kota Agung Pusat)
            DB::table('regionables')->insert(['region_id'=>1556, 'regionable_id'=>4186, 'regionable_type'=>'districts']); //Bulok
            DB::table('regionables')->insert(['region_id'=>1556, 'regionable_id'=>4187, 'regionable_type'=>'districts']); //Cukuh Balak
            DB::table('regionables')->insert(['region_id'=>1556, 'regionable_id'=>4188, 'regionable_type'=>'districts']); //Bandar Negeri Semuong
            DB::table('regionables')->insert(['region_id'=>1556, 'regionable_id'=>4189, 'regionable_type'=>'districts']); //Wonosobo
                DB::table('regions')->insert(['id'=>1557, 'parent'=>1556, 'code'=>'35686', 'type'=>'village', 'name'=>'Village 35686, Districts 3568, City 356, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47604, 'regionable_type'=>'village']); //Atar Lebar
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47605, 'regionable_type'=>'village']); //Bandar Sukabumi
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47606, 'regionable_type'=>'village']); //Banding
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47607, 'regionable_type'=>'village']); //Gunung Doh
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47608, 'regionable_type'=>'village']); //Negeri Agung
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47609, 'regionable_type'=>'village']); //Raja Basa
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47610, 'regionable_type'=>'village']); //Sanggi
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47611, 'regionable_type'=>'village']); //Sanggi Unggak
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47612, 'regionable_type'=>'village']); //Simpang Bayur
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47613, 'regionable_type'=>'village']); //Sinar Bangun
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47614, 'regionable_type'=>'village']); //Tulung Sari
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47615, 'regionable_type'=>'village']); //Bandar Kejadian
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47616, 'regionable_type'=>'village']); //Banjar Negoro
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47617, 'regionable_type'=>'village']); //Banjarsari
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47618, 'regionable_type'=>'village']); //Banyu Urip
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47619, 'regionable_type'=>'village']); //Dadimulyo
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47620, 'regionable_type'=>'village']); //Dadirejo
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47621, 'regionable_type'=>'village']); //Dadisari
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47622, 'regionable_type'=>'village']); //Kalirejo
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47623, 'regionable_type'=>'village']); //Kalisari
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47624, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47625, 'regionable_type'=>'village']); //Kejadian
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47626, 'regionable_type'=>'village']); //Kunyayan
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47627, 'regionable_type'=>'village']); //Lakaran
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47628, 'regionable_type'=>'village']); //Negeri Ngarip
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47629, 'regionable_type'=>'village']); //Padang Manis
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47630, 'regionable_type'=>'village']); //Padang Ratu
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47631, 'regionable_type'=>'village']); //Parda Suka
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47632, 'regionable_type'=>'village']); //Pekon Balak
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47633, 'regionable_type'=>'village']); //Sampang Turus
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47634, 'regionable_type'=>'village']); //Sinar Saudara
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47635, 'regionable_type'=>'village']); //Soponyono
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47636, 'regionable_type'=>'village']); //Sri Melati
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47637, 'regionable_type'=>'village']); //Sridadi
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47638, 'regionable_type'=>'village']); //Sumur Tujuh
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47639, 'regionable_type'=>'village']); //Tanjung Kurung
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47640, 'regionable_type'=>'village']); //Way Liwok
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47641, 'regionable_type'=>'village']); //Way Panas
                DB::table('regionables')->insert(['region_id'=>1557, 'regionable_id'=>47642, 'regionable_type'=>'village']); //Wonosobo

        //Sumatera Selatan
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>33, 'regionable_type'=>'province']); //Sumatera Selatan
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>454, 'regionable_type'=>'city']); //Palembang city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>455, 'regionable_type'=>'city']); //Ogan Komering Ilir regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>456, 'regionable_type'=>'city']); //Ogan Ilir regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>457, 'regionable_type'=>'city']); //Musi Banyuasin regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>458, 'regionable_type'=>'city']); //Musi Rawas regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>459, 'regionable_type'=>'city']); //Banyuasin regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>460, 'regionable_type'=>'city']); //Prabumulih city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>461, 'regionable_type'=>'city']); //Muara Enim regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>462, 'regionable_type'=>'city']); //Lahat regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>463, 'regionable_type'=>'city']); //Empat Lawang regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>464, 'regionable_type'=>'city']); //Pagar Alam city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>465, 'regionable_type'=>'city']); //Lubuk Linggau city
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>466, 'regionable_type'=>'city']); //Ogan Komering Ulu regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>467, 'regionable_type'=>'city']); //Ogan Komering Ulu Timur regencies
        DB::table('regionables')->insert(['region_id'=>1262, 'regionable_id'=>468, 'regionable_type'=>'city']); //Ogan Komering Ulu Selatan regencies

        DB::table('regions')->insert(['id'=>1558, 'parent'=>1262, 'code'=>'301', 'type'=>'city', 'name'=>'City 301, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1558, 'regionable_id'=>454, 'regionable_type'=>'city']); //Palembang city
            DB::table('regions')->insert(['id'=>1559, 'parent'=>1558, 'code'=>'3011', 'type'=>'districts', 'name'=>'Districts 3011, City 301, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1559, 'regionable_id'=>7148, 'regionable_type'=>'districts']); //Ilir Timur Ii
            DB::table('regionables')->insert(['region_id'=>1559, 'regionable_id'=>7149, 'regionable_type'=>'districts']); //Kalidoni
                DB::table('regions')->insert(['id'=>1560, 'parent'=>1559, 'code'=>'30114', 'type'=>'village', 'name'=>'Village 30114, Districts 3011, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1560, 'regionable_id'=>80471, 'regionable_type'=>'village']); //8 Ilir
                DB::table('regionables')->insert(['region_id'=>1560, 'regionable_id'=>80476, 'regionable_type'=>'village']); //Bukit Sangkal
                DB::table('regions')->insert(['id'=>1561, 'parent'=>1559, 'code'=>'30119', 'type'=>'village', 'name'=>'Village 30119, Districts 3011, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1561, 'regionable_id'=>80477, 'regionable_type'=>'village']); //Kalidoni
                DB::table('regionables')->insert(['region_id'=>1561, 'regionable_id'=>80478, 'regionable_type'=>'village']); //Sei Lais
                DB::table('regionables')->insert(['region_id'=>1561, 'regionable_id'=>80479, 'regionable_type'=>'village']); //Sei Selayur
                DB::table('regionables')->insert(['region_id'=>1561, 'regionable_id'=>80480, 'regionable_type'=>'village']); //Sei Selincah
            DB::table('regions')->insert(['id'=>1562, 'parent'=>1558, 'code'=>'3012', 'type'=>'districts', 'name'=>'Districts 3012, City 301, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1562, 'regionable_id'=>7150, 'regionable_type'=>'districts']); //Ilir Timur I
            DB::table('regionables')->insert(['region_id'=>1562, 'regionable_id'=>7151, 'regionable_type'=>'districts']); //Kemuning
                DB::table('regions')->insert(['id'=>1563, 'parent'=>1562, 'code'=>'30127', 'type'=>'village', 'name'=>'Village 30127, Districts 3012, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1563, 'regionable_id'=>80492, 'regionable_type'=>'village']); //20 Ilir Ii
                DB::table('regions')->insert(['id'=>1564, 'parent'=>1562, 'code'=>'30128', 'type'=>'village', 'name'=>'Village 30128, Districts 3012, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1564, 'regionable_id'=>80490, 'regionable_type'=>'village']); //20 Ilir Iv
                DB::table('regionables')->insert(['region_id'=>1564, 'regionable_id'=>80493, 'regionable_type'=>'village']); //Ario Kemuning
                DB::table('regionables')->insert(['region_id'=>1564, 'regionable_id'=>80494, 'regionable_type'=>'village']); //Pahlawan
                DB::table('regionables')->insert(['region_id'=>1564, 'regionable_id'=>80495, 'regionable_type'=>'village']); //Pipa Reja
                DB::table('regionables')->insert(['region_id'=>1564, 'regionable_id'=>80496, 'regionable_type'=>'village']); //Sekip Jaya
                DB::table('regionables')->insert(['region_id'=>1564, 'regionable_id'=>80497, 'regionable_type'=>'village']); //Talang Aman
            DB::table('regions')->insert(['id'=>1565, 'parent'=>1558, 'code'=>'3013', 'type'=>'districts', 'name'=>'Districts 3013, City 301, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1565, 'regionable_id'=>7152, 'regionable_type'=>'districts']); //Bukit Kecil
            DB::table('regionables')->insert(['region_id'=>1565, 'regionable_id'=>7153, 'regionable_type'=>'districts']); //Ilir Barat I
                DB::table('regions')->insert(['id'=>1566, 'parent'=>1565, 'code'=>'30131', 'type'=>'village', 'name'=>'Village 30131, Districts 3013, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1566, 'regionable_id'=>80498, 'regionable_type'=>'village']); //22 Ilir
                DB::table('regionables')->insert(['region_id'=>1566, 'regionable_id'=>80504, 'regionable_type'=>'village']); //Bukit Baru
                DB::table('regionables')->insert(['region_id'=>1566, 'regionable_id'=>80505, 'regionable_type'=>'village']); //Demang Lebar Daun
                DB::table('regions')->insert(['id'=>1567, 'parent'=>1565, 'code'=>'30136', 'type'=>'village', 'name'=>'Village 30136, Districts 3013, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1567, 'regionable_id'=>80503, 'regionable_type'=>'village']); //26 Ilir
                DB::table('regionables')->insert(['region_id'=>1567, 'regionable_id'=>80506, 'regionable_type'=>'village']); //26 Ilir D. I
                DB::table('regions')->insert(['id'=>1568, 'parent'=>1565, 'code'=>'30137', 'type'=>'village', 'name'=>'Village 30137, Districts 3013, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1568, 'regionable_id'=>80507, 'regionable_type'=>'village']); //Lorok Pakjo
                DB::table('regions')->insert(['id'=>1569, 'parent'=>1565, 'code'=>'30138', 'type'=>'village', 'name'=>'Village 30138, Districts 3013, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1569, 'regionable_id'=>80508, 'regionable_type'=>'village']); //Siring Agung
                DB::table('regions')->insert(['id'=>1570, 'parent'=>1565, 'code'=>'30139', 'type'=>'village', 'name'=>'Village 30139, Districts 3013, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1570, 'regionable_id'=>80509, 'regionable_type'=>'village']); //Bukit Lama
            DB::table('regions')->insert(['id'=>1571, 'parent'=>1558, 'code'=>'3014', 'type'=>'districts', 'name'=>'Districts 3014, City 301, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1571, 'regionable_id'=>7154, 'regionable_type'=>'districts']); //Ilir Barat Ii
            DB::table('regionables')->insert(['region_id'=>1571, 'regionable_id'=>7155, 'regionable_type'=>'districts']); //Gandus
                DB::table('regions')->insert(['id'=>1572, 'parent'=>1571, 'code'=>'30147', 'type'=>'village', 'name'=>'Village 30147, Districts 3014, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1572, 'regionable_id'=>80517, 'regionable_type'=>'village']); //36 Ilir
                DB::table('regions')->insert(['id'=>1573, 'parent'=>1571, 'code'=>'30148', 'type'=>'village', 'name'=>'Village 30148, Districts 3014, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1573, 'regionable_id'=>80518, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regions')->insert(['id'=>1574, 'parent'=>1571, 'code'=>'30149', 'type'=>'village', 'name'=>'Village 30149, Districts 3014, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1574, 'regionable_id'=>80519, 'regionable_type'=>'village']); //Gandus
                DB::table('regionables')->insert(['region_id'=>1574, 'regionable_id'=>80520, 'regionable_type'=>'village']); //Karang Jaya
                DB::table('regionables')->insert(['region_id'=>1574, 'regionable_id'=>80521, 'regionable_type'=>'village']); //Pulo Kerto
            DB::table('regions')->insert(['id'=>1575, 'parent'=>1558, 'code'=>'3015', 'type'=>'districts', 'name'=>'Districts 3015, City 301, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1575, 'regionable_id'=>7156, 'regionable_type'=>'districts']); //Sukarami
            DB::table('regionables')->insert(['region_id'=>1575, 'regionable_id'=>7157, 'regionable_type'=>'districts']); //Alang-alang Lebar
                DB::table('regions')->insert(['id'=>1576, 'parent'=>1575, 'code'=>'30151', 'type'=>'village', 'name'=>'Village 30151, Districts 3015, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1576, 'regionable_id'=>80522, 'regionable_type'=>'village']); //Jambe (talang Jambe)
                DB::table('regionables')->insert(['region_id'=>1576, 'regionable_id'=>80523, 'regionable_type'=>'village']); //Kebun Bunga
                DB::table('regionables')->insert(['region_id'=>1576, 'regionable_id'=>80524, 'regionable_type'=>'village']); //Suka Bangun
                DB::table('regionables')->insert(['region_id'=>1576, 'regionable_id'=>80525, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1576, 'regionable_id'=>80526, 'regionable_type'=>'village']); //Sukodadi
                DB::table('regionables')->insert(['region_id'=>1576, 'regionable_id'=>80529, 'regionable_type'=>'village']); //Karya Baru
                DB::table('regionables')->insert(['region_id'=>1576, 'regionable_id'=>80530, 'regionable_type'=>'village']); //Talang Kelapa
                DB::table('regions')->insert(['id'=>1577, 'parent'=>1575, 'code'=>'30153', 'type'=>'village', 'name'=>'Village 30153, Districts 3015, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1577, 'regionable_id'=>80527, 'regionable_type'=>'village']); //Sukarami
                DB::table('regionables')->insert(['region_id'=>1577, 'regionable_id'=>80531, 'regionable_type'=>'village']); //Srijaya
                DB::table('regions')->insert(['id'=>1578, 'parent'=>1575, 'code'=>'30154', 'type'=>'village', 'name'=>'Village 30154, Districts 3015, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1578, 'regionable_id'=>80532, 'regionable_type'=>'village']); //Alang-alang Lebar
            DB::table('regions')->insert(['id'=>1579, 'parent'=>1558, 'code'=>'3016', 'type'=>'districts', 'name'=>'Districts 3016, City 301, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1579, 'regionable_id'=>7158, 'regionable_type'=>'districts']); //Sematang Borang
            DB::table('regionables')->insert(['region_id'=>1579, 'regionable_id'=>7159, 'regionable_type'=>'districts']); //Sako
                DB::table('regions')->insert(['id'=>1580, 'parent'=>1579, 'code'=>'30161', 'type'=>'village', 'name'=>'Village 30161, Districts 3016, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1580, 'regionable_id'=>80533, 'regionable_type'=>'village']); //Karya Mulya
                DB::table('regionables')->insert(['region_id'=>1580, 'regionable_id'=>80534, 'regionable_type'=>'village']); //Lebong/lebung Gajah
                DB::table('regionables')->insert(['region_id'=>1580, 'regionable_id'=>80535, 'regionable_type'=>'village']); //Suka Mulya
                DB::table('regionables')->insert(['region_id'=>1580, 'regionable_id'=>80538, 'regionable_type'=>'village']); //Sialang
                DB::table('regions')->insert(['id'=>1581, 'parent'=>1579, 'code'=>'30163', 'type'=>'village', 'name'=>'Village 30163, Districts 3016, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1581, 'regionable_id'=>80539, 'regionable_type'=>'village']); //Sako
                DB::table('regions')->insert(['id'=>1582, 'parent'=>1579, 'code'=>'30164', 'type'=>'village', 'name'=>'Village 30164, Districts 3016, City 301, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1582, 'regionable_id'=>80540, 'regionable_type'=>'village']); //Sukamaju
        DB::table('regions')->insert(['id'=>1583, 'parent'=>1262, 'code'=>'302', 'type'=>'city', 'name'=>'City 302, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1583, 'regionable_id'=>454, 'regionable_type'=>'city']); //Palembang city
            DB::table('regions')->insert(['id'=>1584, 'parent'=>1583, 'code'=>'3025', 'type'=>'districts', 'name'=>'Districts 3025, City 302, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1584, 'regionable_id'=>7160, 'regionable_type'=>'districts']); //Seberang Ulu I
            DB::table('regionables')->insert(['region_id'=>1584, 'regionable_id'=>7161, 'regionable_type'=>'districts']); //Kertapati
                DB::table('regions')->insert(['id'=>1585, 'parent'=>1584, 'code'=>'30258', 'type'=>'village', 'name'=>'Village 30258, Districts 3025, City 302, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1585, 'regionable_id'=>80551, 'regionable_type'=>'village']); //Kemang Agung
                DB::table('regionables')->insert(['region_id'=>1585, 'regionable_id'=>80552, 'regionable_type'=>'village']); //Kemas Rindo
                DB::table('regionables')->insert(['region_id'=>1585, 'regionable_id'=>80553, 'regionable_type'=>'village']); //Kertapati
                DB::table('regionables')->insert(['region_id'=>1585, 'regionable_id'=>80554, 'regionable_type'=>'village']); //Ogan Baru
                DB::table('regions')->insert(['id'=>1586, 'parent'=>1584, 'code'=>'30259', 'type'=>'village', 'name'=>'Village 30259, Districts 3025, City 302, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1586, 'regionable_id'=>80555, 'regionable_type'=>'village']); //Karya Jaya
                DB::table('regionables')->insert(['region_id'=>1586, 'regionable_id'=>80556, 'regionable_type'=>'village']); //Keramasan
            DB::table('regions')->insert(['id'=>1587, 'parent'=>1583, 'code'=>'3026', 'type'=>'districts', 'name'=>'Districts 3026, City 302, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1587, 'regionable_id'=>7162, 'regionable_type'=>'districts']); //Seberang Ulu Ii
            DB::table('regionables')->insert(['region_id'=>1587, 'regionable_id'=>7163, 'regionable_type'=>'districts']); //Plaju
                DB::table('regions')->insert(['id'=>1588, 'parent'=>1587, 'code'=>'30266', 'type'=>'village', 'name'=>'Village 30266, Districts 3026, City 302, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1588, 'regionable_id'=>80564, 'regionable_type'=>'village']); //Plaju Ulu
                DB::table('regions')->insert(['id'=>1589, 'parent'=>1587, 'code'=>'30267', 'type'=>'village', 'name'=>'Village 30267, Districts 3026, City 302, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1589, 'regionable_id'=>80563, 'regionable_type'=>'village']); //11 Ulu
                DB::table('regionables')->insert(['region_id'=>1589, 'regionable_id'=>80565, 'regionable_type'=>'village']); //Plaju Darat
                DB::table('regions')->insert(['id'=>1590, 'parent'=>1587, 'code'=>'30268', 'type'=>'village', 'name'=>'Village 30268, Districts 3026, City 302, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1590, 'regionable_id'=>80566, 'regionable_type'=>'village']); //Bagus Kuning
                DB::table('regionables')->insert(['region_id'=>1590, 'regionable_id'=>80567, 'regionable_type'=>'village']); //Komperta
                DB::table('regionables')->insert(['region_id'=>1590, 'regionable_id'=>80568, 'regionable_type'=>'village']); //Plaju Ilir
                DB::table('regionables')->insert(['region_id'=>1590, 'regionable_id'=>80569, 'regionable_type'=>'village']); //Talang Bubuk
                DB::table('regionables')->insert(['region_id'=>1590, 'regionable_id'=>80570, 'regionable_type'=>'village']); //Talang Putri
        DB::table('regions')->insert(['id'=>1591, 'parent'=>1262, 'code'=>'306', 'type'=>'city', 'name'=>'City 306, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1591, 'regionable_id'=>455, 'regionable_type'=>'city']); //Ogan Komering Ilir regencies
        DB::table('regionables')->insert(['region_id'=>1591, 'regionable_id'=>456, 'regionable_type'=>'city']); //Ogan Ilir regencies
            DB::table('regions')->insert(['id'=>1592, 'parent'=>1591, 'code'=>'3065', 'type'=>'districts', 'name'=>'Districts 3065, City 306, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7165, 'regionable_type'=>'districts']); //Jejawi
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7166, 'regionable_type'=>'districts']); //Sirah Pulau Padang
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7167, 'regionable_type'=>'districts']); //Pampangan
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7168, 'regionable_type'=>'districts']); //Tulung Selapan
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7169, 'regionable_type'=>'districts']); //Air Sugihan
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7170, 'regionable_type'=>'districts']); //Lempuing
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7171, 'regionable_type'=>'districts']); //Lempuing Jaya
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7172, 'regionable_type'=>'districts']); //Cengal
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7173, 'regionable_type'=>'districts']); //Pangkalan Lampam
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7182, 'regionable_type'=>'districts']); //Pemulutan Barat
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7183, 'regionable_type'=>'districts']); //Pemulutan
            DB::table('regionables')->insert(['region_id'=>1592, 'regionable_id'=>7184, 'regionable_type'=>'districts']); //Pemulutan Selatan
                DB::table('regions')->insert(['id'=>1593, 'parent'=>1592, 'code'=>'30653', 'type'=>'village', 'name'=>'Village 30653, Districts 3065, City 306, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80863, 'regionable_type'=>'village']); //Arisan Jaya
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80864, 'regionable_type'=>'village']); //Kamal
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80865, 'regionable_type'=>'village']); //Pulau Negara
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80866, 'regionable_type'=>'village']); //Saranglang
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80867, 'regionable_type'=>'village']); //Seribanding (seri Bandung)
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80868, 'regionable_type'=>'village']); //Suka Merindu
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80869, 'regionable_type'=>'village']); //Talang Pangeran Ilir
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80870, 'regionable_type'=>'village']); //Talang Pangeran Ulu
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80871, 'regionable_type'=>'village']); //Ulak Kembahang I
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80872, 'regionable_type'=>'village']); //Ulak Kembahang Ii
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80873, 'regionable_type'=>'village']); //Ulak Petangisan
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80874, 'regionable_type'=>'village']); //Aurstanding
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80875, 'regionable_type'=>'village']); //Babatan Saudagar
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80876, 'regionable_type'=>'village']); //Harapan
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80877, 'regionable_type'=>'village']); //Ibul Besar I
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80878, 'regionable_type'=>'village']); //Ibul Besar Ii
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80879, 'regionable_type'=>'village']); //Ibul Besar Iii
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80880, 'regionable_type'=>'village']); //Kedukan Bujang
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80881, 'regionable_type'=>'village']); //Lebung Jangkar
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80882, 'regionable_type'=>'village']); //Mekarjaya
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80883, 'regionable_type'=>'village']); //Muara Baru
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80884, 'regionable_type'=>'village']); //Muara Dua
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80885, 'regionable_type'=>'village']); //Palu
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80886, 'regionable_type'=>'village']); //Pegayut
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80887, 'regionable_type'=>'village']); //Pelabuhan Dalam
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80888, 'regionable_type'=>'village']); //Pemulutan Ilir
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80889, 'regionable_type'=>'village']); //Pemulutan Ulu
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80890, 'regionable_type'=>'village']); //Pipa Putih
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80891, 'regionable_type'=>'village']); //Rawajaya
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80892, 'regionable_type'=>'village']); //Sembadak
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80893, 'regionable_type'=>'village']); //Simpang Pelabuhan Dalam
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80894, 'regionable_type'=>'village']); //Sukarami
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80895, 'regionable_type'=>'village']); //Sungai Buaya
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80896, 'regionable_type'=>'village']); //Sungai Rasau
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80897, 'regionable_type'=>'village']); //Tanjung Pasir
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80898, 'regionable_type'=>'village']); //Teluk Kecapi
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80899, 'regionable_type'=>'village']); //Cahaya Marga
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80900, 'regionable_type'=>'village']); //Harimau Tandang
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80901, 'regionable_type'=>'village']); //Kapuk
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80902, 'regionable_type'=>'village']); //Lebak Pering
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80903, 'regionable_type'=>'village']); //Maju Jaya
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80904, 'regionable_type'=>'village']); //Mayapati
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80905, 'regionable_type'=>'village']); //Naikan Tembakang
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80906, 'regionable_type'=>'village']); //Pematang Bangsal
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80907, 'regionable_type'=>'village']); //Pematang Bungur
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80908, 'regionable_type'=>'village']); //Segayam
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80909, 'regionable_type'=>'village']); //Sungai Keli
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80910, 'regionable_type'=>'village']); //Sungai Lebung
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80911, 'regionable_type'=>'village']); //Sungai Lembung Ulu
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80912, 'regionable_type'=>'village']); //Sungai Ondok
                DB::table('regionables')->insert(['region_id'=>1593, 'regionable_id'=>80913, 'regionable_type'=>'village']); //Ulak Aur Standing
            DB::table('regions')->insert(['id'=>1594, 'parent'=>1591, 'code'=>'3066', 'type'=>'districts', 'name'=>'Districts 3066, City 306, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1594, 'regionable_id'=>7168, 'regionable_type'=>'districts']); //Tulung Selapan
            DB::table('regionables')->insert(['region_id'=>1594, 'regionable_id'=>7185, 'regionable_type'=>'districts']); //Rantau Panjang
            DB::table('regionables')->insert(['region_id'=>1594, 'regionable_id'=>7186, 'regionable_type'=>'districts']); //Tanjung Raja
            DB::table('regionables')->insert(['region_id'=>1594, 'regionable_id'=>7187, 'regionable_type'=>'districts']); //Sungai Pinang
            DB::table('regionables')->insert(['region_id'=>1594, 'regionable_id'=>7188, 'regionable_type'=>'districts']); //Tanjung Batu
            DB::table('regionables')->insert(['region_id'=>1594, 'regionable_id'=>7189, 'regionable_type'=>'districts']); //Payaraman
                DB::table('regions')->insert(['id'=>1595, 'parent'=>1594, 'code'=>'30664', 'type'=>'village', 'name'=>'Village 30664, Districts 3066, City 306, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80668, 'regionable_type'=>'village']); //Tanjung Batu
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80958, 'regionable_type'=>'village']); //Bangun Jaya
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80959, 'regionable_type'=>'village']); //Burai
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80960, 'regionable_type'=>'village']); //Limbang Jaya I
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80961, 'regionable_type'=>'village']); //Limbang Jaya Ii
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80962, 'regionable_type'=>'village']); //Pajar/fajar Bulan
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80963, 'regionable_type'=>'village']); //Sentul
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80964, 'regionable_type'=>'village']); //Senuro Barat
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80965, 'regionable_type'=>'village']); //Senuro Timur
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80966, 'regionable_type'=>'village']); //Seri Bandung
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80967, 'regionable_type'=>'village']); //Seri Tanjung
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80968, 'regionable_type'=>'village']); //Tanjung Atap
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80969, 'regionable_type'=>'village']); //Tanjung Atap Barat
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80970, 'regionable_type'=>'village']); //Tanjung Baru Petai
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80971, 'regionable_type'=>'village']); //Tanjung Batu
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80972, 'regionable_type'=>'village']); //Tanjung Batu Seberang
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80973, 'regionable_type'=>'village']); //Tanjung Batu Timur
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80974, 'regionable_type'=>'village']); //Tanjung Laut
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80975, 'regionable_type'=>'village']); //Tanjung Pinang I
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80976, 'regionable_type'=>'village']); //Tanjung Pinang Ii
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80977, 'regionable_type'=>'village']); //Tanjung Tambak
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80978, 'regionable_type'=>'village']); //Tanjung Tambak Baru
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80979, 'regionable_type'=>'village']); //Lubuk Bandung
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80980, 'regionable_type'=>'village']); //Paya Besar
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80981, 'regionable_type'=>'village']); //Payaraman Barat
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80982, 'regionable_type'=>'village']); //Payaraman Timur
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80983, 'regionable_type'=>'village']); //Rengas I
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80984, 'regionable_type'=>'village']); //Rengas Ii
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80985, 'regionable_type'=>'village']); //Seri Kembang I
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80986, 'regionable_type'=>'village']); //Seri Kembang Ii
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80987, 'regionable_type'=>'village']); //Seri Kembang Iii
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80988, 'regionable_type'=>'village']); //Talang Seleman
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80989, 'regionable_type'=>'village']); //Tanjung Lalang
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80990, 'regionable_type'=>'village']); //Tebedak I
                DB::table('regionables')->insert(['region_id'=>1595, 'regionable_id'=>80991, 'regionable_type'=>'village']); //Tebedak Ii
        DB::table('regions')->insert(['id'=>1596, 'parent'=>1262, 'code'=>'307', 'type'=>'city', 'name'=>'City 307, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1596, 'regionable_id'=>457, 'regionable_type'=>'city']); //Musi Banyuasin regencies
        DB::table('regionables')->insert(['region_id'=>1596, 'regionable_id'=>458, 'regionable_type'=>'city']); //Musi Rawas regencies
            DB::table('regions')->insert(['id'=>1597, 'parent'=>1596, 'code'=>'3077', 'type'=>'districts', 'name'=>'Districts 3077, City 307, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1597, 'regionable_id'=>7212, 'regionable_type'=>'districts']); //Stl Ulu Terawas
            DB::table('regionables')->insert(['region_id'=>1597, 'regionable_id'=>7213, 'regionable_type'=>'districts']); //Sumber Harta
                DB::table('regions')->insert(['id'=>1598, 'parent'=>1597, 'code'=>'30771', 'type'=>'village', 'name'=>'Village 30771, Districts 3077, City 307, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81337, 'regionable_type'=>'village']); //Babat
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81338, 'regionable_type'=>'village']); //Kosgoro
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81339, 'regionable_type'=>'village']); //Paduraksa
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81340, 'regionable_type'=>'village']); //Pasenan
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81341, 'regionable_type'=>'village']); //Sri Mulyo
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81342, 'regionable_type'=>'village']); //Sukakarya
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81343, 'regionable_type'=>'village']); //Sukamana
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81344, 'regionable_type'=>'village']); //Sukamerindu
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81345, 'regionable_type'=>'village']); //Sukaraya
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81346, 'regionable_type'=>'village']); //Sukaraya Baru
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81347, 'regionable_type'=>'village']); //Sukarejo
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81348, 'regionable_type'=>'village']); //Sumber Karya
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81349, 'regionable_type'=>'village']); //Terawas
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81350, 'regionable_type'=>'village']); //Jamburejo
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81351, 'regionable_type'=>'village']); //Madang/medang
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81352, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81353, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81354, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81355, 'regionable_type'=>'village']); //Sukarami Jaya
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81356, 'regionable_type'=>'village']); //Sumber Harta
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81357, 'regionable_type'=>'village']); //Sumber Jaya
                DB::table('regionables')->insert(['region_id'=>1598, 'regionable_id'=>81358, 'regionable_type'=>'village']); //Sumber Sari
        DB::table('regions')->insert(['id'=>1599, 'parent'=>1262, 'code'=>'308', 'type'=>'city', 'name'=>'City 308, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1599, 'regionable_id'=>456, 'regionable_type'=>'city']); //Ogan Ilir regencies
            DB::table('regions')->insert(['id'=>1600, 'parent'=>1599, 'code'=>'3081', 'type'=>'districts', 'name'=>'Districts 3081, City 308, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1600, 'regionable_id'=>7190, 'regionable_type'=>'districts']); //Indralaya Utara
            DB::table('regionables')->insert(['region_id'=>1600, 'regionable_id'=>7191, 'regionable_type'=>'districts']); //Indralaya
                DB::table('regions')->insert(['id'=>1601, 'parent'=>1600, 'code'=>'30814', 'type'=>'village', 'name'=>'Village 30814, Districts 3081, City 308, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1601, 'regionable_id'=>81008, 'regionable_type'=>'village']); //Sakatiga Seberang
                DB::table('regions')->insert(['id'=>1602, 'parent'=>1600, 'code'=>'30815', 'type'=>'village', 'name'=>'Village 30815, Districts 3081, City 308, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1602, 'regionable_id'=>81009, 'regionable_type'=>'village']); //Tanjung Sejaro
                DB::table('regions')->insert(['id'=>1603, 'parent'=>1600, 'code'=>'30816', 'type'=>'village', 'name'=>'Village 30816, Districts 3081, City 308, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1603, 'regionable_id'=>81010, 'regionable_type'=>'village']); //Sakatiga
                DB::table('regions')->insert(['id'=>1604, 'parent'=>1600, 'code'=>'30817', 'type'=>'village', 'name'=>'Village 30817, Districts 3081, City 308, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1604, 'regionable_id'=>81011, 'regionable_type'=>'village']); //Tanjung Seteko
            DB::table('regions')->insert(['id'=>1605, 'parent'=>1599, 'code'=>'3086', 'type'=>'districts', 'name'=>'Districts 3086, City 308, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1605, 'regionable_id'=>7190, 'regionable_type'=>'districts']); //Indralaya Utara
            DB::table('regionables')->insert(['region_id'=>1605, 'regionable_id'=>7191, 'regionable_type'=>'districts']); //Indralaya
            DB::table('regionables')->insert(['region_id'=>1605, 'regionable_id'=>7192, 'regionable_type'=>'districts']); //Indralaya Selatan
            DB::table('regionables')->insert(['region_id'=>1605, 'regionable_id'=>7193, 'regionable_type'=>'districts']); //Muara Kuang
            DB::table('regionables')->insert(['region_id'=>1605, 'regionable_id'=>7194, 'regionable_type'=>'districts']); //Rantau Alai
            DB::table('regionables')->insert(['region_id'=>1605, 'regionable_id'=>7195, 'regionable_type'=>'districts']); //Kandis
            DB::table('regionables')->insert(['region_id'=>1605, 'regionable_id'=>7196, 'regionable_type'=>'districts']); //Lubuk Keliat
            DB::table('regionables')->insert(['region_id'=>1605, 'regionable_id'=>7197, 'regionable_type'=>'districts']); //Rambang Kuang
                DB::table('regions')->insert(['id'=>1606, 'parent'=>1605, 'code'=>'30869', 'type'=>'village', 'name'=>'Village 30869, Districts 3086, City 308, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81088, 'regionable_type'=>'village']); //Beringin Dalam
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81089, 'regionable_type'=>'village']); //Ibul Dalam
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81090, 'regionable_type'=>'village']); //Kayu Ara
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81091, 'regionable_type'=>'village']); //Kuang Dalam Barat
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81092, 'regionable_type'=>'village']); //Kuang Dalam Timur
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81093, 'regionable_type'=>'village']); //Lubuk Tunggal
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81094, 'regionable_type'=>'village']); //Sukananti
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81095, 'regionable_type'=>'village']); //Sunur
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81096, 'regionable_type'=>'village']); //Tambang Rambang
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81097, 'regionable_type'=>'village']); //Tangai Sukananti
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81098, 'regionable_type'=>'village']); //Tanjung Bulan
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81099, 'regionable_type'=>'village']); //Tanjung Miring
                DB::table('regionables')->insert(['region_id'=>1606, 'regionable_id'=>81100, 'regionable_type'=>'village']); //Ulak Segara
        DB::table('regions')->insert(['id'=>1607, 'parent'=>1262, 'code'=>'309', 'type'=>'city', 'name'=>'City 309, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1607, 'regionable_id'=>459, 'regionable_type'=>'city']); //Banyuasin regencies
            DB::table('regions')->insert(['id'=>1608, 'parent'=>1607, 'code'=>'3091', 'type'=>'districts', 'name'=>'Districts 3091, City 309, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1608, 'regionable_id'=>7233, 'regionable_type'=>'districts']); //Banyuasin Iii
                DB::table('regions')->insert(['id'=>1609, 'parent'=>1608, 'code'=>'30911', 'type'=>'village', 'name'=>'Village 30911, Districts 3091, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1609, 'regionable_id'=>81614, 'regionable_type'=>'village']); //Pangkalan Balai
                DB::table('regions')->insert(['id'=>1610, 'parent'=>1608, 'code'=>'30912', 'type'=>'village', 'name'=>'Village 30912, Districts 3091, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1610, 'regionable_id'=>81615, 'regionable_type'=>'village']); //Seterio
                DB::table('regions')->insert(['id'=>1611, 'parent'=>1608, 'code'=>'30913', 'type'=>'village', 'name'=>'Village 30913, Districts 3091, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1611, 'regionable_id'=>81616, 'regionable_type'=>'village']); //Suka Raja Baru
                DB::table('regions')->insert(['id'=>1612, 'parent'=>1608, 'code'=>'30914', 'type'=>'village', 'name'=>'Village 30914, Districts 3091, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1612, 'regionable_id'=>81617, 'regionable_type'=>'village']); //Mulya Agung
                DB::table('regions')->insert(['id'=>1613, 'parent'=>1608, 'code'=>'30915', 'type'=>'village', 'name'=>'Village 30915, Districts 3091, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1613, 'regionable_id'=>81618, 'regionable_type'=>'village']); //Kayuara Kuning
                DB::table('regions')->insert(['id'=>1614, 'parent'=>1608, 'code'=>'30916', 'type'=>'village', 'name'=>'Village 30916, Districts 3091, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1614, 'regionable_id'=>81619, 'regionable_type'=>'village']); //Suka Mulya
            DB::table('regions')->insert(['id'=>1615, 'parent'=>1607, 'code'=>'3095', 'type'=>'districts', 'name'=>'Districts 3095, City 309, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1615, 'regionable_id'=>7233, 'regionable_type'=>'districts']); //Banyuasin Iii
            DB::table('regionables')->insert(['region_id'=>1615, 'regionable_id'=>7234, 'regionable_type'=>'districts']); //Sembawa
            DB::table('regionables')->insert(['region_id'=>1615, 'regionable_id'=>7235, 'regionable_type'=>'districts']); //Suak Tapeh
            DB::table('regionables')->insert(['region_id'=>1615, 'regionable_id'=>7236, 'regionable_type'=>'districts']); //Betung
            DB::table('regionables')->insert(['region_id'=>1615, 'regionable_id'=>7237, 'regionable_type'=>'districts']); //Pulau Rimau
            DB::table('regionables')->insert(['region_id'=>1615, 'regionable_id'=>7238, 'regionable_type'=>'districts']); //Tungkal Ilir
                DB::table('regions')->insert(['id'=>1616, 'parent'=>1615, 'code'=>'30959', 'type'=>'village', 'name'=>'Village 30959, Districts 3095, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81673, 'regionable_type'=>'village']); //Banjarsari (air Senda Iv)
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81674, 'regionable_type'=>'village']); //Buana Murti (air Senda Iii)
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81675, 'regionable_type'=>'village']); //Budi Asih
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81676, 'regionable_type'=>'village']); //Bumi Rejo
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81677, 'regionable_type'=>'village']); //Dana Mulya
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81678, 'regionable_type'=>'village']); //Karang Manunggal
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81679, 'regionable_type'=>'village']); //Kelapa Dua
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81680, 'regionable_type'=>'village']); //Majatra
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81681, 'regionable_type'=>'village']); //Mekar Sari
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81682, 'regionable_type'=>'village']); //Mukut
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81683, 'regionable_type'=>'village']); //Nunggal Sari
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81684, 'regionable_type'=>'village']); //Penuguan
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81685, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81686, 'regionable_type'=>'village']); //Rawa Banda
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81687, 'regionable_type'=>'village']); //Ringin Harjo
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81688, 'regionable_type'=>'village']); //Rukun Makmur
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81689, 'regionable_type'=>'village']); //Senda Mukti (air Senda Ii)
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81690, 'regionable_type'=>'village']); //Songo Makmur
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81691, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81692, 'regionable_type'=>'village']); //Sumber Mukti
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81693, 'regionable_type'=>'village']); //Sumber Mulya/mulyo
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81694, 'regionable_type'=>'village']); //Sumber Rejeki
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81695, 'regionable_type'=>'village']); //Sumber Rejo
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81696, 'regionable_type'=>'village']); //Tabuan Asri
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81697, 'regionable_type'=>'village']); //Teluk Betung
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81698, 'regionable_type'=>'village']); //Tirta Mulya (tirto Mulyo)
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81699, 'regionable_type'=>'village']); //Wana Mukti
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81700, 'regionable_type'=>'village']); //Wonodadi
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81701, 'regionable_type'=>'village']); //Wonosari
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81702, 'regionable_type'=>'village']); //Bentayan
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81703, 'regionable_type'=>'village']); //Bumi Serdang
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81704, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81705, 'regionable_type'=>'village']); //Karang Asem
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81706, 'regionable_type'=>'village']); //Karang Mulya
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81707, 'regionable_type'=>'village']); //Keluang
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81708, 'regionable_type'=>'village']); //Marga Rahayu
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81709, 'regionable_type'=>'village']); //Pancamulya
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81710, 'regionable_type'=>'village']); //Sidomulyo
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81711, 'regionable_type'=>'village']); //Suka Karya
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81712, 'regionable_type'=>'village']); //Suka Raja
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81713, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81714, 'regionable_type'=>'village']); //Sukamulya
                DB::table('regionables')->insert(['region_id'=>1616, 'regionable_id'=>81715, 'regionable_type'=>'village']); //Teluk Tenggulang
            DB::table('regions')->insert(['id'=>1617, 'parent'=>1607, 'code'=>'3096', 'type'=>'districts', 'name'=>'Districts 3096, City 309, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1617, 'regionable_id'=>7239, 'regionable_type'=>'districts']); //Talang Kelapa
            DB::table('regionables')->insert(['region_id'=>1617, 'regionable_id'=>7240, 'regionable_type'=>'districts']); //Tanjung Lago
            DB::table('regionables')->insert(['region_id'=>1617, 'regionable_id'=>7241, 'regionable_type'=>'districts']); //Air Kumbang
            DB::table('regionables')->insert(['region_id'=>1617, 'regionable_id'=>7242, 'regionable_type'=>'districts']); //Banyuasin I
            DB::table('regionables')->insert(['region_id'=>1617, 'regionable_id'=>7243, 'regionable_type'=>'districts']); //Rambutan
            DB::table('regionables')->insert(['region_id'=>1617, 'regionable_id'=>7244, 'regionable_type'=>'districts']); //Rantau Bayur
                DB::table('regions')->insert(['id'=>1618, 'parent'=>1617, 'code'=>'30968', 'type'=>'village', 'name'=>'Village 30968, Districts 3096, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81791, 'regionable_type'=>'village']); //Kemang Bejalu
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81792, 'regionable_type'=>'village']); //Lebung
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81793, 'regionable_type'=>'village']); //Lubuk Rengas
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81794, 'regionable_type'=>'village']); //Muara Abab
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81795, 'regionable_type'=>'village']); //Pagar Bulan
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81796, 'regionable_type'=>'village']); //Peldas
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81797, 'regionable_type'=>'village']); //Penandingan
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81798, 'regionable_type'=>'village']); //Rantau Bayur
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81799, 'regionable_type'=>'village']); //Rantau Harapan
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81800, 'regionable_type'=>'village']); //Sejagung
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81801, 'regionable_type'=>'village']); //Semuntul
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81802, 'regionable_type'=>'village']); //Sri Jaya
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81803, 'regionable_type'=>'village']); //Sukarela
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81804, 'regionable_type'=>'village']); //Sungai Lilin
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81805, 'regionable_type'=>'village']); //Sungai Pinang
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81806, 'regionable_type'=>'village']); //Sungainaik
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81807, 'regionable_type'=>'village']); //Talang Kemang
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81808, 'regionable_type'=>'village']); //Tanjung Menang Musi
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81809, 'regionable_type'=>'village']); //Tanjung Pasir
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81810, 'regionable_type'=>'village']); //Tanjung Tiga
                DB::table('regionables')->insert(['region_id'=>1618, 'regionable_id'=>81811, 'regionable_type'=>'village']); //Tebing Abang
            DB::table('regions')->insert(['id'=>1619, 'parent'=>1607, 'code'=>'3097', 'type'=>'districts', 'name'=>'Districts 3097, City 309, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1619, 'regionable_id'=>7240, 'regionable_type'=>'districts']); //Tanjung Lago
            DB::table('regionables')->insert(['region_id'=>1619, 'regionable_id'=>7245, 'regionable_type'=>'districts']); //Banyuasin Ii
            DB::table('regionables')->insert(['region_id'=>1619, 'regionable_id'=>7246, 'regionable_type'=>'districts']); //Makarti Jaya
            DB::table('regionables')->insert(['region_id'=>1619, 'regionable_id'=>7247, 'regionable_type'=>'districts']); //Air Salek
            DB::table('regionables')->insert(['region_id'=>1619, 'regionable_id'=>7248, 'regionable_type'=>'districts']); //Sumber Marga Telang
            DB::table('regionables')->insert(['region_id'=>1619, 'regionable_id'=>7249, 'regionable_type'=>'districts']); //Muara Telang
            DB::table('regionables')->insert(['region_id'=>1619, 'regionable_id'=>7250, 'regionable_type'=>'districts']); //Muara Padang
            DB::table('regionables')->insert(['region_id'=>1619, 'regionable_id'=>7251, 'regionable_type'=>'districts']); //Muara Sugihan
                DB::table('regions')->insert(['id'=>1620, 'parent'=>1619, 'code'=>'30975', 'type'=>'village', 'name'=>'Village 30975, Districts 3097, City 309, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81845, 'regionable_type'=>'village']); //Air Solok Batu
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81846, 'regionable_type'=>'village']); //Bintaran
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81847, 'regionable_type'=>'village']); //Damarwulan
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81848, 'regionable_type'=>'village']); //Enggalrejo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81849, 'regionable_type'=>'village']); //Saleh Makmur
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81850, 'regionable_type'=>'village']); //Sidoharjo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81851, 'regionable_type'=>'village']); //Srikaton
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81852, 'regionable_type'=>'village']); //Srimulyo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81853, 'regionable_type'=>'village']); //Upang
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81854, 'regionable_type'=>'village']); //Upang Marga
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81881, 'regionable_type'=>'village']); //Air Gading
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81882, 'regionable_type'=>'village']); //Daya Makmur
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81883, 'regionable_type'=>'village']); //Daya Utama
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81884, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81885, 'regionable_type'=>'village']); //Marga Sugihan
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81886, 'regionable_type'=>'village']); //Margomulyo 20
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81887, 'regionable_type'=>'village']); //Muara Padang
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81888, 'regionable_type'=>'village']); //Purwodadi
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81889, 'regionable_type'=>'village']); //Sidomulyo 18
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81890, 'regionable_type'=>'village']); //Sidomulyo 20
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81891, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81892, 'regionable_type'=>'village']); //Sumber Makmur
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81893, 'regionable_type'=>'village']); //Tanjung Baru
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81894, 'regionable_type'=>'village']); //Tirta Jaya
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81895, 'regionable_type'=>'village']); //Tirto Raharjo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81896, 'regionable_type'=>'village']); //Argo Mulyo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81897, 'regionable_type'=>'village']); //Beringin Agung
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81898, 'regionable_type'=>'village']); //Cendana
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81899, 'regionable_type'=>'village']); //Daya Bangun Harjo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81900, 'regionable_type'=>'village']); //Daya Kusuma/kesuma
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81901, 'regionable_type'=>'village']); //Daya Murni
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81902, 'regionable_type'=>'village']); //Ganesha Mukti
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81903, 'regionable_type'=>'village']); //Gilirang
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81904, 'regionable_type'=>'village']); //Indrapura
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81905, 'regionable_type'=>'village']); //Jalur Mulya
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81906, 'regionable_type'=>'village']); //Juru Taro (taroh)
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81907, 'regionable_type'=>'village']); //Kuala/kualo Sugihan
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81908, 'regionable_type'=>'village']); //Marega Rukun (margo/marga Rukun)
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81909, 'regionable_type'=>'village']); //Margo Mulyo 16
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81910, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81911, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81912, 'regionable_type'=>'village']); //Sido Makmur
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81913, 'regionable_type'=>'village']); //Sugih Waras
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81914, 'regionable_type'=>'village']); //Sumber Mulyo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81915, 'regionable_type'=>'village']); //Timbul Jaya
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81916, 'regionable_type'=>'village']); //Tirta/tirto Mulyo
                DB::table('regionables')->insert(['region_id'=>1620, 'regionable_id'=>81917, 'regionable_type'=>'village']); //Tirto Harjo
        DB::table('regions')->insert(['id'=>1621, 'parent'=>1262, 'code'=>'311', 'type'=>'city', 'name'=>'City 311, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1621, 'regionable_id'=>460, 'regionable_type'=>'city']); //Prabumulih city
        DB::table('regionables')->insert(['region_id'=>1621, 'regionable_id'=>461, 'regionable_type'=>'city']); //Muara Enim regencies
            DB::table('regions')->insert(['id'=>1622, 'parent'=>1621, 'code'=>'3117', 'type'=>'districts', 'name'=>'Districts 3117, City 311, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1622, 'regionable_id'=>7258, 'regionable_type'=>'districts']); //Lembak
            DB::table('regionables')->insert(['region_id'=>1622, 'regionable_id'=>7259, 'regionable_type'=>'districts']); //Muara Belida
            DB::table('regionables')->insert(['region_id'=>1622, 'regionable_id'=>7260, 'regionable_type'=>'districts']); //Gelumbang
            DB::table('regionables')->insert(['region_id'=>1622, 'regionable_id'=>7261, 'regionable_type'=>'districts']); //Kelekar
            DB::table('regionables')->insert(['region_id'=>1622, 'regionable_id'=>7262, 'regionable_type'=>'districts']); //Rambang Dangku
            DB::table('regionables')->insert(['region_id'=>1622, 'regionable_id'=>7263, 'regionable_type'=>'districts']); //Rambang
            DB::table('regionables')->insert(['region_id'=>1622, 'regionable_id'=>7264, 'regionable_type'=>'districts']); //Lubai
                DB::table('regions')->insert(['id'=>1623, 'parent'=>1622, 'code'=>'31173', 'type'=>'village', 'name'=>'Village 31173, Districts 3117, City 311, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82031, 'regionable_type'=>'village']); //Air Keruh
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82032, 'regionable_type'=>'village']); //Baru Rambang
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82033, 'regionable_type'=>'village']); //Kencana Mulia
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82034, 'regionable_type'=>'village']); //Marga Mulia
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82035, 'regionable_type'=>'village']); //Negeri Agung
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82036, 'regionable_type'=>'village']); //Pagar Agung
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82037, 'regionable_type'=>'village']); //Sugih Waras
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82038, 'regionable_type'=>'village']); //Sugihan
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82039, 'regionable_type'=>'village']); //Sukarami
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82040, 'regionable_type'=>'village']); //Sumber Rahayu
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82041, 'regionable_type'=>'village']); //Tanjung Dalam
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82042, 'regionable_type'=>'village']); //Tanjung Raya
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82043, 'regionable_type'=>'village']); //Aur
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82044, 'regionable_type'=>'village']); //Beringin
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82045, 'regionable_type'=>'village']); //Gunung Raja
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82046, 'regionable_type'=>'village']); //Jiwa Baru
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82047, 'regionable_type'=>'village']); //Karang Agung
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82048, 'regionable_type'=>'village']); //Karang Mulia
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82049, 'regionable_type'=>'village']); //Karang Sari
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82050, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82051, 'regionable_type'=>'village']); //Lecah
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82052, 'regionable_type'=>'village']); //Lubai Makmur
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82053, 'regionable_type'=>'village']); //Lubai Persada
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82054, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82055, 'regionable_type'=>'village']); //Pagar Dewa
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82056, 'regionable_type'=>'village']); //Pagar Gunung
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82057, 'regionable_type'=>'village']); //Prabu Menang
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82058, 'regionable_type'=>'village']); //Suka Merindu
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82059, 'regionable_type'=>'village']); //Sumber Asri
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82060, 'regionable_type'=>'village']); //Sumber Mulya
                DB::table('regionables')->insert(['region_id'=>1623, 'regionable_id'=>82061, 'regionable_type'=>'village']); //Tanjung Kemala
        DB::table('regions')->insert(['id'=>1624, 'parent'=>1262, 'code'=>'312', 'type'=>'city', 'name'=>'City 312, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1624, 'regionable_id'=>461, 'regionable_type'=>'city']); //Muara Enim regencies
            DB::table('regions')->insert(['id'=>1625, 'parent'=>1624, 'code'=>'3121', 'type'=>'districts', 'name'=>'Districts 3121, City 312, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1625, 'regionable_id'=>7265, 'regionable_type'=>'districts']); //Talang Ubi
                DB::table('regions')->insert(['id'=>1626, 'parent'=>1625, 'code'=>'31211', 'type'=>'village', 'name'=>'Village 31211, Districts 3121, City 312, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1626, 'regionable_id'=>82062, 'regionable_type'=>'village']); //Talang Ubi Barat
                DB::table('regions')->insert(['id'=>1627, 'parent'=>1625, 'code'=>'31212', 'type'=>'village', 'name'=>'Village 31212, Districts 3121, City 312, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1627, 'regionable_id'=>82063, 'regionable_type'=>'village']); //Talang Ubi Selatan
                DB::table('regions')->insert(['id'=>1628, 'parent'=>1625, 'code'=>'31213', 'type'=>'village', 'name'=>'Village 31213, Districts 3121, City 312, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1628, 'regionable_id'=>82064, 'regionable_type'=>'village']); //Talang Ubi Timur
                DB::table('regions')->insert(['id'=>1629, 'parent'=>1625, 'code'=>'31214', 'type'=>'village', 'name'=>'Village 31214, Districts 3121, City 312, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82065, 'regionable_type'=>'village']); //Benakat Minyak
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82066, 'regionable_type'=>'village']); //Benuang
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82067, 'regionable_type'=>'village']); //Handayani Mulya
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82068, 'regionable_type'=>'village']); //Kertadewa
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82069, 'regionable_type'=>'village']); //Panta Dewa
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82070, 'regionable_type'=>'village']); //Psr.bayangkara
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82071, 'regionable_type'=>'village']); //Semangus
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82072, 'regionable_type'=>'village']); //Sinar Dewa
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82073, 'regionable_type'=>'village']); //Suka Damai
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82074, 'regionable_type'=>'village']); //Sukamaju
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82075, 'regionable_type'=>'village']); //Sungai Baung
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82076, 'regionable_type'=>'village']); //Sungai Ibul
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82077, 'regionable_type'=>'village']); //Talang Akar
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82078, 'regionable_type'=>'village']); //Talang Bulang
                DB::table('regionables')->insert(['region_id'=>1629, 'regionable_id'=>82079, 'regionable_type'=>'village']); //Talang Ubi Utara
        DB::table('regions')->insert(['id'=>1630, 'parent'=>1262, 'code'=>'313', 'type'=>'city', 'name'=>'City 313, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1630, 'regionable_id'=>461, 'regionable_type'=>'city']); //Muara Enim regencies
        DB::table('regionables')->insert(['region_id'=>1630, 'regionable_id'=>462, 'regionable_type'=>'city']); //Lahat regencies
            DB::table('regions')->insert(['id'=>1631, 'parent'=>1630, 'code'=>'3135', 'type'=>'districts', 'name'=>'Districts 3135, City 313, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7271, 'regionable_type'=>'districts']); //Ujan Mas
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7272, 'regionable_type'=>'districts']); //Gunung Megang
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7273, 'regionable_type'=>'districts']); //Semendo Darat Ulu
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7274, 'regionable_type'=>'districts']); //Tanjung Agung
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7275, 'regionable_type'=>'districts']); //Semendo Darat Laut
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7276, 'regionable_type'=>'districts']); //Semendo Darat Tengah
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7277, 'regionable_type'=>'districts']); //Sungai Rotan
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7280, 'regionable_type'=>'districts']); //Pajar Bulan
            DB::table('regionables')->insert(['region_id'=>1631, 'regionable_id'=>7281, 'regionable_type'=>'districts']); //Sukamerindu
                DB::table('regions')->insert(['id'=>1632, 'parent'=>1631, 'code'=>'31356', 'type'=>'village', 'name'=>'Village 31356, Districts 3135, City 313, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82204, 'regionable_type'=>'village']); //Babatan
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82205, 'regionable_type'=>'village']); //Karya Nyata
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82206, 'regionable_type'=>'village']); //Muara Danau
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82207, 'regionable_type'=>'village']); //Muara Dua
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82208, 'regionable_type'=>'village']); //Pagar Agung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82209, 'regionable_type'=>'village']); //Penindaian
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82210, 'regionable_type'=>'village']); //Penyandingan
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82211, 'regionable_type'=>'village']); //Perapau
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82212, 'regionable_type'=>'village']); //Pulau Panggung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82213, 'regionable_type'=>'village']); //Tanah Abang
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82214, 'regionable_type'=>'village']); //Batu Surau
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82215, 'regionable_type'=>'village']); //Gunung Agung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82216, 'regionable_type'=>'village']); //Kota Agung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82217, 'regionable_type'=>'village']); //Kota Padang
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82218, 'regionable_type'=>'village']); //Muara Tenang
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82219, 'regionable_type'=>'village']); //Palak Tanah
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82220, 'regionable_type'=>'village']); //Rekimai Jaya
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82221, 'regionable_type'=>'village']); //Seri Tanjung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82222, 'regionable_type'=>'village']); //Tanjung Raya
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82223, 'regionable_type'=>'village']); //Tebing Abang
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82224, 'regionable_type'=>'village']); //Tenam Bungkuk
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82255, 'regionable_type'=>'village']); //Aceh
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82256, 'regionable_type'=>'village']); //Bantunan
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82257, 'regionable_type'=>'village']); //Benua Raja
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82258, 'regionable_type'=>'village']); //Gelung Sakti
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82259, 'regionable_type'=>'village']); //Jentian
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82260, 'regionable_type'=>'village']); //Kota Raya Darat
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82261, 'regionable_type'=>'village']); //Kota Raya Lembak
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82262, 'regionable_type'=>'village']); //Pajar Bulan
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82263, 'regionable_type'=>'village']); //Pajar Tinggi
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82264, 'regionable_type'=>'village']); //Pulau
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82265, 'regionable_type'=>'village']); //Pulau Panggung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82266, 'regionable_type'=>'village']); //Sukabumi
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82267, 'regionable_type'=>'village']); //Sumur
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82268, 'regionable_type'=>'village']); //Talang Baru
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82269, 'regionable_type'=>'village']); //Talang Mengkenang
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82270, 'regionable_type'=>'village']); //Talang Padang Tinggi
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82271, 'regionable_type'=>'village']); //Talang Pagar Agung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82272, 'regionable_type'=>'village']); //Talang Tangsi
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82273, 'regionable_type'=>'village']); //Tongkok
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82274, 'regionable_type'=>'village']); //Ulak Bandung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82275, 'regionable_type'=>'village']); //Gunung Liwat
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82276, 'regionable_type'=>'village']); //Guru Agung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82277, 'regionable_type'=>'village']); //Kapitan
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82278, 'regionable_type'=>'village']); //Karang Caya
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82279, 'regionable_type'=>'village']); //Pagar Kaya
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82280, 'regionable_type'=>'village']); //Rambai Kaca
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82281, 'regionable_type'=>'village']); //Sukamerindu
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82282, 'regionable_type'=>'village']); //Sukaraja
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82283, 'regionable_type'=>'village']); //Tanjung Agung
                DB::table('regionables')->insert(['region_id'=>1632, 'regionable_id'=>82284, 'regionable_type'=>'village']); //Tanjung Raya
        DB::table('regions')->insert(['id'=>1633, 'parent'=>1262, 'code'=>'314', 'type'=>'city', 'name'=>'City 314, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1633, 'regionable_id'=>462, 'regionable_type'=>'city']); //Lahat regencies
        DB::table('regionables')->insert(['region_id'=>1633, 'regionable_id'=>463, 'regionable_type'=>'city']); //Empat Lawang regencies
            DB::table('regions')->insert(['id'=>1634, 'parent'=>1633, 'code'=>'3145', 'type'=>'districts', 'name'=>'Districts 3145, City 314, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1634, 'regionable_id'=>7285, 'regionable_type'=>'districts']); //Kikim Barat
            DB::table('regionables')->insert(['region_id'=>1634, 'regionable_id'=>7286, 'regionable_type'=>'districts']); //Kikim Timur
            DB::table('regionables')->insert(['region_id'=>1634, 'regionable_id'=>7287, 'regionable_type'=>'districts']); //Kikim Selatan
            DB::table('regionables')->insert(['region_id'=>1634, 'regionable_id'=>7288, 'regionable_type'=>'districts']); //Kikim Tengah
            DB::table('regionables')->insert(['region_id'=>1634, 'regionable_id'=>7289, 'regionable_type'=>'districts']); //Mulak Ulu
            DB::table('regionables')->insert(['region_id'=>1634, 'regionable_id'=>7290, 'regionable_type'=>'districts']); //Tanjung Tebat
            DB::table('regionables')->insert(['region_id'=>1634, 'regionable_id'=>7302, 'regionable_type'=>'districts']); //Tebing Tinggi
            DB::table('regionables')->insert(['region_id'=>1634, 'regionable_id'=>7303, 'regionable_type'=>'districts']); //Saling
                DB::table('regions')->insert(['id'=>1635, 'parent'=>1634, 'code'=>'31453', 'type'=>'village', 'name'=>'Village 31453, Districts 3145, City 314, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82425, 'regionable_type'=>'village']); //Air Puar
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82426, 'regionable_type'=>'village']); //Babatan
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82427, 'regionable_type'=>'village']); //Danau Belidang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82428, 'regionable_type'=>'village']); //Datar Balam
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82429, 'regionable_type'=>'village']); //Durian Dangkal
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82430, 'regionable_type'=>'village']); //Geramat
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82431, 'regionable_type'=>'village']); //Jadian Baru
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82432, 'regionable_type'=>'village']); //Jadian Lama
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82433, 'regionable_type'=>'village']); //Karang Lebak
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82434, 'regionable_type'=>'village']); //Keban Agung
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82435, 'regionable_type'=>'village']); //Lawang Agung Mulak
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82436, 'regionable_type'=>'village']); //Lesung Batu
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82437, 'regionable_type'=>'village']); //Lubuk Dendan
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82438, 'regionable_type'=>'village']); //Mengkenang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82439, 'regionable_type'=>'village']); //Muara Tiga
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82440, 'regionable_type'=>'village']); //Padang Bindu
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82441, 'regionable_type'=>'village']); //Padang Masad/masat
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82442, 'regionable_type'=>'village']); //Pajar Bulan
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82443, 'regionable_type'=>'village']); //Penandingan
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82444, 'regionable_type'=>'village']); //Pengentaan
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82445, 'regionable_type'=>'village']); //Penindaian
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82446, 'regionable_type'=>'village']); //Sengkuang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82447, 'regionable_type'=>'village']); //Sukananti
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82448, 'regionable_type'=>'village']); //Talang Berangin
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82449, 'regionable_type'=>'village']); //Talang Padang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82450, 'regionable_type'=>'village']); //Tebing Tinggi
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82451, 'regionable_type'=>'village']); //Muara Danau
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82452, 'regionable_type'=>'village']); //Talang Jawa
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82453, 'regionable_type'=>'village']); //Tanjung Menang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82454, 'regionable_type'=>'village']); //Tanjung Raya
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82633, 'regionable_type'=>'village']); //Aur Gading
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82634, 'regionable_type'=>'village']); //Batu Panceh
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82635, 'regionable_type'=>'village']); //Batu Raja Baru
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82636, 'regionable_type'=>'village']); //Batu Raja Lama
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82637, 'regionable_type'=>'village']); //Fajar/pajar Bakti
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82638, 'regionable_type'=>'village']); //Jaya Loka
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82639, 'regionable_type'=>'village']); //Kemang Manis
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82640, 'regionable_type'=>'village']); //Kota Gading
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82641, 'regionable_type'=>'village']); //Kupang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82642, 'regionable_type'=>'village']); //Lampar Baru
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82643, 'regionable_type'=>'village']); //Lubuk Gelanggang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82644, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82645, 'regionable_type'=>'village']); //Mekarti Jaya
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82646, 'regionable_type'=>'village']); //Pancurmas (unit Jaya)
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82647, 'regionable_type'=>'village']); //Pasar Tebing Tinggi
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82648, 'regionable_type'=>'village']); //Rantau Tenang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82649, 'regionable_type'=>'village']); //Seguring Kecil
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82650, 'regionable_type'=>'village']); //Sugi Waras
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82651, 'regionable_type'=>'village']); //Tanjung Kupang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82652, 'regionable_type'=>'village']); //Tanjung Kupang Baru
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82653, 'regionable_type'=>'village']); //Tanjung Makmur
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82654, 'regionable_type'=>'village']); //Terusan Baru
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82655, 'regionable_type'=>'village']); //Terusan Lama
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82656, 'regionable_type'=>'village']); //Ujung Alih
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82657, 'regionable_type'=>'village']); //Ulak Mengkudu
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82658, 'regionable_type'=>'village']); //Kebon
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82659, 'regionable_type'=>'village']); //Lubuk Kelumpang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82660, 'regionable_type'=>'village']); //Muara Saling
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82661, 'regionable_type'=>'village']); //Sawah
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82662, 'regionable_type'=>'village']); //Suka Kaya
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82663, 'regionable_type'=>'village']); //Taba
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82664, 'regionable_type'=>'village']); //Tanjung Ning Jaya
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82665, 'regionable_type'=>'village']); //Tanjung Ning Lama
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82666, 'regionable_type'=>'village']); //Tanjung Ning Simpang
                DB::table('regionables')->insert(['region_id'=>1635, 'regionable_id'=>82667, 'regionable_type'=>'village']); //Tanjung Ning Tengah
        DB::table('regions')->insert(['id'=>1636, 'parent'=>1262, 'code'=>'315', 'type'=>'city', 'name'=>'City 315, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1636, 'regionable_id'=>462, 'regionable_type'=>'city']); //Lahat regencies
        DB::table('regionables')->insert(['region_id'=>1636, 'regionable_id'=>463, 'regionable_type'=>'city']); //Empat Lawang regencies
        DB::table('regionables')->insert(['region_id'=>1636, 'regionable_id'=>464, 'regionable_type'=>'city']); //Pagar Alam city
            DB::table('regions')->insert(['id'=>1637, 'parent'=>1636, 'code'=>'3151', 'type'=>'districts', 'name'=>'Districts 3151, City 315, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1637, 'regionable_id'=>7312, 'regionable_type'=>'districts']); //Pagar Alam Utara
            DB::table('regionables')->insert(['region_id'=>1637, 'regionable_id'=>7313, 'regionable_type'=>'districts']); //Dempo Utara
                DB::table('regions')->insert(['id'=>1638, 'parent'=>1637, 'code'=>'31515', 'type'=>'village', 'name'=>'Village 31515, Districts 3151, City 315, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1638, 'regionable_id'=>82794, 'regionable_type'=>'village']); //Selibar
                DB::table('regionables')->insert(['region_id'=>1638, 'regionable_id'=>82799, 'regionable_type'=>'village']); //Pagar Wangi
            DB::table('regions')->insert(['id'=>1639, 'parent'=>1636, 'code'=>'3152', 'type'=>'districts', 'name'=>'Districts 3152, City 315, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1639, 'regionable_id'=>7313, 'regionable_type'=>'districts']); //Dempo Utara
            DB::table('regionables')->insert(['region_id'=>1639, 'regionable_id'=>7314, 'regionable_type'=>'districts']); //Dempo Selatan
            DB::table('regionables')->insert(['region_id'=>1639, 'regionable_id'=>7315, 'regionable_type'=>'districts']); //Dempo Tengah
            DB::table('regionables')->insert(['region_id'=>1639, 'regionable_id'=>7316, 'regionable_type'=>'districts']); //Pagar Alam Selatan
                DB::table('regions')->insert(['id'=>1640, 'parent'=>1639, 'code'=>'31522', 'type'=>'village', 'name'=>'Village 31522, Districts 3152, City 315, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1640, 'regionable_id'=>82816, 'regionable_type'=>'village']); //Tanjung Payang
                DB::table('regions')->insert(['id'=>1641, 'parent'=>1639, 'code'=>'31526', 'type'=>'village', 'name'=>'Village 31526, Districts 3152, City 315, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1641, 'regionable_id'=>82817, 'regionable_type'=>'village']); //Besemah Serasan
                DB::table('regionables')->insert(['region_id'=>1641, 'regionable_id'=>82818, 'regionable_type'=>'village']); //Tebat Giri Indah
                DB::table('regionables')->insert(['region_id'=>1641, 'regionable_id'=>82819, 'regionable_type'=>'village']); //Tumbak Ulas
                DB::table('regionables')->insert(['region_id'=>1641, 'regionable_id'=>82820, 'regionable_type'=>'village']); //Ulu Lurah/rurah
                DB::table('regions')->insert(['id'=>1642, 'parent'=>1639, 'code'=>'31527', 'type'=>'village', 'name'=>'Village 31527, Districts 3152, City 315, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1642, 'regionable_id'=>82821, 'regionable_type'=>'village']); //Nendagung
                DB::table('regionables')->insert(['region_id'=>1642, 'regionable_id'=>82822, 'regionable_type'=>'village']); //Sidorejo
                DB::table('regions')->insert(['id'=>1643, 'parent'=>1639, 'code'=>'31529', 'type'=>'village', 'name'=>'Village 31529, Districts 3152, City 315, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1643, 'regionable_id'=>82823, 'regionable_type'=>'village']); //Gunung Dempo
            DB::table('regions')->insert(['id'=>1644, 'parent'=>1636, 'code'=>'3155', 'type'=>'districts', 'name'=>'Districts 3155, City 315, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1644, 'regionable_id'=>7312, 'regionable_type'=>'districts']); //Pagar Alam Utara
                DB::table('regions')->insert(['id'=>1645, 'parent'=>1644, 'code'=>'31551', 'type'=>'village', 'name'=>'Village 31551, Districts 3155, City 315, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1645, 'regionable_id'=>82798, 'regionable_type'=>'village']); //Sukorejo
        DB::table('regions')->insert(['id'=>1646, 'parent'=>1262, 'code'=>'316', 'type'=>'city', 'name'=>'City 316, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1646, 'regionable_id'=>458, 'regionable_type'=>'city']); //Musi Rawas regencies
        DB::table('regionables')->insert(['region_id'=>1646, 'regionable_id'=>461, 'regionable_type'=>'city']); //Muara Enim regencies
        DB::table('regionables')->insert(['region_id'=>1646, 'regionable_id'=>465, 'regionable_type'=>'city']); //Lubuk Linggau city
            DB::table('regions')->insert(['id'=>1647, 'parent'=>1646, 'code'=>'3161', 'type'=>'districts', 'name'=>'Districts 3161, City 316, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1647, 'regionable_id'=>7317, 'regionable_type'=>'districts']); //Lubuk Linggau Barat Dua (ii)
            DB::table('regionables')->insert(['region_id'=>1647, 'regionable_id'=>7318, 'regionable_type'=>'districts']); //Lubuk Linggau Barat Satu (i)
            DB::table('regionables')->insert(['region_id'=>1647, 'regionable_id'=>7319, 'regionable_type'=>'districts']); //Lubuk Linggau Utara Dua (ii)
            DB::table('regionables')->insert(['region_id'=>1647, 'regionable_id'=>7320, 'regionable_type'=>'districts']); //Lubuk Linggau Utara Satu (i)
                DB::table('regions')->insert(['id'=>1648, 'parent'=>1647, 'code'=>'31618', 'type'=>'village', 'name'=>'Village 31618, Districts 3161, City 316, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1648, 'regionable_id'=>82853, 'regionable_type'=>'village']); //Petanang Ilir
                DB::table('regionables')->insert(['region_id'=>1648, 'regionable_id'=>82854, 'regionable_type'=>'village']); //Petanang Ulu
                DB::table('regions')->insert(['id'=>1649, 'parent'=>1647, 'code'=>'31619', 'type'=>'village', 'name'=>'Village 31619, Districts 3161, City 316, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82844, 'regionable_type'=>'village']); //Jogoboyo (joyoboyo)
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82845, 'regionable_type'=>'village']); //Kali Serayu
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82846, 'regionable_type'=>'village']); //Kenanga
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82847, 'regionable_type'=>'village']); //Pasar Satlit
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82848, 'regionable_type'=>'village']); //Ponorogo
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82849, 'regionable_type'=>'village']); //Puncak Kemuning
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82850, 'regionable_type'=>'village']); //Senalang
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82855, 'regionable_type'=>'village']); //Belalau I
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82856, 'regionable_type'=>'village']); //Belalau Ii
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82857, 'regionable_type'=>'village']); //Durian Rampak
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82858, 'regionable_type'=>'village']); //Marga Bakti
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82859, 'regionable_type'=>'village']); //Marga Rejo (margorejo)
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82860, 'regionable_type'=>'village']); //Sumber Agung
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82861, 'regionable_type'=>'village']); //Taba Baru
                DB::table('regionables')->insert(['region_id'=>1649, 'regionable_id'=>82862, 'regionable_type'=>'village']); //Tanjung Raya
            DB::table('regions')->insert(['id'=>1650, 'parent'=>1646, 'code'=>'3162', 'type'=>'districts', 'name'=>'Districts 3162, City 316, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1650, 'regionable_id'=>7214, 'regionable_type'=>'districts']); //Selangit
            DB::table('regionables')->insert(['region_id'=>1650, 'regionable_id'=>7278, 'regionable_type'=>'districts']); //Benakat
            DB::table('regionables')->insert(['region_id'=>1650, 'regionable_id'=>7319, 'regionable_type'=>'districts']); //Lubuk Linggau Utara Dua (ii)
            DB::table('regionables')->insert(['region_id'=>1650, 'regionable_id'=>7321, 'regionable_type'=>'districts']); //Lubuk Linggau Timur Dua (ii)
            DB::table('regionables')->insert(['region_id'=>1650, 'regionable_id'=>7322, 'regionable_type'=>'districts']); //Lubuk Linggau Timur Satu (i)
            DB::table('regionables')->insert(['region_id'=>1650, 'regionable_id'=>7323, 'regionable_type'=>'districts']); //Lubuk Linggau Selatan Satu (i)
            DB::table('regionables')->insert(['region_id'=>1650, 'regionable_id'=>7324, 'regionable_type'=>'districts']); //Lubuk Linggau Selatan Dua (ii)
                DB::table('regions')->insert(['id'=>1651, 'parent'=>1650, 'code'=>'31626', 'type'=>'village', 'name'=>'Village 31626, Districts 3162, City 316, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82242, 'regionable_type'=>'village']); //Betung
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82243, 'regionable_type'=>'village']); //Hidup Baru
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82244, 'regionable_type'=>'village']); //Padang Bindu
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82245, 'regionable_type'=>'village']); //Pagar Dewa
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82246, 'regionable_type'=>'village']); //Pagar Jati
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82247, 'regionable_type'=>'village']); //Rami Pasai
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82880, 'regionable_type'=>'village']); //Air Kati
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82881, 'regionable_type'=>'village']); //Air Temam
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82882, 'regionable_type'=>'village']); //Jukung
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82883, 'regionable_type'=>'village']); //Lubuk Binjai
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82884, 'regionable_type'=>'village']); //Lubuk Kupang
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82885, 'regionable_type'=>'village']); //Perumnas Rahmah
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82886, 'regionable_type'=>'village']); //Rahmah
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82887, 'regionable_type'=>'village']); //Eka Marga
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82888, 'regionable_type'=>'village']); //Karang Ketuan
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82889, 'regionable_type'=>'village']); //Marga Mulya
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82890, 'regionable_type'=>'village']); //Marga Rahayu
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82891, 'regionable_type'=>'village']); //Moneng Sepati
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82892, 'regionable_type'=>'village']); //Simpang Priuk
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82893, 'regionable_type'=>'village']); //Siring Agung
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82894, 'regionable_type'=>'village']); //Taba Pingin
                DB::table('regionables')->insert(['region_id'=>1651, 'regionable_id'=>82895, 'regionable_type'=>'village']); //Tanah Priuk
        DB::table('regions')->insert(['id'=>1652, 'parent'=>1262, 'code'=>'317', 'type'=>'city', 'name'=>'City 317, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1652, 'regionable_id'=>461, 'regionable_type'=>'city']); //Muara Enim regencies
            DB::table('regions')->insert(['id'=>1653, 'parent'=>1652, 'code'=>'3171', 'type'=>'districts', 'name'=>'Districts 3171, City 317, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1653, 'regionable_id'=>7279, 'regionable_type'=>'districts']); //Lawang Kidul
                DB::table('regions')->insert(['id'=>1654, 'parent'=>1653, 'code'=>'31711', 'type'=>'village', 'name'=>'Village 31711, Districts 3171, City 317, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1654, 'regionable_id'=>82248, 'regionable_type'=>'village']); //Darmo
                DB::table('regionables')->insert(['region_id'=>1654, 'regionable_id'=>82249, 'regionable_type'=>'village']); //Keban Agung
                DB::table('regionables')->insert(['region_id'=>1654, 'regionable_id'=>82250, 'regionable_type'=>'village']); //Lingga
                DB::table('regionables')->insert(['region_id'=>1654, 'regionable_id'=>82251, 'regionable_type'=>'village']); //Tanjung Enim
                DB::table('regionables')->insert(['region_id'=>1654, 'regionable_id'=>82252, 'regionable_type'=>'village']); //Tanjung Enim Selatan
                DB::table('regions')->insert(['id'=>1655, 'parent'=>1653, 'code'=>'31712', 'type'=>'village', 'name'=>'Village 31712, Districts 3171, City 317, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1655, 'regionable_id'=>82253, 'regionable_type'=>'village']); //Pasar Tanjung Enim
                DB::table('regions')->insert(['id'=>1656, 'parent'=>1653, 'code'=>'31713', 'type'=>'village', 'name'=>'Village 31713, Districts 3171, City 317, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1656, 'regionable_id'=>82254, 'regionable_type'=>'village']); //Tegal Rejo
        DB::table('regions')->insert(['id'=>1657, 'parent'=>1262, 'code'=>'321', 'type'=>'city', 'name'=>'City 321, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1657, 'regionable_id'=>466, 'regionable_type'=>'city']); //Ogan Komering Ulu regencies
        DB::table('regionables')->insert(['region_id'=>1657, 'regionable_id'=>467, 'regionable_type'=>'city']); //Ogan Komering Ulu Timur regencies
            DB::table('regions')->insert(['id'=>1658, 'parent'=>1657, 'code'=>'3218', 'type'=>'districts', 'name'=>'Districts 3218, City 321, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1658, 'regionable_id'=>7337, 'regionable_type'=>'districts']); //Semendawai Barat
            DB::table('regionables')->insert(['region_id'=>1658, 'regionable_id'=>7338, 'regionable_type'=>'districts']); //Semendawai Timur
                DB::table('regions')->insert(['id'=>1659, 'parent'=>1658, 'code'=>'32185', 'type'=>'village', 'name'=>'Village 32185, Districts 3218, City 321, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83065, 'regionable_type'=>'village']); //Bungin Jaya
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83066, 'regionable_type'=>'village']); //Burnai Jaya
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83067, 'regionable_type'=>'village']); //Burnai Mulya
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83068, 'regionable_type'=>'village']); //Harapan Jaya
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83069, 'regionable_type'=>'village']); //Karang Anyar
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83070, 'regionable_type'=>'village']); //Karang Melati
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83071, 'regionable_type'=>'village']); //Karang Menjangan
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83072, 'regionable_type'=>'village']); //Karang Mulya
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83073, 'regionable_type'=>'village']); //Kota Mulya
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83074, 'regionable_type'=>'village']); //Kota Tanah
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83075, 'regionable_type'=>'village']); //Melati Agung
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83076, 'regionable_type'=>'village']); //Melati Jaya
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83077, 'regionable_type'=>'village']); //Mulia Jaya
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83078, 'regionable_type'=>'village']); //Nirwana
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83079, 'regionable_type'=>'village']); //Tulung Harapan
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83080, 'regionable_type'=>'village']); //Wana Makmur
                DB::table('regionables')->insert(['region_id'=>1659, 'regionable_id'=>83081, 'regionable_type'=>'village']); //Warna Sari (wanasari)
        DB::table('regions')->insert(['id'=>1660, 'parent'=>1262, 'code'=>'322', 'type'=>'city', 'name'=>'City 322, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1660, 'regionable_id'=>468, 'regionable_type'=>'city']); //Ogan Komering Ulu Selatan regencies
            DB::table('regions')->insert(['id'=>1661, 'parent'=>1660, 'code'=>'3221', 'type'=>'districts', 'name'=>'Districts 3221, City 322, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1661, 'regionable_id'=>7357, 'regionable_type'=>'districts']); //Buay Rawan
            DB::table('regionables')->insert(['region_id'=>1661, 'regionable_id'=>7358, 'regionable_type'=>'districts']); //Muaradua
                DB::table('regions')->insert(['id'=>1662, 'parent'=>1661, 'code'=>'32211', 'type'=>'village', 'name'=>'Village 32211, Districts 3221, City 322, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83349, 'regionable_type'=>'village']); //Banjar Agung
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83350, 'regionable_type'=>'village']); //Bendi
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83351, 'regionable_type'=>'village']); //Bumi Agung Jaya
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83352, 'regionable_type'=>'village']); //Bumijaya
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83353, 'regionable_type'=>'village']); //Gunung Cahya
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83354, 'regionable_type'=>'village']); //Majar
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83355, 'regionable_type'=>'village']); //Pekuolan
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83356, 'regionable_type'=>'village']); //Pelawi
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83357, 'regionable_type'=>'village']); //Rantau Panjang
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83358, 'regionable_type'=>'village']); //Ruos
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83359, 'regionable_type'=>'village']); //Sukajaya
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83360, 'regionable_type'=>'village']); //Batu Belang Dua
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83361, 'regionable_type'=>'village']); //Batu Belang Jaya
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83362, 'regionable_type'=>'village']); //Bumi Agung
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83363, 'regionable_type'=>'village']); //Datar
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83364, 'regionable_type'=>'village']); //Gedung Lepihan
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83365, 'regionable_type'=>'village']); //Gunung Tiga
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83366, 'regionable_type'=>'village']); //Kisau
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83367, 'regionable_type'=>'village']); //Mehanggin
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83368, 'regionable_type'=>'village']); //Pancur Pungah
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83369, 'regionable_type'=>'village']); //Pasar Muaradua
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83370, 'regionable_type'=>'village']); //Pelangki
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83371, 'regionable_type'=>'village']); //Pendagan
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83372, 'regionable_type'=>'village']); //Suka Banjar
                DB::table('regionables')->insert(['region_id'=>1662, 'regionable_id'=>83373, 'regionable_type'=>'village']); //Sukaraja Dua
            DB::table('regions')->insert(['id'=>1663, 'parent'=>1660, 'code'=>'3226', 'type'=>'districts', 'name'=>'Districts 3226, City 322, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1663, 'regionable_id'=>7359, 'regionable_type'=>'districts']); //Buana Pemaca
            DB::table('regionables')->insert(['region_id'=>1663, 'regionable_id'=>7360, 'regionable_type'=>'districts']); //Simpang
            DB::table('regionables')->insert(['region_id'=>1663, 'regionable_id'=>7361, 'regionable_type'=>'districts']); //Buay Pemaca
                DB::table('regions')->insert(['id'=>1664, 'parent'=>1663, 'code'=>'32265', 'type'=>'village', 'name'=>'Village 32265, Districts 3226, City 322, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83389, 'regionable_type'=>'village']); //Air Kelian
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83390, 'regionable_type'=>'village']); //Danau Jaya
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83391, 'regionable_type'=>'village']); //Durian Sembilan
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83392, 'regionable_type'=>'village']); //Karet Jaya
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83393, 'regionable_type'=>'village']); //Kembang Tinggi
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83394, 'regionable_type'=>'village']); //Kota Way
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83395, 'regionable_type'=>'village']); //Mekar Jaya
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83396, 'regionable_type'=>'village']); //Serakat Jaya
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83397, 'regionable_type'=>'village']); //Sido Rahayu
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83398, 'regionable_type'=>'village']); //Sidodadi
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83399, 'regionable_type'=>'village']); //Sinar Baru
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83400, 'regionable_type'=>'village']); //Sinar Napalan
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83401, 'regionable_type'=>'village']); //Sipin
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83402, 'regionable_type'=>'village']); //Sri Menanti
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83403, 'regionable_type'=>'village']); //Sumber Raya
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83404, 'regionable_type'=>'village']); //Sumber Ringin
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83405, 'regionable_type'=>'village']); //Talang Padang
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83406, 'regionable_type'=>'village']); //Tanjung Baru
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83407, 'regionable_type'=>'village']); //Tanjung Durian
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83408, 'regionable_type'=>'village']); //Tanjung Jaya
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83409, 'regionable_type'=>'village']); //Tanjung Menang
                DB::table('regionables')->insert(['region_id'=>1664, 'regionable_id'=>83410, 'regionable_type'=>'village']); //Tanjung Sari
            DB::table('regions')->insert(['id'=>1665, 'parent'=>1660, 'code'=>'3227', 'type'=>'districts', 'name'=>'Districts 3227, City 322, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7362, 'regionable_type'=>'districts']); //Muaradua Kisam
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7363, 'regionable_type'=>'districts']); //Kisam Ilir
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7364, 'regionable_type'=>'districts']); //Pulau Beringin
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7365, 'regionable_type'=>'districts']); //Sungai Are
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7366, 'regionable_type'=>'districts']); //Sindang Danau
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7367, 'regionable_type'=>'districts']); //Banding Agung
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7368, 'regionable_type'=>'districts']); //Warkuk Ranau Selatan
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7369, 'regionable_type'=>'districts']); //Buay Pematang Ribu Ranau Tengah
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7370, 'regionable_type'=>'districts']); //Mekakau Ilir
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7371, 'regionable_type'=>'districts']); //Buay Sandang Aji
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7372, 'regionable_type'=>'districts']); //Tiga Dihaji
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7373, 'regionable_type'=>'districts']); //Runjung Agung
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7374, 'regionable_type'=>'districts']); //Buay Runjung
            DB::table('regionables')->insert(['region_id'=>1665, 'regionable_id'=>7375, 'regionable_type'=>'districts']); //Kisam Tinggi
                DB::table('regions')->insert(['id'=>1666, 'parent'=>1665, 'code'=>'32279', 'type'=>'village', 'name'=>'Village 32279, Districts 3227, City 322, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83589, 'regionable_type'=>'village']); //Air Alun
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83590, 'regionable_type'=>'village']); //Balayan
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83591, 'regionable_type'=>'village']); //Bandar Alam Lama
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83592, 'regionable_type'=>'village']); //Berasang
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83593, 'regionable_type'=>'village']); //Danau Rata
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83594, 'regionable_type'=>'village']); //Gunung Megang
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83595, 'regionable_type'=>'village']); //Kota Padang
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83596, 'regionable_type'=>'village']); //Muara Payang
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83597, 'regionable_type'=>'village']); //Padang Bindu
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83598, 'regionable_type'=>'village']); //Padang Lay
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83599, 'regionable_type'=>'village']); //Pajar Bulan
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83600, 'regionable_type'=>'village']); //Pulau Panggung
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83601, 'regionable_type'=>'village']); //Simpang Empat
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83602, 'regionable_type'=>'village']); //Simpang Tiga
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83603, 'regionable_type'=>'village']); //Singa Laga
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83604, 'regionable_type'=>'village']); //Siring Agung
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83605, 'regionable_type'=>'village']); //Tebat Gabus
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83606, 'regionable_type'=>'village']); //Tenang
                DB::table('regionables')->insert(['region_id'=>1666, 'regionable_id'=>83607, 'regionable_type'=>'village']); //Ulak Pandan
        DB::table('regions')->insert(['id'=>1667, 'parent'=>1262, 'code'=>'323', 'type'=>'city', 'name'=>'City 323, Province 3']);
        DB::table('regionables')->insert(['region_id'=>1667, 'regionable_id'=>467, 'regionable_type'=>'city']); //Ogan Komering Ulu Timur regencies
            DB::table('regions')->insert(['id'=>1668, 'parent'=>1667, 'code'=>'3231', 'type'=>'districts', 'name'=>'Districts 3231, City 323, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1668, 'regionable_id'=>7339, 'regionable_type'=>'districts']); //Martapura
                DB::table('regions')->insert(['id'=>1669, 'parent'=>1668, 'code'=>'32311', 'type'=>'village', 'name'=>'Village 32311, Districts 3231, City 323, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1669, 'regionable_id'=>83082, 'regionable_type'=>'village']); //Kota Baru
                DB::table('regions')->insert(['id'=>1670, 'parent'=>1668, 'code'=>'32312', 'type'=>'village', 'name'=>'Village 32312, Districts 3231, City 323, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1670, 'regionable_id'=>83083, 'regionable_type'=>'village']); //Pasar Martapura
                DB::table('regions')->insert(['id'=>1671, 'parent'=>1668, 'code'=>'32313', 'type'=>'village', 'name'=>'Village 32313, Districts 3231, City 323, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1671, 'regionable_id'=>83084, 'regionable_type'=>'village']); //Dusun Martapura
                DB::table('regions')->insert(['id'=>1672, 'parent'=>1668, 'code'=>'32314', 'type'=>'village', 'name'=>'Village 32314, Districts 3231, City 323, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1672, 'regionable_id'=>83085, 'regionable_type'=>'village']); //Paku Sengkunyit
                DB::table('regions')->insert(['id'=>1673, 'parent'=>1668, 'code'=>'32315', 'type'=>'village', 'name'=>'Village 32315, Districts 3231, City 323, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1673, 'regionable_id'=>83086, 'regionable_type'=>'village']); //Bukit Sari
                DB::table('regionables')->insert(['region_id'=>1673, 'regionable_id'=>83087, 'regionable_type'=>'village']); //Kota Baru Barat
                DB::table('regionables')->insert(['region_id'=>1673, 'regionable_id'=>83088, 'regionable_type'=>'village']); //Kota Baru Selatan
                DB::table('regionables')->insert(['region_id'=>1673, 'regionable_id'=>83089, 'regionable_type'=>'village']); //Sungai Tuha Jaya
                DB::table('regionables')->insert(['region_id'=>1673, 'regionable_id'=>83090, 'regionable_type'=>'village']); //Tanjung Kemala
                DB::table('regionables')->insert(['region_id'=>1673, 'regionable_id'=>83091, 'regionable_type'=>'village']); //Tanjung Kemala Barat
                DB::table('regionables')->insert(['region_id'=>1673, 'regionable_id'=>83092, 'regionable_type'=>'village']); //Terukis Rahayu
                DB::table('regionables')->insert(['region_id'=>1673, 'regionable_id'=>83093, 'regionable_type'=>'village']); //Veteran Jaya
            DB::table('regions')->insert(['id'=>1674, 'parent'=>1667, 'code'=>'3236', 'type'=>'districts', 'name'=>'Districts 3236, City 323, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1674, 'regionable_id'=>7340, 'regionable_type'=>'districts']); //Buay Madang
            DB::table('regionables')->insert(['region_id'=>1674, 'regionable_id'=>7341, 'regionable_type'=>'districts']); //Buay Pemuka Bangsa Raja
            DB::table('regionables')->insert(['region_id'=>1674, 'regionable_id'=>7342, 'regionable_type'=>'districts']); //Buay Madang Timur
            DB::table('regionables')->insert(['region_id'=>1674, 'regionable_id'=>7343, 'regionable_type'=>'districts']); //Madang Suku I
            DB::table('regionables')->insert(['region_id'=>1674, 'regionable_id'=>7344, 'regionable_type'=>'districts']); //Belitang Madang Raya
            DB::table('regionables')->insert(['region_id'=>1674, 'regionable_id'=>7345, 'regionable_type'=>'districts']); //Madang Suku Ii
            DB::table('regionables')->insert(['region_id'=>1674, 'regionable_id'=>7346, 'regionable_type'=>'districts']); //Madang Suku Iii
            DB::table('regionables')->insert(['region_id'=>1674, 'regionable_id'=>7347, 'regionable_type'=>'districts']); //Buay Pemuka Beliung / Peliung
                DB::table('regions')->insert(['id'=>1675, 'parent'=>1674, 'code'=>'32367', 'type'=>'village', 'name'=>'Village 32367, Districts 3236, City 323, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83197, 'regionable_type'=>'village']); //Bandar Jaya
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83198, 'regionable_type'=>'village']); //Bantan
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83199, 'regionable_type'=>'village']); //Bantan Pelita
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83200, 'regionable_type'=>'village']); //Banuayu
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83201, 'regionable_type'=>'village']); //Banumas
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83202, 'regionable_type'=>'village']); //Negeri Agung
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83203, 'regionable_type'=>'village']); //Negeri Agung Jaya
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83204, 'regionable_type'=>'village']); //Negeri Pakuan
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83205, 'regionable_type'=>'village']); //Pahang Asri
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83206, 'regionable_type'=>'village']); //Pemetung Basuki
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83207, 'regionable_type'=>'village']); //Pulau Negara
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83208, 'regionable_type'=>'village']); //Saung Dadi
                DB::table('regionables')->insert(['region_id'=>1675, 'regionable_id'=>83209, 'regionable_type'=>'village']); //Terantang/trantang Sakti
            DB::table('regions')->insert(['id'=>1676, 'parent'=>1667, 'code'=>'3238', 'type'=>'districts', 'name'=>'Districts 3238, City 323, Province 3']);
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7339, 'regionable_type'=>'districts']); //Martapura
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7344, 'regionable_type'=>'districts']); //Belitang Madang Raya
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7348, 'regionable_type'=>'districts']); //Bunga Mayang
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7349, 'regionable_type'=>'districts']); //Jayapura
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7350, 'regionable_type'=>'districts']); //Belitang Jaya
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7351, 'regionable_type'=>'districts']); //Belitang
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7352, 'regionable_type'=>'districts']); //Belitang Ii
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7353, 'regionable_type'=>'districts']); //Belitang Mulya
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7354, 'regionable_type'=>'districts']); //Cempaka
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7355, 'regionable_type'=>'districts']); //Belitang Iii
            DB::table('regionables')->insert(['region_id'=>1676, 'regionable_id'=>7356, 'regionable_type'=>'districts']); //Semendawai Suku Iii
                DB::table('regions')->insert(['id'=>1677, 'parent'=>1676, 'code'=>'32386', 'type'=>'village', 'name'=>'Village 32386, Districts 3238, City 323, Province 3']);
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83171, 'regionable_type'=>'village']); //Lubuk Harjo
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83291, 'regionable_type'=>'village']); //Petanggan
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83292, 'regionable_type'=>'village']); //Rejosari
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83293, 'regionable_type'=>'village']); //Sari Guna
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83294, 'regionable_type'=>'village']); //Sidowaluyo
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83295, 'regionable_type'=>'village']); //Sugih Waras
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83296, 'regionable_type'=>'village']); //Tulung Sari
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83330, 'regionable_type'=>'village']); //Cahaya/cahya Negeri
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83331, 'regionable_type'=>'village']); //Gunung Sugih
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83332, 'regionable_type'=>'village']); //Jaya Mulia/mulya
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83333, 'regionable_type'=>'village']); //Karang Endah
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83334, 'regionable_type'=>'village']); //Karang Marga
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83335, 'regionable_type'=>'village']); //Krujon
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83336, 'regionable_type'=>'village']); //Margodadi
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83337, 'regionable_type'=>'village']); //Margorejo
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83338, 'regionable_type'=>'village']); //Mujo Rahayu
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83339, 'regionable_type'=>'village']); //Sriwangi
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83340, 'regionable_type'=>'village']); //Sriwangi Ulu
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83341, 'regionable_type'=>'village']); //Suka Mulya
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83342, 'regionable_type'=>'village']); //Taman Agung
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83343, 'regionable_type'=>'village']); //Taman Asri
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83344, 'regionable_type'=>'village']); //Taman Harjo
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83345, 'regionable_type'=>'village']); //Taman Mulyo
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83346, 'regionable_type'=>'village']); //Taraman
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83347, 'regionable_type'=>'village']); //Trimo Rejo
                DB::table('regionables')->insert(['region_id'=>1677, 'regionable_id'=>83348, 'regionable_type'=>'village']); //Trimoharjo
    }
}
