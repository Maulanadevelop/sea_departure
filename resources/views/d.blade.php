<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>hello guys!!! -_-</title>

<script>

function tampilkan(){

  var nama_server=document.getElementById("form1").kategori.value;

  if (nama_server=="sea")

    {

        document.getElementById("tampil").innerHTML="<option value='China'>China  *</option>";
    

    }

  else if (nama_server=="europe")

    {

        document.getElementById("tampil").innerHTML="<option value='...'>...</option>";

    }

}

</script>

</head>

<body>

<h2>Shipping details</h2>

<form id="form1" name="form1" onsubmit="return false">

  <label>Primary Transport Mode: </label>

  <select id="kategori" name="kategori" onchange="tampilkan()">

    <option value="sea">sea</option>

  </select>

  <br/><br/>

   <label>Origin Country: </label> 

   <select id="tampil" name="tampil">

    <option value="China">China *</option>

    <option value="europe"></option>

  </select>

  <br/><br/>

   <label>Destination Country: </label> 

   <select id="tampil" name="tampil">

    <option value="United Kingdom">United Kingdom *</option>

  </select>

  <br/><br/>

   <label>Shipment Terms/Freight Terms  : </label> 

   <select id="tampil" name="tampil">

    <option value="CIF">CIF *</option><textarea>Prepaid</textarea>

  </select>

  <br/><br/>

   <label>Load Type  : </label> 

   <select id="tampil" name="tampil">

    <option value="FCL">FCL *</option>

  </select>

  <br/><br/>

   <label>Cargo CFS ETA  : </label> 

    <textarea></textarea>

  <br/><br/>

   <label>Cargo Available Date  : </label> 

    <input type="date">

<h2>Party details</h2>

<form id="form1" name="form1" onsubmit="return false">

  <label>Customer: </label>
<input class="text" type="text" name="" value="">
<input type="submit" value="Search">
</form>

<br></br>

<form id="form1" name="form1" onsubmit="return false">

  <label>Consignee: </label>
<input class="text" type="text" name="" value="">
<input type="submit" value="Search">
</form>

<br></br>

<form id="form1" name="form1" onsubmit="return false">

  <label>Consignor: </label>
<input class="text" type="text" name="" value="">
<input type="submit" value="Search">
</form>

<br></br>

<form id="form1" name="form1" onsubmit="return false">

  <label>Vendor: </label>
<input class="text" type="text" name="" value="">
<input type="submit" value="Search">
</form>

<br></br>

<form id="form1" name="form1" onsubmit="return false">

  <label>Notify Party: </label>
<input class="text" type="text" name="" value="">
<input type="submit" value="Search">
</form>

<br></br>

<form id="form1" name="form1" onsubmit="return false">

  <label>Destination Agent: </label>
<input class="text" type="text" name="" value="">
<input type="submit" value="Search">
</form>

</body>

</html>