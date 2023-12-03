
Have a room for rent? Find your perfect housemate.

* [Requirements](#requirements)
* [Installation](#installation)

## Requirements

## Installation

## Setting up the database

    CREATE DATABASE mydatabase;

Download [world.sql](https://github.com/dr5hn/countries-states-cities-database/blob/master/sql/world.sql) at commit `1aed768`.

Launch MySQL Shell from inside the directory where you saved the script (e.g., `/database/sql/world.sql`).

    $ mysqlsh

    > \connect <username>:<password>@<hostname>

    > USE mydatabase;

Create and seed the `cities`, `countries`, and `states` tables.

    > \source world.sql

Now run your migrations.

    $ composer install

    $ npm install

    $ npm run dev

    $ php artisan migrate

    $ php artisan db:seed


# Features

Landlord portal
- landlord can visit `/owner/dashboard` to manage properties and listings
