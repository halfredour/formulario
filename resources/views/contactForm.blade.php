<link href="//maxcdn.bootstrapcdn.com/font-awesome/5.0/css/font-awesome.min.css" rel="stylesheet">
@extends('template')
@section('content')
<div class="content">
    <p class="rellenar">Por favor, rellena los campos siguientes:</p>
    <form action="" class="formulario" id="formulario">

        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre">
            </div>
        </div>

        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__apellido">
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Apellido">
            </div>
        </div>

        <!-- Grupo: Correo electronico -->
        <div class="formulario__grupo" id="grupo__correo">
            <div class="formulario__grupo-input">
                <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Email">
            </div>
        </div>

        <!-- Grupo: Correo Electronico2 -->
        <div class="formulario__grupo" id="grupo__correo2">
            <div class="formulario__grupo-input">
                <input type="email" class="formulario__input" name="correo2" id="correo2" placeholder="Repetir Email">
            </div>
        </div>

        <!-- Grupo: Dni -->
        <div class="formulario__grupo" id="grupo__dni">
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="dni" id="dni" placeholder="DNI">
            </div>
        </div>

        <!-- Grupo: Teléfono-->
        <div class="formulario__grupo" id="grupo__telefono">
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Móvil">
            </div>
        </div>

        <div id="error"></div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn" onclick="return validarFormulario();">Enviar</button>
        </div>
    </form>
</div>
@endsection