### make command test

```
add this to repositories
{
    "type": "git",
    "url": "https://github.com/fyzzy1943/make-command.git"
}
```

```
composer require fyzzy1943/make-command --dev
```

```

if ($this->app->environment() !== 'production') {
    $this->app->register(\FyzzyMake\MakeConsoleServiceProvider::class);
}
```
