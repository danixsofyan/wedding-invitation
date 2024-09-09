# Installation

## Setup this repository first

Usage

```bash
git clone https://github.com/danixsofyan/wedding-invitation
cd wedding-invitation
```

## Setup Laravel Packages and Migrations

### Make sure you do this before setup on bash

-   PHP version is on version 8
-   .env File is available or exists
-   Change database config on .env file
-   Composer installed

### Bash Usage

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install && npm run dev
php artisan migrate:fresh --seed
php artisan serve
php artisan storage:link
```

### landing page with guest name

http://wedding-invitation.test/?to=Dani+Sofyan

### login

```bash
http://wedding-invitation.test/admin
E : admin@codelogy.dev
P : 123qweasd
```

### DEMO

http://wedding.codelogy.dev/?to=Dani+Sofyan

```bash
http://wedding.codelogy.dev/admin
E : admin@codelogy.dev
P : 123qweasd
```
