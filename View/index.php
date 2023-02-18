<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form class="m-auto w-75 my-5" id="artForm">
    
        <div class="df">
            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="title0" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Author</label>
                <input type="text" class="form-control" id="author0" placeholder="Author">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Category</label>
                <select name="" id="category0" class="form-control">
                    <option value="">Enter your category ..</option>
                    <option value="Mobile Development">Mobile Development</option>
                    <option value="Web Development">Web Development</option>
                    <option value="AI">AI</option>
                    <option value="Data Science">Data Science</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Content</label>
                <textarea type="text" class="form-control" id="description0" placeholder="Content"></textarea>
            </div>
        </div> 
    
</form>
    <div>
        <a href="" type="submit" id="save" class="btn btn-primary my-3">Save</a>
        <a href=""  id="mybtn" class="btn btn-success my-3">Add another Article</a>
    </div> 
<script src="../public/app.js"></script>
</body>
</html>