<!DOCTYPE html>
<html>
<body>

<p>This example uses the addEventListener() method to attach a click event to a button.</p>

<button id="myBtn">Try it</button>

<p><strong>Note:</strong> The addEventListener() method is not supported in Internet Explorer 8 and earlier versions.</p>

<p id="demo"></p>
<form method="post" action="">
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
			<input name="btnCalcular" type="submit" id="btnCalcular" value="Sumar">
			</td>
		</tr>
	</table>
	<br>
	<p style="font-weight: bold;">Result</p>
	<input name="txts" id="txts" value="{$suma}">
</form>
<script src="js/CAPP/ventas.js"></script>
</body>
</html>