<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?    
use Bitrix\Main\Entity;

// подключаем модуль интернет-магазина
if (!\Bitrix\Main\Loader::includeModule('sale')){return;} 

// получаем даты
$myDateStart = \Bitrix\Main\Type\Date::createFromPhp(new \DateTime($_GET['year']."-".$_GET['month']."-01"));
$myDateEnd = \Bitrix\Main\Type\Date::createFromPhp(new \DateTime($_GET['year']."-".$_GET['month']."-31"));


$parameters = [
	'filter' => [
	   ">=DATE_INSERT" => $myDateStart,
	   "<=DATE_INSERT" => $myDateEnd
	],
	'select' => array('CNT'),
	'runtime' => array(
		new Entity\ExpressionField('CNT', 'COUNT(*)')
	)
];

$dbRes = \Bitrix\Sale\Order::getList($parameters);
echo \Bitrix\Main\Web\Json::encode($dbRes->fetch());