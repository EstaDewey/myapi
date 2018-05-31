<?php
class myMoney
{
	public function __construct($money,$extraCharges=0){
		$this->money = empty($money) ? 0 : $money;
		$this->extraCharges = empty($extraCharges) ? 0 : $extraCharges;
		$this->leaveMoney = $this->money - 1900 - 500 - 150 - 100 - 150 - $this->extraCharges;// -房租-饭费-话费-电费-交通费-额外支出
	}

	public function getMoneyByMonth($month,$leaveTotalMoney=0 ){
		$rateSum = 0;
		for($i=1;$i<=$month;$i++){
			$rat = pow(1.1,$i);
			$rateSum += $rat;
		}
		$totalMoneyPerMonth = $leaveTotalMoney*$rateSum;
		return  $totalMoneyPerMonth;
		
	}
}
$leaveTotalMoney = 11885;
$month = 12-(int)date('m')+2;
$leaveTotalMoney = $leaveTotalMoney- 1900 - 500 - 150 - 100 - 150;
echo $month*$leaveTotalMoney.'<br>';
// $myMoneyObj = new myMoney($money);
// $leaveTotalMoney = $myMoneyObj->getMoneyByMonth($month);
// echo $leaveTotalMoney;
function getMoneyByMonth($month=0,$leaveTotalMoney){
		$rateSum = 0;
		for($i=1;$i<=$month;$i++){
			$rat = pow(1.1,$i);
			$rateSum += $rat;
		}
		$totalMoneyPerMonth = $leaveTotalMoney*$rateSum;
		return  $totalMoneyPerMonth;
		
	}
echo getMoneyByMonth($month,$leaveTotalMoney);