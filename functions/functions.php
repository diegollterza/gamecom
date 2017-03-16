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

	function cmpPrice($offer1, $offer2){
		if($offer1->price == $offer2->price){
			return 0;
		}

		return ($offer1->price < $offer2->price) ? -1 : 1;

	}

	function listOffersByName($offers){
		if(is_a($offers,"Offer")){
			usort($offers, "cmpName");
			return $offers;
		}
	}


	function listOffersByPopularity($offers){
		if(is_a($offers,"Offer")){
			usort($offers, "cmpPopularity");
			return $offers;
		}
	}

	function listOfferByPrice($offers){
		if(is_a($offers,"Offer")){
			usort($offers, "cmpPrice");
			return $offers;
		}

	}


?>