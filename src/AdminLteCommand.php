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
    protected $signature = 'adminlte:install {--theme} {--auth}
		{--theme: To install theme assets}
        {--auth : To install authentication views and routes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all the required files for AdminLTE, and additional resources';


    public function handle()
    {       
		if ($this->option('theme')) {
			$this->installTheme();
		}
		elseif ($this->option('auth')) {
			$this->installAuth();
		}
		else{
			$this->install();
		}     
    }

    public function install()
    {
        $this->installTheme();
        $this->installAuth();
		$this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }

	public function installTheme()
	{
		$this->updateWebpack();
		$this->updateBoostrap();
        $this->updateSass();
		$this->updateLayouts();
		$this->info('AdminLte Theme installed successfully.');		
		$this->comment('Pleae run "npm install admin-lte@^3.2 --save" to install AdminLTE Template and Assets');		
	}
	
	public function installAuth()
	{
		$this->updateAuthViews();
        $this->updateHomePage();
        $this->updateRoutes();
		$this->info('AdminLte Auth installed successfully.');
	}
		
    protected function updateWebpack()
    {
        copy(
			FileHelper::getPackagePath('stubs/bootstrap/webpack.mix.js'), 
			base_path('webpack.mix.js')
		);
    }
 
    protected function updateBoostrap()
    {
        FileHelper:: ensureDirectoryExists(resource_path('js'));

        copy(
			FileHelper::getPackagePath('stubs/bootstrap/bootstrap.js'), 
			resource_path('js/bootstrap.js')
		);

        copy(
			FileHelper::getPackagePath('stubs/bootstrap/app.js'), 
			resource_path('js/app.js')
		);
      
    }

    protected function updateSass()
    {
        FileHelper::ensureDirectoryExists(resource_path('sass'));

        copy(
			FileHelper::getPackagePath('stubs/bootstrap/_variables.scss'), 
			resource_path('sass/_variables.scss')
		);

        copy(
			FileHelper::getPackagePath('stubs/bootstrap/app.scss'), 
			resource_path('sass/app.scss')
		);
    }

    protected function updateAuthViews()
    {
		$source = FileHelper::getPackagePath('stubs/auth');
		$destination = resource_path('views/auth');
		
        FileHelper::copyDirectory($source, $destination, true, true); 
		
    }
	
    protected function updateHomePage()
    {
		$source = FileHelper::getPackagePath('stubs/pages/dashboard.blade.php');
		$destination = resource_path('views/dashboard.blade.php');     
        copy($source, $destination);
    }
	
    protected function updateRoutes()
    {
        copy(
			FileHelper::getPackagePath('stubs/routes/auth.php'), 
			base_path('routes/auth.php')
		);
        copy(
			FileHelper::getPackagePath('stubs/routes/web.php'), 
			base_path('routes/web.php')
		);
    }
	
    protected function updateLayouts()
    {	
		$source = FileHelper::getPackagePath('stubs/layouts');
		$destination = resource_path('views/layouts');
		
        FileHelper::copyDirectory($source,$destination, true, true); 
    }


}
