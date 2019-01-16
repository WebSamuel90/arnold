<?php

declare(strict_types=1);


class Post
{
  protected $title;
  protected $author;

  public function __construct(string $title, Author $author)
  {
    $this->title = $title;
    $this->author = $author;
  }

  public function getTitle(): string
  {
    return $this->title;
  }
}
