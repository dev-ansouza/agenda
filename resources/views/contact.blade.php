<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo contato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="col-sm-12">
          <h1 class="title-contatos">
              <span class="negrito">
                Novo contato
              </span> 
          </h1>
        </div>

        <div class="row">
            <form action="{{route('post.contact')}}" method="POST">
                @csrf
                <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name=nome placeholder="Seu nome" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name=telefone placeholder="(99) 99999-9999" maxlength="15" pattern="\(\d{2}\)\s*\d{5}-\d{4}" required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group col-sm-12">
                        <label for="telefone">Mensagem</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Insira sua mensagem"></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group col-sm-12">
                        <label for="anexo">Anexo</label>
                        <input id="anexo" name="anexo" class="input-file" type="file">
                    </div>
                </div> 
                    
                <div class="col-sm-12">
                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a type="button" class="btn btn-danger" href="{{route('list')}}">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>  

    <script>
        //Mask para o campo de telefone
        //Seletor do campo de telefone
        const telefone = document.getElementById('telefone');

        telefone.addEventListener('keypress', (e) => mascaraTelefone(e.target.value)) 
        telefone.addEventListener('change', (e) => mascaraTelefone(e.target.value))

        //Altera o valor do campo
        const mascaraTelefone = (valor) => {
            valor = valor.replace(/\D/g, "")
            valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2")
            valor = valor.replace(/(\d)(\d{4})$/, "$1-$2")
            
            // Insere o(s) valor(es) no campo
            telefone.value = valor
        }
    </script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>
</html>