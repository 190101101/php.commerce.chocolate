<?php 

namespace core;

class view
{
    public static function view($area, $module, $path = null, $method, $data = null, $components = [])
    {
        settype($data, 'object');

        if(file_exists($file = "../moduls/{$area}/{$module}/view/$path/{$method}.php"))
        {
            require_once $file;
        }
        else
        {
            redirect('404');
        }
    }

	private static function render($area, $module, $path = null, $method, $data = null, $components = [])
	{
        settype($data, 'object');

		if(file_exists($file = "../moduls/{$area}/{$module}/view/$path/{$method}.php"))
        {
			ob_start();
            require_once $file;
            if($components != false){   
                foreach($components as $component)
                {
                    if(file_exists($files = "../moduls/{$area}/{$module}/view/$component[0]/{$component[1]}.php"))
                    {
                        require_once $files;
                    }
                    else
                    {
                        redirect('404');
                    }
                }
            }

			$content = ob_get_contents();
			ob_end_clean();
			return $content;
		}
        else
        {
            redirect('404');
		}
	}

	public static function layout($area, $layout, $module, $path, $method, $data = null, $components = [])
	{                
		$data['VIEW'] = $method != NULL ? 
        view::render($area, $module, $path, $method, $data, $components) : NULL;
		require_once "../layout/{$layout}.php"; 
	}
}