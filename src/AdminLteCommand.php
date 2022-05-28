<?php

namespace Luanardev\AdminLte;

use Illuminate\Console\Command;


class AdminLteCommand extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all the required files for AdminLTE, and additional resources';


    public function handle()
    {       		
		$this->copyAssets();
		$this->copyPlugins();
		$this->copyViews();
        $this->copyRoutes();
		$this->info('AdminLte installed successfully.');		
    }
	
	protected function copyAssets()
    {	
		$source = base_path('vendor/almasaeed2010/adminlte/dist');
		$destination = public_path('vendor/adminlte/dist');		
        FileHelper::copyDirectory($source,$destination, true, true); 
    }
	
	protected function copyPlugins()
    {	
		$source = base_path('vendor/almasaeed2010/adminlte/plugins');
		$destination = public_path('vendor/adminlte/plugins');		
        FileHelper::copyDirectory($source,$destination, true, true); 
    }
	
	protected function copyViews()
    {	
		$source = FileHelper::getPackagePath('stubs/views');
		$destination = resource_path('views');
		
        FileHelper::copyDirectory($source,$destination, true, true); 
    }
	
    protected function copyRoutes()
    {
        $source = FileHelper::getPackagePath('stubs/routes');
		$destination = base_path('routes');
		
        FileHelper::copyDirectory($source,$destination, true, true);
    }


}
