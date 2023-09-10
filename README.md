
![SpeedyBite](https://github.com/Dafnay/HeroesApp/assets/109661844/f0ec2809-4c7c-47d4-aa26-d89fc3bddd52)


<h1 align="center"> SpeedyBite </h1>
<h4> 1. Description of the Project </h4>
<p>Create a web application that allows different types of users to efficiently and systematically manage a restaurant's products and home delivery orders. Users will be able to add, edit, or delete dishes from the shopping cart and also add some to favorites. It will also allow users to review and reorder their previous orders; the administrator can create dishes and track all orders made in the store.</p>

<h4> 2. Project Objectives </h4>

<ul>Functional Requirements <b>User</b>:</ul>
<li>Add Dish: Users WILL BE ABLE TO add new dishes to the shopping cart.</li>
<li>View Shopping Cart: Users WILL HAVE constant access to the shopping cart to monitor selected dishes in a list format.</li>
<li>Delete Dish: Users WILL BE ABLE TO delete dishes from the shopping cart, one by one or several at a time.</li>
<li>Filter Dishes: Users WILL BE ABLE TO sort items by price and type (e.g., meat, fish, specific ingredients...).</li>
<br>

<ul>Functional Requirements <b>Superadmin</b>:</ul>
<li>Add, Edit, or Delete Dishes: The super administrator SHOULD manage the dishes.</li>
<li>Dish Categorization: The super administrator CAN categorize the dishes.</li>
<li>Order Reception: The super administrator SHOULD receive and manage order requests.</li>
<br>

<ul>Additional Functionalities <b> User:</b></ul>
<li>Favorites: Allow users to assign dishes as favorites.</li>
<li>User Registration: Users CAN register in the application by providing a username and password.</li>
<li>Login: Users CAN log in to the application using their credentials.</li>


  
  

 
<h4> 🛠️5. Open and Run the Project:</h4>
   

Clone your repository

```bash
(https://github.com/ecommerce-foodmarket/food-market.git)
```
Open the repository in VS Code and write in terminal:

```bash
composer install
```
Duplicate .env.example, rename as .env, and put your values
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Comand for an APP_KEY
```bash
php artisan key:generate
```
write in your terminal to migrate DB tables
```bash
php artisan migrate
```
Migrate seeders,
to seed with values some of your tables
```bash
php artisan db:seed

```
Install npm to show Blade
Then command 
```bash
npm install
```
Then command 
```bash
npm run build
```

Finally Command for files
```bash
php artisan storage:link
```

<h4> 💻6. Technologies Used:</h4>
   <ul>
    <li>LARAVEL</li>
    <li>BLADE</li>
    <li>TAILWIND</li>
    <li>FIGMA</li>
    <li>JIRA</li>
     <li>CANVA</li> 
   </ul>

   <h2> Our Figma Prototype </h2>

  -  User view
![USUARIO](https://github.com/ecommerce-foodmarket/food-market/assets/109661844/476c71f3-19cd-4a29-b6b9-03339b7b9772)

  -  Admin view

![ADMIN](https://github.com/ecommerce-foodmarket/food-market/assets/109661844/a2670b05-8b5f-41ae-ab70-5f6028f3c013)



   <h2> Nuestro User Flow </h2>
 
![userflow](https://github.com/ecommerce-foodmarket/food-market/assets/109661844/11a250be-a41b-4d2f-a30e-27bf091b43d1)



  <h2> User Stories </h2>
  
![HasUsuario](https://github.com/ecommerce-foodmarket/food-market/assets/109661844/7c33c9f6-b26b-4b42-99ad-c539d9d56c0f)


 
<h2> Database Modeling </h2>


![DATOS](https://github.com/ecommerce-foodmarket/food-market/assets/109661844/e281d57a-4d85-4a10-b56c-12e930a0aa60)


   ## Authors

| [<img src="https://avatars.githubusercontent.com/u/132446921?v=4" width=115><br><sub>Ana Encinas</sub>](https://github.com/anaencinasd)) |  [<img src="https://avatars.githubusercontent.com/u/110493210?v=4" width=115><br><sub>Helena Ponte</sub>](https://github.com/helenaponted) | [<img src="https://avatars.githubusercontent.com/u/132447075?v=4" width=115><br><sub>Jimena Castellanos</sub>](https://github.com/Jimena81) | [<img src="https://avatars.githubusercontent.com/u/110122046?v=4" width=115><br><sub>Raissa de León</sub>](https://github.com/Ninetthe) |  [<img src="https://avatars.githubusercontent.com/u/109661844?v=4" width=115><br><sub>Alba Velasco</sub>](https://github.com/Dafnay) |
| :---: | :---: | :---: | :---: | :---: |
 
