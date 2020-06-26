@extends('layouts.app')
@section('title', 'Sobre nuestras Hamburguesas')

@section('content')

<main id="main_content">
<div class="zig-zag-top1"><!----------------------------------- Content 1: Nuestra historia ---------------------------><br />
&nbsp;
<div class="row1">
<div class="column1"><img alt="Snow" src="images/hamburguesa1.jpg" style="width:100%" /></div>

<div class="column1"><img alt="Forest" src="images/hamburguesa2.jpg" style="width:100%" /></div>
</div>
</div>

<div class="main_content_header" id="content1">
<h2>Somos Ibra</h2>

<p class="aboutUsContent">Al comenzar el dia, cada ma&ntilde;ana estamos m&aacute;s que prepar&aacute;ndonos para dar lo mejor de nosotros mismos.<br />
Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las mejores entregas y, sobre todo, lasmejores Hamburguesas..</p>
</div>

<div class="row2">
<div class="column2">
<p>Los or&iacute;genes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la pizzer&iacute;a DomiPizza&#39;s, con una inversi&oacute;n inicial de 950 d&oacute;lares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como ten&iacute;an previsto.</p>
</div>

<div class="column2">
<p>A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tom&oacute; decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Despu&eacute;s de adquirir dos restaurantes m&aacute;s en Barcelona, en 1965 renombr&oacute; sus tres locales como Ibra&#39;s Burger Grill.</p>
</div>
</div>
<a href="{{ url('menu') }}"><button class="button1" type="button" href="{{ url('menu') }}">VER MENÚ HOY</button></a><a href="{{ url('menu') }}"><button class="button1" type="button" href="{{ url('menu') }}">PEDIR AHORA</button></a>

<div class="content2Container">
<div id="content2" style="padding-top: 30px;"><img src="images/Burguer.png" style=" width: 30px; height: 30px;" />
<h2>Lo que dicen los clientes</h2>
</div>

<div id="main_content_3" style="height: 550px;">
<div class="slider-container">
<div class="menuSlider"></div>
<input checked="checked" id="slide-dot-1" name="slides" type="radio" />
<div class="slide slide-1">
<div class="row2">
<div class="column2">
<p><b>Las Mejores Hamburguesas </b></p>

<p></p>

<p>Me gustan sus Hamburguesas, siempre seran mi lugar de encuetros y buenos recuerdas acompa&ntilde;ados de la mejor Hamburguesa</p>
</div>

<div class="column2">
<p><b>Que Hamburguesa mas Increible</b></p>

<p>Voy con mi familia a compertir de la buena comida y servicio que prestan, los recomiendo a mis amigos, los felicito</p>
</div>

<div class="column2">
<p><b>La mejor hamburguesa de la ciudad</b></p>

<p>Soy amante de la buena hamburguesa y puedo decir que me gusta lo bien que la preparan, el hambiente es como y muy familiar, cada ves que tengo la oportunidad de darme un gusto lo visito porque se que sere bien atendido y comere una excelente hamburguesa</p>
</div>
</div>
</div>
<input id="slide-dot-2" name="slides" type="radio" />
<div class="slide slide-2">
<div class="row2">
<div class="column2">
<p>Las Mejores Hamburguesas</p>

<p></p>

<p>Me gustan sus Hamburguesas, siempre seran mi lugar de encuetros y buenos recuerdas acompa&ntilde;ados de la mejor Hamburguesa</p>
</div>

<div class="column2">
<p>Que Hamburguesa mas Increible</p>

<p>Voy con mi familia a compertir de la buena comida y servicio que prestan, los recomiendo a mis amigos, los felicito</p>
</div>

<div class="column2">
<p>La mejor hamburguesa de la ciudad</p>

<p>Soy amante de la buena hamburguesa y puedo decir que me gusta lo bien que la preparan, el hambiente es como y muy familiar, cada ves que tengo la oportunidad de darme un gusto lo visito porque se que sere bien atendido y comere una excelente hamburguesa</p>
</div>
</div>
</div>
<input id="slide-dot-3" name="slides" type="radio" />
<div class="slide slide-3">
<div class="row2">
<div class="column2">
<p>Las Mejores Hamburguesas</p>

<p></p>

<p>Me gustan sus Hamburguesas, siempre seran mi lugar de encuetros y buenos recuerdas acompa&ntilde;ados de la mejor Hamburguesa</p>
</div>

<div class="column2">
<p>Que Hamburguesa mas Increible</p>

<p>Voy con mi familia a compertir de la buena comida y servicio que prestan, los recomiendo a mis amigos, los felicito</p>
</div>

<div class="column2">
<p>La mejor hamburguesa de la ciudad</p>

<p>Soy amante de la buena hamburguesa y puedo decir que me gusta lo bien que la preparan, el hambiente es como y muy familiar, cada ves que tengo la oportunidad de darme un gusto lo visito porque se que sere bien atendido y comere una excelente hamburguesa</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="zig-zag-top">
<div class="main_content_header" id="content3" style="margin: -50px">
<h2>Nos esforzamos por brindar un buen servicio para<br />
su disfrute.</h2>
</div>
</div>
</main>

@endsection