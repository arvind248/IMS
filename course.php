<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/batch.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
     
</head>
<body>
    <?php include_once './common/navbar.php'?>
    <div class="alert-msg">sdfs</div>        
    <div class="container">
        <form class="form-container" name="courseForm">
                <div class="field"><label for="">Course name</label><input type="text" name="name" id="name"></div> 
                <div class="field"><label for="">Duration</label><input name="duration" type="text"></div>
                <div class="field"><label for="">Course Fees</label><input name="fees" type="number"></div> 
                <div class="field"><label for="">Eligibility</label><input name="eligibility" type="text"></div>
                
                
                <div class="field"><label for="">Category</label>
                                                    <select name="category" id="" required>
                                                    <option value="" selected disabled hidden></option>
                                                    <option value="partTime">partTime</option>
                                                    <option value="fullTime">fullTime</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Certificate">Certificate</option>
                                                    <option value="Bachelor Degree">Bachelor Degree</option>
                                                    <option value="Master Degree">Master Degree</option>
                                                </select>
                </div> 
                
                


            


        </form>

        <div class="tools">
                    <button class="new-btn"><i class="fas fa-address-book"></i> New </button>
                    <button class="save-btn hide-btn"><i class="fas fa-save"></i> save</button>
                    <button class="update-btn"><i class="fas fa-edit"></i> update </button>
                    <button class="search-btn"><i class="fas fa-search"></i> search</button>
                    <button class="delete-btn"><i class="fas fa-trash-alt"> delete</i></button>

                    <button class="prev-btn">preV</button>
                    <button class="next-btn">neXt</button>
                    <button class="first-btn">first</button>
                    <button class="last-btn">last</button>
                    <button class="refresh-btn">Refresh</button>

        </div>
    </div> 
<script src="./js/course.js" type="module"></script>
</body>
</html>