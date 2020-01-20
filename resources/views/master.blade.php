<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda - {{$title}}</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/r-2.2.3/datatables.min.css"/>
    </head>
    <body>
        
        <div id="app">   
            @include('templates.header')
       
            <section>
                @yield('conteudo-view')
            </section>

            @include('templates.footer')
        </div>

        

        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/cep.js')}}"></script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#tabela').DataTable({
                    "language": {
                        "lengthMenu": "Mostrando _MENU_ registros por página",
                        "zeroRecords": "Nada encontrado",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "Nenhum registro disponível",
                        "infoFiltered": "(filtrado de _MAX_ registros no total)",
                        "search": "Procurar",
                        "paginate": {"previous": "Anterior", "next": "Próximo"} 
                    }
                });
            } );
        </script>

        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
    </body>
</html>
