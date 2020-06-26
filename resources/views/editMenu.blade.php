@extends('layouts.app')
@section('title', 'Admin Dashboard')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--********************** Main Content *************************** -->

    <!----------------------------------- Content 2: Las más vendidos --------------------------->

    <!----------------------------------- Content 3: Las más vendidos --------------------------->

    <div id="content3" class="main_content_header">
        <h2>Bienvenido administrador</h2><p> </p>&nbsp;&nbsp;&nbsp;&nbsp;
        </br>
        <h2>Cambios en el menú</h2>

        <div id="main_content_1">
            <div class="large-12 columns">

            <form action = "/editMenu/<?php echo $menu[0]->item_no; ?>" method = "post">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            
                <table>
                    <tr>
                    <td>Item Name</td>
                    <td>
                        <input type = 'text' name = 'item_name' 
                            value = '<?php echo$menu[0]->item_name; ?>'/>
                    </td>
                    </tr>

                    <tr>
                    <td>Calories</td>
                    <td>
                        <input type = 'text' name = 'calories' 
                            value = '<?php echo$menu[0]->calories; ?>'/>
                    </td>
                    </tr>

                    <tr>
                    <td>Price</td>
                    <td>
                        <input type = 'text' name = 'price' 
                            value = '<?php echo$menu[0]->price; ?>'/>
                    </td>
                    </tr>

                    <tr>
                    <td colspan = '2'>
                        <input type = 'submit' value = "Update Menu" />
                    </td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </div>
        @endsection