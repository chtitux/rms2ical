<?php

class ConvertJSON {
  public static function JSONtoHTML($text)
  {
    return html_entity_decode(html_entity_decode($text,  ENT_QUOTES, 'UTF-8'),  ENT_QUOTES, 'UTF-8');
  }

}
