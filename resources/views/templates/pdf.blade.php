<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       
        <title>Lista de Contatos</title>
        <style>
            #gerarpdf{
                padding: 20px 10px;
            }
            h3{
                text-align: center;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
            }
            th{
                text-align: center;
            }
            td{
                padding-left: 5px;
            }
        </style>
 
    </head>
    <body>
        <div id="gerarpdf">
            <h3>Lista De Contatos</h3>
                <table>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Números</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>
                                        <p>{{$contact->nome}}</p>
                                    </td>
                                    <td>
                                        <p>{{$contact->tel_celular}} / {{$contact->tel_residencial}}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div> 
    </body>
</html>