**Estrutura *MVC***   

**Estrutura de Diretórios:**

A idéia educacional, de que o aluno possa, pensar de como montar o projeto estuturado em um provejo *MVC*.


- `index.php`: Página inicial para redirecionamento.
- `config.php`: Arquivo de configuração para a conexão com o banco de dados.
- `controllers/`
    - `UserController.php`: Controlador para ações relacionadas a usuários.
    - `ProductController.php`: Controlador para ações relacionadas a produtos.
- `models/`
    - `UserModel.php`: Modelo para operações relacionadas a usuários.
    - `ProductModel.php`: Modelo para operações relacionadas a produtos.
- `views/`
    - `login_form.php`: Formulário de login.
    - `user/`
        - `user_home.php`: Página do usuário.
        - `product_list.php`: Lista de produtos do usuário.
    - `admin/`
        - `admin_home.php`: Página do administrador.
        - `product_form.php`: Formulário de cadastro de produto.