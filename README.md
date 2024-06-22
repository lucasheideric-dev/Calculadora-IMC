# Preview da Calculadora IMC
![image](https://github.com/lucasheideric-dev/Calculadora-IMC/assets/119465141/fe4a3ffe-25a1-4081-8314-5ac59b5d0ba4)



# Calculadora de IMC
Este é um projeto simples de uma Calculadora de IMC (Índice de Massa Corporal) desenvolvido utilizando CakePHP 4 e jQuery.

## Descrição
A Calculadora de IMC é um aplicativo web que permite aos usuários calcular o seu IMC com base no peso e altura informados. O resultado é exibido em tempo real com a categoria correspondente (baixo peso, peso normal, sobrepeso, obesidade).

## Funcionalidades
- Formulário de entrada para peso (kg) e altura (m).
- Cálculo do IMC.
- Exibição do resultado com a categoria correspondente.
- Validação básica para garantir que os valores inseridos são válidos.

## Tecnologias Utilizadas
- [CakePHP 4](https://cakephp.org) - Um framework de desenvolvimento rápido para PHP.
- [jQuery](https://jquery.com) - Uma biblioteca JavaScript rápida, pequena e rica em recursos.

## Instalação
Siga os passos abaixo para configurar o projeto localmente:

1. Clone o repositório:

   ```bash
   git clone https://github.com/seu-usuario/imc_calculator.git
   cd imc_calculator


2. Instale as dependências do projeto usando Composer:
composer install


3. Configure o banco de dados no arquivo config/app_local.php:
'Datasources' => [
    'default' => [
        'host' => 'localhost',
        'username' => 'seu_usuario_bd',
        'password' => 'sua_senha_bd',
        'database' => 'nome_do_seu_bd',
        // outras configurações...
    ],
],


4. Inicie o servidor CakePHP:
bin/cake server


## Uso
Preencha o formulário com seu peso (em kg) e altura (em metros).
Clique no botão "Calcular".
Veja seu IMC e a categoria correspondente sendo exibidos em tempo real.


