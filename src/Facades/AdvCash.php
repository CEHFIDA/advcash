<?php 
namespace Selfreliance\AdvCash\Facades;  

use Illuminate\Support\Facades\Facade;  

use Selfreliance\AdvCash\AdvCash as AdvCashClass;

class AdvCash extends Facade 
{
	protected static function getFacadeAccessor() { 
		return AdvCashClass::class;   
	}
}
