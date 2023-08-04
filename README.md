### Laravel-TDD-Crud-Rest-Api

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
</p>
<a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=30&pause=1000&center=true&vCenter=true&multiline=true&width=1080&height=160&lines=I+welcome+everyone!+My+name+is+Rinat.+;I+am+engaged+in+web+development+of+back-end+applications+and;websites+and+a+little+front-end." alt="Typing SVG" /></a>

### Project written on Laravel: Instructions and additional information for installing and testing the application:
* composer install or composer update
* Create a DB (in the .env file and the database, enter the correct data for configuration)
* php artisan migrate

### To run the project locally, you need to type commands in the terminal in turn ==>
* php artisan serve

### For Unit tests:
* cp .env .env.testing
* php artisan make:test TicketTest --unit
* php artisan migrate --seed --env=testing
* php artisan migrate:refresh --seed --env=testing
* composer dump-autoload
* php artisan test

### Additional actions in case of errors...
* php artisan route:cache
* php artisan route:clear
* php artisan config:clear
* php artisan cache:clear
* php artisan optimize
### Content. Themes.
* Post test.
* We pass the image in the test.
* Post title validity test.
* Image fidelity test.
* Post update test.
* Test on the posts index page and get all the posts.
* Test on the posts page show and get one post.
* Installing laravel breeze.
* Test for deletion by a post-authorized user.
* Test to delete a post only by an authorized user
* Test for adding a post to the API.
* Test for the validity of the post title in the API.
* API Image Validity Test.
* API post update test.
* Attributes with date type in API testing.
* Test to get a list of posts in the API
* 02:03:34 Test for getting one post in the API.
* Test for deleting a post by an authorized user in the API.
* Test to delete a post only by an authorized user in the API. 
* Unit Test example.
