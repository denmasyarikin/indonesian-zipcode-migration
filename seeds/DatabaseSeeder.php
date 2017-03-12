<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call(Bali::class);
		$this->call(BangkaBelitung::class);
		$this->call(Banten::class);
		$this->call(Bengkulu::class);
		$this->call(DiYogyakarta::class);
		$this->call(DkiJakarta::class);
		$this->call(Gorontalo::class);
		$this->call(Jambi::class);
		$this->call(JawaBarat::class);
		$this->call(JawaTengah::class);
		$this->call(JawaTimur::class);
		$this->call(KalimantanBarat::class);
		$this->call(KalimantanSelatan::class);
		$this->call(KalimantanTengah::class);
		$this->call(KalimantanTimur::class);
		$this->call(KalimantanUtara::class);
		$this->call(KepulauanRiau::class);
		$this->call(Lampung::class);
		$this->call(Maluku::class);
		$this->call(MalukuUtara::class);
		$this->call(NanggroeAcehDarussalam::class);
		$this->call(NusaTenggaraBarat::class);
		$this->call(NusaTenggaraTimur::class);
		$this->call(Papua::class);
		$this->call(PapuaBarat::class);
		$this->call(Riau::class);
		$this->call(SulawesiBarat::class);
		$this->call(SulawesiSelatan::class);
		$this->call(SulawesiTengah::class);
		$this->call(SulawesiTenggara::class);
		$this->call(SulawesiUtara::class);
		$this->call(SumateraBarat::class);
		$this->call(SumateraSelatan::class);
		$this->call(SumateraUtara::class);

		$this->call(_Region_Province_1::class);
		$this->call(_Region_Province_2::class);
		$this->call(_Region_Province_3::class);
		$this->call(_Region_Province_4::class);
		$this->call(_Region_Province_5::class);
		$this->call(_Region_Province_6::class);
		$this->call(_Region_Province_7::class);
		$this->call(_Region_Province_8::class);
		$this->call(_Region_Province_9::class);
    }
}
