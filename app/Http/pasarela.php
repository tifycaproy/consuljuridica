<?php 
	use App\ApiRedsys;
	use Illuminate\Support\Facades\Crypt;

	function pasarela($id_solicitud, $monto){

		$encrypted = Crypt::encrypt($id_solicitud);

		//dd($encrypted);
		// Se crea Objeto
		$miObj = new RedsysAPI;

		// Valores de entrada que no hemos cmbiado para ningun ejemplo
		/*$fuc="175213198"; //codigo del comercio
		$terminal="1"; //terminal ?
		$moneda="978"; // moneda euro
		$trans="0"; //tipo de transaccion ?
		$url=""; //tienda
		$urlOK="https://www.consuljuridica.com/pasarelaOk/".$encrypted."/1"; //exito
		$urlKO="https://www.consuljuridica.com/pasarelaOk/".$encrypted."/2"; //exito*/
		
        //ajustando consultoria pasarela por tipago phonealo
        $fuc="175114818"; //codigo del comercio
		$terminal="1"; //terminal ?
		$moneda="978"; // moneda euro
		$trans="0"; //tipo de transaccion ?
		$url="http://app.phonealo.net/payment/init"; //tienda 
		$urlOK= env('URL_SITE')."/success/".$id_solicitud; //exito
		$urlKO= env('URL_SITE')."/errors/".$id_solicitud; 


		//estos dos valores los vamos cambiando en cada ejemplo
		$id=$id_solicitud;//el valor que le damos en cada ejemplo 

		//dd((int)$monto);
		$amount=(int)$monto.'00';//el valor que le damos en cada ejemplo
		 
		//dd($amount);
		
		// Se Rellenan los campos
		$miObj->setParameter("DS_MERCHANT_AMOUNT",$amount);
		$miObj->setParameter("DS_MERCHANT_ORDER",$id);
		$miObj->setParameter("DS_MERCHANT_MERCHANTCODE",$fuc);
		$miObj->setParameter("DS_MERCHANT_CURRENCY",$moneda);
		$miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE",$trans);
		$miObj->setParameter("DS_MERCHANT_TERMINAL",$terminal);
		$miObj->setParameter("DS_MERCHANT_MERCHANTURL",$url);
		$miObj->setParameter("DS_MERCHANT_URLOK",$urlOK);
		$miObj->setParameter("DS_MERCHANT_URLKO",$urlKO);

		//Datos de configuración
		$version="HMAC_SHA256_V1";
		$kc = 'YEiNDDMJBz9C5XwhEbbdAf9GmhYB0zfZ';//Clave recuperada de CANALES
		// Se generan los parámetros de la petición
		$request = "";
		$params = $miObj->createMerchantParameters();
		$signature = $miObj->createMerchantSignature($kc);

		
		return view('Frontend.pasarela',compact('version','params','signature'));
	} 

?>