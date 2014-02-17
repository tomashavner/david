<?php
/**
* Standard controller layout.
* 
* @package DavidCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $da;
      $da->data['title'] = "The Index Controller";
   }

}
