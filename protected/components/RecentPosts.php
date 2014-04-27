<?php
  // @version $Id$

class RecentPosts extends CPortlet
{
  public $title='Recent Posts';
  public $maxPosts=10;

  public function getRecentPosts()
  {
    return Post::model()->findRecentPosts($this->maxPosts);
  }

  protected function renderContent()
  {
    $this->render('recentPosts');
  }
}
?>