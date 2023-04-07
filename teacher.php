<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/teacher.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
         select:invalid{
        color: gray;
    }
    option{
        color: black;
    }
    </style>
</head>
<body>
<?php include_once './common/navbar.php'?>
    <div class="alert-msg">sdfs</div>        
    <div class="container">
        <form class="form-container" name="empForm">
            <div class="left">
                <fieldset>
                <legend>Personalia</legend>
                <div class="field"><label for="">Employee ID</label><input type="number" name="empid" id="empid" required></div> 
                <div class="field"><label for="">Name</label><input type="text" name="name"></div> 
                <div class="field"><label for="">date of birth</label><input type="date" name="dob"></div> 
                <div class="field"><label for="">gender</label>
                                                            <select name="gender" id="" required>
                                                                    <option value="" disabled hidden selected></option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="female">Female</option>
                                                            </select> </div> 
                
                
                <div class="field"><label for="">address</label><input type="text" name="address"></div> 
                
                <div class="field"><label for="">state</label> 
                                                            <select name="state" id="state" required>
                                                                    
                                                            </select></div> 
                <div class="field"><label for="">city</label>
                                                            <select name="city" id="city" required>
                                                                    
                                                            </select></div> 
                <div class="field"><label for="">PIN code</label><input name="pin" type="number"></div> 
                <div class="field"><label for="">father name</label><input name="fathername" type="text"></div> 
                
                <div class="field"><label for="">Mobile no</label><input type="text" name="mobileno"></div> 
                <div class="field"><label for="">Email ID</label><input type="email" name="email"></div> 
                <div class="field"><label for="">nationality</label><input name="nationality" type="text"></div>                            
                </fieldset>
            </div>
            <div class="right">
                <div class="top">
                    <fieldset>
                        <legend>Qualification</legend>
                        <table  id="qualification-table">
                            <tr >
                                <th ></th><th>Degree/Diploma/certificate</th ><th width="250px">School/college/Institute</th><th >passing year</th><th >Marks</th>
                            </tr>

                                                   
                        </table>


                    </fieldset>     
                                            
                        
                </div>
                <div class="middle">
                    <div class="left">
                        <fieldset>
                            <legend>Teaching Experience</legend>
                            <table>
                                <tr>
                                    <td>Experience</td><td width="80px"><input type="text" name="experience1"></td><td width="150px">College/school/institute name</td><td><input type="text" name="teachingplace1"></td>
                                </tr>
                                <tr>
                                    <td>Experience</td><td width="80px"><input type="text" name="experience2"></td><td width="150px">College/school/institute name</td><td><input type="text" name="teachingplace2"></td>
                                </tr>
                                <tr>
                                    <td>Experience</td><td width="80px"><input type="text" name="experience3"></td><td width="150px">College/school/institute name</td><td><input type="text" name="teachingplace3"></td>
                                </tr>
                                <tr>
                                    <td>Experience</td><td width="80px"><input type="text" name="experience4"></td><td width="150px">College/school/institute name</td><td><input type="text" name="teachingplace4"></td>
                                </tr>
                            </table>

                        </fieldset>
                    </div>
                    <div class="right">
                        <fieldset>
                            <legend>Account Details</legend>
                            <table>
                                <tr>
                                    <td><label for="">Account holder name</label><input type="text" name="holdername"></td>
                                    <td><label for="">account number</label><input type="text" name="accountno"></td>        
                                    <td><label for="">IFS code</label><input type="text" name="ifsc"></td>
                                    <td><label for="">PAN number</label><input type="text" name="pan"></td>
                                </tr>
                            </table>
                            
                            
                            
                            
                            
                        </fieldset>
                    </div>
                    <div class="buttom">
                                <fieldset>
                                    <legend>Employeement Details</legend>
                                                                        
                                    <label for="">Basic pay</label><input type="text" name="basicpay">
                                    <label for="">Working Hours</label><input type="text" name="workinghrs">
                                    <label for="">date of joining</label><input type="text" name="doj">
                                </fieldset>
                    </div>
                </div>
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

        </div>
    </div> 
<script src="./js/teacher.js" type="module"></script>
</body>
</html>