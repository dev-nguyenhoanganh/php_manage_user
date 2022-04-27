<?php
namespace Framework\Http;
use Framework\Http\BaseInterface\IHttpRespone;

/**
 * [Description HttpResponse]
 */
class HttpRespone implements IHttpRespone {
  private $view_dir; 

  public function __construct() {
    $this->view_dir = dirname(dirname(__DIR__)) . '\app\views\\';
  }

  /**
   * @param mixed $path
   * @param mixed $param
   * 
   * @return [type]
   */
  function render($path, $param = null) {
    $htmlContent = '';

    ob_start();
    $path = $this->view_dir . $path;
    
    if (file_exists($path)) {
      include $path;
      $htmlContent = ob_get_contents();
    } else {
      
    }
    
    ob_end_clean();
    print $htmlContent;
  }
}