<!-- SHOW CONTATO-->

@extends('master')

@section('conteudo-view')
    <banner title="Visualizar"> </banner>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalhes</li>
            </ol>
        </nav>
        @if(session('msg'))
            <alert 
                color="alert-success"
                msg="{{session('msg')}}">
            </alert>
        @endif
        <div class="row justify-content-md-center">

            <div class="col-md-2 text-center">
                @if($contact->thumbnail)
                    <img src="{{ url('storage/img/'.$contact->thumbnail) }}"  width="150" height="150" alt="..." class="rounded-circle">
                @else
                    <div class="noimage large">
                        <a href="{{ route('contacts.edit', $contact->id) }}"> 
                            <img src="{{asset('img/camera.svg')}}" alt="Select img"/>
                        </a>
                    </div>
                @endif
            </div>
            
            <div class="col-md-5">
                <div class="card border-secondary mb-3">
                    <div class="card-header">
                    <h5 class="card-title">{{$contact->nome}}</h5>
                    </div>
                    <div class="card-body text-secondary">
                        <p><strong>Celular: </strong> {{$contact->tel_celular}} </p>
                        <p><strong>Residencial: </strong> {{$contact->tel_rensidencial}} </p>
                        <p><strong>Email: </strong> {{$contact->email}} </p>
                        <p><strong>CEP: </strong> {{$contact->cep}}</p>
                        <p><strong>Endereço: </strong> {{$contact->rua}}</p>
                        <p><strong>Bairro: </strong> {{$contact->bairro}} </p>
                        <p><strong>Estado: </strong> {{$contact->estado}}</p>
                    </div>
                </div>             
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-success">Editar Informações</a>
            </div>
        </div>
    </div>

@stop