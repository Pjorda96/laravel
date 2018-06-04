<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 04/06/2018
 * Time: 12:25
 */

?>

<!-- PAYTPV JET Form Example -->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    input {width:150px;}
    input.min {width:30px;}
</style>
</head>

<body>

<form action="jet_landing.php" method="POST" id="paytpvPaymentForm" onsubmit="return takingOff();">
    <label>Titular de la Tarjeta:</label>
    <input type="text" data-paytpv="cardHolderName" maxlength="50" required="required" title="máximo 50 caracteres"/><br/>
    <label>Número de tarjeta:</label>
    <input type="text" data-paytpv="paNumber" maxlength="16" required="required" placeholder="1234 5678 9012 3456" pattern="[0-9]{15,16}" title="15/16 caracteres numéricos" /><br/>
    <label>CVC2:</label>
    <input type="text" data-paytpv="cvc2" maxlength="4" required="required" placeholder="123" pattern="[0-9]{3,4}" title="3 o 4 caracteres" class="min" /><br/>
    <label>Fecha de caducidad:</label>
    <input type="text" data-paytpv="dateMonth" maxlength="2" placeholder="mm" required="required" pattern="(0[1-9]|1[012])" title="2 números de 01 a 12" class="min"/>
    <input type="text" data-paytpv="dateYear" maxlength="2" placeholder="aa" required="required" pattern="[1-9]{2}" title="2 números desde año actual" class="min"/><br/>
    <button type="submit">Pagar 2,02 € con PAYTPV</button>
</form>

<span style="color:red;font-weight:bold;" id="paymentErrorMsg"></span>

<script type="text/javascript" src="https://secure.paytpv.com/gateway/jet-paytpv.js?id=insertHereYourJETID&language=es"></script>

<script type="text/javascript">
    function takingOff() {
        var x = new PAYTPV.Tokenizator();
        x.getToken(document.forms["paytpvPaymentForm"], boarding);
        return false;
    }

    function boarding(passenger) {
        document.getElementById("paymentErrorMsg").innerHTML = "";
        if (passenger.errorID !== 0 || passenger.paytpvToken === "") {
            document.getElementById("paymentErrorMsg").innerHTML = passenger.errorText;
        } else {
            var newInputField = document.createElement("input");

            newInputField.type = "hidden";
            newInputField.name = "paytpvToken";
            newInputField.value = passenger.paytpvToken;

            var paytpvPaymentForm = document.forms["paytpvPaymentForm"];
            paytpvPaymentForm.appendChild(newInputField);

            paytpvPaymentForm.submit();

        }
    }
</script>

</body>
</html>