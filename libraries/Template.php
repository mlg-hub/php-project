<?php
// template class
class Template{
	//path to template
	protected $template;
	//variables passed in
	protected $vars = array();
	/*
	 * class conctructor
	 */
	public function __construct($template){
		$this->template = $template;
	}
	// Get template variables
	public function __get($key){
		return $this->vars[$keys];
	}
	public function __set($key, $value){
		$this->vars[$key] = $value;
	}
	public function __toString(){
		extract($this->vars);
		chdir(dirname($this->template));
		ob_start();

		include basename ($this->template);

		return ob_get_clean();
	}
}
?>