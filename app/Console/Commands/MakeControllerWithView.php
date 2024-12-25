<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeControllerWithView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:controller-with-view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a controller along with a corresponding view file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $controllerName = $name . 'Controller';

        // Create Controller
        $this->call('make:controller', ['name' => $controllerName]);

        // Create View Directory if not Exists
        $viewPath = resource_path('views/' . strtolower($name));
        if (!File::exists($viewPath)) {
            File::makeDirectory($viewPath, 0755, true);
        }

        // Create View File
        $viewFile = $viewPath . '/index.blade.php';
        if (!File::exists($viewFile)) {
            File::put($viewFile, '<h1>' . $name . ' Page</h1>');
            $this->info('View file created: ' . $viewFile);
        } else {
            $this->error('View file already exists: ' . $viewFile);
        }

        // Bind View in the Controller
        $controllerPath = app_path('Http/Controllers/' . $controllerName . '.php');
        if (File::exists($controllerPath)) {
            $controllerContent = File::get($controllerPath);
            $methodTemplate = <<<EOT

    public function index()
    {
        return view('{$name}.index');
    }

EOT;
            if (!str_contains($controllerContent, 'public function index')) {
                $controllerContent = str_replace(
                    '}',
                    $methodTemplate . PHP_EOL . '}',
                    $controllerContent
                );
                File::put($controllerPath, $controllerContent);
                $this->info('Index method added to ' . $controllerName);
            } else {
                $this->error('Index method already exists in ' . $controllerName);
            }
        }
    }
}
