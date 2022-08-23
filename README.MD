# Teste Desenvolvedor Fullstack 

### Contexto

Na plataforma da Husky, existem três atores principais que se relacionam com uma
entrega: a operação de motoboy que recebe a solicitação de entrega; o cliente da
empresa de motoboy que solicita uma entrega; o entregador que realiza a entrega.
Cada entrega possui as seguintes informações: cliente, entregador, status, ponto de
coleta, ponto de destino. Todos os campos são obrigatórios na criação de uma
entrega, menos o entregador.
Cada entrega possui pelo menos 4 status: Novo, atribuído assim que a entrega é
criada; Entregando, atribuído quando o entregador está se deslocando para o ponto
de destino; Finalizado, atribuído quando a entrega foi feita com sucesso; Cancelada,
quando a entrega não foi realizada.

### Descrição

O objetivo do teste é desenvolver um painel onde seja possível: Criar entregas,
consultar entregas, editar entregas, alterar o status de entregas e atribuir
entregadores às entregas. Alguns pontos importantes a serem observados:

- Na consulta de entregas deve ser possível fazer filtrar as entregas por status
e entregador
- O UX do painel fica a cargo de você;
- Você pode estruturar o código em um monorepo, porém frontend e o backend
devem ser aplicações separadas;
- O backend deve ser desenvolvido em PHP;
- O frontend deve ser desenvolvido em Javascript, e não pode conter código
escrito PHP;
- Na camada de dados, deve ser utilizado MySQL;
- A aplicação deverá ser funcional, iremos fazer um deploy da stack para testar.

Os entregáveis são:

- Repositório(s) contendo o código do frontend e backend;
- O arquivo .sql com o dump do banco de dados;
- Documentação com as instruções de deploy;


