<?php
namespace Grav\Theme;

use Grav\Common\Data\Blueprints;
use Grav\Common\Theme;
use Grav\Common\Utils;
use RocketTheme\Toolbox\Event\Event;

class Traveler extends Theme
{

  public static function getSubscribedEvents()
  {
    return [
      'onBlueprintCreated' => ['onBlueprintCreated', 0],
      'onAdminCreatePageFrontmatter' => ['onAdminCreatePageFrontmatter', 0]
    ];

  }

  public function onAdminCreatePageFrontmatter(Event $event)
  {
    $header = $event['header'];

    if(substr($event['data']['name'], 0, 5) == 'entry'){
      $header['visible'] = 1;
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

}
