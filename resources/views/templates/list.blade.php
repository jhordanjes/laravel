<!-- Home -->

@extends('master')

@section('conteudo-view')
    <banner title="Meus Contatos"> </banner>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                @if(session('msg'))
                    <alert 
                        color="alert-success"
                        msg="{{session('msg')}}">
                    </alert>
                @endif
                <table class="table table-hover" id="tabela">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Celular</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td width="6%">
                                    @if($contact->thumbnail)
                                        <img src="{{ url('storage/img/'.$contact->thumbnail) }}"  width="54" height="54" alt="..." class="rounded-circle">
                                    @else
                                        <div class="noimage small"><span>{{substr($contact->nome,0,1)}}</span></div>
                                    @endif
                                </td>
                                <td width="40%">
                                    <a id="contact-name" href="{{route('contacts.show', $contact->id)}}">
                                        {{$contact->nome}}
                                    </a>
                                </td>
                                <td width="30%">{{$contact->tel_celular}}</td>
                                <td width="20%" class="btn-acoes">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-success">Editar</a>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}"
                                      method="post"
                                      onclick="return confirm('Deseja realmente excluir?')">
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
@stop