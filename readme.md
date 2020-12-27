
# E-Kamiyama project prototype (with Laravel) 

This is an idea of project to implement in view of revitalizing the village of Kamiyama (Japan). It is part of ICT4D (ICT for Developement) experiments class.
The idea is to help tourist visiting the village find Kamiyama residents who are willing to discuss with them via a map. They just need to make their intention known by registering.


1. Setup the environment file

Make a copy of ```.env.example``` file.

```bash
cp .env.example .env
```
Open the ```.env``` file
- Fill in your database information
- Paste your Google Maps API key (line 41)

2. Generate a project key

```bash
php artisan key:generate
```

3. Install packages

```bash
composer install
```

### That's all

### Laravel version used: 5.6