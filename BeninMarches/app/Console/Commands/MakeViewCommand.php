<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade template.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $view = $this->argument('view');
        $path = $this->viewPath($view);
        $this->createDir($path);

        if (file_exists($path)) // Utilisation de la fonction native file_exists
        {
            $this->error("File {$path} already exists!");
            return;
        }

        file_put_contents($path, ''); // Utilisation de la fonction native file_put_contents
        $this->info("File {$path} created.");
    }

    public function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';
        $path = "resources/views/{$view}";
        return $path;
    }

    public function createDir($path)
    {
        $dir = dirname($path);
        if (!is_dir($dir)) // Utilisation de la fonction native is_dir
        {
            mkdir($dir, 0777, true);
        }
    }
}