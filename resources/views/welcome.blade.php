
@extends('layouts.app')
@section('title', 'Hamburguesas')


        @section('content')
            <div class="zig-zag-top">
            <!----------------------------------- Content 1: Nuestra historia --------------------------->
            <div id="content1" class="main_content_header">
                <img src="{{ URL::to('/') }}/images/Burguer.png" style=" width: 30px; height: 30px;">
                <h2>Nuestra historia</h2>
            </div>
            <div id="main_content_1">
                <div class="row">
                    <div class="columnImg"><img src="{{ URL::to('/') }}/images/story1.png" style="width: 140px; top: -40px;position: relative"></div>
                    <div class="columnTxt1">Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</div>
                    <div class="columnTxt2">A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.</div>
                    <div class="columnImg"><img src="{{ URL::to('/') }}/images/story2.png" style="width: 140px; float: right;top: -40px;position: relative"></div>
                </div>
            </div></div>
            <!----------------------------------- Content 2: Las más vendidos --------------------------->
            <div id="content2" class="main_content_header">
                    <img src="{{ URL::to('/') }}/images/Burguer.png" style=" width: 30px; height: 30px;">
                    <h2>Las más vendidos</h2>
                <div id="main_content_2" class="grid-container">
				@foreach ($lists1 as $list1)
							<div>
								<form method="get" action="menu" style="background-color:rgba(128, 110, 159, 0.17);">
								{{ csrf_field() }}
									<img class="imgCSS1" src="{{ $list1->image }}">
									<!--div class="bookmarkRibbon1"><span style="color:white;position: relative;text-align: center; font-size: smaller; top: -12px;">OFERTA</span></div-->
									<p>{{ $list1->item_name }}</p>
									<p><b><font color="red">{{ $list1->price }}</font></b></p>
									<p><button class="button2" type="submit">Ordenar ahora</button></p>
								</form>
							</div><br><br>
				@endforeach
                </div>
                <a href="{{ url('menu') }}"><button class="button1" type="button" href="{{ url('menu') }}">VER MENÚ HOY</button></a>
            </div>
            <!----------------------------------- Content 3: Nuestro menú --------------------------->
            <div class="zig-zag-top">
            <div id="content3" class="main_content_header">
                <img src="{{ URL::to('/') }}/images/Burguer.png" style=" width: 30px; height: 30px;">
                <h2>Nuestro menú</h2>
                        <div class="nav">
                            <ul>
                                <li class="TODOS"><a id="f1" onclick="openForm1()">TODOS</a></li>
                                <li class="Pollo"><a id="f2" onclick="openForm2()">Pollo</a></li>
                                <li class="Carne"><a  id="f3"onclick="openForm3()">Vegetariana</a></li>
                                <li class="Mixta"><a id="f4" onclick="openForm4()">Mixta</a></li>
                                <li class="De Todito"><a id="f5" onclick="openForm5()">Vegana</a></li>
                            </ul>
                        </div>
                <div class="large-12 columns">
					<div class="form-popup" id="form1">

						<table id ="block" class="albums">
						
							<tbody>
							@foreach ($lists2 as $list2)
								<tr>
									<td><img class="imgCSSTable" src="{{ $list2->image }}"></td>
									<td class="tblText1">{{ $list2->item_name }}</td>
									<td class="tblText2">{{ $list2->price }}</td>
							
								</tr>	
							@endforeach	
							</tbody>
							
						</table>

					</div>
				
					<div class="form-popup" id="form2">

						<table id ="block" class="albums">
							<tbody>
							@foreach ($lists3 as $list3)
								<tr>
									<td><img class="imgCSSTable" src="{{ $list3->image }}"></td>
									<td class="tblText1">{{ $list3->item_name }}</td>
									<td class="tblText2">{{ $list3->price }}</td>
								</tr>
							@endforeach
							</tbody>
						</table>

					</div>

					<div class="form-popup" id="form3">
						<table id ="block" class="albums">
							<tbody>
							@foreach ($lists4 as $list4)
								<tr>
									<td><img class="imgCSSTable" src="{{ $list4->image }}"></td>
									<td class="tblText1">{{ $list4->item_name }}</td>
									<td class="tblText2">{{ $list4->price }}</td>
						
								</tr>
							@endforeach		   
							</tbody>
						</table>

					</div>

					<div class="form-popup" id="form4">

						<table id ="block" class="albums">
							<tbody>
							@foreach ($lists5 as $list5)
								<tr>
									<td><img class="imgCSSTable" src="{{ $list5->image }}"></td>
									<td class="tblText1">{{ $list5->item_name }}</td>
									<td class="tblText2">{{ $list5->price }}</td>
								
								</tr>
							@endforeach	
		   
							</tbody>
						</table>

					</div>

					<div class="form-popup" id="form5">

						<table id ="block" class="albums">
							<tbody>
							@foreach ($lists6 as $list6)
								<tr>
									<td><img class="imgCSSTable" src="{{ $list6->image }}"></td>
									<td class="tblText1">{{ $list6->item_name }}</td>
									<td class="tblText2">{{ $list6->price }}</td>
								
								</tr>
							@endforeach	
		   
							</tbody>
						</table>

					</div>

				</div>
                
				<a href="{{ url('menu') }}"><button class="button1" type="button" href="{{ url('menu') }}">VER MENÚ HOY</button></a>
            </div></div>
			
			<script>
function openForm1() {
  document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";
  document.getElementById("form3").style.display = "none";
   document.getElementById("form4").style.display = "none";
   document.getElementById("form5").style.display = "none";
   document.getElementById("f1").element.classList.add("active");

}

function openForm2() {
  document.getElementById("form1").style.display = "none";
     document.getElementById("form2").style.display = "block";
  document.getElementById("form3").style.display = "none";
   document.getElementById("form4").style.display = "none";
   document.getElementById("form5").style.display = "none";
      document.getElementById("f2").element.classList.add("active");

}

function openForm3() {
  document.getElementById("form3").style.display = "block";
   document.getElementById("form1").style.display = "none";
   document.getElementById("form2").style.display = "none";
   document.getElementById("form4").style.display = "none";
   document.getElementById("form5").style.display = "none";
         document.getElementById("f3").element.classList.add("active");

}

function openForm4() {

  document.getElementById("form3").style.display = "none";
   document.getElementById("form1").style.display = "none";
   document.getElementById("form2").style.display = "none";
   document.getElementById("form4").style.display = "block";
   document.getElementById("form5").style.display = "none";
      document.getElementById("f4").element.classList.add("active");   
}

function openForm5() {

  document.getElementById("form3").style.display = "none";
   document.getElementById("form1").style.display = "none";
   document.getElementById("form2").style.display = "none";
   document.getElementById("form4").style.display = "none";
   document.getElementById("form5").style.display = "block";
      document.getElementById("f5").element.classList.add("active");   
}
</script>
@endsection