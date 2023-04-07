<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/issuebook.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
     
</head>
<body>
<?php include_once './common/navbar.php'?>
    <div class="alert-msg">sdfs</div>        
    <div class="container">
        <form class="form-container" name="issueForm">
                <div class="top">
                    <fieldset >
                        <legend>Issue Details</legend>
                        <div class="field"><label for="">Issue ID</label><input type="text" name="issueid" id="issueid"></div> 
                        <div class="field"><label for="">Issue Date</label><input name="issuedate" type="date"></div>                            
                        <div class="field"><label for="">Due Date</label><input name="duedate" type="date"></div> 
                        
                    </fieldset>   
                </div>

                <div class="bottom">
                    <div class="left">
                        <fieldset >
                            <legend>Book Details</legend>
                                <div class="field"><label for="">Book ID</label><input type="number" name="bookid" id="bookid"  class="bookid"></div> 
                                <div class="field"><label for="">name</label><input type="text" name="name" class="name"></div> 
                                <div class="field"><label for="">title</label><input name="title" type="text" class="title"></div>                            
                                <div class="field"><label for="">Author</label><input name="author" type="text" class="author"></div>                                 
                              
                                <div class="field"><label for="">category</label><input name="category" type="text" class="category"></div>
                                <div class="field"><label for="">status</label><input name="status" type="text" class="status"></div>
                                                                        
                            
                        </fieldset>
        
                    </div>
                    <div class="right">
                        <fieldset>
                            <legend>Student Details</legend>
                                <div class="field"><label for="">Roll no</label><input type="number" name="rollno" class="rollno" id="rollno" required></div> 
                                <div class="field"><label for="">Name</label><input type="text" name="name" class="name"></div> 
                                <div class="field"><label for="">date of birth</label><input type="date" name="dob" class="dob"></div> 
                                <div class="field"><label for="">gender</label> <input type="text" name="gender" class="gender"></div> 
                                <div class="field"><label for="">Mobile no</label><input type="text" name="mobileno" class="mobileno"></div> 
                                <div class="field"><label for="">Email ID</label><input type="email" name="email" class="email"></div> 
                        </fieldset>
                    </div>
                </div>
            
            
        
                
            


        </form>

        <div class="tools">
                    <button class="issue-btn">Issue </button>                                    
                    <button class="save-btn">Save </button>                                    
                    <button class="search-btn"> search</button>
                    <button class="cancle-btn">cancle</button>

                
        </div>
    </div> 
<script src="./code.js" type="module"></script>
</body>
</html>