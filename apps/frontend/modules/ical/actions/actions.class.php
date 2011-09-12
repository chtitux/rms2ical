<?php

/**
 * ical actions.
 *
 * @package    rms2ical
 * @subpackage ical
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class icalActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIcal(sfWebRequest $request)
  {
    $this->forward404Unless($this->nom = $request->getParameter("nom"));
    $json = json_decode(file_get_contents("http://rmsonline.fr/components/com_rmschedule/controllers/agenda.raw.php?start=1316383200000&end=1356476400000&type=cours&user=".$this->nom));

    $this->liste_cours = array();
    foreach($json as $cours)
    {
      $start = strtotime($cours->{'start'});
      $end   = strtotime($cours->{'end'});
      $dur_h = floor(($end - $start)/3600);
      $dur_m = ($end - $start)/60 % 60;
      $body_array = explode(" ", $cours->{'body'});
      $location = array_shift($body_array);
      $descr = str_replace("\n", "", implode(" ",$body_array));

      $this->liste_cours[] = array(
        "title"        => trim($cours->{"title"}),
        "start"        => $start,
        "duration"     => array("h" => $dur_h, "m" => $dur_m),
        "location"     => trim($location),
        "description"  => trim($descr),
        "uid"          => $cours->{"title"}."-".$cours->{"start"}."-".$start."-".$end,
      );
      
    }

    $this->getResponse()->setContentType("text/calendar");
    $this->setLayout(false);
  }
}
