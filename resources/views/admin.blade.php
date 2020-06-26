

@extends('layouts.app')
@section('title', 'Admin Dashboard')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--********************** Main Content *************************** -->

    <!----------------------------------- Content 2: Las más vendidos --------------------------->

    <!----------------------------------- Content 3: Las más vendidos --------------------------->

    <div id="content3" class="main_content_header">
        <img src="images/Burguer.png" style=" width: 30px; height: 30px;">
        <h2>Bienvenido administrador</h2><p>Welcome 
        </br>
        <h2>Cambios en el menú</h2>

        <div class="nav">
            <ul>
                <li class="TODOS"><button onclick="openForm1()"  href="#" style="line-height:normal;">Añadir hamburguesa</a></li>
                <li class="Pollo"><button href="#" onclick="openForm2()" style="line-height:normal;">Modificar hamburguesa</a></li>
              
            </ul>
        </div>
        <div id="main_content_1">
            <div class="large-12 columns">
				<div class="form-popup" id="form1">
					<form method="post" action="admin" enctype="multipart/form-data">
                    {{csrf_field()}}
						</br>
                        <input name="id" class="burger_details" class="form-control @error('id') is-invalid @enderror" placeholder="Burger Id" type="text" value="{{ old('id') }}"> 
                   @error('id')
                       <span style="color:	#FFFFFF;" class="error" role="alert">
                           </br></br><strong>{{ $message }}</strong>
                       </span>
                   @enderror

						<input type="text" class="burger_details" name="name" placeholder="Nombre de hamburguesa"><br><br>
						<input type="text" class="burger_details" name="price" placeholder="Precio de la hamburguesa"><br><br>
						<input type="text" class="burger_details" name="calories" placeholder="Calorías de hamburguesas"><br><br>
						<label class="burger_details">Categoría de hamburguesas</label><br><br>
						<select name="category" >
							<option value="">Select...</option>
							<option value="Mixed">Mezcladas</option>
							<option value="Vegetarian">Vegetariana</option>
							<option value="Vegan">Vegana</option>
							<option value="Plant-based">A base de plantas</option>
							<option value="Non-vegetarian">No vegetariana</option>
						</select>
                        
						<label class="burger_details">Ingredientes hamburguesa</label><br><br>
						<input type="checkbox" name="ingredients_list[]" value="Chicken"><label>Chicken</label>
						<input type="checkbox" name="ingredients_list[]" value="Eggs"><label>Eggs</label>
						<input type="checkbox" name="ingredients_list[]" value="Lettuce"><label>Lettuce</label>
						<input type="checkbox" name="ingredients_list[]" value="Tomato"><label>Tomato</label>
						<input type="checkbox" name="ingredients_list[]" value="Onion"><label>Onion</label><br><br>
                        <input type="file" value="Select Image" id="image" name="image" />
						<input type="submit" name="submit_add" Value="Submit"/>
						<button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
					</form>
				</div>
				
				
				<div class="form-popup" id="form2">
						<table width="100%" border="1" style="border-collapse:collapse;">
						<thead>
						<tr>
						<th><strong>Item No</strong></th>
						<th><strong>Item Name</strong></th>
						<th><strong>Calories</strong></th>
						<th><strong>Price</strong></th>
						<th><strong>Edit</strong></th>
						<th><strong>Delete</strong></th>
						</tr>
						</thead>
						<tbody>        
                        @foreach ($menu as $menus)
						<tr><td align="center"> {{ $menus->item_no }}</td>
						<td align="center">{{ $menus->item_name }}</td>
						<td align="center">{{ $menus->calories }}</td>
						<td align="center">{{ $menus->price }}</td>
						<td align="center">
						<a href="editMenu/{{$menus->item_no}}">Edit</a>
						</td>
						<td align="center">
						<a href="deleteMenu/{{$menus->item_no}}=>">Delete</a>
						</td>
						</tr>
                        
                        @endforeach
						</tbody>
						</table>
					<button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
				</div>
				
            </div>
        </div>
    </div>

<script>
function openForm1() {
  document.getElementById("form1").style.display = "block";
  document.getElementById("form2").style.display = "none";
}

function closeForm1() {
  document.getElementById("form1").style.display = "none";
}

function openForm2() {
  document.getElementById("form2").style.display = "block";
  document.getElementById("form1").style.display = "none";

}

function closeForm2() {
  document.getElementById("form2").style.display = "none";
}
</script>
@endsection