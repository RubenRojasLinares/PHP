
<br>
<?php

    $datoEnviado= $_POST["dato"];
    echo "cantidad de productos es=".$datoEnviado;

?>

<form action="https://www.paypal.com/cgi-bin/webscr" name="f1" id="f1" method="post">
<fieldset>
    <legend class="prod"><strong>Finalizar la Compra</strong> <a href="#" onclick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=400, height=350');"><img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PP.gif" alt="Solution Graphics" border="0" align="absmiddle"></a></legend>
    <input type="hidden" name="shipping" value="0">
    <input type="hidden" name="cbt" value="Presione aquí para volver a www.nuestrositio.com >>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="rm" value="2">
    <input type="hidden" name="bn" value="Comenta">
    <input type="hidden" name="business" value="ruben.rojaslinares@outlook.com">
    <input type="hidden" name="item_name" value="Venta de articulos de manualidades">
    <input type="hidden" name="item_number" value="Ruben Rojas Linares">
    <input type="hidden" name="amount" value="<?php echo number_format($_POST["dato"],2)*5  ?>">
    <input type="hidden" name="custom" value="<?php echo $_POST["dato"] ?>">
    <input type="hidden" name="currency_code" value="MXN">
    <input type="hidden" name="image_url" value="">
    <input type="hidden" name="return" value="http://www.comenta.com/ipn_success.php">
    <input type="hidden" name="cancel_return" value="http://www.comenta.com/ipn_error.php">
    <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="no_note" value="0">
    <!-- Mostramos el detalle de la compra -->
    <table width="50%" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#EABB5D" style=" border-color:#000000; border-style:solid;border-width:1px;">
        <tr>
            <span > </span><span class="prod"><strong>Cantidad Productos:</strong> <?php echo $_POST["dato"] ?>  <br>
            <strong>Pecio Total:</strong> $<?php echo number_format($_POST["dato"],2)*5  ?> </span>
        </td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Comprar Por payPal">
</fieldset>
</form>