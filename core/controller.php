<?php 

namespace core;

class controller
{
    public function __construct() {}

	public function view($area, $module, $path, $method, $data = [], $component = [])
	{
		return view::view($area, $module, $path, $method, $data, $component);
	}

	public function layout($area, $layout, $module, $path, $method, $data = [], $component = [])
	{        
		return view::layout($area, $layout, $module, $path, $method, $data, $component);
	}

    public function component()
    {
        return func_get_args();
    }
}