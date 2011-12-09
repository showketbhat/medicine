<?php

/**
 * register actions.
 *
 * @package    medicine
 * @subpackage register
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class registerActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   // $this->forward('default', 'module');
  }
  
  public function executeRegister(sfWebRequest $request)
  {
  // validate and the redirect to login page
   // $this->forward('default', 'module');
   $this->redirect('user/login');
  }
}
