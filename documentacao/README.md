# Lê Costuras

### Projeto Modelo de Projeto Final do Curso Técnico Integrado em Desenvolvimento de Sistemas do Colégio Pedro II - Campus Duque de Caxias - 2019

## Integrantes:
- Eshiley Victória da Silva Crisóstomo
- Marcella da Cruz Moura
- Meyrielle Gomes do Amaral do Monte

## Proposta

**Objetivo:** O site tem o objetivo de que o cliente compre roupas através dele, obtendo maior acessibilidade aos produtos.

**Principais Funcionalidades:**
No site será apresentado um espaço para compra e exibição de peças confraternizadas pela stakeholder.

**Stakeholder:**

- Nome: Alessandra da Silva Crisostomo 
- Profissão: Costureira 
- [Proposta](https://github.com/cp2-dc-info-projeto-final/le-costuras/blob/master/documentacao/proposta.md)


## [Requisitos](#Requisitos)

* [RF1](#rf1-área-inicial)
* [RF2](#rf2-pré-cadastramento)
* [RF3](#rf3-área-de-cadastro-de-clientes)
* [RF4](#rf4-área-de-login)
* [RF5](#rf5-área-de-catálogo-de-peças)
* [RF6](#rf6-links-de-acesso)
* [RF7](#rf9-carrinho)
* [RF8](#rf10-área-de-compra)
* [RF9](#rf11-logoff)

### [Requisitos não funcionais](#requisitos-não-funcionais)
* [RNF1](#rnf1-fácil-manejo)
* [RNF2](#rnf2-inteface)
* [RNF3](#rnf4-banco-de-dados)

## Resquisitos funcionais
### RF1-Área inicial
Ao abrir o site, ele deverá apresentar uma home page com um belo design e, nela, as opções de navegação para o resto do site.
### RF2-Pré cadastramento
O administrador deverá ser pré cadastrado no site.
### RF3-Área de Cadastro de Clientes
Uma área onde os novos usuários do site devem efetuar um cadastro informando email, senha, nome de usuário e seu endereço.
### RF4-Área de Login
Usuários que já possuem cadastro acessam a sua conta pelo login para podem efetuar compras, fazer encomendas e demais funções do site
### RF5-Área de Catálogo de Peças
Uma área que deverá apresentar as peças já prontas, em fotos como um catálogo, exibindo seu preço e seus tamanhos disponíveis.
### RF6-Links de acesso
A página inicial deve apresentar uma área superior com links para as remificaçôes do site, como catálogo, área de login, do carrinho etc.
### RF7-Carrinho
Local para armazenar peças que pretendem ser compradas.
### RF8-Área de Compra
Local onde deverá ser efetuada a compra, e depois que efetuada, exibir um prazo de entrega, com a opção de boleto ou dinheiro na hora da entrega(caso seja pessoalmente).
### RF9-Logoff
Botão que terá função de deixar a conta em login e voltar para o home como cliente não cadastrado.


## Requisitos Não Funcionais

### RNF1-Fácil Manejo
O site deverá ser didático e de fácil manuseamento.
### RNF2-Inteface
O site deverá apresentar um design vivo e colorido mas sempre mantendo o teor profissional.
### RNF3-Banco de Dados
O site deverá conter uma comunicação e armazenamneto direto com o banco de dados.

- [Áudio da Entrevista]
- [Entrevista Transcrita]


## [Casos de Uso](#Casos-de-Uso)

## Sumário
* [CDU1](#cdu1-gerenciamento-da-página-inicial)
* [CDU2](#cdu2-cadastro-de-clientes)
* [CDU3](#cdu3-área-de-login)
* [CDU4](#cdu4-gerenciamento-do-catálogo)
* [CDU5](#cdu5-gerenciamento-do-carrinho)
* [CDU6](#cdu6-área-de-compra)


 ### CDU1-Gerenciamento da Página Inicial

• Atores: Administrador do site

• Pré-Condição: Ser cadastrado como Administrador do site

• Fluxo Principal: 
1. Adicionar produtos ao catálogo.
2. Excluir produtos do catálogo.

### CDU2-Cadastro de Clientes

• Atores - Clientes

• Pré-Condiçõo - Ter um e-mail válido 

• Fluxo Principal -

1. Para criar um cadastro o cliente deverá  informar e-mail, senha, endereço e nome de usuário.

2. Caso o e-mail já estiver cadastrado o sistema mostrará com uma mensagem.

### CDU3-Área de Login

• Atores: Clientes e administrador.

• Pré-Condição: Ser cadastrado no site.

• Fluxo Principal:

1. Quando o cadastro for efetuado o site guia o cliente de volta pra página inicial.

2. Com o login efetuado, o cliente poderá adicionar peças ao carrinho e também efetuar compras.

3. Clientes e Administradores recebem permissões de acesso diferentes.

### CDU4-Gerenciamento do catálogo

• Atores: Administrador 

• Pré-Condição: Ser cadastrado como administrador 

• Fluxo Principal:

1. O administrador pode adicionar/remover peças do catálogo.

2. O administrador pode adicionar preços e descrições as peças.

### CDU5-Gerenciamento do carrinho

•  Atores: Clientes

•  Pré-Condição: Ter uma conta e estar logado nela

•  Fluxo Principal:
1. O cliente poderá adicionar e remover produtos do carrinho.

### CDU6-Área de compra
•  Atores: Clientes

•  Pré-Condição: Ter uma conta e estar logado nela

•  Fluxo Principal:
1. O cliente poderá efetuar compras.

## [Modelagem](Modelagem)
- [Script SQL]

## [Manual de Utilização](Manual-de-Ultilização)
- Ao acessar o site, o cliente será direcionado a página home.
- O cliente deverá efetuar o cadastro inserindo as informações pedidas(Nome, Endereço, Email e Senha).
- Quando for feito o cadastro, o cliente deverá efetuar o login. 
- Na área de login, após preecher os campos pedidos(Email e Senha), o usuário será direcionado para a página inicial(home); 
- Na página home, o cliente terá acesso as promoções, trabalhos realizados pela costureira.
- Para ter acesso ao catálogo, basta o cliente acessá-lo pela barra de navegação,no topo da página home. No catálogo contém todas as peças disponíveis para compra.
- Para efetuar, basta o cliente selecionar a peça escolhida que a mesma será adcionada ao carrinho.
- Após serem adcionados todos os itens escolhidos no carrinho, o cliente será direcionado ao pagamento. 
- Após o pagamento ser finzalizado, ele será direcionado novamente para a pagina home.
- Para sair de sua conta, basta o usuário clicar no botão sair, que é localizado no canto direto da barra de navegação. Em seguida ele será direcionado a página de login novamente.

O administrador da página terá funções diferentes de um usuário comum:
- Para ter acesso a sua página, o administrador deverá efetuar o login.
- O administrador terá sua própria área, onde poderá tornar outros usuários administradores também.
- Ele terá a função de inserir e remover peças no catálogo.

