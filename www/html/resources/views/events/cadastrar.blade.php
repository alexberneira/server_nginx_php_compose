@extends('layouts.main')

@section('title',"Cadastrar Usuario")
<!-- <link rel="stylesheet" type="text/css" href="resources\css\app.css" /> -->


@section('content')
<?php
//phpinfo();
?>
<main>
    @if(session('msg'))
    {{session('msg')}}
    @endif
</main>
<div class="flex-container">
    <!-- <div class="flex-item">1</div> -->
    <div class="flex-item item-color1">

        <form method="POST" action="/cadastroexec" enctype="multipart/form-data">
            @csrf
            Nome: </br>
            <input class="input" type="text" name="txt_nome_usuario" id="txt_nome_usuario"
                placeholder="Digite o nome"><br><br>
            E-mail: </br>
            <input class="input" type="email" name="txt_email_usuario" id="txt_email_usuario"><br><br>
            <label for="txt_tipo_usuario">Tipo Cadastro</label>
            </br><select class="input" name="txt_tipo_usuario" id="txt_tipo_usuario">
                <option value="consumidor">Escolha</option>
                <option value="consumidor(a)">Consumidor(a)</option>
                <option value="produtor(a)">Produtor(a)</option>
            </select><br><br>
            Senha: </br>
            <input class="input" type="password" name="txt_senha_usuario" id="txt_senha_usuario"><br><br>
            <input class="input" type="submit" value="Cadastrar">
        </form>
    </div>
    <!-- <div class="flex-item">2</div> -->

</div>

@endsection