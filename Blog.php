<?php

declare(strict_types=1);


class Blog
{
  protected $posts;

  public function __construct(array $posts)
  {
    $this->posts = $posts;
  }

  public function getPosts(): array
  {
    return $this->posts;
  }

  public function publish(Post $post):void
  {
    $this->posts[] = $post;
  }
}
