<?php
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');
    //initializing our api
    include_once('../core/initialize.php');

    //instantiate post
    $post = new Post($db);

    //get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    $post->id = $data->id;

    //create post
    if($post->delete()){
        echo json_encode(['status'=>200,'message'=>'Post was deleted Successfully']);
    }
    else{
        echo json_decode(["status"=>500,"message"=>"Failed To delete Post"]);
    }
?>