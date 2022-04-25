<?php
namespace Framework\Http;
use Framework\Http\BaseInterface\IHttpRespone;

/**
 * [Description HttpResponse]
 */
class HttpResponse implements IHttpRespone {
  
  /**
   * @param mixed $path
   * @param mixed $param
   * 
   * @return [type]
   */
  function render($path, $param) {
    ob_start();
    include $path;
    $htmlContent = ob_get_contents();
    ob_end_clean();

    print $htmlContent;
    return;
  }
}