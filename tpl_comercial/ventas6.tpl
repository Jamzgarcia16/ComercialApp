<!DOCTYPE html>
<html>
<body>

<p>This example uses the addEventListener() method to attach a click event to a button.</p>

<button id="myBtn">Try it</button>

<p><strong>Note:</strong> The addEventListener() method is not supported in Internet Explorer 8 and earlier versions.</p>

<p id="demo"></p>
<form method="post" action="" id="formAdd">
	<table width="245" border="0">
		<tr>
			<td colspan="2">Problema 1 SUMA</td>
		</tr>
		<tr>
			<td width="82">Numero 1</td>
			<td width="153">
				<input name="txtn1" type="text" id="txtn1" value="{$txtn1}" size="10">
			</td>
		</tr>
		<tr>
			<td width="82">Numero 2</td>
			<td width="153">
				<input name="txtn2" type="text" id="txtn2" value="{$txtn2}" size="10">
			</td>
		</tr>
		<tr>
			<td>
			<input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular">
			</td>
		</tr>
	</table>
	<br>
	<p style="font-weight: bold;">Result Suma</p>
	<input name="txts" id="txts" value="{$suma}">
	<br>
	<p style="font-weight: bold;">Result Divicion</p>
	<input name="txtd" id="txtd" value="{$divicion}">
	<br>
	<p style="font-weight: bold;">Result Residuo Divicion</p>
	<br>
	<input name="txtd" id="txtd" value="{$residuo}">

	<br>
	<p>Ejercicio 3 </p>
	<table width="245" border="0">
		<tr>
			<td colspan="2">Problema 3</td>
		</tr>
		<tr>
			<td width="82">Valor Venta</td>
			<br>
			<td width="153">
				<input name="valorVenta" type="text" id="valorVenta" value="{$valorVenta}" size="10">
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight: bold;">Result iva</p>
				<input name="iva" id="iva" value="{$iva}">
			</td>
		<tr>
			<td>
				<p style="font-weight: bold;">Result Precio mas iva</p>
				<input name="precioVenta" id="precioVenta" value="{$precioVenta}">
			</td>
		</tr>
		<tr>
			<td>
			<input name="btnVentas" type="submit" id="btnVentas" value="ventas">
			</td>
		</tr>
	</table>

		<br>
	<p>Ejercicio numero inverso </p>
	<table width="245" border="0">
		<tr>
			<td colspan="2">Numero Inverso</td>
		</tr>
		<tr>
			<td width="82">numero inverso</td>
			<br>
			<td width="153">
				<input name="numero" type="text" id="numero" value="{$numero}" size="10">
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight: bold;">Numero Inverso</p>
				<input name="inverso" id="inverso" value="{$inverso}">
			</td>
		<tr>
			<td>
			<input name="btnInverso" type="submit" id="btnInverso" value="Numero Inverso">
			</td>
		</tr>
	</table>
	</form>
	<form method="post" action="" id="formAdd2">
	<br>
	<br>
	<p>Prestamos a Empleados en @JamzGarcia Sorftware Comnpany </p>
	<table width="245" border="0">
		<tr>
			<td colspan="2">Capital</td>
			<input name="capital" id="capital" value="{$capital}">
		</tr>
		<tr>
			<td colspan="2">tasaInteres</td>
			<input name="tasaInteres" id="tasaInteres" value="{$tasaInteres}">
		</tr>
		<tr>
			<td width="82">tiempo</td>
			<br>
			<td width="153">
				<input name="tiempo" type="text" id="tiempo" value="{$tiempo}" size="10">
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight: bold;">interes</p>
				<input name="interes" id="interes" value="{$interes}">
			</td>
		<tr>
		<tr>
			<td>
				<p style="font-weight: bold;">monto</p>
				<input name="monto" id="monto" value="{$monto}">
			</td>
		<tr>
			<td>
			<input name="btnPresatamo" type="submit" id="btnPresatamo" value="Calcular Prestamo">
			</td>
		</tr>
	</table>
</form>
<div>
 <title>Hola mundo con Vue.js</title>
 <div id="app">

    <h1>{{titulo}}</h1>

    <ul>
      <li v-for="fruta of frutas">
        {{fruta.cantidad}} - {{fruta.nombre}}
        <span v-if="fruta.cantidad === 0"> - Sin Stock</span>
      </li>
    </ul>

</div>
<p>Append con JS JSON_ENCODE</p>
<div class="lista" id="lista">
</div>
<script src="js/CAPP/ventas.js"></script>
<script src="js/CAPP/01.js"></script>
</body>
</html>