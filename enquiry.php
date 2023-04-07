<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/enquiry.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php include_once './common/navbar.php'?>
    <div class="alert-msg">sdfs</div>        
    <div class="container">
    <div class="form-container">
        <form name="enquiryForm" >
           
            <fieldset >
                <legend>Enquiry Details</legend>
                <div class="field"><label for="">Enquiry no</label><input type="number" name="enquiryid" id="enquiryid" required></div> 
            <div class="field"><label for="">enquiry date</label><input type="date" name="enquirydate"></div> 
            <div class="field"><label for="">Registration Fees</label>
                                                        <select name="registrationfees" required>
                                                                <option value="" selected disabled hidden></option>
                                                                <option value="NOT PAID">NOT PAID</option>
                                                                <option value="PAID">PAID</option>
                                                                
                                                        </select> 
        
        
            </div> 
            <div class="field"><label for="">status</label>     
                                                        <select name="status" required>
                                                                <option value="" selected disabled hidden></option>
                                                                <option value="NEW ENQUIRY">NEW ENQUIRY</option>
                                                                <option value="VISITED">VISITED</option>
                                                                <option value="ENROLLED">ENROLLED</option>
                                                                <option value="NOT RESPOND">NOT RESPOND</option>
                                                        </select> 

            </div> 
            </fieldset>
            <fieldset class="en">
                <legend>Candidate Details</legend>
                <div class="field"><label for="">Candidate name</label><input type="text" name="name"></div> 
            <div class="field"><label for="">gender</label >
                                                        <select name="gender" id="" required>
                                                                <option value="" selected disabled hidden></option>
                                                                <option value="Male">Male</option>
                                                                <option value="female">Female</option>
                                                        </select> </div> 
            
            <div class="field"><label for="">course name</label>
                                                        <select name="course" id="course">

                                                        </select>                           
            </div> 
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
            <div class="field"><label for="">Highest Qualification</label>
                                                            <select name="qualification" id="" required>
                                                                    <option value="" selected disabled hidden></option>
                                                                    <option value="10">10</option>
                                                                    <option value="10+2">10+2</option>
                                                                    <option value="undergraduate">Undergraduate</option>
                                                                    <option value="graduate">graduate</option>
                                                                    <option value="postgraduate">postgraduate</option>
                                                                    

                                                            </select>
            </div> 
            <div class="field"><label for="">passing year</label>   
                                                            <select name="passingyear" id="" required>
                                                                    <option value="" selected disabled hidden></option>
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
            <div class="field"><label for="">nationality</label><input name="nationality" type="text"></div>                                 
           
            
            </fieldset>



            
        </form>        
        
    </div>
    <div class="tools">
                <button class="new-btn"><i class="fas fa-address-book"></i> New </button>
                <button class="save-btn hide-btn"><i class="fas fa-save"></i> save</button>
                <button class="update-btn"><i class="fas fa-edit"></i> update </button>
                <button class="search-btn"><i class="fas fa-search"></i> search</button>
                <button class="enroll-btn"> Enroll</button>
                <button class="prev-btn">preV</button>
                <button class="next-btn">neXt</button>
                <button class="first-btn">first</button>
                <button class="last-btn">last</button>
                <button class="refresh-btn">Refresh</button>

    </div>
</div> 
<script src="./js/enquiry.js" type="module"></script>
</body>
</html>