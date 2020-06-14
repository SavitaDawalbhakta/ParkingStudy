<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dynamically Generate Select Dropdowns</title>
<script type="text/javascript">
function swapDecal(amount){
	if(amount!='prorated'){
		//document.getElementById('prorated').style.display = 'none';
		document.getElementById('decal_amount').style.display = 'block';
		document.getElementById('decal_amount').innerHTML = "$" + amount + ".00";
		document.getElementById('AmountRequested').value = amount;
        document.getElementById('requested_amount').innerHTML = document.getElementById('AmountRequested').value;
	} else {
		//document.getElementById('prorated').style.display = 'block';
		document.getElementById('decal_amount').style.display = 'none';
	}
}
</script>
</head>
<body>
<form>
    <select name="Decal" id="Decal" onchange="swapDecal(this.value);">
        <option selected="selected">Choose one</option>
        <?php
        // A sample product array
       // $products = array("Mobile", "Laptop", "Tablet", "Camera");

        $parkinglotvars = array('Commuter Lots - $160' => '160',
						'Resident Lots - $160' => '160',
						'Shuttle Lot - $110' => '110',
						'WSSU at the Flats - $110' => '110');
        
        // Iterating through the product array
        while (list($key, $val) = each($parkinglotvars)){

       // foreach($parkinglotvars as $item){
        ?>
        <option value="<?php echo $val; ?>"><?php echo $key; ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" value="Submit">
    <div id="decal_amount"></div>
    <div>
    <input name="AmountRequested" type="text" id="AmountRequested" />
    </div>
    <td align="right" valign="top"><strong>Requested Amount:</strong></td>
    <div id="requested_amount"></div>

</form>
</body>
</html>