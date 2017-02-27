<?php 
	#Indice de identificacao da ordem de tratamento do arquivos no servidor
	$i = 0;
	#Analisa cada arquivo
	foreach ($_FILES["arquivos"]["error"] as $key => $error) {

	    # Definir o diretório onde salvar os arquivos.
	    $destino = "files/" . rand(0, 0x3f3fff2) .'_'. $_FILES["arquivos"]["name"][$i] ;
	   
	    #Move o arquivo para o diretório de destino
	    if(move_uploaded_file( $_FILES["arquivos"]["tmp_name"][$i], $destino )) {
	    	echo 1;
	    }
	    else {
	    	echo 0;
	    }

	    
	    echo '<br>',$destino;
	    #Próximo arquivo a ser analisado
	    $i++;

	}
?>
