Sistema de Gerenciamento de Doações

Instalar PHP 7.0 ou 5 (Recomendo o 7)

Verificar se o a variável de ambiente do PHP está configurada:

- Abra o terminal

- Digite: php -version

Instalar o MySQL.

o Wampserver ou XAMPP já instala as duas tecnologias.

Executar as Query's do arquivo 'sql.sql' no MySQL.

Download composer: https://getcomposer.org/download/

Instalar o composer.

- Abra o terminal e entre no diretório do projeto.

- Execute os comandos:

    *o comando a seguir irá instalar as cofigurações do arquivo composer.json*
    
    composer install

    *o comando a seguir atualiza o arquivo de autoload*

    composer dump-autoload -o

Agora para chamar as classes basta informar os namespaces delas.

Para executar o projeto:

- Abra o terminal e entre no diretório raiz do projeto.

- Digite o comando:

    *o comando a seguir inicia o servidor embutido do PHP*
    
    php -S localhost:8888 -t public

    *8888 é a porta, pode ser substituída por outra*

    *-t public significa que o servidor será iniciado no diretório [public], assim quem acessar a aplicação não conseguirá ver os arquivos de configuração.*

- Abra o navegador e digite na URL:

    http://localhost:8888/home

- URL's disponíveis:

    - http://localhost:8888/home
    
    - http://localhost:8888/user-cadastro

    - http://localhost:8888/login

    - http://localhost:8888/doacao

    *caso tenha efetuado o login*
    
    - http://localhost:8888/admin

    - http://localhost:8888/admin-entidades

    - http://localhost:8888/admin-entidade-cadastro

    - http://localhost:8888/admin-entidade-detalhes?codigo=1

    - http://localhost:8888/admin-entidade-edit?codigo=1

    - http://localhost:8888/admin-entidade-delete?codigo=1&confirm=true

    - http://localhost:8888/logout


Estrutura do projeto.

- Arquivo *config.php* configura as informações que darão acesso ao banco de dados.

- Arquivo *bootstrap.php* é o inicializador de autoload das Classes e Funções.

- Arquivo *sql.sql* estrutura das tabelas do banco de dados. Observação: O campo senha da tabela de Usuário foi alterado para varchar(60).

- Diretório [guia] possui os arquivos dos requisitos do projeto.

- Diretório [public] está o arquivo *index.php* que ficará responsável pelas rotas requisitadas pela URL. É importante chamar o arquivo *bootstrap.php* como primeiro comando para que o *index* consiga carregar todas as classes e funções.

    - Diretório [assets] contém arquivos de css, javascript, imagens e templates.

        *Para linkar os arquivos do diretório [assets] nas Views deve ser considerar que o servidor está sendo iniciado na pasta public, assim sendo, o link de todos os arquivos ficarão do mesmo jeito a seguir:*

        - Arquivos de CSS:
            
            - *<link rel="stylesheet" href="assets/css/style.css">*

            - *'style.css' é só um exemplo, pode-se substituir por qualquer arquivo desejado*

        - Arquivos de Javascript:

            - *<script src="assets/js/script.js"> </script>*
    
            - *'script.js' é só um exemplo, pode-se substituir por qualquer arquivo desejado*

        - Arquivos de Imagem:

            - <img src="assets/images/brasao-assis.jpg" alt="Ícone do brasão de Assis" />

- Diretório [app], estão as Funções e Classes necessário para o funcionamento do projeto.

    - Diretório [classes], classes úteis com funçoes estáticas.

        - Classe `Database`, possui um método que retorna uma conexão com o banco de dados de acordo com os paramêtros configurados no arquivo 'config.php' ;

        - Classe `Password`, possui dois métodos.

            - método (hash) retorna o hash de uma senha
            - método (verify) compara uma senha em texto explícito com um determinado hash, se o hash da senha for igual ao hash comparado retorna true, senão retorna false.
        
        - Classe `Router`, possui um método para carregar as requisições digitadas na URL. Caso a requisição exista no Array de rotas, o método retorna o caminho do arquivo referente aquela rota no diretório [controllers].

        - Classe `Uri`, possui apenas uma método que retorna a Url atual do navegador. A URL retornada passa por um filtro limpando requisições feita com variáveis.

            - Exemplo:

                http://localhost:8888/user?id=1

            O método irá retornar apenas:

                /user
        
        - Classe `View`, possui um método para renderizar as views. Um objeto da classe `View`,for instanciado no arquivo 'index'. O mesmo objeto pode ser chamado nos controllers para renderizar as views requisitadas.

    - Diretório [controllers], estão os arquivos que carregam os objetos do banco de dados e renderizam nas views/Telas.

    - Diretório [functions], possui os arquivos com funções globais que podem ser usadas de qualquer parte da aplicação. Existe um arquivo 'README.md' explicando cada função dentro deste diretório.

    - Diretório [models], possui as classes que irão carregar os objetos com os dados de cada tabela do banco de dados.

        - Classe `Model`, é uma classe abstrata com métodos genéricos que será herdada por cada classe referente a cada tabela no banco.

            - Possui uma variável {connection} que recebe uma conexão do banco de dados pela classe `Database`. A variável precisa ser protected para ser utilizada pelas classes herdadas.

            - Os métodos dentro da classe `Model` estão considerando que as classes herdadas possuem um atributo {table} que recebe o nome da tabela do banco de dados referente aquela classe. O atributo precisa ser protected para que a classe `Model` consiga reconhece-lo nos métodos.

                - método (getAll) retorna todas as linhas de um tabela.
                - método (get) retorna uma linha passando como parâmetro o nome da coluna e o valor dela.
    
    - Diretório [views], possui os arquivos de front-end, telas, formulários. 