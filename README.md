<p align="center">
  <a href="#" target="_blank">
    <img src="CoreStream/public/assets/media/app/tridente.png" width="400" alt="Tridente Logo">
  </a>
  <h1 align="center">Poseidon</h1>
</p>

## Sobre o Projeto

Esta é uma aplicação Laravel que utiliza Inertia.js para renderizar arquivos Vue.js e usa templates do **Metronic 9**.

## Tecnologias Utilizadas

- **Laravel 11**
- **Inertia.js**
- **Vue.js 3**
- **Vite** (para gerenciamento de assets)
- **Metronic 9** (como template de UI)
- **TailwindCSS** (para estilização)

## Requisitos

Antes de iniciar, certifique-se de ter as seguintes ferramentas instaladas:

- PHP 8.x ou superior
- Composer
- Node.js
- NPM ou Yarn
- Banco de dados (MySQL, PostgreSQL, etc.)

## Instruções de Instalação

Siga os passos abaixo para configurar o projeto localmente:

1. Clone o repositório:

    ```bash
    git clone https://github.com/PabloAlves99/Laravel-VueJs
    cd Laravel-VueJs/CoreStream
    ```

2. Instale as dependências do PHP com o Composer:

    ```bash
    composer install
    ```

3. Instale as dependências do Node.js:

    ```bash
    npm install
    ```

4. Crie o arquivo `.env` a partir do exemplo:

    ```bash
    cp .env.example .env
    ```

5. Gere a chave da aplicação:

    ```bash
    php artisan key:generate
    ```

6. Configure as informações de banco de dados no arquivo `.env` de acordo com o seu ambiente.

7. Execute as migrações para preparar o banco de dados:

    ```bash
    php artisan migrate
    ```

8. Compile os assets do projeto para desenvolvimento:

    ```bash
    npm run dev
    ```

Para rodar a aplicação localmente, utilize o comando:

```bash
php artisan serve
