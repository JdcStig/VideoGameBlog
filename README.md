## Laravel 8 Complete Blog

•	Author: Jamie Duffy Creagh <br>

## Speck
•	5 pages : Home , Blog , Game , Gallery and Log In
•   Includes 5 Blogs

# Home Page 
• Images
• Links
• Image Grid

# Blog Page 
• Search Function
• Filter Fuinction
• Sort Function
• Create Post
• Delete Post
• Edit Post

# Show Page 
• Images
• Gifs
• Embeded youtube video
• Cards
• On hover methods

# Show Page 
• Slide Show set on a 5 second timer
• Slider containing Images
• Embeded youtube video
• Embeded map with Icons 

# Login Page 
• Input fields
• LogIn button


# References 
https://www.w3schools.com/howto/howto_css_image_grid_responsive.asp
https://www.w3schools.com/howto/howto_js_slideshow.asp
https://www.w3schools.com/bootstrap4/bootstrap_cards.asp




## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
