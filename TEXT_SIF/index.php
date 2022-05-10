<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'project.php'; ?>
    </head>
    <body>
        <form action="index.php" method="post">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 text-center">
                        <select name="cesar" class="custom-select-sm">
                            <option value="cesar">Caesar cipher</option>
                        </select>
                    </div>                
                    <div class="col-lg-6">
                        <label for="key">KEY: </label>
                        <input type="text" class="key" name="key" id="key">
                    </div>    
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-8">
                        <label for="origin">TEXT</label><br>
                        <textarea name="origin" id="origin"><?php if(isset($_POST['cipher']) && $_POST['cipher'] === "cesar" && $_POST['decrypt']) { decesar();}?></textarea>
                    </div>
                    <div class="col-lg-4 text-center">
                        <button class="btn btn-primary first" name="encrypt">Encrypt</button><br>
                    </div>                
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-8">
                        <label for="encrypted">SIF TEXT</label><br>
                        <textarea name="encrypted" id="encrypted"><?php 
                        if(isset($_POST['cipher']) && $_POST['cipher'] === "cesar") {
                            cesar();
                        }?></textarea>
                    </div> 

                    <div class="col-lg-4 text-center">
                        <button class="btn btn-danger" name="decrypt" value="1">Decrypt</button><br>
                    </div>  
              </div>        
           </div>


    </body>
</html>
