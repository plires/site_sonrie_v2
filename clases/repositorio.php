<?php

abstract class Repositorio {
  protected $repoContacts;
  protected $repoProducts;

  public function getRepoContacts() {
    return $this->repoContacts;
  }

  public function getRepoProducts() {
    return $this->repoProducts;
  }

}

?>