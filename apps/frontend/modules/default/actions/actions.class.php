<?php

/**
 * default actions.
 *
 * @package    rms2ical
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->login = strtoupper($request->getParameter('login'));
  }

  public function executeError404(sfWebRequest $request)
  {
  }
}
