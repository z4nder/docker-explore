## Create Laravel project
```
    docker compose run --rm composer create-project laravel/laravel .
```

## Run artisan commands
```
    docker compose run --rm artisan --version
```

## Run npm commands
```
    docker compose run --rm --service-ports npm run dev
```

## Change folder owner
```
    sudo chown -R $USER src
```

## Up nginx project
```
    docker compose up --build nginx
```
