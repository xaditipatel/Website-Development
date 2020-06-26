@extends('layouts.app')

@section('content')

<main id="main_content">
<div class="main_content_header" id="content1"><img src="images/Burguer.png" style=" width: 30px; height: 30px;" />
	<p>Welcome! User</p>
	<a href="logout.php">Logout</a>
<h2>Ibra&#39;s Perfil de hamburguesa</h2>

<div class="nav">
<ul>
	<li class="TODOS"><a class="active" href="#">&Oacute;rdenes recientes</a></li>
	<li class="Pollo"><a href="#">Recompensas de hamburguesas</a></li>
	<li class="Carne"><a href="#">Pagos guardados</a></li>
	<li class="Carne"><a href="#">Informaci&oacute;n personal</a></li>
</ul>
</div>

<div class="large-12 columns" style="color: white">
<h3>Orden m&aacute;s reciente</h3>

<p class="tblText1">Nombre del pedido: Aditi Patel</p>

<p class="tblText2">Fecha de compra: 01/03/2020</p>

<p class="tblText1">Direcci&oacute;n de Env&iacute;o: 212 S Cooper St</p>

<p class="tblText1">M&eacute;todo de pago: Discover 1234</p>

<p class="tblText2">Total: $120.00</p>
<button class="button1" type="button">Ordenar de nuevo</button></div>

<h3>Ver pedidos pasados</h3>
<label for="start">Fecha de inicio:</label> <input id="start" max="2020-04-30" min="2018-01-01" name="order-start" type="date" value="2020-02-01" /> <label for="end">Fecha final:</label> <input id="end" max="2018-04-30" min="2018-01-01" name="order-start" type="date" value="2020-03-01" /><button class="button1" type="button">Ver pedidos</button></div>

<div class="main_content_header" id="content2" style="color: black">
<div class="row_user">
<div class="col-75">
<div class="container_user">
<form action="#">
<div class="row_user">
<div class="col-50">
<h3>Direcci&oacute;n de Envio</h3>
<label for="fname">Nombre completo</label> <input id="fname" name="firstname" placeholder="John M. Doe" type="text" /><br />
<label for="email">Email</label> <input id="email" name="email" placeholder="john@example.com" type="text" /><br />
<br />
<label for="adr">Habla a</label> <input id="adr" name="address" placeholder="542 W. 15th Street" type="text" /><br />
<label for="city">Ciudad</label> <input id="city" name="city" placeholder="New York" type="text" />
<div class="row_user">
<div class="col-50"><label for="state">Estado</label> <input id="state" name="state" placeholder="NY" type="text" /></div>

<div class="col-50"><label for="zip">C&oacute;digo Postal</label> <input id="zip" name="zip" placeholder="10001" type="text" /></div>
</div>
</div>

<div class="col-50">
<h3>Pago</h3>
<label for="fname">Tarjetas aceptadas</label>

<div class="icon-container"></div>
<label for="cname">Nombre en la tarjeta</label> <input id="cname" name="cardname" placeholder="John More Doe" type="text" /> <label for="ccnum">N&uacute;mero de tarjeta de cr&eacute;dito</label> <input id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" type="text" /> <label for="expmonth">Mes exp</label> <input id="expmonth" name="expmonth" placeholder="September" type="text" />
<div class="row_user">
<div class="col-50"><label for="expyear">A&ntilde;o exp</label> <input id="expyear" name="expyear" placeholder="2018" type="text" /></div>

<div class="col-50"><label for="cvv">CVV</label> <input id="cvv" name="cvv" placeholder="352" type="text" /></div>
</div>
</div>
</div>
<label><input checked="checked" name="sameadr" type="checkbox" />Direcci&oacute;n de env&iacute;o igual que facturaci&oacute;n </label> <input class="btn" type="submit" value="Continue to checkout" /></form>
</div>
</div>

<div class="col-25">
<div class="container_user">
<h4>Cart <span class="price" style="color:black"> <b>4</b></span></h4>

<p><a href="#">Producto 1</a> <span class="price">$15</span></p>

<p><a href="#">Producto 2</a> <span class="price">$5</span></p>

<p><a href="#">Producto 3</a> <span class="price">$8</span></p>

<p><a href="#">Producto 4</a> <span class="price">$2</span></p>

<hr />
<p>Total <span class="price" style="color:black"><b>$30</b></span></p>
</div>
</div>
</div>
</div>
</main>

@endsection