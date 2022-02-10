## Features

### Routes defined inside Livewire components

```php
public array $routes = [
    'add' => [
        'name' => 'site.add',
        'middleware' => 'auth'
    ],
    'edit/{site}' => [
        'name' => 'site.edit',
        'middleware' => 'auth'
    ]
];
```

### Auto migrations

```php
// in the model
public function migration(Blueprint $table)
{
    $table->id();
    $table->string('name')->index();
    $table->string('email')->unique();
    $table->string('timezone')->nullable();
    $table->string('date_format')->default('d.m.Y')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamp('email_verified_at')->nullable();
    $table->timestamps();
}
```

```console
php artisan migrate:auto
```

### Livewire Form Fields

to make new field run this:
```console
php artisan make:form YourForm
```
