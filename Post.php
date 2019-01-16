<?php

declare(strict_types=1);


class Post
{
  protected $title;
  protected $author;
  protected $publishDate;

  public function __construct(string $title, Author $author, DateTime $publishDate)
  {
    $this->title = $title;
    $this->author = $author;
    $this->publishDate = $publishDate;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getPublishDate(): DateTime
  {
    return $this->publishDate;
  }
}
