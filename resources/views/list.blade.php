<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de contatos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">

        <div class="col-sm-12">
          <h1 class="title-contatos">
              <span class="negrito">
                  Lista de contatos
              </span> 
          </h1>
        </div>

        <div class="col-sm-12">
          <a type="button" class="btn btn-danger pull-right" href="{{route('contact')}}">Novo contato</a>
        </div>

        <div class="container col-sm-12">
          <table class="table">
              <thead>
                  <tr>
                  <th class="col-sm-2">Nome</th>
                  <th class="col-sm-2">E-mail</th>
                  <th class="col-sm-2">Telefone</th>
                  <th class="col-sm-4">Mensagem</th>
                  <th class="col-sm-1">Anexo</th>
                  </tr>
              </thead>
              <tbody>
                @if($contacts)
                  @foreach($contacts as $contact)
                    <tr>
                      <th scope="row">{{$contact['nome']}}</th>
                      <th scope="row">{{$contact['email']}}</th>
                      <th scope="row">{{$contact['telefone']}}</th>
                      <th scope="row">{{$contact['mensagem']}}</th>
                      <th scope="row">
                        @if($contact['anexo'] !== '')
                          <span>
                            <a href="../storage/app/{{$contact['anexo']}}" target="_blank">anexo</a>
                          </span>
                          @else
                          <span style="text-align: center;">-</span>
                          @endif
                      </th>
                    </tr>
                  @endforeach
                @else
                <th>
                    <h3>Não existem dados cadastrados!</h3>
                </th>
                @endif
              </tbody>
          </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>