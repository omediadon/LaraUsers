# LaraUsers
 Teste technique: Laravel


### How to run
 - Clone this repo
 - Run `composer install`
 - Create a database and edit `.env` file
 - Run `php artisan migrate:refresh`
 - Start the server by running `php artisan serve`
 - Happy testing


### Routes
 - /users/{id} : GET/POST/PATCH/DELETE
   - Get the list of users/user, create/alter a user, delete a user
 - /groups/{id} : GET/POST/PATCH/DELETE
   - Get the list of groups/group, create/alter a group, delete a group
