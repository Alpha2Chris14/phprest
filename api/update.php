<?php
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
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
    $post->id = $data->id;

    //create post
    if($post->update()){
        echo json_encode(['status'=>200,'message'=>'Post Updated Successfully']);
    }
    else{
        echo json_decode(["status"=>500,"message"=>"Failed To Update Post"]);
    }
?>