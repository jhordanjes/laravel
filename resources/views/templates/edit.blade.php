@extends('master')

@section('conteudo-view')
    <banner title="Editar Infos"> </banner>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('contacts.show', $contact->id)}}">Detalhes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>

        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="form-block">
                    <form method="post" action="{{ route('contacts.update', $contact->id) }}" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row justify-content-md-center"> 
                            <div class="col-md-5">
                                @if($contact->thumbnail)
                                    <img src="{{ url('storage/img/'.$contact->thumbnail) }}"  width="150" height="150" alt="..." class="rounded-circle">
                                @else
                                    <div class="noimage large">
                                        
                                    </div>
                                @endif                              
                            </div>
                        </div>
                        <input type="file" name="thumbnail" />
                        <label>Nome</label>
                        <input type="text" class="form-input" value="{{$contact->nome}}" name="nome">
                        <label for="email">Email</label>
                        <input type="text" class="form-input" id="email" value="{{$contact->email}}" name="email" />
                        <label for="telPhone">Celular</label>
                        <input type="text" class="form-input" id="telPhone" value="{{$contact->tel_celular}}" name="tel_celular" />
                        <label for="telResidencial">Telefone Residencial</label>
                        <input type="text" class="form-input" id="telResidencial" value="{{$contact->tel_residencial}}" name="tel_residencial" />

                        <label>CEP</label>
                        <input 
                            type="text" 
                            class="form-input" 
                            value="{{$contact->cep}}" 
                            name="cep"
                            id="cep" >
                        <label>Rua</label>
                        <input type="text" class="form-input" name="rua" value="{{$contact->rua}}" id="rua">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-input" name="bairro" value="{{$contact->bairro}}" id="bairro">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-input" name="estado" value="{{$contact->estado}}" id="estado">

                        <button type="submit">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop