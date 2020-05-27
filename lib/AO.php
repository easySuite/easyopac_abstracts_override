<?php

namespace AO;

use TingEntity;

/**
 * Class AbstractsOverride
 *
 * @package AO
 */
class AbstractsOverride extends TingEntity {

  /**
   * AbstractsOverride constructor.
   *
   * @param \TingEntity $entity
   */
  public function __construct(TingEntity $entity) {
    parent::__construct();
    $this->entity = $entity;
  }

  /**
   * {@inheritDoc}
   */
  public function getAbstract() {
    $reply = $this->entity->reply;
    $abstracts = $reply->record['dcterms:abstract'];
    $abstracts_values = reset($abstracts);
    return $this->entity->abstract = $abstracts_values;
  }

}
