<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/student.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php include_once './common/navbar.php'?>
    <div class="alert-msg">sdfs</div>        
    <div class="container">
    <div class="form-container">        
        <form name="studentForm">
            <div class="field"><label for="">Roll no</label><input type="number" name="rollno" id="rollno" required></div> 
            <div class="field"><label for="">Name</label><input type="text" name="name"></div> 
            <div class="field"><label for="">date of birth</label><input type="date" name="dob"></div> 
            <div class="field"><label for="">gender</label>
                                                        <select name="gender" id="">
                                                                <option value=""></option>
                                                                <option value="Male">male</option>
                                                                <option value="female">female</option>
                                                        </select> </div> 
            
            <div class="field"><label for="">course name</label>
                                                            <select name="course" id="course">

                                                            </select>                           
            </div> 
            <div class="field"><label for="">address</label><input type="text" name="address"></div> 
            
            <div class="field"><label for="">state</label> 
                                                        <select name="state" id="state">
                                                                
                                                        </select></div> 
            <div class="field"><label for="">city</label>
                                                        <select name="city" id="city">
                                                                
                                                        </select></div> 
            <div class="field"><label for="">PIN code</label><input name="pin" type="number"></div> 
            <div class="field"><label for="">father name</label><input name="fathername" type="text"></div> 
            <div class="field"><label for="">mother name</label><input name="mothername" type="text"></div> 
            <div class="field"><label for="">Mobile no</label><input type="text" name="mobileno"></div> 
            <div class="field"><label for="">Email ID</label><input type="email" name="email"></div> 
            <div class="field"><label for="">Highest Qualification</label>
                                                            <select name="qualification" id="">
                                                                    <option></option>
                                                                    <option value="10">10</option>
                                                                    <option value="10+2">10+2</option>
                                                                    <option value="undergraduate">Undergraduate</option>
                                                                    <option value="graduate">graduate</option>
                                                                    <option value="postgraduate">postgraduate</option>
                                                                    

                                                            </select>
            </div> 
            <div class="field"><label for="">passing year</label>   
                                                            <select name="passingyear" id="">
                                                                    <option ></option>
                                                                    <option >2010</option>
                                                                    <option >2011</option>
                                                                    <option >2012</option>
                                                                    <option >2013</option>
                                                                    <option >2014</option>
                                                                    <option >2015</option>
                                                                    <option >2016</option>
                                                                    <option >2017</option>
                                                                    <option >2018</option>
                                                                    <option >2019</option>
                                                                    <option >2020</option>
                                                                    <option >2021</option>
                                                                    <option >2022</option>
                                                                    <option >2023</option>                                                                                                                                                                                                            
                                                            </select> </div> 
            <div class="field"><label for="">Admission date</label><input name="admdate" type="date" ></div> 
            <div class="field"><label for="">nationality</label><input name="nationality" type="text"></div>                                 

            
        </form>        
        
    </div>
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

    </div>
</div> 
<script src="./js/student.js" type="module"></script>
</body>
</html>