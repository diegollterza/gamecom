<?php
	
	$conn = mysqli($dbhost, $user, $password, $db);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	function addOffer($offer){
		if(is_a($offer, "Offer")){
			$sql  = "INSERT INTO offers (name, description,price,ownerid,views) VALUES ('" . $offer->itemName . "','" . $offer->description . "','" . $offer->price . "','" ; $offer->ownerId . "','" . $offer->views . "')";
			if($conn->query($sql)){
				echo "Oferta criada com Sucesso";
			}else{
				echo "Erro ao criar a oferta.";
			}

		}else{
			echo "Dados nao conferem";
		}
	}

	function removeOffer($id){
		$sql = "DELETE FROM offers WHERE id = '" . $id;
		if($conn ->query($sql)){
			echo "Oferta removida com sucesso;"
		}else{
			echo "Erro ao remover oferta;"
		}
	}


?>