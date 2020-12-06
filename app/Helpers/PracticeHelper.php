<?php

namespace App\Helpers;

use Carbon\Carbon;

class PracticeHelper extends Helper
{
	public static function test()
	{


		$dt = Carbon::createFromDate();

		$dt->startOfMonth();
		$dt->timezone = 'Asia/Tokyo'; //日本時刻で表示
		echo $dt;

		$headings = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saterday','Sunday'];
		print_r($headings);
	}
}