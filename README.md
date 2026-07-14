# Laravel Bicycles Management (UFCD 605)

Este repositório contém o projeto de avaliação desenvolvido para a **UFCD 605 - Programação para a WEB - servidor (server-side)** da **ATEC - Academia de Formação**. O objetivo principal é consolidar os conhecimentos em arquitetura MVC, gerenciamento de bases de dados relacionais, migrações, seeders, factories e rotas no ecossistema Laravel.

## 🚀 Tecnologias Utilizadas

*   **PHP:** ^7.2.5 (Compatível com o ambiente Laravel 7)
*   **Laravel Framework:** ^7.0
*   **Laravel UI:** ^2.4 (Autenticação baseada em Bootstrap)
*   **Base de Dados:** MySQL / MariaDB

---

## 📌 Requisitos do Projeto

O projeto foi estruturado seguindo os seguintes critérios de avaliação:

1.  **Arquitetura Base:** Aplicação Laravel 7 com sistema de autenticação (`Laravel UI`) e estilização com Bootstrap.
2.  **Master Page:** Definição de um layout base (`layouts.app`) reutilizável para todas as páginas da aplicação.
3.  **Modelos e Migrações:** Configuração e relação estrutural entre as tabelas:
    *   `countries` (Países)
    *   `users` (Utilizadores)
    *   `bicycles` (Bicicletas)
4.  **Seeders:** População automatizada da tabela `countries` com os registos obrigatórios: *Portugal, Espanha, França e Polónia*.
5.  **Factories (Users):** Geração automática de **100 utilizadores**, garantindo que cada um possua um país (`country_id`) associado de forma válida.
6.  **Factories (Bicycles):** Geração automática de **200 bicicletas**, distribuídas de forma a garantir que cada utilizador possua exatamente **2 bicicletas** associadas.
7.  **Rotas e Listagens:**
    *   `/countries`: Listagem completa dos países.
    *   `/users`: Listagem dos utilizadores com os seus respetivos países.
    *   `/bicycles`: Listagem de todas as bicicletas e os seus proprietários.

---

## 🗺️ Modelo de Dados (DER)

A estrutura das tabelas e as suas relações foram desenhadas da seguinte forma:

*   **Countries:** `id`, `name`, `created_at`, `updated_at`, `deleted_at`
*   **Users:** `id`, `country_id` (FK), `first_name`, `last_name`, `email`, `birth_date`, `password`, ...
*   **Bicycles:** `id`, `user_id` (FK), `brand`, `model`, `color`, `price`, `created_at`, `updated_at`, `deleted_at`

### Relações:
*   Um **País** tem muitos **Utilizadores** (`HasMany`).
*   Um **Utilizador** pertence a um **País** (`BelongsTo`) e possui exatamente duas **Bicicletas** (`HasMany`).
*   Uma **Bicicleta** pertence a um único **Utilizador** (`BelongsTo`).

---

## ⚙️ Instruções de Instalação e Configuração

Siga os passos abaixo para clonar e executar este projeto localmente:

### 1. Clonar o Repositório
```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio
```

### 2. Instalar as Dependências do Composer
O projeto utiliza versões específicas do Laravel 7 e Laravel UI solicitadas:
```bash
composer install
```
*Nota: Para criar este ambiente do zero, foram utilizados os comandos:*
```bash
composer create-project --prefer-dist laravel/laravel:^7.0 nomedoprojeto
composer require laravel/ui:^2.4
php artisan ui bootstrap --auth
```

### 3. Configurar o Ficheiro de Ambiente (`.env`)
Duplique o ficheiro `.env.example` e altere o nome para `.env`:
```bash
cp .env.example .env
```
Abra o `.env` e configure os dados da sua base de dados local:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_da_sua_base_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 4. Gerar a Chave da Aplicação
```bash
php artisan key:generate
```

### 5. Executar as Migrações e os Seeders
Para criar as tabelas e povoar a base de dados com as Factories e Seeders desenvolvidos:
```bash
php artisan migrate --seed
```

### 6. Compilar os Assets Frontend (Bootstrap)
```bash
npm install
npm run dev
```

### 7. Iniciar o Servidor Local
```bash
php artisan serve
```
A aplicação estará acessível em `http://127.0.0.1:8000`.

---

## 🛠️ Funcionalidades e Rotas Principais

*   **Página Inicial / Login:** `http://127.0.0.1:8000/login`
*   **Listagem de Países:** `http://127.0.0.1:8000/countries`
*   **Listagem de Utilizadores:** `http://127.0.0.1:8000/users`
*   **Listagem de Bicicletas:** `http://127.0.0.1:8000/bicycles`

---

## 📄 Licença

Este projeto foi desenvolvido estritamente para fins académicos como critério de avaliação da UFCD 605 na **ATEC**.
