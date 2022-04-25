<?php

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::middleware('web')->group(function () {
    $filesystem = new Filesystem;
    $dir = app_path('Http/Livewire');
    if ($filesystem->exists($dir)) {
        foreach ($filesystem->allFiles($dir) as $file) {
            $namespace = 'App\\Http\\Livewire\\' . str_replace(['/', '.php'], ['\\', ''], $file->getRelativePathname());
            $class = app($namespace);
            $prefix = explode('/', $file->getRelativePathname());

            if (property_exists($class, 'routes')) {
                foreach ($class->routes as $route => $data) {
                    if (!is_array($data)) {
                        $route = $data;
                    }

                    $route = Route::get($route, $namespace);

                    if (!empty($data['domain'])) {
                        $route->middleware($data['domain']);
                    }

                    if (!empty($data['middleware'])) {
                        $route->middleware($data['middleware']);
                    }

                    if (!empty($data['name'])) {
                        $route->name($data['name']);
                    }else{
                        $route->name($data);
                    }
                    
                    if (!empty($data['whereIn'])) {
                        foreach($data['whereIn'] as $parameter => $values){
                            $route->whereIn($parameter, $values);
                        }
                    }

                    if (count($prefix) >= 2) {
                        $route->prefix(Str::slug($prefix[0]));
                    }
                }
            }
        }
    }
});
