# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* This is Pizza Web App Frontend with Cart System  (MPA)
* Version 1.0.0

### How do I get set up? ###

* The Pizza Web App Admin Panel is For onlline pizza delivery system, The user Can see Pizza list and can add to cart
* install repositry link 
* go inside {Pizza Web App Frontend} 
* open terminal and go to {Pizza Web App Backend} folder or simply open VSCODE Terminal
* npm install
* cp.env.example .env
* composer update
* php artisan key:generate
* setup database setting in env file (keep in mind the Admin panel and front end will use same database)
* remove the old storage file from public folder
* php artisan storage:link
* database is also available in repositry folder name deliverypizza.sql

### For Online server deployemnt ###
* in home.blade.php line number 17 image src will be like this //www.yourdomain.com{{$item->image->first()->src}}   Note-> this for online server deployment
* in layouts folder got app.blade.php line number 164 image src will be like this //www.yourdomain.com{{$item->image->first()->src}}   Note-> this for online server deployment

### For Local host deployemnt ###
* in .env file setup according to production
*  go to Web App Admin Panel/public/storage/uploads.  copy all the files and put inside the  Web Frontend/public/storage/uploads.
* in home.blade.php line number 17 image src will be like this //www.yourdomain.com{{$item->image->first()->src}}   Note->  for local deployment
* in layouts folder got app.blade.php line number 164 image src will be like this //www.yourdomain.com{{$item->image->first()->src}}   Note-> for local deployment


* php artisan serve

## Link ##

* url/home       

### Technology Used ###

* Laravel 7
* PHP 7
* MYSQL 
* HTML5
* Javascript

### Who do I talk to? ###

* ziakn03@gmail.com