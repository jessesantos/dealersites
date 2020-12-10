# Dealer Sites
Teste Dealer Sites

Foi usado o framework [Laravel 8.*](https://laravel.com/docs/8.x) com o servidor [Homestead](https://laravel.com/docs/8.x/homestead) em Vagrant.

# Passos
* Após criar o servidor, crie um projeto Laravel 8 com o comando `composer create-project laravel/laravel example-app` 
* Baixe os arquivos deste GIT na raiz do seu projeto Laravel 8 (Se houver algum problema com dependências, use o Composer para instalá-las)
* Certifique-se que o banco esteja configurado `.env`
* Gere os migrations com o comando `php artisan migrate`
* Gere os Seeds com o comando `php artisan db:seed --class=UserSeeder` e `php artisan make:seeder UserAccessSeeder` (Obs.: manter a sequência)
