<?php

	function cmpName($offer1,$offer2){
		return strcmp($offer1->name,$offer2->name);
	}

	function cmpPopularity($offer1, $offer2)){
		if ($offer1->views == $offer2->views){
			return 0;
		}

		return ($offer1->views < $offer2->views)  ? -1 : 1;
	}

	function listOffersByName($offers){
		usort($offers, "cmpName");
		return $offers;
	}


	function listOffersByPopularity($offers){
		usort($offers, "cmpPopularity");
		return $offers;
	}

	function listOfferByPrice(){


	}


?>