<?php

namespace Source\Support;

use CoffeeCode\Optimizer\Optimizer;

class Seo
{
  protected $optmizer;

  public function __construct(string $schema = "article")
  {
    $this->optmizer = new Optimizer();
    $this->optmizer->openGraph(
      SITE,
      "pt_BR",
      $schema
    )->publisher(
      "matheus.goncalvez.3",
      "matheus.goncalvez.3"
    )->twitterCard(
      "@Matheus30116663",
      "@Matheus30116663",
      ""
    )->facebook(
      null,
      [
        "matheus.goncalvez.3"
      ]
    );
  }

  public function render(
    string $title,
    string $description,
    string $url,
    string $image,
    bool $follow = true
  ): string {
    return $seo = $this->optmizer->optimize(
      $title,
      $description,
      $url,
      $image,
      $follow
    )->render();
  }
}
