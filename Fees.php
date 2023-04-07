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
    <style>
       .form-container{
            height: 300px;
        }
        .emi-btn{
            font-size:15pt;
            background-color: white; 
            color: black; 
            border: 2px solid #6c13c6;
            background-color: #6c13c6;
            transition-duration: 0.4s;
            cursor: pointer;
            color: white;
            border-radius: 5px;
            

        }
        .emi-btn:hover{
            box-shadow:0px 0px 10px black;
        }
        .tools{
            height:120px;
        }
    </style>
     
</head>
<body>
    <?php include_once './common/navbar.php'?>
    <div class="alert-msg">sdfs</div>        
    <div class="container">
        <form class="form-container" name="feesForm" >
                <div class="field"><label for="">Roll no</label><input type="number" name="rollno" id="rollno" ></div> 
                <div class="field"><label for="">Name</label><input type="text" name="name"></div> 
                <div class="field"><label for="">date of birth</label><input type="date" name="dob"></div> 
                <div class="field"><label for="">course name</label><input name="course" id="course"></div> 
                <!-- <div class="field"><label for="">Course name</label><input type="text" name="name" id="name"></div>  -->
                <div class="field"><label for="">Duration</label><input name="duration" type="text"></div>
                <div class="field"><label for="">Course Fees</label><input class="course-fees" name="fees" type="number" value="0"></div> 
                <div class="field"><label for="">Schoolorship</label><input class="schoolorship"name="schoolorship" type="number" value="0"></div> 
                <div class="field"><label for="">Addmission fees</label><input class="addmsnfees" name="admsnfees" type="number" value="0"></div> 
                <div class="field"><label for="">Remaining</label><input class="remaining" name="remaining" type="number" ></div> 
                
                <div class="field"><label for="">Interest Rate (yr) </label><input class="rate" name="rate" type="number"></div> 
                <div class="field"><label for="">Time (months)</label><input class="tenure" name="tenure" type="text"></div>
                <div class="field"><label for="">EMI</label><input class="emi" name="emi" type="number"></div> 
                <div class="field"><label for="">Date of 1st EMI</label><input name="firstemi" type="date"></div>
                
                <div class="field"> <label for=""></label><button class="emi-btn">Calculate EMI</button></div> 
                
                
                
                
                
                


            


        </form>

        <div class="tools">
                    <button class="new-btn"><i class="fas fa-address-book"></i> New </button>
                    <button class="save-btn hide-btn"><i class="fas fa-save"></i> save</button>
                    <button class="update-btn"><i class="fas fa-edit"></i> update </button>
                    <button class="search-btn"><i class="fas fa-search"></i> search</button>
                    <button class="delete-btn"><i class="fas fa-trash-alt"> delete</i></button>
                   
                    <button class="refresh-btn">Refresh</button>
        </div>
    </div> 
<script src="./js/fees.js" type="module"></script>
</body>
</html>