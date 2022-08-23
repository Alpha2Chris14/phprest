<?php
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: Post');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');
    //initializing our api
    include_once('../core/initialize.php');

    //instantiate post
    $post = new Post($db);

    //get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    $post->title = $data->title;
    $post->body = $data->body;
    $post->author = $data->author;
    $post->category_id = $data->category_id;

    //create post
    if($post->create()){
        echo json_encode(['status'=>200,'message'=>'Post Created Successfully']);
    }
    else{
        echo json_decode(["status"=>500,"message"=>"Failed To Create Post"]);
    }
?>