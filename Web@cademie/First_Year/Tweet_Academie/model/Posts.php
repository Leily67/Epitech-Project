<?php

require_once("../model/Db.php");

class Posts extends Db {
    
    static function getPosts() {
        $db = Db::dbConnect();
        $query = $db->query('SELECT p.id, p.id_user, p.content, p.created_at, p.image_url, p.hashtags, p.tags, u.username, u.profile_picture FROM posts p INNER JOIN users u ON p.id_user = u.id ORDER BY p.created_at DESC');
        $results = $query->fetchAll();
        return $results;
    }

    static function createPost($uid, $content, $image = null, $hashtags = null, $tags = null) {
        $db = Db::dbConnect();
        $query = $db->query('INSERT INTO posts (id_user, content, created_at, image_url, hashtags, tags) VALUES (:id_user, :content, NOW(), :image_url, :hashtags, :tags)');
        $query->execute(array('id_user' => $uid, 'content' => $content, 'image_url' => $image, 'hashtags' => $hashtags, 'tags' => $tags));
        $results = Posts::getPosts();
        return $results;
    }

    static function deletePost($postId) {
        $db = Db::dbConnect();
        $query = $db->prepare('DELETE FROM posts WHERE id = :postId');
        $query->execute(array('postId' => $postId));
        $results = Posts::getPosts();
        return $results;
    }
}