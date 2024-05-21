<?php

namespace App\Model;

use Nette;

final class PostFacade
{
    public function __construct(
        private Nette\Database\Explorer $database,
    ) {
    }

    public function getPublicArticles()
    {
        return $this->database
            ->table('posts')
            ->where('created_at < ', new \DateTime)
            ->order('created_at DESC');
    }

    public function getPostById(int $postId)
    {
        return $this->database
            ->table('posts')
            ->select('id, title, content, created_at, image, status, views, likes, dislikes') // Zajistěte, aby tyto sloupce byly zahrnuty
            ->get($postId);
    }
    

    public function getComments(int $postId)
    {
        return $this->database
            ->table('comments')
            ->where('post_id', $postId)
            ->order('created_at');
    }

    public function addComment(int $postId, \stdClass $data)
    {
        $this->database->table('comments')->insert([
            'post_id' => $postId,
            'name' => $data->name,
            'email' => $data->email,
            'content' => $data->content,
        ]);
    }

    public function createComment(int $postId, \stdClass $data)
    {
        $this->database->table('comments')->insert([
            'post_id' => $postId,
            'name' => $data->name,
            'email' => $data->email,
            'content' => $data->content,
        ]);
    }

    public function editPost(int $postId, array $data)
    {
        $this->database
            ->table('posts')
            ->get($postId)
            ->update($data);
    }

    public function insertPost(array $data)
    {
        return $this->database
            ->table('posts')
            ->insert($data);
    }

  
    public function addView(int $postId): void
{
    $this->database->table('posts')
        ->where('id', $postId)
        ->update(['views' => new Nette\Database\SqlLiteral('views + 1')]);
}

public function updateRating(int $userId, int $postId, int $liked): void
{
    $row = $this->database->table('rating')
        ->where('user_id', $userId)
        ->where('post_id', $postId)
        ->fetch();

    if ($row) {
        $this->database->table('rating')
            ->where('user_id', $userId)
            ->where('post_id', $postId)
            ->update(['liked' => $liked]);
    } else {
        $this->database->table('rating')->insert([
            'user_id' => $userId,
            'post_id' => $postId,
            'liked' => $liked
        ]);
    }

    // Aktualizace počtu liků a disliků
    $this->updatePostLikes($postId);
}

private function updatePostLikes(int $postId): void
{
    $likes = $this->database->table('rating')
        ->where('post_id', $postId)
        ->where('liked', 1)
        ->count();

    $dislikes = $this->database->table('rating')
        ->where('post_id', $postId)
        ->where('liked', 0)
        ->count();

    $this->database->table('posts')
        ->where('id', $postId)
        ->update([
            'likes' => $likes,
            'dislikes' => $dislikes
        ]);
}
public function getUserRating(int $userId, int $postId)
{
    return $this->database->table('rating')
        ->where('user_id', $userId)
        ->where('post_id', $postId)
        ->fetch();
}


}
