# Drink Tracker

## Synopsis

A web application for recording and generating reports on drink consumption over time.

## Features

- [X] Authentication (4 digit passwords)
- [ ] Add Drink Feature
	- [ ] Dropdown / Autocomplete?
- [ ] View Drinks Feature
- [ ] View Drink Date Feature
- [ ] Graphs Feature
- [ ] Data Insights Feature
- [ ] Manage Drink Options
- [ ] Design
	- [ ] Design Add Drink Page
	- [ ] Design Drinks Page
	- [ ] Design Drink Date Page
	- [ ] Design Graph Page
	- [ ] Design Data Insights Page
	
## Local MAMP Installation - Mac

- [ ] Download and Install [MAMP](https://www.mamp.info/en/)  
- [ ] Set MAMP Directory to `./htdocs/Public`  
- [ ] Create MySQL Database (use a GUI tool such as [Sequel Pro](http://www.sequelpro.com))  
- [ ] Execute `cp .env.example .env` in the `./htdocs` directory  
- [ ] Open `./htdocs/.env` - Fill in your database config and ORG/ADMIN information
- [ ] Download and Install [Composer](https://getcomposer.org/)  
- [ ] Execute `composer install` in the `./htdocs` directory (`php composer.phar install` if using composer.phar)  
- [ ] Execute `php artisan migrate` in the `./htdocs` directory  
- [ ] Execute `php artisan key:generate` in the `./htdocs` directory  
- [ ] Execute `mkdir -p storage/framework/sessions` and `mkdir -p storage/framework/views` in the `./htdocs` directory  
- [ ] Execute `chmod -R 757 storage` in the `./htdocs` directory  
- [ ] Start MAMP Servers

## Contributors

@harrischristiansen [HarrisChristiansen.com](http://www.harrischristiansen.com) (harris@harrischristiansen.com)  