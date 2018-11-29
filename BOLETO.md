Implementação da biblioteca OpenBoleto para gerar boletos do Banco do Brasil.

Github:

 - https://github.com/openboleto/openboleto


Configurando no projeto

    - Baixe a pasta do GitHub.

    - Dentro da pasta [src], copie o diretorio OpenBoleto para a raiz do projeto.

    - Dentro da pasta [OpenBoleto] crie uma pasta [src] e transfira todos os arquivos para dentro dela.

    - Copie a pasta [resources] da biblioteca OpenBoleto para a raiz do projeto.

    - Configure o 'composer.json' para visualizar as classes dentro da pasta [OpenBoleto] e carregar no autoload.

    - Execute os comandos:

        - composer update

        - composer dump-autoload -o


Agora as classes estão prontas para serem usadas.


