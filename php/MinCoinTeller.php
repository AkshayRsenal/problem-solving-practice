<?php 

echo "Ver:".phpversion()."</br></br></br> ";

class MinCoiTeller{

	public function num_coins($cents){
		$coinsAvailable = array('quarter'=>25, 'dime'=>10, 'nickle'=>5,'penny'=>1);

		

		foreach( $coinsAvailable as $coinType => $coinValue){
					// if($coinValue){
						$quarterRem = $cents%$coinValue;
						$numOfCoins = floor($cents/$coinValue);
						$coinCombo[$coinType]=$numOfCoins;
						if($quarterRem> 0){
						echo	$cents = $quarterRem;
					
						}
					// }
		}
		return $coinCombo;


	}	

/*		$coinsAvailable = array('quarter'=>25, 'dime'=>10, 'penny'=>1);*/
	public function min_coins($cents,$coinsArray= '{"quarter":25,"dime":10,"penny":1}'){

		$arrayOfCoins= json_decode($coinsArray);
		foreach($arrayOfCoins as $coinType => $coinValue){
			$rem[$coinType] = $cents % $coinValue;
			$count_coin[$coinType] = floor($cents/$coinValue);

			$lowerCoinCount[$coinType]= $rem[$coinType]+$count_coin[$coinType];
		}

			return $lowerCoinCount; 
			



		/*foreach( $coinsAvailable as $coinType => $coinValue){
					// if($coinValue){
						$quarterRem = $cents%$coinValue;
						$numOfCoins = floor($cents/$coinValue);
						$coinCombo[$coinType]=$numOfCoins;
						if($quarterRem> 0){
							echo	$cents = $quarterRem;
						}
					// }
		}
		return $coinCombo;*/

	
	}	
	

}

//Cool if the below code would be in another file
/*$objMinCoiTeller = new MinCoiTeller;

print_r($objMinCoiTeller->num_coins(33));*/

// print_r($objMinCoiTeller->num_coins(63));


/*while(min_coins()=true){

}*/


$coinsAvailable = array('quarter'=>25, 'dime'=>10, 'penny'=>1);
$keyMinCoin="";
$minCoinsArray = array();

$objMinCoiTeller = new MinCoiTeller;

$someCents= 45;


while ($someCents > 4) {
	$loopCoinsArray=$objMinCoiTeller->min_coins($someCents);
	$valMinCoin = min($loopCoinsArray);
	$keyMinCoin = array_search($valMinCoin, $loopCoinsArray);

	if ($someCents > 0 ) {
		# code...
		$someCents = $someCents - $coinsAvailable[$keyMinCoin];
	}

	$minCoinsArray[$keyMinCoin]+=1;
	
}

if ($someCents < 4 && $someCents > 0 ) {
	$minCoinsArray['penny'] = $someCents;
}

echo "Ver:".phpversion()."</br></br></br> ";

print_r($minCoinsArray);


// echo max();


/*$cents = 33;
$coinsArray= '{"quarter":25,"dime":10,"penny":1}';
$arrayOfCoins= json_decode($coinsArray);
	foreach($arrayOfCoins as $coinType => $coinValue){
		$rem[$coinType] = $cents % $coinValue;
		$count_coin[$coinType] = floor($cents/$coinValue);

		$lowerCoinCount[$coinType]= $rem[$coinType]+$count_coin[$coinType];
	} 
print_r( $lowerCoinCount);
echo "Minimum:".min( $lowerCoinCount);*/


?>