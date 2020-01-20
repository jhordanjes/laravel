@extends('master')

@section('conteudo-view')
    <banner title="Adicionar Contato"> </banner>
    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <alert 
                    color="alert-danger"
                    msg="{{$error}}">
                </alert>
            @endforeach
        @endif
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="form-block">
                    <form method="post" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <label for="nome">Nome <strong>*</strong></label>
                        <input type="text" 
                            class="form-input" 
                            placeholder="Nome Completo" 
                            name="nome"
                            id="nome">

                        <label for="telPhone">Celular <strong>*</strong></label>
                        <input type="text" 
                            class="form-input" 
                            id="telPhone" 
                            name="tel_celular" />

                        <label for="telResidencial">Telefone Residencial</label>
                        <input type="text" class="form-input" id="telResidencial" name="tel_residencial" />

                        <label for="email">Email</label>
                        <input type="text" class="form-input" id="email" name="email" />

                        <label>CEP</label>
                        <input 
                            type="text" 
                            class="form-input" 
                            placeholder="Apenas Números" 
                            name="cep"
                            id="cep" 
                            value="" 
                            onblur="pesquisacep(this.value);">
                        <label>Rua</label>
                        <input type="text" class="form-input" name="rua" value="" id="rua">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-input" name="bairro" value="" id="bairro">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-input" name="estado" value="" id="uf">
                        <label for="img">Imagem</label>
                        <input type="file" id="img" name="thumbnail" />

                        <button type="submit">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@stop