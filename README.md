# 📝 Validações do Projeto

Este documento descreve as validações realizadas em duas páginas principais do sistema: `index.php` (página de login) e `pagina_cadastro.php` (página de cadastro).

## 1. 🔐 Validações da Página `index.php` (Login)

A página de login possui as seguintes validações:

### 1.1 Validação dos Campos

- **Campos obrigatórios**: O formulário de login exige que os campos "usuário" e "senha" não estejam vazios. Se algum desses campos for deixado em branco, será exibido um alerta para o usuário solicitando o preenchimento.
  
### 1.2 Alerta de Credenciais Inválidas

- Caso o usuário ou a senha estejam incorretos, será exibido um alerta indicando "Usuário ou senha inválidos".


## 2. 🔐 Validações da Página `pagina_cadastro.php` (Cadastro)

A página de cadastro realiza diversas validações para garantir que os dados inseridos sejam válidos. As validações são as seguintes:

### 2.1 Campos Obrigatórios

todos os campos são  obrigatórios. O formulário não será enviado se algum desses campos estiver vazio.

### 2.2 Validação de Nome

O nome não pode conter números. A validação é feita utilizando uma expressão regular que verifica se o nome contém apenas letras e espaços.

### 2.3 Validação de Senha

A senha deve ter no mínimo 8 caracteres. O formulário não será enviado se a senha for mais curta que isso.

### 2.4 Validação de CPF

O CPF deve conter exatamente 11 dígitos. Caso o usuário insira um CPF com menos ou mais dígitos, um alerta será exibido.

### 2.5 Validação de Telefones

Telefone 1 e Telefone 2 devem conter 10 ou 11 dígitos. Ambos os campos são obrigatórios, e o formulário não será enviado se algum dos números estiver incorreto.