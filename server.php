<?php

    if(isset($_POST["newTodo"])){

        $newTodo = array();
        $newTodo["text"] = $_POST["newTodo"];
        $newTodo["done"] = false;


        $todosJSON = file_get_contents("list.json");

        $todos =  json_decode($todosJSON);

        $todos[] = $newTodo;

        $newTodoJSON = json_encode($todos);
        
        file_put_contents("list.json", $newTodoJSON);

    } else {
        
        // took the json array (that is a string) and saved in a variable
        $jsonString = file_get_contents("list.json");

        //decoded the string in php file saving again in a variable
        $list =  json_decode($jsonString);



        // here we can do any check / change we need, we can manipolate the array
        // to send it again.



        //defined the type of file like a json application
        header("Content-Type: application/json"); 

        //converted the file again in json to send it, otherwise the page will be empty 
        echo json_encode($list);

    }


