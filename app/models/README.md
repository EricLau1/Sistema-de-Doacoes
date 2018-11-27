Arquivos que carregam os dados do banco de dados.

- Classe `Model` possui métodos genéricos que serão herdados das classes referentes as tabelas do banco de dados.

    - variável {$connection} abre a conexão com o banco de dados.

    - método ( getAll ) lista uma tabela referente a classe daquela tabela.
   
    - método ( get ) recupera uma linha da tabela referente a classe daquela tabela, recebendo dois parâmetros. O primeiro parâmetro será o nome da coluna da tabela e o segundo parâmetro será o valor dessa coluna na tabela. 

- Class `Usuario`, herda de `Model`.

- Classe `Estado` não herda de `Model`. Inicia com dados fixos em memória, pode listar os dados de todos os estados brasileiros, ou os estados de uma região apenas.