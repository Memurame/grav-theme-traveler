<?php
namespace Grav\Theme;

use Grav\Common\Data\Blueprints;
use Grav\Common\Theme;
use Grav\Common\Utils;
use RocketTheme\Toolbox\Event\Event;

class Traveler extends Theme
{

  protected $coloection;

  public static function getSubscribedEvents()
  {
    return [
      'onBlueprintCreated' => ['onBlueprintCreated', 0],
      'onAdminCreatePageFrontmatter' => ['onAdminCreatePageFrontmatter', 0],
      'onTwigSiteVariables'   => ['onTwigSiteVariables', 0]
    ];
  }

  public function onAdminCreatePageFrontmatter(Event $event)
  {
    $header = $event['header'];

    if(substr($event['data']['name'], 0, 5) == 'entry'){
      $header['visible'] = 1;
      $header['date'] = date($this->grav['config']->get('system.pages.dateformat.default', 'H:i d-m-Y'));
      $event['header'] = $header;
    }
  }

  public function onBlueprintCreated(Event $event)
  {
    $newtype = $event['type'];

    if (0 === strpos($newtype, 'modular/')) {
    } else {
      $blueprint = $event['blueprint'];
      if ($blueprint->get('form/fields/tabs', null, '/')) {

        $blueprints = new Blueprints(__DIR__ . '/blueprints/extended/');
        $extends = $blueprints->get('options');
        $blueprint->extend($extends, true);

      }
    }

    $blueprint = $event['blueprint'];
    if ($blueprint->get('form/fields/tabs', null, '/')) {

      $blueprints = new Blueprints(__DIR__ . '/blueprints/extended/');
      $extends = $blueprints->get('advanced');
      $blueprint->extend($extends, true);

    }

  }


  public function onTwigSiteVariables()
  {
    $this->grav['assets']->addCss('theme://build/css/traveler.min.css');
    $this->grav['assets']->addJs('theme://build/js/traveler.core.min.js', ['group' => 'bottom']);
    $this->grav['assets']->addJs('theme://build/js/traveler.app.min.js', ['group' => 'bottom']);

  }

}
