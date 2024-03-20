<?php

declare(strict_types=1);

namespace Drupal\jsld\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Annotation for JSON-LD Entity Plugin.
 *
 * @Annotation
 */
final class JsldEntity extends Plugin {

  /**
   * Plugin ID.
   */
  public string $id;

  /**
   * Define is current plugin enabled or not.
   *
   * By default, all plugins enabled, this is needed when some plugins want's to
   * be disabled for some reason.
   *
   * TRUE - enabled.
   * FALSE - disabled.
   */
  public bool $enabled;

  /**
   * Entity type to execute this plugin for.
   *
   * Only one entity type id can be set for single plugin.
   *
   * E.g. "node".
   */
  public string $entity_type;

  /**
   * Entity limitation.
   *
   * Limit entities by their bundle and\or view mode combinations.
   *
   * Array must contain values such as "$bundle|$view_mode" for each limitation.
   *
   * Supports for wildcard "*" and can be set by multiple bundles and view modes
   * in single plugin.
   *
   * E.g. {"news|teaser", "review|*"}
   */
  public array $entity_limit;

}
