
#### How to setup the demo

```bash
git clone https://github.com/TheAnswerIs43/crud-demo.git
cd crud-demo
cp .\.env.example .env
composer install
php artisan key:generate
php artisan databasejson:migrate
php artisan serve
```

#### How the project is structured

The project uses the package ```alvin0/database-json-laravel``` to manage the storage of data as requested by the product owner.
No other packages were deliberately used in order to comply with delivery as much as possible.
It is defined only one table: **myusers**, this contains the users on whom we will test our CRUD functions.

#### Views

The project has 4 different views:

1) ``` / ``` The homepage, where are listed all users.
2) ```/create``` where an user can be created.
3) ```/myuser/[ID]``` where you can see the detail of a user
4) ```/edit/[ID]``` where you can edit an existing user

Where ```[ID]``` is the **id** of the user.

#### API

it is possible to interact with the database without using the UI, there are API to execute the CRUD operations:

1) ```POST /api/create ``` 
2) ```GET /api/read/[ID]```
3) ```POST /api/update/[ID]```
4) ```DELETE /api/delete/[ID]``` 