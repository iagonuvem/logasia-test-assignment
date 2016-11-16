# LOGASIA Test Assignment
**Iago Nuvem**

## 1. Single Page Aplication 

### Requeriments:
- PHP 5.6 <
- Composer
- NPM
- MySQL

### Instalation:

To install run the following commands:
```sh
composer install
npm install
bower install
gulp watch
```
Then, run migrates:
```sh
php artisan migrate
```
and Database seeds:
```sh
php artisan db:seed
```

### DOCS:

#### Database

This is how was the database modeling, in two ways.

##### *SQL Schema*

![SQL Schema](/database/sql_schema.jpg)
Format: ![Alt Text](url)

##### *NoSQL Schema*

```js
vehicles = [{
	type : '',
	description : '',
	vehicle : [
		{
			description : '', 
			default_price : 0,
			default_availability : 1,
			prices : [
				{price : '', data : ''}
			],
			availability : [
				{available : '' , data : ''}
			]
		}
	]
}]
```

## 2. Questions

### 2.1 SPA
If you had to develop a large Single Page Application by yourself, which technology stack and
application architecture would you choose and why? Would it be different from the Test SPA?

> I will use a noSQL database, because its more escalable. It will be just a little bit different from the test SPA, because I will spend more time with it ,so I can think in better ways and solutions to improve it.

### 2.2 Programming languages
Which programming languages are you familiar with? Which programming languages or
frameworks/SDKs do you enjoy working with and why? (in descending order of preference)

> I'm familiar with PHP and JavaScript, and I enjoy to work with both of then, because of the large comunity and online documentations, what makes it easier and good to work with.In descending order of preference I describe:
	1. PHP / Laravel Framework
	2. JavaScript / NodeJs

### 2.3 New technologies
If you have opportunities to learn new language/technology, what would it be and why?
> I realy like to learn new technology, and if I had the opportunitie I would like to learn Go Lang, because I think that in a closer future it will be massively used.

### 2.4 Problem solving
You are stuck on a programming problem, what are your steps to try solving it?
> First Step : take a coffe! Second Step: Google it! if that fails, I try to get co-workers help

### 2.5 IDE
What IDEs do you use and why?
> I use Sublime Text, of all IDE's I've used, it was the fastest and lightest.

### 2.6 Professional career
What motivated you to become a software developer?
> I was always so much curious about how everything works, and I always try to get the easier way to solve problems. I thing that software developing its a task for people like me, that think beyond and like to always learn and share new knowledges. That is what motivates me.

### 2.7 Relocation
Are you willing to relocate to Kuala Lumpur?
> Not in a closer future.