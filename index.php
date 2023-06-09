<?php 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
    <link rel="stylesheet" href="style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>
<body>

    <div id="app">

        <div id="big-container" class="d-flex align-items-center justify-content-center flex-column">

            <div id="my-container">
                <h1>Todo List</h1>
                <div id="list">
                    <div class="my-col">
                        <ul class="my-row" v-for="listItem in list">
                            <li>{{listItem.text}}</li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div id="input-container" class="d-flex align-center">
                <input v-model="newTodo" type="text" @keyup.enter="addTodo()">
                <button class="btn btn-primary" @click="addTodo()">Add</button>
            </div>

        </div>
   
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>

<!-- :class="listItem.done == true ? : 'done' : '' " -->