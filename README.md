## Lista de contatos

1 - Na pasta htdocs do xampp criar uma nova pasta chamada "agenda"
git clone do projeto - na pasta htdocs/agenda

2 - Executar o comando dentro da pasta para instalar todos os componentes
composer install

2 - Executar o xampp (caso nao tenha... faça o donwload)
iniciar apache e mysql

3 - Criar uma base de dados com o nome "agenda" no phpMyAdmim no padrão já marcado

4 - Rodar a migration que cria a tabela contato (no caso a única migration que existe...)
php artisan migrate

5 - Entrar no projeto web atravez do chrome
acessar 127.0.0.1/agenda/public

## Teste do email

1 - Site do email configurado (já está habilitado para receber acesso de aplicativos desconhecidos)
https://gmail.com
email: list.contact.test@gmail.com
senha: list.contact.test@admim

2 - Para alterar o email no arquivo de configuração
acessar o arquivo .env

3 - Modificar para o seu email
    
    O padrão está assim:
    MAIL_FROM_ADDRESS=arthurnx98@gmail.com

    Modifica para o seu email
    MAIL_FROM_ADDRESS=SEUEMAIL

4 - Executar o comando para limpar o cache
php artisan config cache