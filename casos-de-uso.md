# Casos de Uso
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
1. Adicionar produtos em promoção à página inicial.
2. Excluir produtos da página inicial.

### CDU2-Cadastro de Clientes

• Atores - Clientes

• Pré-Condiçõo - Ter um e-mail válido 

• Fluxo Principal -

1. Para criar um cadastro o cliente deverá  informar e-mail, senha, endereço completo e telefone.

2. Caso o e-mail já estiver cadastrado o sistema mostrará com uma mensagem.

3. Quando o cadastro for efetuado, o cliente receberá um e-mail com a confirmação do cadastro.

4. O cliente responderá a perguntas de segurança para facilitar a recuperação da senha, caso ela seja perdida.

### CDU3-Área de Login

• Atores: Clientes e administrador.

• Pré-Condição: Ser cadastrado no site.

• Fluxo Principal:

1. Quando o cadastro for efetuado o site guia o cliente de volta pra página inicial.

2. Com o login efetuado, o cliente poderá adicionar peças ao carrinho e também efetuar compras ou pedidos.

3. Clientes e Administradores recebem permissões de acesso diferentes.

• Fluxo Alternativo:

1. Caso o cliente não tenha cadastro ele será redirecionado a página de cadastro.

2. Caso o cliente tenha esquecido a senha ele será redirecionado para a página de recuperação de senha.

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
1. O cliente poderá visualizar datas disponíveis e efetuar compras ou encomendas.

2. O administrador receberá uma notificação a cada compra ou encomenda efetuada.

